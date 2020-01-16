/*
Navicat MySQL Data Transfer

Source Server         : App
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : spk_makanan

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2020-01-07 22:34:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_buah
-- ----------------------------
DROP TABLE IF EXISTS `tb_buah`;
CREATE TABLE `tb_buah` (
  `kode_buah` varchar(20) NOT NULL,
  `nama_buah` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode_buah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_buah
-- ----------------------------
INSERT INTO `tb_buah` VALUES ('BH01', 'Apel,');
INSERT INTO `tb_buah` VALUES ('BH02', 'Apel Merah,');
INSERT INTO `tb_buah` VALUES ('BH03', 'Belimbing,');
INSERT INTO `tb_buah` VALUES ('BH04', 'Duku,');
INSERT INTO `tb_buah` VALUES ('BH05', 'Jambu Air,');
INSERT INTO `tb_buah` VALUES ('BH06', 'Jambu Biji,');
INSERT INTO `tb_buah` VALUES ('BH07', 'Jeruk Medan,');
INSERT INTO `tb_buah` VALUES ('BH08', 'Jeruk Pontianak,');
INSERT INTO `tb_buah` VALUES ('BH09', 'Jeruk Sunkist,');
INSERT INTO `tb_buah` VALUES ('BH10', 'Mangga Manalagi,');
INSERT INTO `tb_buah` VALUES ('BH11', 'Nanas,');
INSERT INTO `tb_buah` VALUES ('BH12', 'Pepaya,');
INSERT INTO `tb_buah` VALUES ('BH13', 'Pir,');
INSERT INTO `tb_buah` VALUES ('BH14', 'Pisang Rebus,');
INSERT INTO `tb_buah` VALUES ('BH15', 'Salak,');
INSERT INTO `tb_buah` VALUES ('BH16', 'Semangka,');

-- ----------------------------
-- Table structure for tb_golongandarah
-- ----------------------------
DROP TABLE IF EXISTS `tb_golongandarah`;
CREATE TABLE `tb_golongandarah` (
  `kode_golongandarah` varchar(20) NOT NULL,
  `nama_golongandarah` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode_golongandarah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_golongandarah
-- ----------------------------
INSERT INTO `tb_golongandarah` VALUES ('A', 'Golongan Darah A');
INSERT INTO `tb_golongandarah` VALUES ('AB', 'Golongan Darah AB');
INSERT INTO `tb_golongandarah` VALUES ('B', 'Golongan Darah B');
INSERT INTO `tb_golongandarah` VALUES ('O', 'Golongan Darah O');

-- ----------------------------
-- Table structure for tb_konsultasi
-- ----------------------------
DROP TABLE IF EXISTS `tb_konsultasi`;
CREATE TABLE `tb_konsultasi` (
  `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(11) NOT NULL,
  `kode_1` varchar(50) DEFAULT NULL,
  `kode_2` varchar(50) DEFAULT NULL,
  `maka1` varchar(50) DEFAULT NULL,
  `maka2` varchar(50) DEFAULT NULL,
  `maka3` varchar(50) DEFAULT NULL,
  `maka4` varchar(50) DEFAULT NULL,
  `maka5` varchar(50) DEFAULT NULL,
  `maka6` varchar(50) DEFAULT NULL,
  `maka7` varchar(50) DEFAULT NULL,
  `maka8` varchar(50) DEFAULT NULL,
  `maka9` varchar(50) DEFAULT NULL,
  `maka10` varchar(50) DEFAULT NULL,
  `maka11` varchar(50) DEFAULT NULL,
  `maka12` varchar(50) DEFAULT NULL,
  `maka13` varchar(50) DEFAULT NULL,
  `maka14` varchar(50) DEFAULT NULL,
  `maka15` varchar(50) DEFAULT NULL,
  `maka16` varchar(50) DEFAULT NULL,
  `maka17` varchar(50) DEFAULT NULL,
  `maka18` varchar(50) DEFAULT NULL,
  `maka19` varchar(50) DEFAULT NULL,
  `maka20` varchar(50) DEFAULT NULL,
  `maka21` varchar(50) DEFAULT NULL,
  `maka22` varchar(50) DEFAULT NULL,
  `maka23` varchar(50) DEFAULT NULL,
  `maka24` varchar(50) DEFAULT NULL,
  `maka25` varchar(50) DEFAULT NULL,
  `maka26` varchar(50) DEFAULT NULL,
  `maka27` varchar(50) DEFAULT NULL,
  `maka28` varchar(50) DEFAULT NULL,
  `maka29` varchar(50) DEFAULT NULL,
  `maka30` varchar(50) DEFAULT NULL,
  `maka31` varchar(50) DEFAULT NULL,
  `maka32` varchar(50) DEFAULT NULL,
  `maka33` varchar(50) DEFAULT NULL,
  `maka34` varchar(50) DEFAULT NULL,
  `maka35` varchar(50) DEFAULT NULL,
  `maka36` varchar(50) DEFAULT NULL,
  `maka37` varchar(50) DEFAULT NULL,
  `maka38` varchar(50) DEFAULT NULL,
  `maka39` varchar(50) DEFAULT NULL,
  `maka40` varchar(50) DEFAULT NULL,
  `maka41` varchar(50) DEFAULT NULL,
  `maka42` varchar(50) DEFAULT NULL,
  `maka43` varchar(50) DEFAULT NULL,
  `maka44` varchar(50) DEFAULT NULL,
  `maka45` varchar(50) DEFAULT NULL,
  `solusi1` varchar(50) DEFAULT NULL,
  `solusi2` varchar(50) DEFAULT NULL,
  `solusi3` varchar(50) DEFAULT NULL,
  `solusi4` varchar(50) DEFAULT NULL,
  `solusi5` varchar(50) DEFAULT NULL,
  `solusi6` varchar(50) DEFAULT NULL,
  `solusi7` varchar(50) DEFAULT NULL,
  `solusi8` varchar(50) DEFAULT NULL,
  `solusi9` varchar(50) DEFAULT NULL,
  `solusi10` varchar(50) DEFAULT NULL,
  `solusi11` varchar(50) DEFAULT NULL,
  `solusi12` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_konsultasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_konsultasi
-- ----------------------------

-- ----------------------------
-- Table structure for tb_laukpauk
-- ----------------------------
DROP TABLE IF EXISTS `tb_laukpauk`;
CREATE TABLE `tb_laukpauk` (
  `kode_laukpauk` varchar(20) NOT NULL,
  `nama_laukpauk` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode_laukpauk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_laukpauk
-- ----------------------------
INSERT INTO `tb_laukpauk` VALUES ('LP01', 'Ayam Bakar,');
INSERT INTO `tb_laukpauk` VALUES ('LP02', 'Ayam Panggang,');
INSERT INTO `tb_laukpauk` VALUES ('LP03', 'Daging Panggang,');
INSERT INTO `tb_laukpauk` VALUES ('LP04', 'Ikan Mas Pepes,');
INSERT INTO `tb_laukpauk` VALUES ('LP05', 'Telur Asin Rebus,');
INSERT INTO `tb_laukpauk` VALUES ('LP06', 'Telur Ayam Rebus,');
INSERT INTO `tb_laukpauk` VALUES ('LP07', 'Udang Rebus,');
INSERT INTO `tb_laukpauk` VALUES ('LP08', 'Udang Pop,');
INSERT INTO `tb_laukpauk` VALUES ('LP09', 'Empal Daging,');
INSERT INTO `tb_laukpauk` VALUES ('LP10', 'Ikan Bandeng Goreng,');
INSERT INTO `tb_laukpauk` VALUES ('LP11', 'Ikan Bawal Goreng,');
INSERT INTO `tb_laukpauk` VALUES ('LP12', 'Ikan Kembung Goreng,');
INSERT INTO `tb_laukpauk` VALUES ('LP13', 'Ikan Lele Goreng,');
INSERT INTO `tb_laukpauk` VALUES ('LP14', 'Ikan Patin Goreng,');
INSERT INTO `tb_laukpauk` VALUES ('LP15', 'Ikan Tenggiri Goreng');
INSERT INTO `tb_laukpauk` VALUES ('LP16', 'Ikan Teri Goreng,');
INSERT INTO `tb_laukpauk` VALUES ('LP17', 'Ikan Tuna Goreng,');
INSERT INTO `tb_laukpauk` VALUES ('LP18', 'Kerang Rebus,');
INSERT INTO `tb_laukpauk` VALUES ('LP19', 'Udang Goreng Besar,');
INSERT INTO `tb_laukpauk` VALUES ('LP20', 'Telur Mata Sapi,');
INSERT INTO `tb_laukpauk` VALUES ('LP21', 'Abon Sapi,');
INSERT INTO `tb_laukpauk` VALUES ('LP22', 'Ayam Goreng Kecap,');
INSERT INTO `tb_laukpauk` VALUES ('LP23', 'Dendeng Balado,');
INSERT INTO `tb_laukpauk` VALUES ('LP24', 'Gulai Ayam,');
INSERT INTO `tb_laukpauk` VALUES ('LP25', 'Gulai Kepala Ikan Ka');
INSERT INTO `tb_laukpauk` VALUES ('LP26', 'Gulai Limpa,');
INSERT INTO `tb_laukpauk` VALUES ('LP27', 'Gulai Tunjang,');
INSERT INTO `tb_laukpauk` VALUES ('LP28', 'Ikan Teri,');
INSERT INTO `tb_laukpauk` VALUES ('LP29', 'Semur Ayam,');
INSERT INTO `tb_laukpauk` VALUES ('LP30', 'Sop Sapi,');
INSERT INTO `tb_laukpauk` VALUES ('LP31', 'Telur Dadar,');
INSERT INTO `tb_laukpauk` VALUES ('LP32', 'Sambal Goreng Tempe,');
INSERT INTO `tb_laukpauk` VALUES ('LP33', 'Tahu Bacem,');
INSERT INTO `tb_laukpauk` VALUES ('LP34', 'Tempe Bacem,');
INSERT INTO `tb_laukpauk` VALUES ('LP35', 'Tempe Goreng,');
INSERT INTO `tb_laukpauk` VALUES ('LP36', 'Keripik Tempe,');
INSERT INTO `tb_laukpauk` VALUES ('LP37', 'Perkedel Jagung,');
INSERT INTO `tb_laukpauk` VALUES ('LP38', 'Perkedel Kentang,');
INSERT INTO `tb_laukpauk` VALUES ('LP39', 'Tahu Goreng,');
INSERT INTO `tb_laukpauk` VALUES ('LP40', 'Sambal Goreng Ati,');
INSERT INTO `tb_laukpauk` VALUES ('LP41', 'Sambal Goreng Tempe,');

-- ----------------------------
-- Table structure for tb_makananpokok
-- ----------------------------
DROP TABLE IF EXISTS `tb_makananpokok`;
CREATE TABLE `tb_makananpokok` (
  `kode_makananpokok` varchar(20) NOT NULL,
  `nama_makananpokok` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode_makananpokok`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_makananpokok
-- ----------------------------
INSERT INTO `tb_makananpokok` VALUES ('MP01', 'Jagung  Rebus,');
INSERT INTO `tb_makananpokok` VALUES ('MP02', 'Kentang Rebus,');
INSERT INTO `tb_makananpokok` VALUES ('MP03', 'Ketan Putih,');
INSERT INTO `tb_makananpokok` VALUES ('MP04', 'Nasi Putih,');
INSERT INTO `tb_makananpokok` VALUES ('MP05', 'Nasi Putih Kentucky,');
INSERT INTO `tb_makananpokok` VALUES ('MP06', 'Nasi Tim,');
INSERT INTO `tb_makananpokok` VALUES ('MP07', 'Nasi Uduk,');
INSERT INTO `tb_makananpokok` VALUES ('MP08', 'Bihun Goreng,');
INSERT INTO `tb_makananpokok` VALUES ('MP09', 'Kentang Goreng,');
INSERT INTO `tb_makananpokok` VALUES ('MP10', 'Mie Goreng,');
INSERT INTO `tb_makananpokok` VALUES ('MP11', 'nasi Goreng,');

-- ----------------------------
-- Table structure for tb_pengguna
-- ----------------------------
DROP TABLE IF EXISTS `tb_pengguna`;
CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_pengguna
-- ----------------------------
INSERT INTO `tb_pengguna` VALUES ('1', 'admin', 'admin', 'Nanang Maulana armand', 'admin');
INSERT INTO `tb_pengguna` VALUES ('9', 'user@gmail.com', 'user', 'onyx petasan', 'user');
INSERT INTO `tb_pengguna` VALUES ('10', 'juli@gmail.com', 'juli', 'juli', 'user');

-- ----------------------------
-- Table structure for tb_penyakit
-- ----------------------------
DROP TABLE IF EXISTS `tb_penyakit`;
CREATE TABLE `tb_penyakit` (
  `kode_penyakit` varchar(20) NOT NULL,
  `nama_penyakit` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode_penyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_penyakit
-- ----------------------------
INSERT INTO `tb_penyakit` VALUES ('P01', 'Penyakit Jantung');
INSERT INTO `tb_penyakit` VALUES ('P02', 'Penyakit Kolesterol');
INSERT INTO `tb_penyakit` VALUES ('P03', 'Penyakit Diabetes');
INSERT INTO `tb_penyakit` VALUES ('P04', 'penyakit Asam Urat');

-- ----------------------------
-- Table structure for tb_rulls
-- ----------------------------
DROP TABLE IF EXISTS `tb_rulls`;
CREATE TABLE `tb_rulls` (
  `id_rulls` int(11) NOT NULL AUTO_INCREMENT,
  `kode_1` varchar(50) DEFAULT NULL,
  `kode_2` varchar(50) DEFAULT NULL,
  `maka1` varchar(10) DEFAULT NULL,
  `maka2` varchar(10) DEFAULT NULL,
  `maka3` varchar(10) DEFAULT NULL,
  `maka4` varchar(10) DEFAULT NULL,
  `maka5` varchar(10) DEFAULT NULL,
  `maka6` varchar(10) DEFAULT NULL,
  `maka7` varchar(10) DEFAULT NULL,
  `maka8` varchar(10) DEFAULT NULL,
  `maka9` varchar(10) DEFAULT NULL,
  `maka10` varchar(10) DEFAULT NULL,
  `maka11` varchar(10) DEFAULT NULL,
  `maka12` varchar(10) DEFAULT NULL,
  `solusi1` varchar(10) DEFAULT NULL,
  `solusi2` varchar(10) DEFAULT NULL,
  `solusi3` varchar(10) DEFAULT NULL,
  `solusi4` varchar(10) DEFAULT NULL,
  `solusi5` varchar(10) DEFAULT NULL,
  `solusi6` varchar(10) DEFAULT NULL,
  `solusi7` varchar(10) DEFAULT NULL,
  `solusi8` varchar(10) DEFAULT NULL,
  `solusi9` varchar(10) DEFAULT NULL,
  `solusi10` varchar(10) DEFAULT NULL,
  `solusi11` varchar(10) DEFAULT NULL,
  `solusi12` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_rulls`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_rulls
-- ----------------------------
INSERT INTO `tb_rulls` VALUES ('1', 'A', 'P01', 'MP04', 'MP07', 'LP01', 'LP04', 'SYR02', 'SYR04', 'SYR16', 'BH12', 'BH14', 'BH16', 'LP06', '', 'MP07', 'Pisang Reb', 'SYR02', 'BH12', 'MP04', 'LP04', 'SYR04', 'BH14', 'MP04', 'LP13', 'SYR16', 'BH16');
INSERT INTO `tb_rulls` VALUES ('3', 'A', 'P02', 'MP04', 'MP09', 'LP04', 'LP10', 'LP13', 'SYR02', 'SYR04', 'SYR18', 'BH12', 'BH14', 'BH16', '', 'MP09', 'LP10', 'SYR02', 'BH12', 'MP04', 'LP04', 'SYR04', 'BH14', 'MP04', 'LP13', 'SYR18', 'BH16');
INSERT INTO `tb_rulls` VALUES ('4', 'A', 'P03', 'MP01', 'MP04', 'MP09', 'LP01', 'LP07', 'LP20', 'SYR01', 'SYR02', 'SYR04', 'BH10', 'BH12', 'BH14', 'MP01', ' LP01', 'SYR01', 'BH10', 'MP04', 'LP07', 'SYR02', 'BH10', 'MP09', 'LP20', 'SYR04', 'BH14');
INSERT INTO `tb_rulls` VALUES ('5', 'A', 'P04', 'MP04', 'MP07', 'LP01', 'LP04', 'LP06', 'SYR02', 'SYR06', 'SYR16', 'BH12', 'BH14', 'BH16', '', 'MP07', 'LP06', 'SYR02', 'BH12', 'MP04', 'LP04', 'SYR06', 'BH14', 'MP04', 'LP06', 'SYR16', 'BH16');
INSERT INTO `tb_rulls` VALUES ('6', 'B', 'P01', 'MP06', 'MP04', 'LP10', 'LP20', 'LP22', 'SYR06', 'SYR11', 'SYR15', 'BH04', 'BH12', 'BH14', '', 'MP06', 'LP10', 'SYR06', 'BH04', 'MP04', 'LP20', 'SYR11', 'BH12', 'MP04', 'LP22', 'SYR15', 'BH14');
INSERT INTO `tb_rulls` VALUES ('7', 'B', 'P02', 'MP07', 'MP04', 'LP04', 'LP10', 'LP13', 'SYR02', 'SYR04', 'SYR18', 'BH12', 'BH14', 'BH16', '', 'MP07', 'LP10', 'SYR02', 'BH12', 'MP04', 'LP04', 'SYR04', 'BH16', 'MP04', 'LP13', 'SYR18', 'BH16');
INSERT INTO `tb_rulls` VALUES ('8', 'B', 'P03', 'MP01', 'MP04', 'MP09', 'LP01', 'LP07', 'LP20', 'SYR01', 'SYR02', 'SYR04', 'BH02', 'BH10', 'BH12', 'MP01', ' LP01', 'SYR01', 'BH02', 'MP04', 'LP07', 'SYR02', 'BH10', 'MP09', 'LP20', 'SYR04', 'BH12');
INSERT INTO `tb_rulls` VALUES ('9', 'B', 'P04', 'MP04', 'MP07', 'LP01', 'LP04', 'LP06', 'SYR02', 'SYR06', 'SYR16', 'BH10', 'BH12', 'BH14', '', 'MP07', 'LP06', 'SYR02', 'BH10', 'MP04', 'LP04', 'SYR06', 'BH12', 'MP04', 'LP06', 'SYR16', 'BH14');
INSERT INTO `tb_rulls` VALUES ('10', 'O', 'P01', 'MP04', 'MP07', 'LP01', 'LP04', 'LP06', 'SYR02', 'SYR04', 'SYR16', 'BH12', 'BH14', 'BH16', '', 'MP07', 'LP06', 'SYR02', 'BH12', 'MP04', 'LP04', 'SYR04', 'BH14', 'MP04', 'LP06', 'SYR16', 'BH16');
INSERT INTO `tb_rulls` VALUES ('11', 'O', 'P02', 'MP04', 'MP04', 'LP04', 'LP10', 'LP13', 'SYR02', 'SYR04', 'SYR18', 'BH12', 'BH14', 'BH16', '', 'MP09', 'LP10', 'SYR02', 'BH12', 'MP04', 'LP04', 'SYR04', 'BH14', 'MP04', 'LP13', 'SYR18', 'BH16');
INSERT INTO `tb_rulls` VALUES ('12', 'O', 'P03', 'MP01', 'MP04', 'MP09', 'LP01', 'LP07', 'LP20', 'SYR01', 'SYR02', 'SYR04', 'BH10', 'BH12', 'BH14', 'MP01', ' LP01', 'SYR01', 'BH10', 'MP04', 'LP07', 'SYR02', 'BH12', 'MP09', 'LP20', 'SYR04', 'BH14');
INSERT INTO `tb_rulls` VALUES ('13', 'O', 'P04', 'MP04', 'MP07', 'LP01', 'LP04', 'LP06', 'SYR02', 'SYR06', 'SYR16', 'BH12', 'BH14', 'BH16', '', 'MP07', 'LP06', 'SYR02', 'BH12', 'MP04', 'LP04', 'SYR06', 'BH14', 'MP04', 'LP06', 'SYR16', 'BH16');
INSERT INTO `tb_rulls` VALUES ('14', 'AB', 'P01', 'MP04', 'MP07', 'LP01', 'LP04', 'LP06', 'SYR02', 'SYR04', 'SYR16', 'BH12', 'BH14', 'BH16', '', 'MP07', 'LP06', 'SYR02', 'BH12', 'MP04', 'LP04', 'SYR04', 'BH14', 'MP04', 'LP06', 'SYR16', 'BH16');
INSERT INTO `tb_rulls` VALUES ('15', 'AB', 'P02', 'MP04', 'MP09', 'LP04', 'LP10', 'LP13', 'SYR02', 'SYR04', 'SYR18', 'BH12', 'BH14', 'BH16', '', 'MP09', 'LP10', 'SYR02', 'BH12', 'MP04', 'LP04', 'SYR04', 'BH14', 'MP04', 'LP13', 'SYR18', 'BH16');
INSERT INTO `tb_rulls` VALUES ('16', 'AB', 'P03', 'MP01', 'MP04', 'MP09', 'LP01', 'LP07', 'LP20', 'SYR01', 'SYR02', 'SYR04', 'BH10', 'BH12', 'BH14', 'MP01', ' LP01', 'SYR01', 'BH10', 'MP04', 'LP07', 'SYR02', 'BH12', '', '', '', '');
INSERT INTO `tb_rulls` VALUES ('17', 'AB', 'P04', 'MP04', 'MP07', 'LP01', 'LP04', 'LP06', 'SYR02', 'SYR06', 'SYR16', 'BH12', 'BH14', 'BH16', '', 'MP07', 'LP06', 'SYR02', 'BH12', 'MP04', 'LP04', 'SYR06', 'BH14', 'MP04', 'LP06', 'SYR16', 'BH16');

-- ----------------------------
-- Table structure for tb_sayur
-- ----------------------------
DROP TABLE IF EXISTS `tb_sayur`;
CREATE TABLE `tb_sayur` (
  `kode_sayur` varchar(20) NOT NULL,
  `nama_sayur` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode_sayur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_sayur
-- ----------------------------
INSERT INTO `tb_sayur` VALUES ('SYR01', 'Acar Kuning,');
INSERT INTO `tb_sayur` VALUES ('SYR02', 'Bening Bayam,');
INSERT INTO `tb_sayur` VALUES ('SYR03', 'Cah Labu Siam,');
INSERT INTO `tb_sayur` VALUES ('SYR04', 'Sayur Asam,');
INSERT INTO `tb_sayur` VALUES ('SYR05', 'Sop Ayam Kombinasi,');
INSERT INTO `tb_sayur` VALUES ('SYR06', 'sop Bayam,');
INSERT INTO `tb_sayur` VALUES ('SYR07', 'Sop Kimlo,');
INSERT INTO `tb_sayur` VALUES ('SYR08', 'Sop Mutiara Jagung,');
INSERT INTO `tb_sayur` VALUES ('SYR09', 'Sop Oyong Misoa,');
INSERT INTO `tb_sayur` VALUES ('SYR10', 'Sop Telur Putih,');
INSERT INTO `tb_sayur` VALUES ('SYR11', 'Sayur Lodeh,');
INSERT INTO `tb_sayur` VALUES ('SYR12', 'Cah Jagung Putren,');
INSERT INTO `tb_sayur` VALUES ('SYR13', 'Cah Kacang Panjang,');
INSERT INTO `tb_sayur` VALUES ('SYR14', 'Sop Oyong Telur Puyuh,');
INSERT INTO `tb_sayur` VALUES ('SYR15', 'Setup Kentang Buncis,');
INSERT INTO `tb_sayur` VALUES ('SYR16', 'Tumis Buncis,');
INSERT INTO `tb_sayur` VALUES ('SYR17', 'Tumis Daun Singkong,');
INSERT INTO `tb_sayur` VALUES ('SYR18', 'Tumis Kacang Panjang Jagung,');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(15) DEFAULT NULL,
  `daerah` varchar(50) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', 'user@gmail.com', 'user', 'onyx petasan', 'sini ajah', '12345678', 'Yogyakarta', 'user');
INSERT INTO `tb_user` VALUES ('2', 'juli@gmail.com', 'juli', 'juli', 'sono', '098754312', 'Jakarta', 'user');
SET FOREIGN_KEY_CHECKS=1;
