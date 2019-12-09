<?php 
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;

	if( $_GPC['op'] == 'getlist' ) {


		$where = array('uniacid' => $_W['uniacid'],'status'=>0);
	

		if( isset( $_GPC['for'] ) ) {
			$where['title'] = $_GPC['for'];
		}
       
        
         //$this->result(0, '',$where);
		$order = ' `id` DESC ';
		if( $_GPC['otype'] == 1 ) $order = ' `id` DESC ';
		if( $_GPC['otype'] == 2 ) $order = ' `createtime` DESC ';
		if( $_GPC['otype'] == 3 ) {

			if( $_GPC['priceo'] == 'true' ) $order = ' `price` DESC ';
			if( $_GPC['priceo'] == 'false' ) $order = ' `price` ASC ';
		}
		
		
		$info = Util::getAllDataInSingleTable('zofui_sitetemp_userinfo',$where,$_GPC['page'],10,$order,false,false,' id,title,phone,img,createtime ');
		$list = $info[0];
		// $this->result(0, '',$list);
		if( !empty( $list ) ) {
			foreach ($list as &$v) {
				$v['url'] = '/zofui_sitetemp/pages/product/product?id='.$v['id'];
				$v['img'] = strtok(tomedia( $v['img'] ),',');
				$v['createtime'] = date('Y-m-d',$v['createtime']);
				
			}
		}		
		$data['list'] = $list;
		
		$data['set'] = array(
			'listprice' => intval( $this->module['config']['listprice'] ),
			'listtitle' => intval( $this->module['config']['listtitle'] ),
			'titlepos' => $this->module['config']['titlepos'],
		);
		
		if( empty( $_GPC['sortid'] ) && empty( $_GPC['isinit'] ) ) {
			$allsort = model_goodsort::getSort(0);
			$sort = array();
			foreach ( $allsort as $v ) {
				if( !empty( $v['down'] ) ){
					foreach ($v['down'] as $vv) {
						$sort[] = $vv;
					}
				}
			}
			$data['twosort'] = $sort;
		}

		$this->result(0, '',$data);
		
	}

	