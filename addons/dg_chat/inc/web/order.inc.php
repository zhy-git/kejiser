<?php
global $_W,$_GPC;
load()->func('tpl');
$id=$_GPC['orderid'];
$last['max_id']=0;
$order=pdo_fetch("select * from ".tablename('chat_mycashsum_last')." where id=:id",array(":id"=>$id));
$lastorder=pdo_fetch("select * from ".tablename('chat_mycashsum_last')." where id<:id and payto_openid=:openid and pay_type=:pay_type limit 1",array(":id"=>$id,":openid"=>$order['payto_openid'],":pay_type"=>$order['pay_type']));
if(!empty($lastorder)){
    $last=pdo_fetch("select max_id from ".tablename('chat_mycashsum')." where batch_num=:batch_num",array(":batch_num"=>$lastorder['batch_num']));
}
$now=pdo_fetch("select max_id from ".tablename('chat_mycashsum')." where batch_num=:batch_num",array(":batch_num"=>$order['batch_num']));
$total=pdo_fetchcolumn("select count(1) countnum,sum(pay_money) countmoney from ".tablename('chat_payment')." where id>:lastmax and id<=:nowmax and pay_type=:pay_type and pay_status=1",array(":lastmax"=>$last['max_id'],":nowmax"=>$now['max_id'],":pay_type"=>$order['pay_type']));
$records=pdo_fetchall("select `pay_nickname`,`pay_avatar`,`pay_money`,`pay_time` from ".tablename('chat_payment')."  where id>:lastmax and id<=:nowmax and pay_type=:pay_type and pay_status=1",array(":lastmax"=>$last['max_id'],":nowmax"=>$now['max_id'],":pay_type"=>$order['pay_type']));

include $this->template('order');