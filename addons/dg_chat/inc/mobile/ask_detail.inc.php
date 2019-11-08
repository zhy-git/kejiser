<?php
global $_GPC,$_W;	

$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];

$user_info=$this->getUserInfo();

$head_imgurl=str_replace("/46","/132",$user_info->headimgurl);
$nickname=$user_info->nickname;

if(empty($_GPC['ask_id'])){
	exit;
}

$ask_id=intval($_GPC['ask_id']);
$ask_record=pdo_fetch("SELECT * FROM ".tablename("chat_ask")." WHERE id=:id",array(":id"=>$ask_id));
if(empty($ask_record)){
  exit;
}

$ask_record['avg_score']=empty($ask_record['avg_score'])?0:round($ask_record['avg_score']);

$is_show_tips=$ask_record['pay_uid']==$user_info->uid;

if(!empty($_GPC['score'])){
	header('content-type:application/json;charset=utf8');
	$score=intval($_GPC['score']);
	if($user_info->uid!=$ask_record['pay_uid']){
		exit;
	}
	$scores=pdo_fetch("SELECT * FROM ".tablename("chat_ask_score")." WHERE uid=:uid AND ask_id=:ask_id",array(":uid"=>$user_info->uid,":ask_id"=>$ask_id));
	if(empty($scores)){
		$data=array(
				"ask_id"=>$ask_id,
				"uniacid"=>$uniacid,
				"uid"=>$user_info->uid,
				"score"=>$score,
				"create_time"=>time()
		);
		pdo_insert("chat_ask_score",$data);
		if(!empty($ask_record['avg_score'])&&$ask_record['avg_score']>0){
			$score=($score+$ask_record['avg_score'])/2.00;
		}
		pdo_update("chat_ask",array("avg_score"=>$score),array("id"=>$ask_id));
		$result=array(
				"success"=>1,
				"data"=>"评分成功！"
		);
		echo json_encode($result);
		exit;
	}else{
		$result=array(
				"success"=>-1,
				"data"=>"您已经评过分了！"
				);
		echo json_encode($result);
		exit;
	}
}

//付费代码,pay_type=ask,listen
$pay_typeArray=array("ask","listen");
if(!empty($_GPC['submit'])){
	$pay_type=$_GPC['pay_type'];
	$ask_text="1元旁听";
	if(!in_array($pay_type, $pay_typeArray)){
		exit;
	}
	load()->classs("wxpay");
	$money= 0.01;
	$money=(int)($money*100);
	$kjSetting=$this->findKJsetting();

	$jsApi = new JsApi_pub($kjSetting);
	$openid=$user_info->openid;
	$unifiedOrder = new UnifiedOrder_pub($kjSetting);

	$unifiedOrder->setParameter("openid", "$openid");//商品描述
	$unifiedOrder->setParameter("body", $ask_text);//商品描述
	$timeStamp = time();
	$out_trade_no = $this->build_order_sn();
	$unifiedOrder->setParameter("out_trade_no", "$out_trade_no");//商户订单号
	$unifiedOrder->setParameter("total_fee", $money);//总金额
	$notifyUrl = $_W['siteroot'] . "addons/dg_chat/notify_ask.php";
	$unifiedOrder->setParameter("notify_url", $notifyUrl);//通知地址
	$unifiedOrder->setParameter("trade_type", "JSAPI");//交易类型

	$prepay_id = $unifiedOrder->getPrepayId();
	$jsApi->setPrepayId($prepay_id);
	$jsApiParameters = $jsApi->getParameters();
	$ask_type=$_GPC['ask_type'];

	if(!in_array($ask_type, array('public','private'))){
		exit;
	}

	$data=array(
			'uniacid'=>$uniacid,
			'pay_money'=>$money/100,
			'pay_uid'=>$user_info->uid,
			'pay_openid'=>$user_info->openid,
			'pay_nickname'=>$user_info->nickname,
			'pay_avatar'=>$user_info->headimgurl,
			'pay_type'=>$pay_type, //ask或者listen
			"out_trade_no"=>$out_trade_no,
			'pay_status'=>0,
			"create_time"=>time()
	);

	$ask_id=$_GPC['ask_id'];
	$ask_id=intval($ask_id);
	$data['ask_id']=$ask_id;

	pdo_insert("chat_ask",$data);

	header("Content-type: text/html; charset=utf-8");
	echo $jsApiParameters;
	exit;
}
/*付费结束*/


$answer_records=pdo_fetchall("SELECT A1.*,A2.nickname,A2.avatar FROM ".tablename("chat_ask_answer")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.answer_uid=A2.id WHERE ask_id=:ask_id",array(":ask_id"=>$ask_id));
foreach($answer_records as &$mrecord){
	if(!empty($mrecord['answer_content_down'])){
		$mrecord['answer_content']="http://rs.duoguan.com/".$mrecord['answer_content_down']."_1";
	}
	unset($mrecord);
}

$is_answer=0;
if(!empty($answer_records)){
	$is_answer=1;
}

if($ask_record['pay_uid']==$user_info->uid||$ask_record['payto_uid']==$user_info->uid){
	$ask_record['show']=true;
}
/*查找是否已经付过钱*/
$listens=pdo_fetch("SELECT ask_id FROM ".tablename("chat_ask")." WHERE pay_type='listen' AND pay_status=1 AND pay_uid=:uid AND ask_id=:ask_id",array(":ask_id"=>$ask_id,":uid"=>$user_info->uid));
if(!empty($listens)){
	$ask_record['show']=true;
}

$pay_count=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_ask")." WHERE pay_type='listen' AND pay_status=1 AND ask_id=:ask_id",array(":ask_id"=>$ask_id));

$db_user=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id",array(":id"=>$ask_record['payto_uid']));

$sharedata=array(
		"title"=>$ask_record['ask_content'],
		"desc"=>$db_user['real_name'].",".$db_user['user_title'].",回答了该问题,点击查看!",
		"link"=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'],
		"imgUrl"=>$db_user['avatar'],
);


include $this->template('ask_detail');