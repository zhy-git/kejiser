<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];
$room_id=$_GPC['room_id'];

$user_info=$this->getUserInfo();
$room_id=intval($room_id);
if(empty($room_id)){
	exit;
}

$cfg=$this->module['config'];
$qrcode_type=$cfg['qr_code'];
$qrcode_type=empty($qrcode_type)?1:$qrcode_type;
$is_subscribe=pdo_fetchcolumn("SELECT 1 FROM ".tablename("chat_subscribe")." WHERE openid=:openid AND room_id=:room_id AND sub_type='room' LIMIT 1",array(":openid"=>$user_info->openid,":room_id"=>$room_id));



//关注直播ajax
if(!empty($_GPC['focus'])){
	header('content-type:application/json;charset=utf8');
	$topic_id=$_GPC['topic_id'];
	
	$fmdata = array(
			"success" => 1,
			"is_sub"=>1,
			"data" =>"关注成功！",
	);
	if(empty($is_subscribe)){
		$data=array(
				"uniacid"=>$uniacid,
				"uid"=>$user_info->uid,
				"openid"=>$user_info->openid,
				"nickname"=>$user_info->nickname,
				"room_id"=>$room_id,
				"sub_type"=>"room",
				"create_time"=>time()
		);
		$row_count=pdo_insert("chat_subscribe",$data);
	}else{
		pdo_delete("chat_subscribe",array("openid"=>$user_info->openid,"room_id"=>$room_id,"sub_type"=>'room'));
		$fmdata = array(
				"success" => -1,
				"is_sub"=>0,
				"data" =>"取消关注成功！",
		);
	}
	
	echo json_encode($fmdata);
	exit;
}





$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
$setting_url=$this->createMobileUrl('chat_setting',array("room_id"=>$room_id));
$topic_createurl=$this->createMobileUrl('topic_create',array("room_id"=>$room_id));
$sub_count=pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename("chat_subscribe")." WHERE room_id=:room_id",array(":room_id"=>$room_id));
$sub_count=empty($sub_count)?0:$sub_count;
$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;
$mychat_url=$this->createMobileUrl('my_chat');
$chat_url=$this->createMobileUrl('chat_index',array("room_id"=>$room_id));

$is_supermanager=$this->is_SuperManager();
//$is_creater=$chat_room['create_openid']==$user_info->openid;
//直播间介绍
if(!empty($chat_room['chat_imgs'])){

	$imgs=json_decode($chat_room['chat_imgs'],true);
	
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
	$desc='<p>'.$chat_room['room_desc'].'</p>';
	$desc.=$imgdesc;
	$topic_desc=htmlspecialchars($desc);
	$chat_room['room_desc']=htmlspecialchars_decode($topic_desc);

}
$pindex = max(1, intval($_GPC['pindex']));
$psize = 10;
// var_dump($room_id);
$total=pdo_fetchcolumn("SELECT count(0) FROM ".tablename("chat_topic")." WHERE  room_id=:room_id AND uniacid=:uniacid  AND topic_status!=-1 and is_del is null and series_id is null ORDER BY topic_order DESC,ID DESC",array(":room_id"=>$room_id,":uniacid"=>$uniacid));
// var_dump;($total);
$pages = ceil($total / $psize);
if($pindex>$pages&&$pages>0)
	$pindex =$pages;

