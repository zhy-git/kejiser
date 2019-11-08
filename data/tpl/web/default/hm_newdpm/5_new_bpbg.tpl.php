<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">

	    <li><a  href="<?php  echo $this->createWebUrl('bapin');?>">霸屏管理</a></li>

	    <li class="active"><a  href="#">添加霸屏背景</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">

			<div class="form-group">
				<label class="control-label" style="margin-right: 15px;">图片/视频</label>
				<label class="radio-inline">
					<input type="radio" name="bp_type" value="3" checked/>图片
				</label>
				<label class="radio-inline">
					<input type="radio" name="bp_type" value="4"/>视频
				</label>
				<div class="help-block">默认图片。</div>
			</div>

			<div class="form-group">
				<label class=" control-label">霸屏背景图片对应图片</label>

				<?php  echo tpl_form_field_image('bp_images',$bp['bp_images']);?>
				<div class="help-block">图片，尺寸1080*1920(该图片只有在新模式下霸屏才出现)与视频背景选择一个即可</div>

			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏背景对应视频</label>
				<div class="col-sm-9 col-xs-12">
					<?php  if(IMS_VERSION >= 0.8) { ?>
					<?php  echo tpl_form_field_video('bp_videos', $bp['bp_videos']);?>
					<div class="help-block">控制在3M以内</div>
					<?php  } else { ?>
					<input type="text" class="form-control" name="bp_videos" value="<?php  echo $bp['bp_videos'];?>">
					<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，控制在3M以内。与视频背景选择一个即可</div>
					<?php  } ?>

				</div>
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