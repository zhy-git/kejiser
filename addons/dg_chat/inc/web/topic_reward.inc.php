<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];
$topic_id=$_GPC['topic_id'];
$topic_id=intval($topic_id);

$tempcondition=" WHERE topic_id='{$topic_id}' AND pay_status=1 AND pay_type=1 AND A1.uniacid = '{$_W['uniacid']}'";

$pindex = max(1, intval($_GPC['page']));
$psize = 10;


$records = pdo_fetchall("SELECT A1.pay_time,A2.nickname,A1.pay_money,A1.transaction_id,A2.avatar,A3.nickname tonickname,A3.avatar toavatar FROM ".tablename("chat_payment")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.pay_uid=A2.id 
		INNER JOIN ".tablename("chat_users")." A3 ON A1.payto_uid=A3.id  
    ".  $tempcondition." ORDER BY A1.id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);


$total_all = pdo_fetch('SELECT COUNT(*) mcount,IFNULL(SUM(pay_money),0) pay_money FROM ' . tablename("chat_payment")." A1 ". $tempcondition);
$total=$total_all['mcount'];
$total_money=$total_all['pay_money'];

$pager = pagination($total, $pindex, $psize);

include $this->template('topic_reward');

?>