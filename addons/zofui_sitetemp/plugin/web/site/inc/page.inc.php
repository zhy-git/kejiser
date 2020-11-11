<?php 
	global $_W,$_GPC;
	
	$temp = pdo_get('zofui_sitetemp_temp',array('id'=>$_GPC['tid']));
	if( empty( $temp ) || ( !empty( $temp ) && $temp['uniacid'] != $_W['uniacid'] && $_W['role'] != 'founder' ) ) 
		itoast('请选择模板','','error');


	//批量删除
	if(checksubmit('deleteall')){
		$res = WebCommon::deleteDataInWeb($_GPC['checkall'],'zofui_sitetemp_page');
		itoast('操作完成,成功删除'.$res[0].'项，失败'.$res[1].'项','','success');
	}
	
	
	if($_GPC['op'] == 'list'){

		$where = array('uniacid'=>$_W['uniacid']);
		$where['tempid'] = $_GPC['tid'];

		$info = Util::getAllDataInSingleTable('zofui_sitetemp_page',$where,$_GPC['page'],10,' `id` DESC ',true,true,' id,name,tempid ');
		$list = $info[0];
		$pager = $info[1];
		
		if( !empty( $list ) ) {
			foreach ($list as &$v) {
				$v['imgurl'] = $this->createWebUrl('img',array('op'=>'page','id'=>$v['id']));
			}
		}

	}
	
	if($_GPC['op'] == 'delete'){
		$res = WebCommon::deleteSingleData($_GPC['id'],'zofui_sitetemp_page');
		if($res) itoast('删除成功','','success');
	}

	$goodtowsort = model_goodsort::getTwoClass(0);
	$ordertowsort = model_goodsort::getTwoClass(1);
	$allsort = model_artsort::getSort();
	$appsort = model_appsort::getSort();
	$prosort = model_prosort::getSort();


	if( $_GPC['op'] == 'edit' ) {
		$page = pdo_get('zofui_sitetemp_page',array('uniacid'=>$_W['uniacid'],'id'=>$_GPC['id']));
		
		
		if( empty( $page ) ) message('未找到页面',referer(),'error');
		$page['params'] = iunserializer( $page['params'] );
		
		if( !empty( $page['params']['data'] ) ){

			foreach ( $page['params']['data'] as $k => &$v ) {
				
				if( $v['name'] == 'goods' ){
					if( !empty( $v['params']['data'] ) ) {
						foreach ( $v['params']['data'] as $kk => $vv ) {
							
							$good = model_good::getGood( $vv['gid'] );
							
							if( empty( $good ) ){
								unset( $v['params']['data'][$kk] );
							}else{
								$v[$kk]['thumb'] = tomedia( $good['thumb'] );
								$v[$kk]['title'] = $good['title'];
								$v[$kk]['price'] = $good['price'];
								$v[$kk]['oldprice'] = $good['oldprice'];
								$v[$kk]['sales'] = $good['sales'];
							}

						}
					}
				}

			}
			if( empty( $page['params']['data'][$k] ) ) unset( $page['params']['data'][$k] );
		}
		

		/*$info = Util::getAllDataInSingleTable('zofui_sitetemp_article',array('uniacid'=>$_W['uniacid']),1,3,' `number` DESC ',false,false,' img,title,time ');
		$article = $info[0];
		if( !empty( $article ) ) {
			foreach ( $article as &$v ) {
				$v['img'] = tomedia( $v['img'] );
			}
			unset( $v );
		}*/

	}

	if( $_GPC['op'] == 'add' && !empty( $_GPC['lid'] ) ) {
		$page = pdo_get('zofui_sitetemp_page',array('uniacid'=>$_W['uniacid'],'id'=>$_GPC['lid']));
		if( empty( $page ) ) itoast('未找到页面','','error');
		$page['params'] = iunserializer( $page['params'] );
		unset( $page['id'] );
	}

	if( $_GPC['op'] == 'bar' ) {
		
		$page = pdo_get('zofui_sitetemp_bar',array('tempid'=>$_GPC['tid']));
		if( !empty( $page ) ) $page['data'] = iunserializer( $page['data'] );
		
		$thistemp = pdo_get('zofui_sitetemp_temp',array('id'=>$_GPC['tid']));

	}

	if( $_GPC['op'] == 'downqr' ) {
		
		
		load()->model('account');
		$uniacccount = WeAccount::create($_W['acid']);

		$res = Util::wxappQrcode( $uniacccount,'p'.$_GPC['id'],'zofui_sitetemp/pages/page/page' );

		header("content-type: image/jpeg");
		header("Content-Disposition:attachment; filename=".$_GPC['id'].".jpg");	
		echo $res;
	  	die;
		

	}	

	include $this->pTemplate('page');