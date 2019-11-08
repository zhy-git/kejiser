<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('nav', TEMPLATE_INCLUDEPATH)) : (include template('nav', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<li <?php  if($op=='total') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('redpack_send_detail',array('op'=>'total'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 全部记录</a>
	</li>
	<li <?php  if($op=='redpack') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('redpack_send_detail',array('op'=>'redpack'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 抢红包</a>
	</li>
	<li <?php  if($op=='ydj') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('redpack_send_detail',array('op'=>'ydj'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 摇大奖</a>
	</li>
	<li <?php  if($op=='dmredpack') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('redpack_send_detail',array('op'=>'dmredpack'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 弹幕红包</a>
	</li>
	<li <?php  if($op=='data') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('redpack_send_detail',array('op'=>'data'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 数据统计</a>
	</li>
	
</ul>
<?php  if(in_array($op,array('total','redpack','ydj','dmredpack'))) { ?>
<div class="panel panel-default">
	<div class="panel-heading">筛选记录</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form" id="form1">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="meepo_xianchang" />
			<input type="hidden" name="do" value="redpack_send_detail" />
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
										
										<a href="<?php  if($item['type']=='hby') { ?><?php  echo $this->createWebUrl('redpack_manage',array('id'=>$item['rid']))?><?php  } else if($item['type']=='ydj') { ?><?php  echo $this->createWebUrl('ydj_manage',array('id'=>$item['rid'],'op'=>'list'))?><?php  } else { ?><?php  echo $this->createWebUrl('dmredpack_manage',array('id'=>$item['rid'],'op'=>'list'))?><?php  } ?>"><?php  echo $item['rid_title'];?></a>
									<?php  } ?>
								</div>
								<div>
									所属用户:<span class="label label-success"><?php  echo $item['rid_uidname'];?></span>
								</div>
							</div>
						</td>
						<td><?php  if($item['type']=='hby') { ?><span class="label label-success">抢红包<?php  } else if($item['type']=='ydj') { ?><span class="label label-danger">摇大奖<?php  } else { ?><span class="label label-warning">弹幕红包<?php  } ?></span></td>
						<td>
							<div class="user">
								<div class="avatar" ><img style="width:40px;height:40px;border-radius:50%" src="<?php  echo tomedia($item['avatar']);?>" /></div>
								<div class="nickname"><?php  echo $item['nick_name'];?></div>
							</div>
						</td>
						<td><span class="label label-danger"><?php  echo $item['money'];?>元</span></td>
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
<?php  } else { ?>
<style>
.account-stat-num > div{width:25%; float:left; font-size:16px; text-align:center;}
.account-stat-num > div span{display:block; font-size:30px; font-weight:bold;}
</style>
<div class="panel panel-default">
	<div class="panel-heading">昨天发放统计</div>
	<div class="panel-body">
		<div class="account-stat-num row">
			<div>昨天抢红包<span><?php  if(empty($yes_redpack)) { ?>0.00<?php  } else { ?><?php  echo $yes_redpack;?><?php  } ?>元</span></div>
			<div>昨天摇大奖<span><?php  if(empty($yes_ydj)) { ?>0.00<?php  } else { ?><?php  echo $yes_ydj;?><?php  } ?>元</span></div>
			<div>昨天弹幕红包<span><?php  if(empty($yes_dmredpack)) { ?>0.00<?php  } else { ?><?php  echo $yes_ydj;?><?php  } ?>元</span></div>
			<div>昨天总计<span><?php  if(empty($yes_all)) { ?>0.00<?php  } else { ?><?php  echo $yes_all;?><?php  } ?>元</span></div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">今天发放统计</div>
	<div class="panel-body">
		<div class="account-stat-num row">
			<div>今天抢红包<span><?php  if(empty($today_redpack)) { ?>0.00<?php  } else { ?><?php  echo $today_redpack;?><?php  } ?>元</span></div>
			<div>今天摇大奖<span><?php  if(empty($today_ydj)) { ?>0.00<?php  } else { ?><?php  echo $today_ydj;?><?php  } ?>元</span></div>
			<div>今天弹幕红包<span><?php  if(empty($today_dmredpack)) { ?>0.00<?php  } else { ?><?php  echo $today_dmredpack;?><?php  } ?>元</span></div>
			<div>今天总计<span><?php  if(empty($today_all)) { ?>0.00<?php  } else { ?><?php  echo $today_all;?><?php  } ?>元</span></div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">本周发放统计</div>
	<div class="panel-body">
		<div class="account-stat-num row">
			<div>本周抢红包<span><?php  if(empty($week_redpack)) { ?>0.00<?php  } else { ?><?php  echo $week_redpack;?><?php  } ?>元</span></div>
			<div>本周摇大奖<span><?php  if(empty($week_ydj)) { ?>0.00<?php  } else { ?><?php  echo $week_ydj;?><?php  } ?>元</span></div>
			<div>本周弹幕红包<span><?php  if(empty($week_dmredpack)) { ?>0.00<?php  } else { ?><?php  echo $week_dmredpack;?><?php  } ?>元</span></div>
			<div>本周总计<span><?php  if(empty($week_all)) { ?>0.00<?php  } else { ?><?php  echo $week_all;?><?php  } ?>元</span></div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">总发放统计</div>
	<div class="panel-body">
		<div class="account-stat-num row">
			<div>抢红包<span><?php  if(empty($data_total_send_redpack)) { ?>0.00<?php  } else { ?><?php  echo $data_total_send_redpack;?><?php  } ?>元</span></div>
			<div>摇大奖<span><?php  if(empty($data_total_send_ydj)) { ?>0.00<?php  } else { ?><?php  echo $data_total_send_ydj;?><?php  } ?>元</span></div>
			<div>弹幕红包<span><?php  if(empty($data_total_send_dmredpack)) { ?>0.00<?php  } else { ?><?php  echo $data_total_send_dmredpack;?><?php  } ?>元</span></div>
			<div>总计<span><?php  if(empty($data_total_send)) { ?>0.00<?php  } else { ?><?php  echo $data_total_send;?><?php  } ?>元</span></div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		详细发放统计
	</div>
	<div class="panel-body" id="scroll">
		<div class="pull-left">
			<form action="" id="form1">
				<input type="hidden" name="c" value="site" />
				<input type="hidden" name="a" value="entry" />
				<input type="hidden" name="m" value="meepo_xianchang" />
				<input type="hidden" name="do" value="redpack_send_detail" />
				<input type="hidden" name="op" value="data" />
				<?php  echo tpl_form_field_daterange('datelimit', array('start' => date('Y-m-d', $starttime),'end' => date('Y-m-d', $endtime)), '')?>
				<input type="hidden" value="" name="scroll">
			</form>
		</div>
		<div class="pull-right">
			<div class="checkbox">

				<label style="color:#57B9E6;"><input checked type="checkbox"> 抢红包</label>&nbsp;
				<label style="color:rgba(203,48,48,1)"><input checked type="checkbox"> 摇大将</label>&nbsp;
				<label style="color:rgba(149,192,0,1)"><input checked type="checkbox"> 弹幕红包</label>&nbsp;
				<label style="color:#e7a017;"><input checked type="checkbox"> 累积</label>
			</div>
		</div>
		<div style="margin-top:20px">
			<canvas id="myChart" width="1200" height="300"></canvas>
		</div>
	</div>
</div>
	<script>
		require(['../../../../addons/meepo_xianchang/template/resource/js/chart.min', 'daterangepicker'], function(c) {
			$('.daterange').on('apply.daterangepicker', function(ev, picker) {
				$('input[name="scroll"]').val($(document).scrollTop());
				$('#form1')[0].submit();
			});
			<?php  if($scroll) { ?> 
				var scroll = "<?php  echo $scroll;?>";
				$("html,body").animate({scrollTop: scroll}, 300);
			<?php  } ?>
			var chart = null;
			var chartDatasets = null;
			var templates = {
				flow1: {
					label: '抢红包',
					fillColor : "rgba(36,165,222,0.1)",
					strokeColor : "rgba(36,165,222,1)",
					pointColor : "rgba(36,165,222,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(36,165,222,1)",
				},
				flow2: {
					label: '摇大奖',
					fillColor : "rgba(203,48,48,0.1)",
					strokeColor : "rgba(203,48,48,1)",
					pointColor : "rgba(203,48,48,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(203,48,48,1)",
				},
				flow3: {
					label: '弹幕红包',
					fillColor : "rgba(149,192,0,0.1)",
					strokeColor : "rgba(149,192,0,1)",
					pointColor : "rgba(149,192,0,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(149,192,0,1)",
				},
				flow4: {
					label: '累积',
					fillColor : "rgba(231,160,23,0.1)",
					strokeColor : "rgba(231,160,23,1)",
					pointColor : "rgba(231,160,23,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(231,160,23,1)",
				},
			};

			function refreshData() {
				if(!chart || !chartDatasets) {
					return;
				}
				var visables = [];
				var i = 0;
				$('.checkbox input[type="checkbox"]').each(function(){
					if($(this).attr('checked')) {
						visables.push(i);
					}
					i++;
				});
				var ds = [];
				$.each(visables, function(){
					var o = chartDatasets[this];
					ds.push(o);
				});
				chart.datasets = ds;
				chart.update();
			}

			var url = "<?php  echo $this->createWebUrl('redpack_send_detail',array('op'=>'data'))?>&starttime=<?php  echo $starttime;?>&endtime=<?php  echo $endtime;?>#aaaa";
			$.post(url, function(data){
				var datasets = data.datasets;
				if(!chart) {
					var label = data.label;
					var ds = $.extend(true, {}, templates);
					ds.flow1.data = datasets.redpack;
					ds.flow2.data = datasets.ydj;
					ds.flow3.data = datasets.dmredpack;
					ds.flow4.data = datasets.total;
					var lineChartData = {
						labels : label,
						datasets : [ds.flow1, ds.flow2, ds.flow3, ds.flow4]
					};

					var ctx = document.getElementById("myChart").getContext("2d");
					chart = new Chart(ctx).Line(lineChartData, {
						responsive: true
					});
					chartDatasets = $.extend(true, {}, chart.datasets);
				}
				refreshData();
			},'json');

			$('.checkbox input[type="checkbox"]').on('click', function(){
				$(this).attr('checked', !$(this).attr('checked'))
				refreshData();
			});
 		});
	</script>
<?php  } ?>
<?php  include $this->template('common/_footer')?>
