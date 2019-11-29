<?php
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;

    $hasuser = pdo_get('zofui_sitetemp_reguser',array('openid' => $_W['openid'],'uniacid' => $_W['uniacid'] ));
    if ($hasuser) {
    	$this->result(0, '服务器获取用户成功',$hasuser);
    }else{
       $user = [
         'openid'  => $_W['openid'],
         'uniacid' => $_W['uniacid'],
         'nickname' => $_GPC['nickName'],
         'headimgurl' => $_GPC['avatarUrl'],
         'createtime' => time(),
        ];
	    $result = pdo_insert('zofui_sitetemp_reguser', $user);
	    if ($result) {
	    	$this->result(0, '服务器注册用户成功',$result);
	    }else{
	    	$this->result(0, '服务器注册用户失败',$result);
	    }
    }

    



