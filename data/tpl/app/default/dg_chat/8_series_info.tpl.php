<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php  echo $topic['room_name'];?></title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="email=no">
<meta name="format-detection" content="address=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="<?php echo TEMPLATE_PATH;?>/js/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/qlCommon.css">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/payIndex.css">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/zhibo-item.css">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/font/iconfont.css">
<!-- <link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/style_new.css"> -->
<script>
function pcClick(){
		alert('请在手机端进行操作');
	}
(function(a) {
	a.fn.extend({
		minTipsBox: function(b) {
			b = a.extend({
				tipsContent: "",
				tipsTime: 1
			}, b);
			var c = 1E3 * parseFloat(b.tipsTime);
			0 < a(".min_tips_box").length ? a(".min_tips_box").show() : a('<div class="min_tips_box"><b class="bg"></b><span class="tips_content"></span></div>').appendTo("body");
			(function() {
				a(".min_tips_box .tips_content").html(b.tipsContent);
				var c = a(".min_tips_box .tips_content").width() / 2 + 10;
				a(".min_tips_box .tips_content").css("margin-left", "-" + c + "px")
			})();
			setTimeout(function() {
				a(".min_tips_box").hide()
			}, c)
		}
	})
})(jQuery);
</script>
<?php  echo register_jssdk();?>
<body>

<div id="liveTicketBox" class="main_box_3" <?php  if($is_join ==1) { ?>style="bottom:0;"<?php  } ?>>
	<div class="topic_ticket_one live_nexttopic_set">

