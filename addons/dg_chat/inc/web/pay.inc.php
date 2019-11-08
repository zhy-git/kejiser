<?php
global $_GPC,$_W;
$uniacid = $_W['uniacid'];
if(empty($_GPC['type'])){


	$sql='select count(id) as total,sum(pay_money) as pay_money  from '.tablename('chat_payment').' where pay_status=1 and uniacid=:uniacid';
	$total = pdo_fetch($sql,array(':uniacid'=>$uniacid));
	$yt = 24*3600;
	$time =array(
		'today'=>date('Y-m-d',time()),
		'zuotian'=>date('Y-m-d',time()-$yt),
		'jinqitian'=>date('Y-m-d',time()-(7*$yt)),
		'jinyigeyue'=>date('Y-m-d',time()-(30*$yt))
	);
	//今日
	$starttime=strtotime("{$time['today']} 00:00:00");
	$endtime=strtotime("{$time['today']} 23:59:59");

	$a_sql = 'select count(id) as total,sum(pay_money) as pay_money  from '.tablename('chat_payment')." where pay_status=1 and uniacid=:uniacid and pay_time > {$starttime} and pay_time < {$endtime}";
	$a = pdo_fetch($a_sql,array(':uniacid'=>$uniacid));

	//昨天
	$zuotian=strtotime("{$time['zuotian']} 00:00:00");
	$zuotian_end=strtotime("{$time['zuotian']} 23:59:59");
	//var_dump($zuotian,$zuotian_end);
	$b_sql = 'select count(id) as total,sum(pay_money) as pay_money  from '.tablename('chat_payment')." where pay_status=1 and uniacid=:uniacid and pay_time > {$zuotian} and pay_time < {$zuotian_end}";
	$b = pdo_fetch($b_sql,array(':uniacid'=>$uniacid));

	//近七天
	$jinqitian=strtotime("{$time['jinqitian']} 00:00:00");
	$jinqitian_end=strtotime("{$time['today']} 23:59:59");

	$c_sql = 'select count(id) as total,sum(pay_money) as pay_money  from '.tablename('chat_payment')." where pay_status=1 and uniacid=:uniacid and pay_time > {$jinqitian} and pay_time < {$jinqitian_end}";
	$c = pdo_fetch($c_sql,array(':uniacid'=>$uniacid));

	//近一个月
	$yue=strtotime("{$time['jinyigeyue']} 00:00:00");
	$yue_end=strtotime("{$time['today']} 23:59:59");

	$d_sql = 'select count(id) as total,sum(pay_money) as pay_money  from '.tablename('chat_payment')." where pay_status=1 and uniacid=:uniacid and pay_time > {$yue} and pay_time < {$yue_end}";
	$d = pdo_fetch($d_sql,array(':uniacid'=>$uniacid));

}else{

	$room_id = intval($_GPC['room_id']);//直播间 id
	$pay_time = intval($_GPC['pay_time']);//时间
	$room_type = $_GPC['room_type'];
	//页码
	$page = max(1, intval($_GPC['page']));
	$psize=10;

	$room_data = pdo_fetchall("select room_id,room_name from ".tablename("chat_room")." where uniacid=:uniacid and room_status=1 and is_del is null and series_id is null ",array(":uniacid"=>$uniacid));
	$where=array();
	$where2='';
	/*if(!empty($room_id)){
		$where2 =' and b.room_id=:room_id';
		$where[':room_id']=$room_id;
	}*/
	//时间查询
	if(empty($_GPC['time']['start'])){
		$time = date('Y-m-d',TIMESTAMP-86399*6);
		$start = strtotime($time."00:00:00");
	}else{
		$start=strtotime($_GPC['time']['start']."00:00:00");
	}
	if(empty($_GPC['time']['end'])){
		$end = date('Y-m-d',TIMESTAMP);
		$end = strtotime($end." 23:59:59");
	}else{
		$end=strtotime($_GPC['time']['end']."23:59:59");
	}
	if(!empty($start)&&!empty($end)){
		$where2 =" and a.pay_time between :pay_start_time and :pay_end_time";

		$where[':pay_start_time']=$start;
		$where[':pay_end_time']=$end;
	}

	//查询条件
	$where[':uniacid']=$uniacid;
	//统计
	$sql='select count(a.id) as total,sum(a.pay_money) as pay_money from '.tablename('chat_payment').'as a where  a.uniacid=:uniacid '.$where2.' and a.pay_status=1  and a.pay_money>0';
	$total = pdo_fetch($sql,$where);

	//结果记录集
	$sql='select a.id,a.pay_nickname,a.pay_status,a.pay_money,a.pay_type,a.room_id,a.topic_id,a.series_id,a.create_time, (select room_name from '.tablename('chat_room').' where room_id=a.room_id limit 1) room_name from '.tablename('chat_payment').'as a where a.uniacid=:uniacid '.$where2.' and a.pay_status=1 and a.pay_money>0 order by a.create_time desc limit '.($page - 1)*$psize.','.$psize;
	$data = pdo_fetchall($sql,$where);
	$pay_data = arr($data);
	$pager = pagination($total['total'], $page, $psize);

}
include $this->template('pay');
	function arr($data){
		foreach($data as &$v){

			if(!empty($v['series_id'])){
				$topic_name=pdo_fetch('select room_name series_name,series_price pay_money from'.tablename('chat_room').' where id=:series_id',array(':series_id'=>$v['series_id']));
				$v['topic_name']=$topic_name['series_name'];
	//			$v['pay_money'] = $topic_name['pay_money'];
				$v['payto_type']='系列课购买';
			}else{
				if (empty($v['room_id'])){
					$v['topic_name']='会员';
					$v['payto_type']='会员购买';
				}else{
					$topic_name=pdo_fetch('select topic_name from'.tablename('chat_topic').' where id=:topic_id',array(':topic_id'=>$v['topic_id']));
					$v['topic_name']=$topic_name['topic_name'];
					$v['payto_type']='话题购买';
				}

			}
		}
		unset($v);
		return $data;
	}
?>