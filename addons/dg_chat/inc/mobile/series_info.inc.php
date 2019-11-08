<?php
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();
// if(empty($user_info)){
// 	exit;
// }
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$is_pc=0;
if (strpos($user_agent, 'MicroMessenger') === false) {
	$is_pc=1;
}
$fuid=$_GPC['fuid'];
$cfg=$this->module['config'];
$plent=empty($cfg['plat_percent'])?2:$cfg['plat_percent'];
$room_plent=$cfg['room_paymoneyprace'];
$series_id=$_GPC['series_id'];
$series_id=intval($series_id);
$topic=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE id=:id ",array(":id"=>$_GPC['series_id']));
if(empty($topic)){
	exit;
}


 //计算所投的票数
	 $total=pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename("chat_vote")." WHERE uniacid=:uniacid and music_id=:music_id",array(":uniacid"=>$uniacid,":music_id"=>$series_id));
//投票
if ($_GPC['op']=="vote") {
	 header('content-type:application/json;charset=utf8');


   // var_dump($total1);


     //查询当前用户是否已投票
     $my_vote=pdo_fetch("SELECT * FROM ".tablename("chat_vote")." WHERE uniacid=:uniacid and music_id=:music_id and create_openid=:create_openid ",array(":uniacid"=>$uniacid,":music_id"=>$series_id,"create_openid"=>$user_info->openid));
     if ($my_vote['create_openid']==$user_info->openid && $my_vote['music_id']==$series_id) {
     	    $fmdata = array(
	   			"success" => -1,
	   			"msg"     => "你已投过票。",			
	   	     );
     	     echo json_encode($fmdata);
     	     exit();
     }


  //如果没有投票，则投票
     $data=array(
     	 "uniacid"             => $uniacid,
         "create_openid"       => $user_info->openid,
         "create_nickname"     => $user_info->nickname,
         "music_id"            => $series_id,
         "create_time"         => Time(),
     );
     $row_count=pdo_insert("chat_vote",$data);
     //计算所投的票数
	 $total=pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename("chat_vote")." WHERE uniacid=:uniacid and music_id=:music_id",array(":uniacid"=>$uniacid,":music_id"=>$series_id));
	 $data['total']=$total;

     //将所得的票数直接入库，入库的表是chat_room.
     $vate_data=array(
	   		"vate_number"=>$total,
   		);
     $row_count = pdo_update('chat_room',$vate_data,array('id'=>$_GPC['series_id']));
     

      if($row_count==1){
	   	$fmdata = array(
	   			"success" => 1,
	   			"msg"     => "投票成功。",
	   			"data"   => $data,	   			
	   	);
     }else{
	   	$fmdata = array(
	   			"success" => 2,
	   			"msg"     => "投票失败。",
	   			"data"   => $data, 			
	   	);
    }
     echo json_encode($fmdata);

	 exit();


	

}






