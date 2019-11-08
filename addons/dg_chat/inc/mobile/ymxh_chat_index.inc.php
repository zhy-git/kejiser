<?php
/*
陆新泽
删除系列课，我的直播课，我的系列课，介绍,移动到系列课
参数：room_id 直播房间号，op 方法类型，topic_id 话题id，series_id 系列课id，
*/
global $_GPC,$_W;

$uniacid = $_W['uniacid'];

$op=$_GPC['op'];
//是否登录
$user_info=cache_load('user_info');
if(!$user_info){
    $result=['code'=>0,'data'=>'','msg'=>'请先登录'];
    echo json_encode($result);exit;
}
$uid=$user_info['id'];
//是否有直播间
$room = pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE create_uid=:uid AND room_id>0 AND uniacid=:uniacid" ,array(":uid"=>$uid,":uniacid"=>$uniacid));
if(empty($room))
{
    $result=['code'=>0,'data'=>'','msg'=>'您尚未开通直播间哦'];
    echo json_encode($result);exit;
}
$room_id=$room['room_id'];

//删除直播课程
if($op=='del_class'){
    $topic_id =$_GPC['topic_id'];
    //pdo_update("chat_room",array("is_del"=>1),array("id"=>$series_id));
    $update=pdo_update('chat_topic',array("is_del"=>1),array("id"=>$topic_id));
    header('content-type:application/json;charset=utf8');
    $fmdata =array(
        'code'=>100,
        'msg'=>'删除成功'
    );
    if($update){
        echo json_encode($fmdata);exit;
    }else{
        $fmdata =array(
            'code'=>101,
            'msg'=>'删除失败'
        );
        echo json_encode($fmdata);exit;
    }
}
//删除系列课
if($op=='del_class_list'){
    $series_id =$_GPC['series_id'];
    $update1=pdo_update("chat_room",array("is_del"=>1),array("id"=>$series_id));
    $update2=pdo_update('chat_topic',array("is_del"=>1),array("series_id"=>$series_id));
    header('content-type:application/json;charset=utf8');
    $fmdata =array(
        'code'=>100,
        'msg'=>'删除成功'
    );
    if($update1 && $update2){

        echo json_encode($fmdata);exit;

    }else{
        $fmdata =array(
            'code'=>101,
            'msg'=>'删除失败'
        );
        echo json_encode($fmdata);exit;
    }
}
//我管理的直播间
if($op=='my_room'){
    $data=[
        'room_id'=>$room['room_id'],
        'room_name'=>$room['room_name'],
        'room_desc'=>$room['room_desc'],
        'room_icon'=>$room['room_icon'],
        'create_avater'=>$room['create_avatar'],
        'create_uid'=>$room['create_uid'],
        'create_nickname'=>$room['create_nickname'],
        'bg_img'=>$room['bg_img'],
        'desc_more'=>$room['desc_more']
    ];
    $fmdata =array(
        'code'=>100,
        'data'=>$data,
        'msg'=>'加载成功'
    );
    echo json_encode($fmdata);exit;
}
//我的直播课
if($op=='my_class'){
    $data=pdo_fetchall("SELECT id,room_id,topic_name,topic_desc,topic_icon,topic_imgs,room_paymoney,look_numbers,begin_time,end_time,is_vip FROM ".tablename("chat_topic")." WHERE room_id=:room_id AND uniacid=:uniacid and series_id is null AND topic_status!=-1 and is_del is null order by begin_time desc" ,array(":room_id"=>$room_id,":uniacid"=>$uniacid));
    header('content-type:application/json;charset=utf8');
    $fmdata =array(
        'code'=>100,
        'data'=>$data,
        'msg'=>'加载成功'
    );
    echo json_encode($fmdata);exit;
}
//我的系列课
if($op=='my_class_list'){

//	$data=pdo_fetchall("SELECT id,series_id,room_icon,room_name,room_desc,count_subject,series_price FROM ".tablename("chat_room")." WHERE series_id=:series_id AND uniacid=:uniacid AND is_del is null " ,array(":series_id"=>$room_id,":uniacid"=>$uniacid));

    $data=pdo_fetchall("SELECT id,room_id,series_id,room_name,room_desc,room_icon,bg_img,count_subject,series_price FROM ".tablename("chat_room")." WHERE series_id=:series_id AND uniacid=:uniacid AND is_del is null " ,array(":series_id"=>$room_id,":uniacid"=>$uniacid));

    header('content-type:application/json;charset=utf8');
    $fmdata =array(
        'code'=>100,
        'msg'=>'加载成功',
        'data'=>$data
    );
    echo json_encode($fmdata);exit;
}
//介绍
if($op=='my_class_desc'){
    $data=pdo_fetchall("SELECT id,room_id,room_name,room_desc,chat_imgs,room_icon,bg_img,create_time FROM ".tablename("chat_room")." WHERE room_id=:room_id AND uniacid=:uniacid " ,array(":room_id"=>$room_id,":uniacid"=>$uniacid));
    header('content-type:application/json;charset=utf8');
    $fmdata =array(
        'code'=>100,
        'data'=>$data,
        'msg'=>'加载成功'
    );
    echo json_encode($fmdata);exit;
}
//移动到系列课
if($op=='my_class_move'){
    $topic_id=$_GPC['topic_id'];
    $room_id=$_GPC['room_id'];
    $data=pdo_fetch("SELECT id,room_id,room_name,room_desc,chat_imgs,room_icon,bg_img,create_time FROM ".tablename("chat_room")." WHERE room_id=:room_id AND uniacid=:uniacid " ,array(":room_id"=>$room_id,":uniacid"=>$uniacid));
    $user_data=array(
        'series_id'=>$data['id']
    );
    $update=pdo_update('chat_topic',$user_data,array('id'=>$topic_id));
    if($update){
        $data=['code'=>100,'msg'=>'移动系列课成功'];
        echo json_encode($data);

    }else{
        $data=['code'=>101,'msg'=>'移动系列课失败'];
        echo json_encode($data);
    }
}
//创建直播课
if($op=='my_chat_create'){

    $uniacid = $_W['uniacid'];
    $room_id=$_GPC['room_id'];
    $series_id = $_GPC['series_id'];
//判断是否登录
    $user_info=cache_load('user_info');
    if(!$user_info){
        $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
        echo json_encode($data);exit;
    }

//判断参数是否为空
    if(empty($series_id) && empty($room_id)){

        $data=['code'=>2,'data'=>'','msg'=>'参数不能为空'];
        echo json_encode($data);exit;
    }
//判断是否创建了直播间，没有直播间要先创建一个
    $chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
    if(empty($chat_room)){
        $data=['code'=>-1,'data'=>'','msg'=>'你还没有直播间,去创建一个吧'];
        echo json_encode($data);exit;
    }

        $begin_time=$_GPC['begin_time'];//开始时间
        $begin_time=strtotime($begin_time);
        $topic_type=$_GPC['topic_type'];//直播类型:password=加密直播,ticket=付费直播
        $topic_imgs=$this->doMobilePut_qiniu();//概要图片
        if(!empty($topic_imgs)){
            $topic_imgs=json_encode($_GPC['topic_imgs']);
        }
        //判断直播类型是否存在
        $type_array=array("public","password","ticket");
        if(!in_array($topic_type, $type_array)){
           $data=['code'=>3,'data'=>'','msg'=>'直播类型不正确'];
           echo json_encode($data);exit;
        }

        $max_id=0;
        $max_topic_id=pdo_fetchcolumn("SELECT MAX(id) FROM ".tablename("chat_topic"));
        if(!empty($max_topic_id)){
            $max_id=$max_topic_id+1;
        }

       //判断直播间状态是否审核通过
        if($chat_room['room_status']!=1){
            $fmdata = array(
                "success" => -1,
                "data" =>"您的直播间还未审核通过或者被禁用了",
            );

            echo json_encode($fmdata);
            exit;
        }

        $im_group_id=$this->create_chatroom("chat_".$max_id);
        if($im_group_id==-1){
            $fmdata = array(
                "success" => -1,
                "data" =>"创建话题失败",
            );

            echo json_encode($fmdata);
            exit;
        }

        $reward_percent=$chat_room['reward_percent'];
        $data=array(
            "uniacid"=>$uniacid,
            "room_id"=>$room_id,
            "create_openid"=>$user_info['openid'],
            "topic_name"=>str_replace(PHP_EOL, '',$_GPC['topic_name']),
            "topic_desc"=>str_replace(PHP_EOL, '',$_GPC['topic_desc']),
            "topic_type"=>$_GPC['topic_type'],
            "topic_icon"=>$this->doMobilePut_qiniu(),//图标
            "guest_name"=>$_GPC['guest_name'],
            "guest_info"=>$_GPC['guest_info'],
            "tags"=>$_GPC['tags'],
            "topic_imgs"=>$topic_imgs,
            "is_opendm"=>$_GPC['is_opendm'],
            "begin_time"=>$begin_time,
            "im_group_id"=>$im_group_id,
            "end_time"=>0,
            "create_time"=>time(),
            "topic_status"=>1,
            "reward_percent"=>0,
            "topic_style"=>$_GPC['topic_style']//直播间:1=语音直播2=视频直播,3=录播视频,,6=第三方视频
        );


        if($_GPC['topic_style']==2){
            /*$data['vedio_id']=function();//接口方法*/
            $im_config=pdo_fetch("select * from ".tablename("chat_qc_setting")." where uniacid=:uniacid",array(":uniacid"=>$uniacid));
            $streamid=time();
            $txttime=time()+3600*24*15;
            $expirtime=date('Y-m-d H:i:s',$txttime);
            $pushurl=$this->getPushUrl($im_config["bizid"],$streamid,$im_config["key"],$expirtime);
            $playurls=$this->getPlayUrl($im_config["bizid"],$streamid);
            $playurl=$playurls[2];
            $playurl2=$playurls[1];
            $insert=array(
                "uniacid"=>$uniacid,
                "uid"=>$user_info['id'],
                "imid"=>$im_config["id"],
                "streamid"=>$streamid,
                "secret"=>"",
                "pushurl"=>$pushurl,
                "playurl"=>$playurl,
                "playurl2"=>$playurl2,
                "create_time"=>time(),
                "expirtime"=>$txttime
            );
            pdo_insert("chat_qc_data",$insert);
            $data['vedio_id']=pdo_insertid();
        }else if($_GPC['topic_style']==3){
            $data['topic_status']=2;
            $data['end_time']=time();
            $data['file_id']=$_GPC['file_id'];
        }else if($_GPC['topic_style'] == 4){
            $data['videoid']=$_GPC['file_id'];
        }if($_GPC['topic_style'] == 5){
            $data['topic_status']=1;
            $data['activityid']=$_GPC['activityid'];

        }
        if($chat_room['reward_status']==1){
            $data['reward_percent']=$reward_percent;
        }
        if(!empty($series_id)){
            $data['series_id'] = $series_id;
            $redirect_url=$this->createMobileUrl('c_index',array('room_id'=>$room_id));
            $row = pdo_insert('chat_topic',$data);
            if($row == 1){
                $fmdata = array(
                    "success" => 1,
                    "data" =>$redirect_url,
                );
                echo json_encode($fmdata);
                exit;
            }
        }
        if($topic_type=="password"){
            $data['room_password']=$_GPC['room_password'];
            $data['qrcode_desc']=$_GPC['qrcode_desc'];
            $data['qrcode_url']=$_GPC['qrcode_url'];
        }

        if($topic_type=="ticket"){
            $data['room_paymoney']=$_GPC['room_paymoney'];
        }

        pdo_insert("chat_topic",$data);
        $topic_id=pdo_insertid();

        $redirect_url=$this->createMobileUrl('chat',array('topic_id'=>$topic_id));
        if($_GPC['topic_style']==2){
            $fmdata = array(
                "success" => 5,
                "data" =>$pushurl,
                "turl"=>$redirect_url,
            );
            echo json_encode($fmdata);
            exit;
        }
        $fmdata = array(
            "success" => 1,
            "data" =>$redirect_url,
        );

        echo json_encode($fmdata);
        exit;
    
}


