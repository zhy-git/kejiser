<?php
    defined('IN_IA') or exit('Access Denied');
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $basic = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'basic'.$weid),array('value')),'true');

    $content = htmlspecialchars_decode($basic['explain']);
    //echo "<pre>";print_r($info);die;
    include $this->template('agree');