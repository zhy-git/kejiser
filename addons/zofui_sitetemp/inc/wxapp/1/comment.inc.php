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
				        'phone' => $_GPC['phone'],
				        'content' => $_GPC['content'],
				        'createtime' => time(),
				        'cid' => $_GPC['id'],  
				        'nickname' => $hasuser['nickname'],
                        'headimgurl' => $hasuser['headimgurl'],       
			    	];
			  $result = pdo_insert('zofui_sitetemp_comment', $date);
			  if ($result) {
			    	$this->result(0, '感谢您本次的评论',$date);
			   }else{
			    	$this->result(1, '本次的评论失败');
			   }

	    }else{
	    	$this->result(1, '服务器获取用户失败',$hasuser);
	    }
    	
    }elseif($_GPC['op'] == 'list'){
    	$commentlist = pdo_getall('zofui_sitetemp_comment',array('openid' => $_W['openid'],'uniacid' => $_W['uniacid'],'cid' => $_GPC['id']));
    	foreach ($commentlist as $key => $value) {
    		 $commentlist[$key]['createtime'] = date('Y-m-d',$value['createtime']);
    	}
    	//查询总条数
    	$commentlist['count'] = Util::countDataNumber('zofui_sitetemp_comment',array('openid' => $_W['openid'],'uniacid' => $_W['uniacid'],'cid' => $_GPC['id']));
    	if ($commentlist) {
    		$this->result(0, '操作成功',$commentlist);
    	}else{
			$this->result(1, '操作成功失败');
		}
    }else{
    	$this->result(1, '提交失败');
    }
    

