<?php
global $_GPC,$_W;
$cfg= $this->module['config'];
$chat_type = $cfg['chat_type'];
$this->load("Lscloud_Base");
$uniacid = $_W['uniacid'];
$room_id=$_GPC['room_id'];
$series_id = $_GPC['series_id'];

$user_info=$this->getUserInfo();

if(empty($user_info)||empty($room_id)){
	exit;
}

$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
if(empty($chat_room)){
	exit;
}

//上传图片
if(!empty($_GPC['mediaid'])){
	header('content-type:application/json;charset=utf8');
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

//上传图片
if(!empty($_GPC['serverid'])){
	header('content-type:application/json;charset=utf8');
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['serverid'];
	$medias['type']="image";
	$filename=$account->downloadMedia($medias);

	$fmdata = array(
			"success" => 1,
			"imgurl" =>tomedia($filename),
	);

	echo json_encode($fmdata);
	exit();
}
//上传图片
if(!empty($_GPC['albumid'])){
	header('content-type:application/json;charset=utf8');
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['albumid'];
	$medias['type']="image";
	$filename=$account->downloadMedia($medias);

	$fmdata = array(
			"success" => 1,
			"imgurl" =>tomedia($filename),
	);

	echo json_encode($fmdata);
	exit();
}

//保存数据
if(!empty($_GPC['create'])){
	header('content-type:application/json;charset=utf8');
	$begin_time=$_GPC['begin_time'];
	$begin_time=strtotime($begin_time);
	$topic_type=$_GPC['topic_type'];
	$topic_imgs=$_GPC['topic_imgs'];
	if(!empty($_GPC['topic_imgs'])){
		$topic_imgs=json_encode($_GPC['topic_imgs']);
	}
	$type_array=array("public","password","ticket");
	if(!in_array($topic_type, $type_array)){
		exit;
	}

	$max_id=0;
	$max_topic_id=pdo_fetchcolumn("SELECT MAX(id) FROM ".tablename("chat_topic"));
	if(!empty($max_topic_id)){
		 $max_id=$max_topic_id+1;
	}

// 	$notover=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_topic")." WHERE end_time=0 AND room_id=:room_id",array(":room_id"=>$room_id));
// 	if($notover>0){
// 		$fmdata = array(
// 				"success" => -1,
// 				"data" =>"该直播间还有未结束直播！",
// 		);

// 		echo json_encode($fmdata);
// 		exit;
// 	}

	if($chat_room['room_status']!=1){
		$fmdata = array(
				"success" => -1,
				"data" =>"您的直播间还未审核通过或者被禁用了",
		);

		echo json_encode($fmdata);
		exit;
	}

	$im_group_id = $this->create_chatroom("chat_".$max_id);


	if($im_group_id==-1){
		$fmdata = array(
				"success" => -1,
				"data" =>"创建话题失败",
		);

		echo json_encode($fmdata);
		exit;
	}

	$reward_percent = $chat_room['reward_percent'];
	$data=array(
			"uniacid"=>$uniacid,
			"room_id"=>$room_id,
			"create_openid"=>$user_info->openid,
			"topic_name"=>str_replace(PHP_EOL, '',$_GPC['topic_name']),
			"topic_desc"=>str_replace(PHP_EOL, '',$_GPC['topic_desc']),
			"topic_type"=>$_GPC['topic_type'],
			"topic_icon"=>$_GPC['topic_icon'],
			"guest_name"=>$_GPC['guest_name'],
			"guest_info"=>$_GPC['guest_info'],
			"tags"=>$_GPC['tags'],
			"topic_imgs"=>$topic_imgs,
			"is_opendm"=>$_GPC['is_opendm'],
			"begin_time"=>$begin_time,
			"im_group_id"=>$im_group_id,
			"end_time"=>0,
			"create_time"=>time(),
			"topic_status"=>1,
			"reward_percent"=>0,
			"topic_style"=>$_GPC['topic_style']
	);

	if($_GPC['topic_style']==2){
		/*$data['vedio_id']=function();//接口方法*/
		$im_config=pdo_fetch("select * from ".tablename("chat_qc_setting")." where uniacid=:uniacid",array(":uniacid"=>$uniacid));
		$streamid=time();
		$txttime=time()+3600*24*15;
		$expirtime=date('Y-m-d H:i:s',$txttime);
		$pushurl=$this->getPushUrl($im_config["bizid"],$streamid,$im_config["key"],$expirtime);
		$playurls=$this->getPlayUrl($im_config["bizid"],$streamid);
		$playurl=$playurls[2];
		$playurl2=$playurls[1];
		$insert=array(
				"uniacid"=>$uniacid,
				"uid"=>$user_info->uid,
				"imid"=>$im_config["id"],
				"streamid"=>$streamid,
				"secret"=>"",
				"pushurl"=>$pushurl,
				"playurl"=>$playurl,
				"playurl2"=>$playurl2,
				"create_time"=>time(),
				"expirtime"=>$txttime
		);
		pdo_insert("chat_qc_data",$insert);
		$data['vedio_id']=pdo_insertid();
	}else if($_GPC['topic_style']==3){
		$data['topic_status']=2;
		$data['end_time']=time();
		$data['file_id']=$_GPC['file_id'];
	}else if($_GPC['topic_style'] == 4){
		$data['videoid']=$_GPC['file_id'];
	}if($_GPC['topic_style'] == 5){
		$data['topic_status']=1;
		$data['activityid']=$_GPC['activityid'];

	}
	if($chat_room['reward_status']==1){
		$data['reward_percent']=$reward_percent;
	}
	if(!empty($series_id)){
		$data['series_id'] = $series_id;
		$redirect_url=$this->createMobileUrl('c_index',array('room_id'=>$room_id));
		$row = pdo_insert('chat_topic',$data);
			if($row == 1){
				$fmdata = array(
				"success" => 1,
				"data" =>$redirect_url,
			);
			echo json_encode($fmdata);
			exit;
		}
	}
	if($topic_type=="password"){
		$data['room_password']=$_GPC['room_password'];
		$data['qrcode_desc']=$_GPC['qrcode_desc'];
		$data['qrcode_url']=$_GPC['qrcode_url'];
	}

	if($topic_type=="ticket"){
		$data['room_paymoney']=$_GPC['room_paymoney'];
	}

	pdo_insert("chat_topic",$data,array("room_id"=>$room_id));
	$topic_id = pdo_insertid();

	$redirect_url = $this->createMobileUrl('chat',array('topic_id'=>$topic_id));
	if($_GPC['topic_style'] == 2){
		$fmdata = array(
				"success" => 5,
				"data" =>$pushurl,
				"turl"=>$redirect_url,
		);
		echo json_encode($fmdata);
		exit;
	}
	$fmdata = array(
			"success" => 1,
			"data" =>$redirect_url,
	);

	echo json_encode($fmdata);
	exit;
}


/*处理标签开始*/
$tag_record = pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
/*处理标签结束*/


include $this->template('topic_create');