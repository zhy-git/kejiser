<?php
/*
推送
*/
require_once (MODULE_ROOT."/Getui/igetui.php");
global $_GPC,$_W;
$op=$_GPC['op'];
$uniacid=$_W['uniacid'];

 if($op=='getui_list'){
	 //require_once(dirname(__FILE__) . '/' . 'igetui.php');
        //$type = $_GPC['pushtype'];
        $uid = $_GPC['uid'];
        //苹果设备
        //$atoken = $_GPC['atoken'];
       // $payload = $_GPC['payload'];
        	 $user_data = pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id AND uniacid=:uniacid" ,array(":id"=>$uid,":uniacid"=>$uniacid));
        	 $cid=$user_data['cid'];
         $content=['cid'=>$user_data['cid'],'title'=>'你有心订单啦！'];
          $arr = ["title"=>"圆梦学海","content"=>$content,"payload"=>"1"];
          echo json_encode($arr);
        //$arr2 = json_encode($arr);
    
        // if (empty($atoken)) {
        //     // pushMessageToSingle(createNotiMessage('帮福共享',$content, ''), 'de8d2cc8c93a4fa6f035e0b3957559ae');
        //     pushMessageToSingle(createTranMessage($arr2), $cid);
        // } else {
        //     apnMessageToSingle($token, $content, $payload);
        // }
    }
}