<?php
global $_GPC,$_W;	
$cfg=$this->module['config'];
$template_type=$cfg['template_type'];

$uniacid = $_W['uniacid'];
$room_id=$_GPC['room_id'];

$user_info=$this->getUserInfo();

$order_by=$_GPC['order'];
$condition=" AND is_index=1 ";
$condition1 =" AND A1.is_index=1 " ;
$tag_id=$_GPC['tags'];
if(!empty($tag_id)&&$tag_id!="0"){
	$tag_id=intval($tag_id);
	$condition.=" AND FIND_IN_SET(".$tag_id.",tags)";
	$condition1.="AND FIND_IN_SET(".$tag_id.",A1.tags)";
}

//查找自定义导航信息
$navbar_list = pdo_fetchall("select * from ".tablename('chat_navbar')." where uniacid=:uniacid order by seq desc limit 5 ",array(':uniacid'=>$uniacid));
$is_manager=$this->is_manager($room_id)||$chat_room['create_openid']==$user_info->openid;

$pindex = max(1, intval($_GPC['pindex']));
$psize = 10;
$total = pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_topic")." WHERE  uniacid=:uniacid AND topic_status!=-1 AND is_del is null ".$condition,array(":uniacid"=>$uniacid));

$pages = ceil($total / $psize);
if($pindex>$pages&&$pages>0)
	$pindex =$pages;

	
$order_by="topic_status,gl_fine DESC,gl_order DESC,ID DESC";
$topic_ing=pdo_fetchall("SELECT id,uniacid,series_id,topic_name,topic_desc,CONCAT('/attachment/',topic_icon) as topic_icon,topic_imgs,topic_style,look_numbers FROM ".tablename("chat_topic")." WHERE  uniacid=:uniacid AND topic_status!=-1 AND is_del is null AND series_id is null ".$condition." ORDER BY ".$order_by." LIMIT " . ($pindex - 1) * $psize . ',' . $psize,array(":uniacid"=>$uniacid));
foreach ($topic_ing as &$t_ing){
   $t_ing['end_text']=date('Y-m-d H:i:s', $t_his['end_time']);	
   if($t_ing['topic_icon'])
      $t_ing['icon']=$t_ing['topic_icon'];
   else
     $t_ing['icon']=$t_ing['room_icon'];
   
   $t_ing['ing']=3;
   if($t_ing['topic_status']==1){
   	$t_ing['ing']=1;
   }
   if($t_ing['begin_time']>time()){
	 $last_time = ($t_ing['begin_time']-time())/2592000;//月
     $last_time1 = ($t_ing['begin_time']-time())/86400;//日
     $last_time2 = ($t_ing['begin_time']-time())/3600;
    if($last_time>1 ||$last_time==1){
    	$relative = ceil($last_time).'月后';
    }else if($last_time1>1 ||$last_time1==1) {
 		$relative =ceil($last_time1).'日后';
    }else if($last_time2>1 ||$last_time2==1) {
 		$relative = ceil($last_time2).'小时后';
    }else{
    	$relative = "即将开始";
    }
    $t_ing['relative'] = $relative;
	   	$t_ing['ing']=2;
   }
   
   $t_ing['look_numbers']=$t_ing['look_numbers']+$t_ing['x_look_numbers'];
}





//查询首页音乐作品四下列
$fine_list1= pdo_fetchall("SELECT A1.*,(select count(0) from ".tablename('chat_payment')." A2 where A2.uniacid=:uniacid and A2.room_id=A1.series_id and A2.pay_status=1 and A2.series_id=A1.id) as count from ".tablename('chat_room')." A1 where A1.uniacid=:uniacid and A1.room_status =1 and A1.is_del is null and A1.series_id is not null and A1.is_status ".$condition1." order by create_time desc limit 0,6",array(':uniacid'=>$uniacid));

foreach ($fine_list1 as &$t_ing) {
	$room_name = pdo_fetch('select room_name from '.tablename('chat_room')." where uniacid=:uniacid and room_id=:room_id and is_status=1",array(':uniacid'=>$uniacid,':room_id'=>$value['series_id']));
	$t_ing['room_name1'] = $room_name['room_name'];
    //计算所投的票数
	 $total1[]=pdo_fetchcolumn("SELECT COUNT(*) FROM ".tablename("chat_vote")." WHERE uniacid=:uniacid and music_id=:music_id",array(":uniacid"=>$uniacid,":music_id"=>$t_ing['id']));
	// var_dump($total1);
     
}

//作品票数排行榜
$vote_list= pdo_fetchall("SELECT A1.*,(select count(0) from ".tablename('chat_payment')." A2 where A2.uniacid=:uniacid and A2.room_id=A1.series_id and A2.pay_status=1 and A2.series_id=A1.id) as count from ".tablename('chat_room')." A1 where A1.uniacid=:uniacid and A1.room_status =1 and A1.is_del is null and A1.series_id is not null and A1.is_status ".$condition1." order by A1.vate_number desc limit 0,100",array(':uniacid'=>$uniacid));
// var_dump($vote_list);
// die();





if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['pages']=$pages;
	$result['list']=$topic_ing;
	echo json_encode($result);
	exit;
}


/*处理幻灯片开始*/
$pic_record=pdo_fetchall("SELECT * FROM ".tablename("chat_banner")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder LIMIT 6",array(":uniacid"=>$uniacid));
foreach($pic_record as &$p_record){
	$p_record['thumb']=tomedia($p_record['thumb']);
}
unset($p_record);

if(empty($pic_record)){
	$pic_record=pdo_fetchall("SELECT id,room_id,topic_icon thumb,topic_name bannername FROM ".tablename("chat_topic")." WHERE uniacid=:uniacid AND topic_status!=-1 AND is_del is null AND is_index=1 ORDER BY ID DESC LIMIT 6",array(":uniacid"=>$uniacid));
	foreach($pic_record as &$p_record){
		$p_record['link']=$this->createMobileUrl('chat',array('topic_id'=>$p_record['id']));
	}
}
/*处理幻灯片结束*/


/*处理标签开始*/
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
/*处理标签结束*/


$share=pdo_fetch("SELECT * FROM ".tablename("chat_share")." WHERE uniacid=:uniacid",array(":uniacid"=>$uniacid));
$link = $this->createMobileUrl('index');
$link = substr($link,1);
$link = $_W['siteroot'].'app'.$link;
$sharedata=array(
		"title"=>str_replace(array("\r\n", "\r", "\n"), '',$share['share_title']),
		"desc"=>str_replace(array("\r\n", "\r", "\n"), '',strip_tags($share['share_desc'])),
		"link"=>$link,
		"imgUrl"=>tomedia($share['share_img']),
);

include $this->template('index');