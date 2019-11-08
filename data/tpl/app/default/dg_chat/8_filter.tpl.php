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
		<script src="<?php echo TEMPLATE_PATH;?>/js/jquery.min.js"></script>
		<title><?php  if($order == 'series') { ?>系列课专栏<?php  } else { ?>话题专栏<?php  } ?></title>
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
			.mid {
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			
			.hide {
				display: none;
			}
			
			.list {
				position: relative;
			}
			
			.item-on {
				color: #fea512;
			}
			
			.listBox {
				padding: 6px 0;
				justify-content: space-between;
				align-items: center;
				overflow: hidden;
				overflow-x: auto;
				white-space: nowrap;
			}
			
			.listBox:before {
				width: 120%;
			}
			
			.listBox>ul>li {
				width: 55px;
				font-size: 14px;
				text-align: center;
				padding: 0 16px;
			}
			
			.selBox {
				position: relative;
				width: 100px;
				font-size: 13px;
			}
			
			.selInput {
				width: 100%;
				padding: 2px 6px;
			}
			
			.optBox {
				position: absolute;
				z-index: 100;
				width: 100%;
				padding-left: 6px;
				border: 1px solid #fea512;
				border-top: 0;
				background-color: #fff;
			}
			
			.optBox>div {
				line-height: 30px;
			}
			
			.arrowB::before {
				content: "";
				position: absolute;
				display: block;
				width: 12px;
				height: 12px;
				border: 2px solid;
				border-color: #999 #999 transparent transparent;
				top: 60%;
				-webkit-transform: translateY(-50%) scale(0.7) rotate(45deg);
				transform: translateY(-50%) scale(0.7) rotate(45deg);
				-webkit-transition: all 0.3s ease;
				transition: all 0.3s ease;
				border-radius: 2px;
			}
			
			.arrowB::before {
				right: 10px;
				-webkit-transform: translateY(-88%) scale(0.7) rotate(135deg);
				transform: translateY(-88%) scale(0.7) rotate(135deg);
			}
			
			.listMore.arrowB::before {
				right: 15px;
				-webkit-transform: translateY(-88%) scale(0.7) rotate(45deg);
				transform: translateY(-88%) scale(0.7) rotate(45deg);
			}
			
			.listMore {
				position: absolute;
				top: 0;
				right: 0;
				width: 38px;
				height: 38px;
				background: rgba(255, 255, 255, 1);
				z-index: 100;
			}
			
			.listMore:after {
				content: '';
				display: block;
				width: 20px;
				height: 38px;
				background: linear-gradient(270deg, rgba(255, 255, 255, 1), rgba(255, 255, 255, .6));
				position: absolute;
				top: 0;
				right: 34px;
			}
			.lineText{ overflow: hidden;text-overflow: ellipsis;}
.lineText{ white-space: nowrap;}
		</style>
		<?php  echo register_jssdk();?>
		<script type="text/javascript">
			var chat_url = "<?php  echo $this->createMobileUrl('topic_info')?>";
			var series_info = "<?php  echo $this->createMobileUrl('series_info')?>";
			var order = '<?php  echo $_GPC["order"];?>' == 'series' ? 'series' : 'live';
			var change_order = "<?php  echo $_GPC['change_order'];?>";
			var topic_tag = "0";
			var tags_id = "<?php  echo $tags_id;?>";
			wx.ready(function() {
				sharedata = {
					title: "<?php  echo $sharedata['title'];?>",
					desc: "<?php  echo $sharedata['desc'];?>",
					link: "<?php  echo $sharedata['link'];?>",
					imgUrl: "<?php  echo $sharedata['imgUrl'];?>",
					success: function() {}
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

			function getHtml(Qindex, List) {
				var html = '<li class="zhibo-item">';
				html += '<a  class="flex" href="' + chat_url + "&topic_id=" + List[Qindex].id + '">';
				html += '<div class="zhibo-item-img mr10">';
				html += '<img src="/<?php  echo $_W['config']['upload']['attachdir'];?>/' + List[Qindex].topic_icon + '" width="100%" height="100%">';
				html += '</div>';
				html += '<div class="sub"><p class="lineText">' + List[Qindex].topic_name + '</p>';
				html += '<div class="grey f12 mt5"><div>';
				if(List[Qindex].ing == 2) {
					html += '<span class="mr10">' + List[Qindex].relative + '</span>';
				} else if(List[Qindex].ing == 1) {
					html += '<span class="tip-tag">直播中</span>';
				}
				html += '<span>' + List[Qindex].begin_time + '</span>';
				if(List[Qindex].series_id != null) {
					html += '<span class="fr">系列课</span></div>';
				} else {
					html += '<span class="fr">话题</span></div>';
				}
				html += '<div><span>人气:' + List[Qindex].look_numbers + '</span>';
				if(List[Qindex].room_paymoney > 0) {
					html += '<span class="fr red">￥' + List[Qindex].room_paymoney + '</span></div>';
				} else {
					html += '<span class="fr red">免费</span></div>';
				}
				html += '</div>';
				html += '</div>';
				html += '</a>';
				html += '</li>';
				return html;
			}
			function getseriesHtml(Qindex, List) {
				var html = '<li class="zhibo-item">';
				html += '<a  class="flex" href="' + series_info + "&series_id=" + List[Qindex].id + '">';
				html += '<div class="zhibo-item-img mr10">';
				html += '<img src="' + List[Qindex].room_icon + '" width="100%" height="100%">';
				html += '</div>';
				html += '<div style="flex:1;"><p>' + List[Qindex].room_name + '</p>';
				html += '<div class="grey f12 mt5">';
				// html+='<div><span>'+List[Qindex].real_name+'</span>|<span class="mr10">共'+List[Qindex].count_subject+'节课</span></div>';
				html += '<div><span>' + List[Qindex].vate_number + '票数</span>';
				if(List[Qindex].series_price > 0) {
					html += '<span class="fr red">￥' + List[Qindex].series_price + '</span></div>';
				}else {
					html += '<span class="fr red">免费</span></div>';
				}
				html += '</div>';
				html += '</div>';
				html += '</a>';
				html += '</li>';
				return html;
			}

			var pindex = 1;

			function loadHtml(postData) {
				postData.order = order;
				postData.tags = topic_tag;
				postData.change_order = change_order;
				$.post(location.href, postData, function(result) {
					$(".loading").hide();
					if(result.pages < postData.pindex) {
						$(".noMore").show();
						return false;
					}
					pindex = result.pindex;
					var last_html = "";
					if(result.order =='series'){
						for(var qindex in result.list) {
							last_html += getseriesHtml(qindex, result.list);
						}
					}else{
						for(var qindex in result.list) {
							last_html += getHtml(qindex, result.list);
						}
					}
					

					$(".zhibo-item-box").append(last_html);
				});
			}

			$(function() {

				pageLoadCommon($(".tMain"), function() {
					pindex++;
					var postData = {
						pindex: pindex,
						order :order
					};
					loadHtml(postData);
				});

				var ing_size = $("#topic_ing").children("li").size();
				if(ing_size == 1) {
					var topic_li = $("#topic_ing").children("li").eq(0);
				}

				$(".mytag").click(function() {
					$(".optBox").hide();
					var data = $(this).attr('attr-id');

					topic_tag = data;
					pindex = 1;
					var postData = {
						pindex: pindex,
						tags: data
					};
					$(".zhibo-item-box").empty();
					loadHtml(postData);
					$(".mytag").removeClass('active');
					$(this).addClass('active');
				});

			});
		</script>

	</head>

	<body>
		<style>
			.searchBox {
				position: relative;
			}
		</style>

		<div class="tMain">
			<div class="searchBox">
				<form name="form_search" id="form_search" action="<?php  echo $this->createMobileUrl('search')?>" method="post">
					<div class="sInput">
						<input class="tc" type="text" name="keyword" value="" placeholder="搜索直播或者直播间" />
						<button><i class="iconfont icon-search btn_search"></i></button>
					</div>
				</form>
			</div>

			<?php  if($tag_record) { ?>
			<div class="tCapList mt10">
				<ul>
					<li class="mytag active" attr-id="0" >全部</li>
					<?php  if(is_array($tag_record)) { foreach($tag_record as $trecord) { ?>
					<li class="mytag" attr-id="<?php  echo $trecord['id'];?>"><?php  echo $trecord['tag_name'];?></li>
					<?php  } } ?>
				</ul>
				<div class="tCapList submenu">
					<ul>

					</ul>
				</div>
			</div>
			<?php  } ?>

			<style>
				.teachers {
					padding: 0 15px;
				}
				
				.teacher {
					margin-right: 40px;
					line-height: 40px;
					margin-bottom: 10px;
				}
				
				.teacher:nth-child(3n+3) {
					margin-right: 0;
				}
				
				.teacher-img {
					width: 40px;
					height: 40px;
					display: inline-block;
					background-size: cover;
					vertical-align: middle;
					border-radius: 50%;
					margin-right: 5px;
				}
			</style>

			<?php  if($topic_ing ) { ?> <?php  if(empty($order)) { ?>
			<div class="">

				<ul class="zhibo-item-box" id="topic_list">
					<?php  if(is_array($topic_ing)) { foreach($topic_ing as $topic) { ?>
					<li class="zhibo-item">
						<?php  if(!empty($topic['series_id'])) { ?>
						<a class="flex" href="<?php  echo $this->createMobileUrl('series_info',array('series_id'=>$topic['series_id']))?>">
							<?php  } else { ?>
							<a class="flex" href="<?php  echo $this->createMobileUrl('topic_info',array('topic_id'=>$topic['id']))?>">
								<?php  } ?>
								<div class="zhibo-item-img mr10"><img src="<?php  if($topic['topic_icon']) { ?>/<?php  echo $_W['config']['upload']['attachdir'];?>/<?php  echo $topic['topic_icon'];?><?php  } else { ?>/<?php  echo $_W['config']['upload']['attachdir'];?>/<?php  echo $chat_room['room_icon'];?><?php  } ?>" alt="" width="100%;" height="100%"></div>
								<div class="sub">
									<p class="lineText"><?php  echo $topic['topic_name'];?></p>
									<div class="grey f12 mt5">
										<div>
											<?php  if(!empty($topic['series_id'])) { ?>
											<span class="mr10">共<?php  echo $topic['count_subject'];?>节课</span> <?php  } else { ?> <?php  if($topic['ing'] == 2) { ?>
											<span class="mr10"><?php  echo $topic['relative'];?></span> <?php  } else if($topic['ing']== 1) { ?>
											<span class="tip-tag">直播中</span> <?php  } ?> <?php  } ?>

											<span><?php  echo $topic['begin_time'];?></span>
											<span class="fr">话题</span>

										</div>

										<div>
											<span>人气:<?php  echo $topic['look_numbers'];?></span>
											<span class="fr red"><?php  if($topic['room_paymoney']>0) { ?>￥<?php  echo $topic['room_paymoney'];?><?php  } else { ?>免费<?php  } ?></span>
										</div>
									</div>
								</div>
							</a>
					</li>
					<?php  } } ?>
				</ul>
			</div>
			<?php  } else { ?>
			<ul class="zhibo-item-box">
				<?php  if(is_array($topic_ing)) { foreach($topic_ing as $topic) { ?>
				<li class="zhibo-item"> <!--/<?php  echo $_W['config']['upload']['attachdir'];?>/ 文件目录-->
					<a class="flex" href="<?php  echo $this->createMobileUrl('series_info',array('series_id'=>$topic['id']))?>">
						<div class="zhibo-item-img mr10"><img src="<?php  echo $topic['room_icon'];?>" alt="" width="100%;"></div>
						<div style="flex:1;">
							<p><?php  echo $topic['room_name'];?></p>
							<div class="grey f12 mt5">
								<!-- <div>
									<span><?php  echo $topic['real_name'];?></span>|
									 <span class="mr10">共<?php  echo $topic['count_subject'];?>节课</span> 
								</div> -->

								<div>
									<span><?php  echo $topic['vate_number'];?>票数</span>
									<!-- <spanclass='pl'>好评率：95%</span> -->
									<span class="fr red"><?php  if($topic['series_price']>0) { ?>￥<?php  echo $topic['series_price'];?><?php  } else { ?>免费<?php  } ?></span>
								</div>
							</div>
						</div>
					</a>
				</li>
				<?php  } } ?>
			</ul>
			<?php  } ?> <?php  } ?>
		</div>

		<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template(footer, TEMPLATE_INCLUDEPATH)) : (include template(footer, TEMPLATE_INCLUDEPATH));?>

		
	<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=8&c=utility&a=visit&do=showjs&m=dg_chat"></script></body>

</html>