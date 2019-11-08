<?php
header('Access-Control-Allow-Origin:*');

use Qiniu\json_decode;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth;
use Qiniu\Config;

defined('IN_IA') or exit('Access Denied');

define('ROOT_PATH', str_replace('site.php', '', str_replace('\\', '/', __FILE__)));
define('INC_PATH',ROOT_PATH.'inc/');
define('TEMPLATE_PATH',$_W['siteroot'].'addons/dg_chat/resource');
require_once IA_ROOT . "/addons/dg_chat/oauth2.class.php";
require_once "../addons/dg_chat/class/phpqrcode/phpqrcode.php";
require_once "../addons/dg_chat/dysms/api_demo/SmsDemo.php";
require_once "../addons/dg_chat/qiniu/autoload.php";
require_once "../addons/dg_chat/qiniu/src/Qiniu/Storage/UploadManager.php";
require_once "../addons/dg_chat/qiniu/src/Qiniu/Auth.php";
require_once "../addons/dg_chat/qiniu/src/Qiniu/functions.php";
require_once "../addons/dg_chat/qiniu/src/Qiniu/Config.php";

class Dg_chatModuleSite extends WeModuleSite {	
	public $user_info=null;
	public $table_banners="chat_banner";
	public $table_tags="chat_tags";

    /*自动加载类*/
	public function load($classNames) {
		if(is_array($classNames)){
			foreach ($classNames as $class){
				$filePath = MODULE_ROOT."/class/{$class}.class.php";
				if (is_readable($filePath)) {
					require_once ($filePath);
				}
			}
		}else{
			$filePath = MODULE_ROOT."/class/{$classNames}.class.php";
			if (is_readable($filePath)) {
				require_once ($filePath);
			}
		}
	}
	//获取用户信息
	public function getUserInfo(){
		
		global $_GPC,$_W;
		if($_W['ishttps']){
			$redirect_uri='https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
		
		}else{
			$redirect_uri='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];	
		}
		$cookieKey="user_info_".$_W['uniacid'];
		$cuser_info=$_GPC[$cookieKey];
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$cfg=$this->module['config'];

		if (strpos($user_agent, 'MicroMessenger') === false ) {
			$result = $_COOKIE['user_pc'];
			if(empty($result)){
				if($_GPC['do']!='pc_login'){
                    header("Location:".$this->createmobileurl('pc_login'));
				}
				
			}else{
				if($_GPC['do']=='pc_login'){
					header("Location:".$this->createmobileurl('index'));
				}
				//$user_info=json_encode($result['user_pc']);
				$user_info=json_decode($result);
			
				//$user_info=$result;
				
			}
			
		} else {
			if(empty($_GPC[$cookieKey])){
				$oauth2=new Oauth2($_W['oauth_account']);
				if(empty($_GPC['code'])){
					$oauth2->authorization_code($redirect_uri, Oauth2::$SCOPE_USERINFO,'we7sid-'.$_W['session_id']);
				}
				
				$code=$_GPC['code'];
				$access_token=$oauth2->getOauthAccessToken($code);
				$user_info=$oauth2->getOauthUserInfo($access_token['openid'], $access_token['access_token']);
				$db_user=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE openid=:openid and uniacid=:uniacid",array(":openid"=>$user_info['openid'],':uniacid'=>$_W['uniacid']));
				//$user_info['nickname']=$this->js onName($user_info['nickname']);
				if(empty($db_user)){
					$data=array(
							"openid"=>$user_info['openid'],
							"uniacid"=>$_W['uniacid'],
							"nickname"=>$user_info['nickname'],
							"avatar"=>$user_info['headimgurl'],
							"province"=>$user_info['province'],
							"city"=>$user_info['city'],
							"sex"=>$user_info['sex'],
							"unionid"=>$user_info['unionid'],
							"create_time"=>time()		
					);
					pdo_insert("chat_users",$data);
					$user_info['uid']=pdo_insertid();
				}else{
					//echo 2;die;
					if($db_user['end_time']<time()&&$db_user['info_status']==1&&$db_user['end_time']!=-1){
						//echo 1;die;
						pdo_update("chat_users",array('info_status'=>0),array('id'=>$db_user['id']));
					}
					$user_info['uid']=$db_user['id'];
				}
				
				/*$cookieKey="user_info";*/
				$cuser_info=$oauth2::setClientCookieUserInfo($user_info,$cookieKey);
			}
			$user_info=base64_decode($cuser_info);
			$user_info=json_decode($user_info);
			$uniacid=$user_info->uniacid;
			if(empty($user_info->nickname)){
				$user_info->nickname="用户";
			}
			$user_info->nickname=$user_info->nickname;
			$this->user_info=$user_info;
		}
		$cfg=$this->module['config'];
		if(empty($cfg['siteroot'])){
			$cfg['siteroot']=$_W["siteroot"];
		}
		$this->saveSettings($cfg);
		if (strpos($user_agent, 'MicroMessenger') === false) {
			$this->user_info=$user_info;
		}
		return $this->user_info;	
	}
		
