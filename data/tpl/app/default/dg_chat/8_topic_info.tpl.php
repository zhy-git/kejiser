<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php  echo $topic['topic_name'];?></title>
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
<script>
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
<script type="text/javascript">
var istopic_end=<?php  echo $istopic_end;?>;
var istopic_begin=<?php  echo $istopic_begin;?>;
var begin_time=<?php  echo $topic['begin_time'];?>;
var topic_poster="<?php  echo $this->createmobileurl('chat_topicposter')?>";
	var fnTimeCountDown = function(d, o){
		var f = {
			haomiao: function(n){
				if(n < 10)return "00" + n.toString();
				if(n < 100)return "0" + n.toString();
				return n.toString();
			},
			zero: function(n){
				var n = parseInt(n, 10);//解析字符串,返回整数
				if(n > 0){
					if(n <= 9){
						n = "0" + n;	
					}
					return String(n);
				}else{
					return "00";	
				}
			},
			dv: function(){
				//d = d || Date.UTC(2050, 0, 1); //如果未定义时间，则我们设定倒计时日期是2050年1月1日
				var now = new Date();
				//现在将来秒差值
				//alert(future.getTimezoneOffset());
				var dur = (d - now.getTime()) / 1000 , mss = d - now.getTime() ,pms = {
					hm:"000",
					sec: "00",
					mini: "00",
					hour: "00",
					day: "00",
					month: "00",
					year: "0"
				};
				if(mss > 0){
					pms.hm = f.haomiao(mss % 1000);
					pms.sec = f.zero(dur % 60);
					pms.mini = Math.floor((dur / 60)) > 0? f.zero(Math.floor((dur / 60)) % 60) : "00";
					pms.hour = Math.floor((dur / 3600)) > 0? f.zero(Math.floor((dur / 3600)) % 24) : "00";
					pms.day = Math.floor((dur / 86400)) > 0? f.zero(Math.floor((dur / 86400))) : "00";// % 30
					//月份，以实际平均每月秒数计算
					pms.month = Math.floor((dur / 2629744)) > 0? f.zero(Math.floor((dur / 2629744)) % 12) : "00";
					//年份，按按回归年365天5时48分46秒算
					pms.year = Math.floor((dur / 31556926)) > 0? Math.floor((dur / 31556926)) : "0";
				}else{
					pms.year=pms.month=pms.day=pms.hour=pms.mini=pms.sec="00";
					pms.hm = "000";
					//location.reload(true);
					return;
				}
				return pms;
			},
			ui: function(){			
				if(o.hm){
					o.hm.html(f.dv().hm);
				}
				if(o.sec){
					o.sec.html(f.dv().sec);
				}
				if(o.mini){
					o.mini.html(f.dv().mini);
				}
				if(o.hour){
					o.hour.html(f.dv().hour);
				}
				if(o.day){
					o.day.html(f.dv().day);
				}
				if(o.month){
					o.month.html(f.dv().month);
				}
				if(o.year){
					o.year.html(f.dv().year);
				}			
				setTimeout(f.ui, 1);			
			}
		};	
	f.ui();
	};
	
function pcClick(){
		alert('请在手机端进行操作');
	}
