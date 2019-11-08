<?php
global $_GPC,$_W;
$this->load("mcrypt");
$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();
$head_imgurl=$user_info->headimgurl;
$nickname=$user_info->nickname;
$topic_id=$_GPC['topic_id'];
	if(empty($topic_id)){
		exit;
	}

	$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:id LIMIT 1",array(":id"=>$topic_id));
	if(empty($topic)){
		exit;
	}

	if(!empty($_GPC['invite'])){
		$is_invite=pdo_fetch("SELECT * FROM ".tablename("chat_topicguest")." WHERE topic_id=:topic_id AND guest_openid=:openid",array(":topic_id"=>$topic['id'],":openid"=>$user_info->openid));
		if(empty($_GPC["real_name"])){
			if(!empty($is_invite)){
				header("Location:".$this->createMobileUrl('chat',array('topic_id'=>$topic_id)));
				exit;
			}
			$db_user=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id",array(":id"=>$user_info->uid));
			include $this->template('my_invite_info');
			exit;
		}
		
		$invite=pdo_fetch("SELECT * FROM ".tablename("chat_invite")." WHERE invite_encrypt=:invite_encrypt",array(":invite_encrypt"=>$_GPC['invite']));
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
		
		if(empty($is_invite)){
			$guest_data=array(
					'uniacid'=>$uniacid,
					'room_id'=>$invite['room_id'],
					'topic_id'=>$invite['topic_id'],
					'uid'=>$user_info->uid,
					'guest_openid'=>$user_info->openid,
					'guest_avatar'=>$user_info->headimgurl,
					'guest_nickname'=>$user_info->nickname,
					'create_time'=>time()
			);
			
			pdo_insert("chat_topicguest",$guest_data);
			
			$updatedata=array(
					'click_openid'=>$user_info->openid,
					'click_nickname'=>$user_info->nickname,
					'click_time'=>time(),
					'invite_status'=>2
			);
			pdo_update("chat_invite",$updatedata,array("id"=>$invite['id']));
		}
		
		$redirect_url=$this->createMobileUrl('chat',array('topic_id'=>$invite['topic_id']));
		//需要增加过渡跳转
		
		$fmdata=array(
				"success"=>1,
				"msg"=>"邀请成功！",
				"data"=>$redirect_url
		);
		echo json_encode($fmdata);
		exit;
	 }

    $chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id",array(":room_id"=>$topic['room_id']));
    $is_manager=$this->is_manager($chat_room['room_id'])||$chat_room['create_openid']==$user_info->openid;
    
	if(!$is_manager){
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
			"invite_type"=>"guest",
			"room_id"=>$topic['room_id'],
			"topic_id"=>$topic['id'],
			"invite_time"=>time(),
			"invite_openid"=>$user_info->openid,
			"invite_status"=>1
	);
	
	pdo_insert("chat_invite",$invitedata);
	
	$sharedata=array(
			"title"=>$topic['chat_name'],
			"desc"=>$user_info->nickname."向您发出嘉宾邀请,演讲主题为『".$topic['topic_name']."』,点击同意。30分钟内有效！",
			"link"=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']."&invite=".$invite_encrypt,
			"imgUrl"=>$chat_room['room_icon'],
	);

  include $this->template('topic_guest_invite');