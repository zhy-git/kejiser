<?php
    defined('IN_IA') or exit('Access Denied');
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $uid = $_COOKIE['uid'];
    $type = $_GPC['type'];
    if($type==1){
        $title = '直接收益';
        $profit = pdo_getcolumn('hcface_commission',array('user_id'=>$uid,'sort'=>1),array('sum(profit)'));
        $list = pdo_fetchall("SELECT b.avatar,b.nickname,a.createtime,a.profit FROM ".tablename('hcface_commission')." a left join ".tablename('hcface_users')." b on a.sub_id=b.uid where a.user_id=:uid AND sort=1 ORDER BY a.createtime DESC",array(':uid'=>$uid));
        //echo "<pre>";pdo_debug();
    }else{
        $title = '裂变收益';
        $profit = pdo_getcolumn('hcface_commission',array('user_id'=>$uid,'sort'=>2),array('sum(profit)'));
        $list = pdo_fetchall("SELECT b.avatar,b.nickname,a.createtime,a.profit FROM ".tablename('hcface_commission')." a left join ".tablename('hcface_users')." b on a.sub_id=b.uid where a.user_id=:uid AND sort!=1 ORDER BY a.createtime DESC",array(':uid'=>$uid));
    }


    include $this->template('profit');