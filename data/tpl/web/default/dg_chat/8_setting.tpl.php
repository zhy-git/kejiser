<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="main">
	<form action="" method="post" class="form-horizontal form" id="setting-form">
		<div class="panel panel-default">
			<div class="panel-heading">七牛存储设置</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>七牛AccessKey</label>
					<div class="col-sm-8">
						<input type="text" name="qn_accesskey" class="form-control" value="<?php  echo $settings['qn_accesskey'];?>" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>七牛SecretKey</label>
					<div class="col-sm-8">
						<input type="text" name="qn_secretkey" class="form-control" value="<?php  echo $settings['qn_secretkey'];?>" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>七牛Bucket</label>
					<div class="col-sm-8">
						<input type="text" name="qn_bucket" class="form-control" value="<?php  echo $settings['qn_bucket'];?>" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>七牛队列名</label>
					<div class="col-sm-8">
						<input type="text" name="qn_queuename" class="form-control" value="<?php  echo $settings['qn_queuename'];?>" />
					<div class="help-block">媒体转码队列名,声音文件需要转码后才能在安卓和苹果上使用</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>七牛访问域名</label>
					<div class="col-sm-8">
						<input type="text" name="qn_domain" class="form-control" value="<?php  echo $settings['qn_domain'];?>" />
					<div class="help-block">七牛上可以绑定自己的域名来访问资源,此处填写绑定到七牛的域名</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">PC扫码登录设置</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>网站应用APPID</label>
					<div class="col-sm-8">
						<input type="text" name="pc_appid" class="form-control" value="<?php  echo $settings['pc_appid'];?>" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>网站应用AppSecret</label>
					<div class="col-sm-8">
						<input type="text" name="pc_appSecret" class="form-control" value="<?php  echo $settings['pc_appSecret'];?>" />
					</div>
				</div>
				


				
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">直播设置</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">课程开始模板消息</label>
					<div class="col-sm-8">
						<input type="text" name="lesson_templete" class="form-control" value="<?php  echo $settings['lesson_templete'];?>" />
						<div class="help-block">课程即将开始时提醒,模板为 互联网|电子商务>>预约课程开始提醒<br>（OPENTM405456204）</div>
						<div class="help-block">您预约的课程即将开始！<br>
												课程名称：《28天口语训练营》<br>
												开始时间：2016-06-02 19:00<br>
												点击查看详情。<br>
						</div>
					</div>
				</div>
				
				<div class="form-group" style="display:none;">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">新开课模板消息</label>
					<div class="col-sm-8">
						<input type="text" name="new_lesson" class="form-control" value="<?php  echo $settings['new_lesson'];?>" />
						<div class="help-block">开课提醒,模板为 互联网|电子商务>>开课提醒</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">购买成功模板消息</label>
					<div class="col-sm-8">
						<input type="text" name="pay_success" class="form-control" value="<?php  echo $settings['pay_success'];?>" />
						<div class="help-block">购买成功提醒,模板为 互联网|电子商务>>购买成功通知<br>（TM00001）</div>
						<div class="help-block">您好，您已购买成功。<br>
												商品信息：xx课程<br>
												点击查看详情。<br>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">审核通过模板消息</label>
					<div class="col-sm-8">
						<input type="text" name="temp_pass" class="form-control" value="<?php  echo $settings['temp_pass'];?>" />
						<div class="help-block">开课提醒,模板为 互联网|电子商务>>审核通过提醒<br>（OPENTM411793302）</div>
						<div class="help-block">你好，你提交的资料已通过审核。<br>
												审核状态：通过审核<br>
												审核时间：2017年10月2日 18:00:20<br>
												点击查看详情。<br>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">获取收益消息提醒</label>
					<div class="col-sm-8">
						<input type="text" name="inconme_warn" class="form-control" value="<?php  echo $settings['inconme_warn'];?>" />
						<div class="help-block">收益提示,模板为 互联网|电子商务>>收益提示<br>（OPENTM401407039）</div>
						<div class="help-block">您好，众赢社提醒您获得10.00元收益！<br>
												收益类型：销售提成<br>
												收益时间：2014年7月21日 18:36<br>
												您的努力初见成效，再接再励哟。<br>
						</div>
					</div>
				</div>
				
				  <div class="form-group">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label">提现限额设置</label>
            <div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<span class="input-group-addon">满</span>
					<input type="text" class="form-control" name="cash_money" value="<?php  echo $settings['cash_money'];?>">
					<span class="input-group-addon">元可提现</span>
				</div>
				<div class="help-block">设置提现的最低金额，当收入大于等于此金额后方可申请提现</div>
            </div>
          </div>
          
          
           <div class="form-group">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label">直播间显示二维码</label>
            <div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<label class="radio-inline">
                	<input type="radio" name="qr_code" value="1" <?php  if($settings['qr_code']==1 ) { ?>checked="checked"<?php  } ?>>平台的二维码
	                </label>
	                <label class="radio-inline">
	                	<input type="radio" name="qr_code" value="2" <?php  if($settings['qr_code']==2 ) { ?>checked="checked"<?php  } ?>>创建者上传的二维码
	                </label>  
				</div>
            </div>
         </div>
         <div class="form-group">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;">*</span>直播方式</label>
            <div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<label class="radio-inline">
                	<input type="radio" name="chat_type" value="tencent" <?php  if($settings['chat_type']=='tencent'||$settings['chat_type']=='' ) { ?>checked="checked"<?php  } ?>>腾讯云
	                </label>
	                <label class="radio-inline">
	                	<input type="radio" name="chat_type" value="letv" <?php  if($settings['chat_type']=='letv' ) { ?>checked="checked"<?php  } ?>>乐视云 
				</div>
            </div>
         </div>
          
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;">*</span>开启认证(PC端)</label>
			<div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<label class="radio-inline">
					<input type="radio" name="is_authentication" value="2" <?php  if($settings['is_authentication']=='2' ) { ?>checked="checked"<?php  } ?>>是
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_authentication" value="1" <?php  if($settings['is_authentication']=='1' ) { ?>checked="checked"<?php  } ?>>否
				</div>
				<div class="help-block">
					此处用于填写用户信息后方可进入直播课,开启认证后才可使用pc端
				</div>
			</div>
		</div>
		
		
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;">*</span>短信使用类型</label>
			<div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<label class="radio-inline">
					<input type="radio" name="msg_type" value="alidayu" <?php  if($settings['msg_type']=='alidayu' ) { ?>checked="checked"<?php  } ?>>阿里大于(老版)
					</label>
					<label class="radio-inline">
					<input type="radio" name="msg_type" value="alidayu_new" <?php  if($settings['msg_type']=='alidayu_new' ) { ?>checked="checked"<?php  } ?>>阿里大于(新版)
					</label>
					<label class="radio-inline">
						<input type="radio" name="msg_type" value="juhe" <?php  if($settings['msg_type']=='juhe' ) { ?>checked="checked"<?php  } ?>>聚合数据
					</label>
				</div>
				<div class="help-block">
					注：针对于阿里大于，由于版本不同，请选择当前您的版本（老版的key是一串数字），避免短信发送失败哦~<br>
				</div>
			</div>
		</div>
		
          
          <div class="form-group">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label">平台分成比例</label>
            <div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<input type="text" class="form-control" name="plat_percent" value="<?php  echo $settings['plat_percent'];?>">
					<span class="input-group-addon">%</span>
				</div>
				<div class="help-block">
				<p>1、设置平台参与直播间收益(赞赏和收费直播间)的分成比例,此比例应包含微信支付平台的分成</p>
				<p>2、分成比例设置后只影响后面的用户提现,已提现金额不会受更改影响</p>
				<p>3、分成比例一旦设置建议不要随意更改</p>
				</div>
            </div>
          </div>
		  
		  <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;">*</span>首页展示样式</label>
			<div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<label class="radio-inline">
					<input type="radio" name="template_type" value="1" <?php  if($settings['template_type']=='1' || $settings['template_type']=="" ) { ?>checked="checked"<?php  } ?>>列表
					</label>
					<label class="radio-inline">
						<input type="radio" name="template_type" value="2" <?php  if($settings['template_type']=='2' ) { ?>checked="checked"<?php  } ?>>九宫格
				</div>
				
			</div>
		</div>
         
        <div class="form-group" style="display:none;">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label">创建直播间</label>
            <div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<label class="radio-inline">
                	<input type="radio" name="create_room" value="1" <?php  if($settings['create_room']==1 ) { ?>checked="checked"<?php  } ?>>只允许管理员创建
	                </label>
	                <label class="radio-inline">
	                	<input type="radio" name="create_room" value="2" <?php  if($settings['create_room']==2 ) { ?>checked="checked"<?php  } ?>>任何人可创建
	                </label>    
				</div>
            </div>
         </div>
          
		</div>

		
	</div>

		<div class="panel panel-default alidayu" style="display:none;">
			<div class="panel-heading">阿里大于短信设置</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>短信appkey</label>
					<div class="col-sm-8">
						<input type="text" name="info_appkey" class="form-control" value="<?php  echo $settings['info_appkey'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>短信secretkey</label>
					<div class="col-sm-8">
						<input type="text" name="info_secretkey" class="form-control" value="<?php  echo $settings['info_secretkey'];?>" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>短信签名名称</label>
					<div class="col-sm-8">
						<input type="text" name="sign_name" class="form-control" value="<?php  echo $settings['sign_name'];?>" />
					<div class="help-block">传入的短信签名必须是在阿里大于“管理中心-验证码/短信通知/推广短信-配置短信签名”中的可用签名名称</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>短信模板ID</label>
					<div class="col-sm-8">
						<input type="text" name="info_tempid" class="form-control" value="<?php  echo $settings['info_tempid'];?>" />
					
						<div class="help-block">
						传入的模板必须是在阿里大于“管理中心-短信模板管理”中的可用模板
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>短信模板内容变量</label>
					<div class="col-sm-8">
						<input type="text" name="content_key" class="form-control" value="<?php  echo $settings['content_key'];?>" />
					
						<div class="help-block">	模板内容必须是在阿里大于“管理中心-短信模板管理”中的可用模板，且变量为一个。例：亲，您的验证码为${code},感谢您的支持! <br />
						则输入code即可
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
		
		<div class="panel panel-default juhe" style="display:none;">
			<div class="panel-heading">聚合数据短信设置</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>应用APPKEY</label>
					<div class="col-sm-8">
						<input type="text" name="juhe_appkey" class="form-control" value="<?php  echo $settings['juhe_appkey'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>短信模板ID</label>
					<div class="col-sm-8">
						<input type="text" name="juhe_tempid" class="form-control" value="<?php  echo $settings['juhe_tempid'];?>" />
					
						<div class="help-block">
							短信模板ID，请参考个人中心短信模板设置
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>短信模板内容变量</label>
					<div class="col-sm-8">
						<input type="text" name="juhecontent_key" class="form-control" value="<?php  echo $settings['juhecontent_key'];?>" />
					
						<div class="help-block">例：亲，您的验证码为#code#,感谢您的支持! <br />
						则输入code即可
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</form>
</div>

<script>
require(['jquery', 'util'], function($, util){
	$(function(){
		if($('input[name="msg_type"]').eq(2).prop('checked') == true){
			$(".juhe").show();
		}else{
			$(".alidayu").show();
		}
		$('#setting-form').submit(function(){
			var result = true;
			if($('input[name="qn_accesskey"]').val() == ''){
				result = false;
				util.message('未填写accesskey.');
			}
			if($('input[name="qn_secretkey"]').val() == ''){
				result = false;
				util.message('未填写secretkey.');
			}
			if($('input[name="qn_bucket"]').val() == ''){
				result = false;
				util.message('未填写bucket.');
			}
			if($('input[name="qn_queuename"]').val() == ''){
				result = false;
				util.message('未填写队列名.');
			}
			return result;
		});
		$('input[name="msg_type"]').click(function(){
			if($(this).val() == 'alidayu' || $(this).val() == 'alidayu_new'){
				$(".alidayu").show();
				$(".juhe").hide();
			}else{
				$(".alidayu").hide();
				$(".juhe").show();
			}
		})
	});
});
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>