//创建系列课
if($op=='my_series_create'){
 
 //判断用户是否登录
    $user_info=cache_load('user_info');
    if(!$user_info){
        $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
        echo json_encode($data);exit;
    }

//判断直播间是否已通过审核
        $my_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id AND uniacid=:uniacid ",array(":room_id"=>$room_id,":uniacid"=>$uniacid));
        if($my_room['room_status']!=1){
            $fmdata = array(
                "success" => -1,
                "data" =>"您的直播间还未审核通过或者被禁用了",
            );

            echo json_encode($fmdata);
            exit;
        }
        //整理数据
        $data=array(
            "room_id"=>$_GPC['room_id'],
            "uniacid"=>$uniacid,
            "room_status"=>1,//系列课自动过
            'room_name'=>$my_room['room_name'],
            'room_desc'=>$my_room['room_desc'],
            "tags"=>$_GPC['tags'],
            "create_uid"=>$user_info['id'],
            "create_openid"=>$user_info['openid'],
            "create_nickname"=>$user_info['nickname'],
            "create_avatar"=>$user_info['avatar'],
            "create_time"=>time(),
            'room_icon'=>$this->doMobilePut_qiniu(),
            'bg_img'=>$this->doMobilePut_qiniu(),
            'chat_imgs'=>$this->doMobilePut_qiniu(),
            'count_subject'=>$_GPC['count_subject'],
            'series_price'=>$_GPC['series_price'],
            'series_id'=>$_GPC['room_id'],
            //"reward_percent"=>$my_room['reward_percent']
        );

        $row_count=pdo_insert("chat_room",$data);//插入数据
      
        if($row_count==1){
            $fmdata = array(-
                "success" => 1,
                "room_id" =>$_GPC['room_id'],
                'msg'=>'创建系列课成功'
            );
        }else{
            $fmdata = array(
                "success" => -2,
                "room_id" =>$room_id,
                'msg'=>'创建系列课失败'
            );
        }
        echo json_encode($fmdata);
        exit();
    
}
//修改直播间
if($op=='edit_room'){
 
 //判断用户是否登录
    $user_info=cache_load('user_info');
    if(!$user_info){
        $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
        echo json_encode($data);exit;
    }

//判断直播间是否已通过审核
        $my_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id AND uniacid=:uniacid ",array(":room_id"=>$room_id,":uniacid"=>$uniacid));
    
        //整理数据
        $data=array(
            "room_id"=>$room_id,
            "uniacid"=>$uniacid,
            'room_name'=>$my_room['room_name']?$GPC['room_name']:$my_room['room_name'],
            'room_desc'=>$my_room['room_desc']?$GPC['room_desc']:$my_room['room_desc'],   
            "create_nickname"=>$user_info['nickname'],
            "create_avatar"=>$user_info['avatar'],
            'room_icon'=>$this->doMobilePut_qiniu(),
            'bg_img'=>$this->doMobilePut_qiniu(),
            'chat_imgs'=>$this->doMobilePut_qiniu(),
            'is_sub'=>$_GPC['is_sub']?$GPC['is_sub']:$my_room['is_sub'],
             'tags'=>$_GPC['tags']?$GPC['tags']:$my_room['tags'],
            "reward_percent"=>$GPC['reward_percent']?$GPC['reward_percent']:$my_room['reward_percent'],
             "reward_status"=>$GPC['reward_status']?$GPC['reward_status']:$my_room['reward_status']
        );

        $row_count=pdo_insert("chat_room",$data);//插入数据
      
        if($row_count==1){
            $fmdata = array(
                "success" => 1,            
                'msg'=>'修改直播间成功'
            );
        }else{
            $fmdata = array(
                "success" => -2,
         
                'msg'=>'修改直播间失败'
            );
        }
        echo json_encode($fmdata);
        exit();
    
}

