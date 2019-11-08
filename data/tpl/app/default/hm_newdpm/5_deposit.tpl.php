<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>我的寄存</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="../addons/haoman_base/base/sm.min.css">
    <script type='text/javascript' src='../addons/haoman_base/base/zepto.min.js' charset='utf-8'></script>

    <style type="text/css">

        .page.page-current, .page-group.page-current {
            overflow: auto;
        }
        .list-block {
            margin: 0 0 0.5rem 0;
            font-size: 0.7rem;
        }
        .list-block .item-text {
            line-height: 2.1rem;
        }
        .list-block .item-title{
            color: #4f4145;
        }
        .list-block .subtitle{
            color: #f00b0d;
        }
        .list-block.media-list .item-title {
            font-weight: normal;
        }

        .list-block .item-after {
            max-height: 3.4rem;
        }
        .fixbottom{
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            padding-top: 0.5rem;
            font-size: 0.7rem;
            text-align: center;
            background-color: #6dbdc4;
            position: absolute;
            bottom: 6.5rem;
            right: 1rem;
            z-index: 99999;
        }

    </style>
</head>
<body>
<div class="page">
    <header class="bar bar-nav" style="background: #fff;border-bottom: 1px #eee solid;">
        <a class="button button-link button-nav pull-left back" href="<?php  echo $this->createMobileUrl('mybobing', array('id' => $rid))?>">
            <span class="icon icon-left"></span>
        </a>
        <h1 class='title' style="font-weight: bold;font-size: 20px;">寄存管理</h1>
    </header>


            <!--人员管理-->

            <div class="content" style="margin-bottom: 45px;">
                <?php  if(empty($order)) { ?>
                <div>
                    <img style="width: 60%;margin-left: 20%;margin-top: 20%;" src="../addons/hm_newdpm/images/nolist.png">
                    <p style="text-align: center;margin-top: -2rem;">亲，您没有物品寄存。</p>
                </div>
                <?php  } else { ?>
                <?php  if(is_array($order)) { foreach($order as $row) { ?>
                <div class="card">
                    <div class="card-header" >寄存单号:<span style="font-size: 0.6rem;color: #666"><?php  echo $row['orderid'];?></span></div>
                    <div class="card-content">
                        <div class="list-block media-list">
                            <ul>
                                <li class="item-content">
                                    <div class="item-media" onclick="is_show(this)">
                                        <img src="<?php  if($row['pic']) { ?><?php  echo tomedia($row['pic'])?><?php  } else { ?>../addons/hm_newdpm/images/item8.jpg<?php  } ?>" width="88">
                                    </div>
                                    <div class="item-inner">

                                            <div class="card-content" style="padding: 0;margin: 0;">
                                                <div class="card-content-inner" style="padding: 0;margin: 0;">
                                                    <?php  echo $row['message'];?>
                                                </div>
                                            </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php  if($row['status']==2||$row['status']==3) { ?>
                        <span>取出时间：<?php  echo date('m/d H:i',$row['closetime'])?></span>
                        <?php  } else { ?>
                        <span>寄存时间：<?php  echo date('m/d H:i',$row['createtime'])?></span>
                        <?php  } ?>
                        <?php  if($row['status']==0) { ?>
                        <span><a style="width: 3.8rem;height: 2rem;line-height: 2rem;margin-top: 0.5rem;" href="javascript:void(0)" class="button  button-fill button-warning ">待确认</a></span>
                        <?php  } else if($row['status']==1) { ?>
                        <span><a style="width: 3.8rem;height: 2rem;line-height: 2rem;margin-top: 0.5rem;" href="javascript:void(0)" class="button  button-fill button-primary duihuan" data-id="<?php  echo $row['id'];?>">取出</a></span>
                       <?php  } else if($row['status']==2) { ?>
                        <span><a style="width: 3.8rem;height: 2rem;line-height: 2rem;margin-top: 0.5rem;" href="javascript:void(0)" class="button  button-fill button-Default songda" data-id="<?php  echo $row['id'];?>">送达</a></span>
                       <?php  } else if($row['status']==3) { ?>
                        <span><a style="width: 3.8rem;height: 2rem;line-height: 2rem;margin-top: 0.5rem;" href="javascript:void(0)" class="button  button-fill button-danger dele_order" data-id="<?php  echo $row['id'];?>">删除</a></span>
                        <?php  } ?>
                    </div>
                </div>
                <?php  } } ?>
                <?php  } ?>
            </div>

</div>

<div style="display: none;width: 100%;height: 100%;background-color: rgba(0,0,0,0.6);z-index: 9999999999999;position: fixed;top: 0px;bottom: 0px;right: 0px;left: 0px;" class="depositBox" onclick="$(this).hide()">
    <img src="" style="width: 80%;margin-left: 10%;margin-top: 5%">
</div>

<div style="width: 100%;height: 100%;position: fixed;top: 0px;bottom: 0px;background-color: rgba(0,0,0,0.59);z-index:9999999999912;display: none" class="choose_address">
    <div style="width: 80%;margin-left: 10%;margin-top: 55%;background-color: #fff;border-radius: 8px;max-height: 220px;padding-bottom: 5%">
        <div style="width: 100%;height: 44px;text-align: center">
            <input type="text" placeholder="请输入您的位置" style="width: 80%;margin-top: 20px;height: 44px;line-height: 44px;" name="address" class="address">
            <input type="hidden" value="" name="duihuan">
       </div>
        <input type="hidden" class="address2" value="0">
        <div class="content-block" style="margin-bottom: 20px">
            <div class="row">
                <div class="col-50"><a href="javascript:void(0)" class="button button-big button-fill button-danger is_cannel" >取消</a></div>
                <div class="col-50"><a href="javascript:void(0)" class="button button-big button-fill button-success is_goods">确定</a></div>
            </div>
        </div>
    </div>
