<?php
global $_GPC, $_W;
$uniacid=$_W['uniacid'];
$roomid=intval($_GPC['roomid']);
$pindex = max(1, intval($_GPC['page']));
$psize = 10;
$chat_room = pdo_get('chat_room',array('uniacid'=>$uniacid,'id'=>$roomid));//查找直播间id
$pindex = max(1, intval($_GPC['page']));
$psize = 10;
$records = pdo_fetchall("SELECT A1.pay_time,A2.nickname,A1.pay_money,A1.transaction_id,avatar FROM ".tablename("chat_payment")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.pay_uid=A2.id and A1.room_id={$chat_room['room_id']} and A1.topic_id=0 and A1.pay_status=1 ORDER BY A1.id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
$total_all = pdo_fetch('SELECT COUNT(*) mcount,SUM(pay_money) pay_money FROM ' . tablename("chat_payment")." A1 where A1.room_id={$chat_room['room_id']} and A1.pay_status=1 and A1.topic_id=0");
$total=$total_all['mcount'];
$total_money=$total_all['pay_money'];
$pager = pagination($total, $pindex, $psize);
//查人
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

$uid = $_GPC['uid'];
if(!empty($uid)){
	$usersto = pdo_get("chat_users",array("uniacid"=>$uniacid,"id"=>$uid));
	
	$sell_money = pdo_fetch("select id  from ".tablename("chat_payment")." where uniacid=:uniacid and pay_type=2 and pay_status=1 and topic_id=0 and room_id=:room_id and pay_uid =:uid",array(":uniacid"=>$uniacid,":room_id"=>$chat_room['room_id'],":uid"=>$uid));
	if(!empty($sell_money)){
		echo 1;exit;
	}
	$data = array();
	$data['uniacid'] = $uniacid;
	$data['room_id'] = $chat_room['room_id'];
	$data['topic_id'] = 0;
	$data['pay_money'] = $chat_room['room_money'];
	$data['pay_uid'] = $usersto['id'];
	$data['pay_type'] = 2;
	$data['pay_openid'] = $usersto['openid'];
	$data['pay_nickname'] = $usersto['nickname'];
	$data['pay_avatar'] = $usersto['avatar'];
	$data['pay_time'] = time();
	$data['pay_status'] = 1;
	$data['create_time'] = time();
	$insertid = pdo_insert("chat_payment",$data);
	// 进入表  添加
	$dataa = array();
	$dataa['uniacid'] = $uniacid;
	$dataa['room_id'] = $chat_room['room_id'];
	$dataa['topic_id'] = 0;
	$dataa['user_uid'] =$usersto['id'];
	$dataa['create_time'] = time();
	$dataa['create_time'] = time()+1;
	$jinsertid = pdo_insert("chat_joinusers",$dataa);
	echo 0;
	exit();
}


include $this->template('chat_pay');
?>