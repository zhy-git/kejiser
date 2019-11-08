<?php 
	global $_W,$_GPC;
	$uniacid = $_W['uniacid'];
	$tempcondition=" WHERE uniacid=".$uniacid;
	$sql_first = "select id,nickname,user_info,alipay_num,real_name,mobile from ".tablename('chat_users');
	$user_list = pdo_fetchall($sql_first.$tempcondition." order by create_time asc");
	$tableheader = array('昵称','姓名','手机号', '支付宝号');
	$field_name = pdo_fetchall('select id,field_name from '.tablename('chat_user_fields').$tempcondition.' and field_type!="img"');
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
	$filename = "用户管理统计";

	header("Content-type:text/csv");
	header("Content-Disposition:attachment; filename=".$filename.".csv");

	echo $html;
	exit();
	
 ?>