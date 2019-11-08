<?php 
	global $_W,$_GPC;
	$uniacid = $_W['uniacid'];
	$series_id = $_GPC['series_id'];
	$series_name = pdo_fetch("select room_name from".tablename('chat_room').' where id='.$series_id);
	$tempcondition=" WHERE A1.uniacid=".$uniacid;
	$sql_first = "SELECT A1.pay_time,A2.nickname,A2.real_name,A2.mobile,A2.alipay_num,A1.pay_money,A2.user_info,A1.transaction_id,avatar FROM ".tablename("chat_payment")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.pay_uid=A2.id 
    ".  $tempcondition." AND series_id='{$series_id}' AND pay_status=1 AND pay_type=2  ORDER BY A1.id DESC";
	$user_list = pdo_fetchall($sql_first);
	
	$tableheader = array('昵称','姓名','手机号', '支付宝号');
	$field_name = pdo_fetchall('select id,field_name from '.tablename('chat_user_fields').' A1 '.
	$tempcondition.' and field_type!="img"');
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
	foreach ($user_list as $mid => $value) {
		$user_info = unserialize($value['user_info']);
		$html .= $value['nickname'] . "\t ,";
		$html .= $value['real_name'] . "\t ,";
		$html .= $value['mobile'] . "\t ,";
		$html .=$value['alipay_num']. "\t ,";
		for($i = 0;$i<count($key);$i++){
			$html.= $user_info[$key[$i]]."\t ,";
		}
		$html .= "\n";
	}
	$filename = $series_name['room_name']."系列课付费统计";

	header("Content-type:text/csv");
	header("Content-Disposition:attachment; filename=".$filename.".csv");

	echo $html;
	exit();
	
 ?>