	private function jsonName($str) {
		if($str){
			$tmpStr = json_encode($str);
			$tmpStr2 = preg_replace("#(\\\ud[0-9a-f]{3})#ie","",$tmpStr);
			$return = json_decode($tmpStr2);
			if(!$return){
				return jsonName($return);
			}
		}else{
			$return = '用户-'.time();
		}
		return $return;
	}
	
	public function is_manager($room_id){
		global $_GPC,$_W;
		$uniacid=$_W['uniacid'];
		$chat_manager=pdo_fetchall("SELECT manage_openid FROM ".tablename("chat_roommanager")." WHERE room_id=:room_id",array(":room_id"=>$room_id));
		$managers=array();
		foreach ($chat_manager as $manager){
			$managers[]=$manager['manage_openid'];
		}
		
		/*检查是否为超级管理员*/
		$chat_manager=pdo_fetch("SELECT 1 FROM ".tablename("chat_manager")." WHERE uniacid=:uniacid AND uid=:uid",array(":uid"=>$this->user_info->uid,":uniacid"=>$uniacid));
		return in_array($this->user_info->openid, $managers)||!empty($chat_manager);	
	}
	
	/*是否超级管理员*/
	public function is_SuperManager(){
		global $_GPC,$_W;
		$uniacid=$_W['uniacid'];
		/*检查是否为超级管理员*/
		$chat_manager=pdo_fetch("SELECT 1 FROM ".tablename("chat_manager")." WHERE uniacid=:uniacid AND uid=:uid",array(":uid"=>$this->user_info->uid,":uniacid"=>$uniacid));
		return !empty($chat_manager);
	}

