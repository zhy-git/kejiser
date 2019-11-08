<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab">通用设置</a></li>	
</ul>
<div class="main">
<form action="" method="post" class="form-horizontal form" id="setting-form">
  <div class="tab-content">
  	<div role="tabpanel" class="tab-pane active" id="setting">    	
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站名称</label>
			<div class="col-sm-8">
				<input type="text" name="data[title]" class="form-control" value="<?php  echo $settings['title'];?>" />
			</div>
		</div>		
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站关键词</label>
			<div class="col-sm-8">
				<input type="text" name="data[keyword]" class="form-control" value="<?php  echo $settings['keyword'];?>" />
			</div>
		</div>	
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站描述</label>
			<div class="col-sm-8">
				<input type="text" name="data[desc]" class="form-control" value="<?php  echo $settings['desc'];?>" />
			</div>
		</div>	
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">移动端跳转链接</label>
			<div class="col-sm-8">
				<input type="text" name="data[phone_url]" class="form-control" value="<?php  echo $settings['phone_url'];?>" />
				<div class="help-block">这里的链接请手动获取你微信端的电影模块首页链接，PC域名在移动端打开会跳转到这个链接</div>
			</div>
		</div>	
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">网站logo</label>
			<div class="col-sm-8">
				<?php  echo tpl_form_field_image('data[logo]', $settings['logo']);?>	
				<div class="help-block">170px*61px</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">关注二维码</label>
			<div class="col-sm-8">
				<?php  echo tpl_form_field_image('data[ewm]', $settings['ewm']);?>	
			</div>
		</div>		
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">自定义视频解析接口</label>
			<div class="col-sm-8">
				<input type="text" name="data[api]" class="form-control" value="<?php  echo $settings['api'];?>" />
			<span class="help-block">模块默认接口做为福利发放，可以满足大部分使用，有时会出现解析异常，如果想使用更优质和更专业的视频解析接口</span> 					
			<span class="help-block">什么是视频解析接口？<br>
			大致意思就是，通过对视频网站算法，把视频网站里的mp4或者m3u8真实地址（备注：腾讯视频和爱奇艺视频，解析开发人员需要购买大量VIP账号利用COOKIE解析，所以成本非常高），提取出来，也可以理解为破解，就可以实现去除广告和播放VIP视频的目的
			世面上有很多解析接口 <br>
			有免费的 大部分有广告，也就是做接口的人自己加上去的<br>
			收费的一般没有广告： 一个月50-500不等
			</span> 
			</div>
		</div>		
		<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">免费看视频次数</label>
			<div class="col-sm-8">
				<input type="text" name="data[free_num]" class="form-control" value="<?php  echo $settings['free_num'];?>" />
			</div>
		</div>	
		<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">到期提醒文字</label>
			<div class="col-sm-8">
				<input type="text" name="data[warn_font]" class="form-control" value="<?php  echo $settings['warn_font'];?>" />
			</div>
		</div>	
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">百度云解析接口</label>
			<div class="col-sm-8">
				<input type="text" name="data[baidu_api]" class="form-control" value="<?php  echo $settings['baidu_api'];?>" />					
			<span class="help-block">需要自行购买，如果使用请联系</span>
			</div>
		</div> 		
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">屏蔽腾讯</label>
			<div class="col-sm-8">
				<label class="radio-inline"><input type="radio" value="0"  name="data[tengxun]"  <?php  if(!$settings['tengxun']) { ?>checked<?php  } ?>>开启</label>
	            <label class="radio-inline"><input type="radio" value="1" name="data[tengxun]"  <?php  if($settings['tengxun'] == 1 ) { ?>checked<?php  } ?>>关闭</label>
				<span class="help-block">由于腾讯的不稳定性，开启后自动第一顺位不播放腾讯视频</span> 				
			</div>
		</div>			
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">全站版权设置</label>
			<div class="col-sm-8">				
				 <input type="text" name="data[copyright]" class="form-control" value="<?php  echo $settings['copyright'];?>" placeholder="" />
			</div>
		</div>			
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">第三方统计代码</label>
			<div class="col-sm-8">
				 <textarea  name="data[tongji]" type="text" style='height:150px' class="form-control richtext-clone" placeholder="" name="tongji"><?php  echo $settings['tongji'];?></textarea>	
			</div>
		</div>		
    </div>
  </div>
</div>
<div class="panel panel-default">
	
	<div class="panel-body">				
		<div class="form-group">
			<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 col-sm-offset-3 col-md-offset-2 col-lg-offset-2">				
				<input name="submit" type="submit" value="提交" class="btn btn-primary" />
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		</div>
	</div>
</div>
</form>
</div>
<script type="text/javascript">
	$('#custom-url-add').click(function(){
			var html = $("#tpl").html();
			$('#custom-url').append(html);
		});
	$('#card-url-add').click(function(){
			var html = $("#card_tpl").html();
			console.log(html);
			$('#card-url').append(html);
		});
	$(document).on('click', '.remind-reply-del, .comment-reply-del, .times-del, .custom-url-del, .card-url-del', function(){
			$(this).parent().parent().remove();
			return false;
		});

</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>