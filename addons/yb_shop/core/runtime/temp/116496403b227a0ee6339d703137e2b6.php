<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/menu\index_module.html";i:1537249615;s:68:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/base.html";i:1537407274;}*/ ?>
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
        
<link media="all" href="/public/menu/css/index_mod.css?v=1.2" type="text/css" rel="stylesheet">
<link media="all" href="/public/menu/css/index_module.css?v=1.2" type="text/css" rel="stylesheet">
<link media="all" href="/public/menu/css/formconfig_index.css?v=1.2" type="text/css" rel="stylesheet">
<link href="/public/static/umedito/themes/default/_css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/public/js/jquery-2.1.1.js"></script>
<style>
    .content p{
        margin-bottom: 0;
    }
    .imgbox img {margin:0 auto;}
    /*.cubeNavigationArea .cubeLink .cubeLink_a .cubeLink_text {    bottom: -10px!important;}*/
    #get_lng_lat {float: none !important;margin:0 auto;color:#fff;border:1px solid #00c1de;display:block;}
    input[type=range]{
        outline: none;
        -webkit-appearance: none;/*清除系统默认样式*/
        background: -webkit-linear-gradient(#61bd12, #61bd12) no-repeat, #ddd;
        height: 3px;/*横条的高度*/
    }
    /*拖动块的样式*/
    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none; /*清除系统默认样式*/
        height: 16px; /*拖动块高度*/
        width: 16px; /*拖动块宽度*/
        background: #fff; /*拖动块背景*/
        border-radius: 50%; /*外观设置为圆形*/
        border: solid 1px #ddd; /*设置边框*/
    }
    .pureText {cursor:pointer;}
    .column-9 .cubeLink {width:100% !important;height: 120px !important;}
    .column-9 .cubeLink .cubeLink_a {padding-left:100px;}
    .column-9 .cubeLink .cubeLink_a .cubeLink_ico {margin-left: 10px;}
    .column-9 .cubeLink .cubeLink_a .cubeLink_text {top:10px;width:200px;}
    .column-9 .cubeLink .cubeLink_a .cubeLink_text .cubeLink_text_p {padding-left: 20px;width:200px;}
    .column-9 .cubeLink .cubeLink_a .cubeLink_text .cubeLink_text_p em ,.column-1 .cubeLink .cubeLink_a .cubeLink_text .cubeLink_text_p em{text-align: left !important;overflow:auto !important;white-space:normal !important;}
