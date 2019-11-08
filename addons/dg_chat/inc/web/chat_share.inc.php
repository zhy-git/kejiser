<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];


$share=pdo_fetch("SELECT * FROM ".tablename("chat_share")." WHERE uniacid=:uniacid",array(":uniacid"=>$uniacid));
if(checksubmit()){
	
	empty($_GPC['share_title']) && message('请填写分享标题');
	empty($_GPC['share_img']) && message('请填写分享图片');
	empty($_GPC['share_desc']) && message('请填写分享描述');
	
	$data=array(
			"uniacid"=>$uniacid,
			"share_title"=>$_GPC['share_title'],
			"share_img"=>$_GPC['share_img'],
			"share_desc"=>$_GPC['share_desc']
	);
	
	if(empty($share)){
		$data['create_time']=time();
	    pdo_insert("chat_share",$data);
	}else {
		pdo_update("chat_share",$data,array("id"=>$share['id']));
	}
	message("更新成功！","","success");
}
include $this->template('chat_share');
?>