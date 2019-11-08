<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];
$room_id = $_GPC['room_id'];
$room_id=intval($_GPC['room_id']);
$room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE id=:id",array(":id"=>$room_id));
$room['chat_imgs'] = json_decode($room['chat_imgs']);

if($room['merchants_uid'] > 0 ){
	$merchants = pdo_fetch('SELECT id,openid,nickname,mobile FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid and id=:id limit 1 ' , array(':id'=>$room['merchants_uid'] , ':uniacid'=>$uniacid));


}
if($room['branchcourt_uid'] > 0){
	$branchcourt = pdo_fetch('SELECT id,openid,nickname,mobile FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid and id=:id limit 1 ' , array(':id'=>$room['branchcourt_uid'] , ':uniacid'=>$uniacid));
}
$tag = explode(',', $room['tags']);
function getNoticeData($record){
	$post_data=array(
			'first' => array(
					'value' => "您创建的 『".$record['room_name']."』 直播间审核通过啦！",
					"color" => "#4a5077"
			),
			'keyword1' => array(
					'value' => "审核通过",
					"color" => "#4a5077"
			),
			'keyword2' => array(
					'value' => date('Y/m/d H:i:s', time()),
					"color" => "#4a5077"
			),
			'remark' => array(
					'value' => "\r\n点击查看详情！",
					"color" => "#f19937"
			)
	);
	return $post_data;
}
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
if(!empty($_GPC['jia'])){
	$tag_record1=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid and id!=:id ORDER BY displayorder",array(":uniacid"=>$uniacid,':id'=>$_GPC['add_tags']));
	header('content-type:application/json;charset=utf8');
	$tags_record['list'] = $tag_record1;
 	echo json_encode($tags_record);exit();
}

if(!empty($_GPC['keyword_user'])){
	$keyword=$_GPC['keyword_user'];
	$condition="uniacid=".$uniacid." AND (nickname LIKE '%".$keyword."%')";
	$records=pdo_fetchall("SELECT id,nickname,avatar FROM ".tablename("chat_users")." WHERE ".$condition);

	header('content-type:application/json;charset=utf8');
	$fmdata = array(
			"success" => 1,
			"data" =>$records,
	);
	echo json_encode($fmdata);
	exit;
}

if(!empty($_GPC['user_nickname'])){
	$keyword=$_GPC['user_nickname'];
	$condition="uniacid=".$uniacid." AND (nickname LIKE '%".$keyword."%')";
	$records=pdo_fetch("SELECT id,nickname,avatar FROM ".tablename("chat_users")." WHERE ".$condition." LIMIT 20");
	header('content-type:application/json;charset=utf8');
	if(!empty($records)){
		$fmdata = array(
			"success" => 1,
			"data" =>$records['id'],
		);
	}else{
		$fmdata = array(
			"success" => -1,
			'data'=>'此用户未找到',
		);
	}

	echo json_encode($fmdata);
	exit;
}

if(checksubmit("submit")){
	$data=array();
	if(!empty($_GPC['chat_imgs'])){
		for($i=0;$i<count($_GPC['chat_imgs']);$i++){
			$_GPC['chat_imgs'][$i] = tomedia($_GPC['chat_imgs'][$i]);
		}
			$chat_imgs=json_encode($_GPC['chat_imgs']);
	}
	$data=array();
	$data['room_name']=$_GPC['room_name'];
	$data['room_desc']=$_GPC['room_desc'];
	$data['room_order']=$_GPC['room_order'];
	$data['room_status']=$_GPC['room_status'];

	//$data['room_icon'] = tomedia($_GPC['room_icon']);
	$data['room_icon'] = $_GPC['room_icon']; //将修改图片后路径不对的整修。
	$data['bg_img'] = tomedia($_GPC['bg_img']);
	$data['chat_imgs'] = $chat_imgs;
	$reward_percent = $_GPC['reward_percent'];
	if($reward_percent == 0){
		$data['reward_status'] = 0;
	}else{
		$data['reward_status'] = 1;
	}
	$data['reward_percent'] = $_GPC['reward_percent'];
	$subcom_precent = $_GPC['subcom_percent'];
	if($reward_percent == 0){
		$data['subcom_status'] = 0;
	}else{
		$data['subcom_status'] = 1;
	}
	$data['subcom_percent'] = $_GPC['subcom_percent'];
	$tags = $_GPC['tags_name'];
	$tags = implode(',',$tags);
	$data['tags'] = $tags;
	#招商员和分院
	$data['merchants_uid']=$_GPC['merchants_uid'];
	$data['merchants_percent']= round($_GPC['merchants_percent'],2);
	$data['branchcourt_uid']=$_GPC['branchcourt_uid'];
	$data['branchcourt_percent']= round($_GPC['branchcourt_percent'],2);

	pdo_update("chat_room",$data,array('id'=>$room_id));
	if($data['room_status']==1&&$room['room_status']==0){
			$cfg=$this->module['config'];
			$temp_id=$cfg['temp_pass'];
			$treasure = $cfg['treasure'];
			/*if($this->isteacher($room['create_openid'])==0){
				$update = pdo_fetch("UPDATE pigcms_wecha_user SET treasure=treasure+".$treasure." WHERE wecha_id='".$room['create_openid']."'");
			}*/
			if(!empty($temp_id)){
				$Account = WeAccount::create($_W['uniacid']);
				$temp_url=$this->createMobileUrl('chat_index',array("room_id"=>$room['room_id']));
				$temp_url=substr($temp_url, 1);
				$url=$_W['siteroot']."app".$temp_url;
				$postdata=getNoticeData($room);
				$Account->sendTplNotice($room['create_openid'],$temp_id,$postdata,$url,"#FF683F");
			}
		}
	$url=$this->createWebUrl("chat_manage");
	message('保存信息成功',$url,'success');
}

include $this->template('room_edit');
?>