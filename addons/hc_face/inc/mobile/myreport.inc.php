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
    if($_GPC['act']=='del'){
        $id = $_GPC['id'];
        pdo_delete('hcface_report',array('id'=>$id));
        exit(json_encode(array('code'=>1,'msg'=>'删除成功')));
    }else{
        $list = pdo_getall('hcface_report', array('uid'=>$uid,'unlock'=>1,'name !='=>''), array('id','aid','name'), 'createtime DESC');
        foreach ($list as $key => $val) {
            $list[$key]['avatar'] = $_W['siteroot'].pdo_getcolumn('hcface_avatar',array('id'=>$val['aid']),array('avatar'));
        }
        include $this->template('myreport');
    }