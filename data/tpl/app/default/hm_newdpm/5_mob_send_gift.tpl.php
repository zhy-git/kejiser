<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html>
<head>
    <title>选择送礼对象</title>
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

    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/app/util.js"></script>
    <!--<script src="<?php  echo $_W['siteroot'];?>app/resource/js/app/config.js"></script>-->
    <!--<script src="<?php  echo $_W['siteroot'];?>app/resource/js/require.js"></script>-->
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/mui.min.js"></script>
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/app/common.js"></script>
    <!--<script  type="text/javascript" src="../addons/hm_newdpm/imgs/js/wmPhone.js?r=8"></script>-->
    <!--<link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/imgs/css/wmPhone.css?r=7"/>-->
    <!--<link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/imgs/css/onWallPhone.css?r=24"/>-->
    <link href="../addons/hm_newdpm/imgs/css/common.mzh.css" rel="stylesheet">
    <link href="../addons/hm_newdpm/imgs/css/am_icon.css" rel="stylesheet">
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
        jssdkconfig = <?php  echo json_encode($_W['account']['jssdkconfig']);?> || {};
        // 是否启用调试
        jssdkconfig.debug = false;
        jssdkconfig.jsApiList = [
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
        ];

    </script>
    <script type="text/javascript">

        var get_moreUsers = "<?php  echo $this->createMobileUrl("moreUsers", array('rid' => $rid,'uid'=>$fans['from_user']))?>";

//        var is_opened=0;
////        var isAdmin=0;
//        var isback=0;
//        var ismbp=0;
//        var hbtype=0;//红包类型，0可以提现，1不可以提现。
//        var rootimg = "<?php  echo $_W['attachurl'];?>";
//        var keyword =0;
//        var bp_listword =0;
//        var dsData =0;
//        var arr =0;
//        var send_gift_form_url = "<?php  echo $this->createMobileUrl("confirm_dpm_gift", array('rid' => $rid,'uid'=>$fans['from_user']))?>";
        var tokens = "<?php  echo $fans['from_user'];?>";
    </script>
</head>
<body>
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/mzh.funlink.min.js"></script>
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/index_gift.min.js"></script>
<script src="../addons/hm_newdpm/mobimg/lrz.mobile.min.js"></script>
<script src="../addons/hm_newdpm/mobimg/lrz.all.bundle.js"></script>

<link href="../addons/hm_newdpm/imgs/css/index_gift.css" rel="stylesheet" type="text/css"/>
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
<div id="get_back" onclick="location.href ='<?php  echo $this->createMobileUrl('messagesindex', array('id' => $rid))?>'" style="position: fixed;bottom: 18%;right: 5%;height: 66px;width: 66px;background:rgba(0,0,0,0.1);border: 1px solid #eee;border-radius: 50%;text-align: center;line-height: 66px;color: #fff;font-size: 1.5rem">返回</div>

<script type="text/javascript">
    $(function () {
        <?php  if($uid) { ?>
        send_gift_direct({"uid":"<?php  echo $uid;?>","nickname":"<?php  echo $fans['nickname'];?>"});
        <?php  } ?>
        $('.user-filter-item:eq(2) span').trigger('click');

    });
</script>

