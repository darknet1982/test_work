/*
Navicat MySQL Data Transfer

Source Server         : openserver
Source Server Version : 50550
Source Host           : localhost:3306
Source Database       : testwork

Target Server Type    : MYSQL
Target Server Version : 50550
File Encoding         : 65001

Date: 2016-10-07 13:46:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `inn` varchar(255) DEFAULT NULL,
  `ogrn` varchar(255) DEFAULT NULL,
  `date_append` date DEFAULT NULL,
  `sro_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('1', 'Исключен', 'ИП Иванов', '111111', '2222222', '2016-10-19', '1');
INSERT INTO `members` VALUES ('2', 'Является членом', 'ИП Петров', '33333333', '4444444', '0000-00-00', '2');
INSERT INTO `members` VALUES ('9', 'Исключен', 'ИП Сидоров', '666666', '6666666', '2016-09-30', '1');

-- ----------------------------
-- Table structure for sro
-- ----------------------------
DROP TABLE IF EXISTS `sro`;
CREATE TABLE `sro` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `reg_num` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sro
-- ----------------------------
INSERT INTO `sro` VALUES ('1', '11111', 'Союз', 'Омская обл');
INSERT INTO `sro` VALUES ('2', '22222', 'Рога и копыта', 'Москва');
INSERT INTO `sro` VALUES ('3', '33333', 'ООО \"ООО\"', 'Спб');
