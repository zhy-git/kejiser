<?php
pdo_query("CREATE TABLE IF NOT EXISTS `ims_house_banner_img` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '小程序标识号',
`conpany_id` int(11) NOT NULL DEFAULT '0' COMMENT '公司id',
`item_id` int(11) NOT NULL DEFAULT '0' COMMENT '项目id',
`img` varchar(255) DEFAULT NULL COMMENT '图片路径',
`type_img` tinyint(4) NOT NULL DEFAULT '0' COMMENT '图片类型  1是公司  2 是项目 ',
`delete_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '删除时间',
`create_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '创建时间',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_house_class` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '小程序标识号',
`name` varchar(50) DEFAULT NULL COMMENT '分类名称',
`img` varchar(255) DEFAULT NULL COMMENT '分类图片',
`delete_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '删除时间',
`create_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '创建时间',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_house_company` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '小程序标识号',
`name` varchar(50) NOT NULL COMMENT '名称',
`company_img` varchar(255) NOT NULL COMMENT '公司图片',
`title` varchar(200) DEFAULT NULL COMMENT '描述',
`create_time` int(11) DEFAULT NULL DEFAULT '0',
`content` text DEFAULT NULL COMMENT '富文本',
`video` varchar(200) DEFAULT NULL COMMENT '视频',
`x` char(20) DEFAULT NULL COMMENT '经',
`y` char(20) DEFAULT NULL COMMENT '纬',
`tel` char(11) DEFAULT NULL COMMENT '电话',
`address` varchar(100) DEFAULT NULL COMMENT '公司地址',
`notice` varchar(255) DEFAULT NULL COMMENT '以 #分隔公告',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_house_item` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '小程序标识号',
`name` varchar(50) DEFAULT NULL COMMENT '名称',
`class_id` int(11) NOT NULL DEFAULT '0' COMMENT '外键，关联分类表',
`thumb_img` varchar(255) DEFAULT NULL COMMENT '产品缩图',
`img` varchar(255) DEFAULT NULL COMMENT '产品图',
`titile` varchar(200) DEFAULT NULL COMMENT '产品描述',
`price` char(50) DEFAULT NULL COMMENT '价格',
`jun_price` char(50) DEFAULT NULL COMMENT '均价',
`jiaoyu` varchar(255) DEFAULT NULL COMMENT '教育',
`jiaotong` varchar(255) DEFAULT NULL COMMENT '交通',
`fujin` varchar(255) DEFAULT NULL COMMENT '附近',
`tese` varchar(255) DEFAULT NULL COMMENT '房源特色',
`content` text DEFAULT NULL COMMENT '富文本',
`is_home` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '上榜首页',
`is_like` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '猜你喜欢',
`create_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '创建时间',
`sort` tinyint(4) DEFAULT NULL DEFAULT '0' COMMENT '排序',
`y` varchar(255) DEFAULT NULL COMMENT '‘维度’',
`x` varchar(255) DEFAULT NULL COMMENT '‘经度’',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_house_yue` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '小程序标识号',
`user` char(40) DEFAULT NULL COMMENT '用户名称',
`tel` char(11) DEFAULT NULL COMMENT '电话',
`create_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '预约时间',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_house` (
`id` int(10) unsigned NOT NULL COMMENT '店铺id' AUTO_INCREMENT,
`user_id` int(10) NOT NULL DEFAULT '0' COMMENT '用户id',
`shop_name` varchar(200) DEFAULT NULL COMMENT '店铺名称',
`shop_type` int(4) NOT NULL DEFAULT '0' COMMENT '店铺类型,1为二手房，2为新房，3为建材店铺，4为装修店铺',
`shop_country` smallint(6) DEFAULT NULL COMMENT '店铺所在国家',
`shop_province` smallint(6) DEFAULT NULL COMMENT '店铺所在省份',
`shop_city` smallint(6) DEFAULT NULL COMMENT '店铺所在城市',
`shop_district` smallint(6) DEFAULT NULL COMMENT '店铺所在区',
`shop_bcircle` smallint(6) DEFAULT NULL,
`shop_address` varchar(255) DEFAULT NULL COMMENT '店铺所在详细地址',
`shop_images` varchar(255) DEFAULT NULL COMMENT '店铺介绍中的图片',
`shop_logo` varchar(255) DEFAULT NULL COMMENT '店铺logo',
`shop_template_img` varchar(255) DEFAULT NULL COMMENT '店铺模板大图',
`shop_template` varchar(20) NOT NULL DEFAULT 'default' COMMENT '店铺模板',
`shop_management` varchar(255) DEFAULT NULL COMMENT '店铺主营',
`created` datetime DEFAULT NULL COMMENT '店铺创建时间',
`goods_num` int(10) NOT NULL DEFAULT '0' COMMENT '店铺产品数量',
`open_flg` tinyint(1) NOT NULL DEFAULT '0' COMMENT '店铺关闭，1为关闭',
`view` int(10) DEFAULT NULL DEFAULT '0' COMMENT '点击量',
`favpv` int(10) NOT NULL DEFAULT '0',
`lock_flg` tinyint(1) NOT NULL DEFAULT '0' COMMENT '店铺锁定，1为锁定',
`map_x` varchar(20) DEFAULT NULL DEFAULT '0' COMMENT '地图经线坐标',
`map_y` varchar(20) DEFAULT NULL DEFAULT '0' COMMENT '地图纬线坐标',
`map_zoom` varchar(3) DEFAULT NULL DEFAULT '11' COMMENT '地图比例',
`count_imgsize` int(10) NOT NULL DEFAULT '0' COMMENT '图片总大小',
`shop_domain` varchar(20) DEFAULT NULL COMMENT '商店二级域名',
`shop_categories` int(10) DEFAULT NULL DEFAULT '0' COMMENT '店铺分类',
`allgrade` int(10) DEFAULT NULL DEFAULT '0' COMMENT '评价',
`grade1` int(10) DEFAULT NULL DEFAULT '0' COMMENT '品质',
`grade2` int(10) DEFAULT NULL DEFAULT '0' COMMENT '服务',
`grade3` int(10) DEFAULT NULL DEFAULT '0' COMMENT '性价比',
`bbscat` int(10) DEFAULT NULL DEFAULT '0' COMMENT '店铺论坛，比如新房的业主论坛',
`askcat` int(10) DEFAULT NULL DEFAULT '0' COMMENT '问答分类，比如新房的在线问答',
`weixin` varchar(255) DEFAULT NULL COMMENT '店铺微信',
`uniacid` int(11) NOT NULL,
PRIMARY KEY (`id`),
KEY `user_id` (`user_id`),
KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_house_album` (
`id` int(10) unsigned NOT NULL COMMENT '相册分类id' AUTO_INCREMENT,
`newshouse_id` int(10) NOT NULL COMMENT '楼盘id',
`album_cat_name` varchar(50) NOT NULL COMMENT '相册分类名称',
`album_unit` varchar(20) NOT NULL COMMENT '相册中的图片数量',
`parent_id` int(10) NOT NULL DEFAULT '0' COMMENT '父分类',
`sort_order` int(3) NOT NULL DEFAULT '0' COMMENT '分类排序',
`mode` smallint(5) DEFAULT NULL DEFAULT '0' COMMENT '分类类型',
`type` int(3) DEFAULT NULL DEFAULT '0',
`uniacid` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_house_attach` (
`id` int(11) unsigned NOT NULL COMMENT '图片id' AUTO_INCREMENT,
`name` varchar(255) DEFAULT NULL COMMENT '图片描述',
`newhouse_id` int(11) DEFAULT NULL COMMENT '楼盘newhouse_id',
`img_url` varchar(255) DEFAULT NULL COMMENT '图片url',
`img_url_s` varchar(255) DEFAULT NULL COMMENT '小图',
`img_size` varchar(10) DEFAULT NULL COMMENT '图片大小',
`upl_time` datetime DEFAULT NULL COMMENT '图片上传时间',
`is_intro_img` smallint(6) DEFAULT NULL COMMENT '是否是简介图片:0不是,1是',
`user_album_id` int(11) NOT NULL DEFAULT '0',
`sid` int(10) DEFAULT NULL DEFAULT '0' COMMENT '图片类型分类',
`posid` smallint(5) DEFAULT NULL DEFAULT '0' COMMENT '图片推荐位置',
`square` float DEFAULT NULL COMMENT '户型面积',
`dong` varchar(100) DEFAULT NULL COMMENT '户型所属楼栋',
`room` int(4) DEFAULT NULL COMMENT '户型房间数',
`hall` int(4) DEFAULT NULL COMMENT '户型厅数',
`garder` int(4) DEFAULT NULL COMMENT '户型卫生间数',
`hxname` varchar(32) DEFAULT NULL COMMENT '户型名字',
`chaoxiang` varchar(32) DEFAULT NULL COMMENT '户型朝向',
`sale` varchar(100) DEFAULT NULL COMMENT '户型卖点',
`total_price` float DEFAULT NULL COMMENT '户型总价',
`hxtotal` int(11) DEFAULT NULL COMMENT '户型总套数',
`up` int(2) DEFAULT NULL COMMENT '在首页显示',
`uniacid` int(11) NOT NULL DEFAULT '0',
PRIMARY KEY (`id`),
KEY `user_album_id` (`user_album_id`),
KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_house_info` (
`id` int(10) unsigned NOT NULL COMMENT '论坛帖子内容id' AUTO_INCREMENT,
`fid` int(10) unsigned NOT NULL COMMENT '论坛帖子id',
`fcatid` int(10) unsigned NOT NULL COMMENT '论坛帖子栏目id',
`user_id` int(10) NOT NULL COMMENT '发帖用户id',
`user_name` varchar(50) NOT NULL COMMENT '发帖用户名',
`newshouse_id` int(11) DEFAULT NULL COMMENT '楼盘id，关联店铺shopid',
`house_title` varchar(50) DEFAULT NULL COMMENT '楼盘名称',
`house_spell` varchar(150) NOT NULL COMMENT '楼盘拼音',
`house_old` varchar(255) NOT NULL COMMENT '楼盘曾用名',
`house_nature` varchar(50) DEFAULT NULL COMMENT '项目类型、楼盘性质',
`house_type` varchar(150) DEFAULT NULL COMMENT '建筑类型',
`house_fitment` varchar(50) DEFAULT NULL COMMENT '装修状况',
`house_starttime_history` varchar(255) DEFAULT NULL,
`house_startselldate` varchar(50) DEFAULT NULL COMMENT '开盘日期',
`house_usetime` varchar(50) DEFAULT NULL COMMENT '入住时间',
`house_green` float DEFAULT NULL COMMENT '绿化率',
`house_capacity` float DEFAULT NULL COMMENT '容积率',
`house_selltelephone` varchar(100) DEFAULT NULL COMMENT '销售热线',
`house_xtel` varchar(200) DEFAULT NULL COMMENT '400电话',
`house_xQQ` varchar(100) DEFAULT NULL COMMENT '业主QQ群',
`house_developer` varchar(100) DEFAULT NULL COMMENT '开发商',
`house_constructor` varchar(100) DEFAULT NULL COMMENT '建筑商',
`house_license` varchar(200) DEFAULT NULL COMMENT '销售证',
`house_design_type` varchar(255) NOT NULL COMMENT '建筑设计风格',
`house_design_corp` varchar(255) NOT NULL COMMENT '景观设计公司',
`house_sale_company` varchar(255) NOT NULL COMMENT '代理策划公司',
`house_design_company` varchar(255) NOT NULL COMMENT '设计公司',
`house_touzi` varchar(255) NOT NULL COMMENT '投资公司',
`house_address` varchar(100) DEFAULT NULL COMMENT '销售中心地址',
`house_parking` varchar(30) DEFAULT NULL COMMENT '停车位',
`house_roomcount` varchar(30) DEFAULT NULL COMMENT '总户数',
`house_totalarea` float(10,2) DEFAULT NULL COMMENT '占地面积 平方米',
`house_builtuparea` float(10,2) DEFAULT NULL COMMENT '建筑面积 平方米',
`house_property` varchar(100) DEFAULT NULL COMMENT '物业顾问',
`house_propertyprice` varchar(200) DEFAULT NULL COMMENT '物业管理费 平方米/月',
`house_introduce` text DEFAULT NULL COMMENT '项目介绍',
`house_devsynopsis` text DEFAULT NULL COMMENT '开发商介绍',
`house_consynopsis` text DEFAULT NULL COMMENT '建筑商介绍',
`house_traffic` text DEFAULT NULL COMMENT '交通状况',
`house_peripheral` text DEFAULT NULL COMMENT '周边配套',
`house_video` varchar(250) DEFAULT NULL COMMENT '视频地址',
`house_logo` varchar(250) DEFAULT NULL COMMENT 'logo地址',
`house_memo` text DEFAULT NULL COMMENT '备注',
`house_region` varchar(30) DEFAULT NULL COMMENT '城区id',
`house_adddatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP  COMMENT '添加时间，自动获取，默认值current_timestamp',
`house_saleaddress` varchar(250) DEFAULT NULL COMMENT '销售 ',
`house_face` varchar(255) DEFAULT NULL COMMENT '楼盘形象图片',
`is_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否合作：1为合作；0为没有合作',
`house_show` varchar(150) NOT NULL DEFAULT '1,2,3,4,5',
`house_sale` int(11) NOT NULL COMMENT '是否在售：3待售，2预约，1在售,4售罄',
`house_paymethod` varchar(255) NOT NULL COMMENT '支付方式',
`house_mark` varchar(100) DEFAULT NULL COMMENT '楼盘标签（格式1,2,）',
`house_bank` varchar(100) NOT NULL COMMENT '按揭银行',
`house_poster` varchar(150) DEFAULT NULL COMMENT '楼盘广告语',
`house_main` varchar(200) DEFAULT NULL COMMENT '楼盘主打户型',
`house_adviser` tinyint(2) NOT NULL DEFAULT '0' COMMENT '置业顾问是否在线',
`showprice` varchar(10) NOT NULL DEFAULT 'avg' COMMENT '显示价格方式：min,avg,max,info',
`house_top` varchar(50) NOT NULL,
`house_public_area` varchar(100) NOT NULL COMMENT '公摊面积',
`house_prowedt` varchar(200) NOT NULL COMMENT '供应资源',
`house_worktime` varchar(100) NOT NULL COMMENT '接待时间',
`house_zb_shop` varchar(255) NOT NULL COMMENT '周边大商场',
`house_zb_youeryuan` varchar(255) NOT NULL COMMENT '幼儿园',
`house_zb_yiyuan` varchar(255) NOT NULL COMMENT '周边医院',
`house_zb_chuzhong` varchar(100) NOT NULL COMMENT '周边初中',
`house_zb_xiaoxue` varchar(255) NOT NULL COMMENT '周边小学',
`house_zb_bank` varchar(255) NOT NULL COMMENT '周边银行',
`house_tj` tinyint(4) NOT NULL,
`house_hot` tinyint(4) NOT NULL,
`bbs_id` smallint(5) unsigned NOT NULL DEFAULT '0',
`zmcode` char(5) NOT NULL,
`isclose` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否关闭',
`average_price` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '均价',
`min_price` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '最低价',
`max_price` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '最高价',
`price_info` varchar(255) DEFAULT NULL DEFAULT '0' COMMENT '价格详情',
`tprice` varchar(45) DEFAULT NULL DEFAULT '0' COMMENT '价格标签',
`unit1` varchar(45) DEFAULT NULL DEFAULT '0' COMMENT '价格单位（元）',
`unit2` varchar(45) DEFAULT NULL DEFAULT '0' COMMENT '价格单位（平米）',
`uniacid` int(12) NOT NULL,
PRIMARY KEY (`id`),
KEY `user_id` (`user_id`),
KEY `newshouse_id` (`newshouse_id`),
KEY `house_sale` (`house_sale`),
KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_house_price` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`newhouse_id` int(11) DEFAULT NULL COMMENT '楼盘id，',
`uniacid` int(12) DEFAULT NULL,
`tprice` char(150) DEFAULT NULL COMMENT '价格类型',
`min_price` int(10) DEFAULT NULL COMMENT '楼盘最低价格',
`average_price` int(10) DEFAULT NULL COMMENT '楼盘平均价格',
`max_price` int(10) DEFAULT NULL COMMENT '楼盘最高价格',
`price_datetime` datetime DEFAULT NULL COMMENT '楼盘价格添加时间',
`price_info` varchar(150) DEFAULT NULL COMMENT '价格详情',
`isupdown` tinyint(2) NOT NULL DEFAULT '0' COMMENT '同比上期价格是否上升',
`isshow` smallint(2) DEFAULT NULL DEFAULT '0',
`unit1` varchar(120) DEFAULT NULL,
`unit2` varchar(120) DEFAULT NULL,
`s_price` int(11) DEFAULT NULL COMMENT '总价折算后单价',
PRIMARY KEY (`id`),
KEY `newhouse_id` (`newhouse_id`),
KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_house_room` (
`id` int(12) NOT NULL AUTO_INCREMENT,
`uniacid` int(12) DEFAULT NULL,
`thumb` varchar(255) DEFAULT NULL COMMENT '缩略图',
`title` varchar(255) DEFAULT NULL,
`album_name` varchar(100) DEFAULT NULL,
`album_id` int(12) DEFAULT NULL COMMENT '分类名称',
`newhouse_id` int(12) DEFAULT NULL,
`totalprice` varchar(100) DEFAULT NULL COMMENT '总价',
`saleprice` varchar(100) DEFAULT NULL COMMENT '单价',
`mianji` varchar(45) DEFAULT NULL,
`huxingjiegou` varchar(100) DEFAULT NULL,
`chaoxiang` varchar(100) DEFAULT NULL,
`loudong` varchar(100) DEFAULT NULL,
`btags` varchar(255) DEFAULT NULL COMMENT '标签',
`youshi` varchar(255) DEFAULT NULL,
`lieshi` varchar(255) DEFAULT NULL,
`kongjian` varchar(255) DEFAULT NULL,
`nums` varchar(35) DEFAULT NULL COMMENT '套数',
`posid` int(12) DEFAULT NULL COMMENT '推荐位置',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_house_saleinfo` (
`id` int(12) NOT NULL AUTO_INCREMENT,
`tid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '0=楼盘销售，1=看房团，2=新闻',
`fid` int(12) DEFAULT NULL,
`fname` varchar(100) DEFAULT NULL,
`uniacid` int(12) DEFAULT NULL,
`newhouse_id` int(12) DEFAULT NULL,
`title` varchar(255) DEFAULT NULL,
`thumb` varchar(255) DEFAULT NULL COMMENT '封面图',
`newstext` text DEFAULT NULL,
`addtime` datetime DEFAULT NULL,
`tags` varchar(50) DEFAULT NULL,
`smalltext` varchar(255) DEFAULT NULL,
`gpoun_time` varchar(255) DEFAULT NULL,
`gpoun_address` varchar(255) DEFAULT NULL,
`onclick` int(12) DEFAULT NULL,
`gpoun_num` int(12) DEFAULT NULL,
`posid` int(12) DEFAULT NULL DEFAULT '0' COMMENT '推荐位置',
`disabled` int(6) DEFAULT NULL DEFAULT '0' COMMENT '1=不显示',
`orderid` int(6) DEFAULT NULL DEFAULT '0' COMMENT '排序id',
`shopids` varchar(255) DEFAULT NULL COMMENT '关联的楼盘id 多个',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_sechouse` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`uniacid` int(10) unsigned NOT NULL COMMENT '公众号weid',
`house_sno` varchar(50) DEFAULT NULL COMMENT '公司房源no',
`broker_id` varchar(45) DEFAULT NULL DEFAULT '0' COMMENT '经纪人名称',
`broker_name` varchar(45) DEFAULT NULL COMMENT '经纪人名称',
`loyer` decimal(10,2) unsigned DEFAULT NULL DEFAULT '0.00' COMMENT '售价/租金',
`prix_unitaire` varchar(20) DEFAULT NULL COMMENT '价格单位',
`traveaux_finition` varchar(45) DEFAULT NULL COMMENT '装修状况',
`donner_sur` varchar(45) DEFAULT NULL COMMENT '朝向',
`storey` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '楼层',
`title` varchar(255) DEFAULT NULL COMMENT '标题',
`total_storey` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '共几层',
`superficie` decimal(10,0) DEFAULT NULL COMMENT '面积',
`description` text DEFAULT NULL COMMENT '描述',
`add_time` int(12) unsigned DEFAULT NULL DEFAULT '0' COMMENT '发布时间',
`update_time` int(12) unsigned DEFAULT NULL DEFAULT '0' COMMENT '更新时间',
`zhutype` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '租赁方式',
`thumb` varchar(255) DEFAULT NULL COMMENT '缩略图',
`thumb_url` text DEFAULT NULL COMMENT '房源图片',
`room` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '室',
`hall` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '厅',
`garder` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '卫',
`area` varchar(45) DEFAULT NULL COMMENT '区域',
`quan` varchar(100) DEFAULT NULL COMMENT '商圈',
`rent_type` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '类型，1二手，2整租，3合租,4求租',
`ptype` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '1中介，2个人',
`disposition` text DEFAULT NULL COMMENT '房屋配置',
`house_type` varchar(45) DEFAULT NULL COMMENT '房屋类型',
`village_id` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '小区id',
`village_name` varchar(45) DEFAULT NULL COMMENT '小区名称',
`build_age` varchar(45) DEFAULT NULL COMMENT '建筑年代',
`endtime` int(12) unsigned DEFAULT NULL DEFAULT '0' COMMENT '截止时间',
`linkphone` varchar(45) DEFAULT NULL COMMENT '联系手机',
`qq` varchar(45) DEFAULT NULL COMMENT '联系QQ',
`tell` varchar(45) DEFAULT NULL COMMENT '联系电话',
`company` varchar(45) DEFAULT NULL COMMENT '经纪人公司名称',
`publish_name` varchar(45) DEFAULT NULL COMMENT '姓名',
`istop` smallint(5) NOT NULL COMMENT '置顶房源',
`isjingpin` smallint(5) NOT NULL COMMENT '精品房源',
`ishot` smallint(5) NOT NULL COMMENT '十万火急',
`show_jiaji` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '加急',
`show_you` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '优质',
`show_hight` smallint(10) unsigned NOT NULL DEFAULT '0' COMMENT '高亮',
`ispic` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '有图',
`refresh_time` int(12) unsigned DEFAULT NULL DEFAULT '0' COMMENT '更新重新发布时间',
`isdigg` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '1未荐，2已荐',
`isonline` tinyint(1) DEFAULT NULL DEFAULT '0' COMMENT '1=在显示中',
`isshow` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '0显示，1不显示',
`onclick` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '点击率',
`iscompany` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '是否公司房源1',
`shopid` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '所属门店ID',
`dong` varchar(45) DEFAULT NULL,
`danyuan` varchar(45) DEFAULT NULL,
`menpai` varchar(45) DEFAULT NULL,
`isdelete` tinyint(1) DEFAULT NULL DEFAULT '0' COMMENT '1=删除房源',
`fav_num` int(12) DEFAULT NULL DEFAULT '0' COMMENT '收藏数',
`uid` int(12) NOT NULL DEFAULT '0',
`mapinfo` varchar(100) DEFAULT NULL COMMENT '百度坐标',
PRIMARY KEY (`id`),
KEY `broker_id` (`broker_id`),
KEY `rent_type` (`rent_type`),
KEY `refresh_time` (`refresh_time`),
KEY `house_type` (`house_type`),
KEY `loyer` (`loyer`),
KEY `village_name` (`village_name`),
KEY `isjingpin` (`isjingpin`),
KEY `istop` (`istop`),
KEY `isonline` (`isonline`),
KEY `isdelete` (`isdelete`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_sechouse_actlog` (
`id` int(12) NOT NULL AUTO_INCREMENT,
`actname` varchar(45) DEFAULT NULL COMMENT '操作类型',
`addtime` datetime DEFAULT NULL,
`num` int(12) DEFAULT NULL DEFAULT '0',
`ecuid` int(12) DEFAULT NULL DEFAULT '0' COMMENT '微擎uid',
`uniacid` int(12) DEFAULT NULL DEFAULT '0' COMMENT '公众号uniacid',
`acttype` int(12) DEFAULT NULL DEFAULT '1' COMMENT '类型1=普通操作2=充值3=付款4=刷新5=置顶',
`money` decimal(10,2) DEFAULT NULL,
`isadd` tinyint(1) DEFAULT NULL DEFAULT '1' COMMENT '1=增加0=减少',
`note` varchar(255) DEFAULT NULL,
`mark` varchar(255) DEFAULT NULL,
`infoid` int(12) DEFAULT NULL COMMENT '房源id',
PRIMARY KEY (`id`),
KEY `actname` (`actname`),
KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_sechouse_area` (
`id` int(12) NOT NULL COMMENT '主键' AUTO_INCREMENT,
`name` varchar(100) DEFAULT NULL,
`area` varchar(100) DEFAULT NULL,
`parent_id` int(12) DEFAULT NULL DEFAULT '0' COMMENT '父级',
`type` int(12) DEFAULT NULL DEFAULT '1' COMMENT '1=区域 2=商圈 3=小区',
`point` varchar(100) DEFAULT NULL COMMENT '地图坐标',
`orderid` int(12) DEFAULT NULL DEFAULT '0' COMMENT '排序id',
`thumb` varchar(255) DEFAULT NULL,
`uniacid` int(12) DEFAULT NULL DEFAULT '0',
`disabled` tinyint(1) DEFAULT NULL DEFAULT '0' COMMENT '1=不可用',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_sechouse_broker` (
`id` int(12) NOT NULL AUTO_INCREMENT,
`ecuid` int(12) DEFAULT NULL DEFAULT '0' COMMENT '微擎会员uid',
`openid` varchar(255) DEFAULT NULL,
`groupid` int(12) DEFAULT NULL DEFAULT '1' COMMENT '1=普通经济人，11=认证经济人',
`nickname` varchar(45) DEFAULT NULL,
`uniacid` int(12) DEFAULT NULL,
`mobile` varchar(35) DEFAULT NULL,
`avatar` varchar(255) DEFAULT NULL,
`vtags` varchar(255) DEFAULT NULL,
`desc` varchar(255) DEFAULT NULL,
`company` varchar(255) DEFAULT NULL,
`secnum` int(12) DEFAULT NULL DEFAULT '0',
`ernum` int(12) DEFAULT NULL DEFAULT '0',
`disabled` tinyint(1) DEFAULT NULL DEFAULT '0',
`uid` int(12) NOT NULL DEFAULT '0',
`shopid` int(12) NOT NULL DEFAULT '0',
`buygroup_log_id` int(12) DEFAULT NULL DEFAULT '0' COMMENT '升级vip日志id',
`end_time` datetime DEFAULT NULL COMMENT 'vip有效期',
`istop` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=置顶',
`isyou` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=优',
`ischeng` tinyint(4) DEFAULT NULL DEFAULT '0' COMMENT '1=诚',
`iscompany` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=内部经纪人',
PRIMARY KEY (`id`),
KEY `openid` (`openid`),
KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_sechouse_favorite` (
`id` int(12) NOT NULL AUTO_INCREMENT,
`uniacid` int(12) DEFAULT NULL,
`uid` int(12) DEFAULT NULL,
`openid` varchar(45) DEFAULT NULL,
`houseid` int(12) DEFAULT NULL,
`title` varchar(255) DEFAULT NULL,
`addtime` int(12) DEFAULT NULL,
`smalltext` varchar(255) DEFAULT NULL,
`ftype` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '0=收藏夹1=浏览记录',
`hits` int(12) DEFAULT NULL DEFAULT '0' COMMENT '浏览次数',
`last_time` int(12) DEFAULT NULL,
`bid` int(12) DEFAULT NULL DEFAULT '0',
`role_uid` int(12) NOT NULL DEFAULT '0',
`acttype` varchar(45) DEFAULT NULL DEFAULT 'view' COMMENT 'view,feed,fav',
`url` varchar(255) DEFAULT NULL COMMENT '链接地址',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_sechouse_param` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`houseid` int(10) DEFAULT NULL DEFAULT '0',
`title` varchar(50) DEFAULT NULL,
`value` text DEFAULT NULL,
`displayorder` int(11) DEFAULT NULL DEFAULT '0',
PRIMARY KEY (`id`),
KEY `indx_houseid` (`houseid`),
KEY `indx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_sechouse_replay` (
`id` int(12) NOT NULL AUTO_INCREMENT,
`rid` int(12) NOT NULL,
`content` text NOT NULL,
`titlepic` varchar(255) NOT NULL,
`smalltext` text NOT NULL,
`addtime` int(12) NOT NULL,
`disabled` tinyint(2) NOT NULL,
`weburl` varchar(255) NOT NULL,
`uid` int(12) NOT NULL DEFAULT '0',
PRIMARY KEY (`id`),
UNIQUE KEY `rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_kb_sechouse_shop` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`shopname` varchar(255) DEFAULT NULL,
`thumb` varchar(255) DEFAULT NULL,
`telphone` varchar(255) DEFAULT NULL,
`address` varchar(255) DEFAULT NULL,
`click` int(10) DEFAULT NULL DEFAULT '0',
`newstext` text DEFAULT NULL,
`uid` int(10) DEFAULT NULL DEFAULT '0' COMMENT '操作人名称',
`role_name` varchar(45) DEFAULT NULL,
`zhunum` int(12) DEFAULT NULL DEFAULT '0',
`secnum` int(12) DEFAULT NULL DEFAULT '0',
`uniacid` int(12) DEFAULT NULL,
`vtags` varchar(255) DEFAULT NULL,
`disabled` tinyint(2) unsigned DEFAULT NULL DEFAULT '0' COMMENT '开启关闭',
`istop` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=置顶',
`isyou` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=优',
`ischeng` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=城',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");
if(pdo_tableexists('house_banner_img')) {
	if(!pdo_fieldexists('house_banner_img',  'id')) {
		pdo_query("ALTER TABLE ".tablename('house_banner_img')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('house_banner_img')) {
	if(!pdo_fieldexists('house_banner_img',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('house_banner_img')." ADD `uniacid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '小程序标识号';");
	}	
}
if(pdo_tableexists('house_banner_img')) {
	if(!pdo_fieldexists('house_banner_img',  'conpany_id')) {
		pdo_query("ALTER TABLE ".tablename('house_banner_img')." ADD `conpany_id` int(11) NOT NULL DEFAULT '0' COMMENT '公司id';");
	}	
}
if(pdo_tableexists('house_banner_img')) {
	if(!pdo_fieldexists('house_banner_img',  'item_id')) {
		pdo_query("ALTER TABLE ".tablename('house_banner_img')." ADD `item_id` int(11) NOT NULL DEFAULT '0' COMMENT '项目id';");
	}	
}
if(pdo_tableexists('house_banner_img')) {
	if(!pdo_fieldexists('house_banner_img',  'img')) {
		pdo_query("ALTER TABLE ".tablename('house_banner_img')." ADD `img` varchar(255) DEFAULT NULL COMMENT '图片路径';");
	}	
}
if(pdo_tableexists('house_banner_img')) {
	if(!pdo_fieldexists('house_banner_img',  'type_img')) {
		pdo_query("ALTER TABLE ".tablename('house_banner_img')." ADD `type_img` tinyint(4) NOT NULL DEFAULT '0' COMMENT '图片类型  1是公司  2 是项目 ';");
	}	
}
if(pdo_tableexists('house_banner_img')) {
	if(!pdo_fieldexists('house_banner_img',  'delete_time')) {
		pdo_query("ALTER TABLE ".tablename('house_banner_img')." ADD `delete_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '删除时间';");
	}	
}
if(pdo_tableexists('house_banner_img')) {
	if(!pdo_fieldexists('house_banner_img',  'create_time')) {
		pdo_query("ALTER TABLE ".tablename('house_banner_img')." ADD `create_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '创建时间';");
	}	
}
if(pdo_tableexists('house_class')) {
	if(!pdo_fieldexists('house_class',  'id')) {
		pdo_query("ALTER TABLE ".tablename('house_class')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('house_class')) {
	if(!pdo_fieldexists('house_class',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('house_class')." ADD `uniacid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '小程序标识号';");
	}	
}
if(pdo_tableexists('house_class')) {
	if(!pdo_fieldexists('house_class',  'name')) {
		pdo_query("ALTER TABLE ".tablename('house_class')." ADD `name` varchar(50) DEFAULT NULL COMMENT '分类名称';");
	}	
}
if(pdo_tableexists('house_class')) {
	if(!pdo_fieldexists('house_class',  'img')) {
		pdo_query("ALTER TABLE ".tablename('house_class')." ADD `img` varchar(255) DEFAULT NULL COMMENT '分类图片';");
	}	
}
if(pdo_tableexists('house_class')) {
	if(!pdo_fieldexists('house_class',  'delete_time')) {
		pdo_query("ALTER TABLE ".tablename('house_class')." ADD `delete_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '删除时间';");
	}	
}
if(pdo_tableexists('house_class')) {
	if(!pdo_fieldexists('house_class',  'create_time')) {
		pdo_query("ALTER TABLE ".tablename('house_class')." ADD `create_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '创建时间';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'id')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `uniacid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '小程序标识号';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'name')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `name` varchar(50) NOT NULL COMMENT '名称';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'company_img')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `company_img` varchar(255) NOT NULL COMMENT '公司图片';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'title')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `title` varchar(200) DEFAULT NULL COMMENT '描述';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'create_time')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `create_time` int(11) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'content')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `content` text DEFAULT NULL COMMENT '富文本';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'video')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `video` varchar(200) DEFAULT NULL COMMENT '视频';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'x')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `x` char(20) DEFAULT NULL COMMENT '经';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'y')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `y` char(20) DEFAULT NULL COMMENT '纬';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'tel')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `tel` char(11) DEFAULT NULL COMMENT '电话';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'address')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `address` varchar(100) DEFAULT NULL COMMENT '公司地址';");
	}	
}
if(pdo_tableexists('house_company')) {
	if(!pdo_fieldexists('house_company',  'notice')) {
		pdo_query("ALTER TABLE ".tablename('house_company')." ADD `notice` varchar(255) DEFAULT NULL COMMENT '以 #分隔公告';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'id')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `uniacid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '小程序标识号';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'name')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `name` varchar(50) DEFAULT NULL COMMENT '名称';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'class_id')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `class_id` int(11) NOT NULL DEFAULT '0' COMMENT '外键，关联分类表';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'thumb_img')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `thumb_img` varchar(255) DEFAULT NULL COMMENT '产品缩图';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'img')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `img` varchar(255) DEFAULT NULL COMMENT '产品图';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'titile')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `titile` varchar(200) DEFAULT NULL COMMENT '产品描述';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'price')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `price` char(50) DEFAULT NULL COMMENT '价格';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'jun_price')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `jun_price` char(50) DEFAULT NULL COMMENT '均价';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'jiaoyu')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `jiaoyu` varchar(255) DEFAULT NULL COMMENT '教育';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'jiaotong')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `jiaotong` varchar(255) DEFAULT NULL COMMENT '交通';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'fujin')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `fujin` varchar(255) DEFAULT NULL COMMENT '附近';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'tese')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `tese` varchar(255) DEFAULT NULL COMMENT '房源特色';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'content')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `content` text DEFAULT NULL COMMENT '富文本';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'is_home')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `is_home` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '上榜首页';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'is_like')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `is_like` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '猜你喜欢';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'create_time')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `create_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '创建时间';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'sort')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `sort` tinyint(4) DEFAULT NULL DEFAULT '0' COMMENT '排序';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'y')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `y` varchar(255) DEFAULT NULL COMMENT '‘维度’';");
	}	
}
if(pdo_tableexists('house_item')) {
	if(!pdo_fieldexists('house_item',  'x')) {
		pdo_query("ALTER TABLE ".tablename('house_item')." ADD `x` varchar(255) DEFAULT NULL COMMENT '‘经度’';");
	}	
}
if(pdo_tableexists('house_yue')) {
	if(!pdo_fieldexists('house_yue',  'id')) {
		pdo_query("ALTER TABLE ".tablename('house_yue')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('house_yue')) {
	if(!pdo_fieldexists('house_yue',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('house_yue')." ADD `uniacid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '小程序标识号';");
	}	
}
if(pdo_tableexists('house_yue')) {
	if(!pdo_fieldexists('house_yue',  'user')) {
		pdo_query("ALTER TABLE ".tablename('house_yue')." ADD `user` char(40) DEFAULT NULL COMMENT '用户名称';");
	}	
}
if(pdo_tableexists('house_yue')) {
	if(!pdo_fieldexists('house_yue',  'tel')) {
		pdo_query("ALTER TABLE ".tablename('house_yue')." ADD `tel` char(11) DEFAULT NULL COMMENT '电话';");
	}	
}
if(pdo_tableexists('house_yue')) {
	if(!pdo_fieldexists('house_yue',  'create_time')) {
		pdo_query("ALTER TABLE ".tablename('house_yue')." ADD `create_time` int(11) DEFAULT NULL DEFAULT '0' COMMENT '预约时间';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `id` int(10) unsigned NOT NULL COMMENT '店铺id' AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'user_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `user_id` int(10) NOT NULL DEFAULT '0' COMMENT '用户id';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_name')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_name` varchar(200) DEFAULT NULL COMMENT '店铺名称';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_type')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_type` int(4) NOT NULL DEFAULT '0' COMMENT '店铺类型,1为二手房，2为新房，3为建材店铺，4为装修店铺';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_country')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_country` smallint(6) DEFAULT NULL COMMENT '店铺所在国家';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_province')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_province` smallint(6) DEFAULT NULL COMMENT '店铺所在省份';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_city')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_city` smallint(6) DEFAULT NULL COMMENT '店铺所在城市';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_district')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_district` smallint(6) DEFAULT NULL COMMENT '店铺所在区';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_bcircle')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_bcircle` smallint(6) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_address')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_address` varchar(255) DEFAULT NULL COMMENT '店铺所在详细地址';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_images')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_images` varchar(255) DEFAULT NULL COMMENT '店铺介绍中的图片';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_logo')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_logo` varchar(255) DEFAULT NULL COMMENT '店铺logo';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_template_img')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_template_img` varchar(255) DEFAULT NULL COMMENT '店铺模板大图';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_template')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_template` varchar(20) NOT NULL DEFAULT 'default' COMMENT '店铺模板';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_management')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_management` varchar(255) DEFAULT NULL COMMENT '店铺主营';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'created')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `created` datetime DEFAULT NULL COMMENT '店铺创建时间';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'goods_num')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `goods_num` int(10) NOT NULL DEFAULT '0' COMMENT '店铺产品数量';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'open_flg')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `open_flg` tinyint(1) NOT NULL DEFAULT '0' COMMENT '店铺关闭，1为关闭';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'view')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `view` int(10) DEFAULT NULL DEFAULT '0' COMMENT '点击量';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'favpv')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `favpv` int(10) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'lock_flg')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `lock_flg` tinyint(1) NOT NULL DEFAULT '0' COMMENT '店铺锁定，1为锁定';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'map_x')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `map_x` varchar(20) DEFAULT NULL DEFAULT '0' COMMENT '地图经线坐标';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'map_y')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `map_y` varchar(20) DEFAULT NULL DEFAULT '0' COMMENT '地图纬线坐标';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'map_zoom')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `map_zoom` varchar(3) DEFAULT NULL DEFAULT '11' COMMENT '地图比例';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'count_imgsize')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `count_imgsize` int(10) NOT NULL DEFAULT '0' COMMENT '图片总大小';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_domain')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_domain` varchar(20) DEFAULT NULL COMMENT '商店二级域名';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'shop_categories')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `shop_categories` int(10) DEFAULT NULL DEFAULT '0' COMMENT '店铺分类';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'allgrade')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `allgrade` int(10) DEFAULT NULL DEFAULT '0' COMMENT '评价';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'grade1')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `grade1` int(10) DEFAULT NULL DEFAULT '0' COMMENT '品质';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'grade2')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `grade2` int(10) DEFAULT NULL DEFAULT '0' COMMENT '服务';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'grade3')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `grade3` int(10) DEFAULT NULL DEFAULT '0' COMMENT '性价比';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'bbscat')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `bbscat` int(10) DEFAULT NULL DEFAULT '0' COMMENT '店铺论坛，比如新房的业主论坛';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'askcat')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `askcat` int(10) DEFAULT NULL DEFAULT '0' COMMENT '问答分类，比如新房的在线问答';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'weixin')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `weixin` varchar(255) DEFAULT NULL COMMENT '店铺微信';");
	}	
}
if(pdo_tableexists('kb_house')) {
	if(!pdo_fieldexists('kb_house',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_house_album')) {
	if(!pdo_fieldexists('kb_house_album',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_album')." ADD `id` int(10) unsigned NOT NULL COMMENT '相册分类id' AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_house_album')) {
	if(!pdo_fieldexists('kb_house_album',  'newshouse_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_album')." ADD `newshouse_id` int(10) NOT NULL COMMENT '楼盘id';");
	}	
}
if(pdo_tableexists('kb_house_album')) {
	if(!pdo_fieldexists('kb_house_album',  'album_cat_name')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_album')." ADD `album_cat_name` varchar(50) NOT NULL COMMENT '相册分类名称';");
	}	
}
if(pdo_tableexists('kb_house_album')) {
	if(!pdo_fieldexists('kb_house_album',  'album_unit')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_album')." ADD `album_unit` varchar(20) NOT NULL COMMENT '相册中的图片数量';");
	}	
}
if(pdo_tableexists('kb_house_album')) {
	if(!pdo_fieldexists('kb_house_album',  'parent_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_album')." ADD `parent_id` int(10) NOT NULL DEFAULT '0' COMMENT '父分类';");
	}	
}
if(pdo_tableexists('kb_house_album')) {
	if(!pdo_fieldexists('kb_house_album',  'sort_order')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_album')." ADD `sort_order` int(3) NOT NULL DEFAULT '0' COMMENT '分类排序';");
	}	
}
if(pdo_tableexists('kb_house_album')) {
	if(!pdo_fieldexists('kb_house_album',  'mode')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_album')." ADD `mode` smallint(5) DEFAULT NULL DEFAULT '0' COMMENT '分类类型';");
	}	
}
if(pdo_tableexists('kb_house_album')) {
	if(!pdo_fieldexists('kb_house_album',  'type')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_album')." ADD `type` int(3) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_house_album')) {
	if(!pdo_fieldexists('kb_house_album',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_album')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `id` int(11) unsigned NOT NULL COMMENT '图片id' AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'name')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `name` varchar(255) DEFAULT NULL COMMENT '图片描述';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'newhouse_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `newhouse_id` int(11) DEFAULT NULL COMMENT '楼盘newhouse_id';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'img_url')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `img_url` varchar(255) DEFAULT NULL COMMENT '图片url';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'img_url_s')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `img_url_s` varchar(255) DEFAULT NULL COMMENT '小图';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'img_size')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `img_size` varchar(10) DEFAULT NULL COMMENT '图片大小';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'upl_time')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `upl_time` datetime DEFAULT NULL COMMENT '图片上传时间';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'is_intro_img')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `is_intro_img` smallint(6) DEFAULT NULL COMMENT '是否是简介图片:0不是,1是';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'user_album_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `user_album_id` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'sid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `sid` int(10) DEFAULT NULL DEFAULT '0' COMMENT '图片类型分类';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'posid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `posid` smallint(5) DEFAULT NULL DEFAULT '0' COMMENT '图片推荐位置';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'square')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `square` float DEFAULT NULL COMMENT '户型面积';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'dong')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `dong` varchar(100) DEFAULT NULL COMMENT '户型所属楼栋';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'room')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `room` int(4) DEFAULT NULL COMMENT '户型房间数';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'hall')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `hall` int(4) DEFAULT NULL COMMENT '户型厅数';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'garder')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `garder` int(4) DEFAULT NULL COMMENT '户型卫生间数';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'hxname')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `hxname` varchar(32) DEFAULT NULL COMMENT '户型名字';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'chaoxiang')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `chaoxiang` varchar(32) DEFAULT NULL COMMENT '户型朝向';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'sale')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `sale` varchar(100) DEFAULT NULL COMMENT '户型卖点';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'total_price')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `total_price` float DEFAULT NULL COMMENT '户型总价';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'hxtotal')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `hxtotal` int(11) DEFAULT NULL COMMENT '户型总套数';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'up')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `up` int(2) DEFAULT NULL COMMENT '在首页显示';");
	}	
}
if(pdo_tableexists('kb_house_attach')) {
	if(!pdo_fieldexists('kb_house_attach',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_attach')." ADD `uniacid` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `id` int(10) unsigned NOT NULL COMMENT '论坛帖子内容id' AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'fid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `fid` int(10) unsigned NOT NULL COMMENT '论坛帖子id';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'fcatid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `fcatid` int(10) unsigned NOT NULL COMMENT '论坛帖子栏目id';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'user_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `user_id` int(10) NOT NULL COMMENT '发帖用户id';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'user_name')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `user_name` varchar(50) NOT NULL COMMENT '发帖用户名';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'newshouse_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `newshouse_id` int(11) DEFAULT NULL COMMENT '楼盘id，关联店铺shopid';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_title')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_title` varchar(50) DEFAULT NULL COMMENT '楼盘名称';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_spell')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_spell` varchar(150) NOT NULL COMMENT '楼盘拼音';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_old')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_old` varchar(255) NOT NULL COMMENT '楼盘曾用名';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_nature')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_nature` varchar(50) DEFAULT NULL COMMENT '项目类型、楼盘性质';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_type')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_type` varchar(150) DEFAULT NULL COMMENT '建筑类型';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_fitment')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_fitment` varchar(50) DEFAULT NULL COMMENT '装修状况';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_starttime_history')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_starttime_history` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_startselldate')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_startselldate` varchar(50) DEFAULT NULL COMMENT '开盘日期';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_usetime')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_usetime` varchar(50) DEFAULT NULL COMMENT '入住时间';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_green')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_green` float DEFAULT NULL COMMENT '绿化率';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_capacity')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_capacity` float DEFAULT NULL COMMENT '容积率';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_selltelephone')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_selltelephone` varchar(100) DEFAULT NULL COMMENT '销售热线';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_xtel')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_xtel` varchar(200) DEFAULT NULL COMMENT '400电话';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_xQQ')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_xQQ` varchar(100) DEFAULT NULL COMMENT '业主QQ群';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_developer')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_developer` varchar(100) DEFAULT NULL COMMENT '开发商';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_constructor')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_constructor` varchar(100) DEFAULT NULL COMMENT '建筑商';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_license')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_license` varchar(200) DEFAULT NULL COMMENT '销售证';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_design_type')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_design_type` varchar(255) NOT NULL COMMENT '建筑设计风格';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_design_corp')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_design_corp` varchar(255) NOT NULL COMMENT '景观设计公司';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_sale_company')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_sale_company` varchar(255) NOT NULL COMMENT '代理策划公司';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_design_company')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_design_company` varchar(255) NOT NULL COMMENT '设计公司';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_touzi')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_touzi` varchar(255) NOT NULL COMMENT '投资公司';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_address')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_address` varchar(100) DEFAULT NULL COMMENT '销售中心地址';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_parking')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_parking` varchar(30) DEFAULT NULL COMMENT '停车位';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_roomcount')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_roomcount` varchar(30) DEFAULT NULL COMMENT '总户数';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_totalarea')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_totalarea` float(10,2) DEFAULT NULL COMMENT '占地面积 平方米';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_builtuparea')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_builtuparea` float(10,2) DEFAULT NULL COMMENT '建筑面积 平方米';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_property')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_property` varchar(100) DEFAULT NULL COMMENT '物业顾问';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_propertyprice')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_propertyprice` varchar(200) DEFAULT NULL COMMENT '物业管理费 平方米/月';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_introduce')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_introduce` text DEFAULT NULL COMMENT '项目介绍';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_devsynopsis')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_devsynopsis` text DEFAULT NULL COMMENT '开发商介绍';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_consynopsis')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_consynopsis` text DEFAULT NULL COMMENT '建筑商介绍';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_traffic')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_traffic` text DEFAULT NULL COMMENT '交通状况';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_peripheral')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_peripheral` text DEFAULT NULL COMMENT '周边配套';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_video')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_video` varchar(250) DEFAULT NULL COMMENT '视频地址';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_logo')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_logo` varchar(250) DEFAULT NULL COMMENT 'logo地址';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_memo')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_memo` text DEFAULT NULL COMMENT '备注';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_region')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_region` varchar(30) DEFAULT NULL COMMENT '城区id';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_adddatetime')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_adddatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP  COMMENT '添加时间，自动获取，默认值current_timestamp';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_saleaddress')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_saleaddress` varchar(250) DEFAULT NULL COMMENT '销售 ';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_face')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_face` varchar(255) DEFAULT NULL COMMENT '楼盘形象图片';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'is_on')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `is_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否合作：1为合作；0为没有合作';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_show')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_show` varchar(150) NOT NULL DEFAULT '1,2,3,4,5';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_sale')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_sale` int(11) NOT NULL COMMENT '是否在售：3待售，2预约，1在售,4售罄';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_paymethod')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_paymethod` varchar(255) NOT NULL COMMENT '支付方式';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_mark')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_mark` varchar(100) DEFAULT NULL COMMENT '楼盘标签（格式1,2,）';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_bank')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_bank` varchar(100) NOT NULL COMMENT '按揭银行';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_poster')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_poster` varchar(150) DEFAULT NULL COMMENT '楼盘广告语';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_main')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_main` varchar(200) DEFAULT NULL COMMENT '楼盘主打户型';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_adviser')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_adviser` tinyint(2) NOT NULL DEFAULT '0' COMMENT '置业顾问是否在线';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'showprice')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `showprice` varchar(10) NOT NULL DEFAULT 'avg' COMMENT '显示价格方式：min,avg,max,info';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_top')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_top` varchar(50) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_public_area')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_public_area` varchar(100) NOT NULL COMMENT '公摊面积';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_prowedt')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_prowedt` varchar(200) NOT NULL COMMENT '供应资源';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_worktime')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_worktime` varchar(100) NOT NULL COMMENT '接待时间';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_zb_shop')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_zb_shop` varchar(255) NOT NULL COMMENT '周边大商场';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_zb_youeryuan')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_zb_youeryuan` varchar(255) NOT NULL COMMENT '幼儿园';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_zb_yiyuan')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_zb_yiyuan` varchar(255) NOT NULL COMMENT '周边医院';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_zb_chuzhong')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_zb_chuzhong` varchar(100) NOT NULL COMMENT '周边初中';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_zb_xiaoxue')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_zb_xiaoxue` varchar(255) NOT NULL COMMENT '周边小学';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_zb_bank')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_zb_bank` varchar(255) NOT NULL COMMENT '周边银行';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_tj')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_tj` tinyint(4) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'house_hot')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `house_hot` tinyint(4) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'bbs_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `bbs_id` smallint(5) unsigned NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'zmcode')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `zmcode` char(5) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'isclose')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `isclose` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否关闭';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'average_price')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `average_price` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '均价';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'min_price')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `min_price` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '最低价';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'max_price')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `max_price` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '最高价';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'price_info')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `price_info` varchar(255) DEFAULT NULL DEFAULT '0' COMMENT '价格详情';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'tprice')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `tprice` varchar(45) DEFAULT NULL DEFAULT '0' COMMENT '价格标签';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'unit1')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `unit1` varchar(45) DEFAULT NULL DEFAULT '0' COMMENT '价格单位（元）';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'unit2')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `unit2` varchar(45) DEFAULT NULL DEFAULT '0' COMMENT '价格单位（平米）';");
	}	
}
if(pdo_tableexists('kb_house_info')) {
	if(!pdo_fieldexists('kb_house_info',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_info')." ADD `uniacid` int(12) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `id` int(10) unsigned NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'newhouse_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `newhouse_id` int(11) DEFAULT NULL COMMENT '楼盘id，';");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `uniacid` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'tprice')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `tprice` char(150) DEFAULT NULL COMMENT '价格类型';");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'min_price')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `min_price` int(10) DEFAULT NULL COMMENT '楼盘最低价格';");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'average_price')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `average_price` int(10) DEFAULT NULL COMMENT '楼盘平均价格';");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'max_price')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `max_price` int(10) DEFAULT NULL COMMENT '楼盘最高价格';");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'price_datetime')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `price_datetime` datetime DEFAULT NULL COMMENT '楼盘价格添加时间';");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'price_info')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `price_info` varchar(150) DEFAULT NULL COMMENT '价格详情';");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'isupdown')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `isupdown` tinyint(2) NOT NULL DEFAULT '0' COMMENT '同比上期价格是否上升';");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'isshow')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `isshow` smallint(2) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'unit1')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `unit1` varchar(120) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  'unit2')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `unit2` varchar(120) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_price')) {
	if(!pdo_fieldexists('kb_house_price',  's_price')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_price')." ADD `s_price` int(11) DEFAULT NULL COMMENT '总价折算后单价';");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `id` int(12) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `uniacid` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `thumb` varchar(255) DEFAULT NULL COMMENT '缩略图';");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'title')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `title` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'album_name')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `album_name` varchar(100) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'album_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `album_id` int(12) DEFAULT NULL COMMENT '分类名称';");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'newhouse_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `newhouse_id` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'totalprice')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `totalprice` varchar(100) DEFAULT NULL COMMENT '总价';");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'saleprice')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `saleprice` varchar(100) DEFAULT NULL COMMENT '单价';");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'mianji')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `mianji` varchar(45) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'huxingjiegou')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `huxingjiegou` varchar(100) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'chaoxiang')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `chaoxiang` varchar(100) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'loudong')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `loudong` varchar(100) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'btags')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `btags` varchar(255) DEFAULT NULL COMMENT '标签';");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'youshi')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `youshi` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'lieshi')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `lieshi` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'kongjian')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `kongjian` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'nums')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `nums` varchar(35) DEFAULT NULL COMMENT '套数';");
	}	
}
if(pdo_tableexists('kb_house_room')) {
	if(!pdo_fieldexists('kb_house_room',  'posid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_room')." ADD `posid` int(12) DEFAULT NULL COMMENT '推荐位置';");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `id` int(12) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'tid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `tid` int(11) DEFAULT NULL DEFAULT '0' COMMENT '0=楼盘销售，1=看房团，2=新闻';");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'fid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `fid` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'fname')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `fname` varchar(100) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `uniacid` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'newhouse_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `newhouse_id` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'title')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `title` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `thumb` varchar(255) DEFAULT NULL COMMENT '封面图';");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'newstext')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `newstext` text DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'addtime')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `addtime` datetime DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'tags')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `tags` varchar(50) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'smalltext')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `smalltext` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'gpoun_time')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `gpoun_time` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'gpoun_address')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `gpoun_address` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'onclick')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `onclick` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'gpoun_num')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `gpoun_num` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'posid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `posid` int(12) DEFAULT NULL DEFAULT '0' COMMENT '推荐位置';");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'disabled')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `disabled` int(6) DEFAULT NULL DEFAULT '0' COMMENT '1=不显示';");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'orderid')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `orderid` int(6) DEFAULT NULL DEFAULT '0' COMMENT '排序id';");
	}	
}
if(pdo_tableexists('kb_house_saleinfo')) {
	if(!pdo_fieldexists('kb_house_saleinfo',  'shopids')) {
		pdo_query("ALTER TABLE ".tablename('kb_house_saleinfo')." ADD `shopids` varchar(255) DEFAULT NULL COMMENT '关联的楼盘id 多个';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `id` int(10) unsigned NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `uniacid` int(10) unsigned NOT NULL COMMENT '公众号weid';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'house_sno')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `house_sno` varchar(50) DEFAULT NULL COMMENT '公司房源no';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'broker_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `broker_id` varchar(45) DEFAULT NULL DEFAULT '0' COMMENT '经纪人名称';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'broker_name')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `broker_name` varchar(45) DEFAULT NULL COMMENT '经纪人名称';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'loyer')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `loyer` decimal(10,2) unsigned DEFAULT NULL DEFAULT '0.00' COMMENT '售价/租金';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'prix_unitaire')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `prix_unitaire` varchar(20) DEFAULT NULL COMMENT '价格单位';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'traveaux_finition')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `traveaux_finition` varchar(45) DEFAULT NULL COMMENT '装修状况';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'donner_sur')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `donner_sur` varchar(45) DEFAULT NULL COMMENT '朝向';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'storey')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `storey` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '楼层';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'title')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `title` varchar(255) DEFAULT NULL COMMENT '标题';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'total_storey')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `total_storey` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '共几层';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'superficie')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `superficie` decimal(10,0) DEFAULT NULL COMMENT '面积';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'description')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `description` text DEFAULT NULL COMMENT '描述';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'add_time')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `add_time` int(12) unsigned DEFAULT NULL DEFAULT '0' COMMENT '发布时间';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'update_time')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `update_time` int(12) unsigned DEFAULT NULL DEFAULT '0' COMMENT '更新时间';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'zhutype')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `zhutype` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '租赁方式';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `thumb` varchar(255) DEFAULT NULL COMMENT '缩略图';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'thumb_url')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `thumb_url` text DEFAULT NULL COMMENT '房源图片';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'room')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `room` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '室';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'hall')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `hall` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '厅';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'garder')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `garder` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '卫';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'area')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `area` varchar(45) DEFAULT NULL COMMENT '区域';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'quan')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `quan` varchar(100) DEFAULT NULL COMMENT '商圈';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'rent_type')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `rent_type` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '类型，1二手，2整租，3合租,4求租';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'ptype')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `ptype` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '1中介，2个人';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'disposition')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `disposition` text DEFAULT NULL COMMENT '房屋配置';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'house_type')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `house_type` varchar(45) DEFAULT NULL COMMENT '房屋类型';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'village_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `village_id` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '小区id';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'village_name')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `village_name` varchar(45) DEFAULT NULL COMMENT '小区名称';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'build_age')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `build_age` varchar(45) DEFAULT NULL COMMENT '建筑年代';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'endtime')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `endtime` int(12) unsigned DEFAULT NULL DEFAULT '0' COMMENT '截止时间';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'linkphone')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `linkphone` varchar(45) DEFAULT NULL COMMENT '联系手机';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'qq')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `qq` varchar(45) DEFAULT NULL COMMENT '联系QQ';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'tell')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `tell` varchar(45) DEFAULT NULL COMMENT '联系电话';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'company')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `company` varchar(45) DEFAULT NULL COMMENT '经纪人公司名称';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'publish_name')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `publish_name` varchar(45) DEFAULT NULL COMMENT '姓名';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'istop')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `istop` smallint(5) NOT NULL COMMENT '置顶房源';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'isjingpin')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `isjingpin` smallint(5) NOT NULL COMMENT '精品房源';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'ishot')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `ishot` smallint(5) NOT NULL COMMENT '十万火急';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'show_jiaji')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `show_jiaji` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '加急';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'show_you')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `show_you` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '优质';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'show_hight')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `show_hight` smallint(10) unsigned NOT NULL DEFAULT '0' COMMENT '高亮';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'ispic')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `ispic` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '有图';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'refresh_time')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `refresh_time` int(12) unsigned DEFAULT NULL DEFAULT '0' COMMENT '更新重新发布时间';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'isdigg')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `isdigg` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '1未荐，2已荐';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'isonline')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `isonline` tinyint(1) DEFAULT NULL DEFAULT '0' COMMENT '1=在显示中';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'isshow')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `isshow` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '0显示，1不显示';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'onclick')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `onclick` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '点击率';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'iscompany')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `iscompany` smallint(5) unsigned DEFAULT NULL DEFAULT '0' COMMENT '是否公司房源1';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'shopid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `shopid` int(10) unsigned DEFAULT NULL DEFAULT '0' COMMENT '所属门店ID';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'dong')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `dong` varchar(45) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'danyuan')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `danyuan` varchar(45) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'menpai')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `menpai` varchar(45) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'isdelete')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `isdelete` tinyint(1) DEFAULT NULL DEFAULT '0' COMMENT '1=删除房源';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'fav_num')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `fav_num` int(12) DEFAULT NULL DEFAULT '0' COMMENT '收藏数';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `uid` int(12) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse')) {
	if(!pdo_fieldexists('kb_sechouse',  'mapinfo')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse')." ADD `mapinfo` varchar(100) DEFAULT NULL COMMENT '百度坐标';");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `id` int(12) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'actname')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `actname` varchar(45) DEFAULT NULL COMMENT '操作类型';");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'addtime')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `addtime` datetime DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'num')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `num` int(12) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'ecuid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `ecuid` int(12) DEFAULT NULL DEFAULT '0' COMMENT '微擎uid';");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `uniacid` int(12) DEFAULT NULL DEFAULT '0' COMMENT '公众号uniacid';");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'acttype')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `acttype` int(12) DEFAULT NULL DEFAULT '1' COMMENT '类型1=普通操作2=充值3=付款4=刷新5=置顶';");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'money')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `money` decimal(10,2) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'isadd')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `isadd` tinyint(1) DEFAULT NULL DEFAULT '1' COMMENT '1=增加0=减少';");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'note')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `note` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'mark')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `mark` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_actlog')) {
	if(!pdo_fieldexists('kb_sechouse_actlog',  'infoid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_actlog')." ADD `infoid` int(12) DEFAULT NULL COMMENT '房源id';");
	}	
}
if(pdo_tableexists('kb_sechouse_area')) {
	if(!pdo_fieldexists('kb_sechouse_area',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_area')." ADD `id` int(12) NOT NULL COMMENT '主键' AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_sechouse_area')) {
	if(!pdo_fieldexists('kb_sechouse_area',  'name')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_area')." ADD `name` varchar(100) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_area')) {
	if(!pdo_fieldexists('kb_sechouse_area',  'area')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_area')." ADD `area` varchar(100) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_area')) {
	if(!pdo_fieldexists('kb_sechouse_area',  'parent_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_area')." ADD `parent_id` int(12) DEFAULT NULL DEFAULT '0' COMMENT '父级';");
	}	
}
if(pdo_tableexists('kb_sechouse_area')) {
	if(!pdo_fieldexists('kb_sechouse_area',  'type')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_area')." ADD `type` int(12) DEFAULT NULL DEFAULT '1' COMMENT '1=区域 2=商圈 3=小区';");
	}	
}
if(pdo_tableexists('kb_sechouse_area')) {
	if(!pdo_fieldexists('kb_sechouse_area',  'point')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_area')." ADD `point` varchar(100) DEFAULT NULL COMMENT '地图坐标';");
	}	
}
if(pdo_tableexists('kb_sechouse_area')) {
	if(!pdo_fieldexists('kb_sechouse_area',  'orderid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_area')." ADD `orderid` int(12) DEFAULT NULL DEFAULT '0' COMMENT '排序id';");
	}	
}
if(pdo_tableexists('kb_sechouse_area')) {
	if(!pdo_fieldexists('kb_sechouse_area',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_area')." ADD `thumb` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_area')) {
	if(!pdo_fieldexists('kb_sechouse_area',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_area')." ADD `uniacid` int(12) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_area')) {
	if(!pdo_fieldexists('kb_sechouse_area',  'disabled')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_area')." ADD `disabled` tinyint(1) DEFAULT NULL DEFAULT '0' COMMENT '1=不可用';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `id` int(12) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'ecuid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `ecuid` int(12) DEFAULT NULL DEFAULT '0' COMMENT '微擎会员uid';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `openid` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'groupid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `groupid` int(12) DEFAULT NULL DEFAULT '1' COMMENT '1=普通经济人，11=认证经济人';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'nickname')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `nickname` varchar(45) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `uniacid` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'mobile')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `mobile` varchar(35) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'avatar')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `avatar` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'vtags')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `vtags` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'desc')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `desc` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'company')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `company` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'secnum')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `secnum` int(12) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'ernum')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `ernum` int(12) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'disabled')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `disabled` tinyint(1) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `uid` int(12) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'shopid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `shopid` int(12) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'buygroup_log_id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `buygroup_log_id` int(12) DEFAULT NULL DEFAULT '0' COMMENT '升级vip日志id';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'end_time')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `end_time` datetime DEFAULT NULL COMMENT 'vip有效期';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'istop')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `istop` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=置顶';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'isyou')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `isyou` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=优';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'ischeng')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `ischeng` tinyint(4) DEFAULT NULL DEFAULT '0' COMMENT '1=诚';");
	}	
}
if(pdo_tableexists('kb_sechouse_broker')) {
	if(!pdo_fieldexists('kb_sechouse_broker',  'iscompany')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_broker')." ADD `iscompany` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=内部经纪人';");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `id` int(12) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `uniacid` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `uid` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `openid` varchar(45) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'houseid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `houseid` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'title')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `title` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'addtime')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `addtime` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'smalltext')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `smalltext` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'ftype')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `ftype` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '0=收藏夹1=浏览记录';");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'hits')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `hits` int(12) DEFAULT NULL DEFAULT '0' COMMENT '浏览次数';");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'last_time')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `last_time` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'bid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `bid` int(12) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'role_uid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `role_uid` int(12) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'acttype')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `acttype` varchar(45) DEFAULT NULL DEFAULT 'view' COMMENT 'view,feed,fav';");
	}	
}
if(pdo_tableexists('kb_sechouse_favorite')) {
	if(!pdo_fieldexists('kb_sechouse_favorite',  'url')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_favorite')." ADD `url` varchar(255) DEFAULT NULL COMMENT '链接地址';");
	}	
}
if(pdo_tableexists('kb_sechouse_param')) {
	if(!pdo_fieldexists('kb_sechouse_param',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_param')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_sechouse_param')) {
	if(!pdo_fieldexists('kb_sechouse_param',  'houseid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_param')." ADD `houseid` int(10) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_param')) {
	if(!pdo_fieldexists('kb_sechouse_param',  'title')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_param')." ADD `title` varchar(50) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_param')) {
	if(!pdo_fieldexists('kb_sechouse_param',  'value')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_param')." ADD `value` text DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_param')) {
	if(!pdo_fieldexists('kb_sechouse_param',  'displayorder')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_param')." ADD `displayorder` int(11) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_replay')) {
	if(!pdo_fieldexists('kb_sechouse_replay',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_replay')." ADD `id` int(12) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_sechouse_replay')) {
	if(!pdo_fieldexists('kb_sechouse_replay',  'rid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_replay')." ADD `rid` int(12) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_replay')) {
	if(!pdo_fieldexists('kb_sechouse_replay',  'content')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_replay')." ADD `content` text NOT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_replay')) {
	if(!pdo_fieldexists('kb_sechouse_replay',  'titlepic')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_replay')." ADD `titlepic` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_replay')) {
	if(!pdo_fieldexists('kb_sechouse_replay',  'smalltext')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_replay')." ADD `smalltext` text NOT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_replay')) {
	if(!pdo_fieldexists('kb_sechouse_replay',  'addtime')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_replay')." ADD `addtime` int(12) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_replay')) {
	if(!pdo_fieldexists('kb_sechouse_replay',  'disabled')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_replay')." ADD `disabled` tinyint(2) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_replay')) {
	if(!pdo_fieldexists('kb_sechouse_replay',  'weburl')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_replay')." ADD `weburl` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_replay')) {
	if(!pdo_fieldexists('kb_sechouse_replay',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_replay')." ADD `uid` int(12) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'id')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `id` int(10) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'shopname')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `shopname` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `thumb` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'telphone')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `telphone` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'address')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `address` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'click')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `click` int(10) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'newstext')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `newstext` text DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `uid` int(10) DEFAULT NULL DEFAULT '0' COMMENT '操作人名称';");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'role_name')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `role_name` varchar(45) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'zhunum')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `zhunum` int(12) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'secnum')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `secnum` int(12) DEFAULT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `uniacid` int(12) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'vtags')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `vtags` varchar(255) DEFAULT NULL;");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'disabled')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `disabled` tinyint(2) unsigned DEFAULT NULL DEFAULT '0' COMMENT '开启关闭';");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'istop')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `istop` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=置顶';");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'isyou')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `isyou` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=优';");
	}	
}
if(pdo_tableexists('kb_sechouse_shop')) {
	if(!pdo_fieldexists('kb_sechouse_shop',  'ischeng')) {
		pdo_query("ALTER TABLE ".tablename('kb_sechouse_shop')." ADD `ischeng` tinyint(2) DEFAULT NULL DEFAULT '0' COMMENT '1=城';");
	}	
}
