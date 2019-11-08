<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php  echo $reply['title'];?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="../addons/hm_newdpm/img4/common.css?v=32432323">
    <link rel="stylesheet" href="../addons/hm_newdpm/img4/default.css?v=3232322423">
    <!-- <script type="text/javascript" src="../addons/hm_newdpm/img4/jquery-1.8.3.min.js"></script> -->
    <script type="text/javascript" src="../addons/haoman_base/base/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.cookie.js"></script>
    <style type="text/css" media="screen">
    html,body{
        height: 100%;
    }
    body{
        background: url(<?php  echo $bg;?>) center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #flashContent {
        visibility: hidden
    }
    
    #flashContent {
        display: block;
        text-align: left;
    }
    .boxitem{
        display: none;
    }

    </style>
</head>

<body <?php  if(!empty($vedio_bg)) { ?>data-vide-bg="<?php  echo $vedio_bg;?>"<?php  } ?>>

    <div class="chrometips chromeTip" style="display:none;">
            <a href="javascript:void(0);" class="btntips-close" id="chromeTipCloseBtn">×</a>
            <div class="inner-chrometips">
                <p class="chrm-word1">由于你正在使用非Chrome浏览器，大屏幕的体验处于不佳状态，建议您立刻更换浏览器，以获得更好的大屏幕产品用户体验</p>
            </div>
        </div>
        <script>
        $(function() {
            
            // $(".bottom .opened").addClass("Hidden");
            // $(".bottom .closed").removeClass("Hidden");
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
    


    <div id="top" style="height: 5px; line-height: 0; font-size: 1px; overflow: hidden;">&nbsp;</div>
    
    <div id="boxMain">
       
        <div id="boxContent" >
            <!-- 开幕墙 -->
            <div id="kaimuqiang" class="boxitem" <?php  if($themes == "start") { ?>style="display: block;"<?php  } ?>>
                <div id="kmq">
                    <?php  if($reply['tiemadpic']) { ?>
                    <img src="<?php  echo tomedia($reply['tiemadpic'])?>">
                    <?php  } ?>
                </div>
            </div>
           
            <!-- 闭幕墙 -->
            <div id="bimuqiang" class="boxitem" <?php  if($themes == "over") { ?>style="display: block;"<?php  } ?>>
                <div id="bmq">
                    <?php  if($reply['gl_openid']) { ?>
                    <img src="<?php  echo tomedia($reply['gl_openid'])?>">
                    <?php  } ?>
                </div>
               
            </div>
        </div>
       
    </div>

  


    

    <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script type="text/javascript">
    $(document).ready(function() {
        if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
            document.getElementById('media').pause();
        }
    });
    function spaceStart(){
    //预留空格开始的方法，不要删除
    }
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>


</html>
