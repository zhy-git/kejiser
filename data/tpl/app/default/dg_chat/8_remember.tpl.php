<?php defined('IN_IA') or exit('Access Denied');?>
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/ceng.css">
<?php  if($show_its==1) { ?>
	<div class="ceng">
		<div class="zhiboTime">
			<div class="live-over-img"></div>
			<div class="live-over-remind">
				<p class="remind-time">距离上课<span class="time day" ></span>天<span class="time hour" ></span>时<span class="time mini"></span>分<span class="time sec" ></span>秒</p>
				<div class="live-review">
					<div class="live-review-button" onclick='into_discuss()'>
						进入讨论
					</div>
				</div>
			</div>
		</div>
		<div class="zhiboceng"></div>
	</div>
<?php  } ?>
<?php  if($topic['topic_status'] == 1 &&$istopic_begin ==1) { ?>
	<div class="ceng" >
		<div class="zhiboTime">
			<div class="live-over-img"></div>
			<div class="live-over-now">
				<img src="<?php echo TEMPLATE_PATH;?>/images/down-btn.gif" alt="" class="now-img">
				<p class="remind-text">正在直播</p>
				<div class="live-review">
					<div class="live-review-button"  onclick='start_look()'>
						开始观看
					</div>
				</div>
			</div>
		</div>
		<div class="zhiboceng"></div>
	</div>
	<?php  } ?>
	<?php  if($istopic_end) { ?>
	<div class="ceng"  >
		<div class="zhiboTime">
			<div class="live-over-img"></div>
			<div class="live-over-back">
				<p class="back-text">
					直播已结束
				</p>
				<p class="back-look">
					您可以回看全部内容
				</p>
				<div class="live-review">
					<div class="live-review-button" onclick='start_look()'>
						开始回看
					</div>
				</div>
			</div>
			
		</div>
		<div class="zhiboceng"></div>
	</div>
	<?php  } ?>
<script>
	function start_look(){
		$(".ceng").hide();
		if(type_style == 1){
			$("#"+first_voice+"").children('.sp-content').children('.sp-con').children('.recordingMsg').click();
		}else if(type_style == 3){
			/*调用播放器进行播放*/ 
			player=new qcVideo.Player("id_video_container_2", option,playStatus);
			var evt = "onorientationchange" in window ? "orientationchange" : "resize";
			window.addEventListener(evt,resize,false);
			player.play();
		}else if(type_style ==2){
			 player = new qcVideo.Player("id_video_container_1", {
			 "live_url" : "<?php  echo $qc_data['playurl'];?>", 
			 "live_url2" : "<?php  echo $qc_data['playurl2'];?>", 
			 "h5_start_patch" : {"url":"<?php  if(!empty($topic['topic_icon'])) { ?><?php  echo $topic['topic_icon'];?><?php  } else { ?><?php  echo $chat_room['room_icon'];?><?php  } ?>",stretch: true},
			 "width" :"100%", 
			 "audioPlay":true,
			 "height" : 200 
			 }); 
		}
	}
	function into_discuss(){
		$(".ceng").hide();
		$("#commBtn").click();
	}
</script>