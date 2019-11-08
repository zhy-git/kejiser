<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no" />
	<title><?php  echo $mshakereply['title'];?></title>
	<link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/newshake/mshake/css/default.css?t=<?php  echo time()?>">
	<script type="text/javascript" src="../addons/haoman_base/base/web_socket.js"></script>
</head>
<style>
	*{margin: 0;padding: 0}
	html,body{height: 100%;width: 100%}
	  .wrapper{
		width: 100%;
		height: 100%;
		background: green;
		  top:0;
		  background-size: cover;
	}
		.animate-con{
			position: absolute;
			top:20px;
			width: 100%;
			height: 50%;
		}
		.animate-con .hand {
			position: absolute;
			width: 150px;
			height: 147px;
			background: url("<?php  echo $shake_pdbg2;?>");
			background-size: cover;
		}

		
		</style>
        
<body class="shakeing1">
		<div class="wrapper"  style="background-image: url('<?php  echo $mobilebg;?>')">
            <div class="animate-con">
				<img src="<?php  echo $shake_myyybg;?>" style="width: 100%">
                <div class="hand"></div>
                <div class="chest hide"></div>
            </div>
            <div class="act-con">
                <p class="tips" style="color:#fff"></p>
                <div class="progress hide">
                    <span class="val" style="-webkit-transform: translateX(-100%);"></span>
                </div>
            </div>
			<div class="overlay">
				<div class="count"></div>
			</div>
       </div>
	   <audio id="Audio_CutdownPlayer" src="../addons/hm_newdpm/newshake/mshake/shake_cutdown.mp3" controls="controls"  style="display:none"></audio>
	   <audio id="Audio_CutdownPlayer2" src="../addons/hm_newdpm/newshake/mshake/shake.mp3" controls="controls"  style="display:none"></audio>
        <script>
			var ready_time = 5;
			var max_point = <?php  echo $shake_maxnum;?>;
			var app_user = {
                openid: "<?php  echo $user['from_user'];?>",
                nickname: "<?php  echo $user['nickname'];?>",
                avatar: "<?php  echo $user['avatar'];?>",
                rotate_id: "<?php  echo $rotate_id;?>"
            };
			var interval = null;

        </script>
		<script src="../addons/haoman_base/base/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="../addons/hm_newdpm/newshake/mshake/js/shake.js"></script>
        <script type="text/javascript" src="../addons/hm_newdpm/newshake/mshake/js/mshake.js?t=<?php  echo time()?>"></script>
		<script>
			function audioAutoPlays(id){
				var audios = document.getElementById(id),
						play = function(){
							audios.play();
//						document.removeEventListener("touchstart",play, false);
						};
				audios.play();
//			document.addEventListener("WeixinJSBridgeReady", function () {
//				play();
//			}, false);

				document.addEventListener("WeixinJSBridgeReady", function () {
					WeixinJSBridge.invoke('getNetworkType', {}, function (e) {
						document.getElementById(id).play();
						document.getElementById(id).pause();
					});
				}, false);

				document.addEventListener('YixinJSBridgeReady', function() {
					play();
				}, false);
//			document.addEventListener("touchstart",play, false);
			};

			var u = navigator.userAgent, app = navigator.appVersion;
			var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //g
			var isIOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
			if(isIOS){
				audioAutoPlays("Audio_CutdownPlayer2");
			}
		</script>
		<div id="toast" style=" display: none;
    position: fixed;
    padding: 9px 15px;
    background-color: #333;
    z-index: 8000;
    border-radius: 5px;
	font-size: 15px;
    color: #ffffff;
    line-height: 25px;
    text-align: center;"></div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>

<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript">
	wx.config({
		debug:false,
		appId: '<?php  echo $package["appId"];?>',
		timestamp: '<?php  echo $package["timestamp"];?>',
		nonceStr: '<?php  echo $package["nonceStr"];?>',
		signature: '<?php  echo $package["signature"];?>',
		jsApiList: [
			'getLocation','onMenuShareTimeline','onMenuShareQQ','onMenuShareQZone','onMenuShareAppMessage','onMenuShareWeibo'
	]
	});
	wx.ready(function () {
		wx.hideOptionMenu();
	});

</script>
</html>
	