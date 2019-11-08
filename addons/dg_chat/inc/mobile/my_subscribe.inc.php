<?php
global $_GPC,$_W;	

$acid=empty($_W['account']['acid'])?$_W['uniacid']:$_W['account']['acid'];
$uniacid = $_W['uniacid'];

$room_id=0;
$user_info=$this->getUserInfo();

$rooms_sql="SELECT A1.room_id,A1.create_time,A2.room_name,A2.room_desc,A2.room_icon FROM ".tablename("chat_subscribe")." A1 INNER JOIN ".tablename("chat_room")." A2 ON 
          A1.room_id=A2.room_id AND A1.uniacid=A2.uniacid  WHERE A1.uid=".$user_info->uid." AND sub_type='room' ORDER BY A1.create_time DESC ";
$records=pdo_fetchall($rooms_sql);

include $this->template('my_subscribe');