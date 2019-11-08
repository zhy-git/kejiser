<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];

$topic_id=intval($_GPC['topic_id']);
$id=$_GPC["id"];

$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
$op=$_GPC['op'];
if ($operation == 'display') {
	$tempcondition=" WHERE topic_id='{$topic_id}' AND uniacid = '{$_W['uniacid']}'";
	$pindex = max(1, intval($_GPC['page']));
	$psize = 10;
	$records = pdo_fetchall("SELECT * FROM ".tablename("chat_ppt").$tempcondition." ORDER BY img_order LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
	$total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename("chat_ppt").$tempcondition);
	$pager = pagination($total, $pindex, $psize);
} elseif ($operation == 'post'){
	if (checksubmit('submit')) {
		$id = intval($_GPC['id']);
		$topic_ppt = pdo_fetch("select * from " . tablename("chat_ppt") . " where id=:id and uniacid=:uniacid limit 1", array(":id" => $id, ":uniacid" => $uniacid));
		$imgurl="";
		if(strpos($_GPC["img_url"], "http")){
			$imgurl=$_GPC["img_url"];
		}else{
			$imgurl=$_W['attachurl'].$_GPC["img_url"];
		}
		$data = array(
				'img_url' => $imgurl,
				'img_order' => $_GPC['img_order'],
				'is_send' => $_GPC['is_send'],
				'create_time' => time()
		);
		pdo_update("chat_ppt", $data, array('id' => $id));
		message('更新成功！', $this->createWebUrl('topic_ppts', array('op' => 'display','topic_id'=>$topic_ppt["topic_id"])), 'success');
	}
	$topic_ppt = pdo_fetch("select * from " . tablename("chat_ppt") . " where id=:id and uniacid=:uniacid limit 1", array(":id" => $id, ":uniacid" => $uniacid));
}else if($_GPC['op']=="send"){
	header('content-type:application/json;charset=utf8');
	$ppt = pdo_fetch("select * from " . tablename("chat_ppt") . " where id=:id and uniacid=:uniacid limit 1", array(":id" => $id, ":uniacid" => $uniacid));
	$issend=0;
	if($ppt["is_send"]==0){
		$issend=1;
	}
	$data['is_send']=$issend;
	pdo_update("chat_ppt",$data,array("id"=>$id));
	$result=array(
			"success"=>1,
			"is_send"=>$issend,
			"data"=>"操作成功"
	);
	echo json_encode($result);
	exit;
}
else if($_GPC['op']=="send_all"){
	header('content-type:application/json;charset=utf8');
	$data['is_send']=1;
	$topicid=$_GPC["topicid"];
	
	pdo_update("chat_ppt",$data,array("topic_id"=>$topicid));
	$result=array(
			"success"=>1,
			"data"=>"操作成功"
	);
	echo json_encode($result);
	exit;
}
else if($_GPC['op']=="del"){
	header('content-type:application/json;charset=utf8');
	pdo_delete("chat_ppt",array(id=>$id));
	$result=array(
			"success"=>1,
			"data"=>"删除成功"
	);
	echo json_encode($result);
	exit;
}


include $this->template('topic_ppts');

?>