<?php
global $_W,$_GPC;
$uniacid=$_W['uniacid'];
$user_info=$this->getUserInfo();
session_start();

$code=session_id();

if($_GPC['type']=='qrcode'){
	

	$url=$_W['siteroot']."app/index.php/?i".substr($this->createMobileUrl('pc_binding',array('u_code'=>$code)),2);
	//var_dump($url);die();
	$qr=pdo_get('chat_pc_qrcode',array('uniacid'=>$uniacid,'u_code'=>$code));
	if(empty($qr)){
		$data=array(
			'uniacid'=>$uniacid,
			'u_code'=>$code,
			'create_time'=>time(),
			'is_scan'=>1
		);
		pdo_insert('chat_pc_qrcode',$data);
	}
	ob_start();
    QRcode::png($url,false,4, 8);
    $imageString = base64_encode(ob_get_contents());
    ob_clean();
    ob_end_clean();
    $imageString="data:image/png;base64,".$imageString;
	header('content-type:application/json;charset=utf8');

	$fmdata = array(
		'success'=>1,
		'code_url'=>$imageString
	);
	echo json_encode($fmdata);exit;
}
if($_GPC['type']=='login_status'){

	$qr=pdo_get('chat_pc_qrcode',array('uniacid'=>$uniacid,'u_code'=>$code));
	
	if($qr['is_scan']==1){
		$fmdata = array(
			'success'=>1,
		);
	}	
	if($qr['is_scan']==2){
		$fmdata = array(
			'success'=>2,
		);
	}
	if($qr['is_scan']==3){
		setcookie('user_pc',$qr['userinfo']);
		pdo_delete('chat_pc_qrcode',array('id'=>$qr['id']));
		$fmdata = array(
			'success'=>3,
		);
	}
	if(empty($qr)){
		$fmdata = array(
			'success'=>4,
		);
	}
	if($_GPC['l_num']>60){
		pdo_delete('chat_pc_qrcode',array('id'=>$qr['id']));
		$fmdata = array(
			'success'=>5
		);
	}
	header('content-type:application/json;charset=utf8');
	echo json_encode($fmdata);exit;
}
include $this->template('pc_login');

