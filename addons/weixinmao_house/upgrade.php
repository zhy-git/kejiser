<?php
//升级数据表
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_active` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `content` text NOT NULL COMMENT '文章内容',
  `sort` int(10) DEFAULT '0',
  `pid` int(10) DEFAULT '0',
  `hits` int(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `thumb` varchar(200) DEFAULT NULL,
  `money` float(10,2) DEFAULT '0.00',
  `cityid` tinyint(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_active','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_active','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_active','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_active','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'");}
if(!pdo_fieldexists('weixinmao_house_active','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `content` text NOT NULL COMMENT '文章内容'");}
if(!pdo_fieldexists('weixinmao_house_active','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_active','pid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `pid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_active','hits')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `hits` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_active','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_active','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_active','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `money` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_active','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_active')." ADD   `cityid` tinyint(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_adv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `advname` varchar(50) DEFAULT '',
  `link` varchar(255) DEFAULT '',
  `thumb` varchar(255) DEFAULT '',
  `displayorder` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  `toway` varchar(30) DEFAULT NULL,
  `appid` varchar(50) DEFAULT NULL,
  `type` tinyint(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`weid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`displayorder`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_adv','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_adv','weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_adv','advname')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   `advname` varchar(50) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_adv','link')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   `link` varchar(255) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_adv','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   `thumb` varchar(255) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_adv','displayorder')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   `displayorder` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_adv','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_adv','toway')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   `toway` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_adv','appid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   `appid` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_adv','type')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   `type` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_adv','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_adv','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('weixinmao_house_adv','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_adv')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_agent` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `thumb` text,
  `tel` varchar(30) DEFAULT NULL,
  `qq` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `createtime` int(10) DEFAULT '0',
  `uniacid` int(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `enabled` tinyint(10) DEFAULT '0',
  `content` text,
  `sort` int(10) DEFAULT '0',
  `intro` varchar(200) DEFAULT NULL,
  `cityid` tinyint(10) DEFAULT '0',
  `card` varchar(100) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `bankaddress` varchar(100) DEFAULT NULL,
  `lethousenum` int(10) DEFAULT '0',
  `oldhousenum` int(10) DEFAULT '0',
  `endtime` int(10) DEFAULT '0',
  `roleid` int(10) DEFAULT '0',
  `companyname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_agent','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_agent','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_agent','password')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `password` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_agent','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `thumb` text");}
if(!pdo_fieldexists('weixinmao_house_agent','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_agent','qq')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `qq` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_agent','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `address` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_agent','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agent','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `uniacid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agent','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agent','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `enabled` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agent','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_agent','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agent','intro')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `intro` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_agent','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `cityid` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agent','card')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `card` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_agent','bank')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `bank` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_agent','bankaddress')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `bankaddress` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_agent','lethousenum')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `lethousenum` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agent','oldhousenum')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `oldhousenum` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agent','endtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `endtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agent','roleid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `roleid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agent','companyname')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agent')." ADD   `companyname` varchar(100) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_agentrole` (
  `id` int(11) NOT NULL,
  `uniacid` int(11) DEFAULT '0',
  `title` varchar(30) DEFAULT NULL,
  `money` float(10,2) DEFAULT '0.00',
  `days` mediumint(10) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  `lethousenum` int(10) DEFAULT '0',
  `oldhousenum` int(10) DEFAULT '0',
  `isinit` tinyint(10) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_agentrole','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agentrole')." ADD 
  `id` int(11) NOT NULL");}
if(!pdo_fieldexists('weixinmao_house_agentrole','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agentrole')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agentrole','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agentrole')." ADD   `title` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_agentrole','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agentrole')." ADD   `money` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_agentrole','days')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agentrole')." ADD   `days` mediumint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agentrole','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agentrole')." ADD   `sort` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agentrole','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agentrole')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agentrole','lethousenum')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agentrole')." ADD   `lethousenum` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_agentrole','oldhousenum')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_agentrole')." ADD   `oldhousenum` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `sort` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  `cityid` tinyint(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`uniacid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`sort`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_area','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_area')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_area','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_area')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_area','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_area')." ADD   `name` varchar(50) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_area','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_area')." ADD   `sort` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_area','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_area')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_area','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_area')." ADD   `cityid` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_area','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_area')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_area','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_area')." ADD   KEY `indx_weid` (`uniacid`)");}
if(!pdo_fieldexists('weixinmao_house_area','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_area')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_baoming` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `companyname` varchar(50) DEFAULT NULL,
  `createtime` int(10) DEFAULT '0',
  `uniacid` int(10) DEFAULT '0',
  `aid` int(10) DEFAULT '10',
  `pid` int(10) DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_baoming','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_baoming')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_baoming','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_baoming')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_baoming','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_baoming')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_baoming','companyname')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_baoming')." ADD   `companyname` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_baoming','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_baoming')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_baoming','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_baoming')." ADD   `uniacid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_baoming','aid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_baoming')." ADD   `aid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_baoming','pid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_baoming')." ADD   `pid` int(10) DEFAULT '10'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_buildarea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `sort` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  `cityid` int(10) DEFAULT '0',
  `aid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`uniacid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`sort`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_buildarea','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_buildarea')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_buildarea','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_buildarea')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_buildarea','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_buildarea')." ADD   `name` varchar(50) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_buildarea','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_buildarea')." ADD   `sort` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_buildarea','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_buildarea')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_buildarea','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_buildarea')." ADD   `cityid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_buildarea','aid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_buildarea')." ADD   `aid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_buildarea','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_buildarea')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_buildarea','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_buildarea')." ADD   KEY `indx_weid` (`uniacid`)");}
