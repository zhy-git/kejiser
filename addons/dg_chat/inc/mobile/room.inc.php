<?php
global $_GPC,$_W;
$this->load(array("Dg_Base","Chat_Room"));		
$uniacid = $_W['uniacid'];
$cfg=$this->module['config'];
$user_info=$this->getUserInfo();
/*单房间版逻辑开始*/
$firstRoom=Chat_Room::getFirstRoom($uniacid);
if($firstRoom){
	ob_end_clean();
	$room_id=$firstRoom['room_id'];
	//header("Location:".$this->createMobileUrl('c_index',array("room_id"=>$room_id)));
	/*多房间版跳转*/
	header("Location:".$this->createMobileUrl('index'));
	exit;
}else{
	ob_end_clean();
	header("Location:".$this->createMobileUrl('chat_create'));
	exit;
}
/*单房间版逻辑结束*/


/*平台版直接跳到我的页面*/
ob_end_clean();
header("Location:".$this->createMobileUrl('my_chat'));
exit;
