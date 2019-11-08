<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];
$room_id=$_GPC['room_id'];

$user_info=$this->getUserInfo();
$openid = $user_info->openid;
if(empty($room_id)){
	exit;
}
$cfg = $this->module['config'];
$is_subscribe=pdo_fetchcolumn("SELECT 1 FROM ".tablename("chat_subscribe")." WHERE openid=:openid AND room_id=:room_id AND sub_type='room' LIMIT 1",array(":openid"=>$user_info->openid,":room_id"=>$room_id));
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$is_pc=0;
if (strpos($user_agent, 'MicroMessenger') === false) {
	$is_pc=1;
}
//删除系列课
if(!empty($_GPC['delete_series'])){
	$series_id =$_GPC['series_id'];
	pdo_update("chat_room",array("is_del"=>1),array("id"=>$series_id));
	pdo_update('chat_topic',array("is_del"=>1),array("series_id"=>$series_id));
	header('content-type:application/json;charset=utf8');
	$fmdata =array(
			"data"=>'成功',
			'success'=>-1
		);
	echo json_encode($fmdata);exit;
}
//对话题进行操作对象
if(!empty($_GPC['topic_id'])&& $_GPC['type'] =='action'){
	header('content-type:application/json;charset=utf8');
	$topic_info = pdo_get('chat_topic',array('id'=>$_GPC['topic_id']));
	echo json_encode($topic_info);exit;
}
//对系列课操作
if(!empty($_GPC['topic_id'])&&$_GPC['type'] =='move'){
	header('content-type:application/json;charset=utf8');
	$data = array(
			'series_id'=>$_GPC['series_id'],
			'topic_type'=>'public',
			'room_paymoney'=>0,
			'room_password'=>'',
			'qrcode_url'=>'',
			'qrcode_desc'=>''
		);
	pdo_update('chat_topic',$data,array('id'=>$_GPC['topic_id']));
	$fmdata =array(
			"data"=>'成功',
			'success'=>1
		);
	echo json_encode($fmdata);exit;
}


$pindex = max(1, intval($_GPC['pindex']));
$psize = 10;
$total = pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_topic")." WHERE room_id=:room_id AND uniacid=:uniacid  and series_id is null AND topic_status!=-1 and is_del is null  ORDER BY ID DESC",array(":room_id"=>$room_id,":uniacid"=>$uniacid));

$pages = ceil($total / $psize);
if($pindex>$pages&&$pages>0)
	$pindex =$pages;

$topics_ing=pdo_fetchall("SELECT * FROM ".tablename("chat_topic")." WHERE room_id=:room_id AND uniacid=:uniacid and series_id is null AND topic_status!=-1 and is_del is null ORDER BY topic_order DESC,topic_status asc,id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize,array(":room_id"=>$room_id,":uniacid"=>$uniacid));


foreach ($topics_ing as &$t_ing){
	$t_ing['begin_time'] =date("m/d H:i:s",$t_ing['begin_time']);
	$t_ing['look_numbers']=$t_ing['look_numbers']+$t_ing['x_look_numbers'];
}



$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
if(!empty($chat_room['chat_imgs'])){

	$imgs=json_decode($chat_room['chat_imgs'],true);
	
	for($i=0;$i<count($imgs);$i++){
		$j=stripos($imgs[$i],"http");
		if($j == 0){
			$imgdesc.='<img src='.$imgs[$i].' style="width:auto; height:auto;
		max-width:100%; max-height:100%;">';
		}else{
			$imgdesc.='<img src='.substr($imgs[$i],$j,strlen($imgs[$i])-12).' style="width:auto; height:auto;
		max-width:100%; max-height:100%;">';
		}
		
	}
	$desc='<p>'.$chat_room['room_desc'].'</p>';
	$desc.=$imgdesc;
	$topic_desc=htmlspecialchars($desc);
	$chat_room['room_desc']=htmlspecialchars_decode($topic_desc);

}
//线下辅导

$setting_url=$this->createMobileUrl('chat_setting',array("room_id"=>$room_id));
$topic_createurl=$this->createMobileUrl('topic_create',array("room_id"=>$room_id));
$series_createurl=$this->createMobileUrl('series_create',array("room_id"=>$room_id));
$sub_count=pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename("chat_subscribe")." WHERE room_id=:room_id",array(":room_id"=>$room_id));
$sub_count=empty($sub_count)?0:$sub_count;
$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;
$mychat_url=$this->createMobileUrl('my_chat');
$cchat_url=$this->createMobileUrl('c_index',array("room_id"=>$room_id,"refresh"=>1));
//系列课列表
$series_list = pdo_fetchall("SELECT A1.*,(select count(*) from ".tablename('chat_payment')." A2 where A2.uniacid=:uniacid and A2.room_id=:room_id and A2.pay_status=1 and A2.series_id=A1.id) as count,A3.tag_name from ".tablename('chat_room')." A1 left join ".tablename('chat_tags')." A3 on A1.tags=A3.ID where A1.uniacid=:uniacid and A1.series_id=:room_id and A1.room_status =1 and A1.is_del is null order by create_time desc",array(':uniacid'=>$uniacid,":room_id"=>$room_id));

if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['pages']=$pages;
	$result['list']=$topics_ing;
	echo json_encode($result);
	exit;
}

$sharedata=array(
		"title"=>str_replace(array("\r\n", "\r", "\n"), '',$chat_room['room_name']),
		"desc"=>str_replace(array("\r\n", "\r", "\n"), '',strip_tags($chat_room['room_desc'])),
		"link"=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'],
		"imgUrl"=>$chat_room['room_icon'],
);
$cfg=$this->module['config'];
$qrcode_type=$cfg['qr_code'];
$qrcode_type=empty($qrcode_type)?1:$qrcode_type;
include $this->template('chat_index');