if(!pdo_fieldexists('weixinmao_house_buildarea','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_buildarea')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_businesshouseinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `saleprice` int(10) DEFAULT '0',
  `perprice` int(10) DEFAULT '0',
  `housestyle` varchar(30) DEFAULT NULL,
  `housetype` int(10) DEFAULT '0',
  `houseareaid` int(10) DEFAULT '10',
  `area` varchar(30) DEFAULT NULL,
  `floor` varchar(30) DEFAULT NULL,
  `direction` varchar(30) DEFAULT NULL,
  `decorate` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `source` tinyint(10) DEFAULT '0',
  `address` varchar(60) DEFAULT NULL,
  `special` varchar(60) DEFAULT NULL,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `thumb` varchar(200) DEFAULT NULL,
  `thumb_url` text,
  `video` varchar(200) DEFAULT NULL,
  `isrecommand` tinyint(10) DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `content` text,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `salestatus` tinyint(10) DEFAULT '0',
  `status` tinyint(10) NOT NULL DEFAULT '0',
  `ispub` tinyint(10) DEFAULT '0',
  `ischeck` tinyint(10) DEFAULT '0',
  `uid` int(10) NOT NULL DEFAULT '0',
  `cityid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`,`status`,`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','saleprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `saleprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','perprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `perprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','housestyle')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `housestyle` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','housetype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `housetype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','houseareaid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `houseareaid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','area')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `area` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','floor')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `floor` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','direction')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `direction` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','decorate')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `decorate` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','year')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `year` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','source')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `source` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `address` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','special')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `special` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','thumb_url')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `thumb_url` text");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','video')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `video` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','salestatus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `salestatus` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `status` tinyint(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','ispub')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `ispub` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','ischeck')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `ischeck` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `uid` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_businesshouseinfo','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_businesshouseinfo')." ADD   `cityid` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_case` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `content` text NOT NULL COMMENT '文章内容',
  `sort` int(10) DEFAULT '0',
  `hits` int(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `thumb` varchar(200) DEFAULT NULL,
  `isrecommand` tinyint(10) DEFAULT '0',
  `teamid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_case','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_case','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_case','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_case','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'");}
if(!pdo_fieldexists('weixinmao_house_case','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD   `content` text NOT NULL COMMENT '文章内容'");}
if(!pdo_fieldexists('weixinmao_house_case','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_case','hits')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD   `hits` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_case','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_case','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_case','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_case','teamid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_case')." ADD   `teamid` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属帐号',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `thumb` varchar(255) NOT NULL COMMENT '分类图片',
  `parentid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID,0为第一级',
  `isrecommand` int(10) DEFAULT '0',
  `description` varchar(500) NOT NULL COMMENT '分类介绍',
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否开启',
  `model` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_category','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_category')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_category','weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_category')." ADD   `weid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属帐号'");}
