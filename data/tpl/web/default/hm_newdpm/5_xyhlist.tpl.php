<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="main">
	<ul class="nav nav-tabs">
		<li<?php  if($_GPC['do'] == 'xyhlist' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('xyh_list',array('rid'=>$rid));?>">幸运号管理</a></li>
        <!-- <li<?php  if($_GPC['do'] == 'post') { ?> class="active"<?php  } ?>><a class="btn-lg" href="<?php  echo $this->createWebUrl('newad');?>">添加广告</a></li> -->
	</ul>

	<button class="btn btn-success" onclick="location.href='<?php  echo $this->createWebUrl('Delete_xyh',array('rid'=>$_GPC['rid'],'token'=>'downloads'))?>'" type="button"><i class="fa fa-search"></i> 导出数据</button>
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="alert" style="margin-bottom:0;">　　
				<button id="clearnobd" class="btn btn-danger" type="button" style="float: right;margin-top: 0px;margin-left: 15px;">一键清除全部抽奖码</button>
			</div>
		</div>
		<div class="panel-body table-responsive">
		<table class="table table-hover" >
			<thead class="navbar-inner">
				<tr>
					<th class='with-checkbox' style="width:30px;">
						<input type="checkbox" class="check_all" />
					</th>
					<th style="width:100px;">序号</th>
					<th style="width:80px;">批次</th>
					<th style="width:120px;">幸运号/手机号</th>
					<th style="width:220px;">模式</th>
					<th style="width:220px;">适应规则</th>
					<th style="width:150px;">创建时间</th>
					<th style="width:120px;">操作</th>
				</tr>
			</thead>
			<tbody>
                    <?php  if(is_array($list)) { foreach($list as $row) { ?>
				<tr>
					<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $row['id'];?>"></td>
					<td><?php  echo $row['id'];?></td>
					<td><?php  echo $row['pici'];?></td>
					<td>
						<a href="<?php  echo $this->createWebUrl('codeshow2', array('rid'=>$_GPC['rid'],'pici' => $row['pici']))?>" class="btn btn-success btn-sm"> 查看幸运码</a>
					</td>
					<td><?php  if($row['turntable']==1) { ?>幸运号抽奖<?php  } else { ?>幸运手机号抽奖<?php  } ?></td>
					<td><?php  echo $row['rulename'];?></td>
					<td><?php  echo date('Y/m/d H:i',$row['createtime'])?></td>
					<td>
                        <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('Delete_xyh',array('rid'=>$row['rid'],'id'=>$row['id'],'token'=>'del_one'))?>');" title="删除"><i class="fa fa-times"></i></a>
                  	</td>
				</tr>
                <?php  } } ?>
					<tr>
						<td colspan="2">
							<input type="button" class="btn btn-danger" name="deleteall_fans" value="一键删除" />
						</td>
					</tr>
			</tbody>
		</table>
	</div>
	</div>
    <div style="text-align:center;"><?php  echo $pager;?></div>
</div>
<script>
	require(['bootstrap'],function($){
		$('.btn').hover(function(){
			$(this).tooltip('show');
		},function(){
			$(this).tooltip('hide');
		});
	});
</script>
<script>
function drop_confirm(msg, url){
    if(confirm(msg)){
        window.location = url;
    }
}
$('#clearnobd').click(function(){
	var b = confirm("确定要删除所有数据！");
	if( b == true){
		$.post("<?php  echo $this->createWebUrl('Delete_xyh',array('rid'=>$rid,'token'=>'all'))?>", function(data) {
			if(data.success == 100) {
				alert(data.msg);
			} else {
				alert(data.msg);
				location.reload();
			}
		},"json");
	}
})
$(function(){

	$(".check_all").click(function(){
		var checked = $(this).get(0).checked;

		$("input[type=checkbox]").attr("checked",checked);
	});

	$("input[name=deleteall_fans]").click(function(){
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
			$.post('<?php  echo $this->createWebUrl('Delete_xyh',array('rid'=>$rid,'token'=>'checks'))?>', {idArr:id},function(data){
				if (data.flag ==1)
				{
					alert(data.msg);
					location.reload();
				} else {
					alert(data.msg);
				}


			},'json');
		}

	});
});
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>