<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="" />
<meta name="description" content="" />
<title><?php  if($reply['mobtitle']) { ?><?php  echo $reply['mobtitle'];?><?php  } else { ?>抢红包<?php  } ?></title>
<link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/images/index.css?v=5423" />
<!-- <link rel="stylesheet" href="../addons/hm_newdpm/mobimg/bottom.css?v=2014324320424" /> -->
<link rel="stylesheet" type="text/css" href="../addons/haoman_base/base/animate.min.css?v=5053333" />
<script type="text/javascript" src="../addons/haoman_base/base/jquery-2.1.4.min.js?v=2016071822351"></script>
<style type="text/css" id="_zoom"></style>
<script type="text/javascript" src="../addons/hm_newdpm/mobimg/index.js?v=20161124170424"></script>
<style>
/*.menulist .menu_item4 {
    border-top: 6px solid rgb(255, 207, 13);
}
.menulist div a img {
    margin-bottom: 2px;
}*/
.red_bg{background-image:url(<?php  echo $bg;?>);left: 0;top: 0; position: absolute; height: 100%; width: 100%;background-size: 100% 100%;background-repeat: no-repeat;}
</style>
</head>
<body>

<div id="load" style="width: 100%;height: 100%;background: rgba(0,0,0,0.9);z-index: 999999;position: fixed;top: 0px;bottom:
0px;left: 0px;right: 0px;">
	<div id="circle"></div><div id="circle1"></div>
</div>

<?php  if($reply['isallowip']!=1) { ?>
<script>
	$(document).ready(function(){
		$("#load").fadeOut(10);
		$("#circle").fadeOut(10);
		$("#circle1").fadeOut(10);
	});
</script>
<?php  } ?>

<?php  if($reply['isqhb']==0) { ?>
<div id="div1"><img src="<?php  echo $bg;?>" /></div> 

<div class="demo" style="margin-bottom: 10%;">
    <div class="wrap" >
			<div id="xiu_pay" class="xiu_pay"></div>
   </div>
</div>
<?php  } ?>

<?php  if($reply['isqhb']==2) { ?>
<div class="red_bg">
	<div class="red-ts"></div>
	<div class="red-ss-bg">
		<span class="red-ss yaoyiyao"></span>
	</div>
</div>
<?php  } ?>

<div class="animated zoomIn afScrollbar" id="result">
	<?php  if($reply['show_type']==1) { ?>
	<div class="modal-backdrop2">
			<?php  if(empty($addad_url)) { ?><?php  } else { ?><a href="<?php  echo $addad_url;?>"><?php  } ?>
		    <div class="wdeg" id="resbg" style="width: 100%;text-align: center;">
				<img  src="<?php  echo toimage($addad_img)?>" style="width: 96%;margin-top: 2%;">
			</div>
		   <?php  if(empty($addad_url)) { ?><?php  } else { ?></a><?php  } ?>
			<div class="zjbg" style="margin-top: 30px;">
				<!-- <img id="resimg" src="../addons/hm_newdpm/images/item8.jpg" class="zjimg"> -->
				<span id="restitle" style="color: #fe2d2d;font-size: 24px;font-weight: bold;line-height: 48px;">恭喜您抽中好东西</span>
				<a class="close_b to_share" style="background: #fede2d;color: #9a12e8;border-radius: 6px;margin-top: 15px;">炫耀一下</a>
				<a class="close_b b_again" style="background: #cd334d;color: #fff;border-radius: 6px;">再抽一次</a>
				<a class="close_b sendCard2" style="background: #cd334d;color: #fff;border-radius: 6px;display: none">领取卡券</a>
			</div>

		<div style="clear: both"></div>
	</div>
	<?php  } else { ?>
	<div class="modal-backdrop">
		<div class="zjbg" style="margin-top: 35%;">
			<img id="resimg" src="../addons/hm_newdpm/images/item8.jpg" class="zjimg">
			<span id="restitle" style="color: #cd334d;font-size: 18px;font-weight: bold">恭喜您抽中好东西</span>
			<a class="close_b to_share" style="background: #fede2d;color: #9a12e8;border-radius: 6px;margin-top: 15px;">炫耀一下</a>
			<a class="close_b b_again" style="background: #cd334d;color: #fff;border-radius: 6px;">再抽一次</a>
			<a class="close_b sendCard2" style="background: #cd334d;color: #fff;border-radius: 6px;display: none">领取卡券</a>
		</div>
		<div style="clear: both"></div>
	</div>
	<?php  } ?>
