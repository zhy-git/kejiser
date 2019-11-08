<?php defined('IN_IA') or exit('Access Denied');?><!doctype html>
<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/wtCommon.css" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/live.css" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/style_new.css?v=1" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/zhibo-item.css?v=1" />
	<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/font-awesome.min.css" />
	<script src="<?php echo TEMPLATE_PATH;?>/js/jquery.min.js"></script>

	<title><?php  echo $share['share_title'];?></title>
	<style type="text/css">
		.tMain {
			top: 0rem;
			bottom: 1.2rem;
			position: absolute;
			overflow: scroll;
			overflow-x: hidden;
			width: 100%;
			-webkit-overflow-scrolling: touch;
		}
	</style>
	<?php  echo register_jssdk();?>
	<script type="text/javascript">
		var chat_url = "<?php  echo $this->createMobileUrl('topic_info')?>";
		var series_info = "<?php  echo $this->createMobileUrl('series_info')?>";
		var toptag = 'fine';
		var topic_tag = "0";
		var template_type = "<?php  echo $template_type;?>";
		wx.ready(function () {
			sharedata = {
				title: "<?php  echo $sharedata['title'];?>",
				desc: "<?php  echo $sharedata['desc'];?>",
				link: "<?php  echo $sharedata['link'];?>",
				imgUrl: "<?php  echo $sharedata['imgUrl'];?>",
				success: function () { }
			};
			wx.onMenuShareAppMessage(sharedata);
			wx.onMenuShareTimeline(sharedata);
		});

		function pageLoadCommon(a, b) {
			a.scroll(function () {
				distanceScrollCount = a[0].scrollHeight;
				distanceScroll = a[0].scrollTop;
				topicPageHight = a.height();
				//console.dir(distanceScrollCount +"-"+ distanceScroll +"-"+ topicPageHight+"="+(distanceScrollCount - distanceScroll - topicPageHight));
				2 >= distanceScrollCount - distanceScroll - topicPageHight && b()
			})
		}


		function getHtml(Qindex, List, template_type) {
			if (template_type == 2) {
				var html = '<li>';
				html += '<a href="' + chat_url + "&topic_id=" + List[Qindex].id + '">';
				html += '<div class="imgBox" style="background-image:url(' + List[Qindex].topic_icon + ')">';
				if (List[Qindex].ing == 1) {
					html += '<div class="state"><i>正</i><i>在</i><i>直</i><i>播</i></div>';
				} else if (List[Qindex].ing == 2) {
					html += '<div class="state"><i>即</i><i>将</i><i>开</i><i>始</i></div>';
				} else {
					html += '<div class="state">回放中</div>';
				}
				html += '<div class="info">';
				if (List[Qindex].room_paymoney > 0) {
					html += '<span class="pr"><i>&yen;' + List[Qindex].room_paymoney + '</i></span>';
				} else {
					html += '<span class="pr"><i>免费</i></span>';
				}
				html += '<span>人气:' + List[Qindex].look_numbers + '</span></div></div>';
				html += '<h3>' + List[Qindex].topic_name + '</h3>';
				html += '</a></li>';
			} else {
				var html = '<li class="zhibo-item">';
				html += '<a  class="flex" href="' + chat_url + "&topic_id=" + List[Qindex].id + '">';
				html += '<div class="zhibo-item-img mr10">';
				html += '<img src="' + List[Qindex].topic_icon + '" width="60" height="60">';
				html += '</div>';
				html += '<div style="flex:1;"><p>' + List[Qindex].topic_name + '</p>';
				html += '<div class="grey f12 mt2"><span>';
				if (List[Qindex].ing == 2) {
					html += '<span class="mr10">' + List[Qindex].relative + '</span>';
				} else if (List[Qindex].ing == 1) {
					html += '<span class="tip-tag">直播中</span><span>人气：' + List[Qindex].look_numbers + '</span>';
				}

				// html+='<span>'+List[Qindex].begin_time+'</span>';
				if (List[Qindex].series_id != null) {
					html += '</div>';
				} else {
					html += '</div>';
				}

				html += '</span><div><div>';
				if (List[Qindex].room_paymoney > 0) {
					html += '<span class="fr red">￥' + List[Qindex].room_paymoney + '</span></div>';
				} else {
					html += '<span class="fr red">试听</span></div>';
				}
				html += '</div>';
				html += '</div>';
				html += '</a>';
				html += '</li>';

			}
			return html;
		}

		var pindex = 1;
		function loadHtml(postData) {
			//			  postData.order=toptag;
			postData.tags = topic_tag;
			$.post(location.href, postData, function (result) {
				$(".loading").hide();
				if (result.pages < postData.pindex) {
					$(".noMore").show();
					return false;
				}
				pindex = result.pindex;
				var last_html = "";
				for (var qindex in result.list) {
					last_html += getHtml(qindex, result.list, template_type);
				}
				$("#topic_list").append(last_html);
			});
		}


		$(function () {

			$(".liveRoom,.liveRoomBox .close").click(function () {
				$(".liveRoom").toggleClass("tFadeIn");
				var livA = $(".liveRoomBox,.liveRoomBox .box");
				if (livA.hasClass("tFadeIn")) {
					livA.removeClass("tFadeIn");
					livA.addClass("tFadeOut");
				}
				else if (livA.hasClass("tFadeOut")) {
					livA.removeClass("tFadeOut");
					livA.addClass("tFadeIn");
				}
				else {
					livA.toggleClass("tFadeIn");
				}
			})

			pageLoadCommon($(".tMain"), function () {
				pindex++;
				var postData = { pindex: pindex };
				loadHtml(postData);
			});

			var ing_size = $("#topic_ing").children("li").size();
			if (ing_size == 1) {
				var topic_li = $("#topic_ing").children("li").eq(0);
			}

			$(".toptag").click(function () {
				var data = $(this).attr('data');
				toptag = data;
				pindex = 1;
				var postData = { pindex: pindex, order: data };
				$("#topic_list").empty();
				loadHtml(postData);
				$(".toptag").removeClass('active');
				$(this).addClass('active');
			});

			$(".mytag").click(function () {
				var data = $(this).attr('attr-id');
				topic_tag = data;
				pindex = 1;
				var postData = { pindex: pindex, tags: data };
				$("#topic_list").empty();
				loadHtml(postData);
				$(".mytag").removeClass('active');
				$(this).addClass('active');
			});

		});

	</script>

