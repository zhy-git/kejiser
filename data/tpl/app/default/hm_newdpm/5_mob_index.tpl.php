<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <title>大屏幕上墙</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../addons/hm_newdpm/mobimg/index.css?v=201610424" />
    <link rel="stylesheet" href="../addons/hm_newdpm/mobimg/dropload.min.css?v=2016170424" />
    <style type="text/css" id="_zoom"></style>
    <script type="text/javascript" src="../addons/haoman_base/base/zepto.min.js?v=2016124"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/zepto.form.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/zepto.fx.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/mobimg/index.js?v=20161124170424"></script>

    <style type="text/css">
    .menulist .menu_item1 {
        border-top: 6px solid rgb(255, 207, 13);
    }
    
    .dropload-update {
        color: #fff;
    }
    
    .dropload-load {
        color: #fff;
    }
    .uped{
        width: 100%;
        height: 100%;
        margin-top: 0px;
    }
    .wrapper {
        width: 100%;
        max-width: 800px;
        min-height: 100%;
        margin: 0 auto;
        background-image: url(<?php  echo $bg;?>);
        background-repeat: repeat;
        background-size: 100% auto;
    }
    .menulist div a {
        font-family: -webkit-body;
    }
    .dt_review_box_main { position: relative; margin: 3px 8px 8px; }
    .dt_review_box_button { position: absolute; right: 0; top: 7px;  text-align: right; width:20%;}
    .dt_review_box_button button { margin-top: 1px; width: 38px; height: 38px; overflow: hidden; font-size: 14px; background-color:#FEBE40; border-radius: 50%; color: #FFF; cursor: pointer; border: none; float: right; }
    .sendPicBp{ padding: 2%;width: 25%; margin-top: 20px; background-size: 100% 100%;background-repeat: no-repeat; float: right;background-position: 50%;}
    .dt_review_box_button button:active { background-color: #FEBE40; }
    #rulebox{ width:96%; background:#FFF; margin: 2%;border-radius:4px; position:fixed; bottom: 30%; z-index:99000;padding: 10px 0px;}
    #markser{ width:100%; height:100%; background:rgba(0,0,0,0.6); position:absolute; z-index:9999; display:none;}
    .rulefoot1{ width:76px;height:30px;border-radius:5px;font-size:14px; font-weight:700; background:#03BD01; color:#fff; border:0	}
    .chatBanner12{right:0;position:fixed; bottom:60px;z-index:100;max-width:640px;height:52px;font-size:10px}
    .chatBanner34{position:fixed;left:40px;bottom:60px;z-index:100;max-width:640px;height:52px;font-size:10px}
    .sendPicBp{width: 21%;margin-right: 2%; height: 70px;margin-top: 20px; float: right;}

    </style>
</head>

<body>
<?php  if($xys['isxys']==0) { ?>
<div class="chatBanner12" style="">
    <div class="dt_review_box_main">
        <div class="dt_review_box_button">
            <button onclick="showrule();" >愿</button>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php  } ?>
<?php  if($bp['isbp']==1&& $money==1) { ?>
<div class="chatBanner34" style="display: block">
    <div class="dt_review_box_main">
        <div class="dt_review_box_button">
            <button class="dt_siliao_box_button button_3_disabled"  ontouchstart="jumpSiliao();" style="background:#FD90A3;">霸</button>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php  } ?>

<div id="rulebox" style="display:none;">
    <div class="rulebody"><span id="bp_title" style="font-size:20px;text-align:center;color: #03bd01;display: block;">许愿</span>
        <div id="bapingImage"></div>
        <input name="bpfor" type="hidden" value="" id="bpfor"/>
        <div class="form-group1 row1" style="margin-top:20px;">
            <label class="control-label col-md-4"></label>
            <div class="col-md-8 xuyuan" style="display: none">
                <div id="bapingQiehuan">
                    <textarea id="bapingContent"  class="form-control" name="content" style="margin-top:20px;width:92%; margin-left: 2%;margin-right: 2%;height:100px;border:1px solid #dcdcdc; overflow:hidden; resize:none;   padding: 2%;" placeholder="请不要发布广告涉黄等内容" ></textarea>
                </div>
            </div>
            <div class="col-md-8 baping" style="display: none">
                <div style="background: #fff;overflow: hidden;width: 96%;margin-left: 2%;border: 1px solid #dcdcdc;  border-radius: 3px; ">
                    <select name="pbtime" style="width: 107%; height: 35px;border: none;background: #fff;color: #A9A9A9;" id="pbtime">
                        <option value="0">请选择霸屏时长</option>
                        <?php  if(is_array($bpmoney)) { foreach($bpmoney as $row) { ?>
                        <option value="<?php  echo $row['bp_time'];?>"><?php  echo $row['bp_time'];?>秒 ￥<?php  echo $row['bp_money'];?></option>
                        <?php  } } ?>
                    </select>
                </div>
                <div id="bapingQiehuan2">
                    <textarea id="bapingContent2"  class="form-control" name="content" style="margin-top:20px;width:65%; height:100px;border:1px solid #dcdcdc; overflow:hidden; resize:none;   padding: 2%;margin-left: 2%" placeholder="请不要发布广告涉黄等内容，霸屏不支持退款" ></textarea>
                    <div class="sendPicBp" style="position: relative" >
                        <img src="../addons/hm_newdpm/images/shangchuan3.jpg" style="height: 100%;width: 100%" id="sendPicBp">
                        <img src="../addons/hm_newdpm/images/iconDele.png" style="height: 30px;width: 30px;position: absolute;top: 0px;right:0%;display: none" id="iconDele">
                        <input name="bppic" type="hidden" value="" id="bppic"/>
                        <input style="display: none" type="file" id="file2" name="file" accept="image/*">
                        <div style="font-size: 16px;line-height: 25px;height: 25px;" id="up_text">上传图片</div>
                    </div>



                    <!-- <div class="sendPicBp">
                        <input name="bppic" type="hidden" value="" id="bppic"/>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div style="width:100%;height:30px;text-align:center;line-height: 30px;    margin: 4% auto 1%;">

        <button class="rulefoot1" type="button"   onClick="closeRule();" style="background:none;color:black;">取消</button>
        <button class="rulefoot1" type="button" style="width: 40%;" id="button">
            <input type="button" value="许愿" style="background:none;border: none;color: #fff;" id="bpSubmit"/>
            <input type="hidden" value="0" id="_type"/>
            <!--0表示许愿1表示霸屏-->
        </button>
    </div>

</div>

<div id="markser"></div>
<div id="toast"></div>
<div id="showPictures"></div>

    <div id="container">
        <div class="zoom">
            <div class="cover"></div>
            <div class="error_dialog" style="z-index: 2000025">
                <img alt="" src="../addons/hm_newdpm/mobimg/error.png">
                <p></p>
            </div>
            <div class="signIned">
                <div class="success">
                    <s></s><span id="xuyuan">上墙成功</span></div>
                <a id="signIned" href="" class="yellow_btn">确定</a>
            </div>
            <div class="wrapper gowall" style="background-repeat:repeat;">
               
                <div class="companyName" style="padding-top: 15%;">
                    <p><?php  echo $reply['mobtitle'];?></p>
                    <div class="fgx"><img alt="" src="../addons/hm_newdpm/mobimg/fgx.png"></div>
                </div>
                <div class="signIn1" style="margin-top: 20px;">
                    <div class="head_box">
                        <div class="headbox"><img alt="" src="../addons/hm_newdpm/mobimg/headbox.png"></div>
                        <img alt="" src="<?php  echo tomedia($fans['avatar'])?>" />
                    </div>
                    <div class="userName"><?php  echo $nickname;?></div>
                </div>
                <div class="send_words">
                    <div class="wordsedit1">
                        <textarea name="memo" placeholder="请输入要说的话，然后点击发送，要发图片请先选择图片后再点击发送。" maxlength=70></textarea>
                    </div>
                    <div class="senddiv">
                        <div class="sendimg">
                            <a id="upload" href="javascript:void(0);"><img alt="" id="fileimg" src="../addons/hm_newdpm/mobimg/upload_img.png"></a>
                        </div>
                        <div class="fasong"><a id="saveMsg" href="javascript:void(0);">发送</a></div>
                        <div class="clear"></div>
                        <input type='file' style="display:none;" name='photo' id='photo' />
                    </div>
                    
                </div>
                <input style="display: none" type="file" id="file" name="file" accept="image/*">
                <input type='hidden' id='pic_url' name='logo' value=""/>


                <script type="text/javascript" src="../addons/hm_newdpm/mobimg/dropload.min.js?v=20161124170424"></script>
                <script type="text/javascript" src="../addons/haoman_base/base/jquery-2.1.0.min.js?v=20161124170424"></script>
                <script src="../addons/hm_newdpm/mobimg/lrz.mobile.min.js"></script>
                <script src="../addons/hm_newdpm/mobimg/lrz.all.bundle.js"></script>
                <script>
                    var rootimg = "<?php  echo $_W['attachurl'];?>";
                    $("#upload").on('touchend',function(){
                        $("#file").click();
                    });

                    var input = document.querySelector('#file');

                    input.onchange = function () {
                        $('#fileimg').addClass("uped").css("margin-top","0");
                        document.getElementById('fileimg').style.display = 'block';
                        $('#fileimg').attr('src',"../addons/hm_newdpm/images/009.gif");
                        lrz(this.files[0])
                                .then(function (rst) {
                                    // 处理成功会执行
                                    rst.formData.append('fileLen', rst.fileLen);

                                    $.ajax({
                                        url: '<?php  echo $this->createMobileUrl('UploadImage');?>', // 这个地址做了跨域处理，可以用于实际调试
                                        data: rst.formData,
                                        processData: false,
                                        contentType: false,
                                        dataType:  'json',
                                        type: 'POST',
                                        success: function (data) {
                                            var pic_url = data.filename;
                                            var msg = data.msg;
                                            $('#fileimg').attr('src',rootimg+pic_url);
                                            // alert(msg);
                                            $('#fileimg').addClass("uped").css("margin-top","0");
                                            $('#pic_url').attr('value',pic_url);
                                            document.getElementById('fileimg').style.display = 'block';
                                        }
                                    });
                                })
                                .catch(function (err) {
                                    $('#fileimg').attr('src',"../addons/hm_newdpm/mobimg/upload_img.png");
                                    alert(err)
                                    // 处理失败会执行
                                })
                                .always(function () {
                                    // 不管是成功失败，都会执行
                                });

                    }

                    $("#saveMsg").click(function() {
                        var $btn = $(this);
                        if ($btn.hasClass("disabled")) return;
                        $btn.addClass("disabled");
                        if (($(".wordsedit1 textarea").val() == "") || ($(".wordsedit1 textarea").val() == "null")) {
                            $(".error_dialog p").html("请输入要说的话！");
                            $(".error_dialog").show();
                            setTimeout(function() {
                                $(".error_dialog").hide()
                            }, 3000);
                            $btn.removeClass("disabled");
                            return;
                        }

                        $.ajax({
                            url: '<?php  echo $this->createMobileUrl('savemessages',array('id'=>$rid,'from_user'=>$page_from_user))?>',
                            type: 'post',
                            dataType: 'json',
                            contentType: "application/x-www-form-urlencoded; charset=utf-8",
                            data: {
                                "message": $(".wordsedit1 textarea").val(),
                                "picture": $("#pic_url").val(),
                            },
                            success: function(data) {
                                $btn.removeClass("disabled");
                                if (data.success == 1) {
                                    $(".signIned").show();
                                    $(".cover").show();
                                    $('#fileimg').removeClass("uped").css("margin-top","16px");
                                    $('#fileimg').attr('src','../addons/hm_newdpm/mobimg/upload_img.png');
                                    $('#pic_url').attr('value','');

                                    $(".wordsedit1 textarea").val("");
                                } else {
                                    $(".error_dialog p").html(data.msg);
                                    $(".error_dialog").show();
                                    setTimeout(function() {
                                        $(".error_dialog").hide()
                                    }, 2000);
                                    return;
                                }
                            },
                            error: function() {

                                window.location.reload();
                            }
                        });

                    });


                    $("#signIned").click(function() {
                        $(".signIned").hide();
                        $(".cover").hide();
                    });


                </script>
               
            </div>
        </div>
        <script type="text/javascript">

        $('#photo').change(function() {
            var index = 1;
            var dom = $("<span class='imgField' data-index=" + index + "><img src='../addons/hm_newdpm/mobimg/touming.png' /></span>");

            $('#photo').before(dom);
            // 开始处理上传图片
            imgPreview(dom.find('img'), this, function(imgUrl) {
                //图片上传成功回调方法
                var $btn = $('#upload');
                $btn.addClass("disabled");
                picture = imgUrl;
            });

            if ($('.senddiv').find('.imgField').length > 0) {
                $('#upload').addClass('disabled');
            }

        });


       
        </script>
    </div>
<div id="zhifu" style="display: none">

    <h4>订单信息</h4>

    <div class="panel">

        <div class="clearfix" style="padding-top:10px;">

            <p>商品名称 :<span class="pull-right otitle"><?php  echo $params['title'];?></span></p>

            <p>订单编号 :<span class="pull-right ordersn" ><?php  echo $params['ordersn'];?></span></p>

            <p>商家名称 :<span class="pull-right shangjia"><?php  echo $_W['account']['name'];?></span></p>

            <p>支付金额 :<span class="pull-right jine">￥<?php  echo sprintf('%.2f', $params['fee']);?> 元</span></p>



        </div>

    </div>

    <div class="pay-btn" id="wechat-panel">

        <form action="<?php  echo url('mc/cash/wechat');?>" method="post" id="biaodan">

            <input type="hidden" name="params" value=""  />

            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />

            <button class="weui_btn_primary weui_btn col-sm-12"  style="z-index: 9999;" type="submit" id="wBtn" value="wechat">微信支付(必须使用微信内置浏览器)</button>

        </form>

    </div>


</div>
<div class="power-by" style="position: fixed;bottom: 50px;width: 100%;left: 0px;right: 0px;font-size: 12px;text-align: center;color:#EAB387;">
    <div class="copyright fixed"><?php  if(empty($reply['copyright'])) { ?> &copy;<?php  echo $_W['account']['name'];?><?php  } else { ?>&copy;<?php  echo $reply['copyright'];?><?php  } ?></div>
</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script>
    var rootimg = "<?php  echo $_W['attachurl'];?>";

    $("#sendPicBp").on('touchend',function(){
        $("#file2").click();
    });

    var input = document.querySelector('#file2');

    input.onchange = function () {
        $('#sendPicBp').attr('src',"../addons/hm_newdpm/images/009.gif");
        $("#up_text").html('上传中..');
        lrz(this.files[0])
                .then(function (rst) {
                    // 处理成功会执行
                    rst.formData.append('fileLen', rst.fileLen);

                    $.ajax({
                        url: '<?php  echo $this->createMobileUrl('UploadImage');?>', // 这个地址做了跨域处理，可以用于实际调试
                        data: rst.formData,
                        processData: false,
                        contentType: false,
                        dataType:  'json',
                        type: 'POST',
                        success: function (data) {
                            var pic_url = data.filename;

                            var msg = data.msg;
                            $('#sendPicBp').attr('src',rootimg+pic_url);
                            $("#iconDele").show();
                            $("#up_text").html('上传成功');
                            // alert(msg);
                            $('#sendPicBp').addClass("uped").css("margin-top","0");
                            $('#bppic').attr('value',pic_url);
                            document.getElementById('sendPicBp').style.display = 'block';
                        }
                    });
                })
                .catch(function (err) {
                    $('#sendPicBp').attr('src',"../addons/hm_newdpm/images/error.png");
                    $("#up_text").html('上传失败');
                    alert(err)
                    // 处理失败会执行
                })
                .always(function () {
                    // 不管是成功失败，都会执行
                });

    }

</script>
<script>

    function showrule(){
        var title='心愿';
        $("#bp_title").text(title);
        $(".baping").hide();
        $(".xuyuan").show();
        $("#markser").show();
        $("#bpSubmit").val("许愿");
        $("#rulebox").show();
        $("#_type").val("0");
    }
    function jumpSiliao(){
        var title='霸屏';
        $("#bp_title").text(title);
        $(".baping").show();
        $(".xuyuan").hide();
        $("#markser").show();
        $("#bpSubmit").val("霸屏");
        $("#rulebox").show();
        $("#_type").val("1");


    }
    function closeRule(){
        $("#rulebox").hide();
        $(".baping").hide();
        $(".xuyuan").hide();
        $("#markser").hide();
        $('#bppic').attr('value','');
        $('#sendPicBp').attr('src',"../addons/hm_newdpm/images/shangchuan3.jpg");
        $("#iconDele").hide();
        $("#up_text").html('上传文件');
    }
    $("#iconDele").click(function () {
        $('#bppic').attr('value','');
        $('#sendPicBp').attr('src',"../addons/hm_newdpm/images/shangchuan3.jpg");
        $("#iconDele").hide();
        $("#up_text").html('上传文件');
    })

    $("#button").click(function () {
        var $btn = $(this);
        var $type =$("#_type").val();

        if ($btn.hasClass("disabled")) return;
        $btn.addClass("disabled");
       if($type==0){
           if (($("#bapingQiehuan textarea").val() == "") || ($("#bapingQiehuan textarea").val() == "null")) {
               $(".error_dialog p").html("请输入要许愿的话！");
               $(".error_dialog").show();
               setTimeout(function() {
                   $(".error_dialog").hide()
               }, 2000);
               $btn.removeClass("disabled");
               return;
           }
           $.ajax({
               url: '<?php  echo $this->createMobileUrl('savemessages',array('id'=>$rid,'from_user'=>$page_from_user))?>',
               type: 'post',
               dataType: 'json',
               contentType: "application/x-www-form-urlencoded; charset=utf-8",
               data: {
                   "message": $("#bapingQiehuan textarea").val(),
                   "type": 1,
               },
               success: function(data) {
                   $btn.removeClass("disabled");
                   if (data.success == 1) {
                       $("#rulebox").hide();
                       $("#bapingQiehuan textarea").val("");
                       $("#markser").hide();
                       $("#xuyuan").html("许愿成功")
                       $(".signIned").show();
                       $(".cover").show();
//                    $(".error_dialog p").html("许愿成功");
//                    $(".error_dialog").show();
                       setTimeout(function() {
                           $(".error_dialog").hide()
                       }, 1000);
                   } else {
                       $(".error_dialog p").html(data.msg);
                       $(".error_dialog").show();
                       setTimeout(function() {
                           $(".error_dialog").hide()
                       }, 3000);
                       return;
                   }
               },
               error: function() {
                   window.location.reload();
               }
           });
       }else if($type==1){
           var bapingContent = $("#bapingContent2").val();
           var pbtime = $("#pbtime").val();
           var bppic = $("#bppic").val();
           if(pbtime<=0){
               $(".error_dialog p").html("请选择霸屏时长！");
               $(".error_dialog").show();
               setTimeout(function() {
                   $(".error_dialog").hide()
               }, 500);
               $btn.removeClass("disabled");
               return false;
           }
           if(bapingContent.length==0&&bppic.length==0){
               $(".error_dialog p").html("请输入霸屏语或上传图片！");
               $(".error_dialog").show();
               setTimeout(function() {
                   $(".error_dialog").hide()
               }, 500);
               $btn.removeClass("disabled");
               return false;
           }
           if(bapingContent.length>30){
               $(".error_dialog p").html("霸屏限制30个字以内！");
               $(".error_dialog").show();
               setTimeout(function() {
                   $(".error_dialog").hide()
               }, 1000);
               $btn.removeClass("disabled");

               return false;
           }
           <?php  if($bp['bp_pay']==0) { ?>
           $.ajax({
               url: '<?php  echo $this->createMobileUrl('Confirm_bp',array('id'=>$rid,'from_user'=>$page_from_user))?>',
               type: 'post',
               dataType: 'json',
               contentType: "application/x-www-form-urlencoded; charset=utf-8",
               data: {
                   "message": bapingContent,
                   "pbtime": pbtime,
                   "bppic": bppic,
                   "type": 2,
               },
               success: function(data) {
                   $btn.removeClass("disabled");
                   if (data.success == 1&&data.isadmin==0) {

                       location.href="<?php  echo $this->createMobileUrl('pay',array('pay_type' => 2))?>&orderid="+data.orderid;
                   }else if(data.success == 1&&data.isadmin==1){
                       window.location.reload();
                   } else {
                       alert(data.msg);
                   }
               },
               error: function() {
                   alert("失败了！")
                   window.location.reload();
               }
           });
           <?php  } else { ?>
           var submitData = {
               "message": bapingContent,
               "pbtime": pbtime,
               "bppic": bppic,
               "type": 2,
           };
           $.post("<?php  echo $this->createMobileUrl('Confirm_bp',array('token'=>'onBridge','id'=>$rid,'from_user'=>$page_from_user))?>", submitData,function(data){
               if(data.success == 1&&data.isadmin==0){
                   var result = data.arr;
                   $(".otitle").empty().append(result.xq);

                   $(".ordersn").empty().append(result.ordersn);

                   $(".shangjia").empty().append(result.title);

                   $(".jine").empty().append(result.fee);

                   $("input[name='params']").val(data.params);
                   $("#biaodan").submit();
//                    $("#wBtn").click();

               }else if(data.success == 1&&data.isadmin==1){
                   window.location.reload();
               } else {
                   alert(data.msg)
               }
           },'json');
           <?php  } ?>
       }



    })

</script>
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript">
    wx.config({
        debug:false,
        appId: '<?php  echo $package["appId"];?>',
        timestamp: '<?php  echo $package["timestamp"];?>',
        nonceStr: '<?php  echo $package["nonceStr"];?>',
        signature: '<?php  echo $package["signature"];?>',
        jsApiList: [
            'getLocation','onMenuShareTimeline','onMenuShareAppMessage','onMenuShareWeibo'
    ]
    });
    var sharedata = {
        "imgUrl" : "<?php  echo $shareimg;?>",
        "link" : "<?php  echo $sharelink;?>",
        "desc" : "<?php  echo $sharedesc;?>",
        "title" : "<?php  echo $sharetitle;?>"
    };

    wx.ready(function () {
        <?php  if($reply['is_b_share'] == 2) { ?>
        wx.hideOptionMenu();
        <?php  } else { ?>
        wx.showOptionMenu();
        wx.onMenuShareAppMessage(sharedata);
        wx.onMenuShareTimeline(sharedata);
        wx.onMenuShareQQ(sharedata);
        wx.onMenuShareQZone(sharedata);
        wx.onMenuShareWeibo(sharedata);
        <?php  } ?>
    });

</script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>

</html>
