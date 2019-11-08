<?php
 /*
陆新泽
授权登录
参数：
*/

global $_GPC,$_W;	
$uniacid = $_W['uniacid'];
$op=$_GPC['op'];
if($op=='authorization'){
	$url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx7f87330c1e69c342&redirect_uri=https://ymxh.haoxh123.com/app/index.php?i=1&c=entry&do=ymxh_login&m=dg_chat&op=login&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect";

       // $this->createWebUrl($url);  
	header('location:' . $url); 
}
if($op=='login'){
   
	$code = $_GPC['code'];

    if(!$code){
        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx7f87330c1e69c342&redirect_uri=https://ymxh.haoxh123.com/app/index.php?i=1&c=entry&do=ymxh_login&m=dg_chat&op=authorization&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect"; 
    header('location:' . $url); 
    }
	 $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx9d0cb318f7c41806&secret=bbd218d26f57e3d2e6e1f52cc469c2d7&code=$code&grant_type=authorization_code";
        $d = curl_file_get_contents($url);
        $temps = json_decode($d,true);
       // var_dump($temps);
        $number=count($temps);
        if($number>2){
            $accesstoken = $temps['access_token'];
             $openid = $temps['openid'];
       }else{
          $this->error(__('授权失败，请重试'));
       }
       
        $infourl = "https://api.weixin.qq.com/sns/userinfo?access_token=$accesstoken&openid=$openid&lang=zh_CN";
        $userinfo = curl_file_get_contents($infourl);
        $temp = json_decode($userinfo,true);
        if(!isset($temp['openid'])) {
             $this->error(__('授权失败，请重试'));
        } 
        $user_data=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE openid=:openid AND uniacid=:uniacid " ,array(":openid"=>$temp['openid'],":uniacid"=>$uniacid));
        if(!$user_data){
        	$femdata=array(
        		'uniacid'=>$uniacid,
        		'openid'=>$temp['openid'],
        		'nickname'=>$temp['nickname'],
        		'avatar'=>$temp['headimgurl'],
        		'sex'=>$temp['sex'],
        		'province'=>$temp['province'],
        		'city'=>$temp['city'],
        		'unionid'=>$temp['unionid'],
        		'create_time'=>time()
        	);
        	$insert=pdo_insert('chat_users',$femdata);
            $user_id=pdo_insertid();
             $data=pdo_fetch("SELECT * FROM ".tablename("chat_users")." WHERE id=:id AND uniacid=:uniacid " ,array(":id"=>$user_id,":uniacid"=>$uniacid));
             cache_write('user_info', $data);
        	if($insert){
        		$data=['code'=>100,'data'=>$femdata,'msg'=>'登录成功'];
        		//echo json_encode($data);exit;\
        		$url1='https://ymxh.haoxh123.com/dist/index.html';
                //$url1='https://www.baidu.com/?tn=48021271_17_hao_pg';
        		header('location:' . $url1); 
        	 }
        }
        $data=['code'=>100,'data'=>$user_data,'msg'=>'登录成功'];
        cache_write('user_info', $user_data);
        //echo json_encode($data);exit;
        $url1='https://ymxh.haoxh123.com/dist/index.html';
         //$url1='https://www.baidu.com/?tn=48021271_17_hao_pg';
        		header('location:' . $url1); 

}

function curl_file_get_contents($durl){  
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $durl);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; 
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; 
    $data = curl_exec($ch);  
    curl_close($ch);  
    return $data;  
 } 