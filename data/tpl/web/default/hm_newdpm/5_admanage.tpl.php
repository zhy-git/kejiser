<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
		<li<?php  if($_GPC['do'] == 'admanage' || $_GPC['do'] == '' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('admanage');?>">广告管理</a></li>
        <li<?php  if($_GPC['do'] == 'post') { ?> class="active"<?php  } ?>><a class="btn-lg" href="<?php  echo $this->createWebUrl('newad');?>">添加广告</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body table-responsive">
		<table class="table table-hover" style="table-layout: auto;">
			<thead class="navbar-inner">
				<tr>
					<th class='with-checkbox' style="width:50px;">
						<input type="checkbox" class="check_all" />
					</th>
					<th style="width:150px;">广告图片</th>
					<th style="width:300px;">广告标题</th>
					<th style="width:300px;">广告简介</th>
					<th style="width:220px;">广告链接</th>
					<th style="width:220px;">适用规则</th>
					<th style="width:120px;">操作</th>
				</tr>
			</thead>
			<tbody>
                    <?php  if(is_array($addad)) { foreach($addad as $row) { ?>
				<tr>
					<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $row['id'];?>"></td>
					<td><img src="<?php  echo tomedia($row['adlogo'])?>" style="width: 100px;"></td>
					<td><?php  echo $row['adtitle'];?></td>
					<td><?php  echo $row['addetails'];?></td>
					<td><?php  echo $row['adlink'];?></td>
					<td><?php  echo $row['rulename'];?></td>
					<td>
						<a class="btn btn-default bianji" href="<?php  echo $this->createWebUrl('newad',array('uid'=>$row['id'],'op'=>'up'));?>" data-placement="top" title="编辑" id="<?php  echo $row['id'];?>"><i class="fa fa-edit" ></i></a>
                        <a class="btn btn-default" data-toggle="tooltip" data-placement="top" href="#" onclick="drop_confirm('您确定要删除吗?', '<?php  echo $this->createWebUrl('delete9',array('id'=>$row['id']))?>');" title="删除"><i class="fa fa-times"></i></a>
                  	</td>
				</tr>
                <?php  } } ?>
				<tr>
					<td colspan="7">
						<input type="button" class="btn btn-primary" name="deleteall" value="删除选择的" />
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>

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
	$(".quedingadd").click(function(){
		var rulename=$("#rulename").find("option:selected").text();
		var rid=$("#rulename").find("option:selected").val();
		var isstartusing = $('input[name="isstartusing"]:checked').val();
		var most_num_times = $("#most_num_times").val();
		if (most_num_times == ''|| most_num_times=='0') {
			alert('粉丝最多领取数量必须大于等于1,小于等于微信后台设置')
			return
		}
		var datestart = $("input[name='datelimit[start]']").val();
		var dateend = $("input[name='datelimit[end]']").val();


		var cardid = $("#cardid").val();
		if (cardid == '') {
			$("#cardid").val("请输入卡券ID");
			return
		}
		var cardname = $("#cardname").val();
		if (cardname == '') {
			$("#cardname").val("请输入卡券名称");
			return
		}
		var cardnum = $("#cardnum").val();
		if (cardnum == '') {
			$("#cardnum").val("请输入卡券数量");
			return
		}

		var submitData = {
			rid:rid,
			rulename:rulename,
			cardname: cardname,
			cardid: cardid,
			cardnum: cardnum,
			isstartusing: isstartusing,
			most_num_times: most_num_times,
			datestart:datestart,
			dateend:dateend,
		};

		$.post('<?php  echo $this->createWebUrl('fromcardmanage')?>',submitData,function(data){
			if (data.success == true) {
				//$('#myModal').modal('hide');
				//alert(data.msg)
				location.href="";
				return
			} else {
				alert(data.msg)
				return
			}

		},'json');
	})


	// require(['jquery', 'util'], function($, u){

	// 	$('.bianji').click(function(){
	// 		var uid = parseInt($(this).attr('id'));
	// 		$.get("<?php  echo url('site/entry/chengadd',array('m' => 'haoman_qkq','rid' => $rid))?>&uid=" + uid, function(data){
	// 			if(data == 'dataerr') {
	// 				u.message('参数错误', '', 'error');
	// 			} else {

	// 				var obj = u.dialog('编辑微信卡券', data,$('#queding').html());
	// 				obj.modal('show');

	// 			}

	// 		});

	// 	})


	// });

	function abc (){
		var id = $("#rowid").val();
		var rulename=$("#rulename2").find("option:selected").text();
		var rid=$("#rulename2").find("option:selected").val();
		var isstartusing = $('input[name="isstartusing2"]:checked').val();
		var most_num_times = $("#most_num_times2").val();
		if (most_num_times == ''|| most_num_times=='0') {
			alert('粉丝最多领取数量必须大于等于1,小于等于微信后台设置')
			return
		}
		var datestart = $("input[name='datelimit2[start]']").val();
		var dateend = $("input[name='datelimit2[end]']").val();

			var cardid = $("#cardid2").val();

		if (cardid == '') {
			$("#cardid2").val("请输入卡券ID");
			return
		}
		var cardname = $("#cardname2").val();
		if (cardname == '') {
			$("#cardname2").val("请输入卡券名称");
			return
		}
		var cardnum = $("#cardnum2").val();
		if (cardnum == '') {
			$("#cardnum2").val("请输入卡券数量");
			return
		}

		var submitData = {
			id:id,
			rid:rid,
			rulename:rulename,
			cardname: cardname,
			cardid: cardid,
			cardnum: cardnum,
			isstartusing: isstartusing,
			most_num_times: most_num_times,
			datestart:datestart,
			dateend:dateend,
		};

		$.post('<?php  echo $this->createWebUrl('fromcardmanage2')?>',submitData,function(data){
			if (data.success == true) {
				//$('#myModal').modal('hide');
				//alert(data.msg)
				location.href="";
				return
			} else {
				alert(data.msg)
				return
			}

		},'json');
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
		$.post('<?php  echo $this->createWebUrl('deleteAllad')?>', {idArr:id},function(data){
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
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>