<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<style>
#person_lists .form-group{margin-bottom:0px;}
</style>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='sys_config' && $op=='sys') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'sys'))?>"><i class="fa fa-cog"></i> 系统设置</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='module') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'module'))?>"><i class="fa fa-tag"></i> 价格设置</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='pay_sys') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'pay_sys'))?>"><i class="fa fa-life-bouy"></i> 支付设置</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys'))?>"><i class="fa fa-calendar"></i> 功能设置</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='tpl_sys') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'tpl_sys'))?>"><i class="fa fa-circle-o"></i> 模板设置</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='oss_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'oss_config'))?>"><i class="fa fa-cog"></i> oss设置</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='tx_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'tx_config'))?>"><i class="fa fa-money"></i> 提现设置</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='redpack_wallet') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'redpack_wallet'))?>"><i class="fa fa-cog"></i> 红包设置</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='tempqr') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'tempqr'))?>"><i class="fa fa-cog"></i> 二维码设置</a>
	</li>
	
	<?php  if($_W['isfounder'] || in_array('sys_adv',$_user_sys_control)) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='adv_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'adv_config'))?>"><i class="fa fa-cog"></i> 系统广告</a>
	</li>
	<?php  } ?>
	
</ul>
 <?php  if($_W['isfounder'] || (!$_W['isfounder']&&in_array('sys_config',$_user_sys_control))) { ?>
<div class="panel panel-default">
	<div class="panel-heading">系统操作</div>	
	<div class="panel-body">
		<div class="bd_nav_list">
					<div class="btn-group">
						<a type="button" class="btn btn-success" href="javascript:;" id="pick_uniacid"><i class="fa fa-refresh"></i> 同步其他公众号系统设置</a>
					</div>
		</div>	
		
	</div>
</div>
<script type="text/javascript">
require(['../../../../addons/meepo_xianchang/template/resource/js/uniacid_user', 'bootstrap'], function(uniacid_manage){
	$(function(){
		$('#pick_uniacid').click(function(){
			uniacid_manage.user.browser(function(us){
			},{mode:'invisible',direct:'1'});
		});
	});
});
</script>
<?php  } ?>
<?php  if($op=='sys') { ?>
<form action="" method="post" class="form-horizontal" onsubmit="return check_sys();" id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">系统设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">本公众号是否为手动接入的认证服务号</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="account_join_type" value="1"  <?php  if($sys_config['account_join_type'] == '1') { ?>checked="true"<?php  } ?>> 是
						</label>
						<label class="radio-inline">
							<input type="radio" name="account_join_type" value="2"  <?php  if($sys_config['account_join_type'] == '2') { ?>checked="true"<?php  } ?>>否
						</label>
						<span class="help-block"><span class="label label-success">只有是手动接入的认证服务号才选是。其他一律选否</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">系统名称</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="sys_name" id="sys_name" placeholder="系统名称" value="<?php  echo $sys_config['sys_name'];?>">
						<span class="help-block"><span class="label label-success">系统名称</span></span>
					</div>
				</div>
				<!--<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">系统版权设置</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="copyright" id="copyright" placeholder="系统版权设置" value="<?php  echo $sys_config['copyright'];?>">
						<span class="help-block"><span class="label label-success">系统版权设置</span></span>
					</div>
				</div>-->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">系统网页标签图标</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('sys_icon', $sys_config['sys_icon']);?>
						<span class="help-block">系统网页标签图标 建议尺寸 32px*32px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">系统顶部logo</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('top_logo', $sys_config['top_logo']);?>
						<span class="help-block">顶部logo图片 建议尺寸 208px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">系统登录与注册页背景图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('top_banner', $sys_config['top_banner']);?>
						<span class="help-block">登录与注册页背景图 建议尺寸1460x880</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">系统登录与注册页背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('sys_bg_video', $sys_config['sys_bg_video']);?>
						<span class="help-block">pc背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启注册功能</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_zc" value="1"  <?php  if($sys_config['open_zc'] == '1') { ?>checked="true"<?php  } ?>> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_zc" value="2"  <?php  if($sys_config['open_zc'] == '2') { ?>checked="true"<?php  } ?>>关闭
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启注册、登录验证码</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_verify" value="1"  <?php  if($sys_config['open_verify'] == '1') { ?>checked="true"<?php  } ?>> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_verify" value="2"  <?php  if($sys_config['open_verify'] == '2') { ?>checked="true"<?php  } ?>>关闭
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启注册必须填写手机号</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_tel" value="1"  <?php  if($sys_config['open_tel'] == '1') { ?>checked="true"<?php  } ?>> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_tel" value="2"  <?php  if($sys_config['open_tel'] == '2') { ?>checked="true"<?php  } ?>>关闭
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启注册手机号验证</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_tel_yz" value="1"  <?php  if($sys_config['open_tel_yz'] == '1') { ?>checked="true"<?php  } ?> onclick="open_telyz()"> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_tel_yz" value="2"  <?php  if($sys_config['open_tel_yz'] == '2') { ?>checked="true"<?php  } ?> onclick="close_telyz()">关闭
						</label>
					</div>
				</div>
				<div class="form-group open_tel_box" <?php  if($sys_config['open_tel_yz'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">阿里大于版本</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="dayu_type" value="1"  <?php  if($sys_config['dayu_type'] == '1') { ?>checked="true"<?php  } ?>> 旧版本
						</label>
						<label class="radio-inline">
							<input type="radio" name="dayu_type" value="2"  <?php  if($sys_config['dayu_type'] == '2') { ?>checked="true"<?php  } ?>>新版本
						</label>
					</div>
				</div>
				<div class="form-group open_tel_box" <?php  if($sys_config['open_tel_yz'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">阿里大鱼appkey</label>
					<div class="col-sm-8 col-lg-9 col-xs-12">
						<input type="text" name="dayu_appkey" value="<?php  echo $sys_config['dayu_appkey'];?>" class="form-control">
						<span class="help-block">阿里大鱼appkey 注意:新版本为阿里账户的accessKeyId <a href="http://www.alidayu.com/center/user/account" target="_blank" style="color:red">登录阿里大于管理平台</a></span>
					</div>
				</div>
				<div class="form-group open_tel_box" <?php  if($sys_config['open_tel_yz'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">阿里大鱼appsecret</label>
					<div class="col-sm-8 col-lg-9 col-xs-12">
						<input type="text" name="dayu_appsecret" value="<?php  echo $sys_config['dayu_appsecret'];?>" class="form-control">
						<span class="help-block">阿里大鱼appsecret 注意:新版本为阿里账户的accessKeySecret  </span>
					</div>
				</div>
				<div class="form-group open_tel_box" <?php  if($sys_config['open_tel_yz'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">阿里大鱼身份验证签名</label>
					<div class="col-sm-8 col-lg-9 col-xs-12">
						<input type="text" name="dayu_sms_signname" value="<?php  echo $sys_config['dayu_sms_signname'];?>" class="form-control">
						<span class="help-block">默认为：身份验证</span>
					</div>
				</div>
				<div class="form-group open_tel_box" <?php  if($sys_config['open_tel_yz'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">阿里大鱼短信验证码的模板号码</label>
					<div class="col-sm-8 col-lg-9 col-xs-12">
						<input type="text" name="dayu_sms_tpl_id" value="<?php  echo $sys_config['dayu_sms_tpl_id'];?>" class="form-control">
						<span class="help-block">到阿里大鱼后台管理申请一个模板内容为【您的注册短信码为${code}、请注意隐私安全！】的短信模板、其中code为短信验证码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">订单未支付完成默认参与人数</label>
					<div class="col-sm-5">
						<div class="input-group">
							<input type="text" class="form-control" name="default_join" value="<?php  echo $sys_config['default_join'];?>">
							<div class="input-group-addon">人</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">所有活动开始与结束时间、最大时间间隔</label>
					<div class="col-sm-5">
						<div class="input-group">
							<input type="text" class="form-control" name="sys_max_day" value="<?php  echo $sys_config['sys_max_day'];?>">
							<div class="input-group-addon">天</div>
						</div>
						<span class="help-block">默认不限制</span>
						 
					</div>
				</div>
				<div class="form-group" >
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开放强制关注给用户</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_mustgz" value="1"  <?php  if($sys_config['open_mustgz'] == '1') { ?>checked="true"<?php  } ?>> 开放
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_mustgz" value="2"  <?php  if($sys_config['open_mustgz'] == '2') { ?>checked="true"<?php  } ?>>不开放
						</label>
						<span class="help-block">不开放即为添加活动时、在基本信息里没有设置是否必须关注的选项、并且是不必须关注、只有最高权限账号才可以设置</span>
					</div>
				</div>
				<!---2018 07 11 start-->
				<div class="form-group" >
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开放清空活动用户功能给用户</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_clearuser" value="1"  <?php  if($sys_config['open_clearuser'] == '1') { ?>checked="true"<?php  } ?>> 开放
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_clearuser" value="2"  <?php  if($sys_config['open_clearuser'] == '2') { ?>checked="true"<?php  } ?>>不开放
						</label>
						<span class="help-block">此处仅仅控制用户新增的活动是否具备清空活动用户的功能。
						不开放即为普通用户无法清空活动用户。当选择不开放只有最高权限账号才可以清空具体某一个活动的用户、当然最高权限账号可以通过到具体的活动的用户里选择开放某个活动清空用户权限</span>
					</div>
				</div>
				<div class="form-group" >
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动密码类型</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="hd_sceret" value="1"  <?php  if($sys_config['hd_sceret'] == '1') { ?>checked="true"<?php  } ?> onclick="sceret_type(this)"> 随机码
						</label>
						<label class="radio-inline">
							<input type="radio" name="hd_sceret" value="2"  <?php  if($sys_config['hd_sceret'] == '2') { ?>checked="true"<?php  } ?> onclick="sceret_type(this)"> 固定码
						</label>
						<span class="help-block">随机码即为活动密码随机【含数字与字母的混合体】</span>
					</div>
				</div>
				<div class="form-group stable_sceret_type" <?php  if($sys_config['hd_sceret'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">默认固定码</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['stable_sceret'];?>" class="form-control" name="stable_sceret" >
						<span class="help-block">默认固定码请按需设置</span>
					</div>
				</div>
				<div class="form-group rand_sceret_type" <?php  if($sys_config['hd_sceret'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">默认随机码位数</label>
					<div class="col-sm-5">
						<div class="input-group">
							<input type="text" class="form-control" name="code_Nums" value="<?php  echo $sys_config['code_Nums'];?>">
							<div class="input-group-addon">位</div>
						</div>
						<span class="help-block">至少是2位</span>
					</div>
				</div>
				<!---2018 07 11 end-->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">腾讯地图开发者秘钥</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['tengxun_ak'];?>" class="form-control" name="tengxun_ak" >
						<span class="help-block">腾讯地图开发者秘钥<a href="http://lbs.qq.com/" target="_blank"">注册获取</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">百度地图开发者秘钥</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['baidu_ak'];?>" class="form-control" name="baidu_ak" >
						<span class="help-block">注意:免费申请的ak有调用次数限制 百度地图开发者秘钥<a href="http://lbsyun.baidu.com/" target="_blank"">注册获取</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">百度ai apikey</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['baiduaiappid'];?>" class="form-control" name="baiduaiappid" >
						<span class="help-block">百度ai apikey<a href="https://login.bce.baidu.com/?account=" target="_blank"">注册获取</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">百度ai secretkey</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['baiduaiappsecret'];?>" class="form-control" name="baiduaiappsecret" >
						<span class="help-block">百度ai secretkey<a href="https://login.bce.baidu.com/?account=" target="_blank"">注册获取</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">SOCKET URL</span></label>
					<div class="col-sm-5">
						<input type="text"  class="form-control" name="shake_socket" placeholder="" value="<?php  echo $sys_config['shake_socket'];?>">
						<span class="help-block"><span class="label label-success">socket_url 注:一般此处填写为:域名:7272或者ip:7272</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">系统默认粉丝头像</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('default_avatar', $sys_config['default_avatar']);?>
						<span class="help-block">默认头像 128*128 此头像用于微信用户没有设置个人头像</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信获取粉丝用户信息方式</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="sys_oauth" value="1"  <?php  if($sys_config['sys_oauth'] == '1') { ?>checked="true"<?php  } ?>> 系统获取
						</label>
						<label class="radio-inline">
							<input type="radio" name="sys_oauth" value="2"  <?php  if($sys_config['sys_oauth'] == '2') { ?>checked="true"<?php  } ?>> 内置获取
						</label>
						<span class="help-block">注意: 请务必使用系统1.0以上版本系统、当前公众号是授权接入的认证服务号一定要选择系统获取。</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">后台是否开启客服窗</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="sys_kf_on" value="1"  <?php  if($sys_config['sys_kf_on'] == '1') { ?>checked="true"<?php  } ?> onclick="kf_open();"> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="sys_kf_on" value="2"  <?php  if($sys_config['sys_kf_on'] == '2') { ?>checked="true"<?php  } ?> onclick="kf_close();">关闭
						</label>
					</div>
				</div>
				<div class="form-group kf_form" <?php  if($sys_config['sys_kf_on'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">客服QQ</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['sys_qq'];?>" class="form-control" name="sys_qq" >
						<span class="help-block">客服QQ</span>
					</div>
				</div>
				<div class="form-group kf_form" <?php  if($sys_config['sys_kf_on'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">客服手机号码或者座机</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['sys_tel'];?>" class="form-control" name="sys_tel" >
						<span class="help-block">客服手机号码或者座机</span>
					</div>
				</div>
				<div class="form-group kf_form" <?php  if($sys_config['sys_kf_on'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">客服二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('sys_qr', $sys_config['sys_qr']);?>
						<span class="help-block">客服二维码</span>
					</div>
				</div>
				<div class="form-group kf_form" <?php  if($sys_config['sys_kf_on'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">客服二维码扫码提示</label>
					<div class="col-sm-9">
						<?php  echo tpl_ueditor('sys_qr_word',$sys_config['sys_qr_word'])?>
						<span class="help-block">客服二维码扫码提示</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">抢红包红包类型</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="activity_redpack_type" value="1" id="show_time_0" <?php  if($sys_config['activity_redpack_type'] == '1') { ?>checked="true"<?php  } ?> onclick="close_redpack_type()"> 企业支付红包
						</label>
						<label class="radio-inline">
							<input type="radio" name="activity_redpack_type" value="2" id="show_time_1"  <?php  if($sys_config['activity_redpack_type'] == '2') { ?>checked="true"<?php  } ?>  onclick="show_redpack_type()"> 现金红包
						</label>
						<span class="help-block">注意: 此处的设置包括抢红包活动以及上墙里面的抢红包</span>
					</div>
				</div>
				<div class="form-group activity_redpack"  <?php  if($sys_config['activity_redpack_type'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">现金红包是否支持发放0.3元的红包</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="cansendsmall" value="1"  <?php  if($sys_config['cansendsmall'] == '1') { ?>checked="true"<?php  } ?> > 支持
						</label>
						<label class="radio-inline">
							<input type="radio" name="cansendsmall" value="2"  <?php  if($sys_config['cansendsmall'] == '2') { ?>checked="true"<?php  } ?> >不支持
						</label>
						<span class="help-block">目前仅现金红包可开通0.3元以上的红包</span>
					</div>
					
				</div>
				<div class="form-group activity_redpack" <?php  if($sys_config['activity_redpack_type'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">现场红包场景id</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['activity_redpack_scene_id'];?>" class="form-control" name="activity_redpack_scene_id" >
						<span class="help-block">
							<span class="label label-success">PRODUCT_1:商品促销</span><br><br>
							<span class="label label-success">PRODUCT_2:抽奖</span><br><br>
							<span class="label label-success">PRODUCT_3:虚拟物品兑奖</span><br><br>
							<span class="label label-success">PRODUCT_4:企业内部福利</span><br><br>
							<span class="label label-success">PRODUCT_5:渠道分润</span><br><br>
							<span class="label label-success">PRODUCT_6:保险回馈</span><br><br>
							<span class="label label-success">PRODUCT_7:彩票派奖</span><br><br>
							<span class="label label-success">PRODUCT_8:税务刮奖</span><br><br>
							<span class="label label-danger">啥都不懂、就填写个0</span>	
						
						</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启霸屏上墙广告菜单</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="openSysadv" value="1"  <?php  if($sys_config['openSysadv'] == '1') { ?>checked="true"<?php  } ?> > 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="openSysadv" value="2"  <?php  if($sys_config['openSysadv'] == '2') { ?>checked="true"<?php  } ?> >关闭
						</label>
						<span class="help-block">不开启、管理活动中将不在显示系统广告</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启了负载均衡</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="openbalance" value="1"  <?php  if($sys_config['openbalance'] == '1') { ?>checked="true"<?php  } ?> onclick="open_balance()"> 是
						</label>
						<label class="radio-inline">
							<input type="radio" name="openbalance" value="2"  <?php  if($sys_config['openbalance'] == '2') { ?>checked="true"<?php  } ?> onclick="close_balance()">否
						</label>
						<span class="help-block"><span class="label label-success">只有确实开启了负载均衡才选是。其他一律选否</span></span>
					</div>
				</div>
				<div class="form-group open_balance" <?php  if($sys_config['openbalance'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">主服务器域名</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['localmain_url'];?>" class="form-control" name="localmain_url" >
						<span class="help-block">不需要在后面加"/" 如:http://baidu.com 后面没有斜杠 注意：此域名只能是单独解析到了主服务器的域名，一定不能是解析到负载均衡或者非主服务器的域名</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
	</div>
</div>
</form>
<script>
function open_telyz(){
	$(".open_tel_box").show();
}
function close_telyz(){
	$(".open_tel_box").hide();
}
function kf_open(){
	$(".kf_form").show();
}
function kf_close(){
	$(".kf_form").hide();
}
function sceret_type(obj){
	var type = $(obj).val();
	console.log(type);
	if(type==1){
		$(".stable_sceret_type").hide();
		$(".rand_sceret_type").show();
	}else{
		$(".stable_sceret_type").show();
		$(".rand_sceret_type").hide();
	}	
}
function open_balance(){
	$(".open_balance").show();
}
function close_balance(){
	$(".open_balance").hide();
}
</script>
<?php  } else if($op=='module') { ?>
<form action="" method="post" class="form-horizontal" onsubmit="return check_module();" id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">
		模块价格设置<br><br>
		<div class="btn-group"><a class="btn btn-success" href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'reset_kjj'))?>" onclick="return confirm('同步默认快捷键、以前的快捷键数据将无法恢复，确认吗？');return false;"><i class="fa fa-legal"></i> 同步默认快捷键</a></div>
		<br><br>
		<span class="label label-success">注意:每个功能的快捷键必须不一样 若是想设置为组合键 请用+号 如: Ctrl+c</span><br><br>
		<span class="label label-success">注意:所有功能系统默认快捷键依次为:qwertyuiopasdfghjklz</span><br><br>
		<span class="label label-success">注意:鉴于后期功能越来越多 请管理员酌情设置为不同的快捷键</span><br><br>
		<span class="label label-success">注意:自定义快捷键,  space | enter | + | < | > | ?  这6个键不可单独使用</span><br><br>
		<span class="label label-success">注意: + 键确定为所有功能的背景音乐开关</span>
	</div>	
	<div class="panel-body">
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">签到</div>
					<input type="hidden" class="form-control" name="modules[qd]" value="qd" />
					<input type="hidden" class="form-control" name="modules_name[qd]" value="签到" />
					<input type="hidden" class="form-control" name="modules_icon[qd]" value="meepo-signin" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[qd]" value="<?php  echo $modules[qd]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[qd]"  value="1" <?php  if($modules[qd]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[qd]" value="0" <?php  if($modules[qd]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[qd]" value="<?php  echo $modules[qd]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">粒子签到</div>
					<input type="hidden" class="form-control" name="modules[lizi]" value="lizi" />
					<input type="hidden" class="form-control" name="modules_name[lizi]" value="粒子签到" />
					<input type="hidden" class="form-control" name="modules_icon[lizi]" value="meepo-threed" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[lizi]" value="<?php  echo $modules[lizi]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[lizi]"  value="1" <?php  if($modules[lizi]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[lizi]" value="0" <?php  if($modules[lizi]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[lizi]" value="<?php  echo $modules[lizi]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">普通上墙</div>
					<input type="hidden" class="form-control" name="modules[wall]" value="wall" />
					<input type="hidden" class="form-control" name="modules_name[wall]" value="普通上墙" />
					<input type="hidden" class="form-control" name="modules_icon[wall]" value="meepo-msgNum" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[wall]" value="<?php  echo $modules[wall]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[wall]"  value="1" <?php  if($modules[wall]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[wall]" value="0" <?php  if($modules[wall]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[wall]" value="<?php  echo $modules[wall]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">霸屏上墙</div>
					<input type="hidden" class="form-control" name="modules[barwall]" value="barwall" />
					<input type="hidden" class="form-control" name="modules_name[barwall]" value="霸屏上墙" />
					<input type="hidden" class="form-control" name="modules_icon[barwall]" value="meepo-holdscreen" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[barwall]" value="<?php  echo $modules[barwall]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[barwall]"  value="1" <?php  if($modules[barwall]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[barwall]" value="0" <?php  if($modules[barwall]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[barwall]" value="<?php  echo $modules[barwall]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">普通抽奖</div>
					<input type="hidden" class="form-control" name="modules[lottory]" value="lottory" />
					<input type="hidden" class="form-control" name="modules_name[lottory]" value="普通抽奖" />
					<input type="hidden" class="form-control" name="modules_icon[lottory]" value="meepo-gift" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[lottory]" value="<?php  echo $modules[lottory]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[lottory]"  value="1" <?php  if($modules[lottory]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[lottory]" value="0" <?php  if($modules[lottory]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[lottory]" value="<?php  echo $modules[lottory]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">嘉宾</div>
					<input type="hidden" class="form-control" name="modules[jb]" value="jb" />
					<input type="hidden" class="form-control" name="modules_name[jb]" value="嘉宾" />
					<input type="hidden" class="form-control" name="modules_icon[jb]" value="meepo-guest" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[jb]" value="<?php  echo $modules[jb]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[jb]"  value="1" <?php  if($modules[jb]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[jb]" value="0" <?php  if($modules[jb]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[jb]" value="<?php  echo $modules[jb]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">投票</div>
					<input type="hidden" class="form-control" name="modules[vote]" value="vote" />
					<input type="hidden" class="form-control" name="modules_name[vote]" value="投票" />
					<input type="hidden" class="form-control" name="modules_icon[vote]" value="meepo-vote" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[vote]" value="<?php  echo $modules[vote]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[vote]"  value="1" <?php  if($modules[vote]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[vote]" value="0" <?php  if($modules[vote]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[vote]" value="<?php  echo $modules[vote]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">摇一摇</div>
					<input type="hidden" class="form-control" name="modules[shake]" value="shake" />
					<input type="hidden" class="form-control" name="modules_name[shake]" value="摇一摇" />
					<input type="hidden" class="form-control" name="modules_icon[shake]" value="meepo-shake2" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[shake]" value="<?php  echo $modules[shake]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[shake]"  value="1" <?php  if($modules[shake]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[shake]" value="0" <?php  if($modules[shake]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[shake]" value="<?php  echo $modules[shake]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">抽奖箱</div>
					<input type="hidden" class="form-control" name="modules[cjx]" value="cjx" />
					<input type="hidden" class="form-control" name="modules_name[cjx]" value="抽奖箱" />
					<input type="hidden" class="form-control" name="modules_icon[cjx]" value="meepo-pie" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[cjx]" value="<?php  echo $modules[cjx]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[cjx]"  value="1" <?php  if($modules[cjx]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[cjx]" value="0" <?php  if($modules[cjx]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[cjx]" value="<?php  echo $modules[cjx]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">抢红包</div>
					<input type="hidden" class="form-control" name="modules[redpack]" value="redpack" />
					<input type="hidden" class="form-control" name="modules_name[redpack]" value="抢红包" />
					<input type="hidden" class="form-control" name="modules_icon[redpack]" value="meepo-redpacker" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[redpack]" value="<?php  echo $modules[redpack]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[redpack]"  value="1" <?php  if($modules[redpack]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[redpack]" value="0" <?php  if($modules[redpack]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[redpack]" value="<?php  echo $modules[redpack]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">对对碰</div>
					<input type="hidden" class="form-control" name="modules[ddp]" value="ddp" />
					<input type="hidden" class="form-control" name="modules_name[ddp]" value="对对碰" />
					<input type="hidden" class="form-control" name="modules_icon[ddp]" value="meepo-mstching" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[ddp]" value="<?php  echo $modules[ddp]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[ddp]"  value="1" <?php  if($modules[ddp]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[ddp]" value="0" <?php  if($modules[ddp]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[ddp]" value="<?php  echo $modules[ddp]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">相册</div>
					<input type="hidden" class="form-control" name="modules[xc]" value="xc" />
					<input type="hidden" class="form-control" name="modules_name[xc]" value="相册" />
					<input type="hidden" class="form-control" name="modules_icon[xc]" value="meepo-photo" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[xc]" value="<?php  echo $modules[xc]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[xc]"  value="1" <?php  if($modules[xc]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[xc]" value="0" <?php  if($modules[xc]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[xc]" value="<?php  echo $modules[xc]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">幸运号码</div>
					<input type="hidden" class="form-control" name="modules[xyh]" value="xyh" />
					<input type="hidden" class="form-control" name="modules_name[xyh]" value="幸运号码" />
					<input type="hidden" class="form-control" name="modules_icon[xyh]" value="meepo-publish" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[xyh]" value="<?php  echo $modules[xyh]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[xyh]"  value="1" <?php  if($modules[xyh]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[xyh]" value="0" <?php  if($modules[xyh]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[xyh]" value="<?php  echo $modules[xyh]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">砸金蛋</div>
					<input type="hidden" class="form-control" name="modules[zjd]" value="zjd" />
					<input type="hidden" class="form-control" name="modules_name[zjd]" value="砸金蛋" />
					<input type="hidden" class="form-control" name="modules_icon[zjd]" value="meepo-stars" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[zjd]" value="<?php  echo $modules[zjd]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[zjd]"  value="1" <?php  if($modules[zjd]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[zjd]" value="0" <?php  if($modules[zjd]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[zjd]" value="<?php  echo $modules[zjd]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">弹幕</div>
					<input type="hidden" class="form-control" name="modules[dm]" value="dm" />
					<input type="hidden" class="form-control" name="modules_name[dm]" value="弹幕" />
					<input type="hidden" class="form-control" name="modules_icon[dm]" value="meepo-msgreview" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[dm]" value="<?php  echo $modules[dm]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[dm]"  value="1" <?php  if($modules[dm]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[dm]" value="0" <?php  if($modules[dm]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[dm]" value="<?php  echo $modules[dm]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">幸运手机号</div>
					<input type="hidden" class="form-control" name="modules[xysjh]" value="xysjh" />
					<input type="hidden" class="form-control" name="modules_name[xysjh]" value="幸运手机号" />
					<input type="hidden" class="form-control" name="modules_icon[xysjh]" value="meepo-phone" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[xysjh]" value="<?php  echo $modules[xysjh]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[xysjh]"  value="1" <?php  if($modules[xysjh]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[xysjh]" value="0" <?php  if($modules[xysjh]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[xysjh]" value="<?php  echo $modules[xysjh]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">团队摇一摇</div>
					<input type="hidden" class="form-control" name="modules[tshake]" value="tshake" />
					<input type="hidden" class="form-control" name="modules_name[tshake]" value="团队摇一摇" />
					<input type="hidden" class="form-control" name="modules_icon[tshake]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[tshake]" value="<?php  echo $modules[tshake]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[tshake]"  value="1" <?php  if($modules[tshake]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[tshake]" value="0" <?php  if($modules[tshake]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[tshake]" value="<?php  echo $modules[tshake]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">现场答题</div>
					<input type="hidden" class="form-control" name="modules[dt]" value="dt" />
					<input type="hidden" class="form-control" name="modules_name[dt]" value="现场答题" />
					<input type="hidden" class="form-control" name="modules_icon[dt]" value="meepo-photo" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[dt]" value="<?php  echo $modules[dt]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[dt]"  value="1" <?php  if($modules[dt]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[dt]" value="0" <?php  if($modules[dt]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[dt]" value="<?php  echo $modules[dt]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">猴子爬树</div>
					<input type="hidden" class="form-control" name="modules[mshake]" value="mshake" />
					<input type="hidden" class="form-control" name="modules_name[mshake]" value="猴子爬树" />
					<input type="hidden" class="form-control" name="modules_icon[mshake]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[mshake]" value="<?php  echo $modules[mshake]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[mshake]"  value="1" <?php  if($modules[mshake]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[mshake]" value="0" <?php  if($modules[mshake]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[mshake]" value="<?php  echo $modules[mshake]['kjj'];?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">许愿树</div>
					<input type="hidden" class="form-control" name="modules[xys]" value="xys" />
					<input type="hidden" class="form-control" name="modules_name[xys]" value="许愿树" />
					<input type="hidden" class="form-control" name="modules_icon[xys]" value="meepo-heart" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[xys]" value="<?php  echo $modules[xys]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[xys]"  value="1" <?php  if($modules[xys]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[xys]" value="0" <?php  if($modules[xys]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[xys]" value="<?php  echo $modules[xys]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  if(!is_error($this->shuqian_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">疯狂数钱</div>
					<input type="hidden" class="form-control" name="modules[shuqian]" value="shuqian" />
					<input type="hidden" class="form-control" name="modules_name[shuqian]" value="疯狂数钱" />
					<input type="hidden" class="form-control" name="modules_icon[shuqian]" value="meepo-money" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[shuqian]" value="<?php  echo $modules[shuqian]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[shuqian]"  value="1" <?php  if($modules[shuqian]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[shuqian]" value="0" <?php  if($modules[shuqian]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[shuqian]" value="<?php  echo $modules[shuqian]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<?php  if(!is_error($this->dzqy_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">电子签约</div>
					<input type="hidden" class="form-control" name="modules[dzqy]" value="dzqy" />
					<input type="hidden" class="form-control" name="modules_name[dzqy]" value="电子签约" />
					<input type="hidden" class="form-control" name="modules_icon[dzqy]" value="meepo-signin" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[dzqy]" value="<?php  echo $modules[dzqy]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[dzqy]"  value="1" <?php  if($modules[dzqy]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[dzqy]" value="0" <?php  if($modules[dzqy]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[dzqy]" value="<?php  echo $modules[dzqy]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<?php  if(!is_error($this->ydj_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">摇大奖</div>
					<input type="hidden" class="form-control" name="modules[ydj]" value="ydj" />
					<input type="hidden" class="form-control" name="modules_name[ydj]" value="摇大奖" />
					<input type="hidden" class="form-control" name="modules_icon[ydj]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[ydj]" value="<?php  echo $modules[ydj]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[ydj]"  value="1" <?php  if($modules[ydj]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[ydj]" value="0" <?php  if($modules[ydj]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[ydj]" value="<?php  echo $modules[ydj]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<?php  if(!is_error($this->lottory3d_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">3D抽奖</div>
					<input type="hidden" class="form-control" name="modules[lottory_3d]" value="lottory_3d" />
					<input type="hidden" class="form-control" name="modules_name[lottory_3d]" value="3D抽奖" />
					<input type="hidden" class="form-control" name="modules_icon[lottory_3d]" value="meepo-gift" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[lottory_3d]" value="<?php  echo $modules[lottory_3d]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[lottory_3d]"  value="1" <?php  if($modules[lottory_3d]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[lottory_3d]" value="0" <?php  if($modules[lottory_3d]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[lottory_3d]" value="<?php  echo $modules[lottory_3d]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<?php  if(!is_error($this->yyy3d_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">3D摇一摇</div>
					<input type="hidden" class="form-control" name="modules[yyy_3d]" value="yyy_3d" />
					<input type="hidden" class="form-control" name="modules_name[yyy_3d]" value="3D摇一摇" />
					<input type="hidden" class="form-control" name="modules_icon[yyy_3d]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[yyy_3d]" value="<?php  echo $modules[yyy_3d]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[yyy_3d]"  value="1" <?php  if($modules[yyy_3d]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[yyy_3d]" value="0" <?php  if($modules[yyy_3d]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[yyy_3d]" value="<?php  echo $modules[yyy_3d]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<!--swimming-->
		<?php  if(!is_error($this->swimming_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">3D游泳</div>
					<input type="hidden" class="form-control" name="modules[swimming]" value="swimming" />
					<input type="hidden" class="form-control" name="modules_name[swimming]" value="3D游泳" />
					<input type="hidden" class="form-control" name="modules_icon[swimming]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[swimming]" value="<?php  echo $modules[swimming]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[swimming]"  value="1" <?php  if($modules[swimming]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[swimming]" value="0" <?php  if($modules[swimming]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[swimming]" value="<?php  echo $modules[swimming]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<!--swimming-->
		<!--horse-->
		<?php  if(!is_error($this->horse_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">3D赛马</div>
					<input type="hidden" class="form-control" name="modules[horse]" value="horse" />
					<input type="hidden" class="form-control" name="modules_name[horse]" value="3D赛马" />
					<input type="hidden" class="form-control" name="modules_icon[horse]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[horse]" value="<?php  echo $modules[horse]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[horse]"  value="1" <?php  if($modules[horse]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[horse]" value="0" <?php  if($modules[horse]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[horse]" value="<?php  echo $modules[horse]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<!--horse-->
		<?php  if(!is_error($this->tug_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">拔河</div>
					<input type="hidden" class="form-control" name="modules[tug]" value="tug" />
					<input type="hidden" class="form-control" name="modules_name[tug]" value="拔河" />
					<input type="hidden" class="form-control" name="modules_icon[tug]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[tug]" value="<?php  echo $modules[tug]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[tug]"  value="1" <?php  if($modules[tug]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[tug]" value="0" <?php  if($modules[tug]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[tug]" value="<?php  echo $modules[tug]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<!--horse-->
		<?php  if(!is_error($this->dmredpack_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">弹幕红包</div>
					<input type="hidden" class="form-control" name="modules[dmredpack]" value="dmredpack" />
					<input type="hidden" class="form-control" name="modules_name[dmredpack]" value="弹幕红包" />
					<input type="hidden" class="form-control" name="modules_icon[dmredpack]" value="meepo-redpacker" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[dmredpack]" value="<?php  echo $modules[dmredpack]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[dmredpack]"  value="1" <?php  if($modules[dmredpack]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[dmredpack]" value="0" <?php  if($modules[dmredpack]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[dmredpack]" value="<?php  echo $modules[dmredpack]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<!--boat-->
		<?php  if(!is_error($this->boat_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">赛龙舟</div>
					<input type="hidden" class="form-control" name="modules[boat]" value="boat" />
					<input type="hidden" class="form-control" name="modules_name[boat]" value="赛龙舟" />
					<input type="hidden" class="form-control" name="modules_icon[boat]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[boat]" value="<?php  echo $modules[boat]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[boat]"  value="1" <?php  if($modules[boat]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[boat]" value="0" <?php  if($modules[boat]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[boat]" value="<?php  echo $modules[boat]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<!--bike-->
		<?php  if(!is_error($this->bike_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">自行车赛</div>
					<input type="hidden" class="form-control" name="modules[bike]" value="bike" />
					<input type="hidden" class="form-control" name="modules_name[bike]" value="自行车赛" />
					<input type="hidden" class="form-control" name="modules_icon[bike]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[bike]" value="<?php  echo $modules[bike]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[bike]"  value="1" <?php  if($modules[bike]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[bike]" value="0" <?php  if($modules[bike]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[bike]" value="<?php  echo $modules[bike]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<!--sailing-->
		<?php  if(!is_error($this->sailing_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">冲浪赛</div>
					<input type="hidden" class="form-control" name="modules[sailing]" value="sailing" />
					<input type="hidden" class="form-control" name="modules_name[sailing]" value="冲浪赛" />
					<input type="hidden" class="form-control" name="modules_icon[sailing]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[sailing]" value="<?php  echo $modules[sailing]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[sailing]"  value="1" <?php  if($modules[sailing]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[sailing]" value="0" <?php  if($modules[sailing]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[sailing]" value="<?php  echo $modules[sailing]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<!--yacht-->
		<?php  if(!is_error($this->yacht_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">游艇赛</div>
					<input type="hidden" class="form-control" name="modules[yacht]" value="yacht" />
					<input type="hidden" class="form-control" name="modules_name[yacht]" value="游艇赛" />
					<input type="hidden" class="form-control" name="modules_icon[yacht]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[yacht]" value="<?php  echo $modules[yacht]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[yacht]"  value="1" <?php  if($modules[yacht]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[yacht]" value="0" <?php  if($modules[yacht]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[yacht]" value="<?php  echo $modules[yacht]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<!--mls start-->
		<?php  if(!is_error($this->mls_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">马拉松赛</div>
					<input type="hidden" class="form-control" name="modules[mls]" value="mls" />
					<input type="hidden" class="form-control" name="modules_name[mls]" value="马拉松赛" />
					<input type="hidden" class="form-control" name="modules_icon[mls]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[mls]" value="<?php  echo $modules[mls]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[mls]"  value="1" <?php  if($modules[mls]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[mls]" value="0" <?php  if($modules[mls]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[mls]" value="<?php  echo $modules[mls]['kjj'];?>">
				</div>
			</div>
		</div>
		<!--mls end-->
		<?php  } ?>
		<?php  if(!is_error($this->newqd_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">新版3D签到</div>
					<input type="hidden" class="form-control" name="modules[newqd]" value="newqd" />
					<input type="hidden" class="form-control" name="modules_name[newqd]" value="新版3D签到" />
					<input type="hidden" class="form-control" name="modules_icon[newqd]" value="meepo-threed" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[newqd]" value="<?php  echo $modules[newqd]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[newqd]"  value="1" <?php  if($modules[newqd]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[newqd]" value="0" <?php  if($modules[newqd]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[newqd]" value="<?php  echo $modules[newqd]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<?php  if(!is_error($this->rolllottory_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">大转盘抽奖</div>
					<input type="hidden" class="form-control" name="modules[rolllottory]" value="rolllottory" />
					<input type="hidden" class="form-control" name="modules_name[rolllottory]" value="大转盘抽奖" />
					<input type="hidden" class="form-control" name="modules_icon[rolllottory]" value="meepo-gift" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[rolllottory]" value="<?php  echo $modules[rolllottory]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[rolllottory]"  value="1" <?php  if($modules[rolllottory]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[rolllottory]" value="0" <?php  if($modules[rolllottory]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[rolllottory]" value="<?php  echo $modules[rolllottory]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<?php  if(!is_error($this->shakestart_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">摇一摇启动</div>
					<input type="hidden" class="form-control" name="modules[shakestart]" value="shakestart" />
					<input type="hidden" class="form-control" name="modules_name[shakestart]" value="摇一摇启动" />
					<input type="hidden" class="form-control" name="modules_icon[shakestart]" value="meepo-shake" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[shakestart]" value="<?php  echo $modules[shakestart]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[shakestart]"  value="1" <?php  if($modules[shakestart]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[shakestart]" value="0" <?php  if($modules[shakestart]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[shakestart]" value="<?php  echo $modules[shakestart]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<?php  if(!is_error($this->meeting_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">会议报名</div>
					<input type="hidden" class="form-control" name="modules[meeting]" value="meeting" />
					<input type="hidden" class="form-control" name="modules_name[meeting]" value="会议报名" />
					<input type="hidden" class="form-control" name="modules_icon[meeting]" value="meepo-users" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[meeting]" value="<?php  echo $modules[meeting]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[meeting]"  value="1" <?php  if($modules[meeting]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[meeting]" value="0" <?php  if($modules[meeting]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[meeting]" value="<?php  echo $modules[meeting]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
		<?php  if(!is_error($this->faceqd_check())) { ?>
		<div class="form-group">
			<div class="col-sm-8  col-xs-8 col-md-8">
				<div class="input-group">
					<div class="input-group-addon">人脸识别签到</div>
					<input type="hidden" class="form-control" name="modules[faceqd]" value="faceqd" />
					<input type="hidden" class="form-control" name="modules_name[faceqd]" value="人脸识别签到" />
					<input type="hidden" class="form-control" name="modules_icon[faceqd]" value="meepo-users" />
					<div class="input-group-addon" style="border-right:0">单价</div>
					<input type="text" class="form-control" name="module_money[faceqd]" value="<?php  echo $modules[faceqd]['money'];?>">
					<div class="input-group-addon" style="border-left:0">元、状态</div>
					<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[faceqd]"  value="1" <?php  if($modules[faceqd]['isshow']==1||$no_modules_data==1) { ?>checked<?php  } ?>></div>显示
						<div style="display:inline-block"><input type="checkbox" name="modules_isshow[faceqd]" value="0" <?php  if($modules[faceqd]['isshow']==0&&!empty($modules)) { ?>checked<?php  } ?>></div>隐藏
					</div>
					<div class="input-group-addon" >快捷键</div>
					<input type="text" class="form-control" name="module_kjj[faceqd]" value="<?php  echo $modules[faceqd]['kjj'];?>">
				</div>
			</div>
		</div>
		<?php  } ?>
	</div>
</div>
<!--20170427 zz-->
<div class="panel panel-default">
	<div class="panel-heading">增值服务【手动定价】</div>
	<div class="panel-heading" style="border-bottom:1px dashed #e2e2e2;border-top: 1px dashed #e2e2e2;margin:20px 0;"><a href="javascript:;" class="btn btn-success zzs_add"><i class="fa fa-plus" ></i> 新增选项</a></div>
	<div class="panel-body">
		<ul class="list-group" id="zz_lists">
			<?php  if(is_array($zzs)) { foreach($zzs as $key => $row) { ?>
				<li class="list-group-item" id="zzs_box_<?php  echo $key;?>">
				<div class="form-group">
					<div class="col-sm-10  col-xs-10 col-md-10">
						<div class="input-group">
							<div class="input-group-addon">服务图标</div>
							<?php  echo tpl_form_field_icon('zz_icon[]',$row['zz_icon']);?>
							<div class="input-group-addon">服务名称</div>
							<input type="text" class="form-control" name="zz_name[]" value="<?php  echo $row['zz_name'];?>">
							<input type="hidden" class="form-control" name="zz_control[]" value="<?php  echo $row['zz_control'];?>">
							<div class="input-group-addon" style="border-left:0;border-right:0">单价</div>
							<input type="text" class="form-control" name="zz_money[]" value="<?php  echo $row['zz_money'];?>">
							<div class="input-group-addon">元</div>
							<div class="input-group-addon">
										<div style="display:inline-block"><input type="checkbox" name="zz_isshow[]" value="1" <?php  if($row['zz_isshow']==1) { ?>checked<?php  } ?>></div>显示
										<div style="display:inline-block"><input type="checkbox" name="zz_isshow[]" value="0" <?php  if($row['zz_isshow']==0) { ?>checked<?php  } ?>></div>隐藏
							</div>
						</div>
					</div>
					<div class="col-sm-2  col-xs-2 col-md-2"><a href="javascript:;" class="btn btn-danger" onclick="zzs_delete('<?php  echo $key;?>')" >删除</a></div>
				</div>
				</li>
			<?php  } } ?>
		</ul>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">参与人数价格设置、注:活动参与人数设置为0代表参与人数不受限制</div>	
	<div class="panel-body">
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动免费人数</label>
					<div class="col-sm-5">
						<div class="input-group">
							<input type="text" class="form-control" name="sys_max_freeman" value="<?php  echo $sys_config['sys_max_freeman'];?>">
							<div class="input-group-addon">人</div>
						</div>
						<span class="help-block"><span class="label label-danger">此项慎重设置、当新建活动时、设置的活动人数少于此处设置的数字、活动将不记录人数费用 默认为0人</span></span>
					</div>
		</div>
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">人头单价</label>
					<div class="col-sm-5">
						<div class="input-group">
							<input type="text" class="form-control" name="one_price" id="one_price" value="<?php  echo $sys_config['one_price'];?>">
							<div class="input-group-addon">元</div>
						</div>

					</div>
		</div>
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动人数最小值</label>
					<div class="col-sm-5">
						<div class="input-group">
							<input type="text" class="form-control" name="min_persons" id="min_persons" value="<?php  echo $sys_config['min_persons'];?>">
							<div class="input-group-addon">人</div>
						</div>
					</div>
		</div>
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动人数最大值</label>
					<div class="col-sm-5">
						<div class="input-group">
							<input type="text" class="form-control" name="max_persons" id="max_persons" value="<?php  echo $sys_config['max_persons'];?>">
							<div class="input-group-addon">人</div>
						</div>
					</div>
		</div>
	</div>
	<div class="panel-body">
		<div class="form-group col-sm-12">
				<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
	
</div>
</form>
<div id="zzs_add" style="display:none">
	<div class="col-sm-10  col-xs-10 col-md-10">
		<div class="input-group">
			<div class="input-group-addon">服务图标</div>
			<?php  echo tpl_form_field_icon('zz_icon[]');?>
			<div class="input-group-addon">服务名称</div>
			<input type="text" class="form-control" name="zz_name[]">
			<input type="hidden" class="form-control" name="zz_control[]">
			<div class="input-group-addon" style="border-left:0;border-right:0">单价</div>
			<input type="text" class="form-control" name="zz_money[]">
			<div class="input-group-addon">元</div>
			<div class="input-group-addon">
						<div style="display:inline-block"><input type="checkbox" name="zz_isshow[]" value="1" checked></div>显示
						<div style="display:inline-block"><input type="checkbox" name="zz_isshow[]" value="0"></div>隐藏
			</div>
		</div>
	</div>
</div>
<script>
$(function(){
		$('.zzs_add').on('click', function(){
			var bd_add = new Date().getTime();
			var content = '<li class="list-group-item" id="zzs_box_'+bd_add+'"><div class="form-group">';
			content += $("#zzs_add").html();
			content += '<div class="col-sm-2  col-xs-2 col-md-2">';
					 content += '<a href="javascript:;" class="btn btn-danger" onclick="zzs_delete('+bd_add+')" >删除</a>';
						content += '</div>';
					content += '</div>';
			content += '</li>';
			$('#zz_lists').append(content);
			var new_zz = randomWord(false, 5).toLowerCase();
			$('#zz_lists li:last-child input:eq(2)').val('zz_'+new_zz);

		});
		
});
function zzs_delete(id){
		if(confirm('以前购买的该项服务、将不显示了、确定删除?')){
					$("#zzs_box_"+id).remove();
				}
		}
function randomWord(randomFlag, min, max){
    var str = "",
        range = min,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
 
    // 随机产生
    if(randomFlag){
        range = Math.round(Math.random() * (max-min)) + min;
    }
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<?php  } else if($op=='pay_sys') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">支付设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">微信霸屏打赏等支付类型</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="pay_type" value="1"  <?php  if($sys_config['pay_type'] == '1') { ?>checked="true"<?php  } ?> >仅开启微信支付
						</label>
						<label class="radio-inline">
							<input type="radio" name="pay_type" value="2"   <?php  if($sys_config['pay_type'] == '2') { ?>checked="true"<?php  } ?> >兼容所有支付
						</label>
						<span class="help-block"><span class="label label-success">此项仅仅对开通了微信支付的公众号生效</span></span>
					</div>
					
					
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">购买活动、红包账户等支付类型</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="pc_pay_type" value="1"  <?php  if($sys_config['pc_pay_type'] == '1') { ?>checked="true"<?php  } ?> >仅开启微信支付
						</label>
						<label class="radio-inline">
							<input type="radio" name="pc_pay_type" value="2"   <?php  if($sys_config['pc_pay_type'] == '2') { ?>checked="true"<?php  } ?> >兼容所有支付
						</label>
						<span class="help-block"><span class="label label-danger">此项仅仅对开通了微信支付的公众号生效 先给自己的余额充值点钱。帮别人购买或者充值红包账户</span></span>
					</div>
					
					
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号appid</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="appid" placeholder="" value="<?php  echo $sys_config['appid'];?>">
						<span class="help-block"><span class="label label-success">登陆微信公众平台 复制粘贴过来[开通了微信支付]</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号appsecret</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="secret" placeholder="" value="<?php  echo $sys_config['secret'];?>">
						<span class="help-block"><span class="label label-success">登陆微信公众平台 复制粘贴过来[开通了微信支付]</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信支付商户号</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="mchid" placeholder="" value="<?php  echo $sys_config['mchid'];?>">
						<span class="help-block"><span class="label label-success">登陆微信商户平台 复制粘贴过来</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信支付秘钥</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="signkey" placeholder="" value="<?php  echo $sys_config['signkey'];?>">
						<span class="help-block"><span class="label label-success">登陆微信商户平台 复制粘贴过来</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">当前服务器ip地址</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="ip" placeholder="" value="<?php  echo $sys_config['ip'];?>">
						<span class="help-block"><span class="label label-success">当前服务器ip地址 咨询平台管理员</span></span>
					</div>
				</div>
				 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">商户支付证书<font color=red><?php  if($cert==1) { ?>已经上传<?php  } ?></font></label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea class="form-control" name="cert" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>apiclient_cert.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付证书私钥<font color=red><?php  if($keys==1) { ?>已经上传<?php  } ?></font></label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea class="form-control" name="key" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>apiclient_key.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付根证书<font color=red><?php  if($rootca==1) { ?>已经上传<?php  } ?></font></label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea class="form-control" name="ca" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>rootca.pem</mark> 用记事本打开并复制文件内容, 填至此处 注:如果下载的证书无这个文件可以不用设置此项</span>
                    </div>
                </div>
				
		</div>
		<div class="panel-body">
			<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		</div>
</div>
</form>
<?php  } else if($op=='control_sys') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='basic_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'basic_config'))?>"><i class="fa fa-cog"></i> 基础设置</a>
	</li>
	<?php  if(!is_error($this->meeting_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='meeting_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'meeting_config'))?>"><i class="fa fa-cog"></i> 会议设置</a>
	</li>
	<?php  } ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='qd_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'qd_config'))?>"><i class="fa fa-cog"></i> 签到</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='lizi_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'lizi_config'))?>"><i class="fa fa-cog"></i> 粒子</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='wall_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'wall_config'))?>"><i class="fa fa-cog"></i> 上墙</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='bar_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'bar_config'))?>"><i class="fa fa-cog"></i> 霸屏</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='dm_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'dm_config'))?>"><i class="fa fa-cog"></i> 弹幕</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='lottory_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'lottory_config'))?>"><i class="fa fa-cog"></i> 抽奖</a>
	</li>
	<?php  if(!is_error($this->lottory3d_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='lottory3d_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'lottory3d_config'))?>"><i class="fa fa-cog"></i> 3D抽奖</a>
	</li>
	<?php  } ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='shake_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'shake_config'))?>"><i class="fa fa-cog"></i> 摇一摇</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='mshake_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'mshake_config'))?>"><i class="fa fa-cog"></i> 猴子爬树</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='tshake_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'tshake_config'))?>"><i class="fa fa-cog"></i> 团队摇一摇</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='xys_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'xys_config'))?>"><i class="fa fa-cog"></i> 许愿树</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='redpack_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'redpack_config'))?>"><i class="fa fa-cog"></i> 抢红包</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='ddp_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'ddp_config'))?>"><i class="fa fa-cog"></i> 对对碰</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='dt_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'dt_config'))?>"><i class="fa fa-cog"></i> 答题</a>
	</li>
	<?php  if(!is_error($this->shuqian_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='shuqian_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'shuqian_config'))?>"><i class="fa fa-cog"></i> 数钱</a>
	</li>
	<?php  } ?>
	<?php  if(!is_error($this->ydj_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='ydj_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'ydj_config'))?>"><i class="fa fa-cog"></i> 摇大奖</a>
	</li>
	<?php  } ?>
	<!--2017 0926 add yyy3d-->
	<?php  if(!is_error($this->yyy3d_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='yyy3d_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'yyy3d_config'))?>"><i class="fa fa-cog"></i> 3D摇一摇</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='yyy3d_style') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'yyy3d_style'))?>"><i class="fa fa-cog"></i> 3D摇一摇角色风格</a>
	</li>
	<?php  } ?>
	<!--2017 0926 add yyy3d-->
	<!--2017 0926 add yyy3d-->
	<?php  if(!is_error($this->swimming_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='swimming_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'swimming_config'))?>"><i class="fa fa-cog"></i> 3D游泳</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='swimming_style') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'swimming_style'))?>"><i class="fa fa-cog"></i> 3D游泳角色风格</a>
	</li>
	<?php  } ?>
	<!--2017 0926 add yyy3d-->
	<!--2017 12 03 add horse-->
	<?php  if(!is_error($this->horse_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='horse_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'horse_config'))?>"><i class="fa fa-cog"></i> 3D赛马</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='horse_style') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'horse_style'))?>"><i class="fa fa-cog"></i> 3D赛马角色风格</a>
	</li>
	<?php  } ?>
	<!--2017 12 03 add horse-->
	<!---拔河--->
	<?php  if(!is_error($this->tug_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='tug_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'tug_config'))?>"><i class="fa fa-cog"></i> 拔河</a>
	</li>
	<?php  } ?>
	<!--拔河--->
	<!--2018 01 23 add dmredpack-->
	<!---弹幕红包--->
	<?php  if(!is_error($this->dmredpack_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='dmredpack_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'dmredpack_config'))?>"><i class="fa fa-cog"></i> 弹幕红包</a>
	</li>
	<?php  } ?>
	<!---弹幕红包--->
	<!--2018 03 25 add boat-->
	<!---赛龙舟--->
	<?php  if(!is_error($this->boat_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='boat_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'boat_config'))?>"><i class="fa fa-cog"></i> 赛龙舟</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='boat_style') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'boat_style'))?>"><i class="fa fa-cog"></i> 赛龙舟角色风格</a>
	</li>
	<?php  } ?>
	<!---赛龙舟--->
	<!---自行车--->
	<?php  if(!is_error($this->bike_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='bike_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'bike_config'))?>"><i class="fa fa-cog"></i> 自行车赛</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='bike_style') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'bike_style'))?>"><i class="fa fa-cog"></i> 自行车赛角色风格</a>
	</li>
	<?php  } ?>
	<!---自行车--->
	<!---冲浪赛--->
	<?php  if(!is_error($this->sailing_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='sailing_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'sailing_config'))?>"><i class="fa fa-cog"></i> 冲浪赛</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='sailing_style') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'sailing_style'))?>"><i class="fa fa-cog"></i> 冲浪赛角色风格</a>
	</li>
	<?php  } ?>
	<!---冲浪赛--->
	<!---游艇赛--->
	<?php  if(!is_error($this->yacht_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='yacht_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'yacht_config'))?>"><i class="fa fa-cog"></i> 游艇赛</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='yacht_style') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'yacht_style'))?>"><i class="fa fa-cog"></i> 游艇赛角色风格</a>
	</li>
	<?php  } ?>
	<!---游艇赛--->
	<!---马拉松赛--->
	<?php  if(!is_error($this->mls_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='mls_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'mls_config'))?>"><i class="fa fa-cog"></i> 马拉松赛</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='mls_style') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'mls_style'))?>"><i class="fa fa-cog"></i> 马拉松角色风格</a>
	</li>
	<?php  } ?>
	<!--马拉松赛--->
	<!---新版3d签到--->
	<?php  if(!is_error($this->newqd_check())) { ?>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='newqd_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'newqd_config'))?>"><i class="fa fa-cog"></i> 新版3d签到</a>
	</li>
	<?php  } ?>
	<!---新版3d签到--->
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='bd_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'bd_config'))?>"><i class="fa fa-cog"></i> 表单</a>
	</li>
</ul>
<?php  if($oop=='basic_config') { ?>
<ul class="nav nav-tabs" style="margin-bottom:0">
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='basic_config' && $ooop=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'basic_config','ooop'=>'config'))?>"><i class="fa fa-cog"></i> 活动基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='sys_config' && $op=='control_sys' && $oop=='basic_config' && $ooop=='nav') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'basic_config','ooop'=>'nav'))?>"><i class="fa fa-tag"></i> 活动自定义菜单设置</a>
	</li>	
</ul>
<?php  if($ooop=='config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
		<div class="panel-heading">活动基础设置</div>	
		<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">公众号名称</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="mp_name" placeholder="公众号名称" value="<?php  echo $sys_basic_config['mp_name'];?>">
						<span class="help-block"><span class="label label-success">公众号名称</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('mp_img', $sys_basic_config['mp_img']);?>
						<span class="help-block">公众号二维码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号二维码文字</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="mp_txt"  value="<?php  echo $sys_basic_config['mp_txt'];?>">
						<span class="help-block">点击底部二维码菜单，二维码顶部文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部logo图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('top_img', $sys_basic_config['top_img']);?>
						<span class="help-block">顶部logo图片 建议尺寸280x75</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部滚动文字</label>
					<div class="col-sm-9">
						<textarea style="height:200px;" class="form-control" name="top_title" id="quit-tips" cols="70"><?php  echo $sys_basic_config['top_title'];?></textarea>
						<span class="help-block">每条不超过20个字，多条请用#分隔，每10秒更新一次</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">顶部滚动文字字体大小 px</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="top_font_size" placeholder="" value="<?php  echo $sys_basic_config['top_font_size'];?>">
						<span class="help-block"><span class="label label-success">顶部滚动文字字体大小 单位像素</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">风格选择</span></label>
					<div class="col-sm-9">
						<select name="basic_style" class='form-control' onchange="doit(this.value)">
						 
							 <?php  if(is_array($styles)) { foreach($styles as $key => $row) { ?>
							 <option   value="<?php  echo $key+1?>"  <?php  if($sys_basic_config['basic_style']-$key==1) { ?>selected<?php  } ?>>风格<?php  echo $key+1?></option>
							 <?php  } } ?>
						</select>
						<span class="help-block"><img id="style_pic" style="width:256px;height:170px;margin:8px;" class="img-polaroid img-preview" src="<?php  echo $styles[$sys_basic_config['basic_style']-1]?>"  onerror="this.src='<?php  echo $styles['34'];?>';"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">pc背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $sys_basic_config['bg_img']);?>
						<span class="help-block">pc背景图片 建议标准 1440 * 828  注意: 上传此背景后风格背景将失效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">pc背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('bg_vedio', $sys_basic_config['bg_vedio']);?>
						<span class="help-block">pc背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是默认风格、上传背景视频后、风格将不再支持设置</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">底部logo图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bottom_img', $sys_basic_config['bottom_img']);?>
						<span class="help-block">底部logo图片 建议尺寸165*50</span>
					</div>
				</div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">底部参与活动引导词</label>
                    <div class="col-xs-12 col-sm-9">
                        <?php  echo tpl_ueditor('bottom_words',$sys_basic_config['bottom_words'])?>
									<span class="help-block">底部参与活动引导词</span>
                    </div>
                </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否开启背景音乐</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="bg_music_on" value="0" id="show_time_0" <?php  if($sys_basic_config['bg_music_on'] == '0') { ?>checked="true"<?php  } ?> onclick="show_music1()"> 不开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="bg_music_on" value="1" id="show_time_1"  <?php  if($sys_basic_config['bg_music_on'] == '1') { ?>checked="true"<?php  } ?> onclick="show_music2()">开启
						</label>
					</div>
				</div>
				<div class="form-group show_music" style="<?php  if($sys_basic_config['bg_music_on']==0) { ?>display:none<?php  } ?>">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">背景音乐链接</span></label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$sys_basic_config['bg_music'])?>
						<span class="help-block"><span class="label label-success">请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否显示星星效果</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_star" value="0" id="show_time_0" <?php  if($sys_basic_config['show_star'] == '0') { ?>checked="true"<?php  } ?>> 不显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_star" value="1" id="show_time_1"  <?php  if($sys_basic_config['show_star'] == '1') { ?>checked="true"<?php  } ?>>显示
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否显示落叶效果效果</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_leaf" value="0" onclick="show_leaf1()" <?php  if($sys_basic_config['show_leaf'] == '0') { ?>checked="true"<?php  } ?>> 不显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_leaf" value="1" onclick="show_leaf2()"  <?php  if($sys_basic_config['show_leaf'] == '1') { ?>checked="true"<?php  } ?>>显示
						</label>
					</div>
				</div>
				<div class="form-group leaf_style" style="<?php  if($sys_basic_config['show_leaf']==0) { ?>display:none<?php  } ?>">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">落叶风格选择</span></label>
					<div class="col-sm-9">
						<select name="leaf_style" class='form-control'>
						 
							 <?php  if(is_array($leaf_styles)) { foreach($leaf_styles as $key => $row) { ?>
							 <option   value="<?php  echo $key?>"  <?php  if($sys_basic_config['leaf_style']==$key) { ?>selected<?php  } ?>><?php  echo $row;?></option>
							 <?php  } } ?>
						</select>
						<span class="help-block">请选择任意一项</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否显示微信圆形菜单</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_tool" value="0"  <?php  if($sys_basic_config['show_tool'] == '0') { ?>checked="true"<?php  } ?>>不显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_tool" value="1"  <?php  if($sys_basic_config['show_tool'] == '1') { ?>checked="true"<?php  } ?> >显示
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信圆形菜单边界颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('tool_bgcolor',$sys_basic_config['tool_bgcolor']);?>
					<span class="help-block">微信圆形菜单边界颜色  </span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
		</div>
</div>
</form>
<script>
	function show_leaf1(){
		$(".leaf_style").hide();
	}
	function show_leaf2(){
		$(".leaf_style").show();
	}
	function show_music1(){
		$(".show_music").hide();
	}
	function show_music2(){
		$(".show_music").show();
	}
  function doit(obj){
	  if(obj.length==1){
		 obj = '0'+obj;
	  }
	  obj = "<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/mobile/app/style/icon/0"+obj+'s.jpg';
	  document.getElementById("style_pic").src =obj;
  }
  </script>
 <?php  } else { ?>
 <style>
 .uploader-modal{z-index:1042}
  .pcnavtbody tr:hover{
	border: 1px dashed #cecece!important;
    visibility: visible!important;
    background: #f4f9fe;
	cursor: move;

 }
  .appnavtbody tr:hover{
	border: 1px dashed #cecece!important;
    visibility: visible!important;
    background: #f4f9fe;
	cursor: move;

 }
 .pcnavtbody,.appnavtbody{border:1px solid #e7e7eb}
 .we7-table td{vertical-align:middle!important}
 .we7-table tr{border:0!important}
 </style>
 <?php  if($_W['isfounder'] || (!$_W['isfounder']&&in_array('sys_config',$_user_sys_control))) { ?>
<div class="panel panel-default">
	<div class="panel-heading">同步系统菜单操作</div>	
	<div class="panel-body">
		<div class="bd_nav_list">
					<div class="btn-group">
						<a type="button" class="btn btn-success" href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'basic_config','ooop'=>'copysysnav','sys_id'=>$sys_config['id']))?>" onclick="return confirm('您确定要同步吗？');return false;"><i class="fa fa-refresh"></i> 同步系统默认菜单设置</a>
					</div>
		</div>	
		
	</div>
</div>
<?php  } ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
 <div class="panel panel-default">
	<div class="panel-heading"></div>	
	<div class="panel-body">
				<!--pc nav start--->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">启用大屏自定义菜单</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="openSyspcnav" value="1"  <?php  if($sys_config['openSyspcnav'] == '1') { ?>checked="true"<?php  } ?>> 是
						</label>
						<label class="radio-inline">
							<input type="radio" name="openSyspcnav" value="2"  <?php  if($sys_config['openSyspcnav'] == '2') { ?>checked="true"<?php  } ?>> 否
						</label>
						<span class="help-block"><span class="label label-success">选择是用户新建活动默认使用自定义菜单，反之使用系统菜单</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-1 control-label">大屏菜单列表</label>
					<div class="col-sm-11">
						<table class="table we7-table" style="display:auto;" id="pcnavlists">
							<thead class="navbar-inner">
								<tr>
								   <th style="width:20%;text-align:center">名称</th>
								   <th style="width:10%;text-align:center">图标</th>
								   <th style="width:25%;text-align:center">链接</th>
								   <th style="width:10%;text-align:center">打开方式</th>
								   <th style="width:10%;text-align:center">状态</th>
								   <th style="width:25%;text-align:center">操作</th>
								</tr>
							</thead>
							<tbody class="pcnavtbody">
							<?php  if(is_array($syspcnav)) { foreach($syspcnav as $item) { ?>
								<tr>
									<td style="display:none" class="module_zd" data-module_zd="<?php  echo $item['module_zd'];?>"><input type="hidden" name="module_zd[]" value="<?php  echo $item['module_zd'];?>" /></td>
									<td class="row-hover" data-displayorder="<?php  if(!empty($item['displayorder'])) { ?><?php  echo $item['displayorder'];?><?php  } else { ?>1<?php  } ?>" style="display:none">
											<span class="label label-success"><?php  echo $item['displayorder'];?></span>
											<input type="hidden" name="displayorder[]" value="<?php  echo $item['displayorder'];?>" />
									</td>
									<td class="row-hover" style="text-align:center" data-module_name="<?php  if(!empty($item['module_name'])) { ?><?php  echo $item['module_name'];?><?php  } else { ?><?php  } ?>">
											<div class="mainContent">
												<?php  echo $item['module_name'];?>
											</div>
											<input type="hidden" name="module_name[]" value="<?php  echo $item['module_name'];?>" />
									</td>
									<td class="row-hover" style="text-align:center" data-module_icon="<?php  if(!empty($item['module_icon'])) { ?><?php  echo $item['module_icon'];?><?php  } else { ?><?php  } ?>" data-bg_color="<?php  if(!empty($item['bg_color'])) { ?><?php  echo $item['bg_color'];?><?php  } else { ?>#3c6<?php  } ?>">
										<div style="width:60px;height:60px;border-radius:100%;background-color:<?php  echo $item['bg_color'];?>;display:flex;justify-content:center;align-items:center"><img src="<?php  echo tomedia($item['module_icon'])?>" width="43px" height="43px" /><input type="hidden" name="module_icon[]" value="<?php  echo $item['module_icon'];?>" /></div>
										<span><input type="hidden" name="bg_color[]" value="<?php  echo $item['bg_color'];?>" /></span>
									</td>
									<td style="text-align:center" data-module_url="<?php  if(!empty($item['module_url'])) { ?><?php  echo $item['module_url'];?><?php  } else { ?>''<?php  } ?>">
											<div class="mainContent">
												<?php  echo $item['module_url'];?>
											</div>
											<input type="hidden" name="module_url[]" value="<?php  echo $item['module_url'];?>" />
									</td>
									<td style="text-align:center" data-open_type="<?php  if(!empty($item['open_type'])) { ?><?php  echo $item['open_type'];?><?php  } else { ?>1<?php  } ?>"><?php  if($item['open_type']==1) { ?><span class="label label-success">内页打开</span><?php  } else { ?><span class="label label-info">新开网页</span><?php  } ?><input type="hidden" name="open_type[]" value="<?php  echo $item['open_type'];?>" /></td>
									<td style="text-align:center" data-status="<?php  if(!empty($item['status'])) { ?><?php  echo $item['status'];?><?php  } else { ?>1<?php  } ?>"><?php  if($item['status']==1) { ?><span class="label label-success">显示</span><?php  } else { ?><span class="label label-info">不显示</span><?php  } ?><input type="hidden" name="status[]" value="<?php  echo $item['status'];?>" /></td>
									
									<td style="text-align:center">
										<a class="btn btn-success" onclick="editpcnav(this)" href="javascript:;">
											编辑
											<i class="fa fa-edit"></i>
										</a>
										<?php  if(!array_key_exists($item['module_zd'], $sysModuleTotal)) { ?>
											<a class="btn btn-danger" onclick="delpcnav(this)" href="javascript:;">删除
												<i class="fa fa-times"></i>
											</a>
										<?php  } ?>
									</td>
								</tr>
							<?php  } } ?>
							</tbody>	
						</table>
					</div>
				</div>
				<!--
				<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addPcnav"><b>+</b>添加大屏菜单</a>
							</div>
				</div>-->
				<!--pc nav end--->
				<!--app nav start--->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">启用微信自定义菜单</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="openSysappnav" value="1"  <?php  if($sys_config['openSysappnav'] == '1') { ?>checked="true"<?php  } ?>> 是
						</label>
						<label class="radio-inline">
							<input type="radio" name="openSysappnav" value="2"  <?php  if($sys_config['openSysappnav'] == '2') { ?>checked="true"<?php  } ?>> 否
						</label>
						<span class="help-block"><span class="label label-success">选择是用户新建活动默认使用自定义菜单，反之使用系统菜单</span></span>
					</div>
					
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-1 control-label">微信菜单列表</label>
					<div class="col-sm-11">
						<table class="table we7-table" style="display:auto;" id="appnavlists">
							<thead class="navbar-inner">
								<tr>
								   <th style="width:20%;text-align:center">名称</th>
								   <th style="width:10%;text-align:center">图标</th>
								   <th style="width:25%;text-align:center">链接</th>
								   <th style="width:10%;text-align:center">状态</th>
								   <th style="width:35%;text-align:center">操作</th>
								</tr>
							</thead>
							<tbody class="appnavtbody">
							<?php  if(is_array($sysappnav)) { foreach($sysappnav as $item) { ?>
								<tr>
									<td style="display:none" class="appmodule_zd" data-appmodule_zd="<?php  echo $item['module_zd'];?>"><input type="hidden" name="appmodule_zd[]" value="<?php  echo $item['module_zd'];?>" /></td>
									<td class="row-hover" style="display:none" data-displayorder="<?php  if(!empty($item['displayorder'])) { ?><?php  echo $item['displayorder'];?><?php  } else { ?>1<?php  } ?>" >
											<span class="label label-success"><?php  echo $item['displayorder'];?></span>
											<input type="hidden" name="appdisplayorder[]" value="<?php  echo $item['displayorder'];?>" />
									</td>
									<td class="row-hover" style="text-align:center" data-module_name="<?php  if(!empty($item['module_name'])) { ?><?php  echo $item['module_name'];?><?php  } else { ?><?php  } ?>">
											<div class="mainContent">
												<?php  echo $item['module_name'];?>
											</div>
											<input type="hidden" name="appmodule_name[]" value="<?php  echo $item['module_name'];?>" />
									</td>
									<td class="row-hover" style="text-align:center" data-module_icon="<?php  if(!empty($item['module_icon'])) { ?><?php  echo $item['module_icon'];?><?php  } else { ?><?php  } ?>" data-bg_color="<?php  if(!empty($item['bg_color'])) { ?><?php  echo $item['bg_color'];?><?php  } else { ?>#3c6<?php  } ?>">
										<div style="width:60px;height:60px;border-radius:100%;background-color:<?php  echo $item['bg_color'];?>;display:flex;justify-content:center;align-items:center"><img src="<?php  echo tomedia($item['module_icon'])?>" width="43px" height="43px" /><input type="hidden" name="appmodule_icon[]" value="<?php  echo $item['module_icon'];?>" /></div>
										<span><input type="hidden" name="appbg_color[]" value="<?php  echo $item['bg_color'];?>" /></span>
									</td>
									<td style="text-align:center" data-module_url="<?php  if(!empty($item['module_url'])) { ?><?php  echo $item['module_url'];?><?php  } else { ?>''<?php  } ?>">
											<div class="mainContent">
												<?php  echo $item['module_url'];?>
											</div>
											<input type="hidden" name="appmodule_url[]" value="<?php  echo $item['module_url'];?>" />
									</td>
									
									<td style="text-align:center" data-status="<?php  if(!empty($item['status'])) { ?><?php  echo $item['status'];?><?php  } else { ?>1<?php  } ?>"><?php  if($item['status']==1) { ?><span class="label label-success">显示</span><?php  } else { ?><span class="label label-info">不显示</span><?php  } ?><input type="hidden" name="appstatus[]" value="<?php  echo $item['status'];?>" /></td>

									<td style="text-align:center">
										<a class="btn btn-success" onclick="editappnav(this)" href="javascript:;">编辑<i class="fa fa-edit"></i></a>
										<?php  if(!array_key_exists($item['module_zd'], $sysappModuleTotal)) { ?>
										<a class="btn btn-danger"  onclick="delappnav(this)" href="javascript:;">删除<i class="fa fa-times"></i>
										</a>
										<?php  } ?>
									</td>
								</tr>
							<?php  } } ?>
							</tbody>	
						</table>
					</div>
				</div>
				<!--<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addAppnav"><b>+</b>添加微信菜单</a>
							</div>
				</div>-->
				<!--app nav end--->
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
	</div>
</div>
</form>
<script>
require(['jquery.ui'], function ($){
	$('.appnavtbody').sortable({
		opacity:0.45,
	});
	$('.pcnavtbody').sortable({
		opacity:0.25,
	});
});
function delpcnav(obj){
 if(confirm('删除将无法恢复，确认吗？')){
	$(obj.parentNode.parentNode).remove();
 }
}
function delappnav(obj){
  if(confirm('删除将无法恢复，确认吗？')){
	$(obj.parentNode.parentNode).remove();
  }
}
function editpcnav(obj){
	var tds = $(obj.parentNode.parentNode).find('td');
	var displayorder = tds.eq(1).attr('data-displayorder');
	var module_name = tds.eq(2).attr('data-module_name');
	var module_icon = tds.eq(3).attr('data-module_icon');
	if(typeof module_icon == "undefined"){
		module_icon = '';
	}
	var bg_color = tds.eq(3).attr('data-bg_color');
	if(typeof bg_color == "undefined"){
		bg_color = '#ffffff';
	}
	var module_url = tds.eq(4).attr('data-module_url');
	console.log(module_url);
	if(typeof module_url == "undefined"){
		module_url = '';
	}
	var open_type = tds.eq(5).attr('data-open_type');
	var status = tds.eq(6).attr('data-status');
	var data = {displayorder:displayorder,module_name:module_name,module_url:module_url,module_icon:module_icon,status:status,open_type:open_type,bg_color:bg_color};
	require(['util'], function(util){
			var i = util.dialog("", ["<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'basic_config','ooop'=>'editpcmodules','type'=>'edit'))?>",data],'<button type="button" class="btn btn-success btn-confirm-button">确定</button><button type="button" class="btn btn-default" data-dismiss="modal">取消</button>');
			i.modal("show");
			i.find(".modal-body").css({"padding-top":'0','padding-bottom':'0'});
			i.find(".btn-confirm-button").click(function(){
				var editmodules = i.find("#editmodules");
				var displayorder = editmodules.find("input[name='displayorder']").val();
				if(displayorder<=0){
					displayorder = 0;
				}
				var module_name = editmodules.find("input[name='module_name']").val();
				if(module_name==''){
					util.message('模块名称必须填写!');
					return;
				}
				var module_icon = editmodules.find("input[name='module_icon']").val();
				if(module_icon==''){
					util.message('模块名称必须上传!');
					return;
				}
				
				var module_url = editmodules.find("input[name='module_url']").val();
				if(module_icon==''){
					util.message('模块链接必须填写!');
					return;
				}
				var bg_color = editmodules.find("input[name='bg_color']").val();
				if(module_icon==''){
					util.message('图标背景色必须填写!');
					return;
				}
				var open_type = editmodules.find("input[name='open_type']").val();
				var status = editmodules.find("input[name='status']").val();
				//赋值
				tds.eq(1).attr('data-displayorder',displayorder);
				tds.eq(1).find('span').text(displayorder);
				tds.eq(1).find('input').val(displayorder);
				tds.eq(2).attr('data-module_name',module_name);
				tds.eq(2).find('div').text(module_name);
				tds.eq(2).find('input').val(module_name);
				tds.eq(3).attr('data-module_icon',module_icon);
				tds.eq(3).find('img').attr('src',tomedia(module_icon));
				tds.eq(3).find('div input').val(module_icon);
				tds.eq(3).attr('data-bg_color',bg_color);
				tds.eq(3).find('div').css({'background-color':bg_color});
				tds.eq(3).find('span input').val(bg_color);
				tds.eq(4).attr('data-module_url',module_url);
				tds.eq(4).find('div').text(module_url);
				tds.eq(4).find('input').val(module_url);
				tds.eq(5).attr('data-open_type',open_type);
				if(open_type==1){
					var html = '<span class="label label-success">内页打开</span>';
				}else{
					var html = '<span class="label label-info">新开网页</span>';
				}
				html += '<input type="hidden" name="open_type[]" value="'+open_type+'" />';
				tds.eq(5).empty().html(html);
				tds.eq(5).find('input').val(open_type);
				tds.eq(6).attr('data-status',status);
				if(status==1){
					var html = '<span class="label label-success">显示</span>';
				}else{
					var html = '<span class="label label-info">不显示</span>';
				}
				html += '<input type="hidden" name="status[]" value="'+status+'" />';
				tds.eq(6).empty().html(html);
				tds.eq(6).find('input').val(status);
				i.modal("hide");
			})
	});
}
function editappnav(obj){
	var tds = $(obj.parentNode.parentNode).find('td');
	var displayorder = tds.eq(1).attr('data-displayorder');
	var module_name = tds.eq(2).attr('data-module_name');
	var module_icon = tds.eq(3).attr('data-module_icon');
	if(typeof module_icon == "undefined"){
		module_icon = '';
	}
	var bg_color = tds.eq(3).attr('data-bg_color');
	if(typeof bg_color == "undefined"){
		bg_color = '#ffffff';
	}
	var module_url = tds.eq(4).attr('data-module_url');
	console.log(module_url);
	if(typeof module_url == "undefined"){
		module_url = '';
	}
	//var open_type = tds.eq(4).attr('data-open_type');
	var status = tds.eq(5).attr('data-status');
	var data = {displayorder:displayorder,module_name:module_name,module_url:module_url,module_icon:module_icon,status:status,bg_color:bg_color};
	require(['util'], function(util){
			var i = util.dialog("", ["<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'basic_config','ooop'=>'editappmodules','type'=>'edit'))?>",data],'<button type="button" class="btn btn-success btn-confirm-button">确定</button><button type="button" class="btn btn-default" data-dismiss="modal">取消</button>');
			i.modal("show");
			i.find(".modal-body").css({"padding-top":'0','padding-bottom':'0'});
			i.find(".btn-confirm-button").click(function(){
				var editmodules = i.find("#editmodules");
				var displayorder = editmodules.find("input[name='displayorder']").val();
				if(displayorder<=0){
					displayorder = 0;
				}
				var module_name = editmodules.find("input[name='module_name']").val();
				if(module_name==''){
					util.message('模块名称必须填写!');
					return;
				}
				var module_icon = editmodules.find("input[name='module_icon']").val();
				if(module_icon==''){
					util.message('模块名称必须上传!');
					return;
				}
				
				var module_url = editmodules.find("input[name='module_url']").val();
				if(module_icon==''){
					util.message('模块链接必须填写!');
					return;
				}
				var bg_color = editmodules.find("input[name='bg_color']").val();
				if(module_icon==''){
					util.message('图标背景色必须填写!');
					return;
				}
				//var open_type = editmodules.find("input[name='open_type']").val();
				var status = editmodules.find("input[name='status']").val();
				//赋值
				tds.eq(1).attr('data-displayorder',displayorder);
				tds.eq(1).find('span').text(displayorder);
				tds.eq(1).find('input').val(displayorder);
				tds.eq(2).attr('data-module_name',module_name);
				tds.eq(2).find('div').text(module_name);
				tds.eq(2).find('input').val(module_name);
				tds.eq(3).attr('data-module_icon',module_icon);
				tds.eq(3).find('img').attr('src',tomedia(module_icon));
				tds.eq(3).find('div input').val(module_icon);
				tds.eq(3).attr('data-bg_color',bg_color);
				tds.eq(3).find('div').css({'background-color':bg_color});
				tds.eq(3).find('span input').val(bg_color);
				tds.eq(4).attr('data-module_url',module_url);
				tds.eq(4).find('div').text(module_url);
				tds.eq(4).find('input').val(module_url);
				
				tds.eq(5).attr('data-status',status);
				if(status==1){
					var html = '<span class="label label-success">显示</span>';
				}else{
					var html = '<span class="label label-info">不显示</span>';
				}
				html += '<input type="hidden" name="appstatus[]" value="'+status+'" />';
				tds.eq(5).empty().html(html);
				tds.eq(5).find('input').val(status);
				i.modal("hide");
			})
	});
}
function tomedia(src) {
	if(typeof src != 'string')
		return '';
	if(src.indexOf('http://') == 0 || src.indexOf('https://') == 0) {
		return src;
	} else if(src.indexOf('./addons') == 0) {
		src=src.substr(2);
		return window.sysinfo.siteroot + src;
	} else if(src.indexOf('../addons') == 0 || src.indexOf('../attachment') == 0) {
		src=src.substr(3);
		return window.sysinfo.siteroot + src;
	} else if(src.indexOf('./resource') == 0) {
		src=src.substr(2);
		return window.sysinfo.siteroot + 'app/' + src;
	} else if(src.indexOf('images/') == 0) {
		return window.sysinfo.attachurl+ src;
	}
}
$(function(){
	$("#addPcnav").on('click',function(){
		require(['util'], function(util){
			var i = util.dialog("", ["<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'basic_config','ooop'=>'editpcmodules','type'=>'add'))?>",{maxnums:$("#pcnavlists tbody tr").length}],'<button type="button" class="btn btn-success btn-confirm-button">确定</button><button type="button" class="btn btn-default" data-dismiss="modal">取消</button>');
			i.modal("show");
			i.find(".modal-body").css({"padding-top":'0','padding-bottom':'0'});
			i.find(".btn-confirm-button").click(function(){
				var editmodules = i.find("#editmodules");
				var displayorder = editmodules.find("input[name='displayorder']").val();
				if(displayorder<=0){
					displayorder = 0;
				}
				var module_name = editmodules.find("input[name='module_name']").val();
				if(module_name==''){
					util.message('模块名称必须填写!');
					return;
				}
				var module_icon = editmodules.find("input[name='module_icon']").val();
				if(module_icon==''){
					util.message('模块名称必须上传!');
					return;
				}
				
				var module_url = editmodules.find("input[name='module_url']").val();
				if(module_url==''){
					util.message('模块链接必须填写!');
					return;
				}
				var bg_color = editmodules.find("input[name='bg_color']").val();
				if(bg_color==''){
					util.message('图标背景色必须填写!');
					return;
				}
				var open_type = editmodules.find("input[name='open_type']").val();
				var status = editmodules.find("input[name='status']").val();
				//赋值
				var module_zd = randomModule(5);
				vhtml = '<tr><td style="display:none" class="appmodule_zd" data-module_zd="'+module_zd+'"><input type="hidden" name="appmodule_zd[]" value="'+module_zd+'" /></td>';
					vhtml += '<td class="row-hover" data-displayorder="'+displayorder+'" style="text-align:center">';
							vhtml += '<span class="label label-success">'+displayorder+'</span>';
					vhtml += '<input type="hidden" name="displayorder[]" value="'+displayorder+'" /></td>';
					vhtml += '<td class="row-hover" style="text-align:center" data-module_name="'+module_name+'">';
							vhtml += '<div class="mainContent">'+module_name+'</div>';
					vhtml += '<input type="hidden" name="module_name[]" value="'+module_name+'" /></td>';
					vhtml += '<td class="row-hover" style="text-align:center" data-module_icon="'+module_icon+'" data-bg_color="'+bg_color+'">';
						vhtml += '<div style="width:60px;height:60px;border-radius:100%;background-color:'+bg_color+';display:flex;justify-content:center;align-items:center"><img src="'+tomedia(module_icon)+'" width="43px" height="43px" /><input type="hidden" name="module_icon[]" value="'+module_icon+'" /></div>';
					vhtml += '<span><input type="hidden" name="bg_color[]" value="'+bg_color+'" /></span></td>';
					vhtml += '<td style="text-align:center" data-module_url="'+module_url+'">';
							vhtml += '<div class="mainContent">'+module_url+'</div>';
					vhtml += '<input type="hidden" name="module_url[]" value="'+module_url+'" /></td>';
					vhtml += '<td style="text-align:center" data-open_type="'+open_type+'">';
					if(open_type==1){
						vhtml += '<span class="label label-success">内页打开</span>';
					}else{
						vhtml += '<span class="label label-info">新开网页</span>';
					}
					vhtml += '<input type="hidden" name="open_type[]" value="'+open_type+'" /></td>';
					vhtml += '<td style="text-align:center" data-status="'+status+'">';
					if(status==1){
						vhtml += '<span class="label label-success">显示</span>';
					}else{
						vhtml += '<span class="label label-info">不显示</span>';
					}
					vhtml += '<input type="hidden" name="status[]" value="'+status+'" /></td>';
					vhtml += '<td style="text-align:center">';
						vhtml += '<a class="btn btn-success" onclick="editpcnav(this)" href="javascript:;">编辑<i class="fa fa-edit"></i></a>&nbsp;<a class="btn btn-danger" onclick="delpcnav(this)" href="javascript:;">删除<i class="fa fa-times"></i></a></td></tr>';
				$("#pcnavlists tbody").append(vhtml);
				i.modal("hide");
			})
		});
	});
	$("#addAppnav").on('click',function(){
		require(['util'], function(util){
			var i = util.dialog("", ["<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'basic_config','ooop'=>'editappmodules','type'=>'add'))?>",{maxnums:$("#appnavlists tbody tr").length}],'<button type="button" class="btn btn-success btn-confirm-button">确定</button><button type="button" class="btn btn-default" data-dismiss="modal">取消</button>');
			i.modal("show");
			i.find(".modal-body").css({"padding-top":'0','padding-bottom':'0'});
			i.find(".btn-confirm-button").click(function(){
				var editmodules = i.find("#editmodules");
				var displayorder = editmodules.find("input[name='displayorder']").val();
				if(displayorder<=0){
					displayorder = 0;
				}
				var module_name = editmodules.find("input[name='module_name']").val();
				if(module_name==''){
					util.message('模块名称必须填写!');
					return;
				}
				var module_icon = editmodules.find("input[name='module_icon']").val();
				if(module_icon==''){
					util.message('模块名称必须上传!');
					return;
				}
				
				var module_url = editmodules.find("input[name='module_url']").val();
				if(module_url==''){
					util.message('模块链接必须填写!');
					return;
				}
				var bg_color = editmodules.find("input[name='bg_color']").val();
				if(bg_color==''){
					util.message('图标背景色必须填写!');
					return;
				}
				//var open_type = editmodules.find("input[name='open_type']").val();
				var status = editmodules.find("input[name='status']").val();
				//赋值
				var module_zd = randomModule(5);
				vhtml = '<tr><td style="display:none" class="appmodule_zd" data-module_zd="'+module_zd+'"><input type="hidden" name="appmodule_zd[]" value="'+module_zd+'" /></td>';
					vhtml += '<td class="row-hover" data-displayorder="'+displayorder+'" style="text-align:center">';
							vhtml += '<span class="label label-success">'+displayorder+'</span>';
					vhtml += '<input type="hidden" name="appdisplayorder[]" value="'+displayorder+'" /></td>';
					vhtml += '<td class="row-hover" style="text-align:center" data-module_name="'+module_name+'">';
							vhtml += '<div class="mainContent">'+module_name+'</div>';
					vhtml += '<input type="hidden" name="appmodule_name[]" value="'+module_name+'" /></td>';
					vhtml += '<td class="row-hover" style="text-align:center" data-module_icon="'+module_icon+'" data-bg_color="'+bg_color+'">';
						vhtml += '<div style="width:60px;height:60px;border-radius:100%;background-color:'+bg_color+';display:flex;justify-content:center;align-items:center"><img src="'+tomedia(module_icon)+'" width="43px" height="43px" /><input type="hidden" name="appmodule_icon[]" value="'+module_icon+'" /></div>';
					vhtml += '<span><input type="hidden" name="appbg_color[]" value="'+bg_color+'" /></span></td>';
					vhtml += '<td style="text-align:center" data-module_url="'+module_url+'">';
							vhtml += '<div class="mainContent">'+module_url+'</div>';
					vhtml += '<input type="hidden" name="appmodule_url[]" value="'+module_url+'" /></td>';
					
					vhtml += '<td style="text-align:center" data-status="'+status+'">';
					if(status==1){
						vhtml += '<span class="label label-success">显示</span>';
					}else{
						vhtml += '<span class="label label-info">不显示</span>';
					}
					vhtml += '<input type="hidden" name="appstatus[]" value="'+status+'" /></td>';
					vhtml += '<td style="text-align:center">';
						vhtml += '<a class="btn btn-success" onclick="editappnav(this)" href="javascript:;">编辑<i class="fa fa-edit"></i></a>&nbsp;<a class="btn btn-danger" onclick="delappnav(this)" href="javascript:;">删除<i class="fa fa-times"></i></a></td></tr>';
				$("#appnavlists tbody").append(vhtml);
				i.modal("hide");
			})
		});
	});
	
})
function randomModule(min){
    var str = "",
        range = min,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<?php  } ?>
<?php  } else if($oop=='bar_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">微信设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启开场时间</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="djs_on" value="0"  <?php  if($bar_config['djs_on'] == '0') { ?>checked="true"<?php  } ?> onclick="djs_close();"> 不开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="djs_on" value="1"   <?php  if($bar_config['djs_on'] == '1') { ?>checked="true"<?php  } ?> onclick="djs_open();">开启
						</label>
					</div>
				</div>
				<div class="form-group djs" <?php  if($bar_config['djs_on'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">酒吧每日营业时间</label>
					<div class="col-sm-9">
						<?php echo tpl_form_field_daterange('work_time',array('start'=>date('Y-m-d H:i:s',empty($bar_config['work_time_start'])?time():$bar_config['work_time_start']),'end'=>date('Y-m-d H:i:s',empty($bar_config['work_time_end'])?time()+3600*5:$bar_config['work_time_end'])),true);?>
						<span class="help-block">酒吧每日营业时间段 设置一次后、以后每天酒吧的营业时间均为此时段</span>
					</div>
				</div>
				<div class="form-group djs" <?php  if($bar_config['djs_on'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">未开场倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('djs_bg', $bar_config['djs_bg']);?>
						<span class="help-block">倒计时背景图片 建议标准 640 * 1200</span>
					</div>
				</div>
				<div class="form-group djs" <?php  if($bar_config['djs_on'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">倒计时标题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $bar_config['djs_title'];?>" class="form-control" name="djs_title" >
						<span class="help-block">倒计时标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信顶部通知内容</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $bar_config['top_marqureen'];?>" class="form-control" name="top_marqureen" >
						<span class="help-block">微信顶部通知内容 可通过微信右边的按钮关闭此项 注意:此处不填写的话 微信界面将不显示顶部通知内容</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信网页标题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $bar_config['wechat_title'];?>" class="form-control" name="wechat_title" >
						<span class="help-block">微信网页标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信主标题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $bar_config['wechat_logo_title'];?>" class="form-control" name="wechat_logo_title" >
						<span class="help-block">微信网页标题 注意:此处不填写的话 微信界面将不显示顶部内容【logo以及标题】</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信logo</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bar_wechat_logo', $bar_config['bar_wechat_logo']);?>
						<span class="help-block">微信界面logo 炫酷风格标准: 60 * 60</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信logo背景图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bar_logo_bg', $bar_config['bar_logo_bg']);?>
						<span class="help-block">酒吧logo背景图 建议标准 640 * 40 注:此图在搭讪、消息等界面均会用到</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">上墙和霸屏是否需要审核</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="status" value="1" id="status_1" <?php  if($bar_config['status'] == '1') { ?>checked="true"<?php  } ?>> 无需审核
						</label>
						<label class="radio-inline">
							<input type="radio" name="status" value="2" id="status_2"  <?php  if($bar_config['status'] == '2') { ?>checked="true"<?php  } ?>>必须审核
						</label>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">发送上墙消息时间间隔</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="send_pl"  class="form-control" value="<?php  echo $bar_config['send_pl'];?>">
											<span class="input-group-addon">秒</span>
										</div>
										<span class="help-block">发送上墙消息时间间隔【对所有类型消息生效】 填写0代表不限制</span>
									</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信上墙微信背景图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bar_app_bg', $bar_config['bar_app_bg']);?>
						<span class="help-block">上墙微信背景图 建议标准 640 * 1120 <span class="label label-danger">注:此项新版将不生效、由皮肤设置管理</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信上墙微信背景背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('bar_app_bgcolor',$bar_config['bar_app_bgcolor']);?>
					<span class="help-block">微信上墙微信背景背景色  <span class="label label-danger">注:此项新版将不生效、由皮肤设置管理</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信上墙消息背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('wechat_bgcolor',$bar_config['wechat_bgcolor']);?>
					<span class="help-block">微信上墙消息背景色  <span class="label label-danger">注:此项新版将不生效、由皮肤设置管理</span></span>
					</div>
				</div>
				
				
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">禁词</label>
					<div class="col-sm-9 ">
					<textarea style="height:200px;" class="form-control" name="forbidden_words" id="quit-tips" cols="70"><?php  echo $bar_config['forbidden_words'];?></textarea>
                    <span class="help-block">禁词、多条请以#隔开、注意#为英文半角符号、请认真填写</span>
					</div>
                </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启oss鉴黄(图片以及视频)</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="oss_sex_open" value="0"  <?php  if($bar_config['oss_sex_open'] == '0') { ?>checked="true"<?php  } ?> > 不开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="oss_sex_open" value="1"   <?php  if($bar_config['oss_sex_open'] == '1') { ?>checked="true"<?php  } ?> >开启
						</label>
						<span class="help-block">鉴黄只对oss图片生效</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信是否显示个人中心</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_my" value="1"  <?php  if($bar_config['open_my'] == '1') { ?>checked="true"<?php  } ?>> 显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_my" value="0"   <?php  if($bar_config['open_my'] == '0') { ?>checked="true"<?php  } ?>>关闭
						</label>
						<span class="help-block">是否显示个人中心</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信是否开启搭讪功能</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_jy" value="1"  <?php  if($bar_config['open_jy'] == '1') { ?>checked="true"<?php  } ?> onclick="open_jy2()"> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_jy" value="0"   <?php  if($bar_config['open_jy'] == '0') { ?>checked="true"<?php  } ?> onclick="close_jy()">关闭
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信是否开启许愿</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="show_xy" value="1"  <?php  if($bar_config['show_xy'] == '1') { ?>checked="true"<?php  } ?> > 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_xy" value="2"   <?php  if($bar_config['show_xy'] == '2') { ?>checked="true"<?php  } ?>>不开启
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信是否开启土豪榜</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_th" value="1"  <?php  if($bar_config['open_th'] == '1') { ?>checked="true"<?php  } ?> > 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_th" value="2"   <?php  if($bar_config['open_th'] == '2') { ?>checked="true"<?php  } ?>>不开启
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信是否开启游戏</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_yx" value="1"  <?php  if($bar_config['open_yx'] == '1') { ?>checked="true"<?php  } ?> > 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_yx" value="2"   <?php  if($bar_config['open_yx'] == '2') { ?>checked="true"<?php  } ?>>不开启
						</label>
					</div>
				</div>
			
		</div>	
</div>
<!---微信皮肤-->
<div class="panel panel-default">
	<div class="panel-heading">微信皮肤设置</div>	
	<div class="panel-body">
<div class="form-group style-item">
					<div class="col-sm-12 ">
						<ul class="list-group" id="style_lists">
							  <?php  if(is_array($wechat_styles)) { foreach($wechat_styles as $key => $row) { ?>
									
									<li class="list-group-item" id="style_box_<?php  echo $key;?>">
										<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">皮肤名称</label>
										<div class="col-sm-9">
											<input type="text" value="<?php  echo $row['skin_name'];?>" class="form-control" name="skin_name[]" >
											<span class="help-block">注:4个汉字以内</span>
										</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">预览图<br>(200*200)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											<?php  echo tpl_form_field_image('image_thumb[]', $row['image_thumb']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">真实背景图<br>(720*1280)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											 <?php  echo tpl_form_field_image('image_big[]', $row['image_big']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">主体色<br>(rgba(0,0,0,0.4)为半透明色)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											<?php  echo tpl_form_field_color('normal_color[]', $row['normal_color']);?>
											</div>
											<span class="help-block">建议设置成白色</span>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">消息背景色<br>(rgba(0,0,0,0.4)为半透明色)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											<?php  echo tpl_form_field_color('bg_color[]', $row['bg_color']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">底部背景色<br>(rgba(0,0,0,0.6)为半透明色)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											<?php  echo tpl_form_field_color('footer_color[]', $row['footer_color']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">右侧霸屏图片(89*89)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											 <?php  echo tpl_form_field_image('image_bp[]', $row['image_bp']);?>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">右侧表白图片(89*89)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											<?php  echo tpl_form_field_image('image_bb[]', $row['image_bb']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">右侧红包图片(89*89)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											 <?php  echo tpl_form_field_image('image_hb[]', $row['image_hb']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">右侧打赏图片(89*89)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											 <?php  echo tpl_form_field_image('image_ds[]', $row['image_ds']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">右侧弹幕图片(89*89)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											 <?php  echo tpl_form_field_image('image_dm[]', $row['image_dm']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">右侧许愿图片(89*89)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											 <?php  echo tpl_form_field_image('image_xy[]', $row['image_xy']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">右侧送礼图片(89*89)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											 <?php  echo tpl_form_field_image('image_gift[]', $row['image_gift']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">右侧顶部壕榜图片(118*145)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											 <?php  echo tpl_form_field_image('image_haobang[]', $row['image_haobang']);?>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-12 col-sm-3 col-md-2 control-label">右侧顶部点歌图片(89*89)</label>
											<div class="col-sm-9 col-xs-12  col-md-10">
											 <?php echo tpl_form_field_image('image_song[]',empty($row['image_song'])?$_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/song.png':$row['image_song']);?>
											</div>
										</div>
										<div class="form-group"><div class="col-sm-9  col-xs-12 col-md-2"><a href="javascript:;" class="btn btn-danger" onclick="style_delete('<?php  echo $key;?>')" >删除</a></div></div>
										</li>
							 <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addStyle"><b>+</b>新增皮肤</a>
							</div>
					    </div>
					</div>
			    </div>
</div>
</div>
<!--微信皮肤--->
<div class="panel panel-default">
	<div class="panel-heading">大屏设置</div>	
	<div class="panel-body">
			<?php  if(!is_error($this->barstyle_check())) { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏上墙版本设置</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="barwall_showtype" value="1"  <?php  if($bar_config['barwall_showtype'] == '1') { ?>checked="true"<?php  } ?> >老版本
						</label>
						<label class="radio-inline">
							<input type="radio" name="barwall_showtype" value="2" <?php  if($bar_config['barwall_showtype'] == '2') { ?>checked="true"<?php  } ?> >新版本
						</label>
					</div>
				</div>
			<?php  } ?>
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏酒吧logo</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bar_logo', $bar_config['bar_logo']);?>
						<span class="help-block">大屏酒吧logo 标准: 160 * 100</span>
					</div>
			</div>
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏网页标题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $bar_config['pc_title'];?>" class="form-control" name="pc_title" >
						<span class="help-block">大屏网页标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏主标题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $bar_config['wall_title'];?>" class="form-control" name="wall_title" >
						<span class="help-block">大屏主标题</span>
					</div>
				</div>
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">消息滚动类型</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="wall_type" value="1"  <?php  if($bar_config['wall_type'] == '1') { ?>checked="true"<?php  } ?> onclick="wall_typeshu()">竖屏滚动
						</label>
						<label class="radio-inline">
							<input type="radio" name="wall_type" value="2" <?php  if($bar_config['wall_type'] == '2') { ?>checked="true"<?php  } ?> onclick="wall_typeheng()">横屏滚动
						</label>
					</div>
				</div>
				<div class="form-group wall_heng" <?php  if($bar_config['wall_type'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">横屏滚动是否循环</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="wall_danmu_loop" value="0"  <?php  if($bar_config['wall_danmu_loop'] == '0') { ?>checked="true"<?php  } ?>>不循环
						</label>
						<label class="radio-inline">
							<input type="radio" name="wall_danmu_loop" value="1" <?php  if($bar_config['wall_danmu_loop'] == '1') { ?>checked="true"<?php  } ?>>循环
						</label>
					</div>
				</div>
				<div class="form-group wall_heng" <?php  if($bar_config['wall_type'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">横屏滚动消息颜色类型</label>
					<div class="col-sm-9">
						
						<label class="radio-inline">
							<input type="radio" name="danmuwall_msgcolor_type" value="1" <?php  if($bar_config['danmuwall_msgcolor_type'] == '1') { ?>checked="true"<?php  } ?>>固定色
						</label>
						<label class="radio-inline">
							<input type="radio" name="danmuwall_msgcolor_type" value="2"  <?php  if($bar_config['danmuwall_msgcolor_type'] == '2') { ?>checked="true"<?php  } ?>>随机色
						</label>
						<span class="help-block">选择固定色、请自己设置普通文字颜色以及霸屏等消息颜色</span>
					</div>
				</div>
				<div class="form-group wall_heng" <?php  if($bar_config['wall_type'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">横屏滚动消息是否显示发送时间</label>
					<div class="col-sm-9">
						
						<label class="radio-inline">
							<input type="radio" name="danmuwall_show_msgtime" value="1" <?php  if($bar_config['danmuwall_show_msgtime'] == '1') { ?>checked="true"<?php  } ?>>显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="danmuwall_show_msgtime" value="2"  <?php  if($bar_config['danmuwall_show_msgtime'] == '2') { ?>checked="true"<?php  } ?>>不显示
						</label>
						
					</div>
				</div>
				<div class="form-group wall_heng" <?php  if($bar_config['wall_type'] == '1') { ?>style="display:none"<?php  } ?>>
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">横屏滚动消息框边界颜色</label>
										<div class="col-sm-8 col-lg-9 col-xs-12">
											<?php  echo tpl_form_field_color('danmuwall_bordercolor',$bar_config['danmuwall_bordercolor']);?>
											<span class="help-block">横屏滚动消息框边界颜色 透明为:transparent</span>
										</div>
				</div>
				<div class="form-group wall_heng" <?php  if($bar_config['wall_type'] == '1') { ?>style="display:none"<?php  } ?>>
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">横屏滚动消息背景色</label>
										<div class="col-sm-8 col-lg-9 col-xs-12">
											<?php  echo tpl_form_field_color('danmuwall_bgcolor',$bar_config['danmuwall_bgcolor']);?>
											<span class="help-block">横屏滚动消息背景色 透明为:transparent</span>
										</div>
				</div>
				<div class="form-group wall_heng" <?php  if($bar_config['wall_type'] == '1') { ?>style="display:none"<?php  } ?>>
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">横屏滚动消息总条数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="wall_danmu_loop_max"  class="form-control" value="<?php  echo $bar_config['wall_danmu_loop_max'];?>">
											<span class="input-group-addon">条</span>
										</div>
										<span class="help-block">横屏滚动消息总条数</span>
									</div>
				</div>
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏二维码类型</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="qrcode_type" value="1"  <?php  if($bar_config['qrcode_type'] == '1') { ?>checked="true"<?php  } ?>> 公众号二维码
						</label>
						<label class="radio-inline">
							<input type="radio" name="qrcode_type" value="2"   <?php  if($bar_config['qrcode_type'] == '2') { ?>checked="true"<?php  } ?>>直接上墙二维码
						</label>
						<?php  if($_W['account']['level']==4) { ?>
						<label class="radio-inline">
							<input type="radio" name="qrcode_type" value="3"   <?php  if($bar_config['qrcode_type'] == '3') { ?>checked="true"<?php  } ?>>带参二维码
						</label>
						<?php  } ?>
						<span class="help-block">公众号二维码请在基础设置里设置 注意:代参二维码可直接关注公众号</span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">二维码宽度</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="qrcode_width"  class="form-control" value="<?php  echo $bar_config['qrcode_width'];?>">
											<span class="input-group-addon">px</span>
										</div>
										<span class="help-block">二维码宽度 按键盘空格键显示二维码</span>
									</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">二维码高度</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="qrcode_height"  class="form-control" value="<?php  echo $bar_config['qrcode_height'];?>">
											<span class="input-group-addon">px</span>
										</div>
										<span class="help-block">二维码高度 按键盘空格键显示二维码</span>
									</div>
				</div>
			<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">炫酷风格大屏抖动频率</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="dou_seconds"  class="form-control" value="<?php  echo $bar_config['dou_seconds'];?>">
											<span class="input-group-addon">秒</span>
										</div>
										<span class="help-block">每隔多少秒、大屏幕抖动一次</span>
									</div>
				</div>	
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕版权设置</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $bar_config['copy_right'];?>" class="form-control" name="copy_right" >
						<span class="help-block">大屏幕版权设置</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕打开加载loading背景图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wall_bg', $bar_config['wall_bg']);?>
						<span class="help-block">大屏幕打开加载loading背景图 请上传宽度大于1000px，高度大于600px的图片</span>
					</div>
				</div>
				<div class="form-group" style="display:none">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('bg_video', $bar_config['bg_video']);?>
						<span class="help-block">pc背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是默认风格、上传背景视频后、风格将不再支持设置</span>
					</div>
				</div>
				<!--2018 03 19 add 多图背景--->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景类型</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="bar_bgtype" value="3"  <?php  if($bar_config['bar_bgtype'] == '3') { ?>checked="true"<?php  } ?> onclick="bar_bg_type3()">无背景
						</label>
						<label class="radio-inline">
							<input type="radio" name="bar_bgtype" value="1"   <?php  if($bar_config['bar_bgtype'] == '1') { ?>checked="true"<?php  } ?> onclick="bar_bg_type1()">图片背景
						</label>
						<label class="radio-inline">
							<input type="radio" name="bar_bgtype" value="2"   <?php  if($bar_config['bar_bgtype'] == '2') { ?>checked="true"<?php  } ?> onclick="bar_bg_type2()">视频背景
						</label>
					</div>
				</div>
				<div class="form-group bar_seleted_imgs" <?php  if($bar_config['bar_bgtype'] != '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">多图背景</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_multi_image('bar_bgimgs', $bar_config['bar_bgimgs']);?>
						<span class="help-block">多图背景 最多可添加9张图片，请上传宽度大于1000px，高度大于600px的图片，200KB以下</span>
					</div>
				</div>
				<div class="form-group bar_seleted_videos" <?php  if($bar_config['bar_bgtype'] != '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">多视频背景</label>
						<div class="col-sm-9">
						  <ul id="bp_bgvideos" style="padding:10px">
						  <?php  if(is_array($bar_config['bar_bgvideos'])) { foreach($bar_config['bar_bgvideos'] as $l) { ?>
							<li>
								<div class="form-group">
									<div class="col-sm-9  col-xs-9 col-md-9">
										<?php  echo tpl_form_field_video('bar_bgvideos[]', $l);?>
										<span class="help-block">多视频背景 最多可添加9个视频【mp4/webm/ogg格式】，推荐5M内</span>
									</div>
									<div class="col-sm-3  col-xs-3 col-md-3">
												<a href="javascript:;" class="btn btn-danger" onclick="bar_bgdelete(this)" >删除</a>
									</div>
									
								</div>
							</li>
						  <?php  } } ?>
						  </ul>
						  <div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addbgvideo"><b>+</b>添加视频</a>
							</div>
						  </div>
						</div>
				</div>
				<!--2018 03 19 add end -->
				<div class="form-group" style="display:none">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕底部跑马灯</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $bar_config['footer_marqueen'];?>" class="form-control" name="footer_marqueen" >
						<span class="help-block">大屏幕底部跑马灯 此处每5分钟显示一次此内容</span>
					</div>
				</div>
				<div class="form-group" >
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏幕背景音乐</span></label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$bar_config['bg_music'])?>
						<span class="help-block"><span class="label label-success"> 不填写将不播放键盘，O键用于开关背景音乐、请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">墙体历史消息总数量（默认20条）</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="show_num"  class="form-control" value="<?php  echo $bar_config['show_num'];?>">
											<span class="input-group-addon">条</span>
										</div>
										<span class="help-block">墙体历史消息总数量（默认20条、此值必须大于0</span>
									</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">上墙大屏幕切换消息速度(秒)</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="roll_speed"  class="form-control" value="<?php  echo $bar_config['roll_speed'];?>">
											<span class="input-group-addon">秒</span>
										</div>
										<span class="help-block">填入每隔几秒显示下一条消息，最小为1秒，精确到小数点后一位（如输入1.1，表示1.1秒）</span>
									</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">上墙图片大小</label>
					<div class="col-sm-9">
							<select name="pic_size" id="pic_size" class="form-control">
                                <option value="small" <?php  if($bar_config['pic_size']=='small') { ?>selected="selected"<?php  } ?>>小图</option>
                                <option value="middle" <?php  if($bar_config['pic_size']=='middle') { ?>selected="selected"<?php  } ?>>中图</option>
                                <option value="big" <?php  if($bar_config['pic_size']=='big') { ?>selected="selected"<?php  } ?>>大图</option>
                            </select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">上墙文字大小</label>
					<div class="col-sm-9">
							<select name="font_size" id="font_size" class="form-control">
                                <option value="small" <?php  if($bar_config['font_size']=='small') { ?>selected="selected"<?php  } ?>>小号</option>
                                <option value="middle" <?php  if($bar_config['font_size']=='middle') { ?>selected="selected"<?php  } ?>>中号</option>
                                <option value="big" <?php  if($bar_config['font_size']=='big') { ?>selected="selected"<?php  } ?>>大号</option>
                            </select>
					</div>
				</div>
				<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">上墙文字颜色</label>
										<div class="col-sm-8 col-lg-9 col-xs-12">
											<?php  echo tpl_form_field_color('font_color',$bar_config['font_color']);?>
											<span class="help-block">上墙文字颜色</span>
										</div>
				</div>
				<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏/打赏文字颜色</label>
										<div class="col-sm-8 col-lg-9 col-xs-12">
											<?php  echo tpl_form_field_color('bp_font_color',$bar_config['bp_font_color']);?>
											<span class="help-block">霸屏/打赏文字颜色</span>
										</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轮播类型</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="show_slide_type" value="1"  <?php  if($bar_config['show_slide_type'] == '1') { ?>checked="true"<?php  } ?>>只显示图片轮播
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_slide_type" value="2"   <?php  if($bar_config['show_slide_type'] == '2') { ?>checked="true"<?php  } ?>>只显示土豪榜
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_slide_type" value="3"   <?php  if($bar_config['show_slide_type'] == '3') { ?>checked="true"<?php  } ?>>图片轮播与土豪榜都显示
						</label>
					</div>
				</div>
				
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">图片轮播显示时间（默认180秒）</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="slide_time"  class="form-control" value="<?php  echo $bar_config['slide_time'];?>">
											<span class="input-group-addon">秒</span>
										</div>
										<span class="help-block">图片轮播显示时间（默认180秒）</span>
									</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">土豪榜单显示时间（默认180秒）</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="tuhao_time"  class="form-control" value="<?php  echo $bar_config['tuhao_time'];?>">
											<span class="input-group-addon">秒</span>
										</div>
										<span class="help-block">土豪榜单显示时间（默认180秒）</span>
									</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轮播默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('roll_pic', $bar_config['roll_pic']);?>
						<span class="help-block">大屏轮播默认图片 建议标准 415 * 636</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轮播图片尺寸</label>
					<div class="col-sm-9">
							<select name="roll_pic_size" id="roll_pic_size" class="form-control">
                                <option value="small" <?php  if($bar_config['roll_pic_size']=='small') { ?>selected="selected"<?php  } ?>>小尺寸</option>
                                <option value="big" <?php  if($bar_config['roll_pic_size']=='big') { ?>selected="selected"<?php  } ?>>大尺寸</option>
								<option value="close_img" <?php  if($bar_config['roll_pic_size']=='close_img') { ?>selected="selected"<?php  } ?>>仅显示二维码</option>
                                <option value="close" <?php  if($bar_config['roll_pic_size']=='close') { ?>selected="selected"<?php  } ?>>关闭轮播区域</option>
                            </select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏屏幕亮度</label>
					<div class="col-sm-9">
							<select name="screen_light" id="screen_light" class="form-control">
                                <option value="1" <?php  if($bar_config['screen_light']=='1') { ?>selected="selected"<?php  } ?>>亮</option>
                                <option value="2" <?php  if($bar_config['screen_light']=='2') { ?>selected="selected"<?php  } ?>>微亮</option>
                                <option value="3" <?php  if($bar_config['screen_light']=='3') { ?>selected="selected"<?php  } ?>>暗</option>
								<option value="4" <?php  if($bar_config['screen_light']=='4') { ?>selected="selected"<?php  } ?>>微暗</option>
								<option value="5" <?php  if($bar_config['screen_light']=='5') { ?>selected="selected"<?php  } ?>>很暗</option>
                            </select>
					</div>
				</div>
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕是否显示功能菜单</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="show_menu" value="1"  <?php  if($bar_config['show_menu'] == '1') { ?>checked="true"<?php  } ?> > 是
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_menu" value="2"   <?php  if($bar_config['show_menu'] == '2') { ?>checked="true"<?php  } ?>>否
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕是否开启快捷键</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_kjj" value="1"  <?php  if($bar_config['open_kjj'] == '1') { ?>checked="true"<?php  } ?> >开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_kjj" value="2"   <?php  if($bar_config['open_kjj'] == '2') { ?>checked="true"<?php  } ?>>关闭
						</label>
					</div>
				</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">霸屏设置</div>	
	<div class="panel-body">
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启霸屏</label>
					<div class="col-sm-9">
						
						<label class="radio-inline">
							<input type="radio" name="show_bp" value="1"   <?php  if($bar_config['show_bp'] == '1') { ?>checked="true"<?php  } ?> >开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_bp" value="2"  <?php  if($bar_config['show_bp'] == '2') { ?>checked="true"<?php  } ?> > 不开启
						</label>
						<span class="help-block">是否开启霸屏</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启霸屏图片分裂效果</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="bp_image_xuanku" value="1"  <?php  if($bar_config['bp_image_xuanku'] == '1') { ?>checked="true"<?php  } ?> > 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="bp_image_xuanku" value="2"   <?php  if($bar_config['bp_image_xuanku'] == '2') { ?>checked="true"<?php  } ?>>不开启
						</label>
					</div>
				</div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏价格与时间</label>
					<div class="col-sm-9 ">
						<ul class="list-group" id="bp_lists">
							  <li class="list-group-item">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-3">
											价格(元)
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3">
											时间
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3">
											图片个数
										</div>
										<div class="col-sm-8  col-xs-12 col-md-3">
											操作
										</div>
									   
									</div>
							   </li>
							  <?php  if(is_array($bp_lists)) { foreach($bp_lists as $key => $row) { ?>
									<li class="list-group-item" id="bp_box_<?php  echo $key;?>">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-3 bp_moneys">
											<div class="input-group">
												<input type="num" name="moneys[]" class="form-control" value="<?php  echo $row['moneys'];?>"  />
												<span class="input-group-addon">元</span>
											</div>
											
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3 bp_seconds">
											<div class="input-group">
												<input type="num" name="seconds[]" class="form-control"  value="<?php  echo $row['seconds'];?>" />
												<span class="input-group-addon">秒</span>
											</div>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3 bp_imgnums">
											<div class="input-group">
												<input type="num" name="nums[]" class="form-control"  value="<?php  if(empty($row['nums'])) { ?>1<?php  } else { ?><?php  echo $row['nums'];?><?php  } ?>" />
												<span class="input-group-addon">个</span>
											</div>
										</div>
										<div class="col-sm-8  col-xs-12 col-md-3">
												<a href="javascript:;" class="btn btn-danger" onclick="bp_delete(<?php  echo $key;?>)" >删除</a>
										</div>
									   
									</div>
									</li>
							 <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addBp"><b>+</b>添加</a>
							</div>
					  </div>
					</div>
			    </div>
				<!--add bp bg--->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏背景类型设置</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="bp_bgtype" value="1"  <?php  if($bar_config['bp_bgtype'] == '1') { ?>checked="true"<?php  } ?> onclick="bp_bg_type1()">无背景
						</label>
						<label class="radio-inline">
							<input type="radio" name="bp_bgtype" value="2"   <?php  if($bar_config['bp_bgtype'] == '2') { ?>checked="true"<?php  } ?> onclick="bp_bg_type2()">图片随机背景
						</label>
						<label class="radio-inline">
							<input type="radio" name="bp_bgtype" value="3"   <?php  if($bar_config['bp_bgtype'] == '3') { ?>checked="true"<?php  } ?> onclick="bp_bg_type3()">视频随机背景
						</label>
					</div>
				</div>
				<div class="form-group bp_bg_type2" <?php  if($bar_config['bp_bgtype'] == '1' || $bar_config['bp_bgtype'] == '3') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">图片背景</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_multi_image('randbp_imgbg', $bp_imgbgs);?>
						<span class="help-block">图片背景 最多可添加9张logo，推荐尺寸1440 * 828像素，200KB以下</span>
					</div>
				</div>
				<div class="form-group bp_bg_type3" <?php  if($bar_config['bp_bgtype'] == '1' || $bar_config['bp_bgtype'] == '2') { ?>style="display:none"<?php  } ?>>
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏背景视频</label>
					<div class="col-sm-9 ">
						<ul class="list-group" id="bp_bg_lists">
							  <?php  if(is_array($bp_bgs)) { foreach($bp_bgs as $key => $row) { ?>
									<li class="list-group-item" id="bp_bg_box_<?php  echo $key;?>">
									<div class="form-group">
										<div class="col-sm-8 col-xs-6 col-md-8">
											<?php  echo tpl_form_field_video('sys_bp_bg[]', $row);?>
										</div>
										<div class="col-sm-4  col-xs-6 col-md-4">
												<a href="javascript:;" class="btn btn-danger" onclick="bp_bg_delete(<?php  echo $key;?>)" >删除</a>
										</div>
									   
									</div>
									</li>
							 <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addBpbutton"><b>+</b>添加视频背景</a>
							</div>
					  </div>
					</div>
			    </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启霸屏主题</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_bp_zhuti" value="1"  <?php  if($bar_config['open_bp_zhuti'] == '1') { ?>checked="true"<?php  } ?> > 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_bp_zhuti" value="2"   <?php  if($bar_config['open_bp_zhuti'] == '2') { ?>checked="true"<?php  } ?>>不开启
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">获取霸屏主题使用权最低霸屏时间（默认30秒）</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="bp_zhuti_seconds"  class="form-control" value="<?php  echo $bar_config['bp_zhuti_seconds'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block">默认30秒、酌情设置</span>
					</div>
				</div>
				<style>
				.align-center>div{text-align:Center}
				</style>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏主题</label>
					<div class="col-sm-9 ">
						<ul class="list-group" id="bp_zhutis">
							  <li class="list-group-item">
									<div class="form-group align-center">
										<div class="col-sm-9 col-xs-12  col-md-2">
											描述
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											缩略图(100*100px)
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											消息图(65*65px)
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3">
											大屏视频(webm/mp4)
										</div>
										<div class="col-sm-8  col-xs-12 col-md-2">
											操作
										</div>
									   
									</div>
							   </li>
							  <?php  if(is_array($bp_zhutis)) { foreach($bp_zhutis as $key => $row) { ?>
							  <li class="list-group-item" id="bp_zhuti_<?php  echo $key;?>">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-8" style="display:none">
											<input type="text" name="bp_ztindex[]" class="form-control"  value="<?php  echo $row['bp_ztindex'];?>" />
										</div>
										<div class="col-sm-6 col-xs-12  col-md-8">
												<input type="text" name="bp_ztdes[]" class="form-control"  value="<?php  echo $row['bp_ztdes'];?>" placeholder="简明扼要、4字内" />
										</div>
										<div class="col-sm-6  col-xs-12 col-md-4">
											<a href="javascript:;" class="btn btn-danger btn-del-bpzhuti" onclick="bp_zt_delete(<?php  echo $key;?>)" >删除此项</a>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-3">
											<?php  echo tpl_form_field_image('bp_zticon[]',$row['bp_zticon']);?>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3">
												<?php  echo tpl_form_field_image('bp_ztmsgicon[]',$row['bp_ztmsgicon']);?>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3">
												<?php  echo tpl_form_field_image('bp_pcicon[]',$row['bp_pcicon']);?>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3">
												<?php  echo tpl_form_field_video('bp_ztvideo[]',$row['bp_ztvideo']);?>
										</div>
									</div>	
							   </li>
							   <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addBpzhuti"><b>+</b>添加</a>
							</div>
					  </div>
					</div>
			    </div>
				<!---add bp bg end---->
				<!--add bp style--->
				<?php  if(!is_error($this->barstyle_check())) { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏风格选择</label>
					<div class="col-sm-9">
							<select name="bp_style"  class="form-control">
								<?php  if(is_array($sys_bp_style)) { foreach($sys_bp_style as $key => $row) { ?>
                                <option value="<?php  echo $key;?>" <?php  if($bar_config['bp_style']==$key) { ?>selected="selected"<?php  } ?>><?php  echo $row['style_name'];?></option>
                               <?php  } } ?>
                            </select>
					</div>
				</div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏自定义风格</label>
					<div class="col-sm-9 ">
						<ul class="list-group" id="bp_styles">
							  <?php  if(is_array($sys_bp_style)) { foreach($sys_bp_style as $key => $row) { ?>
							  <li class="list-group-item" id="bp_style_item">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-8" style="display:none">
											<input type="text" name="bp_styleindex[]" class="form-control"  value="<?php  echo $key;?>" />
										</div>
										<div class="col-sm-6 col-xs-12  col-md-8">
												<input type="text" name="bp_stylename[]" class="form-control"  value="<?php  echo $row['style_name'];?>" />
												<span class="help-block">风格名称</span>
										</div>
										<div class="col-sm-6  col-xs-12 col-md-4">
											<a href="javascript:;" class="btn btn-danger btn-del-bpzhuti" onclick="bp_style_delete(this)">删除此项</a>
										</div>
									</div>
									<div class="form-group" style="margin:5px;">
									  <div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_styleman1[]',$row['avatar_mancircle1']);?>
											<span class="help-block">男士头像外圈图1(320*320px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_styleman2[]',$row['avatar_mancircle2']);?>
											<span class="help-block">男士头像外圈图2(320*320px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylewoman1[]',$row['avatar_womancircle1']);?>
											<span class="help-block">女士头像外圈图1(320*320px)</span>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylewoman2[]',$row['avatar_womancircle2']);?>
											<span class="help-block">女士头像外圈图2(320*320px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylemanwing[]',$row['avatar_manwing']);?>
											<span class="help-block">男士头像外圈箭头(558*203px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylewomanwing[]',$row['avatar_womanwing']);?>
											<span class="help-block">女士头像外圈箭头(558*203px)</span>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylehat[]',$row['avatar_hat']);?>
											<span class="help-block">头像皇冠帽子(85*79px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylenamebg[]',$row['nickname_bg']);?>
											<span class="help-block">昵称背景(914*170px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylewcornerbg[]',$row['corner_bg']);?>
											<span class="help-block">边角背景(607*495px)</span>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylefooterbg[]',$row['footer_bg']);?>
											<span class="help-block">底部背景(537*150px)</span>
										</div>
									  </div>
									</div>	
							   </li>
							   <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addBpstyle"><b>+</b>添加风格</a>
							</div>
					  </div>
					</div>
			    </div>
				<?php  } ?>
				<!--add bp style end -->
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启小电影霸屏</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_video" value="1"  <?php  if($bar_config['open_video'] == '1') { ?>checked="true"<?php  } ?> onclick="open_movie()"> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_video" value="0"   <?php  if($bar_config['open_video'] == '0') { ?>checked="true"<?php  } ?> onclick="close_movie()">关闭
						</label>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">管理员每天免费霸屏次数（默认10次）</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="admin_bp_times"  class="form-control" value="<?php  echo $bar_config['admin_bp_times'];?>">
											<span class="input-group-addon">次</span>
										</div>
										<span class="help-block">每天晚上12点开始刷新</span>
									</div>
				</div>
				
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">打赏设置</div>	
	<div class="panel-body">
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启打赏</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_ds" value="1"  <?php  if($bar_config['open_ds'] == '1') { ?>checked="true"<?php  } ?>> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_ds" value="0"   <?php  if($bar_config['open_ds'] == '0') { ?>checked="true"<?php  } ?>>关闭
						</label>
					</div>
				</div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">打赏用户设置</label>
					<div class="col-sm-9 ">
						<ul class="list-group" id="user_lists">
							  <li class="list-group-item">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-3">
											用户头像
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3">
											用户名称
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											用户简介
										</div>
										<div class="col-sm-8  col-xs-12 col-md-2">
											操作
										</div>
									   
									</div>
							   </li>
							   
							  <?php  if(is_array($user_lists)) { foreach($user_lists as $key => $row) { ?>
									<li class="list-group-item" id="user_box_<?php  echo $key;?>">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-3 ds_user_avatar">
											<div class="input-group">
												<?php  echo tpl_form_field_image('ds_user_avatar[]',$row['ds_user_avatar']);?>
											</div>
											
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3 ds_user_name">
											<div class="input-group">
												<input type="text" name="ds_user_name[]" class="form-control"  value="<?php  echo $row['ds_user_name'];?>" />
											</div>
											
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4 ds_user_des">
											<div class="input-group">
												<input type="text" name="ds_user_des[]" class="form-control"  value="<?php  echo $row['ds_user_des'];?>" />
											</div>
										</div>
										<div class="col-sm-8  col-xs-12 col-md-2">
												<a href="javascript:;" class="btn btn-danger" onclick="user_delete(<?php  echo $key;?>)" >删除</a>
										</div>
									   
									</div>
									</li>
							 <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addUser"><b>+</b>添加</a>
							</div>
					  </div>
					</div>
			    </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">打赏礼物设置</label>
					<div class="col-sm-9 ">
						<ul class="list-group" id="gift_lists">
							  <li class="list-group-item">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-2">
											礼物图片
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											礼物名称
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											价格
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											时间
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											特效
										</div>
										<div class="col-sm-8  col-xs-12 col-md-2">
											操作
										</div>
									   
									</div>
							   </li>
							  <?php  if(is_array($gift_lists)) { foreach($gift_lists as $key => $row) { ?>
									<li class="list-group-item" id="gift_box_<?php  echo $key;?>">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-2 ds_gift_image">
											
												<?php  echo tpl_form_field_image('ds_gift_image[]',$row['ds_gift_image']);?>
											
											
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2 ds_gift_name">
											
												<input type="text" name="ds_gift_name[]" class="form-control"  value="<?php  echo $row['ds_gift_name'];?>" />
											
											
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2 ds_user_money">
											<div class="input-group">
												<input type="num" name="ds_gift_money[]" class="form-control"  value="<?php  echo $row['ds_gift_money'];?>" />
												<span class="input-group-addon">元</span>
											</div>
											
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2 ds_gift_seconds">
											<div class="input-group">
												<input type="num" name="ds_gift_seconds[]" class="form-control"  value="<?php  echo $row['ds_gift_seconds'];?>" />
												<span class="input-group-addon">秒</span>
											</div>
											
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4 ds_gift_tx">
											<?php  echo tpl_form_field_video('ds_gift_tx[]',$row['ds_gift_tx'])?>
											
										</div>
										<div class="col-sm-8  col-xs-12 col-md-5" style="margin-top:20px">
												<a href="javascript:;" class="btn btn-danger" onclick="gift_delete(<?php  echo $key;?>)" >删除</a>
										</div>
									</div>
									
									</li>
							 <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addGift"><b>+</b>添加</a>
							</div>
					  </div>
					</div>
			    </div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">管理员每天免费打赏次数（默认10次）</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="admin_ds_times"  class="form-control" value="<?php  echo $bar_config['admin_ds_times'];?>">
											<span class="input-group-addon">次</span>
										</div>
										<span class="help-block">每天晚上12点开始刷新</span>
									</div>
				</div>
				
				
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">红包设置</div>	
	<div class="panel-body">
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启发红包功能</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_hb" value="1"  <?php  if($bar_config['open_hb'] == '1') { ?>checked="true"<?php  } ?> onclick="sys_openhb()"> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_hb" value="0"   <?php  if($bar_config['open_hb'] == '0') { ?>checked="true"<?php  } ?> onclick="sys_closehb()">关闭
						</label>
					</div>
				</div>
				<div class="form-group sys_open_hb" <?php  if($bar_config['open_hb'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启发红包大屏特效</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="hb_texiaoshow" value="1"  <?php  if($bar_config['hb_texiaoshow'] == '1') { ?>checked="true"<?php  } ?>> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="hb_texiaoshow" value="2"   <?php  if($bar_config['hb_texiaoshow'] == '2') { ?>checked="true"<?php  } ?>>关闭
						</label>
					</div>
				</div>
				<div class="form-group sys_open_hb" <?php  if($bar_config['open_hb'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包消息是否显示总金额与个数</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="show_hb_nums" value="1"  <?php  if($bar_config['show_hb_nums'] == '1') { ?>checked="true"<?php  } ?>> 显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_hb_nums" value="2"   <?php  if($bar_config['show_hb_nums'] == '2') { ?>checked="true"<?php  } ?>> 关闭
						</label>
					</div>
				</div>
				<div class="form-group sys_open_hb" <?php  if($bar_config['open_hb'] == '0') { ?>style="display:none"<?php  } ?>>
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">发红包特效时间设置</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="hb_texiaoshow_time"  class="form-control" value="<?php  echo $bar_config['hb_texiaoshow_time'];?>">
											<span class="input-group-addon">秒</span>
										</div>
										<span class="help-block">发红包特效时间设置</span>
									</div>
				</div>
				
				<div class="form-group sys_open_hb" <?php  if($bar_config['open_hb'] == '0') { ?>style="display:none"<?php  } ?>>
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">用户每日发放群红包每日总金额限制(精确到小数点2位)</label>
									<div class="col-sm-9 ">
										
											<input type="text" name="hb_day_total"  class="form-control" value="<?php  echo $bar_config['hb_day_total'];?>">
										
										<span class="help-block">如：你设置成1000.00 那么用户每天发放的群红包总金额不超过1000.00元、累计超过1000将发放群红包不成功、设置成0即为不限制</span>
									</div>
				</div>
				<div class="form-group sys_open_hb" <?php  if($bar_config['open_hb'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包费率设置是否开放</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_user_input_hbfee" value="1"  <?php  if($bar_config['open_user_input_hbfee'] == '1') { ?>checked="true"<?php  } ?>> 开放
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_user_input_hbfee" value="0"   <?php  if($bar_config['open_user_input_hbfee'] == '0') { ?>checked="true"<?php  } ?>> 不开放
						</label>
						<span class="help-block">注意：系统设置开启了全局红包费率此项将设置无效</span>
					</div>
				</div>
				<div class="form-group sys_open_hb" <?php  if($bar_config['open_hb'] == '0') { ?>style="display:none"<?php  } ?>>
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">发红包费率(精确到小数点2位)</label>
									<div class="col-sm-9 ">
										
											<input type="text" name="hb_feilv"  class="form-control" value="<?php  echo $bar_config['hb_feilv'];?>">
										
										<span class="help-block">请填写小于1的小数 如0.10即为10%、用户发放1元红包则需要收取0.1元手续要 不需要支付手续费请填写0</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包提现方式</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="hb_tixian" value="1"  <?php  if($bar_config['hb_tixian'] == '1') { ?>checked="true"<?php  } ?> onclick="weixin_redpack()">直接到微信钱包
						</label>
						<label class="radio-inline">
							<input type="radio" name="hb_tixian" value="0"   <?php  if($bar_config['hb_tixian'] == '0') { ?>checked="true"<?php  } ?> onclick="tixian_redpack()">粉丝提现
						</label>
					</div>
				</div>
				<div class="form-group min_tixian_money" <?php  if($bar_config['hb_tixian'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现最小金额</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="num" name="tixian_min" class="form-control"  value="<?php  echo $bar_config['tixian_min'];?>" />
							<span class="input-group-addon">元</span>
						</div>
					</div>
				</div>
				<div class="form-group min_tixian_money" <?php  if($bar_config['hb_tixian'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现祝福语</label>
					<div class="col-sm-9">
							<input type="text" value="<?php  echo $bar_config['tixian_zhufu'];?>" class="form-control" name="tixian_zhufu" >
							<span class="help-block">提现祝福语 不要超10个汉字</span>
						
					</div>
				</div>
				<?php  if($sys_config['fans_tx_type']==1) { ?>
				<div class="form-group min_tixian_money" <?php  if($bar_config['hb_tixian'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现活动名称</label>
					<div class="col-sm-9">
						
							<input type="text" value="<?php  echo $bar_config['tixian_huodong'];?>" class="form-control" name="tixian_huodong" >
							<span class="help-block">提现活动名称 不要超10个汉字</span>
						
					</div>
				</div>
				<div class="form-group min_tixian_money" <?php  if($bar_config['hb_tixian'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现活动商家名称</label>
					<div class="col-sm-9">
							<input type="text" value="<?php  echo $bar_config['tixian_shangjia'];?>" class="form-control" name="tixian_shangjia" >
							<span class="help-block">提现活动商家名称 不要超10个汉字</span>
					</div>
				</div>
				<?php  } ?>
				
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">表白设置</div>	
	<div class="panel-body">
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启表白</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_bb" value="1"  <?php  if($bar_config['open_bb'] == '1') { ?>checked="true"<?php  } ?> onclick="open_sys_bb()"> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_bb" value="0"   <?php  if($bar_config['open_bb'] == '0') { ?>checked="true"<?php  } ?> onclick="close_sys_bb()">关闭
						</label>
					</div>
				</div>
				<div class="form-group bb_item" <?php  if($bar_config['open_bb'] == '0') { ?>style="display:none"<?php  } ?>>
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">表白主题设置</label>
					<div class="col-sm-9 ">
						<ul class="list-group" id="bb_lists">
							  <li class="list-group-item">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-2">
											主题名称
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											主题内容
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											主题图片
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											特效
										</div>
										<div class="col-sm-8  col-xs-12 col-md-2">
											操作
										</div>
									   
									</div>
							   </li>
							  <?php  if(is_array($bb_zhuti_lists)) { foreach($bb_zhuti_lists as $key => $row) { ?>
									<li class="list-group-item" id="bb_box_<?php  echo $key;?>">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-2 bb_des">
												<input type="text" name="bb_des[]" class="form-control"  value="<?php  echo $row['des'];?>" placeholder="请输入主题名称" />
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3 bb_content">
												<input type="text" name="bb_content[]" class="form-control"  value="<?php  echo $row['content'];?>" placeholder="请输入主题内容"  />
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2 bb_image">
												<?php  echo tpl_form_field_image('bb_image[]',$row['image']);?>
												<span class="help-block">规格:161*122</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-3 bb_video">
												<?php  echo tpl_form_field_video('bb_video[]',$row['video']);?>
												<span class="help-block">格式:webm</span>
										</div>
										<div class="col-sm-9  col-xs-12 col-md-2">
											<a href="javascript:;" class="btn btn-danger" onclick="bb_delete(<?php  echo $key;?>)" >删除</a>
										</div>
									   
									</div>
									</li>
							 <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addBbzhuti"><b>+</b>添加表白主题</a>
							</div>
					  </div>
					</div>
			    </div>
				<div class="form-group bb_item" <?php  if($bar_config['open_bb'] == '0') { ?>style="display:none"<?php  } ?>>
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">表白价格设置</label>
					<div class="col-sm-9 ">
						<ul class="list-group" id="bb_price_lists">
							  <li class="list-group-item">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4">
											价格
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											时间
										</div>
										<div class="col-sm-8  col-xs-12 col-md-4">
											操作
										</div>
									   
									</div>
							   </li>
							  <?php  if(is_array($bb_ms_lists)) { foreach($bb_ms_lists as $key => $row) { ?>
									<li class="list-group-item" id="bb_price_box_<?php  echo $key;?>">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4 bb_money">
											<div class="input-group">
												<input type="num" name="bb_money[]" class="form-control"  value="<?php  echo $row['money'];?>" />
												<span class="input-group-addon">元</span>
											</div>
											
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4 bb_seconds">
											<div class="input-group">
												<input type="num" name="bb_seconds[]" class="form-control"  value="<?php  echo $row['seconds'];?>" />
												<span class="input-group-addon">秒</span>
											</div>
											
										</div>
										<div class="col-sm-8  col-xs-12 col-md-2">
											<a href="javascript:;" class="btn btn-danger" onclick="bb_price_delete(<?php  echo $key;?>)" >删除</a>
										</div>
									   
									</div>
									</li>
							 <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addBbms"><b>+</b>添加表白项目</a>
							</div>
					  </div>
					</div>
			    </div>
				<div class="form-group bb_item" <?php  if($bar_config['open_bb'] == '0') { ?>style="display:none"<?php  } ?>>
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">管理员每天免费表白次数（默认10次）</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="admin_bb_times"  class="form-control" value="<?php  echo $bar_config['admin_bb_times'];?>">
											<span class="input-group-addon">次</span>
										</div>
										<span class="help-block">每天晚上12点开始刷新</span>
									</div>
				</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">弹幕设置</div>	
	<div class="panel-body">
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启发弹幕功能</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_dm" value="1"  <?php  if($bar_config['open_dm'] == '1') { ?>checked="true"<?php  } ?> onclick="sys_open_dm()"> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_dm" value="0"   <?php  if($bar_config['open_dm'] == '0') { ?>checked="true"<?php  } ?> onclick="sys_close_dm()">关闭
						</label>
					</div>
				</div>
				<div class="form-group dm_openclose" <?php  if($bar_config['open_dm'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启全员免费弹幕</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_dm_free" value="1"  <?php  if($bar_config['open_dm_free'] == '1') { ?>checked="true"<?php  } ?> onclick="free_dm_show()"> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_dm_free" value="0"   <?php  if($bar_config['open_dm_free'] == '0') { ?>checked="true"<?php  } ?> onclick="free_dm_close()">关闭
						</label>
						<span class="help-block">是否开启全员免费弹幕 开启后所有用户免费发送弹幕</span>
					</div>
				</div>
				<div class="form-group free_dm_open" <?php  if($bar_config['open_dm_free'] == '0') { ?>style="display:none"<?php  } ?>>
						<label class="col-xs-12 col-sm-3 col-md-2  control-label">免费弹幕票屏时间</label>
						<div class="col-sm-9 ">
							<div class="input-group">
								<input type="text" name="open_dm_free_time"  class="form-control" value="<?php  echo $bar_config['open_dm_free_time'];?>">
								<span class="input-group-addon">秒</span>
							</div>
							<span class="help-block">免费弹幕飘屏时间</span>
						</div>
				</div>
				<div class="form-group dm_openclose" <?php  if($bar_config['open_dm'] == '0') { ?>style="display:none"<?php  } ?>>
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">弹幕价格与时间</label>
					<div class="col-sm-9 ">
						<ul class="list-group" id="dm_lists">
							  <li class="list-group-item">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4">
											价格(元)
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											时间
										</div>
										<div class="col-sm-8  col-xs-12 col-md-4">
											操作
										</div>
									   
									</div>
							   </li>
							  <?php  if(is_array($dm_lists)) { foreach($dm_lists as $key => $row) { ?>
									<li class="list-group-item" id="dm_box_<?php  echo $key;?>">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4 dm_fees">
											<div class="input-group">
												<input type="num" name="dm_fee[]" class="form-control" value="<?php  echo $row['dm_fee'];?>"  />
												<span class="input-group-addon">元</span>
											</div>
											
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4 dm_seconds">
											<div class="input-group">
												<input type="num" name="dm_seconds[]" class="form-control"  value="<?php  echo $row['dm_seconds'];?>" />
												<span class="input-group-addon">秒</span>
											</div>
											
										</div>
										<div class="col-sm-8  col-xs-12 col-md-4">
												<a href="javascript:;" class="btn btn-danger" onclick="dm_delete(<?php  echo $key;?>)" >删除</a>
										</div>
									   
									</div>
									</li>
							 <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addDm"><b>+</b>添加</a>
							</div>
					  </div>
					</div>
			    </div>
				<div class="form-group dm_openclose" <?php  if($bar_config['open_dm'] == '0') { ?>style="display:none"<?php  } ?>>
						<label class="col-xs-12 col-sm-3 col-md-2  control-label">管理员每天免费弹幕次数（默认10次）</label>
						<div class="col-sm-9 ">
							<div class="input-group">
								<input type="text" name="admin_dm_times"  class="form-control" value="<?php  echo $bar_config['admin_dm_times'];?>">
								<span class="input-group-addon">次</span>
							</div>
							<span class="help-block">每天晚上12点开始刷新</span>
						</div>
				</div>
	</div>
</div>
<!--2027 10 28 add songli -->
<div class="panel panel-default">
			<div class="panel panel-heading">
				送礼设置
				<span class="label label-success">注: 礼物霸屏时间与数量是绑定关系、霸屏时间为:单个礼物霸屏时间的基础上乘以礼物数量</span>
			</div>	
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启送礼</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="open_songli" value="1"  <?php  if($bar_config['open_songli'] == '1') { ?>checked="true"<?php  } ?>> 开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_songli" value="0"   <?php  if($bar_config['open_songli'] == '0') { ?>checked="true"<?php  } ?>>关闭
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">用户送礼支付对象</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="songli_type" value="1"  <?php  if($bar_config['songli_type'] == '1') { ?>checked="true"<?php  } ?>>活动主体
						</label>
						<label class="radio-inline">
							<input type="radio" name="songli_type" value="2"   <?php  if($bar_config['songli_type'] == '2') { ?>checked="true"<?php  } ?>>送礼用户
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">送礼支付到个人分成比</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $bar_config['songli_sxf'];?>" class="form-control" name="songli_sxf" >
						<span class="help-block">送礼支付到个人分成比 如填写0.2 即为 送礼总金额的20%给粉丝 填写0即为全部到用户个人账号</span>
					</div>
				</div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">礼物设置</label>
					<div class="col-sm-9 ">
						<ul class="list-group" id="songli_lists">
							  <li class="list-group-item">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-2">
											礼物图片
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											gif图片
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											礼物名称
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											礼物简介
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											价格
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											时间
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											状态
										</div>
										<div class="col-sm-8  col-xs-12 col-md-2">
											操作
										</div>
									   
									</div>
							   </li>
							  <?php  if(is_array($gifts)) { foreach($gifts as $key => $row) { ?>
									<li class="list-group-item" id="songli_box_<?php  echo $key;?>">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-2">
												<?php  echo tpl_form_field_image('gift_avatar[]',$row['gift_avatar']);?>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
												<input type="text" name="gift_gif[]" class="form-control"  value="<?php  echo $row['gift_gif'];?>" />
												
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
												<input type="text" name="gift_name[]" class="form-control"  value="<?php  echo $row['gift_name'];?>" />
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
												<input type="text" name="gift_des[]" class="form-control"  value="<?php  echo $row['gift_des'];?>" />
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											<div class="input-group">
												<input type="num" name="gift_money[]" class="form-control"  value="<?php  echo $row['gift_money'];?>" />
												<span class="input-group-addon">元</span>
											</div>
											
										</div>
										<div class="col-sm-9 col-xs-12  col-md-2">
											<div class="input-group">
												<input type="num" name="gift_times[]" class="form-control"  value="<?php  echo $row['gift_times'];?>" />
												<span class="input-group-addon">秒</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-9 col-xs-12 col-md-4 js-select-box">
												<a class="btn btn-default js-btn-select <?php  if($row['gift_show']==1) { ?>btn-success<?php  } ?>" data-type="1">显示</a>
												<a class="btn btn-default js-btn-select <?php  if($row['gift_show']==2) { ?>btn-success<?php  } ?>" data-type="2">隐藏</a>
												<input type="hidden" name="gift_show[]" class="form-control"  value="<?php  echo $row['gift_show'];?>" />
										</div>
										<div class="col-sm-8  col-xs-12 col-md-4">
												<a href="javascript:;" class="btn btn-danger" onclick="songli_delete(<?php  echo $key;?>)" >删除</a>
										</div>
									   
									</div>
									</li>
							 <?php  } } ?>
						</ul>
						<div class="form-group">
							<div class="col-sm-9">
								<a href="javascript:;" class="btn btn-success" id="addSongli"><b>+</b>添加礼物</a>
							</div>
					  </div>
					</div>
			    </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">管理员每天免费送礼次数（默认10次）</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="admin_songli_times"  class="form-control" value="<?php  echo $bar_config['admin_songli_times'];?>">
							<span class="input-group-addon">次</span>
						</div>
						<span class="help-block">每天晚上12点开始刷新</span>
					</div>
				</div>
				
		</div><!--panel-body-->
		</div><!--panel-->
<div class="panel panel-default">
	<div class="panel-heading">
			霸屏上墙分享全局设置
			
	</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">分享标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="bar_sharetitle"  value="<?php  echo $bar_config['bar_sharetitle'];?>">
						<span class="help-block"><span class="label label-success">分享标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">分享介绍</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="bar_sharecontent"  value="<?php  echo $bar_config['bar_sharecontent'];?>">
						<span class="help-block"><span class="label label-success">分享介绍</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">分享图标</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bar_shareicon', $bar_config['bar_shareicon']);?>
						<span class="help-block">分享图标</span>
					</div>
				</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
			霸屏上墙全局红包费率
	</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启霸屏上墙全局发红包费率</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="sys_bar_hbfee_off" value="1"  <?php  if($sys_config['sys_bar_hbfee_off'] == '1') { ?>checked="true"<?php  } ?>>开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="sys_bar_hbfee_off" value="0"   <?php  if($sys_config['sys_bar_hbfee_off'] == '0') { ?>checked="true"<?php  } ?>>关闭
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">发红包费率(精确到小数点2位)</label>
					<div class="col-sm-9 ">
						<input type="text" name="sys_bar_hbfee"  class="form-control" value="<?php  echo $sys_config['sys_bar_hbfee'];?>">
						<span class="help-block">请填写小于1的小数 如0.10即为10%、用户发放1元红包则需要收取0.1元手续要 不需要支付手续费请填写0 特别注意:此项控制所有的霸屏上墙发红包费率</span>
					</div>
				</div>
			
	</div>
</div>
<!--2017 10 28 add songli -->
<div class="panel panel-default">
	<div class="panel-heading">
			酒吧带参二维码扫码回复设置<br><br>
			<span class="label label-success">
				1 此处设置仅仅对认证服务号有效、当霸屏上墙开启了带参二维码后、此处就会生效
			</span><br><br>
			<span class="label label-success">
				2 此处生效 必须在活动回复规则列表添加一个触发关键词为:现场 的规则方可生效
			</span><br><br>
			
	</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">图文标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="news_title" id="news_title" placeholder="图文标题" value="<?php  echo $sys_config['news_title'];?>">
						<span class="help-block"><span class="label label-success">图文标题 #代表酒吧标题或者名称</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">图文介绍</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="news_des" id="news_des" placeholder="图文介绍" value="<?php  echo $sys_config['news_des'];?>">
						<span class="help-block"><span class="label label-success">图文介绍</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">图文图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('news_img', $sys_config['news_img']);?>
						<span class="help-block">图文图片 建议尺寸 750px*300px</span>
					</div>
				</div>
	</div>
	<div class="panel-body">
			<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
	</div>
</div>
</form>
<script>
function randomWord(randomFlag, min, max){
		var str = "",
			range = min,
			arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
	 
		// 随机产生
		if(randomFlag){
			range = Math.round(Math.random() * (max-min)) + min;
		}
		for(var i=0; i<range; i++){
			pos = Math.round(Math.random() * (arr.length-1));
			str += arr[pos];
		}
		return str;
}

$(function () {
		$('#addBp').on('click', function(){
			var bp_add = new Date().getTime();
			var content = '<li class="list-group-item" id="bp_box_'+bp_add+'"><div class="form-group">';
			content += $(".addBp").html();
			content += '<div class="col-sm-8  col-xs-12 col-md-3">';
					 content += '<a href="javascript:;" class="btn btn-danger" onclick="bp_delete('+bp_add+')" >删除</a>';
						content += '</div>';
					content += '</div>';
			content += '</li>';
			$('#bp_lists').append(content);
		});
		$("#addbgvideo").on('click',function(){
					var html = $('.addBarbg_box').html();
					$("#bp_bgvideos").append(html);
		});
		$('#addBpstyle').on('click',function(){
			var bp_add = 'bp_'+new Date().getTime();
			var content = '<li class="list-group-item"><div class="form-group">';
						content += '<div class="col-sm-9 col-xs-12  col-md-8" style="display:none">';
							content += '<input type="text" name="bp_styleindex[]" class="form-control"  value="'+bp_add+'" />';
						content += '</div>';
						content += '<div class="col-sm-6 col-xs-12  col-md-8">';
								content += '<input type="text" name="bp_stylename[]" class="form-control"  />';
								content += '<span class="help-block">风格名称</span>';
						content += '</div>';
						content += '<div class="col-sm-6  col-xs-12 col-md-4">';
							content += '<a href="javascript:;" class="btn btn-danger btn-del-bpzhuti" onclick="bp_style_delete(this)" >删除此项</a>';
						content += '</div>';
					content += '</div>';
				content += $(".addBpstyle").html();
				content += '</li>';
				$('#bp_styles').append(content);
		});
		$('#addBpbutton').on('click', function(){
			var bp_bg_add = new Date().getTime();
			var content = '<li class="list-group-item" id="bp_bg_box_'+bp_bg_add+'"><div class="form-group">';
			content += $(".addBpbg").html();
			content += '<div class="col-sm-4  col-xs-6 col-md-4">';
					 content += '<a href="javascript:;" class="btn btn-danger" onclick="bp_bg_delete('+bp_bg_add+')" >删除</a>';
						content += '</div>';
					content += '</div>';
			content += '</li>';
			$('#bp_bg_lists').append(content);
		});
		$('#addDm').on('click', function(){
			var dm_add = new Date().getTime();
			var content = '<li class="list-group-item" id="dm_box_'+dm_add+'"><div class="form-group">';
			content += $(".addDm").html();
			content += '<div class="col-sm-8  col-xs-12 col-md-4">';
					 content += '<a href="javascript:;" class="btn btn-danger" onclick="dm_delete('+dm_add+')" >删除</a>';
						content += '</div>';
					content += '</div>';
			content += '</li>';
			$('#dm_lists').append(content);
		});
		$('#addUser').on('click', function(){
			var user_add = new Date().getTime();
			var content = '<li class="list-group-item" id="ds_box_'+user_add+'"><div class="form-group">';
			content += $(".addUser").html();
			content += '<div class="col-sm-8  col-xs-12 col-md-2">';
					 content += '<a href="javascript:;" class="btn btn-danger" onclick="bp_delete('+user_add+')" >删除</a>';
						content += '</div>';
					content += '</div>';
			content += '</li>';
			$('#user_lists').append(content);
		});
		$('#addGift').on('click', function(){
			var gift_add = new Date().getTime();
			var content = '<li class="list-group-item" id="gift_box_'+gift_add+'"><div class="form-group">';
			content += $(".addGift").html();
			content += '<div class="col-sm-8  col-xs-12 col-md-5" style="margin-top:20px">';
					 content += '<a href="javascript:;" class="btn btn-danger" onclick="gift_delete('+gift_add+')" >删除</a>';
						content += '</div>';
					content += '</div>';
			content += '</li>';
			$('#gift_lists').append(content);
		});
		$('#addBbzhuti').on('click', function(){
			var bb_add = new Date().getTime();
			var content = '<li class="list-group-item" id="bb_box_'+bb_add+'"><div class="form-group">';
			content += $(".bb_zhuti_item").html();
			content += '<div class="col-sm-9  col-xs-12 col-md-2">';
					 content += '<a href="javascript:;" class="btn btn-danger" onclick="bb_delete('+bb_add+')" >删除</a>';
						content += '</div>';
					content += '</div>';
			content += '</li>';
			$('#bb_lists').append(content);
		});
		$('#addBbms').on('click', function(){
			var bb_price_add = new Date().getTime();
			var content = '<li class="list-group-item" id="bb_price_box_'+bb_price_add+'"><div class="form-group">';
			content += $(".bb_price_item").html();
			content += '<div class="col-sm-9  col-xs-12 col-md-4">';
					 content += '<a href="javascript:;" class="btn btn-danger" onclick="bb_price_delete('+bb_price_add+')" >删除</a>';
						content += '</div>';
					content += '</div>';
			content += '</li>';
			$('#bb_price_lists').append(content);
		});
		$("#addStyle").on('click', function(){
			
			$.post("<?php  echo $this->createWebUrl('style_item')?>",{},function(result){
				var style_add = new Date().getTime();
				var content = '<li class="list-group-item" id="style_box_'+style_add+'">';
				content +=	result;
				content += '<div class="form-group"><div class="col-sm-9  col-xs-12 col-md-2"><a href="javascript:;" class="btn btn-danger" onclick="style_delete('+style_add+')" >删除</a></div></div>';
				content += '</li>';
				$('#style_lists').append(content);
			},'html');
			
		});
		$("#addBpzhuti").on('click', function(){
			var bp_zhuti_add = new Date().getTime();
			var content = '<li class="list-group-item" id="bp_zhuti_'+bp_zhuti_add+'">';
			content += '<div class="form-group"><div class="col-sm-9 col-xs-12  col-md-4" style="display:none"><input type="text" name="bp_ztindex[]" class="form-control"  value="'+randomWord(false, 5).toLowerCase()+'"  /></div><div class="col-sm-6 col-xs-12  col-md-8"><input type="text" name="bp_ztdes[]" class="form-control"  value="" placeholder="简明扼要、4字内" /></div><div class="col-sm-6  col-xs-12 col-md-4"><a href="javascript:;" class="btn btn-danger btn-del-bpzhuti" onclick="bp_zt_delete('+bp_zhuti_add+')" >删除此项</a></div></div>';
			content += $(".bp_zhuti").html();
			content += '</li>';
			$('#bp_zhutis').append(content);
		});
		$("#addSongli").on('click', function(){
			var songli_add = new Date().getTime();
			var content = '<li class="list-group-item" id="songli_box_'+songli_add+'"><div class="form-group">';
			content += $(".addSongli").html();
			content += '</div><div class="form-group"><div class="col-sm-9 col-xs-12 col-md-4 js-select-box"><a class="btn btn-default js-btn-select btn-success" data-type="1">显示</a><a class="btn btn-default js-btn-select" data-type="2">隐藏</a><input type="hidden" name="gift_show[]" class="form-control"  value="1" /></div><div class="col-sm-8  col-xs-12 col-md-4"><a href="javascript:;" class="btn btn-danger" onclick="songli_delete('+songli_add+')" >删除</a></div></div>';
			content += '</li>';
			$('#songli_lists').append(content);
		});
		
	});
function bp_style_delete(e){
	$(e.parentNode.parentNode.parentNode).remove();
}
function bp_delete(id){
		$("#bp_box_"+id).remove();
}
function bp_bg_delete(id){
		$("#bp_bg_box_"+id).remove();
}
function style_delete(id){
			$("#style_box_"+id).remove();
}
function bp_zt_delete(id){
				$("#bp_zhuti_"+id).remove();
}
function dm_delete(id){
		$("#dm_box_"+id).remove();
}
function user_delete(id){
		$("#user_box_"+id).remove();
}
function gift_delete(id){
		$("#gift_box_"+id).remove();
}
function bb_delete(id){
	$("#bb_box_"+id).remove();
}
function bb_price_delete(id){
	$("#bb_price_box_"+id).remove();
}
function show_music1(){
	$(".show_music").hide();
}
function show_music2(){
	$(".show_music").show();
}
function bp_bg_type1(){
	$(".bp_bg_type2,.bp_bg_type3").hide();
}
function bp_bg_type2(){
	$(".bp_bg_type3").hide();
	$(".bp_bg_type2").show();
}
function bp_bg_type3(){
	$(".bp_bg_type2").hide();
	$(".bp_bg_type3").show();
}
function bar_bgdelete(e){
			$(e.parentNode.parentNode.parentNode).remove();
}
function open_sys_bb(){
	$(".bb_item").show();
}
function close_sys_bb(){
	$(".bb_item").hide();
}
function sys_openhb(){
	$(".sys_open_hb").show();
}
function sys_closehb(){
	$(".sys_open_hb").hide();
}
function sys_open_dm(){
	$(".dm_openclose").show();
}
function sys_close_dm(){
	$(".dm_openclose").hide();

}
function bar_bg_type3(){
	$(".bar_seleted_imgs,.bar_seleted_videos").hide();
}
function bar_bg_type2(){
	$(".bar_seleted_imgs").hide();
	$(".bar_seleted_videos").show();
}
function bar_bg_type1(){
	$(".bar_seleted_videos").hide();
	$(".bar_seleted_imgs").show();
}
</script>
<div class="addSongli"  style="display: none">
		<div class="col-sm-9 col-xs-12  col-md-2">
				<?php  echo tpl_form_field_image('gift_avatar[]','');?>
		</div>
		<div class="col-sm-9 col-xs-12  col-md-2">
				<input type="text" name="gift_gif[]" class="form-control"  value="" />
				
		</div>
		<div class="col-sm-9 col-xs-12  col-md-2">
				<input type="text" name="gift_name[]" class="form-control"  value="" />
		</div>
		<div class="col-sm-9 col-xs-12  col-md-2">
				<input type="text" name="gift_des[]" class="form-control"  value="" />
		</div>
		<div class="col-sm-9 col-xs-12  col-md-2">
			<div class="input-group">
				<input type="num" name="gift_money[]" class="form-control"  value="1.00" />
				<span class="input-group-addon">元</span>
			</div>
			
		</div>
		<div class="col-sm-9 col-xs-12  col-md-2">
			<div class="input-group">
				<input type="num" name="gift_times[]" class="form-control"  value="10" />
				<span class="input-group-addon">秒</span>
			</div>
		</div>
</div>
<div class="addBp" style="display: none">	
		<div class="col-sm-9 col-xs-12 col-md-3 bp_moneys">
			<div class="input-group">
				<input type="num" name="moneys[]" class="form-control"   />
				<span class="input-group-addon">元</span>
			</div>
		</div>
		<div class="col-sm-9 col-xs-12 col-md-3 bp_seconds">
			<div class="input-group">
				<input type="num" name="seconds[]" class="form-control"  />
				<span class="input-group-addon">秒</span>
			</div>
		</div>
		<div class="col-sm-9 col-xs-12  col-md-3 bp_imgnums">
			<div class="input-group">
				<input type="num" name="nums[]" class="form-control"   />
				<span class="input-group-addon">个</span>
			</div>
		</div>
</div>
<div class="addBpstyle" style="display:none">
	 
									<div class="form-group" style="margin:5px;">
									  <div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_styleman1[]','');?>
											<span class="help-block">男士头像外圈图1(320*320px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_styleman2[]','');?>
											<span class="help-block">男士头像外圈图2(320*320px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylewoman1[]','');?>
											<span class="help-block">女士头像外圈图1(320*320px)</span>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylewoman2[]','');?>
											<span class="help-block">女士头像外圈图2(320*320px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylemanwing[]','');?>
											<span class="help-block">男士头像外圈箭头(558*203px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylewomanwing[]','');?>
											<span class="help-block">女士头像外圈箭头(558*203px)</span>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylehat[]','');?>
											<span class="help-block">头像皇冠帽子(85*79px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylenamebg[]','');?>
											<span class="help-block">昵称背景(914*170px)</span>
										</div>
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylewcornerbg[]','');?>
											<span class="help-block">边角背景(607*495px)</span>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-4">
											<?php  echo tpl_form_field_image('bp_stylefooterbg[]','');?>
											<span class="help-block">底部背景(537*150px)</span>
										</div>
									  </div>
									</div>	
							  
</div>
<div class="addBarbg_box" style="display:none">
	<li>
		<div class="form-group">
			<div class="col-sm-6  col-xs-6 col-md-9">
				<?php  echo tpl_form_field_video('bar_bgvideos[]','');?>
				<span class="help-block">多视频背景 最多可添加9个视频【mp4/webm/ogg格式】，推荐5M内</span>
			</div>
			<div class="col-sm-6  col-xs-6 col-md-3">
						<a href="javascript:;" class="btn btn-danger" onclick="bar_bgdelete(this)" >删除</a>
			</div>
			
		</div>
	</li>
</div>
<div class="addBpbg" style="display: none">	
		<div class="col-sm-8 col-xs-6 col-md-8">
			<?php  echo tpl_form_field_video('sys_bp_bg[]','');?>
		</div>
</div>
<div class="addDm" style="display: none">	
		<div class="col-sm-9 col-xs-12 col-md-4 dm_fees">
			<div class="input-group">
				<input type="num" name="dm_fee[]" class="form-control"   />
				<span class="input-group-addon">元</span>
			</div>
		</div>
		<div class="col-sm-9 col-xs-12 col-md-4 dm_seconds">
			<div class="input-group">
				<input type="num" name="dm_seconds[]" class="form-control"  />
				<span class="input-group-addon">秒</span>
			</div>
		</div>
</div>
<div class="addUser" style="display: none">	
		<div class="col-sm-9 col-xs-12 col-md-3 ds_user_des">
			<div class="input-group">
				<?php  echo tpl_form_field_image('ds_user_avatar[]','');?>
			</div>
		</div>
		<div class="col-sm-9 col-xs-12 col-md-3 ds_user_des">
			<div class="input-group">
				<input type="text" name="ds_user_name[]" class="form-control"  />
				
			</div>
		</div>
		<div class="col-sm-9 col-xs-12 col-md-4 ds_user_des">
			<div class="input-group">
				<input type="text" name="ds_user_des[]" class="form-control"  />
				
			</div>
		</div>
</div>
<div class="addGift" style="display: none">	
		<div class="col-sm-9 col-xs-12 col-md-2 ds_gift_image">
			
				<?php  echo tpl_form_field_image('ds_gift_image[]','');?>
			
		</div>
		<div class="col-sm-9 col-xs-12 col-md-2 ds_gift_name">
			
				<input type="text" name="ds_gift_name[]" class="form-control"  />
				
			
		</div>
		<div class="col-sm-9 col-xs-12 col-md-2 ds_gift_money">
			<div class="input-group">
				<input type="num" name="ds_gift_money[]" class="form-control"   />
				<span class="input-group-addon">元</span>
			</div>
		</div>
		<div class="col-sm-9 col-xs-12 col-md-2 ds_gift_seconds">
			<div class="input-group">
				<input type="num" name="ds_gift_seconds[]" class="form-control"  />
				<span class="input-group-addon">秒</span>
			</div>
		</div>

		<div class="col-sm-9 col-xs-12 col-md-4 ds_gift_tx">
				<?php  echo tpl_form_field_video('ds_gift_tx[]','')?>
		</div>
</div>
<div class="bb_zhuti_item"  style="display: none">
		<div class="col-sm-9 col-xs-12  col-md-2 bb_des">
				<input type="text" name="bb_des[]" class="form-control"  value="<?php  echo $row['des'];?>" placeholder="请输入主题名称" />
		</div>
		<div class="col-sm-9 col-xs-12  col-md-3 bb_content">
				<input type="text" name="bb_content[]" class="form-control"  value="<?php  echo $row['content'];?>" placeholder="请输入主题内容"  />
		</div>
		<div class="col-sm-9 col-xs-12  col-md-2 bb_image">
				<?php  echo tpl_form_field_image('bb_image[]','');?>
				<span class="help-block">规格:161*122</span>
		</div>
		<div class="col-sm-9 col-xs-12  col-md-3 bb_video">
				<?php  echo tpl_form_field_video('bb_video[]','');?>
				<span class="help-block">视频格式:Webm</span>
		</div>
</div>
<div class="bb_price_item"  style="display: none">
		<div class="col-sm-9 col-xs-12  col-md-4 bb_money">
			<div class="input-group">
				<input type="num" name="bb_money[]" class="form-control"  value="<?php  echo $row['money'];?>" />
				<span class="input-group-addon">元</span>
			</div>
		</div>
		<div class="col-sm-9 col-xs-12  col-md-4 bb_seconds">
			<div class="input-group">
				<input type="num" name="bb_seconds[]" class="form-control"  value="<?php  echo $row['bb_seconds'];?>" />
				<span class="input-group-addon">秒</span>
			</div>
		</div>
</div>
<div class="bp_zhuti" style="display:none">
	
	<div class="form-group">
		<div class="col-sm-9 col-xs-12  col-md-3">
			<?php  echo tpl_form_field_image('bp_zticon[]','');?>
		</div>
		<div class="col-sm-9 col-xs-12  col-md-3">
				<?php  echo tpl_form_field_image('bp_ztmsgicon[]','');?>
		</div>
		<div class="col-sm-9 col-xs-12  col-md-3">
				<?php  echo tpl_form_field_image('bp_pcicon[]','');?>
		</div>
		<div class="col-sm-9 col-xs-12  col-md-3">
				<?php  echo tpl_form_field_video('bp_ztvideo[]','');?>
		</div>
	</div>
</div>
<script>
function close_movie(){
	$('.open_movie').hide();
}
function open_movie(){
	$('.open_movie').show();
}
function open_jy2(){
	$(".jy_open").show();
}
function close_jy(){
	$(".jy_open").hide();
}
function djs_close(){
	$(".djs").hide();
}
function djs_open(){
	$(".djs").show();
}
function tixian_redpack(){
	$(".min_tixian_money").show();
}
function weixin_redpack(){
	$('.min_tixian_money').hide();
}
function free_dm_show(){
	$(".free_dm_open").show();
}
function free_dm_close(){
	$(".free_dm_open").hide();
}
function wall_typeheng(){
	$(".wall_heng").show();
}
function wall_typeshu(){
	$(".wall_heng").hide();
}
function songli_delete(id){
			$("#songli_box_"+id).remove();
}
</script>
<?php  } else if($oop=='qd_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">签到设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏网页标题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $qd_config['title'];?>" class="form-control" name="title" >
						<span class="help-block">大屏网页标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('bg_video', $qd_config['bg_video']);?>
						<span class="help-block">大屏背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是默认风格</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $qd_config['bg_img']);?>
						<span class="help-block">大屏背景图片 1440*828px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">签到审核状态</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="status" value="1" id="isshow_1" <?php  if($qd_config['status'] == '1') { ?>checked="true"<?php  } ?>> 无需审核
						</label>
						<label class="radio-inline">
							<input type="radio" name="status" value="2" id="isshow_0"  <?php  if($qd_config['status'] == '2') { ?>checked="true"<?php  } ?>>必须审核
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏是否显示签到人数</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_people" value="0"  <?php  if($qd_config['show_people'] == '0') { ?>checked="true"<?php  } ?>> 不显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_people" value="1"  <?php  if($qd_config['show_people'] == '1') { ?>checked="true"<?php  } ?>>显示
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否显示第几位签到显示层</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_num_box" value="1" <?php  if($qd_config['show_num_box'] == '1') { ?>checked="true"<?php  } ?>> 显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_num_box" value="0"  <?php  if($qd_config['show_num_box'] == '0') { ?>checked="true"<?php  } ?>>不显示
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否显示签到时间</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_qdtime" value="1" <?php  if($qd_config['show_qdtime'] == '1') { ?>checked="true"<?php  } ?>> 显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_qdtime" value="2"  <?php  if($qd_config['show_qdtime'] == '2') { ?>checked="true"<?php  } ?>> 不显示
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端签到背景</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('app_bg', $qd_config['app_bg']);?>
						<span class="help-block">微信端签到背景 规格 640px*1000px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端签到整体背景色</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_color('wechat_bgcolor', $qd_config['wechat_bgcolor']);?>
						<span class="help-block">微信端签到整体背景色 透明为:transparent</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端签到整体文字颜色</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_color('wechat_txtcolor', $qd_config['wechat_txtcolor']);?>
						<span class="help-block">微信端签到整体文字颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 control-label">微信端按钮名称</label>
					<div class="col-sm-6 col-md-8 col-xs-12">
						<input type="text" name="button_name" class="form-control" value="<?php  echo $qd_config['button_name'];?>"/>
						<div class="text-danger">长度为五个汉字,不填则不显示</div>								
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">按钮颜色选择</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_color('button_color',$qd_config['button_color']);?>
					<span class="help-block">按钮颜色选择  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 control-label">微信端按钮跳转地址</label>
					<div class="col-sm-6 col-md-8 col-xs-12">
						<?php  echo tpl_form_field_link('button_url',$qd_config['button_url']);?>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
		</div>
</div>
</form>
<?php  } else if($oop=='ydj_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-body">
			<div class="panel panel-default">
			<div class="panel-heading">大屏设置 <span class="label label-success">注:可通过点击键盘空格键快速开始游戏</span></div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏幕标题</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="pc_title" class="form-control" value="<?php  echo $ydj_config['pc_title'];?>" placeholder="大屏幕标题"/>
						<span class="help-block">大屏幕标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $ydj_config['bg_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为1364*673 jpg图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('bg_video', $ydj_config['bg_video']);?>
						<span class="help-block">大屏背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是默认风格、上传背景视频后、风格将不再支持设置</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏等待开始页面背景图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_startbg_img', $ydj_config['pc_startbg_img']);?>
						<span class="help-block">大屏等待开始页面背景图 规格大小为530*414px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏等待开始页面手型图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_starthand_img', $ydj_config['pc_starthand_img']);?>
						<span class="help-block">大屏等待开始页面背景图 规格大小为171*213 png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏等待开始页面开始按钮背景图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_startbutton_img', $ydj_config['pc_startbutton_img']);?>
						<span class="help-block">大屏等待开始页面背景图 规格大小为437*160px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏等待开始页面文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="start_txt" class="form-control" value="<?php  echo $ydj_config['start_txt'];?>" placeholder="大屏等待开始页面文字"/>
						<span class="help-block">大屏等待开始页面文字</span>
					</div>
				</div>
			</div>
			</div>
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">微信网页标题</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $ydj_config['wechat_title'];?>" placeholder="微信网页标题"/>
						<span class="help-block">微信网页标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">微信底部版权</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_copyright" class="form-control" value="<?php  echo $ydj_config['wechat_copyright'];?>" placeholder="微信底部版权"/>
						<span class="help-block">微信底部版权</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信顶部图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_top_img', $ydj_config['wechat_top_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为480*250 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信顶部右侧规则图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_right_img', $ydj_config['wechat_right_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为120*120 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bg_img', $ydj_config['wechat_bg_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为640*1600 jpg图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信手型图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_hand_img', $ydj_config['wechat_hand_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为360*440 jpg图片</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信加入人数背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_join_img', $ydj_config['wechat_join_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为450*110 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信规则页顶部图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_ruletop_img', $ydj_config['wechat_ruletop_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为427*77 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信中奖背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_zj_img', $ydj_config['wechat_zj_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为640*615 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信未中奖背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_nozj_img', $ydj_config['wechat_nozj_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为580*720 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信关闭按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_close_img', $ydj_config['wechat_close_img']);?>
						<span class="help-block">微信关闭按钮图片 规格大小为51*51 png图片</span>
					</div>
				</div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信活动规则</label>
                    <div class="col-xs-12 col-sm-9">
                        <?php  echo tpl_ueditor('wechat_guize',$ydj_config['wechat_guize'])?>
									<span class="help-block">微信活动规则</span>
                    </div>
                </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">粉丝中奖模式</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1"  <?php  if($ydj_config['award_again'] == '1') { ?>checked="true"<?php  } ?> >仅可中奖一次
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2"   <?php  if($ydj_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >可多次中奖
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">发放红包主办方名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="redpack_sendname" class="form-control" value="<?php  echo $ydj_config['redpack_sendname'];?>" placeholder="发放红包主办方名称"/>
						<span class="help-block">发放红包主办方名称</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">发放红包提示文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="redpack_des" class="form-control" value="<?php  echo $ydj_config['redpack_des'];?>" placeholder="发放红包提示文字"/>
						<span class="help-block">发放红包提示文字 <span class="label label-danger">注:此处内容、也会在中奖推送模板消息底部显示</span></span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
			</div>
	</div>
</div>
</form>
<?php  } else if($oop=='lizi_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
	<div class="panel panel-default">
	<div class="panel-heading">粒子设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏3d签到背景</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $lizi_config['bg_img']);?>
						<span class="help-block">pc端3d签到背景 规格 1440*828</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏是否显示签到人数</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_people" value="0" id="show_time_0" <?php  if($lizi_config['show_people'] == '0') { ?>checked="true"<?php  } ?>> 不显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_people" value="1" id="show_time_1"  <?php  if($lizi_config['show_people'] == '1') { ?>checked="true"<?php  } ?>>显示
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">上传占位广告图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_multi_image('placeholder_image_arr', $lizi_config['placeholder_image_arr']);?>
						<span class="help-block">上传占位广告图 最多可添加9张logo，推荐尺寸200^200像素，50KB以下</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否开启倒计时</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="count_down_on" value="0" id="show_time_0" <?php  if($lizi_config['count_down_on'] == '0') { ?>checked="true"<?php  } ?> onclick="show_count1()"> 不开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="count_down_on" value="1" id="show_time_1"  <?php  if($lizi_config['count_down_on'] == '1') { ?>checked="true"<?php  } ?> onclick="show_count2()">开启
						</label>
					</div>
				</div>
				
				<div class="form-group cd_time" style="<?php  if($lizi_config['count_down_on']==0) { ?>display:none<?php  } ?>">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">倒计时时间</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="count_down_time"  class="form-control count_down_time" value="<?php  echo $lizi_config['count_down_time'];?>">
											<span class="input-group-addon">秒</span>
										</div>
										<span class="help-block">秒 注意:小于10的整数</span>
									</div>
				</div>
				<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">设置内容</label>
				 <div class="col-xs-12 col-sm-9">
										  <ul class="list-group" id="vote_lists">
															  <?php  if(is_array($lizi_config['str'])) { foreach($lizi_config['str'] as $key => $row) { ?>
																
																	<li class="list-group-item ng-scope" id="3d_box_<?php  echo $key;?>">
																	<div class="form-group">
																		<label class="col-xs-12 col-sm-3 col-md-3 control-label">第<?php  echo $key+1?>屏</label>
																		<?php  if($row['type']=='Text') { ?>
																		<div class="col-sm-9 col-xs-12  col-md-8 ">
																			<input type="text" name="text[]" class="form-control" value="<?php  echo $row['value'];?>" />
																			<input type="hidden" name="type[]" value="Text" />
																			<input type="hidden" name="Countdown[]" value="" />
																			<input type="hidden" name="3dLogo[]" value="" />
																		</div>
																		<?php  } else if($row['type']=='Sphere') { ?>
																		<div class="col-sm-9 col-xs-12  col-md-8 ">
																			<input type="hidden" name="3dLogo[]" value="" />
																			<input type="hidden" name="type[]" value="Sphere" />
																			<input type="hidden" name="Countdown[]" value="" />
																			<input type="text" name="text[]" class="form-control" value="3d球体"  readonly />
																		</div>
																		<?php  } else if($row['type']=='Helix') { ?>
																		<div class="col-sm-9 col-xs-12  col-md-8 ">
																			<input type="hidden" name="type[]" value="Helix" />
																			<input type="hidden" name="3dLogo[]" value="" />
																			<input type="hidden" name="Countdown[]" value="" />
																			<input type="text" name="text[]" class="form-control" value="3d螺旋"  readonly />
																		</div>
																		<?php  } else if($row['type']=='Torus') { ?>
																		<div class="col-sm-9 col-xs-12  col-md-8 ">
																			<input type="hidden" name="3dLogo[]" value="" />
																			<input type="hidden" name="type[]" value="Torus" />
																			<input type="hidden" name="Countdown[]" value="" />
																			<input type="text" name="text[]" class="form-control" value="3d时空隧道"  readonly />
																		</div>
																		<?php  } else if($row['type']=='Logo') { ?>
																				<input type="hidden" name="type[]" value="Logo" />
																				<input type="hidden" name="Countdown[]" value="" />
																				<input type="hidden" name="text[]" class="form-control" value="" />
																				<div class="col-sm-9 col-md-8">
																					<?php  echo tpl_form_field_image('3dLogo[]',$row['value']);?>
																				</div>
																		<?php  } else if($row['type']=='Countdown') { ?>
																		<div class="col-sm-9 col-xs-12  col-md-8 ">
																				<input type="hidden" name="type[]" value="Countdown" />
																				<input type="hidden" name="3dLogo[]" value="" />
																				<input type="hidden" name="text[]" class="form-control" value="" />
																				<input type="text" name="Countdown[]" class="form-control countdown_check" value="<?php  echo $row['value'];?>" />
																	    </div>
																		<?php  } ?>
																		<div class="col-sm-8  col-xs-12 col-md-1">
																				<a href="javascript:;" class="btn btn-danger" onclick="sd_delete(<?php  echo $key;?>)" >删除</a>
																	    </div>
																	   
																	</div>
																	</li>
																
															 <?php  } } ?>
											    
										  </ul>
					</div>
				  </div>
				<!----->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">&nbsp;</label>
					<div class="col-sm-9">
                	<a href="javascript:;" class="btn btn-success" id="addText"><b>+</b>添加文字</a><i>(每次限制4个中文或4个英文字母以内)</i><br><br> 
                    <a href="javascript:;" class="btn btn-success" id="addSphere"><b>+</b>添加球体</a>
                    <a href="javascript:;" class="btn btn-success" id="addHelix"><b>+</b>添加螺旋</a>
                    <a href="javascript:;" class="btn btn-success" id="addTorus"><b>+</b>添加时空隧道</a><br><br>
                	<a href="javascript:;" class="btn btn-success" id="addLogo"><b>+</b>插入LOGO</a><i>(仅限透明png图片 200*200px)</i>
					</div>
                </div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<div class="addText" style="display: none">	
		<label class="col-xs-12 col-sm-3 col-md-3 control-label"></label>
		<div class="col-sm-9 col-xs-12 col-md-8">
			<input type="hidden" name="3dLogo[]" value="" />
			<input type="hidden" name="Countdown[]" value="" />
			<input type="hidden" name="type[]" value="Text" />
			<input type="text" name="text[]" class="form-control"/>
		</div>
</div>
<div class="addSphere" style="display: none">	
		<label class="col-xs-12 col-sm-3 col-md-3 control-label"></label>
		<div class="col-sm-9 col-xs-12 col-md-8">
			<input type="hidden" name="3dLogo[]" value="" />
			<input type="hidden" name="Countdown[]" value="" />
			<input type="hidden" name="type[]" value="Sphere" />
			<input type="text" name="Sphere[]" class="form-control" value="3d球体" readonly />
		</div>
</div>
<div class="addHelix" style="display: none">	
		<label class="col-xs-12 col-sm-3 col-md-3 control-label"></label>
		<div class="col-sm-9 col-xs-12 col-md-8">
			<input type="hidden" name="3dLogo[]" value="" />
			<input type="hidden" name="Countdown[]" value="" />
			<input type="hidden" name="type[]" value="Helix" />
			<input type="text" name="Helix[]" class="form-control" value="3d螺旋" readonly />
		</div>
</div>
<div class="addTorus" style="display: none">	
		<label class="col-xs-12 col-sm-3 col-md-3 control-label"></label>
		<div class="col-sm-9 col-xs-12 col-md-8">
			<input type="hidden" name="3dLogo[]" value="" />
			<input type="hidden" name="Countdown[]" value="" />
			<input type="hidden" name="type[]" value="Torus" />
			<input type="text" name="Torus[]" class="form-control" value="3d时空隧道" readonly />
		</div>
</div>
<div class="addLogo" style="display: none">	
		<label class="col-xs-12 col-sm-3 col-md-3 control-label">3dLogo</label>
		<div class="col-sm-9 col-md-8">
			<input type="hidden" name="type[]" value="Logo" />
			<input type="hidden" name="Countdown[]" value="" />
			<input type="hidden" name="text[]" class="form-control" value="" />
			<?php  echo tpl_form_field_image('3dLogo[]','');?>
			<span class="help-block">3dLogo 200*200 PNG 透明</span>
		</div>
</div>
<div class="addCountdown" style="display: none">	
		<label class="col-xs-12 col-sm-3 col-md-3 control-label"></label>
		<div class="col-sm-9 col-xs-12 col-md-8">
			<input type="hidden" name="3dLogo[]" value="" />
			<input type="hidden" name="type[]" value="Countdown" />
			<input type="text" name="Countdown[]" class="form-control countdown_check" placeholder="请输入倒计时秒数" value="5" />
			<input type="hidden" name="text[]" class="form-control" value="" />
		</div>
</div>
<script type="text/javascript">
$(function(){
$('#addText').on('click', function(){
		var bd_add = new Date().getTime();
		var content = '<li class="list-group-item ng-scope" id="3d_box_'+bd_add+'"><div class="form-group">';
		content += $(".addText").html();
		content += '<div class="col-sm-8  col-xs-12 col-md-1">';
				 content += '<a href="javascript:;" class="btn btn-danger" onclick="sd_delete('+bd_add+')" >删除</a>';
					content += '</div>';
				content += '</div>';
		content += '</li>';
		$('#vote_lists').append(content);
		var list_length = $('#vote_lists li').length;
		$('#vote_lists li:last-child label:first').text("第"+list_length+"屏");
		//$('#vote_lists li:last-child input:last').val(0);
		
});
$('#addSphere').on('click', function(){
		var bd_add = new Date().getTime();
		var content = '<li class="list-group-item ng-scope" id="3d_box_'+bd_add+'"><div class="form-group">';
		content += $(".addSphere").html();
		content += '<div class="col-sm-8  col-xs-12 col-md-1">';
				 content += '<a href="javascript:;" class="btn btn-danger" onclick="sd_delete('+bd_add+')" >删除</a>';
					content += '</div>';
				content += '</div>';
		content += '</li>';
		$('#vote_lists').append(content);
		var list_length = $('#vote_lists li').length;
		$('#vote_lists li:last-child label:first').text("第"+list_length+"屏");
		
});
$('#addHelix').on('click', function(){
		var bd_add = new Date().getTime();
		var content = '<li class="list-group-item ng-scope" id="3d_box_'+bd_add+'"><div class="form-group">';
		content += $(".addHelix").html();
		content += '<div class="col-sm-8  col-xs-12 col-md-1">';
				 content += '<a href="javascript:;" class="btn btn-danger" onclick="sd_delete('+bd_add+')" >删除</a>';
					content += '</div>';
				content += '</div>';
		content += '</li>';
		$('#vote_lists').append(content);
		var list_length = $('#vote_lists li').length;
		$('#vote_lists li:last-child label:first').text("第"+list_length+"屏");
		
});
$('#addTorus').on('click', function(){
		var bd_add = new Date().getTime();
		var content = '<li class="list-group-item ng-scope" id="3d_box_'+bd_add+'"><div class="form-group">';
		content += $(".addTorus").html();
		content += '<div class="col-sm-8  col-xs-12 col-md-1">';
				 content += '<a href="javascript:;" class="btn btn-danger" onclick="sd_delete('+bd_add+')" >删除</a>';
					content += '</div>';
				content += '</div>';
		content += '</li>';
		$('#vote_lists').append(content);
		var list_length = $('#vote_lists li').length;
		$('#vote_lists li:last-child label:first').text("第"+list_length+"屏");
		
});
$('#addLogo').on('click', function(){
		var bd_add = new Date().getTime();
		var content = '<li class="list-group-item ng-scope" id="3d_box_'+bd_add+'"><div class="form-group">';
		content += $(".addLogo").html();
		content += '<div class="col-sm-8  col-xs-12 col-md-1">';
				 content += '<a href="javascript:;" class="btn btn-danger" onclick="sd_delete('+bd_add+')" >删除</a>';
					content += '</div>';
				content += '</div>';
		content += '</li>';
		$('#vote_lists').append(content);
		var list_length = $('#vote_lists li').length;
		$('#vote_lists li:last-child label:first').text("第"+list_length+"屏");
		
});
$('#addCountdown').on('click', function(){
		var countdown_check = $('.countdown_check').length;
		if(countdown_check > 1){
			alert('倒计时只能添加一次');
			return;
		}
		var bd_add = new Date().getTime();
		var content = '<li class="list-group-item ng-scope" id="3d_box_'+bd_add+'"><div class="form-group">';
		content += $(".addCountdown").html();
		content += '<div class="col-sm-8  col-xs-12 col-md-1">';
				 content += '<a href="javascript:;" class="btn btn-danger" onclick="sd_delete('+bd_add+')" >删除</a>';
					content += '</div>';
				content += '</div>';
		content += '</li>';
		$('#vote_lists').append(content);
		var list_length = $('#vote_lists li').length;
		$('#vote_lists li:last-child label:first').text("第"+list_length+"屏");
		
});
$(".count_down_time").on('blur', function(e){				
	if (parseInt($(this).val())==0 || parseInt($(this).val()) > 9) {
		alert('请填写大于0、小于9的整数');
		$(this).val(9);
		return;
	} 
});
})
function sd_delete(id){
		$("#3d_box_"+id).remove();
		$('#vote_lists li').each(function(i,val){
			var new_num = $(this).index()+1;
			$(this).find('label:first').text('第'+new_num+'屏');
		});
	
}
function show_count1(){
	$('.cd_time').hide();
}
function show_count2(){
	$('.cd_time').show();
}
</script>
<?php  } else if($oop=='wall_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">上墙设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">上墙消息是否需要审核</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="status" value="1" id="status_1" <?php  if($wall_config['status'] == '1') { ?>checked="true"<?php  } ?>> 无需审核
						</label>
						<label class="radio-inline">
							<input type="radio" name="status" value="2" id="status_2"  <?php  if($wall_config['status'] == '2') { ?>checked="true"<?php  } ?>>必须审核
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('bg_video', $wall_config['bg_video']);?>
						<span class="help-block">大屏背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是默认风格</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $wall_config['bg_img']);?>
						<span class="help-block">大屏背景图片 1440*828px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">网页标题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $wall_config['title'];?>" class="form-control" name="title" >
						<span class="help-block">网页标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">显示效果</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_style" value="0" id="show_style_0" <?php  if($wall_config['show_style'] == '0') { ?>checked="true"<?php  } ?>> 滚动
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_style" value="1" id="show_style_1"  <?php  if($wall_config['show_style'] == '1') { ?>checked="true"<?php  } ?>>翻转
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏幕一页显示条数</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="wall_msg_nums" value="3" id="show_style_0" <?php  if($wall_config['wall_msg_nums'] == '3') { ?>checked="true"<?php  } ?>> 三条
						</label>
						<label class="radio-inline">
							<input type="radio" name="wall_msg_nums" value="4" id="show_style_1"  <?php  if($wall_config['wall_msg_nums'] == '4') { ?>checked="true"<?php  } ?>>四条
						</label>
						<label class="radio-inline">
							<input type="radio" name="wall_msg_nums" value="5" id="show_style_1"  <?php  if($wall_config['wall_msg_nums'] == '5') { ?>checked="true"<?php  } ?>>五条
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">宽屏模式消息框屏幕占比</label>
					<div class="col-sm-9 ">
						<div class="input-group">
									<input type="text" name="wall_width"  class="form-control" value="<?php  echo $wall_config['wall_width'];?>">
									<span class="input-group-addon">%</span>		
						</div>
						<span class="help-block">注意: 小屏模式此数值不生效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">显示顺序</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_type" value="0" id="show_type_0" <?php  if($wall_config['show_type'] == '0') { ?>checked="true"<?php  } ?>> 最新不循环
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_type" value="1" id="show_type_1"  <?php  if($wall_config['show_type'] == '1') { ?>checked="true"<?php  } ?>>随机循环
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户昵称颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('nickname_fontcolor',$wall_config['nickname_fontcolor']);?>
					<span class="help-block">大屏用户昵称颜色 默认白色  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏用户昵称字体大小</label>
					<div class="col-sm-9 ">
						<div class="input-group">
									<input type="text" name="nickname_fontsize"  class="form-control" value="<?php  echo $wall_config['nickname_fontsize'];?>">
									<span class="input-group-addon">px</span>		
						</div>
						<span class="help-block">注意: 大屏用户昵称字体大小 酌情设置</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏消息颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('msg_fontcolor',$wall_config['msg_fontcolor']);?>
					<span class="help-block">大屏用户昵称颜色 默认白色  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏消息字体大小</label>
					<div class="col-sm-9 ">
						<div class="input-group">
									<input type="text" name="msg_fontsize"  class="form-control" value="<?php  echo $wall_config['msg_fontsize'];?>">
									<span class="input-group-addon">px</span>		
						</div>
						<span class="help-block">注意: 大屏消息字体大小 酌情设置</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏消息背景颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('msg_bgcolor',$wall_config['msg_bgcolor']);?>
					<span class="help-block">大屏消息背景颜色 默认透明色  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">上墙时间</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_time" value="0" id="show_time_0" <?php  if($wall_config['show_time'] == '0') { ?>checked="true"<?php  } ?>> 不显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_time" value="1" id="show_time_1"  <?php  if($wall_config['show_time'] == '1') { ?>checked="true"<?php  } ?>>显示
						</label>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">每条信息滚动时间间隔</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="re_time"  class="form-control" value="<?php  echo $wall_config['re_time'];?>">
											<span class="input-group-addon">秒</span>
										</div>
									</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">无消息时显示历史记录数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="chistory"  class="form-control" value="<?php  echo $wall_config['chistory'];?>">
											<span class="input-group-addon">条</span>
										</div>
										<span class="help-block">0为不限制</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否开启图片消息放大处理</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_big" value="0" onClick="show_big1()" <?php  if($wall_config['show_big'] == '0') { ?>checked="true"<?php  } ?>>不开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_big" value="1" onClick="show_big2()"  <?php  if($wall_config['show_big'] == '1') { ?>checked="true"<?php  } ?>>开启
						</label>
					</div>
				</div>
				<div class="form-group big_time" style="<?php  if($wall_config['show_big']==0) { ?>display:none<?php  } ?>">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">图片消息放大时间</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="show_big_time"  class="form-control" value="<?php  echo $wall_config['show_big_time'];?>">
											<span class="input-group-addon">秒</span>
										</div>
									</div>
				</div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">禁词</label>
					<div class="col-sm-9 ">
					<textarea style="height:200px;" class="form-control" name="forbidden_words" id="quit-tips" cols="70"><?php  echo $wall_config['forbidden_words'];?></textarea>
                    
									<span class="help-block">禁词、多条请以#隔开、注意#为英文半角符号、请认真填写</span>
					</div>
                </div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">粉丝发送消息文字长度限制</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="maxlength"  class="form-control" value="<?php  echo $wall_config['maxlength'];?>">
											<span class="input-group-addon">个</span>
										</div>
										<span class="help-block">0为不限制</span>
									</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">微信发送上墙消息时间间隔</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="input_count"  class="form-control" value="<?php  echo $wall_config['input_count'];?>">
											<span class="input-group-addon">秒</span>
										</div>
										<span class="help-block">0为不限制</span>
									</div>
				</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
</div>
</div>
<script>
function show_big1(){
	$(".big_time").hide();
}
function show_big2(){
	$(".big_time").show();
}
</script>
</form>
<?php  } else if($oop=='dm_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
			<div class="panel-heading">
				弹幕基础设置
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏幕标题</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="title" class="form-control" value="<?php  echo $dm['title'];?>" placeholder="网页标题"/>
						<span class="help-block">大屏幕标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">弹幕文字大小</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="danmu_size"  class="form-control" value="<?php  echo $dm['danmu_size'];?>">
							<span class="input-group-addon">px</span>
						</div>
						<span class="help-block">不要大于65px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">弹幕文字颜色</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="danmu_color_type" value="1"  <?php  if($dm['danmu_color_type'] == '1') { ?>checked="true"<?php  } ?> onclick="close_rand()"> 固定色
						</label>
						<label class="radio-inline">
							<input type="radio" name="danmu_color_type" value="2"  <?php  if($dm['danmu_color_type'] == '2') { ?>checked="true"<?php  } ?> onclick="open_rand()"> 随机色
						</label>
					</div>
				</div>
				<div class="form-group color_rand" <?php  if($dm['danmu_color_type'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">弹幕文字颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('danmu_color',$dm['danmu_color']);?>
					<span class="help-block">弹幕文字颜色  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">弹幕边界颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('danmu_border_color',$dm['danmu_border_color']);?>
					<span class="help-block">弹幕边界颜色  透明色情填写 transparent</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">弹幕背景颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('danmu_bg_color',$dm['danmu_bg_color']);?>
					<span class="help-block">弹幕背景颜色  透明色情填写 transparent</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">打开大屏幕是否加载历史消息</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="load_history" value="1"  <?php  if($dm['load_history'] == '1') { ?>checked="true"<?php  } ?>> 加载
						</label>
						<label class="radio-inline">
							<input type="radio" name="load_history" value="2"  <?php  if($dm['load_history'] == '2') { ?>checked="true"<?php  } ?>> 不加载
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">打开大屏幕加载历史消息条数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="history_nums"  class="form-control" value="<?php  echo $dm['history_nums'];?>">
							<span class="input-group-addon">条</span>
						</div>
						<span class="help-block">打开大屏幕加载历史消息条数 为0将会加载所有的上墙消息</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">弹幕是否显示粉丝昵称</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="show_nickname" value="1"  <?php  if($dm['show_nickname'] == '1') { ?>checked="true"<?php  } ?>> 显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_nickname" value="2"  <?php  if($dm['show_nickname'] == '2') { ?>checked="true"<?php  } ?>> 不显示
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">弹幕飘屏速度</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="danmu_speed"  class="form-control" value="<?php  echo $dm['danmu_speed'];?>">
							<span class="input-group-addon">px</span>
						</div>
						<span class="help-block">弹幕飘屏速度 值越大飘动速度越快</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">弹幕水平距离速度</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="danmu_distance"  class="form-control" value="<?php  echo $dm['danmu_distance'];?>">
							<span class="input-group-addon">px</span>
						</div>
						<span class="help-block">弹幕水平距离速度 值越大弹幕间距离越大</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">弹幕间垂直高度</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="danmu_marginTop"  class="form-control" value="<?php  echo $dm['danmu_marginTop'];?>">
							<span class="input-group-addon">px</span>
						</div>
						<span class="help-block">弹幕间垂直高度 值越大弹幕垂直间距越大 不可小于80 注:此值越大显示的弹幕轨道越少</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">弹幕是否循环</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="loop" value="1"  <?php  if($dm['loop'] == '1') { ?>checked="true"<?php  } ?>> 循环
						</label>
						<label class="radio-inline">
							<input type="radio" name="loop" value="2"  <?php  if($dm['loop'] == '2') { ?>checked="true"<?php  } ?>> 不循环
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
					<div class="col-sm-9">
						<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					</div>
				</div>
			</div>
		</div>
</form>
<?php  } else if($oop=='lottory_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">抽奖设置 <span class="label label-danger">此处设置后、抽奖箱以及砸金蛋均会生效</span></div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">抽奖网页标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="title" placeholder="公众号名称" value="<?php  echo $lottory_config['title'];?>">
						<span class="help-block"><span class="label label-success">抽奖网页标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">抽奖类型</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="lottory_type" value="0" <?php  if($lottory_config['lottory_type'] == '0') { ?>checked="true"<?php  } ?> >普通用户
						</label>
						<label class="radio-inline">
							<input type="radio" name="lottory_type" value="1"   <?php  if($lottory_config['lottory_type'] == '1') { ?>checked="true"<?php  } ?> >签到用户
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否开启抽奖提示</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_mess" value="0" id="show_time_0" <?php  if($lottory_config['send_mess'] == '0') { ?>checked="true"<?php  } ?> onclick="show_def1()">否
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_mess" value="1" id="show_time_1"  <?php  if($lottory_config['send_mess'] == '1') { ?>checked="true"<?php  } ?> onclick="show_def2()">是
						</label>
						<span class="help-block">注：仅仅对已经关注的粉丝有效</span>
					</div>
					
				</div>
				<div class="form-group show_def" style="<?php  if($lottory_config['send_mess']==0) { ?>display:none<?php  } ?>">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">模板中奖提示内容</label>
					<div class="col-sm-9 ">
					<textarea style="height:200px;" class="form-control" name="def_mess" id="quit-tips" cols="70"><?php  echo $lottory_config['def_mess'];?></textarea>
					</div>
                </div>
		</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">奖品设置 <span class="label label-danger">此处设置后、抽奖箱、砸金蛋、3D抽奖均会生效</span></div>	
	<div class="panel-body">
		<div class="form-group col-sm-12">
			<ul>
				<li class="list-group-item award_list_li">
					<div class="form-group">
						<div class="col-sm-9 col-xs-12  col-md-2">
							排序
						</div>
						<div class="col-sm-9 col-xs-12  col-md-2" style="text-align:Center">
							奖项
						</div>
						<div class="col-sm-9 col-xs-12  col-md-2" style="text-align:Center">
							奖品
						</div>
						<div class="col-sm-9 col-xs-12  col-md-2" style="text-align:Center">
							图片
						</div>
						<div class="col-sm-9 col-xs-12  col-md-2" style="text-align:Center">
							数量
						</div>
						<div class="col-sm-9 col-xs-12  col-md-2" style="text-align:Center">
							操作
						</div>
					</div>
			   </li>
			   <ul class="award_list">
					<?php  if(is_array($award)) { foreach($award as $row) { ?>
						<li class="list-group-item award_list_li">
							<div class="form-group">
								<div class="col-md-2">
									<input type="text" id='displayid' name="displayid[]" class="form-control" value="<?php  echo $row['displayid'];?>" placeholder="奖项排序"/>
									<span class="help-block">此奖项在抽奖选项列表里的排列位置</span>
								</div>
								
								<div class="col-md-2">
									<input type="text" id='tagname' name="tag_name[]" class="form-control" value="<?php  echo $row['tag_name'];?>" placeholder="请填写奖项名称"/>
									<span class="help-block">如一等奖,二等奖等</span>
								</div>
							
								<div class="col-md-2">
									<input type="text" id='luck_name' name="luck_name[]" class="form-control" value="<?php  echo $row['luck_name'];?>" placeholder="请填写奖品名称" />
									<span class="help-block">名称尽量简明扼要</span>
								</div>
							
								<div class="col-md-2">
									<?php  echo tpl_form_field_image('luck_img[]', $row['luck_img']);?>
									<span class="help-block">奖品图片 规格200*200</span>
								</div>
								<div class="col-md-2">
									<input type="text" id='tagNum' name="tag_num[]" class="form-control" value="<?php  echo $row['tag_num'];?>" placeholder="请填写整数"/>
									<span class="help-block">请填写整数</span>
								</div>
								<div class="col-md-2" >
										<a href="javascript:;" class="btn btn-danger" onclick="award_delete(this)" >删除</a>
								</div>
							</div>
						</li>
					<?php  } } ?>
			   </ul>
			</ul>
		</div>
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">&nbsp;</label>
					<div class="col-sm-9">
                	<a href="javascript:;" class="btn btn-success" id="add_award"><b>+</b>添加奖品</a>
					</div>
        </div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>

</form>
<div class="award_box" style="display:none">
	<li class="list-group-item award_list_li">
		<div class="form-group">
			<div class="col-md-2">
				<input type="text" id='displayid' name="displayid[]" class="form-control" value="<?php  echo $award['displayid'];?>" placeholder="奖项排序"/>
				<span class="help-block">此奖项在抽奖选项列表里的排列位置</span>
			</div>
			
			<div class="col-md-2">
				<input type="text" id='tagname' name="tag_name[]" class="form-control" value="<?php  echo $award['tag_name'];?>" placeholder="请填写奖项名称"/>
				<span class="help-block">如一等奖,二等奖等</span>
			</div>
		
			<div class="col-md-2">
				<input type="text" id='luck_name' name="luck_name[]" class="form-control" value="<?php  echo $award['luck_name'];?>" placeholder="请填写奖品名称" />
				<span class="help-block">名称尽量简明扼要</span>
			</div>
		
			<div class="col-md-2">
				<?php  echo tpl_form_field_image('luck_img[]', $award['luck_img']);?>
				<span class="help-block">奖品图片 规格200*200</span>
			</div>
			<div class="col-md-2">
				<input type="text" id='tagNum' name="tag_num[]" class="form-control" value="<?php  echo $award['tag_num'];?>" placeholder="请填写整数"/>
				<span class="help-block">请填写整数</span>
			</div>
			<div class="col-md-2" >
					<a href="javascript:;" class="btn btn-danger" onclick="award_delete(this)" >删除</a>
			</div>
		</div>
	</li>
</div>
<script>
$(function(){
	$("#add_award").on('click',function(){
			var html = $(".award_box").html();
			$(".award_list").append(html);
	});
});
function award_delete(obj){
	$(obj.parentNode.parentNode).remove();
}
function show_def1(){
	$(".show_def").hide();
}
function show_def2(){
	$(".show_def").show();
}
</script>
<?php  } else if($oop=='dmredpack_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-body">
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">微信网页标题</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $dmredpack_config['wechat_title'];?>" placeholder="微信网页标题"/>
						<span class="help-block">微信网页标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信等待开始背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bg', $dmredpack_config['wechat_bg']);?>
						<span class="help-block">微信等待开始背景图片 规格大小1300*1950 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信拆红包红包图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_redpack_img', $dmredpack_config['wechat_redpack_img']);?>
						<span class="help-block">微信拆红包红包图片 规格大小为534*747 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信拆红包按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_kai_img', $dmredpack_config['wechat_kai_img']);?>
						<span class="help-block">微信拆红包按钮图片 规格大小为184*191 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信红包主办方logo</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_logo', $dmredpack_config['wechat_logo']);?>
						<span class="help-block">微信红包主办方logo 规格大小为110*110 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">主办方名称</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_name" class="form-control" value="<?php  echo $dmredpack_config['wechat_name'];?>" placeholder="主办方名称"/>
						<span class="help-block">主办方名称</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">拆红包引导词</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_word" class="form-control" value="<?php  echo $dmredpack_config['wechat_word'];?>" placeholder="主办方名称"/>
						<span class="help-block">拆红包引导词 如:给你发放了一个随机红包</span>
					</div>
				</div>
				<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2  control-label">微信关闭提示层类型</label>
						<div class="col-sm-9 ">
							<label class="radio-inline">
								<input type="radio" name="wechat_closetip_type" value="1"  <?php  if($dmredpack_config['wechat_closetip_type'] == '1') { ?>checked="true"<?php  } ?>>自动关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="wechat_closetip_type" value="2"  <?php  if($dmredpack_config['wechat_closetip_type'] == '2') { ?>checked="true"<?php  } ?>>手动关闭
							</label>
							
						</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信拆红包成功图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_success_img', $dmredpack_config['wechat_success_img']);?>
						<span class="help-block">微信拆红包成功图片 规格大小为394*346 png图片</span>
					</div>
				</div>
				<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2  control-label">微信拆红包成功音效是否开启</label>
						<div class="col-sm-9 ">
							<label class="radio-inline">
								<input type="radio" name="wechat_success_audio_open" value="1"  <?php  if($dmredpack_config['wechat_success_audio_open'] == '1') { ?>checked="true"<?php  } ?>>开启
							</label>
							<label class="radio-inline">
								<input type="radio" name="wechat_success_audio_open" value="2"  <?php  if($dmredpack_config['wechat_success_audio_open'] == '2') { ?>checked="true"<?php  } ?>>关闭
							</label>
							
						</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信拆红包成功音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('wechat_success_audio', $dmredpack_config['wechat_success_audio']);?>
						<span class="help-block">微信拆红包成功音效 MP3</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">微信拆红包成功弹窗自动关闭时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
									<input type="text" name="wechat_success_time"  class="form-control" value="<?php  echo $dmredpack_config['wechat_success_time'];?>">
									<span class="input-group-addon">秒</span>		
						</div>
						<span class="help-block">微信拆红包成功弹窗自动关闭时间 至少是1秒</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信拆红包拆出空包图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_fail_img', $dmredpack_config['wechat_fail_img']);?>
						<span class="help-block">微信领取红包成功图片 规格大小为300*300 jpg图片</span>
					</div>
				</div>
				<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2  control-label">微信拆红包空包音效是否开启</label>
						<div class="col-sm-9 ">
							<label class="radio-inline">
								<input type="radio" name="wechat_fail_audio_open" value="1"  <?php  if($dmredpack_config['wechat_fail_audio_open'] == '1') { ?>checked="true"<?php  } ?>>开启
							</label>
							<label class="radio-inline">
								<input type="radio" name="wechat_fail_audio_open" value="2"  <?php  if($dmredpack_config['wechat_fail_audio_open'] == '2') { ?>checked="true"<?php  } ?>>关闭
							</label>
							
						</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信拆红包空包音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('wechat_fail_audio', $dmredpack_config['wechat_fail_audio']);?>
						<span class="help-block">微信拆红包空包音效 MP3</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">微信拆红包空包弹窗自动关闭时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
									<input type="text" name="wechat_fail_time"  class="form-control" value="<?php  echo $dmredpack_config['wechat_fail_time'];?>">
									<span class="input-group-addon">秒</span>		
						</div>
						<span class="help-block">微信拆红包空包弹窗自动关闭时间 至少是1秒</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信关闭弹窗按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_close_btn', $dmredpack_config['wechat_close_btn']);?>
						<span class="help-block">微信关闭弹窗按钮图片 规格大小为33*33 png图片</span>
					</div>
				</div>
			</div>
			</div>
			<div class="panel panel-default">
			<div class="panel-heading">大屏设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="pc_title" class="form-control" value="<?php  echo $dmredpack_config['pc_title'];?>" placeholder="大屏幕标题"/>
						<span class="help-block">大屏幕标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $dmredpack_config['bg_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为1364*673 jpg图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('bg_video', $dmredpack_config['bg_video']);?>
						<span class="help-block">大屏背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是默认风格、上传背景视频后、风格将不再支持设置</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music', $dmredpack_config['bg_music']);?>
						<span class="help-block">大屏背景音效 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp3 注:视频背景优先级最高、次之为背景图片、再次之是默认风格、上传背景视频后、风格将不再支持设置</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏等待开始页面左侧logo图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('welcome_logo', $dmredpack_config['welcome_logo']);?>
						<span class="help-block">大屏等待开始页面背景图 规格大小为600*333px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏等待开始页面开始按钮背景图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('welcome_start_img', $dmredpack_config['welcome_start_img']);?>
						<span class="help-block">大屏等待开始页面开始按钮背景图 规格大小为202*83px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏等待开始二维码顶部引导文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="welcome_qr_txt" class="form-control" value="<?php  echo $dmredpack_config['welcome_qr_txt'];?>" />
						<span class="help-block">大屏等待开始二维码顶部引导文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏等待开始页面二维码图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('welcome_qr', $dmredpack_config['welcome_qr']);?>
						<span class="help-block">大屏等待开始页面二维码图片 规格大小为200*200px图片 注:此处不设置即为显示扫码直接参与二维码</span>
					</div>
				 </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏等待开始页面用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('welcome_user_defaultimg', $dmredpack_config['welcome_user_defaultimg']);?>
						<span class="help-block">大屏等待开始页面用户默认图片 规格大小为40*40px图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏是否开启红包余额以及参与人数提示层</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="pc_notice_open" value="1"  <?php  if($dmredpack_config['pc_notice_open'] == '1') { ?>checked="true"<?php  } ?> >开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="pc_notice_open" value="2"   <?php  if($dmredpack_config['pc_notice_open'] == '2') { ?>checked="true"<?php  } ?> >关闭
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏参与用户提示层参与人数图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_notice_userimg', $dmredpack_config['pc_notice_userimg']);?>
						<span class="help-block">大屏参与用户提示层参与人数默认图片 规格大小为68*68px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏参与用户提示层红包余额图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_notice_redpackimg', $dmredpack_config['pc_notice_redpackimg']);?>
						<span class="help-block">大屏参与用户提示层红包余额图片 规格大小为68*68px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏是否开启排行榜提示层</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="pc_phb_open" value="1"  <?php  if($dmredpack_config['pc_phb_open'] == '1') { ?>checked="true"<?php  } ?> >开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="pc_phb_open" value="2"   <?php  if($dmredpack_config['pc_phb_open'] == '2') { ?>checked="true"<?php  } ?> >关闭
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏排行榜人数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
									<input type="text" name="pc_phb_usernums"  class="form-control" value="<?php  echo $dmredpack_config['pc_phb_usernums'];?>">
									<span class="input-group-addon">人</span>		
						</div>
						<span class="help-block">大屏排行榜人数 最多是8人</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜提示层顶部图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_phb_topimg', $dmredpack_config['pc_phb_topimg']);?>
						<span class="help-block">大屏排行榜提示层顶部图片 规格大小为450*110px png图片</span>
					</div>
				 </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜提示层顶部图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_phb_topimg', $dmredpack_config['pc_phb_topimg']);?>
						<span class="help-block">大屏排行榜提示层顶部图片 规格大小为450*110px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜提示层冠军背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_phb_firstimg', $dmredpack_config['pc_phb_firstimg']);?>
						<span class="help-block">大屏排行榜提示层冠军背景图片 规格大小为316*316px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜提示层亚军背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_phb_secondimg', $dmredpack_config['pc_phb_secondimg']);?>
						<span class="help-block">大屏排行榜提示层冠军背景图片 规格大小为169*169px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜提示层季军背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_phb_thirdimg', $dmredpack_config['pc_phb_thirdimg']);?>
						<span class="help-block">大屏排行榜提示层冠军背景图片 规格大小为180*180px png图片</span>
					</div>
				 </div>
				  <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜提示层用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_phb_defaultimg', $dmredpack_config['pc_phb_defaultimg']);?>
						<span class="help-block">大屏排行榜提示层用户默认图片 规格大小为48*48px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜提示层用户默认名称</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="pc_phb_defaultname" class="form-control" value="<?php  echo $dmredpack_config['pc_phb_defaultname'];?>" />
						<span class="help-block">大屏排行榜提示层用户默认名称</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏是否红包雨背景层</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="pc_bg_redpack_open" value="1"  <?php  if($dmredpack_config['pc_bg_redpack_open'] == '1') { ?>checked="true"<?php  } ?> >开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="pc_bg_redpack_open" value="2"   <?php  if($dmredpack_config['pc_bg_redpack_open'] == '2') { ?>checked="true"<?php  } ?> >关闭
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包雨图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_bg_redpackimg', $dmredpack_config['pc_bg_redpackimg']);?>
						<span class="help-block">红包雨图片 规格大小为200*200px png图片</span>
					</div>
				 </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏弹幕速度</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="pc_dm_speed" class="form-control" value="<?php  echo $dmredpack_config['pc_dm_speed'];?>" />
						<span class="help-block">大屏弹幕速度 注：速度越小 大屏显示的弹幕越多 可以是小数、不能小于等于0</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏弹幕背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('pc_dm_bgcolor',$dmredpack_config['pc_dm_bgcolor']);?>
					<span class="help-block">大屏弹幕背景色 默认rgba(0,0,0,0.5)  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏弹幕文字颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('pc_dm_txtcolor',$dmredpack_config['pc_dm_txtcolor']);?>
					<span class="help-block">大屏弹幕文字颜色 默认rgba(0,0,0,0.5)  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">特别红包金额提示层背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_openfire_bgimg', $dmredpack_config['pc_openfire_bgimg']);?>
						<span class="help-block">特别红包金额提示层背景图片 规格大小为537*747px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">特别红包金额提示层左上角图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_openfire_topimg', $dmredpack_config['pc_openfire_topimg']);?>
						<span class="help-block">特别红包金额提示层左上角图片 规格大小为591*591px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏结束排行榜人数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
									<input type="text" name="pc_ranknums"  class="form-control" value="<?php  echo $dmredpack_config['pc_ranknums'];?>">
									<span class="input-group-addon">人</span>		
						</div>
						<span class="help-block">大屏排行榜人数 0为显示全部人数</span>
					</div>
				</div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏结束排行榜背景颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('pc_rank_bgcolor',$dmredpack_config['pc_rank_bgcolor']);?>
					<span class="help-block">游戏结束排行榜背景颜色 默认红色 标示 #bf3f2f  </span>
					</div>
				</div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏结束排行榜顶部图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_rank_topimg', $dmredpack_config['pc_rank_topimg']);?>
						<span class="help-block">游戏结束排行榜顶部图片 规格大小为987*146px png图片</span>
					</div>
				 </div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏结束排行榜手机最佳用户顶部图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_rank_bestimg', $dmredpack_config['pc_rank_bestimg']);?>
						<span class="help-block">游戏结束排行榜手机最佳用户顶部图片 规格大小为138*70px png图片</span>
					</div>
				 </div>
			</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">游戏设置</div>					
				<div class="panel-body">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2  control-label">用户本次游戏最多能抢到红包个数</label>
						<div class="col-sm-9 ">
							<div class="input-group">
										<input type="text" name="maxnums"  class="form-control" value="<?php  echo $dmredpack_config['maxnums'];?>">
										<span class="input-group-addon">个</span>		
							</div>
							<span class="help-block">用户本次游戏最多能抢到红包个数 注:设置为0即为不限制数量</span>
						</div>
					</div>
					<div class="form-group col-sm-12">
						<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					</div>
				</div>
			</div>
				
	</div>
</div>
</form>
<?php  } else if($oop=='shake_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">摇一摇设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">网页标题</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" id='title' name="title" class="form-control" value="<?php  echo $shake['title'];?>" placeholder="网页标题"/>
						<span class="help-block">网页标题</span>
					</div>
				</div>
			    <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">摇一摇未开始显示的二维码：</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('qr_code', $shake['qr_code']);?>
						<span class="help-block">摇一摇未开始显示的二维码 注意:默认的是生产的系统二维码 扫码直接进入摇一摇微信界面</span>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道背景色</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_color('paodao_color',$shake['paodao_color']);?>
						<span class="help-block">跑道背景色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">品牌透明图:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pp_img', $shake['pp_img']);?>
						<span class="help-block">品牌透明图 规格大小为400x400</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信摇一摇背景色</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_color('app_bg_color',$shake['app_bg_color']);?>
						<span class="help-block">微信摇一摇背景色 默认值:#ff9900　需要自己去调节</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信背景图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('app_bg', $shake['app_bg']);?>
						<span class="help-block">微信背景图 规格大小为540x491 最好为圆形png图片 类似一个轮子的样子</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">摇一摇版权</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="shake_copyright" class="form-control" value="<?php  echo $shake['shake_copyright'];?>" placeholder="摇一摇版权"/>
						<span class="help-block">摇一摇版权 默认为公众号名称</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信摇一摇手型图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('app_shake_img', $shake['app_shake_img']);?>
						<span class="help-block">微信摇一摇手型图 规格大小为183*178 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否准许重复中奖</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" id="show_time_0" <?php  if($shake['award_again'] == '1') { ?>checked="true"<?php  } ?> > 准许
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" id="show_time_1"  <?php  if($shake['award_again'] == '2') { ?>checked="true"<?php  } ?> >不准许
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机摇一摇音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('shake_music', $shake['shake_music']);?>
						<span class="help-block"> 摇一摇音效 最好用外链 格式mp3</span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间:</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="ready_time"  class="form-control" value="<?php  echo $shake['ready_time'];?>">
											<span class="input-group-addon">秒</span>
										</div>
									</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">结束点数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="point"  class="form-control" value="<?php  echo $shake['point'];?>">
											<span class="input-group-addon">点</span>
										</div>
									</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $shake['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏结束显示类型</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="template" value="1"  <?php  if($shake['template'] == '1') { ?>checked="true"<?php  } ?> >领奖台前三名
						</label>
						<label class="radio-inline">
							<input type="radio" name="template" value="2"   <?php  if($shake['template'] == '2') { ?>checked="true"<?php  } ?>>金字塔前1-10名
						</label>
						<span class="help-block">需要显示前10名请选择金字塔类型</span>
					</div>
				</div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">加油口号</label>
					<div class="col-sm-9 ">
					<textarea style="height:200px;" class="form-control" name="slogan" id="slogan" cols="70"><?php  echo $shake['slogan'];?></textarea>
                    <span class="help-block">加油口号隔开 每条口号请以#号</span>
					</div>
                </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物第一名形象:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_1', $shake['user_1']);?>
						<span class="help-block">跑道人物第一名形象: 规格大小为80px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物第二名形象:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_2', $shake['user_2']);?>
						<span class="help-block">跑道人物第二名形象: 规格大小为80px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物第三名形象:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_3', $shake['user_3']);?>
						<span class="help-block">跑道人物第三名形象: 规格大小为80px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物第四名形象:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_4', $shake['user_4']);?>
						<span class="help-block">跑道人物第四名形象: 规格大小为80px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物第五名形象:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_5', $shake['user_5']);?>
						<span class="help-block">跑道人物第五名形象: 规格大小为80px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物第六名形象:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_6', $shake['user_6']);?>
						<span class="help-block">跑道人物第六名形象: 规格大小为80px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物第七名形象:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_7', $shake['user_7']);?>
						<span class="help-block">跑道人物第七名形象: 规格大小为80px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物第八名形象:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_8', $shake['user_8']);?>
						<span class="help-block">跑道人物第八名形象: 规格大小为80px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物第九名形象:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_9', $shake['user_9']);?>
						<span class="help-block">跑道人物第九名形象: 规格大小为80px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物第十名形象:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_10', $shake['user_10']);?>
						<span class="help-block">跑道人物第十名形象: 规格大小为80px*60px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">PC 摇一摇背景音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music', $shake['bg_music']);?>
						<span class="help-block"> 摇一摇背景音效 最好用外链 格式mp3 不填写将不播放摇一摇特定的背景音乐</span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">每轮中奖记录人数</label>
									<div class="col-sm-4">
										<div class="input-group">
											<input type="text" name="maxsize"  class="form-control" value="<?php  echo $shake['maxsize'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">不要超过200人</span>
									</div>
				</div>
				<div class="form-group" style="display:none">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖是否推送中奖消息</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="send_mess_on" value="0"  checked="true">否
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_mess_on" value="1" >是
						</label>
					</div>
				</div>
				
				<div class="form-group send_mess_on" style="display:none">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">消息模板是否附带表单</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_bd_on" value="0"  checked="true" >否
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_bd_on" value="1">是
						</label>
					</div>
				</div>
	</div>
</div>
<style>
.yyy_rotates li{position:relative}
.del_rotate {
    width: 20px;
    display: inline-block;
    position: absolute;
    top: -10px;
    left: 10px;
    z-index: 2;
    height: 20px;
    font-size: 20px;
	color:red
}
</style>
<div class="panel panel-default">
	<div class="panel-heading">
		摇一摇默认轮数设置<br><br>
		<span class="label label-danger">
			注意:设置此处后，新增活动将直接同步此处的轮数到摇一摇、数钱、爬树、以及3d摇一摇
		</span><br><br>
		<div class="btn-group"><a class="btn btn-danger" href="javascript:;" onclick="reset_rotate()" ><i class="fa fa-times"></i> 删除全部轮数</a></div><br><br>
		<span class="label label-danger">
			注意:不论是新增还是删除轮数都需要点击提交
		</span>
	</div>	
	<!--pnum awardNums-->
	<div class="panel-body">
	<div class="form-group">
	<ul class="yyy_rotates">
		<?php  if(is_array($sys_yyy_rotates)) { foreach($sys_yyy_rotates as $v) { ?>
		<li>
			<div class="form-group">
				<span class="del_rotate" onclick="delete_item(this)"><i class="fa fa-times-circle"></i></span>
				<div class="col-sm-12  col-xs-12 col-md-12">
					<div class="input-group">
						<div class="input-group-addon">中奖人数</div>
						<input type="text" class="form-control" name="zam_pnum[]" value="<?php  echo $v['pnum'];?>">
						<div class="input-group-addon" style="border-left:0">人、奖项名称</div>
						<input type="text" class="form-control" name="zam_prize_name[]" value="<?php  echo $v['prize_name'];?>">
						<div class="input-group-addon" >、奖品名称</div>
						<input type="text" class="form-control" name="zam_award_name[]" value="<?php  echo $v['award_name'];?>">
						<div class="input-group-addon" >、领奖地址</div>
						<input type="text" class="form-control" name="zam_get_award_address[]" value="<?php  echo $v['get_award_address'];?>">
					</div>
				</div>
			</div>
		</li>
		<?php  } } ?>
	</div>
	<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">&nbsp;</label>
					<div class="col-sm-9">
                	<a href="javascript:;" class="btn btn-success" id="add_yyyrotate"><b>+</b>添加轮数</a>
					</div>
    </div>
	</ul>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<div class="yyyrotate" style="display:none">
			<div class="form-group">
				<span class="del_rotate" onclick="delete_item(this)"><i class="fa fa-times-circle"></i></span>
				<div class="col-sm-12  col-xs-12 col-md-12">
					<div class="input-group">
						<div class="input-group-addon">中奖人数</div>
						<input type="text" class="form-control" name="zam_pnum[]" value="3">
						<div class="input-group-addon" style="border-left:0">人、奖项名称</div>
						<input type="text" class="form-control" name="zam_prize_name[]" value="">
						<div class="input-group-addon" >、奖品名称</div>
						<input type="text" class="form-control" name="zam_award_name[]" value="">
						<div class="input-group-addon" >、领奖地址</div>
						<input type="text" class="form-control" name="zam_get_award_address[]" value="">
					</div>
				</div>
			</div>
</div>
<script>
	$(function(){
		$("#add_yyyrotate").on('click',function(){
			var html = "<li>";
				html += $(".yyyrotate").html();
				html += "</li>";
				
			$(".yyy_rotates").append(html);
		});
	})
	function delete_item(obj){
		$(obj.parentNode.parentNode).remove();
	}
	function reset_rotate(){
		if(confirm('清空后、数据将无法恢复，确认吗？')){
			$(".yyy_rotates").empty();
		}
	}
	function hide_send_mess(){
		$(".send_mess_on").hide();
	}
	function show_send_mess(){
		$(".send_mess_on").show();
	}
</script>
<?php  } else if($oop=='mshake_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">猴子摇一摇设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">网页标题</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" id='title' name="title" class="form-control" value="<?php  echo $mshake['title'];?>" placeholder="网页标题"/>
						<span class="help-block">网页标题</span>
					</div>
				</div>
			    <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏未开始显示的二维码</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="qr_type" value="1"  <?php  if($mshake['qr_type'] == '1') { ?>checked="true"<?php  } ?> >游戏直接二维码
						</label>
						<label class="radio-inline">
							<input type="radio" name="qr_type" value="2"   <?php  if($mshake['qr_type'] == '2') { ?>checked="true"<?php  } ?>>公众号二维码
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_bg_img', $mshake['pc_bg_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为1056*660 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/common/images_old/mshake_bg.jpg'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<!--2017 05 25 add-->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕猴子默认图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('hz_default_img', $mshake['hz_default_img']);?>
						<span class="help-block">大屏幕猴子默认图 规格大小为114*97px png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/common/images_old/hz.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕猴子动态图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('hz_dongtai_img', $mshake['hz_dongtai_img']);?>
						<span class="help-block">大屏幕猴子默认图 规格大小为114*120px gif动态图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/common/images_old/hz.gif'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕头像默认图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('user_default_img', $mshake['user_default_img']);?>
						<span class="help-block">大屏幕头像默认图 规格大小为220*220px jpg图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/common/images_old/mshake_user.jpg'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏幕用户默认名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="user_default_name" class="form-control" value="<?php  echo $mshake['user_default_name'];?>" placeholder="摇一摇版权"/>
						<span class="help-block">大屏幕用户默认名称 默认为虚位以待</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕掉落果子默认图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('guozi_default_img', $mshake['guozi_default_img']);?>
						<span class="help-block">大屏幕果子默认图 规格大小为84*99px png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/common/images_old/mshake_yezi.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<!--2017 05 25 add end--->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信摇一摇背景色</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_color('app_bg_color',$mshake['app_bg_color']);?>
						<span class="help-block">微信摇一摇背景色 默认值:#ff9900　需要自己去调节</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信背景图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('app_bg', $mshake['app_bg']);?>
						<span class="help-block">微信背景图 规格大小为540x491 最好为圆形png图片 类似一个轮子的样子</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信摇一摇中间晃动图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('app_shake_img', $mshake['app_shake_img']);?>
						<span class="help-block">微信摇一摇手型图 规格大小为114*97px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否准许重复中奖</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" id="show_time_0" <?php  if($mshake['award_again'] == '1') { ?>checked="true"<?php  } ?> > 准许
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" id="show_time_1"  <?php  if($mshake['award_again'] == '2') { ?>checked="true"<?php  } ?> >不准许
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机摇一摇音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('shake_music', $mshake['shake_music']);?>
						<span class="help-block"> 摇一摇音效 最好用外链 格式mp3</span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间:</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="ready_time"  class="form-control" value="<?php  echo $mshake['ready_time'];?>">
											<span class="input-group-addon">秒</span>
										</div>
									</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">结束点数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="point"  class="form-control" value="<?php  echo $mshake['point'];?>">
											<span class="input-group-addon">点</span>
										</div>
									</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $mshake['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">PC 摇一摇背景音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music', $mshake['bg_music']);?>
						<span class="help-block"> 摇一摇背景音效 最好用外链 格式mp3 不填写将不播放摇一摇特定的背景音乐</span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">每轮全部排名显示的总人数</label>
									<div class="col-sm-9">
										<div class="input-group">
											<input type="text" name="maxsize"  class="form-control" value="<?php  echo $mshake['maxsize'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">不要超过200人</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖是否推送中奖消息</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="send_mess_on" value="0"  <?php  if($mshake['send_mess_on'] == '0') { ?>checked="true"<?php  } ?>>否
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_mess_on" value="1"   <?php  if($mshake['send_mess_on'] == '1') { ?>checked="true"<?php  } ?>>是
						</label>
					</div>
				</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
	</div>
</form>
<script>
	function hide_send_mess(){
		$(".send_mess_on").hide();
	}
	function show_send_mess(){
		$(".send_mess_on").show();
	}
</script>
<?php  } else if($oop=='tshake_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">团队摇一摇设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">标题</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" id='title' name="title" class="form-control" value="<?php  echo $tshake['title'];?>" placeholder="标题"/>
						<span class="help-block">标题</span>
					</div>
				</div>
				<!--<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景音乐</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music', $tshake['bg_music']);?>
						<span class="help-block"> 摇一摇音乐 最好用外链 格式mp3</span>
					</div>
				</div>-->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $tshake['bg_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为183*178 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('bg_video', $tshake['bg_video']);?>
						<span class="help-block">pc背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是默认风格、上传背景视频后、风格将不再支持设置</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">摇一摇总点数:【结束标准】</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="total_point"  class="form-control" value="<?php  echo $tshake['total_point'];?>">
							<span class="input-group-addon">点</span>
						</div>
						<span class="help-block">不要填写小于3000的数字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">分组最多加入人数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="max_man"  class="form-control" value="<?php  echo $tshake['max_man'];?>">
							<span class="input-group-addon">人</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕游戏准备背景图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gamebg', $tshake['gamebg']);?>
						<span class="help-block">大屏幕游戏准备背景图 规格大小为980*450图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕品牌透明图:</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pp_img', $tshake['pp_img']);?>
						<span class="help-block">品牌透明图 规格大小为400x400</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
				  <label class="col-xs-6 col-sm-3 col-md-2  control-label"></label>
				  <div class="col-sm-9 ">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				  </div>
				</div>
			</div>
</div>
</form>
<?php  } else if($oop=='xys_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
			<div class="panel-heading">
				许愿树基础设置
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏幕标题</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="title" class="form-control" value="<?php  echo $xys['title'];?>" placeholder="网页标题"/>
						<span class="help-block">大屏幕标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">pc背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $xys['bg_img']);?>
						<span class="help-block">pc背景图片 规格1440*900px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">pc大屏背景音效</span></label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$xys['bg_music'])?>
						<span class="help-block"><span class="label label-success"> pc大屏背景音效 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">pc左侧文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="left_words" class="form-control" value="<?php  echo $xys['left_words'];?>" placeholder="pc左侧文字"/>
						<span class="help-block">pc左侧文字 默认为许愿树、请尽量精简</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">pc左侧文字颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('left_words_color',$xys['left_words_color']);?>
					<span class="help-block">pc左侧文字颜色  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">pc左侧文字图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_words_img', $xys['left_words_img']);?>
						<span class="help-block">pc左侧文字图片 规格175*390px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">pc许愿树图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('shu_img', $xys['shu_img']);?>
						<span class="help-block">pc许愿树图片 规格767*775px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">祝福是否需要审核</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="shenhe" value="1"  <?php  if($xys['shenhe'] == '1') { ?>checked="true"<?php  } ?>> 无需审核
						</label>
						<label class="radio-inline">
							<input type="radio" name="shenhe" value="2"  <?php  if($xys['shenhe'] == '2') { ?>checked="true"<?php  } ?>>必须审核
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">用户发送祝福次数限制</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="can_sendnums"  class="form-control" value="<?php  echo $xys['can_sendnums'];?>">
							<span class="input-group-addon">条</span>
						</div>
						<span class="help-block">用户发送祝福次数限制 为0将不限制</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">用户发送祝福频率限制</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="send_pl"  class="form-control" value="<?php  echo $xys['send_pl'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block">用户发送祝福频率限制 为0将不限制</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">用户发送祝福文字长度限制</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="msglength"  class="form-control" value="<?php  echo $xys['msglength'];?>">
							<span class="input-group-addon">个汉字</span>
						</div>
						<span class="help-block">用户发送祝福文字长度限制 为0将不限制</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">打开大屏幕加载历史消息条数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="history_nums"  class="form-control" value="<?php  echo $xys['history_nums'];?>">
							<span class="input-group-addon">条</span>
						</div>
						<span class="help-block">打开大屏幕加载历史消息条数 为0将会加载所有的上墙消息</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
					<div class="col-sm-9">
						<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					</div>
				</div>
			</div>
		</div>
</form>
<?php  } else if($oop=='redpack_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">抢红包设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">发放红包祝福语</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="_desc" placeholder="" value="<?php  echo $redpack_config['_desc'];?>">
						<span class="help-block"><span class="label label-success">发放红包祝福语 </span></span>
					</div>
				</div>
				<div class="form-group" <?php  if($sys_config['activity_redpack_type']==1) { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">发放红包活动名称</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="redpack_activity_name" placeholder="" value="<?php  echo $redpack_config['redpack_activity_name'];?>">
						<span class="help-block"><span class="label label-success">发放红包活动名称 仅现金红包生效</span></span>
					</div>
				</div>
				<div class="form-group" <?php  if($sys_config['activity_redpack_type']==1) { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">发放红包活动商家名称 </label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="redpack_sendname" placeholder="" value="<?php  echo $redpack_config['redpack_sendname'];?>">
						<span class="help-block"><span class="label label-success">发放红包活动商家名称 仅现金红包生效</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动最多抢得红包个数</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="all_nums" placeholder="" value="<?php  echo $redpack_config['all_nums'];?>">
						<span class="help-block"><span class="label label-success">粉丝当前活动最多抢得红包个数 整数 单位: 个</span></span>
					</div>
				</div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">抢红包活动规则</label>
                    <div class="col-xs-12 col-sm-9">
                        <?php  echo tpl_ueditor('guize',$redpack_config['guize'])?>
									<span class="help-block">抢红包活动规则</span>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">抢红包提示语</label>
                    <div class="col-xs-12 col-sm-9">
                        <?php  echo tpl_ueditor('tip_words',$redpack_config['tip_words'])?>
									<span class="help-block">抢红包提示语</span>
                    </div>
                </div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕底部背景</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pc_bg', $redpack_config['pc_bg']);?>
						<span class="help-block">大屏幕底部背景 712*173px  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信底部背景</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bg', $redpack_config['wechat_bg']);?>
						<span class="help-block">微信底部背景 640*299px  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包1图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('red1', $redpack_config['red1']);?>
						<span class="help-block">红包1图片 122*152px  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包2图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('red2', $redpack_config['red2']);?>
						<span class="help-block">红包2图片 103*137px  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包3图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('red3', $redpack_config['red3']);?>
						<span class="help-block">红包3图片 80*108px  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包4图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('red4', $redpack_config['red4']);?>
						<span class="help-block">红包4图片 71*97px  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包5图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('red5', $redpack_config['red5']);?>
						<span class="help-block">红包5图片 67*95px  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包6图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('red6', $redpack_config['red6']);?>
						<span class="help-block">红包6图片 37*48px  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包7图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('red7', $redpack_config['red7']);?>
						<span class="help-block">红包7图片 28*49px  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕右侧获奖图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('money_bg', $redpack_config['money_bg']);?>
						<span class="help-block">大屏幕右侧获奖图片 60*60px  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">第一个红包下落时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="red1_times"  class="form-control" value="<?php  echo $redpack_config['red1_times'];?>">
							<span class="input-group-addon">毫秒</span>
						</div>
						<span class="help-block">默认 1500</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">第二个红包下落时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="red2_times"  class="form-control" value="<?php  echo $redpack_config['red2_times'];?>">
							<span class="input-group-addon">毫秒</span>
						</div>
						<span class="help-block">默认 1200</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">第三个红包下落时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="red3_times"  class="form-control" value="<?php  echo $redpack_config['red3_times'];?>">
							<span class="input-group-addon">毫秒</span>
						</div>
						<span class="help-block">默认 900</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">第四个红包下落时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="red4_times"  class="form-control" value="<?php  echo $redpack_config['red4_times'];?>">
							<span class="input-group-addon">毫秒</span>
						</div>
						<span class="help-block">默认 1050</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">第五个红包下落时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="red5_times"  class="form-control" value="<?php  echo $redpack_config['red5_times'];?>">
							<span class="input-group-addon">毫秒</span>
						</div>
						<span class="help-block">默认 1000</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">第六个红包下落时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="red6_times"  class="form-control" value="<?php  echo $redpack_config['red6_times'];?>">
							<span class="input-group-addon">毫秒</span>
						</div>
						<span class="help-block">默认 800</span>
					</div>
					
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">第七个红包下落时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="red7_times"  class="form-control" value="<?php  echo $redpack_config['red7_times'];?>">
							<span class="input-group-addon">毫秒</span>
						</div>
						<span class="help-block">默认 750</span>
					</div>
					
				</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
</div>
</div>
</form>
<?php  } else if($oop=='ddp_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">对对碰设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">对对碰类型设置</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="ddp_type" value="1"  <?php  if($ddp_config['ddp_type'] == '1') { ?>checked="true"<?php  } ?>>男女碰
						</label>
						<label class="radio-inline">
							<input type="radio" name="ddp_type" value="0"   <?php  if($ddp_config['ddp_type'] == '0') { ?>checked="true"<?php  } ?>>随机碰
						</label>
					</div>
				</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
</div>
</div>
</form>
<?php  } else if($oop=='dt_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">基础设置</div>	
	<div class="panel-body">				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏幕网页标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="title" placeholder="大屏幕网页标题" value="<?php  echo $dt_config['title'];?>">
						<span class="help-block"><span class="label label-success">大屏幕网页标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">用户类型</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="join_type" value="0" <?php  if($dt_config['join_type'] == '0') { ?>checked="true"<?php  } ?> >普通用户
						</label>
						<label class="radio-inline">
							<input type="radio" name="join_type" value="1"   <?php  if($dt_config['join_type'] == '1') { ?>checked="true"<?php  } ?> >签到用户
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否开启抽中提示</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_mess" value="0"  <?php  if($dt_config['send_mess'] == '0') { ?>checked="true"<?php  } ?> onclick="show_def1()">否
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_mess" value="1"   <?php  if($dt_config['send_mess'] == '1') { ?>checked="true"<?php  } ?> onclick="show_def2()">是
						</label>
					</div>
				</div>
				
				<div class="form-group send_tpl_box" <?php  if($dt_config['send_mess'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">模板消息-答题地点</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="send_address"  value="<?php  echo $dt_config['send_address'];?>">
						<span class="help-block"><span class="label label-success">模板消息-答题地点</span></span>
					</div>
				</div>
				<div class="form-group send_tpl_box" <?php  if($dt_config['send_mess'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">模板消息-主办方</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="send_zbf"  value="<?php  echo $dt_config['send_zbf'];?>">
						<span class="help-block"><span class="label label-success">模板消息-主办方</span></span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
</div>
</div>
</form>
<script>
function show_def1(){
	$(".send_tpl_box").hide();
}
function show_def2(){
	$(".send_tpl_box").show();
}
</script>
<?php  } else if($oop=='bd_config') { ?>
<style>
.list-bd-items div{text-align:center;}
#bmnormal_bdlists div{text-align:center}
.radiosondiv{margin-top:20px;}
.addType-btn .layui-layer-btn1{order-color: #1E9FFF;
    background-color: #1E9FFF;
    color: #fff;}
</style>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">表单设置<br><br>
		<span class="label label-danger">1 自定义表单活动开始后请不要去修改、新增或是删除表单项</span><br><br>
		<span class="label label-danger">2 表单项勾选了签到显示就不要勾选验证【勾选签到显示的表单项目、用户填写表单的时候不会显示填写项】</span><br><br>
		<span class="label label-danger">3 如果你需要开启验证功能、请一定保证验证的第一个表单项数据的唯一性</span>
	</div>				
	<div class="panel-body">
	    <div class="we7-form">
				<div class="form-group">
					<label for="" class="control-label col-sm-2">是否开启表单验证</label>
					<div class="form-controls col-sm-10 form-control-static">
						<input id="radio1-show" type="radio" name="show"  value="1"  <?php  if($bd_manage['show']==1) { ?>checked="checked"<?php  } ?> >
						<label for="radio1-show">是</label>
						<input id="radio1-show2" type="radio" name="show" value="0"  <?php  if($bd_manage['show']==0) { ?>checked="checked"<?php  } ?> >
						<label for="radio1-show2">否</label>
						<span class="help-block">是否开启表单验证</span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">微信端网页标题</label>
					<div class="form-controls col-sm-10">
					
						<input type="text"  class="form-control" name="title" placeholder="微信端网页标题" value="<?php  echo $bd_manage['title'];?>">
						<span class="help-block"><span class="label label-success">微信端网页标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">商家logo</label>
					<div class="form-controls col-sm-10">
						<?php  echo tpl_form_field_image('wechat_logo', $bd_manage['wechat_logo']);?>
						<span class="help-block">商家logo 规格200*120 注:不上传将不显示</span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">微信端介绍</label>
					<div class="form-controls col-sm-10">
						<input type="text"  class="form-control" name="des" placeholder="微信端介绍" value="<?php  echo $bd_manage['des'];?>">
						<span class="help-block"><span class="label label-success">注:不要超20字 不填写不显示</span></span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">微信端背景图片</label>
					<div class="form-controls col-sm-10">
						<?php  echo tpl_form_field_image('wechat_bg', $bd_manage['wechat_bg']);?>
						<span class="help-block">微信端背景图片 规格 640px*1480px</span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">微信端背景颜色</label>
					<div class="form-controls col-sm-10">
					<?php  echo tpl_form_field_color('bg_color',$bd_manage['bg_color']);?>
					<span class="help-block">微信端背景颜色 注:设置了背景图片此项将不生效 </span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">微信端按钮颜色</label>
					<div class="form-controls col-sm-10">
					<?php  echo tpl_form_field_color('button_color',$bd_manage['button_color']);?>
					<span class="help-block">微信端按钮颜色 </span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">通用表单项</label>
					<div class="form-controls col-sm-10">
						<ul id="bmnormal_bdlists">
							  <li class="list-group-item">
									<div class="form-group">
										<div class="col-sm-9 col-xs-12  col-md-3" style="text-align:center">名称</div>
										<div class="col-sm-9 col-xs-12  col-md-2" style="text-align:center">类型</div>
										<div class="col-sm-9 col-xs-12  col-md-2" style="text-align:center">互动显示</div>
										<div class="col-sm-9 col-xs-12  col-md-2" style="text-align:center">是否验证</div>
										<div class="col-sm-9 col-xs-12  col-md-2" style="text-align:center">签到显示</div>
										<div class="col-sm-9 col-xs-12  col-md-1" style="text-align:center">操作</div>
									</div>
							   </li>
							   <?php  if(is_array($bd_manage['xm'])) { foreach($bd_manage['xm'] as $irow) { ?>
							   <?php  if(empty($irow['zd_type'])) { ?>
									<?php  if($irow['zd_name']=='mobile') { ?>
										<?php  $irow['zd_type']='mobile';?>
									<?php  } else { ?>
										<?php  $irow['zd_type']='input';?>
									<?php  } ?>
									
								<?php  } ?>
							   <li class="list-group-item list-bd-items<?php  if($irow['zd_name']=='mobile') { ?> itemMobile<?php  } ?>">
								<div class="form-group" style="margin-bottom:0">
									<input type="hidden"  name="zd_name[]" class="form-control" value="<?php  echo $irow['zd_name'];?>">
									<div class="col-sm-9 col-xs-12  col-md-3">
										<input type="text" name="bd_name[]" class="form-control" value="<?php  echo $irow['bd_name'];?>">
									</div>
									<div class="col-sm-9 col-xs-12  col-md-2">
										
										<input type="hidden"  name="zd_type[]" class="form-control" value="<?php  echo $irow['zd_type'];?>" readonly="">
										<span class="label label-success"><?php  echo $this->bmItemType($irow['zd_type'])?></span>
									</div>
									<div class="col-sm-9 col-xs-12 col-md-2 bmshowtype" style="text-align:center">
										<input type="hidden" name="zd_show[]" value="<?php  echo $irow['zd_show'];?>">
										<a  data-type="1" class="btn btn-default <?php  if($irow['zd_show']=='1') { ?>btn-success <?php  } ?>js-btn-select">是</a>
										<a  data-type="2"  class="btn btn-default <?php  if($irow['zd_show']=='2') { ?>btn-success <?php  } ?>js-btn-select">否</a>
									</div>
									<div class="col-sm-9 col-xs-12 col-md-2 bmyztype" style="text-align:center">
										<input type="hidden" name="zd_yz[]" value="<?php  echo $irow['zd_yz'];?>">
										<a  data-type="1" class="btn btn-default <?php  if($irow['zd_yz']=='1') { ?>btn-success <?php  } ?>js-btn-select">是</a>
										<a  data-type="2"  class="btn btn-default <?php  if($irow['zd_yz']=='2') { ?>btn-success <?php  } ?>js-btn-select">否</a>
									</div>
									<div class="col-sm-9 col-xs-12 col-md-2 bmqdshowtype" style="text-align:center">
										<input type="hidden" name="qd_show[]" value="<?php  echo $irow['qd_show'];?>">
										<a  data-type="1" class="btn btn-default <?php  if($irow['qd_show']=='1') { ?>btn-success <?php  } ?>js-btn-select">是</a>
										<a  data-type="2"  class="btn btn-default <?php  if($irow['qd_show']=='2') { ?>btn-success <?php  } ?>js-btn-select">否</a>
									</div>
									<div class="col-sm-8  col-xs-12 col-md-1">
										<a  href="javascript:;" class="btn btn-default" onclick="bm_bddelete(this)"><i class="fa fa-times"></i></a>
									</div>   
								</div>
								<?php  if($irow['zd_type']=='radio') { ?>
									<?php  $irow['radioitem'] = iunserializer($irow['radioitem']);?>
									<div class="radioItems">
										<?php  if(is_array($irow['radioitem'])) { foreach($irow['radioitem'] as $rirow) { ?> 
										<div class="col-sm-12 col-xs-12  col-md-12 radiosondiv">
											<label for="" class="control-label col-sm-1 col-xs-1  col-md-1"><span class="label label-success">子项</span></label>
											<div class="form-controls col-sm-6 col-xs-6 col-md-6">
												<input type="text" name="<?php  echo $irow['zd_name'];?>[]" class="form-control" value="<?php  echo $rirow;?>">
											</div>
											
											<div class="col-sm-2  col-xs-2 col-md-2">
													<a  href="javascript:;" class="btn btn-default" onclick="radio_delete(this)"><i class="fa fa-times"></i></a>
											</div>
										</div>
										<?php  } } ?>
										<a href="javascript:;" class="btn btn-success" style="margin-top:20px;" onclick="addRadioItem(this)"><i class="fa fa-plus"></i> 新增选项</a>
									</div>
								<?php  } ?>
							   </li>
							   <?php  } } ?>
						</ul>
						
					</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-sm-2">表单组件</label>
					<div class="col-sm-10 addItemType">	
						<?php  if(is_array($this->bmItemType(1,2))) { foreach($this->bmItemType(1,2) as $tkey => $trow) { ?>
						<?php  if($tkey=='input'  || $tkey=='radio' || $tkey=='mobile') { ?>
						<a href="javascript:;" class="btn btn-success" data-type="<?php  echo $tkey;?>"><i class="fa fa-plus"></i> <?php  echo $trow;?></a>
						<?php  } ?>
						<?php  } } ?>
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="control-label col-sm-2">是否开启强验证</label>
					<div class="form-controls col-sm-10 form-control-static">
						<input id="radio1-only" type="radio" name="must_only"  value="1"  <?php  if($bd_manage['must_only']==1) { ?>checked="checked"<?php  } ?> >
						<label for="radio1-only">是</label>
						<input id="radio1-only2" type="radio" name="must_only" value="0"  <?php  if($bd_manage['must_only']==0) { ?>checked="checked"<?php  } ?> >
						<label for="radio1-only2">否</label>
						<span class="help-block">开启强验证意义是:表单内添加了验证项、新增或者导入的验证数据均仅仅可验证一次</span>
					</div>
				</div>
				
				<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-10">
							<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
							<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
						</div>
				</div>
		</div>
	</div>
</div>
</form>
<!--type tpl---->
<div id="bditem_html" style="display: none">	
  <li class="list-group-item list-bd-items">
	<div class="form-group" style="margin-bottom:0">
		<input type="hidden"  name="zd_name[]" class="form-control"  readonly="">
		<div class="col-sm-9 col-xs-12  col-md-3">
			<input type="text" name="bd_name[]" class="form-control" value="" />
		</div>
		<div class="col-sm-9 col-xs-12  col-md-2">
			<input type="hidden"  name="zd_type[]" class="form-control"  readonly="">
			<span class="label label-success"></span>
		</div>
		<div class="col-sm-9 col-xs-12 col-md-2 bmshowtype" style="text-align:center">
			<input type="hidden" name="zd_show[]" value="2">
			<a   data-type="1"  class="btn btn-default js-btn-select">是</a>
			<a   data-type="2"  class="btn btn-default btn-success js-btn-select">否</a>
		</div>		
		<div class="col-sm-9 col-xs-12 col-md-2 bmyztype" style="text-align:center">
			<input type="hidden" name="zd_yz[]" value="2">
			<a   data-type="1"  class="btn btn-default js-btn-select">是</a>
			<a   data-type="2"  class="btn btn-default btn-success js-btn-select">否</a>
		</div>
		<div class="col-sm-9 col-xs-12 col-md-2 bmqdshowtype" style="text-align:center">
			<input type="hidden" name="qd_show[]" value="2">
			<a   data-type="1"  class="btn btn-default js-btn-select">是</a>
			<a   data-type="2"  class="btn btn-default btn-success js-btn-select">否</a>
		</div>
		<div class="col-sm-8  col-xs-12 col-md-1">
			<a  href="javascript:;" class="btn btn-default" onclick="bm_bddelete(this)"><i class="fa fa-times"></i></a>
		</div>   
	</div>
	
   </li>
</div>
<script>
$(function(){
	$(".addItemType a").on('click',function(){
		var lastli = $("#bmnormal_bdlists .list-bd-items:last-child");
		if(lastli.length>0){
			var fInput = lastli.find('input').eq(2);//表单类型
			var sInput = lastli.find('input').eq(1);//表单名称
			if(sInput.val()==''){
				layer.msg('最后一个表单项还未填写完整!');
				return;
			}else{
				console.log(fInput.val());
				if(fInput.val()=='radio'){
					var radioinputs = lastli.find('.radioItems input');
					if(radioinputs.length>0){
						var hadNone = false;
						$.each(radioinputs, function(i, val) {  
							if($(radioinputs[i]).val()==''){
								layer.msg('最后一个表单项单选框子项还未填写完整!');
								hadNone = true;
							}
						}); 
						if(hadNone){
							return;
						}
					}else{
						layer.msg('最后一个表单单选框子项还未添加!');
						return;
					}
				}
			}
		}
		var firstli = $("#bmnormal_bdlists .list-bd-items").eq(0);
		console.log(firstli.length);
		if(firstli.length>0){
			var fInput = firstli.find('input').eq(2);//表单类型
			var sInput = firstli.find('input').eq(1);//表单名称
			if(sInput.val()==''){
				layer.msg('第一个表单项还未填写完整!');
				return;
			}else{
				console.log(fInput.val());
				if(fInput.val()=='radio'){
					var radioinputs = firstli.find('.radioItems input');
					if(radioinputs.length>0){
						var hadNone = false;
						$.each(radioinputs, function(i, val) {  
							if($(radioinputs[i]).val()==''){
								layer.msg('第一个表单项单选框子项还未填写完整!');
								hadNone = true;
							}
						}); 
						if(hadNone){
							return;
						}
					}else{
						layer.msg('第一个表单单选框子项还未添加!');
						return;
					}
				}
			}
		}
		var $this = $(this);
		var type = $this.attr('data-type');
		var bd_name = '';
		var zd_name = '';
		var zd_typename = returnTypename(type);

		layer.confirm('当前新增的表单项放在最前还是最后?', {
		  btn: ['最后面','最前面'],
		   skin: 'addType-btn',
		}, function(index){
			layer.close(index);
			if(type=='mobile'){
				if($('#bmnormal_bdlists .itemMobile').length>0){
					layer.msg('手机号码表单项目已经存在、请勿重复添加');
					return;
				}
				bd_name = '手机号码';
				zd_name = 'mobile';
				$("#bditem_html li").addClass('itemMobile');
			}else{
				zd_name = 'bd_'+randomWord(6);
			}
			$("#bditem_html").find('input').eq(0).val(zd_name);
			$("#bditem_html").find('span').eq(0).text(zd_typename);
			$("#bditem_html").find('input').eq(2).val(type);
			//$("#bditem_html").find('input').eq(1).val(bd_name);
			if(type=='radio'){
				var radioItems = '<div class="radioItems"><a href="javascript:;" class="btn btn-success" style="margin-top:20px;" onclick="addRadioItem(this)"><i class="fa fa-plus"></i> 新增选项</a></div>';
				$("#bditem_html li").append(radioItems);
			}
			$('#bmnormal_bdlists').append($("#bditem_html").html());
			$("#bditem_html li").removeClass('itemMobile');
			$("#bditem_html .radioItems").remove();
			if(type=='mobile'){
				$("#bmnormal_bdlists li:last-child").find('input').eq(1).val(bd_name);
			}
		}, function(index){
			layer.close(index);
			if(type=='mobile'){
				if($('#bmnormal_bdlists .itemMobile').length>0){
					layer.msg('手机号码表单项目已经存在、请勿重复添加');
					return;
				}
				bd_name = '手机号码';
				zd_name = 'mobile';
				$("#bditem_html li").addClass('itemMobile');
			}else{
				zd_name = 'bd_'+randomWord(6);
			}
			$("#bditem_html").find('input').eq(0).val(zd_name);
			$("#bditem_html").find('span').eq(0).text(zd_typename);
			$("#bditem_html").find('input').eq(2).val(type);
			//$("#bditem_html").find('input').eq(1).val(bd_name);
			if(type=='radio'){
				var radioItems = '<div class="radioItems"><a href="javascript:;" class="btn btn-success" style="margin-top:20px;" onclick="addRadioItem(this)"><i class="fa fa-plus"></i> 新增选项</a></div>';
				$("#bditem_html li").append(radioItems);
			}
			if($("#bmnormal_bdlists .list-bd-items").length>0){
				$('#bmnormal_bdlists .list-bd-items').eq(0).before($("#bditem_html").html());
				$("#bditem_html li").removeClass('itemMobile');
				$("#bditem_html .radioItems").remove();
				if(type=='mobile'){
					$("#bmnormal_bdlists .list-bd-items").eq(0).find('input').eq(1).val(bd_name);
				}
			}else{
				$('#bmnormal_bdlists').append($("#bditem_html").html());
				$("#bditem_html li").removeClass('itemMobile');
				$("#bditem_html .radioItems").remove();
				if(type=='mobile'){
					$("#bmnormal_bdlists li:last-child").find('input').eq(1).val(bd_name);
				}
			}
		});
	})
	//点击表单是否显示
	$("#bmnormal_bdlists").on('click','.bmshowtype a',function(){
		var $this = $(this);
		$(this.parentNode).find('a').removeClass('btn-success');
		$(this.parentNode).find('input').val($this.attr('data-type'));
		$this.addClass('btn-success');
	})
	$("#bmnormal_bdlists").on('click','.bmyztype a',function(){
		var $this = $(this);
		if($(this.parentNode.parentNode.parentNode).find(".radioItems").length>0){
			layer.msg('单选表单项目不支持验证.');
			return false;
		}
		$(this.parentNode).find('a').removeClass('btn-success');
		var Yz = $this.attr('data-type');
		if(Yz=='1'){
			var bmqdshowtype = $(this.parentNode.parentNode).find(".bmqdshowtype");
			bmqdshowtype.find('input').val('2');
			bmqdshowtype.find('a').removeClass('btn-success');
			bmqdshowtype.find("a[data-type='2']").addClass('btn-success');
		}
		$(this.parentNode).find('input').val(Yz);
		$this.addClass('btn-success');
	})
	$("#bmnormal_bdlists").on('click','.bmqdshowtype a',function(){
		var $this = $(this);
		var Qdshow = $this.attr('data-type');
		if(Qdshow=='1'){
			var bmyztype = $(this.parentNode.parentNode).find(".bmyztype");
			bmyztype.find('input').val('2');
			bmyztype.find('a').removeClass('btn-success');
			bmyztype.find("a[data-type='2']").addClass('btn-success');
		}
		$(this.parentNode).find('a').removeClass('btn-success');
		$(this.parentNode).find('input').val($this.attr('data-type'));
		$this.addClass('btn-success');
	})
})
function addRadioItem(obj){
	var radioItems = $(obj.parentNode.parentNode);
	var radioSonname = radioItems.find('input').eq(0).val()+'[]';
	var html = '<div class="col-sm-12 col-xs-12  col-md-12 radiosondiv"><label for="" class="control-label col-sm-1 col-xs-1  col-md-1"><span class="label label-success">子项</span></label><div class="form-controls col-sm-6 col-xs-6 col-md-6"><input type="text" name="'+radioSonname+'" class="form-control" value=""></div><div class="col-sm-2  col-xs-2 col-md-2"><a  href="javascript:;" class="btn btn-default" onclick="radio_delete(this)"><i class="fa fa-times"></i></a></div></div></div>';
	$(obj).before(html);
}
function returnTypename(type){
	var typearr = new Array();
	typearr['mobile'] = '手机号码';
	typearr['input'] = '单行文本';
	typearr['number'] = '数字输入框';
	typearr['textarea'] = '多行文本';
	typearr['radio'] = '单选框';
	typearr['uploadimg'] = '上传图片';
	return typearr[type];
}
function bm_bddelete(obj){
	layer.confirm('确定要删除该表单项?', {
	  btn: ['确定','再想想'] //按钮
	}, function(index){
		layer.close(index);
		$(obj.parentNode.parentNode.parentNode).remove();
	}, function(index){
		layer.close(index);
	});
	
}
function radio_delete(obj){
	layer.confirm('确定要删除该单选子项?', {
	  btn: ['确定','再想想'] //按钮
	}, function(index){
		layer.close(index);
		$(obj.parentNode.parentNode).remove();
	}, function(index){
		layer.close(index);
	});
	
}
function randomWord(nums){
    var str = "",
		pos = '',
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    for(var i=0; i<nums; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<?php  } else if($oop=='shuqian_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">基础设置</div>	
	<div class="panel-body">				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕网页标题</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="title" placeholder="大屏幕网页标题" value="<?php  echo $shuqian_config['title'];?>">
						<span class="help-block"><span class="label label-success">大屏幕网页标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $shuqian_config['bg_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为1920*1080 jpg图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/pc_images/money_bg.jpg'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('bg_video', $shuqian_config['bg_video']);?>
						<span class="help-block">大屏幕背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕中间文字图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('shu_title_img', $shuqian_config['shu_title_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为1370*576 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/pc_images/shu-title.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕钱柱体顶面图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('shu_moneyhead', $shuqian_config['shu_moneyhead']);?>
						<span class="help-block">大屏幕背景图片 规格大小为106*22 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/pc_images/shu03.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕钱柱体腹部图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('shu_moneybody', $shuqian_config['shu_moneybody']);?>
						<span class="help-block">大屏幕背景图片 规格大小为106*2 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/pc_images/shu02.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕钱柱体底部图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('shu_moneyfoot', $shuqian_config['shu_moneyfoot']);?>
						<span class="help-block">大屏幕背景图片 规格大小为106*14 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/pc_images/shu01.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('djs_bg_img', $shuqian_config['djs_bg_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为500*392 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/pc_images/g_game_cd_bg.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕结束排名背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gameover_bg_img', $shuqian_config['gameover_bg_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为552*800 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/pc_images/g_game_over_bg.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕结束排名用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gameover_user_img', $shuqian_config['gameover_user_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为94*94 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/pc_images/gn_r4_c1.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<!--pc end-->
				<!--wechat start-->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端手指图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_hand_img', $shuqian_config['wechat_hand_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为247*218 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/images/hand.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端箭头图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_arrow_img', $shuqian_config['wechat_arrow_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为282*518 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/images/arrow.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端底部金币图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_gold_img', $shuqian_config['wechat_gold_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为720*144 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/images/gold.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端底部红包图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_mask_img', $shuqian_config['wechat_mask_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为648*392 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/images/mask.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端钱袋子图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_redbag_img', $shuqian_config['wechat_redbag_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为648*989 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/images/red_bag.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端钱图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_money_img', $shuqian_config['wechat_money_img']);?>
						<span class="help-block">大屏幕背景图片 规格大小为500*1000 png图片 <a href="<?php  echo $_W['siteroot'].'addons/meepo_xianchang/template/mobile/app/images/shuqian/images/money.png'?>" target="_blank" style="color:blue">素材地址</a></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">微信是否显示数钱数量</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="show_moneynums" value="1"  <?php  if($shuqian_config['show_moneynums'] == '1') { ?>checked="true"<?php  } ?>>是
						</label>
						<label class="radio-inline">
							<input type="radio" name="show_moneynums" value="2"   <?php  if($shuqian_config['show_moneynums'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">注:由于存在时间差有可能会不准、慎重显示</span>
					</div>
					
				</div>
				<!---wechat end -->
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间:</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="ready_time"  class="form-control" value="<?php  echo $shuqian_config['ready_time'];?>">
											<span class="input-group-addon">秒</span>
										</div>
									</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间:</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="game_time"  class="form-control" value="<?php  echo $shuqian_config['game_time'];?>">
											<span class="input-group-addon">秒</span>
										</div>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否准许重复中奖</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1"  <?php  if($shuqian_config['award_again'] == '1') { ?>checked="true"<?php  } ?>>是
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2"   <?php  if($shuqian_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖记录人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="maxsize"  class="form-control" value="<?php  echo $shuqian_config['maxsize'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block"><span class="label label-success">注:当轮数设置的中奖人数大于0、只会显示真实中奖人数</span></span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否开启获奖推送提示</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="1"  <?php  if($shuqian_config['send_tpl'] == '1') { ?>checked="true"<?php  } ?> onclick="open_tpl()">是
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="2"   <?php  if($shuqian_config['send_tpl'] == '2') { ?>checked="true"<?php  } ?> onclick="close_tpl()">否
						</label>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
</div>
<?php  } else if($oop=='lottory3d_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">
		3d抽奖设置<br><br>
		<span class="label label-success">注：通过点击键盘的空格键可以开始抽奖以及停止抽奖</span><br><br>
		<span class="label label-success">注：通过点击键盘的大于号以及小于号键可以切换奖项</span><br><br>
		<span class="label label-success">注：通过点击键盘的问号键可以清空当前奖项</span><br><br>
		<span class="label label-success">注：通过双击ENTER键可以唤起抽取人数选择、可通过上下键来选择合适的抽取人数</span><br><br>
		<span class="label label-success">注：鼠标移动到中奖用户可看到删除按钮 点击即可删除该中奖用户</span><br><br>
		<span class="label label-success">注：鼠标点击中奖用户可查看大图显示</span><br><br>
	</div>	
	<div class="panel-body">
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">奖池用户类型</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="lottory_type" value="0" <?php  if($lottory_3dconfig['lottory_type'] == '0') { ?>checked="true"<?php  } ?> >普通用户
						</label>
						<label class="radio-inline">
							<input type="radio" name="lottory_type" value="1"   <?php  if($lottory_3dconfig['lottory_type'] == '1') { ?>checked="true"<?php  } ?> >签到用户
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户显示类型</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="cj_showtype" value="1" <?php  if($lottory_3dconfig['cj_showtype'] == '1') { ?>checked="true"<?php  } ?> >一次显示一个
						</label>
						<label class="radio-inline">
							<input type="radio" name="cj_showtype" value="2"   <?php  if($lottory_3dconfig['cj_showtype'] == '2') { ?>checked="true"<?php  } ?> >选取多少就显示多少个
						</label>
						<span class="help-block">注：一次显示一个 释义: 选取10个 抽奖将一个一个循环显示出来 </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否开启中奖模板提示</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_mess" value="0" id="show_time_0" <?php  if($lottory_3dconfig['send_mess'] == '0') { ?>checked="true"<?php  } ?> onclick="show_def1()">否
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_mess" value="1" id="show_time_1"  <?php  if($lottory_3dconfig['send_mess'] == '1') { ?>checked="true"<?php  } ?> onclick="show_def2()">是
						</label>
						<span class="help-block">注：仅仅对认证服务号并且是已经关注的粉丝有效</span>
					</div>
					
				</div>
				<div class="form-group show_def" style="<?php  if($lottory_3dconfig['send_mess']==0) { ?>display:none<?php  } ?>">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">模板中奖提示内容</label>
					<div class="col-sm-9 ">
					<textarea style="height:200px;" class="form-control" name="def_mess" id="quit-tips" cols="70"><?php  echo $lottory_3dconfig['def_mess'];?></textarea>
					</div>
                </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">抽奖占位广告图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_multi_image('placeholder_imgs', $lottory_3dconfig['placeholder_imgs']);?>
						<span class="help-block">抽奖占位广告图 推荐尺寸200^200像素，50KB以下 【当参与粉丝数量较少时占位图】</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="title"  value="<?php  echo $lottory_3dconfig['title'];?>">
						<span class="help-block"><span class="label label-success">大屏标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('bg_video', $lottory_3dconfig['bg_video']);?>
						<span class="help-block">大屏背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是默认风格</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $lottory_3dconfig['bg_img']);?>
						<span class="help-block">大屏背景图片 1440*828px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏左侧框背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_box_bg', $lottory_3dconfig['left_box_bg']);?>
						<span class="help-block">大屏左侧框背景图片 666*866px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏右侧框背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_box_bg', $lottory_3dconfig['right_box_bg']);?>
						<span class="help-block">大屏右侧框背景图片 957*853px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">左侧框奖品背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('prize_bg', $lottory_3dconfig['prize_bg']);?>
						<span class="help-block">左侧框奖品背景图片 440*440px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">左侧框切换奖品按钮【左侧】</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('prev_btn', $lottory_3dconfig['prev_btn']);?>
						<span class="help-block">左侧框切换奖品按钮【左侧】 66*69px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">左侧框切换奖品按钮【右侧】</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('next_btn', $lottory_3dconfig['next_btn']);?>
						<span class="help-block">左侧框切换奖品按钮【右侧】 66*69px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">开始抽奖按钮</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('start_btn', $lottory_3dconfig['start_btn']);?>
						<span class="help-block">开始抽奖按钮 327*85px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">停止抽奖按钮</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('stop_btn', $lottory_3dconfig['stop_btn']);?>
						<span class="help-block">停止抽奖按钮 327*85px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">右侧框中奖用户头像背景</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('luckuser_bg', $lottory_3dconfig['luckuser_bg']);?>
						<span class="help-block">右侧框中奖用户头像背景 300*300px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">中奖用户删除按钮</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('del_btn', $lottory_3dconfig['del_btn']);?>
						<span class="help-block">中奖用户删除按钮 38*38px</span>
					</div>
				</div>
				<!--pop tips--->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">中奖提示框顶背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pop_user_lightbg', $lottory_3dconfig['pop_user_lightbg']);?>
						<span class="help-block">右侧框用户头像背景 512*512px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">中奖提示框顶部皇冠</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pop_user_topbg', $lottory_3dconfig['pop_user_topbg']);?>
						<span class="help-block">右侧框用户头像背景 300*300px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">中奖提示底部图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pop_user_bottombg', $lottory_3dconfig['pop_user_bottombg']);?>
						<span class="help-block">右侧框用户头像背景 152*96px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">单个用户中奖提示礼花图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pop_user_firebg', $lottory_3dconfig['pop_user_firebg']);?>
						<span class="help-block">单个用户中奖提示礼花图片 659*349px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">多个用户中奖提示礼花图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('lottory_total_img', $lottory_3dconfig['lottory_total_img']);?>
						<span class="help-block">多个用户中奖提示礼花图片 1920*1078px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">抽奖进行中背景音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('lottory_music',$lottory_3dconfig['lottory_music'])?>
						<span class="help-block"><span class="label label-success">请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">中奖提示背景音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('lottory_overmusic',$lottory_3dconfig['lottory_overmusic'])?>
						<span class="help-block"><span class="label label-success">请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>

	</div>
</div>
</form>
<script>
function show_def1(){
	$(".show_def").hide();
}
function show_def2(){
	$(".show_def").show();
}
</script>
<?php  } else if($oop=='yyy3d_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-body">
			<div class="panel panel-default">
			<div class="panel-heading">大屏设置 <span class="label label-success">注:可通过点击键盘空格键快速开始游戏</span></div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="pc_title"  value="<?php  echo $yyy3d_config['pc_title'];?>">
						<span class="help-block"><span class="label label-success">大屏标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $yyy3d_config['bg_img']);?>
						<span class="help-block">大屏背景图片 规格大小为1440*828 jpg图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景音乐</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$yyy3d_config['bg_music'])?>
						<span class="help-block"><span class="label label-success"> 不填写将不播放键盘 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group leaf_style">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏角色风格选择</span></label>
					<div class="col-sm-9">
						<select name="style" class='form-control'>
							 <?php  if(is_array($sys_yyy3d_style)) { foreach($sys_yyy3d_style as $key => $row) { ?>
							 <?php  if($row['style_show']==1) { ?>
							 <option   value="<?php  echo $key?>"  <?php  if($yyy3d_config['style']==$key) { ?>selected<?php  } ?>><?php  echo $row['style_name'];?></option>
							 <?php  } ?>
							 <?php  } } ?>
						</select>
						<span class="help-block">请选择任意一项</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏每轮显示最终结果人数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxsize"  class="form-control" value="<?php  echo $yyy3d_config['maxsize'];?>">
							<span class="input-group-addon">人</span>
						</div>
						<span class="help-block"><span class="label label-success">大屏每轮显示最终结果人数</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="ready_time"  class="form-control" value="<?php  echo $yyy3d_config['ready_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">预备时间</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="game_time"  class="form-control" value="<?php  echo $yyy3d_config['game_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏时间</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏最大点数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxpoint"  class="form-control" value="<?php  echo $yyy3d_config['maxpoint'];?>">
							<span class="input-group-addon">点</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏最大点数 注:根据游戏时间酌情设置此项</span></span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $yyy3d_config['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏顶部文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="top_words" class="form-control" value="<?php  echo $yyy3d_config['top_words'];?>" />
						<span class="help-block">大屏顶部文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏未开始右侧图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_center_img', $yyy3d_config['right_center_img']);?>
						<span class="help-block">大屏未开始右侧图片 规格大小为437*353 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开始按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_start_btn', $yyy3d_config['right_start_btn']);?>
						<span class="help-block">大屏开始按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏扫码提示文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="left_words" class="form-control" value="<?php  echo $yyy3d_config['left_words'];?>" />
						<span class="help-block">大屏扫码提示文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_qr', $yyy3d_config['left_qr']);?>
						<span class="help-block">大屏二维码 规格大小为200*200 jpg或者png图片 注:此处不设置默认显示直接参与二维码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_userimg', $yyy3d_config['left_userimg']);?>
						<span class="help-block">大屏用户默认图片 规格大小为48*48 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gaming_topbg', $yyy3d_config['gaming_topbg']);?>
						<span class="help-block">大屏倒计时背景图片 规格大小为598*87 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_bg', $yyy3d_config['rank_bg']);?>
						<span class="help-block">大屏排行榜背景图片 规格大小为1024*577 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜4-10名边界颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('rank_othercolor',$yyy3d_config['rank_othercolor']);?>
					<span class="help-block">大屏排行榜4-10名边界颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">排行榜默认用户名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="rank_default_name" class="form-control" value="<?php  echo $yyy3d_config['rank_default_name'];?>" />
						<span class="help-block">排行榜默认用户名称 注:名称需简练</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏下一轮按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_next', $yyy3d_config['rank_next']);?>
						<span class="help-block">大屏下一轮按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开重玩按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_reset', $yyy3d_config['rank_reset']);?>
						<span class="help-block">大屏开重玩按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏欢迎页背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('welcome_bgcolor',$yyy3d_config['welcome_bgcolor']);?>
					<span class="help-block">注:此项设置在未开始背景色以及排行榜背景色均会生效</span>
					</div>
				</div>
			</div>
			</div>
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否推送</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="1" <?php  if($yyy3d_config['send_tpl'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="2" <?php  if($yyy3d_config['send_tpl'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">注：仅仅对认证服务号并且是已经关注的粉丝有效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否准许再次参与</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" <?php  if($yyy3d_config['award_again'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" <?php  if($yyy3d_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">中奖用户是否准许再次参与</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $yyy3d_config['wechat_title'];?>" />
						<span class="help-block">微信标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信文字颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('wechat_maincolor',$yyy3d_config['wechat_maincolor']);?>
					<span class="help-block">微信文字颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信背景颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('wechat_bgcolor',$yyy3d_config['wechat_bgcolor']);?>
					<span class="help-block">微信文字颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信顶部文字描述</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_top_word" class="form-control" value="<?php  echo $yyy3d_config['wechat_top_word'];?>" />
						<span class="help-block">微信顶部文字描述</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信未开始图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_start_bg', $yyy3d_config['wechat_start_bg']);?>
						<span class="help-block">微信未开始图片 规格大小为580*424 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信未开始底部引导图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_startimg', $yyy3d_config['wechat_startimg']);?>
						<span class="help-block">微信未开始底部引导图片 规格大小为333*52 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏中手型图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_handimg', $yyy3d_config['wechat_handimg']);?>
						<span class="help-block">微信游戏中手型图片 规格大小为220*220 gif图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏中手型外圈图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_huanimg', $yyy3d_config['wechat_huanimg']);?>
						<span class="help-block">微信游戏中手型图片 规格大小为410*410 gif图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏中底部引导图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_gamingimg', $yyy3d_config['wechat_gamingimg']);?>
						<span class="help-block">微信游戏中手型图片 规格大小为393*52 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏摇动音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('wechat_shake_music',$yyy3d_config['wechat_shake_music'])?>
						<span class="help-block"><span class="label label-success"> 微信游戏摇动音效 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏结束图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_endimg', $yyy3d_config['wechat_endimg']);?>
						<span class="help-block">微信游戏结束图片 规格大小为580*424 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信底部版权</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_copyright" class="form-control" value="<?php  echo $yyy3d_config['wechat_copyright'];?>" />
						<span class="help-block">微信底部版权 此项留空将不显示版权</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
			</div>
	</div>
</div>
</form>
<?php  } else if($oop=='yyy3d_style') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">3d摇一摇大屏角色风格设置</div>	
	<div class="panel-body">
		<ul  id="style_lists">
								<?php  if(is_array($yyy3d_style)) { foreach($yyy3d_style as $key => $row) { ?>
								<li class="list-group-item" id="yyy_style_<?php  echo $key;?>">
									<input type="hidden" name="styleid[]" value="<?php  echo $row['styleid'];?>" />
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示状态</label>
										<div class="col-sm-9">
												<input type="hidden" name="style_show[]" value="<?php  if(!empty($row['style_show'])) { ?><?php  echo $row['style_show'];?><?php  } else { ?>1<?php  } ?>" class="style_show" />
												<a class="btn btn-default <?php  if(empty($row['style_show'])||$row['style_show']==1) { ?>btn-success<?php  } ?> js-btn-select" data-id="1">显示</a>
												<a class="btn btn-default <?php  if($row['style_show']==2) { ?>btn-success<?php  } ?> js-btn-select" data-id="2">隐藏</a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">风格名称</label>
										<div class="col-sm-9">
											<input type="text"  class="form-control" name="style_name[]"  value="<?php  echo $row['style_name'];?>" />
											<span class="help-block"><span class="label label-success">风格名称</span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部背景图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg[]', $row['topbg']);?>
											<span class="help-block">顶部背景图片 1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部栏杆背景图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('langan[]', $row['langan']);?>
											<span class="help-block">顶部栏杆背景图片 1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道背景图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('guidao[]', $row['guidao']);?>
											<span class="help-block">跑道背景图 1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道终点横线</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('endline[]', $row['endline']);?>
											<span class="help-block">跑道终点横线 15*100px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道1人物图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user1_img[]', $row['user1_img']);?>
											<span class="help-block">跑道1人物图片 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道2人物图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user2_img[]', $row['user2_img']);?>
											<span class="help-block">跑道2人物图片 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道3人物图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user3_img[]', $row['user3_img']);?>
											<span class="help-block">跑道3人物图片 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道4人物图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user4_img[]', $row['user4_img']);?>
											<span class="help-block">跑道4人物图片 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道5人物图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user5_img[]', $row['user5_img']);?>
											<span class="help-block">跑道5人物图片 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道6人物图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user6_img[]', $row['user6_img']);?>
											<span class="help-block">跑道6人物图片 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道7人物图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user7_img[]', $row['user7_img']);?>
											<span class="help-block">跑道7人物图片 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道8人物图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user8_img[]', $row['user8_img']);?>
											<span class="help-block">跑道8人物图片 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道9人物图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user9_img[]', $row['user9_img']);?>
											<span class="help-block">跑道9人物图片 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道10人物图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user10_img[]', $row['user10_img']);?>
											<span class="help-block">跑道10人物图片 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">轮子1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_lunzi1[]', $row['user_lunzi1']);?>
											<span class="help-block">轮子1 65*65px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">轮子2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_lunzi2[]', $row['user_lunzi2']);?>
											<span class="help-block">轮子2 65*65px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]',$row['game_music'])?>
											<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
									<div class="form-group">
											<div class="col-sm-8  col-xs-12 col-md-1" >
												<a href="javascript:;" class="btn btn-danger js_del" data-id="<?php  echo $key;?>">删除</a>
											</div>
									</div>
								</li>
								<?php  } } ?>
							</ul>
		<div class="form-group" style="text-align:Center;margin-top:20px;">
			<div class="col-sm-12">
				<a href="javascript:;" class="btn btn-success" id="addStyle"><b>+</b>添加大屏角色风格</a>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<script>
$(function(){
	$('#addStyle').on('click',function(){
		var index = randomWord(false,10).toLowerCase();
		var style= $(".style_Box").html();
		var html = '<li class="list-group-item" id="yyy_style_'+index+'">';
			html += '<input type="hidden" name="styleid[]" value="'+index+'" />';
			html += style;
			html += '<div class="form-group"><div class="col-sm-8  col-xs-12 col-md-1" ><a href="javascript:;" class="btn btn-danger js_del" data-id="'+index+'">删除</a></div></div>';
			html += '</li>';
		$("#style_lists").append(html);
	});
	$('body').on('click','.js_del',function(){
		var index = $(this).attr('data-id');
		$("#yyy_style_"+index).remove();
	});
	$('body').on('click','.js-btn-select',function(){
		var val = $(this).attr('data-id');
		$(this).parent().find('input').val(val);
		$(this).parent().find('a').removeClass('btn-success');
		$(this).addClass('btn-success');
	});
});
function randomWord(randomFlag, min, max){
    var str = "",
        range = min,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
 
    // 随机产生
    if(randomFlag){
        range = Math.round(Math.random() * (max-min)) + min;
    }
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<div class="style_Box" style="display:none">
	<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">显示状态</span></label>
			<div class="col-sm-9">
					<input type="hidden" name="style_show[]" value="1" class="style_show">
					<a class="btn btn-default btn-success js-btn-select" data-id="1">显示</a>
					<a class="btn btn-default js-btn-select" data-id="2">隐藏</a>
			</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">风格名称</span></label>
		<div class="col-sm-9">
			<input type="text"  class="form-control" name="style_name[]"  >
			<span class="help-block"><span class="label label-success">风格名称</span></span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部背景图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('topbg[]','');?>
			<span class="help-block">顶部背景图片 1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部栏杆背景图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('langan[]','');?>
			<span class="help-block">顶部栏杆背景图片 1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道背景图</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('guidao[]','');?>
			<span class="help-block">跑道背景图 1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道终点横线</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('endline[]','');?>
			<span class="help-block">跑道终点横线 15*100px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道1人物图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user1_img[]','');?>
			<span class="help-block">跑道1人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道2人物图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user2_img[]','');?>
			<span class="help-block">跑道2人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道3人物图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user3_img[]','');?>
			<span class="help-block">跑道3人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道4人物图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user4_img[]','');?>
			<span class="help-block">跑道4人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道5人物图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user5_img[]','');?>
			<span class="help-block">跑道5人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道6人物图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user6_img[]', '');?>
			<span class="help-block">跑道6人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道7人物图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user7_img[]','');?>
			<span class="help-block">跑道7人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道8人物图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user8_img[]','');?>
			<span class="help-block">跑道8人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道9人物图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user9_img[]','');?>
			<span class="help-block">跑道9人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道10人物图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user10_img[]', '');?>
			<span class="help-block">跑道10人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物轮子1</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user_lunzi1[]', '');?>
			<span class="help-block">跑道10人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道人物轮子2</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('user_lunzi2[]', '');?>
			<span class="help-block">跑道10人物图片 300*300px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_audio('game_music[]','')?>
			<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
		</div>
	</div>
</div>
<?php  } else if($oop=='tug_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-body">
			<div class="panel panel-default">
			<div class="panel-heading">大屏设置 <br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">空格键</font> 可快速开始游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">小于号键</font> 可以重玩本轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">大于号键</font> 可以进入下一轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">问号键</font> 可以直接结束当前轮游戏【仅大屏还未开始才有效】</span><br><br>
			</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="pc_title"  value="<?php  echo $tug_config['pc_title'];?>">
						<span class="help-block"><span class="label label-success">大屏标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $tug_config['bg_img']);?>
						<span class="help-block">大屏背景图片 规格大小为1080*1920px jpg图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景音乐</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$tug_config['bg_music'])?>
						<span class="help-block"><span class="label label-success"> 不填写将不播放键盘 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏拔河结束每轮显示获奖队伍最终结果人数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxsize"  class="form-control" value="<?php  echo $tug_config['maxsize'];?>">
							<span class="input-group-addon">人</span>
						</div>
						<span class="help-block"><span class="label label-success">大屏拔河结束每轮显示获奖队伍最终结果人数</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="ready_time"  class="form-control" value="<?php  echo $tug_config['ready_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">预备时间 默认30秒</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="game_time"  class="form-control" value="<?php  echo $tug_config['game_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏时间</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">队伍分数差值</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="tug_max_score"  class="form-control" value="<?php  echo $tug_config['tug_max_score'];?>">
							<span class="input-group-addon">分</span>
						</div>
						<span class="help-block"><span class="label label-success">队伍分数差值、2队伍直接的分数差值达到此值即为游戏结束</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏最大点数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxpoint"  class="form-control" value="<?php  echo $tug_config['maxpoint'];?>">
							<span class="input-group-addon">点</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏最大点数 注:当队伍分数差值 此值必须大、根据游戏时间酌情设置此项</span></span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $tug_config['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:拔河摇一摇存贮人数至少是获奖人数的3倍、人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏扫码提示文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="left_words" class="form-control" value="<?php  echo $tug_config['left_words'];?>" />
						<span class="help-block">大屏扫码提示文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_qr', $tug_config['left_qr']);?>
						<span class="help-block">大屏二维码 规格大小为250*250px jpg或者png图片 注:此处不设置默认显示直接参与二维码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开启倒计时按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_start_btn', $tug_config['left_start_btn']);?>
						<span class="help-block">大屏开启倒计时按钮图片 规格大小为218*93 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_userimg', $tug_config['right_userimg']);?>
						<span class="help-block">大屏用户默认图片 规格大小为48*48 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">默认用户名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="default_name" class="form-control" value="<?php  echo $tug_config['default_name'];?>" />
						<span class="help-block">默认用户名称 注:名称需简练</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏拔河跑道图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_bg', $tug_config['tug_bg']);?>
						<span class="help-block">大屏拔河跑道图片 规格大小为1620*750 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户准备开始背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_ready_img', $tug_config['tug_ready_img']);?>
						<span class="help-block">大屏用户准备开始背景图片 规格大小为1620*382px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gaming_topbg', $tug_config['gaming_topbg']);?>
						<span class="help-block">大屏倒计时背景图片 规格大小为890*77px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏拔河动作图片1</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_actions1', $tug_config['tug_actions1']);?>
						<span class="help-block">大屏用户准备开始背景图片 规格大小为2000*429px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏拔河动作图片2</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_actions2', $tug_config['tug_actions2']);?>
						<span class="help-block">大屏用户准备开始背景图片 规格大小为2000*429px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏红队获胜图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_red_win', $tug_config['tug_red_win']);?>
						<span class="help-block">大屏用户准备开始背景图片 规格大小为1620*463px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏黄队获胜图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_yellow_win', $tug_config['tug_yellow_win']);?>
						<span class="help-block">大屏用户准备开始背景图片 规格大小为1620*463px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏红队反超黄队图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_red_up', $tug_config['tug_red_up']);?>
						<span class="help-block">大屏用户准备开始背景图片 规格大小为882*882px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏黄队反超红队图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_yellow_up', $tug_config['tug_yellow_up']);?>
						<span class="help-block">大屏用户准备开始背景图片 规格大小为882*882px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏获胜用户背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_winner_bg', $tug_config['tug_winner_bg']);?>
						<span class="help-block">大屏获胜用户背景图片 规格大小为1620*750px png图片</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏下一轮按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_next_img', $tug_config['tug_next_img']);?>
						<span class="help-block">大屏下一轮按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏确认按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_queren_img', $tug_config['tug_queren_img']);?>
						<span class="help-block">大屏开重玩按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏获奖名单按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('tug_award_img', $tug_config['tug_award_img']);?>
						<span class="help-block">大屏获奖名单按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">主要背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('welcome_bgcolor',$tug_config['welcome_bgcolor']);?>
					<span class="help-block">注:此项设置在未开始背景色以及大屏排行榜背景色、微信以及大屏倒计时背景均会生效</span>
					</div>
				</div>
			</div>
			</div>
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否推送</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="1" <?php  if($tug_config['send_tpl'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="2" <?php  if($tug_config['send_tpl'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">注：仅仅对认证服务号并且是已经关注的粉丝有效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否准许再次参与</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" <?php  if($tug_config['award_again'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" <?php  if($tug_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">中奖用户是否准许再次参与</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $tug_config['wechat_title'];?>" />
						<span class="help-block">微信标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信红队图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_red_img', $tug_config['wechat_red_img']);?>
						<span class="help-block">微信游戏logo图片 规格大小为389*720px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信红队被选中图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_redselected_img', $tug_config['wechat_redselected_img']);?>
						<span class="help-block">微信游戏logo图片 规格大小为389*720px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信红队不可选图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_reddisabled_img', $tug_config['wechat_reddisabled_img']);?>
						<span class="help-block">微信游戏logo图片 规格大小为389*720px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信黄队图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_yellow_img', $tug_config['wechat_yellow_img']);?>
						<span class="help-block">微信游戏logo图片 规格大小为389*720px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信黄队被选中图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_yellowselected_img', $tug_config['wechat_yellowselected_img']);?>
						<span class="help-block">微信游戏logo图片 规格大小为389*720px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信黄队不可选图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_yellowdisabled_img', $tug_config['wechat_yellowdisabled_img']);?>
						<span class="help-block">微信游戏logo图片 规格大小为389*720px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏logo图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_swimming_logo', $tug_config['wechat_swimming_logo']);?>
						<span class="help-block">微信游戏logo图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bg', $tug_config['wechat_bg']);?>
						<span class="help-block">微信游戏背景图片 规格大小为640*1488px png图片</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏摇动音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('wechat_shake_music',$tug_config['wechat_shake_music'])?>
						<span class="help-block"><span class="label label-success"> 微信游戏摇动音效 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信底部版权</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_copyright" class="form-control" value="<?php  echo $tug_config['wechat_copyright'];?>" />
						<span class="help-block">微信底部版权 此项留空将不显示版权</span>
					</div>
				</div>
				
			</div>
			</div>
	</div>
</div>
<style>
.yyy_rotates li{position:relative}
.del_rotate {
    width: 20px;
    display: inline-block;
    position: absolute;
    top: -10px;
    left: 10px;
    z-index: 2;
    height: 20px;
    font-size: 20px;
	color:red
}
</style>
<div class="panel panel-default">
	<div class="panel-heading">
		拔河默认轮数设置<br><br>
		<span class="label label-danger">
			注意:设置此处后，新增活动将直接同步此处的轮数到拔河
		</span><br><br>
		<div class="btn-group"><a class="btn btn-danger" href="javascript:;" onclick="reset_rotate()" ><i class="fa fa-times"></i> 删除全部轮数</a></div><br><br>
		<span class="label label-danger">
			注意:不论是新增还是删除轮数都需要点击提交
		</span>
	</div>	
	<!--pnum awardNums-->
	<div class="panel-body">
	<div class="form-group">
	<ul class="yyy_rotates">
		<?php  if(is_array($sys_tug_rotates)) { foreach($sys_tug_rotates as $v) { ?>
		<li>
			<div class="form-group">
				<span class="del_rotate" onclick="delete_item(this)"><i class="fa fa-times-circle"></i></span>
				<div class="col-sm-12  col-xs-12 col-md-12">
					<div class="input-group">
						<div class="input-group-addon">队伍1名称</div>
						<input type="text" class="form-control" name="tug_Rname[]" value="<?php  echo $v['tug_Rname'];?>">
						<div class="input-group-addon" style="border-left:0">队伍1最多人数</div>
						<input type="text" class="form-control" name="tug_Rmax[]" value="<?php  echo $v['tug_Rmax'];?>">
						<div class="input-group-addon">队伍2名称</div>
						<input type="text" class="form-control" name="tug_Yname[]" value="<?php  echo $v['tug_Yname'];?>">
						<div class="input-group-addon" style="border-left:0">队伍2最多人数</div>
					
					</div>
					<div class="input-group">
						<input type="text" class="form-control" name="tug_Ymax[]" value="<?php  echo $v['tug_Ymax'];?>">
						<div class="input-group-addon">获胜一方中奖人数:</div>
						<input type="text" class="form-control" name="tug_pnum[]" value="<?php  echo $v['pnum'];?>">
						<div class="input-group-addon" style="border-left:0">人、奖项名称</div>
						<input type="text" class="form-control" name="tug_prize_name[]" value="<?php  echo $v['prize_name'];?>">
						<div class="input-group-addon" >、奖品名称</div>
						<input type="text" class="form-control" name="tug_award_name[]" value="<?php  echo $v['award_name'];?>">
						<div class="input-group-addon" >、领奖地址</div>
						<input type="text" class="form-control" name="tug_get_award_address[]" value="<?php  echo $v['get_award_address'];?>">
					</div>
				</div>
			</div>
		</li>
		<?php  } } ?>
	</div>
	<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">&nbsp;</label>
					<div class="col-sm-9">
                	<a href="javascript:;" class="btn btn-success" id="add_yyyrotate"><b>+</b>添加轮数</a>
					</div>
    </div>
	</ul>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<div class="yyyrotate" style="display:none">
			<div class="form-group">
				<span class="del_rotate" onclick="delete_item(this)"><i class="fa fa-times-circle"></i></span>
				<div class="col-sm-12  col-xs-12 col-md-12">
					<div class="input-group">
						<div class="input-group-addon">队伍1名称</div>
						<input type="text" class="form-control" name="tug_Rname[]" >
						<div class="input-group-addon" style="border-left:0">队伍1最多人数</div>
						<input type="text" class="form-control" name="tug_Rmax[]" >
						<div class="input-group-addon">队伍2名称</div>
						<input type="text" class="form-control" name="tug_Yname[]" >
						<div class="input-group-addon" style="border-left:0">队伍2最多人数</div>
						<input type="text" class="form-control" name="tug_Ymax[]" >
					</div>
					<div class="input-group">
					
						<div class="input-group-addon">获胜一方中奖人数:</div>
						<input type="text" class="form-control" name="tug_pnum[]" >
						<div class="input-group-addon" style="border-left:0">人、奖项名称</div>
						<input type="text" class="form-control" name="tug_prize_name[]" >
						<div class="input-group-addon" >、奖品名称</div>
						<input type="text" class="form-control" name="tug_award_name[]" >
						<div class="input-group-addon" >、领奖地址</div>
						<input type="text" class="form-control" name="tug_get_award_address[]" >
					</div>
				</div>
			</div>
</div>
<script>
	$(function(){
		$("#add_yyyrotate").on('click',function(){
			var html = "<li>";
				html += $(".yyyrotate").html();
				html += "</li>";
				
			$(".yyy_rotates").append(html);
		});
	})
	function delete_item(obj){
		$(obj.parentNode.parentNode).remove();
	}
	function reset_rotate(){
		if(confirm('清空后、数据将无法恢复，确认吗？')){
			$(".yyy_rotates").empty();
		}
	}
	function hide_send_mess(){
		$(".send_mess_on").hide();
	}
	function show_send_mess(){
		$(".send_mess_on").show();
	}
</script>
</form>
<?php  } else if($oop=='swimming_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
	<div class="panel panel-default">
	<div class="panel-body">
			<div class="panel panel-default">
			<div class="panel-heading">大屏设置 <br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">空格键</font> 可快速开始游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">小于号键</font> 可以重玩本轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">大于号键</font> 可以进入下一轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">问号键</font> 可以直接结束当前轮游戏【仅大屏还未开始才有效】</span><br><br>
			</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="pc_title"  value="<?php  echo $swimming_config['pc_title'];?>">
						<span class="help-block"><span class="label label-success">大屏标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $swimming_config['bg_img']);?>
						<span class="help-block">大屏背景图片 规格大小为1080*1920px jpg图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景音乐</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$swimming_config['bg_music'])?>
						<span class="help-block"><span class="label label-success"> 不填写将不播放键盘 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group leaf_style">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏角色风格选择</span></label>
					<div class="col-sm-9">
						<select name="style" class='form-control'>
							 <?php  if(is_array($sys_swimming_style)) { foreach($sys_swimming_style as $key => $row) { ?>
							 <?php  if($row['style_show']==1) { ?>
							 <option   value="<?php  echo $key?>"  <?php  if($swimming_config['style']==$key) { ?>selected<?php  } ?>><?php  echo $row['style_name'];?></option>
							 <?php  } ?>
							 <?php  } } ?>
						</select>
						<span class="help-block">请选择任意一项</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">大屏每轮显示最终结果人数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxsize"  class="form-control" value="<?php  echo $swimming_config['maxsize'];?>">
							<span class="input-group-addon">人</span>
						</div>
						<span class="help-block"><span class="label label-success">大屏每轮显示最终结果人数</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="ready_time"  class="form-control" value="<?php  echo $swimming_config['ready_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">预备时间 默认30秒</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="game_time"  class="form-control" value="<?php  echo $swimming_config['game_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏时间</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏最大点数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxpoint"  class="form-control" value="<?php  echo $swimming_config['maxpoint'];?>">
							<span class="input-group-addon">点</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏最大点数 注:根据游戏时间酌情设置此项</span></span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $swimming_config['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏顶部文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="top_words" class="form-control" value="<?php  echo $swimming_config['top_words'];?>" />
						<span class="help-block">大屏顶部文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏未开始右侧图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_center_img', $swimming_config['right_center_img']);?>
						<span class="help-block">大屏未开始右侧图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开启倒计时按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_start_btn', $swimming_config['right_start_btn']);?>
						<span class="help-block">大屏开启倒计时按钮图片 规格大小为218*93 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏扫码提示文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="left_words" class="form-control" value="<?php  echo $swimming_config['left_words'];?>" />
						<span class="help-block">大屏扫码提示文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_qr', $swimming_config['left_qr']);?>
						<span class="help-block">大屏二维码 规格大小为250*250px jpg或者png图片 注:此处不设置默认显示直接参与二维码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_userimg', $swimming_config['left_userimg']);?>
						<span class="help-block">大屏用户默认图片 规格大小为48*48 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gaming_topbg', $swimming_config['gaming_topbg']);?>
						<span class="help-block">大屏倒计时背景图片 规格大小为890*77px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_bg', $swimming_config['rank_bg']);?>
						<span class="help-block">大屏排行榜背景图片 规格大小为1024*577 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜4-10名边界颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('rank_othercolor',$swimming_config['rank_othercolor']);?>
					<span class="help-block">大屏排行榜4-10名边界颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">排行榜默认用户名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="rank_default_name" class="form-control" value="<?php  echo $swimming_config['rank_default_name'];?>" />
						<span class="help-block">排行榜默认用户名称 注:名称需简练</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏下一轮按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_next', $swimming_config['rank_next']);?>
						<span class="help-block">大屏下一轮按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开重玩按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_reset', $swimming_config['rank_reset']);?>
						<span class="help-block">大屏开重玩按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">主要背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('welcome_bgcolor',$swimming_config['welcome_bgcolor']);?>
					<span class="help-block">注:此项设置在未开始背景色以及大屏排行榜背景色、微信以及大屏倒计时背景均会生效</span>
					</div>
				</div>
			</div>
			</div>
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否推送</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="1" <?php  if($swimming_config['send_tpl'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="2" <?php  if($swimming_config['send_tpl'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">注：仅仅对认证服务号并且是已经关注的粉丝有效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否准许再次参与</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" <?php  if($swimming_config['award_again'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" <?php  if($swimming_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">中奖用户是否准许再次参与</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $swimming_config['wechat_title'];?>" />
						<span class="help-block">微信标题</span>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏logo图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_swimming_logo', $swimming_config['wechat_swimming_logo']);?>
						<span class="help-block">微信游戏logo图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bg', $swimming_config['wechat_bg']);?>
						<span class="help-block">微信游戏背景图片 规格大小为640*1488px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏摇动音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('wechat_shake_music',$swimming_config['wechat_shake_music'])?>
						<span class="help-block"><span class="label label-success"> 微信游戏摇动音效 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信底部版权</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_copyright" class="form-control" value="<?php  echo $swimming_config['wechat_copyright'];?>" />
						<span class="help-block">微信底部版权 此项留空将不显示版权</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
			</div>
	</div>
</div>
</form>
<?php  } else if($oop=='swimming_style') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">3d游泳大屏角色风格设置</div>	
	<div class="panel-body">
		<ul  id="style_lists">
								<?php  if(is_array($swimming_style)) { foreach($swimming_style as $key => $row) { ?>

								<li class="list-group-item" id="swimming_style_<?php  echo $key;?>">
									<input type="hidden" name="styleid[]" value="<?php  echo $row['styleid'];?>" />
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示状态</label>
										<div class="col-sm-9">
												<input type="hidden" name="style_show[]" value="<?php  if(!empty($row['style_show'])) { ?><?php  echo $row['style_show'];?><?php  } else { ?>1<?php  } ?>" class="style_show" />
												<a class="btn btn-default <?php  if(empty($row['style_show'])||$row['style_show']==1) { ?>btn-success<?php  } ?> js-btn-select" data-id="1">显示</a>
												<a class="btn btn-default <?php  if($row['style_show']==2) { ?>btn-success<?php  } ?> js-btn-select" data-id="2">隐藏</a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">风格名称</label>
										<div class="col-sm-9">
											<input type="text"  class="form-control" name="style_name[]"  value="<?php  echo $row['style_name'];?>" />
											<span class="help-block"><span class="label label-success">风格名称</span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">泳池背景图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('track_bg[]', $row['track_bg']);?>
											<span class="help-block">泳池背景图片 规格大小为1080*1920px jpg图片</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游泳波浪图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('water_image_arr',$row['water_image_arr']);?>
											<span class="help-block">游泳波浪图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_0', $row['user_0']);?>
											<span class="help-block">游泳角色1动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_1', $row['user_1']);?>
											<span class="help-block">游泳角色2动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_2', $row['user_2']);?>
											<span class="help-block">游泳角色3动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_3', $row['user_3']);?>
											<span class="help-block">游泳角色4动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_4', $row['user_4']);?>
											<span class="help-block">游泳角色5动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_5', $row['user_5']);?>
											<span class="help-block">游泳角色6动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_6', $row['user_6']);?>
											<span class="help-block">游泳角色7动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_7', $row['user_7']);?>
											<span class="help-block">游泳角色8动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_8', $row['user_8']);?>
											<span class="help-block">游泳角色9动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_9', $row['user_9']);?>
											<span class="help-block">游泳角色10动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]',$row['game_music'])?>
											<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
									<div class="form-group">
											<div class="col-sm-8  col-xs-12 col-md-1" >
												<a href="javascript:;" class="btn btn-danger js_del" data-id="<?php  echo $key;?>">删除</a>
											</div>
									</div>
								</li>
								<?php  } } ?>
							</ul>
		<div class="form-group" style="text-align:Center;margin-top:20px;">
			<div class="col-sm-12">
				<a href="javascript:;" class="btn btn-success" id="addStyle"><b>+</b>添加大屏角色风格</a>
				<span class="help-block"><span class="label label-danger">着重说一句: 不论是游泳波浪图还是每个角色图必须是12个图，多了或是少了均会有问题 、设置的时候注意了！！！</span></span>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<script>
$(function(){
	$('#addStyle').on('click',function(){
		var index = randomWord(false,10).toLowerCase();
		var style= $(".style_Box").html();
		var html = '<li class="list-group-item" id="swimming_style_'+index+'">';
			html += '<input type="hidden" name="styleid[]" value="'+index+'" />';
			html += style;
			html += '<div class="form-group"><div class="col-sm-8  col-xs-12 col-md-1" ><a href="javascript:;" class="btn btn-danger js_del" data-id="'+index+'">删除</a></div></div>';
			html += '</li>';
		$("#style_lists").append(html);
	});
	$('body').on('click','.js_del',function(){
		var index = $(this).attr('data-id');
		$("#swimming_style_"+index).remove();
	});
	$('body').on('click','.js-btn-select',function(){
		var val = $(this).attr('data-id');
		$(this).parent().find('input').val(val);
		$(this).parent().find('a').removeClass('btn-success');
		$(this).addClass('btn-success');
	});
});
function randomWord(randomFlag, min, max){
    var str = "",
        range = min,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
 
    // 随机产生
    if(randomFlag){
        range = Math.round(Math.random() * (max-min)) + min;
    }
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<div class="style_Box" style="display:none">
	<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示状态</label>
										<div class="col-sm-9">
												<input type="hidden" name="style_show[]" value="1" class="style_show" />
												<a class="btn btn-default btn-success js-btn-select" data-id="1">显示</a>
												<a class="btn btn-default js-btn-select" data-id="2">隐藏</a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">风格名称</label>
										<div class="col-sm-9">
											<input type="text"  class="form-control" name="style_name[]"  value="" />
											<span class="help-block"><span class="label label-success">风格名称</span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">泳池背景图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('track_bg[]','');?>
											<span class="help-block">泳池背景图片 规格大小为1080*1920px jpg图片</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游泳波浪图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('water_image_arr',array());?>
											<span class="help-block">游泳波浪图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_0', array());?>
											<span class="help-block">游泳角色1动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_1',array());?>
											<span class="help-block">游泳角色2动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_2', array());?>
											<span class="help-block">游泳角色3动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_3', array());?>
											<span class="help-block">游泳角色4动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_4', array());?>
											<span class="help-block">游泳角色5动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_5', array());?>
											<span class="help-block">游泳角色6动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_6',array());?>
											<span class="help-block">游泳角色7动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_7',array());?>
											<span class="help-block">游泳角色8动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_8',array());?>
											<span class="help-block">游泳角色9动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_9',array());?>
											<span class="help-block">游泳角色10动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]','')?>
											<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
</div>
<?php  } else if($oop=='horse_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
	<div class="panel panel-default">
	<div class="panel-body">
			<div class="panel panel-default">
			<div class="panel-heading">大屏设置 <br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">空格键</font> 可快速开始游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">小于号键</font> 可以重玩本轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">大于号键</font> 可以进入下一轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">问号键</font> 可以直接结束当前轮游戏【仅大屏还未开始才有效】</span><br><br>
			</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="pc_title"  value="<?php  echo $horse_config['pc_title'];?>">
						<span class="help-block"><span class="label label-success">大屏标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $horse_config['bg_img']);?>
						<span class="help-block">大屏背景图片 规格大小为1080*1920px jpg图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景音乐</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$horse_config['bg_music'])?>
						<span class="help-block"><span class="label label-success"> 不填写将不播放键盘 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group leaf_style">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏角色风格选择</span></label>
					<div class="col-sm-9">
						<select name="style" class='form-control'>
							 <?php  if(is_array($sys_horse_style)) { foreach($sys_horse_style as $key => $row) { ?>
							 <?php  if($row['style_show']==1) { ?>
							 <option   value="<?php  echo $key?>"  <?php  if($horse_config['style']==$key) { ?>selected<?php  } ?>><?php  echo $row['style_name'];?></option>
							 <?php  } ?>
							 <?php  } } ?>
						</select>
						<span class="help-block">请选择任意一项</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="ready_time"  class="form-control" value="<?php  echo $horse_config['ready_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">预备时间 默认30秒</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="game_time"  class="form-control" value="<?php  echo $horse_config['game_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏时间</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏最大点数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxpoint"  class="form-control" value="<?php  echo $horse_config['maxpoint'];?>">
							<span class="input-group-addon">点</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏最大点数 注:根据游戏时间酌情设置此项</span></span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $horse_config['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏顶部文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="top_words" class="form-control" value="<?php  echo $horse_config['top_words'];?>" />
						<span class="help-block">大屏顶部文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏未开始右侧图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_center_img', $horse_config['right_center_img']);?>
						<span class="help-block">大屏未开始右侧图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开启倒计时按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_start_btn', $horse_config['right_start_btn']);?>
						<span class="help-block">大屏开启倒计时按钮图片 规格大小为218*93 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏扫码提示文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="left_words" class="form-control" value="<?php  echo $horse_config['left_words'];?>" />
						<span class="help-block">大屏扫码提示文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_qr', $horse_config['left_qr']);?>
						<span class="help-block">大屏二维码 规格大小为250*250px jpg或者png图片 注:此处不设置默认显示直接参与二维码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_userimg', $horse_config['left_userimg']);?>
						<span class="help-block">大屏用户默认图片 规格大小为48*48 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gaming_topbg', $horse_config['gaming_topbg']);?>
						<span class="help-block">大屏倒计时背景图片 规格大小为890*77px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_bg', $horse_config['rank_bg']);?>
						<span class="help-block">大屏排行榜背景图片 规格大小为1024*577 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜4-10名边界颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('rank_othercolor',$horse_config['rank_othercolor']);?>
					<span class="help-block">大屏排行榜4-10名边界颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">排行榜默认用户名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="rank_default_name" class="form-control" value="<?php  echo $horse_config['rank_default_name'];?>" />
						<span class="help-block">排行榜默认用户名称 注:名称需简练</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏下一轮按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_next', $horse_config['rank_next']);?>
						<span class="help-block">大屏下一轮按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开重玩按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_reset', $horse_config['rank_reset']);?>
						<span class="help-block">大屏开重玩按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">主要背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('welcome_bgcolor',$horse_config['welcome_bgcolor']);?>
					<span class="help-block">注:此项设置在未开始背景色以及大屏排行榜背景色、微信以及大屏倒计时背景均会生效</span>
					</div>
				</div>
			</div>
			</div>
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否推送</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="1" <?php  if($horse_config['send_tpl'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="2" <?php  if($horse_config['send_tpl'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">注：仅仅对认证服务号并且是已经关注的粉丝有效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否准许再次参与</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" <?php  if($horse_config['award_again'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" <?php  if($horse_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">中奖用户是否准许再次参与</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $horse_config['wechat_title'];?>" />
						<span class="help-block">微信标题</span>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏logo图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_horse_logo', $horse_config['wechat_horse_logo']);?>
						<span class="help-block">微信游戏logo图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bg', $horse_config['wechat_bg']);?>
						<span class="help-block">微信游戏背景图片 规格大小为640*1488px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏摇动音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('wechat_shake_music',$horse_config['wechat_shake_music'])?>
						<span class="help-block"><span class="label label-success"> 微信游戏摇动音效 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信底部版权</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_copyright" class="form-control" value="<?php  echo $horse_config['wechat_copyright'];?>" />
						<span class="help-block">微信底部版权 此项留空将不显示版权</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
			</div>
	</div>
</div>
</form>
<?php  } else if($oop=='horse_style') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">骑马摇一摇大屏角色风格设置</div>	
	<div class="panel-body">
		<ul  id="style_lists">
								<?php  if(is_array($horse_style)) { foreach($horse_style as $key => $row) { ?>
								<li class="list-group-item" id="yyy_style_<?php  echo $key;?>">
									<input type="hidden" name="styleid[]" value="<?php  echo $row['styleid'];?>" />
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示状态</label>
										<div class="col-sm-9">
												<input type="hidden" name="style_show[]" value="<?php  if(!empty($row['style_show'])) { ?><?php  echo $row['style_show'];?><?php  } else { ?>1<?php  } ?>" class="style_show" />
												<a class="btn btn-default <?php  if(empty($row['style_show'])||$row['style_show']==1) { ?>btn-success<?php  } ?> js-btn-select" data-id="1">显示</a>
												<a class="btn btn-default <?php  if($row['style_show']==2) { ?>btn-success<?php  } ?> js-btn-select" data-id="2">隐藏</a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">风格名称</label>
										<div class="col-sm-9">
											<input type="text"  class="form-control" name="style_name[]"  value="<?php  echo $row['style_name'];?>" />
											<span class="help-block"><span class="label label-success">风格名称</span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部背景图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg[]', $row['topbg']);?>
											<span class="help-block">顶部背景图片 1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部栏杆背景图片</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('langan[]', $row['langan']);?>
											<span class="help-block">顶部栏杆背景图片 1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道背景图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('guidao[]', $row['guidao']);?>
											<span class="help-block">跑道背景图 1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道终点横线</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('endline[]', $row['endline']);?>
											<span class="help-block">跑道终点横线 15*100px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_0', $row['user_0']);?>
											<span class="help-block">游泳角色1动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_1', $row['user_1']);?>
											<span class="help-block">游泳角色2动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_2', $row['user_2']);?>
											<span class="help-block">游泳角色3动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_3', $row['user_3']);?>
											<span class="help-block">游泳角色4动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_4', $row['user_4']);?>
											<span class="help-block">游泳角色5动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_5', $row['user_5']);?>
											<span class="help-block">游泳角色6动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_6', $row['user_6']);?>
											<span class="help-block">游泳角色7动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_7', $row['user_7']);?>
											<span class="help-block">游泳角色8动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_8', $row['user_8']);?>
											<span class="help-block">游泳角色9动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_9', $row['user_9']);?>
											<span class="help-block">游泳角色10动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">马儿影子图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_lunzia[]',$row['user_lunzia']);?>
											<span class="help-block">马儿影子图 400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]',$row['game_music'])?>
											<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
									<div class="form-group">
											<div class="col-sm-8  col-xs-12 col-md-1" >
												<a href="javascript:;" class="btn btn-danger js_del" data-id="<?php  echo $key;?>">删除</a>
											</div>
									</div>
								</li>
								<?php  } } ?>
							</ul>
		<div class="form-group" style="text-align:Center;margin-top:20px;">
			<div class="col-sm-12">
				<a href="javascript:;" class="btn btn-success" id="addStyle"><b>+</b>添加大屏角色风格</a>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<script>
$(function(){
	$('#addStyle').on('click',function(){
		var index = randomWord(false,10).toLowerCase();
		var style= $(".style_Box").html();
		var html = '<li class="list-group-item" id="yyy_style_'+index+'">';
			html += '<input type="hidden" name="styleid[]" value="'+index+'" />';
			html += style;
			html += '<div class="form-group"><div class="col-sm-8  col-xs-12 col-md-1" ><a href="javascript:;" class="btn btn-danger js_del" data-id="'+index+'">删除</a></div></div>';
			html += '</li>';
		$("#style_lists").append(html);
	});
	$('body').on('click','.js_del',function(){
		var index = $(this).attr('data-id');
		$("#yyy_style_"+index).remove();
	});
	$('body').on('click','.js-btn-select',function(){
		var val = $(this).attr('data-id');
		$(this).parent().find('input').val(val);
		$(this).parent().find('a').removeClass('btn-success');
		$(this).addClass('btn-success');
	});
});
function randomWord(randomFlag, min, max){
    var str = "",
        range = min,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
 
    // 随机产生
    if(randomFlag){
        range = Math.round(Math.random() * (max-min)) + min;
    }
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<div class="style_Box" style="display:none">
	<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">显示状态</span></label>
			<div class="col-sm-9">
					<input type="hidden" name="style_show[]" value="1" class="style_show">
					<a class="btn btn-default btn-success js-btn-select" data-id="1">显示</a>
					<a class="btn btn-default js-btn-select" data-id="2">隐藏</a>
			</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">风格名称</span></label>
		<div class="col-sm-9">
			<input type="text"  class="form-control" name="style_name[]"  >
			<span class="help-block"><span class="label label-success">风格名称</span></span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部背景图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('topbg[]','');?>
			<span class="help-block">顶部背景图片 1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部栏杆背景图片</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('langan[]','');?>
			<span class="help-block">顶部栏杆背景图片 1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道背景图</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('guidao[]','');?>
			<span class="help-block">跑道背景图 1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">跑道终点横线</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('endline[]','');?>
			<span class="help-block">跑道终点横线 15*100px</span>
		</div>
	</div>
	<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_0', array());?>
											<span class="help-block">游泳角色1动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_1',array());?>
											<span class="help-block">游泳角色2动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_2', array());?>
											<span class="help-block">游泳角色3动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_3', array());?>
											<span class="help-block">游泳角色4动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_4', array());?>
											<span class="help-block">游泳角色5动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_5', array());?>
											<span class="help-block">游泳角色6动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_6',array());?>
											<span class="help-block">游泳角色7动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_7',array());?>
											<span class="help-block">游泳角色8动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_8',array());?>
											<span class="help-block">游泳角色9动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_9',array());?>
											<span class="help-block">游泳角色10动作图、共计12张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">马儿影子图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_lunzia[]', '');?>
											<span class="help-block">马儿影子图 400*400px</span>
										</div>
									</div>
									
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_audio('game_music[]','')?>
			<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
		</div>
	</div>
</div>
<?php  } else if($oop=='boat_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-body">
			<div class="panel panel-default">
				<div class="panel-heading">大屏设置 <br><br>
					<span class="label label-success">注:可通过点击键盘 <font color="black">空格键</font> 可快速开始游戏</span><br><br>
					<span class="label label-success">注:可通过点击键盘 <font color="black">小于号键</font> 可以重玩本轮游戏</span><br><br>
					<span class="label label-success">注:可通过点击键盘 <font color="black">大于号键</font> 可以进入下一轮游戏</span><br><br>
					<span class="label label-success">注:可通过点击键盘 <font color="black">问号键</font> 可以直接结束当前轮游戏【仅大屏还未开始才有效】</span><br><br>
				</div>					
				<div class="panel-body">
					<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="pc_title"  value="<?php  echo $boat_config['pc_title'];?>">
						<span class="help-block"><span class="label label-success">大屏标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $boat_config['bg_img']);?>
						<span class="help-block">大屏背景图片 规格大小为1600*900px jpg图片 注:此图仅未登录时才显示</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景音乐</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$boat_config['bg_music'])?>
						<span class="help-block"><span class="label label-success"> 不填写将不播放键盘 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group leaf_style">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏角色风格选择</span></label>
					<div class="col-sm-9">
						<select name="style" class='form-control'>
							 <?php  if(is_array($sys_boat_style)) { foreach($sys_boat_style as $key => $row) { ?>
							 <?php  if($row['style_show']==1) { ?>
							 <option   value="<?php  echo $key?>"  <?php  if($boat_config['style']==$key) { ?>selected<?php  } ?>><?php  echo $row['style_name'];?></option>
							 <?php  } ?>
							 <?php  } } ?>
						</select>
						<span class="help-block">请选择任意一项</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="ready_time"  class="form-control" value="<?php  echo $boat_config['ready_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">预备时间 默认30秒</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="game_time"  class="form-control" value="<?php  echo $boat_config['game_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏时间</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏最大点数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxpoint"  class="form-control" value="<?php  echo $boat_config['maxpoint'];?>">
							<span class="input-group-addon">点</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏最大点数 注:根据游戏时间酌情设置此项</span></span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $boat_config['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏顶部文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="top_words" class="form-control" value="<?php  echo $boat_config['top_words'];?>" />
						<span class="help-block">大屏顶部文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏未开始右侧图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_center_img', $boat_config['right_center_img']);?>
						<span class="help-block">大屏未开始右侧图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开启倒计时按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_start_btn', $boat_config['right_start_btn']);?>
						<span class="help-block">大屏开启倒计时按钮图片 规格大小为218*93 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏扫码提示文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="left_words" class="form-control" value="<?php  echo $boat_config['left_words'];?>" />
						<span class="help-block">大屏扫码提示文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_qr', $boat_config['left_qr']);?>
						<span class="help-block">大屏二维码 规格大小为250*250px jpg或者png图片 注:此处不设置默认显示直接参与二维码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_userimg', $boat_config['left_userimg']);?>
						<span class="help-block">大屏用户默认图片 规格大小为48*48 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gaming_topbg', $boat_config['gaming_topbg']);?>
						<span class="help-block">大屏倒计时背景图片 规格大小为890*77px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_bg', $boat_config['rank_bg']);?>
						<span class="help-block">大屏排行榜背景图片 规格大小为1024*577 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜4-10名边界颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('rank_othercolor',$boat_config['rank_othercolor']);?>
					<span class="help-block">大屏排行榜4-10名边界颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">排行榜默认用户名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="rank_default_name" class="form-control" value="<?php  echo $boat_config['rank_default_name'];?>" />
						<span class="help-block">排行榜默认用户名称 注:名称需简练</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏下一轮按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_next', $boat_config['rank_next']);?>
						<span class="help-block">大屏下一轮按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开重玩按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_reset', $boat_config['rank_reset']);?>
						<span class="help-block">大屏开重玩按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">主要背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('welcome_bgcolor',$boat_config['welcome_bgcolor']);?>
					<span class="help-block">注:此项设置在未开始背景色以及大屏排行榜背景色、微信以及大屏倒计时背景均会生效</span>
					</div>
				</div>
			</div>
			</div>
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否推送</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="1" <?php  if($boat_config['send_tpl'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="2" <?php  if($boat_config['send_tpl'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">注：仅仅对认证服务号并且是已经关注的粉丝有效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否准许再次参与</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" <?php  if($boat_config['award_again'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" <?php  if($boat_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">中奖用户是否准许再次参与</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $boat_config['wechat_title'];?>" />
						<span class="help-block">微信标题</span>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏logo图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_boat_logo', $boat_config['wechat_boat_logo']);?>
						<span class="help-block">微信游戏logo图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bg', $boat_config['wechat_bg']);?>
						<span class="help-block">微信游戏背景图片 规格大小为640*1488px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏摇动音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('wechat_shake_music',$boat_config['wechat_shake_music'])?>
						<span class="help-block"><span class="label label-success"> 微信游戏摇动音效 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信底部版权</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_copyright" class="form-control" value="<?php  echo $boat_config['wechat_copyright'];?>" />
						<span class="help-block">微信底部版权 此项留空将不显示版权</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
				</div>
			</div>
	</div>
</div>
</form>
<?php  } else if($oop=='boat_style') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">赛龙舟大屏角色风格设置</div>	
	<div class="panel-body">
		<ul  id="style_lists">
								<?php  if(is_array($boat_style)) { foreach($boat_style as $key => $row) { ?>
								<li class="list-group-item" id="yyy_style_<?php  echo $key;?>">
									<input type="hidden" name="styleid[]" value="<?php  echo $row['styleid'];?>" />
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示状态</label>
										<div class="col-sm-9">
												<input type="hidden" name="style_show[]" value="<?php  if(!empty($row['style_show'])) { ?><?php  echo $row['style_show'];?><?php  } else { ?>1<?php  } ?>" class="style_show" />
												<a class="btn btn-default <?php  if(empty($row['style_show'])||$row['style_show']==1) { ?>btn-success<?php  } ?> js-btn-select" data-id="1">显示</a>
												<a class="btn btn-default <?php  if($row['style_show']==2) { ?>btn-success<?php  } ?> js-btn-select" data-id="2">隐藏</a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">风格名称</label>
										<div class="col-sm-9">
											<input type="text"  class="form-control" name="style_name[]"  value="<?php  echo $row['style_name'];?>" />
											<span class="help-block"><span class="label label-success">风格名称</span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg1[]', $row['topbg1']);?>
											<span class="help-block">大屏顶部背景1、推荐尺寸1920*540px png</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg2[]', $row['topbg2']);?>
											<span class="help-block">大屏顶部背景2、推荐尺寸1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道背景</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('tracklist[]', $row['tracklist']);?>
											<span class="help-block">大屏轨道背景、推荐尺寸1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道结束线</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('endline[]', $row['endline']);?>
											<span class="help-block">大屏轨道结束线、推荐尺寸15*100px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_0[]', $row['user_0']);?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_1[]', $row['user_1']);?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_2[]', $row['user_2']);?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_3[]', $row['user_3']);?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_4[]', $row['user_4']);?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_5[]', $row['user_5']);?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_6[]', $row['user_6']);?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_7[]', $row['user_7']);?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_8[]', $row['user_8']);?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_9[]', $row['user_9']);?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">人物图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('boat_person', $row['boat_person']);?>
											<span class="help-block">人物4个动作图、共计4张，推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">水花图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('boat_water', $row['boat_water']);?>
											<span class="help-block">水花图4个动作、共计4张图、推荐尺寸630*630px</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]',$row['game_music'])?>
											<span class="help-block"><span class="label label-success">比如：游戏过程声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
									<div class="form-group">
											<div class="col-sm-8  col-xs-12 col-md-1" >
												<a href="javascript:;" class="btn btn-danger js_del" data-id="<?php  echo $key;?>">删除</a>
											</div>
									</div>
								</li>
								<?php  } } ?>
							</ul>
		<div class="form-group" style="text-align:Center;margin-top:20px;">
			<div class="col-sm-12">
				<a href="javascript:;" class="btn btn-success" id="addboatStyle"><b>+</b>添加大屏角色风格</a>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<script>
$(function(){
	$('#addboatStyle').on('click',function(){
		var index = randomWord(false,10).toLowerCase();
		var style= $(".style_Box").html();
		var html = '<li class="list-group-item" id="yyy_style_'+index+'">';
			html += '<input type="hidden" name="styleid[]" value="'+index+'" />';
			html += style;
			html += '</div>';
			html += '</li>';
		$("#style_lists").append(html);
	});
	
	$('body').on('click','.js-btn-select',function(){
		var val = $(this).attr('data-id');
		$(this).parent().find('input').val(val);
		$(this).parent().find('a').removeClass('btn-success');
		$(this).addClass('btn-success');
	});
});
function boatstyle_delete(e){
		$(e.parentNode.parentNode.parentNode).remove();
}
function randomWord(randomFlag, min, max){
    var str = "",
        range = min,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
 
    // 随机产生
    if(randomFlag){
        range = Math.round(Math.random() * (max-min)) + min;
    }
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<div class="style_Box" style="display:none">
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示状态</label>
										<div class="col-sm-9">
												<input type="hidden" name="style_show[]" value="1" class="style_show" />
												<a class="btn btn-default btn-success js-btn-select" data-id="1">显示</a>
												<a class="btn btn-default js-btn-select" data-id="2">隐藏</a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">风格名称</label>
										<div class="col-sm-9">
											<input type="text"  class="form-control" name="style_name[]"   />
											<span class="help-block"><span class="label label-success">风格名称</span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg1[]','');?>
											<span class="help-block">大屏顶部背景1、推荐尺寸1920*540px png图</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg2[]','');?>
											<span class="help-block">大屏顶部背景2、推荐尺寸1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道背景</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('tracklist[]','');?>
											<span class="help-block">大屏轨道背景、推荐尺寸1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道结束线</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('endline[]','');?>
											<span class="help-block">大屏轨道结束线、推荐尺寸15*100px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_0[]','');?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_1[]','');?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_2[]','');?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_3[]','');?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_4[]','');?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_5[]','');?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_6[]','');?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_7[]','');?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_8[]','');?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_9[]','');?>
											<span class="help-block">船儿、推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">人物图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('boat_person','');?>
											<span class="help-block">人物4个动作图、共计4张，推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">水花图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('boat_water','');?>
											<span class="help-block">水花图4个动作、共计4张图、推荐尺寸630*630px</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]','')?>
											<span class="help-block"><span class="label label-success">比如：游戏过程声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
									<div class="form-group">
											<div class="col-sm-8  col-xs-12 col-md-1" >
												<a href="javascript:;" class="btn btn-danger" onclick="boatstyle_delete(this)">删除</a>
											</div>
									</div>
</div>
<?php  } else if($oop=='bike_style') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">自行车比赛大屏角色风格设置</div>	
	<div class="panel-body">
		<ul  id="style_lists">
								<?php  if(is_array($bike_style)) { foreach($bike_style as $key => $row) { ?>
								<li class="list-group-item" id="yyy_style_<?php  echo $key;?>">
									<input type="hidden" name="styleid[]" value="<?php  echo $row['styleid'];?>" />
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示状态</label>
										<div class="col-sm-9">
												<input type="hidden" name="style_show[]" value="<?php  if(!empty($row['style_show'])) { ?><?php  echo $row['style_show'];?><?php  } else { ?>1<?php  } ?>" class="style_show" />
												<a class="btn btn-default <?php  if(empty($row['style_show'])||$row['style_show']==1) { ?>btn-success<?php  } ?> js-btn-select" data-id="1">显示</a>
												<a class="btn btn-default <?php  if($row['style_show']==2) { ?>btn-success<?php  } ?> js-btn-select" data-id="2">隐藏</a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">风格名称</label>
										<div class="col-sm-9">
											<input type="text"  class="form-control" name="style_name[]"  value="<?php  echo $row['style_name'];?>" />
											<span class="help-block"><span class="label label-success">风格名称</span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg1[]', $row['topbg1']);?>
											<span class="help-block">大屏顶部背景1、推荐尺寸1920*540px png</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg2[]', $row['topbg2']);?>
											<span class="help-block">大屏顶部背景2、推荐尺寸1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道背景</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('tracklist[]', $row['tracklist']);?>
											<span class="help-block">大屏轨道背景、推荐尺寸1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道结束线</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('endline[]', $row['endline']);?>
											<span class="help-block">大屏轨道结束线、推荐尺寸15*100px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色影子图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('lunzia[]', $row['lunzia']);?>
											<span class="help-block">角色影子图 300*300px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_0', $row['user_0']);?>
											<span class="help-block">游泳角色1动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_1', $row['user_1']);?>
											<span class="help-block">游泳角色2动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_2', $row['user_2']);?>
											<span class="help-block">游泳角色3动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_3', $row['user_3']);?>
											<span class="help-block">游泳角色4动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_4', $row['user_4']);?>
											<span class="help-block">游泳角色5动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_5', $row['user_5']);?>
											<span class="help-block">游泳角色6动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_6', $row['user_6']);?>
											<span class="help-block">游泳角色7动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_7', $row['user_7']);?>
											<span class="help-block">游泳角色8动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_8', $row['user_8']);?>
											<span class="help-block">游泳角色9动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_9', $row['user_9']);?>
											<span class="help-block">游泳角色10动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]',$row['game_music'])?>
											<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
									<div class="form-group">
											<div class="col-sm-8  col-xs-12 col-md-1" >
												<a href="javascript:;" class="btn btn-danger js_del" data-id="<?php  echo $key;?>">删除</a>
											</div>
									</div>
								</li>
								<?php  } } ?>
							</ul>
		<div class="form-group" style="text-align:Center;margin-top:20px;">
			<div class="col-sm-12">
				<a href="javascript:;" class="btn btn-success" id="addStyle"><b>+</b>添加大屏角色风格</a>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<script>
$(function(){
	$('#addStyle').on('click',function(){
		var index = randomWord(false,10).toLowerCase();
		var style= $(".style_Box").html();
		var html = '<li class="list-group-item" id="yyy_style_'+index+'">';
			html += '<input type="hidden" name="styleid[]" value="'+index+'" />';
			html += style;
			html += '<div class="form-group"><div class="col-sm-8  col-xs-12 col-md-1" ><a href="javascript:;" class="btn btn-danger js_del" data-id="'+index+'">删除</a></div></div>';
			html += '</li>';
		$("#style_lists").append(html);
	});
	$('body').on('click','.js_del',function(){
		var index = $(this).attr('data-id');
		$("#yyy_style_"+index).remove();
	});
	$('body').on('click','.js-btn-select',function(){
		var val = $(this).attr('data-id');
		$(this).parent().find('input').val(val);
		$(this).parent().find('a').removeClass('btn-success');
		$(this).addClass('btn-success');
	});
});
function randomWord(randomFlag, min, max){
    var str = "",
        range = min,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
 
    // 随机产生
    if(randomFlag){
        range = Math.round(Math.random() * (max-min)) + min;
    }
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<div class="style_Box" style="display:none">
	<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">显示状态</span></label>
			<div class="col-sm-9">
					<input type="hidden" name="style_show[]" value="1" class="style_show">
					<a class="btn btn-default btn-success js-btn-select" data-id="1">显示</a>
					<a class="btn btn-default js-btn-select" data-id="2">隐藏</a>
			</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">风格名称</span></label>
		<div class="col-sm-9">
			<input type="text"  class="form-control" name="style_name[]"  >
			<span class="help-block"><span class="label label-success">风格名称</span></span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景1</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('topbg1[]','');?>
			<span class="help-block">大屏顶部背景1、推荐尺寸1920*540px png</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景2</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('topbg2[]','');?>
			<span class="help-block">大屏顶部背景2、推荐尺寸1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道背景</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('tracklist[]','');?>
			<span class="help-block">大屏轨道背景、推荐尺寸1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道结束线</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('endline[]', '');?>
			<span class="help-block">大屏轨道结束线、推荐尺寸15*100px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色影子图</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('lunzia[]','');?>
			<span class="help-block">角色影子图 300*300px</span>
		</div>
	</div>
	<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_0', array());?>
											<span class="help-block">角色1动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_1',array());?>
											<span class="help-block">角色2动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_2', array());?>
											<span class="help-block">角色3动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_3', array());?>
											<span class="help-block">角色4动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_4', array());?>
											<span class="help-block">角色5动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_5', array());?>
											<span class="help-block">角色6动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_6',array());?>
											<span class="help-block">角色7动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_7',array());?>
											<span class="help-block">角色8动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_8',array());?>
											<span class="help-block">角色9动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_9',array());?>
											<span class="help-block">角色10动作图、共计10张，推荐尺寸400*400px</span>
										</div>
									</div>
									
									
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_audio('game_music[]','')?>
			<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
		</div>
	</div>
</div>
<?php  } else if($oop=='bike_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-body">
			<div class="panel panel-default">
			<div class="panel-heading">大屏设置 <br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">空格键</font> 可快速开始游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">小于号键</font> 可以重玩本轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">大于号键</font> 可以进入下一轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">问号键</font> 可以直接结束当前轮游戏【仅大屏还未开始才有效】</span><br><br>
			</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="pc_title"  value="<?php  echo $bike_config['pc_title'];?>">
						<span class="help-block"><span class="label label-success">大屏标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $bike_config['bg_img']);?>
						<span class="help-block">大屏背景图片 规格大小为1600*900px jpg图片 注:此图仅未登录时才显示</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景音乐</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$bike_config['bg_music'])?>
						<span class="help-block"><span class="label label-success"> 不填写将不播放键盘 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group leaf_style">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏角色风格选择</span></label>
					<div class="col-sm-9">
						<select name="style" class='form-control'>
							 <?php  if(is_array($sys_bike_style)) { foreach($sys_bike_style as $key => $row) { ?>
							 <?php  if($row['style_show']==1) { ?>
							 <option   value="<?php  echo $key?>"  <?php  if($bike_config['style']==$key) { ?>selected<?php  } ?>><?php  echo $row['style_name'];?></option>
							 <?php  } ?>
							 <?php  } } ?>
						</select>
						<span class="help-block">请选择任意一项</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="ready_time"  class="form-control" value="<?php  echo $bike_config['ready_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">预备时间 默认30秒</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="game_time"  class="form-control" value="<?php  echo $bike_config['game_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏时间</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏模式</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="shake_type" value="1" <?php  if($bike_config['shake_type'] == '1') { ?>checked="true"<?php  } ?> onclick="choose_shake()">摇动
						</label>
						<label class="radio-inline">
							<input type="radio" name="shake_type" value="2" <?php  if($bike_config['shake_type'] == '2') { ?>checked="true"<?php  } ?> onclick="choose_rotate()">旋转
						</label>
						<span class="help-block"></span>
					</div>
				</div>
				<div class="form-group rotate_max" <?php  if($bike_config['shake_type'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">旋转模式、最大加速次数</label>
					<div class="col-sm-9 ">
						<div class="input-group" >
							<input type="text" name="rotate_max"  class="form-control" value="<?php  echo $bike_config['rotate_max'];?>">
							<span class="input-group-addon">次</span>
						</div>
						<span class="help-block"><span class="label label-success">旋转最大加速次数 注:根据游戏时间酌情设置此项</span></span>
					</div>
				</div>
				<div class="form-group shake_max" <?php  if($bike_config['shake_type'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏最大点数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxpoint"  class="form-control" value="<?php  echo $bike_config['maxpoint'];?>">
							<span class="input-group-addon">点</span>
						</div>
						<span class="help-block"><span class="label label-success">摇动模式、游戏最大点数 注:根据游戏时间酌情设置此项</span></span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $bike_config['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏顶部文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="top_words" class="form-control" value="<?php  echo $bike_config['top_words'];?>" />
						<span class="help-block">大屏顶部文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏未开始右侧图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_center_img', $bike_config['right_center_img']);?>
						<span class="help-block">大屏未开始右侧图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开启倒计时按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_start_btn', $bike_config['right_start_btn']);?>
						<span class="help-block">大屏开启倒计时按钮图片 规格大小为218*93 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏扫码提示文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="left_words" class="form-control" value="<?php  echo $bike_config['left_words'];?>" />
						<span class="help-block">大屏扫码提示文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_qr', $bike_config['left_qr']);?>
						<span class="help-block">大屏二维码 规格大小为250*250px jpg或者png图片 注:此处不设置默认显示直接参与二维码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_userimg', $bike_config['left_userimg']);?>
						<span class="help-block">大屏用户默认图片 规格大小为48*48 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gaming_topbg', $bike_config['gaming_topbg']);?>
						<span class="help-block">大屏倒计时背景图片 规格大小为890*77px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_bg', $bike_config['rank_bg']);?>
						<span class="help-block">大屏排行榜背景图片 规格大小为1024*577 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜4-10名边界颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('rank_othercolor',$bike_config['rank_othercolor']);?>
					<span class="help-block">大屏排行榜4-10名边界颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">排行榜默认用户名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="rank_default_name" class="form-control" value="<?php  echo $bike_config['rank_default_name'];?>" />
						<span class="help-block">排行榜默认用户名称 注:名称需简练</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏下一轮按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_next', $bike_config['rank_next']);?>
						<span class="help-block">大屏下一轮按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开重玩按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_reset', $bike_config['rank_reset']);?>
						<span class="help-block">大屏开重玩按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">主要背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('welcome_bgcolor',$bike_config['welcome_bgcolor']);?>
					<span class="help-block">注:此项设置在未开始背景色以及大屏排行榜背景色、微信以及大屏倒计时背景均会生效</span>
					</div>
				</div>
			</div>
			</div>
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否推送</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="1" <?php  if($bike_config['send_tpl'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="2" <?php  if($bike_config['send_tpl'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">注：仅仅对认证服务号并且是已经关注的粉丝有效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否准许再次参与</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" <?php  if($bike_config['award_again'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" <?php  if($bike_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">中奖用户是否准许再次参与</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $bike_config['wechat_title'];?>" />
						<span class="help-block">微信标题</span>
					</div>
				</div>
				<div class="form-group shake_max" <?php  if($bike_config['shake_type'] == '2') { ?>style="display:none"<?php  } ?>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">摇动模式、微信游戏logo图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bike_logo', $bike_config['wechat_bike_logo']);?>
						<span class="help-block">微信游戏logo图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group rotate_max" <?php  if($bike_config['shake_type'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">旋转模式自行车踏板图</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rotate_bike', $bike_config['rotate_bike']);?>
						<span class="help-block">旋转模式自行车踏板图 规格大小为150*150px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bg', $bike_config['wechat_bg']);?>
						<span class="help-block">微信游戏背景图片 规格大小为640*1488px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏摇动音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('wechat_shake_music',$bike_config['wechat_shake_music'])?>
						<span class="help-block"><span class="label label-success"> 微信游戏摇动音效 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否开启游戏未开始提示层</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="bike_tip_on" value="1" <?php  if($bike_config['bike_tip_on'] == '1') { ?>checked="true"<?php  } ?> onclick="bike_tipon();">是
						</label>
						<label class="radio-inline">
							<input type="radio" name="bike_tip_on" value="2" <?php  if($bike_config['bike_tip_on'] == '2') { ?>checked="true"<?php  } ?> onclick="bike_tipoff();">否
						</label>
						<span class="help-block">是否开启游戏未开始提示层  注意:仅仅选择旋转模式此项才有意义</span>
					</div>
				</div>
				<div class="form-group bike_tips_box" <?php  if($bike_config['bike_tip_on'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">未开始提示图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bike_tipimg',$bike_config['bike_tipimg'])?>
						<span class="help-block">提示图片 规格:200*200px png</span>
					</div>
				</div>
				<div class="form-group bike_tips_box" <?php  if($bike_config['bike_tip_on'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">未开始提示文字</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="bike_tips" class="form-control" value="<?php  echo $bike_config['bike_tips'];?>" />
						<span class="help-block">提示文字 不要设置过多文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信底部版权</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_copyright" class="form-control" value="<?php  echo $bike_config['wechat_copyright'];?>" />
						<span class="help-block">微信底部版权 此项留空将不显示版权</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
			</div>
	</div>
</div>
</form>
<script>
function choose_rotate(){
	$(".rotate_max").show();
	$(".shake_max").hide();
}
function choose_shake(){
	$(".rotate_max").hide();
	$(".shake_max").show();
}
function bike_tipon(){
	$(".bike_tips_box").show();
}
function bike_tipoff(){
	$(".bike_tips_box").hide();
}
</script>
<?php  } else if($oop=='mls_style') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">马拉松赛大屏角色风格设置</div>	
	<div class="panel-body">
		<ul  id="style_lists">
								<?php  if(is_array($mls_style)) { foreach($mls_style as $key => $row) { ?>
								<li class="list-group-item" id="yyy_style_<?php  echo $key;?>">
									<input type="hidden" name="styleid[]" value="<?php  echo $row['styleid'];?>" />
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示状态</label>
										<div class="col-sm-9">
												<input type="hidden" name="style_show[]" value="<?php  if(!empty($row['style_show'])) { ?><?php  echo $row['style_show'];?><?php  } else { ?>1<?php  } ?>" class="style_show" />
												<a class="btn btn-default <?php  if(empty($row['style_show'])||$row['style_show']==1) { ?>btn-success<?php  } ?> js-btn-select" data-id="1">显示</a>
												<a class="btn btn-default <?php  if($row['style_show']==2) { ?>btn-success<?php  } ?> js-btn-select" data-id="2">隐藏</a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">风格名称</label>
										<div class="col-sm-9">
											<input type="text"  class="form-control" name="style_name[]"  value="<?php  echo $row['style_name'];?>" />
											<span class="help-block"><span class="label label-success">风格名称</span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg1[]', $row['topbg1']);?>
											<span class="help-block">大屏顶部背景1、推荐尺寸1920*540px png</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg2[]', $row['topbg2']);?>
											<span class="help-block">大屏顶部背景2、推荐尺寸1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道背景</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('tracklist[]', $row['tracklist']);?>
											<span class="help-block">大屏轨道背景、推荐尺寸1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道结束线</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('endline[]', $row['endline']);?>
											<span class="help-block">大屏轨道结束线、推荐尺寸15*100px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色影子图</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('lunzia', $row['lunzia']);?>
											<span class="help-block">角色影子图、共计12张，推荐尺寸268*87px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_0', $row['user_0']);?>
											<span class="help-block">角色1动作图、共计12张，推荐尺寸268*386px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_1', $row['user_1']);?>
											<span class="help-block">角色2动作图、共计12张，推荐尺寸268*386px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_2', $row['user_2']);?>
											<span class="help-block">角色3动作图、共计12张，推荐尺寸268*386px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_3', $row['user_3']);?>
											<span class="help-block">角色4动作图、共计12张，推荐尺寸268*386px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_4', $row['user_4']);?>
											<span class="help-block">角色5动作图、共计12张，推荐尺寸268*386px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_5', $row['user_5']);?>
											<span class="help-block">角色6动作图、共计12张，推荐尺寸268*386px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_6', $row['user_6']);?>
											<span class="help-block">角色7动作图、共计12张，推荐尺寸268*386px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_7', $row['user_7']);?>
											<span class="help-block">角色8动作图、共计12张，推荐尺寸268*386px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_8', $row['user_8']);?>
											<span class="help-block">角色9动作图、共计12张，推荐尺寸268*386px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_9', $row['user_9']);?>
											<span class="help-block">角色10动作图、共计12张，推荐尺寸268*386px</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]',$row['game_music'])?>
											<span class="help-block"><span class="label label-success">比如：跑步的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
									<div class="form-group">
											<div class="col-sm-8  col-xs-12 col-md-1" >
												<a href="javascript:;" class="btn btn-danger js_del" data-id="<?php  echo $key;?>">删除</a>
											</div>
									</div>
								</li>
								<?php  } } ?>
							</ul>
		<div class="form-group" style="text-align:Center;margin-top:20px;">
			<div class="col-sm-12">
				<a href="javascript:;" class="btn btn-success" id="addStyle"><b>+</b>添加大屏角色风格</a>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<script>
$(function(){
	$('#addStyle').on('click',function(){
		var index = randomWord(false,10).toLowerCase();
		var style= $(".style_Box").html();
		var html = '<li class="list-group-item" id="yyy_style_'+index+'">';
			html += '<input type="hidden" name="styleid[]" value="'+index+'" />';
			html += style;
			html += '<div class="form-group"><div class="col-sm-8  col-xs-12 col-md-1" ><a href="javascript:;" class="btn btn-danger js_del" data-id="'+index+'">删除</a></div></div>';
			html += '</li>';
		$("#style_lists").append(html);
	});
	$('body').on('click','.js_del',function(){
		var index = $(this).attr('data-id');
		$("#yyy_style_"+index).remove();
	});
	$('body').on('click','.js-btn-select',function(){
		var val = $(this).attr('data-id');
		$(this).parent().find('input').val(val);
		$(this).parent().find('a').removeClass('btn-success');
		$(this).addClass('btn-success');
	});
});
function randomWord(randomFlag, min, max){
    var str = "",
        range = min,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
 
    // 随机产生
    if(randomFlag){
        range = Math.round(Math.random() * (max-min)) + min;
    }
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<div class="style_Box" style="display:none">
	<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">显示状态</span></label>
			<div class="col-sm-9">
					<input type="hidden" name="style_show[]" value="1" class="style_show">
					<a class="btn btn-default btn-success js-btn-select" data-id="1">显示</a>
					<a class="btn btn-default js-btn-select" data-id="2">隐藏</a>
			</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">风格名称</span></label>
		<div class="col-sm-9">
			<input type="text"  class="form-control" name="style_name[]"  >
			<span class="help-block"><span class="label label-success">风格名称</span></span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景1</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('topbg1[]','');?>
			<span class="help-block">大屏顶部背景1、推荐尺寸1920*540px png</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景2</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('topbg2[]','');?>
			<span class="help-block">大屏顶部背景2、推荐尺寸1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道背景</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('tracklist[]','');?>
			<span class="help-block">大屏轨道背景、推荐尺寸1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道结束线</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('endline[]', '');?>
			<span class="help-block">大屏轨道结束线、推荐尺寸15*100px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色影子图</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_0', array());?>
			<span class="help-block">角色影子动作图、共计12张，推荐尺寸268*87px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_0', array());?>
			<span class="help-block">角色1动作图、共计12张，推荐尺寸268*386px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_1',array());?>
			<span class="help-block">角色2动作图、共计12张，推荐尺寸268*386px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_2', array());?>
			<span class="help-block">角色3动作图、共计12张，推荐尺寸268*386px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_3', array());?>
			<span class="help-block">角色4动作图、共计12张，推荐尺寸268*386px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_4', array());?>
			<span class="help-block">角色5动作图、共计12张，推荐尺寸268*386px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_5', array());?>
			<span class="help-block">角色6动作图、共计12张，推荐尺寸268*386px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_6',array());?>
			<span class="help-block">角色7动作图、共计12张，推荐尺寸268*386px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_7',array());?>
			<span class="help-block">角色8动作图、共计12张，推荐尺寸268*386px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_8',array());?>
			<span class="help-block">角色9动作图、共计12张，推荐尺寸268*386px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('user_9',array());?>
			<span class="help-block">角色10动作图、共计12张，推荐尺寸268*386px</span>
		</div>
	</div>	
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_audio('game_music[]','')?>
			<span class="help-block"><span class="label label-success">比如：跑步的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
		</div>
	</div>
</div>
<?php  } else if($oop=='mls_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-body">
			<div class="panel panel-default">
			<div class="panel-heading">大屏设置 <br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">空格键</font> 可快速开始游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">小于号键</font> 可以重玩本轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">大于号键</font> 可以进入下一轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">问号键</font> 可以直接结束当前轮游戏【仅大屏还未开始才有效】</span><br><br>
			</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="pc_title"  value="<?php  echo $mls_config['pc_title'];?>">
						<span class="help-block"><span class="label label-success">大屏标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $mls_config['bg_img']);?>
						<span class="help-block">大屏背景图片 规格大小为1080*1920px jpg图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景音乐</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$mls_config['bg_music'])?>
						<span class="help-block"><span class="label label-success"> 不填写将不播放 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group leaf_style">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏角色风格选择</span></label>
					<div class="col-sm-9">
						<select name="style" class='form-control'>
							 <?php  if(is_array($sys_mls_style)) { foreach($sys_mls_style as $key => $row) { ?>
							 <?php  if($row['style_show']==1) { ?>
							 <option   value="<?php  echo $key?>"  <?php  if($mls_config['style']==$key) { ?>selected<?php  } ?>><?php  echo $row['style_name'];?></option>
							 <?php  } ?>
							 <?php  } } ?>
						</select>
						<span class="help-block">请选择任意一项</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="ready_time"  class="form-control" value="<?php  echo $mls_config['ready_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">预备时间 默认30秒</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="game_time"  class="form-control" value="<?php  echo $mls_config['game_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏时间</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<textarea style="height:200px;" class="form-control"  cols="70" name="wechat_jiayou"  ><?php  echo $mls_config['wechat_jiayou'];?></textarea>
							
						</div>
						<span class="help-block"><span class="label label-success">每条加油语请用|分隔开</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏最大步数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxpoint"  class="form-control" value="<?php  echo $mls_config['maxpoint'];?>">
							<span class="input-group-addon">步</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏最大步数 注:根据游戏时间酌情设置此项</span></span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $mls_config['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏顶部文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="top_words" class="form-control" value="<?php  echo $mls_config['top_words'];?>" />
						<span class="help-block">大屏顶部文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏未开始右侧图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_center_img', $mls_config['right_center_img']);?>
						<span class="help-block">大屏未开始右侧图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开启倒计时按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_start_btn', $mls_config['right_start_btn']);?>
						<span class="help-block">大屏开启倒计时按钮图片 规格大小为218*93 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏扫码提示文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="left_words" class="form-control" value="<?php  echo $mls_config['left_words'];?>" />
						<span class="help-block">大屏扫码提示文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_qr', $mls_config['left_qr']);?>
						<span class="help-block">大屏二维码 规格大小为250*250px jpg或者png图片 注:此处不设置默认显示直接参与二维码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_userimg', $mls_config['left_userimg']);?>
						<span class="help-block">大屏用户默认图片 规格大小为48*48 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gaming_topbg', $mls_config['gaming_topbg']);?>
						<span class="help-block">大屏倒计时背景图片 规格大小为890*77px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_bg', $mls_config['rank_bg']);?>
						<span class="help-block">大屏排行榜背景图片 规格大小为1024*577 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜4-10名边界颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('rank_othercolor',$mls_config['rank_othercolor']);?>
					<span class="help-block">大屏排行榜4-10名边界颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">排行榜默认用户名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="rank_default_name" class="form-control" value="<?php  echo $mls_config['rank_default_name'];?>" />
						<span class="help-block">排行榜默认用户名称 注:名称需简练</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏下一轮按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_next', $mls_config['rank_next']);?>
						<span class="help-block">大屏下一轮按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开重玩按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_reset', $mls_config['rank_reset']);?>
						<span class="help-block">大屏开重玩按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">主要背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('welcome_bgcolor',$mls_config['welcome_bgcolor']);?>
					<span class="help-block">注:此项设置在未开始背景色以及大屏排行榜背景色、微信以及大屏倒计时背景均会生效</span>
					</div>
				</div>
			</div>
			</div>
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否推送</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="1" <?php  if($mls_config['send_tpl'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="2" <?php  if($mls_config['send_tpl'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">注：仅仅对认证服务号并且是已经关注的粉丝有效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否准许再次参与</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" <?php  if($mls_config['award_again'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" <?php  if($mls_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">中奖用户是否准许再次参与</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否微信端显示成绩</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="wechat_showscore" value="1" <?php  if($mls_config['wechat_showscore'] == '1') { ?>checked="true"<?php  } ?> >显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="wechat_showscore" value="2" <?php  if($mls_config['wechat_showscore'] == '2') { ?>checked="true"<?php  } ?> >隐藏
						</label>
						<span class="help-block">是否微信端显示成绩 注意:成绩可能存在0-5m的误差</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $mls_config['wechat_title'];?>" />
						<span class="help-block">微信标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否微信端背景音乐</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="wechat_music_on" value="1" <?php  if($mls_config['wechat_music_on'] == '1') { ?>checked="true"<?php  } ?> onclick="open_bgmusic()">开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="wechat_music_on" value="2" <?php  if($mls_config['wechat_music_on'] == '2') { ?>checked="true"<?php  } ?> onclick="close_bgmusic()">关闭
						</label>
						<span class="help-block">中奖用户是否准许再次参与</span>
					</div>
				</div>
				<div class="form-group open_bgmusic" <?php  if($mls_config['wechat_music_on'] == '2') { ?>style="display:none"<?php  } ?>>
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信背景音乐</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_audio('wechat_music', $mls_config['wechat_music'])?>
					<div class="help-block">注意:音乐长度在10秒500k以内。</div>
				  </div>
				</div>
				<div class="form-group open_bgmusic" <?php  if($mls_config['wechat_music_on'] == '2') { ?>style="display:none"<?php  } ?>>
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信背景音乐图标</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_music_icon', $mls_config['wechat_music_icon'])?>
					<div class="help-block">微信背景音乐图标</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端loading图片</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_loadImg', $mls_config['wechat_loadImg'])?>
					<div class="help-block">微信端loading图片</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">男生站立/起跑</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_man', $mls_config['wechat_man'])?>
					<div class="help-block">游戏未开始男生起跑与游戏结束男生站立图片</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">男生跑步动作</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_manrun', $mls_config['wechat_manrun'])?>
					<div class="help-block">男生跑步动作</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">女生起跑/站立</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_woman', $mls_config['wechat_woman'])?>
					<div class="help-block">游戏未开始女生起跑与游戏结束女生站立图片</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">女生跑步动作</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_womanrun', $mls_config['wechat_womanrun'])?>
					<div class="help-block">女生跑步动作</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端跑道两侧环境【树】</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_tree', $mls_config['wechat_tree'])?>
					<div class="help-block">跑道两侧环境、如:树</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端跑道两侧颜色图</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_gdgreen', $mls_config['wechat_gdgreen'])?>
					<div class="help-block">跑道两侧颜色图</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端跑道图片</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_road', $mls_config['wechat_road'])?>
					<div class="help-block">跑道图片</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端太阳</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_sun', $mls_config['wechat_sun'])?>
					<div class="help-block">请尽量使用gif或者png图片</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端云朵图1</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_cloud1', $mls_config['wechat_cloud1'])?>
					<div class="help-block">微信端云朵图1</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端云朵图2</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_cloud2', $mls_config['wechat_cloud2'])?>
					<div class="help-block">微信端云朵图2</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端云朵图3</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_cloud3', $mls_config['wechat_cloud3'])?>
					<div class="help-block">微信端云朵图3</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏未开始顶部图片</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_topimg', $mls_config['wechat_topimg'])?>
					<div class="help-block">微信游戏未开始顶部图片</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏未开始顶部提示文字</label>
					<div class="col-sm-9"><input type="text"  name="wechat_topword" class="form-control" value="<?php  echo $mls_config['wechat_topword'];?>" />
					<div class="help-block">微信游戏未开始顶部提示文字</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信脚印图</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_foot', $mls_config['wechat_foot'])?>
					<div class="help-block">微信脚印图</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信操作提示手指图1</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_leftfinger', $mls_config['wechat_leftfinger'])?>
					<div class="help-block">微信操作提示手指图1</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信操作提示手指图2</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_rightfinger', $mls_config['wechat_rightfinger'])?>
					<div class="help-block">微信操作提示手指图2</div>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">开启特殊背景</label>
				  <div class="col-sm-9">
					<label class="radio-inline">
					  <input type="radio" name="open_special_bg" value="0" <?php  if($mls_config['open_special_bg'] == 0 ) { ?> checked<?php  } ?> onclick="close_specialbg()" />
					  关闭</label>
					<label class="radio-inline">
					  <input type="radio" name="open_special_bg" value="1" <?php  if($mls_config['open_special_bg'] == 1) { ?> checked<?php  } ?> onclick="open_specialbg()" />
					  开启</label>
					<div class="help-block">开启特殊背景，可以直接使用一张图片来代替太阳，云等的设置。</div>
				  </div>
				</div>
				<div class="form-group special_bg" <?php  if($mls_config['open_special_bg'] == '0') { ?>style="display:none"<?php  } ?>>
				  <label class="col-xs-12 col-sm-3 col-md-2 control-label">特殊背景图片</label>
				  <div class="col-sm-9"> <?php  echo tpl_form_field_image('wechat_special_img', $mls_config['wechat_special_img'])?>
					<div class="help-block">规格：640*1200；上传此处背景图、游戏部分小细节将不显示，如上面的太阳，树木等</div>
				  </div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
			</div>
	</div>
</div>
</form>
<script>
	
		function open_specialbg(){
			$(".special_bg").show();
		}
		function close_specialbg(){
			$(".special_bg").hide();
		}
		function open_bgmusic(){
			$(".open_bgmusic").show();
		}
		function close_bgmusic(){
			$(".open_bgmusic").hide();
		}
	
</script>
<?php  } else if($oop=='newqd_config') { ?>
<style>
.shapeTypes a{margin-bottom:20px;}
.countbox{display:none}
</style>
<canvas id="cas"  style="display:none" width=1366 height=636>浏览器不支持canvas</canvas>
<script>
var newqd_countjd = <?php  if(!empty($newqd_config['countjd'])) { ?><?php  echo $newqd_config['countjd'];?><?php  } else { ?>16<?php  } ?>;
var newqd_textjd = <?php  if(!empty($newqd_config['textjd'])) { ?><?php  echo $newqd_config['textjd'];?><?php  } else { ?>14<?php  } ?>;
var newqd_logojd = <?php  if(!empty($newqd_config['logojd'])) { ?><?php  echo $newqd_config['logojd'];?><?php  } else { ?>15<?php  } ?>;
var canvas = document.getElementById("cas"),
context = canvas.getContext('2d');
var t = { 
		textShape:function(text){
			var self = this;
			var proportion = window.innerWidth / window.innerHeight;//宽高比
			var cas_h =  window.innerHeight*0.8;
			var cas_w = proportion * cas_h;
			canvas.width = cas_w;
			canvas.height = cas_h;
			var fontSize = 250;
			if(text.toString().indexOf('/') != -1){
				fontSize = Math.min(fontSize, canvas.width / context.measureText(text).width * 1 * fontSize, canvas.height / fontSize * 0.45 * fontSize);
				context.font = fontSize + "px bold";
				context.textAlign = "center";
				context.textBaseline = "middle";
				context.fillText(text.substr(0,text.toString().indexOf('/')), canvas.width / 2, canvas.height * 0.25);
				context.fillText(text.substr(text.toString().indexOf('/')+1), canvas.width / 2, canvas.height * 0.75);
			}else{
				context.font = fontSize + "px bold";
				context.textAlign = "center";
				context.textBaseline = "middle";
				context.fillText(text, canvas.width / 2, canvas.height / 2);
			}
			var ddots = self.getDots(newqd_textjd);
			return  JSON.stringify(ddots);
		},
		logoShape:function(src,callback){
					var proportion = window.innerWidth / window.innerHeight;//宽高比
					var cas_h =  window.innerHeight*0.8;
					var cas_w = proportion * cas_h;
					canvas.width = cas_w;
					canvas.height = cas_h;
					var self = this;
					var img = new Image();
					img.onload = function() {
						var proportion = img.naturalWidth / img.naturalHeight;//宽高比
						var cas_h =  window.innerHeight*0.8;
						var cas_w = proportion * cas_h;
						canvas.width = cas_w;
						canvas.height = cas_h;
						context.drawImage(img,0,0,cas_w,cas_h);
						var ddots = self.getDots(newqd_logojd);
						ddots = JSON.stringify(ddots);
						callback(ddots);
						
					}
					//img.crossOrigin = '';
					img.src = src;		
		},
		countShape:function(text){
					var self = this;
					var proportion = window.innerWidth / window.innerHeight;//宽高比
					var cas_h =  window.innerHeight*0.8;
					var cas_w = proportion * cas_h;
					canvas.width = cas_w;
					canvas.height = cas_h;
					var fontSize = 500;
					context.font = fontSize + "px bold";
					context.textAlign = "center";
					context.textBaseline = "middle";
					context.fillText(text, canvas.width / 2, canvas.height / 2);
					var ddots = self.getDots(newqd_countjd);
					ddots = JSON.stringify(ddots);
					return ddots;
		},
		getDots:function(d){
			  var imgData = context.getImageData(0, 0, canvas.width, canvas.height);
			  var pixs = imgData.data;
			  context.clearRect(0, 0, canvas.width, canvas.height);
			  var dots = [];
			  for (var x = 0; x < imgData.width; x += d) {
				for (var y = 0; y < imgData.height; y += d) {
				  var i = (y * imgData.width + x) * 4;
				  if (pixs[i + 3] > 128) {
					dots.push({
						  x:x - imgData.width / 2, 
						  y:y - imgData.height / 2,
						});
				  }
				}
			  }
			  return dots;
		},
		showCount:function(){
			$(".showCount").show();
		},
		hideCount:function(){
			$(".showCount").hide();
		},
		newqd_delete:function(obj){
			$(obj.parentNode.parentNode.parentNode).remove();
			$(".shapeLists label").each(function(index){
				$(this).text('第'+(index+1)+'屏');
			});
		},
		deleteImage:function(elm){
				$(elm).prev().attr("src", "./resource/images/nopic.jpg");
				$(elm).parent().prev().find("input").val("");
				$(elm.parentNode.parentNode.parentNode).find('input').eq(2).val('');
		},
		textBlur:function(obj){
			var text = $(obj).val();
			if(text==''){
			  return  util.message('请先输入4个汉字内的文本');
			}
			if(text.length>4){
			  return  util.message('最多只能输入4个汉字');
			}
			if(text=='text' || text=='logo'){
				 return  util.message('文字不能是text或者logo');
			}
			var ddots = t.textShape(text);
			$(obj.parentNode).find('input').eq(2).val(ddots);
		},
		countconfig:function(obj){
			var val = $(obj).val();
			if(val==''){
			  return  util.message('请先输入倒计时秒数');
			}
			if(val > 9 || val<=0){
			  return  util.message('请先输入小于10、大于0的秒数');
			}
			$(".countinput").remove();
			for(var i=val;i>0;i--){
				var dots = t.countShape(i);
				$(".countbox").append("<input type='hidden' name='count[]' class='form-control countinput' value='"+dots+"'   />");
			}
		},
		defaultCount:function(c){	
		  if(c>0&&c<10){
			for(var i=c;i>0;i--){
				var dots = t.countShape(i);
				$(".countbox").append("<input type='hidden' name='count[]' class='form-control countinput' value='"+dots+"'   />");
			}
		  }
		}
}
</script>
<div class="countbox">
	<?php  if(is_array($newqd_config['countshapes'])) { foreach($newqd_config['countshapes'] as $key => $row) { ?>
		<input type="hidden" name="count[]" class="form-control countinput" value="<?php  echo $row;?>"   />
	<?php  } } ?>
</div>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">
		logo/倒计时/文字精度设置<br><br>
		<span class="label label-danger" style="padding:10px">精度值请务必一次性确定好、每次改动精度值、请务必重新设置下面的图形设置以及倒计时秒数设置【具体为: logo重新上传、文字重新输入、倒计时秒数重新输入】、然后重新提交、切记切记！！！</span>
	</div>	
	<div class="panel-body">
		<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2  control-label">倒计时精度设置</label>
				<div class="col-sm-3">
					<div class="input-group">
						<input type="text" name="countjd"  class="form-control" value="<?php  if(!empty($newqd_config['countjd'])) { ?><?php  echo $newqd_config['countjd'];?><?php  } else { ?>16<?php  } ?>" />
						<span class="input-group-addon">精度</span>
					</div>
					<span class="help-block">注: 精度值越小秒数数字图形越精细、但是太小直接会导致粒子数量太大、导致屏幕卡顿</span>
				</div>
		</div>
		<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2  control-label">文字精度设置</label>
				<div class="col-sm-3">
					<div class="input-group">
						<input type="text" name="textjd"  class="form-control" value="<?php  if(!empty($newqd_config['textjd'])) { ?><?php  echo $newqd_config['textjd'];?><?php  } else { ?>14<?php  } ?>" />
						<span class="input-group-addon">精度</span>
					</div>
					<span class="help-block">注: 精度值越小文字图形越精细、但是太小直接会导致粒子数量太大、导致屏幕卡顿</span>
				</div>
		</div>
		<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2  control-label">logo精度设置</label>
				<div class="col-sm-3">
					<div class="input-group">
						<input type="text" name="logojd"  class="form-control" value="<?php  if(!empty($newqd_config['logojd'])) { ?><?php  echo $newqd_config['logojd'];?><?php  } else { ?>15<?php  } ?>" />
						<span class="input-group-addon">精度</span>
					</div>
					<span class="help-block">注: 精度值越小logo图越精细、但是太小直接会导致粒子数量太大、导致屏幕卡顿</span>
				</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">基础设置</div>	
	<div class="panel-body">
	<div class="tab-content">
	<div class="tab-pane  active" id="tab_basic">
		<div class="panel panel-default">
			<div class="panel-heading"></div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏网页标题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $newqd_config['pc_title'];?>" class="form-control" name="pc_title" >
						<span class="help-block">大屏网页标题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('bg_video', $newqd_config['bg_video']);?>
						<span class="help-block">大屏背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是默认风格</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $newqd_config['bg_img']);?>
						<span class="help-block">大屏背景图片 1440*828px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">默认头像</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('defaultAvatar', $newqd_config['defaultAvatar']);?>
						<span class="help-block">默认头像 48*48px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否开启倒计时</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="open_djs" value="0"  <?php  if($newqd_config['open_djs'] == '0') { ?>checked="true"<?php  } ?> onclick="t.hideCount()"> 不开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_djs" value="1" <?php  if($newqd_config['open_djs'] == '1') { ?>checked="true"<?php  } ?> onclick="t.showCount()">开启
						</label>
						<span class="help-block">注意:点击键盘空格即可开始倒计时</span>
					</div>
				</div>
				<div class="form-group showCount" style="<?php  if($newqd_config['open_djs']==0) { ?>display:none<?php  } ?>">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">倒计时秒数</label>
									<div class="col-sm-3">
										<div class="input-group">
											<input type="text" name="djsCount"  class="form-control" value="<?php  echo $newqd_config['djsCount'];?>" onblur="t.countconfig(this)">
											<span class="input-group-addon">秒</span>
										</div>
										<span class="help-block">秒 注意:必须是小于10的整数</span>
									</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="form-group" >
							<label class="col-xs-12 col-sm-3 col-md-2  control-label">图形设置</label>
							<div class="col-sm-9 ">
								<div class="form-group">
									<ul class="list-group shapeLists" style="margin:20px;">
									  <?php  if(is_array($newqd_config['shapes'])) { foreach($newqd_config['shapes'] as $key => $row) { ?>
										    <li class="list-group-item">
											<div class="form-group">
												<label class="col-xs-2 col-sm-2 col-md-2 control-label">第<?php  echo $key+1?>屏</label>
												<div class="col-sm-7 col-xs-7  col-md-7 ">
												  <?php  if($row['shape']!='text'&&$row['shape']!='logo') { ?>
													<input type="hidden" name="Shape[]" class="form-control" value="<?php  echo $row['shape'];?>"   />
													<input type="hidden" name="Name[]" class="form-control" value="<?php  echo $row['name'];?>"   />
													<input type="hidden" name="Dots[]" class="form-control" value="<?php  echo $row['dots'];?>"   />
													<input type="hidden" name="Text[]" class="form-control" value="<?php  echo $row['text'];?>"   />
													<input type="hidden" name="Logo[]" class="form-control" value="<?php  echo $row['logo'];?>"   />
													<input type="text"  class="form-control" value="<?php  echo $this->shape2name($row['shape'])?>"  readonly />
												  <?php  } else if($row['shape']=='text') { ?>
													<input type="hidden" name="Shape[]" class="form-control" value="<?php  echo $row['shape'];?>"   />
													<input type="hidden" name="Name[]" class="form-control" value="<?php  echo $row['name'];?>"   />
													<input type="hidden" name="Dots[]" class="form-control" value="<?php  echo $row['dots'];?>"   />
													<input type="hidden" name="Logo[]" class="form-control" value="<?php  echo $row['logo'];?>"   />
													<input type="text" name="Text[]" class="form-control" value="<?php  echo $row['text'];?>" placeholder="请输入文本内容、必须是4个汉字以内" onblur="t.textBlur(this)" />
												   <?php  } else if($row['shape']=='logo') { ?>
													<input type="hidden" name="Shape[]" class="form-control" value="<?php  echo $row['shape'];?>"   />
													<input type="hidden" name="Name[]" class="form-control" value="<?php  echo $row['name'];?>"   />
													<input type="hidden" name="Dots[]" class="form-control" value="<?php  echo $row['dots'];?>"   />
													<input type="hidden" name="Text[]" class="form-control" value="<?php  echo $row['text'];?>"   />
													<div class="col-sm-9 col-md-8" style="padding:0">
														<div class="input-group">
															<input type="text" name="Logo[]" value="<?php  echo $row['logo'];?>" class="form-control" autocomplete="off">
															<span class="input-group-btn">
																<button class="btn btn-default" type="button" onclick="showImagetips(this);">选择图片</button>
															</span>
														</div>
														<div class="input-group" style="margin-top:.5em;">
															<img src="<?php  echo $row['logo'];?>" onerror="this.src='./resource/images/nopic.jpg'" class="img-responsive img-thumbnail" width="150" />
															<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="t.deleteImage(this)">×</em>
														</div>
														<span class="help-block">注意:logo图片必须是logo色为非白色、底色为透明色 <a target="__blank" style="color:red" title="点击查看logo样例" href="<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/mobile/app/images/newqd/images/logo.png">logo默认样例</a></span>
													</div>
												  <?php  } ?>
												</div>
												<div class="col-sm-3  col-xs-3 col-md-3">
														<a href="javascript:;" class="btn btn-danger" onclick="t.newqd_delete(this)" >删除</a>
												</div>
											   
											</div>
											</li>
									 <?php  } } ?>
								  </ul>
								</div>		
							</div>
						</div>
						<div class="form-group shapeTypes" >
								<label class="col-xs-12 col-sm-3 col-md-2  control-label">图形选择</label>
								<div class="col-sm-9 ">	
									<?php  if(is_array($this->shape2name())) { foreach($this->shape2name() as $key => $row) { ?>
									<a href="javascript:;" class="btn btn-success" data-type="<?php  echo $key;?>"><b>+ </b><span><?php  echo $row;?></span></a> 
									<?php  } } ?>
								</div>
						</div>
						
					</div>
				</div>
				<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2  control-label">动态图形显示时间(秒)</label>
						<div class="col-sm-3">
							<div class="input-group">
								<input type="text" name="shapeTime"  class="form-control" value="<?php  echo $newqd_config['shapeTime'];?>">
								<span class="input-group-addon">秒</span>
							</div>
							<span class="help-block">秒 注意:必须是大于等于15的整数、并且此值越大。相应的立体图形转速越慢</span>
						</div>
				</div>
				<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景音乐</label>
							<div class="col-sm-9">
								<?php  echo tpl_form_field_audio('bg_music',$newqd_config['bg_music'])?>
								<span class="help-block"><span class="label label-success">请填写带有http://的MP3格式的音乐链接</span></span>
							</div>
				</div>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="button" name="submit" value="提交" class="btn btn-primary col-lg-1" onclick="CheckPost(this);" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>

	</div>
	</div>
	</div>
	</div>
</form>
<div class="normalShape" style="display:none">
	<li class="list-group-item">
		<div class="form-group">
			<label class="col-xs-2 col-sm-2 col-md-2 control-label">第<?php  echo $key+1?>屏</label>
			<div class="col-sm-7 col-xs-7  col-md-7 ">
				<input type="hidden" name="Shape[]" class="form-control" value=""   />
				<input type="hidden" name="Name[]" class="form-control" value=""   />
				<input type="hidden" name="Dots[]" class="form-control" value=""   />
				<input type="hidden" name="Logo[]" class="form-control" value=""   />
				<input type="text" name="Text[]" class="form-control" value="" readonly  />
			</div>
			<div class="col-sm-3  col-xs-3 col-md-3">
					<a href="javascript:;" class="btn btn-danger" onclick="t.newqd_delete(this)" >删除</a>
			</div>
		</div>
	</li>
</div>
<div class="textShape" style="display:none">
	<li class="list-group-item">
		<div class="form-group">
			<label class="col-xs-2 col-sm-2 col-md-2 control-label">第<?php  echo $key+1?>屏</label>
			<div class="col-sm-7 col-xs-7  col-md-7 ">
				<input type="hidden" name="Shape[]" class="form-control" value=""   />
				<input type="hidden" name="Name[]" class="form-control" value=""   />
				<input type="hidden" name="Dots[]" class="form-control" value=""   />
				<input type="hidden" name="Logo[]" class="form-control" value=""   />
				<input type="text" name="Text[]" class="form-control" value="" placeholder="请输入文本内容、必须是4个汉字以内" onblur="t.textBlur(this)" />
			</div>
			<div class="col-sm-3  col-xs-3 col-md-3">
					<a href="javascript:;" class="btn btn-danger" onclick="t.newqd_delete(this)" >删除</a>
			</div>
		</div>
	</li>
</div>
<div class="logoShape" style="display:none">
	<li class="list-group-item">
		<div class="form-group">
			<label class="col-xs-2 col-sm-2 col-md-2 control-label">第<?php  echo $key+1?>屏</label>
			<div class="col-sm-7 col-xs-7  col-md-7 ">
				<input type="hidden" name="Shape[]" class="form-control" value=""   />
				<input type="hidden" name="Name[]" class="form-control" value=""   />
				<input type="hidden" name="Dots[]" class="form-control" value=""   />
				<input type="hidden" name="Text[]" class="form-control" value=""   />
				<div class="col-sm-9 col-md-8" style="padding:0">
					<div class="input-group">
						<input type="text" name="Logo[]" value="" class="form-control" autocomplete="off">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button" onclick="showImagetips(this);">选择图片</button>
						</span>
					</div>
					<div class="input-group" style="margin-top:.5em;">
						<img src="" onerror="this.src='./resource/images/nopic.jpg'" class="img-responsive img-thumbnail" width="150" />
						<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="t.deleteImage(this)">×</em>
					</div>
					<span class="help-block">注意:logo图片必须是logo色为非白色、底色为透明色 <a target="__blank" style="color:red" title="点击查看logo样例" href="<?php  echo $_W['siteroot'];?>addons/meepo_xianchang/template/mobile/app/images/newqd/images/logo.png">logo默认样例</a></span>
				</div>
			</div>
			<div class="col-sm-3  col-xs-3 col-md-3">
					<a href="javascript:;" class="btn btn-danger" onclick="t.newqd_delete(this)" >删除</a>
			</div>
		</div>
	</li>
</div>
<script>
function CheckPost(obj){
    var open_djs = $("input[name='open_djs']:checked").val();
	if(open_djs==1){
		var djsCount = $("input[name='djsCount']").val();
		if(djsCount=='' || djsCount<=0 || djsCount>9){
			util.message('请先设置好倒计时时间！');
			return false;
		}
		
	}
	var shapeLists = $(".shapeLists li");
	if(shapeLists.length<1){
		util.message('请先设置好图形！');
		return false;
	}
	var textCount = $("input[value=text]");
	var nulltext = false
	textCount.each(function(){
		if($(this).val().length>4){
			nulltext = true;
			//return false;
		}
		if($(this.parentNode).find("input").eq(2).val()=='' || $(this.parentNode).find("input:last").val()==''){
			nulltext = true;
			//return false;
		}
	});
	if(nulltext){
			util.message('存在未设置好的文本框');
			return false;
	}
	var logoCount = $("input[value=logo]");
	var nulllogo = false;
	console.log(logoCount.length);
	logoCount.each(function(){
		if($(this.parentNode).find("input").eq(2).val()==''){
			nulllogo = true;
			return false;
		}
	});
	if(nulllogo){
			util.message('存在未设置好的图片框');
			return false;
	}
	$(obj).attr("type","submit");
	
}
function showImagetips(obj){
	var input = $(obj.parentNode.parentNode).find('input');
	var val = input.val();
	//var img = ipt.parent().next().children();
	var options = {'global': false, 'class_extra': '', 'direct': true, 'multiple': false};
	util.image(val, function(url){
		uploadImgCallback(input, url);
	}, null, options);
}
var ajaxstatus = false;
var uploadImgCallback = function(ipt, url){
	util.loading('正在拼命处理图片信息..');
	if (url.media_id) {
		return util.message('请选择本地图片');
	}
	if (!ajaxstatus && url.url) {
		ajaxstatus = true;
		$.post("<?php  echo $this->createWebUrl('sys_config',array('op'=>'control_sys','oop'=>'newqd_config','ooop'=>'local'))?>",{img:url.url},function(data){
			if(data.errno==0){	
				var img = ipt.parent().next().find('img');
				t.logoShape(data.message,function(d){
						util.loaded();
						ajaxstatus = false;
						img.attr('src',data.message);
						ipt.val(data.message);
						ipt.parent().parent().parent().find('input').eq(2).val(d);
				});
			}else{
				util.loaded();
				ajaxstatus = false;
				util.message('处理图片失败、请检查..');
			}	
		},'json');
		
	}
	
};
var normalShape = ['wall','wall2','cube','cube2','sphere','cylinder','screw','tours'];
var countNums = <?php  if($newqd_config['djsCount']!='a') { ?><?php  echo $newqd_config['djsCount'];?><?php  } else { ?>5<?php  } ?>;
var defaultCountshapes = <?php  echo json_encode($newqd_config['countshapes'])?>;
$(function(){
	if(countNums>0&&defaultCountshapes==null){
		t.defaultCount(countNums);
	}
	$(".shapeTypes a").on('click',function(){
		var type = $(this).attr('data-type');
		var lastli = $(".shapeLists li:last").find('input:first').val();
		if(lastli=='text'){
			var lastval = $(".shapeLists li:last").find('input:last').val();
			if(lastval==''){
				return  util.message('请先完成上一个图形设置');
			}
			if(lastval.length>4){
			  return util.message('上一个图形文本内容过长！');
			}
		}else if(lastli=='logo'){
			var lastval = $(".shapeLists li:last").find('input:last').val();
			if(lastval==''){
				return  util.message('请先完成上一个图形设置');
			}
		}
		if($.inArray(type,normalShape)!=-1){
			var html = $(".normalShape").html();
			$(html).appendTo(".shapeLists");
			$(".shapeLists li:last").find('input:first').val(type);
			$(".shapeLists li:last").find('input:last').val($(this).find('span').text());
			$(".shapeLists li:last").find('label').text('第'+($(".shapeLists li").length)+'屏');
		}else{
			if(type=='text'){
				var html = $(".textShape").html();
				$(html).appendTo(".shapeLists");
				$(".shapeLists li:last").find('input:first').val(type);
				$(".shapeLists li:last").find('label').text('第'+($(".shapeLists li").length)+'屏');
				var textCount = $("input[value=text]").length;
				$(".shapeLists li:last").find('input').eq(1).val('text'+textCount);
			}else if(type=='logo'){
				var html = $(".logoShape").html();
				$(html).appendTo(".shapeLists");
				$(".shapeLists li:last").find('input:first').val(type);
				$(".shapeLists li:last").find('label').text('第'+($(".shapeLists li").length)+'屏');
				var logoCount = $("input[value=logo]").length;
				$(".shapeLists li:last").find('input').eq(1).val('logo'+logoCount);
			}
		}
	});
})

</script>
<?php  } else if($oop=='sailing_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-body">
			<div class="panel panel-default">
			<div class="panel-heading">大屏设置 <br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">空格键</font> 可快速开始游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">小于号键</font> 可以重玩本轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">大于号键</font> 可以进入下一轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">问号键</font> 可以直接结束当前轮游戏【仅大屏还未开始才有效】</span><br><br>
			</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="pc_title"  value="<?php  echo $sailing_config['pc_title'];?>">
						<span class="help-block"><span class="label label-success">大屏标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $sailing_config['bg_img']);?>
						<span class="help-block">大屏背景图片 规格大小为1600*900px jpg图片 注:此图仅未登录时才显示</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景音乐</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$sailing_config['bg_music'])?>
						<span class="help-block"><span class="label label-success"> 不填写将不播放键盘 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group leaf_style">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏角色风格选择</span></label>
					<div class="col-sm-9">
						<select name="style" class='form-control'>
							 <?php  if(is_array($sys_sailing_style)) { foreach($sys_sailing_style as $key => $row) { ?>
							 <?php  if($row['style_show']==1) { ?>
							 <option   value="<?php  echo $key?>"  <?php  if($sailing_config['style']==$key) { ?>selected<?php  } ?>><?php  echo $row['style_name'];?></option>
							 <?php  } ?>
							 <?php  } } ?>
						</select>
						<span class="help-block">请选择任意一项</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="ready_time"  class="form-control" value="<?php  echo $sailing_config['ready_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">预备时间 默认30秒</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="game_time"  class="form-control" value="<?php  echo $sailing_config['game_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏时间</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏最大点数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxpoint"  class="form-control" value="<?php  echo $sailing_config['maxpoint'];?>">
							<span class="input-group-addon">点</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏最大点数 注:根据游戏时间酌情设置此项</span></span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $sailing_config['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏顶部文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="top_words" class="form-control" value="<?php  echo $sailing_config['top_words'];?>" />
						<span class="help-block">大屏顶部文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏未开始右侧图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_center_img', $sailing_config['right_center_img']);?>
						<span class="help-block">大屏未开始右侧图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开启倒计时按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_start_btn', $sailing_config['right_start_btn']);?>
						<span class="help-block">大屏开启倒计时按钮图片 规格大小为218*93 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏扫码提示文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="left_words" class="form-control" value="<?php  echo $sailing_config['left_words'];?>" />
						<span class="help-block">大屏扫码提示文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_qr', $sailing_config['left_qr']);?>
						<span class="help-block">大屏二维码 规格大小为250*250px jpg或者png图片 注:此处不设置默认显示直接参与二维码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_userimg', $sailing_config['left_userimg']);?>
						<span class="help-block">大屏用户默认图片 规格大小为48*48 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gaming_topbg', $sailing_config['gaming_topbg']);?>
						<span class="help-block">大屏倒计时背景图片 规格大小为890*77px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_bg', $sailing_config['rank_bg']);?>
						<span class="help-block">大屏排行榜背景图片 规格大小为1024*577 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜4-10名边界颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('rank_othercolor',$sailing_config['rank_othercolor']);?>
					<span class="help-block">大屏排行榜4-10名边界颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">排行榜默认用户名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="rank_default_name" class="form-control" value="<?php  echo $sailing_config['rank_default_name'];?>" />
						<span class="help-block">排行榜默认用户名称 注:名称需简练</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏下一轮按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_next', $sailing_config['rank_next']);?>
						<span class="help-block">大屏下一轮按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开重玩按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_reset', $sailing_config['rank_reset']);?>
						<span class="help-block">大屏开重玩按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">主要背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('welcome_bgcolor',$sailing_config['welcome_bgcolor']);?>
					<span class="help-block">注:此项设置在未开始背景色以及大屏排行榜背景色、微信以及大屏倒计时背景均会生效</span>
					</div>
				</div>
			</div>
			</div>
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否推送</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="1" <?php  if($sailing_config['send_tpl'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="2" <?php  if($sailing_config['send_tpl'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">注：仅仅对认证服务号并且是已经关注的粉丝有效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否准许再次参与</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" <?php  if($sailing_config['award_again'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" <?php  if($sailing_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">中奖用户是否准许再次参与</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $sailing_config['wechat_title'];?>" />
						<span class="help-block">微信标题</span>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏logo图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_sailing_logo', $sailing_config['wechat_sailing_logo']);?>
						<span class="help-block">微信游戏logo图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bg', $sailing_config['wechat_bg']);?>
						<span class="help-block">微信游戏背景图片 规格大小为640*1488px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏摇动音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('wechat_shake_music',$sailing_config['wechat_shake_music'])?>
						<span class="help-block"><span class="label label-success"> 微信游戏摇动音效 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信底部版权</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_copyright" class="form-control" value="<?php  echo $sailing_config['wechat_copyright'];?>" />
						<span class="help-block">微信底部版权 此项留空将不显示版权</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
			</div>
	</div>
</div>
</form>
<?php  } else if($oop=='meeting_config') { ?>
<form action="" method="post" class="we7-form"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">基础设置</div>
	<div class="panel-body">
		<div class="form-group">
			<label for="" class="control-label col-sm-4">报名未支付成功订单自动关闭订单时间间隔</label>
			<div class="form-controls col-sm-8 form-control-static">
				<input id="radio1-closeorder1" type="radio" name="autocloseorder"  value="1"  <?php  if($sys_meeting_config['autocloseorder']==1) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-closeorder1">永不关闭</label>
				<input id="radio1-closeorder2" type="radio" name="autocloseorder" value="2"  <?php  if($sys_meeting_config['autocloseorder']==2) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-closeorder2">半小时自动关闭</label>
				<input id="radio1-closeorder3" type="radio" name="autocloseorder" value="3"  <?php  if($sys_meeting_config['autocloseorder']==3) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-closeorder3">一小时自动关闭</label>
				<span class="help-block">报名未支付成功订单自动关闭订单时间间隔 注:倒计时是从提交订单成功开始后计时</span>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="control-label col-sm-4">是否开启报名订单可以退款</label>
			<div class="form-controls col-sm-8 form-control-static">
				<input id="radio1-openturnmoney1" type="radio" name="openreturnmoney"  value="1"  <?php  if($sys_meeting_config['openreturnmoney']==1) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-openturnmoney1">可退款</label>
				<input id="radio1-openturnmoney2" type="radio" name="openreturnmoney" value="2"  <?php  if($sys_meeting_config['openreturnmoney']==2) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-openturnmoney2">不可退款</label>
				<span class="help-block">是否开启报名订单可以退款，具体表现为：用户可通过电子票内详情页发起退款申请</span>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="control-label col-sm-4">报名支付成功订单退款类型</label>
			<div class="form-controls col-sm-8 form-control-static">
				<input id="radio1-refundtype1" type="radio" name="refundtype"  value="1"  <?php  if($sys_meeting_config['refundtype']==1) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-refundtype1">手动退</label>
				<input id="radio1-refundtype2" type="radio" name="refundtype" value="2"  <?php  if($sys_meeting_config['refundtype']==2) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-refundtype2">红包或者企业付款红包退</label>
				<input id="radio1-refundtype3" type="radio" name="refundtype" value="3"  <?php  if($sys_meeting_config['refundtype']==3) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-refundtype3">微信支付退</label>
				<span class="help-block">报名支付成功订单退款类型 注:微信退款只支持当前公众号是用的自己的支付参数</span>
			</div>
		</div>
		<div class="form-group" style="display:none">
			<label for="" class="control-label col-sm-4">退款方式</label>
			<div class="form-controls col-sm-8 form-control-static">
				<input id="radio1-autorefund1" type="radio" name="autorefund"  value="1"  <?php  if($sys_meeting_config['autorefund']==1) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-autorefund1">自动退</label>
				<input id="radio1-autorefund2" type="radio" name="autorefund" value="2"  <?php  if($sys_meeting_config['autorefund']==2) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-autorefund2">手动退</label>
				<span class="help-block">退款方式 注:自动退即为申请退款直接处理退款，为了安全最好设置成手动退</span>
			</div>
		</div>
		
		<div class="form-group" style="display:none">
			<label for="" class="control-label col-sm-4">申请退款后是否可以取消退款申请</label>
			<div class="form-controls col-sm-8 form-control-static">
				<input id="radio1-cancelreturn1" type="radio" name="cancelreturn"  value="1"  <?php  if($sys_meeting_config['cancelreturn']==1) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-cancelreturn1">可取消</label>
				<input id="radio1-cancelreturn2" type="radio" name="cancelreturn" value="2"  <?php  if($sys_meeting_config['cancelreturn']==2) { ?>checked="checked"<?php  } ?> >
				<label for="radio1-cancelreturn2">不可取消</label>
				<span class="help-block">用户申请退款后，是否可以取消退款申请 注:1 为了安全，不建议开启可取消 2 退款方式为自动退时一定要设置成不可取消</span>
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">模板消息设置</div>
	<div class="panel-body">
		<div class="we7-form config-item">
				<div class="form-group">
					<label for="" class="control-label col-sm-2">报名成功通知模板id</label>
					<div class="form-controls col-sm-8">
						<input type="text" name="successtpl" style="width: 600px" class="form-control" value="<?php  echo $sys_meeting_config['successtpl'];?>" >
						<span class="help-block">报名成功通知模板id 行业：IT科技 - 互联网|电子商务 活动报名成功通知</span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">报名审核通知模板id</label>
					<div class="form-controls col-sm-8">
						<input type="text" name="shenhetpl" style="width: 600px" class="form-control" value="<?php  echo $sys_meeting_config['shenhetpl'];?>" >
						<span class="help-block">报名审核通知模板id 行业：IT科技 - 互联网|电子商务 报名审核通知</span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">订单支付成功通知模板id</label>
					<div class="form-controls col-sm-8">
						<input type="text" name="paysuccesstpl" style="width: 600px" class="form-control" value="<?php  echo $sys_meeting_config['paysuccesstpl'];?>" >
						<span class="help-block">支付成功通知模板id 行业：IT科技 - 互联网|电子商务 订单支付成功通知</span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">申请退款通知模板id</label>
					<div class="form-controls col-sm-8">
						<input type="text" name="applyreturntpl" style="width: 600px" class="form-control" value="<?php  echo $sys_meeting_config['applyreturntpl'];?>" >
						<span class="help-block">申请退款通知模板id 行业：IT科技 - 互联网|电子商务 申请退款通知</span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">退款成功通知模板id</label>
					<div class="form-controls col-sm-8">
						<input type="text" name="refundtpl" style="width: 600px" class="form-control" value="<?php  echo $sys_meeting_config['refundtpl'];?>" >
						<span class="help-block">退款成功通知模板id 行业：IT科技 - 互联网|电子商务 退款成功通知</span>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">核销成功提醒模板id</label>
					<div class="form-controls col-sm-8">
						<input type="text" name="hxtpl" style="width: 600px" class="form-control" value="<?php  echo $sys_meeting_config['hxtpl'];?>" >
						<span class="help-block">核销成功提醒模板id 行业：IT科技 - 互联网|电子商务 核销成功提醒</span>
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="control-label col-sm-2"></label>
					<div class="form-controls col-sm-8">
						<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					</div>
				</div>
		</div>
	</div>
</div>
</form>
<?php  } else if($oop=='yacht_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-body">
			<div class="panel panel-default">
			<div class="panel-heading">大屏设置 <br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">空格键</font> 可快速开始游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">小于号键</font> 可以重玩本轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">大于号键</font> 可以进入下一轮游戏</span><br><br>
				<span class="label label-success">注:可通过点击键盘 <font color="black">问号键</font> 可以直接结束当前轮游戏【仅大屏还未开始才有效】</span><br><br>
			</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏标题</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="pc_title"  value="<?php  echo $yacht_config['pc_title'];?>">
						<span class="help-block"><span class="label label-success">大屏标题</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('bg_img', $yacht_config['bg_img']);?>
						<span class="help-block">大屏背景图片 规格大小为1600*900px jpg图片 注:此图仅未登录时才显示</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕背景音乐</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('bg_music',$yacht_config['bg_music'])?>
						<span class="help-block"><span class="label label-success"> 不填写将不播放键盘 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				<div class="form-group leaf_style">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">大屏角色风格选择</span></label>
					<div class="col-sm-9">
						<select name="style" class='form-control'>
							 <?php  if(is_array($sys_yacht_style)) { foreach($sys_yacht_style as $key => $row) { ?>
							 <?php  if($row['style_show']==1) { ?>
							 <option   value="<?php  echo $key?>"  <?php  if($yacht_config['style']==$key) { ?>selected<?php  } ?>><?php  echo $row['style_name'];?></option>
							 <?php  } ?>
							 <?php  } } ?>
						</select>
						<span class="help-block">请选择任意一项</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">预备时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="ready_time"  class="form-control" value="<?php  echo $yacht_config['ready_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">预备时间 默认30秒</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="game_time"  class="form-control" value="<?php  echo $yacht_config['game_time'];?>">
							<span class="input-group-addon">秒</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏时间</span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">游戏最大点数</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="maxpoint"  class="form-control" value="<?php  echo $yacht_config['maxpoint'];?>">
							<span class="input-group-addon">点</span>
						</div>
						<span class="help-block"><span class="label label-success">游戏最大点数 注:根据游戏时间酌情设置此项</span></span>
					</div>
				</div>
				<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2  control-label">存储摇一摇数据人数</label>
									<div class="col-sm-9 ">
										<div class="input-group">
											<input type="text" name="post_nums"  class="form-control" value="<?php  echo $yacht_config['post_nums'];?>">
											<span class="input-group-addon">人</span>
										</div>
										<span class="help-block">注意:人数越多显示加载中时间越长 在不影响中奖人数的情况下尽量填写较小数字</span>
									</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏顶部文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="top_words" class="form-control" value="<?php  echo $yacht_config['top_words'];?>" />
						<span class="help-block">大屏顶部文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏未开始右侧图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_center_img', $yacht_config['right_center_img']);?>
						<span class="help-block">大屏未开始右侧图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开启倒计时按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('right_start_btn', $yacht_config['right_start_btn']);?>
						<span class="help-block">大屏开启倒计时按钮图片 规格大小为218*93 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">大屏扫码提示文字</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="left_words" class="form-control" value="<?php  echo $yacht_config['left_words'];?>" />
						<span class="help-block">大屏扫码提示文字</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏二维码</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_qr', $yacht_config['left_qr']);?>
						<span class="help-block">大屏二维码 规格大小为250*250px jpg或者png图片 注:此处不设置默认显示直接参与二维码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏用户默认图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('left_userimg', $yacht_config['left_userimg']);?>
						<span class="help-block">大屏用户默认图片 规格大小为48*48 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏倒计时背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gaming_topbg', $yacht_config['gaming_topbg']);?>
						<span class="help-block">大屏倒计时背景图片 规格大小为890*77px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_bg', $yacht_config['rank_bg']);?>
						<span class="help-block">大屏排行榜背景图片 规格大小为1024*577 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏排行榜4-10名边界颜色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('rank_othercolor',$yacht_config['rank_othercolor']);?>
					<span class="help-block">大屏排行榜4-10名边界颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-success">排行榜默认用户名称</span></label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="rank_default_name" class="form-control" value="<?php  echo $yacht_config['rank_default_name'];?>" />
						<span class="help-block">排行榜默认用户名称 注:名称需简练</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏下一轮按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_next', $yacht_config['rank_next']);?>
						<span class="help-block">大屏下一轮按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏开重玩按钮图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('rank_reset', $yacht_config['rank_reset']);?>
						<span class="help-block">大屏开重玩按钮图片 规格大小为202*83 png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">主要背景色</label>
					<div class="col-sm-9">
					<?php  echo tpl_form_field_color('welcome_bgcolor',$yacht_config['welcome_bgcolor']);?>
					<span class="help-block">注:此项设置在未开始背景色以及大屏排行榜背景色、微信以及大屏倒计时背景均会生效</span>
					</div>
				</div>
			</div>
			</div>
			<!--wechat config-->
			<div class="panel panel-default">
			<div class="panel-heading">微信设置</div>					
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否推送</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="1" <?php  if($yacht_config['send_tpl'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="send_tpl" value="2" <?php  if($yacht_config['send_tpl'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">注：仅仅对认证服务号并且是已经关注的粉丝有效</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">中奖用户是否准许再次参与</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="award_again" value="1" <?php  if($yacht_config['award_again'] == '1') { ?>checked="true"<?php  } ?> >是
						</label>
						<label class="radio-inline">
							<input type="radio" name="award_again" value="2" <?php  if($yacht_config['award_again'] == '2') { ?>checked="true"<?php  } ?> >否
						</label>
						<span class="help-block">中奖用户是否准许再次参与</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_title" class="form-control" value="<?php  echo $yacht_config['wechat_title'];?>" />
						<span class="help-block">微信标题</span>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏logo图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_yacht_logo', $yacht_config['wechat_yacht_logo']);?>
						<span class="help-block">微信游戏logo图片 规格大小为424*424px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('wechat_bg', $yacht_config['wechat_bg']);?>
						<span class="help-block">微信游戏背景图片 规格大小为640*1488px png图片</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信游戏摇动音效</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_audio('wechat_shake_music',$yacht_config['wechat_shake_music'])?>
						<span class="help-block"><span class="label label-success"> 微信游戏摇动音效 请填写带有http://的MP3格式的音乐链接</span></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">微信底部版权</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text"  name="wechat_copyright" class="form-control" value="<?php  echo $yacht_config['wechat_copyright'];?>" />
						<span class="help-block">微信底部版权 此项留空将不显示版权</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
			</div>
	</div>
</div>
</form>
<?php  } else if($oop=='sailing_style') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">冲浪比赛大屏角色风格设置</div>	
	<div class="panel-body">
		<ul  id="style_lists">
								<?php  if(is_array($sailing_style)) { foreach($sailing_style as $key => $row) { ?>
								<li class="list-group-item" id="yyy_style_<?php  echo $key;?>">
									<input type="hidden" name="styleid[]" value="<?php  echo $row['styleid'];?>" />
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示状态</label>
										<div class="col-sm-9">
												<input type="hidden" name="style_show[]" value="<?php  if(!empty($row['style_show'])) { ?><?php  echo $row['style_show'];?><?php  } else { ?>1<?php  } ?>" class="style_show" />
												<a class="btn btn-default <?php  if(empty($row['style_show'])||$row['style_show']==1) { ?>btn-success<?php  } ?> js-btn-select" data-id="1">显示</a>
												<a class="btn btn-default <?php  if($row['style_show']==2) { ?>btn-success<?php  } ?> js-btn-select" data-id="2">隐藏</a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">风格名称</label>
										<div class="col-sm-9">
											<input type="text"  class="form-control" name="style_name[]"  value="<?php  echo $row['style_name'];?>" />
											<span class="help-block"><span class="label label-success">风格名称</span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg1[]', $row['topbg1']);?>
											<span class="help-block">大屏顶部背景1、推荐尺寸1920*540px png</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg2[]', $row['topbg2']);?>
											<span class="help-block">大屏顶部背景2、推荐尺寸1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道背景</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('tracklist[]', $row['tracklist']);?>
											<span class="help-block">大屏轨道背景、推荐尺寸1920*540px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道结束线</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('endline[]', $row['endline']);?>
											<span class="help-block">大屏轨道结束线、推荐尺寸15*100px</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_0', $row['user_0']);?>
											<span class="help-block">角色1动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_1', $row['user_1']);?>
											<span class="help-block">角色2动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_2', $row['user_2']);?>
											<span class="help-block">角色3动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_3', $row['user_3']);?>
											<span class="help-block">角色4动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_4', $row['user_4']);?>
											<span class="help-block">角色5动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_5', $row['user_5']);?>
											<span class="help-block">角色6动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_6', $row['user_6']);?>
											<span class="help-block">角色7动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_7', $row['user_7']);?>
											<span class="help-block">角色8动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_8', $row['user_8']);?>
											<span class="help-block">角色9动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_9', $row['user_9']);?>
											<span class="help-block">角色10动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">水波浪</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('lunzia', $row['lunzia']);?>
											<span class="help-block">水波浪【4个图】 400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]',$row['game_music'])?>
											<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
									<div class="form-group">
											<div class="col-sm-8  col-xs-12 col-md-1" >
												<a href="javascript:;" class="btn btn-danger js_del" data-id="<?php  echo $key;?>">删除</a>
											</div>
									</div>
								</li>
								<?php  } } ?>
							</ul>
		<div class="form-group" style="text-align:Center;margin-top:20px;">
			<div class="col-sm-12">
				<a href="javascript:;" class="btn btn-success" id="addStyle"><b>+</b>添加大屏角色风格</a>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<script>
$(function(){
	$('#addStyle').on('click',function(){
		var index = randomWord(false,10).toLowerCase();
		var style= $(".style_Box").html();
		var html = '<li class="list-group-item" id="yyy_style_'+index+'">';
			html += '<input type="hidden" name="styleid[]" value="'+index+'" />';
			html += style;
			html += '<div class="form-group"><div class="col-sm-8  col-xs-12 col-md-1" ><a href="javascript:;" class="btn btn-danger js_del" data-id="'+index+'">删除</a></div></div>';
			html += '</li>';
		$("#style_lists").append(html);
	});
	$('body').on('click','.js_del',function(){
		var index = $(this).attr('data-id');
		$("#yyy_style_"+index).remove();
	});
	$('body').on('click','.js-btn-select',function(){
		var val = $(this).attr('data-id');
		$(this).parent().find('input').val(val);
		$(this).parent().find('a').removeClass('btn-success');
		$(this).addClass('btn-success');
	});
});
function randomWord(randomFlag, min, max){
    var str = "",
        range = min,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
 
    // 随机产生
    if(randomFlag){
        range = Math.round(Math.random() * (max-min)) + min;
    }
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<div class="style_Box" style="display:none">
	<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">显示状态</span></label>
			<div class="col-sm-9">
					<input type="hidden" name="style_show[]" value="1" class="style_show">
					<a class="btn btn-default btn-success js-btn-select" data-id="1">显示</a>
					<a class="btn btn-default js-btn-select" data-id="2">隐藏</a>
			</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">风格名称</span></label>
		<div class="col-sm-9">
			<input type="text"  class="form-control" name="style_name[]"  >
			<span class="help-block"><span class="label label-success">风格名称</span></span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景1</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('topbg1[]','');?>
			<span class="help-block">大屏顶部背景1、推荐尺寸1920*540px png</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏顶部背景2</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('topbg2[]','');?>
			<span class="help-block">大屏顶部背景2、推荐尺寸1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道背景</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('tracklist[]','');?>
			<span class="help-block">大屏轨道背景、推荐尺寸1920*540px</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道结束线</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_image('endline[]', '');?>
			<span class="help-block">大屏轨道结束线、推荐尺寸15*100px</span>
		</div>
	</div>
	
	<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_0', array());?>
											<span class="help-block">角色1动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_1',array());?>
											<span class="help-block">角色2动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_2', array());?>
											<span class="help-block">角色3动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_3', array());?>
											<span class="help-block">角色4动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_4', array());?>
											<span class="help-block">角色5动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_5', array());?>
											<span class="help-block">角色6动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_6',array());?>
											<span class="help-block">角色7动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_7',array());?>
											<span class="help-block">角色8动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_8',array());?>
											<span class="help-block">角色9动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('user_9',array());?>
											<span class="help-block">角色10动作图、共计4张，推荐尺寸400*400px</span>
										</div>
									</div>
									
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">水波浪</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_multi_image('lunzia','');?>
			<span class="help-block">水波浪【4个图】 推荐尺寸400*400px</span>
		</div>
	</div>								
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
		<div class="col-sm-9">
			<?php  echo tpl_form_field_audio('game_music[]','')?>
			<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
		</div>
	</div>
</div>
<?php  } else if($oop=='yacht_style') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
	<div class="panel-heading">游艇比赛大屏角色风格设置</div>	
	<div class="panel-body">
		<ul  id="style_lists">
								<?php  if(is_array($yacht_style)) { foreach($yacht_style as $key => $row) { ?>
								<li class="list-group-item" id="yyy_style_<?php  echo $key;?>">
									<input type="hidden" name="styleid[]" value="<?php  echo $row['styleid'];?>" />
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示状态</label>
										<div class="col-sm-9">
												<input type="hidden" name="style_show[]" value="<?php  if(!empty($row['style_show'])) { ?><?php  echo $row['style_show'];?><?php  } else { ?>1<?php  } ?>" class="style_show" />
												<a class="btn btn-default <?php  if(empty($row['style_show'])||$row['style_show']==1) { ?>btn-success<?php  } ?> js-btn-select" data-id="1">显示</a>
												<a class="btn btn-default <?php  if($row['style_show']==2) { ?>btn-success<?php  } ?> js-btn-select" data-id="2">隐藏</a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">风格名称</label>
										<div class="col-sm-9">
											<input type="text"  class="form-control" name="style_name[]"  value="<?php  echo $row['style_name'];?>" />
											<span class="help-block"><span class="label label-success">风格名称</span></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg1[]', $row['topbg1']);?>
											<span class="help-block">大屏顶部背景1、推荐尺寸1920*540px png</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道结束线</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('endline[]', $row['endline']);?>
											<span class="help-block">大屏轨道结束线、推荐尺寸15*100px</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_0[]', $row['user_0']);?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_1[]', $row['user_1']);?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_2[]', $row['user_2']);?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_3[]', $row['user_3']);?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_4[]', $row['user_4']);?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_5[]', $row['user_5']);?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_6[]', $row['user_6']);?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_7[]', $row['user_7']);?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_8[]', $row['user_8']);?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_9[]', $row['user_9']);?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">水波浪</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('lunzia', $row['lunzia']);?>
											<span class="help-block">波浪图、共计12张，推荐尺寸730*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]',$row['game_music'])?>
											<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
									<div class="form-group">
											<div class="col-sm-8  col-xs-12 col-md-1" >
												<a href="javascript:;" class="btn btn-danger js_del" data-id="<?php  echo $key;?>">删除</a>
											</div>
									</div>
								</li>
								<?php  } } ?>
							</ul>
		<div class="form-group" style="text-align:Center;margin-top:20px;">
			<div class="col-sm-12">
				<a href="javascript:;" class="btn btn-success" id="addStyle"><b>+</b>添加大屏角色风格</a>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</div>
</form>
<script>
$(function(){
	$('#addStyle').on('click',function(){
		var index = randomWord(false,10).toLowerCase();
		var style= $(".style_Box").html();
		var html = '<li class="list-group-item" id="yyy_style_'+index+'">';
			html += '<input type="hidden" name="styleid[]" value="'+index+'" />';
			html += style;
			html += '<div class="form-group"><div class="col-sm-8  col-xs-12 col-md-1" ><a href="javascript:;" class="btn btn-danger js_del" data-id="'+index+'">删除</a></div></div>';
			html += '</li>';
		$("#style_lists").append(html);
	});
	$('body').on('click','.js_del',function(){
		var index = $(this).attr('data-id');
		$("#yyy_style_"+index).remove();
	});
	$('body').on('click','.js-btn-select',function(){
		var val = $(this).attr('data-id');
		$(this).parent().find('input').val(val);
		$(this).parent().find('a').removeClass('btn-success');
		$(this).addClass('btn-success');
	});
});
function randomWord(randomFlag, min, max){
    var str = "",
        range = min,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
 
    // 随机产生
    if(randomFlag){
        range = Math.round(Math.random() * (max-min)) + min;
    }
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
<div class="style_Box" style="display:none">
	<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">显示状态</span></label>
			<div class="col-sm-9">
					<input type="hidden" name="style_show[]" value="1" class="style_show">
					<a class="btn btn-default btn-success js-btn-select" data-id="1">显示</a>
					<a class="btn btn-default js-btn-select" data-id="2">隐藏</a>
			</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">风格名称</span></label>
		<div class="col-sm-9">
			<input type="text"  class="form-control" name="style_name[]"  >
			<span class="help-block"><span class="label label-success">风格名称</span></span>
		</div>
	</div>
	<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏背景1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('topbg1[]', $row['topbg1']);?>
											<span class="help-block">大屏顶部背景1、推荐尺寸1920*540px png</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏轨道结束线</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('endline[]', $row['endline']);?>
											<span class="help-block">大屏轨道结束线、推荐尺寸15*100px</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色1</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_0[]','');?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色2</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_1[]','');?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色3</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_2[]','');?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色4</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_3[]','');?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色5</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_4[]','');?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色6</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_5[]','');?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色7</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_6[]','');?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色8</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_7[]','');?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色9</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_8[]','');?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">角色10</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_image('user_9[]','');?>
											<span class="help-block">推荐尺寸630*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">水波浪</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_multi_image('lunzia','');?>
											<span class="help-block">波浪图、共计12张，推荐尺寸730*630px</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏进行中背景音效</label>
										<div class="col-sm-9">
											<?php  echo tpl_form_field_audio('game_music[]','')?>
											<span class="help-block"><span class="label label-success">比如：摇汽车、汽车跑动的声音 不设置则不播放 请填写带有http://的MP3格式的音乐链接</span></span>
										</div>
									</div>
</div>
<?php  } ?>
<?php  } else if($op=='oss_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
		<div class="panel panel-default">
		<div class="panel-heading">阿里云oss设置</div>	
		<div class="panel-body">
				<div class="form-group open_movie" >
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">阿里云 Access Key ID</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['oss_key'];?>" class="form-control" name="oss_key" >
						<span class="help-block">阿里云 Access Key ID 注意:此项不填写即为微信端上传的图片等全部存储到本地服务器</span>
					</div>
				</div>
				<div class="form-group open_movie" >
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">阿里云 Access Key Secret</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['oss_secret'];?>" class="form-control" name="oss_secret" >
						<span class="help-block">阿里云 Access Key Secret</span>
					</div>
				</div>
				<div class="form-group open_movie" >
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">阿里云 buckets名称</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['oss_name'];?>" class="form-control" name="oss_name" >
						<span class="help-block">阿里云 buckets名称</span>
					</div>
				</div>
				<div class="form-group open_movie" >
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">阿里云 buckets地区位置</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['oss_location'];?>" class="form-control" name="oss_location" >
						<span class="help-block">阿里云 buckets地区位置</span>
					</div>
				</div>
				<div class="form-group open_movie" >
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">阿里云 buckets自定义域名</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['oss_url'];?>" class="form-control" name="oss_url" >
						<span class="help-block">阿里云 buckets自定义域名 注:格式为:http://域名/ 不填写将使用oss默认域名 该域名请尽量开启cdn加速</span>
					</div>
				</div>
		</div>
		<div class="panel-body">
			<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		</div>
</div>
</form>
<?php  } else if($op=='tpl_sys') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
		<div class="panel-heading">支付设置</div>	
		<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">中奖消息模板</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['zj_tpl'];?>" class="form-control" name="zj_tpl" >
						<span class="help-block">所在行业   IT科技 互联网|电子商务，IT科技 IT软件与服务  开奖结果通知</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">答题模板消息</label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="dt_tpl" placeholder="模板消息id" value="<?php  echo $sys_config['dt_tpl'];?>">
						<span class="help-block"><span class="label label-success">模板消息id 行业:IT科技 - 互联网|电子商务 搜答题通知</span></span>
					</div>
				</div>
				<div class="form-group jy_open">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">搭讪消息模板</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['chat_tpl'];?>" class="form-control" name="chat_tpl" >
						<span class="help-block">所在行业   IT科技 互联网|电子商务，IT科技 IT软件与服务  模板库搜【消息发送状态提醒】</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">点歌成功提醒模板</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['song_tpl'];?>" class="form-control" name="song_tpl" >
						<span class="help-block">所在行业   IT科技 互联网|电子商务，IT科技 IT软件与服务  点歌成功提醒</span>
					</div>
				</div>
		</div>
		<div class="panel-body">
			<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		</div>
</div>
</form>
<?php  } else if($op=='tx_config') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
		<div class="panel-heading">霸屏上墙收入提现设置<br>
			<span class="label label-danger">温馨提醒:当您未给具体的账户设置提现设置时，用户提现默认将采用此处的设置提现</span></div>	
		<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏上墙收入提现最小金额</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="num" name="tx_min_money" class="form-control"  value="<?php  echo $sys_config['tx_min_money'];?>" />
							<span class="input-group-addon">元</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏上墙收入提现时间间隔</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="num" name="tx_pl" class="form-control"  value="<?php  echo $sys_config['tx_pl'];?>"  />
							<span class="input-group-addon">天</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏上墙收入提现费率</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['tx_fl'];?>" class="form-control" name="tx_fl" >
						<span class="help-block">请填写小于1的小数、保留2位小数 如:填写为0.10 即为10%</span>
					</div>
				</div>
				
		</div>
</div>
<div class="panel panel-default">
		<div class="panel-heading">会议报名收入提现设置<br>
			<span class="label label-danger">温馨提醒:当您未给具体的账户设置提现设置时，用户提现默认将采用此处的设置提现</span></div>	
		<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">会议报名收入提现最小金额</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="num" name="bmtx_min_money" class="form-control"  value="<?php  echo $sys_config['bmtx_min_money'];?>" />
							<span class="input-group-addon">元</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">会议报名收入提现时间间隔</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="num" name="bmtx_pl" class="form-control"  value="<?php  echo $sys_config['bmtx_pl'];?>"  />
							<span class="input-group-addon">天</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">会议报名收入提现费率</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['bmtx_fl'];?>" class="form-control" name="bmtx_fl" >
						<span class="help-block">请填写小于1的小数、保留2位小数 如:填写为0.10 即为10%</span>
					</div>
				</div>
				
		</div>
</div>
<div class="panel panel-default">
		<div class="panel-heading">红包【霸屏上墙抢得红包】提现设置
		</div>	
		<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现方式</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="fans_tx_type" value="1"  <?php  if($sys_config['fans_tx_type'] == '1') { ?>checked="true"<?php  } ?>> 现金红包提现
						</label>
						<label class="radio-inline">
							<input type="radio" name="fans_tx_type" value="2"   <?php  if($sys_config['fans_tx_type'] == '2') { ?>checked="true"<?php  } ?>>企业支付提现
						</label>
					</div>
				</div>	
		</div>
		<div class="panel-body">
			<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		</div>
</div>
</form>
<?php  } else if($op=='redpack_wallet') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" value="<?php  echo $sys_config['id'];?>"  name="sys_id">
<div class="panel panel-default">
		<div class="panel-heading">红包账户设置</div>	
		<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">充值最小金额</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="num" name="redpack_min" class="form-control"  value="<?php  echo $sys_config['redpack_min'];?>" />
							<span class="input-group-addon">元</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">充值费率</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $sys_config['redpack_fl'];?>" class="form-control" name="redpack_fl" >
						<span class="help-block">请填写小于1的小数、保留2位小数 如:填写为0.10 即为10%</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包账户消费开始记录时间</label>
					<div class="col-sm-9">
						<?php echo _tpl_form_field_date('redpack_start_time',empty($sys_config['redpack_start_time'])?time():$sys_config['redpack_start_time'])?>
						<span class="help-block">红包账户消费开始记录时间 注:此处时间必须设置为安装当天的时间，并且不可随意更改，随意更改将导致用户红包账户金额异常</span>
					</div>
				</div>
				
				
		</div>
		<div class="panel-body">
			<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		</div>
</div>
</form>
<?php  } else if($op=='adv_config') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($oop=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sys_config', array('op'=>'adv_config','oop'=>'list'))?>"><i class="fa fa-cog"></i> 广告列表</a>
	</li>
	<?php  if($oop=='edit') { ?><li class="active">
		<a><i class="fa fa-cog"></i> <?php  if(empty($adv_id)) { ?>新增<?php  } else { ?>编辑<?php  } ?>广告</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'adv_config','oop'=>'edit'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增广告</a>
	</li>

</ul>
<div class="bd_nav_list">
	<div class="btn-group">
				<a class="btn btn-danger" href="<?php  echo $this->createWebUrl('sys_config', array('op'=>'adv_config','oop'=>'reset'))?>" onclick="return confirm('清空将无法恢复，确认吗？');return false;"><i class="fa fa-times"></i> 清空广告数据</a>
	</div>
</div>
<?php  if($oop=='list') { ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			    系统广告列表
		</div>
		<div class="panel-body table-responsive">
			<table class="table table-hover" style="display:auto;">
				<thead class="navbar-inner">
					<tr >
					   <th style="width:5%;text-align:center">排序</th>
					   <th style="width:30%;text-align:center">广告标题</th>
					   <th style="width:10%;text-align:center">广告图标</th>
					   <th style="width:20%;text-align:center">广告链接</th>
					   <th style="width:10%;text-align:center">状态</th>
                       <th style="width:15%;text-align:center">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($advlists)) { foreach($advlists as $key => $item) { ?>
					<tr>
						<td class="row-hover" style="text-align:center">
								<span class="label label-success"><?php  echo $item['displayorder'];?></span>
					    </td>
					  	<td class="row-hover" style="text-align:center">
								<div class="mainContent">
									<?php  echo $item['adv_title'];?>
								</div>
					    </td>
						<td class="row-hover" style="text-align:center">
							<img src="<?php  echo tomedia($item['adv_icon'])?>" width="98px" height="98px" />
					    </td>
						<td style="text-align:center">
							<div class="mainContent">
									<?php  echo $item['adv_url'];?>

									
								</div>
						</td>
						<td style="text-align:center"><?php  if($item['status']==1) { ?><span class="label label-success">显示</span><?php  } else { ?><span class="label label-info">不显示</span><?php  } ?></td>

						<td style="text-align:center">
							<a class="btn btn-danger" href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'adv_config','oop'=>'edit','adv_id'=>$item['id']))?>">
								编辑
								<i class="fa fa-edit"></i>
							</a>
							<a class="btn btn-danger" href="<?php  echo $this->createWebUrl('sys_config',array('op'=>'adv_config','oop'=>'del','adv_id'=>$item['id']))?>"
								 onclick="return confirm('删除将无法恢复，确认吗？');return false;">删除
								<i class="fa fa-times"></i>
							</a>
						</td>
					</tr>
					<?php  } } ?>
				</tbody>
				
			</table>
		</div>
		<div class="pager_box">
			<?php  echo $pager;?>
		</div>
	</div>
<?php  } else if($oop=='edit') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<input type="hidden" name="adv_id" value="<?php  echo $adv['id'];?>" />
<div class="panel panel-default">
		<div class="panel-heading"><?php  if(empty($adv_id)) { ?>新增<?php  } else { ?>编辑<?php  } ?>广告</div>	
		<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="status" value="1"  <?php  if($adv['status'] == '1') { ?>checked="true"<?php  } ?>> 显示
						</label>
						<label class="radio-inline">
							<input type="radio" name="status" value="2"   <?php  if($adv['status'] == '2') { ?>checked="true"<?php  } ?>>隐藏
						</label>
					</div>
				</div>	
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">广告排序</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $adv['displayorder'];?>" class="form-control" name="displayorder" >
						<span class="help-block">广告排序 默认0</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">广告标题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $adv['adv_title'];?>" class="form-control" name="adv_title" >
						<span class="help-block">广告标题 尽量精简</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">广告图标</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('adv_icon', $adv['adv_icon']);?>
						<span class="help-block">广告图标 规格98*98</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">广告链接</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_link('adv_url', $adv['adv_url']);?>
						<span class="help-block">广告链接 手动请填写完整链接</span>
					</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
		</div>
</div>
</form>
<?php  } ?>
<?php  } else if($op=='tempqr') { ?>
<form action="" method="post" class="form-horizontal"  id="form1">
<link href="//cdn.bootcss.com/jqueryui/1.12.0/jquery-ui.min.css" rel="stylesheet">
<script src="<?php echo MODULE_URL;?>template/resource/js/global.js"></script>
<input type="hidden" name="temp_id" value="<?php  echo $temp_qr_config['id'];?>" />
<div class="panel panel-default">
	<div class="panel-heading">二维码设置</div>	
	<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">二维码宣传logo</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('logo', $temp_qr_config['logo']);?>
						<span class="help-block">二维码宣传logo 建议尺寸 48px*48px 白色底图 jpg格式图片  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">文字描述</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="word" id="word" placeholder="文字描述" value="<?php  echo $temp_qr_config['word'];?>">
						<span class="help-block"><span class="label label-success">文字描述 尽量精简</span></span>
					</div>
				</div>
	</div>
</div>
<div class="panel panel-default">
		<div class="panel-heading">
			二维码设计
		</div>
		<style>
			.iphone_emulator {
				width: 350px;
				border: 1px solid #e5e5e5;
				border-radius: 18px 18px 0 0;
				padding-bottom: 15px;
			}
			.iphone_head {
				height: 70px;
				background: url('/web/resource/images/app/iphone_head.png') center center no-repeat;
			}
			.iphone_titlebar {
				height: 64px;
				background: url('/web/resource/images/app/titlebar.png') center center no-repeat;
			}
			.poster_wrapper {
				width: 90%;
				margin: 0 auto;
				padding: 0;
			}
			.poster_wrapper table {
				width: 100%;
			}
			.poster_wrapper table td {
				vertical-align: top;
			}
			.poster_designer {
				width: 320px;
				margin: 0 auto;
				height: 504px;
				overflow: hidden;
				position: relative;
				background: #ececec;
			}
			.poster_designer .widget {
				overflow: hidden;
			}
			.poster_designer .widget .fa-close {
				position: absolute;
				top: 5%;
				right: 10%;
				cursor: pointer;
				color: red;
				font-size: 15px;
			}
			.poster_designer .widget_avatar .fa-close {
				position: absolute;
				top: 5%;
				right: 10%;
				font-size: 15px;
			}
			.poster_designer .widget_active {
				border: 1px solid #00a0f8 !important;
			}
			.poster_designer .widget {
				position: absolute;
				top: 0;
				left: 0;
				cursor: move;
				border: 1px solid #ccc;
				overflow: hidden;
			}
			.poster_designer .widget_avatar {
				width: 56px;
				height: 56px;
				/*border-radius: 50%;*/
			}
			.poster_designer .widget_avatar img {
				width: 100%;
				height: 100%;
				margin: 0px;
			}
			.poster_designer .widget_nickname,
			.poster_designer .widget_mobile,
			.poster_designer .widget_address {
				color: #3d4145;
				font-size: 16px;
				line-height: 1;
				height: auto !important;
			}
			.poster_designer .widget_mobile {
				min-width: 110px;
			}
			.poster_designer .widget_address {
				min-width: 200px;
			}
			.poster_designer .widget img {
				max-width: 100%;
			}
		</style>
		<div class="panel-body">
			<div class="poster_wrapper">
				<table>
					<tbody><tr>
						<td width="320">
							<div class="iphone_emulator">
								<div class="iphone_head"></div>
								<div class="iphone_titlebar"></div>
								<div class="poster_designer" style="background-image: none; background-repeat: no-repeat; background-size: contain;"></div>
							</div>
							<span class="help-block">预览界面尺寸为：320*504</span>
						</td>
						<td width="20"></td>
						<td>
							<div class="poster_setting">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 col-md-3 col-lg-2 col-xs-12 control-label">
												背景图
											</label>
											<div class="col-sm-9 col-md-9 col-xs-12">
												<div class="input-group ">
													<input type="text" name="bgimg" class="form-control" autocomplete="off" value="<?php  echo $temp_qr_config['bgimg'];?>">
													<span class="input-group-btn">
														<button class="btn btn-default upload_img_btn" type="button">上传背景</button>
														
													</span>
												</div>
												<div class="input-group " style="margin-top:.5em;">
													<img src="<?php  if($temp_qr_config['bgimg']) { ?><?php  echo tomedia($temp_qr_config['bgimg'])?><?php  } else { ?><?php  echo $_W['siteroot'];?>web/resource/images/nopic.jpg<?php  } ?>" onerror="this.src='<?php  echo $_W['siteroot'];?>web/resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="150">
													<em class="close delete_img_btn" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片">×</em>
												</div>
												<span class="help-block">规定尺寸（像素）：640*1008<br>注意:背景图尺寸不规范可能导致显示错位、请严格按照标准设计背景</span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 col-md-3 col-lg-2 col-xs-12 control-label">
												基础部件
											</label>
											<div class="col-sm-9 col-md-9 col-xs-12">
												<button class="btn btn-default widget_btn" data-type="qrcode" data-has-param="0" type="button">二维码</button>
												<button class="btn btn-default widget_btn" data-type="avatar" data-has-param="0" type="button">logo</button>
												<button class="btn btn-default widget_btn" data-type="title" data-has-param="1" type="button">文字描述</button>
											</div>
										</div>
										<div class="widget_param"></div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
				</table>
			</div>
			<div class="form-group col-sm-12">
				<input type="submit" class="btn btn-primary col-lg-1" name="submit" value="提交">
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		</div>
	</div>
<script>
	var PosterWidgets = new Array();
	<?php  if($temp_qr_config['config']) { ?>
	<?php  if(is_array($temp_qr_config['config'])) { foreach($temp_qr_config['config'] as $k => $widget) { ?>
	PosterWidgets[<?php  echo $k;?>] = {
		type: '<?php  echo $widget["type"];?>',
		top: '<?php  echo $widget["top"];?>',
		left: '<?php  echo $widget["left"];?>',
		width: '<?php  echo $widget["width"];?>',
		height: '<?php  echo $widget["height"];?>',
		color: '<?php  echo $widget["color"];?>',
		fontsize: '<?php  echo $widget["fontsize"];?>',
		imgpath: '<?php  echo $widget["imgpath"];?>'
	};
	<?php  } } ?>
	<?php  } ?>
		require(['jquery.ui', 'util'], function($, util){
		$('form').bind('submit', function(){
			
			return true;
		});
		//海报
		var Poster = {
			debug: function(){
				return true;
			},
			run: function(){
				Poster.log('=== Poster running ===');
				//初始化元素
				Poster.init_element();

				//初始化事件
				Poster.init_event();

				//初始化设计器
				Poster.init_designer();
			},
			init_element: function(){
				Poster.log('-- init_element');
				Poster.wrapper = $('.poster_wrapper');
				Poster.designer = $('.poster_designer', Poster.wrapper);
				Poster.widgets = $('.widget', Poster.designer);
				Poster.widgetParam = $('.widget_param', Poster.wrapper);
				Poster.formGroup = $('.form-group', Poster.widgetParam);
				Poster.widgetBtn = $('.widget_btn', Poster.wrapper);
				Poster.widgetActive = $('.widget_active', Poster.wrapper);
				Poster.bgImgInput = $('input[name=bgimg]', Poster.wrapper);
				Poster.uploadImgBtn = $('.upload_img_btn', Poster.wrapper);
				Poster.deleteImgBtn = $('.delete_img_btn', Poster.wrapper);
				Poster.colorPicker = $('.colorpicker', Poster.wrapper);
				Poster.colorClean = $('.colorclean', Poster.wrapper);
				Poster.fontSize = $('input[name=fontsize]', Poster.wrapper);
				Poster.systemBgImg = $('.system_bgimg_wrap img');
				Poster.systemBgImgModal = $('#system_bgimg_modal');
			},
			init_event: function(){
				Poster.log('-- init_event');
				//背景图
				Poster.init_img_component();

				//海报组件
				Poster.init_widget_btn();
			},
			init_designer: function(){
				Poster.log('-- init_designer');
				//初始化背景
				Poster.init_bgimg();

				//初始化组件
				Poster.init_widget();

				//初始化事件
				Poster.init_widget_event();
			},
			init_img_component: function(){
				Poster.log('-- init_img_component');

				var uploadImgCallback = function(ipt, url){
					Poster.log('@@ callback upload bgimg start...');
					if (url.url) {
						//var ipt = Poster.uploadImgBtn.parent().prev(),
						var img = ipt.parent().next().children();
						if (img.length > 0) {
							img.get(0).src = url.url;
						}
						ipt.val(url.attachment);
						ipt.attr("filename", url.filename);
						ipt.attr("url", url.url);

						//初始化图片
						Poster.init_bgimg();
						Poster.set_image_param2widget();
						Poster.refresh_widget_attr();
					}
					if (url.media_id) {
						if (img.length > 0) {
							img.get(0).src = "";
						}
						ipt.val(url.media_id);
					}
					Poster.log('@@ callback upload bgimg end');
				};

				//上传图片
				Poster.uploadImgBtn.each(function(){
					var ele = this;
					if (typeof($(ele).attr('data-click')) == 'undefined') { //避免重复绑定
						Poster.log('$$ uploadImgBtn binding click');
						$(ele).attr('data-click', 1).bind('click', function(){
							
							Poster.log('++ uploadImgBtn start...');
							var btn = $(this);
							var ipt = btn.parent().prev();
							var val = ipt.val();
							//var img = ipt.parent().next().children();
							options = {'global': false, 'class_extra': '', 'direct': true, 'multiple': false};
							util.image(val, function(url){
								uploadImgCallback(ipt, url);
							}, null, options);
							Poster.log('++ uploadImgBtn end');
						});
					}
				});

				//删除图片
				Poster.deleteImgBtn.each(function(){
					var ele = this;
					if (typeof($(ele).attr('data-click')) == 'undefined') { //避免重复绑定
						Poster.log('$$ deleteImgBtn binding click');
						$(ele).attr('data-click', 1).bind('click', function () {
							Poster.log('++ deleteImgBtn start...');
							$(this).prev().attr("src", "<?php  echo $_W['siteroot'];?>web/resource/images/nopic.jpg");
							$(this).parent().prev().find("input").val("");
							//初始化图片
							Poster.init_bgimg();
							Poster.set_image_param2widget();
							Poster.refresh_widget_attr();
							Poster.log('++ deleteImgBtn end');
						});
					}
				});

				//系统背景图
				Poster.systemBgImg.each(function(){
					var ele = this;
					//mouseover
					if (typeof($(ele).attr('data-mouseover')) == 'undefined') { //避免重复绑定
						Poster.log('$$ systemBgImg binding mouseover');
						$(ele).attr('data-mouseover', 1).bind('mouseover', function () {
							$(this).css({
								'border-width': '3px',
								'border-color': '#ccc',
							});
						});
					}
					//mouseout
					var ele = this;
					if (typeof($(ele).attr('data-mouseout')) == 'undefined') { //避免重复绑定
						Poster.log('$$ systemBgImg binding mouseout');
						$(ele).attr('data-mouseout', 1).bind('mouseout', function () {
							$(this).css({
								'border-width': '2px',
								'border-color': '#ececec',
							});
						});
					}
					//click
					if (typeof($(ele).attr('data-click')) == 'undefined') { //避免重复绑定
						Poster.log('$$ systemBgImg binding click');
						$(ele).attr('data-click', 1).bind('click', function () {
							Poster.log('++ systemBgImg start...');
							var imgurl = $(this).attr('src'),
								imgpath = $(this).attr('data-img-path'),
								filename = $(this).attr('data-filename'),
								ipt = Poster.uploadImgBtn.parent().prev();

							ipt.val(imgpath);
							var url = {
								url: imgurl,
								attachment: imgpath,
								filename: filename,
							};
							uploadImgCallback(ipt, url);
							Poster.systemBgImgModal.modal('hide');
							Poster.log('++ systemBgImg end');
						});
					}
				});
			},
			init_color_component: function(){
				Poster.log('-- init_color_component');
				Poster.colorPicker.each(function(){
					var ele = this;
					if (typeof($(ele).attr('data-color-picker')) == 'undefined') { //避免重复绑定
						Poster.log('$$ colorPicker binding colorpicker');
						$(ele).attr('data-color-picker', 1);
						util.colorpicker(ele, function(color){
							var color_str = color.toHexString();
							$(ele).parent().prev().prev().val(color_str);
							$(ele).parent().prev().css('background-color', color_str);
							Poster.init_widget_param('param2widget');
							Poster.refresh_widget_attr();
						});
					}
				});
				Poster.colorClean.each(function(){
					var ele = this;
					if (typeof($(ele).attr('data-click')) == 'undefined') { //避免重复绑定
						Poster.log('$$ colorClean binding click');
						$(ele).attr('data-click', 1).bind('click', function () {
							Poster.log('++ colorClean start...');
							$(this).parent().prev().prev().val('#3d4145');
							$(this).parent().prev().css('background-color', '#3d4145');
							Poster.init_widget_param('param2widget');
							Poster.log('++ colorClean end');
						});
					}
				});
			},
			init_fontsize_component: function(){
				Poster.log('-- init_fontsize_component');
				Poster.fontSize.each(function(){
					var ele = this;
					if (typeof($(ele).attr('data-keyup')) == 'undefined') { //避免重复绑定
						Poster.log('$$ fontSize binding keyup');
						$(ele).attr('data-keyup', 1).bind('keyup', function () {
							Poster.log('++ fontSize start...');
							Poster.init_widget_param('param2widget');
							Poster.refresh_widget_attr();
							Poster.log('++ fontSize end');
						});
					}
				});
			},
			init_widget_btn: function(){
				Poster.log('-- init_widget_btn');
				Poster.widgetBtn.bind('click', function(){
					var type = $(this).attr('data-type');
					Poster.log('++ click '+type+' button start...');
					Poster.add_widget(this);
					Poster.log('++ click '+type+' button end');
				});
			},
			init_bgimg: function(){
				Poster.log('-- init_bgimg');
				var val = Poster.bgImgInput.val();
				Poster.set_bgimg(val);
			},
			init_widget: function(){
				Poster.log('-- init_widget');
				var len = PosterWidgets.length, widget;
				if (len) {
					var html;
					for (var i=0; i<len; i++) {
						widget = PosterWidgets[i];
						html = Poster.get_widget_template(widget.type, i+1, false, widget);
						Poster.designer.append(html);
					}
					Poster.init_element();
					Poster.init_widget_event();
					Poster.refresh_widget_attr();
				}
			},
			init_widget_event: function(){
				Poster.log('-- init_widget_event');
				Poster.widgets.each(function(){
					var ele = this,
						index = $(ele).attr('data-index'),
						type = $(ele).attr('data-type');
					//拖拽
					if (!$(ele).attr('data-draggable')) { //避免重复绑定
						Poster.log('$$ widget('+type+':'+index+') binding draggable');
						$(ele).attr('data-draggable', 1).draggable({
							containment: 'parent', //只能在父容器里面拖拽
							start: function(event){
								Poster.drag_widget_start(event, ele);
							},
							stop: function(){
								Poster.drag_widget_stop(event, ele);
							}
						});
					}
					//点击选中
					if (typeof($(ele).attr('data-click')) == 'undefined') { //避免重复绑定
						Poster.log('$$ widget('+type+':'+index+') binding click');
						$(ele).attr('data-click', 1).bind('click', function(event){
							var et = event.target;
							if ($(et).attr('data-type') != $(ele).attr('data-type')
									&& $(et).attr('data-index') != $(ele).attr('data-index')) {
								Poster.active_widget(ele);
							}
							Poster.init_widget_param('widget2param');
						});
					}
					//删除
					var close = $('.fa-close', ele);
				 	if (typeof($(close).attr('data-click')) == 'undefined') { //避免重复绑定
						Poster.log('$$ widget-close('+type+':'+index+') binding click');
						$(close).attr('data-click', 1).bind('click', function(){
							Poster.delete_widget(ele);
						});
					}
					//resizable
					if (typeof($(ele).attr('data-resizable')) == 'undefined') { //避免重复绑定
						Poster.log('$$ widget('+type+':'+index+') binding resizable');
						if (type != 'avatar') {
							$(ele).attr('data-resizable', 1).resizable({
								maxWidth: 320,
								maxHeight: 504,
								resize: function(event, ui) {
									Poster.resize_widget(event, ele);
								}
							});
						}
					}
				});
			},
			init_widget_param: function(direction){
				Poster.log('-- init_widget_param('+direction+')');
				Poster.init_element();
				if (direction == 'param2widget') {
					if (Poster.formGroup.length) {
						var type = Poster.formGroup.attr('data-type');
						eval('Poster.set_' + type + '_'+direction+'()');
					}
				} else if (direction == 'widget2param') {
					if (Poster.widgetActive.length) {
						var type = Poster.widgetActive.attr('data-type');
						eval('Poster.set_' + type + '_'+direction+'()');
					}
				}
				Poster.init_widget_param_event();
			},
			init_widget_param_event: function(){
				Poster.log('-- init_widget_param_event');
				if (Poster.formGroup.length) {
					var type = Poster.formGroup.attr('data-type');
					if (type == 'qrcode') {
						//do nothing
					} else if (type == 'image') {
						Poster.init_img_component();
					} else if (type == 'avatar') {
						//do nothing
					} else if (type == 'nickname') {
						Poster.init_color_component();
						Poster.init_fontsize_component();
					} else if (type == 'title') {
						Poster.init_color_component();
						Poster.init_fontsize_component();
					} else if (type == 'time') {
						Poster.init_color_component();
						Poster.init_fontsize_component();
					}
				}
			},
			add_widget: function(ele){
				Poster.log('>> add_widget start...');
				var type = $(ele).attr('data-type'),
					index = Poster.get_widget_index(type),
					html = Poster.get_widget_template(type, index),
					hasParam = $(this).attr('data-has-param');
				Poster.active_widget();
				Poster.designer.append(html);
				Poster.refresh_designer();
				if (hasParam == '1') {
					html = Poster.get_widget_template(type, index, true);
					Poster.add_widget_param(html, true);
				}
				Poster.log('>> add_widget end');
			},
			add_widget_param: function(html, isInit){
				Poster.log('>> add_widget_param start...');
				Poster.widgetParam.html(html);
				if (isInit) {
					Poster.init_widget_param('param2widget');
				} else {
					Poster.init_widget_param();
				}
				Poster.log('>> add_widget_param end');
			},
			get_widget_index: function(type){
				var index = parseInt(Poster.designer.attr('data-'+type+'-index'));
				index = index?index+1:1;
				Poster.designer.attr('data-'+type+'-index', index);
				return index;
			},
			refresh_designer: function(){
				Poster.log('## refresh_designer start...');
				//dom结构变化，初始化元素
				Poster.init_element();

				//初始化背景
				Poster.init_bgimg();

				//初始化事件
				Poster.init_widget_event();

				//初始化表单参数
				Poster.refresh_widget_attr();
				Poster.log('## refresh_designer end');
			},
			refresh_widget_attr: function(ele){
				Poster.log('## refresh_widget_attr start...');
				//dom结构变化，初始化元素
				Poster.init_element();

				if (!Poster.widgetActive.length) { //清空
					Poster.widgetParam.html('');
				} else {
					if (typeof(ele) == 'undefined') {
						Poster.widgets.each(function(){
							Poster.update_widget_attr(this);
						});
					} else {
						Poster.update_widget_attr(ele);
					}
				}
				Poster.log('## refresh_widget_attr end');
			},
			drag_widget_start: function(event, ele){
				Poster.log('>> drag_widget_start start...');
				var et = event.target;
				if (!$(ele).hasClass('widget_active')
						|| ($(et).attr('data-type') != $(ele).attr('data-type')
							&& $(et).attr('data-index') != $(ele).attr('data-index'))) {
					Poster.active_widget(ele);
				}
				Poster.log('>> drag_widget_start end');
			},
			drag_widget_stop: function(event, ele){
				Poster.log('>> drag_widget_stop start...');
				Poster.refresh_widget_attr(ele);
				Poster.log('>> drag_widget_stop end');
			},
			resize_widget: function(event, ele) {
				Poster.log('>> resize_widget start...');
				Poster.refresh_widget_attr(ele);
				Poster.log('>> resize_widget end');
			},
			active_widget: function(ele){
				Poster.log('>> active_widget start...');
				Poster.widgets.each(function(){
					$(this).removeClass('widget_active');
				});
				ele && $(ele).addClass('widget_active');
				Poster.widgetParam.html('');
				Poster.log('>> active_widget end');
			},
			delete_widget: function(ele){
				Poster.log('>> delete_widget start...');
				var type = $(ele).attr('data-type'),
					index = $(ele).attr('data-index');
				//删除隐藏表单元素
				Poster.delete_widget_attr(type, index);

				//删除widget
				$(ele).remove();

				//初始化widget样式
				Poster.active_widget();

				//清空widget_param内容
				Poster.widgetParam.html('');
				Poster.log('>> delete_widget end');
			},
			delete_widget_attr: function(type, index, name){
				Poster.log('>> delete_widget_attr start...');
				if (typeof(name) == 'undefined') {
					var ele, attrs = ['top', 'left', 'width', 'height', 'color', 'fontsize', 'imgpath'];
					for (var k in attrs) {
						ele = Poster.get_widget_attr_element(type, index, attrs[k]);
						if (ele.length) {
							ele.remove();
						}
					}
				} else {
					var ele = Poster.get_widget_attr_element(type, index, name);
					if (ele.length) {
						ele.remove();
					}
				}
				Poster.log('>> delete_widget_attr end');
			},
			set_bgimg: function(imgurl){
				Poster.log('>> set_bgimg start...');
				var bgimg = 'none';
				if (imgurl != '') {
					imgurl = tomedia(imgurl);
					bgimg = 'url('+imgurl+')';
				}
				Poster.designer.css({
					'backgroundImage': bgimg,
					'backgroundRepeat': 'no-repeat',
					'backgroundSize': 'contain'
				});
				Poster.log('>> set_bgimg end');
			},
			set_widget_attr: function(type, index, name, value){
				var ele = Poster.get_widget_attr_element(type, index, name);
				if (ele.length) {
					ele.val(value);
				} else {
					var html = '<input type="hidden" name="'+type+'['+index+']['+name+']" value="'+value+'"/>';
					Poster.wrapper.append(html);
				}
			},
			update_widget_attr: function(ele){
				var type = $(ele).attr('data-type'),
						index = $(ele).attr('data-index'),
						top = $(ele).css('top'),
						left = $(ele).css('left'),
						width = $(ele).outerWidth(),
						height = $(ele).outerHeight(),
						color = $(ele).css('color'),
						fontsize = $(ele).css('font-size'),
						imgpath = $('img', ele).attr('data-img-path');
				top = top?top:'';
				left = left?left:'';
				width = width?width:'';
				height = height?height:'';
				color = color?color.rgb2Hex():'';
				fontsize = fontsize?fontsize:'';
				imgpath = imgpath?imgpath:'';
				Poster.set_widget_attr(type, index, 'top', top);
				Poster.set_widget_attr(type, index, 'left', left);
				Poster.set_widget_attr(type, index, 'width', width);
				Poster.set_widget_attr(type, index, 'height', height);
				Poster.set_widget_attr(type, index, 'color', color);
				Poster.set_widget_attr(type, index, 'fontsize', fontsize);
				Poster.set_widget_attr(type, index, 'imgpath', imgpath);
			},
			/* set_<type>_param2widget start */
			set_qrcode_param2widget: function(){
				Poster.log('>> set_qrcode_param2widget start...');
				Poster.log('>> set_qrcode_param2widget end');
			},
			set_image_param2widget: function(){
				Poster.log('>> set_image_param2widget start...');
				var type = Poster.formGroup.attr('data-type'),
					index = Poster.formGroup.attr('data-index');
				var ele = $('input', Poster.formGroup);
				if (ele.length) {
					var imgpath = ele.val(), imgurl = '';
					if (imgpath != '' && imgpath.indexOf('nopic.jpg') == -1) {
                        imgurl = tomedia(imgpath);
					} else {
						imgpath = '';
						imgurl = '<?php  echo $_W['siteroot'];?>/web/resource/images/noavatar_middle.gif';
					}
					Poster.widgets.each(function(){
						if ($(this).attr('data-type') == type && $(this).attr('data-index') == index) {
							$('img', this).attr('src', imgurl).attr('data-img-path', imgpath);
						}
					});
				}
				Poster.log('>> set_image_param2widget end');
			},
			set_avatar_param2widget: function(){
				Poster.log('>> set_avatar_param2widget start...');
				Poster.log('>> set_avatar_param2widget end');
			},
			set_nickname_param2widget: function(){
				Poster.log('>> set_nickname_param2widget start...');
				var type = Poster.formGroup.attr('data-type'),
					index = Poster.formGroup.attr('data-index'),
					color = $('input[name="color"]', Poster.formGroup),
					fontsize = $('input[name="fontsize"]', Poster.formGroup);
				if (color.length) {
					Poster.widgets.each(function(){
						if ($(this).attr('data-type') == type && $(this).attr('data-index') == index) {
							$(this).css({
								'color': color.val(),
								'font-size': fontsize.val()+'px'
							});
						}
					});
				}
				Poster.log('>> set_nickname_param2widget end');
			},
			set_title_param2widget: function(){
				Poster.log('>> set_mobile_param2widget start...');
				var type = Poster.formGroup.attr('data-type'),
					index = Poster.formGroup.attr('data-index'),
					color = $('input[name="color"]', Poster.formGroup),
					fontsize = $('input[name="fontsize"]', Poster.formGroup);
				if (color.length) {
					Poster.widgets.each(function(){
						if ($(this).attr('data-type') == type && $(this).attr('data-index') == index) {
							$(this).css({
								'color': color.val(),
								'font-size': fontsize.val()+'px'
							});
						}
					});
				}
				Poster.log('>> set_mobile_param2widget end');
			},
			set_time_param2widget: function(){
				Poster.log('>> set_address_param2widget start...');
				var type = Poster.formGroup.attr('data-type'),
					index = Poster.formGroup.attr('data-index'),
					color = $('input[name="color"]', Poster.formGroup),
					fontsize = $('input[name="fontsize"]', Poster.formGroup);
				if (color.length) {
					Poster.widgets.each(function(){
						if ($(this).attr('data-type') == type && $(this).attr('data-index') == index) {
							$(this).css({
								'color': color.val(),
								'font-size': fontsize.val()+'px'
							});
						}
					});
				}
				Poster.log('>> set_address_param2widget end');
			},
			/* set_<type>_param2widget end */

			/* set_<type>_widget2param start */
			set_qrcode_widget2param: function(){
				Poster.log('>> set_qrcode_widget2param start...');
				Poster.log('>> set_qrcode_widget2param end');
			},
			set_image_widget2param: function(){
				Poster.log('>> set_image_widget2param start...');
				var type = Poster.widgetActive.attr('data-type'),
					index = Poster.widgetActive.attr('data-index'),
					img = $('img', Poster.widgetActive);
				var html = Poster.get_widget_template(type, index, true);
				Poster.add_widget_param(html, false);
				var imgpath = img.attr('data-img-path'),
					imgurl = img.attr('src');
				$('input', Poster.formGroup).val(imgpath);
				$('img', Poster.formGroup).attr('src', imgurl);
				Poster.log('>> set_image_widget2param end');
			},
			set_avatar_widget2param: function(){
				Poster.log('>> set_avatar_widget2param start...');
				Poster.log('>> set_avatar_widget2param end');
			},
			set_nickname_widget2param: function(){
				Poster.log('>> set_nickname_widget2param start...');
				var type = Poster.widgetActive.attr('data-type'),
					index = Poster.widgetActive.attr('data-index'),
					color = Poster.widgetActive.css('color'),
					fontsize = parseInt(Poster.widgetActive.css('font-size'));
				var html = Poster.get_widget_template(type, index, true);
				Poster.add_widget_param(html, false);
				var color_str = color.rgb2Hex();
				var ele = $('input[name=color]', Poster.formGroup);
				ele.val(color_str).next().css('background-color', color_str);
				$('input[name=fontsize]', Poster.formGroup).val(fontsize);
				Poster.log('>> set_nickname_widget2param end');
			},
			set_title_widget2param: function(){
				Poster.log('>> set_mobile_widget2param start...');
				var type = Poster.widgetActive.attr('data-type'),
					index = Poster.widgetActive.attr('data-index'),
					color = Poster.widgetActive.css('color'),
					fontsize = parseInt(Poster.widgetActive.css('font-size'));
				var html = Poster.get_widget_template(type, index, true);
				Poster.add_widget_param(html, false);
				var color_str = color.rgb2Hex();
				var ele = $('input[name=color]', Poster.formGroup);
				ele.val(color_str).next().css('background-color', color_str);
				$('input[name=fontsize]', Poster.formGroup).val(fontsize);
				Poster.log('>> set_mobile_widget2param end');
			},
			set_time_widget2param: function(){
				Poster.log('>> set_address_widget2param start...');
				var type = Poster.widgetActive.attr('data-type'),
					index = Poster.widgetActive.attr('data-index'),
					color = Poster.widgetActive.css('color'),
					fontsize = parseInt(Poster.widgetActive.css('font-size'));
				var html = Poster.get_widget_template(type, index, true);
				Poster.add_widget_param(html, false);
				var color_str = color.rgb2Hex();
				var ele = $('input[name=color]', Poster.formGroup);
				ele.val(color_str).next().css('background-color', color_str);
				$('input[name=fontsize]', Poster.formGroup).val(fontsize);
				Poster.log('>> set_address_widget2param end');
			},
			/* set_<type>_widget2param end */

			get_widget_attr_element: function(type, index, name){
				return $('input[name="'+type+'['+index+']['+name+']"]', Poster.wrapper);
			},
			get_widget_template: function(type, index, is_extra, data){
				var html = '', style = '', imgpath = '', imgurl = '<?php  echo $_W['siteroot'];?>/web/resource/images/noavatar_middle.gif';
				if (typeof(data) != 'undefined') {
					style += 'top:'+data.top+';';
					style += 'left:'+data.left+';';
					data.width = parseInt(data.width);
					data.height = parseInt(data.height);
					if ($.inArray(type, ['nickname', 'mobile', 'address']) == -1) {
						if (data.width != '0') {
							style += 'width:'+data.width+'px;';
						}
						if (data.height != '0') {
							style += 'height:'+data.height+'px;';
						}
					}
					style += 'color:'+data.color+';';
					style += 'font-size:'+data.fontsize+';';
					if (data.imgpath != '') {
						imgurl = tomedia(data.imgpath);
						imgpath = data.imgpath;
					}
				}
				style = 'style="'+style+'"';
				if (type == 'qrcode') {
					html = '<div class="widget widget_qrcode widget_active ui-widget-content" data-index="'+index+'" data-type="'+type+'" '+style+'>' +
							'<img src="<?php  echo $_W['siteroot'];?>/addons/meepo_xianchang/template/resource/images/qr.png"/>' +
							'<i class="fa fa-close"></i>' +
							'</div>';
				} else if (type == 'image') {
					if (!is_extra) {
						html = '<div class="widget widget_image widget_active ui-widget-content" data-index="'+index+'" data-type="'+type+'" '+style+'>' +
								'<img src="'+imgurl+'" data-img-path="'+imgpath+'"/>' +
								'<i class="fa fa-close"></i>' +
								'</div>';
					} else {
						html = '<div class="form-group" data-type="'+type+'" data-index="'+index+'" '+style+'>' +
								'	<label class="col-sm-3 col-md-3 col-lg-2 col-xs-12 control-label">图片</label>' +
								'	<div class="col-sm-9 col-md-9 col-xs-12">' +
								'		<div class="input-group ">' +
								'			<input type="text" value="" class="form-control" autocomplete="off">' +
								'			<span class="input-group-btn">' +
								'				<button class="btn btn-default upload_img_btn" type="button">选择图片</button>' +
								'			</span>' +
								'		</div>' +
								'		<div class="input-group " style="margin-top:.5em;">' +
								'			<img src="<?php  echo $_W['siteroot'];?>/web/resource/images/nopic.jpg" class="img-responsive img-thumbnail" width="150">' +
								'			<em class="close delete_img_btn" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片">×</em>' +
								'		</div>' +
								'		<span class="help-block">推荐尺寸：100*100</span>' +
								'	</div>' +
								'</div>';
					}
				} else if (type == 'avatar') {
					html = '<div class="widget widget_avatar widget_active ui-widget-content" data-index="'+index+'" data-type="'+type+'" '+style+'>' +
							'<img src="<?php  echo $_W['siteroot'];?>/web/resource/images/noavatar_middle.gif"/>' +
							'<i class="fa fa-close"></i>' +
							'</div>';
				} else if (type == 'nickname') {
					if (!is_extra) {
						html = '<div class="widget widget_nickname widget_active ui-widget-content" data-index="'+index+'" data-type="'+type+'" '+style+'>' +
								'<span>昵称</span>' +
								'<i class="fa fa-close"></i>' +
								'</div>';
					} else {
						html = '<div class="form-group" data-type="'+type+'" data-index="'+index+'">' +
								'	<label class="col-sm-3 col-md-3 col-lg-2 col-xs-12 control-label">颜色</label>' +
								'	<div class="col-sm-9 col-md-9 col-xs-12">' +
								'		<div class="row row-fix">' +
								'			<div class="col-xs-8 col-sm-8" style="padding-right:0;">' +
								'				<div class="input-group">' +
								'					<input class="form-control" type="text" name="color" placeholder="请选择颜色" value="#3d4145">' +
								'					<span class="input-group-addon" style="width:35px;border-left:none;background-color:#3d4145"></span>' +
								'					<span class="input-group-btn">' +
								'						<button class="btn btn-default colorpicker" type="button">选择颜色 <i class="fa fa-caret-down"></i></button>' +
								'						<button class="btn btn-default colorclean" type="button"><span><i class="fa fa-remove"></i></span></button>' +
								'					</span>' +
								'				</div>' +
								'			</div>' +
								'		</div>' +
								'	</div>' +
								'</div>' +
								'<div class="form-group">' +
								'	<label class="col-sm-3 col-md-3 col-lg-2 col-xs-12 control-label">字号</label>' +
								'	<div class="col-sm-9 col-md-9 col-xs-12">' +
								'		<div class="input-group">' +
								'			<input class="form-control" type="text" name="fontsize" value="16">' +
								'			<span class="input-group-addon">px</span>' +
								'		</div>' +
								'	</div>' +
								'</div>';
					}
				} else if (type == 'title') {
					if (!is_extra) {
						html = '<div class="widget widget_mobile widget_active ui-widget-content" data-index="'+index+'" data-type="'+type+'" '+style+'>' +
								'<span><?php  if(!empty($list['title'])) { ?><?php  echo $list['title'];?><?php  } else { ?>长按识别二维码<?php  } ?></span>' +
								'<i class="fa fa-close"></i>' +
								'</div>';
					} else {
						html = '<div class="form-group" data-type="'+type+'" data-index="'+index+'">' +
								'	<label class="col-sm-3 col-md-3 col-lg-2 col-xs-12 control-label">颜色</label>' +
								'	<div class="col-sm-9 col-md-9 col-xs-12">' +
								'		<div class="row row-fix">' +
								'			<div class="col-xs-8 col-sm-8" style="padding-right:0;">' +
								'				<div class="input-group">' +
								'					<input class="form-control" type="text" name="color" placeholder="请选择颜色" value="#3d4145">' +
								'					<span class="input-group-addon" style="width:35px;border-left:none;background-color:#3d4145"></span>' +
								'					<span class="input-group-btn">' +
								'						<button class="btn btn-default colorpicker" type="button">选择颜色 <i class="fa fa-caret-down"></i></button>' +
								'						<button class="btn btn-default colorclean" type="button"><span><i class="fa fa-remove"></i></span></button>' +
								'					</span>' +
								'				</div>' +
								'			</div>' +
								'		</div>' +
								'	</div>' +
								'</div>' +
								'<div class="form-group">' +
								'	<label class="col-sm-3 col-md-3 col-lg-2 col-xs-12 control-label">字号</label>' +
								'	<div class="col-sm-9 col-md-9 col-xs-12">' +
								'		<div class="input-group">' +
								'			<input class="form-control" type="text" name="fontsize" value="16">' +
								'			<span class="input-group-addon">px</span>' +
								'		</div>' +
								'	</div>' +
								'</div>';
					}
				} else if (type == 'time') {
					if (!is_extra) {
						html = '<div class="widget widget_address widget_active ui-widget-content" data-index="'+index+'" data-type="'+type+'" '+style+'>' +
								'<span><?php  if(!empty($list['start_time'])) { ?><?php  echo date('Y-m-d H:i:s',$list['start_time'])?><?php  } else { ?><?php  echo date('Y-m-d H:i:s',time())?><?php  } ?></span>' +
								'<i class="fa fa-close"></i>' +
								'</div>';
					} else {
						html = '<div class="form-group" data-type="'+type+'" data-index="'+index+'">' +
								'	<label class="col-sm-3 col-md-3 col-lg-2 col-xs-12 control-label">颜色</label>' +
								'	<div class="col-sm-9 col-md-9 col-xs-12">' +
								'		<div class="row row-fix">' +
								'			<div class="col-xs-8 col-sm-8" style="padding-right:0;">' +
								'				<div class="input-group">' +
								'					<input class="form-control" type="text" name="color" placeholder="请选择颜色" value="#3d4145">' +
								'					<span class="input-group-addon" style="width:35px;border-left:none;background-color:#3d4145"></span>' +
								'					<span class="input-group-btn">' +
								'						<button class="btn btn-default colorpicker" type="button">选择颜色 <i class="fa fa-caret-down"></i></button>' +
								'						<button class="btn btn-default colorclean" type="button"><span><i class="fa fa-remove"></i></span></button>' +
								'					</span>' +
								'				</div>' +
								'			</div>' +
								'		</div>' +
								'	</div>' +
								'</div>' +
								'<div class="form-group">' +
								'	<label class="col-sm-3 col-md-3 col-lg-2 col-xs-12 control-label">字号</label>' +
								'	<div class="col-sm-9 col-md-9 col-xs-12">' +
								'		<div class="input-group">' +
								'			<input class="form-control" type="text" name="fontsize" value="16">' +
								'			<span class="input-group-addon">px</span>' +
								'		</div>' +
								'	</div>' +
								'</div>';
					}
				}
				return html;
			},
			log: function(msg){
				/*
				 * 日志格式说明：
				 * 	-- init
				 * 	++ operate
				 * 	## refresh
				 * 	>> execute
				 * 	$$ binding event
				 */
				if (Poster.debug()) {
					console.log(msg);
				}
			}
		};
		Poster.run();
	});
function tomedia(src) {
			if(typeof src != 'string')
				return '';
			if(src.indexOf('http://') == 0 || src.indexOf('https://') == 0) {
				return src;
			} else if(src.indexOf('./addons') == 0) {
				src=src.substr(2);
				return window.sysinfo.siteroot + src;
			} else if(src.indexOf('../addons') == 0 || src.indexOf('../attachment') == 0) {
				src=src.substr(3);
				return window.sysinfo.siteroot + src;
			} else if(src.indexOf('./resource') == 0) {
				src=src.substr(2);
				return window.sysinfo.siteroot + 'app/' + src;
			} else if(src.indexOf('images/') == 0) {
				return window.sysinfo.attachurl+ src;
			}
		}
</script>	
</form>
<?php  } ?>
<script>
		 $("body").on('click','input:checkbox',function() {
			var $this = $(this);
			var input  = $this.parent().parent().find("input");
            input.prop("checked", false);
            $this.prop("checked", true);
        });
		
		function check_sys(){
			if($("#sys_name").val()==''){
				util.message('请输入系统名称.', '', 'error');
				return false;
			}
		}
		function check_module(){
			  if($("#one_price").val()==''){
				util.message('请输入人头单价.', '', 'error');
				return false;
			  }
			  if($("#min_persons").val()==''){
				util.message('请输入活动参与人数最小值.', '', 'error');
				return false;
			  }
			  if($("#max_persons").val()==''){
				util.message('请输入活动参与人数最大值.', '', 'error');
				return false;
			  }
			  var check = 1;
			  $.each($("#form1 input[name='module_money[]']"),function(i,value) {
				  if($.trim($(value).val())==''){
						var num = i + 1;
						util.message('模块价格设置中的、第'+num+'个项目的价格参数未填写', '', 'error');
						check = 0;
						return;
				  }
			  });
			 
			 
			 if(check==0){
				return false;
			 }else{
				return true;
			 }
		}
		function show_redpack_type(){
			$(".activity_redpack").show();
		}
		function close_redpack_type(){
			$(".activity_redpack").hide();
		}
		function uploadws(){
			$.post("<?php  echo $this->createWebUrl('uploadws')?>",{},function(){},'json')
		}
		uploadws();
</script>
<?php  include $this->template('common/_footer')?>
