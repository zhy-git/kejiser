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
    
    $list = pdo_getall('hcface_report',array('uid'=>$uid,'unlock'=>1),array('uid','score','summary','five1','five2'));
    $child = pdo_getall('hcface_nexus',array('pid'=>$uid),array('uid'));

    foreach ($child as $key => $val) {
        $clist[$key] = pdo_getall('hcface_report',array('uid'=>$val['uid'],'unlock'=>1),array('uid','score','summary','five1','five2'));
        $list = array_merge($list,$clist[$key]);
    }

    foreach ($list as $key => $val) {
        $cuser[$key] = pdo_get('hcface_users',array('uid'=>$val['uid']),array('avatar','nickname'));
        $list[$key]['avatar'] = $cuser[$key]['avatar'];
        $list[$key]['nickname'] = $cuser[$key]['nickname'];
    } 
    foreach ($list as $key => $val) {
        $lists[$val[score].$key] = $val;
    }
    krsort($lists);
    $i=0;
    foreach ($lists as $k => $v) {
        $i++;
        if($v['uid']==$uid){
            $my = $v;
            $rank = $i;
            break;
        }
    }

    if($_GPC['act']=='ajaxpage'){

        $page = empty($_GPC['page'])?1:$_GPC['page'];
        //分页
        $s=1;
        $n=1;
        foreach ($lists as $k => $v) {
            $pagelist[$s][] = $v;
            if($n%5==0){
                $s++;
            }
            $n++;
        }
        exit(json_encode($pagelist[$page]));
    }else{
        include $this->template('rank');
    }




    //echo "<pre>";print_r($lists);die;
    