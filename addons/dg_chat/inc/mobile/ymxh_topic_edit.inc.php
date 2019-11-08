<?php
/*
陆新泽
删除系列课，编辑直播课程
参数：topic_id,imgid,mediaid,serverid,create
*/
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];

$topic_id=$_GPC['topic_id'];
$topic_id=intval($topic_id);
$op=$_GPC['op'];
$user_info=cache_load('user_info');
if(!$user_info){
  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}
$uid=$user_info['id'];
//$openid='oIQzC0iDtOwnFSBT9coEz7SOx0EM';
//
load()->func('file'); //调用上传函数
// $dir_url='../attachment/images/'.$_W['uniacid']."/"; //上传路径
// //mkdirs($dir_url); //创建目录
// $cfg['rootca']=$_GPC['topic_icon']; //接受参数
// var_dump($cfg['rootca']);
// $cfg['topic_imgs']=$_GPC['topic_imgs'];
// //$cfg['apiclient_key']=$_GPC['apiclient_key2'];
// if ($_FILES["rootca"]["name"]){
// 	var_dump($_FILES['rootca']['name']);
// if(file_exists($dir_url.$settings["rootca"]))@unlink ($dir_url.$settings["rootca"]);
// $cfg['rootca']=TIMESTAMP.".pem";
// move_uploaded_file($_FILES["rootca"]["tmp_name"],$dir_url.$cfg['rootca']); //移动到目录下
// }

//
//查询话题表数据
$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:id ",array(":id"=>$topic_id));
if(!empty($topic['topic_imgs'])){
	$imgs=json_decode($topic['topic_imgs'],true);
	 for($i=0;$i<count($imgs);$i++){
		$dd.='<dd class="album-item album-img" style="background-image: url('.$imgs[$i].');"><i onclick="del(this);"></i></dd>';
	 }
}
if(!empty($_GPC['imgid'])){
	unset($topic['topic_imgs'][$_GPC['imgid']]);
}
if(empty($topic)){
	exit;
}
$topic['begin_time']=date('Y-m-d H:i:s', $topic['begin_time']);
$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$topic['room_id']));
if(empty($chat_room)){
	exit;
}

$is_manager=$this->is_manager($chat_room['room_id'])||$chat_room['create_openid']==$user_info['openid'];
if(!$is_manager){
	exit;
}

//上传图片
if(!empty($_GPC['mediaid'])){

	header('content-type:application/json;charset=utf8');
	$account = WeAccount::create($_W['account']);
	//var_dump($account);
	//VwAOXNga1hIssuvxEMKV71RDDtoP7R7WwpaUB6yK03Vblc.jpg
	$medias['media_id']=$_GPC['mediaid'];
	$medias['type']="image";
	$filename=$account->downloadMedia($medias);
     var_dump($_GPC['mediaid']);
	$fmdata = array(
			"code" => 100,
			"imgurl" =>tomedia($filename),
	);
	
	echo json_encode($fmdata);
	exit();
}

//上传图片
if(!empty($_GPC['serverid'])){
	header('content-type:application/json;charset=utf8');
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['serverid'];
	$medias['type']="image";
	$filename=$account->downloadMedia($medias);
	
	$fmdata = array(
			"code" => 100,
			"imgurl" =>tomedia($filename),
	);

	echo json_encode($fmdata);
	exit();
}
$upload = $_FILES['topic_icon'];
var_dump($upload);exit;

//保存数据
if($op=='create'){
	
	header('content-type:application/json;charset=utf8');	
	$begin_time=$_GPC['begin_time'];
	$begin_time=strtotime($begin_time);
	$topic_imgs=$_GPC['topic_imgs'];
	if(!empty($_GPC['topic_imgs'])){
		$topic_imgs=json_encode($_GPC['topic_imgs']);
	}
	$data=array(
			// "topic_name"=>str_replace(PHP_EOL, '',$_GPC['topic_name']),
			// "topic_desc"=>str_replace(PHP_EOL, '',$_GPC['topic_desc']),
		    "topic_name"=>$_GPC['topic_name']?$_GPC['topic_name']:$topic['topic_name'],
			"topic_desc"=>$_GPC['topic_desc']?$_GPC['topic_desc']:$topic['topic_desc'],
			"topic_icon"=>$_GPC['topic_icon']?$_GPC['topic_icon']:$topic['topic_icon'],
			"guest_name"=>$_GPC['guest_name']?$_GPC['guest_name']:$topic['guest_name'],
			"guest_info"=>$_GPC['guest_info']?$_GPC['guest_info']:$topic['guest_info'],
			"tags"=>$_GPC['tags']?$_GPC['tags']:$topic['tags'],
			"is_opendm"=>$_GPC['is_opendm']?$_GPC['is_opendm']:$topic['is_opendm'],
			"begin_time"=>$begin_time?$begin_time:$topic['begin_time'],
			"topic_imgs"=>$topic_imgs?$topic_imgs:$topic['topic_imgs'],
			//'spread'=>$_GPC['spread']
	);
	if($topic['topic_style'] == 6){
		$data['third_url'] = $_GPC['third_url'];
	}
	if($topic['topic_type'] =='ticket'){
		$data['room_paymoney'] = $_GPC['room_paymoney'];
	}
	pdo_update("chat_topic",$data,array("id"=>$topic_id));
		
	//$redirect_url=$this->createMobileUrl('chat_index',array('room_id'=>$chat_room['room_id']));
	$fmdata = array(
			"code" => 100,
			"data" =>'修改成功',
	);
	
	echo json_encode($fmdata);
	exit;
}