if(!pdo_fieldexists('weixinmao_house_category','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_category')." ADD   `name` varchar(50) NOT NULL COMMENT '分类名称'");}
if(!pdo_fieldexists('weixinmao_house_category','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_category')." ADD   `thumb` varchar(255) NOT NULL COMMENT '分类图片'");}
if(!pdo_fieldexists('weixinmao_house_category','parentid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_category')." ADD   `parentid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID,0为第一级'");}
if(!pdo_fieldexists('weixinmao_house_category','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_category')." ADD   `isrecommand` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_category','description')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_category')." ADD   `description` varchar(500) NOT NULL COMMENT '分类介绍'");}
if(!pdo_fieldexists('weixinmao_house_category','displayorder')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_category')." ADD   `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序'");}
if(!pdo_fieldexists('weixinmao_house_category','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_category')." ADD   `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否开启'");}
if(!pdo_fieldexists('weixinmao_house_category','model')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_category')." ADD   `model` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `sort` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  `ishot` tinyint(10) DEFAULT '0',
  `firstname` varchar(30) DEFAULT NULL,
  `ison` tinyint(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`uniacid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`sort`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_city','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_city','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_city','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD   `name` varchar(50) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_city','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD   `sort` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_city','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_city','ishot')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD   `ishot` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_city','firstname')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD   `firstname` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_city','ison')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD   `ison` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_city','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_city','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD   KEY `indx_weid` (`uniacid`)");}
if(!pdo_fieldexists('weixinmao_house_city','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_city')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `houseid` int(10) DEFAULT '0',
  `type` varchar(30) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  `createtime` int(10) DEFAULT '0',
  `uniacid` int(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT NULL,
  `score` tinyint(10) DEFAULT '0',
  `pid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=212 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_comment','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_comment')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_comment','houseid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_comment')." ADD   `houseid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_comment','type')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_comment')." ADD   `type` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_comment','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_comment')." ADD   `content` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_comment','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_comment')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_comment','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_comment')." ADD   `uniacid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_comment','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_comment')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_comment','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_comment')." ADD   `status` tinyint(10) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_comment','score')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_comment')." ADD   `score` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_comment','pid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_comment')." ADD   `pid` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_complain` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `content` varchar(50) DEFAULT NULL,
  `createtime` int(10) DEFAULT '0',
  `uniacid` int(10) DEFAULT '0',
  `agentid` int(10) DEFAULT '10',
  `uid` int(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_complain','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_complain')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_complain','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_complain')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_complain','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_complain')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_complain','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_complain')." ADD   `content` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_complain','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_complain')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_complain','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_complain')." ADD   `uniacid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_complain','agentid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_complain')." ADD   `agentid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_complain','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_complain')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_complain','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_complain')." ADD   `status` tinyint(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `content` text NOT NULL COMMENT '文章内容',
  `sort` int(10) DEFAULT '0',
  `pid` int(10) DEFAULT '0',
  `sid` int(10) DEFAULT '0',
  `hits` int(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `thumb` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_content','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_content','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_content','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_content','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'");}
if(!pdo_fieldexists('weixinmao_house_content','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD   `content` text NOT NULL COMMENT '文章内容'");}
if(!pdo_fieldexists('weixinmao_house_content','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_content','pid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD   `pid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_content','sid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD   `sid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_content','hits')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD   `hits` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_content','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_content','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_content')." ADD   `thumb` varchar(200) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_coupon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `uid` int(10) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `status` tinyint(10) DEFAULT '0',
  `weixin` varchar(30) DEFAULT NULL,
  `tid` int(10) DEFAULT '0',
  `fid` int(10) DEFAULT '0',
  `money` float(10,2) DEFAULT '0.00',
  `dmoney` float(10,2) DEFAULT '0.00',
  `card` varchar(100) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `bankaddress` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_coupon','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_coupon','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_coupon','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `uid` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_coupon','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `name` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_coupon','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `tel` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_coupon','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'");}
if(!pdo_fieldexists('weixinmao_house_coupon','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_coupon','weixin')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `weixin` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_coupon','tid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `tid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_coupon','fid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `fid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_coupon','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `money` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_coupon','dmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `dmoney` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_coupon','card')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `card` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_coupon','bank')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `bank` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_coupon','bankaddress')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_coupon')." ADD   `bankaddress` varchar(100) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_fxmessage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `createtime` int(10) DEFAULT '0',
  `uniacid` int(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `tid` int(10) DEFAULT '0',
  `fxuid1` int(10) DEFAULT '0' COMMENT '直接领导',
  `fxuid2` int(10) DEFAULT '0' COMMENT '上上级领导',
  `status` tinyint(10) DEFAULT NULL,
  `pid` int(10) DEFAULT '0',
  `fxmoney` float(10,2) DEFAULT '0.00',
  `type` tinyint(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=215 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_fxmessage','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `uniacid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','tid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `tid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','fxuid1')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `fxuid1` int(10) DEFAULT '0' COMMENT '直接领导'");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','fxuid2')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `fxuid2` int(10) DEFAULT '0' COMMENT '上上级领导'");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `status` tinyint(10) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','pid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `pid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','fxmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `fxmoney` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_fxmessage','type')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxmessage')." ADD   `type` tinyint(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_fxrecord` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `createtime` int(10) DEFAULT '0',
  `uniacid` int(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT NULL,
  `money` float(10,2) DEFAULT '0.00',
  `orderid` int(10) DEFAULT '0',
  `content` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=214 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_fxrecord','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxrecord')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_fxrecord','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxrecord')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_fxrecord','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxrecord')." ADD   `uniacid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_fxrecord','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxrecord')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_fxrecord','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxrecord')." ADD   `status` tinyint(10) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_fxrecord','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxrecord')." ADD   `money` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_fxrecord','orderid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxrecord')." ADD   `orderid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_fxrecord','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_fxrecord')." ADD   `content` varchar(50) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_house` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `content` text NOT NULL COMMENT '文章内容',
  `sort` int(10) DEFAULT '0',
  `hits` int(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `thumb` varchar(200) DEFAULT NULL,
  `isrecommand` tinyint(10) DEFAULT '0',
  `teamid` int(10) DEFAULT '0',
  `money` float(10,2) DEFAULT '0.00',
  `dmoney` float(10,2) DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_house','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_house','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_house','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_house','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'");}
if(!pdo_fieldexists('weixinmao_house_house','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `content` text NOT NULL COMMENT '文章内容'");}
if(!pdo_fieldexists('weixinmao_house_house','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_house','hits')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `hits` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_house','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_house','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_house','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_house','teamid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `teamid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_house','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `money` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_house','dmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_house')." ADD   `dmoney` float(10,2) DEFAULT '0.00'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_houseinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `housename` varchar(200) DEFAULT NULL,
  `companyname` varchar(50) DEFAULT NULL,
  `houseprice` int(10) DEFAULT '0',
  `housetype` int(10) DEFAULT '0',
  `houseareaid` int(10) DEFAULT '10',
  `houseaddress` varchar(30) DEFAULT NULL,
  `housesaleaddress` varchar(30) DEFAULT NULL,
  `houserate` varchar(30) DEFAULT NULL,
  `housegreenrate` varchar(50) DEFAULT NULL,
  `housecovered` varchar(50) DEFAULT NULL,
  `buildarea` varchar(60) DEFAULT NULL,
  `opensaletime` varchar(60) DEFAULT NULL,
  `staytime` varchar(60) DEFAULT NULL,
  `productspecial` varchar(60) DEFAULT NULL,
  `houseschool` varchar(60) DEFAULT NULL,
  `housebus` varchar(60) DEFAULT NULL,
  `housestatus` tinyint(10) DEFAULT '0',
  `thumb` varchar(200) DEFAULT NULL,
  `isrecommand` tinyint(10) DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `content` text,
  `tel` varchar(30) DEFAULT NULL,
  `thumb_url` text,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `fxmoney` float(10,2) DEFAULT '0.00',
  `cityid` tinyint(10) DEFAULT '0',
  `bid` int(10) DEFAULT '0',
  `video` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_houseinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','housename')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `housename` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','companyname')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `companyname` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','houseprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `houseprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','housetype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `housetype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','houseareaid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `houseareaid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','houseaddress')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `houseaddress` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','housesaleaddress')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `housesaleaddress` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','houserate')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `houserate` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','housegreenrate')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `housegreenrate` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','housecovered')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `housecovered` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','buildarea')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `buildarea` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','opensaletime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `opensaletime` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','staytime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `staytime` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','productspecial')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `productspecial` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','houseschool')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `houseschool` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','housebus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `housebus` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','housestatus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `housestatus` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','thumb_url')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `thumb_url` text");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','fxmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `fxmoney` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `cityid` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','bid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `bid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseinfo','video')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseinfo')." ADD   `video` varchar(200) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_housemsg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `houseid` int(10) DEFAULT NULL,
  `toplistid` int(10) DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `paystatus` tinyint(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `uniacid` int(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=213 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_housemsg','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_housemsg','houseid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `houseid` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_housemsg','toplistid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `toplistid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_housemsg','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_housemsg','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_housemsg','paystatus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `paystatus` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_housemsg','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_housemsg','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `uniacid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_housemsg','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_housemsg','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `status` tinyint(10) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_housemsg','type')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `type` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_housemsg','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_housemsg')." ADD   `content` varchar(100) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_houseprice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `beginprice` int(10) DEFAULT '0',
  `endprice` int(10) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`uniacid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`sort`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_houseprice','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseprice')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_houseprice','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseprice')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseprice','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseprice')." ADD   `name` varchar(50) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_houseprice','beginprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseprice')." ADD   `beginprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseprice','endprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseprice')." ADD   `endprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseprice','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseprice')." ADD   `sort` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseprice','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseprice')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_houseprice','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseprice')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_houseprice','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseprice')." ADD   KEY `indx_weid` (`uniacid`)");}
if(!pdo_fieldexists('weixinmao_house_houseprice','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_houseprice')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_intro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `content` text NOT NULL COMMENT '文章内容',
  `name` varchar(100) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `fxbanner` varchar(150) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `opentime` varchar(30) DEFAULT NULL,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `qq` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `maincolor` varchar(30) DEFAULT NULL,
  `ischeck` tinyint(10) DEFAULT '1',
  `ispay` tinyint(10) DEFAULT '0',
  `moban` tinyint(10) DEFAULT '0',
  `rate1` float(10,2) DEFAULT '0.00',
  `rate2` float(10,2) DEFAULT '0.00',
  `isoldhouse` tinyint(10) DEFAULT '0',
  `islethouse` tinyint(10) DEFAULT '0',
  `isbuyhouse` tinyint(10) DEFAULT '0',
  `issalehouse` tinyint(10) DEFAULT '0',
  `isagentoldhouse` tinyint(10) DEFAULT '0',
  `isagentlethouse` tinyint(10) DEFAULT '0',
  `isgetuser` tinyint(10) DEFAULT '0',
  `newlimit` int(10) DEFAULT '10',
  `oldlimit` int(10) DEFAULT '10',
  `letlimit` int(10) DEFAULT '10',
  `ischeck2` tinyint(10) DEFAULT '1',
  `isagent` tinyint(10) DEFAULT '1',
  `indexadv` varchar(150) DEFAULT NULL,
  `agentbanner` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_intro','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_intro','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_intro','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'");}
if(!pdo_fieldexists('weixinmao_house_intro','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `content` text NOT NULL COMMENT '文章内容'");}
if(!pdo_fieldexists('weixinmao_house_intro','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `name` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','logo')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `logo` varchar(150) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','fxbanner')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `fxbanner` varchar(150) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `address` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `tel` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','opentime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `opentime` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_intro','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_intro','qq')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `qq` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','email')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `email` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','city')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `city` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','maincolor')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `maincolor` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','ischeck')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `ischeck` tinyint(10) DEFAULT '1'");}
if(!pdo_fieldexists('weixinmao_house_intro','ispay')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `ispay` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_intro','moban')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `moban` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_intro','rate1')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `rate1` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_intro','rate2')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `rate2` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_intro','isoldhouse')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `isoldhouse` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_intro','islethouse')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `islethouse` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_intro','isbuyhouse')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `isbuyhouse` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_intro','issalehouse')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `issalehouse` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_intro','isagentoldhouse')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `isagentoldhouse` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_intro','isagentlethouse')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `isagentlethouse` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_intro','isgetuser')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `isgetuser` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_intro','newlimit')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `newlimit` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_intro','oldlimit')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `oldlimit` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_intro','letlimit')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `letlimit` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_intro','ischeck2')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `ischeck2` tinyint(10) DEFAULT '1'");}
if(!pdo_fieldexists('weixinmao_house_intro','isagent')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `isagent` tinyint(10) DEFAULT '1'");}
if(!pdo_fieldexists('weixinmao_house_intro','indexadv')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `indexadv` varchar(150) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_intro','agentbanner')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_intro')." ADD   `agentbanner` varchar(150) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_letbusinesshouseinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `money` int(10) DEFAULT '0',
  `price` int(10) DEFAULT '0',
  `roomid` int(10) DEFAULT '0',
  `roomtype` varchar(30) DEFAULT NULL,
  `housetype` int(10) DEFAULT '0',
  `houselabel` varchar(200) DEFAULT NULL,
  `letway` tinyint(10) DEFAULT '1',
  `payway` varchar(30) DEFAULT NULL,
  `houseareaid` int(10) DEFAULT '10',
  `area` varchar(30) DEFAULT NULL,
  `floor` varchar(30) DEFAULT NULL,
  `direction` varchar(30) DEFAULT NULL,
  `decorate` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `source` tinyint(10) DEFAULT '0',
  `housearea` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `special` varchar(60) DEFAULT NULL,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `thumb` varchar(200) DEFAULT NULL,
  `thumb_url` text,
  `video` varchar(200) DEFAULT NULL,
  `isrecommand` tinyint(10) DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `content` text,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `salestatus` tinyint(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `dmoney` float(10,2) DEFAULT '0.00',
  `ispub` tinyint(10) DEFAULT '0',
  `ischeck` tinyint(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `cityid` int(10) DEFAULT '0',
  `bid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `money` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','price')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `price` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','roomid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `roomid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','roomtype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `roomtype` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','housetype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `housetype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','houselabel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `houselabel` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','letway')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `letway` tinyint(10) DEFAULT '1'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','payway')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `payway` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','houseareaid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `houseareaid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','area')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `area` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','floor')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `floor` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','direction')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `direction` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','decorate')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `decorate` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','year')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `year` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','source')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `source` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','housearea')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `housearea` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `address` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','special')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `special` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','thumb_url')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `thumb_url` text");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','video')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `video` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','salestatus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `salestatus` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','dmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `dmoney` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','ispub')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `ispub` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','ischeck')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `ischeck` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `cityid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_letbusinesshouseinfo','bid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_letbusinesshouseinfo')." ADD   `bid` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_lethouseinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `money` int(10) DEFAULT '0',
  `dmoney` float(10,2) DEFAULT '0.00',
  `roomid` int(10) DEFAULT '0',
  `roomtype` varchar(30) DEFAULT NULL,
  `housetype` int(10) DEFAULT '0',
  `houselabel` varchar(200) DEFAULT NULL,
  `letway` tinyint(10) DEFAULT '1',
  `payway` varchar(30) DEFAULT NULL,
  `houseareaid` int(10) DEFAULT '10',
  `area` varchar(30) DEFAULT NULL,
  `floor` varchar(30) DEFAULT NULL,
  `direction` varchar(30) DEFAULT NULL,
  `decorate` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `source` tinyint(10) DEFAULT '0',
  `housearea` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `special` varchar(60) DEFAULT NULL,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `thumb` varchar(200) DEFAULT NULL,
  `thumb_url` text,
  `video` varchar(200) DEFAULT NULL,
  `isrecommand` tinyint(10) DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `content` text,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `salestatus` tinyint(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `ispub` tinyint(10) DEFAULT '0',
  `ischeck` tinyint(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `cityid` tinyint(10) DEFAULT '0',
  `price` int(10) DEFAULT '0',
  `bid` int(10) DEFAULT '0',
  `fxmoney` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_lethouseinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `money` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','dmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `dmoney` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','roomid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `roomid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','roomtype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `roomtype` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','housetype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `housetype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','houselabel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `houselabel` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','letway')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `letway` tinyint(10) DEFAULT '1'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','payway')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `payway` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','houseareaid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `houseareaid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','area')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `area` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','floor')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `floor` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','direction')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `direction` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','decorate')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `decorate` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','year')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `year` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','source')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `source` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','housearea')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `housearea` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `address` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','special')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `special` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','thumb_url')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `thumb_url` text");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','video')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `video` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','salestatus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `salestatus` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','ispub')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `ispub` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','ischeck')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `ischeck` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `cityid` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','price')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `price` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','bid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `bid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseinfo','fxmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseinfo')." ADD   `fxmoney` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_lethouseprice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `beginprice` int(10) DEFAULT '0',
  `endprice` int(10) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`uniacid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`sort`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_lethouseprice','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseprice')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_lethouseprice','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseprice')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseprice','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseprice')." ADD   `name` varchar(50) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_lethouseprice','beginprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseprice')." ADD   `beginprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseprice','endprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseprice')." ADD   `endprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseprice','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseprice')." ADD   `sort` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseprice','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseprice')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_lethouseprice','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseprice')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_lethouseprice','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseprice')." ADD   KEY `indx_weid` (`uniacid`)");}
