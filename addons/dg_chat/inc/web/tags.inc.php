<?php

//decode by http://www.yunlu99.com/
global $_GPC, $_W;
checklogin();
$uniacid = $_W['uniacid'];
load()->func('tpl');
load()->func('logging');
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
if ($operation == 'display') {
//	$list = pdo_fetchall("SELECT * FROM " . tablename($this->table_tags) . " WHERE uniacid = '{$uniacid}' ORDER BY displayorder DESC");
    $list = pdo_fetchall("SELECT * FROM " . tablename($this->table_tags) . " WHERE uniacid = '{$uniacid}' AND parentid!=0 ORDER BY displayorder DESC");
} elseif ($operation == 'post') {
	$id = intval($_GPC['id']);
	if (checksubmit('submit')) {
		$data = array('uniacid' => $uniacid, 'tag_name' => $_GPC['tag_name'], 'enabled' => intval($_GPC['enabled']), 'displayorder' => intval($_GPC['displayorder']), 'create_time' => time(), 'thumb' => $_GPC['thumb'], 'parentid' => $_GPC['parentid']);
		if (!empty($id)) {
			pdo_update($this->table_tags, $data, array('id' => $id));
		} else {
			pdo_insert($this->table_tags, $data);
			$id = pdo_insertid();
		}
		message('更新标签成功！', $this->createWebUrl('tags', array('op' => 'display')), 'success');
	}

    $lists = pdo_fetchall("SELECT id,tag_name,parentid FROM " . tablename($this->table_tags) . " WHERE uniacid = '{$uniacid}' AND parentid=0 ORDER BY displayorder DESC");
	$banner = pdo_fetch("select * from " . tablename($this->table_tags) . " where id=:id and uniacid=:uniacid limit 1", array(":id" => $id, ":uniacid" => $uniacid));
} elseif ($operation == 'delete') {
	$id = intval($_GPC['id']);
	$banner = pdo_fetch("SELECT id  FROM " . tablename($this->table_tags) . " WHERE id = '$id' AND uniacid=" . $uniacid);
	if (empty($banner)) {
		message('抱歉，标签不存在或是已经被删除！', $this->createWebUrl('tags', array('op' => 'display')), 'error');
	}
	pdo_delete($this->table_tags, array('id' => $id));
	message('标签删除成功！', $this->createWebUrl('tags', array('op' => 'display')), 'success');
} else {
	message('请求方式不存在');
}
include $this->template('tags');