<?php
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
$cfg=$this->module['config'];
$cfg['cash_money']=empty($cfg['cash_money'])?10.00:$cfg['cash_money'];
$percent_plat=empty($cfg['plat_percent'])?2:$cfg['plat_percent'];
$percent_plat=$percent_plat/100.00;
$percent_plat=1-$percent_plat;


$room_id = 0;
if(empty($_GPC['room_id'])){
	exit;
}
$room_id=intval($_GPC['room_id']);
$user_info=$this->getUserInfo();

$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));

// if($chat_room['create_openid']!=$user_info->openid){
// 	exit;
// }

$max_id_1=0;
$max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_roomcashsum")." WHERE pay_type=1 AND room_id=:room_id",array(":room_id"=>$room_id));
if(!empty($max_record)){
	$max_id_1=$max_record;
}//个人提现

$max_id_2=0;
$max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_roomcashsum")." WHERE pay_type=2 AND room_id=:room_id",array(":room_id"=>$room_id));
if(!empty($max_record)){
	$max_id_2=$max_record;
}//直播间提现
// var_dump($max_id_1,$max_id_2);
$batch_num=$this->build_order_sn();

/*计算赞赏所产生收益开始*/
$sum_sql="SELECT A1.uniacid,A2.room_id,topic_id,MAX(A1.id) max_id,1,SUM(pay_money),SUM(pay_money)*(A2.reward_percent)*".$percent_plat." my_money,
			A2.reward_percent*".($percent_plat)." reward_percent,'".$batch_num."' batch_num,unix_timestamp(now()) create_time
			FROM ".tablename("chat_payment")." A1
			INNER JOIN ".tablename("chat_topic")." A2
			ON A1.topic_id=A2.id 
			WHERE pay_status=1 AND pay_type=1 AND A1.uniacid=:uniacid AND A1.room_id=:room_id AND A1.id>:max_id 
			GROUP BY A2.room_id,topic_id";
$result = pdo_fetchall($sum_sql,array(":uniacid"=>$uniacid,":max_id"=>$max_id_1,":room_id"=>$room_id));

/*计算赞赏所产生收益结束*/

$room_notcash=0;
$room_cash=0;
foreach($result as $record){
	$room_cash+=$record['my_money'];
}

/*计算付费话题及系列课所产生收益开始*/
$sum_sql_2="SELECT uniacid,room_id,topic_id,series_id,max(id),2,SUM(pay_money) pay_money,SUM(pay_money)*".$percent_plat." room_money,".$percent_plat.",'".$batch_num."' batch_num,unix_timestamp(now()) create_time 
            FROM ".tablename("chat_payment")." 
            WHERE pay_status=1 AND room_id=:room_id AND pay_type=2 AND uniacid=:uniacid AND id>:max_id 
            GROUP BY room_id,topic_id";
$result_2=pdo_fetchall($sum_sql_2,array(":uniacid"=>$uniacid,":room_id"=>$room_id,":max_id"=>$max_id_2));
// var_dump($result_2);
/*计算付费话题所产生收益结束*/
foreach($result_2 as $record){
	$room_cash += $record['room_money'];
}

/*计算分佣的收益*/
$sum_sql_3="select A1.`uniacid`,A2.`room_id`,MAX(A1.id) max_id,payto_uid,sum(`pay_money`) pay,1-A2.subcom_percent subcom_percent,SUM(pay_money)*(A2.subcom_percent)*" .$percent_plat." my_money,'".$batch_num."' batch_num,unix_timestamp(now()) create_time	
        FROM ".tablename("chat_payment")." A1 
        INNER JOIN ".tablename('chat_room')." A2 
        on A1.room_id=A2.room_id 
        WHERE pay_status=1 and pay_type=2 and A1.uniacid=:uniacid and A1.fuid is not null AND A1.id>:max_id and A1.room_id=:room_id 
        GROUP BY A2.room_id";

$result_3 = pdo_fetch($sum_sql_3,array(":uniacid"=>$uniacid,":max_id"=>$max_id_2,":room_id"=>$room_id));
/*计算分佣的收益*/
$subcom_cash = $result_3['my_money'];
$room_notsubom = $room_cash-$subcom_cash;
// var_dump($room_cash,$subcom_cash);
$room_notcash_1 += $room_notsubom;
$room_notcash = number_format($room_notcash_1,2);    //可提现金额
// var_dump($room_notcash);
//执行提现操作
if(!empty($_GPC['submit']) && $room_notcash_1>0){
	header('content-type:application/json;charset=utf8');
	$insert_sql = "INSERT INTO ".tablename("chat_roomcashsum")." (uniacid,room_id,topic_id,max_id,pay_type,pay_money,room_money,reward_percent,batch_num,create_time)";
	
	$last_sql = $insert_sql.$sum_sql;
	$row_count = pdo_query($last_sql,array(":uniacid"=>$uniacid,":max_id"=>$max_id_1,":room_id"=>$room_id));
	$insert_sql1 = "INSERT INTO ".tablename("chat_roomcashsum")." (uniacid,room_id,topic_id,series_id,max_id,pay_type,pay_money,room_money,reward_percent,batch_num,create_time)";
	$last_sql = $insert_sql1.$sum_sql_2;
	// var_dump($last_sql);
	$row_count = pdo_query($last_sql,array(":uniacid"=>$uniacid,":max_id"=>$max_id_2,":room_id"=>$room_id));
	
	$last_data = array(
			"uniacid"=>$uniacid,
			"payto_uid"=>$user_info->uid,
			"payto_openid"=>$user_info->openid,
			"room_id"=>$room_id,
			"pay_money"=>$room_notcash_1,
			"create_time"=>time(),
			"status"=>1,
			"pay_type"=>2,
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


$room_hiscash = 0.00;  //已提现金额
$his_tory = pdo_fetchcolumn("SELECT SUM(pay_money) FROM ".tablename("chat_mycashsum_last")." WHERE pay_type=2 AND room_id=:room_id",array(":room_id"=>$room_id));
if(!empty($his_tory)){
	$room_hiscash = $his_tory;
}

$room_hiscash = $room_hiscash;

$all_cash = $room_hiscash+$room_notcash_1;   //历史总赏金

$all_cash = number_format($all_cash,2);


$all_records=pdo_fetchall("SELECT * FROM ".tablename("chat_mycashsum_last")." WHERE pay_type=2 AND room_id=:room_id",array(":room_id"=>$room_id));
foreach($all_records as &$t_record){
	$t_record['status']=$t_record['status']==1?"处理中":"完结";
}


include $this->template('room_cash');