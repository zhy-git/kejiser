<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#"><?php  echo $awardtitle;?>奖品详细列表</a></li>
        <li><a  href="<?php  echo $this->createWebUrl('Newcode',array('turntable' => $turntable,'rid' => $rid));?>">添加奖品</a></li>
    </ul>
	<div class="category">
	<div class="panel panel-default">
                <div class="panel-body table-responsive">
                    <table class="table table-hover" style="table-layout: auto;">
                        <thead class="navbar-inner">
                        <tr>
                            <th style="width:100px;">图片</th>
                            <th style="width:100px;">排序</th>
                            <th style="width:250px;">奖品名称</th>
                            <th style="width:100px;">奖品类型</th>
                             <?php  if($turntable == 2) { ?> 
                           <th style="width:150px;">总量/剩余</th>
                           <th style="width:100px;">中奖概率</th>
                            <?php  } ?>
                            <th style="width:140px;">红包金额/卡券ID</th>
                            <th style="width:200px;">适用活动</th>
                            <th style="width:150px;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <tr>
                            <td><img style="width: 80px;height: 80px" src="<?php  echo tomedia($row['awardsimg'])?>" alt=""></td>
                            <td><?php  echo $row['sort'];?> </td>
                            <td><?php  echo $row['prizename'];?> </td>
                            <td><?php  if($row['ptype'] == 0) { ?>红包<?php  } ?><?php  if($row['ptype'] == 1) { ?>微信卡券<?php  } ?><?php  if($row['ptype'] == 2) { ?>实物<?php  } ?></td>
                            <?php  if($turntable == 2) { ?><td><?php  echo $row['awardstotal'];?>/<?php  echo $row['awardstotal']-$row['prizedraw']?></td>
                            <td><?php  echo $row['awardspro'];?></td><?php  } ?>
                            <?php  if($turntable == 2) { ?>
                            <td><?php  if($row['ptype'] == 1) { ?><?php  echo $row['couponid'];?><?php  } else if($row['ptype'] == 0) { ?><?php  if($row['credit'] == $row['credit2']) { ?><?php  echo $row['credit']/100?><?php  } else { ?><?php  echo $row['credit']/100?>~<?php  echo $row['credit2']/100?><?php  } ?><?php  } else { ?><?php  } ?></td>
                            <?php  } else { ?>
                            <td><?php  if($row['ptype'] == 1) { ?><?php  echo $row['couponid'];?><?php  } else { ?><?php  echo $row['credit']/100?><?php  } ?></td>
                            <?php  } ?>
                            <td><?php  echo $row['rulename'];?></td>
                            <td>
                                <?php  if($turntable == 1) { ?>
                                <a href="<?php  echo $this->createWebUrl('fanslist', array('rid' => $row['rid'],'type'=>2,'id'=>$row['id']))?>" class="btn btn-info btn-sm"> 内定粉丝</a>
                                 <?php  } ?>
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('Newcode',array('turntable' => $turntable,'rid' => $rid,'op'=>'up','uid'=>$row['id']));?>" title="编辑"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('Newcode',array('turntable' => $turntable,'rid' => $rid,'op'=>'del','uid'=>$row['id']));?>');" title="删除"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <?php  } } ?>
                       
                        </tbody>
                    </table>
                </div>
            </div>
	</div>

</div>

<script>
    require(['bootstrap'],function($){
        $('.btn').hover(function(){
            $(this).tooltip('show');
        },function(){
            $(this).tooltip('hide');
        });
    });



    $(function(){

        $(".check_all").click(function(){
            var checked = $(this).get(0).checked;

            $("input[type=checkbox]").attr("checked",checked);
        });
        $("input[name=deleteall]").click(function(){
            var check = $("input:checked");

            if(check.length<2){
                alert('请选择要删除的记录!');
                return false;
            }
            if( confirm("确认要删除选择的记录?")){
                var id = new Array();
                check.each(function(i){
                    id[i] = $(this).val();
                });
                $.post('<?php  echo $this->createWebUrl('deleteAllcard')?>', {idArr:id},function(data){
                    if (data.errno ==0)
                    {
                        location.reload();
                    } else {
                        alert(data.error);
                    }


                },'json');
            }

        });
    });
</script>
<script>
    function drop_confirm(msg, url){
        if(confirm(msg)){
            window.location = url;
        }
    }
</script>
<?php  echo $pager;?>
		
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>