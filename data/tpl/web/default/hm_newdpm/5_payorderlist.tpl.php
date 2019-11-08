<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="main">
	<ul class="nav nav-tabs">
		<li<?php  if($_GPC['do'] == 'payorderlist' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('Bm_order',array('rid'=>$rid));?>">报名支付订单管理</a></li>
        <!-- <li<?php  if($_GPC['do'] == 'post') { ?> class="active"<?php  } ?>><a class="btn-lg" href="<?php  echo $this->createWebUrl('newad');?>">添加广告</a></li> -->
	</ul>

	<div class="panel panel-default">
		<div class="panel-body table-responsive">
		<table class="table table-hover" >
			<thead class="navbar-inner">
				<tr>
					<th style="width:100px;">序号</th>
					<th style="width:80px;">微信昵称</th>
					<th style="width:120px;">报名姓名</th>
					<th style="width:220px;">订单号</th>
					<th style="width:100px;">金额</th>
					<th style="width:80px;">状态</th>
					<th style="width:80px;">支付方式</th>
					<th style="width:150px;">创建时间</th>
					<th style="width:120px;">操作</th>
				</tr>
			</thead>
			<tbody>
                    <?php  if(is_array($list)) { foreach($list as $row) { ?>
				<tr>
					<td><?php  echo $row['id'];?></td>
					<td><?php  echo $row['nickname'];?></td>
					<td style="white-space: normal;"><?php  echo $row['from_realname'];?></td>
					<td><?php  echo $row['transid'];?></td>
					<td><?php  echo $row['pay_total']?></td>
					<td><?php  if($row['status']==1) { ?><span style="color: #FF0000">未支付</span>	<?php  } else if($row['status']==2) { ?>已支付<?php  } else { ?>订单关闭<?php  } ?></td>
					<td><?php  if($row['orderid']==1) { ?>余额<?php  } else if($row['orderid']==2) { ?>微信支付<?php  } else if($row['orderid']==3) { ?>支付宝<?php  } else if($row['orderid']==0) { ?>未付款<?php  } else { ?>其他<?php  } ?></td>
					<td><?php  echo date('Y/m/d H:i',$row['createtime'])?></td>
					<td>
                        <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('Deletepay_order',array('id'=>$row['id']))?>');" title="删除"><i class="fa fa-times"></i></a>
                  	</td>
				</tr>
                <?php  } } ?>
			</tbody>
		</table>
	</div>
	</div>
    <div style="text-align:center;"><?php  echo $pager;?></div>
</div>
<script>
	require(['bootstrap'],function($){
		$('.btn').hover(function(){
			$(this).tooltip('show');
		},function(){
			$(this).tooltip('hide');
		});
	});
</script>
<script>
function drop_confirm(msg, url){
    if(confirm(msg)){
        window.location = url;
    }
}
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>