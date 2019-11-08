<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='account_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('account_manage',array('op'=>'list'))?>"><i class="fa fa-file"></i> 账号列表</a>
	</li>
	<li <?php  if($_GPC['do']=='account_manage' && $op=='groups') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('account_manage',array('op'=>'groups'))?>"><i class="fa fa-file"></i> 用户组列表</a>
	</li>
	<?php  if($op=='editgroup') { ?>
	<li <?php  if($_GPC['do']=='account_manage' && $op=='editgroup') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('account_manage',array('op'=>'editgroup'))?>"><i class="fa fa-<?php  if($group) { ?>edit<?php  } else { ?>plus<?php  } ?>"></i> <?php  if($group) { ?>编辑<?php  } else { ?>新增<?php  } ?>用户组</a>
	</li>
	<?php  } ?>
	<?php  if($account_uid&&$op=='tx_config') { ?>
	<li <?php  if($_GPC['do']=='account_manage' && $op=='tx_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('account_manage',array('op'=>'tx_config'))?>"><i class="fa fa-cog"></i> 账户设置</a>
	</li>
	<?php  } ?>
	<?php  if($account_uid&&$op=='account_mima') { ?>
	<li <?php  if($_GPC['do']=='account_manage' && $op=='account_mima') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('account_manage',array('op'=>'account_mima'))?>"><i class="fa fa-lock"></i> 密码设置</a>
	</li>
	<?php  } ?>
</ul>
<?php  if($op == 'list') { ?>
<div class="panel panel-default">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form" id="form1">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="meepo_xianchang" />
			<input type="hidden" name="do" value="account_manage" />
			<div class="form-group">
				<label class="col-xs-6 col-sm-4 col-md-4 col-lg-2 control-label">用户昵称</label>
				<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
					<input class="form-control" name="username"  type="text" value="<?php  echo $_GPC['username'];?>" placeholder="请输入用户昵称">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-6 col-sm-4 col-md-4 col-lg-2 control-label">手机号码</label>
				<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
					<input class="form-control" name="mobile"  type="num" value="<?php  echo $_GPC['mobile'];?>" placeholder="请输入用户手机号码">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label"></label>
				<div class="col-sm-8 col-lg-9 col-xs-12">
					<input class="btn btn-primary"  type="submit" value="搜索">
				</div>
			</div>
		</form>
	</div>
</div>
<form action="" method="post" class="form-horizontal" role="form" ng-controller="formCtrl" id="form2">
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="label label-success">系统账号管理</span><br><br>
			<span class="label label-danger">仅仅显示当前公众号的管理员或操作员</span><br><br>
			<span class="label label-danger">按注册时间倒序排序</span>
		</div>
		<div class="panel-body">
			<table class="table we7-table" style="display:auto;">
				<thead class="navbar-inner">
					<tr >
					   <th style="width:10%;text-align:center">用户</th>
					   <th style="width:15%;text-align:center">创建活动</th>
					   <th style="width:12%;text-align:center">手机号码</th>
					   <th style="width:14%;text-align:center">霸屏收入</th>
					   <th style="width:14%;text-align:center">报名收入</th>
					   <th style="width:10%;text-align:center">红包账户</th>
					   <th style="width:15%;text-align:center">操作</th>
					</tr>
				</thead>

				<tbody>
					<?php  if(is_array($accounts)) { foreach($accounts as $item) { ?>
					<tr>

					 <td class="row-hover" style="text-align:center;overflow: visible;">
							<p><?php  echo $item['username']?></p>
							<p><?php  echo $item['groupname']?></p>
							<?php  if($item['uid']!=1) { ?>
							<div class="acounts_box dropdown"> 
							<a href="javascript:;" class="dropdown-toggle accounts_box_a" style="padding:0" data-toggle="dropdown" aria-expanded="false">
								<p><span class="label label-<?php  if($item['status']==1) { ?>info<?php  } else if($item['status']==2) { ?>success<?php  } else if($item['status']==3) { ?>danger<?php  } ?>"><?php  if($item['status']==1) { ?>待审核<?php  } else if($item['status']==2) { ?>正常<?php  } else if($item['status']==3) { ?>被禁止<?php  } ?></span><i class="fa fa-angle-down"></i></p>
							</a>
								<ul class="dropdown-menu" style="min-width:100px;">
								 <?php  if($item['status']==1) { ?>
									<li><a href="<?php  echo $this->createWebUrl('account_manage',array('ac_uid'=>$item['uid'],'op'=>'shenhe'))?>"><span class="label label-success"><i class="fa fa-play"></i> 审核</span></a></li>
								 <?php  } else if($item['status']==2) { ?>
									<li><a href="<?php  echo $this->createWebUrl('account_manage',array('ac_uid'=>$item['uid'],'op'=>'jingzhi'))?>"><span class="label label-danger"><i class="fa fa-pause"></i> 禁止</span></a></li>
								 <?php  } else if($item['status']==3) { ?>
									<li><a href="<?php  echo $this->createWebUrl('account_manage',array('ac_uid'=>$item['uid'],'op'=>'open'))?>"><span class="label label-success"><i class="fa fa-play"></i> 开启</span></a></li>
								 <?php  } ?>
								</ul>
							  </div>
							<?php  } ?>
					 </td>
					 <td class="row-hover" style="text-align:center">
							<p><span class="label label-success"><?php  echo intval($item['activity_nums'])?>个</span></p>
							<?php  if(is_array($item['activitys'])) { foreach($item['activitys'] as $v) { ?>
							<p><a href="<?php  echo $this->createWebUrl('user_manage',array('id'=>$v['id']))?>" style="color:blue"><?php  echo $v['title'];?></a></p>
							<?php  } } ?>
					 </td>
					 <td class="row-hover" style="text-align:center">
							<?php  if(empty($item['mobile'])) { ?>未填写<?php  } else { ?><?php  echo $item['mobile'];?><?php  } ?>
					 </td>
					  <td class="row-hover" style="text-align:center">
							<span class="label label-success">总收入:<?php  if(empty($item['account_money'])) { ?>0.00<?php  } else { ?><?php  echo $item['account_money'];?><?php  } ?>元</span>
							<br><br><span class="label label-danger">已提现:<?php  if(empty($item['tx_money'])) { ?>0.00<?php  } else { ?><?php  echo $item['tx_money'];?><?php  } ?>元</span>
							<br><br><span class="label label-info">待提现:<?php  if(empty($item['can_tx_money'])) { ?>0.00<?php  } else { ?><?php  echo $item['can_tx_money'];?><?php  } ?>元</span>
					 </td>
					 <td class="row-hover" style="text-align:center">
							<span class="label label-success">总收入:<?php  if(empty($item['bmaccount_money'])) { ?>0.00<?php  } else { ?><?php  echo $item['bmaccount_money'];?><?php  } ?>元</span>
							<br><br><span class="label label-danger">已提现:<?php  if(empty($item['bmtx_money'])) { ?>0.00<?php  } else { ?><?php  echo $item['bmtx_money'];?><?php  } ?>元</span>
							<br><br><span class="label label-info">待提现:<?php  if(empty($item['bmcan_tx_money'])) { ?>0.00<?php  } else { ?><?php  echo $item['bmcan_tx_money'];?><?php  } ?>元</span>
					 </td>
					 
					 <td class="row-hover" style="text-align:center">
							<span class="label label-success"><?php  echo $item['redpack_money'];?>元</span>
							<?php  if($_W['isfounder']) { ?><br><br><p><a class="btn btn-danger jjmoney" href="javascript:;" data-uid="<?php  echo $item['uid'];?>" data-uidname="<?php  echo $item['username']?>">加减余额</a></p><?php  } ?>
					 </td>
					 <td class="row-hover" style="text-align:center">
							<a class="btn btn-success" href="<?php  echo $this->createWebUrl('account_manage',array('ac_uid'=>$item['uid'],'op'=>'tx_config'))?>">账号设置</a><br><br>
							<a class="btn btn-success" href="<?php  echo $this->createWebUrl('account_manage',array('ac_uid'=>$item['uid'],'op'=>'account_mima'))?>">密码设置</a>
					 </td>
					<?php  } } ?>
				</tbody>
			</table>
			<div class="pager_box">
				<?php  echo $pager;?>
			</div>
		</div>
	</div>
</form>
<?php  } else if($op=='tx_config') { ?>
<form action="" method="post" class="form-horizontal" onsubmit="return <?php  if($op=='sys') { ?>check_sys();<?php  } else { ?>check_module();<?php  } ?>" id="form1">
	<input type="hidden" value="<?php  echo $tx_config['id'];?>"  name="tx_config_id">
	<input type="hidden" value="<?php  echo $account_uid;?>"  name="ac_uid">
	<div class="panel panel-default">
	<div class="panel-heading">用户组设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">用户组选择</span></label>
					<div class="col-sm-9">
						<select name="groupid" class='form-control'>
							 <option   value="-1"  selected>===请选择模式====</option>
							 <?php  if(is_array($groups)) { foreach($groups as $row) { ?>
							 <option   value="<?php  echo $row['id'];?>" <?php  if($tx_config['groupid']==$row['id']) { ?>selected<?php  } ?> ><?php  echo $row['groupname'];?></option>
							 <?php  } } ?>
						</select>
						<span class="help-block">请选择用户组</span>
					</div>
				</div>
	</div>
	</div>
	<div class="panel panel-default">
	<div class="panel-heading">霸屏上墙收入提现设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏上墙收入提现最小金额</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="num" name="tx_min_money" class="form-control"  value="<?php  echo $tx_config['tx_min_money'];?>" />
							<span class="input-group-addon">元</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏上墙收入提现时间间隔</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="num" name="tx_pl" class="form-control"  value="<?php  echo $tx_config['tx_pl'];?>"  />
							<span class="input-group-addon">天</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏上墙收入提现费率</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $tx_config['tx_fl'];?>" class="form-control" name="tx_fl" >
						<span class="help-block">请填写小于1的小数、保留2为小数 如:填写为0.10 即为10%</span>
					</div>
				</div>
	</div>
	</div>
	<div class="panel panel-default">
	<div class="panel-heading">账户充值红包账号费率设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包账户充值费率</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $tx_config['hb_fl'];?>" class="form-control" name="hb_fl" >
						<span class="help-block">请填写小于1的小数、保留2为小数 如:填写为0.10 即为10%</span>
					</div>
				</div>
	</div>
	</div>
	<div class="panel panel-default">
	<div class="panel-heading">会议报名收入提现设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">会议报名收入提现最小金额</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="num" name="bmtx_min_money" class="form-control"  value="<?php  echo $tx_config['bmtx_min_money'];?>" />
							<span class="input-group-addon">元</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">会议报名收入提现时间间隔</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="num" name="bmtx_pl" class="form-control"  value="<?php  echo $tx_config['bmtx_pl'];?>"  />
							<span class="input-group-addon">天</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">会议报名收入提现费率</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $tx_config['bmtx_fl'];?>" class="form-control" name="bmtx_fl" >
						<span class="help-block">请填写小于1的小数、保留2为小数 如:填写为0.10 即为10%</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
	</div>
		
</div>
</form>
<?php  } else if($op=='account_mima') { ?>
<form action="" method="post" class="form-horizontal" id="form1" onsubmit="return check();">
<input type="hidden" value="<?php  echo $account_uid;?>"  name="ac_uid">
<div class="panel panel-default">
	<div class="panel-heading">密码设置</div>	
	<div class="panel-body">
		<div class="form-group">
			<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">新密码</label>
			<div class="col-sm-10 col-xs-12">
				<input id="password" name="password" type="password" class="form-control" autocomplete="off" value="" />
				<span class="help-block">请填写密码，最小长度为 8 个字符。如果不更改密码此处请留空</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">确认新密码</label>
				<div class="col-sm-10 col-xs-12">
				<input id="repassword" type="password" class="form-control" value="" autocomplete="off" />
				<span class="help-block">重复输入密码，确认正确输入。如果不更改密码此处请留空</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 col-md-2 control-label"></label>
			<div class="col-sm-6 col-md-8 col-xs-12">
				<input type="submit" name="user_submit" value="确认" class="btn btn-primary col-lg-1" />
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		</div>
	</div>
	</div>
</form>
<script>
function check(){
		if($('#password').val().trim() != '') {
			if($('#password').val().length < 8) {
				util.message('新密码长度不能小于8个字符.', '', 'error');
				return false;
			}
			if($('#password').val() != $('#repassword').val()) {
				util.message('两次输入的密码不一致.', '', 'error');
				return false;
			}
		}else{
			util.message('请先输入要修改的密码.', '', 'error');
			return false;
		}
		return true;
}
</script>
<?php  } else if($op=='groups') { ?>
<style>
tbody td{text-align:Center}
</style>
	<div class="panel panel-default">
		<div class="panel-heading">
			用户组列表
		</div>
		<div class="panel-body">
			<table class="table table-hover" style="display:auto;">
				<thead class="navbar-inner">
					<tr >
					   <th style="width:10%;text-align:center">用户组id</th>
					   <th style="width:15%;text-align:center">名称</th>
					   <th style="width:15%;text-align:center">成员个数</th>
					   <th style="width:15%;text-align:center">可创建活动</th>
					   <th style="width:15%;text-align:center">是否为默认组</th>
					   <th style="width:30%;text-align:center">操作</th>
					</tr>
				</thead>

				<tbody>
					<?php  if(is_array($groups)) { foreach($groups as $g) { ?>
					<tr>
					<td><?php  echo $g['id'];?></td>
					<td><?php  echo $g['groupname'];?></td>
					<?php  $membersnum = pdo_fetchcolumn("SELECT COUNT(id) FROM ".tablename($this->manager_tx_config)." WHERE groupid=:groupid",array(":groupid"=>$g['id']));?>
					<td><?php  if($membersnum>0) { ?><span class="label label-danger"><?php  echo $membersnum;?>个</span><?php  } else { ?><span class="label label-default">无</span><?php  } ?></td>
					<td><?php  if($g['maxnums']>0) { ?><span class="label label-danger"><?php  echo $g['maxnums'];?>个</span><?php  } else { ?><span class="label label-success">无限制</span><?php  } ?></td>
					<td><span class="label label-<?php  if($g['isdefault']==1) { ?>danger<?php  } else { ?>default<?php  } ?>"><?php  if($g['isdefault']==1) { ?>是<?php  } else { ?>否<?php  } ?></span></td>
					<td>
						<a class="btn btn-success" href="<?php  echo $this->createWebUrl('account_manage',array('op'=>'editgroup','groupid'=>$g['id']))?>"
							ng-mouseenter="tooltip()" data-toggle="tooltip" data-placement="top" title="编辑" >编辑
							<i class="fa fa-edit"></i>
						</a>
						<a class="btn btn-danger" href="<?php  echo $this->createWebUrl('account_manage',array('op'=>'delgroup','groupid'=>$g['id']))?>"
							ng-mouseenter="tooltip()" data-toggle="tooltip" data-placement="top" title="删除" onclick="return confirm('删除此用户组将使该用户组下所有用户转到默认用户组，并且将无法恢复，确认吗？');return false;">删除
							<i class="fa fa-times"></i>
						</a>	
					</td>
					</tr>
					<?php  } } ?>
				</tbody>
			</table>
		</div>
		<div class="panel-heading">
			<div class="btn-group"><a class="btn btn-success" href="<?php  echo $this->createWebUrl('account_manage', array('op'=>'editgroup'))?>"><i class="fa fa-plus"></i> 新增用户组</a></div>
		</div>
	</div>
<?php  } else if($op=='editgroup') { ?>
<form action="" method="post" class="form-horizontal" id="form1" onsubmit="return checkgroup();">
<input type="hidden" value="<?php  echo $group['id'];?>"  name="groupid">
<div class="panel panel-default">	
	<div class="panel-body">
		<div class="form-group">
			<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">用户组名称</label>
			<div class="col-sm-10 col-xs-12">
				<input id="password" name="groupname" type="text" class="form-control" autocomplete="off" value="<?php  echo $group['groupname'];?>" />
				<span class="help-block">用户组名称</span>
			</div>
		</div>
		<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2  control-label">可创建活动数</label>
				<div class="col-sm-9 ">
					<div class="input-group">
						<input type="text" name="maxnums"  class="form-control" value="<?php  echo $group['maxnums'];?>">
						<span class="input-group-addon">个</span>
					</div>
					<span class="help-block">可创建活动数 必须填写整数、0即为不限制数量</span>
				</div>
		</div>
		<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2  control-label">可用模块</label>
				<div class="col-sm-9 ">
					<table class="table we7-table table-hover we7-form">
					  <thead>
						<tr class="text-left">
						  <th colspan="4" class="text-left">
							<div class="">
							  <input id="check-sysModule_total" type="checkbox" name="sys_total_module" onchange="selectall(this)">
							  <label for="check-sysModule_total" class=" we7-margin-horizontal-none">全选</label></div>
						  </th>
						</tr>
					  </thead>
					  <tbody class="sys_total_module">
					  <?php  $mindex = 0;?>
					  <?php  if(is_array($sys_modules)) { foreach($sys_modules as $mkey => $mval) { ?>
					    <?php  if($mval['isshow']==1) { ?>
						 <?php  if($mindex%4==0) { ?>
						  <tr>
						 <?php  } ?>
							  <td class="text-left vertical-middle" style="overflow:inherit;">
								<div class="dropdown system-select-dropdown">
								  <span>
									<input id="check-sysModule_<?php  echo $mkey;?>" type="checkbox" we7-check-all="1" value="<?php  echo $mkey;?>" name="groupcontrol[]" autocomplete="off" <?php  if(in_array($mkey,$groupModules)) { ?>checked<?php  } ?>>
									<label for="check-sysModule_<?php  echo $mkey;?>" class="we7-margin-horizontal-none" data-toggle="tooltip" data-original-title="" title=""><?php  echo $mval['name'];?></label>
								  </span>
								</div>
							  </td>
						 <?php  if(($mindex+1)%4==0&&$mindex>0) { ?>
						  </tr>
						 <?php  } ?>
						 <?php  $mindex++;?>
						 <?php  } ?>
						<?php  } } ?>
					  </tbody>
					</table>
					<span class="help-block">可用模块</span>
				</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否为默认用户组</label>
			<div class="col-sm-9 ">
				<label class="radio-inline">
					<input type="radio" name="isdefault" value="1"  <?php  if($group['isdefault'] == '1') { ?>checked="true"<?php  } ?>>是
				</label>
				<label class="radio-inline">
					<input type="radio" name="isdefault" value="2"  <?php  if($group['isdefault']== '2') { ?>checked="true"<?php  } ?> >否
				</label>
				<span class="help-block">默认组即为用户通过独立注册地址注册的用户均统一为默认组用户</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 col-md-2 control-label"></label>
			<div class="col-sm-6 col-md-8 col-xs-12">
				<input type="submit" name="submit" value="确认" class="btn btn-primary col-lg-1" />
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		</div>
	</div>
	</div>
</form>
<script>
	$(function() {
	$('.table>tbody').each(function() {
		var a = true;
		$(this).find('input:checkbox').each(function() {
			if($(this)[0].checked != true) {
				a = false;
				return false;
			}
		});
		if(a) $('input[name='+$(this).attr('class')+']:checkbox')[0].checked = true;
	});
	});
	function selectall(obj){
		var classname = $(obj).attr("name");
		$('.'+classname+' input:checkbox').each(function() {
			$(this)[0].checked = obj.checked ? true : false;
		});
	}
	function checkgroup(){
		var name = $("input[name='groupname']").val();
		if(name==''){
			util.message('用户组名称必须填写！');
			return false;
		}
		var maxnums = $("input[name='maxnums']").val();
		if(maxnums==''){
			util.message('可创建活动数量必须填写！');
			return false;
		}
		return true;
	}
</script>
<?php  } ?>
<?php  if($_W['isfounder']) { ?>
<script>
$(function(){
	$(".jjmoney").on('click',function(){
		 var touid = $(this).attr('data-uid');
		 var uidName = $(this).attr('data-uidname');
		if(touid){
			layer.open({
				title: ['加减红包账号余额，务必谨慎操作', 'font-size:18px;color:red'],
				closeBtn:0,
				content: '<div class="panel panel-default add-jian-panel"><div class="panel-body"><div class="form-group"><div class="col-sm-9"><label class="radio-inline"><input type="radio" name="addtype" value="1" checked >加余额</label><label class="radio-inline"><input type="radio" name="addtype" value="2">减余额</label></div></div><br><div class="form-group"><div class="col-sm-9 "><div class="input-group"><input type="text" name="addmoney" class="form-control addmoney" value="0"><span class="input-group-addon">元</span></div></div></div><br><br><div class="form-group"><div class="col-sm-9"><input type="text" value="" placeholder="请输入操作理由" class="form-control addreason" name="addreason"></div></div></div></div>',
				shade :0.6,
				move:false,
				area: ['500px', 'auto'],
				btn: ['确定操作','让我再想想'],
				yes:function(){
					var addtype = $('.add-jian-panel input:radio[name="addtype"]:checked').val();
					if(addtype==''||typeof addtype ==='undefined'){
						alert('请选择操作类型，到底是加余额还是减余额？');
						return;
					}
					var addmoney = $('.add-jian-panel .addmoney').val();
					if(addmoney=='' || addmoney<=0){
						alert('增减数目必须大于0');
						return;
					}
					var addreason = $('.add-jian-panel .addreason').val();
					if(addreason==''){
						alert('操作理由必须填写');
						return;
					}
					if(addtype=='1'){
						var ctitle = uidName+'的红包账号新增'+addmoney+'元？';
					}else{
						var ctitle = uidName+'的红包账号减去'+addmoney+'元？';
					}
					layer.confirm('您真的想好了? 要给'+ctitle, {
					  btn: ['我确定','取消']
					}, function(){
						layer.msg('正在拼命提交数据中，切勿关闭....', {
						  icon: 16,
						  shade: 0.01,
						  time:0,
						  shade: [0.8, '#393D49']
						});
						$.ajax({
							 type: "POST",
							 url: "<?php  echo $this->createWebUrl('founderaddmoney')?>",
							 data:{touid:touid,addtype:addtype,addmoney:addmoney,addreason:addreason},
							 dataType: "json",
							 success: function(json){
								layer.closeAll();
								if(json.errno==0){
									layer.msg('操作成功');
									setTimeout(function(){
										window.location.reload();
									},300);
								}else if(json.errno==-2){
									layer.msg('网络超时。操作失败');
								}else{
									layer.msg(json.message)
								}
							 }
						 });
					}, function(index){
						layer.close(index);
					});
				},
				cancel:function(){
					layer.closeAll();
				}
			});
		}else{
			layer.msg('用户uid不存在，操作失败!');
		}
	});
})
</script>
<?php  } ?>
<?php  include $this->template('common/_footer')?>