<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<?php  if($op == 'list') { ?>
<ul class="nav nav-tabs">
	<li <?php  if(empty($_GPC['is_pay'])) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_order')?>"><i class="fa fa-file-text" aria-hidden="true"></i> 活动订单</a>
	</li>
	<?php  if($op=='list') { ?>
	<li <?php  if($_GPC['is_pay']==1) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_order',array('is_pay'=>'1'))?>"><i class="fa fa-check-square" aria-hidden="true"></i> 活动已支付</a>
	</li>
	
	<li <?php  if($_GPC['is_pay']==2) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_order',array('is_pay'=>'2'))?>"<i class="fa fa fa-minus-square" aria-hidden="true"></i> 活动待支付</a>
	</li>
	<?php  } ?>
	<li>
		<a href="<?php  echo $this->createWebUrl('my_order',array('op'=>'redpack'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 红包订单</a>
	</li>
</ul>
<div class="panel panel-default">
	<div class="panel-body">
		<form action="" class="form-inline  pull-left" method="get">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="meepo_xianchang" />
			<input type="hidden" name="do" value="my_order" />
			<div class="input-group form-group" style="width: 400px;">
				<input type="text" name="title" value="<?php  echo $_GPC['title'];?>" class="form-control" placeholder="请输入活动名称">
				<span class="input-group-btn"><button class="btn btn-default"><i class="fa fa-search"></i></button></span>
			</div>
		</form>
	</div>
</div>
<style>
.start_time,.end_time,.gn_list{padding:10px;}
.title{padding:10px 0 10px 0;}
.zam_icon{line-height:40px;}
</style>
<div class="panel panel-default order-lists" ng-controller="orderCtrl">
		<table class="table table-hover">
			<thead class="navbar-inner">
				<tr>
					<th style="width:30%">活动名称</th>
					<th style="width:50%">订单详情</th>
					<th style="width:10%">支付类型</th>
					<th style="width:20%">订单状态</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($orders)) { foreach($orders as $item) { ?>
				<tr>
				    <td>
						<div class="start_time"><?php  echo $item['title'];?></div>
						<?php  if($_W['isfounder'] || in_array('my_order',$_user_sys_control)) { ?><div class="start_time">用户名称:&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-danger"><?php  echo $item['uid_username'];?></span></div><?php  } ?>
						<div class="start_time">开始时间:<?php  echo date('Y-m-d H:i:s',$item['start_time']);?></div>
						<div class="end_time">结束时间:<?php  echo date('Y-m-d H:i:s',$item['end_time']);?></div>
					</td>
					<td>
						
						<div class="gn_list">
							<div class="title">活动功能:</div>
							<ul id="order_moduleList" class="order_moduleList order_line">
								<?php  $module = iunserializer($item['controls']);?>
								<?php  if(is_array($module)) { foreach($module as $row) { ?>
								<li class="module_on" ng-mouseenter="tooltip()" data-toggle="tooltip" data-placement="top" title="<?php  echo $this->get_module_name($row);?>">
									<?php  if(is_array($sys_modules)) { foreach($sys_modules as $val) { ?>
										<?php  if($val['control']==$row) { ?>
											<i class="<?php  echo $val['icon'];?>"></i>
											
										<?php  } ?>
									<?php  } } ?>
								</li> 
								<?php  } } ?>
								<?php  $zz_module = iunserializer($item['zz_controls']);?>
								<?php  if(is_array($zz_module) && !empty($zz_module)) { ?>
								<?php  if(is_array($zz_module)) { foreach($zz_module as $row) { ?>
									<?php  if(is_array($sys_service)) { foreach($sys_service as $val) { ?>
									<?php  if($val['zz_control']==$row) { ?>
									<li class="module_on" ng-mouseenter="tooltip()" data-toggle="tooltip" data-placement="top" title="<?php  echo $val['zz_name'];?>">
												<i class="zam_icon <?php  echo $val['zz_icon'];?>"></i>
									</li> 
									<?php  } ?>
									<?php  } } ?>
								<?php  } } ?>
								<?php  } ?>
								<li class="module_on" ng-mouseenter="tooltip()" data-toggle="tooltip" data-placement="top" title="<?php  if($item['can_join']>0) { ?><?php  echo $item['can_join'];?><?php  } else { ?>不限制参与<?php  } ?>人">
									<i class="meepo-users"></i>
									
								</li> 
							</ul>
						</div>
						
					</td>
					<td>
						<div class="start_time"><span class="label <?php  if($item['pay_type']=='wechat' || empty($item['pay_type'])) { ?>label-success<?php  } else if($item['pay_type']=='alipay') { ?>label-info<?php  } else if($item['pay_type']=='credit') { ?>label-danger<?php  } ?>">
								<?php  if($item['pay_type']=='wechat' || empty($item['pay_type'])) { ?>微信支付<?php  } else if($item['pay_type']=='alipay') { ?>支付宝支付<?php  } else if($item['pay_type']=='credit') { ?>余额支付<?php  } ?>
								
								</span></div>
						
					</td>
					<td>
						<div class="start_time"><span class="label <?php  if($item['is_pay']==1) { ?>label-success<?php  } else { ?>label-danger<?php  } ?>"><?php  if($item['is_pay']==1) { ?>支付成功<?php  } else { ?>支付未完成<?php  } ?></span><?php  if($item['is_pay']==2) { ?><br><br><a class="btn btn-success" href="<?php  echo $this->createWebUrl('web_pay',array('id'=>$item['id']))?>">去支付</a><?php  } ?></div>
						<div class="end_time">共计:<span class="label label-success"><?php  echo $item['total_money'];?>元</span></div>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
		</table>
		<div class="pager_box">
			<?php  echo $pager;?>
		</div>
</div><!--wall-list-->
<script>
	require(['angular', 'jquery', 'util'], function(angular, $, util){

		var app = angular.module('app', []);
		app.controller('orderCtrl', function($scope,$http){
			$scope.tooltip = function(){
		      $('[data-toggle="tooltip"]').tooltip();
		    }
		});
		angular.bootstrap(document, ['app']);
	});
</script>
<?php  } else if($op=='redpack') { ?>
<ul class="nav nav-tabs">
	<li>
		<a href="<?php  echo $this->createWebUrl('my_order')?>"><i class="fa fa-file-text" aria-hidden="true"></i>活动订单</a>
	</li>
	<li <?php  if(empty($_GPC['status'])) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_order',array('op'=>'redpack'))?>"><i class="fa fa-file-text" aria-hidden="true"></i>红包订单</a>
	</li>
	<?php  if($op=='redpack') { ?>
	<li <?php  if($_GPC['status']==1) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_order',array('op'=>'redpack','status'=>'1'))?>"><i class="fa fa-check-square" aria-hidden="true"></i>红包已支付</a>
	</li>
	<li <?php  if($_GPC['status']==2) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_order',array('op'=>'redpack','status'=>'2'))?>"<i class="fa fa fa-minus-square" aria-hidden="true"></i>红包待支付</a>
	</li>
	<?php  } ?>
</ul>
<?php  if($_W['isfounder']||in_array('my_order',$_user_sys_control)) { ?>
<div class="panel panel-default">
    <div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="" class="form-horizontal" method="get">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="meepo_xianchang" />
			<input type="hidden" name="do" value="my_order" />
			<input type="hidden" name="op" value="redpack" />
			<input type="hidden" name="status" value="<?php  echo $_GPC['status'];?>" />
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">选择用户</span></label>
					<div class="col-sm-9">
						<select name="user_uid" class='form-control'>
							 <option   value="0">请选择用户</option>
							 <?php  if(is_array($accounts)) { foreach($accounts as $key => $row) { ?>
							 <option   value="<?php  echo $row['uid'];?>"  <?php  if($check_uid==$row['uid']) { ?>selected<?php  } ?>><?php  echo $row['username'];?></option>
							 <?php  } } ?>
						</select>
					</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label"></label>
				<div class="col-sm-8 col-lg-9 col-xs-12">
					<input class="btn btn-primary" id="" type="submit" value="搜索">
				</div>
			</div>
		</form>
	</div>
</div>
<?php  } ?>
<form action="" method="post" class="form-horizontal" role="form" ng-controller="formCtrl" id="form2">
<div class="panel panel-default">
	<div class="panel-heading">账户充值明细</div>
	<div class="panel-body">
		<table class="table table-hover" style="display:auto;">
				<thead class="navbar-inner">
					<tr >
					   <th style="width:10%;text-align:center">用户名</th>
					   <th style="width:10%;text-align:center">状态</th>
                       <th style="width:30%;text-align:center">详细</th>
					   <th style="width:20%;text-align:center">时间</th>
					   <th style="width:10%;text-align:center">支付类型</th>
					   <th style="width:20%;text-align:center">操作</th>
					</tr>
				</thead>
				<tbody>
					
					<?php  if(is_array($cz_record)) { foreach($cz_record as $item) { ?>
					<tr>
							<td class="row-hover" style="text-align:center"><?php  echo $item['username'];?></td>
							<td class="row-hover" style="text-align:center">
							<?php  if($item['type']=='1') { ?>
							<?php  if($item['status']==1) { ?><span class="label label-success">支付成功</span><?php  } else { ?><span class="label label-danger">支付失败</span><?php  } ?>
							<?php  } else { ?>
							<span class="label label-success">操作成功</span>
							<?php  } ?>
							</td>
							<td style="text-align:center">
								<p>支付总金额: <span class="label label-danger"><?php  echo $item['total_money'];?>元</span></p>
								<p>充值金额: <span class="label label-danger"><?php  echo $item['money'];?>元</span></p>
								<p>充值手续费: <span class="label label-danger"><?php  echo $item['sxf'];?>元</span></p>
							</td>
							<td class="row-hover" style="text-align:center"><?php  echo date('Y-m-d H:i:s',$item['createtime'])?></td>
							<td>
								
								<?php  if($item['type']=='1') { ?>
								<div class="start_time">
								<span class="label <?php  if($item['pay_type']=='wechat' || empty($item['pay_type'])) { ?>label-success<?php  } else if($item['pay_type']=='alipay') { ?>label-info<?php  } else if($item['pay_type']=='credit') { ?>label-danger<?php  } ?>">
								<?php  if($item['pay_type']=='wechat' || empty($item['pay_type'])) { ?>微信支付<?php  } else if($item['pay_type']=='alipay') { ?>支付宝支付<?php  } else if($item['pay_type']=='credit') { ?>余额支付<?php  } ?>
								</span>
								</div>
								<?php  } else { ?>
									<p><span class="label label-danger">管理员操作</span>: <?php  echo $item['beizhu'];?></p>
								<?php  } ?>
								
								
							</td>
							<td style="text-align:center">
								<?php  if($item['status']==1) { ?><a class="btn btn-success">支付成功</a><?php  } else { ?><a class="btn btn-danger" href="<?php  echo $this->createWebUrl('redpack_wallet',array('op'=>'pay','order_id'=>$item['id']))?>">重新支付</a><?php  } ?>
							</td>
							
					</tr>
					<?php  } } ?>
				</tbody>
				<!--<tr>
					<td><input type="checkbox" onclick="var ck = this.checked;$(':checkbox').each(function(){this.checked = ck});"></td>
                    <td colspan="12">
						<input type="submit" class="btn btn-pramary" name="down" value="导出选定数据" />
                        <input type="submit" class="btn btn-pramary" name="downall" value="导出所有数据" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
                    </td>
				</tr>-->
			</table>
			<div class="pager_box">
			<?php  echo $pager;?>
			</div>
	</div>
</div>
</form>
<?php  } ?>
<?php  include $this->template('common/_footer')?>