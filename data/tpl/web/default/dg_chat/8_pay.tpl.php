<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
.modal-body{padding:0px;}
.table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{
  white-space:normal;
}
</style>
<?php  if(empty($_GPC['type'])) { ?>
	<div class="main">
	<div class="panel panel-info">
	<div class="panel-heading">概况</div>
			<div class="panel-body">
				<style>
				.vw {
					width: 50%;
					min-height: 100px;
					float:left;
					text-align: center;
					line-height:50px;
					
				}
				</style>
				<div class="vw">
					<h2><?php  echo $total['total'];?></h2>
					<p>总支付次数</p>
				</div>
				<div class="vw">
					<h2>￥<?php  echo $total['pay_money'];?></h2>
					<p>总收入</p>
				</div>
				
				
			</div>
	</div>
	
	<div class="panel panel-default">    
		<div class="panel-body table-responsive">
			<table class="table table-hover">
				<thead class="navbar-inner">
					<tr>
						<th></th>
						<th>今日</th>
						<th>昨天</th> 			
						<th>近七天</th>
						<th>近一个月</th>   
					</tr>
				</thead>
				<tbody>
					<tr>
					  <th>付费次数</th>
					  <td><?php  echo $a['total'];?></td>
					  <td><?php  echo $b['total'];?></td>
					  <td><?php  echo $c['total'];?></td>
					  <td><?php  echo $d['total'];?></td>
					</tr>
					<tr>
					  <th>付费金额</th>
					  <td><?php echo empty($a['pay_money'])?'0.00':$a['pay_money'];?></td>
					  <td><?php echo empty($b['pay_money'])?'0.00':$b['pay_money'];?></td>
					  <td><?php echo empty($c['pay_money'])?'0.00':$c['pay_money'];?></td>
					  <td><?php echo empty($d['pay_money'])?'0.00':$d['pay_money'];?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="panel-heading">	
	  <div class="row-fluid" style="float: right;">
		<div class="span8 control-group">
			<a class="btn btn-primary add_manager" href="<?php  echo $this->createWebUrl('pay',array('type'=>'list'))?>">
				查看收入明细</a>
			</div>
		</div>
	</div>
</div>
<?php  } else { ?>
<div class="main">
	<div class="panel panel-info">
		<div class="panel-heading">概况</div>
		<div class="panel-body">
			<form  method="get" class="form-horizontal" role="form">				
				<input type="hidden" name="c" value="site">
				<input type="hidden" name="a" value="entry">
				<input type="hidden" name="do" value="pay">
				<input type="hidden" name="type" value="list">
				<input type="hidden" name="m" value="dg_chat">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">时间</label>
					<div class="col-sm-6 col-lg-8">
						<?php  echo tpl_form_field_daterange('time', array('starttime'=>date('Y-m-d', $start),'endtime'=>date('Y-m-d', $end)));?>
					</div>
					<div class="pull-right col-xs-12 col-sm-3 col-lg-2">
						<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
	<div class="panel panel-default">    
		<div class="panel-heading">	
			<div class="row-fluid">
				<div class="span8 control-group">
					共计 <?php  echo $total['total'];?> 条数据 共<?php  echo $total['pay_money'];?>元<br>
					<label style="color:red;display:none;">若列表中话题名称为空则为直接购买房间</label>
				</div>
			</div>
		</div>
		<div class="panel-body table-responsive">
			<table class="table table-hover">
				<thead class="navbar-inner">
					<tr>
						<th>房间名</th>
						<th>话题名</th>
						<th>购买昵称</th> 			
						<th>支付金额</th>
						<th>购买类型</th>   
						<th>购买时间</th>   
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($pay_data)) { foreach($pay_data as $row) { ?>
					<tr>
						<td><?php  echo $row['room_name'];?></td>
						<td><?php  echo $row['topic_name'];?></td>
						
						<td><?php  echo $row['pay_nickname'];?></td>
						<td><?php  echo $row['pay_money'];?></td>
						<td><?php  if($row['pay_type']==1) { ?>赞赏<?php  } else { ?>
							<?php  echo $row['payto_type'];?><?php  } ?></td>
						<td><?php  echo date('Y/m/d H:i:s', $row['create_time']);?></td>
					</tr>
					<?php  } } ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php  echo $pager;?>
</div>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>