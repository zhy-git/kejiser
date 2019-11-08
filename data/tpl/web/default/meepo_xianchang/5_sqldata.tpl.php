<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='sqldata'&&$op=='optimize') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sqldata')?>">数据优化</a>
	</li>
	<li <?php  if($_GPC['do']=='sqldata'&&$op=='showall') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sqldata',array('op'=>'showall'))?>">数据表</a>
	</li>
	<li <?php  if($_GPC['do']=='sqldata'&&$op=='deldata') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sqldata',array('op'=>'deldata'))?>">数据清理</a>
	</li>
</ul>
<?php  if($op=='showall' || $op=='optimize') { ?>
<div class="panel panel-default">
<div class="panel-body">
<form action="" method="post" class="form-horizontal form">
		<?php  if($_GPC['do']=='sqldata'&&$op=='optimize') { ?>
		<div class="alert alert-info" style="margin-bottom:0">
			<strong>数据表优化可以去除数据文件中的碎片, 使记录排列紧密, 提高读写速度.</strong>
		</div>
		<?php  } else { ?>
		<div class="alert alert-success" style="margin-bottom:0">
			<strong>全部现场表(仅显示存在数据的表)</strong>
		</div>
		<?php  } ?>
		<br>
		<div class="panel panel-default">
		<div class="table-responsive panel-body">
		<?php  if(!empty($ds)) { ?>
		<table class="table we7-table">
			<thead>
				<tr>
					<?php  if($op=='optimize') { ?><th>操作</th><?php  } ?>
					<th>表名</th>
					<th>表类型</th>
					<th>记录数</th>
					<th>数据尺寸</th>
					<th>索引尺寸</th>
					<?php  if($op=='optimize') { ?><th>碎片尺寸</th><?php  } ?>
				</tr>
			</thead>
			<tbody>
			<?php  if(is_array($ds)) { foreach($ds as $row) { ?>
			<tr>
				<?php  if($op=='optimize') { ?><td><input type="checkbox" name="select[]" checked="checked" value="<?php  echo $row['title'];?>"></td><?php  } ?>
				<td><?php  echo $row['title'];?></td>
				<td><?php  echo $row['type'];?></td>
				<td><?php  echo $row['rows'];?></td>
				<td><?php  echo $row['data'];?></td>
				<td><?php  echo $row['index'];?></td>
				<?php  if($op=='optimize') { ?><td><?php  echo $row['free'];?></td><?php  } ?>
			</tr>
			<?php  } } ?>
			</tbody>
		</table>
		</div>
		</div>
		<?php  if($op=='optimize') { ?>
		<table class="tb">
			<tr>
				<td>
					<button type="submit" class="btn btn-primary span3" name="submit" value="提交">开始优化</button>
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</td>
			</tr>
		</table>
		<?php  } ?>
		<?php  } else { ?>
		<div class="tb">
					<div class="alert alert-success" style="margin-bottom:0">
						<strong>系统暂无可优化的数据表</strong>
					</div>
		</div>
		<?php  } ?>
	</form>
</div>
</div>
<?php  } else if($op=='deldata') { ?>
<style>
body{overflow-x:hidden}
.module-meepo td{padding-top:20px!important;padding-bottom:20px!important}
</style>
<div class="alert alert-info" style="margin-bottom:10px">
	<strong>1 删除霸屏上墙的转存数据将直接导致霸屏上墙里所有的报表无法导出，并且直接会导致用户我的收入里面的总分成异常，故如果活动需要长期对账，请慎重勾选清理转存数据</strong><br><br>
	<strong>2 为防止清理数据时，用户仍然在访问站点，请务必先关闭站点，并避开用户访问高峰期操作.</strong><br><br>
	<strong>3 每次进行清除数据操作前，请一定提前做好数据备份.</strong><br><br>
	<strong>4 每次进行清除数据操作前，请一定提前做好数据备份.</strong><br><br>
	<strong>5 仅支持清理已经结束的活动的数据.</strong><br><br>
</div>
<div class="panel we7-panel" style="margin-bottom:10px">
<div class="panel-heading" style="color:red;font-size:20px;">功能选取</div>
<div class="panel-body">
	<table class="table we7-table table-hover we7-form">
		  <thead>
			<tr class="text-left">
			  <th colspan="4" class="text-left">
				<div class="">
				  <input id="check-sysModule_total" type="checkbox" name="sys_total_module" onchange="selectall(this)"  checked="true">
				  <label for="check-sysModule_total" class=" we7-margin-horizontal-none">全选(请一定看清楚再选)</label></div>
			  </th>
			</tr>
		  </thead>
		  <tbody class="sys_total_module">
						<?php  $mindex = 0;?>
						  <?php  if(is_array($sysjoinModules)) { foreach($sysjoinModules as $mk => $mv) { ?>
							 <?php  if($mindex%4==0) { ?>
							  <tr class="module-meepo">
							 <?php  } ?>
								  <td class="text-left vertical-middle" style="overflow:inherit;">
									<div class="dropdown system-select-dropdown">
									  <span class="moduleSpan">
										<input id="check-sysModule_<?php  echo $mk;?>" type="checkbox" we7-check-all="1" value="<?php  echo $mk;?>" name="groupmodule[]" autocomplete="off" checked="true">
										<label for="check-sysModule_<?php  echo $mk;?>" class="we7-margin-horizontal-none" data-toggle="tooltip" data-original-title="" title=""><?php  echo $mv['name'];?></label>
									  </span>
									  <ul class="dropdown-menu" role="menu" style="display: none;">
										 <?php  if(is_array($mv['tables'])) { foreach($mv['tables'] as $tk => $tt) { ?>
										  <li class="moduleLi"><a href="javascript:;"><input id="modueldata_<?php  echo $mk;?>_<?php  echo $tk;?>" we7-check-all="1" type="checkbox" name="bind_<?php  echo $mk;?>[]" value="<?php  echo $tk;?>"  checked="true"><label for="modueldata_<?php  echo $mk;?>_<?php  echo $tk;?>" class="we7-padding-left we7-margin-horizontal-none checkbox-inline"><?php  echo $tt['name'];?></label></a></li>
										  <?php  } } ?>
									  </ul>
									</div>
								  </td>
							 <?php  if(($mindex+1)%4==0&&$mindex>0) { ?>
							  </tr>
							 <?php  } ?>
							<?php  $mindex++;?>
						  <?php  } } ?>
		  </tbody>
	</table>
	
</div>
</div>
<div class="panel we7-panel" style="margin-bottom:10px;">
	<div class="panel-heading">活动筛选</div>
	<div class="panel-body we7-padding">
		<form action="./index.php" method="get" class="we7-form" role="form" id="form1">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="meepo_xianchang" />
			<input type="hidden" name="do" value="sqldata" />
			<input type="hidden" name="op" value="deldata" />
			<div class="form-group">
				<label class="col-sm-2 control-label">活动标题</label>
				<div class="col-sm-5">
						<input type="text" class="form-control" name="keyword" value="<?php  echo $keyword;?>">
				</div>
				<div class="pull-right col-sm-5">
					<input class="btn btn-primary" id="" type="submit" value="搜索">
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="panel we7-panel">
<div class="panel-heading" style="color:red;font-size:20px;">活动选取</div>
<div class="panel-body">
	<table class="table we7-table" style="margin-bottom:10px;">
				<thead class="navbar-inner">
					<tr>
					   <th style="width:10%;text-align:center">选择</th>
					   <th style="width:20%;text-align:center">所属用户</th>
					   <th style="width:20%;text-align:center">活动名称</th>
					   <th style="width:25%;text-align:center">用户</th>
					   <th style="width:25%;text-align:center">签到</th>
					</tr>
					
				</thead>
				<tbody class="sys_rids">
					<?php  if(is_array($list)) { foreach($list as $item) { ?>
					<tr>
						<td>
							<div class="we7-form">
								<input id="hdid[<?php  echo $item['id'];?>]" type="checkbox" we7-check-all="1"  name="hdid[]" value="<?php  echo $item['id'];?>">
								<label for="hdid[<?php  echo $item['id'];?>]"> </label>
							</div>
						</td>
						<td class="text-center">
							<span class="text-error"><?php  echo $item['uid_username'];?></span>
						</td>
						<td class="text-center">
							<span class="text-info"><?php  echo $item['title'];?></span>
						</td>
						<td class="text-center">
							<span class="label label-success"><?php  echo $item['users'];?>人</span>
						</td>
						<td class="text-center">
							<span class="label label-info"><?php  echo $item['qd_users'];?>人</span>
						</td>
						
					</tr>
					<?php  } } ?>
				</tbody>
				<tfoot class="navbar-inner">
					<tr>
					  <th colspan="5" style="padding:0">
						<div class="we7-form" style="background-color: #f4f5f9!important;padding:10px 10px 10px 60px;">
						  <input id="sys_rids" type="checkbox" name="sys_rids" onchange="selectall(this)">
						  <label for="sys_rids" class=" we7-margin-horizontal-none">全选(请一定看清楚再选)</label>
						</div>
					  </th>
					</tr>
				</tfoot>
	</table>
	<div class="form-group">
		<label class="col-sm-1 col-md-1 control-label"></label>
		<div class="col-sm-11 col-md-11 col-xs-12">
			<button class="btn btn-danger delselect"><i class="fa fa-trash"></i> 确认清除</button>
		</div>
	</div>
	<div class="pager_box">
		<?php  echo $pager;?>
	</div>
</div>
</div>

<script>
	$(function() {
		//模块下拉框
		$('.sys_total_module .dropdown span').hover(function(){
			var _this = $(this);
			$(this).parent().addClass('open').find('.dropdown-menu').show();
			$(this).parent().find('.dropdown-menu').hover(
				function(){$(this).show();$(this).parent().addClass('open')},
				function(){$(this).hide();$(this).parent().removeClass('open');}
			);
		},function(){
			$(this).parent().removeClass('open').find('.dropdown-menu').hide();
		});
		$('.dropdown span :checkbox').click(function(e){
			var _parent = $(this).parents('.dropdown');
			_parent.find('.dropdown-menu :checkbox').prop('checked', $(this).prop('checked'));
		});

		$('.dropdown-menu').on('click', ':checkbox', function(){
			if(!$(this).prop('checked')) {
				var i = 0;
				$.each($(this).parents('li').siblings(), function(){
					if($(this).find(':checkbox').prop('checked')) {
						i ++;
					}
				});
				if(!i) {
					$(this).parents('.dropdown').find('span :checkbox').prop('checked', false);
				}
			} else {
				
				$(this).parents('.dropdown').find('span :checkbox').prop('checked', true);
			}
		});
		$(".delselect").on('click',function(){
			var modules = $('.moduleSpan input[type=checkbox]:checked');
			if(modules.length<=0){
				return layer.msg('请选取功能!');
				
			}
			var selectrids = $('.sys_rids input[type=checkbox]:checked');
			if(selectrids.length<=0){
				return layer.msg('请选取活动!');
			}
			var moduleLi = $('.moduleLi input[type=checkbox]:checked');
			if(moduleLi.length<=0){
				return layer.msg('请选择功能所对应的子项!');
			}
			var PostModule = [];
			var moduleGn = {};
			modules.each(function(i){//把所有被选中的复选框的值存入数组
				 var module = $(this).val();
				 PostModule.push(module);
				 var moduleLiEle = $(this.parentNode.parentNode).find('.moduleLi input[type=checkbox]:checked');
				 if(moduleLiEle.length>0){
					var module_son = [];
					moduleLiEle.each(function(i){
						module_son.push($(this).val());
					})
					moduleGn[module] = module_son;
				 }
			})
			var PostRid = [];
			selectrids.each(function(i){//把所有被选中的复选框的值存入数组
				 PostRid.push($(this).val());
			})
			layer.confirm('清除后将无法恢复，确定要清除所选活动的数据么？', {
				title: ['警告', 'font-size:18px;'],
				closeBtn:0,
				shade :0.6,
				move:false,
				btn: ['确定清除','让我再想想'] //按钮
			}, function(){
					layer.msg('正在拼命清理数据中，切勿关闭本页面....', {
					  icon: 16,
					  shade: 0.01,
					  time:0,
					  shade: [0.8, '#393D49']
					});
					var postData=  {};
					postData.groupmodule = PostModule;
					postData.hdid = PostRid;
					postData.moduleGn = moduleGn;
					$.ajax({
						 type: "POST",
						 url: "<?php  echo $this->createWebUrl('sqldata',array('op'=>'deldataAll'))?>",
						 data: postData,
						 dataType: "json",
						 success: function(json){
							layer.closeAll();
							if(json.errno==0){
								layer.msg('清除成功');
								setTimeout(function(){
									window.location.reload();
								},300);
							}else{
								layer.msg(json.message)
							}
						 }
					 });
			}, function(){
				layer.closeAll();
			});
			
        }); 
	});
	function selectall(obj){
		var classname = $(obj).attr("name");
		$('.'+classname+' input:checkbox').each(function() {
			$(this)[0].checked = obj.checked ? true : false;
		});
	}	
</script>
<?php  } ?>
<?php  include $this->template('common/_footer')?>