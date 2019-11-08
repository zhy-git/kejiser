<?php defined('IN_IA') or exit('Access Denied');?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>投票列表</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
	<link href="../addons/hm_newdpm/img9/index.css?v=222" rel="stylesheet" type="text/css"/>
	<link href="../addons/hm_newdpm/img9/weui1.0.1.min.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="../addons/haoman_base/base/jquery-2.1.4.min.js"></script>
	<link rel="stylesheet" href="../addons/haoman_base/base/swiper.min.css">
	<script type="text/javascript" src="../addons/haoman_base/base/swiper.min.js"></script>
	<style>
		.swiper-container {
			width: 100%;
			height: 100%;

		}
		.swiper-slide {
			font-size: 18px;
			background: #fff;

			/* Center slide text vertically */

		}
		.result{position:fixed;top:50%;left:50%;-webkit-transform:translate(-50%, -50%);transform:translate(-50%, -50%);width:280px;padding:20px 5px 20px 5px;z-index:3000;border-radius:10px;display:none;background: rgba(40, 40, 40, 0.75);color:#FFF; text-align:center;overflow:hidden;font-size:20px;}

	</style>
</head>
	<body>
	<input id="openid" type="hidden" name="openid" value="<?php  echo $from_user;?>"/>
<!--<script src="<?php echo MODULE_URL;?>/template/static/js/jquery.masonry.min.js"></script>-->
<div class="container container-fill">
	<div class="divmain1" style="display: block;max-height: 220px;">
	<div class="swiper-container" style="height: 220px;">
		<div class="swiper-wrapper">
			<?php  if(is_array($option_img)) { foreach($option_img as $row) { ?>
			<div class="swiper-slide" style="width: 100%;height: 220px">
				<a href="javascript:void(0)"><img src="<?php  echo tomedia($row['vote_img'])?>" style="vertical-align: bottom;width: 100%;height: 220px;" ></a>
			</div>
			<?php  } } ?>
		</div>
		<!-- Add Pagination -->
		<!--<div class="swiper-pagination"></div>-->

	</div>


	<!-- Initialize Swiper -->
	<script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            autoplay: 3000,
            loop:true,
            paginationClickable: false
        });

	</script>
	</div>
	<!--<div style="z-index:999999;position: absolute;top: 0px;right: 5px;width: 40px;" onclick="get_list(2);"><img src="../addons/hm_newdpm/img9/haobang2.png" style="width: 100%"></div>-->
<!--<div class="divmain1" style="display: block">-->
	<!--<img src="../addons/hm_newdpm/img9/tpbanner.png" alt="shareImg">-->
<!--</div>-->

<div class="num_box" style="display: block;margin-top: 10px;">

	<script type="text/javascript">

function timer(intDiff){
	window.setInterval(function(){
	var day=0,
		hour=0,
		minute=0,
		second=0;//时间默认值
	if(intDiff > 0){
		day = Math.floor(intDiff / (60 * 60 * 24));
		hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
		minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
		second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
	}
	if (minute <= 9) minute = '0' + minute;
	if (second <= 9) second = '0' + second;
	$('#day_show').html(day+"天");
	$('#hour_show').html('<s id="h"></s>'+hour+'时');
	$('#minute_show').html('<s></s>'+minute+'分');
	$('#second_show').html('<s></s>'+second+'秒');
	intDiff--;
	}, 1000);
}
</script>
<div class="time-item">
    <div class="day">投票结束倒计时</div>
	<strong id="day_show">0天</strong>
	<strong id="hour_show">0时</strong>
	<strong id="minute_show">0分</strong>
	<strong id="second_show">0秒</strong>
</div>

</div>

<div class="divmain11 clearfix">
  <input type="text" value="" name="sci" placeholder="请输入编号或名称" class="inputtxt">
  <div class="divsub" onclick="get_list(1);">搜&nbsp;索</div>
</div>

<section class="content" id="toupiao">
<div id="pageCon" style="padding-bottom: 10px">
<ul class="list_box clearfix" id="list_box" style="position: relative;">

</ul>
	<div id="list_more" class="box" style="margin-top: 16px; text-align: center;margin-bottom: 40px;"><span class="am-text-secondary" onclick="get_list(0);"></span></div>
</div>
</section>

<div style="clear:both;"></div>

	<div id="loadingToast" style="opacity: 1; display: none;">
		<div class="weui-mask_transparent"></div>
		<div class="weui-toast">
			<i class="weui-loading weui-icon_toast"></i>
			<p class="weui-toast__content" style="color:#fff">数据加载中</p>
		</div>
	</div>
	<div id="dialog2" style="opacity: 1;display:none;">
		<div class="weui-mask"></div>
		<div class="weui-dialog">
			<div class="weui-dialog__bd">返回错误！</div>
			<div class="weui-dialog__ft">
				<a href="javascript:hidemod('dialog2');" class="weui-dialog__btn weui-dialog__btn_primary">确定</a>
			</div>
		</div>
	</div>
	<div class="result"></div>
	<div class="copyright"></div>
