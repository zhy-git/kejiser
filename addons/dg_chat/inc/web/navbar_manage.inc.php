<?php
global $_GPC, $_W;
$uniacid = $_W['uniacid'];
$op= empty($_GPC['op'])?'display': $_GPC['op'];
$id = intval($_GET['id']);
$url=$this->createWebUrl("navbar_manage");
if($op=='display'){
	$list = pdo_fetchall('select * from '.tablename('chat_navbar').'where uniacid=:uniacid order by seq desc',array(':uniacid'=>$uniacid));
	$total = count($list);

}else if($op=='del'){
	pdo_delete('chat_navbar',array('uniacid'=>$uniacid,'id'=>$id));
	message('操作成功！',$url,'success');
}else if($op='edit'){
	$navba = pdo_fetch('select * from '.tablename('chat_navbar').'where uniacid=:uniacid and id=:id',array(':uniacid'=>$uniacid,':id'=>$id));
}
if(checksubmit('submit')){
	empty($_GPC['title']) && message('请填写导航标题');

	$data = array(
		'title'=>$_GPC['title'],
		'uniacid'=>$uniacid,
		'url_type'=>$_GPC['url_type'],
		'seq'=>$_GPC['seq'],
		'icontype'=>$_GPC['icontype'],
		'time'=>date("Y-m-d H:i:s",time())
		);
	if($_GPC['url_type'] == 1){
		$data['url'] = $_GPC['url'];
	}else{
		$data['id_page'] = $_GPC['id_page'];
	}
	if($_GPC['icontype'] == 1){
		$data['inco'] = $_GPC['icon'];
		$data['color'] = $_GPC['color'];
	}else{
		$data['inco'] = tomedia($_GPC['iconfile']);
		$data['color'] = '';
	}
	if(!empty($_GPC['edit_id'])){
		pdo_update('chat_navbar',$data,array('id'=>$_GPC['edit_id']));
	}else{
		pdo_insert('chat_navbar',$data);
	}
	
	
	message('保存信息成功',$url,'success');
}
include $this->template('navbar_manage');
?>