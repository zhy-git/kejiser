<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
	<script src="../addons/hc_face/template/mobile/js/jquery.bxslider.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/unlock.css?<?php  echo $_W['timestamp'];?>">
	<title><?php  echo $info['title'];?></title>
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

					data: {type:type,rid:rid},

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
									window.location.href="./index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&type="+type+"&rid="+rid+"&do=unlockreport&m=hc_face"
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

				data: {type:type,rid:rid},

				dataType: "json",

				success: function(data){
					var red = data.host + '/app/index.php?i=' + data.weid + '&c=entry&do=buy&m=hc_face';
					window.location.href=data.mweb_url+'&redirect_url='+encodeURIComponent(red)

				}

			});

		}else{
			$.ajax({

				type: "GET",

				url: "<?php  echo $this->createMobileUrl('pay')?>",

				data: {type:type,rid:rid},

				dataType: "json",

				success: function(data){

					console.log(data);

					if(data.code==1){

						window.location.href=data.url;

					}
				}
			});
		}

	}

</script>
</head>
<body>
	<div class="container" style="height:88vh;padding-bottom:12vh">
		<div class="title between">
			<span><?php  echo $info['title'];?></span>
			<span><?php  echo $info['sales'];?>人已购买</span>
		</div>
		<span class="content"><?php  echo $info['desc'];?></span>
		<div class="report">
			<span>报告包含内容</span>
			<div class="reportList">
				<?php  if(is_array($info['sub'])) { foreach($info['sub'] as $index => $item) { ?>
				<div class="repotyItem"><span>●</span><?php  echo $item;?></div>
				<?php  } } ?>
			</div>
			<div class="buyNotice">
				<span>购买说明：</span>
				<p><?php  echo $info['title'];?>已生成，购买后免费赠送电子版<?php  echo $info['title'];?>，购买后即可免费查看。</p>
			</div>
		</div>
		<div class="payDetail">
			<div class="need between">
				<span>需支付</span>
				<span>￥<?php  echo $info['price'];?></span>
			</div>
			<div class="origin between">
				<span>原价</span>
				<span>￥<?php  echo $info['oprice'];?></span>
			</div>
			<div class="discount between">
				<span>优惠券</span>
				<span>-￥<?php  echo $info['discount'];?></span>
			</div>
		</div>
		<div class="upload_photo" onclick="callpay('<?php  echo $info['type'];?>','<?php  echo $rid;?>')">解锁<?php  echo $info['title'];?></div>
		<?php  if($lock['type']==1) { ?>
		<span style="display: inline-block;margin:2vw auto;width:90vw;color:#686868;text-align: center;">OR</span>
		<div class="upload_photo btn1" onclick="show()">邀请<?php  echo $lock['num'];?>个好友免费解锁</div>
		<?php  } ?>
		<div class="shareMain" onclick="hide()" style="display: none;">
			<img class="share_btn" src="../addons/hc_face/template/mobile/images/share.png">
		</div>
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript">
	function show(){
		$(".shareMain").show()
	}
	function hide(){
		$(".shareMain").hide()
	}
</script>
</html>