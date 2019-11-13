<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/menu\article_test.html";i:1537249633;}*/ ?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">



    <meta charset="UTF-8">

    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/style.css" />

    <link media="all" href="/public/menu/css/article.css" type="text/css" rel="stylesheet">
<style>
	td a:hover {background-color: rgb(13, 163, 249);color:#fff;border:1px solid rgb(13, 163, 249);}
	</style>
</head>

<body style="background-color: rgb(255, 255, 255);">



<div class="jbox-container" style="float: left; padding: 0px;width: 100%">
    <?php if($type=='article_info'): ?>
    <ul class="gagp-goodslist" style="display: block;padding: 10px; width: 750px;">

        <!-- 栏目分类 -->

        <table class="wxtables">

            <colgroup>

                <col width="10%"><col width="15%"><col width="20%"><col width="25%"><col width="15%">

            </colgroup>

            <thead>

            <tr style="background-color: rgb(13, 163, 249);">

                <td>ID</td>

                <td>图片</td>

                <td>名称</td>

                <td>发布时间</td>

                <td>外链</td>

                <td>操作</td>

            </tr>

            </thead>

            <tbody>

            <?php if(is_array($art) || $art instanceof \think\Collection || $art instanceof \think\Paginator): $i = 0; $__LIST__ = $art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                <tr>

                    <td><p><?php echo $vo['article_id']; ?></p></td>

                    <td><p><img src="<?php echo $vo['image']; ?>" alt="" height="50px" width="50px"></p></td>

                    <td><p><?php echo $vo['title']; ?></p></td>

                    <td><p><?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></p></td>
                    <td><div style="width:200px;overflow: hidden;"><p><?php echo $vo['link']; ?></p></div></td>

                    <td style="text-align: center;">

                        <a style="width:30px" class="btn selecta"  data-link="<?php echo $vo['link']; ?>" data-img_path="<?php echo $vo['image']; ?>" data-short_title="<?php echo $vo['short_title']; ?>" data-a="<?php echo $url['path']; ?>" data-b="<?php echo $url['path_prex']; ?>" data-c="<?php echo $url['file']; ?>" data-value="<?php echo $vo['article_id']; ?>" data-type="<?php echo $type; ?>" data-imgurl="<?php echo $url['path']; ?>/<?php echo $url['path_prex']; ?><?php echo $this_id+1; ?>/<?php echo $url['file']; ?>" data-name="<?php echo $vo['title']; ?>">选择</a>

                    </td>

                </tr>

            <?php endforeach; endif; else: echo "" ;endif; ?>

            </tbody>

        </table>
    <div class="n_page_no">
        <?php echo $page; ?>
    </div>
    </ul>
    <?php endif; if($type=='article'): ?>
    <ul  style="display: block;padding: 10px; width: 750px;"  class="gagp-goodslist">

        <!-- 栏目分类 -->

        <table class="wxtables">

            <colgroup>

                <col width="10%"><col width="15%"><col width="20%"><col width="25%">

            </colgroup>

            <thead>

            <tr style="background-color: rgb(13, 163, 249);">

                <td>ID</td>

                <td>名称</td>

                <td>图标</td>

                <td>发布时间</td>

                <td style="text-align: center;">操作</td>

            </tr>

            </thead>

            <tbody>

            <?php if(is_array($art) || $art instanceof \think\Collection || $art instanceof \think\Paginator): $i = 0; $__LIST__ = $art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

            <tr>

                <td><p><?php echo $vo['class_id']; ?></p></td>

                <td><p><?php echo $vo['name']; ?></p></td>

                <td><p><img src="<?php echo $vo['class_img']; ?>" alt="" height="50px" width="50px"></p></td>

                <td><p><?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></p></td>

                <td style="text-align: center;">

                    <a class="btn selecta"  data-value="<?php echo $vo['class_id']; ?>" data-type="<?php echo $type; ?>" data-a="<?php echo $url['path']; ?>" data-b="<?php echo $url['path_prex']; ?>" data-c="<?php echo $url['file']; ?>" data-imgurl="<?php echo $url['path']; ?>/<?php echo $url['path_prex']; ?>/<?php echo $url['file']; ?>" data-name="<?php echo $vo['name']; ?>">选择</a>

                </td>

            </tr>

            <?php endforeach; endif; else: echo "" ;endif; ?>

            </tbody>

        </table>

    <div class="n_page_no">
        <?php echo $page; ?>
    </div>

    </ul>
    <?php endif; ?>

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

        if ("<?php echo $new; ?>"=='0'){

            item["imgurl"] = $('.selectedb').attr('data-imgurl');

            item['name'] = $('.selectedb').attr('data-name');

            item['param'] = $('.selectedb').attr('data-value');

            item['type'] = $('.selectedb').attr('data-type');

            item['short_title'] = $('.selectedb').attr('data-short_title');

            item['img_path'] = $('.selectedb').attr('data-img_path');

            item['link'] = $('.selectedb').attr('data-link');

        }else {

            //item["imgurl"] = 0;

            item['name'] = $('.selectedb').attr('data-name');

            item['param'] = $('.selectedb').attr('data-value');

            item['type'] = $('.selectedb').attr('data-type');

        }

        var a=$('.selectedb').attr('data-a');

        var b=$('.selectedb').attr('data-b');

        var c=$('.selectedb').attr('data-c');

        //console.log(item);

        parent.get_images('<?php echo $this_id; ?>',item,a,b,c,parent.$("#goods_select_id").val());

       var index = parent.layer.getFrameIndex(window.name);

        parent.layer.close(index);



    })

    $(".cancel").click(function(){

        javascript:history.go(-1);

    });

</script>



</body>

</html>

