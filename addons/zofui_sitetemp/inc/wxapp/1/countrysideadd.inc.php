<?php
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;

    load()->func('file');
    $saveimgurl = file_upload($_FILES['imgfile'], 'image', '');
    $data = $_GPC['user'];

	$this->result(0, '处理完图片了',$data);