//个人分佣收益
if($op=='subcom_cash')
{
    $cfg=$this->module['config'];
    $cfg['cash_money']=empty($cfg['cash_money'])?10.00:number_format($cfg['cash_money'],2);
    $percent_plat=empty($cfg['plat_percent'])?2:$cfg['plat_percent'];
    $percent_plat=$percent_plat/100.00;
    $percent_plat=1-$percent_plat;

    $max_id=0;
    $max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_mysubcom")." WHERE payto_uid=:uid",array(":uid"=>$uid));
    if(!empty($max_record)){
        $max_id=$max_record;
    }
    $batch_num=$this->build_order_sn();
    $sum_sql="select A1.`uniacid`,A2.`room_id`,MAX(A1.id) max_id,`payto_uid`,sum(`pay_money`) pay,1-A2.subcom_percent
            subcom_percent,SUM(pay_money)*(A2.subcom_percent)*" .$percent_plat." my_money,'".$batch_num."' batch_num,unix_timestamp
            (now()) create_time	
            FROM ".tablename("chat_payment")." A1 
            INNER JOIN ".tablename('chat_room')." A2 
            on A1.room_id=A2.room_id 
            WHERE pay_status=1 and pay_type=2 and A1.uniacid=:uniacid and A1.fuid=:uid AND A1.payto_uid=:uid AND A1.id>:max_id 
            GROUP BY A2.room_id";

    $result=pdo_fetchall($sum_sql,array(":uniacid"=>$uniacid,":max_id"=>$max_id,":uid"=>$uid));//可提现
    $my_notcash=0;     //可提现金额
    for($i=0;$i<count($result);$i++){
        $my_notcash+=number_format($result[$i]['my_money'],2);
    }
    $room_id=$result['room_id'];
    $max_id=0;
    $max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_mysubcom")." WHERE payto_uid=:uid",array(":uid"=>$uid));
    if(!empty($max_record)){
        $max_id=$max_record;
    }

    $my_hiscash=0.00;  //历史提现金额
    $his_tory=pdo_fetchcolumn("SELECT SUM(pay_money) FROM ".tablename("chat_mycashsum_last")." WHERE pay_type=3 AND payto_uid=:uid",array(":uid"=>$uid));
    if(!empty($his_tory)){
        $my_hiscash=$his_tory;
    }
    $my_hiscash=number_format($my_hiscash,2);

    $all_cash=$my_hiscash+$my_notcash;      //历史总赏金
    $all_cash=number_format($all_cash,2);


    $all_records=pdo_fetchall("SELECT * FROM ".tablename("chat_mycashsum_last")." WHERE  pay_type=3 AND payto_uid=:uid",array(":uid"=>$uid));
    if(!empty($all_records))
    {
        foreach($all_records as $key => $value){
            $all_records[$key]['status'] = $value['status']==1?"处理中":"完结";
            $all_records[$key]['create_time'] = date('Y-m-d H:i:s',$value['create_time']);
            $all_records[$key]['pay_time'] = date('Y-m-d H:i:s',$value['pay_time']);
        }
    }

    $data = [
        'all_cash'=>$all_cash,
        'notcash'=>$my_notcash,
        'hiscash'=>$my_hiscash,
        'cash_record'=>$all_records
    ];
    $res = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($res);exit;
}

