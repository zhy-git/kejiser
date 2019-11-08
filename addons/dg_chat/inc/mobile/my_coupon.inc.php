<?php
global $_W,$_GPC;
//获取用户信息
$user_info = $this->getUserInfo();
$cfg = $this->module['config'];
$uniacid = $_W['uniacid'];
//查询我的优惠劵
$type = empty($_GPC['coupon_type'])?'no_use':$_GPC['coupon_type'];
$pindex = max(1,intval($_GPC['pindex']));
$psize = 10;

$sql = "select count(1) from ".tablename('chat_coupon_use')." where uniacid=:uniacid  and use_uid=:uid ";
$prams = array(':uniacid'=>$uniacid,':uid'=>$user_info->uid);

//未使用 
$not_sql = ' and  use_time is null and end_time>:time ';
$not_prams = $prams;
$not_prams[':time'] = time();
$not_use = pdo_fetchcolumn($sql.$not_sql,$not_prams);
//已用
$al_sql = ' and use_time is not null ';
$al_use = pdo_fetchcolumn($sql.$al_sql,$prams);
//已过期
$al_ex_sql = ' and use_time is null and end_time<:time ';
$al_ex_use = pdo_fetchcolumn($sql.$al_ex_sql,$not_prams);
if($type == 'no_use'){
	$condition = $not_sql;
	$all_prams = $not_prams;
}else if ($type=='al_use'){
	$condition = $al_sql;
	$all_prams = $prams;
}else{
	$condition = $al_ex_sql;
	$all_prams = $not_prams;
}

$total = pdo_fetchcolumn("select count(1) from ".tablename("chat_coupon_use")." where uniacid=:uniacid and use_uid=:uid ".$condition,$all_prams);
$coupon_list = pdo_fetchall("select id,coupon_name,coupon_money,coupon_type,full_money,FROM_UNIXTIME(start_time,'%Y-%m-%d') start_time,FROM_UNIXTIME(end_time,'%Y-%m-%d') end_time from ".tablename("chat_coupon_use")." where uniacid=:uniacid and use_uid=:uid ".$condition." order by coupon_money asc,end_time asc limit ".($pindex-1)*$psize.','.$psize,$all_prams);

if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['count']=$total;
	$result['list']=$coupon_list;
	echo json_encode($result);
	exit;
}
//查找用户信息
include $this->template('my_coupon');