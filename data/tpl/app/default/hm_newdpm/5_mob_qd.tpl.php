<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<title>签到</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
<link rel="stylesheet" href="../addons/hm_newdpm/mobimg/index.css?v=201611324" />
<style type="text/css" id="_zoom"></style>
<style type="text/css">
	.wrapper {
        width: 100%;
        max-width: 800px;
        min-height: 100%;
        margin: 0 auto;
        background-image: url(<?php  echo $bg;?>);
        background-repeat: repeat;
        background-size: 100% auto;
    }
</style>
</head>
<body>

<div id="load" style="width: 100%;height: 100%;background: rgba(0,0,0,0.9);z-index: 999999;position: fixed;top: 0px;bottom:
0px;left: 0px;right: 0px;">
	<div id="circle"></div><div id="circle1"></div>
</div>

<?php  if($reply['isallowip']!=1) { ?>
<script>
	window.onload = (function() {
		$("#load").fadeOut(10);
		$("#circle").fadeOut(10);
		$("#circle1").fadeOut(10);
	});
</script>
<?php  } ?>

<div id="container">
<div class="zoom">
<div class="cover"></div>

<div class="error_dialog">
  <img alt="" src="../addons/hm_newdpm/mobimg/error.png">
  <p>还有信息没有填写完哦！</p>
</div>
<div class="signIned" <?php  if($reply['k_templateid']==1) { ?>style="height: 420px;"<?php  } ?>>
   <div class="success" ><s></s>签到成功</div>
	<?php  if($reply['k_templateid']==1) { ?><div class="qd_pid" style="width: 100%;height: 40px;text-align: center;line-height: 40px;font-size: 34px;margin-bottom: 20px;">您是第0个签到</div><?php  } ?>
	<?php  if($reply['registimg']==0||$reply['registimg']=='') { ?>
   	<a href="<?php  echo $this->createMobileUrl('index', array('id' => $rid))?>" class="yellow_btn">确定</a>
	<?php  } else if($reply['registimg']==1) { ?>
   <a href="<?php  echo $this->createMobileUrl('messagesindex', array('id' => $rid))?>" class="yellow_btn">确定</a>
	<?php  } else if($reply['registimg']==2) { ?>
   <a href="<?php  echo $this->createMobileUrl('qhbIndex', array('id' => $rid))?>" class="yellow_btn">确定</a>
	<?php  } else if($reply['registimg']==3) { ?>
   <a href="<?php  echo $this->createMobileUrl('go_toupiao', array('id' => $rid))?>" class="yellow_btn">确定</a>
	<?php  } else if($reply['registimg']==4) { ?>
   <a href="<?php  echo $this->createMobileUrl('showjiabin', array('id' => $rid))?>" class="yellow_btn">确定</a>
	<?php  } else if($reply['registimg']==5) { ?>
	<a href="<?php  echo $this->createMobileUrl('yyyIndex', array('id' => $rid))?>" class="yellow_btn">确定</a>
	<?php  } else if($reply['registimg']==6) { ?>
	<a href="javascript:void(0);" class="yellow_btn" onclick="is_close()">确定</a>
	<script>
        function is_close() {
            WeixinJSBridge.invoke('closeWindow',{},function(res){});
            return false;
        }
	</script>
	<?php  } ?>
