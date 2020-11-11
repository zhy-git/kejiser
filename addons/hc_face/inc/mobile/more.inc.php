<?php
    defined('IN_IA') or exit('Access Denied');
    require_once IA_ROOT."/addons/hc_face/inc/model/account.php"; 
    global $_GPC, $_W;
    $weid = $_W['uniacid'];


    $basic = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'basic'.$weid),array('value')),'true');
    $fenxiao = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'fenxiao'.$weid),array('value')),'true');
    
    $basic['qrcode'] = tomedia($basic['qrcode']);


    include $this->template('more');