<?php
    defined('IN_IA') or exit('Access Denied');
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $type = $_GPC['type'];
    $uid  = $_COOKIE['uid'];

    $user = pdo_get('hcface_users',array('uid'=>$uid));
    $pay = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'pay'.$weid),array('value')),'true');
    $fenxiao = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'fenxiao'.$weid),array('value')),'true');

	if(empty($fenxiao[level])){
		$fenxiao['level'] = 3;
	}
	if(empty($fenxiao[grade][1][grade])){
		$fenxiao[grade][1][grade] = '代理';
	}
	if(empty($fenxiao[grade][2][grade])){
		$fenxiao[grade][2][grade] = '合伙人';
	}
	
	if(empty($fenxiao[grade][1][money])){
		$fenxiao[grade][1][money] = '9.9';
	}
	if(empty($fenxiao[grade][2][money])){
		$fenxiao[grade][2][money] = '19.9';
	}
	if(!is_array($fenxiao[commission][1])){
		unset($fenxiao[commission][1]);
		$fenxiao[commission][1][commission1] = '15';
		$fenxiao[commission][1][commission2] = '10';
		$fenxiao[commission][1][commission3] = '8';
	}
	if(!is_array($fenxiao[commission][2])){
		unset($set[fenxiao][commission][2]);
		$fenxiao[commission][2][commission1] = '20';
		$fenxiao[commission][2][commission2] = '15';
		$fenxiao[commission][2][commission3] = '10';
	}

    include $this->template('upgrade');