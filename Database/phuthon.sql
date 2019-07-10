-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 07:17 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phuthon`
--

-- --------------------------------------------------------

--
-- Table structure for table `arrest_record`
--

CREATE TABLE `arrest_record` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_date_arrest` datetime NOT NULL,
  `ar_date_record` datetime NOT NULL,
  `court_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_arrest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_record` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_arrest` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `arrest_record`
--

INSERT INTO `arrest_record` (`case_id`, `ar_date_arrest`, `ar_date_record`, `court_name`, `num_arrest`, `location_record`, `location_arrest`) VALUES
('ค.001', '2019-07-03 00:00:00', '2019-07-03 00:00:00', 'ศาลจังหวัดเชียงใหม่', 'จ.123/62', 'สถานีตำรวจ', 'สถานีตำรวจ');

-- --------------------------------------------------------

--
-- Table structure for table `case_name`
--

CREATE TABLE `case_name` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `case_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `case_type` tinyint(2) NOT NULL,
  `case_savetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `case_name`
--

INSERT INTO `case_name` (`case_id`, `case_name`, `case_type`, `case_savetime`) VALUES
('กบ/24.33', 'ไผ่สีทอง', 2, '2019-07-01 08:33:48'),
('ค.001', 'แมวดำ', 1, '2019-07-01 08:32:23'),
('ง.12/52', 'ตีโปร่ง', 2, '2019-07-01 08:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `edu_id` tinyint(2) NOT NULL,
  `edu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`edu_id`, `edu_name`) VALUES
(1, 'ประถมศึกษา'),
(2, 'มัธยมศึกษาตอนต้น'),
(3, 'มัธยมศึกษาตอนปลาย'),
(4, 'ประกาศนียบัตรวิชาชีพ'),
(5, 'ประกาศนียบัตรวิชาชีพชั้นสูง'),
(6, 'ปริญญาตรี'),
(7, 'ปริญญาโท'),
(8, 'ปริญญาเอก');

-- --------------------------------------------------------

--
-- Table structure for table `exhibit`
--

