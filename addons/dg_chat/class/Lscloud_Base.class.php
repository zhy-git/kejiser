<?php
/**乐视云移动直播公用函数*/
class Lscloud_Base{
	/** 移动直播接口列表*/
	public $api_url='http://api.open.lecloud.com/live/execute';//接口地址
	//应用
	public static $app_create_url="lecloud.mobileLive.app.create";//应用创建接口（ver=1.0）
	public static $app_list_url="lecloud.cloudlive.activity.search";//应用查询接口（ver=1.0）
	public static $app_modify_url="lecloud.cloudlive.activity.modify";//应用修改接口（ver=1.0）
	public static $app_record_url="lecloud.mobileLive.app.record";//应用设置自动录制接口（ver=1.0）
	public static $app_close_url="lecloud.cloudlive.activity.stop";//应用设置自动录制接口（ver=1.0）
	public static $app_safe_url="lecloud.cloudlive.activity.sercurity.config";//安全设置（ver=4.0）
	//直播流
	public static $stream_machine_url="lecloud.cloudlive.activity.getActivityMachineState";//移动直播流信息查询接口（ver=4.0）
	public static $stream_list_url="lecloud.cloudlive.vrs.activity.streaminfo.search";//移动直播流信息查询接口（ver=4.0）
	//录制
	public static $record_url="lecloud.cloudlive.rec.createRecTask";//录制任务创建接口（ver=4.0）
	public static $record_search_url="lecloud.cloudlive.rec.searchResult";//录制任务查询接口（ver=4.0）
	public static $record_get_url="lecloud.cloudlive.activity.getPlayInfo";//获取录制视频信息接口（ver=4.0）
	
	private $userid="";
	private $UUID="";
	private $secret="";
	private $sysParams="";
	
	public function __construct($userid,$UUID,$secret){
		$this->userid=$userid;
		$this->UUID=$UUID;
		$this->secret=$secret;
		//系统参数
		$this->sysParams=array(
				"timestamp"=>time()*1000,
				"ver"=>'4.0',
				"userid"=>intval($userid)
		);
	}
	
	private function ResultHandle($result){
		$result=json_decode($result,true);
		return $result;
	}
	/**生成签名*/
	public function _getSign($param,$secret)
	{
		//签名步骤一：按字典序排序参数
		ksort($param);
		$String = $this->_formatBizQueryParaMap($param,"UTF-8");//拼接数组
		//签名步骤二：在string后加入KEY
		$String = $String.$secret;
		$String=str_replace("%2C",",",$String);
		
		//签名步骤三：MD5加密
		$String = md5($String);
		return $String;
	}
	 
	/**拼接数组*/
	public function _formatBizQueryParaMap($paraMap, $urlencode){
		$buff = "";
		ksort($paraMap);
		foreach ($paraMap as $k => $v){
			if($urlencode){
				$v = urlencode($v);
			}
			$buff .= $k . $v;
		}
		return $buff;
	}
	/**APP操作*/
	public function setApp($apiParams){
		//参数集合=系统参数+业务参数
		$params = array_merge($this->sysParams, $apiParams);
		$params['sign'] = $this->_getSign($params,$this->secret);

		
		//$result=$this->send_get($this->api_url,$params);
		if(strstr($params["method"],"record")||strstr($params["method"],"stop")||strstr($params["method"],"createRecTask")||strstr($params["method"],"config")){
			$result=$this->send_post($this->api_url,$params);

		}else{
			$result=$this->send_get($this->api_url,$params);
		}
		
		return $this->ResultHandle($result);
	}
	
	/**发送post请求*/
	public function send_post($url, $post_data) {
		$postdata = http_build_query($post_data);
		
		$postdata=str_replace("%2C",",",$postdata);
		
		$options = array(
				'http' => array(
						'method' => 'POST',
						'header' => 'application/x-www-form-urlencoded;charset=utf-8',
						'content' => $postdata,
						'timeout' => 15*60
				)
		);
		$context = stream_context_create($options);
		
		$result = file_get_contents($url, false, $context);
		
		return $result;
	}
	
	/**发送get请求*/
	public function send_get($url, $post_data) {
		if(!empty($post_data['liveId'])){
			$param.="timestamp=".$post_data["timestamp"]."&ver=".$post_data["ver"]."&userid=".$post_data["userid"]."&method=".$post_data["method"]."&sign=".$post_data["sign"]."&liveId=".$post_data['liveId']."&taskId=".$post_data['taskId'];
		}elseif(!empty($post_data['activityId'])){
			$param.="timestamp=".$post_data["timestamp"]."&ver=".$post_data["ver"]."&userid=".$post_data["userid"]."&method=".$post_data["method"]."&sign=".$post_data["sign"]."&activityId=".$post_data["activityId"];
		}else{
			$param.="timestamp=".$post_data["timestamp"]."&ver=".$post_data["ver"]."&userid=".$post_data["userid"]."&method=".$post_data["method"]."&sign=".$post_data["sign"];
		}
		
		//$param = http_build_query($post_data);
		$url=$url."?".$param;
		$ch = curl_init();
		$timeout = 5;
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
}