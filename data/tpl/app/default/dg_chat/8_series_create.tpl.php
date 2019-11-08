<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>音乐作品</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="email=no">
<meta name="format-detection" content="address=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/wtCommon.css?v=<?php  echo time();?>">
<script src="<?php echo TEMPLATE_PATH;?>/js/jquery.min.js"></script>
<script src="<?php echo TEMPLATE_PATH;?>/wtCommon.js"></script>
<?php  echo register_jssdk(false);?>
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/live.css?v=<?php  echo time();?>">

<script src="<?php echo TEMPLATE_PATH;?>/mobiscroll.custom-2.16.1.min.js"></script>
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/mobiscroll.custom-2.16.1.min.css">
<script type="text/javascript">
function chooseImage2(){
	wx.chooseImage({
	    count: 1, 
	    sizeType: ['compressed'], // 可以指定是原图还是压缩图，默认二者都有
	    sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
	    success: function (res) {
	       var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
	       var firstId=localIds.toString();
	       wx.uploadImage({
	    	    localId: firstId, // 需要上传的图片的本地ID，由chooseImage接口获得
	    	    isShowProgressTips: 1, // 默认为1，显示进度提示
	    	    success: function (res) {
	    	        var serverId = res.serverId; // 返回图片的服务器端ID
	    	        $.post(location.href+"&serverid="+serverId, function(result){
	    	        	$(".img_logo").attr('src',result.imgurl);
	    	        	$("#img_desc").hide();
	    	        });
	    	    }
	    	});
	    }
	});
}
$(function(){
	$(".setIcon").click(function(){
		chooseImage2();
	});
});
</script>
<style type="text/css">
.icon-show{
display: inline-block;
    width: 3.5rem;
    height: 2rem;
    overflow: hidden;
    margin-left: 1rem;
}
.tagSelect {
    margin: 0 5px;
    border-left: 1px solid #eee;
    border-top: 1px solid #eee;
}
.clearfix {
    display: block;
    zoom: 1;
}
.tagSelect span.active {
    background: #f19937;
    border-color: #f19937;
    color: #fff;
}
.tagSelect span {
    width: 25%;
    background: #fff;
    border-right: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px;
    text-align: center;
    display: block;
    float: left;
    font-size: 12px;
    white-space: nowrap;
    overflow: hidden;
}
.item{
  margin-top:15px;
}
.item h3 {
    padding: 0 15px 10px;
}
.submenu{
	    padding-top: 10px;
}

/*加载层*/
.spinner {
  width: 40px;
  height: 40px;
  position: absolute;
  z-index: 9999;
  margin: 60% 0% 0% 40%;
  display: none;
}
 
.container1 > div, .container2 > div, .container3 > div {
  width: 6px;
  height: 6px;
  background-color: #333;
 
  border-radius: 100%;
  position: absolute;
  -webkit-animation: bouncedelay 1.2s infinite ease-in-out;
  animation: bouncedelay 1.2s infinite ease-in-out;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
 
.spinner .spinner-container {
  position: absolute;
  width: 100%;
  height: 100%;
}
 
.container2 {
  -webkit-transform: rotateZ(45deg);
  transform: rotateZ(45deg);
}
 
.container3 {
  -webkit-transform: rotateZ(90deg);
  transform: rotateZ(90deg);
}
 
.circle1 { top: 0; left: 0; }
.circle2 { top: 0; right: 0; }
.circle3 { right: 0; bottom: 0; }
.circle4 { left: 0; bottom: 0; }
 
.container2 .circle1 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}
 
.container3 .circle1 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}
 
.container1 .circle2 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}
 
.container2 .circle2 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}
 
.container3 .circle2 {
  -webkit-animation-delay: -0.7s;
  animation-delay: -0.7s;
}
 
.container1 .circle3 {
  -webkit-animation-delay: -0.6s;
  animation-delay: -0.6s;
}
 
.container2 .circle3 {
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s;
}
 
.container3 .circle3 {
  -webkit-animation-delay: -0.4s;
  animation-delay: -0.4s;
}
 
.container1 .circle4 {
  -webkit-animation-delay: -0.3s;
  animation-delay: -0.3s;
}
 
.container2 .circle4 {
  -webkit-animation-delay: -0.2s;
  animation-delay: -0.2s;
}
 
.container3 .circle4 {
  -webkit-animation-delay: -0.1s;
  animation-delay: -0.1s;
}
 
