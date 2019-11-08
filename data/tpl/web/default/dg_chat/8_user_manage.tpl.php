<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
.modal-body{padding:10px;}
</style>
<?php  if(empty($info_id)) { ?>
<div class="main">
<div class="panel-heading">
  <div class="row-fluid">
	<div class="span8 control-group">
		<a class="btn btn-primary index_all" href="javascript:setsubmit()">
			导出
		</a>
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
					<th style="width:90px">ID昵称</th>
					<th style="width:70px">头像</th>
					<th style="width:90px">推荐人</th>
					<th>姓名</th>
					<th>手机号</th>
					<th>支付宝号</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($user_list)) { foreach($user_list as $row) { ?>
				<tr>
					<td>ID:<?php  echo $row['id'];?><br><span title="<?php  echo $row['nickname'];?>"><?php  echo $row['nickname'];?></span></td>
					<td><img alt="" src="<?php  echo $row['avatar'];?>" width='auto' style="max-width:50px; max-height:50px;" height='auto'></td>
					<td><?php  if($row['agent_id'] > 0 ) { ?><span title="推荐人ID:<?php  echo $row['agent_id'];?>"><?php  echo $row['agent_nickname'];?></span><br><img alt="" src="<?php  echo $row['agent_avatar'];?>" width='auto' style="max-width:50px; max-height:50px;" height='auto'><?php  } ?></td>
					<td><?php  echo $row['real_name'];?></td>
					<td><?php  echo $row['mobile'];?></td>
					<td><?php  echo $row['alipay_num'];?></td>
					<td>
						<a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('user_manage',array('id'=>$row['id']))?>" title="详细资料" data="<?php  echo $row['id'];?>"><i class="fa fa-eye"></i></a>

						<a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('user_manage',array('id'=>$row['id'] , 'op'=>'grade', 'page'=>$pindex))?>" title="" data-original-title="编辑"><i class="fa fa-edit"></i></a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
		</table>
	</div>
	</div>
	<?php  echo $pager;?>
</div>
<script>
	function setsubmit(){
		var conf=confirm("确认导出吗？确定后图片信息将不被导出");
		if(!conf){
			return false;
		}
		location.href = "<?php  echo $this->createWebUrl('download_info')?>";
	}
</script>
<?php  } else { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['id'] =='') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('user_manage')?>">用户管理</a></li>
</ul>
<div class="main">
 <form action="" method="post" class="form-horizontal form" id="setting-form">
		<div class="panel panel-default">

			<div class="panel-body">

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>姓名</label>
					<div class="col-sm-8">
						<input type="text" name="room_name1" class="form-control" value="<?php  echo $user_info['real_name'];?>" disabled/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>手机号</label>
					<div class="col-sm-8">
						<input type="text" name="room_name1" class="form-control" value="<?php  echo $user_info['mobile'];?>" disabled/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>支付宝号</label>
					<div class="col-sm-8">
						<input type="text" name="room_name1" class="form-control" value="<?php  echo $user_info['alipay_num'];?>" disabled/>
					</div>
				</div>
			<?php  if(is_array($custom_all)) { foreach($custom_all as $field) { ?>
			<?php  if($field['field_type']=='text') { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span><?php  echo $field['field_name'];?></label>
					<div class="col-sm-8">
						<input type="text" name="room_name1" class="form-control" value="<?php  echo $person_info[$field['id']];?>" disabled/>
					</div>
				</div>
			<?php  } else if($field['field_type'] == 'mobile') { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span><?php  echo $field['field_name'];?></label>
					<div class="col-sm-8">
						<input type="number" name="room_name2" class="form-control" value="<?php  echo $person_info[$field['id']];?>" disabled/>
					</div>
				</div>
			<?php  } else if($field['field_type'] == 'img') { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;">*</span><?php  echo $field['field_name'];?></label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('room_icon3', $person_info[$field['id']])?>
					</div>
				</div>
			<?php  } else { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span><?php  echo $field['field_name'];?></label>
					<div class="col-sm-8">
						<input type="number" name="room_name" class="form-control" value="<?php  echo $person_info[$field['id']];?>" disabled/>
					</div>
				</div>
			<?php  } ?>
			<?php  } } ?>
			</div>
		</div>
</div>
<script>
$(function(){
	$(".input-group-btn,.input-group").children().attr('disabled','disabled');
})
</script>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>