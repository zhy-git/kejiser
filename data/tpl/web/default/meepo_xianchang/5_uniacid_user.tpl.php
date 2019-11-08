<?php defined('IN_IA') or exit('Access Denied');?><div class="clearfix user-browser">
	<div class="form-horizontal">
		<div class="form-group">
			<label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">公众号名称</label>
			<div class="col-xs-10 col-md-10 col-lg-10">
				<div class="input-group">
					<input id="keyword" type="text" class="form-control" value="" />
					<div class="input-group-btn">
						<button class="btn btn-default pull-right" onclick="uniacidMember.pIndex=1;uniacidMember.query();"><i class="fa fa-search"></i> 搜索</button>
					</div>
				</div>
			</div>
		</div>
		<table class="table tb" style="min-width:568px;">
			<thead>
				<tr>
					<th style="width: 50%;text-align:center">公众号名称</th>
					<th style="width: 50%;text-align:center">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php  if(is_array($uniacids)) { foreach($uniacids as $row) { ?>
				<tr>
					<td class='text-center'><?php  echo $row['name'];?></td>
					<td class='text-center'><a class="btn btn-default js-btn-select" data-uniacid="<?php  echo $row['uniacid'];?>" data-name="<?php  echo $row['name'];?>">选取</a></td>
				</tr>
			<?php  } } ?>
			</tbody>
		</table>
		<div class="pager_box">
			<?php  echo $pager;?>
		</div>
	</div>
</div>