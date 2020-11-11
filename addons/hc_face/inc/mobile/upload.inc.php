<?php
defined('IN_IA') or exit('Access Denied');
global $_GPC, $_W;

$weid = $_W['uniacid'];
$uid = $_COOKIE['uid'];
$openid = $_COOKIE['openid'];
$pay = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'pay'.$weid),array('value')),'true');
$num = pdo_getcolumn('hcface_report',array('uid'=>$uid,'unlock'=>1),array('count(id)'));

//判断是否开启关注公众号解锁
$lock = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'lock'.$weid),array('value')),'true');
$lock['qrcode'] = tomedia($lock['qrcode']);
if($lock[app]==1 && strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false){
	//判断当前用户是否关注公众号
	$account_api = WeAccount::create();
	$access_token = $account_api->getAccessToken();
	$url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$openid."&lang=zh_CN";

	$res = ihttp_get($url);
	$res = json_decode($res['content'],true);
	$subscribe = $res['subscribe'];
	if($subscribe==0 && $num==0){
		$wxapp = 1;
	}
}


include $this->template('upload');