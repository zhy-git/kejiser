<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<!--<ul class="nav nav-tabs">-->
    <!--<li  ><a  href="<?php  echo $this->createWebUrl('parameter_setting');?>">参数设置</a></li>-->
    <!--<li class="active"><a  href="<?php  echo $this->createWebUrl('jieyong');?>">借用设置</a></li>-->
    <!--<li><a  href="<?php  echo $this->createWebUrl('hb');?>">红包基础设置</a></li>-->
<!--</ul>-->
<div class="main"> 

    <form action="" method="post" class="form-horizontal form">

    <div class="panel panel-default">
        <div class="panel-heading">
           <h4>借用JS转发权限和高级接口设置</h4>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">AppId</label>
                <div class="col-sm-9 col-xs-12">
                   <input type="text" name="appid" class="form-control" value="<?php  echo $set['appid'];?>" />
            </div>
            </div>
     <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">AppSecret</label>
                <div class="col-sm-9 col-xs-12">
                   	 <input type="text" name="appsecret" class="form-control" value="<?php  echo $set['appsecret'];?>" />
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
 
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>