</style>
<link rel="stylesheet" type="text/css" href="/public/menu/css/defau.css">
<script type="text/javascript" src="/public/js/vue.js"></script>
<script type="text/javascript" src="/public/js/vue-dragging.es5.js"></script>
<script src="/public/js/html2canvas.js"></script>
<body>
<input type="hidden" id="bus_select_up_id" value="0">
<input type="hidden" id="bus_select_up_name" value="">
<style>
    /*.left_tool_box {float:left;width:252px;display: table-cell; height:100%;background: #fff;}*/
    .left_tool_box {position: fixed;width:252px;display: table-cell; height:100%;background: #fff;top:70px;left:210px;}
    .tool_class_name { height:30px; line-height:30px; background:#f7f7f7;color:#666666;border-bottom:1px solid #efefef;padding-left:10px;    border-right: 1px solid #efefef;}
    .clear {clear:both;}
    .tool_box a {width:33.3333%;border-bottom:1px solid #efefef;border-right:1px solid #efefef;height:84px; display:block;
        box-sizing:border-box;
        -moz-box-sizing:border-box; /* Firefox */
        -webkit-box-sizing:border-box; /* Safari */
        text-align:center;float:left;}
    .tool_box a span { display:block; height:22px; line-height:22px;}
    .tool_box a:hover {background: #f7f7f7;}
    .tool_box a img {margin-top:20px;}
    .container {width:410px !important;overflow: hidden;float:left;}
    .main-content {padding:0 !important;height:100% !important;background: #f7f8fc !important;}
    .footer {width: 100%;}
    .container .inner ,.tableContent .content{background: none !important;}
    .wq_top_btn_box { height:60px; line-height:60px;width:100%; background:#fff;border-bottom: 1px solid #efefef;position:fixed;top:0;left:200px;}
    #b_menu {margin-top:0px;}
    .main-content {border:0 !important;}
</style>
<script>
    Vue.use(VueDragging);
</script>
<div class="diypage" id="page">
    <div class="diypage-header">
        <div class="header-left"></div>
        <div class="header-control" id="header-control"></div>
        <div class="header-right" style="width: 370px;"></div>
    </div>
    <div class="diypage-container" id="b_menu">
        <!--	<div class="diy_nav" id="leftTab">4</div>-->
        <div class="page-structure nav_inner subnav">
            <div class="tool_box_li">
                <div class="tool_class_name">基本组件</div>
                <div class="tool_box">
                    <a href="javascript:;" class="j-diy-addModule  icon_1" data-type="1" title="轮播图1">
                        <span class="icon_pic"></span><span>轮播图</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_2" data-type="2" title="广告位">
                        <span class="icon_pic"></span> <span>广告位</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_3" data-type="3" title="宫格导航">
                        <span class="icon_pic"></span> <span>宫格导航</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_4" data-type="4" title="标题">
                        <span class="icon_pic"></span><span>标题</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_8" data-type="8" title="图文集">
                        <span class="icon_pic"></span> <span>图文集</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_3" data-type="13" title="图片列表">
                        <span class="icon_pic"></span> <span>图片列表</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_19" data-type="19" title="三方图">
                        <span class="icon_pic"></span><span>三方图</span>
                    </a>
                    <a  href="javascript:;" class="j-diy-addModule  icon_20" data-type="20" title="四方图">
                        <span class="icon_pic"></span><span>四方图</span>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="tool_box_li">
                <div class="tool_class_name">辅助组件</div>
                <div class="tool_box">
                    <a href="javascript:;" class="j-diy-addModule  icon_15" data-type="15" title="视频">
                        <span class="icon_pic"></span><span>视频</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_17" data-type="17" title="音频">
                        <span class="icon_pic"></span><span>音频</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_12" data-type="12" title="富文本">
                        <span class="icon_pic"></span><span>富文本</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_5" data-type="5" title="辅助空白">
                        <span class="icon_pic"></span><span>辅助空白</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_7" data-type="7" title="分割线">
                        <span class="icon_pic"></span><span>分割线</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_14" data-type="14" title="悬浮图标">
                        <span class="icon_pic"></span><span>悬浮图标</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_10" data-type="10" title="按钮">
                        <span class="icon_pic"></span><span>按钮</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_23" data-type="23" title="表单">
                        <span class="icon_pic"></span><span>表单</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_24" data-type="24" title="客服">
                        <span class="icon_pic"></span><span>客服</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_25" data-type="25" title="电话">
                    <span class="icon_pic"></span><span>电话</span>
                     </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_26" data-type="26" title="公告">
                        <span class="icon_pic"></span><span>公告</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_27" data-type="27" title="流量主">
                        <span class="icon_pic"></span><span>流量主</span>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="tool_box_li">
                <div class="tool_class_name">商城组件</div>
                <div class="tool_box">
                    <a href="javascript:;" class="j-diy-addModule  icon_9" data-type="9" title="商品集">
                        <span class="icon_pic"></span><span>商品集</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_6" data-type="6" title="搜索框">
                        <span class="icon_pic"></span><span>搜索框</span>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="tool_box_li">
                <div class="tool_class_name">全局组件</div>
                <div class="tool_box">
                    <a  href="javascript:;" class="j-diy-addModule  icon_21" data-type="21" title="留言板">
                        <span class="icon_pic"></span><span>留言板</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_22" data-type="22" title="门店">
                        <span class="icon_pic"></span><span>门店</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule  icon_11" data-type="11" title="地址位置">
                        <span class="icon_pic"></span><span>地址位置</span>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="diypage-content">
            <div style="width:  380px; margin:  0 auto;">
                <!--<div class="container" style="min-height: 700px;position: fixed;left:calc(50% - 205px);top:60px;width:410px;">-->
                <!--   <div class="container" style="min-height: 700px;padding-left: 300px;padding-top:0;">-->
                <!--<div class="inner clearfix" style="border:0;">-->
                <div style="border:0;">
                    <!--<div class="content-right fl" style="padding-top:0;">-->
                    <div style="padding-top:0;">
                        <!--<div class="msgWrap form">-->
                        <div class="msgWrap form">
                            <form action="" method="post" class="layui-form" id="custom_form">
                                <div class="tableContent">
                                    <div class="content"  style="padding-top:0;">
                                        <div class="DL-Main" id="content" crossOrigin="Anonymous">
                                            <div class="mainPanel clearfix">
                                                <div class="leftPhonewrap" id="leftPhonewrap">
                                                    <div class="holderPhone">
                                                        <div onclick="head_info()" :style="'cursor: pointer;background: url('+bag_url+') '+dh_color+' no-repeat scroll center top / 100% auto'" class="wxHd">
                                                            <div  id="actName" class="phoneTitle" style="bottom: 15px;width: 100%;left: 0;padding: 0 65px;"><h2 :style="'color:'+nab_color"><span id="bus_select_up_name_but" <?php if($wn==1): ?> style="color: black" <?php endif; ?> >{{nab_name}}</span></h2></div>
                                                        </div>
                                                        <div id="anythingContent" style="background: #fff;">
                                                            <ul v-show="is_di_dis" onclick="di_select()" class="form_component style_1 clearfix ui-sortable" id="Dbdh_bottom" style="position: absolute;bottom:0;left:0;">
                                                                <li class="ui-draggable" id="com1"
                                                                    name="id_bottom" title="" style="width:320px;cursor: pointer;height:60px;">
                                                                    <ul :style="'justify-content:space-between;display:flex;flex-wrap:wrap;background-color:'+db_color"
                                                                        class="bottom-nav bottom-style-1 outCom column-3 clearfix'">
                                                                        <li class="bottom-nav-item mod-Alink mlr"
                                                                            v-for="(item,index) in menu_list">
                                                                            <a class="bottom-navALink aFrame" href="javascript:;"
                                                                            ></a>
                                                                            <div class="li_content">
                                                                                <div class="bottom-cmg objCom">
                                                                                    <img :src="item.page_icon"
                                                                                         :alt="item.name"
                                                                                         class="bottom-Cmge mCS_img_loaded"
                                                                                    >
                                                                                </div>
                                                                                <span :style="'color: '+font_color"
                                                                                      class="bottom-text texCom"
                                                                                      id="com1banner0_url">{{ item.name }}</span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="mianMod mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar"
                                                                 data-mcs-theme="minimal-dark"
                                                                 :style="is_di_dis == true ? 'height:514px;':'height:570px;'"
                                                                 style="visibility: visible; overflow: visible;">
                                                                <div id="mCSB_1"
                                                                     class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside"
                                                                     style="max-height: none;" tabindex="0">
                                                                    <div id="mCSB_1_container"
                                                                         class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                                         style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                                                        <div    :style="is_di_dis == true ? 'height:514px;background-color: '+win_color+';background-image: url('+win_img+');background-repeat:no-repeat;background-size:100%;-moz-background-size:100%;':'height:570px;background-color: '+win_color+';background-image: url('+win_img+');background-repeat:no-repeat;background-size:100%;-moz-background-size:100%;'"
                                                                               class="activeMod">
                                                                            <ul class="form_component style_1 clearfix ui-sortable">
                                                                                <li class="ui-draggable"
                                                                                    v-for="(item,index) in all_data"
                                                                                    :name="item.type"
                                                                                    v-dragging="{ list: all_data, item: item, group: 'index' }"
                                                                                    :style="item.type == 'navigation' || item.type == 'advert' ? 'background: transparent;':''"
                                                                                    :key="item.time_key">
                                                                                    <banner v-if="item.type=='banner'"
                                                                                            :jiaodian_dots="item.jiaodian_dots"
                                                                                            :juedui_height="item.juedui_height"
                                                                                            :list="item.list"
                                                                                            :ly_height="item.ly_height"
                                                                                            :topimg="item.topimg"
                                                                                            :jiaodian_color="item.jiaodian_color"
                                                                                            :bg_color="item.bg_color"
                                                                                            :index="index" :list="item.list">
                                                                                    </banner>
                                                                                    <advert v-if="item.type=='advert'"
                                                                                            :list="item.list"
                                                                                            :juedui_height="item.juedui_height"
                                                                                            :ly_width="item.ly_width"
                                                                                            :ly_height="item.ly_height"
                                                                                            :bg_color="item.bg_color"
                                                                                            :imgurl="item.list.imgurl"
                                                                                            :index="index" :list="item.list">
                                                                                    </advert>
                                                                                    <navigation v-if="item.type=='navigation'"
                                                                                                :layout="item.layout"
                                                                                                :list="item.list"
                                                                                                :radian="item.radian"
                                                                                                :color="item.color"
                                                                                                :bg_color="item.bg_color"
                                                                                                :font_size="item.font_size"
                                                                                                :index="index" :list="item.list">
                                                                                    </navigation>
                                                                                    <headline
                                                                                            v-if="item.type=='headline'"
                                                                                            :time_key="item.time_key"
                                                                                            :name="item.name" :layout="item.layout"
                                                                                            :bg_color="item.bg_color"
                                                                                            :color="item.color"
                                                                                            :font_size="item.font_size"
                                                                                            :index="index" :list="item.list">
                                                                                    </headline>
                                                                                    <blank v-if="item.type=='blank'"
                                                                                           :ly_height="item.ly_height"
                                                                                           :bg_color="item.bg_color"
                                                                                           :index="index" :list="item.list">
                                                                                    </blank>
                                                                                    <search v-if="item.type=='search'"
                                                                                            :bg_color="item.bg_color"
                                                                                            :li_bg_color="item.li_bg_color"
                                                                                            :index="index">
                                                                                    </search>
                                                                                    <blankline v-if="item.type=='line'"
                                                                                               :line="item.line"
                                                                                               :margin="item.margin"
                                                                                               :ly_height="item.ly_height"
                                                                                               :bg_color="item.bg_color"
                                                                                               :color="item.color"
                                                                                               :index="index">
                                                                                    </blankline>
                                                                                    <article_list
                                                                                            v-if="item.type=='article'"
                                                                                            :list="item.list"
                                                                                            :style_height="item.style_height"
                                                                                            :style_width="item.style_width"
                                                                                            :title_size="item.title_size"
                                                                                            :title_color="item.title_color"
                                                                                            :bg_color="item.bg_color"
                                                                                            :line_color="item.line_color"
                                                                                            :style_num="item.style_num"
                                                                                            :text_width="item.text_width"
                                                                                            :index="index">
                                                                                    </article_list>
                                                                                    <goods
                                                                                            v-if="item.type=='goods'"
                                                                                            :list="item.list"
                                                                                            :title_size="item.title_size"
                                                                                            :title_color="item.title_color"
                                                                                            :bg_color="item.bg_color"
                                                                                            :layout="item.layout"
                                                                                            :index="index">
                                                                                    </goods>
                                                                                    <edit_button
                                                                                            v-if="item.type=='edit_button'"
                                                                                            :button_name="item.button_name"
                                                                                            :button_radius="item.button_radius"
                                                                                            :img_style="item.img_style"
                                                                                            :button_border="item.button_border"
                                                                                            :button_bg_color="item.button_bg_color"
                                                                                            :button_title_color="item.button_title_color"
                                                                                            :button_border_color="item.button_border_color"
                                                                                            :list="item.list"
                                                                                            :index="index">
                                                                                    </edit_button>
                                                                                    <position
                                                                                            v-if="item.type=='position'"
                                                                                            :position_name="item.position_name"
                                                                                            :is_display="item.is_display"
                                                                                            :bg_color="item.bg_color"
                                                                                            :index="index">
                                                                                    </position>
                                                                                    <rich_text
                                                                                            v-if="item.type=='rich_text'"
                                                                                            :content="item.content"
                                                                                            :bg_color="item.bg_color"
                                                                                            :index="index">
                                                                                    </rich_text>
                                                                                    <edit_piclist
                                                                                            v-if="item.type=='edit_piclist'"
                                                                                            :layout="item.layout"
                                                                                            :pic_style="item.pic_style"
                                                                                            :html_style="item.html_style"
                                                                                            :pic_radius="item.pic_radius"
                                                                                            :bg_color="item.bg_color"
                                                                                            :list="item.list"
                                                                                            :index="index">
                                                                                    </edit_piclist>
                                                                                    <floaticon
                                                                                            v-if="item.type=='floaticon'"
                                                                                            :form_bottom="item.form_bottom"
                                                                                            :form_margin="item.form_margin"
                                                                                            :form_transparent="item.form_transparent"
                                                                                            :list="item.list"
                                                                                            :bg_color="item.bg_color"
                                                                                            :index="index">
                                                                                    </floaticon>
                                                                                    <edit_video
                                                                                            v-if="item.type=='edit_video'"
                                                                                            :video_height="item.video_height"
                                                                                            :video_url="item.video_url"
                                                                                            :imgurl="item.imgurl"
                                                                                            :index="index">
                                                                                    </edit_video>
                                                                                    <edit_music
                                                                                            v-if="item.type=='edit_music'"
                                                                                            :music_url="item.music_url"
                                                                                            :imgurl="item.imgurl"
                                                                                            :title="item.title"
                                                                                            :author="item.author"
                                                                                            :index="index">
                                                                                    </edit_music>
                                                                                    <comment_s
                                                                                            v-if="item.type=='comment'"
                                                                                            :index="index">
                                                                                    </comment_s>
                                                                                    <fight_group
                                                                                            v-if="item.type=='fight_group'"
                                                                                            :list="item.list"
                                                                                            :style_height="item.style_height"
                                                                                            :style_width="item.style_width"
                                                                                            :title_size="item.title_size"
                                                                                            :title_color="item.title_color"
                                                                                            :bg_color="item.bg_color"
                                                                                            :line_color="item.line_color"
                                                                                            :index="index">
                                                                                    </fight_group>
                                                                                    <tripartite
                                                                                            v-if="item.type=='tripartite'"
                                                                                            :list="item.list"
                                                                                            :bg_color="item.bg_color"
                                                                                            :index="index">
                                                                                    </tripartite>
                                                                                    <quartet
                                                                                            v-if="item.type=='quartet'"
                                                                                            :list="item.list"
                                                                                            :bg_color="item.bg_color"
                                                                                            :index="index">
                                                                                    </quartet>
                                                                                    <message_board
                                                                                            v-if="item.type=='message_board'"
                                                                                            :bg_color="item.bg_color"
                                                                                            :index="index">
                                                                                    </message_board>
                                                                                    <store_door
                                                                                            v-if="item.type=='store_door'"
                                                                                            :imgurl="item.imgurl"
                                                                                            :door_name="item.door_name"
                                                                                            :bg_color="item.bg_color"
                                                                                            :door_job="item.door_job"
                                                                                            :index="index">
                                                                                    </store_door>
                                                                                    <edit_form
                                                                                            v-if="item.type=='edit_form'"
                                                                                            :imgurl="item.imgurl"
                                                                                            :index="index">
                                                                                    </edit_form>
                                                                                    <customer
                                                                                            v-if="item.type=='customer'"
                                                                                            :form_bottom="item.form_bottom"
                                                                                            :form_margin="item.form_margin"
                                                                                            :bg_color="item.bg_color"
                                                                                            :form_transparent="item.form_transparent"
                                                                                            :imgurl="item.imgurl"
                                                                                            :index="index">
                                                                                    </customer>
                                                                                    <edit_phone
                                                                                            v-if="item.type=='phone'"
                                                                                            :form_bottom="item.form_bottom"
                                                                                            :form_margin="item.form_margin"
                                                                                            :bg_color="item.bg_color"
                                                                                            :form_transparent="item.form_transparent"
                                                                                            :imgurl="item.imgurl"
                                                                                            :index="index">
                                                                                    </edit_phone>
                                                                                    <announcement
                                                                                            v-if="item.type=='announcement'"
                                                                                            :color="item.color"
                                                                                            :bg_color="item.bg_color"
                                                                                            :title="item.title"
                                                                                            :imgurl="item.imgurl"
                                                                                            :index="index">
                                                                                    </announcement>
                                                                                    <ad
                                                                                            v-if="item.type=='ad'"
                                                                                            :img="item.img"
                                                                                            :height="item.height"
                                                                                            :index="index">
                                                                                    </ad>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="mCSB_1_scrollbar_vertical"
                                                                     class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical"
                                                                     style="display: none;">
                                                                    <div class="mCSB_draggerContainer">
                                                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                                                             style="position: absolute; min-height: 50px; height: 0px; top: 0px;"
                                                                             oncontextmenu="return false;">
                                                                            <div class="mCSB_dragger_bar"
                                                                                 style="line-height: 50px;"></div>
                                                                        </div>
                                                                        <div class="mCSB_draggerRail"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rightEditwrap" style="position: fixed;right: 0;top: 120px;width:445px;">
                                                    <div class="formEditHd">
                                                        <ul class="clearfix">
                                                            <li style="" class="on"><a href="javascript:;">页面组件</a></li>
                                                            <li style=""><a href="javascript:;">编辑组件</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="formEditBd">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input class="" name="modelname" value="" type="hidden">
                                    <input name="id" value="" type="hidden">
                                    <input id="previewpage" name="previewpage" value="index" type="hidden">
                                    <input id="componentJsonStr" name="componentJsonStr" value="" type="hidden">
                                    <!--<div class="saveBottomBar" style="position: fixed; width: 330px;z-index:10000;bottom: 60px;padding: 10px;right:calc(50 - 165px);">-->
                                        <!--<div class="buttonBox diy-actions-submit" style="width: 400px;margin-left:-20px;">-->
                                    <div>
                                        <div>
                                            <?php if($wn==-1&&$my_mod==-1&&$wn_id==0): ?>
                                            <div id="saveButon" class="bottomButon saveButon" style="background: #00c1de;
border: 1px solid #00c1de;width:80px;height:30px; line-height:30px;border-radius: 4px;position:fixed;top:59px;right:155px;z-index:999999000;text-align: center;color:#fff; cursor: pointer;">保存</div>
                                            <div onclick="get_my_mod()" class="bottomButon" style="background: #19c85b;border: 1px solid #19c85b;border-radius: 4px;width:120px;margin-left:15px; height:30px; line-height:30px;color:#fff; position:fixed;top:59px;right:20px;z-index:999991001;text-align: center; cursor: pointer;">添加到我的模版</div>
                                            <?php endif; if($wn==1&&$my_mod==-1&&$wn_id==0): ?>
                                            <div onclick="get_my_mod_wn()" class="bottomButon" style="background: #19c85b;border: 1px solid #19c85b;border-radius: 4px;width:120px;margin-left:15px; height:30px; line-height:30px;position:fixed;top:59px;right:30px;z-index:9999991002;color:#fff;text-align: center; cursor: pointer;">保存页面</div>
                                            <?php endif; if($wn==2&&$my_mod==-1&&$wn_id!=0): ?>
                                            <div onclick="get_my_mod_wn()" class="bottomButon" style="background: #19c85b;border: 1px solid #19c85b;border-radius: 4px;width:120px;margin-left:15px; height:30px; line-height:30px;position:fixed;top:59px;right:30px;z-index:9999991002;color:#fff;text-align: center; cursor: pointer;">保存修改页面</div>
                                            <?php endif; if($wn==-1&&$my_mod!=-1&&$wn_id==0): ?>
                                            <div onclick="get_my_mod_set(event)" class="bottomButon" style="background: #19c85b;border: 1px solid #19c85b;border-radius: 4px;width:120px;margin-left:15px; height:30px; line-height:30px;position:fixed;top:59px;right:30px;z-index:9999991002;color:#fff;text-align: center; cursor: pointer;">保存修改</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="updown" id="toolbar">
                <span class="tool_up" onclick="tool_up_vue()">
                     <p>上移组件</p>
                </span>
            <span class="tool_down" onclick="tool_down_vue()">
                    <p>下移组件</p>
                </span>
        </div>
        <div class="diypage-right" >
            <!-- 轮播图-->
            <div class="form_edit" data-type="1" id="form_edit_banner"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>轮播图</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">焦点</span>
                            <div class="chosecolor-container">
                                <input onchange="select_color(this.value)"  id="banner_color_r" name="banner_color" class="chosecolor data-bind" type="color"> <p id="banner_color_text">#be0000</p>
                            </div>
                        </div>
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input onchange="select_bgcolor(this.value,'#banner_bgcolor_text')"  id="banner_bgcolor_r" name="banner_color" class="chosecolor data-bind" type="color"> <p id="banner_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">显示焦点</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="componentLayouton" value="2" id="banner_editlayout_1"><label for="banner_editlayout_1">显示</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayouton" value="1" id="banner_editlayout_2"><label for="banner_editlayout_2">不显示</label></div>
                        </div>
                    </div>
                    <div class="form-label" style="padding-top:5px;">轮播图高度</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib" style="width:255px;">
                                    <input type="range" id="banner_height"    max="20"   min="1"    step="0.1" oninput="select_banner_height(this.value)"  style="width:100%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="this_banner_height">1</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="data-list ui-sortable  mt10"      v-for="(item,index) in banner">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;" data-id="C01">
                            <div class="item-prompt"> 建议尺寸750x360 <span class="deletechild icon-del"><img    v-on:click="remove_img(index,item.this_type)" src="/public/menu/icon/del_icon.png" alt="删除"></span></div>
                            <div class="es-uploader data-bind-image" data-bind="thumb" data-bind-child="C01" data-show-element="#picture-show-C01">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(index,item.this_type)">
                                    <img :src="item.imgurl" style="display:block;"/> <p :style="'display: '+item.img_dis+';'">替换</p> </div>
                            </div> <div class="item-inner"> <span class="labeltext">链接</span>
                            <input  v-model="item.name"    v-on:click="select_menu(index,item.this_type)" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                        </div>
                        </div>
                    </div>
                    <div  onclick="banner_add_menu()" class="addChild">+添加</div>
                </div>
            </div>
            <!-- 广告位-->
            <div class="form_edit" data-type="2" id="form_edit_advert"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>广告位</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <!-- <div class="form-label">控件高度</div>-->
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input onchange="select_bgcolor(this.value,'#advert_bgcolor_text')" value="#ffffff"  id="advert_bgcolor_r" name="advert_color" class="chosecolor data-bind" type="color"> <p id="advert_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <div style="clear:both"></div>
                            <div>
                                <div style="width:200px;font-weight:bold;">广告位高度</div> <div class="Fzkb_height mt10"><div class="minCell rangeCell-pureTextSize dib mt10" style="width:225px;"><input type="range" id="advert_height"    max="20"    min="1"   step="0.1" oninput="select_advert_height(this.value)"  style="width:100%;"> <div style="position:absolute;right:-35px;top:-8px;"><span id="what_advert_height">20</span><span>%</span></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="data-list ui-sortable"  v-for="(item,index) in advert">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;" data-id="C01">
                            <div class="item-prompt"> 建议尺寸750x360 <span class="deletechild icon-del"><img    v-on:click="remove_img(index,item.this_type)" src="/public/menu/icon/del_icon.png" alt="删除"></span></div>
                            <div class="es-uploader data-bind-image" data-bind="thumb" data-bind-child="C01" data-show-element="#picture-show-C01">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(index,item.this_type)">
                                    <img :src="item.imgurl" style="display:block;"/> <p>替换</p> </div>
                            </div> <div class="item-inner"> <span class="labeltext">宽度%</span>
                            <input v-model="item.width" placeholder="填写高度比例"   :data-index="index"  oninput="this_advert_height(this,this.value)" type="text" class="es-input linkurl data-bind-url "></div>
                            <div class="item-inner mt10"> <span class="labeltext">链接</span>
                                <input  v-model="item.name"    v-on:click="select_menu(index,item.this_type)" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                            </div>
                        </div>
                    </div>
                    <div  onclick="advert_add_menu()" class="addChild">+添加</div>
                </div>
            </div>
            <!--宫格导航设置-->
            <div class="form_edit" data-type="3" id="from_edit_iconnav"
                 style="display: none;padding-top:0;">
                <div class="form-item item_tit">
                    <span>宫格导航</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">分列排版</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayoutRadio" value="2" id="editlayout_2"><label for="editlayout_2">两列</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayoutRadio" value="3" id="editlayout_3"><label for="editlayout_3">三列</label></div>
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="componentLayoutRadio" value="4" id="editlayout_4"><label for="editlayout_4">四列</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayoutRadio" value="5" id="editlayout_5"><label for="editlayout_5">五列</label></div>
                        </div>
                    </div>
                    <div class="form-label mt10">字体大小</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="fontsize_zt" value="12" id="Ggdh_fontsize_s"><label for="Ggdh_fontsize_s">小号</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_zt" value="14" id="Ggdh_fontsize_m"><label for="Ggdh_fontsize_m">中号</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_zt" value="16" id="Ggdh_fontsize_l"><label for="Ggdh_fontsize_l">大号</label></div>
                        </div>
                    </div>
                    <div class="form-label mt10">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">字体</span>
                            <div class="chosecolor-container">
                                <input   onchange="catenav_font_color(this.value)"  id="catenav_color" name="banner_color" class="chosecolor data-bind" type="color"> <p id="catenav_color_text">#000000</p>
                            </div>
                        </div>
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input   onchange="select_bgcolor(this.value,'#catenav_bgcolor_text')"  id="catenav_bgcolor_r" value="#ffffff" name="banner_color" class="chosecolor data-bind" type="color"> <p id="catenav_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label mt10">圆角弧度</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="form-item" style="display: block">
                                <div style="clear:both"></div>
                                <div>
                                    <div class="Fzkb_height mt10"><div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;"><input type="range" id="catenav_corners"  value="0"  max="50"   min="0"    oninput="catenav_catenav_corners(this.value)"  style="width:100%;"> <div style="position:absolute;right:-30px;top:-8px;">
                                        <span id="catenav_corners_height">0</span>
                                        <span>%</span></div></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div v-for="(item,index) in catenav" class="item drag ui-sortable-handle" data-id="C01">
                        <div class="item-prompt"> 建议尺寸100x100
                            <span class="deletechild icon-del"><span v-on:click="remove_img(index,item.this_type)" class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span>
                        </div>
                        <div class="item-inner">
                            <span class="labeltext">名称</span> <input  v-model="item.name"  type="text" class="es-input data-bind"  :data-index="index"  onblur="this_catenav_name(this,this.value)">
                        </div>
                        <div class="item-inner item-image">
                            <span class="labeltext pull-left">图片</span>
                            <div class="es-uploader data-bind-image">
                                <div class="es-selector iconbox noval" v-on:click="select_img(index,item.this_type)">
                                    <img style="display:block;" :src="item.imgurl"> <p>替换</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-inner">
                            <span class="labeltext">链接</span>
                            <input  v-model="item.alias"  type="text"  v-on:click="select_menu(index,item.this_type)" class="es-input linkurl" placeholder="请选择链接或地址" readonly>
                        </div>
                    </div>
                </div>
                <div class="addChild " onclick="catenav_add_menu()">添加一个</div>
            </div>
            <!-- 标题文字 设置 -->
            <div class="form_edit" data-type="4" id="form_edit_title"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>标题文字</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">标题设置</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <input type="text"  oninput="alias_title(this.value)" id="Bt_textarea" placeholder="请输入标题" class="es-input linkurl data-bind-url " style="height: 36px;">
                        </div>
                    </div>
                    <div class="form-label">样式设置</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="pureTitles"   value="{background-color:#fff}" data-value="{}" data-value2="{}" id="pureTitle1"><label for="pureTitle1">样式一</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="pureTitles"   value=" .pureText .wrap .aframe{width:4px;background-color:#cd3637;border-radius:3px;margin:0;position:absolute;height:37.5%;top:33%;left:15px}"
                                                             data-value="{}" data-value2="{}"id="pureTitle2"><label for="pureTitle2">样式二</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="pureTitles"    value=" .pureText .wrap{text-align:center}"
                                                             data-value="" data-value2="{}"id="pureTitle3"><label for="pureTitle3">样式三</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="pureTitles"    value=" .pureText .wrap .aframe{left:8px;top:32.3%;position:absolute;display:block;border:2px solid #cd3637;margin:0;border-radius:50px;height:14px;width:14px;}"
                                                             data-value="{}" data-value2="{}" id="pureTitle4"><label for="pureTitle4">样式四</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="pureTitles"   value=" .pureText .wrap::before{display:inline-block;height:1px;background-color:#cd3637;margin-right:5px;width:28%;vertical-align: middle;}"
                                                             data-value=" .pureText .wrap::after{display:inline-block;height:1px;background-color:#cd3637;margin-left:5px;width:28%;vertical-align: middle;}"
                                                             data-value2=" .pureText .wrap{text-indent:2px;text-align: center;}" id="pureTitle5"><label for="pureTitle5">样式五</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="pureTitles"  value=" .pureText .wrap span{color:#ffa000;}"
                                                             data-value=" .pureText .wrap::after{display: block;margin-left: 49%;margin-top: 20px;vertical-align: middle;width: 0;height: 0;margin-top: 4px;border-left: 7px solid transparent;border-right: 7px solid transparent;border-top: 7px solid #ffa000;}"
                                                             data-value2=" .pureText .wrap{text-indent:2px;text-align: center;}" id="pureTitle6"><label for="pureTitle6">样式六</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="pureTitles" value="pureTitle7"
                                                             data-value=" .seven_titleO{display:inline-block;width:8px;height:8px;background-color:#333;transform:rotate(45deg);margin-left:6px;margin-right:6px}"
                                                             data-value2=" .seven_titleS{display:inline-block;width:8px;height:8px;background-color:#333;transform:rotate(45deg);margin-left:6px;margin-right:6px}" id="pureTitle7"><label for="pureTitle7">样式七</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="pureTitles" value="pureTitle8"
                                                             data-value=" .seven_titleO{display:inline-block;width:2px;height:22px;background-color:#0da3f9;margin-top:-4px;margin-right:6px;vertical-align: middle;}"
                                                             data-value2=" .seven_titleS{display:inline-block;width:2px;height:22px;background-color:#0da3f9;margin-top:-4px;margin-left:6px;vertical-align: middle;}" id="pureTitle8"><label for="pureTitle8">样式八</label></div>
                        </div>
                    </div>
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">字体</span>
                            <div class="chosecolor-container">
                                <input   onchange="alias_font_color(this.value)"  id="Bt_TitlecolorSet" value="#000000" class="chosecolor data-bind" type="color"> <p id="Bt_TitlecolorSet_text">#000000</p>
                            </div>
                        </div>
                        <div class="item-inner mt10"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input   onchange="title_bg_color(this.value)"  id="titlebgcolorSet" value="#ffffff" class="chosecolor data-bind" type="color"> <p id="titlebgcolorSet_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">字体大小</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_bt" value="14" id="Bt_fontsize_s"><label for="Bt_fontsize_s">小号</label></div>
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="fontsize_bt" value="18" id="Bt_fontsize_m"><label for="Bt_fontsize_m">中号</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_bt" value="22" id="Bt_fontsize_l"><label for="Bt_fontsize_l">大号</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 图文集 -->
            <div class="form_edit" data-type="8" id="form_edit_imgtextlist"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>图文集</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">排版样式</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="cateLists" value="1" id="cateLists1"><label for="cateLists1">样式一</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="cateLists" value="2" id="cateLists2"><label for="cateLists2">样式二</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="cateLists" value="3" id="cateLists3"><label for="cateLists3">样式三</label></div>
                        </div>
                    </div>
                    <div class="form-label">标题大小</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="fontsize_Twj" value="15" id="Twj_fontsize_s"><label for="Twj_fontsize_s">小号</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_Twj" value="17" id="Twj_fontsize_m"><label for="Twj_fontsize_m">中号</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_Twj" value="19" id="Twj_fontsize_l"><label for="Twj_fontsize_l">大号</label></div>
                        </div>
                    </div>
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">字体</span>
                            <div class="chosecolor-container">
                                <input   onchange="imgtextlist_title_color(this.value)"  id="pureTitlecolorSet" value="#000000"  class="chosecolor data-bind" type="color"> <p id="pureTitlecolorSet_text">#000000</p>
                            </div>
                        </div>
                        <div class="item-inner mt10"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input   onchange="imgtextlist_bg_color(this.value)"  id="imgtextColorSet" value="#ffffff" class="chosecolor data-bind" type="color"> <p id="imgtextColorSet_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">添加类型</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="img_add_type" value="1" id="img_type_anually"><label for="img_type_anually">手动</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="img_add_type" value="2" id="img_type_automatic"><label for="img_type_automatic">自动</label></div>
                        </div>
                    </div>
                    <div class="form-item" id="img_add_type_zid" style="display: none">
                        <div class="item-inner"><span class="labeltext">条数</span>
                            <input id="add_img_list_val" oninput="add_img_list(this.value)" value="1" type="text" class="es-input linkurl data-bind-url " style="width:100px;">
                        </div>
                        <div class="item-inner mt10"><span class="labeltext">分类</span>
                            <select id="select_img_id" onchange="get_select_img_id()" class="imgedittext imgedittext_text" style="margin-top: 0px;display:inline-block;">
                                <option value="0">全部</option>
                                <?php if(is_array($article_class) || $article_class instanceof \think\Collection || $article_class instanceof \think\Paginator): $i = 0; $__LIST__ = $article_class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $a['class_id']; ?>">
                                    <?php if($a['level']==1): ?>
                                        <?php echo $a['name']; endif; if($a['level']==2): ?>
                                    &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $a['name']; endif; ?>
                                </option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div class="item-inner mt10"><span class="labeltext">排序</span>
                            <div class="radio-inline" style="width: 26%;"><input checked type="radio" class="magic-radio"  name="img_sort_type" value="time" id="img_type_time"><label for="img_type_time">时间</label></div>
                            <div class="radio-inline" style="width: 26%;"><input type="radio" class="magic-radio"  name="img_sort_type" value="pop" id="img_type_pop"><label for="img_type_pop">人气</label></div>
                            <div class="radio-inline" style="width: 26%;"><input type="radio" class="magic-radio"  name="img_sort_type" value="sales" id="img_type_sales"><label for="img_type_sales">推荐</label></div>
                        </div>
                    </div>
                    <div v-for="(item,index) in imgtextlist" class="item drag ui-sortable-handle" data-id="C01" style="margin-top: 10px !important;">
                        <div class="item-prompt"> 建议尺寸200x160 <span class="deletechild icon-del"><span     v-on:click="remove_img(index,item.this_type)"    class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span></div>
                        <div class="item-inner"> <span class="labeltext">标题</span> <input type="text" class="es-input data-bind"      v-model="item.name" onfocus="if (value =='标题'){value =''}"   onblur="if (value ==''){value='标题'}" > </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                        <div class="item-inner"> <span class="labeltext">描述</span> <input type="text" class="es-input data-bind"      v-model="item.description"    onfocus="if (value =='内容描述'){value =''}"       onblur="if (value ==''){value='内容描述'}"> </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                        <div class="item-inner item-image"> <span class="labeltext pull-left">图片</span> <div class="es-uploader data-bind-image"> <div class="es-selector iconbox noval"   v-on:click="select_img(index,item.this_type)"> <img style="display:block;" :src="item.imgurl"> <p>替换</p>
                        </div>
                        </div>
                        </div>
                        <div class="item-inner"> <span class="labeltext">链接</span> <input type="text"  v-on:click="select_menu(index,item.this_type)" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly value=""    v-model="item.alias">
                        </div>
                    </div>
                </div>
                <div class="addChild " onclick="imgtextlist_add_menu()">添加一个</div>
            </div>
            <!--图片列表设置-->
            <div class="form_edit" id="form_edit_piclist" style="display: none;">
                <div class="form-item item_tit">
                    <span>图片列表</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">颜色选择</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input  onchange="select_bgcolor(this.value,'#piclist_bgcolor_text')"  id="piclist_bgcolor_r" value="#ffffff" name="banner_color" class="chosecolor data-bind" type="color"> <p id="piclist_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">排版样式</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="pureTitlesImg" value="1" id="purePiclist1"><label for="purePiclist1">样式一</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="pureTitlesImg" value="2" id="purePiclist2"><label for="purePiclist2">样式二</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="pureTitlesImg" value="3" id="purePiclist3"><label for="purePiclist3">样式三</label></div>
                        </div>
                    </div>
                    <div class="form-label">图片排版</div>
                    <div class="form-item">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="Tplb_piclistpb" value="1" id="editpiclayout_1"><label for="editpiclayout_1">一列</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="Tplb_piclistpb" value="2" id="editpiclayout_2"><label for="editpiclayout_2">二列</label></div>
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="Tplb_piclistpb" value="3" id="editpiclayout_3"><label for="editpiclayout_3">三列</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="Tplb_piclistpb" value="4" id="editpiclayout_4"><label for="editpiclayout_4">四列</label></div>
                        </div>
                    </div>
                    <div class="form-label mt10">圆角弧度</div>
                    <div class="item-inner">
                        <div class="form-item" style="display: block">
                            <div style="clear:both"></div>
                            <div>
                                <div class="Fzkb_height"><div class="minCell rangeCell-pureTextSize dib mt10" style="width:225px;"><input type="range" id="piclist_radius"    max="50"   min="0"    value="0" oninput="select_piclist_radius(this.value)"  style="width:100%;"> <div style="position:absolute;right:-35px;top:-8px;"><span id="piclist_radius_span">1</span><span>%</span></div></div></div></div>
                        </div>
                    </div>
                    <div v-for="(item,index) in edit_piclist" class="item drag ui-sortable-handle" style="margin-top: 10px !important">
                        <div class="item-prompt"> 建议尺寸300x300 <span class="deletechild icon-del"><span     v-on:click="remove_img(index,item.this_type)"  class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span></div>
                        <div class="item-inner"> <span class="labeltext">标题</span> <input  v-model="item.name" type="text"  :data-index="index" class="es-input data-bind" oninput="this_pic_name(this,this.value)"> </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                        <div class="item-inner item-image"> <span class="labeltext pull-left">图片</span> <div class="es-uploader data-bind-image"> <div class="es-selector iconbox noval"   v-on:click="select_img(index,item.this_type)"> <img style="display:block;" :src="item.imgurl"> <p>替换</p>
                        </div>
                        </div>
                        </div>
                        <div class="item-inner"> <span class="labeltext">链接</span> <input  v-model="item.name" type="text"  v-on:click="select_menu(index,item.this_type)" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly value="" >
                        </div>
                    </div>
                </div>
                <div class="addChild " onclick="pic_add_menu()">添加一个</div>
            </div>
            <!-- 三方 -->
            <div class="form_edit" id="form_edit_tripartite" style="display: none;">
                <div class="form-item item_tit">
                    <span>三方图</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">颜色选择</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input  onchange="select_bgcolor(this.value,'#tripartite_bgcolor_text')"  id="tripartite_bgcolor_r" value="#ffffff" name="banner_color" class="chosecolor data-bind" type="color"> <p id="tripartite_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="data-list ui-sortable"   v-for="(item,index) in tripartite_list">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image" data-bind="thumb">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(index,'tripartite')">
                                    <img :src="item.img" style="display:block;"/> <p>替换</p> </div>
                            </div> <div class="item-inner"> <span class="labeltext">链接</span>
                            <input  v-model="item.name"    v-on:click="select_menu(index,'tripartite')" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 四方 -->
            <div class="form_edit" id="form_edit_quartet" style="display: none;">
                <div class="form-item item_tit">
                    <span>四方图</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">颜色选择</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input  onchange="select_bgcolor(this.value,'#quartet_bgcolor_text')"  id="quartet_bgcolor_r" value="#ffffff" name="banner_color" class="chosecolor data-bind" type="color"> <p id="quartet_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="data-list ui-sortable"   v-for="(item,index) in quartet_list">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image" data-bind="thumb">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(index,'quartet')">
                                    <img :src="item.img" style="display:block;"/> <p>替换</p> </div>
                            </div> <div class="item-inner"> <span class="labeltext">链接</span>
                            <input  v-model="item.name"    v-on:click="select_menu(index,'quartet')" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 视频设置 -->
            <div class="form_edit" id="form_edit_video" style="display: none;">
                <div class="form-item item_tit">
                    <span>视频设置</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">视频高度</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div>
                                <div class="Fzkb_height"><div class="minCell rangeCell-pureTextSize dib mt10" style="width:225px;"><input type="range" id="vidoe_height"    max="250"   min="100"     value="150" oninput="is_vidoe_height(this.value)"  style="width:100%;"> <div style="position:absolute;right:-40px;top:-8px;"><span id="is_vidoe_height_text">150</span><span>px</span></div></div></div></div>
                        </div>
                    </div>
                    <div class="form-label">视频类型</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="vidoe_url" value="0" id="vidoe_url1"><label for="vidoe_url1">源链接</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="vidoe_url" value="1" id="vidoe_url2"><label for="vidoe_url2">腾讯链接</label></div>
                        </div>
                    </div>
                    <div class="form-label mt10">视频封面</div>
                    <div class="data-list ui-sortable">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image">
                                <div class="imgbox es-selector noval" v-on:click="select_img('0','edit_video')">
                                    <img id="this_video_img" src="__CONF_URL__public/menu/images/Lb2.png" style="display:block;"/> <p>替换</p> </div>
                            </div>
                            <div class="item-inner"> <span class="labeltext">链接</span>
                                <input type="text"  oninput="video_url(this.value)" class="es-input data-bind" id="Sp_textarea" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入第三方视频链接" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 音频设置 -->
            <div class="form_edit" id="form_edit_audio" style="display: none;">
                <div class="form-item item_tit">
                    <span>音频</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">音频封面</div>
                    <div class="data-list ui-sortable">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image">
                                <div class="imgbox es-selector noval" v-on:click="select_img('0','edit_music')">
                                    <img id="this_music_img" src="__CONF_URL__public/menu/images/Lb2.png" style="display:block;"/> <p>替换</p> </div>
                            </div>
                            <div class="item-inner"> <span class="labeltext">链接</span>
                                <input type="text"  oninput="music_url(this.value)" class="es-input data-bind" id="edit_music_url" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入链接" value="">
                            </div>
                            <div class="item-inner"> <span class="labeltext">名称</span>
                                <input type="text"  oninput="get_this_music_title(this.value)" class="es-input data-bind" id="this_music_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入音乐名称" value="">
                            </div>
                            <div class="item-inner"> <span class="labeltext">作者</span>
                                <input type="text"  oninput="get_this_music_author(this.value)" class="es-input data-bind" id="this_music_author" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入作者" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 富文本-->
            <div class="form_edit" data-type="12" id="form_rich_text"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>富文本</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input onchange="rich_text_bg(this.value)"  id="rich_bg_color" class="chosecolor data-bind" value="#ffffff" type="color"> <p id="rich_bg_color_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">内容</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <textarea onchange="rich_content(this.value)" id="editor" style="width: 266px; height: 400px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 辅助空白-->
            <div class="form_edit" data-type="5" id="form_edit_blank"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>辅助空白</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input onchange="this_blank_color(this.value)"  id="blank_color"  value="#ffffff"class="chosecolor data-bind" type="color"> <p id="blank_color_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label mt10">控件高度</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="Fzkb_height">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="blank_height"    max="100"   min="20"    value="20" oninput="this_blank_height(this.value)"  style="width:100%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="blank_height_number">1</span>
                                        <span>px</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 分割线 -->
            <div class="form_edit" data-type="7" id="form_edit_Parting"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>分割线</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">样式选择</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="Fgx_style" value="0" id="Fgx_style_1"><label for="Fgx_style_1">实线</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="Fgx_style" value="1" id="Fgx_style_2"><label for="Fgx_style_2">虚线</label></div>
                        </div>
                    </div>
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">线条</span>
                            <div class="chosecolor-container">
                                <input onchange="this_parting_line_color(this.value)"  id="Fgx_Color" value="#000000" class="chosecolor data-bind" type="color"> <p id="Fgx_Color_text">#000000</p>
                            </div>
                        </div>
                        <div class="item-inner mt10"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input onchange="this_parting_bg_color(this.value)"  value="#ffffff" id="Fgx_bgColor" class="chosecolor data-bind" type="color"> <p id="Fgx_bgColor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label mt10">控件高度</div>
                    <div class="form-item "><span class="labeltext">高度</span>
                        <div class="item-inner">
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="line_height"   value="1" min="1" max="30" oninput="this_parting_line_height(this.value)"  style="width:100%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="line_height_height">1</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-inner"><span class="labeltext" style="width:66px;">上下边距</span>
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range"   id="line_margin" value="1" min="10" max="60" oninput="this_parting_line_margin(this.value)"  style="width:100%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="line_margin_height">1</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 悬浮图标设置 -->
            <div class="form_edit" id="form_edit_floaticon" style="display: none;">
                <div class="form-item item_tit">
                    <span>悬浮图标</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">颜色选择</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input  onchange="select_bgcolor(this.value,'#floaticon_bgcolor_text')"  id="floaticon_bgcolor_r" value="#ffffff" name="banner_color" class="chosecolor data-bind" type="color"> <p id="floaticon_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">控件高度</div>
                    <div class="form-item ">
                        <div class="item-inner"><span class="labeltext">距底部</span>
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="floaticon_button" value="30" min="1" max="100"  oninput="is_floaticon_button(this.value)"  style="width:98%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="floaticon_button_text">30</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-inner"><span class="labeltext">右边距</span>
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="floaticon_margin"   value="100" min="1" max="100" oninput="is_floaticon_margin(this.value)"  style="width:98%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="floaticon_margin_text">100</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-inner"><span class="labeltext">透明度</span>
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="floaticon_transparent" value="100" min="1" max="100" oninput="is_floaticon_transparent(this.value)"  style="width:98%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="floaticon_transparent_text">100</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-label mt10">图标</div>
                    <div class="data-list ui-sortable"  v-for="(item,index) in floaticon">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(index,item.this_type)">
                                    <img :src="item.imgurl" style="display:block;"/> <p>替换</p> </div>
                            </div>
                            <div id="this_type_list">
                                <div id="this_0" class="item-inner"> <span class="labeltext">链接</span>
                                    <input  v-model="item.name"  v-on:click="select_menu(index,item.this_type)" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 悬浮客服设置 -->
            <div class="form_edit" id="form_edit_Customer" style="display: none;">
                <div class="form-item item_tit">
                    <span>客服设置</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">颜色选择</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input  onchange="select_bgcolor(this.value,'#Customer_bgcolor_text')"  id="Customer_bgcolor_r" value="#ffffff" name="banner_color" class="chosecolor data-bind" type="color"> <p id="Customer_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">控件高度</div>
                    <div class="form-item ">
                        <div class="item-inner"><span class="labeltext">距底部</span>
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="Customer_button" value="45" min="1" max="100"  oninput="is_Customer_button(this.value)"  style="width:98%;">
                                    <div style="position:absolute;right:-45px;top:-8px;">
                                        <span id="Customer_button_text">45</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-inner"><span class="labeltext">右边距</span>
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="Customer_margin"   value="100" min="1" max="100" oninput="is_Customer_margin(this.value)"  style="width:98%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="Customer_margin_text">100</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-inner"><span class="labeltext">透明度</span>
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="Customer_transparent" value="100" min="1" max="100" oninput="is_Customer_transparent(this.value)"  style="width:98%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="Customer_transparent_text">100</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-label mt10">图标</div>
                    <div class="data-list ui-sortable">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(index,'customer')">
                                    <img id="Customer_img" src="" style="display:block;"/> <p>替换</p> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 悬浮电话设置 -->
            <div class="form_edit" id="form_edit_phone" style="display: none;">
                <div class="form-item item_tit">
                    <span>悬浮电话</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">颜色选择</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input  onchange="select_bgcolor(this.value,'#phone_bgcolor_text')"  id="phone_bgcolor_r" value="#ffffff" name="banner_color" class="chosecolor data-bind" type="color"> <p id="phone_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">控件高度</div>
                    <div class="form-item ">
                        <div class="item-inner"><span class="labeltext">距底部</span>
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="phone_button" value="70" min="1" max="100"  oninput="is_phone_button(this.value)"  style="width:98%;">
                                    <div style="position:absolute;right:-50px;top:-8px;">
                                        <span id="phone_button_text">70</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-inner"><span class="labeltext">右边距</span>
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="phone_margin"   value="100" min="1" max="100" oninput="is_phone_margin(this.value)"  style="width:98%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="phone_margin_text">100</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-inner"><span class="labeltext">透明度</span>
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="phone_transparent" value="100" min="1" max="100" oninput="is_phone_transparent(this.value)"  style="width:98%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="phone_transparent_text">100</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-label mt10">图标</div>
                    <div class="data-list ui-sortable">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(index,'phone')">
                                    <img id="phone_img" src="" style="display:block;"/> <p>替换</p> </div>
                            </div>
                                <div class="item-inner"> <span class="labeltext">电话</span>
                                    <input  type="text" id="this_phone_val" oninput="set_this_phone(this.value)" style="cursor: text" class="es-input linkurl data-bind-url " placeholder="请填写电话" >
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 公告设置 -->
            <div class="form_edit" id="form_edit_announcement" style="display: none;">
                <div class="form-item item_tit">
                    <span>公告设置</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">文字</span>
                            <div class="chosecolor-container">
                                <input onchange="this_announcement_color(this.value)"  id="announcement_Color" value="#000000" class="chosecolor data-bind" type="color"> <p id="announcement_Color_text">#000000</p>
                            </div>
                        </div>
                        <div class="item-inner mt10"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input onchange="this_announcement_bg_color(this.value)"  value="#ffffff" id="announcement_bgColor" class="chosecolor data-bind" type="color"> <p id="announcement_bgColor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">内容</div>
                    <div class="form-item ">
                         <textarea oninput="this_announcement_textarea(this.value)"
                                   placeholder="请填写公告内容"
                                   class="textarea instruct_textarea search_textarea"
                                   id="announcement_textarea"
                                   style="margin-left: 10px;font-size:13px;height:60px;width: 250px;">
                         </textarea>
                    </div>
                    <div class="form-label mt10">图标</div>
                    <div class="data-list ui-sortable">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(index,'announcement')">
                                    <img id="announcement_img" src="" style="display:block;"/> <p>替换</p> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 流量主设置 -->
            <div class="form_edit" id="form_edit_ad" style="display: none;">
                <div class="form-item item_tit">
                    <span>流量主设置</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">高度</div>
                    <div class="item">
                        <div class="item-inner">
                            <div style="clear:both"></div>
                            <div>
                                <div style="width:200px;font-weight:bold;">高度</div>
                                <div class="Fzkb_height mt10">
                                    <div class="minCell rangeCell-pureTextSize dib mt10" style="width:225px;">
                                        <input type="range" id="ad_height" max="300"  value="140"  min="1"   step="0.1" oninput="select_ad_height(this.value)"  style="width:80%;">
                                        <div style="position:absolute;right:-35px;top:-8px;"><span id="what_ad_height">140</span>
                                            <span>px</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">流量主</div>
                    <div class="item">
                        <div class="item-inner">
                            <div style="clear:both"></div>
                            <div>
                                <div style="width:200px;font-weight:bold;">流量主ID</div>
                                <div class="Fzkb_height mt10">
                                    <div class="minCell rangeCell-pureTextSize dib mt10" style="width:225px;">
                                        <input type="text" oninput="set_ad_ad_id(this.value)" id="ad_ad_id" placeholder="请输入流量主ID" value="" class="es-input data-bind" style="cursor: text; border: 1px solid rgb(239, 239, 239); background: rgb(255, 255, 255); text-align: left;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 按钮 设置 -->
            <div class="form_edit" data-type="10" id="form_edit_button"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>按钮</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="item"> <span class="labeltext">名称</span>
                        <input type="text" value="按钮" id="button_name" oninput="select_button_name(this.value)" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                    </div>
                    <div class="form-label">边框</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="An_Xs" value="1" id="An_bg_show"><label for="An_bg_show">显示</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="An_Xs" value="0" id="An_bg_hide"><label for="An_bg_hide">隐藏</label></div>
                        </div>
                    </div>
                    <div class="form-label">图标</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="An_pic" value="1" id="An_pic_show"><label for="An_pic_show">显示</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="An_pic" value="2" id="An_pic_hide"><label for="An_pic_hide">隐藏</label></div>
                        </div>
                    </div>
                    <div class="form-label">圆角弧度</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="Fzkb_height mt10">
                                <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                    <input type="range" id="button_radius" value="0" min="0"  max="50" oninput="select_button_radius(this.value)"  style="width:100%;">
                                    <div style="position:absolute;right:-35px;top:-8px;">
                                        <span id="button_radius_height">1</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner mt10"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input onchange="button_bj_color(this.value)"  value="#0DA3F9" id="AnbgcolorSet"  class="chosecolor data-bind" type="color"> <p id="AnbgcolorSet_text">#0DA3F9</p>
                            </div>
                        </div>
                        <div class="item-inner mt10"> <span class="labeltext">标题</span>
                            <div class="chosecolor-container">
                                <input onchange="button_title_color(this.value)"    value="#ffffff" id="Title_ancolor"  class="chosecolor data-bind" type="color"> <p id="Title_ancolor_text">#ffffff</p>
                            </div>
                        </div>
                        <div class="item-inner mt10"> <span class="labeltext">边框</span>
                            <div class="chosecolor-container">
                                <input onchange="button_border_color(this.value)"  value="#0DA3F9" id="Title_bkcolor" class="chosecolor data-bind" type="color"> <p id="Title_bkcolor_text">#0DA3F9</p>
                            </div>
                        </div>
                    </div>
                    <div class="data-list ui-sortable"  v-for="(item,index) in edit_button">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(index,item.this_type)">
                                    <img :src="item.imgurl" style="display:block;"/> <p>替换</p> </div>
                            </div> <div class="item-inner"> <span class="labeltext">链接</span>
                            <input  v-model="item.name"  v-on:click="select_menu(index,item.this_type)" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--商品集-->
            <div class="form_edit" data-type="9" id="from_edit_goodlist"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>商品集</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">分列排版</div>
                    <div class="form-item">
                        <div class="item-inner">
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayoutRadio_goods" value="1" id="editgoods_1"><label for="editgoods_1">一列</label></div>
                            <div class="radio-inline"><input type="radio" checked class="magic-radio"  name="componentLayoutRadio_goods" value="2" id="editgoods_2"><label for="editgoods_2">两列</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayoutRadio_goods" value="3" id="editgoods_3"><label for="editgoods_3">三列</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayoutRadio_goods" value="9" id="editgoods_4"><label for="editgoods_4">横排</label></div>
                        </div>
                    </div>
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">标题</span>
                            <div class="chosecolor-container">
                                <input onchange="goods_font_color(this.value)" value="#000000"  id="goods_color" class="chosecolor data-bind" type="color"> <p id="goods_color_text">#000000</p>
                            </div>
                        </div>
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input onchange="goods_bg_color(this.value)" value="#ffffff"  id="goods_bgcolor" class="chosecolor data-bind" type="color"> <p id="goods_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">字体大小：</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="goodfontsize_zt" value="12" id="Goods_fontsize_s"><label for="Goods_fontsize_s">小号</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio" checked name="goodfontsize_zt" value="14" id="Goods_fontsize_m"><label for="Goods_fontsize_m">中号</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="goodfontsize_zt" value="16" id="Goods_fontsize_l"><label for="Goods_fontsize_l">大号</label></div>
                        </div>
                    </div>
                    <div class="form-label">添加类型</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="goods_add_type" value="1" id="Goods_type_anually"><label for="Goods_type_anually">手动</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="goods_add_type" value="2" id="Goods_type_automatic"><label for="Goods_type_automatic">自动</label></div>
                        </div>
                    </div>
                    <div class="form-item" id="goods_add_type_zid" style="display: none">
                        <div class="item-inner"><span class="labeltext">条数</span>
                            <input id="add_goods_list_val" oninput="add_goods_list(this.value)" value="1" type="text" class="es-input linkurl data-bind-url " style="width:100px;">
                        </div>
                        <div class="item-inner mt10"><span class="labeltext">分类</span>
                            <select id="select_cate_id" onchange="get_select_id()" class="imgedittext imgedittext_text" style="margin-top: 0px;display:inline-block;">
                                <option value="0">全部</option>
                                <?php if(is_array($goods_cate) || $goods_cate instanceof \think\Collection || $goods_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $g['cate_id']; ?>">
                                    <?php if($g['level']==1): ?>
                                    <?php echo $g['cate_name']; endif; if($g['level']==2): ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $g['cate_name']; endif; if($g['level']==3): ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $g['cate_name']; endif; ?>
                                </option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div class="item-inner mt10"><span class="labeltext">排序</span>
                            <div class="radio-inline" style="width:26%;"><input checked type="radio" class="magic-radio"  name="goods_sort_type" value="time" id="Goods_type_time"><label for="Goods_type_time">时间</label></div>
                            <div class="radio-inline" style="width:26%;"><input type="radio" class="magic-radio"  name="goods_sort_type" value="pop" id="Goods_type_pop"><label for="Goods_type_pop">人气</label></div>
                            <div class="radio-inline" style="width:26%;"><input type="radio" class="magic-radio"  name="goods_sort_type" value="sales" id="Goods_type_sales"><label for="Goods_type_sales">推荐</label></div>
                        </div>
                    </div>
                    <div  v-for="(item,index) in goodlist" class="item drag ui-sortable-handle" data-id="C01">
                        <div class="item-prompt"> 建议尺寸800x800 <span class="deletechild icon-del"><span  v-on:click="remove_img(index,item.this_type)"    class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span></div>
                        <div class="item-inner"> <span class="labeltext">名称</span> <input type="text" class="es-input data-bind" v-model="item.name"    oninput="this_goodlist_name(this,this.value)" > </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                        <div class="item-inner"> <span class="labeltext">简介</span> <input type="text" class="es-input data-bind" v-model="item.description"    oninput="this_goodlist_description(this,this.value)"> </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                        <div class="item-inner item-image"> <span class="labeltext pull-left">商品</span> <div class="es-uploader data-bind-image"> <div class="es-selector iconbox noval"    v-on:click="select_goods(index,item.this_type)"> <img style="display:block;" :src="item.imgurl"> <p>替换</p>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div  onclick="goods_add_menu()" class="addChild">+添加</div>
            </div>
            <!-- 搜索框-->
            <div class="form_edit" data-type="6" id="form_edit_search"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>搜索框</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">样式选择</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="search_style" value="0" id="search_style_1"><label for="search_style_1">默认</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="search_style" value="1" id="search_style_2"><label for="search_style_2">悬浮</label></div>
                        </div>
                    </div>
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner mt10"> <span class="labeltext">边框</span>
                            <div class="chosecolor-container">
                                <input onchange="this_search_color(this.value)"  id="search_color"  value="#ffffff" class="chosecolor data-bind" type="color"> <p id="search_color_text">#ffffff</p>
                            </div>
                        </div>
                        <div class="item-inner mt10"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input onchange="this_search_bj_color(this.value)"  id="search_bj_color" value="#ffffff" class="chosecolor data-bind" type="color"> <p id="search_bj_color_text">#ffffff</p>
                            </div>
                        </div>
                        <div class="item-inner mt10"> <span class="labeltext">文字</span>
                            <div class="chosecolor-container">
                                <input onchange="this_search_text_color(this.value)"  id="search_text_color" value="#000000" class="chosecolor data-bind" type="color"> <p id="search_text_color_text">#000000</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">热门搜索</div>
                    <div class="form-item ">
                        <div class="item-inner">
                    <textarea oninput="this_search_hot(this.value)"
                              placeholder="请填写搜索的热门关键词列并用,隔开列如：关键词1,关键词2,关键词3"
                              class="textarea instruct_textarea search_textarea"
                              id="search_textarea"
                              style="margin-left: 10px;font-size:13px;height:60px;width: 250px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 留言板 -->
            <div class="form_edit" id="form_message_board" style="display: none;">
                <div class="form-item item_tit">
                    <span>留言板</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">颜色选择</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input  onchange="select_bgcolor(this.value,'#board_bgcolor_text')"  id="board_bgcolor_r" value="#ffffff" name="banner_color" class="chosecolor data-bind" type="color"> <p id="board_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-label">选择样式</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="board_style" value="1" id="message_board_style"><label for="message_board_style">样式一</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 门店 -->
            <div class="form_edit" id="form_edit_store_door" style="display: none;">
                <div class="form-item item_tit">
                    <span>门店</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">颜色选择</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input  onchange="select_bgcolor(this.value,'#door_bgcolor_text')"  id="door_bgcolor_r" value="#ffffff" name="banner_color" class="chosecolor data-bind" type="color"> <p id="door_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="item mt10"> <span class="labeltext" style="width:56px;">门店名称</span>
                        <input type="text" id="door_textarea" oninput="door_name_set(this.value)" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                    </div>
                    <div class="item mt10"> <span class="labeltext" style="width:56px;">营业时间</span>
                        <input type="text" id="door_job" oninput="door_job_time(this.value)" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                    </div>
                    <div class="item mt10"> <span class="labeltext" style="width:56px;">客服电话</span>
                        <input type="text" id="door_phone" oninput="door_phone_set(this.value)" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                    </div>
                    <div class="form-label">门店Logo</div>
                    <div class="data-list ui-sortable">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image">
                                <div class="imgbox es-selector noval"    v-on:click="select_img('0','store_door')">
                                    <img id="this_door_img" src="__CONF_URL__public/menu/images/business.png" style="display:block;"/> <p>替换</p> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 地理位置 -->
            <div class="form_edit" data-type="11" id="form_edit_position"
                 style="display: none;">
                <div class="form-item item_tit">
                    <span>地理位置</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="form-label">颜色选择</div>
                    <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                            <div class="chosecolor-container">
                                <input  onchange="select_bgcolor(this.value,'#position_bgcolor_text')"  id="position_bgcolor_r" value="#ffffff" name="banner_color" class="chosecolor data-bind" type="color"> <p id="position_bgcolor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner"> <span class="labeltext">地址</span>
                            <input type="text" id="Dlwz_textarea" oninput="position_name(this.value)" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                        </div>
                    </div>
                    <div class="form-label">显示方式</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="positionLayouton" value="1" id="position_editlayout_1"><label for="position_editlayout_1">文字</label></div>
                            <div class="radio-inline"><input type="radio" class="magic-radio"  name="positionLayouton" value="2" id="position_editlayout_2"><label for="position_editlayout_2">图片</label></div>
                        </div>
                    </div>
                    <div class="form-label mt10">位置坐标</div>
                    <div class="item-inner" style="position: relative;">
                        <div class="item"> <span class="labeltext">经度</span>
                            <input type="text"  readonly id="longitude" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                        </div>
                        <div class="item"> <span class="labeltext">纬度</span>
                            <input type="text" readonly id="latitude" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                        </div>
                        <div   id="get_lng_lat"  v-on:click="click_position_wz()" class="savetemplate btn btn-primary"> 拾取坐标 </div>
                    </div>
                </div>
            </div>
            <!-- 表单 -->
            <div class="form_edit" id="form_edit_form" style="display: none;">
                <div class="form-item item_tit">
                    <span>表单</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="data-list ui-sortable">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="item-inner"> <span class="labeltext">表单</span>
                                <input v-on:click="select_form_all()" type="text" class="es-input linkurl data-bind-url " placeholder="请选择表单" readonly >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 底部导航 -->
            <div class="form_edit" id="form_edit_bottom" style="display: none;">
                <div class="form-item item_tit">
                    <span>底部导航</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <!--<div class="item ">-->
                        <!--<div class="item-inner"> <span class="labeltext">名称</span>-->
                            <!--<input type="text" id="nab_name" oninput="set_nab_name(this.value)" v-model="nab_name" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">-->
                        <!--</div>-->
                    <!--</div>-->
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <div class="item-inner mt10"> <span class="labeltext" style="width:66px;">字体颜色</span>
                            <div class="chosecolor-container">
                                <input  v-model="font_color" id="fontColorSet" onchange="fontColorSet_set(this.value)" class="chosecolor data-bind" type="color">
                                <p id="fontColorSet_text">#ffffff</p>
                            </div>
                        </div>
                        <div class="item-inner mt10"> <span class="labeltext" style="width:66px;">选中颜色</span>
                            <div class="chosecolor-container">
                                <input id="iconColorSet" class="chosecolor data-bind" onchange="iconColorSet_set(this.value)" type="color">
                                <p id="iconColorSet_text">#000000</p>
                            </div>
                        </div>
                        <div class="item-inner mt10"> <span class="labeltext" style="width:66px;">底部背景</span>
                            <div class="chosecolor-container">
                                <input id="pureBorderColor" value="#ffffff" class="chosecolor data-bind" onchange="pureBorderColor_set(this.value)" type="color">
                                <p id="pureBorderColor_text">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <div    v-for="(item,index) in menu_list" class="item drag ui-sortable-handle mt10">
                        <div class="item-prompt"> 建议尺寸100x100 <span class="deletechild icon-del"><span v-on:click="clip_menu(index)"  class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span></div>
                        <div class="item-inner"> <span class="labeltext">名称</span> <input type="text" class="es-input data-bind"      v-model="item.name"   :data-index="index"  oninput="this_di_name(this,this.value)"> </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                        <div class="item-inner item-image">
                            <span class="labeltext pull-left">图片</span>
                            <div class="es-uploader data-bind-image">
                                <div class="es-selector iconbox noval" style="float: left; margin-right: 10px;" v-on:click="add_menu(index,'page_icon')">
                                    <img style="display:block;" :src="item.page_icon"> <p>替换</p>
                                </div>
                                <div class="es-selector iconbox noval" style="float: left; margin-right: 10px;" v-on:click="add_menu(index,'page_select_icon')">
                                    <img style="display:block;" :src="item.page_select_icon"> <p>替换</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-inner"> <span class="labeltext">链接</span> <input type="text"  v-model="item.name_this" v-on:click="select_di_menu(index,item.this_type)" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly value="">
                        </div>
                    </div>
                    <div  :style="'display: '+display+';'" onclick="add_menu_di()" class="addChild">+添加</div>
                </div>
            </div>
            <!-- 头部和背景 -->
            <div class="form_edit" id="form_edit_head" style="display: block;">
                <div class="form-item item_tit">
                    <span>头部导航</span>
                </div>
                <div class="form-item noborder" style="display:block;">
                    <div class="item ">
                        <div class="item-inner"> <span class="labeltext">名称</span>
                            <input type="text" id="nab_name" oninput="set_nab_name(this.value)" v-model="nab_name" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                        </div>
                    </div>
                    <div class="form-label">选择颜色</div>
                    <div class="form-item ">
                        <?php if($wn==-1): ?>
                        <div class="item-inner mt10"> <span class="labeltext" style="width:66px;">头部背景</span>
                            <div class="chosecolor-container">
                                <input  id="DhColor" v-model="dh_color" value="" class="chosecolor data-bind" onchange="DhColor_set(this.value)" type="color">
                                <p id="DhColor_text">#df2f20</p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="item-inner mt10"> <span class="labeltext" style="width:66px;">窗口背景</span>
                            <div class="chosecolor-container">
                                <input  id="WinColor" v-model="win_color" class="chosecolor data-bind" onchange="WinColor_set(this.value)" type="color">
                                <p id="WinColor_text" v-text="win_color">#ffffff</p>
                            </div>
                        </div>
                    </div>
                    <?php if($wn==-1): ?>
                    <div class="form-label mt10">头部文字颜色</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="item-inner">
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="BtBorderColor" value="0" id="BtColorDefault"><label for="BtColorDefault">黑色</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="BtBorderColor" value="1" id="BtColorCustom"><label for="BtColorCustom">白色</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-label mt10">是否显示底部导航</div>
                    <div class="form-item ">
                        <div class="item-inner">
                            <div class="item-inner">
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="IsDiDisplay" value="true" id="IsDiDisplay1"><label for="IsDiDisplay1">显示</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="IsDiDisplay" value="false" id="IsDiDisplay2"><label for="IsDiDisplay2">不显示</label></div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="form-label mt10">背景图片</div>
                    <div class="data-list ui-sortable">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(0,'win_img')">
                                    <img :src="win_img" style="display:block;"/> <p>替换</p> </div>
                            </div>
                        </div>
                    </div>
                    <div  onclick="del_win_img()" class="addChild">清除图片</div>
                    <?php if($wn==-1): ?>
                    <div class="form-label mt10">开屏广告</div>
                    <div class="data-list ui-sortable">
                        <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                            <div class="es-uploader data-bind-image">
                                <div class="imgbox es-selector noval"  v-on:click="select_img(1,'openImg')">
                                    <img :src="openImg" style="display:block;"/> <p>替换</p> </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="openImg.length > 0" class="item-inner">
                        <span class="labeltext">链接</span>
                        <input  v-model="openImgUrlName"  type="text"  v-on:click="select_menu('openImgUrl','openImgUrl')" class="es-input linkurl" placeholder="请选择链接或地址" readonly>
                    </div>
                    <div  onclick="del_index_img()" class="addChild">清除图片</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<input  type="hidden" id="goods_select_id" value="">
<script src="/public/menu/js/jquery.artdialog.js"></script>
<script src="/public/menu/js/iframetools.js"></script>
<script src="/public/menu/js/index_component.js"></script>
<script src="/public/menu/js/index_my.js"></script>
<script type="text/javascript" src="/public/static/umedito/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/static/umedito/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/static/umedito/_examples/editor_api.js"></script>
<script type="text/javascript" src="/public/static/umedito/lang/zh-cn/zh-cn.js"></script>
<script src="/public/menu/js/jquery.gridly.js" type="text/javascript"></script>
<!--<a href="javascript:scroll(0,0)" id="j-gotop" class="gotop" title="回到顶部" style="left: 1418.5px; display: block;"></a>-->
<div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></div>
<script>
    //首页管理
    if('<?php echo $wn; ?>'==-1&&'<?php echo $wn_id; ?>'==0&&"<?php echo $my_mod; ?>"==-1){
        $(document).ready(function () {
            $.ajax({
                type: "post",
                url: "<?php echo url('menu/find_mch_index_mod'); ?>",
                success: function (data) {
                    var list = Object.keys(data['all_data']);
                    for (var i = 0; i < list.length; i++) {
                        var new_item = {};
                        if(typeof data['all_data'][i]['key'] !== 'undefined'){
                            if (data['all_data'][i]['key']==2){
                                new_item['key'] = data['all_data'][i]['key'];
                                new_item['appid'] = data['all_data'][i]['appid'];
                                //new_item['path'] = data['all_data'][i]['path'];
                            }
                            if (data['all_data'][i]['key']==3){
                                new_item['title'] = data['all_data'][i]['title'];
                                new_item['path'] = data['all_data'][i]['path'];
                            }
                        }
                        if (data['all_data'][i]['type'] == 'ad') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['img'] = data['all_data'][i]['img'];
                            new_item['ad_id'] = data['all_data'][i]['ad_id'];
                            new_item['height'] = data['all_data'][i]['height'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'edit_form') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['param'] = data['all_data'][i]['param'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color']?data['all_data'][i]['bg_color']:'#ffffff';
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'phone') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['form_bottom'] = data['all_data'][i]['form_bottom'];
                            new_item['form_margin'] = data['all_data'][i]['form_margin'];
                            new_item['form_transparent'] = data['all_data'][i]['form_transparent'];
                            new_item['b_form_bottom'] = data['all_data'][i]['b_form_bottom'];
                            new_item['b_form_margin'] = data['all_data'][i]['b_form_margin'];
                            new_item['b_form_transparent'] = data['all_data'][i]['b_form_transparent'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['phone'] = data['all_data'][i]['phone'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            var form_bottom3 =data['all_data'][i]['form_bottom'];
                            var form_margin3 =data['all_data'][i]['form_margin'];
                            Vue.nextTick(function () {
                                $("[name='phone']").css('bottom',  form_bottom3);
                                $("[name='phone']").css('left',form_margin3);
                            });
                        }
                        if (data['all_data'][i]['type'] == 'customer') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['form_bottom'] = data['all_data'][i]['form_bottom'];
                            new_item['form_margin'] = data['all_data'][i]['form_margin'];
                            new_item['form_transparent'] = data['all_data'][i]['form_transparent'];
                            new_item['b_form_bottom'] = data['all_data'][i]['b_form_bottom'];
                            new_item['b_form_margin'] = data['all_data'][i]['b_form_margin'];
                            new_item['b_form_transparent'] = data['all_data'][i]['b_form_transparent'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            var form_bottom2 =data['all_data'][i]['form_bottom'];
                            var form_margin2 =data['all_data'][i]['form_margin'];
                            Vue.nextTick(function () {
                                $("[name='customer']").css('bottom',  form_bottom2);
                                $("[name='customer']").css('left',form_margin2);
                            });
                        }
                        if (data['all_data'][i]['type'] == 'floaticon') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['form_bottom'] = data['all_data'][i]['form_bottom'];
                            new_item['form_margin'] = data['all_data'][i]['form_margin'];
                            new_item['form_transparent'] = data['all_data'][i]['form_transparent'];
                            new_item['b_form_bottom'] = data['all_data'][i]['b_form_bottom'];
                            new_item['b_form_margin'] = data['all_data'][i]['b_form_margin'];
                            new_item['b_form_transparent'] = data['all_data'][i]['b_form_transparent'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            var form_bottom1 =data['all_data'][i]['form_bottom'];
                            var form_margin1 =data['all_data'][i]['form_margin'];
                            Vue.nextTick(function () {
                                $("[name='floaticon']").css('bottom',  form_bottom1);
                                $("[name='floaticon']").css('left',form_margin1);
                            });
                        }
                        if (data['all_data'][i]['type'] == 'edit_video') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['video_type'] = data['all_data'][i]['video_type'];
                            new_item['video_height'] = data['all_data'][i]['video_height'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['video_url'] = data['all_data'][i]['video_url'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'edit_music') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['music_url'] = data['all_data'][i]['music_url'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['title'] = data['all_data'][i]['title'];
                            new_item['author'] = data['all_data'][i]['author'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'comment') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['is_display'] = data['all_data'][i]['is_display'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'rich_text') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['content'] = data['all_data'][i]['content'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'position') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['position_name'] = data['all_data'][i]['position_name'];
                            new_item['longitude'] = data['all_data'][i]['longitude'];
                            new_item['latitude'] = data['all_data'][i]['latitude'];
                            new_item['is_display'] = data['all_data'][i]['is_display'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'edit_button') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['button_name'] = data['all_data'][i]['button_name'];
                            new_item['button_radius'] = data['all_data'][i]['button_radius'];
                            new_item['button_border'] = data['all_data'][i]['button_border'];
                            new_item['button_bg_color'] = data['all_data'][i]['button_bg_color'];
                            new_item['button_title_color'] = data['all_data'][i]['button_title_color'];
                            new_item['button_border_color'] = data['all_data'][i]['button_border_color'];
                            new_item['img_style'] = data['all_data'][i]['img_style'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            //bannerVM.banner=data['all_data'][i]['list'];
                        }
                        if (data['all_data'][i]['type'] == 'banner') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['jiaodian_color'] = data['all_data'][i]['jiaodian_color'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['jiaodian_dots'] = data['all_data'][i]['jiaodian_dots'];
                            new_item['indicator_dots'] = data['all_data'][i]['indicator_dots'];
                            new_item['ly_width'] = data['all_data'][i]['ly_width'];
                            new_item['ly_height'] = data['all_data'][i]['ly_height'];
                            new_item['juedui_height'] = data['all_data'][i]['juedui_height'];
                            new_item['topimg'] = data['all_data'][i]['topimg'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            //bannerVM.banner=data['all_data'][i]['list'];
                        }
                        if (data['all_data'][i]['type'] == 'advert') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['ly_width'] = data['all_data'][i]['ly_width'];
                            new_item['ly_height'] = data['all_data'][i]['ly_height'];
                            new_item['juedui_height'] = data['all_data'][i]['juedui_height'];
                            new_item['topimg'] = data['all_data'][i]['topimg'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'edit_piclist') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['layout'] = data['all_data'][i]['layout'];
                            new_item['pic_style'] = data['all_data'][i]['pic_style'];
                            new_item['html_style'] = data['all_data'][i]['html_style'];
                            new_item['pic_radius'] = data['all_data'][i]['pic_radius'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color']?data['all_data'][i]['bg_color']:'#ffffff';
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'navigation') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['radian'] = data['all_data'][i]['radian'];
                            new_item['style'] = data['all_data'][i]['style'];
                            new_item['layout'] = data['all_data'][i]['layout'];
                            new_item['color'] = data['all_data'][i]['color'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color']?data['all_data'][i]['bg_color']:'#ffffff';
                            new_item['font_size'] = data['all_data'][i]['font_size'];
                            new_item['topimg'] = data['all_data'][i]['topimg'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            //bannerVM.catenav=data['all_data'][i]['list'];
                        }
                        if (data['all_data'][i]['type'] == 'headline') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['name'] = data['all_data'][i]['name'];
                            new_item['style'] = data['all_data'][i]['style'];
                            new_item['color'] = data['all_data'][i]['color'];
                            new_item['font_size'] = data['all_data'][i]['font_size'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            var modstyle = {};
                            modstyle = {
                                titlestyle: '',
                            };
                            if (data['all_data'][i]['style'] == 1) {
                                modstyle.titlestyle = '1';
                                modstyle.titlestyle3 = '';
                                modstyle.titlestyle2 = '';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 2) {
                                modstyle.titlestyle = '2';
                                modstyle.titlestyle3 = '';
                                modstyle.titlestyle2 = '';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 3) {
                                modstyle.titlestyle = '3';
                                modstyle.titlestyle3 = '';
                                modstyle.titlestyle2 = '';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 4) {
                                modstyle.titlestyle = '4';
                                modstyle.titlestyle3 = '';
                                modstyle.titlestyle2 = '';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 5) {
                                modstyle.titlestyle = '5';
                                modstyle.titlestyle3 = ' .pureText .wrap{text-indent:2px;text-align: center;';
                                modstyle.titlestyle2 = ' .pureText .wrap::after{display:inline-block;height:1px;background-color:#cd3637;margin-left:5px;width:28%;vertical-align: middle;}';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 6) {
                                modstyle.titlestyle = '6';
                                modstyle.titlestyle3 = ' .pureText .wrap{text-indent:2px;text-align: center;';
                                modstyle.titlestyle2 = ' .pureText .wrap::after{display: block;margin-left: 49%;margin-top: 20px;vertical-align: middle;width: 0;height: 0;margin-top: 4px;border-left: 7px solid transparent;border-right: 7px solid transparent;border-top: 7px solid #ffa000;}';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 7) {
                                modstyle.titlestyle = '7';
                                modstyle.titlestyle3 = ' .seven_titleS{display:inline-block;width:8px;height:8px;background-color:#333;transform:rotate(45deg);margin-left:6px;margin-right:6px}';
                                modstyle.titlestyle2 = ' .seven_titleS{display:inline-block;width:8px;height:8px;background-color:#333;transform:rotate(45deg);margin-left:6px;margin-right:6px}';
                                // AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 8) {
                                modstyle.titlestyle = '8';
                                modstyle.titlestyle3 = ' .seven_titleS{display:inline-block;width:2px;height:22px;background-color:#0da3f9;margin-top:-4px;margin-left:6px;vertical-align: middle;}';
                                modstyle.titlestyle2 = ' .seven_titleO{display:inline-block;width:2px;height:22px;background-color:#0da3f9;margin-top:-4px;margin-right:6px;vertical-align: middle;}';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            EditCss("title_" + data['all_data'][i]['time_key'], modstyle);
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'blank') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['ly_height'] = data['all_data'][i]['ly_height'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'search') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['default'] = data['all_data'][i]['default'];
                            new_item['search_style'] = data['all_data'][i]['search_style'];
                            new_item['li_bg_color'] = data['all_data'][i]['li_bg_color'];
                            new_item['text_color'] = data['all_data'][i]['text_color'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'line') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['line'] = data['all_data'][i]['line'];
                            new_item['style'] = data['all_data'][i]['style'];
                            new_item['color'] = data['all_data'][i]['color'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['ly_height'] = data['all_data'][i]['ly_height'];
                            new_item['margin'] = data['all_data'][i]['margin'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'article') {
                            new_item['add_type'] = data['all_data'][i]['add_type'];
                            new_item['add_num'] = data['all_data'][i]['add_num'];
                            new_item['add_sort'] = data['all_data'][i]['add_sort'];
                            new_item['add_cate'] = data['all_data'][i]['add_cate'];
                            new_item['type'] = data['all_data'][i]['type'];
                            if (typeof( data['all_data'][i]['style_num']) == 'undefined') {
                                new_item['style_num'] = 1;
                            }else {
                                new_item['style_num'] = data['all_data'][i]['style_num'];
                            }
                            new_item['title_size'] = data['all_data'][i]['title_size'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['title_color'] = data['all_data'][i]['title_color'];
                            new_item['layout'] = data['all_data'][i]['layout'];
                            new_item['style_width'] = data['all_data'][i]['style_width'];
                            new_item['style_height'] = data['all_data'][i]['style_height'];
                            new_item['list'] = data['all_data'][i]['text_width'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            //bannerVM.imgtextlist=data['all_data'][i]['list'];
                        }
                        if (data['all_data'][i]['type'] == 'goods') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['add_type'] = data['all_data'][i]['add_type'];
                            new_item['add_num'] = data['all_data'][i]['add_num'];
                            new_item['add_sort'] = data['all_data'][i]['add_sort'];
                            new_item['add_cate'] = data['all_data'][i]['add_cate'];
                            new_item['title_size'] = data['all_data'][i]['title_size'];
                            new_item['title_color'] = data['all_data'][i]['title_color'];
                            new_item['layout'] = data['all_data'][i]['layout'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color']?data['all_data'][i]['bg_color']:'#ffffff';
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            //bannerVM.goodlist=data['all_data'][i]['list'];
                        }
                        if (data['all_data'][i]['type'] == 'tripartite') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color']?data['all_data'][i]['bg_color']:'#ffffff';
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'quartet') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color']?data['all_data'][i]['bg_color']:'#ffffff';
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'message_board') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color']?data['all_data'][i]['bg_color']:'#ffffff';
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'store_door') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color']?data['all_data'][i]['bg_color']:'#ffffff';
                            new_item['door_name'] = data['all_data'][i]['door_name'];
                            new_item['door_job'] = data['all_data'][i]['door_job'];
                            new_item['door_phone'] = data['all_data'][i]['door_phone'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'announcement') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['color'] = data['all_data'][i]['color'];
                            new_item['title'] = data['all_data'][i]['title'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                    }
                }
            })
            $.ajax({
                type: "post",
                url: "<?php echo url('menu/find_default'); ?>",
                success: function (data) {
                    console.log(data);
                    if (data['tpl'] == 1) {
                        var list = data['tabBar']['list'];
                        console.log(list);
                        if (typeof(data['tabBar']['IsDiDis']) != 'undefined') {
                            bannerVM.is_di_dis=data['tabBar']['IsDiDis'];
                        }
                        if (data['tabBar']['IsDiDis']==false){
                            $("#IsDiDisplay2").prop("checked", "checked");
                        }else {
                            $("#IsDiDisplay1").prop("checked", "checked");
                        }
                        console.log(data['tabBar']['IsDiDis']);
                        if (typeof(data['tabBar']['winColor']) != 'undefined'&&data['tabBar']['winColor'] != '') {
                            bannerVM.win_color=data['tabBar']['winColor'];
                        }
                        $('#WinColor').val(bannerVM.win_color);
                        if (typeof(data['tabBar']['winImg']) != 'undefined'&&data['tabBar']['winImg'] != '') {
                            bannerVM.win_img=data['tabBar']['winImg'];
                        }

                        if (typeof(data['tabBar']['openImg']) != 'undefined'&&data['tabBar']['openImg'] != '') {
                            bannerVM.openImg=data['tabBar']['openImg'];
                        }

                        if (typeof(data['tabBar']['openImgUrl']) != 'undefined'&&data['tabBar']['openImgUrl'] != '') {
                            bannerVM.openImgUrl=data['tabBar']['openImgUrl'];
                        }

                        if (typeof(data['tabBar']['openImgUrlName']) != 'undefined'&&data['tabBar']['openImgUrlName'] != '') {
                            bannerVM.openImgUrlName=data['tabBar']['openImgUrlName'];
                        }


                        if (typeof(data['tabBar']['color']) != 'undefined'&&data['tabBar']['color'] != ''&&data['tabBar']['color']!='#8b8b8b') {
                            $('#fontColorSet').val(data['tabBar']['color']);
                            $("#fontColorSet_text").html(data['tabBar']['color']);
                            bannerVM.font_color = data['tabBar']['color'];
                        }
                        if (typeof(data['tabBar']['selectedColor']) != 'undefined'&&data['tabBar']['selectedColor'] != '') {
                            $('#iconColorSet').val(data['tabBar']['selectedColor']);
                            $("#iconColorSet_text").html(data['tabBar']['selectedColor']);
                        }
                        if (typeof(data['tabBar']['backgroundColor']) != 'undefined'&&data['tabBar']['backgroundColor'] != ''&&data['tabBar']['backgroundColor']!='#ffffff') {
                            $('#pureBorderColor').val(data['tabBar']['backgroundColor']);
                            bannerVM.db_color = data['tabBar']['backgroundColor'];
                            $("#pureBorderColor_text").html(data['tabBar']['backgroundColor']);
                        }
                        if(typeof(data['tabBar']['background'])!='undefined'&&data['tabBar']['background'] != ''){
                            $('#DhColor').val(data['tabBar']['background']);
                            bannerVM.dh_color=data['tabBar']['background'];
                            console.log(bannerVM.dh_color);
                            $("#DhColor_text").html(data['tabBar']['background']);
                        }
                        if(typeof(data['tabBar']['name'])!='undefined'&&data['tabBar']['name'] != ''){
                            bannerVM.nab_name=data['tabBar']['name'];
                        }
                        if(data['tabBar']['backgroundTextStyle']=='#000000'&&data['tabBar']['backgroundTextStyle'] != ''){
                            $('#BtColorDefault').prop("checked", "checked");
                            bannerVM.nab_color=data['tabBar']['backgroundTextStyle'];
                            bannerVM.bag_url = '__CONF_URL__public/menu/images/black.png';
                        }else {
                            $('#BtColorCustom').prop("checked", "checked");
                            bannerVM.nab_color=data['tabBar']['backgroundTextStyle'];
                            bannerVM.bag_url = '__CONF_URL__public/menu/images/white.png';
                        }
                        if (list.length == 5) {
                            bannerVM.add_h_di -= 100;
                            bannerVM.display = "none";
                        }
                        var size = list.length - 2 < 0 ? 0 : list.length - 2;
                        bannerVM.add_h_di += size * 112;
                        bannerVM.add_top_di += size * 112;
                        for (var i = 0; i < list.length; i++) {
                            var item = {};
                            item['key'] = !list[i]['key'] ? "" : list[i]['key'];
                            item['imgurl'] = !list[i]['imgurl'] ? "" : list[i]['imgurl'];
                            item['name'] = !list[i]['name'] ? "" : list[i]['name'];
                            item['appid'] = !list[i]['appid'] ? "" : list[i]['appid'];
                            item['ident'] = !list[i]['ident'] ? "" : list[i]['ident'];
                            item['path'] = !list[i]['path'] ? "" : list[i]['path'];
                            item['phone'] = !list[i]['phone'] ? "" : list[i]['phone'];
                            item['name_this'] = !list[i]['name_this'] ? "" : list[i]['name_this'];
                            item['title'] = !list[i]['title'] ? "" : list[i]['title'];
                            item['lat'] = !list[i]['lat'] ? "" : list[i]['lat'];
                            item['lng'] =!list[i]['lng'] ? "" : list[i]['lng'];
                            if (isValid(list[i]['page_icon'])) {
                                item['page_icon'] = list[i]['page_icon'];
                            }
                            if (isValid(list[i]['page_select_icon'])) {
                                item['page_select_icon'] = list[i]['page_select_icon'];
                            }
                            item['top'] = (i * 112);
                            bannerVM.menu_list.push(item);
                        }
                    } else {
                        var obj = eval('(' + data + ')');
                        var list = obj['tabBar']['list'];
                        if (list.length == 5) {
                            bannerVM.add_h_di -= 100;
                            bannerVM.display = "none";
                        }
                        var size = list.length - 2 < 0 ? 0 : list.length - 2;
                        bannerVM.add_h_di += size * 112;
                        bannerVM.add_top_di += size * 112;
                        for (var i = 0; i < 5; i++) {
                            if (typeof(list[i]) == "undefined") {
                                continue;
                            }
                            var item = {};
                            item['key'] = list[i]['key'];
                            item['imgurl'] = list[i]['imgurl'];
                            item['name'] = list[i]['name'];
                            item['name_this'] = list[i]['name_this'];
                            item['page_icon'] = list[i]['page_icon'];
                            item['page_select_icon'] = list[i]['page_select_icon'];
                            item['top'] = (i * 112);
                            bannerVM.menu_list.push(item);
                        }
                    }
                }
            });
        })
    }
    //万能页面编辑
    if ('<?php echo $wn; ?>'==2&&"<?php echo $my_mod; ?>"==-1&&'<?php echo $wn_id; ?>'!=0){
        $.ajax({
            type: "post",
            data: {'id': "<?php echo $wn_id; ?>"},
            url: "<?php echo url('menu/edit_universal'); ?>",
            success: function (data) {
                var list = Object.keys(data['all_data']);
                bannerVM.nab_name=data['name'];
                bannerVM.is_di_dis=false;
                bannerVM.win_color = data['win_color'];
                bannerVM.win_img = data['win_img'];

                $('#WinColor').val(bannerVM.win_color);

                $("#bus_select_up_id").val('<?php echo $wn_id; ?>');
                for (var i = 0; i < list.length; i++) {
                    var new_item = {};

                    if(data['all_data'][i].hasOwnProperty("bg_color"))
                    {
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                    }

                    if(typeof data['all_data'][i]['key'] !== 'undefined'){
                        if (data['all_data'][i]['key']==2){
                            new_item['key'] = data['all_data'][i]['key'];
                            new_item['appid'] = data['all_data'][i]['appid'];
                            //new_item['path'] = data['all_data'][i]['path'];
                        }
                        if (data['all_data'][i]['key']==3){
                            new_item['title'] = data['all_data'][i]['title'];
                            new_item['path'] = data['all_data'][i]['path'];
                        }
                    }
                    if (data['all_data'][i]['type'] == 'edit_form') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['param'] = data['all_data'][i]['param'];
                        new_item['imgurl'] = data['all_data'][i]['imgurl'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'ad') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['img'] = data['all_data'][i]['img'];
                        new_item['ad_id'] = data['all_data'][i]['ad_id'];
                        new_item['height'] = data['all_data'][i]['height'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'phone') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['form_bottom'] = data['all_data'][i]['form_bottom'];
                        new_item['form_margin'] = data['all_data'][i]['form_margin'];
                        new_item['form_transparent'] = data['all_data'][i]['form_transparent'];
                        new_item['b_form_bottom'] = data['all_data'][i]['b_form_bottom'];
                        new_item['b_form_margin'] = data['all_data'][i]['b_form_margin'];
                        new_item['b_form_transparent'] = data['all_data'][i]['b_form_transparent'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        new_item['imgurl'] = data['all_data'][i]['imgurl'];
                        new_item['phone'] = data['all_data'][i]['phone'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                        var form_bottom3 =data['all_data'][i]['form_bottom'];
                        var form_margin3 =data['all_data'][i]['form_margin'];
                        Vue.nextTick(function () {
                            $("[name='phone']").css('bottom',  form_bottom3);
                            $("[name='phone']").css('left',form_margin3);
                        });
                    }
                    if (data['all_data'][i]['type'] == 'customer') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['form_bottom'] = data['all_data'][i]['form_bottom'];
                        new_item['form_margin'] = data['all_data'][i]['form_margin'];
                        new_item['form_transparent'] = data['all_data'][i]['form_transparent'];
                        new_item['b_form_bottom'] = data['all_data'][i]['b_form_bottom'];
                        new_item['b_form_margin'] = data['all_data'][i]['b_form_margin'];
                        new_item['b_form_transparent'] = data['all_data'][i]['b_form_transparent'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        new_item['imgurl'] = data['all_data'][i]['imgurl'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                        var form_bottom2 =data['all_data'][i]['form_bottom'];
                        var form_margin2 =data['all_data'][i]['form_margin'];
                        Vue.nextTick(function () {
                            $("[name='customer']").css('bottom',  form_bottom2);
                            $("[name='customer']").css('left',form_margin2);
                        });
                    }
                    if (data['all_data'][i]['type'] == 'floaticon') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['form_bottom'] = data['all_data'][i]['form_bottom'];
                        new_item['form_margin'] = data['all_data'][i]['form_margin'];
                        new_item['form_transparent'] = data['all_data'][i]['form_transparent'];
                        new_item['b_form_bottom'] = data['all_data'][i]['b_form_bottom'];
                        new_item['b_form_margin'] = data['all_data'][i]['b_form_margin'];
                        new_item['b_form_transparent'] = data['all_data'][i]['b_form_transparent'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        new_item['list'] = data['all_data'][i]['list'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                        var form_bottom1 =data['all_data'][i]['form_bottom'];
                        var form_margin1 =data['all_data'][i]['form_margin'];
                        Vue.nextTick(function () {
                            $("[name='floaticon']").css('bottom',  form_bottom1);
                            $("[name='floaticon']").css('left',form_margin1);
                        });
                    }
                    if (data['all_data'][i]['type'] == 'edit_video') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['video_type'] = data['all_data'][i]['video_type'];
                        new_item['video_height'] = data['all_data'][i]['video_height'];
                        new_item['imgurl'] = data['all_data'][i]['imgurl'];
                        new_item['video_url'] = data['all_data'][i]['video_url'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'edit_music') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['music_url'] = data['all_data'][i]['music_url'];
                        new_item['imgurl'] = data['all_data'][i]['imgurl'];
                        new_item['title'] = data['all_data'][i]['title'];
                        new_item['author'] = data['all_data'][i]['author'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'comment') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['is_display'] = data['all_data'][i]['is_display'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'rich_text') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['content'] = data['all_data'][i]['content'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'position') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['position_name'] = data['all_data'][i]['position_name'];
                        new_item['longitude'] = data['all_data'][i]['longitude'];
                        new_item['latitude'] = data['all_data'][i]['latitude'];
                        new_item['is_display'] = data['all_data'][i]['is_display'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'edit_button') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['button_name'] = data['all_data'][i]['button_name'];
                        new_item['button_radius'] = data['all_data'][i]['button_radius'];
                        new_item['button_border'] = data['all_data'][i]['button_border'];
                        new_item['button_bg_color'] = data['all_data'][i]['button_bg_color'];
                        new_item['button_title_color'] = data['all_data'][i]['button_title_color'];
                        new_item['button_border_color'] = data['all_data'][i]['button_border_color'];
                        new_item['img_style'] = data['all_data'][i]['img_style'];
                        new_item['list'] = data['all_data'][i]['list'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                        //bannerVM.banner=data['all_data'][i]['list'];
                    }
                    if (data['all_data'][i]['type'] == 'banner') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['jiaodian_color'] = data['all_data'][i]['jiaodian_color'];
                        new_item['jiaodian_dots'] = data['all_data'][i]['jiaodian_dots'];
                        new_item['indicator_dots'] = data['all_data'][i]['indicator_dots'];
                        new_item['ly_width'] = data['all_data'][i]['ly_width'];
                        new_item['ly_height'] = data['all_data'][i]['ly_height'];
                        new_item['juedui_height'] = data['all_data'][i]['juedui_height'];
                        new_item['topimg'] = data['all_data'][i]['topimg'];
                        new_item['list'] = data['all_data'][i]['list'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                        //bannerVM.banner=data['all_data'][i]['list'];
                    }
                    if (data['all_data'][i]['type'] == 'advert') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['ly_width'] = data['all_data'][i]['ly_width'];
                        new_item['ly_height'] = data['all_data'][i]['ly_height'];
                        new_item['juedui_height'] = data['all_data'][i]['juedui_height'];
                        new_item['topimg'] = data['all_data'][i]['topimg'];
                        new_item['list'] = data['all_data'][i]['list'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'edit_piclist') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['layout'] = data['all_data'][i]['layout'];
                        new_item['pic_style'] = data['all_data'][i]['pic_style'];
                        new_item['html_style'] = data['all_data'][i]['html_style'];
                        new_item['pic_radius'] = data['all_data'][i]['pic_radius'];
                        new_item['list'] = data['all_data'][i]['list'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'navigation') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['radian'] = data['all_data'][i]['radian'];
                        new_item['style'] = data['all_data'][i]['style'];
                        new_item['layout'] = data['all_data'][i]['layout'];
                        new_item['color'] = data['all_data'][i]['color'];
                        new_item['font_size'] = data['all_data'][i]['font_size'];
                        new_item['topimg'] = data['all_data'][i]['topimg'];
                        new_item['list'] = data['all_data'][i]['list'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        bannerVM.all_data.push(new_item);
                        //bannerVM.catenav=data['all_data'][i]['list'];
                    }
                    if (data['all_data'][i]['type'] == 'headline') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['name'] = data['all_data'][i]['name'];
                        new_item['style'] = data['all_data'][i]['style'];
                        new_item['color'] = data['all_data'][i]['color'];
                        new_item['font_size'] = data['all_data'][i]['font_size'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        var modstyle = {};
                        modstyle = {
                            titlestyle: '',
                        };
                        if (data['all_data'][i]['style'] == 1) {
                            modstyle.titlestyle = '1';
                            modstyle.titlestyle3 = '';
                            modstyle.titlestyle2 = '';
                            //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                        }
                        if (data['all_data'][i]['style'] == 2) {
                            modstyle.titlestyle = '2';
                            modstyle.titlestyle3 = '';
                            modstyle.titlestyle2 = '';
                            //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                        }
                        if (data['all_data'][i]['style'] == 3) {
                            modstyle.titlestyle = '3';
                            modstyle.titlestyle3 = '';
                            modstyle.titlestyle2 = '';
                            //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                        }
                        if (data['all_data'][i]['style'] == 4) {
                            modstyle.titlestyle = '4';
                            modstyle.titlestyle3 = '';
                            modstyle.titlestyle2 = '';
                            //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                        }
                        if (data['all_data'][i]['style'] == 5) {
                            modstyle.titlestyle = '5';
                            modstyle.titlestyle3 = ' .pureText .wrap{text-indent:2px;text-align: center;';
                            modstyle.titlestyle2 = ' .pureText .wrap::after{display:inline-block;height:1px;background-color:#cd3637;margin-left:5px;width:28%;vertical-align: middle;}';
                            //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                        }
                        if (data['all_data'][i]['style'] == 6) {
                            modstyle.titlestyle = '6';
                            modstyle.titlestyle3 = ' .pureText .wrap{text-indent:2px;text-align: center;';
                            modstyle.titlestyle2 = ' .pureText .wrap::after{display: block;margin-left: 49%;margin-top: 20px;vertical-align: middle;width: 0;height: 0;margin-top: 4px;border-left: 7px solid transparent;border-right: 7px solid transparent;border-top: 7px solid #ffa000;}';
                            //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                        }
                        if (data['all_data'][i]['style'] == 7) {
                            modstyle.titlestyle = '7';
                            modstyle.titlestyle3 = ' .seven_titleS{display:inline-block;width:8px;height:8px;background-color:#333;transform:rotate(45deg);margin-left:6px;margin-right:6px}';
                            modstyle.titlestyle2 = ' .seven_titleS{display:inline-block;width:8px;height:8px;background-color:#333;transform:rotate(45deg);margin-left:6px;margin-right:6px}';
                            // AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                        }
                        if (data['all_data'][i]['style'] == 8) {
                            modstyle.titlestyle = '8';
                            modstyle.titlestyle3 = ' .seven_titleS{display:inline-block;width:2px;height:22px;background-color:#0da3f9;margin-top:-4px;margin-left:6px;vertical-align: middle;}';
                            modstyle.titlestyle2 = ' .seven_titleO{display:inline-block;width:2px;height:22px;background-color:#0da3f9;margin-top:-4px;margin-right:6px;vertical-align: middle;}';
                            //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                        }
                        EditCss("title_" + data['all_data'][i]['time_key'], modstyle);
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'blank') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        new_item['ly_height'] = data['all_data'][i]['ly_height'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'search') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        new_item['default'] = data['all_data'][i]['default'];
                        new_item['search_style'] = data['all_data'][i]['search_style'];
                        new_item['li_bg_color'] = data['all_data'][i]['li_bg_color'];
                        new_item['text_color'] = data['all_data'][i]['text_color'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'line') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['line'] = data['all_data'][i]['line'];
                        new_item['style'] = data['all_data'][i]['style'];
                        new_item['color'] = data['all_data'][i]['color'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        new_item['ly_height'] = data['all_data'][i]['ly_height'];
                        new_item['margin'] = data['all_data'][i]['margin'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'article') {
                        new_item['add_type'] = data['all_data'][i]['add_type'];
                        new_item['add_num'] = data['all_data'][i]['add_num'];
                        new_item['add_sort'] = data['all_data'][i]['add_sort'];
                        new_item['add_cate'] = data['all_data'][i]['add_cate'];
                        new_item['type'] = data['all_data'][i]['type'];
                        if (typeof( data['all_data'][i]['style_num']) == 'undefined') {
                            new_item['style_num'] = 1;
                        }else {
                            new_item['style_num'] = data['all_data'][i]['style_num'];
                        }
                        new_item['title_size'] = data['all_data'][i]['title_size'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        new_item['title_color'] = data['all_data'][i]['title_color'];
                        new_item['layout'] = data['all_data'][i]['layout'];
                        new_item['style_width'] = data['all_data'][i]['style_width'];
                        new_item['style_height'] = data['all_data'][i]['style_height'];
                        new_item['list'] = data['all_data'][i]['text_width'];
                        new_item['list'] = data['all_data'][i]['list'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                        //bannerVM.imgtextlist=data['all_data'][i]['list'];
                    }
                    if (data['all_data'][i]['type'] == 'goods') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['add_type'] = data['all_data'][i]['add_type'];
                        new_item['add_num'] = data['all_data'][i]['add_num'];
                        new_item['add_sort'] = data['all_data'][i]['add_sort'];
                        new_item['add_cate'] = data['all_data'][i]['add_cate'];
                        new_item['title_size'] = data['all_data'][i]['title_size'];
                        new_item['title_color'] = data['all_data'][i]['title_color'];
                        new_item['layout'] = data['all_data'][i]['layout'];
                        new_item['list'] = data['all_data'][i]['list'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                        //bannerVM.goodlist=data['all_data'][i]['list'];
                    }
                    if (data['all_data'][i]['type'] == 'tripartite') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['list'] = data['all_data'][i]['list'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'quartet') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['list'] = data['all_data'][i]['list'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'message_board') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'store_door') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['door_name'] = data['all_data'][i]['door_name'];
                        new_item['door_job'] = data['all_data'][i]['door_job'];
                        new_item['door_phone'] = data['all_data'][i]['door_phone'];
                        new_item['imgurl'] = data['all_data'][i]['imgurl'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        bannerVM.all_data.push(new_item);
                    }
                    if (data['all_data'][i]['type'] == 'announcement') {
                        new_item['type'] = data['all_data'][i]['type'];
                        new_item['bg_color'] = data['all_data'][i]['bg_color'];
                        new_item['color'] = data['all_data'][i]['color'];
                        new_item['title'] = data['all_data'][i]['title'];
                        new_item['imgurl'] = data['all_data'][i]['imgurl'];
                        new_item['time_key'] = data['all_data'][i]['time_key'];
                        bannerVM.all_data.push(new_item);
                    }
                }
            }
        })
    }
    //我的模版编辑
    if('<?php echo $wn; ?>'==-1&&"<?php echo $my_mod; ?>"!=-1&&'<?php echo $wn_id; ?>'==0){
        $(document).ready(function () {
            $.ajax({
                type: "post",
                url: "<?php echo url('menu/find_mch_my_mod'); ?>&my_mode=<?php echo $my_mod; ?>",
                success: function (data) {
                    var list = Object.keys(data['all_data']);
                    bannerVM.is_di_dis=false;
                    for (var i = 0; i < list.length; i++) {
                        var new_item = {};
                        if(typeof data['all_data'][i]['key'] !== 'undefined'){
                            if (data['all_data'][i]['key']==2){
                                new_item['key'] = data['all_data'][i]['key'];
                                new_item['appid'] = data['all_data'][i]['appid'];
                                //new_item['path'] = data['all_data'][i]['path'];
                            }
                            if (data['all_data'][i]['key']==3){
                                new_item['title'] = data['all_data'][i]['title'];
                                new_item['path'] = data['all_data'][i]['path'];
                            }
                        }
                        if (data['all_data'][i]['type'] == 'edit_form') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['param'] = data['all_data'][i]['param'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'phone') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['form_bottom'] = data['all_data'][i]['form_bottom'];
                            new_item['form_margin'] = data['all_data'][i]['form_margin'];
                            new_item['form_transparent'] = data['all_data'][i]['form_transparent'];
                            new_item['b_form_bottom'] = data['all_data'][i]['b_form_bottom'];
                            new_item['b_form_margin'] = data['all_data'][i]['b_form_margin'];
                            new_item['b_form_transparent'] = data['all_data'][i]['b_form_transparent'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['phone'] = data['all_data'][i]['phone'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            var form_bottom3 =data['all_data'][i]['form_bottom'];
                            var form_margin3 =data['all_data'][i]['form_margin'];
                            Vue.nextTick(function () {
                                $("[name='phone']").css('bottom',  form_bottom3);
                                $("[name='phone']").css('left',form_margin3);
                            });
                        }
                        if (data['all_data'][i]['type'] == 'customer') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['form_bottom'] = data['all_data'][i]['form_bottom'];
                            new_item['form_margin'] = data['all_data'][i]['form_margin'];
                            new_item['form_transparent'] = data['all_data'][i]['form_transparent'];
                            new_item['b_form_bottom'] = data['all_data'][i]['b_form_bottom'];
                            new_item['b_form_margin'] = data['all_data'][i]['b_form_margin'];
                            new_item['b_form_transparent'] = data['all_data'][i]['b_form_transparent'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            var form_bottom2 =data['all_data'][i]['form_bottom'];
                            var form_margin2 =data['all_data'][i]['form_margin'];
                            Vue.nextTick(function () {
                                $("[name='customer']").css('bottom',  form_bottom2);
                                $("[name='customer']").css('left',form_margin2);
                            });
                        }
                        if (data['all_data'][i]['type'] == 'floaticon') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['form_bottom'] = data['all_data'][i]['form_bottom'];
                            new_item['form_margin'] = data['all_data'][i]['form_margin'];
                            new_item['form_transparent'] = data['all_data'][i]['form_transparent'];
                            new_item['b_form_bottom'] = data['all_data'][i]['b_form_bottom'];
                            new_item['b_form_margin'] = data['all_data'][i]['b_form_margin'];
                            new_item['b_form_transparent'] = data['all_data'][i]['b_form_transparent'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            var form_bottom1 =data['all_data'][i]['form_bottom'];
                            var form_margin1 =data['all_data'][i]['form_margin'];
                            Vue.nextTick(function () {
                                $("[name='floaticon']").css('bottom',  form_bottom1);
                                $("[name='floaticon']").css('left',form_margin1);
                            });
                        }
                        if (data['all_data'][i]['type'] == 'edit_video') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['video_type'] = data['all_data'][i]['video_type'];
                            new_item['video_height'] = data['all_data'][i]['video_height'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['video_url'] = data['all_data'][i]['video_url'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'edit_music') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['music_url'] = data['all_data'][i]['music_url'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['title'] = data['all_data'][i]['title'];
                            new_item['author'] = data['all_data'][i]['author'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'comment') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['is_display'] = data['all_data'][i]['is_display'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'rich_text') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['content'] = data['all_data'][i]['content'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'position') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['position_name'] = data['all_data'][i]['position_name'];
                            new_item['longitude'] = data['all_data'][i]['longitude'];
                            new_item['latitude'] = data['all_data'][i]['latitude'];
                            new_item['is_display'] = data['all_data'][i]['is_display'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'edit_button') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['button_name'] = data['all_data'][i]['button_name'];
                            new_item['button_radius'] = data['all_data'][i]['button_radius'];
                            new_item['button_border'] = data['all_data'][i]['button_border'];
                            new_item['button_bg_color'] = data['all_data'][i]['button_bg_color'];
                            new_item['button_title_color'] = data['all_data'][i]['button_title_color'];
                            new_item['button_border_color'] = data['all_data'][i]['button_border_color'];
                            new_item['img_style'] = data['all_data'][i]['img_style'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            //bannerVM.banner=data['all_data'][i]['list'];
                        }
                        if (data['all_data'][i]['type'] == 'banner') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['jiaodian_color'] = data['all_data'][i]['jiaodian_color'];
                            new_item['jiaodian_dots'] = data['all_data'][i]['jiaodian_dots'];
                            new_item['indicator_dots'] = data['all_data'][i]['indicator_dots'];
                            new_item['ly_width'] = data['all_data'][i]['ly_width'];
                            new_item['ly_height'] = data['all_data'][i]['ly_height'];
                            new_item['juedui_height'] = data['all_data'][i]['juedui_height'];
                            new_item['topimg'] = data['all_data'][i]['topimg'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            //bannerVM.banner=data['all_data'][i]['list'];
                        }
                        if (data['all_data'][i]['type'] == 'advert') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['ly_width'] = data['all_data'][i]['ly_width'];
                            new_item['ly_height'] = data['all_data'][i]['ly_height'];
                            new_item['juedui_height'] = data['all_data'][i]['juedui_height'];
                            new_item['topimg'] = data['all_data'][i]['topimg'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'edit_piclist') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['layout'] = data['all_data'][i]['layout'];
                            new_item['pic_style'] = data['all_data'][i]['pic_style'];
                            new_item['html_style'] = data['all_data'][i]['html_style'];
                            new_item['pic_radius'] = data['all_data'][i]['pic_radius'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'navigation') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['radian'] = data['all_data'][i]['radian'];
                            new_item['style'] = data['all_data'][i]['style'];
                            new_item['layout'] = data['all_data'][i]['layout'];
                            new_item['color'] = data['all_data'][i]['color'];
                            new_item['font_size'] = data['all_data'][i]['font_size'];
                            new_item['topimg'] = data['all_data'][i]['topimg'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            //bannerVM.catenav=data['all_data'][i]['list'];
                        }
                        if (data['all_data'][i]['type'] == 'headline') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['name'] = data['all_data'][i]['name'];
                            new_item['style'] = data['all_data'][i]['style'];
                            new_item['color'] = data['all_data'][i]['color'];
                            new_item['font_size'] = data['all_data'][i]['font_size'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            var modstyle = {};
                            modstyle = {
                                titlestyle: '',
                            };
                            if (data['all_data'][i]['style'] == 1) {
                                modstyle.titlestyle = '1';
                                modstyle.titlestyle3 = '';
                                modstyle.titlestyle2 = '';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 2) {
                                modstyle.titlestyle = '2';
                                modstyle.titlestyle3 = '';
                                modstyle.titlestyle2 = '';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 3) {
                                modstyle.titlestyle = '3';
                                modstyle.titlestyle3 = '';
                                modstyle.titlestyle2 = '';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 4) {
                                modstyle.titlestyle = '4';
                                modstyle.titlestyle3 = '';
                                modstyle.titlestyle2 = '';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 5) {
                                modstyle.titlestyle = '5';
                                modstyle.titlestyle3 = ' .pureText .wrap{text-indent:2px;text-align: center;';
                                modstyle.titlestyle2 = ' .pureText .wrap::after{display:inline-block;height:1px;background-color:#cd3637;margin-left:5px;width:28%;vertical-align: middle;}';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 6) {
                                modstyle.titlestyle = '6';
                                modstyle.titlestyle3 = ' .pureText .wrap{text-indent:2px;text-align: center;';
                                modstyle.titlestyle2 = ' .pureText .wrap::after{display: block;margin-left: 49%;margin-top: 20px;vertical-align: middle;width: 0;height: 0;margin-top: 4px;border-left: 7px solid transparent;border-right: 7px solid transparent;border-top: 7px solid #ffa000;}';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 7) {
                                modstyle.titlestyle = '7';
                                modstyle.titlestyle3 = ' .seven_titleS{display:inline-block;width:8px;height:8px;background-color:#333;transform:rotate(45deg);margin-left:6px;margin-right:6px}';
                                modstyle.titlestyle2 = ' .seven_titleS{display:inline-block;width:8px;height:8px;background-color:#333;transform:rotate(45deg);margin-left:6px;margin-right:6px}';
                                // AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            if (data['all_data'][i]['style'] == 8) {
                                modstyle.titlestyle = '8';
                                modstyle.titlestyle3 = ' .seven_titleS{display:inline-block;width:2px;height:22px;background-color:#0da3f9;margin-top:-4px;margin-left:6px;vertical-align: middle;}';
                                modstyle.titlestyle2 = ' .seven_titleO{display:inline-block;width:2px;height:22px;background-color:#0da3f9;margin-top:-4px;margin-right:6px;vertical-align: middle;}';
                                //AddCss("title_"+data['all_data'][i]['time_key'],modstyle);
                            }
                            EditCss("title_" + data['all_data'][i]['time_key'], modstyle);
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'blank') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['ly_height'] = data['all_data'][i]['ly_height'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'search') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['default'] = data['all_data'][i]['default'];
                            new_item['search_style'] = data['all_data'][i]['search_style'];
                            new_item['li_bg_color'] = data['all_data'][i]['li_bg_color'];
                            new_item['text_color'] = data['all_data'][i]['text_color'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'line') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['line'] = data['all_data'][i]['line'];
                            new_item['style'] = data['all_data'][i]['style'];
                            new_item['color'] = data['all_data'][i]['color'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['ly_height'] = data['all_data'][i]['ly_height'];
                            new_item['margin'] = data['all_data'][i]['margin'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'article') {
                            new_item['add_type'] = data['all_data'][i]['add_type'];
                            new_item['add_num'] = data['all_data'][i]['add_num'];
                            new_item['add_sort'] = data['all_data'][i]['add_sort'];
                            new_item['add_cate'] = data['all_data'][i]['add_cate'];
                            new_item['type'] = data['all_data'][i]['type'];
                            if (typeof( data['all_data'][i]['style_num']) == 'undefined') {
                                new_item['style_num'] = 1;
                            }else {
                                new_item['style_num'] = data['all_data'][i]['style_num'];
                            }
                            new_item['title_size'] = data['all_data'][i]['title_size'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['title_color'] = data['all_data'][i]['title_color'];
                            new_item['layout'] = data['all_data'][i]['layout'];
                            new_item['style_width'] = data['all_data'][i]['style_width'];
                            new_item['style_height'] = data['all_data'][i]['style_height'];
                            new_item['list'] = data['all_data'][i]['text_width'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            //bannerVM.imgtextlist=data['all_data'][i]['list'];
                        }
                        if (data['all_data'][i]['type'] == 'goods') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['add_type'] = data['all_data'][i]['add_type'];
                            new_item['add_num'] = data['all_data'][i]['add_num'];
                            new_item['add_sort'] = data['all_data'][i]['add_sort'];
                            new_item['add_cate'] = data['all_data'][i]['add_cate'];
                            new_item['title_size'] = data['all_data'][i]['title_size'];
                            new_item['title_color'] = data['all_data'][i]['title_color'];
                            new_item['layout'] = data['all_data'][i]['layout'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                            //bannerVM.goodlist=data['all_data'][i]['list'];
                        }
                        if (data['all_data'][i]['type'] == 'tripartite') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'quartet') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['list'] = data['all_data'][i]['list'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'message_board') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'store_door') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['door_name'] = data['all_data'][i]['door_name'];
                            new_item['door_job'] = data['all_data'][i]['door_job'];
                            new_item['door_phone'] = data['all_data'][i]['door_phone'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'announcement') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['bg_color'] = data['all_data'][i]['bg_color'];
                            new_item['color'] = data['all_data'][i]['color'];
                            new_item['title'] = data['all_data'][i]['title'];
                            new_item['imgurl'] = data['all_data'][i]['imgurl'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (data['all_data'][i]['type'] == 'ad') {
                            new_item['type'] = data['all_data'][i]['type'];
                            new_item['img'] = data['all_data'][i]['img'];
                            new_item['ad_id'] = data['all_data'][i]['ad_id'];
                            new_item['height'] = data['all_data'][i]['height'];
                            new_item['time_key'] = data['all_data'][i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                    }
                }
            })
            $.ajax({
                type: "post",
                url: "<?php echo url('menu/find_my_default'); ?>&my_mode=<?php echo $my_mod; ?>",
                success: function (data) {
                    console.log(data);
                    if (data['tpl'] == 1) {
                        var list = data['tabBar']['list'];
                        if (typeof(data['tabBar']['IsDiDis']) != 'undefined') {
                            bannerVM.is_di_dis=data['tabBar']['IsDiDis'];
                        }
                        if (data['tabBar']['IsDiDis']==false){
                            $("#IsDiDisplay2").prop("checked", "checked");
                        }else {
                            $("#IsDiDisplay1").prop("checked", "checked");
                        }
                        console.log(data['tabBar']['IsDiDis']);
                        if (typeof(data['tabBar']['winColor']) != 'undefined'&&data['tabBar']['winColor'] != '') {
                            bannerVM.win_color=data['tabBar']['winColor'];
                        }
                        $('#WinColor').val(bannerVM.win_color);

                        if (typeof(data['tabBar']['winImg']) != 'undefined'&&data['tabBar']['winImg'] != '') {
                            bannerVM.win_img=data['tabBar']['winImg'];
                        }

                        if (typeof(data['tabBar']['openImg']) != 'undefined'&&data['tabBar']['openImg'] != '') {
                            bannerVM.openImg=data['tabBar']['openImg'];
                        }

                        if (typeof(data['tabBar']['openImgUrl']) != 'undefined'&&data['tabBar']['openImgUrl'] != '') {
                            bannerVM.openImgUrl=data['tabBar']['openImgUrl'];
                        }

                        if (typeof(data['tabBar']['openImgUrlName']) != 'undefined'&&data['tabBar']['openImgUrlName'] != '') {
                            bannerVM.openImgUrlName=data['tabBar']['openImgUrlName'];
                        }

                        if (typeof(data['tabBar']['color']) != 'undefined'&&data['tabBar']['color'] != ''&&data['tabBar']['color']!='#8b8b8b') {
                            $('#fontColorSet').val(data['tabBar']['color']);
                            $("#fontColorSet_text").html(data['tabBar']['color']);
                            bannerVM.font_color = data['tabBar']['color'];
                        }
                        if (typeof(data['tabBar']['selectedColor']) != 'undefined'&&data['tabBar']['selectedColor'] != '') {
                            $('#iconColorSet').val(data['tabBar']['selectedColor']);
                            $("#iconColorSet_text").html(data['tabBar']['selectedColor']);
                        }
                        if (typeof(data['tabBar']['backgroundColor']) != 'undefined'&&data['tabBar']['backgroundColor'] != ''&&data['tabBar']['backgroundColor']!='#ffffff') {
                            $('#pureBorderColor').val(data['tabBar']['backgroundColor']);
                            bannerVM.db_color = data['tabBar']['backgroundColor'];
                            $("#pureBorderColor_text").html(data['tabBar']['backgroundColor']);
                        }
                        if(typeof(data['tabBar']['background'])!='undefined'&&data['tabBar']['background'] != ''){
                            $('#DhColor').val(data['tabBar']['background']);
                            bannerVM.dh_color=data['tabBar']['background'];
                            console.log(bannerVM.dh_color);
                            $("#DhColor_text").html(data['tabBar']['background']);
                        }
                        if(typeof(data['tabBar']['name'])!='undefined'&&data['tabBar']['name'] != ''){
                            bannerVM.nab_name=data['tabBar']['name'];
                        }
                        if(data['tabBar']['backgroundTextStyle']=='#000000'&&data['tabBar']['backgroundTextStyle'] != ''){
                            $('#BtColorDefault').prop("checked", "checked");
                            bannerVM.nab_color=data['tabBar']['backgroundTextStyle'];
                            bannerVM.bag_url = '__CONF_URL__public/menu/images/black.png';
                        }else {
                            $('#BtColorCustom').prop("checked", "checked");
                            bannerVM.nab_color=data['tabBar']['backgroundTextStyle'];
                            bannerVM.bag_url = '__CONF_URL__public/menu/images/white.png';
                        }
                        if (list.length == 5) {
                            bannerVM.add_h_di -= 100;
                            bannerVM.display = "none";
                        }
                        var size = list.length - 2 < 0 ? 0 : list.length - 2;
                        bannerVM.add_h_di += size * 112;
                        bannerVM.add_top_di += size * 112;
                        for (var i = 0; i < list.length; i++) {
                            var item = {};
                            item['key'] = !list[i]['key'] ? "" : list[i]['key'];
                            item['imgurl'] = !list[i]['imgurl'] ? "" : list[i]['imgurl'];
                            item['name'] = !list[i]['name'] ? "" : list[i]['name'];
                            item['appid'] = !list[i]['appid'] ? "" : list[i]['appid'];
                            item['ident'] = !list[i]['ident'] ? "" : list[i]['ident'];
                            item['path'] = !list[i]['path'] ? "" : list[i]['path'];
                            item['phone'] = !list[i]['phone'] ? "" : list[i]['phone'];
                            item['name_this'] = !list[i]['name_this'] ? "" : list[i]['name_this'];
                            item['title'] = !list[i]['title'] ? "" : list[i]['title'];
                            item['lat'] = !list[i]['lat'] ? "" : list[i]['lat'];
                            item['lng'] =!list[i]['lng'] ? "" : list[i]['lng'];
                            if (isValid(list[i]['page_icon'])) {
                                item['page_icon'] = list[i]['page_icon'];
                            }
                            if (isValid(list[i]['page_select_icon'])) {
                                item['page_select_icon'] = list[i]['page_select_icon'];
                            }
                            item['top'] = (i * 112);
                            bannerVM.menu_list.push(item);
                        }
                    } else {
                        var obj = eval('(' + data + ')');
                        var list = obj['tabBar']['list'];
                        if (list.length == 5) {
                            bannerVM.add_h_di -= 100;
                            bannerVM.display = "none";
                        }
                        var size = list.length - 2 < 0 ? 0 : list.length - 2;
                        bannerVM.add_h_di += size * 112;
                        bannerVM.add_top_di += size * 112;
                        for (var i = 0; i < 5; i++) {
                            if (typeof(list[i]) == "undefined") {
                                continue;
                            }
                            var item = {};
                            item['key'] = list[i]['key'];
                            item['imgurl'] = list[i]['imgurl'];
                            item['name'] = list[i]['name'];
                            item['name_this'] = list[i]['name_this'];
                            item['page_icon'] = list[i]['page_icon'];
                            item['page_select_icon'] = list[i]['page_select_icon'];
                            item['top'] = (i * 112);
                            bannerVM.menu_list.push(item);
                        }
                    }
                }
            });
        })
    }

    var ue =UM.getEditor('editor',{
        imageUrl:"__CONF_SITE__app/Umupload/uploadFile", //处理图片上传的接口
        imageFieldName:"upfile", //上传图片的表单的name
        imagePath: ""
    });
    ue.addListener("blur", function () {
        bannerVM.all_data[bannerVM.now_index]['content'] = ue.getContent();
        //console.log(bannerVM.all_data[bannerVM.now_index]['content']);
    });
    var lock = false;
    function get_my_mod() {
        var src='';
        event.preventDefault();
        layer.msg('正在加载,请稍等！',{icon:16,shade: 0.05});
        html2canvas(document.querySelector("#content"),{
            useCORS:true,
            logging:false,
        }).then(canvas => {
            var dataUrl = canvas.toDataURL();
        src=dataUrl;
        layer.prompt({title: '输入模版名称', formType: 0}, function (text, index) {
            var BtColor_color = '';
            iconTitColor_color = $("#fontColorSet").val();
            iconColorSet_color = $("#iconColorSet").val();
            pureBorderColor_color = $("#pureBorderColor").val();
            DhColor_color = $("#DhColor").val();
            BjColor_color = $("#BjColor").val();
            var BtColor=$('input:radio[name="BtBorderColor"]:checked').val();
            if (BtColor == 1) {
                BtColor_color = '#ffffff';
            } else {
                BtColor_color = '#000000'
            }
            if (!lock) {
                lock = true;
                $.ajax({
                    type: "post",
                    url: "__CONF_SITE__admin/menu/add_my_mod",
                    data: {
                        'img_src':src,
                        'index_list':JSON.stringify(bannerVM._data),
                        'BtColor_color': BtColor_color,
                        'DhColor_color': DhColor_color,
                        'BjColor_color': BjColor_color,
                        'wx_name':bannerVM.nab_name,
                        'win_color': bannerVM.win_color,
                        'win_img': bannerVM.win_img,
                        'openImg': bannerVM.openImg,
                        'is_di_dis':bannerVM.is_di_dis,
                        'iconTitColor_color': iconTitColor_color,
                        'iconColorSet_color': iconColorSet_color,
                        'pureBorderColor_color': pureBorderColor_color,
                        'menu_list': JSON.stringify(bannerVM.menu_list),
                        'title': text,
                    },
                    success: function (data) {
                        if (data['code'] > 0) {
                            layer.msg('成功', {icon: 1, time: 1000});
                            lock = false;
                            layer.close(index);
                        } else {
                            layer.msg('失败', {icon: 5, time: 1000});
                            lock = false;
                            layer.close(index);
                        }
                    }
                });
            }
        });
    });
    }
    function isValid(obj) {
        if (!obj) {
            return false;
        }
        return true;
    }
    function add_menu_di() {
        var item = {};
        item['imgurl'] = "";
        item['name'] = "";
        item['page_icon'] = "";
        item['page_select_icon'] = "";
        item['top'] = bannerVM.menu_list.length * 112;
        bannerVM.menu_list.push(item);
        bannerVM.add_h_di += 112;
        bannerVM.add_top_di += 112;
        if (bannerVM.menu_list.length == 5) {
            bannerVM.add_h_di -= 80;
            bannerVM.display = "none";
        }
        else {
            bannerVM.display = "block";
        }
    }
    //默认字体颜色
    $('#font_radio').click(function () {
        if ($('#font_checkbox').parent().hasClass('selected')) {
            $('#font_checkbox').parent().removeClass('selected');
        }
        $(this).parent().addClass('selected');
        $("#fontColorSet").css('display', 'none');
        bannerVM.font_color = "#ffffff";
    })
    $('#font_checkbox').click(function () {
        if ($('#font_radio').parent().hasClass('selected')) {
            $('#font_radio').parent().removeClass('selected');
        }
        $(this).parent().addClass('selected');
        $("#fontColorSet").css('display', 'inline-block');
    })
    //选中字体颜色
    $('#font_set_a').click(function () {
        if ($('#fonT_set_b').parent().hasClass('selected')) {
            $('#fonT_set_b').parent().removeClass('selected');
        }
        $(this).parent().addClass('selected');
        $("#iconColorSet").css('display', 'none');
    })
    $('#fonT_set_b').click(function () {
        if ($('#font_set_a').parent().hasClass('selected')) {
            $('#font_set_a').parent().removeClass('selected');
        }
        $(this).parent().addClass('selected');
        $("#iconColorSet").css('display', 'inline-block');
    })
    //背景颜色
    $('#purebackColorDefault').click(function () {
        if ($('#pureBackColorCustom').parent().hasClass('selected')) {
            $('#pureBackColorCustom').parent().removeClass('selected');
        }
        $(this).parent().addClass('selected');
        $("#pureBorderColor").css('display', 'none');
        bannerVM.db_color = "#df2f20";
    })
    $('#pureBackColorCustom').click(function () {
        if ($('#purebackColorDefault').parent().hasClass('selected')) {
            $('#purebackColorDefault').parent().removeClass('selected');
        }
        $(this).parent().addClass('selected');
        $("#pureBorderColor").css('display', 'inline-block');
    })
    //导航背景颜色
    $('#DhColorDefault').click(function () {
        if ($('#DhColorCustom').parent().hasClass('selected')) {
            $('#DhColorCustom').parent().removeClass('selected');
        }
        $(this).parent().addClass('selected');
        $("#DhColor").css('display', 'none');
        bannerVM.dh_color = "#000000";
    })
    $('#DhColorCustom').click(function () {
        if ($('#DhColorDefault').parent().hasClass('selected')) {
            $('#DhColorDefault').parent().removeClass('selected');
        }
        $(this).parent().addClass('selected');
        $("#DhColor").css('display', 'inline-block');
    })
    //背景颜色
    $('#BjColorDefault').click(function () {
        if ($('#BjColorCustom').parent().hasClass('selected')) {
            $('#BjColorCustom').parent().removeClass('selected');
        }
        $(this).parent().addClass('selected');
        $("#BjColor").css('display', 'none');
        bannerVM.dbj_color = '#ffffff';
    })
    $('#BjColorCustom').click(function () {
        if ($('#BjColorDefault').parent().hasClass('selected')) {
            $('#BjColorDefault').parent().removeClass('selected');
        }
        $(this).parent().addClass('selected');
        $("#BjColor").css('display', 'inline-block');
    })
    //导航栏标题颜色
    $('#BtColorDefault').click(function () {
        if ($('#BtColorCustom').parent().hasClass('selected')) {
            $('#BtColorCustom').parent().removeClass('selected');
        }
        bannerVM.bag_url = '__CONF_URL__public/menu/images/black.png';
        bannerVM.nab_color = '#000000';
        $(this).parent().addClass('selected');
    })
    $('#BtColorCustom').click(function () {
        if ($('#BtColorDefault').parent().hasClass('selected')) {
            $('#BtColorDefault').parent().removeClass('selected');
        }
        bannerVM.bag_url = '__CONF_URL__public/menu/images/white.png';
        bannerVM.nab_color = '#ffffff';
        $(this).parent().addClass('selected');
    })
    var lock_a=false;
    function get_my_mod_wn() {
        var src='';
        event.preventDefault();
        layer.msg('正在加载,请稍等！',{icon:16,shade: 0.05});
        html2canvas(document.querySelector("#content"),{
            useCORS:true,
            logging:false,
        }).then(canvas => {
            var dataUrl = canvas.toDataURL();
        src=dataUrl;
            if (!lock_a) {
                lock_a = true;
                var id= $("#bus_select_up_id").val();
                $.ajax({
                    type: "post",
                    url: "__CONF_SITE__admin/menu/add_universal",
                    data: {
                        'index_list':JSON.stringify(bannerVM._data),
                        'title': bannerVM.nab_name,
                        'img_src':src,
                        'id':id,
                    },
                    success: function (data) {
                        if(data['data']['id']==0){
                            $("#bus_select_up_id").val(data['code']);
                        }
                        if (data['code'] > 0) {
                            layer.msg('成功', {icon: 1, time: 1000});
                            lock_a = false;
                        } else {
                            layer.msg('失败', {icon: 5, time: 1000});
                            lock_a = false;
                        }
                    },
                    error:function (err) {
                        console.log(err);
                        lock_a = false;
                    }
                });
            }
        });
    }
    function get_my_mod_set(event) {
        var src='';
        event.preventDefault();
        layer.msg('正在加载,请稍等！',{icon:16,shade: 0.05});
        html2canvas(document.querySelector("#content"),{
            useCORS:true,
            logging:false,
        }).then(canvas => {
            var dataUrl = canvas.toDataURL();
        src=dataUrl;
            var BtColor_color = '';
            iconTitColor_color = $("#fontColorSet").val();
            iconColorSet_color = $("#iconColorSet").val();
            pureBorderColor_color = $("#pureBorderColor").val();
            DhColor_color = $("#DhColor").val();
            BjColor_color = $("#BjColor").val();
            var BtColor=$('input:radio[name="BtBorderColor"]:checked').val();
            if (BtColor == 1) {
                BtColor_color = '#ffffff';
            } else {
                BtColor_color = '#000000'
            }
            if (!lock) {
                lock = true;
                $.ajax({
                    type: "post",
                    url: "__CONF_SITE__admin/menu/update_my_mod",
                    data: {
                        'my_mod':"<?php echo $my_mod; ?>",
                        'img_src':src,
                        'index_list':JSON.stringify(bannerVM._data),
                        'BtColor_color': BtColor_color,
                        'DhColor_color': DhColor_color,
                        'BjColor_color': BjColor_color,
                        'wx_name':bannerVM.nab_name,
                        'win_color': bannerVM.win_color,
                        'win_img': bannerVM.win_img,
                        'openImg': bannerVM.openImg,
                        'is_di_dis':bannerVM.is_di_dis,
                        'iconTitColor_color': iconTitColor_color,
                        'iconColorSet_color': iconColorSet_color,
                        'pureBorderColor_color': pureBorderColor_color,
                        'menu_list': JSON.stringify(bannerVM.menu_list),
                    },
                    success: function (data) {
                        if (data['code'] > 0) {
                            layer.msg('成功', {icon: 1, time: 1000},function () {
                                location.href=host+"addons/yb_shop/core/index.php?s=/admin/menu/import_mod_my";
                            });
                            lock = false;
                        } else {
                            layer.msg('失败', {icon: 5, time: 1000});
                            lock = false;
                        }
                    }
                });
            }
    });
    }
    if('<?php echo $wn; ?>'==1&&"<?php echo $my_mod; ?>"==-1&&'<?php echo $wn_id; ?>'==0){
        Vue.nextTick(function () {
            bannerVM.is_di_dis=false;
        });
    }
</script>
</body>

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