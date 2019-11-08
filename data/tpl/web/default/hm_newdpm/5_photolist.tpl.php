<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li class="active"><a  href="<?php  echo $this->createWebUrl('photo');?>">相册管理</a></li>
</ul>


<div class="main">
	<div class="category">
	<div class="panel panel-default">
    <div class="panel-heading">
        相册列表(<span style="color: #FF0000">请先在回复规则列表添加活动规则，然后点击右侧添加按钮</span>)
    </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="100">序列ID</th>
                            <th width="400">活动规则</th>
                            <!--<th width="100">金额数量</th>-->
                            <th width="150">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($rowlist)) { foreach($rowlist as $row) { ?>
                        <tr>
                            <td><?php  echo $row['id'];?></td>
                            <td><?php  echo $row['name'];?></td>
                            <!--<td><?php  echo $row['awardstotal'];?></td>-->
                            <td>
                                <a href="<?php  echo $this->createWebUrl('Newphoto',array('rid' => $row['id']))?>" class="btn btn-primary btn-sm"> 添加图片</a>
                                <a href="<?php  echo $this->createWebUrl('photoshow', array('rid' => $row['id']))?>" class="btn btn-success btn-sm"> 查看相册</a>
                                <a href="<?php  echo $this->createWebUrl('setting_photo', array('rid' => $row['id']))?>" class="btn btn-info btn-sm"> 相册设置</a>
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