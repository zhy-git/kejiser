<?php 
	defined('IN_IA') or exit('Access Denied');
	global $_W,$_GPC;

	if( $_GPC['op'] == 'gsort' ) {

		$plug = intval( $_GPC['plug'] );

		if( empty($plug) ) {
			$allsort = model_goodsort::getSort( 0 );
			$sort = array();
			if( !empty( $allsort ) ) {
				foreach ($allsort as $k => &$v) {

					// 分隔各个模板的分类
					if( $this->module['config']['iscutsort'] == 1 && $_GPC['tid'] != $v['tempid'] ){
						continue;
					}

					if( !empty( $v['down'] ) ) {
						foreach ($v['down'] as $kk => $vv) {
							$v['down'][$kk]['img'] = tomedia( $vv['img'] );
							$v['down'][$kk]['url'] = '/zofui_sitetemp/pages/goodlist/goodlist?sid='.$vv['id'];
						}
						$sort[] = $v;
					}
				}
				unset( $v );
			}
			

			$data['allsort'] = $sort;
			
			$data['set'] = array(
				'sorttype' => intval( $this->module['config']['sorttype'] ),
			);

		}elseif( $plug == 1 ){

			$allsort = model_goodsort::getSort(1);
			$sort = array();
			if( !empty( $allsort ) ) {
				foreach ($allsort as $k => &$v) {

					if( !empty( $v['down'] ) ) {
						foreach ($v['down'] as $kk => $vv) {
							$v['down'][$kk]['img'] = tomedia( $vv['img'] );
							$v['down'][$kk]['url'] = '/zofui_sitetemp/pages/deskorder/goodlist?sid='.$vv['id'];
						}
						$sort[] = $v;
					}
				}
				unset( $v );
			}
			

			$data['allsort'] = $sort;
			
			$data['set'] = array(
				'sorttype' => intval( $this->module['config']['osorttype'] ),
			);
		}
		
		
		$this->result(0, '',$data);
	
	}elseif( $_GPC['op'] == 'article' ) {
		
		$info = pdo_get('zofui_sitetemp_article',array('uniacid'=>$_W['uniacid'],'id'=>$_GPC['id']));
		if( !empty( $info ) ) {
			$info['content'] = htmlspecialchars_decode( $info['content'] );
			$info['img'] = tomedia( $info['img'] );
		}

		Util::addOrMinusOrUpdateData('zofui_sitetemp_article',array('readed'=>1),$info['id']);

		$this->result(0, '',$info);
		
	}elseif($_GPC['op'] == 'prosort'){

        $proinfo = Util::getAllDataInSingleTable('zofui_sitetemp_prosort',array('uniacid'=>$_W['uniacid'],'proid'=>0),1,999,' `number` DESC ');
        $proinfo = $proinfo[0];
        
	    foreach ($proinfo as $key => $value) {
	    	      $proinfo[$key]['id'] = $key;
	    	      $proinfo[$key]['uid'] = $value['id'];
	    	      $proinfo[$key]['hiddens'] = true;
	    	      $proinfo[$key]['title'] = $value['name'];
                  $proinfo[$key]['txt'] = pdo_getall('zofui_sitetemp_prosort',array('proid'=>$value['id']),array('id','name'));
	    }
        $this->result(0, '',$proinfo);

	}elseif ($_GPC['op'] == 'menus') {
		//获取所有分类的类目
		$proinfo = Util::getAllDataInSingleTable('zofui_sitetemp_prosort',array('uniacid'=>$_W['uniacid']),1,999,' `number` DESC ');
	    $proinfo = $proinfo[0];
		$proinfo = Util::prosort($proinfo);
		if ($proinfo) {
			$this->result(0, '操作成功',$proinfo);
		}else{
			$this->result(1, '操作失败');
		}
		
	}elseif ($_GPC['op'] == 'sortlist') {

		$data = pdo_getall('zofui_sitetemp_prosort',array('uniacid'=>$_W['uniacid'],'proid'=>0,array('id'));
          if ($data) {
          	   foreach ($data as $key => &$v) {
				   $datalist = pdo_getall('zofui_sitetemp_prosort',array('proid'=>$v['id']),array('id','name'));
			   }
          	   $this->result(0, '操作成功',$datalist);
          }else{
               $this->result(1, '操作失败');
          }

	}

	