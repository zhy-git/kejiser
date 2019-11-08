<?php
global $_GPC, $_W;
$this->load("Lscloud_Base");
$cfg= $this->module['config'];
$chat_type = $cfg['chat_type'];
checklogin();
$uniacid=$_W['uniacid'];
$topic_id=$_GPC['topic_id'];
if(!empty($topic_id)){
	$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:topic_id",array(":topic_id"=>$topic_id));
    $topic['begin_time']=date('Y-m-d H:i:s', $topic['begin_time']);
	$topic['topic_imgs'] = json_decode($topic['topic_imgs']);
	$tag = explode(',', $topic['tags']);
}
if($topic['topic_style']== 2){
	$tui = pdo_get('chat_qc_data',array("uniacid"=>$uniacid,'id'=>$topic['vedio_id']));
	$push_url = $tui['pushurl'];
}
$lsparam=pdo_get("chat_qc_ls",array("uniacid"=>$uniacid));
$lscloud_base=new Lscloud_Base($lsparam["userid"],$lsparam["uuid"],$lsparam["ls_key"]);
load()->func('tpl');
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
if(checksubmit("submit")){
	$data=array();
	if(!empty($_GPC['topic_imgs'])){
		for($i=0;$i<count($_GPC['topic_imgs']);$i++){
			$_GPC['topic_imgs'][$i] = tomedia($_GPC['topic_imgs'][$i]);
		}
			$topic_imgs=json_encode($_GPC['topic_imgs']);
	}
	$data['topic_name']=$_GPC['topic_name'];
	$data['topic_icon']=$_GPC['topic_icon'];
	$data['guest_name']=$_GPC['guest_name'];
	$data['guest_info']=htmlspecialchars_decode($_GPC['guest_info']);
	$data['x_look_numbers']=$_GPC['x_look_numbers'];
	$data['topic_order']=$_GPC['topic_order'];
	$data['topic_imgs'] = $topic_imgs;
	if($topic['topic_type'] == 'ticket'){
		$data['room_paymoney'] = $_GPC['room_paymoney'];
	}else if($topic['topic_type'] == 'password'){
		$data['room_password']=$_GPC['room_password'];
		$data['qrcode_desc']=$_GPC['qrcode_desc'];
		$data['qrcode_url']=tomedia($_GPC['qrcode_url']);
	}
	
	$data['gl_order']=$_GPC['gl_order'];
	
	$data['topic_style'] = $_GPC['topic_style'];
	if($_GPC['topic_style'] == 5){
		$data['topic_status']=1;
		empty($_GPC['activityid']) && message('请填写乐视活动id');
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
		empty($_GPC['videoid']) && message('请填写乐视视频id');
		$data['videoid'] = $_GPC['videoid'];
	}else if($_GPC['topic_style'] == 3){
		empty($_GPC['file_id']) && message('请填写腾讯视频id');
		$data['file_id'] = $_GPC['file_id'];
	}else if($_GPC['topic_style'] == 6){
		empty($_GPC['third_url']) && message('请填写第三方视频id');
		$data['third_url'] = $_GPC['third_url'];
	}else if($_GPC['topic_style']==2 &&empty($_GPC['push_url'])){
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
	$data['topic_desc']=htmlspecialchars_decode($_GPC['topic_desc']);
	$data['topic_status']=$_GPC['topic_status'];
	$data['spread']=$_GPC['spread'];
	if($data['topic_status']==1){
		$data['end_time']=0;
	}
	$data['is_opendm']=$_GPC['is_opendm'];
	if($data['topic_status']==2 && $topic['end_time']==0){
		$data['end_time']=time();
	}
	if($data['topic_status']==2 && $topic['end_time']==0 && $topic['topic_style'] == 5){
		$searchParams["method"] = $lscloud_base::$app_list_url;
		$searchParams["activityId"] = $_GPC['activityid'];
		$searchObj=$lscloud_base->setApp($searchParams);	
		if($searchObj['activityStatus']!=3){
			$apiParams["method"]=$lscloud_base::$app_close_url;
			$apiParams["activityId"]=$_GPC['activityid'];
			//$apiParams["endTime"]=time()*1000;
			$respObj = $lscloud_base->setApp($apiParams);
			$recordParams["method"]=$lscloud_base::$stream_list_url;
			$recordParams["activityId"]=$_GPC['activityid'];
			$recordObj = $lscloud_base->setApp($recordParams);
			$startTime=$searchObj[0]['createTime'];
			//$endTime=$searchObj[0]['endTime'];
			$liveId=$recordObj['lives'][0]['liveId'];
			$createParams["method"]=$lscloud_base::$record_url;
			$createParams["liveId"]=$liveId;
			$createParams["startTime"]=$startTime;
			$createParams["endTime"]=time()*1000;
			$createObj = $lscloud_base->setApp($createParams);
			
		}
		$data['liveid']=$liveId;
		$data['taskid']=$createObj;	
		$data['topic_style']=4;	
	}
	if($data['topic_status']==2 && $topic['end_time']==0 && $topic['topic_style'] == 2){
		$file_id = $this->get_already($topic,$uniacid);
		$data['file_id'] = $file_id;
		//$data['file_id'] = $file_id['file_id'];
		//$data['record_file_url'] = $file_id['record_file_url'];
		$data['topic_style'] = 3;
	}
		
	$data['begin_time']=strtotime($_GPC['begin_time']);
	$tags = $_GPC['tags_name'];
	
	$tags = implode(',',$tags);
	$data['tags'] = $tags;
	pdo_update("chat_topic",$data,array(id=>$topic_id));
	$url=$this->createWebUrl("topic_manage");
	message('保存信息成功',$url,'success');
}


include $this->template('topic_add');
   