if(!pdo_fieldexists('weixinmao_house_lethouseprice','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_lethouseprice')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `companyname` varchar(50) DEFAULT NULL,
  `createtime` int(10) DEFAULT '0',
  `uniacid` int(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_message','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_message')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_message','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_message')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_message','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_message')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_message','companyname')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_message')." ADD   `companyname` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_message','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_message')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_message','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_message')." ADD   `uniacid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_message','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_message')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_message','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_message')." ADD   `uid` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `advname` varchar(50) DEFAULT '',
  `link` varchar(255) DEFAULT '',
  `thumb` varchar(255) DEFAULT '',
  `displayorder` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  `cateid` int(10) DEFAULT '0',
  `innerurl` varchar(100) DEFAULT NULL,
  `appid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`weid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`displayorder`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_nav','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_nav','weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_nav','advname')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   `advname` varchar(50) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_nav','link')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   `link` varchar(255) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_nav','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   `thumb` varchar(255) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_nav','displayorder')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   `displayorder` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_nav','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_nav','cateid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   `cateid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_nav','innerurl')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   `innerurl` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_nav','appid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   `appid` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_nav','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_nav','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('weixinmao_house_nav','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_nav')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_oldhouseinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `saleprice` int(10) DEFAULT '0',
  `perprice` int(10) DEFAULT '0',
  `housestyle` varchar(30) DEFAULT NULL,
  `housetype` int(10) DEFAULT '0',
  `houseareaid` int(10) DEFAULT '10',
  `area` varchar(30) DEFAULT NULL,
  `floor` varchar(30) DEFAULT NULL,
  `direction` varchar(30) DEFAULT NULL,
  `decorate` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `source` tinyint(10) DEFAULT '0',
  `housearea` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `special` varchar(60) DEFAULT NULL,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `thumb` varchar(200) DEFAULT NULL,
  `thumb_url` text,
  `video` varchar(200) DEFAULT NULL,
  `isrecommand` tinyint(10) DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `content` text,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `salestatus` tinyint(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `ispub` tinyint(10) DEFAULT '0',
  `ischeck` tinyint(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `cityid` tinyint(10) DEFAULT '0',
  `money` float(10,2) DEFAULT '0.00',
  `dmoney` float(10,2) DEFAULT '0.00',
  `bid` int(10) DEFAULT '0',
  `fxmoney` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','saleprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `saleprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','perprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `perprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','housestyle')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `housestyle` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','housetype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `housetype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','houseareaid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `houseareaid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','area')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `area` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','floor')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `floor` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','direction')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `direction` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','decorate')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `decorate` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','year')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `year` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','source')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `source` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','housearea')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `housearea` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `address` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','special')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `special` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','thumb_url')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `thumb_url` text");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','video')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `video` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','salestatus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `salestatus` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','ispub')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `ispub` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','ischeck')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `ischeck` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `cityid` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `money` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','dmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `dmoney` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','bid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `bid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseinfo','fxmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseinfo')." ADD   `fxmoney` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_oldhouseprice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `beginprice` int(10) DEFAULT '0',
  `endprice` int(10) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`uniacid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`sort`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_oldhouseprice','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseprice')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_oldhouseprice','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseprice')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseprice','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseprice')." ADD   `name` varchar(50) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_oldhouseprice','beginprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseprice')." ADD   `beginprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseprice','endprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseprice')." ADD   `endprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseprice','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseprice')." ADD   `sort` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseprice','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseprice')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldhouseprice','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseprice')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_oldhouseprice','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseprice')." ADD   KEY `indx_weid` (`uniacid`)");}
