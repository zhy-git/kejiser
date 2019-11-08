<?php
global $_GPC, $_W;
checklogin();
$this->load("Lscloud_Base");
$uniacid=$_W['uniacid'];
$cfg= $this->module['config'];
$chat_type = $cfg['chat_type'];
$series_id = $_GPC['series_id'];
load()->func('tpl');

$series_info = pdo_fetch("select series_id from ".tablename("chat_room")." where uniacid=:uniacid and id=:series_id",array(":uniacid"=>$uniacid,":series_id"=>$series_id));

$chat_room = pdo_fetch("select * from ".tablename("chat_room")." where uniacid=:uniacid and room_id=:room_id",array(":uniacid"=>$uniacid,":room_id"=>$series_info['series_id']));
$lsparam=pdo_get("chat_qc_ls",array("uniacid"=>$uniacid));
$lscloud_base=new Lscloud_Base($lsparam["userid"],$lsparam["uuid"],$lsparam["ls_key"]);
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
if(!empty($_GPC['jia'])){
	$tag_record1=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid and id!=:id ORDER BY displayorder",array(":uniacid"=>$uniacid,':id'=>$_GPC['add_tags']));
	header('content-type:application/json;charset=utf8');
	$tags_record['list'] = $tag_record1;
 	echo json_encode($tags_record);exit();
}
if(checksubmit("submit")){
	$data=array();
	if(!empty($_GPC['topic_imgs'])){
		for($i=0;$i<count($_GPC['topic_imgs']);$i++){
			$_GPC['topic_imgs'][$i] = tomedia($_GPC['topic_imgs'][$i]);
		}
			$topic_imgs=json_encode($_GPC['topic_imgs']);
	}
	$data['room_id'] = $chat_room['room_id'];
	if($chat_room['room_status']!=1){
		message('您的直播间还未审核通过或者被禁用了',"","error");
	}
	$im_group_id=$this->create_chatroom("chat_".$max_id);
	if($im_group_id == -1){
		message('您的云通信暂时还不能正常使用',"","error");
	}
	$data['create_openid'] = $chat_room['create_openid'];
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
				"uid"=>$chat_room['create_uid'],
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
	$tags = implode(',',$_GPC['tags_name']);
	$data['tags'] = $tags;

	$data['topic_type'] = 'public';
	$data['series_id'] = $series_id;	
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
	$data['topic_status'] = 1;
	pdo_insert("chat_topic",$data);
	$url=$this->createWebUrl("series_topic",array("series_id"=>$series_id));
	message('保存信息成功',$url,'success');
}

include $this->template('series_topic_add');
   