<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html>
<head>
    <title>选择表白/示爱对象</title>
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


    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/app/util.js"></script>
  <!---->
    <!--<script src="<?php  echo $_W['siteroot'];?>app/resource/js/require.js"></script>-->
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/mui.min.js"></script>
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/app/common.js"></script>

    <script type="text/javascript">

        window.sysinfo = {
        <?php  if(!empty($_W['uniacid'])) { ?>'uniacid': '<?php  echo $_W['uniacid'];?>',<?php  } ?>
        <?php  if(!empty($_W['acid'])) { ?>'acid': '<?php  echo $_W['acid'];?>',<?php  } ?><?php  if(!empty($_W['openid'])) { ?>'openid': '<?php  echo $_W['openid'];?>',<?php  } ?>
        <?php  if(!empty($_W['uid'])) { ?>'uid': '<?php  echo $_W['uid'];?>',<?php  } ?>
        'siteroot': '<?php  echo $_W['siteroot'];?>',
                'siteurl': '<?php  echo $_W['siteurl'];?>',
                'attachurl': '<?php  echo $_W['attachurl'];?>',
                'attachurl_local': '<?php  echo $_W['attachurl_local'];?>',
                'attachurl_remote': '<?php  echo $_W['attachurl_remote'];?>',
        <?php  if(defined('MODULE_URL')) { ?>'MODULE_URL': '<?php echo MODULE_URL;?>',<?php  } ?>
        'cookie' : {'pre': '<?php  echo $_W['config']['cookie']['pre'];?>'}
        };
        // jssdk config 对象


    </script>

    <script>
        var get_moreUsers = "<?php  echo $this->createMobileUrl("moreUsers", array('rid' => $rid,'uid'=>$fans['from_user']))?>";
        var go_UploadImage="<?php  echo $this->createMobileUrl('UploadImage',array('rid' => $rid));?>";
        var uploadImg="<?php  echo $this->createMobileUrl("uploadimg", array('rid' => $rid))?>";

        var is_opened=0;
        var isAdmin=0;
        var isback=0;
        var ismbp=0;
        var hbtype=0;//红包类型，0可以提现，1不可以提现。
        var rootimg = "<?php  echo $_W['attachurl'];?>";
        var keyword =0;
        var bp_listword =0;
        var dsData =0;
        var arr =0;
    </script>
    <!--<script type="text/javascript" src="../addons/hm_newdpm/common/jquery-1.9.1.min.js"></script>-->

    <script type="text/javascript" src="../addons/hm_newdpm/imgs/js/fastclick.min.js"></script>
    <link href="../addons/hm_newdpm/imgs/css/index_love.css" rel="stylesheet" type="text/css"/>
    <link href="../addons/hm_newdpm/imgs/css/common.mzh.css" rel="stylesheet">
    <link href="../addons/hm_newdpm/imgs/css/am_icon.css" rel="stylesheet">
    <link rel="stylesheet" href="../addons/hm_newdpm/imgs/css/index_love.css">

</head>
<body>
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/index_love.min.js"></script>

<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/exif.js"></script>
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/uploadImage.js"></script>


<div id="main_body">
    <div class="user-filter">
        <div class="user-filter-item active">
            <span class="user-filter-text user-filter-icon-all" onclick="refresh_user_list(0, this);"> 全部</span>
        </div>
        <div class="user-filter-item">
            <span class="user-filter-text user-filter-icon-male" onclick="refresh_user_list(1, this);"> 男生</span>
        </div>
        <div class="user-filter-item">
            <span class="user-filter-text user-filter-icon-female" onclick="refresh_user_list(2, this);"> 女生</span>
        </div>
    </div>
    <div class="user_panel">
        <div class="user-list">
        </div>
        <div class="loading"><i class="am-icon-spinner am-icon-pulse"></i> <span>加载中…</span></div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        <?php  if($uid) { ?>
                express_love_direct({"uid":"<?php  echo $uid;?>","nickname":"<?php  echo $fans['nickname'];?>"});
        <?php  } ?>
        $('.user-filter-item:eq(0) span').trigger('click');
            });
</script>

