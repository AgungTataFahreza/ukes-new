/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : bios

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 17/04/2024 14:04:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bios_account_codes
-- ----------------------------
DROP TABLE IF EXISTS `bios_account_codes`;
CREATE TABLE `bios_account_codes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1976 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_account_codes
-- ----------------------------
INSERT INTO `bios_account_codes` VALUES (1, '111115', 'Kas di Rekening Penempatan dalam Rupiah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (2, '111215', 'Kas di Rekening Penempatan dalam Valuta USD', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (3, '111315', 'Kas di Rekening Penerimaan Migas - RPL', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (4, '111325', 'Kas di Rekening Pemerintah di Bank Umum Dalam Rangka Penempatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (5, '111451', 'Kas di Rekening Retur BI dalam Rupiah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (6, '111511', 'Kas dalam Transito - BUN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (7, '111512', 'Kas dalam Transito Rekening Pinjaman/ Hibah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (8, '111513', 'Kas dalam Transito TUP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (9, '111514', 'Kas dalam Transito UP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (10, '111515', 'Kas dalam Transito BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (11, '111516', 'Kas dalam Transito-Transaksi Non Kas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (12, '111517', 'Kas dalam Transito-Transaksi DTP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (13, '111519', 'Kas dalam Transito Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (14, '111521', 'Kas dalam Transito - Perwakilan Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (15, '111825', 'Kas Lainnya di Bendahara Penerimaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (16, '114115', 'Belanja Modal Dibayar Dimuka (prepaid)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (17, '114215', 'Uang Muka Belanja Subsidi (prepayment)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (18, '115111', 'Piutang PPh Minyak Bumi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (19, '115112', 'Piutang PPh Gas Bumi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (20, '115119', 'Piutang PPh Migas Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (21, '115121', 'Piutang PPh Pasal 21', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (22, '115122', 'Piutang PPh Pasal 22', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (23, '115123', 'Piutang PPh Pasal 22 Impor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (24, '115124', 'Piutang PPh Pasal 23', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (25, '115125', 'Piutang PPh Pasal 25/29 Orang Pribadi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (26, '115126', 'Piutang PPh Pasal 25/29 Badan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (27, '115127', 'Piutang PPh Pasal 26', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (28, '115128', 'Piutang PPh Final', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (29, '115129', 'Piutang PPh Piutang PPh Fiskal Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (30, '115131', 'Piutang PPN Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (31, '115132', 'Piutang PPN Impor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (32, '115139', 'Piutang PPN Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (33, '115141', 'Piutang PPnBM dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (34, '115142', 'Piutang PPnBM Impor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (35, '115149', 'Piutang PPnBM Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (36, '115151', 'Piutang PBB Pedesaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (37, '115152', 'Piutang PBB Perkotaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (38, '115153', 'Piutang PBB Perkebunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (39, '115154', 'Piutang PBB Kehutanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (40, '115155', 'Piutang PBB Pertambangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (41, '115156', 'Piutang BPHTB', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (42, '115159', 'Piutang PBB Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (43, '115161', 'Piutang Cukai Hasil Tembakau', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (44, '115162', 'Piutang Cukai Ethyl Alkohol', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (45, '115163', 'Piutang Cukai Minuman mengandung Ethyl Alkohol', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (46, '115164', 'Piutang Pendapatan Denda Administrasi Cukai', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (47, '115165', 'Piutang Bea Materai', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (48, '115169', 'Piutang Pendapatan Cukai Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (49, '115171', 'Piutang Pendapatan dari Penjualan Benda Materai', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (50, '115172', 'Piutang Pajak Tidak Langsung Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (51, '115173', 'Piutang Bunga Penagihan PPh', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (52, '115174', 'Piutang Bunga Penagihan PPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (53, '115175', 'Piutang Bunga Penagihan PPnBM', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (54, '115176', 'Piutang Bunga Penagihan PTLL', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (55, '115181', 'Piutang Bea Masuk', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (56, '115182', 'Piutang Bea Masuk ditanggung Pemerintah atas Hibah (SPM Nihil)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (57, '115183', 'Piutang Pendapatan Denda Administrasi Pabean', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (58, '115184', 'Piutang Pendapatan Pabean Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (59, '115185', 'Piutang Pajak/Pungutan Ekspor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (60, '115186', 'Piutang Pendapatan Denda Administrasi Bea Keluar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (61, '115187', 'Piutang Pendapatan Bunga Bea Keluar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (62, '115191', 'Piutang Bea Masuk Antidumping', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (63, '115192', 'Piutang Bea Masuk Imbalan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (64, '115193', 'Piutang Bea Masuk Tindakan Pengamanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (65, '115211', 'Piutang Penerimaan Negara Bukan Pajak', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (66, '115212', 'Piutang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (67, '115221', 'Piutang PT. PPA', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (68, '115231', 'Piutang Transfer Dana Perimbangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (69, '115232', 'Piutang Transfer Dana Otonomi Khusus dan Penyesuaian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (70, '115241', 'Bagian Lancar Piutang Kredit Investasi Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (71, '115261', 'Piutang Subsidi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (72, '115311', 'Bagian Lancar Tagihan Penjualan Angsuran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (73, '115321', 'Bagian Lancar Tagihan Penjualan Angsuran - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (74, '115411', 'Bagian Lancar Tagihan Tuntutan Perbendaharaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (75, '115421', 'Bagian Lancar Tagihan Tuntutan Ganti Rugi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (76, '115431', 'Bagian Lancar Tagihan Tuntutan Perbendaharaan/Tuntutan Ganti Rugi - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (77, '115511', 'Bagian Lancar Piutang Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (78, '115512', 'Bagian Lancar RDI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (79, '115513', 'Potensi Tunggakan Yang Dapat Ditagih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (80, '115521', 'Potensi Tunggakan yang Dapat Ditagih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (81, '115522', 'Piutang Bunga Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (82, '115523', 'Piutang Denda Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (83, '115611', 'Piutang dari BUN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (84, '115612', 'Piutang dari KPPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (85, '115613', 'Piutang dari Uang Persediaan yang akan Diterima', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (86, '115614', 'Piutang dari Tambahan Uang Persediaan yang akan Diterima', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (87, '115615', 'Piutang dari Uang Muka Belanja Barang yang akan Diterima', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (88, '115616', 'Piutang dari Uang Muka Belanja Modal yang akan Diterima', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (89, '115617', 'Piutang dari Persekot Gaji yang akan Diterima', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (90, '115631', 'Piutang dari Kas BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (91, '115651', 'Piutang Kepada RKUN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (92, '115661', 'Piutang dari Penerimaan Transito', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (93, '115671', 'Piutang Komitmen atas Penempatan pada Bank Indonesia', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (94, '115672', 'Piutang Komitmen atas Penempatan pada Bank Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (95, '115673', 'Piutang Komitmen atas Transaksi SBN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (96, '115674', 'Piutang Komitmen atas Reverse Repo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (97, '115675', 'Piutang Komitmen atas Repo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (98, '115676', 'Piutang Komitmen atas Transaksi Foreign Exchange', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (99, '115681', 'Piutang Bunga Penempatan pada Bank Indonesia', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (100, '115682', 'Piutang Bunga Penempatan pada Bank Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (101, '115683', 'Piutang Kupon SBN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (102, '115684', 'Piutang Bunga Reverse Repo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (103, '115711', 'Piutang BLU Pelayanan Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (104, '115712', 'Piutang BLU Pelayanan Pendidikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (105, '115713', 'Piutang BLU Penunjang Konstruksi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (106, '115714', 'Piutang BLU Penyedia Jasa Telekomunikasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (107, '115719', 'Piutang BLU Penyedia Barang dan Jasa Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (108, '115721', 'Piutang BLU Pengelola Kawasan Otorita', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (109, '115722', 'Piutang BLU Pengelola Kawasan Ekonomi Terpadu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (110, '115729', 'Piutang BLU Pengelola Kawasan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (111, '115731', 'Piutang BLU Pengelola Dana Investasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (112, '115732', 'Piutang BLU Pengelola Dana Bergulir', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (113, '115739', 'Piutang BLU Pengelola Dana Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (114, '115741', 'Piutang dari Pelayanan BLU yang Bersumber dari Entitas Pemerintah Pusat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (115, '115791', 'Piutang BLU Lainnya dari Kegiatan Operasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (116, '115811', 'Piutang Sewa Tanah - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (117, '115812', 'Piutang Sewa Gedung - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (118, '115813', 'Piutang Sewa Ruangan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (119, '115814', 'Piutang Sewa Peralatan dan Mesin - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (120, '115815', 'Piutang Sewa Aset Tetap Lainnya - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (121, '115819', 'Piutang Sewa Lainnya - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (122, '115821', 'Piutang dari Penjualan Aset Tetap - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (123, '115829', 'Piutang dari Penjualan Aset lainnya - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (124, '115831', 'Piutang dari Tukar Menukar Aset Tetap - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (125, '115839', 'Piutang dari Tukar Menukar Aset Lainnya - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (126, '115891', 'Piutang BLU Lainnya dari Kegiatan Non Operasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (127, '115911', 'Piutang Lancar Kredit Pemerintah (KUMK)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (128, '115921', 'Bagian Lancar Piutang Penjaminan Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (129, '115931', 'Bagian Lancar Piutang Jangka Panjang Penanggulangan Lumpur Sidoarjo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (130, '115939', 'Bagian Lancar Piutang Jangka Panjang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (131, '116115', 'Penyisihan Piutang Tidak Tertagih - Piutang Pajak PBB dan BPHTB', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (132, '116251', 'Penyisihan Piutang Tidak Tertagih - Potensi Tunggakan Yang Dapat Ditagih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (133, '116252', 'Penyisihan Piutang Tidak Tertagih - Piutang Bunga Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (134, '116253', 'Penyisihan Piutang Tidak Tertagih - Piutang Denda Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (135, '116511', 'Penyisihan Piutang Tidak Tertagih - Bagian Lancar Investasi Permanen', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (136, '117125', 'Jalan, Irigasi dan Jaringan untuk diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (137, '118115', 'Piutang PFK Tabungan Wajib Perumahan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (138, '118125', 'Piutang Dana PFK Tunggakan Iuran Jaminan Kesehatan Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (139, '121511', 'Penyertaan Modal Pemerintah dalam Proyek Pembangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (140, '121615', 'Investasi BLU Penyedia Jasa Telekomunikasi - Non Permanen', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (141, '135111', 'Aset Tetap Renovasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (142, '135121', 'Aset Tetap Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (143, '135211', 'Aset Tetap Lainnya - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (144, '135221', 'Aset Tetap Renovasi - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (145, '151111', 'Piutang Tagihan Penjualan Angsuran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (146, '151211', 'Piutang Tagihan Penjualan Angsuran-Badan Layanan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (147, '152111', 'Piutang Tagihan Tuntutan Perbendaharaan/ Tuntutan Ganti Rugi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (148, '152211', 'Piutang Tagihan Tuntutan Perbendaharaan/ Tuntutan Ganti Rugi-Badan Layanan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (149, '153111', 'Piutang Jangka Panjang Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (150, '153112', 'Aset Lainnya RDI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (151, '153113', 'Piutang yang belum tertagih (Unbilled)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (152, '153114', 'Piutang yang belum teridentifikasi (Unidentified)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (153, '153115', 'Selisih piutang (On Account)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (154, '153116', 'Piutang yang belum terekonsiliasi (Unapplied)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (155, '153117', 'Aset Lainnya Kredit Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (156, '153118', 'Piutang Penerusan Pinjaman yang belum Disesuaikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (157, '153119', 'Piutang Transito Pengalihan Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (158, '154111', 'Piutang Jangka Panjang atas Kredit Pemerintah KUT-TP 1999/2000', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (159, '154112', 'Piutang Jangka Panjang atas Kredit Pemerintah Dana Cadangan KUT-TP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (160, '154113', 'Piutang Jangka Panjang atas Kredit Pemerintah KKop Pangan MP2000', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (161, '154114', 'Piutang Jangka Panjang atas Kredit Pemerintah PIR dan UPP Perkebunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (162, '154115', 'Piutang Jangka Panjang atas Kredit Pemerintah (KUMK)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (163, '154121', 'Piutang Jangka Panjang atas Kredit Investasi Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (164, '154122', 'Piutang Jangka Panjang atas Kredit Investasi Pemerintah yang belum disesuaikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (165, '154131', 'Piutang Jangka Panjang atas Penjaminan Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (166, '155111', 'Piutang Jangka Panjang lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (167, '155121', 'Piutang Jangka Panjang Penanggulangan Lumpur Sidoarjo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (168, '155211', 'Piutang Jangka Panjang Subsidi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (169, '156111', 'Penyisihan Piutang Tidak Tertagih - Tagihan Penjualan Angsuran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (170, '156211', 'Penyisihan Piutang Tidak Tertagih - Tagihan Penjualan Angsuran BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (171, '156311', 'Penyisihan Piutang Tidak Tertagih - Tuntutan Perbendaharaan/ Tuntutan Ganti Rugi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (172, '156411', 'Penyisihan Piutang Tidak Tertagih - Tagihan Tuntutan Perbendaharaan/Tuntutan Ganti Rugi BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (173, '156511', 'Penyisihan Piutang Tidak Tertagih - Piutang Jangka Panjang Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (174, '156512', 'Penyisihan Piutang Tidak Tertagih - Aset Lainnya RDI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (175, '156513', 'Penyisihan Piutang Tidak Tertagih - Aset Lainnya Kredit Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (176, '156611', 'Penyisihan Piutang Tidak Tertagih - Kredit Pemerintah Bidang Pertanian dan Perkebunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (177, '156612', 'Penyisihan Piutang Tidak Tertagih - Kredit Investasi Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (178, '156621', 'Penyisihan Piutang Tidak Tertagih - Penjaminan Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (179, '156711', 'Penyisihan Piutang Tidak Tertagih Jangka Panjang Subsidi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (180, '156911', 'Penyisihan Piutang Tidak Tertagih - Piutang Jangka Panjang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (181, '156921', 'Penyisihan Piutang Tidak Tertagih - Piutang Jangka Panjang Penanggulangan Lumpur Sidoarjo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (182, '162151', 'Software', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (183, '165111', 'Dana Kelolaan BLU yang belum digulirkan/diinvestasikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (184, '165112', 'Dana Kelolaan BLU yang Ditarik ke Rekening BUN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (185, '165211', 'Dana Jangka Panjang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (186, '166125', 'Aset Eks Kelolaan PT. PPA', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (187, '169135', 'Akumulasi Penyusutan Aset Eks Kelolaan PT. PPA', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (188, '169315', 'Akumulasi Amortisasi Software', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (189, '169415', 'Akumulasi Amortisasi Aset Tak Berwujud Lainnya-Badan Layanan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (190, '211115', 'Utang Perwalian/Perhitungan Fihak Ketiga (PFK) Tabungan Wajib Perumahan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (191, '211151', 'Utang Perwalian/Perhitungan Fihak Ketiga (PFK) kepada PT Taspen', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (192, '211152', 'Utang Perwalian/Perhitungan Fihak Ketiga (PFK) kepada PT Asabri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (193, '211153', 'Utang Perwalian/Perhitungan Fihak Ketiga (PFK) kepada PT Askes', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (194, '211154', 'Utang Perwalian/Perhitungan Fihak Ketiga (PFK) kepada Pusku POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (195, '211155', 'Utang Perwalian/Perhitungan Fihak Ketiga (PFK) kepada Pusku Kemhan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (196, '211156', 'Utang Perwalian/Perhitungan Fihak Ketiga (PFK) Penyaluran Beras BULOG', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (197, '212115', 'Belanja Bantuan Sosial yang Masih Harus Dibayar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (198, '212135', 'Dukungan Infrastruktur yang Masih Harus Dibayar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (199, '212145', 'Pengeluaran Non Anggaran Pihak Ketiga yang Masih Harus Dibayar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (200, '212151', 'Utang Pihak Ketiga Migas-Bagian BP Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (201, '212152', 'Utang Pihak Ketiga Migas-Pajak Air Tanah ke Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (202, '212153', 'Utang Pihak Ketiga Migas-Pajak Penerangan Jalan non PLN ke Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (203, '212154', 'Utang Pihak Ketiga Migas-PDRD', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (204, '212155', 'Utang Pihak Ketiga Migas-Reimbursement DMO Bagian KKKS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (205, '212156', 'Utang Pihak Ketiga Migas-Reimbursement PPN KKKS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (206, '212157', 'Utang Pihak Ketiga Migas-Reimbursement Underlifting  KKKS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (207, '212165', 'Utang Pihak Ketiga-Bunga Obligasi Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (208, '212175', 'Utang Komitmen atas Repo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (209, '212195', 'Utang Pihak Ketiga - Penggantian Bonus Produksi Panas Bumi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (210, '213125', 'Discount Surat Perbendaharaan Negara Syariah dalam Rupiah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (211, '213151', 'Utang Bunga Repo-TDR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (212, '215111', 'Transfer Dana Perimbangan yang Masih Harus Dibayar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (213, '215112', 'Transfer Dana Otonomi Khusus dan Penyesuaian yang Masih Harus Dibayar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (214, '215121', 'Transfer Dana Perimbangan yang Masih Harus Dibayar - Estimasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (215, '215122', 'Transfer Dana Otonomi Khusus dan Penyesuaian Yang Masih Harus Dibayar - Estimasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (216, '216151', 'Bagian Lancar Surat Berharga Syariah Negara dalam Valuta Asing', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (217, '219115', 'Utang Kelebihan Bayar Pajak BPHTB', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (218, '219225', 'Pendapatan Bea Masuk Imbalan Diterima Di Muka', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (219, '219511', 'Uang Muka dari KPPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (220, '219951', 'Utang Permintaan Persekot Gaji', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (221, '221251', 'Discount Obligasi Negara - dalam Rupiah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (222, '221252', 'Discount Obligasi Negara - dalam Valuta Asing', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (223, '221253', 'Discount SBSN - dalam Rupiah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (224, '221254', 'Discount SBSN - dalam Valuta Asing', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (225, '221511', 'Utang Jangka Panjang BLU kepada BUN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (226, '311315', 'Penyesuaian SAL BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (227, '391115', 'Dana yang Disediakan Untuk Pengalihan Aset', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (228, '391151', 'Koreksi atas Reklasifikasi Persediaan/Aset Tetap/Aset Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (229, '411125', 'Pengembalian Pendapatan PPh Pasal 25/29 Orang Pribadi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (230, '411125', 'Pendapatan PPh Pasal 25/29 Orang Pribadi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (231, '411145', 'Pendapatan PPh Pasal 25/29 Orang Pribadi Ditanggung Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (232, '411145', 'Pengembalian Pendapatan PPh Pasal 25/29 Orang Pribadi Ditanggung Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (233, '411315', 'Pendapatan PBB Pertambangan Mineral dan Batubara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (234, '411315', 'Pengembalian Pendapatan PBB Pertambangan Mineral dan Batubara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (235, '411511', 'Pengembalian Pendapatan Cukai Hasil Tembakau', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (236, '411511', 'Pendapatan Cukai Hasil Tembakau', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (237, '411512', 'Pengembalian Pendapatan Cukai Ethyl Alkohol', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (238, '411512', 'Pendapatan Cukai Ethyl Alkohol', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (239, '411513', 'Pengembalian Pendapatan Cukai Minuman mengandung Ethyl Alkohol', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (240, '411513', 'Pendapatan Cukai Minuman mengandung Ethyl Alkohol', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (241, '411514', 'Pengembalian Pendapatan Denda Administrasi Cukai', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (242, '411514', 'Pendapatan Denda Administrasi Cukai', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (243, '411519', 'Pendapatan Cukai Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (244, '411519', 'Pengembalian Pendapatan Cukai Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (245, '412115', 'Pengembalian Denda Atas Sanksi Administrasi Dari Pelaksanaan Pengawasan Terhadap Barang Tertentu Yang Pengangkutannya Di Dalam Daerah Pabean (Antar Pu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (246, '412115', 'Denda Atas Sanksi Administrasi Dari Pelaksanaan Pengawasan Terhadap Barang Tertentu Yang Pengangkutannya Di Dalam Daerah Pabean (Antar Pulau)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (247, '421335', 'Pendapatan Iuran Produksi/Royalti Pertambangan Nikel', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (248, '421335', 'Pengembalian Pendapatan Iuran Produksi/Royalti Pertambangan Nikel', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (249, '421435', 'Pendapatan Iuran Izin Usaha Pemanfaatan Hasil Hutan (IIUPHH)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (250, '421435', 'Pengembalian Pendapatan Iuran Izin Usaha Pemanfaatan Hasil Hutan (IIUPHH)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (251, '421451', 'Pengembalian Pendapatan dari Kegiatan Perijinan di Bidang Perbenihan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (252, '421451', 'Pendapatan dari Kegiatan Perijinan di Bidang Perbenihan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (253, '421452', 'Pengembalian Pendapatan dari Sertifikasi Benih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (254, '421452', 'Pendapatan dari Sertifikasi Benih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (255, '421453', 'Pengembalian Pendapatan dari Pengumpulan Benih dan Anakan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (256, '421453', 'Pendapatan dari Pengumpulan Benih dan Anakan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (257, '421511', 'Pengembalian Pendapatan Perikanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (258, '421511', 'Pendapatan Perikanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (259, '421521', 'Pengembalian Pendapatan Pungutan Pengusahaan Perikanan Bidang Perikanan Tangkap', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (260, '421521', 'Pendapatan Pungutan Pengusahaan Perikanan Bidang Perikanan Tangkap', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (261, '421522', 'Pendapatan Pungutan Pengusahaan Perikanan Bidang Pembudidayaan Ikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (262, '421522', 'Pengembalian Pendapatan Pungutan Pengusahaan Perikanan Bidang Pembudidayaan Ikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (263, '421531', 'Pendapatan Pungutan Hasil Perikanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (264, '421531', 'Pengembalian Pendapatan Pungutan Hasil Perikanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (265, '424115', 'Pendapatan Jasa Bandar Udara, Kepelabuhan dan Kenavigasian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (266, '424115', 'Pengembalian Pendapatan Jasa Bandar Udara, Kepelabuhan dan Kenavigasian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (267, '424135', 'Pengembalian Pendapatan Program Dana Bergulir Syariah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (268, '424135', 'Pendapatan Program Dana Bergulir Syariah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (269, '424215', 'Pengembalian Pendapatan Hibah Terikat Luar Negeri-Lembaga/Badan Usaha - Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (270, '424215', 'Pendapatan Hibah Terikat Luar Negeri-Lembaga/Badan Usaha - Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (271, '424225', 'Pengembalian Pendapatan Hibah Tidak Terikat Luar Negeri-Lembaga/Badan Usaha - Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (272, '424225', 'Pendapatan Hibah Tidak Terikat Luar Negeri-Lembaga/Badan Usaha - Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (273, '424235', 'Pendapatan Hibah Terikat Luar Negeri-Lembaga/Badan Usaha - Barang / Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (274, '424235', 'Pengembalian Pendapatan Hibah Terikat Luar Negeri-Lembaga/Badan Usaha - Barang / Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (275, '424245', 'Pengembalian Pendapatan Hibah Tidak Terikat Luar Negeri-Lembaga/Badan Usaha - Barang / Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (276, '424245', 'Pendapatan Hibah Tidak Terikat Luar Negeri-Lembaga/Badan Usaha - Barang / Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (277, '424915', 'Penerimaan Kembali Belanja Barang BLU Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (278, '424915', 'Pengembalian Penerimaan Kembali Belanja Barang BLU Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (279, '424925', 'Pendapatan BLU Lainnya dari Sewa Aset Tetap Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (280, '424925', 'Pengembalian Pendapatan BLU Lainnya dari Sewa Aset Tetap Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (281, '424945', 'Pendapatan BLU Lainnya dari Tukar Menukar Aset Tetap Lainnya BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (282, '424945', 'Pengembalian Pendapatan BLU Lainnya dari Tukar Menukar Aset Tetap Lainnya BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (283, '424951', 'Pendapatan dari Penerimaan Klaim Asuransi BMN BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (284, '424951', 'Pengembalian Pendapatan dari Penerimaan Klaim Asuransi BMN BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (285, '425111', 'Pengembalian Pendapatan Penjualan Hasil Tambang Batubara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (286, '425111', 'Pendapatan Penjualan Hasil Tambang Batubara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (287, '425112', 'Pendapatan Penjualan Hasil Pertanian, Perkebunan, Peternakan dan Budidaya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (288, '425112', 'Pengembalian Pendapatan Penjualan Hasil Pertanian, Perkebunan, Peternakan dan Budidaya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (289, '425113', 'Pendapatan Penjualan Dokumen-dokumen Pelelangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (290, '425113', 'Pengembalian Pendapatan Penjualan Dokumen-dokumen Pelelangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (291, '425114', 'Pendapatan Penjualan Cadangan Beras Pemerintah Dalam Rangka Operasi Pasar Murni', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (292, '425114', 'Pengembalian Pendapatan Penjualan Cadangan Beras Pemerintah Dalam Rangka Operasi Pasar Murni', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (293, '425119', 'Pendapatan Penjualan Hasil Produksi Non Litbang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (294, '425119', 'Pengembalian Pendapatan Penjualan Hasil Produksi Non Litbang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (295, '425121', 'Pengembalian Pendapatan dari Penjualan Tanah, Gedung, dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (296, '425121', 'Pendapatan dari Penjualan Tanah, Gedung, dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (297, '425122', 'Pendapatan dari Penjualan Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (298, '425122', 'Pengembalian Pendapatan dari Penjualan Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (299, '425123', 'Pendapatan Kompensasi Sewa Beli Rumah Negara Golongan III', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (300, '425123', 'Pengembalian Pendapatan Kompensasi Sewa Beli Rumah Negara Golongan III', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (301, '425124', 'Pengembalian Pendapatan dari Tukar Menukar Tanah, Gedung dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (302, '425124', 'Pendapatan dari Tukar Menukar Tanah, Gedung dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (303, '425125', 'Pendapatan dari Tukar Menukar Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (304, '425125', 'Pengembalian Pendapatan dari Tukar Menukar Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (305, '425126', 'Pendapatan dari Tukar Menukar Jalan, Irigasi dan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (306, '425126', 'Pengembalian Pendapatan dari Tukar Menukar Jalan, Irigasi dan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (307, '425129', 'Pendapatan dari Pemindahtanganan BMN Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (308, '425129', 'Pengembalian Pendapatan dari Pemindahtanganan BMN Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (309, '425131', 'Pendapatan Sewa Tanah, Gedung, dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (310, '425131', 'Pengembalian Pendapatan Sewa Tanah, Gedung, dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (311, '425132', 'Pendapatan Sewa Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (312, '425132', 'Pengembalian Pendapatan Sewa Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (313, '425133', 'Pengembalian Pendapatan Sewa Jalan, Irigasi dan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (314, '425133', 'Pendapatan Sewa Jalan, Irigasi dan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (315, '425134', 'Pengembalian Pendapatan dari KSP Tanah, Gedung, dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (316, '425134', 'Pendapatan dari KSP Tanah, Gedung, dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (317, '425135', 'Pengembalian Pendapatan dari KSP Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (318, '425135', 'Pendapatan dari KSP Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (319, '425136', 'Pengembalian Pendapatan dari KSP Jalan, Irigasi, dan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (320, '425136', 'Pendapatan dari KSP Jalan, Irigasi, dan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (321, '425137', 'Pengembalian Pendapatan dari Bangun, Guna, dan Serah (BGS)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (322, '425137', 'Pendapatan dari Bangun, Guna, dan Serah (BGS)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (323, '425138', 'Pendapatan dari Bangun, Serah, dan Guna (BSG)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (324, '425138', 'Pengembalian Pendapatan dari Bangun, Serah, dan Guna (BSG)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (325, '425139', 'Pendapatan dari Pemanfaatan BMN Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (326, '425139', 'Pengembalian Pendapatan dari Pemanfaatan BMN Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (327, '425141', 'Pendapatan atas Pengelolaan BMN yang Berasal dari KKKS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (328, '425141', 'Pengembalian Pendapatan atas Pengelolaan BMN yang Berasal dari KKKS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (329, '425142', 'Pengembalian Pendapatan atas Pengelolaan BMN yang Berasal dari Kontraktor PKP2B', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (330, '425142', 'Pendapatan atas Pengelolaan BMN yang Berasal dari Kontraktor PKP2B', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (331, '425143', 'Pengembalian Pendapatan atas Pemanfaatan Aset Properti', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (332, '425143', 'Pendapatan atas Pemanfaatan Aset Properti', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (333, '425144', 'Pendapatan Atas Aset Saham dan Surat Berharga Lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (334, '425144', 'Pengembalian Pendapatan Atas Aset Saham dan Surat Berharga Lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (335, '425145', 'Pendapatan Kompensasi Aset Bekas Milik Asing/Tionghoa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (336, '425145', 'Pengembalian Pendapatan Kompensasi Aset Bekas Milik Asing/Tionghoa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (337, '425149', 'Pengembalian Pendapatan atas Pengelolaan BMN dan Kekayaan Negara Lainnya dari Pengelola Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (338, '425149', 'Pendapatan atas Pengelolaan BMN dan Kekayaan Negara Lainnya dari Pengelola Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (339, '425151', 'Pendapatan Penggunaan Sarana dan Prasarana sesuai dengan Tusi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (340, '425151', 'Pengembalian Pendapatan Penggunaan Sarana dan Prasarana sesuai dengan Tusi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (341, '425161', 'Pengembalian Pendapatan Bersih Hasil Penjualan Bahan Bakar Minyak', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (342, '425161', 'Pendapatan Bersih Hasil Penjualan Bahan Bakar Minyak', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (343, '425162', 'Pengembalian Pendapatan Minyak Mentah (DMO)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (344, '425162', 'Pendapatan Minyak Mentah (DMO)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (345, '425169', 'Pengembalian Pendapatan Lainnya dari Kegiatan Hulu Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (346, '425169', 'Pendapatan Lainnya dari Kegiatan Hulu Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (347, '425171', 'Pendapatan Iuran Badan Usaha dari Kegiatan Usaha Penyediaan dan Pendistribusian BBM', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (348, '425171', 'Pengembalian Pendapatan Iuran Badan Usaha dari Kegiatan Usaha Penyediaan dan Pendistribusian BBM', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (349, '425172', 'Pengembalian Pendapatan Iuran Badan Usaha dari Kegiatan Usaha Gas Bumi Melalui Pipa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (350, '425172', 'Pendapatan Iuran Badan Usaha dari Kegiatan Usaha Gas Bumi Melalui Pipa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (351, '425173', 'Pendapatan dari Penerimaan Klaim Asuransi BMN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (352, '425173', 'Pengembalian Pendapatan dari Penerimaan Klaim Asuransi BMN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (353, '425211', 'Pendapatan Paspor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (354, '425211', 'Pengembalian Pendapatan Paspor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (355, '425212', 'Pendapatan Visa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (356, '425212', 'Pengembalian Pendapatan Visa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (357, '425213', 'Pendapatan Izin Keimigrasian dan Izin Masuk Kembali (Re-entry permit)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (358, '425213', 'Pengembalian Pendapatan Izin Keimigrasian dan Izin Masuk Kembali (Re-entry permit)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (359, '425214', 'Pendapatan Pelayanan Keimigrasian Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (360, '425214', 'Pengembalian Pendapatan Pelayanan Keimigrasian Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (361, '425215', 'Pengembalian Pendapatan Pelayanan Fidusia', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (362, '425215', 'Pendapatan Pelayanan Fidusia', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (363, '425216', 'Pengembalian Pendapatan Pelayanan Badan Hukum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (364, '425216', 'Pendapatan Pelayanan Badan Hukum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (365, '425217', 'Pengembalian Pendapatan Pelayanan Jasa Hukum Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (366, '425217', 'Pendapatan Pelayanan Jasa Hukum Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (367, '425218', 'Pendapatan Pelayanan Kekayaan Intelektual', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (368, '425218', 'Pengembalian Pendapatan Pelayanan Kekayaan Intelektual', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (369, '425219', 'Pendapatan Pelayanan dan Administrasi Hukum Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (370, '425219', 'Pengembalian Pendapatan Pelayanan dan Administrasi Hukum Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (371, '425221', 'Pendapatan Visa Republik Indonesia di Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (372, '425221', 'Pengembalian Pendapatan Visa Republik Indonesia di Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (373, '425222', 'Pendapatan Paspor Republik Indonesia di Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (374, '425222', 'Pengembalian Pendapatan Paspor Republik Indonesia di Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (375, '425223', 'Pengembalian Pendapatan Dokumen Kekonsuleran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (376, '425223', 'Pendapatan Dokumen Kekonsuleran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (377, '425224', 'Pendapatan Jasa Pelayanan pada Kantor Dagang dan Ekonomi Indonesia di Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (378, '425224', 'Pengembalian Pendapatan Jasa Pelayanan pada Kantor Dagang dan Ekonomi Indonesia di Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (379, '425228', 'Pengembalian Pendapatan Pelayanan Lainnya di Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (380, '425228', 'Pendapatan Pelayanan Lainnya di Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (381, '425229', 'Pengembalian Pendapatan Administrasi di Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (382, '425229', 'Pendapatan Administrasi di Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (383, '425231', 'Pengembalian Pendapatan Pengesahan Surat di Bawah Tangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (384, '425231', 'Pendapatan Pengesahan Surat di Bawah Tangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (385, '425232', 'Pendapatan Uang Meja (Leges) dan Upah pada Panitera Badan Peradilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (386, '425232', 'Pengembalian Pendapatan Uang Meja (Leges) dan Upah pada Panitera Badan Peradilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (387, '425233', 'Pengembalian Pendapatan Ongkos Perkara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (388, '425233', 'Pendapatan Ongkos Perkara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (389, '425234', 'Pengembalian Pendapatan Gratifikasi yang Ditetapkan KPK Menjadi Milik Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (390, '425234', 'Pendapatan Gratifikasi yang Ditetapkan KPK Menjadi Milik Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (391, '425235', 'Pendapatan Penjualan Hasil Lelang Gratifikasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (392, '425235', 'Pengembalian Pendapatan Penjualan Hasil Lelang Gratifikasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (393, '425236', 'Pengembalian Pendapatan Penjualan Barang Rampasan/Hasil Sitaan yang telah diputuskan/ditetapkan pengadilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (394, '425236', 'Pendapatan Penjualan Barang Rampasan/Hasil Sitaan yang telah diputuskan/ditetapkan pengadilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (395, '425237', 'Pendapatan Denda Pelanggaran Lalu Lintas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (396, '425237', 'Pengembalian Pendapatan Denda Pelanggaran Lalu Lintas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (397, '425238', 'Pendapatan Denda Hasil Tindak Pidana Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (398, '425238', 'Pengembalian Pendapatan Denda Hasil Tindak Pidana Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (399, '425239', 'Pendapatan Kejaksaan dan Peradilan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (400, '425239', 'Pengembalian Pendapatan Kejaksaan dan Peradilan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (401, '425241', 'Pengembalian Pendapatan Uang Sitaan Hasil Korupsi yang Telah Diputuskan/Ditetapkan Pengadilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (402, '425241', 'Pendapatan Uang Sitaan Hasil Korupsi yang Telah Diputuskan/Ditetapkan Pengadilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (403, '425242', 'Pengembalian Pendapatan Uang Sitaan Tindak Pidana Pencucian Uang yang Telah Diputuskan/Ditetapkan Pengadilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (404, '425242', 'Pendapatan Uang Sitaan Tindak Pidana Pencucian Uang yang Telah Diputuskan/Ditetapkan Pengadilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (405, '425243', 'Pendapatan Uang Pengganti Tindak Pidana Korupsi yang Telah Diputuskan/Ditetapkan Pengadilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (406, '425243', 'Pengembalian Pendapatan Uang Pengganti Tindak Pidana Korupsi yang Telah Diputuskan/Ditetapkan Pengadilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (407, '425244', 'Pengembalian Pendapatan Penjualan Hasil Lelang Tindak Pidana Pencucian Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (408, '425244', 'Pendapatan Penjualan Hasil Lelang Tindak Pidana Pencucian Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (409, '425245', 'Pengembalian Pendapatan Penjualan Hasil Lelang Tindak Pidana Korupsi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (410, '425245', 'Pendapatan Penjualan Hasil Lelang Tindak Pidana Korupsi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (411, '425246', 'Pendapatan Denda Hasil Tindak Pidana Korupsi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (412, '425246', 'Pengembalian Pendapatan Denda Hasil Tindak Pidana Korupsi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (413, '425247', 'Pendapatan Denda Hasil Tindak Pidana Pencucian Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (414, '425247', 'Pengembalian Pendapatan Denda Hasil Tindak Pidana Pencucian Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (415, '425248', 'Pengembalian Pendapatan Hasil Pengembalian Uang Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (416, '425248', 'Pendapatan Hasil Pengembalian Uang Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (417, '425249', 'Pengembalian Pendapatan Uang Sitaan Tindak Pidana Lainnya yang Telah Diputuskan/Ditetapkan Pengadilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (418, '425249', 'Pendapatan Uang Sitaan Tindak Pidana Lainnya yang Telah Diputuskan/Ditetapkan Pengadilan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (419, '425251', 'Pengembalian Pendapatan Perizinan Tenaga Kerja Asing', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (420, '425251', 'Pendapatan Perizinan Tenaga Kerja Asing', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (421, '425252', 'Pendapatan Perizinan Pertanian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (422, '425252', 'Pengembalian Pendapatan Perizinan Pertanian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (423, '425253', 'Pendapatan Perizinan di Bidang Perdagangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (424, '425253', 'Pengembalian Pendapatan Perizinan di Bidang Perdagangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (425, '425254', 'Pendapatan Perizinan di Bidang Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (426, '425254', 'Pengembalian Pendapatan Perizinan di Bidang Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (427, '425255', 'Pengembalian Pendapatan Perizinan di Bidang Lingkungan Hidup dan Kehutanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (428, '425255', 'Pendapatan Perizinan di Bidang Lingkungan Hidup dan Kehutanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (429, '425259', 'Pendapatan Perizinan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (430, '425259', 'Pengembalian Pendapatan Perizinan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (431, '425261', 'Pendapatan Penerbitan Surat Izin Mengemudi (SIM)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (432, '425261', 'Pengembalian Pendapatan Penerbitan Surat Izin Mengemudi (SIM)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (433, '425262', 'Pengembalian Pendapatan Perpanjangan Surat Izin Mengemudi (SIM)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (434, '425262', 'Pendapatan Perpanjangan Surat Izin Mengemudi (SIM)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (435, '425263', 'Pendapatan Penerbitan Surat Tanda Nomor Kendaraan Bermotor (STNK)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (436, '425263', 'Pengembalian Pendapatan Penerbitan Surat Tanda Nomor Kendaraan Bermotor (STNK)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (437, '425264', 'Pengembalian Pendapatan Penerbitan Tanda Coba Nomor Kendaraan Bermotor (TCKB)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (438, '425264', 'Pendapatan Penerbitan Tanda Coba Nomor Kendaraan Bermotor (TCKB)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (439, '425265', 'Pendapatan Buku Pemilik Kendaraan Bermotor (BPKB)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (440, '425265', 'Pengembalian Pendapatan Buku Pemilik Kendaraan Bermotor (BPKB)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (441, '425266', 'Pengembalian Pendapatan Tanda Nomor Kendaraan Bermotor (TNKB)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (442, '425266', 'Pendapatan Tanda Nomor Kendaraan Bermotor (TNKB)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (443, '425267', 'Pengembalian Pendapatan Ujian Keterampilan Mengemudi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (444, '425267', 'Pendapatan Ujian Keterampilan Mengemudi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (445, '425268', 'Pendapatan Penerbitan Surat Mutasi Kendaraan Ke Luar Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (446, '425268', 'Pengembalian Pendapatan Penerbitan Surat Mutasi Kendaraan Ke Luar Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (447, '425269', 'Pengembalian Pendapatan Nomor Registrasi Kendaraan Bermotor Pilihan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (448, '425269', 'Pendapatan Nomor Registrasi Kendaraan Bermotor Pilihan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (449, '425271', 'Pengembalian Pendapatan Surat Tanda Nomor Kendaraan Bermotor Lintas Batas Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (450, '425271', 'Pendapatan Surat Tanda Nomor Kendaraan Bermotor Lintas Batas Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (451, '425272', 'Pengembalian Pendapatan Tanda Nomor Kendaraan Bermotor Lintas Batas Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (452, '425272', 'Pendapatan Tanda Nomor Kendaraan Bermotor Lintas Batas Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (453, '425273', 'Pendapatan  Penerbitan Surat Ijin Senjata Api dan Bahan Peledak dan Penerbitan Surat Keterangan Catatan Kepolisian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (454, '425273', 'Pengembalian Pendapatan  Penerbitan Surat Ijin Senjata Api dan Bahan Peledak dan Penerbitan Surat Keterangan Catatan Kepolisian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (455, '425274', 'Pengembalian Pendapatan Surat Tanda Coba Kendaraan (STCK)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (456, '425274', 'Pendapatan Surat Tanda Coba Kendaraan (STCK)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (457, '425275', 'Pendapatan Pelayanan Satuan Pengaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (458, '425275', 'Pengembalian Pendapatan Pelayanan Satuan Pengaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (459, '425276', 'Pendapatan Pengamanan Obyek Vital', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (460, '425276', 'Pengembalian Pendapatan Pengamanan Obyek Vital', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (461, '425279', 'Pengembalian Pendapatan Pelayanan Kepolisian Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (462, '425279', 'Pendapatan Pelayanan Kepolisian Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (463, '425281', 'Pengembalian Pendapatan Akreditasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (464, '425281', 'Pendapatan Akreditasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (465, '425282', 'Pendapatan Pengujian, Sertifikasi  dan Standardisasi di Bidang Lingkungan Hidup dan Kehutanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (466, '425282', 'Pengembalian Pendapatan Pengujian, Sertifikasi  dan Standardisasi di Bidang Lingkungan Hidup dan Kehutanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (467, '425283', 'Pengembalian Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Perindustrian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (468, '425283', 'Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Perindustrian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (469, '425284', 'Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Perdagangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (470, '425284', 'Pengembalian Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Perdagangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (471, '425285', 'Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (472, '425285', 'Pengembalian Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (473, '425286', 'Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Pekerjaan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (474, '425286', 'Pengembalian Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Pekerjaan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (475, '425287', 'Pendapatan Pengujian, Sertifikasi dan Kalibrasidi Bidang Perhubungan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (476, '425287', 'Pengembalian Pendapatan Pengujian, Sertifikasi dan Kalibrasidi Bidang Perhubungan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (477, '425288', 'Pendapatan Pengujian, Sertifikasi dan Kalibrasi di Bidang Komunikasi dan Informatika', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (478, '425288', 'Pengembalian Pendapatan Pengujian, Sertifikasi dan Kalibrasi di Bidang Komunikasi dan Informatika', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (479, '425289', 'Pengembalian Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (480, '425289', 'Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (481, '425311', 'Pengembalian Pendapatan dari Badan Penyelenggara Jaminan Sosial (BPJS) Kesehatan pada Fasilitas Kesehatan Tingkat Pertama (FKTP)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (482, '425311', 'Pendapatan dari Badan Penyelenggara Jaminan Sosial (BPJS) Kesehatan pada Fasilitas Kesehatan Tingkat Pertama (FKTP)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (483, '425312', 'Pengembalian Pendapatan dari BPJS Kesehatan pada Fasilitas Kesehatan Tingkat Lanjutan (FKTL)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (484, '425312', 'Pendapatan dari BPJS Kesehatan pada Fasilitas Kesehatan Tingkat Lanjutan (FKTL)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (485, '425313', 'Pendapatan Layanan Fasilitas Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (486, '425313', 'Pengembalian Pendapatan Layanan Fasilitas Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (487, '425314', 'Pengembalian Pendapatan Jasa Karantina Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (488, '425314', 'Pendapatan Jasa Karantina Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (489, '425315', 'Pendapatan Jasa Pemberian Vaksin Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (490, '425315', 'Pengembalian Pendapatan Jasa Pemberian Vaksin Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (491, '425316', 'Pengembalian Pendapatan Registrasi Tenaga Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (492, '425316', 'Pendapatan Registrasi Tenaga Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (493, '425321', 'Pengembalian Pendapatan Jasa Pengawasan Obat dan Makanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (494, '425321', 'Pendapatan Jasa Pengawasan Obat dan Makanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (495, '425331', 'Pengembalian Pendapatan Jasa Karantina Pertanian dan Peternakan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (496, '425331', 'Pendapatan Jasa Karantina Pertanian dan Peternakan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (497, '425332', 'Pendapatan Jasa Karantina Perikanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (498, '425332', 'Pengembalian Pendapatan Jasa Karantina Perikanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (499, '425341', 'Pengembalian Pendapatan Pelayanan Pertanahan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (500, '425341', 'Pendapatan Pelayanan Pertanahan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (501, '425342', 'Pendapatan Peneriman Hak Atas Tanah P3MB/Presidium Kabinet Dwikora', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (502, '425342', 'Pengembalian Pendapatan Peneriman Hak Atas Tanah P3MB/Presidium Kabinet Dwikora', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (503, '425351', 'Pendapatan Jasa Kantor Urusan Agama', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (504, '425351', 'Pengembalian Pendapatan Jasa Kantor Urusan Agama', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (505, '425359', 'Pendapatan Jasa Pelayanan Keagamaan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (506, '425359', 'Pengembalian Pendapatan Jasa Pelayanan Keagamaan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (507, '425411', 'Pengembalian Pendapatan Ujian/Seleksi Masuk Pendidikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (508, '425411', 'Pendapatan Ujian/Seleksi Masuk Pendidikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (509, '425412', 'Pendapatan Biaya Pendidikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (510, '425412', 'Pengembalian Pendapatan Biaya Pendidikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (511, '425413', 'Pendapatan Penelitian, Pengembangan, dan Pengabdian Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (512, '425413', 'Pengembalian Pendapatan Penelitian, Pengembangan, dan Pengabdian Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (513, '425419', 'Pendapatan Pendidikan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (514, '425419', 'Pengembalian Pendapatan Pendidikan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (515, '425421', 'Pengembalian Pendapatan Layanan Pendidikan dan/atau Pelatihan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (516, '425421', 'Pendapatan Layanan Pendidikan dan/atau Pelatihan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (517, '425429', 'Pengembalian Pendapatan Pengembangan Sumber Daya Manusia Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (518, '425429', 'Pendapatan Pengembangan Sumber Daya Manusia Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (519, '425431', 'Pendapatan Layanan Penelitian/Riset dan Pengembangan Iptek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (520, '425431', 'Pengembalian Pendapatan Layanan Penelitian/Riset dan Pengembangan Iptek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (521, '425432', 'Pengembalian Pendapatan Layanan Survey dan Pemetaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (522, '425432', 'Pendapatan Layanan Survey dan Pemetaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (523, '425433', 'Pendapatan Layanan Meteorologi, Klimatologi dan Geofisika', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (524, '425433', 'Pengembalian Pendapatan Layanan Meteorologi, Klimatologi dan Geofisika', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (525, '425434', 'Pengembalian Pendapatan Hasil Penelitian/Riset dan Hasil Pengembangan Iptek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (526, '425434', 'Pendapatan Hasil Penelitian/Riset dan Hasil Pengembangan Iptek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (527, '425435', 'Pendapatan Hasil Survey dan Pemetaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (528, '425435', 'Pengembalian Pendapatan Hasil Survey dan Pemetaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (529, '425436', 'Pendapatan Royalti atas Kekayaan Intelektual', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (530, '425436', 'Pengembalian Pendapatan Royalti atas Kekayaan Intelektual', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (531, '425439', 'Pendapatan Penelitian/Riset, Survey, Pemetaan, dan Pengembangan Iptek Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (532, '425439', 'Pengembalian Pendapatan Penelitian/Riset, Survey, Pemetaan, dan Pengembangan Iptek Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (533, '425451', 'Pendapatan Museum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (534, '425451', 'Pengembalian Pendapatan Museum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (535, '425459', 'Pengembalian Pendapatan Sejarah dan Kebudayaan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (536, '425459', 'Pendapatan Sejarah dan Kebudayaan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (537, '425511', 'Pengembalian Pendapatan Pelayanan Pengujian Kendaraan Bermotor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (538, '425511', 'Pendapatan Pelayanan Pengujian Kendaraan Bermotor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (539, '425512', 'Pengembalian Pendapatan Penggunaan Prasarana Perkeretaapian/Track Access Charge', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (540, '425512', 'Pendapatan Penggunaan Prasarana Perkeretaapian/Track Access Charge', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (541, '425513', 'Pendapatan Jasa Kepelabuhanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (542, '425513', 'Pengembalian Pendapatan Jasa Kepelabuhanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (543, '425514', 'Pengembalian Pendapatan Jasa Navigasi Pelayaran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (544, '425514', 'Pendapatan Jasa Navigasi Pelayaran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (545, '425515', 'Pendapatan Jasa Perkapalan dan Kepelautan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (546, '425515', 'Pengembalian Pendapatan Jasa Perkapalan dan Kepelautan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (547, '425516', 'Pengembalian Pendapatan Jasa Kebandarudaraan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (548, '425516', 'Pendapatan Jasa Kebandarudaraan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (549, '425517', 'Pendapatan Jasa Navigasi Penerbangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (550, '425517', 'Pengembalian Pendapatan Jasa Navigasi Penerbangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (551, '425518', 'Pengembalian Pendapatan dari Konsesi Bidang Transportasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (552, '425518', 'Pendapatan dari Konsesi Bidang Transportasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (553, '425519', 'Pendapatan Jasa Transportasi Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (554, '425519', 'Pengembalian Pendapatan Jasa Transportasi Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (555, '425521', 'Pendapatan Penggunaan Spektrum Frekuensi Radio', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (556, '425521', 'Pengembalian Pendapatan Penggunaan Spektrum Frekuensi Radio', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (557, '425522', 'Pengembalian Pendapatan Hak Penyelenggaraan Telekomunikasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (558, '425522', 'Pendapatan Hak Penyelenggaraan Telekomunikasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (559, '425523', 'Pengembalian Pendapatan Izin Penyelenggaraan Penyiaran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (560, '425523', 'Pendapatan Izin Penyelenggaraan Penyiaran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (561, '425524', 'Pengembalian Pendapatan Izin Penyelenggaraan Pos', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (562, '425524', 'Pendapatan Izin Penyelenggaraan Pos', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (563, '425525', 'Pengembalian Pendapatan Kontribusi Penyelenggaraan Pos Untuk Pembiayaan Layanan Pos Universal', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (564, '425525', 'Pendapatan Kontribusi Penyelenggaraan Pos Untuk Pembiayaan Layanan Pos Universal', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (565, '425526', 'Pengembalian Pendapatan Pengelolaan Nama Domain Indonesia', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (566, '425526', 'Pendapatan Pengelolaan Nama Domain Indonesia', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (567, '425529', 'Pendapatan Jasa Komunikasi dan Informatika Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (568, '425529', 'Pengembalian Pendapatan Jasa Komunikasi dan Informatika Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (569, '425531', 'Pengembalian Pendapatan Jasa Siaran LPP RRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (570, '425531', 'Pendapatan Jasa Siaran LPP RRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (571, '425532', 'Pendapatan Jasa Non Siaran LPP RRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (572, '425532', 'Pengembalian Pendapatan Jasa Non Siaran LPP RRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (573, '425533', 'Pendapatan Jasa Siaran LPP TVRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (574, '425533', 'Pengembalian Pendapatan Jasa Siaran LPP TVRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (575, '425534', 'Pendapatan Jasa Non Siaran LPP TVRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (576, '425534', 'Pengembalian Pendapatan Jasa Non Siaran LPP TVRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (577, '425611', 'Pendapatan Wisata Alam', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (578, '425611', 'Pengembalian Pendapatan Wisata Alam', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (579, '425612', 'Pengembalian Pendapatan Iuran di Bidang Lingkungan Hidup dan Kehutanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (580, '425612', 'Pendapatan Iuran di Bidang Lingkungan Hidup dan Kehutanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (581, '425619', 'Pendapatan Jasa di Bidang Lingkungan Hidup dan Kehutanan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (582, '425619', 'Pengembalian Pendapatan Jasa di Bidang Lingkungan Hidup dan Kehutanan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (583, '425621', 'Pendapatan Jasa Pelabuhan Perikanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (584, '425621', 'Pengembalian Pendapatan Jasa Pelabuhan Perikanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (585, '425629', 'Pengembalian Pendapatan Jasa Kelautan dan Perikanan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (586, '425629', 'Pendapatan Jasa Kelautan dan Perikanan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (587, '425691', 'Pengembalian Pendapatan Jasa Pengawasan/Pemeriksaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (588, '425691', 'Pendapatan Jasa Pengawasan/Pemeriksaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (589, '425692', 'Pengembalian Pendapatan  Jasa Tenaga, Pekerjaan, dan Informasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (590, '425692', 'Pendapatan  Jasa Tenaga, Pekerjaan, dan Informasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (591, '425693', 'Pendapatan dari Jasa Layanan Jalan Tol', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (592, '425693', 'Pengembalian Pendapatan dari Jasa Layanan Jalan Tol', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (593, '425694', 'Pendapatan dari Biaya Jasa Pengelolaan Sumber Daya Air (BJPSDA)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (594, '425694', 'Pengembalian Pendapatan dari Biaya Jasa Pengelolaan Sumber Daya Air (BJPSDA)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (595, '425699', 'Pendapatan Jasa Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (596, '425699', 'Pengembalian Pendapatan Jasa Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (597, '425712', 'Pendapatan PPA (eks BPPN) atas Bunga Obligasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (598, '425712', 'Pengembalian Pendapatan PPA (eks BPPN) atas Bunga Obligasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (599, '425713', 'Pengembalian Pendapatan Bunga dari Piutang dan Pemberian Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (600, '425713', 'Pendapatan Bunga dari Piutang dan Pemberian Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (601, '425714', 'Pengembalian Pendapatan Bunga dari Pemberian Kredit Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (602, '425714', 'Pendapatan Bunga dari Pemberian Kredit Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (603, '425715', 'Pengembalian Pendapatan Komitmen Pemberian Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (604, '425715', 'Pendapatan Komitmen Pemberian Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (605, '425716', 'Pengembalian Pendapatan Bunga Kredit Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (606, '425716', 'Pendapatan Bunga Kredit Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (607, '425717', 'Pengembalian Pendapatan Bunga dari Rekening Pembangunan Hutan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (608, '425717', 'Pendapatan Bunga dari Rekening Pembangunan Hutan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (609, '425719', 'Pendapatan Bunga Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (610, '425719', 'Pengembalian Pendapatan Bunga Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (611, '425741', 'Pendapatan Imbal Jasa Penjaminan Infrastruktur', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (612, '425741', 'Pengembalian Pendapatan Imbal Jasa Penjaminan Infrastruktur', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (613, '425752', 'Pengembalian Pendapatan dari Untung Selisih Kurs Uang Persediaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (614, '425752', 'Pendapatan dari Untung Selisih Kurs Uang Persediaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (615, '425761', 'Pendapatan Layanan Jasa Perbankan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (616, '425761', 'Pengembalian Pendapatan Layanan Jasa Perbankan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (617, '425764', 'Pengembalian Pendapatan Jasa Lembaga Keuangan (Jasa Giro)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (618, '425764', 'Pendapatan Jasa Lembaga Keuangan (Jasa Giro)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (619, '425765', 'Pengembalian Pendapatan dari Penutupan Rekening', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (620, '425765', 'Pendapatan dari Penutupan Rekening', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (621, '425781', 'Pengembalian Pendapatan Biaya Penagihan Pajak Negara dengan Surat Paksa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (622, '425781', 'Pendapatan Biaya Penagihan Pajak Negara dengan Surat Paksa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (623, '425782', 'Pengembalian Pendapatan Bea Lelang Pejabat Lelang Kelas I', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (624, '425782', 'Pendapatan Bea Lelang Pejabat Lelang Kelas I', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (625, '425783', 'Pendapatan Bea Lelang Pejabat Lelang Kelas II', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (626, '425783', 'Pengembalian Pendapatan Bea Lelang Pejabat Lelang Kelas II', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (627, '425784', 'Pengembalian Pendapatan Bea Lelang Pegadaian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (628, '425784', 'Pendapatan Bea Lelang Pegadaian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (629, '425785', 'Pengembalian Pendapatan Biaya Administrasi Pengurusan Piutang Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (630, '425785', 'Pendapatan Biaya Administrasi Pengurusan Piutang Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (631, '425791', 'Pendapatan Penyelesaian Ganti Kerugian Negara Terhadap Pegawai Negeri Bukan Bendahara Atau Pejabat Lain.', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (632, '425791', 'Pengembalian Pendapatan Penyelesaian Ganti Kerugian Negara Terhadap Pegawai Negeri Bukan Bendahara Atau Pejabat Lain.', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (633, '425792', 'Pengembalian Pendapatan Penyelesaian Ganti Kerugian Negara Terhadap Bendahara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (634, '425792', 'Pendapatan Penyelesaian Ganti Kerugian Negara Terhadap Bendahara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (635, '425793', 'Pengembalian Pendapatan Penyelesaian Ganti Kerugian Negara Terhadap Pihak Lain/Pihak Ketiga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (636, '425793', 'Pendapatan Penyelesaian Ganti Kerugian Negara Terhadap Pihak Lain/Pihak Ketiga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (637, '425811', 'Pengembalian Pendapatan Denda Penyelesaian Pekerjaan Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (638, '425811', 'Pendapatan Denda Penyelesaian Pekerjaan Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (639, '425812', 'Pengembalian Pendapatan Denda Pelanggaran di Bidang Persaingan Usaha', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (640, '425812', 'Pendapatan Denda Pelanggaran di Bidang Persaingan Usaha', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (641, '425813', 'Pendapatan Denda Pelanggaran di Bidang Perdagangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (642, '425813', 'Pengembalian Pendapatan Denda Pelanggaran di Bidang Perdagangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (643, '425818', 'Pendapatan Denda, Bunga, dan Penalti terkait Kegiatan Usaha Hulu Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (644, '425818', 'Pengembalian Pendapatan Denda, Bunga, dan Penalti terkait Kegiatan Usaha Hulu Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (645, '425819', 'Pendapatan Denda terkait Pengusahaan Panas Bumi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (646, '425819', 'Pengembalian Pendapatan Denda terkait Pengusahaan Panas Bumi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (647, '425825', 'Pengembalian Pendapatan Denda Administrasi Akuntan Publik dan Kantor Akuntan Publik', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (648, '425825', 'Pendapatan Denda Administrasi Akuntan Publik dan Kantor Akuntan Publik', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (649, '425828', 'Pendapatan Denda atas Keterlambatan Kompensasi Sewa Beli Rumah Negara Golongan III', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (650, '425828', 'Pengembalian Pendapatan Denda atas Keterlambatan Kompensasi Sewa Beli Rumah Negara Golongan III', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (651, '425829', 'Pendapatan Denda/Kompensasi di Bidang Lingkungan Hidup dan Kehutanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (652, '425829', 'Pengembalian Pendapatan Denda/Kompensasi di Bidang Lingkungan Hidup dan Kehutanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (653, '425839', 'Pengembalian Pendapatan Denda Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (654, '425839', 'Pendapatan Denda Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (655, '425911', 'Pengembalian Penerimaan Kembali Belanja Pegawai Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (656, '425911', 'Penerimaan Kembali Belanja Pegawai Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (657, '425912', 'Penerimaan Kembali Belanja Barang Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (658, '425912', 'Pengembalian Penerimaan Kembali Belanja Barang Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (659, '425913', 'Penerimaan Kembali Belanja Modal Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (660, '425913', 'Pengembalian Penerimaan Kembali Belanja Modal Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (661, '425915', 'Pengembalian Penerimaan Kembali Belanja Subsidi Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (662, '425915', 'Penerimaan Kembali Belanja Subsidi Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (663, '425917', 'Pengembalian Penerimaan Kembali Belanja Bantuan Sosial Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (664, '425917', 'Penerimaan Kembali Belanja Bantuan Sosial Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (665, '425918', 'Pengembalian Penerimaan Kembali Belanja Lain-lain Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (666, '425918', 'Penerimaan Kembali Belanja Lain-lain Tahun Anggaran Yang Lalu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (667, '425921', 'Penerimaan Kembali Belanja Kontribusi Sosial TAYL', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (668, '425921', 'Pengembalian Penerimaan Kembali Belanja Kontribusi Sosial TAYL', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (669, '425931', 'Pendapatan Setoran dari Sisa Utang Non TP/TGR Pensiunan PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (670, '425931', 'Pengembalian Pendapatan Setoran dari Sisa Utang Non TP/TGR Pensiunan PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (671, '425932', 'Pengembalian Pendapatan Setoran dari Sisa Utang Non TP/TGR Pensiunan Prajurit TNI/PNS Kemhan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (672, '425932', 'Pendapatan Setoran dari Sisa Utang Non TP/TGR Pensiunan Prajurit TNI/PNS Kemhan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (673, '425933', 'Pendapatan Setoran dari Sisa Utang Non TP/TGR Pensiunan Anggota Polri/PNS Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (674, '425933', 'Pengembalian Pendapatan Setoran dari Sisa Utang Non TP/TGR Pensiunan Anggota Polri/PNS Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (675, '425934', 'Pendapatan Setoran dari Sisa Utang Non TP/TGR Pensiunan Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (676, '425934', 'Pengembalian Pendapatan Setoran dari Sisa Utang Non TP/TGR Pensiunan Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (677, '425981', 'Pengembalian Penerimaan Lainnya dari Piutang Pemberian Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (678, '425981', 'Penerimaan Lainnya dari Piutang Pemberian Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (679, '425983', 'Pendapatan Dari Sisa Dana Kampanye', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (680, '425983', 'Pengembalian Pendapatan Dari Sisa Dana Kampanye', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (681, '425984', 'Pendapatan dari Surplus Otoritas Jasa Keuangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (682, '425984', 'Pengembalian Pendapatan dari Surplus Otoritas Jasa Keuangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (683, '425991', 'Penerimaan Kembali Persekot/Uang Muka Gaji', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (684, '425991', 'Pengembalian Penerimaan Kembali Persekot/Uang Muka Gaji', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (685, '425995', 'Pendapatan Penyetoran Kelebihan Hasil Bersih Lelang yang Tidak Diambil oleh yang Berhak', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (686, '425995', 'Pengembalian Pendapatan Penyetoran Kelebihan Hasil Bersih Lelang yang Tidak Diambil oleh yang Berhak', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (687, '425996', 'Pendapatan dalam rangka Refund Dana PHLN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (688, '425996', 'Pengembalian Pendapatan dalam rangka Refund Dana PHLN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (689, '425997', 'Pengembalian Pendapatan dari Hibah yang Belum Disahkan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (690, '425997', 'Pendapatan dari Hibah yang Belum Disahkan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (691, '425998', 'Pendapatan dari Retur SP2D', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (692, '425998', 'Pengembalian Pendapatan dari Retur SP2D', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (693, '425999', 'Pendapatan Anggaran Lain-lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (694, '425999', 'Pengembalian Pendapatan Anggaran Lain-lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (695, '491315', 'Pendapatan Penyesuaian Konsesi Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (696, '491315', 'Pengembalian Pendapatan Penyesuaian Konsesi Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (697, '491511', 'Pendapatan Penyesuaian Nilai Persediaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (698, '491511', 'Pengembalian Pendapatan Penyesuaian Nilai Persediaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (699, '511111', 'Beban Gaji Pokok PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (700, '511111', 'Pengembalian Beban Gaji Pokok PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (701, '511119', 'Beban Pembulatan Gaji PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (702, '511119', 'Pengembalian Beban Pembulatan Gaji PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (703, '511121', 'Beban Tunj. Suami/Istri PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (704, '511121', 'Pengembalian Beban Tunj. Suami/Istri PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (705, '511122', 'Pengembalian Beban Tunj. Anak PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (706, '511122', 'Beban Tunj. Anak PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (707, '511123', 'Pengembalian Beban Tunj. Struktural PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (708, '511123', 'Beban Tunj. Struktural PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (709, '511124', 'Beban Tunj. Fungsional PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (710, '511124', 'Pengembalian Beban Tunj. Fungsional PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (711, '511125', 'Beban Tunj. PPh PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (712, '511125', 'Pengembalian Beban Tunj. PPh PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (713, '511126', 'Beban Tunj. Beras PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (714, '511126', 'Pengembalian Beban Tunj. Beras PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (715, '511127', 'Beban Tunj. Kemahalan PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (716, '511127', 'Pengembalian Beban Tunj. Kemahalan PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (717, '511128', 'Pengembalian Beban Tunj. Lauk pauk PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (718, '511128', 'Beban Tunj. Lauk pauk PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (719, '511129', 'Beban Uang Makan PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (720, '511129', 'Pengembalian Beban Uang Makan PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (721, '511131', 'Pengembalian Beban Tunj. Perbaikan Penghasilan PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (722, '511131', 'Beban Tunj. Perbaikan Penghasilan PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (723, '511132', 'Pengembalian Beban Tunj. Cacat PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (724, '511132', 'Beban Tunj. Cacat PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (725, '511133', 'Pengembalian Beban Tunj. Khusus Peralihan PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (726, '511133', 'Beban Tunj. Khusus Peralihan PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (727, '511134', 'Pengembalian Beban Tunj. Kompensasi Kerja PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (728, '511134', 'Beban Tunj. Kompensasi Kerja PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (729, '511135', 'Beban Tunj. Daerah Terpencil/Sangat Terpencil PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (730, '511135', 'Pengembalian Beban Tunj. Daerah Terpencil/Sangat Terpencil PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (731, '511136', 'Pengembalian Beban Tunj. Guru/Dosen/PNS yang Dipekerjakan pada Sekolah/ PT Swasta/ Badan/Komisi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (732, '511136', 'Beban Tunj. Guru/Dosen/PNS yang Dipekerjakan pada Sekolah/ PT Swasta/ Badan/Komisi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (733, '511137', 'Beban Tunj. Tugas Belajar Tenaga Pengajar Biasa pada PT untuk Mengikuti Pendidikan Pasca Sarjana PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (734, '511137', 'Pengembalian Beban Tunj. Tugas Belajar Tenaga Pengajar Biasa pada PT untuk Mengikuti Pendidikan Pasca Sarjana PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (735, '511138', 'Beban Tunjangan Khusus Papua PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (736, '511138', 'Pengembalian Beban Tunjangan Khusus Papua PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (737, '511139', 'Beban Tunjangan SAR PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (738, '511139', 'Pengembalian Beban Tunjangan SAR PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (739, '511141', 'Pengembalian Beban Tunj. Sewa Rumah PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (740, '511141', 'Beban Tunj. Sewa Rumah PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (741, '511142', 'Beban Tunj. Restitusi Pengobatan PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (742, '511142', 'Pengembalian Beban Tunj. Restitusi Pengobatan PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (743, '511143', 'Beban Tunj. Social Security PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (744, '511143', 'Pengembalian Beban Tunj. Social Security PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (745, '511144', 'Beban Tunj. Asuransi Kecelakaan PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (746, '511144', 'Pengembalian Beban Tunj. Asuransi Kecelakaan PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (747, '511145', 'Pengembalian Beban Tunj. Penghidupan Luar Negeri untuk Home Staff  PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (748, '511145', 'Beban Tunj. Penghidupan Luar Negeri untuk Home Staff  PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (749, '511146', 'Pengembalian Beban Tunj. Penghidupan Luar Negeri untuk Lokal Staff  PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (750, '511146', 'Beban Tunj. Penghidupan Luar Negeri untuk Lokal Staff  PNS (Staff di LN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (751, '511147', 'Beban Tunj. Lain-lain Termasuk Uang Duka PNS Dalam dan Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (752, '511147', 'Pengembalian Beban Tunj. Lain-lain Termasuk Uang Duka PNS Dalam dan Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (753, '511149', 'Pengembalian Beban Lokal Staff Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (754, '511149', 'Beban Lokal Staff Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (755, '511151', 'Pengembalian Beban Tunjangan Umum PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (756, '511151', 'Beban Tunjangan Umum PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (757, '511152', 'Beban Tunjangan Profesi Guru', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (758, '511152', 'Pengembalian Beban Tunjangan Profesi Guru', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (759, '511153', 'Beban Tunjangan Profesi Dosen', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (760, '511153', 'Pengembalian Beban Tunjangan Profesi Dosen', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (761, '511154', 'Beban Tunjangan Kehormatan Profesor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (762, '511154', 'Pengembalian Beban Tunjangan Kehormatan Profesor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (763, '511155', 'Pengembalian Beban Tunjangan Tambahan Penghasilan Guru PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (764, '511155', 'Beban Tunjangan Tambahan Penghasilan Guru PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (765, '511156', 'Pengembalian Beban Tunjangan Khusus Guru/Dosen', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (766, '511156', 'Beban Tunjangan Khusus Guru/Dosen', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (767, '511157', 'Beban Tunjangan Kemahalan Hakim', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (768, '511157', 'Pengembalian Beban Tunjangan Kemahalan Hakim', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (769, '511158', 'Pengembalian Beban Tunjangan Hakim Ad Hoc', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (770, '511158', 'Beban Tunjangan Hakim Ad Hoc', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (771, '511161', 'Pengembalian Beban Gaji Pokok PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (772, '511161', 'Beban Gaji Pokok PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (773, '511169', 'Pengembalian Beban Pembulatan Gaji PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (774, '511169', 'Beban Pembulatan Gaji PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (775, '511171', 'Beban Tunj. Suami/Istri PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (776, '511171', 'Pengembalian Beban Tunj. Suami/Istri PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (777, '511172', 'Pengembalian Beban Tunj. Anak PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (778, '511172', 'Beban Tunj. Anak PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (779, '511173', 'Beban Tunj. Struktural PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (780, '511173', 'Pengembalian Beban Tunj. Struktural PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (781, '511174', 'Pengembalian Beban Tunj. Fungsional PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (782, '511174', 'Beban Tunj. Fungsional PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (783, '511175', 'Beban Tunj. PPh PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (784, '511175', 'Pengembalian Beban Tunj. PPh PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (785, '511176', 'Pengembalian Beban Tunj. Beras PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (786, '511176', 'Beban Tunj. Beras PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (787, '511177', 'Beban Tunj. Kemahalan PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (788, '511177', 'Pengembalian Beban Tunj. Kemahalan PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (789, '511178', 'Pengembalian Beban Tunj. Lauk pauk PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (790, '511178', 'Beban Tunj. Lauk pauk PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (791, '511179', 'Beban Uang Makan PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (792, '511179', 'Pengembalian Beban Uang Makan PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (793, '511181', 'Pengembalian Beban Tunj. Perbaikan Penghasilan PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (794, '511181', 'Beban Tunj. Perbaikan Penghasilan PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (795, '511182', 'Beban Tunj. Cacat PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (796, '511182', 'Pengembalian Beban Tunj. Cacat PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (797, '511183', 'Pengembalian Beban Tunj. Khusus Peralihan PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (798, '511183', 'Beban Tunj. Khusus Peralihan PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (799, '511184', 'Pengembalian Beban Tunj. Kompensasi Kerja PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (800, '511184', 'Beban Tunj. Kompensasi Kerja PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (801, '511185', 'Beban Tunj. Daerah Terpencil/Sangat Terpencil PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (802, '511185', 'Pengembalian Beban Tunj. Daerah Terpencil/Sangat Terpencil PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (803, '511187', 'Beban Tunj. Guru/Dosen/PNS yang dipekerjakan pada sekolah/PT Swasta PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (804, '511187', 'Pengembalian Beban Tunj. Guru/Dosen/PNS yang dipekerjakan pada sekolah/PT Swasta PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (805, '511188', 'Beban Tunj. Tugas Belajar Tenaga Pengajar Biasa pada PT untuk mengikuti pendidikan Pasca Sarjana PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (806, '511188', 'Pengembalian Beban Tunj. Tugas Belajar Tenaga Pengajar Biasa pada PT untuk mengikuti pendidikan Pasca Sarjana PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (807, '511189', 'Pengembalian Beban Tunjangan Khusus Papua PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (808, '511189', 'Beban Tunjangan Khusus Papua PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (809, '511191', 'Beban Tunjangan Medis PNS TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (810, '511191', 'Pengembalian Beban Tunjangan Medis PNS TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (811, '511192', 'Pengembalian Beban Tunj. Lain-lain Termasuk Uang Duka PNS TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (812, '511192', 'Beban Tunj. Lain-lain Termasuk Uang Duka PNS TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (813, '511193', 'Pengembalian Beban Tunjangan Umum PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (814, '511193', 'Beban Tunjangan Umum PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (815, '511194', 'Beban Tunj. Kompensasi Kerja Bidang Persandian PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (816, '511194', 'Pengembalian Beban Tunj. Kompensasi Kerja Bidang Persandian PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (817, '511195', 'Pengembalian Beban Tunjangan Operasi Pengamanan pada Pulau Terluar dan Wilayah Perbatasan PNS TNI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (818, '511195', 'Beban Tunjangan Operasi Pengamanan pada Pulau Terluar dan Wilayah Perbatasan PNS TNI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (819, '511196', 'Pengembalian Beban Tunjangan Khusus Wilayah Pulau-Pulau Kecil Terluar dan/atau Wilayah Perbatasan bagi PNS Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (820, '511196', 'Beban Tunjangan Khusus Wilayah Pulau-Pulau Kecil Terluar dan/atau Wilayah Perbatasan bagi PNS Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (821, '511197', 'Pengembalian Beban Tunjangan Profesi Dosen/Kehormatan Guru Besar PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (822, '511197', 'Beban Tunjangan Profesi Dosen/Kehormatan Guru Besar PNS TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (823, '511211', 'Beban Gaji Pokok TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (824, '511211', 'Pengembalian Beban Gaji Pokok TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (825, '511219', 'Pengembalian Beban Pembulatan Gaji TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (826, '511219', 'Beban Pembulatan Gaji TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (827, '511221', 'Pengembalian Beban Tunj. Suami/Istri TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (828, '511221', 'Beban Tunj. Suami/Istri TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (829, '511222', 'Beban Tunj. Anak TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (830, '511222', 'Pengembalian Beban Tunj. Anak TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (831, '511223', 'Beban Tunj. Struktural TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (832, '511223', 'Pengembalian Beban Tunj. Struktural TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (833, '511224', 'Beban Tunj. Fungsional TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (834, '511224', 'Pengembalian Beban Tunj. Fungsional TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (835, '511225', 'Pengembalian Beban Tunj. PPh TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (836, '511225', 'Beban Tunj. PPh TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (837, '511226', 'Beban Tunj. Beras TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (838, '511226', 'Pengembalian Beban Tunj. Beras TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (839, '511227', 'Beban Tunj. Kemahalan TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (840, '511227', 'Pengembalian Beban Tunj. Kemahalan TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (841, '511228', 'Pengembalian Beban Tunj. Lauk Pauk TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (842, '511228', 'Beban Tunj. Lauk Pauk TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (843, '511229', 'Pengembalian Beban Uang Makan TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (844, '511229', 'Beban Uang Makan TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (845, '511231', 'Beban Tunj. Anggota Cadangan TNI DDA TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (846, '511231', 'Pengembalian Beban Tunj. Anggota Cadangan TNI DDA TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (847, '511232', 'Pengembalian Beban Tunj. Kowan/Polwan TNI TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (848, '511232', 'Beban Tunj. Kowan/Polwan TNI TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (849, '511233', 'Beban Tunj. Babinkamtibmas TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (850, '511233', 'Pengembalian Beban Tunj. Babinkamtibmas TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (851, '511234', 'Beban Tunj. Khusus Papua untuk TNI/ POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (852, '511234', 'Pengembalian Beban Tunj. Khusus Papua untuk TNI/ POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (853, '511235', 'Beban Tunj. Kompensasi Kerja Bidang Persandian TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (854, '511235', 'Pengembalian Beban Tunj. Kompensasi Kerja Bidang Persandian TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (855, '511236', 'Beban Tunj. Brevet TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (856, '511236', 'Pengembalian Beban Tunj. Brevet TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (857, '511237', 'Pengembalian Beban Tunj. Keahlian/ Keterampilan TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (858, '511237', 'Beban Tunj. Keahlian/ Keterampilan TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (859, '511238', 'Pengembalian Beban Tunj. Keterampilan Khusus TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (860, '511238', 'Beban Tunj. Keterampilan Khusus TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (861, '511239', 'Beban Tunjangan Operasi Pengamanan pada Pulau Terluar dan Wilayah Perbatasan TNI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (862, '511239', 'Pengembalian Beban Tunjangan Operasi Pengamanan pada Pulau Terluar dan Wilayah Perbatasan TNI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (863, '511241', 'Pengembalian Beban Tunjangan Medis TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (864, '511241', 'Beban Tunjangan Medis TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (865, '511242', 'Beban Tunj. Lain-lain Termasuk Uang Duka TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (866, '511242', 'Pengembalian Beban Tunj. Lain-lain Termasuk Uang Duka TNI/POLRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (867, '511243', 'Beban Tunjangan Daerah Terpencil/ Sangat Terpencil TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (868, '511243', 'Pengembalian Beban Tunjangan Daerah Terpencil/ Sangat Terpencil TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (869, '511244', 'Pengembalian Beban Tunjangan Umum TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (870, '511244', 'Beban Tunjangan Umum TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (871, '511245', 'Pengembalian Beban Santunan Cacat TNI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (872, '511245', 'Beban Santunan Cacat TNI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (873, '511246', 'Beban Tunjangan Khusus Wilayah Pulau Kecil Terluar/ Perbatasan Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (874, '511246', 'Pengembalian Beban Tunjangan Khusus Wilayah Pulau Kecil Terluar/ Perbatasan Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (875, '511247', 'Pengembalian Beban Tunjangan Profesi Dosen/Kehormatan Guru Besar TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (876, '511247', 'Beban Tunjangan Profesi Dosen/Kehormatan Guru Besar TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (877, '511311', 'Pengembalian Beban Gaji Pokok Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (878, '511311', 'Beban Gaji Pokok Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (879, '511319', 'Pengembalian Beban Pembulatan Gaji Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (880, '511319', 'Beban Pembulatan Gaji Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (881, '511321', 'Beban Tunj. Suami/Istri Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (882, '511321', 'Pengembalian Beban Tunj. Suami/Istri Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (883, '511322', 'Pengembalian Beban Tunj. Anak Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (884, '511322', 'Beban Tunj. Anak Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (885, '511323', 'Beban Tunj. Struktural Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (886, '511323', 'Pengembalian Beban Tunj. Struktural Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (887, '511324', 'Beban Tunj. PPh Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (888, '511324', 'Pengembalian Beban Tunj. PPh Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (889, '511325', 'Pengembalian Beban Tunj. Beras Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (890, '511325', 'Beban Tunj. Beras Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (891, '511331', 'Beban Tunj. Komunikasi Intensif Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (892, '511331', 'Pengembalian Beban Tunj. Komunikasi Intensif Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (893, '511332', 'Pengembalian Beban Uang Kehormatan Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (894, '511332', 'Beban Uang Kehormatan Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (895, '511333', 'Beban Uang Paket Harian Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (896, '511333', 'Pengembalian Beban Uang Paket Harian Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (897, '511334', 'Pengembalian Beban Bantuan Penunjang Kegiatan Dewan Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (898, '511334', 'Beban Bantuan Penunjang Kegiatan Dewan Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (899, '511335', 'Pengembalian Beban Pelayanan Sidang dan Penyelesaian Tugas Mendesak Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (900, '511335', 'Beban Pelayanan Sidang dan Penyelesaian Tugas Mendesak Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (901, '511336', 'Pengembalian Beban Tunjangan Pembinaan Kegiatan dan Khusus BPK Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (902, '511336', 'Beban Tunjangan Pembinaan Kegiatan dan Khusus BPK Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (903, '511337', 'Beban Tunjangan Lain-lain Termasuk Uang Duka Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (904, '511337', 'Pengembalian Beban Tunjangan Lain-lain Termasuk Uang Duka Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (905, '511338', 'Beban Tunjangan Fasilitas KPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (906, '511338', 'Pengembalian Beban Tunjangan Fasilitas KPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (907, '511339', 'Pengembalian Beban Tunjangan Penghasilan Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (908, '511339', 'Beban Tunjangan Penghasilan Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (909, '511411', 'Pengembalian Beban Gaji Dokter dan Bidan PTT', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (910, '511411', 'Beban Gaji Dokter dan Bidan PTT', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (911, '511412', 'Beban Tunjangan Pajak PPh Dokter dan Bidan PTT', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (912, '511412', 'Pengembalian Beban Tunjangan Pajak PPh Dokter dan Bidan PTT', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (913, '511413', 'Pengembalian Beban Tunjangan Daerah Terpencil Dokter dan Bidan PTT', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (914, '511413', 'Beban Tunjangan Daerah Terpencil Dokter dan Bidan PTT', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (915, '511414', 'Beban Tunjangan Dokter dan Bidan PTT', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (916, '511414', 'Pengembalian Beban Tunjangan Dokter dan Bidan PTT', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (917, '511511', 'Pengembalian Beban Gaji Pokok Pegawai Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (918, '511511', 'Beban Gaji Pokok Pegawai Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (919, '511512', 'Beban Tunjangan Pegawai Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (920, '511512', 'Pengembalian Beban Tunjangan Pegawai Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (921, '511513', 'Beban Pembulatan Gaji Pegawai Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (922, '511513', 'Pengembalian Beban Pembulatan Gaji Pegawai Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (923, '511514', 'Beban Uang Penghargaan Bagi Wakil Menteri Yang Berhenti Atau Telah Berakhir Masa Jabatannya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (924, '511514', 'Pengembalian Beban Uang Penghargaan Bagi Wakil Menteri Yang Berhenti Atau Telah Berakhir Masa Jabatannya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (925, '511519', 'Pengembalian Beban Tunjangan Lainnya Pegawai Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (926, '511519', 'Beban Tunjangan Lainnya Pegawai Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (927, '511521', 'Pengembalian Beban Tunjangan Tenaga Pendidik Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (928, '511521', 'Beban Tunjangan Tenaga Pendidik Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (929, '511522', 'Pengembalian Beban Tunjangan Tenaga Penyuluh Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (930, '511522', 'Beban Tunjangan Tenaga Penyuluh Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (931, '511529', 'Beban Tunjangan Tenaga Pendidik dan Tenaga Penyuluh Lainnya Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (932, '511529', 'Pengembalian Beban Tunjangan Tenaga Pendidik dan Tenaga Penyuluh Lainnya Non PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (933, '511611', 'Beban Gaji Pokok PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (934, '511611', 'Pengembalian Beban Gaji Pokok PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (935, '511619', 'Pengembalian Beban Pembulatan Gaji PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (936, '511619', 'Beban Pembulatan Gaji PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (937, '511621', 'Beban Tunjangan Suami/Istri PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (938, '511621', 'Pengembalian Beban Tunjangan Suami/Istri PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (939, '511622', 'Beban Tunjangan Anak PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (940, '511622', 'Pengembalian Beban Tunjangan Anak PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (941, '511623', 'Beban Tunjangan Struktural PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (942, '511623', 'Pengembalian Beban Tunjangan Struktural PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (943, '511624', 'Pengembalian Beban Tunjangan Fungsional PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (944, '511624', 'Beban Tunjangan Fungsional PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (945, '511625', 'Pengembalian Beban Tunjangan Beras PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (946, '511625', 'Beban Tunjangan Beras PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (947, '511626', 'Pengembalian Beban Tunjangan Kemahalan PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (948, '511626', 'Beban Tunjangan Kemahalan PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (949, '511627', 'Pengembalian Beban Tunjangan Lauk Pauk PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (950, '511627', 'Beban Tunjangan Lauk Pauk PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (951, '511628', 'Pengembalian Beban Uang Makan PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (952, '511628', 'Beban Uang Makan PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (953, '511629', 'Beban Tunjangan Kompensasi Kerja PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (954, '511629', 'Pengembalian Beban Tunjangan Kompensasi Kerja PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (955, '511631', 'BebanTunjanganDaerahTerpencil/SangatTerpencil PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (956, '511631', 'Pengembalian BebanTunjanganDaerahTerpencil/SangatTerpencil PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (957, '511632', 'Beban Tunjangan Khusus Papua PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (958, '511632', 'Pengembalian Beban Tunjangan Khusus Papua PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (959, '511633', 'Pengembalian Beban Tunjangan Umum PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (960, '511633', 'Beban Tunjangan Umum PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (961, '512111', 'Pengembalian Beban Uang Honor Tetap', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (962, '512111', 'Beban Uang Honor Tetap', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (963, '512211', 'Beban Uang Lembur', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (964, '512211', 'Pengembalian Beban Uang Lembur', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (965, '512212', 'Pengembalian Beban Uang Lembur PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (966, '512212', 'Beban Uang Lembur PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (967, '512411', 'Pengembalian Beban Pegawai (Tunjangan Khusus/ Kegiatan)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (968, '512411', 'Beban Pegawai (Tunjangan Khusus/ Kegiatan)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (969, '512412', 'Pengembalian Beban Pegawai Transito', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (970, '512412', 'Beban Pegawai Transito', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (971, '512413', 'Pengembalian Beban Pembayaran Uang Kompensasi Bagi PNS yang Diberhentikan sebagai Dampak Reformasi Birokrasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (972, '512413', 'Beban Pembayaran Uang Kompensasi Bagi PNS yang Diberhentikan sebagai Dampak Reformasi Birokrasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (973, '512414', 'Pengembalian Beban PegawaiTunjanganKhusus/Kegiatan/Kinerja PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (974, '512414', 'Beban PegawaiTunjanganKhusus/Kegiatan/Kinerja PPPK', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (975, '513111', 'Beban Pensiun dan Uang Tunggu PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (976, '513111', 'Pengembalian Beban Pensiun dan Uang Tunggu PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (977, '513112', 'Beban Pensiun dan Uang Tunggu PNS Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (978, '513112', 'Pengembalian Beban Pensiun dan Uang Tunggu PNS Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (979, '513113', 'Beban Pensiun dan Uang Tunggu PNS TNI/Kemhan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (980, '513113', 'Pengembalian Beban Pensiun dan Uang Tunggu PNS TNI/Kemhan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (981, '513114', 'Beban Pensiun dan Uang Tunggu PNS Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (982, '513114', 'Pengembalian Beban Pensiun dan Uang Tunggu PNS Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (983, '513115', 'Beban Pensiun dan Uang Tunggu PNS Eks Pegadaian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (984, '513115', 'Pengembalian Beban Pensiun dan Uang Tunggu PNS Eks Pegadaian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (985, '513121', 'Beban Pensiun dan Uang Tunggu TNI/Polri (Lama)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (986, '513121', 'Pengembalian Beban Pensiun dan Uang Tunggu TNI/Polri (Lama)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (987, '513122', 'Beban Pensiun dan Uang Tunggu TNI/Kemhan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (988, '513122', 'Pengembalian Beban Pensiun dan Uang Tunggu TNI/Kemhan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (989, '513123', 'Beban Pensiun dan Uang Tunggu Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (990, '513123', 'Pengembalian Beban Pensiun dan Uang Tunggu Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (991, '513131', 'Beban Pensiun dan Uang Tunggu Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (992, '513131', 'Pengembalian Beban Pensiun dan Uang Tunggu Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (993, '513132', 'Beban Pensiun dan Uang Tunggu Hakim', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (994, '513132', 'Pengembalian Beban Pensiun dan Uang Tunggu Hakim', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (995, '513141', 'Pengembalian Kontribusi APBN sebagai Pendanaan Bersama Dalam Pembayaran Pensiun Eks PNS Kemhub pada PT KAI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (996, '513141', 'Kontribusi APBN sebagai Pendanaan Bersama Dalam Pembayaran Pensiun Eks PNS Kemhub pada PT KAI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (997, '513151', 'Beban Tunjangan Veteran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (998, '513151', 'Pengembalian Beban Tunjangan Veteran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (999, '513152', 'Beban Dana Kehormatan Veteran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1000, '513152', 'Pengembalian Beban Dana Kehormatan Veteran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1001, '513153', 'Beban Tunjangan PKRI dan KNIP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1002, '513153', 'Pengembalian Beban Tunjangan PKRI dan KNIP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1003, '513161', 'Pengembalian Beban Tunjangan Hari Tua (Unfunded Liability)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1004, '513161', 'Beban Tunjangan Hari Tua (Unfunded Liability)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1005, '513211', 'Pengembalian Beban Askes PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1006, '513211', 'Beban Askes PNS', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1007, '513212', 'Beban Askes Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1008, '513212', 'Pengembalian Beban Askes Pejabat Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1009, '513221', 'Beban Askes Penerima Pensiun', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1010, '513221', 'Pengembalian Beban Askes Penerima Pensiun', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1011, '513231', 'Beban Askes TNI/Kemhan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1012, '513231', 'Pengembalian Beban Askes TNI/Kemhan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1013, '513241', 'Beban Askes Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1014, '513241', 'Pengembalian Beban Askes Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1015, '513251', 'Pengembalian Beban Askes Veteran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1016, '513251', 'Beban Askes Veteran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1017, '513261', 'Beban Katastropik', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1018, '513261', 'Pengembalian Beban Katastropik', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1019, '513281', 'Pengembalian Beban Program Jaminan Kematian Pegawai', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1020, '513281', 'Beban Program Jaminan Kematian Pegawai', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1021, '513311', 'Pengembalian Beban Tunjangan Kesehatan Veteran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1022, '513311', 'Beban Tunjangan Kesehatan Veteran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1023, '513411', 'Pengembalian Beban Cadangan Perubahan Sharing', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1024, '513411', 'Beban Cadangan Perubahan Sharing', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1025, '513511', 'Pengembalian Beban Program Tabungan Perumahan Rakyat dari Pemberi Kerja Pemerintah Pusat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1026, '513511', 'Beban Program Tabungan Perumahan Rakyat dari Pemberi Kerja Pemerintah Pusat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1027, '521111', 'Pengembalian Beban Keperluan Perkantoran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1028, '521111', 'Beban Keperluan Perkantoran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1029, '521112', 'Beban Pengadaan Bahan Makanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1030, '521112', 'Pengembalian Beban Pengadaan Bahan Makanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1031, '521113', 'Pengembalian Beban Penambah Daya Tahan Tubuh', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1032, '521113', 'Beban Penambah Daya Tahan Tubuh', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1033, '521114', 'Pengembalian Beban Pengiriman Surat Dinas Pos Pusat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1034, '521114', 'Beban Pengiriman Surat Dinas Pos Pusat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1035, '521115', 'Pengembalian Beban Honor Operasional Satuan Kerja', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1036, '521115', 'Beban Honor Operasional Satuan Kerja', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1037, '521116', 'Beban Keperluan Perkantoran Atase Pertahanan Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1038, '521116', 'Pengembalian Beban Keperluan Perkantoran Atase Pertahanan Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1039, '521119', 'Pengembalian Beban Barang Operasional Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1040, '521119', 'Beban Barang Operasional Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1041, '521121', 'Pengembalian Beban Barang Operasional kepada BLU  dalam Satu Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1042, '521121', 'Beban Barang Operasional kepada BLU  dalam Satu Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1043, '521122', 'Beban Barang Operasional Kepada BLU yang berada dalam Kementerian Negara/Lembaga lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1044, '521122', 'Pengembalian Beban Barang Operasional Kepada BLU yang berada dalam Kementerian Negara/Lembaga lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1045, '521131', 'Beban Barang Operasional -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1046, '521131', 'Pengembalian Beban Barang Operasional -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1047, '521211', 'Beban Bahan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1048, '521211', 'Pengembalian Beban Bahan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1049, '521212', 'Beban Barang Transito', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1050, '521212', 'Pengembalian Beban Barang Transito', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1051, '521213', 'Pengembalian Beban Honor Output Kegiatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1052, '521213', 'Beban Honor Output Kegiatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1053, '521214', 'Pengembalian Beban Rugi Selisih Kurs Uang Persediaan Satker Perwakilan RI/Atase Teknis', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1054, '521214', 'Beban Rugi Selisih Kurs Uang Persediaan Satker Perwakilan RI/Atase Teknis', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1055, '521216', 'Beban Pencairan Dana Bantuan Operasional Perguruan Tinggi Negeri Badan Hukum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1056, '521216', 'Pengembalian Beban Pencairan Dana Bantuan Operasional Perguruan Tinggi Negeri Badan Hukum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1057, '521217', 'Pengembalian Beban Denda Keterlambatan Pembayaran Tagihan Kepada Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1058, '521217', 'Beban Denda Keterlambatan Pembayaran Tagihan Kepada Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1059, '521218', 'Pengembalian Beban dalam Rangka Refund Dana PHLN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1060, '521218', 'Beban dalam Rangka Refund Dana PHLN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1061, '521219', 'Beban Barang Non Operasional Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1062, '521219', 'Pengembalian Beban Barang Non Operasional Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1063, '521221', 'Beban Barang Non Operasional kepada BLU  dalam Satu Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1064, '521221', 'Pengembalian Beban Barang Non Operasional kepada BLU  dalam Satu Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1065, '521222', 'Beban Barang Non Operasional Kepada BLU yang berada dalam Kementerian Negara/Lembaga lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1066, '521222', 'Pengembalian Beban Barang Non Operasional Kepada BLU yang berada dalam Kementerian Negara/Lembaga lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1067, '521231', 'Pengembalian Beban Barang Pemberian Penghargaan dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1068, '521231', 'Beban Barang Pemberian Penghargaan dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1069, '521232', 'Pengembalian Beban Barang Pemberian Beasiswa Non PNS dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1070, '521232', 'Beban Barang Pemberian Beasiswa Non PNS dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1071, '521233', 'Pengembalian Beban Barang Pemberian Bantuan Operasional dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1072, '521233', 'Beban Barang Pemberian Bantuan Operasional dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1073, '521234', 'Pengembalian Beban Barang Pemberian Penghargaan dalam bentuk barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1074, '521234', 'Beban Barang Pemberian Penghargaan dalam bentuk barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1075, '521241', 'Pengembalian Beban Barang Non Operasional -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1076, '521241', 'Beban Barang Non Operasional -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1077, '521511', 'Beban Barang Pengganti PPN Dalam Rangka Hibah MCC', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1078, '521511', 'Pengembalian Beban Barang Pengganti PPN Dalam Rangka Hibah MCC', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1079, '521512', 'Beban Barang Pengganti PPh Dalam Rangka Hibah MCC', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1080, '521512', 'Pengembalian Beban Barang Pengganti PPh Dalam Rangka Hibah MCC', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1081, '521513', 'Pengembalian Beban Barang Pengganti Pajak Lainnya Dalam Rangka Hibah MCC', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1082, '521513', 'Beban Barang Pengganti Pajak Lainnya Dalam Rangka Hibah MCC', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1083, '521711', 'Pengembalian Beban Kontribusi pada Organisasi Internasional dan Trust Fund', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1084, '521711', 'Beban Kontribusi pada Organisasi Internasional dan Trust Fund', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1085, '521721', 'Pengembalian Beban Kontribusi Dana Dukungan Kelayakan (Viability Gap Fund)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1086, '521721', 'Beban Kontribusi Dana Dukungan Kelayakan (Viability Gap Fund)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1087, '521722', 'Pengembalian Beban Kontribusi Fasilitas Penyiapan Proyek (Project Development Facility)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1088, '521722', 'Beban Kontribusi Fasilitas Penyiapan Proyek (Project Development Facility)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1089, '521723', 'Beban Ketersediaan Layanan (Availability Payment)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1090, '521723', 'Pengembalian Beban Ketersediaan Layanan (Availability Payment)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1091, '521724', 'Beban Kompensasi Finansial Penjaminan Infrastruktur', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1092, '521724', 'Pengembalian Beban Kompensasi Finansial Penjaminan Infrastruktur', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1093, '521725', 'Beban Regres Penjaminan Infrastruktur', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1094, '521725', 'Pengembalian Beban Regres Penjaminan Infrastruktur', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1095, '521732', 'Beban Selisih Harga Biodesel', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1096, '521732', 'Pengembalian Beban Selisih Harga Biodesel', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1097, '522111', 'Pengembalian Beban Langganan Listrik', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1098, '522111', 'Beban Langganan Listrik', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1099, '522112', 'Beban Langganan Telepon', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1100, '522112', 'Pengembalian Beban Langganan Telepon', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1101, '522113', 'Beban Langganan Air', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1102, '522113', 'Pengembalian Beban Langganan Air', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1103, '522119', 'Pengembalian Beban Langganan Daya dan Jasa Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1104, '522119', 'Beban Langganan Daya dan Jasa Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1105, '522121', 'Pengembalian Beban Jasa Pos dan Giro', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1106, '522121', 'Beban Jasa Pos dan Giro', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1107, '522131', 'Beban Jasa Konsultan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1108, '522131', 'Pengembalian Beban Jasa Konsultan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1109, '522141', 'Beban Sewa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1110, '522141', 'Pengembalian Beban Sewa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1111, '522151', 'Beban Jasa Profesi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1112, '522151', 'Pengembalian Beban Jasa Profesi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1113, '522152', 'Pengembalian Beban Imbalan Jasa Invensi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1114, '522152', 'Beban Imbalan Jasa Invensi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1115, '522161', 'Beban Jasa kepada BLU  dalam Satu Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1116, '522161', 'Pengembalian Beban Jasa kepada BLU  dalam Satu Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1117, '522162', 'Pengembalian Beban Jasa Kepada BLU yang berada dalam Kementerian Negara/Lembaga lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1118, '522162', 'Beban Jasa Kepada BLU yang berada dalam Kementerian Negara/Lembaga lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1119, '522171', 'Beban Fee Pelayanan Bank/Pos Persepsi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1120, '522171', 'Pengembalian Beban Fee Pelayanan Bank/Pos Persepsi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1121, '522172', 'Beban Jasa Pelayanan Perbendaharaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1122, '522172', 'Pengembalian Beban Jasa Pelayanan Perbendaharaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1123, '522191', 'Pengembalian Beban Jasa Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1124, '522191', 'Beban Jasa Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1125, '522192', 'Beban Jasa - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1126, '522192', 'Pengembalian Beban Jasa - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1127, '523111', 'Pengembalian Beban Pemeliharaan Gedung dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1128, '523111', 'Beban Pemeliharaan Gedung dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1129, '523113', 'Pengembalian Beban Asuransi Gedung dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1130, '523113', 'Beban Asuransi Gedung dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1131, '523114', 'Beban Pemeliharaan Gedung dan Bangunan - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1132, '523114', 'Pengembalian Beban Pemeliharaan Gedung dan Bangunan - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1133, '523119', 'Pengembalian Beban Pemeliharaan Gedung dan Bangunan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1134, '523119', 'Beban Pemeliharaan Gedung dan Bangunan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1135, '523121', 'Pengembalian Beban Pemeliharaan Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1136, '523121', 'Beban Pemeliharaan Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1137, '523122', 'Beban Bahan Bakar Minyak dan Pelumas (BMP) dan Pelumas Khusus Non Pertamina', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1138, '523122', 'Pengembalian Beban Bahan Bakar Minyak dan Pelumas (BMP) dan Pelumas Khusus Non Pertamina', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1139, '523124', 'Pengembalian Beban Asuransi Alat Angkutan Darat/Apung/Udara Bermotor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1140, '523124', 'Beban Asuransi Alat Angkutan Darat/Apung/Udara Bermotor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1141, '523129', 'Pengembalian Beban Pemeliharaan Peralatan dan Mesin Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1142, '523129', 'Beban Pemeliharaan Peralatan dan Mesin Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1143, '523131', 'Beban Pemeliharaan Jalan dan Jembatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1144, '523131', 'Pengembalian Beban Pemeliharaan Jalan dan Jembatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1145, '523132', 'Pengembalian Beban Pemeliharaan Irigasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1146, '523132', 'Beban Pemeliharaan Irigasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1147, '523133', 'Pengembalian Beban Pemeliharaan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1148, '523133', 'Beban Pemeliharaan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1149, '523137', 'Pengembalian Beban Asuransi Jembatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1150, '523137', 'Beban Asuransi Jembatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1151, '523199', 'Pengembalian Beban Pemeliharaan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1152, '523199', 'Beban Pemeliharaan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1153, '524111', 'Beban Perjalanan Biasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1154, '524111', 'Pengembalian Beban Perjalanan Biasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1155, '524112', 'Beban Perjalanan Tetap', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1156, '524112', 'Pengembalian Beban Perjalanan Tetap', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1157, '524113', 'Pengembalian Beban Perjalanan Dinas Dalam Kota', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1158, '524113', 'Beban Perjalanan Dinas Dalam Kota', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1159, '524114', 'Pengembalian Beban Perjalanan Dinas Paket Meeting Dalam Kota', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1160, '524114', 'Beban Perjalanan Dinas Paket Meeting Dalam Kota', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1161, '524115', 'Beban Perjalanan Dinas - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1162, '524115', 'Pengembalian Beban Perjalanan Dinas - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1163, '524119', 'Pengembalian Beban Perjalanan Dinas Paket Meeting Luar Kota', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1164, '524119', 'Beban Perjalanan Dinas Paket Meeting Luar Kota', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1165, '524211', 'Pengembalian Beban Perjalanan Biasa - Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1166, '524211', 'Beban Perjalanan Biasa - Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1167, '524212', 'Beban Perjalanan Tetap - Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1168, '524212', 'Pengembalian Beban Perjalanan Tetap - Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1169, '524219', 'Pengembalian Beban Perjalanan Lainnya - Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1170, '524219', 'Beban Perjalanan Lainnya - Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1171, '525111', 'Beban Gaji dan Tunjangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1172, '525111', 'Pengembalian Beban Gaji dan Tunjangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1173, '525112', 'Pengembalian Beban Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1174, '525112', 'Beban Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1175, '525113', 'Beban Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1176, '525113', 'Pengembalian Beban Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1177, '525114', 'Beban Pemeliharaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1178, '525114', 'Pengembalian Beban Pemeliharaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1179, '525115', 'Pengembalian Beban Perjalanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1180, '525115', 'Beban Perjalanan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1181, '525116', 'Pengembalian Beban atas Pengelolaan Endowment Fund', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1182, '525116', 'Beban atas Pengelolaan Endowment Fund', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1183, '525117', 'Pengembalian Beban Pengelolaan Dana Perkebunan Kelapa Sawit', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1184, '525117', 'Beban Pengelolaan Dana Perkebunan Kelapa Sawit', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1185, '525118', 'Beban Ketersediaan Layanan BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1186, '525118', 'Pengembalian Beban Ketersediaan Layanan BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1187, '525119', 'Beban Penyediaan Barang dan Jasa BLU Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1188, '525119', 'Pengembalian Beban Penyediaan Barang dan Jasa BLU Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1189, '525131', 'Pengembalian Beban Asuransi BMN Gedung dan Bangunan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1190, '525131', 'Beban Asuransi BMN Gedung dan Bangunan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1191, '525132', 'Pengembalian Beban Asuransi BMN Alat Angkutan Darat/Apung/Udara Bermotor - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1192, '525132', 'Beban Asuransi BMN Alat Angkutan Darat/Apung/Udara Bermotor - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1193, '525133', 'Pengembalian Beban Asuransi BMN Jembatan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1194, '525133', 'Beban Asuransi BMN Jembatan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1195, '525141', 'Beban Barang BLU kepada BLU Lain dalam Satu Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1196, '525141', 'Pengembalian Beban Barang BLU kepada BLU Lain dalam Satu Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1197, '525142', 'Beban Barang BLU Kepada BLU Lain yang berada dalam Kementerian Negara/Lembaga Lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1198, '525142', 'Pengembalian Beban Barang BLU Kepada BLU Lain yang berada dalam Kementerian Negara/Lembaga Lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1199, '525143', 'Beban Jasa BLU kepada BLU Lain dalam Satu Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1200, '525143', 'Pengembalian Beban Jasa BLU kepada BLU Lain dalam Satu Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1201, '525144', 'Beban Jasa BLU Kepada BLU Lain yang berada dalam Kementerian Negara/Lembaga Lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1202, '525144', 'Pengembalian Beban Jasa BLU Kepada BLU Lain yang berada dalam Kementerian Negara/Lembaga Lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1203, '525151', 'Pengembalian Beban Pengelolaan Dana Program Lingkungan Hidup', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1204, '525151', 'Beban Pengelolaan Dana Program Lingkungan Hidup', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1205, '525152', 'Beban Barang BLU - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1206, '525152', 'Pengembalian Beban Barang BLU - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1207, '525154', 'Beban Jasa BLU - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1208, '525154', 'Pengembalian Beban Jasa BLU - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1209, '525155', 'Pengembalian Beban Pemeliharaan BLU - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1210, '525155', 'Beban Pemeliharaan BLU - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1211, '525156', 'Pengembalian Beban Perjalanan BLU - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1212, '525156', 'Beban Perjalanan BLU - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1213, '525162', 'Belanja Peralatan dan Mesin - Ekstrakomptabel BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1214, '526111', 'Pengembalian Beban Tanah Untuk Diserahkan kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1215, '526111', 'Beban Tanah Untuk Diserahkan kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1216, '526112', 'Beban Peralatan Dan Mesin Untuk Diserahkan kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1217, '526112', 'Pengembalian Beban Peralatan Dan Mesin Untuk Diserahkan kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1218, '526113', 'Pengembalian Beban Gedung Dan Bangunan Untuk Diserahkan kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1219, '526113', 'Beban Gedung Dan Bangunan Untuk Diserahkan kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1220, '526114', 'Pengembalian Beban Jalan, Irigasi Dan Jaringan Untuk Diserahkan kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1221, '526114', 'Beban Jalan, Irigasi Dan Jaringan Untuk Diserahkan kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1222, '526115', 'Pengembalian Beban Barang Fisik Lainnya Untuk Diserahkan kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1223, '526115', 'Beban Barang Fisik Lainnya Untuk Diserahkan kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1224, '526121', 'Pengemballian Beban Tanah Untuk Diserahkan kepada Masyarakat/Pemda dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1225, '526121', 'Beban Tanah Untuk Diserahkan kepada Masyarakat/Pemda dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1226, '526122', 'Pengembalian Beban Peralatan dan Mesin Untuk Diserahkan kepada Masyarakat/Pemda dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1227, '526122', 'Beban Peralatan dan Mesin Untuk Diserahkan kepada Masyarakat/Pemda dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1228, '526123', 'Pengembalian Beban Gedung dan Bangunan Untuk Diserahkan kepada Masyarakat/Pemda dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1229, '526123', 'Beban Gedung dan Bangunan Untuk Diserahkan kepada Masyarakat/Pemda dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1230, '526124', 'Pengembalian Beban Jalan, Irigasi dan Jaringan Untuk Diserahkan kepada Masyarakat/Pemda dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1231, '526124', 'Beban Jalan, Irigasi dan Jaringan Untuk Diserahkan kepada Masyarakat/Pemda dalam bentuk uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1232, '526131', 'Pengembalian Beban Peralatan dan Mesin untuk Diserahkan kepada Masyarakat/Pemda dalam Bentuk Uang - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1233, '526131', 'Beban Peralatan dan Mesin untuk Diserahkan kepada Masyarakat/Pemda dalam Bentuk Uang - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1234, '526211', 'Beban Barang Penunjang Kegiatan Dekonsentrasi Untuk Diserahkan Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1235, '526211', 'Pengembalian Beban Barang Penunjang Kegiatan Dekonsentrasi Untuk Diserahkan Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1236, '526212', 'Pengembalian Beban Barang Penunjang Tugas Pembantuan Untuk Diserahkan Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1237, '526212', 'Beban Barang Penunjang Tugas Pembantuan Untuk Diserahkan Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1238, '526222', 'Pengembalian Beban Peralatan dan Mesin Tugas Pembantuan Untuk Diserahkan Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1239, '526222', 'Beban Peralatan dan Mesin Tugas Pembantuan Untuk Diserahkan Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1240, '526223', 'Pengembalian Beban Gedung dan Bangunan Tugas Pembantuan Untuk Diserahkan Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1241, '526223', 'Beban Gedung dan Bangunan Tugas Pembantuan Untuk Diserahkan Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1242, '526224', 'Beban Jalan, Irigasi dan Jaringan Tugas Pembantuan Untuk Diserahkan Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1243, '526224', 'Pengembalian Beban Jalan, Irigasi dan Jaringan Tugas Pembantuan Untuk Diserahkan Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1244, '526311', 'Pengembalian Beban Barang Lainnya Untuk Diserahkan Kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1245, '526311', 'Beban Barang Lainnya Untuk Diserahkan Kepada Masyarakat/Pemda', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1246, '526312', 'Pengembalian Beban Barang untuk Bantuan Lainnya yang Memiliki Karakteristik Bantuan Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1247, '526312', 'Beban Barang untuk Bantuan Lainnya yang Memiliki Karakteristik Bantuan Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1248, '526321', 'Pengembalian Beban Barang untuk Bantuan Lainnya untuk Diserahkan kepada Masyarakat/Pemda dalam Bentuk Uang - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1249, '526321', 'Beban Barang untuk Bantuan Lainnya untuk Diserahkan kepada Masyarakat/Pemda dalam Bentuk Uang - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1250, '526323', 'Pengembalian Beban Barang untuk Bantuan Lainnya  Untuk Diserahkan kepada Masyarakat/Pemda dalam bentuk jasa - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1251, '526323', 'Beban Barang untuk Bantuan Lainnya  Untuk Diserahkan kepada Masyarakat/Pemda dalam bentuk jasa - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1252, '527111', 'Beban Tanah untuk Diserahkan kepada Mantan Presiden dan/atau Mantan Wakil Presiden', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1253, '527111', 'Pengembalian Beban Tanah untuk Diserahkan kepada Mantan Presiden dan/atau Mantan Wakil Presiden', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1254, '527112', 'Pengembalian Beban Peralatan dan Mesin untuk Diserahkan kepada Mantan Presiden dan/atau Mantan Wakil Presiden', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1255, '527112', 'Beban Peralatan dan Mesin untuk Diserahkan kepada Mantan Presiden dan/atau Mantan Wakil Presiden', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1256, '527113', 'Pengembalian Beban Gedung dan Bangunan untuk Diserahkan kepada Mantan Presiden dan/atau Mantan Wakil Presiden', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1257, '527113', 'Beban Gedung dan Bangunan untuk Diserahkan kepada Mantan Presiden dan/atau Mantan Wakil Presiden', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1258, '541111', 'Pengembalian Beban Pembayaran Bunga Surat Perbendaharaan  Negara - Rupiah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1259, '541111', 'Beban Pembayaran Bunga Surat Perbendaharaan  Negara - Rupiah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1260, '541112', 'Pengembalian Beban Pembayaran Bunga SBN-TDR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1261, '541112', 'Beban Pembayaran Bunga SBN-TDR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1262, '541113', 'Beban Pembayaran Bunga Repo-TDR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1263, '541113', 'Pengembalian Beban Pembayaran Bunga Repo-TDR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1264, '541119', 'Beban Pembayaran Biaya/ kewajiban lainnya Bunga Surat Perbendaharan Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1265, '541119', 'Pengembalian Beban Pembayaran Biaya/ kewajiban lainnya Bunga Surat Perbendaharan Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1266, '541121', 'Beban Pembayaran Bunga Surat Perbendaharaan Negara-Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1267, '541121', 'Pengembalian Beban Pembayaran Bunga Surat Perbendaharaan Negara-Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1268, '541122', 'Beban Pembayaran Bunga SBN Valas-TDR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1269, '541122', 'Pengembalian Beban Pembayaran Bunga SBN Valas-TDR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1270, '541123', 'Beban Pembayaran Bunga Repo Valas-TDR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1271, '541123', 'Pengembalian Beban Pembayaran Bunga Repo Valas-TDR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1272, '541129', 'Pengembalian Beban Pembayaran Biaya/ Kewajiban Lainnya Bunga Surat Perbendaharaan Negara - Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1273, '541129', 'Beban Pembayaran Biaya/ Kewajiban Lainnya Bunga Surat Perbendaharaan Negara - Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1274, '541211', 'Beban Pembayaran Bunga Obligasi Negara - Rupiah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1275, '541211', 'Pengembalian Beban Pembayaran Bunga Obligasi Negara - Rupiah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1276, '541219', 'Pengembalian Beban Pembayaran Biaya/kewajiban lainnya Obligasi Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1277, '541219', 'Beban Pembayaran Biaya/kewajiban lainnya Obligasi Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1278, '541221', 'Beban Pembayaran Bunga Pinjaman Perbankan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1279, '541221', 'Pengembalian Beban Pembayaran Bunga Pinjaman Perbankan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1280, '541229', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Obligasi Negara Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1281, '541229', 'Beban Pembayaran Biaya/Kewajiban Obligasi Negara Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1282, '541231', 'Beban Pembayaran Bunga Pinjaman Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1283, '541231', 'Pengembalian Beban Pembayaran Bunga Pinjaman Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1284, '541232', 'Pengembalian Beban Biaya/Kewajiban Lainnya terhadap Pinjaman DN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1285, '541232', 'Beban Biaya/Kewajiban Lainnya terhadap Pinjaman DN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1286, '541241', 'Beban Pembayaran Biaya Transfer Pinjaman Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1287, '541241', 'Pengembalian Beban Pembayaran Biaya Transfer Pinjaman Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1288, '541251', 'Pengembalian Beban Pembayaran Bunga Obligasi Negara-Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1289, '541251', 'Beban Pembayaran Bunga Obligasi Negara-Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1290, '541259', 'Beban Pembayaran Biaya/Kewajiban Lainnya Obligasi Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1291, '541259', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya Obligasi Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1292, '541311', 'Beban Pembayaran Imbalan SBSN - Jangka Panjang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1293, '541311', 'Pengembalian Beban Pembayaran Imbalan SBSN - Jangka Panjang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1294, '541312', 'Beban Pembayaran Biaya/kewajiban lainnya - Imbalan SBSN Jangka Panjang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1295, '541312', 'Pengembalian Beban Pembayaran Biaya/kewajiban lainnya - Imbalan SBSN Jangka Panjang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1296, '541321', 'Pengembalian Beban Pembayaran Imbalan SBSN - Jangka Pendek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1297, '541321', 'Beban Pembayaran Imbalan SBSN - Jangka Pendek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1298, '541322', 'Beban Pembayaran Biaya/kewajiban lainnya - Imbalan SBSN Jangka Pendek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1299, '541322', 'Pengembalian Beban Pembayaran Biaya/kewajiban lainnya - Imbalan SBSN Jangka Pendek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1300, '541331', 'Beban Pembayaran Imbalan SPN Syariah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1301, '541331', 'Pengembalian Beban Pembayaran Imbalan SPN Syariah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1302, '541332', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya-Imbalan SPN Syariah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1303, '541332', 'Beban Pembayaran Biaya/Kewajiban Lainnya-Imbalan SPN Syariah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1304, '541341', 'Beban Pembayaran Imbalan SBSN - Jangka Panjang Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1305, '541341', 'Pengembalian Beban Pembayaran Imbalan SBSN - Jangka Panjang Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1306, '541342', 'Pengembalian Beban Pembayaran Biaya/kewajiban lainnya - Imbalan SBSN Jangka Panjang Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1307, '541342', 'Beban Pembayaran Biaya/kewajiban lainnya - Imbalan SBSN Jangka Panjang Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1308, '541351', 'Beban Pembayaran Imbalan SBSN - Jangka Pendek Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1309, '541351', 'Pengembalian Beban Pembayaran Imbalan SBSN - Jangka Pendek Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1310, '541352', 'Beban Pembayaran Biaya/Kewajiban Lainnya - Imbalan SBSN Jangka Pendek Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1311, '541352', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya - Imbalan SBSN Jangka Pendek Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1312, '541411', 'Beban Bunga Pinjaman Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1313, '541411', 'Pengembalian Beban Bunga Pinjaman Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1314, '541419', 'Pengembalian Beban Biaya/kewajiban lainnya Terhadap Pinjaman Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1315, '541419', 'Beban Biaya/kewajiban lainnya Terhadap Pinjaman Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1316, '541421', 'Beban Bunga Pinjaman Proyek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1317, '541421', 'Pengembalian Beban Bunga Pinjaman Proyek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1318, '541429', 'Beban Biaya/Kewajiban Lainnya Terhadap Pinjaman Proyek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1319, '541429', 'Pengembalian Beban Biaya/Kewajiban Lainnya Terhadap Pinjaman Proyek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1320, '541441', 'Beban Bunga Utang LN dari Penjadualan Kembali Pinjaman Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1321, '541441', 'Pengembalian Beban Bunga Utang LN dari Penjadualan Kembali Pinjaman Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1322, '541442', 'Beban Bunga Utang LN dari Penjadualan Kembali Pinjaman Proyek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1323, '541442', 'Pengembalian Beban Bunga Utang LN dari Penjadualan Kembali Pinjaman Proyek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1324, '541449', 'Pengembalian Beban Biaya/Kewajiban Lainnya - Bunga Utang LN Melalui Penjadualan Kembali Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1325, '541449', 'Beban Biaya/Kewajiban Lainnya - Bunga Utang LN Melalui Penjadualan Kembali Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1326, '541461', 'Pengembalian Beban Pembayaran Biaya Transfer Pinjaman Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1327, '541461', 'Beban Pembayaran Biaya Transfer Pinjaman Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1328, '542111', 'Pengembalian Beban Pembayaran Discount Surat Perbendaharaan Negara Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1329, '542111', 'Beban Pembayaran Discount Surat Perbendaharaan Negara Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1330, '542119', 'Beban Pembayaran Biaya/Kewajiban Lainnya - Discount Surat Perbendaharaan Negara Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1331, '542119', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya - Discount Surat Perbendaharaan Negara Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1332, '542121', 'Beban Pembayaran Discount Obligasi Negara Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1333, '542121', 'Pengembalian Beban Pembayaran Discount Obligasi Negara Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1334, '542129', 'Beban Pembayaran Biaya/Kewajiban Lainnya - Discount Obligasi Negara Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1335, '542129', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya - Discount Obligasi Negara Dalam Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1336, '542131', 'Pengembalian Beban Pembayaran Discount Surat Perbendaharaan Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1337, '542131', 'Beban Pembayaran Discount Surat Perbendaharaan Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1338, '542139', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya - Discount Surat Perbendaharaan Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1339, '542139', 'Beban Pembayaran Biaya/Kewajiban Lainnya - Discount Surat Perbendaharaan Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1340, '542141', 'Beban Pembayaran Discount Obligasi  Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1341, '542141', 'Pengembalian Beban Pembayaran Discount Obligasi  Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1342, '542149', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya - Discount Obligasi Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1343, '542149', 'Beban Pembayaran Biaya/Kewajiban Lainnya - Discount Obligasi Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1344, '544111', 'Beban Pembayaran Loss on Bond Redemption atas Pembelian Kembali Obligasi Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1345, '544111', 'Pengembalian Beban Pembayaran Loss on Bond Redemption atas Pembelian Kembali Obligasi Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1346, '544112', 'Beban Pembayaran Loss on Bond Redemption atas Pembelian Kembali SBSN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1347, '544112', 'Pengembalian Beban Pembayaran Loss on Bond Redemption atas Pembelian Kembali SBSN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1348, '544113', 'Beban Pembayaran Loss on Bond Redemption atas Pembelian Kembali Obligasi Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1349, '544113', 'Pengembalian Beban Pembayaran Loss on Bond Redemption atas Pembelian Kembali Obligasi Negara Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1350, '544114', 'Beban Pembayaran Loss on Bond Redemption atas Pembelian Kembali SBSN Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1351, '544114', 'Pengembalian Beban Pembayaran Loss on Bond Redemption atas Pembelian Kembali SBSN Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1352, '545111', 'Beban Pembayaran Discount SBSN - Jangka Panjang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1353, '545111', 'Pengembalian Beban Pembayaran Discount SBSN - Jangka Panjang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1354, '545119', 'Beban Pembayaran Biaya/Kewajiban Lainnya - Discount SBSN Jangka Panjang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1355, '545119', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya - Discount SBSN Jangka Panjang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1356, '545121', 'Beban Pembayaran Discount SBSN - Jangka Pendek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1357, '545121', 'Pengembalian Beban Pembayaran Discount SBSN - Jangka Pendek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1358, '545129', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya - Disocunt SBSN Jangka Pendek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1359, '545129', 'Beban Pembayaran Biaya/Kewajiban Lainnya - Disocunt SBSN Jangka Pendek', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1360, '545131', 'Beban Pembayaran Discount SPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1361, '545131', 'Pengembalian Beban Pembayaran Discount SPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1362, '545139', 'Beban Pembayaran Biaya/Kewajiban Lainnya-Discount SPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1363, '545139', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya-Discount SPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1364, '545141', 'Pengembalian Beban Pembayaran Discount SBSN - Jangka Panjang Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1365, '545141', 'Beban Pembayaran Discount SBSN - Jangka Panjang Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1366, '545149', 'Beban Pembayaran Biaya/Kewajiban Lainnya - Discount SBSN Jangka Panjang Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1367, '545149', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya - Discount SBSN Jangka Panjang Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1368, '545151', 'Pengembalian Beban Pembayaran Discount SBSN - Jangka Pendek Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1369, '545151', 'Beban Pembayaran Discount SBSN - Jangka Pendek Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1370, '545159', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya - Disocunt SBSN Jangka Pendek Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1371, '545159', 'Beban Pembayaran Biaya/Kewajiban Lainnya - Disocunt SBSN Jangka Pendek Valas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1372, '547112', 'Pengembalian Beban Pembayaran Bunga Pinjaman Perbankan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1373, '547112', 'Beban Pembayaran Bunga Pinjaman Perbankan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1374, '547113', 'Pengembalian Beban Pembayaran Imbalan Bunga Bea dan Cukai (SPM-IB Bea dan Cukai)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1375, '547113', 'Beban Pembayaran Imbalan Bunga Bea dan Cukai (SPM-IB Bea dan Cukai)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1376, '547119', 'Pengembalian Beban Pembayaran Biaya/Kewajiban Lainnya - Bunga Dalam Negeri Jangka Pendek Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1377, '547119', 'Beban Pembayaran Biaya/Kewajiban Lainnya - Bunga Dalam Negeri Jangka Pendek Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1378, '548111', 'Pengembalian Beban Terkait Pendapatan Hibah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1379, '548111', 'Beban Terkait Pendapatan Hibah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1380, '551111', 'Pengembalian Beban Subsidi Lembaga Keuangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1381, '551111', 'Beban Subsidi Lembaga Keuangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1382, '551211', 'Beban Subsidi Avgas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1383, '551211', 'Pengembalian Beban Subsidi Avgas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1384, '551212', 'Beban Subsidi Avtur', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1385, '551212', 'Pengembalian Beban Subsidi Avtur', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1386, '551213', 'Beban Subsidi Premium', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1387, '551213', 'Pengembalian Beban Subsidi Premium', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1388, '551214', 'Pengembalian Beban Subsidi Minyak Bakar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1389, '551214', 'Beban Subsidi Minyak Bakar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1390, '551215', 'Pengembalian Beban Subsidi Minyak Solar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1391, '551215', 'Beban Subsidi Minyak Solar', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1392, '551216', 'Beban Subsidi Minyak Diesel', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1393, '551216', 'Pengembalian Beban Subsidi Minyak Diesel', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1394, '551217', 'Beban Subsidi Minyak Tanah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1395, '551217', 'Pengembalian Beban Subsidi Minyak Tanah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1396, '551218', 'Beban Subsidi Elpiji', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1397, '551218', 'Pengembalian Beban Subsidi Elpiji', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1398, '551219', 'Beban Subsidi Liquefied Gas For Vehicle (LGV)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1399, '551219', 'Pengembalian Beban Subsidi Liquefied Gas For Vehicle (LGV)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1400, '551311', 'Beban Subsidi Pangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1401, '551311', 'Pengembalian Beban Subsidi Pangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1402, '551312', 'Beban Subsidi Listrik', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1403, '551312', 'Pengembalian Beban Subsidi Listrik', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1404, '551313', 'Beban Subsidi Benih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1405, '551313', 'Pengembalian Beban Subsidi Benih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1406, '551314', 'Pengembalian Beban Subsidi Obat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1407, '551314', 'Beban Subsidi Obat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1408, '551315', 'Pengembalian Beban Subsidi Gula', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1409, '551315', 'Beban Subsidi Gula', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1410, '551316', 'Beban Subsidi Pupuk', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1411, '551316', 'Pengembalian Beban Subsidi Pupuk', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1412, '551317', 'Beban Subsidi Perawatan Beras', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1413, '551317', 'Pengembalian Beban Subsidi Perawatan Beras', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1414, '551318', 'Beban Subsidi Pengawasan Pupuk', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1415, '551318', 'Pengembalian Beban Subsidi Pengawasan Pupuk', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1416, '551319', 'Beban Subsidi Harga/Biaya Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1417, '551319', 'Pengembalian Beban Subsidi Harga/Biaya Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1418, '551321', 'Beban Subsidi PPh-DTP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1419, '551321', 'Pengembalian Beban Subsidi PPh-DTP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1420, '551323', 'Pengembalian Beban Subsidi BM-DTP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1421, '551323', 'Beban Subsidi BM-DTP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1422, '551331', 'Pengembalian Beban Subsidi Haji', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1423, '551331', 'Beban Subsidi Haji', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1424, '551332', 'Pengembalian Beban Subsidi Kendaraan Bermotor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1425, '551332', 'Beban Subsidi Kendaraan Bermotor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1426, '551339', 'Beban Subsidi Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1427, '551339', 'Pengembalian Beban Subsidi Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1428, '551341', 'Beban Subsidi Minyak Goreng', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1429, '551341', 'Pengembalian Beban Subsidi Minyak Goreng', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1430, '551411', 'Pengembalian Beban Subsidi PT KAI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1431, '551411', 'Beban Subsidi PT KAI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1432, '551412', 'Beban Subsidi PT PELNI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1433, '551412', 'Pengembalian Beban Subsidi PT PELNI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1434, '551413', 'Pengembalian Beban Subsidi PT Pos Indonesia', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1435, '551413', 'Beban Subsidi PT Pos Indonesia', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1436, '551414', 'Pengembalian Beban Subsidi TVRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1437, '551414', 'Beban Subsidi TVRI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1438, '551415', 'Beban Subsidi BULOG', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1439, '551415', 'Pengembalian Beban Subsidi BULOG', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1440, '551419', 'Pengembalian Beban Subsidi Dalam Rangka PSO Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1441, '551419', 'Beban Subsidi Dalam Rangka PSO Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1442, '552111', 'Beban Subsidi Lembaga Keuangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1443, '552111', 'Pengembalian Beban Subsidi Lembaga Keuangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1444, '552112', 'Pengembalian Beban Subsidi Bantuan Uang Muka Perumahan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1445, '552112', 'Beban Subsidi Bantuan Uang Muka Perumahan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1446, '552121', 'Beban Subsidi Bunga KUT', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1447, '552121', 'Pengembalian Beban Subsidi Bunga KUT', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1448, '552122', 'Beban Subsidi Bunga KOP PIR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1449, '552122', 'Pengembalian Beban Subsidi Bunga KOP PIR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1450, '552123', 'Beban Subsidi Bunga KOP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1451, '552123', 'Pengembalian Beban Subsidi Bunga KOP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1452, '552124', 'Pengembalian Beban Subsidi Bunga KOP PRIM', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1453, '552124', 'Beban Subsidi Bunga KOP PRIM', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1454, '552125', 'Beban Subsidi Bunga KPR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1455, '552125', 'Pengembalian Beban Subsidi Bunga KPR', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1456, '552126', 'Pengembalian Beban Subsidi Bunga Ketahanan Pangan (KKP) dan Energi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1457, '552126', 'Beban Subsidi Bunga Ketahanan Pangan (KKP) dan Energi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1458, '552127', 'Beban Subsidi Bunga Kredit Program Eks KLBI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1459, '552127', 'Pengembalian Beban Subsidi Bunga Kredit Program Eks KLBI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1460, '552128', 'Beban Subsidi Bunga Kredit Biofuel (KPEN-RP)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1461, '552128', 'Pengembalian Beban Subsidi Bunga Kredit Biofuel (KPEN-RP)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1462, '552129', 'Pengembalian Beban Subsidi Bunga Kredit Program Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1463, '552129', 'Beban Subsidi Bunga Kredit Program Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1464, '552131', 'Pengembalian Beban Subsidi Imbalan Jasa Penjaminan Kredit Usaha Rakyat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1465, '552131', 'Beban Subsidi Imbalan Jasa Penjaminan Kredit Usaha Rakyat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1466, '552132', 'Pengembalian Beban Subsidi Risk Sharing KKP dan Energi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1467, '552132', 'Beban Subsidi Risk Sharing KKP dan Energi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1468, '552141', 'Beban Subdidi Bunga Pengusaha NAD dan Nias', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1469, '552141', 'Pengembalian Beban Subdidi Bunga Pengusaha NAD dan Nias', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1470, '552142', 'Pengembalian Beban Subsidi Kredit Sektor Peternakan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1471, '552142', 'Beban Subsidi Kredit Sektor Peternakan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1472, '552143', 'Beban Subsidi Kredit Resi Gudang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1473, '552143', 'Pengembalian Beban Subsidi Kredit Resi Gudang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1474, '552211', 'Beban Subsidi Lembaga Non Keuangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1475, '552211', 'Pengembalian Beban Subsidi Lembaga Non Keuangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1476, '553111', 'Beban Subsidi - Estimasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1477, '553111', 'Pengembalian Beban Subsidi - Estimasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1478, '554111', 'Beban Subsidi Listrik - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1479, '554111', 'Pengembalian Beban Subsidi Listrik - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1480, '554112', 'Beban Subsidi Bantuan Uang Muka Perumahan - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1481, '554112', 'Pengembalian Beban Subsidi Bantuan Uang Muka Perumahan - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1482, '554113', 'Beban Subsidi Bunga KPR - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1483, '554113', 'Pengembalian Beban Subsidi Bunga KPR - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1484, '554114', 'Beban Subsidi Bunga KUR - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1485, '554114', 'Pengembalian Beban Subsidi Bunga KUR - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1486, '554115', 'Beban Subsidi PPh-DTP - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1487, '554115', 'Pengembalian Beban Subsidi PPh-DTP - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1488, '554116', 'Pengembalian Beban Subsidi BM-DTP - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1489, '554116', 'Beban Subsidi BM-DTP - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1490, '554117', 'Beban Subsidi Bunga/Subsidi Margin Program Pemulihan Ekonomi Nasional (PEN) - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1491, '554117', 'Pengembalian Beban Subsidi Bunga/Subsidi Margin Program Pemulihan Ekonomi Nasional (PEN) - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1492, '554119', 'Beban Subsidi PPN-DTP - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1493, '554119', 'Pengembalian Beban Subsidi PPN-DTP - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1494, '554121', 'Pengembalian Beban Subsidi Pupuk Program Pemulihan Ekonomi Nasional (PEN) - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1495, '554121', 'Beban Subsidi Pupuk Program Pemulihan Ekonomi Nasional (PEN) - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1496, '554122', 'Pengembalian Beban Subsidi PPnBM Ditanggung Pemerintah Dalam Rangka Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1497, '554122', 'Beban Subsidi PPnBM Ditanggung Pemerintah Dalam Rangka Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1498, '561111', 'Pengembalian Beban Hibah Kepada Pemerintah Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1499, '561111', 'Beban Hibah Kepada Pemerintah Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1500, '562111', 'Pengembalian Beban Hibah Kepada Organisasi Internasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1501, '562111', 'Beban Hibah Kepada Organisasi Internasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1502, '563111', 'Beban Hibah Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1503, '563111', 'Pengembalian Beban Hibah Kepada Pemerintah Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1504, '563121', 'Beban Hibah Barang Kepada Pemerintah Daerah dari Penerusan Hibah Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1505, '563121', 'Pengembalian Beban Hibah Barang Kepada Pemerintah Daerah dari Penerusan Hibah Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1506, '563122', 'Pengembalian Beban Hibah Jasa Kepada Pemerintah Daerah dari Penerusan Hibah Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1507, '563122', 'Beban Hibah Jasa Kepada Pemerintah Daerah dari Penerusan Hibah Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1508, '563123', 'Beban Hibah Surat Berharga Kepada Pemerintah Daerah dari Penerusan Hibah Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1509, '563123', 'Pengembalian Beban Hibah Surat Berharga Kepada Pemerintah Daerah dari Penerusan Hibah Luar Negeri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1510, '565111', 'Pengembalian Beban Pembayaran Biaya/kewajiban Lainnya Terkait Pendapatan/Belanja Hibah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1511, '565111', 'Beban Pembayaran Biaya/kewajiban Lainnya Terkait Pendapatan/Belanja Hibah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1512, '571111', 'Pengembalian Beban Bantuan Sosial Untuk Rehabilitasi Sosial Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1513, '571111', 'Beban Bantuan Sosial Untuk Rehabilitasi Sosial Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1514, '571112', 'Pengembalian Beban Bantuan Sosial Untuk Rehabilitasi Sosial Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1515, '571112', 'Beban Bantuan Sosial Untuk Rehabilitasi Sosial Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1516, '571113', 'Pengembalian Beban Bantuan Sosial untuk Rehabilitasi Sosial Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1517, '571113', 'Beban Bantuan Sosial untuk Rehabilitasi Sosial Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1518, '571114', 'Pengembalian Beban Bantuan Sosial untuk Rehabilitasi Sosial dalam bentuk Uang - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1519, '571114', 'Beban Bantuan Sosial untuk Rehabilitasi Sosial dalam bentuk Uang - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1520, '572111', 'Pengembalian Beban Bantuan Sosial Untuk Jaminan Sosial Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1521, '572111', 'Beban Bantuan Sosial Untuk Jaminan Sosial Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1522, '572112', 'Pengembalian Beban Bantuan Sosial Untuk Jaminan Sosial Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1523, '572112', 'Beban Bantuan Sosial Untuk Jaminan Sosial Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1524, '572113', 'Beban Bantuan Sosial untuk Jaminan Sosial Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1525, '572113', 'Pengembalian Beban Bantuan Sosial untuk Jaminan Sosial Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1526, '572114', 'Beban Bantuan Sosial untuk Jaminan Sosial dalam Bentuk Uang -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1527, '572114', 'Pengembalian Beban Bantuan Sosial untuk Jaminan Sosial dalam Bentuk Uang -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1528, '573111', 'Beban Bantuan Sosial Untuk Pemberdayaan Sosial Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1529, '573111', 'Pengembalian Beban Bantuan Sosial Untuk Pemberdayaan Sosial Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1530, '573112', 'Pengembalian Beban Bantuan Sosial Untuk Pemberdayaan Sosial Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1531, '573112', 'Beban Bantuan Sosial Untuk Pemberdayaan Sosial Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1532, '573113', 'Beban Bantuan Sosial untuk Pemberdayaan Sosial Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1533, '573113', 'Pengembalian Beban Bantuan Sosial untuk Pemberdayaan Sosial Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1534, '573114', 'Pengembalian Beban Bantuan Sosial untuk Pemberdayaan Sosial dalam Bentuk Uang -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1535, '573114', 'Beban Bantuan Sosial untuk Pemberdayaan Sosial dalam Bentuk Uang -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1536, '574111', 'Pengembalian Beban Bantuan Sosial Untuk Perlindungan Sosial Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1537, '574111', 'Beban Bantuan Sosial Untuk Perlindungan Sosial Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1538, '574112', 'Pengembalian Beban Bantuan Sosial Untuk Perlindungan Sosial Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1539, '574112', 'Beban Bantuan Sosial Untuk Perlindungan Sosial Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1540, '574113', 'Pengembalian Beban Bantuan Sosial untuk Perlindungan Sosial Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1541, '574113', 'Beban Bantuan Sosial untuk Perlindungan Sosial Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1542, '574114', 'Pengembalian Beban Bantuan Sosial untuk Perlindungan Sosial dalam Bentuk Uang -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1543, '574114', 'Beban Bantuan Sosial untuk Perlindungan Sosial dalam Bentuk Uang -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1544, '575111', 'Pengembalian Beban Bantuan Sosial untuk Penanggulangan Kemiskinan Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1545, '575111', 'Beban Bantuan Sosial untuk Penanggulangan Kemiskinan Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1546, '575112', 'Pengembalian Beban Bantuan Sosial untuk Penanggulangan Kemiskinan Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1547, '575112', 'Beban Bantuan Sosial untuk Penanggulangan Kemiskinan Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1548, '575113', 'Pengembalian Beban Bantuan Sosial untuk Penanggulangan Kemiskinan  Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1549, '575113', 'Beban Bantuan Sosial untuk Penanggulangan Kemiskinan  Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1550, '575114', 'Beban Bantuan Sosial untuk Penanggulangan Kemiskinan dalam Bentuk Uang -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1551, '575114', 'Pengembalian Beban Bantuan Sosial untuk Penanggulangan Kemiskinan dalam Bentuk Uang -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1552, '576111', 'Pengembalian Beban Bantuan Sosial Untuk Penanggulangan Bencana Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1553, '576111', 'Beban Bantuan Sosial Untuk Penanggulangan Bencana Dalam Bentuk Uang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1554, '576112', 'Pengembalian Beban Bantuan Sosial Untuk Penanggulangan Bencana Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1555, '576112', 'Beban Bantuan Sosial Untuk Penanggulangan Bencana Dalam Bentuk Barang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1556, '576113', 'Pengembalian Beban Bantuan Sosial untuk Penanggulangan Bencana  Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1557, '576113', 'Beban Bantuan Sosial untuk Penanggulangan Bencana  Dalam Bentuk Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1558, '576114', 'Beban Bantuan Sosial untuk Penanggulangan Bencana dalam Bentuk Uang -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1559, '576114', 'Pengembalian Beban Bantuan Sosial untuk Penanggulangan Bencana dalam Bentuk Uang -  Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1560, '576116', 'Pengembalian Beban Bantuan Sosial Untuk Penanggulangan Bencana Dalam Bentuk Jasa - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1561, '576116', 'Beban Bantuan Sosial Untuk Penanggulangan Bencana Dalam Bentuk Jasa - Penanganan Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1562, '581111', 'Pengembalian Beban Cadangan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1563, '581111', 'Beban Cadangan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1564, '581112', 'Beban Cadangan Tanggap Darurat (Dana Kontijensi)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1565, '581112', 'Pengembalian Beban Cadangan Tanggap Darurat (Dana Kontijensi)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1566, '581113', 'Beban Cadangan Dana Reboisasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1567, '581113', 'Pengembalian Beban Cadangan Dana Reboisasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1568, '581114', 'Beban Cadangan Tunjangan Beras PNS/TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1569, '581114', 'Pengembalian Beban Cadangan Tunjangan Beras PNS/TNI/Polri', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1570, '581115', 'Pengembalian Beban Cadangan Kenaikan Harga Tanah (Land Capping)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1571, '581115', 'Beban Cadangan Kenaikan Harga Tanah (Land Capping)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1572, '581116', 'Pengembalian Beban Cadangan Risiko Perubahan Asumsi Makro', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1573, '581116', 'Beban Cadangan Risiko Perubahan Asumsi Makro', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1574, '581117', 'Pengembalian Beban Cadangan Stabilisasi Harga Pangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1575, '581117', 'Beban Cadangan Stabilisasi Harga Pangan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1576, '581118', 'Pengembalian Beban Cadangan Risiko Lifting', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1577, '581118', 'Beban Cadangan Risiko Lifting', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1578, '581119', 'Pengembalian Beban Cadangan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1579, '581119', 'Beban Cadangan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1580, '581121', 'Pengembalian Beban Cadangan Fiskal Lainnya (Risiko Kenaikan TTL Listrik)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1581, '581121', 'Beban Cadangan Fiskal Lainnya (Risiko Kenaikan TTL Listrik)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1582, '581122', 'Beban Cadangan Beras Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1583, '581122', 'Pengembalian Beban Cadangan Beras Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1584, '581123', 'Pengembalian Beban Cadangan Benih Nasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1585, '581123', 'Beban Cadangan Benih Nasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1586, '581211', 'Beban Lain-lain Lembaga Non Kementerian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1587, '581211', 'Pengembalian Beban Lain-lain Lembaga Non Kementerian', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1588, '581212', 'Pengembalian Beban Operasional SKK Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1589, '581212', 'Beban Operasional SKK Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1590, '581311', 'Pengembalian Beban Fee Pelayanan Bank/Pos Persepsi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1591, '581311', 'Beban Fee Pelayanan Bank/Pos Persepsi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1592, '581312', 'Jasa Surveyor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1593, '581312', 'Pengembalian Jasa Surveyor', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1594, '581314', 'Pengembalian Jasa Pelayanan Bank Operasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1595, '581314', 'Jasa Pelayanan Bank Operasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1596, '581315', 'Pengembalian Beban Jasa Pelayanan Perbendaharaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1597, '581315', 'Beban Jasa Pelayanan Perbendaharaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1598, '581316', 'Beban Pembayaran Selisih Harga Beras Bulog', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1599, '581316', 'Pengembalian Beban Pembayaran Selisih Harga Beras Bulog', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1600, '581319', 'Pengembalian Beban Lain-lain Jasa Pelayanan BUN Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1601, '581319', 'Beban Lain-lain Jasa Pelayanan BUN Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1602, '581411', 'Beban Iuran ke Lembaga Internasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1603, '581411', 'Pengembalian Beban Iuran ke Lembaga Internasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1604, '581412', 'Pengembalian Beban Ongkos Angkut Beras PNS Distrik Pedalaman Papua', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1605, '581412', 'Beban Ongkos Angkut Beras PNS Distrik Pedalaman Papua', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1606, '581413', 'Pengembalian Beban Tunggakan dan Klaim Pihak Ketiga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1607, '581413', 'Beban Tunggakan dan Klaim Pihak Ketiga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1608, '581414', 'Beban Dana Penunjang (PHLN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1609, '581414', 'Pengembalian Beban Dana Penunjang (PHLN)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1610, '581415', 'Pengembalian Beban Karena Rugi Selisih Kurs Dalam Pengelolaan Rekening Milik BUN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1611, '581415', 'Beban Karena Rugi Selisih Kurs Dalam Pengelolaan Rekening Milik BUN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1612, '581416', 'Pengembalian Beban Penugasan PT SMI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1613, '581416', 'Beban Penugasan PT SMI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1614, '581417', 'Beban Kompensasi Kenaikan Harga BBM', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1615, '581417', 'Pengembalian Beban Kompensasi Kenaikan Harga BBM', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1616, '581418', 'Pengembalian Beban Konversi BBM ke BBG untuk Transportasi Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1617, '581418', 'Beban Konversi BBM ke BBG untuk Transportasi Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1618, '581419', 'Pengembalian Beban Lain-lain BUN Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1619, '581419', 'Beban Lain-lain BUN Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1620, '581421', 'Beban Selisih Harga SBN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1621, '581421', 'Pengembalian Beban Selisih Harga SBN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1622, '581422', 'Beban karena Selisih Kurs Satker Perwakilan RI/ Atase Teknis BA Beban Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1623, '581422', 'Pengembalian Beban karena Selisih Kurs Satker Perwakilan RI/ Atase Teknis BA Beban Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1624, '581511', 'Beban Keperluan Mendesak/Tak Terduga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1625, '581511', 'Pengembalian Beban Keperluan Mendesak/Tak Terduga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1626, '581512', 'Beban Tanggap Darurat Penanggulangan Bencana', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1627, '581512', 'Pengembalian Beban Tanggap Darurat Penanggulangan Bencana', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1628, '581522', 'Pengembalian Beban Lain-lain Program Kartu Prakerja - Penanganan Dampak Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1629, '581522', 'Beban Lain-lain Program Kartu Prakerja - Penanganan Dampak Pandemi COVID-19', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1630, '581611', 'Pengembalian Beban Penyesuaian Selisih Kurs Invoice/SPP ke SP2D dan Exotic Currency', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1631, '581611', 'Beban Penyesuaian Selisih Kurs Invoice/SPP ke SP2D dan Exotic Currency', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1632, '581911', 'Pengembalian Beban Pemilu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1633, '581911', 'Beban Pemilu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1634, '581919', 'Pengembalian Beban Lain-lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1635, '581919', 'Beban Lain-lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1636, '591111', 'Pengembalian Beban Penyusutan Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1637, '591111', 'Beban Penyusutan Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1638, '591121', 'Beban Penyusutan Peralatan dan Mesin - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1639, '591121', 'Pengembalian Beban Penyusutan Peralatan dan Mesin - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1640, '591211', 'Beban Penyusutan Gedung dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1641, '591211', 'Pengembalian Beban Penyusutan Gedung dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1642, '591221', 'Beban Penyusutan Gedung dan Bangunan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1643, '591221', 'Pengembalian Beban Penyusutan Gedung dan Bangunan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1644, '591311', 'Beban Penyusutan Jalan dan Jembatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1645, '591311', 'Pengembalian Beban Penyusutan Jalan dan Jembatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1646, '591312', 'Pengembalian Beban Penyusutan Irigasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1647, '591312', 'Beban Penyusutan Irigasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1648, '591313', 'Beban Penyusutan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1649, '591313', 'Pengembalian Beban Penyusutan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1650, '591321', 'Pengembalian Beban Penyusutan Jalan, Irigasi dan Jaringan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1651, '591321', 'Beban Penyusutan Jalan, Irigasi dan Jaringan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1652, '591411', 'Pengembalian Beban Penyusutan Aset Tetap Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1653, '591411', 'Beban Penyusutan Aset Tetap Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1654, '591421', 'Pengembalian Beban Penyusutan Aset Tetap Lainnya - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1655, '591421', 'Beban Penyusutan Aset Tetap Lainnya - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1656, '592111', 'Pengembalian Beban Amortisasi Goodwill', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1657, '592111', 'Beban Amortisasi Goodwill', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1658, '592112', 'Beban Amortisasi Hak Cipta', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1659, '592112', 'Pengembalian Beban Amortisasi Hak Cipta', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1660, '592113', 'Pengembalian Beban Amortisasi Royalti', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1661, '592113', 'Beban Amortisasi Royalti', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1662, '592114', 'Beban Amortisasi Paten', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1663, '592114', 'Pengembalian Beban Amortisasi Paten', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1664, '592115', 'Pengembalian Beban Amortisasi Software', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1665, '592115', 'Beban Amortisasi Software', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1666, '592116', 'Beban Amortisasi Lisensi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1667, '592116', 'Pengembalian Beban Amortisasi Lisensi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1668, '592117', 'Beban Amortisasi Aset Tak Berwujud Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1669, '592117', 'Pengembalian Beban Amortisasi Aset Tak Berwujud Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1670, '592118', 'Pengembalian Beban Amortisasi  Aset Tak Berwujud  yang tidak digunakan dalam Operasional Pemerintahan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1671, '592118', 'Beban Amortisasi  Aset Tak Berwujud  yang tidak digunakan dalam Operasional Pemerintahan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1672, '592121', 'Beban Amortisasi Software-Badan Layanan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1673, '592121', 'Pengembalian Beban Amortisasi Software-Badan Layanan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1674, '592122', 'Beban Amortisasi-Hak Cipta BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1675, '592122', 'Pengembalian Beban Amortisasi-Hak Cipta BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1676, '592123', 'Pengembalian Beban Amortisasi-Royalti BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1677, '592123', 'Beban Amortisasi-Royalti BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1678, '592124', 'Pengembalian Beban Amortisasi-Paten BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1679, '592124', 'Beban Amortisasi-Paten BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1680, '592125', 'Beban Amortisasi-Aset Tak Berwujud Lainnya-Badan Layanan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1681, '592125', 'Pengembalian Beban Amortisasi-Aset Tak Berwujud Lainnya-Badan Layanan Umum', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1682, '592126', 'Beban Amortisasi  Aset Tak Berwujud  yang tidak digunakan dalam Operasional Pemerintahan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1683, '592126', 'Pengembalian Beban Amortisasi  Aset Tak Berwujud  yang tidak digunakan dalam Operasional Pemerintahan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1684, '592211', 'Beban Penyusutan Kemitraan dengan Pihak Ketiga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1685, '592211', 'Pengembalian Beban Penyusutan Kemitraan dengan Pihak Ketiga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1686, '592212', 'Beban Penyusutan Konsesi Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1687, '592212', 'Pengembalian Beban Penyusutan Konsesi Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1688, '592221', 'Beban Penyusutan Aset Lain-lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1689, '592221', 'Pengembalian Beban Penyusutan Aset Lain-lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1690, '592222', 'Beban Penyusutan Penyusutan Aset Tetap yang Tidak Digunakan dalam Operasional Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1691, '592222', 'Pengembalian Beban Penyusutan Penyusutan Aset Tetap yang Tidak Digunakan dalam Operasional Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1692, '592231', 'Beban Penyusutan Aset Eks BPPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1693, '592231', 'Pengembalian Beban Penyusutan Aset Eks BPPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1694, '592232', 'Beban Penyusutan Aset yang Diserahkelolakan pada PT. PPA', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1695, '592232', 'Pengembalian Beban Penyusutan Aset yang Diserahkelolakan pada PT. PPA', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1696, '592233', 'Beban Penyusutan Aset BUMN yang Belum Ditetapkan Statusnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1697, '592233', 'Pengembalian Beban Penyusutan Aset BUMN yang Belum Ditetapkan Statusnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1698, '592234', 'Beban Penyusutan Aset yang Berasal dari Kontraktor Kontrak Kerjasama', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1699, '592234', 'Pengembalian Beban Penyusutan Aset yang Berasal dari Kontraktor Kontrak Kerjasama', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1700, '592235', 'Beban Penyusutan Aset Eks Kelolaan PT. PPA', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1701, '592235', 'Pengembalian Beban Penyusutan Aset Eks Kelolaan PT. PPA', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1702, '592236', 'Beban Penyusutan Aset Eks Pertamina', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1703, '592236', 'Pengembalian Beban Penyusutan Aset Eks Pertamina', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1704, '592237', 'Pengembalian Beban Penyusutan Aset yang Berasal dari Kontraktor PKP2B', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1705, '592237', 'Beban Penyusutan Aset yang Berasal dari Kontraktor PKP2B', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1706, '592238', 'Beban Penyusutan Aset Idle yang Sudah Diserahkan ke DJKN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1707, '592238', 'Pengembalian Beban Penyusutan Aset Idle yang Sudah Diserahkan ke DJKN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1708, '592239', 'Pengembalian Beban Penyusutan Aset Lain-lain BUN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1709, '592239', 'Beban Penyusutan Aset Lain-lain BUN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1710, '592241', 'Pengembalian Beban Penyusutan Aset Lain-lain BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1711, '592241', 'Beban Penyusutan Aset Lain-lain BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1712, '592242', 'Beban Penyusutan Aset Tetap yang Tidak Digunakan dalam Operasi Pemerintahan BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1713, '592242', 'Pengembalian Beban Penyusutan Aset Tetap yang Tidak Digunakan dalam Operasi Pemerintahan BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1714, '593111', 'Pengembalian Beban Persediaan konsumsi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1715, '593111', 'Beban Persediaan konsumsi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1716, '593112', 'Beban Persediaan amunisi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1717, '593112', 'Pengembalian Beban Persediaan amunisi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1718, '593113', 'Beban Persediaan bahan untuk pemeliharaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1719, '593113', 'Pengembalian Beban Persediaan bahan untuk pemeliharaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1720, '593114', 'Pengembalian Beban Persediaan suku cadang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1721, '593114', 'Beban Persediaan suku cadang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1722, '593121', 'Pengembalian Beban Persediaan pita cukai, materai dan leges', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1723, '593121', 'Beban Persediaan pita cukai, materai dan leges', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1724, '593122', 'Beban Persediaan tanah bangunan untuk dijual atau diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1725, '593122', 'Pengembalian Beban Persediaan tanah bangunan untuk dijual atau diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1726, '593123', 'Pengembalian Beban Persediaan hewan dan tanaman untuk dijual atau diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1727, '593123', 'Beban Persediaan hewan dan tanaman untuk dijual atau diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1728, '593124', 'Beban Persediaan Peralatan dan mesin untuk dijual atau diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1729, '593124', 'Pengembalian Beban Persediaan Peralatan dan mesin untuk dijual atau diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1730, '593125', 'Pengembalian Beban persediaan Jalan, Irigasi dan Jaringan untuk diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1731, '593125', 'Beban persediaan Jalan, Irigasi dan Jaringan untuk diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1732, '593126', 'Beban Persediaan Aset Tetap Lainnya untuk diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1733, '593126', 'Pengembalian Beban Persediaan Aset Tetap Lainnya untuk diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1734, '593127', 'Beban Persediaan Aset Lain-Lain untuk diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1735, '593127', 'Pengembalian Beban Persediaan Aset Lain-Lain untuk diserahkan kepada Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1736, '593128', 'Beban Barang Persediaan Lainnya untuk Dijual/Diserahkan ke Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1737, '593128', 'Pengembalian Beban Barang Persediaan Lainnya untuk Dijual/Diserahkan ke Masyarakat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1738, '593131', 'Beban Persediaan bahan baku', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1739, '593131', 'Pengembalian Beban Persediaan bahan baku', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1740, '593132', 'Pengembalian Beban Persediaan barang dalam proses', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1741, '593132', 'Beban Persediaan barang dalam proses', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1742, '593141', 'Beban Persediaan untuk tujuan strategis/berjaga-jaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1743, '593141', 'Pengembalian Beban Persediaan untuk tujuan strategis/berjaga-jaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1744, '593142', 'Pengembalian Beban Persediaan barang hasil sitaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1745, '593142', 'Beban Persediaan barang hasil sitaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1746, '593149', 'Pengembalian Beban Persediaan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1747, '593149', 'Beban Persediaan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1748, '593311', 'Beban Penyesuaian Nilai Persediaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1749, '593311', 'Pengembalian Beban Penyesuaian Nilai Persediaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1750, '594111', 'Pengembalian Beban Penyisihan Piutang  PPh Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1751, '594111', 'Beban Penyisihan Piutang  PPh Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1752, '594112', 'Beban Penyisihan Piutang  PPh Non Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1753, '594112', 'Pengembalian Beban Penyisihan Piutang  PPh Non Migas', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1754, '594113', 'Pengembalian Beban Penyisihan Piutang  PPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1755, '594113', 'Beban Penyisihan Piutang  PPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1756, '594114', 'Beban Penyisihan Piutang  PPnBM', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1757, '594114', 'Pengembalian Beban Penyisihan Piutang  PPnBM', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1758, '594115', 'Beban Penyisihan Piutang  PBB dan BPHTB', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1759, '594115', 'Pengembalian Beban Penyisihan Piutang  PBB dan BPHTB', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1760, '594116', 'Pengembalian Beban Penyisihan Piutang  Cukai dan Bea Materai', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1761, '594116', 'Beban Penyisihan Piutang  Cukai dan Bea Materai', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1762, '594117', 'Pengembalian Beban Penyisihan Piutang  Pajak Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1763, '594117', 'Beban Penyisihan Piutang  Pajak Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1764, '594118', 'Beban Penyisihan Piutang Tak Tertagih - Piutang Pajak Perdagangan Internasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1765, '594118', 'Pengembalian Beban Penyisihan Piutang Tak Tertagih - Piutang Pajak Perdagangan Internasional', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1766, '594119', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih - Piutang Bea Masuk Tindakan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1767, '594119', 'Beban Penyisihan Piutang Tidak Tertagih - Piutang Bea Masuk Tindakan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1768, '594211', 'Pengembalian Beban Penyisihan Piutang PNBP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1769, '594211', 'Beban Penyisihan Piutang PNBP', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1770, '594212', 'Pengembalian Beban Penyisihan Piutang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1771, '594212', 'Beban Penyisihan Piutang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1772, '594221', 'Beban Penyisihan Piutang PT PPA', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1773, '594221', 'Pengembalian Beban Penyisihan Piutang PT PPA', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1774, '594231', 'Beban Penyisihan Piutang Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1775, '594231', 'Pengembalian Beban Penyisihan Piutang Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1776, '594232', 'Beban Penyisihan Piutang RDI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1777, '594232', 'Pengembalian Beban Penyisihan Piutang RDI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1778, '594233', 'Pengembalian Beban Penyisihan Piutang Potensi Tunggakan Yang Dapat Ditagih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1779, '594233', 'Beban Penyisihan Piutang Potensi Tunggakan Yang Dapat Ditagih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1780, '594241', 'Pengembalian Beban Penyisihan Piutang Kredit Pemerintah Bidang Perkebunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1781, '594241', 'Beban Penyisihan Piutang Kredit Pemerintah Bidang Perkebunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1782, '594242', 'Beban Penyisihan Piutang Kredit Investasi Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1783, '594242', 'Pengembalian Beban Penyisihan Piutang Kredit Investasi Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1784, '594243', 'Beban Penyisihan Piutang Tidak Tertagih - Bagian Lancar Piutang Jangka Panjang Penanggulangan Lumpur Sidoarjo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1785, '594243', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih - Bagian Lancar Piutang Jangka Panjang Penanggulangan Lumpur Sidoarjo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1786, '594249', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih - Bagian Lancar Piutang Jangka Panjang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1787, '594249', 'Beban Penyisihan Piutang Tidak Tertagih - Bagian Lancar Piutang Jangka Panjang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1788, '594261', 'Beban Penyisihan Piutang Tidak Tertagih - Piutang Jangka Pendek Subsidi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1789, '594261', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih - Piutang Jangka Pendek Subsidi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1790, '594262', 'Beban Penyisihan Piutang Tidak Tertagih - Piutang Jangka Panjang Subsidi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1791, '594262', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih - Piutang Jangka Panjang Subsidi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1792, '594311', 'Pengembalian Beban Penyisihan Piutang Tagihan Penjualan Angsuran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1793, '594311', 'Beban Penyisihan Piutang Tagihan Penjualan Angsuran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1794, '594321', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih - Bagian Lancar Tagihan Penjualan Angsuran BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1795, '594321', 'Beban Penyisihan Piutang Tidak Tertagih - Bagian Lancar Tagihan Penjualan Angsuran BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1796, '594411', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih - Bagian Lancar Tagihan Tuntutan Perbendaharaan/Tuntutan Ganti Rugi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1797, '594411', 'Beban Penyisihan Piutang Tidak Tertagih - Bagian Lancar Tagihan Tuntutan Perbendaharaan/Tuntutan Ganti Rugi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1798, '594421', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih - Bagian Lancar Tagihan Tuntutan Perbendaharaan/ Tuntutan Ganti Rugi BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1799, '594421', 'Beban Penyisihan Piutang Tidak Tertagih - Bagian Lancar Tagihan Tuntutan Perbendaharaan/ Tuntutan Ganti Rugi BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1800, '594511', 'Beban Penyisihan Piutang Investasi Permanen', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1801, '594511', 'Pengembalian Beban Penyisihan Piutang Investasi Permanen', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1802, '594611', 'Beban Penyisihan Piutang BLU Pelayanan Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1803, '594611', 'Pengembalian Beban Penyisihan Piutang BLU Pelayanan Kesehatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1804, '594612', 'Beban Penyisihan Piutang BLU Pelayanan Pendidikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1805, '594612', 'Pengembalian Beban Penyisihan Piutang BLU Pelayanan Pendidikan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1806, '594613', 'Beban Penyisihan Piutang BLU Penunjang Konstruksi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1807, '594613', 'Pengembalian Beban Penyisihan Piutang BLU Penunjang Konstruksi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1808, '594614', 'Beban Penyisihan Piutang BLU Penyedia Jasa Telekomunikasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1809, '594614', 'Pengembalian Beban Penyisihan Piutang BLU Penyedia Jasa Telekomunikasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1810, '594619', 'Beban Penyisihan Piutang BLU Penyedia Barang dan Jasa Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1811, '594619', 'Pengembalian Beban Penyisihan Piutang BLU Penyedia Barang dan Jasa Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1812, '594621', 'Pengembalian Beban Penyisihan Piutang BLU Pengelola Kawasan Otorita', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1813, '594621', 'Beban Penyisihan Piutang BLU Pengelola Kawasan Otorita', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1814, '594622', 'Pengembalian Beban Penyisihan Piutang BLU Pengelola Kawasan Ekonomi Terpadu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1815, '594622', 'Beban Penyisihan Piutang BLU Pengelola Kawasan Ekonomi Terpadu', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1816, '594623', 'Beban Penyisihan Piutang BLU Pengelola Kawasan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1817, '594623', 'Pengembalian Beban Penyisihan Piutang BLU Pengelola Kawasan Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1818, '594631', 'Beban Penyisihan Piutang BLU Pengelola Dana Investasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1819, '594631', 'Pengembalian Beban Penyisihan Piutang BLU Pengelola Dana Investasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1820, '594632', 'Beban Penyisihan Piutang BLU Pengelola Dana Bergulir', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1821, '594632', 'Pengembalian Beban Penyisihan Piutang BLU Pengelola Dana Bergulir', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1822, '594639', 'Pengembalian Beban Penyisihan Piutang BLU Pengelola Dana Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1823, '594639', 'Beban Penyisihan Piutang BLU Pengelola Dana Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1824, '594641', 'Pengembalian Beban Penyisihan Piutang Kegiatan Operasional Lainnya BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1825, '594641', 'Beban Penyisihan Piutang Kegiatan Operasional Lainnya BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1826, '594651', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih - Piutang BLU yang Bersumber dari Entitas Pemerintah Pusat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1827, '594651', 'Beban Penyisihan Piutang Tidak Tertagih - Piutang BLU yang Bersumber dari Entitas Pemerintah Pusat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1828, '594711', 'Beban Penyisihan Piutang Sewa Tanah BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1829, '594711', 'Pengembalian Beban Penyisihan Piutang Sewa Tanah BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1830, '594712', 'Pengembalian Beban Penyisihan Piutang Sewa Gedung BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1831, '594712', 'Beban Penyisihan Piutang Sewa Gedung BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1832, '594713', 'Pengembalian Beban Penyisihan Piutang Sewa Ruangan BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1833, '594713', 'Beban Penyisihan Piutang Sewa Ruangan BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1834, '594714', 'Pengembalian Beban Penyisihan Piutang Sewa Peralatan dan Mesin BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1835, '594714', 'Beban Penyisihan Piutang Sewa Peralatan dan Mesin BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1836, '594719', 'Beban Penyisihan Piutang Sewa Lainnya BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1837, '594719', 'Pengembalian Beban Penyisihan Piutang Sewa Lainnya BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1838, '594721', 'Beban Penyisihan Piutang dari Penjualan Aset Tetap BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1839, '594721', 'Pengembalian Beban Penyisihan Piutang dari Penjualan Aset Tetap BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1840, '594722', 'Pengembalian Beban Penyisihan Piutang dari Penjualan Aset Lainnya BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1841, '594722', 'Beban Penyisihan Piutang dari Penjualan Aset Lainnya BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1842, '594791', 'Beban Penyisihan Piutang dari Kegiatan Non Operasional Lainnya BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1843, '594791', 'Pengembalian Beban Penyisihan Piutang dari Kegiatan Non Operasional Lainnya BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1844, '594811', 'Pengembalian Beban Dana Bergulir Diragukan Tertagih - Program Kemitraan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1845, '594811', 'Beban Dana Bergulir Diragukan Tertagih - Program Kemitraan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1846, '594812', 'Pengembalian Beban Dana Bergulir Diragukan Tertagih - Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1847, '594812', 'Beban Dana Bergulir Diragukan Tertagih - Kementerian Negara/Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1848, '594813', 'Beban Dana Bergulir Diragukan Tertagih - Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1849, '594813', 'Pengembalian Beban Dana Bergulir Diragukan Tertagih - Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1850, '594821', 'Pengembalian Beban Investasi Jangka Panjang Non Permanen Lainnya Diragukan Realisasinya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1851, '594821', 'Beban Investasi Jangka Panjang Non Permanen Lainnya Diragukan Realisasinya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1852, '594822', 'Pengembalian Beban Investasi Non Permanen BLU Bentuk Tagihan Diragukan Tertagih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1853, '594822', 'Beban Investasi Non Permanen BLU Bentuk Tagihan Diragukan Tertagih', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1854, '594911', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Tagihan Penjualan Angsuran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1855, '594911', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Tagihan Penjualan Angsuran', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1856, '594921', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Tagihan Penjualan Angsuran BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1857, '594921', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Tagihan Penjualan Angsuran BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1858, '594931', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Tuntutan Perbendaharaan/ Tuntutan Ganti Rugi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1859, '594931', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Tuntutan Perbendaharaan/ Tuntutan Ganti Rugi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1860, '594941', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Tuntutan Perbendaharaan/ Tuntutan Ganti Rugi BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1861, '594941', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Tuntutan Perbendaharaan/ Tuntutan Ganti Rugi BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1862, '594951', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Piutang Jangka Panjang Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1863, '594951', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Piutang Jangka Panjang Penerusan Pinjaman', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1864, '594952', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Aset Lainnya RDI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1865, '594952', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Aset Lainnya RDI', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1866, '594953', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Aset Lainnya Kredit Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1867, '594953', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Aset Lainnya Kredit Program', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1868, '594961', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Kredit Pemerintah Bidang Pertanian dan Perkebunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1869, '594961', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Kredit Pemerintah Bidang Pertanian dan Perkebunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1870, '594962', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Kredit Investasi Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1871, '594962', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Kredit Investasi Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1872, '594963', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Penjaminan Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1873, '594963', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Penjaminan Pemerintah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1874, '594991', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Piutang Jangka Panjang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1875, '594991', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Piutang Jangka Panjang Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1876, '594992', 'Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Piutang Jangka Panjang Penanggulangan Lumpur Sidoarjo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1877, '594992', 'Pengembalian Beban Penyisihan Piutang Tidak Tertagih Jangka Panjang - Piutang Jangka Panjang Penanggulangan Lumpur Sidoarjo', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1878, '595111', 'Beban Aset Ekstrakomtabel Tanah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1879, '595111', 'Pengembalian Beban Aset Ekstrakomtabel Tanah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1880, '595112', 'Pengembalian Beban Aset Ekstrakomtabel Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1881, '595112', 'Beban Aset Ekstrakomtabel Peralatan dan Mesin', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1882, '595113', 'Beban Aset Ekstrakomtabel Gedung dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1883, '595113', 'Pengembalian Beban Aset Ekstrakomtabel Gedung dan Bangunan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1884, '595114', 'Beban Aset Ekstrakomtabel Jalan, Irigasi dan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1885, '595114', 'Pengembalian Beban Aset Ekstrakomtabel Jalan, Irigasi dan Jaringan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1886, '595115', 'Pengembalian Beban Aset Ekstrakomtabel Aset Tetap Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1887, '595115', 'Beban Aset Ekstrakomtabel Aset Tetap Lainnya', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1888, '595116', 'Pengembalian Beban Aset Ekstrakomtabel Konstruksi Dalam Pengerjaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1889, '595116', 'Beban Aset Ekstrakomtabel Konstruksi Dalam Pengerjaan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1890, '595117', 'Beban Aset Ekstrakomtabel Aset Tak Berwujud', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1891, '595117', 'Pengembalian Beban Aset Ekstrakomtabel Aset Tak Berwujud', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1892, '595121', 'Beban Aset Ekstrakomtabel Tanah - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1893, '595121', 'Pengembalian Beban Aset Ekstrakomtabel Tanah - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1894, '595122', 'Beban Aset Ekstrakomtabel Peralatan dan Mesin - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1895, '595122', 'Pengembalian Beban Aset Ekstrakomtabel Peralatan dan Mesin - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1896, '595123', 'Beban Aset Ekstrakomtabel Gedung dan Bangunan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1897, '595123', 'Pengembalian Beban Aset Ekstrakomtabel Gedung dan Bangunan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1898, '595124', 'Beban Aset Ekstrakomtabel Jalan, Irigasi dan Jaringan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1899, '595124', 'Pengembalian Beban Aset Ekstrakomtabel Jalan, Irigasi dan Jaringan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1900, '595125', 'Beban Aset Ekstrakomtabel Aset Tetap Lainnya - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1901, '595125', 'Pengembalian Beban Aset Ekstrakomtabel Aset Tetap Lainnya - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1902, '595126', 'Beban Aset Ekstrakomtabel Konstruksi Dalam Pengerjaan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1903, '595126', 'Pengembalian Beban Aset Ekstrakomtabel Konstruksi Dalam Pengerjaan - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1904, '595127', 'Beban Aset Ekstrakomtabel Aset Tak Berwujud - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1905, '595127', 'Pengembalian Beban Aset Ekstrakomtabel Aset Tak Berwujud - BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1906, '596111', 'Pengembalian Beban Kerugian Pelepasan Aset', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1907, '596111', 'Beban Kerugian Pelepasan Aset', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1908, '596112', 'Beban Kerugian Tuntutan Ganti Rugi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1909, '596112', 'Pengembalian Beban Kerugian Tuntutan Ganti Rugi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1910, '596121', 'Beban Persediaan Rusak/Usang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1911, '596121', 'Pengembalian Beban Persediaan Rusak/Usang', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1912, '596132', 'Beban Penghapusan Piutang TP/TGR Kementerian Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1913, '596132', 'Pengembalian Beban Penghapusan Piutang TP/TGR Kementerian Lembaga', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1914, '596211', 'Pengembalian Beban Kerugian Selisih Kurs Belum Terealisasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1915, '596211', 'Beban Kerugian Selisih Kurs Belum Terealisasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1916, '596212', 'Beban Kerugian Selisih Kurs Belum Terealisasi BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1917, '596212', 'Pengembalian Beban Kerugian Selisih Kurs Belum Terealisasi BLU', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1918, '596221', 'Pengembalian Beban Penyesuaian Nilai Investasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1919, '596221', 'Beban Penyesuaian Nilai Investasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1920, '596321', 'Beban Pihak Ketiga Panas Bumi - Reimbursement PPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1921, '596321', 'Pengembalian Beban Pihak Ketiga Panas Bumi - Reimbursement PPN', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1922, '596322', 'Beban Pihak Ketiga Panas Bumi - Penggantian Bonus Produksi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1923, '596322', 'Pengembalian Beban Pihak Ketiga Panas Bumi - Penggantian Bonus Produksi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1924, '596411', 'Beban Penyesuaian Selisih Kurs', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1925, '596411', 'Pengembalian Beban Penyesuaian Selisih Kurs', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1926, '596511', 'Pengembalian Penyetoran PNBP oleh BLU ke Kas Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1927, '596511', 'Penyetoran PNBP oleh BLU ke Kas Negara', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1928, '596611', 'Pengembalian Beban Lain-lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1929, '596611', 'Beban Lain-lain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1930, '596612', 'Beban Lainnya atas Pendapatan Perolehan Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1931, '596612', 'Pengembalian Beban Lainnya atas Pendapatan Perolehan Jasa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1932, '597111', 'Pengembalian Pembulatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1933, '597111', 'Pembulatan', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1934, '598111', 'Pengembalian Suspense Beban', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1935, '598111', 'Suspense Beban', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1936, '599111', 'Pengembalian Earned Discount', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1937, '599111', 'Earned Discount', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1938, '599113', 'Discount Taken', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1939, '599113', 'Pengembalian Discount Taken', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1940, '599114', 'Rounding', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1941, '599114', 'Pengembalian Rounding', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1942, '599211', 'Pengembalian PO Rate Variance Gain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1943, '599211', 'PO Rate Variance Gain', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1944, '599212', 'Pengembalian PO Rate Variance Loss', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1945, '599212', 'PO Rate Variance Loss', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1946, '599213', 'Pengembalian Purchase Price Variance', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1947, '599213', 'Purchase Price Variance', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1948, '599214', 'Pengembalian Invoice Price Variance', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1949, '599214', 'Invoice Price Variance', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1950, '599311', 'Kesalahan Bank (Bank Error)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1951, '599311', 'Pengembalian Kesalahan Bank (Bank Error)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1952, '599312', 'Pengembalian Biaya Perbankan (Bank Charge)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1953, '599312', 'Biaya Perbankan (Bank Charge)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1954, '611215', 'Beban Dana Bagi Hasil PBB Bagian Pemerintah Pusat yang Dikembalikan Sama Rata ke Kabupaten/Kota', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1955, '611215', 'Pengembalian Beban Dana Bagi Hasil PBB Bagian Pemerintah Pusat yang Dikembalikan Sama Rata ke Kabupaten/Kota', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1956, '612511', 'Beban Dana Bagi Hasil Kehutanan - IIUPH/IHPH', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1957, '612511', 'Pengembalian Beban Dana Bagi Hasil Kehutanan - IIUPH/IHPH', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1958, '612512', 'Pengembalian Beban Dana Bagi Hasil Kehutanan - PSDH', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1959, '612512', 'Beban Dana Bagi Hasil Kehutanan - PSDH', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1960, '612513', 'Pengembalian Beban Dana Bagi Hasil Kehutanan - Dana Reboisasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1961, '612513', 'Beban Dana Bagi Hasil Kehutanan - Dana Reboisasi', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1962, '654111', 'Pengembalian Beban Dana Tunjangan Profesi Guru PNSD (TPG)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1963, '654111', 'Beban Dana Tunjangan Profesi Guru PNSD (TPG)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1964, '654211', 'Pengembalian Beban Dana Tambahan Penghasilan Guru Pegawai Negeri Sipil Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1965, '654211', 'Beban Dana Tambahan Penghasilan Guru Pegawai Negeri Sipil Daerah', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1966, '654311', 'Beban Dana Bantuan Operasional Sekolah (BOS)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1967, '654311', 'Pengembalian Beban Dana Bantuan Operasional Sekolah (BOS)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1968, '654411', 'Pengembalian Beban Dana Insentif Daerah (DID)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1969, '654411', 'Beban Dana Insentif Daerah (DID)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1970, '654511', 'Pengembalian Beban Dana Proyek Pemerintah Daerah dan Desentralisasi (P2D2)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1971, '654511', 'Beban Dana Proyek Pemerintah Daerah dan Desentralisasi (P2D2)', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1972, '654611', 'Beban Dana Darurat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1973, '654611', 'Pengembalian Beban Dana Darurat', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1974, '655111', 'Beban Dana Desa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);
INSERT INTO `bios_account_codes` VALUES (1975, '655111', 'Pengembalian Beban Dana Desa', '2023-12-22 16:23:26', '2023-12-22 16:23:26', NULL);

-- ----------------------------
-- Table structure for bios_akreditasi_institusi_prodi
-- ----------------------------
DROP TABLE IF EXISTS `bios_akreditasi_institusi_prodi`;
CREATE TABLE `bios_akreditasi_institusi_prodi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `institusi_akreditasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `peringkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `skor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_mulai` date NULL DEFAULT NULL,
  `tgl_akhir` date NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_akreditasi_institusi_prodi
