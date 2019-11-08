<?php
ignore_user_abort();
set_time_limit(0);

function getNewTopicData($record,$room_name){
	$post_data=array(
			'first' => array(
					'value' => "您关注的 『".$room_name['room_name']."』 直播间有系列课课程发布啦！",
					"color" => "#4a5077"
			),
			'keyword1' => array(
					'value' => $record['room_name'],
					"color" => "#4a5077"
			),
			'keyword2' => array(
					'value' => date('Y/m/d H:i:s', $record['create_time']),
					"color" => "#4a5077"
			),
			'remark' => array(
					'value' => "\r\n点击查看详情！",
					"color" => "#f19937"
			)
	);
	return $post_data;
}
 
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();
$series_id=$_GPC['series_id'];
$series_info=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE id=:id LIMIT 1",array(":id"=>$series_id));
$room_name = pdo_fetch("select room_name from ".tablename("chat_room")." where room_id =:series_id",array(':series_id'=>$series_info['series_id']));
if(empty($series_id)){
	exit;
}



//$is_manager=$this->is_manager($topic['room_id'])||$chat_room['create_openid']==$user_info->openid;
$is_supermanager=$this->is_SuperManager();
$is_manager=$this->is_manager($series_info['series_id'])||$series_info['create_openid']==$user_info->openid;
if(!$is_supermanager){
	if(!$is_manager){
		exit;
	}
}
$send_type=$_GPC['send_type'];
$cfg=$this->module['config'];
//$temp_id=$cfg['lesson_templete'];
$new_lesson=$cfg['lesson_templete'];


header('content-type:application/json;charset=utf8');
if($send_type=='new'){

	if(empty($new_lesson)){
		$fmdata = array(
				"success" => -1,
				"data" =>"请到管理后台设置新课提醒模板消息",
		);
		echo json_encode($fmdata);
		exit;
	}

}


/*echo "SELECT A1.openid FROM ".tablename("chat_subscribe")." A1 INNER JOIN ".tablename
		("mc_mapping_fans")." A2 ON A1.openid=A2.openid WHERE A2.follow=1 AND A1.uniacid=".$uniacid." and A1
			.sub_type='room' and A1.room_id=".$topic['room_id']." ORDER BY A1.ID ";*/
$records=pdo_fetchall("SELECT A1.openid FROM ".tablename("chat_subscribe")." A1 INNER JOIN ".tablename
		("mc_mapping_fans")." A2 ON A1.openid=A2.openid WHERE A2.follow=1 AND A1.uniacid=".$uniacid." and A1
			.sub_type='room' and A1.room_id=".$series_info['series_id']." ORDER BY A1.ID ");//关注直播间的人
/*$records=pdo_fetchall("SELECT A1.openid FROM ".tablename("chat_users")." A1 INNER JOIN ".tablename("mc_mapping_fans")." A2 ON A1.openid=A2.openid WHERE A2.follow=1 AND A1.uniacid=".$uniacid." ORDER BY A1.ID ");*/
$Account = WeAccount::create($_W['account']);
// var_dump("SELECT A1.openid FROM ".tablename("chat_subscribe")." A1 INNER JOIN ".tablename
//		("mc_mapping_fans")." A2 ON A1.openid=A2.openid WHERE A2.follow=1 AND A1.uniacid=".$uniacid." and A1
//			.sub_type='room' and A1.room_id=".$series_info['series_id']." ORDER BY A1.ID ");die;
foreach ($records as $record){
	$postdata=array();
	if($send_type=='new'){
//		$topic['room_name']=$_W['account']['name'];
		$postdata=getNewTopicData($series_info,$room_name);
		$temp_id=$new_lesson;
	}
	
	$temp_url=$this->createMobileUrl('series_info',array("series_id"=>$series_id));
	$temp_url=substr($temp_url, 1);
	$url=$_W['siteroot']."app".$temp_url;
	// var_dump($postdata);
	$Account->sendTplNotice($record['openid'],$temp_id,$postdata,$url,"#FF683F");
}

$fmdata = array(
		"success" => 1,
		"data" =>"推送成功！",
);
echo json_encode($fmdata);
exit;