<?php
    defined('IN_IA') or exit('Access Denied');
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $basic = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'basic'.$weid),array('value')),'true');

    $basic['kfqrcode'] = tomedia($basic['kfqrcode']);
    include $this->template('contect');