<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
		<li>添加霸屏大屏幕背景</li>
		<li<?php  if($_GPC['do'] == 'bp_bgup' || $_GPC['do'] == '' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('bp_bgup');?>">霸屏大屏幕背景管理</a></li>
	</ul>

	<!-- Modal -->
	

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label">图片</label>
				<div>
					<?php  echo tpl_form_field_image('bg',$addad['bg']);?>
					<div class="help-block">显示图片 图片大小1920px X 1280px</div>
				</div>
			</div>

			<div class="form-group">
				<label for="adtitle" class="control-label">名称:</label>
				<input type="text" class="form-control" name="name" value="">
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