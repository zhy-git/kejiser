<?php
    defined('IN_IA') or exit('Access Denied');
    require_once IA_ROOT."/addons/hc_face/inc/model/account.php"; 
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $type = $_GPC['type'];

    $fenxiao = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'fenxiao'.$weid),array('value')),'true');
    if(empty($fenxiao['recimg'])){
    	$fenxiao['recimg'] = '../addons/hc_face/public/recommend.png';
    }else{
        $fenxiao['recimg'] = tomedia($fenxiao['recimg']);
    }
    include $this->template('recommend');