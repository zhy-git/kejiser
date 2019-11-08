<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>摇一摇 - <?php  echo $reply['title'];?></title>
    <link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/img10/base.css?v=33322324212">
    <link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/img10/yyy.css?v=3332232421232">
    
    <style>
    body {background: url(<?php  echo $bg;?>) #000;background-size: cover;}
    .frame-dialog{z-index: 9999;}
    #show_hide_nav {width: 100%;position: fixed;bottom: -3px;text-align: center;z-index: 9998;}
    img[src=""],img:not([src]){

        opacity:0;}
    .dpmyyy ul {
        background-color: <?php  echo $yyy_pdbgcolor;?>;
        background-image: url('<?php  echo $pdbg2;?>')
    }
    </style>
    <!-- <script src="../addons/hm_newdpm/img10/jquery.min.js" type="text/javascript"></script> -->
    <script src="../addons/haoman_base/base/jquery-1.9.1.min.js"></script>
    <script type="text/javascript">
    var GAME_START = "<?php  echo $this->createMobileUrl('yyyStatus',array('rid'=>$rid))?>";
    var GAME_RUNING = "<?php  echo $this->createMobileUrl('yyyRuning',array('rid'=>$rid))?>";
    var GAME_RANK = "<?php  echo $this->createMobileUrl('yyyResult',array('rid'=>$rid,'pici'=>$yyy['pici']))?>";

    var startfrerpaoma = <?php  echo $startyyy;?>;  
    var READY_TIME = 5; 
    var CUTDOWN_TIME = 20; 
    var SHAKE_LINE = 10; 

    (function(a, b) {
        b.showPage = function(c) {
            var d = b('<div class="frame-dialog"><div class="phbphb" id="phbphb"><img src="../addons/hm_newdpm/img10/phbphb.png" class="phbtop"><div class="phbk"><div class="phbbiaok"><iframe frameborder="0" src="' + c + '"></iframe></div></div></div><div class="closebutton"></div></div>');
            d.appendTo("body").show().on("click", ".closebutton", 
            function() {
                d.hide(function() {
                    d.remove();
                    d = null
                })
            })
        };
        a.WBActivity = {
            showLoading: function() {
                b(".loader").fadeIn()
            },
            hideLoading: function() {
                b(".loader").fadeOut()
            }
        };
        b(function() {
             a.WBActivity.start();
        });
        b(a).on("resize", function() {
            a.WBActivity.resize()
        })
    })(window, jQuery); 
    </script>
    <script src="../addons/hm_newdpm/img10/yyy.js?v=423332" type="text/javascript" charset="utf-8"></script>
</head>

<body class="FUN SHAKE">
    <audio id="Cutmusic" src="../addons/haoman_base/dpm/cutdown.mp3" preload="preload"></audio>
    <audio id="Newmusic" src="../addons/haoman_base/dpm/new.mp3" preload="preload"></audio>
    <audio id="Outmusic" src="../addons/haoman_base/dpm/outride.mp3" preload="preload"></audio>
    <audio id="Overmusic" src="../addons/haoman_base/dpm/gameover.mp3" preload="preload"></audio>
    <div style="position: absolute;width: 96%;left: 0;display: block;">
      <div style="position: relative;width: 1024px;margin-left: auto;margin-right: auto;padding: 10px;box-sizing: border-box;padding-top: 0">
        <img id="chongzhi" style="position: relative;width: 100%;height: 250px;" src="<?php  if(empty($yyy['yyy_banner'])) { ?>../addons/haoman_base/dpm/yyytop.jpg?v=4234<?php  } else { ?><?php  echo tomedia($yyy['yyy_banner'])?><?php  } ?>">
      </div>
    </div>

    <div class="Panel Track" style="opacity: 1; display: block;">
        <div class="dpmyyy">

        <img style="position: relative;width: 100%;margin-bottom: -5px;" src="<?php  if($yyy['yyy_need']==0||$yyy['yyy_need']==1) { ?>../addons/hm_newdpm/img10/runway.png<?php  } else { ?>../addons/hm_newdpm/img10/runway3.png<?php  } ?>">

            <ul>
                <li>
                    <div class="zd"></div>
                    <div class="pmyyy"> <span class="order"><i>1</i></span><span class="ma" style="width: 0; background: url(../addons/hm_newdpm/img10/runing.gif) right center no-repeat;background-size: 40px 40px;" id="ph0"><img class="touxiang" id="tx0" src="../addons/hm_newdpm/img10/touxiang.jpg"> <span id="nc0" class="nicheng">xxx</span> </span>  </div>
                </li>
                <li>
                    <div class="pmyyy"> <span class="order"><i>2</i></span><span class="ma" style="width: 0; background: url(../addons/hm_newdpm/img10/runing.gif) right center no-repeat;background-size: 40px 40px;" id="ph1"><img id="tx1" class="touxiang" src="../addons/hm_newdpm/img10/touxiang.jpg"> <span id="nc1" class="nicheng">xxx</span> </span> </div>
                </li>
                <li>
                    <div class="pmyyy"><span class="order"><i>3</i></span> <span class="ma" style="width: 0; background: url(../addons/hm_newdpm/img10/runing.gif) right center no-repeat;background-size: 40px 40px;" id="ph2"><img id="tx2" class="touxiang" src="../addons/hm_newdpm/img10/touxiang.jpg"> <span id="nc2" class="nicheng">xxx</span></span>  </div>
                </li>
                <li>
                    <div class="pmyyy"><span class="order"><i>4</i></span> <span class="ma" style="width: 0; background: url(../addons/hm_newdpm/img10/runing.gif) right center no-repeat;background-size: 40px 40px;" id="ph3"><img id="tx3" class="touxiang" src="../addons/hm_newdpm/img10/touxiang.jpg"> <span id="nc3" class="nicheng">xxx</span></span> </div>
                </li>
                <li>
                    <div class="pmyyy"> <span class="order"><i>5</i></span><span class="ma" style="width: 0; background: url(../addons/hm_newdpm/img10/runing.gif) right center no-repeat;background-size: 40px 40px;" id="ph4"><img id="tx4" class="touxiang" src="../addons/hm_newdpm/img10/touxiang.jpg"> <span id="nc4" class="nicheng">xxx</span></span>  </div>
                </li>
                <li>
                    <div class="pmyyy"> <span class="order"><i>6</i></span> <span class="ma" style="width: 0; background: url(../addons/hm_newdpm/img10/runing.gif) right center no-repeat;background-size: 40px 40px;" id="ph5"><img id="tx5" class="touxiang" src="../addons/hm_newdpm/img10/touxiang.jpg"> <span id="nc5" class="nicheng">xxx</span></span>  </div>
                </li>
                <li>
                    <div class="pmyyy"> <span class="order"><i>7</i></span><span class="ma" style="width: 0; background: url(../addons/hm_newdpm/img10/runing.gif) right center no-repeat;background-size: 40px 40px;" id="ph6"><img id="tx6" class="touxiang" src="../addons/hm_newdpm/img10/touxiang.jpg"> <span id="nc6" class="nicheng">xxx</span></span>  </div>
                </li>
                <li>
                    <div class="pmyyy"> <span class="order"><i>8</i></span><span class="ma" style="width: 0; background: url(../addons/hm_newdpm/img10/runing.gif) right center no-repeat;background-size: 40px 40px;" id="ph7"><img id="tx7" class="touxiang" src="../addons/hm_newdpm/img10/touxiang.jpg"> <span id="nc7" class="nicheng">xxx</span></span>  </div>
                </li>
                <li>
                    <div class="pmyyy"><span class="order"><i>9</i></span> <span class="ma" style="width: 0; background: url(../addons/hm_newdpm/img10/runing.gif) right center no-repeat;background-size: 40px 40px;" id="ph8"> <img id="tx8" class="touxiang" src="../addons/hm_newdpm/img10/touxiang.jpg"> <span id="nc8" class="nicheng">xxx</span></span>  </div>
                </li>
                <li>
                    <div class="pmyyy"><span class="order"><i>10</i></span> <span class="ma" style="width: 0;background: url(../addons/hm_newdpm/img10/runing.gif) right center no-repeat;background-size: 40px 40px;" id="ph9"><img id="tx9" class="touxiang" src="../addons/hm_newdpm/img10/touxiang.jpg"> <span id="nc9" class="nicheng">xxx</span></span>  </div>
                </li>
            </ul>
            <?php  if($yyy['yyy_need']==0||$yyy['yyy_need']==2) { ?>
            <img style="position: relative;width: 100%;margin-top: -30px;top: -39px;" src="../addons/hm_newdpm/img10/runway.png">
            <?php  } ?>
            <div class="biaozhilogo"><img src="<?php  echo $pdbg;?>" style="border: none"></div>
        </div>
    </div>
    <div class="cutdown-end"></div>
    <div class="track-tool"></div>
    <div class="track-result"></div>
    <script>
    $(document).ready(function() {
        if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
            document.getElementById('media').pause();
        }

        $(".nexttound").on('click', function() {
            $.getJSON(GAME_START, {
                type: "chongzhi"
            },function(c) {
                if (c.flag == 1) {

                    time =  setInterval(abcd,4000);

                    window.startfrerpaoma = 0;
                    nextRound();

                } else {
                    alert("无法连接游戏服务器，请刷新重新开始1");
                    window.location.reload()
                }
            }).fail(function() {
                alert("无法连接游戏服务器，请刷新重新开始2");
                window.location.reload()
            })
        });

        $("#chongzhi").on('click', function() {
        if(confirm("确定要提前结束本次活动嘛？")){
            window.clearInterval(tmr_GameDataLoad);
            $.getJSON("<?php  echo $this->createMobileUrl('yyydpmreset', array('rid' => $rid))?>", {
                type: "chongzhi"
            },function(c) {
                // alert(c.msg)
            }).fail(function() {
                alert("无法连接游戏服务器，请刷新重新开始3");
                window.location.reload()
            })

             window.setTimeout(function() {
                showGameResult();
            },660)
        }

        });
        abcd();
      // time = setInterval(abcd,4000);
    });
    abcd = function () {

       $.ajax({
           url:"<?php  echo $this->createMobileUrl('yyyhaishen', array('rid' => $rid,'op'=>'getfans'))?>",
           dataType:'json',
           success:function(data3){

               var code = data3['code'];
               var shenyu = data3['shenyu'];

               $('#memberNum').html(shenyu+"人参与活动");
                var timers = setTimeout(function() {
                    abcd();
                },10000);
               // console.log(shenyu);

               if(code==100){
                // console.log(111);
                   clearTimeout(timers);
                   // time = null;
               }
           },
           error:function(res){
                setTimeout(function() {
                    abcd();
                },10000);
           }
       })
   }

   function spaceStart(){
    //预留空格开始的方法，不要删除
    }
    </script>

   <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>
       <div class="startcenter"> 
        <div class="label top">微信扫一扫 扫下面二维码参加活动</div>
        <div class="label top2" id="memberNum" style="display: block">0人参与活动</div>
        <img src="<?php  echo tomedia($reply['up_qrcode'])?>">
        <div class="label bottom"><span class="shake-icon shake"></span>听从现场指挥，游戏开始后不停摇动手机</div>
        <div class="button-start">开始游戏</div>
        <div class="round-label">ROUND FREE</div>
    </div>
    <div class="result-layer" style="display: none;">
        <div class="result-label">GAME OVER</div>
        <div class="result-cup">
            <span class="button nexttound">开始下一轮</span>
            <span class="button allresult">全部排名</span>
        </div>
    </div>
    <div class="cutdown-start cutdownan-imation" style="display: none; margin-left: -480px; margin-top: -239px; font-size: 334.6px; line-height: 478px;">GO!</div>
<link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/img10/footer.css">
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
