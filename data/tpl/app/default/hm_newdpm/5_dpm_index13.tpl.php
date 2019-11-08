<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>大转盘 - <?php  echo $reply['title'];?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="../addons/hm_newdpm/img2/common.css?v=433223" type="text/css">
    <link id="defaultCss" href="../addons/hm_newdpm/img12/style.css?v=433223" rel="stylesheet">
    <link id="themeCss" href="../addons/hm_newdpm/img12/style(1).css" rel="stylesheet">
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.extensions.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/common/awardRotate.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.barrager.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/sea.js"></script>
    <script type="text/javascript">
        $('body').triggerHandler('active');
        var module = [ 'turntable'];

        seajs.config({
            base: '../addons/hm_newdpm/common/',
            charset: 'utf-8',
            timeout: 20000
        });

        seajs.use(module, function (turntable) {
        //    main.init();
//            picmsgwall.init();
         //   vote.init();
          //  program.init();
          //  notice.init();
            turntable.init();
          //  slotmachine.init();
          //  grabbonus.init();
          //  messagewalldanmu.init();
         //   countmoney.init();
         //   count.init();
         //   pair.init();
         //   lottery.init();
         //   shake.init();
          //  guest.init();
          //  imgwall.init();
        });

        //        (function (i, s, o, g, r, a, m) {
        //            i['GoogleAnalyticsObject'] = r;
        //            i[r] = i[r] || function () {
        //                        (i[r].q = i[r].q || []).push(arguments)
        //                    }, i[r].l = 1 * new Date();
        //            a = s.createElement(o),
        //                    m = s.getElementsByTagName(o)[0];
        //            a.async = 1;
        //            a.src = g;
        //            m.parentNode.insertBefore(a, m)
        //        })(window, document, 'script', 'images/analytics.js', 'ga');
        //
        //        ga('create', 'UA-78229029-1', 'auto');
        //        ga('send', 'pageview');
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
    #wrap{ background:url(<?php  if(empty($video['vodio_bg13'])) { ?><?php  echo $bg;?><?php  } ?>) center 0 no-repeat; background-size:cover;height: 100%;}
    
    <?php  if(!empty($reply['backcolor'])) { ?>
    .props-color{ background:-webkit-linear-gradient(top , <?php  echo $reply['backcolor'];?> ,<?php  echo $reply['backcolor'];?>); background:-moz-linear-gradient(top , <?php  echo $reply['backcolor'];?> ,<?php  echo $reply['backcolor'];?>); background:-o-linear-gradient(top , <?php  echo $reply['backcolor'];?> ,<?php  echo $reply['backcolor'];?>); box-shadow: inset -1px 1px rgba(204,204,204,.2)}
    .lott-w span,.rock-name,.join-num,.choose-num{ color:#ffffff;}
    .und-btn a,.btn-color,.btn-start{border:1px solid <?php  echo $reply['backcolor'];?>; border-radius:4px; background:-moz-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>); background: -webkit-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>); background:-o-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>);}
    .und-btn a:hover,.btn-color:hover,.btn-start:hover{ background:-moz-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>); background:-webkit-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>);background:-o-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>);}
    <?php  } ?>
    .themeBox{
        color: <?php  if(empty($xysreply['xys_backcolor'])) { ?>#fff604;<?php  } else { ?><?php  echo $xysreply['xys_backcolor'];?>;<?php  } ?>;
    }
    </style>
    <!-- <script type="text/javascript" src="../addons/hm_newdpm/img2/jquery-1.9.1.min.js"></script> -->
    <!--<script type="text/javascript" src="../addons/hm_newdpm/common/jquery-1.9.1.min.js"></script>-->
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
        var go_GetTurntableAward = "<?php  echo $this->createMobileUrl("GetTurntableAward", array('rid' => $rid))?>";
        var go_GetTurntableFans = "<?php  echo $this->createMobileUrl("GetTurntableFans", array('rid' => $rid))?>";
        var go_GetTurntableInternalFans = "<?php  echo $this->createMobileUrl("GetTurntableInternalFans", array('rid' => $rid))?>";
        var go_SubmitTurntableFans = "<?php  echo $this->createMobileUrl("SubmitTurntableFans", array('rid' => $rid))?>";
        var go_resetSubmitTurntableFans = "<?php  echo $this->createMobileUrl("resetAwards", array('rid' => $rid,'code'=>'reset_turntable'))?>";
    </script>
</head>

<body <?php  if(!empty($video['vodio_bg13'])) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg13'])?>"<?php  } ?>>
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
                                <li class="themeBox" style="text-align:center;line-height: 86px; font-size: 46px; display: list-item;"><?php  echo $xysreply['turntable_banner'];?></li>
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
        <div data-moduleid="100119" data-modulename="turntable"  id="turntable" style="display: block;position:absolute; top:10px; left:0; right:0;height:535px; ">

            <div id="isLotteryHead"></div>
            <div id="rotationUserHead">
                <ul></ul>
            </div>
            <div class="rotationBg" >
                <div class="turnplate">
                    <canvas class="item" id="wheelcanvas" width="700px" height="700px"></canvas>
                    <img class="pointer" src="../addons/hm_newdpm/img12/turnplate-pointer.png">
                </div>
            </div>
            <div class="rotationMen" style="position: absolute;right:0px;top:20px;">
                <div class="prize-box right">
                    <span class="props props-color"></span>
                    <div class="outer-prize">
                        <div class="wrap-prize" style="background: #fff;height: 460px;">
                            <div class="list-top clearfix">
                                <p class="pro-num right">获奖总人数<em class="winUserNum"><?php  echo $winUserNum;?></em></p>
                                <span>获奖名单</span>
                            </div>
                            <div class="list-box">
                                <p class="list-tit">
                                    <span>序号</span>
                                    <span>获奖者</span>
                                </p>
                                <div class="priname-box" style="height: 300px;">
                                    <ul class="prize-list winUserList" id="winUserList">
                                        <?php  if(is_array($awardslist)) { foreach($awardslist as $index => $row) { ?>
                                        <li class="clearfix" data-id="<?php  echo $row['id'];?>" data-rank="1">
                                            <p class="head-part left"> <span class="num-p winUserRankNum"><em><?php  echo $index+1?></em></span>
                                                <a href="javascript:;"><img style="margin-top: 5px;" width="50" height="50" src="<?php  echo tomedia($row['avatar'])?>" alt=""></a>
                                            </p> <a href="javascript:;" class="nick-name left winUserName"><?php  echo $row['nickname'];?></a>
                                            <a href="javascript:void(0);" class="delfans del delWinUser" data-id="<?php  echo $row['id'];?>">×</a>
                                        </li>
                                        <?php  } } ?>

                                    </ul>
                                </div>
                            </div>

                            <div class="und-btn2">
                                <a href="javascript:void(0);" class="reset clickBtn yellowbg middleBtn" style="position: absolute; left: 20px; bottom: 20px;"><span style="display: inline;">重置抽奖</span></a>
                                <a href="javascript:void(0);" class="clickBtn yellowbg disabled middleBtn turntable_submit" style="width: 80px;">确认记录</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
   <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>

  </div>

    <script>
            $(function() {
                if ($('#music_img', window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png') {
                    document.getElementById('media').pause();
                }

//        setInterval(function(){
//            $.ajax({
//                url:"<?php  echo $this->createMobileUrl('haishen', array('rid' => $rid,'gets'=>'fans'))?>",
//                dataType:'json',
//                success:function(data){
//
//                    var code = data['code'];
//                    var shenyu = data['shenyu'];
//                    $('.lotteryUserNum').html(shenyu);
//                    // console.log(shenyu);
//                }
//            })
//        },4000);
//
//    });


//                $(document).keydown(function (e) {
//                    if (e.which == 32) {
//                        spaceStart();
//                    }
//
//                });

            });

    </script>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
