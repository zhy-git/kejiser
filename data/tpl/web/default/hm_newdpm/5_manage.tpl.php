<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
		<li<?php  if($_GPC['do'] == 'manage' || $_GPC['do'] == '' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('manage');?>">活动管理</a></li>
        <li<?php  if($_GPC['do'] == 'post') { ?> class="active"<?php  } ?>><a href="<?php  echo url('platform/reply/post',array('m'=>'hm_newdpm'));?>">添加活动规则</a></li>
	</ul>
    
    <div class="panel panel-info">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
        	<input type="hidden" name="m" value="hm_newdpm" />
        	<input type="hidden" name="do" value="manage" />
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">关键字</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<input class="form-control" name="keyword" id="" type="text" value="<?php  echo $_GPC['keyword'];?>">
				</div>
                <div class=" col-xs-12 col-sm-2 col-lg-2">
					<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
				</div>
			</div>
 			<div class="form-group">
			</div>
		</form>
	</div>
 
    </div>
    
	<div class="panel panel-default">
		<div class="panel-body table-responsive">
		<table class="table table-hover" style="table-layout: auto;">
			<thead class="navbar-inner">
				<tr>
					<th class='with-checkbox' style="width:50px;">
						<input type="checkbox" class="check_all" />
					</th>
					<th style="width:300px;">规则名称</th>
					<th style="width:150px;">有效参与人数</th>
					<th style="width:150px;">消息数</th>
					<th style="width:300px;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $row) { ?>
				<tr>
					<td class="with-checkbox">
						<input type="checkbox" name="check" value="<?php  echo $row['id'];?>"></td>	 <td><?php  echo $row['name'];?> </td>
					<td><?php  echo $row['fansnum'];?></td>
					<td><?php  echo $row['viewnum'];?></td>
					<td>
						<a href="<?php  echo $this->createWebUrl('messagelist',array('rid'=>$row['id']))?>" class="btn  btn-default" data-toggle="tooltip" data-placement="top" title="消息管理"><i class="fa fa-trophy"></i>消息管理</a>
						<a href="<?php  echo $this->createWebUrl('fanslist',array('rid'=>$row['id']))?>" class="btn  btn-default" data-toggle="tooltip" data-placement="top" title="参与粉丝"><i class="fa fa-users"></i> 粉丝</a>
						<a href="<?php  echo $this->createWebUrl('awardlist',array('rid'=>$row['id']))?>" class="btn  btn-default" data-toggle="tooltip" data-placement="top" title="中奖管理"><i class="fa fa-gift"></i> 中奖</a>
						<a href="<?php  echo $this->createWebUrl('cashprize',array('rid'=>$row['id']))?>" class="btn  btn-default" data-toggle="tooltip" data-placement="top" title="提现管理"><i class="fa fa-money"></i> 提现</a>
						<a href="<?php  echo $this->createWebUrl('bm_order',array('rid'=>$row['id']))?>" class="btn  btn-default" data-toggle="tooltip" data-placement="top" title="报名订单管理"><i class="fa fa-file-text-o"></i> 报名订单</a>
						<a href="<?php  echo $this->createWebUrl('bp_order',array('rid'=>$row['id'],'pay_type'=>2,'delete'=>1))?>" class="btn  btn-default" data-toggle="tooltip" data-placement="top" title="霸屏/打赏订单管理"><i class="fa fa-file-text-o"></i> 霸屏/打赏订单</a>
						<a href="<?php  echo $this->createWebUrl('xyh_list',array('rid'=>$row['id']))?>" class="btn  btn-default" data-toggle="tooltip" data-placement="top" title="幸运号管理"><i class="fa fa-file-text-o"></i> 幸运号</a>
						<a target="_blank" href="javascript:void(0);" onclick="run(<?php  echo $row['id'];?>)" type="button" class="btn btn-danger ">查看大屏幕</a>
						<a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo url('platform/reply/post',array('m'=>'hm_newdpm','rid'=>$row['id']));?>" title="编辑"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('delete',array('rid'=>$row['id']))?>');" title="删除"><i class="fa fa-times"></i></a>
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
	<?php  echo $pager;?>
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

		if(check.length<1){
			alert('请选择要删除的记录!');
			return false;
		}
        if( confirm("确认要删除选择的记录?")){
		var id = new Array();
		check.each(function(i){
			id[i] = $(this).val();
		});
		$.post('<?php  echo $this->createWebUrl('deleteAll')?>', {idArr:id},function(data){
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
<script type="text/javascript">
	//<![CDATA[
	function run(s) {
		window.open('<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=hm_newdpm&do=login&id='+s,'newwindow','height=500,width=800,top=0,left=0,toolbar=no,menubar=no,scrollbars=no,resizable=no, location=no,status=no')
	}
	//]]>
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>