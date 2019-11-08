<?php defined('IN_IA') or exit('Access Denied');?>
<style type="text/css">
	#tag{width:750px; height:auto; text-align:left; padding:10px; border:1px #E0E0E0 solid ; line-height:25px;    border-radius: 5px;}
	/*input post tab*/
	div.radius_shadow{border:1px solid #DBDBDB;-moz-border-radius:5px;-khtml-border-radius:5px;-webkit-border-radius:5px;border-radius: 5px;padding:5px;-webkit-box-shadow:0 0 10px #414141;-moz-box-shadow:0 0 10px #414141;box-shadow:0 0 10px #414141;font-size:12px;background:#fff;}
	span#radius{display:inline-block;float:none;font-size:12px;padding:2px 5px;margin:-2px 5px 15px;border:1px solid #E0E0E0; background-color:#F0F0F0;-moz-border-radius:5px;-khtml-border-radius:5px;-webkit-border-radius:5px;border-radius: 5px;color:#000;}
	.tabinput{margin-left:5px;border:0;}
	a#deltab{cursor:pointer;display:inline-block;color:#808080;margin-left:5px;font-weight:bold;}
	a#deltab:hover{color:#D2D2D2;text-decoration:none;}
	#getTab{ margin-top:10px;border:1px solid #E0E0E0; background-color:#F0F0F0; padding:10px; cursor:pointer;}
	.nav-tabs>li>a {margin-right: 2px;line-height: 1.42857143;border: 1px solid transparent;border-radius: 0;}

</style>
<!--<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/jquery-1.11.1.min.js"></script>-->
<!--<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/app/util.js"></script>-->
 <!--<script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>-->
<!-- <script type="text/javascript" src="../addons/hm_newdpm/images/tabControl.js"></script> -->

<input type="hidden" name="reply_id" value="<?php  echo $reply['rid'];?>" />
<input type="hidden" name="id" value="<?php  echo $reply['id'];?>" />
<input type="hidden" name="yyyid" value="<?php  echo $yyy['id'];?>" />
<input type="hidden" name="xysid" value="<?php  echo $xys['id'];?>" />
<input type="hidden" name="bpid" value="<?php  echo $bp['id'];?>" />
<input type="hidden" name="vedioid" value="<?php  echo $video['id'];?>" />
<input type="hidden" name="xyhid" value="<?php  echo $xyh['id'];?>" />
<input type="hidden" name="cjxid" value="<?php  echo $cjx['id'];?>" />
<input type="hidden" name="mbid" value="<?php  echo $mb['id'];?>" />
<input type="hidden" name="fhbid" value="<?php  echo $fanshb['id'];?>" />
<input type="hidden" name="shouqianid" value="<?php  echo $shouqian['id'];?>" />
<input type="hidden" name="photoid" value="<?php  echo $photo['id'];?>" />
<?php  if($znl_==1) { ?>
<input type="hidden" name="znlid" value="<?php  echo $znl['id'];?>" />
<?php  } ?>
<?php  if($ds_==1) { ?>
<input type="hidden" name="dsid" value="<?php  echo $ds['id'];?>" />
<?php  } ?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style="margin-bottom: 0;border: 1px #428bca solid;border-bottom: none;background: #eee;">
  <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">基础设置</a></li>
  <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">开幕</a></li>
  <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">二维码</a></li>
  <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">消息/弹幕</a></li>
  <li role="presentation"><a href="#settings2" role="tab" data-toggle="tab">3D签到</a></li>
  <li role="presentation"><a href="#settings3" role="tab" data-toggle="tab">抽奖/3D抽奖</a></li>
  <li role="presentation"><a href="#settings4" role="tab" data-toggle="tab">抢红包</a></li>
  <li role="presentation"><a href="#settings5" role="tab" data-toggle="tab">嘉宾</a></li>
  <li role="presentation"><a href="#settings6" role="tab" data-toggle="tab">闭幕</a></li>
  <li role="presentation"><a href="#settings7" role="tab" data-toggle="tab">微信端</a></li>
  <li role="presentation"><a href="#settings8" role="tab" data-toggle="tab">黑名单</a></li>
  <li role="presentation"><a href="#settings9" role="tab" data-toggle="tab">投票</a></li>
  <li role="presentation"><a href="#settings10" role="tab" data-toggle="tab">报名</a></li>
  <li role="presentation"><a href="#settings11" role="tab" data-toggle="tab">摇一摇</a></li>
  <li role="presentation"><a href="#settings12" role="tab" data-toggle="tab">许愿树</a></li>
  <li role="presentation"><a href="#settings13" role="tab" data-toggle="tab">霸屏</a></li>
  <li role="presentation"><a href="#settings14" role="tab" data-toggle="tab">对对碰</a></li>
  <li role="presentation"><a href="#settings15" role="tab" data-toggle="tab">大转盘</a></li>
  <li role="presentation"><a href="#settings16" role="tab" data-toggle="tab">幸运号码</a></li>
  <li role="presentation"><a href="#settings17" role="tab" data-toggle="tab">抽奖箱</a></li>
  <li role="presentation"><a href="#settings18" role="tab" data-toggle="tab">模版消息</a></li>
  <li role="presentation"><a href="#settings19" role="tab" data-toggle="tab">粉丝红包设置</a></li>
  <li role="presentation"><a href="#settings20" role="tab" data-toggle="tab">手绘签到</a></li>
  <li role="presentation"><a href="#settings21" role="tab" data-toggle="tab">普通签到</a></li>
	<?php  if($znl_==1) { ?>
	<li role="presentation"><a href="#settings22" role="tab" data-toggle="tab">攒能量</a></li>
	<?php  } ?>
	<?php  if($ds_==1) { ?>
	<li role="presentation"><a href="#settings22" role="tab" data-toggle="tab">打赏</a></li>
	<?php  } ?>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<!-- 大屏幕基础设置 -->
  <div role="tabpanel" class="tab-pane active" id="home">
	 <!-- 大屏幕基础设置 -->
  <div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>特别说明</label>
            <div class="col-sm-9 col-xs-12">
                <p style="width:100%;padding:15px;border:1px #eee dashed;line-height: 28px;background:#fdf8e4;color:#b97b32">
                    1、由于使用视频背景，对电脑配置要求较高，使用视频背景电脑配置需要是CPU I5及以上、内存8G、独立显卡1M，否则活动过程容易出现卡顿现象。<br>
                    2、如果有出现间隔闪烁的情况，请刷新下页面就可以解决；<br>
                    <?php  if(IMS_VERSION < 0.8) { ?>
                    3、由于系统0.8以下版本无法上传视频，请直接通过FTP把视频传到系统根目录下的attachment文件夹，再把视频文件名填入(记得要加.mp4后缀)视频背景框既可，例如：您把“baping.mp4”这个视频上传到attachment文件夹，那么视频背景框就直接填入“baping.mp4”就行。
                    <?php  } ?>
                </p>
            </div>
        </div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕链接</label>
			<div class="col-sm-9 col-xs-12">
				<a target="_blank" href="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=hm_newdpm&do=login&id=<?php  echo $rid;?>" type="button" class="btn btn-danger ">查看大屏幕</a>
				<span>新建活动规则时，请先保存规则后，再点击该链接，否则会出现报错信息。</span>
				<div class="help-block" style="color: #FF0000">为了显示最佳效果，请务必将投影仪的分辨率设成标准的1024*768</div>
			</div>
		</div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕主题</label>
            <div class="col-sm-9 col-xs-12">
               	<input type="text" name="title" class="form-control" value="<?php  echo $reply['title'];?>">
				<div class="help-block">显示在页面标题和大屏幕的顶部条上</div>
            </div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color: red">*</span>活动主题</label>
			  <div class="col-sm-9 col-xs-12">
				  <input type="text" name="p_title" class="form-control" value="<?php  echo $reply['p_title'];?>">
				  <div class="help-block">用于回复关键字后返回图文的标题</div>
			  </div>
		  </div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color: red">*</span>活动图片</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_image('picture', $reply['picture']);?>
				<div class="help-block">用于回复关键字后返回图片 700*300</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 活动说明</label>
			<div class="col-sm-9 col-xs-12">
				<textarea style="height:60px;" id='description' name="description" class="form-control" cols="60"><?php  echo $reply['description'];?></textarea>
			</div>
		</div>

		<div class="form-group" >
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕登陆密码</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" class="form-control" placeholder="" name="loginpassword" value="<?php  echo $reply['loginpassword'];?>">
				<div class="help-block">用来登陆大屏幕的密码，防止其他人也可以登陆大屏幕进行活动操作。</div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕底部是否是否显示关注引导</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="is_yyy" value="0" <?php  if($reply['isyyy']==0) { ?> checked="checked"<?php  } ?>/>开启
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="is_yyy" value="1" <?php  if($reply['isyyy']==1) { ?> checked="checked"<?php  } ?>/>关闭
				  </label>
				  <div class="help-block">默认开启。</div>
			  </div>
		  </div>

		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕上是否使用签到姓名</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="is_realname" value="0" <?php  if($reply['is_realname']==0) { ?> checked="checked"<?php  } ?>/>昵称
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="is_realname" value="1" <?php  if($reply['is_realname']==1) { ?> checked="checked"<?php  } ?>/>签到的姓名
				  </label>
				  <div class="help-block">默认昵称。抽奖和消息墙</div>
			  </div>
		  </div>
		  <div class="form-group">
              <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否关闭签到</label>
              <div class="col-sm-9">
                  <label class="radio-inline">
                      <input type="radio" name="is_openbbm" id="openbbm" value="0" <?php  if($reply['is_openbbm']==0) { ?> checked="checked"<?php  } ?>/>否
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="is_openbbm" id="openbbm2" value="1" <?php  if($reply['is_openbbm']==1) { ?> checked="checked"<?php  } ?>/>是
                  </label>
                  <div class="help-block">默认关闭，开启后，参与着扫码后无法继续签到。</div>
              </div>
          </div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否显示签到排序</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="k_templateid" id="qd_pid" value="0" <?php  if($reply['k_templateid']==0) { ?> checked="checked"<?php  } ?>/>否
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="k_templateid" id="qd_pid2" value="1" <?php  if($reply['k_templateid']==1) { ?> checked="checked"<?php  } ?>/>是
				  </label>
				  <div class="help-block">默认关闭，开启后，签到成功后会出现第几个签到，最多只能到2000个(可配合抽幸运号码使用)，超过2000人次的建议不要开启。</div>
			  </div>
		  </div>

		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否去除背景</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="is_transparent" id="is_transparent" value="0" <?php  if($reply['is_transparent']==0) { ?> checked="checked"<?php  } ?>/>否
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="is_transparent" id="is_transparent2" value="1" <?php  if($reply['is_transparent']==1) { ?> checked="checked"<?php  } ?>/>是
				  </label>
				  <div class="help-block">默认否，开启后，大部分页面将都没有背景图片，并以白色填充。</div>
			  </div>
		  </div>

		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否关闭手机端页面</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="is_close_activity" id="is_close_activity" value="0" <?php  if($reply['is_close_activity']==0) { ?> checked="checked"<?php  } ?>/>否
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="is_close_activity" id="is_close_activity2" value="1" <?php  if($reply['is_close_activity']==1) { ?> checked="checked"<?php  } ?>/>是
				  </label>
				  <div class="help-block">默认否，开启后，手机端访问任何地址都进入一个指定的页面。</div>
			  </div>
		  </div>
           <div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">登陆界面视频背景</label>
				<div class="col-sm-9 col-xs-12">
				<?php  if(IMS_VERSION >= 0.8) { ?> 
					<?php  echo tpl_form_field_video('vodio_bg1', $video['vodio_bg1']);?>
					<div class="help-block">登陆视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
				<?php  } else { ?>
					<input type="text" class="form-control" name="vodio_bg1" value="<?php  echo $video['vodio_bg1'];?>">
					<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，登陆视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
				<?php  } ?>
					
				</div>
			</div>

		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">同一个人中奖条件</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="iscjnum" value="0" <?php  if($reply['iscjnum']==0) { ?> checked="checked"<?php  } ?>/>只能中一个奖品
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="iscjnum" value="1" <?php  if($reply['iscjnum']==1) { ?> checked="checked"<?php  } ?>/>每个奖品都有机会中
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="iscjnum" value="2" <?php  if($reply['iscjnum']==2) { ?> checked="checked"<?php  } ?>/>全类型抽奖只能中一个
				  </label>
				  <div class="help-block">设置同一个人可以中几个奖品，默认只能中一个奖品(单个抽奖类型)，切换此功能必须重新刷新活动页面才能生效。</div>
			  </div>
		  </div>
            
      </div>
    </div>
  </div>
<!-- 大屏幕基础设置 -->
  </div>
 <!-- 大屏幕基础设置 -->
<!-- 开幕墙设置 -->
  <div role="tabpanel" class="tab-pane" id="profile">
	<!-- 开幕墙设置 -->
  <div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">

      	<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="timenum" value="0" disabled <?php  if($reply['timenum']==0) { ?> checked="checked"<?php  } ?> />开启
				</label>
				<label class="radio-inline">
					<input type="radio" name="timenum" value="1" disabled <?php  if($reply['timenum']==1) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<input type="hidden" name="timenum" value="<?php  echo $reply['timenum'];?>">
				<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">开幕墙图</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_image('tiemadpic',$reply['tiemadpic']);?>
				<div class="help-block">开幕墙显示的图片，尺寸984*636</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">开幕墙背景</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_image('kaimubg',$reply['kaimubg']);?>
				<div class="help-block">开幕墙背景，尺寸1440*900</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">开幕墙视频背景</label>
			<div class="col-sm-9 col-xs-12">
			<?php  if(IMS_VERSION >= 0.8) { ?> 
				<?php  echo tpl_form_field_video('vodio_bg2', $video['vodio_bg2']);?>
				<div class="help-block">开幕墙背景mp4格式，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } else { ?>
				<input type="text" class="form-control" name="vodio_bg2" value="<?php  echo $video['vodio_bg2'];?>">
				<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，开幕墙背景mp4格式，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } ?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('timeadurl',$reply['timeadurl']);?>
				<div class="help-block">开幕墙背景音乐，不上传则不使用背景音乐</div>
			</div>
		</div>

      </div>
    </div>
  </div>
<!-- 开幕墙设置 -->

	
  </div>
<!-- 开幕墙设置 -->
<!-- 二维码设置 -->
  <div role="tabpanel" class="tab-pane" id="messages">

	<!-- 二维码设置 -->
  <div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">签到二维码图片</label>
			<div class="col-sm-9 col-xs-12">
				<img src="<?php  echo $imgUrl;?>">
				<div class="help-block"><b style="color: #FC110D">可以把这个二维码放下面的关注二维码上，这样粉丝扫描二维码就可以马上进入手机端签到页面。<br>第一次建立规则，必须保存后再使用这个二维码图片</b>，需要拥有高级接口权限的！</div>
			</div>
		</div>

      	<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">关注二维码</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_image('up_qrcode', $reply['up_qrcode']);?>
				<div class="help-block">大屏幕、手机端等需要使用到二维码的地方，统一使用这个二维码图片，请上传公众号的二维码图片。尺寸为：400*400</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">提醒话术</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" class="form-control" name="qrcodedec" value="<?php  echo $reply['qrcodedec'];?>">
				<div class="help-block">大屏幕二维码页面的自定义提醒话术，不填则使用默认的。</div>
			</div>
		</div>
      </div>
    </div>
  </div>
  <!-- 二维码设置 -->

  </div>
<!-- 二维码设置 -->
<!-- 消息墙设置 -->
  <div role="tabpanel" class="tab-pane" id="settings">
	<!-- 消息墙设置 -->
<div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapsefour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfour">
      <div class="panel-body">
		 <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机端消息</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="ismessage" value="0" disabled <?php  if($reply['ismessage']==0) { ?> checked="checked"<?php  } ?>/>默认
				</label>
				<label class="radio-inline">
					<input type="radio" name="ismessage" value="1" disabled <?php  if($reply['ismessage']==1) { ?> checked="checked"<?php  } ?>/>聊天界面
				</label>
				<label class="radio-inline">
					<input type="radio" name="ismessage" value="2" disabled <?php  if($reply['ismessage']==2) { ?> checked="checked"<?php  } ?>/>新版聊天界面
				</label>
				<input type="hidden" name="ismessage" value="<?php  echo $reply['ismessage'];?>" />

				<div class="help-block">手机端消息页面的样式，聊天:类似QQ群聊。修改样式请在【活动开关设置】里面修改</div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">直接进入聊天消息界面二维码</label>
			  <div class="col-sm-9 col-xs-12">
				  <img src="<?php  echo $imgUrl3;?>">
				  <div class="help-block"><b style="color: #FC110D">粉丝扫描二维码就可以马上进入手机端消息页面。<br>第一次建立规则，必须保存后再使用这个二维码图片</b>，需要拥有高级接口权限的！</div>
			  </div>
		  </div>
		<div class="form-group">
			<label for="registurl" class="control-label col-xs-12 col-sm-3 col-md-2">消息墙/弹幕背景图</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_image('registurl', $reply['registurl']);?>
				<div class="help-block">消息墙背景图，不上传就使用默认背景图,尺寸：1440*900</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">消息墙/弹幕视频背景</label>
			<div class="col-sm-9 col-xs-12">
			<?php  if(IMS_VERSION >= 0.8) { ?> 
				<?php  echo tpl_form_field_video('vodio_bg3', $video['vodio_bg3']);?>
				<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } else { ?>
				<input type="text" class="form-control" name="vodio_bg3" value="<?php  echo $video['vodio_bg3'];?>">
				<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } ?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否需要审核</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="isckmessage" value="0" <?php  if($reply['isckmessage']==0) { ?> checked="checked"<?php  } ?>/>开启
				</label>
				<label class="radio-inline">
					<input type="radio" name="isckmessage" value="1" <?php  if($reply['isckmessage']==1) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<div class="help-block">粉丝发布的消息是否需要审核才能显示在大屏幕上面，默认需要。</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">开启图片自动放大</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="isopenimg" value="0" <?php  if($reply['isopenimg']==0) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<label class="radio-inline">
					<input type="radio" name="isopenimg" value="1" <?php  if($reply['isopenimg']==1) { ?> checked="checked"<?php  } ?>/>开启
				</label>
				<div class="help-block">开启图片自动放大功能，粉丝发布的消息中带有图片的会自动放大，默认关闭。<br>
				开启此功能的时候，请务必不要让浏览器长时间呆后台中，否则会出现图文一直放大。<br>
				出现这个问题，可以刷新下页面就可以解决。
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('headurl',$reply['headurl']);?>
				<div class="help-block">消息墙/弹幕背景音乐，不上传则不使用背景音乐</div>
			</div>
		</div>

      </div>
    </div>
  </div>
   <!-- 消息墙设置 -->
  </div>
<!-- 消息墙设置 -->
<!-- 3D签到墙设置 -->
  <div role="tabpanel" class="tab-pane" id="settings2">
	<!-- 3D签到墙设置 -->
  <div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading5">
      <div class="panel-body">
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>特别说明</label>
            <div class="col-sm-9 col-xs-12">
                <p style="width:100%;padding:15px;border:1px #eee dashed;line-height: 28px;background:#fdf8e4;color:#b97b32">
                    由于使用3D签到功能会大量消耗电脑资源，为了能流畅使用请根据下面要求做：<br>
                    1、chrome浏览器请更新到最新版的，或是较新版本，请开启浏览器的《使用硬件加速模式》，在浏览器的设置》》高级设置》》系统；<br>
                    2、电脑配置必须是4G内存以上，建议8G，I5,4核CPU，独立显卡，显存1G以上；<br>
                    3、建议使用win10系统，或是苹果系统的笔记本更佳；<br>
                    4、Logo请严格按照367*378设置，要显示的涂纯色，不显示的使用透明，严禁使用渐变色；<br>
                    5、请不要在活动的时候还开启除浏览器外的其他软件，防止内存和CPU不足
                </p>
            </div>
        </div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">启用状态</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="isqd" value="0" disabled <?php  if($reply['isqd']==0) { ?> checked="checked"<?php  } ?>/>开启随机切换模式(包含LOGO和文字)
				</label>
				<label class="radio-inline">
					<input type="radio" name="isqd" value="3" disabled <?php  if($reply['isqd']==3) { ?> checked="checked"<?php  } ?>/>开启随机切换模式(不包含LOGO和文字)
				</label>
				<label class="radio-inline">
					<input type="radio" name="isqd" value="2" disabled <?php  if($reply['isqd']==2) { ?> checked="checked"<?php  } ?>/>开启固定显示模式
				</label>
				<label class="radio-inline">
					<input type="radio" name="isqd" value="1" disabled <?php  if($reply['isqd']==1) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<input type="hidden" name="isqd" value="<?php  echo $reply['isqd'];?>" />
				<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启倒计时</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="is3ddaojishi" value="0" <?php  if($reply['is3ddaojishi']==0) { ?> checked="checked"<?php  } ?>/>不开启
				</label>
				<label class="radio-inline">
					<input type="radio" name="is3ddaojishi" value="1" <?php  if($reply['is3ddaojishi']==1) { ?> checked="checked"<?php  } ?>/>开启自动倒计时模式
				</label>
				<label class="radio-inline">
					<input type="radio" name="is3ddaojishi" value="2" <?php  if($reply['is3ddaojishi']==2) { ?> checked="checked"<?php  } ?>/>开启手动倒计时模式
				</label>
				<div class="help-block">默认不开启，开启了，将会先显示3D倒计时的效果，然后再显示后续LOGO文字和其他特效。<br>
				自动倒计时模式，就是一进入页面将自动显示3D倒计时效果。<br>
				手动倒计时模式，进入3D页面，不会马上显示倒计时效果，需要按空格键才会开始显示，这样可以对接其他支持空格键启动的硬件。
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">倒计时间</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" class="form-control" name="daojishinum" value="<?php  echo $reply['daojishinum'];?>">
				<div class="help-block">倒计时的时间，默认5秒，单位为秒</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">倒计时音效<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('daojishimusic',$reply['daojishimusic']);?>
				<div class="help-block">倒计时音效,不上传就不使用音效。</div>
			</div>
		</div>


		<div class="form-group">
			<label for="panzi" class="control-label col-xs-12 col-sm-3 col-md-2">背景设置</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('panzi', $reply['panzi']);?>
			<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">3D签到视频背景</label>
			<div class="col-sm-9 col-xs-12">
			<?php  if(IMS_VERSION >= 0.8) { ?> 
				<?php  echo tpl_form_field_video('vodio_bg4', $video['vodio_bg4']);?>
				<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } else { ?>
				<input type="text" class="form-control" name="vodio_bg4" value="<?php  echo $video['vodio_bg4'];?>">
				<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } ?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">默认头像显示模式</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="qdthemes" value="0" <?php  if($reply['qdthemes']==0) { ?> checked="checked"<?php  } ?>/>真实头像
				</label>
				<label class="radio-inline">
					<input type="radio" name="qdthemes" value="1" <?php  if($reply['qdthemes']==1) { ?> checked="checked"<?php  } ?>/>默认固定头像
				</label>
				<div class="help-block">开启调用默认头像的模式，再真实签到人数不够填满整个屏幕的时候调用，默认是调用模块自带的随机数据，切换这个项目的话，必须刷新一下页面才能生效。</div>
			</div>
		</div>
        <?php  if($znl_==1) { ?>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">最新签到显示风格</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="qdshow" value="0" <?php  if($reply['qdshow']==0) { ?> checked="checked"<?php  } ?>/>全屏居中显示
				</label>
				<label class="radio-inline">
					<input type="radio" name="qdshow" value="1" <?php  if($reply['qdshow']==1) { ?> checked="checked"<?php  } ?>/>右下角显示
				</label>
				<div class="help-block">默认全屏居中显示。</div>
			</div>
		</div>
         <?php  } ?>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示模式</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="isqdthemes" value="0" <?php  if($reply['isqdthemes']==0) { ?> checked="checked"<?php  } ?>/>logo和文字
				</label>
				<label class="radio-inline">
					<input type="radio" name="isqdthemes" value="1" <?php  if($reply['isqdthemes']==1) { ?> checked="checked"<?php  } ?>/>水晶球
				</label>
				<label class="radio-inline">
					<input type="radio" name="isqdthemes" value="2" <?php  if($reply['isqdthemes']==2) { ?> checked="checked"<?php  } ?>/>螺旋塔
				</label>
				<label class="radio-inline">
					<input type="radio" name="isqdthemes" value="3" <?php  if($reply['isqdthemes']==3) { ?> checked="checked"<?php  } ?>/>展览厅
				</label>
				<label class="radio-inline">
					<input type="radio" name="isqdthemes" value="4" <?php  if($reply['isqdthemes']==4) { ?> checked="checked"<?php  } ?>/>时空隧道
				</label>
				<div class="help-block">logo和文字、水晶球、螺旋塔、展览厅、时空隧道，五种显示模式可以选择，默认logo和文字。</div>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 文字Logo设置</label>
			<div class="col-sm-9 col-xs-12">
				<textarea style="height:60px;" name="3dlogo" class="form-control" cols="90"><?php  echo $reply['3dlogo'];?></textarea>
				<div class="help-block">签到头像拼装成的文字logo，可以设置多个，顺序轮播显示，每个用"|"隔开，最后不要用"|"结尾，总字数不超过180个字。</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">精度设置</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" class="form-control" name="qdgap" value="<?php  echo $reply['qdgap'];?>">
				<div class="help-block">文字Logo和图片Logo精度设置，值越低精度越高，显示效果越清晰，对电脑的性能要求也就越高，默认14。最大不超过20<br>
				请不要设置低于7，低于7的话，内存和显卡必须达到16G和2G独显以上，并且会出现卡顿效果。<br>
				如果精度低于默认精度，调整完后，建议先放置一个小时测试看看会不会卡顿，再进行正式活动。
				</div>
			</div>
		</div>

		<div class="form-group">
			<label for="3dlogo1" class="control-label col-xs-12 col-sm-3 col-md-2">图片Logo一</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('3dlogo1', $reply['3dlogo1']);?>
			<div class="help-block">使用图片的方式来显示logo，png格式，尺寸为：367*378，不上传为不显示，三个logo依次显示<span style="margin-left:15px"><a target="_blank" href="../addons/hm_newdpm/newimg3/logo6.png">参考案例一</a></span><span style="margin-left:15px"><a target="_blank" href="../addons/hm_newdpm/newimg3/logo1.png">参考案例二</a></span></div>
			</div>
		</div>

		<div class="form-group">
			<label for="3dlogo1" class="control-label col-xs-12 col-sm-3 col-md-2">图片Logo二</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('3dlogo2', $reply['3dlogo2']);?>
			<div class="help-block">使用图片的方式来显示logo，png格式，尺寸为：367*378，不上传为不显示，三个logo依次显示<span style="margin-left:15px"><a target="_blank" href="../addons/hm_newdpm/newimg3/logo6.png">参考案例一</a></span><span style="margin-left:15px"><a target="_blank" href="../addons/hm_newdpm/newimg3/logo1.png">参考案例二</a></span></div>
			</div>
		</div>

		<div class="form-group">
			<label for="3dlogo1" class="control-label col-xs-12 col-sm-3 col-md-2">图片Logo三</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('3dlogo3', $reply['3dlogo3']);?>
			<div class="help-block">使用图片的方式来显示logo，png格式，尺寸为：367*378，不上传为不显示，三个logo依次显示<span style="margin-left:15px"><a target="_blank" href="../addons/hm_newdpm/newimg3/logo6.png">参考案例一</a></span><span style="margin-left:15px"><a target="_blank" href="../addons/hm_newdpm/newimg3/logo1.png">参考案例二</a></span></div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('qjbpic',$reply['qjbpic']);?>
				<div class="help-block">3D签到墙背景音乐，不上传则不使用背景音乐</div>
			</div>
		</div>

      </div>
    </div>
  </div>
  <!-- 3D签到墙设置 -->
  </div>
<!-- 3D签到墙设置 -->
<!-- 抽奖活动设置 -->
  <div role="tabpanel" class="tab-pane" id="settings3">
	<!-- 抽奖活动设置 -->
  <div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse6" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading6">
      <div class="panel-body">
		
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>特别说明</label>
            <div class="col-sm-9 col-xs-12">
                <p style="width:100%;padding:15px;border:1px #eee dashed;line-height: 28px;background:#fdf8e4;color:#b97b32">
                    请务必记得在左侧菜单《现场抽奖奖品》里面添加奖品，并选择适应活动规则，否则抽奖的时候将无奖品显示。
                </p>
            </div>
        </div>

        <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">模式</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="ischoujiang" disabled value="0" <?php  if($reply['ischoujiang']==0) { ?> checked="checked"<?php  } ?>/>开启3D模式
				</label>
				<label class="radio-inline">
					<input type="radio" name="ischoujiang" disabled value="2" <?php  if($reply['ischoujiang']==2) { ?> checked="checked"<?php  } ?>/>开启普通模式
				</label>
				<label class="radio-inline">
					<input type="radio" name="ischoujiang" disabled value="1" <?php  if($reply['ischoujiang']==1) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<label class="radio-inline">
					<input type="radio" name="ischoujiang" disabled value="3" <?php  if($reply['ischoujiang']==3) { ?> checked="checked"<?php  } ?>/>开启3D模式(快速显示结果)
				</label>
				<input type="hidden" name="ischoujiang" value="<?php  echo $reply['ischoujiang'];?>" />
				<div class="help-block">默认开启。修改模式请在【活动开关设置】里面修改</div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启中奖消息推送</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="is_award" value="0" <?php  if($reply['is_award']==0) { ?> checked="checked"<?php  } ?>/>开启客服消息
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="is_award" value="1" <?php  if($reply['is_award']==1) { ?> checked="checked"<?php  } ?>/>关闭
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="is_award" value="2" <?php  if($reply['is_award']==2) { ?> checked="checked"<?php  } ?>/>开启模版消息
				  </label>
				  <div class="help-block">默认开启客服消息。</div>
			  </div>
		  </div>
		<div class="form-group">
			<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">背景设置</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('start_picurl', $reply['start_picurl']);?>
			<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
			<div class="col-sm-9 col-xs-12">
			<?php  if(IMS_VERSION >= 0.8) { ?> 
				<?php  echo tpl_form_field_video('vodio_bg5', $video['vodio_bg5']);?>
				<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } else { ?>
				<input type="text" class="form-control" name="vodio_bg5" value="<?php  echo $video['vodio_bg5'];?>">
				<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } ?>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('backpicurl',$reply['backpicurl']);?>
				<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">主颜色</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_color('backcolor',$reply['backcolor']);?>
				<div class="help-block">用来控制大屏幕按钮和中奖列表上方的色调，不设置使用默认的,对普通抽奖模式和3D抽奖都有效</div>
			</div>
		</div>
		  <!--<div class="form-group" style="display: none">-->
			  <!--<label class="col-xs-12 col-sm-3 col-md-2 control-label">抽奖中奖通知模版ID</label>-->
			  <!--<div class="col-sm-9 col-xs-12">-->
				  <!--<input type="text" id="k_templateid" class="form-control" placeholder="" name="k_templateid"  value="<?php  echo $reply['k_templateid'];?>">-->
				  <!--<div class="help-block"><b style="color: #FC110D">中奖后通过模版ID下发到微信用户</b>！</div>-->
			  <!--</div>-->
		  <!--</div>-->



      </div>
    </div>
  </div>
 <!-- 抽奖活动设置 -->
  </div>
<!-- 抽奖活动设置 -->
<!-- 抢红包设置 -->
  <div role="tabpanel" class="tab-pane" id="settings4">
	<!-- 抢红包设置 -->
  <div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse7" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading7">
      <div class="panel-body">
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>特别说明</label>
            <div class="col-sm-9 col-xs-12">
                <p style="width:100%;padding:15px;border:1px #eee dashed;line-height: 28px;background:#fdf8e4;color:#b97b32">
                    请务必记得在左侧菜单《抢红包奖品》里面添加奖品，并选择适应活动规则，否则抽奖的时候将无奖品显示。
                </p>
            </div>
        </div>
        <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">开启状态</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="isqhb" value="0" disabled <?php  if($reply['isqhb']==0) { ?> checked="checked"<?php  } ?>/>开启咻一咻红包
				</label>
				<label class="radio-inline">
					<input type="radio" name="isqhb" value="2" disabled <?php  if($reply['isqhb']==2) { ?> checked="checked"<?php  } ?>/>开启摇一摇红包
				</label>
				<label class="radio-inline">
					<input type="radio" name="isqhb" value="1" disabled <?php  if($reply['isqhb']==1) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<input type="hidden" name="isqhb" value="<?php  echo $reply['isqhb'];?>" />
				<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕抢红包效果</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="dpmhbtype" value="0" disabled <?php  if($reply['dpmhbtype']==0) { ?> checked="checked"<?php  } ?>/>红包弹窗
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="dpmhbtype" value="1" disabled <?php  if($reply['dpmhbtype']==1) { ?> checked="checked"<?php  } ?>/>红包雨
				  </label>
				  <input type="hidden" name="dpmhbtype" value="<?php  echo $reply['dpmhbtype'];?>" />
				  <div class="help-block">默认。修改状态请在【活动开关设置】里面修改</div>
			  </div>
		  </div>
          <?php  if($qhb==1) { ?>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 红包发放开始时间</label>
			  <div class="col-sm-9 col-xs-12">
				  <?php  echo tpl_form_field_date('qhb_starttime', $reply['qhb_starttime'], true)?>
			  </div>
		  </div>
          <?php  } ?>
		   <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包总额</label>
			<div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<input type="number" class="form-control" name="most_money" value="<?php  echo $reply['most_money'];?>"/>
					<span class="input-group-addon">元</span>
				</div>
				<div class="help-block"> 0 为不限制，默认为1元，请根据需要设置<span style="color: #FF0000">抽奖的总金额一般会比设置的限制总金额大一点点(整个活动的总额)</span></div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">每轮红包总额</label>
			  <div class="col-sm-9 col-xs-6">
				  <div class="input-group">
					  <input type="number" class="form-control" name="total_num" value="<?php  echo $reply['total_num'];?>"/>
					  <span class="input-group-addon">元</span>
				  </div>
				  <div class="help-block"> 0 为不限制，默认为1元，请根据需要设置<span style="color: #FF0000">抽奖的总金额一般会比设置的限制总金额大一点点(活动中每轮的总额，重置一次为一轮)</span></div>
			  </div>
		  </div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">红包发送失败通知管理openid</label>
			  <div class="col-sm-9 col-xs-6">
					  <input type="text" class="form-control" name="hb_lose_openid" value="<?php  echo $reply['hb_lose_openid'];?>"/>
				  <div class="help-block"> <span style="color: #FF0000">当红包发送失败时通知管理员</span></div>
			  </div>
		  </div>
		<div class="form-group">
			<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">背景设置</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('adpic', $reply['adpic']);?>
			<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
			<div class="col-sm-9 col-xs-12">
			<?php  if(IMS_VERSION >= 0.8) { ?> 
				<?php  echo tpl_form_field_video('vodio_bg6', $video['vodio_bg6']);?>
				<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } else { ?>
				<input type="text" class="form-control" name="vodio_bg6" value="<?php  echo $video['vodio_bg6'];?>">
				<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } ?>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">倒计时音乐<br>mp3格式</label>
			  <div class="col-sm-9 col-xs-12">
				  <?php  echo tpl_form_field_audio('ten_time',$reply['ten_time']);?>
				  <div class="help-block">10秒倒计时，不上传则不使用背景音乐</div>
			  </div>
		  </div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('adpicurl',$reply['adpicurl']);?>
				<div class="help-block">抢红包现场活动背景音乐，不上传则不使用背景音乐</div>
			</div>
		</div>

		<div class="form-group">
			<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">微信端背景设置</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('mobqhbbg', $reply['mobqhbbg']);?>
			<div class="help-block">抢红包微信端背景，不上传使用默认背景，尺寸为：750*1136</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动时间</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" name="start_hour" class="form-control" value="<?php  echo $reply['start_hour'];?>">
				<div class="help-block">抢红包的活动时间，默认500秒,单位为秒，从倒计时结束开始算起。</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">倒计时</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" name="end_hour" class="form-control" value="<?php  echo $reply['end_hour'];?>">
				<div class="help-block">倒计时的周期，默认10秒，请不要超过10秒为宜，单位秒</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">每人最多中奖次数</label>
			<div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<input type="text" class="form-control" name="award_times" readonly value="<?php  echo $reply['award_times'];?>" />
					<span class="input-group-addon">次</span>
				</div>
				<div class="help-block">不管重置了多少次活动，单个用户最多共享几个奖项，0为不限制，推荐设置为1次!修改次数请在【活动开关设置】里面修改</div>
			</div>
			<input type="hidden" name="award_times" value="<?php  echo $reply['award_times'];?>" />
		</div>

		 <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">每人每轮中奖次数</label>
			<div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<input type="text" class="form-control" name="most_num_times" readonly value="<?php  echo $reply['most_num_times'];?>"/>
					<span class="input-group-addon">次</span>
				</div>
				<div class="help-block"> 0 为不限制 达到中奖次数就不能中奖了!<span style="color: #FF0000">重置抽奖活动的时候,重置一次计算一次！修改次数请在【活动开关设置】里面修改</span></div>
			</div>
			 <input type="hidden" name="most_num_times" value="<?php  echo $reply['most_num_times'];?>" />
		</div>
		

      </div>
    </div>
  </div>
<!-- 抢红包设置 -->
  </div>
<!-- 抢红包设置 -->
<!-- 嘉宾设置 -->
  <div role="tabpanel" class="tab-pane" id="settings5">
	<!-- 嘉宾设置 -->
<div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse8" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading8">
      <div class="panel-body">
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>&#x963F;&#x83AB;&#x4E4B;&#x5BB6;&#x7279;&#x522B;&#x8BF4;&#x660E;</label>
            <div class="col-sm-9 col-xs-12">
                <p style="width:100%;padding:15px;border:1px #eee dashed;line-height: 28px;background:#fdf8e4;color:#b97b32">
                    请务必记得在左侧菜单《嘉宾管理》里面添加嘉宾，并选择适应活动规则，否则嘉宾大屏幕将无嘉宾显示。
                </p>
            </div>
        </div>
        <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="isjiabin" value="0" disabled <?php  if($reply['isjiabin']==0) { ?> checked="checked"<?php  } ?>/>开启
				</label>
				<label class="radio-inline">
					<input type="radio" name="isjiabin" value="1" disabled <?php  if($reply['isjiabin']==1) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<input type="hidden" name="isjiabin" value="<?php  echo $reply['isjiabin'];?>" />
				<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否手机端显示嘉宾</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="is_showjiabin" value="0" <?php  if($reply['is_showjiabin']==0) { ?> checked="checked"<?php  } ?>/>不显示
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="is_showjiabin" value="1" <?php  if($reply['is_showjiabin']==1) { ?> checked="checked"<?php  } ?>/>显示
				  </label>
				  <div class="help-block">默认不显示。</div>
			  </div>
		  </div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部标题</label>
            <div class="col-sm-9 col-xs-12">
               	<input type="text" name="jiabintitle" class="form-control" value="<?php  echo $reply['jiabintitle'];?>">
				<div class="help-block">显示在嘉宾墙顶部标题，不填使用默认的</div>
            </div>
		</div>
		<div class="form-group">
			<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">背景设置</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('mybb_url', $reply['mybb_url']);?>
			<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
			<div class="col-sm-9 col-xs-12">
			<?php  if(IMS_VERSION >= 0.8) { ?> 
				<?php  echo tpl_form_field_video('vodio_bg7', $video['vodio_bg7']);?>
				<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } else { ?>
				<input type="text" class="form-control" name="vodio_bg7" value="<?php  echo $video['vodio_bg7'];?>">
				<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } ?>
			</div>
		</div>
		  <div class="form-group">
			  <label for="jbtop_url" class="control-label col-xs-12 col-sm-3 col-md-2">微信端顶部banner</label>
			  <div class="col-sm-9 col-xs-12">
				  <?php  echo tpl_form_field_image('jbtop_url', $reply['jbtop_url']);?>
				  <div class="help-block">微信端顶部banner,不上传使用默认背景，尺寸为：640*340</div>
			  </div>
		  </div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('zhuanfaimg',$reply['zhuanfaimg']);?>
				<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
			</div>
		</div>


      </div>
    </div>
</div>
<!-- 嘉宾设置 -->
  </div>
<!-- 嘉宾设置 -->
<!-- 闭幕墙设置 -->
  <div role="tabpanel" class="tab-pane" id="settings6">
	<!-- 闭幕墙设置 -->
<div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse9" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading9">
      <div class="panel-body">
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="share_type" value="0" disabled <?php  if($reply['share_type']==0) { ?> checked="checked"<?php  } ?>/>开启
				</label>
				<label class="radio-inline">
					<input type="radio" name="share_type" value="1" disabled <?php  if($reply['share_type']==1) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<input type="hidden" name="share_type" value="<?php  echo $reply['share_type'];?>" />
				<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">闭幕墙图</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_image('gl_openid',$reply['gl_openid']);?>
				<div class="help-block">闭幕墙显示的图片，尺寸984*636</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">闭幕墙背景</label>
			<div class="col-sm-9 col-xs-12">

				<?php  echo tpl_form_field_image('bimubg',$reply['bimubg']);?>
				<div class="help-block">闭幕墙背景，尺寸1440*900</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
			<div class="col-sm-9 col-xs-12">
			<?php  if(IMS_VERSION >= 0.8) { ?> 
				<?php  echo tpl_form_field_video('vodio_bg8', $video['vodio_bg8']);?>
				<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } else { ?>
				<input type="text" class="form-control" name="vodio_bg8" value="<?php  echo $video['vodio_bg8'];?>">
				<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } ?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('noip_url',$reply['noip_url']);?>
				<div class="help-block">闭幕墙背景音乐，不上传则不使用背景音乐</div>
			</div>
		</div>


      </div>
    </div>
</div>
<!-- 闭幕墙设置 -->
  </div>
<!-- 闭幕墙设置 -->
<!-- 微信端参数设置 -->
  <div role="tabpanel" class="tab-pane" id="settings7">
	<!-- 微信端参数设置 -->
<div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse10" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading10">
      <div class="panel-body">
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信端活动主题</label>
            <div class="col-sm-9 col-xs-12">
               	<input type="text" name="mobtitle" class="form-control" value="<?php  echo $reply['mobtitle'];?>">
				<div class="help-block">显示在微信端页面标题</div>
            </div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景图片</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_image('mobpicurl',$reply['mobpicurl']);?>
				<div class="help-block">微信端的背景图，尺寸为750*1334</div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">活动规则头部图片</label>
			  <div class="col-sm-9 col-xs-12">
				  <?php  echo tpl_form_field_image('headpic',$reply['headpic']);?>
				  <div class="help-block">活动规则头部图片，尺寸为640*220</div>
			  </div>
		  </div>
		  <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机端底部导航颜色</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_color('bottomcolor',$reply['bottomcolor']);?>
				<div class="help-block">用来控底部导航的背景色调，不设置使用默认的</div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">手机端底部导航字体颜色</label>
			  <div class="col-sm-9 col-xs-12">
				  <?php  echo tpl_form_field_color('bottomwordcolor',$reply['bottomwordcolor']);?>
				  <div class="help-block">用来控底部导航字体色调，不设置使用默认的</div>
			  </div>
		  </div>
		  <div class="form-group" >
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">互动页背景图</label>
			  <div class="col-sm-9 col-xs-12">
				  <?php  echo tpl_form_field_image('hd_bgimg',$photo['hd_bgimg']);?>
				  <div class="help-block">互动页面的背景图片，尺寸为750*1280，不上传就不显示</div>
			  </div>
		  </div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">互动页背景颜色</label>
			  <div class="col-sm-9 col-xs-12">
				  <?php  echo tpl_form_field_color('hd_bgcolor',$photo['hd_bgcolor']);?>
				  <div class="help-block">用来控互动页背景的背景色调，不设置使用默认的(白色)</div>
			  </div>
		  </div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">互动页背景颜色透明度</label>
			  <div class="col-sm-9 col-xs-12">
				  <input type="text" id="hb_bgcolor_tm" class="form-control" placeholder="" name="hb_bgcolor_tm" value="<?php  echo $photo['hb_bgcolor_tm'];?>">
				  <div class="help-block">用来控互动页背景透明度，，0-1之间，1，表示不透明。不设置使用默认1</div>
			  </div>
		  </div>
		  <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">签到填写资料</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="ziliao" value="0" <?php  if($reply['ziliao']==0) { ?> checked="checked"<?php  } ?>/>只填写姓名
				</label>
				<label class="radio-inline">
					<input type="radio" name="ziliao" value="1" <?php  if($reply['ziliao']==1) { ?> checked="checked"<?php  } ?>/>不需要填写
				</label>
				<label class="radio-inline">
					<input type="radio" name="ziliao" value="2" <?php  if($reply['ziliao']==2) { ?> checked="checked"<?php  } ?>/>填写姓名和手机号
				</label>
				<label class="radio-inline">
					<input type="radio" name="ziliao" value="3" <?php  if($reply['ziliao']==3) { ?> checked="checked"<?php  } ?>/>填写姓名和手机号和公司名/职位
				</label>
				<label class="radio-inline">
					<input type="radio" name="ziliao" value="4" <?php  if($reply['ziliao']==4) { ?> checked="checked"<?php  } ?>/>不用签到
				</label>
				<div class="help-block">控制微信端签到资料填写时，是否需要填写的内容！不用签到，默认跳转到消息<span style="color: red">报名时不能选择不用签到！！！</span></div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启拍照上传图片功能</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="IsFansImg" onclick="$('#FansImgTitle').hide();" value="0" <?php  if($reply['isfansimg']==0) { ?> checked="checked"<?php  } ?>/>关闭
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="IsFansImg" onclick="$('#FansImgTitle').show();" value="1" <?php  if($reply['isfansimg']==1) { ?> checked="checked"<?php  } ?>/>开启
				  </label>
				  <input style="<?php  if($reply['isfansimg']==0) { ?>display: none;<?php  } ?>width:250px;" type="text" class="form-control" id="FansImgTitle" placeholder="请输入功能标题" name="FansImgTitle"  value="<?php  echo $reply['fansimgtitle'];?>">
				  <div class="help-block">默认关闭，开启拍照上传图片功能，粉丝签到可选择是否上传图片(强制)，该功能可以适应在需要上传身份证明，或是其他需要粉丝提供图片的场景上。开启后，可以自定义上传页面的标题(改图片目前只在3D签到，和抽奖中使用)</div>
			  </div>
		  </div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">拍照页背景图</label>
			  <div class="col-sm-9 col-xs-12">
				  <?php  echo tpl_form_field_image('photo_bg',$reply['photo_bg']);?>
				  <div class="help-block">拍照页背景图，尺寸为750*1334</div>
			  </div>
		  </div>
		  <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否手机号码匹配</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="mobile_qdstyle" value="0" <?php  if($reply['mobile_qdstyle']==0) { ?> checked="checked"<?php  } ?>/>否
				</label>
				<label class="radio-inline">
					<input type="radio" name="mobile_qdstyle" value="1" <?php  if($reply['mobile_qdstyle']==1) { ?> checked="checked"<?php  } ?>/>是
				</label>
				<div class="help-block">控制微信端签到资料填写时，如果有填写手机号，是否需要进行匹配！(报名模式不适用)<span style="color: red">匹配的手机号在参数设置内上传</span></div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">签到后跳转位置</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="registimg" value="0" <?php  if($reply['registimg']==0||$reply['registimg']=='') { ?> checked="checked"<?php  } ?>/>默认
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="registimg" value="1" <?php  if($reply['registimg']==1) { ?> checked="checked"<?php  } ?>/>消息
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="registimg" value="2" <?php  if($reply['registimg']==2) { ?> checked="checked"<?php  } ?>/>抢红包
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="registimg" value="3" <?php  if($reply['registimg']==3) { ?> checked="checked"<?php  } ?>/>投票
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="registimg" value="4" <?php  if($reply['registimg']==4) { ?> checked="checked"<?php  } ?>/>嘉宾
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="registimg" value="5" <?php  if($reply['registimg']==5) { ?> checked="checked"<?php  } ?>/>摇一摇
				  </label>
				  <label class="radio-inline">
					  <input type="radio" name="registimg" value="6" <?php  if($reply['registimg']==6) { ?> checked="checked"<?php  } ?>/>退出页面
				  </label>
				  <div class="help-block">控制微信端签到完成时，跳转到那个页面,默认流程！(退出页面：签到后，用户点击确定，即退出。)</div>
			  </div>
		  </div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否强制关注</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" class="form-control" name="share_url" value="<?php  echo $reply['share_url'];?>">
				<div class="help-block">引导关注页的链接! 链接为空既不需要关注，推荐用微信平台的素材库，转成短地址。<a target="_blank" href="http://www.dwz.cn/">短网址转换</a></div>
			</div>
		</div>


		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">提示框显示模式</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="show_type" value="0" <?php  if($reply['show_type']==0) { ?> checked="checked"<?php  } ?>/>普通
				</label>
				<label class="radio-inline">
					<input type="radio" name="show_type" value="1" <?php  if($reply['show_type']==1) { ?> checked="checked"<?php  } ?>/>广告化
				</label>
				<div class="help-block">选择普通，提示框显示的是奖品图片，选择广告化，那提示框显示的是广告图片。显示在抢红包的结果上。</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 活动流程</label>
			<div class="col-sm-9 col-xs-12">
				<textarea style="height:90px;" name="liucheng" class="form-control" cols="90"><?php  echo $reply['liucheng'];?></textarea>
				<div class="help-block">在微信端粉丝入口首页显示，每一行用"|"隔开。</div>
			</div>
		</div>

      	
		
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动规则</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_ueditor('rules', $reply['rules']);?>
				<div class="help-block">在微信端显示活动规则，请把规则写清楚，方便参与者直接手机端查看具体规则说明</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否显示奖品</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="is_show_prize" value="0" <?php  if($reply['is_show_prize']==0) { ?> checked="checked"<?php  } ?>/>显示
				</label>
				<label class="radio-inline">
					<input type="radio" name="is_show_prize" value="1" <?php  if($reply['is_show_prize']==1) { ?> checked="checked"<?php  } ?>/>不显示
				</label>
				<div class="help-block">控制在微信页面是否显示奖品图片！</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否显示奖品数量</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="is_show_prize_num" value="0" <?php  if($reply['is_show_prize_num']==0) { ?> checked="checked"<?php  } ?>/>显示
				</label>
				<label class="radio-inline">
					<input type="radio" name="is_show_prize_num" value="1" <?php  if($reply['is_show_prize_num']==1) { ?> checked="checked"<?php  } ?>/>不显示
				</label>
				<div class="help-block">控制在规则页面是否显示奖品数量！</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现最低额度</label>
			<div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<input type="number" id="share_acid" class="form-control" placeholder="" name="share_acid" value="<?php  echo $reply['share_acid']/100?>">
					<span class="input-group-addon">元</span>
				</div>
				<div class="help-block">用户红包提现最低额度<span style="color: red">必须大于1元小于200元</span> 。</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现超额强制审核</label>
			<div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<input type="number" id="tx_most" class="form-control" placeholder="" name="tx_most" value="<?php  echo $reply['tx_most']/100?>">
					<span class="input-group-addon">元</span>
				</div>
				<div class="help-block">当用户红包提现超过这个额度的时候强制后台审核，不管开启了什么提现条件。<span style="color: red">最小值不得小于5元</span> 。</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现申请后下发条件</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="xf_condition" value="0" <?php  if($reply['xf_condition']==0) { ?> checked="checked"<?php  } ?>/>后台审核
				</label>
				<label class="radio-inline">
					<input type="radio" name="xf_condition" onclick="alert('直接下发有被刷的风险，请谨慎')" value="1" <?php  if($reply['xf_condition']==1) { ?> checked="checked"<?php  } ?>/>直接下发
				</label>
				<div class="help-block">控制前台用户红包提现申请后红包下发的条件！</div>
			</div>
		</div>
		<div class="form-group" style="display: block;">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">兑奖密码设置</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" id="password" class="form-control" placeholder="请输入兑奖密码" name="password" value="<?php  echo $reply['password'];?>">
				<div class="help-block">实物奖品密码核销：设置数字密码，0表示不用密码</div>
			</div>
		</div>
		  <div class="form-group" style="display: block;">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">红包发送失败提示语：</label>
			  <div class="col-sm-9 col-xs-12">
				  <input type="text" id="lose_hb" class="form-control" placeholder="请输入" name="lose_hb" value="<?php  echo $reply['lose_hb'];?>">
				  <div class="help-block">为空使用默认</div>
			  </div>
		  </div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享模式</label>
			  <div class="col-sm-9">
				  <label class="radio-inline">
					  <input type="radio" name="is_b_share" value="0" <?php  if($reply['is_b_share']==0) { ?> checked="checked"<?php  } ?>/>默认模式
				  </label>
				  <!--<label class="radio-inline">-->
					  <!--<input type="radio" name="is_b_share" value="1" <?php  if($reply['is_b_share']==1) { ?> checked="checked"<?php  } ?>/>强制分享朋友圈-->
				  <!--</label>-->
				  <label class="radio-inline">
					  <input type="radio" name="is_b_share" value="2" <?php  if($reply['is_b_share']==2) { ?> checked="checked"<?php  } ?>/>禁止分享功能
				  </label>
				  <div class="help-block">
					  <span>默认模式：正常使用分享功能，不强制分享也不禁止。</span><br>
					  <!--<span>强制分享朋友圈：强制粉丝必须分享一次活动页面到朋友圈才能参与抽奖。</span><br>-->
					  <span>禁止分享：粉丝将无法使用分享按钮的功能。</span>
				  </div>
			  </div>
		  </div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">分享标题</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" class="form-control" name="share_title" value="<?php  echo $reply['share_title'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">分享描述</label>
			<div class="col-sm-9 col-xs-12">
				<textarea style="height:60px;" name="share_desc" class="form-control" cols="60"><?php  echo $reply['share_desc'];?></textarea>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">转发图</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_image('share_imgurl',$reply['share_imgurl']);?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">版权信息</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" id="copyright" class="form-control" placeholder="" name="copyright" value="<?php  echo $reply['copyright'];?>">
				<div class="help-block">版权信息，如果不填写，默认为公众号名称！</div>
			</div>
		</div>
		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">远程地址(联系开发者了解详情)</label>
			  <div class="col-sm-9 col-xs-12">
				  <input type="text" id="links" class="form-control" placeholder="" name="links" disabled="disabled" value="<?php  echo $_W['siteroot'];?>addons/hm_newdpm/sign/<?php  echo $_W['uniacid'];?>/<?php  echo $rid;?>/">
				  <div class="help-block"><b style="color: #FC110D">远程服务器地址，使用桌面软件专用</b></div>
			  </div>
		  </div>

      </div>
    </div>
</div>
<!-- 微信端参数设置 -->
  </div>
<!-- 微信端参数设置 -->
<!-- 黑名单设置 -->
  <div role="tabpanel" class="tab-pane" id="settings8">
	<!-- 黑名单设置 -->
<div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse11" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading11">
        <div class="panel-body">
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">开关设置</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="isallowip" value="0" <?php  if($reply['isallowip']==0) { ?> checked="checked"<?php  } ?>"/>关闭LBS限制
				</label>
				<label class="radio-inline">
					<input type="radio" name="isallowip" value="1" <?php  if($reply['isallowip']==1) { ?> checked="checked"<?php  } ?>"/>启用LBS限制
				</label>

			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动地区</label>
			<div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<textarea style="height:60px;width: 800px" id="allowip" name="allowip" class="form-control" cols="60"><?php  echo $allowip;?></textarea>
				</div>
				<div class="help-block" id="isallowlbs">您可以通过<span style="color: #ff3807" id="mapxz">【点击选择活动位置】</span>，也可以直接输入经纬度和地址，中间用“|”隔开，<span style="color: #ff3807">格式：纬度|经度|地址</span>，例如：116.34176|39.863358|北京市丰台区东管头街<span style="color: #ff3807">,由于部分安卓手机通过GPS获取位置速度较慢，会导致第一次进入页面加载比较慢</span></div>
			</div>
		</div>

		<div class="form-group" id="showlbs">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动范围</label>
			<div class="col-sm-5 col-xs-12">
				<div class="input-group">
					<input name="allowip2" type="text" class="form-control" value="<?php  echo $allowip2;?>"/>
					<span class="input-group-addon" style="color: #333;">米</span>
				</div>
				<div class="help-block">通过微信LBS定位，室内活动误差比较大，范围请设成500米以上，推荐1000米以上！<span style="color: #ff3807">认证的服务号可以在微信公众号后台》》最下面的“接口权限”》》获取用户地理位置，开启这个功能，可以加快获取用户GPS位置的速度。</span></div>
			</div>
		</div>

    	</div>
    </div>
</div>
<!-- 黑名单设置 -->
  </div>
<!-- 黑名单设置 -->
	<!--投票设置-->
	<div role="tabpanel" class="tab-pane" id="settings9">
		<!-- 投票设置 -->
		<div class="panel panel-primary" style="border-radius: 0px">
			<div id="collapse12" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading12">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>特别说明</label>
						<div class="col-sm-9 col-xs-12">
							<p style="width:100%;padding:15px;border:1px #eee dashed;line-height: 28px;background:#fdf8e4;color:#b97b32">
								请务必记得在左侧菜单《投票管理》里面添加投票，并选择适应活动规则，否则投票大屏幕将无投票显示。
							</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="istoupiao" value="0" disabled <?php  if($reply['istoupiao']==0) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<label class="radio-inline">
								<input type="radio" name="istoupiao" value="1" disabled <?php  if($reply['istoupiao']==1) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<input type="hidden" name="istoupiao" value="<?php  echo $reply['istoupiao'];?>" />
							<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-12 col-sm-3 col-md-2"><span style='color:red'>*</span> 投票时间</label>
						<div class="col-sm-9">
							<?php  echo tpl_form_field_daterange('times', array('start'=>date('Y-m-d H:i',$reply['tp_starttime']),'end'=>date('Y-m-d H:i',$reply['tp_endtime'])), true)?>
						</div>
					</div>
					<div class="form-group" style="display: block;">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">每人可投票次数</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="tp_times" class="form-control" placeholder="请输入投票次数" name="tp_times" value="<?php  echo $reply['tp_times'];?>">
							<div class="help-block">每个人可以投票的次数，0表示不限制，默认1</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部标题</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" name="toupiaotitle" class="form-control" value="<?php  echo $reply['toupiaotitle'];?>">
							<div class="help-block">显示在投票墙顶部标题.</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">背景设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('tpbg_url', $reply['tpbg_url']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
						<div class="col-sm-9 col-xs-12">
						<?php  if(IMS_VERSION >= 0.8) { ?> 
							<?php  echo tpl_form_field_video('vodio_bg9', $video['vodio_bg9']);?>
							<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } else { ?>
							<input type="text" class="form-control" name="vodio_bg9" value="<?php  echo $video['vodio_bg9'];?>">
							<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } ?>

						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">微信端顶部banner</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('tptop_url', $reply['tptop_url']);?>
							<div class="help-block">微信端顶部banner,不上传使用默认背景，尺寸为：640*340</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_audio('tpbg_voice',$reply['tpbg_voice']);?>
							<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
						</div>
					</div>


				</div>
			</div>
		</div>
		<!-- 投票设置 -->
	</div>
	<!--投票设置-->

	<!--报名设置-->
	<div role="tabpanel" class="tab-pane" id="settings10">
		<!-- 报名设置 -->
		<div class="panel panel-primary" style="border-radius: 0px">
			<div id="collapse13" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading12">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">报名后现场签到二维码图片</label>
						<div class="col-sm-9 col-xs-12">
							<img src="<?php  echo $imgUrl2;?>">
							<div class="help-block"><b style="color: #FC110D">粉丝扫描二维码就可以马上进入手机端报名签到验证页面。<br>第一次建立规则，必须保存后再使用这个二维码图片</b>，需要拥有高级接口权限的！</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">报名链接</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="link" class="form-control" placeholder="" name="link" disabled="disabled" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=hm_newdpm&do=index&id=<?php  echo $rid;?>">
							<div class="help-block"><b style="color: #FC110D">第一次建立规则，必须保存后再调用这个链接</b>，需要拥有高级接口权限的！</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="isbaoming" value="0" disabled <?php  if($reply['isbaoming']==0) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="isbaoming" value="1" disabled <?php  if($reply['isbaoming']==1) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<input type="hidden" name="isbaoming" value="<?php  echo $reply['isbaoming'];?>" />
							<div class="help-block">默认关闭。(报名成功后，要到报名时间结束才能签到)修改状态请在【活动开关设置】里面修改</div>
						</div>
					</div>
					<div class="form-group" style="display: block">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启支付报名</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="isbaoming_pay" value="0" <?php  if($reply['isbaoming_pay']==0) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="isbaoming_pay" value="1" <?php  if($reply['isbaoming_pay']==1) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<div class="help-block">默认关闭。<span style="color: red">付费报名只支持认证服务号！！</span></div>
						</div>
					</div>
					<div class="form-group" style="display: block;">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">报名费用</label>
						<div class="col-sm-9 col-xs-6">
							<div class="input-group">
							<input type="text" id="isbaoming_paymoney" class="form-control" placeholder="请输入报名费用" name="isbaoming_paymoney" value="<?php  echo $reply['isbaoming_paymoney']/100?>">
								<span class="input-group-addon">元</span>
							</div>
							<div class="help-block">开启支付报名后，这里的设置才生效，并且必须大于0,等于0表示不开启</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">支付成功后跳转链接</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="ad_link" class="form-control" placeholder="" name="ad_link"  value="<?php  echo $reply['ad_link'];?>">
							<div class="help-block"><b style="color: #FC110D">付费报名支付成功，跳转的链接:http开头</b>，需要拥有高级接口权限的！</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-12 col-sm-3 col-md-2"><span style='color:red'>*</span> 可报名时间</label>
						<div class="col-sm-9">
							<?php  echo tpl_form_field_daterange('bm_times', array('start'=>date('Y-m-d H:i',$reply['bm_starttime']),'end'=>date('Y-m-d H:i',$reply['bm_endtime'])), true)?>
						</div>
						<div class="help-block">结束时间就是可以签到时间。</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">报名后签到时间</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="bm_isqd" value="0"  <?php  if($reply['bm_isqd']==0) { ?> checked="checked"<?php  } ?>/>报名结束后才可签到
							</label>
							<label class="radio-inline">
								<input type="radio" name="bm_isqd" value="1"  <?php  if($reply['bm_isqd']==1) { ?> checked="checked"<?php  } ?>/>报名后即可签到
							</label>
							<div class="help-block">默认报名结束后才可签到。</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">报名人数限制</label>
						<div class="col-sm-9 col-xs-12">
							<input type="number" name="bm_pnumber" class="form-control" value="<?php  echo $reply['bm_pnumber'];?>">
							<div class="help-block">0表示不限制，默认不限制</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 报名设置 -->
	</div>
	<!--报名设置-->





	<!--摇一摇设置-->
	<div role="tabpanel" class="tab-pane" id="settings11">
		<!-- 摇一摇设置 -->
		<div class="panel panel-primary" style="border-radius: 0px">
			<div id="collapse13" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading12">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">启用状态</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="isyyy" value="0" disabled <?php  if($yyy['isyyy']==0) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<label class="radio-inline">
								<input type="radio" name="isyyy" value="1" disabled <?php  if($yyy['isyyy']==1) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<input type="hidden" name="isyyy" value="<?php  echo $yyy['isyyy'];?>" />
							<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改<span style="color: red">玩这个功能的系统最好必须都是liunx系统</span></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">摇一摇模式</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="yyystyle" value="0"  <?php  if($yyy['yyystyle']==0) { ?> checked="checked"<?php  } ?>/>旧版
							</label>
							<label class="radio-inline">
								<input type="radio" name="yyystyle" value="1"  <?php  if($yyy['yyystyle']==1) { ?> checked="checked"<?php  } ?>/>新版
							</label>
							<div class="help-block">默认旧版。新旧版本界面无多大区别，新版能支持更多人参与，新版要开通相应的接口，需要找开发者了解。QQ：3296170993</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动启动后是否允许加入</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="yyy_status" value="0" <?php  if($yyy['yyy_status']==0) { ?> checked="checked"<?php  } ?>/>允许
							</label>
							<label class="radio-inline">
								<input type="radio" name="yyy_status" value="1" <?php  if($yyy['yyy_status']==1) { ?> checked="checked"<?php  } ?>/>不允许
							</label>
							<div class="help-block">默认允许。新版强制开启后不能进入。</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕背景设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('yyy_bg', $yyy['yyy_bg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">跑道上的logo图</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('yyy_pdbg', $yyy['yyy_pdbg']);?>
							<div class="help-block">不上传不使用，尺寸为：400*400</div>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">顶部banner</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('yyy_banner', $yyy['yyy_banner']);?>
							<div class="help-block">微信端顶部banner,不上传使用默认背景，尺寸为：1024*250</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_audio('yyy_music',$yyy['yyy_music']);?>
							<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">头像前面图标</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('yyy_maimg', $yyy['yyy_maimg']);?>
							<div class="help-block">大屏幕头像前面的图标，支持gif动画格式，尺寸为：40*40，相关素材图标<a target="_blank" href="../addons/hm_newdpm/img10/runing1.gif">圣诞老人</a></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">摇的最大次数</label>
						<div class="col-sm-9 col-xs-12">
							<input type="number" name="yyy_maxnum" class="form-control" value="<?php  echo $yyy['yyy_maxnum'];?>">
							<div class="help-block">谁最先摇到这个数就是第一名，后面名次依次往后推，建议设100以上</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">摇一摇人数限制</label>
						<div class="col-sm-9 col-xs-12">
							<div class="input-group">
							<input type="number" name="yyy_mannum" class="form-control" value="<?php  echo $yyy['yyy_mannum'];?>">
								<span class="input-group-addon" >人</span>
							</div>
							<div class="help-block">每次摇一摇的人数限制，必须大于10人</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">完成人数设置</label>
						<div class="col-sm-9 col-xs-12">
							<div class="input-group">
								<input type="number" name="yyy_resultnum" class="form-control" value="<?php  echo $yyy['yyy_resultnum'];?>">
								<span class="input-group-addon" >人</span>
							</div>
							<div class="help-block">每次多少人到达终点就结束，0和不填表示默认，只能1-10内的整数。新版强制一人完成就结束。</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">手机端背景设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('yyy_mbg', $yyy['yyy_mbg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：750*1336</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurls" class="control-label col-xs-12 col-sm-3 col-md-2">手机端摇一摇图</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('yyy_myyybg', $yyy['yyy_myyybg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：640*790</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurls" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕跑道背景</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('yyy_pdbg2', $yyy['yyy_pdbg2']);?>
							<div class="help-block">不上传使用背景颜色</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕跑道背景颜色</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_color('yyy_pdbgcolor',$yyy['yyy_pdbgcolor']);?>
							<div class="help-block">不设置使用默认颜色，有背景图时候，该颜色失效</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕跑道两侧的护栏</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="yyy_need" value="0" <?php  if($yyy['yyy_need']==0) { ?> checked="checked"<?php  } ?>/>都显示
							</label>
							<label class="radio-inline">
								<input type="radio" name="yyy_need" value="1" <?php  if($yyy['yyy_need']==1) { ?> checked="checked"<?php  } ?>/>显示上部
							</label>
							<label class="radio-inline">
								<input type="radio" name="yyy_need" value="2" <?php  if($yyy['yyy_need']==2) { ?> checked="checked"<?php  } ?>/>显示下部
							</label>
							<label class="radio-inline">
								<input type="radio" name="yyy_need" value="3" <?php  if($yyy['yyy_need']==3) { ?> checked="checked"<?php  } ?>/>都不显示
							</label>
							<div class="help-block">默认上下都显示。</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 摇一摇设置 -->
	</div>
	<!--摇一摇设置-->

	<!--许愿树设置-->
	<div role="tabpanel" class="tab-pane" id="settings12">
		<!-- 许愿树设置 -->
		<div class="panel panel-primary" style="border-radius: 0px">
			<div id="collapse14" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading12">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="isxys" value="0" disabled <?php  if($xys['isxys']==0) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<label class="radio-inline">
								<input type="radio" name="isxys" value="1" disabled <?php  if($xys['isxys']==1) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<input type="hidden" name="isxys" value="<?php  echo $xys['isxys'];?>" />
							<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕背景设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('xys_bg', $xys['xys_bg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
						<div class="col-sm-9 col-xs-12">
						<?php  if(IMS_VERSION >= 0.8) { ?> 
							<?php  echo tpl_form_field_video('vodio_bg10', $video['vodio_bg10']);?>
							<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } else { ?>
							<input type="text" class="form-control" name="vodio_bg10" value="<?php  echo $video['vodio_bg10'];?>">
							<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } ?>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕标题图片设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('xys_mbg', $xys['xys_mbg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：175*395(喜结良缘，这几个字)</div>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">标题</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="xys_banner" class="form-control" placeholder="" name="xys_banner" value="<?php  echo $xys['xys_banner'];?>">
							<div class="help-block">大屏幕许愿树显示标题</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">标题颜色</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_color('xys_backcolor',$xys['xys_backcolor']);?>
							<div class="help-block">用来控制<span style="color: red;font-weight: bold">大部分</span>大屏幕显示标题的色调，不设置使用默认的</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_audio('xys_music',$xys['xys_music']);?>
							<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- 许愿树设置 -->
	</div>
	<!--许愿树设置-->
	<!--霸屏设置-->
	<div role="tabpanel" class="tab-pane" id="settings13">
		<!-- 霸屏设置 -->
		<div class="panel panel-primary" style="border-radius: 0px">
			<div id="collapse15" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading12">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕霸屏链接</label>
						<div class="col-sm-9 col-xs-12">
							<a target="_blank" href="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=hm_newdpm&do=dpm_bp&rid=<?php  echo $rid;?>&bp=isbp" type="button" class="btn btn-danger ">查看霸屏</a>
							<span>新建活动规则时，请先保存规则后，再点击该链接，否则会出现报错信息。</span>
							<div class="help-block" style="color: #FF0000">为了显示最佳效果，请务必将投影仪的分辨率设成标准的1024*768</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启霸屏</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="isbp" value="0" disabled <?php  if($bp['isbp']==0) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="isbp" value="1" disabled <?php  if($bp['isbp']==1) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<input type="hidden" name="isbp" value="<?php  echo $bp['isbp'];?>" />
							<div class="help-block">默认关闭。修改状态请在【活动开关设置】里面修改<span style="color: red">必须要开通支付</span></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启打赏</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="isds" value="0" disabled <?php  if($bp['isds']==0) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="isds" value="1" disabled <?php  if($bp['isds']==1) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<input type="hidden" name="isds" value="<?php  echo $bp['isds'];?>" />
							<div class="help-block">默认关闭。<span style="color: red">必须要开通支付</span></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启小视频</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="isvo" value="0" disabled<?php  if($bp['isvo']==0) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="isvo" value="1" disabled <?php  if($bp['isvo']==1) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<input type="hidden" name="isvo" value="<?php  echo $bp['isvo'];?>" />
							<div class="help-block">默认关闭。<span style="color: red">必须要开通支付</span></div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启私聊交友</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_mf" value="0" disabled<?php  if($bp['is_mf']==0) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_mf" value="1" disabled <?php  if($bp['is_mf']==1) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<input type="hidden" name="is_mf" value="<?php  echo $bp['is_mf'];?>" />
							<div class="help-block">默认关闭。<span style="color: red">必须要开通支付</span></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启表白</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="isbb" value="0" disabled<?php  if($bp['isbb']==0) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="isbb" value="1" disabled <?php  if($bp['isbb']==1) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<input type="hidden" name="isbb" value="<?php  echo $bp['isbb'];?>" />
							<div class="help-block">默认关闭。<span style="color: red">必须要开通支付</span></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启好友送礼</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_gift" value="0" disabled <?php  if($bp['is_gift']==0) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_gift" value="1" disabled <?php  if($bp['is_gift']==1) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<input type="hidden" name="is_gift" value="<?php  echo $bp['is_gift'];?>" />
							<div class="help-block">默认关闭。<span style="color: red">必须要开通支付</span></div>
						</div>
					</div>
					<div class="form-group" style="display: block">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否允许发布图片</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_img" value="0" disabled <?php  if($bp['is_img']==0) { ?> checked="checked"<?php  } ?>/>都允许
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_img" value="1" disabled <?php  if($bp['is_img']==1) { ?> checked="checked"<?php  } ?>/>普通消息不允许
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_img" value="2" disabled <?php  if($bp['is_img']==2) { ?> checked="checked"<?php  } ?>/>霸屏不允许
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_img" value="3" disabled <?php  if($bp['is_img']==3) { ?> checked="checked"<?php  } ?>/>都不允许
							</label>
							<input type="hidden" name="is_img" value="<?php  echo $bp['is_img'];?>" />
							<div class="help-block">默认允许。</div>
						</div>
					</div>
					<div class="form-group" style="display: block">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">小图标位置</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="ishb" value="0" <?php  if($bp['ishb']==0) { ?> checked="checked"<?php  } ?>/>左边
							</label>
							<label class="radio-inline">
								<input type="radio" name="ishb" value="1" <?php  if($bp['ishb']==1) { ?> checked="checked"<?php  } ?>/>右边
							</label>
							<div class="help-block">默认左边。</div>
						</div>
					</div>
					<div class="form-group" style="display: block">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启手机顶部霸屏</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="ismbp" value="0" disabled <?php  if($bp['ismbp']==0) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="ismbp" value="1" disabled <?php  if($bp['ismbp']==1) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<input type="hidden" name="ismbp" value="<?php  echo $bp['ismbp'];?>" />
							<div class="help-block">默认关闭。<span style="color: red"></span></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏消息是否审核</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="bp_status" value="0" <?php  if($bp['status']==0) { ?> checked="checked"<?php  } ?>/>不审核
							</label>
							<label class="radio-inline">
								<input type="radio" name="bp_status" value="1" <?php  if($bp['status']==1) { ?> checked="checked"<?php  } ?>/>审核
							</label>
							<div class="help-block">默认不审核。</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">普通聊天界面支付方式</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="bp_pay" value="0" <?php  if($bp['bp_pay']==0) { ?> checked="checked"<?php  } ?>/>可选择支付方式
							</label>
							<label class="radio-inline">
								<input type="radio" name="bp_pay" value="1" <?php  if($bp['bp_pay']==1) { ?> checked="checked"<?php  } ?>/>直接输入密码方式
							</label>
							<div class="help-block">默认可选择支付方式。(只支持普通聊天界面)<br>
								可选择支付方式：支付的时候可以选择微信支付或者其他支付方式。<br>
								直接输入密码方式：点击确定的时候，跳转一个空白页面后直接弹出微信支付的输入密码框。
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">类似群聊界面支付方式</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="bp_pay2" value="0" <?php  if($bp['bp_pay2']==0) { ?> checked="checked"<?php  } ?>/>最新支付方式
							</label>
							<label class="radio-inline">
								<input type="radio" name="bp_pay2" value="1" <?php  if($bp['bp_pay2']==1) { ?> checked="checked"<?php  } ?>/>直接输入密码方式
							</label>
							<label class="radio-inline">
								<input type="radio" name="bp_pay2" value="2" <?php  if($bp['bp_pay2']==2) { ?> checked="checked"<?php  } ?>/>可选择支付方式
							</label>
							<div class="help-block">默认最新支付方式。(只支持类似群聊界面)<br>
								最新支付方式：直接在聊天弹出输入密码方式，次方式可能有些公众号不支持。<br>
								直接输入密码方式：点击确定的时候，跳转一个空白页面后直接弹出微信支付的输入密码框。
								可选择支付方式：支付的时候可以选择微信支付或者其他支付方式。
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕背景设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('bp_bg', $bp['bp_bg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl2" class="control-label col-xs-12 col-sm-3 col-md-2">霸屏页面轮播默认图</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('bp_carousel_bg', $bp['bp_carousel_bg']);?>
							<div class="help-block">不上传使用默认图，尺寸为：380*540</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
						<div class="col-sm-9 col-xs-12">
						<?php  if(IMS_VERSION >= 0.8) { ?> 
							<?php  echo tpl_form_field_video('vodio_bg11', $video['vodio_bg11']);?>
							<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } else { ?>
							<input type="text" class="form-control" name="vodio_bg11" value="<?php  echo $video['vodio_bg11'];?>">
							<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } ?>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">标题</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="bp_title" class="form-control" placeholder="" name="bp_title" value="<?php  echo $bp['bp_title'];?>">
							<div class="help-block">大屏幕显示标题</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_audio('bp_music',$bp['bp_music']);?>
							<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">霸屏音乐<br>mp3格式</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_audio('bp_voice',$bp['bp_voice']);?>
							<div class="help-block">霸屏时候的音乐，不上传则使用默认音乐</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕右边显示图片或者榜单</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="isbd" value="0" <?php  if($bp['isbd']==0) { ?> checked="checked"<?php  } ?>/>图片
							</label>
							<label class="radio-inline">
								<input type="radio" name="isbd" value="1" <?php  if($bp['isbd']==1) { ?> checked="checked"<?php  } ?>/>榜单
							</label>
							<div class="help-block">默认图片。<span style="color: red"></span></div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-12 col-sm-3 col-md-2"><span style='color:red'>*</span> 何时的榜单</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="bp_maxnum" value="0" onclick="$('#w_time').hide()" <?php  if($bp['bp_maxnum']==0) { ?> checked="checked"<?php  } ?>/>12小时内
							</label>
							<label class="radio-inline" >
								<input type="radio" name="bp_maxnum" value="1" onclick="$('#w_time').show()" <?php  if($bp['bp_maxnum']==1) { ?> checked="checked"<?php  } ?>/>自定义
							</label>
							<div class="help-block">默认12小时内。<span style="color: red"></span></div>
							<div class="col-sm-9" id ="w_time" <?php  if($bp['bp_maxnum']==1) { ?> style="display: block"<?php  } else { ?>style="display: none"<?php  } ?>>
								<?php  echo tpl_form_field_daterange('bd_times', array('start'=>date('Y-m-d H:i',$bp['bd_starttime']),'end'=>date('Y-m-d H:i',$bp['bd_endtime'])), true)?>
							</div>
						</div>

					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏幕是否显示底部跑马灯</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="ispmd" value="0" <?php  if($bp['ispmd']==0) { ?> checked="checked"<?php  } ?>/>显示
							</label>
							<label class="radio-inline">
								<input type="radio" name="ispmd" value="1" <?php  if($bp['ispmd']==1) { ?> checked="checked"<?php  } ?>/>不显示
							</label>
							<div class="help-block">默认显示。<span style="color: red"></span></div>
						</div>
					</div>
				<div class="form-group">
					<label for="bp_mesages_num" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕滚动消息数量</label>
					<div class="col-sm-9 col-xs-12">
						<input type="number" id="bp_mesages_num" class="form-control" placeholder="" name="bp_mesages_num" value="<?php  echo $bp['bp_mesages_num'];?>">
						<div class="help-block">大屏幕显示滚动的消息数量，0表示默认</div>
					</div>
				</div>
					<div class="form-group">
						<label for="bp_keyword" class="control-label col-xs-12 col-sm-3 col-md-2">消息禁止关键词</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="bp_keyword" class="form-control" placeholder="" name="bp_keyword" value="<?php  echo $bp['bp_keyword'];?>">
							<div class="help-block">手机聊天界面，禁止发布的文字。多个请用英文逗号隔开。这样：我爱你,我恨你</div>
						</div>
					</div>
					<div class="form-group">
						<label for="bp_listword" class="control-label col-xs-12 col-sm-3 col-md-2">消息屏蔽关键词</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="bp_listword" class="form-control" placeholder="" name="bp_listword" value="<?php  echo $bp['bp_listword'];?>">
							<div class="help-block">手机聊天界面，屏蔽文字，用*号代替。多个请用英文逗号隔开。这样：爱,恨,情,仇</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 许愿树设置 -->
	</div>
	<!--霸屏设置-->

	<!--对对碰设置-->
	<div role="tabpanel" class="tab-pane" id="settings14">
		<!-- 对对碰设置 -->
		<div class="panel panel-primary" style="border-radius: 0px">
			<div id="collapse16" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading12">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_pair" value="0" disabled <?php  if($xys['is_pair']==0) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_pair" value="1" disabled <?php  if($xys['is_pair']==1) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<input type="hidden" name="is_pair" value="<?php  echo $xys['is_pair'];?>" />
							<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">性别获取方式</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_sex" value="0" <?php  if($xys['is_sex']==0) { ?> checked="checked"<?php  } ?>/>微信获取
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_sex" value="1" <?php  if($xys['is_sex']==1) { ?> checked="checked"<?php  } ?>/>用户填写
							</label>
							<div class="help-block">默认微信获取。</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕背景设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('pair_bg', $xys['pair_bg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
						<div class="col-sm-9 col-xs-12">
						<?php  if(IMS_VERSION >= 0.8) { ?> 
							<?php  echo tpl_form_field_video('vodio_bg12', $video['vodio_bg12']);?>
							<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } else { ?>
							<input type="text" class="form-control" name="vodio_bg12" value="<?php  echo $video['vodio_bg12'];?>">
							<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } ?>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">标题</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="pair_banner" class="form-control" placeholder="" name="pair_banner" value="<?php  echo $xys['pair_banner'];?>">
							<div class="help-block">大屏幕显示标题</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">标题颜色</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_color('pair_backcolor',$xys['pair_backcolor']);?>
							<div class="help-block">用来控制大屏幕按钮和中奖列表上方的色调，不设置使用默认的</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_audio('pair_music',$xys['pair_music']);?>
							<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- 对对碰设置 -->
	</div>
	<!--对对碰设置-->

	<!--大转盘设置-->
	<div role="tabpanel" class="tab-pane" id="settings15">
		<!-- 对对碰设置 -->
		<div class="panel panel-primary" style="border-radius: 0px">
			<div id="collapse17" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading12">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>特别说明</label>
						<div class="col-sm-9 col-xs-12">
							<p style="width:100%;padding:15px;border:1px #eee dashed;line-height: 28px;background:#fdf8e4;color:#b97b32">
								1、请务必记得在左侧菜单《现场抽奖奖品》里面添加奖品，并选择适应活动规则和对应的活动，否则无法抽奖。<br />
								2、大转盘抽奖，每人只能中奖一次，可以内定，内定人员最先中奖。<br />
								3、如果某个奖品不想被抽中，请在左侧添加奖品的时候，把数量和概率都设置为0即可。
								4、开启后，必须先添加奖品，然后点击中间指尖选择人物，在使用空格键开始转动。
								5、抽奖确定后，要点击确定记录按钮，才会保存数据，和推送中奖消息，不点击，刷新页面后记录将清空。
							</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_turntable" value="0" disabled <?php  if($xys['is_turntable']==0) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_turntable" value="1" disabled <?php  if($xys['is_turntable']==1) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<input type="hidden" name="is_turntable" value="<?php  echo $xys['is_turntable'];?>" />
							<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否推送中奖消息</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_meg" value="0" <?php  if($xys['is_meg']==0) { ?> checked="checked"<?php  } ?>/>推送
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_meg" value="1" <?php  if($xys['is_meg']==1) { ?> checked="checked"<?php  } ?>/>不推送
							</label>
							<div class="help-block">默认推送。</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕背景设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('turntable_bg', $xys['turntable_bg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
						<div class="col-sm-9 col-xs-12">
						<?php  if(IMS_VERSION >= 0.8) { ?> 
							<?php  echo tpl_form_field_video('vodio_bg13', $video['vodio_bg13']);?>
							<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } else { ?>
							<input type="text" class="form-control" name="vodio_bg13" value="<?php  echo $video['vodio_bg13'];?>">
							<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } ?>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">标题</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="turntable_banner" class="form-control" placeholder="" name="turntable_banner" value="<?php  echo $xys['turntable_banner'];?>">
							<div class="help-block">大屏幕显示标题</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_audio('turntable_music',$xys['turntable_music']);?>
							<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- 对对碰设置 -->
	</div>
	<!--大转盘设置-->

	<!--幸运号码设置-->
	<div role="tabpanel" class="tab-pane" id="settings16">
		<!-- 对对碰设置 -->
		<div class="panel panel-primary" style="border-radius: 0px">
			<div id="collapse18" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading12">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>特别说明</label>
						<div class="col-sm-9 col-xs-12">
							<p style="width:100%;padding:15px;border:1px #eee dashed;line-height: 28px;background:#fdf8e4;color:#b97b32">
								1、幸运号码，每个号码只能中奖一次(刷新或者重置不算)，可以内定，内定号码最先中奖。<br />
								2、幸运手机号码，从签到粉丝入录的手机号码中不重复选取。刷新页面或者重置，将重新计算。支持内定。<br />
								3、幸运手机号码，从导入的自定义抽奖码中不重复选取。刷新页面或者重置，将重新计算。支持内定。<br />
								4、抽奖确定后，要点击确定记录按钮，才会保存数据，不点击，刷新页面后记录将清空。
							</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启幸运号码</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_xyh" value="0" disabled <?php  if($xyh['is_xyh']==0) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_xyh" value="1" disabled <?php  if($xyh['is_xyh']==1) { ?> checked="checked"<?php  } ?>/>关闭
							</label>

							<input type="hidden" name="is_xyh" value="<?php  echo $xyh['is_xyh'];?>" />
							<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启幸运手机号码</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_xysjh" value="0" disabled <?php  if($xyh['is_xysjh']==0) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_xysjh" value="1" disabled <?php  if($xyh['is_xysjh']==1) { ?> checked="checked"<?php  } ?>/>不开启
							</label>
							<input type="hidden" name="is_xysjh" value="<?php  echo $xyh['is_xysjh'];?>" />
							<div class="help-block">默认开启。</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启自定义抽奖</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_zdycj" value="0" disabled <?php  if($xyh['is_zdycj']==0) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_zdycj" value="1" disabled <?php  if($xyh['is_zdycj']==1) { ?> checked="checked"<?php  } ?>/>不开启
							</label>
							<input type="hidden" name="is_zdycj" value="<?php  echo $xyh['is_zdycj'];?>" />
							<div class="help-block">默认开启。</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">幸运号大屏幕背景设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('xyh_bg', $xyh['xyh_bg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl2" class="control-label col-xs-12 col-sm-3 col-md-2">幸运手机号大屏幕背景设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('xysjh_bg', $xyh['xysjh_bg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl2" class="control-label col-xs-12 col-sm-3 col-md-2">自定义抽奖大屏幕背景设置</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('zdycj_bg', $xyh['zdycj_bg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">幸运号视频背景</label>
						<div class="col-sm-9 col-xs-12">
						<?php  if(IMS_VERSION >= 0.8) { ?> 
							<?php  echo tpl_form_field_video('vodio_bg15', $video['vodio_bg15']);?>
							<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } else { ?>
							<input type="text" class="form-control" name="vodio_bg15" value="<?php  echo $video['vodio_bg15'];?>">
							<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">幸运手机号视频背景</label>
						<div class="col-sm-9 col-xs-12">
						<?php  if(IMS_VERSION >= 0.8) { ?> 
							<?php  echo tpl_form_field_video('vodio_bg16', $video['vodio_bg16']);?>
							<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } else { ?>
							<input type="text" class="form-control" name="vodio_bg16" value="<?php  echo $video['vodio_bg16'];?>">
							<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义抽奖视频背景</label>
						<div class="col-sm-9 col-xs-12">
						<?php  if(IMS_VERSION >= 0.8) { ?>
							<?php  echo tpl_form_field_video('vodio_bg17', $video['vodio_bg17']);?>
							<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } else { ?>
							<input type="text" class="form-control" name="vodio_bg17" value="<?php  echo $video['vodio_bg17'];?>">
							<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
						<?php  } ?>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">幸运号标题</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="xyh_banner" class="form-control" placeholder="" name="xyh_banner" value="<?php  echo $xyh['xyh_banner'];?>">
							<div class="help-block">大屏幕显示标题</div>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">幸运手机号标题</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="xysjh_banner" class="form-control" placeholder="" name="xysjh_banner" value="<?php  echo $xyh['xysjh_banner'];?>">
							<div class="help-block">大屏幕显示标题</div>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">自定义抽奖标题</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="ziycj_banner" class="form-control" placeholder="" name="ziycj_banner" value="<?php  echo $xyh['ziycj_banner'];?>">
							<div class="help-block">大屏幕显示标题</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">幸运号背景音乐<br>mp3格式</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_audio('xyh_music',$xyh['xyh_music']);?>
							<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">幸运手机号背景音乐<br>mp3格式</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_audio('xysjh_music',$xyh['xysjh_music']);?>
							<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义抽奖背景音乐<br>mp3格式</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_audio('zdycj_music',$xyh['zdycj_music']);?>
							<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">幸运号内定</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="xyh_lottery" class="form-control" placeholder="" name="xyh_lottery" value="<?php  echo $xyh['xyh_lottery'];?>">
							<div class="help-block">幸运号内定中奖，多个号用英文逗号隔开</div>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">幸运手机号内定</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="xysjh_lottery" class="form-control" placeholder="" name="xysjh_lottery" value="<?php  echo $xyh['xysjh_lottery'];?>">
							<div class="help-block">手机号内定中奖，多个手机号用英文逗号隔开</div>
						</div>
					</div>
					<div class="form-group">
						<label for="tptop_url" class="control-label col-xs-12 col-sm-3 col-md-2">自定义抽奖内定</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" id="zdycj_lottery" class="form-control" placeholder="" name="zdycj_lottery" value="<?php  echo $xyh['zdycj_lottery'];?>">
							<div class="help-block">自定义抽奖内定中奖，多个号用英文逗号隔开</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">幸运手机号码显示方式</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="xysjh_type" value="0" <?php  if($xyh['xysjh_type']==0) { ?> checked="checked"<?php  } ?>/>中间加星
							</label>
							<label class="radio-inline">
								<input type="radio" name="xysjh_type" value="1" <?php  if($xyh['xysjh_type']==1) { ?> checked="checked"<?php  } ?>/>全显示
							</label>
							<div class="help-block">默认中间加星。</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 对对碰设置 -->
	</div>
	<!--幸运号码设置-->

	<!-- 抽奖箱活动设置 -->
  <div role="tabpanel" class="tab-pane" id="settings17">
	<!-- 抽奖箱活动设置 -->
  <div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse6" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading6">
      <div class="panel-body">
		
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>特别说明</label>
            <div class="col-sm-9 col-xs-12">
                <p style="width:100%;padding:15px;border:1px #eee dashed;line-height: 28px;background:#fdf8e4;color:#b97b32">
                    请务必记得在左侧菜单《抽奖箱奖品》里面添加奖品，并选择适应活动规则，否则抽奖的时候将无奖品显示。
                </p>
            </div>
        </div>

        <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="isCjxStart" value="0" disabled <?php  if($cjx['isCjxStart']==0) { ?> checked="checked"<?php  } ?>/>开启
				</label>
				<label class="radio-inline">
					<input type="radio" name="isCjxStart" value="1" disabled <?php  if($cjx['isCjxStart']==1) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<input type="hidden" name="isCjxStart" value="<?php  echo $cjx['isCjxStart'];?>" />
				<div class="help-block">默认开启。修改状态请在【活动开关设置】里面修改</div>
			</div>
		</div>
		 
		<div class="form-group">
			<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">背景设置</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('cjxBg', $cjx['cjxBg']);?>
			<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
			<div class="col-sm-9 col-xs-12">
			<?php  if(IMS_VERSION >= 0.8) { ?> 
				<?php  echo tpl_form_field_video('cjxVideo', $cjx['cjxVideo']);?>
				<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } else { ?>
				<input type="text" class="form-control" name="cjxVideo" value="<?php  echo $cjx['cjxVideo'];?>">
				<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } ?>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('cjxMusic',$cjx['cjxMusic']);?>
				<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
			</div>
		</div>

		<!--<div class="form-group">-->
			<!--<label class="col-xs-12 col-sm-3 col-md-2 control-label">同一个人中奖条件</label>-->
			<!--<div class="col-sm-9">-->
				<!--<label class="radio-inline">-->
					<!--<input type="radio" name="isCjxcjnum" value="0" <?php  if($cjx['isCjxcjnum']==0) { ?> checked="checked"<?php  } ?>/>只能中一个奖品-->
				<!--</label>-->
				<!--<label class="radio-inline">-->
					<!--<input type="radio" name="isCjxcjnum" value="1" <?php  if($cjx['isCjxcjnum']==1) { ?> checked="checked"<?php  } ?>/>每个奖品都有机会中-->
				<!--</label>-->
				<!--<div class="help-block">设置同一个人可以中几个奖品，默认只能中一个奖品，切换此功能必须重新刷新活动页面才能生效。</div>-->
			<!--</div>-->
		<!--</div>-->


      </div>
    </div>
  </div>
 <!-- 抽奖箱活动设置 -->
  </div>
<!-- 抽奖箱活动设置 -->

	<!-- 模版消息设置 -->
  <div role="tabpanel" class="tab-pane" id="settings18">
	<!-- 模版消息设置 -->
  <div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse89" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading6">
      <div class="panel-body">

		  <div class="form-group">

			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">订单支付成功ID</label>

			  <div class="col-xs-12 col-sm-5">

				  <input type="text" name="s_templateid" class="form-control" value="<?php  echo $mb['s_templateid'];?>" />

			  </div>

			  <div class="col-xs-12 col-sm-4">参考模板消息：订单支付通知提醒(IT科技 - IT软件与服务)</div>

		  </div>
		  <div class="form-group">

			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">订单删除提醒ID</label>

			  <div class="col-xs-12 col-sm-5">

				  <input type="text" name="m_templateid" class="form-control" value="<?php  echo $mb['m_templateid'];?>" />

			  </div>

			  <div class="col-xs-12 col-sm-4">参考模板消息：订单删除提醒(IT科技 - IT软件与服务)(未实现)</div>

		  </div>
		  <div class="form-group">

			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">粉丝留言提醒ID</label>

			  <div class="col-xs-12 col-sm-5">

				  <input type="text" name="p_templateid" class="form-control" value="<?php  echo $mb['p_templateid'];?>" />

			  </div>

			  <div class="col-xs-12 col-sm-4">参考模板消息：客户留言通知 (餐饮)</div>

		  </div>

		  <div class="form-group">

			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">商城购物通知服务员</label>

			  <div class="col-xs-12 col-sm-5">

				  <input type="text" name="n_templateid" class="form-control" value="<?php  echo $mb['n_templateid'];?>" />

			  </div>

			  <div class="col-xs-12 col-sm-4">参考模板消息：新订单提醒</div>

		  </div>
		  <div class="form-group">

			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">2/3D抽奖,抽奖箱中奖模版通知</label>

			  <div class="col-xs-12 col-sm-5">

				  <input type="text" name="l_templateid" class="form-control" value="<?php  echo $mb['l_templateid'];?>" />

			  </div>

			  <div class="col-xs-12 col-sm-4">参考模板消息：抽奖结果通知（OPENTM412245150）</div>

		  </div>
		  <div class="form-group">

			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">卡券补发通知模板</label>

			  <div class="col-xs-12 col-sm-5">

				  <input type="text" name="g_templateid" class="form-control" value="<?php  echo $mb['g_templateid'];?>" />

			  </div>

			  <div class="col-xs-12 col-sm-4">参考模板消息：礼品领取成功通知（OPENTM412561898）</div>

		  </div>





      </div>
    </div>
  </div>
 <!-- 抽奖箱活动设置 -->
  </div>
<!-- 抽奖箱活动设置 -->

	<!-- 粉丝发红包设置 -->
	<div role="tabpanel" class="tab-pane" id="settings19">
		<!-- 粉丝发红包设置 -->
		<div class="panel panel-primary" style="border-radius: 0px">
			<div id="collapse19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading7">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>特别说明</label>
						<div class="col-sm-9 col-xs-12">
							<p style="width:100%;padding:15px;border:1px #eee dashed;line-height: 28px;background:#fdf8e4;color:#b97b32">
								此处设置，只针对消息聊天界面中粉丝个人发红包使用。其他地方不适用。
							</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">启用状态</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="isfanshb" value="0" disabled <?php  if($fanshb['isfanshb']==0) { ?> checked="checked"<?php  } ?>/>关闭
							</label>
							<label class="radio-inline">
								<input type="radio" name="isfanshb" value="1" disabled <?php  if($fanshb['isfanshb']==1) { ?> checked="checked"<?php  } ?>/>开启
							</label>
							<input type="hidden" name="isfanshb" value="<?php  echo $fanshb['isfanshb'];?>" />
							<div class="help-block">默认关闭。修改状态请在【活动开关设置】里面修改</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">发红包最小值</label>
						<div class="col-sm-9 col-xs-6">
							<div class="input-group">
								<input type="number" class="form-control" name="hb_minmoney" value="<?php  echo $fanshb['hb_minmoney'];?>"/>
								<span class="input-group-addon">元</span>
							</div>
							<div class="help-block"> 默认为1元，最小1元，请根据需要设置</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">发红包最大值</label>
						<div class="col-sm-9 col-xs-6">
							<div class="input-group">
								<input type="number" class="form-control" name="hb_manmoney" value="<?php  echo $fanshb['hb_manmoney'];?>"/>
								<span class="input-group-addon">元</span>
							</div>
							<div class="help-block"> 默认为0，表示不限制，如果设置，值必须大于最小值，请根据需要设置</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包霸屏基数</label>
						<div class="col-sm-9 col-xs-6">
							<div class="input-group">
								<input type="number" class="form-control" name="hb_base" value="<?php  echo $fanshb['hb_base'];?>"/>
								<span class="input-group-addon">点</span>
							</div>
							<div class="help-block"> 默认为1。红包霸屏时间=基数值*支付红包金额(元);如：支付100元，基数为1，既霸屏时间100秒。</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">手续费</label>
						<div class="col-sm-9 col-xs-6">
							<div class="input-group">
								<input type="text" class="form-control" name="counter" value="<?php  echo $fanshb['counter'];?>"/>
								<span class="input-group-addon">%</span>
							</div>
							<div class="help-block"> 0 为不收取，默认为6%，请根据需要设置</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">粉丝是否需要关注</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="is_follow" value="0" disabled <?php  if($fanshb['is_follow']==0) { ?> checked="checked"<?php  } ?>/>不需要
							</label>
							<label class="radio-inline">
								<input type="radio" name="is_follow" value="1" disabled <?php  if($fanshb['is_follow']==1) { ?> checked="checked"<?php  } ?>/>需要
							</label>
							<input type="hidden" name="is_follow" value="<?php  echo $fanshb['is_follow'];?>" />
							<div class="help-block">默认不关注。如果要关注请上传关注二维码。修改状态请在【活动开关设置】里面修改</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">聊天顶部banner或关注二维码</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('top_bg', $fanshb['top_bg']);?>
							<div class="help-block">不上传使用默认背景，尺寸为：750*120.新聊天模式内当关注二维码使用。</div>
						</div>
					</div>
					<div class="form-group">
						<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">logo或新聊天背景</label>
						<div class="col-sm-9 col-xs-12">
							<?php  echo tpl_form_field_image('bp_logo', $fanshb['bp_logo']);?>
							<div class="help-block">不上传使用默认背景，logo尺寸为：120*120,新聊天背景尺寸：750*1334</div>
						</div>
					</div>
					<!--<div class="form-group">-->
						<!--<label class="col-xs-12 col-sm-3 col-md-2 control-label">红包下发模式</label>-->
						<!--<div class="col-sm-9">-->
							<!--<label class="radio-inline">-->
								<!--<input type="radio" name="hbtype" value="0" <?php  if($fanshb['hbtype']==0) { ?> checked="checked"<?php  } ?>/>微信现金红包-->
							<!--</label>-->
							<!--<label class="radio-inline">-->
								<!--<input type="radio" name="hbtype" value="1" <?php  if($fanshb['hbtype']==1) { ?> checked="checked"<?php  } ?>/>虚拟红包-->
							<!--</label>-->
							<!--<div class="help-block">默认微信现金红包。<br>-->
								<!--微信现金红包：微信零钱的模式下发，最小值1元。不足一元累积到一元可以提现<br>-->
								<!--虚拟红包:系统虚拟生成的红包，只能用来霸屏/打赏/小视频霸屏。不可以提现，不能发红包。-->
							<!--</div>-->
						<!--</div>-->
					<!--</div>-->

				</div>
			</div>
		</div>
		<!-- 粉丝发红包设置 -->
	</div>
	<!-- 粉丝发红包设置 -->



	<!-- 手绘签到设置 -->
  <div role="tabpanel" class="tab-pane" id="settings20">
	<!-- 手绘签到设置 -->
  <div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse20" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading6">
      <div class="panel-body">
        <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="sh_status" value="0" disabled <?php  if($shouqian['status']==0) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<label class="radio-inline">
					<input type="radio" name="sh_status" value="1" disabled <?php  if($shouqian['status']==1) { ?> checked="checked"<?php  } ?>/>开启
				</label>
				<input type="hidden" name="sh_status" value="<?php  echo $shouqian['status'];?>" />
				<div class="help-block">默认关闭，开启后粉丝签到完成后自动跳转到手签页面。修改状态请在【活动开关设置】里面修改</div>
			</div>
		</div>
		 
		<div class="form-group">
			<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">背景设置</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('shouqianBg', $shouqian['shouqianBg']);?>
			<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
			<div class="col-sm-9 col-xs-12">
			<?php  if(IMS_VERSION >= 0.8) { ?> 
				<?php  echo tpl_form_field_video('shouqianVedio', $shouqian['shouqianVedio']);?>
				<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } else { ?>
				<input type="text" class="form-control" name="shouqianVedio" value="<?php  echo $shouqian['shouqianVedio'];?>">
				<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } ?>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('shouqianMusic',$shouqian['shouqianMusic']);?>
				<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否在大屏幕显示手签二维码</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="qrcode" value="0" <?php  if($shouqian['qrcode']==0) { ?> checked="checked"<?php  } ?>/>显示
				</label>
				<label class="radio-inline">
					<input type="radio" name="qrcode" value="1" <?php  if($shouqian['qrcode']==1) { ?> checked="checked"<?php  } ?>/>不显示
				</label>
				<div class="help-block">大屏幕右上角直接显示手签二维码，扫描就可以进入手签界面，方便签到后忘记手签的客户直接进入手签页面。</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否显示重复数据</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="isAgain" value="0" <?php  if($shouqian['isAgain']==0) { ?> checked="checked"<?php  } ?>/>显示
				</label>
				<label class="radio-inline">
					<input type="radio" name="isAgain" value="1" <?php  if($shouqian['isAgain']==1) { ?> checked="checked"<?php  } ?>/>不显示
				</label>
				<div class="help-block">没有最新手签数据的，是否重新显示老数据。</div>
			</div>
		</div>


      </div>
    </div>
  </div>
 <!-- 手绘签到设置 -->
  </div>
<!-- 手绘签到设置 -->

<!-- 普通签到设置 -->
  <div role="tabpanel" class="tab-pane" id="settings21">
	<!-- 普通签到设置 -->
  <div class="panel panel-primary" style="border-radius: 0px">
    <div id="collapse21" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading6">
      <div class="panel-body">
        <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type="radio" name="pm_status" value="0" disabled <?php  if($shouqian['pm_status']==0) { ?> checked="checked"<?php  } ?>/>关闭
				</label>
				<label class="radio-inline">
					<input type="radio" name="pm_status" value="1" disabled <?php  if($shouqian['pm_status']==1) { ?> checked="checked"<?php  } ?>/>开启
				</label>
				<input type="hidden" name="pm_status" value="<?php  echo $shouqian['pm_status'];?>" />
				<div class="help-block">默认关闭。修改状态请在【活动开关设置】里面修改</div>
			</div>
		</div>

		<div class="form-group">
			<label for="pm_Bg" class="control-label col-xs-12 col-sm-3 col-md-2">背景设置</label>
			<div class="col-sm-9 col-xs-12">
			<?php  echo tpl_form_field_image('pm_Bg', $shouqian['pm_Bg']);?>
			<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
			<div class="col-sm-9 col-xs-12">
			<?php  if(IMS_VERSION >= 0.8) { ?>
				<?php  echo tpl_form_field_video('pm_Vedio', $shouqian['pm_Vedio']);?>
				<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } else { ?>
				<input type="text" class="form-control" name="pm_Vedio" value="<?php  echo $shouqian['pm_Vedio'];?>">
				<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
			<?php  } ?>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_audio('pm_Music',$shouqian['pm_Music']);?>
				<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
			</div>
		</div>

		  <div class="form-group">
			  <label class="col-xs-12 col-sm-3 col-md-2 control-label">标题</label>
			  <div class="col-sm-9 col-xs-12">
				  <input type="text" name="pm_title" class="form-control" value="<?php  echo $shouqian['pm_title'];?>">
				  <div class="help-block">显示在大屏幕的顶部条上</div>
			  </div>
		  </div>


      </div>
    </div>
  </div>
 <!-- 普通签到设置 -->
  </div>
<!-- 普通签到设置 -->


<?php  if($znl_==1) { ?>
<!--能量设置-->
<div role="tabpanel" class="tab-pane" id="settings22">
	<!-- 能量设置 -->
	<div class="panel panel-primary" style="border-radius: 0px">
		<div id="collapse22" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading12">
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">直接调用链接</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" id="linkss" class="form-control" placeholder="" name="link" disabled="disabled" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=hm_newdpm&do=znlindex&rid=<?php  echo $rid;?>">
						<div class="help-block"><b style="color: #FC110D">第一次建立规则，必须保存后再调用这个链接</b>，需要拥有高级接口权限的！</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">二维码图片调用</label>
					<div class="col-sm-9 col-xs-12">
						<img src="<?php  echo $znlimgUrl;?>">
						<div class="help-block"><b style="color: #FC110D">第一次建立规则，必须保存后再使用这个二维码图片</b>，需要拥有高级接口权限的！</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启攒能量</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="znl_isznl" value="0" <?php  if($znl['isznl']==0) { ?> checked="checked"<?php  } ?>/>不开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="znl_isznl" value="1" <?php  if($znl['isznl']==1) { ?> checked="checked"<?php  } ?>/>开启
						</label>
						<div class="help-block">默认不开启。</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启排行榜</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="znl_isrank" value="0" <?php  if($znl['isrank']==0) { ?> checked="checked"<?php  } ?>/>开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="znl_isrank" value="1" <?php  if($znl['isrank']==1) { ?> checked="checked"<?php  } ?>/>不开启
						</label>
						<div class="help-block">默认不开启。</div>
					</div>
				</div>
				<div class="form-group">
					<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕背景设置</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('znl_znl_bg', $znl['znl_bg']);?>
						<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
					</div>
				</div>
				<div class="form-group">
					<label for="znl_img" class="control-label col-xs-12 col-sm-3 col-md-2">到顶结束图片</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('znl_img', $znl['znl_img']);?>
						<div class="help-block">不上传使用默认，尺寸为：600*420</div>
					</div>
				</div>
				<div class="form-group">
					<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">手机端背景图片</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('znl_znl_mbg2', $znl['znl_mbg2']);?>
						<div class="help-block">不上传使用默认，尺寸为：750*1336</div>
					</div>
				</div>
				<div class="form-group">
					<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">手机端顶部图片</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('znl_znl_mbg', $znl['znl_mbg']);?>
						<div class="help-block">不上传使用默认，尺寸为：750*290</div>
					</div>
				</div>
				<div class="form-group">
					<label for="znl_qrcode" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕二维码</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('znl_qrcode', $znl['znl_qrcode']);?>
						<div class="help-block">不上传使用默认，尺寸为：220*220</div>
					</div>
				</div>
				<div class="form-group">
					<label for="znl_znl_banner" class="control-label col-xs-12 col-sm-3 col-md-2">标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" class="form-control" placeholder="" name="znl_znl_banner" value="<?php  echo $znl['znl_banner'];?>">
						<div class="help-block">大屏幕显示标题</div>
					</div>
				</div>
				<div class="form-group">
					<label for="znl_number" class="control-label col-xs-12 col-sm-3 col-md-2">虚拟人数</label>
					<div class="col-sm-9 col-xs-12">
						<div class="input-group">
							<input type="number" class="form-control" placeholder="" name="znl_number" value="<?php  echo $znl['znl_number'];?>">
							<span class="input-group-addon" style="border-left: none;border-right: none;">人</span>
						</div>
						<div class="help-block">大屏幕显示人数=虚拟人数+实际人数</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">颜色</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_color('znl_color',$znl['znl_color']);?>
						<div class="help-block">用来控制大屏幕能量柱上方的色调，不设置使用默认的红色</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_audio('znl_znl_music',$znl['znl_music']);?>
						<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">注满能量需要次数</label>
					<div class="col-sm-9 col-xs-12">
						<div class="input-group">
							<input type="text" name="znl_znl_maxnum" class="form-control" value="<?php  echo $znl['znl_maxnum'];?>">
							<span class="input-group-addon" style="border-left: none;border-right: none;">次</span>
						</div>
						<div class="help-block">注满能量需要总共摇多少次数，默认100，建议设多点。</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">注满能量提示语</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="znl_znl_maimg" class="form-control" value="<?php  echo $znl['znl_maimg'];?>">
						<div class="help-block">注满能量提示语，不填则不显示</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- 能量设置 -->
</div>
<!--能量设置-->
<?php  } ?>

<?php  if($ds_==1) { ?>
<!--打赏设置-->
<div role="tabpanel" class="tab-pane" id="settings22">
	<!-- 打赏设置 -->
	<div class="panel panel-primary" style="border-radius: 0px">
		<div id="collapse22" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading12">
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">直接调用链接</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" id="linkss" class="form-control" placeholder="" name="link" disabled="disabled" value="<?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=hm_newdpm&do=dsindex&id=<?php  echo $rid;?>">
						<div class="help-block"><b style="color: #FC110D">第一次建立规则，必须保存后再调用这个链接</b>，需要拥有高级接口权限的！</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">二维码图片调用</label>
					<div class="col-sm-9 col-xs-12">
						<img src="<?php  echo $dsimgUrl;?>">
						<div class="help-block"><b style="color: #FC110D">第一次建立规则，必须保存后再使用这个二维码图片</b>，需要拥有高级接口权限的！</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启打赏模式</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="ds_is_openbbm" value="0" <?php  if($ds['is_openbbm']==0) { ?> checked="checked"<?php  } ?>/>不开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="ds_is_openbbm" value="1" <?php  if($ds['is_openbbm']==1) { ?> checked="checked"<?php  } ?>/>开启
						</label>
						<div class="help-block">默认不开启。</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 活动时间</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_daterange('dsdatelimit', array('start'=>date('Y-m-d H:i',$ds['starttime']),'end'=>date('Y-m-d H:i',$ds['endtime'])), true)?>
					</div>
				</div>
				<div class="form-group">
					<label for="start_picurl" class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕背景设置</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('ds_backpicurl', $ds['backpicurl']);?>
						<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
					</div>
				</div>
				<div class="form-group">
					<label for="ds_noip_url" class="control-label col-xs-12 col-sm-3 col-md-2">标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" class="form-control" placeholder="" name="ds_noip_url" value="<?php  echo $ds['noip_url'];?>">
						<div class="help-block">大屏幕显示标题</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_audio('ds_backcolor',$ds['backcolor']);?>
						<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机端打赏列表页面头部图片</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('ds_zhuanfaimg', $ds['zhuanfaimg']);?>
						<div class="help-block">打赏列表顶部广告图 750*330</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否需要填写电话</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="ds_is_ziliao" value="0" <?php  if($ds['is_ziliao']==0) { ?> checked="checked"<?php  } ?>/>不需要
						</label>
						<label class="radio-inline">
							<input type="radio" name="ds_is_ziliao" value="1" <?php  if($ds['is_ziliao']==1) { ?> checked="checked"<?php  } ?>/>电话
						</label>
						<label class="radio-inline">
							<input type="radio" name="ds_is_ziliao" value="2" <?php  if($ds['is_ziliao']==2) { ?> checked="checked"<?php  } ?>/>昵称
						</label>
						<label class="radio-inline">
							<input type="radio" name="ds_is_ziliao" value="3" <?php  if($ds['is_ziliao']==3) { ?> checked="checked"<?php  } ?>/>都要
						</label>
						<div class="help-block">默认不开启。</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现手续费</label>
					<div class="col-sm-9 col-xs-12">
						<div class="input-group">
							<input type="text" name="ds_counter_fee" class="form-control" value="<?php  echo $ds['counter_fee'];?>">
							<span class="input-group-addon" style="border-left: none;border-right: none;">%</span>
						</div>
						<div class="help-block">被打赏的人提取现金需要收的手续费用</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">最低提现额度</label>
					<div class="col-sm-9 col-xs-12">
						<div class="input-group">
							<input type="text" name="ds_split_money" class="form-control" value="<?php  echo $ds['split_money'];?>">
							<span class="input-group-addon" style="border-left: none;border-right: none;">元</span>
						</div>
						<div class="help-block">被打赏人最低的提现额度，0表示不限制</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现周期</label>
					<div class="col-sm-9 col-xs-12">
						<div class="input-group">
							<input type="text" name="ds_split_date" class="form-control" value="<?php  echo $ds['split_date'];?>">
							<span class="input-group-addon" style="border-left: none;border-right: none;">天</span>
						</div>
						<div class="help-block">被打赏人最低的提现周期，0表示不限制</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- 打赏设置 -->
</div>
<!--打赏设置-->
<?php  } ?>

</div>



<!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> -->



<!--</div>-->




<style>
.ruoling {
	width: 35%;
    margin-left: inherit;
}

</style>

<script>
	require(['jquery','util'], function($, util){
		$(function(){
			$('#mapxz').click(function(){
				util.map({lng: 116.34176,lat: 42.863358}, function(location){
					$('#allowip').val(location.lat +"|"+location.lng+"|"+location.label);
				});
			});
		});
	});
</script>

<!-- <script type="text/javascript">
	$(function(){
		$("#tag").tabControl({maxTabCount:40,tabW:80},"<?php  echo $reply['getip_addr'];?>");
		$("input[name='submit']").click(function(){
			var v = $("#tag").getTabVals();
			$("#getaddr").val(v);
		});
	});

</script> -->


	
	
	
	


