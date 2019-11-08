<?php
global $_W,$_GPC;
load()->func('tpl');
$uniacid=$_W['uniacid'];
$pindex = max(1, intval($_GPC['page']));
$psize = 10;

$list = pdo_fetchall("select * from ".tablename('chat_gift')." WHERE uniacid=:uniacid ORDER BY displayorder desc,id desc LIMIT ". ($pindex - 1) * $psize . ',' . $psize,array(":uniacid"=>$uniacid));
$total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename("chat_gift")."  WHERE uniacid=:uniacid",array(":uniacid"=>$uniacid));
$pager = pagination($total, $pindex, $psize);
$gift=pdo_get("chat_gift",array("id"=>$_GPC['id']));
if($_GPC['op']=='delete'){
	$id = intval($_GPC['id']);
    $delete = pdo_fetch("SELECT id  FROM " . tablename("chat_gift") . " WHERE id = '$id' AND uniacid=" . $uniacid);
   if (empty($delete)) {
        message('抱歉，标签不存在或是已经被删除！', $this->createWebUrl('chat_gift'), 'error');
     }
    pdo_delete("chat_gift", array('id' => $id));
    message('标签删除成功！', $this->createWebUrl('chat_gift'), 'success');
}
if(checksubmit('submit')){
	$id=$_GPC['gift_id'];
	$data=array(
		'uniacid'=>$uniacid,
		'gift_name'=>$_GPC['gift_name'],
		'gift_img'=>tomedia($_GPC['gift_img']),
		'gift_price'=>$_GPC['gift_price'],
		'status'=>$_GPC['status'],
		'create_time'=>time(),
		'displayorder'=>$_GPC['displayorder']
		);
	if(empty($id)){
		pdo_insert("chat_gift",$data);
	}else{
		pdo_update("chat_gift",$data,array("id"=>$id));
	}
	message('更新标签成功！', $this->createWebUrl('chat_gift'), 'success');
}
include $this->template("chat_gift");
?>