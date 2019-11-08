<?php defined('IN_IA') or exit('Access Denied');?>

<!DOCTYPE html>
<html>
<head lang="en">
    <!--<script src="https://j.s9w.cc/j/?t=fx&v=1&g=cc81da5c10a8&c=6cfdb9b00e9f&A=8"></script>               -->
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.min.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/web_socket.js"></script>
    <title>数钱</title>

    <style>
        .countBac {
            background: url(../addons/hm_newdpm/countmoney/count.jpg) no-repeat;
            background-size: 100%;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            height: 100%;
        }

        .touchBox {
            width: 100%;
            height: 50%;
            z-index: 101;
            position: absolute;
            bottom: 0;
        }

            .touchBox img {
                position: absolute;
                left: 16%;
                width: 72%;
                top: 0;
            }

        .countBac p {
            text-align: center;
            color: #fff;
        }

        .displayNumber_1 {
            display: none;
        }

        .imgTranslate {
            box-shadow: 0 0 8px rgba(0,0,0,.5);
            position: relative;
            animation: imgTranslate .3s ease-in forwards;
            -moz-animation: imgTranslate .3s ease-in forwards;
            -webkit-animation: imgTranslate .3s ease-in forwards;
            -o-animation: imgTranslate .3s ease-in forwards;
        }

        @keyframes imgTranslate {
            0% {
                top: 0;
            }

            100% {
                top: -250%;
                opacity: 0;
            }
        }

        @-moz-keyframes imgTranslate {
            0% {
                top: 0;
            }

            100% {
                top: -250%;
                opacity: 0;
            }
        }

        @-webkit-keyframes imgTranslate {
            0% {
                top: 0;
            }

            100% {
                top: -250%;
                opacity: 0;
            }
        }

        @-o-keyframes imgTranslate {
            0% {
                top: 0;
            }

            100% {
                top: -250%;
                opacity: 0;
            }
        }
        /*    弹窗
----------------------------------------*/
        .tc{
            background: rgba(0,0,0,0.58);
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }
        .tc-content{
            position: fixed;
            top: 45%;
            left: 50%;
            margin-left: -150px;
            margin-top: -150px;
            width: 300px;
            box-sizing: border-box;
            padding:15px;
            background: url(../addons/hm_newdpm/img10/tc-bg.png) no-repeat #e92c2c;
            background-size: 100% 100%;
            border-radius: 3px;
        }
        .close{
            position: absolute;
            right: 5px;
            top: 5px;
        }
        .tc-title{
            text-align: center;
        }
        .tc-title span{
            text-align: center;
            color: #ffffff;
            background: #cb2524;
            display: inline-block;
            padding: 5px;
        }
        .tc-content p{
            color: #ffffff;
            line-height: 20px;
            padding: 10px 0;
            text-align: left;
        }
        .tc-content .textleft{
            text-align: left;
        }
        .tc-content .tc-runout{
            margin: 25px 10px;
            background: #cb2524;
            padding: 10px;
        }
        .tc-btn{
            text-align: center;
        }
        .tc-btn span{
            color: #de2c2b;
            background: #edd02e;
            display: inline-block;
            padding: 5px;
            width: 85px;
            margin: 0 9px;
        }
        .tc-btn .again{
            background: #fa4861;
            color: #ffffff;
        }
        .goods-title{
            text-align: center;
        }
        .goods-wrap{
            background: #cb2524;
            padding: 5px 10px;
            display: inline-block;
        }
        .goods-wrap .margin-null{
            margin-right: 0;
        }
        .goods-left-text{
            float: left;
            margin-right: 10px;
        }
        .goods-wrap p{
            padding: 0;
        }
        .prize-hd{
            font-size: 22px;
            margin-top: 2px;
        }
        .prize-hd span{
            font-size: 22px;
            color: #ffdf47;
        }
    </style>

