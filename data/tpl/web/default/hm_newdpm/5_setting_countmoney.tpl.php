<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">

	    <li class="active"><a  href="#">数钱设置</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">
			<input type="hidden" name="countmoneyid" value="<?php  echo $countmoney['id'];?>" />
			<!--<input type="hidden" name="id" value="<?php  echo $reply['id'];?>" />-->
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">启用状态</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="iscount" value="0" disabled <?php  if($countmoney['iscount']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="iscount" value="1" disabled <?php  if($countmoney['iscount']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<input type="hidden" name="iscount" value="<?php  echo $countmoney['iscount'];?>" />
					<div class="help-block">默认关闭。修改状态请在【活动开关设置】里面修改<span style="color: red">玩这个功能的系统最好必须都是liunx系统，目前只能小规模使用。参与人数不得超过50人。</span></div>
				</div>
			</div>
			<!--<div class="form-group">-->
				<!--<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动启动后是否允许加入</label>-->
				<!--<div class="col-sm-9">-->
					<!--<label class="radio-inline">-->
						<!--<input type="radio" name="countmoney_status" value="0" <?php  if($countmoney['countmoney_status']==0) { ?> checked="checked"<?php  } ?>/>允许-->
					<!--</label>-->
					<!--<label class="radio-inline">-->
						<!--<input type="radio" name="countmoney_status" value="1" <?php  if($countmoney['countmoney_status']==1) { ?> checked="checked"<?php  } ?>/>不允许-->
					<!--</label>-->
					<!--<div class="help-block">默认允许。</div>-->
				<!--</div>-->
			<!--</div>-->

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕标题</label>
				<div class="col-sm-9 col-xs-12">
					<input type="text" name="countmoney_title" class="form-control" value="<?php  echo $countmoney['countmoney_title'];?>">
					<div class="help-block">显示在大屏幕上的标题</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">标题颜色</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_color('countmoney_title_color',$countmoney['countmoney_title_color']);?>
					<div class="help-block">用来控制数钱大屏幕显示标题的色调，不设置使用默认的</div>
				</div>
			</div>
			<div class="form-group">
				<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕背景设置</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('countmoney_bg', $countmoney['countmoney_bg']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
				<div class="col-sm-9 col-xs-12">
					<?php  if(IMS_VERSION >= 0.8) { ?>
					<?php  echo tpl_form_field_video('countmoney_pdbg', $countmoney['countmoney_pdbg']);?>
					<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
					<?php  } else { ?>
					<input type="text" class="form-control" name="countmoney_pdbg" value="<?php  echo $countmoney['countmoney_pdbg'];?>">
					<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
					<?php  } ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_audio('countmoney_music',$countmoney['countmoney_music']);?>
					<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">开始倒计时音乐<br>mp3格式</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_audio('countmoney_begin_music',$countmoney['countmoney_begin_music']);?>
					<div class="help-block">数钱现场开始倒计时声音，不上传没有声音，</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">数钱时间</label>
				<div class="col-sm-9 col-xs-12">
					<div class="input-group">
						<input type="number" name="countmoney_time" class="form-control" value="<?php  echo $countmoney['countmoney_time'];?>">
						<span class="input-group-addon" >秒</span>
					</div>
					<div class="help-block">每场次数钱的时间。</div>
				</div>
			</div>


	<div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="op" value="addad" />
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