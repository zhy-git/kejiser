<?php
/**
 * [WeEngine System] Copyright (c) 2014 WE7.CC
 * WeEngine is NOT a free software, it under the license terms, visited http://www.we7.cc/ for more details.
 */

error_reporting(1);
define('IN_MOBILE', true);
require '../../framework/bootstrap.inc.php';
require_once  "WxPayPubHelper/WxPayPubHelper.php";
load()->func("logging");
$input = file_get_contents('php://input');
WeUtility::logging('info',"夺冠直播异步通知数据".$input);
global $_W;
$notify=new Notify_pub();
$notify->saveData($input);
$data=$notify->getData();

if(empty($data)){
	$notify->setReturnParameter("return_code","FAIL");
	$notify->setReturnParameter("return_msg","参数格式校验错误");
	WeUtility::logging('info',"夺冠直播回复参数格式校验错误");
	exit($notify->createXml());
}

if($data['result_code'] !='SUCCESS' || $data['return_code'] !='SUCCESS') {
	$notify->setReturnParameter("return_code","FAIL");
	$notify->setReturnParameter("return_msg","参数格式校验错误");
	WeUtility::logging('info',"夺冠直播回复参数格式校验错误");
	exit($notify->createXml());
}
//更新表订单信息
WeUtility::logging('info',"更新表订单信息".json_encode($data));
	//DBUtil::update(DBUtil::$TABLE_WJK_ORDER,array("status"=>4,'notifytime'=>TIMESTAMP,'wxnotify'=>$data,'wxorder_no'=>$data['transaction_id']),array("order_no"=>$data['out_trade_no']));
    $order_data=array(
    		"pay_status"=>1,
    		"transaction_id"=>$data['transaction_id'],
    		"pay_time"=>time()
    );	
    try{
      $order=pdo_fetch("SELECT * FROM ".tablename("chat_payment")." WHERE out_trade_no=:out_trade_no",array(":out_trade_no"=>$data["out_trade_no"]));
	 
      if(intval($order['pay_money']*100)==intval($data['total_fee'])){
	    pdo_update("chat_payment",$order_data,array("out_trade_no"=>$data["out_trade_no"]));
	    if(!empty($order['coupon_id'])){
	    	pdo_update("chat_coupon_use",array("use_time"=>time()),array("c_id"=>$order['coupon_id'],'uniacid'=>$order['uniacid'],'use_uid'=>$order['pay_uid']));
	    }
	    $list = pdo_fetch("select * from ims_uni_account_modules WHERE module = 'dg_chat' AND uniacid =".$order['uniacid']);
		$key =  unserialize($list['settings']);
		$siteroot=$key['siteroot'];

		$temp_id = $key['pay_success'];
		$income_warn = $key['income_warn'];
		$openid = $order['pay_openid'];

		if($order['pay_type'] == 2){
			
			if(!empty($order['series_id'])){
				$topic_name = pdo_fetch("select room_name topic_name from ".tablename("chat_room")."  where id=:id",array(":id"=>$order['series_id']));
				$temp_url = $siteroot."/app/index.php?i=".$order['uniacid']."&c=entry&series_id=".$order['series_id']."&do=series_info&m=dg_chat";
				$in_url = $siteroot."/app/index.php?i=".$order['uniacid']."&c=entry&series_id=".$order['series_id']."&do=pay_people&m=dg_chat";
				$type_name= $topic_name['topic_name'].'(系列课)';
			}else{
				$temp_url = $siteroot."/app/index.php?i=".$order['uniacid']."&c=entry&topic_id=".$order['topic_id']."&do=chat&m=dg_chat";
				$topic_name = pdo_fetch("select * from ".tablename("chat_topic")." where id=:id",array(":id"=>$order['topic_id']));
				$in_url = $siteroot."/app/index.php?i=".$order['uniacid']."&c=entry&topic_id=".$order['topic_id']."&do=pay_people&m=dg_chat";
				$type_name= $topic_name['topic_name'].'(单课)';
			}
			//收益人的房间
			$chat_room = pdo_fetch("SELECT create_openid from ".tablename("chat_room")." where uniacid=:uniacid and room_id=:room_id ",array(':uniacid'=>$order['uniacid'],':room_id'=>$order['room_id']));

			$post_data=array(
				'name' => array(
						'value' => "『".$topic_name['topic_name']."』",
						"color" => "#4a5077"
				),
				'remark' => array(
						'value' => "\r\n点击查看详情！",
						"color" => "#f19937"
				)
			);
			$in_data = array(
				'first' => array(
						'value' => "您好,您的直播间有一条收益到账",
						"color" => "#4a5077"
				),
				'keyword1' => array(
						'value' => "『".$topic_name['topic_name']."』",
						"color" => "#f19937"
				),
				'keyword2' => array(
				 	'value' => date('Y/m/d H:i:s', time()), 
				 	"color" => "#4a5077"
				)
			);
			if(!empty($income_warn)){
				$Account = WeAccount::create($order['uniacid']);
				$Account->sendTplNotice($chat_room['create_openid'],$income_warn,$in_data,$temp_url,"#FF683F");		
			}
		}else if($order['pay_type'] == 4){
			$info = pdo_fetch("select * from ".tablename("chat_vipsetting")." where id=:id",array(':id'=>$order['topic_id']));
			$user = pdo_fetch("select id,info_status,end_time from ".tablename("chat_users")." where uniacid=:uniacid and id=:uid",array(":uniacid"=>$order['uniacid'],':uid'=>$order['pay_uid']));
			$endtime=$user['end_time'];
			if(empty($user['end_time'])||$user['info_status']==0){
				$endtime=TIMESTAMP;
			}
			$day =$info['day'];
			if($day==-1){
				$end_time=-1;
			}else{
				$end_time=strtotime("+$day".'day',$endtime);
			}
			
		    $up=array(
				'info_status'=>1,
				'end_time'=>$end_time,
				'settime'=>time()
		    );
		    pdo_update('chat_users',$up,array("id"=>$user['id']));
		    $temp_url = $siteroot."/app/index.php?i=".$order['uniacid']."&c=entry&do=my_chat&m=dg_chat";
			$post_data=array(
				'name' => array(
						'value' => "『购买会员』",
						"color" => "#4a5077"
				),
				'remark' => array(
						'value' => "\r\n点击查看详情！",
						"color" => "#f19937"
				)
			);

		}
		$Account = WeAccount::create($order['uniacid']);
		$Account->sendTplNotice($openid,$temp_id,$post_data,$temp_url,"#FF683F");			  
      }
     }catch (Exception $ex){
    	WeUtility::logging($e->getMessage());
    }
	$notify->setReturnParameter("return_code","SUCCESS");
	$notify->setReturnParameter("return_msg","OK");
	exit($notify->createXml());


WeUtility::logging('info',"夺冠直播回复数据".$data);




