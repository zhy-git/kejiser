<?php defined('IN_IA') or exit('Access Denied');?><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php  if($reply['vote_title']) { ?><?php  echo $reply['vote_title'];?><?php  } else { ?>投票项目列表<?php  } ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
 <link href="../addons/hm_newdpm/img9/vote_list.css?v=222" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery-2.1.4.min.js"></script>
</head>
<body <?php  if($reply['vote_bgcolor']) { ?>style="background-color: <?php  echo $reply['vote_bgcolor'];?>;<?php  } ?>">
<div id="header">
  <div id="logo"><img src="<?php  if($reply['tptop_url']) { ?><?php  echo tomedia($reply['tptop_url'])?><?php  } else { ?>../addons/hm_newdpm/img9/tpbanner.png<?php  } ?>" style="vertical-align: bottom"></div>
  <!--<div id="time"><li>开始时间：2016-12-13 00:00:00</li><li>结束时间：2016-12-21 23:59:00</li></div>-->
</div>
<div id="main" >
    <div id="list">
        <?php  if(is_array($option)) { foreach($option as $row) { ?>

        <div class="ml" rel="0" <?php  if($reply['vote_opcolor']) { ?>style="background-color: <?php  echo $reply['vote_opcolor'];?>;<?php  } ?> onclick="go_option(<?php  echo $row['id'];?>)">
            <li class="na"><?php  echo $row['vote_name'];?></li>
            <li class="na" style="padding-top: 0px;padding-bottom: 0px;max-height: 220px;"><img src="<?php  echo tomedia($row['vote_img'])?>" style="width: 100%"></li>
            <li class="no" style="padding-bottom: 0px;"><?php  echo $row['vote_description'];?></li>
            <li class="no" >进入投票和查看排名>></li>
        </div>

        <?php  } } ?>
    </div>
</div>
<div id="footer" style="color:#EAB387;"><?php  if(empty($reply['copyright'])) { ?> &copy;<?php  echo $_W['account']['name'];?><?php  } else { ?>&copy;<?php  echo $reply['copyright'];?><?php  } ?></div>
<script>
    go_option =function (option_id) {
        location.href = "<?php  echo $this->createMobileUrl('new_vote_index', array('id' => $rid))?>&option_id="+option_id;
    }
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>