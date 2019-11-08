<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<style>
.withdrawals-box .account-money,.withdrawals-box .tip-account{width:50%}
 .tool-bar {
    margin-bottom: 10px;
    line-height: 30px;
}
.pd-20 {
    padding: 20px;
}
.border-radus {
    border-radius: 4px 4px 0 0;
}
.bg-white {
    background-color: #fff!important;
}
.withdrawals-box .account-money .acc-title {
    margin-right: 30px;
}
.color-red {
    color: red;
}
.withdrawals-box .account-money .acc-title {
	margin-right: 30px
}
.withdrawals-box .help-com, .withdrawals-box .tip-account {
    position: relative;
}
.withdrawals-box .account-money ul {
	padding-top: 20px;
	border-right: 1px solid #e5e5e5
}

.withdrawals-box .account-money li {
	float: left;
	margin-right: 80px;
	text-align: center
}

.withdrawals-box .account-money li span.acc-num {
	font-size: 18px
}

.withdrawals-box .tip-account p {
	margin: 0
}

.withdrawals-box .tip-account p.gray-color {
	color: #666
}

.withdrawals-box .help-com .help-cont {
	position: absolute;
	width: 320px;
	top: 35px;
	left: -172px;
	border: 1px solid #f1da96;
	border-radius: 4px;
	font-size: 12px;
	background-color: #ffedb9;
	z-index: 100
}

.withdrawals-box .help-com .help-cont p {
	margin: 0;
	line-height: 20px
}

.withdrawals-box .help-com .help-cont:after,.withdrawals-box .help-com .help-cont:before {
	position: absolute;
	display: block;
	content: '';
	width: 0;
	height: 0;
	left: 56%;
	margin-left: -10px;
	border-left: 10px solid transparent;
	border-right: 10px solid transparent
}

.withdrawals-box .help-com .help-cont:before {
	top: -11px;
	border-bottom: 10px solid #f1da96
}

.withdrawals-box .help-com .help-cont:after {
	top: -10px;
	border-bottom: 10px solid #ffedb9
}
.gray-color{color:gray}
.timer, {
    text-align:Center;
    text-shadow: 0 1px 5px rgba(0,0,0,.1);
}
.timer_title{height:20px;line-height:20px;margin:10px 0px;}
.timer .days-wrapper,
.timer .hours-wrapper,
.timer .minutes-wrapper,
.timer .seconds-wrapper {
    display: inline-block;
    width: 60px;
    height: 60px;
    margin: 0 10px;
    background: #32b16c;
	color:#fff;
    font-size: 18px;
	line-height:60px;
	text-align:Center;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

</style>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do']=='my_wallet'&&$op=='list') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_wallet',array('op'=>'list'))?>"><i class="fa fa-money" aria-hidden="true"></i> 霸屏收入</a>
	</li>
	<?php  if(!is_error($this->meeting_check())) { ?>
	<li <?php  if($_GPC['do']=='my_wallet'&&$op=='bmlist') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_wallet',array('op'=>'bmlist'))?>"><i class="fa fa-money" aria-hidden="true"></i> 报名收入</a>
	</li>
	<?php  } ?>
	<li <?php  if($_GPC['do']=='my_wallet'&&$op=='account') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('my_wallet',array('op'=>'account'))?>"><i class="fa fa-file-text" aria-hidden="true"></i> 账户设置</a>
	</li>
