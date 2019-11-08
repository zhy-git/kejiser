<?php
global $_GPC,$_W;

$uniacid = $_W['uniacid'];
$cfg=$this->module['config'];
$cfg['cash_money']=empty($cfg['cash_money'])?10.00:number_format($cfg['cash_money'],2);
$percent_plat=empty($cfg['plat_percent'])?2:$cfg['plat_percent'];
$percent_plat=$percent_plat/100.00;
$percent_plat=1-$percent_plat;

$room_id=0;
$user_info=$this->getUserInfo();

$max_id=0;
$max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_mysubcom")." WHERE payto_uid=:uid",array(":uid"=>$user_info->uid));
if(!empty($max_record)){
    $max_id=$max_record;
}
$batch_num=$this->build_order_sn();
$sum_sql="select A1.`uniacid`,A2.`room_id`,MAX(A1.id) max_id,`payto_uid`,sum(`pay_money`) pay,1-A2.subcom_percent
subcom_percent,SUM(pay_money)*(A2.subcom_percent)*" .$percent_plat." my_money,'".$batch_num."' batch_num,unix_timestamp
(now()) create_time	FROM ".tablename("chat_payment")." A1 INNER JOIN
".tablename('chat_room')." A2 on A1.room_id=A2.room_id WHERE pay_status=1 and pay_type=2 and A1.uniacid=:uniacid and
A1.fuid=:uid AND A1.payto_uid=:uid AND A1.id>:max_id GROUP BY A2.room_id";

$result=pdo_fetchall($sum_sql,array(":uniacid"=>$uniacid,":max_id"=>$max_id,":uid"=>$user_info->uid));//可提现
//var_dump($result);
$my_notcash=0;//我的收益
for($i=0;$i<count($result);$i++){
	$my_notcash+=number_format($result[$i]['my_money'],2);
}
$room_id=$result['room_id'];
$max_id=0;
$max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_mysubcom")." WHERE payto_uid=:uid",array(":uid"=>$user_info->uid));
if(!empty($max_record)){
    $max_id=$max_record;
}
//执行提现操作
if(!empty($_GPC['submit'])&&$my_notcash>0){
    header('content-type:application/json;charset=utf8');
    $insert_sql="INSERT INTO ".tablename("chat_mysubcom")." (uniacid,room_id,max_id,payto_uid,pay_money,subcom_percent,my_money,batch_num,create_time)";
    $last_sql=$insert_sql.$sum_sql;
    $row_count=pdo_query($last_sql,array(":uniacid"=>$uniacid,":max_id"=>$max_id,":uid"=>$user_info->uid));
    $last_data=array(
			"uniacid"=>$uniacid,
			"payto_uid"=>$user_info->uid,
			"payto_openid"=>$user_info->openid,
			"pay_money"=>$my_notcash,
			"create_time"=>time(),
			"status"=>1,
			"pay_type"=>3,
			"batch_num"=>$batch_num
	);
	
	pdo_insert("chat_mycashsum_last",$last_data);

    $fmdata = array(
        "success" => 1,
        "data" =>"结算成功,请等待审核！",
    );

    echo json_encode($fmdata);
    exit;
}



$my_hiscash=0.00;
$his_tory=pdo_fetchcolumn("SELECT SUM(pay_money) FROM ".tablename("chat_mycashsum_last")." WHERE pay_type=3 AND payto_uid=:uid",array(":uid"=>$user_info->uid));
if(!empty($his_tory)){
	$my_hiscash=$his_tory;
}
$my_hiscash=number_format($my_hiscash,2);

$all_cash=$my_hiscash+$my_notcash;
$all_cash=number_format($all_cash,2);


$all_records=pdo_fetchall("SELECT * FROM ".tablename("chat_mycashsum_last")." WHERE  pay_type=3 AND payto_uid=:uid",array(":uid"=>$user_info->uid));
foreach($all_records as &$t_record){
	$t_record['status']=$t_record['status']==1?"处理中":"完结";
}

//$my_hiscash=0.00;
//$his_tory=pdo_fetchcolumn("SELECT SUM(pay_money) FROM ".tablename("chat_mysubcom_last")." WHERE pay_type=1 AND payto_uid=:uid",array(":uid"=>$user_info->uid));
//if(!empty($his_tory)){
//  $my_hiscash=$his_tory;
//}
//$my_hiscash=number_format($my_hiscash,2);
//
//$all_cash=$my_hiscash+$my_notcash;
//$all_cash=number_format($all_cash,2);
//
//
//$all_records=pdo_fetchall("SELECT * FROM ".tablename("chat_mysubcom_last")." WHERE  pay_type=1 AND payto_uid=:uid",array(":uid"=>$user_info->uid));
//foreach($all_records as &$t_record){
//  $t_record['status']=$t_record['status']==1?"处理中":"完结";
//}

include $this->template('subcom_cash');