<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">

	    <li class="active"><a  href="#">手机会员中心设置</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">
			<input type="hidden" name="personalid" value="<?php  echo $personals['id'];?>" />

			<div class="form-group" style="display: block">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">个人中心样式</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="personal_style" value="0" <?php  if($personal['personal_style']==0) { ?> checked="checked"<?php  } ?>/>新样式
					</label>
					<label class="radio-inline">
						<input type="radio" name="personal_style" value="1" <?php  if($personal['personal_style']==1) { ?> checked="checked"<?php  } ?>/>旧样式
					</label>
					<div class="help-block">默认新样式。</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">页面标题</label>
				<div class="col-sm-9 col-xs-12">
					<input type="text" name="mobtitle" class="form-control" value="<?php  echo $personal['mobtitle'];?>">
					<div class="help-block">显示在手机端页面标题</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现抽成</label>
				<div class="col-sm-9 col-xs-6">
					<div class="input-group">
						<input type="text" class="form-control" name="tx_cc" value="<?php  echo $personal['tx_cc'];?>"/>
						<span class="input-group-addon">%</span>
					</div>
					<div class="help-block"> 0 为不收取，默认为0，请根据需要设置,最大值90.</div>
				</div>
			</div>
			<div class="form-group" style="display: block">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否显示性别</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="show_sex" value="0" <?php  if($personal['show_sex']==0) { ?> checked="checked"<?php  } ?>/>显示
					</label>
					<label class="radio-inline">
						<input type="radio" name="show_sex" value="1" <?php  if($personal['show_sex']==1) { ?> checked="checked"<?php  } ?>/>不显示
					</label>
					<div class="help-block">默认显示。</div>
				</div>
			</div>
			<div class="form-group" style="display: block">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否显示签到数</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="show_qd" value="0" <?php  if($personal['show_qd']==0) { ?> checked="checked"<?php  } ?>/>显示
					</label>
					<label class="radio-inline">
						<input type="radio" name="show_qd" value="1" <?php  if($personal['show_qd']==1) { ?> checked="checked"<?php  } ?>/>不显示
					</label>
					<div class="help-block">默认显示。</div>
				</div>
			</div>
			<div class="form-group" style="display: block">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否允许修改信息</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_changge" value="0" <?php  if($personal['is_changge']==0) { ?> checked="checked"<?php  } ?>/>允许
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_changge" value="1" <?php  if($personal['is_changge']==1) { ?> checked="checked"<?php  } ?>/>不允许
					</label>
					<div class="help-block">默认允许。</div>
				</div>
			</div>
			<div class="form-group">
				<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">顶部背景</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('my_bg', $personal['my_bg']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：750*400</div>
				</div>
			</div>
			<div class="form-group">
				<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">账户余额背景</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('money_bg', $personal['money_bg']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：750*400</div>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="control-label col-xs-12 col-sm-3 col-md-2">我的奖品顶部背景图</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('prize_bg', $personal['prize_bg']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：750*400</div>
				</div>
				<div class="form-group col-sm-12">
					<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="op" value="addad" />
				</div>
			</div>



		</form>
	</div>


</div>
<!-- <div id="queding" class="hide">
	<span class="pull-right btn btn-primary" id="chengaddd" onclick="abc()">确定</span>
</div> -->
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