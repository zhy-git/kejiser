<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
	<script src="../addons/hc_face/template/mobile/js/jquery.bxslider.min.js"></script>
	<script src="../addons/hc_face/template/mobile/js/layer/layer.js"></script>
	<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/getMoney.css?<?php  echo $_W['timestamp'];?>">
	<title>提现</title>
	<style type="text/css">
	
</style>
</head>
<body>
	<div class="container">
		<p class="title">可提现余额</p>
		<p class="mymoney"><text><?php  if(empty($profit)) { ?>0.00<?php  } else { ?><?php  echo $profit;?><?php  } ?></text>元</p>
		<div class="getMoney">
			<p class="notice">提现到零钱</p>
			<div class="money">
				<!-- <div class="moneyItem between">
					<div class="num row">
						<span>￥</span>
						<input type="text" placeholder="最低1元起提" readonly="true" value="<?php  if(empty($profit)) { ?>0.00<?php  } else { ?><?php  echo $profit;?><?php  } ?>">
					</div>
					<span class="btn">全部</span>
				</div> -->
				<div class="moneyItem between">
					<span>提现至</span>
					<div class="right row">
						<img class="wechat" src="../addons/hc_face/template/mobile/images/wechat.png">
						<span>微信</span>
					</div>
				</div>
				<div class="moneyItem between">
					<span>提现手续费</span>
					<span class="free"><?php  if(empty($fee)) { ?>0<?php  } else { ?><?php  echo $fee;?><?php  } ?>元</span>
				</div>
			</div>
		</div>
		<span class="time">预计3-5个工作日到账</span>
		<div class="submit">立即提现</div>
		<!-- <span class="cashNotice">提现注意事项</span> -->
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript">
	$(".submit").click(function(){
		var type = '<?php  echo $cash['type'];?>';
		if(type==1){
			window.location.href="<?php  echo $this->createMobileUrl('photo')?>"
		}else{
			$.ajax({
				type: "GET",
				url: "<?php  echo $this->createMobileUrl('withdraw',array('act'=>'cash'))?>",
				dataType: "json",
				success: function(data){
					layer.msg(data.msg);
					if(data.code!=1){
						setTimeout(function(){
							window.location.reload();
						}, 1000);
						
					}
				}
			});
		}
		
	})
</script>
</html>