<?php
    defined('IN_IA') or exit('Access Denied');
    require_once IA_ROOT."/addons/hc_face/inc/model/account.php"; 
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $type = $_GPC['type'];
    $rid = $_GPC['rid'];
    $pid = empty($_GPC['pid'])?0:trim($_GPC['pid']);
    
    $account = new Account($pid);
	$account->account();
    $account->redirect();
    $forward = $account->share();
    
    $pay = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'pay'.$weid),array('value')),'true');
    $lock = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'lock'.$weid),array('value')),'true');
    $info = pdo_get('hcface_goods',array('weid'=>$weid,'type'=>$type));
    if(!empty($info)){
        $info['sub'] = json_decode($info['sub'],true);
        $info['desc']= htmlspecialchars_decode($info['desc']); 
    }
    //echo "<pre>";print_r($info);die;
    include $this->template('unlock');