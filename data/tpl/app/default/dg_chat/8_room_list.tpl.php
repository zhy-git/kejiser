<?php defined('IN_IA') or exit('Access Denied');?><!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/wtCommon.css" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/live.css" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/style_new.css" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/zhibo-item.css" />
		<script src="<?php echo TEMPLATE_PATH;?>/js/jquery.min.js"></script>
		<title><?php  echo $share['share_title'];?></title>
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
		 span.active{color:#f19937;}	
		 .fastNav {
    position: fixed;
    right: 10px;
    bottom: 8rem;
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
.lineText{ overflow: hidden;text-overflow: ellipsis;}
.lineText{ white-space: nowrap;}

		</style>
		<?php  echo register_jssdk();?>
		<script type="text/javascript">
		var series_info = "<?php  echo $this->createMobileUrl('series_info')?>";
		var c_index="<?php  echo $this->createMobileUrl('c_index')?>";
		var toptag='fine';
		var topic_tag="0";
		var subscr="已关注";
		var subnoscr="关注";
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
			      var html="<li>";
			      html+='<a href="'+c_index+"&room_id="+List[Qindex].room_id+'">';
				  html+='<div class="avatar">';
				  html+='<img src="'+List[Qindex].room_icon+'" width="100%" height="100%">';
				  html+='</div>';
				  html+='<h2>'+List[Qindex].room_name+'</h2>';
				  html+='<p class="lineText">'+List[Qindex].room_desc+'</p>';
				  if(List[Qindex].time_small){
				  	html+="<p>"+List[Qindex].time_small+"开播</p>";
				  }
			      html+='</a>';
			      if(List[Qindex].isin==1){
					  html+='<span class="atten" onclick="onsubscr('+List[Qindex].room_id+',this)"><i class="iconfont icon-likefill"></i>'+subscr+'</span>';
				  }else{
					  html+='<span class="atten active" onclick="onsubscr('+List[Qindex].room_id+',this)"><i class="iconfont icon-like"></i>'+subnoscr+'</span>';
				  }
			      html+='</li>';
			      return html;
			}
		   
		var pindex=1; 
		function loadHtml(postData){
			  postData.tags=topic_tag;
			  $.post(location.href, postData, function(result){
					$(".loading").hide();
					if(result.pages<postData.pindex){
						$(".noMore").show();
						return false;
					}
					pindex=result.pindex;
					if(result.condition == 'room') {
						var last_html="";
						for(var qindex in result.list){
						  last_html+=getHtml(qindex,result.list);
						}
						$("#room_list").append(last_html);
					}else if(result.condition == 'topic'){
						var last_html="";
						for(var qindex in result.list){
						  last_html+=gettopicHtml(qindex,result.list);
						}
						$("#topic_list").append(last_html);
					}else{
						var last_html="";
						for(var qindex in result.list){
						  last_html+=getseriesHtml(qindex,result.list);
						}
					$("#topic_list").append(last_html);
					}
					
				});	
		}
		function gettopicHtml(Qindex,List){
			      var html='<li class="zhibo-item">';
			      html+='<a  class="flex" href="'+chat_url+"&topic_id="+List[Qindex].id+'">';
				  html+='<div class="zhibo-item-img mr10">';
				  html+='<img src="'+List[Qindex].topic_icon+'" width="100%" height="100%">';
				  html+='</div>';
				  html+='<div class="sub"><p class="lineText">'+List[Qindex].topic_name+'</p>';
				  html+='<div class="grey f12 mt5"><div>';
				  if(List[Qindex].ing==2){
				  	html+='<span class="mr10">'+List[Qindex].relative+'</span>';
				  }else if(List[Qindex].ing==1){
				  	html+='<span class="tip-tag">直播中</span>';
				  }
				  html+='<span>'+List[Qindex].begin_time+'</span>';
				  if(List[Qindex].series_id!=null){
				  	html+='<span class="fr">系列课</span></div>';
				  }else{
				  	html+='<span class="fr">话题</span></div>';
				  }
				  html+='<div><span>人气:'+List[Qindex].look_numbers+'</span>';
				  if(List[Qindex].room_paymoney>0){
				  	html+='<span class="fr red">￥'+List[Qindex].room_paymoney+'</span></div>';
				  }else{
				  	html+='<span class="fr red">免费</span></div>';
				  }
				  html+='</div>';
				  html+='</div>';
			      html+='</a>';
			      html+='</li>';
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
				
				html += '<div><span>' + List[Qindex].count + '人次学习</span>';
				if(List[Qindex].series_price > 0) {
					html += '<span class="fr red">￥' + List[Qindex].common_price + '</span></div>';
				}else {
					html += '<span class="fr red">免费</span></div>';
				}
				html += '</div>';
				html += '</div>';
				html += '</a>';
				html += '</li>';
				return html;
			}

		$(function(){

			pageLoadCommon($(".tMain"), function() {
					if($(".tagtype.active").attr("data") == 0) {
						pindex++;
						var postData = {
							pindex: pindex,
							condition: 'series'
						};
						loadHtml(postData);
					} else if($(".tagtype.active").attr("data") == 1) {
						pindex++;
						var postData = {
							pindex: pindex,
							condition: 'topic'
						};
						loadHtml(postData);
					} else {
						pindex++;
						var postData = {
							pindex: pindex,
							condition: 'room'
						};
						loadHtml(postData);
					}
				})			
			
			$(".mytag").click(function(){
				 var data=$(this).attr('attr-id');
				 topic_tag=data;
				 pindex=1;
				 if($(".tagtype.active").attr('data') == 0){
				 	var postData={pindex: pindex,tags:data,condition:'series'};
				 }else if($(".tagtype.active").attr('data') == 1){
				 	var postData={pindex: pindex,tags:data,condition:'topic'};
				 }else{
				 	var postData={pindex: pindex,tags:data,condition:'room'};
				 }
				 
				 $("#room_list").empty();
				 $("#topic_list").empty();
				 loadHtml(postData);
				 $(".mytag").removeClass('active');
				 $(this).addClass('active');
			});
			$(".tagtype").click(function() {
					data = $(this).attr('data');
					$("#topic_list").empty();
					$("#room_list").empty();
					pindex = 1;
					if(data == 0) {
						var postData = {
							pindex: pindex,
							condition: 'series'
						};
						$("#series_list").empty();
					} else if(data == 1) {
						var postData = {
							pindex: pindex,
							condition: 'topic'
						};
						$("#topic_list").empty();
					} else {
						var postData = {
							pindex: pindex,
							condition: 'room'
						};
						$("#room_list").empty();
					}
					loadHtml(postData);
					$(".tagtype").removeClass("active");
					$(this).addClass('active');
					var data = $(this).attr('data');

				});
			
			
		});
		function onsubscr(room_id,obj){
			var url=c_index+"&room_id="+room_id;
			$.post(url,{'focus':true},function(result){
				if(result.success==1){
					$(obj).removeClass('active');
					$(obj).html('<i class="iconfont icon-likefill"></i>已关注');
				}else{
					$(obj).addClass('active');
					$(obj).html('<i class="iconfont icon-like"></i>关注')
				}
			});
		}
		</script>
		
	</head>

	<body>	
		
	<div class="tMain">
		
 <div class="tNav tc f16">
	    	<div class="search f18"><!-- <i class="iconfont icon-search green"></i> --></div>
	    	<div class="searchBox" style="display:block;">
	    		<!-- <div class="cancel gray f14">搜索</div> -->
	    		<form name="form_search" id="form_search" action="<?php  echo $this->createMobileUrl('search')?>" method="post">
		    		<div class="sInput">
		    			<input type="text" name="keyword" value="" placeholder="搜索直播或者直播间" />
		    			<button><i class="iconfont icon-search btn_search"></i></button>
		    		</div>
	    		</form>
	    	</div>
	    </div>
	    <script>
	    	$(function(){
	    		$(".btn_search").click(function(){
	    			var text=$("keyword").val();
	    			if(text==""){
	    				return false;
	    			}
	    			$("#form_search").submit();
	    		});
	    	})
	    </script>
	
	
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
	<div class="tCapList" style="padding:8px 15px;color:#999;">
			<span style="float:right;">
				<span class="tagtype" data='1'>直播话题</span>
				<span style="margin:0 6px;color:#ddd;">|</span>
				<span class="tagtype" data='0'>系列课</span>
				<span style="margin:0 6px;color:#ddd;">|</span>
				<span class="tagtype active" data='2'>直播间</span>
			</span>
	</div>


		<div class="list searchZb" >
			<ul  id="room_list">
			<?php  if(is_array($topic_his)) { foreach($topic_his as $room) { ?>
				<li>
					<a href="<?php  echo $this->createMobileUrl('c_index',array('room_id'=>$room['room_id']))?>">
						<div class="avatar"><img src="<?php  echo $room['room_icon'];?>" width="100%" height="100%"></div>
						<h2 class="lineText"><?php  echo $room['room_name'];?></h2>
						<p  class="lineText"><?php  echo $room['room_desc'];?></p>
						<?php  if($room['time_small']) { ?><p><?php  echo $room['time_small'];?>开播</p><?php  } ?>
					</a>
					<?php  if(empty($room['isin'])) { ?>
					<span class="atten active" onclick="onsubscr(<?php  echo $room['room_id'];?>,this)"><i
							class="iconfont icon-like"></i> 关注
					</span>
					<?php  } else { ?>
					<span class="atten" onclick="onsubscr(<?php  echo $room['room_id'];?>,this)"><i
							class="iconfont icon-likefill"></i> 已关注
					</span>
					<?php  } ?>
				</li>
		    <?php  } } ?>
		    
			</ul>
		</div>

	<!-- 话题 -->
	<div class="huati">
		<ul class="zhibo-item-box" id="topic_list">
			<?php  if(is_array($topic_ing)) { foreach($topic_ing as $topic) { ?>
			<li class="zhibo-item">
				<a class="flex" href="{<?php  echo $this->createMobileUrl('topic_info',array('topic_id'=>$topic['id']))?>}">
					<div class="zhibo-item-img mr10"><img src="<?php  if($topic['topic_icon']) { ?><?php  echo $topic['topic_icon'];?><?php  } else { ?><?php  echo $chat_room['room_icon'];?><?php  } ?>" alt="" width="100%;"></div>
					<div style="flex:1;">
						<p class="lineText"><?php  echo $topic['topic_name'];?></p>
						<div class="grey f12 mt5">
							<div><?php  if($topic['ing'] == 2) { ?>
								<span class="mr10"><?php  echo $topic['relative'];?></span><?php  } else if($topic['ing']== 1) { ?>
								<span class="tip-tag">直播中</span><?php  } ?><span><?php  echo $topic['begin_time'];?></span><span class="fr"><?php  if($topic['topic_type'] == 'series') { ?>系列课<?php  } else { ?>话题<?php  } ?></span></div>
							<div><span>人气:<?php  echo $topic['look_numbers'];?></span><span class="fb fr"><?php  if($topic['room_paymoney']>0) { ?>￥<?php  echo $topic['common_price'];?><?php  } else { ?>免费<?php  } ?></span></div>
						</div>
					</div>
				</a>
			</li>
			<?php  } } ?>
		</ul>
		</div>
	
	
</div>
	
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template(footer, TEMPLATE_INCLUDEPATH)) : (include template(footer, TEMPLATE_INCLUDEPATH));?>
	
	
	<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=8&c=utility&a=visit&do=showjs&m=dg_chat"></script></body>

</html>