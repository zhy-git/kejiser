<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html>
<head>
    <title>今晚豪榜</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no, address=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <script type="text/javascript" src="../addons/haoman_base/base/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/imgs/js/mzh.funlink.min.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/imgs/js/fastclick.min.js"></script>
    <link href="../addons/hm_newdpm/imgs/css/common.mzh.css" rel="stylesheet">
    <link href="../addons/hm_newdpm/imgs/css/am_icon.css" rel="stylesheet">


    <script>
        $(function(){
            FastClick.attach(document.body);
        });
    </script>

</head>
<body>
<link rel="stylesheet" href="../addons/hm_newdpm/imgs/css/charts.css"/>
<body>
<div class="charts_wrap">
    <div class="top">
        <div class="type">
            <div id="tonight_order" class="bangdan <?php  if($type=='today') { ?>active<?php  } ?>" tname="today">今夜榜单</div>
            <div id="total_order"  class="bangdan <?php  if($type=='whole') { ?>active<?php  } ?>" tname="whole">总榜单</div>
        </div>


        <div class="people">
            <div class="commom_people_style" id="third">
                <div class="pic" style=" background-image: url('../addons/hm_newdpm/imgs/2nd.png')"></div>
                <div class="userlogo" style=" background-image: url(<?php  echo tomedia($arr[1]['avatar'])?>)"></div>
                <div class="info">
                    <div class="nickname"><?php  echo $arr[1]['nickname']?></div>
                    <div class="record">金额：<?php  echo $arr[1]['total']?>元</div>
                </div>
            </div>
            <div class="commom_people_style" id="first">
                <div class="pic" style=" background-image: url('../addons/hm_newdpm/imgs/1st.png')"></div>
                <div class="userlogo" style=" background-image: url(<?php  echo tomedia($arr[0]['avatar'])?>)"></div>

                <div class="info">
                    <div class="nickname"><?php  echo $arr[0]['nickname']?></div>
                    <div class="record">金额：<?php  echo $arr[0]['total']?>元</div>
                </div>
            </div>
            <div class="commom_people_style" id="second">
                <div class="pic" style=" background-image: url('../addons/hm_newdpm/imgs/3nd.png')"></div>
                <div class="userlogo" style=" background-image: url(<?php  echo tomedia($arr[2]['avatar'])?>)"></div>

                <div class="info">
                    <div class="nickname"><?php  echo $arr[2]['nickname']?></div>
                    <div class="record">金额：<?php  echo $arr[2]['total']?>元</div>
                </div>
            </div>

        </div>
    </div>
    <div class="bottom">
        <?php  if($arr2) { ?>
        <?php  if(is_array($arr2)) { foreach($arr2 as $index => $row) { ?>
        <div class="infos" >

            <div class="icon"><?php  echo $index+4?></div>
            <div class="avatar" style="background-image: url(<?php  echo tomedia($row['avatar'])?>)"></div>
            <div class="infoarea">
                <div class="name"><?php  echo $row['nickname']?></div>
                <div class="record2">金额:<?php  echo $row['total']?>元</div>
            </div>
            <div class="line"></div>

        </div>
        <?php  } } ?>
        <?php  } ?>
        <?php  if(empty($arr2)) { ?>
        <div class="infos" align="center">
            <span>无数据</span>
        </div>
        <?php  } ?>
    </div>
</div>
<div id="get_back" onclick="location.href ='<?php  echo $url;?>'" style="position: fixed;bottom: 3%;right: 5%;height: 66px;width: 66px;background:rgba(0,0,0,0.1);border: 1px solid #eee;border-radius: 50%;text-align: center;line-height: 66px;color: #fff;font-size: 1.5rem">返回</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script>
    $(".bangdan").click(function(){
        var type=$(this).attr("tname");
        location.href = "<?php  echo $this->createMobileUrl("haobang", array('rid' => $rid,'uid'=>$fans['from_user']))?>&type="+type;
        $(".bangdan").removeClass('active');
        $(this).addClass('active');
    })
</script>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>
