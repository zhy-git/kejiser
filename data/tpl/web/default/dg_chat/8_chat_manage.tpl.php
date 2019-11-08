<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
.modal-body{padding:0px;}
.table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{
  white-space:normal;
}
</style>

<div class="main">
<div class="panel panel-info">
		<div class="panel-heading">筛选</div>
		<div class="panel-body">
			<form  method="get" class="form-horizontal" role="form">				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">房间状态</label>
					<div class="col-sm-6 col-lg-8">
					<input type="hidden" name="c" value="site">
					<input type="hidden" name="a" value="entry">
					<input type="hidden" name="do" value="chat_manage">
					<input type="hidden" name="m" value="dg_chat">
						<select name="room_status" class="form-control">
							<option value="" selected="selected">不限</option>
							<option value="0"<?php  if('0' == $_GPC['room_status']) { ?> selected="selected"<?php  } ?>>待审核</option>
							<option value="-1"<?php  if('-1' == $_GPC['room_status']) { ?> selected="selected"<?php  } ?>>被禁用</option>
							<option value="1"<?php  if('1' == $_GPC['room_status']) { ?> selected="selected"<?php  } ?>>正常</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">查询关键词</label>
					<div class="col-sm-6 col-lg-8">
						<input class="form-control" name="keyword" id="" type="text" value="<?php  echo $_GPC['keyword'];?>" placeholder="请输入房间名称或者房间描述或者创建人昵称">
					</div>
					<div class="pull-right col-xs-12 col-sm-3 col-lg-2">
						<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="panel-heading">	
  <div class="row-fluid">
	<div class="span8 control-group">
		<a class="btn btn-primary index_all" href="<?php  echo $this->createWebUrl('room_create')?>">
			创建房间</a>
	</div>
	</div>
</div>
	
	<div class="panel panel-default">
	<div class="panel-heading">	
			<div class="row-fluid">
				<div class="span8 control-group">
					共计 <?php  echo $total;?> 条数据
				</div>
			</div>
		</div>
		<div class="panel-body table-responsive">
		<table class="table table-hover">
			<thead class="navbar-inner">
				<tr>
					<th style="width:65px;" align="center">图标</th>
					<th>房间号</th>
					<th>房间名</th>
					<th>排序</th>
					<th>创建人</th>
					<th>房间状态</th>
					<th>赞赏状态</th>
					<th>创建时间</th>
					<th style="width:200px;" align="center">操作</th>
				</tr>
			</thead>
			<tbody>

				<?php  if(is_array($records)) { foreach($records as $row) { ?>
				<tr>
					<td><img alt="" src="<?php  echo $row['room_icon'];?>" width='auto' style="max-width:50px; max-height:50px;" height='auto'></td>
					<td><?php  echo $row['room_id'];?></td>
				
					
					<td><a target="_blank" style="color:#3064bb" href="<?php  echo $this->createWebUrl('topic_manage',array('room_id'=>$row['room_id']))?>"><?php  echo $row['room_name'];?></a></td>
					<td><?php  echo $row['room_order'];?></td>
					<td><?php  echo $row['create_nickname'];?></td>
					<td><?php  if($row['room_status']==1) { ?>正常<?php  } else if($row['room_status']==0) { ?><span style="color:green">待审核</span><?php  } else { ?>被禁用<?php  } ?></td>
					<td><?php  if($row['reward_status']==1) { ?>开启<?php  } else { ?>未开启<?php  } ?></td>
					<td><?php  echo date('Y/m/d H:i:s', $row['create_time']);?></td>
					<td data="<?php  echo $row['id'];?>">
					 <label style="cursor:pointer;" class="label label-default <?php  if($row['is_top']=='1') { ?>label-info<?php  } ?>" onclick="setItemStatus(this,'top')">置顶</label>
					<a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('room_count',array('room_id'=>$row['room_id']))?>" title="" data-original-title="付费人员"><i class="fa fa-usd"></i></a>
					 <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('room_edit',array('room_id'=>$row['id']))?>"  title="" data-original-title="编辑"><i class="fa fa-edit"></i></a>
					 <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="javascript:" onclick="return setItemStatus(this,'del')" title="删除"><i class="fa fa-times"></i></a>
					 
					
					  
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
		</table>
	</div>
	</div>
	<?php  echo $pager;?>
</div>


<div class="modal fade" id="module-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="width:800px;top:100px;">
			<div class="modal-content">
				<form action="./index.php?c=extension&a=module&do=info&" method="post" enctype="multipart/form-data" class="form-horizontal form" id="form-info" style="margin-top: 10em; height:auto;">
					<input type="hidden" name="m" value=""/>
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4>房间详情</h4>
					</div>
					<div class="modal-body" style="padding:0px;">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 房间名</label>
							<div class="col-sm-9 col-xs-12">
								<input type="text" name="room_name" id="room_name" value="" class="form-control">
							</div>
						</div>
						
					</div>
					
					<div class="modal-body" style="padding:0px;">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 房间描述</label>
							<div class="col-sm-9 col-xs-12">
								<input type="text" name="room_desc" id="room_desc" value="" class="form-control">
							</div>
						</div>
					</div>
					
					
					<div class="modal-body" style="padding:0px;">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 排序</label>
							<div class="col-sm-9 col-xs-12">
								<input type="text" name="room_order" id="room_order" value="" class="form-control">
							</div>
						</div>
					</div>
					
					
					
					<div class="modal-body" style="padding:0px;">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 房间状态</label>
							<div class="col-sm-9 col-xs-12">
								<input type="hidden" name="m_room_id" id="m_room_id">
								<select id='m_room_status' class="form-control">
								 <option value="0">审核中</option>
								 <option value="-1">禁用</option>
								 <option value="1">正常</option>
								</select>
							</div>
						</div>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" id="btn_close" data-dismiss="modal">关闭</button>
						<button type="button" class="btn btn-danger" id="btn_edit" data-dismiss="modal">修改</button>
					</div>
				</form>
			</div>
		</div>
</div>
	
<script type="text/javascript">
function setItemStatus(obj,op){
	var row_id=$(obj).parents('td').attr('data');
	if(op=='del'){
		var conf=confirm("确认删除吗？删除后将不能恢复！");
		if(!conf){
			return false;
		}
		var data={};
		data.room_id=row_id;
		data.op='del';
		$.post(location.href,data,function(result){
			 location.href=location.href;
		});
	}
	
	if(op=='top'){
		var data={};
		data.room_id=row_id;
		data.op='top';
		$.post(location.href,data,function(result){
			if(result.top==1)
			    $(obj).addClass('label-info');
			else
				$(obj).removeClass('label-info');
		});
	}
	
	if(op=='edit'){
		var url=location.href;
	   $.post(location.href,{id:row_id},function(result){
		   var room=result.data;
		   $("#room_desc").val(room[0].room_desc);
		   $("#room_name").val(room[0].room_name);
		   $("#room_order").val(room[0].room_order);
		   $("#room_money").val(room[0].room_money);
		   $("#m_room_id").val(row_id);
		   $("#m_room_status").val(room[0].room_status);
	   });
	   $('#module-info').modal('show');
	}
	return false;
}

$(function(){
	$("#btn_edit").click(function(){
		var data={};
		data.room_desc=$("#room_desc").val();
		data.room_name=$("#room_name").val();
		data.room_id=$("#m_room_id").val();
		data.room_order=$("#room_order").val();
		data.room_status=$("#m_room_status").val();
		data.room_money=$("#room_money").val();
		data.op="edit";
		$.post(location.href,data,function(result){
			if(result.success==1){
			 location.href=location.href;
			}
		});
	});
});

</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>