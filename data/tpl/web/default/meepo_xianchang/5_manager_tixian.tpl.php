<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='manager_tixian' && $op=='list' && !isset($status)) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('manager_tixian',array('op'=>'list'))?>"><i class="fa fa-file"></i> 提现列表</a>
	</li>
	<li <?php  if($_GPC['do']=='manager_tixian' && $status=='1') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('manager_tixian',array('status'=>'1'))?>"><i class="fa fa-unlock"></i> 提现成功</a>
	</li>
	<li <?php  if($_GPC['do']=='manager_tixian' && $status=='0') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('manager_tixian',array('status'=>'0'))?>"><i class="fa fa-lock"></i> 提现待审核</a>
	</li>
</ul>
<?php  if($op=='list') { ?>
<form action="" method="post" class="form-horizontal" role="form" ng-controller="formCtrl" id="form2">
<div class="panel panel-default">
	<div class="panel-heading">
		提现列表<br><br>
		<label class="label label-success">所有的提现均需手动打款!<br></label>
	</div>
	<div class="panel-body">
		<table class="table we7-table" style="display:auto;">
				<thead class="navbar-inner">
					<tr >
					   <th style="width:5%;text-align:center" >选？</th>
					   <th style="width:7%;text-align:center">用户</th>
					   <th style="width:20%;text-align:center">金额</th>
					   <th style="width:8%;text-align:center">状态</th>
					   <th style="width:20%;text-align:center">提现时间</th>
                       <th style="width:20%;text-align:center">详细</th>
					   <th style="width:20%;text-align:center">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($tx_records)) { foreach($tx_records as $item) { ?>
					<tr>
							<td><input type="checkbox" name="select[]" value="<?php  echo $item['id']?>"></td>
							<td><?php  echo $item['username'];?></td>
							<td class="row-hover" style="text-align:center">
								<p>类型: <span class="label label-<?php  if($item['type']==1) { ?>info<?php  } else { ?>success<?php  } ?>"><?php  if($item['type']==1) { ?>霸屏收入提现<?php  } else { ?>会议报名收入<?php  } ?></span></p>
								<p>总金额: <span class="label label-danger"><?php  echo $item['money'];?>元</span></p>
								<p>手续费: <span class="label label-danger"><?php  echo $item['sxf'];?>元</span></p>
								<p>真实金额: <span class="label label-success"><?php  echo $item['true_money'];?>元</span></p>
							</td>
							<td class="row-hover" style="text-align:center"><?php  if($item['status']==1) { ?><span class="label label-success">成功</span><?php  } else { ?><span class="label label-danger">待审核</span><?php  } ?></td>
							<td class="row-hover" style="text-align:center">
								<?php  echo  date('Y-m-d',$item['createtime'])?><br><?php  echo  date('H:i:s',$item['createtime'])?>	
							</td>
							<td style="text-align:center">
								<p>收款账户:<span class="label label-success"><?php  echo $item['account'];?></span></p>
								<p>收款人:<span class="label label-success"><?php  echo $item['realname'];?></span></p>
							</td>
							<td style="text-align:center">
									<?php  if($item['status']==0) { ?>
										<a class="btn btn-success"  onclick="return confirm('你已经打款了？确认审核吗？');return false;"
										href="<?php  echo $this->createWebUrl('manager_tixian',array('record_id'=>$item['id'],'op'=>'confirm'))?>">
											审核
										</a>
									<?php  } else { ?>
										<a class="btn btn-default" title="已打款">
											已打款
										</a>
									<?php  } ?>
									<a class="btn btn-danger"  onclick="return confirm('删除将直接影响用户收入，确认吗？');return false;"
										href="<?php  echo $this->createWebUrl('manager_tixian',array('record_id'=>$item['id'],'op'=>'del'))?>">
											删除
									</a>
							</td>
					</tr>
					<?php  } } ?>
				</tbody>
				<tr>
					<td><input type="checkbox" onclick="var ck = this.checked;$(':checkbox').each(function(){this.checked = ck});"></td>
                    <td colspan="12">
                        <input type="submit" class="btn btn-danger" name="delete" value="删除选定" />
						<input type="submit" class="btn btn-pramary" name="down" value="导出选定数据" />
                        <input type="submit" class="btn btn-pramary" name="downall" value="导出所有数据" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
                    </td>
				</tr>
			</table>
			<div class="pager_box">
			<?php  echo $pager;?>
			</div>
	</div>
</div>
</form>
<?php  } ?>
<?php  include $this->template('common/_footer')?>
