<?php
global $_GPC,$_W;	

$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];

$user_info=$this->getUserInfo();
$uid=$user_info->uid;

$nickname=$user_info->nickname;

$db_user=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id",array(":id"=>$uid));
$head_imgurl=$db_user['avatar'];
$head_imgurl=str_replace("/46","/132",$head_imgurl);



$pindex = max(1, intval($_GPC['pindex']));
$psize = 10;
$total = pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_ask")." WHERE ask_type='public' AND pay_type='ask' AND pay_status=1 AND pay_uid=:uid  ORDER BY ID DESC",array(":uid"=>$uid));
$pages = ceil($total / $psize);
if($pindex>$pages&&$pages>0)
    $pindex =$pages;
$search_records=pdo_fetchall("SELECT * FROM ".tablename("chat_ask")." WHERE ask_type='public' AND pay_type='ask' AND pay_status=1 AND pay_uid=:uid  ORDER BY ID DESC  LIMIT " . ($pindex - 1) * $psize . ',' . $psize,array(":uid"=>$uid));

$ask_ids=array();
$records=array();

foreach($search_records as $temp_record){
	$ask_ids[]=$temp_record['id'];
	if($temp_record['pay_uid']==$user_info->uid||$temp_record['payto_uid']==$user_info->uid)
		$temp_record['show']=true;
	$temp_record['paycount']=0;
	$records[$temp_record['id']]=$temp_record;
}

unset($temp_record);
unset($search_records);

if(count($ask_ids)>0){
	$instr = implode(',',$ask_ids);
	$answers=pdo_fetchall("SELECT * FROM ".tablename('chat_ask_answer')." WHERE ask_id IN ({$instr}) ORDER BY ask_id");
	foreach($answers as $myanswer){
		$myanswer['answer_content']=empty($myanswer['answer_content_down'])?$myanswer['answer_content']:"http://rs.duoguan.com/".$myanswer['answer_content_down']."_1";
		$records[$myanswer['ask_id']]['answer'][]=$myanswer;
	}
	
	$pay_count=pdo_fetchall("SELECT ask_id,COUNT(0) mcount FROM ".tablename("chat_ask")." WHERE pay_type='listen' AND pay_status=1 AND ask_id IN ({$instr})  GROUP BY ask_id");
    foreach ($pay_count as $pay_c){
    	$records[$pay_c['ask_id']]['paycount']=$pay_c['mcount'];
    }
}

if(!empty($_GPC['pindex'])){
	 header('content-type:application/json;charset=utf8');
	 $result['pindex']=$pindex;
	 $result['pages']=$pages;
	 $result['list']=$records;
	 echo json_encode($result);
	 exit;
}


include $this->template('my_ask_question');