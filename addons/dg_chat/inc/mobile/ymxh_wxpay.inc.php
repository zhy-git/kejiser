<?php
/*
微信支付
*/
require_once (MODULE_ROOT."/wxpay/WxPay.Api.php");
require_once (MODULE_ROOT."/wxpay/WxPay.Data.php");
require_once (MODULE_ROOT."/wxpay/WxPay.Config.php");
global $_GPC,$_W;
$op=$_GPC['op'];
$uniacid=$_W['uniacid'];
//商品下单
if($op=='order'){
  //判断用户是否登录
	    $user_info=cache_load('user_info');
		if(!$user_info){
		  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
		  echo json_encode($data);exit;
		}
	   $uid=$user_info['id'];
	   $out_trade_no=$uid.date('YmdHis', time());
	   $room = pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id AND uniacid=:uniacid" ,array(":room_id"=>$_GPC['room_id'],":uniacid"=>$uniacid));
	   if(!$room){
	   	 $data=['code'=>2,'data'=>'','msg'=>'直播间不存在'];
		  echo json_encode($data);exit;
	   }
	   $data=array(
	   	'uniacid'=>$uniacid,
	   	'room_id'=>$_GPC['room_id'],
	   	'topic_id'=>$_GPC['topic_id'],
	   	'series_id'=>$_GPC['series_id'],
	   	'pay_money'=>$_GPC['pay_money'],
        'pay_uid'=>$uid,
        'pay_type'=>2,
        'pay_openid'=>$user_info['openid'],
        'pay_nickname'=>$user_info['nickname'],
        'pay_avatar'=>$user_info['avatar'],
        'payto_uid'=>$room['create_uid'],
        'payto_openid'=>$room['create_openid'],
        'payto_nickname'=>$room['create_nickname'],
        'payto_avatar'=>$room['create_avatar'],
        'order_status'=>1,
        'pay_status'=>0,
        'out_trade_no'=> $out_trade_no,
        'create_time'=>time() 

	   );
	   $insert=pdo_insert('chat_payment',$data);
	   if($insert){
	   	 $data=['code'=>1,'data'=>$data,'msg'=>'下单成功'];
		  echo json_encode($data);exit;
	   }else{
	   	 $data=['code'=>-1,'data'=>'','msg'=>'下单失败'];
		  echo json_encode($data);exit;
	   }
}
//下单转支付
if($op=='pay_order'){
			// 获取支付金额
	// 订单号，示例代码使用时间值作为唯一的订单ID号
	 $out_trade_no = $_GPC['out_trade_no'];
	   $query = load()->object('query');
		 $payment_data=$query->from('chat_payment')
                    ->select('id','room_id','pay_money','topic_id','series_id','pay_status')
                    ->where(array('out_trade_no'=>$out_trade_no,'uniacid'=>$uniacid))
                    ->get();
        if(!$payment_data){
        	$result=['code'=>-1,'data'=>'','msg'=>'订单不存在'];
        	echo json_encode($result);exit;
        } 
        if(!$payment_data['pay_status']==1){
        	$result=['code'=>-2,'data'=>'','msg'=>'订单已支付'];
        	echo json_encode($result);exit;
        }  

		$total = floatval($payment_data['pay_money']);
		$total = round($total*100); // 将元转成分
		if(empty($total)){
		    $total = 100;
		}
		// 商品名称
		$subject = '圆梦学海支付';
		
		$unifiedOrder = new WxPayUnifiedOrder();
		$unifiedOrder->SetBody($subject);//商品或支付单简要描述
		$unifiedOrder->SetOut_trade_no($out_trade_no);
		$unifiedOrder->SetTotal_fee($total);
		$unifiedOrder->SetTrade_type("APP");
		$result = WxPayApi::unifiedOrder($unifiedOrder);
		if (is_array($result)) {
		    echo json_encode($result);
		}
}
//余额充值
if($op=='recharge'){
	//判断用户是否登录

	    $user_info=cache_load('user_info');
		if(!$user_info){
		  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
		    echo json_encode($data);exit;
		}
	   $uid=$user_info['id'];
        $total=$_GPC['total'];  //充值金额     
        if(empty($total)){
        	$data=['code'=>-1,'data'=>'','msg'=>'输入金额不能为空'];
		    echo json_encode($data);exit;
        }
        $out_trade_no=$uid.date('YmdHis', time());
        //订单表插入数据
        $data=array(
        	'uniacid'=>$uniacid,
        	'pay_money'=>$total,
        	'pay_uid'=>$uid,
        	'pay_type'=>5,
        	'pay_openid'=>$user_info['openid'],
        	'pay_nickname'=>$user_info['nickname'],
        	'pay_avatar'=>$user_info['avatar'],
        	'order_status'=>1,
        	'pay_status'=>0,
        	'out_trade_no'=> $out_trade_no,
        	'create_time'=>time()       	
        );
        $insert=pdo_insert('chat_payment',$data);
		$total = floatval($total);
		$total = round($total*100); // 将元转成分
		// 商品名称
		$subject = '圆梦学海余额充值';
		$unifiedOrder = new WxPayUnifiedOrder();
		$unifiedOrder->SetBody($subject);//商品或支付单简要描述
		$unifiedOrder->SetOut_trade_no($out_trade_no);
		$unifiedOrder->SetTotal_fee($total);
		$unifiedOrder->SetTrade_type("APP");
		$result = WxPayApi::unifiedOrder($unifiedOrder);

		if (is_array($result)) {

		    echo json_encode($result);
		}
		
}
//购买VIP
if($op=='buy_vip'){
	//判断用户是否登录
	    $user_info=cache_load('user_info');
		if(!$user_info){
		  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
		    echo json_encode($data);exit;
		}
	   $uid=$user_info['id'];
        $total=$_GPC['total'];  //购买VIP    
        if(empty($total)){
        	$data=['code'=>-1,'data'=>'','msg'=>'输入金额不能为空'];
		    echo json_encode($data);exit;
        }
        $out_trade_no=$uid.date('YmdHis', time());
        //订单表插入数据
        $data=array(
        	'uniacid'=>$uniacid,
        	'pay_money'=>$total,
        	'pay_uid'=>$uid,
        	'pay_type'=>6,
        	'pay_openid'=>$user_info['openid'],
        	'pay_nickname'=>$user_info['nickname'],
        	'pay_avatar'=>$user_info['avatar'],
        	'order_status'=>1,
        	'pay_status'=>0,
        	'out_trade_no'=> $out_trade_no,
        	'create_time'=>time()       	
        );
        $insert=pdo_insert('chat_payment',$data);
		$total = floatval($total);
		$total = round($total*100); // 将元转成分
		// 商品名称
		$subject = '圆梦学海余额购买VIP';
		
		$unifiedOrder = new WxPayUnifiedOrder();
		$unifiedOrder->SetBody($subject);//商品或支付单简要描述
		$unifiedOrder->SetOut_trade_no($out_trade_no);
		$unifiedOrder->SetTotal_fee($total);
		$unifiedOrder->SetTrade_type("APP");
		$result = WxPayApi::unifiedOrder($unifiedOrder);
		if (is_array($result)) {
		    echo json_encode($result);
		}
}

