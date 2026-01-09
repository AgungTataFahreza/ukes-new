/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : ukes-new

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 09/01/2026 23:27:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ukes_applicant_medical_records
-- ----------------------------
DROP TABLE IF EXISTS `ukes_applicant_medical_records`;
CREATE TABLE `ukes_applicant_medical_records`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `period_id` int(11) NULL DEFAULT NULL COMMENT 'relasi ke periode',
  `nomor_peserta` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'data peserta',
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'data peserta',
  `jenis_kelamin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'data peserta',
  `study_program_id` int(11) NULL DEFAULT NULL COMMENT 'data peserta',
  `tanggal_lahir` date NULL DEFAULT NULL COMMENT 'data peserta',
  `tgl_registrasi` date NULL DEFAULT NULL COMMENT 'data peserta',
  `tgl_periksa` date NULL DEFAULT NULL COMMENT 'data peserta',
  `status_bayar` int(1) NULL DEFAULT NULL COMMENT 'data peserta',
  `nomor_antrian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'data peserta',
  `tempat_periksa` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'data peserta',
  `petugas_registrasi_id` int(11) NULL DEFAULT NULL COMMENT 'data peserta',
  `dokter_id` int(11) NULL DEFAULT NULL COMMENT 'antro',
  `paramedis_1_id` int(11) NULL DEFAULT NULL COMMENT 'antro',
  `tinggi_badan` decimal(5, 2) NULL DEFAULT NULL COMMENT 'antro',
  `berat_badan` decimal(5, 2) NULL DEFAULT NULL COMMENT 'antro',
  `tekanan_darah_sistolik` int(3) NULL DEFAULT NULL COMMENT 'antro',
  `tekanan_darah_diastolik` int(3) NULL DEFAULT NULL COMMENT 'antro',
  `nadi` int(3) NULL DEFAULT NULL COMMENT 'antro',
  `status_antropometri` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'antro',
  `catatan_antropometri` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'antro',
  `keterangan_antropometri` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'antro',
  `paramedis_2_id` int(11) NULL DEFAULT NULL COMMENT 'fisik_1',
  `status_kulit` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_kulit',
  `catatan_kulit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_kulit',
  `keterangan_kulit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_kulit',
  `status_mata` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_mata',
  `visus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_mata',
  `buta_warna` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_mata',
  `catatan_mata` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_mata',
  `keterangan_mata` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_mata',
  `status_telinga` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_telinga',
  `telinga_kanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_telinga',
  `telinga_kiri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_telinga',
  `catatan_telinga` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_telinga',
  `keterangan_telinga` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_telinga',
  `status_hidung` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_hidung',
  `catatan_hidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_hidung',
  `keterangan_hidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_hidung',
  `status_lidah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_lidah',
  `catatan_lidah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_lidah',
  `keterangan_lidah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_lidah',
  `status_pharynx` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_pharynx',
  `catatan_pharynx` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_pharynx',
  `keterangan_pharynx` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_pharynx',
  `status_tonsil` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_1_tonsil',
  `catatan_tonsil` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_tonsil',
  `keterangan_tonsil` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_1_tonsil',
  `paramedis_3_id` int(11) NULL DEFAULT NULL COMMENT 'fisik_2',
  `status_thyroid` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_2_thyroid',
  `catatan_thyroid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_thyroid',
  `keterangan_thyroid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_thyroid',
  `status_jantung` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_2_jantung',
  `catatan_jantung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_jantung',
  `keterangan_jantung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_jantung',
  `status_paru_paru` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_2_paru_paru',
  `catatan_paru_paru` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_paru_paru',
  `keterangan_paru_paru` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_paru_paru',
  `status_abdomen` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_2_abdomen',
  `catatan_abdomen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_abdomen',
  `keterangan_abdomen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_abdomen',
  `status_refleks_pupil` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_2_refleks',
  `status_refleks_patela` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_2_refleks',
  `status_refleks_achiles` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_2_refleks',
  `catatan_refleks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_refleks',
  `keterangan_refleks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_refleks',
  `status_thorax` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_2_thorax',
  `catatan_thorax` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_thorax',
  `keterangan_thorax` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_thorax',
  `status_kemampuan_bicara` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'fisik_2_kemampuan_bicara',
  `catatan_kemampuan_bicara` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_kemampuan_bicara',
  `keterangan_kemampuan_bicara` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'fisik_2_kemampuan_bicara',
  `status_gigi` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'gigi',
  `catatan_gigi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'gigi',
  `keterangan_gigi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'gigi',
  `dokter_gigi_id` int(11) NULL DEFAULT NULL COMMENT 'gigi',
  `perawat_gigi_id` int(11) NULL DEFAULT NULL COMMENT 'gigi',
  `amp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'narkoba',
  `mop` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'narkoba',
  `thc` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'narkoba',
  `petugas_narkoba_id` int(11) NULL DEFAULT NULL COMMENT 'narkoba',
  `riwayat_penyakit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'kesimpulan',
  `kesimpulan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT 'kesimpulan',
  `rekomendasi` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'rekomendasi',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ukes_applicant_medical_records
-- ----------------------------
INSERT INTO `ukes_applicant_medical_records` VALUES (1, 4, '198028340', 'abdul', 'L', 2, '2002-12-11', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-30 07:54:57', '2025-12-30 07:56:29', '2025-12-30 07:56:29');
INSERT INTO `ukes_applicant_medical_records` VALUES (2, 4, '1', 'agung', 'L', 2, '2002-12-03', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-30 09:07:08', '2025-12-30 09:07:08', NULL);
INSERT INTO `ukes_applicant_medical_records` VALUES (3, 4, '2', 'tata', 'P', 2, '2002-12-16', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-30 09:07:08', '2025-12-30 09:07:08', NULL);
INSERT INTO `ukes_applicant_medical_records` VALUES (4, 4, '3', 'fahreza', 'L', 2, '2002-12-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-30 09:07:08', '2025-12-30 09:07:08', NULL);
INSERT INTO `ukes_applicant_medical_records` VALUES (5, 3, '4', 'arini', 'P', 4, '2003-02-13', '2026-01-08', NULL, 1, '000', 'Klinik Pratama Poltekkes Medan', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-30 09:07:57', '2026-01-09 16:27:22', NULL);
INSERT INTO `ukes_applicant_medical_records` VALUES (6, 3, '5', 'muftih', 'L', 4, '2002-12-24', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-30 09:07:57', '2025-12-30 09:07:57', NULL);
INSERT INTO `ukes_applicant_medical_records` VALUES (7, 3, '6', 'fadhila', 'P', 4, '2002-12-26', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-30 09:07:57', '2025-12-30 09:07:57', NULL);
INSERT INTO `ukes_applicant_medical_records` VALUES (8, 3, '7', 'qory', 'L', 11, '2002-12-22', '2026-01-01', '2026-01-04', 1, NULL, 'Klinik Pratama Poltekkes Medan', 1, 10, 9, 155.00, 90.00, 120, 80, 90, 'Normal', 'DBN', 'DBN', 6, 'Normal', 'DBN', 'DBN', 'Normal', '1.5', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 8, 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'Normal', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 12, 7, 'Negatif', 'Negatif', 'Negatif', 13, 'DBN', 'Dapat', 'Dapat', '2025-12-30 09:19:19', '2026-01-09 11:40:02', NULL);
INSERT INTO `ukes_applicant_medical_records` VALUES (9, 3, '8', 'kadir', 'P', 11, '2002-12-12', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-30 09:19:19', '2025-12-30 09:19:19', NULL);
INSERT INTO `ukes_applicant_medical_records` VALUES (10, 3, '9', 'kudir', 'P', 11, '2002-12-01', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-30 09:19:19', '2025-12-30 09:19:19', NULL);
INSERT INTO `ukes_applicant_medical_records` VALUES (11, 3, '9788728', 'ivan', 'L', 1, '1998-02-03', '2026-01-09', '2026-01-09', 1, '000', 'Klinik Pratama Poltekkes Medan', 1, 10, 8, 144.90, 60.00, 0, 0, 0, 'Normal', 'DBN', 'DBN', 3, 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 9, 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'Normal', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 'Normal', 'DBN', 'DBN', 12, 7, 'Negatif', 'Negatif', 'Negatif', 13, 'DBN', 'Tidak Dapat (Tinggi Badan Kurang, 144.90 cm)', 'Tidak Dapat', '2026-01-09 11:25:57', '2026-01-09 11:38:37', NULL);

-- ----------------------------
-- Table structure for ukes_menus
-- ----------------------------
DROP TABLE IF EXISTS `ukes_menus`;
CREATE TABLE `ukes_menus`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `has_upload` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT current_timestamp(0),
  `updated_at` datetime(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `has_view` int(1) NULL DEFAULT NULL,
  `has_add` int(1) NULL DEFAULT NULL,
  `has_edit` int(1) NULL DEFAULT NULL,
  `has_delete` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ukes_menus
-- ----------------------------
INSERT INTO `ukes_menus` VALUES (36, NULL, 'Data Pelengkap', 'Data Pelengkap', NULL, '2025-12-29 07:29:08', '2025-12-29 07:29:08', NULL, 0, 0, 0, 0);
INSERT INTO `ukes_menus` VALUES (37, 36, 'Periode', 'Periode', NULL, '2025-12-29 07:29:32', '2025-12-29 07:29:32', NULL, 1, 1, 1, 1);
INSERT INTO `ukes_menus` VALUES (38, 36, 'Tahun', 'Tahun', NULL, '2025-12-29 07:29:46', '2025-12-29 07:29:53', NULL, 1, 1, 1, 1);
INSERT INTO `ukes_menus` VALUES (39, 36, 'Menu', 'Menu', NULL, '2025-12-29 07:35:53', '2025-12-29 07:35:53', NULL, 1, 1, 1, 1);
INSERT INTO `ukes_menus` VALUES (40, 36, 'Program Studi', 'Program Studi', NULL, '2025-12-29 07:36:07', '2025-12-29 07:36:07', NULL, 1, 1, 1, 1);
INSERT INTO `ukes_menus` VALUES (41, NULL, 'Pengguna', 'Pengguna', NULL, '2025-12-29 07:36:21', '2025-12-29 07:36:21', NULL, 1, 1, 1, 1);
INSERT INTO `ukes_menus` VALUES (42, 41, 'User', 'User', NULL, '2025-12-29 07:36:43', '2025-12-29 07:36:43', NULL, 1, 1, 1, 1);
INSERT INTO `ukes_menus` VALUES (43, 41, 'Role', 'Role', NULL, '2025-12-29 07:36:57', '2025-12-29 07:36:57', NULL, 1, 1, 1, 1);
INSERT INTO `ukes_menus` VALUES (44, NULL, 'Uji Kesehatan', 'Uji Kesehatan', NULL, '2025-12-29 07:37:57', '2025-12-29 07:37:57', NULL, 0, 0, 0, 0);
INSERT INTO `ukes_menus` VALUES (45, 44, 'Registrasi Peserta', 'Registrasi Peserta', NULL, '2025-12-29 07:38:33', '2025-12-29 07:39:47', NULL, 1, 0, 1, 0);
INSERT INTO `ukes_menus` VALUES (46, 44, 'Update Pembayaran', 'Update Pembayaran', NULL, '2025-12-29 07:38:49', '2025-12-30 06:56:52', '2025-12-30 06:56:52', 1, 0, 1, 0);
INSERT INTO `ukes_menus` VALUES (47, 44, 'Formulir Uji Kesehatan', 'Formulir Uji Kesehatan', NULL, '2025-12-29 07:39:09', '2025-12-29 07:40:04', NULL, 1, 0, 1, 0);
INSERT INTO `ukes_menus` VALUES (48, 44, 'Data Hasil Pemeriksaan', 'Data Hasil Pemeriksaan', NULL, '2025-12-29 07:39:27', '2025-12-29 07:40:17', NULL, 1, 0, 1, 0);
INSERT INTO `ukes_menus` VALUES (49, 44, 'Daftar Peserta', 'Daftar Peserta', NULL, '2025-12-30 04:13:17', '2025-12-30 04:13:17', NULL, 1, 1, 1, 1);

-- ----------------------------
-- Table structure for ukes_periods
-- ----------------------------
DROP TABLE IF EXISTS `ukes_periods`;
CREATE TABLE `ukes_periods`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `year_id` int(11) NULL DEFAULT NULL,
  `is_active` int(1) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ukes_periods
-- ----------------------------
INSERT INTO `ukes_periods` VALUES (1, 'PMDP', 1, 0, '2025-12-28 14:23:45', '2025-12-28 14:44:58', NULL);
INSERT INTO `ukes_periods` VALUES (2, 'SPMB Prestasi', 7, 0, '2025-12-28 14:25:16', '2025-12-30 07:51:30', NULL);
INSERT INTO `ukes_periods` VALUES (3, 'SPMB Bersama', 7, 1, '2025-12-28 14:25:27', '2025-12-30 09:18:19', NULL);
INSERT INTO `ukes_periods` VALUES (4, 'SPMB Mandiri', 7, 0, '2025-12-28 14:25:57', '2025-12-30 09:18:19', NULL);

-- ----------------------------
-- Table structure for ukes_role_permissions
-- ----------------------------
DROP TABLE IF EXISTS `ukes_role_permissions`;
CREATE TABLE `ukes_role_permissions`  (
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
) ENGINE = InnoDB AUTO_INCREMENT = 1904 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ukes_role_permissions
-- ----------------------------
INSERT INTO `ukes_role_permissions` VALUES (1806, 85, 48, 1, 0, 1, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1807, 85, 36, 0, 0, 0, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1808, 85, 47, 1, 0, 1, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1809, 85, 39, 0, 0, 0, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1810, 85, 41, 0, 0, 0, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1811, 85, 37, 0, 0, 0, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1812, 85, 40, 0, 0, 0, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1813, 85, 45, 1, 0, 1, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1814, 85, 43, 0, 0, 0, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1815, 85, 38, 0, 0, 0, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1816, 85, 44, 0, 0, 0, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1818, 85, 42, 0, 0, 0, 0, 0, '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1819, 86, 48, 1, 0, 1, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1820, 86, 36, 0, 0, 0, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1821, 86, 47, 1, 0, 1, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1822, 86, 39, 0, 0, 0, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1823, 86, 41, 0, 0, 0, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1824, 86, 37, 0, 0, 0, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1825, 86, 40, 0, 0, 0, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1826, 86, 45, 1, 0, 1, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1827, 86, 43, 0, 0, 0, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1828, 86, 38, 0, 0, 0, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1829, 86, 44, 0, 0, 0, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1831, 86, 42, 0, 0, 0, 0, 0, '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1832, 87, 48, 1, 0, 1, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1833, 87, 36, 0, 0, 0, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1834, 87, 47, 1, 0, 1, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1835, 87, 39, 0, 0, 0, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1836, 87, 41, 0, 0, 0, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1837, 87, 37, 0, 0, 0, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1838, 87, 40, 0, 0, 0, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1839, 87, 45, 1, 0, 1, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1840, 87, 43, 0, 0, 0, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1841, 87, 38, 0, 0, 0, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1842, 87, 44, 0, 0, 0, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1844, 87, 42, 0, 0, 0, 0, 0, '2025-12-30 04:11:52', '2025-12-30 04:15:40', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1845, 2, 48, 1, 0, 1, 0, 0, '2025-12-30 04:12:15', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1846, 2, 36, 0, 0, 0, 0, 0, '2025-12-30 04:12:15', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1847, 2, 47, 1, 0, 1, 0, 0, '2025-12-30 04:12:15', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1848, 2, 39, 0, 0, 0, 0, 0, '2025-12-30 04:12:15', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1849, 2, 41, 0, 0, 0, 0, 0, '2025-12-30 04:12:15', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1850, 2, 37, 0, 0, 0, 0, 0, '2025-12-30 04:12:15', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1851, 2, 40, 0, 0, 0, 0, 0, '2025-12-30 04:12:15', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1852, 2, 45, 1, 0, 1, 0, 0, '2025-12-30 04:12:16', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1853, 2, 43, 0, 0, 0, 0, 0, '2025-12-30 04:12:16', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1854, 2, 38, 0, 0, 0, 0, 0, '2025-12-30 04:12:16', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1855, 2, 44, 0, 0, 0, 0, 0, '2025-12-30 04:12:16', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1857, 2, 42, 0, 0, 0, 0, 0, '2025-12-30 04:12:16', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1858, 3, 48, 1, 0, 1, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1859, 3, 36, 0, 0, 0, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1860, 3, 47, 1, 0, 1, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1861, 3, 39, 0, 0, 0, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1862, 3, 41, 0, 0, 0, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1863, 3, 37, 0, 0, 0, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1864, 3, 40, 0, 0, 0, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1865, 3, 45, 1, 0, 1, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1866, 3, 43, 0, 0, 0, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1867, 3, 38, 0, 0, 0, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1868, 3, 44, 0, 0, 0, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1870, 3, 42, 0, 0, 0, 0, 0, '2025-12-30 04:12:43', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1871, 1, 49, 1, 1, 1, 1, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1872, 1, 48, 1, 0, 1, 0, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1873, 1, 36, 0, 0, 0, 0, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1874, 1, 47, 1, 0, 1, 0, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1875, 1, 39, 1, 1, 1, 1, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1876, 1, 41, 0, 0, 0, 0, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1877, 1, 37, 1, 1, 1, 1, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1878, 1, 40, 1, 1, 1, 1, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1879, 1, 45, 1, 0, 1, 0, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1880, 1, 43, 1, 1, 1, 1, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1881, 1, 38, 1, 1, 1, 1, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1882, 1, 44, 0, 0, 0, 0, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1884, 1, 42, 1, 1, 1, 1, 0, '2025-12-30 04:13:49', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1885, 2, 49, 1, 1, 1, 1, 0, '2025-12-30 04:14:07', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1886, 3, 49, 1, 1, 1, 1, 0, '2025-12-30 04:14:21', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1887, 4, 49, 1, 1, 1, 1, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1888, 4, 48, 1, 0, 1, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1889, 4, 36, 0, 0, 0, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1890, 4, 47, 1, 0, 1, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1891, 4, 39, 0, 0, 0, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1892, 4, 41, 0, 0, 0, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1893, 4, 37, 0, 0, 0, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1894, 4, 40, 0, 0, 0, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1895, 4, 45, 1, 0, 1, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1896, 4, 43, 0, 0, 0, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1897, 4, 38, 0, 0, 0, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1898, 4, 44, 0, 0, 0, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1900, 4, 42, 0, 0, 0, 0, 0, '2025-12-30 04:14:50', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1901, 85, 49, 1, 1, 1, 1, 0, '2025-12-30 04:15:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1902, 86, 49, 1, 1, 1, 1, 0, '2025-12-30 04:15:25', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_role_permissions` VALUES (1903, 87, 49, 1, 1, 1, 1, 0, '2025-12-30 04:15:40', '2025-12-30 04:15:40', NULL);

