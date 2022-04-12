/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50716
 Source Host           : localhost:3306
 Source Schema         : pembayaran_mobile

 Target Server Type    : MySQL
 Target Server Version : 50716
 File Encoding         : 65001

 Date: 12/04/2022 10:45:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_bayar
-- ----------------------------
DROP TABLE IF EXISTS `tb_bayar`;
CREATE TABLE `tb_bayar`  (
  `Kode` int(11) NOT NULL AUTO_INCREMENT,
  `Kode_siswa` int(11) NULL DEFAULT NULL,
  `Kode_jenis` int(11) NULL DEFAULT NULL,
  `Qty` int(11) NULL DEFAULT NULL,
  `Nominal` int(11) NULL DEFAULT NULL,
  `Tanggal` date NULL DEFAULT NULL,
  `Created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Kode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_bayar
-- ----------------------------

-- ----------------------------
-- Table structure for tb_jenis_bayar
-- ----------------------------
DROP TABLE IF EXISTS `tb_jenis_bayar`;
CREATE TABLE `tb_jenis_bayar`  (
  `Kode` int(11) NOT NULL AUTO_INCREMENT,
  `Jenis_bayar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Nominal` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Kode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_jenis_bayar
-- ----------------------------
INSERT INTO `tb_jenis_bayar` VALUES (1, 'SPP', 15000);

-- ----------------------------
-- Table structure for tb_siswa
-- ----------------------------
DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE `tb_siswa`  (
  `Kode` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Alamat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Kode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_siswa
-- ----------------------------
INSERT INTO `tb_siswa` VALUES (1, 'AGUS', 'Kediri');

SET FOREIGN_KEY_CHECKS = 1;
