<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];

$room_id=0;
$user_info=$this->getUserInfo();



$rooms_sql="
	SELECT *,1 isMain FROM ".tablename("chat_room")." WHERE uniacid=:uniacid AND is_del is null AND  create_uid=:uid and series_id is null
	UNION all
	SELECT A1.*,0 isMain FROM  ".tablename("chat_room")." A1 INNER JOIN ".tablename("chat_roommanager")." A2 ON A1.room_id=
	A2.room_id WHERE A1.uniacid=:uniacid AND uid=:uid ";
$records=pdo_fetchall($rooms_sql,array(":uniacid"=>$uniacid,":uid"=>$user_info->uid));

include $this->template('my_roomlist');