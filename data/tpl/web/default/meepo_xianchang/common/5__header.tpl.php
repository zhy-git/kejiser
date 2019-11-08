<?php defined('IN_IA') or exit('Access Denied');?><?php  include web_template('common/_header_base', TEMPLATE_INCLUDEPATH);?>
<div class="meepo_head"> 
	<div class="meepo_head_box">
		<div class="meepo_inner">
			<div class="meepo_logo"><a href="#"></a></div>
			<ul class="meepo_nav" style="color:#222;">
				<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('top_nav', TEMPLATE_INCLUDEPATH)) : (include template('top_nav', TEMPLATE_INCLUDEPATH));?>
			</ul> 
			<div class="meepo_accounts">
				  <div class="acounts_box dropdown" style=""> 
					<a  href="javascript:;" class="dropdown-toggle accounts_box_a" data-toggle="dropdown">		
						<img class="avatar"  src="<?php  if(!empty($_user_profile['avatar'])) { ?><?php  echo tomedia($_user_profile['avatar']);?><?php  } else { ?><?php  echo $_W['siteroot'];?>attachment/images/global/avatars/avatar_7.jpg<?php  } ?>"  onerror="<?php  echo $_W['siteroot'];?>attachment/images/global/avatars/avatar_7.jpg">  
						<span class="username">你好、<?php  echo $_W['username'];?></span><i class="fa fa-angle-down"></i> 
					</a>
					<ul class="dropdown-menu account_menu">
						<li><a href="<?php  echo $this->createWebUrl('my_home')?>"><i class="fa fa-user"></i> 个人中心</a></li>
						<li style="border-bottom: 1px solid #e4e4e4;"><a href="<?php  echo $this->createWebUrl('my_wallet')?>"><i class="fa fa-money"></i> 我的收入</a></li>
						<li style="border-bottom: 1px solid #e4e4e4;"><a href="<?php  echo $this->createWebUrl('redpack_wallet')?>"><i class="fa fa-money"></i> 红包账户</a></li>
						<li><a href="<?php  echo str_replace('./','',$_W['siteroot'].'app/'.$this->createMobileUrl('manage_logout'))?>"><i class="fa fa-power-off"></i> 退出系统</a></li>
					</ul>
				  </div>
			</div>
		</div>
	</div> 
</div>
<!--头部 end -->

