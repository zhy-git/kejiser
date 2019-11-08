<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="main" style="padding-top:5px;">
 <form id="payform" action="" method="post" enctype="multipart/form-data" method="post" class="form-horizontal form" 
 onsubmit="return validate();">
		<div class="panel panel-default">
			<div class="panel-heading">
				设置微信支付PEM
			</div>
			<div class="panel-body">
				<div>
				<div class="alert alert-info">
                    上传以下文件前请到 <a href="./index.php?c=profile&amp;a=payment&amp;">支付参数</a> 去设置好微信支付参数。
        请确保本插件目录dg_chat必须是可写的,否则上传不成功
                </div>
					<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;"> * </span>CERT证书(pem格式)</label>
					<div class="col-sm-9 col-xs-12 form-control-static">
						<?php  if($wechat['signcertexists']) { ?>
						证书已上传&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="wechat[signcertpath]" id="amendsec" class="hidden">
						<input type="button" value="修改" onclick="amendsec.click()" class="btn btn-success btn-sm" style="padding: .2em .6em;">
						<?php  } else { ?>
						<input type="file" name="wechat[signcertpath]" value="">
						<?php  } ?>
						<span class="help-block">下载证书 cert.zip 中的 apiclient_cert.pem</span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;"> * </span>KEY证书(pem格式)</label>
					<div class="col-sm-9 col-xs-12 form-control-static">
						<?php  if($wechat['signkeyexists']) { ?>
						证书已上传&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="wechat[signkeypath]" id="amendkey" class="hidden">
						<input type="button" value="修改" onclick="amendkey.click()" class="btn btn-success btn-sm" style="padding: .2em .6em;">
						<?php  } else { ?>
						<input type="file" name="wechat[signkeypath]" value="">
						<?php  } ?>
						<span class="help-block">下载证书 cert.zip 中的 apiclient_key.pem</span>
					</div>
				</div>
				
				<div class="form-group" style="display:none">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;"> * </span>ROOT文件(pem格式)</label>
					<div class="col-sm-9 col-xs-12 form-control-static">
						<?php  if($wechat['signrootexists']) { ?>
						证书已上传&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="wechat[signrootpath]" id="amendroot" class="hidden">
						<input type="button" value="修改" onclick="amendroot.click()" class="btn btn-success btn-sm" style="padding: .2em .6em;">
						<?php  } else { ?>
						<input type="file" name="wechat[signrootpath]" value="">
						<?php  } ?>
						<span class="help-block">下载证书 cert.zip 中的 rootca.pem</span>
					</div>
				</div>
				
			</div>
			<div class="form-group col-sm-12">
			<input name="do-submit" type="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
		</div>
		</div>	
	</form>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>