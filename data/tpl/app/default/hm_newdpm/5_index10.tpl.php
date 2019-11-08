<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>摇一摇</title>
    <link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/img10/m_style.css?v=4423844">
    <script type="text/javascript" src="../addons/haoman_base/base/jquery-2.1.4.min.js?v=1464423844"></script>
    <style type="text/css">
        .bg-img{
            background: url(<?php  echo $bg;?>) no-repeat #3d1522;
            background-size: 100%;
        }
    </style>
</head>

<body class="bg-rose-red bg-img">
    <div class="main">
		 <div class="progress">
	      <span id="progress" class="red" style="width: <?php  echo $progress;?>%;">
	      <!-- <span id="pronum">0%</span> -->
	      </span>
	    </div>
    	
        <div class="red-paper-wrap">
            <img class="red-paper-img " src="<?php  echo $yyybgs;?>" width="85%" />
        </div>

        <div class="btn" style="margin-bottom: 90px;">
            <a href="javascript:;" id="my_reward">我的排名</a>
            <a href="javascript:;" id="rule" <?php  if($progress < 100) { ?>style="display: none;" <?php  } ?>>下一轮</a>
        </div>
    </div>
    <div class="tc-window">
        <div id="Integral" class="tc" style="display: none;">
            <div class="tc-content">
                <img class="close" src="../addons/hm_newdpm/img10/close.png" width="20" />
                <!-- <div class="tc-title paddingTop10">
                    <span class="font-size20" id="score_tip_content"></span>
                </div> -->
                <p class="font-size16" id="text">
                    恭喜您摇到终点了，活动结束后点击“我的排名”就可以查看名次。
                </p>
                <!-- <div class="tc-btn padding-four">
                    <span id="getScore">开始下一轮</span>
                </div> -->
            </div>
        </div>

        <div id="Prize-goods" class="tc" style="display: none;">
            <div class="tc-content">
                <img class="close" src="../addons/hm_newdpm/img10/close.png" width="20" />
                <div class="goods-title">
                    <div class="goods-wrap">
                        <div class="goods-left-text" >
                            <!-- <p class="prizes" style="text-align: center;color: #fff">您本轮名次</p> -->
                            <p id="tc1" class="prize-hd" style="text-align: center;color: #ffdf47">您本轮排第2名</p>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
       
    </div>
    <audio preload="auto" id="audio1" src="../addons/haoman_base/dpm/red-01.mp3"></audio>
    <div class="power-by" style="position: fixed;bottom: 50px;width: 100%;left: 0px;right: 0px;font-size: 12px;text-align: center;color:#EAB387;">
        <div class="copyright fixed"><?php  if(empty($reply['copyright'])) { ?> &copy;<?php  echo $_W['account']['name'];?><?php  } else { ?>&copy;<?php  echo $reply['copyright'];?><?php  } ?></div>
    </div>
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script type="text/javascript">


    //初始化
    
    var SHAKE_TIMES_MAX = <?php  echo $yyyreply['yyy_maxnum'];?>;
    var state = false;
    var state2 = true;
    var pici = <?php  echo $yyyreply['pici'];?>;
    var createtime = <?php  echo $yyyreply['createtime'];?>;
    var isStart = 0;
    var count = <?php  echo $user['point'];?>;
    var _height = 0;
    var last_count = -1 ;

    function init() {
        if (window.DeviceMotionEvent) {
            //移动浏览器支持运动传感事件
            window.addEventListener('devicemotion', deviceMotionHandler, false);
        } else {
            //移动浏览器不支持运动传感事件
        }
    }
    var SHAKE_THRESHOLD = 1000;
    // 定义一个变量保存上次更新的时间
    var last_update = 0;
    // 紧接着定义x、y、z记录三个轴的数据以及上一次出发的时间
    var x;
    var y;
    var z;
    var last_x;
    var last_y;
    var last_z;

    function deviceMotionHandler(eventData) {
        if (!state) {
            return;
        }
        //获取含重力的加速度
        var acceleration = eventData.accelerationIncludingGravity;
        //获取当前时间
        var curTime = new Date().getTime();
        var diffTime = curTime - last_update;
        //固定时间段
        if (diffTime > 200) {
            last_update = curTime;
            x = acceleration.x;
            y = acceleration.y;
            z = acceleration.z;
            var speed = Math.abs(x + y + z - last_x - last_y - last_z) / diffTime * 12000;

            if (speed > 1000) {
                // alert(3123);
                var audioAuto = document.getElementById('audio1');
                audioAuto.play();

                $(".red-paper-img").addClass("red-paper-img-add");
                count++;

                var percent=parseInt(count * 100 /SHAKE_TIMES_MAX);

                if (count>SHAKE_TIMES_MAX){
                    $("#progress").css("width",'100%');
                    $("#text").html("恭喜您摇到终点了，活动结束后点击“我的排名”就可以查看名次。")
                    $("#Integral").show();
                    $("#rule").show();
                    count = SHAKE_TIMES_MAX;
                }else{
                    $("#progress").css("width",percent+'%');
                }

                if (count == SHAKE_TIMES_MAX) {
                    if (!state2) {
                        return;
                    }
                    $.post("<?php  echo $this->createMobileUrl('yyySaveUser', array('rid' => $rid,'from_user' => $page_from_user,'pici' => $yyyreply['pici'],'createtime'=>$yyyreply['createtime']))?>&r="+new Date().getTime(), {count: count,countmax:SHAKE_TIMES_MAX }, function(result){
                        state2 = false;
                    });
                    return;
                }
            	
            }else if(speed < 1000 && speed > 50){
        		$(".red-paper-img").removeClass("red-paper-img-add");
            }else{
        	  	

            }
            last_x = x;
            last_y = y;
            last_z = z;
        }
    }


    //弹窗关闭
    $(".close").click(function() {
        // state = true;
        $(this).parents(".tc").hide();
    });
  
    //我的奖品页
    $("#my_reward").click(function() {
        

        // alert()
        $.ajax({
            url:"<?php  echo $this->createMobileUrl('yyyMobResult', array('rid' => $rid,'pici' => $yyyreply['pici'],'from_user' => $page_from_user))?>",
            dataType:'json',
            success:function(data){
                var flag = data['flag'];
                if(flag == 1){
                    $("#tc1").html(data['msg'])
                    $("#Prize-goods").show();
                }else{
                    $("#text").html(data['msg'])
                    $("#Integral").show();
                }
            }
        })


       
    });
    //规则页
    $("#rule").click(function() {

        $.ajax({
            url:"<?php  echo $this->createMobileUrl('yyyreset', array('rid' => $rid,'pici' => $yyyreply['pici']))?>",
            dataType:'json',
            success:function(data){
                var flag = data['flag'];
                if(flag == 1){
                    window.location.reload();
                }else{
                    $("#text").html(data['msg'])
                    $("#Integral").show();
                }
            }
        })
    });



    function updata(){
        // console.log(count)
        if (count >= SHAKE_TIMES_MAX) {
            return;
        }
        if(last_count<count){
            $.post("<?php  echo $this->createMobileUrl('yyySaveUser', array('rid' => $rid,'from_user' => $page_from_user,'pici' => $yyyreply['pici'],'createtime'=>$yyyreply['createtime']))?>&r="+new Date().getTime(), {count: count,countmax:SHAKE_TIMES_MAX }, function(result){

            });
            last_count=count;
        }
        setTimeout('updata()',3000);

    }

    function getStatus(){
        if (count >= SHAKE_TIMES_MAX) {
            return;
        }
        $.ajax({
            url:"<?php  echo $this->createMobileUrl('yyyGetStatus', array('rid' => $rid,'from_user' => $page_from_user,'pici' => $yyyreply['pici']))?>&count="+new Date().getTime(),
            dataType:'json',
            success:function(data){
                $("#rule").hide();
                // counts = data['shenyu'];
                isStart = data['status'];
                if(data.code == 99){
                    if(isStart == 0){
                        $("#text").html("活动还没开始，请留意大屏幕！")
                        $("#Integral").show();
                        return;
                    }else if(isStart == 2){
                        $("#text").html("活动已经结束了，请等待大屏幕的指挥！")
                        $("#Integral").show();
                        return;
                    }else{
                        $("#Integral").hide();
                        state = true;
                        updata();
                    }
                    // console.log(data['msg']); 
                }else if(data.code == 22){
                    if(isStart == 0){
                        $("#text").html("活动还没开始，请留意大屏幕！！")
                        $("#Integral").show();

                        return;
                    }else if(isStart == 2){
                        $("#text").html("活动已经结束了，请等待大屏幕的指挥！")
                        $("#Integral").show();
                        return;
                    }
                }else if(data.code == 33){
                    if(isStart == 0){
                        //$("#text").html(data.msg)
                        $("#Integral").show();
                        setTimeout( function(){
                            location.reload();
//                            location.href = "<?php  echo $this->createMobileUrl('index', array('id' => $rid))?>";
                        }, 1000 );
                        return;
                    }
                } else{

                    alert(data['msg']);
                }
                

            }
        })

        setTimeout('getStatus()',5000);
    }

    $(function() {
        init();
        getStatus();
    })
</script>
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
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
</html>
