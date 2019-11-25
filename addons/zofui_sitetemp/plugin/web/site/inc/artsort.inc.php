<?php 
	global $_W,$_GPC;
	$op = isset($_GPC['op'])?$_GPC['op']:'list';
	
	
	//添加，编辑
	if(checksubmit('create')){
		$_GPC = Util::trimWithArray($_GPC);
		
		$data['img'] = $_GPC['img'];
		$data['number'] = $_GPC['number'];
		$data['uniacid'] = $_W['uniacid'];
		$data['name'] = $_GPC['name'];

		if(!empty($_GPC['id'])){
			$id = intval($_GPC['id']);
			$res = pdo_update('zofui_sitetemp_artsort',$data,array('uniacid'=>$_W['uniacid'],'id'=>$id));	
		}else{
			$res = Util::inserData('zofui_sitetemp_artsort',$data);
		}
		Util::deleteCache('guysort','all');
		if($res) itoast('操作成功','','success');
	}
	
	
	//批量删除
	if(checksubmit('deleteall')){
		$res = WebCommon::deleteDataInWeb($_GPC['checkall'],'zofui_sitetemp_artsort');
		itoast('操作完成,成功删除'.$res[0].'项，失败'.$res[1].'项','','success');
	}
	
	
	if($op == 'list'){	
		$info = Util::getAllDataInSingleTable('zofui_sitetemp_artsort',array('uniacid'=>$_W['uniacid']),1,999,' `number` DESC ');
		$list = $info[0];
		//$list = $list[0];
	    $list = Util::artsort($list);
	    //var_dump($list);die();

		$pager = $info[1];
	}
	
	if($op == 'edit'){
		$id = intval($_GPC['id']);
		$info = pdo_get('zofui_sitetemp_artsort',array('uniacid'=>$_W['uniacid'],'id'=>$id));

	}
	
	if($op == 'delete'){
		$res = WebCommon::deleteSingleData($_GPC['id'],'zofui_sitetemp_artsort');
		if($res) itoast('删除成功','','success');
	}

	//获取所有分类的类目
	$artinfo = Util::getAllDataInSingleTable('zofui_sitetemp_artsort',array('uniacid'=>$_W['uniacid']),1,999,' `number` DESC ');
    $artinfo = $artinfo[0];
	$artinfo = Util::artsort($artinfo);

	include $this->pTemplate('artsort');