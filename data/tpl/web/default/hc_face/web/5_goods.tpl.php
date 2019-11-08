<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
    .table>tbody>tr>td{vertical-align: middle; }
</style>
<div class="clearfix">
<ul class="nav nav-tabs">
    <li class="active"><a href="<?php  echo $this->createWebUrl('goods')?>">报告列表</a></li>
</ul>
<div class="clearfixcon">
<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="all"></th>
                        <th>报告名称</th>
                        <th>原价</th>
                        <th>需支付</th>
                        <th>优惠券</th>
                        <th>销量</th>
                        <th style="text-align:center;">操作</th>
                    </tr>
                </thead>
                <tbody  class="che">
                    <?php  if(is_array($list)) { foreach($list as $index => $item) { ?>
                    <tr>
                        <td><input type="checkbox" value="<?php  echo $item['id'];?>"></td>
                        <td class="text-left"><?php  echo $item['title'];?></td>
                        <td class="text-left"><?php  echo $item['oprice'];?></td>
                        <td class="text-left"><?php  echo $item['price'];?></td>
                        <td class="text-left"><?php  echo $item['discount'];?></td>
                        <td class="text-left"><?php  echo $item['sales'];?></td>
                        <td class="text-center">
							<a href="<?php  echo $this->createWebUrl('goods_post',array('id'=>$item['id']))?>" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="详情"><i class="fa fa-edit"></i></a>
						</td>
                    </tr>
                    <?php  } } ?>
                </tbody>
            </table>
            <?php  echo $page;?>
            <?php  if(empty($list)) { ?>
            <div style="margin-top: 20px;    margin-left: -16px;">
                <a class="btn btn-danger" href="<?php  echo $this->createWebUrl('Goods_post',array('act'=>'init'))?>" onclick="return confirm('确认加载初始数据吗？');return false;" title="初始化">加载初始数据</a>
            </div>
            <?php  } ?>
        </div>
    </div>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

<script type="text/javascript">
  
$(function () {
    //全选或全不选
    $("#all").click(function(){   
        if(this.checked){   
            $(":checkbox").prop("checked", true);  
        }else{   
            $(":checkbox").prop("checked", false);
        }   
    }); 
    
    //获取选中选项的值
    $("#submit").click(function(){
        var val = '';
        $(".che :checkbox").each(function(i){
            if($(this).is(":checked")){
                val += $(this).val() + ",";
            }
        });
        $.ajax({
            url:"<?php  echo $this->createWebUrl('Goods_post',array('act'=>moredel));php?>",
            data:{ids:val},
            type:"post",
            dataType:"json",
            success:function(data){
                alert('删除成功');
                location.reload();
            }
        });
    });
    
});

</script>