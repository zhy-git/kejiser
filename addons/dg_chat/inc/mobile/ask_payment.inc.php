<?php
global $_GPC,$_W;	

$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];
$uid=0;
if(!empty($_GPC['uid'])){
	$uid=intval($_GPC['uid']);
}
//判断是否是自己的主页

$user_info=$this->getUserInfo();
if($uid==0){
	$uid=$user_info->uid;
}

$nickname=$user_info->nickname;
$db_user=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id",array(":id"=>$uid));
$head_imgurl=$db_user['avatar'];
$head_imgurl=str_replace("/46","/132",$head_imgurl);

/*处理付费旁听后的真实数据获取结束*/


exit;