</div>


<div class="nothingbg">等待中...</div>
<div class="pw">
	<p id="pwtitle">等待中...</p>
	<p>
		<div style="margin-top: 10px;margin-bottom: 20px;width: 80%;height:44px;line-height: 44px;;border-radius: 100px;background: #fff;margin-left: 10%">
			<input id="title" type="text" style="margin-left: 10px;border-radius: 100px;margin-bottom: 4px;height: 36px;width: 65%;background: #fff;border: none" placeholder="请使用抽奖码获取更多机会！">
			<span id="btnx" style="display: inline-block;text-align: center;color:#fff;font-weight:bold;width:22%;height:40px;background: red;border-radius: 50px;line-height: 40px;float: right;margin-top: 2px;margin-right: 2px;">确定</span>
		</div>
	</p>
</div>

<div class="act-rule-wrap" id="share">
	<div class="modal-backdrop">
		<img src="../addons/hm_newdpm/images/sharebg.png" style="width: 100%">
	</div>
</div>

<?php  if($reply['isqhb']==0) { ?>
<audio id="audio" loop="loop" preload="preload">
	<source src="../addons/haoman_base/dpm/music.mp3" type="audio/mpeg" />
</audio>
<?php  } ?>


<?php  if($reply['isqhb']==2) { ?>
<audio preload="auto" id="audio1" src="../addons/haoman_base/dpm/red-01.mp3"></audio>
<audio preload="auto" id="audio2" src="../addons/haoman_base/dpm/red-02.mp3"></audio>
<?php  } ?>
<div class="power-by" style="position: fixed;bottom: 50px;width: 100%;left: 0px;right: 0px;font-size: 12px;text-align: center;color:#EAB387;">
	<div class="copyright fixed"><?php  if(empty($reply['copyright'])) { ?> &copy;<?php  echo $_W['account']['name'];?><?php  } else { ?>&copy;<?php  echo $reply['copyright'];?><?php  } ?></div>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script>

<?php  if($reply['isqhb']==2) { ?>
if(window.DeviceMotionEvent) {
   var speed = 19;
   var x = y = z = lastX = lastY = lastZ = 0;
   window.addEventListener('devicemotion', function(event){
    var acceleration =event.accelerationIncludingGravity;
   x = acceleration.x;
   y = acceleration.y;
   if(Math.abs(x-lastX) > speed || Math.abs(y-lastY) > speed) {
      startgame();
   }
   lastX = x;
   lastY = y;
   }, false);
};
<?php  } ?>


var start=true;
var numbertimes = "<?php  echo $Lcount;?>";
var type = "<?php  echo $reply['is_openbbm'];?>";
var t = function date_2() {
   $('#xiu_pay').append('<div class="scale"></div>');  
} 
$('#xiu_pay').click(function(){
	startgame();
})

