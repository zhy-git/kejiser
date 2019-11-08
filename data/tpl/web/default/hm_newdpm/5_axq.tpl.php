<?php defined('IN_IA') or exit('Access Denied');?>    <div class="table-responsive" style="height:300px;overflow-Y: auto; overflow-X:hidden;">
	    <table class="table" style="min-width:568px;">
				<tr>
				    <td style="border-top:none;vertical-align:middle;"><strong>用户OPENID</strong> <?php  echo $data['from_user'];?></td>
				    <td style="border-top:none;vertical-align:middle;"><strong>姓名</strong> <?php  if($data['realname']) { ?> <?php  echo $data['realname'];?> <?php  } else { ?> 未完善 <?php  } ?></td>
				    <td style="border-top:none;vertical-align:middle"><strong>手机</strong> <?php  if($data['mobile']) { ?> <?php  echo $data['mobile'];?> <?php  } else { ?> 未完善 <?php  } ?></td>
				</tr>
			<tr>
				<td style="border-top:none;vertical-align:middle;"><strong>账户可提现余额：</strong> &nbsp;<span style="color: red;"><?php  echo $nums/100?></span>元</td>
			</tr>
		</table>

		<table class="table" style="min-width:568px;">
			<thead>
					<tr>
					<th style="width:120px;">活动类型</th>
					<th style="width:100px;">奖品名</th>
					<th style="width:120px;">状态</th>
					<th style="width:80px;">红包金额</th>
					<th style="width:140px;">中奖时间</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $row) { ?>
				<tr>
					<td><?php  if($row['turntable'] == 1) { ?>现场抽奖<?php  } ?><?php  if($row['turntable'] == 2) { ?>抢红包<?php  } ?></td>
					<td><?php  echo $row['awardname'];?></td>
					<td><?php  if($row['status']==0) { ?><span class="label label-danger">被取消</span>
						<?php  } else if($row['status']==1) { ?><span class="label label-warning">未兑奖</span>
						<?php  } else { ?><span class="label label-success">已兑奖</span><?php  } ?>
						</td>
					<td><?php  echo $row['credit']/100?></td>
					<td><?php  echo date('Y/m/d H:i',$row['createtime']);?></td>
				</tr>
				<?php  } } ?>
			</tbody>
		</table>
	</div>