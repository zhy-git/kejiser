<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="clearfix">
	<ul class="nav nav-tabs">
		<li><a href="javascript:history.go(-1)" class="btn btn-primary">返回用户列表</a></li>
	</ul>
	<div class="clearfix">
		<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="form2">
			<div class="panel panel-default" id="step1">
				<div class="panel-body">

					<div class="form-group">
						<label class="col-md-2 control-label">用户昵称：</label>
						<div class="col-md-4">
							<?php  echo $info['nickname'];?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">OpenID：</label>
						<div class="col-md-4">
							<?php  echo $info['openid'];?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">性别：</label>
						<div class="col-md-4">
							<?php  if($info['gender']==1) { ?>男<?php  } else { ?>女<?php  } ?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">地址：</label>
						<div class="col-md-4">
							<?php  echo $info['country'];?>-<?php  echo $info['province'];?>-<?php  echo $info['city'];?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">加入时间：</label>
						<div class="col-md-4">
							<?php  echo date('Y-m-d H:i',$info['createtime'])?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">用户等级：</label>
						<div class="col-md-4">
							<select id="level">
							<?php  if(is_array($fx)) { foreach($fx as $f) { ?>
								<option value="<?php  echo $f['id'];?>" <?php  if($info['level']==$f['id']) { ?>selected="selected"<?php  } ?>><?php  echo $f['name'];?></option>
							<?php  } } ?>
							</select>
							<input type="hidden" id="uid" value="<?php  echo $info['uid'];?>">
							<button type="button" class="btn btn-primary changelevel">修改</button>
						</div>
					</div>
				</div>

			</div>

		</form>

	</div>
</div>
<script type="text/javascript">
$(".changelevel").click(function(){

	var level = $("#level").val();
	var id = $("#uid").val();
    $.ajax({
	    type: "POST",
	    url: "<?php  echo $this->createWebUrl('Userdo',array('act'=>'changelevel'));php?>",
	    data: {id:id,level:level},
	    dataType: "json",
	    success: function(data){
	    	alert('编辑成功');
	    }
	});
})



</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>