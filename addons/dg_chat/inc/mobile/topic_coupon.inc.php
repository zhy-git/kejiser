<?php
global $_W,$_GPC;
$user_info = $this->getUserInfo();
$uniacid = $_W['uniacid'];
$topic_id = $_GPC['topic_id'];
$series_id = $_GPC['series_id'];

//优惠劵创建
if(!empty($_GPC['create_true'])){
	$coupon_name = $_GPC['coupon_name'];
	$coupon_number = $_GPC['coupon_number'];
	$coupon_money = $_GPC['coupon_money'];
	$is_show = $_GPC['is_show'];
	$data = array(
		'uniacid'=>$uniacid,
		'coupon_name'=>$coupon_name,
		'coupon_money'=>$coupon_money,
		'is_show'=>$is_show,
		'coupon_type'=>2,
		'create_time'=>time()
	);
	if(!empty($_GPC['end_time'])){
		$data['end_time'] = strtotime($_GPC['end_time']);
	}
	if(!empty($coupon_number)){
		$data['coupon_number'] = $coupon_number;
	}
	if(!empty($series_id)){
		$data['pro_id'] = $series_id;
		$data['pro_type'] = 2;
		$rece_num  = code($series_id);
	}else if(!empty($topic_id)){
		$data['pro_id'] = $topic_id;
		$data['pro_type'] = 3;
		$rece_num  = code($series_id);
	}
	$data['rece_code'] = $rece_num;
	pdo_insert('chat_coupon',$data);

	header('content-type:application/json;charset=utf8');
	$fmdata = array(
		'success'=>1,
		'msg'=>'添加成功'
	);
	echo json_encode($fmdata);exit;

}
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

$coupon_list = pdo_fetchall("select * from ".tablename("chat_coupon")." a where uniacid=:uniacid and is_del=0 order by coupon_money asc,coupon_number desc limit ".($pindex-1)*$psize.','.$psize,array(":uniacid"=>$uniacid));
if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['count']=$count;
	$result['list']=$coupon_list;
	echo json_encode($result);
	exit;
}
function code($uid){
	$time = time();
	$time_str = substr($time,strlen($time)-4,4);
	$uid = substr(uniqid(md5($uid)),0,3);
	$str = 'QWERTYUIOPLKJHGFDSAZXCVBNMmnbvcxzasdfghjklpoiuyrtewq';
	$strlen = strlen($str);
	$a = '';
	for($i=0;$i<=2;$i++){
		$rand = substr(mt_rand(0,$strlen),0,1);
		$a .= substr($str,$rand,1);
	}
	$str_str = $time_str.$uid.$a;
	return $str_str;
}
//var_dump($coupon_list);
include $this->template('topic_coupon');