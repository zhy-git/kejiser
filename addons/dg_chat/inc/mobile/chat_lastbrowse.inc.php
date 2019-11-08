<?php
global $_GPC,$_W;	

$uniacid = $_W['uniacid'];

$room_id=0;
$user_info=$this->getUserInfo();
$attachdir = "'/" . $_W['config']['upload']['attachdir'] . "/'";//图片路径的拼接

$rooms_sql="SELECT A1.topic_id,A1.room_id,A1.update_time,A2.topic_name,A2.topic_desc,A3.room_icon,concat({$attachdir},topic_icon) as topic_icon
            FROM ".tablename("chat_roombrowse")." A1 
            INNER JOIN ".tablename("chat_topic")." A2 
            ON A1.topic_id=A2.id 
		    INNER JOIN ".tablename("chat_room")." A3 
		    ON A1.room_id=A3.room_id 
		    WHERE A1.uniacid=:uniacid AND brow_type='topic'  AND A1.uid=".$user_info->uid." 
		    ORDER BY update_time DESC ";
$records=pdo_fetchall($rooms_sql,array(":uniacid"=>$uniacid));


include $this->template('chat_lastbrowse');