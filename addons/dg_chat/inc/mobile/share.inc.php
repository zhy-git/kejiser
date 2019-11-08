<?php
global $_GPC,$_W;
$template_type=$cfg['template_type'];
$uniacid = $_W['uniacid'];
$room_id=$_GPC['room_id'];

define('SRC',$_W['siteroot']);

// $user_info=$this->getUserInfo();

$eid = !empty($_GPC['eid'])?$_GPC['eid']:8;
$share_img = SRC . "app/index.php?i=1&c=entry&do=share_img&m=dg_chat&id=" . $eid;

include $this->template('share');
