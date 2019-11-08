<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<ul class="nav nav-tabs">
    <li  class="active"><a  href="<?php  echo $this->createWebUrl('parameter_setting');?>">参数设置</a></li>
    <li><a  href="<?php  echo $this->createWebUrl('custom');?>">自定义活动入口</a></li>
    <li><a  href="<?php  echo $this->createWebUrl('mobile_code');?>">签到手机号管理</a></li>
    <li><a  href="<?php  echo $this->createWebUrl('custom_draw');?>">自定义抽奖管理</a></li>
</ul>


<div class="main">
	<div class="category">
	<div class="panel panel-default">
    <div class="panel-heading">
        个人中心(<span style="color: #FF0000">请先在回复规则列表添加活动规则，然后点击右侧设置按钮</span>)
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
                                <!--<a href="<?php  echo $this->createWebUrl('shop_order',array('rid' => $row['id'],'op' => 'post'))?>" class="btn btn-default btn-sm"> 订单管理</a>-->
                                <a href="<?php  echo $this->createWebUrl('personal_setting',array('rid' => $row['id'],'op' => 'post'))?>" class="btn btn-primary btn-sm"> 会员中心设置</a>
                                <!--<a href="<?php  echo $this->createWebUrl('goods', array('rid' => $row['id']))?>" class="btn btn-success btn-sm"> 商品管理</a>-->
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