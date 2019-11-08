<?php
global $_GPC, $_W;
$uniacid = $_W['uniacid'];
$op= empty($_GPC['op'])?'display': $_GPC['op'];
$id = intval($_GET['id']);

$url=$this->createWebUrl("foot_manage");
if($op=='display'){
	$list = pdo_fetchcolumn('select count(0) from '.tablename('chat_foot_menu').'where uniacid=:uniacid ',array(':uniacid'=>$uniacid));
	//初次初始化
	if(empty($list)){
		pdo_query('insert into '.tablename('chat_foot_menu')." values ('',{$uniacid},'推荐',".time().",2,'".$_W['siteroot'].'/addons/dg_chat/resource/img/tuijian.png'."','#f19937','1'),('',{$uniacid},'发现',".time().",2,'".$_W['siteroot'].'/addons/dg_chat/resource/img/fanxian.png'."','#f19937','2'),('',{$uniacid},'我的',".time().",2,'".$_W['siteroot'].'/addons/dg_chat/resource/img/my.png'."','#f19937','3')");
	}
	// else{
	// 	//使其变至最新的状态，初始化
	// 	$list = pdo_fetch("select * from ".tablename("chat_foot_menu")." where uniacid=:uniacid and seq=1 ",array(":uniacid"=>$uniacid));

	// 	if(empty($list['url_type'])){
	// 		$seq_array = array('1','2','3');
	// 		pdo_delete("chat_foot_menu",array("uniacid"=>$uniacid,'seq'=>$seq_array));
	// 		pdo_query('insert into '.tablename('chat_foot_menu')." values ('',{$uniacid},'推荐',".time().",2,'".$_W['siteroot'].'/addons/dg_chat/resource/img/tuijian.png'."','#f19937','1','','1','2','1'),('',{$uniacid},'发现',".time().",2,'".$_W['siteroot'].'/addons/dg_chat/resource/img/fanxian.png'."','#f19937','2','','2','2','2'),('',{$uniacid},'我的',".time().",2,'".$_W['siteroot'].'/addons/dg_chat/resource/img/my.png'."','#f19937','3','','3','2','3')");
	// 	}
	// }
	$list = pdo_fetchall('select * from '.tablename('chat_foot_menu').'where uniacid=:uniacid order by id asc',array(':uniacid'=>$uniacid));


}else if($op=='del'){
	pdo_delete('chat_foot_menu',array('uniacid'=>$uniacid,'id'=>$id));
	message('操作成功！',$url,'success');
}else if($op='edit'){
	$navba = pdo_fetch('select * from '.tablename('chat_foot_menu').'where uniacid=:uniacid and id=:id',array(':uniacid'=>$uniacid,':id'=>$id));
}
if(checksubmit('submit')){
	empty($_GPC['title']) && message('请填写导航标题');
	$_GPC['icontype'] =1;
	$data = array(
		'title'=>$_GPC['title'],
		'uniacid'=>$uniacid,
		'icontype'=>$_GPC['icontype'],
		'displayorder'=>$_GPC['displayorder'],
		'url_type'=>$_GPC['url_type'],
		'time'=>time()
		);

	if($_GPC['url_type'] == 1){
		$data['link'] = $_GPC['link'];
	}else{
		$data['id_page'] = $_GPC['id_page'];
		$data['seq'] = $_GPC['id_page'];
	}

	if($_GPC['icontype'] == 1){
		$data['inco'] = $_GPC['icon'];
		$data['color'] = $_GPC['color'];
	}else{
		$data['inco'] = tomedia($_GPC['iconfile']);
		$data['color'] = '';
	}
	if(!empty($_GPC['edit_id'])){
		pdo_update('chat_foot_menu',$data,array('id'=>$_GPC['edit_id']));
	}else{
		pdo_insert('chat_foot_menu',$data);
		
	}
	
	
	message('保存信息成功',$url,'success');
}
include $this->template('foot_manage');
?>