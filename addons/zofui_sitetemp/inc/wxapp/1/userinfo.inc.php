<?php
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;
    

    if ($_GPC['op'] == 'add') {
    	//添加特派员个人信息的
		$info = pdo_get('zofui_sitetemp_userinfo', array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
		if ($info) {
			$this->result(1,'','你已添加过了。');
		}else{
			
			$userinfo= [
				'uniacid' => $_W['uniacid'],
	            'openid' => $_W['openid'],
	            'title' => $_GPC['name'],
	            'phone' => $_GPC['phone'],
	            'img' => $_GPC['img'],
	            'content' => $_GPC['content'],
	            'createtime' => time(),
	    	];
	    	$result = pdo_insert('zofui_sitetemp_userinfo',$userinfo);
	    	if ($result) {
	    		$this->result(0, '操作成功',$result);
	    	}else{
	    		$this->result(1, '操作失败');
	    	}
		}
       
   }else{
   	   $info = pdo_get('zofui_sitetemp_userinfo', array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
   	   $info['img'] = explode(",",$info['img']);

   	   if ($info) {
   	   	   $this->result(0, '操作成功',$info);
   	   }else{
           $this->result(1, '操作失败');
   	   }

       
   }



