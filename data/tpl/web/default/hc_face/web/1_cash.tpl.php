<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="panel panel-default">
    <div class="panel-body">
        <p>待提现：<b><?php  echo $wait;?></b>&nbsp;&nbsp;<a class="label label-success" href="<?php  echo $this->createWebUrl('Cash_detail');?>">查看明细</a></p>
        <p>待发放：<b><?php  echo $send;?></b></p>
        <p>已发放：<b><?php  echo $alr;?></b></p>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
        提现列表
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
                    <th>提现金额</th>
                    <th>手续费</th>
                    <th>收款码</th>
                    <th>提现时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody id="level-list">
                <?php  if(is_array($list)) { foreach($list as $item) { ?>
                 <tr>
                    <td><div class="type-parent"><?php  echo $item['id'];?></div></td>
                    <td><div class="type-parent"><img src="<?php  echo $item['avatar'];?>" width="30" height="30" /><?php  echo $item['nickname'];?></div></td>
                    <td><div class="type-parent"><?php  echo $item['transid'];?></div></td>
                    <td><div class="type-parent"><?php  echo $item['money'];?></div></td>
                    <td><div class="type-parent"><?php  echo $item['fee'];?></div></td>
                    <td>
                        <div class="type-parent">
                        <?php  if($item['type']==1) { ?>
                            <a target="_blank" href="<?php  echo $item['receipt_code'];?>">收款码</a>
                        <?php  } ?>
                        </div>
                    </td>
                    <td><div class="type-parent"><?php  echo date('Y-m-d H:i',$item['createtime'])?></div></td>
                    <td id="<?php  echo $item['id'];?>">
                        <?php  if(empty($item['status'])) { ?>
                            <?php  if($item['type']==1) { ?>
                                <a class="label label-danger send2" data-id="<?php  echo $item['id'];?>">确认发钱</a>
                            <?php  } else { ?>
                                <a class="label label-danger send" data-id="<?php  echo $item['id'];?>">发钱</a>
                            <?php  } ?>
                            
                            <a class="label label-warning refuse" data-id="<?php  echo $item['id'];?>">拒绝</a>
                        <?php  } else if($item['status']==2) { ?>
                            <span class="label label-default">已拒绝</span>
                        <?php  } else { ?>
                            <span class="label label-success">已发放</span>
                        <?php  } ?>
                    </td>
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
        var mymessage=confirm("确认通过零钱到账发放?");
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
    $(".send2").click(function(){
        var mymessage=confirm("是否已经通过收款码发放?");
        if(mymessage==true){
            var id = $(this).attr('data-id')
            $.ajax({
                type: "post",
                url: "<?php  echo $this->createWebUrl('syscash');?>",
                data: {id:id,type:3},
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