</div>
	<div class="wrapper">
	   
	    <div class="companyName" style="padding-top: 20%;">
	      <p>欢迎参加</p>
	      <p><?php  echo $reply['mobtitle'];?></p>
	    </div>
	    <?php  if($reply['ziliao']==1) { ?>
	    <div class="signIn1" >
			<div class="head_box">
			  <div class="headbox"><img alt="" src="../addons/hm_newdpm/mobimg/headbox.png"></div>
				<img alt="" class="avatar" src="<?php  echo tomedia($avatar)?>" />
				<?php  if($xysreply['is_pair']==0) { ?>
				<?php  if($sex==1) { ?><img src="../addons/hm_newdpm/img12/man.png" class="man seximg" style="width: 60px;height: 60px;position: absolute;top:150px;right: 5px;z-index: 9999;">
				<?php  } else { ?><img src="../addons/hm_newdpm/img12/woman.png" class="woman seximg" style="width: 60px;height: 60px;position: absolute;top:150px;right: 5px;z-index: 9999;"><?php  } ?>
				<input type="hidden" value="<?php  echo $sex;?>" class="sex" name="sex">
				<input type="hidden" value="0" class="tokens" name="tokens">
				<?php  } ?>
			</div>
			<div class="userName"><?php  echo $nickname;?></div>
			<?php  if($reply['isfansimg']==1) { ?>
			<section style="margin-bottom: 20px">
				<input type="hidden" name="FansImgValue" id="FansImgValue" value="<?php  echo $imgurl;?>">
				<a href="<?php  echo $this->createMobileUrl('photoqd', array('id' => $rid))?>"><img class="sendImg" src="<?php  echo $imgurl;?>" style="height: 250px;width: 250px;display: block">
					<div style="width: 248px;height: 50px;line-height: 50px;color:#fff;text-align: center;font-size: 16px;background: rgba(0,0,0,0.45);position: absolute;left: 50%;margin-left: -125px;top: 200px;">点击重拍</div>
				</a>
				<!--<a href="javascript:void(0);" class="blue_btn sendImg-btn"><?php  if(empty($reply['fansimgtitle'])) { ?>上传图片<?php  } else { ?><?php  echo $reply['fansimgtitle'];?><?php  } ?></a>-->
				<!--<input id="upload" class="photo_file" type="file" name="upload" accept="image/*" onchange="imageUpLoad(this)" style=" width: 510px;height: 100%;top: 0;left: 0;position: absolute;opacity: 0;">-->
			</section>
			<?php  } ?>
			<a href="javascript:void(0);" class="yellow_btn signin-btn">签到</a>
		</div>
		<?php  } else { ?>
		<div class="signIn2">
		    <div class="head_box">
			  <div class="headbox"><img alt="" src="../addons/hm_newdpm/mobimg/headbox.png"></div>
				<img alt="" class="avatar" src="<?php  echo tomedia($avatar)?>" />
				<?php  if($xysreply['is_pair']==0) { ?>
				<?php  if($sex==1) { ?><img src="../addons/hm_newdpm/img12/man.png" class="man seximg" style="width: 60px;height: 60px;position: absolute;top:150px;right: 5px;z-index: 9999;">
				<?php  } else { ?><img src="../addons/hm_newdpm/img12/woman.png" class="woman seximg" style="width: 60px;height: 60px;position: absolute;top:150px;right:  5px;z-index: 9999;"><?php  } ?>
		        <input type="hidden" value="<?php  echo $sex;?>" class="sex" name="sex">
		        <input type="hidden" value="0" class="tokens" name="tokens">
                 <?php  } ?>
			</div>
			<p>请输入您的相关信息，完成签到。</p>
			  <section id="markname1" ><s class="s1"></s><span class="b_top"></span><span class="b_bottom"></span><input type="text" class="nickname" name="realname" id="realname" placeholder="姓名"></section>
				
				<?php  if($reply['ziliao']==2 || $reply['ziliao']==3) { ?> <section id="markname2" ><s class="s2"></s><span class="b_top"></span><span class="b_bottom"></span><input type="tel" class="telphone" name="mobile" id="mobile" placeholder="手机号码"></section><?php  } ?>
				
				<?php  if($reply['ziliao']==3) { ?>

			<section id="markname4"><s class="s4"></s><span class="b_top"></span><span class="b_bottom"></span><input type="text" class="company" name="address" id="address" placeholder="公司名称/部门/职位"></section>

			<?php  } ?>
				<?php  if($reply['qdshow']==1) { ?><section><textarea id="qdword" name="memo" placeholder="留下您宝贵的一言吧。" maxlength=70></textarea></section><?php  } ?>
           <?php  if($reply['isfansimg']==1) { ?>
			<section style="margin-bottom: 20px">
					<input type="hidden" name="FansImgValue" id="FansImgValue" value="<?php  echo $imgurl;?>">
					<a href="<?php  echo $this->createMobileUrl('photoqd', array('id' => $rid))?>"><img class="sendImg" src="<?php  echo $imgurl;?>" style="height: 250px;width: 250px;display: block">
				    <div style="width: 248px;height: 50px;line-height: 50px;color:#fff;text-align: center;font-size: 16px;background: rgba(0,0,0,0.45);position: absolute;left: 50%;margin-left: -125px;top: 200px;">点击重拍</div>
					</a>
				<!--<a href="javascript:void(0);" class="blue_btn sendImg-btn"><?php  if(empty($reply['fansimgtitle'])) { ?>上传图片<?php  } else { ?><?php  echo $reply['fansimgtitle'];?><?php  } ?></a>-->
					<!--<input id="upload" class="photo_file" type="file" name="upload" accept="image/*" onchange="imageUpLoad(this)" style=" width: 510px;height: 100%;top: 0;left: 0;position: absolute;opacity: 0;">-->
				</section>
             <?php  } ?>
			<section><a href="javascript:;" class="yellow_btn signin-btn">签到</a></section>
				<section style="width:100%;height:20px;"></section>
		</div>
		<?php  } ?>


		
	</div>
