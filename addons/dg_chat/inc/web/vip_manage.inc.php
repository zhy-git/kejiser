<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];
$op = empty($_GPC['op'])?'display':$_GPC['op'];

$tempcondition=" WHERE uniacid=:uniacid and info_status=1 and end_time>:time";
$parms = array(":uniacid"=>$uniacid,":time"=>time());
$sql_first = "select id,avatar,nickname,info_status,settime,end_time from ".tablename('chat_users');
if($op == 'post'){
	$user_info = pdo_fetch($sql_first.' where uniacid=:uniacid and id=:id',array(':uniacid'=>$uniacid,":id"=>$_GPC['id']));
}
if(!empty($_GPC['user_key'])){
	$user_key = $_GPC['user_key'];
	$sql = $sql_first." WHERE uniacid=:uniacid and info_status=0 and nickname like '%{$user_key}%'";
	$list = pdo_fetchall($sql,array(':uniacid'=>$uniacid));
	header('content-type:application/json;charset=utf8');	
	$fmdata = array(
		"success" => 1,
		"data" =>$list
	);
	echo json_encode($fmdata);exit;
}
if(!empty($_GPC['del'])){
	$user_uid = $_GPC['duid'];
	$data = array(
		'info_status'=>0,
		'settime'=>'',
		'end_time'=>''
	);
	pdo_update('chat_users',$data,array('id'=>$user_uid));
	header('content-type:application/json;charset=utf8');	
	$fmdata = array(
		"success" => 1,
		"data" =>"成功"
	);
	echo json_encode($fmdata);exit;
}
if(!empty($_GPC['uid'])){
	$user_uid = $_GPC['uid'];
	$data = array(
		'info_status'=>1,
		'settime'=>time(),
		'end_time'=>time()+30*3600*24
	);
	pdo_update('chat_users',$data,array('id'=>$user_uid));
	header('content-type:application/json;charset=utf8');	
	$fmdata = array(
		"success" => 1,
		"data" =>"成功"
	);
	echo json_encode($fmdata);exit;
}
$keyword = $_GPC['keyword'];
if (!empty($keyword)) {
	$tempcondition = $tempcondition . " AND nickname LIKE '%{$keyword}%'";
}
$pindex = max(1, intval($_GPC['page']));
$psize = 10;
$user_list = pdo_fetchall($sql_first.$tempcondition." order by end_time asc limit ".($pindex-1)*$psize.",".$psize,$parms);

$total = pdo_fetchcolumn("SELECT count(0) from ".tablename('chat_users').$tempcondition,$parms);

$pager = pagination($total, $pindex, $psize);
if(checksubmit('submit')){
	$data = array(
		'info_status'=>1,
		'end_time'=>strtotime($_GPC['end_time'])
	);
	pdo_update('chat_users',$data,array('id'=>$_GPC['id']));
	message("操作成功",$this->createWebUrl('vip_manage'),'success');
}
include $this->template('vip_manage');
?>