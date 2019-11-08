<?php defined('IN_IA') or exit('Access Denied');?><?php  if($_GPC['do']=='basic_config' || $_GPC['do']=='diy_css') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='basic_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('basic_config',array('id'=>$rid))?>">基本设置</a>
	</li>
	<li <?php  if($_GPC['do']=='diy_css') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('diy_css',array('id'=>$rid))?>">自定义css样式</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='user_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='user_manage' && $status==1 && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('user_manage',array('id'=>$rid,'status'=>'1'))?>">已审核用户</a>
	</li>
	<li <?php  if($_GPC['do']=='user_manage' && $status==2 && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('user_manage',array('id'=>$rid,'status'=>'2'))?>">待审核用户</a>
	</li>
	<li <?php  if($_GPC['do']=='user_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('user_manage',array('op'=>'post','id'=>$rid))?>"><?php  if(empty($user_id)) { ?>添加<?php  } else { ?>编辑<?php  } ?>用户</a>
	</li>
	<li <?php  if($_GPC['do']=='user_manage' && $op=='upload_user') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('user_manage',array('op'=>'upload_user','id'=>$rid))?>">批量导入用户</a>
	</li>
	<?php  if($_GPC['do']=='user_manage' && $op=='change_data') { ?>
	<li class="active">
		<a href="javascript:;">编辑用户资料</a>
	</li>
	<?php  } ?>
</ul>
<?php  } else if($_GPC['do']=='qd_manage' || $_GPC['do']=='qd_config') { ?>
<ul class="nav nav-tabs">
	<?php  if(!in_array('faceqd',$controls)) { ?>
	<li <?php  if($_GPC['do']=='qd_manage' && $level==1 && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('qd_manage',array('id'=>$rid,'level'=>'1'))?>">已审核用户</a>
	</li>
	<li <?php  if($_GPC['do']=='qd_manage' && $level==2 && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('qd_manage',array('id'=>$rid,'level'=>'2'))?>">待审核用户</a>
	</li>
	<?php  } ?>
	<li <?php  if($_GPC['do']=='qd_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('qd_config',array('id'=>$rid))?>">基础设置</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='wall_manage' || $_GPC['do']=='wall_config' ) { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='wall_manage' && $status=='1') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('wall_manage',array('id'=>$rid,'status'=>'1'))?>">已审核</a>
	</li>
	<li <?php  if($_GPC['do']=='wall_manage' && $status=='2') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('wall_manage',array('id'=>$rid,'status'=>'2'))?>">待审核</a>
	</li>
	<li <?php  if($_GPC['do']=='wall_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('wall_config',array('id'=>$id))?>">基础设置</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='barwall_manage' || $_GPC['do']=='bp_record'||$_GPC['do']=='bp_record'||$_GPC['do']=='ds_record'||$_GPC['do']=='dm_record'||$_GPC['do']=='hb_record'||$_GPC['do']=='barwall_baping'||$_GPC['do']=='barwall_dm'||$_GPC['do']=='barwall_ds'||$_GPC['do']=='barwall_chat'||$_GPC['do']=='tixian_manage'||$_GPC['do']=='barwall_config' || $_GPC['do']=='data_show' || $_GPC['do']=='bb_record' || $_GPC['do']=='barwall_bb' || $_GPC['do']=='yuanchang_manage'|| $_GPC['do']=='barwall_songli'|| $_GPC['do']=='barwall_song'|| $_GPC['do']=='songli_record' || $_GPC['do']=='barwall_resave') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='barwall_manage' && $isshow=='1') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_manage',array('id'=>$rid,'isshow'=>'1'))?>">已审核</a>
	</li>
	<li <?php  if($_GPC['do']=='barwall_manage' && $isshow=='2') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_manage',array('id'=>$rid,'isshow'=>'2'))?>">待审核</a>
	</li>
	<li <?php  if($_GPC['do']=='data_show') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('data_show',array('id'=>$rid))?>">收入统计</a>
	</li>
	<!--<li <?php  if($_GPC['do']=='bp_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('bp_record',array('id'=>$id))?>">霸屏记录</a>
	</li>
	<li <?php  if($_GPC['do']=='ds_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('ds_record',array('id'=>$id))?>">打赏记录</a>
	</li>
	<li <?php  if($_GPC['do']=='bb_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('bb_record',array('id'=>$id))?>">表白记录</a>
	</li>
	<li <?php  if($_GPC['do']=='dm_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dm_record',array('id'=>$id))?>">弹幕记录</a>
	</li>
	<li <?php  if($_GPC['do']=='hb_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('hb_record',array('id'=>$id))?>">群红包记录</a>
	</li>
	
	<li <?php  if($_GPC['do']=='songli_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('songli_record',array('id'=>$id))?>">送礼记录</a>
	</li>
	-->
	<li <?php  if($_GPC['do']=='barwall_baping') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_baping',array('id'=>$id))?>">霸屏报表</a>
	</li>
	<li <?php  if($_GPC['do']=='barwall_ds') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_ds',array('id'=>$id))?>">打赏报表</a>
	</li>
	<li <?php  if($_GPC['do']=='barwall_bb') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_bb',array('id'=>$id))?>">表白报表</a>
	</li>
	<li <?php  if($_GPC['do']=='barwall_dm') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_dm',array('id'=>$id))?>">弹幕报表</a>
	</li>
	<li <?php  if($_GPC['do']=='barwall_songli') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_songli',array('id'=>$id))?>">送礼报表</a>
	</li>
	<?php  if(!is_error($this->song_check())) { ?>
	<li <?php  if($_GPC['do']=='barwall_song') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_song',array('id'=>$id))?>">点歌报表</a>
	</li>
	<?php  } ?>
	<li <?php  if($_GPC['do']=='tixian_manage') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('tixian_manage',array('id'=>$id))?>">粉丝提现</a>
	</li>
	<li <?php  if($_GPC['do']=='barwall_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_config',array('id'=>$id))?>">基础设置</a>
	</li>
	
	
	<?php  if($_W['isfounder']) { ?>
	<li <?php  if($_GPC['do']=='barwall_resave') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_resave',array('id'=>$id))?>">付费转存记录</a>
	</li>
	<?php  } ?>
</ul>
<?php  } else if($_GPC['do']=='lottory_manage'||$_GPC['do']=='lottory_record'||$_GPC['do']=='lottory_config') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='lottory_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('lottory_manage',array('id'=>$rid))?>">奖项列表</a>
	</li>
	<li <?php  if($_GPC['do']=='lottory_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('lottory_manage',array('id'=>$rid,'op'=>'post'))?>"><?php  if(empty($award_id)) { ?>添加<?php  } else { ?>编辑<?php  } ?>奖项</a>
	</li>
	<li <?php  if($_GPC['do']=='lottory_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('lottory_record',array('id'=>$rid))?>">中奖记录</a>
	</li>
	<li <?php  if($_GPC['do']=='lottory_config') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('lottory_config',array('id'=>$rid))?>">抽奖设置</a></li>
</ul>
<?php  } else if($_GPC['do']=='cjx_manage'||$_GPC['do']=='cjx_record') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='cjx_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('cjx_manage',array('id'=>$rid))?>">奖项列表</a>
	</li>
	<li <?php  if($_GPC['do']=='cjx_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('cjx_manage',array('id'=>$rid,'op'=>'post'))?>"><?php  if(empty($award_id)) { ?>添加<?php  } else { ?>编辑<?php  } ?>奖项</a>
	</li>
	<li <?php  if($_GPC['do']=='cjx_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('cjx_record',array('id'=>$rid))?>">中奖记录</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='zjd_manage'||$_GPC['do']=='zjd_record') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='zjd_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('zjd_manage',array('id'=>$rid))?>">奖项列表</a>
	</li>
	<li <?php  if($_GPC['do']=='zjd_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('zjd_manage',array('id'=>$rid,'op'=>'post'))?>"><?php  if(empty($award_id)) { ?>添加<?php  } else { ?>编辑<?php  } ?>奖项</a>
	</li>
	<li <?php  if($_GPC['do']=='zjd_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('zjd_record',array('id'=>$rid))?>">中奖记录</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='jb_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='jb_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('jb_manage',array('id'=>$rid))?>">嘉宾列表</a>
	</li>
	<li <?php  if($_GPC['do']=='jb_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('jb_manage',array('id'=>$rid,'op'=>'post'))?>"><?php  if(empty($jb_id)) { ?>添加<?php  } else { ?>编辑<?php  } ?>嘉宾</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='vote_manage' || $_GPC['do']=='vote_record') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='vote_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('vote_manage',array('id'=>$rid))?>">轮数列表</a>
	</li>
	<li <?php  if($_GPC['do']=='vote_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('vote_manage',array('id'=>$rid,'op'=>'post'))?>"><?php  if(empty($vote_id)) { ?>添加<?php  } else { ?>编辑<?php  } ?>轮数</a>
	</li>
	<?php  if(!empty($vote_id)) { ?>
	<li <?php  if($_GPC['do']=='vote_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('vote_record',array('id'=>$rid,'vote_id'=>$vote_id))?>">投票记录</a>
	</li>
	<?php  } ?>
</ul>
<?php  } else if($_GPC['do']=='shake_manage' || $_GPC['do']=='shake_config' || $_GPC['do']=='shake_record') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='shake_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('shake_manage',array('id'=>$rid))?>">轮数列表</a>
	</li>
	<li <?php  if($_GPC['do']=='shake_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('shake_manage',array('id'=>$rid,'op'=>'post'))?>"><?php  if(empty($shake_id)) { ?>添加<?php  } else { ?>编辑<?php  } ?>轮数</a>
	</li>
	<?php  if(!empty($rotate_id)) { ?>
	<li <?php  if($_GPC['do']=='shake_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('shake_record',array('id'=>$rid,'rotate_id'=>$rotate_id))?>">摇一摇记录</a>
	</li>
	<?php  } ?>
	<li <?php  if($_GPC['do']=='shake_config') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('shake_config',array('id'=>$rid))?>">摇一摇设置</a></li>
</ul>
<?php  } else if($_GPC['do']=='xc_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='xc_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('xc_manage',array('id'=>$rid))?>">相册列表</a>
	</li>
	<li <?php  if($_GPC['do']=='xc_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('xc_manage',array('id'=>$rid,'op'=>'post'))?>"><?php  if(empty($xc_id)) { ?>添加<?php  } else { ?>编辑<?php  } ?>相册</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='redpack_manage' || $_GPC['do']=='redpack_config'||$_GPC['do']=='redpack_record') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='redpack_config') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('redpack_config',array('id'=>$rid))?>">基础设置</a></li>
	<li <?php  if($_GPC['do']=='redpack_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('redpack_manage',array('id'=>$rid))?>">轮数列表</a>
	</li>
	<li <?php  if($_GPC['do']=='redpack_manage' && $op=='dellist') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('redpack_manage',array('id'=>$id,'op'=>'dellist'))?>">已删轮数</a>
	</li>
	<li <?php  if($_GPC['do']=='redpack_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('redpack_manage',array('id'=>$rid,'op'=>'post'))?>"><?php  if(empty($redpack_id)) { ?>添加<?php  } else { ?>编辑<?php  } ?>轮数</a>
	</li>
	<?php  if(!empty($rotate_id)) { ?>
	<li <?php  if($_GPC['do']=='redpack_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('redpack_record',array('id'=>$rid,'rotate_id'=>$rotate_id))?>">抢红包记录</a>
	</li>
	<?php  } ?>
	
</ul>
<?php  } else if($_GPC['do']=='ddp_config' || $_GPC['do']=='ddp_record') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='ddp_config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('ddp_config',array('id'=>$rid))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='ddp_record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('ddp_record',array('id'=>$rid))?>">碰对结果</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='xysjh_record') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='xysjh_record') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('xysjh_record',array('id'=>$rid))?>">中奖记录</a></li>
</ul>
<?php  } else if($_GPC['do']=='3d_config') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='3d_config') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('3d_config',array('id'=>$rid))?>">基础设置</a></li>
</ul>
<?php  } else if($_GPC['do']=='bd_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='bd_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('bd_manage',array('id'=>$id))?>">表单设置</a>
	</li>
	<li <?php  if($_GPC['do']=='bd_manage' && $op=='data') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('bd_manage',array('id'=>$id,'op'=>'data'))?>">验证数据</a>
	</li>
	<li <?php  if($_GPC['do']=='bd_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('bd_manage',array('id'=>$id,'op'=>'post','yz_id'=>$yz_id))?>"><?php  if($yz_id>0) { ?>编辑验证数据<?php  } else { ?>添加验证数据<?php  } ?></a>
	</li>
	<li <?php  if($_GPC['do']=='bd_manage' && $op=='upload_data') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('bd_manage',array('id'=>$id,'op'=>'upload_data'))?>">批量导入</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='nav_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='nav_manage' && $op=='pcnav') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('nav_manage',array('id'=>$id))?>">大屏功能菜单</a>
	</li>
	<li <?php  if($_GPC['do']=='nav_manage' && $op=='appnav') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('nav_manage',array('id'=>$id,'op'=>'appnav'))?>">微信功能菜单</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='tshake_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='tshake_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('tshake_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='tshake_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('tshake_manage',array('id'=>$id,'op'=>'rotate'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='tshake_manage' && $op=='edit') { ?>
	<li <?php  if($_GPC['do']=='tshake_manage' && $op=='edit') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('tshake_manage',array('id'=>$id,'op'=>'edit','tshake_id'=>$tshake_id))?>"><?php  if(!empty($tshake_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='tshake_manage' && $op=='group' && !empty($rotate_id)) { ?>
	<li <?php  if($_GPC['do']=='tshake_manage' && $op=='group') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('tshake_manage',array('id'=>$id,'op'=>'group','rotate_id'=>$rotate_id))?>">参与记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('tshake_manage',array('op'=>'edit','id'=>$id))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='shuqian_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='shuqian_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('shuqian_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='shuqian_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('shuqian_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='shuqian_manage' && $op=='edit') { ?>
	<li <?php  if($_GPC['do']=='shuqian_manage' && $op=='edit') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('shuqian_manage',array('id'=>$id,'op'=>'edit','tshake_id'=>$tshake_id))?>"><?php  if(!empty($tshake_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='shuqian_manage' && $op=='group' && !empty($rotate_id)) { ?>
	<li <?php  if($_GPC['do']=='shuqian_manage' && $op=='group') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('shuqian_manage',array('id'=>$id,'op'=>'group','rotate_id'=>$rotate_id))?>">参与记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('shuqian_manage',array('op'=>'edit','id'=>$id))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='dzqy_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='dzqy_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dzqy_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='dzqy_manage' && $op=='edit') { ?>
	<li <?php  if($_GPC['do']=='dzqy_manage' && $op=='edit') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dzqy_manage',array('id'=>$id,'op'=>'edit','tshake_id'=>$tshake_id))?>"><?php  if(!empty($tshake_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='dzqy_manage' && $op=='group' && !empty($rotate_id)) { ?>
	<li <?php  if($_GPC['do']=='dzqy_manage' && $op=='group') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dzqy_manage',array('id'=>$id,'op'=>'group','rotate_id'=>$rotate_id))?>">参与记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('dzqy_manage',array('op'=>'edit','id'=>$id))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='mshake_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='mshake_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('mshake_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='mshake_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('mshake_manage',array('id'=>$id,'op'=>'rotate'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='mshake_manage' && $op=='edit') { ?>
	<li <?php  if($_GPC['do']=='mshake_manage' && $op=='edit') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('mshake_manage',array('id'=>$id,'op'=>'edit','mshake_id'=>$mshake_id))?>"><?php  if(!empty($mshake_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='mshake_manage' && $op=='user' && !empty($rotate_id)) { ?>
	<li <?php  if($_GPC['do']=='mshake_manage' && $op=='user') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('mshake_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('mshake_manage',array('op'=>'edit','id'=>$id))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='dt_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='dt_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dt_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='dt_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dt_manage',array('id'=>$id,'op'=>'list'))?>">题目管理</a>
	</li>
	<?php  if($_GPC['do']=='dt_manage' && $op=='post') { ?>
	<li <?php  if($_GPC['do']=='dt_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dt_manage',array('id'=>$id,'op'=>'post','dt_id'=>$dt_id))?>"><?php  if(!empty($tshake_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>题目</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='dt_manage' && $op=='user' && !empty($dt_id)) { ?>
	<li <?php  if($_GPC['do']=='dt_manage' && $op=='user') { ?>class="active"<?php  } ?>>
		<a >抽中用户</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('dt_manage',array('op'=>'post','id'=>$id))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增题目</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='xys_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='xys_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('xys_manage',array('id'=>$rid))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='xys_manage' && $op=='list' && $isshow==1) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('xys_manage',array('op'=>'list','isshow'=>1,'id'=>$rid))?>">已审核</a>
	</li>
	<li <?php  if($_GPC['do']=='xys_manage' && $op=='list' && $isshow==2) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('xys_manage',array('op'=>'list','isshow'=>2,'id'=>$rid))?>">待审核</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='ydj_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='ydj_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('ydj_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='ydj_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('ydj_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<li <?php  if($_GPC['do']=='ydj_manage' && $op=='dellist') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('ydj_manage',array('id'=>$id,'op'=>'dellist'))?>">已删轮数</a>
	</li>
	<?php  if($_GPC['do']=='ydj_manage' && $op=='rotate') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('ydj_manage',array('id'=>$id,'op'=>'rotate'))?>">新增轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='ydj_manage' && $op=='rotatejp') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('ydj_manage',array('id'=>$id,'op'=>'rotatejp'))?>">奖品详情</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='ydj_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('ydj_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='ydj_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('ydj_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('ydj_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='dmredpack_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='dmredpack_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dmredpack_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='dmredpack_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dmredpack_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<li <?php  if($_GPC['do']=='dmredpack_manage' && $op=='dellist') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dmredpack_manage',array('id'=>$id,'op'=>'dellist'))?>">已删轮数</a>
	</li>
	<?php  if($_GPC['do']=='dmredpack_manage' && $op=='rotate') { ?>
	<li <?php  if($_GPC['do']=='dmredpack_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dmredpack_manage',array('id'=>$id,'op'=>'rotate','rotate_id'=>$rotate_id))?>">新增轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='dmredpack_manage' && $op=='edit' && $rotate_id>0) { ?>
	<li <?php  if($_GPC['do']=='dmredpack_manage' && $op=='edit') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('dmredpack_manage',array('id'=>$id,'op'=>'edit','rotate_id'=>$rotate_id))?>">编辑轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='dmredpack_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('dmredpack_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='dmredpack_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('dmredpack_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('dmredpack_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='yyy3d_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='yyy3d_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('yyy3d_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='yyy3d_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('yyy3d_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='yyy3d_manage' && $op=='rotate') { ?>
	<li <?php  if($_GPC['do']=='yyy3d_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('yyy3d_manage',array('id'=>$id,'op'=>'rotate','rotate_id'=>$rotate_id))?>"><?php  if(!empty($rotate_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='yyy3d_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('yyy3d_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='yyy3d_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('yyy3d_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('yyy3d_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='swimming_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='swimming_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('swimming_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='swimming_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('swimming_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='swimming_manage' && $op=='rotate') { ?>
	<li <?php  if($_GPC['do']=='swimming_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('swimming_manage',array('id'=>$id,'op'=>'rotate','rotate_id'=>$rotate_id))?>"><?php  if(!empty($rotate_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='swimming_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('swimming_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='swimming_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('swimming_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('swimming_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='tug_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='tug_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('tug_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='tug_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('tug_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='tug_manage' && $op=='rotate') { ?>
	<li <?php  if($_GPC['do']=='tug_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('tug_manage',array('id'=>$id,'op'=>'rotate','rotate_id'=>$rotate_id))?>"><?php  if(!empty($rotate_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='tug_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('tug_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='tug_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('tug_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('tug_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='horse_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='horse_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('horse_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='horse_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('horse_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='horse_manage' && $op=='rotate') { ?>
	<li <?php  if($_GPC['do']=='horse_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('horse_manage',array('id'=>$id,'op'=>'rotate','rotate_id'=>$rotate_id))?>"><?php  if(!empty($rotate_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='horse_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('horse_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='horse_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('horse_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('horse_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='boat_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='boat_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('boat_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='boat_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('boat_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='boat_manage' && $op=='rotate') { ?>
	<li <?php  if($_GPC['do']=='boat_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('boat_manage',array('id'=>$id,'op'=>'rotate','rotate_id'=>$rotate_id))?>"><?php  if(!empty($rotate_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='boat_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('boat_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='boat_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('boat_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('boat_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='yacht_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='yacht_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('yacht_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='yacht_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('yacht_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='yacht_manage' && $op=='rotate') { ?>
	<li <?php  if($_GPC['do']=='yacht_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('yacht_manage',array('id'=>$id,'op'=>'rotate','rotate_id'=>$rotate_id))?>"><?php  if(!empty($rotate_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='yacht_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('yacht_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='yacht_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('yacht_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('yacht_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='bike_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='bike_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('bike_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='bike_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('bike_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='bike_manage' && $op=='rotate') { ?>
	<li <?php  if($_GPC['do']=='bike_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('bike_manage',array('id'=>$id,'op'=>'rotate','rotate_id'=>$rotate_id))?>"><?php  if(!empty($rotate_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='bike_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('bike_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='bike_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('bike_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('bike_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='sailing_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='sailing_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sailing_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='sailing_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sailing_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='sailing_manage' && $op=='rotate') { ?>
	<li <?php  if($_GPC['do']=='sailing_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('sailing_manage',array('id'=>$id,'op'=>'rotate','rotate_id'=>$rotate_id))?>"><?php  if(!empty($rotate_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='sailing_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('sailing_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='sailing_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('sailing_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('sailing_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='mls_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='mls_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('mls_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='mls_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('mls_manage',array('id'=>$id,'op'=>'list'))?>">轮数管理</a>
	</li>
	<?php  if($_GPC['do']=='mls_manage' && $op=='rotate') { ?>
	<li <?php  if($_GPC['do']=='mls_manage' && $op=='rotate') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('mls_manage',array('id'=>$id,'op'=>'rotate','rotate_id'=>$rotate_id))?>"><?php  if(!empty($rotate_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>轮数</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='mls_manage' && $op=='user') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('mls_manage',array('id'=>$id,'op'=>'user','rotate_id'=>$rotate_id))?>">用户记录</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='mls_manage' && $op=='lucker') { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('mls_manage',array('id'=>$id,'op'=>'lucker','rotate_id'=>$rotate_id))?>">中奖用户记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('mls_manage',array('id'=>$id,'op'=>'rotate'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增轮数</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='lottory_3d_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='lottory_3d_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('lottory_3d_manage',array('op'=>'config','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='lottory_3d_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('lottory_3d_manage',array('op'=>'list','id'=>$id))?>">奖项列表</a>
	</li>
	<li <?php  if($_GPC['do']=='lottory_3d_manage' && $op=='luckuser') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('lottory_3d_manage',array('op'=>'luckuser','id'=>$id))?>">中奖记录</a>
	</li>
	<?php  if($_GPC['do']=='lottory_3d_manage' && $op=='post') { ?>
	<li <?php  if($_GPC['do']=='lottory_3d_manage' && $op=='post') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('lottory_3d_manage',array('id'=>$id,'op'=>'post','award_id'=>$award_id))?>"><?php  if(!empty($award_id)) { ?>编辑<?php  } else { ?>新增<?php  } ?>奖项</a>
	</li>
	<?php  } ?>
	<?php  if($_GPC['do']=='lottory_3d_manage' && $op=='luckuser' && !empty($award_id)) { ?>
	<li <?php  if($_GPC['do']=='lottory_3d_manage' && $op=='luckuser') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('lottory_3d_manage',array('id'=>$id,'op'=>'luckuser','award_id'=>$award_id))?>">中奖记录</a>
	</li>
	<?php  } ?>
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('lottory_3d_manage',array('op'=>'post','id'=>$id))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增奖项</a>
	</li>
</ul>
<?php  } else if($_GPC['do'] == 'urls') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='urls' && $op=='list') { ?>class="active"<?php  } ?>>
			<a href="<?php  echo $this->createWebUrl('urls',array('op'=>'list','id'=>$id))?>">活动链接列表</a>
	</li>
	<li <?php  if($_GPC['do']=='urls' && $op=='make') { ?>class="active"<?php  } ?>>
			<a href="<?php  echo $this->createWebUrl('urls',array('op'=>'make','id'=>$id))?>">短连接转换</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='newqd_config') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='newqd_config' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newqd_config',array('id'=>$rid))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='newqd_config' && $op=='jd') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newqd_config',array('id'=>$rid,'op'=>'jd'))?>">精度设置</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='shakestart_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='shakestart_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('shakestart_manage',array('id'=>$rid))?>">基础设置</a>
	</li>
	
</ul>
<?php  } else if($_GPC['do']=='rolllottory_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='rolllottory_manage' && $op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('rolllottory_manage',array('op'=>'list','id'=>$id))?>">模式列表</a>
	</li>
	<?php  if($_GPC['do']=='rolllottory_manage' && $op=='editmode' && !empty($modeid)) { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('rolllottory_manage',array('op'=>'editmode','id'=>$id,'modeid'=>$modeid))?>">编辑模式</a>
	</li>
	<?php  } ?>
	<li <?php  if($_GPC['do']=='rolllottory_manage' && $op=='award') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('rolllottory_manage',array('id'=>$id,'op'=>'award','modeid'=>$modeid))?>">奖品列表</a>
	</li>
	
	<li <?php  if($_GPC['do']=='rolllottory_manage' && $op=='addaward') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('rolllottory_manage',array('id'=>$id,'op'=>'addaward'))?>">新增奖品</a>
	</li>
	<?php  if($_GPC['do']=='rolllottory_manage' && $op=='editaward' && !empty($awardid)) { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('rolllottory_manage',array('op'=>'editaward','id'=>$id,'awardid'=>$awardid))?>">编辑奖品</a>
	</li>
	<?php  } ?>
	<li <?php  if($_GPC['do']=='rolllottory_manage' && $op=='record') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('rolllottory_manage',array('id'=>$id,'op'=>'record'))?>">中奖记录列表</a>
	</li>
	<?php  if($_GPC['do']=='rolllottory_manage' && $op=='editrecord' && !empty($recordid)) { ?>
	<li class="active">
		<a href="<?php  echo $this->createWebUrl('rolllottory_manage',array('id'=>$id,'op'=>'editrecord','recordid'=>$recordid))?>">编辑中奖记录</a>
	</li>
	<?php  } ?>
	<li <?php  if($_GPC['do']=='rolllottory_manage' && $op=='notice') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('rolllottory_manage',array('id'=>$id,'op'=>'notice'))?>">通告通知</a>
	</li>
	
	<li class="pull-right active">
			<a href="<?php  echo $this->createWebUrl('rolllottory_manage',array('id'=>$id,'op'=>'addmode'))?>" class="btn btn-primary" ><i class="fa fa-plus" ></i> 新增模式</a>
	</li>
</ul>
<?php  } else if($_GPC['do']=='faceqd_manage') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='faceqd_manage' && $op=='config') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('faceqd_manage',array('id'=>$id,'op'=>'config'))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['do']=='faceqd_manage' && $op=='bd') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('faceqd_manage',array('id'=>$id,'op'=>'bd'))?>">报名表单</a>
	</li>
	<li <?php  if($_GPC['do']=='faceqd_manage' && $op=='bm') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('faceqd_manage',array('id'=>$id,'op'=>'bm'))?>">报名管理</a>
	</li>
	<li <?php  if($_GPC['do']=='faceqd_manage' && $op=='qd') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('faceqd_manage',array('id'=>$id,'op'=>'qd'))?>">签到用户</a>
	</li>
</ul>
<?php  } ?>
<div class="msg-tips" style="display:none">
	<i class="fa fa-bullhorn"></i> 此功能当前处于测试阶段，最多只能有<?php  echo $sys_config['default_join'];?>人参与。<a href="<?php  echo $this->createWebUrl('web_pay',array('id'=>$id))?>"  class="btn btn-success">立即开通</a>
</div>
<?php  if($reply['is_pay']!=1 && !$_W['isfounder'] && !in_array($_GPC['do'],$this->sys_total_control())) { ?>
<div class="tips-danger tips-danger2 clearfix">
	<p style="display: inline;"><i class="fa fa-bullhorn"></i> 当前活动处于测试模式，最多只能有<?php  echo $sys_config['default_join'];?>人参与。</p>
	<a href="<?php  echo $this->createWebUrl('web_pay',array('id'=>$id))?>" class="btn btn-success" style="color:#fff!important">立即开通</a>
</div>
<?php  } ?>