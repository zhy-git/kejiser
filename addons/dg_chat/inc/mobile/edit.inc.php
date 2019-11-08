<?php
global $_W,$_GPC;
//获取用户信息


$user_info = $this->getUserInfo();
$avatar = $user_info->headimgurl;
$cfg = $this->module['config'];
$nickname = $user_info->nickname;
$topic_id = $_GPC['topic_id'];
$uniacid = $_W['uniacid'];

//查找用户信息
$user = pdo_fetch('select user_info,real_name,mobile from '.tablename('chat_users').' where id=:id and uniacid=:uniacid',array('id'=>$user_info->uid,':uniacid'=>$uniacid));
$info = unserialize($user['user_info']);

//查找自定义的表单 数据
$custom_all = pdo_fetchall('select * from '.tablename('chat_user_fields').' where uniacid=:uniacid order by displayorder desc',array(":uniacid"=>$uniacid));
$name = array();
foreach($custom_all as $key=>$val){
	$name[] = $val['id']; 
}
//上传图片
if(!empty($_GPC['mediaid'])){
	header('content-type:application/json;charset=utf8');
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['mediaid'];
	$medias['type']="image";
	$filename=$account->downloadMedia($medias);
	
	$fmdata = array(
			"success" => 1,
			"imgurl" =>tomedia($filename),
	);
	
	echo json_encode($fmdata);
	exit();
}
if(!empty($_GPC['send'])){
	$mobile = $_GPC['mobile'];


	$rand = (string)(mt_rand(1000,9999));
	isetcookie('alidayu',$rand,3*60);
	switch ($cfg['msg_type']){
		case 'alidayu':
		require_once MODULE_ROOT.'/alidayu/TopSdk.php';
		$c = new TopClient;
		$c->appkey = $cfg['info_appkey'];
		$c->secretKey = $cfg['info_secretkey'];
		$req = new AlibabaAliqinFcSmsNumSendRequest;
		//$req->setExtend("123456");
		
		$req->setSmsType("normal");
		$req->setSmsFreeSignName($cfg['sign_name']);//短信签名名称
		$req->setSmsParam('{"'.$cfg['content_key'].'":"'.$rand.'"}');
		//var_dump('{"number":'.$rand.',"name":"alidayu"}');die;
		$req->setRecNum($mobile);//手机号
		$req->setSmsTemplateCode($cfg['info_tempid']);//模板id
		$resp = $c->execute($req);
		header('Content-type: application/json');
		if($resp->result->success){
			$fmdata = array(
				'success'=>1,
				'msg'=>'发送成功'
			);
		}else{
			$fmdata = array(
				'success'=>-1,
				'msg'=>'发送失败'
			);
		}
		break;
		case 'juhe':
		$url = 'http://v.juhe.cn/sms/send';
		$url .='?mobile='.$mobile.'&tpl_id='.$cfg['juhe_tempid'].'&tpl_value='.urlencode('#'.$cfg['juhecontent_key'].'#='.$rand).'&key='.$cfg['juhe_appkey'];	
		$content = ihttp_get($url);
		$result = json_decode($content['content'],true);
		header('Content-type: application/json');
		if($result['error_code'] == 0){
			$fmdata = array(
				'success'=>1,
				'msg'=>$result['reason']
			);
		}else{
			$fmdata = array(
				'success'=>1,
				'msg'=>$result['reason']
			);
		}
		break;
		case 'alidayu_new':
		require_once ROOT_PATH."class/SignatureHelper.php";
		$params = array ();
	    // fixme 必填: 请参阅 https://ak-console.aliyun.com/ 取得您的AK信息
	    $accessKeyId = $cfg['info_appkey'];
	    $accessKeySecret = $cfg['info_secretkey'];

	    // fixme 必填: 短信接收号码
	    $params["PhoneNumbers"] = $mobile;

	    // fixme 必填: 短信签名，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
	    $params["SignName"] = $cfg['sign_name'];

	    // fixme 必填: 短信模板Code，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
	    $params["TemplateCode"] =$cfg['info_tempid'] ;
	    // fixme 可选: 设置模板参数, 假如模板中存在变量需要替换则为必填项
	    $params['TemplateParam'] = Array (
	        $cfg['content_key'] => $rand
	    );
	    // *** 需用户填写部分结束, 以下代码若无必要无需更改 ***
	    if(!empty($params["TemplateParam"]) && is_array($params["TemplateParam"])) {
	         $params["TemplateParam"] = json_encode($params["TemplateParam"], JSON_UNESCAPED_UNICODE);
	    }
	    $helper = new SignatureHelper();
	    // 此处可能会抛出异常，注意catch
	    $content = $helper->request(
	        $accessKeyId,
	        $accessKeySecret,
	        "dysmsapi.aliyuncs.com",
	        array_merge($params, array(
	            "RegionId" => "cn-hangzhou",
	            "Action" => "SendSms",
	            "Version" => "2017-05-25",
	        ))
	    );
	   
	    header('Content-type: application/json');
	    if($content['Code'] == 'OK'){
	    	$fmdata = array(
				'success'=>1,
				'msg'=>'发送成功'
			);
	    }else{
	    	$fmdata = array(
				'success'=>-1,
				'msg'=>$content['Message']
			);
	    }
		
	}
	echo json_encode($fmdata);exit;
	
}
if(!empty($_GPC['add'])){
	$key = $_GPC['key'];
	$alidayu = $_GPC['alidayu'];

	header('content-type:application/json;charset=utf8');
	if($alidayu !=$_GPC['validate']){
		$fmdata = array('success'=>-1,'content'=>'验证码错误');
		exit(json_encode($fmdata));
	}

	for($i=0;$i<count($name);$i++){
		$data[$name[$i]] = $key[$i];
	}
	$data = serialize($data);
	setcookie('alidayu', NULL);


	$ret = pdo_update('chat_users',array('user_info'=>$data,'real_name'=>$_GPC['real_name'],'mobile'=>$_GPC['mobile']),array('id'=>$user_info->uid));
	$fmdata =array('success'=>1,'content'=>'更新成功');
	exit(json_encode($fmdata));
}
include $this->template('edit');