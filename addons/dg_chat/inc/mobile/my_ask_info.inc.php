<?php
global $_GPC,$_W;	

$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];

$room_id=0;
$user_info=$this->getUserInfo();
$room_url="";
$room_first=pdo_fetch("SELECT room_id FROM ".tablename("chat_room")." WHERE create_openid=:openid",array(":openid"=>$user_info->openid));

if(empty($room_first)){
	$room_url=$this->createMobileUrl('chat_create');
}else{
	$room_id=$room_first['room_id'];
	$room_url=$this->createMobileUrl('chat_index',array("room_id"=>$room_id));
}

//$head_imgurl=str_replace("/46","/132",$user_info->headimgurl);
$nickname=$user_info->nickname;
$db_user=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id",array(":id"=>$user_info->uid));

if(!empty($_GPC['submit'])){
	header('content-type:application/json;charset=utf8');
	$pay_money=$_GPC['pay_money'];
	if(!is_numeric($pay_money)){
		$fmdata = array(
				"success" => -1,
				"data" =>"金额填写不正确!",
		);
		echo json_encode($fmdata);
		exit;
	}
	
	$data=array(
			"real_name"=>$_GPC['real_name'],
			"user_title"=>$_GPC['user_title'],
			"user_desc"=>$_GPC['user_desc'],
			"pay_money"=>$_GPC['pay_money'],
			"is_openask"=>1
	);
	
	pdo_update("chat_users",$data,array("id"=>$user_info->uid));
	$fmdata = array(
			"success" => 1,
			"data" =>"保存成功!",
	);
	echo json_encode($fmdata);
	exit;
}

include $this->template('my_ask_info');