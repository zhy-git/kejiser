<?php
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
load()->func('tpl');
$redirect_uri="{$_W['siteroot']}app/".$this->createMobileUrl('chat_create');
$user_info=$this->getUserInfo($redirect_uri);


//多媒体上传视频，音频
if ($_GPC['op']=="duomeiti") {

    $file = my_get_file($_FILES);
    if($file){
        	$fmdata = array(
	   			"success" => 1,
	   			"msg"     => "上传成功！",
	   			"data"    => $file,
	   	);
	     	echo json_encode($fmdata);
	     	exit();
    }else{
    	$fmdata = array(
	   			"success" => 2,
	   			"msg"     => "上传失败！",
	   			"data"    => $file,
	   	);
	     	echo json_encode($fmdata);
	     	exit();
    }




}



/*
 * 上传商品音频文件
 * 文件存储在public/goods/goodsfile/2018/201801/20170105125362.jpg
 *
 */
function my_get_file($arr_files)
{

    // 文件存储目录
    $dir = "./attachment/videofile/" . date("Y") . "/" . date("Ym") . "/";

    // 递归检测是否存在该目录 如果没有则新建
    !file_exists("." . $dir) && mkdir("." . $dir, 0777, true);

    // 循环数据获取到文件路径
    $arrdata = [];
    foreach ($arr_files as $key => $val) {

        //图片上传不能超过30M
        if ($val['size'] > 80 * 1024 * 1024) {
            return ['status' => false, 'msg' => "文件过大"];
        }
        //给文件重命名，尽量不要起中文名字,如下以时间戳+随机数重命名
        $filename = $dir . date("YmdHis") . rand(100000, 999999);

        //获取文件的后缀,pathinfo()会以数组的形式返回一个文件的路径信息，其中extension元素则是文件的后缀名
        $ext = pathinfo($val['name'])['extension'];

        //最终文件名为
        $filename = $filename . '.' . $ext;
        //设置文件上传到服务器后存放的位置,move_uploaded_file()会将文件移动到新位置，第一个参数是要移动的文件，第二个参数是移动到哪里。我在这里是放到和本php文件同一目录下，注意需要将新的文件名连接进去。
        if (move_uploaded_file($val['tmp_name'], '.' . $filename)) {
            $arrdata[$key] = $filename;
        }
    }
    return $arrdata;
}

// 删除文件
function delpath($path){
    return unlink(".".$path);

}






$my_room=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE room_id=:room_id and uniacid=:uniacid AND is_del is null and series_id is null LIMIT 1",array(":room_id"=>$_GPC['room_id'],":uniacid"=>$uniacid));
if(!empty($_GPC['imgid'])){
	unset($topic['topic_imgs'][$_GPC['imgid']]);
}
if($_GPC['op']=="tags"){
	$id=$_GPC['id'];
	$tags=pdo_fetchall("select `id`,`tag_name` from ".tablename('chat_tags')." where pid=:id",array(":id"=>$id));
	$result=array();
	$result['success']=1;
	if(!empty($tags)){
		$result['success']=2;
		$result['tags']=$tags;
	}
	header("Content-type:application/json");
	echo json_encode($result);
	exit();
}
if(!empty($_GPC['serverid'])){
	header('content-type:application/json;charset=utf8');
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['serverid'];
	$medias['type']="image";
	$filename=$this->downloadMedia($medias);
	
	$fmdata = array(
			"success" => 1,
			"imgurl" =>tomedia($filename),
	);	
	echo json_encode($fmdata);
	exit();
}
if(!empty($_GPC['mediaid'])){
	header('content-type:application/json;charset=utf8');
	$account = WeAccount::create($_W['account']);
	$medias['media_id']=$_GPC['mediaid'];
	$medias['type']="image";
	$filename=$this->downloadMedia($medias);
	
	$fmdata = array(
			"success" => 1,
			"imgurl" =>tomedia($filename),
	);	
	echo json_encode($fmdata);
	exit();
}
//图片修改 
$chat_imgs=$_GPC['chat_imgs'];
	if(!empty($_GPC['chat_imgs'])){
		$chat_imgs=json_encode($_GPC['chat_imgs']);
	}
