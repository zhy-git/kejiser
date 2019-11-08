<?php
ignore_user_abort();
set_time_limit(0);
function getTopicBeginData($record){
		$post_data=array(
				'first' => array(
						'value' => "您预约的课程即将开始！",
						"color" => "#4a5077"
				),
				'keyword1' => array(
						'value' => $record['topic_name'],
						"color" => "#4a5077"
				),
				'keyword2' => array(
						'value' => date('Y/m/d H:i:s', $record['begin_time']),
						"color" => "#4a5077"
				),
				'remark' => array(
						'value' => "\r\n点击查看详情！",
						"color" => "#f19937"
				)
		);		
	   return $post_data;
}

function getNewTopicData($record){
	$post_data=array(
			'first' => array(
					'value' => "您关注的 『".$record['room_name']."』 有新课程发布啦！",
					"color" => "#4a5077"
			),
			'keyword1' => array(
					'value' => $record['topic_name'],
					"color" => "#4a5077"
			),
			'keyword2' => array(
					'value' => date('Y/m/d H:i:s', $record['begin_time']),
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
$topic_id=$_GPC['topic_id'];
$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:id LIMIT 1",array(":id"=>$topic_id));
if(empty($topic)){
	exit;
}

$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$topic['room_id']));

//$is_manager=$this->is_manager($topic['room_id'])||$chat_room['create_openid']==$user_info->openid;
$is_supermanager=$this->is_SuperManager();
$is_manager=$this->is_manager($topic['room_id'])||$chat_room['create_openid']==$user_info->openid;
if(!$is_supermanager){
	if(!$is_manager){
		exit;
	}
}
$send_type=$_GPC['send_type'];
$cfg=$this->module['config'];
$temp_id=$cfg['lesson_templete'];
//$new_lesson=$cfg['new_lesson'];




//直播是否已经结束
$istopic_end=1;
if(empty($topic['end_time'])||$topic['end_time']==0){
	$istopic_end=0;
}

$istopic_begin=1;
if($topic['begin_time']>time()){
	$istopic_begin=0;
}


header('content-type:application/json;charset=utf8');
if($send_type=='begin'){
	$is_tips=$topic['begin_time']-time()<2*3600&&!$istopic_end;
	if(!$is_tips){
		$fmdata = array(
				"success" => -1,
				"data" =>"课程必须在开课前2小时内才可以提醒",
		);
		echo json_encode($fmdata);
		exit;
	}
	
	if(empty($temp_id)){
		$fmdata = array(
				"success" => -1,
				"data" =>"请到管理后台设置课程开始提醒模板消息",
		);
		echo json_encode($fmdata);
		exit;
	}

}

if($send_type=='new'){
	if($istopic_begin){
		$fmdata = array(
				"success" => -1,
				"data" =>"课程已经开始,请使用开始提醒",
		);
		echo json_encode($fmdata);
		exit;
	}
	
	// if(empty($new_lesson)){
		// $fmdata = array(
				// "success" => -1,
				// "data" =>"请到管理后台设置新课提醒模板消息",
		// );
		// echo json_encode($fmdata);
		// exit;
	// }
}

/*echo "SELECT A1.openid FROM ".tablename("chat_subscribe")." A1 INNER JOIN ".tablename
		("mc_mapping_fans")." A2 ON A1.openid=A2.openid WHERE A2.follow=1 AND A1.uniacid=".$uniacid." and A1
			.sub_type='room' and A1.room_id=".$topic['room_id']." ORDER BY A1.ID ";*/
$records=pdo_fetchall("SELECT A1.openid FROM ".tablename("chat_subscribe")." A1 INNER JOIN ".tablename
		("mc_mapping_fans")." A2 ON A1.openid=A2.openid WHERE A2.follow=1 AND A1.uniacid=".$uniacid." and A1
			.sub_type='room' and A1.room_id=".$topic['room_id']." ORDER BY A1.ID ");//关注直播间的人
/*$records=pdo_fetchall("SELECT A1.openid FROM ".tablename("chat_users")." A1 INNER JOIN ".tablename("mc_mapping_fans")." A2 ON A1.openid=A2.openid WHERE A2.follow=1 AND A1.uniacid=".$uniacid." ORDER BY A1.ID ");*/
$Account = WeAccount::create($_W['account']);

foreach ($records as $record){
	$postdata=array();
	if($send_type=='begin'){
	   $postdata=getTopicBeginData($topic);
	}
	
	if($send_type=='new'){
		$topic['room_name']=$_W['account']['name'];
		$postdata=getNewTopicData($topic);
		//$temp_id=$new_lesson;
	}
	
	$temp_url=$this->createMobileUrl('topic_info',array("topic_id"=>$topic_id));
	$temp_url=substr($temp_url, 1);
	$url=$_W['siteroot']."app".$temp_url;
	$Account->sendTplNotice($record['openid'],$temp_id,$postdata,$url,"#FF683F");
}

$fmdata = array(
		"success" => 1,
		"data" =>"推送成功！",
);
echo json_encode($fmdata);
exit;