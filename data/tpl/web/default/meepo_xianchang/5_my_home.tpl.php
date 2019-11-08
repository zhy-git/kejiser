<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='my_home' && $op=='basic') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_home',array('op'=>'basic'))?>"><i class="fa fa-cog"></i> 基本信息</a>
	</li>
	<li <?php  if($_GPC['do']=='my_home' && $op=='security') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_home',array('op'=>'security'))?>"><i class="fa fa-lock"></i> 安全中心</a>
	</li>
</ul>
<?php  if($op=='basic') { ?>
<form action="" method="post" class="form-horizontal" role="form">
<div class="panel panel-default">
	<div class="panel-heading">基本信息</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">用户昵称</label>
					<div class="col-sm-10 col-xs-12">
						<input id="username" name="username" type="text" class="form-control"  value="<?php  echo $_user['username'];?>" readonly />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">用户头像</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('avatar', $_user_profile['avatar']);?>
						<span class="help-block">用户头像</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">性别</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="gender" value="1" <?php  if($_user_profile['gender'] == '1') { ?>checked="true"<?php  } ?>>男
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" value="2"  <?php  if($_user_profile['gender'] == '2') { ?>checked="true"<?php  } ?>>女
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" value="0"  <?php  if($_user_profile['gender'] == '0') { ?>checked="true"<?php  } ?>>保密
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 control-label"></label>
					<div class="col-sm-6 col-md-8 col-xs-12">
						<input type="submit" name="profile_submit" value="保存" class="btn btn-primary col-lg-1" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					</div>
			  </div>
	</div>
	</div>
</form>
<?php  } else if($op=='security') { ?>
<form action="" method="post" class="form-horizontal" id="form1" onsubmit="return check();">
<div class="panel panel-default">
	<div class="panel-heading">安全中心</div>	
	<div class="panel-body">
		<div class="form-group">
			<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">当前密码</label>
			<div class="col-sm-10 col-xs-12">
				<input id="oldpassword" name="oldpassword" type="password" class="form-control" autocomplete="off" />
				<span class="help-block">当前密码</span>
			</div>
		</div>
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
		if($('#oldpassword').val()=='') {
				util.message('请先输入当前密码.', '', 'error');
				return false;
		}
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
<?php  } ?>
<?php  include $this->template('common/_footer')?>