@-webkit-keyframes bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0.0) }
  40% { -webkit-transform: scale(1.0) }
}
 
@keyframes bouncedelay {
  0%, 80%, 100% {
    transform: scale(0.0);
    -webkit-transform: scale(0.0);
  } 40% {
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
  }
}


/*上传文件美化*/
/*a  upload */
.a-upload {
    padding: 0.5rem 1rem;
    position: relative;
    cursor: pointer;
    color: #888;
    background: #fafafa;
 
    border-radius: 4px;
    overflow: hidden;
    display: inline-block;
    *display: inline;
    *zoom: 1}
    .a-upload  input {

    right: 0;
    top: 0;
  
    filter: alpha(opacity=0);
    cursor: pointer}
    .a-upload:hover {
    color: #444;
    background: #eee;
    border-color: #ccc;
    text-decoration: none}
#tijiao {
       position: relative;
    display: inline-block;
    background: #D0EEFF;
    border: 1px solid #99D3F5;
    border-radius: 4px;
    padding: 0rem 1rem;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 4rem;
}
    #tijiao input {
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
    #tijiao:hover {
    background: #AADFFD;
    border-color: #78C3F3;
    color: #004974;
    text-decoration: none;}
</style>
</head><body>
<div style="    background-color: #000;">
  <div class="spinner">
  <div class="spinner-container container1">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
  <div class="spinner-container container2">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
  <div class="spinner-container container3">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
</div>

