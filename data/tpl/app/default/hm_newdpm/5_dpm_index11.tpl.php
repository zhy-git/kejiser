<?php defined('IN_IA') or exit('Access Denied');?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php  echo $reply['title'];?></title>
    <!-- <script src="../addons/hm_newdpm/img11/jquery-2.0.3.min.js" type="text/javascript" charset="utf-8"></script> -->
    <script src="../addons/haoman_base/base/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- <script type="text/javascript" src="../addons/hm_newdpm/img/jquery.cookie.js"></script> -->
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.cookie.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/new_messages/emojione.js"></script>

    <style>
    html,body { width: 100%; height: 100%;margin:0; }
    body{
    <?php  if($reply['is_transparent']!=1) { ?>
        background: url(<?php  echo $bg;?>) center center;
    <?php  } ?>
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
    }
    .boxDom {
        position: absolute;
        top: 35px;
        bottom: 100px;
        left: 0;
        right: 0;
        z-index: 8;
    }

    .string {
        width: 800px;
        height: 60px;
        position: absolute;
        color: #000;
        cursor: pointer;
        white-space: nowrap;
    }

    .d_show,
    .d_show li {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .d_show li {
        font-size: 30px;
        font-weight: 500;
        color: #fff;
        position: absolute;
        left: 0;
        top: 0;
    }

    .tmtx {
        width: 55px;
        height: 55px;
        background-color: #FFF;
        border-radius: 100%;
        overflow: hidden;
        border: 3px solid #fff;
        box-shadow: 0 0 0px 3px rgba(0, 0, 0, 0.15);
        float: left;
        margin-right: 10px;
    }

    .tmtx img {
        width: 100%;
        height: 100%;
    }

    .tmwz {
        overflow: hidden;
    }

    .tmwz p {
        margin: 0;
        padding: 0;
    }

    .tmnc {
        font-size: 18px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        color: #FFF
    }

    .tmnr {
        margin: 0;
        padding: 0;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        color: #FFF
    }
    .container1 .top .center span.title{
    color: <?php  if(empty($xysreply['xys_backcolor'])) { ?>#fff604;<?php  } else { ?><?php  echo $xysreply['xys_backcolor'];?>;<?php  } ?>;
    }
    </style>
    
    <link rel="stylesheet" href="../addons/hm_newdpm/static/img11/style.css?v=24323233" type="text/css">
</head>
<body <?php  if(!empty($video['vodio_bg3'])&&$reply['is_transparent']!=1) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg3'])?>"<?php  } ?>>
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
    <div class="container demo-2">
        <div class="content">
            <div id="large-header" class="large-header" style="height: 732px;">
                <canvas id="demo-canvas" width="1440" height="732"></canvas>
            </div>
        </div>
    </div>
    <script src="../addons/hm_newdpm/img6/demo-2.js"></script>
    <div class="main">
	<div class="container1" style="padding-top: 15px;">
		<div class="top">

			<div class="center">
				<span class="title" style="font-size: 32px;"><?php  echo $reply['title'];?></span>
			</div>
			<div class="right">
				<span class="tipword messageword " style="margin-top: 20px;">
					<span id="messageNum" class="num"><?php  echo $totaldata;?></span><br>
					<span class="plus">条消息</span>
				</span>
                   <?php  if($reply['up_qrcode']) { ?>
				<img class="qrcode qrcodeAll" src="<?php  echo tomedia($reply['up_qrcode'])?>">
                <?php  } ?>
			</div>
		</div>
	</div>

    </div>
    <div class="Panel MsgList" style="display: none;">
        <div class="boxDom" id="boxDom">
        </div>
    </div>

    <input type="hidden" id="panel_status" value="1">




    <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>
    <script >
    $(document).ready(function() {
        if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
            document.getElementById('media').pause();
        }
    });
        var dpm_dm_getmessages="<?php  echo $this->createMobileUrl('dpm_dm_getmessages',array('rid'=>$rid))?>";
        (function(a, b) {
            a.WBActivity = {
                showLoading: function() { b(".loader").fadeIn() },
                hideLoading: function() { b(".loader").fadeOut() }
            };
            b(function() {
               a.WBActivity.start();
            });
            b(a).on("resize", function() {
                a.WBActivity.resize()
            })
        })(window, jQuery);

    </script>
    <script src="../addons/hm_newdpm/static/img11/dm.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript">
    setInterval(function(){
        $.ajax({
            url:"<?php  echo $this->createMobileUrl('haishen', array('rid' => $rid,'gets'=>'message','isckmessage'=>$isckmessage))?>",
            dataType:'json',
            success:function(data){

                var code = data['code'];
                var shenyu = data['shenyu'];
                $('#messageNum').html(shenyu);
                // console.log(shenyu);
            }
        })
    },4000);

    function spaceStart(){
    //预留空格开始的方法，不要删除
    }

    </script>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
