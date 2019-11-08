<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li class="active"><a  href="#">互动设置管理</a></li>
</ul>


<div class="main">
	<div class="category">
	<div class="panel panel-default">
    <div class="panel-heading">
        互动列表(<span style="color: #FF0000">请先在回复规则列表添加活动规则，然后点击右侧设置按钮</span>)
    </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="100">序列ID</th>
                            <th width="100">活动规则</th>
                            <!--<th width="120">霸屏背景</th>-->
                            <!--<th width="150">霸屏主题</th>-->
                            <th width="300">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($rowlist)) { foreach($rowlist as $row) { ?>
                        <tr>
                            <td><?php  echo $row['id'];?></td>
                            <td><?php  echo $row['name'];?></td>

                            <td>
                                  <a href="<?php  echo $this->createWebUrl('setting_interaction', array('rid' => $row['id'],'style'=>'mshake'))?>" class="btn btn-info btn-sm"> 爬烟囱设置</a>
                                  <!--<a href="<?php  echo $this->createWebUrl('setting_interaction', array('rid' => $row['id'],'style'=>'tugofwar'))?>" class="btn btn-primary btn-sm"> 大屏幕拔河</a>-->
                                  <!--<a href="<?php  echo $this->createWebUrl('setting_interaction', array('rid' => $row['id'],'style'=>'parade'))?>" class="btn btn-success btn-sm"> 国庆阅兵</a>-->
                                  <!--<a href="<?php  echo $this->createWebUrl('setting_interaction', array('rid' => $row['id'],'style'=>'rabbit'))?>" class="btn btn-success btn-sm"> 中秋兔子赛跑</a>-->

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