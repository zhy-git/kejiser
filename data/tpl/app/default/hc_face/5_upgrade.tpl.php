<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/upgrade.css?<?php  echo $_W['timestamp'];?>">
	<title>全民代理</title>
	<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/share', TEMPLATE_INCLUDEPATH)) : (include template('common/share', TEMPLATE_INCLUDEPATH));?>
	<script type="text/javascript">
	//调用微信JS api 支付
		function callpay(obj)
		{
			var paytype = '<?php  echo $pay['paytype'];?>';
			let level = $('.sel').attr('data-type');
	    	var ua = window.navigator.userAgent.toLowerCase();
			if(paytype==1){
				$.ajax({
					type: "GET",
					url: "<?php  echo $this->createMobileUrl('uplevel')?>",
					data: {level:level},
					dataType: "json",
					success: function(data){
						console.log(data);
						if(data.code==1){
							window.location.href=data.url;
						}

					}
				});
			}else{
				if (typeof WeixinJSBridge == "undefined"){
				    if( document.addEventListener ){
				        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
				    }else if (document.attachEvent){
				        document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
				        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
				    }
				}else{
					$.ajax({
						type: "GET",
						url: "<?php  echo $this->createMobileUrl('uplevel')?>",
						data: {level:level},
						dataType: "json",
						success: function(data){
							var jsApiParameters = data;
							WeixinJSBridge.invoke(
								'getBrandWCPayRequest',
								jsApiParameters,
								function(res){
									WeixinJSBridge.log(res.err_msg);
									if(res.err_msg == "get_brand_wcpay_request:ok" ){
										window.location.reload();
									}
								}
							);
						}
					});
				}
			}
		}
	</script>
</head>
<body>
	<div class="container">
		<img class="title" src="../addons/hc_face/template/mobile/images/upgrade_iocn1.png">
		<div class="tab">
			<div class="tab_item <?php  if($type==1) { ?>sel<?php  } ?>" data-type="1"><?php  echo $fenxiao['grade']['1']['grade'];?></div>
			<div class="tab_item <?php  if($type==2) { ?>sel<?php  } ?>" data-type="2"><?php  echo $fenxiao['grade']['2']['grade'];?></div>
		</div>
		<div>
			<div class="tab_content" <?php  if($type!=1) { ?>style="display: none;"<?php  } ?>>
				<div class="main row">
					<?php  if($fenxiao['level']==3) { ?>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['1']['commission1'];?><text style="font-size:3.9vw">%</text></span>
							<span>一级代理</span>
						</div>
						<span>享受一级代理佣金收益<?php  echo $fenxiao['commission']['1']['commission1'];?>%提成</span>
					</div>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['1']['commission2'];?><text style="font-size:3.9vw">%</text></span>
							<span>二级代理</span>						
						</div>
						<span>享受二级代理佣金收益<?php  echo $fenxiao['commission']['1']['commission2'];?>%提成</span>
					</div>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['1']['commission3'];?><text style="font-size:3.9vw">%</text></span>
							<span>三级代理</span>
						</div>
						<span>享受三级代理佣金收益<?php  echo $fenxiao['commission']['1']['commission3'];?>%提成</span>
					</div>
					<?php  } ?>
					<?php  if($fenxiao['level']==2) { ?>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['1']['commission1'];?><text style="font-size:3.9vw">%</text></span>
							<span>一级代理</span>
						</div>
						<span>享受一级代理佣金收益<?php  echo $fenxiao['commission']['1']['commission1'];?>%提成</span>
					</div>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['1']['commission2'];?><text style="font-size:3.9vw">%</text></span>
							<span>二级代理</span>						
						</div>
						<span>享受二级代理佣金收益<?php  echo $fenxiao['commission']['1']['commission2'];?>%提成</span>
					</div>
					<?php  } ?>
					<?php  if($fenxiao['level']==1) { ?>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['1']['commission1'];?><text style="font-size:3.9vw">%</text></span>
							<span>一级代理</span>
						</div>
						<span>享受一级代理佣金收益<?php  echo $fenxiao['commission']['1']['commission1'];?>%提成</span>
					</div>
					<?php  } ?>
				</div>
				<div class="buy column">
					<span>晋升【<?php  echo $fenxiao['grade']['1']['grade'];?>】后将享有以上的高级权益</span>
					<span>升级费￥<text style="font-size:5.5vw;"><?php  echo $fenxiao['grade']['1']['money'];?></text></span>
				</div>
			</div>
			<div class="tab_content" <?php  if($type!=2) { ?>style="display: none;"<?php  } ?>>
				<div class="main row">
					<?php  if($fenxiao['level']==3) { ?>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['2']['commission1'];?><text style="font-size:3.9vw">%</text></span>
							<span>一级代理</span>
						</div>
						<span>享受一级代理佣金收益<?php  echo $fenxiao['commission']['2']['commission1'];?>%提成</span>
					</div>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['2']['commission2'];?><text style="font-size:3.9vw">%</text></span>
							<span>二级代理</span>						
						</div>
						<span>享受二级代理佣金收益<?php  echo $fenxiao['commission']['2']['commission2'];?>%提成</span>
					</div>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['2']['commission3'];?><text style="font-size:3.9vw">%</text></span>
							<span>三级代理</span>
						</div>
						<span>享受三级代理佣金收益<?php  echo $fenxiao['commission']['2']['commission3'];?>%提成</span>
					</div>
					<?php  } ?>
					<?php  if($fenxiao['level']==2) { ?>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['2']['commission1'];?><text style="font-size:3.9vw">%</text></span>
							<span>一级代理</span>
						</div>
						<span>享受一级代理佣金收益<?php  echo $fenxiao['commission']['2']['commission1'];?>%提成</span>
					</div>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['2']['commission2'];?><text style="font-size:3.9vw">%</text></span>
							<span>二级代理</span>						
						</div>
						<span>享受二级代理佣金收益<?php  echo $fenxiao['commission']['2']['commission2'];?>%提成</span>
					</div>
					<?php  } ?>
					<?php  if($fenxiao['level']==1) { ?>
					<div class="level column">
						<div class="level_num column">
							<span><?php  echo $fenxiao['commission']['2']['commission1'];?><text style="font-size:3.9vw">%</text></span>
							<span>一级代理</span>
						</div>
						<span>享受一级代理佣金收益<?php  echo $fenxiao['commission']['2']['commission1'];?>%提成</span>
					</div>
					<?php  } ?>
				</div>
				<div class="buy column">
					<span>晋升【<?php  echo $fenxiao['grade']['2']['grade'];?>】后将享有以上的高级权益</span>
					<span>升级费￥<text style="font-size:5.5vw;"><?php  echo $fenxiao['grade']['2']['money'];?></text></span>
				</div>
			</div>
		</div>
		<div class='pay' onclick="callpay()">立即升级</div>
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript">
	var level = <?php  echo $user['level'];?>;
	var cur = $('.sel').attr('data-type')
	if(level-1<cur){
		$(".pay").css('display','block');
	}else{
		$(".pay").css('display','none');
	}
	$(".tab_item").click(function(){
		var index=$(this).index();
		$(this).addClass("sel").siblings().removeClass("sel");
		$(".tab_content").eq(index).show().siblings().hide()
		var cur = $(this).attr('data-type')
		if(level-1<cur){
			$(".pay").css('display','block');
		}else{
			$(".pay").css('display','none');
		}
	})
</script>
</html>