</ul>
<?php  if($op == 'list') { ?>
<div class="panel panel-default">
	<div class="panel-heading">霸屏账户余额</div>
	<div class="panel-body withdrawals-box">
		<div class="tool-bar bg-white border-radus clearfix pd-20">
		   <div class="account-money pull-left">
				<ul class="list-unstyled pull-left v-align-t">
				 <li style="padding-bottom:10px;border-bottom:1px dashed #333">
				  <div class="color-red">￥<span class="acc-num js-earn"><?php  echo sprintf('%.2f',$total_money);?></span></div>
				  <p>总收入（元）</p>
				  <span class="help-block label label-danger">含手续费、不含分成</span>
				 </li>
				 <li style="padding-bottom:10px;border-bottom:1px dashed #333">
				  <div class="color-red">￥<span class="acc-num js-cash"><?php  echo $had_tx_money;?></span></div>
				  <p>已提现（元）</p>
				  <span class="help-block label label-danger">含手续费、不含分成</span>
				 </li>
				 <li style="padding-top:10px">
				  <div class="color-red">￥<span class="acc-num js-earn"><?php  echo sprintf('%.2f',$total_songli_fencheng);?></span></div>
				  <p>礼物总分成（元）</p>
				  </li>
				  <?php  if(!is_error($this->song_check())) { ?>
				  <li style="padding-top:10px">
				  <div class="color-red">￥<span class="acc-num js-earn"><?php  echo sprintf('%.2f',$total_song_fencheng);?></span></div>
				  <p>点歌总分成（元）</p>
				  </li>
				  <?php  } ?>
				</ul>
		   </div>
		   <div class="tip-account pull-right help-info" style="padding: 20px;">
			  <div>未提现金额：<span class="color-red js-leftCount">￥<?php  echo sprintf('%.2f',($account_money - $now_fencheng));?> 元</span><a class="btn btn-success pull-right" href="<?php  echo $this->createWebUrl('my_wallet',array('op'=>'tx'))?>" onclick="return confirm('确认提现吗？');return false;">立即提现</a></div>
			  <p class="gray-color">提现方式：未提现金额必须满 <span class="color-red"><?php  echo $my_tx_config['tx_min_money'];?></span> 元</p>
			  <p class="gray-color">提现注意事项：提现需要收取 <span class="color-red"><?php  echo ($my_tx_config['tx_fl']*100).'%'?></span> 的手续费</p>
			  <?php  if($djs>0) { ?>
						<div id="show_djs"> 
							<div class="timer_title">提现时间倒计时:</div>
							<div class="timer">
                                <div class="days-wrapper">
                                    <span class="days"></span>天
                                </div>
                                <div class="hours-wrapper">
                                    <span class="hours"></span>时
                                </div>
                                <div class="minutes-wrapper">
                                    <span class="minutes"></span>分
                                </div>
                                <div class="seconds-wrapper">
                                    <span class="seconds"></span>秒
                                </div>
                            </div>
						</div>
			  <?php  } ?>
		   </div>
		</div>
	</div>
</div>
<script language="javascript" type="text/javascript"> 
<?php  if($djs>0) { ?>
	var requireExtend = require.config({
	baseUrl: 'resource/js/app', //基础目录，将从此目录引用JS
	paths: {
		'countdown': '../../../../addons/meepo_xianchang/template/resource/js/jquery.countdown', //结尾不写.js
	}
});
requireExtend(["countdown"],function(){
    var countTo = <?php  echo $djs;?>;
    $('.timer').countdown(countTo, function(event) {
        var $this = $(this);
        switch(event.type) {
            case "seconds":
            case "minutes":
            case "hours":
            case "days":
            case "weeks":
            case "daysLeft":
                $this.find('span.'+event.type).html(event.value);
                break;
            case "finished":
                $("#show_djs").hide();
                break;
        }
    });
});
<?php  } ?>
</script> 
<form action="" method="post" class="form-horizontal" role="form" ng-controller="formCtrl" id="form2">
<div class="panel panel-default">
	<div class="panel-heading">霸屏收入提现明细</div>
	<div class="panel-body">
		<table class="table table-hover" style="display:auto;">
				<thead class="navbar-inner">
					<tr >
						<th style="width:5%;text-align:center" >选？</th>
					   <th style="width:20%;text-align:center">金额</th>
					   <th style="width:25%;text-align:center">状态</th>
					   <th style="width:25%;text-align:center">提现时间</th>
                       <th style="width:25%;text-align:center">详细</th>
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($tx_record)) { foreach($tx_record as $item) { ?>
					<tr>
							<td><input type="checkbox" name="select[]" value="<?php  echo $item['id']?>"></td>
							<td class="row-hover" style="text-align:center">
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
							
					</tr>
					<?php  } } ?>
				</tbody>
				<tr>
					<td><input type="checkbox" onclick="var ck = this.checked;$(':checkbox').each(function(){this.checked = ck});"></td>
                    <td colspan="12">
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
<?php  } else if($op == 'bmlist') { ?>
<style>
.question-icon{
	margin-left: 20px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: #000;
    text-align: center;
    line-height: 20px;
    color: #fff;
    cursor: pointer;
}
</style>
<div class="panel panel-default">
	<div class="panel-heading">报名账户余额</div>
	<div class="panel-body withdrawals-box">
		<div class="tool-bar bg-white border-radus clearfix pd-20">
		   <div class="account-money pull-left">
				<ul class="list-unstyled pull-left v-align-t">
				 <li>
				  <div class="color-red">￥<span class="acc-num js-earn"><?php  echo sprintf('%.2f',$total_money);?></span></div>
				  <p>总收入（元）</p>
				  <span class="help-block label label-danger">含手续费</span>
				 </li>
				 <li>
				  <div class="color-red">￥<span class="acc-num js-cash"><?php  echo $had_tx_money;?></span></div>
				  <p>已提现（元）</p>
				  <span class="help-block label label-danger">含手续费</span>
				 </li>
				</ul>
		   </div>
		   <div class="tip-account pull-right help-info" style="padding: 20px;" >
			  <div>未提现金额：<span class="color-red js-leftCount">￥<?php  echo sprintf('%.2f',$account_money);?> 元<i class="fa fa-question question-icon" data-toggle="tooltip" data-placement="top" title="如金额异常，请查看报名订单是否已全部核销"></i></span><a class="btn btn-success pull-right" href="<?php  echo $this->createWebUrl('my_wallet',array('op'=>'bmtx'))?>" onclick="return confirm('确认提现吗？');return false;">立即提现</a></div>
			  <p class="gray-color">未提现金额即为核销成功订单总金额</p>
			  <p class="gray-color">提现方式：未提现金额必须满 <span class="color-red"><?php  echo $my_tx_config['bmtx_min_money'];?></span> 元</p>
			  <p class="gray-color">提现注意事项：提现需要收取 <span class="color-red"><?php  echo ($my_tx_config['bmtx_fl']*100).'%'?></span> 的手续费</p>
			  <?php  if($djs>0) { ?>
						<div id="show_djs"> 
							<div class="timer_title">提现时间倒计时:</div>
							<div class="timer">
                                <div class="days-wrapper">
                                    <span class="days"></span>天
                                </div>
                                <div class="hours-wrapper">
                                    <span class="hours"></span>时
                                </div>
                                <div class="minutes-wrapper">
                                    <span class="minutes"></span>分
                                </div>
                                <div class="seconds-wrapper">
                                    <span class="seconds"></span>秒
                                </div>
                            </div>
						</div>
			  <?php  } ?>
		   </div>
		</div>
	</div>
</div>
<script language="javascript" type="text/javascript">

require(['angular', 'jquery'], function(angular, $){
	 $(".question-icon").on('mouseover',function(){
		$('.question-icon').tooltip('show');
	 })
	  $(".question-icon").on('mouseout',function(){
		$('.question-icon').tooltip('hide');
	 })
		
});
<?php  if($djs>0) { ?>
	var requireExtend = require.config({
	baseUrl: 'resource/js/app', //基础目录，将从此目录引用JS
	paths: {
		'countdown': '../../../../addons/meepo_xianchang/template/resource/js/jquery.countdown', //结尾不写.js
	}
});
requireExtend(["countdown"],function(){
    var countTo = <?php  echo $djs;?>;
    $('.timer').countdown(countTo, function(event) {
        var $this = $(this);
        switch(event.type) {
            case "seconds":
            case "minutes":
            case "hours":
            case "days":
            case "weeks":
            case "daysLeft":
                $this.find('span.'+event.type).html(event.value);
                break;
            case "finished":
                $("#show_djs").hide();
                break;
        }
    });
});
<?php  } ?>
</script> 
<form action="" method="post" class="form-horizontal" role="form" ng-controller="formCtrl" id="form2">
<div class="panel panel-default">
	<div class="panel-heading">报名收入提现明细</div>
	<div class="panel-body">
		<table class="table table-hover" style="display:auto;">
				<thead class="navbar-inner">
					<tr >
						<th style="width:5%;text-align:center" >选？</th>
					   <th style="width:20%;text-align:center">金额</th>
					   <th style="width:25%;text-align:center">状态</th>
					   <th style="width:25%;text-align:center">提现时间</th>
                       <th style="width:25%;text-align:center">详细</th>
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($tx_record)) { foreach($tx_record as $item) { ?>
					<tr>
							<td><input type="checkbox" name="select[]" value="<?php  echo $item['id']?>"></td>
							<td class="row-hover" style="text-align:center">
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
							
					</tr>
					<?php  } } ?>
				</tbody>
				<tr>
					<td><input type="checkbox" onclick="var ck = this.checked;$(':checkbox').each(function(){this.checked = ck});"></td>
                    <td colspan="12">
						<input type="submit" class="btn btn-pramary" name="bmdown" value="导出选定数据" />
                        <input type="submit" class="btn btn-pramary" name="bmdownall" value="导出所有数据" />
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
<?php  } else if($op=='account') { ?>
<div class="panel panel-default">
	<div class="panel-heading">账户设置</div>
	<div class="panel-body">
		<form action="" method="post" class="form-horizontal" role="form">
			<input type="hidden" value="<?php  echo $tx_account['id'];?>"  name="account_id">
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">支付宝账户</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="account" placeholder="支付宝账户" value="<?php  echo $tx_account['account'];?>">
						<span class="help-block"><span class="label label-success">支付宝账户</span></span>
					</div>
			</div>
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">真实姓名</span></label>
					<div class="col-sm-9">
						<input type="text"  class="form-control" name="realname" placeholder="真实姓名" value="<?php  echo $tx_account['realname'];?>">
						<span class="help-block"><span class="label label-success">真实姓名</span></span>
					</div>
			</div>
			<div class="form-group col-sm-12">
				<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
	</div>
</div>
<?php  } ?>
<?php  include $this->template('common/_footer')?>