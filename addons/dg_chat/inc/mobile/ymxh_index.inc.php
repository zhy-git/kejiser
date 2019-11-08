<?php
/**
 * 作者：刘健军
 * 时间：2018.9.27
 * 描述：首页信息
 * 参数：position：0顶部广告 1中部广告 其他全部广告
 */

require_once (MODULE_ROOT."/class/ymxh/Banner.class.php");
require_once (MODULE_ROOT."/class/ymxh/Tags.class.php");
require_once (MODULE_ROOT."/class/ymxh/Topic.class.php");


global $_GPC,$_W;
$uniacid = $_W['uniacid'];


$t=new Tags();
//获取9大类信息
$tags=$t->getTags();
$data['tags']=$tags;

$ban=new Banner();
//获取首页顶部广告
$data['top_ad']=$ban->getAd(0);
//获取首页中部广告
$data['middle_ad']=$ban->getAd(1);

$topic_style=$_GPC['op'];
//获取首页精选9大类课程
$topic=new Topic();
$data['handpick_topic']=$topic->getIndexTopic($topic_style);

//获取首页最新上线
$data['new_class']=$topic->new_class($topic_style);

//获取首页即将上线
$data['futrue_class']=$topic->futrue_class($topic_style);


$result['code'] = 100;
$result['msg'] = '读取成功';
$result['data'] = $data;
//var_dump($data);
echo json_encode($result);
exit;