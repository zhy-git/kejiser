<?php
global $_GPC,$_W;	

$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];
$uid=0;
if(!empty($_GPC['uid'])){
	$uid=intval($_GPC['uid']);
}
//判断是否是自己的主页
$is_myindex=0;
$room_id=0;
$user_info=$this->getUserInfo();
if($uid==$user_info->uid){
	$is_myindex=1;
}
if($uid==0){
	$uid=$user_info->uid;
	$is_myindex=1;
}

$nickname=$user_info->nickname;

$db_user=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id",array(":id"=>$uid));
$head_imgurl=$db_user['avatar'];
$head_imgurl=str_replace("/46","/132",$head_imgurl);

if($db_user['is_openask']==-1){
	message("该用户分答已经被禁用！");
	exit;
}

/*如果是自己分答的话跳转到完善信息页面*/
if($db_user['is_openask']==0&&$is_myindex){
	header("Location:".$this->createMobileUrl('my_ask_info'));
	exit;
}

/*处理付费旁听后的真实数据获取结束*/

//付费代码,pay_type=ask,listen
$pay_typeArray=array("ask","listen");
if(!empty($_GPC['submit'])){
	$pay_type=$_GPC['pay_type'];
	$ask_text="付费咨询";
	if(!in_array($pay_type, $pay_typeArray)){
		exit;
	}
	load()->classs("wxpay");
	$money= $db_user['pay_money'];
	if($pay_type=="listen"){
		$money=1;
		$ask_text="1元旁听";
	}
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

	if($pay_type=="ask"){
		$data['payto_uid']=$db_user['id'];
		$data['ask_content']=$_GPC['ask_content'];
		$data['ask_type']=$_GPC['ask_type'];//public或者 private
	}else{
		$ask_id=$_GPC['ask_id'];
		$ask_id=intval($ask_id);
		$data['ask_id']=$ask_id;
	}
	
	pdo_insert("chat_ask",$data);
	$ask_id=pdo_insertid();
	header("Content-type: text/json; charset=utf-8");
	$last_data=array(
		success=>1,
		ask_id=>$ask_id,
		jsdata=>$jsApiParameters
	);
	echo json_encode($last_data);
	exit;
}
/*付费结束*/
$condition="";

/*处理付费旁听后的真实数据获取开始*/
if($_GPC['mdo']=='getanswer'){
	$temp_ask_id=intval($_GPC['ask_id']);
	$condition=" AND id=".$temp_ask_id." ";
}
/*处理付费旁听后的真实数据获取结束*/

$pindex = max(1, intval($_GPC['pindex']));
$psize = 10;
$total = pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_ask")." WHERE ask_type='public' AND pay_type='ask' AND pay_status=1 AND payto_uid=:uid ".$condition." ORDER BY ID DESC",array(":uid"=>$uid));
$pages = ceil($total / $psize);
if($pindex>$pages&&$pages>0)
    $pindex =$pages;
$search_records=pdo_fetchall("SELECT * FROM ".tablename("chat_ask")." WHERE ask_type='public' AND pay_type='ask' AND pay_status=1 AND payto_uid=:uid ".$condition." ORDER BY ID DESC  LIMIT " . ($pindex - 1) * $psize . ',' . $psize,array(":uid"=>$uid));

$ask_ids=array();
$records=array();

foreach($search_records as $temp_record){
	$ask_ids[]=$temp_record['id'];
	if($temp_record['pay_uid']==$user_info->uid||$temp_record['payto_uid']==$user_info->uid)
		$temp_record['show']=true;
	$temp_record['paycount']=0;
	$records[$temp_record['id']]=$temp_record;
}

unset($temp_record);
unset($search_records);

if(count($ask_ids)>0){
	$instr = implode(',',$ask_ids);
	$answers=pdo_fetchall("SELECT * FROM ".tablename('chat_ask_answer')." WHERE ask_id IN ({$instr}) ORDER BY ask_id");
	foreach($answers as $myanswer){
		$myanswer['answer_content']=empty($myanswer['answer_content_down'])?$myanswer['answer_content']:"http://rs.duoguan.com/".$myanswer['answer_content_down']."_1";
		$records[$myanswer['ask_id']]['answer'][]=$myanswer;
	}
	/*查找已经自己付过钱的问题*/
	$listens=pdo_fetchall("SELECT ask_id FROM ".tablename("chat_ask")." WHERE pay_type='listen' AND pay_status=1 AND pay_uid=:uid AND ask_id IN ({$instr}) ",array(":uid"=>$user_info->uid));
	if(!empty($listens)){
		foreach($listens as $myask){
			$records[$myask['ask_id']]['show']=true;
		}
	}
	
	$pay_count=pdo_fetchall("SELECT ask_id,COUNT(0) mcount FROM ".tablename("chat_ask")." WHERE pay_type='listen' AND pay_status=1 AND ask_id IN ({$instr})  GROUP BY ask_id");
    foreach ($pay_count as $pay_c){
    	$records[$pay_c['ask_id']]['paycount']=$pay_c['mcount'];
    }
}

if(!empty($_GPC['pindex'])){
	 header('content-type:application/json;charset=utf8');
	 $result['pindex']=$pindex;
	 $result['pages']=$pages;
	 $result['list']=$records;
	 echo json_encode($result);
	 exit;
}


$sharedata=array(
		"title"=>$db_user['real_name'].",".$db_user['user_title'].",等你来问！",
		"desc"=>$db_user['user_desc'],
		"link"=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']."&uid=".$db_user['id'],
		"imgUrl"=>$db_user['avatar'],
);


include $this->template('my_ask_index');