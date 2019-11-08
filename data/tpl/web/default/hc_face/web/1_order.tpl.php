<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="clearfix">

<ul class="nav nav-tabs">
	<li <?php  if(empty($status)) { ?>class="active"<?php  } ?>>
        <a href="<?php  echo $this->createWebUrl('order')?>">全部订单</a>
    </li>
    <li <?php  if($status==1) { ?>class="active"<?php  } ?>>
        <a href="<?php  echo $this->createWebUrl('order',array('status'=>1))?>">已解锁</a>
    </li>
    <li <?php  if($status==2) { ?>class="active"<?php  } ?>>
        <a href="<?php  echo $this->createWebUrl('order',array('status'=>2))?>">未解锁</a>
    </li>
</ul>

<div class="panel panel-default">
    <div class="panel-body">
        <p>累计收益：<b><?php  echo $all;?></b></p>
        <p>今日收益：<b><?php  echo $today;?></b></p>
    </div>
</div>
	<script type="text/javascript">
		$("#search").click(function(){
			$('#form1')[0].submit();
		})
	</script>

	<div class="order-list">
		<div class="panel-body table-responsive collapse in" id="order-template-item-4" style="padding: 0;">
			<table class="table table-bordered">
				<thead style="background-color: #FFFFFF;">
					<tr>
						<th style="width:10%">ID</th>
						<th style="width:20%; text-align:center;">解锁类型</th>
						<th style="width:20%; text-align:center;">买家</th>
						<th style="width:10%; text-align:center;">解锁状态</th>
						<th style="width:10%; text-align:center;">金额</th>
					</tr>
				</thead>
			</table>
		</div>

		<div class="panel panel-default">
			<?php  if(is_array($list)) { foreach($list as $index => $item) { ?>
			<div class="panel-heading clearfix" style="padding: 10px 15px;">
				<div class="pull-left">
					<b>商户单号: <?php  echo $item['trade_no'];?></b>
				</div>
			</div>
			<div class="panel-body table-responsive">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td style="width: 10%;vertical-align: middle;">
								<center><?php  echo $item['id'];?></center>
							</td>
							<td class="text-center" style="width:20%;vertical-align: middle;">
									<?php  if($item['type']=='bz') { ?>
									<span class="label label-warning">鼻相解读</span>
									<?php  } else if($item['type']=='sy') { ?>
									<span class="label label-success">事业运势报告</span>
									<?php  } else if($item['type']=='qg') { ?>
									<span class="label label-danger">情感运势报告</span>
									<?php  } else if($item['type']=='bg') { ?>
									<span class="label label-default">面相报告</span>
									<?php  } ?>
							</td>
							<td class="goods-info line-feed" style="width:20%;vertical-align: middle;">
								<div class="img">
									<img width="50" height="50" class="oscrollLoading" src="<?php  echo tomedia($item['avatar']);?>" data-url="<?php  echo tomedia($item['avatar']);?>" onerror="this.src='/web/resource/images/nopic-small.jpg'">
									<span><?php  echo $item['nickname'];?></span>
								</div>
							</td>
							<td class="text-center" style="width:10%;vertical-align: middle;">
								<?php  if($item['status']==1) { ?>
									<span class="label label-warning">已解锁</span>
								<?php  } else { ?>
									<span class="label label-success">未解锁</span>
								<?php  } ?>
							</td>
							<td class="text-center" style="width:10%;vertical-align: middle;">
								<?php  echo $item['money'];?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="panel-heading clearfix" style="padding: 10px 15px;">
				<div class="pull-left">下单时间：<?php  echo date('Y-m-d H:i:s',$item['createtime']);?></div>
				<div class="pull-right">OPENID：<?php  echo $item['openid'];?></div>
			</div>
			<?php  } } ?>
		</div>
		<div id="de1" style="margin-top: 15px;">
			<?php  echo $page;?>
		</div>

</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

<script type="text/javascript">
$(".exprecode").blur(function(){

	var code = $(this).val();
	var id = $(this).attr('data-id');
    $.ajax({
	    type: "POST",
	    url: "<?php  echo $this->createWebUrl('Order_post',array('act'=>'addexprecode'));php?>",
	    data: {id:id,code:code},
	    dataType: "json",
	    success: function(data){
	        alert('编辑成功');
	    }
	});
})
</script>