$(function(){
	 var zxx = {
			  obj: function(){
			             return {
			                 sec: $(".sec"),
			                 mini: $(".mini"),
			                 hour: $(".hour"),
			                 day: $(".day")
			             }
			  }
		 };
			 
	if(!istopic_end&&istopic_begin==0){
		  fnTimeCountDown(begin_time+'000', zxx.obj());
	}
})
</script>
<body>
<style>
.main_box_3{bottom: 4rem;}
body{background: #f8f8f8;}
.arrowR{ position: relative;}
.arrowR::before{ content: ""; position:absolute; display: block; width: 10px; height: 10px; border:2px solid; border-color:#999 #999 transparent transparent; top: 50%; -webkit-transform:translateY(-50%) scale(1) rotate(45deg);transform:translateY(-50%) scale(1) rotate(45deg); -webkit-transition: all 0.3s ease; transition: all 0.3s ease; border-radius: 2px;right: 10px;}
.more-title{padding: 8px 15px;font-weight: bold;font-size: 16px;background: #fff;}
.more-title a{width: 100%;height: 100%;display: inline-block;}
.more-item{width: 49%;margin-right: 2%;float: left;margin-bottom: 10px;}
.more-item:nth-child(n+2){margin-right: 0;}
.imgBox{padding-top:75%;background-size: cover;background-position: center;position: relative;}
.time{position: absolute;top: 6px;right: 2px;text-align: right;padding:0 10px;background: rgba(0,0,0,0.2);color: #fff;line-height: 20px;border-radius: 20px;}
.price{position: absolute;bottom: 0;right: 0;padding:0 10px;color: #ff0;}
.fr {float: right;}
.mr10{margin-right: 10px;}
</style>
<div id="liveTicketBox" class="main_box_3">
	<div class="topic_ticket_one live_nexttopic_set">
	<div class="ticket_header" style=" background: url(<?php  echo $topic['topic_icon'];?>) top center no-repeat;
	background-size:cover; padding-bottom: 75%;background-position: center center;"></div>
		<?php  if($is_supermanager||$is_manager) { ?>
		<a href="javascript:;" class="ticket_push ticketPush">推送信息</a>
		<?php  } ?>
		<?php  if($is_manager) { ?>
		<a <?php  if($is_pc==1) { ?> onclick="pcClick()" <?php  } ?> href="<?php  if($is_pc==1) { ?>javascript:;<?php  } else { ?><?php  echo $this->createMobileUrl('topic_edit',array('topic_id'=>$topic['id']))?><?php  } ?>" class="ticket_edit">编辑话题</a>
		<?php  } ?>
		
		<dl class="ticket_content">
			<dd>
				<p class="ticket_title"><?php  echo $topic['topic_name'];?></p>
				<div class="mt10">
					<span class="ticket_p1 fbold">直播间</span><a class="from_live_name " href="<?php  echo $this->createMobileUrl('c_index',array('room_id'=>$chat_room['room_id']))?>"><?php  echo $chat_room['room_name'];?></a>
				    <a class="fromlive_focus fr " href="javascript:;" id="subsr"><i class="iconfont icon-like"></i>关注</a>
					<a class="fromlive_focus fr" id="scpoer" href="javascript:;">我的邀请卡</a>
				</div>
				<div class="">
					<span class="ticket_p1">
						<var class="show_startTime"><?php  echo date('Y-m-d H:i:s', $topic['begin_time']);?></var>
					</span>
					<span class="fr grey"><i class="iconfont icon-attentionfill"></i><span class="ticket_p1"><?php  echo $topic['look_numbers'];?>人次</span>
				</div>
				<?php  if($istopic_end==0&&$istopic_begin==0) { ?>
				<div class="ql_start_box qlTimerShow">
					<div class="ql_timer">
						<span>倒计时</span>
						<dl>
							<dd><var class="day">00</var>天</dd>
							<dd><var class="hour">00</var>时</dd>
							<dd><var class="mini">00</var>分</dd>
							<dd><var class="sec">00</var>秒</dd>
						</dl>
					</div>
				</div>
				<?php  } ?>
			</dd> 		
			<?php  if($topic['room_paymoney']>0) { ?>
			<dd class="mt10">
				<span class="ticket_p1">票价：</span>
				<span class="ticket_p2 priceshow">￥<var class="show_price"><?php  echo $topic['room_paymoney'];?></var></span>
			</dd>
			<?php  } ?>
			<dd class="ticket_people">
				<div class="ticket_people_box flex">
					<div class="sub"><span class="ticket_p1 fbold">报名人数:</span><span class="ticket_p2"><?php  echo $join_count;?></span></div>
					<div class="paypeople_imgbox">
					
					<?php  if(is_array($join_list)) { foreach($join_list as $joins) { ?>
					  <span class="fr"><img src="<?php  echo $joins['avatar'];?>"></span>
					<?php  } } ?>
						
						<!-- <span><a href="javascript:;" class="pp_more_qlbgb"></a></span> -->
					</div>
				</div>
			</dd>
			
			<dd class="mt10">
				<div class="show_guestName">
					<span class="ticket_p1 fbold">歌手:</span><span><?php  echo $topic['guest_name'];?></span>
				</div>
				<div class="ticket_p2">
					
					<span class="ticket_p2 show_guestInstro"><?php  echo $topic['guest_info'];?></span>
				</div>
			</dd>
			<dd>
				<span class="ticket_p1 fbold">课程介绍：</span>
				<span class="ticket_p2  show_topicInstro"><?php  echo $topic['topic_desc'];?></span>
			</dd>
		</dl>
	</div>

</div>

<?php  if(($is_pay==0 && $is_pay!='')) { ?>
	<?php  if($is_supermanager||$is_manager) { ?>
	<a class="ticket_exit1 manageinto_btn" href="<?php  echo $this->createMobileUrl('chat',array('topic_id'=>$topic['id'],'fuid'=>$fuid))?>">进入</a>
	<?php  } else { ?>
	<a href="javascript:;" class="ticket_exit1 payinto_btn" id="payfor">购买系列课</a>
	<?php  } ?>
<?php  } else { ?>
<a class="<?php  if($topic['room_paymoney']>0) { ?>ticket_exit2 manageinto_btn<?php  } else { ?>ticket_exit1 manageinto_btn<?php  } ?>" href="<?php  echo $this->createMobileUrl('chat',array('topic_id'=>$topic['id'],'fuid'=>$fuid))?>">
	<?php  if($is_join>0) { ?>
	   进入
	<?php  } else { ?>
	   报名进入
	<?php  } ?>
 </a>
<?php  } ?>



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
		<a href="javascript:;" class="tlbtn_confirm" id="btn_newtopic">推送信息通知</a>
		<a href="javascript:;" class="tlbtn_confirm" id="btn_topicbegin">推送开始通知</a>
		<a href="javascript:;" class="tlbtn_cancel">取消</a>
	</div>
</div>

<!-- 弹出框 -->
<style>
	.mid{position: absolute;top: 50%;left: 50%;transform:translate(-50%,-50%);}
	.popup_tips{background: #3E454C;background: rgb(0,0,0);opacity:0.5;display: inline-block;font-size: 14px;color: #fff;line-height: 1.5;text-align: center;border-radius: 20px;padding:8px 26px;}
	
	
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
	<!-- <div class="backHome">
		<a href="<?php  echo $this->createMobileUrl('index')?>"><i class="iconfont icon-shouye1 iconHome"></i></a>
	</div> -->

<!-- 返回首页悬浮框end -->

<script type="text/javascript">
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
	var ok ="<?php  echo $ok;?>";
	var mini_pay = false;
	wx.ready(function () {
		mini_pay=window.__wxjs_environment === 'miniprogram';
	});
	if (ok==1){
		$("#subsr").addClass("grey");
		$('#subsr').html('<i class="iconfont icon-like"></i>取消关注');
	}
	$("#subsr ").click(function(){
//		var url = "<?php  echo $this->createmobileurl('c_index')?>";
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
		});
		
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
		var conf=confirm("确认推送新课程通知吗？");
		if(!conf){return;}		
		var url=location.href;
		url=url.replace("do=topic_info","do=topic_msgsend");
		$.post(url,{send_type:"new"},function(result){
			$(document).minTipsBox({
					tipsContent: result.data,
					tipsTime: 3
			});
		});
	});
	$("#scpoer").click(function(){
		var url=location.href;
		url=url.replace("do=topic_info","do=chat");
		$.post(url,{spoer:true,'mini_pay':mini_pay},function(result){
			if(result.success==1){
				location.href=topic_poster+"&spoerid="+result.poserid+'&mini_pay='+mini_pay;
			}
		});
	});
	$("#btn_topicbegin").click(function(){
		var conf=confirm("确认推送本课程的即将开始通知吗？");
		if(!conf){return;}		
		var url=location.href;
		url=url.replace("do=topic_info","do=topic_msgsend");
		$.post(url,{send_type:"begin"},function(result){
			$(document).minTipsBox({
					tipsContent: result.data,
					tipsTime: 3
			});
		});
	});
	$("#payfor").click(function(){
		var url ="<?php  echo $this->createmobileurl('series_info',array('series_id'=>$topic['series_id']))?>"; 
		$.post(url,{already_pay:true},function(result){
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
	$(".manageinto_btn").click(function(){
		$.post(location.href,{'checkout':true},function(result){
			if(result.success == -1){
				$(".popup_tips").text(result.msg);
				$(".popup_tips").show();
				setTimeout(function(){$(".popup_tips").hide(); location.href = "<?php  echo $this->createMobileUrl('edit',array('topic_id'=>$topic['id'],'fuid'=>$fuid))?>";},2000)
				
				
			}else if(result.success == -2){
				$(".focusQr3Box").show();
			}else{
				url = "<?php  echo $this->createMobileUrl('chat',array('topic_id'=>$topic['id'],'fuid'=>$fuid))?>";
				location.href = url;  
			}
		
		})
		return false;
	})
});
</script>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=8&c=utility&a=visit&do=showjs&m=dg_chat"></script></body></html>