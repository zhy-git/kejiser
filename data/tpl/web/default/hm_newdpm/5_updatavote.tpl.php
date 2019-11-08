<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">

	    <li class="active"><a  href="#">编辑项目</a></li>
	    <li class=""><a  href="<?php  echo $this->createWebUrl('Newvote',array('rid' => $rid));?>">添加项目</a></li>
	</ul>
	

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">
			<input type="hidden" value="<?php  echo $item['id'];?>" name="listid">
			<div class="form-group">
				<label for="vote_name" class="control-label">项目名称:</label>
				<input type="text" class="form-control" name="vote_name" value="<?php  echo $item['vote_name'];?>">
				<div class="help-block">控制在5个字内，如：最佳主持人。最佳好男人</div>
			</div>
			<div class="form-group">
				<label class="control-label "><span style='color:red'>*</span> 可投票时间</label>
				<div>
					<?php  echo tpl_form_field_daterange('times', array('start'=>date('Y-m-d H:i',$item['vote_starttime']),'end'=>date('Y-m-d H:i',$item['vote_endtime'])), true)?>
				</div>
			</div>
			<div class="form-group" style="display: block;">
				<label class="control-label">每人可投票次数</label>

				<input type="number" id="vote_times" class="form-control" placeholder="请输入投票次数" name="vote_times" value="<?php  echo $item['vote_times'];?>">
				<div class="help-block">每个人可以投票的次数，0表示不限制，默认1</div>

			</div>
			<div class="form-group">
				<label class="control-label">投票项目封面:</label>
				<div>
					<?php  echo tpl_form_field_image('vote_img',$item['vote_img']);?>
					<div class="help-block">投票封面(手机端显示) 图片大小220px X 520px</div>
				</div>
			</div>
			<div class="form-group">
				<label for="pid" class="control-label">排序:</label>
				<input type="number" class="form-control" name="vote_pid" value="<?php  echo $item['vote_pid'];?>">
				<div class="help-block">数字越大越靠前,100以内数字</div>
			</div>
			<div class="form-group">
				<label for="description" class="control-label"> 项目介绍</label>
				<textarea style="height:60px;" name="vote_description" class="form-control" cols="60"><?php  echo $item['vote_description'];?></textarea>
				<div class="help-block">200个字以内</div>
			</div>
			<div class="form-group">
				<label class="control-label" style="margin-right: 15px;">状态</label>
					<label class="radio-inline">
						<input type="radio" name="vote_status" value="0" <?php  if($item['vote_status']==0) { ?> checked="checked"<?php  } ?>/>禁用
					</label>
					<label class="radio-inline">
						<input type="radio" name="vote_status" value="1" <?php  if($item['vote_status']==1) { ?> checked="checked"<?php  } ?>/>启用
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