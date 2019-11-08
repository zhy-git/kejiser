<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/distribution.css?<?php  echo $_W['timestamp'];?>">
	<script src="../addons/hc_face/template/mobile/js/layer/layer.js"></script>
	<script src="../addons/hc_face/template/mobile/js/qrcode.js?<?php  echo $_W['timestamp'];?>"></script>
	<title>全民代理</title>
	<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/share', TEMPLATE_INCLUDEPATH)) : (include template('common/share', TEMPLATE_INCLUDEPATH));?>
	<script type="text/javascript">
		document.onreadystatechange = loadingChange;//当页面加载状态改变的时候执行这个方法.  
		function loadingChange()   
		{   	
	        if(document.readyState == "complete"){//当页面加载状态为完全结束时进入 
	        	$(".shodowS").hide() 
	        	shareImgs('<?php  echo $bg['0'];?>');
	        }
	    }
	</script>
	<style type="text/css">
		.main{
			position:relative;
		}
		.home{
			position:absolute;
			bottom:30vw;
			right:0vw;
			width:11vw;
		}
	</style>
</head>
<body>
	<div class="shodowS row">
		<div class="loadings">
			<img class="loading_0" src="../addons/hc_face/template/mobile/images/loading_0.png">
			<img class="loading_img loading_1" src="../addons/hc_face/template/mobile/images/loading_1.png">
			<img class="loading_img loading_2" src="../addons/hc_face/template/mobile/images/loading_2.png">
			<img class="loading_img loading_3" src="../addons/hc_face/template/mobile/images/loading_3.png">
			<img class="loading_img loading_4" src="../addons/hc_face/template/mobile/images/loading_4.png">
			<img class="loading_img loading_5" src="../addons/hc_face/template/mobile/images/loading_5.png">
		</div>
	</div>
	<div class="container" id="container">
		<!-- 生成canvas海报 -->
		<canvas id="myCanvas" width="" height=""></canvas>
		<!-- 生成canvas海报 -->
		<div class="top">
			<div class="myDetail between">
				<div class="top_left row">
					<img class="avatar" src="<?php  echo $user['avatar'];?>">
					<div class="topRight column">
						<span class="user_name"><?php  echo $user['nickname'];?></span>
						<div class="vip row">
							<?php  if($user['level']==1) { ?>
							<img class="vip_img" src="../addons/hc_face/public/level1.png">
							<?php  } else if($user['level']==2) { ?>
							<img class="vip_img" src="../addons/hc_face/public/level2.png">
							<?php  } else if($user['level']==3) { ?>
							<img class="vip_img" src="../addons/hc_face/public/level3.png">
							<?php  } ?>
							<span><?php  $level = $user['level']-1?><?php  echo $fenxiao['grade'][$level]['grade'];?></span>
						</div>
					</div>
				</div>
				<div class="Right column">
					<span><text style="font-size:5vw">￥</text><?php  if(empty($can)) { ?>0.00<?php  } else { ?><?php  echo $can;?><?php  } ?></span>
					<span onclick="window.location.href='<?php  echo $this->createMobileUrl('withdraw')?>'">立即提现</span>
				</div>
			</div>
		</div>
		<div class="myList1">
			<div class="myItem row">
				<div class="left column" onclick="window.location.href='<?php  echo $this->createMobileUrl('profit',array('type'=>1))?>'">
					<div class="row">
						<span>直接收益</span>
					</div>
					<span style="color:#fff">￥<?php  if(empty($zj)) { ?>0.00<?php  } else { ?><?php  echo $zj;?><?php  } ?></span>
				</div>
				<div class="left column" onclick="window.location.href='<?php  echo $this->createMobileUrl('profit',array('type'=>2))?>'">
					<div class="row">
						<span>裂变收益</span>
					</div>
					<span style="color:#fff">￥<?php  if(empty($lb)) { ?>0.00<?php  } else { ?><?php  echo $lb;?><?php  } ?></span>
				</div>
				<div class="left column" onclick="window.location.href='<?php  echo $this->createMobileUrl('group')?>'">
					<div class="row">
						<span>我的团队</span>
					</div>
					<span style="color:#fff"><?php  if(empty($team)) { ?>0<?php  } else { ?><?php  echo $team;?><?php  } ?></span>
				</div>
			</div>
		</div>
		<div class="myList">
			<div class="myItem row">
				<div class="left column">
					<div class="row">
						<span>今日收益</span>
					</div>
					<span>￥<?php  if(empty($todaysy)) { ?>0.00<?php  } else { ?><?php  echo $todaysy;?><?php  } ?></span>
				</div>
				<div class="left column">
					<div class="row">
						<span>今日新增订单</span>
					</div>
					<span><?php  if(empty($todaydd)) { ?>0<?php  } else { ?><?php  echo $todaydd;?><?php  } ?></span>
				</div>
				<div class="left column">
					<div class="row">
						<span>今日新增代理</span>
					</div>
					<span><?php  if(empty($todaydl)) { ?>0<?php  } else { ?><?php  echo $todaydl;?><?php  } ?></span>
				</div>
			</div>
		</div>

		<div class="main">
			<img class="home" onclick="window.location.href='<?php  echo $this->createMobileUrl('index')?>'" src="../addons/hc_face/template/mobile/images/home.png">
			<div class="shareContent row">
				<div style="width: 45vw; height: 26.5vw;background: url(<?php  echo $fenxiao['grade']['1']['pic'];?>) no-repeat;background-size: 100% 100%;">
					<div class="fuck_main column" style="margin-left:5vw;" onclick="window.location.href='<?php  echo $this->createMobileUrl('upgrade',array('type'=>1))?>'">
						<span>升级<?php  echo $fenxiao['grade']['1']['grade'];?></span>
						<span>立即升级</span>
					</div>
				</div>
				<div style="width: 45vw; height: 26.5vw;background: url(<?php  echo $fenxiao['grade']['2']['pic'];?>) no-repeat;background-size: 100% 100%;" onclick="window.location.href='<?php  echo $this->createMobileUrl('upgrade',array('type'=>2))?>'">
					<div class="fuck_main column">
						<span>升级<?php  echo $fenxiao['grade']['2']['grade'];?></span>
						<span>立即升级</span>
					</div>
				</div>
			</div>
			<div class="share" onclick="show()">直接转发链接给好友</div>
			<div class="sharePic" onclick="shareShow()">生成推广图片</div>
			<img class="fuck_3" onclick="window.location.href='<?php  echo $this->createMobileUrl('recommend',array('type'=>'2'))?>'" src="../addons/hc_face/template/mobile/images/fuck_3.png">
		</div>
		<div class="shareMain" onclick="hide()" style="display: none;">
			<img class="share_btn" src="../addons/hc_face/template/mobile/images/share.png">
		</div>
		<div class="shadow" onclick="shareHide()"></div>
		<div class="shareImglist">
			<div class="column">
				<img class="shareImg" id="imgShow" src="">
				<img class="down_notice" src="../addons/hc_face/template/mobile/images/down_notice.png">
				<div class="selShare row" style="<?php  if(count($bg)<4) { ?>justify-content: center<?php  } ?>">
					<?php  if(is_array($bg)) { foreach($bg as $index => $val) { ?>
					<img class="Share_item <?php  if($index==0) { ?>sel_item<?php  } ?>" src="<?php  echo $val;?>">
					<?php  } } ?>
				</div>
			</div>
		</div>
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript">
	var canvas = document.getElementById('myCanvas');
	canvas.width=$("#container").width()*2;
	canvas.height=$("#container").width()*1440/1080*2;
	$("#myCanvas").css("width",$("#container").width());
	$("#myCanvas").css("height",$("#container").width()*1440/1080);

	$(".Share_item").click(function (){
		shareImgs($(this).attr("src"))
		$(this).addClass("sel_item").siblings().removeClass("sel_item")
	})
	function shareImgs(imga){
		if (canvas.getContext) {
			var ctx = canvas.getContext('2d');
			//创建新的图片对象
			// var img = document.getElementById("imgs1");
			var img=new Image;
			
			//指定图片的URL
			img.crossOrigin="anonymous";
			// img.src=img.src;
			img.src=imga;
			img.onload = function(){
				var imgOw=img.width,imgOh=img.height;
				var imgW=canvas.width,imgH=(imgOh*canvas.width)/imgOw;
				var imgX=0,imgY=0;
				ctx.drawImage(img, imgX, imgY,imgW,imgH);     


				var qrcodeX, qrcodeY,qrcodeW,qrcodeH;
				var qrcode=new Image;
				// qrcode.src="<?php  echo $url;?>";
				qrcode.crossOrigin="anonymous";
				qrcode.src="<?php  echo $qrcode;?>";
				qrcode.onload = function(){
					ctx.drawImage(qrcode,846/1080*canvas.width, 1220/1440*(imgOh*canvas.width)/imgOw+(canvas.height-imgH)/2, 160/1440*1080, 160/1440*1080); 
					var _imgSrc = canvas.toDataURL("image/png",1);
					canvas.style.display="none";
					　　　　　　 var imgShow = document.getElementById('imgShow');
					　　　　　　     imgShow.setAttribute('src', _imgSrc);
				}   
			}



		}
	}

	function show(){
		$(".shareMain").show()
	}
	function hide(){
		$(".shareMain").hide()
	}
	function shareShow(){
		$(".shadow,.shareImglist").show()
	}
	function shareHide(){
		$(".shadow,.shareImglist").hide()
	}
	$(".login").click(function(){
		var mobile = $("#mobile").val();
		var code = $("#code").val();
		if(typeof code == "undefined" || code == '' || code == null){
			layer.msg('请填写验证码');
			return false;
		}
		$.ajax({
			type: "GET",
			url: "<?php  echo $this->createMobileUrl('distribution',array('act'=>'login'))?>",
			data: {mobile:mobile,code:code},
			dataType: "json",
			success: function(data){
				layer.msg(data.msg);
				if(data.code==1){
					location.reload();
				}
			}
		});

	});

	var timer,num=60;
	$(".codeNum").click(function(){
		var mobile = $("#mobile").val();
		var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;
		if (!myreg.test(mobile)) {
			layer.msg('号码错误');
			return false;
		}
		$.ajax({
			type: "GET",
			url: "<?php  echo $this->createMobileUrl('distribution',array('act'=>'message'))?>",
			data: {mobile:mobile},
			dataType: "json",
			success: function(data){
				layer.msg(data.msg);
				if(data.code==1){
					//倒计时开始
					clearInterval(timer)
					timer=setInterval(function(){
						num--
						if(num>0){
							$(".codeNum").html(num+"s")
						}else{
							clearInterval(timer)
							num=60
							$(".codeNum").html("获取验证码")
						}
					},1000)
				}
			}
		});

	})

</script>
</html>