</head>

<body style="margin:auto;">

	<div class="tMain">
		<script>
			$(function () {
				$(".tNav .search").click(function () {
					$(".tNav .searchBox").css("display", "block");
				})
				$(".tNav .cancel").click(function () {
					$(".tNav .searchBox").css("display", "none");
				})
				$(".btn_search").click(function () {
					var text = $("keyword").val();
					if (text == "") {
						return false;
					}
					$("#form_search").submit();
				});
			})
		</script>
		<style>
			.tNav .search {
            left: inherit;
            right: 0;
		  	z-index: 100;
		  	background-image: linear-gradient(90deg, transparent , #fff 30%);
		  }
		.searchBox{
			z-index: 100;
		}  

		.tag-box{
			padding-bottom: 10px;
			border-bottom: 1px solid #ECECEC;
		}
		.tag-box .tab-item-icon{
			width: 40px;
			height: 40px;
			display: block;
			margin: 0 auto;
		}
		.tag-box .item-font{
			font-size: 12px;
			display:block;
		}
		.searchBoxMin{background: #fff;padding: 10px 0}
		.searchBox{position: relative;top:inherit;left: inherit; background: #fff;width:90%;border-radius: 100%;}
		.sInput input[type="text"]{/*background: #f5f5f5;*/border:1px solid #c3c3c3;box-shadow: 0 0 10px rgba(0,0,0,0.05);}		
		</style>
		<?php  if($pic_record) { ?>
		<div class="tHeader">
			<div class="searchBoxMin">
				<div class="searchBox">
					<form name="form_search" id="form_search" action="<?php  echo $this->createMobileUrl('search')?>" method="post">
						<div class="sInput">
							<input class="tc" type="text" name="keyword" value="" placeholder="搜索直播或者直播间" />
							<button><i class="iconfont icon-search btn_search"></i></button>
						</div>
					</form>
				</div>
			</div>
			<div class="swiper-container">
				<!--搜索-->

				<div class="swiper-wrapper">
					<?php  if(is_array($pic_record)) { foreach($pic_record as $precord) { ?>
					<div class="swiper-slide">
						<a href="<?php  echo $precord['link'];?>">
							<img src="<?php  echo $precord['thumb'];?>" width="100%">
							<!--<h2 class="gallerytitle"><?php  echo $precord['bannername'];?></h2>-->
						</a>
					</div>
					<?php  } } ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
			<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/swiper.css" />
			<script src="<?php echo TEMPLATE_PATH;?>/js/swiper.jquery.min.js"></script>
			<script type="text/javascript">
				var swiper = new Swiper('.swiper-container', {
					pagination: '.swiper-pagination',
					autoplay: 3000,
					speed: 400,
					autoplayDisableOnInteraction: false,
				});
			</script>
		</div>
		<?php  } ?>
		<style>
			.tag-box {
				padding: 10px 30px;
				padding-bottom: 7px !important;
				display: -webkit-flex;
				/* Safari */
				-webkit-flex-wrap: wrap;
				/* Safari 6.1+ */
				display: flex;
				flex-wrap: nowrap;
			}

			.toptag {
				margin-bottom: 10px;
				margin-right: 13px;
				flex: 1;
				-webkit-flex: 1;
			}

			.toptag-a {
				width: 100%;
			}

			.toptag:last-child {
				margin-right: 0;
			}

			.tag-box .tab-item-icon {
				width: 20px;
				height: 20px;
				font-size: 18px;
				display: inline-block;
				color: #fff;

			}

			.tag-box {
				padding: 17px 15px;
			}

			.tag-box-p {
				width: 44px;
				height: 44px;
				line-height: 44px;
				border-radius: 50%;
				text-align: center;
				background: #eee;
				display: inline-block;
			}

			.tag-box-p1 {
				width: 44px;
				height: 44px;
				line-height: 44px;
				border-radius: 50%;
				text-align: center;
				background: #eee;
				display: inline-block;
			}

			.perference-box {
				border: 0 none;
				margin-top: 15px;
			}

			.tCapList ul:after {
				height: 0 ! important;
			}
		</style>
		<div>
			<ul class="tag-box tc clearfix" style="border:none;">
				<?php  if(is_array($navbar_list)) { foreach($navbar_list as $list) { ?>
				<li class="toptag tc">
					<?php  if($list['url_type'] == 1) { ?>
					<a href="<?php  echo $list['url'];?>" class="toptag-a">
						<?php  } else { ?>
						<a href="<?php  echo $this->createMobileUrl('inner',array('id'=>$list['id_page']))?>" class="toptag-a">
							<?php  } ?>
							<?php  if($list['icontype'] == 1) { ?>
							<p class="tag-box-p">
								<i class="icon <?php  echo $list['inco'];?> tab-item-icon" style="color:<?php  echo $list['color'];?>"></i>
							</p>

							<?php  } else { ?>
							<img class="tag-box-p" src="<?php  echo $list['inco'];?>" alt="">
							<?php  } ?>
							<span class="item-font"><?php  echo $list['title'];?></span></a>
				</li>

				<?php  } } ?>
			</ul>
		</div>
		<div style="height:10px;width:100%;background:#f5f5f5;"></div>
		<?php  if($tag_record) { ?>
		<div class="tCapList">
			<ul>
				<li class="mytag active" attr-id="0">全部</li>
				<?php  if(is_array($tag_record)) { foreach($tag_record as $trecord) { ?>
				<li class="mytag" attr-id="<?php  echo $trecord['id'];?>"><?php  echo $trecord['tag_name'];?></li>
				<?php  } } ?>
			</ul>
		</div>
		<?php  } ?>

		<?php  if($template_type==1 || $template_type=="") { ?>
		<?php  if($fine_list1) { ?>
		<div class="perference-box">
			<div class="tit">
				精选音乐
				<a class="f12" href="<?php  echo $this->createMobileUrl('filter',array('order'=>'series'))?>">更多></a>
			</div>
			<ul class="zhibo-item-box">
				<?php  if(is_array($fine_list1)) { foreach($fine_list1 as $index => $topic) { ?>
				<li class="zhibo-item">
					<a class="flex" href="<?php  echo $this->createMobileUrl('series_info',array('series_id'=>$topic['id']))?>">
						<div class="zhibo-item-img mr10"><img src="<?php  echo $topic['room_icon'];?>" alt="" width="60" height="60"></div>
						<div style="flex:1;">
							<p><?php  echo $topic['room_name'];?></p>
							<div class="grey f12 mt5">
								<!-- <div>

									<span class="mr10">共<?php  echo $topic['count_subject'];?>节课</span>
								</div> -->

								<div>
									<span>票数： <font style="color: red;"> <?php  echo $total1[$index];?></font></span>
									<span class="fr red"><?php  if($topic['series_price']>0) { ?>￥<?php  echo $topic['series_price'];?><?php  } else { ?>试听<?php  } ?></span>
								</div>
							</div>
						</div>
					</a>
				</li>
				<?php  } } ?>
			</ul>
		</div>
		<?php  } ?>

		<?php  if($topic_ing ) { ?>
		<div class="">
			<div class="tit" id="tit">精选话题
				<a class="f12" href="<?php  echo $this->createMobileUrl('filter')?>">更多></a>
			</div>

			<ul class="zhibo-item-box" id="topic_list">
				<?php  if(is_array($topic_ing)) { foreach($topic_ing as $topic) { ?>
				<li class="zhibo-item">
					<?php  if(!empty($topic['series_id'])) { ?>
					<a class="flex" href="<?php  echo $this->createMobileUrl('series_info',array('series_id'=>$topic['series_id']))?>">
						<?php  } else { ?>
						<a class="flex" href="<?php  echo $this->createMobileUrl('topic_info',array('topic_id'=>$topic['id']))?>">
							<?php  } ?>
							<div class="zhibo-item-img mr10"><img src="<?php  if($topic['topic_icon']) { ?><?php  echo $topic['topic_icon'];?><?php  } else { ?><?php  echo $chat_room['room_icon'];?><?php  } ?>"
								 alt="" width="60" height="60"></div>
							<div class="sub">
								<p>
									<?php  echo $topic['topic_name'];?>
								</p>
								<div class="grey f12 mt2">
									<div>
										<span>

											<?php  if($topic['ing'] == 2) { ?>
											<span class="mr10"><?php  echo $topic['relative'];?></span>
											<?php  } else if($topic['ing']== 1) { ?>
											<span class="tip-tag">直播中</span>
											<?php  } else { ?>
											<span class="mr10">已结束</span>
											<?php  } ?>
										</span>
										<span>人气：<?php  echo $topic['look_numbers'];?></span>
										<span class="fr red"><?php  if($topic['room_paymoney']>0) { ?>￥<?php  echo $topic['room_paymoney'];?><?php  } else { ?>免费<?php  } ?></span>
									</div>
								</div>
							</div>
						</a>
				</li>
				<?php  } } ?>
			</ul>
		</div>
		<?php  } ?>
		<?php  } else { ?>
		<?php  if($fine_list1 ) { ?>
		<div class="tHome clearfix" style="margin-top:10px;">
			<div class="tit">
				精选音乐
				<a class="f12" href="<?php  echo $this->createMobileUrl('filter',array('order'=>'series'))?>">更多></a>
			</div>
			<ul class="clearfix">
				<?php  if(is_array($fine_list1)) { foreach($fine_list1 as $index => $topic) { ?>
				<li>
					<a href="<?php  echo $this->createMobileUrl('series_info',array('series_id'=>$topic['id']))?>">
						<div class="imgBox" style="background-image:url(<?php  echo $topic['room_icon'];?>)">
							<!-- <div class="state">共<?php  echo $topic['count_subject'];?>节课</div> -->
							<div class="info">
								<span class="pr"><i><?php  if($topic['series_price']>0) { ?>&yen; <?php  echo $topic['series_price'];?><?php  } else { ?>试听<?php  } ?></i></span>
								<span>票数: <font style="color: red;"> <?php  echo $total1[$index];?></font></span>
							</div>
						</div>
						<h3><?php  echo $topic['room_name'];?></h3>
					</a>
				</li>
				<?php  } } ?>
			</ul>
		</div>
		<?php  } ?>

		<?php  if($topic_ing ) { ?>
		<div class="tHome clearfix" style="margin-top:10px;">
			<div class="tit" id="tit">精选话题
				<a class="f12" href="<?php  echo $this->createMobileUrl('filter')?>">更多></a>
			</div>
			<ul class="clearfix" id="topic_list">
				<?php  if(is_array($topic_ing)) { foreach($topic_ing as $topic) { ?>
				<li>
					<a href="<?php  echo $this->createMobileUrl('topic_info',array('topic_id'=>$topic['id']))?>">
						<div class="imgBox" style="background-image:url(<?php  if($topic['topic_icon']) { ?><?php  echo $topic['topic_icon'];?><?php  } else { ?><?php  echo $chat_room['room_icon'];?><?php  } ?>)">
							<div class="state"><?php  if($topic['ing']==1) { ?><i>正</i><i>在</i><i>直</i><i>播</i><?php  } else if($topic['ing']==2) { ?><i>即</i><i>将</i><i>开</i><i>始</i><?php  } else { ?>回放中<?php  } ?></div>
							<div class="info">
								<span class="pr"><i><?php  if($topic['room_paymoney']>0) { ?>&yen; <?php  echo $topic['room_paymoney'];?><?php  } else { ?>免费<?php  } ?></i></span>
								<span>人气:<?php  echo $topic['look_numbers'];?></span>
							</div>
						</div>
						<h3><?php  echo $topic['topic_name'];?></h3>
					</a>
				</li>
				<?php  } } ?>
			</ul>
		</div>
		<?php  } ?>
		<?php  } ?>
	</div>
	<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template(footer, TEMPLATE_INCLUDEPATH)) : (include template(footer, TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=8&c=utility&a=visit&do=showjs&m=dg_chat"></script></body>

</html>