<?php
/*
mohufeng
vip套餐列表
参数：mediaid，avatar，nickname，sex，age
*/
global $_GPC,$_W;
$uniacid=$_W['uniacid'];
if($_GPC['op']=='list')
{
    $data=pdo_fetchall("SELECT id,title,day,money FROM ".tablename("chat_vipsetting"),array());
    if(!empty($data)){
        $result=['code'=>1,'msg'=>'加载成功','data'=>$data];
        echo json_encode($result);exit;
    }else{
        $result=['code'=>0,'msg'=>'加载失败','data'=>''];
        echo json_encode($result);exit;
    }
}
elseif($_GPC['op']=='test'){
    $search = $_GPC['search'];

    $course = pdo_fetchall("SELECT id,topic_name,topic_icon,topic_desc FROM ".tablename("chat_topic")." WHERE topic_name LIKE '%".$search."%'",array());
    $teacher = pdo_fetchall("SELECT t.id,t.topic_name,t.topic_icon,t.topic_desc FROM ".tablename("chat_topic")."t WHERE topic_name LIKE '%".$search."%'",array());
    echo json_encode($course);
}

elseif($_GPC['op']=='search'){
    $content = $_GPC['con'];
    $data = ['teacher'=>[],'course'=>[]];
    $course = pdo_fetchall("SELECT id,topic_name,topic_icon,topic_desc FROM ".tablename("chat_topic")." WHERE topic_name LIKE '%".$content."%'",array());
    if(!empty($course))
    {
        $data['course'] = array_merge($data['course'],$course);
    }

    $teacher = pdo_fetchall("SELECT id,room_id,room_name,room_desc,room_icon FROM ".tablename("chat_room")." WHERE room_name LIKE '%".$content."%'",array());
    if(!empty($teacher))
    {
        foreach ($teacher as $key => $value){
            if($value['room_id'] == 0)
            {
                $aa = pdo_fetchall("SELECT id,topic_name,topic_icon,topic_desc FROM ".tablename("chat_topic")." WHERE series_id=:sid",array(':sid'=>$value['id']));
                if(!empty($aa))
                {
                    $data['course'] = array_merge($data['course'],$aa);
                }
                else
                {
                    $data['course'][] = $value;
                }
            }
            else
            {
                unset($value['id']);
                $data['teacher'][] = $value;
            }
        }
    }
    $result = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($result);
}

elseif($_GPC['op']=='login'){
    $phone = $_GPC['phone'];
    $pwd = !empty($_GPC['password'])?md5($_GPC['password']):null;

//    if($phone == null || $pwd == null);
//    {
//        $result = ['code'=>0,'msg'=>'请输入账号或密码','data'=>[$phone,$pwd]];
//        echo json_encode($result);exit;
//    }
    $user_info = pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE mobile=:mobile",array(':mobile'=>$phone));
    if(!empty($user_info))
    {
        if($pwd == $user_info['password'])
        {
            $_W['$user_info'] = $user_info;
            global $_W;
            $result = ['code'=>1,'msg'=>'登录成功','data'=>$user_info];
            echo json_encode($result);exit;
        }
        else
        {
            $result = ['code'=>2,'msg'=>'密码错误','data'=>''];
            echo json_encode($result);exit;
        }
    }
    else
    {
        $result = ['code'=>3,'msg'=>'账号不存在','data'=>''];
        echo json_encode($result);exit;
    }
}

elseif($_GPC['op']=='register')
{
    $code = $_GPC['code'];
    $phone = $_GPC['phone'];
    $pwd = !empty($_GPC['password'])?md5($_GPC['password']):null;
    if($phone==null || $pwd==null || $code==null)
    {
        $result = ['code'=>0,'msg'=>'手机号、密码、验证码不能为空','data'=>''];
        echo json_encode($result);exit;
    }
    if(!empty($code))
    {
        $sms = pdo_fetch('SELECT * FROM '.tablename('chat_sms').' WHERE phone=:phone ORDER BY create_time DESC LIMIT 1',array(':phone'=>$phone));
        if(!empty($sms))
        {
            if($sms['code'] == $code)
            {
                if((time()-$sms['create_time'])>300)
                {
                    $result = ['code'=>0,'msg'=>'验证码已过期','data'=>''];
                    echo json_encode($result,256);exit;
                }
                //验证通过
                $user = pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE mobile=:mobile",array(':mobile'=>$phone));
                if(empty($user))
                {
                    $add = [
                        'uniacid'=>1,
                        'nickname'=>'新用户'.rand(100000,999999),
                        'mobile'=>$phone,
                        'password'=>$pwd,
                        'create_time'=>time()
                    ];
                    $res = pdo_insert('chat_users', $add);
                    if($res)
                    {
                        $uid = pdo_insertid();
                        $result = ['code'=>1,'msg'=>'注册成功','data'=>''];
                        echo json_encode($result,256);exit;
                    }
                }
                else
                {
                    $result = ['code'=>0,'msg'=>'手机号已被注册','data'=>''];
                    echo json_encode($result,256);exit;
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


elseif($_GPC['op']=='teach_details')
{
   $rid = $_GPC['room_id'];
   if(empty($rid))
   {
       $result = ['code'=>0,'msg'=>'请输入房间id','data'=>''];
       echo json_encode($result);exit;
   }
   $info = pdo_fetch("SELECT room_id,room_name,room_desc,desc_more,room_icon,create_avatar FROM ".tablename("chat_room")." WHERE room_id=:rid",array(':rid'=>$rid));
   if(empty($info))
   {
       $result = ['code'=>0,'msg'=>'老师不存在','data'=>''];
       echo json_encode($result);exit;
   }
   $data['info'] = $info;
   //系列课
   $course = pdo_fetchall("SELECT id,room_name,room_desc,room_icon,series_id FROM ".tablename("chat_room")." WHERE series_id=:sid",array(':sid'=>$rid));
   if(!empty($course))
   {
       foreach ($course as $key => $value){
           $course[$key]['jishu'] = pdo_fetch("SELECT count(*) aa FROM ".tablename("chat_topic")." WHERE series_id=:sid",array(':sid'=>$value['id']))['aa'];
           $course[$key]['look_num'] = pdo_query("SELECT sum('look_numbers') bb FROM ".tablename("chat_topic")." WHERE series_id=:sid",array(':sid'=>$value['id']));
       }
   }
   //单独视频课程
   $course2 = pdo_fetchall("SELECT id,topic_name,topic_desc,topic_icon,series_id,look_numbers FROM ".tablename("chat_topic")." WHERE room_id=:rid AND topic_style=3 AND series_id IS null",array(':rid'=>$rid));
   //他的视频课程
   $data['vedio_course'] = array_merge($course,$course2);
    //他的直播课程
    $data['playing_course'] = pdo_fetchall("SELECT id,topic_name,topic_desc,topic_icon,series_id,look_numbers FROM ".tablename("chat_topic")." WHERE room_id=:rid AND topic_style IN (1,2) order by look_numbers desc limit 2",array(':rid'=>$rid));
   //推荐课程
   $data['recommend'] = pdo_fetchall("SELECT id,topic_name,topic_desc,topic_icon,series_id,look_numbers FROM ".tablename("chat_topic")." ORDER BY look_numbers DESC LIMIT 4",array());
   $result = ['code'=>1,'msg'=>'查询成功','data'=>$data];
   echo json_encode($result);exit;
}
//发送短信呢验证码
elseif ($_GPC['op']=='sms')
{
    $phone = $_GPC['phone'];
    $this->send($phone);
}

