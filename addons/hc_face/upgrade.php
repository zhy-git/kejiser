<?php
if (!pdo_tableexists('hcface_order_unlock')) {
	pdo_query("CREATE TABLE ".tablename('hcface_order_unlock')." (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `rid` int(11) NOT NULL,
	  `type` char(2) NOT NULL,
	  `uid` int(11) NOT NULL,
	  `createtime` char(10) NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
}

if (!pdo_fieldexists('hcface_upgrade', 'level')) {
	pdo_query("ALTER TABLE " . tablename('hcface_upgrade') . " ADD `level` TINYINT(1) NOT NULL");
}
if (!pdo_fieldexists('hcface_banner', 'link')) {
	pdo_query("ALTER TABLE " . tablename('hcface_banner') . " CHANGE `goods_id` `link` VARCHAR(300) NOT NULL");
}