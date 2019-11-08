<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();
$cfg = $this->module['config'];
$condition="";
$pars=array(":uniacid"=>$uniacid);
$keyword = trim($_GPC['keyword']);
$condition_type = !empty($_GPC['condition'])?$_GPC['condition']:'topic';

$pindex = max(1, intval($_GPC['pindex']));
$psize = 10;

if($condition_type  == 'topic'){
	if(!empty($keyword)) {
		$condition .=" AND (A1.`topic_name` LIKE :keyword OR A1.`topic_desc` LIKE :keyword)";
		$pars[':keyword'] = "%{$keyword}%";
	}
	$order_by="A1.topic_status,A1.gl_fine DESC,A1.gl_order DESC,A1.ID DESC";
	$total = pdo_fetchcolumn("SELECT count(0) FROM ".tablename("chat_topic")." A1 WHERE  A1.uniacid=:uniacid AND A1.topic_status!=-1 AND A1.is_del is null and A1.series_id is null".$condition,$pars);
$pages = ceil($total / $psize);
   if($pindex>$pages&&$pages>0)
   	$pindex =$pages;
    
	$topic_his=pdo_fetchall("SELECT A1.* FROM ".tablename("chat_topic")." A1 WHERE  A1.uniacid=:uniacid AND A1.topic_status!=-1 AND A1.is_del is null and A1.series_id is null ".$condition." ORDER BY ".$order_by." LIMIT " . ($pindex - 1) * $psize . ',' . $psize,$pars);
    $attachdir = "/" . $_W['config']['upload']['attachdir'] . "/";
	foreach ($topic_his as &$t_ing){

	   $t_ing['end_text']=date('Y-m-d H:i:s', $t_his['end_time']);	
	   if($t_ing['topic_icon']){
	      $t_ing['icon']=$attachdir.$t_ing['topic_icon'];
	   }
	   else{
	      $t_ing['icon']=$attachdir.$t_ing['room_icon'];
	   }

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
	   
	   $t_ing['look_numbers']=$t_ing['look_numbers'];
	   $t_ing['begin_time']=date('m-d H:i', $t_ing['begin_time']);	

	   
	}


}else if($condition_type == 'series'){
	if(!empty($keyword)) {
		$condition .=" AND (A1.`room_name` LIKE :keyword OR A1.`room_desc` LIKE :keyword)";
		$pars[':keyword'] = "%{$keyword}%";
	}
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
	if(!empty($keyword)) {
		$condition .=" AND (`room_name` LIKE :keyword OR `room_desc` LIKE :keyword)";
		$pars[':keyword'] = "%{$keyword}%";
	}
	$order_by="A1.room_status,A1.ID DESC";
	$total = pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_room")."A1  WHERE  A1.uniacid=:uniacid AND A1.room_status=1 AND A1.is_del is null and A1.series_id is null ".$condition,$pars);
	$pages = ceil($total / $psize);
   	if($pindex>$pages&&$pages>0)
   		$pindex =$pages;
    $topic_his=pdo_fetchall("SELECT * FROM ".tablename("chat_room")." A1 WHERE A1.uniacid=:uniacid AND A1.room_status=1 AND A1.is_del is null and A1.series_id is null ".$condition." ORDER BY ".$order_by." LIMIT " . ($pindex - 1) * $psize . ',' . $psize,$pars);	
}



if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
    $attachdir = "/" . $_W['config']['upload']['attachdir'] . "/";
	foreach ($topic_his as &$t_ing){
	   if($t_ing['topic_icon']){
	      $t_ing['topic_icon']=$attachdir.$t_ing['topic_icon'];
	      $t_ing['icon']=$attachdir.$t_ing['topic_icon'];
	   }
	   else{
	   	$t_ing['topic_icon']=$attachdir.$t_ing['room_icon'];
	      $t_ing['icon']=$attachdir.$t_ing['room_icon'];
	   }
	}
	$result['pindex']=$pindex;
	$result['pages']=$pages;
	$result['list']=$topic_his;
	$result['condition'] = $condition_type;
	echo json_encode($result);
	exit;
}



include $this->template('search');