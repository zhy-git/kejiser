<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');
$uniacid=$_W['uniacid'];
$topic_id=$_GPC['topic_id'];
$topic_id=intval($topic_id);

$tempcondition=" WHERE topic_id='{$topic_id}' AND A1.uniacid = '{$_W['uniacid']}'";

$pindex = max(1, intval($_GPC['page']));
$psize = 10;


$records = pdo_fetchall("SELECT A1.create_time,A2.nickname,A2.real_name,A2.mobile,A1.last_time,avatar FROM ".tablename("chat_joinusers")." A1 INNER JOIN ".tablename("chat_users")." A2 ON A1.user_uid=A2.id 
    ".  $tempcondition." ORDER BY A1.id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);


$total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename("chat_joinusers")." A1 ". $tempcondition);


$pager = pagination($total, $pindex, $psize);
$download_series = $this->createWebUrl('download_topic',array('topic_id'=>$topic_id));
include $this->template('topic_joins');

?>