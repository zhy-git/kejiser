<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>照片</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <style>


    <?php  if(empty($photo['photo_voice'])) { ?>#wrap{ background:url(<?php  echo $bg;?>) center 0 no-repeat; background-size:cover;height: 100%;width: 100%}<?php  } ?>
    </style>
    <!--<script type="text/javascript" src="../addons/hm_newdpm/img12/common.js"></script>-->
    <script type="text/javascript" src="../addons/haoman_base/base/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.cookie.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/photo_img/jquery_flexslider.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/photo_img/screenfull.js"></script>
    <link rel="stylesheet" href="../addons/hm_newdpm/photo_img/photo_wall.css?v=433223" type="text/css">

    <!--<link id="defaultCss" href="../addons/hm_newdpm/img12/style.css?v=433223" rel="stylesheet">-->
   <script>
       var t = <?php  echo $t;?>;
       $(function(){
           $('.flexslider').flexslider({
               slideshowSpeed:t,
               animation: "slide",
               init: function(thi){
                   $("#controler a").click(function(a1, a2){
                       var auto = $(".playAndStop")[0].className;
                       auto = auto.indexOf("on")>-1;
                       switch(this.innerHTML){
                           case "prev":
                               thi.flexslider("prev");
                               if(auto){
                                   thi.play();
                               }
                               break;
                           case "next":
                               thi.flexslider("next");
                               if(auto){
                                   thi.play();
                               }

                               break;
                           default:
                               if(this.className.indexOf("on") > -1){
                                   this.className = "playAndStop";
                                   thi.pause();
                               }else{
                                   this.className = "playAndStop on";
                                   thi.play();
                               }
                               break;

                       }
                   });
               }
           });
       });
   </script>
</head>

<body <?php  if(!empty($photo['photo_voice'])) { ?>data-vide-bg="<?php  echo tomedia($photo['photo_voice'])?>"<?php  } ?>>
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

    <div class="Panel MsgList">
        <div class="fbody" id="container" >
            <div class="main_body">
                <div class="box_wall box_photo relative">
                    <div class="wrapper clear">
                        <div class="flexslider">
                            <ul class="slides">

                                <?php  if(is_array($all_photo)) { foreach($all_photo as $row) { ?>
                                <li> <img src="<?php  echo tomedia($row['photo'])?>"  /> </li>
                                <?php  } } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="pmenu">
                        <ul class="op clear" id="controler" >
                            <li style="cursor:pointer"><a  class="prev">prev</a></li>
                            <li style="cursor:pointer"><a  class="playAndStop on">play&stop</a></li>
                            <li style="cursor:pointer"><a  class="next">next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>

<script>
    var f=false;
    $(function () {

        $('.slides li').css({"height":window.screen.height*0.74+'px'});


    });
</script>
<script>
    $(function() {
        if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
            document.getElementById('media').pause();
        }
    });
</script>
<script>;</script><script type="text/javascript" src="http://jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
