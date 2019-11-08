<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html>
<head>
    <title>相册</title>
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
    <script type="text/javascript" charset="utf-8" src="../addons/haoman_base/base/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="../addons/haoman_base/base/swiper.min.css">

    <style>
        html, body {
            position: relative;
            height: 100%;
        }
        body {
            background: rgba(0,0,0,0.66);
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: rgb(120, 120, 120);
            margin: 0;
            padding: 0;
            margin-top: 25%;
            height: 75%;
        }
        .swiper-container {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }
        .swiper-slide {
            background-size: cover;
            background-position: center;
        }
        .gallery-top {

            max-height: 80%;
            width: 100%;
        }
        .gallery-thumbs {
            height: 20%;

            box-sizing: border-box;
            padding: 10px 0;
        }
        .gallery-thumbs .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }
        .gallery-thumbs .swiper-slide-active {
            opacity: 1;
        }

    </style>
</head>
<body>

<div class="swiper-container gallery-top">
    <div class="swiper-wrapper" style=" ">
        <?php  if(is_array($all_photo)) { foreach($all_photo as $row) { ?>
        <div class="swiper-slide" style="background-image:url(<?php  echo tomedia($row['photo'])?>);background-size: 100% 100%"></div>
        <?php  } } ?>
        <!--<div class="swiper-slide" style="background-image:url(img/nature2.jpg)"></div>-->
        <!--<div class="swiper-slide" style="background-image:url(img/nature3.jpg)"></div>-->
        <!--<div class="swiper-slide" style="background-image:url(img/nature4.jpg)"></div>-->
        <!--<div class="swiper-slide" style="background-image:url(img/nature5.jpg)"></div>-->
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white" style="opacity: 0.5; "></div>
    <div class="swiper-button-prev swiper-button-white" style="opacity: 0.5;"></div>
</div>
<div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
        <?php  if(is_array($all_photo)) { foreach($all_photo as $row) { ?>
        <div class="swiper-slide" style="background-image:url(<?php  echo tomedia($row['photo'])?>)"></div>
        <?php  } } ?>
        <!--<div class="swiper-slide" style="background-image:url(img/nature2.jpg)"></div>-->
        <!--<div class="swiper-slide" style="background-image:url(img/nature3.jpg)"></div>-->
        <!--<div class="swiper-slide" style="background-image:url(img/nature4.jpg)"></div>-->
        <!--<div class="swiper-slide" style="background-image:url(img/nature5.jpg)"></div>-->
    </div>
</div>

<!-- Swiper JS -->
<script type="text/javascript" src="../addons/haoman_base/base/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;

</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>
