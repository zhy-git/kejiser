<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/menu\index_select_menu.html";i:1537249614;}*/ ?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">



    <meta charset="UTF-8">

    <title>链接</title>



    <link media="all" href="/public/menu/css/index_1.css" type="text/css" rel="stylesheet">
<style>
	.contlist {width:20%;float:left; height: 52px;line-height: 52px;text-align: center;}
	.contlist .box a {text-align:center;display: block;height:40px; line-height: 40px; border:1px solid #e8e8e8;color:#333;margin:5px;border-radius: 4px;}
	.contlist .box {}
	</style>
</head>

<body>

<div class="metv5box" style="padding:20px;">

    <ul class="columnlist" id="test">

        <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>

        <li class="contlist">

            <div class="box" data-name="<?php echo $m['text']; ?>">

                <a href="javascript:;" onclick="select_menu('<?php echo $m['type']; ?>','<?php echo $m['is_param']; ?>')">
                
                <?php echo $m['text']; ?>

                </a>

            </div>

        </li>

        <?php endforeach; endif; else: echo "" ;endif; ?>

        <li class="contlist">

            <div class="box" data-name="<?php echo $m['text']; ?>">

                <a href="javascript:;" onclick="select_menu('caregory','1')">
                        商品分类
                </a>

            </div>

        </li>
        <li class="contlist">

            <div class="box">

                <a href="javascript:;" onclick="select_menu('form','1')">
                    万能表单
                </a>

            </div>

        </li>
        <li class="contlist">

            <div class="box">

                <a href="javascript:;" onclick="select_menu('applets','1')">
                    小程序
                </a>

            </div>

        </li>
        <li class="contlist">

            <div class="box">

                <a href="javascript:;" onclick="select_menu('web_page','1')">
                    网页
                </a>

            </div>

        </li>

        <li class="contlist">

            <div class="box">

                <a href="javascript:;" onclick="select_menu_new('book_list')">
                    预约列表
                </a>

            </div>

        </li>

        <li class="contlist">

            <div class="box">

                <a href="javascript:;" onclick="select_menu_new('bargain')">
                    砍价列表
                </a>

            </div>

        </li>
        <li class="contlist">

            <div class="box">

                <a href="javascript:;" onclick="select_menu('bargain_info','1')">
                    砍价详情
                </a>

            </div>

        </li>

        <li class="contlist">

            <div class="box">

                <a href="javascript:;" onclick="select_menu_new('pintuan')">
                    拼团
                </a>

            </div>

        </li>

        <li class="contlist">

            <div class="box">

                <a href="javascript:;" onclick="select_menu_new('pintuan_list')">
                    拼团列表
                </a>

            </div>

        </li>

        <li class="contlist">

            <div class="box">

                <a href="javascript:;" onclick="select_menu('pintuan_info','1')">
                    拼团详情
                </a>

            </div>

        </li>

        <li class="contlist">

            <div class="box">

                <a href="javascript:;" onclick="select_menu_new('fenxiao_index')">
                    分销中心
                </a>

            </div>

        </li>

        <li class="contlist">
            <div class="box">
                <a href="javascript:;" onclick="get_view_phone(this)" data-imgurl="" data-key="call_phone" data-name="打电话">
                    打电话
                </a>
            </div>
        </li>

        <li class="contlist">
            <div class="box">
                <a href="javascript:;" onclick="get_view_phone(this)" data-imgurl="" data-key="map" data-name="地图">
                    地图
                </a>
            </div>
        </li>

    </ul>

</div>

<script type="text/javascript" src="/public/js/jquery-2.1.1.js"></script>

<script type="text/javascript" src="/public/static/layer/2.4/layer.js"></script>

<script type="text/javascript">

    $(".box").click(function(){
        $('.selectedb').removeClass('selectedb');
        $(this).addClass('selectedb');
    });

    function select_menu_new(type) {
        var item={};
        if (type=='book_list'){
            item["imgurl"] =  "pages/book_list/index";
            item['name'] = '预约列表';
            item['type'] = type;
        }

        if (type=='bargain'){
            item["imgurl"] =  "pages/kanjia/index/index";
            item['name'] = '砍价';
            item['type'] = type;
        }

        if (type=='pintuan'){
            item["imgurl"] =  "pages/pintuan/pages/index/index";
            item['name'] = '拼团';
            item['type'] = type;
        }

        if (type=='pintuan_list'){
            item["imgurl"] =  "pages/pintuan/pages/index/list";
            item['name'] = '拼团列表';
            item['type'] = type;
        }

        if (type=='fenxiao_index'){
            item["imgurl"] =  "pages/fenxiao/pages/index/index";
            item['name'] = '分销中心';
            item['type'] = type;
        }

        parent.get_not_attr('<?php echo $this_id; ?>',item);
        parent.layer.closeAll();

    }
    function select_menu(type,is_param) {

        switch(is_param)

        {
            case '1':
                $.ajax({
                    type : "post",
                    url : "__CONF_SITE__admin/menu/selece_this_not",
                    data : {
                        'type':type,
                        'mod_id':"<?php echo $mod_id; ?>",
                        'this_id':"<?php echo $this_id; ?>",
                    },
                    success : function(data) {
                        console.log(data);
                        var arr = Object.keys(data);
                        var len = arr.length;
                        console.log(len);
                        if (len>3){
                            layer_open('选择模版','__CONF_SITE__admin/menu/select_mod_all&this_id=<?php echo $this_id; ?>&mod_id=<?php echo $mod_id; ?>&type='+type,'100%','100%');
                        }else{
                            window.location.href="__CONF_SITE__admin/menu/selece_this&type="+type+"&mod_id=<?php echo $mod_id; ?>&this_id="+data['this_id'];
                        }
                    }
                });
                break;
            case '2':

                $.ajax({
                    type : "post",
                    url : "__CONF_SITE__admin/menu/selece_this_not",
                    data : {
                        'type':type,
                        'mod_id':"<?php echo $mod_id; ?>",
                        'this_id':"<?php echo $this_id; ?>",
                    },
                    success : function(data) {
                        console.log(data[0]);
                        var arr = Object.keys(data);
                        var len = arr.length;
                         if (len>3){
                             layer_open('选择模版','__CONF_SITE__admin/menu/select_mod_all&this_id=<?php echo $this_id; ?>&mod_id=<?php echo $mod_id; ?>&type='+type,'100%','100%');
                         }
                         else
                         {
                             var item = {};
                             if (data[0]['menu']=='article'){
                                 item["imgurl"] =  data[0]['path']+"/"+data[0]['path_prex']+"/"+data[0]['file'];
                             }else {
                                 item["imgurl"] =  data[0]['path']+"/"+data[0]['file'];
                             }
                             item['name'] = data['name'];
                             item['type'] = type;
                             parent.get_not_attr('<?php echo $this_id; ?>',item);
                             parent.layer.closeAll();
                         }

                    }

                });

                break;

        }

    }

    /*菜单模版*/

    function layer_open(title,url,w,h){

        layer.open({

            type: 2,

            area: [w, h],

            fix: false, //不固定

            maxmin: true,

            shade:0.4,

            title: title,

            content: url,

            scrollbar:false

        });

    }

    //打电话组件
    function get_view_phone(obj) {
        var key =  $(obj).attr('data-key');
        if (key=='call_phone'){
            layer.prompt({title: '输入电话号码', formType: 0}, function (text, index) {
                var item = {};
                item["phone"] = text;
                item['name'] = '电话';
                item['ident'] = 4;
                item['key'] =  key;
                parent.get_not_attr('<?php echo $this_id; ?>',item);
                parent.layer.closeAll();
            });
        }
        if (key=='map'){
            layer_open('坐标', '__CONF_SITE__admin/menu/index_select_position','100%', '100%');
        }
    }

    function get_position(lat,lng) {
        var item = {};
        item['name'] = '地图';
        item['lat'] = lat;
        item['lng'] = lng;
        item['ident'] = 5;
        item['key'] =  'map';
        parent.get_not_attr('<?php echo $this_id; ?>',item);
        parent.layer.closeAll();
    }

</script>

</body>

</html>

