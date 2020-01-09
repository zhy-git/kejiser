<?php 
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;

	if( $_GPC['op'] == 'list' ) {

		$where = array('uniacid' => $_W['uniacid']);
		if( !empty( $_GPC['actsort'] ) ) $where['sortid'] = intval( $_GPC['actsort'] );

		if( !empty( $_GPC['for'] ) ) {
			$where['title@'] = $_GPC['for'];
		}

		$info = Util::getAllDataInSingleTable('zofui_sitetemp_video',$where,$_GPC['page'],10,' `number` DESC,`id` DESC ',false,false,' id,img,title,time,type,url ');
		$list = $info[0];
		
		if( !empty( $list ) ) {
			foreach ($list as &$v) {
				if( empty( $v['type'] ) ){
					$v['url'] = '/zofui_sitetemp/pages/videodetails/videodetails?videoid='.$v['id'];
				}elseif( $v['type'] == 1 ){
					$v['url'] = $v['url'];
				}
				
				$v['img'] = tomedia( $v['img'] );
			}
		}
		
		$data['list'] = $list;

		// 分类
		// $data['artsort'] = model_artsort::getSort();
		
		$data['set'] = array(
			'artstyle' => intval( $this->module['config']['artstyle'] ),
		);
		
		$this->result(0, '',$data);
	
	}elseif( $_GPC['op'] == 'article' ) {
		
		$info = pdo_get('zofui_sitetemp_video',array('uniacid'=>$_W['uniacid'],'id'=>$_GPC['id']));
		if( !empty( $info ) ) {
			$info['content'] = htmlspecialchars_decode( $info['content'] );
			$info['img'] = tomedia( $info['img'] );
		}else{
			$this->result(1, '文章不存在');
		}

		Util::addOrMinusOrUpdateData('zofui_sitetemp_video',array('readed'=>1),$info['id']);

		$info['isfoot'] = intval( $this->module['config']['isartfoot'] );

		$this->result(0, '',$info);
		
	}

	