$attachdir = "'/" . $_W['config']['upload']['attachdir'] . "/'";//图片路径的拼接
$topic_ing=pdo_fetchall("SELECT id,uniacid,room_id,series_id,topic_name,topic_desc,CONCAT({$attachdir},topic_icon) as topic_icon,topic_imgs,topic_style,look_numbers,qrcode_url,qrcode_desc,is_opendm,is_vip,star,file_id,guest_name,guest_info,create_time,x_look_numbers,begin_time,end_time,f_tags,tags,topic_status,create_openid,is_showguid,is_allshutup,reward_percent,im_group_id,activityid,videoid,taskid,liveid,third_url,transstatus,spread,is_del,is_index,gl_fine,gl_order,topic_order FROM ".tablename("chat_topic")." WHERE  room_id=:room_id AND uniacid=:uniacid  AND topic_status!=-1 and is_del is null and series_id is null ORDER BY topic_order DESC,ID DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize,array(":room_id"=>$room_id,":uniacid"=>$uniacid));
foreach($topic_ing as &$t_ing){
	 $t_ing['end_text']=date('Y-m-d H:i:s', $t_his['end_time']);	
   if($t_ing['topic_icon'])
      $t_ing['icon']=$t_ing['topic_icon'];
   else
     $t_ing['icon']=$t_ing['room_icon'];
   
   $t_ing['ing']=3;
   if($t_ing['topic_status']==1){
   	$t_ing['ing']=1;
   }
   if($t_ing['begin_time']>time()){
	 $last_time = ($t_ing['begin_time']-time())/2592000;//月
     $last_time1 = ($t_ing['begin_time']-time())/86400;//日
     $last_time2 = ($t_ing['begin_time']-time())/3600;

    if($last_time>1 ||$last_time==1){
    	$relative = ceil($last_time).'月后';
    }else if($last_time1>1 ||$last_time1==1) {
 		$relative =ceil($last_time1).'日后';
    }else if($last_time2>1 ||$last_time2==1) {
 		$relative = ceil($last_time2).'小时后';
    }else{
    	$relative = "即将开始";
    }
    $t_ing['relative'] = $relative;
	   	$t_ing['ing']=2;
   }
   if($t_ing['topic_type'] =='ticket'){
   		$t_ing['common_price'] = $t_ing['room_paymoney']*(1+$cfg['room_paymoneyprace']/100);
   }
   $t_ing['look_numbers']=$t_ing['look_numbers']+$t_ing['x_look_numbers'];
   $t_ing['begin_time']=date('m-d H:i', $t_ing['begin_time']);	
}
unset($t_ing);

//系列课列表
$pindex1 = max(1, intval($_GPC['pindex1']));
$psize1 = 10;
$total1 = pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_room")." WHERE  series_id=:room_id AND uniacid=:uniacid AND room_status!=-1 and is_del is null ORDER BY ID DESC",array(":room_id"=>$room_id,":uniacid"=>$uniacid));
$pages1 = ceil($total1 / $psize1);
if($pindex1>$pages1&&$pages1>0)
	$pindex1 =$pages1;
$series_list = pdo_fetchall("SELECT * from ".tablename('chat_room')." where uniacid=:uniacid and series_id=:room_id and room_status =1 and is_del is null order by create_time desc limit ". ($pindex1 - 1) * $psize1 . ',' . $psize1,array(':uniacid'=>$uniacid,":room_id"=>$room_id));
foreach ($series_list as $key => $value) {
	$count = pdo_fetchcolumn("select count(*) from ".tablename("chat_payment")." where uniacid=:uniacid and room_id=:room_id and pay_status=1 and series_id=:series_id order by create_time desc",array(":uniacid"=>$uniacid,":room_id"=>$room_id,":series_id"=>$value['id']));
	$series_list[$key]['count'] = $count;
	$series_list[$key]['series_price'] = $value['series_price']*(1+$cfg['room_paymoneyprace']/100);
}



if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['pages']=$pages;
	$result['list']=$topic_ing;
	echo json_encode($result);
	exit;
}

if(!empty($_GPC['pindex1'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex1']=$pindex1;
	$result['pages1']=$pages1;
	$result['list1']=$series_list;
	echo json_encode($result);
	exit;
}

$sharedata=array(
		"title"=>str_replace(array("\r\n", "\r", "\n"), '',$chat_room['room_name']),
		"desc"=>str_replace(array("\r\n", "\r", "\n"), '',strip_tags($chat_room['room_desc'])),
		"link"=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'],
		"imgUrl"=>$chat_room['room_icon'],
);

include $this->template('c_index');