<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
.modal-body{padding:10px;}
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
					<input type="hidden" name="do" value="series_manage">
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
		<a class="btn btn-primary index_all" href="<?php  echo $this->createWebUrl('series_add')?>">
			新建音乐作品</a>
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
					<th>音乐名称</th>
					<!-- <th>所属直播间名称</th> -->
					<th>创建人</th>
					<!-- <th>音乐价格</th> -->
					<!-- <th>课程计划（节）</th> -->
					<th>创建时间</th>
					<th style="width:300px;" align="center">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($records)) { foreach($records as $row) { ?>
				<tr>
					<td><img alt="" src="<?php  echo $row['room_icon'];?>" width='auto' style="max-width:50px; max-height:50px;" height='auto'></td>
					<td><a target="_blank" style="color:#3064bb" href="<?php  echo $this->createWebUrl('series_topic',array('series_id'=>$row['id']))?>"><?php  echo $row['room_name'];?></a></td>
					
					<!-- <td><a target="_blank" style="color:#3064bb" href="<?php  echo $this->createWebUrl('topic_manage',array('room_id'=>$row['series_id']))?>"><?php  echo $row['d_name'];?></a></td> -->
					<td><?php  echo $row['create_nickname'];?></td>
					<!-- <td><?php  echo $row['series_price'];?></td> -->
					<td><?php  echo date('Y/m/d H:i:s', $row['create_time']);?></td>
					<td><?php  if($row['is_status']==1) { ?><span style='color:green'>通过</span><?php  } else { ?><span style="color:red">未通过</span><?php  } ?></td>



					<td data="<?php  echo $row['id'];?>">
					<label style="cursor:pointer;" data="<?php  echo $row['id'];?>" class="label label-default <?php  if($row['is_index']=='1') { ?>label-info<?php  } ?>" onclick="setItemStatus(this,'index')">首页</label>
					 <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('series_edit',array('series_id'=>$row['id']))?>" title="" data-original-title="编辑"><i class="fa fa-edit"></i></a>
					 <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('series_topic',array('series_id'=>$row['id']))?>" title="" data-original-title="管理课程"><i class="fa fa-reorder"></i></a>
					 
					  <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('series_pay',array('series_id'=>$row['id']))?>"  title="付费人员"><i class="fa fa-usd"></i></a>
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


<div class="modal fade" id="module-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top: 100px;">
		<div class="modal-dialog" style="width:800px;top:270px;">
			<div class="modal-content">
				<form action="./index.php?c=extension&a=module&do=info&" method="post" enctype="multipart/form-data" class="form-horizontal form" id="form-info" >
					<input type="hidden" name="m" value=""/>
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4>房间详情</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 音乐名</label>
							<div class="col-sm-9 col-xs-12">
								<input type="text" name="room_name" id="room_name" value="" class="form-control">
							</div>
						</div>
						
					</div>
					
					<div class="modal-body">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 音乐描述</label>
							<div class="col-sm-9 col-xs-12">
								<input type="text" name="room_desc" id="room_desc" value="" class="form-control">
							</div>
						</div>
					</div>
					
					
					<div class="modal-body">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 排课计划</label>
							<div class="col-sm-9 col-xs-12">
								<input type="text" name="count_subject" id="count_subject" value="" class="form-control">
							</div>
						</div>
					</div>
					
					
					<div class="modal-body">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 音乐价格</label>
							<div class="col-sm-9 col-xs-12">
								<input type="text" name="series_price" id="series_price" value="" class="form-control">
							</div>
						</div>
					</div>
					
					<div class="modal-footer">
						<input type="hidden" name="m_room_id" id="m_room_id">
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

	if(op=='index'){
		var data={};
		data.room_id=row_id;
		data.op='index';
		$.post(location.href,data,function(result){
			if(result.is_index==1)
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
		   $("#count_subject").val(room[0].count_subject);
		   $("#m_room_id").val(row_id);
		   $("#series_price").val(room[0].series_price);
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
		data.count_subject=$("#count_subject").val();
		data.series_price=$("#series_price").val();
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