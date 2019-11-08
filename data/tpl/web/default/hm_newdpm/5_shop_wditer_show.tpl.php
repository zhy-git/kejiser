<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">服务员列表</a></li>
        <li><a  href="<?php  echo $this->createWebUrl('shop_wditer',array('rid' => $rid,'op'=>'new'))?>">添加服务员</a></li>
    </ul>
	<div class="category">
	<div class="panel panel-default">
                <div class="panel-body table-responsive">
                    <table class="table table-hover" >
                        <thead class="navbar-inner">
                        <tr>
                            <th style="width:60px;">服员ID</th>
                            <th style="width:60px;">头像</th>
                            <th style="width:100px;">名称</th>
                            <th style="width:100px;">电话</th>
                            <th style="width:200px;">openid</th>
                            <!--<th style="width:60px;">打赏/霸屏管理</th>-->
                            <!--<th style="width:60px;">可免费次数</th>-->
                            <!--<th style="width:60px;">剩余次数</th>-->
                            <th style="width:60px;">状态</th>
                            <th style="width:200px;">适用活动</th>
                            <th style="width:150px;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <tr>
                            <td><?php  echo $row['id'];?> </td>
                            <td><img style="width: 75px;height: 75px" src="<?php  echo tomedia($row['avatar'])?>"></td>
                            <td><?php  echo $row['wditer_name'];?></td>
                            <td><?php  echo $row['wditer_mobile'];?></td>
                            <td><?php  echo $row['wditer_openid'];?></td>
                            <!--<td><?php  if($row['bpadmin'] == 0) { ?>都是<?php  } else if($row['bpadmin'] == 1) { ?>霸屏<?php  } else { ?>打赏<?php  } ?></td>-->
                            <!--<td><?php  if($row['free_times']==0) { ?>不限制<?php  } else { ?><?php  echo $row['free_times'];?><?php  } ?></td>-->
                            <!--<td><?php  if($row['free_times']==0) { ?>&#45;&#45;<?php  } else { ?><?php  echo ($row['free_times']-$row['uses_times'])?><?php  } ?></td>-->
                            <td><?php  if($row['status'] == 0) { ?>正常<?php  } else { ?>禁用<?php  } ?></td>
                            <td><?php  echo $row['rulename'];?></td>
                            <td>
                                <!--<a class="btn btn-default xiangqing userinfo" href="javascript:void(0)"  data-placement="top" title="详情" id="<?php  echo $row['id'];?>"><i class="fa fa-bullseye" ></i></a>-->
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('shop_wditer',array('rid' => $rid,'op'=>'up','uid'=>$row['id']));?>" title="编辑"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('shop_wditer',array('rid' => $rid,'op'=>'del','uid'=>$row['id']));?>');" title="删除"><i class="fa fa-times"></i></a>
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
    require(['jquery', 'util'], function($, u){
        $('.userinfo').click(function(){
            var fansid = parseInt($(this).attr('id'));
            $.get("<?php  echo $this->createWebUrl('Userinfo3')?>&fansid=" + fansid, function(data){
                if(data == 'dataerr') {
                    u.message('未找到指定记录', '', 'error');
                } else {
                    var obj = u.dialog('管理员支付记录', data, $('#guanbi').html());
                }
                obj.modal('show');
            });
        })
    });
</script>
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