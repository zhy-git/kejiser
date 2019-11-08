<?php
global $_GPC,$_W;
$uniacid = $_W['uniacid'];
$id = $_GPC['id'];
if(empty($id)){
	exit;
}
$type = !empty($_GPC['type'])?$_GPC['type']:'topic';
// 1,榜单 2,免费3,付费
$pindex = max(1, intval($_GPC['pindex']));
$psize = 10;
switch ($type) {
	case 'topic':
		$condition  = "  WHERE  uniacid=:uniacid AND topic_status!=-1 AND is_del is null and series_id is  null ";
		$order_by = ' topic_status,gl_fine DESC,gl_order DESC,ID DESC';
		switch ($id) {
			case '1':
			$order_by = " count desc,topic_status,gl_fine DESC,gl_order DESC,ID DESC";
			$condition .= " and topic_type = 'ticket' ";
				break;
			
			case '2':
				$condition .= " and topic_type != 'ticket' ";
				break;
			case '3':
				$condition .= " and topic_type='ticket' ";
				$order_by = " room_paymoney desc,topic_status,gl_fine DESC,gl_order DESC,ID DESC";
				break;
		}
		$total =  pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_topic").$condition,array(":uniacid"=>$uniacid));
		$pages = ceil($total / $psize);
		if($pindex>$pages&&$pages>0)
			$pindex =$pages;
		
		$attachdir = "'/" . $_W['config']['upload']['attachdir'] . "/'";//图片路径的拼接
		$info_list = pdo_fetchall("select id,uniacid,room_id,series_id,topic_name,topic_desc,CONCAT({$attachdir},topic_icon) as topic_icon,topic_imgs,topic_style,look_numbers,qrcode_url,qrcode_desc,is_opendm,is_vip,star,file_id,guest_name,guest_info,create_time,x_look_numbers,begin_time,end_time,f_tags,tags,topic_status,create_openid,is_showguid,is_allshutup,reward_percent,im_group_id,activityid,videoid,taskid,liveid,third_url,transstatus,spread,is_del,is_index,gl_fine,gl_order,topic_order,(select count(0) from ".tablename("chat_payment")." where topic_id=id and pay_status=1 and pay_type=2) as count from ".tablename("chat_topic").$condition." order by ".$order_by." limit ". ($pindex - 1) * $psize . ',' . $psize,array(":uniacid"=>$uniacid));
		foreach ($info_list as &$t_ing){
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
		break;
	
	default:
	$condition  = " where A1.uniacid=:uniacid and A1.room_status =1 and A1.is_del is null and A1.series_id is not null ";
	$order_by = ' A1.create_time desc';
		switch ($id) {
			case '1':
			$order_by = " count desc,A1.id desc";  
				break;
			
			case '2':
				$condition .= " and A1.series_price =0";

				break;
			case '3':
				$condition  .= " and A1.series_price>0";
				$order_by = ' A1.series_price desc';
				break;
		}
		$total =  pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename("chat_room")." A1 ".$condition,array(":uniacid"=>$uniacid));
		$pages = ceil($total / $psize);
		if($pindex>$pages&&$pages>0)
			$pindex =$pages;
		$info_list = pdo_fetchall("SELECT A1.*,(select count(0) from ".tablename('chat_payment')." A2 where A2.uniacid=:uniacid and A2.room_id=A1.series_id and A2.pay_status=1 and A2.series_id=A1.id) as count,(select room_name from".tablename("chat_room")." where room_id=A1.series_id limit 1)  as real_name from ".tablename('chat_room')." A1 ".$condition." order by ".$order_by." limit ". ($pindex - 1) * $psize . ',' . $psize,array(":uniacid"=>$uniacid));
		//pdo_debug();
		break;
}

if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['pages']=$pages;
	$result['type'] = $type;
	$result['list']=$info_list;
	echo json_encode($result);
	exit;
}
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
include $this->template('inner');
