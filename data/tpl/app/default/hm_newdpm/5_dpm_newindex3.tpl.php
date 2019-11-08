<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php  echo $reply['title'];?>——3D签到</title>
    <link rel="stylesheet" href="../addons/hm_newdpm/newimg3/3d.css?v=3232233">
    <link rel="stylesheet" href="../addons/hm_newdpm/newimg3/style.css?v=32333232" media="screen" type="text/css">
    <link rel="stylesheet" href="../addons/hm_newdpm/newimg3/normalize.css">
    <script src="../addons/haoman_base/base/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    //判断浏览器类型
    var Sys = {};
    var ua = navigator.userAgent.toLowerCase();
    var s;
    (s = ua.match(/msie ([\d.]+)/)) ? Sys.ie = s[1]:
        (s = ua.match(/firefox\/([\d.]+)/)) ? Sys.firefox = s[1] :
        (s = ua.match(/chrome\/([\d.]+)/)) ? Sys.chrome = s[1] :
        (s = ua.match(/opera.([\d.]+)/)) ? Sys.opera = s[1] :
        (s = ua.match(/micromessenger.([\d.]+)/)) ? Sys.micromessenger = s[1] :
        (s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;
    if (!(Sys.chrome || Sys.firefox || Sys.safari || Sys.micromessenger)) { //Js判断为谷歌chrome、火狐firefox浏览器、苹果safari
        document.write('</br><font size="1" color="white">查看3D效果请使用：谷歌chrome、火狐firefox，苹果safari或微信</font>');
    }

    (function($) {
           

          var cache = [];
          $.preLoadImages = function() {
            var args_len = arguments.length;
            for (var i = args_len; i--;) {
              var cacheImage = document.createElement('img');
              cacheImage.src = arguments[i];
              cache.push(cacheImage);
            }
          }
        })(jQuery)
        $.preLoadImages('../addons/hm_newdpm/newimg3/3d_default2.png','../addons/hm_newdpm/newimg3/3d_default.png');

    </script>
    <style type="text/css">
        #kploading{
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            -ms-transform: translateZ(0);
            -o-transform: translateZ(0);
            transform: translateZ(0);
        }
        body{
        <?php  if($reply['is_transparent']!=1) { ?>
            background-image:url(<?php  echo $bg;?>);
        <?php  } ?>
        }
    </style>
</head>

<body thistype="sign_wall" <?php  if(!empty($video['vodio_bg4'])&&$reply['is_transparent']!=1) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg4'])?>"<?php  } ?>>
    <div class="mark-loading"></div>
    <div id="kploading" >
        <div class="ball-big">
            <div class="plane plane-1"></div>
            <div class="plane plane-2"></div>
            <div class="plane plane-3"></div>
            <div class="plane plane-4"></div>
            <div class="plane plane-5"></div>
            <div class="plane plane-6"></div>
        </div>
    </div>
    <div class="container" style="position: absolute;z-index: 99">
    <?php  if($reply['isqd']==2) { ?>
        <a href="<?php  echo $this->createMobileUrl('dpm_3dqd',array('rid'=>$rid,'isqdthemes'=>'logo'))?>" style="background: rgba(0,0,0,0.5);padding: 5px 10px;border-radius: 5px;margin: 5px;color: #fbf5be;font-size: 11px;" id="logo">Logo</a>
        <a href="<?php  echo $this->createMobileUrl('dpm_3dqd',array('rid'=>$rid,'isqdthemes'=>'sphere'))?>" style="background: rgba(0,0,0,0.5);padding: 5px 10px;border-radius: 5px;margin: 5px;color: #fbf5be;font-size: 11px;" id="sphere">水晶球</a>
        <a href="<?php  echo $this->createMobileUrl('dpm_3dqd',array('rid'=>$rid,'isqdthemes'=>'helix'))?>" style="background: rgba(0,0,0,0.5);padding: 5px 10px;border-radius: 5px;margin: 5px;color: #fbf5be;font-size: 11px;" id="helix">螺旋塔</a>
        <a href="<?php  echo $this->createMobileUrl('dpm_3dqd',array('rid'=>$rid,'isqdthemes'=>'grid'))?>" style="background: rgba(0,0,0,0.5);padding: 5px 10px;border-radius: 5px;margin: 5px;color: #fbf5be;font-size: 11px;" id="grid">展览厅</a>
        <a href="<?php  echo $this->createMobileUrl('dpm_3dqd',array('rid'=>$rid,'isqdthemes'=>'torus'))?>" style="background: rgba(0,0,0,0.5);padding: 5px 10px;border-radius: 5px;margin: 5px;color: #fbf5be;font-size: 11px;" id="torus">时空隧道</a>
        <?php  } ?>
        <!-- <button style="background: rgba(0,0,0,0.5);padding: 5px 10px;border-radius: 5px;margin: 5px;color: #fbf5be;" id="full">全屏展示</button>
        <button style="background: rgba(0,0,0,0.5);padding: 5px 10px;border-radius: 5px;margin: 5px;color: #fbf5be;display: none" id="exitFull">退出全屏</button>
        <button class="on" style="background: rgba(0,0,0,0.5);padding: 5px 10px;border-radius: 5px;margin: 5px;color: #fbf5be;" onclick="lanren.changeClass(this,'media')" id="audio-btn">关闭声音</button> -->
    </div>
    <a id="screen_ecode" title="二维码显示" style="position: absolute;top: 50px;right: 55px;z-index: 11;" href="javascript:void(0);">
        <?php  if($reply['up_qrcode']) { ?>
        <img alt="" src="<?php  echo tomedia($reply['up_qrcode'])?>" style="display: block;width: 80px;height: 80px;">
        <?php  } ?>
    </a>
    <div id="container" style="display:none;"></div>
    <canvas class="canvas" height="700"></canvas>
