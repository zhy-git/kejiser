<?php
    defined('IN_IA') or exit('Access Denied');
    require_once IA_ROOT."/addons/hc_face/inc/model/account.php"; 
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $type = $_GPC['type'];
    $rid = $_GPC['rid'];
    $title = pdo_getcolumn('hcface_goods', array('weid'=>$weid,'type'=>$type), array('title'));
    if($type=='sy'){
        $res = pdo_get('hcface_report',array('id'=>$rid),array('name','cause'));
        $res['content'] = $res['cause'];
    }elseif($type=='qg'){
        $res = pdo_get('hcface_report',array('id'=>$rid),array('name','emotion'));
        $res['content'] = $res['emotion'];
    }
    include $this->template('unlockreport');