</div>

<div class="fixbottom " id="pop_window"><a style="color: #fff;" href="<?php  echo $this->createMobileUrl('add_deposit', array('rid' => $rid,'id'=>$fans['id']))?>" class="external">物品<br>寄存</a></div>


<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script type='text/javascript' src='../addons/haoman_base/base/sm.min.js' charset='utf-8'></script>
<script>

    function is_show(e) {
        var i=$(e);
        $('.depositBox').find("img").attr("src", $(e).find("img").attr("src"));
        $('.depositBox').show();
    }

    $(".is_cannel").click(function () {
        $("input[name=address]").val("");
        $("input[name=duihuan]").val("");
        $(".choose_address").hide();
    })
   $(".duihuan").click(function () {
       var id=$(this).data('id')
       $("input[name=duihuan]").val(id);
       $(".choose_address").show();
   })

    $(".is_goods").click(function () {

        var orderid = $("input[name=duihuan]").val();

        var comnet = $("input[name=address]").val();

        if(orderid==''){
            $.alert('参数错误');
            return;
        }
        if(comnet==''){
            $.alert('位置不能为空');
            return;
        }

        var r = confirm("确定要领取该寄存吗?");
        if( r == true){
            $(".choose_address").hide();
            $.showIndicator();
            var submitData = {
                orderid: orderid,
                comnet:comnet,
                op:'1'
            }
            $.post("<?php  echo $this->createMobileUrl('deposit', array('rid' => $rid,id=>$fans['id']))?>", submitData, function(idata) {
                $.hideIndicator();
                if (idata.success == 1) {
                    alert(idata.msg);
                    location.href="<?php  echo $this->createMobileUrl('deposit', array('rid' => $rid,id=>$fans['id']))?>";
                } else {

                    alert(idata.msg);
                }
            },"json");

        }
    })


    $(".songda").click(function () {

        var orderid = $(this).data("id");

        var r = confirm("确认物品都送达了?");
        if( r == true){
            $.showIndicator();
            var submitData = {
                orderid: orderid,
                op:"3"
            }
            $.post("<?php  echo $this->createMobileUrl('deposit', array('rid' => $rid,id=>$fans['id']))?>", submitData, function(idata) {
                $.hideIndicator();
                if (idata.success == 1) {
                    alert(idata.msg);
                    location.href="<?php  echo $this->createMobileUrl('deposit', array('rid' => $rid,id=>$fans['id']))?>";
                } else {

                    alert(idata.msg);
                }
            },"json");

        }
    })

    $(".dele_order").click(function () {

        var orderid = $(this).data("id");

        var r = confirm("确认删除该订单?");
        if( r == true){
            $.showIndicator();
            var submitData = {
                orderid: orderid,
                op:"2"
            }
            $.post("<?php  echo $this->createMobileUrl('deposit', array('rid' => $rid,id=>$fans['id']))?>", submitData, function(idata) {
                $.hideIndicator();
                if (idata.success == 1) {
                    alert(idata.msg);
                    location.href="<?php  echo $this->createMobileUrl('deposit', array('rid' => $rid,id=>$fans['id']))?>";
                } else {

                    alert(idata.msg);
                }
            },"json");

        }
    })
</script>
<!-- 微信设置 -->
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript">

    wx.config({
        debug:false,
        appId: '<?php  echo $package["appId"];?>',
        timestamp: '<?php  echo $package["timestamp"];?>',
        nonceStr: '<?php  echo $package["nonceStr"];?>',
        signature: '<?php  echo $package["signature"];?>',
        jsApiList: [
            'getLocation', <?php  if($reply['share_type'] != 2) { ?>'onMenuShareTimeline','onMenuShareQQ','onMenuShareQZone','onMenuShareAppMessage','onMenuShareWeibo'<?php  } ?>
    ]
    });
    var sharedata = {
        "imgUrl" : "<?php  echo $shareimg;?>",
        "link" : "<?php  echo $sharelink;?>",
        "desc" : "<?php  echo $sharedesc;?>",
        "title" : "<?php  echo $sharetitle;?>"
    };

    wx.ready(function () {
        <?php  if($reply['isallowip']==1) { ?>
        wx.getLocation({
            type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
            success: function (res) {

                var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
                var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
                var speed = res.speed; // 速度，以米/每秒计
                var accuracy = res.accuracy; // 位置精度



                var submitData = {
                    lat: latitude,
                    lon: longitude,
                    lbsip: "<?php  echo $reply['allowip'];?>"
                };


                $.post('<?php  echo $this->createMobileUrl('getlbs',array('id' => $rid))?>', submitData, function(idata) {

                    if (idata.success == 1) {

                    } else {
                        alert(idata.msg);
                        location.href = "<?php  echo $this->createMobileUrl('other', array('id' => $rid,'type'=>2))?>";

                    }
                },"json");

            },
            fail: function () {
                alert("获取位置失败,请打开GPS功能！");
                location.href = "<?php  echo $this->createMobileUrl('index', array('id' => $rid))?>";

            }
        });
        <?php  } ?>

        wx.hideOptionMenu();
    });

</script>
    </html>