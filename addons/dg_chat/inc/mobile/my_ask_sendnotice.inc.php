<?php
global $_GPC,$_W;	
header("Content-type: text/json; charset=utf-8");
$uniacid = $_W['uniacid'];
$user_info=$this->getUserInfo();

$ask_id=$_GPC['ask_id'];
$ask_id=intval($ask_id);
$notice_type=$_GPC['notice_type'];
$notice_items=array("ask","answer");
if(!in_array($notice_type, $notice_items)){
	exit;
}

$cfg=$this->module['config'];
$record=pdo_fetch("SELECT A1.*,A2.openid payto_openid,A2.real_name FROM ".tablename("chat_ask")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.payto_uid=A2.id WHERE A1.id=:id",array(":id"=>$ask_id));
/*如果是提问的话*/
if($notice_type=='ask'){
	$ask_templete=$cfg['ask_templete'];
	if(empty($ask_templete)){
		return;
		exit;
	}
	$user_openid=$record['payto_openid'];
	$post_data=array(
                        'first' => array(
                            'value' => $record['pay_nickname']."向您提问了一个问题",
                            "color" => "#4a5077"
                        ),
                        'keyword1' => array(
                            'value' => $record['ask_content'],
                            "color" => "#4a5077"
                        ),
                        'keyword2' => array(
                            'value' => $record['ask_type']=='public'?'公开':'悄悄问',
                            "color" => "#4a5077"
                        ),
						'keyword3' => array(
								'value' => date('Y/m/d H:i:s', $record['pay_time']),
								"color" => "#4a5077"
						),
                        'remark' => array(
                            'value' => "\r\n用户为这个问题支付了".$record['pay_money']."元,点击开始回答！",
                            "color" => "#f19937"
                        )
          );
	
	$url=$_W['siteroot'].$this->createMobileUrl('ask_answer',array("ask_id"=>$ask_id));
	$sendResult=$this->sendTplNotice($user_openid,$ask_templete,$post_data,$url);
	
	$fmdata=array(
			"success"=>1,
			"result"=>$sendResult,
			"data"=>"发送成功！"
	);
	
	echo json_encode($fmdata);
	exit;
}else{
	$ask_templete=$cfg['answer_templete'];
	if(empty($ask_templete)){
		return;
		exit;
	}
	$user_openid=$record['pay_openid'];
	$post_data=array(
			'first' => array(
					'value' => $record['real_name']."已经回答了您的问题",
					"color" => "#4a5077"
			),
			'keyword1' => array(
					'value' => $record['ask_content'],
					"color" => "#4a5077"
			),
			'keyword2' => array(
					'value' => date('Y/m/d H:i:s', $record['pay_time']),
					"color" => "#4a5077"
			),
			'keyword3' => array(
					'value' => $record['ask_type']=='public'?'公开':'悄悄问',
					"color" => "#4a5077"
			),
			'keyword4' => array(
					'value' => date('Y/m/d H:i:s', time()),
					"color" => "#4a5077"
			),
			'remark' => array(
					'value' => "\r\n您为这个问题已经支付了".$record['pay_money']."元,点击查看答案！",
					"color" => "#f19937"
			)
	);
	
	$url=$_W['siteroot'].$this->createMobileUrl('ask_detail',array("ask_id"=>$ask_id));
	$sendResult=$this->sendTplNotice($user_openid,$ask_templete,$post_data,$url);
	
	$fmdata=array(
			"success"=>1,
			"result"=>$sendResult,
			"data"=>"发送成功！"
	);
	
	echo json_encode($fmdata);
	exit;
}




