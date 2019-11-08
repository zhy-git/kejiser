<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">数钱场次列表</a></li>
        <!--<li><a  href="<?php  echo $this->createWebUrl('Newjiabin',array('rid' => $rid));?>">添加嘉宾</a></li>-->
    </ul>
	<div class="category">

	<div class="panel panel-default">
        <div class="panel-heading" >
            <button id="clearnobd" class="btn btn-danger" type="button" style="margin-left: 15px;" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('del_countmoney',array('rid' => $rid,'op'=>'del_all'));?>');">一键清除所有场次</button>
        </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover" >
                        <thead class="navbar-inner">
                        <tr>
                            <th style="width:100px;">场次</th>
                            <th style="width:100px;">查看详情</th>
                            <th style="width:100px;">参与人数</th>
                            <th style="width:60px;">状态</th>
                            <th style="width:200px;">适用活动</th>
                            <th style="width:150px;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <tr>
                            <td>第<?php  echo $row['pici'];?>场</td>
                            <td>
                                <a href="<?php  echo $this->createWebUrl('countmoneydetails', array('rid'=> $row['rid'],'pici' => $row['pici']))?>" class="btn btn-success btn-sm"> 查看详情</a>
                            </td>
                            <td><?php  echo $row['c'];?>人</td>
                            <td><?php  if($row['status'] == 0) { ?>正常<?php  } else { ?>禁用<?php  } ?></td>
                            <td><?php  echo $row['rulename'];?></td>
                            <td>
                                <!--<a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('Newjiabin',array('rid' => $rid,'op'=>'up','uid'=>$row['id']));?>" title="编辑"><i class="fa fa-edit"></i></a>-->
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('del_countmoney',array('rid' => $row['rid'],'op'=>'del_pici','pici'=>$row['pici']));?>');" title="删除"><i class="fa fa-times"></i></a>
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