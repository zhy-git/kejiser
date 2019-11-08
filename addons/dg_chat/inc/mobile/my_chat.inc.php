<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];
$cfg = $this->module['config'];
$room_id=0;
$user_info=$this->getUserInfo();
$openid = $user_info->openid;
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$is_pc=0;
if (strpos($user_agent, 'MicroMessenger') === false) {
	$is_pc=1;
}

$room_id1=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE create_openid=:openid",array(':openid'=>$openid));
$room_id=$room_id1["room_id"];
$series_createurl=$this->createMobileUrl('series_create',array("room_id"=>$room_id));


$is_manager=pdo_fetch("SELECT 1 FROM ".tablename("chat_roommanager")." WHERE uniacid=:uniacid AND uid=".$user_info->uid,array(":uniacid"=>$uniacid));
$is_creater=pdo_fetch("SELECT 1 FROM ".tablename("chat_room")." WHERE uniacid=:uniacid and is_del is null and series_id is null  AND create_uid=".$user_info->uid,array(":uniacid"=>$uniacid));
$is_guest=pdo_fetch("SELECT 1 FROM ".tablename("chat_topicguest")." WHERE uniacid=:uniacid AND uid=".$user_info->uid,array(":uniacid"=>$uniacid));
$is_supermanager=$this->is_SuperManager();
$is_vip = $this->is_vip($user_info->uid);
$head_imgurl=$user_info->headimgurl;
$nickname=$user_info->nickname;






$my_room=pdo_fetchall("SELECT * FROM ".tablename("chat_room")." WHERE create_openid=:openid and series_id is null and is_del is null ORDER BY ID DESC",array(":openid"=>$user_info->openid));
$room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE create_openid=:openid and series_id is null and is_del is null ORDER BY ID DESC",array(":openid"=>$openid));

$my_room_cash=$this->createMobileUrl('room_cash',array('room_id'=>$room['room_id']));
$lastbrowse_url=$this->createMobileUrl('chat_lastbrowse');
$mysubscribe_url=$this->createMobileUrl('chat_subscribe');
$mycash_url=$this->createMobileUrl('my_cash');
$myquestion_url=$this->createMobileUrl('my_ask_question');
$my_url=$this->createMobileUrl('my_ask_index');
$myamount_url=$this->createMobileUrl('my_ask_amount');
$my_subcom=$this->createMobileUrl('subcom_cash');
if($_GPC['type']=='login_out'){
	setcookie('user_pc','');
	$fmdata = array(
			'success'=>1
		);
	header('content-type:application/json;charset=utf8');
	echo json_encode($fmdata);exit;
}
include $this->template('my_chat');