<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
	<script src="../addons/hc_face/template/mobile/js/jquery.bxslider.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/more.css?<?php  echo $_W['timestamp'];?>">
	<title>查看更多</title>
	<style type="text/css">
		.recruit{
			color:red;
			position:relative;
			overflow:inherit;
		}
		.recruit::after{
			content:'';
			position:absolute;
			width:4px;
			height:4px;
			border-radius: 2px;
			background:red;
			right:-4px;
			top:-4px;
		}
</style>
</head>
<body>
	<div class="container">
		<div class="top column">
			<span>查看更多</span>
		</div>
		<?php  if(!empty($fenxiao['level'])) { ?>
		<div class="myList">
			<!-- <div class="myItem between">
				<div class="row">
					<img src="../addons/hc_face/template/mobile/images/more_icon1.png">
					<span>大师入驻</span>
				</div>
				<img src="../addons/hc_face/template/mobile/images/my_right.png">
			</div> -->
			<div class="myItem between" onclick="window.location.href='<?php  echo $this->createMobileUrl('distribution')?>'">
				<div class="row">
					<img src="../addons/hc_face/template/mobile/images/more_icon2.png">
					<span>推广渠道招募</span>
				</div>
				<!-- <img src="../addons/hc_face/template/mobile/images/my_right.png"> -->
				<div class="recruit">躺赚</div>
			</div>
			<!-- <div class="myItem between">
				<div class="row">
					<img src="../addons/hc_face/template/mobile/images/more_icon4.png">
					<span>问题反馈</span>
				</div>
				<img src="../addons/hc_face/template/mobile/images/my_right.png">
			</div> -->
		</div>
		<?php  } ?>
		<div class="myList" style="margin-top:20px">
			<!-- <div class="myItem between">
				<div class="row">
					<img src="../addons/hc_face/template/mobile/images/more_icon3.png">
					<span>黄道日历订单</span>
				</div>
				<img src="../addons/hc_face/template/mobile/images/my_right.png">
			</div> -->
			<div class="myItem between" onclick="window.location.href='<?php  echo $this->createMobileUrl('contect')?>'">
				<div class="row">
					<img src="../addons/hc_face/template/mobile/images/more_icon5.png">
					<span>联系客服</span>
				</div>
				<img src="../addons/hc_face/template/mobile/images/my_right.png">
			</div>
			<div class="myItem between" onclick="window.location.href='<?php  echo $this->createMobileUrl('agree')?>'">
				<div class="row">
					<img src="../addons/hc_face/template/mobile/images/more_icon6.png">
					<span>隐私协议</span>
				</div>
				<img src="../addons/hc_face/template/mobile/images/my_right.png">
			</div>
		</div>
		<div class="follow between">
			<div class="left row">
				<img src="../addons/hc_face/template/mobile/images/public.png">
				<div class="column">
					<span><?php  echo $basic['title'];?></span>
					<span><?php  echo $basic['desc'];?></span>
				</div>
			</div>
			<span onclick="show()">关注</span>
		</div>
	</div>
	<div class="shadow" onclick="hide()"></div>
	<div class="followDetail">
		<div class="tops column">
			<img src="../addons/hc_face/template/mobile/images/public.png">
			<span>面相公众号</span>
		</div>
		<img class="followImg" src="<?php  echo $basic['qrcode'];?>">
		<p class="followNotice">长按二维码识别关注</p>
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript">
	function show(){
		$(".shadow,.followDetail").show()
	}
	function hide(){
		$(".shadow,.followDetail").hide()
	}
</script>
</html>