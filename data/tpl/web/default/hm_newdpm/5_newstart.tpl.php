<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
	    <li class="active"><a  href="#">设置开关</a></li>
	</ul>


	<form action="" method="post" class=" form" enctype="multipart/form-data">
		<input type="hidden" name="reply_id" value="<?php  echo $reply['rid'];?>" />
		<input type="hidden" name="id" value="<?php  echo $reply['id'];?>" />
		<input type="hidden" name="yyyid" value="<?php  echo $yyy['id'];?>" />
		<input type="hidden" name="xysid" value="<?php  echo $xys['id'];?>" />
		<input type="hidden" name="bpid" value="<?php  echo $bp['id'];?>" />
		<input type="hidden" name="xyhid" value="<?php  echo $xyh['id'];?>" />
		<input type="hidden" name="cjxid" value="<?php  echo $cjx['id'];?>" />
		<input type="hidden" name="fhbid" value="<?php  echo $fanshb['id'];?>" />
		<input type="hidden" name="shouqianid" value="<?php  echo $shouqian['id'];?>" />
		<input type="hidden" name="countmoneyid" value="<?php  echo $countmoney['id'];?>" />
	<div class="panel panel-default">
		<div class="panel-heading">
			开幕墙/闭幕墙开关设置
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启开幕墙</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="timenum" value="0" <?php  if($reply['timenum']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="timenum" value="1" <?php  if($reply['timenum']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启闭幕墙</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="share_type" value="0" <?php  if($reply['share_type']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="share_type" value="1" <?php  if($reply['share_type']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			消息样式开关
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机端消息</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="ismessage" value="0" <?php  if($reply['ismessage']==0) { ?> checked="checked"<?php  } ?>/>默认
					</label>
					<label class="radio-inline">
						<input type="radio" name="ismessage" value="1" <?php  if($reply['ismessage']==1) { ?> checked="checked"<?php  } ?>/>聊天界面
					</label>
					<label class="radio-inline">
						<input type="radio" name="ismessage" value="2" <?php  if($reply['ismessage']==2) { ?> checked="checked"<?php  } ?>/>新版聊天界面
					</label>
					<div class="help-block">手机端消息页面的样式，聊天:类似QQ群聊</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			手签/3D签到开关
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启3d签到</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isqd" value="0" <?php  if($reply['isqd']==0) { ?> checked="checked"<?php  } ?>/>开启随机切换模式(包含LOGO和文字)
					</label>
					<label class="radio-inline">
						<input type="radio" name="isqd" value="3" <?php  if($reply['isqd']==3) { ?> checked="checked"<?php  } ?>/>开启随机切换模式(不包含LOGO和文字)
					</label>
					<label class="radio-inline">
						<input type="radio" name="isqd" value="2" <?php  if($reply['isqd']==2) { ?> checked="checked"<?php  } ?>/>开启固定显示模式
					</label>
					<label class="radio-inline">
						<input type="radio" name="isqd" value="1" <?php  if($reply['isqd']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">手签是否开启</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="status" value="0"  <?php  if($shouqian['status']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="status" value="1"  <?php  if($shouqian['status']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>

					<div class="help-block">默认关闭，开启后粉丝签到完成后自动跳转到手签页面。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">普通签到是否开启</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="pm_status" value="0"  <?php  if($shouqian['pm_status']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="pm_status" value="1"  <?php  if($shouqian['pm_status']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>

					<div class="help-block">默认关闭。</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			抽奖(普通、3D、抽奖箱)开关
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启抽奖</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="ischoujiang" value="0" <?php  if($reply['ischoujiang']==0) { ?> checked="checked"<?php  } ?>/>开启3D模式
					</label>
					<label class="radio-inline">
						<input type="radio" name="ischoujiang" value="2" <?php  if($reply['ischoujiang']==2) { ?> checked="checked"<?php  } ?>/>开启普通模式
					</label>
					<label class="radio-inline">
						<input type="radio" name="ischoujiang" value="1" <?php  if($reply['ischoujiang']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="ischoujiang" value="3" <?php  if($reply['ischoujiang']==3) { ?> checked="checked"<?php  } ?>/>开启3D模式(快速显示结果)
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启抽奖箱</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isCjxStart" value="0" <?php  if($cjx['isCjxStart']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="isCjxStart" value="1" <?php  if($cjx['isCjxStart']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			大屏幕红包
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启大屏幕红包</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isqhb" value="0" <?php  if($reply['isqhb']==0) { ?> checked="checked"<?php  } ?>/>开启咻一咻红包
					</label>
					<label class="radio-inline">
						<input type="radio" name="isqhb" value="2" <?php  if($reply['isqhb']==2) { ?> checked="checked"<?php  } ?>/>开启摇一摇红包
					</label>
					<label class="radio-inline">
						<input type="radio" name="isqhb" value="1" <?php  if($reply['isqhb']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕抢红包效果</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="dpmhbtype" value="0" <?php  if($reply['dpmhbtype']==0) { ?> checked="checked"<?php  } ?>/>红包弹窗
					</label>
					<label class="radio-inline">
						<input type="radio" name="dpmhbtype" value="1" <?php  if($reply['dpmhbtype']==1) { ?> checked="checked"<?php  } ?>/>红包雨
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">每人最多中奖次数</label>
				<div class="col-sm-9 col-xs-6">
					<div class="input-group">
						<input type="text" class="form-control" name="award_times" value="<?php  echo $reply['award_times'];?>" />
						<span class="input-group-addon">次</span>
					</div>
					<div class="help-block">不管重置了多少次活动，单个用户最多共享几个奖项，0为不限制，推荐设置为1次!</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">每人每轮中奖次数</label>
				<div class="col-sm-9 col-xs-6">
					<div class="input-group">
						<input type="text" class="form-control" name="most_num_times"  value="<?php  echo $reply['most_num_times'];?>"/>
						<span class="input-group-addon">次</span>
					</div>
					<div class="help-block"> 0 为不限制 达到中奖次数就不能中奖了!<span style="color: #FF0000">重置抽奖活动的时候,重置一次计算一次！</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			开启嘉宾/投票开关
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启嘉宾</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isjiabin" value="0" <?php  if($reply['isjiabin']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="isjiabin" value="1" <?php  if($reply['isjiabin']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启投票</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="istoupiao" value="0" <?php  if($reply['istoupiao']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="istoupiao" value="1" <?php  if($reply['istoupiao']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			报名开关
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启报名</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isbaoming" value="0" <?php  if($reply['isbaoming']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="isbaoming" onclick="alert('确定开启报名模式！')" value="1" <?php  if($reply['isbaoming']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			摇一摇/许愿树开关
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启摇一摇</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isyyy" value="0" <?php  if($yyy['isyyy']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="isyyy" value="1" <?php  if($yyy['isyyy']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。<span style="color: red">玩这个功能的系统最好必须都是liunx系统</span></div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启许愿树</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isxys" value="0" <?php  if($xys['isxys']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="isxys" value="1" <?php  if($xys['isxys']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			霸屏相关开关
		</div>
		<div class="panel-body">
			<div class="form-group" >
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启霸屏大屏幕</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="openscreen" value="1"  <?php  if($bp['openscreen']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="openscreen" value="0"  <?php  if($bp['openscreen']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认开启。<span style="color: red">(仅支持新聊天模式)，如果关闭，霸屏,打赏,红包,表白,送礼,涂鸦都不能使用</span></div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启霸屏</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isbp" value="0" <?php  if($bp['isbp']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="isbp" value="1" <?php  if($bp['isbp']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。<span style="color: red">必须要开通支付</span></div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启打赏</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isds" value="0" <?php  if($bp['isds']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="isds" value="1" <?php  if($bp['isds']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。<span style="color: red">必须要开通支付</span></div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启小视频</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isvo" value="0" <?php  if($bp['isvo']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="isvo" value="1" <?php  if($bp['isvo']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。<span style="color: red">必须要开通支付(新聊天模式和霸屏一起)</span></div>
				</div>
			</div>
			<div class="form-group" >
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启私聊交友</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_mf" value="0" <?php  if($bp['is_mf']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_mf" value="1"  <?php  if($bp['is_mf']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。<span style="color: red">必须要开通支付</span></div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启表白</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isbb" value="0" <?php  if($bp['isbb']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="isbb" value="1"  <?php  if($bp['isbb']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>

					<div class="help-block">默认关闭。<span style="color: red">必须要开通支付(仅支持新聊天模式)</span></div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">表白抽成</label>
				<div class="col-sm-9 col-xs-6">
					<div class="input-group">
						<input type="text" class="form-control" name="bb_tc" value="<?php  echo $bp['bb_tc'];?>"/>
						<span class="input-group-addon">%</span>
					</div>
					<div class="help-block"> 0 为不收取，默认为6%，请根据需要设置,最大值100.</div>
				</div>
			</div>
			<div class="form-group" >
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启好友送礼</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_gift" value="0"  <?php  if($bp['is_gift']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_gift" value="1"  <?php  if($bp['is_gift']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。<span style="color: red">必须要开通支付(仅支持新聊天模式)</span></div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">送礼抽成</label>
				<div class="col-sm-9 col-xs-6">
					<div class="input-group">
						<input type="text" class="form-control" name="sl_tc" value="<?php  echo $bp['sl_tc'];?>"/>
						<span class="input-group-addon">%</span>
					</div>
					<div class="help-block"> 0 为不收取，默认为6%，请根据需要设置,最大值100.</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启涂鸦</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_ty" value="0" <?php  if($fanshb['is_ty']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_ty" value="1" <?php  if($fanshb['is_ty']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。<span style="color: red">必须要开通支付</span></div>
				</div>
			</div>
			<div class="form-group" style="display: block">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否允许发布图片</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_img" value="0"  <?php  if($bp['is_img']==0) { ?> checked="checked"<?php  } ?>/>都允许
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_img" value="1"  <?php  if($bp['is_img']==1) { ?> checked="checked"<?php  } ?>/>普通消息不允许
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_img" value="2"  <?php  if($bp['is_img']==2) { ?> checked="checked"<?php  } ?>/>霸屏不允许
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_img" value="3"  <?php  if($bp['is_img']==3) { ?> checked="checked"<?php  } ?>/>都不允许
					</label>
					<div class="help-block">默认允许。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启手机顶部霸屏</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="ismbp" value="0" <?php  if($bp['ismbp']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="ismbp" value="1" <?php  if($bp['ismbp']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。新版霸屏暂时不支持<span style="color: red"></span></div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启粉丝发红包</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isfanshb" value="0" <?php  if($fanshb['isfanshb']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="isfanshb" value="1" <?php  if($fanshb['isfanshb']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">粉丝抢红包是否需要关注</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_follow" value="0"  <?php  if($fanshb['is_follow']==0) { ?> checked="checked"<?php  } ?>/>不需要
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_follow" value="1"  <?php  if($fanshb['is_follow']==1) { ?> checked="checked"<?php  } ?>/>需要
					</label>
					<div class="help-block">默认不关注。如果要关注请上传关注二维码。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否允许在粉丝管理处设置活动管理员</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_setadmin" value="0" <?php  if($fanshb['is_setadmin']==0) { ?> checked="checked"<?php  } ?>/>不允许
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_setadmin" value="1" <?php  if($fanshb['is_setadmin']==1) { ?> checked="checked"<?php  } ?>/>允许
					</label>
					<div class="help-block">默认不允许。</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			对对碰/幸运大转盘开关
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启对对碰</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_pair" value="0" <?php  if($xys['is_pair']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_pair" value="1" <?php  if($xys['is_pair']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启大转盘</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_turntable" value="0" <?php  if($xys['is_turntable']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_turntable" value="1" <?php  if($xys['is_turntable']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			幸运号/幸运手机号开关
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启幸运号码</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_xyh" value="0" <?php  if($xyh['is_xyh']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_xyh" value="1" <?php  if($xyh['is_xyh']==1) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启幸运手机号码</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_xysjh" value="0" <?php  if($xyh['is_xysjh']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_xysjh" value="1" <?php  if($xyh['is_xysjh']==1) { ?> checked="checked"<?php  } ?>/>不开启
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启自定义抽奖</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="is_zdycj" value="0" <?php  if($xyh['is_zdycj']==0) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_zdycj" value="1" <?php  if($xyh['is_zdycj']==1) { ?> checked="checked"<?php  } ?>/>不开启
					</label>
					<div class="help-block">默认开启。</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
			<div class="panel-heading">
				数钱开关
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启数钱</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="iscount" value="0" <?php  if($countmoney['iscount']==0) { ?> checked="checked"<?php  } ?>/>关闭
						</label>
						<label class="radio-inline">
							<input type="radio" name="iscount"  value="1" <?php  if($countmoney['iscount']==1) { ?> checked="checked"<?php  } ?>/>开启
						</label>
						<div class="help-block">默认关闭。<span style="color: red">**阿(莫*之^家$提#示:本功能目前只能小规模使用。参与人数不得超过50人。</span></div>
					</div>
				</div>
			</div>
		</div>

	<div class="form-group col-sm-12">
		<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
		<input type="hidden" name="op" value="updataad" />
	</div>
	</form>

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