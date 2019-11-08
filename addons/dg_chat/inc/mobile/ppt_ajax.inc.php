<?php
global $_GPC,$_W;	
$user_info=$this->getUserInfo();
$uid = $user_info->uid;
$uniacid = $_W['uniacid'];
$ppt_id=$_GPC['id'];
$topic_id=$_GPC['topic_id'];
$op=$_GPC['op'];
$ops=array('del','pptup','pptdown','send','c_send');

if(!in_array($op, $ops)){
	exit;
}

 if(empty($ppt_id)){
	exit;
 } 
 
 $ppt_id=intval($ppt_id);
 $topic_id=intval($topic_id);

 $topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:id",array(":id"=>$_GPC['topic_id']));
 if(empty($topic)){
 	exit;
 }

 $guests=pdo_fetchall("SELECT * FROM ".tablename("chat_topicguest")." WHERE topic_id=:topic_id LIMIT 6",array(":topic_id"=>$topic_id));
 
 $guest_list=array();
 foreach($guests as $guest){
 	$guest_list[]=$guest['guest_openid'];
 }
 $chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id",array(":room_id"=>$topic['room_id']));
 $is_guest=in_array($user_info->openid, $guest_list);
 $is_manager=$this->is_manager($topic['room_id'])||$chat_room['create_openid']==$user_info->openid;

 /*非管理员和嘉宾是没有权限的*/
 if(!$is_guest&&!$is_manager){
 	exit;
 }

 $result=array(
 		"success"=>0,
 		"msg"=>""
 );
 
 if($op=='del'){
 	pdo_delete("chat_ppt",array("id"=>$ppt_id));
 	$result['success']=1;
 	$result['msg']="删除成功！";
 }

 if($op=='pptup'||$op=='pptdown'){
 	 $order=$_GPC['order'];$order=intval($order);
 	 $id2=$_GPC['id2'];$id2=intval($id2);
 	 $order2=$_GPC['order2'];$order2=intval($order2);
 	 pdo_update("chat_ppt",array('img_order'=>$order),array("id"=>$ppt_id));
 	 pdo_update("chat_ppt",array('img_order'=>$order2),array("id"=>$id2));
 	 $result['success']=1;
 	 $result['msg']="调整顺序成功！";
 }
 
 if($op=='send'){
 	pdo_update("chat_ppt",array('is_current'=>0),array("topic_id"=>$topic_id));
 	pdo_update("chat_ppt",array('is_send'=>1,'is_current'=>1),array("id"=>$ppt_id));
 	$result['success']=1;
 	$result['msg']="发送成功！";
 }
 
 if($op=='c_send'){
 	pdo_update("chat_ppt",array('is_send'=>0,'is_current'=>0),array("id"=>$ppt_id));
 	$result['success']=1;
 	$result['msg']="撤回成功！";
 }

 header("Content-type: text/json; charset=utf-8");
 echo json_encode($result);
 exit;


