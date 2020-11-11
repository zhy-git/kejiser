<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../../../addons/'.MODULE.'/template/web/common/myheader', TEMPLATE_INCLUDEPATH)) : (include template('../../../addons/'.MODULE.'/template/web/common/myheader', TEMPLATE_INCLUDEPATH));?>
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
        }
</style>
 
<?php  if($_GPC['op'] == 'list' || $_GPC['op'] == 'search' || $_GPC['op'] == 'edit') { ?>
	<?php  if(!empty( $list )) { ?>
    <div  style="padding:10px 0px 10px 0px;overflow: hidden;">
    	  <form  method="post" action="">
    	  	<div class="el-form-item el-form-item--default">
    	  		<div class="el-form-item__content">
    	  			<div style="line-height:40px;color: #606266;height: 40px;display: inline-block; font-size: 20px;margin-right: 10px">搜索：</div>
    	  			<input type="hidden" name="op" value="search" />
    	  			<!-- <input type="text" name="istrue"  placeholder="搜索会员类型" class="el-input__inner" style="margin-right:10px;"> -->
    	  			<select name="istrue" class="el-input__inner" style="width:231px">
    	  				<option value ="all">全部</option>
    	  				<option value ="0">普通会员</option>
    	  				<option value ="2">申请特派员</option>
                        <option value ="1">特派员</option>

    	  			</select>
    	  			<input type="text" name="nickname" placeholder="搜索微信昵称" class="el-input__inner" style="margin-right:10px;">
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
     				<!-- <i class="icon_checkbox"></i>  -->
     				<span class="lbl_content">id</span> 
     				<input type="checkbox" class="frm_checkbox" id="selectAll" /> 
     			</label>
     		</th>
     		<th class="table_cell tl td_col_1">微信头像</th>		
     		<th class="table_cell tl td_col_2">微信昵称</th>
     		<th class="table_cell tl td_col_1">会员类型</th>
            <th class="table_cell tl td_col_1">特派员头像</th>
            <th class="table_cell tl td_col_1">特派员名称</th>
            <th class="table_cell tl td_col_1" style="width:11%;">电话</th>
     		<th class="table_cell tl td_col_1" style="width:5%;">状态</th>	
            <th class="table_cell tl td_col_1" style="width:10%;">创建时间</th>  
     		<th class="table_cell tr td_col_1" style="width:15%;">操作</th>
    	</tr> 
   </thead> 
   <tbody class="tbody" id="js_goods">
   <form method="post">
	   <?php  if(is_array($list)) { foreach($list as $item) { ?>
	    	<tr> 
	     		<td class="table_cell title td_col_1"> 
	      			<div class="goods_info">
	      			 	<label class="frm_checkbox_label" > 
	       					<!-- <i class="icon_checkbox"></i>  -->
	       					<input type="checkbox" name="checkall[]" class="frm_checkbox" value="<?php  echo $item['id'];?>" /> 
	       					<?php  echo $item['id'];?>
	       				</label>
	      			</div>
	     		</td>
	     		<td class="table_cell price tl td_col_1">
	    			<img src="<?php  echo tomedia( $item['headimgurl'] )?>" width="30px" height="35px">
	     		</td>	     		
	     		<td class="table_cell price tl td_col_2">
	    			<?php  echo $item['nickname'];?>
	     		</td>
	     		<td class="table_cell price tl td_col_1">
	    			<?php  if($item['istrue'] == 0) { ?><p style="color: orange;">普通</p>
	    			<?php  } else if($item['istrue'] == 1) { ?><p style="color: green;">特派员</p>
                    <?php  } else { ?><p style="color: red;">申请中</p>
	    			<?php  } ?>
	     		</td>   
                <td class="table_cell price tl td_col_1">
                    <?php  if(!empty($item['userinfolist']['img'])) { ?>
                          <img src="<?php  echo tomedia( $item['userinfolist']['img'] )?>" width="30px" height="35px">
                     <?php  } else { ?>
                     <?php  } ?>
                </td>
                <td class="table_cell price tl td_col_1"><?php  echo $item['userinfolist']['title'];?></td> 
                <td class="table_cell price tl td_col_1"><?php  echo $item['userinfolist']['phone'];?></td>   		
	     		<td class="table_cell price tl td_col_1">
	    			<?php  if($item['status'] == 0) { ?> <p style="color:green">正常</p>
	    			<?php  } else if($item['status'] == 1) { ?><p style="color:red">异常</p>p>
	    			<?php  } ?>

	     		</td>	
                <td class="table_cell price tl td_col_1"><?php  echo $item['createtime'];?></td>     		     		
			    <td class="table_cell oper last_child tr opclass td_col_1" style="position: relative;">
			    	<?php  if($item['istrue'] == 0) { ?>
                    无操作
			    	<!-- <a  href="<?php  echo self::pwUrl('site','reguser',array('op'=>'edit','id'=>$item['id'],'istrue'=>'1'))?>" class="edit_listitem" onclick="return confirm('设为特派员，确定要设置吗？');">设为特派员</a> -->
                    <?php  } else if($item['istrue'] == 1 && !empty($item['userinfolist']['img']['0']) || $item['istrue'] == 1 && !empty($item['userinfolist']['title'])) { ?>
                    
                    <a  href="<?php  echo self::pwUrl('site','product',array('op'=>'list','openid'=>$item['userinfolist']['openid'],'id'=>$item['userinfolist']['id']))?>" class="edit_listitem">查看特派员</a>
                    <a  href="<?php  echo self::pwUrl('site','countryside',array('op'=>'list','openid'=>$item['userinfolist']['openid'],'id'=>$item['userinfolist']['id']))?>" class="edit_listitem">我的下乡</a>

                    <?php  } else if($item['istrue'] == 1 && empty($item['userinfolist']['img']['0']) && empty($item['userinfolist']['title'])) { ?>
                    <a  href="<?php  echo self::pwUrl('site','product',array('op'=>'add','openid'=>$item['openid']))?>" class="edit_listitem" style="color:red;color:#fff;background:green;padding:7px;border-radius:5px;">填写特派员信息</a>

                    <?php  } else if($item['istrue'] == 2) { ?>
                    <a  href="<?php  echo self::pwUrl('site','reguser',array('op'=>'edit','id'=>$item['id'],'istrue'=>'1'))?>" class="edit_listitem" onclick="return confirm('设为特派员，确定要设置吗？');">设为特派员</a>
                    &nbsp;
                    <a  href="<?php  echo self::pwUrl('site','reguser',array('op'=>'edit','id'=>$item['id'],'istrue'=>'0'))?>" class="edit_listitem" onclick="return confirm('取消特派员，确定要取消吗？');">取消申请</a>

                    <?php  } ?>

			    	<!-- <a href="<?php  echo self::pwUrl('site','article',array('op'=>'delete','id'=>$item['id']))?>" onclick="return confirm('删除不能恢复，确定要删除吗？');">删除</a> -->
			    </td>
	    	</tr>
	    <?php  } } ?>


   	</tbody>
  	</table>
	<div class="bottom_page item_cell_box">
		<!-- <div class="dib tl">
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
		</div> -->
		<div class="tr dib item_cell_flex">
			<span style="float: left;color:green;">
            总人数：<?php  echo $list1['count']['total'];?> &nbsp;&nbsp; 
            普通会员人数：<?php  echo $list1['count']['putong_total'];?> &nbsp;&nbsp; 
            申请人数：<?php  echo $list1['count']['apply_total'];?> &nbsp;&nbsp; 
            <font style="color:red">特派员人数：<?php  echo $list1['count']['tepaiyuan_total'];?></font>
           </span>
            <?php  echo $pager;?>
		</div>
	</div>
		<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
	</form>
    <?php  } else { ?>
    <div  style="padding:10px 0px 10px 0px;overflow: hidden;">
    	  <form  method="post" action="">
    	  	<div class="el-form-item el-form-item--default">
    	  		<div class="el-form-item__content">
    	  			<div style="line-height:40px;color: #606266;height: 40px;display: inline-block; font-size: 20px;margin-right: 10px">搜索：</div>
    	  			<input type="hidden" name="op" value="search" />
    	  			<!-- <input type="text" name="istrue"  placeholder="搜索会员类型" class="el-input__inner" style="margin-right:10px;"> -->
    	  			<select name="istrue" class="el-input__inner" style="height:41px!important;width:231px">
    	  				<option value ="all">全部</option>
    	  				<option value ="0">普通会员</option>
                        <option value ="2">申请特派员</option>
                        <option value ="1">特派员</option>
    	  			</select>
    	  			<input type="text" name="nickname" placeholder="搜索微信昵称" class="el-input__inner" style="margin-right:10px;">
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
     				<!-- <i class="icon_checkbox"></i>  -->
     				<span class="lbl_content">id</span> 
     				<input type="checkbox" class="frm_checkbox" id="selectAll" /> 
     			</label>
     		</th>
     		<th class="table_cell tl td_col_1">微信头像</th>		
     		<th class="table_cell tl td_col_2">微信昵称</th>
     		<th class="table_cell tl td_col_1">会员类型</th>
            <th class="table_cell tl td_col_1">特派员头像</th>
            <th class="table_cell tl td_col_1">特派员名称</th>
            <th class="table_cell tl td_col_1">电话</th>
     		<th class="table_cell tl td_col_1">状态</th>	
            <th class="table_cell tl td_col_1">创建时间</th>
     		<th class="table_cell tr td_col_1">操作</th>
    	</tr> 
   </thead>
       <tbody class="tbody" id="js_goods">
    	  <tr ><td colspan = '10' ><div class="no_data" style="margin:20px 0px ">没有找到数据</div></td></tr> 
       </tbody>
    </table>
    <?php  } ?>

<?php  } ?>
	
	
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../../../addons/'.MODULE.'/template/web/common/myfooter', TEMPLATE_INCLUDEPATH)) : (include template('../../../addons/'.MODULE.'/template/web/common/myfooter', TEMPLATE_INCLUDEPATH));?>