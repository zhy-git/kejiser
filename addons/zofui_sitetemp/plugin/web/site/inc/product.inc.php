<?php 
	global $_W,$_GPC;
	$_GPC['op'] = isset($_GPC['op'])?$_GPC['op']:'list';
	
	

	//添加，编辑
	if(checksubmit('create')){


		// var_dump('正在玩命开发中，敬请期待。。。');
		
		
		$_GPC = Util::trimWithArray($_GPC);
		
		$data['number'] = $_GPC['number'];
		$data['uniacid'] = $_W['uniacid'];
		$data['title'] = $_GPC['title'];
		$data['phone'] = $_GPC['phone'];
		$data['content'] = $_GPC['content'];
		$data['img'] = $_GPC['img'];
		$data['sortid'] = $_GPC['sortid'];
		$data['createtime'] = time();
		$data['status'] = 0;
        var_dump('<pre>');
        var_dump($data);
		die();

		if (empty($data['title']) || empty($data['sortid'])) {
		    echo "<script> alert('特派员名称、所属分类必填！');history.go(-1); </script>";
		    return flase;
		}
		if(!empty($_GPC['id'])){
			$id = intval($_GPC['id']);
			$res = pdo_update('zofui_sitetemp_userinfo',$data,array('uniacid'=>$_W['uniacid'],'id'=>$id));	
		}else{
			$res = Util::inserData('zofui_sitetemp_userinfo',$data);
			$id = pdo_insertid();
		}
		Util::deleteCache('product',$id);
		itoast('操作成功',self::pwUrl('site','product',array('op'=>'list','page'=>$_GPC['page'])),'success');
	}
	
	
	//批量删除
	if(checksubmit('deleteall')){
		$res = WebCommon::deleteDataInWeb($_GPC['checkall'],'zofui_sitetemp_product');
		itoast('操作完成,成功删除'.$res[0].'项，失败'.$res[1].'项',self::pwUrl('site','product',array('op'=>'list','page'=>$_GPC['page'])),'success');
	}
	
	$artsort = model_prosort::getSort();
	
	if($_GPC['op'] == 'list'){	
		$info = Util::getAllDataInSingleTable('zofui_sitetemp_userinfo',array('uniacid'=>$_W['uniacid']),$_GPC['page'],10,' `id` DESC ');
		$list = $info[0];


		foreach ($list as $key => $value) {
			$list[$key]['createtime'] = date('Y-m-d H:i:s',$value['createtime']);
			$list[$key]['img'] = strtok($value['img'],',');
			$list[$key]['proname'] = pdo_get('zofui_sitetemp_prosort',array('id'=>$value['prosortid']),array('name'));
		}
		// var_dump('<pre>');
		// var_dump($list);die();

		$pager = $info[1];
	}
	
	if($_GPC['op'] == 'edit'){
		$id = intval($_GPC['id']);
		$info = pdo_get('zofui_sitetemp_userinfo',array('uniacid'=>$_W['uniacid'],'id'=>$id));
		$info['img'] = explode(',', $info['img']);
		 // var_dump('<pre>');
		 // var_dump($info);
	}
	
	if($_GPC['op'] == 'delete'){
		$res = WebCommon::deleteSingleData($_GPC['id'],'zofui_sitetemp_product');
		if($res) itoast('删除成功',self::pwUrl('site','product',array('op'=>'list','page'=>$_GPC['page'])),'success');
		
	}
	
	
	include $this->pTemplate('product');