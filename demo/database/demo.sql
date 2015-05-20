/*
Navicat MySQL Data Transfer

Source Server         : php
Source Server Version : 50623
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50623
File Encoding         : 65001

Date: 2015-05-20 17:47:07
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tb_news`
-- ----------------------------
DROP TABLE IF EXISTS `tb_news`;
CREATE TABLE `tb_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_header` text COLLATE utf8_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8_unicode_ci NOT NULL,
  `newstype_id` int(11) NOT NULL,
  `news_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_status` tinyint(4) NOT NULL DEFAULT '1',
  `news_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_news
-- ----------------------------
INSERT INTO `tb_news` VALUES ('1', 'Công ty bds Bắc trung nam', 'Công ty bds Bắc trung nam', '<p>Công ty bds Bắc trung nam</p>', '1', '2015-05-20 16:51:14', '1', 'http://localhost/demo/uploads/image/kha2-507ee.jpg');

-- ----------------------------
-- Table structure for `tb_newstype`
-- ----------------------------
DROP TABLE IF EXISTS `tb_newstype`;
CREATE TABLE `tb_newstype` (
  `newstype_id` int(11) NOT NULL AUTO_INCREMENT,
  `newstype_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `newstype_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`newstype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_newstype
-- ----------------------------
INSERT INTO `tb_newstype` VALUES ('1', 'Giới thiệu', '1');
INSERT INTO `tb_newstype` VALUES ('2', 'Khuyến mại', '1');
INSERT INTO `tb_newstype` VALUES ('3', 'sản phẩm mới', '1');

-- ----------------------------
-- Table structure for `tb_user`
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` tinyint(11) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_status` tinyint(1) NOT NULL DEFAULT '0',
  `ipp` int(11) NOT NULL DEFAULT '20',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', 'mrbacdoan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '0979191493', 'Sóc Sơn, Hà Nội', '1993-12-20', '2015-01-14 03:41:42', '1', '20');
INSERT INTO `tb_user` VALUES ('3', 'mrsiro@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2', '1', '1532525325', 'Sóc Sơn, Hà Nội', '1993-12-20', '2015-05-10 06:54:34', '1', '20');
