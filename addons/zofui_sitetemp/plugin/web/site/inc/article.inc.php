<?php 
	global $_W,$_GPC;
	$_GPC['op'] = isset($_GPC['op'])?$_GPC['op']:'list';
	
	//二维数组转化为字符串，中间用,隔开    
    function toString($arr){    
        foreach ($arr as $value){    
            
            $value = join(",",$value);   
            
            $temp[] = $value;    
        }    
        foreach($temp as $v){    
            
            $str.=$v.",";    
        }    
        $str = substr($str,0,-1);  //利用字符串截取函数消除最后一个逗号    
        return $str; 
    } 

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
		$data['sortid'] = $_GPC['sortid'];
		$data['type'] = $_GPC['type'];
		$data['url'] = $_GPC['url'];

		if(!empty($_GPC['id'])){
			$id = intval($_GPC['id']);
			$res = pdo_update('zofui_sitetemp_article',$data,array('uniacid'=>$_W['uniacid'],'id'=>$id));	
		}else{
			$res = Util::inserData('zofui_sitetemp_article',$data);
			$id = pdo_insertid();
		}
		Util::deleteCache('article',$id);
		itoast('操作成功',self::pwUrl('site','article',array('op'=>'list','page'=>$_GPC['page'])),'success');
	}
	
	
	//批量删除
	if(checksubmit('deleteall')){
		$res = WebCommon::deleteDataInWeb($_GPC['checkall'],'zofui_sitetemp_article');
		itoast('操作完成,成功删除'.$res[0].'项，失败'.$res[1].'项','','success');
	}
	
	$artsort = model_artsort::getSort();
	
	if($_GPC['op'] == 'list'){	
        if (!empty($_GPC['artsortid'])) {
	        $sortid = pdo_getall('zofui_sitetemp_artsort',array('artid' => $_GPC['artsortid']),array('id'));
	        if ($sortid) {
	          	$artsortid = toString($sortid);
	          }else{
	            $artsortid = $_GPC['artsortid'];
	        }
	        $info = Util::getAllDataInSingleTable('zofui_sitetemp_article',array('uniacid'=>$_W['uniacid']),$_GPC['page'],15,' `id` DESC ',true,true,$select = '*',$str='and sortid IN('.$artsortid.')');
        }else{
          $info = Util::getAllDataInSingleTable('zofui_sitetemp_article',array('uniacid'=>$_W['uniacid']),$_GPC['page'],15,' `number` DESC ',true);
        }
		
		$list = $info[0];
		$pager = $info[1];
	}
	
	if($_GPC['op'] == 'edit'){
		$id = intval($_GPC['id']);
		$info = pdo_get('zofui_sitetemp_article',array('uniacid'=>$_W['uniacid'],'id'=>$id));

	}
	
	if($_GPC['op'] == 'delete'){
		$res = WebCommon::deleteSingleData($_GPC['id'],'zofui_sitetemp_article');
		if($res) itoast('删除成功','','success');
		
	}
	//获取所有分类的类目
	$artinfo = Util::getAllDataInSingleTable('zofui_sitetemp_artsort',array('uniacid'=>$_W['uniacid']),1,999,' `number` DESC ',true);
    $artinfo = $artinfo[0];
	$artinfo = Util::artsort($artinfo);
	
	
	include $this->pTemplate('article');