	public function send($phone){
	    if(is_numeric($phone) && strlen($phone)==11)
        {
            $sms = new SmsDemo;
            $data = $sms::sendSms($phone);
            if($data['code'] == '1')
            {
                pdo_insert('chat_sms',$data['data']);
                $result = ['code'=>1,'msg'=>'发送成功，验证码5分钟内有效','data'=>''];
                echo json_encode($result,256);exit;
            }
            else
            {
                $result = ['code'=>0,'msg'=>'发送失败，原因：'.$data['msg'],'data'=>''];
                echo json_encode($result,256);exit;
            }
        }
        else
        {
            $result = ['code'=>0,'msg'=>'请输入正确格式的手机号','data'=>''];
            echo json_encode($result,256);exit;
        }

    }
    //七牛上传文件
    public function doMobilePut_qiniu()
    {
    	 global $_GPC,$_W;
   
			// 引入鉴权类
			//use Qiniu\Auth;
    	  //$url=$this->classLoader('Qiniu\Auth');
   //  	$uploadMgr = new UploadManager;
			// $s=$uploadMgr->test();
			// echo $s;
			// exit;
    	  //print_r($url);exit;
			// 引入上传类
			//use Qiniu\Storage\UploadManager; 
    	 // $this->classLoader('Qiniu\Storage\UploadManager');
			// 需要填写你的 Access Key 和 Secret Key
			$accessKey ="zCBr-GSBs8MISRHA3xAeiIgBXGBQSR9djisyTVKi";
			$secretKey = "qE151ZE3I7wjEP79g2pRLHq_BoPoyUQGhNnAqaDK";
			$bucket = "ymxh-storage";
			// 构建鉴权对象
			$auth = new Auth($accessKey, $secretKey);

			// 生成上传 Token
			$token = $auth->uploadToken($bucket);
		 if($_FILES){
		 	//print_r($_FILES);exit;
		 	$filename=[];
	        foreach($_FILES as $key=>$val){
	        	       
		  $name=explode('.',$val['name']);
		  $name=$name[1];
		
		// 要上传文件的本地路径
			$filePath = $val['tmp_name'];
			// 上传到七牛后保存的文件名
			$key = md5('ymxh'.$val['name']).'.'.$name;
			$filename[]=$key;
			// 初始化 UploadManager 对象并进行文件的上传。
			$uploadMgr = new UploadManager();
		
			// 调用 UploadManager 的 putFile 方法进行文件的上传。
			list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
			//echo "\n====> putFile result: \n";
			if ($err !== null) {
			    return $err;
			} else {
				$fileArr='';
               foreach($filename as $k=>$v){
                  $fileArr.=$v.',';
               }
               $fileArr = rtrim($fileArr, ',');
               return $fileArr;
			   
			}
        }

      }else{

      	$data=['code'=>-1,'msg'=>'上传图片不能为空'];
      	return $data;
      }

   }

//	用户登录
    public function doMobileLogin(){

        global $_GPC,$_W;
        $phone = $_GPC['phone'];
        $pwd = !empty($_GPC['password'])?md5($_GPC['password']):null;

//            if($phone == null || $pwd == null);
//            {
//                $result = ['code'=>0,'msg'=>'请输入账号或密码','data'=>[$phone,$pwd]];
//                echo json_encode($result);exit;
//            }
        $user_info = pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE mobile=:mobile",array(':mobile'=>$phone));
        if(!empty($user_info))
        {
            if($pwd == $user_info['password'])
            {
                $info = [
                    'id'=>$user_info['id'],
                    'openid'=>$user_info['openid'],
                    'nickname'=>$user_info['nickname'],
                    'avatar'=>$user_info['avatar'],
                    'mobile'=>$user_info['mobile'],
                    'age'=>$user_info['age'],
                    'sex'=>$user_info['sex'],
                    'agent_id'=>$user_info['agent_id'],
                    'is_agent'=>$user_info['is_agent'],
                    'vip_deadline'=>(!empty($user_info['vip_deadline']))?date('Y-m-d',$user_info['vip_deadline']):''
                ];
               
                cache_write('user_info', $info);
                $data = ['token'=>md5('ymxh'.rand(100000,999999))];
                $result = ['code'=>1,'msg'=>'登录成功','data'=>$data];
                echo json_encode($result);exit;
            }
            else
            {
                $result = ['code'=>2,'msg'=>'密码错误','data'=>''];
                echo json_encode($result);exit;
            }
        }
        else
        {
            $result = ['code'=>3,'msg'=>'账号不存在','data'=>''];
            echo json_encode($result);exit;
        }
	}
	//下载素材
	public function doMobileDownMedias(){
		global $_GPC, $_W;
		header('content-type:application/json;charset=utf8');
		$uniacid=$_W['uniacid'];
		//$account = WeAccount::create($_W['account']);
		$up_type=$_GPC['up_type'];
		$medias['media_id']=$_GPC['mid'];
		$medias['type']=$_GPC['mtype'];
		
		$filename=$this->downloadMedia($medias);
		$fmdata = array(
				"success"=>1,
				"type" => $medias['type'],
				"data" =>tomedia($filename),
		);
		
		if($up_type=='ppt'){
			$topic_id=$_GPC['topic_id'];
			$topic_id=intval($topic_id);
			$order_index=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_ppt")." WHERE topic_id=:topic_id",array(":topic_id"=>$topic_id));
			$order_index=$order_index+1;
 			$user_info=$this->getUserInfo();
			$data=array(
					"uniacid"=>$_W['uniacid'],
					"topic_id"=>$topic_id,
					"create_time"=>time(),
					"img_url"=>tomedia($filename),
					"img_order"=>$order_index,
					"create_uid"=>$user_info->uid
			);

			$result=pdo_insert("chat_ppt",$data);
			$fmdata['ppt_id']=pdo_insertid();
			$fmdata['ppt_order']=$order_index;
		}
		
		echo json_encode($fmdata);
		exit;
	}
	
	/*获取支付配置*/
	public function findKJsetting()
	{
		global $_W;
		$tempuniacid=$_W['uniacid'];
		
		load()->model('account');
		$account=pdo_fetch("SELECT * FROM ".tablename("account_wechats")." where uniacid=:uniacid LIMIT 1",array(":uniacid"=>$tempuniacid));
		
		$tempappid=$account['key'];
		$tempappsecret=$account['secret'];

		if($account["level"]<4){
			$account = uni_accounts($_W['oauth_account']["uniacid"]);
			$account=$account[$_W['oauth_account']["uniacid"]];
			$tempuniacid=$_W['oauth_account']["uniacid"];
			$tempappid=$account['key'];
			$tempappsecret=$account['secret'];
		}

		$kjsetting=array();
		$setting = uni_setting($tempuniacid, array('payment'));
		$pay = $setting['payment'];
	
		$kjsetting['appid']=$tempappid;
		$kjsetting['appsecret']=$tempappsecret;
	
		$kjsetting['mchid']=$pay['wechat']['mchid'];
		$kjsetting['shkey']=$pay['wechat']['apikey'];
		
		$kjsetting['certpath'] = MODULE_ROOT.'/cert/apiclient_cert_'.$_W['uniacid'].'.pem';
		$kjsetting['keypath'] = MODULE_ROOT.'/cert/apiclient_key_'.$_W['uniacid'].'.pem';
		
		return $kjsetting;
	}
	
	/*生成订单号*/
	public function build_order_sn(){
		$yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
		$orderSn = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
		return $orderSn;
	}
		
