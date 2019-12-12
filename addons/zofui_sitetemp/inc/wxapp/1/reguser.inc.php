<?php
    defined('IN_IA') or exit('Access Denied');
    global $_W,$_GPC;
    
    if ($_GPC['op'] == 'apply') {
        //申请为特派员  
         $user = pdo_get('zofui_sitetemp_reguser',array('openid' => $_W['openid'],'uniacid' => $_W['uniacid'] ));
         if ($user) {
             $updateinfo = pdo_update('zofui_sitetemp_reguser',array('istrue'=>3),array('id'=>$user['id']));
                 if ($updateinfo) {
                     $this->result(0, '申请已发送，等待管理员审核。',$updateinfo);
                 }else{
                    $this->result(1, '申请失败。',$updateinfo);
                 }
                 
         }else{
             $this->result(1, '您还没注册请重新授权注册。');
         }


        
    }else{
            $hasuser = pdo_get('zofui_sitetemp_reguser',array('openid' => $_W['openid'],'uniacid' => $_W['uniacid'] ));
            if ($hasuser) {
                $this->result(0, '服务器获取用户成功',$hasuser);
            }else{
                 if (empty($_W['openid']) || empty($_W['uniacid'])) {
                        $this->result(1, '服务器注册用户失败');
                 } else {
                      $user = [
                         'openid'  => $_W['openid'],
                         'uniacid' => $_W['uniacid'],
                         'nickname' => $_GPC['nickName'],
                         'headimgurl' => $_GPC['avatarUrl'],
                         'createtime' => time(),
                        ];
                        $result = pdo_insert('zofui_sitetemp_reguser', $user);
                        if ($result) {
                            $this->result(0, '服务器注册用户成功',$result);
                        }else{
                            $this->result(1, '服务器注册用户失败',$result);
                        }
                 }
                 
                       
            }
}


