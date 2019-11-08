<?php
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();
$topic_id=$_GPC['topic_id'];
if(empty($topic_id)){
	exit;
}

$topic_id=intval($topic_id);
$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE  id=:id LIMIT 1",array(":id"=>$topic_id));
	if(empty($topic)){
		exit;
	}
	$room_id=$topic['room_id'];
	$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
	$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;
	if(!$is_manager){
		exit;
	}
	
	header('content-type:application/json;charset=utf8');	
	pdo_delete("chat_topic",array("id"=>$topic_id,"uniacid"=>$uniacid));
	
	$fmdata = array(
				"success" => 1,
				"data" =>"成功删除话题！",
	);
		
	echo json_encode($fmdata);
	exit;