//系列课修改
if(!empty($_GPC['series_id'])){
	$list = pdo_get('chat_room',array('id'=>$_GPC['series_id']));
	if(!empty($list['chat_imgs'])){
		$imgs=json_decode($list['chat_imgs'],true);
		$dd='';
		for($i=0;$i<count($imgs);$i++){
			$dd.='<dd class="album-item album-img" style="background-image: url('.$imgs[$i].');"><i onclick="del(this);"></i></dd>';
		}
	}
	if(!empty($_GPC['imgid'])){
		unset($list['topic_imgs'][$_GPC['imgid']]);
	}
	if(!empty($_GPC['create'])){
		$data=array(
	   		"room_name"=>$_GPC['room_name'],
	   		"room_desc"=>$_GPC['room_desc'],
	   		"room_icon"=>$_GPC['room_icon'],
	   		"tags"=>$_GPC['tags'],
	   		'chat_imgs'=>$chat_imgs,
	   		// 'count_subject'=>$_GPC['count_subject'],
	   		'series_price'=>$_GPC['series_price']
   		);
   		$row_count = pdo_update('chat_room',$data,array('id'=>$_GPC['series_id']));
   		header('content-type:application/json;charset=utf8');
   		$fmdata = array(
	   			"success" => 1,
	   			"room_id" =>$list['series_id'],
	   	);
	   	echo json_encode($fmdata);exit();
	}
}
if(!empty($_GPC['create'])){


	header('content-type:application/json;charset=utf8');
	// if($my_room['room_status']!=1){
	// 	$fmdata = array(
	// 			"success" => -1,
	// 			"data" =>"您的直播间还未审核通过或者被禁用了",
	// 	);
	
	// 	echo json_encode($fmdata);
	// 	exit;
	// }

   $data=array(
   		"room_id"=>$room_id,
        "uniacid"=>$uniacid,
   		"room_name"=>$_GPC['room_name'],
   		"room_desc"=>$_GPC['room_desc'],
   		"room_icon"=>$_GPC['room_icon'],
   		"is_status"=>0,//上传的作品要后台去验证
   		"room_status"=>1,
   		"tags"=>$_GPC['tags'],
   		"create_uid"=>$user_info->uid,
   		"create_openid"=>$user_info->openid,
   		"create_nickname"=>$user_info->nickname,
   		"create_avatar"=>$user_info->headimgurl,
   		"create_time"=>time(),
   		'chat_imgs'=>$chat_imgs,
   		// 'count_subject'=>$_GPC['count_subject'],
   		'series_price'=>$_GPC['series_price'],
   		'series_id'=>$_GPC['room_id'],
   		'third_url'=>'.'.$_GPC['third_url'],
   		"reward_percent"=>$my_room['reward_percent'],
   		"open"          => "1"
   );


   $row_count=pdo_insert("chat_room",$data);
   // return $this->respNews(array(
			// 			'Title' => $_GPC['room_name'],
			// 			'Description' => "你已成功创建【".$_GPC['room_name']."】为名的系列课\n",
			// 			'PicUrl' => $_GPC['room_icon'],
			// 			'Url' => $this->createMobileUrl('series_info', array('series_id' => $row_count))
			// 	));
   if($row_count==1){
	   	$fmdata = array(
	   			"success" => 1,
	   			"room_id" =>$_GPC['room_id'],
	   	);
   }else{
	   	$fmdata = array(
	   			"success" => -2,
	   			"room_id" =>$room_id,
	   	);
   }
   echo json_encode($fmdata);

   exit();
}

/*处理标签开始*/
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
/*处理标签结束*/


include $this->template('series_create');