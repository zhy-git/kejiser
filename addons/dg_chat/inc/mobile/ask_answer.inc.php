<?php
global $_GPC,$_W;	

$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];

$room_id=0;
$user_info=$this->getUserInfo();

$head_imgurl=str_replace("/46","/132",$user_info->headimgurl);
$nickname=$user_info->nickname;

if(empty($_GPC['ask_id'])){
	exit;
}

$ask_id=intval($_GPC['ask_id']);
$ask_record=pdo_fetch("SELECT * FROM ".tablename("chat_ask")." WHERE id=:id",array(":id"=>$ask_id));
if(empty($ask_record)){
  exit;
}
$show_text="";
$hours=intval((time()-$ask_record['create_time'])/3600);
$minute=intval((time()-$ask_record['create_time'])/60);
if(time()-$ask_record['create_time']<60){
	$show_text=time()-$ask_record['create_time']."秒前";
}else if($minute<60){
	$show_text=$minute."分钟前";
}else{
	$show_text=$hours."小时前";
}

if(!empty($_GPC['submit'])){
	$data=array(
			"uniacid"=>$uniacid,
			"ask_id"=>$ask_id,
			"answer_content"=>$_GPC['content'],
			"answer_uid"=>$user_info->uid,
			"answer_type"=>"voice",
			"time_last"=>$_GPC['time_last'],
			"create_time"=>time()
	);
	/*更新-已经回复标识*/
	pdo_update("chat_ask",array("is_answer"=>1),array("id"=>$ask_id));
	pdo_insert("chat_ask_answer",$data);	
}

$answer_records=pdo_fetchall("SELECT A1.*,A2.nickname,A2.avatar FROM ".tablename("chat_ask_answer")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.answer_uid=A2.id WHERE ask_id=:ask_id",array(":ask_id"=>$ask_id));
foreach($answer_records as &$mrecord){
	if(!empty($mrecord['answer_content_down'])){
		$mrecord['answer_content']="http://rs.duoguan.com/".$mrecord['answer_content_down']."_1";
	}
	unset($mrecord);
}

include $this->template('ask_answer');