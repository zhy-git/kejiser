<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li class="active"><a  href="<?php  echo $this->createWebUrl('code');?>"><?php  echo $awardtitle;?>奖品管理</a></li>
</ul>


<div class="main">
	<div class="category">
	<div class="panel panel-default">
    <div class="panel-heading">
        活动奖品列表(<span style="color: #FF0000"><?php  if($turntable == 2) { ?>不管抢红包活动重置多少次，奖品总量和剩余数量都不重置<?php  } ?>请先在回复规则列表添加活动规则，然后点击右侧添加奖品按钮</span>)
    </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="100">序列ID</th>
                            <th width="200">活动规则</th>
                            <?php  if($turntable == 2||$turntable == 3) { ?>
                            <th width="100">奖品总量</th>
                            <th width="100">剩余数量</th>
                            <?php  } else { ?>
                            <th width="100">奖项数量</th>
                            <?php  } ?>
                            <th width="200">奖品操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($rowlist)) { foreach($rowlist as $row) { ?>
                        <tr>
                            <td><?php  echo $row['id'];?></td>
                            <td><?php  echo $row['name'];?></td>
                            <?php  if($turntable == 2||$turntable == 3) { ?>
                            <td><?php  echo $row['awardstotal'];?></td>
                            <td>
                                <?php  echo $row['awardstotal'] - $row['prizedraw']?>
                            </td>
                            <?php  } else { ?>
                            <td><?php  echo $row['total'];?></td>
                            <?php  } ?>
                            <td>
                                <a href="<?php  echo $this->createWebUrl('Newcode',array('turntable' => $turntable,'rid' => $row['id']))?>" class="btn btn-primary btn-sm"> 添加奖品</a>
                                <a href="<?php  echo $this->createWebUrl('codeshow', array('rid' => $row['id'],'turntable' => $turntable))?>" class="btn btn-success btn-sm"> 查看奖品</a>
                                <?php  if($turntable==1||$turntable == 3 ||$turntable == 4) { ?>
                                <a href="<?php  echo $this->createWebUrl('draw_default', array('rid' => $row['id'],'turntable' => $turntable))?>" class="btn btn-success btn-sm"> 添加内定</a>
                                <?php  } ?>
                                <?php  if($turntable == 3) { ?>
                                <a href="<?php  echo $this->createWebUrl('turnplate_set', array('rid' => $row['id']))?>" class="btn btn-info btn-sm"> 惩罚大转盘设置</a>
                                 <?php  } ?>
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