	/*上传音频文件到七牛 date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);*/
	public function upload_qiniu($filePath,$filekey){
		require_once(IA_ROOT . '/framework/library/qiniu/autoload.php');
		$cfg=$this->module['config'];
		$accessKey=$cfg['qn_accesskey'];
		$secretKey=$cfg['qn_secretkey'];
		$bucket=$cfg['qn_bucket'];
		//转码时使用的队列名称
		$pipeline = $cfg['qn_queuename'];
		//要进行转码的转码操作
		$fops = "avthumb/mp4/ab/64k/ar/44100/acodec/libfaac";
		$auth = new Qiniu\Auth($accessKey, $secretKey);	
		//可以对转码后的文件进行使用saveas参数自定义命名，当然也可以不指定文件会默认命名并保存在当间
		$savekey = Qiniu\base64_urlSafeEncode($bucket.':'.$filekey.'_1');
		$fops = $fops.'|saveas/'.$savekey;
		$policy = array(
				'persistentOps' => $fops,
				'persistentPipeline' => $pipeline
		);
		$uptoken = $auth->uploadToken($bucket, null, 3600, $policy);
	
		//上传文件的本地路径
		$uploadMgr = new Qiniu\Storage\UploadManager();
		list($ret, $err) = $uploadMgr->putFile($uptoken, $filekey, $filePath);
		load()->func("logging");
		logging_run("qiniu:error".$err."成个");
		if ($err !== null) {
			load()->func("logging");
			logging_run("qiniu:error");
			return false;
		}
		return true;
	}
	
	/*转换为七牛url地址*/
	public function to_qiniu_url($filename){
		$cfg=$this->module['config'];
		$domain=$cfg['qn_domain'];
		return $domain."/".$filename."_1";
	}
	
	/*获取七牛url模板*/
	public function get_qiniu_url_format(){
		$cfg=$this->module['config'];
		$domain=$cfg['qn_domain'];
		return $domain."/{0}_1";
	}
	
	/*提现操作公共函数*/
	public function pay_cash($openid,$fee){
		global $_W;
		$url='https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers';
		$kjsetting=$this->findKJsetting();
		$pars = array();
		$pars['mch_appid'] =$kjsetting['appid'];
		$pars['mchid']=$kjsetting['mchid'];
		$pars['nonce_str'] =random(32);
		$pars['partner_trade_no'] =time().random(3,1);
		$pars['openid'] =$openid;
		$pars['check_name'] ='NO_CHECK' ;
		$pars['amount'] =$fee*100;
		$pars['desc'] ='直播提现';
		$pars['spbill_create_ip'] =CLIENT_IP;
			
		ksort($pars, SORT_STRING);
		$string1 = '';
		foreach ($pars as $k => $v) {
			$string1 .= "{$k}={$v}&";
		}
		$string1 .= "key=".$kjsetting['shkey'];
		$pars['sign'] = strtoupper(md5($string1));
		$xml = array2xml($pars);

 		$extras = array();
 		$extras['CURLOPT_CAINFO'] =MODULE_ROOT.'/cert/apiclient_root_'.$_W['uniacid'].'.pem';
 		$extras['CURLOPT_SSLCERT'] = MODULE_ROOT.'/cert/apiclient_cert_'.$_W['uniacid'].'.pem';
 		$extras['CURLOPT_SSLKEY'] = MODULE_ROOT.'/cert/apiclient_key_'.$_W['uniacid'].'.pem';
		
		
		$procResult = null;
		load()->func('communication');
		$resp = ihttp_request($url, $xml, $extras);
		
		if (is_error($resp)) {
			$procResult = $resp;
		} else {
			$arr=json_decode(json_encode((array) simplexml_load_string($resp['content'])), true);
			$xml = '<?xml version="1.0" encoding="utf-8"?>' . $resp['content'];
			$dom = new \DOMDocument();
			if ($dom->loadXML($xml)) {
				$xpath = new \DOMXPath($dom);
				$code = $xpath->evaluate('string(//xml/return_code)');
				$ret = $xpath->evaluate('string(//xml/result_code)');
				if (strtolower($code) == 'success' && strtolower($ret) == 'success') {
					$payment_no=$xpath->evaluate('string(//xml/payment_no)');
					$procResult =  array('errno'=>0,'error'=>'success','payment_no'=>$payment_no);
				} else {
					$error = $xpath->evaluate('string(//xml/err_code_des)');
					$procResult = array('errno'=>-2,'error'=>$error);
				}
			} else {
				$procResult = array('errno'=>-1,'error'=>'未知错误');
			}
		}
		return $procResult;		
	}
	
