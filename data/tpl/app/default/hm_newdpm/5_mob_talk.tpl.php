<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html>
<head>
    <title>与<?php  echo $for_fans['nickname'];?>的聊天</title>
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


    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/jquery-1.11.1.min.js"></script>

    <script  type="text/javascript" src="../addons/hm_newdpm/imgs/js/wmPhone.js?r=8"></script>
    <link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/imgs/css/wmPhone.css?r=7"/>
    <link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/imgs/css/onWallPhone.css?r=24"/>
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
    </script>

    <script type="text/javascript" src="../addons/hm_newdpm/imgs/js/mzh.funlink.min.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/imgs/js/fastclick.min.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/mobimg/lrz.mobile.min.js"></script>
    <link href="../addons/hm_newdpm/imgs/css/common.mzh.css" rel="stylesheet">
    <link href="../addons/hm_newdpm/imgs/css/am_icon.css" rel="stylesheet">

</head>
<body>
<link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/imgs/css/index_talk.css?v=2234"/>

<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/talk.min.js"></script>
<script type="text/javascript" src="../addons/hm_newdpm/imgs/js/smile.min.js"></script>

<script src="../addons/hm_newdpm/imgs/js/exif.js"></script>
<script src="../addons/hm_newdpm/imgs/js/uploadImage.js"></script>
<script>
    var isback = 0;
    var maxid = 0;
    var get_Getmsg = "<?php  echo $this->createMobileUrl("Gettalkmsg", array('rid' => $rid,'from_user'=>$fans['from_user']))?>";
    var get_Sendmsg = "<?php  echo $this->createMobileUrl("Sendtalkmsg", array('rid' => $rid,'from_user'=>$fans['from_user'],'acceptid'=>$uid))?>";
    var save_Image="<?php  echo $this->createMobileUrl("save_image", array('rid' => $rid))?>";
    var uploadImg="<?php  echo $this->createMobileUrl("uploadimg", array('rid' => $rid))?>";

    var go_UploadImage="<?php  echo $this->createMobileUrl('UploadImage',array('rid' => $rid));?>";
    var go_emptychat="<?php  echo $this->createMobileUrl('emptychat',array('rid' => $rid,'from_user'=>$fans['from_user']));?>";

</script>

<div id="main_body">
    <div class="talk_panel" style="">
    <!--<script>var uid = 345977;var maxid = 0;</script>-->
    <link href="../addons/hm_newdpm/imgs/css/talk.css" rel="stylesheet" type="text/css"/>
    <!--<script type="text/javascript" src="/app/resource/components/LocalResizeIMG/lrz.bundle.js"></script>-->
    <div class="talk_main">
        <div class="talker_info" style="background-image: url('<?php  if(empty($fashb['top_bg'])) { ?>../addons/hm_newdpm/imgs/top_bg.png<?php  } else { ?><?php  echo tomedia($fashb['top_bg'])?><?php  } ?>')">
            <div class="avatar" style="background-image: url('<?php  echo tomedia($for_fans['avatar'])?>')"></div>
            <div class="scoll_show">
                <div class="nickname"><?php  echo $for_fans['nickname'];?></div>
                <div class="talker_tags <?php  if($for_fans['sex']==1) { ?>man<?php  } else if($for_fans['sex']==2) { ?>woman<?php  } else { ?><?php  } ?>">
                    <span class="gender"><?php  if($for_fans['sex']==1) { ?>帅哥<?php  } else if($for_fans['sex']==2) { ?>美女<?php  } else { ?><?php  } ?></span>
                  </div>
            </div>

            <span class="close am-icon-times-circle"></span>
        </div>
        <div class="msg_list" style="height: 100vh;">
            <div class="msg_list_ctx">
                <?php  if($is_follow==0) { ?>
                <p class="user_unbind">对方未添加<?php  echo $_W['account']['name'];?>，可能收不到您的信息</p>
                <?php  } ?>
            </div>
        </div>
        <div class="msg_input">
            <span class="menu_btn am-icon-plus-circle"></span>
            <div class="input_line">
                <textarea class="msg_input_box"></textarea>
                <span class="am-icon-smile-o smile_btn" ></span>
                <span class="send_btn">发送</span>
            </div>
            <div class="msg_input_menu">
                <ul>
                    <li>
                        <span class="icon iconfont icon-zhaopian  photo photo_filea" ></span>
                        <p>相片</p>
                        <!--<input id="upload" class="file" accept="image/jpg, image/jpeg, image/png" type="file" onchange="imageUpLoad(this)">-->
                        <input id="upload" class="photo_file" type="file" name="upload" accept="image/*"  onchange="imageUpLoad(this)">
                    </li>
                    <li>
                        <span class="icon iconfont icon-chexiao clean_msg" ></span>
                        <p>清空记录</p>
                    </li><!-- accept="image/jpg, image/jpeg, image/png"-->
                    <!--<li><img src="/app/themes/flink/wall/img/icon/hb.png"/></li>
                    <li><img src="/app/themes/flink/wall/img/icon/mp.png"/></li>-->
                </ul>
            </div>
            <div class="msg_input_face">
            </div>
        </div>
    </div>
