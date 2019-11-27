<?php 
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;
	
	$content = htmlspecialchars_decode( $_GPC['addressdate'] );
	$data = json_decode( $content,true );
	if( empty( $data ) ) $this->result(1,'请提交数据');
				
	$data = array(
		'openid'  => $_W['openid'],
		'uniacid' => $_W['uniacid'],
		'address' => $data['detailInfo'],
		'tel'	  => $data['telNumber'], 	
	);
	
	$result = pdo_insert('zofui_sitetemp_address',$data);
	if($result) {
		$this->result(0, '成功添加地址。',$data);
	}else{
	    $this->result(0, '添加地址失败。',$data);
	}
	