<div class="mzh_modal_alert el_panel">
    <div class="mzh_modal_alert_dialog" style="width: 90vw;">
        <div class="mzh_modal_alert_title" >送礼物<span class="am-icon-close close"></span></div>
        <div class="mzh_modal_alert_body" >
            <div class="temp_el_panel"  id="send-gift-content">
                <div class="fl-slide-content">

                    <?php  if(is_array($new_bbgift)) { foreach($new_bbgift as $aa => $row) { ?>
                    <div class="fl-slide-panel">
                        <?php  if(is_array($row)) { foreach($row as $index => $items) { ?>
                        <div class="fl-el-item " data-id="<?php  echo $items['id'];?>" data-image="<?php  echo tomedia($items['bb_pic'])?>" data-fee="<?php  echo $items['bb_price'];?>">
                            <img src="<?php  echo tomedia($items['bb_pic'])?>" class="fl-el-item-img"/>
                            <p class="fl-el-item-name" style="margin: 0;padding: 0;font-size: 1.2rem"><?php  echo htmlspecialchars_decode($items['bb_name'])?></p>
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

            <!--<div class="fl-slide-optional">-->
                <!--<label for="number">数量:</label>-->
                <!--<div class="fl-number-picker">-->
                    <!--<div class="iconfont fl-number-picker-minus"></div>-->
                    <!--<div class="fl-input-wrapper">-->
                        <!--<input type="number" name="number" id="number" value="1"/>-->
                    <!--</div>-->
                    <!--<div class="iconfont fl-number-picker-add enabled"></div>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="fl-slide-optional">-->
                <!--<input type="checkbox" class="fl-checkbox" name="anonymous" id="anonymous" checked="checked"/>-->
                <!--<label for="anonymous">大屏弹幕显示</label>-->
            <!--</div>-->
            <p>￥<span class="fl-strong el-price">0.00</span>, 送给<span class="fl-strong el-to-user-name"></span></p>
        </div>
        <div class="mzh_modal_alert_footer">
            <a class="mzh_btn_cancel" id="el-back-btn">换对象</a>
            <a class="mzh_btn_confirm" id="el-confirm-btn">送&nbsp;出</a>
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
<script>
    <?php  if($bp['bp_pay2']==1) { ?>
    $("#el-confirm-btn").click(function () {
        var e = "";


        if (to_user.uid = to_user.uid, to_user.item_id = parseInt(to_user.item_id), to_user.item_number = parseInt(to_user.item_number), (to_user.uid =='') && (e += "-请选择送礼对象<br/>"), (isNaN(to_user.item_id) || to_user.item_id <= 0) && (e += "-请选择礼物<br/>"), (isNaN(to_user.item_number) || to_user.item_number <= 0) && (e += "-请填写赠送数量<br/>"), "" == e) {

//           var  checkid = document.getElementById("anonymous").checked;
            var submitData = {
                    "uid": to_user.uid,//送礼对象openid
                    "item_id": to_user.item_id,//礼品ID
                    "item_number": 1,//送礼数量
                    "item_price": to_user.item_price,//单价
                    "anonymous": 1,//是否大屏幕播放
//                    "fansid": tokens,//是否大屏幕播放
            };

            $.post('<?php  echo $this->createMobileUrl('confirm_dpm_gift',array('token'=>'onBridge','id'=>$rid))?>',submitData, function(data) {
                $(".el_panel").hide();
                to_user.uid = 0;
                if(data.success == 1&&data.isAdmin==0){
                    var result = data.arr;
                    $(".otitle").empty().append(result.xq);

                    $(".ordersn").empty().append(result.ordersn);

                    $(".shangjia").empty().append(result.title);

                    $(".jine").empty().append(result.fee);

                    $("input[name='params']").val(data.params);
                    $("#biaodan").submit();
                }else if(data.success == 1&&data.isAdmin==1){
                    $.tip("礼物发送成功！")
                    setTimeout(function () {
                        location.href = "<?php  echo $this->createMobileUrl('messagesindex',array('id'=>$rid))?>";
                    },1000)
                }else{
//                    $.tip(data.success);
                    $.tip(data.msg);
                }
            },'json');

        } else $.alert(e)
    })
    <?php  } else if($bp['bp_pay2']==2) { ?>
    $("#el-confirm-btn").click(function(){

        var e = "";
        if (to_user.uid = to_user.uid, to_user.item_id = parseInt(to_user.item_id), to_user.item_number = parseInt(to_user.item_number), (to_user.uid =='') && (e += "-请选择送礼对象<br/>"), (isNaN(to_user.item_id) || to_user.item_id <= 0) && (e += "-请选择礼物<br/>"), (isNaN(to_user.item_number) || to_user.item_number <= 0) && (e += "-请填写赠送数量<br/>"), "" == e) {

            var submitData = {
                "uid": to_user.uid,//送礼对象openid
                "item_id": to_user.item_id,//礼品ID
                "item_number": 1,//送礼数量
                "item_price": to_user.item_price,//单价
                "anonymous": 1,//是否大屏幕播放
//                        "token": tokens//是否大屏幕播放
            };
            $.post("<?php  echo $this->createMobileUrl('confirm_dpm_gift',array('id'=>$rid,'from_user'=>$page_from_user))?>", submitData,function(data){

                if(data.success == 1&&data.isAdmin==0){
                    location.href="<?php  echo $this->createMobileUrl('pay',array('pay_type' => 7))?>&orderid="+data.orderid;

                }else if(data.success == 1&&data.isAdmin==1){

                    $(".el_panel").hide();
                    to_user.uid = 0;
                    $.tip("送礼成功！！");
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
                if(click){
                    return $.tip("请不要频繁点击");
                }
                click=true;
                var e = "";

                if (to_user.uid = to_user.uid, to_user.item_id = parseInt(to_user.item_id), to_user.item_number = parseInt(to_user.item_number), (to_user.uid =='') && (e += "-请选择送礼对象<br/>")&&(click=false), (isNaN(to_user.item_id) || to_user.item_id <= 0) && (e += "-请选择礼物<br/>")&&(click=false), (isNaN(to_user.item_number) || to_user.item_number <= 0) && (e += "-请填写赠送数量<br/>")&&(click=false), "" == e) {

//                    var  checkid = document.getElementById("anonymous").checked;

                    var submitData = {
                        "uid": to_user.uid,//送礼对象openid
                        "item_id": to_user.item_id,//礼品ID
                        "item_number": 1,//送礼数量
                        "item_price": to_user.item_price,//单价
                        "anonymous": 1,//是否大屏幕播放
//                        "token": tokens//是否大屏幕播放
                    };

//                    console.log(submitData)
//                    return;
                    $.post('<?php  echo $this->createMobileUrl('confirm_dpm_gift',array('id'=>$rid))?>',submitData, function(idata) {
//                        $.tip(idata.success);
                        if(idata.success == 1&&idata.isAdmin==0){

                            click=false;
                            $(".el_panel").hide();
                            to_user.uid = 0;
                            util.pay({
                                orderFee : idata.pay_money,
                                payMethod : 'wechat',
                                orderTitle : '送礼'+idata.pay_money+'元',
                                orderTid : idata.tid,
                                module : 'hm_newdpm',
                                success : function(result) {
                                    click=false;
                                    $.tip("送礼成功！！");
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
                        }else if(idata.success == 1&&idata.isAdmin==1){
                            click=false;
                            $(".el_panel").hide();
                            to_user.uid = 0;
                            $.tip("送礼成功！！");
                            setTimeout(function () {
                                location.href = "<?php  echo $this->createMobileUrl('messagesindex',array('id'=>$rid))?>";
                            },1000)
                        }else{
                            click=false;
                            $(".el_panel").hide();
                            to_user.uid = 0;
//                            $.tip(idata.success);
                            $.tip(idata.msg);
                        }
                    },'json');

                } else $.alert(e)
            })
        });
    });
    <?php  } ?>
</script>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>
