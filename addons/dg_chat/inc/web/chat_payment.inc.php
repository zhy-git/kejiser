<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');

if(!empty($_GPC['id'])){
	$temp_id=intval($_GPC['id']);
	$row=pdo_fetch("SELECT A1.*,A2.openid,A2.alipay_num FROM ". tablename("chat_mycashsum_last")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.payto_uid=A2.id WHERE A1.id=:id",array(":id"=>$temp_id));
	if(empty($row)||$row['status']!=1){
		exit;
	}
		
	$result=$this->pay_cash($row['openid'],$row['pay_money']);
	if($result['errno']==0){
		pdo_update("chat_mycashsum_last",array("status"=>2,'pay_time'=>time(),'transaction_id'=>$result['payment_no']),array("id"=>$row['id']));
	}else{
		load()->func("logging");
		logging_run(json_encode($result));
	}
	$fmdata = array(
			"success" => $result['errno'],
			"msg" => $result['error'],
	);
	header('content-type:application/json;charset=utf8');
	echo json_encode($fmdata);
	exit();
}
if($_GPC['alipay']){
	$a_id=$_GPC['alipay'];
	pdo_update("chat_mycashsum_last",array("status"=>2,'pay_time'=>time()),array("id"=>$a_id));
	header('content-type:application/json;charset=utf8');
	$fmdata = array(
			"success" => 1
			
	);
	echo json_encode($fmdata);
	exit();
}

$tempcondition=" WHERE A1.uniacid = '{$_W['uniacid']}'";

$pay_status=$_GPC['status'];
$starttime = empty($_GPC['time']['start']) ? TIMESTAMP -  86399 * 6 : strtotime($_GPC['time']['start']);
$endtime = empty($_GPC['time']['end']) ? TIMESTAMP + 6*86400: strtotime($_GPC['time']['end']);

$tempArray=array();
if(!empty($pay_status)){
	$tempcondition=$tempcondition." AND A1.status=:status";
	$tempArray[':status']=$pay_status;
}

if(!empty($starttime)){
	$tempcondition=$tempcondition." AND A1.create_time>=:starttime";
	$tempArray[':starttime']=$starttime;
}

if(!empty($endtime)){
	$tempcondition=$tempcondition." AND A1.create_time<:endtime";
	$tempArray[':endtime']=$endtime;
}
$keyword=$_GPC['keyword'];
if(!empty($keyword)){
	$tempcondition=$tempcondition." AND (A2.nickname LIKE '%{$keyword}%')";
}

$pindex = max(1, intval($_GPC['page']));
$psize = 10;

$records = pdo_fetchall("SELECT A1.*,A2.nickname,A2.avatar FROM " . tablename("chat_mycashsum_last")." A1 INNER JOIN ".tablename("chat_users")." A2 ON 
    A1.payto_uid=A2.id" .  $tempcondition." ORDER BY A1.status,A1.id LIMIT " . ($pindex - 1) * $psize . ',' . $psize,$tempArray);

foreach($records as &$temp_record){
	$temp_record['status']=$temp_record['status']==1?"处理中":"完结";
}

$total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename("chat_mycashsum_last")." A1 INNER JOIN ".tablename("chat_users")." A2 ON 
    A1.payto_uid=A2.id " . $tempcondition,$tempArray);

$pager = pagination($total, $pindex, $psize);

include $this->template('chat_payment');

?>