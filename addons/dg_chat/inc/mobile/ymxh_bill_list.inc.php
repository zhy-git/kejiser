<?php
//账单列表
global $_GPC,$_W;
 $page = !empty($_GPC['page'])?$_GPC['page']:1;
 $size = !empty($_GPC['size'])?$_GPC['size']:10;
$op=$_GPC['op'];
$pay_type=$_GPC['pay_type']?$_GPC['pay_type']:'';
$user_info=cache_load('user_info');
if(!$user_info){
  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}
$uid=$user_info['id'];
//查询账单列表
if($op=='billlist'){

    if($pay_type==0){
        
        $billData = pdo_fetchall("SELECT id,uniacid,room_id,series_id,pay_money,pay_type,pay_nickname,pay_avatar,pay_time FROM " . tablename("chat_payment") . " WHERE pay_uid=:pay_uid  and pay_status=:pay_status ", array(':pay_uid'=>$uid,':pay_status' => '1'));
        $count = ceil(count($billData)/$size);
    }else{
        
        $billData = pdo_fetchall("SELECT id,uniacid,room_id,series_id,pay_money,pay_type,pay_nickname,pay_avatar,pay_time FROM " . tablename("chat_payment") . " WHERE pay_uid=:pay_uid and pay_type=:pay_type and pay_status=:pay_status", array(':pay_uid'=>$uid,':pay_type' => $pay_type,':pay_status' => '1'));
        $count = ceil(count($billData)/$size);
    }

    if ($billData) {
        if($billData['pay_type']==1){
            $billData['pay_type']='赞赏';
        }elseif($billData['pay_type']==2){
            $billData['pay_type']='付费直播';
        }elseif($billData['pay_type']==3){
            $billData['pay_type']='分答';
        }
         //分页截取
      $res = array_slice($billData,($page-1)*$size,$size);
        $data = ['code' => '100', 'count'=>$count,'data' => $res, 'msg' => '加载成功'];
        echo json_encode($data);
    } else {
        $data = ['code' => '101', 'data' => '', 'msg' => '暂无数据'];
        echo json_encode($data);
    }
}elseif($op=='billdetail'){
    //账单详情
    $id=$_GPC['id'];//账单id
    $billData = pdo_fetch("SELECT id,uniacid,room_id,series_id,pay_money,pay_type,pay_nickname,pay_avatar,pay_time,out_trade_no,payto_nickname,payto_avatar FROM " . tablename("chat_payment") . " WHERE id=:id ", array(":id" => $id));
    if ($billData) {
        if($billData['pay_type']==1){
            $billData['pay_type']='赞赏';
        }elseif($billData['pay_type']==2){
            $billData['pay_type']='付费直播';
        }elseif($billData['pay_type']==3){
            $billData['pay_type']='分答';
        }
        $data = ['code' => '100', 'data' => $billData, 'msg' => '加载成功'];
        echo json_encode($data);
    } else {
        $data = ['code' => '101', 'data' => '', 'msg' => '暂无数据'];
        echo json_encode($data);
    }
}elseif($op=='orderlist'){
    //订单列表
    $order_status=$_GPC['order_status'];
    if($order_status=='0'){
    
    $orderData = pdo_fetchall("SELECT id,uniacid,room_id,topic_id,series_id,pay_money,pay_type,pay_status,order_status,pay_nickname,pay_avatar,pay_time FROM " . tablename("chat_payment") . " WHERE pay_uid=:pay_uid ", array(':pay_uid'=>$uid));
     $count = ceil(count($orderData)/$size);
  }else{
     if($order_status=='1'){
        $pay_status=0;
     }else{
        $pay_status=1;
     }
    
     $orderData = pdo_fetchall("SELECT id,uniacid,room_id,topic_id,series_id,pay_money,pay_type,order_status,pay_status,pay_nickname,pay_avatar,pay_time FROM " . tablename("chat_payment") . " WHERE pay_uid=:pay_uid and order_status=:order_status and pay_status=:pay_status", array(':pay_uid'=>$uid,':order_status'=>$order_status,':pay_status'=>$pay_status));
      $count = ceil(count($orderData)/$size);
  }
  if($orderData){

      foreach($orderData as $key=>$val){

         if($val['topic_id']){

             $topic_data = pdo_fetch("SELECT id,uniacid,room_id,series_id,topic_name,topic_desc,topic_icon,topic_imgs FROM " . tablename("chat_topic") . " WHERE id=:id ", array(':id'=>$val['topic_id']));
             $orderData[$key]['topic_name']=$topic_data['topic_name'];
             $orderData[$key]['topic_desc']=$topic_data['topic_desc'];
             $orderData[$key]['topic_icon']=$topic_data['topic_icon'];
             $orderData[$key]['topic_img']=$topic_data['topic_imgs'];

         }elseif($val['series_id']){
             $room_data = pdo_fetch("SELECT id,uniacid,room_id,series_id,room_name,room_desc FROM " . tablename("chat_room") . " WHERE id=:id", array(':id'=>$val['series_id']));
             $orderData[$key]['topic_name']=$room_data['room_name'];
             $orderData[$key]['topic_desc']=$room_data['room_desc'];
             $orderData[$key]['topic_icon']=$room_data['room_icon'];
             $orderData[$key]['topic_img']=$room_data['bg_img'];

         }
      }
  }
  if($orderData){
    //分页截取
      $res = array_slice($orderData,($page-1)*$size,$size);
        $data = ['code' => '100', 'count'=>$count,'data' => $res, 'msg' => '加载成功'];
        echo json_encode($data);
  }else{
     $data=['code'=>101,'data'=>'','msg'=>'暂无数据'];
     echo json_encode($data);exit;
  }
  

}elseif($op=='orderdetail'){
    $id=$_GPC['id'];//订单表id
    $orderData = pdo_fetchall("SELECT id,uniacid,room_id,topic_id,series_id,pay_money,pay_type,pay_status,order_status,pay_nickname,pay_avatar,pay_time FROM " . tablename("chat_payment") . " WHERE id=:id ", array(':id'=>$id));
    if($orderData){
        $data=['code'=>100,'data'=>$orderData,'msg'=>'加载成功'];
        echo json_encode($data);exit;
  }else{
     $data=['code'=>101,'data'=>'','msg'=>'暂无数据'];
     echo json_encode($data);exit;
  }

}