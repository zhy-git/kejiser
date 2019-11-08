<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>我的订单</title>
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
    

    </style>
</head>
<body>
<div class="page">
    <header class="bar bar-nav" style="background: #fff;border-bottom: 1px #eee solid;">
        <a class="button button-link button-nav pull-left back" href="/demos">
            <span class="icon icon-left"></span>
        </a>
        <h1 class='title' style="font-weight: bold;font-size: 20px;">订单管理</h1>
    </header>


            <!--人员管理-->

            <div class="content">

                <div class="tabs" style="margin-top: 0.6rem;margin-bottom: 46px;">
                <!--tab1开始代码-->

                        <div id="tab1" class="tab active">
                            <?php  if(empty($order)) { ?>
                            <div>
                                <img style="width: 60%;margin-left: 20%;margin-top: 20%;" src="../addons/hm_newdpm/images/nolist.png">
                                <p style="text-align: center;margin-top: -2rem;">亲，您没有订单。</p>
                            </div>
                            <?php  } else { ?>
                          <?php  if(is_array($order)) { foreach($order as $row) { ?>
                            <!--全部-->
                            <a href="#">
                           <div class="list-block media-list" style="background: #fff">
                                <div class="item-content">
                                  <div class="item-inner">
                                    <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;border-bottom: 1px #eee solid">
                                      <div class="item-title">订单号：<?php  echo $row['transid'];?></div>
                                        <div class="item-after" style="font-size: 0.6rem;color: #ddd"><?php  echo date('m/d H:i',$row['createtime'])?></div>
                                    </div>
                                    <div class="" style="height: auto;border-bottom: 1px #eee solid;padding-top: 0.5rem;">
                                       <?php  if(is_array($row['ordergoods'])) { foreach($row['ordergoods'] as $roww) { ?>
                                      <div class="item-title" style="display: block;width: 100%;margin: 0 0 0.5rem 0;padding: 0" >
                                          <div style="float: left;">
                                              <img style="width: 3rem;height:3rem;vertical-align: top" src="<?php  if($roww['thumb']) { ?><?php  echo tomedia($roww['thumb'])?><?php  } else { ?>../addons/hm_newdpm/images/item8.jpg<?php  } ?>" >
                                              <div style="margin-left: 10px;display: inline-block">
                                                  <span><?php  echo $roww['shop_name'];?></span>
                                                   <br>
                                                  <?php  if($roww['give_type']!=0) { ?>
                                                  <?php  if($roww['give_type']==1) { ?>
                                                  <span style="font-size: 12px;color: #ff0000"><?php  echo $roww['give_note'];?></span>
                                                  <?php  } else { ?>
                                                  <span style="font-size: 12px;color: #ff0000">满<?php  echo $roww['full_money'];?>送<?php  echo $roww['seng_money'];?>霸屏金额</span>
                                                  <?php  } ?>
                                                  <?php  } ?>

                                              </div>

                                          </div>

                                          <div style="float: right;text-align: right">
                                              <span style="font-weight: bold;color: #FF7F00 ">￥<?php  echo $roww['price'];?></span>
                                              <br />
                                              <br />
                                              <span>x<?php  echo $roww['number'];?></span>
                                          </div>
                                          <div style="clear: both"></div>
                                      </div>
                                       <?php  } } ?>
                                    </div>
                                    <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;">
                                      <div class="item-title">订单状态</div>
                                            <?php  if($row['status']==2) { ?>
                                            <div class="item-after" style=""><a style="width: 3.8rem;height: 2rem;line-height: 2rem;margin-top: 0.5rem;" href="javascript:void(0)" class="button  button-fill button-warning">待确认</a></div>
                                            <?php  } else if($row['status']==1) { ?>
                                            <div class="item-after" style=""><a style="width: 3.8rem;height: 2rem;line-height: 2rem;margin-top: 0.5rem;" href="javascript:void(0)" class="button   button-primary">未付款</a></div>
                                           <div class="item-after"><a style="width: 5.3rem;height: 2rem;line-height: 2rem;margin-top: 0.5rem;" href="javascript:void(0);" data-id="<?php  echo $row['id'];?>" class="button button-big button-fill button-danger dele_order" external>删除</a></div>
                                        <!--<div class="item-after"><a style="width: 2.6rem;height: 2rem;line-height: 2rem;margin-top: 0.5rem;" href="<?php  echo $this->createMobileUrl('my_order', array('orderid' => $row['id'], 'op' => 'delete', 'transid'=>$row['transid']))?>" class="button  button-fill  button-danger" onclick="return confirm('点击确认删除前，请确认您要删除该订单。确定删除吗？'); ">删除</a></div>-->
                                            <?php  } else if($row['status']==3) { ?>
                                            <div class="item-after" style=""><a style="width: 3.8rem;height: 2rem;line-height: 2rem;margin-top: 0.5rem;" href="javascript:void(0)" class="button   button-Default">已完成</a></div>
                                            <div class="item-after"><a style="width: 5.3rem;height: 2rem;line-height: 2rem;margin-top: 0.5rem;" href="javascript:void(0);" data-id="<?php  echo $row['id'];?>" class="button button-big button-fill button-danger dele_order" external>删除</a></div>
                                            <?php  } ?>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            </a>
                           <?php  } } ?>
                            <?php  } ?>

                        </div>

                <!--tab1结束代码-->



                </div>
            </div>



         

           

            


</div>





<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script type='text/javascript' src='../addons/haoman_base/base/sm.min.js' charset='utf-8'></script>
<script>
    $(".dele_order").click(function () {

        var orderid = $(this).data("id");

        var r = confirm("确认删除该订单?");
        if( r == true){
            var submitData = {
                orderid: orderid,
                op:"delete"
            }
            $.post("<?php  echo $this->createMobileUrl('my_order', array('rid' => $rid,id=>$fans['id']))?>", submitData, function(idata) {

                if (idata.success == 1) {
                    alert(idata.msg);
                    location.href="<?php  echo $this->createMobileUrl('my_order', array('rid' => $rid,id=>$fans['id']))?>";
                } else {

                    alert(idata.msg);
                }
            },"json");

        }
    })
</script>
<!-- 微信分享设置 -->
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript">
    // JS分享借用权限开始

    // JS分享借用权限结束

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