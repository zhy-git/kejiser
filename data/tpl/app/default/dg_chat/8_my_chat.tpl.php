<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>我的主页</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="email=no">
<meta name="format-detection" content="address=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/zepto.min.js"></script>
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/wtCommon.css?v=<?php  echo time();?>">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/font/iconfont.css?v=<?php  echo time();?>">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/live.css?v=<?php  echo time();?>">
<script type="text/javascript">
$(function(){
	 $(".tab_myLiveRoomTab").click(function(){
		 $(this).addClass('on');
		 $(".myLiveRoomList ").addClass('on');
		 $(".tab_attendLiveRoom").removeClass('on');
		 $(".attendLiveRoomList").removeClass('on');
	 });
	 $(".tab_attendLiveRoom").click(function(){
		 $(this).addClass('on');
		 $(".attendLiveRoomList ").addClass('on');
		 $(".tab_myLiveRoomTab").removeClass('on');
		 $(".myLiveRoomList").removeClass('on');
	 });
});
function pcClick(){
    alert('请在手机端进行操作');
}
function LoginOut(){
    $.post(location.href,{'type':'login_out'},function(res){
        location.href="<?php  echo $this->createmobileurl('pc_login')?>";
    })
}
</script>
<style>
    .bind{height: 100vh;overflow: scroll;}
    :root{--mcolor:#16c3c5;--mcolor-active:#1AADAF;--mcolor-rgb:22,159,157;}
    .mcolor{color: #16c3c5;}
    .bgwhite{background: #fff;}
    .yellow{color: #ffb31a;}
    .blue{color: #788df7;}
    .red{color: #f77878;}
    .purple{color: #dab9ff;}


    .tc{text-align: center;}
    .flex,.flexC{display: flex;}
    .flexC{flex-direction: column;}
    .flex>.sub,.flexC>.sub{flex:1;}
    .mt5{margin-top: 5px;}
    .mt10{margin-top: 10px;}
    .mt20{margin-top: 20px;}
    .mr5{margin-right: 5px;}
    .mr10{margin-right: 10px;}
    .mb5{margin-bottom: 5px;}
    .mb10{margin-bottom: 10px;}
    .arrowR{ position: relative;}
    .arrowR::before{ content: ""; position:absolute; display: block; width: 7px; height: 7px; border:2px solid; border-color:#999 #999 transparent transparent; top: 50%; -webkit-transform:translateY(-50%) rotate(45deg);transform:translateY(-50%) rotate(45deg); -webkit-transition: all 0.3s ease; transition: all 0.3s ease; border-radius: 2px;right: 10px;}

    .popup{position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 99;}
    .popupbg{width: 100%;height: 100%;position: absolute;top: 0;left: 0;background: rgba(0, 0, 0, 0.5);}
    .popup_box{width: 80%;padding: 15px;background: #fff;font-size: 14px;}
    .mid{position: absolute;z-index: 1;border-radius: 6px;top: 50%;left: 50%;transform:translate(-50%,-50%);-webkit-transform:translate(-50%,-50%);}

    .popup_title{padding-bottom:10px;border-bottom: 1px solid #f8f8f8;}
    .popup_content{padding: 15px 0;}
    .popup_btn{line-height: 36px;}
    .popup_btn div{padding: 0 10px;background: var(--mcolor);color: #fff;border-radius: 6px; margin-top: 20px;}
    .popup_btn div:nth-child(2){border:1px solid  var(--mcolor);color: var(--mcolor);background: #fff;margin-left: 30px;}
    .popup_btn div:active{background: rgba(var(--mcolor-rgb), 0.8);}
    .popup_btn div:nth-child(2):active{background: rgba(var(--mcolor-rgb), 0.1);}
    .choose-month label{padding: 0 10px;}
    .choose-month input[type="radio"]{background: #eee;border:1px solid #ccc;width: 20px;height: 20px;border-radius: 50%;text-align: center;position: relative;vertical-align: middle;transform:scale(0.7);-webkit-transform:scale(0.7);margin: 0;}
    .choose-month input[type="radio"]:checked:before{content: '';width: 10px;height: 10px;background: var(--mcolor);position: absolute;top: 4px;left: 4px;border-radius: 50%;}
    .numbtn{border: 1px solid #eee;border-radius: 50%;display: inline-block;width: 24px;height: 24px;line-height: 20px;text-align: center;font-size: 18px;}
    .numbtn:active{background: rgba(0,0,0,0.05);}
    .pay-num{display: inline-block;width: 50px;}
    .popup_content input[type="text"]{border:1px solid #eee;width: 100%;height: 40px;padding: 0 10px;outline: none;}
    .popup .items{padding: 10px 15px;border-bottom: 1px solid #eee;}
    .popup .items:active{background:rgba(0,0,0,0.05);}
    .popup .items:last-child{border-bottom: none;}


    .iconfont{vertical-align: top;}
    body{background:#f8f8f8;overflow-y: inherit;}
    .top-msg{line-height: 40px;}
    .user-msg{padding: 20px 15px;border-bottom: 1px solid #f5f5f5;position:relative;}
	.user-msg:before{content:'';display:block;width:10px;height:10px;border:1px solid;border-color:#ccc #ccc transparent transparent;-webkit-transform:translateY(-50%) rotate(45deg);transform:translateY(-50%) rotate(45deg);position:absolute;top:50%;right:15px;}
    .user-img{width: 40px;height: 40px;display: inline-block;position: relative;}
    .user-img img{width: 100%;height: 100%;border-radius: 50%;}
    .user-img .icon-VIP{position: absolute;bottom: -40%;right: -0%;font-size: 18px;}
    .top-fenlei{border-bottom: 1px solid #f5f5f5;padding: 10px 0;line-height: 30px;}
    .top-fenlei>div{border-right: 1px solid #f5f5f5;}
    .top-fenlei>div:last-child{border-right:none;font-size:14px;}
    .top-fenlei .iconfont{color: var(--mcolor);vertical-align: -2px;font-size:18px;}
    .vip-msg{padding: 0 15px;}
    .add-vip{padding:0 10px;display: inline-block;height: 26px;line-height:26px;margin-top: 7px;background: var(--mcolor);border-radius: 3px;color: #fff;font-size: 12px;}
    .add-vip:active{background: var(--mcolor-active);}
    .item-title{padding:10px 15px;font-size: 14px;}
    .item-content{padding: 20px 0;}
    .item-content .iconfont{font-size: 36px;}
    .my-item-list{padding: 10px 15px;font-size: 14px;line-height: 30px;}
    .my-item-list .iconfont{font-size: 18px;}



    /*创建直播间弹出框*/
    .creat-title{line-height: 40px;border-bottom: 1px solid #f5f5f5;color: #808080;}
    .creat-title>div:active{background: #f8f8f8;}
    .creat-title .active{color: var(--mcolor);position: relative;}
    .creat-title .active:before{content: '';display: block;width: 30%;height: 3px;background: var(--mcolor);position: absolute;bottom: 0;left: 35%;}
    .write-msg{margin-bottom: 10px;border:1px solid #eee;width: 100%;height: 40px;padding: 0 10px;outline: none;}
    input.write-msg:focus{border:1px solid var(--mcolor);background: #f8f8f8;}
    .yanzheng-img{height: 40px;margin-left: 10px;}
    .tips{color: var(--mcolor);font-size: 12px;}
    .tips input[type='checkbox']{width: 16px;height: 16px;border-radius: 2px;background: #eee;border:1px solid #ddd;vertical-align: middle;}
    .tips input[type='checkbox']:checked{background: var(--mcolor);border-color: var(--mcolor);}
    .tips input[type='checkbox']:checked:before{content: '√';color: #fff;display: block;width: 100%;height: 100%;top: 0;left: 0;text-align: center;transform:scale(0.8);}
    .zhuce-btn{background: var(--mcolor);color: #fff;border:none;outline: none;padding: 8px 30px;border-radius: 3px;display: inline-block;margin-top: 20px;}
    .zhuce-btn:active{background: var(--mcolor-active);}
    </style>
</head>

<body class="bind">
<div class="top-msg bgwhite">
    <!-- 用户信息<?php  echo $this->createMobileUrl('my_chat',array('op'=>'other'))?> -->
	<?php  if($cfg['is_authentication'] == 2) { ?>
    <a href="<?php  echo $this->createmobileUrl('edit')?>">
        <?php  } else { ?>
        <a href="javascript:;">
        <?php  } ?>
		<div class="user-msg flex">
			<div class="user-img mr10"><img src="<?php  echo $head_imgurl;?>" alt="">
                <?php  if($is_vip) { ?>
			<span class="iconfont icon-vip" style="position: absolute; right: -3px;bottom: -12px;font-size: 14px;color: #f4ea2a;"></span>
            <?php  } ?>
			</div>
			<p><?php  echo $nickname;?><?php  echo $room_id;?></p>
		</div>
    </a>
	<div class="flex tc top-fenlei">
		<?php  if(!$is_creater) { ?>
			<div class="sub" id="create_room" <?php  if($is_pc==1) { ?> onclick="pcClick()" <?php  } ?>>
				<i class="iconfont icon-bofang-copy"></i>
				<a href="<?php  if($is_pc==1) { ?>javascript:;<?php  } else { ?><?php  echo $this->createMobileUrl('chat_create')?><?php  } ?>">创建房间	</a>
			</div>
             <div class="sub" id="create_room">
                <i class="mr5 iconfont icon-fabu" style="font-size: 14px;"></i>
                <!-- <a href="<?php  echo $this->createMobileUrl('series_create')?>" style="font-size: 12px;">上传我的作品 </a> -->
                <a href="<?php  echo $series_createurl;?>" style="font-size: 12px;">上传我的作品 </a>

            </div>
		<?php  } ?>
          
		<?php  if($is_manager || $is_creater) { ?>
			<div class="sub" id="create_room">
				<i class="mr5 iconfont icon-guanli"></i>
				<a href="<?php  echo $this->createMobileUrl('my_roomlist')?>">我管理的直播间 </a>
			</div>
            <div class="sub" id="create_room">
                <i class="mr5 iconfont icon-fabu" style="font-size: 14px;"></i>
                <!-- <a href="<?php  echo $this->createMobileUrl('series_create')?>" style="font-size: 12px;">上传我的作品 </a> -->
                <a href="<?php  echo $series_createurl;?>" style="font-size: 12px;">上传我的作品 </a>

            </div>
		<?php  } ?>
    </div>
    <?php  if($is_pc==1) { ?>
        <div class="flex tc top-fenlei">
            <div class="sub" <?php  if($is_pc==1) { ?> onclick="LoginOut()" <?php  } ?>>
                <a href="javascript:;">退出登录</a>
            </div>
        </div>
        <?php  } ?>
</div>
<div>
    <p class="item-title">直播服务</p>
    <div class="flexC tc bgwhite item-content">
        <div class="sub flex">
            <div class="sub"><a href="<?php  echo $this->createMobileUrl('my_subscribe')?>"><i class="red iconfont icon-likefill"></i><p class="mt5">我的关注</p></a></div>
            <div class="sub"><a href="<?php  echo $lastbrowse_url;?>"><i class="blue iconfont icon-wokanguoderen"></i><p class="mt5">我看过的</p></a></div>
            <div class="sub"><a href="<?php  echo $this->createMobileUrl('my_vip')?>"><i class="red iconfont  icon-vip"></i><p class="mt5">我的会员</p></div>
           <!--  <div class="sub"><a href="<?php  echo $this->createMobileUrl('my_coupon')?>"><i class="blue iconfont icon-youhuiquan"></i><p class="mt5">我的优惠劵</p></div> -->
        </div>
    </div>
</div>
<div>
    <p class="item-title">收益管理</p>
    <div class="flexC tc bgwhite item-content">
        <div class="sub flex mt20">

				<div class="sub"><a href="<?php  echo $my_subcom;?>" class="purse"><i class="blue iconfont icon-16"></i><p class="mt5">个人分佣收益</p></a></div>
				<?php  if($is_manager || $is_creater) { ?>
				<div class="sub"><a href="<?php  echo $my_room_cash;?>" class="purse"><i class="red iconfont icon-qianbao"></i><p class="mt5">我的直播间收益</p></a></div><?php  } ?>

				<div class="sub"><a href="<?php  echo $mycash_url;?>" class="purse"><i class="blue iconfont icon-chongzhi"></i><p class="mt5">个人打赏收益</p></a></div>

                <div class="sub"><a href="<?php  echo $my_commission;?>" class="purse"><i class="blue iconfont icon-chongzhi"></i><p class="mt5">推广佣金</p></a></div>
        </div>
   </div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template(footer, TEMPLATE_INCLUDEPATH)) : (include template(footer, TEMPLATE_INCLUDEPATH));?>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=8&c=utility&a=visit&do=showjs&m=dg_chat"></script></body>
</html>