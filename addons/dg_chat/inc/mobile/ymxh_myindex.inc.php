<?php
/* 陆新泽 我的首页*/

global $_GPC, $_W;
$user_info=cache_load('user_info');

if(!$user_info){
  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}

$uid=$user_info['id'];
$uniacid=$_W['uniacid'];
//我的个人信息
$userData=pdo_fetch("SELECT id,nickname,mobile,avatar,level FROM ".tablename("chat_users")." WHERE id=:id and uniacid=:uniacid",array(':id'=>$uid,':uniacid'=>$uniacid));
//我关注的直播间
$userData['sub_data']=pdo_fetchcolumn("SELECT count(0) FROM ".tablename("chat_subscribe")." WHERE uid=:uid and uniacid=:uniacid",array(':uid'=>$userData['id'],':uniacid'=>$uniacid));
 //我直播间的粉丝
$room_data=pdo_fetch("SELECT id,room_id,room_name,room_desc,create_uid FROM ".tablename("chat_room")." WHERE create_uid=:create_uid and uniacid=:uniacid and room_id is not null",array(':create_uid'=>$userData['id'],':uniacid'=>$uniacid));

 if($room_data){

  $userData['sub_number']=pdo_fetchcolumn("SELECT count(0) FROM ".tablename("chat_subscribe")." WHERE room_id=:room_id and uniacid=:uniacid",array(':room_id'=>$room_data['room_id'],':uniacid'=>$uniacid));
  
}else{
	$userData['sub_number']=0;
}
//我的直播间评论人数

 $userData['sub_comment']=pdo_fetchcolumn("SELECT count(0) FROM ".tablename("chat_comment")." WHERE room_id=:room_id and uniacid=:uniacid",array(':room_id'=>$room_data['room_id'],':uniacid'=>$uniacid));

$data=['code'=>100,'data'=>$userData,'msg'=>'加载成功'];
echo json_encode($data);
