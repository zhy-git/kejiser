<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php  echo $reply['title'];?></title>
    <meta name="keywords" content="index">
    <meta name="description" content="index">
    <script src="./index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=haoman_base&do=GetJs&js=jquery191min" type="text/javascript"></script>
    <style type="text/css">
        html,body{
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            margin: 0;
            overflow: hidden;
        }
        .fl-inner1{
            height: 645px;
        }
    </style>
</head>

<body>
<iframe src="<?php  echo $url;?>" name="page22" id="framePage" width="100%" height="100%" style="border: 0;"></iframe>
<div class="fl-layer1 floatLayer introBox" style="display:none;top: 75px;">
    <div class="fl-inner1" style="height: 647px;">
        <a class="flbtn-close showIntroBtn"></a>
        <p class="notice1">
        <?php  if(empty($reply['qrcodedec'])) { ?>
        使用微信扫描以下二维码，发送关键词【<span style="color: red;"><?php  echo $keywords['keywords'][0]['content'];?></span>】既可以参与活动
        <?php  } else { ?>
        <?php  echo $reply['qrcodedec'];?>
        <?php  } ?>
        </p>
         <div style="width: 530px;height: 530px;margin-left: 195px;">
             <img src="<?php  echo tomedia($reply['up_qrcode'])?>" style="width: 520px;">
         </div>
        <!--<ul class="img-list">-->
            <!--<li class="img-b"><img src="<?php  echo tomedia($reply['up_qrcode'])?>" alt=""></li>-->
            <!--&lt;!&ndash;<li class="img-d"><img src="<?php  echo tomedia($reply['up_qrcode'])?>" alt=""></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<li class="img-s"><img src="<?php  echo tomedia($reply['up_qrcode'])?>" alt=""></li>&ndash;&gt;-->
        <!--</ul>-->
    </div>
</div>

<div class="shipingplay" id="shipingplay"> <i class="closeb closeshiping"></i>
<video class="shiping_id" id="shiping_id" controls autoplay ></video>
<input id="v_file" type="file" style="display:none;" onChange="play()"/>
<button id="play" onClick="yincang()" class="playbtn">打开MP4视频文件</button>
<script>
function yincang(){
var v_file=document.getElementById('v_file');
v_file.click();
}
function play(){
var file = document.getElementById('v_file').files[0];
var url = URL.createObjectURL(file);
console.log(url);
document.getElementById("shiping_id").src = url;

}
</script> 
</div> 

<div class="mark-ewm"></div>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_footer', TEMPLATE_INCLUDEPATH)) : (include template('dpm_footer', TEMPLATE_INCLUDEPATH));?>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>

</html>
