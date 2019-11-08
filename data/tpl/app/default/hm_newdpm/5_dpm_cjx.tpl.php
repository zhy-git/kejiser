<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>抽奖箱</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/static/cjximg/style.css?v=323232">
    <script src="../addons/haoman_base/base/jquery-1.9.1.min.js" type="text/javascript"></script>
    <title>抽奖箱</title>
    <link href="../addons/hm_newdpm/static/cjximg/page.css?v=332233" rel="stylesheet" type="text/css">
    <style type="text/css">
    html, body {
        height: 100%;
    }
    .box-bg {
        position: fixed;
        z-index: -1;
        width: 100%;
        height: 100%;
        <?php  if(empty($cjxreply['cjxVideo'])) { ?>background-image: url(<?php  echo $bg;?>);<?php  } ?>
        background-size: 100% 100%;
        background-repeat: no-repeat;
        top: 0;
        left: 0;
    }
    </style>
</head>

<body <?php  if(!empty($cjxreply['cjxVideo'])) { ?>data-vide-bg="<?php  echo tomedia($cjxreply['cjxVideo'])?>"<?php  } ?>>
   
    <div class="qinadao_center">
        <div class="box-bg"></div>
        <div class="outBox">
            <div class="box">
                <img class="boxImg" src="../addons/hm_newdpm/static/cjximg/box.png?v=32213">
                <img class="boxLeft" src="../addons/hm_newdpm/static/cjximg/box1.png?v=32213">
                <img class="boxRight" src="../addons/hm_newdpm/static/cjximg/box2.png?v=32213">
                <img class="boxFront" src="../addons/hm_newdpm/static/cjximg/box3.png?v=32123">
            </div>
            <div class="hand">
                <div class="hand1"></div>
                <div class="hand2"></div>
                <div class="head-box">
                    <img id="jqAwardMemImg" class="head" src="../addons/hm_newdpm/static/cjximg/head.jpg">
                    <span id="jqAwardMemName" class="hand-name"></span>
                </div>
            </div>
            <div class="reel <?php  if(!empty($awardslist)) { ?>reel-moving<?php  } ?>">
                <div class="reel-bg">
                    <ul class="reel-list" id="jq_result_list">
                        <?php  if(is_array($awardslist)) { foreach($awardslist as $row) { ?>
                        <li class="show"><img src="<?php  echo tomedia($row['avatar'])?>"><span><?php  echo $row['nickname'];?></span></li>
                        <?php  } } ?>
                    </ul>
                    <div style="font-size: 16px;height: 28px;line-height: 28px;text-align: center;color: #3f0505;">
                        <span class="reset" style="margin-right: 15px;">重新抽奖</span>
                        <span class="resetAll">全部重置</span>
                    </div>
                </div>
                <img class="reel1" src="../addons/hm_newdpm/static/cjximg/reel1.png">
            </div>
            <div class="option">
                <div class="option-bg"></div>
                <div class="options-bg">
                    <div class="option-prize">
                        <img src="../addons/hm_newdpm/static/cjximg/option-prize.png">
                        <select id="sltAwardItem">
                        <?php  if(empty($list)) { ?>
                            <option data_num="0" value="0">没奖品</option>
                        <?php  } else { ?>
                            <?php  if(is_array($list)) { foreach($list as $index => $row) { ?>
                            <option data_num="<?php  echo $row['id'];?>" value="<?php  echo $row['id'];?>"><?php  echo $row['prizename'];?></option>
                            <?php  } } ?>
                        <?php  } ?>
                        </select>
                    </div>
                    <div class="option-num">
                        <img src="../addons/hm_newdpm/static/cjximg/option-num.png">
                        <select id="sltAwardNum">
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
                            <option value="10">15</option>
                            <option value="10">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                        </select>
                    </div>
                    <a href="JavaScript:;" class="option-btn" id="btnStart" style="display: block;"><img src="../addons/hm_newdpm/static/cjximg/box-optionWord.png"></a>
                    <!--开始抽奖和停止抽奖，显示添加样式display:block-->
                    <a href="JavaScript:;" class="option-btn btn-disabled" id="btnEnd" style="display: none;"><img src="../addons/hm_newdpm/static/cjximg/box-optionWord1.png"></a>
                </div>
            </div>
        </div>
    



        <input type="hidden" id="lotteryUserNum" value="<?php  echo intval($totaldata)?>"> <!-- 参与人数 -->
        <input type="hidden" id="winUserNum" value="<?php  echo intval($winUserNum)?>"> <!-- 获奖人数 -->

        <div id="jqAwardPlanB" style="display:none;">
        </div>
        
    </div>
   <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>
    <script type="text/javascript">
    $(function() {
        setInterval(function(){
            $.ajax({
                url:"<?php  echo $this->createMobileUrl('haishen', array('rid' => $rid,'gets'=>'fans'))?>",
                dataType:'json',
                success:function(data){

                    var code = data['code'];
                    var shenyu = data['shenyu'];
                    $('#lotteryUserNum').val(shenyu);
                    // console.log(shenyu);
                }
            })
        },4000);
    });


    var awardData = [];
    var errorStatus = false;
    var needTrueName = false;
    var isGameIng = false;
    var existMIDArray = [];
    var award_user = new Array();
    $(function() {
        $("#btnStart").click(function() {
            if(isGameIng){
                return;
            }
            isGameIng = true;

            if (awardData.length>0) {
                awardData.length = 0;
            }

            if($("#sltAwardItem").val() == 0){
                alert("请先设置好奖品!！");
                return
            }

            var lUserNum = parseInt($('#lotteryUserNum').val());
            var winUserNum = parseInt($('#winUserNum').val());
            var lotteryNumSel = parseInt($("#sltAwardNum").val());
            if(winUserNum >= lUserNum){
                alert("已经没有可抽奖的人了!！");
                isGameIng = false;
                return
            }

            if(lotteryNumSel > (lUserNum - winUserNum)){
                alert("您选择的人数超过可以抽奖的人数！");
                isGameIng = false;
                return
            }

            awardData = [];
            errorStatus = false;
            // $("#jq_result_list").html("");
            $(".box").addClass("box-moving");
            $(this).addClass("btn-disabled").hide();
            $("#btnEnd").addClass("btn-disabled").show();
            GetAwardResult(winUserNum,lotteryNumSel);
        });
        $("#btnEnd").click(function() {
            if ($(this).hasClass("btn-disabled")) {
                return;
            }
            $(".box").removeClass("box-moving");
            $(this).addClass("btn-disabled");
            ShowResult(0);

            <?php  if($reply['is_award']!=1) { ?>
            notice_awarduser();
            <?php  } ?>

        });
        var nextFansNewData = new Array();
        $("#sltAwardItem").change(function() {
            if (nextFansNewData.length>0) {
                nextFansNewData.length = 0;
            }
            var num = $("#sltAwardItem option:selected").attr("data_num");

            $.ajax({
                url: "<?php  echo $this->createMobileUrl('dpm_cjxlist', array('rid' => $rid))?>",
                dataType: "json",
                data: {
                    awardid:num,
                },
                beforeSend: function () {
                   
                },
                success: function (data) {
                    if(data.ret == 1){
                        $.each(data.data, function(i, v) {
                            nextFansNewData.push(new Array(v['id'], v['avatar'], v['nickname']));
                        });
                        var html = '';

                        for (var i = 0; i < data.data.length; i++) {
                            html += '<li class="show"><img src="'+nextFansNewData[i][1]+'"><span>'+nextFansNewData[i][2]+'</span></li>';
                        }
                        if(data.data.length > 0){
                            $(".reel").addClass("reel-moving");
                        }else{
                            $(".reel").removeClass("reel-moving");
                        }
                        $("#winUserNum").val(data.num);
                        $("#jq_result_list").html(html);

                    }
                    
                    
                },
                error: function () {
                    alert("网络太慢了，获取不到奖品信息！");
                },
                timeout: 15000
            })
            
        });

    });

    function GetAwardResult(winUserNum,lotteryNumSel) {
        var _award_id = $("#sltAwardItem").val();
        // console.log(_award_id);

        $.ajax({
            url: "<?php  echo $this->createMobileUrl('dpm_cjxgetchoujiang', array('rid' => $rid))?>",
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

                if(data.ret == 1){
                    fansData = data.data;
                    award_user = data.data;

                    $("#winUserNum").val(data.num);
                    $.each(fansData, function(i, v) {
                        awardData.push(new Array(v['id'], v['avatar'], v['nickname']));
                    });

                    $("#btnEnd").removeClass("btn-disabled");
                }else{
                    $("#btnEnd").removeClass("btn-disabled");
                    isGameIng = false;

                }
            },
            error: function () {
                $("#btnEnd").removeClass("btn-disabled");
                isGameIng = false;

            },
            timeout: 15000
        })

    }

    function GetOffLineResult() {
        errorStatus = true;
        awardData = []; //
        var awardID = parseInt($("#sltAwardItem").val()) || 0;
        var awardNum = parseInt($("#sltAwardNum").val()) || 0;
        if (awardID <= 0 || awardNum <= 0) {
            return;
        }
        var count = 0;
        var nameTag = needTrueName ? "true_name" : "nick_name";
        var AppendData = function($list, endNum) {
            for (var i = 0; i < endNum; i++) {
                if ($list.length > i) {
                    var $Obj = $list.eq(i);
                    var imgUrl = $Obj.find("img").attr("src"),
                        mid = parseInt($Obj.attr("data_id")) || 0,
                        name = $Obj.find(nameTag).html();
                    AppendAwardData(mid, name, imgUrl);
                    $Obj.remove();
                } else {
                    break;
                }
            }
        };

        var $PrevAwardList = $(".prevAward_" + awardID);
        if ($PrevAwardList.length > 0) {
            AppendData($PrevAwardList, awardNum);
        }
        var remainNum = awardNum - awardData.length;
        if (remainNum > 0) {
            var $List = $(".award_" + awardID);
            if ($List.length > 0) {
                AppendData($List, remainNum);
            }
        }

        remainNum = awardNum - awardData.length;
        if (remainNum > 0) {
            var $AppendList = $(".award_0");
            if ($AppendList.length > 0) {
                count = AppendData($AppendList, remainNum);
            }
        }
        //
        $("#btnEnd").removeClass("btn-disabled").click();
    }
    function notice_awarduser(){
        var _award_id = $("#sltAwardItem").val();;

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
               console.log(data)
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
    function ShowResult(i) {
       
        if (awardData.length > i) {
            var obj = awardData[i];
            $("#jqAwardMemImg").attr("src", obj[1]);
            $("#jqAwardMemName").html(obj[2]);

            $(".outBox").addClass("moving");
            $(".reel").addClass("reel-moving");
            setTimeout(function() {
                $("#jq_result_list").append('<li class="show"><img src="' + obj[1] + '"><span>' + obj[2] + '</span></li>');
                $(".outBox").removeClass("moving");
                setTimeout(function() {
                    ShowResult(++i);
                }, 100);
            }, 4100);
        } else {
            $("#btnEnd").hide();
            $("#btnStart").removeClass("btn-disabled").show();
            isGameIng = false;
        }

    }



    $(".reset").on("click",function(){
        var resetOk = confirm("您确定要重新抽奖，该奖品之前中奖记录将清空！");
        var reset_award_id = $("#sltAwardItem option:selected").attr("data_num");
        if (resetOk == true){

            $.ajax({
            url: "<?php  echo $this->createMobileUrl('resetAwards', array('rid' => $rid,'code'=>'cjxreset'))?>",
            dataType: "json",
            data: {
                rawardid:reset_award_id,
            },
            beforeSend: function () {
               
            },
            success: function (data) {
                    if(data.ret == 1){
                       
                        alert("奖品重置成功，可以重新抽奖了。")
                        location.href="<?php  echo $this->createMobileUrl('dpm_cjx',array('rid'=>$rid))?>";
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

    $(".resetAll").on("click",function(){
        var resetAllOk = confirm("您确定要重置所有奖项，之前所有中奖记录将清空！")
        if (resetAllOk == true){
            
            $.ajax({
            url: "<?php  echo $this->createMobileUrl('resetAwards', array('rid' => $rid,'code'=>'cjxresetAll'))?>",
            dataType: "json",
            data: {

            },
            beforeSend: function () {
               
            },
            success: function (data) {
                    if(data.ret == 1){
                       
                        alert("奖品重置成功，可以重新抽奖了。")
                        location.href="<?php  echo $this->createMobileUrl('dpm_cjx',array('rid'=>$rid))?>";
                    }else{
                        alert("奖品重置失败，请刷新页面重试。")
                    }
                },
                error: function () {
                    alert("网络太慢了，重置失败！");
                },
                timeout: 15000
            })


        }
    })


    function spaceStart(){
        if(!$("#btnStart").hasClass("btn-disabled")) {
            $("#btnStart").click();
        }else{
            $("#btnEnd").click();
        }
    }

    $(document).keydown(function(e){
        if(e.which == 32) {
            spaceStart();
        }

    });
    </script>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
