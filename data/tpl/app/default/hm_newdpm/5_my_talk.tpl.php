<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html>
<head>
    <title>我的交友</title>
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

    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/imgs/js/mzh.funlink.min.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/imgs/js/fastclick.min.js"></script>

    <link href="../addons/hm_newdpm/imgs/css/common.mzh.css" rel="stylesheet">
    <link href="../addons/hm_newdpm/imgs/css/am_icon.css" rel="stylesheet">


    <script>
        $(function(){
            FastClick.attach(document.body);
        });
        var go_talk="<?php  echo $this->createMobileUrl("talk", array('rid' => $rid,'from_user'=>$fans['from_user']))?>";

    </script>

</head>
<body>
<script  type="text/javascript" src="../addons/hm_newdpm/imgs/js/index_talk.min.js?v=2234"></script>
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/talk.min.js"></script>
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/smile.min.js"></script>

<script src="../addons/hm_newdpm/mobimg/lrz.mobile.min.js"></script>
<script src="../addons/hm_newdpm/mobimg/lrz.all.bundle.js"></script>
<link href="../addons/hm_newdpm/imgs/css/index_mf.css" rel="stylesheet" type="text/css"/>

<div id="main_body">
    <div class="head_panel" id="header_panel" style="background-image: url('../addons/hm_newdpm/imgs/top_bg.png')">
        <div class="avatar change_face" style="background-image: url('<?php  echo tomedia($fans['avatar'])?>')"></div>
        <div class="scoll_show">
            <div class="nickname"><?php  echo $fans['nickname'];?></div>
            <div class="tags <?php  if($fans['sex']) { ?>man<?php  } else { ?>woman<?php  } ?>">
                <span class="gender"><?php  if($fans['sex']) { ?>帅哥<?php  } else { ?>美女<?php  } ?></span>
                <span class="face_val change_face">颜值:<span class="untest"> 未测</span></span>
                <span class="stealth "><?php  if($fans['is_online']==0) { ?>在线<?php  } else { ?>隐身<?php  } ?></span>
            </div>
        </div>

    </div>
    <div class="user_panel">
        <ul>
            <?php  if(is_array($all_fans)) { foreach($all_fans as $row) { ?>
            <li class="<?php  if($row['sex']==1) { ?>man<?php  } else { ?>woman<?php  } ?>" uid="<?php  echo $row['from_user'];?>">
                <div class="avatar"  style="background-image: url('<?php  echo tomedia($row['avatar'])?>')">
                </div>
                <div class="userinfo">
                    <div class="nickname"><?php  echo $row['nickname'];?></div>
                    <div class="tags">
                        <span class="gender"><?php  if($row['sex']==1) { ?>帅哥<?php  } else { ?>美女<?php  } ?></span>
                    </div>
                </div>
                <div class="timestr"><?php  echo $row['createtime'];?></div>
            </li>
            <ol></ol>
            <?php  } } ?>

        </ul>
        <div class="loading"><i class="am-icon-spinner am-icon-pulse"></i> <span>加载中…</span></div>
    </div>

<div class="pt-settings-entry">
    <a class="am-icon-cog" href="#"></a>
</div>

<div class="left_panel">
    <ul>
        <li>
                    <a href="<?php  echo $this->createMobileUrl('m_friends', array('rid' => $rid))?>"><span class="unread">现场交友</span></a></li>
                <li><a href="<?php  echo $this->createMobileUrl('my_talk', array('rid' => $rid,'sex'=>1))?>"><span class="man ">男</span></a></li>
        <li><a href="<?php  echo $this->createMobileUrl('my_talk', array('rid' => $rid,'sex'=>2))?>"><span class="woman ">女</span></a></li>
        <li><a href="<?php  echo $this->createMobileUrl('my_talk', array('rid' => $rid))?>"><span class="face ">全</span></a></li>
        <li style="overflow: hidden"><span class="am-icon-list-ul menu"></span>
            <div class="menus" style="display: none">
                <span class="stealth ">隐身</span>
                <span class="line"></span>
                <span class="change_face" style="position: relative">刷颜值<input style="opacity: 0;position: absolute;left: 0;width: 100%;height: 100%;" id="image_upload" type="file"></span>
                <span class="line"></span>
                <span class="change_nickname">昵称</span>
            </div>
        </li>
    </ul>
</div>
</div>


<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>
