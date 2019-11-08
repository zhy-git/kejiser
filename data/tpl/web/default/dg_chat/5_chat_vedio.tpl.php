<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php  if($chat_type=='tencent') { ?>
<ul class="nav nav-tabs">
    <li class="active"><a href="<?php  echo $this->createWebUrl('chat_vedio')?>">腾讯云参数设置</a></li>
    <li style="display:none;"><a href="<?php  echo $this->createWebUrl('chat_file')?>">录播管理</a></li>
</ul>
<div class="main table-responsive">
	<div class="alert alert-warning" role="alert">
		<p>视频直播使用说明：<a href="https://www.kancloud.cn/duoguan/tengxunzhibo" target="_blank">点击查看</a></p>
	</div>
</div>
<div class="main">
    <form action="" method="post" class="form-horizontal form"	enctype="multipart/form-data">
        <div class="panel panel-default">
           
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>appid</label>
                    <div class="col-sm-8">
                        <input type="text" name="appid" class="form-control" value="<?php  echo $vidio['appid'];?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>bizid</label>
                    <div class="col-sm-8">
                        <input type="text" name="bizid" class="form-control" value="<?php  echo $vidio['bizid'];?>" />
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>推流防盗链key</label>
                    <div class="col-sm-8">
                        <input type="text" name="key" class="form-control" value="<?php  echo $vidio['key'];?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>API鉴权key</label>
                    <div class="col-sm-8">
                        <input type="text" name="APIkey" class="form-control" value="<?php  echo $vidio['APIkey'];?>" />
                    </div>
                </div>
                <div class="form-group" style="display:none;">
                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>api秘钥</label>
                    <div class="col-sm-8">
                        <input type="text" name="secretid" class="form-control" value="<?php  echo $vidio['secretid'];?>" />
                    </div>
                </div>
                <input type="hidden"  name="vid" value="<?php  echo $vidio['id'];?>">
                <input type="hidden"  name="chat_type" value="<?php  echo $chat_type;?>">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
    </form>
</div>
<?php  } else if($chat_type=='letv') { ?>
<ul class="nav nav-tabs">
    <li class="<?php  if($op=='add') { ?>active<?php  } ?>"><a href="<?php  echo $this->createWebUrl('chat_vedio')?>">乐视云参数设置</a></li>
    <li class="<?php  if($op=='list') { ?>active<?php  } ?>"><a href="<?php  echo $this->createWebUrl('chat_vedio',array('op'=>'list'))?>">乐视云活动列表</a></li>
</ul>
<?php  if($op=='add') { ?>
<div class="main table-responsive">
    <div class="alert alert-warning" role="alert">
        <p style="color:red;">视频直播使用说明：<a href="http://www.lecloud.com/zh-cn/help/index.html" target="_blank">点击查看</a></p>
		<p style="color:red;">下载推流app：<img src="<?php  echo $_W['siteroot'];?>addons/dg_chat/resource/images/ls/app.png" style="height:100px;"/></p>
    </div>
</div>
<div class="main">
    <form action="" method="post" class="form-horizontal form"  enctype="multipart/form-data">
        <div class="panel panel-default">
           
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>用户ID</label>
                    <div class="col-sm-8">
                        <input type="text" name="userid" class="form-control" value="<?php  echo $letvlist['userid'];?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>UUID</label>
                    <div class="col-sm-8">
                        <input type="text" name="uuid" class="form-control" value="<?php  echo $letvlist['uuid'];?>" />
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label"><span style="color:red;">*</span>私钥</label>
                    <div class="col-sm-8">
                        <input type="text" name="ls_key" class="form-control" value="<?php  echo $letvlist['ls_key'];?>" />
                    </div>
                </div>
                <input type="hidden"  name="chat_type" value="<?php  echo $chat_type;?>">
                <input type="hidden"  name="lsid" value="<?php  echo $letvlist['id'];?>">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
    </form>
</div>
<?php  } else { ?>
<div class="main">
    <div class="panel panel-default">
        <div class="panel-heading"> 
            <div class="row-fluid">
                <div class="span8 control-group">
                    共计 <span style="color:red;"><?php  echo $total;?></span> 条数据
                </div>
            </div>
        </div>
        <div class="panel-body table-responsive">
            <table class="table table-hover">
                <thead class="navbar-inner">
                    <tr>
                        <th style="width:50px;">活动id</th>
                        <th style="width:50px;">活动名称</th>
                        <th style="width:50px;">活动状态</th>
                        <th style="width:150px;">绑定话题间</th> 
                        <th style="width:50px;">开始时间</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  if(is_array($searchObj)) { foreach($searchObj as $row) { ?>
                    <tr>
                        <td><?php  echo $row['activityId'];?></td>
                        <td><?php  echo $row['activityName'];?></td>
                        <td><?php  if($row['activityStatus']==0) { ?>未开始<?php  } else if($row['activityStatus']==1) { ?>进行中<?php  } else { ?>已结束<?php  } ?></td>
                        <td><?php  echo $row['topic_name'];?></td>
                        <td><?php  echo date("Y-m-d H:i:s",$row['startTime']/1000)?></td>
                    </tr>
                    <?php  } } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php  } ?>
<?php  } else { ?>
<div class="main table-responsive">
    <div class="alert alert-warning" role="alert">
        <p>请在参数设置中选择直播方式</p>
    </div>
</div>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>