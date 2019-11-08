<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">

	    <li class="active"><a  href="#">编辑<?php  echo $_GPC['do'];?></a></li>
	    <li class=""><a  href="<?php  echo $this->createWebUrl('Newds',array('rid' => $rid,'turntable'=>$turntable));?>">添加<?php  echo $_GPC['do'];?></a></li>
	</ul>


	<div class="panel panel-default">
		<div class="panel-body">
			<form action="" method="post" class=" form" enctype="multipart/form-data">
				<input type="hidden" value="<?php  echo $item['id'];?>" name="listid">
				<div class="form-group">
					<label class=" control-label"><?php  echo $_GPC['do'];?>名称</label>

					<input type="text" class="form-control" name="gift_name" value="<?php  echo $item['name'];?>">
					<div class="help-block">手机端<?php  echo $_GPC['do'];?>名称。</div>

				</div>
				<?php  if($turntable==2) { ?>
				<div class="form-group">
					<label for="ds_time" class="control-label">霸屏时间:</label>
					<div class="input-group">
						<input type="number" class="form-control" name="ds_time" value="<?php  echo $item['ds_time'];?>">
						<span class="input-group-addon" >秒</span>
					</div>
					<div class="help-block">大屏幕打赏霸屏时间，最大值999秒</div>
				</div>

				<div class="form-group">
					<label for="bp_money" class="control-label">霸屏金额:</label>
					<div class="input-group">
						<input type="text" class="form-control" name="ds_money" value="<?php  echo $item['price'];?>">
						<span class="input-group-addon" >元</span>
					</div>

					<div class="help-block">霸屏时间内对应的金额，最小0.01元</div>
				</div>
				<div class="form-group">
					<label class="control-label">打赏手机端图片</label>

					<?php  echo tpl_form_field_image('pic',$item['pic']);?>
					<div class="help-block">手机端礼物图片，尺寸120*120</div>

				</div>
				<?php  if(IMS_VERSION >= 0.7) { ?>
				<div class="form-group">
					<label class="control-label">大屏幕打赏视频</label>

					<?php  echo tpl_form_field_video('ds_vodiobg', $item['ds_vodiobg']);?>
					<div class="help-block">mp4格式，视频只能播放效果，无法播放声音</div>
				</div>
				<?php  } ?>
				<div class="form-group">
					<label class=" control-label">大屏幕打赏图片</label>

					<?php  echo tpl_form_field_image('ds_pic',$item['ds_pic']);?>
					<div class="help-block">（无视频的时候显示该图片）大屏幕打赏图片，尺寸1280*720</div>

				</div>
				<div class="form-group">
					<label class="control-label">打赏说明</label>

					<input type="text" class="form-control" name="ds_says" value="<?php  echo $item['says'];?>">
					<div class="help-block">手机端选择礼物后，对被打赏的项目或者人说的话。</div>

				</div>
            <?php  } ?>
				<?php  if($turntable==1) { ?>
				<div class="form-group">
					<label class=" control-label">项目图片</label>

					<?php  echo tpl_form_field_image('pic',$item['pic']);?>
					<div class="help-block">被打赏项目图片，尺寸120px*120px</div>

				</div>
				<div class="form-group">
					<label class="control-label">项目说明</label>

					<input type="text" class="form-control" name="ds_says" value="<?php  echo $item['says'];?>">
					<div class="help-block">简单的项目介绍。</div>

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
					<input type="hidden" name="op2" value="updataad" />
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