<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>对对碰 - <?php  echo $reply['title'];?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="../addons/hm_newdpm/img2/common.css?v=433223" type="text/css">
    <link id="defaultCss" href="../addons/hm_newdpm/img12/style.css" rel="stylesheet">
    <link id="themeCss" href="../addons/hm_newdpm/img12/style(1).css" rel="stylesheet">
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.extensions.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/common/awardRotate.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.barrager.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/sea.js"></script>
    <script type="text/javascript">
        $('body').triggerHandler('active');
        var module = [ 'pair'];

        seajs.config({
            base: '../addons/hm_newdpm/common/',
            charset: 'utf-8',
            timeout: 20000
        });
        //        http://file.kxdpm.com/js/activity/modules/firework.js
        seajs.use(module, function (pair) {
        //    main.init();
//            picmsgwall.init();
         //   vote.init();
          //  program.init();
          //  notice.init();
          //  turntable.init();
          //  slotmachine.init();
          //  grabbonus.init();
          //  messagewalldanmu.init();
         //   countmoney.init();
         //   count.init();
            pair.init();
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
    #wrap{ background:url(<?php  if(empty($video['vodio_bg12'])) { ?><?php  echo $bg;?><?php  } ?>) center 0 no-repeat; background-size:cover;height: 100%;}
    
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
        var go_GetPairs = "<?php  echo $this->createMobileUrl("GetPairs", array('rid' => $rid))?>";
        var go_GetPairFans = "<?php  echo $this->createMobileUrl("GetPairFans", array('rid' => $rid))?>";
        var go_SubmitPairs = "<?php  echo $this->createMobileUrl("SubmitPairs", array('rid' => $rid))?>";
        var go_deleteALL_Pair = "<?php  echo $this->createMobileUrl("deleteALL_Pair", array('rid' => $rid))?>";
    </script>
</head>

<body <?php  if(!empty($video['vodio_bg12'])) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg12'])?>"<?php  } ?>>
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
                                <li class="themeBox" style="text-align:center;line-height: 86px; font-size: 46px; display: list-item;color: <?php  if($xysreply['pair_banner']) { ?><?php  echo $xysreply['pair_backcolor'];?><?php  } else { ?>#fff;<?php  } ?>"><?php  echo $xysreply['pair_banner'];?></li>
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
        <div data-moduleid="100104" data-modulename="pair" class="module luck_pair" id="pair" style="display: block;">

                <div class="left">
                    <div class="luck_pair_title">即时配对</div>
                    <div class="active_num">参加配对人数: <span>124</span></div>
                    <div class="pairUserHead" id="pair_user">
                        <div class="leftUser">
                            <ul style="display: none; width: 1400px; left: -600px;"></ul>
                            <div><img src=""><br><span id="defaultFemale">共0位</span></div>
                        </div>
                        <span class="heart"><i class="iconfont"></i></span>
                        <div class="rightUser">
                            <ul style="display: none; width: 1200px; left: -1000px;"></ul>
                            <div><img src=""><br><span id="defaultMale">共0位</span></div>
                        </div>
                    </div>
                    <div class="condition">配对对数:
                        <div class="select" id="pair_count">
                            <a data-pairnum="1">1对</a>
                        </div>
                        <div class="select_option" id="pariNum" style="display: none; left: 230.359px; top: 380px;">
                            <a data-pairnum="1">1对</a>
                            <a data-pairnum="2">2对</a>
                            <a data-pairnum="3">3对</a>
                            <a data-pairnum="4">4对</a>
                            <a data-pairnum="5">5对</a>
                        </div>
                    </div>
                    <a class="clickBtn" id="beginPair" style="display: inline-block;">开始配对</a>
                    <a class="clickBtn stopBtn" id="stopPair" style="display: none;">停止配对</a>
                    <a class="clickBtn" id="pairIng" style="display: none;">自动配对(<span></span>)</a>

                </div>
                <div class="right">
                    <div class="title">配对名单</div>
                    <div class="title" style="float: right;margin-right: 10%;cursor:pointer;" id="deleteALL">清除全部配对</div>
                    <!--<div class="num">配对对数:<span id="pairNumber">1</span></div>-->
                    <ul id="pairUl">

                    </ul>
                    <a class="reclick" id="removePair">重新配对</a>
                    <a class="submitUser" id="submitPair">确认配对</a>
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
    });
    $(document).keydown(function(e){

   });
    </script>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