//已开课
$last_count = pdo_fetchcolumn('select count(*) from'.tablename("chat_topic")." where uniacid=:uniacid and series_id=:series_id and is_del is null",array(":uniacid"=>$uniacid,":series_id"=>$series_id));
$is_subscribe=pdo_fetchcolumn("SELECT 1 FROM ".tablename("chat_subscribe")." WHERE openid=:openid AND room_id=:room_id AND sub_type='room' LIMIT 1",array(":openid"=>$user_info->openid,":room_id"=>$topic['series_id']));
if(!empty($is_subscribe)){
	$ok = 1;
}
if(!empty($_GPC['delete'])){
	$topic_id =$_GPC['topic_id'];
	pdo_update("chat_topic",array("is_del"=>1),array("id"=>$topic_id));
	header('content-type:application/json;charset=utf8');
	$fmdata =array(
			"data"=>'成功',
			'success'=>-1
		);
	echo json_encode($fmdata);exit;
}
//判断是否关注
if(!empty($_GPC['exmine'])){

	$exist = pdo_get('mc_mapping_fans',array('uniacid'=>$uniacid,'openid'=>$user_info->openid,'follow'=>1));
	if(!empty($exist)){
		// $is_subscribe=pdo_fetchcolumn("SELECT 1 FROM ".tablename("chat_subscribe")." WHERE openid=:openid AND room_id=:room_id AND sub_type='room' LIMIT 1",array(":openid"=>$user_info->openid,":room_id"=>$topic['room_id']));
		if(empty($is_subscribe)){
			$data=array(
					"uniacid"=>$uniacid,
					"uid"=>$user_info->uid,
					"openid"=>$user_info->openid,
					"nickname"=>$user_info->nickname,
					"room_id"=>$topic['series_id'],
					"sub_type"=>"room",
					"create_time"=>time()
			);
			$row_count=pdo_insert("chat_subscribe",$data);
			echo 1;exit();
		}else{
		pdo_delete("chat_subscribe",array("openid"=>$user_info->openid,"room_id"=>$topic['series_id'],"sub_type"=>'room'));
		echo 2;exit();
		}
	}else{
		echo 0;exit();
	}
}
/*设置生成邀请卡二维码参数开始*/
if(!empty($_GPC['spoer'])){
	$mini_pay = $_GPC['mini_pay'];
	if($mini_pay=='true'){
		$poster=pdo_fetch("select * from ".tablename('chat_topicposter')." where uid=:uid and
	series_id=:topic_id and code_type='small'",array(":uid"=>$user_info->uid,":topic_id"=>$topic_id));
		if(!empty($poster)){
		$ticket=$poster['ticket'];
		$spoerid=$poster['id'];
		}else{
			$insert = array(
				"uniacid"=>$uniacid,
				"uid"=>$user_info->uid,
				"openid"=>$user_info->openid,
				"nickname"=>$user_info->nickname,
				"avatar"=>$user_info->headimgurl,
				"room_id"=>$topic['series_id'],
				//"ticket"=>$ticket,
				"series_id"=>$series_id,
				"code_type"=>'small',
				"create_time"=>time()
			);
			pdo_insert('chat_topicposter',$insert);
			$spoerid=pdo_insertid();
		}
		header('content-type:application/json;charset=utf8');
		$fmdata = array(
				"success" => 1,
				"poserid"=>$spoerid,
				'mini_pay'=>$mini_pay
		);
		echo json_encode($fmdata);
		exit;
	}else{
		$poster=pdo_fetch("select * from ".tablename('chat_topicposter')." where uid=:uid and
	series_id=:topic_id and code_type is null",array(":uid"=>$user_info->uid,":topic_id"=>$topic_id));
	}
		
	if(!empty($poster)){
		$ticket=$poster['ticket'];
		$spoerid=$poster['id'];
	}else{
		$barcode=array(
				'action_name' => '',
				'action_info' => array(
						'scene' => array('scene_str' => ''),
				),
		);
		//生成永久二维码
		load()->func('communication');
		$aacid=$_W['acid'];
		$uniacccount = WeAccount::create($aacid);
		$vstr='dg_chat_'.$series_id.'_uid'.$user_info->uid.'_series';
		$barcode['action_info']['scene']['scene_str'] = $vstr;
		//$barcode['expire_seconds'] = intval(2592000);
		$barcode['action_name'] = "QR_LIMIT_STR_SCENE";
		$content = $uniacccount->barCodeCreateFixed($barcode);
		$ticket=$content["ticket"];
		$name='渠道二维码'.$uniacid;
		//保存数据
		$insert = array(
				"uniacid"=>$uniacid,
				"uid"=>$user_info->uid,
				"openid"=>$user_info->openid,
				"nickname"=>$user_info->nickname,
				"avatar"=>$user_info->headimgurl,
				"room_id"=>$topic['series_id'],
				"ticket"=>$ticket,
				"series_id"=>$series_id,
				"create_time"=>time()
		);
		$qrinsert=array(
				'ticket'=>$ticket,
				'keyword'=>$vstr,
				'scene_str'=>$vstr,
				'name'=>$name,
				'uniacid'=>$uniacid,
				'acid'=>$uniacid,
				'type'=>'scene'
		);
		$param=array('rid'=>$rid,'openid'=>$openid);
		$result=pdo_fetch('select * from '.tablename('qrcode').'where keyword=:keyword and uniacid=:uniacid and scene_str=:str',array(':keyword'=>$vstr,":uniacid"=>$uniacid,":str"=>$vstr));
		if(empty($result)){
			pdo_insert('qrcode',$qrinsert);
		}
		pdo_insert('chat_topicposter',$insert);
		$spoerid=pdo_insertid();
	}
	header('content-type:application/json;charset=utf8');
	$fmdata = array(
			"success" => 1,
			"poserid"=>$spoerid
	);
	echo json_encode($fmdata);
	exit;
}

/*设置生成邀请卡二维码参数结束*/
if(!empty($topic['spread'])){
	$spreadnum=pdo_fetchcolumn("select count(1) from ".tablename('chat_spreadnum')." where topic_id=:topic_id and fuid=:fuid",array(":topic_id"=>$_GPC['series_id'],":fuid"=>$user_info->uid));
}
if(!empty($_GPC['already_pay'])){
	header('content-type:application/json;charset=utf8');
	if($topic['series_price']>0){
		$next_url = $this->createmobileurl('series_pay',array('series_id'=>$topic['id']));
		$fmdata = array(
				"success" => -1,
				"data"=>$next_url
		);
		echo json_encode($fmdata);exit();
	}else{
		$out_trade_no =  $this->build_order_sn();
		$data=array(
			'uniacid'=>$uniacid,
			'room_id'=>$topic['series_id'],
			'series_id'=>$series_id,
			'pay_money'=>0,
			'pay_type'=>2,
			'pay_uid'=>$user_info->uid,
			'pay_openid'=>$user_info->openid,
			'pay_nickname'=>$user_info->nickname,
			'pay_avatar'=>$user_info->headimgurl,
			"out_trade_no"=>$out_trade_no,
			'pay_status'=>1,
			'pay_time'=>time(),
			"create_time"=>time(),
		);
		pdo_insert("chat_payment",$data);
		$fmdata = array(
				"success" => 1,
				"data"=>'购买成功'
		);
		echo json_encode($fmdata);exit();
	}
}
if(!empty($topic['chat_imgs'])){

	$imgs=json_decode($topic['chat_imgs'],true);
	
	for($i=0;$i<count($imgs);$i++){
		$j=stripos($imgs[$i],"http");
		if($j == 0){
			$imgdesc.='<img src='.$imgs[$i].' style="width:auto; height:auto;
		max-width:100%; max-height:100%;">';
		}else{
			$imgdesc.='<img src='.substr($imgs[$i],$j,strlen($imgs[$i])-12).' style="width:auto; height:auto;
		max-width:100%; max-height:100%;">';
		}
		
	}
	$desc='<p>'.$topic['room_desc'].'</p>';
	$desc.=$imgdesc;
	$topic_desc=htmlspecialchars($desc);
	$topic['room_desc']=htmlspecialchars_decode($topic_desc);

}
$vip = $topic['series_price'];

$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$topic['series_id']));
if(empty($chat_room)){
	exit;
}
//系列课课程
$series_list = pdo_fetchall('select * from '.tablename('chat_topic')." where uniacid=:uniacid and series_id=:series_id and is_del is null",array(':uniacid'=>$uniacid,":series_id"=>$series_id));
//更多直播
// $topic_list = pdo_fetchall("select * from ".tablename("chat_topic")." A1 where uniacid=:uniacid AND A1.topic_status!=-1 AND A1.is_del is null and A1.create_openid=:openid and id!=:id order by create_time desc limit 0,6",array(":uniacid"=>$uniacid,":openid"=>$topic['create_openid'],":id"=>$topic['id']));
// var_dump($topic_list);
foreach ($series_list as $key => $value) {
	$series_list[$key]['ing']=3;
   if($value['topic_status']==1){
  		$series_list[$key]['ing']=1;
   }
   if($value['begin_time']>time()){
   	 $series_list[$key]['ing']=2;
   	 $last_time = date("m",$value['begin_time']);
     $time = date("m",time());
     $last_time1 = date("d",$value['begin_time']);
     $time1 = date("d",time());
     $last_time2 = date("H",$value['begin_time']);
     $time2 = date("H",time());
	    if($last_time-$time != 0){
	    	$relative = $last_time-$time.'月后';
	    }else if($last_time1-$time1 != 0) {
	 		$relative = $last_time1-$time1.'日后';
	    }else if($last_time2-$time2 != 0) {
	 		$relative = $last_time2-$time2.'小时后';
	    }else{
	    	$relative = "即将开始";
	    }
    $series_list[$key]['relative'] = $relative;
   }
   $series_list[$key]['begin_time'] = date("m/d H:i",$value['begin_time']);
	$series_list[$key]['count']=$value['look_numbers']+$value['x_look_numbers'];

}
$is_manager=$this->is_manager($topic['room_id'])||$chat_room['create_openid']==$user_info->openid;
$is_supermanager=$this->is_SuperManager();