if(!pdo_fieldexists('weixinmao_house_oldhouseprice','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldhouseprice')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_oldpayhouseinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `dmoney` float(10,1) DEFAULT '0.0',
  `money` float(10,1) DEFAULT '0.0',
  `saleprice` int(10) DEFAULT '0',
  `perprice` int(10) DEFAULT '0',
  `housestyle` varchar(30) DEFAULT NULL,
  `housetype` int(10) DEFAULT '0',
  `houseareaid` int(10) DEFAULT '10',
  `area` varchar(30) DEFAULT NULL,
  `roomid` int(10) DEFAULT '0',
  `floor` varchar(30) DEFAULT NULL,
  `direction` varchar(30) DEFAULT NULL,
  `decorate` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `source` tinyint(10) DEFAULT '0',
  `housearea` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `special` varchar(60) DEFAULT NULL,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `thumb` varchar(200) DEFAULT NULL,
  `thumb_url` text,
  `video` varchar(200) DEFAULT NULL,
  `isrecommand` tinyint(10) DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `content` text,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `salestatus` tinyint(10) DEFAULT '0',
  `status` tinyint(10) NOT NULL DEFAULT '0',
  `ispub` tinyint(10) DEFAULT '0',
  `ischeck` tinyint(10) DEFAULT '0',
  `uid` int(10) NOT NULL DEFAULT '0',
  `cityid` int(10) DEFAULT '0',
  `bid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`,`status`,`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','dmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `dmoney` float(10,1) DEFAULT '0.0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `money` float(10,1) DEFAULT '0.0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','saleprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `saleprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','perprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `perprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','housestyle')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `housestyle` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','housetype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `housetype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','houseareaid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `houseareaid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','area')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `area` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','roomid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `roomid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','floor')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `floor` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','direction')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `direction` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','decorate')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `decorate` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','year')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `year` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','source')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `source` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','housearea')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `housearea` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `address` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','special')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `special` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','thumb_url')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `thumb_url` text");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','video')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `video` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','salestatus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `salestatus` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `status` tinyint(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','ispub')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `ispub` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','ischeck')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `ischeck` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `uid` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `cityid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldpayhouseinfo','bid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldpayhouseinfo')." ADD   `bid` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_oldsalehouseinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `dmoney` float(10,1) DEFAULT '0.0',
  `money` float(10,1) DEFAULT '0.0',
  `saleprice` int(10) DEFAULT '0',
  `perprice` int(10) DEFAULT '0',
  `housestyle` varchar(30) DEFAULT NULL,
  `housetype` int(10) DEFAULT '0',
  `houseareaid` int(10) DEFAULT '10',
  `roomid` int(10) DEFAULT '0',
  `area` varchar(30) DEFAULT NULL,
  `floor` varchar(30) DEFAULT NULL,
  `direction` varchar(30) DEFAULT NULL,
  `decorate` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `source` tinyint(10) DEFAULT '0',
  `housearea` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `special` varchar(60) DEFAULT NULL,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `thumb` varchar(200) DEFAULT NULL,
  `thumb_url` text,
  `video` varchar(200) DEFAULT NULL,
  `isrecommand` tinyint(10) DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `content` text,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `salestatus` tinyint(10) DEFAULT '0',
  `status` tinyint(10) NOT NULL DEFAULT '0',
  `ispub` tinyint(10) DEFAULT '0',
  `ischeck` tinyint(10) DEFAULT '0',
  `uid` int(10) NOT NULL DEFAULT '0',
  `cityid` int(10) DEFAULT '0',
  `bid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`,`status`,`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','dmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `dmoney` float(10,1) DEFAULT '0.0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `money` float(10,1) DEFAULT '0.0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','saleprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `saleprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','perprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `perprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','housestyle')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `housestyle` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','housetype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `housetype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','houseareaid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `houseareaid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','roomid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `roomid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','area')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `area` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','floor')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `floor` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','direction')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `direction` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','decorate')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `decorate` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','year')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `year` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','source')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `source` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','housearea')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `housearea` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `address` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','special')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `special` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','thumb_url')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `thumb_url` text");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','video')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `video` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','salestatus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `salestatus` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `status` tinyint(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','ispub')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `ispub` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','ischeck')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `ischeck` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `uid` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `cityid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_oldsalehouseinfo','bid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_oldsalehouseinfo')." ADD   `bid` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `pid` int(10) DEFAULT '0',
  `uid` int(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `orderid` varchar(100) DEFAULT NULL,
  `money` float(10,2) DEFAULT '0.00',
  `paytime` int(10) DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `paid` tinyint(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `title` varchar(50) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `agentid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_order','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_order','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_order','pid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `pid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_order','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `uid` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_order','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `name` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_order','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_order','orderid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `orderid` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_order','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `money` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_order','paytime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `paytime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_order','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'");}
