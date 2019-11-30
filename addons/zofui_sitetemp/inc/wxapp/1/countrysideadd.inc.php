<?php
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;
    

    if ($_GPC['op'] == 'add') {
    	//添加
    	$serdate = [
            'name' => $_GPC['name'],
            'seraddress' => $_GPC['seraddress'],
            'img' => $_GPC['img'],
            'content' => $_GPC['content'],
    	];
    	$this->result(0, '我来添加服务咯',$serdate);
    	
    }else{
        //图片上传
	    load()->func('file');
	    $saveimgurl = file_upload($_FILES['imgfile'], 'image', '');
	    $newimgurl = $_W['attachurl'].$saveimgurl['path'];
		$this->result(0, '处理完图片了',array('img' => $newimgurl));
   }



