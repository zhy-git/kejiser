<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php  echo $xyhreply['ziycj_banner'];?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="../addons/hm_newdpm/img2/common.css?v=433223" type="text/css">
    <link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/xyh/dpm_lottery_xysjh.css?v=433223">
    <link id="defaultCss" href="../addons/hm_newdpm/img12/style.css?v=433223" rel="stylesheet">
    <style>
    html,body{
        height: 100%;
    }
    .user-list li {
        opacity: 0.9
    }
    
    .detail-box {
        opacity: 0.9
    }
    <?php  if(empty($video['vodio_bg17'])) { ?>#wrap{ background:url(<?php  echo $bg;?>) center 0 no-repeat; background-size:cover;height: 100%;}<?php  } ?>
    
    <?php  if(!empty($reply['backcolor'])) { ?>
    .props-color{ background:-webkit-linear-gradient(top , <?php  echo $reply['backcolor'];?> ,<?php  echo $reply['backcolor'];?>); background:-moz-linear-gradient(top , <?php  echo $reply['backcolor'];?> ,<?php  echo $reply['backcolor'];?>); background:-o-linear-gradient(top , <?php  echo $reply['backcolor'];?> ,<?php  echo $reply['backcolor'];?>); box-shadow: inset -1px 1px rgba(204,204,204,.2)}
    .lott-w span,.rock-name,.join-num,.choose-num{ color:#ffffff;}
    .und-btn a,.btn-color,.btn-start{border:1px solid <?php  echo $reply['backcolor'];?>; border-radius:4px; background:-moz-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>); background: -webkit-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>); background:-o-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>);}
    .und-btn a:hover,.btn-color:hover,.btn-start:hover{ background:-moz-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>); background:-webkit-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>);background:-o-linear-gradient(top , <?php  echo $reply['backcolor'];?>, <?php  echo $reply['backcolor'];?>);}
    <?php  } ?>
    .themeBox{
    color: <?php  if(empty($xysreply['xys_backcolor'])) { ?>#fff604;<?php  } else { ?><?php  echo $xysreply['xys_backcolor'];?>;<?php  } ?>;
    }
    </style>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.cookie.js"></script>
    <script type="text/javascript">


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
        $.preLoadImages('../addons/haoman_base/dpm/test01.png','../addons/haoman_base/dpm/test02.png','../addons/haoman_base/dpm/test03.png','../addons/haoman_base/dpm/test04.png','../addons/haoman_base/dpm/test05.png','../addons/haoman_base/dpm/test06.png','../addons/haoman_base/dpm/test07.png','../addons/haoman_base/dpm/test08.png');
</script>
</head>

<body <?php  if(!empty($video['vodio_bg17'])) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg17'])?>"<?php  } ?>>
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
        <div id="whole" >
            <div id="header" class="clearfix">
                <div class="word-scroll left">
                    <div class="clearfix">
                        <div class="scrollbox left">
                            <ul class="word-list wordList">
                                <li class="themeBox" style="text-align:center;line-height: 86px; font-size: 46px; display: list-item;"><?php  echo $xyhreply['ziycj_banner'];?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <span class="reserved right showIntroBtn">
                    <?php  if($reply['up_qrcode']) { ?>
         <img class="qrcodeAll" src="<?php  echo tomedia($reply['up_qrcode'])?>" style="max-width:126px;max-height:96px;">
                    <?php  } ?>
      </span>
            </div>

</div>
<div class="Lottery"  style="display: block;">
    <div class="main">
        <div class="main_img">
            <img class="img2" src="../addons/hm_newdpm/xyh/img0.png">
            <img class="img4" src="../addons/hm_newdpm/xyh/img5.png?v=3212" style="z-index: 1;">
            <img class="img3" src="../addons/hm_newdpm/xyh/img3.png?v=3213">
            <img class="img1" src="../addons/hm_newdpm/xyh/img3.png?v=3213" style="z-index: 2;">
            <span class="num" id="DeskText"  style="z-index: 99;margin-top: 19%;padding-left: 50px;">0</span>
            <div id="AddDeskAni" class="move">
                <span  id="DeskText1" class="move1">0</span>
            </div>
            <div class="main_btn display0" style="display: none">
                <input type="text" value="0"   size="6"  id="max" >
            </div>
            <div class="button" style="z-index: 10">
                <div class="btn">
                    <p>抽取数量：</p>
                    <select id="sltAwardNum" >
                        <option value="请选择" selected="selected" style="display: none;">请选择</option>
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
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                    </select>
                </div>
                <button id="Bigin" onclick="Start();">开始抽奖</button>
                <button id="End" class="hide" onclick="End();">停止抽奖</button>
                <div class="clear"></div>
            </div>
        </div>
        <div class="win" >
            <ul class="list" id="ResultBox" style="z-index:99;">
            </ul>
            <div class="und-btn2">
                <a href="javascript:void(0);" class="reset clickBtn yellowbg middleBtn disabled" style="position: absolute; left: 40px; bottom: 35px;"><span style="display: inline;">重置抽奖</span></a>
                <a href="javascript:void(0);" class="clickBtn yellowbg disabled middleBtn turntable_submit" style="width: 80px;margin-right: 20px;margin-bottom: 15px;">确认记录</a>
            </div>
        </div>
    </div>
</div>
   <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>
    <script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>



    
    <script>
    $(function() {
        if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
            document.getElementById('media').pause();
        }

    });




    $(document).keydown(function(e){
        if(e.which == 32) {

        }

   });





    
    </script>
