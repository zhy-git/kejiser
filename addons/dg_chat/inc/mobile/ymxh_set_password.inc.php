<?php
//设置支付密码
global $_GPC,$_W;

$uniacid=$_W['uniacid'];
$user_info=cache_load('user_info');

if(!$user_info){
    $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}

$uid=$user_info['id'];

$phone=$_GPC['phone'];
$pay_password=$_GPC['pay_password'];
$pay_repassword=$_GPC['pay_repassword'];
$code = $_GPC['code'];

if($phone !== $user_info['mobile'])
{
    $pay_data=['code'=>0,'msg'=>'输入的手机号码与绑定手机号不一致','data'=>''];
    echo json_encode($pay_data);exit;
}
if(strlen($pay_password)>6 || strlen($pay_password)<6){
    $pay_data=['code'=>104,'msg'=>'请输入六位数的密码'];
    echo json_encode($pay_data);exit;
}
if($pay_password!=$pay_repassword){
    $pay_data=['code'=>103,'msg'=>'两次密码不一致'];
    echo json_encode($pay_data);exit;
}

if(!empty($code))
{
    $sms = pdo_fetch('SELECT * FROM '.tablename('chat_sms').' WHERE phone=:phone ORDER BY create_time DESC LIMIT 1',array(':phone'=>$phone));
    if(!empty($sms))
    {
        if($sms['code'] == $code)
        {
            if((time()-$sms['create_time'])>3000)
            {
                $result = ['code'=>0,'msg'=>'验证码已过期','data'=>''];
                echo json_encode($result,256);exit;
            }

            //验证通过
            $userData=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id and uniacid=:uniacid",array(":id"=>$uid,':uniacid'=>$uniacid));
            $pay_password = md5($pay_password);

            if($userData['pay_password'] == $pay_password){
                $pay_data=[ 'code'=>100,'msg'=>'支付密码设置成功'];
                echo json_encode($pay_data,256);exit;
            }
            else
            {
                $edit = array(
                    'pay_password' => $pay_password,
                );
                $result = pdo_update('chat_users', $edit, array('id' => $uid));

                if (!empty($result)) {
                    $pay_data=[ 'code'=>100,'msg'=>'支付密码设置成功'];
                    echo json_encode($pay_data,256);exit;
                }else{
                    $pay_data=['code'=>101,'msg'=>'支付密码设置失败'];
                    echo json_encode($pay_data,256);exit;
                }
            }

        }
        else
        {
            $result = ['code'=>0,'msg'=>'验证码不正确','data'=>$sms];
            echo json_encode($result,256);exit;
        }
    }
    else
    {
        $result = ['code'=>0,'msg'=>'验证码不存在','data'=>''];
        echo json_encode($result,256);exit;
    }
}
else
{
    $result = ['code'=>0,'msg'=>'请输入验证码','data'=>''];
    echo json_encode($result,256);exit;
}

