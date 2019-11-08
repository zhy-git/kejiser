<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li<?php  if($_GPC['do'] == 'shouqian') { ?> class="active"<?php  } ?>><a  href="<?php  echo $this->createWebUrl('shouqian');?>">手签管理</a></li>
    <li<?php  if($_GPC['do'] == 'webqiandao') { ?> class="active"<?php  } ?>><a  href="#">web签到管理</a></li>
</ul>


<div class="main">
	<div class="category">
	<div class="panel panel-default">
    <div class="panel-heading">
        web签到列表(<span style="color: #FF0000">请先在回复规则列表添加活动规则，然后使用web拍照签到功能</span>)
    </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="100">序列ID</th>
                            <th width="400">活动规则</th>
                            <th width="150">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($rowlist)) { foreach($rowlist as $index => $row) { ?>
                        <tr>
                            <td><?php  echo $row['id'];?></td>
                            <td><?php  echo $row['name'];?></td>
                            <td>
                                <!--<a href="<?php  echo $this->createWebUrl('Newjiabin',array('rid' => $row['id']))?>" class="btn btn-primary btn-sm"> 添加嘉宾</a>-->
                                <a href="<?php  echo $this->createWebUrl('webqiandaosetting', array('rid' => $row['id']))?>" class="btn btn-success btn-sm"> web拍照签到设置</a>
                            </td>
                        </tr>
                        <?php  } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
	</div>

</div>

		
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>