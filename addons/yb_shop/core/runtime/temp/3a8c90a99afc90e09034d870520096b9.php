<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/menu\menu_select_2.html";i:1539316500;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/style.css?v=1.3" />
    <link media="all" href="/public/menu/css/article.css" type="text/css" rel="stylesheet">
    <style>
        td a:hover {background-color: rgb(13, 163, 249);color:#fff;border:1px solid rgb(13, 163, 249);}
    </style>
</head>

<body style="background-color: rgb(255, 255, 255);">



<div class="jbox-container" style="float: left; padding: 0px;">

    <ul  class="gagp-goodslist" style="padding: 10px; width: 750px;">

        <!-- 栏目分类 -->

        <table class="wxtables">

            <?php if($type == 'bargain_info' || $type == 'pintuan_info'): ?>
            <colgroup>
                <col><col><col width="30%"><col><col><col><col>
            </colgroup>
            <?php endif; ?>

            <thead>

            <tr style="background-color: rgb(13, 163, 249);">
                <td>ID</td>

                <?php if($type != 'applets' && $type != 'web_page' && $type != 'my_order'): ?>
                <td>缩略图</td>
                <?php endif; ?>

                <td>名称</td>

                <?php if($type == 'applets'): ?>
                <td>AppID</td>
                <?php endif; if($type == 'web_page'): ?>
                <td>url</td>
                <?php endif; if($type == 'bargain_info' || $type == 'pintuan_info'): ?>
                <td>原价</td>
                <?php endif; if($type == 'bargain_info'): ?>
                <td>最低价格</td>
                <?php endif; if($type == 'pintuan_info'): ?>
                <td>团购价</td>
                <?php endif; if($type != 'my_order'): ?>
                <td>发布时间</td>
                <?php endif; ?>

                <td style="text-align: center;">操作</td>

            </tr>

            </thead>

            <tbody>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

            <tr>

                <td><p><?php echo $vo['id']; ?></p></td>

                <?php if($type != 'applets' && $type != 'web_page' && $type != 'my_order'): ?>
                <td>
                    <p>
                    <?php if($vo['img'] == 'none'): ?>
                    <img src="/public/goods/img/default_goods_image_240.gif" alt="" height="50px" width="50px">
                    <?php else: ?>
                    <img src="<?php echo $vo['img']; ?>" alt="" height="50px" width="50px">
                    <?php endif; ?>
                    </p>
                </td>
                <?php endif; ?>

                <td><p><?php echo $vo['name']; ?></p></td>

                <?php if($type == 'applets'): ?>
                <td><?php echo $vo['appid']; ?></td>
                <?php endif; if($type == 'web_page'): ?>
                <td><?php echo $vo['url']; ?></td>
                <?php endif; if($type == 'bargain_info' || $type == 'pintuan_info'): ?>
                <td><?php echo $vo['price']; ?></td>
                <?php endif; if($type == 'bargain_info'): ?>
                <td><?php echo $vo['lowest_price']; ?></td>
                <?php endif; if($type == 'pintuan_info'): ?>
                <td><?php echo $vo['gprice']; ?></td>
                <?php endif; if($type != 'my_order'): ?>
                <td><p><?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></p></td>
                <?php endif; ?>
                <td style="text-align: center;">

                    <a class="btn selecta" data-path="<?php echo $vo['path']; ?>" data-url="<?php echo $vo['url']; ?>" data-appid="<?php echo $vo['appid']; ?>"  data-money="<?php echo $vo['price']; ?>" data-img_path="<?php echo $vo['img']; ?>" data-short_title="<?php echo $vo['introduction']; ?>" data-value="<?php echo $vo['id']; ?>" data-type="<?php echo $type; ?>" data-name="<?php echo $vo['name']; ?>">选择</a>

                </td>

            </tr>

            <?php endforeach; endif; else: echo "" ;endif; ?>

            </tbody>

        </table>

        <div class="n_page_no">

            <?php echo $page; ?>

        </div>

    </ul>

</div>

<div style="height:80px; line-height: 80px;color:#fff; clear: both;">壹佰小程序占位</div>

<div class="sel_fun_opt" style="position: fixed; bottom: 0px;background: #fff;height: 60px;width:100%;border-top:1px solid #eeeeee;padding-top:20px;">

    <div class="sure" onclick="">确定</div>

    <div class="cancel" onclick="">返回</div>

</div>

<script type="text/javascript" src="/public/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="/public/static/layer/2.4/layer.js"></script>
<script type="text/javascript">

    $(".selecta").click(function(){
        if ($(this).hasClass('selectedb')) {
        }else{
            $(this).addClass('selectedb');
            $(this).html('已选择');
            $(this).parent().parent().siblings().find('.selecta').removeClass('selectedb');
            $(this).parent().parent().siblings().find('.selecta').html('选择');
        }
    });

    $(".sure").click(function(){

        if (typeof($('.selectedb').attr('data-name'))=="undefined"){
            layer.msg('请选择内容',{icon:5,time:1000});
            return false;
        }

        var item = {};

        item['name'] = $('.selectedb').attr('data-name');
        item['type'] = $('.selectedb').attr('data-type');
        item['appid'] = $('.selectedb').attr('data-appid');
        item['url'] = $('.selectedb').attr('data-url');
        item['imgurl'] = $('.selectedb').attr('data-img_path');
        item['price'] = $('.selectedb').attr('data-money');
        item['description'] = $('.selectedb').attr('data-short_title');
        item['key'] = '<?php echo $type_key; ?>';
        item['param'] = $('.selectedb').attr('data-value');
        item['path'] = $('.selectedb').attr('data-path');

        var path = '<?php echo $path; ?>';

        console.log(path);

        var id = $('.selectedb').attr('data-value');

        //3 跳转网页
        if(item['key'] != '3')
        {
            var url = path+"?id="+id;
            item['url'] = url;
        }
        else
        {
            item['url'] = encodeURIComponent(item['url']);
            var url = path+"?id="+id+"&name="+item['name']+"&url="+item['url'];
            item['url'] = url;
        }

        for(var k in item)
        {
            if(item[k].length == 0){delete(item[k]);}
        }

        console.log(item);

        parent.menu_select(item);
        var index = parent.layer.getFrameIndex(window.name);
        parent.layer.close(index);
    })

    $(".cancel").click(function(){

        javascript:history.go(-1);

    });

</script>



</body>

</html>

