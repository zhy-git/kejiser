<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">

	    <li class="active"><a  href="#">相册设置</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">
			<input type="hidden" name="photoid" value="<?php  echo $photo['id'];?>" />

			<div class="form-group" style="display: none">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕标题</label>
				<div class="col-sm-9 col-xs-12">
					<input type="text" name="photo_title" class="form-control" value="<?php  echo $photo['photo_title'];?>">
					<div class="help-block">显示在大屏幕的标题</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">图片切换时间</label>
				<div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<input type="number" name="changetime" class="form-control" value="<?php  echo $photo['changetime'];?>">
					<span class="input-group-addon" >秒</span>
				</div>
				<div class="help-block">大屏幕上图片轮播时间，不填默认5秒.</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启相册</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="photo_status" value="0" <?php  if($photo['photo_status']==0) { ?> checked="checked"<?php  } ?>/>不开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="photo_status" value="1" <?php  if($photo['photo_status']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。<span style="color: red"></span></div>
				</div>
			</div>
			<div class="form-group">
				<label for="photo_bg" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕背景设置</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('photo_bg', $photo['photo_bg']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
				<div class="col-sm-9 col-xs-12">
					<?php  if(IMS_VERSION >= 0.8) { ?>
					<?php  echo tpl_form_field_video('photo_voice', $photo['photo_voice']);?>
					<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
					<?php  } else { ?>
					<input type="text" class="form-control" name="vodio_bg11" value="<?php  echo $photo['photo_voice'];?>">
					<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
					<?php  } ?>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_audio('photo_music',$photo['photo_music']);?>
					<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
				</div>
			</div>

			<div class="form-group" style="display: none">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">相册样式</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="photo_type" value="0" <?php  if($photo['photo_type']==0) { ?> checked="checked"<?php  } ?>/>默认横向
					</label>
					<label class="radio-inline">
						<input type="radio" name="photo_type" value="1" <?php  if($photo['photo_type']==1) { ?> checked="checked"<?php  } ?>/>九宫格
					</label>
					<label class="radio-inline">
					   <input type="radio" name="photo_type" value="2" <?php  if($photo['photo_type']==2) { ?> checked="checked"<?php  } ?>/>16宫格
				    </label>
					<label class="radio-inline">
						<input type="radio" name="photo_type" value="3" <?php  if($photo['photo_type']==3) { ?> checked="checked"<?php  } ?>/>纵向
					</label>
					<div class="help-block">默认样式。<span style="color: red"></span></div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否允许手机端浏览</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_phone" value="0" <?php  if($photo['is_phone']==0) { ?> checked="checked"<?php  } ?>/>不允许
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_phone" value="1" <?php  if($photo['is_phone']==1) { ?> checked="checked"<?php  } ?>/>允许
					</label>
					<div class="help-block">默认不允许。<span style="color: red"></span></div>
				</div>
			</div>
			<div class="form-group col-sm-12">
				<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
				<input type="hidden" name="op" value="addad" />
			</div>
		</form>
		</div>


		</div>
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


$(function(){

    $(".check_all").click(function(){
       var checked = $(this).get(0).checked;

       $("input[type=checkbox]").attr("checked",checked);
    });
	$("input[name=deleteall]").click(function(){
		var check = $("input:checked");

		if(check.length<2){
			alert('请选择要删除的记录!');
			return false;
		}
        if( confirm("确认要删除选择的记录?")){
		var id = new Array();
		check.each(function(i){
			id[i] = $(this).val();
		});
		$.post('<?php  echo $this->createWebUrl('deleteAllcard')?>', {idArr:id},function(data){
			if (data.errno ==0)
			{
				location.reload();
			} else {
				alert(data.error);
			}


		},'json');
		}

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