if(!pdo_fieldexists('weixinmao_house_order','paid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `paid` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_order','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_order','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `title` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_order','type')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `type` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_order','agentid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_order')." ADD   `agentid` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_paylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `title` varchar(30) DEFAULT NULL,
  `money` float(10,2) DEFAULT '0.00',
  `days` mediumint(10) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`uniacid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`sort`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_paylist','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_paylist')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_paylist','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_paylist')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_paylist','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_paylist')." ADD   `title` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_paylist','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_paylist')." ADD   `money` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_paylist','days')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_paylist')." ADD   `days` mediumint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_paylist','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_paylist')." ADD   `sort` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_paylist','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_paylist')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_paylist','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_paylist')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_paylist','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_paylist')." ADD   KEY `indx_weid` (`uniacid`)");}
if(!pdo_fieldexists('weixinmao_house_paylist','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_paylist')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_saleinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `houseareaid` int(10) DEFAULT '0',
  `special` varchar(60) DEFAULT NULL,
  `thumb_url` text,
  `isrecommand` tinyint(10) DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `content` text,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `status` tinyint(10) NOT NULL DEFAULT '0',
  `ispub` tinyint(10) DEFAULT '0',
  `ischeck` tinyint(10) DEFAULT '0',
  `uid` int(10) NOT NULL DEFAULT '0',
  `type` tinyint(10) DEFAULT '0',
  `hits` int(10) DEFAULT '0',
  `toplistid` mediumint(10) DEFAULT '0',
  `endtime` int(10) DEFAULT '0',
  `paid` tinyint(10) DEFAULT '0',
  `cityid` tinyint(10) DEFAULT '0',
  PRIMARY KEY (`id`,`status`,`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_saleinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','houseareaid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `houseareaid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','special')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `special` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','thumb_url')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `thumb_url` text");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `status` tinyint(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','ispub')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `ispub` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','ischeck')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `ischeck` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `uid` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','type')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `type` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','hits')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `hits` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','toplistid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `toplistid` mediumint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','endtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `endtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','paid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `paid` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_saleinfo','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_saleinfo')." ADD   `cityid` tinyint(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_save` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) DEFAULT '0',
  `uniacid` int(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `housetype` varchar(30) DEFAULT NULL,
  `createtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_save','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_save')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_save','pid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_save')." ADD   `pid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_save','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_save')." ADD   `uniacid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_save','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_save')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_save','housetype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_save')." ADD   `housetype` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_save','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_save')." ADD   `createtime` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_scorerecord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `score` float(10,2) DEFAULT '0.00',
  `totalscore` float(10,2) DEFAULT '0.00',
  `createtime` int(10) DEFAULT '0',
  `type` tinyint(10) DEFAULT '0',
  `content` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`uniacid`),
  KEY `indx_enabled` (`createtime`),
  KEY `indx_displayorder` (`totalscore`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_scorerecord','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_scorerecord','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_scorerecord','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_scorerecord','score')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD   `score` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_scorerecord','totalscore')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD   `totalscore` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_scorerecord','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_scorerecord','type')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD   `type` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_scorerecord','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD   `content` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_scorerecord','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_scorerecord','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD   KEY `indx_weid` (`uniacid`)");}
