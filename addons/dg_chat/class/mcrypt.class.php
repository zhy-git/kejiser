<?php
class dgmcrypt{
	public static $key="duoguan185$##@";
	//加密
	public static function encrypt($code){
		return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $code, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
	}
	//解密
	public static function decrypt($code){
		return mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($code), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND));
	}
	//加密结果再md5加密
	public static function md5_encrypt($code){
		return md5(dgmcrypt::encrypt($code));
	}
}