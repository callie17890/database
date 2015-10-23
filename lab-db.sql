/*
 Navicat MySQL Data Transfer

 Source Server         : cgt356-vagrant
 Source Server Type    : MySQL
 Source Server Version : 50544
 Source Host           : 192.168.3.56
 Source Database       : lab_db

 Target Server Type    : MySQL
 Target Server Version : 50544
 File Encoding         : utf-8

 Date: 10/23/2015 09:36:03 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `thing`
-- ----------------------------
DROP TABLE IF EXISTS `thing`;
CREATE TABLE `thing` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `thing`
-- ----------------------------
BEGIN;
INSERT INTO `thing` VALUES ('thing_1', 'Dr. Seuss Books'), ('thing_2', 'Cats '), ('thing_3', 'Harpsicords'), ('thing_4', 'Monster Trucks');
COMMIT;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `user_thing`
-- ----------------------------
DROP TABLE IF EXISTS `user_thing`;
CREATE TABLE `user_thing` (
  `user_id` varchar(255) DEFAULT NULL,
  `thing_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;
