<?php
global $_GPC,$_W;	
$this->load("mcrypt");
$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];
$user_info=$this->getuserinfo();
//$user_info=$this->getUserInfo();
//var_dump($user_info);die();
if(!$user_info){
  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}
$topic_id=$_GPC['topic_id'];
$fuid=$_GPC['fuid'];
$topic=pdo_fetch("SELECT * FROM ".tablename("chat_topic")." WHERE id=:id LIMIT 1",array(":id"=>$topic_id));
if(empty($topic)){
	exit;
}
//$coupon_list = $this->get_coupon($topic['room_paymoney'],$uniacid,$user_info->uid);
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($user_agent, 'MicroMessenger') === false) {
    $is_ag=1;
}else{
     $is_ag=2;  //是微信浏览器
}
$chat_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id LIMIT 1",array(":room_id"=>$topic['room_id']));

$money= $topic['room_paymoney'];
$money=intval($money*100);

if(!empty($_GPC['pay'])){
	$coupon_id = $_GPC['coupon_id'];
	header('content-type:application/json;charset=utf8');
	$is_pay=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_payment")." WHERE topic_id=:topic_id AND pay_openid=:openid AND pay_status=1",array(":openid"=>$user_info->openid,":topic_id"=>$topic_id));

	if(!empty($is_pay) &&$is_pay >0){
		$fmdata = array(
			'success'=>-2,
			'msg'=>'该课程您已经支付，请勿重复支付'
		);
		echo json_encode($fmdata);exit;
	}
	// $coupon = $this->have_money($coupon_id);
	// if(!empty($coupon)){
	// 	$money = $money - $coupon['coupon_money']*100;
	// }
	$out_trade_no =  $this->build_order_sn();
	$data=array(
			'uniacid'=>$uniacid,
			'room_id'=>$chat_room['room_id'],
			'topic_id'=>$topic_id,
			'pay_money'=>$money/100,
			'pay_type'=>2,
			'pay_uid'=>$user_info->uid,
			'pay_openid'=>$user_info->openid,
			'pay_nickname'=>$user_info->nickname,
			'pay_avatar'=>$user_info->headimgurl,
			"out_trade_no"=>$out_trade_no,
			'pay_status'=>0,
			"create_time"=>time(),
			'coupon_id'=>$coupon_id
	);
	if(!empty($fuid)){
		$data["payto_uid"]=$fuid;
		$data["fuid"]=$fuid;
	}
	if($money<0||$money==0){
		$data['pay_status'] =1;
	}
	pdo_insert("chat_payment",$data);
	$order_id=pdo_insertid();
	if($data['pay_status'] ==1){
		pdo_update("chat_coupon_use",array('use_time'=>time()),array('c_id'=>$coupon_id,'use_uid'=>$user_info->uid,'uniacid'=>$uniacid));
		$fmdata = array(
			'success'=>-2,
			'msg'=>'购买成功'
		);
		echo json_encode($fmdata);exit;
	}
	//var_dump($_GPC['mini_pay']);
	if($_GPC['mini_pay'] == 'true'){
		$topic_url=$this->createMobileUrl('chat',array("topic_id"=>$topic_id));
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
		$kjSetting=$this->findKJsetting();
		
		$unifiedOrder = new UnifiedOrder_pub($kjSetting);
		$openid=$user_info->openid;
		//var_dump($openid);die();
		$unifiedOrder->setParameter("openid",$openid);//商品描述  测试oXvLLwh6znyloEEqJbuyQ7A5vDUQ
		$unifiedOrder->setParameter("body", "付费听课");//商品描述
		$unifiedOrder->setParameter("out_trade_no", "$out_trade_no");//商户订单号
		$unifiedOrder->setParameter("total_fee", $money);//总金额
		$notifyUrl = $_W['siteroot'] . "addons/dg_chat/notify.php";
		$unifiedOrder->setParameter("notify_url", $notifyUrl);//通知地址
		//var_dump($unifiedOrder);die();
		if ($is_ag== 1) {
			$unifiedOrder->setParameter("trade_type", "NATIVE");//交易类型
        }else{
        	$unifiedOrder->setParameter("trade_type", "JSAPI");//交易类型
        }
        $unifiedOrderResult = $unifiedOrder->getResult();
       
		if ($unifiedOrderResult["return_code"] != "SUCCESS" || $unifiedOrderResult["result_code"] != "SUCCESS" ){
			$fmdata = array(
				'success'=>-1,
				'msg'=>'支付失败'
			);
			echo json_encode($fmdata);exit;
		}
		if ($is_ag == 1) {
			$code_url=$unifiedOrderResult['code_url'];
			$level = 'L';
			$size = 4;
			$url=urldecode($code_url);
			ob_start();
			QRcode::png($url,false,$level, $size);
			$imageString = base64_encode(ob_get_contents());
			ob_clean();
			ob_end_clean();
			$imageString="data:image/png;base64,".$imageString;
		}else{
			$jsApi = new JsApi_pub($kjSetting);
			$jsApi->setPrepayId($unifiedOrderResult['prepay_id']);
			$jsApiParameters = $jsApi->getParameters();

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

$topic_url=$this->createMobileUrl('chat',array("topic_id"=>$topic_id));

include $this->template('topic_pay');