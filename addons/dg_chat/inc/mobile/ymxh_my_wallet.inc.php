<?php
//我的钱包
global $_GPC,$_W;
$uniacid=$_W['uniacid'];
$user_info=cache_load('user_info');

if(!$user_info){
  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}

if(empty($user_info))
{
    $result=['code'=>0,'msg'=>'请登录','data'=>''];
    echo json_encode($result);exit;

}
$uid=$user_info['id'];

$userData=pdo_fetch("SELECT id,balance, nickname FROM ".tablename("chat_users")." WHERE id=:id and uniacid=:uniacid",array(":id"=>$uid,':uniacid'=>$uniacid));
if($userData){
    $data=['success'=>'1','data'=>$userData,'msg'=>'加载成功'];
    echo json_encode($data);
}else{
    $data=['success'=>'-1','data'=>'','msg'=>'暂无数据'];
    echo json_encode($data);
}


