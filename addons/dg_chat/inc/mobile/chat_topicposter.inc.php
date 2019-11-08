<?php
/**
 * Created by PhpStorm.
 * User: chengbin
 * Date: 2016/12/29
 * Time: 12:00
 */
global $_W,$_GPC;
define('SRC',$_W['siteroot']);

$id=$_GPC['spoerid'];
$uniacid=$_W['uniacid'];
$cfg=$this->module['config'];
$code = intval($_GPC['code']);
//$op=!empty($_GPC['op'])?$_GPC['op']:"display";

//用户信息及二维码token

$spocer=pdo_fetch("select * from ".tablename('chat_topicposter')." where id=:id",array(":id"=>$id));
// var_dump($spocer);
$roominfo = pdo_fetch("select * from ".tablename('chat_room')." where room_id=:id",array(":id"=>$spocer['room_id']));
$user=pdo_fetch("select * from ".tablename('chat_users')." where id=:id",array(":id"=>$spocer['uid']));

//直播间信息or系列课信息
if(!empty($spocer['series_id'])){
	$topicinfo = pdo_fetch("select `room_name` from ".tablename('chat_room')." where id=:id",array(":id"=>$spocer['series_id']));
	$topicinfo['name_room'] = $roominfo['room_name'];
}else{
	$topicinfo=pdo_fetch("select `topic_name`,`guest_name`,`begin_time` from ".tablename('chat_topic')." where id=:id",array(":id"=>$spocer['topic_id']));
}


$roominfo=pdo_fetch("select `room_name`,`subcom_percent` from ".tablename('chat_room')." where room_id=:room_id and uniacid=:uniacid",array(":room_id"=>$spocer['room_id'],":uniacid"=>$uniacid));
if(!empty($roominfo['subcom_percent'])){
	
    $roomsubcom=$roominfo['subcom_percent']*100;
}
//默认背景图是第一张
//$chat_poster = $cfg['chat_poster'];
$url='';

/*if(empty($chat_poster)){
	$url = MODULE_URL .'resource/qrcode/image/';
	$chat_poster = scandir('../addons/dg_chat/resource/qrcode/image',1);
	array_pop($chat_poster);
	array_pop($chat_poster);
	$background = $url.$chat_poster[0];
}else{
	$url = $_W['attachurl'];
	$background = $url.$chat_poster[0];
	
}*/
$url = MODULE_URL .'resource/qrcode/image/';
$chat_poster = scandir('../addons/dg_chat/resource/qrcode/image',1);
array_pop($chat_poster);
array_pop($chat_poster);
$background = $url.$chat_poster[0];

//二维码路径
if($_GPC['mini_pay'] == 'true'){

    if(file_exists(ATTACHMENT_ROOT."er$uniacid/") == false){
        mkdir(ATTACHMENT_ROOT."er$uniacid/");
    }
    if(file_exists(ATTACHMENT_ROOT."er$uniacid/er$uniacidchat_topic_{$spocer['id']}uid_{$spocer['uid']}_top.jpg") == false){

        $uniacid_mini = pdo_fetch("select uniacid from ".tablename('dg_account_token')."where mini_name=:mini_name",array(':mini_name' =>'dg_live'));

        $access_token= $this->getAccess_token('dg_account_token',$uniacid_mini['uniacid']);

        $url1 = "https://api.weixin.qq.com/wxa/getwxacodeunlimit?access_token=$access_token";
		if(empty($spocer['series_id'])){
			$data_arr = array('scene'=>$_SERVER['SERVER_NAME'].'&'.$uniacid.'&t='.$spocer['topic_id'],'page'=>'dg_live/pages/index/index','width'=>430);
		}else{
			$data_arr = array('scene'=>$_SERVER['SERVER_NAME'].'&'.$uniacid.'&s='.$spocer['series_id'],'page'=>'dg_live/pages/index/index','width'=>430);
		}
        $er=$this->http_curl($url1,'post','json',json_encode($data_arr,true));
    if(strlen($er)<10000){
            if($constraint['errcode'] == 40001){
                getAccess_token('dg_account_token',$uniacid_mini['uniacid'],1);
            }
        }else{
			if($constraint['errcode'] == 0 || $constraint == NULL){
				file_put_contents(ATTACHMENT_ROOT."er$uniacid/er{$uniacid}chat_topic_{$spocer['id']}uid_{$spocer['uid']}_top.jpg",$er);
				$ticketurl = ATTACHMENT_ROOT."er$uniacid/er{$uniacid}chat_topic_{$spocer['id']}uid_{$spocer['uid']}_top.jpg"; 
			}else{
				$ticketurl = 'https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket='. urlencode($spocer['ticket']);
			}
        }
    }
}else{
    $ticketurl = 'https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket='. urlencode($spocer['ticket']);

}
//建立文件夹
$updir = '../attachment/images/'.$uniacid.'/'.date("Y").'/'.date("m").'/';
load()->func('file');
if(!is_dir($updir)){
	mkdirs($updir);
}
//图片名称
$useravatar='chat_topic'.$spocer['topic_id']."uid_".$spocer['uid']."_top";
//图片保存路径
$avatarlocal= $updir.$useravatar.".png";
//字体路径
$fontfile=MODULE_ROOT.'/'.'resource/font/msyh.ttf';


//邀请人头像
$avatar=substr($spocer['avatar'],0,strlen($spocer['avatar'])-3).'64';

