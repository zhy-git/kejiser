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
	//获取服务器用户的信息
	$hasuser = pdo_get('zofui_sitetemp_reguser',array('openid' => $_W['openid'],'uniacid' => $_W['uniacid'] ));

    //判断时间  一天只能签到一次
	$getaddress = Util::getNew('zofui_sitetemp_address',array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
	$getdate = date( "Y-m-d",$getaddress['createtime']); 
	if(date("Y-m-d",time()) == $getdate) {
		$this->result(0, '已签到',array('istrue' => $hasuser['istrue'],'address' => $hasuser['address']));
	}elseif (empty($getaddress) || date("Y-m-d",time()) > $getdate) {
	    $this->result(0, '',array('istrue' => $hasuser['istrue'], 'address' => $hasuser['address'])); 
	}
