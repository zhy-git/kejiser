<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
		<li<?php  if($_GPC['do'] == 'manage') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('manage');?>">活动管理</a></li>
		<li<?php  if($_GPC['do'] == 'fanslist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('fanslist',array('rid' => $rid));?>">参与粉丝</a></li>
		<li<?php  if($_GPC['do'] == 'awardlist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('awardlist',array('rid' => $rid));?>">中奖名单</a></li>
		<li<?php  if($_GPC['do'] == 'cashprize') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('cashprize',array('rid' => $rid));?>">提现管理</a></li>
		<!-- <li<?php  if($_GPC['do'] == 'rankinglist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('rankinglist',array('rid' => $rid));?>">状元榜单</a></li> -->
		<!-- <li<?php  if($_GPC['do'] == 'jifenlist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('jifenlist',array('rid' => $rid));?>">积分榜</a></li> -->
		<li><a href="<?php  echo url('platform/reply/post',array('m'=>'hm_newdpm', 'rid' => $rid));?>">编辑规则</a></li>
	</ul>
    <div class="panel panel-info">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
        	<input type="hidden" name="m" value="hm_newdpm" />
        	<input type="hidden" name="do" value="cashprize" />
        	<input type="hidden" name="rid" value="<?php  echo $_GPC['rid'];?>" />
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">名称</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<input class="form-control" name="nickname" id="" type="text" value="<?php  echo $_GPC['nickname'];?>" placeholder="名称">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">手机号码</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<input class="form-control" name="mobile" id="" type="text" value="<?php  echo $_GPC['mobile'];?>" placeholder="手机号码"> 
				</div>
			</div>			
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">状态</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<select name="status" class="form-control" style="float:left">
                    	<option value="" <?php  if($_GPC['status']=='') { ?>selected<?php  } ?>>全部</option>
                        <option value="1" <?php  if($_GPC['status']=='1') { ?>selected<?php  } ?>>已同意</option>
                        <option value="2" <?php  if($_GPC['status']=='2') { ?>selected<?php  } ?>>已拒绝</option>
						<option value="0" <?php  if($_GPC['status']=='0') { ?>selected<?php  } ?>>申请中</option>
                	</select>
				</div>
                <div class=" col-xs-12 col-sm-2 col-lg-2">
					<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
				</div>
			</div>
		</form>
	</div>
</div>

	<div class="panel panel-default">
       <div class="panel-heading">
	<button class="btn btn-success" onclick="location.href='<?php  echo $this->createWebUrl('download3',array('rid'=>$_GPC['rid']))?>'" type="button"><i class="fa fa-search"></i> 导出数据</button>

</div>
	<form method="post" class="form-horizontal" id="formfans">
	<input type="hidden" name="op" value="del" />
	<div style="position:relative">
		<div class="panel-body table-responsive">
			<table class="table table-hover" style="position:relative">
				<thead class="navbar-inner">
					<tr>
						<th style="width:50px;">序号</th>
						<th style="width:150px;">微信名称</th>
						<th style="width:120px;">姓名</th>
						<th style="width:120px;">手机号码</th>
						<th style="width:270px;">微信OpenId</th>
						<th style="width:80px;">提现金额</th>
						<th style="width:80px;">已到账金额</th>
						<th style="width:150px;">提现时间</th>
						<th style="width:100px;">状态</th>
						<th style="width:160px;">操作</th>
						<th style="width:120px;">IP</th>
						<th style="width:80px;">删除</th>
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($list)) { foreach($list as $row) { ?>
					<tr>
						<td><?php  echo $row['id'];?></td>
						<td> <?php  echo $row['nickname'];?></td>
						<td> <?php  echo $row['realname'];?></td>
						<td><?php  echo $row['mobile'];?></td>
						<td><?php  echo $row['from_user'];?></td>

						<td><?php  echo $row['money']/100?>元</td>
						<?php  if($$row['status']==1) { ?>
						<td><?php  echo $row['awardname']/100?>元</td>
						<?php  } else if($row['credit']>0) { ?>
						<td><?php  echo $row['credit']/100?>元</td>
						<?php  } else { ?>
						<td>0元</td>
						<?php  } ?>
						<td><?php  echo date('Y/m/d H:i',$row['createtime']);?></td>
						<td><?php  if($row['status']==0) { ?><span class="label label-danger">申请中
							<?php  } else if($row['status']==1) { ?><span class="label label-warning">同意
							<?php  } else { ?><span class="label label-success">拒绝<?php  } ?>
						</td>
						<!--<td><?php  if($row['zhongjiang']==0) { ?>未中奖<?php  } else { ?><a href="javascript:void(0)" id="<?php  echo $row['id'];?>" class="btn btn-success btn-sm awardinfo" style="width:130px;" data-toggle="tooltip" data-placement="top" title="中奖详情"><i class="fa fa-gift"></i> 中奖详情[<?php  echo $row['awardinfo'];?>]</a><?php  } ?></td>-->
						<td><?php  if($row['status']==0) { ?>
							<?php  if($row['money']>20000) { ?>
							<a class="btn btn-success btn-lg awardinf" href="#" onclick="drop_confirm('确认同意一次下发200,大于200分多次点击?','<?php  echo $this->createWebUrl('setstatuss',array('status'=>0,'id'=>$row['id'],'rid'=>$row['rid'],'awardname'=>'200','from_user'=>$row['from_user'],'nickname'=>$row['nickname']))?>');">200</a>&nbsp;&nbsp;
							<?php  } else { ?>
							<a class="btn btn-success btn-sm awardinf isok" href="#" onclick="drop_confirm('确认同意申请?','<?php  echo $this->createWebUrl('setstatuss',array('status'=>1,'id'=>$row['id'],'rid'=>$row['rid'],'awardname'=>$row['money'],'from_user'=>$row['from_user'],'nickname'=>$row['nickname']))?>');">同意</a>&nbsp;&nbsp;
							<?php  } ?>
							<a class="btn btn-danger btn-sm awardinf isno" href="#" onclick="drop_confirm('确认拒绝申请?','<?php  echo $this->createWebUrl('setstatuss',array('status'=>2,'id'=>$row['id'],'rid'=>$row['rid']))?>');">拒绝</a>
							<?php  } ?>
						</td>
						<td>
							<?php  echo $row['awardsimg'];?>
						</td>
						<td>
							<a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('Delete_cash',array('id'=>$row['id']))?>');" title="删除"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					<?php  } } ?>

				</tbody>
		    </table>
	    </div>
    </div>
</form>
</div>
<?php  echo $pager;?>
</div>
<div id="guanbi" class="hide">
	<span type="button" class="pull-right btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</span>
</div>
<script>
	require(['jquery', 'util'], function($, u){


		$('.awardinfo').click(function(){
			var uid = parseInt($(this).attr('id'));
			$.get("<?php  echo url('site/entry/axq',array('m' => 'hm_newdpm','rid' => $rid))?>&uid=" + uid, function(data){
				if(data == 'dataerr') {
					u.message('未找到指定粉丝', '', 'error');
				} else {
					var obj = u.dialog('中奖详细情况', data, $('#guanbi').html());
				}
				obj.modal('show');
			});
		})


	});
	function drop_confirm(msg, url) {
		if (confirm(msg)) {
			window.location = url;
		}
	}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>