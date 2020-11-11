<?php
define('IN_MOBILE', true);
require '../../framework/bootstrap.inc.php';
if (!function_exists('get_openid')) {
    require IA_ROOT."/addons/hc_face/fastpay/Fast_Cofig.php";
}
$weid = $_POST['me_param'];
$pay = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'pay'.$weid),array('value')),'true');

define("FAST_APPKEY", $pay['appkey']);//你的appkey
define("SECRET_KEY", $pay['secretkey']);//你的秘钥

$sign=$_POST['sign'];//获取签名
$check_sign=notify_sign($_POST);
if($sign!=$check_sign){
  exit("签名失效");
//签名计算请查看怎么计算签名,或者下载我们的SDK查看
}
if ($_POST['status'] == 'y') {

    $ordersn = trim($_POST['order_no']);
    $params = array(
        'transaction_id'=> $_POST['order_no'],
        'paytime'		=> time(),
        'status'		=> 1
    );
    pdo_update('hcface_upgrade',$params,array('trade_no'=>$ordersn));

    $upgrade = pdo_get('hcface_upgrade',array('trade_no'=>$ordersn));


    pdo_update('hcface_users',array('level'=>$upgrade['level']),array('openid'=>$upgrade['openid']));
    echo 'success';
    return ;
}
