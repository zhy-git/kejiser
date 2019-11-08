<?php
global $_W,$_GPC;
$user_info = $this->getUserInfo();
$uniacid = $_W['uniacid'];
//优惠劵中心
if(!empty($_GPC['receive'])){
	$coupon_id = $_GPC['coupon_id'];
	$coupon_info = pdo_fetch("select * from ".tablename("chat_coupon")." where id=:id and coupon_number>0 and is_del=0",array(':id'=>$coupon_id));
	header('content-type:application/json;charset=utf8');
	if(empty($coupon_info)){
		$fmdata = array(
			'success'=>-2,
			'msg'=>'领取失败，请稍后再试'
		);
		echo json_encode($fmdata);exit;
	}
	$coupon_number = $coupon_info['coupon_number']-1;
	if($coupon_number<0){
		$fmdata = array(
			'success'=>-2,
			'msg'=>'领取失败，请稍后再试'
		);
		echo json_encode($fmdata);exit;
	}
	$data= array(
		'uniacid'=>$uniacid,
		'use_uid'=>$user_info->uid,
		'use_openid'=>$user_info->openid,
		'use_nickname'=>$user_info->nickname,
		'use_avatar'=>$user_info->headimgurl,
		'c_id'=>$coupon_id,
		'coupon_name'=>$coupon_info['coupon_name'],
		'coupon_type'=>$coupon_info['coupon_type'],
		'coupon_money'=>$coupon_info['coupon_money'],
		'full_money'=>$coupon_info['full_money'],
		'start_time'=>$coupon_info['start_time'],
		'end_time'=>$coupon_info['end_time'],
		'create_time'=>time()
	);
	pdo_insert('chat_coupon_use',$data);
	pdo_update('chat_coupon',array('coupon_number'=>$coupon_number),array('id'=>$coupon_id));
	$fmdata = array(
		'success'=>1,
		'msg'=>'领取成功'
	);
	echo json_encode($fmdata);die;

}
$pindex = max(1,intval($_GPC['pindex']));
$psize = 10;
$count = pdo_fetchcolumn("select count(1) from ".tablename('chat_coupon')." where uniacid=:uniacid and is_del=0 ",array(":uniacid"=>$uniacid));

$coupon_list = pdo_fetchall("select *,(select count(1) from ".tablename('chat_coupon_use')." where c_id=a.id and use_uid=:uid limit 1 ) count from ".tablename("chat_coupon")." a where uniacid=:uniacid and is_del=0 order by coupon_money asc,coupon_number desc limit ".($pindex-1)*$psize.','.$psize,array(":uniacid"=>$uniacid,":uid"=>$user_info->uid));
if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['count']=$count;
	$result['list']=$coupon_list;
	echo json_encode($result);
	exit;
}
//var_dump($coupon_list);
include $this->template('coupon_center');