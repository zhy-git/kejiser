<?php
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;
    

    if ($_GPC['op'] == 'add') {
    	//添加
    	//判断时间 是否已经签到了
		$getaddress = Util::getNew('zofui_sitetemp_address',array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
		$getdate = date( "Y-m-d",$getaddress['createtime']); 
		if(date("Y-m-d",time()) == $getdate) {
			//已签到
			$serdate = [
	            'name' => $_GPC['name'],
	            'seraddress' => $_GPC['seraddress'],
	            'img' => $_GPC['img'],
	            'content' => $_GPC['content'],
	            'createtime' => time(),
	            'aid' => $getaddress['id'],
	            'uniacid' => $_W['uniacid'],
	    	];
	    	$result = pdo_insert('zofui_sitetemp_countryside',$serdate);
	    	if ($result) {
	    		$this->result(0, '操作成功',$serdate);
	    	}else{
	    		$this->result(0, '操作失败');
	    	}
	    	
			
		}elseif (empty($getaddress) || date("Y-m-d",time()) > $getdate) {
			//还没签到
		    $this->result(0, '操作成功','您还没签到，请先签到。'); 
		}
    	
    	
    }else{
        //图片上传
	    load()->func('file');
	    $saveimgurl = file_upload($_FILES['imgfile'], 'image', '');
	    $newimgurl = array();
	    $newimgurl = $_W['attachurl'].$saveimgurl['path'];
	

		$this->result(0, '处理完图片了',array('img' => $newimgurl));
   }



