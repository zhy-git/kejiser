<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
	<title>联系客服</title>
	<style type="text/css">
	html,body{
		margin:0;
		padding:0;
	}
	.container{
		background:#fff;
		height:100vh;
		width:100vw;
		position: fixed;
	}
	.column{
		display: flex;
		flex-direction: column;
		align-items: center;
	}
	.followImg{
		width:60vw;
		margin-bottom:20px;
		box-shadow: 0 0 40px rgba(0,0,0,0.4);
	}
</style>
</head>
<body>
	<div class="container">
		<div class="column" style="height:100vh;justify-content: center;">
			<img class="followImg" src="<?php  echo $basic['kfqrcode'];?>">
			<p class="followNotice" style="margin:4vw 0 0;">如需帮助，请长按二维码，添加客服微信</p>
		</div>
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript">
</script>
</html>