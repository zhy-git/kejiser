<?php

//decode by http://www.yunlu99.com/
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid = $_W['uniacid'];
if (!empty($_GPC['id'])) {
	header('content-type:application/json;charset=utf8');
	$user_id = intval($_GPC['id']);
	$op = $_GPC['op'];
	$ask_user = pdo_fetch("SELECT is_openask,is_recommend FROM " . tablename("chat_users") . " WHERE id=:id", array(":id" => $user_id));
	if ($op == 'recommend') {
		$is_recommend = $ask_user['is_recommend'];
		if ($is_recommend == "0") {
			$is_recommend = 1;
		} else {
			$is_recommend = 0;
		}
		pdo_update("chat_users", array('is_recommend' => $is_recommend), array("id" => $user_id));
		$fmdata = array("success" => 1, "data" => $is_recommend);
		echo json_encode($fmdata);
		exit;
	}
	$is_openask = -1;
	if ($op == 'shut') {
		$is_openask = 0;
	}
	if (!empty($ask_user)) {
		if ($ask_user['is_openask'] == -1 && $op == 'no') {
			$is_openask = 0;
		}
		if ($ask_user['is_openask'] == 0 && $op == 'shut') {
			$is_openask = 1;
		}
		pdo_update("chat_users", array('is_openask' => $is_openask), array("id" => $user_id));
	}
	$fmdata = array("success" => 1, "data" => $is_openask);
	echo json_encode($fmdata);
	exit;
}
$tempcondition = " WHERE uniacid = '{$_W['uniacid']}'";
$keyword = $_GPC['keyword'];
$is_openask = $_GPC['is_openask'];
$tempArray = array();
if (!empty($keyword)) {
	$tempcondition = $tempcondition . " AND (A1.nickname LIKE '%{$keyword}%' OR A1.real_name LIKE '%{$keyword}%' OR A1.user_title LIKE '%{$keyword}%')";
}
$need_array = array('-1', '0', '1');
if ($is_openask != '' && in_array($is_openask, $need_array)) {
	$tempcondition = $tempcondition . " AND is_openask=:is_openask";
	$tempArray[':is_openask'] = $is_openask;
}
$pindex = max(1, intval($_GPC['page']));
$psize = 10;
$records = pdo_fetchall("SELECT * FROM " . tablename("chat_users") . " A1 " . $tempcondition . " ORDER BY A1.id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize, $tempArray);
foreach ($records as &$temp_record) {
	if ($temp_record['is_openask'] == 0) {
		$temp_record['is_openask'] = "未开启";
	} else {
		if ($temp_record['is_openask'] == 1) {
			$temp_record['is_openask'] = "已开启";
		} else {
			$temp_record['is_openask'] = "被禁用";
		}
	}
}
$total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename("chat_users") . " A1 " . $tempcondition, $tempArray);
$pager = pagination($total, $pindex, $psize);
include $this->template('ask_manage');