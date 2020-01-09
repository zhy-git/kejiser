<?php 
	global $_W,$_GPC;
	$_GPC['op'] = isset($_GPC['op'])?$_GPC['op']:'list';
	
	

	//添加，编辑
	if(checksubmit('create')){
		$_GPC = Util::trimWithArray($_GPC);
		
		$data['number'] = $_GPC['number'];
		$data['uniacid'] = $_W['uniacid'];
		$data['title'] = $_GPC['title'];
		$data['content'] = $_GPC['content'];
		$data['img'] = $_GPC['img'];
		$data['time'] = $_GPC['time'];
		$data['author'] = $_GPC['author'];
		$data['type'] = $_GPC['type'];
		$data['url'] = $_GPC['url'];
        
  //       var_dump('<pre>');
		// var_dump($data);
		// die();

		if(!empty($_GPC['id'])){
			$id = intval($_GPC['id']);
			$res = pdo_update('zofui_sitetemp_video',$data,array('uniacid'=>$_W['uniacid'],'id'=>$id));	
		}else{
			$res = Util::inserData('zofui_sitetemp_video',$data);
			if (empty($res)) {
				echo "<script> alert('添加失败');history.go(-1); </script>";
		    return flase;
			}
			$id = pdo_insertid();
		}
		Util::deleteCache('video',$id);
		itoast('操作成功',self::pwUrl('site','video',array('op'=>'list','page'=>$_GPC['page'])),'success');
	}
	
	
	//批量删除
	if(checksubmit('deleteall')){
		$res = WebCommon::deleteDataInWeb($_GPC['checkall'],'zofui_sitetemp_video');
		itoast('操作完成,成功删除'.$res[0].'项，失败'.$res[1].'项','','success');
	}
	
	$artsort = model_artsort::getSort();
	
	if($_GPC['op'] == 'list'){	
		$info = Util::getAllDataInSingleTable('zofui_sitetemp_video',array('uniacid'=>$_W['uniacid']),$_GPC['page'],10,' `number` DESC ');
		$list = $info[0];
		$pager = $info[1];
	}
	
	if($_GPC['op'] == 'edit'){
		$id = intval($_GPC['id']);
		$info = pdo_get('zofui_sitetemp_video',array('uniacid'=>$_W['uniacid'],'id'=>$id));

	}
	
	if($_GPC['op'] == 'delete'){
		$res = WebCommon::deleteSingleData($_GPC['id'],'zofui_sitetemp_video');
		if($res) itoast('删除成功',self::pwUrl('site','video',array('op'=>'list','page'=>$_GPC['page'])),'success');
		
	}
	
	
	include $this->pTemplate('video');