//我的直播间收益
if($op=='room_cash')
{
    $cfg=$this->module['config'];
    $cfg['cash_money']=empty($cfg['cash_money'])?10.00:$cfg['cash_money'];
    $percent_plat=empty($cfg['plat_percent'])?2:$cfg['plat_percent'];
    $percent_plat=$percent_plat/100.00;
    $percent_plat=1-$percent_plat;
    //直播间信息
    $chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
    //个人提现
    $max_id_1=0;
    $max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_roomcashsum")." WHERE pay_type=1 AND room_id=:room_id",array(":room_id"=>$room_id));
    if(!empty($max_record)){
        $max_id_1=$max_record;
    }
    //直播间提现
    $max_id_2=0;
    $max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_roomcashsum")." WHERE pay_type=2 AND room_id=:room_id",array(":room_id"=>$room_id));
    if(!empty($max_record)){
        $max_id_2=$max_record;
    }
    // var_dump($max_id_1,$max_id_2);
    $batch_num=$this->build_order_sn();

    /*计算赞赏所产生收益开始*/
    $sum_sql="SELECT A1.uniacid,A2.room_id,topic_id,MAX(A1.id) max_id,1,SUM(pay_money),SUM(pay_money)*(A2.reward_percent)*".$percent_plat." my_money,
			A2.reward_percent*".($percent_plat)." reward_percent,'".$batch_num."' batch_num,unix_timestamp(now()) create_time
			FROM ".tablename("chat_payment")." A1
			INNER JOIN ".tablename("chat_topic")." A2
			ON A1.topic_id=A2.id 
			WHERE pay_status=1 AND pay_type=1 AND A1.uniacid=:uniacid AND A1.room_id=:room_id AND A1.id>:max_id 
			GROUP BY A2.room_id,topic_id";
    $result = pdo_fetchall($sum_sql,array(":uniacid"=>$uniacid,":max_id"=>$max_id_1,":room_id"=>$room_id));

    /*计算赞赏所产生收益结束*/

    $room_notcash=0; //可提现金额
    $room_cash=0;
    foreach($result as $record){
        $room_cash+=$record['my_money'];
    }

    /*计算付费话题及系列课所产生收益开始*/
    $sum_sql_2="SELECT uniacid,room_id,topic_id,series_id,max(id),2,SUM(pay_money) pay_money,SUM(pay_money)*".$percent_plat." room_money,".$percent_plat.",'".$batch_num."' batch_num,unix_timestamp(now()) create_time 
            FROM ".tablename("chat_payment")." 
            WHERE pay_status=1 AND room_id=:room_id AND pay_type=2 AND uniacid=:uniacid AND id>:max_id 
            GROUP BY room_id,topic_id";
    $result_2=pdo_fetchall($sum_sql_2,array(":uniacid"=>$uniacid,":room_id"=>$room_id,":max_id"=>$max_id_2));
// var_dump($result_2);
    /*计算付费话题所产生收益结束*/
    foreach($result_2 as $record){
        $room_cash += $record['room_money'];
    }

    /*计算分佣的收益*/
    $sum_sql_3="select A1.`uniacid`,A2.`room_id`,MAX(A1.id) max_id,payto_uid,sum(`pay_money`) pay,1-A2.subcom_percent subcom_percent,SUM(pay_money)*(A2.subcom_percent)*" .$percent_plat." my_money,'".$batch_num."' batch_num,unix_timestamp(now()) create_time	
        FROM ".tablename("chat_payment")." A1 
        INNER JOIN ".tablename('chat_room')." A2 
        on A1.room_id=A2.room_id 
        WHERE pay_status=1 and pay_type=2 and A1.uniacid=:uniacid and A1.fuid is not null AND A1.id>:max_id and A1.room_id=:room_id 
        GROUP BY A2.room_id";

    $result_3 = pdo_fetch($sum_sql_3,array(":uniacid"=>$uniacid,":max_id"=>$max_id_2,":room_id"=>$room_id));
    /*计算分佣的收益*/
    $subcom_cash = $result_3['my_money'];
    $room_notsubom = $room_cash-$subcom_cash;
    // var_dump($room_cash,$subcom_cash);
    $room_notcash_1 += $room_notsubom;
    $room_notcash = number_format($room_notcash_1,2);    //可提现金额

    $room_hiscash = 0.00;  //已提现金额
    $his_tory = pdo_fetchcolumn("SELECT SUM(pay_money) FROM ".tablename("chat_mycashsum_last")." WHERE pay_type=2 AND room_id=:room_id",array(":room_id"=>$room_id));
    if(!empty($his_tory)){
        $room_hiscash = $his_tory;
    }

    $room_hiscash = $room_hiscash;

    $all_cash = $room_hiscash+$room_notcash_1;   //历史总赏金

    $all_cash = number_format($all_cash,2);


    $all_records=pdo_fetchall("SELECT * FROM ".tablename("chat_mycashsum_last")." WHERE pay_type=2 AND room_id=:room_id",array(":room_id"=>$room_id));
    if(!empty($all_records))
    {
        foreach($all_records as $key => $value){
            $all_records[$key]['status'] = $value['status']==1?"处理中":"完结";
            $all_records[$key]['create_time'] = date('Y-m-d H:i:s',$value['create_time']);
            $all_records[$key]['pay_time'] = date('Y-m-d H:i:s',$value['pay_time']);
        }
    }

    $data = [
        'all_cash'=>$all_cash,
        'notcash'=>number_format($room_notcash_1,2),
        'hiscash'=>number_format($room_hiscash,2),
        'cash_record'=>$all_records
    ];
    $res = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($res);exit;
}

