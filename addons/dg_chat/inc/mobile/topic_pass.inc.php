<?php
global $_GPC,$_W;	
$this->load("mcrypt");
$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();

$topic_id=$_GPC['topic_id'];

$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:id LIMIT 1",array(":id"=>$topic_id));
if(empty($topic)){
	exit;
}

$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$topic['room_id']));
//$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;

if(!empty($_GPC['password'])){
	header('content-type:application/json;charset=utf8');
    $check_pass=trim($_GPC['password']);
    $fmdata = array(
    		"success" => -1,
    		"data" =>"您输入的密码不正确!",
    );
    
	if($check_pass==$topic['room_password']){
	  $fmdata = array(
				"success" => 1,
				"data" =>"验证成功!",
	 );
		
	 $pass_check=dgmcrypt::md5_encrypt($check_pass);
	 $cookieKey="top_".$topic_id;
	 isetcookie($cookieKey, $pass_check, 48 * 3600 * 1);
	 
 }
	
	echo json_encode($fmdata);
	exit;	
}

$topic_url=$this->createMobileUrl('chat',array("topic_id"=>$topic_id));

include $this->template('topic_pass');