<?php
ignore_user_abort();
set_time_limit(0);
global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
$medias['type']='voice';
load()->func("file");

$subject_list=pdo_fetchall("SELECT id,sub_content FROM ".tablename("chat_subjects")." WHERE sub_type='voice' AND uniacid=:uniacid AND sub_content_down IS NULL  AND create_time>".(time()-71*3600)."  LIMIT 80 ",array(":uniacid"=>$uniacid));
foreach ($subject_list as $record){
	if(strpos($record['sub_content'],'.mp3') == false){
		$file_key="sub_voice_".$record['id'];
		$medias['media_id']=$record['sub_content'];
		$filename=$this->downloadMedia($medias,'voice');
		if(!is_string($filename)){
			var_dump($filename);
			continue;
		}
		$filename=ATTACHMENT_ROOT."/".$filename;
		$result=$this->upload_qiniu($filename,$file_key);
		if($result==false){
			continue;
		}
		file_delete($filename);
		pdo_update("chat_subjects",array('sub_content_down'=>$file_key,"sub_content_downtime"=>time()),array("id"=>$record['id']));
	}
	
}

unset($record);
$sub_count=count($subject_list);

header("Content-type: text/html; charset=utf-8");

echo "共处理了{$sub_count} 条直播数据！";