<?php
global $_GPC,$_W;	
$this->load(array("Dg_Base","Chat_RoomCashSum"));

$uniacid = $_W['uniacid'];

$redirect_uri="{$_W['siteroot']}app/".$this->createMobileUrl('chat_setting');
$user_info=$this->getUserInfo($redirect_uri);
$room_id=$_GPC['room_id'];

if(empty($room_id)){
	exit;
}

$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
$room_url=$this->createMobileUrl('chat_index',array("room_id"=>$room_id));
$roommanager_url=$this->createMobileUrl('room_manager',array("room_id"=>$room_id));
$blacks_url=$this->createMobileUrl('shutup_manage',array("room_id"=>$room_id));
$roomcash_url=$this->createMobileUrl('room_cash',array("room_id"=>$room_id));
// var_dump($chat_room);
$is_supermanager=$this->is_SuperManager();
$is_creater=$chat_room['create_openid']==$user_info->openid;
if(!empty($chat_room['chat_imgs'])){

	$imgs=json_decode($chat_room['chat_imgs'],true);

	 for($i=0;$i<count($imgs);$i++){
		$dd.='<dd class="album-item album-img" style="background-image: url('.$imgs[$i].');"><i onclick="del(this);"></i></dd>';
	 }
}
$data=array();
//	if(){
//		header('content-type:application/json;charset=utf8');
//		$topic_imgs=json_encode($_GPC['chat_imgs']);
//		$list = pdo_update("chat_room",array('chat_imgs'=>$topic_imgs),array("id"=>$chat_room['id']));
//		if($list ==1){
//			$fmdata = array(
//				"success" => 1
//			);
//		}
//		echo json_encode($fmdata);exit();
//	}
	if(!empty($_GPC['reward_tags']) || !empty($_GPC['chat_imgs'])){
		header('content-type:application/json;charset=utf8');
		$reward_tags=$_GPC['reward_tags'];
		$list = pdo_update("chat_room",array('tags'=>$reward_tags),array("id"=>$chat_room['id']));
		if($_GPC['chat_imgs']!=null){
			$topic_imgs=json_encode($_GPC['chat_imgs']);
			
		}else{
			$topic_imgs = '';
		}
		$list1 = pdo_update("chat_room",array('chat_imgs'=>$topic_imgs),array("id"=>$chat_room['id']));
		if($list ==1 ||$list1){
			$fmdata = array(
				"success" => 1
			);
		}
		echo json_encode($fmdata);exit();
	}
if(!empty($_GPC['room_icon'])){
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['room_icon'];
	$medias['type']="image";
	$filename=$account->downloadMedia($medias);
	$data['room_icon']=tomedia($filename);
}
if(!empty($_GPC['bg_img'])){
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['bg_img'];
	$medias['type']="image";
	$filename=$account->downloadMedia($medias);
	$data['bg_img']=tomedia($filename);
}
if(!empty($_GPC['produce'])){
	header('content-type:application/json;charset=utf8');
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['produce'];
	$medias['type']="image";
	$filename=$account->downloadMedia($medias);
	$chat_imgs=tomedia($filename);
	$fmdata = array(
			"success" => 1,
			"imgurl" =>tomedia($filename),
	);
	echo json_encode($fmdata);exit();
}
if(!empty($_GPC['qrcode_url'])){
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['qrcode_url'];
	$medias['type']="image";
	$filename=$account->downloadMedia($medias);
	$data['qrcode_url']=tomedia($filename);
}

if(!empty($_GPC['lesson_before'])){
	$data['is_sub'] = $chat_room['is_sub'] ==1?0:1; 
}
if(!empty($_GPC['room_name'])){
	$data['room_name']=$_GPC['room_name'];
}

if(!empty($_GPC['room_desc'])){
	$data['room_desc']=$_GPC['room_desc'];
}

if(count($data)>0){
	pdo_update("chat_room",$data,array("id"=>$chat_room['id']));
	header('content-type:application/json;charset=utf8');
	
    $fmdata = array(
				"success" => 1,
				"data" =>current(array_values($data)),
	);    
	echo json_encode($fmdata);
	exit();
}

$room_nanager=pdo_fetchall("SELECT manage_avatar FROM ".tablename("chat_roommanager")." WHERE room_id=:room_id",array(":room_id"=>$room_id));
/*处理标签开始*/
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
/*处理标签结束*/

$cfg=$this->module['config'];
$percent_plat=empty($cfg['plat_percent'])?2:$cfg['plat_percent'];
$qr_code=empty($cfg['qr_code'])?1:$cfg['qr_code'];
$percent_plat=$percent_plat/100.00;
$percent_plat=1-$percent_plat;

$room_cash=Chat_RoomCashSum::getNotCash($uniacid, $room_id,$percent_plat);

include $this->template('chat_setting');