<?php defined('IN_IA') or exit('Access Denied');?><!--默认js-->	

	<script type="text/javascript">
		require(['bootstrap']);
		$('.js-clip').each(function(){
			util.clip(this, $(this).attr('data-url'));
		});
	</script>

<!--默认js-->
	
</div>	
<!--尾部--> 
<style>
	#footer{
		height:60px;
		width:100%;
		text-align: center;
		/*background-color: #f3f3f4;*/
		line-height:60px;
	}
	#footer .copy_right{
		color: #000;
		margin:0;

	}	
	
*{ margin:0; padding:0; list-style:none;}
img{ border:0;}
.main-im{position:fixed;right:13px;top:200px;z-index:999;}
.main-im .qq-a{display:block;width:106px;height:116px;font-size:14px;color:#0484cd;text-align:center;position:relative;}
.main-im .qq-a span{bottom:5px;position:absolute;width:90px;left:10px;}
.main-im .qq-hover-c{width:70px;height:70px;border-radius:35px;position:absolute;left:18px;top:10px;overflow:hidden;z-index:9;}
.main-im .qq-container{z-index:99;position:absolute;width:109px;height:118px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom:1px solid #dddddd;background:url(<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/resource/images/qq-icon-bg.png) no-repeat center 8px;}
.main-im .img-qq{max-width:60px;display:block;position:absolute;left:6px;top:3px;-moz-transition:all 0.5s;-webkit-transition:all 0.5s;-o-transition:all 0.5s;transition:all 0.5s;}
.main-im .im-qq:hover .img-qq{max-width:70px;left:1px;top:8px;position:absolute;}
.main-im .im_main{background:#F9FAFB;border:1px solid #dddddd;border-radius:10px;background:#F9FAFB;display:none;}
.main-im .im_main .im-tel{color:#000000;text-align:center;width:109px;height:60px;border-bottom:1px solid #dddddd;}
.main-im .im_main .im-tel div{font-weight:bold;font-size:12px;margin-top:6px;}
.main-im .im_main .im-tel .tel-num{font-family:Arial;font-weight:bold;color:#e66d15;}
.main-im .im_main .im-tel:hover{background:#fafafa;}
.main-im .im_main .weixing-container{width:55px;height:47px;border-right:1px solid #dddddd;background:#f5f5f5;border-bottom-left-radius:10px;background:url(<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/resource/images/weixing-icon.png) no-repeat center center;float:left;}
.main-im .im_main .weixing-show{width:112px;background:#ffffff;border-radius:10px;border:1px solid #dddddd;position:absolute;left:-125px;top:-126px;display:flex;justify-content:center;align-items:Center;flex-direction:column;z-index:1000}
.main-im .im_main .weixing-show .weixing-sanjiao{width:0;height:0;border-style:solid;border-color:transparent transparent transparent #ffffff;border-width:6px;left:112px;top:134px;position:absolute;z-index:2;}
.main-im .im_main .weixing-show .weixing-sanjiao-big{width:0;height:0;border-style:solid;border-color:transparent transparent transparent #dddddd;border-width:8px;left:112px;top:132px;position:absolute;}
.main-im .im_main .weixing-show .weixing-ma{width:104px;padding:5px;height:auto;}
.main-im .im_main .weixing-show .weixing-txt{display:flex;justify-content:center;align-items:Center;text-align:center}
.main-im .im_main .go-top{width:50px;height:47px;background:#f5f5f5;border-bottom-right-radius:10px;background:url(<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/resource/images/totop-icon.png) no-repeat center center;float:right;}
.main-im .im_main .go-top a{display:block;width:52px;height:47px;}
.main-im .close-im{position:absolute;right:10px;top:-12px;z-index:100;width:24px;height:24px;}
.main-im .close-im a{display:block;width:24px;height:24px;background:url(<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/resource/images/close_im.png) no-repeat left top;}
.main-im .close-im a:hover{text-decoration:none;}
.main-im .open-im{cursor:pointer;width:40px;height:133px;background:url(<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/resource/images/open_im.png) no-repeat left top;}
	#goto-top {
        display:none;
        position:fixed;
        width:20px;
        height:30px;
        background-image:url(<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/resource/images/totop-icon.png);
		background-repeat:no-repeat;
        bottom:30px;
        right:20px;
        -webkit-transition:all 0.2s;
        -moz-transition:all 0.2s;
        -o-transition:all 0.2s;
        transition:all 0.2s;
        z-index:9999;
    }
	#goto-top:hover {
        background-image:url(<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/resource/images/totop-icon-ing.png);
    }
    #goto-top:hover {
        cursor:point
    }
</style>
<div class="main-im" <?php  if($sys_config['sys_kf_on']!=1) { ?>style="display:none"<?php  } ?>>
	<div id="open_im" class="open-im">&nbsp;</div>  
	<div class="im_main" id="im_main">
		<div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
		<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php  echo $sys_config['sys_qq'];?>&amp;site=qq&amp;menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
			<div class="qq-container"></div>
			<div class="qq-hover-c"><img class="img-qq" src="<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/resource/images/qq.png"></div>
			<span> QQ在线咨询</span>
		</a>
		<div class="im-tel">
			<div>售前咨询热线</div>
			<div class="tel-num"><?php  echo $sys_config['sys_tel'];?></div>
		</div>
		<div class="im-footer" style="position:relative">
			<div class="weixing-container">
				<div class="weixing-show">
					
					<img class="weixing-ma" src="<?php  echo tomedia($sys_config['sys_qr'])?>">
					<div class="weixing-txt"><?php  echo html_entity_decode($sys_config['sys_qr_word']);?></div>
					<div class="weixing-sanjiao"></div>
					<div class="weixing-sanjiao-big"></div>
				</div>
			</div>
			<div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>
<script>
	$(function(){
	 //置顶按钮显示/隐藏实现
        $(window).scroll(function(){
            var w_height = $(window).height();//浏览器高度
            var scroll_top = $(document).scrollTop();//滚动条到顶部的垂直高度
            if(scroll_top >w_height){
                    $("#goto-top").fadeIn(500);
                }else{
                    $("#goto-top").fadeOut(500);
            }
        });
		 $("#goto-top").click(function(e){
            e.preventDefault();
            $(document.documentElement).animate({
                scrollTop: 0
                },500);
            //支持chrome
            $(document.body).animate({
                scrollTop: 0
                },500);
        });
   
	$('#close_im').bind('click',function(){
		$('#main-im').css("height","0");
		$('#im_main').hide();
		$('#open_im').show();
	});
	$('#open_im').bind('click',function(e){
		$('#main-im').css("height","272");
		$('#im_main').show();
		$(this).hide();
	});
	$('.go-top').bind('click',function(){
		$(window).scrollTop(0);
	});
	$(".weixing-container").bind('mouseenter',function(){
		$('.weixing-show').css({"display":"flex"});
	})
	$(".weixing-container").bind('mouseleave',function(){        
		$('.weixing-show').hide();
	});
});

</script>
<a href="#" title="返回顶部" id="goto-top"></a>
<style>
.footer{
 background-color:#fff
}
.footer a{
	color:gray
}
.copyright{
	color:gray
}
</style>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>