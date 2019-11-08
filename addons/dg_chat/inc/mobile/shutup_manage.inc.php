<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();

$room_id=$_GPC['room_id'];
if(empty($room_id)){
	exit;
}
$room_id=intval($room_id);

$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
$blacks=pdo_fetchall("SELECT * FROM ".tablename("chat_blacklist")." WHERE room_id=:room_id ",array(":room_id"=>$room_id));

$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;

if(!empty($_GPC['black_id'])){
	header('content-type:application/json;charset=utf8');
	$black_id=intval($_GPC['black_id']);
	$fmdata = array(
			"success" => -1,
			"data" =>"删除失败!",
	);


$black_info=pdo_fetch("SELECT A1.black_uid,A2.im_group_id FROM ".tablename("chat_blacklist")." A1 INNER JOIN ".tablename("chat_topic")." A2 ON A1.topic_id=A2.id WHERE A1.id=:id LIMIT 1",array(":id"=>$black_id));	
if(empty($black_info)){
	exit;
}

if($is_manager){
		pdo_delete("chat_blacklist",array("id"=>$black_id));
		$this->group_forbid_send_msg($black_info['im_group_id'],"dg_".$black_info['black_uid'],0);
		$fmdata = array(
				"success" => 1,
				"data" =>"删除成功!",
		);
	}	
	echo json_encode($fmdata);
	exit;
}

include $this->template('shutup_manage');