//微信回调
if($op=='wxnotify'){
	// $xml = file_get_contents('php://input');
       //  $orderData = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
       $orderData=WxPayApi::notify();
        $str = var_export($orderData,TRUE);
        file_put_contents('notify.txt',$str);
        
       $sign_post=$orderData['sign'];
       unset($orderData['sign']);
     
         $string = '';
        if( !empty($orderData) ){
           
            $array = array();
            foreach( $orderData as $key => $value ){
                $array[] = $key.'='.$value;
            }
            $string = implode("&",$array);
        }
        //签名步骤二：在string后加入KEY
        $string = $string . "&key=".WxPayConfig::KEY;
        //签名步骤三：MD5加密
        $string = md5($string);
        //签名步骤四：所有字符转为大写
        $sign = strtoupper($string);
       
        if ( $sign == $sign_post) {

        	$payment_data = pdo_fetch("SELECT * FROM ".tablename("chat_payment")." WHERE out_trade_no=:out_trade_no AND uniacid=:uniacid" ,array(":out_trade_no"=>$orderData['out_trade_no'],":uniacid"=>$uniacid));
               if(!$payment_data){
               	  $result=['code'=>-2,'data'=>'','msg'=>'订单不存在'];
        	        echo json_encode($result);exit;
               }
               //类型是余额充值
               if($payment_data['pay_type']=='5'){

               	 $user_data = pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id AND uniacid=:uniacid" ,array(":id"=>$uid,":uniacid"=>$uniacid));
	              $money=$user_data['balance']+$data['money'];
	              $options=array(
	              	'transaction_id'=>$orderData['transaction_id'],
	              	'pay_time'=>$orderData['time_end'],
	              	'pay_status'=>1
	              );
	              $update=pdo_update('chat_payment',$options,array('id'=>$payment_data['id']));

	              if($update){
	              	 $options=array(
	              	   'balance'=>$money             	
	                );
	              	 pdo_update('chat_users',$options,array('id'=>$user_data['id']));
	              }
               }
               //类型是购买课程
               elseif($payment_data['pay_type']=='2'){
                    $options=array(
	              	'transaction_id'=>$orderData['transaction_id'],
	              	'pay_time'=>$orderData['time_end'],
	              	'pay_status'=>1,
	              	'order_status'=>2
	              );
                   $update=pdo_update('chat_payment',$options,array('id'=>$payment_data['id']));
               }
               //购买VIP
               elseif($payment_data['pay_type']=='6'){
               	    $options=array(
	              	'transaction_id'=>$orderData['transaction_id'],
	              	'pay_time'=>$orderData['time_end'],
	              	'pay_status'=>1,
	              	'order_status'=>2
	               );
                   $update=pdo_update('chat_payment',$options,array('id'=>$payment_data['id']));
                   if($update){
                   	   $month=date('Y-m-d H:i:s',strtotime('+1 month'));
                   	   $month1=date('Y-m-d H:i:s',strtotime('+3 month')); 
                   	   $year=date('Y-m-d H:i:s',strtotime('+1 year')); 
                   	   if($payment_data['pay_money']<30){
                   	   	  $vip_deadline=$month;
                   	   }elseif($payment_data['pay_money']>30 && $payment_data['pay_money']<100){
                   	   	  $vip_deadline=$month1;
                   	   }elseif($payment_data['pay_money']>100){
                   	   	  $vip_deadline=$year;
                   	   }
                   	    $options=array(
	              	   'vip_deadline'=>$vip_deadline             	
	                   );
	              	   pdo_update('chat_users',$options,array('id'=>$user_data['id']));
                   }
               }

        }
}
