<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="main">
	<ul class="nav nav-tabs">
		<li class="active"><a href="<?php  echo $this->createWebUrl('Messagelist',array('rid'=>$rid));?>">消息管理</a></li>
         <li><a class="btn-lg" href="<?php  echo $this->createWebUrl('addmessages',array('rid'=>$rid));?>">添加消息</a></li>
	</ul>
		<button class="btn btn-success" style="display: block" onclick="location.href='<?php  echo $this->createWebUrl('Deletemessage',array('rid'=>$rid,'op'=>'download_messags'))?>'" type="button">一键导出全部消息</button>

	<div class="panel panel-default">
		<div class="panel-heading"><button id="clear_allmessages" class="btn btn-danger" type="button" >一键清除全部消息
		</div>
		<div class="panel-body table-responsive">
		<table class="table table-hover" >
			<thead class="navbar-inner">
				<tr>
					<th class='with-checkbox' style="width:30px;">
						<input type="checkbox" class="check_all" />
					</th>
					<th style="width:100px;">序号</th>
					<th style="width:80px;">头像</th>
					<th style="width:120px;">发言人</th>
					<th style="width:300px;">内容/打赏对象</th>
					<th style="width:120px;">图片</th>
					<th style="width:80px;">状态</th>
					<th style="width:80px;">类型</th>
					<th style="width:80px;">霸屏时间</th>
					<th style="width:150px;">时间</th>
					<th style="width:120px;">操作</th>
				</tr>
			</thead>
			<tbody>
                    <?php  if(is_array($list)) { foreach($list as $row) { ?>
				<tr>
					<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $row['id'];?>"></td>
					<td><?php  echo $row['id'];?></td>
					<td><img style="width: 75px;height: 75px" src="<?php  echo tomedia($row['avatar'])?>"></td>
					<td><?php  echo $row['nickname'];?></td>
					<td style="white-space: normal;"><?php  echo $row['word'];?></td>
					<td><?php  if(!empty($row['wordimg'])) { ?><a href="<?php  echo tomedia($row['wordimg'])?>" target="_blank"><img src="<?php  echo tomedia($row['wordimg'])?>" style="width: 100px;"></a><?php  } else { ?>无图像<?php  } ?></td>
					<td><?php  if($row['status']==0) { ?><span style="color: #FF0000">未审核</span>	<?php  } else { ?>已审核<?php  } ?></td>
					<td><?php  if($row['is_xy']==1) { ?><span style="color: #FF0000">许愿</span><?php  } else if($row['is_bp']==1&&$row['gift']==0) { ?><span style="color: #0000ff">霸屏</span><?php  } else if($row['type']==2) { ?><span style="color: #ff00ff">打赏</span><?php  } else { ?>普通消息<?php  } ?></td>
					<td><?php  if(!empty($row['bptime'])) { ?><?php  echo $row['bptime'];?>秒<?php  } else { ?><?php  } ?></td>
						<td><?php  echo date('Y/m/d H:i',$row['createtime'])?></td>
					<td>
						<?php  if($row['status']==0) { ?>
						<a class="btn btn-default bianji" href="<?php  echo $this->createWebUrl('cklistmessage',array('id'=>$row['id']))?>" data-placement="top" title="审核" id="<?php  echo $row['id'];?>"><i class="fa fa-edit" ></i></a>
                       <?php  } ?>
                        <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('Deletemessage',array('id'=>$row['id']))?>');" title="删除"><i class="fa fa-times"></i></a>
                  	</td>
				</tr>
                <?php  } } ?>
				<tr>
					<td colspan="2">
						<input type="button" class="btn btn-primary" name="deleteall" value="批量审核" />
					</td>
					<td colspan="2">
						<input type="button" class="btn btn-danger" name="deleteall_messg" value="批量删除" />
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
<div style="text-align:center;"><?php  echo $pager;?></div>
</div>
<div id="queding" class="hide">
	<span class="pull-right btn btn-primary" id="chengaddd" onclick="abc()">确定</span>
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
			alert('请选择要审核的记录!');
			return false;
		}
        if( confirm("确认要审核选择的记录?")){
		var id = new Array();
		check.each(function(i){
			id[i] = $(this).val();
		});
		$.post('<?php  echo $this->createWebUrl('Allmessages')?>', {idArr:id},function(data){
			if (data.flag ==1)
			{	
				alert(data.msg);
				location.reload();
			} else {
				alert(data.msg);
			}


		},'json');
		}

	});
	$("input[name=deleteall_messg]").click(function(){
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
			$.post('<?php  echo $this->createWebUrl('Del_allmessages')?>', {idArr:id},function(data){
				if (data.flag ==1)
				{
					alert(data.msg);
					location.reload();
				} else {
					alert(data.msg);
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
$('#clear_allmessages').click(function(){
    var b = confirm("确定要删除所有消息记录！");
    if( b == true){
        $.post("<?php  echo $this->createWebUrl('Deletemessage',array('rid'=>$rid,'op'=>'deleteall_mess'))?>", function(data) {

        },"json");
    }
})
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>