<?php

//decode by http://www.yunlu99.com/
global $_GPC, $_W;
$uniacid = $_W['uniacid'];
$user_info = $this->getUserInfo();
$uid = $user_info->uid;
$head_imgurl = str_replace("/46", "/132", $user_info->headimgurl);
$pindex = max(1, intval($_GPC['pindex']));
$psize = 6;
$total = pdo_fetchcolumn("SELECT COUNT(0) FROM " . tablename("chat_users") . " WHERE is_openask=1");
$pages = ceil($total / $psize);
if ($pindex > $pages && $pages > 0) {
	$pindex = $pages;
}
$records = pdo_fetchall("SELECT * FROM " . tablename("chat_users") . " WHERE is_openask=1 ORDER BY is_recommend DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
if (!empty($_GPC['pindex'])) {
	header('content-type:application/json;charset=utf8');
	$result['pindex'] = $pindex;
	$result['pages'] = $pages;
	$result['list'] = $records;
	echo json_encode($result);
	exit;
}