</div>
<!-- <script type="text/javascript" src="../addons/hm_newdpm/common/zepto.min.js?v=20161124170424"></script> -->
<script type="text/javascript" src="../addons/haoman_base/base/jquery-2.1.4.min.js?v=2016071822351"></script>
<script type="text/javascript" src="../addons/hm_newdpm/mobimg/index.js?v=20161124170424"></script>
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/exif.js?v=20161124170424"></script>
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/uploadImage.js?v=2017124"></script>
	<script>
		$(".seximg").click(function(){
			<?php  if($is_sex !=1) { ?>{return}<?php  } ?>
			if($(this).attr("src") == "../addons/hm_newdpm/img12/man.png"){
				$(this).attr("src",'../addons/hm_newdpm/img12/woman.png');
				$(".sex").val("2");
				$(".tokens").val("1")
			}else if($(this).attr("src") == "../addons/hm_newdpm/img12/woman.png"){
				$(this).attr("src",'../addons/hm_newdpm/img12/man.png');
				$(".sex").val("1");
                $(".tokens").val("1")
			}
		});
	</script>
<script type="text/javascript">
	$(function(){

		$(".signin-btn").click(function(){

		<?php  if($reply['ziliao']!=1) { ?>

			var mobile ='';
            var address ='';

			if(($(".nickname").val()=="")||($(".nickname").val()=="null")){
				$(".error_dialog p").html("请填写姓名！");
				$(".error_dialog").show();
				setTimeout(function(){$(".error_dialog").hide()},3000);
				return;
			}
			
			<?php  if($reply['ziliao']==2 || $reply['ziliao']==3) { ?>

			if(($("#mobile").val()=="")||($("#mobile").val()=="null")){
				$(".error_dialog p").html("请输入手机号！");
				$(".error_dialog").show();
				setTimeout(function(){$(".error_dialog").hide()},3000);
				return;
			}
			mobile = $("input[name='mobile']").val();
			<?php  } ?>
			
			<?php  if($reply['ziliao']==3) { ?>
			if(($("#address").val()=="")||($("#address").val()=="null")){
				$(".error_dialog p").html("请填写公司！");
				$(".error_dialog").show();
				setTimeout(function(){$(".error_dialog").hide()},3000);
				return;
			}
			address = $("input[name='address']").val();
			<?php  } ?>

		<?php  } ?>
            var fansimg = $("input[name='FansImgValue']").val();
			<?php  if($reply['isfansimg']==1) { ?>
		   if(fansimg==''){
               $(".error_dialog p").html("请拍照上传！");
               $(".error_dialog").show();
               setTimeout(function(){$(".error_dialog").hide()},3000);
               return;
             }
			<?php  } ?>

			var $btn = $(this);
			if($btn.hasClass("disabled")) return;
			$btn.addClass("disabled");


			var submitData = {

                <?php  if($reply['isfansimg']==1) { ?>
                "fansimg":fansimg,
                <?php  } ?>

                <?php  if($reply['ziliao']!=1) { ?>
				"realname":$("input[name='realname']").val(),
				"sex":$("input[name='sex']").val(),
				"qdword":$("#qdword").val(),
				"mobile":mobile,
				"address":address,
				"nickname":'<?php  echo $nickname;?>',
				"avatar":'<?php  echo tomedia($avatar)?>',
                "tokens":$(".qd_sex").val()
				<?php  } else { ?>
				"nickname":'<?php  echo $nickname;?>',
				"sex":$("input[name='sex']").val(),
				"avatar":'<?php  echo tomedia($avatar)?>',
                "tokens":$(".tokens").val()
				<?php  } ?>

            };
            $.post('<?php  echo $this->createMobileUrl('ckinfo',array('id'=>$rid,'from_user'=>$page_from_user))?>', submitData, function(idata) {
               $btn.removeClass("disabled");
				if (idata.success == 1) {
					<?php  if($shouqian['status']==0) { ?>
					$(".signIned").show();
					$(".qd_pid").html('您是第'+idata.qd_pid+"个签到");
					$(".cover").show();
					<?php  } else { ?>
					location.href="<?php  echo $this->createMobileUrl('mob_shouqian',array('id'=>$rid,'from_user'=>$page_from_user))?>"
					<?php  } ?>
				}  else{
					$(".error_dialog p").html(idata.msg);
					$(".error_dialog").show();
					setTimeout(function(){$(".error_dialog").hide()},3000);
					return;
				}
            },"json");

		    
		});
	});

    var uploadImg="<?php  echo $this->createMobileUrl("uploadimg", array('rid' => $rid))?>";

    var imageUpLoad = function(e){

        selectFileImage(e,{
            width:200,height:200,
            // error:function(errorMsg){upload.error(errorMsg||'请上传宽高大于200px的图片')},
            error:function(errorMsg){alert(errorMsg||'请上传宽高大于200px的图片')},
            callback:function(base64,rotate){

                // console.log(base64)
//                $(".newloadding").show();
                $("#load").fadeIn(10);
                $("#circle").fadeIn(10);
                $("#circle1").fadeIn(10);

                ajax_imageUpload(base64,rotate);
            }
        })
    }
    var ajax_imageUpload = function(base64,rotate){
        base64 = base64.split('base64,');
        if(base64.length<1){
            return false;
        }
        base64 = base64[1];

        var resultMsg = null
        $.post(uploadImg,{strImg:base64,angel:rotate},function(result) {
            $("#load").fadeOut(10);
            $("#circle").fadeOut(10);
            $("#circle1").fadeOut(10);
            if(result.isResultTrue){
                $("#FansImgValue").val(result.resultMsg.sImgUrl);
                $(".sendImg").attr("src",result.resultMsg.bImgUrl);
//                $(".avatar").attr("src",result.resultMsg.bImgUrl);
                $(".sendImg").css('display','block');
                // alert("成功");
            }else{
                alert(result.resultMsg);
            }
        });
    }
