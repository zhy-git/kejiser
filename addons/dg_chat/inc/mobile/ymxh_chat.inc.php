<?php
use Qiniu\json_decode;
global $_GPC,$_W;
$this->load("Lscloud_Base");
$this->load("LetvCloudV");
$this->load(array("mcrypt","Dg_Base","Chat_ImSetting"));
$show_id = $_GPC['show_id'];
$user_infoarr=cache_load('user_info');
$user_info = array_to_object($user_infoarr);
//$user_info=$this->getUserInfo();
//pr($user_info);f
if(!$user_infoarr){
    $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}
$uid=$user_infoarr['id'];
#开始
$show_id = $_GPC['show_id'];
if(!empty($show_id)){
    pdo_update("chat_subjects",array("is_show"=>1),array("id"=>$show_id));
}
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$is_pc=0;
if (strpos($user_agent, 'MicroMessenger') === false) {
    $is_pc=1;
}
$is_refresh=0;
if(!empty($_GPC['refresh'])){
    $is_refresh=1;
}
$uid = $_W['member']['uid'];
$uniacid = $_W['uniacid'];
$room_id=0;
if(empty($_GPC['topic_id'])){
    exit;
}

$fromuid=$_GPC['fuid'];//分享着ID;
$topic_id=$_GPC['topic_id'];
$topic_id=intval($topic_id);
//课程信息
$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:id ",array(":id"=>$_GPC['topic_id']));
//课程信息
$topic_ls=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:topic_id",array(":topic_id"=>$topic_id));
$lsparam=pdo_get("chat_qc_ls",array("uniacid"=>$uniacid));
$lscloud_base=new Lscloud_Base($lsparam["userid"],$lsparam["uuid"],$lsparam["ls_key"]);

if($topic_ls['topic_style']==4){

    $letv = new LetvCloudV1($lsparam["uuid"],$lsparam["ls_key"]);
    $letvArr =json_decode($letv->videoGet($topic_ls['videoid']),true);
    $letv_status = $letvArr['data']['status'];

    if($letv_status==30 || $letv_status==31){
        //转码中
        $ls_status=5;
        $image=$_W['siteroot']."addons/dg_chat/resource/images/ls/zmz.jpg";
    }
    if($letv_status==20){
        //转码失败
        $ls_status=4;
        $image=$_W['siteroot']."addons/dg_chat/resource/images/ls/zmsb.jpg";
    }
    if($letv_status==10){
        //转码中
        $ls_status=3;
    }
    $vu = $letvArr['data']['video_unique'];
}elseif($topic_ls['topic_style']==5){
    $searchParams["method"] = $lscloud_base::$app_list_url;
    $searchParams["activityId"] = $topic_ls['activityid'];
    $searchObj=$lscloud_base->setApp($searchParams);

    if($searchObj[0]['activityStatus']==3){
        $lsParams["method"]=$lscloud_base::$record_search_url;
        $lsParams["liveId"]=$topic_ls['liveid'];
        $lsParams["taskId"]=$topic_ls['taskid'];
        $lsObj=$lscloud_base->setApp($lsParams);

        if($lsObj['rows'][0]['status']==2){
            //录制中
            $ls_status=2;
            $image=$_W['siteroot']."addons/dg_chat/resource/images/ls/lzz.jpg";
        }
        if($lsObj['rows'][0]['status']==6){
            //录制失败
            $ls_status=6;
            $image=$_W['siteroot']."addons/dg_chat/resource/images/ls/lzsb.jpg";
        }
        if($lsObj['rows'][0]['status']==8){
            //转码失败
            $ls_status=4;
            $image=$_W['siteroot']."addons/dg_chat/resource/images/ls/zmsb.jpg";
        }
        if($lsObj['rows'][0]['status']==7){
            //转码成功
            $ls_status=3;
        }
        if($lsObj['rows'][0]['status']==3){
            //转码中
            $ls_status=5;
            $image=$_W['siteroot']."addons/dg_chat/resource/images/ls/zmz.jpg";
        }

        $recordParams["method"]= $lscloud_base::$record_get_url;
        $recordParams["activityId"]= $topic_ls['activityid'];
        $recordObj=$lscloud_base->setApp($recordParams);
        $vu=$recordObj['machineInfo'][0]['videoUnique'];
    }elseif($searchObj[0]['activityStatus']==0){
        $ls_status=0;
    }elseif($searchObj[0]['activityStatus']==1){
        $machineParams["method"] = $lscloud_base::$stream_machine_url;
        $machineParams["activityId"] = $topic_ls['activityid'];
        $machineObj=$lscloud_base->setApp($machineParams);

        if($machineObj['lives'][0]['status']==1){
            $ls_status=1;
        }else{
            $ls_status=0;
        }

    }
}

