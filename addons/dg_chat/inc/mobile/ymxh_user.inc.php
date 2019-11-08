<?php
/*
陆新泽
获取个人信息，修改个人信息
参数：mediaid，avatar，nickname，sex，age
*/
global $_GPC,$_W;
$uniacid=$_W['uniacid'];
$user_info=cache_load('user_info');
if(!$user_info){
  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}
$uid=$user_info['id'];

if($_GPC['op']=='getuserinfo')
    {
        $userData=$user_info;
        if($userData){
            $userData['scribe'] = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('chat_subscribe')." WHERE uid=:uid",array(':uid'=>$uid));
            $room = pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE create_uid=:uid AND room_id>0",array(":uid"=>$uid));
            if(!empty($room))
            {
                $userData['fans'] = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('chat_subscribe')." WHERE room_id=:rid",array(':rid'=>$room['room_id']));
            }
            else
            {
                $userData['fans'] = 0;
            }
        	$data=['code'=>100,'data'=>$userData,'msg'=>'加载成功'];
        	echo json_encode($data);exit;
        }else{
        	$data=['code'=>101,'data'=>'','msg'=>'加载失败'];
        	echo json_encode($data);exit;
        }
}
elseif($_GPC['op']=='edituserinfo'){
       $userData=pdo_fetch("SELECT id,nickname,avatar,mobile,sex,level FROM ".tablename("chat_users")." WHERE id=:id and uniacid=:uniacid",array(":id"=>$uid,':uniacid'=>$uniacid));
       //上传图片
        if(!empty($_GPC['mediaid'])){
            header('content-type:application/json;charset=utf8');
            $account = WeAccount::create($_W['account']);
            $medias['media_id']=$_GPC['mediaid'];
            $medias['type']="image";
            $filename=$account->downloadMedia($medias);

            $fmdata = array(
                    "success" => 1,
                    "imgurl" =>tomedia($filename),
            );

            echo json_encode($fmdata);
            exit();
        }
       $avatar=$_GPC['avatar']?$_GPC['avatar']:$userData['avatar'];
       $nickname=$_GPC['nickname']?$_GPC['nickname']:$userData['nickname'];
       $sex=$_GPC['sex']?$_GPC['sex']:$userData['sex'];
       $age=$_GPC['age']?$_GPC['age']:$userData['age'];
       $user_data=array(
       	'avatar'=>$avatar,
       	'nickname'=>$nickname,
       	'sex'=>$sex,
       	'age'=>$age
       );
       $update=pdo_update('chat_users',$user_data,array('id'=>$uid));
       if($update){
       	 $data=['code'=>100,'data'=>'','msg'=>'修改成功'];
       	 echo json_encode($data);exit;
       }else{
       	 $data=['code'=>101,'data'=>'','msg'=>'修改失败'];
       	 echo json_encode($data);exit;
       }
}
elseif($_GPC['op']=='logout'){
    cache_clean();
    $result = ['code'=>1,'msg'=>'退出成功','data'=>''];
    echo json_encode($result);exit;
}

elseif($_GPC['op']=='has_pay_pwd'){
    $data = pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id and uniacid=:uniacid",array(":id"=>$uid,':uniacid'=>$uniacid));
    if(empty($data['pay_password']))
    {
        $result = ['code'=>0,'msg'=>'未设置','data'=>''];
    }
    else
    {
        $result = ['code'=>1,'msg'=>'已设置','data'=>''];
    }
    echo json_encode($result);exit;
}

elseif($_GPC['op']=='set_pay_pwd'){
    $pwd = $_GPC['pwd'];
    $repwd = $_GPC['repwd'];
    if(empty($pwd) || empty($repwd))
    {
        $result = ['code'=>0,'msg'=>'支付密码或重复支付密码不能为空','data'=>''];
        echo json_encode($result);exit;
    }
    if($pwd==$repwd)
    {
        if(strlen($pwd)==6)
        {
            $user = pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id and uniacid=:uniacid",array(":id"=>$uid,':uniacid'=>$uniacid));
            if(!empty($user['pay_password']))
            {
                $result = ['code'=>0,'msg'=>'支付密码设置失败,用户已设置过支付密码','data'=>''];
                echo json_encode($result,256);exit;
            }
            $update = pdo_update('chat_users',['pay_password'=>md5($pwd)],['id'=>$uid]);
            if($update)
            {
                $result = ['code'=>1,'msg'=>'支付密码设置成功','data'=>''];
                echo json_encode($result);exit;
            }
            else
            {
                $result = ['code'=>0,'msg'=>'支付密码设置失败','data'=>''];
                echo json_encode($result);exit;
            }
        }
        else
        {
            $result = ['code'=>0,'msg'=>'请输入6位支付密码','data'=>''];
            echo json_encode($result);exit;
        }

    }
    else
    {
        $result = ['code'=>0,'msg'=>'密码不一致','data'=>''];
        echo json_encode($result);exit;
    }

}

elseif($_GPC['op']=='bing_phone')
{
    $code = $_GPC['code'];
    $phone = $_GPC['phone'];
    if($phone==null || $code==null)
    {
        $result = ['code'=>0,'msg'=>'手机号、验证码不能为空','data'=>''];
        echo json_encode($result);exit;
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
                $user = pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE mobile=:mobile",array(':mobile'=>$phone));
                if(empty($user))
                {
                    $edit = ['mobile'=>$phone];
                    $res = pdo_update('chat_users', $edit, array('id' => $uid));
                    if($res)
                    {
                        $result = ['code'=>1,'msg'=>'绑定成功','data'=>''];
                        echo json_encode($result,256);exit;
                    }
                    else
                    {
                        $result = ['code'=>0,'msg'=>'绑定失败，请重新尝试','data'=>''];
                        echo json_encode($result,256);exit;
                    }
                }
                else
                {
                    if($user['id'] == $uid)
                    {
                        $result = ['code'=>1,'msg'=>'绑定成功','data'=>''];
                        echo json_encode($result,256);exit;
                    }
                    else
                    {
                        $result = ['code'=>0,'msg'=>'绑定失败，手机号已被其他账号绑定','data'=>''];
                        echo json_encode($result,256);exit;
                    }
                }
            }
            else
            {
                $result = ['code'=>0,'msg'=>'验证码不正确','data'=>''];
                echo json_encode($result,256);exit;
            }
        }
        else
        {
            $result = ['code'=>0,'msg'=>'验证码不存在','data'=>''];
            echo json_encode($result,256);exit;
        }
    }
}




