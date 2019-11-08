<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<script src="../addons/hc_face/template/mobile/js/jquery.js?<?php  echo $_W['timestamp'];?>"></script>
	<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/swiper.css?<?php  echo $_W['timestamp'];?>">
	<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/index.css?<?php  echo $_W['timestamp'];?>">
	<title><?php  echo $basic['title'];?></title>
	<script type="text/javascript">
	document.onreadystatechange = loadingChange;//当页面加载状态改变的时候执行这个方法.  
	function loadingChange()   
	{   	
        if(document.readyState == "Loading"){//当页面加载状态为完全结束时进入   
        	$(".container").hide() 
        }
        if(document.readyState == "complete"){//当页面加载状态为完全结束时进入 
        	$(".shodow").hide() 
        	$(".container").show()
        }
    }   

    </script>
    <style type="text/css">
    	.blur{
    		filter: blur(2px);
    		-webkit-filter: blur(2px);
    	}
    	.banners{
    		width:100vw;
    	}
    	.navlist{
    		z-index:3;
    	}
    </style>
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/share', TEMPLATE_INCLUDEPATH)) : (include template('common/share', TEMPLATE_INCLUDEPATH));?>
</head>
<body>
	<div class="shodow row">
		<div class="loadings">
			<img class="loading_0" src="../addons/hc_face/template/mobile/images/loading_0.png">
			<img class="loading_img loading_1" src="../addons/hc_face/template/mobile/images/loading_1.png">
			<img class="loading_img loading_2" src="../addons/hc_face/template/mobile/images/loading_2.png">
			<img class="loading_img loading_3" src="../addons/hc_face/template/mobile/images/loading_3.png">
			<img class="loading_img loading_4" src="../addons/hc_face/template/mobile/images/loading_4.png">
			<img class="loading_img loading_5" src="../addons/hc_face/template/mobile/images/loading_5.png">
		</div>
	</div>
	
	<div class="shareMain" onclick="hide()" style="display: none;">
		<img class="share_btn" src="../addons/hc_face/template/mobile/images/share.png">
	</div>
	<div class="container">
		<?php  if(empty($res)) { ?>
		<div id="first">
			<div class="first">
				<div class="firstDiv">
					<div class="firstTop">
						<span>已有<?php  echo $num+substr(time(),-7);?>人获取报告</span>
						<div class="userInfo firstrow">
							<div class="avatarDiv">
								<div class="avatarShadow"></div>
								<img class="avatar blur" src="<?php  echo $_W['siteroot'];?><?php  echo $last['avatar'];?>">
							</div>
							<span><text class="blur">用户<?php  echo $last['name'];?></text>刚刚获取面相报告</span>
						</div>
					</div>
					<div class="firstBottom">
						<span>相由心生，境随心转。面相学通过观察面部特征来解码人生命运，<?php  echo $basic['title'];?>则利用人工智能深度神经网络学习技术与人脸识别技术将这一中国传统文化重新呈现。</span>
						<div class="firstTab">
							<div class="firstItem">
								<img src="../addons/hc_face/template/mobile/images/firsticon1.png">
								<span>面相学</span>
							</div>
							<div class="firstItem">
								<img src="../addons/hc_face/template/mobile/images/firsticon2.png">
								<span>人工智能</span>
							</div>
							<div class="firstItem">
								<img src="../addons/hc_face/template/mobile/images/firsticon3.png">
								<span>人脸定位</span>
							</div>
						</div>
					</div>
				</div>
				<div class="upload_photo firstrow"  onclick="window.location.href='<?php  echo $this->createMobileUrl('upload')?>'">
					<img src="../addons/hc_face/template/mobile/images/hand.png">
					<span style="font-size:4vw;">获取面相报告</span>
				</div>
			</div>
		</div>
		<?php  } else { ?>
		<div class="second">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php  if(is_array($banner)) { foreach($banner as $index => $item) { ?>
					<div class="swiper-slide">
						<img class="banners" src="<?php  echo $item['banner'];?>" <?php  if(!empty($item['link'])) { ?>onclick="window.location.href='<?php  echo $item['link'];?>'"<?php  } ?>>
					</div>
					<?php  } } ?>
				</div>

				<div class="swiper-pagination"></div>
			</div>
			<div class="navlist">
				<div class="nav">
					<div class="navdetail row" onclick="window.location.href='<?php  echo $this->createMobileUrl('my')?>'">
						<img src="../addons/hc_face/template/mobile/images/icon1.png">
						<div class="content column">
							<span>面相报告</span>
							<span>财运通畅，有福气</span>
						</div>
					</div>
				</div>
				<div class="nav">
					<div class="navdetail row" onclick="window.location.href='<?php  echo $this->createMobileUrl('rank')?>'">
						<img src="../addons/hc_face/template/mobile/images/icon2.png">
						<div class="content column">
							<span>面相排行</span>
							<span>当前排名第<?php  echo $rank;?>名</span>
						</div>
					</div>
				</div>
				<div class="nav" onclick="show()">
					<div class="navdetail row">
						<img src="../addons/hc_face/template/mobile/images/icon3.png">
						<div class="content column">
							<span>分享</span>
							<span>邀请更多好友/群友</span>
						</div>
					</div>
				</div>
			</div>
			<div class="footer row">
				<div class="index" onclick="window.location.href='<?php  echo $this->createMobileUrl('more')?>'">
					<img src="../addons/hc_face/template/mobile/images/index.png">
					<span>查看更多</span>
				</div>
				<img class="publish" src="../addons/hc_face/template/mobile/images/publish.png" onclick="window.location.href='<?php  echo $this->createMobileUrl('upload')?>'">
				<div class="my" onclick="window.location.href='<?php  echo $this->createMobileUrl('buy')?>'">
					<img src="../addons/hc_face/template/mobile/images/my.png">
					<span>购买报告</span>
				</div>
			</div>
		</div>
		<?php  } ?>
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script src="../addons/hc_face/template/mobile/js/swiper.min.js?<?php  echo $_W['timestamp'];?>"></script>
<script type="text/javascript">

    var swiper = new Swiper('.swiper-container',
      { 
      autoplay:true,
      controller:true,
      loop:true,
      pagination: {
        el: '.swiper-pagination',
      },
    });
	function show(){
		$(".shareMain").show()
	}
	function hide(){
		$(".shareMain").hide()
	}
</script>
</html>