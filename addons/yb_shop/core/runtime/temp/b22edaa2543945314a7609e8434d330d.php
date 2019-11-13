<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/goods\goods_list.html";i:1541418020;s:68:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/base.html";i:1541418050;}*/ ?>
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
        
<style>.btn {margin-bottom:0;}</style>
<div class="Hui-article">
    <article class="cl pd-20">
        <div class="n_tab_line">
            <a href="<?php echo url('goods/goodslist'); ?>" class="n_tab_list">商品列表</a>
            <a href="<?php echo url('goods/add_goods'); ?>" class="n_tab_add" onclick="javascript:layer.msg('加载界面中,请稍等！',{icon:16,shade: 0.01});">
                <i class="Hui-iconfont">&#xe600;</i>添加商品
            </a>
            <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px;display: none;" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
            <div class="cl"></div>
        </div>
                <div>
<style>.page_btn{float:left;}
	.tabBar span {background: #fff;color:#988989;font-size:14px;font-weight: normal;}</style>
                    <div class="cl pd-5 bg-1 bk-gray mt-20">
                        <form class="Huiform" method="post" action="__CONF_SITE__admin/goods/goodslist" style=" padding: 15px;">
<div class="text-c">
                            日期范围：
                            <input type="text" onfocus="WdatePicker()" value="<?php echo $star_time; ?>" name="star_time" class="input-text Wdate" style="width:120px;">
                            -
                            <input type="text" onfocus="WdatePicker()" value="<?php echo $end_time; ?>" name="end_time" class="input-text Wdate" style="width:120px;">
                            <input type="text" name="search_text" value="<?php echo $search_text; ?>" placeholder=" 商品名称" style="width:250px" class="input-text">
                          <select class="input-text" name="goods_cate" style="width: auto">
                              <option value="0">全部</option>
                              <?php if(is_array($goods_cate) || $goods_cate instanceof \think\Collection || $goods_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                            <option <?php if($cate_id==$c['cate_id']): ?> selected <?php endif; ?> value="<?php echo $c['cate_id']; ?>"><?php echo $c['cate_name']; ?></option>
                              <?php endforeach; endif; else: echo "" ;endif; ?>
                          </select>
                            <button class="btn btn-search radius" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜商品</button>
</div>
                        </form>
                    </div>
                    <div id="tab_demo" class="HuiTab" style="margin-top: 15px;">
                        <div class="tabBar clearfix">
                            <span <?php if($status==''): ?> class="current" <?php endif; ?> onclick="window.location.href='__CONF_SITE__admin/goods/goodslist'">全部</span>
                            <span <?php if($status==1): ?> class="current" <?php endif; ?> onclick="window.location.href='__CONF_SITE__admin/goods/goodslist&status=1'">出售中</span>
                            <span <?php if($status==2): ?> class="current" <?php endif; ?> onclick="window.location.href='__CONF_SITE__admin/goods/goodslist&status=2'">仓库中</span>
                            <span <?php if($status==3): ?> class="current" <?php endif; ?> onclick="window.location.href='__CONF_SITE__admin/goods/goodslist&status=3'">已售罄</span>
                            <span <?php if($status==4): ?> class="current" <?php endif; ?> onclick="window.location.href='__CONF_SITE__admin/goods/goodslist&status=4'">回收站</span>
                        </div>
                    </div>
<div class="cl pd-5 bg-1 bk-gray mt-20" style="padding:10px;border-bottom:0;margin-top: 15px;">
                        <span class="page_btn"><a href="javascript:;" onclick="goods_pldel()" class="btn btn-new radius"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a></span>
                        <span class="page_btn" style="margin-left: 10px;margin-right: 10px;"><a href="javascript:;" onclick="goods_re()" class="btn btn-new radius"><i class="Hui-iconfont">&#xe6c1;</i> 热卖</a></span>
                        <span class="page_btn" style="margin-right: 10px;"><a href="javascript:;" onclick="goods_new()" class="btn btn-new radius"><i class="Hui-iconfont">&#xe630;</i> 新品</a></span>
                        <span class="page_btn"><a href="javascript:;" onclick="goods_tui()" class="btn btn-new radius"><i class="Hui-iconfont">&#xe6cf;</i> 推荐</a></span></div>
                    <div>
                        <table class="table table-border table-bordered table-bg table-hover table-sort" style="margin-top: 0;">
                            <thead>
                            <tr class="text-c">
                                <th><input id="xs-all" name="" type="checkbox" value=""></th>
                                <th>排序</th>
                                <th>缩略图</th>
                                <th>产品名称</th>
                                <th>单价</th>
                                <th>添加时间</th>
                                <th>状态</th>
                                <th>发布</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody id="tbody">
                            <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $k = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($k % 2 );++$k;?>
                                <tr class="text-c va-m">
                                    <td><input name="sub" type="checkbox" value="<?php echo $r['goods_id']; ?>"></td>
                                    <td style="text-align: center;"><input type="text" class="sort input-common" data-id="<?php echo $r['goods_id']; ?>" name="sort" value="<?php echo $r['sort']; ?>" size="1" ></td>
                                    <td><img width="60" height="60" class="radius" src="<?php echo $r['img_cover']; ?>"></a></td>
                                    <td class="text-l"><?php echo $r['goods_name']; ?></td>
                                    <td><span class="price"><?php echo $r['price']; ?></span></td>
                                    <td><?php echo $r['create_time']; ?></td>
                                    <td class="td-status">
                                        <?php if($r['is_new']==1): ?>
                                        <a onclick="goods_type_all(this,'<?php echo $r['goods_id']; ?>','new')" style="text-decoration:none" href="javascript:;" title="新品"><span class="label label-secondary radius">新</span></a>
                                        <?php endif; if($r['is_hot']==1): ?>
                                        <a onclick="goods_type_all(this,'<?php echo $r['goods_id']; ?>','hot')" style="text-decoration:none" href="javascript:;" title="热销"> <span class="label label-danger radius">热</span></a>
                                        <?php endif; if($r['is_recommend']==1): ?>
                                        <a onclick="goods_type_all(this,'<?php echo $r['goods_id']; ?>','tui')" style="text-decoration:none" href="javascript:;" title="推荐"> <span class="label label-primary radius">荐</span></a>
                                        <?php endif; if($r['is_hot']==0&&$r['is_new']==0&&$r['is_recommend']==0): ?>
                                        无
                                        <?php endif; ?>
                                    </td>
                                    <td class="td-status">
                                        <?php if($r['state']==1): ?>
                                        <a style="text-decoration:none" onClick="goods_stop(this,'<?php echo $r['goods_id']; ?>')" href="javascript:;" title="下架"><span class="label label-success radius">已发布</span></a>
                                        <?php endif; if($r['state']==0): ?>
                                        <a style="text-decoration:none" onClick="goods_star(this,'<?php echo $r['goods_id']; ?>')" href="javascript:;" title="上架"><span class="label label-danger radius">仓库中</span></a>
                                        <?php endif; if($r['stock']==0): ?>
                                        <a style="text-decoration:none" href="javascript:;" title="已售罄"><span class="label label-warning radius">已售罄</span></a>
                                        <?php endif; if($r['state']==10): ?>
                                        <a style="text-decoration:none" href="javascript:;" title="违规商品"><span class="label label-default radius">违规商品</span></a>
                                        <?php endif; ?>
                                    </td>
                                    <td class="td-manage">
                                        <a style="text-decoration:none;color:#0066cc;" class="ml-5" href="__CONF_SITE__admin/goods/add_goods&goodsId=<?php echo $r['goods_id']; ?>" onclick="javascript:layer.msg('加载界面中,请稍等！',{icon:16,shade: 0.01});" title="编辑">
                                         编辑
                                        </a>
                                        <a style="text-decoration:none;color:#0066cc;" class="ml-5" onClick="goods_del(this,'<?php echo $r['goods_id']; ?>')" href="javascript:;" title="删除">删除
                                        </a><a style="text-decoration:none;color:#0066cc;" title="复制" href="javascript:void(0);" onclick="copy_now('wxpath<?php echo $k; ?>')" id="wxpath<?php echo $k; ?>" data-clipboard-text="yb_shop/pages/goods/detail/index?id=<?php echo $r['goods_id']; ?>">复制链接</a></td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <div class="n_page_no">
                            <?php echo $page; ?>
                        </div>
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
    $(function () {
        $('#xs-all').click(function () {
            var xs_status = $('#xs-all').prop('checked');
            if (xs_status) {
                $("[name='sub']").prop('checked', true);
            }else{
                $("[name='sub']").prop('checked', false);
            }
        });
        $("[name='sub']").click(function () {
            var i = 0;
            var j = 0;
            $("[name='sub']").each(function () {
                var xs_stu = $(this).prop('checked');
                if (xs_stu) {
                    i++;
                }
                j++;
            });
            if (i == j) {
                $('#xs-all').prop('checked', true);
            } else {
                $('#xs-all').prop('checked', false);
            }
        });
    });
    /*
     参数解释：
     title	标题
     url		请求的url
     id		需要操作的数据id
     w		弹出层宽度（缺省调默认值）
     h		弹出层高度（缺省调默认值）
     */
    /*商品-状态修改*/
    function goods_type_all(obj,id,key) {
        //后台处理
        $.ajax({
            type : "post",
            url : "<?php echo url('goods/goodTypeEdit'); ?>",
            data : {
                "goods_id" : id,
                "key" : key
            },
            success : function(data) {
                if (data['code'] > 0) {
                    $(obj).remove();
                    layer.msg('取消成功!',{icon: 1,time:500});
                }else{
                    layer.msg(data['message'], {icon: 2, time: 1000});
                }
            }
        })
    }
	/*商品-停用*/
    function goods_stop(obj,id){
        layer.confirm('确认要下架吗？',function(index){
            //此处请求后台程序，下方是成功后的处理……
            //后台处理
            $.ajax({
                type : "post",
                url : "<?php echo url('goods/ModifyGoodsOffline'); ?>",
                data : {
                    "goods_ids" : id
                },
                success : function(data) {
                    if (data['code'] > 0) {
                        layer.msg('下架成功!',{icon: 1,time:500},function () {
                            window.parent.location.reload();
                        });
                    }else{
                        layer.msg(data['message'], {icon: 2, time: 1000});
                    }
                }
            })
        });
    }
	/*商品-上架*/
    function goods_star(obj,id){
        layer.confirm('确认要上架吗？',function(index){
            //此处请求后台程序，下方是成功后的处理……
            //后台处理
            $.ajax({
                type : "post",
                url : "<?php echo url('goods/ModifyGoodsOnline'); ?>",
                data : {
                    "goods_ids" : id
                },
                success : function(data) {
                    if (data['code'] > 0) {
                        layer.msg('上架成功!',{icon: 1,time:500},function () {
                            window.parent.location.reload();
                        });
                    }else{
                        layer.msg(data['message'], {icon: 2, time: 1000});
                    }
                }
            })
        });
    }
    /*商品-删除*/
    function goods_del(obj,id){
        layer.confirm('确认要删除商品吗？',function(index){
            //后台处理
            $.ajax({
                type : "post",
                url : "<?php echo url('goods/deleteGoods'); ?>",
                data : { "goods_ids" : id.toString() },
                dataType : "json",
                success : function(data) {
                    if(data["code"] > 0 ){
                        $(obj).parents("tr").remove();
                        layer.msg(data['message'], {icon: 1, time: 1000});
                    }else {
                        layer.msg(data['message'], {icon: 2, time: 1000});
                    }
                }
            });
        });
    }
    /*商品-热卖商品*/
    function goods_re(){
        var id = '';
        $('#tbody input[type=checkbox]:checked').each(function() {
            if (!isNaN($(this).val())) {
                id = $(this).val() + "," + id;
            }
        });
        if (id == '') {
            layer.msg('请选择商品', {icon: 5, time: 1000});
            return false;
        } else {
            id = id.substring(0, id.length - 1);
        }
        $.ajax({
            type : "post",
            url : "<?php echo url('goods/ModifyGoodsRecommend'); ?>",
            data : { "goods_id" : id.toString(),"re":1},
            success : function(data) {
                if(data["code"] > 0 ){
                    layer.msg(data['message'], {icon: 1, time: 1000},function () {
                        window.location.reload();
                    });
                }else {
                    layer.msg(data['message'], {icon: 5, time: 1000});
                }
            }
        })
    }
    /*商品-推荐商品*/
    function goods_tui(){
        var id = '';
        $('#tbody input[type=checkbox]:checked').each(function() {
            if (!isNaN($(this).val())) {
                id = $(this).val() + "," + id;
            }
        });
        if (id == '') {
            layer.msg('请选择商品', {icon: 5, time: 1000});
            return false;
        } else {
            id = id.substring(0, id.length - 1);
        }
        $.ajax({
            type : "post",
            url : "<?php echo url('goods/ModifyGoodsRecommendTui'); ?>",
            data : { "goods_id" : id.toString(),"tui":1},
            success : function(data) {
                if(data["code"] > 0 ){
                    layer.msg(data['message'], {icon: 1, time: 1000},function () {
                        window.location.reload();
                    });
                }else {
                    layer.msg(data['message'], {icon: 5, time: 1000});
                }
            }
        })
    }
    /*商品-新品商品*/
    function goods_new(){
        var id = '';
        $('#tbody input[type=checkbox]:checked').each(function() {
            if (!isNaN($(this).val())) {
                id = $(this).val() + "," + id;
            }
        });
        if (id == '') {
            layer.msg('请选择商品', {icon: 5, time: 1000});
            return false;
        } else {
            id = id.substring(0, id.length - 1);
        }
        $.ajax({
            type : "post",
            url : "<?php echo url('goods/ModifyGoodsRecommendNew'); ?>",
            data : { "goods_id" : id.toString(),"new":1},
            success : function(data) {
                if(data["code"] > 0 ){
                    layer.msg(data['message'], {icon: 1, time: 1000},function () {
                        window.location.reload();
                    });
                }else {
                    layer.msg(data['message'], {icon: 5, time: 1000});
                }
            }
        })
    }
    /*商品-PL删除*/
    function goods_pldel(){
        var id = '';
        $('#tbody input[type=checkbox]:checked').each(function() {
            if (!isNaN($(this).val())) {
                id = $(this).val() + "," + id;
            }
        });
        if (id == '') {
            layer.msg('请选择商品', {icon: 5, time: 1000});
            return false;
        } else {
            id = id.substring(0, id.length - 1);
        }
        layer.confirm('确认要删除商品吗？',function(index){
            //后台处理
            $.ajax({
                type : "post",
                url : "<?php echo url('goods/deleteGoods'); ?>",
                data : { "goods_ids" : id.toString() },
                dataType : "json",
                success : function(data) {
                    if(data["code"] > 0 ){
                        layer.msg(data['message'], {icon: 1, time: 1000},function () {
                            window.location.reload();
                        });
                    }else {
                        layer.msg(data['message'], {icon: 2, time: 1000});
                    }
                }
            });
        });
    }
    function copy_now(id) {
        id='#'+id;
        var check=$(id).attr('data-clipboard-text');
        if(check.length<=0){
            layer.msg("链接信息有误", {icon: 2, time: 1000});
            return false;
        }
        var clipboard=new Clipboard(id);
        clipboard.on('success',function(e){
            layer.msg("链接复制成功", {icon: 1, time: 500});
        });
        clipboard.on('error', function(e) {
            layer.msg("链接信息有误", {icon: 2, time: 1000});
        });
    }
    $("input[name=sort]").change(function(){
        var id = $(this).data("id");
        var sort = $(this).val().trim();
        $.ajax({
            type:"post",
            url:"<?php echo url('goods/ModifyGoodsSort'); ?>",
            data:{'id':id,'sort':sort},
            dataType:"json",
            success: function (data) {
                if(data.code>0){
                    layer.msg('操作成功', {icon: 1, time: 1000},function () {
                        window.location.reload();
                    });
                }else{
                    layer.msg('操作失败', {icon: 2, time: 1000});
                }
            }
        });
    });
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