<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];

$topic_id=$_GPC['topic_id'];
$topic_id=intval($topic_id);

$user_info=$this->getUserInfo();

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

$is_manager=$this->is_manager($chat_room['room_id'])||$chat_room['create_openid']==$user_info->openid;
if(!$is_manager){
	exit;
}

//上传图片
if(!empty($_GPC['mediaid'])){
	header('content-type:application/json;charset=utf8');
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['mediaid'];
	$medias['type']="image";
	$filename=$account->downloadMedia($medias);
	
	$fmdata = array(
			"success" => 1,
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
			"success" => 1,
			"imgurl" =>tomedia($filename),
	);

	echo json_encode($fmdata);
	exit();
}

//保存数据
if(!empty($_GPC['create'])){
	header('content-type:application/json;charset=utf8');	
	$begin_time=$_GPC['begin_time'];
	$begin_time=strtotime($begin_time);
	$topic_imgs=$_GPC['topic_imgs'];
	if(!empty($_GPC['topic_imgs'])){
		$topic_imgs=json_encode($_GPC['topic_imgs']);
	}
	$data=array(
			"topic_name"=>str_replace(PHP_EOL, '',$_GPC['topic_name']),
			"topic_desc"=>str_replace(PHP_EOL, '',$_GPC['topic_desc']),
			"topic_icon"=>$_GPC['topic_icon'],
			"guest_name"=>$_GPC['guest_name'],
			"guest_info"=>$_GPC['guest_info'],
			"tags"=>$_GPC['tags'],
			"is_opendm"=>$_GPC['is_opendm'],
			"begin_time"=>$begin_time,
			"topic_imgs"=>$topic_imgs,
			'spread'=>$_GPC['spread']
	);
	if($topic['topic_style'] == 6){
		$data['third_url'] = $_GPC['third_url'];
	}
	if($topic['topic_type'] =='ticket'){
		$data['room_paymoney'] = $_GPC['room_paymoney'];
	}
	pdo_update("chat_topic",$data,array("id"=>$topic_id));
		
	$redirect_url=$this->createMobileUrl('chat_index',array('room_id'=>$chat_room['room_id']));
	$fmdata = array(
			"success" => 1,
			"data" =>$redirect_url,
	);
	
	echo json_encode($fmdata);
	exit;
}

/*处理标签开始*/
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
/*处理标签结束*/
if($topic["topic_style"]==2){
	$qc_data=pdo_fetch("select * from ".tablename("chat_qc_data")." where id=:id",array(":id"=>$topic["vedio_id"]));
}

include $this->template('topic_edit');