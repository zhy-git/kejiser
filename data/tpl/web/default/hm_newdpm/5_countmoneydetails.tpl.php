<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">数钱场次详情</a></li>
        <li><a  href="<?php  echo $this->createWebUrl('countmoneyshow',array('rid' => $rid));?>">场次列表</a></li>
    </ul>
	<div class="category">
	<div class="panel panel-default">
                <div class="panel-body table-responsive">
                    <table class="table table-hover" >
                        <thead class="navbar-inner">
                        <tr>
                            <th class='with-checkbox' style="width:30px;">
                                <input type="checkbox" class="check_all" />
                            </th>
                            <th style="width:100px;">场次</th>
                            <th style="width:100px;">头像</th>
                            <th style="width:120px;">昵称</th>
                            <th style="width:220px;">openid</th>
                            <th style="width:200px;">数的次数</th>
                            <th style="width:100px;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <tr>
                            <td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $row['id'];?>"></td>
                            <td>第<?php  echo $row['pici'];?>场</td>
                            <td>
                                <img style="width: 80px;height: 80px" src="<?php  echo tomedia($row['avatar'])?>" alt="">
                            </td>
                            <td><?php  echo $row['nickname'];?></td>
                            <td><?php  echo $row['from_user'];?></td>
                            <td><?php  echo $row['count'];?></td>
                            <td>
                                <?php  if($row['is_back']!= 0) { ?>
                                <a href="<?php  echo $this->createWebUrl('del_countmoney',array('is_back'=>0,'yyyid'=>$row['id'],'op'=>'get_back'))?>" class="btn btn-primary btn-sm lahei" style="width:60px;">恢复</a>
                                <?php  } else { ?>
                                <a href="<?php  echo $this->createWebUrl('del_countmoney',array('is_back'=>1,'yyyid'=>$row['id'],'op'=>'get_back'))?>" class="btn btn-success btn-sm lahei" style="width:60px;">拉黑</a>
                                <?php  } ?>
                            </td>
                        </tr>
                        <?php  } } ?>
                        <tr>
                            <td colspan="2">
                                <input type="button" class="btn btn-primary" name="lahei_fans" value="批量拉黑" />
                            </td>
                        </tr>
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
        $("input[name=lahei_fans]").click(function(){
            var check = $("input:checked");

            if(check.length<2){
                alert('请选择要拉黑的记录!');
                return false;
            }
            if( confirm("确认要拉黑选择的记录?")){
                var id = new Array();
                check.each(function(i){
                    id[i] = $(this).val();
                });
                $.post('<?php  echo $this->createWebUrl('del_countmoney',array('op'=>'all_get_back'))?>', {idArr:id},function(data){
                    if (data.flag ==1)
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