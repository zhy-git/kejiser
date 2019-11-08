<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>嘉宾展示 - <?php  echo $reply['title'];?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="../addons/hm_newdpm/img4/common.css?v=32423">
    <link rel="stylesheet" href="../addons/hm_newdpm/img4/default.css?v=3232324">
    <!-- <script type="text/javascript" src="../addons/hm_newdpm/img4/jquery-1.8.3.min.js"></script> -->
    <!-- <script type="text/javascript" src="../addons/hm_newdpm/img/jquery.cookie.js"></script> -->
    <script type="text/javascript" src="../addons/haoman_base/base/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.cookie.js"></script>
    <style type="text/css" media="screen">
    html,body{
        height: 100%;
    }
    body{
        background:url(<?php  echo $bg;?>) center center;
        background-repeat:no-repeat; 
        background-size: cover;
    }
    #flashContent {
        visibility: hidden
    }
    
    #flashContent {
        display: block;
        text-align: left;
    }
        #boxTop_scroll_begin{
       color: <?php  if(empty($xysreply['xys_backcolor'])) { ?>#fff604;<?php  } else { ?><?php  echo $xysreply['xys_backcolor'];?>;<?php  } ?>;
        }
    </style>
</head>

<body <?php  if(!empty($video['vodio_bg7'])) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg7'])?>"<?php  } ?>>

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
    
    <div id="boxMain1">

        <div id="boxTop" style="border-radius: 0px;">
            <ul>
                <!-- <li id="boxTop_logo"><img src="img4/logo.png" width="260"></li> -->
                <li id="boxTop_scroll" style="width: 820px;">
                    <div style="white-space:nowrap; overflow:hidden;" id="boxTop_scroll_div" class="">
                        <div id="boxTop_scroll_begin" style="margin: 0px auto; display: block;"><?php  if(empty($reply['jiabintitle'])) { ?><?php  echo $reply['title'];?><?php  } else { ?><?php  echo $reply['jiabintitle'];?><?php  } ?></div>
                        <div id="boxTop_scroll_end"></div>
                    </div>
                </li>
                <li id="boxTop_time">
                    <div class="qr">
                        <dl class="qr1" >
                            <?php  if($reply['up_qrcode']) { ?>
                            <dt style="line-height:14px;"><img class="qrcodeAll" width="80" height="80" src="<?php  echo tomedia($reply['up_qrcode'])?>" title="显示/隐藏 微信二维码"></dt>
                           <?php  } ?>
                            <dd></dd>
                        </dl>
                    </div>
                   
                </li>
            </ul>
        </div>
       
        <div id="boxContent">
           
            <!-- 嘉宾展示 -->
            <div id="jiabinzhanshi" class="boxitem" style="display: block;">
                <div id="jbzs">
                    <ul id="jbzs_list">
                    <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <li onmousedown="jbzs_show(&#39;jbzs_list_<?php  echo $row['id'];?>&#39;);" id="jbzs_list_<?php  echo $row['id'];?>">
                            <div class="avatar">
                                <dl>
                                    <dt><img src="<?php  echo tomedia($row['avatar'])?>"></dt>
                                    <dd><?php  echo $row['name'];?></dd>
                                </dl>
                            </div>
                            <div class="none" style="color: #000;">
                                <dl class="img">
                                    <dt><img src="<?php  echo tomedia($row['img'])?>"></dt>
                                    <dd class="font50"><?php  echo $row['name'];?></dd>
                                </dl>
                                <p><?php  echo $row['description'];?></p>
                            </div>
                        </li>
                    <?php  } } ?>

                    </ul>
                    <div id="jbzs_show" class="img" onmousedown="jbzs_zoom();" style="display: none;">
                        <dl class="img">
                            <dt><img src=""></dt>
                            <dd class="font50">牛根生</dd>
                        </dl>
                        <p>牛根生，蒙牛乳业集团的创始人。老牛基金会创始人、名誉会长，“全球捐股第一人”，1999年离开伊利。1999年创立蒙牛，后用短短8年时间，使蒙牛成为全球液态奶冠军、中国乳业总冠军。</p>
                    </div>
                </div>
                <script>
                /* 嘉宾展示 JS*/
                var JIABINZHANSHI_SWITCH = 1; // 开关
                var JIABINZHANSHI_STATUS = 0; // 状态，0表示停止，1表示正在运行

                function jiabinzhanshi(jsonStr) {
                    if (jsonStr.length > 0 && jsonStr != 0) {} else if (jsonStr == 0) {
                        jbzs();
                    }
                }

                function jbzs() {}

                var jbzs_run_time = 500;

                function jbzs_show(listid) {
                    $("#jbzs_show").html($("#" + listid + " .none").html());
                    $("#jbzs_show").slideToggle(jbzs_run_time);
                }

                function jbzs_zoom() {
                    $("#jbzs_show").slideToggle(jbzs_run_time);
                }
                </script>
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
