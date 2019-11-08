<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>全部提现</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="../addons/haoman_base/base/sm.min.css">
    <link rel="stylesheet" href="../addons/haoman_base/base/sm-extend.min.css">
    <script type='text/javascript' src='../addons/haoman_base/base/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='../addons/haoman_base/base/sm.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='../addons/haoman_base/base/sm-extend.min.js' charset='utf-8'></script>

    <style type="text/css">
        .pagination {display: inline-block;padding-left: 0;margin: 20px 0;border-radius: 4px;}
        .pagination > li {display: inline;}
        .pagination > li > a,.pagination > li > span {position: relative;float: left;padding: 5px 10px;margin-left: -1px;font-size: 12px;line-height: 1.5;color: #337ab7;text-decoration: none;background-color: #fff;border: 1px solid #ddd;}
        .pagination > li:first-child > a,.pagination > li:first-child > span {margin-left: 0;border-top-left-radius: 4px;border-bottom-left-radius: 4px;}
        .pagination > li:last-child > a,.pagination > li:last-child > span {border-top-right-radius: 4px;border-bottom-right-radius: 4px;}
        .pagination > li > a:hover,.pagination > li > span:hover,.pagination > li > a:focus,.pagination > li > span:focus {z-index: 3;color: #23527c;background-color: #eee;border-color: #ddd;}
        .pagination > .active > a,.pagination > .active > span,.pagination > .active > a:hover,.pagination > .active > span:hover,.pagination > .active > a:focus,.pagination > .active > span:focus {z-index: 2;color: #fff;cursor: default;background-color: #337ab7;border-color: #337ab7;}
        .pagination > .disabled > span,.pagination > .disabled > span:hover,.pagination > .disabled > span:focus,.pagination > .disabled > a,.pagination > .disabled > a:hover,.pagination > .disabled > a:focus {color: #777;cursor: not-allowed;background-color: #fff;border-color: #ddd;}
    </style>
</head>
<body>
<div id="page-city-picker" class="page">
    <header class="bar bar-nav" style="background: #184b85;">
        <a class="button button-link button-nav pull-left back" href="#" style="color: #ffffff">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class='title' style="font-size: 1rem;color: #ffffff">提现记录</h1>
    </header>

    <div class="content">
        <div class="buttons-tab">
            <a href="#tab1" class="tab-link active button">待审核</a>
            <a href="#tab2" class="tab-link button">未通过</a>
            <a href="#tab3" class="tab-link button">全部记录</a>
        </div>
        <div class="content-block">
            <div class="tabs">
              <div id="tab1" class="tab active">
                 <div class="list-block" style="border-radius:6px; ">
                        <ul id="datalist">
                            <?php  if(is_array($dslist)) { foreach($dslist as $row) { ?>
                            <li>
                                <div class="buttons-tab">
                                    <a href="#tab1" class="tab-link button"><?php  echo date("m-d H:i:s",$row['createtime'])?></a>
                                    <a href="#tab2" class="tab-link button">￥<?php  echo sprintf("%1.2f",$row['awardname']/100)?></a>
                                    <a href="#tab3" class="tab-link button"><?php  if($row['status'] == 0) { ?>待审核<?php  } else if($row['status'] == 1) { ?>已提现<?php  } else { ?>未通过<?php  } ?></a>
                                </div>
                            </li>
                            <?php  } } ?>

                        </ul>
                    </div>
                    <?php  echo $dspager;?>
              </div>
              <div id="tab2" class="tab">
                 <div class="list-block" style="border-radius:6px; ">
                        <ul id="datalist">
                            <?php  if(is_array($wtlist)) { foreach($wtlist as $row) { ?>
                            <li>
                                <div class="buttons-tab">
                                    <a href="#tab1" class="tab-link button"><?php  echo date("m-d H:i:s",$row['createtime'])?></a>
                                    <a href="#tab2" class="tab-link button">￥<?php  echo sprintf("%1.2f",$row['awardname']/100)?></a>
                                    <a href="#tab3" class="tab-link button"><?php  if($row['status'] == 0) { ?>待审核<?php  } else if($row['status'] == 1) { ?>已提现<?php  } else { ?>未通过<?php  } ?></a>
                                </div>
                            </li>
                            <?php  } } ?>
                        </ul>
                    </div>
                    <?php  echo $wtpager;?>
              </div>
              <div id="tab3" class="tab">
                   <div class="list-block" style="border-radius:6px; ">
                        <ul id="datalist">
                            <?php  if(is_array($list)) { foreach($list as $row) { ?>
                            <li>
                                <div class="buttons-tab">
                                    <a href="#tab1" class="tab-link button"><?php  echo date("m-d H:i:s",$row['createtime'])?></a>
                                    <a href="#tab2" class="tab-link button">￥<?php  echo sprintf("%1.2f",$row['awardname']/100)?></a>
                                    <a href="#tab3" class="tab-link button"><?php  if($row['status'] == 0) { ?>待审核<?php  } else if($row['status'] == 1) { ?>已提现<?php  } else { ?>未通过<?php  } ?></a>
                                </div>
                            </li>
                            <?php  } } ?>
                        </ul>
                    </div>
                    <?php  echo $pager;?>
              </div>
            </div>
        </div>
    </div>


</div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>

</html>