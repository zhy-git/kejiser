<?php 
	global $_W,$_GPC;
	$_GPC['op'] = isset($_GPC['op'])?$_GPC['op']:'list';
	


	if($_GPC['op'] == 'list'){	
		$info = Util::getAllDataInSingleTable('zofui_sitetemp_reguser',array('uniacid'=>$_W['uniacid']),$_GPC['page'],15,' `id` DESC ');
		$list = $info[0];
		foreach ($list as $key => $value) {
			$list[$key]['userinfolist'] = pdo_get('zofui_sitetemp_userinfo',array('openid'=>$value['openid']));
			//$list[$key]['userinfolist']['img'] = explode(',', $list[$key]['userinfolist']['img']);
			$list[$key]['userinfolist']['img'] = strtok($list[$key]['userinfolist']['img'],',');
			$list[$key]['createtime'] = date('Y-m-d',$value['createtime']);
		}
		$pager = $info[1];
		// 普通会员总数
		$list1['count']['putong_total'] = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('zofui_sitetemp_reguser')." WHERE istrue = :istrue", array(':istrue' => 0));
		// 特派员总数
		$list1['count']['tepaiyuan_total'] = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('zofui_sitetemp_reguser')." WHERE istrue = :istrue", array(':istrue' => 1));
		// 申请特派员总数
		$list1['count']['apply_total'] = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('zofui_sitetemp_reguser')." WHERE istrue = :istrue", array(':istrue' => 2));
		// 总数
		$list1['count']['total'] = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('zofui_sitetemp_reguser'));
	}elseif($_GPC['op'] == 'search'){
        //openid 和 昵称查询
	    $where = array('uniacid'=> $_W['uniacid']);
        $dataa = Util::structWhereStringOfAnd($where,'',false);
        if ($_GPC['istrue'] == 'all') {
        	$str = ' AND nickname LIKE'.'"'.$_GPC['nickname'].'%"'.'AND istrue IN(0,1,2)';
        }else{
        	$str = ' AND nickname LIKE'.'"'.$_GPC['nickname'].'%"'.'AND istrue ='."'".$_GPC['istrue']."'";
        }
		$select = ' * ';
		$commonstr = tablename('zofui_sitetemp_reguser') ." WHERE ".$dataa[0].$str ;
		$countStr = "SELECT COUNT(*) FROM ".$commonstr;
		$selectStr =  "SELECT $select FROM ".$commonstr;
		$info = Util::fetchFunctionInCommon($countStr,$selectStr,$dataa[1],$_GPC['page'],15,' `id` DESC ',true,true,$str,$cachename,$_GPC['istrue']);
        $list = $info[0];
		$pager = $info[1];
		foreach ($list as $key => $value) {
			$list[$key]['userinfolist'] = pdo_get('zofui_sitetemp_userinfo',array('openid'=>$value['openid']));
			$list[$key]['userinfolist']['img'] = strtok($list[$key]['userinfolist']['img'],',');
			$list[$key]['createtime'] = date('Y-m-d',$value['createtime']);
		}
		// 普通会员总数
		$list1['count']['putong_total'] = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('zofui_sitetemp_reguser')." WHERE istrue = :istrue", array(':istrue' => 0));
		// 特派员总数
		$list1['count']['tepaiyuan_total'] = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('zofui_sitetemp_reguser')." WHERE istrue = :istrue", array(':istrue' => 1));
		// 申请特派员总数
		$list1['count']['apply_total'] = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('zofui_sitetemp_reguser')." WHERE istrue = :istrue", array(':istrue' => 2));
		// 总数
		$list1['count']['total'] = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('zofui_sitetemp_reguser'));


		// var_dump('<pre>');
		// var_dump($pager);
		// die();
		// var_dump('</pre>');
	}elseif ($_GPC['op'] == 'edit') {
		$updateistrue = pdo_update('zofui_sitetemp_reguser',array('istrue' => $_GPC['istrue']),array('uniacid'=>$_W['uniacid'],'id'=>$_GPC['id']),'AND');
		if ($updateistrue) {
			itoast('操作成功',self::pwUrl('site','reguser',array('op'=>'search','istrue'=>2,'page'=>$_GPC['page'])),'success');
			// $info = Util::getAllDataInSingleTable('zofui_sitetemp_reguser',array('uniacid'=>$_W['uniacid']),$_GPC['page'],10,' `id` DESC ');
			// $list = $info[0];
			// $pager = $info[1];
		}else{
			 message('更新失败');
		}
		
	}elseif($_GPC['op'] == 'order'){
		// 申请特派员总数
		$applyCount = pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename('zofui_sitetemp_reguser')." WHERE istrue = :istrue", array(':istrue' => 2));
	    message($applyCount);
	}


	include $this->pTemplate('reguser');