</script>
</div>
<div class="power-by" style="position: fixed;bottom: 10px;width: 100%;left: 0px;right: 0px;font-size: 12px;text-align: center;color:#EAB387;">
	<div class="copyright fixed"><?php  if(empty($reply['copyright'])) { ?> &copy;<?php  echo $_W['account']['name'];?><?php  } else { ?>&copy;<?php  echo $reply['copyright'];?><?php  } ?></div>
</div>
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
			'getLocation','onMenuShareTimeline','onMenuShareAppMessage','onMenuShareWeibo'
	]
	});
	var sharedata = {
		"imgUrl" : "<?php  echo $shareimg;?>",
		"link" : "<?php  echo $sharelink;?>",
		"desc" : "<?php  echo $sharedesc;?>",
		"title" : "<?php  echo $sharetitle;?>"
	};

	wx.ready(function () {
		<?php  if($reply['isallowip']==1) { ?>
		wx.getLocation({
			type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
			success: function (res) {

				var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
				var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
				var speed = res.speed; // 速度，以米/每秒计
				var accuracy = res.accuracy; // 位置精度



				var submitData = {
					lat: latitude,
					lon: longitude,
					lbsip: "<?php  echo $reply['allowip'];?>"
				};


				$.post('<?php  echo $this->createMobileUrl('getlbs',array('id' => $rid))?>', submitData, function(idata) {

					if (idata.success == 1) {
						jQuery("#load").fadeOut(10);
						jQuery("#circle").fadeOut(10);
						jQuery("#circle1").fadeOut(10);
					} else {
						alert(idata.msg);
						location.href = "<?php  echo $this->createMobileUrl('other', array('id' => $rid,'type'=>2))?>";

					}
				},"json");

			},
			fail: function () {
				alert("获取位置失败,请打开GPS功能！");
				location.href = "<?php  echo $this->createMobileUrl('index', array('id' => $rid))?>";

			}
		});
		<?php  } ?>
		<?php  if($reply['is_b_share'] == 2) { ?>
		wx.hideOptionMenu();
		<?php  } else { ?>
		wx.showOptionMenu();
		wx.onMenuShareAppMessage(sharedata);
		wx.onMenuShareTimeline(sharedata);
		wx.onMenuShareQQ(sharedata);
		wx.onMenuShareQZone(sharedata);
		wx.onMenuShareWeibo(sharedata);
		<?php  } ?>
	});

</script>
</html>