<?php
/* 陆新泽 发表评论*/
global $_GPC, $_W;

//上传图片
if(!empty($_GPC['mediaid'])){
    header('content-type:application/json;charset=utf8');
    $account = WeAccount::create($_W['account']);
    $medias['media_id']=$_GPC['mediaid'];
    $medias['type']="image";
    $filename=$this->downloadMedia($medias);

    $fmdata = array(
            "success" => 1,
            "imgurl" =>tomedia($filename),
    );

    echo json_encode($fmdata);
    exit();
}
$uniacid=$_W['uniacid'];
$room_id=$_GPC['room_id'];
$series_id=$_GPC['series_id'];
$create_openid=$_GPC['create_openid'];
$topic_id=$_GPC['topic_id'];
$imgs=$_GPC['imgs'];
$star=$_GPC['star'];
$t_star=$_GPC['t_star'];
$comment=$_GPC['comment'];
$t_comment=$_GPC['t_comment'];
$create_time=time();
if(!$comment){
	$data=['code'=>102,'msg'=>'评论不能为空'];
	echo json_encode($data);exit;
}
$comment_data=pdo_fetch("SELECT * FROM ".tablename("chat_comment")." where uniacid=:uniacid AND topic_id=:topic_id", array(":uniacid"=>$uniacid,':topic_id'=>$topic_id));

if($comment_data){
		$data = ['code'=>103,'msg'=>'已评论'];
	echo json_encode($data);exit;
}

$user_data = array(
    'uniacid' => $uniacid,
    'room_id' => $room_id,
    'series_id'=>$series_id,
    'create_openid'=>$create_openid,
    'topic_id'=>$topic_id,
    'imgs'=>$imgs,
    'star'=>$star,
    't_star'=>$t_star,
    'comment'=>$comment,
    't_comment'=>$t_comment,
    'create_time'=>$create_time
);

$result = pdo_insert('chat_comment', $user_data);

if (!empty($result)) {
    //$uid = pdo_insertid();
    $data=['code'=>100,'msg'=>'添加评论成功'];
   echo json_encode($data);
}else{

	$data=['code'=>101,'msg'=>'添加评论失败'];
	echo json_encode($data);
}