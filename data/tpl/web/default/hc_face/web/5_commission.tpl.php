<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="clearfix">
<ul class="nav nav-tabs">
	<li >
        <a href="<?php  echo $this->createWebUrl('Users',array('level'=>$l,'keyword'=>$k,'page'=>$p))?>" style="background-color: #428bca">返回列表页</a>
    </li>
	<li >
        <a style="background-color: #ddd"><b><?php  echo $nickname;?></b> 的佣金</a>
    </li>
    <li <?php  if($level==1) { ?>class="active"<?php  } ?>>
        <a href="<?php  echo $this->createWebUrl('userdo',array('act'=>'commission','uid'=>$uid,'level'=>1,'l'=>$l,'k'=>$k,'p'=>$p))?>">一级</a>
    </li>
    <li <?php  if($level==2) { ?>class="active"<?php  } ?>>
        <a href="<?php  echo $this->createWebUrl('userdo',array('act'=>'commission','uid'=>$uid,'level'=>2,'l'=>$l,'k'=>$k,'p'=>$p))?>">二级</a>
    </li>
    <li <?php  if($level==3) { ?>class="active"<?php  } ?>>
        <a href="<?php  echo $this->createWebUrl('userdo',array('act'=>'commission','uid'=>$uid,'level'=>3,'l'=>$l,'k'=>$k,'p'=>$p))?>">三级</a>
    </li>
</ul>
	<div class="table-responsive panel-body">
         <table class="table table-hover">
            <thead class="navbar-inner">
            <tr>
                <th>id</th>
                <th>头像</th>
                <th>用户名</th>
                <th>金额</th>
                <th>明细</th>
                <th>时间</th>
            </tr>
            </thead>
            <tbody id="level-list">
            <?php  if(is_array($list)) { foreach($list as $index => $item) { ?>
             <tr>
                 <td><div class="type-parent"><?php  echo $item['id'];?></div></td>
                 <td><div class="type-parent"><img src="<?php  echo $item[user]['avatar'];?>" style="width:40px;height:40px"/></div></td>
                 <td>
                    <div class="type-parent">
                        <?php  echo $item[user]['nickname'];?>
                        <br/>
                        <mark><?php  echo $item[user]['openid'];?></mark>
                    </div>
                 </td>
                 <td><div class="type-parent"><?php  echo $item['profit'];?></div></td>
                 <td><div class="type-parent"><?php  echo $item['price'];?> * <?php  echo $item['rate'];?>% = <?php  echo $item['profit'];?></div></td>
                 <td><div class="type-parent"><?php  echo date('Y-m-d H:i',$item['createtime'])?></div></td>
            </tr>
            <?php  } } ?>     
            </tbody>
        </table>
         <?php  echo $page;?>   
    </div>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>