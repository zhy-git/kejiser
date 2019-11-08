<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <!--<link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/images/main.css?v=222">-->
    <!--<link rel="stylesheet" href="../addons/hm_newdpm/mobimg/dropload.min.css?v=20161124170424" />-->
    <link rel="stylesheet"  type="text/css" href="//cdn.bootcss.com/weui/0.4.2/style/weui.min.css">
    <title><?php  if($personal['mobtitle']) { ?><?php  echo $personal['mobtitle'];?><?php  } else { ?>个人中心<?php  } ?></title>
    <style type="text/css" id="_zoom"></style>
    <style type="text/css">
    html,body{}
     select{
        border: 1px #eee solid;
        height: 40px;
        background-color: rgb(248, 248, 248);
        border-radius: 5px;
        text-rendering: auto;
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: start;
        margin: 0em 0em 0em 0em;
        font: 11px system-ui;
        -webkit-appearance: menulist;
        box-sizing: border-box;
        align-items: center;
        white-space: pre;
        -webkit-rtl-ordering: logical;
        color: #8b8b8b;
    }
    .power-by{ font-size:0.8rem; text-align:center; line-height:20px; color:#EAB387;}
    .pui_clear{border-radius: 50%;width: 20%;max-width: 80px;max-height: 80px;}
    .ranking_table {width: 100%;margin:0;border: none;padding: 0;}
    .ranking_table tbody tr {border-bottom: 1px dashed #2b9443;width: 100%;padding: 0;margin: 0;color: #fede2d;}
    .ranking_table tr td {display: inline-block;text-align: center;width: 25%;font-size: 1.0em;padding: 0.6em 0;overflow: hidden;white-space: nowrap;margin: 0;text-overflow: ellipsis;}
    /*body{background-image: url(<?php  echo $bg;?>);background-repeat: no-repeat;background-size: 100% auto;background-attachment:fixed;background-color: #c40001;}*/
   a {  color: #333;
       text-decoration: none
           }
    input{
        -webkit-appearance: none;
    }
    </style>
    <!--<link rel="stylesheet" href="../../mobimg/dropload.min.css">-->

</head>

<body style="background-color: #fff;">
    <div class="page_lz" style="background-image:url('<?php  if($personal['my_bg']) { ?><?php  echo tomedia($personal['my_bg'])?><?php  } else { ?>../addons/hm_newdpm/images/my.jpg<?php  } ?>');background-repeat: no-repeat;background-size: 100% auto; ">
       <input type="hidden" value="<?php  echo $fans['id'];?>" id="fansid" >
        <div class="pui_user userinfo" style="">
            <div class="pui_user_top" style="padding: 15px 0;">
                <div class="pui_clear" style="margin-left: 3%;float: left">
                    <img src="<?php  if(empty($fans['avatar'])) { ?>../addons/hm_newdpm/images/item8.jpg<?php  } else { ?><?php  echo $fans['avatar'];?><?php  } ?>" class="pui_circle" style="border-radius: 50%;width:70px;height: 70px;"/>
                    <?php  if($personal['show_sex']!=1) { ?>
                    <?php  if($fans['sex']==1) { ?>
                    <img src="../addons/hm_newdpm/img12/man.png" class="man seximg" style="width: 20px;height:20px;position: relative;top:-25px;left: 50px;z-index: 9999;">
                    <?php  } else if($fans['sex']==2) { ?>
                    <img src="../addons/hm_newdpm/img12/woman.png" class="man seximg" style="width: 20px;height:20px;position: relative;top:-25px;left: 50px;z-index: 9999;">
                    <?php  } else if($fans['sex']==3) { ?>
                    <img src="../addons/hm_newdpm/img12/baomi.png" class="man seximg" style="width: 20px;height:20px;position: relative;top:-25px;left: 50px;z-index: 9999;">
                    <?php  } else { ?>
                    <div class="man seximg" style="width: 20px;height:25px;position: relative;top:-20px;left: 50px;z-index: 9999;"></div>
                    <?php  } ?>
                      <?php  } ?>
                    <?php  if($personal['show_qd']!=1) { ?>
                    <div style="height: 20px;width:90px;position: relative;top:-30px;background-color: rgba(0,0,0,0.5);left: 50%;margin-left: -45px;border-radius: 3px;text-align: center;color: #fff;font-size: 12px;line-height: 20px;">第<?php  echo $fans['awardingid'];?>个签到</div>
                     <?php  } ?>
                </div>
                <div class="name" style="color: #fff;float: left;margin-left: 3%;margin-top: 10px;margin-right: 3%;width: 70%;text-overflow : ellipsis "><?php  echo $fans['nickname'];?></div>
                <div class="setting" style="width: 35px;height: 35px;position: absolute;;color: #fff;right: 3%;top: 15px"><img src="../addons/hm_newdpm/images/qr_icon.png" style="width: 100%"></div>

                <?php  if($personal['is_changge']!=1) { ?>
                <div class="setting" style="font-size: 12px;background-color: rgba(0,0,0,0.5);width: 50px;height: 25px;border-radius: 15px;position: absolute;text-align: center;color: #fff;line-height: 25px;right: 3%;top: 85px">设置</div>
                <?php  } ?>
            <div style="clear: both"></div>
            </div>
            <div style="color: #333;width: 100%;height: 40px;line-height: 40px;" id="mymoney">
                <a href="<?php  echo $this->createMobileUrl('balance', array('rid' => $rid,id=>$fans['id']))?>" style=" color: #333;">
                <div style="width: 50%;float: left;text-align: center;height: 40px;" class="balance">
                     <span>余额：</span>
                     <span><?php  if($num) { ?><?php  echo $nums/100?><b style="font-size: 8px;color: #fff;">(点击提现)</b><?php  } else { ?>0<?php  } ?></span>
                </div>
                </a>
                <div style="width: 1px;background-color: rgba(255,255,255,0.5);float: left;height: 20px;margin-top: 10px;"></div>
                <a href="javascript:void(0)" style=" color: #333;">
                <div style="width: 49%;float: right;text-align: center" class="integral">
                    <span>积分：</span>
                    <span>0</span>
                </div>
                </a>
                <div style="clear: both;"></div>

            </div>
        </div>

      
    </div>

    <div class="weui_cells weui_cells_access" style="padding-top: 0px;margin-top: 0px;">

        <a class="weui_cell" href="<?php  echo $this->createMobileUrl('my_order', array('rid' => $rid,id=>$fans['id']))?>">

            <div class="weui_cell_bd weui_cell_primary">
                <p>我的订单</p>
            </div>
            <div class="weui_cell_ft">
            </div>
        </a>
        <a class="weui_cell" href="<?php  echo $this->createMobileUrl('my_prizes', array('rid' => $rid,id=>$fans['id']))?>">

            <div class="weui_cell_bd weui_cell_primary">
                <p>我的奖品</p>
            </div>
            <div class="weui_cell_ft">
            </div>
        </a>
        <a class="weui_cell" href="<?php  echo $this->createMobileUrl('my_talk', array('rid' => $rid,'from_user'=>$fans['from_user']))?>">
        <!--<a class="weui_cell" href="#">-->

            <div class="weui_cell_bd weui_cell_primary">
                <p>聊友</p>
            </div>
            <div class="weui_cell_ft">
            </div>
        </a>
        <a class="weui_cell" href="<?php  echo $this->createMobileUrl('my_bpds', array('rid' => $rid,id=>$fans['id']))?>">

            <div class="weui_cell_bd weui_cell_primary">
                <p>霸屏/打赏</p>
            </div>
            <div class="weui_cell_ft">
            </div>
        </a>
        <a class="weui_cell" href="<?php  echo $this->createMobileUrl('deposit', array('rid' => $rid,id=>$fans['id']))?>">

            <div class="weui_cell_bd weui_cell_primary">
                <p>物品寄存</p>
            </div>
            <div class="weui_cell_ft">
            </div>
        </a>
    </div>

    <div class="invoice" style="display: none;z-index:9999999999;width: 100%;height: 100%;background-color: rgba(0,0,0,0.45);position: fixed;top: 0px;left: 0px;bottom: 0px;right: 0px;">

        <div style="width: 70%;height: auto;background-color: #fff;border-radius: 8px;margin-left: 10%;margin-top: 30%;padding: 5% 5%;min-height: 120px;">
            <span>请核对您的信息</span>
            <div class="" style="width: 100%;height: 30px;margin-bottom: 15px;margin-top: 10px;border-radius: 12px;">
                <input class="" style="width:98%;height: 100%;border: 1px solid #eee;border-radius: 4px;padding-left: 2%;" type="text" id="name" name="username" required="required" placeholder="请输入姓名" value="<?php  echo $fans['realname'];?>">
            </div>
            <div class="" style="width: 100%;height: 30px;margin-bottom: 15px;margin-top: 10px;border-radius: 12px;">
                <input class="" style="width:98%;height: 100%;border: 1px solid #eee;border-radius: 4px;padding-left: 2%;" type="text" id="tel" name="mobile" required="required" placeholder="请输入电话" value="<?php  echo $fans['mobile'];?>">
            </div>
            <div class="" style="width: 100%;height: 30px;margin-bottom: 15px;margin-top: 10px;border-radius: 12px;">
                <input class="" style="width:98%;height: 100%;border: 1px solid #eee;border-radius: 4px;padding-left: 2%;" type="text" id="address" name="address" required="required" placeholder="请输入地址" value="<?php  echo $fans['address'];?>">
            </div>
            <div class="" style="width: 100%;height: 30px;margin-bottom:25px;margin-top: 10px;border-radius: 12px;">
                <select id="store" name="store" style="width: 100%;padding-left: 5%;">
                    <?php  if($fans['sex']==0) { ?> <option value="0" style="color: #999" >未填写</option><?php  } ?>
                    <option value="1" style="color: #999" <?php  if($fans['sex']==1) { ?>selected<?php  } ?>>男</option>
                    <option value="2" style="color: #999" <?php  if($fans['sex']==2) { ?>selected<?php  } ?>>女</option>
                    <option value="3" style="color: #999" <?php  if($fans['sex']==3) { ?>selected<?php  } ?>>保密</option>
                </select>
            </div>
            <a href="javascript:;" class="weui_btn weui_btn_primary is_ok" style="background: #5faa32;margin-top: 10px;" >确定</a>
            <a href="javascript:;" class="weui_btn weui_btn_default is_no" >取消</a>

        </div>

    </div>

    <script type="text/javascript" src="../addons/haoman_base/base/jquery-2.1.4.min.js?v=2016071822351"></script>

    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
  <script>
      $(".setting").click(function () {
          $(".invoice").show();
      })
      $(".is_no").click(function () {
          $(".invoice").hide();
      })
      $(".is_ok").click(function () {

          var mobile = $('input[name="mobile"]').val();
          var username = $('input[name="username"]').val();
          var address = $('input[name="address"]').val();
          var fapiao = $('select[name="store"]').val();
          var fansid = $('#fansid').val();
          if(fansid==''||fansid==0){
              alert('参数错误，请重新加载页面');
              location.href = "<?php  echo $this->createMobileUrl('mybobing', array('id' => $rid))?>";
          }
          var bValidate = RegExp(/^(0|86|17951)?(13[0-9]|15[012356789]|18[0-9]|17[0-9]|14[57])[0-9]{8}$/);
          if (mobile == '' || !bValidate.test(mobile)) {
              alert("手机号码不能为空或是格式错误！");
              return;
          }

          var submitData = {
              "mobile": mobile,
              "realname": username,
              "address": address,
              "sex": fapiao,
              "fansid": fansid,
          };
          $.post("<?php  echo $this->createMobileUrl('setting_fans',array('rid'=>$rid))?>", submitData,function(data){

              if(data.success == 1){
                  alert("修改成功！")
                  location.href = "<?php  echo $this->createMobileUrl('mybobing', array('id' => $rid))?>";
              } else {
                  alert(data.msg)
              }
          },'json');

      })
  </script>
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

</html>
