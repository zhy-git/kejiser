<?php
class Chat_RoomCashSum extends Dg_Base{
   
   /*获取未结算金额*/
   public static function getNotCash($uniacid,$room_id,$percent_plat){
   	$max_id_1=0;
   	$max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_roomcashsum")." WHERE pay_type=1 AND room_id=:room_id",array(":room_id"=>$room_id));
   	if(!empty($max_record)){
   		$max_id_1=$max_record;
   	}
   	
   	$max_id_2=0;
   	$max_record=pdo_fetchcolumn("SELECT MAX(max_id) FROM ".tablename("chat_roomcashsum")." WHERE pay_type=2 AND room_id=:room_id",array(":room_id"=>$room_id));
   	if(!empty($max_record)){
   		$max_id_2=$max_record;
   	}
   	
   	
   	$batch_num="111";
   	/*计算赞赏所产生收益开始*/
    $sum_sql="SELECT A1.uniacid,A2.room_id,topic_id,MAX(A1.id) max_id,1,SUM(pay_money),SUM(pay_money)*(A2.reward_percent)*".$percent_plat." my_money,
			A2.reward_percent*".($percent_plat)." reward_percent,".$batch_num." batch_num,unix_timestamp(now()) create_time
			FROM ".tablename("chat_payment")." A1
			INNER JOIN ".tablename("chat_topic")." A2
			ON A1.topic_id=A2.id WHERE pay_status=1
			AND pay_type=1 AND A1.uniacid=:uniacid AND A1.room_id=:room_id AND A1.id>:max_id GROUP BY A2.room_id,topic_id";
   	 	
   	$result=pdo_fetchall($sum_sql,array(":uniacid"=>$uniacid,":max_id"=>$max_id_1,":room_id"=>$room_id));
   	/*计算赞赏所产生收益结束*/
   	
   	$room_notcash=0;
   	foreach($result as $record){
   		$room_notcash+=$record['my_money'];
   	}
   	
/*计算付费话题所产生收益开始*/
$sum_sql_2="SELECT uniacid,room_id,topic_id,max(id),2,SUM(pay_money) pay_money,SUM(pay_money)*".$percent_plat." room_money,".$percent_plat.",".$batch_num." batch_num,unix_timestamp(now()) create_time FROM ".tablename("chat_payment")."
					WHERE pay_status=1  AND room_id=:room_id
					AND pay_type=2 AND uniacid=:uniacid AND id>:max_id GROUP BY room_id,topic_id";
$result_2=pdo_fetchall($sum_sql_2,array(":uniacid"=>$uniacid,":room_id"=>$room_id,":max_id"=>$max_id_2));
/*计算付费话题所产生收益结束*/
   	
   	
   	foreach($result_2 as $record){
   		$room_notcash+=$record['room_money'];
   	}
	   /*计算付费话题所产生分佣收益开始*/
	   $sum_sql_3="select A1.`uniacid`,A2.`room_id`,MAX(A1.id) max_id,payto_uid,sum(`pay_money`) pay,1-A2.subcom_percent
subcom_percent,SUM(pay_money)*(A2.subcom_percent)*" .$percent_plat." my_money,".$batch_num." batch_num,unix_timestamp
(now()) create_time	FROM ".tablename("chat_payment")." A1 INNER JOIN
".tablename('chat_room')." A2 on A1.room_id=A2.room_id WHERE pay_status=1 and pay_type=2 and A1.uniacid=:uniacid and
A1.fuid is not null AND A1.id>:max_id and A1.room_id=:room_id GROUP BY A2.room_id";
	   $result_3=pdo_fetch($sum_sql_3,array(":uniacid"=>$uniacid,":max_id"=>$max_id_2,":room_id"=>$room_id));
	   /*计算付费话题所产生分佣收益结束*/
	   $subcom_cash=$result_3['my_money'];

	   $room_notcash=number_format(($room_notcash-$subcom_cash),2);
   	return $room_notcash;
   }
}
?>