//直播是否已经结束
// $istopic_end=1;
// if(empty($topic['end_time'])||$topic['end_time']==0){
// 	$istopic_end=0;
// }

// $istopic_begin=1;
// if($topic['begin_time']>time()){
// 	$istopic_begin=0;
// }

$join_count=pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename("chat_payment")." WHERE series_id=:series_id and pay_status=1",array(":series_id"=>$series_id));
$join_list=pdo_fetchall("SELECT A1.topic_id,A2.nickname,A2.avatar FROM ".tablename("chat_payment")." A1 INNER JOIN ".tablename("chat_users")." A2 ON 
     A1.pay_uid=A2.id WHERE series_id=:series_id and A1.pay_status=1 ORDER BY A1.ID DESC LIMIT 4",array(":series_id"=>$series_id));
$is_join=pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename("chat_payment")." WHERE pay_uid=:user_uid and series_id=:series_id and pay_status=1",array(":user_uid"=>$user_info->uid,":series_id"=>$series_id));
if($is_supermanager||$is_manager){
	$is_join=2;
}
$is_vip = $this->is_vip($user_info->uid);
	if(!empty($is_vip)){
		$is_join =2;
	}
// var_dump($is_join);
$sharedata=array(
		"title"=>str_replace(array("\r\n", "\r", "\n"), '', $topic['room_name']),
		"desc"=>strip_tags(str_replace(array("\r\n", "\r", "\n"), '', $topic['room_desc'])),
		"link"=>$_W['siteroot'].'app/'.substr($this->createmobileurl('series_info',array('series_id'=>$series_id, "fuid"=>$user_info->uid),true),2),
		"imgUrl"=>$topic['room_icon'],
);


include $this->template('series_info');