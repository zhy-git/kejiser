<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/menu\select_mod_all.html";i:1538541931;}*/ ?>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/style.css?v=1.3" />
    <link media="all" href="/public/menu/css/select1.css" type="text/css" rel="stylesheet">
</head>
<body><div style="margin-left: 90px;" id="3D">
    <ul class="hPage-tpls clearfix mgt40 mgb20">

        <li class="fl">
            <div class="showActions myshow btn-tpllist" style="height: 325px;">
                <div class="hPage-tpls-img">
                    <img src="/public/images/1517197247.png" alt="">
                </div>
                <div class="hPage-tpls-overlay" style="display: none;">
                    <div class="hPage-tpls-acitons">

                        <a href="javascript:;" data-url="/yb_shop/pages/product/index" data-name="商品列表" data-type="caregory"  class="btn btn-small" style="margin-right: 40px;">选择</a>
                    </div>
                </div>
            </div>

        </li>
        <li class="fl">
            <div class="showActions myshow btn-tpllist" style="height: 325px;">
                <div class="hPage-tpls-img">
                    <img src="/public/images/1517197255.png" alt="">
                </div>
                <div class="hPage-tpls-overlay" style="display: none;">
                    <div class="hPage-tpls-acitons">

                        <a href="javascript:;" data-url="/yb_shop/pages/caregory/index" data-name="商品列表" data-type="product"  class="btn btn-small" style="margin-right: 40px;">选择</a>
                    </div>
                </div>
            </div>

        </li>

    </ul>
    <div class="n_page_no">
        <?php echo $page; ?>
    </div>
</div>
<script type="text/javascript" src="/public/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="/public/static/layer/2.4/layer.js"></script>
<script>
    $(function(){
        $(".hPage-tpls-overlay").hide();
        $(".showActions").mouseover(function(){
            $(this).find(".hPage-tpls-overlay").show();
        });
        $(".showActions").mouseout(function(){
            $(this).find(".hPage-tpls-overlay").hide();
        });
        $('.btn-tpllist').click(function(){

                    var item = {};

                    item["url"] = $(this).find(".btn-small").attr('data-url');
                    item['name'] = $(this).find(".btn-small").attr('data-name');

                    parent.parent.menu_select(item);
                    parent.parent.layer.closeAll();
        });
    })
</script></body>
</html>
