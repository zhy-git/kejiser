<?php
global $_GPC,$_W;
$uniacid = $_W['uniacid'];
$user_info=cache_load('user_info');
if(!$user_info){
    $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}
$uid=$user_info['id'];

//添加收藏
if($_GPC['op'] == 'add') {
    $room_id = !empty($_GPC['room_id'])?$_GPC['room_id']:null;
    $series_id = !empty($_GPC['series_id'])?$_GPC['series_id']:null;
    $topic_id = !empty($_GPC['topic_id'])?$_GPC['top_id']:null;
    if(empty($_GPC['room_id']) && empty($_GPC['room_id']) && empty($_GPC['room_id']))
    {
        echo json_encode(['code'=>0,'msg'=>'添加失败','data'=>[]]);exit;
    }
    $data = [
       'uniacid'=>$uniacid,
       'room_id'=>$_GPC['room_id'],
       'series_id'=>$_GPC['series_id'],
       'topic_id'=>$_GPC['series_id'],
       'user_uid'=>$user_info->uid,
       'create_time'=>time()
    ];

    pdo_insert('chat_collect',$data);
    $result = ['code'=>1,'msg'=>'添加成功','data'=>[]];
    echo json_encode($result);
}

//删除收藏
if($_GPC['op'] == 'del') {
    $id = $_GPC['id'];
    $data = pdo_get('chat_collect',['id'=>$id]);
    if(!empty($data))
    {
        pdo_delete('chat_collect',['id'=>$data['id']]);
    }
    $result = ['code'=>1,'msg'=>'删除成功','data'=>''];
    echo json_encode($result);
}

//我的收藏
if ($_GPC['op'] == 'my_collect') {
    $page = !empty($_GPC['page'])?$_GPC['page']:1;
    $size = !empty($_GPC['size'])?$_GPC['size']:5;

    $type = !empty($_GPC['type'])?$_GPC['type']:1;
    $data = load()->object('query')
        ->from('chat_collect','c')
        ->leftjoin('chat_topic','t')
        ->on('t.id','c.topic_id')
        ->leftjoin('chat_tags','ta')
        ->on('t.tags','ta.id')
        ->select('c.id,t.id as topic_id,t.topic_icon,t.topic_name,ta.tag_name,t.topic_desc,t.room_paymoney,t.look_numbers,t.topic_style')
        ->where(['c.user_uid'=>$uid,'t.topic_style'=>$type])
        ->getall();
    //总页数
    $count = ceil(count($data)/$size);
    //分页截取
    $res = array_slice($data,($page-1)*$size,$size);

    $result = ['code'=>1,'msg'=>'查询成功','count'=>$count,'data'=>$res];
    echo json_encode($result);
}


