<?php defined('IN_IA') or exit('Access Denied');?><style>
#tixian_menu{position:relative}
.tx_badge{
	display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    /* font-size: 12px; */
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    background-color: red;
    border-radius: 10px;
	position:absolute;
	top:0px;
	right:-5px;
}
</style>
<li <?php  if(empty($_GPC['do']) || $_GPC['do']=='list') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('list')?>"><?php  if($_W['isfounder'] || in_array('list',$_user_sys_control)) { ?>活动管理<?php  } else { ?>我的活动<?php  } ?></a></li>
<li <?php  if($_GPC['do']=='my_home') { ?>class="active"<?php  } ?>><a  href="<?php  echo $this->createWebUrl('my_home')?>">个人中心</a></li>
<li <?php  if($_GPC['do']=='my_order') { ?>class="active"<?php  } ?>><a  href="<?php  echo $this->createWebUrl('my_order')?>"><?php  if($_W['isfounder'] || in_array('my_order',$_user_sys_control)) { ?>订单管理<?php  } else { ?>我的订单<?php  } ?></a></li>
<?php  if($_W['isfounder'] || in_array('account_manage',$_user_sys_control) || in_array('manager_tixian',$_user_sys_control) || in_array('manage_login',$_user_sys_control)) { ?>
 <?php  if($_W['isfounder'] || (!$_W['isfounder']&&in_array('account_manage',$_user_sys_control))) { ?>
<li <?php  if($_GPC['do']=='account_manage') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('account_manage')?>">账户管理</a></li>
<?php  } ?>
 <?php  if($_W['isfounder'] || (!$_W['isfounder']&&in_array('manager_tixian',$_user_sys_control))) { ?>
<li <?php  if($_GPC['do']=='manager_tixian') { ?>class="active"<?php  } ?> id="tixian_menu"><a href="<?php  echo $this->createWebUrl('manager_tixian')?>">用户提现</a><?php  if($need_dotx_records>0) { ?><span class="tx_badge" id="notice-total"><?php  echo $need_dotx_records;?></span><?php  } ?></li>
<?php  } ?>
 <?php  if($_W['isfounder'] || (!$_W['isfounder']&&in_array('manage_login',$_user_sys_control))) { ?>
<li><a href="<?php  echo str_replace('./','',$_W['siteroot'].'app/'.$this->createMobileUrl('manage_login'))?>" target="_blank">独立登录</a></li>
<?php  } ?>
<?php  } ?>