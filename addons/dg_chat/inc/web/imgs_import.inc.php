<?php
global $_GPC,$_W;
$uniacid=$_W["uniacid"];
$topic_id=$_GPC['topic_id'];

$imgs=$_GPC["imgs"];
if(!empty($imgs)){
	for($i=0;$i<count($imgs);$i++){
		$img=$_W['attachurl'].$imgs[$i];
		$insert=array(
				"uniacid"=>$uniacid,
				"topic_id"=>$topic_id,
				"img_url"=>$img,
				"img_order"=>$i,
				"create_uid"=>0,
				"is_current"=>0,
				"create_time"=>time()
		);
		pdo_insert("chat_ppt",$insert);
		
	}
	include $this->template('topic_ppts');
	exit();
}
include $this->template('imgs_import'); 
?>