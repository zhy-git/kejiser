<?php 
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;

	if( $_GPC['op'] == 'list' ) {

		$where = array('uniacid' => $_W['uniacid']);
		if( !empty( $_GPC['actsort'] ) ) $where['sortid'] = intval( $_GPC['actsort'] );

		if( !empty( $_GPC['for'] ) ) {
			$where['title@'] = $_GPC['for'];
		}

		$info = Util::getAllDataInSingleTable('zofui_sitetemp_product',$where,$_GPC['page'],10,' `number` DESC,`id` DESC ',false,false,' id,img,title ');
		$list = $info[0];
		
		if( !empty( $list ) ) {
			foreach ($list as &$v) {
				$v['url'] = '/zofui_sitetemp/pages/product/product?aid='.$v['id'];
				$v['img'] = tomedia( $v['img'] );
			}
		}
		
		$data['list'] = $list;

		// 分类
		$data['artsort'] = model_prosort::getSort();
		
		$data['set'] = array(
			'prostyle' => intval( $this->module['config']['prostyle'] ),
		);
		
		$this->result(0, '',$data);
	
	}elseif( $_GPC['op'] == 'product' ) {
		
		$info = pdo_get('zofui_sitetemp_product',array('uniacid'=>$_W['uniacid'],'id'=>$_GPC['id']));
		if( !empty( $info ) ) {
			$info['content'] = htmlspecialchars_decode( $info['content'] );
			$info['img'] = tomedia( $info['img'] );
		}else{
			$this->result(1, '产品不存在');
		}
		$this->result(0, '',$info);
		
	}else{
		//添加特派员个人信息的
		$info = pdo_get('zofui_sitetemp_product',array('uniacid'=>$_W['uniacid'],'openid'=>$_GPC['openid']));
		if ($info) {
			$this->result(1, '你已添加过了。');
		}else{
			$userinfodate = [
				'uniacid' => $_W['uniacid'],
	            'openid' => $_W['openid'],
	            'title' => $_GPC['name'],
	            'phone' => $_GPC['phone'],
	            'img' => $_GPC['img'],
	            'content' => $_GPC['content'],
	            'createtime' => time(),
	    	];
	    	$result = pdo_insert('zofui_sitetemp_product',$userinfodate);
	    	if ($result) {
	    		$this->result(0, '操作成功',$result);
	    	}else{
	    		$this->result(1, '操作失败');
	    	}
		}
	}

	