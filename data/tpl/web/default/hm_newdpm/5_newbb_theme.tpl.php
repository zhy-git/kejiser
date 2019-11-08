<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
	    <li><a  href="<?php  echo $this->createWebUrl('bapin');?>">霸屏管理</a></li>
	    <li class="active"><a  href="#">添加霸屏主题</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">

			<div class="form-group">
				<label class=" control-label">主题名称</label>

					<input type="text" class="form-control" name="bp_name" value="">
					<div class="help-block">霸屏主题名称名称。(不要超过4个字)</div>

			</div>
			<div class="form-group">
				<label class=" control-label">主题图片</label>

				<?php  echo tpl_form_field_image('thumb',$bp['thumb']);?>
				<div class="help-block">霸屏主题图片，尺寸150*150</div>

			</div>
			<div class="form-group">
				<label class="control-label">大屏幕视频背景</label>
				<div class="">
					<?php  if(IMS_VERSION >= 0.8) { ?>
					<?php  echo tpl_form_field_video('bp_vodiobg', $item['bp_vodiobg']);?>
					<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
					<?php  } else { ?>
					<input type="text" class="form-control" name="bp_vodiobg" value="<?php  echo $bp['bp_vodiobg'];?>">
					<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
					<?php  } ?>

				</div>
			</div>
			<div class="form-group">
				<label for="price" class="control-label">主题至少霸屏金额:</label>
				<div class="input-group">
					<input type="text" class="form-control" name="price" value="">
					<span class="input-group-addon" >元</span>
				</div>

				<div class="help-block">使用该主题至少需要的霸屏金额，不设置默认为0</div>
			</div>
			<div class="form-group">
				<label class=" control-label">主题使用介绍</label>

				<input type="text" class="form-control" name="condition_text" value="">
				<div class="help-block">使用该主题的文字提示介绍</div>

			</div>
			<div class="form-group">
				<label class="control-label" style="margin-right: 15px;">状态</label>
					<label class="radio-inline">
						<input type="radio" name="enabled" value="0" <?php  if($reply['enabled']==0) { ?> checked="checked"<?php  } ?>/>正常
					</label>
					<label class="radio-inline">
						<input type="radio" name="enabled" value="1" <?php  if($reply['enabled']==1) { ?> checked="checked"<?php  } ?>/>禁用
					</label>
			</div>

			<div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="op" value="addad" />
        	</div>
		</div>
	</div>
	</form>

</div>
<!-- <div id="queding" class="hide">
	<span class="pull-right btn btn-primary" id="chengaddd" onclick="abc()">确定</span>
</div> -->
<script>
	require(['bootstrap'],function($){
		$('.btn').hover(function(){
			$(this).tooltip('show');
		},function(){
			$(this).tooltip('hide');
		});
	});

</script>
<script>
function drop_confirm(msg, url){
    if(confirm(msg)){
        window.location = url;
    }
}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>