<div  class="content">
	<div  class="row">
		<!--左边导航-->	
		<div class="col-xs-12 col-sm-3 col-lg-2 sys_menu_box">
			<?php  if((empty($controls) && empty($_GPC['do'])) || (empty($controls) && in_array($_GPC['do'],$this->sys_total_control()))) { ?>
			<div class="sys_menu">
				<div class="sys-menu-user" style="border-bottom: 1px solid #e9e9e9;">
					<div>
						<div class="avatar">
							<a href="<?php  echo $this->createWebUrl('my_home')?>"><img src="<?php  if(!empty($_user_profile['avatar'])) { ?><?php  echo tomedia($_user_profile['avatar']);?><?php  } else { ?><?php  echo $_W['siteroot'];?>attachment/images/global/avatars/avatar_7.jpg<?php  } ?>" onerror="<?php  echo $_W['siteroot'];?>attachment/images/global/avatars/avatar_7.jpg"></a>
						</div>
						<i class="elem"></i>
					</div>
					<h3 class="name"><a href="<?php  echo $this->createWebUrl('my_home')?>" <?php  if($_user_profile['gender']==1) { ?>style="color:blue"<?php  } else if($_user_profile['gender']==2) { ?>style="color:pink"<?php  } ?>><?php  echo $_user['username'];?></a></h3>
					<!--<p>普通用户</p>-->
					<p><a id="agent_gl" href="<?php  echo $this->createWebUrl('my_home')?>" class="btn-agency">个人中心</a></p>
				</div>
				
				<ul class="sys-menu-menu">
				<li>
				  <a href="javascript:void(0);"><em class="icon-screen"></em>活动</a>
				  <ul class="level2">
					<li <?php  if($_GPC['do']=='list' || empty($_GPC['do'])) { ?>class="curr"<?php  } ?>><a href="<?php  echo $this->createWebUrl('list')?>"><?php  if($_W['isfounder'] || in_array('list',$_user_sys_control)) { ?>活动管理<?php  } else { ?>我的活动<?php  } ?></a></li>
				  </ul>
				</li>
				<li>
				  <a href="javascript:;"><em class="icon-orders"></em>订单</a>
				  <ul class="level2">
					<li <?php  if($_GPC['do']=='my_order') { ?>class="curr"<?php  } ?>><a href="<?php  echo $this->createWebUrl('my_order')?>"><?php  if($_W['isfounder'] || in_array('my_order',$_user_sys_control)) { ?>订单管理<?php  } else { ?>我的订单<?php  } ?></a></li>
				  </ul>
				</li>
				<li>
				  <a href="javascript:;"><em class="icon-count"></em>账户</a>
				  <ul class="level2">
					  <?php  if($_W['isfounder'] || (!$_W['isfounder']&&in_array('account_manage',$_user_sys_control))) { ?>
						<li <?php  if($_GPC['do']=='account_manage') { ?>class="curr"<?php  } ?>><a href="<?php  echo $this->createWebUrl('account_manage')?>">账户管理</a></li>
					  <?php  } ?>
					  <li <?php  if($_GPC['do']=='my_wallet') { ?>class="curr"<?php  } ?>><a href="<?php  echo $this->createWebUrl('my_wallet')?>">我的账户</a></li>
					   <li <?php  if($_GPC['do']=='redpack_wallet') { ?>class="curr"<?php  } ?>><a href="<?php  echo $this->createWebUrl('redpack_wallet')?>">红包账户</a></li>
					  <li <?php  if($_GPC['do']=='my_home') { ?>class="curr"<?php  } ?>><a href="<?php  echo $this->createWebUrl('my_home')?>">个人中心</a></li>
					  
				  </ul>
				</li>
				<?php  if($_W['isfounder'] || in_array('sys_config',$_user_sys_control) || in_array('sys_manager',$_user_sys_control)) { ?>
				<li>
				  <a href="javascript:;"><em class="icon-orders"></em>系统</a>
				  <ul class="level2">
				  <?php  if($_W['isfounder'] || (!$_W['isfounder']&&in_array('sys_config',$_user_sys_control))) { ?>
					<li <?php  if($_GPC['do']=='sys_config') { ?>class="curr"<?php  } ?>><a href="<?php  echo $this->createWebUrl('sys_config',array('id'=>$rid))?>">系统设置</a></li>
				  <?php  } ?>
				  <?php  if($_W['isfounder'] || (!$_W['isfounder']&&in_array('sys_manager',$_user_sys_control))) { ?>
					<li <?php  if($_GPC['do']=='sys_manager') { ?>class="curr"<?php  } ?>><a href="<?php  echo $this->createWebUrl('sys_manager',array('id'=>$rid))?>">权限管理</a></li>
				  <?php  } ?>
				  <?php  if($_W['isfounder']) { ?>
						<li <?php  if($_GPC['do']=='redpack_send_detail') { ?>class="curr"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('redpack_send_detail')?>" >红包发放明细</a></li>
						<li <?php  if($_GPC['do']=='barwall_send_detail') { ?>class="curr"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('barwall_send_detail')?>" >霸屏上墙收入明细</a></li>
						<li <?php  if($_GPC['do']=='sqldata') { ?>class="curr"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('sqldata')?>" >数据库管理</a></li>
				  <?php  } ?>
				  </ul>
				</li>
				<?php  } ?>
				 
				</ul>
			</div>
			<?php  } else { ?>
			
			<div class="sys_menu">
				<ul class="leftmenu-group-list">
					<li <?php  if($_GPC['do']=='urls') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('urls',array('id'=>$rid))?>"><i class="meepo-qrcode"></i><span>互动二维码与链接</span></a></li>
					<!--20180817 add-->
					<?php  if(in_array('meeting',$controls)&&!in_array('faceqd',$controls)) { ?>
					<li <?php  if($_GPC['do']=='meeting_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('meeting_manage',array('id'=>$rid))?>"><i class="meepo-users"></i>会议管理 </a>
					</li>
					<?php  } ?>
					<?php  if(in_array('faceqd',$controls)&&!in_array('meeting',$controls)) { ?>
					<li <?php  if($_GPC['do']=='faceqd_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('faceqd_manage',array('id'=>$rid))?>" ><i class="meepo-users"></i>人脸签到</a>
					</li>
					<?php  } ?>
					<!--20180817 end-->
					<li <?php  if($_GPC['do']=='basic_config') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('basic_config',array('op'=>'post','id'=>$rid))?>"><i class="meepo-basic"></i>互动基础配置 </a>
					</li>
					<li <?php  if($_GPC['do']=='user_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('user_manage',array('id'=>$rid))?>" ><i class="meepo-users"></i>用户</a> 
					</li>
					<?php  if(in_array('qd',$controls)) { ?>
					<li <?php  if($_GPC['do']=='qd_manage' || $_GPC['do']=='qd_config') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('qd_config',array('id'=>$rid))?>"><i class="meepo-signin"></i>签到</a>
					</li>
					<?php  } ?>
					
					<?php  if(in_array('lizi',$controls)) { ?>
					<li <?php  if($_GPC['do']=='3d_config') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('3d_config',array('id'=>$rid))?>"><i class="meepo-threed"></i>粒子签到</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('newqd',$controls)) { ?>
					<li <?php  if($_GPC['do']=='newqd_config') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('newqd_config',array('id'=>$rid))?>"><i class="meepo-threed"></i>新版3d签到</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('wall',$controls)) { ?>
					<li <?php  if($_GPC['do']=='wall_manage' || $_GPC['do']=='wall_config') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('wall_manage',array('id'=>$rid))?>"><i class="meepo-msgNum"></i>上墙</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('dm',$controls)) { ?>
					<li <?php  if($_GPC['do']=='dm_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('dm_manage',array('id'=>$rid))?>"><i class="meepo-msgNum"></i>弹幕</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('barwall',$controls)) { ?>
					<li <?php  if($_GPC['do']=='barwall_manage' || $_GPC['do']=='bp_record'||$_GPC['do']=='bp_record'||$_GPC['do']=='ds_record'||$_GPC['do']=='dm_record'||$_GPC['do']=='hb_record'||$_GPC['do']=='barwall_baping'||$_GPC['do']=='barwall_dm'||$_GPC['do']=='barwall_ds'||$_GPC['do']=='barwall_chat'||$_GPC['do']=='tixian_manage'||$_GPC['do']=='barwall_config') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('barwall_manage',array('id'=>$rid))?>"><i class="meepo-holdscreen"></i>霸屏上墙</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('lottory',$controls)) { ?>
					<li <?php  if($_GPC['do']=='lottory_manage'||$_GPC['do']=='lottory_record'||$_GPC['do']=='lottory_config') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('lottory_manage',array('id'=>$rid))?>" ><i class="meepo-gift"></i>抽奖</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('lottory_3d',$controls)) { ?>
					<li <?php  if($_GPC['do']=='lottory_3d_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('lottory_3d_manage',array('id'=>$rid))?>"><i class="meepo-gift"></i>3D抽奖</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('cjx',$controls)) { ?>
					<li <?php  if($_GPC['do']=='cjx_manage'||$_GPC['do']=='cjx_record') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('cjx_manage',array('id'=>$rid))?>" ><i class="meepo-pie"></i>抽奖箱</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('zjd',$controls)) { ?>
					<li <?php  if($_GPC['do']=='zjd_manage'||$_GPC['do']=='zjd_record') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('zjd_manage',array('id'=>$rid))?>" ><i class="meepo-stars"></i>砸金蛋</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('vote',$controls)) { ?>
					<li <?php  if($_GPC['do']=='vote_manage' || $_GPC['do']=='vote_record') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('vote_manage',array('id'=>$rid))?>" ><i class="meepo-vote"></i>投票</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('shake',$controls)) { ?>
					<li <?php  if($_GPC['do']=='shake_manage' || $_GPC['do']=='shake_config' || $_GPC['do']=='shake_record') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('shake_manage',array('id'=>$rid))?>" ><i class="meepo-shake2"></i>摇一摇</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('yyy_3d',$controls)) { ?>
					<li <?php  if($_GPC['do']=='yyy3d_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('yyy3d_manage',array('id'=>$rid))?>"><i class="meepo-shake"></i>3D摇一摇</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('swimming',$controls)) { ?>
					<li <?php  if($_GPC['do']=='swimming_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('swimming_manage',array('id'=>$rid))?>"><i class="meepo-shake"></i>3D游泳</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('horse',$controls)) { ?>
					<li <?php  if($_GPC['do']=='horse_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('horse_manage',array('id'=>$rid))?>"><i class="meepo-shake"></i>3D赛马</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('boat',$controls)) { ?>
					<li <?php  if($_GPC['do']=='boat_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('boat_manage',array('id'=>$rid))?>"><i class="meepo-shake"></i>赛龙舟</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('bike',$controls)) { ?>
					<li <?php  if($_GPC['do']=='bike_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('bike_manage',array('id'=>$rid))?>"><i class="meepo-shake"></i>自行车赛</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('sailing',$controls)) { ?>
					<li <?php  if($_GPC['do']=='sailing_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('sailing_manage',array('id'=>$rid))?>"><i class="meepo-shake"></i>冲浪赛</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('mls',$controls)) { ?>
					<li <?php  if($_GPC['do']=='mls_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('mls_manage',array('id'=>$rid))?>"><i class="meepo-shake"></i>马拉松赛</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('yacht',$controls)) { ?>
					<li <?php  if($_GPC['do']=='yacht_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('yacht_manage',array('id'=>$rid))?>"><i class="meepo-shake"></i>游艇赛</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('rolllottory',$controls)) { ?>
					<li <?php  if($_GPC['do']=='rolllottory_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('rolllottory_manage',array('id'=>$rid))?>"><i class="meepo-gift"></i>大转盘抽奖</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('mshake',$controls)) { ?>
					<li <?php  if($_GPC['do']=='mshake_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('mshake_manage',array('id'=>$rid))?>"><i class="meepo-shake"></i>猴子爬树</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('xys',$controls)) { ?>
					<li <?php  if($_GPC['do']=='xys_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('xys_manage',array('id'=>$rid))?>"><i class="meepo-heart"></i>许愿树</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('tshake',$controls)) { ?>
					<li <?php  if($_GPC['do']=='tshake_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('tshake_manage',array('id'=>$rid))?>" ><i class="meepo-shake"></i>团队摇一摇</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('redpack',$controls)) { ?>
					<li <?php  if($_GPC['do']=='redpack_manage' || $_GPC['do']=='redpack_config'||$_GPC['do']=='redpack_record') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('redpack_manage',array('id'=>$rid))?>" ><i class="meepo-redpacker"></i>抢红包</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('ddp',$controls)) { ?>
					<li <?php  if($_GPC['do']=='ddp_config' || $_GPC['do']=='ddp_record') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('ddp_record',array('id'=>$rid))?>" ><i class="meepo-mstching"></i>对对碰</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('jb',$controls)) { ?>
					<li <?php  if($_GPC['do']=='jb_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('jb_manage',array('id'=>$rid))?>" ><i class="meepo-guest"></i>嘉宾</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('xysjh',$controls)) { ?>
					<li <?php  if($_GPC['do']=='xysjh_record') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('xysjh_record',array('id'=>$rid))?>" ><i class="meepo-phone"></i>幸运手机号</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('xc',$controls)) { ?>
					<li <?php  if($_GPC['do']=='xc_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('xc_manage',array('id'=>$rid))?>" ><i class="meepo-photo"></i>相册</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('dt',$controls)) { ?>
					<li <?php  if($_GPC['do']=='dt_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('dt_manage',array('id'=>$rid))?>" ><i class="meepo-photo"></i>现场答题</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('shuqian',$controls)) { ?>
					<li <?php  if($_GPC['do']=='shuqian_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('shuqian_manage',array('id'=>$rid))?>"><i class="meepo-money"></i>疯狂数钱</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('dzqy',$controls)) { ?>
					<li <?php  if($_GPC['do']=='dzqy_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('dzqy_manage',array('id'=>$rid))?>"><i class="meepo-signin"></i>电子签约</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('ydj',$controls)) { ?>
					<li <?php  if($_GPC['do']=='ydj_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('ydj_manage',array('id'=>$rid))?>"><i class="meepo-shake"></i>摇大奖</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('tug',$controls)) { ?>
					<li <?php  if($_GPC['do']=='tug_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('tug_manage',array('id'=>$rid))?>" ><i class="meepo-shake"></i>拔河</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('dmredpack',$controls)) { ?>
					<li <?php  if($_GPC['do']=='dmredpack_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('dmredpack_manage',array('id'=>$rid))?>" ><i class="meepo-redpacker"></i>弹幕红包</a>
					</li>
					<?php  } ?>
					<?php  if(in_array('shakestart',$controls)) { ?>
					<li <?php  if($_GPC['do']=='shakestart_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('shakestart_manage',array('id'=>$rid))?>" ><i class="meepo-shake"></i>摇一摇启动</a>
					</li>
					<?php  } ?>
					<?php  if(!in_array('meeting',$controls)&&!in_array('faceqd',$controls)) { ?>
					<li <?php  if($_GPC['do']=='bd_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('bd_manage',array('id'=>$rid))?>" ><i class="meepo-personalize"></i>表单信息</a>
					</li>
					<?php  } ?>
					<li <?php  if($_GPC['do']=='nav_manage') { ?>class="active"<?php  } ?>>
						<a href="<?php  echo $this->createWebUrl('nav_manage',array('id'=>$rid))?>" ><i class="meepo-personalize"></i>自定义功能菜单</a>
					</li>
					<?php  if($sys_config['openSysadv']==1) { ?>
					<li <?php  if($_GPC['do']=='adv') { ?>class="active"<?php  } ?>>
							<a href="<?php  echo $this->createWebUrl('adv',array('id'=>$rid))?>" ><i class="meepo-wallet"></i>系统广告</a>
					</li>
					<?php  } ?>
				</ul>
			</div>
			<?php  } ?>
		</div>
		<!--右边内容-->
		<div class="col-xs-12 col-sm-9 col-lg-10 sys_menu_box">
		