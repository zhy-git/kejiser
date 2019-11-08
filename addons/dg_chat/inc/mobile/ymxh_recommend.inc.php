<?php
global $_GPC,$_W;
$page = !empty($_GPC['page'])?$_GPC['page']:0;
//推荐课程
if($_GPC['op'] == 'courses') {

    //最新还是最热
    if (!empty($_GPC['ping']) && $_GPC['ping'] == 'new') {
        $order = 'create_time';
    }
    else
    {
        $order = 'look_numbers';
    }

    $data = pdo_fetchall("SELECT id,CONCAT('/attachment/',topic_icon) as topic_icon,topic_imgs,look_numbers FROM ".tablename('chat_topic')." ORDER BY ".$order." DESC", array());
    //换一批或上拉加载
    if(!empty($_GPC['type']) && $_GPC['type'] == 'huan')
    {
        $key = array_rand($data,3);
        $row = [];
        foreach($key as $v){
            $row[] = $data[$v];
        }
    }
    elseif(!empty($_GPC['type']) && $_GPC['type'] == 'jia')
    {
        $row = array_slice($data,$page*5,5);
    }

    $result = ['code'=>1,'msg'=>'查询成功','data'=>$row];
    echo json_encode($result);
}

//推荐老师
if($_GPC['op'] == 'teachers')
{
    $topics = pdo_fetchall("SELECT room_id,look_numbers FROM ".tablename('chat_topic'), array());
    //将老师按点击量降序
    $aa = array();
    $bb = array();
    foreach ($topics as $key => $vaule){
        if(!in_array($vaule['room_id'],$bb))
        {
            $bb[] = $vaule['room_id'];
            $aa[] = ['room_id'=>$vaule['room_id'],'look_numbers'=>0];
        }
    }
    foreach ($topics as $key => $vaule){
        foreach ($aa as $k => $v){
            if($vaule['room_id'] == $v['rood_id'])
            {
                $aa[$k]['look_numbers'] += $vaule['look_numbers'];
            }
        }
    }
    $room = array();
    $num = array();
    foreach ($aa as $key => $row) {
        $room[$key]  = $row['room_id'];
        $num[$key] = $row['look_numbers'];
    }
    // 把 $aa 作为最后一个参数，以通用键排序
    array_multisort($num, SORT_DESC, $room, SORT_ASC, $aa);

    $res = array_slice($aa,$page*3,3);
    if(empty($res))
    {
        $res = array_slice($aa,0,3);
    }
    $room_ids = [];
    foreach ($res as $key => $value) {
        $room_ids[] = $value['room_id'];
    }
    //查询老师的数据
    $room_id = '('.implode(",",$room_ids).')';
    $data = pdo_fetchall("SELECT id,room_id,room_name,room_desc,room_icon FROM ".tablename('chat_room')." WHERE room_id IN ".$room_id, array());
    //查询该老师的课程数量+学员人数
    foreach ($data as $key => $value) {
        $data[$key]['count_courses'] = pdo_fetch("SELECT count(*) AS aa FROM ".tablename('chat_room')." WHERE series_id = :uid", array(':uid' => $value['room_id']))['aa'];
        $data[$key]['count_student'] = pdo_fetch("SELECT count(*) AS aa FROM ".tablename('chat_joinusers')." WHERE room_id = :uid", array(':uid' => $value['room_id']))['aa'];
        $data[$key]['recommend_course'] = pdo_fetch("SELECT room_name FROM ".tablename('chat_room')." WHERE series_id = :uid ORDER BY create_time DESC LIMIT 1", array(':uid' => $value['room_id']))['room_name'];
    }
    $result = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($result);
}

if($_GPC['op'] == 'test')
{
    $arr = ['800000004','800000002'];
    $aa = '('.implode(",",$arr).')';
    $data = pdo_fetchall("SELECT id,room_id,room_name,room_desc FROM ".tablename('chat_room')." WHERE room_id IN ".$aa, array());
    echo json_encode($data);
}
