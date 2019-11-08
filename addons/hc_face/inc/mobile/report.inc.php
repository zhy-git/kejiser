<?php
defined('IN_IA') or exit('Access Denied');
require_once IA_ROOT."/addons/hc_face/inc/model/account.php"; 
require_once IA_ROOT."/addons/hc_face/core/phpqrcode/qrlib.php";
global $_GPC, $_W;

$pid = empty($_GPC['pid'])?0:trim($_GPC['pid']);

$account = new Account($pid);
$account->account();
$account->redirect();
$forward = $account->share();

$weid = $_W['uniacid'];
$uid  = $_COOKIE['uid'];
$rid  = $_GPC['rid'];

$pay = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'pay'.$weid),array('value')),'true');

$report = pdo_get('hcface_report', array('id'=>$rid));
$avatar = pdo_get('hcface_avatar',array('id'=>$report['aid']));

$loop = array(
	'avatar' => $_W['siteroot'].$avatar['avatar'],
	'name'   => $report['name'],
	'face' => array(
		'top'     => json_decode($report['top'],true),
		'eyebrow' => json_decode($report['eyebrow'],true),
		'eye'     => json_decode($report['eye'],true),
		'mouse'   => json_decode($report['mouse'],true),
		'nose'    => json_decode($report['nose'],true),
	),
	'summary' => $report['summary'],
	'score' => $report['score'],
	'score_detail' => json_decode($report['score_detail'],true),
	'eye' => array(
		'eye' => json_decode($report['eye'],true),
		'desc' => $report['eye_desc'],
		'pos' => $avatar['eye']
	),
	'mouse' => array(
		'mouse' => json_decode($report['mouse'],true),
		'desc' => $report['mouse_desc'],
		'pos' => $avatar['mouse']
	),
	'nose' => array(
		'nose' => json_decode($report['nose'],true),
		'desc' => $report['nose_desc'],
		'pos' => $avatar['nose']
	),
	'five' => array(
		'five1' => $report['five1'],
		'rate1' => $report['five1_rate'],
		'five2' => $report['five2'],
		'rate2' => $report['five2_rate'],
		'desc'  => $report['five_desc'],
	),
	'emotion' => $report['emotion'],
	'cause' => $report['cause']
);

$name = $report['name'];
$list = pdo_getall('hcface_goods', array('weid'=>$weid), array() , '' , 'id ASC');
foreach ($list as $key => $val) {
    $list[$key]['ctitle'] = str_replace('#name#', $name, $val['ctitle']);
    $list[$key]['thumb'] = tomedia($val['thumb']);
}
$fenxiao = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'fenxiao'.$weid),array('value')),'true');
if(!empty($fenxiao['purl'])){
    $url = $fenxiao['purl'].'/app/index.php?i='.$_W['uniacid'].'&c=entry&do=index&m=hc_face&pid='.$uid;
}else{
    $url = $_W['siteroot'].'app/index.php?i='.$_W['uniacid'].'&c=entry&do=index&m=hc_face&pid='.$uid;
}

$dir = IA_ROOT.'/addons/hc_face/upload/';
if(!file_exists($dir)){
    mkdir($dir,0777,true);
}
$path = IA_ROOT.'/addons/hc_face/qrcode/'.$uid.'.png';
QRcode::png($url,$path);

$qrcode = $_W['siteroot'].'addons/hc_face/qrcode/'.$uid.'.png';

include $this->template('report');