-- ----------------------------
INSERT INTO `bios_akreditasi_institusi_prodi` VALUES (1, '2024-01-11', 'Poltekkes Kemenkes Medan', 'BAN-PT', 'A', '1000', '2024-01-01', '2024-01-31', 1, 1, '2024-01-12 09:28:44', '2024-01-12 09:32:51', NULL, '2024-01-12 09:32:51');

-- ----------------------------
-- Table structure for bios_alumni
-- ----------------------------
DROP TABLE IF EXISTS `bios_alumni`;
CREATE TABLE `bios_alumni`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `fakultas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `prodi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bekerja` int(11) NULL DEFAULT NULL,
  `belum_bekerja` int(11) NULL DEFAULT NULL,
  `lanjut_kuliah` int(11) NULL DEFAULT NULL,
  `wiraswasta` int(11) NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_alumni
-- ----------------------------
INSERT INTO `bios_alumni` VALUES (1, '2024-01-01', 'test', 'Teknologi Laboratorium Medis', 'D3 Teknologi Laboratorium Medis', 1, 2, 3, 4, 1, 1, '2024-01-05 08:15:08', '2024-01-05 08:26:26', NULL, '2024-01-05 08:26:26');
INSERT INTO `bios_alumni` VALUES (2, '2024-01-07', 'Kesehatan', 'Keperawatan', 'D3 Keperawatan', 1, 2, 3, 4, 1, NULL, '2024-01-08 08:54:59', '2024-01-08 08:55:00', NULL, '2024-01-08 08:55:00');

-- ----------------------------
-- Table structure for bios_bank_codes
-- ----------------------------
DROP TABLE IF EXISTS `bios_bank_codes`;
CREATE TABLE `bios_bank_codes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 83 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_bank_codes
-- ----------------------------
INSERT INTO `bios_bank_codes` VALUES (1, '002', 'BANK BRI', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (2, '008', 'BANK MANDIRI', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (3, '009', 'BANK BNI', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (4, '011', 'BANK DANAMON', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (5, '013', 'BANK PERMATA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (6, '014', 'BANK BCA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (7, '016', 'BANK BII', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (8, '019', 'BANK PANIN', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (9, '022', 'BANK CIMB NIAGA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (10, '026', 'BANK LIPPO', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (11, '028', 'BANK NISP', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (12, '031', 'BANK CITY', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (13, '032', 'BANK JP MORGAN', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (14, '037', 'BANK ARTHA GRAHA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (15, '040', 'BANK BANGKOK', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (16, '041', 'BANK HSBC', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (17, '042', 'BANK OF TOKYO MITSUBISHI', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (18, '045', 'BANK SUMITOMO MITSUI IND', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (19, '046', 'BANK DBS', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (20, '048', 'BANK MIZUHO', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (21, '050', 'BANK STANDARD CHARTERED', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (22, '052', 'BANK ABN AMRO', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (23, '061', 'ANZ PANIN', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (24, '067', 'BANK DEUTSCHE', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (25, '089', 'BANK RABO', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (26, '110', 'BANK JABAR BANTEN', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (27, '111', 'BANK DKI', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (28, '112', 'BANK DI YOGYAKARTA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (29, '113', 'BANK JATENG', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (30, '114', 'BANK JAWA TIMUR', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (31, '115', 'BANK JAMBI', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (32, '115', 'Bank Jambi', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (33, '116', 'BANK BPD ACEH', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (34, '116', 'BANK BPD ACEH', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (35, '117', 'BANK SUMUT', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (36, '118', 'BANK NAGARI', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (37, '119', 'BANK RIAU', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (38, '120', 'BANK SUMSEL BABEL', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (39, '120', 'BANK SUMSEL BABEL', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (40, '121', 'BANK LAMPUNG', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (41, '122', 'BANK KALSEL', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (42, '123', 'BANK KALBAR', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (43, '124', 'BANK KALTIM SYARIAH', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (44, '124', 'BANK KALTIM', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (45, '125', 'BANK KALTENG', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (46, '126', 'BANK SULSELBAR', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (47, '127', 'BANK SULUT', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (48, '128', 'BANK NTB SYARIAH', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (49, '128', 'BANK NTB', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (50, '129', 'BPD BALI', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (51, '130', 'BANK NTT', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (52, '131', 'BANK MALUKU', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (53, '132', 'BANK PAPUA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (54, '133', 'BANK BENGKULU', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (55, '134', 'BANK SULTENG', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (56, '135', 'BANK SULTRA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (57, '147', 'BANK MUAMALAT INDONESIA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (58, '153', 'BANK SINAR MAS', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (59, '200', 'BANK TABUNGAN NEGARA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (60, '200', 'BANK TABUNGAN NEGARA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (61, '213', 'BTPN', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (62, '330', 'BANK OF AMERICA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (63, '422', 'BRI Syariah', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (64, '426', 'BANK MEGA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (65, '427', 'BANK BNI SYARIAH', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (66, '441', 'BANK BUKOPIN', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (67, '451', 'BANK SYARIAH INDONESIA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (68, '484', 'BANK HANA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (69, '494', 'BRI Agro', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (70, '506', 'BANK MEGA', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (71, '506', 'BANK MEGA SYARIAH', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (72, '517', 'PANIN DUBAI SYARIAH', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (73, '521', 'Bukopin Syariah', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (74, '547', 'BTPN Syariah', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (75, '553', 'Mayora', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (76, '555', 'BANK BRI Cab. Manna', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (77, '601', 'Pos', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (78, '773', 'BNI Syariah', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (79, '781', 'BJB Syariah', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (80, '949', 'BANK CHINA TRUST', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (81, '950', 'BANK COMMONWEALTH', NULL, NULL, NULL);
INSERT INTO `bios_bank_codes` VALUES (82, '990', 'Bank LN', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for bios_jumlah_dosen_yang_berkegiatan_di_luar_kampus
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_dosen_yang_berkegiatan_di_luar_kampus`;
CREATE TABLE `bios_jumlah_dosen_yang_berkegiatan_di_luar_kampus`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `berkegiatan_di_pt_lain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `berkegiatan_di_qs_100` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bekerja_sebagai_praktisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `membina_mahasiswa_prestasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_dosen_yang_berkegiatan_di_luar_kampus
-- ----------------------------
INSERT INTO `bios_jumlah_dosen_yang_berkegiatan_di_luar_kampus` VALUES (1, '2024-01-17', '1', '2', '3', '5', 1, 1, '2024-01-18 06:03:00', '2024-01-18 06:05:11', NULL, '2024-01-18 06:05:11');

-- ----------------------------
-- Table structure for bios_jumlah_haki
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_haki`;
CREATE TABLE `bios_jumlah_haki`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `diakui` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `dalam_proses` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_haki
-- ----------------------------
INSERT INTO `bios_jumlah_haki` VALUES (1, '2024-01-09', '3', '4', 1, NULL, '2024-01-10 08:32:57', '2024-01-10 08:32:58', NULL, '2024-01-10 08:32:58');

-- ----------------------------
-- Table structure for bios_jumlah_kegiatan_pengabdian_kepada_masyarakat
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_kegiatan_pengabdian_kepada_masyarakat`;
CREATE TABLE `bios_jumlah_kegiatan_pengabdian_kepada_masyarakat`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_kegiatan_pengabdian_kepada_masyarakat
-- ----------------------------
INSERT INTO `bios_jumlah_kegiatan_pengabdian_kepada_masyarakat` VALUES (1, '2024-01-11', '45', 1, 1, '2024-01-12 08:03:02', '2024-01-12 08:25:10', NULL, '2024-01-12 08:25:10');

-- ----------------------------
-- Table structure for bios_jumlah_kerjasama
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_kerjasama`;
CREATE TABLE `bios_jumlah_kerjasama`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `jumlah_pihak_ks` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_perjanjian_ks` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_kerjasama
-- ----------------------------
INSERT INTO `bios_jumlah_kerjasama` VALUES (1, '2024-01-04', '3', '4', 1, NULL, '2024-01-05 09:51:20', '2024-01-05 09:51:21', NULL, '2024-01-05 09:51:21');

-- ----------------------------
-- Table structure for bios_jumlah_kerjasama_prodi_dan_mitra
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_kerjasama_prodi_dan_mitra`;
CREATE TABLE `bios_jumlah_kerjasama_prodi_dan_mitra`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `prodi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_mitra` int(11) NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_kerjasama_prodi_dan_mitra
-- ----------------------------
INSERT INTO `bios_jumlah_kerjasama_prodi_dan_mitra` VALUES (1, '2024-01-07', 'D3 Farmasi', 10, 1, NULL, '2024-01-08 04:37:20', '2024-01-08 04:37:21', NULL, '2024-01-08 04:37:21');

-- ----------------------------
-- Table structure for bios_jumlah_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_mahasiswa`;
CREATE TABLE `bios_jumlah_mahasiswa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `fakultas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `prodi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_mahasiswa
-- ----------------------------
INSERT INTO `bios_jumlah_mahasiswa` VALUES (1, '2024-01-08', 'Kesehatan', 'Keperawatan', 'D3 Keperawatan', 'aktif', '1000', 1, NULL, '2024-01-09 04:29:04', '2024-01-09 04:29:07', NULL, '2024-01-09 04:29:07');
INSERT INTO `bios_jumlah_mahasiswa` VALUES (2, '2024-01-23', 'Kesehatan', 'Sanitasi', 'D3 Sanitasi', 'mendaftar', '100', 1, 1, '2024-01-23 03:27:24', '2024-01-23 03:28:35', NULL, '2024-01-23 03:28:35');

-- ----------------------------
-- Table structure for bios_jumlah_mahasiswa_berprestasi
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_mahasiswa_berprestasi`;
CREATE TABLE `bios_jumlah_mahasiswa_berprestasi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `fakultas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `prodi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bidang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_mahasiswa_berprestasi
-- ----------------------------
INSERT INTO `bios_jumlah_mahasiswa_berprestasi` VALUES (1, '2024-01-08', 'Kesehatan', 'Keperawatan', 'D3 Keperawatan', 'akademik', 'olahraga', 'nasional', '10', 1, NULL, '2024-01-09 05:17:00', '2024-01-09 05:17:01', NULL, '2024-01-09 05:17:01');

-- ----------------------------
-- Table structure for bios_jumlah_mahasiswa_di_luar_kampus
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_mahasiswa_di_luar_kampus`;
CREATE TABLE `bios_jumlah_mahasiswa_di_luar_kampus`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `fakultas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_mahasiswa_di_luar_kampus
-- ----------------------------
INSERT INTO `bios_jumlah_mahasiswa_di_luar_kampus` VALUES (1, '2024-01-09', 'Kesehatan', 'Teknologi Laboratorium Medis', '40', 1, 1, '2024-01-10 02:54:42', '2024-01-10 07:09:09', NULL, '2024-01-10 07:09:09');

-- ----------------------------
-- Table structure for bios_jumlah_mitra_kerjasama_diklat
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_mitra_kerjasama_diklat`;
CREATE TABLE `bios_jumlah_mitra_kerjasama_diklat`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_mitra_kerjasama_diklat
-- ----------------------------
INSERT INTO `bios_jumlah_mitra_kerjasama_diklat` VALUES (1, '2024-01-17', '100', 1, NULL, '2024-01-18 04:56:55', '2024-01-18 04:56:56', NULL, '2024-01-18 04:56:56');

-- ----------------------------
-- Table structure for bios_jumlah_penerima_beasiswa
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_penerima_beasiswa`;
CREATE TABLE `bios_jumlah_penerima_beasiswa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `fakultas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `prodi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `program` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_penerima_beasiswa
-- ----------------------------
INSERT INTO `bios_jumlah_penerima_beasiswa` VALUES (1, '2024-01-07', 'Kesehatan', 'Keperawatan', 'D3 Keperawatan', 'BIDIKMISI', '100', 1, NULL, '2024-01-08 09:58:59', '2024-01-08 10:00:01', NULL, '2024-01-08 10:00:01');

-- ----------------------------
-- Table structure for bios_jumlah_penerima_kegiatan_pengabdian_pada_masyarakat
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_penerima_kegiatan_pengabdian_pada_masyarakat`;
CREATE TABLE `bios_jumlah_penerima_kegiatan_pengabdian_pada_masyarakat`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `jumlah_penerima` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_penerima_kegiatan_pengabdian_pada_masyarakat
-- ----------------------------
INSERT INTO `bios_jumlah_penerima_kegiatan_pengabdian_pada_masyarakat` VALUES (1, '2024-01-11', '100', 1, NULL, '2024-01-12 08:36:36', '2024-01-12 08:36:37', NULL, '2024-01-12 08:36:37');

-- ----------------------------
-- Table structure for bios_jumlah_peserta_diklat
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_peserta_diklat`;
CREATE TABLE `bios_jumlah_peserta_diklat`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `jenis_diklat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_judul_diklat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_peserta_diklat
-- ----------------------------
INSERT INTO `bios_jumlah_peserta_diklat` VALUES (1, '2024-01-15', 'publik', '4', '80', 1, NULL, '2024-01-16 09:15:12', '2024-01-16 09:15:13', NULL, '2024-01-16 09:15:13');

-- ----------------------------
-- Table structure for bios_jumlah_peserta_sertifikasi
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_peserta_sertifikasi`;
CREATE TABLE `bios_jumlah_peserta_sertifikasi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `jenis_sertifikasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_judul_sertifikasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_peserta_sertifikasi
-- ----------------------------
INSERT INTO `bios_jumlah_peserta_sertifikasi` VALUES (1, '2024-01-15', 'publik', '5', '100', 1, NULL, '2024-01-16 08:53:59', '2024-01-16 08:54:03', NULL, '2024-01-16 08:54:03');

-- ----------------------------
-- Table structure for bios_jumlah_prodi_kampus_merdeka
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_prodi_kampus_merdeka`;
CREATE TABLE `bios_jumlah_prodi_kampus_merdeka`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `fakultas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total_prodi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_prodi_kampus_merdeka
-- ----------------------------
INSERT INTO `bios_jumlah_prodi_kampus_merdeka` VALUES (1, '2024-01-17', 'Kesehatan', '18', '11', 1, 1, '2024-01-18 04:36:56', '2024-01-18 04:39:41', NULL, '2024-01-18 04:39:41');

-- ----------------------------
-- Table structure for bios_jumlah_produk_inovasi
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_produk_inovasi`;
CREATE TABLE `bios_jumlah_produk_inovasi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_produk_inovasi
-- ----------------------------
INSERT INTO `bios_jumlah_produk_inovasi` VALUES (1, '2024-01-09', '100', 1, NULL, '2024-01-10 08:55:24', '2024-01-10 08:55:25', NULL, '2024-01-10 08:55:25');

-- ----------------------------
-- Table structure for bios_jumlah_publikasi_penelitian
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_publikasi_penelitian`;
CREATE TABLE `bios_jumlah_publikasi_penelitian`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nasional` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `internasional` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `internasional_terindex_global` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `prosiding` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `seminar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_publikasi_penelitian
-- ----------------------------
INSERT INTO `bios_jumlah_publikasi_penelitian` VALUES (1, '2024-01-10', 'Keperawatan', '1', '2', '3', '4', '5', 'aktif', 1, 1, '2024-01-11 07:47:24', '2024-01-11 07:48:46', NULL, '2024-01-11 07:48:46');
INSERT INTO `bios_jumlah_publikasi_penelitian` VALUES (2, '2024-01-10', 'Teknologi Laboratorium Medis', '4', '5', '6', NULL, NULL, 'publikasi', 1, NULL, '2024-01-11 07:57:37', '2024-01-11 07:57:39', NULL, '2024-01-11 07:57:39');

-- ----------------------------
-- Table structure for bios_jumlah_tenaga_kependidikan
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_tenaga_kependidikan`;
CREATE TABLE `bios_jumlah_tenaga_kependidikan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pegawai_pppk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `non_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_tenaga_kependidikan
-- ----------------------------
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (1, '0', '50', '301', '2023-12-13', 1, 1, '2023-12-13 04:54:27', '2023-12-15 04:35:11', NULL, '2023-12-15 04:35:11');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (2, '1', '2', '3', '2023-12-14', 1, NULL, '2023-12-14 09:18:22', '2023-12-15 04:37:21', NULL, '2023-12-15 04:37:21');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (3, '200', '300', '100', '2023-12-12', 1, 1, '2023-12-15 04:38:06', '2023-12-15 04:42:12', NULL, '2023-12-15 04:42:12');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (5, '20', '30', '10', '2023-12-11', 1, NULL, '2023-12-15 04:47:13', '2023-12-15 04:47:15', NULL, '2023-12-15 04:47:15');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (6, '20', '31', '10', '2023-12-10', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:09:42', NULL, '2023-12-18 04:09:42');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (7, '20', '32', '10', '2023-12-09', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:09:46', NULL, '2023-12-18 04:09:46');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (8, '20', '33', '10', '2023-12-08', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:09:50', NULL, '2023-12-18 04:09:50');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (9, '20', '34', '10', '2023-12-07', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:09:55', NULL, '2023-12-18 04:09:55');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (10, '20', '35', '10', '2023-12-06', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:09:59', NULL, '2023-12-18 04:09:59');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (11, '20', '36', '10', '2023-12-05', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:03', NULL, '2023-12-18 04:10:03');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (12, '20', '37', '10', '2023-12-04', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:07', NULL, '2023-12-18 04:10:07');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (13, '20', '38', '10', '2023-12-03', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:11', NULL, '2023-12-18 04:10:11');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (14, '20', '39', '10', '2023-12-02', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:17', NULL, '2023-12-18 04:10:17');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (15, '20', '40', '10', '2023-12-01', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:21', NULL, '2023-12-18 04:10:21');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (16, '20', '41', '10', '2023-11-30', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:27', NULL, '2023-12-18 04:10:27');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (17, '20', '42', '10', '2023-11-29', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:31', NULL, '2023-12-18 04:10:31');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (18, '20', '43', '10', '2023-11-28', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:37', NULL, '2023-12-18 04:10:37');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (19, '20', '44', '10', '2023-11-27', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:44', NULL, '2023-12-18 04:10:44');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (20, '20', '45', '10', '2023-11-26', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:48', NULL, '2023-12-18 04:10:48');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (21, '20', '46', '10', '2023-11-25', 1, NULL, '2023-12-15 04:47:13', '2023-12-18 04:10:52', NULL, '2023-12-18 04:10:52');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (22, '12', '13', '11', '2023-12-15', 1, 1, '2023-12-18 05:03:01', '2024-01-10 02:11:09', NULL, '2024-01-10 02:11:09');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (23, '15', '5', '14', '2024-01-25', 1, 1, '2024-01-26 07:22:30', '2024-01-30 07:49:25', NULL, '2024-01-30 07:49:25');
INSERT INTO `bios_jumlah_tenaga_kependidikan` VALUES (24, '18', '19', '17', '2024-01-24', 1, NULL, '2024-01-26 07:23:01', '2024-01-26 07:23:01', NULL, '2024-01-26 07:23:01');

-- ----------------------------
-- Table structure for bios_jumlah_tenaga_pendidik
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_tenaga_pendidik`;
CREATE TABLE `bios_jumlah_tenaga_pendidik`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `prodi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `professor_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `professor_non_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lektor_kepala_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lektor_kepala_non_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lektor_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lektor_non_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `asisten_ahli_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `asisten_ahli_non_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tenaga_pengajar_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tenaga_pengajar_non_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `terkualifikasi_s3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `terkualifikasi_memiliki_sertifikat_kompetensi_profesi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `terkualifikasi_pengalaman_sebagai_praktisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `terkualifikasi_berprestasi_internasional` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `instruktur_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `instruktur_non_pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pegawai_pppk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nidk_nidn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 80 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_tenaga_pendidik
-- ----------------------------
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (1, '2023-12-18', 'TLM', 'TLM', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', 1, 1, '2023-12-19 11:31:13', '2023-12-19 08:33:29', NULL, '2023-12-19 08:33:29');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (2, '2023-12-19', 'Keperawatan', 'D3 Keperawatan', '110', '22', '33', '44', '55', '66', '77', '88', '99', '10', '11', '12', '13', '14', '15', '16', '17', '18', 1, 1, '2023-12-20 05:02:31', '2023-12-20 05:03:23', NULL, '2023-12-20 05:03:23');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (3, '2023-12-30', 'Farmasi', 'D3 Farmasi', '87', '55', '40', '90', '70', '39', '34', '3', '39', '54', '6', '58', '93', '96', '99', '97', '92', '27', 1, NULL, '2024-01-30 08:01:40', '2024-01-30 08:01:41', '2024-02-12 14:50:43', '2024-01-30 08:01:41');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (4, '2023-12-31', 'Farmasi', 'D3 Farmasi', '23', '97', '52', '44', '79', '24', '30', '73', '65', '2', '48', '81', '75', '19', '100', '76', '27', '31', 1, NULL, '2024-01-30 08:02:13', '2024-01-30 08:02:14', '2024-02-12 14:50:43', '2024-01-30 08:02:14');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (5, '2024-01-28', 'Farmasi', 'D3 Farmasi', '37', '63', '98', '23', '12', '87', '1', '73', '75', '59', '74', '19', '13', '84', '70', '74', '16', '16', 1, NULL, '2024-01-30 08:03:23', '2024-01-30 08:03:24', '2024-02-12 14:50:43', '2024-01-30 08:03:24');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (6, '2024-01-29', 'Farmasi', 'D3 Farmasi', '24', '19', '28', '18', '22', '76', '3', '22', '36', '100', '31', '28', '71', '38', '14', '96', '92', '41', 1, NULL, '2024-01-30 08:04:00', '2024-01-30 08:04:00', '2024-02-12 14:50:43', '2024-01-30 08:04:00');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (7, '2023-12-01', 'Gizi', 'D3 Gizi', '68', '48', '56', '62', '2', '57', '75', '81', '8', '85', '100', '49', '2', '82', '44', '30', '77', '4', 1, NULL, '2024-01-30 08:06:11', '2024-01-30 08:06:12', NULL, '2024-01-30 08:06:12');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (8, '2023-12-02', 'Gizi', 'D3 Gizi', '82', '58', '78', '2', '38', '13', '90', '20', '43', '1', '13', '73', '83', '18', '60', '50', '18', '26', 1, NULL, '2024-01-30 08:06:37', '2024-01-30 08:06:38', NULL, '2024-01-30 08:06:38');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (9, '2024-01-01', 'Gizi', 'D3 Gizi', '80', '27', '19', '95', '7', '90', '100', '97', '40', '57', '57', '72', '92', '91', '44', '17', '84', '87', 1, NULL, '2024-01-30 08:06:58', '2024-01-30 08:07:00', NULL, '2024-01-30 08:07:00');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (10, '2024-01-02', 'Gizi', 'D3 Gizi', '18', '5', '40', '38', '79', '38', '16', '76', '73', '62', '27', '96', '53', '78', '38', '33', '81', '21', 1, NULL, '2024-01-30 08:07:28', '2024-01-30 08:07:29', NULL, '2024-01-30 08:07:29');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (11, '2023-12-01', 'Kebidanan', 'D3 Kebidanan', '52', '51', '21', '13', '6', '43', '85', '13', '24', '70', '2', '9', '85', '88', '92', '66', '21', '26', 1, NULL, '2024-01-30 08:08:15', '2024-01-30 08:08:17', NULL, '2024-01-30 08:08:17');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (12, '2023-12-02', 'Kebidanan', 'D3 Kebidanan', '25', '65', '18', '71', '22', '30', '81', '73', '90', '49', '71', '58', '47', '91', '69', '55', '79', '21', 1, NULL, '2024-01-30 08:08:40', '2024-01-30 08:08:41', NULL, '2024-01-30 08:08:41');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (13, '2024-01-03', 'Kebidanan', 'D3 Kebidanan', '83', '5', '85', '24', '88', '71', '60', '66', '45', '47', '40', '99', '38', '68', '15', '64', '48', '23', 1, NULL, '2024-01-30 08:09:04', '2024-01-30 08:09:06', NULL, '2024-01-30 08:09:06');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (14, '2024-01-05', 'Kebidanan', 'D3 Kebidanan', '21', '73', '39', '70', '21', '43', '9', '58', '3', '29', '64', '76', '73', '75', '100', '24', '62', '33', 1, NULL, '2024-01-30 08:09:25', '2024-01-30 08:09:26', NULL, '2024-01-30 08:09:26');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (15, '2023-12-03', 'Kebidanan', 'D3 Kebidanan Tapanuli Utara', '13', '65', '31', '64', '14', '97', '10', '48', '80', '34', '29', '38', '81', '64', '99', '3', '6', '87', 1, NULL, '2024-01-30 08:10:20', '2024-01-30 08:10:21', NULL, '2024-01-30 08:10:21');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (16, '2023-04-06', 'Kebidanan', 'D3 Kebidanan', '59', '59', '82', '38', '94', '4', '1', '58', '8', '45', '66', '19', '71', '90', '46', '67', '68', '18', 1, NULL, '2024-01-30 08:10:44', '2024-01-30 08:10:45', NULL, '2024-01-30 08:10:45');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (17, '2024-01-05', 'Kebidanan', 'D3 Kebidanan Tapanuli Utara', '26', '85', '100', '20', '59', '40', '28', '33', '73', '19', '85', '47', '34', '87', '12', '13', '67', '22', 1, NULL, '2024-01-30 08:11:10', '2024-01-30 08:11:14', NULL, '2024-01-30 08:11:14');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (18, '2024-01-06', 'Kebidanan', 'D3 Kebidanan Tapanuli Utara', '3', '38', '35', '6', '80', '43', '27', '78', '72', '74', '12', '39', '46', '5', '21', '51', '95', '82', 1, NULL, '2024-01-30 08:11:36', '2024-01-30 08:11:37', NULL, '2024-01-30 08:11:37');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (19, '2023-12-01', 'Kebidanan', 'D3 Kebidanan Tapanuli Utara', '80', '47', '48', '77', '44', '59', '42', '42', '97', '44', '86', '60', '21', '23', '51', '15', '38', '13', 1, NULL, '2024-01-30 08:15:30', '2024-01-30 08:15:31', NULL, '2024-01-30 08:15:31');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (20, '2023-12-11', 'Kebidanan', 'D3 Kebidanan P. Siantar', '23', '73', '16', '44', '80', '80', '59', '61', '72', '86', '74', '88', '2', '79', '60', '5', '90', '60', 1, NULL, '2024-01-30 08:15:53', '2024-01-30 08:15:54', NULL, '2024-01-30 08:15:54');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (21, '2023-12-12', 'Kebidanan', 'D3 Kebidanan P. Siantar', '16', '35', '88', '15', '87', '97', '95', '20', '87', '40', '20', '68', '100', '77', '5', '12', '5', '25', 1, NULL, '2024-01-30 08:16:14', '2024-01-30 08:16:15', NULL, '2024-01-30 08:16:15');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (22, '2024-01-12', 'Kebidanan', 'D3 Kebidanan P. Siantar', '46', '36', '95', '2', '17', '7', '70', '74', '88', '70', '15', '62', '81', '47', '72', '68', '32', '14', 1, NULL, '2024-01-30 08:16:48', '2024-01-30 08:16:49', NULL, '2024-01-30 08:16:49');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (23, '2024-01-15', 'Kebidanan', 'D3 Kebidanan P. Siantar', '57', '47', '22', '94', '48', '13', '54', '64', '53', '93', '90', '56', '67', '24', '4', '2', '91', '34', 1, NULL, '2024-01-30 08:17:10', '2024-01-30 08:17:11', NULL, '2024-01-30 08:17:11');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (24, '2023-12-11', 'Kebidanan', 'D3 Kebidanan P. Sidempuan', '39', '93', '55', '80', '44', '64', '90', '47', '42', '87', '69', '11', '25', '58', '92', '74', '22', '77', 1, NULL, '2024-01-30 08:17:37', '2024-01-30 08:17:38', NULL, '2024-01-30 08:17:38');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (25, '2023-12-12', 'Kebidanan', 'D3 Kebidanan P. Sidempuan', '28', '26', '97', '59', '58', '65', '27', '16', '97', '90', '64', '31', '31', '34', '30', '46', '96', '65', 1, NULL, '2024-01-30 08:18:04', '2024-01-30 08:18:05', NULL, '2024-01-30 08:18:05');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (26, '2024-01-05', 'Kebidanan', 'D3 Kebidanan P. Sidempuan', '51', '89', '59', '37', '51', '31', '99', '19', '38', '40', '11', '5', '32', '69', '77', '66', '11', '77', 1, NULL, '2024-01-30 08:18:43', '2024-01-30 08:18:44', NULL, '2024-01-30 08:18:44');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (27, '2024-01-07', 'Kebidanan', 'D3 Kebidanan P. Sidempuan', '64', '70', '29', '58', '26', '61', '53', '98', '29', '96', '61', '60', '42', '100', '43', '86', '48', '83', 1, NULL, '2024-01-30 08:19:08', '2024-01-30 08:19:09', NULL, '2024-01-30 08:19:09');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (28, '2023-12-23', 'Keperawatan', 'D3 Keperawatan', '97', '98', '28', '46', '90', '76', '20', '82', '69', '91', '43', '95', '58', '72', '8', '10', '76', '65', 1, NULL, '2024-01-30 08:19:51', '2024-01-30 08:19:52', NULL, '2024-01-30 08:19:52');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (29, '2024-01-08', 'Keperawatan', 'D3 Keperawatan', '79', '15', '1', '29', '56', '63', '44', '48', '82', '83', '81', '5', '97', '20', '85', '29', '26', '80', 1, NULL, '2024-01-30 08:20:12', '2024-01-30 08:20:13', NULL, '2024-01-30 08:20:13');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (30, '2024-01-05', 'Keperawatan', 'D3 Keperawatan', '67', '48', '7', '21', '66', '71', '60', '17', '20', '53', '60', '96', '62', '59', '83', '37', '22', '47', 1, NULL, '2024-01-30 08:20:44', '2024-01-30 08:20:45', NULL, '2024-01-30 08:20:45');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (31, '2023-07-02', 'Keperawatan', 'D3 Keperawatan Dairi', '82', '22', '89', '11', '14', '20', '38', '53', '87', '93', '23', '57', '8', '90', '3', '20', '66', '29', 1, NULL, '2024-01-30 08:21:27', '2024-01-30 08:21:27', NULL, '2024-01-30 08:21:27');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (32, '2023-06-06', 'Keperawatan', 'D3 Keperawatan Dairi', '37', '75', '36', '30', '81', '8', '73', '63', '6', '70', '59', '42', '18', '94', '61', '15', '59', '10', 1, NULL, '2024-01-30 08:21:43', '2024-01-30 08:21:44', NULL, '2024-01-30 08:21:44');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (33, '2024-01-01', 'Keperawatan', 'D3 Keperawatan Dairi', '13', '74', '41', '1', '98', '13', '25', '22', '33', '87', '73', '43', '23', '73', '49', '51', '35', '73', 1, NULL, '2024-01-30 08:22:00', '2024-01-30 08:22:01', NULL, '2024-01-30 08:22:01');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (34, '2024-01-08', 'Keperawatan', 'D3 Keperawatan Dairi', '38', '15', '9', '38', '3', '49', '38', '9', '2', '22', '99', '30', '95', '68', '13', '94', '22', '4', 1, NULL, '2024-01-30 08:22:19', '2024-01-30 08:22:20', NULL, '2024-01-30 08:22:20');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (35, '2023-01-18', 'Keperawatan', 'D3 Keperawatan Tapanuli Tengah', '8', '40', '70', '85', '95', '73', '31', '83', '36', '30', '5', '58', '17', '85', '89', '86', '98', '72', 1, NULL, '2024-01-30 08:26:39', '2024-01-30 08:26:41', NULL, '2024-01-30 08:26:41');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (36, '2023-09-01', 'Keperawatan', 'D3 Keperawatan Tapanuli Tengah', '57', '40', '6', '14', '68', '74', '43', '89', '66', '71', '39', '21', '26', '33', '6', '49', '80', '17', 1, NULL, '2024-01-30 08:27:12', '2024-01-30 08:27:13', NULL, '2024-01-30 08:27:13');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (37, '2024-01-17', 'Keperawatan', 'D3 Keperawatan Tapanuli Tengah', '45', '43', '59', '37', '77', '99', '43', '26', '6', '1', '43', '43', '49', '98', '42', '35', '75', '89', 1, NULL, '2024-01-30 08:27:34', '2024-01-30 08:27:35', NULL, '2024-01-30 08:27:35');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (38, '2024-01-26', 'Keperawatan', 'D3 Keperawatan Tapanuli Tengah', '27', '89', '28', '79', '61', '10', '50', '8', '61', '51', '68', '49', '94', '66', '20', '65', '91', '78', 1, NULL, '2024-01-30 08:27:52', '2024-01-30 08:27:53', NULL, '2024-01-30 08:27:53');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (39, '2023-06-07', 'Keperawatan', 'D3 Keparawatan Gunungsitoli', '78', '59', '19', '8', '29', '16', '50', '39', '90', '12', '15', '63', '86', '98', '42', '40', '65', '66', 1, NULL, '2024-01-30 08:28:22', '2024-01-30 08:28:24', NULL, '2024-01-30 08:28:24');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (40, '2023-05-24', 'Keperawatan', 'D3 Keparawatan Gunungsitoli', '38', '28', '47', '7', '96', '17', '7', '15', '29', '75', '2', '66', '33', '78', '9', '53', '97', '26', 1, NULL, '2024-01-30 08:28:47', '2024-01-30 08:28:48', NULL, '2024-01-30 08:28:48');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (41, '2024-01-04', 'Keperawatan', 'D3 Keparawatan Gunungsitoli', '67', '17', '79', '25', '48', '50', '90', '77', '1', '69', '40', '51', '50', '72', '12', '29', '70', '21', 1, NULL, '2024-01-30 08:29:05', '2024-01-30 08:29:07', NULL, '2024-01-30 08:29:07');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (42, '2024-01-05', 'Keperawatan', 'D3 Keparawatan Gunungsitoli', '35', '53', '14', '71', '4', '15', '95', '59', '53', '67', '1', '22', '17', '68', '74', '36', '41', '87', 1, NULL, '2024-01-30 08:29:24', '2024-01-30 08:29:25', NULL, '2024-01-30 08:29:25');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (43, '2023-09-18', 'Kesehatan Gigi', 'D3 Kesehatan Gigi', '2', '5', '12', '73', '62', '14', '99', '7', '44', '79', '44', '34', '41', '14', '72', '48', '41', '76', 1, NULL, '2024-01-30 08:29:59', '2024-01-30 08:30:00', NULL, '2024-01-30 08:30:00');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (44, '2023-01-02', 'Kesehatan Gigi', 'D3 Kesehatan Gigi', '99', '47', '25', '27', '13', '47', '55', '5', '15', '57', '90', '16', '7', '81', '43', '9', '25', '31', 1, NULL, '2024-01-30 08:30:17', '2024-01-30 08:30:18', NULL, '2024-01-30 08:30:18');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (45, '2024-01-09', 'Kesehatan Gigi', 'D3 Kesehatan Gigi', '12', '22', '11', '74', '95', '63', '56', '30', '67', '30', '70', '45', '34', '60', '61', '28', '16', '48', 1, NULL, '2024-01-30 08:30:34', '2024-01-30 08:30:35', NULL, '2024-01-30 08:30:35');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (46, '2024-01-12', 'Kesehatan Gigi', 'D3 Kesehatan Gigi', '94', '96', '51', '99', '79', '29', '42', '35', '48', '75', '79', '32', '34', '93', '3', '62', '50', '15', 1, NULL, '2024-01-30 08:30:51', '2024-01-30 08:30:52', NULL, '2024-01-30 08:30:52');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (47, '2023-10-28', 'Sanitasi', 'D3 Sanitasi', '87', '90', '42', '61', '62', '79', '65', '74', '29', '44', '1', '85', '73', '46', '41', '34', '37', '19', 1, NULL, '2024-01-30 08:31:14', '2024-01-30 08:31:15', NULL, '2024-01-30 08:31:15');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (48, '2023-02-23', 'Sanitasi', 'D3 Sanitasi', '51', '44', '48', '64', '45', '36', '71', '35', '28', '60', '88', '66', '54', '54', '13', '85', '39', '20', 1, NULL, '2024-01-30 08:31:33', '2024-01-30 08:31:34', NULL, '2024-01-30 08:31:34');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (49, '2024-01-20', 'Sanitasi', 'D3 Sanitasi', '78', '51', '34', '66', '15', '90', '49', '47', '8', '82', '97', '64', '31', '8', '13', '54', '11', '60', 1, NULL, '2024-01-30 08:31:52', '2024-01-30 08:31:53', NULL, '2024-01-30 08:31:53');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (50, '2024-01-16', 'Sanitasi', 'D3 Sanitasi', '63', '98', '45', '12', '68', '58', '42', '52', '80', '48', '38', '61', '5', '37', '33', '97', '31', '28', 1, NULL, '2024-01-30 08:32:10', '2024-01-30 08:32:12', NULL, '2024-01-30 08:32:12');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (51, '2023-09-28', 'Teknologi Laboratorium Medis', 'D3 Teknologi Laboratorium Medis', '9', '94', '35', '68', '57', '34', '65', '30', '91', '30', '93', '18', '91', '37', '90', '67', '38', '17', 1, NULL, '2024-01-30 08:32:39', '2024-01-30 08:32:42', NULL, '2024-01-30 08:32:42');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (52, '2024-01-19', 'Teknologi Laboratorium Medis', 'D3 Teknologi Laboratorium Medis', '28', '48', '82', '63', '58', '22', '51', '80', '38', '29', '84', '33', '95', '95', '91', '71', '42', '63', 1, NULL, '2024-01-30 08:32:59', '2024-01-30 08:33:00', NULL, '2024-01-30 08:33:00');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (53, '2024-01-18', 'Teknologi Laboratorium Medis', 'D3 Teknologi Laboratorium Medis', '92', '5', '85', '61', '62', '63', '42', '22', '49', '25', '78', '36', '80', '88', '31', '10', '8', '40', 1, NULL, '2024-01-30 08:33:17', '2024-01-30 08:33:18', NULL, '2024-01-30 08:33:18');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (54, '2023-08-27', 'Teknologi Laboratorium Medis', 'D3 Teknologi Laboratorium Medis', '28', '17', '74', '11', '99', '49', '69', '21', '19', '85', '28', '56', '58', '43', '100', '81', '77', '89', 1, NULL, '2024-01-30 08:33:57', '2024-01-30 08:33:58', NULL, '2024-01-30 08:33:58');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (55, '2023-06-11', 'Gizi', 'D4 Gizi dan Dietetika', '10', '100', '50', '72', '3', '49', '48', '12', '16', '80', '39', '48', '66', '36', '30', '36', '20', '42', 1, NULL, '2024-01-30 08:34:20', '2024-01-30 08:34:21', NULL, '2024-01-30 08:34:21');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (56, '2023-12-09', 'Gizi', 'D4 Gizi dan Dietetika', '93', '35', '55', '20', '50', '70', '16', '99', '32', '68', '65', '6', '58', '55', '60', '99', '91', '49', 1, NULL, '2024-01-30 08:34:35', '2024-01-30 08:34:36', NULL, '2024-01-30 08:34:36');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (57, '2024-01-25', 'Gizi', 'D4 Gizi dan Dietetika', '37', '44', '48', '39', '63', '55', '78', '61', '39', '75', '16', '53', '95', '72', '17', '29', '66', '38', 1, NULL, '2024-01-30 08:34:54', '2024-01-30 08:34:55', NULL, '2024-01-30 08:34:55');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (58, '2024-01-26', 'Gizi', 'D4 Gizi dan Dietetika', '72', '79', '5', '66', '31', '21', '52', '87', '82', '81', '65', '62', '97', '30', '2', '74', '32', '16', 1, NULL, '2024-01-30 08:35:18', '2024-01-30 08:35:19', NULL, '2024-01-30 08:35:19');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (59, '2023-08-02', 'Kebidanan', 'D4 Kebidanan', '45', '24', '66', '50', '95', '85', '97', '7', '94', '92', '71', '88', '80', '8', '97', '17', '78', '85', 1, NULL, '2024-01-30 08:35:36', '2024-01-30 08:35:37', NULL, '2024-01-30 08:35:37');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (60, '2023-04-24', 'Kebidanan', 'D4 Kebidanan', '45', '65', '58', '7', '57', '6', '75', '29', '90', '89', '19', '84', '29', '67', '9', '54', '30', '42', 1, NULL, '2024-01-30 08:35:54', '2024-01-30 08:35:55', NULL, '2024-01-30 08:35:55');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (61, '2024-01-20', 'Kebidanan', 'D4 Kebidanan', '36', '64', '57', '48', '25', '29', '96', '98', '39', '58', '71', '98', '24', '91', '84', '65', '56', '36', 1, NULL, '2024-01-30 08:36:15', '2024-01-30 08:36:16', NULL, '2024-01-30 08:36:16');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (62, '2024-01-08', 'Kebidanan', 'D4 Kebidanan', '91', '20', '72', '58', '85', '16', '55', '86', '21', '6', '99', '69', '55', '16', '16', '56', '44', '51', 1, NULL, '2024-01-30 08:36:30', '2024-01-30 08:36:30', NULL, '2024-01-30 08:36:30');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (63, '2023-01-06', 'Keperawatan', 'D4 Keperawatan', '48', '94', '68', '80', '46', '24', '71', '37', '97', '40', '89', '39', '7', '54', '15', '34', '22', '25', 1, NULL, '2024-01-30 08:37:02', '2024-01-30 08:37:07', NULL, '2024-01-30 08:37:07');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (64, '2023-04-25', 'Keperawatan', 'D4 Keperawatan', '33', '100', '74', '6', '91', '93', '24', '2', '68', '94', '71', '43', '65', '23', '65', '83', '30', '49', 1, NULL, '2024-01-30 08:37:29', '2024-01-30 08:37:30', NULL, '2024-01-30 08:37:30');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (65, '2024-01-16', 'Keperawatan', 'D4 Keperawatan', '75', '21', '11', '39', '20', '67', '19', '57', '38', '12', '22', '80', '58', '91', '38', '33', '21', '46', 1, NULL, '2024-01-30 08:38:00', '2024-01-30 08:38:01', NULL, '2024-01-30 08:38:01');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (66, '2024-01-18', 'Keperawatan', 'D4 Keperawatan', '5', '44', '53', '54', '8', '95', '31', '94', '96', '79', '14', '67', '28', '54', '75', '58', '47', '34', 1, NULL, '2024-01-30 08:38:18', '2024-01-30 08:38:20', NULL, '2024-01-30 08:38:20');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (67, '2023-10-23', 'Sanitasi', 'D4 Sanitasi Lingkungan', '43', '93', '37', '81', '21', '43', '71', '44', '84', '90', '92', '91', '12', '55', '6', '22', '1', '25', 1, NULL, '2024-01-30 08:38:43', '2024-01-30 08:38:44', NULL, '2024-01-30 08:38:44');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (68, '2023-04-28', 'Sanitasi', 'D4 Sanitasi Lingkungan', '86', '73', '99', '100', '84', '4', '97', '27', '38', '26', '54', '67', '51', '24', '70', '59', '3', '58', 1, NULL, '2024-01-30 08:39:00', '2024-01-30 08:39:01', NULL, '2024-01-30 08:39:01');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (69, '2024-01-26', 'Sanitasi', 'D4 Sanitasi Lingkungan', '6', '54', '77', '92', '70', '89', '80', '67', '27', '61', '59', '68', '28', '22', '24', '88', '16', '70', 1, NULL, '2024-01-30 08:39:18', '2024-01-30 08:39:19', NULL, '2024-01-30 08:39:19');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (70, '2024-01-23', 'Sanitasi', 'D4 Sanitasi Lingkungan', '88', '47', '31', '59', '19', '40', '37', '38', '12', '80', '33', '12', '32', '70', '70', '12', '65', '43', 1, NULL, '2024-01-30 08:39:35', '2024-01-30 08:39:36', NULL, '2024-01-30 08:39:36');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (71, '2023-01-20', 'Kebidanan', 'Pendidikan Profesi Bidan', '42', '86', '58', '75', '56', '66', '11', '27', '49', '53', '46', '96', '80', '52', '9', '90', '71', '49', 1, NULL, '2024-01-30 08:39:49', '2024-01-30 08:39:50', NULL, '2024-01-30 08:39:50');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (72, '2023-04-18', 'Kebidanan', 'Pendidikan Profesi Bidan', '92', '60', '15', '89', '38', '88', '82', '52', '20', '4', '45', '36', '69', '45', '23', '83', '38', '23', 1, NULL, '2024-01-30 08:40:04', '2024-01-30 08:40:05', NULL, '2024-01-30 08:40:05');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (73, '2024-01-26', 'Kebidanan', 'Pendidikan Profesi Bidan', '44', '52', '73', '10', '50', '48', '84', '24', '5', '90', '12', '80', '18', '30', '37', '21', '45', '69', 1, NULL, '2024-01-30 08:40:21', '2024-01-30 08:40:22', NULL, '2024-01-30 08:40:22');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (74, '2024-01-22', 'Kebidanan', 'Pendidikan Profesi Bidan', '17', '10', '32', '77', '81', '68', '67', '96', '10', '22', '89', '29', '35', '25', '30', '83', '19', '57', 1, NULL, '2024-01-30 08:40:39', '2024-01-30 08:40:40', NULL, '2024-01-30 08:40:40');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (75, '2024-01-10', 'Kebidanan', 'Pendidikan Profesi Bidan', '94', '16', '40', '65', '91', '42', '37', '27', '42', '91', '37', '81', '93', '55', '46', '66', '96', '4', 1, NULL, '2024-01-30 08:40:56', '2024-01-30 08:40:56', NULL, '2024-01-30 08:40:56');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (76, '2023-07-16', 'Keperawatan', 'Pendidikan Profesi Ners', '51', '56', '72', '93', '69', '34', '8', '8', '37', '90', '63', '55', '13', '14', '99', '89', '70', '78', 1, NULL, '2024-01-30 08:41:27', '2024-01-30 08:41:28', NULL, '2024-01-30 08:41:28');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (77, '2023-04-08', 'Keperawatan', 'Pendidikan Profesi Ners', '74', '4', '40', '53', '96', '19', '9', '2', '53', '21', '100', '2', '5', '91', '21', '52', '72', '100', 1, NULL, '2024-01-30 08:41:41', '2024-01-30 08:41:42', NULL, '2024-01-30 08:41:42');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (78, '2024-01-15', 'Keperawatan', 'Pendidikan Profesi Ners', '8', '27', '37', '41', '79', '84', '7', '98', '53', '59', '51', '97', '63', '69', '61', '51', '61', '22', 1, NULL, '2024-01-30 08:41:58', '2024-01-30 08:41:59', NULL, '2024-01-30 08:41:59');
INSERT INTO `bios_jumlah_tenaga_pendidik` VALUES (79, '2024-01-18', 'Keperawatan', 'Pendidikan Profesi Ners', '19', '63', '1', '99', '73', '9', '17', '83', '72', '41', '73', '42', '27', '38', '21', '64', '10', '16', 1, NULL, '2024-01-30 08:42:16', '2024-01-30 08:42:17', NULL, '2024-01-30 08:42:17');

-- ----------------------------
-- Table structure for bios_jumlah_unit
-- ----------------------------
DROP TABLE IF EXISTS `bios_jumlah_unit`;
CREATE TABLE `bios_jumlah_unit`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_jumlah_unit
-- ----------------------------
INSERT INTO `bios_jumlah_unit` VALUES (1, '2024-01-03', 'Unit Laboratorium', '10', 1, NULL, '2024-01-04 08:59:13', '2024-01-04 08:59:14', NULL, '2024-01-04 08:59:14');

-- ----------------------------
-- Table structure for bios_kluster_ptn
-- ----------------------------
DROP TABLE IF EXISTS `bios_kluster_ptn`;
CREATE TABLE `bios_kluster_ptn`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `klaster` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_kluster_ptn
-- ----------------------------
INSERT INTO `bios_kluster_ptn` VALUES (1, '2024-01-04', '10', 1, NULL, '2024-01-05 05:00:25', '2024-01-05 05:00:27', NULL, '2024-01-05 05:00:27');

-- ----------------------------
-- Table structure for bios_links
-- ----------------------------
DROP TABLE IF EXISTS `bios_links`;
CREATE TABLE `bios_links`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fetch_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `send_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_links
-- ----------------------------
INSERT INTO `bios_links` VALUES (1, NULL, 'contohh', 'contoh dev url', 'contoh prod url', '2023-12-13 04:11:15', '2023-12-13 04:11:34', '2023-12-13 04:11:34');
INSERT INTO `bios_links` VALUES (2, 'SDM', 'jumlah_tenaga_kependidikan', 'get/data/pendidikan/sdm/jumlah_tenaga_kependidikan', 'ws/pendidikan/sdm/jumlah_tenaga_kependidikan', '2023-12-18 03:47:42', '2024-01-04 08:27:01', NULL);
INSERT INTO `bios_links` VALUES (3, 'SDM', 'jumlah_tenaga_pendidik', 'get/data/pendidikan/sdm/jumlah_tenaga_pendidik_vokasi_balai_pelatihan', 'ws/pendidikan/sdm/jumlah_tenaga_pendidik_vokasi_balai_pelatihan', '2023-12-19 06:52:03', '2024-01-04 08:27:15', NULL);
INSERT INTO `bios_links` VALUES (4, 'Keuangan', 'penerimaan', 'get/data/keuangan/akuntansi/penerimaan', 'ws/keuangan/akuntansi/penerimaan', '2023-12-20 07:59:29', '2024-01-04 08:27:23', NULL);
INSERT INTO `bios_links` VALUES (5, 'Keuangan', 'pengeluaran', 'get/data/keuangan/akuntansi/pengeluaran', 'ws/keuangan/akuntansi/pengeluaran', '2023-12-22 01:54:57', '2024-01-04 08:27:30', NULL);
INSERT INTO `bios_links` VALUES (6, 'Keuangan', 'saldo_operasional', 'get/data/keuangan/saldo/saldo_operasional', 'ws/keuangan/saldo/saldo_operasional', '2024-01-03 08:03:06', '2024-01-04 08:27:39', NULL);
INSERT INTO `bios_links` VALUES (7, 'Keuangan', 'saldo_pengelolaan_kas', 'get/data/keuangan/saldo/saldo_pengelolaan_kas', 'ws/keuangan/saldo/saldo_pengelolaan_kas', '2024-01-04 03:41:42', '2024-01-05 02:43:21', NULL);
INSERT INTO `bios_links` VALUES (8, 'Keuangan', 'saldo_dana_kelolaan', 'get/data/keuangan/saldo/saldo_dana_kelolaan', 'ws/keuangan/saldo/saldo_dana_kelolaan', '2024-01-04 08:10:30', '2024-01-04 08:27:55', NULL);
INSERT INTO `bios_links` VALUES (9, 'Layanan', 'jumlah_unit', 'get/data/pendidikan/layanan/jumlah_unit', 'ws/pendidikan/layanan/jumlah_unit', '2024-01-04 08:31:28', '2024-01-04 08:31:28', NULL);
INSERT INTO `bios_links` VALUES (10, 'Layanan', 'ptn_cluster', 'get/data/pendidikan/layanan/cluster_ptn', 'ws/pendidikan/layanan/cluster_ptn', '2024-01-05 04:52:38', '2024-01-05 04:52:38', NULL);
INSERT INTO `bios_links` VALUES (11, 'Layanan', 'alumni', 'get/data/pendidikan/layanan/alumni', 'ws/pendidikan/layanan/alumni', '2024-01-05 07:43:21', '2024-01-05 07:43:21', NULL);
INSERT INTO `bios_links` VALUES (12, 'Layanan', 'jumlah_kerjasama', 'get/data/pendidikan/layanan/jumlah_kerja_sama', 'ws/pendidikan/layanan/jumlah_kerja_sama', '2024-01-05 09:32:02', '2024-01-05 09:32:02', NULL);
INSERT INTO `bios_links` VALUES (13, 'Layanan', 'jumlah_kerjasama_prodi_dan_mitra', 'get/data/pendidikan/layanan/jumlah_prodi_yang_melakukan_kerjasama_dengan_mitra_dalam_rangka_tri_dharma', 'ws/pendidikan/layanan/jumlah_prodi_yang_melakukan_kerjasama_dengan_mitra_dalam_rangka_tri_dharma', '2024-01-08 03:50:42', '2024-01-08 03:50:42', NULL);
INSERT INTO `bios_links` VALUES (14, 'Layanan', 'sumber_dana_beasiswa', 'get/data/pendidikan/layanan/sumber_dana_beasiswa', 'ws/pendidikan/layanan/sumber_dana_beasiswa', '2024-01-08 07:17:25', '2024-01-08 07:17:25', NULL);
INSERT INTO `bios_links` VALUES (15, 'Layanan', 'jumlah_penerima_beasiswa', 'get/data/pendidikan/layanan/jumlah_penerima_beasiswa', 'ws/pendidikan/layanan/jumlah_penerima_beasiswa', '2024-01-08 09:40:04', '2024-01-08 09:40:04', NULL);
INSERT INTO `bios_links` VALUES (16, 'Layanan', 'jumlah_mahasiswa', 'get/data/pendidikan/layanan/jumlah_mahasiswa', 'ws/pendidikan/layanan/jumlah_mahasiswa', '2024-01-09 03:53:55', '2024-01-09 03:53:55', NULL);
INSERT INTO `bios_links` VALUES (17, 'Layanan', 'jumlah_mahasiswa_berprestasi', 'get/data/pendidikan/layanan/jumlah_mahasiswa_berprestasi', 'ws/pendidikan/layanan/jumlah_mahasiswa_berprestasi', '2024-01-09 05:01:45', '2024-01-09 05:01:45', NULL);
INSERT INTO `bios_links` VALUES (18, 'Layanan', 'jumlah_mahasiswa_yang_berkegiatan_di_luar_kampus', 'get/data/pendidikan/layanan/jumlah_mahasiswa_yang_berkegiatan_di_luar_kampus', 'ws/pendidikan/layanan/jumlah_mahasiswa_yang_berkegiatan_di_luar_kampus', '2024-01-09 07:40:39', '2024-01-09 07:40:39', NULL);
INSERT INTO `bios_links` VALUES (19, 'Layanan', 'jumlah_haki', 'get/data/pendidikan/layanan/jumlah_haki', 'ws/pendidikan/layanan/jumlah_haki', '2024-01-10 08:12:35', '2024-01-10 08:12:35', NULL);
INSERT INTO `bios_links` VALUES (20, 'Layanan', 'jumlah_produk_inovasi', 'get/data/pendidikan/layanan/jumlah_produk_inovasi', 'ws/pendidikan/layanan/jumlah_produk_inovasi', '2024-01-10 08:42:45', '2024-01-10 08:42:45', NULL);
INSERT INTO `bios_links` VALUES (21, 'Layanan', 'sumber_dana_penelitian', 'get/data/pendidikan/layanan/sumber_dana_penelitian', 'ws/pendidikan/layanan/sumber_dana_penelitian', '2024-01-11 01:48:47', '2024-01-11 01:48:47', NULL);
INSERT INTO `bios_links` VALUES (22, 'Layanan', 'jumlah_publikasi_penelitian', 'get/data/pendidikan/layanan/jumlah_publikasi_penelitian', 'ws/pendidikan/layanan/jumlah_publikasi_penelitian', '2024-01-11 04:05:28', '2024-01-11 04:05:28', NULL);
INSERT INTO `bios_links` VALUES (23, 'Layanan', 'sumber_dana_pengabdian_pada_masyarakat', 'get/data/pendidikan/layanan/sumber_dana_pengabdian_pada_masyarakat', 'ws/pendidikan/layanan/sumber_dana_pengabdian_pada_masyarakat', '2024-01-11 08:34:12', '2024-01-11 08:34:12', NULL);
INSERT INTO `bios_links` VALUES (24, 'Layanan', 'jumlah_kegiatan_pengabdian_kepada_masyarakat', 'get/data/pendidikan/layanan/jumlah_kegiatan_pengabdian_kepada_masyarakat', 'ws/pendidikan/layanan/jumlah_kegiatan_pengabdian_kepada_masyarakat', '2024-01-12 07:44:32', '2024-01-12 07:44:32', NULL);
INSERT INTO `bios_links` VALUES (25, 'Layanan', 'jumlah_penerima_kegiatan_pengabdian_pada_masyarakat', 'get/data/pendidikan/layanan/jumlah_penerima_kegiatan_pengabdian_pada_masyarakat', 'ws/pendidikan/layanan/jumlah_penerima_kegiatan_pengabdian_pada_masyarakat', '2024-01-12 08:12:53', '2024-01-12 08:12:53', NULL);
INSERT INTO `bios_links` VALUES (26, 'Layanan', 'akreditasi_institusi_prodi', 'get/data/pendidikan/layanan/akreditasi_institusi_prodi', 'ws/pendidikan/layanan/akreditasi_institusi_prodi', '2024-01-12 08:59:38', '2024-01-12 08:59:38', NULL);
INSERT INTO `bios_links` VALUES (27, 'Layanan', 'jumlah_peserta_sertifikasi', 'get/data/pendidikan/layanan/jumlah_peserta_sertifikasi', 'ws/pendidikan/layanan/jumlah_peserta_sertifikasi', '2024-01-16 07:18:40', '2024-01-16 07:18:40', NULL);
INSERT INTO `bios_links` VALUES (28, 'Layanan', 'jumlah_peserta_diklat', 'get/data/pendidikan/layanan/jumlah_peserta_diklat', 'ws/pendidikan/layanan/jumlah_peserta_diklat', '2024-01-16 09:03:52', '2024-01-16 09:03:52', NULL);
INSERT INTO `bios_links` VALUES (29, 'Layanan', 'jumlah_prodi_yang_menerapkan_pembelajaran_kampus_merdeka', 'get/data/pendidikan/layanan/jumlah_prodi_yang_menerapkan_pembelajaran_kampus_merdeka', 'ws/pendidikan/layanan/jumlah_prodi_yang_menerapkan_pembelajaran_kampus_merdeka', '2024-01-18 03:16:11', '2024-01-18 03:16:11', NULL);
INSERT INTO `bios_links` VALUES (30, 'Layanan', 'jumlah_mitra_kerjasama_diklat', 'get/data/pendidikan/layanan/jumlah_mitra_kerjasama_diklat', 'ws/pendidikan/layanan/jumlah_mitra_kerjasama_diklat', '2024-01-18 04:46:57', '2024-01-18 04:46:57', NULL);
INSERT INTO `bios_links` VALUES (31, 'Layanan', 'jumlah_dosen_yang_berkegiatan_di_luar_kampus', 'get/data/pendidikan/layanan/jumlah_dosen_yang_berkegiatan_di_luar_kampus', 'ws/pendidikan/layanan/jumlah_dosen_yang_berkegiatan_di_luar_kampus', '2024-01-18 05:26:29', '2024-01-18 05:26:29', NULL);

-- ----------------------------
-- Table structure for bios_majors
-- ----------------------------
DROP TABLE IF EXISTS `bios_majors`;
CREATE TABLE `bios_majors`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_majors
-- ----------------------------
INSERT INTO `bios_majors` VALUES (1, 'Keperawatan', '2023-12-18 15:36:02', '2023-12-18 15:36:02', NULL);
INSERT INTO `bios_majors` VALUES (2, 'Kebidanan', '2023-12-18 15:36:02', '2023-12-18 15:36:02', NULL);
INSERT INTO `bios_majors` VALUES (3, 'Kesehatan Gigi', '2023-12-18 15:36:02', '2023-12-18 15:36:02', NULL);
INSERT INTO `bios_majors` VALUES (4, 'Sanitasi', '2023-12-18 15:36:02', '2023-12-18 15:36:02', NULL);
INSERT INTO `bios_majors` VALUES (5, 'Gizi', '2023-12-18 15:36:02', '2023-12-18 15:36:02', NULL);
INSERT INTO `bios_majors` VALUES (6, 'Farmasi', '2023-12-18 15:36:02', '2023-12-18 15:36:02', NULL);
INSERT INTO `bios_majors` VALUES (7, 'Teknologi Laboratorium Medis', '2023-12-18 15:36:02', '2023-12-18 15:36:02', NULL);

-- ----------------------------
-- Table structure for bios_menus
-- ----------------------------
DROP TABLE IF EXISTS `bios_menus`;
CREATE TABLE `bios_menus`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `has_view` int(11) NOT NULL,
  `has_add` int(11) NOT NULL,
  `has_edit` int(11) NOT NULL,
  `has_delete` int(11) NOT NULL,
  `has_upload` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT current_timestamp(0),
  `updated_at` datetime(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 156 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_menus
-- ----------------------------
INSERT INTO `bios_menus` VALUES (1, 'Pengaturan', 'Role', 'Role', 1, 1, 1, 1, 0, '2022-12-09 06:24:37', '2023-12-13 10:49:23', NULL);
INSERT INTO `bios_menus` VALUES (123, 'Pengaturan', 'User', 'User', 1, 1, 1, 1, 0, '2023-12-06 14:04:14', '2023-12-13 10:49:24', NULL);
INSERT INTO `bios_menus` VALUES (124, 'Pengaturan', 'Link', 'Link', 1, 1, 1, 1, 0, '2023-12-13 10:04:23', '2023-12-13 10:49:25', NULL);
INSERT INTO `bios_menus` VALUES (125, 'SDM', 'Jumlah Tenaga Kependidikan', 'Jumlah Tenaga Kependidikan', 1, 1, 1, 1, 1, '2023-12-13 11:39:07', '2023-12-13 11:39:48', NULL);
INSERT INTO `bios_menus` VALUES (126, 'Pengaturan', 'Web Service Setting', 'Web Service Setting', 1, 0, 1, 0, 0, '2023-12-13 16:36:45', '2023-12-13 16:37:02', NULL);
INSERT INTO `bios_menus` VALUES (127, 'SDM', 'Jumlah Tenaga Pendidik', 'Jumlah Tenaga Pendidik', 1, 1, 1, 1, 1, '2023-12-18 13:51:19', '2023-12-18 13:51:35', NULL);
INSERT INTO `bios_menus` VALUES (128, 'Keuangan', 'Penerimaan', 'Penerimaan', 1, 1, 1, 1, 1, '2023-12-20 14:06:32', '2023-12-20 14:06:43', NULL);
INSERT INTO `bios_menus` VALUES (129, 'Keuangan', 'Pengeluaran', 'Pengeluaran', 1, 1, 1, 1, 1, '2023-12-22 08:49:32', '2023-12-22 08:49:47', NULL);
INSERT INTO `bios_menus` VALUES (130, 'Keuangan', 'Saldo Operasional', 'Saldo Operasional', 1, 1, 1, 1, 1, '2024-01-03 14:57:57', '2024-01-03 15:06:10', NULL);
INSERT INTO `bios_menus` VALUES (131, 'Keuangan', 'Saldo Pengelolaan Kas', 'Saldo Pengelolaan Kas', 1, 1, 1, 1, 1, '2024-01-04 10:37:34', '2024-01-04 10:37:47', NULL);
INSERT INTO `bios_menus` VALUES (132, 'Keuangan', 'Saldo Dana Kelolaan', 'Saldo Dana Kelolaan', 1, 1, 1, 1, 1, '2024-01-04 15:09:14', '2024-01-04 15:09:26', NULL);
INSERT INTO `bios_menus` VALUES (133, 'Layanan', 'Jumlah Unit', 'Jumlah Unit', 1, 1, 1, 1, 1, '2024-01-04 15:31:59', '2024-01-04 15:32:11', NULL);
INSERT INTO `bios_menus` VALUES (134, 'Layanan', 'Cluster PTN', 'Cluster PTN', 1, 1, 1, 1, 1, '2024-01-05 11:47:04', '2024-01-05 11:50:12', NULL);
INSERT INTO `bios_menus` VALUES (135, 'Layanan', 'Alumni', 'Alumni', 1, 1, 1, 1, 1, '2024-01-05 14:41:42', '2024-01-05 14:41:52', NULL);
INSERT INTO `bios_menus` VALUES (136, 'Layanan', 'Jumlah Kerjasama', 'Jumlah Kerjasama', 1, 1, 1, 1, 1, '2024-01-05 16:29:20', '2024-01-05 16:29:37', NULL);
INSERT INTO `bios_menus` VALUES (137, 'Layanan', 'Jumlah Kerjasama Prodi dan Mitra', 'Jumlah Kerjasama Prodi dan Mitra', 1, 1, 1, 1, 1, '2024-01-08 10:48:30', '2024-01-08 10:49:28', NULL);
INSERT INTO `bios_menus` VALUES (138, 'Layanan', 'Sumber Dana Beasiswa', 'Sumber Dana Beasiswa', 1, 1, 1, 1, 1, '2024-01-08 14:09:21', '2024-01-08 14:15:27', NULL);
INSERT INTO `bios_menus` VALUES (139, 'Layanan', 'Jumlah Penerima Beasiswa', 'Jumlah Penerima Beasiswa', 1, 1, 1, 1, 1, '2024-01-08 16:15:56', '2024-01-08 16:16:21', NULL);
INSERT INTO `bios_menus` VALUES (140, 'Layanan', 'Jumlah Mahasiswa', 'Jumlah Mahasiswa', 1, 1, 1, 1, 1, '2024-01-09 10:42:24', '2024-01-09 10:42:47', NULL);
INSERT INTO `bios_menus` VALUES (141, 'Layanan', 'Jumlah Mahasiswa Berprestasi', 'Jumlah Mahasiswa Berprestasi', 1, 1, 1, 1, 1, '2024-01-09 12:00:31', '2024-01-09 12:00:46', NULL);
INSERT INTO `bios_menus` VALUES (142, 'Layanan', 'Jumlah Mahasiswa Yang Berkegiatan Di Luar Kampus', 'Jumlah Mahasiswa Di Luar Kampus', 1, 1, 1, 1, 1, '2024-01-09 14:20:43', '2024-01-09 14:24:17', NULL);
INSERT INTO `bios_menus` VALUES (143, 'Layanan', 'Jumlah HAKI', 'Jumlah HAKI', 1, 1, 1, 1, 1, '2024-01-10 15:10:41', '2024-01-10 15:10:55', NULL);
INSERT INTO `bios_menus` VALUES (144, 'Layanan', 'Jumlah Produk Inovasi', 'Jumlah Produk Inovasi', 1, 1, 1, 1, 1, '2024-01-10 15:41:14', '2024-01-10 15:41:32', NULL);
INSERT INTO `bios_menus` VALUES (145, 'Layanan', 'Sumber Dana Penelitian', 'Sumber Dana Penelitian', 1, 1, 1, 1, 1, '2024-01-11 08:44:53', '2024-01-11 08:45:11', NULL);
INSERT INTO `bios_menus` VALUES (146, 'Layanan', 'Jumlah Publikasi Penelitian', 'Jumlah Publikasi Penelitian', 1, 1, 1, 1, 1, '2024-01-11 10:57:46', '2024-01-11 10:58:03', NULL);
INSERT INTO `bios_menus` VALUES (147, 'Layanan', 'Sumber Dana Pengabdian Pada Masyarakat', 'Sumber Dana Pengabdian Pada Masyarakat', 1, 1, 1, 1, 1, '2024-01-11 15:32:41', '2024-01-11 15:32:58', NULL);
INSERT INTO `bios_menus` VALUES (148, 'Layanan', 'Jumlah Kegiatan Pengabdian Kepada Masyarakat', 'Jumlah Kegiatan Pengabdian Kepada Masyarakat', 1, 1, 1, 1, 1, '2024-01-12 14:42:18', '2024-01-12 14:42:48', NULL);
INSERT INTO `bios_menus` VALUES (149, 'Layanan', 'Jumlah Penerima Kegiatan Pengabdian Pada Masyarakat', 'Jumlah Penerima Kegiatan Pengabdian Pada Masyarakat', 1, 1, 1, 1, 1, '2024-01-12 15:10:54', '2024-01-12 15:19:43', NULL);
INSERT INTO `bios_menus` VALUES (150, 'Layanan', 'Akreditasi Institusi Prodi', 'Akreditasi Institusi Prodi', 1, 1, 1, 1, 1, '2024-01-12 15:57:40', '2024-01-12 15:57:59', NULL);
INSERT INTO `bios_menus` VALUES (151, 'Layanan', 'Jumlah Peserta Sertifikasi', 'Jumlah Peserta Sertifikasi', 1, 1, 1, 1, 1, '2024-01-16 14:16:00', '2024-01-16 14:16:20', NULL);
INSERT INTO `bios_menus` VALUES (152, 'Layanan', 'Jumlah Peserta Diklat', 'Jumlah Peserta Diklat', 1, 1, 1, 1, 1, '2024-01-16 15:58:14', '2024-01-16 15:58:28', NULL);
INSERT INTO `bios_menus` VALUES (153, 'Layanan', 'Jumlah Prodi Yang Menerapkan Pembelajaran Kampus Merdeka', 'Jumlah Prodi Kampus Merdeka', 1, 1, 1, 1, 1, '2024-01-18 10:13:21', '2024-01-18 10:14:11', NULL);
INSERT INTO `bios_menus` VALUES (154, 'Layanan', 'Jumlah Mitra Kerjasama Diklat', 'Jumlah Mitra Kerjasama Diklat', 1, 1, 1, 1, 1, '2024-01-18 11:45:31', '2024-01-18 11:45:50', NULL);
INSERT INTO `bios_menus` VALUES (155, 'Layanan', 'Jumlah Dosen Yang Berkegiatan Di Luar Kampus', 'Jumlah Dosen Di Luar Kampus', 1, 1, 1, 1, 1, '2024-01-18 12:22:46', '2024-01-18 12:23:28', NULL);

-- ----------------------------
-- Table structure for bios_penerimaan
-- ----------------------------
DROP TABLE IF EXISTS `bios_penerimaan`;
CREATE TABLE `bios_penerimaan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `kd_akun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(1) NULL DEFAULT NULL,
  `updated_by` int(1) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 57 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_penerimaan
-- ----------------------------
INSERT INTO `bios_penerimaan` VALUES (1, '2023-12-20', NULL, '2000001', 1, 1, '2023-12-21 08:00:31', '2023-12-29 08:25:33', '2023-12-29 08:25:33', '2023-12-21 08:10:54');
INSERT INTO `bios_penerimaan` VALUES (2, '2023-12-19', NULL, '10000000', 1, NULL, '2023-12-21 08:18:12', '2023-12-29 08:25:38', '2023-12-29 08:25:38', '2023-12-21 08:18:12');
INSERT INTO `bios_penerimaan` VALUES (3, '2023-12-28', '111215', '100000', 1, 1, '2023-12-29 08:23:51', '2024-02-20 03:24:11', NULL, '2024-02-20 03:24:11');
INSERT INTO `bios_penerimaan` VALUES (4, '2024-01-01', '111215', '200000', 1, NULL, '2024-01-02 09:11:27', '2024-01-02 09:11:30', NULL, '2024-01-02 09:11:30');
INSERT INTO `bios_penerimaan` VALUES (5, '2023-12-31', '424915', '450000', 1, 1, '2024-01-02 09:12:17', '2024-02-20 03:25:23', NULL, '2024-02-20 03:25:23');
INSERT INTO `bios_penerimaan` VALUES (6, '2024-02-19', '411145', '1000000', 1, NULL, '2024-02-20 04:26:22', '2024-02-20 04:26:23', NULL, '2024-02-20 04:26:23');
INSERT INTO `bios_penerimaan` VALUES (7, '2023-01-01', '411125', '200000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, '2024-02-20 04:34:26');
INSERT INTO `bios_penerimaan` VALUES (8, '2013-01-02', '411125', '300000', 1, NULL, '2024-02-20 04:39:13', '2024-02-20 04:39:14', NULL, '2024-02-20 04:39:14');
INSERT INTO `bios_penerimaan` VALUES (9, '2023-01-03', '424915', '2500000', 1, NULL, '2024-02-20 04:40:33', '2024-02-20 04:40:34', NULL, '2024-02-20 04:40:34');
INSERT INTO `bios_penerimaan` VALUES (10, '2023-01-04', '424915', '5000000', 1, NULL, '2024-02-20 04:41:04', '2024-02-20 04:41:04', NULL, '2024-02-20 04:41:04');
INSERT INTO `bios_penerimaan` VALUES (11, '2023-02-01', '411125', '300000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (12, '2023-02-02', '411125', '200000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (13, '2023-03-01', '411125', '100000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (14, '2023-03-02', '411125', '250000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (15, '2023-04-01', '411125', '150000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (16, '2023-04-02', '411125', '550000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (17, '2023-05-01', '411125', '120000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (18, '2023-05-02', '411125', '110000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (19, '2023-06-01', '411125', '50000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (20, '2023-06-02', '411125', '20000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (21, '2023-07-01', '411125', '350000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (22, '2023-07-02', '411125', '120000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (23, '2023-08-01', '411125', '330000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (24, '2023-08-02', '411125', '120000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (25, '2023-09-01', '411125', '120000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (26, '2023-09-02', '411125', '320000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (27, '2023-10-01', '411125', '440000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (28, '2023-10-02', '411125', '540000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (29, '2023-11-01', '411125', '220000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (30, '2023-11-02', '411125', '330000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (31, '2023-12-01', '411125', '440000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (32, '2023-12-02', '411125', '550000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (33, '2023-01-01', '424915', '50000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (34, '2013-01-02', '424915', '44400', 1, NULL, '2024-02-20 04:39:13', '2024-02-20 04:39:14', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (35, '2023-02-01', '424915', '12000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (36, '2023-02-02', '424915', '11000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (37, '2023-03-01', '424915', '10000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (38, '2023-03-02', '424915', '9000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (39, '2023-04-01', '424915', '3000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (40, '2023-04-02', '424915', '4000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (41, '2023-05-01', '424915', '13000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (42, '2023-05-02', '424915', '15000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (43, '2023-06-01', '424915', '20000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (44, '2023-06-02', '424915', '30000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (45, '2023-07-01', '424915', '33000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (46, '2023-07-02', '424915', '35000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (47, '2023-08-01', '424915', '37000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (48, '2023-08-02', '424915', '38000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (49, '2023-09-01', '424915', '23000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (50, '2023-09-02', '424915', '88000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (51, '2023-10-01', '424915', '90000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (52, '2023-10-02', '424915', '95000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (53, '2023-11-01', '424915', '45000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (54, '2023-11-02', '424915', '11000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (55, '2023-12-01', '424915', '12000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_penerimaan` VALUES (56, '2023-12-02', '424915', '5500', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);

-- ----------------------------
-- Table structure for bios_pengeluaran
-- ----------------------------
DROP TABLE IF EXISTS `bios_pengeluaran`;
CREATE TABLE `bios_pengeluaran`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `kd_akun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(1) NULL DEFAULT NULL,
  `updated_by` int(1) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_pengeluaran
-- ----------------------------
INSERT INTO `bios_pengeluaran` VALUES (3, '2023-12-21', '511222', '10000000', 1, 1, '2023-12-22 01:52:26', '2024-01-03 04:33:31', NULL, '2024-01-03 04:33:31');
INSERT INTO `bios_pengeluaran` VALUES (4, '2023-12-20', '511222', '20000000', 1, 1, '2023-12-22 01:52:47', '2024-01-03 04:33:00', NULL, '2024-01-03 04:33:00');
INSERT INTO `bios_pengeluaran` VALUES (5, '2023-01-01', '511222', '2200000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (6, '2013-01-02', '511222', '55000000', 1, NULL, '2024-02-20 04:39:13', '2024-02-20 04:39:14', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (7, '2023-02-01', '511222', '10000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (8, '2023-02-02', '511222', '20000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (9, '2023-03-01', '511222', '15000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (10, '2023-03-02', '511222', '9000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (11, '2023-04-01', '511222', '7000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (12, '2023-04-02', '511222', '12000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (13, '2023-05-01', '511222', '13000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (14, '2023-05-02', '511222', '14000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (15, '2023-06-01', '511222', '22000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (16, '2023-06-02', '511222', '7500000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (17, '2023-07-01', '511222', '33000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (18, '2023-07-02', '511222', '45000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (19, '2023-08-01', '511222', '37000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (20, '2023-08-02', '511222', '16000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (21, '2023-09-01', '511222', '11000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (22, '2023-09-02', '511222', '8800000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (23, '2023-10-01', '511222', '17500000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (24, '2023-10-02', '511222', '9900000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (25, '2023-11-01', '511222', '50000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (26, '2023-11-02', '511222', '15600000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (27, '2023-12-01', '511222', '23000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);
INSERT INTO `bios_pengeluaran` VALUES (28, '2023-12-02', '511222', '66000000', 1, NULL, '2024-02-20 04:34:25', '2024-02-20 04:34:26', NULL, NULL);

-- ----------------------------
-- Table structure for bios_role_permissions
-- ----------------------------
DROP TABLE IF EXISTS `bios_role_permissions`;
CREATE TABLE `bios_role_permissions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `view_access` int(11) NOT NULL,
  `add_access` int(11) NOT NULL,
  `edit_access` int(11) NOT NULL,
  `delete_access` int(11) NOT NULL,
  `upload_access` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `updated_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1767 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_role_permissions
-- ----------------------------
INSERT INTO `bios_role_permissions` VALUES (1493, 73, 1, 1, 1, 1, 1, 0, '2023-12-06 09:18:47', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1494, 73, 123, 1, 1, 1, 1, 0, '2023-12-06 09:18:47', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1495, 74, 1, 1, 1, 1, 1, 0, '2023-12-13 02:11:51', '2023-12-13 10:49:44', NULL);
INSERT INTO `bios_role_permissions` VALUES (1496, 74, 123, 1, 1, 1, 1, 0, '2023-12-13 02:11:51', '2023-12-13 10:49:45', NULL);
INSERT INTO `bios_role_permissions` VALUES (1497, 73, 124, 1, 1, 1, 1, 0, '2023-12-13 03:55:13', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1498, 73, 125, 1, 1, 1, 1, 1, '2023-12-13 04:40:13', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1499, 73, 126, 1, 0, 1, 0, 0, '2023-12-13 09:37:47', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1500, 73, 127, 1, 1, 1, 1, 1, '2023-12-18 06:51:43', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1501, 73, 128, 1, 1, 1, 1, 1, '2023-12-20 07:22:38', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1502, 73, 129, 1, 1, 1, 1, 1, '2023-12-22 01:51:59', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1503, 73, 130, 1, 1, 1, 1, 1, '2024-01-03 07:58:35', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1504, 73, 131, 1, 1, 1, 1, 1, '2024-01-04 03:38:40', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1505, 73, 132, 1, 1, 1, 1, 1, '2024-01-04 08:09:41', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1506, 73, 133, 1, 1, 1, 1, 1, '2024-01-04 08:32:29', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1507, 73, 134, 1, 1, 1, 1, 1, '2024-01-05 04:52:53', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1508, 73, 135, 1, 1, 1, 1, 1, '2024-01-05 07:42:16', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1509, 73, 136, 1, 1, 1, 1, 1, '2024-01-05 09:30:39', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1510, 73, 137, 1, 1, 1, 1, 1, '2024-01-08 03:49:46', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1511, 73, 138, 1, 1, 1, 1, 1, '2024-01-08 07:16:23', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1512, 73, 139, 1, 1, 1, 1, 1, '2024-01-08 09:33:48', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1513, 73, 140, 1, 1, 1, 1, 1, '2024-01-09 03:46:17', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1514, 73, 141, 1, 1, 1, 1, 1, '2024-01-09 05:01:57', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1515, 73, 142, 1, 1, 1, 1, 1, '2024-01-09 07:24:50', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1516, 73, 143, 1, 1, 1, 1, 1, '2024-01-10 08:12:47', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1517, 73, 144, 1, 1, 1, 1, 1, '2024-01-10 08:41:52', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1518, 73, 145, 1, 1, 1, 1, 1, '2024-01-11 01:47:45', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1519, 73, 146, 1, 1, 1, 1, 1, '2024-01-11 04:05:49', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1520, 73, 147, 1, 1, 1, 1, 1, '2024-01-11 08:33:12', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1521, 73, 148, 1, 1, 1, 1, 1, '2024-01-12 07:43:19', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1522, 73, 149, 1, 1, 1, 1, 1, '2024-01-12 08:11:48', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1523, 73, 150, 1, 1, 1, 1, 1, '2024-01-12 08:58:43', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1524, 73, 151, 1, 1, 1, 1, 1, '2024-01-16 07:16:37', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1525, 73, 152, 1, 1, 1, 1, 1, '2024-01-16 09:03:00', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1526, 73, 153, 1, 1, 1, 1, 1, '2024-01-18 03:14:36', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1527, 73, 154, 1, 1, 1, 1, 1, '2024-01-18 04:46:04', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1528, 73, 155, 1, 1, 1, 1, 1, '2024-01-18 05:25:39', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_role_permissions` VALUES (1529, 75, 128, 1, 1, 1, 1, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1530, 75, 129, 1, 1, 1, 1, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1531, 75, 130, 1, 1, 1, 1, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1532, 75, 131, 1, 1, 1, 1, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1533, 75, 132, 1, 1, 1, 1, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1534, 75, 133, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1535, 75, 134, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1536, 75, 135, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1537, 75, 136, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1538, 75, 137, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1539, 75, 138, 1, 1, 1, 1, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1540, 75, 139, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1541, 75, 140, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1542, 75, 141, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1543, 75, 142, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1544, 75, 143, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1545, 75, 144, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1546, 75, 145, 1, 1, 1, 1, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1547, 75, 146, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1548, 75, 147, 1, 1, 1, 1, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1549, 75, 148, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1550, 75, 149, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1551, 75, 150, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1552, 75, 151, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1553, 75, 152, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1554, 75, 153, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1555, 75, 154, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1556, 75, 155, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1557, 75, 1, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1558, 75, 123, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1559, 75, 124, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1560, 75, 126, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1561, 75, 125, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1562, 75, 127, 0, 0, 0, 0, 0, '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1563, 76, 128, 1, 1, 1, 1, 1, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1564, 76, 129, 1, 1, 1, 1, 1, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1565, 76, 130, 1, 1, 1, 1, 1, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1566, 76, 131, 1, 1, 1, 1, 1, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1567, 76, 132, 1, 1, 1, 1, 1, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1568, 76, 133, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1569, 76, 134, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1570, 76, 135, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1571, 76, 136, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1572, 76, 137, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1573, 76, 138, 1, 1, 1, 1, 1, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1574, 76, 139, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1575, 76, 140, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1576, 76, 141, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1577, 76, 142, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1578, 76, 143, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1579, 76, 144, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1580, 76, 145, 1, 1, 1, 1, 1, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1581, 76, 146, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1582, 76, 147, 1, 1, 1, 1, 1, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1583, 76, 148, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1584, 76, 149, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1585, 76, 150, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1586, 76, 151, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1587, 76, 152, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1588, 76, 153, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1589, 76, 154, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1590, 76, 155, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1591, 76, 1, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1592, 76, 123, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1593, 76, 124, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1594, 76, 126, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1595, 76, 125, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1596, 76, 127, 0, 0, 0, 0, 0, '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_role_permissions` VALUES (1597, 77, 128, 0, 0, 0, 0, 0, '2024-01-23 09:09:48', '2024-01-23 09:09:48', NULL);
INSERT INTO `bios_role_permissions` VALUES (1598, 77, 129, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1599, 77, 130, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1600, 77, 131, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1601, 77, 132, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1602, 77, 133, 1, 1, 1, 1, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1603, 77, 134, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1604, 77, 135, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1605, 77, 136, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1606, 77, 137, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1607, 77, 138, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1608, 77, 139, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1609, 77, 140, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1610, 77, 141, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1611, 77, 142, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1612, 77, 143, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1613, 77, 144, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1614, 77, 145, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1615, 77, 146, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1616, 77, 147, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1617, 77, 148, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1618, 77, 149, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1619, 77, 150, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1620, 77, 151, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1621, 77, 152, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1622, 77, 153, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1623, 77, 154, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1624, 77, 155, 1, 1, 1, 1, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1625, 77, 1, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1626, 77, 123, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1627, 77, 124, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1628, 77, 126, 0, 0, 0, 0, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1629, 77, 125, 1, 1, 1, 1, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1630, 77, 127, 1, 1, 1, 1, 0, '2024-01-23 09:09:49', '2024-01-23 09:09:49', NULL);
INSERT INTO `bios_role_permissions` VALUES (1631, 78, 128, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1632, 78, 129, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1633, 78, 130, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1634, 78, 131, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1635, 78, 132, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1636, 78, 133, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1637, 78, 134, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1638, 78, 135, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1639, 78, 136, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1640, 78, 137, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1641, 78, 138, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1642, 78, 139, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1643, 78, 140, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1644, 78, 141, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1645, 78, 142, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1646, 78, 143, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1647, 78, 144, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1648, 78, 145, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1649, 78, 146, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1650, 78, 147, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1651, 78, 148, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1652, 78, 149, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1653, 78, 150, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1654, 78, 151, 1, 1, 1, 1, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1655, 78, 152, 1, 1, 1, 1, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1656, 78, 153, 1, 1, 1, 1, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1657, 78, 154, 1, 1, 1, 1, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1658, 78, 155, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1659, 78, 1, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1660, 78, 123, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1661, 78, 124, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1662, 78, 126, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1663, 78, 125, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1664, 78, 127, 0, 0, 0, 0, 0, '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_role_permissions` VALUES (1665, 79, 128, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1666, 79, 129, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1667, 79, 130, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1668, 79, 131, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1669, 79, 132, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1670, 79, 133, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1671, 79, 134, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1672, 79, 135, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1673, 79, 136, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1674, 79, 137, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1675, 79, 138, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1676, 79, 139, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1677, 79, 140, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1678, 79, 141, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1679, 79, 142, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1680, 79, 143, 1, 1, 1, 1, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1681, 79, 144, 1, 1, 1, 1, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1682, 79, 145, 1, 1, 1, 1, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1683, 79, 146, 1, 1, 1, 1, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1684, 79, 147, 1, 1, 1, 1, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1685, 79, 148, 1, 1, 1, 1, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1686, 79, 149, 1, 1, 1, 1, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1687, 79, 150, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1688, 79, 151, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1689, 79, 152, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1690, 79, 153, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1691, 79, 154, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1692, 79, 155, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1693, 79, 1, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1694, 79, 123, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1695, 79, 124, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1696, 79, 126, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1697, 79, 125, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1698, 79, 127, 0, 0, 0, 0, 0, '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_role_permissions` VALUES (1699, 80, 128, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1700, 80, 129, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1701, 80, 130, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1702, 80, 131, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1703, 80, 132, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1704, 80, 133, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1705, 80, 134, 1, 1, 1, 1, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1706, 80, 135, 1, 1, 1, 1, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1707, 80, 136, 1, 1, 1, 1, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1708, 80, 137, 1, 1, 1, 1, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1709, 80, 138, 1, 1, 1, 1, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1710, 80, 139, 1, 1, 1, 1, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1711, 80, 140, 1, 1, 1, 1, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1712, 80, 141, 1, 1, 1, 1, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1713, 80, 142, 1, 1, 1, 1, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1714, 80, 143, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1715, 80, 144, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1716, 80, 145, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1717, 80, 146, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1718, 80, 147, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1719, 80, 148, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1720, 80, 149, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1721, 80, 150, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1722, 80, 151, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1723, 80, 152, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1724, 80, 153, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1725, 80, 154, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1726, 80, 155, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1727, 80, 1, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1728, 80, 123, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1729, 80, 124, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1730, 80, 126, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1731, 80, 125, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1732, 80, 127, 0, 0, 0, 0, 0, '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_role_permissions` VALUES (1733, 81, 128, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1734, 81, 129, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1735, 81, 130, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1736, 81, 131, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1737, 81, 132, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1738, 81, 133, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1739, 81, 134, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1740, 81, 135, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1741, 81, 136, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1742, 81, 137, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1743, 81, 138, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1744, 81, 139, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1745, 81, 140, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1746, 81, 141, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1747, 81, 142, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1748, 81, 143, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1749, 81, 144, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1750, 81, 145, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1751, 81, 146, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1752, 81, 147, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1753, 81, 148, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1754, 81, 149, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1755, 81, 150, 1, 1, 1, 1, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1756, 81, 151, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1757, 81, 152, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1758, 81, 153, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1759, 81, 154, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1760, 81, 155, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1761, 81, 1, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1762, 81, 123, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1763, 81, 124, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1764, 81, 126, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1765, 81, 125, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);
INSERT INTO `bios_role_permissions` VALUES (1766, 81, 127, 0, 0, 0, 0, 0, '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);

-- ----------------------------
-- Table structure for bios_roles
-- ----------------------------
DROP TABLE IF EXISTS `bios_roles`;
CREATE TABLE `bios_roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `updated_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 82 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_roles
-- ----------------------------
INSERT INTO `bios_roles` VALUES (73, 'Administrator', '2023-12-06 09:18:47', '2024-01-18 09:02:38', NULL);
INSERT INTO `bios_roles` VALUES (74, 'Administrator 2', '2023-12-13 02:11:51', '2023-12-13 02:11:51', NULL);
INSERT INTO `bios_roles` VALUES (75, 'Admin Keuangan', '2024-01-23 02:33:17', '2024-01-23 09:16:47', NULL);
INSERT INTO `bios_roles` VALUES (76, 'Katim Keuangan', '2024-01-23 02:34:58', '2024-01-23 09:16:06', NULL);
INSERT INTO `bios_roles` VALUES (77, 'Admin SDM', '2024-01-23 09:09:48', '2024-01-23 09:09:48', NULL);
INSERT INTO `bios_roles` VALUES (78, 'Admin Pusbangdik', '2024-01-23 09:12:16', '2024-01-23 09:12:16', NULL);
INSERT INTO `bios_roles` VALUES (79, 'Admin PPM', '2024-01-23 09:15:02', '2024-01-23 09:15:02', NULL);
INSERT INTO `bios_roles` VALUES (80, 'Admin Kemahasiswaan', '2024-01-23 09:20:13', '2024-01-23 09:20:13', NULL);
INSERT INTO `bios_roles` VALUES (81, 'Admin Mutu', '2024-01-23 09:20:47', '2024-01-23 09:20:47', NULL);

-- ----------------------------
-- Table structure for bios_saldo_dana_kelolaan
-- ----------------------------
DROP TABLE IF EXISTS `bios_saldo_dana_kelolaan`;
CREATE TABLE `bios_saldo_dana_kelolaan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `kdbank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `saldo_akhir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_saldo_dana_kelolaan
-- ----------------------------
INSERT INTO `bios_saldo_dana_kelolaan` VALUES (1, '2024-01-01', '002', '00202910', '2000000000', 1, 1, '2024-01-04 08:18:31', '2024-01-04 08:18:52', NULL, '2024-01-04 08:18:52');

-- ----------------------------
-- Table structure for bios_saldo_rekening_operasional
-- ----------------------------
DROP TABLE IF EXISTS `bios_saldo_rekening_operasional`;
CREATE TABLE `bios_saldo_rekening_operasional`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `kdbank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `saldo_akhir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_saldo_rekening_operasional
-- ----------------------------
INSERT INTO `bios_saldo_rekening_operasional` VALUES (1, '2024-01-01', '002', '00200211', 'Direktorat Poltekkes Medan', '3000000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, '2024-01-04 07:17:35');
INSERT INTO `bios_saldo_rekening_operasional` VALUES (2, '2023-01-01', '002', '00200211', 'Direktorat Poltekkes Medan', '120000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (3, '2013-01-02', '002', '00200211', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (4, '2023-02-01', '002', '00200211', 'Direktorat Poltekkes Medan', '100000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (5, '2023-02-02', '002', '00200211', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (6, '2023-03-01', '002', '00200211', 'Direktorat Poltekkes Medan', '250000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (7, '2023-03-02', '002', '00200211', 'Direktorat Poltekkes Medan', '350000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (8, '2023-04-01', '002', '00200211', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (9, '2023-04-02', '002', '00200211', 'Direktorat Poltekkes Medan', '400000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (10, '2023-05-01', '002', '00200211', 'Direktorat Poltekkes Medan', '500000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (11, '2023-05-02', '002', '00200211', 'Direktorat Poltekkes Medan', '400000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (12, '2023-06-01', '002', '00200211', 'Direktorat Poltekkes Medan', '300000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (13, '2023-06-02', '002', '00200211', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (14, '2023-07-01', '002', '00200211', 'Direktorat Poltekkes Medan', '430000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (15, '2023-07-02', '002', '00200211', 'Direktorat Poltekkes Medan', '120000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (16, '2023-08-01', '002', '00200211', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (17, '2023-08-02', '002', '00200211', 'Direktorat Poltekkes Medan', '100000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (18, '2023-09-01', '002', '00200211', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (19, '2023-09-02', '002', '00200211', 'Direktorat Poltekkes Medan', '250000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (20, '2023-10-01', '002', '00200211', 'Direktorat Poltekkes Medan', '350000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (21, '2023-10-02', '002', '00200211', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (22, '2023-11-01', '002', '00200211', 'Direktorat Poltekkes Medan', '400000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (23, '2023-11-02', '002', '00200211', 'Direktorat Poltekkes Medan', '500000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (24, '2023-12-01', '002', '00200211', 'Direktorat Poltekkes Medan', '400000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (25, '2023-12-02', '002', '00200211', 'Direktorat Poltekkes Medan', '300000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (26, '2023-01-01', '009', '00923411', 'Direktorat Poltekkes Medan', '120000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (27, '2013-01-02', '009', '00923411', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (28, '2023-02-01', '009', '00923411', 'Direktorat Poltekkes Medan', '100000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (29, '2023-02-02', '009', '00923411', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (30, '2023-03-01', '009', '00923411', 'Direktorat Poltekkes Medan', '250000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (31, '2023-03-02', '009', '00923411', 'Direktorat Poltekkes Medan', '350000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (32, '2023-04-01', '009', '00923411', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (33, '2023-04-02', '009', '00923411', 'Direktorat Poltekkes Medan', '400000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (34, '2023-05-01', '009', '00923411', 'Direktorat Poltekkes Medan', '500000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (35, '2023-05-02', '009', '00923411', 'Direktorat Poltekkes Medan', '400000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (36, '2023-06-01', '009', '00923411', 'Direktorat Poltekkes Medan', '300000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (37, '2023-06-02', '009', '00923411', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (38, '2023-07-01', '009', '00923411', 'Direktorat Poltekkes Medan', '430000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (39, '2023-07-02', '009', '00923411', 'Direktorat Poltekkes Medan', '120000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (40, '2023-08-01', '009', '00923411', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (41, '2023-08-02', '009', '00923411', 'Direktorat Poltekkes Medan', '100000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (42, '2023-09-01', '009', '00923411', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (43, '2023-09-02', '009', '00923411', 'Direktorat Poltekkes Medan', '250000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (44, '2023-10-01', '009', '00923411', 'Direktorat Poltekkes Medan', '350000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (45, '2023-10-02', '009', '00923411', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (46, '2023-11-01', '009', '00923411', 'Direktorat Poltekkes Medan', '430000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (47, '2023-11-02', '009', '00923411', 'Direktorat Poltekkes Medan', '120000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (48, '2023-12-01', '009', '00923411', 'Direktorat Poltekkes Medan', '200000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);
INSERT INTO `bios_saldo_rekening_operasional` VALUES (49, '2023-12-02', '009', '00923411', 'Direktorat Poltekkes Medan', '100000000', 1, 1, '2024-01-03 09:18:07', '2024-01-04 07:17:35', NULL, NULL);

-- ----------------------------
-- Table structure for bios_saldo_rekening_pengelolaan_kas
-- ----------------------------
DROP TABLE IF EXISTS `bios_saldo_rekening_pengelolaan_kas`;
CREATE TABLE `bios_saldo_rekening_pengelolaan_kas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `no_bilyet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_deposito` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nilai_bunga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_saldo_rekening_pengelolaan_kas
-- ----------------------------
INSERT INTO `bios_saldo_rekening_pengelolaan_kas` VALUES (1, '2023-12-01', '980122', '20', '10', 1, 1, '2024-01-04 04:50:19', '2024-01-04 07:25:55', NULL, '2024-01-04 07:25:55');

-- ----------------------------
-- Table structure for bios_study_programs
-- ----------------------------
DROP TABLE IF EXISTS `bios_study_programs`;
CREATE TABLE `bios_study_programs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `major_id` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_study_programs
-- ----------------------------
INSERT INTO `bios_study_programs` VALUES (1, 6, 'D3 Farmasi', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (2, 5, 'D3 Gizi', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (3, 2, 'D3 Kebidanan', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (4, 2, 'D3 Kebidanan Tapanuli Utara', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (5, 2, 'D3 Kebidanan P. Siantar', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (6, 2, 'D3 Kebidanan P. Sidempuan', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (7, 1, 'D3 Keperawatan', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (8, 1, 'D3 Keperawatan Dairi', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (9, 1, 'D3 Keperawatan Tapanuli Tengah', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (10, 1, 'D3 Keparawatan Gunungsitoli', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (11, 3, 'D3 Kesehatan Gigi', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (12, 4, 'D3 Sanitasi', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (13, 7, 'D3 Teknologi Laboratorium Medis', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (14, 5, 'D4 Gizi dan Dietetika', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (15, 2, 'D4 Kebidanan', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (16, 1, 'D4 Keperawatan', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (17, 4, 'D4 Sanitasi Lingkungan', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (18, 2, 'Pendidikan Profesi Bidan', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);
INSERT INTO `bios_study_programs` VALUES (19, 1, 'Pendidikan Profesi Ners', '2023-12-18 15:50:00', '2023-12-18 15:50:00', NULL);

-- ----------------------------
-- Table structure for bios_sumber_dana_beasiswa
-- ----------------------------
DROP TABLE IF EXISTS `bios_sumber_dana_beasiswa`;
CREATE TABLE `bios_sumber_dana_beasiswa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `sumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_sumber_dana_beasiswa
-- ----------------------------
INSERT INTO `bios_sumber_dana_beasiswa` VALUES (1, '2024-01-07', 'Arab', '1000000000', 1, NULL, '2024-01-08 08:29:01', '2024-01-08 08:29:04', NULL, '2024-01-08 08:29:04');

-- ----------------------------
-- Table structure for bios_sumber_dana_penelitian
-- ----------------------------
DROP TABLE IF EXISTS `bios_sumber_dana_penelitian`;
CREATE TABLE `bios_sumber_dana_penelitian`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `sumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_rupiah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_sumber_dana_penelitian
-- ----------------------------
INSERT INTO `bios_sumber_dana_penelitian` VALUES (1, '2024-01-10', 'RM', '10000000000', 1, 1, '2024-01-11 03:23:12', '2024-01-11 03:33:37', NULL, '2024-01-11 03:33:37');

-- ----------------------------
-- Table structure for bios_sumber_dana_pengabdian_pada_masyarakat
-- ----------------------------
DROP TABLE IF EXISTS `bios_sumber_dana_pengabdian_pada_masyarakat`;
CREATE TABLE `bios_sumber_dana_pengabdian_pada_masyarakat`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `sumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_rupiah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_sumber_dana_pengabdian_pada_masyarakat
-- ----------------------------
INSERT INTO `bios_sumber_dana_pengabdian_pada_masyarakat` VALUES (1, '2024-01-10', 'RM', '1000000000', 1, NULL, '2024-01-11 08:46:59', '2024-01-11 08:47:00', NULL, '2024-01-11 08:47:00');

-- ----------------------------
-- Table structure for bios_users
-- ----------------------------
DROP TABLE IF EXISTS `bios_users`;
CREATE TABLE `bios_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_users
-- ----------------------------
INSERT INTO `bios_users` VALUES (1, 'Administrator', 'admin', '$2y$10$Xze3BbvZYLQGf/WcH3M/V.bmEAw761aXvfc8E3SEuIlkFMZ/aqD3e', '754bcf4b23f6b6f887e30182f22ac0b7bd577256d26e7e744546ac8403ee855a3aa236909dd98571731913e85f8dd1b1e7c9', 73, '2023-11-27 10:04:09', '2023-12-13 01:30:53', NULL);
INSERT INTO `bios_users` VALUES (2, 'admin 2', 'admin2', '$2y$10$Cul6bw7yYi6Z/GGAbCpN2OhfaiaviuGMnhPhufzRJXqCifKZkCANa', NULL, 74, '2023-12-11 07:51:29', '2023-12-13 02:12:12', NULL);

-- ----------------------------
-- Table structure for bios_web_service_settings
-- ----------------------------
DROP TABLE IF EXISTS `bios_web_service_settings`;
CREATE TABLE `bios_web_service_settings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_satker` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `key_dev` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bios_web_service_settings
-- ----------------------------
INSERT INTO `bios_web_service_settings` VALUES (1, 'Development', '632111', 'wfCJV4kci7zkmMt4wGztFnuW4oGTBbIE', 'https://training-bios2.kemenkeu.go.id/api/', 1, '2023-12-13 15:09:42', '2023-12-14 04:25:29');
INSERT INTO `bios_web_service_settings` VALUES (2, 'Production', '632111', '-', 'https://bios.kemenkeu.go.id/api/', 0, NULL, '2023-12-14 04:25:37');

SET FOREIGN_KEY_CHECKS = 1;
