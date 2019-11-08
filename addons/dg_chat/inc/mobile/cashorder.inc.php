<?php
global $_W,$_GPC;
load()->func('tpl');
$cashid=$_GPC['cashid'];
$uniacid=$_W['uniacid'];
$lastmax['max_id']=0;
$userinfo=$this->getUserInfo();
$openid=$userinfo->openid;

$order=pdo_fetch("select * from ".tablename('chat_mycashsum_last')." where id=:id",array(":id"=>$cashid));
$last_order=pdo_fetch("select * from ".tablename('chat_mycashsum_last')." where id<:id and payto_openid=:openid and pay_type=:pay_type limit 1",array(":id"=>$cashid,":openid"=>$order['payto_openid'],":pay_type"=>$order['pay_type']));
if(!empty($last_order)){
    $lastmax=pdo_fetch("select max_id from ".tablename('chat_mycashsum')." where batch_num=:batch_num",array(":batch_num"=>$last_order['batch_num']));
}
$newmax=pdo_fetch("select max_id from ".tablename('chat_mycashsum')." where batch_num=:batch_num",array(":batch_num"=>$order['batch_num']));
$total=pdo_fetchcolumn("select count(1) countnum,sum(pay_money) countmoney from ".tablename('chat_payment')." where id>:lastmax and id<=:nowmax and pay_type=:pay_type and pay_status=1",array(":lastmax"=>$lastmax['max_id'],":nowmax"=>$newmax['max_id'],":pay_type"=>$order['pay_type']));
$allorder=pdo_fetchall("select `pay_nickname`,`pay_avatar`,`pay_money`,`pay_time`,`create_time` from ".tablename('chat_payment')."  where id>:lastmax and id<=:nowmax and pay_type=:pay_type and pay_status=1",array(":lastmax"=>$lastmax['max_id'],":nowmax"=>$newmax['max_id'],":pay_type"=>$order['pay_type']));

include $this->template('cashorder');


/*$last_order=pdo_fetch("select `id`,`batch_num`,`room_id` from ".tablename('chat_mycashsum_last')." where id<:id and payto_openid=:openid limit 1",array(":id"=>$cashid,":openid"=>$openid));

if(!empty($last_order)){
    $lastmax=pdo_fetch("select A1.`batch_num`,A1.`room_id`,A2.`max_id` from ".tablename('chat_mycashsum_last')." A1 inner join ".tablename('chat_roomcashsum')." A2 on A1.batch_num=A2.batch_num where A1.id=:id and A1.uniacid=:uniacid and A1.pay_type=2",array(":id"=>$last_order['id'],":uniacid"=>$uniacid));
}

$newmax=pdo_fetch("select A1.`batch_num`,A1.`room_id`,A2.`max_id` from ".tablename('chat_mycashsum_last')." A1 inner join ".tablename('chat_roomcashsum')." A2 on A1.batch_num=A2.batch_num where A1.id=:id and A1.uniacid=:uniacid and A1.pay_type=2",array(":id"=>$cashid,":uniacid"=>$uniacid));

$allorder=pdo_fetchall("select `pay_nickname`,`pay_avatar`,`create_time`,`pay_money` from ".tablename('chat_payment')." where id >:lastmax and id<=:newmax and pay_status=1 and uniacid=:uniacid and room_id=:room_id and pay_type=2",array(":lastmax"=>$lastmax['max_id'],":newmax"=>$newmax['max_id'],":uniacid"=>$uniacid,":room_id"=>$newmax['room_id']));

include $this->template('cashorder');*/