<?php

//decode by http://www.yunlu99.com/
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid = $_W['uniacid'];
if (!empty($_GPC['topic_id'])) {
	$topic_id = intval($_GPC['topic_id']);
	$topic = pdo_fetch("SELECT * FROM " . tablename("chat_topic") . " WHERE id=:id", array(":id" => $topic_id));
	header('content-type:application/json;charset=utf8');
	if ($_GPC['op'] == "edit") {
		$data = array();
		$data['topic_name'] = $_GPC['topic_name'];
		$data['x_look_numbers'] = $_GPC['x_look_numbers'];
		$data['topic_desc'] = $_GPC['topic_desc'];
		$data['topic_status'] = $_GPC['topic_status'];
		$data['is_opendm'] = $_GPC['is_opendm'];
		if ($data['topic_status'] == 2 && $topic['end_time'] == 0) {
			$data['end_time'] = time();
		}
		pdo_update("chat_topic", $data, array(id => $topic_id));
		$result = array("success" => 1, "data" => "修改成功");
		echo json_encode($result);
		exit;
	} else {
		if ($_GPC['op'] == "fine") {
			$fine = $topic['gl_fine'];
			$fine = $fine == 1 ? 0 : 1;
			$data['gl_fine'] = $fine;
			pdo_update("chat_topic", $data, array(id => $topic_id));
			$result = array("success" => 1, "fine" => $fine, "data" => "修改成功");
			echo json_encode($result);
			exit;
		} else {
			if ($_GPC['op'] == "index") {
				$is_index = empty($topic['is_index']) ? 0 : $topic['is_index'];
				$is_index = $is_index == 1 ? 0 : 1;
				$data['is_index'] = $is_index;
				pdo_update("chat_topic", $data, array(id => $topic_id));
				$result = array("success" => 1, "is_index" => $is_index, "data" => "修改成功");
				echo json_encode($result);
				exit;
			} else {
				if ($_GPC['op'] == "index_all") {
					$data['is_index'] = 1;
					pdo_update("chat_topic", $data);
					$result = array("success" => 1, "data" => "修改成功");
					echo json_encode($result);
					exit;
				} else {
					if ($_GPC['op'] == "del") {
						pdo_delete("chat_topic", array(id => $topic_id));
						$result = array("success" => 1, "data" => "删除成功");
						echo json_encode($result);
						exit;
					}
				}
			}
		}
	}
}
$tempcondition = " WHERE A1.uniacid = '{$_W['uniacid']}' AND A1.is_del is null and A1.series_id is null";
$keyword = $_GPC['keyword'];
$topic_status = $_GPC['topic_status'];
$topic_ppt = $_GPC['topic_ppt'];
if (!empty($keyword)) {
	$tempcondition = $tempcondition . " AND (A1.topic_name LIKE '%{$keyword}%' OR A2.room_name LIKE '%{$keyword}%' OR A2.create_nickname LIKE '%{$keyword}%')";
}
$need_array = array('-1', '1', '2');
if ($topic_status != '' && in_array($topic_status, $need_array)) {
	$tempcondition = $tempcondition . " AND topic_status=:topic_status";
	$tempArray[':topic_status'] = $topic_status;
}
$room_id = $_GPC['room_id'];
if (!empty($room_id)) {
	$tempcondition = $tempcondition . " AND A1.room_id=:room_id";
	$tempArray[':room_id'] = $room_id;
}
$pindex = max(1, intval($_GPC['page']));
$psize = 10;
if (!empty($_GPC['id'])) {
	$topic_id = intval($_GPC['id']);
	$tempcondition = $tempcondition . " AND A1.id=:id";
	$tempArray[':id'] = $topic_id;
	$pindex = 1;
}
$need_array = array('0', '1');
if ($topic_ppt != '' && $topic_ppt == 1) {
	$records = pdo_fetchall(" select A1.*,A2.room_name,A2.create_nickname from(
	select *,(select count(1) from " . tablename("chat_ppt") . " p where p.topic_id=t.id) as pnum from " . tablename("chat_topic") . " as t 
	) A1 INNER JOIN " . tablename("chat_room") . " A2 ON A1.room_id=A2.room_id   " . $tempcondition . " and pnum>0 ORDER BY A1.id DESC, gl_order DESC,topic_order DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize, $tempArray);
	$total = pdo_fetchcolumn(" select count(*) from(
	select *,(select count(1) from " . tablename("chat_ppt") . " p where p.topic_id=t.id) as pnum from " . tablename("chat_topic") . " as t 
	) A1 INNER JOIN " . tablename("chat_room") . " A2 ON A1.room_id=A2.room_id   " . $tempcondition . " and pnum>0 ORDER BY A1.id DESC,gl_order DESC,topic_order DESC", $tempArray);
} else {
	if ($topic_ppt == 0 && $topic_ppt != '') {
		$records = pdo_fetchall(" select A1.*,A2.room_name,A2.create_nickname from(
	select *,(select count(1) from " . tablename("chat_ppt") . " p where p.topic_id=t.id) as pnum from " . tablename("chat_topic") . " as t 
	) A1 INNER JOIN " . tablename("chat_room") . " A2 ON A1.room_id=A2.room_id   " . $tempcondition . " and pnum=0 ORDER BY A1.id DESC, gl_order DESC,topic_order DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize, $tempArray);
		$total = pdo_fetchcolumn(" select count(*) from(
	select *,(select count(1) from " . tablename("chat_ppt") . " p where p.topic_id=t.id) as pnum from " . tablename("chat_topic") . " as t 
	) A1 INNER JOIN " . tablename("chat_room") . " A2 ON A1.room_id=A2.room_id   " . $tempcondition . " and pnum=0 ORDER BY A1.id DESC, gl_order DESC,topic_order DESC ", $tempArray);
	} else {
		$records = pdo_fetchall("SELECT A1.*,A2.room_name,A2.create_nickname FROM " . tablename("chat_topic") . " A1 INNER JOIN 
    " . tablename("chat_room") . " A2 ON A1.room_id=A2.room_id  " . $tempcondition . " ORDER BY A1.id DESC,gl_order DESC,topic_order DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize, $tempArray);
		$total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename("chat_topic") . " A1 INNER JOIN 
    " . tablename("chat_room") . " A2 ON A1.room_id=A2.room_id " . $tempcondition, $tempArray);
	}
}
if (!empty($_GPC['id'])) {
	header('content-type:application/json;charset=utf8');
	$result = array("success" => 1, "data" => $records);
	echo json_encode($result);
	exit;
}
$pager = pagination($total, $pindex, $psize);
include $this->template('topic_manage');