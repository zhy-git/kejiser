<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];
$room_id=$_GPC['room_id'];
$room_id=intval($room_id);

if(empty($room_id)){
	exit();
}

$tempcondition=" WHERE room_id='{$room_id}' AND pay_status=1 and pay_money>0 AND pay_type=2 AND A1.uniacid = '{$_W['uniacid']}'";

$pindex = max(1, intval($_GPC['page']));
$psize = 10;

$records = pdo_fetchall("SELECT *,(select topic_name from ".tablename("chat_topic")." b  where b.id= a1.topic_id ) topic_name,(select room_name from ".tablename("chat_room")."  where id=a1.series_id ) room_name from ".tablename("chat_payment")." a1 where uniacid=:uniacid and pay_status=1 and pay_type= 2 and  a1.pay_money>0 and  room_id=:room_id  order by a1.create_time desc LIMIT ". ($pindex - 1) * $psize . ',' . $psize,array(":uniacid"=>$uniacid,":room_id"=>$room_id));

// $records = pdo_fetchall("SELECT A1.pay_time,A2.nickname,A2.real_name,A2.mobile,A1.pay_money,A1.transaction_id,avatar FROM ".tablename("chat_payment")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.pay_uid=A2.id 
//     ".  $tempcondition." ORDER BY A1.id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);


$total_all = pdo_fetch('SELECT COUNT(*) mcount,SUM(pay_money) pay_money FROM ' . tablename("chat_payment")." A1 ". $tempcondition);
$total=$total_all['mcount'];
$total_money=$total_all['pay_money'];
$download_series = $this->createWebUrl('download_series',array('series_id'=>$series_id));
$pager = pagination($total, $pindex, $psize);

include $this->template('room_count');

?>