if(empty($topic)){
    exit;
}
$spreadnum=pdo_fetchcolumn("select count(1) from ".tablename('chat_spreadnum')." where topic_id=:topic_id and fuid=:fuid",array(":topic_id"=>$_GPC['topic_id'],":fuid"=>$user_info->uid));
if($spreadnum>=$topic['spread'] && !empty($topic['spread']) && $topic['spread']>0){
    $is_spreaduser=true;
}
if(!empty($topic['spread'])&&!empty($fromuid)){
    $is_spreaduser=false;
    if($user_info->uid!=$fromuid){
        $spreadnum=pdo_fetchcolumn("select count(1) from ".tablename('chat_spreadnum')." where topic_id=:topic_id and fuid=:fuid",array(":topic_id"=>$_GPC['topic_id'],":fuid"=>$fromuid));
        if($spreadnum>=$topic['spread']){
            $is_spreaduser=true;
        }else{
            $is_spread=pdo_fetch("select * from ".tablename('chat_spreadnum')." where topic_id=:topic_id and uid=:uid and fuid=:fuid",array(":topic_id"=>$_GPC['topic_id'],":uid"=>$user_info->uid,":fuid"=>$fromuid));
            if(empty($is_spread)){
                $data=array(
                        'uniacid'=>$uniacid,
                        'topic_id'=>$_GPC['topic_id'],
                        'room_id'=>$topic['room_id'],
                        'uid'=>$user_info->uid,
                        'fuid'=>$fromuid,
                        'createtime'=>time()
                );
                pdo_insert("chat_spreadnum",$data);
            }
        }
    }
}

/*虚拟人气*/
$topic['look_numbers']=$topic['x_look_numbers']+$topic['look_numbers'];

//直播是否已经结束
$istopic_end=1;
if(empty($topic['end_time'])||$topic['end_time']==0){
    $istopic_end=0;
}

$istopic_begin=1;
if($topic['begin_time']>time()){
    $istopic_begin=0;
}

$room_id=$topic['room_id'];
$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
$guests=pdo_fetchall("SELECT * FROM ".tablename("chat_topicguest")." WHERE topic_id=:topic_id LIMIT 6",array(":topic_id"=>$topic_id));

$guest_list=array();
foreach($guests as $guest){
    $guest_list[]=$guest['guest_openid'];
}

$is_guest=in_array($user_info->openid, $guest_list);
$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;
$role_name="学生";
if($is_guest){
    $role_name="特邀嘉宾";
}

if($is_manager){
    $role_name="管理员";
}
if(($is_manager||$is_guest)&&$istopic_begin == 0){
    $show_its = 1;
}
if((!$is_manager&&$topic['topic_status']==-1)||$chat_room['room_status']!=1){
    $topic_url=$this->createMobileUrl('message',array("room_id"=>$room_id));
   //如果是设置为禁用就跳转至此链接
    $next_url=array(
          "pay_url" => $topic_url,
    );
    $res=['code'=>1,'msg'=>'查询成功','data'=>$next_url];
    echo json_encode($res);
    //header("Location:".$next_url);
    exit;
}

