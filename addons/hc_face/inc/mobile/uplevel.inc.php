<?php
defined('IN_IA') or exit('Access Denied');
require_once IA_ROOT."/addons/hc_face/inc/model/functions.php"; 
global $_GPC, $_W;
$weid = $_W['uniacid'];
$trade_no = date('YmdHis').rand(1000,9999);
$uid = $_COOKIE['uid'];
$openid = pdo_getcolumn('hcface_users',array('uid'=>$uid),array('openid'));
$level = $_GPC['level'];
$fenxiao = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'fenxiao'.$weid),array('value')),'true');



$pay = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'pay'.$weid),array('value')),'true');

//echo "<pre>";print_r($fenxiao);die;
if($level==1){
    if(empty($fenxiao[grade][1][money])){
        $fee =  '9.9';
    }else{
        $fee = $fenxiao[grade][1][money];
    }
    if(empty($fenxiao[grade][1][grade])){
        $title = '代理';
    }else{
        $title = $fenxiao[grade][1][grade];
    }
}

if($level==2){
    if(empty($fenxiao[grade][2][money])){
        $fee =  '19.9';
    }else{
        $fee = $fenxiao[grade][2][money];
    }
    if(empty($fenxiao[grade][2][grade])){
        $title = '合伙人';
    }else{
        $title = $fenxiao[grade][2][grade];
    }
}

$params = array(
    'weid'  => $weid,
    'title' => $title,
    'trade_no' => $trade_no,
    'uid'   => $uid,
    'openid'=> $openid,
    'price' => $fee,
    'level' => $level+1,
    'createtime' => time()
);
$res = pdo_insert('hcface_upgrade',$params);
if($pay['paytype']!=1){
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
            $notify_url = $_W['siteroot'].'addons/hc_face/uplevel.php';

            $model = new HcfkModel();
            $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
            $data["appid"] = $wechat_payment['appid'];
            $data["body"] = '会员升级';
            $data["mch_id"] = $wechat_payment['mchid'];
            $data["nonce_str"] = $model->getRandChar(32);
            $data["notify_url"] = $notify_url;
            $data["out_trade_no"] = $trade_no;
            $data["spbill_create_ip"] = $model->get_client_ip();
            $data["total_fee"] = $params['price']*100;
            $data["trade_type"] = "JSAPI";
            $data["openid"] = $openid;
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
        //返回小程序参数
            $notify_url = $_W['siteroot'].'addons/hc_face/h5uplevel.php';

            $model = new HcfkModel();
            $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
            $data["appid"] = $wechat_payment['appid'];
            $data["body"] = '会员升级';
            $data["attach"] = $openid;
            $data["mch_id"] = $wechat_payment['mchid'];
            $data["nonce_str"] = $model->getRandChar(32);
            $data["notify_url"] = $notify_url;
            $data["out_trade_no"] = $trade_no;
            $data["spbill_create_ip"] = $model->get_client_ip();
            $data["total_fee"] = $params['price']*100;
            $data["trade_type"] = "MWEB";
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
    $paydata['total_fee'] = $fee;//金额
    $paydata['param']= $weid;//其他参数
    $paydata['me_back_url']= $_W['sitescheme'].$_SERVER['HTTP_HOST'].'/app/index.php?i='.$_W['uniacid'].'&c=entry&do=upgrade&m=hc_face';//支付成功后跳转
    $paydata['notify_url']= $_W['sitescheme'].$_SERVER['HTTP_HOST'].'/addons/hc_face/uplevel2.php?i='.$_W['uniacid']; //支付成功后异步回调

    $geturl=fastpay_order($paydata);//获取支付链接
    exit(json_encode(array('code'=>1,'msg'=>'操作成功','url'=>$geturl)));
}