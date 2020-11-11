<?php
defined('IN_IA') or exit('Access Denied');
require_once IA_ROOT."/addons/hc_face/inc/model/functions.php"; 
global $_GPC, $_W;
$weid = $_W['uniacid'];
$type = $_GPC['type'];
$rid = $_GPC['rid'];
$uid = $_COOKIE['uid'];
$trade_no = date('YmdHis').rand(1000,9999);
$pay = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'pay'.$weid),array('value')),'true');
$openid = pdo_getcolumn('hcface_users',array('uid'=>$uid),array('openid'));
if($type=='bg'){
    $money = $pay['report_money'];
    pdo_update('hcface_report',array('name'=>$_GPC['name']),array('id'=>$rid));
}else{
    $money = pdo_getcolumn('hcface_goods',array('weid'=>$weid,'type'=>$type),array('price'));
}

$params = array(
    'weid'      => $weid,
    'type'      => $type,
    'uid'       => $uid,
    'rid'       => $rid,
    'openid'    => $openid,
    'trade_no'  => $trade_no,
    'money'     => $money,
    'createtime'=> time()
);
$res = pdo_insert('hcface_order',$params);
if(empty($pay['paytype'])){

    if($res){
        load()->model('payment');
        load()->model('account');
        $setting = uni_setting($weid, array('payment'));
        $wechat_payment = array(
            'appid'   => $_W['account']['key'],
            'signkey' => $setting['payment']['wechat']['signkey'],
            'mchid'   => $setting['payment']['wechat']['mchid'],
        );
        
        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
            //返回小程序参数
            $notify_url = $_W['siteroot'].'addons/hc_face/wxpay.php';

            $model = new HcfkModel();
            $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
             file_put_contents(IA_ROOT."/addons/hc_face/trade",$trade_no);
            $data["appid"] = $wechat_payment['appid'];
            $data["body"] = '面相解锁';
            $data["mch_id"] = $wechat_payment['mchid'];
            $data["nonce_str"] = $model->getRandChar(32);
            $data["notify_url"] = $notify_url;
            $data["out_trade_no"] = $trade_no;
            $data["spbill_create_ip"] = $model->get_client_ip();
            $data["total_fee"] = $money*100;
            $data["trade_type"] = "JSAPI";
            $data["openid"] = $openid;
            $data["sign"] = $model->getSign($data,$wechat_payment['signkey']);
            //echo "<pre>";print_R($data);die;
            $xml = $model->arrayToXml($data);
            $response = $model->postXmlCurl($xml, $url);
            $ress = $model->xmlstr_to_array($response);
            if($ress['return_code']=='FAIL'){
                exit(json_encode(array('code'=>0,'msg'=>$ress['return_msg'])));
            }
            if($ress['result_code']=='FAIL'){
                return $this->result(1, '操作失败',$ress['err_code'].$ress['err_code_des']);
            }
            if($ress['return_code']=='SUCCESS'){
                $datas["appId"] = $wechat_payment['appid'];
                $datas["nonceStr"] = $model->getRandChar(32);
                $datas["package"] = "prepay_id=".$ress['prepay_id'];
                $datas['signType'] = "MD5";
                $datas["timeStamp"] = time().'';
                $datas["paySign"] = $model->MakeSign($datas,$wechat_payment['signkey']);
                exit(json_encode($datas));
            }else{
                exit(json_encode(array('code'=>0,'msg'=>'操作失败')));
            }
        }else{
            $notify_url = $_W['siteroot'].'addons/hc_face/wxpay.php';

            $model = new HcfkModel();
            $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
            $data["appid"] = $wechat_payment['appid'];
            $data["body"] = '面相解锁';
            $data["attach"] = $openid;
            $data["mch_id"] = $wechat_payment['mchid'];
            $data["nonce_str"] = $model->getRandChar(32);
            $data["notify_url"] = $notify_url;
            $data["out_trade_no"] = $trade_no;
            $data["spbill_create_ip"] = $model->get_client_ip();
            $data["total_fee"] = $money*100;
            $data["trade_type"] = "MWEB";
            $data["scene_info"] = json_encode(array('h5_info'=>array('type'=>'Wap','wap_url'=>$_W['siteurl'],'wap_name'=>'面相解锁')));

            //print_r($data["scene"]);die;
            $data["sign"] = $model->getSign($data,$wechat_payment['signkey']);

            $xml = $model->arrayToXml($data);
            $response = $model->postXmlCurl($xml, $url);
            $ress = $model->xmlstr_to_array($response);
            if($ress['return_code']=='FAIL'){
                exit(json_encode(array('code'=>0,'msg'=>$ress['return_msg'])));
            }
            if($ress['result_code']=='FAIL'){
                return $this->result(1, '操作失败',$ress['err_code'].$ress['err_code_des']);
            }
            if($ress['return_code']=='SUCCESS'){
                $ress['host'] = $_W['sitescheme'].$_SERVER['HTTP_HOST'];
                $ress['weid'] = $_W['uniacid'];
                exit(json_encode($ress));
            }else{
                exit(json_encode(array('code'=>0,'msg'=>'操作失败')));
            }
        }
    }else{
        exit(json_encode(array('code'=>0,'msg'=>'购买失败')));
    }
}else{
    if (!function_exists('get_openid')) {
        require IA_ROOT."/addons/hc_face/fastpay/Fast_Cofig.php";
    }
    
    define("FAST_APPKEY", $pay['appkey']);//你的appkey
    define("SECRET_KEY", $pay['secretkey']);//你的秘钥
    $paydata=array();     
    $paydata['uid'] = $openid;//支付用户id
    $paydata['order_no'] = $trade_no;//订单号
    $paydata['total_fee'] = $money;//金额
    $paydata['pay_title'] = '面相解锁';
    $paydata['param']= $weid;//其他参数

    $host = $_W['sitescheme'].$_SERVER['HTTP_HOST'];
    if($type=='bg' || $type=='bz'){
        $paydata['me_back_url']= $host.'/app/index.php?i='.$_W['uniacid'].'&c=entry&rid='.$rid.'&do=report&m=hc_face';//支付成功后跳转
    }else{
        $paydata['me_back_url']= $host.'/app/index.php?i='.$_W['uniacid'].'&c=entry&type='.$type.'&rid='.$rid.'&do=unlockreport&m=hc_face';//支付成功后跳转
    }
    $paydata['notify_url']= $host.'/addons/hc_face/fastpay.php'; //支付成功后异步回调
    $geturl=fastpay_order($paydata);//获取支付链接
    exit(json_encode(array('code'=>1,'msg'=>'操作成功','url'=>$geturl)));
}