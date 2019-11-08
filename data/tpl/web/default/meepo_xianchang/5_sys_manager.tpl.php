<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<style>
.qx_select label{margin-top:0px;}
.sys_control_ul li{float:left;margin-right:10px;}
</style>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='sys_manager' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_manager',array('op'=>'list'))?>"><i class="fa fa-users"></i> 管理员</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_manager' && $op=='edit') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_manager',array('op'=>'edit'))?>"><i class="fa fa-user-plus"></i> <?php  if(empty($user_id)) { ?>新增<?php  } else { ?>编辑<?php  } ?>管理员</a>
	</li>
</ul>
<?php  if($op=='list') { ?>
<div class="panel panel-default">
	<div class="panel-body">
		<form action="" class="form-inline  pull-left" method="get">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="meepo_xianchang" />
			<input type="hidden" name="do" value="sys_manager" />
			<div class="input-group form-group" style="width: 400px;">
				<input type="text" name="username" value="<?php  echo $_GPC['username'];?>" class="form-control" placeholder="请输入用户名称">
				<span class="input-group-btn"><button class="btn btn-default"><i class="fa fa-search"></i></button></span>
			</div>
		</form>
	</div>
</div>
<!--manager_lists--->
<div class="panel panel-default">
	<div class="panel-body">
		<table class="table table-hover">
			<thead class="navbar-inner">
				<tr>
					<th style="width:30%">用户名称</th>
					<th style="width:50%">用户权限</th>
					<th style="width:20%">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($lists)) { foreach($lists as $item) { ?>
				
				<tr>
				    <td>
						<p><span class="label label-success"><?php  echo $item['username'];?></span></p>
					</td>
					<td>
					<?php  $item['sys_control'] = iunserializer($item['sys_control']);?>
						<div class="gn_list">
							<ul class="sys_control_ul">
								<?php  if(is_array($item['sys_control'])) { foreach($item['sys_control'] as $v) { ?>
									<li><span class="label label-success"><?php  echo $this->get_syscontrol($v)?></span></li>
								<?php  } } ?>
							</ul>
						</div>
					</td>
					<td>
						<a class="btn btn-success" href="<?php  echo $this->createWebUrl('sys_manager',array('op'=>'edit','user_id'=>$item['id']))?>"> <i class="fa fa-edit"></i>编辑</a>
						<a class="btn btn-danger" href="<?php  echo $this->createWebUrl('sys_manager',array('op'=>'del','user_id'=>$item['id']))?>" onclick="return confirm('删除将无法恢复，确认吗？');return false;"> <i class="fa fa-times"></i>删除</a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
		</table>
		<div class="pager_box">
			<?php  echo $pager;?>
		</div>
</div>
</div><!--manager-list-->
<?php  } else if($op=='edit') { ?>
<form action="" method="post" class="form-horizontal sys_manage_form" onsubmit="return check_select();" >
<input type="hidden" value="<?php  echo $list['id'];?>"  name="user_id" />
<input type="hidden" value="<?php  echo $list['username'];?>" class="username" name="username" />
<input type="hidden" value="<?php  echo $list['uid'];?>" class="uid" name="uid" />
<div class="panel panel-default">
			<div class="panel-heading">
				<span class="label label-danger">仅可选择当前公众号的操作员或是管理员设置为系统管理员</span>
			</div>	
			<div class="panel-body">
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
					<div class="col-sm-9">
						<div class="label label-success" id="pick_manage_user" style="margin:10px;padding:10px;"><i class="fa fa-external-link"></i> 点击选择用户</div>
						当前已选用户: <span class="label label-danger had_select_user"><?php  if(!empty($list['username'])) { ?><?php  echo $list['username'];?><?php  } ?></span>
					</div>
					
				</div>
				<div class="form-group qx_select">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">权限选择</label>
					<div class="col-sm-9">
						<?php  if(is_array($this->get_syscontrol('all',2))) { foreach($this->get_syscontrol('all',2) as $k => $b) { ?>
							 <?php  if($k=='sys_adv') { ?>
							   <?php  if(!is_error($this->adv_check())) { ?>
								  <label class="checkbox radio-inline">
									<input type="checkbox" name="sys_control[]"  value="<?php  echo $k;?>" <?php  if(in_array($k,$sys_control)) { ?>checked<?php  } ?>> <?php  echo $b;?>
								  </label>
							   <?php  } ?>
							 <?php  } else { ?>
							  <label class="checkbox radio-inline">
								<input type="checkbox" name="sys_control[]"  value="<?php  echo $k;?>" <?php  if(in_array($k,$sys_control)) { ?>checked<?php  } ?>> <?php  echo $b;?>
							  </label>
							 <?php  } ?>
						<?php  } } ?>
						<span class="help-block">权限选择</strong></span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
			
</div>
</form>
<script type="text/javascript">
require(['../../../../addons/meepo_xianchang/template/resource/js/manage_users', 'bootstrap'], function(sys_manage){
	$(function(){
		$('#pick_manage_user').click(function(){
			sys_manage.user.browser(function(us){
					
			},{mode:'invisible',direct:'1'});
		});
	});
});
</script>
<script>
function check_select(){
	
	var username = $(".sys_manage_form .username").val();
	var uid = $(".sys_manage_form .uid").val();
	if(username=='' || uid==''){
		 util.message('请选择用户.', '', 'error');
		 return false;
	}
	var sys_control = $("input:checkbox[name='sys_control[]']:checked");
	if(sys_control.length<=0){
		 util.message('请选择权限功能.', '', 'error');
		 return false;
	}
	return true;
}
</script>
<?php  } ?>
<?php  include $this->template('common/_footer')?>
