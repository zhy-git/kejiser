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
		Util::deleteCache('video_info',$id);
		itoast('操作成功',self::pwUrl('site','video',array('op'=>'list','page'=>$_GPC['page'])),'success');
	}
	
	
	//批量删除
	if(checksubmit('deleteall')){
		$res = WebCommon::deleteDataInWeb($_GPC['checkall'],'zofui_sitetemp_video');
		itoast('操作完成,成功删除'.$res[0].'项，失败'.$res[1].'项','','success');
	}
	
	$artsort = model_artsort::getSort();
	
	if($_GPC['op'] == 'list'){	
		$info = Util::getAllDataInSingleTable('zofui_sitetemp_video',array('uniacid'=>$_W['uniacid']),$_GPC['page'],10,' `number` DESC ',true,true);
		$list = $info[0];
		$pager = $info[1];
	}
	
	if($_GPC['op'] == 'edit'){
	//拼装奖项数组 
    // 奖项id，奖品，概率
    // $prize_arr = array(  
    //  '0' => array('id'=>1,'prize'=>'平板电脑','v'=>0),  
    //  '1' => array('id'=>2,'prize'=>'数码相机','v'=>0),  
    //  '2' => array('id'=>3,'prize'=>'音箱设备','v'=>0),  
    //  '3' => array('id'=>4,'prize'=>'4G优盘','v'=>1),  
    //  '4' => array('id'=>5,'prize'=>'10Q币','v'=>0),  
    //  '5' => array('id'=>6,'prize'=>'空奖','v'=>5),  
    // );  
    // foreach ($prize_arr as $key => $val) {  
    //  $arr[$val['id']] = $val['v'];//概率数组 v 
    //  var_dump($arr[$val['id']]);

    // }  
    // var_dump('<br>');
    // $rid = Util::get_rand($arr); //根据概率获取奖项id  
    // $res['yes'] = $prize_arr[$rid-1]['prize']; //中奖项
    // var_dump($rid);
    // var_dump($res); 
    // unset($prize_arr[$rid-1]); //将中奖项从数组中剔除，剩下未中奖项
    // shuffle($prize_arr); //打乱数组顺序
    // for($i=0;$i<count($prize_arr);$i++){  
    //  $pr[] = $prize_arr[$i]['prize']; //未中奖项数组 
    // }
    //  $res['no'] = $pr;
    //  if($res['yes']!='空奖'){ 
    //   $result['status']=1; 
    //   $result['name']=$res['yes']; 
    // }else{ 
    //   $result['status']=-1; 
    //   $result['msg']=$res['yes']; 
    // }
    // var_dump($result);
    // die();
		$info = Util::getCache('video_info',$id);
		if (empty($info)) {
			$id = intval($_GPC['id']);
			$info = pdo_get('zofui_sitetemp_video',array('uniacid'=>$_W['uniacid'],'id'=>$id));
			$code = Util::setCache('video_info',$id,$info);
		}

	}
	
	if($_GPC['op'] == 'delete'){
		$res = WebCommon::deleteSingleData($_GPC['id'],'zofui_sitetemp_video');
		if($res) itoast('删除成功',self::pwUrl('site','video',array('op'=>'list','page'=>$_GPC['page'])),'success');
		
	}
	
	include $this->pTemplate('video');