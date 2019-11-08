<?php
    defined('IN_IA') or exit('Access Denied');    

    require_once IA_ROOT.'/addons/hc_face/core/aip-face/AipFace.php';
    require_once IA_ROOT.'/addons/hc_face/core/gd.php';
    require_once IA_ROOT.'/addons/hc_face/inc/model/cloud.php';
    global $_GPC, $_W;
	$weid = $_W['uniacid'];
	$uid = $_COOKIE['uid'];
    $aa = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'baidu'.$weid),array('value')),'true');
	// 你的 APPID AK SK
	define(APP_ID,$aa[app_id]);
	define(API_KEY,$aa[api_key]);
	define(SECRET_KEY,$aa[secret_key]);
	
	/*const APP_ID = $aa[app_id];
	const API_KEY = $aa[api_key];
	const SECRET_KEY = $aa[secret_key];*/
     
	// 你的 APPID AK SK
/*	const APP_ID = '15342116';
	const API_KEY = 'rGihB5ovZw0hrM0EMkS3r3Dl';
	const SECRET_KEY = 'XV1wcjEzYSEGAaHu0FXhQVgEDr9vzweg';
	*/
	//人像检测获取原始图像信息
	$client = new AipFace(APP_ID, API_KEY, SECRET_KEY);
	
	if($_GPC['method']=='upload'){
		//图像上传并裁剪，返回裁剪后的图片，并进行人脸检测，返回头部姿势、左右眼状态、是否戴眼镜

		if($_GPC['plat']=='wx'){
			$account_api = WeAccount::create();
			$token = $account_api->getAccessToken();
			//获取素材库图片
			$mediaId = $_GPC['mediaId'];//'n29GD86b22HlbBxHwFzPQm5IVjqapZ9g3H1Ns6Me-kzvnoEJvJhIFqC3LGIwcRrM';////
			$url = "https://api.weixin.qq.com/cgi-bin/media/get?access_token={$token}&media_id={$mediaId}";

			$response = ihttp_get($url);

			//二进制转码
			$base64   = base64_encode($response['content']);
			$aa = 'data:image/jpeg;base64,' . $base64;
			//echo $aa;die;
			$fname =time().rand(1000,9999).".jpeg";
			$dir = IA_ROOT.'/addons/hc_face/upload1/';
		    if(!file_exists($dir)){
		        mkdir($dir);
		        chmod($dir,0777);
		    }
		    //保存图片到本地
		    $local = IA_ROOT."/addons/hc_face/upload1/".$fname;
			file_put_contents($local, file_get_contents($aa));
		}else{
			if(empty($_FILES["image"])){
		        exit(
			    	json_encode(
			    		array(
			    			'code'=>0,
			    			'msg' =>'请上传图片（要求人脸照片）'
			    		)
			    	)
			    );
		    }
		    $type=$_FILES["image"]["type"];
		    $type=explode("/",$type);  
		    $fname =time().rand(1000,9999).'.'.$type[1];
		    $dir = IA_ROOT.'/addons/hc_face/upload1/';
		    if(!file_exists($dir)){
		        mkdir($dir);
		        chmod($dir,0777);
		    }
		    move_uploaded_file($_FILES["image"]["tmp_name"],"../addons/hc_face/upload1/".$fname);
		    //保存图片到本地
		    $local = IA_ROOT."/addons/hc_face/upload1/".$fname;
		}
		$dir1 = IA_ROOT.'/addons/hc_face/upload/';
		if(!file_exists($dir1)){
	        mkdir($dir1);
	        chmod($dir1,0777);
	    }
	   	$thumb = IA_ROOT."/addons/hc_face/upload/".$fname;
	    $gd = new Gd();
	    $gd->compressed_image($local,$thumb);

		unlink($local);
	    if(!file_exists($thumb)){
	    	usleep(500);
	    }
		//人脸检测
	    $image = $_W[siteroot].'addons/hc_face/upload/'.$fname;
	    $image_path = 'addons/hc_face/upload/'.$fname;
		$option = array(
			'face_field'   => 'beauty,face_type,face_shape,quality,glasses,eye_status,landmark',
			'max_face_num' => 1,
			'face_type'    => LIVE,
		);
		$out = $client->detect($image,URL,$option);

		//echo "<pre>";print_r($out);die;
		$res['face_token'] = $out[result][face_list][0][face_token];
		//判断当前图片是否已经存在
		$isupload = pdo_get('hcface_avatar',array('original_token'=>$out[result][face_list][0][face_token]));
		
		//裁剪缩略图
		$pos = $out[result][face_list][0][location];
		$gd = new Gd();
		$img = IA_ROOT."/addons/hc_face/upload/".$fname;//IA_ROOT.'/addons/hc_face/abc.jpg';

		$imginfo = getimagesize($img);
		//echo "<pre>";print_r($imginfo);
		//头顶距离

		$right = $imginfo[0]-$pos[left]-$pos[width];
		$lpad = $imginfo[0]-$pos[width]-$right;
		$pad  = $lpad>$right?$right:$lpad;
		$left = $pos[left]-$pad;

		$top = $pos[top]-$pos[height]*0.6;
		$width = $pos[width]+$pad*2;
		$height = $width;

		$cutimg = $gd->cutImg($img,$left,$top,300,300,$width,$height);
		$res[image] = $_W[siteroot].'addons/hc_face/avatar/'.$cutimg;
		$cut_path = 'addons/hc_face/avatar/'.$cutimg;
		if(empty($isupload)){
			pdo_insert('hcface_avatar',array('weid'=>$weid,'original'=>$image_path,'original_token'=>$out[result][face_list][0][face_token],'avatar'=>$cut_path));
		}
		//}else{
		// 	unlink($local);
		// 	$res[image] = $_W[siteroot].$isupload['avatar'];
		// 	$res[face_token] = $isupload['original_token'];
		// }

		$rotation = $out[result][face_list][0][location][rotation];
		if($rotation<0){
			$res['rotation'] = '左倾斜'.ceil(abs($rotation)).'°';
		}elseif($rotation>0){
			$res['rotation'] = '右倾斜'.ceil($rotation).'°';
		}else{
			$res['rotation'] = '无倾斜';
		}

		$glasses = $out[result][face_list][0][glasses][type];
		if($glasses=='none'){
			$sec = '未戴眼镜';
		}else{
			$sec = '戴眼镜';
		}
		$left_eye = $out[result][face_list][0][eye_status][left_eye];
		if($left_eye>0){
			$left = '睁眼';
		}else{
			$left = '闭眼';
		}
		$res['left'] = $left.'，'.$sec;
		$right_eye = $out[result][face_list][0][eye_status][right_eye];
		if($right_eye>0){
			$right = '睁眼';
		}else{
			$right = '闭眼';
		}
		$res['right'] = $right.'，'.$sec;
		//echo "<pre>";print_r($out);
		$completeness = $out[result][face_list][0][face_shape][probability];
		if($completeness==0){
			exit(
		    	json_encode(
		    		array(
		    			'code'=>0,
		    			'msg' =>'没有人脸（要求人脸照片）face_shape'
		    		)
		    	)
		    );
		}
		$type = $out[result][face_list][0][face_type][probability];
		if($type==0){
			exit(
		    	json_encode(
		    		array(
		    			'code'=>0,
		    			'msg' =>'没有人脸（要求人脸照片）face_type'
		    		)
		    	)
		    );
		}

		//检测是否为人像
		//检测人像的完整度
		
		exit(
	    	json_encode(
	    		array(
	    			'code'=>1,
	    			'msg' =>'success',
	    			'data'=>$res,
	    		)
	    	)
	    );
	}elseif($_GPC['method']=='submit'){
		
		//缩略图上传人脸识别库
		//$out = $client->addUser($url,URL,'test',1);
		//echo "<pre>";print_r($out);
		/*if($out['error_code']!=0){
			exit($out[error_msg].'，错误码：'.$out[error_code]);
		}
		$facetoken = $out[result][face_token];
		*/
		$token = $_GPC['face_token'];
		$image = $_GPC['image'];//$_W[siteroot].'/addons/hc_face/avatar/201902211024105c6e0bcae2773.jpeg';//

		$option = array(
			'face_field'   => 'age,beauty,expression,face_shape,gender,glasses,landmark,landmark72,landmark150,race,quality,eye_status,emotion,face_type',
			'max_face_num' => 1,
			'face_type'    => LIVE,

		);

		$ff = $client->detect($image,URL,$option);
		$landmark72 = $ff[result][face_list][0][landmark72];
		
		//判断当前图片是否已经存在
		$isupload = pdo_get('hcface_avatar',array('original_token'=>$token));
		$isreport = pdo_get('hcface_report',array('aid'=>$isupload['id']));
		if(empty($isupload)||empty($isreport)){
			$data = array(
				'avatar_token'=>$ff[result][face_list][0][face_token],
				'eye'   => json_encode(array(
					'start'=>array(
						'x'=>$landmark72[22][x],
						'y'=>$landmark72[24][y]
					),
					'end'=>array(
						'x'=>$landmark72[12][x],
						'y'=>$landmark72[48][y]
					)
				)),
				'nose'   => json_encode(array(
					'start'=>array(
						'x'=>$landmark72[22][x],
						'y'=>$landmark72[22][y]
					),
					'end'=>array(
						'x'=>$landmark72[12][x],
						'y'=>$landmark72[60][y]
					)
				)),
				'mouse'   => json_encode(array(
					'start'=>array(
						'x'=>$landmark72[22][x],
						'y'=>$landmark72[50][y]
					),
					'end'=>array(
						'x'=>$landmark72[12][x],
						'y'=>$landmark72[6][y]
					))
				)
			);

			pdo_update('hcface_avatar',$data,array('original_token'=>$token));
			$result['aid'] = pdo_getcolumn('hcface_avatar',array('original_token'=>$token),array('id'));

			$result['weid'] = $weid;
			$result['uid'] = $uid;

			$cloud = new Cloud();
			//五官描述
			$face = $cloud->getText('面部');
			$result['top'] = json_encode(array(
				'x'   => 150,
				'y'   => 0,
				'txt' => $face[data][top]
			));
			$result['eyebrow'] = json_encode(array(
				'x'   => $landmark72[41][x],
				'y'   => $landmark72[41][y],
				'txt' => $face[data][brow]
			));
			$result['eye'] = json_encode(array(
				'x'   => $landmark72[13][x],
				'y'   => $landmark72[13][y],
				'txt' => $face[data][eye]
			));
			$result['nose'] = json_encode(array(
				'x'   => $landmark72[57][x],
				'y'   => $landmark72[57][y],
				'txt' => $face[data][nose]
			));
			$result['mouse'] = json_encode(array(
				'x'   => $landmark72[67][x],
				'y'   => $landmark72[67][y],
				'txt' => $face[data][mouse]
			));
			//面相概述
			$summary = $cloud->getText('概述');
			$result['summary'] = $summary[data][content];
			$result['score'] = rand(80,100);
			$result['score_detail'] = json_encode(array(
				rand(20,70),
				rand(20,70),
				rand(20,70),
				rand(20,70),
				rand(20,70),
				rand(20,70),
				rand(20,70)
			));
			
			$eye = $cloud->getText('眼睛');
			$result['eye_desc'] = $eye[data][content];
			$mouse = $cloud->getText('嘴巴');
			$result['mouse_desc'] = $mouse[data][content];

			$five = $cloud->getText('五行');
			
			$five1_rate = rand(50,100);
			$five2_rate = 100-$five1_rate;

			$result['five1'] = $five[data][attr1];
			$result['five1_rate'] = $five1_rate;
			$result['five2'] = $five[data][attr2];
			$result['five2_rate'] = $five2_rate;
			$result['five_desc'] = $five[data][content];
			$result['createtime'] = time();


			$res = pdo_get('hcface_report',array('uid'=>$uid));
			if(empty($res)){
				$result['unlock'] = 1;
			}

			$rep = pdo_insert('hcface_report',$result);
			if (!empty($rep)) {
	            $rid = pdo_insertid();
	        }
		}else{

			$result['aid'] = $isreport['aid'];
			$result['weid'] = $weid;
			$result['uid'] = $uid;
			$result['top'] = $isreport['top'];
			$result['eyebrow'] = $isreport['eyebrow'];
			$result['eye'] = $isreport['eye'];
			$result['nose'] = $isreport['nose'];
			$result['mouse'] = $isreport['mouse'];
			$result['summary'] = $isreport['summary'];
			$result['score'] = $isreport['score'];
			$result['score_detail'] = $isreport['score_detail'];
			$result['eye_desc'] = $isreport['eye_desc'];
			$result['mouse_desc'] = $isreport['mouse_desc'];
			$result['five1'] = $isreport['five1'];
			$result['five1_rate'] = $isreport['five1_rate'];
			$result['five2'] = $isreport['five2'];
			$result['five2_rate'] = $isreport['five2_rate'];
			$result['five_desc'] = $isreport['five_desc'];
			$result['createtime'] = time();
			$rep = pdo_insert('hcface_report',$result);
			if (!empty($rep)) {
	            $rid = pdo_insertid();
	        }
		}

        $res[rid] = $rid;
		$res[shangting] = array(0,$landmark72[24][y]);
		$res[zhongting] = array($landmark72[24][y],$landmark72[51][y]);
		$res[xiating] = array($landmark72[51][y],$landmark72[6][y]);

		$res[eyebrow] = array($landmark72[22],$landmark72[24],$landmark72[26],$landmark72[39],$landmark72[41],$landmark72[43]);

		$res[eye] = array($landmark72[13],$landmark72[15],$landmark72[17],$landmark72[19],$landmark72[30],$landmark72[32],$landmark72[34],$landmark72[36]);

		$res[nose] = array($landmark72[47],$landmark72[48],$landmark72[49],$landmark72[50],$landmark72[51],$landmark72[52],$landmark72[53],$landmark72[54],$landmark72[55],$landmark72[56],$landmark72[57]);

		$res[mouse] = array($landmark72[58],$landmark72[59],$landmark72[60],$landmark72[61],$landmark72[62],$landmark72[63],$landmark72[64],$landmark72[65]);

		$res[chin] = array($landmark72[5],$landmark72[6],$landmark72[7]);

		$res[line] = array($landmark72[22],$landmark72[24],$landmark72[26],$landmark72[39],$landmark72[41],$landmark72[43],$landmark72[34],$landmark72[62],$landmark72[64],$landmark72[58],$landmark72[13],$landmark72[22],$landmark72[26],$landmark72[47],$landmark72[50],$landmark72[58],$landmark72[50],$landmark72[57],$landmark72[53],$landmark72[62],$landmark72[53],$landmark72[56],$landmark72[47],$landmark72[56],$landmark72[39],$landmark72[43]);

	    exit(
	    	json_encode(
	    		array(
	    			'code'=>1,
	    			'msg' =>'success',
	    			'data'=>$res,
	    		)
	    	)
	    );
	}elseif($_GPC['method']=='report'){
		$rid = $_GPC['rid'];
		$name = $_GPC['name'];
		if(empty($name)){
			exit(
		    	json_encode(
		    		array(
		    			'code'=>0,
		    			'msg' =>'请输入名字'
		    		)
		    	)
		    );
		}
		$locknum = pdo_get('hcface_report',array('uid'=>$uid,'unlock'=>1),array('count(id)'));
		if($locknum>=1){
			$params['unlock'] = 1;
		}
		$params['name'] = $name;
		pdo_update('hcface_report',$params,array('id'=>$rid));
		exit(
	    	json_encode(
	    		array(
	    			'code'=>1,
	    			'msg' =>'success'
	    		)
	    	)
	    );
	}elseif($_GPC['method']=='follow'){
		$rid = $_GPC['rid'];
		$name = $_GPC['name'];
		if(empty($name)){
			exit(
		    	json_encode(
		    		array(
		    			'code'=>0,
		    			'msg' =>'请输入名字'
		    		)
		    	)
		    );
		}
		pdo_update('hcface_report',array('name'=>$name),array('id'=>$rid));
		exit(
	    	json_encode(
	    		array(
	    			'code'=>1,
	    			'msg' =>'success'
	    		)
	    	)
	    );
	}