<?php
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();
$topic_id=$_GPC['topic_id'];
if(empty($topic_id)){
	exit;
}
$this->load("Lscloud_Base");
$topic_id=intval($topic_id);
$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE end_time=0 AND id=:id LIMIT 1",array(":id"=>$topic_id));
	if($topic['topic_style'] == 2){
		//查询录制文件
		$fileid = $this->get_already($topic,$uniacid);
		//更新直播为点播
		//pdo_update("chat_topic",array("topic_style"=>3,"file_id"=>$fileid['file_id'],"record_file_url"=>$fileid['record_file_url']),array("id"=>$topic_id));
		pdo_update("chat_topic",array("topic_style"=>3,"file_id"=>$fileid),array("id"=>$topic_id));
	}
	if($topic['topic_style'] == 5){
		$lsparam=pdo_get("chat_qc_ls",array("uniacid"=>$uniacid));
		$lscloud_base = new Lscloud_Base($lsparam["userid"],$lsparam["uuid"],$lsparam["ls_key"]);
		$searchParams["method"] = $lscloud_base::$app_list_url;
		$searchParams["activityId"] = $topic['activityid'];
		$searchObj = $lscloud_base->setApp($searchParams);

		if($searchObj['activityStatus']!=3){
			$apiParams["method"]=$lscloud_base::$app_close_url;
			$apiParams["activityId"]=$topic['activityid'];
			//$apiParams["endTime"]=time()*1000;
			$respObj = $lscloud_base->setApp($apiParams);

			$recordParams["method"]=$lscloud_base::$stream_list_url;
			$recordParams["activityId"]=$topic['activityid'];
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
		pdo_update("chat_topic",array("liveid"=>$liveId,"taskid"=>$createObj),array("id"=>$topic_id));
	}	
	if(empty($topic)){
		exit;
	}
	$room_id = $topic['room_id'];
	$chat_room = pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
	$is_manager = $this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;
	if(!$is_manager){
		exit;
	}
	
	header('content-type:application/json;charset=utf8');
	//更新数据表
	$row_count = pdo_update("chat_topic",array("end_time"=>time(),"topic_status"=>2),array("id"=>$topic_id));
	$fmdata = array(
				"success" => $row_count,
				"data" =>"成功结束直播！",
	);
		
	echo json_encode($fmdata);
	exit;

