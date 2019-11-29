<?php
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;

 //    $content = htmlspecialchars_decode( $_GPC['addressdate'] );
	// $data = json_decode( $content,true );
    $user= [
         'opendid' => $_W['i'],
         'nickname' => $_GPC['nickname'],
         'headimgurl' => $_GPC['headimgurl'],
         'createtime' => time(),
    ];
    $result = pdo_inset('zofui_sitetemp_reguser',$user);
    if ($result) {
    	$this->result(0, '服务器注册用户成功',$result);
    }else{
    	$this->result(0, '服务器注册用户失败',$result);
    }



