<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>抢红包 - <?php  echo $reply['title'];?></title>
    <link rel="stylesheet" href="../addons/hm_newdpm/img/base.css">
    <link rel="stylesheet" href="../addons/hm_newdpm/img/style.css?v=33">
    <script src="../addons/haoman_base/base/jquery-1.9.1.min.js"></script>
    <script src="../addons/hm_newdpm/img/jquery.soChange.js"></script>
    <script src="../addons/hm_newdpm/img/scroll-marquee.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.cookie.js"></script>
    <style type="text/css">
        .cutdown-start{
            display: none;
            width: 500px;
            font-size: 334.6px;
            line-height: 478px;
            height: 480px;
            text-align: center;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -250px;
            margin-top: -120px;
            z-index: 99999999
        }
        .cutdownan-imation {
            -webkit-animation: cutdownan-keyframes 1000ms infinite ease both;
            -moz-animation: cutdownan-keyframes 1000ms infinite ease both;
        }

        @-webkit-keyframes cutdownan-keyframes {
            0% {
                opacity: 0;
                -webkit-transform: scale(.3)
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05)
            }
            70% {
                -webkit-transform: scale(.9)
            }
            100% {
                -webkit-transform: scale(6);
                opacity: 0
            }
        }

        @-moz-keyframes cutdownan-keyframes {
            0% {
                opacity: 0;
                -moz-transform: scale(.3)
            }
            50% {
                opacity: 1;
                -moz-transform: scale(1.05)
            }
            70% {
                -moz-transform: scale(.9)
            }
            100% {
                -moz-transform: scale(6);
                opacity: 0
            }
        }
        #wrap {
            position: relative;
            width: 100%;
            min-width: 1014px;
            height: 100%;
            overflow: hidden;
            <?php  if(empty($video['vodio_bg6'])) { ?>background: #fefefe url(<?php  echo $bg;?>) no-repeat;<?php  } ?>
            background-size:100% 100%;
        }
        .title_color{
        color: <?php  if(empty($xysreply['xys_backcolor'])) { ?>#fff604;<?php  } else { ?><?php  echo $xysreply['xys_backcolor'];?>;<?php  } ?>;
        }
    </style>
</head>

<body <?php  if(!empty($video['vodio_bg6'])) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg6'])?>"<?php  } ?>>
    <div id="wrap" class="wrapbg">
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
        <div id="whole">
            <div id="header" class="clearfix"></div>
        </div>
        <div class="h-main">
            <div class="red-level h-all">
            </div>
            <img src="../addons/hm_newdpm/img/bg1-top1.png?v=232432443423" class="h-float h-all">
            <a href="javascript:;" class="begin-time <?php  if($gameover ==0) { ?>djsBtn<?php  } ?> hidden" style="display: inline;"><?php  echo $text;?></a>
            <a href="javascript:;" class="chongzhi-time czBtn hidden" <?php  if($gameover ==0) { ?>style="display: none;"<?php  } else { ?>style="display: inline;"<?php  } ?>>重置活动</a>
            
            <div class="h-yellow hbTitle">
                <div class="question-prev ">
                    <div class="blink-border">
                        <img src="../addons/hm_newdpm/img/blink.png" class="h-blink">
                    </div>
                    <div class="step step1 hidden" style="display: block;">
                        <div class="h-clock alarm my-clock hidden clockBox"></div>
                        <p class="clock-time my-clock hidden clockNum"><?php  echo $end_hour;?></p>
                        <img src="../addons/hm_newdpm/img/h-text2.png?v=42344223" class="h-text type1 hidden" style="display: inline;">
                    </div>
                </div>
                <div class="section congratulation hidden goldBox">
                    <div class="good-light fadeIn01"></div>
                    <div class="good-gold fadeIn01"></div>
                </div>
            </div>
        </div>
        <div class="pop-bg hidden popBg"></div>
        <div class="pop-title hidden popTitle" style="display: block">
            <div class="inner clearfix">
                <span class="left" id="nodjs">
                    活动<br>
                    未开始
                </span>
                <span class="left" id="djs">
                    离结束<br>
                    <em id="djsnum"></em>秒
                </span>
                <div class="txt left tFirstConten hidden"></div>
                <div class="txt-best tBastConten left hidden title_color" style="display: block"><?php  echo $reply['title'];?></div>
                <span class="right">
                    <?php  if($reply['up_qrcode']) { ?>
                    <img class="qrcodeAll" src="<?php  echo tomedia($reply['up_qrcode'])?>" style="width: 100%;height: 100%;margin-top: -15px;">
                    <?php  } ?>
                </span>
            </div>
            <div class="light1 fadeIn03"></div>
            <div class="light2 fadeIn04"></div>
            <div class="light3 fadeIn04"></div>
            <div class="light4 fadeIn04"></div>
            <div class="light5 fadeIn03"></div>
        </div>
        <div class="popBox"></div>
        <div class="pop-rank-bg hidden rankBox">
            <div class="pop-rank">
                <div class="inner rankInner">
                    <div class="title bangTitle">抢红包排行榜</div>
                    <div class="rank-others swiper-container otherRank hidden" style="overflow-y: auto;">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide clearfix"> <span class="num left">第2名：</span> <span class="ava left"><img src=""></span> <span class="name left">先生</span><span class="count right">测试奖品</span></li>
                        </ul>
                       <p> <a style="bottom: -25px;background-color: #fff7bd;color: #e1433d;" href="javascript:;" class="chongzhi-time czBtn">重置活动</a></p>
                    </div>
                    <div class="rank-none noPrizedList hidden">
                        <p>对不起，目前没有用户中奖</p>
                        <p><a style="top: 180%;background-color: #ffe07c;color: #e14740;" href="javascript:;" class="chongzhi-time czBtn">重置活动</a></p>
                    </div>
                </div>
            </div>
        </div>
        

    

    <audio src="<?php  echo $music2;?>" preload="auto" id="media2"></audio>

    <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>
    <!-- <audio loop="loop" src="<?php  echo $music;?>" id="media" preload="preload"></audio> -->
   <div class="cutdown-start cutdownan-imation">GO!</div>




    <script type="text/javascript">
    $(document).ready(function() {
        if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
            document.getElementById('media').pause();
        }
    });
    var _m = document.getElementById('media2');
    function test() {
        $(".cutdown-start").hide();
        $(".cutdown-start").removeClass("cutdownan-imation");
        _m.pause();
    }
    function gameStatus(status) {
            var submitData = {
                isqhbshow: status,
                id:<?php  echo $rid;?>
            };
            $.post('<?php  echo $this->createMobileUrl('hbstatus')?>', submitData, function(idata) {
                if (idata.success == 1) {

                     // alert(idata.msg);
                } else {

                    alert(idata.msg);

                }
            },"json");
        }

        $(".czBtn").click(function() {
            var submitData = {
                id:<?php  echo $rid;?>
            };
            $.post('<?php  echo $this->createMobileUrl('hbchongzhi')?>', submitData, function(idata) {
                if (idata.success == 1) {
                     location.href = "<?php  echo $this->createMobileUrl('dpm_qianghongbao',array('rid'=>$rid))?>";
                } else {
                    alert(idata.msg);
                }
            },"json");
        });
    </script>
    <script type="text/javascript">
    var FansNewData = new Array();
    var rankFansNewData = new Array();
    var meslen = 0;
    var cur = 0;
    var tt=1;
        $(".djsBtn").click(function() {
        _m.play();
        $(".djsBtn").hide();
        $(".clockBox").show();
        $(".clockNum").show();

        var diffTime = <?php  echo $end_hour;?>;
        diffTime -= 1;

        _djsObj = setInterval(function() {

            if (diffTime <= 0) {

                clearInterval(_djsObj);
                gameStatus(1);

                 _djsObj = null;
                 $(".clockBox").hide();
                 $(".clockNum").hide();
                 $(".type1").hide();
                 $(".cutdown-start").show();
                 window.setTimeout(test,1000);
                 _closeGame();
                 $("#nodjs").hide();
                 $("#djs").show();

//                _closePoint();
                 if (!$(".goldBox:visible").length) {
                     $(".goldBox").show()
                 }
                 $(".popBg").css({
                     zIndex: 100
                 }).show()
                 renderWinner();
                 // getRecentHb();
//                _m.pause();
                 return


            } else {
                $(".clockNum").text(diffTime);
                diffTime -= 1
            }
        }, 1000)
    });


    _closeGame = function() {
        var closeDiffTime = <?php  echo $start_hour;?>;
        $("#djsnum").text(closeDiffTime);
        closeDiffTime -= 1;
        _closeObj = setInterval(function() {
            if (closeDiffTime <= 0) {
                gameStatus(0);
                clearInterval(_closeObj);
                _closeObj = null;
                
                $("#djs").html("活动已<br>经结束");
                _rankList();
                return
            } else {
                $("#djsnum").text(closeDiffTime);
                closeDiffTime -= 1
            }
        }, 1000)


    };

    _rankList = function() {
        pullRenWinStop();

        $.ajax({
            url: "<?php  echo $this->createMobileUrl('dpm_getWinHbList', array('rid' => $rid,'hbpici'=>$reply['hbpici']))?>",
            dataType: "json",
            data: {
            },
            beforeSend: function () {
               
            },
            success: function (data) {
                console.log(data.ret);
                if(data.ret == 1){

                    rankFansData = data.data;
                    $.each(rankFansData, function(i, v) {
                        rankFansNewData.push(new Array(v['id'], v['avatar'], v['nickname'], v['credit'], v['awardname'], v['prizetype']));
                    });

                    if(rankFansData.length == 0){
                        $(".noPrizedList").show();
                        $(".otherRank").hide();
                        $(".rankBox").show();
                    }else{
                        var html = '';
                        for (var i = 0; i < rankFansData.length; i++) {
                            var sort = i+1;
                            if(rankFansNewData[i][5]==0){
                                var award = rankFansNewData[i][3]/100+"元红包";
                            }else{
                                var award = rankFansNewData[i][4];
                            }
                            html += '<li class="swiper-slide clearfix"> <span class="num left">第'+sort+'名：</span> <span class="ava left"><img src="'+rankFansNewData[i][1]+'"></span> <span class="name left">'+rankFansNewData[i][2]+'</span><span class="count right">'+award+'</span></li>';
                        }

                        $(".swiper-wrapper").html(html);
                        $(".noPrizedList").hide();
                        $(".otherRank").show();
                        $(".rankBox").show();
                    }

                    

                }
                
            },
            error: function () {
                console.log('无法访问服务器');
//                alert("网络太慢了，获取不到奖品信息！");
            },
            timeout: 15000
        })


        
    };


    getRecentHb = function(){
        $.ajax({
            url: "<?php  echo $this->createMobileUrl('dpm_getHbList', array('rid' => $rid,'hbpici'=>$reply['hbpici']))?>",
            dataType: "json",
            data: {
                len:meslen,
            },
            beforeSend: function () {
               
            },
            success: function (data) {
                console.log(data.data);
                if(data.ret == 1){
                    FansData = data.data;
                    totaldata = data.num;
                    // alert(totaldata)
                    // var len = 0;
                    $.each(FansData, function(i, v) {
                        FansNewData.push(new Array(v['id'], v['avatar'], v['nickname'], v['credit'], v['awardname'], v['prizetype']));
                        meslen++;
                    });

                }else{
                     window.setTimeout('getRecentHb();', 2000);
                }
                
                
            },
            error: function () {
           console.log('访问服务器失败！')
//   alert("网络太慢了，获取不到奖品信息！");
            },
            timeout: 15000
        })
    }



    </script>
    <script type="text/javascript">
    pullRenWinStop = function() {
        clearTimeout(_pullRwinObj);
        _pullRwinObj = null;
    }
    var _playedWinNum = 0;

    again = function() {
        _playedWinNum = 0;
        renderWinner();
    }

    renderWinner = function() {
//console.log(FansNewData.length)
    if (FansNewData.length > 0) {
        pullRenWinStop();
        // if (_playedWinNum > 12) {
        //     pullRenWinStop();
        //     again();
        //     return;
        // }

        var currObj = FansNewData.splice(0, 1);
        console.log(currObj[0])

        var titleBox = $(".popTitle");
        titleBox.find(".tFirstIcon").hide();
        titleBox.find(".tFirstConten").hide();

        var popBox = $(".popBox");
        var pL = popBox.find(".pop-paper").length;
        var poppaper = popBox.find(".pop-paper");
        var newClass = "";
        var k = 0;
        if (pL < 8) {
            k = pL + 1;
            newClass = "zoomIn0" + k
        } else {
            var n = Math.floor(1 + Math.random() * 8);
            newClass = "zoomIn0" + n
        }
        k = 0;
        var html = '<div class="pop-paper paper1 ' + newClass + ' ">                 <div class="inner">                 <div class="ava"><img src="'+currObj[0][1]+'"></div>                <em class="icon-rand1 hidden sFirstIcon">第一个</em>               <em class="icon-best hidden sBastIcon">最好的</em>                 <div class="txt">                 <p>'+currObj[0][2]+'</p>';
        if(currObj[0][5] == 0){
            html += "<p>获得" + currObj[0][3]/100 + "元</p>";
        }else{
            html += "<p>获得" + currObj[0][4] + "</p>";
        }

        html += '</div>                  <div class="light rotate01"></div>                 </div>             </div>';
        if (!$(".popBg:visible").length) {
            $(".popBg").show()
        }

        // popBox.append(html)

        // if (pL > 24) {
        //     popBox.find("." + newClass).first().remove();
        // }

        if (pL < 8) {
            popBox.append(html)
        } else {
            popBox.append(html);
            // popBox.find("." + newClass).prev().hide();
            setTimeout(function() {
                popBox.find("." + newClass).first().remove()
            }, 3000)
        }

        _playedWinNum++
        cur++;

    }else{
        window.setTimeout('getRecentHb();', 2000);
    }

        
        // window.setTimeout('getRecentHb();', 3000);
    

        _pullRwinObj = setTimeout(function() {
            renderWinner()
        }, 4000)


    };

    function spaceStart(){
    //预留空格开始的方法，不要删除
    }
   
    </script>
  
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
