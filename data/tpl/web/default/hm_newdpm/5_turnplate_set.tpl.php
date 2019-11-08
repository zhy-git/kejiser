<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">

	    <li class="active"><a  href="#">惩罚转盘设置</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">
			<input type="hidden" name="punishmentid" value="<?php  echo $punishment['id'];?>" />

			<div class="form-group" style="display: block">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启惩罚大转盘</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_punishment" value="0" <?php  if($punishment['is_punishment']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_punishment" value="1" <?php  if($punishment['is_punishment']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机端标题</label>
				<div class="col-sm-9 col-xs-12">
					<input type="text" name="punishment_title" class="form-control" value="<?php  echo $punishment['punishment_title'];?>">
					<div class="help-block">显示在手机端惩罚大转盘页面的标题</div>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="control-label col-xs-12 col-sm-3 col-md-2">背景设置</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('punishment_bg', $punishment['punishment_bg']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：750*1334</div>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="control-label col-xs-12 col-sm-3 col-md-2">转盘图片</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('punishment_img', $punishment['punishment_img']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：420*420</div>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="control-label col-xs-12 col-sm-3 col-md-2">指针图</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('punishment_pointer', $punishment['punishment_pointer']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：135*180</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">惩罚项目</label>
				<div class="col-sm-9 col-xs-12">
					<input type="text" name="punishment_content" class="form-control" value="<?php  echo $punishment['punishment_content'];?>">
					<div class="help-block">惩罚转盘惩罚项目，多个项目用英文逗号隔开,</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">转动音乐<br>mp3格式</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_audio('punishment_music',$punishment['punishment_music']);?>
					<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
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