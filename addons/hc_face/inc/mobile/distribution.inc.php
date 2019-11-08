<?php
    defined('IN_IA') or exit('Access Denied');
    require_once IA_ROOT."/addons/hc_face/inc/model/account.php"; 
    require_once IA_ROOT."/addons/hc_face/core/phpqrcode/qrlib.php";
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $uid  = $_COOKIE['uid'];
    $pid = empty($_GPC['pid'])?0:trim($_GPC['pid']);
    
    $account = new Account($pid);
	$account->account();
    $account->redirect();
    $forward = $account->share();
    $msg = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'msg'.$weid),array('value')),'true');
    $fenxiao = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'fenxiao'.$weid),array('value')),'true');
    
    if($_GPC['act']=='message'){
        $mobile = $_GPC['mobile'];
        if(empty($mobile)){
            exit(json_encode(array('code'=>0,'msg'=>'手机号不能为空')));
        }
        $url = "http://v.juhe.cn/sms/send";
        $code = rand(1000,9999);
        $params = array(
            'key'   => $msg['appkey'], //您申请的APPKEY
            'mobile'    => $mobile, //接受短信的用户手机号码
            'tpl_id'    => $msg['tpl_id'], //您申请的短信模板ID，根据实际情况修改
            'tpl_value' =>'#code#='.$code //您设置的模板变量，根据实际情况修改
        );
        SetCookie($mobile, $code, time()+900);
        $paramstring = http_build_query($params);
        $content = ihttp_post($url, $paramstring);
        $result = json_decode($content['content'], true);
        if($result['error_code']==0) {
            exit(json_encode(array('code'=>1,'msg'=>'发送成功')));
        }else{
            exit(json_encode(array('code'=>0,'msg'=>$result['reason'])));
        }
    }elseif($_GPC['act']=='login'){
        $mobile = $_GPC['mobile'];
        $code = $_GPC['code'];
        if(empty($mobile)){
            exit(json_encode(array('code'=>0,'msg'=>'手机号不能为空')));
        }
        if(empty($code)){
            exit(json_encode(array('code'=>0,'msg'=>'验证码不能为空')));
        }
        if($_COOKIE[$mobile]==$code){
            pdo_update('hcface_users',array('mobile'=>$mobile,'vip'=>1),array('uid'=>$uid));
            exit(json_encode(array('code'=>1,'msg'=>'恭喜您成为代理'))); 
        }else{
            exit(json_encode(array('code'=>0,'msg'=>'验证码错误'))); 
        }
    }else{
        $user = pdo_get('hcface_users',array('uid'=>$uid));
        $where = array(
            'user_id'=>$uid,
            'status'=>0,
            'freeze'=>0
        );
        $can = pdo_getcolumn('hcface_commission',$where,array('sum(profit)'));

        $zj = pdo_getcolumn('hcface_commission',array('user_id'=>$uid,'sort'=>1),array('sum(profit)'));

        $lb = pdo_getcolumn('hcface_commission',array('user_id'=>$uid,'sort !='=>1),array('sum(profit)'));

        $one = pdo_getcolumn('hcface_nexus',array('pid'=>$uid),array('count(id)'));
        $two = pdo_getcolumn('hcface_nexus',array('ppid'=>$uid),array('count(id)'));
        $thr = pdo_getcolumn('hcface_nexus',array('pppid'=>$uid),array('count(id)'));
        $team = $one+$two+$thr;

        $todaysy = pdo_getcolumn('hcface_commission',array('user_id'=>$uid,'createtime >'=>strtotime(date('Ymd'))),array('sum(profit)'));
        $todaydd = pdo_getcolumn('hcface_commission',array('user_id'=>$uid,'createtime >'=>strtotime(date('Ymd'))),array('count(id)'));

        $today_level1 = pdo_getcolumn('hcface_nexus',array('pid'=>$uid,'ctime >'=>strtotime(date('Ymd'))),array('count(id)'));
        $today_level2 = pdo_getcolumn('hcface_nexus',array('ppid'=>$uid,'ctime >'=>strtotime(date('Ymd'))),array('count(id)'));
        $today_level3 = pdo_getcolumn('hcface_nexus',array('pppid'=>$uid,'ctime >'=>strtotime(date('Ymd'))),array('count(id)'));

        //$todaydl = pdo_getcolumn('hcface_users',array('pid'=>$uid,'createtime >'=>strtotime(date('Ymd'))),array('count(uid)'));
        $todaydl = $today_level1+$today_level2+$today_level3;
        $fenxiao = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'fenxiao'.$weid),array('value')),'true');
        if(!empty($fenxiao['purl'])){
            $url = $fenxiao['purl'].'/app/index.php?i='.$_W['uniacid'].'&c=entry&do=index&m=hc_face&pid='.$uid;
        }else{
            $url = $_W['siteroot'].'app/index.php?i='.$_W['uniacid'].'&c=entry&do=index&m=hc_face&pid='.$uid;
        }

        $dir = IA_ROOT.'/addons/hc_face/qrcode/';
        if(!file_exists($dir)){
            mkdir($dir,0777,true);
        }
        $path = IA_ROOT.'/addons/hc_face/qrcode/'.$uid.'.png';
        QRcode::png($url,$path);

        $qrcode = $_W['siteroot'].'addons/hc_face/qrcode/'.$uid.'.png';
        if(empty($fenxiao[grade][1][grade])){
            $fenxiao[grade][1][grade] = '代理';
        }
        if(empty($fenxiao[grade][2][grade])){
            $fenxiao[grade][2][grade] = '合伙人';
        }


        if(empty($fenxiao[grade][1][pic])){
            $fenxiao[grade][1][pic] = '../addons/hc_face/public/fuck_1.png';
        }else{
            $fenxiao[grade][1][pic] = tomedia($fenxiao[grade][1][pic]);
        }
        if(empty($fenxiao[grade][2][pic])){
            $fenxiao[grade][2][pic] = '../addons/hc_face/public/fuck_2.png';
        }else{
            $fenxiao[grade][2][pic] = tomedia($fenxiao[grade][2][pic]);
        }

        if(!is_array($fenxiao['bgimg']) || empty($fenxiao['bgimg'])){
            $bg = array(
                $_W['siteroot'].'addons/hc_face/public/share1.jpg',
                $_W['siteroot'].'addons/hc_face/public/share2.jpg',
                $_W['siteroot'].'addons/hc_face/public/share3.jpg',
            );
        }else{
            foreach ($fenxiao['bgimg'] as $key => $val) {
                $bg[$key] = tomedia($val);
            }
        }

        include $this->template('distribution');
    }