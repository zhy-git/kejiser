<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
<script src="../addons/hc_face/template/mobile/js/jquery.bxslider.min.js"></script>
<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/my.css">
<title>我的面相报告</title>
<style type="text/css">
	
</style>
</head>
<body>
	<div class="container">
		<div class="top column" onclick="window.location.href='<?php  echo $this->createMobileUrl('upload')?>'">
			<span>面相报告</span>
			<img src="../addons/hc_face/template/mobile/images/publish.png">
			<span>添加新的面相报告</span>
		</div>
		<div class="myList">
			<div class="myItem between" onclick="window.location.href='<?php  echo $this->createMobileUrl('report',array('rid'=>$rid))?>'">
				<span>我的面相报告</span>
				<img src="../addons/hc_face/template/mobile/images/my_right.png">
			</div>
			<div class="myItem between" onclick="window.location.href='<?php  echo $this->createMobileUrl('myreport')?>'">
				<span>我添加的报告</span>
				<div class="row">
					<span><text style="color:#4A2C96;font-weight:bold"><?php  echo $count;?></text><text>份</text></span>
					<img src="../addons/hc_face/template/mobile/images/my_right.png">
				</div>
			</div>
			<!-- <div class="myItem between">
				<span>我的流年运势</span>
				<div class="row">
					<span>分享给<text style="color:#4A2C96;font-weight:bold">2</text>个好友查看</span>
					<img src="../addons/hc_face/template/mobile/images/my_right.png">
				</div>
			</div>
			<div class="myItem between">
				<span>事业运详解</span>
				<div class="row">
					<span>193333人已获取</span>
					<img src="../addons/hc_face/template/mobile/images/my_right.png">
				</div>
			</div>
			<div class="myItem between">
				<span>情感运详解</span>
				<div class="row">
					<span>193333人已获取</span>
					<img src="../addons/hc_face/template/mobile/images/my_right.png">
				</div>
			</div> -->
		</div>
		<!-- <div class="upload_photo" onclick="">
			<span>面相大师真人看相</span>
		</div>  -->
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
</html>