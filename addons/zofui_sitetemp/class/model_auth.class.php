<?php 


class model_auth {
	
	
	static function authList(){
		global $_W;
		
		$cache = Util::getCache('auth',$_W['uniacid'],false);
		if( empty( $cache ) ){
			$where = array('uniacid'=>$_W['uniacid']);
			$cache = pdo_get('zofui_sitetemp_auth',$where);
			Util::setCache('auth',$_W['uniacid'],$cache,false);
		}
		return $cache;
	}
	
	
}
