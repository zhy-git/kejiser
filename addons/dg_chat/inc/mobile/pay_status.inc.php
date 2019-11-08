<?php
global $_W,$_GPC;
$id=$_GPC['id'];
$type=$_GPC['type'];
$pay=pdo_get('chat_payment',array('id'=>$id));
if($pay['pay_status']==1){
	$data['success']=1;
}else{
	$data['success']=-1;
}
 header('content-type:application/json;charset=utf8');
 echo json_encode($data);
 exit;