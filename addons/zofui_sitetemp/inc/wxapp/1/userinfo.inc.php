<?php
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;
    

    if ($_GPC['op'] == 'add') {
    	//添加特派员个人信息的
		$info = pdo_get('zofui_sitetemp_userinfo', array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
		if ($info) {
			//编辑信息
			$userinfo= [
				'uniacid' => $_W['uniacid'],
	            'openid' => $_W['openid'],
	            'title' => $_GPC['name'],
	            'phone' => $_GPC['phone'],
	            'img' => $_GPC['img'],
	            'content' => $_GPC['content'],
	            'createtime' => time(),
	    	];
            $result = pdo_update('zofui_sitetemp_userinfo',$userinfo,array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
			$this->result(0, '操作成功');
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
       
   }elseif($_GPC['op'] == 'list'){
        //获取所有的特派员信息
   	    $where = array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']);
   	    $info = Util::getAllDataInSingleTable('zofui_sitetemp_userinfo',$where,1,6,' `id` DESC ',false,false);
   	    if ($info) {
   	   	   $this->result(0, '操作成功',$info);
   	   }else{
           $this->result(1, '操作失败');
   	   } 
   }else{
   	   $info = pdo_get('zofui_sitetemp_userinfo', array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
   	   if ($info) {
   	   	   $this->result(0, '操作成功',$info);
   	   }else{
           $this->result(1, '操作失败');
   	   } 
   }



