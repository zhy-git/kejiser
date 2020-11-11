<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../../../addons/'.MODULE.'/template/web/common/myheader', TEMPLATE_INCLUDEPATH)) : (include template('../../../addons/'.MODULE.'/template/web/common/myheader', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
	.input-group .input-group-btn .btn{
         height: 34px;
	}
	th,td{
		border-right: 1px solid #e7e7e7;
	}
</style>

	<?php  if($_GPC['op'] == 'add' || $_GPC['op'] == 'edit') { ?>
		<form method="post" action="" style="margin-left: 100px">
			<div class="frm_control_group">
				<label for="" class="frm_label"></label>
				<div class="frm_controls">
				</div>
			</div>
			<div class="frm_control_group">
				<label for="" class="frm_label">视频标题</label>
				<div class="frm_controls msg">
					<span class="frm_textarea_box textarea_60px">
						<textarea  name="title" class="frm_textarea" rows="6" placeholder=""><?php  echo $info['title'];?></textarea>
					</span>
				</div>
			</div>
			<div class="frm_control_group">
				<label for="" class="frm_label">排序序号</label>
				<div class="frm_controls msg">
					<span class="frm_input_box">
						<input type="text" class="frm_input"  name="number" value="<?php  echo $info['number'];?>">
					</span>
					<p class="frm_tips">填入数字，越大越前</p>
				</div>
			</div>
			<div class="frm_control_group single_img_upload">
				<label for="" class="frm_label">封面图片</label>
				<div class="frm_controls">
					<?php  echo  WebCommon::tpl_form_field_image('img',$info['img'])?>
					<p class="frm_tips">建议设置正方形图片，建议尺寸200X180（像素）</p>
				</div>
			</div>
			<div class="frm_control_group" >
	  			<label for="" class="frm_label">视频类型</label>
	   			<div class="frm_controls">
	    			<label class="frm_radio_label show_item hide_item" showitem=".type1" hideitem=".type2">
	    				<i class="icon_radio"></i>
	    				<span class="lbl_content">上传视频</span>
	    				<input type="radio" name="type" value="0" class="frm_radio" <?php  if($info['type'] == 0) { ?>checked="checked"<?php  } ?> />
	    			</label>
	    			<label class="frm_radio_label show_item hide_item" showitem=".type2" hideitem=".type1">
	    				<i class="icon_radio"></i>
	    				<span class="lbl_content">视频链接</span>
	    				<input type="radio" name="type" value="1" class="frm_radio" <?php  if($info['type'] == 1) { ?>checked="checked"<?php  } ?> /> 
	    			</label>	    			
	   			</div>
	  		</div>
	  		<div class="type1 hideitem" <?php  if($info['type'] == 0) { ?>style="display:block"<?php  } ?>>
				<div class="frm_control_group">
					<label for="" class="frm_label">上传视频</label>
					<div class="frm_controls msg">
						<span class="frm_input_box" style="border:0">
							<?php  echo  tpl_form_field_video('author',$info['author'])?>
						</span>
					</div>
				</div>				
				<div class="frm_control_group">
					<label for="" class="frm_label">发布时间</label>
					<div class="frm_controls">
						<?php  echo tpl_form_field_date('time', $info['time'], false)?>
					</div>
				</div>		
				<div class="frm_control_group textarea_item">
					<label for="" class="frm_label">视频描述</label>
					<div class="frm_controls">
						<?php  echo Util::tpl_ueditor('content', htmlspecialchars_decode($info['content']));?>
						<span class="frm_tips">提示：请不要设置视频、超链接、表情等特殊内容，因为小程序无法解析特殊内容。</span>
					</div>

				</div>
	  		</div>
	  		<div class="type2 hideitem" <?php  if($info['type'] == 1) { ?>style="display:block"<?php  } ?>>
				<div class="frm_control_group">
					<label for="" class="frm_label">视频链接</label>
					<div class="frm_controls msg">
						<span class="frm_input_box">
							<input type="text" class="frm_input"  name="url" value="<?php  echo $info['url'];?>">
						</span>
						<p class="frm_tips">需要在小程序后台设置内将此链接的域名添加到业务域名中！！！</p>
					</div>
				</div>
	  		</div>
			<div class="tool_bar">
				<input type="submit" name="create" class="btn btn_primary" value="确定" >
				<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
			</div>
		</form>
	
<?php  } else if($_GPC['op'] == 'list') { ?>
	<?php  if(!empty( $list )) { ?>
  	<table class="table" cellspacing="0"> 
   	<thead class="thead"> 
    	<tr> 
     		<th class="table_cell title td_col_1"> 
     			<label class="frm_checkbox_label" for="selectAll"> 
     				<i class="icon_checkbox"></i> 
     				<span class="lbl_content">id</span> 
     				<input type="checkbox" class="frm_checkbox" id="selectAll" /> 
     			</label>
     		</th>
     		<th class="table_cell tl td_col_1">视频图片</th>		
     		<th class="table_cell tl td_col_2">视频标题</th>
     		<th class="table_cell tl td_col_1">视频类型</th>
     		<th class="table_cell tl td_col_1">序号</th>	
     		<th class="table_cell tl td_col_1">创建时间</th>	
     		<th class="table_cell tr td_col_1">操作</th>
    	</tr> 
   </thead> 
   <tbody class="tbody" id="js_goods">
   <form method="post">
	   <?php  if(is_array($list)) { foreach($list as $item) { ?>
	    	<tr> 
	     		<td class="table_cell title td_col_1"> 
	      			<div class="goods_info">
	      			 	<label class="frm_checkbox_label" > 
	       					<i class="icon_checkbox"></i> 
	       					<input type="checkbox" name="checkall[]" class="frm_checkbox" value="<?php  echo $item['id'];?>" /> 
	       					<?php  echo $item['id'];?>
	       				</label>
	      			</div>
	     		</td>
	     		<td class="table_cell price tl td_col_1">
	    			<img src="<?php  echo tomedia( $item['img'] )?>" width="30px" height="30px">
	     		</td>	     		
	     		<td class="table_cell price tl td_col_2">
	    			<?php  echo $item['title'];?>
	     		</td>
	     		<td class="table_cell price tl td_col_1">
	    			<?php  if($item['type'] == 0) { ?>普通
	    			<?php  } else if($item['type'] == 1) { ?>外链
	    			<?php  } ?>
	     		</td>     		
	     		<td class="table_cell price tl td_col_1">
	    			<?php  echo $item['number'];?>
	     		</td>
	     		<td class="table_cell price tl td_col_1">
	    			<?php  echo $item['time'];?>
	     		</td>	     		     		
			    <td class="table_cell oper last_child tr opclass td_col_1" style="position: relative;">
			    	<a  href="<?php  echo self::pwUrl('site','video',array('op'=>'edit','id'=>$item['id'],'page'=>$_GPC['page']))?>" class="edit_listitem" >编辑</a>
			    	<a href="<?php  echo self::pwUrl('site','video',array('op'=>'delete','id'=>$item['id']))?>" onclick="return confirm('删除不能恢复，确定要删除吗？');">删除</a>
			    </td>
	    	</tr>
	    <?php  } } ?>
   	</tbody>
  	</table>
	<div class="bottom_page item_cell_box">
		<div class="dib tl">
     			<label class="frm_checkbox_label" for="selectAll"> 
     				<i class="icon_checkbox"></i> 
     				<span class="lbl_content">全选</span> 
     				<input type="checkbox" class="frm_checkbox" id="selectAll" /> 
     			</label>
  			<div class="filter_content dropdown_topbar"> 
		   		<div class="dropdown_menu ">
		    		<a href="javascript:;" class="btn dropdown_switch jsDropdownBt">
		    			<label class="jsBtLabel">批量操作</label>
		    			<i class="arrow"></i>
		    		</a> 
		    		<div class="dropdown_data_container jsDropdownList" > 
			     		<ul class="dropdown_data_list"> 
			      			<li class="dropdown_data_item "> 
			      				<input name="deleteall" class="alldeal_btn" value="删除所选" onclick="return confirm('确定要删除选择的吗？');" type="submit">
			      			</li>			      			
			    		</ul> 
		    		</div> 
		   		</div>
  			</div>
		</div>
		<div class="tr dib item_cell_flex">
			<?php  echo $pager;?>
		</div>
	</div>
		<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
	</form>
    <?php  } else { ?>
    	<div class="no_data">没有找到数据</div>
    <?php  } ?>

<?php  } ?>
	
	
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../../../addons/'.MODULE.'/template/web/common/myfooter', TEMPLATE_INCLUDEPATH)) : (include template('../../../addons/'.MODULE.'/template/web/common/myfooter', TEMPLATE_INCLUDEPATH));?>