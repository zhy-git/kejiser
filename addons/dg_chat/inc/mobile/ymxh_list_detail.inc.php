<?php
/**
 * 作者：陆新泽
 * 时间：2018.9.27
 * 描述：获取视频详情
 * 参数：
 */
global $_GPC,$_W;
$uniacid=$_W['uniacid'];
$topic_id=$_GPC['topic_id'];


$topic_data = pdo_fetch("select id,uniacid,room_id,series_id,topic_name,topic_desc,topic_icon,topic_imgs,topic_style,look_numbers,tags from " . tablename('chat_topic') . "where uniacid=:uniacid and id=:id ", array(':uniacid' => $uniacid, ':id' => $topic_id));
if($topic_data['series_id']){
    //如果是系列课就查出章节
    $room_data = pdo_fetch("select id,uniacid,room_id,room_name,room_desc,create_nickname,create_avatar,series_id,room_icon,chat_imgs from " . tablename('chat_room') . "where uniacid=:uniacid and id=:id ", array(':uniacid' => $uniacid, ':id' => $topic_data['series_id']));
    // str_replace函数替换，  stripslashes函数删除反斜杠 ，explode函数是将字符串散打成数组。
    $room_data['chat_imgs']=explode(',',str_replace(['[',']','"','&quot;'], '', stripcslashes($room_data['chat_imgs'])));

    $series_data = pdo_fetchall("select id,uniacid,room_id,series_id,topic_name,topic_desc,topic_icon,topic_imgs,topic_style,look_numbers from " . tablename('chat_topic') . "where uniacid=:uniacid and series_id=:series_id ", array(':uniacid' => $uniacid, ':series_id' => $topic_data['series_id']));

    $list_data=[];
    foreach($series_data as $key=>$val){
        $list_data[]=['id'=>$val['id'],'room_id'=>$val['room_id'],'topic_name'=>$val['topic_name']];
    }
    $room_data['list']=$list_data;
    
}
 //相关视频
    
    //$lative_data = pdo_fetchall("select id,uniacid,room_id,series_id,topic_name,topic_desc,topic_icon,topic_imgs,topic_style,look_numbers,tags from " . tablename('chat_topic') . "where uniacid=:uniacid and tags=:tags ", array(':uniacid' => $uniacid, ':tags' =>$topic_data['tags']));

     $lative_data = pdo_fetch("select id,uniacid,room_id,series_id,topic_name,topic_desc,topic_icon,topic_imgs,topic_style,look_numbers,tags from " . tablename('chat_topic') . "where uniacid=:uniacid and tags=:tags ", array(':uniacid' => $uniacid, ':tags' =>$topic_data['tags']));
   // str_replace函数替换，  stripslashes函数删除反斜杠 ，explode函数是将字符串散打成数组。
     $lative_data['topic_imgs']=explode(',', str_replace(['[',']','"','&quot;'], '', stripslashes($lative_data['topic_imgs'])));


     

//评论
$pindex = max(1, intval($_GPC['page']));
$psize = 5;
$total = pdo_fetchcolumn("SELECT COUNT(0) FROM " . tablename("chat_comment") . " WHERE uniacid=:uniacid and room_id=:room_id and series_id=:series_id",array(':uniacid' =>$uniacid, ':room_id'=>$topic_data['room_id'],':series_id'=>$topic_data['series_id']));
$pages = ceil($total / $psize);
if ($pindex > $pages && $pages > 0) {
    $pindex = $pages;
}
if($topic_data['series_id']){

        $comment_data = pdo_fetchall("select * from " . tablename('chat_comment') . " where uniacid=:uniacid and room_id=:room_id and series_id=:series_id order by create_time desc limit ". ($pindex - 1) * $psize . ',' . $psize, array(':uniacid' =>$uniacid, ':room_id'=>$topic_data['room_id'],':series_id'=>$topic_data['series_id']));
}else{
     $comment_data = pdo_fetchall("select * from " . tablename('chat_comment') . "where uniacid=:uniacid and room_id=:room_id ", array(':uniacid' => $uniacid, ':room_id' =>$topic_data['room_id']));
}

$data=['code'=>100,'room_data'=>$room_data,'lative_data'=>$lative_data,'commemt_data'=>$comment_data,'msg'=>'加载成功'];
  echo json_encode($data);