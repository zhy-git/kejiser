<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?> <?php  load()->func('tpl')?>

<div class="main">
	<ul class="nav nav-tabs" id="myTab">
		<li class="active">
			<a href="#tab_field"><?php  echo $tag['tag_name'];?>表单设置</a>
		</li>
	</ul>
	<form class="form-horizontal form" action="" method="post" enctype="multipart/form-data">
		<div class="panel panel-default">
			<div class="panel-body table-responsive" >
				<div class="tab-content" >
					<div class="tab-pane active" >
						<div class="panel panel-success" style="border:1px solid #ddd;">
							
							<div class="panel-body table-responsive">
								<div class="alert-new">
									<table class="table table-hover">
										<thead>
											<tr>
												<th style="width:25%;">字段名称</th>
												<th style="width:20%;">排序</th>
												<th style="width:20%;">类型</th>
												<th style="width:25%;">描述</th>
												<th style="width:25%;">必填项</th>
												<th style="width:10%;">操作</th>
											</tr>
											
										</thead>
										
										<tbody id="re-items">
											<tr>
												<td><input type="text" class="form-control" name="real_name" value="姓名" /disabled></td>
												<td><input type="text" class="form-control" name="displayorder1[]" value="100"  /disabled></td>
												<td>
													<select name="field_type1[]" class="selected" style="width:100px" > 
														<option value="text" >文本</option>	
													</select>
												</td>
												
												<td><input type="text" class="form-control" name="desc1[]" value="请输入您的真实姓名" disabled /></td> 
												<td>
													<select name="is_ness1[]" class="selected" style="width:100px" > 
														<option value="2" >是</option>	
													</select>
												</td>
												<td></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control" name="field_name1[]" value="电话" /disabled></td>
												<td><input type="text" class="form-control" name="displayorder1[]" value="99"  / disabled></td>
												<td>
													<select name="field_type1[]" style="width:100px" >
														<option value="mobile" >手机号</option>
													</select>
												</td>
												
												<td><input type="text" class="form-control" name="desc1[]" value="请输入您的手机号"  /disabled></td> 
												<td>
													<select name="is_ness1[]" class="selected" style="width:100px" > 
														<option value="2" >是</option>	
													</select>
												</td>
												<td></td>
											</tr>
											
											<!-- <tr>
												<td><input type="text" class="form-control" name="field_name1[]" value="支付宝账号" /disabled></td>
												<td><input type="text" class="form-control" name="displayorder1[]" value="98"  /disabled></td>
												<td>
													<select name="field_type1[]" class="selected" style="width:100px" > 
														<option value="text" >文本</option>	
													</select>
												</td>
												
												<td><input type="text" class="form-control" name="desc1[]" value="请输入您的支付宝账号"  /disabled></td> 
												<td>
													<select name="is_ness1[]" class="selected" style="width:100px" > 
														<option value="2" >是</option>	
														<option value="1" >否</option>	
													</select>
												</td>
												<td></td>
											</tr> -->
										
											<?php  if(!empty($field_list)) { ?>
											<?php  if(is_array($field_list)) { foreach($field_list as $k => $val) { ?>
												<tr>
												<td><input type="hidden" value="<?php  echo $val['id'];?>" name="field_id[]">
												<input type="text" class="form-control" name="field_name[]" value="<?php  echo $val['field_name'];?>"/></td>
												<td><input type="text" class="form-control" name="displayorder[]" value="<?php  echo $val['displayorder'];?>" /></td>
												<td>
													<select name="field_type[]" style="width:100px">
														<option value="num" <?php  if($val['field_type']=='num') { ?>selected<?php  } ?>>数字</option>
														<option value="text" <?php  if($val['field_type']=='text') { ?>selected<?php  } ?>>文本</option>
														<option value="img" <?php  if($val['field_type']=='img') { ?>selected<?php  } ?>>图片</option>
														<option value="mobile" <?php  if($val['field_type']=='mobile') { ?>selected<?php  } ?>>手机号</option>
													</select>
												</td>
												
												 <td><input type="text" class="form-control" name="desc[]" value="<?php  echo $val['desc'];?>" /></td>
												<td>
													<select name="is_ness[]" style="width:100px">
														<option value="2" <?php  if($val['is_ness']=='2') { ?>selected<?php  } ?>>是</option>
														<option value="1" <?php  if($val['is_ness']=='1') { ?>selected<?php  } ?>>否</option>
													</select>
												</td>
												<td><a href="javascript:;" data-toggle="tooltip" data-placement="bottom" class="btn btn-default btn-sm" onclick="del(this)" title="删除此字段" data='<?php  echo $val['id'];?>'><i class="fa fa-times"></i></a></td>
												
											</tr>
											<?php  } } ?>
											<?php  } ?>
										</tbody>

									</table>
								</div>
							</div>
						</div>

						<div class="alert alert-block alert-new">

							<span class="help-block"><a href="javascript:;" class="btn btn-success" onclick="addItem();" style="background: #428bca;border: 1px solid #428bca;"><i class="fa fa-plus" title="添加自定义字段"></i> 添加自定义字段</a> </span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
		</script>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			<input type="hidden" name="tag_id" id="tag_id" value="<?php  echo $tag_id;?>" />
			<input type="hidden" name="tag_name" value="<?php  echo $tag['tag_name'];?>" />
		</div>
	</form>
</div>
<script type="text/javascript">
	function addItem() {

		var html = '' +
			'<tr>' +
			'<td><input name="field_name[]" type="text" class="form-control" /></td>' +
			'<td><input type="text" name="displayorder[]" class="form-control" /></td>' +
			'<td><select name="field_type[]" style="width:100px"><option value="num">数字</option><option value="text">文本</option><option value="img">图片</option><option value="mobile" >手机号</option></select></td>'+
			'<td><input name="desc[]" type="text" class="form-control" /></td>' +
			
				'<td><select name="is_ness[]" style="width:100px"><option value="2">是</option><option value="1">否</option></select></td>'+
			'<td>' +
			'<a href="javascript:;" data-toggle="tooltip" data-placement="bottom" class="btn btn-default btn-sm" onclick="deleteItem(this)"  title="删除此项目"><i class="fa fa-times"></i></a>' +
			'</td>' +
			'</tr>';
		$('#re-items').append(html);
	}
	function del(obj){
		var del_id=$(obj).attr('data');
		$.post(location.href,{'type':'del','del_id':del_id},function(res){
			location.reload();
		})
	}
	function deleteItem(o) {
		$(o).parent().parent().remove();
	}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>