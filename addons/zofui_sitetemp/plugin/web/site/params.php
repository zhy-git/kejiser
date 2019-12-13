<?php 
	global $_GPC,$_W;

	$menu = array(
		'index' => 2,
		'name' => '霍城科学大巴扎系统',
		'do' => 'temp',
		'p' => 'site',
		'op' => 'my',
		'leftbar' => array(
	  		'temp' => array(
	  			'name' => '模板管理',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'my','name'=>'我的模板','url' => self::pwUrl('site','temp',array('op'=>'my')) ),
	  				// array('op'=>'sys','name'=>'系统模板','url'=> self::pwUrl('site','temp',array('op'=>'sys')) ),
	  			),
	  			'toplist' => array('my')
	  		),		  		
	  		'page' => array(
	  			'name' => '设计页面',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'list','name'=>'页面列表','url'=> self::pwUrl('site','page',array('op'=>'list','tid'=>$_GPC['tid'])) ),
	  				array('op'=>'add','name'=>'添加页面','url'=> self::pwUrl('site','page',array('op'=>'add','tid'=>$_GPC['tid'])) ),
	  				array('op'=>'bar','name'=>'设计导航','url'=> self::pwUrl('site','page',array('op'=>'bar','tid'=>$_GPC['tid'])) ),
	  				array('op'=>'edit','name'=>'编辑页面','url'=> self::pwUrl('site','page',array('op'=>'edit','tid'=>$_GPC['tid'],'id'=>$_GPC['id'])) ,'hide'=>1),
	  			),
	  			'toplist' => array('add','list','bar','edit'),
	  			'hide' => 1,
	  		),
	  		'bar' => array(
	  			'name'=>'页脚导航',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'design','name'=>'设计导航','url'=> self::pwUrl('site','bar',array('op'=>'design')) ),
	  				//array('op'=>'list','name'=>'导航列表','url'=>Util::webUrl('bar',array('op'=>'list'))),
	  			),
	  			'toplist' => array('design'),
	  			'hide' => 1,
	  		),		
            'reguser' => array(
                 'name' => '会员管理',
                 'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
                 'list'=>array(
	  				array('op'=>'list','name'=>'个人中心','url'=> self::pwUrl('site','reguser',array('op'=>'list')) ),
	  			),
                 'toplist' => array('list'),
            ),

	  		'article' => array(
	  			'name' => '文章管理',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'add','name'=>'添加文章','url'=> self::pwUrl('site','article',array('op'=>'add')) ),
	  				array('op'=>'list','name'=>'文章列表','url'=> self::pwUrl('site','article',array('op'=>'list')) ),
	  			),
	  			'toplist' => array('add','list'),
	  		),
	  		'artsort' => array(
	  			'name' => '文章分类',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'list','name'=>'分类列表','url'=> self::pwUrl('site','artsort',array('op'=>'list')) ),
	  			),
	  			'toplist' => array('list'),
	  		),
	  		'product' => array(
	  			'name' => '特派员管理',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				// array('op'=>'add','name'=>'添加特派员','url'=> self::pwUrl('site','product',array('op'=>'add')) ),
	  				array('op'=>'list','name'=>'特派员列表','url'=> self::pwUrl('site','product',array('op'=>'list')) ),
	  			),
	  			'toplist' => array('add','list'),
	  		),
	  		'prosort' => array(
	  			'name' => '特派员分类',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'list','name'=>'分类列表','url'=> self::pwUrl('site','prosort',array('op'=>'list')) ),
	  			),
	  			'toplist' => array('list'),
	  		),	
	  		'countryside' => array(
                 'name' => '下乡管理',
                 'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
                 'list'=>array(
	  				array('op'=>'list','name'=>'下乡列表','url'=> self::pwUrl('site','countryside',array('op'=>'list')) ),
	  			),
	  			'toplist' => array('list'),
	  		),	
	  		'form' => array(
	  			'name'=>'前端查看',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				// array('op'=>'wait','name'=>'审核数据','url'=> self::pwUrl('site','form',array('op'=>'wait')) ),
	  				// array('op'=>'scaned','name'=>'已审数据','url'=> self::pwUrl('site','form',array('op'=>'scaned')) ),
	  				array('op'=>'admin','name'=>'前端查看','url'=> self::pwUrl('site','form',array('op'=>'admin')) ),
	  			),
	  			'toplist' => array('wait','scaned','admin')
	  		),

		),
	);

	// if( $_W['role'] == 'founder' ) {
	// 	$menu['leftbar']['temp']['list'][] = array('op'=>'module','name'=>'模块模板','url'=> self::pwUrl('site','temp',array('op'=>'module')) );
	// 	$menu['leftbar']['temp']['toplist'][] = 'module';
	// }

	return $menu;