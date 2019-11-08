<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];
$series_id=$_GPC['series_id'];
$series_id=intval($series_id);

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
	$series = pdo_get("chat_room",array("uniacid"=>$uniacid,"id"=>$series_id));
	// 支付给谁
	// $users = pdo_get("chat_users",array("uniacid"=>$uniacid,"openid"=>$topic['create_openid']));
	// var_dump($users);die;
	// 谁支付
	$usersto = pdo_get("chat_users",array("uniacid"=>$uniacid,"id"=>$uid));
	
	$sell_money = pdo_fetch("select id  from ".tablename("chat_payment")." where uniacid=:uniacid and pay_type=2 and pay_status=1 and series_id=:series_id and pay_uid =:uid",array(":uniacid"=>$uniacid,":series_id"=>$series_id,":uid"=>$uid));
	// var_dump($sell_money);
	if(!empty($sell_money)){
		echo 1;exit;
	}
	$data = array();
	$data['uniacid'] = $uniacid;
	$data['room_id'] = $series['series_id'];
	$data['series_id'] = $series_id;
	$data['pay_money'] = $series['series_price'];
	$data['pay_uid'] = $usersto['id'];
	$data['pay_type'] = 2;
	$data['pay_openid'] = $usersto['openid'];
	$data['pay_nickname'] = $usersto['nickname'];
	$data['pay_avatar'] = $usersto['avatar'];
	$data['pay_time'] = time();
	$data['pay_status'] = 1;
	$data['create_time'] = time();
	$insertid = pdo_insert("chat_payment",$data);
		echo 0;exit();
}
$tempcondition=" WHERE series_id='{$series_id}' AND pay_status=1 AND pay_type=2 AND A1.uniacid = '{$_W['uniacid']}'";

$pindex = max(1, intval($_GPC['page']));
$psize = 10;


$records = pdo_fetchall("SELECT A1.pay_time,A2.nickname,A2.real_name,A2.mobile,A1.pay_money,A1.transaction_id,avatar FROM ".tablename("chat_payment")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.pay_uid=A2.id 
    ".  $tempcondition." ORDER BY A1.id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);


$total_all = pdo_fetch('SELECT COUNT(*) mcount,SUM(pay_money) pay_money FROM ' . tablename("chat_payment")." A1 ". $tempcondition);
$total=$total_all['mcount'];
$total_money=$total_all['pay_money'];
$download_series = $this->createWebUrl('download_series',array('series_id'=>$series_id));
$pager = pagination($total, $pindex, $psize);

include $this->template('series_pay');

?>