-- ----------------------------
-- Table structure for ukes_roles
-- ----------------------------
DROP TABLE IF EXISTS `ukes_roles`;
CREATE TABLE `ukes_roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `updated_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 88 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ukes_roles
-- ----------------------------
INSERT INTO `ukes_roles` VALUES (1, 'Administrator', '2023-12-06 09:18:47', '2025-12-30 04:13:49', NULL);
INSERT INTO `ukes_roles` VALUES (2, 'Dokter', '2023-12-13 02:11:51', '2025-12-30 04:14:07', NULL);
INSERT INTO `ukes_roles` VALUES (3, 'Paramedis', '2024-01-23 02:33:17', '2025-12-30 04:14:21', NULL);
INSERT INTO `ukes_roles` VALUES (4, 'Petugas Registrasi', '2024-01-23 02:34:58', '2025-12-30 04:14:50', NULL);
INSERT INTO `ukes_roles` VALUES (82, 'tes', '2025-12-30 02:33:24', '2025-12-30 03:13:08', '2025-12-30 03:13:08');
INSERT INTO `ukes_roles` VALUES (83, 'tess', '2025-12-30 02:45:45', '2025-12-30 03:13:21', '2025-12-30 03:13:21');
INSERT INTO `ukes_roles` VALUES (84, 'tesss', '2025-12-30 02:50:23', '2025-12-30 03:13:26', '2025-12-30 03:13:26');
INSERT INTO `ukes_roles` VALUES (85, 'Perawat Gigi', '2025-12-30 04:10:07', '2025-12-30 04:15:07', NULL);
INSERT INTO `ukes_roles` VALUES (86, 'Dokter Gigi', '2025-12-30 04:11:11', '2025-12-30 04:15:25', NULL);
INSERT INTO `ukes_roles` VALUES (87, 'Petugas Narkoba', '2025-12-30 04:11:51', '2025-12-30 04:15:40', NULL);

