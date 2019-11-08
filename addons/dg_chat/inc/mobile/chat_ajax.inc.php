<?php
global $_GPC,$_W;	
$user_info=$this->getUserInfo();

$uid = $_W['member']['uid'];
$uniacid = $_W['uniacid'];

$room_id=800000001;

if(empty($_GPC['topic_id'])){
	exit;
}
$topic_id=$_GPC['topic_id'];
$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:id",array(":id"=>$_GPC['topic_id']));
if(empty($topic)){
	exit;
}

//直播是否已经结束
$istopic_end=1;
if(empty($topic['end_time'])||$topic['end_time']==0){
	$istopic_end=0;
}


$room_id=$topic['room_id'];
$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
$guests=pdo_fetchall("SELECT * FROM ".tablename("chat_topicguest")." WHERE topic_id=:topic_id",array(":topic_id"=>$topic_id));
$guest_list=array();
foreach($guests as $guest){
	$guest_list[]=$guest['guest_openid'];
}

$is_guest=in_array($user_info->openid, $guest_list);
$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;
$user_info->uniacid=$uniacid;
$user_info->room_id=$room_id;
$user_info->topic_id=$topic_id;
$user_info_encode=json_encode($user_info);

if(!empty($_GPC['content'])){
	if($istopic_end){
		return;
	}
	
	$target=$_GPC['target'];
	$chatdata=array(
			"uniacid"=>$uniacid,
			"room_id"=>$room_id,
			"topic_id"=>$topic['id'],
			"owner_uid"=>$user_info->uid,
			"owner_openid"=>$user_info->openid,
			"owner_nickname"=>$user_info->nickname,
			"owner_avatar"=>$user_info->headimgurl,
			"create_time"=>time()
	);
	
	if($target=='main'&&($is_manager||$is_guest)){
		$chatdata["sub_type"]=$_GPC['msgtype'];
		$chatdata["sub_content"]=$_GPC['content'];
		$chatdata["sub_status"]=1;
		pdo_insert("chat_subjects",$chatdata);
	}
	
	if($target=='comment'){
		$chatdata["dis_type"]=$_GPC['msgtype'];
		$chatdata["dis_content"]=$_GPC['content'];
		$chatdata["dis_status"]=1;
		pdo_insert("chat_discuss",$chatdata);
	}
	
}


$invite_url=$this->createMobileUrl('topic_guest_invite',array("topic_id"=>$topic_id));

/*更新累计观看人数*/
pdo_query("UPDATE ".tablename("chat_topic")." SET look_numbers=look_numbers+1 WHERE id=".$topic['id']);

include $this->template('chat');