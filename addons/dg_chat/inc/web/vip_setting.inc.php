<?php

//decode by http://www.yunlu99.com/
global $_GPC, $_W;
checklogin();
$uniacid = $_W['uniacid'];
$this->table_tags = 'chat_vipsetting';
load()->func('tpl');
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
if ($operation == 'display') {
	$list = pdo_fetchall("SELECT * FROM " . tablename($this->table_tags) . " WHERE uniacid = '{$uniacid}'  ORDER BY create_time DESC");
} elseif ($operation == 'post') {
	$id = intval($_GPC['id']);
	if (checksubmit('submit')) {
		$data = array(
			'uniacid' => $uniacid, 
			'title' => $_GPC['title'], 
			'enabled' => intval($_GPC['enabled']), 
			'money' => $_GPC['money'], 
			'day'=>intval($_GPC['day']),
			'type'=>0
		);
		if($_GPC['day'] == -1){
			$data['type'] =1;
		}
		if (!empty($id)) {
			pdo_update($this->table_tags, $data, array('id' => $id));
		} else {
			$data['create_time'] = time();
			pdo_insert($this->table_tags, $data);
			$id = pdo_insertid();
		}
		message('更新设置成功！', $this->createWebUrl('vip_setting', array('op' => 'display')), 'success');
	}
	$banner = pdo_fetch("select * from " . tablename($this->table_tags) . " where id=:id and uniacid=:uniacid limit 1", array(":id" => $id, ":uniacid" => $uniacid));
} elseif ($operation == 'delete') {
	$id = intval($_GPC['id']);
	$banner = pdo_fetch("SELECT id  FROM " . tablename($this->table_tags) . " WHERE id = '$id' AND uniacid=" . $uniacid);
	if (empty($banner)) {
		message('抱歉,此设置不存在或是已经被删除！', $this->createWebUrl('vip_setting', array('op' => 'display')), 'error');
	}
	pdo_delete($this->table_tags, array('id' => $id));
	message('删除成功！', $this->createWebUrl('vip_setting', array('op' => 'display')), 'success');
} else {
	message('请求方式不存在');
}
include $this->template('vip_setting');