<?php
//修改支付密码
global $_GPC,$_W;

$user_info=cache_load('user_info');
if(!$user_info){
  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}
$uid=$user_info['id'];

$pay_password=$_GPC['pay_password'];
$pay_newpassword=$_GPC['pay_newpassword'];
$pay_renewpassword=$_GPC['pay_renewpassword'];

if($pay_newpassword !== $pay_renewpassword){
    $pay_data = ['code'=>103,'msg'=>'两次密码输入不一致'];
    echo json_encode($pay_data);exit;
}

if(strlen($pay_newpassword)>6 || strlen($pay_newpassword)<6){
    $pay_data=['code'=>104,'msg'=>'请输入六位数的密码'];
    echo json_encode($pay_data);exit;
}
$pay_newpassword=md5($pay_newpassword);
$pay_password=md5($pay_password);
$userData=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id ",array(":id"=>$uid));

if($userData['pay_password']!==$pay_password){
    $pay_data=[ 'code'=>102,'msg'=>'旧密码输入不对'];
    echo json_encode($pay_data);exit;
}
$user_data = array(
    'pay_password' => $pay_newpassword,
);
$result = pdo_update('chat_users', $user_data, array('id' => $uid));
if (!empty($result)) {
    $pay_data=[ 'code'=>100,'msg'=>'修改支付密码成功'];
    echo json_encode($pay_data);exit;
} else {
    $pay_data = ['code' =>101, 'msg' => '修改支付密码失败'];
    echo json_encode($pay_data);
    exit;
}