CREATE TABLE `exhibit` (
  `id_exhibit` int(11) NOT NULL,
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exhibit_status` tinyint(2) NOT NULL,
  `exhibit_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exhibit_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exhibit_look` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exhibit_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exhibit`
--

INSERT INTO `exhibit` (`id_exhibit`, `case_id`, `exhibit_status`, `exhibit_name`, `exhibit_size`, `exhibit_look`, `exhibit_image`) VALUES
(0, 'ค.001', 1, 'ไม้ไผ่', '20*60', 'ลำต้นสีเขียว', 'icon_data_exi');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_official`
--

CREATE TABLE `inquiry_official` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rank_id` tinyint(2) NOT NULL,
  `io_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `io_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_id` char(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inquiry_official`
--

INSERT INTO `inquiry_official` (`case_id`, `rank_id`, `io_name`, `io_lastname`, `card_id`) VALUES
('ค.001', 6, 'สืบสวน', 'สอบสวน', '1409908274561');

-- --------------------------------------------------------

--
-- Table structure for table `police_person`
--

CREATE TABLE `police_person` (
  `card_id` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `rank_id` tinyint(2) NOT NULL,
  `ps_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ps_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` tinyint(2) NOT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ps_num` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `police_person`
--

INSERT INTO `police_person` (`card_id`, `rank_id`, `ps_name`, `ps_lastname`, `sex`, `address`, `ps_num`) VALUES
('1234567890123', 1, 'เจริญใจ', 'บำรุงอยู่', 1, NULL, NULL),
('1509903426554', 5, 'ธีรภาพ', 'แดดดวงดี', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rank_police`
--

CREATE TABLE `rank_police` (
  `rank_id` tinyint(2) NOT NULL,
  `rank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rank_police`
--

INSERT INTO `rank_police` (`rank_id`, `rank_name`) VALUES
(1, 'พันตำรวจตรี'),
(2, 'พันตำรวจเอก'),
(3, 'พันตำรวจโท'),
(4, 'ร้อยตำรวจตรี'),
(5, 'นายดาบตำรวจ'),
(6, 'จ่าสิบตำรวจ'),
(7, 'สิบตำรวจเอก'),
(8, 'สิบตำรวจโท'),
(9, 'สิบตำรวจตรี');

-- --------------------------------------------------------

--
-- Table structure for table `responsible_person`
--

CREATE TABLE `responsible_person` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_id` char(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `responsible_person`
--

INSERT INTO `responsible_person` (`case_id`, `card_id`) VALUES
('ค.001', '1234567890123'),
('ง.12/52', '1509903426554');

-- --------------------------------------------------------

--
-- Table structure for table `subpoena`
--

CREATE TABLE `subpoena` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_black` int(11) NOT NULL,
  `num_red` int(11) NOT NULL,
  `arrest_warrant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `search warrant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_num_red` date NOT NULL,
  `date_sue` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `permiss_id` tinyint(2) NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_id` char(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`permiss_id`, `user_id`, `pass_id`, `card_id`) VALUES
(3, 'admin01', 'c93ccd78b2076528346216b3b2f701e6', '1234567890123'),
(3, 'user03', 'b5b73fae0d87d8b4e2573105f8fbe7bc', '1402807627453'),
(3, 'user02', 'b5b73fae0d87d8b4e2573105f8fbe7bc', '1509903426554');

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_sex` tinyint(2) NOT NULL,
  `victim_idcard` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `victim_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `victim_education` tinyint(2) NOT NULL,
  `victim_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `victim`
--

INSERT INTO `victim` (`case_id`, `title_name`, `victim_name`, `victim_lastname`, `victim_sex`, `victim_idcard`, `victim_address`, `victim_education`, `victim_image`) VALUES
('ง.12/52', 'นาย', 'จันทร์ดี', 'โอกาสเดิม', 1, '1508890723431', '23 หมู่ 4 บ้าน ดง ต.ก่อไผ่ อ.ดอกไม้ จ.เชียงใหม่ 54334', 6, 'icon_data_usermale'),
('ค.001', 'นางสาว', 'พะยอง', 'จังเลย', 2, '150964345671', '22 หมู่ 7 ต.ดอกไม้ อ.ต้นไม้ จ.เชียงใหม่ 54334', 5, 'icon_data_userfemale'),
('ค.001', 'นาย', 'ทองคำดี', 'เคยมีสุข', 1, '1509901658485', '78/4 ต.ป่าทอง อ.จัดการ จ.เชียงใหม่ 50990', 4, 'icon_data_usermale');

-- --------------------------------------------------------

--
-- Table structure for table `villain`
--

CREATE TABLE `villain` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villain_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villain_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villain_sex` tinyint(2) NOT NULL,
  `villain_idcard` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `villain_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `villain_education` tinyint(2) DEFAULT NULL,
  `villain_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain`
--

INSERT INTO `villain` (`case_id`, `title_name`, `villain_name`, `villain_lastname`, `villain_sex`, `villain_idcard`, `villain_address`, `villain_education`, `villain_image`) VALUES
('ค.001', 'นาย', 'แดงเดือด', 'เลือดสาด', 1, '1402251685492', '85/2 หมู่ 8 ต.ห้วยหล่อ อ.ดอกเด็ด จ.เชียงใหม่ 50992', 4, 'icon_data_usermale'),
('ง.12/52', 'นาย', 'ดึกดำดึ๋ย', 'เลียนแบบหนัง', 1, '1564821532238', '77/2 หมู่ 1 ต.แดดออก อ.ฝนตก จ.เชียงใหม่ 50287', 8, 'icon_data_usermale');

-- --------------------------------------------------------

--
-- Table structure for table `villain_body`
--

CREATE TABLE `villain_body` (
  `body_id` tinyint(2) NOT NULL,
  `body_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain_body`
--

INSERT INTO `villain_body` (`body_id`, `body_name`) VALUES
(1, 'สูง'),
(2, 'สันทัด'),
(3, 'เตี้ย');

-- --------------------------------------------------------

--
-- Table structure for table `villain_chin`
--

CREATE TABLE `villain_chin` (
  `chin_id` tinyint(2) NOT NULL,
  `chin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain_chin`
--

INSERT INTO `villain_chin` (`chin_id`, `chin_name`) VALUES
(1, 'คางตรง'),
(2, 'คางราบ'),
(3, 'คางยื่น'),
(4, 'คางป้าน'),
(5, 'คางสั้น'),
(6, 'คางยาน');

-- --------------------------------------------------------

--
-- Table structure for table `villain_ears`
--

CREATE TABLE `villain_ears` (
  `ears_id` tinyint(2) NOT NULL,
  `ears_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain_ears`
--

INSERT INTO `villain_ears` (`ears_id`, `ears_name`) VALUES
(1, 'หูสามเหลี่ยม'),
(2, 'หูสี่เหลี่ยม'),
(3, 'หูกลม'),
(4, 'หูกระหล่ำปลี'),
(5, 'หูกาง'),
(6, 'หูลีบ'),
(7, 'ติ่งย้อย'),
(8, 'ติ่งราบ');

-- --------------------------------------------------------

--
-- Table structure for table `villain_eyes`
--

CREATE TABLE `villain_eyes` (
  `eyes_id` tinyint(2) NOT NULL,
  `eyes_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain_eyes`
--

INSERT INTO `villain_eyes` (`eyes_id`, `eyes_name`) VALUES
(1, 'ตาสองชั้น'),
(2, 'ตาชั้นเดียว'),
(3, 'ตากลม'),
(4, 'ตาพองโต'),
(5, 'ตาลึก'),
(6, 'ตาถั่ว'),
(7, 'ตาเข'),
(8, 'ตาเหล่'),
(9, 'ตาเอก');

-- --------------------------------------------------------

--
-- Table structure for table `villain_face`
--

CREATE TABLE `villain_face` (
  `face_id` tinyint(2) NOT NULL,
  `face_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain_face`
--

INSERT INTO `villain_face` (`face_id`, `face_name`) VALUES
(1, 'กลม'),
(2, 'รูปไข่'),
(3, 'สี่เหลี่ยม'),
(4, 'สี่เหลี่ยมยาว'),
(5, 'สามเหลี่ยม'),
(6, 'สามเหลี่ยมยาว'),
(7, 'แหลมหลิม');

-- --------------------------------------------------------

--
-- Table structure for table `villain_forehead`
--

CREATE TABLE `villain_forehead` (
  `forehead_id` tinyint(2) NOT NULL,
  `forehead_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain_forehead`
--

INSERT INTO `villain_forehead` (`forehead_id`, `forehead_name`) VALUES
(1, 'หน้าผากโหนง'),
(2, 'หน้าผากลาด'),
(3, 'หน้าผากแคบ'),
(4, 'หน้าผากสั้น'),
(5, 'หน้าผากสูง'),
(6, 'หน้าผากกว้าง');

-- --------------------------------------------------------

--
-- Table structure for table `villain_hair`
--

CREATE TABLE `villain_hair` (
  `hair_style_id` tinyint(2) NOT NULL,
  `hair_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain_hair`
--

INSERT INTO `villain_hair` (`hair_style_id`, `hair_name`) VALUES
(1, 'ทุ่งหมาหลง'),
(2, 'ดงช้างข้าม'),
(3, 'ง่ามเทโพ'),
(4, 'ชะโดตีแปลง'),
(5, 'แร้งกระพือปีก'),
(6, 'ฉีกหางฟาด'),
(7, 'ราชคลึงเครา'),
(8, 'รองทรง');

-- --------------------------------------------------------

--
-- Table structure for table `villain_identities`
--

CREATE TABLE `villain_identities` (
  `villain_idcard` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `face_villain` tinyint(2) DEFAULT NULL,
  `hair_style_villain` tinyint(2) DEFAULT NULL,
  `ears_villain` tinyint(2) DEFAULT NULL,
  `forehead_villain` tinyint(2) DEFAULT NULL,
  `eyes_villain` tinyint(2) DEFAULT NULL,
  `nose_villain` tinyint(2) DEFAULT NULL,
  `mouth_villain` tinyint(2) DEFAULT NULL,
  `chin_villain` tinyint(2) DEFAULT NULL,
  `body_villain` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain_identities`
--

INSERT INTO `villain_identities` (`villain_idcard`, `face_villain`, `hair_style_villain`, `ears_villain`, `forehead_villain`, `eyes_villain`, `nose_villain`, `mouth_villain`, `chin_villain`, `body_villain`) VALUES
('1402251685492', 5, 8, 8, 5, 2, 2, 5, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `villain_mouth`
--

CREATE TABLE `villain_mouth` (
  `mouth_id` tinyint(2) NOT NULL,
  `mouth_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain_mouth`
--

INSERT INTO `villain_mouth` (`mouth_id`, `mouth_name`) VALUES
(1, 'ปากกระจับ'),
(2, 'ปากหนา'),
(3, 'ปากล่างห้อย'),
(4, 'ปากเชิด'),
(5, 'ปากกว้าง'),
(6, 'ปากแคบ'),
(7, 'ปากเสมอ'),
(8, 'ปากล่างยื่น'),
(9, 'ปากบนยื่น');

-- --------------------------------------------------------

--
-- Table structure for table `villain_nose`
--

CREATE TABLE `villain_nose` (
  `nose_id` tinyint(2) NOT NULL,
  `nose_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain_nose`
--

INSERT INTO `villain_nose` (`nose_id`, `nose_name`) VALUES
(1, 'จมูกแคบ'),
(2, 'จมูกกว้าง'),
(3, 'จมูกชมพู่'),
(4, 'สันจมูกสั้น'),
(5, 'สันจมูกโค้งเหลี่ยม'),
(6, 'สันจมูกโค้งกลม'),
(7, 'สันจมูกงอน'),
(8, 'ฐานจมูกงุ้ม'),
(9, 'ฐานจมูกราบ'),
(10, 'ฐานจมูกเชิด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrest_record`
--
ALTER TABLE `arrest_record`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `case_name`
--
ALTER TABLE `case_name`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `exhibit`
--
ALTER TABLE `exhibit`
  ADD PRIMARY KEY (`id_exhibit`);

--
-- Indexes for table `inquiry_official`
--
ALTER TABLE `inquiry_official`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `case_id` (`case_id`),
  ADD KEY `rank_id` (`rank_id`);

--
-- Indexes for table `police_person`
--
ALTER TABLE `police_person`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `rank_id` (`rank_id`);

--
-- Indexes for table `rank_police`
--
ALTER TABLE `rank_police`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `responsible_person`
--
ALTER TABLE `responsible_person`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `card_id` (`card_id`);

--
-- Indexes for table `subpoena`
--
ALTER TABLE `subpoena`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`victim_idcard`),
  ADD KEY `victim_education` (`victim_education`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `villain`
--
ALTER TABLE `villain`
  ADD PRIMARY KEY (`villain_idcard`),
  ADD KEY `case_id` (`case_id`),
  ADD KEY `villain_education` (`villain_education`);

--
-- Indexes for table `villain_body`
--
ALTER TABLE `villain_body`
  ADD PRIMARY KEY (`body_id`);

--
-- Indexes for table `villain_chin`
--
ALTER TABLE `villain_chin`
  ADD PRIMARY KEY (`chin_id`);

--
-- Indexes for table `villain_ears`
--
ALTER TABLE `villain_ears`
  ADD PRIMARY KEY (`ears_id`);

--
-- Indexes for table `villain_eyes`
--
ALTER TABLE `villain_eyes`
  ADD PRIMARY KEY (`eyes_id`);

--
-- Indexes for table `villain_face`
--
ALTER TABLE `villain_face`
  ADD PRIMARY KEY (`face_id`);

--
-- Indexes for table `villain_forehead`
--
ALTER TABLE `villain_forehead`
  ADD PRIMARY KEY (`forehead_id`);

--
-- Indexes for table `villain_hair`
--
ALTER TABLE `villain_hair`
  ADD PRIMARY KEY (`hair_style_id`);

--
-- Indexes for table `villain_identities`
--
ALTER TABLE `villain_identities`
  ADD PRIMARY KEY (`villain_idcard`),
  ADD KEY `body_villain` (`body_villain`),
  ADD KEY `chin_villain` (`chin_villain`),
  ADD KEY `ears_villain` (`ears_villain`),
  ADD KEY `eyes_villain` (`eyes_villain`),
  ADD KEY `face_villain` (`face_villain`),
  ADD KEY `forehead_villain` (`forehead_villain`),
  ADD KEY `hair_style_villain` (`hair_style_villain`),
  ADD KEY `mouth_villain` (`mouth_villain`),
  ADD KEY `nose_villain` (`nose_villain`);

--
-- Indexes for table `villain_mouth`
--
ALTER TABLE `villain_mouth`
  ADD PRIMARY KEY (`mouth_id`);

--
-- Indexes for table `villain_nose`
--
ALTER TABLE `villain_nose`
  ADD PRIMARY KEY (`nose_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `edu_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rank_police`
--
ALTER TABLE `rank_police`
  MODIFY `rank_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `villain_body`
--
ALTER TABLE `villain_body`
  MODIFY `body_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `villain_chin`
--
ALTER TABLE `villain_chin`
  MODIFY `chin_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `villain_ears`
--
ALTER TABLE `villain_ears`
  MODIFY `ears_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `villain_eyes`
--
ALTER TABLE `villain_eyes`
  MODIFY `eyes_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `villain_face`
--
ALTER TABLE `villain_face`
  MODIFY `face_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `villain_forehead`
--
ALTER TABLE `villain_forehead`
  MODIFY `forehead_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `villain_hair`
--
ALTER TABLE `villain_hair`
  MODIFY `hair_style_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `villain_mouth`
--
ALTER TABLE `villain_mouth`
  MODIFY `mouth_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `villain_nose`
--
ALTER TABLE `villain_nose`
  MODIFY `nose_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inquiry_official`
--
ALTER TABLE `inquiry_official`
  ADD CONSTRAINT `inquiry_official_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inquiry_official_ibfk_2` FOREIGN KEY (`rank_id`) REFERENCES `rank_police` (`rank_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `police_person`
--
ALTER TABLE `police_person`
  ADD CONSTRAINT `police_person_ibfk_1` FOREIGN KEY (`rank_id`) REFERENCES `rank_police` (`rank_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `responsible_person`
--
ALTER TABLE `responsible_person`
  ADD CONSTRAINT `responsible_person_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `responsible_person_ibfk_2` FOREIGN KEY (`card_id`) REFERENCES `police_person` (`card_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `victim`
--
ALTER TABLE `victim`
  ADD CONSTRAINT `victim_ibfk_1` FOREIGN KEY (`victim_education`) REFERENCES `education` (`edu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `victim_ibfk_2` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `villain`
--
ALTER TABLE `villain`
  ADD CONSTRAINT `villain_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villain_ibfk_2` FOREIGN KEY (`villain_education`) REFERENCES `education` (`edu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `villain_identities`
--
ALTER TABLE `villain_identities`
  ADD CONSTRAINT `villain_identities_ibfk_1` FOREIGN KEY (`villain_idcard`) REFERENCES `villain` (`villain_idcard`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villain_identities_ibfk_10` FOREIGN KEY (`nose_villain`) REFERENCES `villain_nose` (`nose_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villain_identities_ibfk_2` FOREIGN KEY (`body_villain`) REFERENCES `villain_body` (`body_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villain_identities_ibfk_3` FOREIGN KEY (`chin_villain`) REFERENCES `villain_chin` (`chin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villain_identities_ibfk_4` FOREIGN KEY (`ears_villain`) REFERENCES `villain_ears` (`ears_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villain_identities_ibfk_5` FOREIGN KEY (`eyes_villain`) REFERENCES `villain_eyes` (`eyes_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villain_identities_ibfk_6` FOREIGN KEY (`face_villain`) REFERENCES `villain_face` (`face_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villain_identities_ibfk_7` FOREIGN KEY (`forehead_villain`) REFERENCES `villain_forehead` (`forehead_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villain_identities_ibfk_8` FOREIGN KEY (`hair_style_villain`) REFERENCES `villain_hair` (`hair_style_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villain_identities_ibfk_9` FOREIGN KEY (`mouth_villain`) REFERENCES `villain_mouth` (`mouth_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