if(!pdo_fieldexists('weixinmao_house_scorerecord','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_scorerecord')." ADD   KEY `indx_enabled` (`createtime`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_shophouseinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `dmoney` float(10,2) DEFAULT '0.00',
  `saleprice` int(10) DEFAULT '0',
  `perprice` int(10) DEFAULT '0',
  `housestyle` varchar(30) DEFAULT NULL,
  `housetype` int(10) DEFAULT '0',
  `houseareaid` int(10) DEFAULT '10',
  `area` varchar(30) DEFAULT NULL,
  `floor` varchar(30) DEFAULT NULL,
  `direction` varchar(30) DEFAULT NULL,
  `decorate` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `source` tinyint(10) DEFAULT '0',
  `housearea` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `special` varchar(60) DEFAULT NULL,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `thumb` varchar(200) DEFAULT NULL,
  `thumb_url` text,
  `isrecommand` tinyint(10) DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `content` text,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `salestatus` tinyint(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `ispub` tinyint(10) DEFAULT '0',
  `ischeck` tinyint(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `video` varchar(200) DEFAULT NULL,
  `cityid` int(10) DEFAULT NULL,
  `money` float(10,2) DEFAULT '0.00',
  `bid` int(10) DEFAULT '0',
  `fxmoney` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_shophouseinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','dmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `dmoney` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','saleprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `saleprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','perprice')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `perprice` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','housestyle')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `housestyle` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','housetype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `housetype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','houseareaid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `houseareaid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','area')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `area` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','floor')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `floor` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','direction')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `direction` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','decorate')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `decorate` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','year')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `year` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','source')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `source` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','housearea')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `housearea` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `address` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','special')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `special` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','thumb_url')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `thumb_url` text");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','salestatus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `salestatus` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','ispub')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `ispub` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','ischeck')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `ischeck` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','video')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `video` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `cityid` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `money` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','bid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `bid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shophouseinfo','fxmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shophouseinfo')." ADD   `fxmoney` int(10) NOT NULL DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_shoplethouseinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(200) DEFAULT NULL,
  `money` int(10) DEFAULT '0',
  `dmoney` float(10,2) DEFAULT '0.00',
  `roomid` int(10) DEFAULT '0',
  `roomtype` varchar(30) DEFAULT NULL,
  `housetype` int(10) DEFAULT '0',
  `houselabel` varchar(200) DEFAULT NULL,
  `letway` tinyint(10) DEFAULT '1',
  `payway` varchar(30) DEFAULT NULL,
  `houseareaid` int(10) DEFAULT '10',
  `area` varchar(30) DEFAULT NULL,
  `floor` varchar(30) DEFAULT NULL,
  `direction` varchar(30) DEFAULT NULL,
  `decorate` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `source` tinyint(10) DEFAULT '0',
  `housearea` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `special` varchar(60) DEFAULT NULL,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `thumb` varchar(200) DEFAULT NULL,
  `thumb_url` text,
  `isrecommand` tinyint(10) DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  `content` text,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `weixin` varchar(30) DEFAULT NULL,
  `salestatus` tinyint(10) DEFAULT '0',
  `status` tinyint(10) DEFAULT '0',
  `ispub` tinyint(10) DEFAULT '0',
  `ischeck` tinyint(10) DEFAULT '0',
  `uid` int(10) DEFAULT '0',
  `housenum` varchar(30) DEFAULT NULL,
  `agentid` int(10) DEFAULT '0',
  `video` varchar(200) DEFAULT NULL,
  `cityid` int(10) DEFAULT NULL,
  `price` int(10) DEFAULT '0',
  `bid` int(10) DEFAULT '0',
  `fxmoney` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','title')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `money` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','dmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `dmoney` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','roomid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `roomid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','roomtype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `roomtype` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','housetype')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `housetype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','houselabel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `houselabel` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','letway')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `letway` tinyint(10) DEFAULT '1'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','payway')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `payway` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','houseareaid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `houseareaid` int(10) DEFAULT '10'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','area')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `area` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','floor')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `floor` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','direction')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `direction` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','decorate')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `decorate` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','year')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `year` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','source')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `source` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','housearea')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `housearea` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `address` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','special')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `special` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `thumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','thumb_url')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `thumb_url` text");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','isrecommand')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `isrecommand` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `createtime` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `content` text");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `name` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `tel` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','weixin')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `weixin` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','salestatus')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `salestatus` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','ispub')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `ispub` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','ischeck')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `ischeck` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `uid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','housenum')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `housenum` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','agentid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `agentid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','video')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `video` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','cityid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `cityid` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','price')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `price` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','bid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `bid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_shoplethouseinfo','fxmoney')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_shoplethouseinfo')." ADD   `fxmoney` int(10) NOT NULL DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_store` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `content` text NOT NULL COMMENT '文章内容',
  `name` varchar(100) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `opentime` varchar(30) DEFAULT NULL,
  `lng` decimal(10,6) DEFAULT '0.000000',
  `lat` decimal(10,6) DEFAULT '0.000000',
  `qq` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  `isdefault` tinyint(10) DEFAULT '0',
  `cateid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_store','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_store','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_store','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'");}
if(!pdo_fieldexists('weixinmao_house_store','content')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `content` text NOT NULL COMMENT '文章内容'");}
if(!pdo_fieldexists('weixinmao_house_store','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `name` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_store','logo')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `logo` varchar(150) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_store','address')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `address` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_store','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `tel` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_store','opentime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `opentime` varchar(30) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_store','lng')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `lng` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_store','lat')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `lat` decimal(10,6) DEFAULT '0.000000'");}
if(!pdo_fieldexists('weixinmao_house_store','qq')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `qq` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_store','email')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `email` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_store','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `sort` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_store','isdefault')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `isdefault` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_store','cateid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_store')." ADD   `cateid` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_storecate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `advname` varchar(50) DEFAULT '',
  `link` varchar(255) DEFAULT '',
  `thumb` varchar(255) DEFAULT '',
  `displayorder` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`weid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`displayorder`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_storecate','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_storecate')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_storecate','weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_storecate')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_storecate','advname')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_storecate')." ADD   `advname` varchar(50) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_storecate','link')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_storecate')." ADD   `link` varchar(255) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_storecate','thumb')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_storecate')." ADD   `thumb` varchar(255) DEFAULT ''");}
if(!pdo_fieldexists('weixinmao_house_storecate','displayorder')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_storecate')." ADD   `displayorder` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_storecate','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_storecate')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_storecate','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_storecate')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_storecate','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_storecate')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('weixinmao_house_storecate','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_storecate')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_toplist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `money` float(10,2) DEFAULT '0.00',
  `days` mediumint(10) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `enabled` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`uniacid`),
  KEY `indx_enabled` (`enabled`),
  KEY `indx_displayorder` (`sort`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_toplist','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_toplist')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('weixinmao_house_toplist','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_toplist')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_toplist','money')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_toplist')." ADD   `money` float(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('weixinmao_house_toplist','days')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_toplist')." ADD   `days` mediumint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_toplist','sort')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_toplist')." ADD   `sort` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_toplist','enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_toplist')." ADD   `enabled` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_toplist','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_toplist')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('weixinmao_house_toplist','indx_weid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_toplist')." ADD   KEY `indx_weid` (`uniacid`)");}
if(!pdo_fieldexists('weixinmao_house_toplist','indx_enabled')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_toplist')." ADD   KEY `indx_enabled` (`enabled`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_weixinmao_house_userinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `uid` int(10) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `status` tinyint(10) DEFAULT '0',
  `avatarUrl` varchar(200) DEFAULT NULL,
  `wechaname` varchar(60) DEFAULT NULL,
  `openid` varchar(100) DEFAULT NULL,
  `score` float(10,2) DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('weixinmao_house_userinfo','id')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键'");}
if(!pdo_fieldexists('weixinmao_house_userinfo','uniacid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id'");}
if(!pdo_fieldexists('weixinmao_house_userinfo','uid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD   `uid` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_userinfo','name')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD   `name` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_userinfo','tel')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD   `tel` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_userinfo','createtime')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'");}
if(!pdo_fieldexists('weixinmao_house_userinfo','status')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD   `status` tinyint(10) DEFAULT '0'");}
if(!pdo_fieldexists('weixinmao_house_userinfo','avatarUrl')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD   `avatarUrl` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_userinfo','wechaname')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD   `wechaname` varchar(60) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_userinfo','openid')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD   `openid` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('weixinmao_house_userinfo','score')) {pdo_query("ALTER TABLE ".tablename('weixinmao_house_userinfo')." ADD   `score` float(10,2) DEFAULT '0.00'");}
