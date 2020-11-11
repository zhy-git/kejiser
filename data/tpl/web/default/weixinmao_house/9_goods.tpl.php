<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common', TEMPLATE_INCLUDEPATH)) : (include template('common', TEMPLATE_INCLUDEPATH));?>

<script type="text/javascript" src="resource/js/lib/jquery-ui-1.10.3.min.js"></script>
<ul class="nav nav-tabs">
	<li <?php  if($operation == 'post') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('content', array('op' => 'post'))?>">添加内容</a></li>
	<li <?php  if($operation == 'display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('content', array('op' => 'display'))?>">管理内容</a></li>
</ul>
<?php  if($operation == 'post') { ?>
<link type="text/css" rel="stylesheet" href="../addons/ewei_shopping/images/uploadify_t.css" />
<style type='text/css'>
	.tab-pane {padding:20px 0 20px 0;}
</style>
<div class="main">
	<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="form1" onsubmit='return formcheck()'>
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php  if(empty($item['id'])) { ?>添加内容<?php  } else { ?>编辑内容<?php  } ?>
			</div>
			<div class="panel-body">
				
				<div class="tab-content">
					<div class="tab-pane  active" id="tab_basic"><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('goods_basic', TEMPLATE_INCLUDEPATH)) : (include template('goods_basic', TEMPLATE_INCLUDEPATH));?></div>
					
				</div>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</form>
</div>

<script type="text/javascript">
	var category = <?php  echo json_encode($children)?>;

	$(function () {
		window.optionchanged = false;
		$('#myTab a').click(function (e) {
			e.preventDefault();//阻止a链接的跳转行为
			$(this).tab('show');//显示当前选中的链接及关联的content
		})
	});

	function formcheck(){
	
		if($("#title").isEmpty()) {
			//$('#myTab a[href="#tab_basic"]').tab('show');
			Tip.focus("title","请输入内容标题!","right");
			util.message("请输入内容标题");
			return false;
		}
		if($("#category_parent").val() ==0)
			{
				Tip.focus("category_parent","请选择一级分类!","right");
				util.message("请选择一级分类");
				return false;
			}
		/*
		<?php  if(empty($id)) { ?>
		if ($.trim($(':file[name="thumb"]').val()) == '') {
			$('#myTab a[href="#tab_basic"]').tab('show');
			$('#myTab a[href="#tab_basic"]').tab('show');
		//	Tip.focus('thumb_div', '请上传缩略图.', 'right');
			util.message("请上传缩略图");
			return false;
		}
		<?php  } ?>
		*/
		
		var content = $("textarea[name='content']").val();

		if (content == '') {
			util.message("请输入详情内容");
			return false;
		}
		
		
		
		var full = checkoption();
		if(!full){return false;}
	
		return true;
	}
	
	function checkoption(){
		
		var full = true;
		if( $("#hasoption").get(0).checked){
			$(".spec_title").each(function(i){
				if( $(this).isEmpty()) {
					$('#myTab a[href="#tab_option"]').tab('show');
					Tip.focus(".spec_title:eq(" + i + ")","请输入规格名称!","top");
					full =false;
					return false;
				}
			});
			$(".spec_item_title").each(function(i){
				if( $(this).isEmpty()) {
					$('#myTab a[href="#tab_option"]').tab('show');
					Tip.focus(".spec_item_title:eq(" + i + ")","请输入规格项名称!","top");
					full =false;
					return false;
				}
			});
		}
		if(!full) { return false; }
		return full;
	}

</script>

<?php  } else if($operation == 'display') { ?>

<div class="main">
	<div class="panel panel-info">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="wxsmall_001" />
			<input type="hidden" name="do" value="content" />
			<input type="hidden" name="op" value="display" />
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">关键字</label>
				<div class="col-xs-8 col-sm-8 col-lg-9">
					<input class="form-control" name="keyword" id="" type="text" value="<?php  echo $_GPC['keyword'];?>">
					
				</div>
					<div class="col-xs-4 col-sm-2 col-lg-2">
					<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
				</div>
			</div>
		
		</form>
	</div>
</div>
<style>
.label{cursor:pointer;}
</style>
<div class="panel panel-default">
	<div class="panel-body table-responsive">
		<table class="table table-hover">
			<thead class="navbar-inner">
				<tr>
					<th style="width:5%;">ID</th>
					<th style="width:25%;">标题</th>
					<th style="width:10%;">分类</th>
					<th style="width:15%;">创建时间</th>
					<th style="width:10%;">状态</th>
					<th style="width:10%;">排序</th>
					<th style="text-align:right; width:10%;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
					<td><?php  echo $item['id'];?></td>
					<td><?php  echo $item['title'];?></td>
					<td><?php  echo $item['parent_catename'];?>/<?php  echo $item['children_catename'];?></td>
					<td><?php  echo date('Y-m-d',$item['createtime']);?></td>
					<td><?php  echo $item['status'];?>	</td>
					<td><?php  echo $item['sort'];?>	</td>
					<td style="text-align:right;">
						<a href="<?php  echo $this->createWebUrl('content', array('id' => $item['id'], 'op' => 'post'))?>"class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
						<a href="<?php  echo $this->createWebUrl('content', array('id' => $item['id'], 'op' => 'delete'))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="删除"><i class="fa fa-times"></i></a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
		</table>
		<?php  echo $pager;?>
	</div>
	</div>
</div>
<script type="text/javascript">
	require(['bootstrap'],function($){
		$('.btn').hover(function(){
			$(this).tooltip('show');
		},function(){
			$(this).tooltip('hide');
		});
	});

	var category = <?php  echo json_encode($children)?>;
	function setProperty(obj,id,type){
		$(obj).html($(obj).html() + "...");
		$.post("<?php  echo $this->createWebUrl('setgoodsproperty')?>"
			,{id:id,type:type, data: obj.getAttribute("data")}
			,function(d){
				$(obj).html($(obj).html().replace("...",""));
				if(type=='type'){
				 $(obj).html( d.data=='1'?'实体物品':'虚拟物品');
				}
				if(type=='status'){
				 $(obj).html( d.data=='1'?'上架':'下架');
				}
				$(obj).attr("data",d.data);
				if(d.result==1){
					$(obj).toggleClass("label-info");
				}
			}
			,"json"
		);
	}

</script>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
