<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];
$topic_id=$_GPC['topic_id'];
$topic_id=intval($topic_id);

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
$topic = pdo_get("chat_topic",array("uniacid"=>$uniacid,"id"=>$topic_id));
if(!empty($uid)){
	
	
	// 支付给谁
	// $users = pdo_get("chat_users",array("uniacid"=>$uniacid,"openid"=>$topic['create_openid']));
	// var_dump($users);die;
	// 谁支付
	$usersto = pdo_get("chat_users",array("uniacid"=>$uniacid,"id"=>$uid));
	
	$sell_money = pdo_fetch("select id  from ".tablename("chat_payment")." where uniacid=:uniacid and pay_type=2 and pay_status=1 and topic_id=:topic_id and pay_uid =:uid",array(":uniacid"=>$uniacid,":topic_id"=>$topic_id,":uid"=>$uid));
	// var_dump($sell_money);
	if(!empty($sell_money)){
		echo 1;exit;
	}
	$data = array();
	$data['uniacid'] = $uniacid;
	$data['room_id'] = $topic['room_id'];
	$data['topic_id'] = $topic_id;
	$data['pay_money'] = $topic['room_paymoney'];
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
		$dataa['room_id'] = $topic['room_id'];
		$dataa['topic_id'] = $topic_id;
		$dataa['user_uid'] =$usersto['id'];
		$dataa['create_time'] = time();
		$dataa['create_time'] = time()+1;
		$jinsertid = pdo_insert("chat_joinusers",$dataa);
		echo 0;exit();
}
$tempcondition=" WHERE topic_id='{$topic_id}' AND pay_status=1 AND pay_type=2 AND A1.uniacid = '{$_W['uniacid']}'";

$pindex = max(1, intval($_GPC['page']));
$psize = 10;


$records = pdo_fetchall("SELECT A1.pay_time,A2.nickname,A1.pay_money,A1.transaction_id,avatar FROM ".tablename("chat_payment")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.pay_uid=A2.id 
    ".  $tempcondition." ORDER BY A1.id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);


$total_all = pdo_fetch('SELECT COUNT(*) mcount,SUM(pay_money) pay_money FROM ' . tablename("chat_payment")." A1 ". $tempcondition);
$total=$total_all['mcount'];
$total_money=$total_all['pay_money'];

$pager = pagination($total, $pindex, $psize);
if(!empty($_GPC['csv'])){
	$csv = pdo_fetchall("SELECT A2.nickname,A1.pay_money,A2.mobile,A2.alipay_num,A2.user_info,A2.real_name,A1.pay_time,A1.transaction_id FROM ".tablename("chat_payment")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.pay_uid=A2.id 
    ".  $tempcondition." ORDER BY A1.id DESC");
	export_csv($csv,array('昵称','支付金额','支付时间','微信订单号'),"{$topic['topic_name']}_统计_".date('Ymd',time()),$uniacid);
	exit;
}
include $this->template('topic_pay');
/**
 * 导出CSV文件
 * @param array $data        数据
 * @param array $header_data 首行数据
 * @param string $file_name  文件名称
 * @return string
 */
function export_csv($data = array(), $header_data = array(), $filename = '',$uniacid)
{
    $tableheader = $header_data;
	$field_name = pdo_fetchall('select id,field_name from '.tablename('chat_user_fields').' where uniacid='.$uniacid.' and field_type!="img"');
	$key = array();
	foreach($field_name as $value){
		$tableheader[]= $value['field_name'];
		$key[] = $value['id'];
	}
	$html = "\xEF\xBB\xBF";
	foreach ($tableheader as $value) {
		$html .= $value . "\t ,";
	}
	$html .= "\n";
	foreach ($data as $mid => $value) {
		$user_info = unserialize($value['user_info']);
		$html .= $value['nickname'] . "\t ,";
		$html .= $value['pay_money'] . "\t ,";
		$html .= $value['pay_time'] . "\t ,";
		$html .= $value['transaction_id'] . "\t ,";
		for($i = 0;$i<count($key);$i++){
			$html.= $user_info[$key[$i]]."\t ,";
		}
		$html .= "\n";
	}
	header("Content-type:text/csv");
	header("Content-Disposition:attachment; filename=".$filename.".csv");
	echo $html;
	exit();
}
?>