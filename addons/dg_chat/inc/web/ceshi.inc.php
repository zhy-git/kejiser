<?php
global $_W,$_GPC;
$key = file_get_contents('https://m.panda.tv/room.html?roomid=7000?pdt=1.18.i0.0.6qjcq70f3a3',true,null,'20000');
var_dump($key);
$t=time();
$txttime=$t+3600*24;
//$sign = MD5($apikey.$txttime);
//$url = "http://fcgi.video.qcloud.com/common_access?cmd=".$appid."&interface=Live_Tape_GetFilelist&Param.s.channel_id=".$streamid."&t={$txttime}&sign={$sign}";
$nonce=time();
//签名

//签名

$secretid='AKIDiJ2gMtDVeeTktubU8g3FH8sQq6C7irUw';
		$srcStr = "GETvod.api.qcloud.com/v2/index.php?Action=GetVideoInfo&FileId=7447398155238874979&Nonce=".rand(0000,9999)."&Region=gz&SecretId=".$secretid."&SignatureMethod=HmacSHA256&Timestamp=".time();

		$signStr = base64_encode(hash_hmac('sha256', $srcStr,'AKIDiJ2gMtDVeeTktubU8g3FH8sQq6C7irUw' , true));
		$signStr = urlencode($signStr);
		//请求
		$key = "Action=GetVideoInfo&FileId=7447398155238874979&Nonce=".rand(0000,9999)."&Region=gz&SecretId=".$secretid."&Timestamp=".time()."&Signature=".$signStr;
		$key = urlencode($key);
		$url="https://vod.api.qcloud.com/v2/index.php?".$key;
var_dump($signStr,$url);
// $srcStr = 'GETvod.api.qcloud.com/v2/index.php?Action=GetVideoInfo&fileId=7447398155238874979&Nonce='.$nonce.'&SecretId=AKIDiJ2gMtDVeeTktubU8g3FH8sQq6C7irUw&SignatureMethod=HmacSHA256&Timestamp='.time();
// $signStr = base64_encode(hash_hmac('sha256', $srcStr, 'Sq4843weM3gEdu67xc8iy9EDHMZkmgP0', true));
// $signStr=urlencode($signStr);
// $url="https://vod.api.qcloud.com/v2/index.php?Action=GetVideoInfo&fileId=7447398155238874979&Signature=".$signStr."&SecretId=AKIDiJ2gMtDVeeTktubU8g3FH8sQq6C7irUw&Timestamp=".time()."&Nonce=345122&Nonce=".$nonce;
$ch = curl_init();
//设置选项，包括URL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

//执行并获取HTML文档内容
$output = curl_exec($ch);
var_dump($output);
//释放curl句柄
curl_close($ch);
