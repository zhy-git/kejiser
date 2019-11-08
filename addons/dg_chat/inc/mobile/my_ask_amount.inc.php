<?php
global $_GPC,$_W;	

$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];

$user_info=$this->getUserInfo();
$uid=$user_info->uid;

/*处理历史数据开始*/
$his_amount=array(0.00,0.00,0.00);
$max_ids=array(0,0,0);

$his_amount_result=pdo_fetchall("SELECT summary_type,SUM(last_amount) last_amount,MAX(max_id) max_id FROM 
        ".tablename("chat_ask_summary")." WHERE payto_uid=:uid GROUP BY summary_type",array(":uid"=>$uid));

if(!empty($his_amount_result)){
	foreach ($his_amount_result as $result){
		$his_amount_result[$result['summary_type']]=$result;
	}
	unset($result);
	$his_amount[0]=!empty($his_amount_result[1]['last_amount'])?$his_amount_result[1]['last_amount']:0.00;
	$his_amount[1]=!empty($his_amount_result[2]['last_amount'])?$his_amount_result[2]['last_amount']:0.00;
	$his_amount[2]=!empty($his_amount_result[3]['last_amount'])?$his_amount_result[3]['last_amount']:0.00;
	$max_ids[0]=!empty($his_amount_result[1]['max_id'])?$his_amount_result[1]['max_id']:0;
	$max_ids[1]=!empty($his_amount_result[2]['max_id'])?$his_amount_result[2]['max_id']:0;
	$max_ids[2]=!empty($his_amount_result[3]['max_id'])?$his_amount_result[3]['max_id']:0;
}
/*处理历史数据结束*/

/*处理未结算金额开始*/
$current_amount=array(0.00,0.00,0.00);
$last_amount=array(0.00,0.00,0.00);
//回答提问收益汇总
$amount_type_1=pdo_fetch("SELECT MAX(id) max_id,SUM(pay_money) pay_amount,COUNT(0) pay_count,payto_uid FROM ".tablename("chat_ask")." WHERE pay_status=1 
    AND pay_type='ask' AND payto_uid=:uid AND id>:max_id AND is_answer=1",array(":uid"=>$uid,":max_id"=>$max_ids[0]));
if(!empty($amount_type_1)){
	$current_amount[0]=!empty($amount_type_1['pay_amount'])?$amount_type_1['pay_amount']:0.00;
	$last_amount[0]=number_format($current_amount[0]*0.98,2);
}
//别人旁听我的回答收益
$amount_type_2=pdo_fetch("SELECT MAX(A1.ask_id) max_id,SUM(A1.pay_money) pay_amount,COUNT(0) pay_count,A2.payto_uid FROM ".tablename("chat_ask")." A1 INNER JOIN ".tablename("chat_ask")." A2 ON 
    A1.ask_id=A2.id WHERE A1.pay_type='listen' AND A1.pay_status=1 AND A2.payto_uid=:uid 
    AND A1.ask_id>:max_id",array(":uid"=>$uid,":max_id"=>$max_ids[1]));

if(!empty($amount_type_2)){
	$current_amount[1]=!empty($amount_type_2['pay_amount'])?$amount_type_2['pay_amount']:0.00;
	$last_amount[1]=number_format($current_amount[1]*0.5*0.98,2);
}

//别人旁听我的提问收益
$amount_type_3=pdo_fetch("SELECT MAX(A1.ask_id) max_id,SUM(A1.pay_money) pay_amount,COUNT(0) pay_count,A2.payto_uid FROM ".tablename("chat_ask")." A1 INNER JOIN ".tablename("chat_ask")." A2 ON
    A1.ask_id=A2.id WHERE A1.pay_type='listen' AND A1.pay_status=1 AND A2.pay_uid=:uid
    AND A1.ask_id>:max_id",array(":uid"=>$uid,":max_id"=>$max_ids[2]));

if(!empty($amount_type_3)){
	$current_amount[2]=!empty($amount_type_3['pay_amount'])?$amount_type_3['pay_amount']:0.00;
	$last_amount[2]=number_format($current_amount[2]*0.5*0.98,2);
}
/*处理未结算金额结束*/

//处理结算
if(!empty($_GPC['submit'])){
	header('content-type:application/json;charset=utf8');
	$order_num=$this->build_order_sn();
	if(array_sum($current_amount)<1){
		$fmdata = array(
					"success" => -1,
					"data" =>"当前金额小于1元,不能提现!",
		);
		echo json_encode($fmdata);
		exit;
	}
	
	$amount_type_1['pay_amount']=$current_amount[0];
	$amount_type_2['pay_amount']=$current_amount[1];
	$amount_type_3['pay_amount']=$current_amount[2];
	
	$amount_type_1['last_amount']=$last_amount[0];
	$amount_type_2['last_amount']=$last_amount[1];
	$amount_type_3['last_amount']=$last_amount[2];
	
	$amount_type_1['batch_num']=$order_num;
	$amount_type_2['batch_num']=$order_num;
	$amount_type_3['batch_num']=$order_num;
	
	$amount_type_1['summary_type']=1;
	$amount_type_2['summary_type']=2;
	$amount_type_3['summary_type']=3;
	
	$amount_type_1['create_time']=time();
	$amount_type_2['create_time']=time();
	$amount_type_3['create_time']=time();
	
	$amount_type_1['uniacid']=$uniacid;
	$amount_type_2['uniacid']=$uniacid;
	$amount_type_3['uniacid']=$uniacid;
	
	
	pdo_insert("chat_ask_summary",$amount_type_1);
	pdo_insert("chat_ask_summary",$amount_type_2);
	pdo_insert("chat_ask_summary",$amount_type_3);
	
	$summary_last['pay_amount']=array_sum($current_amount);
	$summary_last['last_amount']=array_sum($last_amount);
	$summary_last['payto_uid']=$amount_type_1['payto_uid'];
	$summary_last['create_time']=time();
	$summary_last['batch_num']=$order_num;
	$summary_last['uniacid']=$uniacid;
	
	pdo_insert("chat_ask_summary_last",$summary_last);
	
	$fmdata = array(
			"success" => 1,
			"data" =>"结算成功!",
	);
	
	echo json_encode($fmdata);
	exit;
}

$all_amount=array();
$all_amount[0]=number_format($his_amount[0]+$last_amount[0],2);
$all_amount[1]=number_format($his_amount[1]+$last_amount[1],2);
$all_amount[2]=number_format($his_amount[2]+$last_amount[2],2);
$all_money=number_format(array_sum($all_amount),2);
$current_money=number_format(array_sum($last_amount),2);

$all_summery=pdo_fetchcolumn("SELECT SUM(last_amount) last_amount FROM ".tablename("chat_ask_summary_last")." WHERE payto_uid=:uid",array(":uid"=>$uid));

if(empty($all_summery)){
	$all_summery=0.00;
}

$all_summery=number_format($all_summery,2);

$all_records=pdo_fetchall("SELECT * FROM ".tablename("chat_ask_summary_last")." WHERE payto_uid=:uid ORDER BY ID DESC ",array(":uid"=>$uid));

foreach($all_records as &$t_record){
	$t_record['status']=$t_record['status']==1?"处理中":"完结";
}

unset($t_record);

$all_records_count=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_ask_summary_last")." WHERE payto_uid=:uid",array(":uid"=>$uid));

include $this->template('my_ask_amount');