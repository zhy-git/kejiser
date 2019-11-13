<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/menu\menu_select.html";i:1538541939;}*/ ?>
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

                <a href="javascript:;" onclick="select_menu('<?php echo $m['text']; ?>','<?php echo $m['type']; ?>','<?php echo $m['param']; ?>','<?php echo $m['path']; ?>')">

                    <?php echo $m['text']; ?>

                </a>

            </div>

        </li>

        <?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>

</div>

<script type="text/javascript" src="/public/js/jquery-2.1.1.js"></script>

<script type="text/javascript" src="/public/static/layer/2.4/layer.js"></script>

<script type="text/javascript">

    $(".box").click(function(){
        $('.selectedb').removeClass('selectedb');
        $(this).addClass('selectedb');
    });

    function select_menu(name,type,is_param,path) {

        console.log("select_menu ---------------------");
        console.log(type);
        console.log(is_param);

        switch(is_param)
        {
            case '1':
                window.location.href="__CONF_SITE__admin/menu/menu_select_2&type="+type+"&mod_id=<?php echo $mod_id; ?>&path="+path;
                break;
            case '2':

                if(type == 'phone')
                {
                    layer.prompt({title: '输入电话号码', formType: 0}, function (text, index) {
                        var item = {};
                        item["phone"] = text;
                        item['name'] = '电话';
                        item['key'] =  '4';
                        parent.menu_select(item);
                        parent.layer.closeAll();
                    });

                    return;
                }

                if(type == 'map')
                {
                    layer_open('坐标', '__CONF_SITE__admin/menu/index_select_position','100%', '100%');
                    return;
                }

                var item = {};
                item["url"] = path;
                item['name'] = name;
                item['type'] = type;
                parent.menu_select(item);
                parent.layer.closeAll();
                break;
            case '3':
                layer_open('选择模版','__CONF_SITE__admin/menu/select_mod_all','100%','100%');
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

    //地图坐标回调
    function get_position(lat,lng) {

        var item = {};
        item['name'] = '地图';
        item['lat'] = lat;
        item['lng'] = lng;
        item['key'] =  '5';

        parent.menu_select(item);
        parent.layer.closeAll();
    }

</script>

</body>

</html>

