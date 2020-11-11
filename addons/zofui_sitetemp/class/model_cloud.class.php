<?php 


class model_cloud {
	
	static private $csapi = 'http://127.1.1.2/app/index.php?c=sitetemp&a=index';
	static private $api = 'http://api.zofui.net/app/index.php?c=sitetemp&a=index';
	
	static function getContent( $data,$user,$time=60 ){
		global $_W;
		$pdata = $data;
		$pdata['user'] = $user;
		
		$api = in_array($_W['siteroot'], array('http://127.0.0.5/','http://127.0.0.6/')) ? self::$csapi : self::$api;
		
		$res = Util::httpPost($api ,$pdata,'',$time);
		
		$r = json_decode($res,true);
		
		if( is_array($r) ){
			return $r;
		}else{
			if( $data['type'] == 'subtemp' ){
				return array('status'=>200,'msg'=>'已提交');
			}
			return array('status'=>201,'msg'=>'云服务异常');
		}
		
	}

}