function startgame(){

	<?php  if($reply['isqhb']==1) { ?>
	alert("抢红包活动未开启，请随时留意大屏幕")
	return;
	<?php  } ?>
	<?php  if($reply['isqhb']==2) { ?>
	audio1.play();
	<?php  } ?>

    if(start){
    	start=false;

			if(numbertimes!=0){

				<?php  if($reply['isqhb']==0) { ?>
				$(".wrap").append("<div id='dice_mask'></div>");//加遮罩
				$(this).css('transform','scale(0.98)');
				$(this).css('-moz-transform','scale(0.98)');
				$(this).css('-webkit-transform','scale(0.98)');
				$(this).css('-o-transform','scale(0.98)');
				setTimeout(function(){
					$('.xiu_pay').css({'transform':'scale(1)'});
					$('.xiu_pay').css({'-moz-transform':'scale(1)'});
					$('.xiu_pay').css({'-webkit-transform':'scale(1)'});
					$('.xiu_pay').css({'-o-transform':'scale(1)'});
				},500);
				var audioAuto = document.getElementById('audio');
				audioAuto.play();
				$('#xiu_pay').append('<div class="scale"></div>');
				setTimeout(t,1000);
				setTimeout(t,2000);
				<?php  } ?>

				setTimeout(function(){

					$.post("<?php  echo $this->createMobileUrl('get_award', array('from_user' => $page_from_user,'id' => $rid,'cardrowid'=>$cardArry['card_rowid']))?>",function(data) {

						if(data.success==2){
							$(".nothingbg").html(data.msg);
							$('.nothingbg').show(1000);
							$(".scale").remove();
							setTimeout(function(){
								$(".nothingbg").hide(1000);
								$("#dice_mask").remove();
								start=true;
							},4000)
							return;
						}

						if(data.success==4){
							<?php  if($reply['is_openbbm']==1) { ?>
							$("#pwtitle").html(data.msg);
							$('.pw').show(1000);
							$(".scale").remove();
							<?php  } else { ?>
							$(".nothingbg").html(data.msg);
							$('.nothingbg').show(1000);
							$(".scale").remove();
							setTimeout(function(){
								$(".nothingbg").hide(1000);
							},4000)
							<?php  } ?>
							return;
						}
						if(data.success==5){
							$(".nothingbg").html(data.msg);
							$('.nothingbg').show(1000);
							$(".scale").remove();
							setTimeout(function(){
								$(".nothingbg").hide(1000);
								location.href = "<?php  echo $this->createMobileUrl('qhbIndex', array('id' => $rid))?>";
							},4000)
							return;
						}
						if(data.success==6){
							$(".nothingbg").html(data.msg);
							$('.nothingbg').show(1000);
							$(".scale").remove();
							setTimeout(function(){
								$(".nothingbg").hide(1000);
								location.href = "<?php  echo $this->createMobileUrl('qhbIndex', array('id' => $rid))?>";
							},4000)
							return;
						}
						if(data.success==1){
							<?php  if($reply['isqhb']==2) { ?>
							audio2.play();
							<?php  } ?>
							var prizename = data.award.prizename;
							var ptype = data.ptype;

							if(ptype == 0){
								name = '¥'+ data.award.credit/100;
								namer = '红包'+ data.award.credit/100 + '元';

							}else if(ptype == 2){
								name = '礼包';
								namer = prizename;
							}
									else if(ptype == 3){
								name = '积分';
								namer = '积分'+ data.award.jifen + '分';
							}
							else{
								name = '卡券';
								namer = prizename;
							}
							if(ptype == 1){
								$(".scale").remove();
								$("#resimg").attr('src', data.award.awardsimg);
								$("#restitle").html('恭喜您抽中'+namer);
								$(".b_again").hide();
								$(".sendCard2").show();
								$('#result').show();

							}else{
								$(".scale").remove();
								$("#resimg").attr('src', data.award.awardsimg);
								$("#restitle").html('恭喜您抽中'+namer);
								$('#result').show();
							}
						}else{
							$(".scale").remove();
							$("#resimg").attr('src', '../addons/hm_newdpm/images/lose.png');
							$("#restitle").html(data.msg);
							$(".to_share").hide();
							$('#result').show();
						}
					},"json");
					audioAuto.pause();
				},3000);
			}else {
				if(type==1){
					$("#pwtitle").html('您抢红包次数已用完了！');
					$('.pw').show(1000);
					$(".scale").remove();
				}else {
					alert('您抢红包次数已用完了！！')
				}


			}

    }
}



$('.to_share').click(function(){
    $("#result").hide();
    $("#results").hide();
    $('#share').show();
})

$('#share').click(function(){
    location.href = "<?php  echo $this->createMobileUrl('qhbIndex', array('id' => $rid))?>";
})

$('.sendCard2').click(function(){
	sendCard2();
    setTimeout(function(){
    	location.href = "<?php  echo $this->createMobileUrl('qhbIndex', array('id' => $rid))?>";
	},500)
})


$('#b_close,.b_again,#b_closes').click(function(){
	location.href = "<?php  echo $this->createMobileUrl('qhbIndex', array('from_user' => $page_from_user,'id' => $rid))?>";
})

$("#btnx").on("click", function () {
    var title = $("#title").val();
    if(title==''){
        $(".nothingbg").html("请输入正确的数字兑奖码");
        $('.nothingbg').show(1000);
        $("#title").val('');
        setTimeout(function(){
            $(".nothingbg").hide(1000);
        },3000)
        return false
    }
    var submitData = {
        title: title,
    };

    var checkpwurl="<?php  echo $this->createMobileUrl('checkpw', array('rid' => $rid,'from_user'=>$page_from_user))?>";
    $.post(checkpwurl, submitData, function (data) {
        if (data.success == 1) {
            $("#title").val('');
            $(".nothingbg").html(data.msg);
            $('.nothingbg').show(1000);
            setTimeout(function(){
                $(".nothingbg").hide(1000);
                location.href = "<?php  echo $this->createMobileUrl('index', array('id' => $rid))?>";
            },1000)

        } else {
            $(".nothingbg").html(data.msg);
            $('.nothingbg').show(1000);
            $("#title").val('');
            setTimeout(function(){
                $(".nothingbg").hide(1000);
            },2000)
        }
    }, "json")

})