$user = downloadWeixinFile($avatar);

$test = test($user['body'],$updir.$useravatar);

if(!empty($_GPC['type'])&&$_GPC['type']=='img'){
	if(!empty($chat_poster[$code])){
		$background = $url.$chat_poster[$code];//图片的完整路径
		$img = qrcode($ticketurl,$background,$avatarlocal,$fontfile,$topicinfo,$test,$spocer['series_id']);
		echo json_encode(array('status'=>1,'content'=>$img));
		exit;
	}else{
		echo json_encode(array('status'=>0,'content'=>'未找到背景'));
		exit;
	}
	
}



$img = qrcode($ticketurl,$background,$avatarlocal,$fontfile,$topicinfo,$test,$spocer['series_id']);


include $this->template('chat_topicposter');


function qrcode($ticketurl,$background,$avatarlocal,$fontfile,$topicname,$user,$series_id){
	if(!empty($series_id)){
		$text = autowrap(20,0,$fontfile,$topicname['name_room'],350);
		$name = autowrap(20,0,$fontfile,"系列课：{$topicname['room_name']}",350);
	}else{
		$text = autowrap(20,0,$fontfile,$topicname['topic_name'],350);
		$time = '开始时间：'.date('Y-m-d H:i',$topicname['begin_time']);//开奖时间
		$name = "主讲人：{$topicname['guest_name']}";
	}
	
	
	$src = imagecreatefromstring(file_get_contents($ticketurl));//从字符串中新建一个二维码图像
	$dst = imagecreatefromstring(file_get_contents($background));
	
	imagejpeg($src,$avatarlocal);//保存二维码
	list($width, $height)=getimagesize($avatarlocal);//拿到图片宽高
	//缩放粘贴二维码至背景图
	$per=0.5;
	$n_w=$width*$per;
	$n_h=$height*$per;
	$new=imagecreatetruecolor($n_w, $n_h);//新建一个真彩色图像 
	$img=imagecreatefromjpeg($avatarlocal);
	imagecopyresized($new, $img,0, 0,0, 0,$n_w, $n_h, $width, $height);
	imagecopymerge($dst, $new, 100, 880, 0, 0, $n_w, $n_h, 100);
	/*头像粘贴至背景图*/
	$im = imagecreatefrompng($user);
	imagecopyresampled($dst,$im,280,200,0,0,100,100,64,64);
	//粘贴文字
	$color = imagecolorallocate($dst, 0, 0, 0);
	imagettftext($dst,20,0,150,360,$color,$fontfile,$text);
	imagettftext($dst,20,0,150,540,$color,$fontfile,$name);
	if(empty($series_id)){
		imagettftext($dst,20,0,150,620,$color,$fontfile,$time);
	}
	
	//保存	
	imagepng($dst,$avatarlocal);
	imagedestroy($im);
	imagedestroy($new);
	imagedestroy($img);
	imagedestroy($dst);
//str_replace('../attachment/',SRC.'attachment/',$avatarlocal)
	return $avatarlocal;
}


function autowrap($fontsize, $angle=0, $fontface="", $string, $width) {
	// 这几个变量分别是 字体大小, 角度, 字体名称, 字符串, 预设宽度
	 $content = "";
	 $v = 0;
	 // 将字符串拆分成一个个单字 保存到数组 letter 中
	 for ($i=0;$i<mb_strlen($string,'utf-8');$i++) {
		 $letter[] = mb_substr($string, $i, 1,'utf-8');
	 }
	
	 foreach ($letter as $l) {
		 $v+=1;
		 $teststr = $content." ".$l;
		 $testbox = imagettfbbox($fontsize, $angle, $fontface, $teststr);
		 // 判断拼接后的字符串是否超过预设的宽度
		 if (($testbox[2] > $width) && ($content !== "")) {
			 $content .= "\n";
		 }
		 if($v<30){
			  $content .= $l;
		 }else{
			 $content .='...';
			 break;
		 }
	 }
	 return $content;
}

function downloadWeixinFile($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_NOBODY, 0);    //只取body头
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $package = curl_exec($ch);
    $httpinfo = curl_getinfo($ch);
    curl_close($ch);
    $imageAll = array_merge(array('header' => $httpinfo), array('body' => $package));
    return $imageAll;
}
/*处理圆头像并保存*/
function test($body,$useravatar){
	/*处理圆头像*/
	//图片保存路径
	$dest_path= $useravatar."11.png";
	
	$w = 64;  $h=64; // original size 
	$src = imagecreatefromstring($body);//获取头像
	$newpic = imagecreatetruecolor($w,$h);  
	imagealphablending($newpic,false);  
	$transparent = imagecolorallocatealpha($newpic, 255,255,255, 127); 
	
	$r=$w/2;  
	for($x=0;$x<$w;$x++)  
		for($y=0;$y<$h;$y++){  
			$c = imagecolorat($src,$x,$y);  
			$_x = $x - $w/2;  
			$_y = $y - $h/2;  
			if((($_x*$_x) + ($_y*$_y)) < ($r*$r)){  
				imagesetpixel($newpic,$x,$y,$c);  
			}else{  
				imagesetpixel($newpic,$x,$y,$transparent);  
			}  
		} 
	imagesavealpha($newpic, true);	
	imagepng($newpic, $dest_path);  
	imagedestroy($newpic);  
	imagedestroy($src);  
//	unlink($url);  
	return $dest_path;  	
}