<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

<head>
    <title>活动流程</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../addons/hm_newdpm/mobimg/index.css?v=20112" />
    <script src="../addons/haoman_base/base/jquery-2.1.4.min.js" type="text/javascript"></script>
    <style type="text/css" id="_zoom"></style>
    <script type="text/javascript" src="../addons/hm_newdpm/mobimg/index.js?v=170424"></script>
    <style type="text/css">
        body{
            /*background-image: url(<?php  echo $bg;?>);*/
            /*background-repeat: repeat;*/
            /*background-size: 100% auto;*/
            /*background-attachment: fixed;*/

        }
        .bbg {
            background-color: #f9f9f9;
            background-image: url(<?php  echo $bg;?>);
            /*对话内容*/
            background-size: cover;background-repeat: no-repeat;
        }
        /*.menulist .menu_item6 {
            border-top: 6px solid rgb(255, 207, 13);
        }*/
        .wrapper {
            width: 100%;
            max-width: 800px;
            min-height: 100%;
            margin: 0 auto;
            /*margin-bottom: 150px;*/
        }
        .menulist div a {
            font-family: -webkit-body;
        }
        
    </style>
  
</head>

<body>
<div class="bbg" style="height: 100%;width: 100%;position: fixed;top: 0px;bottom:0;left: 0px;right: 0px;"></div>

<?php  if($reply['isallowip']!=1) { ?>
<div id="load" style="width: 100%;height: 100%;background: rgba(0,0,0,0.9);z-index: 999999;position: fixed;top: 0px;bottom:
0px;left: 0px;right: 0px;">
    <div id="circle"></div><div id="circle1"></div>
</div>

<script>
    window.onload = function() {
        $("#load").fadeOut(10);
        $("#circle").fadeOut(10);
        $("#circle1").fadeOut(10);
    };
</script>
<?php  } ?>


    <div id="container" >
        <div class="zoom">
           
            <div class="wrapper welcome">
                <div class="companyName" style="padding:30px 0;">
                    <p>欢迎参加</p>
                    <p><?php  echo $reply['mobtitle'];?></p>
                </div>
                <div class="content" >
                    <div class="act_info">
                        <ul>
                            <li>现场流程</li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                    <div class="lc_info">
                        <ul>
                            <?php  if(is_array($lc)) { foreach($lc as $row) { ?>
                            <li>
                                <div class="ilist1"><?php  echo $row['value'];?></div>
                                <div style="position:relative;clear:left;"></div>
                            </li>
                            <?php  } } ?>
                            
                            <div class="clear"></div>
                        </ul>



                          
                    </div>

                   <?php  if($reply['rules']) { ?>
                <!--<a href="<?php  echo $this->createMobileUrl('rules', array('id' => $rid))?>" class="join_nh yellow_btn">规则说明</a>-->
                    <?php  } ?>
                  
                <div style="height:180px;"></div>
                    

                </div>
             
            </div>
        </div>
    </div>
<div class="power-by" style="position: fixed;bottom: 50px;width: 100%;left: 0px;right: 0px;font-size: 12px;text-align: center;color:#EAB387;">
    <div class="copyright fixed"><?php  if(empty($reply['copyright'])) { ?> &copy;<?php  echo $_W['account']['name'];?><?php  } else { ?>&copy;<?php  echo $reply['copyright'];?><?php  } ?></div>
</div>

<!-- <div style="width:100%;height:50px;"></div>
<div class="menulist">
    <div class="menu-wrap">
        <div class="menu-container">
            <div class="menu_item menu_item1"><span></span>
                <a class="success" data-index="1" href="<?php  echo $this->createMobileUrl('messagesindex', array('id' => $rid))?>"><img alt="" src="../addons/hm_newdpm/mobimg/item1.png">
                    <s>发消息</s>
                </a>
            </div>
            <div class="menu_item menu_item6"><span></span>
                <a class="success" data-index="6" href="<?php  echo $this->createMobileUrl('index', array('id' => $rid))?>"><img alt="" src="../addons/hm_newdpm/mobimg/item6.png">
                    <s>流程</s>
                </a>
            </div>

            <div class="menu_item menu_item2"><span></span>
                <a class="success" data-index="5" href="<?php  echo $this->createMobileUrl('go_toupiao', array('id' => $rid))?>"><img alt="" src="../addons/hm_newdpm/mobimg/item2.png?v=42343">
                    <s>投票</s>
                </a>
            </div>

            <div class="menu_item menu_item4"><span></span>
                <a class="success" data-index="3" href="<?php  echo $this->createMobileUrl('qhbIndex', array('id' => $rid))?>"><img alt="" src="../addons/hm_newdpm/mobimg/item4.png">
                    <s>抢红包</s>
                </a>
            </div>
            
            <div class="menu_item menu_item5">
                <a class="success" data-index="4" href="<?php  echo $this->createMobileUrl('mybobing', array('id' => $rid))?>"><img alt="" src="../addons/hm_newdpm/mobimg/item5.png">
                    <s>我的</s>
                </a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div> -->
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript">
    wx.config({
        debug:false,
        appId: '<?php  echo $package["appId"];?>',
        timestamp: '<?php  echo $package["timestamp"];?>',
        nonceStr: '<?php  echo $package["nonceStr"];?>',
        signature: '<?php  echo $package["signature"];?>',
        jsApiList: [
            'getLocation','onMenuShareTimeline','onMenuShareQQ','onMenuShareQZone','onMenuShareAppMessage','onMenuShareWeibo'
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
                        jQuery("#load").fadeOut(10);
                        jQuery("#circle").fadeOut(10);
                        jQuery("#circle1").fadeOut(10);
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
        <?php  if($reply['is_b_share'] == 2) { ?>
        wx.hideOptionMenu();
        <?php  } else { ?>
        wx.showOptionMenu();
        wx.onMenuShareAppMessage(sharedata);
        wx.onMenuShareTimeline(sharedata);
        wx.onMenuShareQQ(sharedata);
        wx.onMenuShareQZone(sharedata);
        wx.onMenuShareWeibo(sharedata);
        <?php  } ?>
    });

</script>

</html>
