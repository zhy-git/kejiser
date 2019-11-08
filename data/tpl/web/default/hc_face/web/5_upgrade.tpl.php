<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="panel panel-default">
    <div class="panel-body">
        <p>总收益：<b><?php  echo $all;?></b></p>
        <p>今日收益：<b><?php  echo $today;?></b></p>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
        升级记录
        </h3>
    </div>
    
    <div class="panel-body">
        <div class="table-responsive panel-body">
            <table class="table table-hover">
                <thead class="navbar-inner">
                <tr>
                    <th>id</th>
                    <th>用户名</th>
                    <th>升级金额</th>
                    <th>支付单号</th>
                    <th>状态</th>
                    <th>操作时间</th>
                </tr>
                </thead>
                <tbody id="level-list">
                <?php  if(is_array($list)) { foreach($list as $item) { ?>
                 <tr>
                    <td><div class="type-parent"><?php  echo $item['id'];?></div></td>
                    <td><div class="type-parent"><img src="<?php  echo $item['avatar'];?>" width="30" height="30" /><?php  echo $item['nickname'];?></div></td>
                    <td><div class="type-parent"><?php  echo $item['price'];?></div></td>
                    <td><div class="type-parent"><?php  echo $item['trade_no'];?></div></td>
                    <td>
                        <div class="type-parent">
                            <?php  if(empty($item['status'])) { ?>
                                未支付
                            <?php  } else { ?>
                                已支付
                            <?php  } ?>
                        </div>
                    </td>
                    <td><div class="type-parent"><?php  echo date('Y-m-d H:i',$item['createtime'])?></div></td>
                </tr>
                <?php  } } ?>     
                </tbody>
            </table>
             <?php  echo $page;?>   
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".send").click(function(){
        var mymessage=confirm("确认发放?");
        if(mymessage==true){
            var id = $(this).attr('data-id')
            $.ajax({
                type: "post",
                url: "<?php  echo $this->createWebUrl('syscash');?>",
                data: {id:id,type:1},
                dataType: "json",
                success: function(data){
                    alert(data.message);
                    if(data.type=='success'){
                        $("#"+id).html('<span class="label label-success">已发放</span>');
                    }
                }
            });
        }
    })
    
    $(".refuse").click(function(){
        var mymessage=confirm("确认拒绝?");
        if(mymessage==true){
            var id = $(this).attr('data-id')
            $.ajax({
                type: "post",
                url: "<?php  echo $this->createWebUrl('syscash');?>",
                data: {id:id,type:2},
                dataType: "json",
                success: function(data){
                    alert(data.message);
                    if(data.type=='success'){
                        $("#"+id).html('<span class="label label-default">已拒绝</span>');
                    }
                }
            });
        }
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>