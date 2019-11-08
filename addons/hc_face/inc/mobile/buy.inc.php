<?php
    defined('IN_IA') or exit('Access Denied');
    require_once IA_ROOT."/addons/hc_face/inc/model/account.php"; 
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $uid  = $_COOKIE['uid'];
    $pid = empty($_GPC['pid'])?0:trim($_GPC['pid']);
    
    $account = new Account($pid);
	$account->account();
    $account->redirect();
    $forward = $account->share();
    $pay = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'pay'.$weid),array('value')),'true');
    

    $report = pdo_getall('hcface_report', array('weid'=>$weid,'uid'=>$uid,'unlock'=>1,'name !='=>''), array() , '' , 'id ASC');
    

    $list = pdo_getall('hcface_goods', array('weid'=>$weid), array() , '' , 'id ASC');
    foreach ($list as $key => $val) {
        $list[$key]['thumb'] = tomedia($val['thumb']);
    }

    include $this->template('buy');