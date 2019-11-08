<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<ul class="nav nav-tabs">
	<li <?php  if($operation == 'display' && $status == '') { ?>class="active"<?php  } ?>>
        <a href="<?php  echo $this->createWebUrl('shop_order', array('op' => 'display','rid'=>$rid))?>">全部订单</a>
    </li>
	<li <?php  if($operation == 'display' && $status == '2') { ?> class="active"<?php  } ?>>
        <a href="<?php  echo $this->createWebUrl('shop_order', array('op' => 'display', 'status' =>2,'rid'=>$rid))?>">待送达</a>
    </li>
	<li <?php  if($operation == 'display' && $status == '3') { ?>class="active"<?php  } ?>>
        <a href="<?php  echo $this->createWebUrl('shop_order', array('op' => 'display', 'status' => 3,'rid'=>$rid))?>">已完成</a>
    </li>
	<li <?php  if($operation == 'display' && $status == '4') { ?>class="active"<?php  } ?>>
        <a href="<?php  echo $this->createWebUrl('shop_order', array('op' => 'display', 'status' => 4,'rid'=>$rid))?>">已关闭</a>
    </li>
	<?php  if($operation == 'detail') { ?>
    <li class="active">
        <a href="#">订单详情</a>
    </li>
    <?php  } ?>
</ul>

<?php  if($operation == 'display') { ?>


<div class="main">
    <div class="panel panel-info">
	    <div class="panel-heading">筛选</div>
	    <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" role="form" id="form1">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="hm_newdpm" />
                <input type="hidden" name="do" value="shop_order" />
                <input type="hidden" name="rid" value="<?php  echo $rid;?>" />
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">订单号</label>
                    <div class="col-sm-8 col-lg-9 col-xs-12">
                        <input class="form-control" name="keyword" id="" type="text" value="<?php  echo $_GPC['keyword'];?>" placeholder="可查询订单号">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">用户信息</label>
                    <div class="col-sm-8 col-lg-9 col-xs-12">
                        <input class="form-control" name="member" id="" type="text" value="<?php  echo $_GPC['member'];?>" placeholder="可查询昵称">
                    </div>
                </div>

                <div class="form-group">
                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">下单时间</label>
                        <div class="col-sm-7 col-lg-9 col-xs-12">
                            <?php  echo tpl_form_field_daterange('time', array('starttime'=>date('Y-m-d', $starttime),'endtime'=>date('Y-m-d', $endtime)));?>
                        </div>
                        <div class="col-sm-3 col-lg-2"><button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button></div>
                    </div>
                <div class="form-group">
                </div>
            </form>
	    </div>
	</div>
	<button class="btn btn-success" onclick="location.href='<?php  echo $this->createWebUrl('download_shop',array('rid'=>$_GPC['rid']))?>'" type="button"><i class="fa fa-search"></i> 导出订单</button>

	<div class="panel panel-default">
		<div class="panel-body table-responsive">
			<table class="table table-hover">
				<thead class="navbar-inner">
					<tr>
						<th style="width:180px;">订单号</th>
						<th style="width:150px;">昵称</th>
						<th style="width:80px;">支付方式</th>
						<th style="width:80px;">配送方式</th>
						<th style="width:50px;">运费</th>
						<th style="width:100px;">总价</th>
						<th style="width:80px;">状态</th>
						<th style="width:150px;">下单时间</th>
						<th style="width:120px; text-align:right;">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($list)) { foreach($list as $item) { ?>
					<tr>
						<td><?php  echo $item['transid'];?></td>
						<td><?php  echo $item['nickname'];?></td>
						<td><?php  if($item['status']==1) { ?><span class="label label-default">未支付</span><?php  } else { ?><span class="label label-info">微信支付</span><?php  } ?></td>
						<td>现场配送</td>
						<td>免运费</td>
						<td><?php  echo $item['pay_total'];?> 元</td>
						<td>
							<?php  if($item['status']==1) { ?>
							<span class="label label-default">未付款</span>
							<?php  } else if($item['status']==2) { ?>
							<span class="label label-warning">待送达</span>
							<?php  } else if($item['status']==3) { ?>
							<span class="label label-success">已完成</span>
							<?php  } else { ?>
							<span class="label label-danger">已取消</span>
							<?php  } ?>
						<td><?php  echo date('Y-m-d H:i:s', $item['createtime'])?></td>
						<td style="text-align:right;">
							<a href="<?php  echo $this->createWebUrl('shop_order', array('op' => 'detail', 'id' => $item['id'],'rid'=>$item['rid']))?>" class="btn btn-success btn-sm">查看订单</a>
							<a href="<?php  echo $this->createWebUrl('shop_order', array('id' => $item['id'], 'op' => 'delete','rid'=>$item['rid']))?>" onclick="return confirm('此操作不可恢复，确认删除？');"
								class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="bottom" title="删除"><i class="fa fa-times"></i>
							</a>
						</td>
					</tr>
					<?php  } } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php  echo $pager;?>
<script type="text/javascript">
	require(['daterangepicker'], function($){
		$('.daterange').on('apply.daterangepicker', function(ev, picker) {
			$('#form1')[0].submit();
		});
	});
</script>