$user_info->uniacid=$uniacid;
$user_info->room_id=$room_id." ".$topic_id;
$user_info->topic_id=$topic_id;
$user_info->is_manager=$is_manager;
$user_info->is_guest=$is_guest;
$user_info->role_name=$role_name;
$user_info->is_opendm=$topic['is_opendm'];
$user_info_encode=json_encode($user_info);
$is_showguid=$topic['is_showguid']==1?true:false;

/*话题相关设置开始*/
$topic_setting=array(
        "reward_status"=>$chat_room['reward_status'],
        "is_showguid"=>$topic['is_showguid']==1?true:false,
        "room_status"=>$chat_room['room_status'],
        "topic_status"=>$topic['topic_status'],
        "is_allshutup"=>$topic['is_allshutup']
);
$topic_setting=json_encode($topic_setting);
/*话题相关设置结束*/

$ret = $this->generate_user_sig("dg_".$user_info->uid);
$im_setting = $this->load_imsetting();
/*腾讯IM设置相关信息*/
$im_setting=array(
        "sdkAppID"=>$im_setting['sdkappid'],
        "accountType"=>$im_setting['account_type'],
        "avChatRoomId"=>$topic['im_group_id'],
        "identifier"=>"dg_".$user_info->uid,
        "identifierNick"=>$user_info->nickname,
        "userSig"=>$ret->usersig
);
$im_setting=json_encode($im_setting);

