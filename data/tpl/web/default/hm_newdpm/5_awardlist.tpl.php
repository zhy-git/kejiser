<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>


<!--参与粉丝/中奖名单-->
<div class="main">
	<ul class="nav nav-tabs">
		<li<?php  if($_GPC['do'] == 'manage') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('manage');?>">活动管理</a></li>
		<li<?php  if($_GPC['do'] == 'fanslist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('fanslist',array('name'=>'dpm', 'rid' => $rid));?>">参与粉丝</a></li>
		<li<?php  if($_GPC['do'] == 'awardlist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('awardlist',array('name'=>'dpm', 'rid' => $rid));?>">中奖名单</a></li>
		<li<?php  if($_GPC['do'] == 'cashprize') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('cashprize',array('name'=>'dpm', 'rid' => $rid));?>">提现管理</a></li>
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
        	<input type="hidden" name="do" value="awardlist" />
        	<input type="hidden" name="rid" value="<?php  echo $_GPC['rid'];?>" />
			<!--<div class="form-group">-->
				<!--<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">关键字</label>-->
				<!--<div class="col-xs-12 col-sm-8 col-lg-9">-->
					<!--<input class="form-control" name="keywords" id="" type="text" value="<?php  echo $_GPC['keywords'];?>" placeholder="可查询SN码,手机号"> -->
				<!--</div>-->
			<!--</div>-->
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">微信昵称</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<input class="form-control" name="nickname" id="" type="text" value="<?php  echo $_GPC['nickname'];?>" placeholder="输入领取者名称查询">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">状态</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<select name="status" class="form-control" style="float:left">
                    	<option value="" <?php  if($_GPC['status']=='') { ?>selected<?php  } ?>>全部</option>
						<option value="1" <?php  if($_GPC['status']=='1') { ?>selected<?php  } ?>>未兑换</option>
                        <option value="2" <?php  if($_GPC['status']=='2') { ?>selected<?php  } ?>>已兑换</option>
                	</select>
				</div>
                <div class=" col-xs-12 col-sm-2 col-lg-2">
					<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
				</div>
			</div>
		</form>
	</div>
</div>
	<button class="btn btn-success" onclick="location.href='<?php  echo $this->createWebUrl('download2',array('rid'=>$_GPC['rid']))?>'" type="button"><i class="fa fa-search"></i> 导出数据</button>
	<button class="btn btn-success" onclick="location.href='<?php  echo $this->createWebUrl('download_error',array('rid'=>$_GPC['rid']))?>'" type="button"><i class="fa fa-search"></i>导出红包发放失败记录</button>
<div class="panel panel-default">
<div class="panel-heading">

	<div class="alert" style="margin-bottom:0;">本次活动奖品总数(包括抽奖)：<?php  echo $num1;?>个　　抽中未兑换：<?php  echo $num2;?>个　　抽中已兑换：<?php  echo $num3;?>个
		<br /><br />红包发放总额(不包括抽奖)：<?php  echo $num0;?>元。    未提现：<?php  echo $numx;?>元。  提现中：<?php  echo $tx;?>元
	</div>

</div>
	<form method="post" class="form-horizontal" id="form1">
	<input type="hidden" name="op" value="del" />
	<div style="position:relative">
		<div class="panel-body table-responsive">
			<table class="table table-hover" style="position:relative;table-layout: auto;">
			<thead class="navbar-inner">
				<tr>
					<th style="width:50px;">序号</th>
					<th style="width:120px;">微信昵称</th>
					<th style="width:120px;">领取者姓名</th>
					<th style="width:100px;">手机号</th>
					<th style="width:250px;">OpenID</th>
					<th style="width:200px;">活动类型/奖品名称</th>
					<!-- <th style="width:100px;">兑换码(实物才有)</th> -->
					<th style="width:220px;">公司/职位</th>
					<th style="width:120px;">中奖时间</th>
					<th style="width:90px;">状态</th>

				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $row) { ?>

				<tr>
					<td><?php  echo $row['id'];?></td>
					<td><?php  echo $row['nickname'];?></td>
					<td><?php  echo $row['realname'];?></td>
					<td><?php  echo $row['mobile'];?></td>
                	<td><?php  echo $row['from_user'];?></td>
					<td><?php  if($row['turntable']==1) { ?>【抽奖/3D抽奖】<?php  } ?><?php  if($row['turntable']==3) { ?>【大转盘】<?php  } ?><?php  if($row['turntable']==4) { ?>【抽奖箱】<?php  } ?><?php  if($row['turntable']==2) { ?>【抢红包<?php  echo $row['hbpici'];?>】<?php  } ?><?php  if($row['turntable']==9) { ?>【圆盘抽奖】<?php  } ?><?php  echo $row['awardname'];?><?php  if(!empty($row['credit'])) { ?>(金额：<?php  echo $row['credit']/100?>元)<?php  } ?></td>
					<!-- <td><?php  echo $row['title'];?></td> -->
					<td><?php  echo $row['address'];?></td>
					<td><?php  echo date('Y/m/d H:i:s',$row['createtime'])?></td>
					<td>
						<?php  if($row['status']==0) { ?>
						<span class="label label-danger">被取消</span>
						<?php  } else if($row['status']==1) { ?>

							<?php  if($row['prizetype']==2||$row['turntable']==1||$row['turntable']==3||$row['turntable']==4||$row['turntable']==9) { ?>
						    <a class="btn btn-success" href="#" onclick="drop_confirm('确认设置为已兑奖?','<?php  echo $this->createWebUrl('setstatus',array('status'=>2,'id'=>$row['id'],'rid'=>$row['rid']))?>');"><i class="fa fa-check-circle-o"></i>兑奖</a>
							<?php  } else if($row['prizetype']==0) { ?>
                            <a class="btn btn-success" href="#" onclick="drop_confirm('确认补发红包?','<?php  echo $this->createWebUrl('set_hbstatus',array('status'=>2,'id'=>$row['id'],'rid'=>$row['rid']))?>');"><i class="fa fa-check-circle-o"></i>补发</a>
							  <?php  } else { ?>
							<span class="label label-warning">未兑奖</span>
							 <?php  } ?>

							<?php  } else { ?>
						     <?php  if($row['prizetype']==1&&$row['card_id']!='') { ?>
						      <a class="btn btn-success" href="#" onclick="drop_confirm('确认补发卡券?','<?php  echo $this->createWebUrl('set_cardagain',array('status'=>2,'id'=>$row['id'],'rid'=>$row['rid']))?>');"><i class="fa fa-check-circle-o"></i>补发</a>
						     <?php  } ?>
							<span class="label label-default">已兑奖</span>
                        <?php  } ?>

						<a class="btn btn-success" href="#" onclick="drop_confirm('确认删除?','<?php  echo $this->createWebUrl('DeleteAwards',array('id'=>$row['id']))?>');"><i class="fa fa-check-circle-o"></i>删除</a>
					</td>
					
				</tr>

				<?php  } } ?>

			</tbody>
		</table>
	</div>
</div>
</form>
</div>
<div style="text-align:center;"><?php  echo $pager;?></div>
</div>
<div id="guanbi" class="hide">
	<span type="button" class="pull-right btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</span>
</div>
<script>
require(['jquery', 'util'], function($, u){

		
	});
	function drop_confirm(msg, url){
    if(confirm(msg)){
        window.location = url;
    }
}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>