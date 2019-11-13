<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:69:"D:\Webroot\web\weixin\addons\yb_shop\core\/template/custom\index.html";i:1545875440;s:61:"D:\Webroot\web\weixin\addons\yb_shop\core\/template/base.html";i:1551756423;s:68:"D:\Webroot\web\weixin\addons\yb_shop\core\/template/custom\left.html";i:1543927223;s:70:"D:\Webroot\web\weixin\addons\yb_shop\core\/template/custom\center.html";i:1545875440;s:69:"D:\Webroot\web\weixin\addons\yb_shop\core\/template/custom\right.html";i:1546825067;}*/ ?>
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
    <link rel="stylesheet" href="/public/static/h-ui/css/H-ui.min.css?v=1.0"/>
    <link rel="stylesheet" href="/public/static/h-ui/css/style.css"/>
    <link rel="stylesheet" href="/public/static/Hui-iconfont/1.0.8/iconfont.css"/>
    <script>
        var UM_SITE_ROOT = '__CONF_SITE__';
    </script>
    
    <style>.new_logo .logo-expanded {color:#fff;font-size:14px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;width:100px; display: block;margin-left: 10px;background: #000;border-radius: 4px; height: 30px; line-height: 30px; text-align: center;padding:0 5px;margin-top:15px;margin-bottom: 5px;} .input-text {margin-bottom:0 !important;} .top_menu { height:50px; line-height: 50px; background: #fff;width:calc(100% - 200px);position: fixed;z-index: 1;top:0;left:200px;border-bottom:1px solid #eeeeee;} .top_menu a {display:block;float:right;height:50px; line-height: 50px;width:100px; text-align: center;border-left:1px solid #eeeeee;} .clear {clear:both;} .btn {margin-bottom:0;} body {line-height: 1.6 !important; overflow-x: hidden;} .left_cur a i:before ,.left_cur ul li .cur_s .title ,.left_cur .cur_tit ,li.left_cur > a:before {color:#444 !important;} .left_cur {    background: rgba(55, 87, 109, 0.05);} .logo-env .new_logo {padding-left:36px;} .logo-env .new_logo .wq_logo {margin-left:-36px;width:28px;height: 28px;float: left;border-radius: 50%;} .logo-env .new_logo:after {clear:both;} .tool_box a span ,.tool_box a:hover span {color:#666 !important;} .left_btn_box {padding:3px 10px 0 10px;justify-content:center;display: flex;} .left_btn_box a {display:block;height: 28px; line-height: 26px;width:80px;color: #fff; text-align: center;    border-radius: 2px;} .left_btn_box a.btn_li01 {background:rgb(25, 200, 91);border-bottom-right-radius: 0; border-top-right-radius: 0;} .left_btn_box a.btn_li02 {background:rgb(0, 193, 222);border-bottom-left-radius: 0; border-top-left-radius: 0;} .left_btn_box a.btn_li01:hover {background:rgb(21, 186, 93);} .left_btn_box a.btn_li02:hover {background:rgb(2, 182, 209);} .wq_bottom_btn {position:fixed;bottom:0;left:230px;width:100%;background: #fff;justify-content:center;display: flex; height: 80px; line-height: 80px;} .sidebar-menu {min-width: 122px !important;width: 122px !important; overflow: hidden;background: #fff !important;} .main-menu-scroll{height: calc(100% - 130px);overflow-x: hidden;width: 200px;overflow-y: scroll;} .main-menu-scroll::-webkit-scrollbar {display: none;} .new_left_menu {width:86px; height: 100%;display: table-cell;position: relative;background: #253350;    z-index: 1;} .sidebar-menu.fixed .sidebar-menu-inner {left:86px !important;border-right: 1px solid #eeeeee;} .f_name_box {display: block; height: 50px; line-height: 50px;} .f_name_box.cur_name {background: rgba(255,255,255,1) !important} .new_left_menu a {text-decoration:none;} .new_left_menu a span {color:#b3b3b3;font-size:13px;} .new_left_menu a i {margin-left:17px;display:inline-block;color:#b3b3b3;margin-right: 5px;} .new_left_menu a.cur_name i ,.new_left_menu a.cur_name .big_class_name {color: #00a0e9;} .main-menu-scroll {width:122px !important;} /*		.sidebar-menu .main-menu a {color: #444 !important;background: rgba(55, 87, 109, 0.05);}*/ .sidebar-menu .main-menu a {color: #444 !important;padding-left:20px !important;} .sidebar-menu .main-menu .cur_s a ,.sidebar-menu .main-menu .cur_s a:visited ,.sidebar-menu .main-menu .left_cur ul li.cur_s a>span{ background: rgba(255, 255, 255, 1) !important;color: #00a0e9 !important;border-right: 1px solid #eeeeee;} .title.cur_tit {color:#444 !important;font-weight: bold;} /*		.left_cur {background:#fff !important;}*/ .cur_s .sidebar-menu .main-menu a {background:#fff !important;} .sidebar-menu .main-menu ul li a {padding-left:20px !important;} /*		.left_cur ul li a {background:#fff !important;}*/ .left_cur ul li {background:#fff !important;} .sidebar-menu .main-menu {margin-top:0 !important;} .top_big_class_name { height: 50px;line-height: 50px; text-align: center;overflow: hidden;border-bottom: 1px solid;white-space: nowrap;text-overflow: ellipsis;border-bottom: 1px solid #eeeeee;font-size:13px;} .new_logo {    display: block !important;} .sidebar-menu .main-menu .left_cur ul li a>span {color:#777777 !important;} .sidebar-menu .main-menu li.has-sub>a:before {content: '\f0d7' !important;} .main-menu-scroll {height:100% !important;} .page-container {position:absolute;padding-top: 40px;box-sizing: border-box;} .new_page_top {height:44px;width:100%;position: fixed;background:#253350;border-bottom: 1px solid #2f3d5a;z-index: 999999;} .sidebar-menu.fixed .sidebar-menu-inner {top:44px !important;} .new_logo {width:30px;height:30px;float: left;margin-top:7px;margin-left:18px;border-radius: 50%;border:2px solid rgba(255,255,255,0.5);overflow:hidden;} .new_logo img {width:26px;height:26px;} .app_name {color: #fff;font-size: 18px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;width: 155px;display: block; height:40px; line-height: 40px;margin-top:2px;margin-left:8px;float:left;} .new_page_top a  ,.new_page_top a:visited {color:#fff;text-decoration: none;} .new_page_top a:hover {color: #b3b3b3;text-decoration: none;} .sidebar-menu.fixed .sidebar-menu-inner {position:fixed !important;} .new_top_right {float:right;width:180px;height:44px; line-height: 44px;} .logout_box {width:153px; height: 44px;background:url(../../yb_shop/core/public/images/logout_icon.png) right center no-repeat;float:left;font-size:13px;margin-left:12px;} .left_menu_box {position:fixed;width:86px;top:44px;left:0;} .back_sys {width:100px; text-align: center;color:#fff;float:left;}
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
            <!--<?php if($copyright['back_type'] == 1): ?>-->
                <!--<a href="<?php echo url('login/wxapp'); ?>" class="back_sys">-->
                    <!--<?php else: ?>-->
            <?php if(!empty($last_visit_url) && $fanhui==1): ?>
            <a href="<?php echo $last_visit_url; ?>" class="back_sys">
                <?php else: ?>
                <a href="<?php echo $siteroot; ?>web/index.php?c=module&a=welcome&m=yb_mingpian&uniacid=<?php echo $mch_id; ?>&version_id=<?php echo $version_id; ?>" class="back_sys">
                    <?php endif; ?>
                    <!--<?php endif; ?>-->
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
        <a v-for="(item, index) in list" v-on:click="top_click(item)" href="javascript:void(0);" :class="item.class">
            <i :class="item.logo" style="width: 15px;height: 15px;"></i>
            <span class="big_class_name" v-text="item.module_name"></span>
        </a>
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
<link rel="stylesheet" type="text/css" href="/public/menu/css/defau.css">
<link rel="stylesheet" type="text/css" href="/public/menu/css/custom.css">
<script type="text/javascript" src="/public/js/vue.js"></script>
<script type="text/javascript" src="/public/js/vue-dragging.es5.js"></script>
<script src="/public/js/html2canvas.js"></script>
<script>
    Vue.use(VueDragging);
</script>
<body>
<input type="hidden" id="bus_select_up_id" value="0">
<input type="hidden" id="bus_select_up_name" value="">
<div class="diypage" id="page">
    <div class="diypage-header">
        <div class="header-left"></div>
        <div class="header-control" id="header-control"></div>
        <div class="header-right" style="width: 260px;display: flex;justify-content: space-around;align-items: center;">
            <div onclick="save(0)" class="bottomButon saveButon" style="background: #00c1de;border: 1px solid #00c1de;width:80px;height:30px; line-height:30px;border-radius: 4px;z-index:999999000;text-align: center;color:#fff; cursor: pointer;">保存</div>
            <?php if($page_flag == 2): ?>
            <div onclick="import_mod_lxm()" class="bottomButon" style="background: #19c85b;border: 1px solid #19c85b;border-radius: 4px;width:120px;height:30px; line-height:30px;color:#fff;z-index:999991001;text-align: center; cursor: pointer;">模板导入</div>
            <?php endif; if($page_flag == 1): ?>
            <div onclick="save(1)" class="bottomButon" style="background: #19c85b;border: 1px solid #19c85b;border-radius: 4px;width:120px;height:30px; line-height:30px;color:#fff;z-index:999991001;text-align: center; cursor: pointer;">添加到我的模版</div>
            <?php endif; ?>
        </div>
    </div>
    <div class="diypage-container" id="b_menu">
        <div class="page-structure nav_inner subnav">
    <?php if($page_flag == 0): ?>
    <div class="tool_box_li">
        <div class="tool_class_name">会员中心组件</div>
        <div class="tool_box">
            <?php if(is_array($my_cell) || $my_cell instanceof \think\Collection || $my_cell instanceof \think\Paginator): $i = 0; $__LIST__ = $my_cell;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <a  href="javascript:;" class="j-diy-addModule  icon_<?php echo $vo['icon']; ?>" data-type="<?php echo $vo['type']; ?>" title="<?php echo $vo['text']; ?>">
                <span class="icon_pic"></span><span><?php echo $vo['text']; ?></span>
            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="clear"></div>
        </div>
    </div>
    <?php endif; ?>
    <div class="tool_box_li">
        <div class="tool_class_name">基本组件</div>
        <div class="tool_box">
            <a href="javascript:;" class="j-diy-addModule  icon_1" data-type="banner" title="轮播图1">
                <span class="icon_pic"></span><span>轮播图</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_2" data-type="advert" title="广告位">
                <span class="icon_pic"></span> <span>广告位</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_3" data-type="navigation" title="宫格导航">
                <span class="icon_pic"></span> <span>宫格导航</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_4" data-type="headline" title="标题">
                <span class="icon_pic"></span><span>标题</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_8" data-type="article_list" title="图文集">
                <span class="icon_pic"></span> <span>图文集</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_8" data-type="product_list" title="产品集">
                <span class="icon_pic"></span> <span>产品集</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_3" data-type="edit_piclist" title="图片列表">
                <span class="icon_pic"></span> <span>图片列表</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_19" data-type="tripartite" title="三方图">
                <span class="icon_pic"></span><span>三方图</span>
            </a>
            <a  href="javascript:;" class="j-diy-addModule  icon_20" data-type="quartet" title="四方图">
                <span class="icon_pic"></span><span>四方图</span>
            </a>
            <div class="clear"></div>
        </div>
    </div>
    <div class="tool_box_li">
        <div class="tool_class_name">辅助组件</div>
        <div class="tool_box">
            <a href="javascript:;" class="j-diy-addModule  icon_15" data-type="edit_video" title="视频">
                <span class="icon_pic"></span><span>视频</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_17" data-type="edit_music" title="音频">
                <span class="icon_pic"></span><span>音频</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_12" data-type="rich_text" title="富文本">
                <span class="icon_pic"></span><span>富文本</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_5" data-type="blank" title="辅助空白">
                <span class="icon_pic"></span><span>辅助空白</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_7" data-type="blankline" title="分割线">
                <span class="icon_pic"></span><span>分割线</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_14" data-type="floaticon" title="悬浮图标">
                <span class="icon_pic"></span><span>悬浮图标</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_10" data-type="edit_button" title="按钮">
                <span class="icon_pic"></span><span>按钮</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_23" data-type="edit_form" title="表单">
                <span class="icon_pic"></span><span>表单</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_24" data-type="customer" title="客服">
                <span class="icon_pic"></span><span>客服</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_26" data-type="announcement" title="公告">
                <span class="icon_pic"></span><span>公告</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_27" data-type="ad" title="流量主">
                <span class="icon_pic"></span><span>流量主</span>
            </a>
            <div class="clear"></div>
        </div>
    </div>
    <div class="tool_box_li">
        <div class="tool_class_name">商城组件</div>
        <div class="tool_box">
            <a href="javascript:;" class="j-diy-addModule  icon_9" data-type="goods" title="商品集">
                <span class="icon_pic"></span><span>商品集</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_6" data-type="search" title="搜索框">
                <span class="icon_pic"></span><span>搜索框</span>
            </a>
            <?php if($isadmin==1 || $miaosha_show==2): ?>
            <a href="javascript:;" class="j-diy-addModule  icon_8" data-type="miaosha" title="秒杀活动">
                <span class="icon_pic"></span><span>秒杀活动</span>
            </a>
            <?php endif; ?>
            <div class="clear"></div>
        </div>
    </div>
    <div class="tool_box_li">
        <div class="tool_class_name">全局组件</div>
        <div class="tool_box">
            <a  href="javascript:;" class="j-diy-addModule  icon_21" data-type="message_board" title="留言板">
                <span class="icon_pic"></span><span>留言板</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_22" data-type="store_door" title="门店">
                <span class="icon_pic"></span><span>门店</span>
            </a>
            <a href="javascript:;" class="j-diy-addModule  icon_11" data-type="position" title="地址位置">
                <span class="icon_pic"></span><span>地址位置</span>
            </a>
            <div class="clear"></div>
        </div>
    </div>
</div>
        <div class="diypage-content">
    <div style="width:  380px; margin:  0 auto;">
        <div style="border:0;">
            <div style="padding-top:0;">
                <div class="msgWrap form">
                    <form action="" method="post" class="layui-form" id="custom_form">
                        <div class="tableContent">
                            <div class="content"  style="padding-top:0;">
                                <div class="DL-Main" id="content" crossOrigin="Anonymous">
                                    <div class="mainPanel clearfix">
                                        <div class="leftPhonewrap" id="leftPhonewrap">
                                            <div class="holderPhone">
                                                <div v-on:click="now_type = 'head'" :style="'cursor: pointer;background: url('+nv_bg_url+') '+page.nv_color+' no-repeat scroll center top / 100% auto'" class="wxHd">
                                                    <div  id="actName" class="phoneTitle" style="bottom: 15px;width: 100%;left: 0;padding: 0 65px;"><h2 :style="'color:'+page.text_color"><span id="bus_select_up_name_but">{{page.name}}</span></h2></div>
                                                </div>
                                                <div id="anythingContent" style="background: #fff;">
                                                    <?php if($page_flag == 1 || $page_flag == 3): ?>
                                                    <!--底部菜单-->
                                                    <ul  v-if="page.show_tabbar == 'true'" v-on:click="now_type = 'tabbar'" class="form_component style_1 clearfix ui-sortable" style="position: absolute;bottom:0;left:0;">
                                                        <li class="ui-draggable" id="com1"
                                                            name="id_bottom" title="" style="width:320px;cursor: pointer;height:50px;">
                                                            <ul :style="'height:50px;justify-content:space-between;display:flex;flex-wrap:wrap;background-color:'+tabbar.bg_color"
                                                                class="bottom-nav bottom-style-1 outCom column-3 clearfix'">
                                                                <li style="height: 50px;" class="bottom-nav-item mod-Alink mlr"
                                                                    v-for="(item,index) in tabbar.list">
                                                                    <a class="bottom-navALink aFrame" href="javascript:;"
                                                                    ></a>
                                                                    <div class="li_content">
                                                                        <div class="bottom-cmg objCom">
                                                                            <img :src="index == 0 ? item.tabbar_select_icon : item.tabbar_icon"
                                                                                 :alt="item.name"
                                                                                 class="bottom-Cmge mCS_img_loaded"
                                                                            >
                                                                        </div>
                                                                        <span :style="'color: '+(index == 0 ? tabbar.select_color : tabbar.text_color)"
                                                                              class="bottom-text texCom"
                                                                              id="com1banner0_url">{{ item.name }}</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <?php endif; ?>
                                                    <!--主体内容-->
                                                    <div class="mianMod mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar"
                                                         data-mcs-theme="minimal-dark"
                                                         :style="'visibility: visible; overflow: visible;height:'+(page.show_tabbar == 'true' ? '520' : '570')+'px;'">
                                                        <div id="mCSB_1"
                                                             class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside"
                                                             style="max-height: none;" tabindex="0">
                                                            <div id="mCSB_1_container"
                                                                 class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                                 style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                                                <div :style="'height:'+(page.show_tabbar == 'true' ? 520 : 570)+'px;background-color:'+page.bg_color+';background-image: url('+page.bg_img+');background-repeat:no-repeat;background-size:100%;-moz-background-size:100%;'"
                                                                     class="activeMod">
                                                                    <ul class="form_component style_1 clearfix ui-sortable">
                                                                        <li :class="'ui-draggable ' + (index == now_index ? 'yb_select ' : '') + (item.type == 'search' && item.style_type == 1 ? 'search_style1' : '')"
                                                                            v-for="(item,index) in all_data"
                                                                            :name="item.type"
                                                                            v-dragging="{ list: all_data, item: item, group: 'index' }"
                                                                            :style="(item.type == 'navigation' || item.type == 'advert' || item.type == 'edit_button' ? 'background: transparent;':'') + (item.type == 'search' && item.style_type == 1 ? 'position: absolute;' : '') + (item.type == 'floaticon' || item.type == 'customer' ? 'left:auto; bottom:'+item.form_bottom+'%; right:'+item.form_margin+'%;': '')"
                                                                            :key="item.time_key"
                                                                        >
                                                                            <banner v-if="item.type=='banner'"
                                                                                    :jiaodian_dots="item.jiaodian_dots"
                                                                                    :list="item.list"
                                                                                    :ly_height="item.ly_height"
                                                                                    :topimg="item.topimg"
                                                                                    :jiaodian_color="item.jiaodian_color?item.jiaodian_color:'red'"
                                                                                    :bg_color="item.bg_color"
                                                                                    :index="index">
                                                                            </banner>
                                                                            <advert v-if="item.type=='advert'"
                                                                                    :list="item.list"
                                                                                    :ly_width="item.ly_width"
                                                                                    :ly_height="item.ly_height"
                                                                                    :imgurl="item.list.imgurl"
                                                                                    :bg_color="item.bg_color"
                                                                                    :index="index">
                                                                            </advert>
                                                                            <navigation v-if="item.type=='navigation'"
                                                                                        :style_type="item.style_type"
                                                                                        :list="item.list"
                                                                                        :radian="item.radian"
                                                                                        :text_color="item.text_color"
                                                                                        :bg_color="item.bg_color"
                                                                                        :font_size="item.font_size"
                                                                                        :index="index" >
                                                                            </navigation>
                                                                            <headline
                                                                                    v-if="item.type=='headline'"
                                                                                    :style_type="item.style_type"
                                                                                    :name="item.name"
                                                                                    :bg_color="item.bg_color"
                                                                                    :text_color="item.text_color"
                                                                                    :font_size="item.font_size"
                                                                                    :index="index">
                                                                            </headline>
                                                                            <blank v-if="item.type=='blank'"
                                                                                   :ly_height="item.ly_height"
                                                                                   :bg_color="item.bg_color"
                                                                                   :index="index">
                                                                            </blank>
                                                                            <search v-if="item.type=='search'"
                                                                                    :bg_color="item.bg_color"
                                                                                    :bd_color="item.bd_color"
                                                                                    :text_color="item.text_color"
                                                                                    :hot_word="item.hot_word"
                                                                                    :style_type="item.style_type"
                                                                                    :index="index">
                                                                            </search>
                                                                            <blankline v-if="item.type=='blankline'"
                                                                                       :margin="item.margin"
                                                                                       :ly_height="item.ly_height"
                                                                                       :bg_color="item.bg_color"
                                                                                       :line_color="item.line_color"
                                                                                       :line_type="item.line_type"
                                                                                       :index="index">
                                                                            </blankline>
                                                                            <article_list
                                                                                    v-if="item.type=='article_list'"
                                                                                    :list="item.list"
                                                                                    :font_size="item.font_size"
                                                                                    :text_color="item.text_color"
                                                                                    :bg_color="item.bg_color"
                                                                                    :style_type="item.style_type"
                                                                                    :add_type="item.add_type"
                                                                                    :add_sort="item.add_sort"
                                                                                    :add_num="item.add_num"
                                                                                    :add_cate="item.add_cate"
                                                                                    :index="index">
                                                                            </article_list>
                                                                            <product_list
                                                                                    v-if="item.type=='product_list'"
                                                                                    :list="item.list"
                                                                                    :font_size="item.font_size"
                                                                                    :text_color="item.text_color"
                                                                                    :bg_color="item.bg_color"
                                                                                    :style_type="item.style_type"
                                                                                    :add_type="item.add_type"
                                                                                    :add_num="item.add_num"
                                                                                    :add_cate="item.add_cate"
                                                                                    :index="index">
                                                                            </product_list>
                                                                            <goods
                                                                                    v-if="item.type=='goods'"
                                                                                    :list="item.list"
                                                                                    :font_size="item.font_size"
                                                                                    :text_color="item.text_color"
                                                                                    :bg_color="item.bg_color"
                                                                                    :style_type="item.style_type"
                                                                                    :add_type="item.add_type"
                                                                                    :add_sort="item.add_sort"
                                                                                    :add_num="item.add_num"
                                                                                    :add_cate="item.add_cate"
                                                                                    :index="index">
                                                                            </goods>
                                                                            <edit_button
                                                                                    v-if="item.type=='edit_button'"
                                                                                    :name="item.name"
                                                                                    :radius="item.radius"
                                                                                    :show_border="item.show_border"
                                                                                    :show_icon="item.show_icon"
                                                                                    :bg_color="item.bg_color"
                                                                                    :text_color="item.text_color"
                                                                                    :border_color="item.border_color"
                                                                                    :list="item.list"
                                                                                    :index="index">
                                                                            </edit_button>
                                                                            <position
                                                                                    v-if="item.type=='position'"
                                                                                    :name="item.name"
                                                                                    :show_type="item.show_type"
                                                                                    :bg_color="item.bg_color"
                                                                                    :text_color="item.text_color"
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
                                                                                    :style_type="item.style_type"
                                                                                    :column_num="item.column_num"
                                                                                    :radian="item.radian"
                                                                                    :bg_color="item.bg_color"
                                                                                    :text_color="item.text_color"
                                                                                    :list="item.list"
                                                                                    :index="index">
                                                                            </edit_piclist>
                                                                            <floaticon
                                                                                    v-if="item.type=='floaticon'"
                                                                                    :form_transparent="item.form_transparent"
                                                                                    :list="item.list"
                                                                                    :index="index">
                                                                            </floaticon>
                                                                            <edit_video
                                                                                    v-if="item.type=='edit_video'"
                                                                                    :ly_height="item.ly_height"
                                                                                    :url="item.url"
                                                                                    :video_type="item.video_type"
                                                                                    :imgurl="item.imgurl"
                                                                                    :index="index">
                                                                            </edit_video>
                                                                            <edit_music
                                                                                    v-if="item.type=='edit_music'"
                                                                                    :url="item.url"
                                                                                    :imgurl="item.imgurl"
                                                                                    :name="item.name"
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
                                                                                    :index="index">
                                                                            </tripartite>
                                                                            <quartet
                                                                                    v-if="item.type=='quartet'"
                                                                                    :list="item.list"
                                                                                    :index="index">
                                                                            </quartet>
                                                                            <message_board
                                                                                    v-if="item.type=='message_board'"
                                                                                    :bg_color="item.bg_color"
                                                                                    :btn_color="page.nv_color"
                                                                                    :text_color="page.text_color"
                                                                                    :index="index">
                                                                            </message_board>
                                                                            <store_door
                                                                                    v-if="item.type=='store_door'"
                                                                                    :imgurl="item.imgurl"
                                                                                    :name="item.name"
                                                                                    :bg_color="item.bg_color"
                                                                                    :text_color="item.text_color"
                                                                                    :time="item.time"
                                                                                    :phone="item.phone"
                                                                                    :index="index">
                                                                            </store_door>
                                                                            <edit_form
                                                                                    v-if="item.type=='edit_form'"
                                                                                    :imgurl="item.imgurl"
                                                                                    :index="index">
                                                                            </edit_form>
                                                                            <customer
                                                                                    v-if="item.type=='customer'"
                                                                                    :form_transparent="item.form_transparent"
                                                                                    :imgurl="item.imgurl"
                                                                                    :index="index">
                                                                            </customer>
                                                                            <edit_phone
                                                                                    v-if="item.type=='phone'"
                                                                                    :form_bottom="item.form_bottom"
                                                                                    :form_margin="item.form_margin"
                                                                                    :form_transparent="item.form_transparent"
                                                                                    :imgurl="item.imgurl"
                                                                                    :index="index">
                                                                            </edit_phone>
                                                                            <announcement
                                                                                    v-if="item.type=='announcement'"
                                                                                    :text_color="item.text_color"
                                                                                    :bg_color="item.bg_color"
                                                                                    :content="item.content"
                                                                                    :imgurl="item.imgurl"
                                                                                    :index="index">
                                                                            </announcement>
                                                                            <ad
                                                                                    v-if="item.type=='ad'"
                                                                                    :imgurl="item.imgurl"
                                                                                    :ly_height="item.ly_height"
                                                                                    :index="index">
                                                                            </ad>
                                                                            <ucenter_cell
                                                                                    v-if="item.big_type=='member_cell' || item.type=='order' || item.type=='follow' || item.type=='coupon' || item.type=='book' || item.type=='kjm' || item.type=='kjo' || item.type=='ptm' || item.type=='pto' || item.type=='kefu' || item.type=='address' || item.type=='about' || item.type=='fenxiao' || item.type == 'paycontent' || item.type == 'mso'"
                                                                                    :img="item.img"
                                                                                    :name="item.name"
                                                                                    :index="index">
                                                                            </ucenter_cell>
                                                                            <order_status
                                                                                    v-if="item.type=='order_status'"
                                                                                    :index="index">
                                                                            </order_status>
                                                                            <member :index="index"
                                                                                    :bg_color="item.bg_color ? item.bg_color : '#f2f2f2'"
                                                                                    :bg_img="item.bg_img"
                                                                                    :show_qd="item.show_qd"
                                                                                    :show_jf="item.show_jf"
                                                                                    :text_color="item.text_color ? item.text_color : '#333333'"
                                                                                    v-if="item.type=='member'">
                                                                            </member>
                                                                            <miaosha
                                                                                    v-if="item.type=='miaosha'"
                                                                                    :list="item.list"
                                                                                    :font_size="item.font_size"
                                                                                    :text_color="item.text_color"
                                                                                    :bg_color="item.bg_color"
                                                                                    :style_type="item.style_type"
                                                                                    :add_type="item.add_type"
                                                                                    :add_sort="item.add_sort"
                                                                                    :add_num="item.add_num"
                                                                                    :add_cate="item.add_cate"
                                                                                    :index="index">
                                                                            </miaosha>
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
                                            <div class="formEditBd"></div>
                                        </div>
                                    </div>
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
    <!-- 会员中心cell -->
    <div style="display: block;" v-if="now_type=='ucenter_cell'" class="form_edit">
        <div class="form-item item_tit">
            <span v-text="now_right_data.title"></span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="item">
                <div class="item-inner">
                    <div style="clear:both"></div>
                    <div>
                        <div style="width:200px;font-weight:bold;">名称</div>
                        <div class="Fzkb_height mt10">
                            <div class="minCell rangeCell-pureTextSize dib mt10" style="width:225px;">
                                <input type="text" v-model="now_right_data.name" id="title" placeholder="请输入名称" class="es-input data-bind" style="cursor: text; border: 1px solid rgb(239, 239, 239); background: rgb(255, 255, 255); text-align: left;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- 秒杀 -->
    <div style="display: block;" v-if="now_type=='miaosha'" class="form_edit">
        <div class="form-item item_tit">
            <span>秒杀</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="字体" flag="text_color" ></color>
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div v-for="(item,index) in now_right_data.list" class="item drag ui-sortable-handle" data-id="C01" style="margin-top: 10px !important;">
                <div class="item-prompt"> 建议尺寸200x160 <span class="deletechild icon-del"><span     v-on:click="remove_img(index,item.this_type)"    class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span></div>
                <div class="item-inner"> <span class="labeltext">标题</span> <input type="text" class="es-input data-bind"      v-model="item.name" onfocus="if (value =='标题'){value =''}"   onblur="if (value ==''){value='标题'}" > </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                <div class="item-inner item-image"> <span class="labeltext pull-left">图片</span> <div class="es-uploader data-bind-image"> <div class="es-selector iconbox noval"   v-on:click="select_img(index,item.this_type)"> <img style="display:block;" :src="item.imgurl"> <p>替换</p>
                </div>
                </div>
                </div>
                <div class="item-inner"> <span class="labeltext">链接</span> <input type="text"  v-on:click="select_menu(index,item.this_type)" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly value="" v-model="item.alias">
                </div>
            </div>
        </div>
        <div class="addChild " onclick="list_add_item('miaosha')">添加一个</div>
    </div>
    <!-- 轮播图 -->
    <div style="display: block;" v-if="now_type=='banner'" class="form_edit" data-type="banner">
        <div class="form-item item_tit">
            <span>轮播图</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="焦点" flag="jiaodian_color"></color>
                <color name="背景" flag="bg_color"></color>
            </div>
            <div class="form-label">显示焦点</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayouton" value="block" v-model="now_right_data.jiaodian_dots" id="banner_editlayout_1"><label for="banner_editlayout_1">显示</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayouton" value="none" v-model="now_right_data.jiaodian_dots" id="banner_editlayout_2"><label for="banner_editlayout_2">不显示</label></div>
                </div>
            </div>
            <div class="form-label" style="padding-top:5px;">轮播图高度</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib" style="width:255px;">
                            <input type="range" max="20" min="1" step="0.1" v-model="now_right_data.ly_height"  style="width:100%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.ly_height * 10"></span>
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="data-list ui-sortable  mt10" v-for="(item,index) in now_right_data.list">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;" data-id="C01">
                    <div class="item-prompt"> 建议尺寸750x360 <span class="deletechild icon-del"><img v-on:click="remove_img(index)" src="/public/menu/icon/del_icon.png" alt="删除"></span></div>
                    <div class="es-uploader data-bind-image" data-bind="thumb" data-bind-child="C01" data-show-element="#picture-show-C01">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(index,item.this_type)">
                            <img :src="item.imgurl" style="display:block;"/> </div>
                    </div> <div class="item-inner"> <span class="labeltext">链接</span>
                    <input  v-model="item.alias" v-on:click="select_menu(index,item.this_type)" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                </div>
                </div>
            </div>
            <div  onclick="list_add_item('banner')" class="addChild">+添加</div>
        </div>
    </div>
    <!-- 广告位-->
    <div style="display: block;" v-if="now_type=='advert'" class="form_edit" data-type="advert">
        <div class="form-item item_tit">
            <span>广告位</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label mt10">选择颜色</div>
            <div class="form-item ">
                <color name="背景" flag="bg_color"></color>
            </div>
            <div class="form-label" style="padding-top:5px;">广告位高度</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib" style="width:255px;">
                            <input type="range" max="20" min="1" step="0.1" v-model="now_right_data.ly_height"  style="width:100%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.ly_height * 10"></span>
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="data-list ui-sortable"  v-for="(item,index) in now_right_data.list">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;" data-id="C01">
                    <div class="item-prompt"> 建议尺寸750x360 <span class="deletechild icon-del"><img v-on:click="remove_img(index)" src="/public/menu/icon/del_icon.png" alt="删除"></span></div>
                    <div class="es-uploader data-bind-image" data-bind="thumb" data-bind-child="C01" data-show-element="#picture-show-C01">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(index,item.this_type)">
                            <img :src="item.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div> <div class="item-inner"> <span class="labeltext">宽度%</span>
                    <input v-model="item.width" placeholder="填写高度比例"   :data-index="index"  oninput="this_advert_height(this,this.value)" type="text" class="es-input linkurl data-bind-url "></div>
                    <div class="item-inner mt10"> <span class="labeltext">链接</span>
                        <input  v-model="item.alias"    v-on:click="select_menu(index,item.this_type)" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                    </div>
                </div>
            </div>
            <div  onclick="list_add_item('advert')" class="addChild">+添加</div>
        </div>
    </div>
    <!--宫格导航设置-->
    <div style="display: block;" v-if="now_type=='navigation'" class="form_edit" data-type="navigation">
        <div class="form-item item_tit">
            <span>宫格导航</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">分列排版</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayoutRadio" value="2" v-model="now_right_data.style_type" id="editlayout_2"><label for="editlayout_2">两列</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayoutRadio" value="3" v-model="now_right_data.style_type" id="editlayout_3"><label for="editlayout_3">三列</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayoutRadio" value="4" v-model="now_right_data.style_type" id="editlayout_4"><label for="editlayout_4">四列</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="componentLayoutRadio" value="5" v-model="now_right_data.style_type" id="editlayout_5"><label for="editlayout_5">五列</label></div>
                </div>
            </div>
            <div class="form-label mt10">字体大小</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_zt" value="12" v-model="now_right_data.font_size" id="Ggdh_fontsize_s"><label for="Ggdh_fontsize_s">小号</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_zt" value="14" v-model="now_right_data.font_size" id="Ggdh_fontsize_m"><label for="Ggdh_fontsize_m">中号</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_zt" value="16" v-model="now_right_data.font_size" id="Ggdh_fontsize_l"><label for="Ggdh_fontsize_l">大号</label></div>
                </div>
            </div>
            <div class="form-label mt10">选择颜色</div>
            <div class="form-item ">
                <color name="字体" flag="text_color" ></color>
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="form-label mt10">圆角弧度</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="form-item" style="display: block">
                        <div style="clear:both"></div>
                        <div>
                            <div class="Fzkb_height mt10"><div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                <input v-model="now_right_data.radian" type="range" max="50" min="0" style="width:100%;">
                                <div style="position:absolute;right:-30px;top:-8px;">
                                    <span v-text="now_right_data.radian"></span>
                                    <span>%</span></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-for="(item,index) in now_right_data.list" class="item drag ui-sortable-handle" data-id="C01">
                <div class="item-prompt"> 建议尺寸100x100
                    <span class="deletechild icon-del"><span v-on:click="remove_img(index)" class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span>
                </div>
                <div class="item-inner">
                    <span class="labeltext">名称</span> <input v-model="item.name"  type="text" class="es-input data-bind"  :data-index="index"  onblur="this_catenav_name(this,this.value)">
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
        <div class="addChild " onclick="list_add_item('navigation')">添加一个</div>
    </div>
    <!-- 标题文字 设置 -->
    <div style="display: block;" v-if="now_type=='headline'" class="form_edit" data-type="headline">
        <div class="form-item item_tit">
            <span>标题文字</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">标题设置</div>
            <div class="form-item ">
                <div class="item-inner">
                    <input type="text" v-model="now_right_data.name" placeholder="请输入标题" class="es-input linkurl data-bind-url " style="height: 36px;">
                </div>
            </div>
            <div class="form-label">样式设置</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline">
                        <input type="radio" class="magic-radio" v-model="now_right_data.style_type" value="1" name="pureTitles" id="pureTitle1">
                        <label for="pureTitle1">样式一</label>
                    </div>
                    <div class="radio-inline">
                        <input type="radio" class="magic-radio" v-model="now_right_data.style_type" value="2" name="pureTitles" id="pureTitle2">
                        <label for="pureTitle2">样式二</label>
                    </div>
                    <div class="radio-inline">
                        <input type="radio" class="magic-radio" v-model="now_right_data.style_type" value="3" name="pureTitles" id="pureTitle3">
                        <label for="pureTitle3">样式三</label>
                    </div>
                    <div class="radio-inline">
                        <input type="radio" class="magic-radio" v-model="now_right_data.style_type" value="4" name="pureTitles" id="pureTitle4">
                        <label for="pureTitle4">样式四</label>
                    </div>
                    <div class="radio-inline">
                        <input type="radio" class="magic-radio" v-model="now_right_data.style_type" value="5" name="pureTitles" id="pureTitle5">
                        <label for="pureTitle5">样式五</label>
                    </div>
                    <div class="radio-inline">
                        <input type="radio" class="magic-radio" v-model="now_right_data.style_type" value="6" name="pureTitles" id="pureTitle6">
                        <label for="pureTitle6">样式六</label>
                    </div>
                    <div class="radio-inline">
                        <input type="radio" class="magic-radio" v-model="now_right_data.style_type" value="7" name="pureTitles" id="pureTitle7">
                        <label for="pureTitle7">样式七</label>
                    </div>
                    <div class="radio-inline">
                        <input type="radio" class="magic-radio" v-model="now_right_data.style_type" value="8" name="pureTitles" id="pureTitle8">
                        <label for="pureTitle8">样式八</label>
                    </div>
                </div>
            </div>
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="字体" flag="text_color" ></color>
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="form-label">字体大小</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_zt" value="14" v-model="now_right_data.font_size" id="headline_fontsize_s"><label for="headline_fontsize_s">小号</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_zt" value="18" v-model="now_right_data.font_size" id="headline_fontsize_m"><label for="headline_fontsize_m">中号</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="fontsize_zt" value="22" v-model="now_right_data.font_size" id="headline_fontsize_l"><label for="headline_fontsize_l">大号</label></div>
                </div>
            </div>
        </div>
    </div>
    <!--图片列表设置-->
    <div style="display: block;" v-if="now_type=='edit_piclist'" class="form_edit">
        <div class="form-item item_tit">
            <span>图片列表</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label mt10">选择颜色</div>
            <div class="form-item ">
                <color name="字体" flag="text_color" ></color>
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="form-label">排版样式</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="pureTitlesImg" value="1" id="purePiclist1"><label for="purePiclist1">样式一</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="pureTitlesImg" value="2" id="purePiclist2"><label for="purePiclist2">样式二</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="pureTitlesImg" value="3" id="purePiclist3"><label for="purePiclist3">样式三</label></div>
                </div>
            </div>
            <div class="form-label">图片排版</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.column_num" type="radio" class="magic-radio"  name="Tplb_piclistpb" value="1" id="editpiclayout_1"><label for="editpiclayout_1">一列</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.column_num" type="radio" class="magic-radio"  name="Tplb_piclistpb" value="2" id="editpiclayout_2"><label for="editpiclayout_2">二列</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.column_num" type="radio" class="magic-radio"  name="Tplb_piclistpb" value="3" id="editpiclayout_3"><label for="editpiclayout_3">三列</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.column_num" type="radio" class="magic-radio"  name="Tplb_piclistpb" value="4" id="editpiclayout_4"><label for="editpiclayout_4">四列</label></div>
                </div>
            </div>
            <div class="form-label mt10">圆角弧度</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="form-item" style="display: block">
                        <div style="clear:both"></div>
                        <div>
                            <div class="Fzkb_height mt10"><div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                                <input v-model="now_right_data.radian" type="range" max="50" min="0" style="width:100%;">
                                <div style="position:absolute;right:-30px;top:-8px;">
                                    <span v-text="now_right_data.radian"></span>
                                    <span>%</span></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-for="(item,index) in now_right_data.list" class="item drag ui-sortable-handle" style="margin-top: 10px !important">
                <div class="item-prompt"> 建议尺寸300x300 <span class="deletechild icon-del"><span     v-on:click="remove_img(index,item.this_type)"  class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span></div>
                <div class="item-inner"> <span class="labeltext">标题</span> <input  v-model="item.name" type="text"  :data-index="index" class="es-input data-bind" oninput="this_pic_name(this,this.value)"> </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                <div class="item-inner item-image"> <span class="labeltext pull-left">图片</span> <div class="es-uploader data-bind-image"> <div class="es-selector iconbox noval"   v-on:click="select_img(index,item.this_type)"> <img style="display:block;" :src="item.imgurl"> <p>替换</p>
                </div>
                </div>
                </div>
                <div class="item-inner"> <span class="labeltext">链接</span> <input v-model="item.alias" type="text" v-on:click="select_menu(index,item.this_type)" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly>
                </div>
            </div>
        </div>
        <div class="addChild " onclick="list_add_item('edit_piclist')">添加一个</div>
    </div>
    <!-- 三方 -->
    <div style="display: block;" v-if="now_type=='tripartite'" class="form_edit">
        <div class="form-item item_tit">
            <span>三方图</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="data-list ui-sortable"   v-for="(item,index) in now_right_data.list">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image" data-bind="thumb">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(index,'tripartite')">
                            <img :src="item.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div> <div class="item-inner"> <span class="labeltext">链接</span>
                    <input  v-model="item.alias" v-on:click="select_menu(index,'tripartite')" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 四方 -->
    <div style="display: block;" v-if="now_type=='quartet'" class="form_edit">
        <div class="form-item item_tit">
            <span>四方图</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="data-list ui-sortable"   v-for="(item,index) in now_right_data.list">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image" data-bind="thumb">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(index,'quartet')">
                            <img :src="item.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div> <div class="item-inner"> <span class="labeltext">链接</span>
                    <input  v-model="item.alias" v-on:click="select_menu(index,'quartet')" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 视频设置 -->
    <div style="display: block;" v-if="now_type=='edit_video'" class="form_edit">
        <div class="form-item item_tit">
            <span>视频设置</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">视频高度</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div>
                        <div class="Fzkb_height"><div class="minCell rangeCell-pureTextSize dib mt10" style="width:225px;">
                            <input v-model="now_right_data.ly_height" type="range" max="250" min="100" style="width:100%;"> <div style="position:absolute;right:-40px;top:-8px;">
                            <span v-text="now_right_data.ly_height"></span><span>px</span></div></div></div></div>
                </div>
            </div>
            <div class="form-label mt10">视频封面</div>
            <div class="data-list ui-sortable">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image">
                        <div class="imgbox es-selector noval" v-on:click="select_img('0','imgurl')">
                            <img :src="now_right_data.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div>
                    <div class="item-inner"> <span class="labeltext">链接</span>
                        <input type="text" v-model="now_right_data.url" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入第三方视频链接">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 音频设置 -->
    <div style="display: block;" v-if="now_type=='edit_music'" class="form_edit">
        <div class="form-item item_tit">
            <span>音频</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">音频封面</div>
            <div class="data-list ui-sortable">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image">
                        <div class="imgbox es-selector noval" v-on:click="select_img('0','imgurl')">
                            <img :src="now_right_data.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div>
                    <div class="item-inner"> <span class="labeltext">链接</span>
                        <input type="text" v-model="now_right_data.url" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入链接">
                    </div>
                    <div class="item-inner"> <span class="labeltext">名称</span>
                        <input type="text" v-model="now_right_data.name" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入音乐名称">
                    </div>
                    <div class="item-inner"> <span class="labeltext">作者</span>
                        <input type="text" v-model="now_right_data.author" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入作者">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 富文本-->
    <div style="display: block;" v-if="now_type=='rich_text'" class="form_edit">
        <div class="form-item item_tit">
            <span>富文本</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="form-label">内容</div>
            <div class="form-item ">
                <div class="item-inner">
                    <textarea id="editor" style="width: 266px; height: 400px;"></textarea>
                </div>
            </div>
        </div>
    </div>
    <!-- 辅助空白-->
    <div style="display: block;" v-if="now_type=='blank'" class="form_edit" data-type="blank">
        <div class="form-item item_tit">
            <span>辅助空白</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="form-label mt10">控件高度</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="Fzkb_height">
                        <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                            <input type="range" max="100" min="20" v-model="now_right_data.ly_height" style="width:100%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span id="blank_height_number" v-text="now_right_data.ly_height"></span>
                                <span>px</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 分割线 -->
    <div style="display: block;" v-if="now_type=='blankline'" class="form_edit">
        <div class="form-item item_tit">
            <span>分割线</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">样式选择</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="Fgx_style" v-model="now_right_data.line_type" value="solid" id="Fgx_style_1"><label for="Fgx_style_1">实线</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="Fgx_style" v-model="now_right_data.line_type" value="dashed" id="Fgx_style_2"><label for="Fgx_style_2">虚线</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="Fgx_style" v-model="now_right_data.line_type" value="dotted" id="Fgx_style_3"><label for="Fgx_style_3">点线</label></div>
                </div>
            </div>
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="线条" flag="line_color" ></color>
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="form-label mt10">控件高度</div>
            <div class="form-item "><span class="labeltext">高度</span>
                <div class="item-inner">
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                            <input type="range" min="1" max="30" v-model="now_right_data.ly_height" style="width:100%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.ly_height">1</span>
                                <span>px</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-inner"><span class="labeltext" style="width:66px;">上下边距</span>
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                            <input type="range" value="1" min="10" max="60" v-model="now_right_data.margin" style="width:100%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.margin"></span>
                                <span>px</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 悬浮图标设置 -->
    <div style="display: block;" v-if="now_type=='floaticon'" class="form_edit">
        <div class="form-item item_tit">
            <span>悬浮图标</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">控件高度</div>
            <div class="form-item ">
                <div class="item-inner"><span class="labeltext">距底部</span>
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                            <input type="range" min="1" max="100" v-model="now_right_data.form_bottom" style="width:98%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.form_bottom"></span>
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-inner"><span class="labeltext">右边距</span>
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                            <input type="range" min="1" max="90" v-model="now_right_data.form_margin" style="width:98%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.form_margin"></span>
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-inner"><span class="labeltext">透明度</span>
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                            <input type="range" min="1" max="100" v-model="now_right_data.form_transparent" style="width:98%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.form_transparent"></span>
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-label mt10">图标</div>
            <div class="data-list ui-sortable"  v-for="(item,index) in now_right_data.list">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(index,item.this_type)">
                            <img :src="item.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div>
                    <div id="this_type_list">
                        <div id="this_0" class="item-inner"> <span class="labeltext">链接</span>
                            <input  v-model="item.alias"  v-on:click="select_menu(index,item.this_type)" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 悬浮客服设置 -->
    <div style="display: block;" v-if="now_type=='customer'" class="form_edit">
        <div class="form-item item_tit">
            <span>客服设置</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">控件高度</div>
            <div class="form-item ">
                <div class="item-inner"><span class="labeltext">距底部</span>
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                            <input type="range" min="1" max="100" v-model="now_right_data.form_bottom" style="width:98%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.form_bottom"></span>
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-inner"><span class="labeltext">右边距</span>
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                            <input type="range" min="1" max="90" v-model="now_right_data.form_margin" style="width:98%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.form_margin"></span>
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-inner"><span class="labeltext">透明度</span>
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                            <input type="range" min="1" max="100" v-model="now_right_data.form_transparent" style="width:98%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.form_transparent"></span>
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
                        <div class="imgbox es-selector noval"  v-on:click="select_img(-1,'imgurl')">
                            <img :src="now_right_data.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 公告设置 -->
    <div style="display: block;" v-if="now_type=='announcement'" class="form_edit">
        <div class="form-item item_tit">
            <span>公告设置</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="文字" flag="text_color" ></color>
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="form-label">内容</div>
            <div class="form-item ">
                         <textarea v-model="now_right_data.content"
                                   placeholder="请填写公告内容"
                                   class="textarea instruct_textarea search_textarea"
                                   style="margin-left: 10px;font-size:13px;height:60px;width: 250px;">
                         </textarea>
            </div>
            <div class="form-label mt10">图标</div>
            <div class="data-list ui-sortable">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(0,'imgurl')">
                            <img :src="now_right_data.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 流量主设置 -->
    <div style="display: block;" v-if="now_type=='ad'" class="form_edit">
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
                                <input type="range" v-model="now_right_data.ly_height" max="300"  min="1" step="1" style="width:80%;">
                                <div style="position:absolute;right:-35px;top:-8px;"><span v-text="now_right_data.ly_height"></span>
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
                                <input type="text" v-model="now_right_data.ad_id" placeholder="请输入流量主ID" class="es-input data-bind" style="cursor: text; border: 1px solid rgb(239, 239, 239); background: rgb(255, 255, 255); text-align: left;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 按钮 设置 -->
    <div style="display: block;" v-if="now_type=='edit_button'" class="form_edit">
        <div class="form-item item_tit">
            <span>按钮</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="item"> <span class="labeltext">名称</span>
                <input type="text" v-model="now_right_data.name" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
            </div>
            <div class="form-label">边框</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.show_border" type="radio" class="magic-radio"  name="An_Xs" value="1" id="An_bg_show"><label for="An_bg_show">显示</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.show_border" type="radio" class="magic-radio"  name="An_Xs" value="0" id="An_bg_hide"><label for="An_bg_hide">隐藏</label></div>
                </div>
            </div>
            <div class="form-label">图标</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.show_icon" type="radio" class="magic-radio"  name="An_pic" value="1" id="An_pic_show"><label for="An_pic_show">显示</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.show_icon" type="radio" class="magic-radio"  name="An_pic" value="2" id="An_pic_hide"><label for="An_pic_hide">隐藏</label></div>
                </div>
            </div>
            <div class="form-label">圆角弧度</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="Fzkb_height mt10">
                        <div class="minCell rangeCell-pureTextSize dib mt10" style="width:255px;">
                            <input type="range" v-model="now_right_data.radius" min="0"  max="50" style="width:100%;">
                            <div style="position:absolute;right:-35px;top:-8px;">
                                <span v-text="now_right_data.radius">0</span>
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="标题" flag="text_color" ></color>
                <color name="背景" flag="bg_color" ></color>
                <color name="边框" flag="border_color" ></color>
            </div>
            <div class="data-list ui-sortable"  v-for="(item,index) in now_right_data.list">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(index,item.this_type)">
                            <img :src="item.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div>
                    <div class="item-inner"> <span class="labeltext">链接</span>
                        <input  v-model="item.name"  v-on:click="select_menu(index,item.this_type)" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 搜索框-->
    <div style="display: block;" v-if="now_type=='search'" class="form_edit" data-type="search" id="form_edit_search">
        <div class="form-item item_tit">
            <span>搜索框</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">样式选择</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="search_style" value="0" v-model="now_right_data.style_type" id="search_style_1"><label for="search_style_1">默认</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="search_style" value="1" v-model="now_right_data.style_type" id="search_style_2"><label for="search_style_2">悬浮</label></div>
                </div>
            </div>
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="搜索框" flag="bd_color" ></color>
                <color name="背景" flag="bg_color" ></color>
                <color name="字体" flag="text_color" ></color>
            </div>
            <div class="form-label">热门搜索</div>
            <div class="form-item ">
                <div class="item-inner">
                    <textarea v-model="now_right_data.hot_word"
                              placeholder="请填写搜索的热门关键词列并用,隔开列如：关键词1,关键词2,关键词3"
                              class="textarea instruct_textarea search_textarea"
                              style="margin-left: 10px;font-size:13px;height:60px;width: 250px;"></textarea>
                </div>
            </div>
        </div>
    </div>
    <!-- 留言板 -->
    <div style="display: block;" v-if="now_type=='message_board'" class="form_edit">
        <div class="form-item item_tit">
            <span>留言板</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="背景" flag="bg_color" ></color>
            </div>
        </div>
    </div>
    <!-- 门店 -->
    <div style="display: block;" v-if="now_type=='store_door'" class="form_edit">
        <div class="form-item item_tit">
            <span>门店</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="字体" flag="text_color" ></color>
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="item mt10"> <span class="labeltext" style="width:56px;">门店名称</span>
                <input type="text" v-model="now_right_data.name" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
            </div>
            <div class="item mt10"> <span class="labeltext" style="width:56px;">营业时间</span>
                <input type="text" v-model="now_right_data.time" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
            </div>
            <div class="item mt10"> <span class="labeltext" style="width:56px;">客服电话</span>
                <input type="text" v-model="now_right_data.phone" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
            </div>
            <div class="form-label">门店Logo</div>
            <div class="data-list ui-sortable">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image">
                        <div class="imgbox es-selector noval" v-on:click="select_img('0','imgurl')">
                            <img :src="now_right_data.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 表单 -->
    <div style="display: block;" v-if="now_type=='edit_form'" class="form_edit">
        <div class="form-item item_tit">
            <span>表单</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="data-list ui-sortable">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="item-inner"> <span class="labeltext">表单</span>
                        <input v-on:click="select_form_all()" type="text" v-model="now_right_data.name" class="es-input linkurl data-bind-url " placeholder="请选择表单" readonly >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 会员信息 -->
    <div style="display: block;" v-if="now_type=='member'" class="form_edit">
        <div class="form-item item_tit">
            <span>会员信息</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <div class="item-inner"> <span class="labeltext">背景</span>
                    <div class="chosecolor-container">
                        <input v-model="now_right_data.bg_color" class="chosecolor data-bind" type="color"> <p v-text="now_right_data.bg_color"></p>
                    </div>
                </div>
                <div class="item-inner"> <span class="labeltext">字体</span>
                    <div class="chosecolor-container">
                        <input v-model="now_right_data.text_color" class="chosecolor data-bind" type="color"> <p v-text="now_right_data.text_color"></p>
                    </div>
                </div>
            </div>
            <div class="form-label">积分签到</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="" value="1" v-model="now_right_data.show_qd" id="qd_editlayout_1"><label for="qd_editlayout_1">显示</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio"  name="" value="0" v-model="now_right_data.show_qd" id="qd_editlayout_2"><label for="qd_editlayout_2">不显示</label></div>
                </div>
            </div>
            <div class="form-label">我的积分</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input type="radio" class="magic-radio" name="" value="1" v-model="now_right_data.show_jf" id="jf_editlayout_1"><label for="jf_editlayout_1">显示</label></div>
                    <div class="radio-inline"><input type="radio" class="magic-radio" name="" value="0" v-model="now_right_data.show_jf" id="jf_editlayout_2"><label for="jf_editlayout_2">不显示</label></div>
                </div>
            </div>
            <div class="form-label mt10">背景图片</div>
            <div class="data-list ui-sortable">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(0,'bg_img')">
                            <img :src="now_right_data.bg_img" style="display:block;"/>
                            <p>替换</p>
                        </div>
                    </div>
                </div>
            </div>
            <div  v-on:click="now_right_data.bg_img = ''" class="addChild">清除图片</div>
        </div>
    </div>
    <!-- 图文集 -->
    <div style="display: block;" v-if="now_type=='article_list'" class="form_edit">
        <div class="form-item item_tit">
            <span>图文集</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">排版样式</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="cateLists" value="1" id="cateLists1"><label for="cateLists1">样式一</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="cateLists" value="2" id="cateLists2"><label for="cateLists2">样式二</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="cateLists" value="3" id="cateLists3"><label for="cateLists3">样式三</label></div>
                </div>
            </div>
            <div class="form-label">标题大小</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.font_size" type="radio" class="magic-radio"  name="fontsize_Twj" value="15" id="Twj_fontsize_s"><label for="Twj_fontsize_s">小号</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.font_size" type="radio" class="magic-radio"  name="fontsize_Twj" value="17" id="Twj_fontsize_m"><label for="Twj_fontsize_m">中号</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.font_size" type="radio" class="magic-radio"  name="fontsize_Twj" value="19" id="Twj_fontsize_l"><label for="Twj_fontsize_l">大号</label></div>
                </div>
            </div>
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="字体" flag="text_color" ></color>
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="form-label">添加类型</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.add_type" type="radio" class="magic-radio"  name="img_add_type" value="1" id="img_type_anually"><label for="img_type_anually">手动</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.add_type" type="radio" class="magic-radio"  name="img_add_type" value="2" id="img_type_automatic"><label for="img_type_automatic">自动</label></div>
                </div>
            </div>
            <div class="form-item" id="img_add_type_zid" style="display: block" v-if="now_right_data.add_type == 2">
                <div class="item-inner"><span class="labeltext">条数</span>
                    <input v-model="now_right_data.add_num" value="1" type="text" class="es-input linkurl data-bind-url " style="width:100px;">
                </div>
                <div class="item-inner mt10"><span class="labeltext">分类</span>
                    <select v-model="now_right_data.add_cate" class="imgedittext imgedittext_text" style="margin-top: 0px;display:inline-block;">
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
                    <div class="radio-inline" style="width: 26%;"><input v-model="now_right_data.add_sort" type="radio" class="magic-radio"  name="img_sort_type" value="time" id="img_type_time"><label for="img_type_time">时间</label></div>
                    <div class="radio-inline" style="width: 26%;"><input v-model="now_right_data.add_sort" type="radio" class="magic-radio"  name="img_sort_type" value="pop" id="img_type_pop"><label for="img_type_pop">人气</label></div>
                    <div class="radio-inline" style="width: 26%;"><input v-model="now_right_data.add_sort" type="radio" class="magic-radio"  name="img_sort_type" value="sales" id="img_type_sales"><label for="img_type_sales">推荐</label></div>
                </div>
            </div>
            <div v-for="(item,index) in now_right_data.list" class="item drag ui-sortable-handle" data-id="C01" style="margin-top: 10px !important;">
                <div class="item-prompt"> 建议尺寸200x160 <span class="deletechild icon-del"><span     v-on:click="remove_img(index,item.this_type)"    class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span></div>
                <div class="item-inner"> <span class="labeltext">标题</span> <input type="text" class="es-input data-bind"      v-model="item.name" onfocus="if (value =='标题'){value =''}"   onblur="if (value ==''){value='标题'}" > </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                <div class="item-inner"> <span class="labeltext">描述</span> <input type="text" class="es-input data-bind"      v-model="item.description"    onfocus="if (value =='内容描述'){value =''}"       onblur="if (value ==''){value='内容描述'}"> </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                <div class="item-inner item-image"> <span class="labeltext pull-left">图片</span> <div class="es-uploader data-bind-image"> <div class="es-selector iconbox noval"   v-on:click="select_img(index,item.this_type)"> <img style="display:block;" :src="item.imgurl"> <p>替换</p>
                </div>
                </div>
                </div>
                <div class="item-inner"> <span class="labeltext">链接</span> <input type="text"  v-on:click="select_menu(index,item.this_type)" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly value="" v-model="item.alias">
                </div>
            </div>
        </div>
        <div class="addChild " onclick="list_add_item('article_list')">添加一个</div>
    </div>
    <!-- 产品集 -->
    <div style="display: block;" v-if="now_type=='product_list'" class="form_edit">
        <div class="form-item item_tit">
            <span>产品集</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">排版样式</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="productLists" value="1" id="productLists1"><label for="productLists1">单列</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="productLists" value="2" id="productLists2"><label for="productLists2">两列</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="productLists" value="3" id="productLists3"><label for="productLists3">横排滑动</label></div>
                </div>
            </div>
            <div class="form-label">标题大小</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.font_size" type="radio" class="magic-radio"  name="fontsize_pd" value="14" id="pd_fontsize_s"><label for="pd_fontsize_s">小号</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.font_size" type="radio" class="magic-radio"  name="fontsize_pd" value="16" id="pd_fontsize_m"><label for="pd_fontsize_m">中号</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.font_size" type="radio" class="magic-radio"  name="fontsize_pd" value="18" id="pd_fontsize_l"><label for="pd_fontsize_l">大号</label></div>
                </div>
            </div>
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="字体" flag="text_color" ></color>
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="form-label">添加类型</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.add_type" type="radio" class="magic-radio"  name="pd_add_type" value="1" id="pd_type_anually"><label for="pd_type_anually">手动</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.add_type" type="radio" class="magic-radio"  name="pd_add_type" value="2" id="pd_type_automatic"><label for="pd_type_automatic">自动</label></div>
                </div>
            </div>
            <div class="form-item" style="display: block" v-if="now_right_data.add_type == 2">
                <div class="item-inner"><span class="labeltext">条数</span>
                    <input v-model="now_right_data.add_num" value="1" type="text" class="es-input linkurl data-bind-url " style="width:100px;">
                </div>
                <div class="item-inner mt10"><span class="labeltext">分类</span>
                    <select v-model="now_right_data.add_cate" class="imgedittext imgedittext_text" style="margin-top: 0px;display:inline-block;">
                        <option value="0">全部</option>
                        <?php if(is_array($product_class) || $product_class instanceof \think\Collection || $product_class instanceof \think\Paginator): $i = 0; $__LIST__ = $product_class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $a['id']; ?>">
                            <?php echo $a['name']; ?>
                        </option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div v-for="(item,index) in now_right_data.list" class="item drag ui-sortable-handle" data-id="C01" style="margin-top: 10px !important;">
                <div class="item-prompt"> 建议尺寸200x160
                    <span class="deletechild icon-del">
                        <span v-on:click="remove_img(index,item.this_type)"  class="deletechild icon-del">
                            <img src="/public/menu/icon/del_icon.png" alt="删除">
                        </span>
                    </span>
                </div>
                <div class="item-inner"> <span class="labeltext">标题</span> <input type="text" class="es-input data-bind"      v-model="item.name" onfocus="if (value =='标题'){value =''}"   onblur="if (value ==''){value='标题'}" >
                </div>
                <div class="item-inner maxlength" style="margin-left: 36px;">
                </div>
                <div class="item-inner item-image">
                    <span class="labeltext pull-left">图片</span>
                    <div class="es-uploader data-bind-image">
                        <div class="es-selector iconbox noval" v-on:click="select_img(index,item.this_type)">
                            <img style="display:block;" :src="item.imgurl"> <p>替换</p>
                        </div>
                    </div>
                </div>
                <div class="item-inner"> <span class="labeltext">链接</span> <input type="text"  v-on:click="select_menu(index,item.this_type)" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly value="" v-model="item.alias">
                </div>
            </div>
        </div>
        <div class="addChild " onclick="list_add_item('product_list')">添加一个</div>
    </div>
    <!--商品集-->
    <div style="display: block;" v-if="now_type=='goods'" class="form_edit">
        <div class="form-item item_tit">
            <span>商品集</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">分列排版</div>
            <div class="form-item">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="componentLayoutRadio_goods" value="1" id="editgoods_1"><label for="editgoods_1">一列</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="componentLayoutRadio_goods" value="2" id="editgoods_2"><label for="editgoods_2">两列</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="componentLayoutRadio_goods" value="3" id="editgoods_3"><label for="editgoods_3">三列</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.style_type" type="radio" class="magic-radio"  name="componentLayoutRadio_goods" value="9" id="editgoods_4"><label for="editgoods_4">横排</label></div>
                </div>
            </div>
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="标题" flag="text_color" ></color>
                <color name="背景" flag="bg_color" ></color>
            </div>
            <div class="form-label">字体大小：</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.font_size" type="radio" class="magic-radio"  name="goodfontsize_zt" value="12" id="Goods_fontsize_s"><label for="Goods_fontsize_s">小号</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.font_size" type="radio" class="magic-radio"  name="goodfontsize_zt" value="14" id="Goods_fontsize_m"><label for="Goods_fontsize_m">中号</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.font_size" type="radio" class="magic-radio"  name="goodfontsize_zt" value="16" id="Goods_fontsize_l"><label for="Goods_fontsize_l">大号</label></div>
                </div>
            </div>
            <div class="form-label">添加类型</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.add_type" type="radio" class="magic-radio"  name="goods_add_type" value="1" id="Goods_type_anually"><label for="Goods_type_anually">手动</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.add_type" type="radio" class="magic-radio"  name="goods_add_type" value="2" id="Goods_type_automatic"><label for="Goods_type_automatic">自动</label></div>
                </div>
            </div>
            <div class="form-item" style="display: block" v-if="now_right_data.add_type == 2">
                <div class="item-inner"><span class="labeltext">条数</span>
                    <input v-model="now_right_data.add_num" type="text" class="es-input linkurl data-bind-url " style="width:100px;">
                </div>
                <div class="item-inner mt10"><span class="labeltext">分类</span>
                    <select v-model="now_right_data.add_cate" class="imgedittext imgedittext_text" style="margin-top: 0px;display:inline-block;">
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
                    <div class="radio-inline" style="width:26%;"><input v-model="now_right_data.add_sort" type="radio" class="magic-radio"  name="goods_sort_type" value="time" id="Goods_type_time"><label for="Goods_type_time">时间</label></div>
                    <div class="radio-inline" style="width:26%;"><input v-model="now_right_data.add_sort" type="radio" class="magic-radio"  name="goods_sort_type" value="pop" id="Goods_type_pop"><label for="Goods_type_pop">人气</label></div>
                    <div class="radio-inline" style="width:26%;"><input v-model="now_right_data.add_sort" type="radio" class="magic-radio"  name="goods_sort_type" value="sales" id="Goods_type_sales"><label for="Goods_type_sales">推荐</label></div>
                </div>
            </div>
            <div  v-for="(item,index) in now_right_data.list" class="item drag ui-sortable-handle" data-id="C01">
                <div class="item-prompt"> 建议尺寸800x800 <span class="deletechild icon-del"><span  v-on:click="remove_img(index,item.this_type)"    class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span></div>
                <div class="item-inner"> <span class="labeltext">名称</span> <input type="text" class="es-input data-bind" v-model="item.name"> </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                <!--<div class="item-inner"> <span class="labeltext">简介</span> <input type="text" class="es-input data-bind" v-model="item.description"> </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>-->
                <div class="item-inner"> <span class="labeltext">金额</span> <input type="text" class="es-input data-bind" v-model="item.price"> </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                <div class="item-inner item-image"> <span class="labeltext pull-left">商品</span> <div class="es-uploader data-bind-image"> <div class="es-selector iconbox noval"    v-on:click="select_goods(index,item.this_type)"> <img style="display:block;" :src="item.imgurl"> <p>替换</p>
                </div>
                </div>
                </div>
            </div>
        </div>
        <div  onclick="list_add_item('goods')" class="addChild">+添加</div>
    </div>
    <!-- 地理位置 -->
    <div style="display: block;" v-if="now_type=='position'" class="form_edit">
        <div class="form-item item_tit">
            <span>地理位置</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">颜色选择</div>
            <div class="form-item ">
                <color name="背景" flag="bg_color" ></color>
                <color name="文字" flag="text_color" ></color>
            </div>
            <div class="item">
                <div class="item-inner"> <span class="labeltext">地址</span>
                    <input type="text" v-model="now_right_data.name" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                </div>
            </div>
            <div class="form-label">显示方式</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="radio-inline"><input v-model="now_right_data.show_type" type="radio" class="magic-radio"  name="positionLayouton" value="1" id="position_editlayout_1"><label for="position_editlayout_1">文字</label></div>
                    <div class="radio-inline"><input v-model="now_right_data.show_type" type="radio" class="magic-radio"  name="positionLayouton" value="2" id="position_editlayout_2"><label for="position_editlayout_2">图片</label></div>
                </div>
            </div>
            <div class="form-label mt10">位置坐标</div>
            <div class="item-inner" style="position: relative;">
                <div class="item"> <span class="labeltext">经度</span>
                    <input type="text" readonly v-model="now_right_data.lon" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                </div>
                <div class="item"> <span class="labeltext">纬度</span>
                    <input type="text" readonly v-model="now_right_data.lat" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                </div>
                <div v-on:click="click_position_wz()" class="savetemplate btn btn-primary" style="width: 100% !important;"> 拾取坐标 </div>
            </div>
        </div>
    </div>
    <!-- 头部和背景 -->
    <div style="display: block;" v-if="now_type=='head'" class="form_edit">
        <div class="form-item item_tit">
            <span>头部导航</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="item ">
                <div class="item-inner"> <span class="labeltext">名称</span>
                    <input type="text" v-model="now_right_data.name" class="es-input data-bind" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;">
                </div>
            </div>
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="头部背景" flag="nv_color" ></color>
                <color name="窗口背景" flag="bg_color" ></color>
            </div>
            <div class="form-label mt10">头部文字颜色</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="item-inner">
                        <div class="radio-inline"><input type="radio" class="magic-radio"  name="BtBorderColor" v-model="now_right_data.text_color" value="#000000" id="nvtxtcolor0"><label for="nvtxtcolor0">黑色</label></div>
                        <div class="radio-inline"><input type="radio" class="magic-radio"  name="BtBorderColor" v-model="now_right_data.text_color" value="#ffffff" id="nvtxtcolor1"><label for="nvtxtcolor1">白色</label></div>
                    </div>
                </div>
            </div>
            <?php if($page_flag == 1 || $page_flag == 3): ?>
            <div class="form-label mt10">是否显示底部导航</div>
            <div class="form-item ">
                <div class="item-inner">
                    <div class="item-inner">
                        <div class="radio-inline"><input type="radio" class="magic-radio"  name="IsDiDisplay" v-model="now_right_data.show_tabbar" value="true" id="showtarbar0"><label for="showtarbar0">显示</label></div>
                        <div class="radio-inline"><input type="radio" class="magic-radio"  name="IsDiDisplay" v-model="now_right_data.show_tabbar" value="false" id="showtarbar1"><label for="showtarbar1">不显示</label></div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="form-label mt10">背景图片</div>
            <div class="data-list ui-sortable">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(0,'bg_img')">
                            <img :src="now_right_data.bg_img" style="display:block;"/> <p>替换</p> </div>
                    </div>
                </div>
            </div>
            <div v-on:click="now_right_data.bg_img = ''" class="addChild">清除图片</div>
            <?php if($page_flag == 1): ?>
            <div class="form-label mt10">授权登录背景图</div>
            <div class="data-list ui-sortable">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(0,'login_img')">
                            <img :src="now_right_data.login_img" style="display:block;"/> <p>替换</p> </div>
                    </div>
                </div>
            </div>
            <div v-on:click="now_right_data.login_img = ''" class="addChild">清除图片</div>
            <div class="form-label mt10">开屏广告</div>
            <div class="data-list ui-sortable">
                <div class="item drag ui-sortable-handle" style="overflow: hidden; position: relative; opacity: 1; z-index: 0;">
                    <div class="es-uploader data-bind-image">
                        <div class="imgbox es-selector noval"  v-on:click="select_img(0,'open_img')">
                            <img :src="now_right_data.open_img.imgurl" style="display:block;"/> <p>替换</p> </div>
                    </div>
                </div>
                <div class="item-inner" v-if="now_right_data.open_img.imgurl && now_right_data.open_img.imgurl.length > 0"> <span class="labeltext">链接</span>
                    <input  v-model="now_right_data.open_img.name"  v-on:click="select_menu(0,'open_img')" type="text" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly >
                </div>
            </div>
            <div v-on:click="now_right_data.open_img.imgurl = ''" class="addChild">清除图片</div>
            <?php endif; ?>
        </div>
    </div>
    <!-- 底部导航 -->
    <div style="display: block;" v-if="now_type=='tabbar'" class="form_edit">
        <div class="form-item item_tit">
            <span>底部导航</span>
        </div>
        <div class="form-item noborder" style="display:block;">
            <div class="form-label">选择颜色</div>
            <div class="form-item ">
                <color name="字体" flag="text_color"></color>
                <color name="选中" flag="select_color"></color>
                <color name="背景" flag="bg_color"></color>
            </div>
            <div    v-for="(item,index) in now_right_data.list" class="item drag ui-sortable-handle mt10">
                <div class="item-prompt"> 建议尺寸100x100 <span class="deletechild icon-del"><span v-on:click="clip_menu(index)"  class="deletechild icon-del"><img src="/public/menu/icon/del_icon.png" alt="删除"></span></span></div>
                <div class="item-inner"> <span class="labeltext">名称</span> <input type="text" class="es-input data-bind" v-model="item.name"> </div> <div class="item-inner maxlength" style="margin-left: 36px;"></div>
                <div class="item-inner item-image">
                    <span class="labeltext pull-left">图片</span>
                    <div class="es-uploader data-bind-image">
                        <div class="es-selector iconbox noval" style="float: left; margin-right: 10px;" v-on:click="select_img(index,'tabbar_icon')">
                            <img style="display:block;" :src="item.tabbar_icon"> <p>替换</p>
                        </div>
                        <div class="es-selector iconbox noval" style="float: left; margin-right: 10px;" v-on:click="select_img(index,'tabbar_select_icon')">
                            <img style="display:block;" :src="item.tabbar_select_icon"> <p>替换</p>
                        </div>
                    </div>
                </div>
                <div class="item-inner"> <span class="labeltext">链接</span> <input type="text"  v-model="item.alias" v-on:click="select_menu(index,'tabbar')" class="es-input linkurl data-bind-url " placeholder="请选择链接或地址" readonly value="">
                </div>
            </div>
            <div v-if="now_right_data.list.length < 5" style="display: block;" onclick="list_add_item('tabbar')" class="addChild">+添加</div>
        </div>
    </div>
</div>
    </div>
</div>
<script>
    var my_cell_all=JSON.parse('<?php echo $my_cell_all; ?>');
</script>
<script src="/public/menu/js/jquery.artdialog.js"></script>
<script src="/public/menu/js/iframetools.js"></script>
<script src="/public/menu/js/center_component.js"></script>
<script src="/public/menu/js/center_my.js"></script>
<script type="text/javascript" src="/public/static/umedito/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/static/umedito/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/static/umedito/_examples/editor_api.js"></script>
<script type="text/javascript" src="/public/static/umedito/lang/zh-cn/zh-cn.js"></script>
<script src="/public/menu/js/jquery.gridly.js" type="text/javascript"></script>
<div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></div>
<script>
    function import_mod_lxm(){
        layer.confirm('导入模板会清除当前数据,请谨慎操作!',function(){
            window.location.href="<?php echo url('menu/import_mod'); ?>&status=1&type=1&id="+id;
        });
    }
    var page_flag = '<?php echo $page_flag; ?>';
    var id = '<?php echo $id; ?>';
    var serve_temp_id='<?php echo $serve_temp_id; ?>';
    //首页管理
    $(document).ready(function () {
        bannerVM.page.show_tabbar = page_flag == '1' || page_flag == '3' ? 'true' : 'false';
        if(page_flag == '2' && id == '0' && serve_temp_id=='0') {return;}
            $.ajax({
                type: "post",
                url: "<?php echo url('custom/gettmpl'); ?>",
                data:{page_flag:page_flag,id:id,serve_temp_id:serve_temp_id},
                success: function (data) {
                    if(data){
                        if(data.all_data){
                            var list = [];
                            for(var key in data.all_data)
                            {
                                var item = data.all_data[key];
                                if(item)
                                {
                                    list.push(item);
                                }
                            }
                            bannerVM.all_data=list;
                        }
                        if(data.page){bannerVM.page = data.page;}
                        if(data.tabbar){bannerVM.tabbar = data.tabbar;}
                        if(page_flag == '2'){bannerVM.page.show_tabbar = 'false';}
                        if(typeof(bannerVM.page.open_img) != 'object')
                        {
                            bannerVM.page.open_img = {
                                imgurl:'',
                                name:'',
                                url:'',
                                key:'1',
                            };
                        }
                    }
                }
            });

    })
    
    function save(flag) {
        var data={
            all_data:bannerVM.all_data,
            page:bannerVM.page,
            tabbar:bannerVM.tabbar,
        };
        var src='';
        event.preventDefault();
        layer.msg('保存中,请稍等！',{icon:16,shade: 0.05});
        if(page_flag == '2' || page_flag == '3' || flag == 1)
        {
            html2canvas(document.querySelector("#content"),{
                useCORS:true,
                logging:false,
            }).then(canvas => {
                var dataUrl = canvas.toDataURL();
            src=dataUrl;
            if(flag == 1 && id == "0")
            {
                layer.prompt({title: '输入模版名称', formType: 0}, function (text, index) {
                    dosave(data,page_flag,src,text,flag);
                });
            }
            else
            {
                console.log(11)
                dosave(data,page_flag,src,bannerVM.page.name,flag);
            }
        });
        }
        else
        {console.log(22)
            dosave(data,page_flag,src,bannerVM.page.name,flag);
        }
    }
    var lock_a=false;
    function dosave(data,page_flag,src,name,flag) {
        if (!lock_a)
        {
            lock_a = true;
            $.ajax({
                type : "post",
                url : host+"addons/yb_shop/core/index.php?s=/admin/custom/save_tmpl",
                data : {
                    data:JSON.stringify(data),
                    page_flag:page_flag,
                    id:id,
                    title:name,
                    img_src:src,
                    flag:flag
                },
                success : function(data) {
                    console.log(data)
                    if(data['code']>0){
                        layer.msg('保存成功!',{icon:1,time:1000});
                        lock_a = false;
                        if(data['new_id'])
                        {
                            id = data['new_id'];
                        }
                    }
                    else{
                        layer.msg(data['message'],{icon:5,time:1000});
                        lock_a = false;
                    }
                }
            });
        }
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
<script src="/public/js/all.js"></script>
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