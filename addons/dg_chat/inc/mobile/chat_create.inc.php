<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];
$redirect_uri="{$_W['siteroot']}app/".$this->createMobileUrl('chat_create');
$user_info=$this->getUserInfo($redirect_uri);
$my_room=pdo_fetchcolumn("SELECT room_id FROM ".tablename("chat_room")." WHERE create_openid=:openid AND is_del is null and uniacid=:uniacid and series_id is null LIMIT 1",array(":openid"=>$user_info->openid,":uniacid"=>$uniacid));


$room_id=pdo_fetchcolumn("SELECT MAX(room_id) FROM ".tablename("chat_room"));
if(empty($room_id)){
	$room_id=800000001;
}else{
	$room_id=$room_id+1;
}

if(!empty($_GPC['mediaid'])){
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['mediaid'];
	$medias['type']="image";
	$filename=$this->downloadMedia($medias);
	
	$fmdata = array(
			"success" => 1,
			"imgurl" =>tomedia($filename),
	);	
	echo json_encode($fmdata);
	exit();
}
if(!empty($_GPC['mmediaid'])){
	$account = WeAccount::create($_W['account']);
	$medias['media_id'] = $_GPC['mmediaid'];
	$medias['type']="image";
	$filename=$this->downloadMedia($medias);
	
	$fmdata = array(
			"success" => 1,
			"imgurl" =>tomedia($filename),
	);	
	echo json_encode($fmdata);
	exit();
}

if(!empty($_GPC['create'])){
	header('content-type:application/json;charset=utf8');
	if(!empty($my_room)){
		$fmdata = array(
				"success" => -1,
				"room_id" =>$my_room,
		);
		echo json_encode($fmdata);
		exit();
	}
	
   $data=array(
   		"room_id"=>$room_id,
        "uniacid"=>$uniacid,
   		"room_name"=>$_GPC['room_name'],
   		"room_desc"=>$_GPC['room_desc'],
   		"room_icon"=>$_GPC['room_icon'],
   		"room_status"=>0,//新创建的都是待审核状态
   		"tags"=>$_GPC['tags'],
   		"create_uid"=>$user_info->uid,
   		"create_openid"=>$user_info->openid,
   		"create_nickname"=>$user_info->nickname,
   		"create_avatar"=>$user_info->headimgurl,
   		"create_time"=>time(),
   		"bg_img"=>$_GPC['bg_img'],
   		"reward_percent"=>0
   );
   
   
   $row_count=pdo_insert("chat_room",$data);
   if($row_count==1){
	   	$fmdata = array(
	   			"success" => 1,
	   			"room_id" =>$room_id,
	   	);
   }else{
	   	$fmdata = array(
	   			"success" => -2,
	   			"room_id" =>$room_id,
	   	);
   }
   echo json_encode($fmdata);
   exit();
}

/*处理标签开始*/
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
/*处理标签结束*/


include $this->template('chat_create');