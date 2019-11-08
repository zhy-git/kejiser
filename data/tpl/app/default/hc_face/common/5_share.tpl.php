<?php defined('IN_IA') or exit('Access Denied');?><script type="text/javascript" src="../addons/hc_face/template/mobile/js/jweixin-1.4.0.js"></script>
<script type="text/javascript">
	wx.config({
        debug: false,
        appId: '<?php  echo $_W['account']['jssdkconfig']['appId'];?>', 
        timestamp: '<?php  echo $_W['account']['jssdkconfig']['timestamp'];?>', 
        nonceStr: '<?php  echo $_W['account']['jssdkconfig']['nonceStr'];?>', 
        signature: '<?php  echo $_W['account']['jssdkconfig']['signature'];?>',
        jsApiList: ['onMenuShareAppMessage','onMenuShareTimeline','openAddress','chooseWXPay','chooseImage','uploadImage'] 
	});
	var a=1;
	 wx.ready(function () {
	    wx.onMenuShareAppMessage({ 
	        title: '<?php  echo $forward['title'];?>',
			desc: '<?php  echo $forward['ctitle'];?>',
			link: '<?php  echo $forward['link'];?>',
			imgUrl: '<?php  echo $forward['img'];?>'
		});

		wx.onMenuShareTimeline({ 
	        title: '<?php  echo $forward['title'];?>',
			link: '<?php  echo $forward['link'];?>',
			imgUrl: '<?php  echo $forward['img'];?>'
		});
	 })
</script>