	/*发送模板消息*/
	public function sendTplNotice($touser, $template_id, $postdata, $url = '', $topcolor = '#FF683F'){
		global $_W;
		$Account = WeAccount::create($_W['account']);
		$Account->sendTplNotice($touser,$template_id,$postdata,$url,$topcolor);
	}
	
	/*退款*/
	// public function refund($order){
		// global $_W;
		
		// require_once(MODULE_ROOT . '/WxPayPubHelper/WxPayPubHelper.php');
		// $kjsetting=$this->findKJsetting();	
		
		// $kjsetting['certpath'] = MODULE_ROOT.'/cert/apiclient_cert_'.$_W['uniacid'].'.pem';
		// $kjsetting['keypath'] = MODULE_ROOT.'/cert/apiclient_key_'.$_W['uniacid'].'.pem';
		
		// $refund = new Refund_pub($kjsetting);
		
		// $refund->setParameter("transaction_id", $order['transaction_id']);//商户订单号
		// $refund->setParameter("out_refund_no", $kjsetting['mchid'].date("YmdHis"));//商户订单号
		// $refund->setParameter("total_fee", $order['pay_money']*100);
		// $refund->setParameter("refund_fee", $order['pay_money']*100);
		// $refund->setParameter("op_user_id", $kjsetting['appid']);
		// $response=$refund->getResult();
		// return $response;
	// }


	//远程请求（不获取内容）函数，下面可以反复使用 非阻塞调用
	public function _sock($url) {
		$host = parse_url($url,PHP_URL_HOST);
		$port = parse_url($url,PHP_URL_PORT);
		$port = $port ? $port : 80;
		$scheme = parse_url($url,PHP_URL_SCHEME);
		$path = parse_url($url,PHP_URL_PATH);
		$query = parse_url($url,PHP_URL_QUERY);
		if($query) $path .= '?'.$query;
		if($scheme == 'https') {
			$this->post_url($url);
			//$host = 'ssl://'.$host;
		}
		$fp = stream_socket_client("tcp://".$host.":80", $errno, $errstr, 30);
//$fp = fsockopen($host,$port,$error_code,$error_msg,1);
		if(!$fp) {
			return array('error_code' => $error_code,'error_msg' => $error_msg);
		}
		else {
			
			stream_set_blocking($fp,true);//开启了手册上说的非阻塞模式
			stream_set_timeout($fp,1);//设置超时
			$header = "GET $path HTTP/1.1\r\n";
			$header.="Host: $host\r\n";
			$header.="Connection: close\r\n\r\n";//长连接关闭
			fwrite($fp, $header);
			usleep(1000); // 这一句也是关键，如果没有这延时，可能在nginx服务器上就无法执行成功
			fclose($fp);
			return array('error_code' => 0);
		}
	}
	
	/*触发数据七牛调用*/
	public function timer_start(){
		global $_W;
		$temp_url=$this->createMobileUrl('rs_down');
		$temp_url=substr($temp_url, 1);
		$timer_url=$_W['siteroot']."app".$temp_url;
		$this->_sock($timer_url);
	}
	
