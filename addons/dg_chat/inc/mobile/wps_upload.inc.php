<?php
global $_W,$_GPC;
$uniacid = $_W['uniacid'];
$arr=array('xlsx','doc','docx','csv','xls','ppt','pdf','pptx');//可上传文件格式

if(!empty($_FILES)){
	$tempFile = $_FILES['wps_up']['tmp_name'];//临时路劲
	//得到文件格式是否允许
	$fileParts = pathinfo($_FILES['wps_up']['name'],PATHINFO_EXTENSION);

	if(!in_array($fileParts,$arr)){
		exit(json_encode(array('status'=>4,'content'=>'文件格式错误')));
	}
	$updir = '../attachment/wps_upload/'.$uniacid.'/'.date("Y").'/'.date("m").'/';
	if(!is_dir($updir)){
		mkdir($updir,0777,true);
	}
	//储存文件夹
	$useravatar=$updir.time().mt_rand(0,99999).'.'.$fileParts;

	$file_url=move_uploaded_file($tempFile,$useravatar);
	
	if($file_url){
		$url = str_replace('../',$_W['siteroot'],$useravatar);
		$fCont = file_get_contents($url); 
		if(strlen($fCont)>1024*1024*20){
			unlink($url);
			$res=array('status'=>2);
		}else{
			if(strlen($fCont)<1024){
				$wps_size=strlen($fCont)."B";
			}elseif(strlen($fCont)>1024 && strlen($fCont)<1048576) {
				$wps_size=ceil(strlen($fCont)/1024)."KB";
			} else{
				$wps_size=ceil(strlen($fCont)/1024/1024)."M";
			}
			$res=array('status'=>1,'content'=>$url,'wps_hz'=>$fileParts,'wps_name'=>$_FILES['wps_up']['name'],'wps_size'=>$wps_size);
		}
		exit(json_encode($res));
	}else{
		exit(json_encode(array('status'=>3,'content'=>'文件发送失败')));
	}	
}
?>