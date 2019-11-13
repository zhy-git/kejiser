<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:79:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/goods\goods_add.html";i:1541418033;s:68:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/base.html";i:1541418050;s:101:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/goods\controlEditGoodsCommonResources.html";i:1541418035;s:82:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/goods\fileAlbumImg.html";i:1541418034;s:98:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/goods\controlEditGoodsCommonScript.html";i:1541418034;}*/ ?>
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
    </script>
    
<!-- 编辑商品时，用到的JS、CSS资源 -->
<!-- 编辑商品，公共CSS、JS文件引用 -->
<link rel="stylesheet" type="text/css" href="/public/goods/css/product.css">
<link rel="stylesheet" type="text/css" href="/public/css/ns_blue_common.css">
<link href="/public/lunbo/swiper.min.css" rel="stylesheet" />
<!-- 选择商品图，弹出框的样式 -->
<link rel="stylesheet" type="text/css" href="/public/css/defau.css">
<link href="/public/goods/css/jquery.ui.css" type="text/css" rel="stylesheet">
<link href="/public/goods/css/goods_create.css" type="text/css" rel="stylesheet">
<link href="/public/goods/css/base.css" type="text/css" rel="stylesheet">
<link href='/public/goods/css/jquery.gridly.css' rel='stylesheet' type='text/css'>
<link href='/public/goods/css/sample.css' rel='stylesheet' type='text/css'>
<link href='/public/goods/css/select_category_next.css' rel='stylesheet' type='text/css'>
<link href="/public/goods/css/add_goods.css" rel="stylesheet" type="text/css">
<link href="/public/static/umedito/themes/default/_css/umeditor.css" type="text/css" rel="stylesheet">
<link href="/public/goods/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/public/css/mdui.css">
<link href="/public/goods/css/formconfig_index.css" rel="stylesheet" type="text/css">
<link href="/public/goods/css/base1.css" rel="stylesheet" type="text/css">
<link href="/public/goods/css/web.css" rel="stylesheet" type="text/css">
<!-- 简约版 -->
<script src="/public/goods/js/jquery-1.8.1.min.js"></script>
<!--<script src="/public/js/jquery-2.1.1.js"></script>-->
<!--<script src="/public/static/ueditor/third-party/jquery.min.js"></script>-->
<!--<script src="/public/js/mdui.js"></script>-->
<script src="/public/goods/js/image_common.js" type="text/javascript"></script>
<!--  用  验证商品输入信息-->
<script src="/public/goods/js/jscommon.js" type="text/javascript"></script>
<!-- 用 ，加载数据-->
<script src="/public/js/art_dialog.source.js"></script>
<script src="/public/js/iframe_tools.source.js"></script>
<!-- 我的图片 -->
<script src="/public/goods/js/material_managedialog.js"></script>
<script src="/public/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="/public/js/file_upload.js" type="text/javascript"></script>
<script type="text/javascript" src="/public/goods/js/goods_sku_create.js"></script>
<script src="/public/js/vue.js"></script>
<script src="/public/goods/js/release_good_second.js"></script>
<!--<script src="/public/goods/js/select2.js"></script>-->
<script src="/public/lunbo/swiper.min.js"></script>
<script type="text/javascript" src="/public/static/umedito/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/static/umedito/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/static/umedito/_examples/editor_api.js"></script>
<script type="text/javascript" src="/public/static/umedito/lang/zh-cn/zh-cn.js"></script>
<style>
.category-text {display: inline-block;background-color: #FFF;min-width: 150px;height: 30px;line-height: 30px;border: 1px solid #dcdcdc;float: left;}
.category-button {display: inline-block;background-color: #FFF;height: 32px;line-height: 32px;float: left;border: 1px solid #dcdcdc;border-left: none;padding: 0 10px;background-color: #eee;font-size: 13px;}
.select-button {padding:2px 9px;font-size: 12px;border: 1px solid #dcdcdc;background-color: #eeeeee;}
.extend-name-category {margin-bottom: 10px;}
.extend-name-category .do-style {display: inline-block;color: #27a9e3;cursor: pointer;}
.productcategory-selected .label {border-radius: 5px;font-weight: 100;padding:0 10px;}
a {color: #0072D2;text-decoration: none;cursor: pointer;}
/* 规格图片样式*/
.sku-picture-div {overflow: hidden;}
.sku-picture-span {display: inline-block;padding: 0px 11px;border: 1px solid #ccc;cursor: pointer;margin: 0 20px 0 0;}
.sku-picture-box{margin-top:10px;}
.sku-picture-active {border: 1px solid #004a73;background: url(/public/admin/images/icon_choose.gif) no-repeat right bottom;background-color: #eff7fe;}
.sku-picture-h3 {font-size: 14px;font-weight: 600;line-height: 22px;color: #000;clear: both;background-color: #F5F5F5;padding: 5px 0 5px 12px;border: solid 1px #E7E7E7;border-bottom: none;}
/* 商品标签 */
.gruop-button {padding:2px 9px;font-size: 12px;border: 1px solid #dcdcdc;background-color: #eeeeee;float: left;}
.add-on {margin: 0;vertical-align: middle;}
.goods-gruop-div {display: none;float: left;margin-left: 10px;}
.check-button {height: 30px;padding:2px 9px;background-color: #eeeeee;border: 1px solid #cccccc;}
.goods-gruop-select {width: 130px;}
.span-error {height: 30px;line-height: 30px;color: red;display: none;}
/*商品分组  */
.goods-group-line {float: left;margin-right: 15px;}
.goods-group-line select {min-width: 110px;width: 110px;}
.btn-submit {width: 350px;margin: 20px auto 30px;}
/*商品品牌*/
.select2-container--default .select2-selection--single{
	border-radius: 0;
}
.select2-container .select2-selection--single{
	-webkit-user-select:inherit;
} 
.upload-thumb.draggable-element{
	height: 147px !important;
	line-height:147px !important;
	text-align:center;
}
.upload-thumb.draggable-element img{
	display: inline-block !important;
    vertical-align: middle !important;
    max-width: 100% !important;
    max-height: 100% !important;
    height: auto !important;
	width:auto !important;
}
.upload-thumb.sku-draggable-element{
	    height: 147px !important;
	line-height:147px !important;
	text-align:center;
}
.upload-thumb.sku-draggable-element img{
	display: inline-block !important;
    vertical-align: middle !important;
    max-width: 100% !important;
    max-height: 100% !important;
    height: auto !important;
	width:auto !important;
}
.js-goods-spec-value-img.sku-img-check{
    height: 25px;
    width: 25px;
    line-height: 23px;
	text-align:center;
}
.js-goods-spec-value-img.sku-img-check img{
	display: inline-block !important;
    vertical-align: middle !important;
    max-width: 100% !important;
    max-height: 100% !important;
    height: auto !important;
    width: auto !important;
}
</style>
<script>
var timeoutID = null;//延迟双击编辑规格值
var img_id_arr = "";//图片标识ID
var speciFicationsFlag = 0;// 0：商品图的选择，1:商品详情的图片
var shopImageFlag = -1;//所点击的商品图片标识
var goodsFigure = null;//商品图对象
// 实例化编辑器，建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
var group_str = '<?php echo $group_str; ?>';//标签列表
$(function() {
	var width = $(".ncsc-form-goods").width();
	//浏览器窗口监听事件
	$(window).scroll(function() {
		var left = $(".ncsc-form-goods").offset().left;
		if ($(window).height() + $(window).scrollTop() < $(".ncsc-form-goods dl:last").offset().top) {
			$(".btn-submit").css({
				'position' : 'fixed',
				'bottom' : 0,
				'left' : left,
				'z-index' : 1000,
				'width' : width - 30,
				"background-color" : "rgba(204,204,204,0.7)",
				"margin" : 0,
				"padding" : "15"
			});
		} else {
			$(".btn-submit").removeAttr("style");
		}
	});
})
</script>
<style>
    input[disabled], select[disabled], textarea[disabled], input[readonly], select[readonly], textarea[readonly] {
        background-color: #fff;
        cursor: pointer;
    }
    .required {display: inline;}
    html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #eee;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
</style>

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
        
<link rel="stylesheet" type="text/css" href="/public/css/mdui.css">
<script src="/public/js/mdui.js"></script>
<button class="mdui-btn app-btn" mdui-drawer="{target: '#left-drawer'}" style="position: fixed;top:10rem;right:1.5rem;z-index: 999999999;padding:5px 10px;">查看手机端效果</button>
<input type="hidden" id="mod_class_id" value="<?php echo $user_info['mod_class_id']; ?>">
<article class="cl pd-20"  id="get_all">
<div class="mdui-drawer mdui-drawer-right mdui-drawer-close" id="left-drawer">
    <div class="leftPhonewrap" id="leftPhonewrap">
        <div class="holderPhone" style="position: fixed;right: 2rem;top: 8rem;z-index: 999999999999;">
            <div class="wxHd">
                <div id="actName" class="phoneTitle" style="bottom: 15px;width: 100%;left: 0;padding: 0 65px;">
                    <h2>商品详情</h2>
                </div>
            </div>
            <div id="anythingContent" style="background: #fff;overflow:scroll">
                <div class="wrap">
                    <div class="slide_pic" style="height: 250px;">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" >
                                <div class="swiper-slide" v-for="item in goods_img">
                                    <img :src="item.url">
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="goods_info">
                        <div class="goods_price">￥<span>{{goods_price}}</span></div>
                        <div class="goods_count">销量：{{goods_xiao}}</div>
                        <div class="goods_tit">{{ goods_name }}</div>
                        <div class="goods_d">{{ goods_cuxiao }}</div>
                    </div>
                    <div class="goods_type li_arrow"><span class="type_info">规格</span>
                        <div class="type_choice">
                            <ul>
                                <li style="list-style: none;float: left" v-for="item in goods_sku">{{item.name}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="switch_box">图文详情</div>
                    <div class="goods_intro" v-html="goods_desc">
                    </div>
                </div>
            </div>
        </div>
    </div>
     </div>
    <div id="tab_demo" class="HuiTab" style="margin-bottom: 15px;">
        <div class="tabBar clearfix">
            <span onclick="window.location.href='<?php echo url('goods/goodslist'); ?>'">商品列表</span>
            <span class="current" onclick="window.location.href='<?php echo url('goods/add_goods'); ?>'">添加商品</span>
            <div class="l n_tab_add" style="width: auto;">
                <button type="button" class="btn btn-search radius"
                        onclick="gather('淘宝商品一键采集','__CONF_SITE__admin/goods/goods_collect','650px','300px')">
                    淘宝商品一键采集
                </button>
            </div>
        </div>
    </div>
<div class="ncsc-form-goods" style="margin-top:15px;" id="newvue">
    <h3 class="js-goods-info">商品信息</h3>
    <dl style="display: none">
        <dt>条形码添加商品：</dt>
        <dd>
            <input type="text" class="category-text" placeholder="请输入商品条码" id="code_name">
            <button class="category-button" onclick="select_code_name()">查询</button>
        </dd>
    </dl>
    <dl>
        <dt><i class="required">*</i>商品名称：</dt>
        <dd>
            <input class="productname" style="height: 30px; line-height: 30px;" v-model="goods_name" type="text" id="txtProductTitle" placeholder="请输入商品名称，不能超过60个字"
                   oninput='if(value.length>60){value=value.slice(0,60);$(this).next().text("商品名称不能超过60个字符").show();}'/>
            <span class="help-inline">请填写商品名称</span>
        </dd>
    </dl>
    <dl>
        <input type="hidden" value="1" id="goods_lib">
        <dt><i class="required">*</i>商品分类：</dt>
        <dd id="Category" data-flag="category" data-goods-id="0" cid="" data-attr-id="" cname="">
            <span class="category-text" id="cate_name"><?php echo $this_mch_good_cate['cate_name']; ?></span>
            <input type="hidden" value="<?php echo $this_mch_good_cate['cate_id']; ?>" id="cate_id">
            <input type="hidden" value="<?php echo $this_mch_good_cate['cate_id']; ?>" id="cate_id_v1">
            <button class="category-button" onclick="goods_cate('分类选择','__CONF_SITE__admin/goods/goods_cate','500','550')">选择</button>
            <span><label for="g_name" class="error"><i class="icon-exclamation-sign"></i>商品分类不能为空</label></span>
            <span class="help-inline">请选择商品分类</span>
        </dd>
    </dl>
    <dl>
        <dt>商品促销语：</dt>
        <dd>
            <input class="productname" style="height: 30px; line-height: 30px;" v-model="goods_cuxiao" type="text" id="txtIntroduction" placeholder="请输入促销语，不能超过60个字符"
                   oninput='if(value.length>60){value=value.slice(0,60);$(this).next().text("促销语不能超过60个字符").show();}'/>
            <span class="help-inline">商品促销语输入不正确</span>
        </dd>
    </dl>
    <dl style="display: none">
        <dt>关键词：</dt>
        <dd>
            <input class="productname" type="text" id="txtKeyWords" placeholder="商品关键词用于SEO搜索"
                   oninput='if(value.length>40){value=value.slice(0,40);$(this).next().text("商品关键词不能超过40个字符").show();}'/>
            <span class="help-inline">请输入商品促销语，不能超过40个字符</span>
        </dd>
    </dl>
    <dl style="display: none">
        <dt>市场价：</dt>
        <dd>
            <input class="goods_price" style="height: 30px; line-height: 30px;" type="number" id="txtProductMarketPrice" min="0" placeholder="0"/><em
                class="add-on">元</em>
            <span class="help-inline">商品市场不能为空且需是数字</span>
        </dd>
    </dl>
    <dl>
        <dt><i class="required">*</i>销售价：</dt>
        <dd>
            <input style="" class="goods_price" v-model="goods_price" type="number" id="txtProductSalePrice" min="0" placeholder="0"/><em
                class="add-on">元</em>
            <span class="help-inline">商品现价不能为空且需是数字</span>
        </dd>
    </dl>
    <dl style="display: none">
        <dt>成本价：</dt>
        <dd>
            <input style="height: 30px; line-height: 30px;" class="goods_price" type="number" id="txtProductCostPrice" min="0" placeholder="0"/><em
                class="add-on">元</em>
            <span class="help-inline">商品成本不能为空且需是数字</span>
        </dd>
    </dl>
    <dl>
        <dt>基础销量：</dt>
        <dd>
            <input style="width: 144px;" type="number" v-model="goods_xiao" class="span1" id="BasicSales" placeholder="0"/>
            <span class="help-inline">基础销量需是数字</span>
        </dd>
    </dl>
    <dl  style="display: none">
        <dt>基础点击数：</dt>
        <dd>
            <input type="number" class="span1" id="BasicPraise" placeholder="0"/>
            <span class="help-inline">基础点击数需是数字</span>
        </dd>
    </dl>
    <dl <?php if($user_info['mod_class_id']==5): ?> style="display: none" <?php endif; ?>>
        <dt><i class="required">*</i>总库存：</dt>
        <dd>
            <input type="number" style="width: 144px;" class="goods-stock" id="txtProductCount" min="0" value="<?php if($user_info['mod_class_id']==5): ?>999999<?php endif; ?>"/>
            <span class="help-inline">请输入总库存数量，必须是大于0的整数</span>
        </dd>
    </dl>
    <h3 class="js-goods-type">规格分组</h3>
    <dl <?php if($user_info['mod_class_id']==5): ?> style="display: none" <?php endif; ?> >
        <dt>规格属性分组：</dt>
        <dd>
            <select id="goodsType">
                <option value="0">请选择规格属性分组</option>
                <?php if(is_array($goods_attribute_list) || $goods_attribute_list instanceof \think\Collection || $goods_attribute_list instanceof \think\Paginator): if( count($goods_attribute_list)==0 ) : echo "" ;else: foreach($goods_attribute_list as $key=>$attribute): if($goods_attr_id == $attribute['attr_id']): ?>
                <option value="<?php echo $attribute['attr_id']; ?>" selected="selected"><?php echo $attribute['attr_name']; ?></option>
                <?php else: ?>
                <option value="<?php echo $attribute['attr_id']; ?>"><?php echo $attribute['attr_name']; ?></option>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <span class="help-inline">请选择规格属性分组</span>
        </dd>
    </dl>
    <dl>
        <dt><span class="color-red"></span></dt>
        <dd>
            <table class="goods-sku js-goods-sku">
                <tbody>
                <tr>
                    <td colspan="2">
                        <div style="text-align:left;">
                            <h5 style="margin:0;padding:0;font-weight: normal;color: #FF8400;">操作提示</h5>
                            <p style="color:#FF8400;font-size:12px;">点击规格值进行操作。</p>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </dd>
    </dl>
    <dl class="control-group js-spec-table" name="skuTable" style="display: none;height: auto">
        <dt><span class="color-red"></span>商品库存：</dt>
        <dd>
            <div class="controls">
                <div class="js-goods-stock control-group" style="height:auto;font-size: 14px; margin-top: 10px;">
                    <div id="stock-region" class="sku-group">
                        <table class="table-sku-stock">
                            <thead></thead>
                            <tbody></tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </dd>
    </dl>
    <dl class="js-goods-attribute-block" style="display:none;">
        <dt><span class="color-red"></span>商品属性：</dt>
        <dd>
            <div class="controls">
                <table class="goods-sku-attribute js-goods-sku-attribute" style="margin:0;"></table>
            </div>
        </dd>
    </dl>
    <h3 class="js-goods-img">商品图片</h3>
    <dl>
        <dt><i class="required">*</i>商品图片：</dt>
        <dd>
            <div id="goods_picture_box" class="controls" style="background-color:#FFF;border: 1px solid #E9E9E9;">
                <div class="ncsc-goods-default-pic">
                    <div class="goodspic-uplaod" style="padding: 15px;">
                        <div class='img-box' style="min-height:160px;">
                            <div class="upload-thumb" id="default_uploadimg">
                                <img src="/public/goods/img/default_goods_image_240.gif">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <span class="img-error">最少需要一张图片作为商品主图</span>
                        <p class="hint">上传商品图片，<font color="red">第一张图片将作为商品主图</font>,支持同时上传多张图片,多张图片之间可随意调整位置；支持jpg、gif、png格式上传或从图片空间中选择，建议使用尺寸800x800像素以上、大小不超过1M的正方形图片，上传后的图片将会自动保存在图片空间的默认分类中。
                        </p>
                        <div class="handle">
                            <div class="btn radius" style="background: #cccbcb;color:black;">
                                <a id="img_box" nctype="show_image" href="javascript:void(0);">从图片空间选择</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="help-inline">最少需要一张图片作为商品主图</span>
        </dd>
    </dl>
    <dl <?php if($user_info['mod_class_id']==5): ?> style="display: none" <?php endif; ?>>
        <dt><i class="required"></i>规格图片：</dt>
        <dd>
            <div class="sku-picture-div" style="float: left">
            </div>
            <div style="float: left;color: #24b1e7;font-size: 12px;">友情提示：规格图片只能选择一种规格属性上传图片，否则会覆盖</div>
            <div class="clear"></div>
            <div class="sku-picture-box">
            </div>
        </dd>
    </dl>
    <h3 class="js-goods_detail">商品详情</h3>
    <dl>
        <dt><i class="required">*</i>商品描述：</dt>
        <dd>
            <div class="controls" id="discripContainer">
                <textarea id="tareaProductDiscrip" name="discripArea" style="height: 500px; width: 800px;display: none"></textarea>
                <div id="editor" type="text/plain" style="width: 100%; height: 500px;"></div>
                <span class="help-inline">请填写商品描述</span>
            </div>
        </dd>
    </dl>
            <dl <?php if($user_info['mod_class_id']==5): ?> style="display: none" <?php endif; ?>>
        <dt><i class="required"> * </i>运费：</dt>
        <dd>
            <div class="controls">
                <label class="inline normal"><input type="radio" name="fare" value="0"
                                                          checked="checked"/>免邮</label>
                <label class="inline normal"><input type="radio" name="fare" value="1"/> 买家承担运费</label>
                <span class="help-inline">请选择运费类型</span>
            </div>
        </dd>
    </dl>
    <dl id="valuation-method" style="display: none">
        <dt><i class="required">*</i>计价方式：</dt>
        <dd>
            <label class="inline normal"><input type="radio" name="shipping_fee_type" value="3"
                                                      checked="checked"/>计件</label>
        </dd>
    </dl>
    <dl id="express_Company" style="display: none;">
        <dt>运费模板：</dt>
        <dd>
            <select id="expressCompany">
                <option value="0">请选择运费模板</option>
                <?php if(is_array($expressCompany) || $expressCompany instanceof \think\Collection || $expressCompany instanceof \think\Paginator): if( count($expressCompany)==0 ) : echo "" ;else: foreach($expressCompany as $key=>$vo): ?>
                <option value="<?php echo $vo['shipping_fee_id']; ?>"><?php echo $vo['shipping_fee_name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </dd>
    </dl>
    <dl <?php if($user_info['mod_class_id']==5): ?> style="display: none" <?php endif; ?>>
        <dt><i class="required">*</i>库存显示：</dt>
        <dd>
            <div class="controls">
                <label class="inline normal"><input type="radio" name="stock" checked="checked" value="1"/>
                    是</label>
                <label class="inline normal"><input type="radio" name="stock" value="0"/> 否</label>
                <span class="help-inline">请选择库存是否显示</span>
            </div>
        </dd>
    </dl>
    <h3 class="js-goods-other">其他信息</h3>
    <div class="js-mask-category"
         style="position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 90; display: none; background: rgba(0, 0, 0, 0);"></div>
    <dl <?php if($user_info['mod_class_id']==5): ?> style="display: none" <?php endif; ?>>
        <dt><i class="required">*</i>最少购买数：</dt>
        <dd>
            <div class="controls">
                    <input type="number" class="input-mini" min="1" value="1" id="minBuy"/>
                <span class="help-inline">件</span>
                <span class="help-inline">最少购买数必须是大于0的整数</span>
            </div>
        </dd>
    </dl>
    <dl>
        <dt><i class="required">*</i>是否上架：</dt>
        <dd>
            <div class="controls">
                <label class="inline normal"><input type="radio" name="shelves" value="1" checked="checked"/> 立刻上架</label>
                <label class="inline normal"><input type="radio" name="shelves" value="0"/> 放入仓库</label>
            </div>
        </dd>
    </dl>
</div>
<div class="btn-submit">
    <button class="btn-common" id="btnSave" type="button" onClick="SubmitProductInfo(0,'ADMIN_MAIN','SHOP_MAIN')">确认提交
    </button>
</div>
</article>
<style>
    .upload-thumb {
        display: block !important;
        float: left;
        width: 147px !important;
        height: 147px !important;
        position: relative;
    }
    .upload-thumb img {
        width: 100%;
        height: 100%;
    }
    .img-box, .sku-img-box {
        overflow: hidden;
    }
    .off-box, .sku-off-box {
        position: absolute;
        width: 18px;
        height: 18px;
        right: 0;
        top: 0;
        line-height: 18px;
        background-color: #FFF;
        cursor: pointer;
        text-align: center;
        font-size: 20px;
    }
    .black-bg {
        position: absolute;
        right: 0;
        top: 0;
        left: 0;
        bottom: 0;
    }
    .img-error {
        color: red;
        height: 25px;
        line-height: 25px;
        display: none;
    }
</style>
<script src="/public/js/drag-arrange.js" type="text/javascript" charset="utf-8"></script>
<script src="/public/js/ajax_file_upload.js" type="text/javascript"></script>
<script type="text/javascript" src="/public/js/jquery.ui.widget.js" charset="utf-8"></script>
<script type="text/javascript" src="/public/js/jquery.fileupload.js" charset="utf-8"></script>
<input type="hidden" id="album_id" value="<?php echo $detault_album_id; ?>"/>
<script type="text/javascript">
    var dataAlbum;
    $(function () {
        //给图片更换位置事件
        $('.draggable-element').arrangeable();
        var album_id = $("#album_id").val();
        dataAlbum = {
            "group_id": album_id,
            "type": "1,2,3,4",
            'file_path': 'goods/'
        };
        // ajax 上传图片
        var upload_num = 0; // 上传图片成功数量
        $('#fileupload').fileupload({
            url: "__CONF_SITE__admin/upload/photoalbumupload",
            dataType: 'json',
            formData: dataAlbum,
            add: function (e, data) {
                $("#goods_picture_box .img-error").hide();
                $("#goods_picture_box #default_uploadimg").remove();
                //显示上传图片框
                var html = "";
                $.each(data.files, function (index, file) {
                    html += '<div class="upload-thumb draggable-element"  nstype="' + file.name + '">';
                    html += '<img nstype="goods_image" src="/public/admin/images/album/uoload_ing.gif">';
                    html += '<input type="hidden"  class="upload_img_id" nstype="goods_image" value="">';
                    html += '<div class="black-bg" onclick="remlong(this);">';
                    html += '<div class="off-box">&times;</div>';
                    html += '</div>';
                    html += '</div>';
                });
                $(html).appendTo('#goods_picture_box .img-box');
                //模块可拖动事件
                $('#goods_picture_box .draggable-element').arrangeable();
                data.submit();
            },
            done: function (e, data) {
                console.log(data);
                var param = data.result;
                $this = $('#goods_picture_box div[nstype="' + param.origin_file_name + '"]');
                if (param.state > 0) {
                    $this.removeAttr("nstype");
                    var item = {};
                    item['url'] = param.file_path;
                    app.goods_img.push(item);
                    var swiper = new Swiper('.swiper-container', {
                        spaceBetween: 30,
                        centeredSlides: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });
                    $this.children("img").attr("src", param.file_path);
                    $this.children("input[type='hidden']").val(param.file_id);
                } else {
                    $this.remove();
                    if ($("#goods_picture_box .img-box .upload-thumb").length == 0) {
                        var img_html = '<div class="upload-thumb" id="default_uploadimg">';
                        img_html += '<img src="/public/images/default_goods_image_240.gif">';
                        img_html += '</div>';
                        $("#goods_picture_box .img-box").append(img_html);
                    }
                    $("#goods_picture_box .img-error").html("请检查您的上传参数配置或上传的文件是否有误").show();
                }
            }
        })
        //图片幕布出现
        $(".draggable-element").on('mouseenter', function () {
            $(this).children(".black-bg").show();
        });
        //图片幕布消失
        $(".draggable-element").on('mouseleave', function () {
            $(this).children(".black-bg").hide();
        });
        //sku图片幕布出现
        $(".sku-draggable-element").on('mouseenter', function () {
            $(this).children(".black-bg").show();
        });
        //sku图片幕布消失
        $(".sku-draggable-element").on('mouseleave', function () {
            $(this).children(".black-bg").hide();
        });
        //删除页面图片元素
        $(".off-box").on('click', function () {
            if ($(".img-box .upload-thumb").length == 1) {
                var html = "";
                html += '<div class="upload-thumb" id="default_uploadimg">';
                html += '<img nstype="goods_image" src="/public/images/default_goods_image_240.gif">';
                html += '<input type="hidden" name="image_path" id="image_path" nstype="goods_image" value="">';
                html += '</div>';
                $(html).appendTo('.img-box');
            }
            $(this).parent().parent().remove();
        });
        $(".sku-off-box").on('click', function () {
            $(this).parent().parent().remove();
            if ($(this).parent().parent().parent().find(".sku-img-box .upload-thumb").length == 1) {
                var html = "";
                html += '<div class="upload-thumb" id="default_uploadimg">';
                html += '<img nstype="goods_image" src="/public/images/default_goods_image_240.gif">';
                html += '<input type="hidden" name="image_path" id="image_path" nstype="goods_image" value="">';
                html += '</div>';
                $(html).appendTo('.sku-img-box');
            }
        });
    });
    //sku图片上传
    function file_upload(obj) {
        var spec_id = $(obj).attr("spec_id");
        var spec_value_id = $(obj).attr("spec_value_id");
        $('.sku-draggable-element' + spec_id + '-' + spec_value_id).arrangeable();
        //sku图片上传
        $(obj).fileupload({
            url: "<?php echo url('upload/photoalbumupload'); ?>",
            dataType: 'json',
            formData: dataAlbum,
            add: function (e, data) {
                var box_obj = $(this).parent().parent().parent().parent().parent().parent().parent().parent();
                var spec_id = box_obj.attr("spec_id");
                var spec_value_id = box_obj.attr("spec_value_id");
                box_obj.find(".img-error").hide();
                box_obj.find("#sku_default_uploadimg").remove();
                //显示上传图片框
                var html = "";
                $.each(data.files, function (index, file) {
                    html += '<div class="upload-thumb sku-draggable-element' + spec_id + '-' + spec_value_id + ' sku-draggable-element"  nstype="' + file.name + '">';
                    html += '<img nstype="goods_image" src="/public/admin/images/album/uoload_ing.gif">';
                    html += '<input type="hidden"  class="sku_upload_img_id" nstype="goods_image" spec_id="" spec_value_id="" value="">';
                    html += '<div class="black-bg" onclick="remlong(this);">';
                    html += '<div class="sku-off-box">&times;</div>';
                    html += '</div>';
                    html += '</div>';
                });
                box_obj.find('.sku-img-box').html(html);
                //模块可拖动事件
                $('.sku-draggable-element' + spec_id + '-' + spec_value_id).arrangeable();
                data.submit();
            },
            done: function (e, data) {
                var box_obj = $(this).parent().parent().parent().parent().parent().parent().parent().parent();
                var spec_id = box_obj.attr("spec_id");
                var spec_value_id = box_obj.attr("spec_value_id");
                var param = data.result;
                $this = box_obj.find('div[nstype="' + param.origin_file_name + '"]');
                if (param.state > 0) {
                    $this.removeAttr("nstype");
                    $this.children("img").attr("src",param.file_path);
                    $this.children("input[type='hidden']").val(param.file_id);
                    $this.children("input[type='hidden']").attr("spec_id", spec_id);
                    $this.children("input[type='hidden']").attr("spec_value_id", spec_value_id);
                    //将上传的规格图片记录
                    for (var i = 0; i < $sku_goods_picture.length; i++) {
                        if ($sku_goods_picture[i].spec_id == spec_id && $sku_goods_picture[i].spec_value_id == spec_value_id) {
                            $sku_goods_picture[i]["sku_picture_query"].push({
                                "pic_id": param.file_id,
                                "pic_cover_mid": param.file_path
                            });
                        }
                    }
//                    console.log($sku_goods_picture);
                } else {
                    $this.remove();
                    if (box_obj.find(".upload-thumb").length == 0) {
                        var img_html = '<div class="upload-thumb" id="default_uploadimg">';
                        img_html += '<img src="/public/images/default_goods_image_240.gif">';
                        img_html += '</div>';
                        box_obj.find(".sku-img-box").append(img_html);
                    }
                    box_obj.find(".img-error").html("请检查您的上传参数配置或上传的文件是否有误").show();
                }
            }
        })
    }
    //处理图片路径
    function __IMG(img_path) {
        var path = "";
        if (img_path != undefined && img_path != "") {
            if (img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1) {
                path = img_path;
            } else {
                path = img_path;
            }
        }
        return path;
    }
</script>
<script type='text/javascript' src='/public/goods/js/sample.js'></script>
<script src="/public/js/BootstrapMenu.min.js"></script>
<input type="hidden" id="goodsId" value="<?php echo $goods_id; ?>"/>
<input type="hidden" id="shop_type" value="<?php echo $shop_type; ?>"/>
<?php if($goods_id != 0): ?>
<input type="hidden" id="hidQRcode" value="0"/>
<input type="hidden" id="hidden_sort" value="<?php echo $goods_info['sort']; ?>"/>
<?php else: ?>
<input type="hidden" id="hidQRcode" value="1"/>
<input type="hidden" id="hidden_qrcode" value=""/>
<input type="hidden" id="hidden_sort" value="0"/>
<?php endif; ?>
<script type="text/javascript">
    var app = new Vue({
        el: '#get_all',
        data: {
            goods_name: '',
            goods_cuxiao: '',
            goods_price: 0,
            goods_xiao: 0,
            goods_desc: '',
            goods_sku: [],
            goods_img: []
        }
    })
    /*ue.addListener("contentChange", function () {
        app.goods_desc = ue.getContent();
    });*/
    $(function () {
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            observer: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    })
    function PopUpCallBack(id, src, upload_type, spec_id, spec_value_id) {
        var idArr, srcArr;
        if (id.indexOf(",")) {
            idArr = id.split(',');
            srcArr = src.split(',');
        } else {
            idArr = new Array(id);
            srcArr = new Array(src);
        }
        switch (speciFicationsFlag) {
            case 0:
                //商品主图
                if (srcArr.length >= 1) {
                    html = "";
                    for (var i = 0; i < srcArr.length; i++) {
                        if (upload_type == 2) {
                            html += '<div class="upload-thumb sku-draggable-element' + spec_id + '-' + spec_value_id + ' sku-draggable-element"  >';
                            html += '<img  src="' + srcArr[i] + '">';
                            html += '<input type="hidden"  class="sku_upload_img_id" spec_id="' + spec_id + '" spec_value_id="' + spec_value_id + '" value="' + idArr[i] + '">';
                            html += '<div class="black-bg" onclick="remlong(this);">';
                            html += '<div class="sku-off-box">&times;</div>';
                            html += '</div>';
                            html += '</div>';
                            //将规格图片记录存入临时数组
                            var pic_id = idArr[i];
                            var pic_cover_mid = srcArr[i];
                            for (var t = 0; t < $sku_goods_picture.length; t++) {
                                if ($sku_goods_picture[t].spec_id == spec_id && $sku_goods_picture[t].spec_value_id == spec_value_id) {
                                    $sku_goods_picture[t]["sku_picture_query"].push({
                                        "pic_id": pic_id,
                                        "pic_cover_mid": pic_cover_mid
                                    });
                                }
                            }
//                            console.log($sku_goods_picture);
                        } else if (upload_type == 1) {
                            var item = {};
                            item['url'] = srcArr[i];
                            item['id'] = idArr[i];
                            app.goods_img.push(item);
                            html += '<div class="upload-thumb draggable-element"  >';
                            html += '<img  src="' + srcArr[i] + '">';
                            html += '<input type="hidden"  class="upload_img_id"  value="' + idArr[i] + '">';
                            html += '<div class="black-bg" onclick="remlong(this);">';
                            html += '<div class="off-box">&times;</div>';
                            html += '</div>';
                            html += '</div>';
                        } else {
                            var span_obj = $(".js-goods-sku").find("span[data-spec-id='" + spec_id + "'][data-spec-value-id='" + spec_value_id + "']");
                            span_obj.next().next().find("input").val(idArr[i]);
                            span_obj.next().next().find("img").attr("src", srcArr[i]);
                            //规格spec图片返回并specObj对象
                            var spec = {
                                flag: span_obj.hasClass("selected"),
                                spec_id: span_obj.attr("data-spec-id"),
                                spec_name: span_obj.attr("data-spec-name"),
                                spec_value_id: span_obj.attr("data-spec-value-id"),
                                spec_value_data: idArr[i]
                            };
                            editSpecValueData(spec);//修改图片对应的修改SKU数据
                        }
                    }
                    if (upload_type == 2) {
                        $(".sku-img-box[spec_id='" + spec_id + "'][spec_value_id='" + spec_value_id + "'] #sku_default_uploadimg").remove();
                        $(".sku-img-box[spec_id='" + spec_id + "'][spec_value_id='" + spec_value_id + "']").html(html);
                        $('.sku-draggable-element' + spec_id + '-' + spec_value_id).arrangeable();
                    } else if (upload_type == 1) {
                        $("#default_uploadimg").remove();
                        $(html).appendTo('.img-box');
                        $('.draggable-element').arrangeable();
                    }
                }
                //模块可拖动事件
                /* $(goodsFigure).children("a").show(); */
                break;
            case 1:
                //商品详情
                for (var i = 0; i < srcArr.length; i++) {
                    var description = "<img src='" + srcArr[i] + "' />";
// 				ue.setContent(description, true);
                    UM.getEditor('editor').focus();
                    UM.getEditor('editor').execCommand('inserthtml', description);
                }
                break;
        }
    }
    function setGoodsFigure(goodsFigure) {
        this.goodsFigure = goodsFigure;
    }
    /*
     * 判断资源文件是否存在
     */
    function isResourcesExist(resources_url) {
        var exist = false;
        if (resources_url != "") {
            $.ajax(resources_url, {
                type: 'get',
                timeout: 100,
                success: function () {
                    exist = true;
                },
                error: function () {
                    exist = false;
                }
            });
        }
        return exist;
    }
    try {
        setTimeout(function () {
            $('.sku-picture-span:eq(0)').click();
        },1000);
    }catch(e) {
    }
    function remlong(obj) {
        if ($(obj).parent().parent().find('.upload-thumb').length == 1) {
            var html = "";
            html += '<div class="upload-thumb" id="default_uploadimg">';
            html += '<img nstype="goods_image" src="/public/images/default_goods_image_240.gif">';
            html += '<input type="hidden" name="image_path" id="image_path" nstype="goods_image" value="">';
            html += '</div>';
            $($(obj).parent().parent()).html(html);
        } else {
            $(obj).parent().remove();
        }
       var src= $(obj).parent().parent().children().eq(0).attr('src');
        var item=app.goods_img;
        $.each(item, function(index, val) {
           if (src==obj['url']){
               app.goods_img.splice(index,1);
           }
        });
    }
</script>
<script>
    var ue =UM.getEditor('editor',{
        imageUrl:"__CONF_SITE__app/Umupload/uploadFile", //处理图片上传的接口
        imageFieldName:"upfile", //上传图片的表单的name
        imagePath: ""
    });
    function goods_cate(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    function select_lib_goods(){
        layer.open({
            type: 2,
            area: ['800px', '600px'],
            fix: false, //不固定
            maxmin: true,
            shade:0.4,
            title: '商品库商品',
            content: '__CONF_SITE__admin/goods/select_lib_goods',
            scrollbar:false
        });
    }
    function get_lib_goods(id) {
        window.location.href="__CONF_SITE__goods/add_goods?goodsId="+id+"&this_lib=1";
    }
    ue.addListener("blur",function() {
        var arr = (UM.getEditor('editor').getContent());
        app.goods_desc=arr;
    })
    function select_code_name() {
        var code=$("#code_name").val();
        $.ajax({
            type : "post",
            url : "<?php echo url('goods/select_code'); ?>",
            data : {
                'code':code,
            },
            success : function(data) {
                if(data['code']==0){
                    layer.msg('导入成功',{icon:1,time:1000});
                    $("#txtProductTitle").val(data['info']['名称']);
                    $("#txtKeyWords").val(data['info']['商标']);
                    var ue = UE.getEditor('editor');
                    ue.setContent(data['info']['描述']);
                    var xh=data['info']['规格型号'];
                    $.ajax({
                        type : "post",
                        url : "<?php echo url('goods/goods_spec_add'); ?>",
                        data : {
                            'is_visible' : '1',
                            'spec_name' : '规格',
                        },
                        success : function(data) {
                            //console.log(data);
                            if (data.code > 0) {
                                addGoodsSpecCallBack(data.code,'规格');
                                $.ajax({
                                    url : "/admin/goods/addGoodsSpecValue",
                                    type : "post",
                                    data : { "spec_id" : data.code, "spec_value_name" : xh},
                                    success : function(res){
                                        console.log(data);
                                        if(res.code>0){
                                            layer.msg(res.message, {icon: 1, time: 1000});
                                            $("span[data-spec-value-id='-1']").attr("data-spec-value-id",res.code);
                                            var curr_obj = $(".js-goods-spec-value-add").parent();
                                            var spec_value = {
                                                spec_name : '规格',//规格名称
                                                spec_value_name : xh, //规格值
                                            };
                                            curr_obj.parent().append(getCurrentSpecValueHTML(spec_value));//加载当前添加的规格值、以及最后那个添加按钮
                                            curr_obj.remove();//删除当前的添加按钮
                                        }else{
                                            layer.msg(res.message, {icon: 5, time: 1000});
                                        }
                                    }
                                });
                            } else {
                                flag = false;
                            }
                        }
                    });
                }else {
                    layer.msg(data['msg'],{icon:2,time:1000});
                }
            }
        });
    }
    function gather(title, url, w, h) {
        layer.open({
            type: 2,
            area: [w, h],
            fix: false, //不固定
            maxmin: true,
            shade: 0.4,
            title: title,
            content: url,
            scrollbar: false
        });
    }
    function pickrsve(url) {
        $.ajax({
            type: "post",
            url: "<?php echo url('admin/goods/goods_collect'); ?>",
            data: {
                url: url
            },
            success: function (data) {
                $("#goods_picture_box .img-error").hide();
                $("#goods_picture_box #default_uploadimg").remove();
                $(data['html']).appendTo('#goods_picture_box .img-box');
                $('#goods_picture_box .draggable-element').arrangeable();
                app.goods_name=data['title'];
                app.goods_price=data['price'];
                app.goods_xiao=data['base_num'];
                ue.setContent(data['content']);
            }
        });
    }
</script>

    </div>
</div>
<script src="/public/static/bast/xenon-custom.js"></script>
<script src="/public/static/bast/clipboard.js"></script>
<script src="/public/static/bast/TweenMax.min.js"></script>
<script src="/public/static/bast/resizeable.js"></script>
<script src="/public/static/layer/2.4/layer.js"></script>
<script src="/public/js/public_js.js"></script>
<script type="text/javascript" src="/public/static/My97DatePicker/4.8/WdatePicker.js"></script>

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