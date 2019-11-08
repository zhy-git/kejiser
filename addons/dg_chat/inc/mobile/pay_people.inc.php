<?php
global $_W,$_GPC;
$uniacid = $_W['uniacid'];
$topic_id = $_GPC['topic_id'];
$series_id = $_GPC['series_id'];
$pindex = max(1,intval($_GPC['pindex']));
$psize = 10;
if(empty($topic_id)&&empty($series_id)){
	exit();
}
$where  = " where uniacid=:uniacid  and pay_status=1 and pay_type=2 ";
$condition = 'select pay_nickname nickname,pay_avatar avatar from '.tablename("chat_payment").$where;
$sql_count = 'select count(1) from '.tablename("chat_payment").$where;
$prams = array(':uniacid'=>$uniacid);
if(!empty($topic_id)){
	$topic_info = pdo_fetch("select * from ".tablename("chat_topic")." where uniacid=:uniacid and is_del is null and id=:id ",array(":uniacid"=>$uniacid,':id'=>$topic_id));
	if($topic_info['topic_type'] !='ticket'){
		$sql = 'select A1.topic_id,A2.nickname,A2.avatar from '.tablename('chat_joinusers')." A1 INNER JOIN ".tablename("chat_users")." A2 ON 
	     A1.user_uid=A2.id WHERE topic_id=:topic_id and uniacid=:uniacid ORDER BY A1.ID DESC";
	     $sql_count = 'select count(1) from '.tablename('chat_joinusers')." A1 INNER JOIN ".tablename("chat_users")." A2 ON 
	     A1.user_uid=A2.id WHERE topic_id=:topic_id and uniacid=:uniacid ORDER BY A1.ID DESC"; ;
	}else{
		$sql = $condition. ' and topic_id =:topic_id order by id desc ';
		$sql_count = $sql_count.' and topic_id =:topic_id ';
	}
	$prams[':topic_id'] = $topic_id;
}else{
	$sql = $condition. ' and series_id=:series_id order by id desc ';
	$sql_count = $sql_count. ' and series_id=:series_id ';
	$prams[':series_id'] = $series_id;
}
$count = pdo_fetchcolumn($sql_count,$prams);
$pages = ceil($count / $psize);
if($pindex>$pages && $pages>0)
	$pindex =$pages;

	
$people_list = pdo_fetchall($sql." limit ".($pindex-1)*$psize.','.$psize,$prams);

if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['pages']=$pages;
	$result['list']=$people_list;
	echo json_encode($result);
	exit;
}
include $this->template('pay_people');