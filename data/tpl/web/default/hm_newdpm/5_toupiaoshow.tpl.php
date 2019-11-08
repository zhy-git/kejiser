<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">投票详细列表</a></li>
        <?php  if($vote_id==0) { ?>
        <li><a  href="<?php  echo $this->createWebUrl('toupiao');?>">投票管理</a></li>
        <li><a  href="<?php  echo $this->createWebUrl('Newtoupiao',array('rid' => $rid));?>">添加投票</a></li>
        <?php  } else { ?>
        <li><a  href="<?php  echo $this->createWebUrl('voteshow',array('rid' => $rid));?>">投票管理</a></li>
        <li><a  href="<?php  echo $this->createWebUrl('Newtoupiao',array('rid' => $rid,'vote_id'=>$vote_id));?>">添加投票</a></li>
        <?php  } ?>
    </ul>
	<div class="category">
        <button class="btn btn-success" onclick="location.href='<?php  echo $this->createWebUrl('download_tp_log',array('rid'=>$_GPC['rid']))?>'" type="button"><i class="fa fa-search"></i> 导出数据</button>
        <div class="panel panel-default">
                <div class="panel-body table-responsive">
                    <table class="table table-hover" style="position:relative;table-layout: auto;">
                        <thead class="navbar-inner">
                        <tr>
                            <th style="width:80px;">排序</th>
                            <th style="width:100px;">图片</th>
                            <th style="width:150px;">投票标题</th>
                            <th style="width:300px;">内容介绍</th>
                            <th style="width:60px;">得票数</th>
                            <th style="width:60px;">虚拟票数</th>
                            <th style="width:60px;">状态</th>
                            <?php  if($vote_id!=0) { ?>
                            <th style="width:200px;">归属项目</th>
                            <?php  } ?>
                            <th style="width:200px;">适用活动</th>
                            <th style="width:150px;">操作</th>
                            <th style="width:150px;">修改票数</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <tr>
                            <td><?php  echo $row['pid'];?> </td>
                            <td><img style="width: 80px;height: 80px" src="<?php  echo tomedia($row['avatar'])?>" alt=""></td>
                            <td><?php  echo $row['name'];?> </td>
                            <td><?php  echo $row['description'];?></td>
                            <td><?php  echo $row['get_num'];?></td>
                            <td><?php  echo $row['new_number'];?></td>
                            <td><?php  if($row['status'] == 0) { ?>正常<?php  } else { ?>禁用<?php  } ?></td>
                            <?php  if($vote_id!=0) { ?>
                            <td><?php  echo $row['vote'];?></td>
                            <?php  } ?>
                            <td><?php  echo $row['rulename'];?></td>
                            <td>
                                <a class="btn btn-default xiangqing userinfo" href="javascript:void(0)"  data-placement="top" title="详情" id="<?php  echo $row['id'];?>"><i class="fa fa-bullseye" ></i></a>
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('Newtoupiao',array('rid' => $rid,'op'=>'up','uid'=>$row['id'],'vote_id'=>$row['vote_id']));?>" title="编辑"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('Newtoupiao',array('rid' => $rid,'op'=>'del','uid'=>$row['id']));?>');" title="删除"><i class="fa fa-times"></i></a>
                            </td>
                            <td>
                                  <input type="number" style="width: 80px;" value="0">
                                  <a class="btn btn-success" data-toggle="tooltip" data-id="<?php  echo $row['id'];?>" data-placement="top" href="#" onclick="change_votenum(this)" title="确定">确定</a>
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
            $.get("<?php  echo $this->createWebUrl('Userinfo')?>&fansid=" + fansid, function(data){
                if(data == 'dataerr') {
                    u.message('未找到指定投票记录', '', 'error');
                } else {
                    var obj = u.dialog('投票记录', data, $('#guanbi').html());
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

function change_votenum (e) {
       var id = $(e).data('id');
       var n=$(e).prev().val();

    $.ajax({
        type: 'POST',
        url: "<?php  echo $this->createWebUrl('change_votenum', array('rid' => $rid))?>",
        data: {
            _status: 1,
            _id: id,
            _num: n
        },
        success: function(result) {
            location.reload();
        },
        dataType: 'json',
        error: function() {
            alert('失败！')
        }
    });
}

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