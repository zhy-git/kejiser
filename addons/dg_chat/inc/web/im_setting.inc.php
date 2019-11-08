<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$this->load(array("Dg_Base","Chat_ImSetting"));
$uniacid=$_W['uniacid'];
$private_path=MODULE_ROOT.'/private_key/private_key_'.$uniacid;
$wechat['privateexists']=file_exists($private_path);


$record=Chat_ImSetting::findFirstRecordByCodition(array(":uniacid"=>$uniacid));

if($_W['ispost']){
	empty($_GPC['sdkappid']) && message('请填写SdkAppId');
	empty($_GPC['account_type']) && message('请填写accountType');
	empty($_GPC['admin_account']) && message('请填写帐号管理员');
	//empty($_GPC['check_type']) && message('请填写签名方式');
	
	if (empty($_FILES['wechat']['tmp_name']['privatepath']) && !file_exists($private_path)) {
		message('请上传私钥',"","error");
	}
	
	$data=array(
			"uniacid"=>$uniacid,
			"sdkappid"=>$_GPC['sdkappid'],
			"account_type"=>$_GPC["account_type"],
			"admin_account"=>$_GPC["admin_account"],
			"check_type"=>"remote"
	
	);
	if(empty($record)){
		$data['create_time']=time();
		pdo_insert("chat_imsetting",$data);
	}else{
		pdo_update("chat_imsetting",$data,array("uniacid"=>$uniacid));
	}
	
	if (empty($_FILES['wechat']['tmp_name']['privatepath']) && !file_exists($private_path)) {
		message('请上传私钥文件.',"","error");
	}
	
	load()->func('file');
	$result=mkdirs(MODULE_ROOT.'/private_key/');
	if(!$result){
		message("系统没有对本插件文件夹的写权限","",'error');
		return;
	}
	
	file_put_contents($private_path, file_get_contents($_FILES['wechat']['tmp_name']['privatepath']));
	pdo_delete("chat_sign",array("uniacid"=>$uniacid));
	message("保存成功！","","success");
}

include $this->template('im_setting');
?>