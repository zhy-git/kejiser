<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../../../addons/'.MODULE.'/template/web/common/myheader', TEMPLATE_INCLUDEPATH)) : (include template('../../../addons/'.MODULE.'/template/web/common/myheader', TEMPLATE_INCLUDEPATH));?>

	<?php  if($op == 'create' || $op == 'edit') { ?>
		<form method="post" action="">
			<div class="frm_control_group">
				<label for="" class="frm_label"></label>
				<div class="frm_controls">
				</div>
			</div>
			<div class="frm_control_group">
				<label for="" class="frm_label">分类名称</label>
				<div class="frm_controls msg">
					<span class="frm_input_box">
						<input type="text" class="frm_input"  name="name" value="<?php  echo $info['name'];?>">
					</span>
					<p class="frm_tips">建议在4个字内</p>
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
			<div class="tool_bar">
				<input type="submit" name="create" class="btn btn_primary" value="确定" >
				<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
			</div>
		</form>
	
<?php  } else if($op == 'list') { ?>


<div class="tr">
	<a href="javascript:;" class="add_form_btn topbar_jsbtn" js="addguysort">添加产品分类</a>
</div>
<?php  if(!empty( $list )) { ?>
  <table class="table" cellspacing="0"> 
   <thead class="thead"> 
    	<tr> 
     		<th class="table_cell title"> 
     			<label class="frm_checkbox_label" for="selectAll"> 
     				<i class="icon_checkbox"></i> 
     				<span class="lbl_content">id</span> 
     				<input type="checkbox" class="frm_checkbox" id="selectAll" /> 
     			</label>
     		</th> 
     		<th class="table_cell tl">名称</th>
     		<th class="table_cell tl">图片</th>
     		<th class="table_cell tl">序号</th>
     		<th class="table_cell tr">操作</th>
    	</tr> 
   </thead> 
   <tbody class="tbody" id="js_goods">
   <form method="post">
	   <?php  if(is_array($list)) { foreach($list as $item) { ?>
	    	<tr> 
	     		<td class="table_cell title"> 
	      			<div class="goods_info">
	      			 	<label class="frm_checkbox_label" > 
	       					<i class="icon_checkbox"></i> 
	       					<input type="checkbox" name="checkall[]" class="frm_checkbox" value="<?php  echo $item['id'];?>" /> 
	       					<?php  echo $item['id'];?>
	       				</label>
	      			</div>
	     		</td> 
	     		<td class="table_cell price tl">
	    			<?php  if($item['level'] == 0) { ?>
                                <?php  } else { ?>
                                     &nbsp;&nbsp;&nbsp;|---
					            <?php  } ?>

	    			<?php  echo $item['name'];?>
	     		</td>
	     		<td class="table_cell price tl">
	    			<img src="<?php  echo tomedia( $item['img'] )?>" height="40px">
	     		</td>	     			     		
	     		<td class="table_cell price tl">
	    			<?php  echo $item['number'];?>
	     		</td>	     		     		
			    <td class="table_cell oper last_child tr opclass" style="position: relative;">
			    	<a href="<?php  echo self::pwUrl('site','product',array('op'=>'list','prosortid'=>$item['id']))?>">查看分类特派员</a>
			    	<!-- <a href="javascript:;" class="copy_url" data-href="<?php echo '/zofui_sitetemp/pages/product/list?sid='.$item['id']?>">复制路径</a> -->
			    	<a  href="javascript:;" class="edit_listitem" id="<?php  echo $item['id'];?>">编辑</a>
			    	<a href="<?php  echo self::pwUrl('site','prosort',array('op'=>'delete','id'=>$item['id']))?>" onclick="return confirm('删除不能恢复，确定要删除吗？');">删除</a>
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

<div class="my_model" addguysort style="display: none;position: relative;z-index: 111">
    <div class=" ui-draggable " >
        <div class="dialog">
            <div class="dialog_hd">
                <a href="javascript:;" class="icon16_opr closed pop_closed model_close" >关闭</a>
            </div>
            <div class="dialog_bd info_box addform_item" >

            	<div class="frm_control_group">
					<label for="" class="frm_label">分类名称</label>
					<div class="frm_controls msg">
						<span class="frm_input_box">
							<input type="text" class="frm_input"  name="name" value="<?php  echo $info['name'];?>">
						</span>
						<p class="frm_tips frm_tips_default">建议在4个字内</p>
					</div>
				</div>
                
				<div class="frm_control_group">
					<label for="" class="frm_label">所属分类</label>
					<div class="frm_controls msg">
						<span>
							<select style="width: 200px;padding-left: 10px;" name="proid">
								<?php  if(is_array($proinfo)) { foreach($proinfo as $item) { ?>
					            <option  class="frm_input"  value="<?php  echo $item['id'];?>">
					            <?php  if($item['level'] == 0) { ?>
                                <?php  } else { ?>
                                     &nbsp;&nbsp;&nbsp;|---
					            <?php  } ?>
					            <?php  echo $item['name'];?>
					             </option>
					            <?php  } } ?>
						    <select>
						</span>
						<p class="frm_tips frm_tips_default">建议在4个字内</p>
					</div>
				</div>

				<div class="frm_control_group">
					<label for="" class="frm_label">排序序号</label>
					<div class="frm_controls msg">
						<span class="frm_input_box">
							<input type="text" class="frm_input"  name="number" value="<?php  echo $info['number'];?>">
						</span>
						<p class="frm_tips frm_tips_default">填入数字，越大越前</p>
					</div>
				</div>
				<div class="frm_control_group single_img_upload">
					<label for="" class="frm_label">图标</label>
					<div class="frm_controls">
						<?php  echo  WebCommon::tpl_form_field_image('img',$info['img'])?>
						<p class="frm_tips frm_tips_default">提示：若需要设置圆形导航图片，请将图片处理成圆形图片。</p>
					</div>
				</div>
            </div>
            <div class="dialog_ft">
                <span class="btn btn_primary btn_input js_btn_p" id="confirm_addform" >
                    <button type="button" class="js_btn">保存</button>
                </span>
                <span class="btn btn_default btn_input js_btn_p model_close" >
                    <button type="button" class="js_btn">取消</button>
                </span>
            </div>
        </div>
    </div>
    <div class="mask ui-draggable" style="display: block;"></div>
</div>
<script type="text/javascript">
	$(function(){
		var fid = 0;
		$('.edit_listitem').click(function(){
			var nowfid = $(this).attr('id');
			Http('post','json','findprosort',{fid:nowfid},function(data){
				if(data.status == 200){
					fid = nowfid; // 防止取消后再添加异常
					$('input[name=name]').val(data.obj.name);
					$('input[name=number]').val(data.obj.number);
					$('select[name=proid]').val(data.obj.proid);
					
					if( data.obj.img ) {
						$('input[name=img]').val(data.obj.img);
						if( data.obj.img ) $('.img-thumbnail').attr('src',data.obj.showimg).parent().show();
					}else{
						$('input[name=img]').val('');
						$('.img-thumbnail').attr('src','').parent().hide();
					}

					//var name = act.text();
					//$('.my_model[addform]').find('.jsBtLabel').text(name);
					$('.my_model[addguysort]').show();
				}else{
					webAlert(data.res);
				}
			},true);
		});
		
		$('#confirm_addform').click(function(){
			var postdata = {
				fid : fid,
				proid : $('select[name=proid]').val(),
				name : $('input[name=name]').val(),
				number : $('input[name=number]').val(),
			};
			Http('post','json','addprosort',postdata,function(data){
				if(data.status == 200){
					webAlert(data.res);
					setTimeout(function(){
						location.href = '';
					},500);
				}else{
					webAlert(data.res);
				}
			},true);

		});

	});
</script>

<?php  } ?>
	
	
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../../../addons/'.MODULE.'/template/web/common/myfooter', TEMPLATE_INCLUDEPATH)) : (include template('../../../addons/'.MODULE.'/template/web/common/myfooter', TEMPLATE_INCLUDEPATH));?>