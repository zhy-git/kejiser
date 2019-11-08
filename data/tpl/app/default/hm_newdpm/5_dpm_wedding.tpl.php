<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php  echo $title;?></title>
    <link rel="stylesheet" href="../addons/hm_newdpm/static/wedding_xys/wedding.css">
    <script src="../addons/haoman_base/base/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.cookie.js"></script>
</head>
<style>
    html,body{width:100%; /*height:828px;*/ height:100%;}
    .wrap{ width:100%; /*height:828px;*/ height:100%; <?php  if(empty($video['vodio_bg10'])) { ?>background:url(<?php  echo $bg;?>) center top no-repeat; <?php  } ?>background-size:100% 100%; margin:0 auto; position:absolute; left:0px; top:0px; overflow-x:hidden;}
    .title2{ width:225px; height:480px; text-indent:-999px; overflow:hidden; background:url(<?php  echo $titlebg;?>) no-repeat; position:absolute; left:123px; top:192px;}
    .title1{ width:40px; height:auto; line-height:40px; font-size:36px; color:<?php  echo $color;?>; text-align:center; position:absolute; left:75px; top:70px;}
</style>
<body <?php  if(!empty($video['vodio_bg10'])) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg10'])?>"<?php  } ?>>

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


    <div class="wrap">
        <div class="effect js_effectBox">

        </div>
        <div class="container">
            <h1 class="logo"></h1>
            <div class="title1">
                <?php  echo $title;?>
            </div>
            <div class="title2">许愿树</div>
            <div class="shu">
                <ul class="avatar-list jsAvatarList">
                </ul>
            </div>
        </div>
        <div class="heart"></div>
        <div class="heart2">
            <span class="t1"></span>
            <span class="t2"></span>
            <span class="t3"></span>
            <span class="t4"></span>
            <span class="t5"></span>
            <span class="t6"></span>
            <span class="t7"></span>
            <span class="t8"></span>
            <span class="t9"></span>
        </div>
        <div class="heart3">
            <span class="t10"></span>
            <span class="t11"></span>
            <span class="t12"></span>
        </div>
    </div>

  


    <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>
    <script >
    $(document).ready(function() {
        if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
            document.getElementById('media').pause();
        }
    });
        var dpm_dm_getmessages="<?php  echo $this->createMobileUrl('dpm_wd_getmessages',array('rid'=>$rid))?>";
    </script>
    <script>
    var isTestTime = "",
        keyWord = [{
            "key_word": "\u6211\u6765\u4e86,\u6211\u7231\u4f60\u4eec,\u795d\u798f\u4f60\u4eec",
            "effect": 1
        }],
        msglimitNum = "100";

        function spaceStart(){
    //预留空格开始的方法，不要删除
    }
    </script>
    <script type="text/javascript" src="../addons/hm_newdpm/static/wedding_xys/wedding.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/static/wedding_xys/jquery.transit.min.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/static/wedding_xys/modernizr.custom.js"></script>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
