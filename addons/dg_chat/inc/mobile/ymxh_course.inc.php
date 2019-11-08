<?php
global $_GPC,$_W;

require_once (MODULE_ROOT."/class/ymxh/Tags.class.php");

//评论
if($_GPC['op'] == 'comment') {
    $tid = $_GPC['tid'];
    $page = !empty($_GPC['page'])?$_GPC['page']:1;
    $size = !empty($_GPC['size'])?$_GPC['size']:10;
    if(!empty($tid))
    {
        $where = ['c.topic_id'=>$tid];
    }
    else
    {
        $where = ['c.room_id'=>$_GPC['rid']];
    }
    $query = load()->object('query');
    $data = $query->from('chat_comment', 'c')
        ->leftjoin('chat_users','u')
        ->on('c.create_openid', 'u.openid')
        ->select('c.id,u.avatar,u.nickname,c.star,c.comment,c.t_star,c.t_comment,c.create_time')
        ->where($where)
        ->getall();

    //总页数
    $count = ceil(count($data)/$size);

    if(!empty($data))
    {
        foreach ($data as $key => $value)
        {
            $data[$key]['create_time'] = date('Y-m-d H:i:s',$value['create_time']);
        }
    }
    //分页截取
    $res = array_slice($data,($page-1)*$size,$size);

    $result = ['code'=>1,'msg'=>'查询成功','count'=>$count,'data'=>$res];
    echo json_encode($result);
}

//视频播放
if($_GPC['op'] == 'details') {
    $cid = $_GPC['cid'];
    $query = load()->object('query');
    $data = $query->from('chat_topic', 't')
        ->leftjoin('chat_room','r')
        ->on('t.room_id', 'r.room_id')
        ->select('t.id','t.file_id','t.room_id','t.topic_status','t.series_id','t.topic_icon','t.topic_name','t.topic_desc','t.vedio_id','t.topic_imgs','r.create_avatar','r.room_name','r.room_desc')
        ->where('t.id', $cid)
        ->get();
    // str_replace函数替换，  stripslashes函数删除反斜杠 ，explode函数是将字符串散打成数组。
     $data['topic_imgs']=explode(',', str_replace(['[',']','"','&quot;'], '', stripslashes($data['topic_imgs'])));
    if(empty($data))
    {
        $result = ['code'=>0,'msg'=>'课程不存在','data'=>$data];
        echo json_encode($result);exit;
    }
    if(!empty($data['series_id']))
    {
        $data['series'] = pdo_fetchall("SELECT id,room_id,series_id,topic_icon,topic_name,topic_desc,vedio_id FROM ".tablename('chat_topic')." WHERE series_id = :sid ORDER BY topic_order ASC", array(':sid'=>$data['series_id']));
    }
    else
    {
        $data['series'] = [];
    }
    $course = pdo_fetchall("SELECT id,room_name,room_desc,room_icon,series_id FROM ".tablename("chat_room")." WHERE series_id=:sid",array(':sid'=>$data['room_id']));
    if(!empty($course)){
        foreach ($course as $key => $value){
            $course[$key]['look_num'] = pdo_query("SELECT sum('look_numbers') bb FROM ".tablename("chat_topic")." WHERE series_id=:sid",array(':sid'=>$value['id']));
        }
    }
    $course2 = pdo_fetchall("SELECT id,topic_name,topic_desc,topic_icon,series_id,look_numbers FROM ".tablename("chat_topic")." WHERE room_id=:rid AND series_id IS null",array(':rid'=>$data['room_id']));
    $data['other_course'] = array_slice(array_merge($course,$course2),0,4);
    $result = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($result);
}

