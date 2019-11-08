<?php defined('IN_IA') or exit('Access Denied');?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>投票</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link href="../addons/hm_newdpm/img9/vote.css?v=201611242170424" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        body{
            background-image: url(<?php  echo $bg;?>);
            background-repeat: no-repeat;
            background-size: 100% auto;
        }
    </style>
</head>
<body>
<div id="header">
    <div id="logo"><img src="<?php  if(empty($reply['tptop_url'])) { ?>../addons/hm_newdpm/img9/tpbanner.png<?php  } else { ?><?php  echo tomedia($reply['tptop_url'])?><?php  } ?>"></div>
    <div id="titles">大屏幕投票</div>
    <div id="time"><li>时间：<?php  echo date('m月d日 H:i',$reply['tp_starttime']);?> 至 <?php  echo date('m月d日 H:i',$reply['tp_endtime']);?></li></div>
</div>
<div id="main" style="margin-bottom: 60px;">
    <div id="search"><div id="ss"><input type="text" id="st" placeholder="编号/标题"></div><div id="sb">查询</div><div id="pm"><a style="color: #fff;" href="<?php  echo $this->createMobileUrl("vote_show", array('id' => $rid))?>">排名</a></div></div>
    <div id="list" style="margin-bottom: 75px;">
        <?php  if(is_array($toupiao)) { foreach($toupiao as $row) { ?>
        <div class="ml">
            <div class="sh">
                <li class="n">编号：<?php  echo $row['number'];?></li>
                <li class="p"><img src="<?php  if(empty($row['img'])) { ?>../addons/hm_newdpm/img9/0a74c45edd77be27dafb22f6846ba61c.jpg<?php  } else { ?><?php  echo tomedia($row['img'])?><?php  } ?>"></li>
                <li class="na"><?php  echo $row['description'];?></li>
                <li class="no"><?php  echo $row['name'];?></li>
                <li class="v" id="get_num_<?php  echo $row['id'];?>">票数：<?php  echo $row['get_num'];?></li>
                <li class="a" id="<?php  echo $row['id'];?>">投一票</li>
            </div>
        </div>
       <?php  } } ?>
    </div>
</div>

<div id="float_bg"></div>
<div class="zoom">
    <div class="pinch-zoom"><div class="show_zoom"></div></div>
    <div class="title_zoom"></div>
</div>
<div class="result"></div>

<input id="starttime" type="hidden" name="starttime" value="<?php  echo $reply['tp_starttime'];?>"/>
<input id="endtime" type="hidden" name="endtime" value="<?php  echo $reply['tp_endtime'];?>"/>
<input id="subscribe"  type="hidden"  mane="subscribe" value="1">
<input id="openid" type="hidden" name="openid" value="<?php  echo $from_user;?>"/>
<input id="latitude" name="latitude" type="hidden" value="">
<input id="longitude" name="longitude" type="hidden" value="">
<input id="cid" name="cid" type="hidden" value="0">
<script type="text/javascript" src="../addons/haoman_base/base/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../addons/hm_newdpm/img9/vote.min.js"></script>
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script>
    var vote_save = "<?php  echo $this->createMobileUrl("vote_save", array('rid' => $rid))?>";
    var vote_list = "<?php  echo $this->createMobileUrl("vote_list", array('rid' => $rid))?>";
</script>


<script>
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

    wx.error(function (res) {
        //alert(res.errMsg);
    });
</script>
<div class="power-by" style="position: fixed;bottom: 50px;width: 100%;left: 0px;right: 0px;font-size: 12px;text-align: center;color:#EAB387;">
    <div class="copyright fixed"><?php  if(empty($reply['copyright'])) { ?> &copy;<?php  echo $_W['account']['name'];?><?php  } else { ?>&copy;<?php  echo $reply['copyright'];?><?php  } ?></div>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>