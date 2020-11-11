<?php 
	global $_W,$_GPC;

	$orderdata = model_order::orderData(1);

	$menu = array(
		'index' => 3,
		'name' => '点餐系统',
		'p' => 'order',
		'do' => 'good',
		'op' => 'list',
		'leftbar' => array(
	  		'good' => array(
	  			'name' => '商品管理',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'add','name'=>'添加商品','url'=> self::pwUrl('order','good',array('op'=>'add')) ),
	  				array('op'=>'list','name'=>'商品列表','url'=> self::pwUrl('order','good',array('op'=>'list')) ),
	  				
	  			),
	  			'toplist' => array('add','list','gettb'),
	  		),
	  		'order' => array(
	  			'name' => '订单管理',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'1','name'=>'等待支付','url'=> self::pwUrl('order','order',array('op'=>'1')) ,'hide'=>1,'showtop'=>1,'num'=>$orderdata['ordering']),
	  				array('op'=>'2','name'=>'等待发货','url'=> self::pwUrl('order','order',array('op'=>'2')),'num'=>$orderdata['orderpayed']),
	  				array('op'=>'3','name'=>'已经发货','url'=> self::pwUrl('order','order',array('op'=>'3')),'num'=>$orderdata['ordersend']),
	  				array('op'=>'4','name'=>'已经完成','url'=> self::pwUrl('order','order',array('op'=>'4')),'num'=>$orderdata['ordercom']),
	  				array('op'=>'5','name'=>'已经退款','url'=> self::pwUrl('order','order',array('op'=>'5')),'hide'=>1,'showtop'=>1,'num'=>$orderdata['refund']),
	  				array('op'=>'down','name'=>'下载订单','url'=> self::pwUrl('order','order',array('op'=>'down')),'hide'=>1,'showtop'=>1),
	  			),
	  			'toplist' => array('1','2','3','4','5','down'),
	  		),
	  		'goodsort' => array(
	  			'name' => '商品分类',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'list','name'=>'分类列表','url'=> self::pwUrl('order','goodsort',array('op'=>'list')) ),
	  				
	  			),
	  			'toplist' => array('list','class2'),
	  		),
	  		'orderform' => array(
	  			'name' => '订单表单',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'list','name'=>'表单列表','url'=> self::pwUrl('order','orderform',array('op'=>'list')) ),
	  			),
	  			'toplist' => array('list'),
	  		),
	  		'print' => array(
	  			'name' => '打印设备',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'list','name'=>'打印设备','url'=> self::pwUrl('order','print',array('op'=>'list')) ),
	  			),
	  			'toplist' => array('list'),
	  		),	  		
	  		'admin' => array(
	  			'name' => '管理人员',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'list','name'=>'管理列表','url'=> self::pwUrl('order','admin',array('op'=>'list')) ),
	  			),
	  			'toplist' => array('list'),
	  		),
	  		'desk' => array(
	  			'name' => '餐桌管理',
	  			'icon' => 'https://res.wx.qq.com/mpres/htmledition/images/icon/menu/icon_menu_management.png',
	  			'list'=>array(
	  				array('op'=>'list','name'=>'餐桌列表','url'=> self::pwUrl('order','desk',array('op'=>'list')) ),
	  			),
	  			'toplist' => array('list'),
	  		),
		),
	);

	return $menu;