<?php  if($reply['qdshow']==1) { ?>
    <span class="signBox rightBottom" >
        <img src="" class="imgShow">
        <p class="name signName"></p>
        <p class="companyBox"></p>
        <p class="signtext" style="width: 48%;padding: 0 10px 0 0px;">  
            <span class="textLine"><i></i><span class="text_scrool"><u class="text text_content"></u></span></span>
        </p>
    </span>
    <?php  } ?>

    <div class="sedd">
        <!-- <a href="<?php  if($reply['timenum'] == 0) { ?><?php  echo $this->createMobileUrl('dpm_index',array('rid'=>$rid))?><?php  } else { ?><?php  echo $this->createMobileUrl('dpm_messages',array('rid'=>$rid))?><?php  } ?>"><img src="../addons/hm_newdpm/newimg3/btn_return.png"></a> -->
    </div>
    <div class="pcdee2" id="url_code2">
        <span class="eimge2">
          <img src="<?php  echo tomedia($reply['up_qrcode'])?>">
        </span>
        <span class="etxete2">
        <p style="text-align:center;">微信扫一扫马上签到</p>
         </span>
    </div>
    <div class="pcdee" id="url_code">
        <span class="eimge">
           <img id="qdimg" src="<?php  echo tomedia($reply['up_qrcode'])?>">
        </span>
        <?php  if($reply['k_templateid']==1) { ?>
        <span class="etxete">
        <p style="text-align:center;" >第<span id="qd_pid">0</span>个签到</p>
        </span>
        <?php  } ?>
        <span class="etxete">
        <p style="text-align:center;" id="qdname">扫一扫参与</p>
        </span>
    </div>
    <div class="mark-ewm"></div>
    <audio src="<?php  echo $music;?>" id="media" preload="auto" loop="loop"></audio>
    <audio src="<?php  echo $daojishimusic;?>" id="daojishimusic" preload="auto"></audio>
    <input type="hidden" id="max_id" name="max_id" value="<?php  echo $list[0]['id'];?>">
    <script type="text/javascript">
   


    $(document).ready(function() {
        if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
            <?php  if($music) { ?>
            document.getElementById('media').pause();
            <?php  } ?>

        }
    });

    function EscapeChar(HaveSpecialval) {
        //转换半角单引号
        HaveSpecialval = HaveSpecialval.replace(/\'/g, "\\\'");

        //也可以使用&acute;
        HaveSpecialval = HaveSpecialval.replace(/\'/g, "&acute;");
        return HaveSpecialval;
    }


    $('#screen_ecode').on('click', function() {
        // $('#url_code2').toggleClass('hover').css('top', 50);
        $('#url_code2').show().css('top', 50);
    });
    $('#url_code2').on('click', function() {
        // $('#url_code2').removeClass('hover');
        $('#url_code2').hide();
    });
    $('#url_code').on('click', function() {
        $(".mark-ewm").hide();
        $('#url_code').removeClass('hover');
    });
    </script>
    <script type="text/javascript">
    var is_show_info = 1;
    var hFont;
    var gap = <?php  echo $reply['qdgap'];?>;
    // 14 不低于7，低于7的话，内存和显卡必须达到16G和2G独显以上
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

    <script src="../addons/hm_newdpm/newimg3/2d.js?v=3144433223"></script>
    <script type="text/javascript">
    var personArray = new Array;
    var CurPersonNum = 0;

    <?php  if(is_array($list)) { foreach($list as $row) { ?>

        personArray.push({
            id: <?php  echo $row['id'];?>,
            image: "<?php  echo tomedia($row['avatar'])?>",
            thumb_image: "<?php  echo $row['thumb_image'];?>",
            thumb_image_46: "<?php  echo $row['thumb_image_46'];?>",
            name:"<?php  echo $row['nickname'];?>"
        });


    <?php  } } ?>
    CurPersonNum = personArray.length;
    // console.log(CurPersonNum)
    </script>
    <?php  if($reply['qdthemes']==0) { ?>
    <script src="../addons/hm_newdpm/newimg3/arrfiles.js?v=34324"></script>
    <?php  } ?>
    <?php  if($reply['qdthemes']==1) { ?>
    <script src="../addons/hm_newdpm/newimg3/arrfiles2.js?v=313333332"></script>
    <?php  } ?>
  
    <script type="text/javascript">
    QD.Dc.init('.canvas');

   // console.log(personArray);



    var edit_personArray = new Array;
    var table = new Array;
    for (var i = 0; i < 160; i++) {
        table[i] = new Object();
        if (i < personArray.length) {
            table[i] = personArray[i];
            table[i].src = personArray[i].thumb_image;
        } 
        table[i].p_x = i % 20 + 1;
        table[i].p_y = Math.floor(i / 20) + 1;
    }


    table = table.sort(function() {
        return Math.random()
    });

    var signwall_show_str = "<?php  echo $signwall_show_str;?>";
    // var signwall_show_str = "#countdown 15|小鸡鸡牌|#torus";

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
        $("#kploading").hide();
        $(".mark-loading").hide();
        QD.init();
        <?php  if($reply['is3ddaojishi'] == 0) { ?>
        document.getElementById("media").play();
        <?php  } ?>
        <?php  if($reply['is3ddaojishi'] != 2) { ?>
        QD.UI.simulate(signwall_show_str);
        <?php  } ?>

    }



    var newPic = new Array(),
        signNo = 0,
        name,qdword,qd_pid;
    setInterval(function() {
        // console.log($('.element').find('img'))
        if (newPic.length > 0) {

            var firstInfo = newPic.shift();
            // console.log(newPic.length);
            var showImg = firstInfo.image;
            name = firstInfo.name;
            qdword = firstInfo.qdword;
            qd_pid= firstInfo.qd_pid;

            personArray.push(firstInfo);
            
            
           // console.log(personArray);
           // var Curtet = personArray.length - CurPersonNum;
           if(CurPersonNum >= 160){
            CurPersonNum = 0;
           }
           // console.log(CurPersonNum);
            $('.element').eq(CurPersonNum).find('img').attr('src', showImg);
            CurPersonNum++;
// console.log(CurPersonNum)
            <?php  if($reply['qdshow']==0) { ?>
            $("#qdimg").attr('src', showImg);
            $('#qdname').html(name);
            $('#qd_pid').html(qd_pid);
            $(".mark-ewm").show();
            $('#url_code').show().css('top', ($(window).height() - 550) / 2);
            setTimeout(function() {
                $(".mark-ewm").hide();
                $('#url_code').hide();
            }, 4000);

            <?php  } else { ?>

            $(".imgShow").attr('src', showImg);
            $('.signName').html(name);
            if(qdword == ''){
                $('.text_content').html("刚刚完成签到");
            }else{
                $('.text_content').html(qdword);
            }
            $('.signBox').addClass('imgAnimate').show();
            setTimeout(function(){
                $('.signBox').hide();
            },6000);

            <?php  } ?>
                

        } 
        
        
        getArrayItems(personArray, 50);
        // console.log(return_array)
            
    }, 8000);
    </script>
    <script src="../addons/haoman_base/base/three.min.js"></script>
    <script src="../addons/hm_newdpm/newimg3/tween.min.js"></script>
    <script src="../addons/hm_newdpm/newimg3/CSS3DRenderer.js"></script>
    <script src="../addons/hm_newdpm/newimg3/3d.js?v=313232312"></script>
    <script type="text/javascript">
        init();
        animate();
    </script>
    <script type="text/javascript">
    var stop = false
    setInterval(get_new_sign_list, 5000);

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
                console.log(result);
                if (result.max_id) {
                        $('#max_id').val(result.max_id);
                    }
                    if (result.record) {

                        $.each(result.record, function(key, row) {
                            var tmp = {
                                id: row.id,
                                image: row.avatar,
                                thumb_image: row.thumb_image,
                                thumb_image_46: row.thumb_image_46,
                                name: row.nickname,
                                qdword: row.qdword,
                                qd_pid: row.awardingid
                            };
                            var person_info = eval(tmp);
                            newPic.push(person_info);
                        });
                        
                    }

                stop = false;

            }
        });
    }
    </script>
    <script>
    // var lanren = {
    //     changeClass: function (target,id) {
    //         var className = $(target).attr('class');
    //         var ids = document.getElementById(id);
    //         (className == 'on')
    //             ? $(target).removeClass('on').addClass('off')
    //             : $(target).removeClass('off').addClass('on');
    //         (className == 'on')
    //             ? ids.pause()
    //             : ids.play();
    //         (className == 'on')
    //             ? $("#audio-btn").html("开启声音")
    //             : $("#audio-btn").html("关闭声音");
    //     },
    //     play:function(){
    //         document.getElementById('media').play();
    //     }
    // }
    // lanren.play();


    $("#full").click(function() {
        $("#full").hide();
        $("#exitFull").show();
        h()
    });

    $("#exitFull").click(function() {
        $("#exitFull").hide();
        $("#full").show();
        b()
    });



    function h() {
        var j = document.documentElement,
            k = j.requestFullScreen || j.webkitRequestFullScreen || j.mozRequestFullScreen || j.msRequestFullScreen,
            l;
        if (typeof k != "undefined" && k) {
            k.call(j);
            return
        }
        if (typeof window.ActiveXObject != "undefined") {
            l = new ActiveXObject("WScript.Shell");
            if (l) {
                l.SendKeys("<?php echo F11;?>")
            }
        }
    }

    function b() {
        var k = document,
            j = k.cancelFullScreen || k.webkitCancelFullScreen || k.mozCancelFullScreen || k.exitFullScreen,
            l;
        if (typeof j != "undefined" && j) {
            j.call(k);
            return
        }
        if (typeof window.ActiveXObject != "undefined") {
            l = new ActiveXObject("WScript.Shell");
            if (l != null) {
                l.SendKeys("<?php echo F11;?>")
            }
        }
    }

$(document).keydown(function(e){
    if(e.which == 81) {
        if($("#full").is(":hidden")){
                b();
                $("#exitFull").hide();
                $("#full").show();
            }else{
                h();
                $("#full").hide();
                $("#exitFull").show();
            }
    }
    
    if(e.which == 69) {
        if($("#url_code2").hasClass("hover")){
            $('#url_code2').removeClass('hover');
        }else{
            $('#url_code2').toggleClass('hover').css('top', 50);
        }
    }
    if(e.which == 32) {
      spaceStart();
    }
});

function spaceStart(){
    //预留空格开始的方法，不要删除
    <?php  if($reply['is3ddaojishi'] == 2) { ?>
    QD.UI.simulate(signwall_show_str);
    <?php  } ?>
}

    </script>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
