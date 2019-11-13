<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/menu\universal_form_add.html";i:1538541930;s:68:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/base.html";i:1537407274;}*/ ?>
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
        
<link media="all" href="/public/menu/css/index_mod.css?v=1.1" type="text/css" rel="stylesheet">
<link media="all" href="/public/menu/css/index_module.css?v=1.1" type="text/css" rel="stylesheet">
<link media="all" href="/public/menu/css/formconfig_index.css?v=1.1" type="text/css" rel="stylesheet">
<link href="/public/static/umedito/themes/default/_css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/public/js/jquery-2.1.1.js"></script>
<style>
    .imgbox img {margin:0 auto;}
    .cubeNavigationArea .cubeLink .cubeLink_a .cubeLink_text {    bottom: -10px!important;}
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
    .activeMod {
        background: #f2f2f2;}
    .ui-draggable {background:#fff;}
    .ui-draggable .title {background: #f2f2f2;font-size: 14px;height: 32px;padding-left: 5px;}
    .yb_radio {height: 36px;line-height: 36px;}
    /*.activeMod ul li.ui-draggable .title {height: 32px; line-height: 22px; font-size: 14px; padding-left: 10px;background: #f2f2f2;float:none;}*/
    .activeMod ul li.ui-draggable .yb_input input {height: 36px;width: 100%;}
    .activeMod ul li.ui-draggable .yb_textarea textarea {width: 100%;}
    .activeMod ul li.ui-draggable .yb_checkbox {background: #fff; line-height: 36px; padding: 0 10px;width:33%;}
    .yb_checkbox input[type="checkbox"],.yb_radio input[type="radio"] {display: inline-block !important;margin-right: 5px !important;}
    .yb_checkbox ,.yb_radio {font-size: 14px;}
    .activeMod ul li.ui-draggable .yb_checkbox ,.activeMod ul li.ui-draggable .yb_radio {width:33%;float:left;}
    .ui-draggable button {width: 80%;        margin: 15px auto;        height: 46px;        line-height: 46px;        border-radius: 5px;}
    #get_button_len {    justify-content: center; display: flex;}
    .activeMod ul li.ui-draggable .yb_region , .activeMod ul li.ui-draggable .yb_time_two , .activeMod ul li.ui-draggable .yb_time_one {text-align: center;  padding: 10px 0;}
    .activeMod ul li.ui-draggable .yb_select {text-align: center;  padding:0;}
    .activeMod ul li.ui-draggable .yb_select select {height: 36px;width: 100%;}
    .activeMod ul li.ui-draggable .yb_region input {height: 36px; width: 30%; text-align: center;}
    .activeMod ul li.ui-draggable .yb_time_two input{height: 36px;width: 40%; text-align: center}
    .activeMod ul li.ui-draggable .yb_time_one input{height: 36px;width: 100%; text-align: center}
    .form_button {width: 100%;text-align: center;}
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
<input type="hidden" id="form_title" value="">
<input type="hidden" id="form_id" value="">
<script>
    Vue.use(VueDragging);
    if('<?php echo $id; ?>'!=0&&'<?php echo $id; ?>'!=''){
        $(document).ready(function () {
            $.ajax({
                type: "post",
                data:{'id':"<?php echo $id; ?>"},
                url: "<?php echo url('menu/universal_form_edit'); ?>",
                success: function (data) {
                    $("#form_id").val(data['id']);
                    $("#form_title").val(data['title']);
                    if (data['type']==1){
                        $('#this_form_type1').prop("checked", "checked");
                    }else {
                        $('#this_form_type2').prop("checked", "checked");
                    }
                    var obj = eval('(' + data['value'] + ')');
                    var list = Object.keys(obj);
                    for (var i = 0; i < list.length; i++) {
                        var new_item={};
                        if (obj[i]['type'] == 'form_text') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['name'] = obj[i]['name'];
                            new_item['value'] = obj[i]['value'];
                            new_item['empty'] = obj[i]['empty'];
                            new_item['form_type'] = obj[i]['form_type'];
                            new_item['password'] = obj[i]['password'];
                            new_item['placeholder'] = obj[i]['placeholder'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (obj[i]['type'] == 'form_textarea') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['name'] = obj[i]['name'];
                            new_item['value'] = obj[i]['value'];
                            new_item['empty'] = obj[i]['empty'];
                            new_item['maxlength'] = obj[i]['maxlength'];
                            new_item['placeholder'] = obj[i]['placeholder'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (obj[i]['type'] == 'form_checkbox') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['name'] = obj[i]['name'];
                            new_item['value'] = obj[i]['value'];
                            new_item['empty'] = obj[i]['empty'];
                            new_item['list'] = obj[i]['list'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (obj[i]['type'] == 'form_radio') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['name'] = obj[i]['name'];
                            new_item['value'] = obj[i]['value'];
                            new_item['empty'] = obj[i]['empty'];
                            new_item['list'] = obj[i]['list'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (obj[i]['type'] == 'form_picker') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['name'] = obj[i]['name'];
                            new_item['list'] = obj[i]['list'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (obj[i]['type'] == 'form_time_one') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['name'] = obj[i]['name'];
                            new_item['default'] = obj[i]['default'];
                            new_item['empty'] = obj[i]['empty'];
                            new_item['start'] = obj[i]['start'];
                            new_item['end'] = obj[i]['end'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (obj[i]['type'] == 'form_time_two') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['name'] = obj[i]['name'];
                            new_item['default1'] = obj[i]['default1'];
                            new_item['default2'] = obj[i]['default2'];
                            new_item['empty'] = obj[i]['empty'];
                            new_item['start'] = obj[i]['start'];
                            new_item['end'] = obj[i]['end'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (obj[i]['type'] == 'form_region') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['name'] = obj[i]['name'];
                            new_item['default'] = obj[i]['default'];
                            new_item['empty'] = obj[i]['empty'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (obj[i]['type'] == 'form_pic') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['name'] = obj[i]['name'];
                            new_item['empty'] = obj[i]['empty'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (obj[i]['type'] == 'form_pic_arr') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['name'] = obj[i]['name'];
                            new_item['empty'] = obj[i]['empty'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                        if (obj[i]['type'] == 'form_button') {
                            new_item['type'] = obj[i]['type'];
                            new_item['module'] = obj[i]['module'];
                            new_item['title'] = obj[i]['title'];
                            new_item['color'] = obj[i]['color'];
                            new_item['text_color'] = obj[i]['text_color'];
                            new_item['time_key'] = obj[i]['time_key'];
                            bannerVM.all_data.push(new_item);
                        }
                    }
                }
            })
        })
    }
</script>
<div class="diypage" id="page">
    <div class="diypage-header">
        <div class="header-left"></div>
        <div class="header-control" id="header-control">
            <?php if($id=='0'): ?>
            <div class="form-item " style="border-bottom:0;">
            <div class="item-inner"><span class="labeltext" style="width: 66px !important;">表单类型</span>
                <div class="radio-inline" style="width: 90px !important;"><input checked type="radio" class="magic-radio"  name="this_form_type" value="1" id="this_form_type1"><label for="this_form_type1">普通表单</label></div>
                <div class="radio-inline" style="width: 90px !important;"><input type="radio" class="magic-radio"  name="this_form_type" value="2" id="this_form_type2"><label for="this_form_type2">预约表单</label></div>
            </div>
             <?php endif; ?>
        </div>
        </div>
        <div class="header-right" style="width: 370px;"></div>
    </div>
    <div class="diypage-container" id="b_menu">
        <!--	<div class="diy_nav" id="leftTab">4</div>-->
        <div class="page-structure nav_inner subnav">
            <div class="tool_box_li">
                <div class="tool_class_name">基本组件</div>
                <div class="tool_box">
                    <a href="javascript:;" class="j-diy-addModule icon_1" data-type="1" title="单行文本框">
                        <span class="icon_pic02"></span><span>单行文本框</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule icon_2" data-type="2" title="多行文本框">
                        <span class="icon_pic02"></span> <span>多行文本框</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule icon_3" data-type="3" title="多项选择器">
                        <span class="icon_pic02"></span> <span>多项选择器</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule icon_4" data-type="4" title="单项选择器">
                        <span class="icon_pic02"></span><span>单项选择器</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule icon_5" data-type="5" title="下拉选择器">
                        <span class="icon_pic02"></span> <span>下拉选择器</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule icon_6" data-type="6" title="日期">
                        <span class="icon_pic02"></span> <span>日期</span>
                    </a>
                    <a href="javascript:;" class="j-diy-addModule icon_7" data-type="7" title="日期范围">
                        <span class="icon_pic02"></span><span>日期范围</span>
                    </a>
                    <a  href="javascript:;" class="j-diy-addModule icon_8" data-type="8" title="省市县选择">
                        <span class="icon_pic02"></span><span>省市县选择</span>
                    </a>
                    <a  href="javascript:;" class="j-diy-addModule icon_9" data-type="9" title="单图上传">
                        <span class="icon_pic02"></span><span>单图上传</span>
                    </a>
                    <a  href="javascript:;" class="j-diy-addModule icon_10" data-type="10" title="多图上传">
                        <span class="icon_pic02"></span><span>多图上传</span>
                    </a>
                    <a  href="javascript:;" class="j-diy-addModule icon_11" data-type="11" title="提交按钮">
                        <span class="icon_pic02"></span><span>提交按钮</span>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="diypage-content">
            <div class="container" style="min-height: 700px;position: fixed;left:calc(50% - 205px);top:80px;width:410px;">
                <!--   <div class="container" style="min-height: 700px;padding-left: 300px;padding-top:0;">-->
                <div class="inner clearfix" style="border:0;">
                    <div class="content-right fl" style="padding-top:0;">
                        <div class="msgWrap form">
                            <form action="" method="post" class="layui-form" id="custom_form">
                                <div class="tableContent">
                                    <div class="content"  style="padding-top:0;">
                                        <div class="DL-Main" id="content" crossOrigin="Anonymous">
                                            <div class="mainPanel clearfix">
                                                <div class="leftPhonewrap" id="leftPhonewrap">
                                                    <div class="holderPhone">
                                                        <div class="wxHd" style="cursor: pointer;background: url(public/menu/images/black.png) center top / 100% no-repeat scroll;">
                                                            <div id="actName" class="phoneTitle" style="bottom: 15px;width: 100%;left: 0;padding: 0 65px;"><h2><span id="bus_select_up_name_but" style="color: #333333">万能表单</span></h2></div>
                                                        </div>
                                                        <div id="anythingContent" style=" background: #fff;height:570px;">
                                                            <div class="mianMod mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar"
                                                                 data-mcs-theme="minimal-dark"
                                                                 style="visibility: visible; overflow: visible;height:570px;">
                                                                <div id="mCSB_1"
                                                                     class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside"
                                                                     style="max-height: none;" tabindex="0">
                                                                    <div id="mCSB_1_container"
                                                                         class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                                         style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                                                        <div class="activeMod" style="height:570px;">
                                                                            <ul id="get_img" class="form_component style_1 clearfix ui-sortable">
                                                                                <li class="ui-draggable"
                                                                                    v-for="(item,index) in all_data"
                                                                                    :name="item.type"
                                                                                    v-dragging="{ list: all_data, item: item, group: 'index' }"
                                                                                    :key="item.time_key">
                                                                                    <form_text v-if="item.type=='form_text'"
                                                                                               :index="index"
                                                                                               :title="item.title"
                                                                                               :value="item.value"
                                                                                               :placeholder="item.placeholder"
                                                                                    >
                                                                                    </form_text>
                                                                                    <form_textarea v-if="item.type=='form_textarea'"
                                                                                                   :index="index"
                                                                                                   :title="item.title"
                                                                                                   :value="item.value"
                                                                                                   :placeholder="item.placeholder"
                                                                                    >
                                                                                    </form_textarea>
                                                                                    <form_checkbox v-if="item.type=='form_checkbox'"
                                                                                                   :index="index"
                                                                                                   :title="item.title"
                                                                                                   :value="item.value"
                                                                                                   :list="item.list"
                                                                                    >
                                                                                    </form_checkbox>
                                                                                    <form_radio v-if="item.type=='form_radio'"
                                                                                                :index="index"
                                                                                                :title="item.title"
                                                                                                :value="item.value"
                                                                                                :list="item.list"
                                                                                                :time_key="item.time_key"
                                                                                    >
                                                                                    </form_radio>
                                                                                    <form_picker v-if="item.type=='form_picker'"
                                                                                                 :index="index"
                                                                                                 :title="item.title"
                                                                                                 :value="item.value"
                                                                                                 :list="item.list"
                                                                                                 :time_key="item.time_key"
                                                                                    >
                                                                                    </form_picker>
                                                                                    <form_time_one v-if="item.type=='form_time_one'"
                                                                                                   :index="index"
                                                                                                   :title="item.title"
                                                                                                   :time_key="item.time_key"
                                                                                                   :default_time="item.default"
                                                                                    >
                                                                                    </form_time_one>
                                                                                    <form_time_two v-if="item.type=='form_time_two'"
                                                                                                   :index="index"
                                                                                                   :title="item.title"
                                                                                                   :time_key="item.time_key"
                                                                                                   :default_time1="item.default1"
                                                                                                   :default_time2="item.default2"
                                                                                    >
                                                                                    </form_time_two>
                                                                                    <form_region v-if="item.type=='form_region'"
                                                                                                 :index="index"
                                                                                                 :title="item.title"
                                                                                                 :time_key="item.time_key"
                                                                                    >
                                                                                    </form_region>
                                                                                    <form_pic v-if="item.type=='form_pic'"
                                                                                              :index="index"
                                                                                              :title="item.title"
                                                                                              :time_key="item.time_key"
                                                                                    >
                                                                                    </form_pic>
                                                                                    <form_pic_arr v-if="item.type=='form_pic_arr'"
                                                                                                  :index="index"
                                                                                                  :title="item.title"
                                                                                                  :time_key="item.time_key"
                                                                                    >
                                                                                    </form_pic_arr>
                                                                                    <form_button v-if="item.type=='form_button'"
                                                                                                 :index="index"
                                                                                                 :title="item.title"
                                                                                                 :size="item.size"
                                                                                                 :color="item.color"
                                                                                                 :text_color="item.text_color"
                                                                                                 :time_key="item.time_key"
                                                                                    >
                                                                                    </form_button>
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
                                    <div class="saveBottomBar">
                                        <div class="buttonBox diy-actions-submit">
                                            <div id="saveButon" onclick="add_submit();" class="bottomButon saveButon" style="background: #00c1de;
border: 1px solid #00c1de;width:80px;height:30px; line-height:30px;border-radius: 4px;position:fixed;top:59px;right:55px;z-index:999999000;">保存</div>
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
            <!-- 单行 -->
            <div class="form_edit" data-type="1" id="form_edit_text" style="display: none;">
                <div class="form-item item_tit">
                    <span>单行文本</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">标题</span>
                                <input type="text"  oninput="this_input_title(this.value)" class="es-input data-bind" id="id_this_input_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入标题" value="">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">初始值</span>
                                <input type="text"  oninput="this_input_value(this.value)" class="es-input data-bind" id="id_this_input_value" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入初始内容" value="">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">提示语</span>
                                <input type="text"  oninput="this_input_placeholder(this.value)" class="es-input data-bind" id="id_this_input_placeholder" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入提示语" value="">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">密码</span>
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_input_text_password" value="false" id="this_input_text_password1"><label for="this_input_text_password1">否</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_input_text_password" value="true" id="this_input_text_password2"><label for="this_input_text_password2">是</label></div>
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">必填</span>
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_input_text_empty" value="false" id="this_input_text_empty1"><label for="this_input_text_empty1">否</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_input_text_empty" value="true" id="this_input_text_empty2"><label for="this_input_text_empty2">是</label></div>
                            </div>
                        </div>
                        <div class="form-label">选择类型</div>
                        <div class="form-item ">
                            <div class="item-inner">
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_input_text_type" value="text" id="this_input_text_type1"><label for="this_input_text_type1">文本</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_input_text_type" value="number" id="this_input_text_type2"><label for="this_input_text_type2">数字</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_input_text_type" value="idcard" id="this_input_text_type3"><label for="this_input_text_type3">身份证</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_input_text_type" value="digit" id="this_input_text_type4"><label for="this_input_text_type4">小数点</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 多行 -->
            <div class="form_edit" data-type="2" id="form_edit_textarea" style="display: none;">
                <div class="form-item item_tit">
                    <span>多行文本</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">标题</span>
                                <input type="text"  oninput="this_textarea_title(this.value)" class="es-input data-bind" id="id_this_textarea_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入标题" value="">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">初始值</span>
                                <input type="text"  oninput="this_textarea_value(this.value)" class="es-input data-bind" id="id_this_textarea_value" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入初始内容" value="">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">提示语</span>
                                <input type="text"  oninput="this_textarea_placeholder(this.value)" class="es-input data-bind" id="id_this_textarea_placeholder" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入提示语" value="">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">长度</span>
                                <input type="text"  oninput="this_textarea_maxlength(this.value)"  class="es-input data-bind" id="id_this_textarea_maxlength" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="最大长度" value="140">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">必填</span>
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_input_textarea_empty" value="false" id="this_input_textarea_empty1"><label for="this_input_textarea_empty1">否</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_input_textarea_empty" value="true" id="this_input_textarea_empty2"><label for="this_input_textarea_empty2">是</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 多项选择器 -->
            <div class="form_edit" data-type="3" id="form_edit_checkbox" style="display: none;">
                <div class="form-item item_tit">
                    <span>多项选择器</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">标题</span>
                                <input type="text" oninput="this_checkbox_title(this.value)" class="es-input data-bind" id="id_this_checkbox_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入标题" value="爱好">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">必选</span>
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_input_checkbox_empty" value="false" id="this_input_checkbox_empty1"><label for="this_input_checkbox_empty1">否</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_input_checkbox_empty" value="true" id="this_input_checkbox_empty2"><label for="this_input_checkbox_empty2">是</label></div>
                            </div>
                        </div>
                        <div class="form-label">多选框设置</div>
                        <div v-for="(item,index) in checkbox_list">
                            <div class="item-inner mt10" >
                                <span class="labeltext">名称</span> <input style="cursor: text" type="text" v-model="item.value"  class="es-input" :data-index="index"  onblur="this_input_checkbox_value(this,this.value)"><img width="20" onclick="del_checkbox(this)" :data-index="index" style="cursor: pointer;margin-top:5px;" src="__CONF_URL__public/menu/images/del_icon.png" >
                            </div>
                        </div>
                    </div>
                    <div class="addChild " onclick="checkbox_add_menu()">添加一个</div>
                </div>
            </div>
            <!-- 单项选择器 -->
            <div class="form_edit" data-type="4" id="form_edit_radio" style="display: none;">
                <div class="form-item item_tit">
                    <span>单项选择器</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">标题</span>
                                <input type="text" oninput="this_radio_title(this.value)" class="es-input data-bind" id="id_this_radio_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入标题" value="性别">
                            </div>
                        </div>
                        <div class="form-label">单选框设置</div>
                        <div v-for="(item,index) in radio_list">
                            <div class="item-inner">
                                <span class="labeltext">名称</span> <input style="cursor: text" type="text" v-model="item.value"  class="es-input data-bind" :data-index="index"  onblur="this_input_checkbox_value(this,this.value)"><img width="20" onclick="del_checkbox(this)" :data-index="index" style="cursor: pointer" src="__CONF_URL__public/menu/images/del.png" >
                            </div>
                            <div class="item-inner"><span class="labeltext">默认</span>
                                <div class="radio-inline"><input type="radio" onclick="set_radio_def(this,this.value)" class="magic-radio" :data-index="index"  name="this_radio_default" value="true" :id="'id_this_radio_default_'+index"><label :for="'id_this_radio_default_'+index">是</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="addChild " onclick="radio_add_menu()">添加一个</div>
                </div>
            </div>
            <!-- 下拉选择器 -->
            <div class="form_edit" data-type="5" id="form_edit_picker" style="display: none;">
                <div class="form-item item_tit">
                    <span>下拉选择器</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">标题</span>
                                <input type="text" oninput="this_picker_title(this.value)" class="es-input data-bind" id="id_this_picker_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入标题" value="性别">
                            </div>
                        </div>
                        <div class="form-label">单选框设置</div>
                        <div v-for="(item,index) in picker_list">
                            <div class="item-inner">
                                <span class="labeltext">名称</span> <input style="cursor: text" type="text" v-model="item.range"  class="es-input data-bind" :data-index="index"  onblur="this_input_checkbox_value(this,this.value)"><img width="20" onclick="del_checkbox(this)" :data-index="index" style="cursor: pointer" src="__CONF_URL__public/menu/images/del.png" >
                            </div>
                        </div>
                    </div>
                    <div class="addChild " onclick="picker_add_menu()">添加一个</div>
                </div>
            </div>
            <!-- 日期 -->
            <div class="form_edit" data-type="6" id="form_edit_time_one" style="display: none;">
                <div class="form-item item_tit">
                    <span>日期</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">标题</span>
                                <input type="text" oninput="this_time_one_title(this.value)" class="es-input data-bind" id="id_this_time_one_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入标题" value="日期">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">必填</span>
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_time_one_empty" value="false" id="this_time_one_empty1"><label for="this_time_one_empty1">否</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_time_one_empty" value="true" id="this_time_one_empty2"><label for="this_time_one_empty2">是</label></div>
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">默认</span>
                                <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',onpicking:this_time_one_def})" class="es-input data-bind" id="id_this_time_one_def" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" value="">
                            </div>
                        </div>
                        <div class="form-label">区间设置</div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">开始</span>
                                <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',onpicking:this_time_one_star})" class="es-input data-bind" id="id_this_time_one_star" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" value="">
                            </div>
                            <div class="item-inner"><span class="labeltext">结束</span>
                                <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',onpicking:this_time_one_end})" class="es-input data-bind" id="id_this_time_one_end" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 日期范围 -->
            <div class="form_edit" data-type="7" id="form_edit_time_two" style="display: none;">
                <div class="form-item item_tit">
                    <span>日期范围</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">标题</span>
                                <input type="text" oninput="this_time_two_title(this.value)" class="es-input data-bind" id="id_this_time_two_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入标题" value="日期范围">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">必填</span>
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_time_tow_empty" value="false" id="this_time_tow_empty1"><label for="this_time_tow_empty1">否</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_time_tow_empty" value="true" id="this_time_tow_empty2"><label for="this_time_tow_empty2">是</label></div>
                            </div>
                        </div>
                        <div class="form-label">默认区间</div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">开始</span>
                                <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',onpicking:this_time_tow_def1})" class="es-input data-bind" id="id_this_time_tow_def1" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" value="">
                            </div>
                            <div class="item-inner"><span class="labeltext">结束</span>
                                <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',onpicking:this_time_tow_def2})" class="es-input data-bind" id="id_this_time_tow_def2" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" value="">
                            </div>
                        </div>
                        <div class="form-label">规定区间</div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">开始</span>
                                <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',onpicking:this_time_tow_star})" class="es-input data-bind" id="id_this_time_tow_star" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" value="">
                            </div>
                            <div class="item-inner"><span class="labeltext">结束</span>
                                <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',onpicking:this_time_tow_end})" class="es-input data-bind" id="id_this_time_tow_end" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 城市选择 -->
            <div class="form_edit" data-type="8" id="form_edit_region" style="display: none;">
                <div class="form-item item_tit">
                    <span>省市县选择</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">标题</span>
                                <input type="text" oninput="this_region_title(this.value)" class="es-input data-bind" id="id_this_region_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入标题" value="地区">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">必填</span>
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_region_empty" value="false" id="this_region_empty1"><label for="this_region_empty1">否</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_region_empty" value="true" id="this_region_empty2"><label for="this_region_empty2">是</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 单图上传 -->
            <div class="form_edit" data-type="9" id="form_edit_pic" style="display: none;">
                <div class="form-item item_tit">
                    <span>单图上传</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">标题</span>
                                <input type="text" oninput="this_pic_title(this.value)" class="es-input data-bind" id="id_this_pic_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入标题" value="Logo">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">必填</span>
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_pic_empty" value="false" id="this_pic_empty1"><label for="this_pic_empty1">否</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_pic_empty" value="true" id="this_pic_empty2"><label for="this_pic_empty2">是</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 多图上传 -->
            <div class="form_edit" data-type="10" id="form_edit_pic_arr" style="display: none;">
                <div class="form-item item_tit">
                    <span>多图上传</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">标题</span>
                                <input type="text" oninput="this_pic_arr_title(this.value)" class="es-input data-bind" id="id_this_pic_arr_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入标题" value="商品图片">
                            </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"><span class="labeltext">必填</span>
                                <div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_pic_arr_empty" value="false" id="this_pic_arr_empty1"><label for="this_pic_arr_empty1">否</label></div>
                                <div class="radio-inline"><input type="radio" class="magic-radio"  name="this_pic_arr_empty" value="true" id="this_pic_arr_empty2"><label for="this_pic_arr_empty2">是</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 按钮 -->
            <div class="form_edit" data-type="11" id="form_button" style="display: none;">
                <div class="form-item item_tit">
                    <span>按钮设置</span>
                </div>
                <div>
                    <div class="form-item noborder" style="display: block;background:#f7f9fd;border-radius:6px;">
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">文字</span>
                                <input type="text" oninput="this_button_title(this.value)" class="es-input data-bind" id="id_this_button_title" style="cursor: text; border: 1px solid #efefef; background: #ffffff; text-align: left;" placeholder="请输入文字" value="提交">
                            </div>
                        </div>
                        <div class="form-item ">
                        <div class="item-inner"> <span class="labeltext">背景</span>
                        <input type="color" oninput="this_button_bg(this.value)"  value="#dedede" class="es-input data-bind" id="id_this_button_bg" style="cursor: pointer;text-align: left;">
                        </div>
                        </div>
                        <div class="form-item ">
                            <div class="item-inner"> <span class="labeltext">文字颜色</span>
                                <input type="color" oninput="this_button_color(this.value)" value="#646464"  class="es-input data-bind" id="id_this_button_color" style="cursor: pointer; text-align: left;">
                            </div>
                        </div>
                        <!--<div class="form-item ">-->
                        <!--<div class="item-inner"><span class="labeltext">大小</span>-->
                        <!--<div class="radio-inline"><input checked type="radio" class="magic-radio"  name="this_button_empty" value="12" id="this_button_empty1"><label for="this_button_empty1">小</label></div>-->
                        <!--<div class="radio-inline"><input type="radio" class="magic-radio"  name="this_button_empty" value="16" id="this_button_empty2"><label for="this_button_empty2">中</label></div>-->
                        <!--<div class="radio-inline"><input type="radio" class="magic-radio"  name="this_button_empty" value="20" id="this_button_empty3"><label for="this_button_empty3">大</label></div>-->
                        <!--</div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input  type="hidden" id="goods_select_id" value="">
<script src="/public/menu/js/jquery.artdialog.js"></script>
<script src="/public/menu/js/iframetools.js"></script>
<script src="/public/menu/js/index_component_my.js"></script>
<script src="/public/menu/js/index_my_form.js"></script>
<script type="text/javascript" src="/public/static/umedito/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/static/umedito/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/static/umedito/_examples/editor_api.js"></script>
<script type="text/javascript" src="/public/static/umedito/lang/zh-cn/zh-cn.js"></script>
<script src="/public/menu/js/jquery.gridly.js" type="text/javascript"></script>
<div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></div>
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