<?php
global $_W,$_GPC;
//获取用户信息
$user_info = $this->getUserInfo();
$avatar = $user_info->headimgurl;
$cfg = $this->module['config'];
$nickname = $user_info->nickname;
$uniacid = $_W['uniacid'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($user_agent, 'MicroMessenger') === false) {

    $is_ag=1;
}else{
     $is_ag=2;
}
if(!empty($_GPC['pay'])){
	header('content-type:application/json;charset=utf8');
	$setting_id = $_GPC['fl_id'];
	$seting_info = pdo_fetch("select * from ".tablename("chat_vipsetting")." where uniacid=:uniacid and id=:id",array(":uniacid"=>$uniacid,':id'=>$setting_id));
	if(empty($seting_info)){
		$fmdata = array(
			'success'=>-2,
			'msg'=>'不存在此价格，请重新进入'
		);
		echo json_encode($fmdata);exit;
	}
	$money = $seting_info['money']*100;
	$out_trade_no =  $this->build_order_sn();
	$data=array(
			'uniacid'=>$uniacid,
			'topic_id'=>$setting_id,
			'pay_money'=>$money/100,
			'pay_type'=>4,
			'pay_uid'=>$user_info->uid,
			'pay_openid'=>$user_info->openid,
			'pay_nickname'=>$user_info->nickname,
			'pay_avatar'=>$user_info->headimgurl,
			"out_trade_no"=>$out_trade_no,
			'pay_status'=>0,
			"create_time"=>time()
	);
	pdo_insert("chat_payment",$data);
	$order_id=pdo_insertid();
	if($_GPC['mini_pay'] == 'true'){
		$topic_url=$this->createMobileUrl('my_vip');
		$topic_url  = substr($topic_url,1);
		$topic_url = $_W['siteroot'].'app'.$topic_url;
		$fmdata = array(
			'success'=>1,
			'out_trade_no'=>$out_trade_no,
			'topic_url'=>$topic_url
		);
		echo json_encode($fmdata);exit;
	}else{
		require_once(MODULE_ROOT . '/WxPayPubHelper/WxPayPubHelper.php');
		//load()->func("logging");
		$kjSetting=$this->findKJsetting();

		$jsApi = new JsApi_pub($kjSetting);
		$openid=$user_info->openid;
		$unifiedOrder = new UnifiedOrder_pub($kjSetting);

		$unifiedOrder->setParameter("openid", "$openid");//商品描述
		$unifiedOrder->setParameter("body", "会员购买");//商品描述
		$timeStamp = time();

		$unifiedOrder->setParameter("out_trade_no", "$out_trade_no");//商户订单号
		$unifiedOrder->setParameter("total_fee", $money);//总金额
		$notifyUrl = $_W['siteroot'] . "addons/dg_chat/notify.php";
		$unifiedOrder->setParameter("notify_url", $notifyUrl);//通知地址
		if ($is_ag== 1) {
		    $unifiedOrder->setParameter("trade_type", "NATIVE");//交易类型
		           
        }else{
             $unifiedOrder->setParameter("trade_type", "JSAPI");//交易类型
        }

		$prepay_id = $unifiedOrder->getPrepayId();
		$jsApi->setPrepayId($prepay_id);
		$jsApiParameters = $jsApi->getParameters();
		 if ($is_ag== 1) {
             $code_url=$unifiedOrder->result['code_url'];
              
                $level = 'L';
                $size = 4;
                $url=urldecode($code_url);
                
                ob_start();
                QRcode::png($url,false,$level, $size);
                $imageString = base64_encode(ob_get_contents());
                ob_clean();
                ob_end_clean();
                $imageString="data:image/png;base64,".$imageString;
        }
        header('content-type:application/json;charset=utf8');
		$fmdata = array(
			'success'=>-1,
			'code_url'=>$imageString,
			'order_id'=>$order_id,
			'jsApiParameters'=>$jsApiParameters
		);
		echo json_encode($fmdata);exit;
	}
	
}



//查找用户信息
$user = pdo_fetch('select id,nickname,info_status,end_time,settime from '.tablename('chat_users').' where id=:id and uniacid=:uniacid',array('id'=>$user_info->uid,':uniacid'=>$uniacid));

//会员冲内置想
$vip_list = pdo_fetchall("select * from ".tablename("chat_vipsetting")." where uniacid=:uniacid and enabled=1 order by money asc ",array(":uniacid"=>$uniacid));
include $this->template('my_vip');