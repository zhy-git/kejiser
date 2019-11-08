<?php
global $_GPC,$_W;
$this->load("mcrypt");
$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();
$head_imgurl=$user_info->headimgurl;
$nickname=$user_info->nickname;
$room_id=$_GPC['room_id'];
if(empty($room_id)){
	exit;
}

$room_id=intval($room_id);
	$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
	if(empty($chat_room)){
		exit;
	}
	
	if(!empty($_GPC['invite'])){
		$is_manager=pdo_fetch("SELECT * FROM ".tablename("chat_roommanager")." WHERE room_id=:room_id AND manage_openid=:openid",array(":room_id"=>$room_id,":openid"=>$user_info->openid));
		if(!empty($is_manager)){
			header("Location:".$this->createMobileUrl('chat_index',array('room_id'=>$room_id)));
			exit;
		}
		$invite=pdo_fetch("SELECT * FROM ".tablename("chat_invite")." WHERE invite_encrypt=:invite_encrypt",array(":invite_encrypt"=>$_GPC['invite']));
		if(empty($_GPC["real_name"])){
			$db_user=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id",array(":id"=>$user_info->uid));
			include $this->template('my_invite_info');
			exit;
		}
		
		header('content-type:application/json;charset=utf8');
		$fmdata=array(
				"success"=>-1,
				"msg"=>"无效的邀请链接！"
		);
		
		if(empty($invite)){
			echo json_encode($fmdata);
			exit;
		}
		
		//链接失效
		if(time()-$invite['invite_time']>34*60||$invite['invite_status']==2){
			$fmdata=array(
					"success"=>-1,
					"msg"=>"抱歉,该邀请链接已经失效！"
			);
			echo json_encode($fmdata);
			exit;
		}
		
		$data=array(
				"real_name"=>$_GPC['real_name'],
				"user_title"=>$_GPC['user_title'],
				"user_desc"=>$_GPC['user_desc']
		);
		
		pdo_update("chat_users",$data,array("id"=>$user_info->uid));
		
		if(empty($is_manager)){	
			$managedata=array(
					'uniacid'=>$uniacid,
					'room_id'=>$invite['room_id'],
					'uid'=>$user_info->uid,
					'manage_openid'=>$user_info->openid,
					'manage_avatar'=>$user_info->headimgurl,
					'manage_nickname'=>$user_info->nickname,
					'create_time'=>time()
			);
			
			pdo_insert("chat_roommanager",$managedata);
			$updatedata=array(
					'click_openid'=>$user_info->openid,
					'click_nickname'=>$user_info->nickname,
					'click_time'=>time(),
					'invite_status'=>2
			);
			pdo_update("chat_invite",$updatedata,array("id"=>$invite['id']));
		}
		
		$redirect_url=$this->createMobileUrl('chat_index',array('room_id'=>$invite['room_id']));
				
		$fmdata=array(
				"success"=>1,
				"msg"=>"邀请成功！",
				"data"=>$redirect_url
		);
		echo json_encode($fmdata);
		exit;
	}

	if($chat_room['create_openid']!=$user_info->openid){
		exit;
	}

	$maxinvite=10000001;
	$maxinvite_id=pdo_fetchcolumn("SELECT MAX(invite_id) FROM ".tablename("chat_invite"));
	if($maxinvite_id){
		$maxinvite=intval($maxinvite_id)+1;
	}
	
	$invite_encrypt=dgmcrypt::md5_encrypt($maxinvite);
		
	$invitedata=array(
			"uniacid"=>$uniacid,
			"invite_id"=>$maxinvite,
			"invite_encrypt"=>$invite_encrypt,
			"invite_type"=>"manager",
			"room_id"=>$room_id,
			"invite_time"=>time(),
			"invite_openid"=>$user_info->openid,
			"invite_status"=>1
	);
	
pdo_insert("chat_invite",$invitedata);
	
$sharedata=array(
		"title"=>$chat_room['room_name'],
		"desc"=>$chat_room['create_nickname']."向您发出管理员邀请,点击同意。30分钟内有效！",
		"link"=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']."&invite=".$invite_encrypt,
		"imgUrl"=>$chat_room['room_icon'],
);

include $this->template('room_manager_invite');