<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php  echo $chat_room['room_name'];?></title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Cache-Control" content="no-siteapp">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="email=no">
		<meta name="format-detection" content="address=no">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<script src="<?php echo TEMPLATE_PATH;?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/jq_addons.js"></script>
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/wtCommon.css">
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/live.css">
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/style_new.css?v=123" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/font/iconfont.css?v=123" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/zhibo-item.css?v=123" /> <?php  echo register_jssdk();?>
		<script type="text/javascript">
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
			var chat_url = "<?php  echo $this->createMobileUrl('chat')?>";
			var topic_info = '<?php  echo $this->createMobileUrl("topic_info")?>';
			var pindex = 1;
			var bg_img = "<?php  echo $chat_room['bg_img'];?>";
			var openid = '<?php  echo $openid;?>';
			var room_id = "<?php  echo $room_id;?>";
			var is_manager = '<?php  echo $is_manager;?>';

			function setTips(obj, topic_id) {
				chat_url = chat_url + "&topic_id=" + topic_id;
				$.post(chat_url, {
					tips: true
				}, function(result) {
					if(result.success == 1) {
						$(document).minTipsBox({
							tipsContent: "设置成功",
							tipsTime: 2
						});
						$(obj).text('取消提醒');
					} else {
						$(document).minTipsBox({
							tipsContent: "已取消",
							tipsTime: 2
						});
						$(obj).text('开课提醒');
					}
				});
			}

			function getHtml(Qindex, List) {
				var html = '';
				html += '<li class="zhibo-item flex">';
				html += '<a class="sub flex" href="' + topic_info + '&topic_id=' + List[Qindex].id + '">';
				html += '<div class="zhibo-item-img mr10"><img src="' + List[Qindex].topic_icon + '" alt="" width="100%;"></div>';
				html += '<div style="flex:1;">';
				html += '<p>' + List[Qindex].topic_name + '</p>';
				html += '<div class="grey f12">';
				html += '<div><span>' + List[Qindex].begin_time + '</span>';
				if(List[Qindex].topic_status == 2) {
					html += '<span>已结束</span>';
				}
				html += '</div>';
				if(List[Qindex].topic_type == 'public') {
					html += '<div><span class="price-type green">免费</span></div>';
				} else if(List[Qindex].topic_type == 'ticket') {
					html += '<div><span class="price-type red">￥' + List[Qindex].room_paymoney + '</span></div>';
				} else {
					html += '<div><span class="price-type grey">加密</span></div>';
				}
				html += '</div></div>';

				html += '</a>';
				if(List[Qindex].create_openid == openid || is_manager) {
					html += '<span style="padding: 16px 10px;font-size:12px;align-self: center;" class="action" data="' + List[Qindex].id + '" onclick ="action(this)">操作</span>';
				}
				html += '</li>';
				return html;
			}

			function action(obj) {
				$.post(location.href, {
					'topic_id': $(obj).attr('data'),
					"type": 'action'
				}, function(result) {
					$(".caozuo-box").show();
					$("#prem_id").val(result.id);
					var url = location.href + '&topic_id=' + result.id;
					$('.change_type').hide();
					url = url.replace("do=chat_index", "do=topic_msgsend");
					$("#url").val(url);
					$(".caozuo-content").addClass('active');
					$(".topic_name").text('直播课：' + result.topic_name);
					$('.topic_name').parent().attr('data', result.id);
					if(result.topic_status == 2) {
						$('.chat_over').hide();
					}
					if(result.topic_type == 'ticket') {
						$('.change_type').show();
					}
					return false;
				});
			}

			function pageLoadCommon(a, b) {
				a.scroll(function() {
					distanceScrollCount = a[0].scrollHeight;
					distanceScroll = a[0].scrollTop;
					topicPageHight = a.height();
					//console.dir(distanceScrollCount +"-"+ distanceScroll +"-"+ topicPageHight+"="+(distanceScrollCount - distanceScroll - topicPageHight));
					2 >= distanceScrollCount - distanceScroll - topicPageHight && b()
				})
			}

			$(function() {
				if(bg_img != '') {
					$(".TopBox").css("background-image", "url(" + bg_img + ")");
				}
				$(".liveroomGonghr").click(function() {
					$(this).toggleClass('on');
					$(".liveroomFollowBox").toggle();
				});

				/**/
				$(".btn_topic_ctrl").click(function() {
					var id = $(this).attr('attr-id');
					var url = chat_url.replace("do=chat", "do=topic_edit") + "&topic_id=" + id;
					location.href = url;

				});

				$(".series").click(function() {
					var id = $(this).attr('attr-id');
					var url = chat_url.replace("do=chat", "do=series_create") + "&series_id=" + id;
					location.href = url;

				});

				$(".title-item").click(function() {
					$(".title-item").removeClass('active');
					if($(this).attr('data') == 0) {
						$("#topic_list").show();
						$(".series_list").hide();
						$(".introduce").hide();
						$("#downline_list").hide();
						$(".box").hide();
					} else if($(this).attr('data') == 1) {
						$("#topic_list").hide();
						$(".series_list").show();
						$(".introduce").hide();
						$("#downline_list").hide();
						$(".box").hide();
					} else
					if($(this).attr('data') == 3) {
						$("#topic_list").hide();
						$(".series_list").hide();
						$(".introduce").show();
						$("#downline_list").hide();
						$(".box").hide();
					}else{
						$("#topic_list").hide();
						$(".series_list").hide();
						$(".introduce").hide();
						$("#downline_list").hide();
						$(".box").show();
					}
					$(this).addClass("active");
				});

				function setTips(topic_id) {
					alert(topic_id);
				}

				$(".room_set").click(function() {
					location.href = "<?php  echo $setting_url;?>";
				})

				
				$(".delete").click(function() {
					$(".common").show();
					$(".popup_title1").text("确认删除吗？");
					series_id =$("#prem_id").val();
					$("#submit_common").click(function() {
						$.post(location.href, {
							'delete_series': true,
							"series_id": series_id
						}, function(result) {
							$(".common").hide();
							if(result.success == -1) {
								$(".popup_tips").text(result.data);
								$(".popup_tips").show();
								setTimeout(function() {
									$(".popup_tips").hide();
								}, 2000);
								location.href = location.href;
							} else {
								//location.href = location.href;
							}
						});
					});
					$("#cancel_common").click(function() {
						$(".common").hide();
						$("#prem_id").val('');
					});
					return false;

				});

				wx.ready(function() {
					sharedata = {
						title: "<?php  echo $sharedata['title'];?>",
						desc: "<?php  echo $sharedata['desc'];?>",
						link: "<?php  echo $sharedata['link'];?>",
						imgUrl: "<?php  echo $sharedata['imgUrl'];?>",
						success: function() {
							//ajax
						}
					};
					wx.onMenuShareAppMessage(sharedata);
					wx.onMenuShareTimeline(sharedata);
				});

				pageLoadCommon($("#commonPageBox"), function() {
					pindex++;
					var postData = {
						pindex: pindex
					};
					$.post(location.href, postData, function(result) {
						$(".loading").hide();
						if(result.pages < postData.pindex) {
							$(".noMore").show();
							return false;
						}
						pindex = result.pindex;
						console.dir(result);
						var last_html = "";
						for(var qindex in result.list) {
							last_html += getHtml(qindex, result.list);
						}
						//console.dir(last_html);
						$("#topic_list").append(last_html);
						$(".btn_topic_ctrl").unbind();
						$(".btn_topic_ctrl").click(function() {
							var id = $(this).attr('attr-id');
							var url = chat_url.replace("do=chat", "do=topic_edit") + "&topic_id=" + id;
							location.href = url;

						});
					});
				});
				$(".action").click(function() {
					$.post(location.href, {
						'topic_id': $(this).attr('data'),
						"type": 'action'
					}, function(result) {
						$(".caozuo-box").show();
						$("#prem_id").val(result.id);
						var url = location.href + '&topic_id=' + result.id;
						$('.change_type').hide();
						url = url.replace("do=chat_index", "do=topic_msgsend");
						$("#url").val(url);
						$(".caozuo-content").addClass('active');
						$(".topic_name").text('直播课：' + result.topic_name);
						$('.topic_name').parent().attr('data', result.id);
						if(result.topic_status == 2) {
							$('.chat_over').hide();
						}
						if(result.topic_type == 'ticket') {
							$('.change_type').show();
						}
						return false;
					})
					return false;
				});

				$(".send_notice").click(function() {
					$(".pushBox").show();

				});
				$("#btn_newtopic").click(function() {
					$(".confirm").show();
					$("#send_type").val('new');
					$(".popup_title1").text("确认推送新课程通知吗？");
				});
				$("#btn_topicbegin").click(function() {
					$(".confirm").show();
					$("#send_type").val('begin');
					$(".popup_title1").text("确认推送本课程的即将开始通知吗？");

				});
				$("#cancel").click(function() {
					$(".confirm").hide();
				});
				$("#submit").click(function() {
					url1 = $("#url").val();
					$.post(url1, {
						send_type: $("#send_type").val()
					}, function(result1) {
						$(".confirm").hide();
						$(".pushBox").hide();
						$(".caozuo-box").hide();
						$(".caozuo-content").removeClass('active');
						$(".confirm").hide();
						$("#prem_id").val('');
						$(document).minTipsBox({
							tipsContent: result1.data,
							tipsTime: 2
						});
					});
				});
				var topic_edit = "<?php  echo $this->createMobileUrl('topic_edit')?>";
				$(".edit_topic").click(function(){
					location.href=topic_edit+'&topic_id='+$("#prem_id").val();
				})
				var pay_people = "<?php  echo $this->createMobileUrl('pay_people')?>";
				$(".pay_people").click(function(){
					if($(this).attr('data') == 1){
						var key =  '&topic_id=';
					}else{
						var key = '&series_id=';
					}
					location.href = pay_people+key+$("#prem_id").val();
				})
				$(".move_series").click(function() {
					$(".move").show();
					$(".popup_title1").text('选择你要移动的系列课');

				});
				$(".move-series").click(function() {
					var aa = document.getElementsByName('move-series');
					for(i = 0; i < aa.length; i++) {
						if(aa[i].checked) {
							$(".move-series").parent().parent().eq(i).addClass('active');
						} else {
							$(".move-series").parent().parent().eq(i).removeClass('active');

						}
					}
				});
				$("#submit_series").click(function() {
					topic_id = $("#prem_id").val();
					series_id = $(".move-series").parent().parent('.active').attr('data');
					if(series_id == '' || series_id == undefined) {
						$(".popup_tips").text('请选择系列课');
						$(".popup_tips").show();
						setTimeout(function() {
							$(".popup_tips").hide();
						}, 1000);
						return;
					}
					$.post(location.href, {
						topic_id: topic_id,
						"type": 'move',
						'series_id': series_id
					}, function(result) {
						if(result.success == 1) {
							$(".popup_tips").text(result.data);
							$(".popup_tips").show();
							setTimeout(function() {
								$(".popup_tips").hide();
							}, 1000);
							location.reload();
						}
					})
				});
				$(".chat_over").click(function() {
					$(".common").show();
					$(".popup_title1").text('确定要结束吗');
					$("#submit_common").click(function() {
						$.post("<?php  echo $this->createMobileUrl('chat_over');?>", {
							topic_id: $("#prem_id").val()
						}, function(result) {
							$(".common").hide();
							if(result.success == 1) {
								location.href = location.href + "&r=1";
							} else {
								$(".caozuo-box").hide();
								$(".caozuo-content").removeClass('active');
								$(".popup_tips").text(result.data);
								$(".popup_tips").show();
								setTimeout(function() {
									$(".popup_tips").hide();
								}, 1000);
							}
						});
					});
					$("#cancel_common").click(function() {
						$(".common").hide();
					});
				});
				$(".delete_topic").click(function() {
					$(".popup_title1").text('确定要删除吗?');
					$(".common").show();
					$("#submit_common").click(function() {
						$.post("<?php  echo $this->createMobileUrl('chat_del');?>", {
							topic_id: $("#prem_id").val()
						}, function(result) {
							$(".common").hide();
							if(result.success == 1) {
								location.href = location.href + "&r=1";
							} else {
								$(".popup_tips").text(result.data);
								$(".popup_tips").show();
								setTimeout(function() {
									$(".popup_tips").hide();
								}, 1000);
							}
						});
					});
					$("#cancel_common").click(function() {
						$(".common").hide();
					});
				});
				$("#cancel_box").click(function() {
					$(".caozuo-box").hide();
					$(".caozuo-content").removeClass('active');
				});
				$("#cancel_downline").click(function() {
					$(".downline").hide();
					$(".caozuo-content").removeClass('active');
					$("#prem_id").val('');
				});
				$("#cancel_send").click(function() {
					$(".pushBox").hide();
				});
				$("#cancel_series").click(function() {
					$(".move").hide();
					$(".move-series").prop('checked', '');
					$(".move-series").parent().parent().removeClass('active');
				});
				$(".downline_course").click(function() {
					$(".downline").show();
					$(".caozuo-content").addClass('active');
					$("#prem_id").val($(this).attr('data'));
					return false;
				});
				$(".action_camcel").click(function(){
					$(".caozuo-box").hide();
				})
			});
			function pcClick(){
				alert('请在手机端进行操作');
			}
		</script>
	</head>

	<body class="liveroom_bg">
		<div class="main_box_3" id="commonPageBox" style="top: 0rem; bottom: 0rem;">
			<input type="hidden" id="prem_id" value="">
			<input type="hidden" id="url" value="">
			<input type="hidden" id="send_type" value="">

			<div class="TopBox">
				<div class="liveRoom"><img src="<?php  echo $chat_room['room_icon'];?>" width="100%" height="100%"></div>
				<h2 class="f16"><?php  echo $chat_room['room_name'];?></h2>
				<!-- <p class="f12 mt5"><?php  echo $chat_room['room_desc'];?></p> -->
			</div>
			<div class="TopBox2 mb10 f12">
				<ul class="flex">
					<?php  if($chat_room['room_status']==1 &&$is_manager) { ?>
					<li class="sub" <?php  if($is_pc==1) { ?> onclick="pcClick()" <?php  } ?>>
						<a href="<?php  if($is_pc==1) { ?>javascript:;<?php  } else { ?><?php  echo $setting_url;?><?php  } ?>"><i class="iconfont icon-shezhi" style="font-size:12px;"></i> 直播间设置</a>
					</li>
					<?php  } ?>
				</ul>
			</div>
			<?php  if(($chat_room['room_status']==1 && $chat_room['room_desc']!='' && !empty($chat_room['tags'])) ) { ?>
			<div class="tc add-new red" <?php  if($is_pc==1) { ?> onclick="pcClick()" <?php  } ?>>
				<a href="<?php  if($is_pc==1) { ?>javascript:;<?php  } else { ?><?php  echo $topic_createurl;?><?php  } ?>">新建直播课</a>
				<a href="<?php  if($is_pc==1) { ?>javascript:;<?php  } else { ?><?php  echo $series_createurl;?><?php  } ?>">新建系列课</a>

			</div>
			<?php  } else if($chat_room['room_status']==0) { ?>
			<div class="createbtn_container" style="margin-top:8rem">
				您的直播间还未审核通过
			</div>
			<?php  } else if($chat_room['room_status']==-1) { ?>
			<div class="createbtn_container" style="margin-top:8rem">
				您的直播间已经被禁用
			</div>
			<?php  } else if($chat_room['room_status'] == 1) { ?>
			<div class="createbtn_container" style="margin-top:8rem">
				请设置直播间信息，让用户看到最好的你呦~~！
			</div>
			<?php  } ?>

			<div class="liveroom_topics">
				<?php  if($qrcode_type==1) { ?>
				<div class="liveroom_follow_box liveroomFollowBox">
					<input type="hidden" value="share" class="shareUrl">
					<p class="liveroom_QRcode">
						<img src="<?php  echo $_W['account']['qrcode'];?>">
					</p>
					<p class="liveroom_qrtips">手机端请长按图中二维码，关注公众号</p>

				</div>
				<?php  } else { ?>
				<div class="liveroom_follow_box liveroomFollowBox">
					<input type="hidden" value="share" class="shareUrl">
					<p class="liveroom_QRcode_name">请在直播间设置页面添加公众号的二维码</p>
					<p class="liveroom_QRcode">
						<img src="<?php  if($chat_room['qrcode_url'] ) { ?><?php  echo $chat_room['qrcode_url'];?><?php  } else { ?><?php echo TEMPLATE_PATH;?>/ico-noQCode.png<?php  } ?>">
					</p>
					<p class="liveroom_qrtips">手机端请长按图中二维码，关注公众号</p>

				</div>
				<?php  } ?> <?php  if($chat_room['reward_status']==1) { ?>
				<div class="guidebox redbag2func_btn" style="display:none;">
					<a href="javascript:;" style="display:none;" class="fct_close redbagfuncbox2_close"></a>
					<dl class="redbagfunc_pic">
						<dd class="func_dd1">创建者<var><?php  echo $chat_room['create_nickname'];?></var>开启了赞赏</dd>
						<dd class="func_dd2">也可以在直播间设置开启和关闭</dd>
					</dl>
				</div>
				<?php  } ?>
				<style>
					.grey {
						color: #808080;
					}
					
					.pl {
						padding-left: 5px;
					}
					
					.red {
						color: #f66;
						padding-left: 5px;
					}
					
					.green {
						color: #16c3c5;
					}
					
					.add-new {
						background: #fff;
						padding: 10px 0;
						line-height: 30px;
					}
					
					.add-new a {
						display: inline-block;
						padding:0 20px;
						/*padding: 0 2px;*/
						border: 0.1rem solid;
						border-radius: 3px;
						color: inherit;
					}
					
					.guanzhu {
						padding: 0 10px;
						display: inline-block;
						background: #f19937;
						color: #fff;
						border-radius: 3px;
					}
					
					.add-new a:active {
						background: rgba(255, 200, 200, 0.3);
					}
					
					.title-item.active,
					.subnav.active {
						position: relative;
						color: #ff3333;
					}
					
					.title-item.active:before {
						content: '';
						display: block;
						width: 20%;
						height: 3px;
						border-radius: 1px;
						background: #ff3333;
						position: absolute;
						bottom: -10px;
						left: 40%;
					}
					
					.subnav {
						padding: 8px 10px;
						display: inline-block;
						font-size: 14px;
					}
					
					.price-type {
						padding: 0 1rem;
						display: inline-block;
						border: 0.1rem solid;
						border-radius: 0.3rem;
						transform: scale(0.8);
					}
					/*操作弹出*/
					
					.caozuo-content {
						position: absolute;
						bottom: 0;
						width: 100%;
						background: #fff;
						z-index: 2;
						padding: 10px;
						transform: translateY(100%);
						transition: all .2s linear;
					}
					
					.caozuo-content.active {
						transform: translateY(0);
						transition: all .2s linear;
					}
					
					.caozuo-content li {
						padding: 10px 0;
						border-bottom: 0.1rem solid #f8f8f8;
					}
					
					.caozuo-content li:active {
						background: rgba(0, 0, 0, 0.05);
					}
					
					.caozuo-content li:last-child {
						border: none;
					}
				</style>
				<!-- 分类列表 -->
				<?php  if($chat_room['room_status']==1 && $chat_room['room_desc']!='' && $chat_room['tags'] !='' ) { ?>
				<ul class="flex tc" style="padding:10px 0;border-bottom:1px solid #f5f5f5;background:#fff;">
					<li class="sub title-item active" data="0">直播课</li>
					<li class="sub title-item" data="1">系列课</li>
					<li class="sub title-item" data="3">介绍</li>
					 <li class="sub title-item" data="4">关注公众号</li> 
				</ul>
			<div class="box" style="padding:15px;text-align: center;display:none;">
						<?php  if($qrcode_type==1) { ?>
						<h2><?php  echo $_W['account']['name'];?></h2>
						<div class="ma"><img src="<?php  echo $_W['account']['qrcode'];?>" width="160" height="160"></div>
						<?php  } else { ?>
						 <div class="ma"><img src="<?php  echo $chat_room['qrcode_url'];?>" width="160" height="160"></div>
						<?php  } ?>
						 <div style="text-align:center;font-size:11px;width:100%;">长按二维码识别关注</div>
					</div>
				<?php  } ?> <?php  if($chat_room['room_status']==1) { ?>
				<ul class="zhibo-item-box" id="topic_list">
					<?php  if(is_array($topics_ing)) { foreach($topics_ing as $topic) { ?>
					<li class="zhibo-item flex">
						<a class="sub flex" href="<?php  echo $this->createMobileUrl('topic_info',array('topic_id'=>$topic['id']))?>">
							<div class="zhibo-item-img mr10"><img src="<?php  if($topic['topic_icon']) { ?>/<?php  echo $_W['config']['upload']['attachdir'];?>/<?php  echo $topic['topic_icon'];?><?php  } else { ?>/<?php  echo $_W['config']['upload']['attachdir'];?>/<?php  echo $chat_room['room_icon'];?><?php  } ?>" alt="" width="100%;"></div>
							<div style="flex:1;">
								<p><?php  echo $topic['topic_name'];?></p>
								<div class="grey f12">
									<div>
										<span><?php  echo $topic['begin_time'];?></span> <?php  if($topic['topic_status'] == 2) { ?>
										<span>已结束</span> <?php  } ?>

									</div>

									<div>
										<?php  if($topic['topic_type'] == 'public') { ?>
										<span class="price-type green">免费</span> 
										<?php  } else if($topic['topic_type']=='ticket') { ?>
										<span class="price-type red">￥<?php  echo $topic['room_paymoney'];?></span> <?php  } else { ?>
										<span class="price-type grey">加密</span> <?php  } ?>

									</div>
								</div>
							</div>
						</a>
						<?php  if($topic['create_openid'] == $openid ||$is_manager) { ?>
						<span style="padding: 16px 10px;font-size:12px;align-self: center;" class="action" data="<?php  echo $topic['id'];?>">操作</span> <?php  } ?>
					</li>
					<?php  } } ?>
				</ul>
				<?php  } ?>
				<div class="popup  caozuo-box" style="z-index:100;display:none;background: rgba(0,0,0,.5);">
					<div class="caozuo-content">
						<ul data=''>
							<li class="topic_name">推送通知</li>
							<li class="edit_topic"><i class="iconfont icon-write"></i>编辑</li>
							<li class="send_notice"><i class="iconfont icon-tuisong"></i>推送通知</li>
							<li class="move_series"><i class="iconfont icon-go_move"></i>移动到系列课</li>
							<li class="pay_people" data='1'><i class="iconfont icon-renyuanjieshao"></i>报名人员</li>
							<!-- <li class="change_type"><i class="iconfont icon-youhuiquan"></i><a href="javasccript:;">优惠劵</a></li> -->
							<li class="chat_over"><i class="iconfont icon-jieshu1"></i>结束直播</li>
							<li class="delete_topic"><i class="iconfont icon-delete"></i>删除直播<span style="color:red">（不可恢复）</span></li>
							<li id="cancel_box">取消</li>
						</ul>
					</div>
					<div class="popupbg action_camcel"></div>
				</div>
				<div class="popup downline" style="z-index:100;display:none">
					<div class="caozuo-content">
						<ul data=''>
							<li class="course_edit"><i class="iconfont icon-write"></i>编辑</li>
							<li class="pay_people" data='2'><i class="iconfont icon-renyuanjieshao"></i>报名人员</li>
							<!-- <li class="change_type"><i class="iconfont icon-youhuiquan"></i><a href="javasccript:;">优惠劵</a></li> -->
							<li class="delete"><i class="iconfont icon-delete"></i>删除系列课<span style="color:red">（不可恢复）</span></li>
							<li id="cancel_downline">取消</li>
						</ul>
					</div>
					<div class="popupbg"></div>
				</div>

				<div class="series_list" style="display:none">
					<ul class="zhibo-item-box">
						<?php  if(is_array($series_list)) { foreach($series_list as $topic) { ?>
						<li class="zhibo-item">
							<a class="flex" href="<?php  echo $this->createMobileUrl('series_info',array('series_id'=>$topic['id']))?>">
								<div class="zhibo-item-img mr10"><img src="/<?php  echo $_W['config']['upload']['attachdir'];?>/<?php  echo $topic['room_icon'];?>" alt="" width="100%;"></div>
								<div style="flex:1;">
									<p><?php  echo $topic['room_name'];?></p>
									<div class="grey f12 mt5">
										<div>
											<span><?php  echo $topic['tag_name'];?></span>|
											<span class="mr10">共<?php  echo $topic['count_subject'];?>节课</span> <?php  if($topic['create_openid'] == $openid ||$is_manager) { ?>
											
											<span class="fr downline_course " data="<?php  echo $topic['id'];?>">操作</span> <?php  } ?>
										</div>

										<div>
											<span><?php  echo $topic['count'];?>人次</span>
											<span class="red"><?php  if($topic['series_price']>0) { ?>￥<?php  echo $topic['series_price'];?><?php  } else { ?>免费<?php  } ?></span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<?php  } } ?>
					</ul>
				</div>
				<div class="introduce" style="padding:15px;display:none">
					<p class="tit">直播间介绍</p>
					<div class="mt10">
						<?php  echo $chat_room['room_desc'];?>
					</div>
				</div>
				
				<ul class="zhibo-item-box" id="info_list" style="display: none;">
					<?php  if(is_array($info_list)) { foreach($info_list as $topic) { ?>
					<li class="zhibo-item flex">
						<a class="sub flex" href="<?php  echo $this->createMobileUrl('information_detail',array('info_id'=>$topic['id']))?>">
							<div class="zhibo-item-img mr10"><img src="/<?php  echo $_W['config']['upload']['attachdir'];?>/<?php  echo $topic['info_icon'];?>" alt="" width="100%;"></div>
							<div style="flex:1;">
								<p><?php  echo $topic['info_name'];?></p>
								<div class="grey f12">
									<div>
										<span><?php  echo $topic['create_time'];?></span> 

									</div>
								</div>
							</div>
						</a>
						<?php  if($topic['create_openid'] == $openid ||$is_manager) { ?>
						<span style="padding: 16px 10px;font-size:12px;align-self: center;" class="downline_course" data="<?php  echo $topic['id'];?>">操作</span> <?php  } ?>
					</li>
					<?php  } } ?>
				</ul>
				
			</div>