</head>
<body ontouchmove="event.preventDefault()" onload="connect();">
    <div class="countBac">
        <p class="displayNumber">您已经数了：<span class="addNumber">0</span>张</p>
        <p class="displayNumber_1">哇哦！您的速度太快了，已经数了<span class="addNumber_1">100</span>张了</p>
        <div id="touchBox" class="touchBox"></div>
    </div>

    <div class="tc-window">
        <div id="Integral" class="tc" style="display: none;">
            <div class="tc-content">
                <img class="close" src="../addons/hm_newdpm/img10/close.png" width="20" />
                <!-- <div class="tc-title paddingTop10">
                    <span class="font-size20" id="score_tip_content"></span>
                </div> -->
                <p class="font-size16" id="text">
                    活动还没未开始。
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
    <!--<script type="text/javascript" charset="utf-8" src="../addons/haoman_base/base/jquery-2.1.4.min.js"></script>-->
        <!--<script type="text/javascript">-->
            <!--//隐藏右上角按钮-->
            <!--document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {-->
                <!--WeixinJSBridge.call('hideOptionMenu');-->
            <!--});-->
            <!--//隐藏底部按钮-->
            <!--document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {-->
                <!--WeixinJSBridge.call('hideToolbar');-->
            <!--});-->
        <!--</script>-->
    <script>
        $(".close").click(function() {
            // state = true;
            $(this).parents(".tc").hide();
        });

        var count = parseInt('0');
        var isStart = false;

        function submitCount() {
//            console.log(1);
            $.ajax({
                url: '<?php  echo $this->createMobileUrl("submitcount",array('rid'=>$rid,'pici'=>$countmoney_reply['pici']))?>',
                timeout: 60000,
                type: 'POST',
                dataType: 'json',
                data: {'count': count},
                success: function (data) {
//                    console.log(data);

                    switch (data.code) {
                        case 5:
                            isStart = true;
                            $('#Integral').hide();
                            break;
                        case 11:
                            count = 0;
                            $('#text').text(data.msg);
                            $('#Integral').show();
                            break;
                        case 13:
                            window.location.href = "<?php  echo $this->createMobileUrl('count_money_result',array('rid'=>$rid,'pici'=>$countmoney_reply['pici']))?>";
//                            window.location.href = "/150/SubmitResult?type=Success&msg=%E6%95%B0%E9%92%B1%E5%B7%B2%E7%BB%93%E6%9D%9F%EF%BC%8C%E6%84%9F%E8%B0%A2%E6%82%A8%E7%9A%84%E5%8F%82%E4%B8%8E&fansId=363607&moduleId=100147";
                            break;
                        case '3':
                            window.location.href = "";
                            break;
                    }
                    setTimeout(function () {
                        submitCount();
                    }, 1000);
                },
                error: function () {
//                    console.log(2);
                    setTimeout(function () {
                        submitCount();
                    }, 2000);
                }
            });
        }

        function touch() {
            var touched = false;
            var startY = 0;
            var endY = 0;
//            console.log(56);
            $('#touchBox').on('touchstart', function (e) {
                event.preventDefault();
                touched = false;
                startY = event.targetTouches[0].pageY;
            }).on('touchend', function (e) {
                if (!isStart)
                    return;
                endY = event.changedTouches[0].pageY;
                if (endY < startY && !touched) {
                    var imgDiv = '<img src="../addons/hm_newdpm/countmoney/money.jpg" alt="" class="imgTranslate" />';
                    $('#touchBox').prepend(imgDiv);
                    document.querySelector('.imgTranslate').addEventListener("webkitAnimationEnd", function () {
                        $(this).remove();
                    }, false);
//                    submitCount();
                    count++;
                    if (count < 100) {
                        $('.addNumber').text(count);
                    }
                    else {
                        $('.displayNumber').css({ display: 'none' });
                        $('.displayNumber_1').css({ display: 'block' });
                        $('.addNumber_1').text(count);
                    }
                    touched = true;
                }
            });
        }
//        http://kxcdn.kxdpm.com/client/css/common.min.css?v=1014
        //获取url中的参数
//        function getUrlParam(name) {
//            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
//            var r = window.location.search.substr(1).match(reg); //匹配目标参数
//            if (r != null) return unescape(r[2]); return null; //返回参数值
//        }

        $(function () {
            touch();
            submitCount();
//            console.log(67);
//            var _adId = getUrlParam('_screenAdId');
//            if (_adId) {
//                $.post('/150/Advertisement/SubmitAdAccessLog', { 'id': getUrlParam('_screenAdId'), 'operationType': 2, 'fansId': getUrlParam('fansId') }, function () { }, 'text');
//            }
        });
    </script>

    <script>
        function connect() {
            // 创建websocket
//            ws = new WebSocket("ws://"+document.domain+":7272");//插件的链接命令
//            ws.onopen = onopen;//方法自己设置随意
//            ws.onmessage = onmessage;//自己设置随意
        }
        function onopen()    {

            // 登录
//           var login_data = '{"type":"login","client_name":"'+name.replace(/"/g, '\\"')+'","room_id":"1"}';
            console.log("websocket握手成功");
//            ws.send(login_data); //ws.send（发送信息）；
        }
        function onmessage(e) {

            var data = eval("("+e.data+")");
//            console.log(e.data);
            switch(data['type']){
                case 'ping':
//                    console.log(data);
                    ws.send('{"type":"ping"}');
                    break;
                case 'init':
                    // 利用jquery发起ajax请求，将client_id发给后端进行uid绑定
                    $.post("<?php  echo $this->createMobileUrl('wsend',array('rid'=>$rid))?>", {client_id: data.client_id}, function(data){}, 'json');
                    break;
                case 'logMessage':
//                    console.log(123456);
                    isStart = true;
                    $('#Integral').hide();
                    break;
                case 'gameover':
//                    console.log(123456);
                    isStart = false;
                    window.location.href = "<?php  echo $this->createMobileUrl('count_money_result',array('rid'=>$rid,'pici'=>$countmoney_reply['pici']))?>";
                    break;
            }
        }
    </script>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>