	/*下载文件到本地*/
	public function downloadMedia($media,$type='img') {
		global $_W;
		$account = WeAccount::create($_W['account']);
		$mediatypes = array('image', 'voice', 'thumb');
		if (empty($media) || empty($media['media_id']) || (!empty($media['type']) && !in_array($media['type'], $mediatypes))) {
			return error(-1, '微信下载媒体资源参数错误');
		}
		
		$token = $account->fetch_token();
		if(is_error($token)){
			return $token;
		}

		unset($account);
		$sendapi = "http://file.api.weixin.qq.com/cgi-bin/media/get?access_token={$token}&media_id={$media['media_id']}";
		
		$response = ihttp_get($sendapi);
		if(!empty($response['headers']['Content-disposition']) && strexists($response['headers']['Content-disposition'], $media['media_id'])){
			global $_W;
			$filename =str_replace( array('attachment; filename=', '"',' '),'',$response['headers']['Content-disposition']);
			$filename = 'images/'.$_W['uniacid'].'/'.date('Y/m/').$filename;
			load()->func('file');
			file_write($filename, $response['content']);
			if($type=='img'){
				file_remote_upload($filename);
			}
			return $filename;
		} else {
			load()->func("logging");
			$response = json_decode($response['content'], true);
			return logging_run($response['errcode']."___".$response['errmsg']);
		}
	}
	
	
	/*获取云通讯设置相关信息*/
	public function load_imsetting(){
		global $_W;	
		$uniacid=$_W['uniacid'];
		$key_path = MODULE_ROOT."/private_key/private_key_".$uniacid;
		
		if(!file_exists($key_path)){
			$key_path=MODULE_ROOT."/private_key/private_key";
		}
		
		$signature = MODULE_ROOT."/phpsdk/signature/linux-signature64";
		if(is_64bit()){
			if(PATH_SEPARATOR==':'){
				$signature = MODULE_ROOT."/phpsdk/signature/linux-signature64";
			}else{
				$signature = MODULE_ROOT."/phpsdk/signature/windows-signature64.exe";
			}
				
		}else{
			if(PATH_SEPARATOR==':'){
				$signature = MODULE_ROOT."/phpsdk/signature/linux-signature32";
			}else{
				$signature = MODULE_ROOT."/phpsdk/signature/windows-signature64.exe";
			}
		}
		
		$record=pdo_fetch("SELECT * FROM ".tablename("chat_imsetting")." WHERE uniacid=:uniacid",array(":uniacid"=>$_W['uniacid']));
		$record['keypath']=$key_path;
		$record['signature']=$signature;
	
		return $record;
	}
	
	
	/*获取签名*/
	public function generate_user_sig($user_name){
		global $_W;
		require_once MODULE_ROOT."/phpsdk/TimRestApi.php";
		require_once MODULE_ROOT."/phpsdk/TimRestInterface.php";	
		$uniacid=$_W['uniacid'];
		$uid=$this->user_info->uid;
		$record=$this->load_imsetting();
		if($user_name=='0'){
			$user_name=$record['admin_account'];
		}
		$sign_type=$record['check_type'];
		$sign_type=empty($sign_type)?"local":$sign_type;
		
		$api = createRestAPI();
		$api->init($record['sdkappid'],$record['admin_account']);
		
		$sign_record=pdo_fetch("SELECT * FROM ".tablename("chat_sign")." WHERE uniacid=:uniacid AND user_name=:user_name",array(":uniacid"=>$uniacid,":user_name"=>$user_name));
		/*如果过期或者为空的话*/
		if(empty($sign_record)||$sign_record['expire_time']<time()){
			
			if($sign_type=="remote"){		
			     $ret = $api->generate_user_sig_remote($user_name, '172800', $record['keypath'], $record['signature']);
			}else {
				 $ret = $api->generate_user_sig($user_name, '172800', $record['keypath'], $record['signature']);
			}

			$data=array(
					"uniacid"=>$uniacid,
					"uid"=>$uid,
					"user_name"=>$user_name,
					"sign_result"=>$ret[0],
					"sign_time"=>time(),
					"expire_time"=>time()+172700
			);
			
			if(empty($sign_record)){
				pdo_insert("chat_sign",$data);
			}else{
				pdo_update("chat_sign",$data,array("id"=>$record["id"]));
			}
		}else{
			$api->usersig=$sign_record['sign_result'];
		}
		return $api;
	}
	
	/*创建直播间*/
	public function create_chatroom($topic_name){
		$api=$this->generate_user_sig("0");
		$ret=$api->group_create_group("AVChatRoom",$topic_name,"");
		load()->func("logging");
		if($ret['ErrorCode']=='0'){
			return $ret['GroupId'];
		}else{
			logging_run(json_encode($ret));
			return -1;
		}
	}
	
	/*主题禁言*/
	public function group_forbid_send_msg($group_id,$account_id,$second){
		$api=$this->generate_user_sig("0");
		$ret = $api->group_forbid_send_msg($group_id,$account_id,$second);		
		if($ret['ErrorCode']=='0'){
			return true;
		}else{
			return false;
		}
	}
	
    /*获取直播间信息*/
	public function group_get_group_info($group_id){
		$api = $this->generate_user_sig("0");
		$ret = $api->group_get_group_info($group_id);

		if($ret['ErrorCode']=='0'){
			return $ret;
		}else{
			return false;
		}
	}
	
	/*获取直播间在线人数*/
	public function group_get_group_memnum($group_id){
	  $ret=$this->group_get_group_info($group_id);

	  if($ret){
	  	  $memnum=$ret['GroupInfo'][0]['MemberNum'];
	  	  var_dump($memnum);
	  	  return $memnum;
	  }
	  return 0;
	}
	