</div>
	<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script>
    function dialog2(msg){
        $("#dialog2 .weui-dialog__bd").html(msg);
        $("#dialog2").show();
    }
    function loadingToast(msg){
        $("#loadingToast .weui-toast__content").html(msg);
        $("#loadingToast").show();
    }
    function hidemod(boxid){
        $("#"+boxid).hide();
    }
</script>
<script type="text/javascript">
    var limit = 1;
    function get_list(ty){

        if(ty==1){
            var type=1;
            var keyword=$("input[name='sci']").val();
            if(keyword==""){
                dialog2("请输入编号或名称");
                return false;
            }
            $("#pageCon .list_box").html('');
        }else if(ty==1){
            var type=2;
		}else{
//            $("#list_more").html('<div class="am-text-secondary"><span class="am-icon-spinner am-icon-spin"></span> 卖命加载中...</div>');
            var keyword="";
            var type=0;
        }

        $.ajax({
            type : "post",
            url : "<?php  echo $this->createMobileUrl('new_vote_index',array('id'=>$rid,'option_id'=>$option_id))?>",
            data : {
                limit:limit,
                keyword:keyword,
                type:type
            },
            dataType : "json",
            success : function(data) {

                if(data.status==200){
                    var list = data.content;
                    var content = '';
                    for(var i=0; i<list.length; i++){
                        content += '<li class="picCon"><div>'
                            +'<i class="number"><nobr>编号：'+list[i]['number']+'，<span id="get_num_'+list[i]['id']+'">票数：'+list[i]['get_num']+'</span></nobr></i>'
                            +'<a href="javascript:void(0)" class="img"><img src="'+list[i]['img']+'"></a>'
                            +'<div class="clearfix"><p style="line-height: 20px;width: 70%;height: 40px;overflow: auto">'+list[i]['description']+'</p><p style="margin-top: 5px;font-weight: 600">'+list[i]['name']+'</p>'
                            +'<div class="add" id="'+list[i]['id']+'" ><div class="i"  data-id="'+list[i]['id']+'" style="border:#03bd01;position: absolute;right: 5px;top:-25px;width: 50px;height: 50px;" onclick="save_vote(this)"><i><img src="<?php echo MODULE_URL;?>/img9/xin.png"></i>投票</div></div>';
                        +'</div></li>';

                    }
                    $("#pageCon .list_box").append(content);
//                    if(list.length==10){
//                        $("#list_more").html('<span class="am-text-secondary" onclick="get_list(0);">查看更多</span>');
//                    }else{
//                        $("#list_more").html('<span></span>');
//                    }
                    limit++;

                    var intDiff = parseInt(data.endtime);//倒计时总秒数量
                    timer(intDiff);

//                    waterfall();
                }else if(data.status==-103){
                    $("#list_more").html('<span>没有更多记录！</span>');
                }else if(data.status==301){
                    $("#list_more").html('<span>没有搜索到内容！</span>');
                }else if(data.status==401){
                    $("#list_more").html('<span>没有可投票项！</span>');
                }else if (data.status==100){
                    $("#list_more").html('<span>查看排行榜</span>');
				}else{
                    $("#list_more").html('<span>没有更多记录！</span>');
                }
            },
            error : function(xhr, type) {

            }
        });


    }
    get_list(0);

//    function waterfall(limit){
//        $container = $('#list_box');
//        $container.masonry('reload');
//        $container.imagesLoaded(function() {
//            $container.masonry({
//                itemSelector: '.picCon',
//                gutter: 20,
//                isAnimated: true,
//            });
//        });
//    }
    var lastDate=0;
    function save_vote(t){

        loadingToast("投票中");
       var oid=$(t).data("id");

        var timestamp = Date.parse(new Date());
        var nowDate = timestamp / 1000;

        if (nowDate - lastDate > 2) {

            lastDate = nowDate;

           set_vote(oid);
        }else{
            show('您的动作太快了！');
            hidemod("loadingToast");
            return;
        }
//        hidemod("loadingToast");
    }
    function show(str){
        $('.result').html(str);
        $('.result').show();
        setTimeout(function(){
            $('.result').hide();
        }, 2000);
    }
    function set_vote(oid){
        var openid  = $("#openid").val();
//        var latitude=$('#latitude').val();
//        var longitude=$('#longitude').val();
        var latitude=0;
        var longitude=0;
        $.ajax({
            url :"<?php  echo $this->createMobileUrl("vote_save", array('rid' => $rid))?>",
            type : 'post',
            dataType : "json",
            data : {openid:openid,oid:oid,latitude:latitude,longitude:longitude,type:'1'},
            async : false,
            success : function(data) {
                hidemod("loadingToast");
                if(data.success=='0'){

                    $('#get_num_'+oid).html('票数：'+data.msg);

                    show('投票成功！');
                }
                if(data.success=='1'){

                    show('每天只能帮TA投票一次！');
                }
                if(data.success=='2'){

                    show('请勿刷票！');
                }
                if(data.success=='3'){

                    show('您投票机会用完了');
                }
                if(data.success=='4'){

                    location.reload();
                }
                if(data.success=='5'){
                    show(data.msg);
                }
            },
            error : function(msg, error) {
                hidemod("loadingToast");
                show('系统忙，请稍后！!');
            }
        });
    }
</script>

</html>