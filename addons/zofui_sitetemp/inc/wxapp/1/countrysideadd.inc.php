<?php
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;
    

    if ($_GPC['op'] == 'add') {
    	//添加
        $getcountryside = Util::getNew('zofui_sitetemp_countryside',array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
    	//判断时间 是否已经签到了
		$getaddress = Util::getNew('zofui_sitetemp_address',array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));
		$getdate = date( "Y-m-d",$getaddress['createtime']); 

		if (empty($getaddress) || date("Y-m-d",time()) > $getdate) { 
			//还没签到
		    $this->result(1, '操作成功','您还没签到，请先签到。'); 
		}
           //一天只能下乡一次
  //       elseif ($getaddress['id'] == $getcountryside['aid']) {
		//     $this->result(1, '操作失败','明天再来吧。');
		// }
        //改为一天可下乡无数次
        elseif(date("Y-m-d",time()) == $getdate) {
			//已签到
			$serdate = [
	            'name' => $_GPC['name'],
	            'seraddress' => $_GPC['seraddress'],
	            'img' => $_GPC['img'],
	            'content' => $_GPC['content'],
	            'createtime' => time(),
	            'aid' => $getaddress['id'],
	            'uniacid' => $_W['uniacid'],
	            'openid' => $_W['openid'],
	            'uid' => $_GPC['userinfo_id'],
	            
	    	];
	    	$result = pdo_insert('zofui_sitetemp_countryside',$serdate);
	    	if ($result) {
	    		$this->result(0, '操作成功',$serdate);
	    	}else{
	    		$this->result(1, '操作失败');
	    	}
		}
    	
    	
    }elseif($_GPC['op'] == 'list'){
        if ($_GPC['id']) {
            $getcountryside = pdo_getall('zofui_sitetemp_countryside',array('uniacid'=>$_W['uniacid'],'uid' => $_GPC['id']));
        }else{
            $getcountryside = pdo_getall('zofui_sitetemp_countryside',array('uniacid'=>$_W['uniacid'],'openid'=>$_W['openid']));
        }
    	foreach ($getcountryside as $key => $value) {
    		$getcountryside[$key]['createtime'] = date( "Y-m-d",$value['createtime']);
    		$getcountryside[$key]['img'] = strtok(tomedia($value['img']),',');
    	}
    	if ($getcountryside) {
	    		$this->result(0, '操作成功',$getcountryside);
	    	}else{
	    		$this->result(1, '操作失败');
	    }

    }elseif($_GPC['op'] == 'gerenlist'){
    	$getcountryside = pdo_getall('zofui_sitetemp_countryside',array('uniacid'=>$_W['uniacid'],'openid'=>$_W['openid']));
    	foreach ($getcountryside as $key => $value) {
    		$getcountryside[$key]['createtime'] = date( "Y-m-d",$value['createtime']);
    		$getcountryside[$key]['img'] = strtok(tomedia($value['img']),',');
    	}
    	if ($getcountryside) {
	    		$this->result(0, '操作成功',$getcountryside);
	    	}else{
	    		$this->result(1, '无数据');
	    }
    }elseif($_GPC['op'] == 'details'){
       $info = pdo_get('zofui_sitetemp_countryside', array('uniacid'=>$_W['uniacid'],'id'=>$_GPC['id']));
   	   if ($info) {
   	   	   $this->result(0, '操作成功',$info);
   	   }else{
           $this->result(1, '操作失败');
   	   } 
    }elseif($_GPC['op'] == 'editor'){
    	//编辑
    	$info= [
	            'name' => $_GPC['name'],
	            'seraddress' => $_GPC['seraddress'],
	            'img' => $_GPC['img'],
	            'content' => $_GPC['content'],
	    	];
	   // $this->result(0, '操作成功',$info);
	    	
        $result = pdo_update('zofui_sitetemp_countryside',$info,array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid'],'id'=>$_GPC['id']));
        if ($result) {
        	$this->result(0, '操作成功');
        }else{
        	$this->result(1, '操作失败');
        }
		
    }elseif($_GPC['op'] == 'shoucang'){
     //收藏
     $info = pdo_get('zofui_sitetemp_collection', array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid'],'uid'=>$_GPC['id']));
     if ($info) {
     	 //如果服务器查询到就删除收藏
     	$res = pdo_delete('zofui_sitetemp_collection',array('uid' => $_GPC['id']));
     	if ($res) {
	     		 $this->result(0, '取消收藏',array('isshow'=>'flase'));
	     	}else{
	     		 $this->result(1, '取消收藏失败');
	     	}
     }else{

         //如果服务器查询不到就收藏
	     	$date =[
	     		'openid' => $_W['openid'],
	     		'uniacid' => $_W['uniacid'],
	     		'uid'   => $_GPC['id'],
	     		'createtime' => time(),
	     	];
	     	$res =pdo_insert('zofui_sitetemp_collection',$date);
	     	if ($res) {
	     		$this->result(0, '收藏成功',array('isshow'=>'true'));
	     	}else{
	     		$this->result(1, '收藏失败');
	     	}

     }


    }elseif($_GPC['op'] == 'huoqushoucang'){

        $info = pdo_get('zofui_sitetemp_collection', array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid'],'uid'=>$_GPC['id']));
        if ($info) {
        	$this->result(0, '',array('isshow'=>'true'));
        }else{
        	 $this->result(1, '',array('isshow'=>'flase'));
        }

    }elseif($_GPC['op'] == 'shoucanglist'){
    	//获取收藏列表的uid数组
    $shoucanginfo = pdo_getall('zofui_sitetemp_collection', array('openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']),array('uid'));

    foreach ($shoucanginfo as $key=>$value) {
    	$list1[$key] =  $value['uid'];
    }
    
     $list['list'] = pdo_getall('zofui_sitetemp_userinfo', array('id IN' => $list1));
     foreach ($list['list'] as &$value) {
     	 $value['createtime'] = date('Y-m-d',$value['createtime']);
     	 $value['img'] = strtok(tomedia($value['img']),',');
     }

    	if ($list) {
    		$this->result(0, '操作成功',$list);
    	}else{
    		$this->result(1, '操作失败');
    	}

    }elseif($_GPC['op'] == 'delete'){
        $res = pdo_delete('zofui_sitetemp_countryside',array('uniacid'=>$_W['uniacid'],'id' => $_GPC['id']));
        if ($res) {
            $this->result(0, '操作成功',$res);
        }else{
            $this->result(1, '操作失败',$res);
        }
    }else{
        //图片上传
	    load()->func('file');
	    $saveimgurl = file_upload($_FILES['imgfile'], 'image', '');
	    $newimgurl = $_W['attachurl'].$saveimgurl['path'];
		$this->result(0, '处理完图片了',array('img' => $newimgurl));
   }