	/*发起请求*/
	public function send_post($url, $post_data) {
		$postdata = http_build_query($post_data);
		$options = array(
				'http' => array(
						'method' => 'POST',
						'header' => 'Content-type:application/x-www-form-urlencoded',
						'content' => $postdata,
						'timeout' => 15 * 60, // 超时时间（单位:s）
						'client-ip'=>CLIENT_IP,
						'x-forwarded-for'=>CLIENT_IP
				)
		);
		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		return $result;
	}
	/**
	 * 获取推流地址
	 * 如果不传key和过期时间，将返回不含防盗链的url
	 * @param bizId 您在腾讯云分配到的bizid
	 *        streamId 您用来区别不通推流地址的唯一id
	 *        key 安全密钥
	 *        time 过期时间 sample 2016-11-12 12:00:00
	 * @return String url
	 */
	function getPushUrl($bizId, $streamId, $key, $time){
	
		if($key && $time){
			$txTime = strtoupper(base_convert(strtotime($time),10,16));
			//txSecret = MD5( KEY + livecode + txTime )
			//livecode = bizid+"_"+stream_id  如 8888_test123456
			$livecode = $bizId."_".$streamId; //直播码
			$txSecret = md5($key.$livecode.$txTime);
			$ext_str = "?".http_build_query(array(
					"bizid"=> $bizId,
					"txSecret"=> $txSecret,
					"txTime"=> $txTime
			));
		}
		return "rtmp://".$bizId.".livepush.myqcloud.com/live/".$livecode.(isset($ext_str) ? $ext_str : "")."&record=mp4&record_interval=7200";
	}
	
