<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
		<?php  if($turntable == 1) { ?>
	    <li><a  href="<?php  echo $this->createWebUrl('bapin');?>">霸屏金额管理</a></li>
    	<?php  } ?>
	    <li class="active"><a  href="#">添加金额</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">

			<div class="form-group">
				<label class="control-label" style="margin-right: 15px;">霸屏/涂鸦</label>
				<label class="radio-inline">
					<input type="radio" name="bp_type" value="0" checked/>霸屏
				</label>
				<label class="radio-inline">
					<input type="radio" name="bp_type" value="1"/>涂鸦
				</label>
				<div class="help-block">默认霸屏。</div>
			</div>

			<div class="form-group">

				<label for="bp_time" class="control-label">霸屏时间:</label>
				<div class="input-group">
				<input type="number" class="form-control" name="bp_time" value="">
					<span class="input-group-addon" >秒</span>
					</div>
			</div>

			<div class="form-group">
				<label for="bp_money" class="control-label">霸屏金额:</label>
				<div class="input-group">
				<input type="text" class="form-control" name="bp_money" value="">
					<span class="input-group-addon" >元</span>
				</div>

				<div class="help-block">霸屏时间内对应的金额，最小0.01元</div>
			</div>
			<div class="form-group">
				<label class=" control-label">霸屏金额对应图片</label>

				<?php  echo tpl_form_field_image('bp_images',$bp['bp_images']);?>
				<div class="help-block">图片，尺寸250*250(该图片只有在主题霸屏才出现).样图下载：<a href="../addons/hm_newdpm/common/s1.png" target="_blank">样图1</a>，<a href="../addons/hm_newdpm/common/s2.png" target="_blank">样图2</a>，<a href="../addons/hm_newdpm/common/s3.png" target="_blank">样图3</a>，<a href="../addons/hm_newdpm/common/s4.png" target="_blank">样图4</a></div>

			</div>
			<div class="form-group">
				<label class=" control-label">可以霸屏图片数量</label>
				<div class="">
					<select name="img_count" class="form-control" required="required" id="img_count">

						<option value="1" selected>1张图</option>
						<!--<option value="2">2张图</option>-->
						<!--<option value="3">3张图</option>-->
						<!--<option value="4">4张图</option>-->

					</select>
					<div class="help-block">只有在主题霸屏才有的功能，允许用户上传图片数，至少一张，至多4张</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label" style="margin-right: 15px;">状态</label>
					<label class="radio-inline">
						<input type="radio" name="status" value="0" checked/>正常
					</label>
					<label class="radio-inline">
						<input type="radio" name="status" value="1"/>禁用
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