<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<script src="../addons/hc_face/template/mobile/js/jquery.js?<?php  echo $_W['timestamp'];?>"></script>
	<script type="text/javascript" src='../addons/hc_face/template/mobile/js/jweixin-1.4.0.js?<?php  echo $_W['timestamp'];?>'></script>
	<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/upload.css?<?php  echo $_W['timestamp'];?>">
	<script src="../addons/hc_face/template/mobile/js/layer/layer.js"></script>
	<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/share', TEMPLATE_INCLUDEPATH)) : (include template('common/share', TEMPLATE_INCLUDEPATH));?>
	<title>生成面相报告</title>
	<style type="text/css">
	.upload_photo{
		position:relative;
	}
	.file-btn{
		position: absolute;
		width: 76vw;
		height: 13.4vw;
		top: 0;
		left: 0;
		padding:0;
		outline: none;
		background-color: transparent;
		filter:alpha(opacity=0);
		-webkit-filter:alpha(opacity=0);
		-moz-opacity:0;
		-webkit-opacity: 0;
		opacity: 0;
	}
	.PC_upload,.WX_upload{
		display: none;
	}
	.shadow{
		position:fixed;
		top:0;
		width:100vw;
		height:100vh;
		display: none;
		background:rgba(0,0,0,0.6);
	}
	.focus_wechat{
		width:100vw;
		position:fixed;
		top:50%;
		left:50%;
		display: none;
		transform: translate(-50%,-50%);
	}
	.wechat_img{
		width:46vw;
		margin-bottom:24px;
	}
	.wechat_notice{
		font-size:4.6vw;

	}
