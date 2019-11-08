<?php 
global $_W,$_GPC;
$uniacid = $_W['uniacid'];
$op = empty($_GPC['op'])?'display':$_GPC['op'];
$tablename = 'chat_coupon';
$coupon_id = $_GPC['coupon_id'];
$url = $this->createWebUrl('coupon_manage');
if(!empty($coupon_id)){
	$coupon_info = pdo_fetch("select * from ".tablename($tablename)." where uniacid=:uniacid and id=:id",array(":uniacid"=>$uniacid,":id"=>$coupon_id));
}
$sql_first = "select id,avatar,uniacid,nickname,openid from ".tablename('chat_users');
if(!empty($_GPC['user_key'])){
	$user_key = $_GPC['user_key'];
	$sql = $sql_first." WHERE uniacid=:uniacid  and nickname like '%{$user_key}%'";
	$list = pdo_fetchall($sql,array(':uniacid'=>$uniacid));
	header('content-type:application/json;charset=utf8');	
	$fmdata = array(
		"success" => 1,
		"data" =>$list
	);
	echo json_encode($fmdata);exit;
}
if(!empty($_GPC['uid'])){
	$user_uid = $_GPC['uid'];
	$is_rece = pdo_fetchcolumn("select count(1) from ".tablename("chat_coupon_use")." where uniacid=:uniacid and use_uid=:uid and c_id=:id",array(':uniacid'=>$uniacid,":uid"=>$user_uid,':id'=>$_GPC['coupon_id']));
	$user_info = pdo_fetch($sql_first.' where uniacid=:uniacid and id=:id ',array(":uniacid"=>$uniacid,':id'=>$user_uid));
	header('content-type:application/json;charset=utf8');	
	if($is_rece>1){
		$fmdata = array(
			"success" => -1,
			"data" =>'用户已领取'
		);
		echo json_encode($fmdata);exit;
	}else{
		$data = array(
			'uniacid'=>$uniacid,
			'use_uid'=>$user_info['id'],
			'use_nickname'=>$user_info['nickname'],
			'use_openid'=>$user_info['openid'],
			'use_avatar'=>$user_info['avatar'],
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
		$fmdata = array(
			"success" => 1,
			"data" =>'成功'
		);
		echo json_encode($fmdata);exit;
	}
}
$change_type = $_GPC['change_type'];
$parms =array(':uniacid'=>$uniacid);
if(!empty($change_type)){
	$condition = ' and coupon_type=:change_type';
	$parms[':change_type'] = $change_type;
}
$pindex = max(1,intval($_GPC['pindex']));
$psize=10;
if($op=='display'){
	$coupon_list = pdo_fetchall("select * from ".tablename($tablename)." where uniacid=:uniacid and is_del=0 ".$condition." order by create_time desc limit ".($pindex-1)*$psize.','.$psize,$parms);
	$total = pdo_fetchcolumn("select count(1) from ".tablename($tablename)." where uniacid=:uniacid and is_del=0 ".$condition,$parms);
}
if($op =='post'){
	$begin_time['start'] = empty($coupon_info['start_time'])?date('Y-m-d',TIMESTAMP):date('Y-m-d H:i:s',$coupon_info['start_time']);
	$begin_time['end'] = empty($coupon_info['end_time'])? date('Y-m-d',TIMESTAMP + 6*86400):date('Y-m-d H:i:s',$coupon_info['end_time']);
}
if($op =='del'){
	pdo_update($tablename,array('is_del'=>1),array('id'=>$coupon_id));
	message('删除成功',$url,'success');
}
if($op == 'look'){
	$rece_list = pdo_fetchall("select * from ".tablename("chat_coupon_use")." where uniacid=:uniacid and c_id=:coupon_id order by create_time desc limit ".($pindex-1)*$psize.','.$psize,array(":uniacid"=>$uniacid,':coupon_id'=>$coupon_id));
	$total = pdo_fetchcolumn("select count(1) from ".tablename("chat_coupon_use")." where uniacid=:uniacid and c_id=:coupon_id",array(":uniacid"=>$uniacid,':coupon_id'=>$coupon_id));
}
if(checksubmit('submit') &&$op=='post'){
	$begin_time =$_GPC['begin_time'];
	$data = array(
		'uniacid'=>$uniacid,
		'coupon_name'=>$_GPC['coupon_name'],
		'coupon_money'=>$_GPC['coupon_money'],
		'coupon_number'=>$_GPC['coupon_number'],
		'start_time'=>strtotime($begin_time['start']),
		'end_time'=>strtotime($begin_time['end']),
		'coupon_type'=>$_GPC['coupon_type']
	);
	if($_GPC['coupon_number']<0){
		message('数量输入有误');
	}

	if($_GPC['coupon_type']==1){
		empty($_GPC['full_money']) && message('请填写满值金额');
		$data['full_money'] =$_GPC['full_money'];
	}else{
		$data['full_money'] = 0;
	}
	if(!empty($coupon_id)){
		pdo_update($tablename,$data,array('id'=>$coupon_id));
	}else{
		$data['create_time'] = time();
		pdo_insert('chat_coupon',$data);
	}
	message('添加成功',$url,'success');
}
$pager = pagination($total, $pindex, $psize);
include $this->template('coupon_manage');
