<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">手签列表</a></li>
        <!--<li><a  href="<?php  echo $this->createWebUrl('Newjiabin',array('rid' => $rid));?>">添加嘉宾</a></li>-->
    </ul>
	<div class="category">

	<div class="panel panel-default">
        <div class="panel-heading" >
            <button id="clearnobd" class="btn btn-danger" type="button" style="margin-left: 15px;" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('del_shouqian',array('rid' => $rid,'op'=>'del_all'));?>');">一键清除所有手签记录</button>
        </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover" >
                        <thead class="navbar-inner">
                        <tr>
                            <th style="width:100px;">序号</th>
                            <th style="width:100px;">昵称</th>
                            <th style="width:100px;">头像</th>
                            <th style="width:220px;">openid</th>
                            <th style="width:80px;">手签图</th>
                            <th style="width:150px;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <tr>
                            <td><?php  echo $row['id'];?></td>
                            <td><?php  echo $row['nickname'];?></td>
                            <td><img style="width: 75px;height: 75px" src="<?php  echo tomedia($row['avatar'])?>"></td>
                            <td><?php  echo $row['from_user'];?></td>
                            <td><a href="<?php  echo tomedia($row['img'])?>" target="_blank"><img style="width: 75px;height: 75px" src="<?php  echo tomedia($row['img'])?>"></a></td>
                            <td>
                                <!--<a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('Newjiabin',array('rid' => $rid,'op'=>'up','uid'=>$row['id']));?>" title="编辑"><i class="fa fa-edit"></i></a>-->
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('del_shouqian',array('rid' => $row['rid'],'op'=>'del_pici','id'=>$row['id']));?>');" title="删除"><i class="fa fa-times"></i></a>
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