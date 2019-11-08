<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>疯狂数钱 - <?php  echo $countmoneyreply['countmoney_title'];?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="../addons/hm_newdpm/img2/common.css?v=433223" type="text/css">
    <link id="defaultCss" href="../addons/hm_newdpm/img12/style.css" rel="stylesheet">
    <link id="themeCss" href="../addons/hm_newdpm/img12/style(1).css" rel="stylesheet">
    <link id="defaultCss2" href="../addons/hm_newdpm/countmoney/default.min.css" rel="stylesheet" />
    <link href="../addons/hm_newdpm/countmoney/module.min.css" rel="stylesheet" />
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.extensions.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/common/awardRotate.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.barrager.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/sea.js"></script>
    <!--<script src="../addons/haoman_base/base/jquery.vedio.js"></script>-->
    <script type="text/javascript">
        $('body').triggerHandler('active');
        var module = [ 'countmoney'];

        seajs.config({
            base: '../addons/hm_newdpm/common/',
            charset: 'utf-8',
            timeout: 20000
        });
        //        http://file.kxdpm.com/js/activity/modules/firework.js
        seajs.use(module, function (countmoney) {
            countmoney.init();

        });

    </script>
    <style>
    html,body{
        height: 100%;
    }
    .user-list li {
        opacity: 0.9
    }
    
    .detail-box {
        opacity: 0.9
    }
    #wrap{ background:url(<?php  if(empty($countmoneyreply['countmoney_pdbg'])) { ?><?php  echo $bg;?><?php  } ?>) center 0 no-repeat; background-size:cover;height: 100%;}
    
    <?php  if(!empty($reply['backcolor'])) { ?>
    .props-color{ background:-webkit-linear-gradient(top , <?php  echo $reply['backcolor'];?> ,<?php  echo $reply['backcolor'];?>); background:-moz-linear-gradient(top , <?php  echo $reply['backcolor'];?> ,<?php  echo $reply['backcolor'];?>); background:-o-linear-gradient(top , <?php  echo $reply['backcolor'];?> ,<?php  echo $reply['backcolor'];?>); box-shadow: inset -1px 1px rgba(204,204,204,.2)}
    .lott-w span,.rock-name,.join-num,.choose-num{ color:#ffffff;}
    .und-btn a,.btn-color,.btn-start{border:1px solid <?php  echo $reply['backcolor'];?>; border-radius:4px; background:-moz-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>); background: -webkit-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>); background:-o-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>);}
    .und-btn a:hover,.btn-color:hover,.btn-start:hover{ background:-moz-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>); background:-webkit-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>);background:-o-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>);}
    <?php  } ?>

    </style>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.cookie.js"></script>
    <script type="text/javascript">


        (function($) {
           

          var cache = [];
          $.preLoadImages = function() {
            var args_len = arguments.length;
            for (var i = args_len; i--;) {
              var cacheImage = document.createElement('img');
              cacheImage.src = arguments[i];
              cache.push(cacheImage);
            }
          }
        })(jQuery)
        $.preLoadImages('../addons/haoman_base/dpm/test01.png','../addons/haoman_base/dpm/test02.png','../addons/haoman_base/dpm/test03.png','../addons/haoman_base/dpm/test04.png','../addons/haoman_base/dpm/test05.png','../addons/haoman_base/dpm/test06.png','../addons/haoman_base/dpm/test07.png','../addons/haoman_base/dpm/test08.png');
</script>
    <script>
        var Open_CountMoney = "<?php  echo $this->createMobileUrl("opencountmoney", array('rid' => $rid))?>";
        var Get_CountMoneyStatistics = "<?php  echo $this->createMobileUrl("GetCountMoneyStatistics", array('rid' => $rid))?>";
        var push_countmoney = "<?php  echo $this->createMobileUrl("pushcountmoney", array('rid' => $rid))?>";
        var Get_CountMoneyJoinFans = "<?php  echo $this->createMobileUrl("GetCountMoneyJoinFans", array('rid' => $rid))?>";
    </script>
</head>