/*设置生成邀请卡二维码参数开始*/
if(!empty($_GPC['spoer'])){
    $mini_pay = $_GPC['mini_pay'];
    if($mini_pay=='true'){
        $poster=pdo_fetch("select * from ".tablename('chat_topicposter')." where uid=:uid and
    topic_id=:topic_id and code_type='small'",array(":uid"=>$user_info->uid,":topic_id"=>$topic_id));
        if(!empty($poster)){
        $ticket=$poster['ticket'];
        $spoerid=$poster['id'];
        }else{
            $insert = array(
                "uniacid"=>$uniacid,
                "uid"=>$user_info->uid,
                "openid"=>$user_info->openid,
                "nickname"=>$user_info->nickname,
                "avatar"=>$user_info->headimgurl,
                "room_id"=>$room_id,
                //"ticket"=>$ticket,
                "topic_id"=>$topic_id,
                "code_type"=>'small',
                "create_time"=>time()
            );
            pdo_insert('chat_topicposter',$insert);
            $spoerid=pdo_insertid();
        }
        header('content-type:application/json;charset=utf8');
        $fmdata = array(
                "success" => 1,
                "poserid"=>$spoerid,
                'mini_pay'=>$mini_pay
        );
        echo json_encode($fmdata);
        exit;
    }else{
        $poster=pdo_fetch("select * from ".tablename('chat_topicposter')." where uid=:uid and
    topic_id=:topic_id and code_type is null",array(":uid"=>$user_info->uid,":topic_id"=>$topic_id));
    }

    if(!empty($poster)){
        $ticket=$poster['ticket'];
        $spoerid=$poster['id'];
    }else{
        $barcode=array(
                'action_name' => '',
                'action_info' => array(
                        'scene' => array('scene_str' => ''),
                ),
        );
        //生成永久二维码
         load()->func('communication');
        $aacid=$_W['acid'];
        $uniacccount = WeAccount::create($aacid);
        $vstr='dg_chat_'.$topic_id.'_uid'.$user_info->uid;
        $barcode['action_info']['scene']['scene_str'] = $vstr;
        //$barcode['expire_seconds'] = intval(2592000);
        $barcode['action_name'] = "QR_LIMIT_STR_SCENE";
        $content = $uniacccount->barCodeCreateFixed($barcode);
        $ticket=$content["ticket"];
        //var_dump($content);die;
        $name='渠道二维码'.$uniacid;
        //保存数据
        $insert = array(
                "uniacid"=>$uniacid,
                "uid"=>$user_info->uid,
                "openid"=>$user_info->openid,
                "nickname"=>$user_info->nickname,
                "avatar"=>$user_info->headimgurl,
                "room_id"=>$room_id,
                "ticket"=>$ticket,
                "topic_id"=>$topic_id,
                "create_time"=>time()
        );
        $qrinsert=array(
                'ticket'=>$ticket,
                'keyword'=>$vstr,
                'scene_str'=>$vstr,
                'name'=>$name,
                'uniacid'=>$uniacid,
                'acid'=>$uniacid,
                'type'=>'scene'
        );
        $param=array('rid'=>$rid,'openid'=>$openid);
        $result=pdo_fetch('select * from '.tablename('qrcode').'where keyword=:keyword and uniacid=:uniacid and scene_str=:str',array(':keyword'=>$vstr,":uniacid"=>$uniacid,":str"=>$vstr));
        if(empty($result)){
            pdo_insert('qrcode',$qrinsert);
        }
        pdo_insert('chat_topicposter',$insert);
        $spoerid=pdo_insertid();
    }
    header('content-type:application/json;charset=utf8');
    $fmdata = array(
            "success" => 1,
            "poserid"=>$spoerid,
            'mini_pay'=>$mini_pay
    );
    echo json_encode($fmdata);
    exit;
}

/*设置生成邀请卡二维码参数结束*/


//$online_num=$this->group_get_group_memnum($topic['im_group_id']);

/*密码验证类直播验证*/
if($topic['topic_type']=='password'&&!$is_manager&&!$is_guest&&!$is_spreaduser){
//  $url="http://sm2015.zh3721.com/index.php/api/weike";
//  $data=array();
//  $data['wechatid']=$user_info->openid;
//  $data['weikeid']=$topic_id;
//  $pass_result=$this->send_post($url,$data);
//  $pass_result=json_decode($pass_result,true);

//  if($pass_result&&$pass_result['Errorcode']=="02"){
//      header("Location:".$pass_result['Url']);
//      exit;
//  }

    $pass_check=dgmcrypt::md5_encrypt($topic['room_password']);
    $cookieKey="top_".$topic_id;
    if(empty($_GPC[$cookieKey])||$_GPC[$cookieKey]!=$pass_check){
        $next_url=$topic_url=$this->createMobileUrl('topic_pass',array("topic_id"=>$topic_id));
        //var_dump($next_url);die();
        header("Location:".$next_url);
        exit;
    }
}

/*付费类直播验证*/
if($topic['topic_type']=='ticket'&&!$is_guest&&!$is_spreaduser&&!$is_manager){
    $is_pay=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_payment")." WHERE topic_id=:topic_id AND pay_openid=:openid AND pay_status=1",array(":openid"=>$user_info->openid,":topic_id"=>$topic_id));
    $is_vip = $this->is_vip($user_info->uid);
    if(!empty($is_vip)){
        $is_pay =1;
    }
    /* 如果需要付费的话 需要付费的话那么$is_pay等于0*/
    if(empty($is_pay)||$is_pay==0){
        //$next_url=$topic_url=$this->createMobileUrl('topic_pay',array("topic_id"=>$topic_id,'fuid'=>$fromuid));
        $topic_url=$this->createMobileUrl('topic_pay',array("topic_id"=>$topic_id,'fuid'=>$fromuid));
        $next_url=array(
            "pay_url" => $topic_url,
        );
        $res=['code'=>1,'msg'=>'查询成功','data'=>$next_url];
        echo json_encode($res);
       // var_dump($next_url);die();
       // header("Location:".$next_url);
        exit;
    }
    
}


/*参与人学生添加开始*/
$is_join=pdo_fetchcolumn("SELECT id FROM ".tablename("chat_joinusers")." WHERE uniacid=:uniacid AND topic_id=:topic_id AND user_uid=:uid",array(":uniacid"=>$uniacid,":topic_id"=>$topic_id,":uid"=>$user_info->uid));
if(empty($is_join)){
    $temp_data=array(
            "room_id"=>$room_id,
            "topic_id"=>$topic_id,
            "user_uid"=>$user_info->uid,
            "uniacid"=>$uniacid,
            "create_time"=>time()
    );
    pdo_insert("chat_joinusers",$temp_data);
}else{
    pdo_update("chat_joinusers",array("last_time"=>time()),array("uniacid"=>$uniacid,"topic_id"=>$topic_id,"user_uid"=>$user_info->uid));
}
/*参与人学生添加结束*/



$is_subscribe=pdo_fetchcolumn("SELECT 1 FROM ".tablename("chat_subscribe")." WHERE uid=:uid AND topic_id=:topic_id AND sub_type='topic' LIMIT 1",array(":uid"=>$user_info->uid,":topic_id"=>$topic_id));

/*设置开课提醒开始*/
if(!empty($_GPC['tips'])){
    header('content-type:application/json;charset=utf8');
    $fmdata = array(
            "success" => 1,
            "data" =>"设置成功",
    );
    if(empty($is_subscribe)){
        $data=array(
                "uniacid"=>$uniacid,
                "uid"=>$user_info->uid,
                "openid"=>$user_info->openid,
                "nickname"=>$user_info->nickname,
                "room_id"=>$room_id,
                "sub_type"=>"topic",
                "topic_id"=>$topic_id,
                "create_time"=>time()
        );
        $row_count=pdo_insert("chat_subscribe",$data);
    }else{
        pdo_delete("chat_subscribe",array("uid"=>$user_info->uid,"topic_id"=>$topic_id));
        $fmdata = array(
                "success" => -1,
                "data" =>"设置成功",
        );
    }

    echo json_encode($fmdata);
    exit;
}
/*设置开课提醒结束*/

/*撤消消息开始*/
if(!empty($_GPC['revoke'])){
    header('content-type:application/json;charset=utf8');
    $fmdata = array(
            "success" => -1,
            "data" =>"删除失败!",
    );
    if($is_guest||$is_manager){
        $msg_id=intval($_GPC['msg_id']);
        $msg_info=pdo_fetch("SELECT * FROM ".tablename("chat_subjects")." WHERE id=:id",array(":id"=>$msg_id));
        if(!empty($msg_info)){
            if($is_manager||$msg_info['owner_uid']==$user_info->uid){
                pdo_delete("chat_subjects",array("id"=>$msg_id));
                $fmdata = array(
                        "success" => 1,
                        "data" =>"删除成功!",
                );
            }
        }
    }
    echo json_encode($fmdata);
}
/*撤消消息结束*/

/*删除和禁言讨论内容逻辑*/
if(!empty($_GPC['msg_id'])){
    header('content-type:application/json;charset=utf8');
    $op_type=array('del','shutup');
    if(!in_array($_GPC['op'], $op_type)){
        return;
    }
    if($is_guest||$is_manager){
        $msg_id=intval($_GPC['msg_id']);
        if($_GPC['op']=='del'){
            pdo_delete("chat_discuss",array('id'=>$msg_id));
            $fmdata = array(
                    "success" => 1,
                    "data" =>"删除成功!",
            );
        }else{
            $Msg=pdo_fetch("SELECT * FROM ".tablename("chat_discuss")." WHERE id=:id",array(":id"=>$msg_id));
            if(empty($Msg)){
                return;
            }

            $is_blacks=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_blacklist")." WHERE topic_id=:topic_id AND black_openid=:openid",array(":topic_id"=>$topic_id,":openid"=>$Msg['owner_openid']));

            if(empty($is_blacks)||$is_blacks==0){
                $data=array(
                    'uniacid'=>$uniacid,
                    'room_id'=>$Msg['room_id'],
                    'topic_id'=>$Msg['topic_id'],
                    'black_uid'=>$Msg['owner_uid'],
                    'black_openid'=>$Msg['owner_openid'],
                    'black_nickname'=>$Msg['owner_nickname'],
                    'black_ip'=>CLIENT_IP,
                    'create_time'=>time()
                );
                pdo_insert("chat_blacklist",$data);
                $this->group_forbid_send_msg($topic['im_group_id'],"dg_".$Msg['owner_uid'],7*24*3600);
            }

            $fmdata = array(
                    "success" => 1,
                    "data" =>"禁言成功!",
            );
        }
    }else{
        $fmdata = array(
                "success" => -1,
                "data" =>"没有权限!",
        );
    }

    echo json_encode($fmdata);
    exit;
}



/*嘉宾讲话和论坛信息保存开始*/
if(!empty($_GPC['content'])){
    header('content-type:application/json;charset=utf8');

    $target=$_GPC['target'];
    $chatdata=array(
            "uniacid"=>$uniacid,
            "room_id"=>$room_id,
            "topic_id"=>$topic['id'],
            "owner_uid"=>$user_info->uid,
            "owner_openid"=>$user_info->openid,
            "owner_nickname"=>$user_info->nickname,
            "owner_avatar"=>$user_info->headimgurl,
            "create_time"=>time()
    );

    $msg_id=0;
    if($target=='main'&&($is_manager||$is_guest)&&$_GPC['msgtype']=='shutup'){
        $shut_up=$_GPC['content']=="on"?1:0;
        pdo_update("chat_topic",array('is_allshutup'=>$shut_up),array("id"=>$topic_id));
    }else{
        /*只有管理员或者赞赏才能保存信息*/
        if($target=='main'&&($is_manager||$is_guest||$_GPC['msgtype']=='reward')){
            $chatdata["sub_type"]=$_GPC['msgtype'];
            $chatdata["sub_content"]=htmlspecialchars_decode($_GPC['content']);

            $chatdata["sub_status"]=1;
            $chatdata['ppt_id']=$_GPC['ppt_id'];
            if($chatdata["sub_type"]=='voice'){
                $chatdata["sub_content_ext"]=$_GPC['last'];
            }
            if($chatdata["sub_type"]=='wps'){
                $chatdata["wps_url"]=$_GPC['wps_url'];
                $chatdata["wps_size"]=$_GPC['wps_size'];
                $chatdata["wps_hz"]=$_GPC['wps_hz'];
            }
            if($chatdata["sub_type"]=='reward'){
                $chatdata["sub_content_ext"]=$_GPC['content_ext'];
            }
            $chatdata['is_show'] = 1;
            $chatdata['role_name']=$_GPC['role_name'];
            pdo_insert("chat_subjects",$chatdata);
            $msg_id=pdo_insertid();
        }
    }

    /*保存讨论信息*/
    if($target=='discuss'){
        $blacks=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_blacklist")." WHERE black_openid=:openid ",array(":openid"=>$user_info->openid));
        if($blacks>0){
            $fmdata = array(
                    "success" => -1,
                    "data" =>"您已经被禁言!",
            );
            echo json_encode($fmdata);
            exit;
        }
        $chatdata["dis_type"]=$_GPC['msgtype'];
        $chatdata["dis_content"]=htmlspecialchars_decode($_GPC['content']);
        $chatdata["dis_status"]=1;
        $chatdata["ask_type"]=$_GPC['is_ask']?1:0;
        pdo_insert("chat_discuss",$chatdata);
        $msg_id=pdo_insertid();
        //增加评论数量
        pdo_query("UPDATE ".tablename("chat_topic")." SET comment_numbers=comment_numbers+1 WHERE id=:topic_id ",array(":topic_id"=>$topic_id));
    }


    $fmdata = array(
            "success" => 1,
            "msg_id"=>$msg_id,
            "target"=>$target,
            'ask_type'=>$chatdata['ask_type'],
            "data" =>"保存成功!",
    );

    /*处理语音信息*/
    $this->timer_start();
    echo json_encode($fmdata);
    exit;
}
/*嘉宾讲话和论坛信息保存开始结束*/

$psize = 15;
$condition=" WHERE uniacid =:uniacid AND topic_id=:topic_id AND sub_status=1 and is_show=1";
$condition_dis=" WHERE uniacid =:uniacid AND topic_id=:topic_id AND dis_status=1 ";
$params_array=array(":uniacid"=>$uniacid,":topic_id"=>$topic_id);
$total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename("chat_subjects") . $condition,$params_array);
$total_discuss=pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename("chat_discuss") . $condition_dis,$params_array);
$pages = ceil($total / $psize);
$pages_discuss = ceil($total_discuss/ $psize);
/* 查询第一条信息开始 */
$first_voice = pdo_fetch("select id as msg_id from ".tablename("chat_subjects").$condition." and sub_type='voice'",$params_array);
//var_dump($first_voice);
/* 查询第一条信息结束 */
/*分页获取主界面信息开始*/
if(!empty($_GPC['pindex'])){
    header('content-type:application/json;charset=utf8');
    $tablename="chat_subjects";
    if($_GPC['target']=="discuss"){
        $tablename="chat_discuss";
    }

    $pindex = max(1, intval($_GPC['pindex']));

    $record_sql="";
    if($_GPC['target']=="main"){
        $record_sql="SELECT id msg_id,wps_url,wps_hz,wps_size,sub_type msgtype,sub_content content,sub_content_down,
            sub_status,owner_openid,owner_nickname from_client_name,owner_avatar headimg,create_time,sub_content_ext last,role_name,ppt_id FROM " . tablename($tablename) .  $condition." ORDER BY id  LIMIT " . ($pindex - 1) * $psize . ',' . $psize;
    }else{
        $record_sql="SELECT id msg_id,dis_type msgtype,dis_content content,
            dis_status,owner_openid,owner_nickname from_client_name,owner_avatar headimg,create_time,ask_type FROM " . tablename($tablename) .  $condition_dis." ORDER BY id DESC  LIMIT " . ($pindex - 1) * $psize . ',' . $psize;
    }

    $records = pdo_fetchall($record_sql,$params_array);

    foreach($records as &$record){
        $record['time']=date('m/d H:i:s', $record['create_time']);
        if($_GPC['target']=="main"){
          $record['content']=empty($record['sub_content_down'])?$record['content']:$this->to_qiniu_url($record['sub_content_down']);
          $record['revoke']=0;
          if($is_manager||$record['owner_openid']==$user_info->openid){
             $record['revoke']=1;
          }
        }

    }

    unset($record);

    if($_GPC['target']=="discuss"){
        $pages=$pages_discuss;
        $total=$total_discuss;
    }
    $fmdata = array(
            "total" => $pages,
            "items"=>$total,
            "pindex"=>$pindex,
            "rows" =>$records,
    );

    echo json_encode($fmdata);
    exit;
}
/*分页获取主界面信息结束*/

