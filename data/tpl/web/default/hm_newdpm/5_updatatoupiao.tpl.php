<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">

	    <li class="active"><a  href="#">编辑投票</a></li>
	    <li class=""><a  href="<?php  echo $this->createWebUrl('Newtoupiao',array('rid' => $rid,'vote_id'=>$vote_id));?>">添加投票</a></li>
	</ul>


	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">
			<input type="hidden" value="<?php  echo $item['id'];?>" name="listid">
			<div class="form-group">
				<label for="name" class="control-label">标题:</label>
				<input type="text" class="form-control" name="name" value="<?php  echo $item['name'];?>">
				<div class="help-block">控制在5个字内</div>
			</div>
			<!--<div class="form-group">-->
				<!--<label for="back_time" class="control-label">投票倒计时:</label>-->
				<!--<input type="text" class="form-control" name="back_time" value="<?php  echo $item['back_time'];?>">-->
				<!--<span class="input-group-addon" style="border-left: none;border-right: none;">秒</span>-->
				<!--<div class="help-block">0，表示不用倒计时</div>-->
			<!--</div>-->
			<div class="form-group">
				<label class="control-label">投票logo:</label>
				<div>
					<?php  echo tpl_form_field_image('avatar',$item['avatar']);?>
					<div class="help-block">投票logo 图片大小220px X 220px</div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label">投票封面:</label>
				<div>
					<?php  echo tpl_form_field_image('img',$item['img']);?>
					<div class="help-block">投票封面(手机端显示) 图片大小220px X 520px</div>
				</div>
			</div>
			
			<div class="form-group">
				<label for="pid" class="control-label">排序:</label>
				<input type="text" class="form-control" name="pid" value="<?php  echo $item['pid'];?>">
				<div class="help-block">数字越大越靠前,100以内数字</div>
			</div>
			<div class="form-group">
				<label for="description" class="control-label"> 投票介绍</label>
				<textarea style="height:60px;" name="description" class="form-control" cols="60"><?php  echo $item['description'];?></textarea>
				<div class="help-block">200个字以内</div>
			</div>
			<div class="form-group">
				<label class="control-label" style="margin-right: 15px;">状态</label>
					<label class="radio-inline">
						<input type="radio" name="status" value="0" <?php  if($item['status']==0) { ?> checked="checked"<?php  } ?>/>正常
					</label>
					<label class="radio-inline">
						<input type="radio" name="status" value="1" <?php  if($item['status']==1) { ?> checked="checked"<?php  } ?>/>禁用
					</label>
			</div>
			



			<div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="op2" value="updataad" />
            <input type="hidden" name="turntable" value="<?php  echo $turntable;?>" />
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