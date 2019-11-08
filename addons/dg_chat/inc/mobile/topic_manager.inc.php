<?php
global $_GPC,$_W;	

$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();

$topic_id=$_GPC['topic_id'];

$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:id LIMIT 1",array(":id"=>$topic_id));
if(empty($topic)){
	exit;
}

$chat_room=pdo_fetch("SELECT A1.*,A2.id uid,real_name,user_title,user_desc,is_openask FROM ".tablename("chat_room")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.create_openid=A2.openid WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$topic['room_id']));
//$chat_room['create_avatar']=str_replace("/46","/132",$chat_room['create_avatar']);
$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;

if(!empty($_GPC['guest_id'])){
	header('content-type:application/json;charset=utf8');
	$guest_id=intval($_GPC['guest_id']);
	$fmdata = array(
			"success" => -1,
			"data" =>"删除失败!",
	);
	if($is_manager){
		pdo_delete("chat_topicguest",array("uid"=>$guest_id));
		$fmdata = array(
				"success" => 1,
				"data" =>"删除成功!",
		);
	}
	
	echo json_encode($fmdata);
	exit;
}

$invite_url=$this->createMobileUrl('topic_guest_invite',array("topic_id"=>$topic_id));

$managers=pdo_fetchall("SELECT A1.*,A2.id,real_name,A2.avatar,A2.user_title,A2.user_desc,A2.is_openask FROM ".tablename("chat_roommanager")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.manage_openid=A2.openid WHERE room_id=:room_id",array(":room_id"=>$chat_room['room_id']));

$guests=pdo_fetchall("SELECT A1.*,A2.id,real_name,A2.avatar,A2.user_title,A2.user_desc,A2.is_openask FROM ".tablename("chat_topicguest")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.guest_openid=A2.openid WHERE topic_id=:topic_id",array(":topic_id"=>$topic_id));

include $this->template('topic_manager');