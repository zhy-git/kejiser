<?php
    defined('IN_IA') or exit('Access Denied');
    require_once IA_ROOT."/addons/hc_face/inc/model/account.php"; 
    global $_GPC, $_W;
    $weid = $_W['uniacid'];

    $pid = empty($_GPC['pid'])?0:trim($_GPC['pid']);
    
    $account = new Account($pid);
	$account->account();
    $account->redirect();
    $forward = $account->share();
    $basic = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'basic'.$weid),array('value')),'true');
    
    


    include $this->template('rank');