-- ----------------------------
-- Table structure for ukes_study_programs
-- ----------------------------
DROP TABLE IF EXISTS `ukes_study_programs`;
CREATE TABLE `ukes_study_programs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ukes_study_programs
-- ----------------------------
INSERT INTO `ukes_study_programs` VALUES (1, 'D3 Teknologi Laboratorium Medis', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (2, 'D3 Farmasi', '2025-12-24 10:01:42', '2025-12-28 13:36:04', NULL);
INSERT INTO `ukes_study_programs` VALUES (3, 'D4 Gizi dan Dietetika', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (4, 'D3 Gizi', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (5, 'D4 Kebidanan', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (6, 'D3 Kebidanan', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (7, 'D3 Kebidanan (Kampus P. Siantar)', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (8, 'D3 Kebidanan (Kampus Kab. Tapanuli Utara)', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (9, 'Pendidikan Profesi Bidan', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (10, 'D4 Keperawatan', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (11, 'D3 Keperawatan', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (12, 'D3 Keperawatan (Kampus Kab. Dairi)', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (13, 'D3 Keperawatan (Kampus Kab. Tapanuli Tengah)', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (14, 'D3 Keperawatan (Kampus Kota Gunung Sitoli)', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (15, 'Pendidikan Profesi NERS', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (16, 'D3 Kesehatan Gigi', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (17, 'D4 Sanitasi Lingkungan', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);
INSERT INTO `ukes_study_programs` VALUES (18, 'D3 Sanitasi', '2025-12-24 10:01:42', '2025-12-24 10:01:42', NULL);

-- ----------------------------
-- Table structure for ukes_users
-- ----------------------------
DROP TABLE IF EXISTS `ukes_users`;
CREATE TABLE `ukes_users`  (
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
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ukes_users
-- ----------------------------
INSERT INTO `ukes_users` VALUES (1, 'Administrator', 'admin', '$2y$10$ApXFSUx9dsulJ0qFJs9fQOIMLN80WFBCEtnNj4feVTtRzhU9aW0ym', '754bcf4b23f6b6f887e30182f22ac0b7bd577256d26e7e744546ac8403ee855a3aa236909dd98571731913e85f8dd1b1e7c9', 1, '2023-11-27 10:04:09', '2025-12-30 03:50:31', NULL);
INSERT INTO `ukes_users` VALUES (2, 'admin 2', 'admin 2', '$2y$10$sAJWeawctpEDs35p5tJHFeZtH4UP0lFckrmRLxXklygtspQXx5qda', NULL, 1, '2023-12-11 07:51:29', '2025-12-30 04:07:59', '2025-12-30 04:07:59');
INSERT INTO `ukes_users` VALUES (3, 'Arini Muftih Fadhila', 'paramedis1', '$2y$10$6AjJwTwOnle0LCZ74VgRC.HFHlU2xzpDKUsImNitjtzGaVEpWLaJK', NULL, 3, '2025-12-30 03:52:18', '2025-12-30 04:16:38', NULL);
INSERT INTO `ukes_users` VALUES (4, 'tes', 'tes', '$2y$10$C9xXSmR9tnxZPDFi7MSIdu7CeRK65bebZonryA62zffAuPvWRhdHy', NULL, 4, '2025-12-30 04:08:23', '2025-12-30 04:08:28', '2025-12-30 04:08:28');
INSERT INTO `ukes_users` VALUES (5, 'Tri Wahyuni, Amd.Kep', 'paramedis2', '$2y$10$AbmB4FjVD.UcS8RS9KvZ/OrRQL3DllnIj7mjUwpb5uBJjuXCqv9j.', NULL, 3, '2026-01-04 08:58:06', '2026-01-04 08:58:06', NULL);
INSERT INTO `ukes_users` VALUES (6, 'Wardati Humaira', 'paramedis3', '$2y$10$g6t9CwUM0BDspuihri8nq.1J4vHAfoBLl30xlIN2FMZ/o1Wbe.Ev2', NULL, 3, '2026-01-04 08:58:56', '2026-01-04 08:58:56', NULL);
INSERT INTO `ukes_users` VALUES (7, 'Irma Rahmadani, Amd.Kes', 'paramedis4', '$2y$10$/XqfGSi2HmbZmgjehfws3eykUKiK9nb7V05IURiv7Qqt9L.cFHy.W', NULL, 85, '2026-01-04 09:11:41', '2026-01-04 09:11:41', NULL);
INSERT INTO `ukes_users` VALUES (8, 'Sulastri GP Tambunan', 'paramedis5', '$2y$10$oct.ltJsfIdmCHdxpePjPeS2vxAYGaRUlB88rrktnbYjwI4dgBoFG', NULL, 3, '2026-01-04 09:12:16', '2026-01-04 09:12:16', NULL);
INSERT INTO `ukes_users` VALUES (9, 'Halimah Tussadiah Lubis', 'paramedis6', '$2y$10$ZpSrNZmKFNsdtX3RV3vGJe06aMdOkoLuvRoSx8VQFGvU3ffd1ZGOK', NULL, 3, '2026-01-04 09:13:40', '2026-01-04 09:13:40', NULL);
INSERT INTO `ukes_users` VALUES (10, 'dr. Lestari Rahmah, M.KT', 'dokter1', '$2y$10$0FX7mue2HcXddaZHUEx4Y.LsLB5bg9ERH/Y6Bx6R.fU.EEWn7wGze', NULL, 2, '2026-01-04 09:14:06', '2026-01-04 09:14:06', NULL);
INSERT INTO `ukes_users` VALUES (11, 'dr. Ratna Zahara', 'dokter2', '$2y$10$plceHn4F4kZme51a8F1UiutElPJc5lrvgiKoYVTg3A9guoeNj/mKS', NULL, 2, '2026-01-04 09:14:35', '2026-01-04 09:14:35', NULL);
INSERT INTO `ukes_users` VALUES (12, 'drg.Bestari Aflah', 'doktergigi1', '$2y$10$wPnOYmyN9Vg/z1C1cv9BeOblIQ256PILKLKbKkHHTQ74deZklRndO', NULL, 86, '2026-01-04 09:16:15', '2026-01-04 09:16:15', NULL);
INSERT INTO `ukes_users` VALUES (13, 'Tania Regita', 'paramedis7', '$2y$10$0UrZYgsinImGB8HoqMwsYuIAWhrKQJuAzJGai3zbq6lfhatXsqUm2', NULL, 87, '2026-01-04 09:17:07', '2026-01-04 09:17:07', NULL);

-- ----------------------------
-- Table structure for ukes_years
-- ----------------------------
DROP TABLE IF EXISTS `ukes_years`;
CREATE TABLE `ukes_years`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(4) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ukes_years
-- ----------------------------
INSERT INTO `ukes_years` VALUES (1, 2023, '2025-12-27 20:48:39', '2025-12-27 20:48:39', NULL);
INSERT INTO `ukes_years` VALUES (2, 2024, '2025-12-27 20:48:39', '2025-12-27 20:48:39', NULL);
INSERT INTO `ukes_years` VALUES (3, 2022, '2025-12-27 14:24:16', '2025-12-27 14:24:16', NULL);
INSERT INTO `ukes_years` VALUES (4, 2021, '2025-12-27 14:25:43', '2025-12-27 14:25:43', NULL);
INSERT INTO `ukes_years` VALUES (5, 2019, '2025-12-27 14:32:39', '2025-12-27 15:00:49', '2025-12-27 15:00:49');
INSERT INTO `ukes_years` VALUES (6, 2019, '2025-12-27 14:33:06', '2025-12-27 14:48:00', '2025-12-27 14:48:00');
INSERT INTO `ukes_years` VALUES (7, 2025, '2025-12-27 14:39:55', '2025-12-27 14:39:55', NULL);

SET FOREIGN_KEY_CHECKS = 1;
