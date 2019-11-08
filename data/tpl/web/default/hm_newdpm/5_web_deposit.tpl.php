<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<ul class="nav nav-tabs">
    <li  ><a  href="<?php  echo $this->createWebUrl('shopping');?>">商城管理</a></li>
    <li class="active"><a  href="<?php  echo $this->createWebUrl('web_deposit');?>">寄存管理</a></li>
</ul>


<div class="main">
	<div class="category">
	<div class="panel panel-default">
    <div class="panel-heading">
        寄存列表(<span style="color: #FF0000">请先在回复规则列表添加活动规则，然后点击右侧查看按钮</span>)
    </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="100">序列ID</th>
                            <th width="300">活动规则</th>
                            <!--<th width="100">金额数量</th>-->
                            <th width="250">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($rowlist)) { foreach($rowlist as $row) { ?>
                        <tr>
                            <td><?php  echo $row['id'];?></td>
                            <td><?php  echo $row['name'];?></td>
                            <!--<td><?php  echo $row['awardstotal'];?></td>-->
                            <td>
                                <!--<a href="<?php  echo $this->createWebUrl('shop_order',array('rid' => $row['id']))?>" class="btn btn-default btn-sm"> 订单管理</a>-->
                                <!--<a href="<?php  echo $this->createWebUrl('shop_setting',array('rid' => $row['id']))?>" class="btn btn-primary btn-sm"> 商城设置</a>-->
                                <a href="<?php  echo $this->createWebUrl('deposit_detail', array('rid' => $row['id']))?>" class="btn btn-success btn-sm"> 寄存管理</a>
                                <!--<a href="<?php  echo $this->createWebUrl('category', array('rid' => $row['id']))?>" class="btn btn-info btn-sm"> 分类管理</a>-->
                                <!--<a href="<?php  echo $this->createWebUrl('shop_wditer', array('rid' => $row['id']))?>" class="btn btn-warning btn-sm"> 服务员管理</a>-->
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