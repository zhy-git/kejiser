<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="main">
	<ul class="nav nav-tabs">
	<li<?php  if($_GPC['do'] == 'bpreportes' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('bpreportes',array('rid'=>$rid,'delete'=>$delete));?>">订单数据报表</a></li>
		<li<?php  if($pay_type==2 ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('bp_order',array('rid'=>$rid,'pay_type'=>2,'delete'=>$delete));?>">霸屏支付订单管理</a></li>
		<li<?php  if($pay_type==3) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('bp_order',array('rid'=>$rid,'pay_type'=>3,'delete'=>$delete));?>">打赏支付订单管理</a></li>
		<li<?php  if($pay_type==4) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('bp_order',array('rid'=>$rid,'pay_type'=>4,'delete'=>$delete));?>">红包支付订单管理</a></li>
		<li<?php  if($pay_type==6) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('bp_order',array('rid'=>$rid,'pay_type'=>6,'delete'=>$delete));?>">表白支付订单管理</a></li>
		<li<?php  if($pay_type==7) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('bp_order',array('rid'=>$rid,'pay_type'=>7,'delete'=>$delete));?>">送礼支付订单管理</a></li>
		<li<?php  if($pay_type==10) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('shop_order',array('rid'=>$rid,'pay_type'=>10,'delete'=>$delete));?>">商城订单管理</a></li>
	</ul>
	<div class="panel panel-info">
		<div class="panel-heading">霸屏筛选</div>
		<div class="panel-body">
			<form action="./index.php" method="get" class="form-horizontal" role="form">
				<input type="hidden" name="c" value="site" />
				<input type="hidden" name="a" value="entry" />
				<input type="hidden" name="m" value="hm_newdpm" />
				<input type="hidden" name="do" value="bp_order" />
				<input type="hidden" name="rid" value="<?php  echo $_GPC['rid'];?>" />
				<input type="hidden" name="pay_type" value="<?php  echo $pay_type;?>" />
				<!--<div class="form-group">-->
				<!--<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">关键字</label>-->
				<!--<div class="col-xs-12 col-sm-8 col-lg-9">-->
				<!--<input class="form-control" name="keywords" id="" type="text" value="<?php  echo $_GPC['keywords'];?>" placeholder="可查询SN码,手机号"> -->
				<!--</div>-->
				<!--</div>-->
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">微信昵称</label>
					<div class="col-xs-12 col-sm-8 col-lg-9">
						<input class="form-control" name="nickname" id="" type="text" value="<?php  echo $_GPC['nickname'];?>" placeholder="输入霸屏者名称查询">
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">霸屏时间</label>
					<div class="col-sm-7 col-lg-8 col-xs-12">
						<?php  echo tpl_form_field_daterange('time', array('start'=>date('Y-m-d H:i', $starttime),'end'=>date('Y-m-d  H:i', $endtime)),true);?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">支付状态</label>
					<div class="col-xs-12 col-sm-8 col-lg-9">
						<select name="status" class="form-control" style="float:left">
							<option value="" <?php  if($_GPC['status']=='') { ?>selected<?php  } ?>>全部</option>
							<option value="1" <?php  if($_GPC['status']=='1') { ?>selected<?php  } ?>>未支付</option>
							<option value="2" <?php  if($_GPC['status']=='2') { ?>selected<?php  } ?>>已支付</option>
						</select>
					</div>
					<div class=" col-xs-12 col-sm-2 col-lg-2">
						<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php  if($delete !=1) { ?>
	<button class="btn btn-success" onclick="location.href='<?php  echo $this->createWebUrl('bp_download',array('rid'=>$_GPC['rid']))?>'" type="button"><i class="fa fa-search"></i> 导出数据</button>
	<?php  } ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<?php  if($pay_type==2||$pay_type==3) { ?>
			<div class="alert" style="margin-bottom:0;">本次活动霸屏总额(支付成功包括管理员)：<?php  echo $num1;?>元　　
			<div class="alert" style="margin-bottom:0;">本次活动霸屏总额(支付成功，不包括管理员支付)：<?php  echo $num2;?>元
				<?php  } else if($pay_type==6) { ?>
				<div class="alert" style="margin-bottom:0;">本次活动表白总额(支付成功包括管理员)：<?php  echo $num1;?>元　　
					<div class="alert" style="margin-bottom:0;">本次活动表白总额(支付成功，不包括管理员支付)：<?php  echo $num2;?>元
				<?php  } else if($pay_type==7) { ?>
						<div class="alert" style="margin-bottom:0;">本次活动送礼总额(支付成功包括管理员)：<?php  echo $num1;?>元　　
							<div class="alert" style="margin-bottom:0;">本次活动送礼总额(支付成功，不包括管理员支付)：<?php  echo $num2;?>元
				<?php  } else { ?>
				<div class="alert" style="margin-bottom:0;">本次活动红包总额(支付成功包括管理员)：<?php  echo $num1;?>元　　
					<div class="alert" style="margin-bottom:0;">本次活动红包总额(支付成功，不包括管理员支付)：<?php  echo $num2;?>元
				<?php  } ?>　　
					<?php  if($delete !=1) { ?>
				<button id="clearnobd" class="btn btn-danger" type="button" style="float: right;margin-top: 0px;margin-left: 15px;">一键清除全部订单
					<?php  } ?>
			</div>
		</div>
		<div class="panel-body table-responsive">
		<table class="table table-hover" >
			<thead class="navbar-inner">
				<tr>
					<th class='with-checkbox' style="width:30px;">
						<input type="checkbox" class="check_all" />
					</th>
					<th style="width:100px;">序号</th>
					<th style="width:80px;">微信昵称</th>
					<th style="width:120px;">姓名</th>
					<th style="width:220px;">订单号</th>
					<th style="width:100px;">金额</th>
					<?php  if($pay_type!=4) { ?>
					<th style="width:100px;">霸屏时间(秒)</th>
					<?php  } else { ?>
					<th style="width:100px;">实际支付金额</th>
					<th style="width:100px;">手续费(%)</th>
					<?php  } ?>
					<th style="width:80px;">状态</th>
					<th style="width:80px;">支付方式</th>
					<th style="width:150px;">创建时间</th>
					<th style="width:80px;">是否是管理员免支付</th>
					<th style="width:80px;">订单状态</th>
					<?php  if($pay_type!=4) { ?>
					<th style="width:80px;">是否提现</th>
					<?php  } ?>
					<?php  if($delete !=1) { ?>
					<th style="width:120px;">操作</th>
                      <?php  } ?>
				</tr>
			</thead>
			<tbody>
                    <?php  if(is_array($list)) { foreach($list as $row) { ?>
				<tr>
					<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $row['id'];?>"></td>
					<td><?php  echo $row['id'];?></td>
					<td><?php  echo $row['nickname'];?></td>
					<?php  if($pay_type!=4) { ?>
					<td style="white-space: normal;"><?php  echo $row['from_realname'];?></td>
					<?php  } else { ?>
					<td style="white-space: normal;"><?php  echo $row['nickname'];?></td>
					<?php  } ?>
					<td><?php  echo $row['transid'];?></td>
					<td><?php  echo $row['pay_total']?></td>
					<?php  if($pay_type!=4) { ?>
					<td><?php  echo $row['bptime']?></td>
					<?php  } else { ?>
					<td><?php  echo $row['pay_addr']?></td>
					<td><?php  echo $row['from_realname']?>%</td>
					<?php  } ?>
					<td><?php  if($row['status']==1) { ?><span style="color: #FF0000">未支付</span>	<?php  } else if($row['status']==2) { ?>已支付<?php  } else { ?>订单关闭<?php  } ?></td>
					<td><?php  if($row['orderid']==1) { ?>余额<?php  } else if($row['orderid']==2) { ?>微信支付<?php  } else if($row['orderid']==3) { ?>支付宝<?php  } else if($row['orderid']==0) { ?>未付款<?php  } else { ?>其他<?php  } ?></td>
					<td><?php  echo date('Y/m/d H:i',$row['createtime'])?></td>
					<td><?php  if($row['isadmin']==1) { ?><span style="color: #FF0000">是</span><?php  } else { ?>否<?php  } ?></td>
					<td><?php  if($row['pay_status']==1) { ?><span style="color: #FF0000">异常</span><?php  } else { ?>正常<?php  } ?></td>
					<?php  if($pay_type!=4) { ?>
					<td><?php  if($row['txlogid']==0) { ?><span style="color: #FF0000">未提现</span><?php  } else { ?>已提现<?php  } ?></td>
					<?php  } ?>
					<?php  if($delete !=1) { ?>
					<td>
                        <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('Deletepay_order',array('id'=>$row['id']))?>');" title="删除"><i class="fa fa-times"></i></a>
                  	</td>
					<?php  } ?>
				</tr>
                <?php  } } ?>
					<?php  if($delete !=1) { ?>
					<tr>
						<td colspan="2">
							<input type="button" class="btn btn-danger" name="deleteall_fans" value="一键删除" />
						</td>
					</tr>
		        	<?php  } ?>
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
$('#clearnobd').click(function(){
	var b = confirm("确定要删除所有订单！");
	if( b == true){
		$.post("<?php  echo $this->createWebUrl('Delall_bporders',array('rid'=>$rid))?>", function(data) {
			if(data.success == 100) {
				alert(data.msg);
			} else {
				alert(data.msg);
				location.reload();
			}
		},"json");
	}
})
$(function(){

	$(".check_all").click(function(){
		var checked = $(this).get(0).checked;

		$("input[type=checkbox]").attr("checked",checked);
	});

	$("input[name=deleteall_fans]").click(function(){
		var check = $("input:checked");

		if(check.length<2){
			alert('请选择要删除的记录!');
			return false;
		}
		if( confirm("确认要删除选择的记录?")){
			var id = new Array();
			check.each(function(i){
				id[i] = $(this).val();
			});
			$.post('<?php  echo $this->createWebUrl('Del_bporders',array('rid'=>$rid))?>', {idArr:id},function(data){
				if (data.flag ==1)
				{
					alert(data.msg);
					location.reload();
				} else {
					alert(data.msg);
				}


			},'json');
		}

	});
});
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>