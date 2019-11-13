<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/goods\goods_cate_list.html";i:1541418024;s:68:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/base.html";i:1541418050;}*/ ?>
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
        
<div class="Hui-article">
    <article class="cl pd-20">
        <div class="n_tab_line">
            <a href="<?php echo url('goods/goodsCategoryList'); ?>" class="n_tab_list">分类列表</a>
            <a href="<?php echo url('goods/goods_add_cate'); ?>" class="n_tab_add"><i class="Hui-iconfont">&#xe604;</i>添加分类</a>
            <div class="cl"></div>
        </div>
        <table class="table table-border table-bordered table-bg">
            <thead>
            <tr class="text-c">
                <th><i class="Hui-iconfont">&#xe6f5;</i></th>
                <th>排序</th>
                <th>分类名称</th>
                <th>分类简称</th>
                <th>分类图片</th>
                <th>是否显示</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): if( count($category_list)==0 ) : echo "" ;else: foreach($category_list as $key=>$v1): ?>
            <tr class="pid_0" style="height: 30px;">
                <td>
                    <?php if($v1['child_list'] != array()): ?>
                    <a href="javascript:;" onclick="tab_switch(<?php echo $v1['cate_id']; ?>)" class="tab_jia_<?php echo $v1['cate_id']; ?>" style="display: block;"><i class="Hui-iconfont">&#xe600;</i></a>
                    <a href="javascript:;" onclick="tab_switch(<?php echo $v1['cate_id']; ?>)" class="tab_jian_<?php echo $v1['cate_id']; ?>" style="display: none;"><i class="Hui-iconfont">&#xe6a1;</i></a>
                    <?php endif; ?>
                </td>
                <td style="text-align: center;"><input type="text" class="sort input-common" fieldid="<?php echo $v1['cate_id']; ?>" fieldname="sort" value="<?php echo $v1['sort']; ?>" size="1" style="margin-left:3px;"></td>
                <td style="text-align: center;"><input class="input-common" type="text" fieldid="<?php echo $v1['cate_id']; ?>" fieldname="cate_name" value="<?php echo $v1['cate_name']; ?>" style="width: 150px;"></td>
                <td style="text-align: center;"><input class="input-common" type="text" fieldid="<?php echo $v1['cate_id']; ?>" fieldname="short_name" value="<?php echo $v1['short_name']; ?>" style="width: 150px;"></td>
                <td style="text-align: center;"><img src="<?php echo $v1['cate_pic']; ?>" onerror="this.src='/public/goods/img/default_goods_image_240.gif'" width="50px;"></td>
                <td style="text-align: center;">
                    <?php if($v1['is_visible']==1): ?>
                    <span class="label label-success radius">是</span>
                    <?php else: ?>
                    <span class="label label-default radius">否</span>
                    <?php endif; ?>
                </td>
                <td style="text-align: center;">
                    <a style="text-decoration:none;color:#0066cc;" title="编辑" onclick="goods_cate_edit('类型编辑','__CONF_SITE__admin/goods/updateGoodsCate&cate_id=<?php echo $v1['cate_id']; ?>','1000','800')" href="javascript:;">
                    编辑
                    </a>
                    <a style="text-decoration:none;color:#0066cc;" title="删除" href="javascript:void(0);" onclick="delCategory(<?php echo $v1['cate_id']; ?>)">
                  删除
                    </a>
                </td>
            </tr>
            <?php if(is_array($v1['child_list']) || $v1['child_list'] instanceof \think\Collection || $v1['child_list'] instanceof \think\Paginator): if( count($v1['child_list'])==0 ) : echo "" ;else: foreach($v1['child_list'] as $key=>$v2): ?>
            <tr class="pid_<?php echo $v1['cate_id']; ?>" style="height: 30px;display: none;">
                <td>
                    <?php if($v2['child_list'] != array()): ?>
                    <a href="javascript:;" onclick="tab_switch(<?php echo $v2['cate_id']; ?>)" class="tab_jian_<?php echo $v2['cate_id']; ?>" style="display: block;"><i class="Hui-iconfont">&#xe6a1;</i></a>
                    <a href="javascript:;" onclick="tab_switch(<?php echo $v2['cate_id']; ?>)" class="tab_jia_<?php echo $v2['cate_id']; ?>" style="display: none;"><i class="Hui-iconfont">&#xe600;</i></a>
                    <?php endif; ?>
                </td>
                <td style="text-align: center;"><input type="text" class="sort input-common" fieldid="<?php echo $v2['cate_id']; ?>" fieldname="sort"  value="<?php echo $v2['sort']; ?>" size="1"></td>
                <td style="text-align: center;"><span style="color:#ccc;">|——</span> <input type="text" class="input-common" fieldid="<?php echo $v2['cate_id']; ?>" fieldname="cate_name" value="<?php echo $v2['cate_name']; ?>" style="width: 100px;"></td>
                <td style="text-align: center;"><input type="text" class="input-common" fieldid="<?php echo $v2['cate_id']; ?>" fieldname="short_name" value="<?php echo $v2['short_name']; ?>" style="width: 150px;"></td>
                <td style="text-align: center;"><img src="<?php echo $v2['cate_pic']; ?>" width="50px;"></td>
                <td style="text-align: center;">
                    <?php if($v2['is_visible']==1): ?>
                    <span class="label label-success radius">是</span>
                    <?php else: ?>
                    <span class="label label-default radius">否</span>
                    <?php endif; ?>
                </td>
                <td style="text-align: center;">
                    <a style="text-decoration:none;color:#0066cc;" title="编辑" onclick="goods_cate_edit('类型编辑','__CONF_SITE__admin/goods/updateGoodsCate&cate_id=<?php echo $v2['cate_id']; ?>','800','500')" href="javascript:;">
                        编辑
                    </a>
                    <a style="text-decoration:none;color:#0066cc;" title="删除" href="javascript:void(0);" onclick="delCategory(<?php echo $v2['cate_id']; ?>)">
                      删除
                    </a>
                </td>
            </tr>
            <?php if(is_array($v2['child_list']) || $v2['child_list'] instanceof \think\Collection || $v2['child_list'] instanceof \think\Paginator): if( count($v2['child_list'])==0 ) : echo "" ;else: foreach($v2['child_list'] as $key=>$v3): ?>
            <tr class="pid_<?php echo $v2['cate_id']; ?> pid_<?php echo $v1['cate_id']; ?>" style="height: 30px;display:none;">
                <td></td>
                <td style="text-align: center;"><input type="text" class="sort input-common" fieldid="<?php echo $v3['cate_id']; ?>" fieldname="sort"  value="<?php echo $v3['sort']; ?>" size="1"></td>
                <td style="text-align: center;"><span style="color:#ccc;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|——</span> <input class="input-common" type="text" fieldid="<?php echo $v3['cate_id']; ?>" fieldname="cate_name" value="<?php echo $v3['cate_name']; ?>" style="width: 100px;"></td>
                <td style="text-align: center;"><input type="text" class="input-common" fieldid="<?php echo $v3['cate_id']; ?>" fieldname="short_name" value="<?php echo $v3['short_name']; ?>" style="width: 150px;"></td>
                <td style="text-align: center;"><img src="<?php echo $v3['cate_pic']; ?>" width="50px;"></td>
                <td style="text-align: center;">
                    <?php if($v3['is_visible']==1): ?>
                    <span class="label label-success radius">是</span>
                    <?php else: ?>
                    <span class="label label-default radius">否</span>
                    <?php endif; ?>
                </td>
                <td style="text-align: center;">
                    <a style="text-decoration:none;color:#0066cc;" title="编辑" onclick="goods_cate_edit('类型编辑','__CONF_SITE__admin/goods/updateGoodsCate&cate_id=<?php echo $v3['cate_id']; ?>','800','500')" href="javascript:;">
                        编辑
                    </a>
                    <a style="text-decoration:none;color:#0066cc;" title="删除" href="javascript:void(0);" onclick="delCategory(<?php echo $v3['cate_id']; ?>)">
                        删除
                    </a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </article>
    <div class="n_page_no">
    </div>
