<?php
global $_W,$_GPC;
$u_code=$_GPC['u_code'];
$uniacid=$_W['uniacid'];
$user_info=$this->getUserInfo();

$qr=pdo_get('chat_pc_qrcode',array('uniacid'=>$uniacid,'u_code'=>$u_code));
pdo_update('chat_pc_qrcode',array('is_scan'=>2,'userinfo'=>json_encode($user_info)),array('id'=>$qr['id']));
$cfg = $this->module['config'];
if($_GPC['type']=='update'){
	if($_GPC['status']==1){
		pdo_update('chat_pc_qrcode',array('is_scan'=>3,'userinfo'=>json_encode($user_info)),array('id'=>$qr['id']));
	}else{
		pdo_delete('chat_pc_qrcode',array('id'=>$qr['id']));
	}
	$fmdata = array(
		'success'=>1,
	);


	echo json_encode($fmdata);exit;
}
include $this->template('pc_binding');