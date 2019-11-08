<?php
global $_GPC,$_W;	
$user_info=$this->getUserInfo();

$uid = $_W['member']['uid'];
$uniacid = $_W['uniacid'];

if(empty($_GPC['msg_id'])){
	exit;
}
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($user_agent, 'MicroMessenger') === false) {

    $is_ag=1;
}else{
     $is_ag=2;
}
$msg_id=$_GPC['msg_id'];
$msg=pdo_fetch("SELECT * FROM ".tablename("chat_subjects")." WHERE id=:id",array(":id"=>$msg_id));
if(empty($msg)){
	exit;
}
$topic_id=$msg['topic_id'];
$owner_openid=$msg['owner_openid'];

if(!empty($_GPC['pay'])){
	$money= floatval($_GPC['pay']);
	$money=(int)($money*100);
	$out_trade_no = $kjSetting['appid'] . time();
	$data=array(
			'uniacid'=>$uniacid, 
			'room_id'=>$msg['room_id'], 
			'topic_id'=>$topic_id, 
			'pay_money'=>$money/100, 
			'pay_type'=>1, 
			'pay_uid'=>$user_info->uid,
			'pay_openid'=>$user_info->openid, 
			'pay_nickname'=>$user_info->nickname, 
			'pay_avatar'=>$user_info->headimgurl, 
			'payto_uid'=>$msg['owner_uid'],
			'payto_openid'=>$msg['owner_openid'], 
			'payto_nickname'=>$msg['owner_nickname'],  
			'payto_avatar'=>$msg['owner_avatar'],  
			"out_trade_no"=>$out_trade_no,
			'pay_status'=>0, 
			"create_time"=>time()
	);
	
	pdo_insert("chat_payment",$data);
$order_id=pdo_insertid();
	header("Content-type: text/html; charset=utf-8");
	if($_GPC['mini_pay'] == 'true'){
		$reward_last = $_GPC['reward_last'];
		$chatdata=array(
			"uniacid"=>$uniacid,
			"room_id"=>$msg['room_id'],
			"topic_id"=>$topic_id,
			"owner_uid"=>$user_info->uid,
			"owner_openid"=>$user_info->openid,
			"owner_nickname"=>$user_info->nickname,
			"owner_avatar"=>$user_info->headimgurl,
			"create_time"=>time()
		);
		$chatdata["sub_type"]=$reward_last['msgtype'];
		$chatdata["sub_content"]=htmlspecialchars_decode($reward_last['content']);
		
		$chatdata["sub_status"]=1;
		$chatdata['ppt_id']=$reward_last['ppt_id'];
		$chatdata["sub_content_ext"]=$reward_last['content_ext'];
		$chatdata['role_name']=$reward_last['role_name'];
		$chatdata['is_show'] = 0;
		pdo_insert("chat_subjects",$chatdata);
		$msg_id=pdo_insertid();

		// $topic_url = $this->createMobileUrl('chat',array('topic_id'=>$topic_id,'show_id'=>$msg_id));
		// $topic_url=substr($topic_url, 1);
		// $topic_url = $_W['siteroot']."app".$topic_url;
		$topic_url = $_W['siteroot']."app"."/index.php?i=2&c=entry&do=chat&m=dg_chat&topic_id=".$topic_id.'&show_id='.$msg_id;
		
		$fmdata = array(
			'success'=>1,
			'out_trade_no'=>$out_trade_no,
			'uniacid'=>$uniacid,
			'url'=>$topic_url
		);
		echo json_encode($fmdata);exit;
	}else{
		require_once(MODULE_ROOT . '/WxPayPubHelper/WxPayPubHelper.php');
		//load()->classs("wxpay");
		//load()->func("logging");
		$kjSetting=$this->findKJsetting();
		$jsApi = new JsApi_pub($kjSetting);
		$openid=$user_info->openid;
		$unifiedOrder = new UnifiedOrder_pub($kjSetting);
		$unifiedOrder->setParameter("openid", "$openid");//商品描述
		$unifiedOrder->setParameter("body", "赞赏");//商品描述
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