$invite_url=$this->createMobileUrl('topic_guest_invite',array("topic_id"=>$topic_id));
$chat_url=$this->createMobileUrl('c_index',array("room_id"=>$room_id,'refresh'=>1));
$index_url=$this->createMobileUrl('index',array('refresh'=>1));
$topic_url=$this->createMobileUrl('chat',array("topic_id"=>$topic_id));
$guest_manager_url=$this->createMobileUrl('topic_manager',array("topic_id"=>$topic_id));
$create_chat_url=$this->createMobileUrl('chat_create');
$downmedia_url=$this->createMobileUrl('downmedias');
$reward_url=$this->createMobileUrl('reward');

/*更新累计观看人数*/
pdo_query("UPDATE ".tablename("chat_topic")." SET look_numbers=look_numbers+1,is_showguid=0 WHERE id=".$topic['id']);

/*最近观看数据记录开始*/
$browse=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_roombrowse")." WHERE uid=:uid AND brow_type='topic' AND topic_id=:topic_id",array(":uid"=>$user_info->uid,":topic_id"=>$topic_id));

if(empty($browse)||$browse==0){
    $data=array(
        "uniacid"=>$uniacid,
        "room_id"=>$room_id,
        "uid"=>$user_info->uid,
        "openid"=>$user_info->openid,
        "create_time"=>time(),
        'brow_type'=>'topic',
        'topic_id'=>$topic_id,
        "update_time"=>time()
    );
    pdo_insert("chat_roombrowse",$data);
}else{
    pdo_update("chat_roombrowse",array("update_time"=>time()),array(
      "uid"=>$user_info->uid,
      "room_id"=>$room_id,
      "brow_type"=>'topic'
    ));
}

