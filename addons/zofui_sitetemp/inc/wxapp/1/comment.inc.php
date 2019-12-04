<?php 
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;

    if ($_GPC['op'] == 'add') {

    	$hasuser = pdo_get('zofui_sitetemp_reguser',array('openid' => $_W['openid'],'uniacid' => $_W['uniacid'] ));
        if ($hasuser) {
		    $date = [
				        'uniacid' => $_W['uniacid'],
				        'openid' => $_W['openid'],
				        'name' => $_GPC['name'],
				        'phone' => $_GPC['seraddress'],
				        'content' => $_GPC['content'],
				        'createtime' => time(),
				        'cid' => $_GPC['id'],  
				        'nickname' => $hasuser['nickName'],
                        'headimgurl' => $hasuser['avatarUrl'],       
			    	];
			  $result = pdo_insert('zofui_sitetemp_comment', $date);
			  if ($result) {
			    	$this->result(0, '感谢您本次的评论',$result);
			   }else{
			    	$this->result(1, '本次的评论失败');
			   }

	    }else{
	    	$this->result(1, '服务器获取用户失败',$hasuser);
	    }
    	
    }else{
    	$this->result(1, '提交失败');
    }
    

