<?php
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();
$topic_id = $_GPC['t'];
$invite_uid= $_GPC['uid'];
$series_id = $_GPC['s'];
$fuid = $user_info->uid; 
if(!empty($topic_id)){
	$topic_url = $this->createMobileUrl('topic_info',array('topic_id'=>$topic_id,'fuid'=>$fuid));
}else if(!empty($series_id)){
	$topic_url = $this->createMobileUrl('series_info',array('series_id'=>$series_id,'fuid'=>$fuid));
}
header('location:'.$topic_url);
