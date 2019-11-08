<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];

if(!empty($_GPC['keyword_user'])){
    $keyword=$_GPC['keyword_user'];
    $condition="uniacid=".$uniacid." AND (nickname LIKE '%".$keyword."%')";
    $records=pdo_fetchall("SELECT id,nickname,avatar FROM ".tablename("chat_users")." WHERE ".$condition);

    header('content-type:application/json;charset=utf8');
    $fmdata = array(
            "success" => 1,
            "data" =>$records,
    );
    echo json_encode($fmdata);
    exit;
}

if(!empty($_GPC['user_nickname'])){
    $keyword=$_GPC['user_nickname'];
    $condition="uniacid=".$uniacid." AND (nickname LIKE '%".$keyword."%')";
    $records=pdo_fetch("SELECT id,nickname,avatar FROM ".tablename("chat_users")." WHERE ".$condition." LIMIT 20");

    header('content-type:application/json;charset=utf8');
    if(!empty($records)){
        $fmdata = array(
            "success" => 1,
            "data" =>$records['id'],
        );
    }else{
        $fmdata = array(
            "success" => -1,
            'data'=>'此用户未找到',
        );
    }

    echo json_encode($fmdata);
    exit;
}

$op = $_GPC['op'] ? $_GPC['op'] : 'display';
if($op == 'grade'){
    #会员ID
    $id = $_GPC['id'] ;
    $pindex = max(1, intval($_GPC['page']));
    $chat_user = pdo_fetch('SELECT cu.*,ur.nickname as agent_nickname FROM '.tablename('chat_users').' cu LEFT JOIN '.tablename('chat_users').' ur on cu.agent_id=ur.id where 1 and cu.uniacid=:uniacid and cu.id=:id limit 1 ' , array(':id'=>$id , ':uniacid'=>$uniacid));
    if($id == false){
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previousurl =  $_SERVER['HTTP_REFERER'];
            header('Location:'.$previousurl);
        }else{
            header('Location:'.$this->createWebUrl('user_manage'));
        }
    }
    if($_W['ispost'] == true){
        $chat_post = array();
        $chat_post['is_agent'] = intval($_GPC['is_agent']) ;
        $chat_post['agent_id'] = intval($_GPC['select_uid']) ;
        $chat_post['branchcourt'] = $_GPC['branchcourt'] ;
        $chat_post['merchants'] = $_GPC['merchants'] ;

        if($chat_post['is_agent'] == 1 && $chat_user['is_agent'] == 0 ){
            $chat_post['commission_checktime'] = time();
        }

        pdo_update('chat_users' , $chat_post , array('id'=>$id));

        message('保存信息成功',$this->createWebUrl('user_manage' , array('page'=>$pindex)),'success');
    }

    include $this->template('user_grade');
}else{
    $tempcondition=" WHERE uniacid=".$uniacid;
    $sql_first = "select id,avatar,nickname,user_info,alipay_num,real_name,mobile,agent_id from ".tablename('chat_users');
    $info_id = intval($_GPC['id']);
    if(!empty($info_id)){
        $person_info = pdo_fetch($sql_first.$tempcondition." and id=".$info_id);
        $user_info = $person_info;
        $person_info = unserialize($person_info['user_info']);
        $custom_all = pdo_fetchall('select * from '.tablename('chat_user_fields').$tempcondition.' order by displayorder desc');

    }
    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $user_list = pdo_fetchall($sql_first.$tempcondition." order by create_time desc limit ".($pindex-1)*$psize.",".$psize);
    #获取推荐人信息
    foreach ($user_list as $key => &$val) {
        $agent_user = pdo_fetch('SELECT id as agent_id , nickname as agent_nickname,avatar as agent_avatar FROM '.tablename('chat_users').' where 1 and uniacid=:uniacid and id=:id limit 1 ' , array(':id'=>$val['agent_id'] , ':uniacid'=>$uniacid));
        $val['agent_id'] = $agent_user['agent_id'] ;
        $val['agent_nickname'] = $agent_user['agent_nickname'] ;
        $val['agent_avatar'] = $agent_user['agent_avatar'] ;
        unset($agent_user);
    }

    $total = pdo_fetchcolumn("SELECT count(0) from ".tablename('chat_users').$tempcondition);

    $pager = pagination($total, $pindex, $psize);
    include $this->template('user_manage');
}


?>