<script type="text/javascript">
    var lotteryNum = eval('<?php  echo json_encode($otteryNum)?>');//内定数字
    var lotteryNum2 = eval('<?php  echo json_encode($otteryNum)?>');//内定数字

    var phone_num=eval('<?php  echo json_encode($newmobile)?>');
    var phone_num2=eval('<?php  echo json_encode($newmobile)?>');
//    console.log(phone_num.length);
    var number_show = '<?php  echo $number_show?>';
    var zam_data = [];
    var SubmitFansAarray = [];//
    var timerObj = null;
    var awardData = [];
    var numberData = [];
    var deskNum =phone_num.length;

   $("#max").val(deskNum);
//    setzhmaxarr();
    function setzhmaxarr(){

        deskNum = parseInt($("#max").val());
          if(numberData.length>0){

          }else {
              for (var i = 0; i <  deskNum; i++) {
                  numberData[i] = phone_num[i];
                  zam_data[i] = phone_num[i];
//            numberData[i] = phone_num[i];
//            zam_data[i] = phone_num[i];
                  // console.log(phone_num);
              }
          }

    }

    function Start() {
        if(timerObj!=null){
            clearInterval(timerObj);
        }

        deskNum = parseInt($("#max").val());
        setzhmaxarr();

//        $("#jqResultBox").html("");
        var awardNum = parseInt($("#sltAwardNum").val()) || 0;



        if (deskNum <= 0) {
            alert("抽奖码数为0、无法抽取");
            return;
        }
        if(awardNum > deskNum){
            alert('目前抽奖码仅仅有'+deskNum+'个、请重新选择抽取个数');
            return;
        }
        if (awardNum <= 0) {
           alert("请选择抽奖数量");
            return;
        }
        $("#Bigin").attr("disabled", true);
        RandomDesk();
        GetAwardDesk(deskNum, awardNum);
    }
    function RandomDesk() {
        timerObj = setInterval(function () {
            var index = Math.floor(Math.random() * zam_data.length);
            var n = zam_data[index];
            if(number_show==1){
                n=n.replace(/(\d{3})\d{4}(\d{4})/, '$1****$2');
            }

            $("#DeskText").text(n);
        }, 300);
    }
    function GetAwardDesk(deskNum, awardNum) {
        awardData = [];
        for (var i = 0; i < awardNum&&deskNum>0; i++) {
            var index = Math.floor(Math.random() * numberData.length);
            awardData[i] = numberData[index];
            numberData.splice(index,1);
            phone_num.splice(index,1);
            $("#max").val(phone_num.length);

        }
        if(lotteryNum.length>0){

            if(lotteryNum.length>awardNum){

                for(var n=0;n<awardNum;n++){

                    for(var j=0;j<numberData.length;j++){

                        if(numberData[j]==lotteryNum[n]){

                            awardData[n] = numberData[j];

                            numberData.splice(j,1);

                        }
                    }
                    lotteryNum.splice(n,1);

                }
            }else {
                for(var n=0;n<lotteryNum.length;n++){
                    for(var j=0;j<numberData.length;j++){
                        if(numberData[j]==lotteryNum[n]){
                            awardData[n] = numberData[j];
                            numberData.splice(j,1);
                        }
                    }
                }
                lotteryNum=[];
            }


        }
        $("#max").val(numberData.length);

//        if(lotteryNum.length>0){
//
//
//            for(var n=0;n<lotteryNum.length;n++){
//                for(var j=0;j<numberData.length;j++){
//                    if(numberData[j]==lotteryNum[n]){
//                        awardData[n] = numberData[j];
//                        //console.log(awardData)
//                        numberData.splice(j,1);
//                    }
//                }
//            }
//            lotteryNum=[];
//        }
        SubmitFansAarray.push(awardData);
        $("#Bigin").addClass("hide");
        $("#End").removeAttr("disabled").removeClass("hide");
    }
    function End() {
        $("#AddDeskAni").removeClass("moving");
        var i = 0;
        var func = function () {
            clearInterval(timerObj);
            ShowResult(awardData[i]);
            i++;
            if (awardData.length > i) {
                setTimeout(function () {
                    RandomDesk();
                }, 500); //间隔
                setTimeout(function () {
                    func();
                }, 1000);

            } else {
                $("#End").addClass("hide");
                $("#Bigin").removeAttr("disabled").removeClass("hide");
            }
        };

        if (awardData.length > 0) {
            $("#End").attr("disabled", true);
            func();
        } else {
            clearInterval(timerObj);
            alert("抽奖码已经抽完！", function () {
                $("#DeskText,#DeskText1").text(0);
                $("#End").addClass("hide");
                $("#Bigin").removeAttr("disabled").removeClass("hide");
            });
        }
    }
    function ShowResult(num) {
        $("#AddDeskAni").addClass("moving");
        if(number_show==1){
            num=num.replace(/(\d{3})\d{4}(\d{4})/, '$1****$2');
        }

        $("#DeskText,#DeskText1").text(num);
        var liHtml = '<li>' + num + '</li>';
//        console.log(liHtml);
        setTimeout(function () {
            $("#AddDeskAni").removeClass("moving");
            $("#ResultBox").prepend(liHtml);
        }, 900);
        $(".turntable_submit").removeClass("disabled");
        $(".reset").removeClass("disabled");
    }

    $('.turntable_submit').click(function () {
        if (!$(this).hasClass('disabled')) {
            Submit_win();
        }
    });
    $('.reset').click(function () {
        if (!$(this).hasClass('disabled')) {
            reset_Submit();
        }
    });
    //提交中奖信息
    var Submit_win = function () {
        var resetAllOk = confirm("您确定要确认所有抽奖码！")
        if (resetAllOk == true){
            $(".turntable_submit").addClass("disabled");
            var submitForm = new Array();
            if(SubmitFansAarray.length>0){
                for(var i=0;i<SubmitFansAarray.length;i++){
                    for(var j=0;j<SubmitFansAarray[i].length;j++){
                        submitForm.push(SubmitFansAarray[i][j]);
                    }
                }

                $.post(go_Submit_win, {submitForm:submitForm},function(data){
//                  console.log(data);

                    if (data.ret ==1)
                    {

                        $(".reset").addClass("disabled");
                        SubmitFansAarray=[];
                        $("#ResultBox").html("");
                        alert("保存成功！")
                        submitForm=[];
                    } else {
                        $(".turntable_submit").removeClass("disabled");
                        alert("保存失败！")
                    }


                },'json');

            }


        }
    }
    var reset_Submit = function () {
        var resetAllOk = confirm("您确定要重置所有抽奖码，之前所有中奖记录将清空！")
        if (resetAllOk == true){
            $(".turntable_submit").addClass("disabled");
            $(".reset").addClass("disabled");
            $("#ResultBox").html("");
            SubmitFansAarray=[];
            awardData=[];
            numberData=[];
            phone_num=phone_num2;
            lotteryNum =lotteryNum2;
            $("#max").val(phone_num.length);

        }
    }
</script>
<script>
    var go_Submit_win = "<?php  echo $this->createMobileUrl("Submit_win", array('rid' => $rid,'turntable'=>3))?>";
</script>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
