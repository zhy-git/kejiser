<?php defined('IN_IA') or exit('Access Denied');?><div class="modal-dialog">
	<style>
		#selectUrl .modal-body {padding: 10px 15px;}
		#selectUrl .tab-pane {margin-top: 5px; min-height: 400px; max-height: 400px; overflow-y: auto;}
		#selectUrl .page-head {padding: 9px 0; margin-bottom: 8px;}
		#selectUrl .page-head h4 {margin: 0;}
		#selectUrl .btn {margin-bottom: 3px;}
		#selectUrl .modal-dialog {width: 930px;}
		#selectUrl .line {border-bottom: 1px dashed #ddd; color: #999; height: 36px; line-height: 36px;}
		#selectUrl .line .icon {height: 35px; width: 30px; position: relative; float: left;}
		#selectUrl .line .icon.icon-1:before {content: ""; width: 10px; height: 10px; border: 1px dashed #ccc; position: absolute; top: 12px; left: 10px;}
		#selectUrl .line .icon.icon-2 {width: 50px;}
		#selectUrl .line .icon.icon-2:before {content: ""; width: 10px; height: 10px; border-left: 1px dashed #ccc; border-bottom: 1px dashed #ccc; position: absolute; top: 12px; left: 20px;}
		#selectUrl .line .icon.icon-3 {width: 60px;}
		#selectUrl .line .icon.icon-3:before {content: ""; width: 10px; height: 10px; border-left: 1px dashed #ccc; border-bottom: 1px dashed #ccc; position: absolute; top: 12px; left: 30px;}
		#selectUrl .line .btn-sm {float: right; margin-top: 5px; margin-right: 5px; height: 24px; line-height: 24px; padding: 0 10px;}
		#selectUrl .line .text {display: block;}
		#selectUrl .line .label-sm {padding: 2px 5px;}
		#selectUrl .line.good {height: 60px; padding: 4px 0;}
		#selectUrl .line.good .image {height: 50px; width: 50px; border: 1px solid #ccc; float: left;}
		#selectUrl .line.good .image img {height: 100%; width: 100%;}
		#selectUrl .line.good .text {padding-left: 60px; height: 52px;}
		#selectUrl .line.good .text p {padding: 0; margin: 0;}
		#selectUrl .line.good .text .name {font-size: 15px; line-height: 32px; height: 28px;}
		#selectUrl .line.good .text .price {font-size: 12px; line-height: 18px; height: 18px;}
		#selectUrl .line.good .btn-sm {height: 32px; padding: 5px 10px; line-height: 22px; margin-top: 9px;}
		#selectUrl .tip {line-height: 250px; text-align: center;}
		#selectUrl .nav-tabs > li > a {padding: 8px 20px;}
	</style>
	<div class="modal-content">
		<div class="modal-header">
			<button data-dismiss="modal" class="close" type="button">×</button>
			<h4 class="modal-title"><?php  if($type == 'topmenu_data') { ?>选择数据<?php  } else { ?>选择链接<?php  } ?></h4>
		</div>
		<div class="modal-body">
			<ul class="nav nav-tabs" id="selectUrlTab">
				<?php  if(($type != 'topmenu' && $type != 'topmenu_data') || $platform == 'wxapp') { ?>
				<li class="active"><a href="#sut_shop">商城</a></li>
				<?php  } ?>
				<?php  if($platform!='wxapp_tabbar' && $type != 'topmenu' && $type != 'topmenu_data' && $type != 'levellink') { ?>
				<li class=""><a href="#sut_good">商品</a></li>
				<?php  if($syscate['level']!=-1 && !empty($categorys)) { ?>
				<li class=""><a href="#sut_cate">商品分类</a></li>
				<?php  } ?>
				<?php  } ?>

				<?php  if($platform=='wxapp' && $type != 'topmenu' && $type != 'topmenu_data' && $type != 'levellink') { ?>

				<li class=""><a href="#sut_quick">快速购买</a></li>

				<?php  } ?>



				<?php  if($platform=='wxapp' && $type != 'topmenu' && $type != 'topmenu_data' && $type != 'levellink') { ?>
	            <li class=""><a href="#sut_diyurl">第三方链接</a></li>
				<?php  if($type == 'menu' || $type == 'listmenu' || $type == 'picture' || $type == 'picturew' || $type='menu2') { ?>

				<li class=""><a href="#sut_diymobile">电话</a></li>

				<?php  } ?>
				<?php  if($type == 'menu' || $type == 'listmenu' || $type == 'picture' || $type == 'picturew' || $type == 'banner' && $type != 'levellink') { ?>
				<li class=""><a href="#sut_diyxcx">小程序</a></li>
				<?php  } ?>


				<?php  } ?>

				<?php  if(p('article') && !$platform && $type != 'topmenu' && $type != 'topmenu_data') { ?>
				<li class=""><a href="#sut_article"><?php  echo m('plugin')->getName('article')?></a></li>
				<?php  } ?>
				<?php  if(com('coupon') && !$platform && $type != 'topmenu' && $type != 'topmenu_data') { ?>
				<li class=""><a href="#sut_coupon"><?php  echo m('plugin')->getComName('coupon')?></a></li>
				<?php  } ?>
				<?php  if(p('diypage') && !$platform && $type != 'topmenu_data') { ?>
				<li class=""><a href="#sut_diypage"><?php  echo m('plugin')->getName('diypage')?></a></li>
				<?php  } ?>
				<?php  if(p('groups') && !$platform && $type != 'topmenu' && $type != 'topmenu_data') { ?>
				<li class=""><a href="#sut_groups"><?php  echo m('plugin')->getName('groups')?></a></li>
				<?php  } ?>
				<?php  if(p('sns') && !$platform && $type != 'topmenu' && $type != 'topmenu_data') { ?>
				<li class=""><a href="#sut_sns"><?php  echo m('plugin')->getName('sns')?></a></li>
				<?php  } ?>
				<?php  if(p('creditshop') && !$platform && $type != 'topmenu' && $type != 'topmenu_data') { ?>
				<li class=""><a href="#sut_creditshop"><?php  echo m('plugin')->getName('creditshop')?></a></li>
				<?php  } ?>
				<?php  if(p('quick') && $type != 'topmenu' && $type != 'topmenu_data' && $type != 'levellink') { ?>
				<li class=""><a href="#sut_quick"><?php  echo m('plugin')->getName('quick')?></a></li>
				<?php  } ?>
				<?php  if($type == 'topmenu_data') { ?>
				<li class="active"><a href="#sut_goods_data" class="sut_goods_data">商品</a></li>
				<li class=""><a href="#sut_shop_data" class="sut_shop_data">门店</a></li>
				<?php  } ?>
			</ul>
			<div class="tab-content ">
				<?php  if(($type != 'topmenu' && $type != 'topmenu_data') || $platform == 'wxapp') { ?>
				<div class="tab-pane active" id="sut_shop">
					<?php  if($platform) { ?>
					<div class="alert alert-primary" style="margin-bottom: 0;">
						<p>如果底部菜单中已经选择该链接，页面中选择后点击无效</p>
						<?php  if($platform=='wxapp_tabbar') { ?>
						<p>底部菜单只可选择部分页面地址</p>
						<?php  } ?>
						<?php  if($type == 'topmenu') { ?>
						<p>不可选择已有顶部菜单的自定义页面</p>
						<?php  } ?>
					</div>
					<?php  } ?>
					<?php  if($type == 'topmenu') { ?>
					<?php  if(is_array($allUrls)) { foreach($allUrls as $item) { ?>
					<?php  if($item['name'] == '自定义页面') { ?>
					<div class="page-head"><h4><i class="fa fa-folder-open-o"></i> <?php  echo $item['name'];?></h4></div>
					<?php  if(is_array($item['list'])) { foreach($item['list'] as $child) { ?>
					<nav data-href="<?php echo $platform?$child['url_wxapp']:$child['url']?>" class="btn btn-default btn-sm" title="<?php  echo $child['name'];?>"><?php  echo $child['name'];?></nav>
					<?php  } } ?>
					<?php  } ?>
					<?php  } } ?>
					<?php  } else { ?>
					<?php  if(is_array($allUrls)) { foreach($allUrls as $item) { ?>
					<div class="page-head"><h4><i class="fa fa-folder-open-o"></i> <?php  echo $item['name'];?></h4></div>
						<?php  if(is_array($item['list'])) { foreach($item['list'] as $child) { ?>
					<nav data-href="<?php echo $platform?$child['url_wxapp']:$child['url']?>" class="btn btn-default btn-sm" title="<?php  echo $child['name'];?>"><?php  echo $child['name'];?></nav>
						<?php  } } ?>
					<?php  } } ?>
					<?php  } ?>
				</div>
				<?php  } ?>
				<?php  if($type != 'topmenu' && $type != 'topmenu_data') { ?>
				<div class="tab-pane" id="sut_good">
					<div class="input-group">
						<input type="text" placeholder="请输入商品名称进行搜索" id="select-good-kw" value="" class="form-control">
						<span class="input-group-addon btn btn-default select-btn" data-type="good">搜索</span>
					</div>
					<div id="select-good-list"></div>
				</div>
				<?php  } ?>
				<?php  if($type != 'topmenu' && $type != 'topmenu_data') { ?>
				<div class="tab-pane" id="sut_cate">
					<?php  if(is_array($categorys)) { foreach($categorys as $category) { ?>
					<?php  if(empty($category['parentid'])) { ?>
					<div class="line">
						<div class="icon icon-1"></div>
						<nav title="选择" class="btn btn-default btn-sm" data-href="<?php  if($platform) { ?>/pages/goods/index/index?cate=<?php  echo $category['id'];?><?php  } else { ?><?php  echo mobileUrl('goods',array('cate'=>$category['id']), $full)?><?php  } ?>">选择</nav>
						<div class="text"><?php  echo $category['name'];?></div>
					</div>
					<?php  if(is_array($categorys)) { foreach($categorys as $category2) { ?>
					<?php  if($category2['parentid']==$category['id']) { ?>
					<div class="line">
						<div class="icon icon-2"></div>
						<nav title="选择" class="btn btn-default btn-sm" data-href="<?php  if($platform) { ?>/pages/goods/index/index?cate=<?php  echo $category2['id'];?><?php  } else { ?><?php  echo mobileUrl('goods',array('cate'=>$category2['id']), $full)?><?php  } ?>">选择</nav>
						<div class="text"><?php  echo $category2['name'];?></div>
					</div>
					<?php  if(is_array($categorys)) { foreach($categorys as $category3) { ?>
					<?php  if($category3['parentid']==$category2['id']) { ?>
					<div class="line">
						<div class="icon icon-3"></div>
						<nav title="选择" class="btn btn-default btn-sm" data-href="<?php  if($platform) { ?>/pages/goods/index/index?cate=<?php  echo $category3['id'];?><?php  } else { ?><?php  echo mobileUrl('goods',array('cate'=>$category3['id']), $full)?><?php  } ?>">选择</nav>
						<div class="text"><?php  echo $category3['name'];?></div>
					</div>
					<?php  } ?>
					<?php  } } ?>
					<?php  } ?>
					<?php  } } ?>
					<?php  } ?>
					<?php  } } ?>
				</div>
				<?php  } ?>
				<?php  if($platform=='wxapp') { ?>
				<div class="tab-pane" id="sut_diyurl" style="min-height: 100px;">
					<div class="row" style="margin: 100px 80px 80px;">
						<div class="input-group">
							<span class="input-group-addon">https://</span>
							<input type="text" placeholder="请输入已在小程序管理后台配置白名单的域名 例如：www.baidu.com" id="select-diyurl-kw" value="<?php  echo $defaultUrl;?>" class="form-control">
							<span class="input-group-addon btn btn-primary select-btn" data-type="diyurl">确认使用</span>
							<nav id="select-diy-url"></nav>
						</div>
						<div class="help-block text-danger">注意：1. 目标链接域名需到<a href="https://mp.weixin.qq.com/" target="_blank" class="text-danger"><b>小程序管理后台</b></a>配置域名白名单 </div>
						<div class="help-block text-danger" style="padding-left: 37px;">2. 目标链接必须支持https，否则无法打开</div>
						<div class="help-block text-danger" style="padding-left: 37px;">3. 点击链接将跳出小程序与小程序无关</div>
					</div>
				</div>
				<?php  if($type == 'menu' || $type == 'listmenu' || $type == 'picture' || $type == 'picturew' || $type == 'menu2') { ?>
				<div class="tab-pane" id="sut_diymobile" style="min-height: 100px;">
					<div class="row" style="margin: 100px 80px 80px;">
						<div class="input-group">
							<span class="input-group-addon">电话</span>
							<input type="text" placeholder="请在此输入有效电话号码" id="select-diymobile-kw" value="" class="form-control">
							<span class="input-group-addon btn btn-primary select-btn" data-type="diymobile">确认使用</span>
							<nav id="select-diy-diymobile"></nav>
						</div>
					</div>
				</div>
				<?php  } ?>
				<?php  if($type == 'menu' || $type == 'listmenu' || $type == 'picture' || $type == 'picturew' || $type == 'banner') { ?>
				<div class="tab-pane" id="sut_diyxcx" style="min-height: 100px;">
					<div class="row" style="margin: 50px 80px 50px;">
						<div class="input-group">
							<span class="input-group-addon">APPID</span>
							<input type="text" placeholder="请在此输入APPID" id="select-diyxcx-kw" value="" class="form-control">
							<nav id="select-diy-diyxcxid"></nav>
						</div>
						<div class="help-block text-danger">注意：必须是同一个公众号下的小程序appid，否则无法跳转</div>
					</div>
					<div class="row" style="margin: 50px 80px 50px;">
						<div class="input-group">
							<span class="input-group-addon">小程序链接</span>
							<input type="text" placeholder="请在此输入小程序链接" id="select-diyxcxurl-kw" value="" class="form-control">
							<nav id="select-diy-diyxcxurl"></nav>
						</div>
						<div class="help-block text-danger">注意：小程序链接留空默认跳到小程序首页</div>
					</div>
					<div class="row" style="margin: 50px 80px 50px;text-align: center;">
						<span class="btn btn-primary select-btn" data-type="diyxcx" >确认使用</span>
						<nav id="select-diy-diyxcx"></nav>
					</div>
				</div>
				<?php  } ?>
				<?php  } ?>

				<?php  if(p('article') && $type != 'topmenu' && $type != 'topmenu_data') { ?>
				<div class="tab-pane" id="sut_article">
					<div class="input-group">
						<input type="text" placeholder="请输入文章名称进行搜索" id="select-article-kw" value="" class="form-control">
						<span class="input-group-addon btn btn-default select-btn" data-type="article">搜索</span>
					</div>
					<div id="select-article-list"></div>
				</div>
				<?php  } ?>

				<div class="tab-pane" id="sut_coupon">
					<div class="input-group">
						<input type="text" placeholder="请输入优惠券名称进行搜索" id="select-coupon-kw" value="" class="form-control">
						<span class="input-group-addon btn btn-default select-btn" data-type="coupon">搜索</span>
					</div>
					<div id="select-coupon-list"></div>
				</div>

				<?php  if(p('diypage') && !$platform) { ?>
				<div class="tab-pane <?php  if($type=='topmenu') { ?>active<?php  } ?>" id="sut_diypage">
					<?php  if(!empty($diypage['list'])) { ?>
					<?php  if(is_array($diypage['list'])) { foreach($diypage['list'] as $item) { ?>
					<?php  if($item['type']!=5 && $item['type']!=7) { ?>
					<div class="line">
						<nav title="选择" class="btn btn-default btn-sm" data-href="<?php  echo mobileUrl('diypage',array('id'=>$item['id']),$full)?>">选择</nav>
						<div class="text"><span class="label label-<?php  echo $allpagetype[$item['type']]['class'];?> label-sm"><?php  echo $allpagetype[$item['type']]['name'];?></span> <?php  echo $item['name'];?></div>
					</div>
					<?php  } ?>
					<?php  } } ?>
					<?php  } else { ?>
					<div class="tip">抱歉！未查询到DIY页面。</div>
					<?php  } ?>
				</div>
				<?php  } ?>

				<?php  if(p('groups') && $type != 'topmenu' && $type != 'topmenu_data') { ?>
				<div class="tab-pane" id="sut_groups">
					<div class="input-group">
						<input type="text" placeholder="请输入商品名称进行搜索" id="select-groups-kw" value="" class="form-control">
						<span class="input-group-addon btn btn-default select-btn" data-type="groups">搜索</span>
					</div>
					<div id="select-groups-list"></div>
				</div>
				<?php  } ?>

				<?php  if(p('sns') && $type != 'topmenu' && $type != 'topmenu_data') { ?>
				<div class="tab-pane" id="sut_sns">
					<div class="input-group">
						<input type="text" placeholder="请输入板块名称、帖子标题进行搜索" id="select-sns-kw" value="" class="form-control">
						<span class="input-group-addon btn btn-default select-btn" data-type="sns">搜索</span>
					</div>
					<div id="select-sns-list"></div>
				</div>
				<?php  } ?>

				<?php  if(p('groups') && $type != 'topmenu' && $type != 'topmenu_data') { ?>
				<div class="tab-pane" id="sut_creditshop">
					<div class="input-group">
						<input type="text" placeholder="请输入商品名称进行搜索" id="select-creditshop-kw" value="" class="form-control">
						<span class="input-group-addon btn btn-default select-btn" data-type="creditshop">搜索</span>
					</div>
					<div id="select-creditshop-list"></div>
				</div>
				<?php  } ?>

				<?php  if(p('quick') && $type != 'topmenu' && $type != 'topmenu_data') { ?>
				<div class="tab-pane" id="sut_quick">
					<?php  if(!empty($quickList)) { ?>
					<?php  if($platform=='wxapp' || $platform=='wxapp_tabbar') { ?>
					<?php  if(is_array($quickList)) { foreach($quickList as $item) { ?>
					<div class="line">
						<nav title="选择" class="btn btn-default btn-sm" data-href="/pages/quickbuy/index?id=<?php  echo $item['id'];?>">选择</nav>
						<div class="text"><?php  echo $item['title'];?></div>
					</div>
					<?php  } } ?>
					<?php  } else { ?>
					<?php  if(is_array($quickList)) { foreach($quickList as $item) { ?>
					<div class="line">
						<nav title="选择" class="btn btn-default btn-sm" data-href="<?php  echo mobileUrl('quick',array('id'=>$item['id']))?>">选择</nav>
						<div class="text"><?php  if(empty($item['status'])) { ?><span class="label label-sm label-default">关闭状态</span> <?php  } ?><?php  echo $item['title'];?></div>
					</div>
					<?php  } } ?>
					<?php  } ?>
					<?php  } else { ?>
					<div class="tip">抱歉！未查询到快速购买页面。</div>
					<?php  } ?>
				</div>
				<?php  } ?>
				<?php  if($type == 'topmenu_data') { ?>
				<div class="tab-pane active" id="sut_goods_data">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#goods_data_cate" class="goods_data_cate">分类</a></li>
						<li><a href="#goods_data_group" class="goods_data_group">分组</a></li>
						<li><a href="#goods_data_diy" class="goods_data_diy">自定义</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active"  id="goods_data_cate" style="">
							<?php  if(is_array($categorys)) { foreach($categorys as $category) { ?>
							<?php  if(empty($category['parentid'])) { ?>
							<div class="line">
								<div class="icon icon-1"></div>
								<nav title="选择" class="btn btn-default btn-sm" data-type="<?php  echo $type;?>" data-condition="<?php  echo $category['id'];?>" data-tab="category">选择</nav>
								<div class="text"><?php  echo $category['name'];?></div>
							</div>
							<?php  if(is_array($categorys)) { foreach($categorys as $category2) { ?>
							<?php  if($category2['parentid']==$category['id']) { ?>
							<div class="line">
								<div class="icon icon-2"></div>
								<nav title="选择" class="btn btn-default btn-sm" data-type="<?php  echo $type;?>" data-condition="<?php  echo $category2['id'];?>" data-tab="category">选择</nav>
								<div class="text"><?php  echo $category2['name'];?></div>
							</div>
							<?php  if(is_array($categorys)) { foreach($categorys as $category3) { ?>
							<?php  if($category3['parentid']==$category2['id']) { ?>
							<div class="line">
								<div class="icon icon-3"></div>
								<nav title="选择" class="btn btn-default btn-sm" data-type="<?php  echo $type;?>" data-condition="<?php  echo $category3['id'];?>" data-tab="category">选择</nav>
								<div class="text"><?php  echo $category3['name'];?></div>
							</div>
							<?php  } ?>
							<?php  } } ?>
							<?php  } ?>
							<?php  } } ?>
							<?php  } ?>
							<?php  } } ?>
						</div>
						<div class="tab-pane" id="goods_data_group" style="">
							<?php  if(!empty($groups)) { ?>
							<?php  if(is_array($groups)) { foreach($groups as $group) { ?>
							<div class="line">
								<div class="icon icon-1"></div>
								<nav title="选择" class="btn btn-default btn-sm" data-type="<?php  echo $type;?>" data-condition="<?php  echo $group['id'];?>" data-tab="groups">选择</nav>
								<div class="text"><?php  echo $group['name'];?></div>
							</div>
							<?php  } } ?>
							<?php  } else { ?>
							<div class="tip">抱歉！未查询到商品分组。</div>
							<?php  } ?>
						</div>
						<div class="tab-pane" id="goods_data_diy" style="">
							<!--<div class="input-group">-->
							<!--<input type="text" placeholder="请输入商品名称进行搜索" id="select-goods_data_diy-kw" value="" class="form-control">-->
							<!--<span class="input-group-addon btn btn-default select-btn" data-type="goods_data_diy">搜索</span>-->
							<!--</div>-->
							<!--<div id="select-goods_data_diy-list"></div>-->
							<div class="form-group" style="margin-top: 15px;">
								<label class="col-lg control-label">选择商品</label>
								<div class="col-sm-9" >
									<div class="form-group" style="height: auto; display: block;">
										<div class="col-sm-12 col-xs-12">
											<?php if( ce('goods' ,$item) ) { ?>
											<div class="input-group">
												<input type="text" id="goodsid_text" name="goodsid_text" value="" class="form-control text" readonly="">
												<div class="input-group-btn">
													<button class="btn btn-primary select_goods" type="button">选择商品</button>
												</div>
											</div>
											<div class="input-group multi-img-details container ui-sortable goods_show">
												<?php  if(!empty($goods)) { ?>
												<?php  if(is_array($goods)) { foreach($goods as $g) { ?>
												<div class="multi-item" data-id="<?php  echo $g['id'];?>" data-name="goodsid" id="<?php  echo $g['id'];?>">
													<img class="img-responsive img-thumbnail" src="<?php  echo tomedia($g['thumb'])?>" onerror="this.src='../addons/ewei_shopv2/static/images/nopic.png'" style="width:100px;height:100px;">
													<div class="img-nickname"><?php  echo $g['title'];?></div>
													<input type="hidden" value="<?php  echo $g['id'];?>" name="goodsids[]">
													<em onclick="remove(<?php  echo $g['id'];?>)" class="close">×</em>
													<div style="clear:both;"></div>
												</div>
												<?php  } } ?>
												<?php  } ?>
											</div>

											<script>
                                                $(function(){
                                                    var title = '';
                                                    $('.img-nickname').each(function(){
                                                        title += $(this).html()+';';
                                                    });
                                                    $('#goodsid_text').val(title);
                                                })
                                                myrequire(['web/goods_selector'],function (Gselector) {
                                                    $('.select_goods').click(function () {
                                                        var ids = select_goods_ids();
                                                        Gselector.open('goods_show','',0,true,'',ids);
                                                    });
                                                })
                                                function goods_show(data) {
                                                    if(data.act == 1){
                                                        var html = '<div class="multi-item" data-id="'+data.id+'" data-name="goodsid" id="'+data.id+'">'
                                                            +'<img class="img-responsive img-thumbnail" src="'+data.thumb+'" onerror="this.src=\'../addons/ewei_shopv2/static/images/nopic.png\'" style="width:100px;height:100px;">'
                                                            +'<div class="img-nickname">'+data.title+'</div>'
                                                            +'<input type="hidden" value="'+data.id+'" name="goodsids[]">'
                                                            +'<em onclick="removeHtml('+data.id+')" class="close">×</em>'
                                                            +'</div>';

                                                        $('.goods_show').append(html);
                                                        var title = '';
                                                        $('.img-nickname').each(function(){
                                                            title += $(this).html()+';';
                                                        });
                                                        $('#goodsid_text').val(title);
                                                    }else if(data.act == 0){
                                                        remove(data.id);
                                                    }
                                                }
                                                function remove(id){
                                                    $("[id='"+id+"']").remove();
                                                    var title = '';
                                                    $('.img-nickname').each(function(){
                                                        title += $(this).html()+';';
                                                    });
                                                    $('#goodsid_text').val(title);
                                                }
                                                function select_goods_ids(){
                                                    var goodsids = [];
                                                    $(".multi-item").each(function(){
                                                        goodsids.push($(this).attr('data-id'));
                                                    });
                                                    return goodsids;
                                                }
											</script>
											<?php  } else { ?>
											<div class="input-group multi-img-details container ui-sortable">
												<?php  if(is_array($goods)) { foreach($goods as $item) { ?>
												<div data-name="goodsid" data-id="426" class="multi-item">
													<img src="<?php  echo tomedia($item['thumb'])?>" class="img-responsive img-thumbnail">
													<div class="img-nickname"><?php  echo $item['title'];?></div>
												</div>
												<?php  } } ?>
											</div>
											<?php  } ?>
										</div>
									</div>

								</div>
							</div>
							<!--<div class="form-group">-->
							<!--<nav title="选择"   style="width: 82px;height: 30px;" class="btn btn-default btn-sm" data-type="<?php  echo $type;?>" data-condition="" data-tab="goodsids">选择</nav>-->
							<!--</div>-->
						</div>
					</div>
				</div>

				<div class="tab-pane" id="sut_shop_data">
					<?php  if(!empty($storeList)) { ?>
					<?php  if(is_array($storeList)) { foreach($storeList as $store) { ?>
					<div class="line">
						<div class="icon icon-1"></div>
						<div title="选择" style="float: right;margin-right: 16px" class="" data-type="<?php  echo $type;?>" data-condition="<?php  echo $store['id'];?>" data-tab="stores">
							<input type="checkbox" name="" data-id="<?php  echo $store['id'];?>" data-name="stores" value="<?php  echo $store['id'];?>">
						</div>
						<div class="text"><?php  echo $store['storename'];?></div>
					</div>
					<?php  } } ?>
					<?php  } else { ?>
					<div class="tip">抱歉！未查询到门店。</div>
					<?php  } ?>
					<!--<div class="line" style="border: none;">-->
					<!--<nav title="选择" style=" width:  82px;height: 30px;line-height: 27px;margin-top: 22px;" class="btn btn-default btn-sm" data-type="<?php  echo $type;?>" data-condition="" data-tab="stores">确定</nav>-->
					<!--</div>-->
				</div>
				<?php  } ?>
			</div>
		</div>
		<div class="modal-footer">
			<button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
			<?php  if($type == 'topmenu_data') { ?>
			<nav title="确定"   style="width: 82px;height: 30px;display:none;" class="btn btn-primary btn-sm select_goods_diy" data-type="<?php  echo $type;?>" data-condition="" data-tab="goodsids">确定</nav>
			<nav title="选择" style=" width:  82px;height: 30px;display:none;" class="btn btn-primary btn-sm select_shop_data" data-type="<?php  echo $type;?>" data-condition="" data-tab="stores">确定</nav>
			<?php  } ?>
		</div>
		<script>
            $(function(){

                $("#selectUrl").find('.nav-tabs a').click(function(e) {
                    $('#tab').val($(this).attr('href'));
                    e.preventDefault();
                    $(this).tab('show');
                });

                $(".select-btn").click(function(){
                    var type = $(this).data("type");
                    var kw = $.trim($("#select-"+type+"-kw").val());

                    if(type=='diyurl'){
                        if(!kw || kw==''){
                            tip.msgbox.err("请输入第三方链接！");
                            return;
                        }
                        kw = kw.replace('http://', '');
                        kw = kw.replace('https://', '');
                        $('#select-diy-url').data('href', '/pages/web/index?url=' + encodeURIComponent('https://' + kw)).trigger('click');
                        return;
                    }

                    if(type=='diymobile'){
                        if(!kw || kw==''){
                            tip.msgbox.err("请输入电话！");
                            return;
                        }
                        $('#select-diy-diymobile').data('href','tel:'+kw).trigger('click');
                        return;
                    }

                    if(type=='diyxcx'){
                        if(!kw || kw==''){
                            tip.msgbox.err("请输入小程序APPID！");
                            return;
                        }
                        if($("#select-diyxcxurl-kw").val() != ''){
                            $('#select-diy-diyxcx').data('href', 'appid:'+kw+',appurl:'+$("#select-diyxcxurl-kw").val()).trigger('click');
                        }else{
                            $('#select-diy-diyxcx').data('href', 'appid:'+kw).trigger('click');
                        }

                        return;
                    }

                    if(type == 'goods_data_diy' && kw == ''){
                        kw = 'all';
                    }

                    if(!kw || kw==''){
                        tip.msgbox.err("请输入搜索关键字！");
                        return;
                    }


                    $("#select-"+type+"-list").html('<div class="tip">正在进行搜索...</div>');
                    $.ajax("<?php  echo webUrl('util/selecturl/query', array('full'=>$full, 'platform'=>$platform))?>", {
                        type: "get",
                        dataType: "html",
                        cache: false,
                        data: {kw:kw, type:type}
                    }).done(function (html) {
                        $("#select-"+type+"-list").html(html);
                    });
                });

                $('.goods_data_diy').click(function(){
                    $(".select_goods_diy").show();
                    var kw = 'all';
                    var type = 'goods_data_diy';
                    $.ajax("<?php  echo webUrl('util/selecturl/query', array('full'=>$full, 'platform'=>$platform))?>", {
                        type: "get",
                        dataType: "html",
                        cache: false,
                        data: {kw:kw, type:type}
                    }).done(function (html) {
                        $("#select-"+type+"-list").html(html);
                    });
                });
                $('.sut_shop_data').click(function(){
                    $(".select_shop_data").show();
                    $(".select_goods_diy").hide();
                });
                $('.sut_goods_data').click(function(){
                    $(".select_shop_data").hide();
                    $(".select_goods_diy").hide();
                });

                $('.goods_data_cate').click(function(){
                    $(".select_shop_data").hide();
                    $(".select_goods_diy").hide();
                });
                $('.goods_data_group').click(function(){
                    $(".select_shop_data").hide();
                    $(".select_goods_diy").hide();
                });
            });
		</script>
	</div>
</div>