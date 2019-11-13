<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/order\order_refund_list.html";i:1537249596;s:68:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/base.html";i:1537407274;}*/ ?>
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

    
<style>.goods_info {height:86px; border-top:1px solid #ddd;padding:8px;}
/*	.goods_info {height:78px; line-height: 78px; border-top:1px solid #ddd;padding:8px;}*/
	.goods_info:first-child {border-top:0;}
	.goods_info img { height:70px;width:70px;}
	.tabBar span {background:#fff;}
	.table-bordered {
  border: 1px solid #eeeeee;
}
	.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #eeeeee;
	border-right: 1px solid #eeeeee;
	    vertical-align: middle;
}
	.btn-group button {background:#fff !important;color: #0066cc !important;margin-right:10px;border:0 !important;}
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
        

<div class="Hui-article">

    <article class="cl pd-20">

        <div class="n_tab_line">

            <a href="__CONF_SITE__admin/order/OrderList" class="n_tab_list">退款/退单</a>

            <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px;display: none;" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>

            <div class="cl"></div>

        </div>
<div class="cl pd-5 bg-1 bk-gray mt-20">
        <form class="Huiform" method="post" action="__CONF_SITE__admin/order/OrderRefund" target="_self" style=" padding: 15px;">

            <div class="text-c">

                日期范围：

                <input type="text" onfocus="WdatePicker()" value="<?php echo $star_time; ?>" name="star_time" class="input-text Wdate" style="width:120px;">

                -

                <input type="text" onfocus="WdatePicker()" value="<?php echo $end_time; ?>" name="end_time" class="input-text Wdate" style="width:120px;">

                <input type="hidden" name="order_status" value="<?php echo $order_status; ?>">

                <input type="text" class="input-text" value="<?php echo $order_no; ?>" style="width:250px" placeholder="输入订单号"  name="order_no">

                <button type="submit" class="btn btn-search radius"  name=""><i class="Hui-iconfont">&#xe665;</i> 搜订单</button>

            </div>

        </form>
        
          </div>

        <div id="tab_demo" class="HuiTab" style="margin-top: 15px;">

            <div class="tabBar clearfix">

        <?php if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>

                <span class="current" onclick="location.href='__CONF_SITE__<?php echo $child_menu['url']; ?>';"><?php echo $child_menu['menu_name']; ?></span>

            <?php else: ?>

                <span onclick="location.href='__CONF_SITE__<?php echo $child_menu['url']; ?>';"><?php echo $child_menu['menu_name']; ?></span>

            <?php endif; endforeach; endif; else: echo "" ;endif; ?>

            </div>

        </div>

        <table class="table table-border table-bordered table-hover table-bg">

            <thead>

            <tr class="text-c">

                <th>订单信息</th>

                <th>商品清单</th>

                <th>买家昵称</th>

                <th>收货信息</th>

                <th>订单金额</th>

                <th>订单状态</th>

                <th>操作</th>

            </tr>

            </thead>

            <tbody>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

            <tr class="title-tr" bgcolor="#e4f2ff">

                <td colspan="7">

                    <span>订单编号：<?php echo $vo['order_no']; ?> 交易号：<?php echo $vo['out_trade_no']; ?></span>

                    <span>下单时间：<?php echo $vo['create_time']; ?></span>

                    <?php if($vo['seller_memo']!=''): ?>

                    <a title="查看备注" href="javascript:;" onclick="orderMessage('备注','getOrderSellerMemo?order_id=<?php echo $vo['order_id']; ?>','','340')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe622;</i></a>

                    <?php endif; ?>



                </td>

            </tr>

            <?php $num = count($vo['order_item_list']);?>



            <tr>

                <td>
                <?php if(is_array($vo['order_item_list']) || $vo['order_item_list'] instanceof \think\Collection || $vo['order_item_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['order_item_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$it): $mod = ($i % 2 );++$i;?>
                    <div class="goods_info">
                                <img style="vertical-align: middle;: left" src="<?php echo $it['picture']['img_cover']; ?>">

                                <a href="javascript:;"><?php echo $it['goods_name']; ?></a>
                    </div>
               <?php endforeach; endif; else: echo "" ;endif; ?>
                </td>

                <td style="text-align:center;">
                    <?php if(is_array($vo['order_item_list']) || $vo['order_item_list'] instanceof \think\Collection || $vo['order_item_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['order_item_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$it): $mod = ($i % 2 );++$i;?>
                    <div class="goods_info" style="text-align: center;line-height: 22px; vertical-align: middle; height: 60px;padding-top:18px;">
                        <span><?php echo $it['price']; ?>元</span><br>
<?php echo $it['num']; ?>件</div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </td>

                <td rowspan="1" style="text-align:center">

                    <div class="cell"><?php echo $vo['user_name']; ?><br>

                        <i class="fa fa-television" style="color:#666;"><i class="Hui-iconfont">&#xe696;</i></i></div>

                </td>

                <td rowspan="1" style="text-align:center">

                    <div style="text-align:center;">

                        <span class="expressfee"><?php echo $vo['receiver_name']; ?></span><br>

                        <span class="expressfee"><?php echo $vo['receiver_mobile']; ?></span><br>

                        <span class="expressfee"><?php echo $vo['receiver_province_name']; ?><?php echo $vo['receiver_city_name']; ?><?php echo $vo['receiver_county_name']; ?><?php echo $vo['receiver_address']; ?></span>

                    </div>

                </td>

                <td rowspan="1" style="text-align:center">

                    <div class="cell">

                        <b class="netprice" style="color:#666;"><?php echo $vo['order_money']; ?></b><br>

                        <span class="expressfee">(含快递:<?php echo $vo['shipping_money']; ?>)</span><br>

                        <span class="expressfee">在线支付</span>

                    </div>

                </td>

                <td rowspan="1">

                    <div class="business-status" style="text-align:center"><?php echo $vo['status_name']; ?><br>

                    </div>

                </td>

                <td rowspan="1" style="text-align:center;">

                    <?php if($vo['order_status'] == -1): ?>

                    <a title="删除订单" href="javascript:;" onclick="OrderDel(this,'<?php echo $vo['order_id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>

                    <?php endif; if($vo['order_status'] == 1): ?>

                    <a title="发货" href="javascript:;" onclick="orderDelivery('商品发货','__CONF_SITE__admin/order/orderDelivery&order_id=<?php echo $vo['order_id']; ?>','','340')" class="ml-5" style="text-decoration:none">商品发货</a>

                    <a title="修改收货地址" href="javascript:;" onclick="orderAddress('修改收货地址','__CONF_SITE__admin/order/getOrderUpdateAddress&order_id=<?php echo $vo['order_id']; ?>','','')" class="ml-5" style="text-decoration:none">修改收货地址</a>

                    <?php endif; if($vo['order_status'] == 2): ?>

                    <a title="确认收货" href="javascript:;" onclick="getdelivery('<?php echo $vo['order_id']; ?>')" class="ml-5" style="text-decoration:none">确认收货</a>

                    <?php endif; if($vo['order_status'] == 4): ?>

                    <a title="确认退款" href="javascript:;" onclick="getderefund('<?php echo $vo['order_id']; ?>')" class="ml-5" style="text-decoration:none">确认退款</a>

                    <?php endif; ?>

                    <a title="查看详情" href="__CONF_SITE__admin/order/OrderDetail&order_id=<?php echo $vo['order_id']; ?>" class="ml-5" style="text-decoration:none">查看详情</a>

                    <?php if($vo['seller_memo']==''): ?>

                    <a title="添加备注" href="javascript:;" onclick="orderMessage('备注','__CONF_SITE__admin/order/getOrderSellerMemo&order_id=<?php echo $vo['order_id']; ?>','','340')" class="ml-5" style="text-decoration:none">添加备注</a>

                    <?php endif; ?>

                </td>

            </tr>

            <?php endforeach; endif; else: echo "" ;endif; ?>

            </tbody>

        </table>

    </article>

    <div class="n_page_no">

        <?php echo $page; ?>

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

<script type="text/javascript" src="/public/static/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript">

    /*订单-发货*/

    function orderDelivery(title,url,w,h){

        layer_show(title,url,w,h);

    }

    /*订单-备注*/

    function orderMessage(title,url,w,h){

        layer_show(title,url,w,h);

    }

    /*订单-修改收货地址*/

    function orderAddress(title,url,w,h){

        layer_show(title,url,w,h);

    }

    //订单删除

function OrderDel(obj,id){

    layer.confirm('确认删除这个订单吗？',function(index){

        //此处请求后台程序，下方是成功后的后台处理……

        $.ajax({

            type : "post",

            url : "<?php echo url('order/deleteOrder'); ?>",

            data : {

                "order_id" : id,

            },

            success : function(data) {

                if (data['code'] > 0) {

                    layer.msg('删除成功!',{icon:1,time:1000},function () {

                        window.location.reload();

                    });

                }else{

                    layer.msg('操作失败', {icon: 2, time: 1000});

                }

            }

        })



    });

}

    //确认退款

    function getderefund(order_id){

        var refund_type = "<?php echo $refund_type;?>";
        var title = refund_type == 0 ? "系统未配置微信退款, 需要先手动退款给用户, 确定已退款?" : "系统已配置微信退款, 点击确定此订单款项会立即退回用户微信, 是否确认退款?";

        layer.confirm(title,function(index){

            //此处请求后台程序，下方是成功后的后台处理……

            $.ajax({

                type : "post",

                url : "<?php echo url('order/orderTakeRefund'); ?>",

                data : { "order_id" : order_id },

                success : function(data) {

                    if(data["code"] > 0 ){

                        layer.msg('退款成功', {icon: 1, time: 1000},function () {
                            window.location.reload();
                        });

                    }else {
                        layer.msg(data['message'], {icon: 2, time: 1000});
                    }

                }

            })

        });



    }

    //确认发货

    function getdelivery(order_id){

        layer.confirm('确认发货？',function(index){

            //此处请求后台程序，下方是成功后的后台处理……

            $.ajax({

                type : "post",

                url : "<?php echo url('order/orderTakeDelivery'); ?>",

                data : { "order_id" : order_id },

                success : function(data) {

                    if(data["code"] > 0 ){

                        layer.msg('收货成功', {icon: 1, time: 1000},function () {

                            window.location.reload();

                        });

                    }else {

                        layer.msg('收货失败', {icon: 2, time: 1000});

                    }

                }

            })

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