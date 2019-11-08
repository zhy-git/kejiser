<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('nav', TEMPLATE_INCLUDEPATH)) : (include template('nav', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<li <?php  if($op=='total') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_send_detail',array('op'=>'total'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 全部记录</a>
	</li>
	<li <?php  if($op=='bp') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_send_detail',array('op'=>'bp'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 霸屏</a>
	</li>
	<li <?php  if($op=='ds') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_send_detail',array('op'=>'ds'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 打赏</a>
	</li>
	<li <?php  if($op=='bb') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_send_detail',array('op'=>'bb'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 表白</a>
	</li>
	<li <?php  if($op=='gift') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_send_detail',array('op'=>'gift'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 送礼</a>
	</li>
	<li <?php  if($op=='dm') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_send_detail',array('op'=>'dm'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 弹幕</a>
	</li>
	<li <?php  if($op=='hb') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_send_detail',array('op'=>'hb'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 红包</a>
	</li>
	<li <?php  if($op=='song') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_send_detail',array('op'=>'song'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 点歌</a>
	</li>
	<li <?php  if($op=='data') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_send_detail',array('op'=>'data'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 数据统计</a>
	</li>
	<li <?php  if($op=='tx') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('barwall_send_detail',array('op'=>'tx'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 待提现统计</a>
	</li>
</ul>
<?php  if(in_array($op,array('total','bp','ds','bb','gift','dm','hb','song'))) { ?>
<div class="panel panel-default">
	<div class="panel-heading">筛选记录</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form" id="form1">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="meepo_xianchang" />
			<input type="hidden" name="do" value="barwall_send_detail" />
			<input type="hidden" name="op" value="<?php  echo $op;?>" />
			<div class="form-group">
				<label class="col-xs-6 col-sm-4 col-md-4 col-lg-2 control-label">粉丝昵称</label>
				<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
					<input class="form-control" name="nick_name" id="" type="text" value="<?php  echo $_GPC['nick_name'];?>" placeholder="请输入粉丝昵称" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-6 col-sm-4 col-md-4 col-lg-2 control-label">活动名称</label>
				<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
					<input class="form-control" name="title_name" id="" type="text" value="<?php  echo $_GPC['title_name'];?>" placeholder="请输入活动名称" />
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
<div class="panel panel-default order-lists" ng-controller="orderCtrl">
		<table class="table table-hover">
			<thead class="navbar-inner">
				<tr>
					<th style="width:30%;text-align:center">活动信息</th>
					<th style="width:15%">类型</th>
					<th style="width:20%">粉丝</th>
					<th style="width:15%">红包金额</th>
					<th style="width:20%">时间</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($redpack_send_lists)) { foreach($redpack_send_lists as $item) { ?>
					<tr>
						<td style="text-align:center">
							<div>
								<div class="rid_title" style="padding:5px;">
									<?php  if($item['had_del']==1) { ?>
										<span class="label label-danger">活动已经被删除</span>
									<?php  } else { ?>
										<a href="<?php  echo $this->createWebUrl('barwall_manage',array('id'=>$item['rid']))?>"><?php  echo $item['rid_title'];?></a>
									<?php  } ?>
								</div>
								<div>
									所属用户:<span class="label label-success"><?php  echo $item['rid_uidname'];?></span>
								</div>
							</div>
						</td>
						<td><?php  if($item['type']=='bp') { ?><span class="label label-success">霸屏<?php  } else if($item['type']=='ds') { ?><span class="label label-danger">打赏<?php  } else if($item['type']=='dm') { ?><span class="label label-warning">弹幕<?php  } else if($item['type']=='gift') { ?><span class="label label-danger">送礼<?php  } else if($item['type']=='bb') { ?><span class="label label-success">表白<?php  } else if($item['type']=='hb') { ?><span class="label label-success">红包<?php  } else if($item['type']=='song') { ?><span class="label label-success" style="background-color:red">点歌<?php  } ?></span></td>
						<td>
							<div class="user">
								<div class="avatar" ><img style="width:40px;height:40px;border-radius:50%" src="<?php  echo tomedia($item['avatar']);?>" /></div>
								<div class="nickname"><?php  echo $item['nickname'];?></div>
							</div>
						</td>
						<td><span class="label label-danger"><?php  echo $item['fee'];?>元</span></td>
						<td><?php  echo date('Y-m-d H:i:s',$item['createtime'])?></td>
					</tr>
				<?php  } } ?>
			</tbody>
		</table>
		<div class="pager_box">
			<?php  echo $pager;?>
		</div>
</div>
<script>
</script>
<?php  } else if($op=='data') { ?>
<style>
.account-stat-num > div{width:16.6%; float:left; font-size:16px; text-align:center;}
.account-stat-num > div span{display:block; font-size:30px; font-weight:bold;}
</style>
<div class="panel panel-default">
	<div class="panel-heading">
		昨日收入数据
	</div>
	<div class="panel-body">
		<div class="account-stat-num row">
			<div>昨日霸屏<span><?php  if(empty($yes_bp)) { ?>0.00<?php  } else { ?><?php  echo $yes_bp;?><?php  } ?>元</span></div>
			<div>昨日打赏<span><?php  if(empty($yes_ds)) { ?>0.00<?php  } else { ?><?php  echo $yes_ds;?><?php  } ?>元</span></div>
			<div>昨日表白<span><?php  if(empty($yes_bb)) { ?>0.00<?php  } else { ?><?php  echo $yes_bb;?><?php  } ?>元</span></div>
			<div>昨日弹幕<span><?php  if(empty($yes_dm)) { ?>0.00<?php  } else { ?><?php  echo $yes_dm;?><?php  } ?>元</span></div>
			<div>昨日送礼<span><?php  if(empty($yes_gift)) { ?>0.00<?php  } else { ?><?php  echo $yes_gift;?><?php  } ?>元</span></div>
			<div>昨日点歌<span><?php  if(empty($yes_song)) { ?>0.00<?php  } else { ?><?php  echo $yes_song;?><?php  } ?>元</span></div>
			<div>昨日累积<span><?php  if(empty($yes_all)) { ?>0.00<?php  } else { ?><?php  echo $yes_all;?><?php  } ?>元</span></div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		今日收入数据
	</div>
	<div class="panel-body">
		<div class="account-stat-num row">
			<div>今日霸屏<span><?php  if(empty($today_bp)) { ?>0.00<?php  } else { ?><?php  echo $today_bp;?><?php  } ?>元</span></div>
			<div>今日打赏<span><?php  if(empty($today_ds)) { ?>0.00<?php  } else { ?><?php  echo $today_ds;?><?php  } ?>元</span></div>
			<div>今日表白<span><?php  if(empty($today_bb)) { ?>0.00<?php  } else { ?><?php  echo $today_bb;?><?php  } ?>元</span></div>
			<div>今日弹幕<span><?php  if(empty($today_dm)) { ?>0.00<?php  } else { ?><?php  echo $today_dm;?><?php  } ?>元</span></div>
			<div>今日送礼<span><?php  if(empty($today_gift)) { ?>0.00<?php  } else { ?><?php  echo $today_gift;?><?php  } ?>元</span></div>
			<div>今日点歌<span><?php  if(empty($today_song)) { ?>0.00<?php  } else { ?><?php  echo $today_song;?><?php  } ?>元</span></div>
			<div>今日累积<span><?php  if(empty($today_all)) { ?>0.00<?php  } else { ?><?php  echo $today_all;?><?php  } ?>元</span></div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		总记收入数据
	</div>
	<div class="panel-body">
		<div class="account-stat-num row">
			<div>总计霸屏<span><?php  if(empty($total_bp)) { ?>0.00<?php  } else { ?><?php  echo $total_bp;?><?php  } ?>元</span></div>
			<div>总计打赏<span><?php  if(empty($total_ds)) { ?>0.00<?php  } else { ?><?php  echo $total_ds;?><?php  } ?>元</span></div>
			<div>总计表白<span><?php  if(empty($total_bb)) { ?>0.00<?php  } else { ?><?php  echo $total_bb;?><?php  } ?>元</span></div>
			<div>总计弹幕<span><?php  if(empty($total_dm)) { ?>0.00<?php  } else { ?><?php  echo $total_dm;?><?php  } ?>元</span></div>
			<div>总计送礼<span><?php  if(empty($total_gift)) { ?>0.00<?php  } else { ?><?php  echo $total_gift;?><?php  } ?>元</span></div>
			<div>总计点歌<span><?php  if(empty($total_song)) { ?>0.00<?php  } else { ?><?php  echo $total_song;?><?php  } ?>元</span></div>
			<div>总计累积<span><?php  if(empty($total_total)) { ?>0.00<?php  } else { ?><?php  echo $total_total;?><?php  } ?>元</span></div>
		</div>
	</div>
</div>
<?php  } else if($op=='tx') { ?>
<style>
.account-stat-num > div{width:50%; float:left; font-size:16px; text-align:center;margin-bottom:50px;}
.account-stat-num > div span{display:block; font-size:30px; font-weight:bold;}
</style>
<div class="panel panel-default">
	<div class="panel-heading">
		待提现预览
	</div>
	<div class="panel-body">
		<div class="account-stat-num row">
			<div>霸屏总计待提现<span><?php  if(empty($tx_bp)) { ?>0.00<?php  } else { ?><?php  echo $tx_bp;?><?php  } ?>元</span></div>
			<div>打赏总计待提现<span><?php  if(empty($tx_ds)) { ?>0.00<?php  } else { ?><?php  echo $tx_ds;?><?php  } ?>元</span></div>
			<div>表白总计待提现<span><?php  if(empty($tx_bb)) { ?>0.00<?php  } else { ?><?php  echo $tx_bb;?><?php  } ?>元</span></div>
			<div>弹幕总计待提现<span><?php  if(empty($tx_dm)) { ?>0.00<?php  } else { ?><?php  echo $tx_dm;?><?php  } ?>元</span></div>
			<div>送礼总计待提现<span><?php  if(empty($tx_gift)) { ?>0.00<?php  } else { ?><?php  echo $tx_gift;?><?php  } ?>元</span></div>
			<div style="color:Red">待提现送礼分成<span><?php  if(empty($gift_fencheng)) { ?>0.00<?php  } else { ?><?php  echo $gift_fencheng;?><?php  } ?>元</span></div>
			<div>点歌总计待提现<span><?php  if(empty($tx_song)) { ?>0.00<?php  } else { ?><?php  echo $tx_song;?><?php  } ?>元</span></div>
			<div style="color:Red">待提现点歌分成<span><?php  if(empty($song_fencheng)) { ?>0.00<?php  } else { ?><?php  echo $song_fencheng;?><?php  } ?>元</span></div>
			<div>累积总计待提现<span><?php  if(empty($total_tx)) { ?>0.00<?php  } else { ?><?php  echo $total_tx;?><?php  } ?>元</span></div>
			<div style="color:Red">真实总计待提现<span><?php  if(empty($total_realtx)) { ?>0.00<?php  } else { ?><?php  echo $total_realtx;?><?php  } ?>元</span></div>
		</div>
	</div>
</div>
<?php  } ?>
<?php  include $this->template('common/_footer')?>
