<?php
global $_GPC,$_W;

//require_once (MODULE_ROOT."/class/ymxh/Tags.class.php");
$user_info=cache_load('user_info');
if(!$user_info){
  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}
 $page = !empty($_GPC['page'])?$_GPC['page']:1;
 $size = !empty($_GPC['size'])?$_GPC['size']:10;
//我看过的
if($_GPC['op'] == 'lastbrowse') {
    $uniacid = $_W['uniacid'];
    $user_info=cache_load('user_info');
    $uid=$user_info['id'];
    $rooms_sql="SELECT A1.topic_id,A1.room_id,A1.update_time,A2.topic_name,A2.topic_desc,A3.room_icon,topic_icon 
                FROM ".tablename("chat_roombrowse")." A1 
                INNER JOIN ".tablename("chat_topic")." A2 ON A1.topic_id=A2.id 
                INNER JOIN ".tablename("chat_room")." A3 ON A1.room_id=A3.room_id 
                WHERE A1.uniacid=:uniacid AND brow_type='topic'  AND A1.uid=".$uid." 
                ORDER BY update_time DESC ";
    $data = pdo_fetchall($rooms_sql,array(":uniacid"=>$uniacid));
    $count = ceil(count($data)/$size);
     $res = array_slice($data,($page-1)*$size,$size);

    $result = ['code'=>1,'msg'=>'查询成功','data'=>$res];
    echo json_encode($result);
}

//结束直播
if($_GPC['op'] == 'chat_over') {
    $uniacid = $_W['uniacid'];
   
    $topic_id = $_GPC['topic_id'];
    if(empty($topic_id)){
        echo json_encode(['code'=>0,'msg'=>'请输入课程id','data'=>[]]);
        exit;
    }
    $this->load("Lscloud_Base");
    $topic_id = intval($topic_id);
    $topic = pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE end_time=0 AND id=:id LIMIT 1",array(":id"=>$topic_id));
    if($topic['topic_style'] == 2){
        //查询录制文件
        $fileid = $this->get_already($topic,$uniacid);
        //更新直播为点播
        //pdo_update("chat_topic",array("topic_style"=>3,"file_id"=>$fileid['file_id'],"record_file_url"=>$fileid['record_file_url']),array("id"=>$topic_id));
        pdo_update("chat_topic",array("topic_style"=>3,"file_id"=>$fileid),array("id"=>$topic_id));
    }
    if($topic['topic_style'] == 5){
        $lsparam = pdo_get("chat_qc_ls",array("uniacid"=>$uniacid));
        $lscloud_base = new Lscloud_Base($lsparam["userid"],$lsparam["uuid"],$lsparam["ls_key"]);
        $searchParams["method"] = $lscloud_base::$app_list_url;
        $searchParams["activityId"] = $topic['activityid'];
        $searchObj = $lscloud_base->setApp($searchParams);

        if($searchObj['activityStatus']!=3){
            $apiParams["method"] = $lscloud_base::$app_close_url;
            $apiParams["activityId"] = $topic['activityid'];
            //$apiParams["endTime"]=time()*1000;
            $respObj = $lscloud_base->setApp($apiParams);

            $recordParams["method"] = $lscloud_base::$stream_list_url;
            $recordParams["activityId"] = $topic['activityid'];
            $recordObj = $lscloud_base->setApp($recordParams);
            $startTime = $searchObj[0]['createTime'];
            //$endTime=$searchObj[0]['endTime'];
            $liveId = $recordObj['lives'][0]['liveId'];
            $createParams["method"] = $lscloud_base::$record_url;
            $createParams["liveId"] = $liveId;
            $createParams["startTime"] = $startTime;
            $createParams["endTime"] = time()*1000;
            $createObj = $lscloud_base->setApp($createParams);
        }
        pdo_update("chat_topic",array("liveid"=>$liveId,"taskid"=>$createObj),array("id"=>$topic_id));
    }
    if(empty($topic)){
        echo json_encode(['code'=>0,'msg'=>'直播不存在','data'=>[]]);
        exit;
    }
    $room_id = $topic['room_id'];
    $chat_room = pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
    $is_manager = $this->is_manager($room_id)||$chat_room['create_openid']==$user_info['openid'];
    if(!$is_manager){
        echo json_encode(['code'=>0,'msg'=>'您没有权限进行此操作','data'=>[]]);
        exit;
    }

    header('content-type:application/json;charset=utf8');
    //更新数据表
    $row_count = pdo_update("chat_topic",array("end_time"=>time(),"topic_status"=>2),array("id"=>$topic_id));

    $result = ['code'=>1,'msg'=>'成功结束直播！','data'=>[]];
    echo json_encode($result);
}