</style>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/share', TEMPLATE_INCLUDEPATH)) : (include template('common/share', TEMPLATE_INCLUDEPATH));?>
<script type="text/javascript">

		//调用微信JS api 支付

		function callpay()
		{
			var paytype = '<?php  echo $pay['paytype'];?>';
			var type = 'bg';
			var rid = $('#rid').val();
			var name = $("#username").val();
			if(typeof name == "undefined" || name == '' || name == null){
				layer.msg('请输入您的姓名');
				return false;
			}

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

						data: {type:type,rid:rid,name:name},

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
										window.location.href="./index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=report&rid="+rid+"&m=hc_face"
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

					data: {type:type,rid:rid,name:name},

					dataType: "json",

					success: function(data){

						location.href=data.mweb_url

					}

				});

			}else{
				$.ajax({

					type: "GET",

					url: "<?php  echo $this->createMobileUrl('pay')?>",

					data: {type:type,rid:rid,name:name},

					dataType: "json",

					success: function(data){
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
	<!----------------------------上传照片符合规定么------------------>
	<div class="uploadNotice"></div>
	<div class="uploadContent">
		<div class="titles">您的照片未符合以下标准</div>
		<div class="msg">
			<span></span>
			<span class="bug"></span>
		</div>
		<div class="PC_upload">
			<form class="uploadForm" enctype="multipart/form-data">
				<div class="re_Upload">
					<input type="file" id="file" class="file-btn" name="image">重新上传</input>
				</div>				
			</form>	
		</div>
		<div class="WX_upload">
			<div class="re_Upload" onclick="uploadPhoto()">重新上传</div>
		</div>
	</div>
	<div class="container">
		<!----------------- 开始上传图片 ------------------->
		<div class="upLoadPic" id="upLoadPic1">
			<p class="upPic">拍照/上传</p>
			<p class="upPic_notice">您可以选择打开相册或直接拍照</p>
		</div>
		<div class="photo">
			<div class="light"></div>
			<img id="myPic" src="../addons/hc_face/template/mobile/images/photo.png">
			<canvas id="myCanvas" width="" height=""></canvas>
			<div class="line"></div>
		</div>
		<!----------------- 开始扫描结果 ------------------->

		<div class="scan">
			<div class="tabList">
				<div class="tabItem selTab">测量三庭长度</div>
				<div class="tabItem">定位五官</div>
				<div class="tabItem">综合分析</div>
			</div>
			<div class="tabDivList">
				<div class="tabDiv">
					<div class="tabDiv_content">
						<span>上庭数据提取</span>
						<img class="loadingPic0" src="../addons/hc_face/template/mobile/images/loading.png">
						<img class="right0" src="../addons/hc_face/template/mobile/images/right.png">
					</div>
					<div class="tabDiv_content">
						<span>中庭数据提取</span>
						<img class="loadingPic1" src="../addons/hc_face/template/mobile/images/loading.png">
						<img class="right1" src="../addons/hc_face/template/mobile/images/right.png">
					</div>
					<div class="tabDiv_content">
						<span>下庭数据提取</span>
						<img class="loadingPic2" src="../addons/hc_face/template/mobile/images/loading.png">
						<img class="right2" src="../addons/hc_face/template/mobile/images/right.png">
					</div>
				</div>
				<div class="tabDiv">
					<div class="tabDiv_content">
						<span>定位眉头-眉峰-眉尾</span>
						<img class="loadingPic3" src="../addons/hc_face/template/mobile/images/loading.png">
						<img class="right3" src="../addons/hc_face/template/mobile/images/right.png">
					</div>
					<div class="tabDiv_content">
						<span>定位眼长-眼高</span>
						<img class="loadingPic4" src="../addons/hc_face/template/mobile/images/loading.png">
						<img class="right4" src="../addons/hc_face/template/mobile/images/right.png">
					</div>
					<div class="tabDiv_content">
						<span>定位鼻高-鼻翼宽</span>
						<img class="loadingPic5" src="../addons/hc_face/template/mobile/images/loading.png">
						<img class="right5" src="../addons/hc_face/template/mobile/images/right.png">
					</div>
					<div class="tabDiv_content">
						<span>定位嘴宽-嘴唇厚度</span>
						<img class="loadingPic6" src="../addons/hc_face/template/mobile/images/loading.png">
						<img class="right6" src="../addons/hc_face/template/mobile/images/right.png">
					</div>
				</div>
				<div class="tabDiv">
					<div class="tabDiv_content">
						<span>量取下颌角度</span>
						<img class="loadingPic7" src="../addons/hc_face/template/mobile/images/loading.png">
						<img class="right7" src="../addons/hc_face/template/mobile/images/right.png">
					</div>
					<div class="tabDiv_content">
						<span>对比各部位数据</span>
						<img class="loadingPic8" src="../addons/hc_face/template/mobile/images/loading.png">
						<img class="right8" src="../addons/hc_face/template/mobile/images/right.png">
					</div>
					<div class="tabDiv_content">
						<span>匹配五行格局</span>
						<img class="loadingPic9" src="../addons/hc_face/template/mobile/images/loading.png">
						<img class="right9" src="../addons/hc_face/template/mobile/images/right.png">
					</div>
				</div>
			</div>
		</div>
		<div class="upLoadPic" id="upLoadPics">
			<p class="notice">满足以下要求结果更准确</p>
			<div class="notice_content">
				<div class="item">正面</div>
				<div class="item">面部呈现完整</div>
				<div class="item">无刘海遮挡</div>
			</div>
			<div class="notice_content">
				<div class="item">五官清晰</div>
				<div class="item">不戴眼镜</div>
			</div>
			<div class="PC_upload">
				<form class="uploadForm" enctype="multipart/form-data">
					<div class="upload_photo">
						<input type="file" id="file" class="file-btn" name="image">
						<img src="../addons/hc_face/template/mobile/images/camera.png">
						<span>拍照/上传美图</span>
					</input>
				</div> 
			</form>	
		</div>
		<div class="WX_upload">
			<div class="upload_photo" onclick="uploadPhoto()">
				<img src="../addons/hc_face/template/mobile/images/camera.png">
				<span>拍照/上传美图</span>
			</div> 
		</div>
	</div>
	<!----------------- 确认好图片开始上传 ------------------->
	<div class="submitPic">
		<div class="result">
			<div class="result_list">
				<span>头部姿势</span>
				<span class="head"></span>
				<img src="../addons/hc_face/template/mobile/images/confirm.png">
			</div>
			<div class="result_list">
				<span>左眼状态</span>
				<span class="left_eye"></span>
				<img src="../addons/hc_face/template/mobile/images/confirm.png">
			</div>
			<div class="result_list">
				<span>右眼状态</span>
				<span class="right_eye"></span>
				<img src="../addons/hc_face/template/mobile/images/confirm.png">
			</div>
			<input type="hidden" class="face_token" value="">
		</div>
		<div class="upload_photo" onclick="submit()">
			<span style="font-size:5vw;">确认提交</span>
		</div>
		<div class="PC_upload">
			<!-- <div class="reUpload">
				<input type="file" id="file" class="file-btn" name="image">重新上传</input>
			</div> -->
			<form class="uploadForm" enctype="multipart/form-data">
				<div class="reUpload" style="position:relative;">
					<input type="file" id="file" class="file-btn" name="image">重新上传</input>
				</div>
			</form>
		</div>
		<div class="WX_upload">
			<div class="reUpload WX_upload" onclick="uploadPhoto()">
				重新上传
			</div>
		</div>
	</div>
	<!-- 领取结果 -->
	<div class="getResult">
		<div class="column">
			<img class="resultimg" src="../addons/hc_face/template/mobile/images/report_icon.png">
			<span class="Rnotice">报告已生成!</span>
			<span class="name_notice">请输入姓名领取报告</span>
			<input type="hidden" id="rid" value="">
			<input class="inputName" type="text" placeholder="例：张三" id="username">
			<?php  if($wxapp==1) { ?>
			<div class="upload_photo" onclick="subscribe()" style="font-size:4vw;" >关注公众号免费领取报告</div>
			<?php  } else { ?>
			<div class="upload_photo" <?php  if($num>=$pay['free_num']) { ?>onclick="callpay()"<?php  } else { ?>onclick="getreport()"<?php  } ?> style="font-size:4vw;" >领取报告</div>
			<?php  } ?>
		</div>
	</div>
	<!-- ----------------------------关注公众号领取报告------------------------------ -->
	<div class="shadow"></div>
	<div class="focus_wechat">
		<div class="column">
			<img class="wechat_img" src="<?php  echo $lock['qrcode'];?>">
			<span class="wechat_notice">关注公众号后回复关键词"<text style="color:red;font-size:4.3vw;"><?php  echo $lock['reply'];?></text>"领取</span>
		</div>
	</div>
</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript" src="../addons/hc_face/template/mobile/js/upload.js"></script>
<script type="text/javascript">
	$(".uploadNotice").click(function(){
		$(".uploadNotice,.uploadContent").hide()
	})
	var ua = navigator.userAgent.toLowerCase();
	var isWeixin = ua.indexOf('micromessenger') != -1;
	if (!isWeixin) {
    // alert('Dragondean说这不是通过微信内置浏览器');
    $(".PC_upload").show()
}else{
    // alert('微信内置浏览器');
    $(".WX_upload").show()
}

function subscribe(){
	var rid = $("#rid").val();
	var name = $("#username").val();
	if(typeof name == "undefined" || name == '' || name == null){
		layer.msg('请输入您的姓名');
		return false;
	}
	$(".shadow").show();
	$(".focus_wechat").show();
	$.ajax({
		type: "POST",
		url: "<?php  echo $this->createMobileUrl('face',array('method'=>'follow'))?>",
		data: {"rid":rid,"name":name},
		dataType: "json",
		success: function (res) {
			
		}
	});
}
function getreport(){
	var rid = $("#rid").val();
	var name = $("#username").val();
	if(typeof name == "undefined" || name == '' || name == null){
		layer.msg('请输入您的姓名');
		return false;
	}
	$.ajax({
		type: "POST",
		url: "<?php  echo $this->createMobileUrl('face',array('method'=>'report'))?>",
		data: {"rid":rid,"name":name},
		dataType: "json",
		success: function (res) {
			window.location.href="./index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=report&rid="+rid+"&m=hc_face"
		}
	});
}
function submit(){
	$(".submitPic").animate({"opacity":0},300,"linear",function(){$(".submitPic").hide();})
	$(".scan").animate({"opacity":1},400,"linear",function(){$(".scan").show()})

	$(".photo,#myCanvas").css("padding",0)
	var face_token = $(".face_token").val()
	var imgurl = $("#myPic").attr("src")
	$("#myPic").attr("src",imgurl)
	var img=new Image()
	img.src=imgurl;
	$("#myPic").animate(
		{width:"36vw",height:"36vw",margin:"0 auto",borderRadius:'18vw'},800,"linear",function(){$(".line,.light").show();$('#upLoadPics').hide()
		// 获取接口
	})
	getfeatures(imgurl,face_token)
	
}
function getfeatures(imgurl,face_token){
	// 获取五官描点
	$.ajax({
		type: "POST",
		url: "<?php  echo $this->createMobileUrl('face',array('method'=>'submit'))?>",
		data: {"image":imgurl,"face_token":face_token},
		dataType: "JSON",
		success: function (res) {
			allPoints=res.data
			$("#rid").val(res.data.rid);
			// setTimeout(function(){
				draw(allPoints)
			// },800)
		}
	});
}

function uploadPhoto() {
	$(".uploadNotice,.uploadContent").hide()
	wx.chooseImage({
		count: 1,
		sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
		sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
		success: function (res) {
			var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
			uploadImg(localIds[0]);
		}
	});
};
//具体上传图片
function uploadImg(e) {
	wx.uploadImage({
		localId: e, // 需要上传的图片的本地ID，由chooseImage接口获得
		isShowProgressTips: 1, // 默认为1，显示进度提示
		success: function (res) {
			serverId = res.serverId;
			$.ajax({
				url: "<?php  echo $this->createMobileUrl('face',array('method'=>'upload','plat'=>'wx'))?>",
				dataType: "json",
				async: false,
				contentType: "application/x-www-form-urlencoded; charset=UTF-8",
				data: {"mediaId": serverId},
				type: "POST",
				timeout: 30000,
				success: function (res, textStatus) {
					if(res.code==0){
						// ---------------------------上传照片符合规定么------------------//
						$(".bug").html(res.msg)
						$(".uploadContent,.uploadNotice").show()
						$(".uploadContent").animate({
							"bottom":0+"px"
						},400,"linear",
						function(){
							$("#upLoadPic1").hide();
						})
						// ---------------------------上传照片符合规定么------------------//
					}
					// $("#myPic").crossOrigin="anonymous";
					$("#myPic").attr("src",res.data.image)
					$(".face_token").val(res.data.face_token)
					$(".head").html(res.data.rotation);
					$(".left_eye").html(res.data.left);
					$(".right_eye").html(res.data.right);

					// 隐藏上传页   显示结果页
					$(".upLoadPic").animate({
						"opacity":0
					},
					300,
					"linear",
					function(){
						$("#upLoadPic1").hide();
					})
					$(".submitPic").animate({
						"opacity":1,
						"margin-top":-$("#upLoadPics").height()+"px"
					},
					600,
					"linear",
					function(){
						$(".submitPic").show()
					})
				}
			});
		}
	});
}
// PC端提交图片
$(".file-btn").on("change",function(){
	var file = $(this)[0].files[0];
	var fileReader = new FileReader();
	var that=this;
	fileReader.onloadend = function () {
		if (fileReader.readyState == fileReader.DONE) {
			var path = fileReader.result
			$.ajax({
				url: "<?php  echo $this->createMobileUrl('face',array('method'=>'upload'))?>",
				type: 'POST',
				cache: false,
				data: new FormData($(that).parents(".uploadForm")[0]),
				processData: false,
				contentType: false
			})
			.done(function(res) {
				// $("form").reset();
				var res=JSON.parse(res)
				console.log(res)
				if(res.code==0){
					// ---------------------------上传照片符合规定么------------------//
					$(".bug").html(res.msg)
					$(".uploadContent,.uploadNotice").show()
					$(".uploadContent").animate({
						"bottom":0+"px"
					},400,"linear",
					function(){
						$("#upLoadPic1").hide();
					})
					// ---------------------------上传照片符合规定么------------------//
				}
				$("#myPic").attr("src",res.data.image)
				$(".face_token").val(res.data.face_token)
				$(".head").html(res.data.rotation);
				$(".left_eye").html(res.data.left);
				$(".right_eye").html(res.data.right);

				// 隐藏上传页   显示结果页
				$(".upLoadPic").animate({
					"opacity":0
				},
				300,
				"linear",
				function(){
					$("#upLoadPic1").hide();
				})
				$(".submitPic").animate({
					"opacity":1,
					"margin-top":-$("#upLoadPics").height()+"px"
				},
				600,
				"linear",
				function(){
					$(".submitPic").show()
				})

			}).fail(function(res) {
				console.log(res)
			});
		}
	};
	fileReader.readAsDataURL(file);
})
</script>
</html>