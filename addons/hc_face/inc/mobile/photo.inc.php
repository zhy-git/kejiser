<?php
defined('IN_IA') or exit('Access Denied');
global $_GPC, $_W;
$weid = $_W['uniacid'];
$uid  = $_COOKIE['uid'];
if($_GPC['act']=='uploadImg'){
	if(empty($_FILES["image"])){
        return $this->result(1, '请上传图片！');
    }
    $type=$_FILES["image"]["type"];
    $type=explode("/",$type);  
    $newfilename=time().rand(1000,9999);
    $dir = IA_ROOT.'/addons/hc_face/upload/';
    if(!file_exists($dir)){
        mkdir($dir);
        chmod($dir,0777);
    }
    if(move_uploaded_file($_FILES["image"]["tmp_name"],"../addons/hc_face/upload/".$newfilename.".".$type[1])){
        $thumb = $_W['siteroot'].'addons/hc_face/upload/'.$newfilename.".".$type[1];
        pdo_update('hcface_users',array('receipt_code'=>$thumb),array('weid'=>$weid,'uid'=>$uid));

        
        exit(json_encode(array('code'=>1,'msg'=>'图片上传成功','url'=>$thumb)));
    }else{
        exit(json_encode(array('code'=>0,'msg'=>'上传失败')));
    }
}else{
	$receipt_code = pdo_getcolumn('hcface_users',array('uid'=>$uid),array('receipt_code'));

	include $this->template('photos');
}