<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>投票 - <?php  echo $reply['title'];?></title>
    <link rel="stylesheet" href="../addons/hm_newdpm/img9/style.css?v=31312332">
    <!-- <link rel="stylesheet" href="../addons/hm_newdpm/img9/swiper.min.css"> -->
    <link rel="stylesheet" href="../addons/haoman_base/base/swiper.min.css">
    <!-- <script src="../addons/hm_newdpm/img9/jquery-2.2.3.min.js"></script> -->
    <script type="text/javascript" src="../addons/haoman_base/base/jquery-1.9.1.min.js"></script>
    <style type="text/css">
        html,body{
            height: 100%;
        }
        body{ background:url(<?php  echo $bg;?>) center top no-repeat; background-size:100% 100%; text-shadow:3px 3px 6px rgba(0,0,0,0.2);}
        .fl-layer{ padding-top:60px; position:static; top:0; margin-bottom:15px;}
        .fl-inner{ height:616px; background:url(../addons/hm_newdpm/img9/bg4.png?v=42343) center top no-repeat; background-size:100% 100%; transition: all .6s ease;}
        .container1 .top .center span.title{
        color: <?php  if(empty($xysreply['xys_backcolor'])) { ?>#fff604;<?php  } else { ?><?php  echo $xysreply['xys_backcolor'];?>;<?php  } ?>;
        }
    </style>
</head>

<body <?php  if(!empty($video['vodio_bg9'])) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg9'])?>"<?php  } ?>>
    <div id="wrap" class="wrapbg" style="height: 100%;">
        
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
        <div id="whole" style="width: 1400px;">
            <div class="container1" style="padding-top: 15px;">
                <div class="top">
                    
                    <div class="center" style="width: 1400px;">
                        <span class="title" style="font-size: 32px;"><?php  echo $reply['toupiaotitle'];?></span>
                    </div>
                    <div class="right" style="position: absolute;top: 20px;right:6%;">
                        <span class="tipword messageword ">
                            <span id="messageNum" class="num">0</span><br>
                            <span class="plus">人参与</span>               
                        </span>
                        <?php  if($reply['up_qrcode']) { ?>
                        <img class="qrcode qrcodeAll" src="<?php  echo tomedia($reply['up_qrcode'])?>">
                        <?php  } ?>
                    </div>
                </div>
            </div>

            <div class="fl-layer ">
                
                <div class="fl-inner " style="height: 660px; visibility: visible;width: 1400px;">
                    <div class="votewrap" id="soption">
                        <div class="votebox row1 clearfix ">
                            <div class="srow swiper-container swiper-container-horizontal" style="width: 1230px;text-align: center;">
                                <ul id="option_list" class="slist swiper-wrapper clearfix" >
                                <?php  if(is_array($toupiao)) { foreach($toupiao as $index => $row) { ?>
                                    <li class="swiper-slide " data-id="<?php  echo $row['id'];?>"  style="width: 128.333px;">
                                        <p class="text-<?php  echo $index%6?>"  style="text-align: center;margin-bottom: 25px;">票数<span style="display: block" class="get_num"><?php  echo $row['get_num'];?></span></p>
                                        <div class="example">
                                            <p class="stopic" style="top:360px;"><?php  echo $row['name'];?></p>
                                            <!-- <p class="stopic2"></p> -->
                                            <div class="progress" style="height:356px;">
                                                <div class="progress-bar progress-bar-<?php  echo $index%6?>" style="height:<?php  echo sprintf("%1.2f",($row['get_num']/$totalnum)*100)?>%;"> <span><?php  echo sprintf("%1.2f",($row['get_num']/$totalnum)*100)?>%</span></div>
                                            </div>
                                        </div>
                                        <div class="ava" ><img src="<?php  echo tomedia($row['avatar'])?>"></div>
                                        <p style="margin-top: 5px;text-align: center;">编号<?php  echo $row['number'];?></p>
                                    </li>

                                <?php  } } ?>
                                  
                                </ul>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev swiper-button-disabled"></div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
    </div>
    <div class="pop-bg js_popCode msgBigIn hidden" style="left: 0px; top: 0px; background: rgba(0, 0, 0, 0);">
        <div class="pop-code">
            <img src="<?php  echo tomedia($reply['up_qrcode'])?>">
            <p>扫码二维码加入投票</p>
        </div>
    </div>


    <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>
    <!-- <script src="../addons/hm_newdpm/img9/swiper.min.js"></script> -->
    <script src="../addons/haoman_base/base/swiper.min.js"></script>
    
    <script type="text/javascript">
    $(function() {
        if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
            document.getElementById('media').pause();
        }
        setInterval(function(){
            $.ajax({
                url:"<?php  echo $this->createMobileUrl('dpm_voteList', array('rid' => $rid))?>",
                dataType:'json',
                success:function(data){

                    var shenyu = data['shenyu'];
                    var datalist = data['datalist'];
                    $('#messageNum').html(shenyu);
//                     console.log(datalist)
                    // console.log(shenyu);
                    for (var votei = 0; votei < datalist.length; votei++) {

                        voteh = $("#option_list li[data-id=" + datalist[votei].id + "]")
                        votef = (datalist[votei].get_num/data['num'])*100;
                        votef = Math.round(votef*100)/100;
                        if(votef == null || votef == NaN || votef == undefined){
                            votef = 0.00;
                        }
                        voteh.find(".progress-bar").css("height", votef + "%")
                        voteh.find(".progress-bar span").text(votef + "%");
                        voteh.find(".get_num").text(datalist[votei].get_num);
                    }
                }
            })
        },4000);

       
    });

    var stopAnimate = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    //二维码弹层
    // $('.qrcodeAll').click(function() {
    //     var currLeft = $(this).offset().left;
    //     var currTop = $(this).offset().top;

    //     $('.js_popCode').css({
    //         left: currLeft,
    //         top: currTop
    //     }).removeClass('hidden').addClass('msgBigIn').one(stopAnimate, function() {
    //         $(this).css({
    //             background: 'rgba(0,0,0,0.7)'
    //         });
    //     });

    //     $('.js_popCode').animate({
    //         left: 0,
    //         top: 0
    //     }, 500);

    // });

    $('.pop-bg').click(function() {
        $(this).addClass('hidden').css({
            background: 'rgba(0,0,0,0)'
        });
        $(this).find('dt').attr('class', '');
    })
    </script>

    <script>     

    var showNum = 10;

    if(showNum>10){
        showNum = 10;
    }

    var mySwiper = new Swiper(".srow", { 
        nextButton: ".row1 .swiper-button-next", 
        prevButton: ".row1 .swiper-button-prev", 
        slidesPerView: showNum, 
        slidesPerGroup: showNum, 
        keyboardControl: !0, 
        speed: 1e3, 
        autoplay: 6e3,
        autoplayDisableOnInteraction: !1, 
        spaceBetween: 0 
    });    

    function spaceStart(){
    //预留空格开始的方法，不要删除
    } 
    </script>

   

   
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
