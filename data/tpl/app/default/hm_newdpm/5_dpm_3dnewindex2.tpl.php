<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>3D抽奖 - <?php  echo $reply['title'];?></title>
    <link rel="stylesheet" href="../addons/hm_newdpm/newimg2/3d.css">
    <link rel="stylesheet" href="../addons/hm_newdpm/newimg2/style.css?v=323232232" media="screen" type="text/css">
    <link rel="stylesheet" href="../addons/hm_newdpm/newimg2/normalize.css">
    <script src="./index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=haoman_base&do=GetJs&js=jquery191min" type="text/javascript" charset="utf-8"></script>
    <script src="../addons/haoman_base/base/jquery.easing.min.js" type="text/javascript"></script>
    <style type="text/css">
        .hidden{
            display: none;
        }
        .pre{
            width: 45px;height: 45px;float: left;margin-top: 35%;display: none;
        }
        .notpre{
            width: 45px;height: 45px;float: left;margin-top: 35%;
        }
        .next{
            width: 45px;height: 45px;float: right;margin-top: 35%;
        }
        .notnext{
            width: 45px;height: 45px;float: right;margin-top: 35%;display: none;
        }
        .imgshow{
            width: 220px;
            height: 220px;
            margin-top: 30px;
        }
        body{

            background-image:url(<?php  echo $bg;?>);

        }
        .deep-orange{
        background-color: <?php  if($reply['backcolor']) { ?><?php  echo $reply['backcolor'];?>;<?php  } else { ?>#ff5722<?php  } ?>;
        }
        .kpstartbtn, .kpwall_title{
        background-color: <?php  if($reply['backcolor']) { ?><?php  echo $reply['backcolor'];?>;<?php  } else { ?>#ff5722<?php  } ?>;
        }
        .container1 .top .center span.title{
        color: <?php  if(empty($xysreply['xys_backcolor'])) { ?>#fff604;<?php  } else { ?><?php  echo $xysreply['xys_backcolor'];?>;<?php  } ?>;
        }
    </style>
</head>

<body thistype="sign_wall" <?php  if(!empty($video['vodio_bg5'])) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg5'])?>"<?php  } ?>>
    <div class="container" style="position: absolute;    z-index: 99999999999999999;">
        <div class="container1" style="padding-top: 15px;">
            <div class="top">
                
                <div class="center">
                    <span class="title" style="font-size: 32px;"><?php  echo $reply['title'];?></span>
                </div>
            </div>
        </div>

     <div style="position: absolute;width: 100%;z-index: 1;">
         <div style="width: 1024px;position: relative;margin-left: auto;margin-right: auto;">
            <button id="close-draw" class="kpstartbtn luck-wait lotter-wait" style="display: none;margin-left: 116px;margin-top: 474px;">停止</button>
         </div>
     </div>

        <div id="wallCont" class="mainwidth" data-modle="wall-modle-cont" style="position: absolute;">
         <div id="gift-wall-block" class="wall-box none msg-opacity8" style="color: rgb(255, 255, 255); display: block;">
            <div class="luck-draw">
                <div class="custom-bg"></div>
                <div class="luck-presz">
                <ul id="awardCategoryBox">
                    <?php  if(is_array($list)) { foreach($list as $index => $row) { ?>
                    <li data-categoryid="<?php  echo $row['id'];?>" <?php  if($index == 0) { ?>class=""<?php  } else { ?>class="hidden"<?php  } ?>>
                    <div class="imgbox" >
                        <img class="pre" src="../addons/hm_newdpm/newimg2/left.png?v=323123">
                        <img class="notpre" src="../addons/hm_newdpm/newimg2/not_left.png?v=323123">
                        
                        <img class="imgshow" src="<?php  echo tomedia($row['awardsimg'])?>" alt="">
                        
                        <img class="next" src="../addons/hm_newdpm/newimg2/right.png">
                        <img class="notnext" src="../addons/hm_newdpm/newimg2/not_right.png">
                    </div>
                    <div class="luck-torryname stellblue-text deep-orange imgName"><?php  echo $row['prizename'];?></div>
                    </li>
                    <?php  } } ?>
                </ul>

                    <div class="drawbox">
                        <div class="draw-contrbox">
                            <button id="start-draw" class="kpstartbtn luck-wait lotter-wait">开始</button>
                            <!-- <button id="close-draw" class="kpstartbtn luck-wait lotter-wait" style="display: none">停止</button> -->
                            <p class="latter-totalnum stellblue-text deep-orange" style="margin-top: 15px;"><span class="lotteryUserNum"><?php  echo $totaldata;?></span>人参与
                                 <span style="margin-left: 50px;font-size: 16px;">一次抽取</span>
                                    <select name="" id="lotteryNumSel" style="color: #060606;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                    </select>
                                    <span style="font-size: 16px;">人</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lottery-poper"><a id="trashlottery" class="tooltip tooltipstered"><i class="fa fa-trash fa-fw fa-2x"></i></a>
                    <p class="lottery-list deep-orange" style="margin-bottom: 15px;"><!-- <span style="float: left;font-size: 18px;">普通模式</span> --><?php  if($reply['iscjnum']==0) { ?>获奖总人数<?php  } else { ?>获奖人数<?php  } ?>(<b class="winUserNum"><?php  echo $winUserNum;?></b>人)<span class="reset" style="float: right;font-size: 24px;">重置</span></p>
                    <div class="lottery-box">
                        <?php  if(is_array($awardslist)) { foreach($awardslist as $row) { ?>
                        <div class="lottery-limt lottery-smallimg" data-id="<?php  echo $row['id'];?>" title="<?php  echo $row['nickname'];?>" style="cursor:pointer">
                            <div class="box" >
                                <img class="lottery-avatar" src="<?php  echo tomedia($row['avatar'])?>">
                            </div>
                            <div class="nickname"><span><?php  echo $row['nickname'];?></span></div>
                        </div>
                        <?php  } } ?>

                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>



    </div>
    <div id="container" style="display:none;"></div>
    <canvas class="canvas" height="700"></canvas>

    <div class="mark-ewm"></div>
    <input type="hidden" id="max_id" name="max_id" value="206486">
    <script type="text/javascript">
    $('#screen_ecode').on('click', function() {
        $('#url_code2').toggleClass('hover').css('top', 50);
    });
    $('#url_code2').on('click', function() {
        $('#url_code2').removeClass('hover');
    });
    $('#url_code').on('click', function() {
        $(".mark-ewm").hide();
        $('#url_code').removeClass('hover');
    });
    </script>
    <script type="text/javascript">
    var is_show_info = 1;
    var hFont;
    var showstyle = <?php  echo $showstyle;?>;
    var t = <?php  echo $tt;?>;
    (function(doc, win) {
        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function() {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                hFont = 20 * (clientWidth / 320);
                docEl.style.fontSize = hFont + 'px';
            };

        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);
    </script>
    <script src="../addons/hm_newdpm/newimg2/2d.js?v=3123"></script>
    <script type="text/javascript">
    var personArray = new Array;

    <?php  if(is_array($fanslist)) { foreach($fanslist as $row) { ?>

        personArray.push({
            id: <?php  echo $row['id'];?>,
            image: "<?php  echo tomedia($row['avatar'])?>",
            thumb_image: "<?php  echo tomedia($row['avatar'])?>",
            name: "<?php  echo $row['nickname'];?>"
        });


    <?php  } } ?>
    </script>
    <script src="../addons/hm_newdpm/newimg2/arrfiles.js?v=313232"></script>
    <script type="text/javascript">
    QD.Dc.init('.canvas');

    var placeholder_image_cnt = 9;
    var placeholder_image_index = 0;
    var default_placeholder_image = "";


    var edit_personArray = new Array;
    var placeholder_image = default_placeholder_image;
    var table = new Array;
    for (var i = 0; i < 126; i++) {
        table[i] = new Object();
        if (i < personArray.length) {
            table[i] = personArray[i];
            table[i].src = personArray[i].thumb_image;
        } else {

            if (placeholder_image_cnt > 0) {
                if (placeholder_image_index >= placeholder_image_cnt) {
                    placeholder_image_index = 0;
                }

                placeholder_image = placeholder_image_arr[placeholder_image_index];
                placeholder_image_index++;
            }
            table[i].src = placeholder_image;
        }
        table[i].p_x = i % 20 + 1;
        table[i].p_y = Math.floor(i / 20) + 1;
    }

    //打乱数组顺序
    table = table.sort(function() {
        return Math.random()
    });


    var signwall_show_str = "#torus";

    var show_interval = "0"; 

    var return_array = new Array();

    function getArrayItems(arr, num) {
        var temp_array = new Array();
        for (var index in arr) {
            temp_array.push(arr[index]);
        }

        for (var i = 0; i < num; i++) {
            if (temp_array.length > 0) {
                var arrIndex = Math.floor(Math.random() * temp_array.length);
                return_array[i] = temp_array[arrIndex];
                temp_array.splice(arrIndex, 1);
            } else {
                return false;
            }
        }
        return return_array;
    }
    getArrayItems(personArray, 50);

    window.onload = function() {
        QD.init();
    }

    function opening(){
        transform( targets.grid, 50, 'grid', 20000);
        $('#container').show();
    }

    function closeing(){
        TWEEN.removeAll();
        $("div").remove(".element");
        $('#container').hide();
    }


     var newPic = new Array(),
        signNo = 0,
        name,qdword;
    setInterval(function() {
        if (newPic.length > 0) {

            var firstInfo = newPic.shift();
            // console.log(newPic.length);
            var showImg = firstInfo.image;
            name = firstInfo.name;
            qdword = firstInfo.qdword;
            
            personArray.push(firstInfo);

            $('.element').eq(personArray.length - 1).find('img').attr('src', showImg);

        } 
        
        
        getArrayItems(personArray, 50);
            
    }, 8000);
    </script>
    <script src="./index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=haoman_base&do=GetJs&js=threemin"></script>
    <script src="../addons/hm_newdpm/newimg2/tween.min.js"></script>
    <script src="../addons/hm_newdpm/newimg2/CSS3DRenderer.js"></script>
    <script src="../addons/hm_newdpm/newimg2/3d.js?v=3123212"></script>
    <script type="text/javascript">
    init();
    animate();
    </script>
    <script type="text/javascript">
    var stop = false
    var getAvatar = setInterval(get_new_sign_list, 5000);
    function get_new_sign_list() {

        var data = {};
        if (stop) return;

        stop = true;
        data.max_id = $('#max_id').val();
        // console.log(data.max_id)
        $.ajax({
            url: "<?php  echo $this->createMobileUrl('dpm_get3dqd',array('rid'=>$rid))?>",
            dataType: "JSON",
            type: "GET",
            data: data,
            success: function(result) {
                    if (result.max_id) {
                        $('#max_id').val(result.max_id);
                    }
                    if (result.record) {

                        $.each(result.record, function(key, row) {
                            var tmp = {
                                id: row.id,
                                image: row.avatar,
                                thumb_image: row.avatar,
                                name: row.nickname,
                                qdword: row.qdword
                            };
                            var person_info = eval(tmp);
                            newPic.push(person_info);
                        });
                        
                    }

                stop = false;

            }
        });
    }

    var fansNewData = new Array();
    var nextFansNewData = new Array();
    var prevFansNewData = new Array();
    var award_user = new Array();
    var showPI = 0;
    var startGame = false;
    var overGame = false;
    var award_id = '';

    showPrizeIn = function(savatar,sname){
       if(showstyle==3){
           $("#wallCont").show();
           $("#start-draw").show();
           getAwardsList(savatar,sname);
           return;
        }

        $(".mark-ewm").show();
        s = $(".drawbox"),
        l = ($(window).width() - 298)/2;
        c = ($(window).height() - 298)/2 + $(document).scrollTop();

        html = '';
        html = '<div class="prizeIn" ><img class="tou" src="'+savatar+'"><p>'+sname+'</p>';
        html += '<img class="honor" src="../addons/hm_newdpm/newimg2/ribbon.png""><div class="rays"></div></div>';
        $("body").append(html);

        $(".prizeIn").animate({left: l+"px", top: c+"px", width: "298px", height: "298px"},{ easing: "easeInExpo", duration: 500, complete: function() {
                $(".prizeIn .rays,.prizeIn .honor,.prizeIn .crown,.prizeIn p").css("display", "block")
            setTimeout(function() {
                 $(".prizeIn .rays,.prizeIn .honor,.prizeIn p,.prizeIn crown").css("display", "none");
                        var s = $(".lottery-avatar").first().width();
                        var p = $(window).width();
                        s || (s = 216);
                        var l, c, u = s + "px",
                            h = ($(".lottery-crown img").first().width() + "px", $(".lottery-crown img").first().height() + "px", $(".lottery-limt").first()); "undefined" != typeof h && 0 != h.length ? (l = h.offset().left + "px", c = h.offset().top + "px") : (l = p / 2 - 60 + "px", c = "160px"), $(".prizeIn").animate({ left: l, top: c, width: u, height: u }, { easing: "easeInExpo", duration: 500, complete: function() {
                                $(".prizeIn").fadeOut(500),$(".mark-ewm").hide(),$(".prizeIn").remove(),getAwardsList(savatar,sname) } }) }, 1e3)
            }
        })



    }


    function getAwardsList(lavatar,lname) {
            var i1 = "";
            i1 += '<div class="lottery-limt lottery-smallimg" title="'+lname+'" style="cursor:pointer">';
            i1 += '<div class="box">';
            i1 += '<div class="lottery-remove"><i class="fa fa-times"></i></div>';
            i1 += '<img class="lottery-avatar" src="'+lavatar+'">';
            i1 += '<img style="display:none;" class="lottery-avatar" src="">';
            i1 += "</div>";
            i1 += '<div class="nickname"><span>'+lname+'</span></div>';
            i1 += '</div>';
            $(".lottery-box").append(i1);
    }

    $("#start-draw").on('click', function() { 
        gameStart();
    });

    function gameStart() {
//        console.log(1);
        clearInterval(getAvatar);

        if (fansNewData.length>0) {
            fansNewData.length = 0;
        }
        if(startGame){
            return;
        }
        startGame =true;
        var _award_id = $("#awardCategoryBox li:visible").data("categoryid");
        var lUserNum = parseInt($('.lotteryUserNum').text());
        var winUserNum = parseInt($('.winUserNum').text());
        var lotteryNumSel = parseInt($("#lotteryNumSel").val());
       console.log(_award_id);

        if(_award_id=='' || _award_id==0||_award_id==null){
            alert("还没有设置奖品了!！");
            startGame = false;
            return
        }

        if(winUserNum >= lUserNum){
            alert("已经没有可抽奖的人了!！");
            startGame = false;
            return
        }
        award_id = _award_id;
        if(lotteryNumSel > (lUserNum - winUserNum)){
            alert("您选择的人数超过可以抽奖的人数！");
            startGame = false;
            return
        }
        $("#wallCont").hide();
        $("#start-draw").hide();

        opening();
        var tt = 0;
        showtx = setInterval(function() {
            $('.element').eq(12).find('img').attr('src', personArray[tt].thumb_image);
            $('.element').eq(37).find('img').attr('src', personArray[tt].thumb_image);
            $('.element').eq(62).find('img').attr('src', personArray[tt].thumb_image);
            $('.element').eq(87).find('img').attr('src', personArray[tt].thumb_image);
            $('.element').eq(112).find('img').attr('src', personArray[tt].thumb_image);
            tt++;
            if(tt>120){
                tt = 0;
            }
        }, 50);

        

        var winUserNum = $(".winUserNum").text();
        $.ajax({
            url: "<?php  echo $this->createMobileUrl('dpm_getchoujiang', array('rid' => $rid))?>",
            dataType: "json",
            async:true,
            data: {
                winUserNum:winUserNum,
                lotteryNumSel:lotteryNumSel,
                awardid:_award_id,
                iscjnum:1
            },
            beforeSend: function () {
               
            },
            success: function (data) {
//                console.log(data.ret)
                if(data.ret == 1){

                    setTimeout(function() {
                        $('#close-draw').show();
                    }, 2000);
                    // console.log(data.data)
                    fansData = data.data;
                    award_user = data.data;
                    fansNum = data.num;
                    $.each(fansData, function(i, v) {
                        fansNewData.push(new Array(v['id'], v['avatar'], v['nickname']));
                    });
                }else {
                    alert("网络参数错误,请刷新页面重试！");

                    clearInterval(showtx);
                    closeing(); 
                    $("#close-draw").hide();
                    $("#start-draw").show();
                    $("#wallCont").show();
                    startGame = false;

                }
            },
            error: function () {
//                console.log(3)
                alert("已经没有人可以抽了?！");

                clearInterval(showtx);
                closeing(); 
                $("#close-draw").hide();
                $("#start-draw").show();
                $("#wallCont").show();
                startGame = false;

            },
            timeout: 15000
        })


    };


    $('#close-draw').on('click', function() {
        gameResult();

        <?php  if($reply['is_award']!=1) { ?>
        notice_awarduser();
        <?php  } ?>

    });
    function notice_awarduser(){
        var _award_id = award_id;

        $.ajax({

            url: "<?php  echo $this->createMobileUrl('dpm_notice_awarduser', array('rid' => $rid))?>",
            dataType: "json",
            data: {
                awarduser:award_user,
                award_id:_award_id
            },
            beforeSend: function () {

            },
            success: function (data) {
//                console.log(data)
                if(data.ret == 1){
                    // alert(data.msg);
                    awarduser = null;
                    award_id ='';
                }else{
                    //   alert("2");
//                    window.setTimeout('notice_awarduser();', 3000);
                }


            },
            error: function () {
                //  alert("2");
//                alert("网络太慢了，获取不到奖品信息！");
            },
            timeout: 15000
        })
        awarduser = null;
        award_id='';
    }
    function gameResult() {
        if(overGame){
            return;
        }
        clearInterval(showtx);
        overGame =true;
        showPI = fansData.length-1;
        $(".winUserNum").html(fansNum);
        showPrizeIn(fansNewData[showPI][1],fansNewData[showPI][2]);
        showGame = setInterval(function() {
            if(showPI<=0){
                clearInterval(showGame);
                overGame =false;
                startGame = false;
                tt = 0;
                $("#start-draw").show();
            }else{
                showPI--;
                showPrizeIn(fansNewData[showPI][1],fansNewData[showPI][2]);
            }
        }, t);
       $('#close-draw').hide();
       closeing(); 
    setTimeout(function(){
        
        $("#wallCont").show();
    }, 1000);
        
        
    }



    $(".next").on("click",function(){
//        if (nextFansNewData.length>0) {
            nextFansNewData.length = 0;
//        }
        nextFansNewData = [];
      var J = $("#awardCategoryBox li:visible");

      var G;
      G = J.next();
      _award_category_id = G.data("categoryid");

      if(_award_category_id == null){
        $(".next").hide();
        $(".notnext").show();
        return;
      }
      $(".lottery-box").html('');
      $(".pre").show();
      $(".notpre").hide();

      $.ajax({
        url: "<?php  echo $this->createMobileUrl('dpm_getCjAwardsList', array('rid' => $rid))?>",
        dataType: "json",
        data: {
            awardid:_award_category_id,
        },
        beforeSend: function () {
           
        },
        success: function (data) {
            if(data.ret == 1){
                $(".lottery-box").html('');
                var nextFansData = data.data;
                var nextFansNum = data.num;
                $(".winUserNum").html(nextFansNum);
                $.each(nextFansData, function(i, v) {
                    nextFansNewData.push(new Array(v['id'], v['avatar'], v['nickname']));
                });
                for (var i = 0; i < nextFansData.length; i++) {
                    getAwardsList(nextFansNewData[i][1],nextFansNewData[i][2]);
                }
                

            }
            
            
        },
        error: function () {
            alert("网络太慢了，获取不到奖品信息！");
        },
        timeout: 15000
    })

      G.removeClass("hidden").siblings().addClass("hidden");

  });

  $(".pre").on("click",function(){
//    if (prevFansNewData.length>0) {
            prevFansNewData.length = 0;
//  }
      prevFansNewData = [];
      var J = $("#awardCategoryBox li:visible");
      var G;
      G = J.prev();
      _award_category_id = G.data("categoryid");
      if(_award_category_id == null){
        // alert("没奖品了");
        $(".notpre").show();
        $(".pre").hide();
        return;
      }
      $(".lottery-box").html('');
      $(".notnext").hide();
      $(".next").show();
      

      $.ajax({
        url: "<?php  echo $this->createMobileUrl('dpm_getCjAwardsList', array('rid' => $rid))?>",
        dataType: "json",
        data: {
            awardid:_award_category_id,
        },
        beforeSend: function () {
           
        },
        success: function (data) {
            if(data.ret == 1){
                $(".lottery-box").html('');
                var prevFansData = data.data;
                var prevFansNum = data.num;
                $(".winUserNum").html(prevFansNum);
                $.each(prevFansData, function(i, v) {
                    prevFansNewData.push(new Array(v['id'], v['avatar'], v['nickname']));
                });
                for (var i = 0; i < prevFansData.length; i++) {
                    getAwardsList(prevFansNewData[i][1],prevFansNewData[i][2]);
                }
                
                
            }
            
            
        },
        error: function () {
            alert("网络太慢了，获取不到奖品信息！");
        },
        timeout: 15000
    })

      
      G.removeClass("hidden").siblings().addClass("hidden");

  });

  $(".reset").on("click",function(){
    var resetOk = confirm("您确定要重新抽奖，该奖品之前中奖记录将清空！");
    var reset_award_id = $("#awardCategoryBox li:visible").data("categoryid");
       if(reset_award_id==''||reset_award_id==0){
           alert("参数错误!")
           return;
       }
    if (resetOk == true){

        $.ajax({
        url: "<?php  echo $this->createMobileUrl('resetAwards', array('rid' => $rid,'code'=>'reset'))?>",
        dataType: "json",
        data: {
            rawardid:reset_award_id,
        },
        beforeSend: function () {
           
        },
        success: function (data) {
                if(data.ret == 1){
                    $(".lottery-box").html('');
                    $(".winUserNum").html('0');
                    alert("奖品重置成功，可以重新抽奖了。")
                }else{
                    alert("奖品重置失败，请刷新页面重试。")
                }
            },
            error: function () {
                alert("网络太慢了，重置失败！");
            },
            timeout: 15000
        })

      };
    })

  function spaceStart(){
        if(!$('#close-draw').is(":hidden")){
            if(overGame){
                return;
            }
            gameResult();
            <?php  if($reply['is_award']!=1) { ?>
            notice_awarduser();
            <?php  } ?>
        }else{
            if(startGame){
                return;
            }
            gameStart();

        }
  }


  $(document).keydown(function(e){
        if(e.which == 32) {
            spaceStart();
        }

   });


    </script>
    <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