</div>

	<div class="main_box_4 topic_create_box">
		<div class="topic_create_one live_nexttopic_set">
			<ul class="nav_list">
				<li class="webkitBox">
						<label class="title_2">音乐封面</label>
						<span class="flex"><a href="javascript:;" class="list_btn_1 setIcon">
						<span id="img_desc">建议750*563</span>
						<i class="icon-show">
						<img class="img_logo" <?php  if($list['room_icon']) { ?>src="<?php  echo $list['room_icon'];?>"<?php  } ?> width="100%" alt=""></i></a></span>
				</li>
				
				<li class="webkitBox">
						<label class="title_2">音乐名称</label>
						<span class="flex"><a href="javascript:;" class="list_btn_1 setTalk"><p><?php  echo $list['room_name'];?></p></a></span>
				</li>
				
				<li class="webkitBox">
						<label class="title_2">音乐介绍</label>
						<span class="flex"><a href="javascript:;" class="list_btn_1 setTalkDesc"><p><?php  echo $list['room_desc'];?></p></a></span>
				</li>
				
			</ul>
			<dl class="album-smbit">
				<dt>音乐介绍图片</dt>
				<dd class="album-item album-add" onclick="chooseimagemo();"></dd>
				<?php  if(!empty($list['chat_imgs'])) { ?>
				<?php  echo $dd;?>
				<?php  } ?>
			</dl>

           
           <!----ajax异步提交 视频----->
           <form method="post" id="addForm" enctype="multipart/form-data">
            <style>
				input.tStyle[type=radio],input.tStyle[type=checkbox]{border: 1px solid #ccc; width:18px; height:18px; position: relative;background: #fff;}
				input.tStyle[type=radio]{ border-radius: 50%;}
				input.tStyle[type=radio]:checked{ background: #f19937; border: none;}
				input.tStyle[type=checkbox]{border-radius:2px;}
				input.tStyle[type=checkbox]:checked{ border: none; background: #f19937;}
				/*input.tStyle[type=checkbox]:after,input.tStyle[type=radio]:after{ content:""; display: block; border:1px solid; border-color: transparent transparent #fff #fff; width:8px; height:5px; position: absolute; left: 50%; top: 50%; -webkit-transform: translate(-75%,-60%) rotate(-45deg);transform: translate(-75%,-60%) rotate(-45deg); -webkit-transform-origin: center top;transform-origin: center top; border-radius:1px;}*/
			</style>
			<ul class="nav_list activityid">
				<li class="webkitBox setTalkMeiTi">
					<label class="title_2">上传音频或视频:</label>
					
                    <a href="javascript:;" class="a-upload"><input type="file"  id="third_url" name="third_url" /></a>
                     <p style="display: none;"><?php  echo $list['third_url'];?></p>
				    
				</li>
				<li class="shangchuang" style="padding: 0rem 1rem;">
					<span class="flex" >
                         <a class="wt_btn_1" id="tijiao" href="javascript:;">保存文件</a>
				    </span>
				</li>
			</ul>
			</form>
            <script type="text/javascript">
            	$("#tijiao").click(function(){
                
     

                if ($(".shangchuang a").text()=='文件已保存') {
					 $(".popup_tips").text('请勿重复提交！');
					 $(".popup_tips").show();
					 setTimeout(function(){$(".popup_tips").hide()},2000);
					 return false;
		        }


                 $(".spinner").show();
				var fileObj = document.getElementById("third_url").files[0]; // js 获取文件对象
				        if (typeof (fileObj) == "undefined" || fileObj.size <= 0) {
				             $(".popup_tips").text("请选择文件");
	                         $(".popup_tips").show();
					         setTimeout(function(){$(".popup_tips").hide()},2000);
				             $(".spinner").hide();
				            return;
				        }
                 var formFile = new FormData();
                 formFile.append("action", "UploadVMKImagePath");
                 formFile.append("file", fileObj); //加入文件对象
                 var data = formFile;
                 var post_url=location.href+"&op=duomeiti";
				 $.ajax({
				     type:"post",                      //请求类型
				     url:post_url,          //URL
				     data:data,   //传递的参数
				     dataType: "json",                 //返回的数据类型
				     cache: false,//上传文件无需缓存
		             processData: false,//用于对data参数进行序列化处理 这里必须false
		             contentType: false, //必须
				    success:function(result){

                      
	                     if (result.success==1) {
	                         $(".popup_tips").text(result.msg);
	                         $(".popup_tips").show();
					         setTimeout(function(){$(".popup_tips").hide()},2000);
					         $(".setTalkMeiTi p").text(result.data.file);
                             $(".spinner").hide();
                             $(".shangchuang a").text('文件已保存');
	                      }else{
                               $(".shangchuang a").text('保存文件');

	                      }                       
	                         

				    }
				  });  





				}); 
				
            </script>
            <!----ajax异步提交 视频end----->
			
			
			<ul class="nav_list">
			<!-- <li class="webkitBox">
					<label class="title_2">排课计划</label>
					<span class="flex"><a href="javascript:;" class="list_btn_1 setTalkGuest"><p><?php  echo $list['count_subject'];?></p></a></span>
			</li> -->
			
			<li class="webkitBox">
					<label class="title_2">音乐价格</label>
					<span class="flex"><a href="javascript:;" class="list_btn_1 setTalkGuestInfo"><p><?php  echo $list['series_price'];?></p></a></span>
			</li>
			</ul>


			
			<div class="item">
			<h3><span class="fr gray f12">最多选择2个话题分类标签</span></h3>
					<div class="tagSelect clearfix">
					<?php  if(is_array($tag_record)) { foreach($tag_record as $trecord) { ?>
						 <span class="reward_tag tags_<?php  echo $trecord['id'];?>" attr-id="<?php  echo $trecord['id'];?>"><?php  echo $trecord['tag_name'];?></span>
					<?php  } } ?>
					</div>
			</div>
		<script>
		function litags(obj){
			$(obj).addClass('active').siblings().removeClass('active');
		}
	</script>
			<div class="submit_box">
				<a class="wt_btn_1 setNewLiveNext" href="javascript:;">保存</a>
			</div>
		</div>
</div>


<!--修改话题名称-->
<div class="geneBox TopicNextTalkBox">
	<div class="main">
	<div class="gene_content">
		<div class="gene-textarea">
		<textarea class="nexttopic_talk_textarea nexttopic_talkname_textarea" value="" placeholder="请输入系列课名称"></textarea>
		</div>
	</div>
	<div class="gene_bottom both">
		<span><a href="javascript:;" class="gene_btn gene_cancel">取消</a></span>
		<span><a href="javascript:;" class="gene_btn gene_confirm">确定</a></span>
	</div>
	</div>
</div>


<div class="geneBox TopicNextTalkDescBox">
	<div class="main">
	<div class="gene_content">
		<div class="gene-textarea">
		<textarea class="nexttopic_talkdesc_textarea nexttopic_talk_textarea" value="" placeholder="请输入系列课介绍"></textarea>
		</div>
	</div>
	<div class="gene_bottom both">
		<span><a href="javascript:;" class="gene_btn gene_cancel">取消</a></span>
		<span><a href="javascript:;" class="gene_btn gene_confirm">确定</a></span>
	</div>
	</div>
</div>

<div class="geneBox TopicNextTalkGuestBox">
	<div class="main">
	<div class="gene_content">
		
			<div class="gene-Min">
			<div class="text">
				<input type="text" placeholder="请输入课程计划(共多少节课)" class="nexttopic_talkguest_textarea">
			</div>
		</div>
		<!--<textarea class="nexttopic_talkguest_textarea nexttopic_talk_textarea" value="" placeholder="请输入课程计划(共多少节课)"></textarea>-->

	</div>
	<div class="gene_bottom both">
		<span><a href="javascript:;" class="gene_btn gene_cancel">取消</a></span>
		<span><a href="javascript:;" class="gene_btn gene_confirm">确定</a></span>
	</div>
	</div>
</div>

<div class="geneBox TopicNextTalkGuestInfoBox">
	<div class="main">
	<div class="gene_content">
		<div class="tit">
			<h3>输入金额</h3>			
		</div>
		<div class="gene-Min">
			<div class="text">
				<input type="text" placeholder="请输入系列课价格~" class="nexttopic_talkguestinfo_textarea">
			</div>
		</div>
		
	</div>
	<div class="gene_bottom both">
		<span><a href="javascript:;" class="gene_btn gene_cancel">取消</a></span>
		<span><a href="javascript:;" class="gene_btn gene_confirm">确定</a></span>
	</div>
	</div>
</div>
<div class="geneBox fileid">
	<div class="main">
	<div class="gene_content">
		<div class="gene-textarea">
		<textarea class="nexttopic_talkguestinfo_textarea nexttopic_talk_textarea" value="" placeholder="请输入主要讲人介绍信息"></textarea>
		</div>
	</div>
	<div class="gene_bottom both">
		<span><a href="javascript:;" class="gene_btn gene_cancel">取消</a></span>
		<span><a href="javascript:;" class="gene_btn gene_confirm">确定</a></span>
	</div>
	</div>
</div>
<!-- 弹框 -->
<style>
    .flex,.flexC{display: flex;}
    .flexC{flex-direction: column;}
    .flex>.sub,.flexC>.sub{flex:1;}
    .tc{text-align: center;}
    .mid{position: absolute;z-index: 1;border-radius: 6px;top: 50%;left: 50%;transform:translate(-50%,-50%);}
    .popup{position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 10;}
    .popupbg{width: 100%;height: 100%;position: absolute;top: 0;left: 0;background: rgba(0, 0, 0, 0.5);}
    .popup_box{width: 70%;padding: 15px;background: #fff;font-size: 14px;}
    .popup_title{padding-bottom:10px;}
    .popup_content{padding: 15px 0;}
    .popup_btn{line-height: 36px;}
    .popup_btn div{padding: 0 10px;background: #f19937;color: #fff;border-radius: 6px; margin-top: 20px;}
    .popup_btn div:nth-child(2){border:1px solid  #f19937;color: #f19937;background: #fff;margin-left: 30px;}
    .popup_btn div:active{background: rgba(241, 153, 55, 0.8);}
    .popup_btn div:nth-child(2):active{background: rgba(241, 153, 55, 0.1);}
	.gridXb{ position: relative;}
	.gridXb::before{content:" "; display: block;width: 100%;height: 1px; position: absolute; background:#ececec; box-sizing: border-box;bottom: 0; -webkit-transform-origin: bottom center;transform-origin: bottom center;}



</style>
<div class="popup " style="display:none">
    <div class="popup_box flexC mid">
        <div class="popup_title tc gridXb">确认删除吗？</div>
<!--         <div class="popup_content sub"></div> -->
        <div class="popup_btn flex tc"><div class="sub" id="submit">确认</div><div class="sub" id="cancel">取消</div></div>
    </div>
    <div class="popupbg"></div>
</div>

<style>
    .mid{position: absolute;top: 50%;left: 50%;transform:translate(-50%,-50%);}
    .popup_tips{background: #3E454C;display: inline-block;font-size: 14px;color: #fff;line-height: 1.5;text-align: center;border-radius: 20px;padding: 5px 20px;}
</style>
<div class="popup_tips mid" style="display:none"></div>

<script type="text/javascript">
var tags="<?php  echo $list['tags'];?>";
var series_id = "<?php  echo $list['id'];?>";
function chooseImage(){
	var posturl=location.href;
	wx.chooseImage({
		count: 1,
		sizeType: ['compressed'], // 可以指定是原图还是压缩图，默认二者都有
		sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
		success: function (res) {
			var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
			var firstId=localIds.toString();
			wx.uploadImage({
				localId: firstId, // 需要上传的图片的本地ID，由chooseImage接口获得
				isShowProgressTips: 1, // 默认为1，显示进度提示
				success: function (res) {
					var serverId = res.serverId; // 返回图片的服务器端ID
					$.getJSON(posturl+"&mediaid="+serverId, function(result){
						$(".upload_topic_otherqr").empty();
						$(".upload_topic_otherqr").append('<img id="otherqr_logo" src="'+result.imgurl+'">');
						$("#qrcode_url").val(result.imgurl);
						$("otherqr").addClass('on');
					});
				}
			});
		}
	});
}
function chooseimagemo(){
	wx.chooseImage({
		count: 1,
		sizeType: ['compressed'], // 可以指定是原图还是压缩图，默认二者都有
		sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
		success: function (res) {
			var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
			var firstId=localIds.toString();
			wx.uploadImage({
				localId: firstId, // 需要上传的图片的本地ID，由chooseImage接口获得
				isShowProgressTips: 1, // 默认为1，显示进度提示
				success: function (res) {
					var serverId = res.serverId; // 返回图片的服务器端ID
					$.getJSON(location.href+"&mediaid="+serverId, function(result){
						$(".album-smbit").append('<dd class="album-item album-img" style="background-image: url(' + result.imgurl+ ');"></dd>');
					});
				}
			});
		}
	})
}
function del(obj,num){
	$(".popup").show();
	$("#submit").click(function(){
		$(".popup").hide();
		$(obj).parent().remove();
	});
	$("#cancel").click(function(){
		$(".popup").hide();
		obj ='';
	});
	// if(confirm("确认删除吗?")){
	// 	$(obj).parent().remove();
	// }
}

$("input:radio[name='topic_style']").change(function(){
		if($(this).val()==2){
			$("#file_iddiv").css("display","block");
			$(".activityid").hide();
		}else if($(this).val() ==1 ){
			$(".activityid").show();
			$("#file_iddiv").css("display","none");
		}

});

$(function(){
	if(tags!=''){
		var tagsarray=tags.split(',');
		for(i=0;i<tagsarray.length;i++){
			$(".tags_"+tagsarray[i]).addClass("active");
		}
		$(".second").show();
	}
	
	
	$(".reward_tag").click(function(){
		$(".second").show();
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			return;
		}else{
			$(this).addClass("active");
		}
		
		var size=$(".reward_tag.active").size();
		if(size==3){
			$(".popup_tips").text('只能选择2个标签');
			$(".popup_tips").show();
			setTimeout(function(){$(".popup_tips").hide()},2000);
			$(this).removeClass('active');
			return;
		}
		var data={};
		data.id=$(this).attr("attr-id");
        data.pid=$(this).attr("attr-id");
		data.op="tags";		
		$(".submenu").empty();
		$.post(location.href,data,function(res){
			
				if(res.success==2){
					var html='';
					for(var i=0;i<res.tags.length;i++){
						html+='<span class="reward_tag1 tags_'+res.tags[i].id+'" attr-id="'+res.tags[i].id+'" onclick="litags(this)">'+res.tags[i].tag_name+'</span>';
					}
					$(".submenu").append(html);
				}else if(res.success==1){
					topic_tag=data.id;
					pindex=1;
					var postData={pindex: pindex,tags:data.id};
					//console.log(postData)
					$("#topic_list").empty();
					loadHtml(postData);
					// $(".mytag").removeClass('active'); 
					// $(obj).addClass('active'); 
					
				}
			})
	});
	$(".reward_tag1").click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			return;
		}else{
			$(this).addClass("active");
		}
		
		var size=$(".reward_tag1.active").size();
		if(size==2){
			$(".popup_tips").text('只能选择1个标签');
			$(".popup_tips").show();
			setTimeout(function(){$(".popup_tips").hide()},2000);
			$(this).removeClass('active');
			return;
		}
	});
	
	$(".passwordqr_choose").click(function(){
		chooseImage();
	});
	
	$(".setTalk").click(function(){
		$(".nexttopic_talkname_textarea").val($(this).text());
		$(".TopicNextTalkBox").toggle();
	});
	
	$(".setTalkDesc").click(function(){
		$(".nexttopic_talkdesc_textarea").val($(this).text());
		$(".TopicNextTalkDescBox").toggle();
	});
	
	$(".setTalkGuest").click(function(){
		$(".nexttopic_talkguest_textarea").val($(this).text());
		$(".TopicNextTalkGuestBox").toggle();
	});
	
	$(".setTalkGuestInfo").click(function(){
		$(".nexttopic_talkguestinfo_textarea").val($(this).text());
		$(".TopicNextTalkGuestInfoBox").toggle();
	});

	$(".gene_cancel").click(function(){
		$(".geneBox").hide();
	});
	
	$(".TopicNextTalkBox .gene_confirm").click(function(){
		var text=$(".nexttopic_talk_textarea").val();
		$(".setTalk p").eq(0).text(text);
		$(".geneBox").hide();
	});
	
	$(".TopicNextTalkDescBox .gene_confirm").click(function(){
		var text=$(".nexttopic_talkdesc_textarea").val();
		$(".setTalkDesc p").eq(0).text(text);
		$(".geneBox").hide();
	});
	
	$(".TopicNextTalkGuestBox .gene_confirm").click(function(){
		var text=$(".nexttopic_talkguest_textarea").val();
		$(".setTalkGuest p").eq(0).text(text);
		$(".geneBox").hide();
	});
	
	$(".TopicNextTalkGuestInfoBox .gene_confirm").click(function(){
		var text=$(".nexttopic_talkguestinfo_textarea").val();
		$(".setTalkGuestInfo p").eq(0).text(text);
		$(".geneBox").hide();
	});
		
    


	$(".setNewLiveNext,.backone").click(function(){
		if($(".setTalk p").eq(0).text()==''){
			$(".popup_tips").text('请设置音乐名称!');
			$(".popup_tips").show();
			setTimeout(function(){$(".popup_tips").hide()},2000);
			return false;
		}
		if($(".setTalkDesc p").eq(0).text()==''){
			$(".popup_tips").text('请设置音乐介绍!');
			$(".popup_tips").show();
			setTimeout(function(){$(".popup_tips").hide()},2000);
			return false;
		}
		if ($(".setTalkMeiTi p").eq(0).text()=='') {
			 $(".popup_tips").text('请保存文件！');
			 $(".popup_tips").show();
			 setTimeout(function(){$(".popup_tips").hide()},3000);
			 return false;
		}

	
		

		
//		var size=$(".reward_tag.active").size();
//		if(size==0){
//			$(".popup_tips").text('必须选择话题分类标签!');
//			$(".popup_tips").show();
//			setTimeout(function(){$(".popup_tips").hide()},2000);
//			return false;
//		}

		var imgurls=[];
		$(".album-img").each(function(){
			var img=$(this).css("background-image");
			imgurls.push(img.split("(")[1].split(")")[0]);
			imgurls.join(",");
		});
		var Topic={};
		Topic.room_name=$(".setTalk p").eq(0).text();
		Topic.room_desc=$(".setTalkDesc p").eq(0).text();
		Topic.chat_imgs=imgurls;
		Topic.room_icon=$(".img_logo").attr('src');
		Topic.count_subject=$(".setTalkGuest p").eq(0).text();
	    Topic.series_price=$(".setTalkGuestInfo p").eq(0).text();
	    Topic.third_url=$(".setTalkMeiTi p").eq(0).text();  //音频或是视频
	    //alert(Topic.third_url);
	    var reward_tags=new Array();
		$(".reward_tag.active").each(function(){
			reward_tags.push($(this).attr('attr-id'));
		});
		reward_tags=reward_tags.join(',');
		var reward_tags1=new Array();
		$(".reward_tag1.active").each(function(){
			reward_tags1.push($(this).attr('attr-id'));
		});
		reward_tags1=reward_tags1.join(',');
		Topic.tags=reward_tags+","+reward_tags1;
		var post_url=location.href+"&create=true&series_id="+series_id;
		$.post(post_url,Topic,function(result){
			if(result.success==1){
			    $(".popup_tips").text('添加作品功能，等待管理员的审核！');
			    $(".popup_tips").show();
			    setTimeout(function(){$(".popup_tips").hide()},2000);
				location.href="<?php  echo $this->createMobileUrl('chat_index')?>"+"&room_id="+result.room_id;
			}else{
				$(".popup_tips").text(result.data);
				$(".popup_tips").show();
				setTimeout(function(){$(".popup_tips").hide()},2000);
			}
		 
		});

	});

})
</script>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=8&c=utility&a=visit&do=showjs&m=dg_chat"></script></body></html>