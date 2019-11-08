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
//WeUtility::logging('info',"夺冠分答异步通知数据".$input);
global $_W;

//WeUtility::logging('info',"商户key数据".$kjsetting);
$notify=new Notify_pub();
$notify->saveData($input);
$data=$notify->getData();
//$kjsetting=DBUtil::findUnique(DBUtil::$TABLE_WKJ_SETTING,array(":appid"=>$data['appid']));
if(empty($data)){
	$notify->setReturnParameter("return_code","FAIL");
	$notify->setReturnParameter("return_msg","参数格式校验错误");
	WeUtility::logging('info',"夺冠分答回复参数格式校验错误");
	exit($notify->createXml());
}

if($data['result_code'] !='SUCCESS' || $data['return_code'] !='SUCCESS') {
	$notify->setReturnParameter("return_code","FAIL");
	$notify->setReturnParameter("return_msg","参数格式校验错误");
	WeUtility::logging('info',"夺冠分答回复参数格式校验错误");
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
    //WeUtility::logging('info',"order_data".json_encode($order_data));
    try{
      $order=pdo_fetch("SELECT * FROM ".tablename("chat_ask")." WHERE out_trade_no=:out_trade_no",array(":out_trade_no"=>$data["out_trade_no"]));
      if(intval($order['pay_money']*100)==$data['cash_fee']){
	     pdo_update("chat_ask",$order_data,array("out_trade_no"=>$data["out_trade_no"]));
      }
     }catch (Exception $ex){
    	WeUtility::logging($e->getMessage());
    }
	$notify->setReturnParameter("return_code","SUCCESS");
	$notify->setReturnParameter("return_msg","OK");
	exit($notify->createXml());
//WeUtility::logging('info',"夺冠分答回复数据".$data);




