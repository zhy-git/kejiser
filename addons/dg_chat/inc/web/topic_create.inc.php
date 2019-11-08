<?php
global $_GPC, $_W;
$this->load("Lscloud_Base");
checklogin();
$cfg= $this->module['config'];
$chat_type = $cfg['chat_type'];
$uniacid=$_W['uniacid'];
load()->func('tpl');
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
$chat_rooms = pdo_fetchall("select * from ".tablename("chat_room")." where uniacid=:uniacid and room_status=1 and is_del is null and series_id is null order by create_time desc",array(":uniacid"=>$uniacid));
$lsparam=pdo_get("chat_qc_ls",array("uniacid"=>$uniacid));
$lscloud_base=new Lscloud_Base($lsparam["userid"],$lsparam["uuid"],$lsparam["ls_key"]);
if(!empty($_GPC['jia'])){
	$tag_record1=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid and id!=:id ORDER BY displayorder",array(":uniacid"=>$uniacid,':id'=>$_GPC['add_tags']));
	header('content-type:application/json;charset=utf8');
	$tags_record['list'] = $tag_record1;
 	echo json_encode($tags_record);exit();
}

if(!empty($_GPC['keyword'])){
	$keyword=$_GPC['keyword'];
	$condition="uniacid=".$uniacid." AND (nickname LIKE '%".$keyword."%' OR real_name LIKE '%".$keyword."%')";
	$records=pdo_fetchall("SELECT id,nickname,avatar,real_name FROM ".tablename("chat_users")." WHERE ".$condition." LIMIT 10");
	header('content-type:application/json;charset=utf8');
	
	$fmdata = array(
			"success" => 1,
			"data" =>$records,
	);
	
	echo json_encode($fmdata);
	exit;
}
if(!empty($_GPC['uid'])){
	$uid=intval($_GPC['uid']);
	$users = pdo_get("chat_users",array('id'=>$uid,'uniacid'=>$uniacid));
	
	header('content-type:application/json;charset=utf8');

	echo json_encode($users);
	exit;
}
if(checksubmit("submit")){
	$data=array();
	if(!empty($_GPC['topic_imgs'])){
		for($i=0;$i<count($_GPC['topic_imgs']);$i++){
			$_GPC['topic_imgs'][$i] = tomedia($_GPC['topic_imgs'][$i]);
		}
			$topic_imgs=json_encode($_GPC['topic_imgs']);
	}
	if(empty($_GPC['room_id'])||$_GPC['room_id'] == 0){
		message('请选择直播间',"","error");
	}
	$data['room_id'] = $_GPC['room_id'];
	$create_openid = pdo_fetch("select create_uid,create_openid,room_status from ".tablename("chat_room")." where uniacid=:uniacid and room_id=:room_id",array(":uniacid"=>$uniacid,":room_id"=>$_GPC['room_id']));
	if($create_openid['room_status']!=1){
		message('您的直播间还未审核通过或者被禁用了',"","error");
	}
	$im_group_id=$this->create_chatroom("chat_".$max_id);
	if($im_group_id == -1){
		message('您的云通信暂时还不能正常使用，请确认是否正确配置',"","error");
	}
	$data['create_openid'] = $create_openid['create_openid'];
	$data['topic_style'] = $_GPC['topic_style'];
	if($_GPC['topic_style'] == 5){
		$data['topic_status']=1;
		$data['activityid']=$_GPC['activityid'];
		$url=str_replace("/","",substr(strstr($_W['siteroot'],"//"),2));
		$ip = gethostbyname(str_replace("/","",substr(strstr($_W['siteroot'],"//"),2)));
		$configParams["method"] = $lscloud_base::$app_safe_url;
		$configParams["activityId"] = $_GPC['activityid'];
		$configParams["needIpWhiteList"] = 1;
		$configParams["pushIpWhiteList"] = $ip;
		$configParams["needPlayerDomainWhiteList"] = 1;
		$configParams["playerDomainWhiteList"] = $url;
		$configObj=$lscloud_base->setApp($configParams);
	}else if($_GPC['topic_style'] == 4){
		$data['videoid'] = $_GPC['videoid'];
		$data['video_vu'] = $_GPC['video_vu'];
	}else if($_GPC['topic_style'] == 3){
		$data['file_id'] = $_GPC['file_id'];
	}else if($_GPC['topic_style'] == 6){
		$data['third_url'] = $_GPC['third_url'];
	}else if($_GPC['topic_style']==2){
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
				"uid"=>$create_openid['create_uid'],
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
	}
	$tags = $_GPC['tags_name'];
	
	$tags = implode(',',$tags);
	$data['tags'] = $tags;
	$data['topic_type'] = $_GPC['topic_type'];
	if($_GPC['topic_type'] == "password"){
		$data['room_password']=$_GPC['room_password'];
		$data['qrcode_desc']=$_GPC['qrcode_desc'];
		$data['qrcode_url']=tomedia($_GPC['qrcode_url']);
	}	
	
	if($_GPC['topic_type'] =="ticket"){
		$data['room_paymoney']=$_GPC['room_paymoney'];
	}
	$data['topic_name']=$_GPC['topic_name'];
	$data['uniacid'] = $uniacid;
	$data['topic_icon']=tomedia($_GPC['topic_icon']);
	$data['topic_imgs'] = $topic_imgs;
	$data['guest_name']=$_GPC['guest_name'];
	$data['guest_info']=htmlspecialchars_decode($_GPC['guest_info']);
	$data['x_look_numbers']=$_GPC['x_look_numbers'];
	$data['topic_order']=$_GPC['topic_order'];
	$data['gl_order']=$_GPC['gl_order'];
	$data['topic_desc']=htmlspecialchars_decode($_GPC['topic_desc']);
	$data['spread']=$_GPC['spread'];
	$data['is_opendm']=$_GPC['is_opendm'];
	$data['im_group_id'] = $im_group_id;
	$data['create_time'] = time();
	$data['begin_time']=strtotime($_GPC['begin_time']);
	$data['end_time'] = 0;
	if($data['topic_style'] == 3){
		$data['end_time'] = time();
	}
	$data['topic_status'] = 1;


	pdo_insert("chat_topic",$data);
	$url=$this->createWebUrl("topic_manage");
	message('保存信息成功',$url,'success');
}

include $this->template('topic_create');
   