/*最近观看数据记录结束*/
$ppt_list=pdo_fetchall("SELECT * FROM ".tablename("chat_ppt")." WHERE topic_id=:topic_id  ORDER BY img_order",array(":topic_id"=>$topic_id));


$ppt_list_top=array();

foreach($ppt_list as $temp_ppt){
    if($temp_ppt['is_send']==1){
        $ppt_list_top[]=$temp_ppt;
    }
}

unset($temp_ppt);
$sharedata=array(
        "title"=>str_replace(array("\r\n", "\r", "\n"),'', $topic['topic_name']),
        "desc"=>str_replace(array("\r\n", "\r", "\n"),'',strip_tags($topic['topic_desc'])),
        "link"=>$_W['siteroot'].'app/'.substr($this->createmobileurl('topic_info',array('topic_id'=>$topic_id, "fuid"=>$user_info->uid),true),2),
        "imgUrl"=>$topic['topic_icon'],
);
if($topic['topic_style']==2){
    $qc_data=pdo_fetch("select * from ".tablename("chat_qc_data")." where id=:id",array(":id"=>$topic["vedio_id"]));
}
$im_config=pdo_fetch("select * from ".tablename("chat_qc_setting")." where uniacid=:uniacid",array(":uniacid"=>$uniacid));
// var_dump($topic["topic_style"]);
// exit;

