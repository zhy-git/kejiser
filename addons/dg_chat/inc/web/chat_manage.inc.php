<?php

//decode by http://www.yunlu99.com/
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid = $_W['uniacid'];
function getNoticeData($record)
{
	$post_data = array('first' => array('value' => "您创建的 『" . $record['room_name'] . "』 直播间审核通过啦！", "color" => "#4a5077"), 'keyword1' => array('value' => "审核通过", "color" => "#4a5077"), 'keyword2' => array('value' => date('Y/m/d H:i:s', time()), "color" => "#4a5077"), 'remark' => array('value' => "\r\n点击查看详情！", "color" => "#f19937"));
	return $post_data;
}
if (!empty($_GPC['room_id'])) {
	$room_id = intval($_GPC['room_id']);
	$room = pdo_fetch("SELECT * FROM " . tablename("chat_room") . " WHERE id=:id", array(":id" => $room_id));
	header('content-type:application/json;charset=utf8');
	if ($_GPC['op'] == "edit") {
		$data = array();
		$data['room_name'] = $_GPC['room_name'];
		$data['room_desc'] = $_GPC['room_desc'];
		$data['room_order'] = $_GPC['room_order'];
		$data['room_status'] = $_GPC['room_status'];
		pdo_update("chat_room", $data, array(id => $room_id));
		$result = array("success" => 1, "data" => "修改成功");
		if ($data['room_status'] == 1 && $room['room_status'] == 0) {
			$cfg = $this->module['config'];
			$temp_id = $cfg['temp_pass'];
			$treasure = $cfg['treasure'];
			if (!empty($temp_id)) {
				$Account = WeAccount::create($_W['uniacid']);
				$temp_url = $this->createMobileUrl('chat_index', array("room_id" => $room['room_id']));
				$temp_url = substr($temp_url, 1);
				$url = $_W['siteroot'] . "app" . $temp_url;
				$postdata = getNoticeData($room);
				$Account->sendTplNotice($room['create_openid'], $temp_id, $postdata, $url, "#FF683F");
			}
		}
		echo json_encode($result);
		exit;
	} else {
		if ($_GPC['op'] == "top") {
			$is_top = $room['is_top'] == 1 ? 0 : 1;
			$data = array();
			$data['is_top'] = $is_top;
			pdo_update("chat_room", $data, array(id => $room_id));
			$result = array("success" => 1, "top" => $is_top, "data" => "修改成功");
			echo json_encode($result);
			exit;
		} else {
			if ($_GPC['op'] == "del") {
				$data = array('is_del' => 1);
				pdo_update('chat_room', $data, array('id' => $room_id));
				pdo_update("chat_topic", $data, array("room_id" => $room['room_id']));
				$result = array("success" => 1, "data" => "删除成功");
				echo json_encode($result);
				exit;
			}
		}
	}
}
$tempcondition = " WHERE uniacid = '{$_W['uniacid']}' AND A1.is_del is null and A1.series_id is null";
$keyword = $_GPC['keyword'];
$room_status = $_GPC['room_status'];
$tempArray = array();
if (!empty($keyword)) {
	$tempcondition = $tempcondition . " AND (A1.room_name LIKE '%{$keyword}%' OR A1.create_nickname LIKE '%{$keyword}%' OR A1.room_desc LIKE '%{$keyword}%')";
}
$need_array = array('-1', '1', '0');
if ($room_status != '' && in_array($room_status, $need_array)) {
	$tempcondition = $tempcondition . " AND room_status=:room_status";
	$tempArray[':room_status'] = $room_status;
}
if (!empty($_GPC['id'])) {
	$room_id = intval($_GPC['id']);
	$tempcondition = $tempcondition . " AND A1.id=:id";
	$tempArray[':id'] = $room_id;
}
if (!empty($_GPC['type'])) {
	if ($_GPC['type'] == '-1') {
		$tempcondition = $tempcondition . " AND (A1.room_money!=0 or A1.room_money!=' ')";
	} else {
		$tempcondition = $tempcondition . " AND (A1.room_money = 0 or A1.room_money=' ')";
	}
}
$pindex = max(1, intval($_GPC['page']));
if (!empty($_GPC['id'])) {
	$pindex = 1;
}
$psize = 10;
$records = pdo_fetchall("SELECT * FROM " . tablename("chat_room") . " A1 " . $tempcondition . " ORDER BY A1.id DESC,is_top DESC,room_order DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize, $tempArray);
if (!empty($_GPC['id'])) {
	header('content-type:application/json;charset=utf8');
	$result = array("success" => 1, "data" => $records);
	echo json_encode($result);
	exit;
}
$total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename("chat_room") . " A1 " . $tempcondition, $tempArray);
$pager = pagination($total, $pindex, $psize);
include $this->template('chat_manage');