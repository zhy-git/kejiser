<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../../../addons/'.MODULE.'/template/web/common/myheader', TEMPLATE_INCLUDEPATH)) : (include template('../../../addons/'.MODULE.'/template/web/common/myheader', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
	th,td{border-right: 1px solid #e7e7e7;}
</style>

	<?php  if($_GPC['op'] == 'add' || $_GPC['op'] == 'edit') { ?>
		<form method="post" action="" style="margin-left: 100px">
			<div class="frm_control_group">
				<label for="" class="frm_label"></label>
				<div class="frm_controls">
				</div>
			</div>
			<div class="frm_control_group">
				<label for="" class="frm_label">文章标题</label>
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
			<div class="frm_control_group" >
	  			<label for="" class="frm_label">所属分类</label>
	   			<div class="frm_controls">
		  			<div class="filter_content dropdown_topbar"> 
				   		<div class="dropdown_menu ">
				    		<a href="javascript:;" class="btn dropdown_switch jsDropdownBt width_200">
				    			<label class="jsBtLabel">
				    				<?php  if(is_array($artsort)) { foreach($artsort as $item) { ?>
				    					<?php  if($item['id'] == $info['sortid']) { ?>
				    						<?php  echo $item['name'];?>
				    					<?php  } ?>
				    				<?php  } } ?>

				    			</label>
				    			<i class="arrow"></i>
				    		</a> 
				    		<div class="dropdown_data_container jsDropdownList width_200" > 
					     		<ul class="dropdown_data_list">
					     			<?php  if(is_array($artsort)) { foreach($artsort as $item) { ?>
					      				<li class="dropdown_data_item ">
					      					<a href="javascript:;" id="<?php  echo $item['id'];?>" class="select_item">
					      					  <?php  if($item['level'] == 0) { ?>
	                                          <?php  } else { ?>
						      					&nbsp;&nbsp;&nbsp;|---
	                                          <?php  } ?>
	                                          <?php  echo $item['name'];?>
					      					</a> 
					      				</li> 
					      			<?php  } } ?>
					    		</ul>
				    		</div> 
				    		<input type="hidden" name="sortid" value="<?php  echo $info['sortid'];?>">
				   		</div>
		  			</div>
	   			</div>
	  		</div>
			<div class="frm_control_group single_img_upload">
				<label for="" class="frm_label">封面图标</label>
				<div class="frm_controls">
					<?php  echo  WebCommon::tpl_form_field_image('img',$info['img'])?>
					<p class="frm_tips">建议设置正方形图片，建议尺寸200X180（像素）</p>
				</div>
			</div>
			<div class="frm_control_group" >
	  			<label for="" class="frm_label">文章类型</label>
	   			<div class="frm_controls">
	    			<label class="frm_radio_label show_item hide_item" showitem=".type1" hideitem=".type2">
	    				<i class="icon_radio"></i>
	    				<span class="lbl_content">自己添加内容</span>
	    				<input type="radio" name="type" value="0" class="frm_radio" <?php  if($info['type'] == 0) { ?>checked="checked"<?php  } ?> />
	    			</label>
	    			<label class="frm_radio_label show_item hide_item" showitem=".type2" hideitem=".type1">
	    				<i class="icon_radio"></i>
	    				<span class="lbl_content">跳转网页外链</span>
	    				<input type="radio" name="type" value="1" class="frm_radio" <?php  if($info['type'] == 1) { ?>checked="checked"<?php  } ?> /> 
	    			</label>	    			
	   			</div>
	  		</div>
	  		<div class="type1 hideitem" <?php  if($info['type'] == 0) { ?>style="display:block"<?php  } ?>>
				<div class="frm_control_group">
					<label for="" class="frm_label">文章作者</label>
					<div class="frm_controls msg">
						<span class="frm_input_box">
							<input type="text" class="frm_input"  name="author" value="<?php  echo $info['author'];?>">
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
					<label for="" class="frm_label">文章内容</label>
					<div class="frm_controls">
						<?php  echo Util::tpl_ueditor('content', htmlspecialchars_decode($info['content']));?>
						<span class="frm_tips">提示：请不要设置视频、超链接、表情等特殊内容，因为小程序无法解析特殊内容。</span>
					</div>

				</div>
	  		</div>
	  		<div class="type2 hideitem" <?php  if($info['type'] == 1) { ?>style="display:block"<?php  } ?>>
				<div class="frm_control_group">
					<label for="" class="frm_label">文章网页链接</label>
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
	<style>
	th,td{border-right: 1px solid #e7e7e7;}
	.el-button--primary {
    color: #fff;
    background-color: #409eff;
    border-color: #409eff;
    }
    .el-input__inner {
    -webkit-appearance: none;
    background-color: #fff;
    background-image: none;
    border-radius: 4px;
    border: 1px solid #dcdfe6;
    box-sizing: border-box;
    color: #606266;
    display: inline-block;
    font-size: inherit;
    height: 34px;
    /*line-height: 40px;*/
    outline: 0;
    padding: 0 15px;
    -webkit-transition: border-color .2s cubic-bezier(.645,.045,.355,1);
    transition: border-color .2s cubic-bezier(.645,.045,.355,1);
  
}
.el-button {
    display: inline-block;
    line-height: 1;
    white-space: nowrap;
    cursor: pointer;
    background: #fff;
    border: 1px solid #dcdfe6;
    color: #606266;
    -webkit-appearance: none;
    text-align: center;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    outline: 0;
    margin: 0;
    -webkit-transition: .1s;
    transition: .1s;
    font-weight: 500;
    padding: 9px 20px;
    font-size: 14px;
    border-radius: 4px;
}
.el-button--primary {
    color: #fff;
    background-color: #409eff;
    border-color: #409eff;
}
</style>
	<div  style="padding:10px 0px 10px 0px;overflow: hidden;">
    	  <form  method="post" action="">
    	  	<div class="el-form-item el-form-item--default">
    	  		<div class="el-form-item__content">
    	  			<div style="line-height:40px;color: #606266;height: 40px;display: inline-block; font-size: 20px;margin-right: 10px">搜索：</div>
    	  			<input type="hidden" name="op" value="list" />
    	  			<select name="artsortid" class="el-input__inner" style="width:231px">
    	  				<option value ="0">按分类搜索</option>
    	  				<?php  if(is_array($artsort)) { foreach($artsort as $item) { ?>
    	  				<option value ="<?php  echo $item['id'];?>">				
                          <?php  if($item['level'] == 0) { ?>
                          <?php  } else { ?>
	      					&nbsp;&nbsp;&nbsp;|---
                          <?php  } ?>
                         <?php  echo $item['name'];?>
                         </option>			
					     <?php  } } ?>
    	  			</select>
    	  			<input type="text" name="title" placeholder="文章标题" class="el-input__inner" style="margin-right:10px;">
    	  			<button  type="submit" class="el-button el-button--primary el-button--mini" ><i class="el-icon-search"></i><span>查询</span></button>
    	  			<button  type="reset" class="el-button  el-button--mini"><span>重置</span></button>
    	  		</div>
    	  	</div>	
    	   </form>
    </div>
	
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
     		<th class="table_cell tl td_col_1">图片</th>		
     		<th class="table_cell tl td_col_2">标题</th>
     		<th class="table_cell tl td_col_1">分类</th>
     		<th class="table_cell tl td_col_1">类型</th>
     		<th class="table_cell tl td_col_1">序号</th>
     		<th class="table_cell t1 td_col_1">创建时间</th>
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
	     			<?php  if(empty($item['img'])) { ?>
	     			<?php  } else { ?>
	    			<img src="<?php  echo tomedia( $item['img'] )?>" width="30px" height="30px">
	     			<?php  } ?>

	     		</td>	     		
	     		<td class="table_cell price tl td_col_2">
	    			<?php  echo $item['title'];?>
	     		</td>
	     		<td class="table_cell price tl td_col_1">
	    			<?php  if(is_array($artsort)) { foreach($artsort as $in) { ?>
	    				<?php  if($in['id'] == $item['sortid']) { ?> <?php  echo $in['name'];?> <?php  } ?>
	    			<?php  } } ?>
	     		</td>
	     		<td class="table_cell price tl td_col_1">
	    			<?php  if($item['type'] == 0) { ?>普通
	    			<?php  } else if($item['type'] == 1) { ?>外链
	    			<?php  } ?>
	     		</td>     		
	     		<td class="table_cell price tl td_col_1">
	    			<?php  echo $item['number'];?>
	     		</td>
	     		<td class="table_cell price t1 td_col_1">
	     			<?php  echo $item['time'];?>
	     		</td>
			    <td class="table_cell oper last_child tr opclass td_col_1" style="position: relative;">
			    	<a  href="<?php  echo self::pwUrl('site','article',array('op'=>'edit','id'=>$item['id'],'page'=>$_GPC['page']))?>" class="edit_listitem" >编辑</a>
			    	<a href="<?php  echo self::pwUrl('site','article',array('op'=>'delete','id'=>$item['id']))?>" onclick="return confirm('删除不能恢复，确定要删除吗？');">删除</a>
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