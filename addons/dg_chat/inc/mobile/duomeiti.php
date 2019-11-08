<?php
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
load()->func('tpl');
$redirect_uri="{$_W['siteroot']}app/".$this->createMobileUrl('chat_create');
$user_info=$this->getUserInfo($redirect_uri);

$file=$_FILES['third_url'];

var_dump($file);

var_dump('11111111111111111111111111111111111111111111111111111111111111111111111111111111111')
die();




