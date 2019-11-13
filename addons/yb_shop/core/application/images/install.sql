CREATE TABLE IF NOT EXISTS `ims_ybsc_images` (
  `img_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '相册图片表id',
  `group_id` int(10) UNSIGNED NOT NULL COMMENT '相册id',
  `img_name` varchar(100) NOT NULL COMMENT '图片名称',
  `img_tag` varchar(255) DEFAULT '' COMMENT '图片标签',
  `img_cover` varchar(255) DEFAULT NULL COMMENT '原图图片路径',
  `upload_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '图片上传时间',
  PRIMARY KEY (`img_id`) USING BTREE
) ENGINE=MyISAM AVG_ROW_LENGTH=204 DEFAULT CHARSET=utf8 COMMENT='相册图片表' ROW_FORMAT=COMPACT;

CREATE TABLE IF NOT EXISTS `ims_ybsc_images_group` (
  `group_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '相册id',
  `group_name` varchar(100) NOT NULL COMMENT '相册名称',
  `group_cover` varchar(255) NOT NULL DEFAULT '' COMMENT '相册封面',
  `is_default` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '是否为默认相册,1代表默认',
  `sort` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `mch_id` int(11) NOT NULL DEFAULT '0' COMMENT '商户id',
  PRIMARY KEY (`group_id`) USING BTREE
) ENGINE=MyISAM AVG_ROW_LENGTH=204 DEFAULT CHARSET=utf8 COMMENT='相册表' ROW_FORMAT=DYNAMIC;
