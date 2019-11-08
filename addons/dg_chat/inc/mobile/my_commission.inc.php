<?php
global $_GPC,$_W;
$uniacid = $_W['uniacid'];

$user_info=$this->getUserInfo();

#判断权限
$commission_auth = pdo_fetchcolumn('SELECT is_agent FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid and openid=:openid' , array(':uniacid'=>$uniacid , ':openid'=>$user_info->openid));
$merchants_auth = pdo_fetchcolumn('SELECT COUNT(1) FROM '.tablename('chat_room').' where 1 and uniacid=:uniacid and merchants_uid=:merchants_uid' , array(':uniacid'=>$uniacid , ':merchants_uid'=>$user_info->uid));
$branchcourt_auth = pdo_fetchcolumn('SELECT COUNT(1) FROM '.tablename('chat_room').' where 1 and uniacid=:uniacid and branchcourt_uid=:branchcourt_uid' , array(':uniacid'=>$uniacid , ':branchcourt_uid'=>$user_info->uid));

$condition="";
$cfg = $this->module['config'];
$condition .= '  and ca.openid=:openid ' ;
$commission_type = intval($_GPC['type']) > 0 ? intval($_GPC['type']) : 0 ;

$condition_type = 'room';
$pindex = max(1, intval($_GPC['pindex']));
$psize = 10;
$condition .= ' and ca.commission_type=:type ' ;
$limit = ' limit '.($pindex-1).','.$psize;

$b_sql = ' SELECT ca.*,cu.nickname,cu.mobile,cu.avatar,cp.pay_openid FROM '.tablename('chat_commission_apply').' as ca LEFT JOIN '.tablename('chat_payment').' as cp on ca.out_trade_no=cp.out_trade_no LEFT JOIN '.tablename('chat_users').' as cu on cu.openid=ca.openid where 1 and ca.uniacid=:uniacid '.$condition.$limit ;
$t_sql = ' SELECT COUNT(1) FROM '.tablename('chat_commission_apply').' as ca LEFT JOIN '.tablename('chat_payment').' as cp on ca.out_trade_no=cp.out_trade_no LEFT JOIN '.tablename('chat_users').' as cu on ca.openid=cu.openid where 1 and ca.uniacid=:uniacid '.$condition ;
$apply_list = pdo_fetchall($b_sql , array(':openid'=>$user_info->openid , ':uniacid'=>$uniacid, ':type'=>$commission_type));
$total = pdo_fetchcolumn($t_sql , array(':openid'=>$user_info->openid ,':uniacid'=>$uniacid , ':type'=>$commission_type));

foreach ($apply_list as $key => &$ve) {
    $pay_users = pdo_fetch('SELECT id,nickname,openid,mobile,avatar FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid and openid=:pay_openid' , array(':uniacid'=>$_W['uniacid'] , ':pay_openid'=>$ve['pay_openid'])) ;
    $ve['pay_nickname'] = $pay_users['nickname'] ;
    $ve['pay_avatar'] = $pay_users['avatar'] ;
    switch ($ve['commission_type']) {
        case 0:
            $ve['commission_ctype'] = '直推奖励';
            break;
        case 1:
            $ve['commission_ctype'] = '分销分佣';
            break;
        case 2:
            $ve['commission_ctype'] = '招商员';
            break;
        case 3:
            $ve['commission_ctype'] = '分院奖励';
            break;
    }
    switch ($ve['status']) {
        case -1:
            $ve['status_ctype'] = '无效';
            break;
        case 1:
            $ve['status_ctype'] = '待审核';
            break;
        case 2:
            $ve['status_ctype'] = '待打款';
            break;
        case 3:
            $ve['status_ctype'] = '已打款';
            break;
    }
}


$pages = ceil($total / $psize);
if($pindex>$pages&&$pages>0)
$pindex =$pages;


if(!empty($_GPC['pindex'])){
	header('content-type:application/json;charset=utf8');
	$result['pindex']=$pindex;
	$result['pages']=$pages;
	$result['list']=$apply_list;
	$result['condition'] = $condition_type;
	echo json_encode($result);
	exit;
}


/*处理标签开始*/
$tag_record=pdo_fetchall("SELECT * FROM ".tablename("chat_tags")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder",array(":uniacid"=>$uniacid));
/*处理标签结束*/

$share=pdo_fetch("SELECT * FROM ".tablename("chat_share")." WHERE uniacid=:uniacid",array(":uniacid"=>$uniacid));
$sharedata=array(
		"title"=>str_replace(array("\r\n", "\r", "\n"), '',$share['share_title']),
		"desc"=>str_replace(array("\r\n", "\r", "\n"), '',strip_tags($share['share_desc'])),
		"link"=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'],
		"imgUrl"=>tomedia($share['share_img']),
);

include $this->template('my_commission');