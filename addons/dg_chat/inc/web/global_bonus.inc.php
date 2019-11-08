<?php

global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];

$op = $_GPC['op'] ? $_GPC['op'] : 'display' ;

if($op == 'display'){
    if($_W['ispost']){
        #获取分红配置信息
        $commission_setting = pdo_fetch('SELECT * FROM '.tablename('chat_commission_setting').' where 1 and uniacid=:uniacid' , array(':uniacid'=>$uniacid));
        $commission_setting['commission_setting'] = iunserializer($commission_setting['commission_setting']);

        #获取配置信息
        if(empty($commission_setting['uniacid'])){
            $commission_setting = array(
                    'uniacid' => $uniacid ,
                    'commission_setting'=>array(
                            'open'=>intval($_GPC['open']),
                            'level'=>intval($_GPC['level']),
                            'hideicode'=>intval($_GPC['hideicode']),
                            'global_bing' => round($_GPC['global_bing'] , 2),
                            'directpushrate' => round($_GPC['directpushrate'] , 2),
                            'directpushmoney' => round($_GPC['directpushmoney'] , 2),

                            'merchantsrate' => round($_GPC['merchantsrate'] , 2),
                            'merchantsmoney' => round($_GPC['merchantsmoney'] , 2),

                            'branchcourtrate' => round($_GPC['branchcourtrate'] , 2),
                            'branchcourtmoney' => round($_GPC['branchcourtmoney'] , 2),

                            'withdraw_way' => array(
                                    'cashcredit'=>$_GPC['data']['cashcredit'],
                                    'cashweixin'=>$_GPC['data']['cashweixin'],
                                    'cashother'=>$_GPC['data']['cashother'],
                                ),
                            'withdraw' => $_GPC['withdraw'],
                            'withdrawcharge' => $_GPC['withdrawcharge'],
                        )

                );
            $commission_setting['commission_setting'] = iserializer($commission_setting['commission_setting']);

            pdo_insert('chat_commission_setting' , $commission_setting);
            message('操作成功!' , $this->createWebUrl('global_bonus' ) , 'success');

        }else{

            $commission_setting['commission_setting']['open'] = intval($_GPC['open']);
            $commission_setting['commission_setting']['level'] = intval($_GPC['level']);
            $commission_setting['commission_setting']['hideicode'] = intval($_GPC['hideicode']);
            $commission_setting['commission_setting']['global_bing'] = round($_GPC['global_bing'] , 2);
            $commission_setting['commission_setting']['directpushrate'] = round($_GPC['directpushrate'] , 2);
            $commission_setting['commission_setting']['directpushmoney'] = round($_GPC['directpushmoney'] , 2);
            $commission_setting['commission_setting']['merchantsrate'] = round($_GPC['merchantsrate'] , 2);
            $commission_setting['commission_setting']['merchantsmoney'] = round($_GPC['merchantsmoney'] , 2);

            $commission_setting['commission_setting']['branchcourtrate'] = round($_GPC['branchcourtrate'] , 2);
            $commission_setting['commission_setting']['branchcourtmoney'] = round($_GPC['branchcourtmoney'] , 2);

            $commission_setting['commission_setting']['withdraw_way'] = array(
                                    'cashcredit'=>$_GPC['data']['cashcredit'],
                                    'cashweixin'=>$_GPC['data']['cashweixin'],
                                    'cashother'=>$_GPC['data']['cashother'],
                                );
            $commission_setting['commission_setting']['withdraw'] = round($_GPC['withdraw'] , 2);
            $commission_setting['commission_setting']['withdrawcharge'] = round($_GPC['withdrawcharge'] , 2);

            $commission_setting['commission_setting'] = iserializer($commission_setting['commission_setting']);
            pdo_update('chat_commission_setting' , $commission_setting , array('uniacid'=>$uniacid));
            message('操作成功!' , $this->createWebUrl('global_bonus' ) , 'success');
        }
    }
}else if($op == 'level'){
    if($_W['ispost']){
        #获取分红配置信息
        $commission_setting = pdo_fetch('SELECT * FROM '.tablename('chat_commission_setting').' where 1 and uniacid=:uniacid' , array(':uniacid'=>$uniacid));
        $commission_setting['commission_setting'] = iunserializer($commission_setting['commission_setting']);
        #获取配置信息
        if(empty($commission_setting['uniacid'])){
            message('进行此操作需完成基础设置之后' , $this->createWebUrl('global_bonus') , 'warning');
        }else{
            $commission_setting['commission_setting']['commission1_rate'] = round($_GPC['commission1_rate'] , 2);
            $commission_setting['commission_setting']['commission1_pay'] = round($_GPC['commission1_pay'] , 2);
            $commission_setting['commission_setting']['commission2_rate'] = round($_GPC['commission2_rate'] , 2);
            $commission_setting['commission_setting']['commission2_pay'] = round($_GPC['commission2_pay'] , 2);
            $commission_setting['commission_setting']['commission3_rate'] = round($_GPC['commission3_rate'] , 2);
            $commission_setting['commission_setting']['commission3_pay'] = round($_GPC['commission3_pay'] , 2);
            // var_dump($_GPC['commission1_rate']);exit;
            $commission_setting['commission_setting'] = iserializer($commission_setting['commission_setting']);

            pdo_update('chat_commission_setting' , $commission_setting , array('uniacid'=>$uniacid));
            message('操作成功!' , $this->createWebUrl('global_bonus' , array('op'=>'level')) , 'success');
        }
    }
}else if($op == 'agent'){

    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $limit = ' limit '.($pindex-1).','.$psize;
    $condition = ' and is_agent = 1 ';
    #搜索功能
    $keyword=$_GPC['keyword_user'];
    if(!empty($keyword)){
        $condition .=" and (nickname LIKE '%".$keyword."%' OR mobile LIKE '%".$keyword."%')";
    }

    #获取分销商用户信息
    $u_sql = 'SELECT * FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid '.$condition.$limit;
    $c_sql = ' SELECT COUNT(1) FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid '.$condition;
    $user_list = pdo_fetchall($u_sql , array(':uniacid'=>$uniacid));
    #获取推荐人信息
    foreach ($user_list as $key => &$val) {
        $agent_user = pdo_fetch('SELECT id as agent_id , nickname as agent_nickname,avatar as agent_avatar FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid and id=:id limit 1 ' , array(':id'=>$val['agent_id'] , ':uniacid'=>$uniacid));

        $val['agent_id'] = $agent_user['agent_id'] ;
        $val['agent_nickname'] = $agent_user['agent_nickname'] ;
        $val['agent_avatar'] = $agent_user['agent_avatar'] ;
        unset($agent_user);
    }


    $total = pdo_fetchcolumn($c_sql , array(':uniacid'=>$uniacid));

    $pager = pagination($total, $pindex, $psize);
}else if($op == 'merchant'){
    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $limit = ' limit '.($pindex-1).','.$psize;
    $condition = ' and merchants = 1 ';
    #搜索功能
    $keyword=$_GPC['keyword_user'];
    if(!empty($keyword)){
        $condition .=" and (nickname LIKE '%".$keyword."%' OR mobile LIKE '%".$keyword."%')";
    }

    #获取分销商用户信息
    $u_sql = 'SELECT * FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid '.$condition.$limit;
    $c_sql = ' SELECT COUNT(1) FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid '.$condition;
    $user_list = pdo_fetchall($u_sql , array(':uniacid'=>$uniacid));
    #获取推荐人信息
    foreach ($user_list as $key => &$val) {
        $agent_user = pdo_fetch('SELECT id as agent_id , nickname as agent_nickname,avatar as agent_avatar FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid and id=:id limit 1 ' , array(':id'=>$val['agent_id'] , ':uniacid'=>$uniacid));

        $val['agent_id'] = $agent_user['agent_id'] ;
        $val['agent_nickname'] = $agent_user['agent_nickname'] ;
        $val['agent_avatar'] = $agent_user['agent_avatar'] ;
        unset($agent_user);
    }

    $total = pdo_fetchcolumn($c_sql , array(':uniacid'=>$uniacid));
    $pager = pagination($total, $pindex, $psize);
}else if($op == 'branchcourt'){
    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $limit = ' limit '.($pindex-1).','.$psize;
    $condition = ' and branchcourt = 1 ';
    #搜索功能
    $keyword=$_GPC['keyword_user'];
    if(!empty($keyword)){
        $condition .=" and (nickname LIKE '%".$keyword."%' OR mobile LIKE '%".$keyword."%')";
    }

    #获取分销商用户信息
    $u_sql = 'SELECT * FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid '.$condition.$limit;
    $c_sql = ' SELECT COUNT(1) FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid '.$condition;
    $user_list = pdo_fetchall($u_sql , array(':uniacid'=>$uniacid));
    #获取推荐人信息
    foreach ($user_list as $key => &$val) {
        $agent_user = pdo_fetch('SELECT id as agent_id , nickname as agent_nickname,avatar as agent_avatar FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid and id=:id limit 1 ' , array(':id'=>$val['agent_id'] , ':uniacid'=>$uniacid));

        $val['agent_id'] = $agent_user['agent_id'] ;
        $val['agent_nickname'] = $agent_user['agent_nickname'] ;
        $val['agent_avatar'] = $agent_user['agent_avatar'] ;
        unset($agent_user);
    }

    $total = pdo_fetchcolumn($c_sql , array(':uniacid'=>$uniacid));
    $pager = pagination($total, $pindex, $psize);
}else if($op == 'order'){
    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $limit = ' limit '.($pindex-1).','.$psize;
    $condition = '' ;

    $keyword = trim($_GPC['keyword']) ;

    if($_GPC['bonus_c'] != ""){
        $bonus_c = intval($_GPC['bonus_c']);
        switch ($bonus_c) {
            case 0:
                $condition .= ' and ca.commission_type=0 ';
                break;
            case 1:
                $condition .= ' and ca.commission_type=1 ';
                break;
            case 2:
                $condition .= ' and ca.commission_type=2 ';
                break;
            case 3:
                $condition .= ' and ca.commission_type=3 ';
                break;

            default:

                break;
        }
    }

    if($_GPC['bonus_s'] != ""){
        $bonus_s = intval($_GPC['bonus_s']);
        switch ($bonus_s) {
            case -1:
                $condition .= ' and ca.status=-1 ';
                break;
            case 1:
                $condition .= ' and ca.status=1 ';
                break;
            case 2:
                $condition .= ' and ca.status=2 ';
                break;
            case 3:
                $condition .= ' and ca.status=3 ';
                break;

            default:

                break;
        }
    }

    if($_GPC['bonus_sc'] != "" && !empty($keyword) ){
        $bonus_sc = intval($_GPC['bonus_sc']);
        switch ($bonus_sc) {
            case 0:
                $condition .= ' and ca.out_trade_no = '.$keyword.' ';
                break;
            case 1:
                $condition .= ' and cp.room_id = '.$keyword.' ';
                break;
            default:
                break;
        }
    }else{

        $condition .= ' and (cu.nickname like \'%'.$keyword.'%\' OR cu.mobile like \'%'.$keyword.'%\' OR cp.out_trade_no like \'%'.$keyword.'%\' OR cp.room_id like \'%'.$keyword.'%\' ) ';
    }

    #获取会员分销订单信息

    $b_sql = ' SELECT ca.*,cu.nickname,cu.mobile,cu.avatar,cp.pay_openid FROM '.tablename('chat_commission_apply').' as ca LEFT JOIN '.tablename('chat_payment').' as cp on ca.out_trade_no=cp.out_trade_no LEFT JOIN '.tablename('chat_users').' as cu on cu.openid=ca.openid where 1 and ca.uniacid=:uniacid '.$condition.$limit ;
    $t_sql = ' SELECT COUNT(1) FROM '.tablename('chat_commission_apply').' as ca LEFT JOIN '.tablename('chat_payment').' as cp on ca.out_trade_no=cp.out_trade_no LEFT JOIN '.tablename('chat_users').' as cu on ca.openid=cu.openid where 1 and ca.uniacid=:uniacid '.$condition ;
    $apply_list = pdo_fetchall($b_sql , array(':uniacid'=>$uniacid));
    $total = pdo_fetchcolumn($t_sql , array(':uniacid'=>$uniacid));

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
    }

    $pager = pagination($total, $pindex, $psize);
}else if($op == 'givemoney'){
    # ids payway(1:打款 -1:表示无效)
    $ids = $_GPC['ids'] ;
    if(!is_array($ids)){
        $ids = explode(',' , $ids);
    }
    #判断

}

#获取配置
$commission_setting = pdo_fetch('SELECT * FROM '.tablename('chat_commission_setting').' where 1 and uniacid=:uniacid' , array(':uniacid'=>$uniacid));
$commission_setting['commission_setting'] = iunserializer($commission_setting['commission_setting']);

$chat_setting_fields = $commission_setting['commission_setting'] ;


include $this->template('global_bonus');


?>



