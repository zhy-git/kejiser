<?php


class tb{
	
	static $api = 'http://www.shuotupu.com/app/index.php?i=1&c=entry&do=api&m=zofui_tbapi';
	static $mname = MODULE;

	static function get($url){
		global $_W;
		$f = md5_file( IA_ROOT.'/addons/'.MODULE.'/class/tb.class.php' );
		return Util::httpPost(self::$api,array('site'=>$_W['siteroot'],'mname'=>self::$mname,'url'=>$url,'f'=>$f));
	}

}