<?php  } else if($operation == 'detail') { ?>

<style type="text/css">
	.main .form-horizontal .form-group{margin-bottom:0;}
	.main .form-horizontal .modal .form-group{margin-bottom:15px;}
	#modal-confirmsend .control-label{margin-top:0;}
</style>

<div class="main">
	<form class="form-horizontal form" action="" method="post" enctype="multipart/form-data">

		<input type="hidden" name="dispatchid" value="<?php  echo $dispatch['id'];?>" />
		<div class="panel panel-default">
			<div class="panel-heading">
				订单号：<?php  echo $ids;?>
			</div>
			<div class="panel-body">
				<?php  if($item['transaction_id']) { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">交易号 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $item['transaction_id'];?></p>
					</div>
				</div>
				<?php  } ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">总额 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $item['pay_total'];?> 元</p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">配送方式 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static">现场配送</p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">付款方式 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static">
							<?php  if($item['orderid'] == 1) { ?>余额支付<?php  } ?>
							<?php  if($item['orderid'] == 2) { ?>微信支付<?php  } ?>
							<?php  if($item['orderid'] == 3) { ?>支付宝支付<?php  } ?>
							<?php  if($item['orderid'] == 4) { ?>货到付款<?php  } ?>
						</p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">订单状态 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static">
						<?php  if($item['status'] == 1) { ?><span class="label label-default">未付款</span><?php  } ?>
						<?php  if($item['status'] == 2) { ?><span class="label label-info">待送达</span><?php  } ?>
						<?php  if($item['status'] == 3) { ?><span class="label label-success">已完成</span><?php  } ?>
						<?php  if($item['status'] == 4) { ?><span class="label label-danger">已取消</span><?php  } ?>
						</p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">下单日期 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo date('Y-m-d H:i:s', $item['createtime'])?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">位置 :</label>
					<div class="col-sm-9 col-xs-12">
						<div disabled style="height:150px;text-align: left" class="form-control" name="remark" cols="70">
						<?php  echo $item['wordimg'];?>
				     	</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				用户信息
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">昵称 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  if($item['user']['realname']) { ?><?php  echo $item['user']['nickname'];?><?php  } else { ?><?php  echo $item['user']['nickname'];?><?php  } ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $item['user']['mobile'];?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				商品信息<span class="text-muted"></span>
			</div>
			<div class="panel-body table-responsive">
				<table class="table table-hover">
					<thead class="navbar-inner">
					<tr>
						<th style="width:5%;">ID</th>
						<th style="width:10%;">商品标题</th>
						<th style="width:20%;">销售价/成本价</th>
						<th style="width:10%;">属性</th>
						<th style="width:10%;color:red;">成交价</th>
						<th style="width:5%;">数量</th>
						<th style="width:10%;">操作</th>
					</tr>
					</thead>
					<?php  if(is_array($item['goods'])) { foreach($item['goods'] as $goods) { ?>
					<tr>
						<td><?php  echo $goods['id'];?></td>
						<td>
							<?php  echo $goods['title'];?>
						</td>
						<td><?php  echo $goods['productprice'];?>元</td>
						<td><?php  if($goods['status']==1) { ?><span class="label label-success">正常</span><?php  } else { ?><span class="label label-error">下架</span><?php  } ?>&nbsp</td>
						<td style='color:red;font-weight:bold;'><?php  echo $goods['price'];?></td>
						<td><?php  echo $goods['number'];?></td>
						<td>
							<a href="<?php  echo $this->createWebUrl('shop_order', array('id' => $id, 'op' => 'delete','rid'=>$rid))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="bottom" title="删除"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					<?php  } } ?>
					<tr>
						<td colspan="10" class="text-right">
							<?php  if($item['status'] == 4) { ?>
								<button type="button" class="btn btn-danger">订单已取消</button>
							<?php  } else { ?>
								<?php  if($item['status']==1) { ?>
									<button type="button" class="btn btn-primary" name="confrimpay" value="yes">未付款</button>
								<?php  } else if($item['status'] == 3) { ?>

									<button type="button" class="btn btn-primary">订单完成</button>

								<?php  } else if($item['status'] ==2) { ?>
								<button type="submit" class="btn btn-success" onclick="return confirm('确认完成此订单吗？');" name="finish" value="yes">完成订单</button>
							    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-cancelsend">取消订单</button>

							     <?php  } ?>
								<!--<button type="submit" class="btn btn-warning" onclick="return confirm('订单取消后将会进行相关的退款操作，确认取消此订单吗？');" name="cancelorder" value="yes">取消订单</button>-->
							<?php  } ?>

							<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>

		<!-- 取消发货 -->
		<div id="modal-cancelsend" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="width:600px;margin:0px auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
						<h3>取消订单</h3>
					</div>
					<div class="modal-body">
						<label>取消订单原因</label>
						<textarea style="height:150px;" class="form-control" name="cancelreson" autocomplete="off"></textarea>
						<div id="module-menus"></div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary span2" name="cancelsend" value="yes">取消订单</button>
						<a href="#" class="btn btn-default" data-dismiss="modal" aria-hidden="true">关闭</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<?php  } ?>
<script>
	require(['bootstrap'],function($){
		$('.btn').hover(function(){
			$(this).tooltip('show');
		},function(){
			$(this).tooltip('hide');
		});
	});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>