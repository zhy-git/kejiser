<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>物品寄存</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="../addons/haoman_base/base/sm.min.css">




<script>
    var uploadImg="<?php  echo $this->createMobileUrl("uploadimg", array('rid' => $rid))?>";

</script>
    <style type="text/css">

        textarea  {

            　　box-shadow:0px 0px 0px rgba(0,0,0,0);

            -webkit-appearance:none;

        }
        input{
            -webkit-appearance: none;
        }
      .photo_file  { width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute;
            opacity: 0;}
    </style>
</head>
<body>
<div class="page" style="display: block">
    <header class="bar bar-nav" style="background: #fff;border-bottom: 1px #eee solid;">
        <a class="button button-link button-nav pull-left back" href="<?php  echo $this->createMobileUrl('deposit', array('rid' => $rid,id=>$fans['id']))?>">
            <span class="icon icon-left"></span>
        </a>
        <h1 class='title' style="font-weight: bold;font-size: 20px;">物品寄存</h1>
    </header>


            <!--人员管理-->

            <div class="content" style="margin-bottom: 45px;">

                <div class="card demo-card-header-pic">
                    <div valign="bottom" class="card-header color-white no-border no-padding" style="max-height: 220px;">
                        <img class='card-cover deposit_img' src="../addons/hm_newdpm/images/up_deposit.png" alt="" style="max-height: 220px;width: 100%;border: 1px solid #fff">
                        <input id="upload" class="photo_file" type="file" name="upload" accept="image/*" onchange="imageUpLoad(this)" >
                        <input type="hidden" name="imgSrc" value="">
                    </div>
                    <div class="card-content">
                        <div class="card-content-inner">
                            <textarea class=""  style="outline: none;border: 1px solid #e9e9e9;border-radius: 8px;background-color:#fff;color: #333;height: 100%;padding-left: 3%;padding-top:10px;font-size: 15px;resize: none;width: 100%" placeholder="请输入寄存物品名称和数量"></textarea>

                             <input class="identification" type="text" disabled style="outline: none;border: 1px solid #e9e9e9;border-radius: 8px;background-color:#fff;color: #333;height: 45px;padding-left: 3%;font-size: 15px;width: 100%;line-height: 45px;" placeholder="识别码(可不输入)" value="<?php  echo $identification;?>">

                        </div>
                    </div>



                    <div class="card-footer">
                        <a href="#" class="button button-big button-fill button-danger is_no" style="padding: 0 20px;">取消</a>
                        <a href="#" class="button button-big button-fill button-success is_ok" style="padding: 0 20px;">确认</a>
                    </div>
                </div>

            </div>

</div>
<script type="text/javascript" src="../addons/hm_newdpm/mobimg/lrz.mobile.min.js"></script>


<script type='text/javascript' src='../addons/haoman_base/base/zepto.min.js' charset='utf-8'></script>

<script type='text/javascript' src='../addons/haoman_base/base/sm.min.js' charset='utf-8'></script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<script type="text/javascript">

    var  click=false;
    $(".is_ok").click(function(){
           if(click){
               $.alert('请不要重复提交');
               return;
           }
           click=true;
        var e = $.trim($("textarea").val()), a = $("input[name=imgSrc]").val();
        if("" == e&& "" == a){
            click=false;
            $.alert('请填写寄存物品或上传图片');
            return;
        }
        var o= $(".identification").val();

        $.showIndicator();
        var submitData = {
            "message": e,
            "pic": a,
            "identification": o,
        };

        $.post("<?php  echo $this->createMobileUrl('save_deposit',array('rid'=>$rid,'from_user'=>$page_from_user))?>", submitData,function(data){
            $.hideIndicator();
            if(data.success == 1){
                alert(data.msg);
                $("input[name=imgSrc]").val("");
                $("textarea").val("");
                $(".deposit_img").attr("src", "../addons/hm_newdpm/images/up_deposit.png");
                 location.href="<?php  echo $this->createMobileUrl('deposit', array('rid' => $rid,id=>$fans['id']))?>";
            } else {
                click=false;
                alert(data.msg)
            }
        },'json');
    })

    $(".is_no").click(function () {
        $("input[name=imgSrc]").val("");
        $("textarea").val("");
        $(".deposit_img").attr("src", "../addons/hm_newdpm/images/up_deposit.png");
    })
</script>
<script src="../addons/hm_newdpm/imgs/js/exif.js"></script>
<script src="../addons/hm_newdpm/imgs/js/uploadImage.js"></script>

<script type="text/javascript">

    var upload = {
        start:function(){
            $.showPreloader('上传中...')
        },
        done:function(src,bigSrc){

          $(".deposit_img").attr("src", src)
            $("input[name=imgSrc]").val(src);
           $.hidePreloader();
        },
        error:function(errorMsg){
            $.hidePreloader();
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

        if(base64.length<1){

            return fn2();
        }

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
<!--<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/mui.min.js"></script>-->
<!--<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/jquery-1.11.1.min.js"></script>-->

<!-- 微信分享设置 -->
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript">
    // JS分享借用权限开始

    // JS分享借用权限结束

    wx.config({
        debug:false,
        appId: '<?php  echo $package["appId"];?>',
        timestamp: '<?php  echo $package["timestamp"];?>',
        nonceStr: '<?php  echo $package["nonceStr"];?>',
        signature: '<?php  echo $package["signature"];?>',
        jsApiList: [
            'getLocation', <?php  if($reply['share_type'] != 2) { ?>'onMenuShareTimeline','onMenuShareQQ','onMenuShareQZone','onMenuShareAppMessage','onMenuShareWeibo'<?php  } ?>
    ]
    });
    var sharedata = {
        "imgUrl" : "<?php  echo $shareimg;?>",
        "link" : "<?php  echo $sharelink;?>",
        "desc" : "<?php  echo $sharedesc;?>",
        "title" : "<?php  echo $sharetitle;?>"
    };

    wx.ready(function () {
        <?php  if($reply['isallowip']==1) { ?>
        wx.getLocation({
            type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
            success: function (res) {

                var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
                var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
                var speed = res.speed; // 速度，以米/每秒计
                var accuracy = res.accuracy; // 位置精度



                var submitData = {
                    lat: latitude,
                    lon: longitude,
                    lbsip: "<?php  echo $reply['allowip'];?>"
                };


                $.post('<?php  echo $this->createMobileUrl('getlbs',array('id' => $rid))?>', submitData, function(idata) {

                    if (idata.success == 1) {

                    } else {
                        alert(idata.msg);
                        location.href = "<?php  echo $this->createMobileUrl('other', array('id' => $rid,'type'=>2))?>";

                    }
                },"json");

            },
            fail: function () {
                alert("获取位置失败,请打开GPS功能！");
                location.href = "<?php  echo $this->createMobileUrl('index', array('id' => $rid))?>";

            }
        });
        <?php  } ?>

        wx.hideOptionMenu();
    });

</script>
    </html>