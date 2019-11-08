<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
        待提现明细列表
        </h3>
    </div>
    
    <div class="panel-body">
        <div class="table-responsive panel-body">
            <table class="table table-hover">
                <thead class="navbar-inner">
                <tr>
                    <th>id</th>
                    <th>用户名</th>
                    <th>提现单号</th>
                    <th>金额</th>
                    <th>佣金</th>
                    <th>比例</th>
                    <th>佣金时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody id="level-list">
                <?php  if(is_array($list)) { foreach($list as $item) { ?>
                 <tr>
                    <td><div class="type-parent"><?php  echo $item['id'];?></div></td>
                    <td><div class="type-parent"><img src="<?php  echo $item['avatar'];?>" width="30" height="30" /><?php  echo $item['nickname'];?></div></td>
                    <td><div class="type-parent"><?php  echo $item['trade_no'];?></div></td>
                    <td><div class="type-parent"><?php  echo $item['price'];?></div></td>
                    <td><div class="type-parent"><?php  echo $item['profit'];?></div></td>
                    <td><div class="type-parent"><?php  echo $item['rate'];?>%</div></td>
                    <td><div class="type-parent"><?php  echo date('Y-m-d H:i',$item['createtime'])?></div></td>
                    <td><a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('userdo',array('act'=>'commission','uid'=>$item['user_id']))?>" title="佣金">佣金</a></td>
                </tr>
                <?php  } } ?>     
                </tbody>
            </table>
             <?php  echo $page;?>   
        </div>
    </div>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>