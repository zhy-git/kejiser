<?php
global $_GPC, $_W;

checklogin();


$uniacid=$_W['uniacid'];
load()->func('tpl');
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));

if(!empty($_GPC['keyword_user'])){
	$keyword=$_GPC['keyword_user'];
	$condition="uniacid=".$uniacid." AND (nickname LIKE '%".$keyword."%')";
	$records=pdo_fetchall("SELECT id,nickname,avatar FROM ".tablename("chat_users")." WHERE ".$condition);

	header('content-type:application/json;charset=utf8');
	$fmdata = array(
			"success" => 1,
			"data" =>$records,
	);
	echo json_encode($fmdata);
	exit;
}

if(!empty($_GPC['user_nickname'])){
	$keyword=$_GPC['user_nickname'];
	$condition="uniacid=".$uniacid." AND nickname='".$keyword."'";
	$records=pdo_fetch("SELECT id,nickname,avatar FROM ".tablename("chat_users")." WHERE ".$condition." LIMIT 20");

	header('content-type:application/json;charset=utf8');
	if(!empty($records)){
		$fmdata = array(
			"success" => 1,
			"data" =>$records['id'],
		);
	}else{
		$fmdata = array(
			"success" => -1,
			'data'=>'此用户未找到',
		);
	}

	echo json_encode($fmdata);
	exit;
}
if(checksubmit("submit")){
	empty($_GPC['room_name']) &&message('请填写直播间名称','','error');
	empty($_GPC['select_uid']) &&message('请填写用户','','error');
	$user_id = $_GPC['select_uid'];
	$user_info = pdo_get("chat_users",array('id'=>$user_id));
	$room = pdo_fetchcolumn("select 1 from ".tablename("chat_room")." where uniacid=:uniacid and is_del is null and series_id is null and create_openid =:openid ",array(":uniacid"=>$uniacid,":openid"=>$user_info['openid']));
	if(!empty($room)){
		message("此用户已有直播间",'','error');
	}
	$data=array();
	if(!empty($_GPC['chat_imgs'])){
		for($i=0;$i<count($_GPC['chat_imgs']);$i++){
			$_GPC['chat_imgs'][$i] = tomedia($_GPC['chat_imgs'][$i]);
		}
			$chat_imgs=json_encode($_GPC['chat_imgs']);
	}



	$room_id=pdo_fetchcolumn("SELECT MAX(room_id) FROM ".tablename("chat_room"));
	if(empty($room_id)){
		$room_id=800000001;
	}else{
		$room_id=$room_id+1;
	}
	$data['room_id'] = $room_id;

	$reward_percent = $_GPC['reward_percent'];

	if($reward_percent == 0){
		$data['reward_status'] = 0;
	}else{
		$data['reward_status'] = 1;
	}
	$data['reward_percent'] = $_GPC['reward_percent']/100;
	$subcom_precent = $_GPC['subcom_percent'];
	if($reward_percent == 0){
		$data['subcom_status'] = 0;
	}else{
		$data['subcom_status'] = 1;
	}
	$data['subcom_percent'] = $_GPC['subcom_percent']/100;
	$tags = $_GPC['tags_name'];

	$tags = implode(',',$tags);
	$data['tags'] = $tags;
	$data['room_status']=1;//自动过
	$data['room_name']=$_GPC['room_name'];
	$data['uniacid'] = $uniacid;
	$data["create_uid"]=$user_info['id'];
   	$data["create_openid"]=$user_info['openid'];
   	$data['create_nickname'] =$user_info['nickname'];
   	$data['create_avatar'] = $user_info['avatar'];
   	$data['room_order']=$_GPC['room_order'];
	$data["reward_percent"]= 0;
	$data['room_icon']=tomedia($_GPC['room_icon']);
	$data['bg_img'] = tomedia($_GPC['bg_img']);
	$data['chat_imgs'] = $chat_imgs;
	$data['room_desc']=htmlspecialchars_decode($_GPC['room_desc']);
	$data['create_time'] = time();
	pdo_insert("chat_room",$data);
	$url=$this->createWebUrl("chat_manage");
	message('保存信息成功',$url,'success');
}

include $this->template('room_create');
