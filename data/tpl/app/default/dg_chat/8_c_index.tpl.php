<?php defined('IN_IA') or exit('Access Denied');?><!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/wtCommon.css" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/live.css" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/style_new.css?v=123" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/zhibo-item.css?v=123" />
		<script src="<?php echo TEMPLATE_PATH;?>/js/jquery.min.js"></script>
		<title><?php  echo $chat_room['room_name'];?></title>
		<style type="text/css">
		 .tMain{
		    top: 0rem;
            bottom: 1.2rem;
		    position: absolute;
		    overflow: scroll;
		    overflow-x: hidden;
		    width:100%; 
		    -webkit-overflow-scrolling: touch;
		 }
		 .fastNav {
			position: fixed;
			right: 10px;
			bottom: 8rem;
			z-index: 100;
		}.fastNav li.release {
			display: block;
			height: 50px;
			padding-top: 8px;
			background: rgba(241,153,55,1);
			color: #fff;
			line-height: 16px;
		}
		.fastNav li.release a{
		   color:#fff;
		}
		.fastNav li {
			width: 50px;
			height: 50px;
			background: rgba(241,153,55,1);
			color: #fff;
			border-radius: 50%;
			text-align: center;
			-webkit-transform: scale(0.8);
			transform: scale(0.8);
			position: relative;
			overflow: hidden;
			box-shadow: 0 0 1px rgba(0,0,0,0.2) inset;
		}	

		.grey{color: #808080;}
		.guanzhu{padding: 0 10px;display:inline-block;background: #f19937;color: #fff;border-radius: 3px;}
		.cate{padding:10px 0;border-bottom:1px solid #f5f5f5;text-align: center;}
		.cate .title-item{flex:1;}
		.cate .title-item.active,.cate .subnav.active{position: relative;color: #f19937;}
		.cate .title-item.active:before{content: '';display: block;width: 20%;height: 3px;border-radius: 1px;background: #f19937;position: absolute;bottom: -10px;left: 40%;}
		.subnav{padding: 8px 10px;display: inline-block;font-size: 14px;}

		
		</style>
		<?php  echo register_jssdk();?>
		<script type="text/javascript">
			var bg_img = "<?php  echo $chat_room['bg_img'];?>";
			var series_info = "<?php  echo $this->createMobileUrl('series_info')?>";
		var chat_url="<?php  echo $this->createMobileUrl('topic_info')?>";
		   wx.ready(function () {
			    sharedata = {
			        title: "<?php  echo $sharedata['title'];?>",
			        desc: "<?php  echo $sharedata['desc'];?>",
			        link: "<?php  echo $sharedata['link'];?>",
			        imgUrl: "<?php  echo $sharedata['imgUrl'];?>",
			        success:function(){}
			    };
			    wx.onMenuShareAppMessage(sharedata);
			    wx.onMenuShareTimeline(sharedata);
			});
		   
		   function pageLoadCommon(a, b) {
			     a.scroll(function() {
					distanceScrollCount = a[0].scrollHeight;
					distanceScroll = a[0].scrollTop;
					topicPageHight = a.height();
					//console.dir(distanceScrollCount +"-"+ distanceScroll +"-"+ topicPageHight+"="+(distanceScrollCount - distanceScroll - topicPageHight));
					2 >= distanceScrollCount - distanceScroll - topicPageHight && b()
				})
			}
		   
		   
		   function getHtml(Qindex,List){
			      var html='<li class="zhibo-item">';
			      html+='<a  class="flex" href="'+chat_url+"&topic_id="+List[Qindex].id+'">';
				  html+='<div class="zhibo-item-img mr10">';
				  html+='<img src="'+List[Qindex].topic_icon+'" width="100%" height="100%">';
				  html+='</div>';
				  html+='<div style="flex:1;"><p>'+List[Qindex].topic_name+'</p>';
				  html+='<div class="grey f12 mt5"><div>';
				  if(List[Qindex].ing==2){
				  	html+='<span class="mr10">'+List[Qindex].relative+'</span></div>';
				  }else if(List[Qindex].ing==1){
				  	html+='<span class="tip-tag">直播中</span>';
				  }
				
				  
				  html+='<span>人气:'+List[Qindex].look_numbers+'</span>';
				  if(List[Qindex].room_paymoney>0){
				  	html+='<span class="fb fr">￥'+List[Qindex].room_paymoney+'</span></div>';
				  }else{
				  	html+='<span class="fb fr">免费</span></div>';
				  }
				  
				html+='<div><span>时间:'+List[Qindex].begin_time+'</span></div>';
				  html+='</div>';
				  html+='</div>';
			      html+='</a>';
			      html+='</li>';
			      return html
			}
		   function getseriesHtml(Qindex,List){
				html='<li class="mb10">';
				html+='<a  href="'+series_info+'&series_id='+List[Qindex].id+'">';
				html+='<div class="imgBox" style="background-image: url('+List[Qindex].room_icon+');">';
				html+='<div class="info">';
				if(List[Qindex].series_price>0){
					html+='<span class="pr"><i>&yen;'+List[Qindex].series_price+'</i></span>';
				}else{
					html+='<span class="pr"><i>免费</i></span>';
				}
				html+='</div></div>';
				html+='<h3 style="margin:0;margin-top:5px;height:auto;-webkit-line-clamp: 1;">'+List[Qindex].room_name+'</h3>';
				html+='<div class="grey mt5"><p>'+List[Qindex].count+'人购买</p></div>';
				html+='</a></li>';
				return html;
				
		   }
		   
		var pindex=1; var pindex1=1;
		$(function(){
			if(bg_img !=''){
				$(".TopBox").css("background-image","url("+bg_img+")");
			}

			$(".addWx,.liveRoomBox .close").click(function(){
				var livA = $(".liveRoomBox,.liveRoomBox .box");
				if(livA.hasClass("tFadeIn")){
					livA.removeClass("tFadeIn");
					livA.addClass("tFadeOut");
					$(".tMain").removeClass("active");
				}
				else if(livA.hasClass("tFadeOut")){
					livA.removeClass("tFadeOut");
					livA.addClass("tFadeIn");
					$(".tMain").addClass("active");
				}
				else{
					livA.toggleClass("tFadeIn");
					$(".tMain").toggleClass("active");
				}
			});

			$(".infoBtn,.infoBox .close").click(function(){
				var livA = $(".infoBox,.infoBox .box");
				if(livA.hasClass("tFadeIn")){
					livA.removeClass("tFadeIn");
					livA.addClass("tFadeOut");
					$(".tMain").removeClass("active");
				}
				else if(livA.hasClass("tFadeOut")){
					livA.removeClass("tFadeOut");
					livA.addClass("tFadeIn");
					$(".tMain").addClass("active");
				}
				else{
					livA.toggleClass("tFadeIn");
					$(".tMain").toggleClass("active");
				}
			});
			
			
			 //关注设置
		  $(".addRoomSub").click(function(){
				$.post(location.href,{'focus':true},function(result){
					  if(result.success==1){
						  $(".addRoomSub").find('span').text('取消关注');
						  $(".addRoomSub i").removeClass('icon-like');
						  $(".addRoomSub i").addClass('icon-likefill');
					  }else{
						  $(".addRoomSub").find('span').text('关注直播间');
						  $(".addRoomSub i").removeClass('icon-likefill');
						  $(".addRoomSub i").addClass('icon-like');

					  }
				});
		  });
			//tag切换
			$(".title-item").click(function(){
		  		$(".title-item").removeClass('active');
		  		if($(this).attr('data') == 0){
		  			$(".topic").show();
			  		$(".introduce").hide();
			  		$(".series").hide();
			  		$(".box").hide();
		  		}else if($(this).attr('data') == 2){
		  			$(".topic").hide();
			  		$(".introduce").show();
			  		$(".series").hide();
			  		$(".box").hide();
		  		}else if($(this).attr('data') == 1){
					$(".topic").hide();
			  		$(".introduce").hide();
			  		$(".series").show();
			  		$(".box").hide();
			  		$("#info_list").hide();
		  		}else{
		  			$(".topic").hide();
			  		$(".introduce").hide();
			  		$(".series").hide();
			  		$(".box").show();
		  		}
		  		$(this).addClass("active");
	  		});
			pageLoadCommon($(".tMain"),function(){
				  pindex1++;
				  pindex++;
				  var postData={pindex1: pindex1};
				  change_tags = $(".cate").children(".active").attr('data');
				  if(change_tags == 1){
				  	var postData={pindex1: pindex1};
				  	$.post(location.href, postData, function(result){
						$(".loading").hide();
						if(result.pages1<postData.pindex1){
							$(".noMore").show();
							return false;
						}
						pindex1=result.pindex1;

						var last_html="";
						for(var qindex in result.list1){
						  last_html+=getseriesHtml(qindex,result.list1);
						}
						$("#series_list").append(last_html);
					});	
				  }else{
				  	var postData={pindex: pindex};
				  $.post(location.href, postData, function(result){
						$(".loading").hide();
						if(result.pages<postData.pindex){
							$(".noMore").show();
							return false;
						}
						pindex=result.pindex;

						var last_html="";
						for(var qindex in result.list){
						  last_html+=getHtml(qindex,result.list);
						}
						$("#topic_ing").append(last_html);
					});	
				  }
			  });
		
			var ing_size=$("#topic_ing").children("li").size();
			if(ing_size==1){
				var topic_li=$("#topic_ing").children("li").eq(0);
				//topic_li.css('width','100%');
				//topic_li.find('img').css('height','210');
			}
		});
		
		 
		</script>
		
	</head>

	<body>	
		
	<div class="tMain">
		<!--简介 start-->
		<div class="TopBox">
			 <div class="liveRoom"><img src="<?php  echo $chat_room['room_icon'];?>" width="100%" height="100%"></div>
			 <h2 class="f16"><?php  echo $chat_room['room_name'];?>
			 	<!-- <i class="f12 ml15">关注直播间人数：36人</i> -->
			 </h2>
			<span class="guanzhu mt10 addRoomSub">
				<?php  if($is_subscribe==1) { ?>
					<i class="iconfont icon-likefill mr5"></i><span style="vertical-align: 2px;">取消关注</span>
				<?php  } else { ?>
					<i class="iconfont icon-like mr5"></i><span style="vertical-align: 2px;">关注直播间</span>
				<?php  } ?>
			</span>
			<!--<span class="goumai mt10">购买直播间</span>-->

			<!-- <p class="f12 mt5"><?php  echo $chat_room['room_desc'];?></p>-->
			 <!--<div class="TopBox2">
			 <ul class="flex">
			 	<li class="addRoomSub"><i class="iconfont icon-like"></i> <span><?php  if($is_subscribe==1) { ?>取消关注<?php  } else { ?>关注直播间<?php  } ?></span></li>
			 	<li class="addWx"><i class="iconfont icon-roundadd"></i> 关注公众号</li>
				 <li class="infoBtn"><i class="iconfont icon-info"></i> 介绍</li>
			 </ul>
			 </div>-->
		</div>
		<ul class="flex cate">
			<li class="title-item active" data="0">直播课</li>
			<li class="title-item" data="1">系列课</li>
			<li class="title-item" data="2">介绍</li>
			<li class="title-item" data="4">关注公众号</li> 
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
		<style>
		.goumai {
			padding: 0 10px;
			display: inline-block;
			background: #f19937;
			color: #fff;
			border-radius: 3px;
			float: right;
			z-index:100;
		}
		</style>
	<?php  if($topic_ing ) { ?>
		<div class="mt10 topic">
				<!-- <div class="tit">正在直播</div> -->
				<ul class="zhibo-item-box" id="topic_ing">
				<?php  if(is_array($topic_ing)) { foreach($topic_ing as $topic) { ?>
				<li class="zhibo-item">
					<a class="flex" href="<?php  echo $this->createMobileUrl('topic_info',array('topic_id'=>$topic['id']))?>">
						<div class="zhibo-item-img mr10"><img src="<?php  if($topic['topic_icon']) { ?><?php  echo $topic['topic_icon'];?><?php  } else { ?><?php  echo $chat_room['room_icon'];?><?php  } ?>" width="100%" height="100%"></div>
						<div style="flex:1;">
							<p><?php  echo $topic['topic_name'];?></p>
							<div class="grey f12 mt5">
								
								<div><?php  if($topic['ing'] == 2) { ?>
									<span class="mr10"><?php  echo $topic['relative'];?></span><?php  } else if($topic['ing']== 1) { ?>
									<span class="tip-tag">直播中</span><?php  } ?> <span>人气：<?php  echo $topic['look_numbers'];?></span> <span class="fb fr"><?php  if($topic['room_paymoney']>0) { ?>￥<?php  echo $topic['room_paymoney'];?><?php  } else { ?>免费<?php  } ?></span>
								</div>
								
								<div>
									<span>时间:<?php  echo $topic['begin_time'];?></span>
									
									
									
								</div>
								
							</div>
						</div>
					</a>
				</li>
				<?php  } } ?>
			</ul>
		</div>
	<?php  } ?>
	<!-- 系列课 -->
	<?php  if($series_list ) { ?>
		<div class="tHome clearfix series"style="display:none">
			<ul class="clearfix" id="series_list">
				<?php  if(is_array($series_list)) { foreach($series_list as $topic) { ?>
					<li class="mb10">
					<a href="<?php  echo $this->createMobileUrl('series_info',array('series_id'=>$topic['id']))?>">
						<div class="imgBox" style="background-image: url(<?php  echo $topic['room_icon'];?>);">
							<div class="info">
								<span class="pr"><i><?php  if($topic['series_price']>0) { ?>&yen;<?php  echo $topic['series_price'];?><?php  } else { ?>免费<?php  } ?></i></span>
							</div>
						</div>
						<h3 style="margin:0;margin-top:5px;height:auto;-webkit-line-clamp: 1;"><?php  echo $topic['room_name'];?></h3>
						<div class="grey mt5"><p><?php  echo $topic['count'];?>人购买</p></div>
					</a>
					</li>
				<?php  } } ?>
			</ul>
		</div>
	<?php  } ?>
	<div class="introduce" style="padding:15px;display:none">
		<p class="tit">直播间介绍</p>
		<div class="mt10">
			<?php  echo $chat_room['room_desc'];?>
		</div>
	</div>	
		
	<!--/*<?php  if($topic_his ) { ?>
		<div class="tHome clearfix">
			<div class="tit">往期直播</div>
			<ul class="clearfix" id="topic_list">
			
				<?php  if(is_array($topic_his)) { foreach($topic_his as $topic) { ?>
					<li>
					<a href="<?php  echo $this->createMobileUrl('topic_info',array('topic_id'=>$topic['id']))?>">
							<div class="imgBox" style="background-image: url(<?php  if($topic['topic_icon']) { ?><?php  echo $topic['topic_icon'];?><?php  } else { ?><?php  echo $chat_room['room_icon'];?><?php  } ?>);">
								<div class="state">回放中</div>
								<div class="info">
									<span class="pr"><i><?php  if($topic['room_paymoney']>0) { ?>&yen; <?php  echo $topic['room_paymoney'];?><?php  } else { ?>免费<?php  } ?></i></span>
									<span><?php  echo $topic['look_numbers'];?>人正在参加</span>
								</div>
							</div>
							<h3><?php  echo $topic['topic_name'];?></h3>
					</a>
					</li>
				<?php  } } ?>	
			</ul>
		</div>
	<?php  } ?>
	*/-->
	</div>
	<?php  if($is_supermanager || $is_manager) { ?>
		<div class="fastNav">
		<ul>
			<li class="release"><a href="<?php  echo $this->createMobileUrl('chat_index',array('room_id'=>$room_id))?>">管理<br>房间</a></li>
		</ul>
	</div>
   <?php  } ?>
  <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template(footer, TEMPLATE_INCLUDEPATH)) : (include template(footer, TEMPLATE_INCLUDEPATH));?>
	
	
	<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=8&c=utility&a=visit&do=showjs&m=dg_chat"></script></body>

</html>