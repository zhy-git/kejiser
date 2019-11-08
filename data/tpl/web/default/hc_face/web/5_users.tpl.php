<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
    .table>tbody>tr>td{vertical-align: middle; }
</style>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
        用户列表
        </h3>
    </div>
    
    <div class="panel-body">
        <form action="" method="get" class="form-horizontal" role="form">
            <div class="panel panel-default">
                <div class="panel-heading">筛选</div>
                <div class="panel-body">
                    <input type="hidden" name="c" value="site">
                    <input type="hidden" name="a" value="entry">
                    <input type="hidden" name="m" value="hc_face">
                    <input type="hidden" name="do" value="users">
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">会员等级</label>
                        <div class="col-xs-12 col-sm-2 col-lg-2">
                            <select class="form-control" name="level">
                                <option value="">--请选择--</option>
                                <?php  if(is_array($fxs)) { foreach($fxs as $f) { ?>
                                    <option value="<?php  echo $f['id'];?>" <?php  if($level==$f['id']) { ?>selected="selected"<?php  } ?>><?php  echo $f['name'];?></option>
                                <?php  } } ?>
                            </select>
                        </div>
                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">会员昵称</label>
                        <div class="col-xs-12 col-sm-4 col-lg-4">
                            <input class="form-control" name="keyword" type="text" value="<?php  echo $keyword;?>" placeholder="请输入会员昵称">
                        </div>
                        <button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>用户总数：<b><?php  echo $all;?></b></p>
                    <p>今日用户：<b><?php  echo $today;?></b></p>
                </div>
            </div>
        </form>
        <div class="table-responsive panel-body">
            <table class="table table-hover">
                <thead class="navbar-inner">
                <tr>
                    <th>id</th>
                    <th>头像</th>
                    <th>用户名</th>
                    <th>等级</th>
                    <th>加入时间</th>
                    <th style="text-align:right;">操作</th>
                </tr>
                </thead>
                <tbody id="level-list">
                <?php  if(is_array($users)) { foreach($users as $item) { ?>
                 <tr>
                     <td><div class="type-parent"><?php  echo $item['uid'];?></div></td>
                     <td><div class="type-parent"><img src="<?php  echo $item['avatar'];?>" style="width:40px;height:40px"/></div></td>
                     <td>
                        <div class="type-parent">
                            <?php  echo $item['nickname'];?>
                            <br/>
                            <mark><?php  echo $item['openid'];?></mark>
                        </div>
                     </td>
                     <td><div class="type-parent"><?php  echo $fx[$item['level']];?></div></td>
                     <td><div class="type-parent"><?php  echo date('Y-m-d H:i',$item['createtime'])?></div></td>
                     <td style="text-align:right;">
                        <a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('userdo',array('act'=>'team','nick'=>$item['nickname'],'uid'=>$item['uid'],'l'=>$level,'k'=>$keyword,'p'=>$pageindex))?>" title="团队">团队</a>
                        <a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('userdo',array('act'=>'commission','uid'=>$item['uid']))?>" title="佣金">佣金</a>
                         <a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('userdo',array('act'=>'edit','uid'=>$item['uid']))?>" title="详情">查</a>
                         <a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('userdo',array('act'=>'del','uid'=>$item['uid']))?>" onclick="return confirm('确认删除此用户吗？');return false;" title="删除">删</a>
                     </td>
                </tr>
                <?php  } } ?>     
                </tbody>
            </table>
             <?php  echo $page;?>   
        </div>
    </div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>