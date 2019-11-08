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

    $rid = pdo_getcolumn('hcface_report',array('uid'=>$uid,'name !='=>''),array('min(id)'));
    if(!empty($rid)){
        pdo_update('hcface_report',array('unlock'=>1),array('id'=>$rid));
        $url = $_W['attachment'].$_W['siteroot'].'app/index.php?i='.$weid.'&c=entry&rid='.$rid.'&do=report&m=hc_face';
    }else{
        $url = $_W['attachment'].$_W['siteroot'].'app/index.php?i='.$weid.'&c=entry&do=index&m=hc_face';
    }
    header('Location: '.$url);