	/**
	 * 获取播放地址
	 * @param bizId 您在腾讯云分配到的bizid
	 *        streamId 您用来区别不通推流地址的唯一id
	 * @return String url
	 */
	function getPlayUrl($bizId, $streamId){
		$livecode = $bizId."_".$streamId; //直播码
		return array(
				"rtmp://".$bizId.".liveplay.myqcloud.com/live/".$livecode,
				"http://".$bizId.".liveplay.myqcloud.com/live/".$livecode.".flv",
				"http://".$bizId.".liveplay.myqcloud.com/live/".$livecode.".m3u8"
		);
	}
	/**
	 * get方式请求
	 */
	function get_url($url){
		$ch = curl_init();
		$timeout = 50;
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	
	/**
	 * POST方式请求
	 */
	function post_url($url){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//这个是重点。
		$result= curl_exec($curl);
		curl_close($curl);
		return $result;
	}
	
	/**
	 * 获取录制视频
	 */
	function getvodlist($appid,$apikey,$streamid){
		$t=time();
		$txttime=$t+3600*24;
		$sign = MD5($apikey.$txttime);
		$url = "http://fcgi.video.qcloud.com/common_access?cmd=".$appid."&interface=Live_Tape_GetFilelist&Param.s.channel_id=".$streamid."&t={$txttime}&sign={$sign}";
		
		$ch = curl_init();
		$timeout = 50;
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	/**
	 * 视频转码
	 */
	function convertvodfile($secretid,$fileid){
		$nonce=time();
		//签名
		$srcStr = 'GETvod.api.qcloud.com/v2/index.php?Action=ConvertVodFile&Nonce='.$nonce.'&SecretId='.$secretid.'&SignatureMethod=HmacSHA256&Timestamp='.time();
		$signStr = base64_encode(hash_hmac('sha256', $srcStr, $secretid, true));
		//请求
		$url="https://vod.api.qcloud.com/v2/index.php?Action=ConvertVodFile&fileId=".$fileid."&SecretId=".$secretid."&Timestamp=".time()."&Nonce=".$nonce."&Signature=".$signStr."&SignatureMethod=HmacSHA256";
	
		var_dump($srcStr);
		var_dump($signStr);
		var_dump($url);
		$ch = curl_init();
		$timeout = 50;
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	/**
	 * 视频拼接
	 * 请求方法 + 请求主机 +请求路径 + ? + 请求字符串
	 */
	function contactvideo($secretid,$fileidstr,$dstype){
		$arr=array(
				'Action' => 'ConcatVideo',
				'Nonce' =>time(),
				'SecretId' =>$secretid, 
				'Timestamp' =>time(),
				'name' =>"testfile",
				'SignatureMethod' =>"HmacSHA256",
	
		);
		//签名
		$srcStr = "GETvod.api.qcloud.com/v2/index.php?Action=ConcatVideo".$dstype."&Nonce=".time()."&name=testfile".$fileidstr."&SecretId=".$secretid."&SignatureMethod=HmacSHA256&Timestamp=".time();
		$signStr = base64_encode(hash_hmac('sha256', $srcStr, $secretid, true));
		$signStr=urlencode($signStr);
		//请求
		$url="https://vod.api.qcloud.com/v2/index.php?Action=ConcatVideo".$fileidstr."&name=testfile".$dstype."&SecretId=".$secretid."&Timestamp=".time()."&Nonce=".time()."&Signature=".$signStr;
	
		var_dump($srcStr);
		var_dump($signStr);
		var_dump($url);
		$ch = curl_init();
		$timeout = 50;
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	function is_remote($load_path){
		global $_W;
		if($_W['setting']['remote'] == 0){
			$result = tomedia($load_path);
		}else{
			$result = $_W['attrchurl'].$load_path;
		}
		return $result;
	}
	function getAccess_token($table,$uniacid,$constraint=0){
		$mes = pdo_fetch("SELECT aw.secret,aw.key FROM ".tablename('account_wxapp')."as aw WHERE uniacid=:uniacid",array(':uniacid'=>$uniacid));
		$access_token = pdo_fetch("SELECT access_token,expires_in FROM ".tablename("$table")." WHERE uniacid=:uniacid",array(':uniacid'=>$uniacid));
		if($access_token['expires_in'] <= time()+7000 || $constraint == 1){
			$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$mes['key']}&secret={$mes['secret']}";;
			$arr=$this->http_curl($url);
			$arr=json_decode($arr,true);
			$access_token=$arr['access_token'];
			$data=array(
				'access_token'=>$access_token,
				'expires_in'=>time()+7000
			);
			pdo_update($table,$data,array('uniacid'=>$uniacid));
		}else{
			$access_token=$access_token['access_token'];
		}
		return $access_token;
	}
	function http_curl($url,$type='get',$res='json',$arr=''){
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		//有的是证书问题
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		if($type== 'post'){
			curl_setopt($ch,CURLOPT_POST,1);
			curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
		}
		$output=curl_exec($ch);
		curl_close($ch);
		if($res=='json'){
			if(curl_errno($ch)){
				return curl_error($ch);
			}else{
				return $output;
			}
		}
	}
	function get_already ($topic,$uniacid){
		$qc_setting=pdo_fetch("select * from ".tablename("chat_qc_setting")." where uniacid=:uniacid",array(":uniacid"=>$uniacid));
		$apikey=$qc_setting["APIkey"];
		$chat_data=pdo_fetch("select * from ".tablename("chat_qc_data")." where uniacid=:uniacid and id=:id",array(":uniacid"=>$uniacid,":id"=>$topic["vedio_id"]));
		$stream_id=$qc_setting["bizid"]."_".$chat_data["streamid"];
		$vodlist=$this->getvodlist($qc_setting["appid"],$apikey,$stream_id);
		
		$arr=json_decode($vodlist);
		$filelist=$arr->output->file_list;
		$filesize=0;
		$fileid=0;
		$record_file_url='';
		for($i=0;$i<count($filelist);$i++){
			$filesize2=$filelist[$i]->file_size;
			//var_dump($filesize2,$filesize);
			if($filesize2>$filesize){
				$filesize=$filesize2;
				$fileid=$filelist[$i]->file_id;
				//$record_file_url = $filelist[$i]->record_file_url;
			}
			
			//视频转码
			//$this->convertvodfile($qc_setting["secretid"],$fileid,$topic["id"]);
		}
		//var_dump($fileid);die;
		// $ks = array(
		// 	'file_id'=>$fileid,
		// 	'record_file_url'=>$record_file_url
		// );
		// return $ks;
		return $fileid;
	}
	function get_user($openid){
		global $_GPC,$_W;
		$account_api = WeAccount::create();
		$access_token = $account_api->getAccessToken();
        $api_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=". $access_token . "&openid=" . $openid . "&lang=zh_CN";
        $content = ihttp_get($api_url);
        $userInfo = @json_decode($content['content'], true);
        return $userInfo['subscribe'];
	}
	function is_vip($uid){
		global $_W;
		$db_user = pdo_fetch("select id,info_status,end_time,settime from ".tablename("chat_users")." where uniacid=:uniacid and id=:uid",array(":uniacid"=>$_W['uniacid'],':uid'=>$uid));

		if( ($db_user['end_time']>time() &&$db_user['info_status']==1) || ($db_user['info_status']==1&&$db_user['end_time']==-1) ){
			return true;
		}else{
			return false;
		}
	}
	function get_coupon($money,$uniacid,$uid){
		global $_W;
		//查询我的可用优惠劵
		$coupon_list = pdo_fetchall("select * from ".tablename("chat_coupon_use")." where uniacid=:uniacid and use_uid=:uid and use_time is null and start_time<:time and end_time>:time and ((coupon_type=1 and full_money<:money) or coupon_type= 2 )",array(":uniacid"=>$uniacid,':uid'=>$uid,':time'=>time(),':money'=>$money));
		return $coupon_list;
	}
	//获取减少金额
	function have_money($coupon_id){
		global $_W;
		$coupon_info = pdo_fetch('select * from '.tablename("chat_coupon_use")." where uniacid=:uniacid and c_id=:coupon_id",array(":uniacid"=>$_W['uniacid'],':coupon_id'=>$coupon_id));

		if(!empty($coupon_info)){
			$arr = array(
				'coupon_id'=>$coupon_info['c_id'],
				'coupon_money'=>$coupon_info['coupon_money'],
			);
		}else{
			$arr = array();
		}
		
		return $arr;
	}


}