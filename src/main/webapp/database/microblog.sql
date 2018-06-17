/*
 Navicat Premium Data Transfer

 Source Server         : 实验室服务器
 Source Server Type    : MySQL
 Source Server Version : 50718
 Source Host           : 192.168.1.247:3306
 Source Schema         : microblog

 Target Server Type    : MySQL
 Target Server Version : 50718
 File Encoding         : 65001

 Date: 17/06/2018 09:53:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog`  (
  `blogid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NULL DEFAULT NULL,
  `pubishtime` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `content` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NULL,
  PRIMARY KEY (`blogid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_mysql500_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES (1, 1, '2018-06-15 19:52:46', 'abc');
INSERT INTO `blog` VALUES (2, 1, '2018-06-15 19:52:51', 'efg');
INSERT INTO `blog` VALUES (3, 3, NULL, '1');
INSERT INTO `blog` VALUES (4, 3, NULL, 'abc');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `head` int(11) NOT NULL DEFAULT 0,
  `md5password` char(32) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`userid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_mysql500_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'root', 1, 'abc');

SET FOREIGN_KEY_CHECKS = 1;
