<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
		<li<?php  if($_GPC['do'] == 'bp_bgup' || $_GPC['do'] == '' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('bp_bgup');?>">霸屏大屏幕背景管理</a></li>
        <li<?php  if($_GPC['do'] == 'post') { ?> class="active"<?php  } ?>><a class="btn-lg" href="<?php  echo $this->createWebUrl('newbp_bgup');?>">添加霸屏大屏幕背景</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body table-responsive">
		<table class="table table-hover" style="table-layout: auto;">
			<thead class="navbar-inner">
				<tr>
					<th class='with-checkbox' style="width:50px;">
						<input type="checkbox" class="check_all" />
					</th>
					<th style="width:150px;">背景图片</th>
					<th style="width:300px;">名称</th>
					<th style="width:120px;">操作</th>
				</tr>
			</thead>
			<tbody>
                    <?php  if(is_array($addad)) { foreach($addad as $row) { ?>
				<tr>
					<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $row['id'];?>"></td>
					<td><img src="<?php  echo tomedia($row['bg'])?>" style="width: 100px;"></td>
					<td><?php  echo $row['name'];?></td>

					<td>
						<a class="btn btn-default bianji" href="<?php  echo $this->createWebUrl('newbp_bgup',array('uid'=>$row['id'],'op'=>'up'));?>" data-placement="top" title="编辑" id="<?php  echo $row['id'];?>"><i class="fa fa-edit" ></i></a>
                        <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('newbp_bgup',array('uid'=>$row['id'],'op'=>'del'))?>');" title="删除"><i class="fa fa-times"></i></a>
                  	</td>
				</tr>
                <?php  } } ?>
				<tr>
					<td colspan="7">
						<input type="button" class="btn btn-primary" name="deleteall" value="删除选择的" />
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>

</div>
<div id="queding" class="hide">
	<span class="pull-right btn btn-primary" id="chengaddd" onclick="abc()">确定</span>
</div>
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
		$.post('<?php  echo $this->createWebUrl('newbp_bgup',array('op'=>'delall'))?>', {idArr:id},function(data){
			if (data.errno ==0)
			{
                alert(data.msg);
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