<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
	    <li><a  href="<?php  echo $this->createWebUrl('bb_gift');?>">表白送礼管理</a></li>
	    <li class="active"><a  href="#">添加<?php  echo $_GPC['do'];?></a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">
			<?php  if($bb_gift !=3) { ?>
			<div class="form-group">
				<label class=" control-label"><?php  echo $_GPC['do'];?>名称</label>

					<input type="text" class="form-control" name="bb_name" value="">
					<div class="help-block">手机端<?php  echo $_GPC['do'];?>名称。</div>

			</div>
			<div class="form-group">
				<label class=" control-label"><?php  echo $_GPC['do'];?>图片</label>

				<?php  echo tpl_form_field_image('bb_pic',$ds['bb_pic']);?>
				<div class="help-block"><?php  echo $_GPC['do'];?>图片，尺寸140*120</div>

			</div>

			<?php  } ?>
			<?php  if($bb_gift==2) { ?>
			<div class="form-group">
				<label class="control-label"><?php  echo $_GPC['do'];?>视频背景</label>
				<div class="">
					<?php  if(IMS_VERSION >= 0.8) { ?>
					<?php  echo tpl_form_field_video('bb_vodiobg', $ds['bb_vodiobg']);?>
					<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
					<?php  } else { ?>
					<input type="text" class="form-control" name="vodio_bg11" value="<?php  echo $video['vodio_bg11'];?>">
					<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
					<?php  } ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label"><?php  echo $_GPC['do'];?>说明</label>

					<input type="text" class="form-control" name="bb_says" value="">
					<div class="help-block">手机端选择<?php  echo $_GPC['do'];?>后，对被表白的人说的话。</div>

			</div>
			<?php  } ?>
			<?php  if($bb_gift==1||$bb_gift==3) { ?>

			<div class="form-group">
				<label for="bp_time" class="control-label"><?php  echo $_GPC['do'];?>价格:</label>
				<div class="input-group">
					<input type="text" class="form-control" name="bb_price" value="">
					<span class="input-group-addon" >元</span>
				</div>
				<div class="help-block">简单的<?php  echo $_GPC['do'];?>价格设置。最小0.01元</div>
			</div>
			<div class="form-group">
				<label for="bp_time" class="control-label"><?php  echo $_GPC['do'];?>霸屏时间:</label>
				<div class="input-group">
					<input type="number" class="form-control" name="bb_time" value="">
					<span class="input-group-addon" >秒</span>
				</div>
				<div class="help-block">简单的<?php  echo $_GPC['do'];?>时间设置。最小1秒，最大999秒</div>
			</div>
			<?php  } ?>
			<div class="form-group">
				<label class="control-label" style="margin-right: 15px;">状态</label>
					<label class="radio-inline">
						<input type="radio" name="status" value="0" <?php  if($reply['status']==0) { ?> checked="checked"<?php  } ?>/>正常
					</label>
					<label class="radio-inline">
						<input type="radio" name="status" value="1" <?php  if($reply['status']==1) { ?> checked="checked"<?php  } ?>/>禁用
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