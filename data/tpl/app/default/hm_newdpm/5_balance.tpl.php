<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>账户余额</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="../addons/haoman_base/base/sm.min.css">
    <link rel="stylesheet" href="../addons/haoman_base/base/sm-extend.min.css">
    <script type='text/javascript' src='../addons/haoman_base/base/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='../addons/haoman_base/base/sm.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='../addons/haoman_base/base/sm-extend.min.js' charset='utf-8'></script>
</head>
<body>
<div id="page-city-picker" class="page">

    <div class="content">
        <!--管理-->
        <div style="display: block" class="administration">

            <!--提现-->
            <div style="display: block" class="Withdrawals_content">
                <div class="card" style="margin: 0;border-radius:0;background: url('<?php  if($personal['money_bg']) { ?><?php  echo tomedia($personal['money_bg'])?><?php  } else { ?>../addons/hm_newdpm/images/my.jpg<?php  } ?>');background-size: 100% 100%;">
                    <div class="card-content">
                        <div class="card-content-inner" style="color: #eee;">
                            <span style="font-size: 0.8rem;">账户可用余额</span>
                            <div style="margin-top: 1.2rem;font-size: 2.5rem;font-weight: bold;">
                                ￥<?php  echo $nums/100?>元
                            </div>
                            <!-- <span style="font-size: 0.8rem;"></span> -->
                            <div style="margin-top: 0.8rem;font-size: 0.6rem;">
                                <!--历史已提现金额 ￥<?php  echo $fans['split_tx_total'];?>元-->
                                历史已提现金额<?php  echo $txall/100?>(<?php  echo $numx/100?>+<?php  echo $numx2/100?>)元
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-block" style="margin-top: 10px;margin-bottom: 10px;">
                    <ul>

                        <li class="item-content item-link">
                            <div class="item-inner">
                                <div class="item-title">手续费</div>
                                <div class="item-after"><?php  echo $txcc;?>%</div>
                            </div>
                        </li>

                        <!--<li class="item-content item-link">-->
                            <!--<div class="item-inner">-->
                                <!--<div class="item-title">提现中</div>-->
                                <!--<div class="item-after">￥：<?php  echo $numx/100?></div>-->
                            <!--</div>-->
                        <!--</li>-->

                        <li class="item-content item-link">
                            <div class="item-inner">
                                <div class="item-title">预计到账</div>
                                <div class="item-after">￥<?php  echo $nums2/100?></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-50 inset" style="padding: 0 10px;margin-top: 20px;"><a href="javascript:void(0)" id="butt" class="button button-big button-fill button-success">确认申请</a></div>

                    <!--当前门店-->
            <div style="clear: both;display: block" class="inset thisstore">
                <div class="content-block-title" style="padding: 0;margin-top:0px;font-weight: 700;height: 30px;line-height: 30px;">最近申请记录</div>
                <div class="list-block inset" style="border-radius:6px; ">
                    <ul id="datalist">
                        <?php  if(is_array($txlog)) { foreach($txlog as $row) { ?>
                        <li>
                            <div class="buttons-tab">
                                <a href="#tab1" class="tab-link button"><?php  echo date("m-d H:i:s",$row['createtime'])?></a>
                                <a href="#tab2" class="tab-link button">￥<?php  echo sprintf("%1.2f",$row['awardname']/100)?></a>
                                <a href="#tab3" class="tab-link button"><?php  if($row['status'] ==0) { ?>待审核<?php  } else if($row['status'] == 1) { ?>已提现<?php  } else { ?>未通过<?php  } ?></a>
                            </div>
                        </li>

<?php  } } ?>
                    </ul>
                    <div style="text-align: center;padding: 1.2rem;" class=""><a class="external" href="<?php  echo $this->createMobileUrl('tixian_more', array('rid' => $rid,id=>$fans['id']))?>">更多提现记录>>></a></div>
                </div>
            </div>

            </div>
        </div>

    </div>
</div>
<div class="defeat" style="width: 80%;height: 36px;background: rgba(0,0,0,0.6);border-radius: 18px;position: fixed;bottom: 60px;left:50%;margin-left:-40%;line-height:36px;z-index: 999999;text-align: center;display: none;color: #fff">兑奖码错误，请重新输入</div>
<div class="succeed" style="width: 80%;height: 36px;background:rgba(0,0,0,0.6);border-radius: 18px;position: fixed;bottom: 60px;left:50%;margin-left:-40%;line-height:36px;z-index: 999999;text-align: center;display: none;color: #fff;">兑奖成功，谢谢参与</div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>

<script type="text/javascript">
    var click = false;


    $("#butt").click(function () {
        if (click) {
            return false;
        } else {
            click = true;
            <?php  if($nums < 100||$nums<$num) { ?>
            alert('您余额还未达到可提现的金额！！');
            click = false;
            return;
            <?php  } else { ?>
            $("#butt").attr('disabled', true);
            $("#butt").hide();
            var content = 1;
            var submitData1 = {
                content: content,
            };

            $.post('<?php  echo $this->createMobileUrl('application', array('rid' => $rid,'from_user'=>$page_from_user))?>', submitData1, function (data) {

                if (data.success == 1) {
                    $(".succeed").show();
                    $(".succeed").html(data.msg);
                    setTimeout(function () {
                        $(".succeed").toggle();
                        location.href = "<?php  echo $this->createMobileUrl('balance', array('rid' => $rid,'id'=>$fans['id']))?>";
                    }, 2000)


                } else {
                    $(".defeat").html(data.msg);
                    $(".defeat").show();

                    setTimeout(function () {
                        $(".defeat").toggle();
                        location.href = "<?php  echo $this->createMobileUrl('balance', array('rid' => $rid,'id'=>$fans['id']))?>";
                    }, 2000)
                }

            }, "json")
            <?php  } ?>

        }
    })

</script>


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