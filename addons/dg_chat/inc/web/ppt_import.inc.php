<?php

require_once MODULE_ROOT."/class/fileupload.php";

global $_GPC,$_W;
$uniacid=$_W["uniacid"];
$topic_id=$_GPC['topic_id'];
$filePath = $_GPC["excelpath"]; 

if(!empty($filePath)){
	$up = new fileupload;
	//设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)
	$up -> set("path", MODULE_ROOT."/resource/ppts");
	$up -> set("maxsize", 2000000);
	$up -> set("allowtype", array("pptx","ppt"));
	$up -> set("israndname", false);
	var_dump($up);
	
	//使用对象中的upload方法， 就可以上传文件， 方法需要传一个上传表单的名子 pic, 如果成功返回true, 失败返回false
	if($up -> upload("excelfile")) {
		echo '<pre>';
		//获取上传后文件名子
		$filename=$up->getFileName();
		
		$powerpnt = new COM("powerpoint.application") or die("Unable to instantiate Powerpoint");
		var_dump($powerpnt);
		$file=$filename;
		var_dump($filename);exit();
		$presentation = $powerpnt->Presentations->Open(realpath($file), false, false, false) or die("Unable to open presentation");
		foreach($presentation->Slides as $slide)
		{
			$slideName = "Slide_" . $slide->SlideNumber;
			$uploadsFolder = MODULE_ROOT."/resource/ppt2imgs";
			$exportFolder = realpath($uploadsFolder);
			$slide->Export($exportFolder."//".$slideName.".jpg", "jpg", "600", "400");
		}
		$presentation->Close();
		$powerpnt->Quit();
		$powerpnt = null;
		message('上传完成！', referer(), 'success');
	} else {
		//获取上传失败以后的错误提示
		//var_dump($up->getErrorMsg());
		message("上传失败！", referer(), 'error');
	}
}
include $this->template('ppt_import');
?>