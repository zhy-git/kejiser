<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"/www/wwwroot/ceshi.ahwiyun.cn/addons/yb_shop/core//template/index/index.html";i:1542937320;s:69:"/www/wwwroot/ceshi.ahwiyun.cn/addons/yb_shop/core//template/base.html";i:1544515647;}*/ ?>
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
    <script src="/public/js/all.js"></script>
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
    
<link rel="stylesheet" type="text/css" href="/public/css/dashboard.css">
<link rel="stylesheet" type="text/css" href="/public/css/yb_index.css?v=1.0" />

    <style>.new_logo .logo-expanded {color:#fff;font-size:14px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;width:100px; display: block;margin-left: 10px;background: #000;border-radius: 4px; height: 30px; line-height: 30px; text-align: center;padding:0 5px;margin-top:15px;margin-bottom: 5px;} .input-text {margin-bottom:0 !important;} .top_menu { height:50px; line-height: 50px; background: #fff;width:calc(100% - 200px);position: fixed;z-index: 1;top:0;left:200px;border-bottom:1px solid #eeeeee;} .top_menu a {display:block;float:right;height:50px; line-height: 50px;width:100px; text-align: center;border-left:1px solid #eeeeee;} .clear {clear:both;} .btn {margin-bottom:0;} body {line-height: 1.6 !important; overflow-x: hidden;} .left_cur a i:before ,.left_cur ul li .cur_s .title ,.left_cur .cur_tit ,li.left_cur > a:before {color:#444 !important;} .left_cur {    background: rgba(55, 87, 109, 0.05);} .logo-env .new_logo {padding-left:36px;} .logo-env .new_logo .wq_logo {margin-left:-36px;width:28px;height: 28px;float: left;border-radius: 50%;} .logo-env .new_logo:after {clear:both;} .tool_box a span ,.tool_box a:hover span {color:#666 !important;} .left_btn_box {padding:3px 10px 0 10px;justify-content:center;display: flex;} .left_btn_box a {display:block;height: 28px; line-height: 26px;width:80px;color: #fff; text-align: center;    border-radius: 2px;} .left_btn_box a.btn_li01 {background:rgb(25, 200, 91);border-bottom-right-radius: 0; border-top-right-radius: 0;} .left_btn_box a.btn_li02 {background:rgb(0, 193, 222);border-bottom-left-radius: 0; border-top-left-radius: 0;} .left_btn_box a.btn_li01:hover {background:rgb(21, 186, 93);} .left_btn_box a.btn_li02:hover {background:rgb(2, 182, 209);} .wq_bottom_btn {position:fixed;bottom:0;left:230px;width:100%;background: #fff;justify-content:center;display: flex; height: 80px; line-height: 80px;} .sidebar-menu {min-width: 122px !important;width: 122px !important; overflow: hidden;background: #fff !important;} .main-menu-scroll{height: calc(100% - 130px);overflow-x: hidden;width: 200px;overflow-y: scroll;} .main-menu-scroll::-webkit-scrollbar {display: none;} .new_left_menu {width:86px; height: 100%;display: table-cell;position: relative;background: #253350;    z-index: 1;} .sidebar-menu.fixed .sidebar-menu-inner {left:86px !important;border-right: 1px solid #eeeeee;} .f_name_box {display: block; height: 50px; line-height: 50px;} .f_name_box.cur_name {background: rgba(255,255,255,1) !important} .new_left_menu a {text-decoration:none;} .new_left_menu a span {color:#b3b3b3;font-size:13px;} .new_left_menu a i {margin-left:17px;display:inline-block;color:#b3b3b3;margin-right: 5px;} .new_left_menu a.cur_name i ,.new_left_menu a.cur_name .big_class_name {color: #00a0e9;} .main-menu-scroll {width:122px !important;} /*		.sidebar-menu .main-menu a {color: #444 !important;background: rgba(55, 87, 109, 0.05);}*/ .sidebar-menu .main-menu a {color: #444 !important;padding-left:20px !important;} .sidebar-menu .main-menu .cur_s a ,.sidebar-menu .main-menu .cur_s a:visited ,.sidebar-menu .main-menu .left_cur ul li.cur_s a>span{ background: rgba(255, 255, 255, 1) !important;color: #00a0e9 !important;border-right: 1px solid #eeeeee;} .title.cur_tit {color:#444 !important;font-weight: bold;} /*		.left_cur {background:#fff !important;}*/ .cur_s .sidebar-menu .main-menu a {background:#fff !important;} .sidebar-menu .main-menu ul li a {padding-left:20px !important;} /*		.left_cur ul li a {background:#fff !important;}*/ .left_cur ul li {background:#fff !important;} .sidebar-menu .main-menu {margin-top:0 !important;} .top_big_class_name { height: 50px;line-height: 50px; text-align: center;overflow: hidden;border-bottom: 1px solid;white-space: nowrap;text-overflow: ellipsis;border-bottom: 1px solid #eeeeee;font-size:13px;} .new_logo {    display: block !important;} .sidebar-menu .main-menu .left_cur ul li a>span {color:#777777 !important;} .sidebar-menu .main-menu li.has-sub>a:before {content: '\f0d7' !important;} .main-menu-scroll {height:100% !important;} .page-container {position:absolute;padding-top: 40px;box-sizing: border-box;} .new_page_top {height:44px;width:100%;position: fixed;background:#253350;border-bottom: 1px solid #2f3d5a;z-index: 999999;} .sidebar-menu.fixed .sidebar-menu-inner {top:44px !important;} .new_logo {width:30px;height:30px;float: left;margin-top:7px;margin-left:18px;border-radius: 50%;border:2px solid rgba(255,255,255,0.5);overflow:hidden;} .new_logo img {width:26px;height:26px;} .app_name {color: #fff;font-size: 18px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;width: 155px;display: block; height:40px; line-height: 40px;margin-top:2px;margin-left:8px;float:left;} .new_page_top a  ,.new_page_top a:visited {color:#fff;text-decoration: none;} .new_page_top a:hover {color: #b3b3b3;text-decoration: none;} .sidebar-menu.fixed .sidebar-menu-inner {position:fixed !important;} .new_top_right {float:right;width:180px;height:44px; line-height: 44px;} .logout_box {width:153px; height: 44px;background:url(../../yb_shop/core/public/images/logout_icon.png) right center no-repeat;float:left;font-size:13px;margin-left:12px;} .left_menu_box {position:fixed;width:86px;top:44px;left:0;} .back_sys {width:100px; text-align: center;color:#fff;float:left;} </style>
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
        
<style>
	.page-container .main-content {height: calc(100% - 51px) !important;    background: #f2f2f2 !important;}
	.new_index_tit {height:37px; line-height:37px;}
	.new_tit_box {border-left:5px solid #3bd98c;height:19px;font-size:16px; font-weight: bold;color:#4fa2ff;margin-top:18px;padding-left:10px;line-height:19px;}
	.index_icon_box { height:67px;line-height:67px;}
	.goods-state ul li{justify-content:center;display: flex;}
	.index_info_box {width:60px;}
</style>
	<div class="Hui-article">
		<article class="cl pd-20" style="padding-top:0;">
			<div class="new_index_tit">
				<div class="new_tit_box">销售简报</div>
			</div>
			<?php if($use!=1): ?>
			<div class="statistical">
				<ul>
					<li style="width: 15%;background: linear-gradient(to top right, #d86eec, #ae67f5);border-radius: 8px;margin-right:2% !important;" class="order-amount-statistics">
						<header>
							<i class="ns-icon-base i-order-amount"></i>
							<span>订单总金额(元)</span>
						</header>
						<p class="js-order-amount"><?php echo (isset($order_pay) && ($order_pay !== '')?$order_pay:0.00); ?></p>
					</li>
					<li style="width: 15%;background: linear-gradient(to top right, #5facfe, #6993ff);border-radius: 8px;margin-right:2% !important;" class="focus-number-statistics">
						<header>
							<i class="ns-icon-base i-focus-number"></i>
							<span>会员人数(个)</span>
						</header>
						<p class="js-weixin-fans-count"><?php echo (isset($user_sum) && ($user_sum !== '')?$user_sum:0); ?></p>
					</li>
					<li style="width: 15%;background: linear-gradient(to top right, #fe8268, #ff758f);border-radius: 8px;margin-right:2% !important;" class="goods-release-statistics">
						<header>
							<i class="ns-icon-base i-goods-release"></i>
							<span>商品发布(个)</span>
						</header>
						<p class="js-goods-release-count"><?php echo (isset($goods_sum) && ($goods_sum !== '')?$goods_sum:0); ?></p>
					</li>
					<li style="width: 15%;background: linear-gradient(to top right, #33c8c4, #1caace);border-radius: 8px;margin-right:2% !important;" class="order-total-statistics">
						<header>
							<i class="ns-icon-base i-order-total"></i>
							<span>订单总数(笔)</span>
						</header>
						<p class="js-order-total"><?php echo (isset($order_sum) && ($order_sum !== '')?$order_sum:0); ?></p>
					</li>
					<li style="width: 15%;background: linear-gradient(to top right, #d870ed, #af68f6);border-radius: 8px;margin-right:2% !important;" class="month-sales-statistics">
						<header>
							<i class="ns-icon-base i-month-sales"></i>
							<span>本月订单(笔)</span>
						</header>
						<p class="js-month-sales"><?php echo (isset($order_month) && ($order_month !== '')?$order_month:0); ?></p>
					</li>
					<li style="width: 15%;background: linear-gradient(to top right, #60abfe, #6c8cff);border-radius: 8px;" class="completed-transaction-statistics">
						<header>
							<i class="ns-icon-base i-completed-transaction"></i>
							<span>已完成交易(笔)</span>
						</header>
						<p class="js-order-finish-count"><?php echo (isset($order_complete) && ($order_complete !== '')?$order_complete:0); ?></p>
					</li>
				</ul>
			</div>
			<div class="new_index_tit">
				<div class="new_tit_box">近期售出：交易中的订单</div>
			</div>
			<div class="goods-prompt" style="border-radius: 6px !important; width:100% !important;">
				<!--<div class="subtitle">-->
					<!--<img src="/public/images/green_list.png" /><label>近期售出：<span>交易中的订单</span></label>-->
				<!--</div>-->
				<div class="goods-state a-line order" style="height: 135px;padding-top: 30px;">
					<ul>
						<li onclick="location.href='__CONF_SITE__admin/order/orderlist?status=0';" style="border-right:1px solid #eee;"><div class="index_icon_box"><img src="__CONF_URL__public/images/index_order_icon01.jpg"></div><div class="index_info_box"><h4 class="daifukuan" style="font-size:32px;margin-bottom:0 !important;"><?php echo (isset($dzf) && ($dzf !== '')?$dzf:0); ?></h4>待支付</div></li>
						<li onclick="location.href='__CONF_SITE__admin/order/orderlist?status=1';" style="border-right:1px solid #eee;"><div class="index_icon_box"><img src="__CONF_URL__public/images/index_order_icon02.jpg"></div><div class="index_info_box"><h4 class="daifahuo" style="font-size:32px;margin-bottom:0 !important;"><?php echo (isset($dfh) && ($dfh !== '')?$dfh:0); ?></h4>待发货</div></li>
						<li onclick="location.href='__CONF_SITE__admin/order/orderlist?status=2';" style="border-right:1px solid #eee;"><div class="index_icon_box"><img src="__CONF_URL__public/images/index_order_icon03.jpg"></div><div class="index_info_box"><h4 class="yifahuo" style="font-size:32px;margin-bottom:0 !important;"><?php echo (isset($yfh) && ($yfh !== '')?$yfh:0); ?></h4>已发货</div></li>
						<li onclick="location.href='__CONF_SITE__admin/order/orderlist?status=3';" style="border-right:1px solid #eee;"><div class="index_icon_box"><img src="__CONF_URL__public/images/index_order_icon04.jpg"></div><div class="index_info_box"><h4 class="yishouhuo" style="font-size:32px;margin-bottom:0 !important;"><?php echo (isset($yqs) && ($yqs !== '')?$yqs:0); ?></h4>已签收</div></li>
						<li onclick="location.href='__CONF_SITE__admin/order/orderlist?status=-1';"><div class="index_icon_box"><img src="__CONF_URL__public/images/index_order_icon05.jpg"></div><div class="index_info_box"><h4 class="tuikuanzhong" style="font-size:32px;margin-bottom:0 !important;"><?php echo (isset($yqx) && ($yqx !== '')?$yqx:0); ?></h4>已取消</div></li>
					</ul>
				</div>
			</div>
			<?php endif; ?>
			<br><br><br><br><br><br><br><br>
			<div class="count-box">
				<div class="main-content" id="mainContent" style="width: 1505px;border-left:0 !important;">
					<div id="container" data-highcharts-chart="0">
						<div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 100%; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: &amp; quot; Lucida Grande&amp;quot; , &amp; quot; Lucida Sans Unicode&amp;quot; , Verdana , Arial, Helvetica, sans-serif; font-size: 12px;"></div>
					</div>
				</div>
			</div>
		</article>
	</div>
<script src="/public/js/highcharts.js"></script>
<script>
    var time = [1+"日",2+"日",3+"日",4+"日",5+"日",6+"日",7+"日",8+"日",9+"日",10+"日",11+"日",12+"日",13+"日",14+"日",15+"日",16+"日",17+"日",18+"日",19+"日",20+"日",21+"日",22+"日",23+"日",24+"日",25+"日",26+"日",27+"日",28+"日",29+"日",30+"日"];
    var data = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    $(function(){
        var widn = $('.goods-state').width();
        $('#mainContent').css('width', widn + 10);
        Chart = new Highcharts.Chart("container",{
            "xAxis" : {
                "categories" : time
            },
            "legend" : {
                "enabled" : false
            },
            "series" : [ {
                "name" : "下单量",
                "data" : data
            } ],
            "title" : {
                "text" : "<b>下单量<\/b>",
                "x" : -20
            },
            "chart" : {
                "type" : "line"
            },
            "colors" : [ "#058DC7", "#ED561B", "#8bbc21",
                "#0d233a" ],
            "credits" : {
                "enabled" : false
            },
            "exporting" : {
                "enabled" : false
            },
            "yAxis" : {
                "title" : {
                    "text" : "下单量"
                }
            }
        });
        $.ajax({
            type : "post",
            url : "__CONF_SITE__admin/count/OrderCount",
            success : function(data) {
                Chart.update({
                    xAxis : {
                        categories : data[0]
                    },
                    series : [ {
                        name : "下单量",
                        data : data[1]
                    }]
                });
                $("#order_num").html(data[2]);
                $("#order_money").html(data[3]+"元");
            }
        })
    });
</script>
 <footer class="footer" style="background: #FFFFFF;height: 25px;margin-top: -5px;padding-top: 10px;line-height: 25px;">
        <p><?php echo $copyright['content']; ?></p>
    </footer>

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