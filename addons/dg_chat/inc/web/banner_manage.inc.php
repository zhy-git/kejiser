<?php
global $_GPC, $_W;
checklogin();
$uniacid=$_W['uniacid'];


if(!empty($_GPC['keyword'])){
	$keyword=$_GPC['keyword'];
	$condition="uniacid=".$uniacid." AND (topic_name LIKE '%".$keyword."%' OR topic_desc LIKE '%".$keyword."%')";
	$records=pdo_fetchall("SELECT id,room_id,topic_name,topic_icon FROM ".tablename("chat_topic")." WHERE ".$condition." LIMIT 10");
	
	foreach($records as &$t_record){
		$t_record['link']=$this->createMobileUrl('chat',array('topic_id'=>$t_record['id']));
	}
	unset($t_record);
	
	header('content-type:application/json;charset=utf8');	 
	$fmdata = array(
			"success" => 1,
			"data" =>$records,
	);	 
	echo json_encode($fmdata);
	exit;
}

load()->func('tpl');
        $operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
        if ($operation == 'display') {	
            $list = pdo_fetchall("SELECT * FROM " . tablename($this->table_banners) . " WHERE uniacid = '{$uniacid}' ORDER BY displayorder DESC");
        } elseif ($operation == 'post') {

            $id = intval($_GPC['id']);
            if (checksubmit('submit')) {
                $data = array(
                    'uniacid' => $uniacid,
                    'bannername' => $_GPC['bannername'],
                    'link' => $_GPC['link'],
                    'thumb' => $_GPC['thumb'],
                    'enabled' => intval($_GPC['enabled']),
                    'displayorder' => intval($_GPC['displayorder']),
                    'position' => intval($_GPC['position'])
                );
               
                if (!empty($id)) {
                    pdo_update($this->table_banners, $data, array('id' => $id));
					load()->func('file');
					file_delete($_GPC['thumb_old']);
                } else {
                    pdo_insert($this->table_banners, $data);
                    $id = pdo_insertid();
                }
                message('更新幻灯片成功！', $this->createWebUrl('banner_manage', array('op' => 'display')), 'success');
            }
            $banner = pdo_fetch("select * from " . tablename($this->table_banners) . " where id=:id and uniacid=:uniacid limit 1", array(":id" => $id, ":uniacid" => $uniacid));
        } elseif ($operation == 'delete') {
            $id = intval($_GPC['id']);
            $banner = pdo_fetch("SELECT id  FROM " . tablename($this->table_banners) . " WHERE id = '$id' AND uniacid=" . $uniacid);
            if (empty($banner)) {
                message('抱歉，幻灯片不存在或是已经被删除！', $this->createWebUrl('banner_manage', array('op' => 'display')), 'error');
            }
            pdo_delete($this->table_banners, array('id' => $id));
            message('幻灯片删除成功！', $this->createWebUrl('banner_manage', array('op' => 'display')), 'success');
        } else {
            message('请求方式不存在');
        }
include $this->template('banner_manage');
   