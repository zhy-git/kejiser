<?php
global $_GPC, $_W;
checklogin();
$uniacid=$_W['uniacid'];
$prew = $_GPC['type'];
load()->func('tpl');
$series_id=$_GPC['series_id'];
$series_id=intval($series_id);
$topic=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE id=:id ",array(":id"=>$_GPC['series_id']));
$topic['chat_imgs']=str_replace("&quot;","",json_decode($topic['chat_imgs'],true));
$tag = array_filter(explode(",", $topic['tags']));


$tag_record = pdo_fetchall("select * from ".tablename("chat_tags")."WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));

$chat_rooms = pdo_fetchall("select * from ".tablename("chat_room")." where uniacid=:uniacid and room_status=1 and is_del is null and is_del is null and series_id is null order by create_time desc",array(":uniacid"=>$uniacid));
if(!empty($_GPC['tags1'])){
	$tag_record1 = pdo_fetchall("select * from ".tablename("chat_tags")." where uniacid=:uniacid and pid=:pid and enabled=:display order by displayorder",array(":uniacid"=>$uniacid,":pid"=>$_GPC['tags1'],":display"=>$display));
	foreach ($tag_record1 as $k => $v) {
	if(in_array($v['id'],$tag)){
		$tag_record[$k]['statu']=1;
	}
}
	header('content-type:application/json;charset=utf8');
	$tags_record['list'] = $tag_record1;
 	echo json_encode($tags_record);exit();
}
if(checksubmit("submit")){
	$data=array();
	if(!empty($_GPC['chat_imgs'])){
		for($i=0;$i<count($_GPC['chat_imgs']);$i++){
			$_GPC['chat_imgs'][$i] = tomedia($_GPC['chat_imgs'][$i]);
		}
			$chat_imgs=json_encode($_GPC['chat_imgs']);
	}

	// if(empty($_GPC['room_id'])||$_GPC['room_id'] == 0){
	// 	message('请选择直播间',"","error");
	// }

	$create_openid = pdo_fetch("select create_uid,create_nickname,create_openid,create_avatar,room_status,reward_percent from ".tablename("chat_room")." where uniacid=:uniacid and id=:id",array(":uniacid"=>$uniacid,":id"=>$_GPC['series_id']));

	
	// if($create_openid['room_status']!=1){
	// 	message('您的直播间还未审核通过或者被禁用了',"","error");
	// }
	$data['create_openid'] = $create_openid['create_openid'];
	$tags = implode(',',$_GPC['tags_name']);
	$data['tags'] = $tags;
	$data['room_status']=1;//系列课自动过
	$data['room_name']=$_GPC['room_name'];
	$data['uniacid'] = $uniacid;
	$data["create_uid"]=$create_openid['create_uid'];
   	$data["create_openid"]=$create_openid['create_openid'];
   	$data['create_nickname'] =$create_openid['create_nickname'];
   	$data['create_avatar'] = $create_openid['create_avatar'];
	$data["reward_percent"]= $create_openid['reward_percent'];
	$data['room_icon']=tomedia($_GPC['room_icon']);
	$data['chat_imgs'] = $chat_imgs;
	$data['count_subject'] = $_GPC['count_subject'];
	$data['series_price'] = $_GPC['series_price'];
	$data['series_id'] = $_GPC['room_id'];
	$data['room_desc']=htmlspecialchars_decode($_GPC['room_desc']);
	$data['create_time'] = time();
	$data['is_status'] = '1';
	pdo_update("chat_room",$data,array("id"=>$topic['id']));
	$url=$this->createWebUrl("series_manage");
	message('保存信息成功',$url,'success');
}
include $this->template('series_edit');
?>