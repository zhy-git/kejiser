<?php
    defined('IN_IA') or exit('Access Denied');
    require_once IA_ROOT."/addons/hc_face/inc/model/account.php"; 
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $uid = $_COOKIE['uid'];
    $pid = empty($_GPC['pid'])?0:trim($_GPC['pid']);
    
    $account = new Account($pid);
	$account->account();
    $account->redirect();
    $forward = $account->share();

    $rid = pdo_getcolumn('hcface_report',array('uid'=>$uid,'unlock'=>1,'name !='=>''),array('min(id)'));

    $count = pdo_getcolumn('hcface_report',array('uid'=>$uid,'unlock'=>1,'name !='=>''),array('count(id)'));



    include $this->template('my');