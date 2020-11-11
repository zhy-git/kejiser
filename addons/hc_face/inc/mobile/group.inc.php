<?php
    defined('IN_IA') or exit('Access Denied');
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $uid = $_COOKIE['uid'];
    
    $team = pdo_getall('hcface_users',array('pid'=>$uid));

    $one = pdo_getcolumn('hcface_nexus',array('pid'=>$uid),array('count(id)'));
    $two = pdo_getcolumn('hcface_nexus',array('ppid'=>$uid),array('count(id)'));
    $thr = pdo_getcolumn('hcface_nexus',array('pppid'=>$uid),array('count(id)'));
    $team = $one+$two+$thr;


    $nexus = pdo_fetchall("SELECT a.uid,b.avatar,b.nickname,b.createtime FROM ".tablename('hcface_nexus')." a left join ".tablename('hcface_users')." b on a.uid=b.uid where a.pid=:pid ORDER BY ctime DESC",array(':pid'=>$uid));
    //echo "<pre>";print_r($nexus);die;
    foreach ($nexus as $key => $val) {
        $nexus[$key]['type'] = '直接代理';
        $second = pdo_fetchall("SELECT a.uid,b.avatar,b.nickname,b.createtime FROM ".tablename('hcface_nexus')." a left join ".tablename('hcface_users')." b on a.uid=b.uid where a.pid=:pid ORDER BY ctime DESC",array(':pid'=>$val['uid']));
        foreach ($second as $k => $v) {
            $second[$k]['type'] = '裂变代理';

            $third = pdo_fetchall("SELECT b.avatar,b.nickname,b.createtime FROM ".tablename('hcface_nexus')." a left join ".tablename('hcface_users')." b on a.uid=b.uid where a.pid=:pid ORDER BY ctime DESC",array(':pid'=>$v['uid']));
            foreach ($third as $k1 => $v1) {
                $third[$k1]['type'] = '裂变代理';
            }

            $second[$k]['third'] = $third;

        }
        $nexus[$key]['second'] = $second;
    }

    //echo "<pre>";print_r($nexus);die;

    include $this->template('group');