<?php  if($topic['third_url']) { ?>
 <video src="<?php  echo $topic['third_url'];?>" poster="<?php  echo $topic['room_icon'];?>"  controls="controls" style="width:100%; height:200px;" >
    <source src="move.ogg" type='video/ogg; codecs="theora, vorbis"'>
    <source src="move.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' >
    <source src="move.webm"  type='video/webm; codecs="vp8, vorbis"' >
    您的浏览器暂不支持video标签。播放视频
 </video>
	
<?php  } else { ?>
 <div class="ticket_header" style=" background: url(<?php  echo $topic['room_icon'];?>) top center no-repeat;
	background-size:cover; padding-bottom: 75%;background-position: center center;"></div>
<?php  } ?>

		<!-- <?php  if($is_supermanager||$is_manager) { ?>
		<a href="javascript:;" class="ticket_push ticketPush">推送课程</a>
		<?php  } ?>
		<?php  if($is_manager) { ?>
		<a <?php  if($is_pc==1) { ?> onclick="pcClick()" <?php  } ?> href="<?php  if($is_pc==1) { ?>javascript:;<?php  } else { ?><?php  echo $this->createMobileUrl('series_create',array('series_id'=>$topic['id']))?><?php  } ?>" class="ticket_edit">编辑系列课</a>
		<?php  } ?> -->

		<style>
			/*.add-class{display:inline-block;padding:0 20px;border:1px solid #f19937;color: #f19937;border-radius: 3px;height: 32px;line-height: 32px;}*/
		.ticketTit{display: flex;justify-content: space-between;}
		.ticketTit .right{color:#c1c1c1;}
		</style>
		<dl class="ticket_content">
			<dd>
				<div class="ticketTit">
					<p class="ticket_title"><?php  echo $topic['room_name'];?></p>
					<p class="right"> 
					<a class="fromlive_focus fr " href="javascript:;" id="subsr"><i class="iconfont icon-like"></i>关注</a>
					<a class="fromlive_focus fr" id="scpoer" href="javascript:;">我的邀请卡</a>
						<!-- <span>已开课<?php  echo $last_count;?>节 |</span> -->
						<!-- <span>共<?php  echo $topic['count_subject'];?>节课</span> -->
					</p>
				</div>
				<div class="mt10">
					<!-- <span class="ticket_p2">直播间</span><a class="from_live_name " href="<?php  echo $this->createMobileUrl('c_index',array('room_id'=>$chat_room['room_id']))?>"><?php  echo $chat_room['room_name'];?></a>-->

				   
				</div>
			</dd>
			<?php  if($topic['series_price']>0) { ?>
			<!-- <dd class="mt10">
				<span class="ticket_p1">票价：</span>
				<span class="ticket_p2 priceshow">￥<var class="show_price"><?php  echo $vip;?></var></span>
			</dd> -->
			<?php  } ?>
		<!-- 	<dd class="ticket_people" >
				<div class="ticket_people_box flex">
					<div class="sub"><span class="ticket_p1 fbold">付费人数:</span><span class="ticket_p2"><?php  echo $join_count;?></span></div>
					<div class="paypeople_imgbox">

					<?php  if(is_array($join_list)) { foreach($join_list as $joins) { ?>
					  <span class="fr"><img src="<?php  echo $joins['avatar'];?>"></span>
					<?php  } } ?>

						<span><a href="javascript:;" class="pp_more_qlbgb"></a></span>
					</div>
				</div>
			</dd> -->
			<dd>
				<span class="ticket_p1 fbold">音乐介绍：</span>
				<span class="ticket_p2  show_topicInstro"><?php  echo $topic['room_desc'];?></span>
			</dd>
		</dl>
		<style>
			.arrowR{ position: relative;}
			.arrowR::before{ content: ""; position:absolute; display: block; width: 10px; height: 10px; border:2px solid; border-color:#999 #999 transparent transparent; top: 50%; -webkit-transform:translateY(-50%) scale(1) rotate(45deg);transform:translateY(-50%) scale(1) rotate(45deg); -webkit-transition: all 0.3s ease; transition: all 0.3s ease; border-radius: 2px;right: 10px;}
			.more{padding: 0 15px;}
			.more-title{padding: 8px 0;font-weight: bold;font-size: 16px;}
			.more-title a{width: 100%;height: 100%;display: inline-block;}
			.more-item{width: 49%;margin-right: 2%;float: left;margin-bottom: 10px;}
			.more-item:nth-child(n+2){margin-right: 0;}
			.imgBox{padding-top:75%;background-size: cover;background-position: center;position: relative;}
			.time{position: absolute;top: 6px;right: 2px;text-align: right;padding:0 10px;background: rgba(0,0,0,0.2);color: #fff;line-height: 20px;border-radius: 20px;}
			.price{position: absolute;bottom: 0;right: 0;padding:0 10px;color: #ff0;}
			.fr {float: right;}
			.mr10{margin-right: 10px;}
		</style>
		<div class="more">
			<!-- <div class="more-title"><p><a href="javascript:;">课程</a></p></div> -->
			<ul class="zhibo-item-box" id="topic_list">
				<?php  if(is_array($series_list)) { foreach($series_list as $topic1) { ?>
				<li class="zhibo-item">
					<a class="flex race" href="<?php  echo $this->createMobileUrl('topic_info',array('topic_id'=>$topic1['id']))?>">
						<div class="zhibo-item-img mr10"><img src="<?php  if($topic1['topic_icon']) { ?><?php  echo $topic1['topic_icon'];?><?php  } else { ?><?php  echo $chat_room['room_icon'];?><?php  } ?>" alt="" width="100%;"></div>
						<div style="flex:1;">
							<p><?php  echo $topic1['topic_name'];?></p>
							<div class="grey f12 mt5"style="line-height: 1.7;">
								<div><?php  if($topic1['ing'] == 2) { ?>
									<span class="mr10"><?php  echo $topic1['relative'];?></span><?php  } else if($topic1['ing']== 1) { ?>
									<span class="tip-tag">直播中</span><?php  } ?><span><?php  echo $topic1['begin_time'];?></span><span class="fr" style="display: none;"><?php  echo $topic1['count'];?>人次学习</span></div>
							</div>
							<?php  if($is_manager||$is_supermanager) { ?>
							<p class="f12 fr delete"style="z-index:10" data="<?php  echo $topic1['id'];?>">删除</p>
							<?php  } ?>
						</div>
					</a>

				</li>
				<?php  } } ?>
			</ul>

		</div>
	</div>

</div>
<input type="hidden" name="music_id" value="<?php  echo $topic['id'];?>">

<a class="ticket_exit2" href="javascript:;" id="toupiao">向我投票(<span><?php  echo $total;?></span>)</a>

<script type="text/javascript">
	$("#toupiao").click(function(){

              var post_url=location.href+"&op=vote";  
              $.ajax({
				     type:"post",                      //请求类型
				     url:post_url,          //URL
				   //  data:data,   //传递的参数
				     dataType: "json",                 //返回的数据类型
				    // cache: false,//上传文件无需缓存
		           //  processData: false,//用于对data参数进行序列化处理 这里必须false
		           //  contentType: false, //必须
				     success:function(result){
				     	//alert(result.msg);
	                     if(result.success==1) {    
                            $("#toupiao span").text(result.data.total);
                            $(".popup_tips").text('感谢您的投票。');
							$(".popup_tips").show();
							setTimeout(function(){$(".popup_tips").hide();}, 2000);
	                      }
	                      if(result.success==-1){
                            $(".popup_tips").text('您已投过票。');
							$(".popup_tips").show();
							setTimeout(function(){$(".popup_tips").hide();}, 2000); 
	                      }  

				    }
				  }); 

       

	});
</script>




<!-- <?php  if($is_join==0) { ?>
 

<a class="<?php  if($topic['room_paymoney']>0) { ?>ticket_exit2 payinto_btn<?php  } else { ?>ticket_exit1 manageinto_btn<?php  } ?>" href="javascript:;" id="payfor">
购买系列课
 </a>
 <?php  } else if($is_join==2) { ?>
 <a <?php  if($is_pc==1) { ?> onclick="pcClick()" <?php  } ?> href="<?php  if($is_pc==1) { ?>javascript:;<?php  } else { ?><?php  echo $this->createMobileUrl('topic_create',array('series_id'=>$topic['id'],'room_id'=>$chat_room['room_id']))?><?php  } ?>" class="ticket_exit1 manageinto_btn">新建课程</a>

<?php  } ?> -->


<div class="qlMsgTips setTopicNameBox">
	<div class="main">
	<div class="qlMT_top">话题名称</div>
	<div class="qlMT_content">
		<textarea class="qlMT_textarea nexttopicTalk" value="" placeholder="请填写话题名称"></textarea>
	</div>
	<div class="qlMTBottom">
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_cancel">取消</a></span>
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_confirm">确定</a></span>
	</div>
	</div>
</div>

<div class="qlMsgTips setGuestNameBox">
	<div class="main">
	<div class="qlMT_top">填写主讲人</div>
	<div class="qlMT_content">
		<textarea class="qlMT_textarea nexttopicTalk" value="" placeholder="请填写主讲人名称,多个主讲人或嘉宾请用空格隔开"></textarea>
	</div>
	<div class="qlMTBottom">
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_cancel">取消</a></span>
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_confirm">确定</a></span>
	</div>
	</div>
</div>
<div class="qlMsgTips setGuestIntroBox">
	<div class="main">
	<div class="qlMT_top">主持人或嘉宾介绍</div>
	<div class="qlMT_content">
		<textarea class="qlMT_textarea nexttopicTalk" value="" placeholder="请输填写主讲人或嘉宾介绍"></textarea>
	</div>
	<div class="qlMTBottom">
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_cancel">取消</a></span>
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_confirm">确定</a></span>
	</div>
	</div>
</div>
<div class="qlMsgTips setTicketPriceBox">
	<div class="main">
	<div class="qlMT_top">费用金额</div>
	<div class="qlMT_content">
		<input class="qlMT_input ticketInput" value="" placeholder="请设置费用金额">
	</div>
	<div class="qlMTBottom">
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_cancel">取消</a></span>
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_confirm">确定</a></span>
	</div>
	</div>
</div>
<div class="qlMsgTips setTicketPasswordBox">
	<div class="main">
	<div class="qlMT_top">修改密码</div>
	<div class="qlMT_content">
		<input class="qlMT_input passwordInput" value="" placeholder="请输入新密码">
	</div>
	<div class="qlMTBottom">
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_cancel">取消</a></span>
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_confirm">确定</a></span>
	</div>
	</div>
</div>
<div class="qlMsgTips setTalkShortBox">
	<span class="qlGbBg"></span>
	<div class="main">
	<div class="qlMT_top">直播概要</div>
	<div class="qlMT_content">
		<textarea class="qlMT_textarea nexttopicTalk" value="" placeholder="请填写本次直播概要或提纲"></textarea>
	</div>
	<div class="qlMTBottom">
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_cancel">取消</a></span>
		<span class="boxFlex"><a href="javascript:;" class="tlbtn_confirm">确定</a></span>
	</div>
	</div>
</div>


<div class="qlMsgTips focusQr3Box">
	<span class="qlMTBg"></span>
	<div class="main">
		<div class="qlMT_content">
			<img class="focusPic" src="<?php  echo $_W['account']['qrcode'];?>">
		</div>
		<span class="focusQr_span_1">长按二维码，识别图中二维码</span>
		<span class="focusQr_span_2">长按二维码关注，下一次开课会通知你</span>
	</div>
</div>



<div class="qlMsgTips focusLiveBox" style="display:none;">
	<div class="main">
		<div class="banner">
			<i class="ico_choose"></i><b class="banner_title">报名成功</b>
		</div>
		<div class="qlMT_content">
			<span class="focusLiveBtn on">关注本直播间，有新课通知你</span>
		</div>
		<div class="qlMTBottom">
			<span class="boxFlex"><a href="javascript:;" class="tlbtn_confirm" attr-href="http://m.qlchat.com/topic/290000040121437.htm">确定</a></span>
		</div>
	</div>
</div>

<div class="qlMsgTips shareCourseBox" style="display:none;">
	<a href="javascript:;" class="qlMTBg"></a>
	<div class="main">
		<div class="course_content">
			<span class="course_p1">1.<i class="text_state4">不要关闭此弹框</i>,点击页面右上角  <i class="menu_expland_qlbgi1"></i>,选择    <i class="menu_expland_qlbgi2"></i>   <i class="text_state6">发送给好友</i>或    <i class="menu_expland_qlbgi3"></i>   <i class="text_state6">朋友圈</i></span>
			<span class="course_p1">2.分享出的带统计的链接标题会有<i class="text_state6">‘我推荐’</i>字样，你可以通过此标记判断链接是否有效</span>
			<span class="course_p2">另外一种好玩的分享</span>
			<span class="course_p1"><a href="javascript:;" class="blktlbtn createPrivateCard" attr-sharekey="">获取专属邀请卡</a></span>
			<span class="course_p3">通过邀请卡上的二维码带来的量都算有效统计</span>
			<span class="course_bottom"><a href="javascript:;" class="course_cancel">关闭</a></span>
		</div>
	</div>
</div>


<div class="qlMsgTips pushBox" style="display:none;">
	<div class="main">
		<div class="push_top"><span>推送功能可以将您的话题推送给所有访问过直播间的公众号粉丝，目前不限次数，请谨慎使用!</span></div>
		<span class="push_span_2"></span>
		<a href="javascript:;" class="tlbtn_confirm" id="btn_newtopic">推送新课通知</a>
		<!--<a href="javascript:;" class="tlbtn_confirm" id="btn_topicbegin">推送开始通知</a>-->
		<a href="javascript:;" class="tlbtn_cancel">取消</a>
	</div>
</div>
<!-- 弹框 -->
<style>
    .flex,.flexC{display: flex;}
    .flexC{flex-direction: column;}
    .flex>.sub,.flexC>.sub{flex:1;}
    .tc{text-align: center;}
    .mid{position: absolute;z-index: 1;border-radius: 6px;top: 50%;left: 50%;transform:translate(-50%,-50%);}
    .popup{position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 99;}
    .popupbg{width: 100%;height: 100%;position: absolute;top: 0;left: 0;background: rgba(0, 0, 0, 0.5);}
    .popup_box{width: 70%;padding: 15px;background: #fff;}
    .popup_title{padding-bottom:10px;}
    .popup_content{padding: 15px 0;}
    .popup_btn{line-height: 36px;}
    .popup_btn div{padding: 0 10px;background: #f19937;color: #fff;border-radius: 6px; margin-top: 20px;}
    .popup_btn div:nth-child(2){border:1px solid  #f19937;color: #f19937;background: #fff;margin-left: 30px;}
    .popup_btn div:active{background: rgba(241, 153, 55, 0.8);}
    .popup_btn div:nth-child(2):active{background: rgba(241, 153, 55, 0.1);}
</style>
<div class="popup delete" style="display:none">
    <div class="popup_box flexC mid">
        <div class="popup_title tc gridXb"></div>
        <!-- <div class="popup_content sub">确认删除吗？</div> -->
        <div class="popup_btn flex tc"><div class="sub" id="submit">确认</div><div class="sub" id="cancel">取消</div></div>
    </div>
    <div class="popupbg"></div>
</div>
<!-- 弹出框 -->
<div class="popup msg_send" style="display:none">
    <div class="popup_box flexC mid">
        <div class="popup_title tc gridXb"></div>
        <!-- <div class="popup_content sub">确认删除吗？</div> -->
        <div class="popup_btn flex tc"><div class="sub" id="submit_msg">确认</div><div class="sub" id="cancel_msg">取消</div></div>
    </div>
    <div class="popupbg"></div>
</div>
<style>
	.mid{position: absolute;top: 50%;left: 50%;transform:translate(-50%,-50%);}
	.popup_tips{background: #f19937;display: inline-block;font-size: 14px;color: #fff;line-height: 1.5;text-align: center;border-radius: 20px;padding: 5px 20px;z-index: 10}
</style>
<div class="popup_tips mid" style="display:none">关注成功</div>

<!-- 弹出框 end -->
<!-- 返回首页悬浮框begin -->
<style>
	.backHome{
		width:40px;
		height:40px;
		border-radius: 50%;
		background: rgba(0,0,0,0.6);
		text-align: center;
		line-height: 40px;
		position: fixed;
		bottom:100px;
		right:15px;
		z-index: 100;
	}
	.backHome .iconHome{
		color:#fff;
		font-size: 24px;
	}


</style>
	<div class="backHome">
		<a href="<?php  echo $this->createMobileUrl('index')?>"><i class="iconfont icon-shouye1 iconHome"></i></a>
	</div>

<!-- 返回首页悬浮框end -->

<script type="text/javascript">
var ok ="<?php  echo $ok;?>";
var money = "<?php  echo $vip;?>";
var topic_poster="<?php  echo $this->createmobileurl('chat_topicposter')?>";
var mini_pay = false;
wx.ready(function () {
	mini_pay=window.__wxjs_environment === 'miniprogram';
});
wx.ready(function () {
    sharedata = {
        title: "<?php  echo $sharedata['title'];?>",
        desc: "<?php  echo $sharedata['desc'];?>",
        link: "<?php  echo $sharedata['link'];?>",
        imgUrl: "<?php  echo $sharedata['imgUrl'];?>",
        success:function(){
        	//ajax
        }
    };
    wx.onMenuShareAppMessage(sharedata);
    wx.onMenuShareTimeline(sharedata);
});

$(function(){
	if (ok==1){
		$("#subsr").addClass("grey");
		$('#subsr').html('<i class="iconfont icon-like"></i>取消关注');
	}
	$("#subsr ").click(function(){
		$.post(location.href,{'exmine':true},function(result){
			if(result == 1){
					$(".popup_tips").show();
					$(".popup_tips").text('关注成功');
					$("#subsr").addClass("grey");
					$('#subsr').html('<i class="iconfont icon-like"></i>取消关注');
					setTimeout(function(){$(".popup_tips").hide();}, 1000);
				}else if(result == 0){
					$(".focusQr3Box").show();
				}else{
					$(".popup_tips").text('取消关注成功');
					$("#subsr").removeClass("grey");
					$('#subsr').html('<i class="iconfont icon-like"></i>关注');
					$(".popup_tips").show();
					setTimeout(function(){$(".popup_tips").hide();}, 1000);
				}

		})
	});
	$(".delete").click(function(){
		$(".delete").show();
        $(".popup_title").text("确认删除吗？");
        topic_id=$(this).attr('data');
        $("#submit").click(function(){
            $.post(location.href,{'delete':true,"topic_id":topic_id},function(result){
                $(".delete").hide();
                if(result.success==-1){
                    $(".popup_tips").text(result.data);
                    $(".popup_tips").show();
                    setTimeout(function(){$(".popup_tips").hide();},2000);
                    location.href=location.href;
                }else{
                    location.href=location.href;
                }
            });
        });
        $("#cancel").click(function(){
            $(".delete").hide();
            topic_id='';
        });
		return false;
		// $(".race").href="javascript:;";

	});
	$(".tips_close").click(function(){
		$(".popup_tips").hide();
	});

	$(".qlMsgTips").click(function(){
		$(".qlMsgTips").hide();
	});
	$(".ticketPush").click(function(){
		$(".pushBox").show();
	});
	$("#btn_newtopic").click(function(){
		$(".msg_send").show();
        $(".popup_title").text("确认推送新课程通知吗？");

	});
	$("#submit_msg").click(function(){
        var url=location.href;
		url=url.replace("do=series_info","do=series_msgsend");
		console.log(url);
		$.post(url,{send_type:"new"},function(result){
			$(document).minTipsBox({
					tipsContent: result.data,
					tipsTime: 3
			});
			$(".msg_send").hide();
		});
    });
    $("#cancel_msg").click(function(){
    	$(".msg_send").hide();
    })
	$("#scpoer").click(function(){
		var url=location.href;
		// url=url.replace("do=topic_info","do=chat");
		$.post(url,{spoer:true,'mini_pay':mini_pay},function(result){
			if(result.success==1){
				location.href=topic_poster+"&spoerid="+result.poserid+'&mini_pay='+mini_pay;
			}
		});
	});
	$("#payfor").click(function(){
		$.post(location.href,{already_pay:true},function(result){
			if(result.success == 1){
				$(document).minTipsBox({
					tipsContent: result.data,
					tipsTime: 3
				});
				window.location.href = window.location.href;
			}else{
				window.location.href = result.data;
			}

		});
	})
});
</script>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=8&c=utility&a=visit&do=showjs&m=dg_chat"></script></body></html>