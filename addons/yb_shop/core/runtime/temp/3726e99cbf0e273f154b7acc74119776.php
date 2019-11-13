<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/goods\goods_add_cate.html";i:1541418032;s:68:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/base.html";i:1541418050;}*/ ?>
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
        
<link rel="stylesheet" type="text/css" href="/public/css/defau.css">
<style>
    input[type="checkbox"] + label::before {
        content: "\a0";  /*不换行空格*/
        display: inline-block;
        vertical-align: .2em;
        height: 18px;
        width: 18px;
        font-size: 22px;
        margin-right: .2em;
        border-radius: .2em;
        background-color: white;
        border: 1px solid #93a1a1;
        text-indent: .15em;
        line-height: .65;  /*行高不加单位，子元素将继承数字乘以自身字体尺寸而非父元素行高*/
    }
    input[type="checkbox"]:checked + label::before {
        content: "\2714";
        background-color:#00a0e9;
        color: white;
        height: 18px;
        width: 18px;
        font-size: 22px;
    }
    input[type="checkbox"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        cursor:pointer;
    }
</style>
<article class="cl pd-20">
<div id="tab_demo" class="HuiTab" style="margin-top: 0px; position: relative;">
                        <div class="tabBar clearfix">
                            <span onclick="window.location.href='<?php echo url('goods/goodsCategoryList'); ?>'">分类列表</span>
                           <span class="current" onclick="window.location.href='<?php echo url('goods/goods_add_cate'); ?>'">添加分类</span>
                        </div>
                    </div>
    <form action="" method="post" class="form form-horizontal" id="">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>分类名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" autocomplete="off" value="" placeholder="分类名称" class="input-text" id="cate_name"
                       name="supplier_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>分类简称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" autocomplete="off" value="" placeholder="分类简称" class="input-text" id="short_name"
                       name="name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">上级分类：</label>
            <div class="formControls col-xs-8 col-sm-9">
                    <select name="search_type" id="pid" class="input-text">
                        <option value="0">顶级分类</option>
                        <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): if( count($category_list)==0 ) : echo "" ;else: foreach($category_list as $key=>$v1): ?>
                        <option value="<?php echo $v1['cate_id']; ?>"><?php echo $v1['cate_name']; ?></option>
                        <?php if(is_array($v1['child_list']) || $v1['child_list'] instanceof \think\Collection || $v1['child_list'] instanceof \think\Paginator): if( count($v1['child_list'])==0 ) : echo "" ;else: foreach($v1['child_list'] as $key=>$v2): ?>
                        <option value="<?php echo $v2['cate_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $v2['cate_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">是否显示：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="checkbox" checked id="is_visible">
                <label for="is_visible">&nbsp;</label>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">关键字：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" autocomplete="off" value="" class="input-text" placeholder="关键字" id="keywords">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">排序：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" autocomplete="off" value="" class="input-text" placeholder="排序" id="sort">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">图片：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <p style="height: 165px;width:165px;border: dashed 1px #e5e5e5">
                    <img src="" alt="" id="imgcate_pic" class="thumbnail">
                </p>
<div style="position: absolute;top:50px;left:200px;color: #ccc;"><br>
建议图片尺寸：200*200px<br>
</div>
                <div class="upload-btn">
				<span>
					<input type="hidden" value="" id="cate_pic"/>
				</span>
                    <input onclick="select_img('1','zhu');" class="btn btn-default" type="button" value="选择图片">
                </div>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">备注：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <textarea name="" cols="" rows="" id="description" class="textarea" placeholder="说点什么...100个字符以内"
                          dragonfly="true"></textarea>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" onclick="addSuppAjax()" type="button"
                       value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
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

<script src="/public/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="/public/js/file_upload.js" type="text/javascript"></script>
<script src="/public/menu/js/jquery.artdialog.js"></script>
<script src="/public/menu/js/iframetools.js"></script>
<script type="text/javascript">
    //模块输入信息验证
    function verify( category_name,short_name,pid) {
        if(category_name == ''){
            layer.msg('请输入名称！',{icon:5,time:1000});
            return false;
        }
        if(short_name == ''){
            layer.msg('请输入简称！',{icon:5,time:1000});
            return false;
        }
        return true;
    }
    var flag = false;//防止重复提交
    //添加用户
    function addSuppAjax() {
        var cate_name = $("#cate_name").val();
        var short_name = $("#short_name").val();
        var pid = $("#pid").val();
        var keywords = $("#keywords").val();
        var sort = $("#sort").val();
        var description = $("#description").val();
        var cate_pic = $("#cate_pic").val();
        if($("#is_visible").prop("checked")){
            var is_visible = 1;
        }else{
            var is_visible = 0;
        }
        if (verify(cate_name,short_name,pid) && !flag) {
            flag = true;
            $.ajax({
                type : "post",
                url : "<?php echo url('goods/goods_add_cate'); ?>",
                data : {
                    'cate_name' : cate_name,
                    'pid' : pid,
                    'keywords' : keywords,
                    'sort' : sort,
                    'description' : description,
                    'is_visible' : is_visible,
                    "cate_pic" : cate_pic,
                    "short_name" : short_name,
                },
                success : function(data) {
                    if (data["code"] > 0) {
                        layer.msg('添加成功',{icon:1,time:1000},function () {
                            window.parent.location.href="<?php echo url('goods/goodsCategoryList'); ?>";
                        });
                    }else{
                        var msg = data['message'];
                        msg = !msg ? "添加失败" : msg;
                        layer.msg(msg, {icon: 2, time: 1000});
                        flag = false;
                    }
                }
            });
        }
    }
    function zhu_images(id,path) {
        $("#cate_pic").val(path);
        $("#imgcate_pic").attr('src',path);
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