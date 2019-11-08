<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li<?php  if($_GPC['do'] == 'countmoneymanage') { ?> class="active"<?php  } ?>><a  href="<?php  echo $this->createWebUrl('countmoneymanage');?>">数钱管理</a></li>
    <!--<li<?php  if($_GPC['do'] == 'setting_countmoney') { ?> class="active"<?php  } ?>><a  href="<?php  echo $this->createWebUrl('setting_countmoney');?>">数钱设置</a></li>-->
</ul>


<div class="main">
	<div class="category">
	<div class="panel panel-default">
    <div class="panel-heading">
        数钱管理(<span style="color: #FF0000">请先在回复规则列表添加活动规则，然后开启数钱功能</span>)
    </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="100">序列ID</th>
                            <th width="400">活动规则</th>
                            <th width="100">数钱场数</th>
                            <th width="150">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($rowlist)) { foreach($rowlist as $index => $row) { ?>
                        <tr>
                            <td><?php  echo $row['id'];?></td>
                            <td><?php  echo $row['name'];?></td>
                            <td><?php  echo $row['awardstotal'];?></td>
                            <td>
                                <a href="<?php  echo $this->createWebUrl('countmoneyshow', array('rid' => $row['id']))?>" class="btn btn-success btn-sm"> 查看场数</a>
                            </td>
                            <td>
                                <a href="<?php  echo $this->createWebUrl('setting_countmoney', array('rid' => $row['id']))?>" class="btn btn-info btn-sm"> 数钱设置</a>
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