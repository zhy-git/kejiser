<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li<?php  if($_GPC['do'] == 'bapin') { ?> class="active"<?php  } ?>><a  href="<?php  echo $this->createWebUrl('bapin');?>">霸屏设置管理</a></li>
    <li><a  href="<?php  echo $this->createWebUrl('bp_bgup');?>">霸屏大屏幕背景管理</a></li>
</ul>


<div class="main">
	<div class="category">
	<div class="panel panel-default">
    <div class="panel-heading">
        霸屏金额列表(<span style="color: #FF0000">请先在回复规则列表添加活动规则，然后点击右侧添加金额按钮</span>)
    </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="100">序列ID</th>
                            <th width="120">活动规则</th>
                            <th width="120">霸屏背景</th>
                            <th width="150">霸屏主题</th>
                            <th width="150">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($rowlist)) { foreach($rowlist as $row) { ?>
                        <tr>
                            <td><?php  echo $row['id'];?></td>
                            <td><?php  echo $row['name'];?></td>
                            <td>
                                <a href="<?php  echo $this->createWebUrl('Newbapin',array('rid' => $row['id'],'token'=>3))?>" class="btn btn-primary btn-sm"> 添加背景</a>
                                <a href="<?php  echo $this->createWebUrl('bapinshow', array('rid' => $row['id'],'token'=>3))?>" class="btn btn-success btn-sm"> 查看背景</a>
                            </td>
                            <td>
                                <a href="<?php  echo $this->createWebUrl('Newbapin',array('rid' => $row['id'],'token'=>2))?>" class="btn btn-primary btn-sm"> 添加主题</a>
                                <a href="<?php  echo $this->createWebUrl('bapinshow', array('rid' => $row['id'],'token'=>2))?>" class="btn btn-success btn-sm"> 查看主题</a>
                            </td>
                            <td>
                                <a href="<?php  echo $this->createWebUrl('Newbapin',array('rid' => $row['id']))?>" class="btn btn-primary btn-sm"> 添加金额</a>
                                <a href="<?php  echo $this->createWebUrl('bapinshow', array('rid' => $row['id']))?>" class="btn btn-success btn-sm"> 查看金额</a>
                                <a href="<?php  echo $this->createWebUrl('setting_bp', array('rid' => $row['id']))?>" class="btn btn-info btn-sm"> 霸屏设置</a>
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