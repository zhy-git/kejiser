<?php
/**
 * 作者：陆新泽
 * 时间：2018.9.27
 * 描述：获取即将上线列表
 * 参数：
 */
global $_GPC,$_W;
$uniacid=$_W['uniacid'];
$is_index=$_GPC['is_index'];//是否显示在首页，0不是首页，1是首页
$time=time();
$op=$_GPC['op'];
$tags_id=$_GPC['tags_id'];
 $page = !empty($_GPC['page'])?$_GPC['page']:1;
 $size = !empty($_GPC['size'])?$_GPC['size']:10;
//查询话题表，开始时间和当前时间作比较
if($op=='index') {
    $topic_data = pdo_fetchall("select id,uniacid,series_id,topic_name,topic_desc,CONCAT('/attachment/',topic_icon) as topic_icon,topic_imgs,topic_style,room_paymoney,look_numbers from " . tablename('chat_topic') . "where uniacid=:uniacid and begin_time<=:begin_time and is_index=:is_index order by begin_time desc limit 4 ", array(':uniacid' => $uniacid, ':begin_time' => $time, ':is_index' => $is_index));
    if ($topic_data) {
        $data = ['code' => 100, 'data' => $topic_data, 'msg' => '加载成功'];
        echo json_encode($data);
    } else {
        $data = ['code' => 100, 'data' => '', 'msg' => '暂无数据'];
        echo json_encode($data);
    }
}elseif($op=='list'){
    //即将上线列表
    //轮播广告
    $banner=pdo_fetchall("SELECT * FROM ".tablename("chat_banner")." WHERE enabled=1 AND uniacid=:uniacid AND position=2 ORDER BY displayorder LIMIT 6",array(":uniacid"=>$uniacid));
    //分类标签
    $tags=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid AND parentid=0 ORDER BY displayorder ",array(":uniacid"=>$uniacid));
    //系列课列表
    $topicData=pdo_fetchall("SELECT id,uniacid,series_id,topic_name,topic_desc,CONCAT('/attachment/',topic_icon) as topic_icon,topic_imgs,topic_style,look_numbers,tags,star FROM ".tablename("chat_topic")." WHERE uniacid=:uniacid AND tags=:tags AND begin_time>=:begin_time order by begin_time",array(":uniacid"=>$uniacid,':tags'=>$tags_id,':begin_time'=>$time));
$count = ceil(count($topicData)/$size);
     $res = array_slice($topicData,($page-1)*$size,$size);
    $data=['code'=>100,'count'=>$count,'banner'=>$banner,'tags'=>$tags,'topicData'=>$res,'msg'=>'加载成功'];
    echo json_encode($data);
}