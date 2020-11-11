<?php
    defined('IN_IA') or exit('Access Denied');
    require_once IA_ROOT."/addons/hc_face/inc/model/functions.php"; 
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $uid  = $_COOKIE['uid'];
    $fenxiao = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'fenxiao'.$weid),array('value')),'true');
    if(!empty($fenxiao['purl'])){
		$url = 'http://'.$fenxiao['purl'].'/app/index.php?i='.$_W['uniacid'].'&c=entry&do=index&m=hc_face&pid='.$uid;
	}else{
		$url = $_W['siteroot'].'app/index.php?i='.$_W['uniacid'].'&c=entry&do=index&m=hc_face&pid='.$uid;
	}
	$model = new HcfkModel();
	$qrcode = $model->wxqrcode($url,$uid);

	$promo = random(16).'.jpeg';
	$image = $model->qrcode(tomedia($fenxiao['bgimg']),tomedia($qrcode),$promo);

	$promo_code = pdo_getcolumn('hcface_users',array('uid'=>$uid),array('promo_code'));
	unlink(IA_ROOT."/addons/hc_face/upload/".$promo_code);

	pdo_update('hcface_users',array('promo_code'=>$promo),array('uid'=>$uid));
	exit(json_encode(array('code'=>1,'msg'=>'生成成功','url'=>$_W['siteroot'].$image)));