</div>

    </div>
</div>
<script src="/public/static/bast/xenon-custom.js"></script>
<script src="/public/static/bast/clipboard.js"></script>
<script src="/public/static/bast/TweenMax.min.js"></script>
<script src="/public/static/bast/resizeable.js"></script>
<script src="/public/static/layer/2.4/layer.js"></script>
<script src="/public/js/public_js.js"></script>
<script type="text/javascript" src="/public/static/My97DatePicker/4.8/WdatePicker.js"></script>

<script type="text/javascript">
    /*
     参数解释：
     title	标题
     url		请求的url
     id		需要操作的数据id
     w		弹出层宽度（缺省调默认值）
     h		弹出层高度（缺省调默认值）
     */
    /*分类-编辑*/
    function goods_cate_edit(title,url,w,h){
        layer_show(title,url,w,h);
    }
    $(".table input").change(function(){
        var fieldid = $(this).attr('fieldid');
        var fieldname = $(this).attr('fieldname');
        var fieldvalue = $(this).val();
        if(fieldvalue == ''){
            layer.msg('不能为空！', {icon: 2, time: 1000});
        }else{
            $.ajax({
                type:"post",
                url:"<?php echo url('goods/modifyGoodsCategoryField'); ?>",
                data:{'fieldid':fieldid,'fieldname':fieldname,'fieldvalue':fieldvalue},
                success: function (data) {
                    if(data>0){
                        layer.msg('操作成功', {icon: 1, time: 1000},function () {
                            window.location.reload();
                        });
                    }else{
                        layer.msg('操作失败', {icon: 2, time: 1000});
                    }
                }
            });
        }
    });
    //三级菜单
    function tab_switch(module_id){
        if($(".pid_"+module_id).css('display') != 'none'){
            $(".tab_jian_"+module_id).hide();
            $(".tab_jia_"+module_id).show();
            $(".pid_"+module_id).hide(300);
        }else{
            $(".tab_jian_"+module_id).show();
            $(".tab_jia_"+module_id).hide();
            $(".pid_"+module_id).show(500);
        }
    }
    function delCategory(cate_id) {
        layer.confirm('确认要删除吗？',function(index){
            //后台处理
            $.ajax({
                type : "post",
                url : "<?php echo url('goods/deleteGoodsCategory'); ?>",
                data : {
                    'cate_id' : cate_id,
                },
                dataType : "json",
                success : function(data) {
                    if(data['code'] > 0){
                        layer.msg('操作成功', {icon: 1, time: 1000},function () {
                            window.location.reload();
                        });
                    }else{
                        layer.msg(data['msg'], {icon: 2, time: 1000});
                    }
                }
            });
        });
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