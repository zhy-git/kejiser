<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li<?php  if($_GPC['do'] == 'ds') { ?> class="active"<?php  } ?>><a  href="<?php  echo $this->createWebUrl('dashang');?>">打赏管理</a></li>
</ul>


<div class="main">
	<div class="category">
	<div class="panel panel-default">
    <div class="panel-heading">
        打赏项目列表(<span style="color: #FF0000">请先在回复规则列表添加活动规则，然后点击右侧添加金额按钮</span>)
    </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="100">序列ID</th>
                            <th width="400">活动规则</th>
                            <!--<th width="100">金额数量</th>-->
                            <th width="300">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($rowlist)) { foreach($rowlist as $row) { ?>
                        <tr>
                            <td><?php  echo $row['id'];?></td>
                            <td><?php  echo $row['name'];?></td>
                            <!--<td><?php  echo $row['awardstotal'];?></td>-->
                            <td>
                                <a href="<?php  echo $this->createWebUrl('Newds',array('rid' => $row['id'],'turntable'=>1))?>" class="btn btn-primary btn-sm"> 添加项目</a>
                                <a href="<?php  echo $this->createWebUrl('dsshow', array('rid' => $row['id'],'turntable'=>1))?>" class="btn btn-success btn-sm"> 查看项目</a>
                            </td>
                            <td>
                                <a href="<?php  echo $this->createWebUrl('Newds',array('rid' => $row['id'],'turntable'=>2))?>" class="btn btn-primary btn-sm"> 添加礼物</a>
                                <a href="<?php  echo $this->createWebUrl('dsshow', array('rid' => $row['id'],'turntable'=>2))?>" class="btn btn-success btn-sm"> 查看礼物</a>
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