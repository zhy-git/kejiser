<?php 

class model_prosort {



	static function getSort(){
		global $_W;

		$cache = Util::getCache('prosort','all');
		if( empty( $cache ) ){
			$where = array('uniacid'=>$_W['uniacid']);
			$data = Util::getAllDataInSingleTable('zofui_sitetemp_prosort',$where,1,1010,' `number` DESC ',false,false);
			
			$cache =  $data[0];
			$cache = Util::prosort($cache);
			// var_dump($cache);die();
			Util::setCache('prosort','all',$cache);
		}
		return $cache;
	}
	

}