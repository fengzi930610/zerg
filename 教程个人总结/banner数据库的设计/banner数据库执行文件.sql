

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
	`id` int(11) NOT NULL  AUTO_INCREMENT,
	`name` varchar(50) DEFAULT NULL COMMENT "BANNER名称，通常作为标识",
	`description` varchar(255) DEFAULT NULL COMMENT 'banner描述',
	`delete_time` int(11) DEFAULT NULL,
	`update_time` int(11) DEFAULT NULL,
	PRIMARY KEY(`id`),
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='banner管理表';

INSERT INTO `banner` VALUES ('1','首页置顶','首页轮播图',null,null);


DROP TABLE IF EXISTS `banner_item`;
CREATE TABLE `banner_item` (
	`id` int(11) NOT NULL  AUTO_INCREMENT,
	`img_id` int(11) DEFAULT NULL COMMENT "外键，关联image表",
	`key_word`varchar(100) DEFAULT NULL COMMENT '执行关键字根据不同的type含义不同',
	`type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '跳转类型，可能导向商品，可能导向',
	`delete_time` int(11) DEFAULT NULL,
	`banner_id` int(11) DEFAULT NULL,
	`update_time` int(11) DEFAULT NULL,
	PRIMARY KEY(`id`),
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='banner管理表';

INSERT INTO `banner_item` VALUES ('1','65','6','1',NULL,'1',NULL);
INSERT INTO `banner_item` VALUES ('2','2','25','1',NULL,'1',NULL);