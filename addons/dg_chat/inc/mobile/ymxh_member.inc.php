<?php
/**
 * 作者：刘健军
 * 时间：2018.9.27
 * 描述：会员页
 * 参数：position：0顶部广告 1中部广告 其他全部广告
 */

require_once (MODULE_ROOT."/class/ymxh/Banner.class.php");
require_once (MODULE_ROOT."/class/ymxh/Tags.class.php");
require_once (MODULE_ROOT."/class/ymxh/Topic.class.php");


global $_GPC,$_W;
$uniacid = $_W['uniacid'];
$user_info=cache_load('user_info');

if(!$user_info){
  $data=['code'=>108,'data'=>'','msg'=>'请先登录'];
    echo json_encode($data);exit;
}
$openid = $user_info['openid'];

$openid=$user_info['openid'];
//$openid = $user_info->openid;

//$openid = 'oIQzC0nJtP3Mxe0OQITz0Taz07hY';
$tags=$_GPC['tags'];
$query = load()->object('query');
$myroom=$query->from('chat_room')->where(['room_id >'=>0,'create_openid'=>$openid])->get();

if(!empty($myroom))
{
//查询平台的关注数量
    $query = load()->object('query');
    $sub_num=$query->from('chat_subscribe')->where(['openid'=>$openid])->count();
    $data['sub_num']=$sub_num;

//获取点赞数（读取课程评论中好评数是3星以上的评论数量）
    $query = load()->object('query');
    $comment_num=$query->from('chat_comment')->where(['room_id >'=>$myroom['room_id'],'star >'=>3])->count();
    $data['comment_num']=$comment_num;

//获取粉丝量（读取课程评论中好评数是3星以上的评论数量）
    $query = load()->object('query');
    $comment_num=$query->from('chat_subscribe')->where(['room_id >'=>$myroom['room_id']])->count();
    $data['fance_num']=$comment_num;
}
else
{
    $data['sub_num']=0;
    $data['comment_num']=0;
    $data['fance_num']=0;
}



$t=new Tags();
//获取9大类信息
$tags=$t->getTags();
foreach ($tags as $key=>$t){
  unset($t['thumb']);
    $tags[$key]=$t;
}
$data['tags']=$tags;

$ban=new Banner();
//获取首页顶部广告
$data['top_ad']=$ban->getAd(0);

//获取会员页vip热播榜课程
$topic=new Topic();
$data['vip_hot_topic']=$topic->getVipHotTopic($tags);

//获取vip尊享专区视频
//1.视频课程
$data['exclusive_topic']['video_topic']=$topic->getVipExclusiveTopicByType(2,$tags);
//2.语音课程
$data['exclusive_topic']['voice_topic']=$topic->getVipExclusiveTopicByType(1,$tags);
//3.录播课程
$data['exclusive_topic']['record_topic']=$topic->getVipExclusiveTopicByType(3,$tags);

//获取会员页即将上线
$data['futrue_class']=$topic->f_topic($tags);


$result['code'] = 100;
$result['msg'] = '读取成功';
$result['data'] = $data;
echo json_encode($result);
exit;