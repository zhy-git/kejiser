<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
<script src="../addons/hc_face/template/mobile/js/jquery.bxslider.min.js"></script>
<script src="../addons/hc_face/template/mobile/js/layer/layer.js"></script>

<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/buy.css?<?php  echo $_W['timestamp'];?>">
<title>购买报告</title>
<style type="text/css">
</style>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/share', TEMPLATE_INCLUDEPATH)) : (include template('common/share', TEMPLATE_INCLUDEPATH));?>
	<script type="text/javascript">

	//调用微信JS api 支付

	function callpay(type,rid)
	{

		var paytype = '<?php  echo $pay['paytype'];?>';
		var ua = window.navigator.userAgent.toLowerCase();

		if(paytype!=1 && ua.match(/MicroMessenger/i) == 'micromessenger'){

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

					url: "<?php  echo $this->createMobileUrl('pay')?>",

					data: {'type':type,'rid':rid},

					dataType: "json",

					success: function(data){

						var jsApiParameters = data;
						console.log(jsApiParameters);
						WeixinJSBridge.invoke(
							'getBrandWCPayRequest',
							jsApiParameters,
							function(res){
								WeixinJSBridge.log(res.err_msg);
								if(res.err_msg == "get_brand_wcpay_request:ok" ){
									window.location.href="./index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&rid="+rid+"&do=report&m=hc_face";
								}
							}

						);

					}

				});

			}

		}else if(paytype!=1 && ua.match(/MicroMessenger/i) != 'micromessenger'){

			$.ajax({

				type: "GET",

				url: "<?php  echo $this->createMobileUrl('pay')?>",

				data: {'type':type,'rid':rid},

				dataType: "json",

				success: function(data){
					var red = data.host + '/app/index.php?i=' + data.weid + '&c=entry&rid='+rid+'&do=report&m=hc_face';
					window.location.href=data.mweb_url+'&redirect_url='+encodeURIComponent(red)

				}

			});

		}else{
			$.ajax({

				type: "GET",

				url: "<?php  echo $this->createMobileUrl('pay')?>",

				data: {'type':type,'rid':rid},

				dataType: "json",

				success: function(data){
					if(data.code==1){
						setTimeout(function(){
							window.location.href=data.url;
						}, 1000);
					}
				}
			});
		}

	}

</script>
</head>
<body>
	<div class="container">
		<div class="top column">
			<span>我的报告</span>
			<!-- --------------如果有报告的话加载显示--------------- -->
			<div class="myreortList">
				<?php  if(!empty($report)) { ?>
				<?php  if(is_array($report)) { foreach($report as $index => $item) { ?>
				<div class="myreortItem row <?php  if($index==0) { ?> sel<?php  } ?>"><?php  echo $item['name'];?></div>
				<?php  } } ?>
				<?php  } else { ?>
					暂无报告
				<?php  } ?>
			</div>
		</div>
		<div class="allReport">
			<?php  if(empty($report)) { ?>
				<div class="buyList" <?php  if($index!=0) { ?>style="display: none"<?php  } ?>>
				<div class="buyItem" onclick="layer.msg('请先添加报告')">
					<div class="content">
						<span><?php  echo $list[0]['title'];?></span>
						<span><?php  echo $list[0]['ctitle'];?></span>
						<span><?php  echo $list[0]['price'];?>元解锁</span>
					</div>
					<div class="shadow"></div>
				</div>
				<div class="buyItem" onclick="layer.msg('请先添加报告')">
					<div class="content">
						<span><?php  echo $item['name'];?>的面相<?php  echo $list[1]['title'];?></span>
						<span><?php  echo str_replace('#name#', $item['name'], $list[1]['ctitle']);?></span>
						<span>解锁报告</span>
					</div>
					<div class="shadow"></div>
				</div>
				<div class="buyItem" onclick="layer.msg('请先添加报告')">
					<div class="content">
						<span><?php  echo $item['name'];?>的面相<?php  echo $list[2]['title'];?></span>
						<span><?php  echo str_replace('#name#', $item['name'], $list[2]['ctitle']);?></span>
						<span>解锁报告</span>
					</div>
					<div class="shadow"></div>
				</div>
			</div>
			<?php  } else { ?>
				<?php  if(is_array($report)) { foreach($report as $index => $item) { ?>
				<div class="buyList" <?php  if($index!=0) { ?>style="display: none"<?php  } ?>>
					
					<div class="buyItem">
						<div class="content">
							<span><?php  echo $list[0]['title'];?></span>
							<span><?php  echo $list[0]['ctitle'];?></span>
							<?php  if(empty($item['nose_desc'])) { ?>
							<span onclick="callpay('bz',<?php  echo $item['id'];?>)"><?php  echo $list[0]['price'];?>元解锁</span>
							<?php  } else { ?>
							<span style="background:#DD001B;color:#fff" onclick="window.location.href='<?php  echo $this->createMobileUrl('report',array('rid'=>$item['id']))?>'">查看报告</span>
							<?php  } ?>
						</div>
						<div class="shadow"></div>
					</div>
					
					<div class="buyItem">
						<div class="content">
							<span><?php  echo $item['name'];?>的面相<?php  echo $list[1]['title'];?></span>
							<span><?php  echo str_replace('#name#', $item['name'], $list[1]['ctitle']);?></span>
							<?php  if(empty($item['cause'])) { ?>
							<span onclick="window.location.href='<?php  echo $this->createMobileUrl('unlock',array('type'=>'sy','rid'=>$item['id']))?>'">解锁报告</span>
							<?php  } else { ?>
							<span style="background:#DD001B;color:#fff" onclick="window.location.href='<?php  echo $this->createMobileUrl('unlockreport',array('type'=>'sy','rid'=>$item['id']))?>'">查看报告</span>
							<?php  } ?>
						</div>
						<div class="shadow"></div>
					</div>
					
					<div class="buyItem">
						<div class="content">
							<span><?php  echo $item['name'];?>的面相<?php  echo $list[2]['title'];?></span>
							<span><?php  echo str_replace('#name#', $item['name'], $list[2]['ctitle']);?></span>
							<?php  if(empty($item['emotion'])) { ?>
							<span onclick="window.location.href='<?php  echo $this->createMobileUrl('unlock',array('type'=>'qg','rid'=>$item['id']))?>'">解锁报告</span>
							<?php  } else { ?>
							<span style="background:#DD001B;color:#fff" onclick="window.location.href='<?php  echo $this->createMobileUrl('unlockreport',array('type'=>'qg','rid'=>$item['id']))?>'">查看报告</span>
							<?php  } ?>
						</div>
						<div class="shadow"></div>
					</div>
				</div>
				<?php  } } ?>
			<?php  } ?>
		</div>
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript">
	$(".myreortItem").click(function(){
		var index=$(this).index()
		$(this).addClass("sel").siblings().removeClass("sel");
		$(".allReport>.buyList").eq(index).show().siblings().hide();
	})
</script>
</html>