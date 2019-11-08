<?php
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];

$user_info=$this->getUserInfo();
$pars=array(":uniacid"=>$uniacid);

$condition="";
$cfg = $this->module['config'];
$tag_id=$_GPC['tags'];
if(!empty($tag_id)&&$tag_id!="0"){
	$tag_id=intval($tag_id);
		$condition.=" AND FIND_IN_SET(".$tag_id.",A1.tags)";
}

$condition_type = !empty($_GPC['condition'])?$_GPC['condition']:'room';

if($condition_type =='room' ){
	$condition.="AND EXISTS (SELECT 1 FROM ".tablename("chat_topic")." A2 WHERE A1.room_id=A2.room_id)";
}

$pindex = max(1, intval($_GPC['pindex']));
$psize = 10;
//var_dump($condition_type);
if($condition_type  == 'topic'){

	$order_by=" A1.begin_time desc";
	$total = pdo_fetchcolumn("SELECT count(0) FROM ".tablename("chat_topic")." A1 WHERE  A1.uniacid=:uniacid AND A1.topic_status!=-1 AND A1.is_del is null and A1.series_id is null".$condition,$pars);
$pages = ceil($total / $psize);
   if($pindex>$pages&&$pages>0)
   	$pindex =$pages;

	$topic_his=pdo_fetchall("SELECT A1.* FROM ".tablename("chat_topic")." A1 WHERE  A1.uniacid=:uniacid AND A1.topic_status!=-1 AND A1.is_del is null and A1.series_id is null ".$condition." ORDER BY ".$order_by." LIMIT " . ($pindex - 1) * $psize . ',' . $psize,$pars);
	foreach ($topic_his as &$t_ing){
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
    	$relative = $last_time-$time.'月后';
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
	   $t_ing['look_numbers']=$t_ing['look_numbers'];
	   $t_ing['begin_time']=date('m-d H:i', $t_ing['begin_time']);	
	}
}else if($condition_type == 'series'){
	
	$order_by="A1.room_status,A1.ID DESC";
	$total = pdo_fetchcolumn("SELECT count(0) FROM ".tablename("chat_room")." A1 WHERE  A1.uniacid=:uniacid AND A1.room_status!=-1 AND A1.is_del is null and A1.series_id is not null".$condition,$pars);
$pages = ceil($total / $psize);
   if($pindex>$pages&&$pages>0)
   	$pindex =$pages;
	$topic_his= pdo_fetchall("select A1.*,(select count(0) from ".tablename('chat_payment')." A2 where A2.uniacid=:uniacid and A2.pay_status=1 and A2.series_id=A1.id) as count from ".tablename("chat_room")."A1 where A1.uniacid=:uniacid and A1.series_id is not null and A1.room_status=1 and A1.is_del is null ".$condition." order by ".$order_by." LIMIT " . ($pindex - 1) * $psize . ',' . $psize,$pars);
	foreach ($topic_his as &$t_ing){
		if($t_ing['series_price']>0){
	   		$t_ing['common_price'] = $t_ing['series_price']*(1+$cfg['room_paymoneyprace']/100);
	   }
	}
	unset($t_ing);
//	var_dump("select A1.*,(select count(0) from ".tablename('chat_payment')." A2 where A2.uniacid=:uniacid and A2.pay_status=1 and A2.series_id=A1.id) as count from ".tablename("chat_room")."A1 where A1.uniacid=:uniacid and A1.series_id is not null and A1.room_status=1 and A1.is_del is null ".$condition." order by ".$order_by." LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
	
}else{

	$order_by="A1.is_top DESC,A1.room_order DESC,A1.id DESC";
	$total = pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_room")."A1  WHERE  A1.uniacid=:uniacid AND A1.room_status=1 AND A1.is_del is null and A1.series_id is null ".$condition,$pars);
	$pages = ceil($total / $psize);
   	if($pindex>$pages&&$pages>0)
   		$pindex =$pages;
    $topic_his=pdo_fetchall("SELECT * FROM ".tablename("chat_room")." A1 WHERE A1.uniacid=:uniacid AND A1.room_status=1 AND A1.is_del is null and A1.series_id is null ".$condition." ORDER BY ".$order_by." LIMIT " . ($pindex - 1) * $psize . ',' . $psize,$pars);
    foreach ($topic_his as $key => $value) {
    $attachdir = "'/" . $_W['config']['upload']['attachdir'] . "/'";//图片路径的拼接	
	$sql = "select id,uniacid,room_id,series_id,topic_name,topic_desc,CONCAT({$attachdir},topic_icon) as topic_icon,topic_imgs,topic_style,look_numbers,qrcode_url,qrcode_desc,is_opendm,is_vip,star,file_id,guest_name,guest_info,create_time,x_look_numbers,begin_time,end_time,f_tags,tags,topic_status,create_openid,is_showguid,is_allshutup,reward_percent,im_group_id,activityid,videoid,taskid,liveid,third_url,transstatus,spread,is_del,is_index,gl_fine,gl_order,topic_order from ".tablename('chat_topic')." where uniacid=".$uniacid." and room_id=:room_id and topic_status!=2";
	$pram = array(':room_id'=>$value['room_id']);
	$res = pdo_fetchall($sql,$pram);
	$time_1 = $res[0]['begin_time'];
		foreach ($res as $k => $val) {
			if($time_1<$val['begin_time']){
				$time_small = date("m/d H:i",$val['begin_time']);
			}else{
				$time_small = date('m/d H:i',$time_1);
			}
			if($val['begin_time']>time()){
				$topic_his[$key]['time_small'] =$time_small;
			}
		}
	}
	$allsub=array();
	$sub_room=pdo_fetchall("select * from ".tablename("chat_subscribe")." where uid=:uid and uniacid=:uniacid and
sub_type='room' order by id desc",array(":uid"=>$user_info->uid,":uniacid"=>$uniacid));
	foreach($sub_room as $row){
		$allsub[]=$row['room_id'];
	}
	foreach($topic_his as &$item){
		if(in_array($item['room_id'],$allsub)){
			$item['isin']=1;
		}
	}	
}

if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['pages']=$pages;
	$result['list']=$topic_his;
	$result['condition'] = $condition_type;
	echo json_encode($result);
	exit;
}


/*处理标签开始*/
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
/*处理标签结束*/

$share=pdo_fetch("SELECT * FROM ".tablename("chat_share")." WHERE uniacid=:uniacid",array(":uniacid"=>$uniacid));
$sharedata=array(
		"title"=>str_replace(array("\r\n", "\r", "\n"), '',$share['share_title']),
		"desc"=>str_replace(array("\r\n", "\r", "\n"), '',strip_tags($share['share_desc'])),
		"link"=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'],
		"imgUrl"=>tomedia($share['share_img']),
);

include $this->template('room_list');