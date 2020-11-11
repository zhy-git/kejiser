<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../../../addons/zofui_sitetemp/template/web/common/myheader', TEMPLATE_INCLUDEPATH)) : (include template('../../../addons/zofui_sitetemp/template/web/common/myheader', TEMPLATE_INCLUDEPATH));?>

	<?php  if($_GPC['op'] == 'add' || $_GPC['op'] == 'edit') { ?>
		<link rel="stylesheet" type="text/css" href="<?php  echo MODULE_URL?>template/web/css/style.css<?php echo '?t='.TIMESTAMP?>">
		<script type="text/javascript" src="<?php  echo MODULE_URL?>template/web/js/angular.min.js"></script>
		<script type="text/javascript" src="<?php  echo MODULE_URL?>template/web/js/angular-ueditor.js"></script>
		<script type="text/javascript" src="<?php  echo MODULE_URL?>template/web/js/sortable.js"></script>
		<script charset="utf-8" src="https://map.qq.com/api/js?v=2.exp"></script>
		<script type="text/javascript" src="./resource/components/ueditor/ueditor.config.js"></script>
		<script type="text/javascript" src="./resource/components/ueditor/ueditor.all.min.js"></script>
		<script type="text/javascript" src="./resource/components/ueditor/ueditor.parse.js"></script>
		<script type="text/javascript" src="./resource/components/ueditor/lang/zh-cn/zh-cn.js"></script>
		<link href="<?php  echo MODULE_URL?>template/web/css/jquery-ui.css" rel="stylesheet">

		
		<div class="my_article_box" ng-app="myyapp" ng-controller="ctr">
		  	<div class="" ng-cload>
			  	<div class="item_cell_box">
					<div class="article_left">
						<div class="article_left_top" focus-item viewid="00000000" ng-click="getFocus('00000000','basic')">
							设置页面基本信息
						</div>
						<div class="article_left_mobile" ng-cloak>
							<div class="mobile_top"></div>
							<div class="mobile_head" ng-style="{'background-color':basic.topbg}">
								<span class="title" ng-style="{'color':basic.topcolor}" >{{basic.title}}</span> 
							</div>
							<div class="page-content" style="padding: 5px">
								<div class="mobile_body fixbgimg" ng-style="{'background-image':'url('+basic.bgimg+')','background-color':basic.pagebg ? basic.pagebg : '#eee'}">
									<div ui-sortable="sortableOptions" ng-model="items">
										<div ng-repeat="item in items track by $index" ng-if="item.name != 'fix'"  ng-click="getFocus(item.id)"  class="view_item" viewid="{{item.id}}"  ng-class="{'article_view_selected' : focus.id == item.id}" ng-mouseover="over(item.id)" ng-mouseleave="out(item.id)">
											<div  ng-include="'./../addons/zofui_sitetemp/template/web/temp/view-'+item.name+'.html'"></div>
											<div class="del_modules" ng-mousedown="delItem(item.id,$event)">删除</div>
										</div>
									</div>
									<div ng-repeat="item in items track by $index" ng-if="item.name == 'fix'"  ng-click="getFocus(item.id)" class=" view_item_fix"   viewid="{{item.id}}"  ng-class="{'article_view_selected' : focus.id == item.id}" ng-style="{'background':item.params.mbg,'padding':item.params.padding+'px','top':item.params.top+'%','right':item.params.right+'%','width':item.params.width+'%'}" ng-mouseover="over(item.id)" ng-mouseleave="out(item.id)">
										<div ng-include="'./../addons/zofui_sitetemp/template/web/temp/view-'+item.name+'.html'"></div>
										<div class="del_modules" ng-mousedown="delItem(item.id,$event)">删除</div>
									</div>
								</div>
							</div>							
							<div class="mobile_bottom"></div>
						</div>

					</div>
					<div class="article_right item_cell_flex" ng-cloak>
						<div class="portable_editor ">
							<div class="editor_inner" id="js_editFormContent">

								<div class="temp_item_editbox" ng-include="'./../addons/zofui_sitetemp/template/web/temp/edit-basic.html'" editid="00000000" ng-show="focus.id == '00000000'"></div>
									
								<div ng-repeat="item in items track by $index" class="edit_item simple" editid="{{item.id}}"  ng-show="focus.id == item.id" >
									<div ng-if="item.name == 'goods' || item.name == 'product' || item.name == 'ogoods' || item.name == 'toshop' || item.name == 'slide' || item.name == 'nav' || item.name == 'image' || item.name == 'card' || item.name == 'list' || item.name == 'title' || item.name == 'form' || item.name == 'groupbtn' || item.name == 'article' || item.name == 'ad' || item.name == 'link' || item.name == 'appoint'  || item.name == 'actcard' " class="temp_item_targbox">
										<li class="temp_item_targ {{showtab == 1 ? 'temp_item_targact' : ''}}" ng-click="showeditbox(1)">样式参数</li>
										<li class="temp_item_targ temp_item_targ2 {{showtab == 2 ? 'temp_item_targact' : ''}}" ng-click="showeditbox(2)">数据参数</li>
									</div>

									<div class="temp_item_editbox" ng-include="'./../addons/zofui_sitetemp/template/web/temp/edit-'+item.name+'.html'"></div>
								</div>
							</div>
							<span class="editor_arrow_wrp js_arrow">
								<i class="editor_arrow editor_arrow_out"></i>
								<i class="editor_arrow editor_arrow_in"></i>
							</span>
						</div>
					</div>

			  	</div>	

				<div class="module_box">
					<li class="modules_list" ng-show="params.showmodules" ng-mouseleave="params.showmodules = false">
						<span ng-repeat="item in modules" class="btn btn_default btn_p20" ng-bind="item.title" name="{{item.name}}" add-module></span>
					</li>
					<span class="btn btn_primary btn_p20" ng-click="params.showmodules = !params.showmodules">模块</span>
					<span ng-click="saveData()" class="btn btn_primary btn_p20">保存</span>
				</div>
			</div>


			<div class="my_model" url style="display: none">
			    <div class=" ui-draggable " >
			        <div class="dialog">
			            <div class="dialog_hd">
			                <a href="javascript:;" class="icon16_opr closed pop_closed model_close" >关闭</a>
			            </div>
			            <div class="dialog_bd info_box item_cell_box" >
			                <div class="setlink_l" ng-if="urltype == 'my'">
			                	<li ng-repeat="item in urlarr" ng-class="seturltype == item.key ? 'setlink_act' : ''" ng-click="pagetype( item.key )">{{item.name}}</li>
			                </div>
			                <div class="setlink_r item_cell_flex">

			                	<div ng-if="urltype == 'my'">
			                		<div ng-repeat="item in urlarr">
			                			
				                		<div ng-if="item.key == 'appoint' && item.key == seturltype"  class="setgoods_box item_cell_box" ng-repeat="in in item.data">
					                		<li>
					                			<img class="setgoods_img" ng-src="{{in.img}}">
					                		</li>
					                		<li class="setgoods_title">{{in.title}}</li>
					                		<li class="setlink_r_box item_cell_flex setgoods_btn">
					                			<span ng-click="setLink(in.url,in.title)">选择</span>
					                		</li>
				                		</div>

					                	<div ng-if="item.key == 'page' && item.key == seturltype" class="item_cell_box setlink_r_item" ng-repeat="in in item.data">
					                		<div class="model_temp_name">{{in.name}}</div>
					                		<div class="setlink_r_box item_cell_flex " >
					                			<div class="item_cell_box setlink_r_item" ng-repeat="inn in in.page">
					                				<div>{{inn.name}}</div>
					                				<div class="setlink_r_box item_cell_flex " >
					                					<span ng-click="setLink(inn.url,inn.name)">选择</span>
					                				</div>
					                			</div>
					                		</div>
					                	</div>

				                		<div ng-if="(item.key == 'goods' || item.key == 'ordergoods') && item.key == seturltype" class="setgoods_box item_cell_box" ng-repeat="in in item.data">
					                		<li>
					                			<img class="setgoods_img" ng-src="{{in.thumb}}">
					                		</li>
					                		<li class="setgoods_title">{{in.title}}</li>
					                		<li class="setlink_r_box item_cell_flex setgoods_btn">
					                			<span ng-click="setLink(in.url,in.title)">选择</span>
					                		</li>
				                		</div>

					                	<div ng-if="(item.key == 'news' || item.key == 'product' || item.key == 'userinfo' || item.key == 'other' || item.key == 'shop' || item.key == 'order' || item.key == 'appointp' || item.key == 'artsort' || item.key == 'appsort' || item.key == 'prosort' || item.key == 'sortone' || item.key == 'sorttwo' || item.key == 'ordersortone' || item.key == 'ordersorttwo' || item.key == 'cardurl') && item.key == seturltype" ng-repeat="in in item.data" class="item_cell_box setlink_r_item">
					                		<li>
                                              
                                                {{item.key == 'prosort'? in.level==0?'':'&nbsp;&nbsp;&nbsp;|---':''}}
                                                {{item.key == 'artsort'? in.level==0?'':'&nbsp;&nbsp;&nbsp;|---':''}}
					                			{{in.title ? in.title : in.name}}

					                		</li>
					                		<li class="setlink_r_box item_cell_flex">
					                			<span ng-click="setLink(in.url,in.title ? in.title : in.name)">选择</span>
					                		</li>
					                	</div>
			                			
			                		</div>
			                	</div>
			                	<div ng-if="urltype == 'app'">
				                	<div ng-repeat="item in allapp" class=" setlink_r_item">
				                		<div ng-repeat="initem in item.list" class="item_cell_box">
					                		<li>
					                			<img class="setlink_logoimg" ng-src="{{item.logo}}">
					                		</li>
					                		<li class="setlink_in_item setlink_in_mname">{{item.appname}}</li>
					                		<li class="setlink_in_item">{{initem.title}}</li>
					                		<li class="setlink_in_item">{{initem.url}}</li>
					                		<li class="setlink_r_box item_cell_flex setlink_in_item">
					                			<span ng-click="setotherLink(item,initem)">选择</span>
					                		</li>
				                		</div>
				                	</div>
			                	</div>

			                </div>
			            </div>
			            <div class="dialog_ft">
			                <span class="btn btn_default btn_input js_btn_p model_close" >
			                    <button type="button" class="js_btn">取消</button>
			                </span>
			            </div>
			        </div>
			    </div>
			    <div class="mask ui-draggable" style="display: block;"></div>
			</div>
			<div class="my_model" loadpage style="display: none">
			    <div class=" ui-draggable " >
			        <div class="dialog">
			            <div class="dialog_hd">
			                <a href="javascript:;" class="icon16_opr closed pop_closed model_close" >关闭</a>
			            </div>
			            <div class="dialog_bd info_box item_cell_box" >
			                <div class="setlink_l">
			                	<li class="setlink_act" >页面列表</li>
			                </div>
			                <div class="setlink_r item_cell_flex">
			                	<div ng-repeat="item in loadpagelist" class="item_cell_box setlink_r_item">
			                		<div class="model_temp_name">{{item.name}}</div>
			                		<div class="setlink_r_box item_cell_flex " >
			                			<div class="item_cell_box setlink_r_item" ng-repeat="inn in item.page">
			                				<div>{{inn.name}}</div>
			                				<div class="setlink_r_box item_cell_flex " >
			                					<span ng-click="loadPageByid(inn.id)">选择</span>
			                				</div>
			                			</div>
			                			
			                		</div>
			                	</div>
			                </div>
			            </div>
			            <div class="dialog_ft">
			                <span class="btn btn_default btn_input js_btn_p model_close" >
			                    <button type="button" class="js_btn">取消</button>
			                </span>
			            </div>
			        </div>
			    </div>
			    <div class="mask ui-draggable" style="display: block;"></div>
			</div>	

			<div class="my_model" map style="display: none">
			    <div class=" ui-draggable " >
			        <div class="dialog">
			            <div class="dialog_hd">
			                <a href="javascript:;" class="icon16_opr closed pop_closed model_close" >关闭</a>
			            </div>
			            <div class="dialog_bd info_box" >
			            	<div class="font_mini">左键点击所在出现蓝色标记，点击确定即可</div>
							<div class="map_box" style="margin: 0 auto;">
								<!-- <div class="map_search">
									<span class="frm_input_box frm_input_box_100">
										<input type="text" class="frm_input"  name="searaddress" value="">
									</span><a href="javascript:;" id="find_address">搜索</a>
								</div>
								<div class="baidu_map" id="map"></div> -->
								<div class="map_search">
									<span class="frm_input_box frm_input_box_100">
										<input type="text" class="frm_input"  name="searaddress" id="searaddress" value="">
									</span><a href="javascript:;" id="find_address">搜索</a>
								</div>
								<div class="baidu_map" id="map"></div>
							</div>
			            </div>
			            <div class="dialog_ft">
			            	<span class="btn btn_primary btn_input js_btn_p" ng-click="setLocation()">
			            		<button type="button" class="js_btn">确定</button>
			            	</span>
			                <span class="btn btn_default btn_input js_btn_p model_close" >
			                    <button type="button" class="js_btn">取消</button>
			                </span>
			            </div>
			        </div>
			    </div>
			    <div class="mask ui-draggable" style="display: block;"></div>
			</div>

			<div class="my_model" goods style="display: none">
			    <div class=" ui-draggable " >
			        <div class="dialog">
			            <div class="dialog_hd">
			                <a href="javascript:;" class="icon16_opr closed pop_closed model_close" >关闭</a>
			            </div>
			            <div class="dialog_bd info_box item_cell_box" >
			                <div class="setlink_l">
			                	<li class="setlink_act" ng-show="showgoodtype == 'good' || showgoodtype == 'ogood'">商品列表</li>
			                	<li class="setlink_act" ng-show="showgoodtype == 'article'">文章列表</li>
			                	<li class="setlink_act" ng-show="showgoodtype == 'product'">产品列表</li>
			                	<li class="setlink_act" ng-show="showgoodtype == 'appoint'">预约项目</li>
			                	<li class="{{cardtype == 0 || !cardtype ? 'setlink_act' : ''}}" ng-show="showgoodtype == 'card'" ng-click="cardtype = 0">官网卡券列表</li>
			                	<li class="{{cardtype == 1 ? 'setlink_act' : ''}}" ng-show="showgoodtype == 'card'" ng-click="cardtype = 1">商城卡券列表</li>
			                	<li class="{{cardtype == 2 ? 'setlink_act' : ''}}" ng-show="showgoodtype == 'card'" ng-click="cardtype = 2">预约卡券列表</li>
			                </div>
			                <div class="setlink_r item_cell_flex">
		                		<div ng-repeat="item in allgoods" class="setgoods_box item_cell_box" ng-show="showgoodtype == 'good' || showgoodtype == 'ogood'">
			                		<li>
			                			<img class="setgoods_img" ng-src="{{item.thumb}}">
			                		</li>
			                		<li class="setgoods_title">{{item.title}}</li>
			                		<li class="setlink_r_box item_cell_flex setgoods_btn">
			                			<span ng-click="selectGoods(item)">选择</span>
			                		</li>
		                		</div>
		                		<div ng-repeat="item in allnews" class="setgoods_box item_cell_box" ng-show="showgoodtype == 'article'">
			                		<li>
			                			<img class="setgoods_img" ng-src="{{item.img}}">
			                		</li>
			                		<li class="setgoods_title">{{item.title}}</li>
			                		<li class="setlink_r_box item_cell_flex setgoods_btn">
			                			<span ng-click="selectGoods(item)">选择</span>
			                		</li>
		                		</div>	
		                		<div ng-repeat="item in allproduct" class="setgoods_box item_cell_box" ng-show="showgoodtype == 'product'">
			                		<li>
			                			<img class="setgoods_img" ng-src="{{item.img}}">
			                		</li>
			                		<li class="setgoods_title">{{item.title}}</li>
			                		<li class="setlink_r_box item_cell_flex setgoods_btn">
			                			<span ng-click="selectGoods(item)">选择</span>
			                		</li>
		                		</div>

		                		<div ng-repeat="item in allappoint" class="setgoods_box item_cell_box" ng-show="showgoodtype == 'appoint'">
			                		<li>
			                			<img class="setgoods_img" ng-src="{{item.img}}">
			                		</li>
			                		<li class="setgoods_title">{{item.name}}</li>
			                		<li class="setlink_r_box item_cell_flex setgoods_btn">
			                			<span ng-click="selectGoods(item)">选择</span>
			                		</li>
		                		</div>
		                		<div ng-repeat="item in allcard" class="setgoods_box item_cell_box" ng-show="showgoodtype == 'card' && (item.usetype == cardtype || (!cardtype && item.usetype==0) )">
			                		<li>
			                			<img class="setgoods_img" ng-src="{{item.img}}">
			                		</li>
			                		<li class="setgoods_title">{{item.name}}</li>
			                		<li class="setlink_r_box item_cell_flex setgoods_btn">
			                			<span ng-click="selectGoods(item)">选择</span>
			                		</li>
		                		</div>

			                </div>
			            </div>
			            <div class="dialog_ft">
			                <span class="btn btn_default btn_input js_btn_p model_close" >
			                    <button type="button" class="js_btn">取消</button>
			                </span>
			            </div>
			        </div>
			    </div>
			    <div class="mask ui-draggable" style="display: block;"></div>
			</div>	

		</div>
	<script type="text/javascript">
		var page = <?php  echo json_encode($page)?>;
		var tempid = <?php  echo intval( $_GPC['tid'] )?>;
		var article = <?php  echo json_encode($article)?>;
		var allsort = <?php  echo json_encode($allsort)?>;
		var goodtowsort = <?php  echo json_encode($goodtowsort)?>;
		var ordertowsort = <?php  echo json_encode($ordertowsort)?>;
		var appsort = <?php  echo json_encode($appsort)?>;
		var prosort = <?php  echo json_encode($prosort)?>;
		var lawyer = <?php  echo intval( $this->module['config']['lawyer'] )?>;
		var op = "<?php  echo $_GPC['op'];?>";
		console.log(prosort);
	</script>
	<script type="text/javascript" src="<?php  echo MODULE_URL?>template/web/js/addart.js<?php echo '?t='.TIMESTAMP?>"></script>

	<?php  } else if($_GPC['op'] == 'list') { ?>

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
     		<th class="table_cell tl">页面名称</th>
     		<!-- <th class="table_cell tl">是否主页</th> -->
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
	    		<td class="table_cell tl">
	    			<?php  echo $item['name'];?>
	    		</td>
	    		<!-- <td class="table_cell tl">
	    			<?php  if($item['isindex'] == 1) { ?>
	    				<p class="font_ff5f27">主页页面</p>
	    			<?php  } else { ?>
	    				<a href="javascript:;" class="toindex" pid="<?php  echo $item['id'];?>">设为主页</a>
	    			<?php  } ?>
	    		</td> -->
			    <td class="table_cell oper last_child tr" style="position: relative;">
			    	
			    	<a href="<?php  echo self::pwUrl('site','page',array('op'=>'edit','id'=>$item['id'],'tid'=>$item['tempid']))?>">编辑</a>
			    	<a href="<?php  echo self::pwUrl('site','page',array('op'=>'delete','id'=>$item['id'],'tid'=>$item['tempid']))?>" onclick="return confirm('删除不能恢复，确定要删除吗？');">删除</a>
			    	<a href="javascript:;" class="copy_url" data-href="/zofui_sitetemp/pages/page/page?pid=<?php  echo $item['id'];?>">复制路径</a>
			    	<p class="good_qrcode_box">
			    		<a target="_blank" href="<?php  echo self::pwUrl('site','page',array('op'=>'downqr','id'=>$item['id'],'tid'=>$item['tempid']))?>" class="show_good_qrcode">页面二维码</a>
			    		<img src="<?php  echo $item['imgurl'];?>" width="200px" height="200px">
			    	</p>
			    </td>
	    	</tr>
	    <?php  } } ?>
   	</tbody> 
  	</table>
	<div class="bottom_page item_cell_box">
		<div class="dib tl">
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

	<?php  } else if($_GPC['op'] == 'bar') { ?>

		<link rel="stylesheet" type="text/css" href="<?php  echo MODULE_URL?>template/web/css/style.css<?php echo '?t='.TIMESTAMP?>">
		<script type="text/javascript" src="<?php  echo MODULE_URL?>template/web/js/sortable.js"></script>
		<script type="text/javascript" src="<?php  echo MODULE_URL?>template/web/js/angular.min.js"></script>
		<script charset="utf-8" src="https://map.qq.com/api/js?v=2.exp"></script>
		<link href="<?php  echo MODULE_URL?>template/web/css/jquery-ui.css" rel="stylesheet">
		
		<div class="my_article_box" ng-app="myyapp" ng-controller="ctr">
		  	<div class="" ng-cload>
			  	<div class="item_cell_box">
					<div class="article_left">
						<div class="article_left_mobile">
							<div class="page-content" style="padding: 5px">
								<div class="mobile_body" style="min-height: 200px;">
									<div class="nav_list item_cell_box fixbgimg" ng-style="{'background-image':'url('+items.bgimg+')','background-color':items.bgcolor,'padding-top':items.paddingtop + 'px','padding-bottom':items.paddingbot + 'px','border-top':'1px solid '+items.bjcolor}">
										<div ng-repeat="item in items.data track by $index" class="item_cell_flex nav_list_item">
											<div class="nav_list_img" ng-style="{'padding-bottom':items.padfont+'px'}">
												<img ng-style="{'width':items.iconwidth+'px','height':items.iconwidth+'px'}" ng-src="{{item.img}}">
											</div>
											<div class="nav_list_name" ng-style="{'color':items.color,'font-size':items.fontsize+'px'}">{{item.name}}</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mobile_bottom"></div>
						</div>

					</div>
					<div class="article_right item_cell_flex">
						<div class="portable_editor ">
							<div class="editor_inner" id="js_editFormContent" style="margin-top: 100px;">
								<div class="temp_item_targbox">
									<li class="temp_item_targ {{showtab == 1 ? 'temp_item_targact' : ''}}" ng-click="showeditbox(1)">样式参数</li>
									<li class="temp_item_targ temp_item_targ2 {{showtab == 2 ? 'temp_item_targact' : ''}}" ng-click="showeditbox(2)">数据参数</li>
								</div>
								<div class="temp_item_editbox" ng-include="'./../addons/zofui_sitetemp/template/web/temp/edit-bar.html'" ></div>
							</div>
							<span class="editor_arrow_wrp js_arrow">
								<i class="editor_arrow editor_arrow_out"></i>
								<i class="editor_arrow editor_arrow_in"></i>
							</span>
						</div>
					</div>

			  	</div>	

				<div class="module_box">
					<span ng-click="saveData()" class="btn btn_primary btn_p20">保存</span>
				</div>
			</div>

			<div class="my_model" url style="display: none">
			    <div class=" ui-draggable " >
			        <div class="dialog">
			            <div class="dialog_hd">
			                <a href="javascript:;" class="icon16_opr closed pop_closed model_close" >关闭</a>
			            </div>
			            <div class="dialog_bd info_box item_cell_box" >
			                <div class="setlink_l" ng-if="urltype == 'my'">
			                	<li ng-repeat="item in urlarr" ng-class="seturltype == item.key ? 'setlink_act' : ''" ng-click="pagetype( item.key )">{{item.name}}</li>
			                </div>
			                <div class="setlink_r item_cell_flex">

			                	<div ng-if="urltype == 'my'">
			                		<div ng-repeat="item in urlarr">
			                			
					                		<div ng-if="item.key == 'appoint' && item.key == seturltype"  class="setgoods_box item_cell_box" ng-repeat="in in item.data">
						                		<li>
						                			<img class="setgoods_img" ng-src="{{in.img}}">
						                		</li>
						                		<li class="setgoods_title">{{in.title}}</li>
						                		<li class="setlink_r_box item_cell_flex setgoods_btn">
						                			<span ng-click="setLink(in.url,in.title)">选择</span>
						                		</li>
					                		</div>

						                	<div ng-if="item.key == 'page' && item.key == seturltype" class="item_cell_box setlink_r_item" ng-repeat="in in item.data">
						                		<div class="model_temp_name">{{in.name}}</div>
						                		<div class="setlink_r_box item_cell_flex " >
						                			<div class="item_cell_box setlink_r_item" ng-repeat="inn in in.page">
						                				<div>{{inn.name}}</div>
						                				<div class="setlink_r_box item_cell_flex " >
						                					<span ng-click="setLink(inn.url,inn.name,inn.id)">选择</span>
						                				</div>
						                			</div>
						                		</div>
						                	</div>

					                		<div ng-if="(item.key == 'goods' || item.key == 'ordergoods') && item.key == seturltype" class="setgoods_box item_cell_box" ng-repeat="in in item.data">
						                		<li>
						                			<img class="setgoods_img" ng-src="{{in.thumb}}">
						                		</li>
						                		<li class="setgoods_title">{{in.title}}</li>
						                		<li class="setlink_r_box item_cell_flex setgoods_btn">
						                			<span ng-click="setLink(in.url,in.title)">选择</span>
						                		</li>
					                		</div>

						                	<div ng-if="(item.key == 'news' || item.key == 'product' || item.key == 'other' || item.key == 'shop' || item.key == 'order' || item.key == 'appointp' || item.key == 'artsort' || item.key == 'appsort' || item.key == 'prosort' || item.key == 'sortone' || item.key == 'sorttwo' || item.key == 'ordersortone' || item.key == 'ordersorttwo' || item.key == 'cardurl') && item.key == seturltype" ng-repeat="in in item.data" class="item_cell_box setlink_r_item">
						                		<li>{{in.title ? in.title : in.name}}</li>
						                		<li class="setlink_r_box item_cell_flex">
						                			<span ng-click="setLink(in.url,in.title ? in.title : in.name)">选择</span>
						                		</li>
						                	</div>

			                			
			                		</div>
			                	</div>
			                	<div ng-if="urltype == 'app'">
				                	<div ng-repeat="item in allapp" class=" setlink_r_item">
				                		<div ng-repeat="initem in item.list" class="item_cell_box">
					                		<li>
					                			<img class="setlink_logoimg" ng-src="{{item.logo}}">
					                		</li>
					                		<li class="setlink_in_item setlink_in_mname">{{item.appname}}</li>
					                		<li class="setlink_in_item">{{initem.title}}</li>
					                		<li class="setlink_in_item">{{initem.url}}</li>
					                		<li class="setlink_r_box item_cell_flex setlink_in_item">
					                			<span ng-click="setotherLink(item,initem)">选择</span>
					                		</li>
				                		</div>
				                	</div>
			                	</div>

			                </div>
			            </div>
			            <div class="dialog_ft">
			                <span class="btn btn_default btn_input js_btn_p model_close" >
			                    <button type="button" class="js_btn">取消</button>
			                </span>
			            </div>
			        </div>
			    </div>
			    <div class="mask ui-draggable" style="display: block;"></div>
			</div>
			<div class="my_model" loadpage style="display: none">
			    <div class=" ui-draggable " >
			        <div class="dialog">
			            <div class="dialog_hd">
			                <a href="javascript:;" class="icon16_opr closed pop_closed model_close" >关闭</a>
			            </div>
			            <div class="dialog_bd info_box item_cell_box" >
			                <div class="setlink_l">
			                	<li class="setlink_act" >页面列表</li>
			                </div>
			                <div class="setlink_r item_cell_flex">
			                	<div ng-repeat="item in loadpagelist" class="item_cell_box setlink_r_item">
			                		<div class="model_temp_name">{{item.name}}</div>
			                		<div class="setlink_r_box item_cell_flex " >
			                			<div class="item_cell_box setlink_r_item" ng-repeat="inn in item.page">
			                				<div>{{inn.name}}</div>
			                				<div class="setlink_r_box item_cell_flex " >
			                					<span ng-click="loadPageByid(inn.id)">选择</span>
			                				</div>
			                			</div>
			                			
			                		</div>
			                	</div>
			                </div>
			            </div>
			            <div class="dialog_ft">
			                <span class="btn btn_default btn_input js_btn_p model_close" >
			                    <button type="button" class="js_btn">取消</button>
			                </span>
			            </div>
			        </div>
			    </div>
			    <div class="mask ui-draggable" style="display: block;"></div>
			</div>	

			<div class="my_model" map style="display: none">
			    <div class=" ui-draggable " >
			        <div class="dialog">
			            <div class="dialog_hd">
			                <a href="javascript:;" class="icon16_opr closed pop_closed model_close" >关闭</a>
			            </div>
			            <div class="dialog_bd info_box" >
			            	<div class="font_mini">左键点击所在出现蓝色标记，点击确定即可</div>
							<div class="map_box" style="margin: 0 auto;">
								<!-- <div class="map_search">
									<span class="frm_input_box frm_input_box_100">
										<input type="text" class="frm_input"  name="searaddress" value="">
									</span><a href="javascript:;" id="find_address">搜索</a>
								</div>
								<div class="baidu_map" id="map"></div> -->
								<div class="map_search">
									<span class="frm_input_box frm_input_box_100">
										<input type="text" class="frm_input"  name="searaddress" id="searaddress" value="">
									</span><a href="javascript:;" id="find_address">搜索</a>
								</div>
								<div class="baidu_map" id="map"></div>
							</div>
			            </div>
			            <div class="dialog_ft">
			            	<span class="btn btn_primary btn_input js_btn_p" ng-click="setLocation()">
			            		<button type="button" class="js_btn">确定</button>
			            	</span>
			                <span class="btn btn_default btn_input js_btn_p model_close" >
			                    <button type="button" class="js_btn">取消</button>
			                </span>
			            </div>
			        </div>
			    </div>
			    <div class="mask ui-draggable" style="display: block;"></div>
			</div>

			<div class="my_model" icon style="display: none">
			    <div class=" ui-draggable " >
			        <div class="dialog">
			            <div class="dialog_hd">
			                <a href="javascript:;" class="icon16_opr closed pop_closed model_close" >关闭</a>
			            </div>
			            <div class="dialog_bd info_box" >
		                	<div ng-repeat="item in iconlist" class="item_cell_box setlink_r_item">
		                		<li class="icon_img">
		                			<img ng-src="{{ window.sysinfo.siteroot+'/addons/zofui_sitetemp/public/images/icon/'+item[0] }}">
		                			<img ng-src="{{ window.sysinfo.siteroot+'/addons/zofui_sitetemp/public/images/icon/'+item[1] }}">
		                		</li>
		                		<li class="setlink_r_box item_cell_flex">
		                			<span ng-click="seticon(item[0],item[1])">选择</span>
		                		</li>
		                	</div>

			            </div>
			            <div class="dialog_ft">
			            	<span class="btn btn_primary btn_input js_btn_p">
			            		<button type="button" class="js_btn">确定</button>
			            	</span>
			                <span class="btn btn_default btn_input js_btn_p model_close" >
			                    <button type="button" class="js_btn">取消</button>
			                </span>
			            </div>
			        </div>
			    </div>
			    <div class="mask ui-draggable" style="display: block;"></div>
			</div>				

		</div>
	<script type="text/javascript">
		var page = <?php  echo json_encode($page)?>;
		var tempid = <?php  echo intval( $_GPC['tid'] )?>;
		var isacttemp = <?php  echo intval( $thistemp['isact'] )?>
	</script>
	<script type="text/javascript" src="<?php  echo MODULE_URL?>template/web/js/bar.js<?php echo '?t='.TIMESTAMP?>"></script>

	<?php  } ?>
	
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('../../../addons/zofui_sitetemp/template/web/common/myfooter', TEMPLATE_INCLUDEPATH)) : (include template('../../../addons/zofui_sitetemp/template/web/common/myfooter', TEMPLATE_INCLUDEPATH));?>
