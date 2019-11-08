<?php
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
$cfg = $this->module['config'];
$user_info=$this->getUserInfo();
// if(empty($user_info)){
// 	exit;
// }

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$is_pc=0;
if (strpos($user_agent, 'MicroMessenger') === false) {
	$is_pc=1;
}

$attachdir = "/" . $_W['config']['upload']['attachdir'] . "/";  //图片拼接的路径

$topic_id=$_GPC['topic_id'];
$topic_id=intval($topic_id);
$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:id ",array(":id"=>$_GPC['topic_id']));
$topic['topic_icon']=$attachdir.$topic['topic_icon'];  //图片路径拼接完成。

if(empty($topic)){
	exit;
}
$is_subscribe=pdo_fetchcolumn("SELECT 1 FROM ".tablename("chat_subscribe")." WHERE openid=:openid AND room_id=:room_id AND sub_type='room' LIMIT 1",array(":openid"=>$user_info->openid,":room_id"=>$topic['room_id']));
if(!empty($is_subscribe)){
	$ok = 1;
}
//判断是否关注
if(!empty($_GPC['exmine'])){

	$exist = pdo_get('mc_mapping_fans',array('uniacid'=>$uniacid,'openid'=>$user_info->openid,'follow'=>1));
	if(!empty($exist)){
		// $is_subscribe=pdo_fetchcolumn("SELECT 1 FROM ".tablename("chat_subscribe")." WHERE openid=:openid AND room_id=:room_id AND sub_type='room' LIMIT 1",array(":openid"=>$user_info->openid,":room_id"=>$topic['room_id']));
		if(empty($is_subscribe)){
			$data=array(
					"uniacid"=>$uniacid,
					"uid"=>$user_info->uid,
					"openid"=>$user_info->openid,
					"nickname"=>$user_info->nickname,
					"room_id"=>$topic['room_id'],
					"sub_type"=>"room",
					"create_time"=>time()
			);
			$row_count=pdo_insert("chat_subscribe",$data);
			echo 1;exit();
		}else{
		pdo_delete("chat_subscribe",array("openid"=>$user_info->openid,"room_id"=>$topic['room_id'],"sub_type"=>'room'));
		echo 2;exit();
		}
	}else{
		echo 0;exit();
	}
}
$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$topic['room_id']));
if(empty($chat_room)){
	exit;
}
//pdo_query("ALTER TABLE ".tablename('chat_room')." ADD `is_sub` tinyint(3) DEFAULT 0 COMMENT '是否关注';");
//判断信息完整
if(!empty($_GPC['checkout'])){
	header('Content-type: application/json');
	$is_sub = $this->get_user($user_info->openid);
	if(empty($is_sub) &&$chat_room['is_sub'] ==1){
		$fmdata = array(
			'success'=>-2,
			'msg'=>'关注二维码'
		);
		echo json_encode($fmdata);exit;
	}
	$is_user = pdo_fetch("select user_info,mobile from ".tablename("chat_users")." where uniacid=:uniacid and id = :uid",array(':uniacid'=>$uniacid,':uid'=>$user_info->uid));
	if((empty($is_user['user_info'])||empty($is_user['mobile']))&&$cfg['is_authentication'] == 2){
		
		$fmdata = array(
			'success'=>-1,
			'msg'=>'请前往个人中心补全您的用户信息'
		);
		echo json_encode($fmdata);exit;
	}
	$fmdata = array(
		'success'=>1,
		'msg'=>'成功'
	);
	echo json_encode($fmdata);exit;
}


if(!empty($topic['spread'])){
	$spreadnum=pdo_fetchcolumn("select count(1) from ".tablename('chat_spreadnum')." where topic_id=:topic_id and fuid=:fuid",array(":topic_id"=>$_GPC['topic_id'],":fuid"=>$user_info->uid));
}
if(!empty($topic['topic_imgs'])){

	$imgs=json_decode($topic['topic_imgs'],true);
	
	for($i=0;$i<count($imgs);$i++){
		$j=stripos($imgs[$i],"http");
		if($j == 0){
			$imgdesc.='<img src='.$imgs[$i].' style="width:auto; height:auto;
		max-width:100%; max-height:100%;">';
		}else{
			$imgdesc.='<img src='.substr($imgs[$i],$j,strlen($imgs[$i])-12).' style="width:auto; height:auto;
		max-width:100%; max-height:100%;">';
		}
		
	}
	$desc='<p>'.$topic['topic_desc'].'</p>';
	$desc.=$imgdesc;
	$topic_desc=htmlspecialchars($desc);
	$topic['topic_desc']=htmlspecialchars_decode($topic_desc);

}
$vip = $topic['room_paymoney'];


$is_manager=$this->is_manager($topic['room_id'])||$chat_room['create_openid']==$user_info->openid;
$is_supermanager=$this->is_SuperManager();

//直播是否已经结束
$istopic_end=1;
if(empty($topic['end_time'])||$topic['end_time']==0){
	$istopic_end=0;
}

$istopic_begin=1;
if($topic['begin_time']>time()){
	$istopic_begin=0;
}

$topic['look_numbers']=$topic['look_numbers']+$topic['x_look_numbers'];


$join_count=pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename("chat_joinusers")." WHERE topic_id=:topic_id",array(":topic_id"=>$topic_id));
$join_list=pdo_fetchall("SELECT A1.topic_id,A2.nickname,A2.avatar FROM ".tablename("chat_joinusers")." A1 INNER JOIN ".tablename("chat_users")." A2 ON 
     A1.user_uid=A2.id WHERE topic_id=:topic_id ORDER BY A1.ID DESC LIMIT 6",array(":topic_id"=>$topic_id));

$is_join=pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename("chat_joinusers")." WHERE user_uid=:user_uid",array(":user_uid"=>$user_info->uid));
if($topic['series_id']!=''){
	$is_pay=pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename("chat_payment")." WHERE pay_uid=:user_uid and series_id=:series_id and pay_status=1",array(":user_uid"=>$user_info->uid,":series_id"=>$topic['series_id']));
	$series_id = $topic['series_id'];
	//判断系列课
	$is_vip = $this->is_vip($user_info->uid);
	if(!empty($is_vip)){
		$is_pay =1;
	}
}
$sharedata=array(
		"title"=>str_replace(array("\r\n", "\r", "\n"), '', $topic['topic_name']),
		"desc"=>strip_tags(str_replace(array("\r\n", "\r", "\n"), '', $topic['topic_desc'])),
		"link"=>$_W['siteroot'].'app/'.substr($this->createmobileurl('topic_info',array('topic_id'=>$topic_id, "fuid"=>$user_info->uid),true),2),
		"imgUrl"=>$topic['topic_icon'],
);
$fuid=$_GPC['fuid'];

include $this->template('topic_info');