//个人打赏收益
if($op=='my_cash')
{
    $cfg=$this->module['config'];
    $cfg['cash_money']=empty($cfg['cash_money'])?10.00:number_format($cfg['cash_money'],2);
    $percent_plat=empty($cfg['plat_percent'])?2:$cfg['plat_percent'];
    $percent_plat=$percent_plat/100.00;
    $percent_plat=1-$percent_plat;

    $max_id=0;
    $max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_mycashsum")." WHERE payto_uid=:uid",array(":uid"=>$user_info->uid));
    if(!empty($max_record)){
        $max_id=$max_record;
    }

    $batch_num=$this->build_order_sn();

    $sum_sql="SELECT A1.uniacid,A2.room_id,topic_id,MAX(A1.id) max_id,payto_uid,SUM(pay_money) pay,
			1-A2.reward_percent reward_percent,SUM(pay_money)*(1-A2.reward_percent)*".$percent_plat." my_money,
			'".$batch_num."' batch_num,unix_timestamp(now()) create_time 
			FROM ".tablename("chat_payment")." A1 
			INNER JOIN ".tablename("chat_topic")." A2
			ON A1.topic_id=A2.id 
			WHERE pay_status=1 AND pay_type=1 AND A1.uniacid=:uniacid AND A1.payto_uid=:uid AND A1.id>:max_id 
			GROUP BY A2.room_id,topic_id";
    $result=pdo_fetchall($sum_sql,array(":uniacid"=>$uniacid,":max_id"=>$max_id,":uid"=>$uid));
    $my_notcash=0;
    foreach($result as $record){
        $my_notcash+=$record['my_money'];
    }
    $my_notcash=number_format($my_notcash,2);

    $my_hiscash=0.00;
    $his_tory=pdo_fetchcolumn("SELECT SUM(pay_money) FROM ".tablename("chat_mycashsum_last")." WHERE pay_type=1 AND payto_uid=:uid",array(":uid"=>$user_info->uid));
    if(!empty($his_tory)){
        $my_hiscash=$his_tory;
    }
    $my_hiscash=number_format($my_hiscash,2);

    $all_cash=$my_hiscash+$my_notcash;
    $all_cash=number_format($all_cash,2);


    $all_records=pdo_fetchall("SELECT * FROM ".tablename("chat_mycashsum_last")." WHERE  pay_type=1 AND payto_uid=:uid",array(":uid"=>$user_info->uid));
    if(!empty($all_records))
    {
        foreach($all_records as $key => $value){
            $all_records[$key]['status'] = $value['status']==1?"处理中":"完结";
            $all_records[$key]['create_time'] = date('Y-m-d H:i:s',$value['create_time']);
            $all_records[$key]['pay_time'] = date('Y-m-d H:i:s',$value['pay_time']);
        }
    }

    $data = [
        'all_cash'=>$all_cash,
        'notcash'=>$my_notcash,
        'hiscash'=>$my_hiscash,
        'cash_record'=>$all_records
    ];
    $res = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($res);exit;
}



