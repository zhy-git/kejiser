<?php
global $_GPC,$_W;	

$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];
$room_id=$_GPC['room_id'];
$user_info=$this->getUserInfo();
if(empty($room_id)){
	exit;
}

$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));

$is_creater=$chat_room['create_openid']==$user_info->openid;

$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;
if(!$is_manager){
	exit;
}

if(!empty($_GPC['manage_id'])){
	header('content-type:application/json;charset=utf8');
	$manage_id=intval($_GPC['manage_id']);
	$fmdata = array(
			"success" => -1,
			"data" =>"删除失败!",
	);
	if($is_manager){
		pdo_delete("chat_roommanager",array("id"=>$manage_id));
		$fmdata = array(
				"success" => 1,
				"data" =>"删除成功!",
		);
	}

	echo json_encode($fmdata);
	exit;
}

$invite_url=$this->createMobileUrl('room_manager_invite',array("room_id"=>$room_id));
$managers=pdo_fetchall("SELECT * FROM ".tablename("chat_roommanager")." WHERE room_id=:room_id",array(":room_id"=>$room_id));

include $this->template('room_manager');