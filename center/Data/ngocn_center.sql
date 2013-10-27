/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : ngocn_center

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2013-10-26 19:56:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `center_user`
-- ----------------------------
DROP TABLE IF EXISTS `center_user`;
CREATE TABLE `center_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '用户名，不可修改',
  `email` varchar(64) NOT NULL COMMENT '邮箱地址，不可修改',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `verify_token` varchar(32) NOT NULL COMMENT '认证key',
  `verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0账号未验证，1已验证',
  `user_org` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0普通用户，1申请中，2资源提供方',
  `ip` varchar(16) NOT NULL DEFAULT '0,0,0,0' COMMENT '登录ip',
  `ltime` time NOT NULL COMMENT '最后登录时间',
  `ctime` time NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of center_user
-- ----------------------------

-- ----------------------------
-- Table structure for `center_userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `center_userinfo`;
CREATE TABLE `center_userinfo` (
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of center_userinfo
-- ----------------------------

-- ----------------------------
-- Table structure for `center_user_app`
-- ----------------------------
DROP TABLE IF EXISTS `center_user_app`;
CREATE TABLE `center_user_app` (
  `user_id` int(11) DEFAULT NULL,
  `user_app` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of center_user_app
-- ----------------------------

-- ----------------------------
-- Table structure for `center_user_org`
-- ----------------------------
DROP TABLE IF EXISTS `center_user_org`;
CREATE TABLE `center_user_org` (
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `org_id` int(11) DEFAULT NULL COMMENT '机构id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of center_user_org
-- ----------------------------

-- ----------------------------
-- Table structure for `center_user_statistics`
-- ----------------------------
DROP TABLE IF EXISTS `center_user_statistics`;
CREATE TABLE `center_user_statistics` (
  `id` int(11) NOT NULL DEFAULT '0',
  `user_total` int(11) DEFAULT NULL COMMENT '当月用户总数',
  `user_new` int(11) DEFAULT NULL COMMENT '当月新增用户数',
  `user_unverified` int(11) DEFAULT NULL COMMENT '当月未激活用户数',
  `user_active` int(11) DEFAULT NULL COMMENT '当月活跃用户数(当月用户登录系统即为活跃用户)',
  `month` varchar(6) DEFAULT NULL COMMENT '月度:201310',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of center_user_statistics
-- ----------------------------

-- ----------------------------
-- Table structure for `center_app`
-- ----------------------------
DROP TABLE IF EXISTS `center_app`;
CREATE TABLE `center_app` (
  `id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL COMMENT '创建人',
  `app_name` varchar(32) NOT NULL COMMENT 'app名',
  `app_description` varchar(250) NOT NULL COMMENT 'app描述',
  `app_token` varchar(32) NOT NULL COMMENT 'app key',
  `app_url` varchar(250) NOT NULL COMMENT 'app地址',
  `app_avatar` varchar(250) NOT NULL,
  `app_status` tinyint(1) DEFAULT NULL,
  `ctime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of center_app
-- ----------------------------

-- ----------------------------
-- Table structure for `center_app_statistics`
-- ----------------------------
DROP TABLE IF EXISTS `center_app_statistics`;
CREATE TABLE `center_app_statistics` (
  `app_id` int(11) NOT NULL DEFAULT '0',
  `app_user_total` int(11) DEFAULT NULL COMMENT 'app用户数',
  `app_user_new` int(11) DEFAULT NULL COMMENT '单月新增用户数',
  `app_call_total` int(11) DEFAULT NULL COMMENT 'app接口使用总次数',
  `app_call_new` int(11) DEFAULT NULL,
  `month` varbinary(6) DEFAULT NULL COMMENT '月度：201310',
  PRIMARY KEY (`app_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of center_app_statistics
-- ----------------------------

-- ----------------------------
-- Table structure for `center_org`
-- ----------------------------
DROP TABLE IF EXISTS `center_org`;
CREATE TABLE `center_org` (
  `org_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '机构ID',
  `org_full_name` varchar(128) NOT NULL COMMENT '机构全称',
  `org_short_name` varchar(64) NOT NULL COMMENT '机构简称',
  `org_title` varchar(128) NOT NULL COMMENT '机构标题',
  `org_status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '机构状态',
  `user_id` int(10) unsigned NOT NULL COMMENT '创建人ID',
  `org_email` varchar(128) NOT NULL COMMENT '机构官方邮箱',
  `org_site` varchar(64) NOT NULL COMMENT '机构网站',
  `org_addr` varchar(128) NOT NULL COMMENT '机构地址',
  `org_tel` varchar(16) NOT NULL COMMENT '机构电话',
  `org_fax` varchar(16) NOT NULL COMMENT '机构传真',
  `org_avatar` varchar(128) NOT NULL COMMENT '机构头像',
  `org_content` varchar(250) DEFAULT NULL COMMENT '机构简介',
  `org_service` varchar(250) DEFAULT NULL COMMENT '机构服务',
  `org_mission` varchar(250) DEFAULT NULL COMMENT '机构使命',
  `org_vision` varchar(250) DEFAULT NULL COMMENT '机构愿景',
  `org_concept` varchar(250) DEFAULT NULL COMMENT '机构核心价值观',
  `org_authentic` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '机构是否有认证',
  `area_id` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '地域ID 0:不区分地域',
  `ctime` date NOT NULL COMMENT '创建时间',
  `field_id` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '领域',
  PRIMARY KEY (`org_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC COMMENT='机构表';

-- ----------------------------
-- Records of center_org
-- ----------------------------
INSERT INTO `center_org` VALUES ('1', 'ngocn公益机构', 'ngocn', '致力于公益事业', '0', '3', 'ngocn@ngocn.com', '机构网站:', '构地址:', '4543234', '234234', '/Upload/3/2013/06/12/d3c92941319f3a35460ad3e619536702.jpg', '机构介绍:asdf', '机构服务：', '机构使命：', '机构愿景：', '机构核心价值观：', '1', '1', '2013-06-03', '1');
INSERT INTO `center_org` VALUES ('2', '测试帐号添加的机构', '测试机构', '为了测试而创建', '1', '3', 'admin@ngocn.net', '', '', '', '', '/Upload/3/2013/06/020b2fedf1b4c558c63b6cc48756589f8e.jpg', '', '', '', '', '', '0', '1', '2013-06-02', '1');
INSERT INTO `center_org` VALUES ('3', 'test', 'test full', 'test title', '1', '3', 'asd@s.com', '机构网站:', '机构地址:', '23423', '23423', '/Upload/3/2013/06/020b9e459658da2a8ae4fcfa488fd88a95.jpg', '机构介绍:', '机构服务：', '机构使命：', '机构愿景：', '机构核心价值观：', '1', '1', '2013-06-02', '1');
