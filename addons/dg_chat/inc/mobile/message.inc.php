<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];
$room_id=$_GPC['room_id'];

$user_info=$this->getUserInfo();

if(empty($room_id)){
	exit;
}

$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));

$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;

$mychat_url=$this->createMobileUrl('my_chat');
$index_url=$this->createMobileUrl('room');
$chat_url=$this->createMobileUrl('chat_index',array("room_id"=>$room_id));

include $this->template('message');