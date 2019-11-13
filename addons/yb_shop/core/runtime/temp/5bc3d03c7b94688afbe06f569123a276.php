<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/about\about_info.html";i:1537249733;s:68:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/base.html";i:1537407274;}*/ ?>
<!DOCTYPE html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php if($site_name != '' || !empty($site_name)): ?><?php echo $site_name; else: ?>请在版权设置里配置您的站点名称<?php endif; ?></title>
    <script src="/public/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/public/js/vue.js"></script>
    <link href="./favicon.ico?v=<?php echo time(); ?>" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="/public/css/linecons.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/static/bast/bootstrap.css">
    <link rel="stylesheet" href="/public/static/bast/xenon-core.css">
    <link rel="stylesheet" href="/public/static/bast/font-awesome.min.css">
    <link rel="stylesheet" href="/public/static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" href="/public/static/h-ui/css/style.css"/>
    <link rel="stylesheet" href="/public/static/Hui-iconfont/1.0.8/iconfont.css"/>

    <script>
        var UM_SITE_ROOT = '__CONF_SITE__';
        console.log(UM_SITE_ROOT);
    </script>

    
    <style>.new_logo .logo-expanded {color:#fff;font-size:14px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;width:100px; display: block;margin-left: 10px;background: #000;border-radius: 4px; height: 30px; line-height: 30px; text-align: center;padding:0 5px;margin-top:15px;margin-bottom: 5px;}
    .input-text {margin-bottom:0 !important;}
    .top_menu { height:50px; line-height: 50px; background: #fff;width:calc(100% - 200px);position: fixed;z-index: 1;top:0;left:200px;border-bottom:1px solid #eeeeee;}
    .top_menu a {display:block;float:right;height:50px; line-height: 50px;width:100px; text-align: center;border-left:1px solid #eeeeee;}
    .clear {clear:both;}
    .btn {margin-bottom:0;}
    body {line-height: 1.6 !important; overflow-x: hidden;}
    .left_cur a i:before ,.left_cur ul li .cur_s .title ,.left_cur .cur_tit ,li.left_cur > a:before {color:#444 !important;}
    .left_cur {    background: rgba(55, 87, 109, 0.05);}
    .logo-env .new_logo {padding-left:36px;}
    .logo-env .new_logo .wq_logo {margin-left:-36px;width:28px;height: 28px;float: left;border-radius: 50%;}
    .logo-env .new_logo:after {clear:both;}
    .tool_box a span ,.tool_box a:hover span {color:#666 !important;}
    .left_btn_box {padding:3px 10px 0 10px;justify-content:center;display: flex;}
    .left_btn_box a {display:block;height: 28px; line-height: 26px;width:80px;color: #fff; text-align: center;    border-radius: 2px;}
    .left_btn_box a.btn_li01 {background:rgb(25, 200, 91);border-bottom-right-radius: 0; border-top-right-radius: 0;}
    .left_btn_box a.btn_li02 {background:rgb(0, 193, 222);border-bottom-left-radius: 0; border-top-left-radius: 0;}
    .left_btn_box a.btn_li01:hover {background:rgb(21, 186, 93);}
    .left_btn_box a.btn_li02:hover {background:rgb(2, 182, 209);}
    .wq_bottom_btn {position:fixed;bottom:0;left:230px;width:100%;background: #fff;justify-content:center;display: flex; height: 80px; line-height: 80px;}
    .sidebar-menu {min-width: 122px !important;width: 122px !important; overflow: hidden;background: #fff !important;}
    .main-menu-scroll{height: calc(100% - 130px);overflow-x: hidden;width: 200px;overflow-y: scroll;}
    .main-menu-scroll::-webkit-scrollbar {display: none;}
    .new_left_menu {width:86px; height: 100%;display: table-cell;position: relative;background: #253350;    z-index: 1;}
    .sidebar-menu.fixed .sidebar-menu-inner {left:86px !important;border-right: 1px solid #eeeeee;}
    .f_name_box {display: block; height: 50px; line-height: 50px;}
    .f_name_box.cur_name {background: rgba(255,255,255,1) !important}
    .new_left_menu a {text-decoration:none;}
    .new_left_menu a span {color:#b3b3b3;font-size:13px;}
    .new_left_menu a i {margin-left:17px;display:inline-block;color:#b3b3b3;margin-right: 5px;}
    .new_left_menu a.cur_name i ,.new_left_menu a.cur_name .big_class_name {color: #00a0e9;}
    .main-menu-scroll {width:122px !important;}
    /*		.sidebar-menu .main-menu a {color: #444 !important;background: rgba(55, 87, 109, 0.05);}*/
    .sidebar-menu .main-menu a {color: #444 !important;padding-left:20px !important;}
    .sidebar-menu .main-menu .cur_s a ,.sidebar-menu .main-menu .cur_s a:visited ,.sidebar-menu .main-menu .left_cur ul li.cur_s a>span{ background: rgba(255, 255, 255, 1) !important;color: #00a0e9 !important;border-right: 1px solid #eeeeee;}
    .title.cur_tit {color:#444 !important;font-weight: bold;}
    /*		.left_cur {background:#fff !important;}*/
    .cur_s .sidebar-menu .main-menu a {background:#fff !important;}
    .sidebar-menu .main-menu ul li a {padding-left:20px !important;}
    /*		.left_cur ul li a {background:#fff !important;}*/
    .left_cur ul li {background:#fff !important;}
    .sidebar-menu .main-menu {margin-top:0 !important;}
    .top_big_class_name { height: 50px;line-height: 50px; text-align: center;overflow: hidden;border-bottom: 1px solid;white-space: nowrap;text-overflow: ellipsis;border-bottom: 1px solid #eeeeee;font-size:13px;}
    .new_logo {    display: block !important;}
    .sidebar-menu .main-menu .left_cur ul li a>span {color:#777777 !important;}
    .sidebar-menu .main-menu li.has-sub>a:before {content: '\f0d7' !important;}
    .main-menu-scroll {height:100% !important;}
    .page-container {position:absolute;padding-top: 40px;box-sizing: border-box;}
    .new_page_top {height:44px;width:100%;position: fixed;background:#253350;border-bottom: 1px solid #2f3d5a;z-index: 999999;}
    .sidebar-menu.fixed .sidebar-menu-inner {top:44px !important;}
    .new_logo {width:30px;height:30px;float: left;margin-top:7px;margin-left:18px;border-radius: 50%;border:2px solid rgba(255,255,255,0.5);overflow:hidden;}
    .new_logo img {width:26px;height:26px;}
    .app_name {color: #fff;font-size: 18px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;width: 155px;display: block; height:40px; line-height: 40px;margin-top:2px;margin-left:8px;float:left;}
    .new_page_top a  ,.new_page_top a:visited {color:#fff;text-decoration: none;}
    .new_page_top a:hover {color: #b3b3b3;text-decoration: none;}
    .sidebar-menu.fixed .sidebar-menu-inner {position:fixed !important;}
    .new_top_right {float:right;width:180px;height:44px; line-height: 44px;}
    .logout_box {width:153px; height: 44px;background:url(../../yb_shop/core/public/images/logout_icon.png) right center no-repeat;float:left;font-size:13px;margin-left:12px;}
        .left_menu_box {position:fixed;width:86px;top:44px;left:0;}
    .back_sys {width:100px; text-align: center;color:#fff;float:left;}
    </style>
</head>
<body class="page-body">
<div class="new_page_top">
    <div class="new_logo">
        <?php if($about['logo'] != ''): ?>
        <img src="<?php echo $about['logo']; ?>" class="wq_logo">
        <?php else: ?>
        <img src="/public/static/bast/img/wq_shop_logo.png" class="wq_logo">
        <?php endif; ?>
    </div>
    <a href="javascript:void(0);" class="app_name"><?php echo $xcx_name; ?></a>

    <div class="new_top_right">

        <div class="logout_box">
            <?php if($copyright['back_type'] == 1): ?>
                <a href="<?php echo url('login/wxapp'); ?>" class="back_sys">
                    <?php else: if(!empty($last_visit_url)): ?>
                        <a href="<?php echo $last_visit_url; ?>" class="back_sys">
                    <?php else: ?>
                        <a href="<?php echo $siteroot; ?>web/index.php?c=wxapp&a=version&do=home&version_id=<?php echo $version_id; ?>" class="back_sys">
                    <?php endif; endif; ?>
                返回系统
            </a>
            <a href="<?php echo url('login/logout'); ?>" class="right_logout">退出</a>
        </div>
        <div class="clear"></div>
    </div>
    <?php if($endtime['is_show'] ==1): ?>
    <div style="height:44px; line-height:44px;float:right;color:#b3b3b3;font-size:13px;margin-right:15px;">该账号使用有效期至 <?php echo $endtime['time']; ?>，将在<?php echo $endtime['days']; ?>天后过期，请及时付费！  </div>
    <?php endif; ?>
    <div class="clear"></div>
</div>
<div class="page-container" style="border-collapse:inherit;">
    <div class="new_left_menu" id="top_menu">
        <div class="left_menu_box">
        <a v-for="(item, index) in list" v-on:click="top_click(item)" href="javascript:void(0);" :class="item.class"><i :class="item.logo"></i><span class="big_class_name" v-text="item.module_name"></span></a>
        </div>
        </div>

    <div class="sidebar-menu toggle-others fixed" style="" id="sub_menu" v-if="list.length > 0">
        <div class="sidebar-menu-inner ps-container ps-active-y">

            <ul id="main-menu" class="main-menu main-menu-scroll">

                <li v-on:click="sub_click(item)" v-for="(item, index) in list" v-bind:class="{'left_cur' : item.module_id == sub_mid, 'expanded' : expanded && item.module_id == sub_mid && item.sub.length > 0 ,'has-sub' : item.sub.length > 0}">
                    <a href="javascript:void(0);">
                        <span class="title" v-text="item.module_name"></span>
                    </a>
                    <ul v-if="item.sub.length > 0 && expanded && item.module_id == sub_mid" style="display: block;">
                        <li v-on:click="three_click(three_item)" v-for="(three_item, three_index) in item.sub" :style="three_item.module_id == three_mid ? 'display: block;background:rgba(0,0,0,0.07);' : ''" :class="three_item.module_id == three_mid ? 'cur_s' : ''">
                            <a href="javascript:void(0);">
                                <span class="title" v-text="three_item.module_name"></span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>

        </div>
    </div>

    <div class="main-content">
        
<link href="/public/static/umedito/themes/default/_css/umeditor.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/public/css/defau.css">
<article class="cl pd-20">
	<div class="n_tab_line">

            <a href="<?php echo url('about/index'); ?>" class="n_tab_list">商家信息</a>

            <div class="cl"></div>

        </div>

	<form action="" method="post" class="form form-horizontal" id="">
		<input type="hidden" id="id" value="<?php echo $info['id']; ?>">
        <input type="hidden" id="lat" value="<?php echo $info['lat']; ?>">
        <input type="hidden" id="lng" value="<?php echo $info['lng']; ?>">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公司名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" autocomplete="off" value="<?php echo $info['name']; ?>" placeholder="公司名称" class="input-text" id="name">
			</div>
		</div>

		<div class="row cl">

			<label class="form-label col-xs-4 col-sm-2">公司英文名称：</label>

			<div class="formControls col-xs-8 col-sm-9">

				<input type="text" autocomplete="off" value="<?php echo $info['english_name']; ?>" placeholder="公司英文名称" class="input-text" id="english_name">

			</div>

		</div>

		<div class="row cl">

			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>联系人电话：</label>

			<div class="formControls col-xs-8 col-sm-9">

				<input type="text" autocomplete="off" value="<?php echo $info['phone']; ?>" class="input-text" placeholder="联系人电话" id="tel">

			</div>

		</div>

		<div class="row cl">

			<label class="form-label col-xs-4 col-sm-2">QQ：</label>

			<div class="formControls col-xs-8 col-sm-9">

				<input type="text" autocomplete="off" value="<?php echo $info['qq']; ?>" class="input-text" placeholder="QQ" id="qq">

			</div>

		</div>

		<div class="row cl">

			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公司地址：</label>

			<div class="formControls col-xs-8 col-sm-9">

				<input type="text" autocomplete="off" value="<?php echo $info['address']; ?>" class="input-text" placeholder="公司地址" id="address">

			</div>

		</div>

		<div class="row cl">

			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>营业时间：</label>

			<div class="formControls col-xs-8 col-sm-9">

				<input type="text" autocomplete="off" value="<?php echo $info['job_time']; ?>" class="input-text" placeholder="营业时间" id="job_time">

			</div>

		</div>

		<div class="row cl">

			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>邮寄方式：</label>

			<div class="formControls col-xs-8 col-sm-9">
				<div class="skin-minimal">
				<div class="radio-box" style="padding-left:0;">
					<input type="radio" value="1" <?php if($info['is_mention']==1): ?> checked <?php endif; ?> id="radio-1" name="is_mention">
					<label for="radio-1">邮寄</label>
				</div>
					<div class="radio-box">
						<input type="radio" value="2" <?php if($info['is_mention']==2): ?> checked <?php endif; ?> id="radio-2" name="is_mention">
						<label for="radio-2">用户自提</label>
					</div>
					<div class="radio-box">
						<input type="radio" value="3" <?php if($info['is_mention']==3): ?> checked <?php endif; ?> id="radio-3" name="is_mention">
						<label for="radio-3">用户可选择</label>
					</div>
				</div>
			</div>

		</div>

		<div class="row cl">

			<label class="form-label col-xs-4 col-sm-2">LOGO图片：</label>

			<div class="formControls col-xs-8 col-sm-9">



				<p style="height: 150px;width:150px;border: dashed 1px #e5e5e5">

					<img src="<?php echo $info['logo']; ?>" style="width: 150px;height: 150px;" onerror="this.src='/public/goods/img/default_goods_image_240.gif'" alt="" id="imglogo_pic" class="thumbnail">

				</p>

<div style="position: absolute;top:50px;left:200px;color: #ccc;">
	<div class="upload-btn">

				<span>

					<input type="hidden" value="<?php echo $info['logo']; ?>" id="logo_pic" />

				</span>

		<input onclick="select_img('1','zhu');" class="btn btn-default" type="button" value="选择图片">

	</div>
	<br>
建议图片尺寸：150*150px<br>
</div>

			</div>

		</div>

		<div class="row cl" style="">

			<label class="form-label col-xs-4 col-sm-2">简介：</label>
			<div class="formControls col-xs-8">
				<div id="editor" type="text/plain" style="width: 80%; height: 400px;"><?php echo $info['desc']; ?></div>
			</div>

		</div>

                <div class="row cl">

                <label class="form-label col-xs-4 col-sm-2">地图位置：</label>

                 <div class="formControls col-xs-8">

                <input id="keyword" type="text"  style="width: 300px;height:35px;margin-bottom:10px;padding-left:6px;" placeholder="输入关键字" class="input-text radius size-MINI">
                <input style="margin-bottom:0px;" class="btn btn-success radius" onclick="searchKeyword()" type="button" value="搜索">
                <div  id="container" style="border: 1px solid #000000;width:500px;height:300px;margin-top:15px;"></div>

                </div>

                </div>
                <div class="row cl">

                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">

                <input class="btn btn-primary radius" onclick="addSuppAjax()" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">

                </div>

                </div>

	</form>

</article>


    </div>

</div>
<script src="/public/static/bast/xenon-custom.js"></script>
<script src="/public/static/bast/clipboard.js"></script>
<script src="/public/static/bast/TweenMax.min.js"></script>
<script src="/public/static/bast/resizeable.js"></script>
<script src="/public/static/layer/2.4/layer.js"></script>
<script src="/public/js/public_js.js"></script>
<script type="text/javascript" src="/public/static/My97DatePicker/4.8/WdatePicker.js"></script>

<script charset="utf-8" src="https://map.qq.com/api/js?v=2.exp&key=UFVBZ-TCCCF-GWTJD-N3VQY-JHEQH-ZZBDM"></script>
				<script type="text/javascript" src="https://3gimg.qq.com/lightmap/components/geolocation/geolocation.min.js"></script>
				<script type="text/javascript" src="/public/static/umedito/third-party/jquery.min.js"></script>
				<script type="text/javascript" src="/public/static/umedito/third-party/template.min.js"></script>
				<script type="text/javascript" charset="utf-8" src="/public/static/umedito/umeditor.config.js"></script>
				<script type="text/javascript" charset="utf-8" src="/public/static/umedito/_examples/editor_api.js"></script>
				<script type="text/javascript" src="/public/static/umedito/lang/zh-cn/zh-cn.js"></script>
				<!--<article class="cl pd-20">-->
				<script src="/public/menu/js/jquery.artdialog.js"></script>

				<script src="/public/menu/js/iframetools.js"></script>


				<script type="text/javascript">

$(function(){
    var ue =UM.getEditor('editor',{
        imageUrl:"__CONF_SITE__app/Umupload/uploadFile", //处理图片上传的接口
        imageFieldName:"upfile", //上传图片的表单的name
        imagePath: ""
    });
    init();
});

var map;
var searchService,markers = [];
var latlngBounds;
var geolocation = new qq.maps.Geolocation("UFVBZ-TCCCF-GWTJD-N3VQY-JHEQH-ZZBDM", "lyyibaiwq");

function getLocation(){

    var position_option = {
        timeout: 20000
    };
    geolocation.getLocation(showPosition,showError,position_option);

}

function showPosition(position)
{
    curr_lat = position.lat;
    curr_lng = position.lng;

    // 逆地址解析，设置起点的地址位置
    var latLng = new qq.maps.LatLng(curr_lat, curr_lng);
    var geocoder = new qq.maps.Geocoder();
    geocoder.getAddress(latLng);
    geocoder.setComplete(function(result) {

        clearOverlays(markers);
        $("#lat").val(curr_lat);
        $("#lng").val(curr_lng);
        var latLng = new qq.maps.LatLng(curr_lat,curr_lng);

        map.setCenter(latLng);
        latlngBounds.extend(latLng);
        var marker = new qq.maps.Marker({
            map:map,
            position: latLng
        });

        marker.setTitle(result.detail.address);
        markers.push(marker);
        map.fitBounds(latlngBounds);

    });
}


function showError(error)
{
    switch(error.code)
    {
        case error.PERMISSION_DENIED:
            //alert("用户拒绝对获取地理位置的请求。");
            break;
        case error.POSITION_UNAVAILABLE:
            //alert("位置信息是不可用的。");
            break;
        case error.TIMEOUT:
            //alert("请求用户地理位置超时。");
            break;
        case error.UNKNOWN_ERROR:
            //alert("未知错误。" );
            break;
    }
}

//地图事件
function init() {
    var center;
    var hasloc = false;

    var lat=$("#lat").val();
    var lng=$("#lng").val();

    if ($("#lat").val()==''){
        center = new qq.maps.LatLng(34.618130,112.454020);
    }else {
        hasloc = true;
        center = new qq.maps.LatLng(lat,lng);
    }

    var map = new qq.maps.Map(document.getElementById("container"),{
        center:center,
        zoom: 14
    });
    var infoWin = new qq.maps.InfoWindow({
        map: map
    });

    var marker1 = new qq.maps.Marker({
        position: center,
        map: map
    });

    markers.push(marker1);

    //添加监听事件   获取鼠标单击事件
    qq.maps.event.addListener(map, 'click', function(event) {
        clearOverlays(markers);

        var marker=new qq.maps.Marker({
            position:event.latLng,
            map:map
        });
        qq.maps.event.addListener(map, 'click', function(event) {
           marker.setMap(null);

        });
        $("#lat").val(marker.position.lat);
        $("#lng").val(marker.position.lng);
    });

    latlngBounds = new qq.maps.LatLngBounds();
    searchService = new qq.maps.SearchService({
        complete : function(results){
            if(results.type == "CITY_LIST")
			{
                layer.msg('查询结果过多,请添加所在城市重新搜索',{icon:5,time:1500});
				return;
			}

            var pois = results.detail.pois;
            for(var i = 0,l = pois.length;i < l; i++){

                if(i == 0)
                {   var poi = pois[i];
                    $("#lat").val(poi.latLng.lat);
                    $("#lng").val(poi.latLng.lng);
                    var poi = pois[i];
                    latlngBounds.extend(poi.latLng);
                    var marker = new qq.maps.Marker({
                        map:map,
                        position: poi.latLng
                    });

                    marker.setTitle(i+1);
                    markers.push(marker);
                }
                break;
            }
            map.fitBounds(latlngBounds);
        }
    });

    if(!hasloc)
    {
        getLocation();
    }
}
//清除地图上的marker
function clearOverlays(overlays){
    var overlay;
    while(overlay = overlays.pop()){
        overlay.setMap(null);
    }
    markers.forEach(function (item, index, arr) {
        item.setMap(null);
    });
    markers = [];
}
//点击搜索
function searchKeyword() {
    var keyword = document.getElementById("keyword").value;
    var region = "";
    clearOverlays(markers);//清除地图上的marker
    searchService.setLocation(region);
    searchService.search(keyword);
}

//模块输入信息验证

function verify() {

    var name = $("#name").val();

    var tel = $("#tel").val();

    var address = $("#address").val();

    var Mechak = $("#Mechak").val();

    var job_time = $("#job_time").val();

    var desc = UM.getEditor('editor').getContent();

    if (name == '') {

        layer.msg('名称不能为空',{icon:5,time:1000});

        return false;

    }

    if(address == ''){

        layer.msg('地址不能为空',{icon:5,time:1000});

        return false;

    }
    if (job_time == '') {

        layer.msg('名称不能为空',{icon:5,time:1000});

        return false;

    }

    if(desc == ''){

        layer.msg('详情不能为空',{icon:5,time:1000});

        return false;

    }

    return true;

}

var flag = false;//防止重复提交

//添加用户

function addSuppAjax() {

    var id = $("#id").val();

    var name = $("#name").val();

    var tel = $("#tel").val();

    var address = $("#address").val();



    var qq = $("#qq").val();



    var english_name = $("#english_name").val();


    var logo_pic = $("#logo_pic").val();

    var Mechak = $("#Mechak").val();

     var job_time = $("#job_time").val();

    var lat = $("#lat").val();

    var lng = $("#lng").val();

    var desc = UM.getEditor('editor').getContent();

    var is_mention = $('input[name="is_mention"]:checked ').val();

    if(verify() && !flag){

        flag = true;

        $.ajax({

            type : "post",

            url : "<?php echo url('about/index'); ?>",

            data : {

                'id' : id,

                'name' : name,

                'Mechak' : Mechak,

                'tel' : tel,

                'address' : address,

                'desc' : desc,

				'qq':qq,

                'english_name':english_name,

                'logo_pic':logo_pic,

                'job_time':job_time,

                'lat':lat,

                'lng':lng,
				'is_mention':is_mention

            },

            success : function(data) {

                if(data>0){

                    layer.msg('添加成功!',{icon:1,time:1000},function () {

                        window.location.reload();

                    });

                }

                else{

                    flag = false;

                    layer.msg('添加失败',{icon:5,time:1000});

                }

            }

        });

    }

}

//LOGO图片上传

function zhu_images(id,path) {

    $("#logo_pic").val(path);
    $("#imglogo_pic").attr('src',path);

}
function select_img(number,type) {
    art.dialog.open(('__CONF_SITE__admin/images/dialogalbumlist&number=' + number + '&type=' + type), {
        lock : true,
        title : "我的图片",
        width : 900,
        height : 620,
        drag : false,
        background : "#000000",
        scrollbar:false,
    }, true);
}


</script>


<script>
    var str;
    str = '<?php echo json_encode($all_menu); ?>';
    var all_menu = eval(decodeURIComponent(str));

    var root_url = "<?php global $_W; echo $_W['siteroot'].'addons/yb_shop/core/index.php?s=/admin/'; ?>";
    var top_mid = '<?php echo $top_mid; ?>';
    var sub_mid = '<?php echo $sub_mid; ?>';
    var three_mid = '<?php echo $three_mid; ?>';

    var sub_menu_arr = [];

    all_menu.forEach(function (item, index) {
        if(item.module_id == top_mid)
        {
            item.class = 'f_name_box cur_name';
            sub_menu_arr = item.sub? item.sub : [];
        }
        else
        {
            item.class = 'f_name_box';
        }
    });

    var top_menu = new Vue({
        el: '#top_menu',
        data: {
            list:all_menu,
            top_mid: top_mid,
            root_url : root_url,
        },

        methods:{
          
            top_click:function (top_item) {

                if(this.top_mid != top_item.module_id)
                {
                    var val = top_item.module_id;
                    this.top_mid = val;
                    sub_menu.expanded = false;
                    document.cookie = "top_mid=" + val;

                    if(top_item.sub.length > 0)
                    {
                        this.list.forEach(function (item, index) {
                            if(item.module_id == val)
                            {
                                item.class = 'f_name_box cur_name';
                                sub_menu.list = item.sub;
                                sub_menu.sub_mid = 0;
                                sub_menu.three_mid = 0;

                                if(sub_menu.list != null && sub_menu.list != undefined)
                                {
                                    if(sub_menu.list.length > 0)
                                    {
                                        sub_menu.expanded = true;
                                        sub_menu.sub_mid = sub_menu.list[0]['module_id'];
                                    }
                                }
                            }
                            else
                            {
                                item.class = 'f_name_box';
                            }
                        });
                    }
                    else
                    {
                        window.location.href = this.root_url+top_item.url;
                    }

                }

            }
        },

    });

    var sub_menu = new Vue({
        el: '#sub_menu',
        data: {
            list:sub_menu_arr,
            sub_mid: sub_mid,
            three_mid: three_mid,
            expanded:sub_mid > 0,
            root_url : root_url,
        },

        methods:{

            sub_click: function (item) {

                this.expanded = this.sub_mid == item.module_id ? !this.expanded : true;
                this.sub_mid = item.module_id;
                document.cookie = "sub_mid=" + item.module_id;

                if(item.sub.length == 0)
                {
                    window.location.href = this.root_url+item.url;
                }
            },

            three_click: function (item) {

                this.three_mid = item.module_id;
                document.cookie = "three_mid=" + item.module_id;
                window.location.href = this.root_url+item.url;

            }

        },

    });

</script>
</body>
</html>