//付费人员
if($_GPC['op'] == 'pay_people') {
    $uniacid = $_W['uniacid'];
    $topic_id = $_GPC['topic_id'];
    $series_id = $_GPC['series_id'];
    $pindex = max(1,intval(!empty($_GPC['pindex'])?$_GPC['pindex']:0));
    $psize = 10;
    if(empty($topic_id) && empty($series_id)){
        echo json_encode(['code'=>0,'msg'=>'请输入topic_id或series_id','data'=>[]]);
        exit();
    }
    $where  = " where uniacid=:uniacid  and pay_status=1 and pay_type=2 ";
    $condition = 'select pay_nickname nickname,pay_avatar avatar from '.tablename("chat_payment").$where;
    $sql_count = 'select count(1) from '.tablename("chat_payment").$where;
    $prams = array(':uniacid'=>$uniacid);
    if(!empty($topic_id)){
        $topic_info = pdo_fetch("select * from ".tablename("chat_topic")." where uniacid=:uniacid and is_del is null and id=:id ",array(":uniacid"=>$uniacid,':id'=>$topic_id));
        if($topic_info['topic_type'] !='ticket'){
            $sql = 'select A1.topic_id,A2.nickname,A2.avatar from '.tablename('chat_joinusers')." A1 INNER JOIN ".tablename("chat_users")." A2 ON 
	     A1.user_uid=A2.id WHERE topic_id=:topic_id and A1.uniacid=:uniacid ORDER BY A1.ID DESC";
            $sql_count = 'select count(1) from '.tablename('chat_joinusers')." A1 INNER JOIN ".tablename("chat_users")." A2 ON 
	     A1.user_uid=A2.id WHERE topic_id=:topic_id and A1.uniacid=:uniacid ORDER BY A1.ID DESC"; ;
        }else{
            $sql = $condition. ' and topic_id =:topic_id order by id desc ';
            $sql_count = $sql_count.' and topic_id =:topic_id ';
        }
        $prams[':topic_id'] = $topic_id;
    }else{
        $sql = $condition. ' and series_id=:series_id order by id desc ';
        $sql_count = $sql_count. ' and series_id=:series_id ';
        $prams[':series_id'] = $series_id;
    }
    $count = pdo_fetchcolumn($sql_count,$prams);
    $pages = ceil($count / $psize);
    if($pindex>$pages && $pages>0)
        $pindex = $pages;

    $data = pdo_fetchall($sql." limit ".($pindex-1)*$psize.','.$psize,$prams);

    $result = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($result);
}

//我的关注
if($_GPC['op'] == 'my_subscribe') {
    $acid = empty($_W['account']['acid']) ? $_W['uniacid'] : $_W['account']['acid'];
    $uniacid = $_W['uniacid'];

    $room_id = 0;
    $user_info=cache_load('user_info');
    $uid=$user_info['id'];
    $rooms_sql = "SELECT A1.room_id,A1.create_time,A2.room_name,A2.room_desc,A2.room_icon 
                  FROM " . tablename("chat_subscribe") . " A1 
                  INNER JOIN " . tablename("chat_room") . " A2 
                  ON A1.room_id=A2.room_id AND A1.uniacid=A2.uniacid 
                  WHERE A1.uid=" . $uid . " AND sub_type='room' 
                  ORDER BY A1.create_time DESC ";
    $data = pdo_fetchall($rooms_sql);

    $result = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($result);
}
//添加关注
if($_GPC['op'] == 'add_subscribe') {
 
    $uniacid = $_W['uniacid'];
    $room_id =$_GPC['room_id']?$_GPC['room_id']:'';
    $sub_type=$_GPC['sub_type'];
    $topic_id=$_GPC['topic_id']?$_GPC['topic_id']:'';
    $user_info=cache_load('user_info');
    $uid=$user_info['id'];
     $user_data = pdo_fetch("SELECT id,openid,nickname,avatar FROM ".tablename("chat_users")." WHERE id=:id ",array(":id"=>$uid));
     $sub_data=array(
        'uniacid'=>$uniacid,
        'openid'=>$user_data['openid'],
        'nickname'=>$user_data['nickname'],
        'sub_type'=>$sub_type,
        'uid'=>$uid,
        'room_id'=>$room_id,
        'topic_id'=>$topic_id,
        'create_time'=>time()
     );
     if($room_id && !$topic_id){

         $sub_Data = pdo_fetch("SELECT * FROM ".tablename("chat_subscribe")." WHERE uid=:uid and room_id=:room_id",array(":uid"=>$uid,'room_id'=>$room_id));
         if($sub_Data){

            $data=['code'=>102,'msg'=>'已关注'];
            echo json_encode($data);exit;
         }else{
             $update=pdo_insert('chat_subscribe',$sub_data);
             if($update){

                  $data=['code'=>100,'msg'=>'关注成功'];
                  echo json_encode($data);exit;
             }else{

                $data=['code'=>101,'msg'=>'关注失败'];
                  echo json_encode($data);exit;
             }

         }

     }else{
        $sub_Data = pdo_fetch("SELECT * FROM ".tablename("chat_subscribe")." WHERE uid=:uid and room_id=:room_id and topic_id=:topic_id",array(":uid"=>$uid,'room_id'=>$room_id,':topic_id'=>$topic_id));
         if($sub_Data){

            $data=['code'=>102,'msg'=>'已关注'];
            echo json_encode($data);exit;
         }else{
             $update=pdo_insert('chat_subscribe',$sub_data);
             if($update){

                  $data=['code'=>100,'msg'=>'关注成功'];
                  echo json_encode($data);exit;
             }else{

                $data=['code'=>101,'msg'=>'关注失败'];
                  echo json_encode($data);exit;
             }

         }

     }


 
}
