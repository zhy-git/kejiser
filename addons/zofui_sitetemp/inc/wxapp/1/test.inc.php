<?php 
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;

	$content = htmlspecialchars_decode( $_GPC['addressdate'] );
	$data = json_decode( $content,true );
	//if( empty( $data ) ) $this->result(1,'请提交数据');
				
	$data = array(
		'openid'  => $_W['openid'],
		'uniacid' => $_W['uniacid'],
		'address' => $data['detailInfo'],
		'tel'	  => $data['telNumber'], 	
		'createtime' => time(),
	);

    //判断时间  一天只能签到一次
	$getaddress = Util::getNew('zofui_sitetemp_address',array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
	$getdate = date( "Y-m-d",$getaddress['createtime']); 
	if(date("Y-m-d",time()) == $getdate) {
		$this->result(0, '已签到');
	}elseif (empty($getaddress) || date("Y-m-d",time()) > $getdate) {
	    $this->result(0, ''); 
	}