<div class="mzh_modal_alert el_panel">
    <div class="mzh_modal_alert_dialog" style="width: 90vw">
        <div class="mzh_modal_alert_title">表白主题 <span class="am-icon-close close"></span></div>
        <div class="mzh_modal_alert_body">
            <div class="temp_el_panel"  id="send-gift-content">
            <div class="fl-slide-content">
                <?php  if(is_array($new_bbgift)) { foreach($new_bbgift as $row) { ?>
                <div class="fl-slide-panel">
                    <?php  if(is_array($row)) { foreach($row as $tt) { ?>
                    <div class="fl-el-item" data-id="<?php  echo $tt['id'];?>" data-content="<?php  echo $tt['bb_says'];?>" data-image="<?php  echo tomedia($tt['bb_pic'])?>">
                        <img src="<?php  echo tomedia($tt['bb_pic'])?>" class="fl-el-item-img"/>
                        <p class="fl-el-item-name" style="margin: 0;padding: 0;font-size: 1.2rem"><?php  echo htmlspecialchars_decode($tt['bb_name'])?></p>
                        <div class="fl-el-item-mask"></div>
                    </div>
                    <?php  } } ?>
                </div>

                <?php  } } ?>

            </div>
            <div class="fl-slide-pager">
                <ul></ul>
            </div>
            </div>
            <div class="fl-slide-el-text" style="height:62px;">
                <span class="el-image-upload" style="height: 60px; width:20%;float: left">
                    <img class="el-image-preview" src="../addons/hm_newdpm/imgs/zp.png" style="border-radius: 8px;vertical-align:bottom;"/>
                    <input id="upload" class="photo_file" type="file" name="upload" accept="image/*" capture="camera" onchange="imageUpLoad(this,2)"  />
                    <input type="hidden" name="image" id="image"/>
                </span>
                <textarea style="height:50px;width: 70%;float: right;padding: 5px;" class="el-love-letter" placeholder="表白内容(限30字以内)" maxlength="30" name="love_letter" id="love_letter"></textarea>
            </div>
            <div class="fl-slide-el-text" style="margin-top: 20px;">
             <?php  if(is_array($bb_price)) { foreach($bb_price as $index => $row) { ?>
                                <span class="el-item-option <?php  if($index==0) { ?>selected<?php  } ?>" data-id="<?php  echo $row['id'];?>" data-fee="<?php  echo $row['bb_price'];?>"><?php  echo $row['bb_time'];?>秒/<?php  echo $row['bb_price'];?></span>
             <?php  } } ?>
             </div>
            <p>￥<span class="fl-strong el-price">0.00</span> ，表白<span class="fl-strong el-lover-name"></span></p>
                    </div>
        <div class="mzh_modal_alert_footer">
            <a class="mzh_btn_cancel" id="el-back-btn">返&nbsp;回</a>
            <a class="mzh_btn_confirm" id="el-confirm-btn">表&nbsp;白</a>
        </div>
    </div>
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
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/mzh.funlink.min.js"></script>
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/lrz.bundle.js"></script>
<script type="text/javascript" src="../addons/hm_newdpm/mobimg/lrz.mobile.min.js"></script>
<script type="text/javascript" src="../addons/hm_newdpm/mobimg/lrz.all.bundle.js"></script>
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript">
    wx.config({
        debug:false,
        appId: '<?php  echo $package["appId"];?>',
        timestamp: '<?php  echo $package["timestamp"];?>',
        nonceStr: '<?php  echo $package["nonceStr"];?>',
        signature: '<?php  echo $package["signature"];?>',
        jsApiList: [
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'hideMenuItems',
            'showMenuItems',
            'hideAllNonBaseMenuItem',
            'showAllNonBaseMenuItem',
            'translateVoice',
            'startRecord',
            'stopRecord',
            'onRecordEnd',
            'playVoice',
            'pauseVoice',
            'stopVoice',
            'uploadVoice',
            'downloadVoice',
            'chooseImage',
            'previewImage',
            'uploadImage',
            'downloadImage',
            'getNetworkType',
            'openLocation',
            'getLocation',
            'hideOptionMenu',
            'showOptionMenu',
            'closeWindow',
            'scanQRCode',
            'chooseWXPay',
            'openProductSpecificView',
            'addCard',
            'chooseCard',
            'openCard'
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
<script type="text/javascript">

    $(function () {
        $('#uploads').upload_image(function(x){
            $('.el-image-preview').attr('src', rootimg+x);

            $('#image').val(rootimg+x);
            $.loadingModal(false);
        });

//        lover.item_id = 2096 || 0;
    });
    <?php  if($bp['bp_pay2']==1) { ?>
    $("#el-confirm-btn").click(function(){

        lover.love_letter = $("#love_letter").val();

        lover.image = $("#image").val();
        var e = "";
        if (lover.uid = lover.uid, lover.item_id = parseInt(lover.item_id), lover.theme_id = parseInt(lover.theme_id), (lover.uid =='') && (e += "-请选择表白对象<br/>")&&(click=false), (isNaN(lover.theme_id) || lover.theme_id <= 0) && (e += "-请选择表白主题<br/>")&&(click=false), (isNaN(lover.item_id) || lover.item_id <= 0) && (e += "-请选择霸屏时长<br/>")&&(click=false), $("#bp-field-admin").length && (lover.admin_el = $("#bp-field-admin").prop("checked")), "" == e) {
            var submitData = {
                "uid": lover.uid,//送礼对象openid
                "item_id": lover.theme_id,//主题ID
                "item_theme_id": lover.item_id,//时间id
                "item_photo": lover.image,//图片
                "item_content": lover.love_letter,//说的话
            };
            $.post("<?php  echo $this->createMobileUrl('confirm_dpm_saylove',array('token'=>'onBridge','id'=>$rid,'from_user'=>$page_from_user))?>", submitData,function(data){

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

                    $(".el_panel").hide();
                    lover.uid = 0;
                    $.tip("表白成功！！");
                    setTimeout(function () {
                        location.href = "<?php  echo $this->createMobileUrl('messagesindex',array('id'=>$rid))?>";
                    },1000)
                }
                else {

                    alert(data.msg)
                }
            },'json');

        }

    })
    <?php  } else if($bp['bp_pay2']==2) { ?>
    $("#el-confirm-btn").click(function(){
        lover.love_letter = $("#love_letter").val();

        lover.image = $("#image").val();
        var e = "";
        if (lover.uid = lover.uid, lover.item_id = parseInt(lover.item_id), lover.theme_id = parseInt(lover.theme_id), (lover.uid =='') && (e += "-请选择表白对象<br/>")&&(click=false), (isNaN(lover.theme_id) || lover.theme_id <= 0) && (e += "-请选择表白主题<br/>")&&(click=false), (isNaN(lover.item_id) || lover.item_id <= 0) && (e += "-请选择霸屏时长<br/>")&&(click=false), $("#bp-field-admin").length && (lover.admin_el = $("#bp-field-admin").prop("checked")), "" == e) {

            var submitData = {
                "uid": lover.uid,//送礼对象openid
                "item_id": lover.theme_id,//主题ID
                "item_theme_id": lover.item_id,//时间id
                "item_photo": lover.image,//图片
                "item_content": lover.love_letter,//说的话
            };
            $.post("<?php  echo $this->createMobileUrl('confirm_dpm_saylove',array('id'=>$rid,'from_user'=>$page_from_user))?>", submitData,function(data){

                if(data.success == 1&&data.isadmin==0){
                    location.href="<?php  echo $this->createMobileUrl('pay',array('pay_type' => 6))?>&orderid="+data.orderid;

                }else if(data.success == 1&&data.isadmin==1){

                    $(".el_panel").hide();
                    lover.uid = 0;
                    $.tip("表白成功！！");
                    setTimeout(function () {
                        location.href = "<?php  echo $this->createMobileUrl('messagesindex',array('id'=>$rid))?>";
                    },1000)
                }
                else {

                    alert(data.msg)
                }
            },'json');

        }else $.alert(e)



    })
    <?php  } else { ?>
    $(document).ready(function(){
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {

            var click=false;

            $("#el-confirm-btn").click(function () {

                lover.love_letter = $("#love_letter").val();

                lover.image = $("#image").val();
                if(click){
                    return $.tip("请不要频繁点击");
                }
                click=true;
                var e = "";

                if (lover.uid = lover.uid, lover.item_id = parseInt(lover.item_id), lover.theme_id = parseInt(lover.theme_id), (lover.uid =='') && (e += "-请选择表白对象<br/>")&&(click=false), (isNaN(lover.theme_id) || lover.theme_id <= 0) && (e += "-请选择表白主题<br/>")&&(click=false), (isNaN(lover.item_id) || lover.item_id <= 0) && (e += "-请选择霸屏时长<br/>")&&(click=false), $("#bp-field-admin").length && (lover.admin_el = $("#bp-field-admin").prop("checked")), "" == e) {

                    var submitData = {
                        "uid": lover.uid,//送礼对象openid
                        "item_id": lover.theme_id,//主题ID
                        "item_theme_id": lover.item_id,//时间id
                        "item_photo": lover.image,//图片
                        "item_content": lover.love_letter,//说的话
                    };

                    $.post('<?php  echo $this->createMobileUrl('confirm_dpm_saylove',array('id'=>$rid))?>',submitData, function(idata) {

                        if(idata.success == 1&&idata.isadmin==0){

                            click=false;
                            $(".el_panel").hide();
                            lover.uid = 0;
                            util.pay({
                                orderFee : idata.pay_money,
                                payMethod : 'wechat',
                                orderTitle : '表白'+idata.pay_money+'元',
                                orderTid : idata.tid,
                                module : 'hm_newdpm',
                                success : function(result) {
                                    click=false;
                                    $.tip("表白成功！！");
                                    setTimeout(function () {
                                        location.href = "<?php  echo $this->createMobileUrl('messagesindex',array('id'=>$rid))?>";
                                    },1000)
                                    //location.href="<?php  echo $_W['siteroot'].$this->createMobileUrl('results')?>&tid="+idata.orderid;
                                },
                                fail : function(result) {
                                    click=false;
                                    alert('fail : ' + result.message);
                                },
                                complete : function(result) {
                                    //location.reload();
                                }
                            });
                        }else if(idata.success == 1&&idata.isadmin==1){
                            click=false;
                            $(".el_panel").hide();
                            lover.uid = 0;
                            $.tip("表白成功！！");
                            setTimeout(function () {
                                location.href = "<?php  echo $this->createMobileUrl('messagesindex',array('id'=>$rid))?>";
                            },1000)

                        }else{
                            click=false;
                            $(".el_panel").hide();
                            lover.uid = 0;
                            $.tip(idata.msg);
                        }
                    },'json');

                } else $.alert(e)
            })

        });
    });
    <?php  } ?>
</script>
<script type="text/javascript">
    var upload = {
        start:function(){
            $.loadingModal(!0, "上传中..");
        },
        done:function(src,bigSrc,type){
            if(type==2){
                $.loadingModal(!1)

                $('.el-image-preview').attr('src', src);

                $('#image').val(src);

//                $('.for_photo').attr("src", src);
//                $("input[name=imgSrc]").val(src), n = src
            }else {

                $.getJSON(go_sendmsg, {image: src}, function (i) {
                    $.loadingModal(!1)
                    $.tip(i.data);
                    a.loadmsg();

                })
            }
        },
        error:function(errorMsg){
            $.loadingModal(!1)
            showInfo(errorMsg||'上传失败!',false);
        }
    }
    var imageUpLoad = function(e,type){
        upload.start();
        selectFileImage(e,{
            width:200,height:200,
            error:function(errorMsg){upload.error(errorMsg||'请上传宽高大于200px的图片')},
            callback:function(base64,rotate){
                ajax_imageUpload(base64,rotate,function(src,bigSrc){
                    upload.done(src,bigSrc,type);
                },function(errorMsg){
                    upload.error(errorMsg);
                })
            }
        })
    }
    var ajax_imageUpload = function(base64,rotate,fn1,fn2){
        base64 = base64.split('base64,');
        if(base64.length<1)
            return fn2();
        base64 = base64[1];
        var resultMsg = null;
        $.post(uploadImg,{strImg:base64,angel:rotate},function(result) {

            if(result.isResultTrue){
                fn1(result.resultMsg.sImgUrl,result.resultMsg.bImgUrl);
            }else{
                fn2(result.resultMsg);
            }
        });
    }
</script>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>