</script>




<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript">
	wx.config({
		debug:false,
		appId: '<?php  echo $package["appId"];?>',
		timestamp: '<?php  echo $package["timestamp"];?>',
		nonceStr: '<?php  echo $package["nonceStr"];?>',
		signature: '<?php  echo $package["signature"];?>',
		jsApiList: [
			'getLocation',<?php  if($reply['share_type'] != 2) { ?>'onMenuShareTimeline','onMenuShareQQ','onMenuShareQZone','onMenuShareAppMessage','onMenuShareWeibo'<?php  } ?>
	]
	});
	var sharedata = {
		"imgUrl" : "<?php  echo $shareimg;?>",
		"link" : "<?php  echo $sharelink;?>",
		"desc" : "<?php  echo $sharedesc;?>",
		"title" : "<?php  echo $sharetitle;?>"
	};

	wx.ready(function () {
		<?php  if($reply['isallowip']==1||$reply['isappkey']==1) { ?>

		wx.getLocation({
			type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'


			success: function (res) {

				var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
				var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
				var speed = res.speed; // 速度，以米/每秒计
				var accuracy = res.accuracy; // 位置精度



				var submitData = {
					lat: latitude,
					lon: longitude,
					lbsip: "<?php  echo $reply['allowip'];?>",
					appkey: "<?php  echo $reply['appkey'];?>"
				};

				<?php  if($reply['isallowip']==1) { ?>

				$.post('<?php  echo $this->createMobileUrl('getlbs',array('id' => $rid))?>', submitData, function(idata) {

					if (idata.success == 1) {
						jQuery("#load").fadeOut(10);
						jQuery("#circle").fadeOut(10);
						jQuery("#circle1").fadeOut(10);
					} else {
						alert(idata.msg);
						location.href = "<?php  echo $this->createMobileUrl('other', array('id' => $rid,'type'=>2))?>";

					}
				},"json");

				<?php  } ?>

				<?php  if($reply['isappkey']==1) { ?>

					$.post('<?php  echo $this->createMobileUrl('appkey',array('id' => $rid))?>', submitData, function(idata) {

					if (idata.success == 1) {
						//alert(idata.msg);
						jQuery("#load").fadeOut(10);
						jQuery("#circle").fadeOut(10);
						jQuery("#circle1").fadeOut(10);
					} else {
						alert(idata.msg);
						location.href = "<?php  echo $this->createMobileUrl('other', array('id' => $rid,'type'=>2))?>";

					}
				},"json");
				<?php  } ?>



			},
			fail: function () {
				alert("获取位置失败,请打开GPS功能！");
				location.href = "<?php  echo $this->createMobileUrl('index', array('id' => $rid))?>";

			},
			cancel:function(){
				alert("获取位置失败,请打开GPS功能！");
				location.href = "<?php  echo $this->createMobileUrl('index', array('id' => $rid))?>";
			}
		});
		<?php  } ?>
		<?php  if($reply['is_b_share'] == 2) { ?>
		wx.hideOptionMenu();
		<?php  } else { ?>
		wx.showOptionMenu();
		wx.onMenuShareAppMessage(sharedata);
		wx.onMenuShareQZone(sharedata);
		wx.onMenuShareTimeline(sharedata);
		wx.onMenuShareQQ(sharedata);
		wx.onMenuShareWeibo(sharedata);
		<?php  } ?>
	});


	function sendCard2(){
		var temp = '<?php  echo $cardArry['cardId'];?>';
		if(temp == null || temp == '' || temp == undefined){
			return;
		}
		wx.addCard({
			cardList: [{
				cardId: '<?php  echo $cardArry['cardId'];?>',
				cardExt: '{"code": "", "openid": "<?php  echo $cardArry['openid'];?>", "timestamp": "<?php  echo $cardArry['timestamp'];?>","nonce_str":"<?php  echo $cardArry['nonceStr'];?>", "signature":"<?php  echo $cardArry['signature'];?>"}'
			}], // 需要添加的卡券列表
			success: function (res) {
				var cardList = res.cardList; // 添加的卡券列表信息
			}
		});
	}

</script>

</html>