</div>


</div>
<script>
    $(function(){

        setInterval(function(){
            $.ajax({
                url:"<?php  echo $this->createMobileUrl('is_online', array('rid' => $rid,'from_user'=>$fans['from_user'],'to_from_user'=>$uid))?>",
                dataType:'json',
                success:function(data){

                }
            })
        },10000);

        $(".talk_panel").party_talk_panel('<?php  echo $uid;?>');
        $(".talk_panel .close").click(function(){
            location.href = "<?php  echo $this->createMobileUrl('messagesindex', array('id' => $rid))?>";
                    });
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
    var upload = {
        start:function(){
            $.loadingModal(!0, "上传中..");
       },
        done:function(src,bigSrc){
            $.getJSON(get_Sendmsg, {imgId: src}, function (i) {
                $.tip(i.data);
                $.loadingModal(!1)
                i.loadPrivMsg();
            })
                   },
        error:function(errorMsg){
            $.loadingModal(!1)
            showInfo(errorMsg||'上传失败!',false);
        }
    }
    var imageUpLoad = function(e){
        upload.start();
        selectFileImage(e,{
            width:200,height:200,
            error:function(errorMsg){upload.error(errorMsg||'请上传宽高大于200px的图片')},
            callback:function(base64,rotate){
                ajax_imageUpload(base64,rotate,function(src,bigSrc){
                    upload.done(src,bigSrc);
                },function(errorMsg){
                    upload.error();
                })
            }
        })
    }
    var ajax_imageUpload = function(base64,rotate,fn1,fn2){
        base64 = base64.split('base64,');
        if(base64.length<1)
            return fn2();
        base64 = base64[1];
        var resultMsg = null
        $.post(uploadImg,{strImg:base64,angel:rotate},function(result) {

            if(result.isResultTrue){
                fn1(result.resultMsg.sImgUrl,result.resultMsg.bImgUrl);
            }else{
                fn2(result.resultMsg);
            }
        });
    }
</script>

<script type="text/javascript">
    //单图上传
    $('.photo_filea').on('click', function () {

        wx.chooseImage({
            count:1,
            sizeType: ['', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
            sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
            success: function (res) {
                var localIds = res.localIds;//返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片

                syncUpload1(localIds);
            }
        });
    });


    var syncUpload1 = function(localIds){

        var localId = localIds.pop();

        wx.uploadImage({
            localId: localId,
            isShowProgressTips: 1,
            success: function (res) {

                var serverId = res.serverId; // 返回图片的服务器端ID

                $.post(save_Image,{mid:serverId},function(data){

                    $.getJSON(get_Sendmsg, {imgId: data.v}, function (i) {
                        $.tip(i.data);
                      i.loadPrivMsg();
                    })
                },'json');


            }

        });
    };


</script>


<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>
