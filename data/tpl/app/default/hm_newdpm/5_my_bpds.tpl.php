<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>霸屏/打赏</title>
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
        <a class="button button-link button-nav pull-left back" href="<?php  echo $this->createMobileUrl('mybobing', array('id' => $rid))?>">
            <span class="icon icon-left"></span>
        </a>
        <h1 class='title' style="font-weight: bold;font-size: 20px;">霸屏/打赏</h1>
    </header>


            <!--人员管理-->

            <div class="content">

                <div class="tabs" style="margin-top: 0.6rem;margin-bottom: 47px;">
                <!--tab1开始代码-->

                        <div id="tab1" class="tab active">
                            <?php  if(empty($order)) { ?>
                            <div>
                                <img style="width: 60%;margin-left: 20%;margin-top: 20%;" src="../addons/hm_newdpm/images/nolist.png">
                                <p style="text-align: center;margin-top: -2rem;">亲，没有任何记录。</p>
                            </div>
                            <?php  } ?>

                            <!--全部-->
                            <?php  if($hb_money) { ?>
                            <a href="#">
                                <div class="list-block media-list" style="background: #fff">
                                    <div class="item-content">
                                        <div class="item-inner">
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;border-bottom: 1px #eee solid">
                                                <div class="item-title">发红包总金额：￥<?php  echo $hb_money;?></div>
                                            </div>
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;">
                                                <div class="item-title">发红包次数：<?php  echo $hb_num;?>次</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php  } ?>
                            <?php  if($bp_money) { ?>
                            <a href="#">
                           <div class="list-block media-list" style="background: #fff">
                                <div class="item-content">
                                  <div class="item-inner">
                                    <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;border-bottom: 1px #eee solid">
                                      <div class="item-title">霸屏总金额：￥<?php  echo $bp_money;?></div>
                                    </div>
                                      <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;border-bottom: 1px #eee solid">
                                          <div class="item-title">霸屏总时长：<?php  echo $bp_time;?>秒</div>
                                      </div>
                                      <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;">
                                          <div class="item-title">霸屏次数：<?php  echo $bp_num;?>次</div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            </a>
                            <?php  } ?>
                            <?php  if($ds_money) { ?>
                            <a href="#">
                                <div class="list-block media-list" style="background: #fff">
                                    <div class="item-content">
                                        <div class="item-inner">
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;border-bottom: 1px #eee solid">
                                                <div class="item-title">打赏总金额：￥<?php  echo $ds_money;?></div>
                                            </div>
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;border-bottom: 1px #eee solid">
                                                <div class="item-title">打赏总时长：<?php  echo $ds_time;?>秒</div>
                                            </div>
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;">
                                                <div class="item-title">打赏次数：<?php  echo $ds_num;?>次</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php  } ?>
                            <a href="#" style="display: none">
                                <div class="list-block media-list" style="background: #fff">
                                    <div class="item-content">
                                        <div class="item-inner">
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;border-bottom: 1px #eee solid">
                                                <div class="item-title">表白总金额：￥1.00</div>
                                            </div>
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;border-bottom: 1px #eee solid">
                                                <div class="item-title">表白总时长：800秒</div>
                                            </div>
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;">
                                                <div class="item-title">表白次数：34次</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" style="display: none">
                                <div class="list-block media-list" style="background: #fff">
                                    <div class="item-content">
                                        <div class="item-inner">
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;border-bottom: 1px #eee solid">
                                                <div class="item-title">送礼总金额：￥1.00</div>
                                            </div>
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;border-bottom: 1px #eee solid">
                                                <div class="item-title">送礼总时长：800秒</div>
                                            </div>
                                            <div class="item-title-row" style="height: 2.5rem;line-height:2.5rem;">
                                                <div class="item-title">送礼次数：34次</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

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