if($topic["topic_style"]==1){
    include $this->template('chat');
}else if($topic["topic_style"]==2){

    echo json_encode(array('success'=>1 , 'data'=>array('qr_data'=>$qc_data  , 'topic'=>$topic  , 'istopic_begin'=>$istopic_begin , 'istopic_end'=>$istopic_end) ,  'message'=>'获取成功!'));
//    include $this->template('chat2');
}else if($topic["topic_style"]==4 || $topic["topic_style"]==5){
    include $this->template('chat4');
}else if($topic["topic_style"]==3){
    $filelist=explode(',',$topic["file_id"]);
    $js_file = json_encode($filelist);
    $count=count($filelist);
   // include $this->template('chat3');
}else{
    $third_url = $topic['third_url'];
    if(!empty($third_url)){
        $j=stripos($third_url,"ttps://");
        $jj=stripos($third_url,"ttp://");

        if($j == false && $jj == false){
            if(strripos($third_url, '.youku')){
                $third_url =$third_url;
            }else{
                $third_url = $_W['attachurl'].$topic['third_url'];
            }

        }
        echo json_encode(array('success'=>1 , 'data'=>array('qr_data'=>$qc_data  , 'topic'=>$topic  , 'istopic_begin'=>$istopic_begin , 'istopic_end'=>$istopic_end , 'third_url'=>$third_url) ,  'message'=>'获取成功!'));
    }

//    include $this->template('chat5');
}