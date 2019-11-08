<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <!--<link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/images/main.css?v=222">-->
    <!--<link rel="stylesheet" href="../addons/hm_newdpm/mobimg/dropload.min.css?v=20161124170424" />-->
    <title>我的奖品</title>
    <style type="text/css" id="_zoom"></style>
    <style type="text/css">
        *{margin: 0;padding: 0;}
    html,body{}
    .power-by{ font-size:0.8rem; text-align:center; line-height:20px; color:#EAB387;}
    .pui_clear{border-radius: 50%;width: 100px;height: 100px;position: relative;left: 50%;margin-left: -60px;top: 5px;margin-bottom: 15px;}
    .ranking_table {width: 100%;margin:0;border: none;padding: 0;margin-bottom: 45px;}
    .ranking_table tbody tr {border-bottom: 1px dashed #2b9443;width: 100%;padding: 0;margin: 0;color: #fede2d;}
    .ranking_table tr td {display: inline-block;text-align: center;width: 25%;font-size: 1.0em;padding: 0.6em 0;overflow: hidden;white-space: nowrap;margin: 0;text-overflow: ellipsis;}
    body{background-attachment:fixed;background-color: #c40001;}
    /*.menulist .menu_item5 {
        border-top: 6px solid rgb(255, 207, 13);
    }
    .menulist div a img {
        margin-bottom: 2px;
    }*/
    </style>
</head>

<body>
    <div class="page_lz">

        <div class="pui_user userinfo" style="">
           <img src="<?php  if($personal['prize_bg']) { ?><?php  echo tomedia($personal['prize_bg'])?><?php  } else { ?>../addons/hm_newdpm/images/my.jpg<?php  } ?>" style="width: 100%">
        </div>

        <div class="tabless">
            <table class="ranking_table">
                <thead></thead>
                <tbody id="loading" style="">
                    <tr style="background: rgba(0,0,0,0.2);color: #fff">
                        <td style="width:60%;">奖品</td>
                        <td style="width:25%;">时间</td>
                        <td style="width:15%">状态</td>
                    </tr>
                    <?php  if(is_array($mybobing)) { foreach($mybobing as $row) { ?>
                    <tr style="font-size: 12px;">
                      <td style="width: 60%"><?php  if($row['turntable'] == 1) { ?>[抽奖]<?php  } ?><?php  if($row['turntable'] == 2) { ?>[抢红包<?php  echo $row['hbpici'];?>]<?php  } ?>
                      <?php  echo $row['awardname'];?><?php  if(!empty($row['credit'])) { ?>(金额:<?php  echo $row['credit']/100?>)<?php  } ?><?php  if(!empty($row['jifen'])) { ?>(<?php  echo $row['jifen']?>分)<?php  } ?></td>
                      <td style="width:25%;"><?php  echo date('m/d H:i',$row['createtime'])?></td>
                        <td style="width: 15%"><strong><?php  if($row['prizetype']==2&&$row['status']!=2) { ?><button class="btn btn-success duijiang" data-id="<?php  echo $row['id'];?>" data-djtitle="<?php  echo $row['title'];?>" style="background: #d9534f;color: #fff;height: 20px;border: none;padding: 4px 5px;">兑奖</button><?php  } else if($row['status']==1) { ?>未兑奖<?php  } else { ?>已兑奖<?php  } ?></strong></td>
                    </tr>
                   <?php  } } ?>
                    <?php  if(is_array($hb_award)) { foreach($hb_award as $row) { ?>
                    <tr style="font-size: 12px;">
                        <td style="width: 60%">聊天抢红包(金额:<?php  echo $row['credit']?>)</td>
                        <td style="width:25%;"><?php  echo date('m/d H:i',$row['createtime'])?></td>
                        <td style="width: 15%"><strong><?php  if($row['status']==1) { ?>未兑奖<?php  } else { ?>已下发<?php  } ?></strong></td>
                    </tr>
                    <?php  } } ?>
                </tbody>
            </table>
        </div>
        <?php  if(empty($mybobing)&&empty($hb_award)) { ?>
        <div class="help" style="width: 100%;text-align: center;margin-top: 10px;color: #999">暂无数据...</div>
        <?php  } ?>
   
      
    </div>
    <!--兑奖密码-->

    <div class="mask" style="z-index: 999999999998;position: fixed;top: 0px;left: 0px;right: 0px;bottom: 0px;background: rgba(0,0,0,0.95);display: none;width: 100%;height: 100%">
        <div style="z-index: 999999;width:80% ;margin-left:10%;margin-top: 25%;text-align: center;background: rgba(255, 255, 255, 0.6);display: block;border-radius: 3px;"class="point">

            <input type="number" placeholder="请输入后台设置的兑奖密码" style="background: #fff;height: 30px;border: none;width: 80%;border-radius: 2px;margin-top: 30px;<?php  if($reply['password']==0) { ?>display: none<?php  } ?>" class="numx">

            <input type="button" id="btn0" value="确定兑奖" style="margin-top: 20px;height:30px;width: 80px;border: none;border-radius: 3px;margin-right: 10px;color: #333;margin-bottom: 10px;">
        </div>
    </div>

    <div class="defeat" style="width: 80%;height: 36px;background: rgba(255,255,255,0.6);border-radius: 18px;position: fixed;bottom: 60px;left:50%;margin-left:-40%;line-height:36px;z-index: 999999999999;text-align: center;display: none;color: #000">兑奖码错误，请重新输入</div>
    <div class="succeed" style="width: 80%;height: 36px;background:rgba(255,255,255,0.6);border-radius: 18px;position: fixed;bottom: 60px;left:50%;margin-left:-40%;line-height:36px;z-index: 999999999999;text-align: center;display: none;color: #000;">兑奖成功，谢谢参与</div>

    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script src="../addons/haoman_base/base/jquery-2.1.4.min.js" type="text/javascript"></script>


<script type="text/javascript">

    $(document).ready(function(){
        //       提现申请
        var click = false;





        $(".duijiang").bind("click", function () {
            $(".mask").show();
            $(".point").show();
            $num = $(this).data("id");
            // $("#djtitle").html("您的兑奖码<br>"+num);
        });

        $("#btn0").on("click", function () {

            var submitData = {
                num:$num,
                inputval:$(".numx").val(),
            };

            $.post('<?php  echo $this->createMobileUrl('duijiang', array('rid' => $rid,'from_user'=>$page_from_user))?>', submitData, function(data) {
                // alert($num);
                if (data.success == 1) {

                    $(".mask").hide();
                    $(".point").hide();
                    $(".succeed").show();
                    setTimeout(function(){
                        $(".succeed").toggle();
                        location.href="<?php  echo $this->createMobileUrl('my_prizes', array('rid' => $rid,'id'=>$fans['id']))?>";
                    },1000)
                } else {


                    $(".defeat").show();

                    setTimeout(function(){
                        $(".defeat").toggle();
                        $(".numx").val("").focus();
                    },1000)
                }
            },"json")

        })

        // $("#btn0").on("click", function () {
        //     $(".mask").hide();
        //     $(".point").hide();
        // })
        $("#btn1").click(function(){
            $(".mask").hide();
            $(".point").hide();
        })
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
