<?php
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;
    

    if ($_GPC['op'] == 'add') {
    	//添加和编辑
		$info = pdo_get('zofui_sitetemp_userinfo', array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
		if ($info) {
			//编辑信息
			$userinfo= [
				'uniacid' => $_W['uniacid'],
	            'openid' => $_W['openid'],
	            'title' => $_GPC['name'],
	            'phone' => $_GPC['phone'],
	            'img' => $_GPC['img'],
	            'prosortid' => $_GPC['id'],
	            'content' => $_GPC['content'],
	            'createtime' => time(),
	    	];
            $result = pdo_update('zofui_sitetemp_userinfo',$userinfo,array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
			$this->result(0, '操作成功');
		}else{
			if (empty($_W['openid']) && empty($_W['uniacid'])) {
				$this->result(1, '添加特派员失败');
			}else{
				//添加特派员
				$userinfo= [
					'uniacid' => $_W['uniacid'],
		            'openid' => $_W['openid'],
		            'title' => $_GPC['name'],
		            'phone' => $_GPC['phone'],
		            'img' => $_GPC['img'],
		            'prosortid' => $_GPC['id'],
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
		}
       
   }elseif($_GPC['op'] == 'list'){
        //获取所有的特派员信息
   	    $where = array('uniacid'=>$_W['uniacid']);
   	    $info = Util::getAllDataInSingleTable('zofui_sitetemp_userinfo',$where,1,6,' `id` DESC ',false,false);
   	    $list = $info[0];
   	    foreach ($list as $key => $value) {
    		$list[$key]['img'] = strtok($value['img'],',');
    		$list[$key]['createtime'] = date('Y-m-d',$value['createtime']);
    	}

   	    if ($info) {
   	   	   $this->result(0, '操作成功',$list);
   	   }else{
           $this->result(1, '操作失败');
   	   } 
   }elseif($_GPC['op'] == 'userinfo'){
   	   $info = pdo_get('zofui_sitetemp_userinfo',array('uniacid'=>$_W['uniacid'],'id'=>$_GPC['id']));
		if( !empty( $info ) ) {
			$info['img'] = explode(',', tomedia( $info['img'] )); 
			unset($info['img'][0]);
			$info['img'] = $info['img'][1];
			$info['content'] = htmlspecialchars_decode( $info['content'] );
		}else{
			$this->result(1, '不存在');
		}
		$this->result(0, '',$info);

   }else{
   	   $info = pdo_get('zofui_sitetemp_userinfo', array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
   	   $userinfo = pdo_get('zofui_sitetemp_prosort', array('uniacid'=>$_W['uniacid'],'id'=>$info['prosortid']));
   	   $info['title1']=$userinfo['name'];
   	   
   	   if ($info) {
   	   	   $this->result(0, '操作成功',$info);
   	   }else{
           $this->result(1, '操作失败');
   	   } 
   }



