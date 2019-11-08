<?php
/**
 * 作者：陆新泽
 * 时间：2018.9.30
 * 描述：获取畅销课程
 * 参数： topic_style
 */
global $_GPC,$_W;
$uniacid=$_W['uniacid'];
$topic_style=$_GPC['topic_style']?$_GPC['topic_style']:2;//1=语音直播2=视频直播,3=录播视频,,6=第三方视频
//查询话题表和账单已支付的关联数据
$result=pdo_fetchall("SELECT A1.id,A1.room_id,A1.series_id,A1.topic_name,A1.topic_imgs,A2.room_id,A2.series_id FROM ".tablename("chat_topic")." A1 INNER JOIN ".tablename("chat_payment")." A2 ON A1.id=A2.topic_id WHERE A2.pay_status=:pay_status and A1.uniacid=:uniacid and topic_style=:topic_style",array(":pay_status"=>'1',':uniacid'=>'1',':topic_style'=>$topic_style));

if(!$result){
	$return=['code'=>104,'data'=>'','msg'=>'暂无数据'];
  echo json_encode($return);exit;
}
$arr=[];
$array=[];
//将购买的数量存到一个数组中
foreach($result as $key=>$val){
	  if(!in_array($val['id'],$arr)){
	  	$arr[]=$val['id'];
	  }
}
//统计购买数量
if(!empty($arr)){
	$number=[];

	foreach($arr as $k=>$v){
      $payment_data=pdo_fetchcolumn("SELECT count(0) FROM ".tablename("chat_payment")." where uniacid=:uniacid AND topic_id=:topic_id AND pay_status=:pay_status ", array(":uniacid"=>$uniacid,':topic_id'=>$v,':pay_status'=>'1'));
      $number[]=$payment_data;
	}	

		//将话题id和购买的数量组合到一个数组中并按从高到低排序
		$arr_data=array_combine($arr,$number);
		arsort($arr_data);
		//总页数
		$count = ceil(count($arr_data)/2);
        $data=[];
		foreach($arr_data as $keys=>$value){
            //查询畅销课程并且按购买人数从高到低排序
            $buy_data=pdo_fetch("SELECT id,uniacid,series_id,topic_name,topic_desc,topic_icon,topic_imgs,topic_style,look_numbers,room_paymoney,star FROM ".tablename("chat_topic")." where uniacid=:uniacid AND id=:id AND topic_style=:topic_style limit 4", array(":uniacid"=>$uniacid,':id'=>$keys,':topic_style'=>$topic_style));
            $buy_data['pay_people']=$value;
            $data[]=$buy_data;
		}
        //分页截取
        $page = !empty($_GPC['page'])?$_GPC['page']:1;
        $res = array_slice($data,($page-1)*2,2);

		$return=['code'=>100,'data'=>$res,'msg'=>'加载成功','count'=>$count];
		echo json_encode($return);

  }else{

  	$return=['code'=>104,'data'=>'','msg'=>'暂无数据'];
    echo json_encode($return);exit;
  }
