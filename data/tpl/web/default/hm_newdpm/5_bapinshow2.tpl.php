<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">霸屏主题列表</a></li>
        <li><a  href="<?php  echo $this->createWebUrl('Newbapin',array('rid' => $rid,'token'=>2));?>">添加霸屏主题</a></li>
    </ul>
	<div class="category">
	<div class="panel panel-default">
                <div class="panel-body table-responsive">
                    <table class="table table-hover" >
                        <thead class="navbar-inner">
                        <tr>
                            <th style="width:150px;">标题</th>
                            <th style="width:150px;">图片</th>
                            <th style="width:60px;">状态</th>
                            <th style="width:200px;">适用活动</th>
                            <th style="width:150px;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <tr>
                            <td><?php  echo $row['name'];?> </td>
                            <td><img style="width: 75px;height: 75px" src="<?php  echo tomedia($row['thumb'])?>"></td>
                            <td><?php  if($row['enabled'] == 0) { ?>正常<?php  } else { ?>禁用<?php  } ?></td>
                            <td><?php  echo $row['rulename'];?></td>
                            <td>
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('Newbapin',array('rid' => $rid,'op'=>'up','uid'=>$row['id'],'token'=>2));?>" title="编辑"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('Newbapin',array('rid' => $rid,'op'=>'del','uid'=>$row['id'],'token'=>2));?>');" title="删除"><i class="fa fa-times"></i></a>
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