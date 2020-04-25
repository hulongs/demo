/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2020-04-26 01:37:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(30) NOT NULL DEFAULT '',
  `Content` varchar(255) NOT NULL DEFAULT '',
  `Add_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('29', 'admin', '1', '1587832731');
INSERT INTO `message` VALUES ('30', 'admin', '2', '1587832733');
INSERT INTO `message` VALUES ('31', 'admin', '3', '1587832735');
INSERT INTO `message` VALUES ('32', 'admin', '4', '1587832737');
INSERT INTO `message` VALUES ('33', 'admin', '5', '1587832739');
INSERT INTO `message` VALUES ('34', 'admin', '6', '1587832742');
INSERT INTO `message` VALUES ('35', 'admin', '7', '1587832744');
INSERT INTO `message` VALUES ('36', 'admin', '8', '1587832745');
INSERT INTO `message` VALUES ('37', 'admin', '9', '1587832748');
INSERT INTO `message` VALUES ('38', 'admin', '10', '1587832750');
INSERT INTO `message` VALUES ('39', 'admin', '11', '1587832752');
INSERT INTO `message` VALUES ('40', 'admin', '12', '1587832754');
INSERT INTO `message` VALUES ('41', 'admin', '13', '1587832757');
INSERT INTO `message` VALUES ('42', 'admin', '14', '1587832758');
INSERT INTO `message` VALUES ('43', 'admin', '15', '1587832760');
INSERT INTO `message` VALUES ('44', 'admin', '16', '1587832762');
INSERT INTO `message` VALUES ('45', 'admin', '17', '1587832764');
INSERT INTO `message` VALUES ('46', 'admin', '18', '1587832767');
INSERT INTO `message` VALUES ('47', 'admin', '19', '1587832769');
INSERT INTO `message` VALUES ('48', 'admin', '20', '1587832771');
INSERT INTO `message` VALUES ('49', 'admin', '21', '1587832774');
INSERT INTO `message` VALUES ('50', 'admin', '22', '1587832776');
INSERT INTO `message` VALUES ('51', 'admin', '23', '1587832777');
INSERT INTO `message` VALUES ('52', 'admin', '24', '1587832779');
INSERT INTO `message` VALUES ('53', 'admin', '25', '1587832781');
INSERT INTO `message` VALUES ('54', 'admin', '26', '1587832784');
INSERT INTO `message` VALUES ('55', 'admin', '27', '1587832786');
INSERT INTO `message` VALUES ('56', 'admin', '28', '1587832793');
INSERT INTO `message` VALUES ('57', 'admin', '29', '1587832793');
INSERT INTO `message` VALUES ('58', 'admin', '30', '1587832793');
INSERT INTO `message` VALUES ('59', 'admin', '31', '1587832793');
INSERT INTO `message` VALUES ('60', 'admin', '32', '1587832793');
