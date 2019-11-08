<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">

	    <li class="active"><a  href="#">高级投票设置</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">

			<input type="hidden" name="id" value="<?php  echo $vote['id'];?>" />
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机端标题</label>
				<div class="col-sm-9 col-xs-12">
					<input type="text" name="vote_title" class="form-control" value="<?php  echo $vote['vote_title'];?>">
					<div class="help-block">显示在手机端项目列表页面标题</div>
				</div>
			</div>
			<div class="form-group" style="display: block">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否显示项目列表</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="type" value="0" <?php  if($vote['type']==0) { ?> checked="checked"<?php  } ?>/>显示
					</label>
					<label class="radio-inline">
						<input type="radio" name="type" value="1" <?php  if($vote['type']==1) { ?> checked="checked"<?php  } ?>/>不显示
					</label>
					<div class="help-block">默认显示。不显示将直接进入投票页面</div>
				</div>
			</div>
			<div class="form-group" style="display: block">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="vote_status" value="0" <?php  if($vote['vote_status']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="vote_status" value="1" <?php  if($vote['vote_status']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。开启后普通投票模式将自动关闭</div>
				</div>
			</div>
			<div class="form-group">
				<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">项目列表顶部banner</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('vote_banner', $vote['vote_banner']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：750*200px</div>
				</div>
			</div>
			<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景颜色</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_color('vote_bgcolor',$vote['vote_bgcolor']);?>
				<div class="help-block">用来控制项目列表的颜色，不设置使用默认的</div>
			</div>
		</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">列表框的背景颜色</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_color('vote_opcolor',$vote['vote_opcolor']);?>
					<div class="help-block">用来控制项目列表框的颜色，不设置使用默认的(字体白色不变)</div>
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