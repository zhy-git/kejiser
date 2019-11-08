<?php
/**
 * 开启赞赏功能
 */
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];

$redirect_uri="{$_W['siteroot']}app/".$this->createMobileUrl('chat_setting');
$user_info=cache_load('user_info');
if(!$user_info){
  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}
$room_id=$_GPC['room_id'];

if(empty($room_id)){
	exit;
}

$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$room_id));
$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info['openid'];

$room_url=$this->createMobileUrl('chat_index',array("room_id"=>$room_id));
$reward_percent=$chat_room['reward_percent']*100;

/*分成比例存储开始*/
if(!empty($_GPC['submit'])&&$is_manager){
	header('content-type:application/json;charset=utf8');
	$percent=intval($_GPC['percent']);
	$check_topic=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_topic")." WHERE room_id=:room_id AND end_time=0",array(":room_id"=>$room_id));
	
	if($check_topic>0&&$chat_room['reward_status']==1&&$percent!=$reward_percent){
		$fmdata = array(
				"success" => -1,
				"data"=>"存在正在直播的话题,不能更改分成比例!",
		);		
		echo json_encode($fmdata);
		exit;
	}
		
	$data=array(
			"reward_status"=>1,
			"reward_percent"=>$percent/100
	);
	
	pdo_update("chat_room",$data,array("room_id"=>$room_id));
		
	$fmdata = array(
				"success" => 1,
				"data"=>"修改成功！",
		);
	
	echo json_encode($fmdata);
	exit;	
}
/*分成比例存储结束*/


/*关闭赞赏功能开始*/
if(!empty($_GPC['shut'])&&$is_manager){
	header('content-type:application/json;charset=utf8');
	$data=array(
			"reward_status"=>0
	);
	
	pdo_update("chat_room",$data,array("room_id"=>$room_id));
	$fmdata = array(
			"success" => 1,
			"data"=>"关闭成功！",
	);
	
	echo json_encode($fmdata);
	exit;
}
