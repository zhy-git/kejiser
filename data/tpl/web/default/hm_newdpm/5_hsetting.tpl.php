<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<!--<ul class="nav nav-tabs">-->
    <!--<li ><a  href="<?php  echo $this->createWebUrl('parameter_setting');?>">参数设置</a></li>-->
    <!--<li><a  href="<?php  echo $this->createWebUrl('jieyong');?>">借用设置</a></li>-->
    <!--<li  class="active"><a  href="<?php  echo $this->createWebUrl('hb');?>">红包基础设置</a></li>-->
<!--</ul>-->
<form action="" method="post" class="form-horizontal" role="form" id="theform">
<div class="main">
	<div class="panel panel-default">
            <div class="panel-heading">
                红包接口参数(需认证服务号并开通微信支付,如果账号是订阅号也可以借用别人的账号)
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-xs-13 col-sm-2 col-md-2 col-lg-2 control-label">商户logo</label>
                    <div class="col-sm-8">
                        <?php  echo tpl_form_field_image('logo',$settings['logo'])?>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">发送公众号名称</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="sname" value="<?php  echo $settings['sname'];?>" class="form-control">
                        <span class="help-block">发送红包时显示的公众号名称，不填使用默认的公众号,不能超过8个字！</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">红包活动名称</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="actname" value="<?php  echo $settings['actname'];?>" class="form-control">
                        <span class="help-block">发送红包时显示的活动名称,不能超过8个字！</span>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">发送祝福语</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="wishing" value="<?php  echo $settings['wishing'];?>" class="form-control">
                        <span class="help-block">发送红包时显示的祝福语,不能超过8个字！</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">AppID</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="appid" value="<?php  echo $settings['appid'];?>" class="form-control">
                        <span class="help-block">使用或借用的认证服务号AppID</span>
                        <span class="help-block"><strong>设置好以后请不要更换, 否则会造成重复领取红包</strong></span>
                        <span class="help-block"><strong>请在公众平台中设置oAuth授权域名为当前系统域名, <a href="http://mp.weixin.qq.com/" target="_blank">去设置</a></strong></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">AppSecret</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="secret" value="<?php  echo $settings['secret'];?>" class="form-control">
                        <span class="help-block">使用或借用的认证服务号AppSecret, 需要使用高级接口鉴权</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">商户号</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="mchid" value="<?php  echo $settings['mchid'];?>" class="form-control">
                        <span class="help-block">使用或借用的微信支付商户号, 开通微信支付才能获得商户号</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">商户支付密钥</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="password" value="<?php  echo $settings['password'];?>" class="form-control">
                        <span class="help-block">使用或借用的微信支付商户所使用的支付密钥, 开通微信支付才能获得商户支付密钥。<?php  if($_W['isfounder']==true) { ?><a target="_blank" href="http://bbs.we7.cc/thread-5788-1-1.html">设置教程</a><?php  } ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">服务器IP</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="ip" value="<?php  echo $settings['ip'];?>" class="form-control">
                        <span class="help-block">发放红包接口需要服务器IP. 程序将自动获取你的服务器IP, 如果获取失败, 请手动指定</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">商户支付证书</label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea class="form-control" name="cert" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>apiclient_cert.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付证书私钥</label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea class="form-control" name="key" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>apiclient_key.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付根证书</label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea class="form-control" name="ca" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>rootca.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">接口最后调用</label>
                    <div class="col-sm-9 col-xs-12">
                        <?php  if($settings['error']) { ?>
                        <div class="alert alert-warning">
                            <?php  echo $settings['error'];?>
                        </div>
                        <?php  } else { ?>
                        <p class="form-control-static">正常调用</p>
                        <?php  } ?>
                    </div>
                </div>
                <div class="form-group">
				    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
				    <div class="col-md-2 col-lg-1">
				         <input name="submit" type="submit" value="保存" class="btn btn-primary btn-block" />
				         <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				    </div>
				</div>
            </div>
        </div>
</div>

</form>
<script>
    require(['jquery', 'util'], function($, u) {
        $(function(){
            $('#theform').submit(function(){
                var message = '';
                if($.trim($(':text[name=appid]').val()) == '') {
                    message += '必须输入AppID<br>';
                }
                if($.trim($(':text[name=secret]').val()) == '') {
                    message += '必须输入AppSecret<br>';
                }
                if($.trim($(':text[name=mchid]').val()) == '') {
                    message += '必须输入微信支付商户号<br>';
                }
                if($.trim($(':text[name=password]').val()) == '') {
                    message += '必须输入微信支付商户密钥<br>';
                }
                if(message) {
                    u.message(message);
                    return false;
                }
                return true;
            });
        });
    });
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>