<div style="height: 70px;"></div>
		</div>


		<!-- 弹框 -->
		<style>
			.manage_bar .change:before {
				display: none;
			}
			
			.lineText {
				overflow: hidden;
				text-overflow: ellipsis;
			}
			
			.lineText {
				white-space: nowrap;
			}
			
			.flex,
			.flexC {
				display: flex;
			}
			
			.flexC {
				flex-direction: column;
			}
			
			.flex>.sub,
			.flexC>.sub {
				flex: 1;
			}
			
			.tc {
				text-align: center;
			}
			
			.mid {
				position: absolute;
				z-index: 1;
				border-radius: 6px;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			
			.popup {
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				z-index: 100;
			}
			
			.popup1 {
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				z-index: 200;
			}
			
			.popupbg {
				width: 100%;
				height: 100%;
				position: absolute;
				top: 0;
				left: 0;
				background: rgba(0, 0, 0, 0.5);
			}
			
			.popup_box {
				width: 70%;
				padding: 15px;
				background: #fff;
			}
			
			.popup_title {
				padding-bottom: 10px;
			}
			
			.popup_content {
				padding: 15px 0;
				background: #f19937;
				color: white;
				line-height: 10px
			}
			
			.popup_btn {
				line-height: 36px;
			}
			
			.popup_btn div {
				padding: 0 10px;
				background: #CCC;
				color: #fff;
				border-radius: 6px;
				margin-top: 20px;
			}
			
			.popup_btn div:nth-child(2) {
				border: 1px solid #f19937;
				color: #f19937;
				background: #fff;
				margin-left: 30px;
			}
			
			.popup_btn div:active {
				background: rgba(241, 153, 55, 0.8);
			}
			
			.popup_btn div:nth-child(2):active {
				background: rgba(241, 153, 55, 0.1);
			}
			
			.popup_box1 {
				width: 70%;
				padding: 15px;
				background: #fff;
			}
			
			.popup_title1 {
				padding-bottom: 10px;
			}
			
			.popup_content1 {
				padding: 15px 0;
			}
			
			.popup_btn1 {
				line-height: 36px;
			}
			
			.popup_btn1 div {
				padding: 0 10px;
				background: #f19937;
				color: #fff;
				border-radius: 6px;
				margin-top: 20px;
			}
			
			.popup_btn1 div:nth-child(2) {
				border: 1px solid #f19937;
				color: #f19937;
				background: #fff;
				margin-left: 30px;
			}
			
			.popup_btn1 div:active {
				background: rgba(241, 153, 55, 0.8);
			}
			
			.popup_btn1 div:nth-child(2):active {
				background: rgba(241, 153, 55, 0.1);
			}
			
			.move .popup_box1 {
				padding: 10px;
			}
			
			.move label {
				padding: 6px 10px;
				width: 100%;
			}
			
			.move input[type="radio"] {
				background: #eee;
				border: 1px solid #ccc;
				width: 20px;
				height: 20px;
				border-radius: 50%;
				text-align: center;
				position: relative;
				vertical-align: middle;
				transform: scale(0.8);
				-webkit-transform: scale(0.8);
				margin: 0;
			}
			
			.move input[type="radio"]:checked {
				background: #f19937;
				border-color: #f19937;
			}
			
			.move input[type="radio"]:checked:before {
				content: '√';
				color: #fff;
				position: absolute;
				top: 0px;
				left: 0px;
				width: 100%;
			}
			
			.move .active,
			.move li:active {
				background: rgba(241, 153, 55, 0.1);
				color: #f19937;
			}
			.autoList{
				height:102px;
				overflow: hidden;
				overflow-y: auto;
			}
		</style>
		<!-- 推送专属弹框 -->
		<div class="popup1 confirm" style="display:none">
			<div class="popup_box1 flexC mid">
				<div class="popup_title1 tc gridXb">确认删除吗？</div>
				<!--         <div class="popup_content sub"></div> -->
				<div class="popup_btn1 flex tc">
					<div class="sub" id="submit">确认</div>
					<div class="sub" id="cancel">取消</div>
				</div>
			</div>
			<div class="popupbg"></div>
		</div>
		<!-- 公共弹框 -->
		<div class="popup1 common" style="display:none">
			<div class="popup_box1 flexC mid">
				<div class="popup_title1 tc gridXb">确认删除吗？</div>
				<!--         <div class="popup_content sub"></div> -->
				<div class="popup_btn1 flex tc">
					<div class="sub" id="submit_common">确认</div>
					<div class="sub" id="cancel_common">取消</div>
				</div>
			</div>
			<div class="popupbg"></div>
		</div>
		<!-- 推送消息 -->
		<div class="popup pushBox" style="display:none">
			<div class="popup_box flexC mid">
				<div class="popup_title tc gridXb">推送功能可以将您的话题推送给所有访问过直播间的公众号粉丝，目前不限次数，请谨慎使用!</div>
				<div class="popup_content sub tc" style="margin-bottom:10px;" id="btn_newtopic">推送新课通知</div>
				<div class="popup_content sub tc" id="btn_topicbegin">推送开始通知</div>
				<div class="popup_btn flex tc">
					<div class="sub" id="cancel_send">取消</div>
				</div>
			</div>
			<div class="popupbg"></div>
		</div>
		<!-- 移动系列课 -->
		<div class="popup1 move" style="display:none">
			<div class="popup_box1 flexC mid">
				<div class="popup_title1 tc gridXb">确认删除吗？</div>
				<!-- <div class="popup_content1 sub"> -->
				<ul class="autoList">
					<?php  if(is_array($series_list)) { foreach($series_list as $list) { ?>
					<li class="gridXb " data="<?php  echo $list['id'];?>"><label class="flex"><span class="sub lineText"><?php  echo $list['room_name'];?></span><input type="radio" name="move-series" class="move-series"></label></li>
					<li class="gridXb"><label class="flex"><span class="sub lineText">22</span><input type="radio" name="move-series" id=""></label></li>
					<?php  } } ?>
				</ul>
				<!-- </div> -->
				<div class="popup_btn1 flex tc">
					<div class="sub" id='submit_series'>确认</div>
					<div class="sub" id="cancel_series">取消</div>
				</div>
			</div>
			<div class="popupbg"></div>
		</div>
		<!--关闭引导弹框-->
		<div class="geneBox funcRTips">
			<div class="main">
				<a href="javascript:;" class="gene_btn gene_cancel"></a>
				<div class="gene_top"><b>暂不开启赞赏功能？</b></div>
				<div class="gene_content alignLeft">
					<span class="lmtipsSpan">
				以后也可在直播间【设置】页面开启
			</span>
				</div>
				<div class="gene_bottom both">
					<span>
			<a href="javascript:;" class="gene_btn gene_confirm">以后再说</a>
		</span>
					<span><a href="" class="gene_btn this_close">现在开启</a></span>
				</div>
			</div>
		</div>
		<!-- 弹框 -->
		<style>
			:root{--mcolor:#16c3c5;--mcolor-active:#1AADAF;--mcolor-rgb:22,159,157;}
			.mid {
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			
			.popup_tips {
				background: #3E454C;
				display: inline-block;
				font-size: 14px;
				color: #fff;
				line-height: 1.5;
				text-align: center;
				border-radius: 20px;
				padding: 5px 20px;
				z-index: 300
			}
			/*创建直播间弹出框*/
			
			.creat-title {
				line-height: 40px;
				border-bottom: 1px solid #f5f5f5;
				color: #808080;
			}
			
			.creat-title>div:active {
				background: #f8f8f8;
			}
			
			.creat-title .active {
				color: var(--mcolor);
				position: relative;
			}
			
			.creat-title .active:before {
				content: '';
				display: block;
				width: 30%;
				height: 3px;
				background: var(--mcolor);
				position: absolute;
				bottom: 0;
				left: 35%;
			}
			
			.write-msg {
				margin-bottom: 10px;
				border: 1px solid #eee;
				width: 100%;
				height: 40px;
				padding: 0 10px;
				outline: none;
			}
			
			input.write-msg:focus {
				border: 1px solid var(--mcolor);
				background: #f8f8f8;
			}
			
			.yanzheng-img {
				height: 40px;
				margin-left: 10px;
			}
			
			.tips {
				color: var(--mcolor);
				font-size: 12px;
			}
			
			.tips input[type='checkbox'] {
				width: 16px;
				height: 16px;
				border-radius: 2px;
				background: #eee;
				border: 1px solid #ddd;
				vertical-align: middle;
			}
			
			.tips input[type='checkbox']:checked {
				background: var(--mcolor);
				border-color: var(--mcolor);
			}
			
			.tips input[type='checkbox']:checked:before {
				content: '√';
				color: #fff;
				display: block;
				width: 100%;
				height: 100%;
				top: 0;
				left: 0;
				text-align: center;
				transform: scale(0.8);
			}
			
			.zhuce-btn {
				background: var(--mcolor);
				color: #fff;
				border: none;
				outline: none;
				padding: 8px 30px;
				border-radius: 3px;
				display: inline-block;
				margin-top: 20px;
			}
			
			.zhuce-btn:active {
				background: var(--mcolor-active);
			}
			/*课目*/
			
			.grade6 {
				
				overflow: hidden;
				padding: 15px 0;
				background: #fff;
				justify-content: space-between;
				flex-wrap: wrap;
			}
			
			.grade6 li {
				width: 30%;
				box-sizing: border-box;
				border: 1px solid #ccc;
				text-align: center;
				line-height: 2em;
				color: #999;
			}
			.flex .mb5:last-child{
				border: 1px solid #ccc
			}
			
			.grade6 li.active{ background: #16c3c5; color: #fff; border-color: #16c3c5;}
		</style>
		<div class="popup_tips mid" style="display:none"></div>


		<!-- 关注二维码 -->
		<div class="geneBox focusQr2Box">
			<div class="main">
				<div class="gene_content">

				</div>
				<span class="focusQr_span_1">长按二维码，识别图中二维码</span>
				<span class="focusQr_span_2">有新直播，会提醒你</span>
			</div>
		</div>
		
		

		<div id="pageLoadBox"></div>

		<div class="page_loading_box" style="display: none;">
			正在加载中...
		</div>

		<div class="qlSelectBox topicListCtrl">
			<b class="qlSlBg"></b>
			<div class="main">
				<ul class="selectUl">
					<li class="btn_topic_del">删除</li>
				</ul>
			</div>
		</div>

		<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template(footer, TEMPLATE_INCLUDEPATH)) : (include template(footer, TEMPLATE_INCLUDEPATH));?>

		<div class="loadingBox"><span></span></div>

	<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=8&c=utility&a=visit&do=showjs&m=dg_chat"></script></body>

</html>