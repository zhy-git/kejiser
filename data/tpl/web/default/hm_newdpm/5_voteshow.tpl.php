<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">投票项目列表</a></li>

        <li><a  href="<?php  echo $this->createWebUrl('Newvote',array('rid' => $rid));?>">添加项目</a></li>
    </ul>
	<div class="category">
        <!--<button class="btn btn-success" onclick="location.href='<?php  echo $this->createWebUrl('download_tp_log',array('rid'=>$_GPC['rid']))?>'" type="button"><i class="fa fa-search"></i> 导出数据</button>-->
        <div class="panel panel-default">
                <div class="panel-body table-responsive">
                    <table class="table table-hover" >
                        <thead class="navbar-inner">
                        <tr >
                            <th style="width:80px;">排序</th>
                            <th style="width:100px;">图片</th>
                            <th style="width:100px;">项目名称</th>
                            <th style="width:200px;">项目简介</th>
                            <th style="width:120px;">投票时间</th>
                            <th style="width:80px;">投票数</th>
                            <th style="width:80px;">参与人数</th>
                            <th style="width:80px;">投票总数</th>
                            <th style="width:60px;">状态</th>
                            <th style="width:100px;">适用活动</th>
                            <th style="width:120px;">活动状态</th>
                            <th style="width:160px;">添加/查看投票</th>
                            <th style="width:150px;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <tr >
                            <td><?php  echo $row['vote_pid'];?> </td>
                            <td><img style="width: 80px;height: 80px" src="<?php  echo tomedia($row['vote_img'])?>" alt=""></td>
                            <td><?php  echo $row['vote_name'];?> </td>
                            <td><?php  echo $row['vote_description'];?></td>
                            <td><?php  echo date('Y/m/d H:i',$row['vote_starttime'])?><br>
                                <?php  echo date('Y/m/d H:i',$row['vote_endtime'])?></td>
                            <td><?php  echo $row['vote_number'];?></td>
                            <td><?php  echo $row['vote_people_times'];?></td>
                            <td><?php  echo $row['vote_all_times'];?></td>
                            <td><?php  if($row['vote_status'] == 1) { ?><span id="is_enable" class="btn btn-info is_enable" data-id="<?php  echo $row['id'];?>" title="禁用">正常</span><?php  } else { ?><span id="is_disable" class="btn btn-danger is_disable" data-id="<?php  echo $row['id'];?>" title="开启">禁用</span><?php  } ?></td>

                            <td><?php  echo $row['rulename'];?></td>
                            <td><?php  if($row['status']==0) { ?>未开始<?php  } else if($row['status']==2) { ?>已结束<?php  } else { ?><span class="btn btn-success is_stop" data-id="<?php  echo $row['id'];?>" title="强制停止">投票进行中...</span><?php  } ?></td>
                            <td>
                                <a href="<?php  echo $this->createWebUrl('Newtoupiao',array('rid' => $row['rid'],'vote_id'=>$row['id']))?>" class="btn btn-primary btn-sm"> 添加投票</a>
                                <a href="<?php  echo $this->createWebUrl('toupiaoshow', array('rid' => $row['rid'],'vote_id'=>$row['id']))?>" class="btn btn-success btn-sm"> 查看投票</a>
                            </td>
                            <td>
                                <!--<a class="btn btn-default xiangqing userinfo" href="javascript:void(0)"  data-placement="top" title="详情" id="<?php  echo $row['id'];?>"><i class="fa fa-bullseye" ></i></a>-->
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="<?php  echo $this->createWebUrl('Newvote',array('rid' => $rid,'op'=>'up','uid'=>$row['id']));?>" title="编辑项目"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('Newvote',array('rid' => $rid,'op'=>'del','uid'=>$row['id']));?>');" title="删除项目"><i class="fa fa-times"></i></a>
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
    $(".is_enable").click(function () {
        var status = $(this).data('id');
        $.post("<?php  echo $this->createWebUrl('change_votestatus',array('rid'=>$rid,'op'=>'is_enable'))?>", {status:status}, function(data) {
            if(data.success==1){
                location.reload();
            }else {
                alert(data.msg)
            }
        },"json");
    })
    $(".is_disable").click(function () {
        var status = $(this).data('id');
        $.post("<?php  echo $this->createWebUrl('change_votestatus',array('rid'=>$rid,'op'=>'is_disable'))?>", {status:status}, function(data) {
            if(data.success==1){
                location.reload();
            }else {
                alert(data.msg)
            }
        },"json");
    })
    $(".is_stop").click(function () {
        var status = $(this).data('id');
        $.post("<?php  echo $this->createWebUrl('change_votestatus',array('rid'=>$rid,'op'=>'is_stop'))?>", {status:status}, function(data) {
            if(data.success==1){
                location.reload();
            }else {
                alert(data.msg)
            }
        },"json");
    })
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