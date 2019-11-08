<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();
$cfg=$this->module['config'];
$order = $_GPC['order'];
if(empty($order)||$order=='live'){
	$condition = ' and A1.series_id is null ';
}else{
	$condition = ' and A1.series_id is not null ';
}

$tag_id=$_GPC['tags'];
if(!empty($tag_id)&&$tag_id!="0"){
	$condition.=" AND FIND_IN_SET(".$tag_id.",A1.tags)";
}

$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;

$pindex = max(1, intval($_GPC['pindex']));
$psize = 10;
if(!empty($order) && $order=='series'){
	$total = pdo_fetchcolumn("select count(0) from ".tablename("chat_room")." A1 where A1.uniacid=:uniacid and A1.is_del is null and A1.room_status!=-1 ".$condition,array(":uniacid"=>$uniacid));
	$pages = ceil($total / $psize);
	if($pindex>$pages&&$pages>0)
		$pindex =$pages;
	$topic_ing = pdo_fetchall("SELECT A1.*,(select count(0) from ".tablename('chat_payment')." A2 where A2.uniacid=:uniacid and A2.room_id=A1.series_id and A2.pay_status=1 and A2.series_id=A1.id) as count from ".tablename('chat_room')." A1 where A1.uniacid=:uniacid and A1.room_status =1 and A1.is_del is null and A1.series_id is not null and A1.is_status".$condition." order by A1.create_time desc,series_price asc limit ".($pindex-1)*$psize.','.$psize,array(":uniacid"=>$uniacid));
	
}else{
	$total = pdo_fetchcolumn("SELECT count(0) FROM ".tablename("chat_topic")." A1  WHERE  A1.uniacid=:uniacid AND A1.topic_status!=-1 AND A1.is_del is null ".$condition,array(":uniacid"=>$uniacid));
	
	$pages = ceil($total / $psize);

	if($pindex>$pages&&$pages>0)
		$pindex =$pages;
	
	$order_by="A1.topic_status,A1.gl_fine DESC,A1.gl_order DESC,A1.ID DESC";
	// var_dump("SELECT count(0) FROM ".tablename("chat_topic")." A1 left join ".tablename('chat_room')." A2 on A1.series_id=A2.id WHERE  A1.uniacid=:uniacid AND A1.topic_status!=-1 AND A1.is_del is null ".$condition);
	$topic_ing=pdo_fetchall("SELECT * FROM ".tablename("chat_topic")." A1  WHERE A1.uniacid=:uniacid AND A1.topic_status!=-1 AND A1.is_del is null ".$condition." ORDER BY ".$order_by." LIMIT " . ($pindex - 1) * $psize . ',' . $psize,array(":uniacid"=>$uniacid));

	// var_dump("SELECT A1.*,A2.series_price,A2.count_subject FROM ".tablename("chat_topic")." A1 left join ".tablename('chat_room')." A2 on A1.series_id=A2.id WHERE  A1.uniacid=:uniacid AND A1.topic_status!=-1 AND A1.is_del is null ".$condition." ORDER BY ".$order_by." LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
	foreach ($topic_ing as &$t_ing){
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
	     $last_time = date("m",$t_ing['begin_time']);
	     $time = date("m",time());
	     $last_time1 = date("d",$t_ing['begin_time']);
	     $time1 = date("d",time());
	     $last_time2 = date("H",$t_ing['begin_time']);
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
	    $t_ing['relative'] = $relative;
		   	$t_ing['ing']=2;
	   }
	   $t_ing['look_numbers']=$t_ing['look_numbers']+$t_ing['x_look_numbers'];
	   $t_ing['begin_time']=date('m-d H:i', $t_ing['begin_time']);	
	}
}





if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['pages']=$pages;
	$result['list']=$topic_ing;
	$result['order']=$order;
	echo json_encode($result);
	exit;
}


/*处理标签开始*/
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid  ORDER BY displayorder",array(":uniacid"=>$uniacid));
/*处理标签结束*/


$share=pdo_fetch("SELECT * FROM ".tablename("chat_share")." WHERE uniacid=:uniacid",array(":uniacid"=>$uniacid));

$sharedata=array(
		"title"=>str_replace(array("\r\n", "\r", "\n"), '',$share['share_title']),
		"desc"=>str_replace(array("\r\n", "\r", "\n"), '',strip_tags($share['share_desc'])),
		"link"=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'],
		"imgUrl"=>tomedia($share['share_img']),
);

include $this->template('filter');