<body <?php  if(!empty($countmoneyreply['countmoney_pdbg'])) { ?>data-vide-bg="<?php  echo tomedia($countmoneyreply['countmoney_pdbg'])?>"<?php  } ?> onload="connect();">
    <div id="wrap" class="wrapbg">
    
        <div class="chrometips chromeTip" style="display:none;">
            <a href="javascript:void(0);" class="btntips-close" id="chromeTipCloseBtn">×</a>
            <div class="inner-chrometips">
                <p class="chrm-word1">由于你正在使用非Chrome浏览器，大屏幕的体验处于不佳状态，建议您立刻更换浏览器，以获得更好的大屏幕产品用户体验</p>
            </div>
        </div>
        <script>
        $(function() {



            var isChrome = navigator.userAgent.indexOf('Chrome') != -1;
            if (!isChrome) {
                $('.chromeTip').show();
            }
            $('#chromeTipCloseBtn').click(function() {
                $('.chromeTip').hide();
            });
            //10s后自动关闭
            setTimeout(function() {
                $('.chromeTip').hide();
            }, 30000);
        });
        </script>
        <div id="whole">
            <div id="header" class="clearfix">
                <div class="word-scroll left">
                    <div class="clearfix">
                        <div class="scrollbox left">
                            <ul class="word-list wordList">
                                <li class="themeBox" style="text-align:center;line-height: 86px; font-size: 46px; display: list-item;color: <?php  if($countmoneyreply['countmoney_title_color']) { ?><?php  echo $countmoneyreply['countmoney_title_color'];?><?php  } else { ?>#fff;<?php  } ?>"><?php  echo $countmoneyreply['countmoney_title'];?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <span class="reserved right showIntroBtn">
                    <?php  if($reply['up_qrcode']) { ?>
         <img class="qrcodeAll" src="<?php  echo tomedia($reply['up_qrcode'])?>" style="max-width:126px;max-height:96px;">
                    <?php  } ?>
      </span>
            </div>
        </div>
    <div id="main">
        <div data-moduleid="100147" data-modulename="countmoney" class="module" id="countmoney" style="display: block;">
            <ul class="moduleBtn">
                <!--<li class="btn_countmoney" data-name="countmoney" data-description="数钱"><i class="iconfont">&#xe66a;</i></li>-->
            </ul>
            <div class="shakeTimes" id="moneyTimes"></div>
            <!--<div class="money-index">-->
                <!--<div class="title"><i class="icon icon-countmoney" style="width: 20px;height: 20px;display: inline-block"></i>数钱游戏</div>-->
                <!--<a href="javascript:void(0);" class="clickBtn money-send">报名参与</a>-->
            <!--</div>-->
            <div class="money-join">
                <div class="title">参与数钱的粉丝<span class="ready-number">已有<i class="countmoneyReadyNumber">0</i>人准备</span></div>
                <ul></ul>
                <div class="btn-box"><a onclick="javascript:void(0);" class="clickBtn money-begin">开始数钱</a></div>
            </div>
            <div class="money-ing">
                <div class="title"><i class="icon icon-countmoney"></i>数钱游戏
                    <div class="endtime">倒计时:<span class="money-lefttime"></span></div>
                </div>
                <ul>
                </ul>
            </div>
        </div>
    </div>
   <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>

        <audio src="<?php  echo $music2;?>" preload="auto" id="media2"></audio>
  </div>
    <script>
    function connect() {
        // 创建websocket
//        ws = new WebSocket("ws://"+document.domain+":7272");//插件的链接命令
//        ws.onopen = onopen;//方法自己设置随意
//        ws.onmessage = onmessage;//自己设置随意
    }
    function onopen()    {

        // 登录
        //           var login_data = '{"type":"login","client_name":"'+name.replace(/"/g, '\\"')+'","room_id":"1"}';
        console.log("websocket握手成功");
        //            ws.send(login_data); //ws.send（发送信息）；
    }
    function onmessage(e) {

        var data = eval("("+e.data+")");
//        console.log(e.data);
        switch(data['type']){
            case 'ping':
                ws.send({"type":"pong"});
//                console.log('222');
                break;
            case 'init':
                // 利用jquery发起ajax请求，将client_id发给后端进行uid绑定
                $.post("<?php  echo $this->createMobileUrl('wsend2',array('rid'=>$rid))?>", {client_id: data.client_id}, function(data){}, 'json');
                break;
            case 'logMessage2':
                console.log(data.data);
//                isStart = true;
                break;
            case 'gameover2':
//                console.log(data.data);

//                moduleCommon.showInfo(data.Message);
                if (data.data.length > 0) {
                    $('.money-join').hide();
                    gameStep = 2;
                    gameOver = true;
                    var countMoneyStr = '';
                    var countMoneyStrLast = '';
                    var maxLength = data.data.length > 10 ? 10 : data.data.length;
                    var resultData = data.data;

                    for (i = 0; i < maxLength; i++) {

                        if (i >= 3) {
                            var moneyEdnNumber;
//                            console.log(1);
                            switch (i) {
                                case 3:
                                    moneyEdnNumber = '四';
                                    break;
                                case 4:
                                    moneyEdnNumber = '五';
                                    break;
                                case 5:
                                    moneyEdnNumber = '六';
                                    break;
                                case 6:
                                    moneyEdnNumber = '七';
                                    break;
                                case 7:
                                    moneyEdnNumber = '八';
                                    break;
                                case 8:
                                    moneyEdnNumber = '九';
                                    break;
                                case 9:
                                    moneyEdnNumber = '十';
                                    break;
                            }
                            countMoneyStrLast = countMoneyStrLast + '<li><label>第' + moneyEdnNumber + '名</label><img onerror="imgError(this);" src="' + resultData[i].avatar + '" /><span>' + resultData[i].nickname + '</span></li>';
                        } else {
//                            console.log(2);
                            countMoneyStr = countMoneyStr + '<div><div class="head"><img onerror="imgError(this);" src="' + resultData[i].avatar + '" /></div><div class="name">' + resultData[i].nickname + '</div></div>';

                        }
                    }
//                    fireWork.show();
                    $('body').append('<div class="animate-bg"><div class="light"></div><div class="countmoney-endbox"><div class="countmoney-top">' + countMoneyStr + '</div><ul class="countmoney-end">' + countMoneyStrLast + '</ul><div class="btn-box"><a class="clickBtn countmoney-submit">确认提交</a></div></div></div>');

                    $('.countmoney-submit').on('click', function () {
                        submitShake();
                    });
                    return false;
                }
                return;
                break;
        }
    }
</script>
    <script>
        var _m = document.getElementById('media2');
    $(function() {
        if ($('#music_img', window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png') {
            document.getElementById('media').pause();
        }
    });
    $(document).keydown(function(e){

   });
    </script>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