//排行榜
if($_GPC['op'] == 'ranking')
{
    $code = !empty($_GPC['code'])?$_GPC['code']:'vedio';
    if($code == 'record')                    //视频
    {
        $data = load()->object('query')
                ->from('chat_topic','t')
                ->leftjoin('chat_tags','ta')
                ->on('t.tags','ta.id')
                ->select('t.id,t.topic_icon,t.topic_name,ta.tag_name,t.room_paymoney,t.look_numbers')
                ->where(['topic_style'=>3])
                ->getall();
    }
    elseif($code == 'audio')                    //语音
    {
        $data = load()->object('query')
            ->from('chat_topic','t')
            ->leftjoin('chat_tags','ta')
            ->on('t.tags','ta.id')
            ->select('t.id,t.topic_icon,t.topic_name,ta.tag_name,t.room_paymoney,t.look_numbers')
            ->where(['topic_style'=>1])
            ->getall();
    }
    elseif($code == 'vedio')                    //直播
    {
        $data = load()->object('query')
            ->from('chat_topic','t')
            ->leftjoin('chat_tags','ta')
            ->on('t.tags','ta.id')
            ->select('t.id,t.topic_icon,t.topic_name,ta.tag_name,t.room_paymoney,t.look_numbers')
            ->where(['topic_style'=>2])
            ->getall();
    }
    elseif($code == 'teacher')                    //推荐老师
    {
        $row = load()->object('query')
            ->from('chat_topic','t')
            ->leftjoin('chat_room','r')
            ->on('t.room_id','r.room_id')
            ->select('r.id,r.room_id,r.room_name,r.room_desc,r.room_icon,t.look_numbers')
            ->getall();
        $data = [];
        $aa = [];
        foreach ($row as $key =>$value){
            if(!in_array($value['room_id'],$aa))
            {
                $aa[] = $value['room_id'];
                $value['look_numbers'] = 0;
                $data[] = $value;
            }
        }
        foreach ($row as $key =>$value){
            foreach ($data as $k =>$v){
                $data[$k]['count_courses'] = pdo_fetch("SELECT count(*) AS aa FROM ".tablename('chat_room')." WHERE series_id = :uid", array(':uid' => $v['room_id']))['aa'];
                $data[$k]['count_student'] = pdo_fetch("SELECT count(*) AS aa FROM ".tablename('chat_joinusers')." WHERE room_id = :uid", array(':uid' => $v['room_id']))['aa'];
                $data[$k]['recommend_course'] = pdo_fetch("SELECT room_name FROM ".tablename('chat_room')." WHERE series_id = :uid ORDER BY create_time DESC LIMIT 1", array(':uid' => $v['room_id']))['room_name'];
                if($value['room_id'] == $v['room_id'])
                {
                    $data[$k]['look_numbers'] += $value['look_numbers'];
                }
            }
        }
        array_multisort(array_column($data,'look_numbers'),SORT_DESC,$data);
    }
    $result = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($result);
}

/**
 * Notes: 直播
 * User: mohufeng
 * Date: 2018/9/30 0029
 * Time: 19:42
 * Remark:
 * @return array
 */
if($_GPC['op'] == 'test')
{
    //以往小视频
    if($_GPC['opp'] == 'played')
    {
        $data = load()->object('query')
            ->from('chat_topic','t')
            ->leftjoin('chat_tags','ta')
            ->on('t.tags','ta.id')
            ->select('t.id,t.topic_icon,t.topic_name,ta.tag_name,t.room_paymoney,t.look_numbers,t.begin_time,t.end_time')
            ->where(['t.end_time !='=>0,'t.end_time <'=>time()])
            ->getall();
        foreach ($data as $key => $value)
        {
            $data[$key]['begin_time'] = date('Y-m-d H:i:s',$value['begin_time']);
            $data[$key]['end_time'] = date('Y-m-d H:i:s',$value['end_time']);
        }
    }
    //正在直播
    if($_GPC['opp'] == 'playing')
    {
        $data = load()->object('query')
            ->from('chat_topic','t')
            ->leftjoin('chat_tags','ta')
            ->on('t.tags','ta.id')
            ->select('t.id,t.topic_icon,t.topic_name,ta.tag_name,t.room_paymoney,t.look_numbers')
            ->where(['t.topic_status'=>1])
            ->getall();
    }
    //直播倒计时
    if($_GPC['opp'] == 'countdown')
    {
        $data = load()->object('query')
            ->from('chat_topic','t')
            ->leftjoin('chat_tags','ta')
            ->on('t.tags','ta.id')
            ->select('t.id,t.topic_icon,t.topic_name,ta.tag_name,t.room_paymoney,t.look_numbers,t.begin_time')
            ->where(['t.begin_time >'=>time()])
            ->orderby('t.begin_time','ASC')
            ->getall();
        foreach ($data as $key => $value)
        {
            $data[$key]['begin_time'] = date('Y-m-d H:i:s',$value['begin_time']);
        }
    }

    //一对一直播
    //以往直播
    $result = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($result);
}
