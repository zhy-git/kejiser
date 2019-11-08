<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="clearfix">
<ul class="nav nav-tabs">
	<li class="active"><a href="<?php  echo $this->createWebUrl('banner')?>">幻灯片列表</a></li>
	<li><a href="<?php  echo $this->createWebUrl('banner_post')?>">添加幻灯片</a></li>
</ul>
<style>
	td{vertical-align: middle!important;}
	td>i{cursor:pointer; display:inline-block; width:100%; height:100%; color:#428bca;}
	.category-caret{display:inline-block; width:20px; margin: 0 10px; text-align:center; cursor:pointer; color:#d9534f;}
	.add.add_level0{cursor:pointer;}
</style>
<div class="clearfixcon">
	<form action="" method="post">
		<div class="panel panel-default">
			<div class="panel-body table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th >ID</th>
							<th style="width:20%;">标题</th>
							<th style="width:20%;">图片</th>
							<th style="text-align: center">状态</th>
							<th style="text-align: center">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php  if(is_array($list)) { foreach($list as $index => $item) { ?>
						<tr>
							<td class="text-left"><?php  echo $item['id'];?></td>
							<td class="text-left"><?php  echo $item['title'];?></td>
							<td class="text-center">
								<img width="200" height="80" src="<?php  echo tomedia($item['banner']);?>" data-url="<?php  echo tomedia($item['banner']);?>" class="scrollLoading" style="float:left;" onerror="this.src='/web/resource/images/nopic-small.jpg'">
							</td>
							<td class="text-center">
								<?php  if(empty($item['status'])) { ?>
								<span class="label label-success">显示</span>
								<?php  } else { ?>
								<span class="label label-default">隐藏</span>
								<?php  } ?>
							</td>
							<td class="text-center">
								<a href="<?php  echo $this->createWebUrl('banner_post',array('id'=>$item['id']))?>" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="修改"><i class="fa fa-edit"></i></a>

								<a href="javascript:if(confirm('确定要删除吗?'))location='<?php  echo $this->createWebUrl('banner_post',array('act'=>'del','id'=>$item['id']))?>'" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="删除"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php  } } ?>
					</tbody>
				</table>
				<?php  echo $page;?> 
				<div style="margin-top: 20px;">
	                <a class="btn btn-danger" href="<?php  echo $this->createWebUrl('banner_post',array('act'=>'init'))?>" onclick="return confirm('确认加载初始数据吗？');return false;" title="初始化">加载初始数据</a>
	            </div>
			</div>
		</div>
	</form>
	</div>
</div>
<script type="text/javascript">
$(".displayorder").bind('input propertychange',function(){
	$.ajax({
	    url:"<?php  echo $this->createWebUrl('advert_post',array('act'=>'display'))?>",
	    type:'POST',
	    async:true,
	    data:{
	        displayorder:$(this).val(),id:$(this).attr('data-id')
	    },
	    timeout:5000,
	    dataType:'json',
	    success:function(data){
	        //alert(data.message);
	    }
	})
})
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>