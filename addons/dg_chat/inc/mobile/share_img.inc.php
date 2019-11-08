<?php
global $_GPC,$_W;
define('SRC',$_W['siteroot']);

// $user_info=$this->getUserInfo();

$ticketurl = $_W['siteroot'].'app/index.php?i=1&c=entry&eid=' . $_GPC['id'];
$error_correction_level = "L";
$matrix_point_size = "8";

header("content-type: image/png");

QRcode::png(urldecode($ticketurl), false, $error_correction_level, $matrix_point_size, 2);

exit;

