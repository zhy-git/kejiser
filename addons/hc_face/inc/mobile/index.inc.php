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
    $basic = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'basic'.$weid),array('value')),'true');
    //banner'
    $banner = pdo_getall('hcface_banner',array('weid'=>$weid), array() , '' , array('displayorder') , array(1,10));
    foreach($banner as $key=>$val){
        $banner[$key]['banner'] = tomedia($val['banner']);
    }

    $res = pdo_get('hcface_report',array('uid'=>$uid,'unlock'=>1));
    $last = pdo_fetch("SELECT * FROM ".tablename('hcface_report')." a LEFT JOIN ".tablename('hcface_avatar')." b on a.aid=b.id WHERE a.weid=:weid ORDER BY a.createtime desc",array(':weid'=>$weid));


    $num = pdo_getcolumn('hcface_report',array('weid'=>$weid,'unlock'=>1),array('count(id)'));



    $list = pdo_getall('hcface_report',array('uid'=>$uid,'unlock'=>1),array('uid','score'));
    $child = pdo_getall('hcface_nexus',array('pid'=>$uid),array('uid'));

    foreach ($child as $key => $val) {
        $clist[$key] = pdo_getall('hcface_report',array('uid'=>$val['uid'],'unlock'=>1),array('uid','score'));
        $list = array_merge($list,$clist[$key]);
    }

    foreach ($list as $key => $val) {
        $lists[$val[score]] = $val;
    }
    krsort($lists);
    $i=0;
    foreach ($lists as $k => $v) {
        $i++;
        if($v['uid']==$uid){
            $rank = $i;
            break;
        }
    }


    
    include $this->template('index');