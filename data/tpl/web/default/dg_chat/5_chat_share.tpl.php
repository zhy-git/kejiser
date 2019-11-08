<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main" style="padding-top:5px;">
<div class="panel panel-default">
    <div class="panel-heading">
                      分享设置
    </div>
    <div class="panel-body">
    	<form action="" method="post" class="form-horizontal form"	enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>分享标题</label>
            <div class="col-sm-9 col-xs-12 form-control-static">
               	<input type="text" id="share_title" name="share_title" class="form-control" value="<?php  echo $share['share_title'];?>">
            </div>
        </div>
        <div class="form-group">
			<label class="col-xs-12 col-sm-2 col-md-2  control-label"><span style='color:red'>*</span>分享图片</label>
			<div class="col-sm-9 form-control-static">
				 <?php  echo tpl_form_field_image('share_img', $share['share_img'])?>
			</div>		
		</div>

        <div class="form-group">
            <label class="col-xs-12 col-sm-2 col-md-2 control-label"><span style='color:red'>*</span>分享简介</label>
            <div class="col-sm-8 col-xs-12 form-control-static">
     			<textarea style="height:60px;" id='share_desc' name="share_desc" class="form-control" cols="60"><?php  echo $share['share_desc'];?></textarea>
            </div>
        </div>
        

				
        <div class="form-group col-sm-12">
			<input name="submit" type="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
		</form>
    </div>
</div>

</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>