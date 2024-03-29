-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 11:32 AM
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
-- Table structure for table `arrestor`
--

CREATE TABLE `arrestor` (
  `arrt_id` int(11) NOT NULL,
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_id` char(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `arrest_info`
--

CREATE TABLE `arrest_info` (
  `case_id_arr_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_arr_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `court_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_arr_info` date NOT NULL,
  `type_arr_info` tinyint(2) NOT NULL,
  `victim_arr_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villain_arr_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_say_arr_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vil_perpetrate_arr_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_vil_catch_arr_info` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `close_add_arr_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `send_to_arr_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dl_arr_info` int(11) NOT NULL,
  `st_date_arr_info` date NOT NULL,
  `end_date_arr_info` date NOT NULL,
  `judge_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `arrest_info`
--

INSERT INTO `arrest_info` (`case_id_arr_info`, `id_arr_info`, `court_name`, `date_arr_info`, `type_arr_info`, `victim_arr_info`, `villain_arr_info`, `victim_say_arr_info`, `vil_perpetrate_arr_info`, `id_vil_catch_arr_info`, `close_add_arr_info`, `send_to_arr_info`, `dl_arr_info`, `st_date_arr_info`, `end_date_arr_info`, `judge_name`) VALUES
('testnow1', 'test001', 'test1', '2020-01-06', 2, 'test2', 'test3', 'test4', 'test5', '1248854621938', 'test6', 'tset7', 8, '2020-01-07', '2020-01-15', 'test9'),
('todaytest11/01', '001/01.63', 'ศาลทดลอง1', '2020-01-07', 2, 'แคนดี้', 'ภูมิลอง', 'ขอจับกุมนายภูมิลอง', 'ฆ่าผู้อื่นโดยเจตนา', '1248846256851', 'ตำบลอำเภอจังหวังทดลอง', 'ส่งไปที่ทดลอง', 2, '2020-01-07', '2020-01-23', 'ผู้พิพากษาทดลอง'),
('กก44', '001/1.63', 'ศาลจังหวัดเชียงใหญ่', '2020-01-08', 2, ' นิบุญเลิศ องอาจกิจ', ' จิตจำนง สีดำ ', 'ขอจับกุมตัว', 'ขมขื่นกระทำชำเราและทำร้ายผุ้อื่นโดยเจตนา   ', '124145251938', '47/8 หมู่ 5 บ้าน จับจอง ต.ป่าไม้งาม อ.ดอยเมิง จ.เชียงใจ 140200 ', 'สถานีตำรวจภูธรเชียงใหญ่', 2, '2020-01-12', '2020-01-24', 'นาย อัศนี คุณมานะ'),
('ค.001', 'test001', 'ศาลทดลอง', '2020-01-03', 2, 'ผู้ร้องทดลอง', 'test3', 'test4', 'test5', '1158497685123', 'test6', 'tset7', 8, '2020-01-18', '2020-01-25', 'test9');

-- --------------------------------------------------------

--
-- Table structure for table `arrest_record`
--

CREATE TABLE `arrest_record` (
  `arrest_no` int(11) NOT NULL,
  `por_jor_wor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_time` time NOT NULL,
  `ar_re_typecase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_acc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_address_save` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_save_date` date NOT NULL,
  `ar_re_save_catch` date NOT NULL,
  `ar_re_address_catch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_location_ob` text COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_say` text COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_atcs` text COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_depose` text COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_location_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_re_date_place` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `arrest_record`
--

INSERT INTO `arrest_record` (`arrest_no`, `por_jor_wor`, `case_id`, `ar_re_time`, `ar_re_typecase`, `ar_re_no`, `ar_re_acc`, `ar_re_address_save`, `ar_re_save_date`, `ar_re_save_catch`, `ar_re_address_catch`, `ar_re_location_ob`, `ar_re_say`, `ar_re_atcs`, `ar_re_depose`, `ar_re_location_place`, `ar_re_date_place`) VALUES
(1, '884/62.ก', 'ค.001', '14:36:00', '2', '781/113', '90', 'จำลองสถานที่บันทึก', '2020-01-02', '2019-12-19', 'สถานที่จับจำลอง', 'ในสวนน้ำ', 'ขมขืน', 'อุ้มไปขมขืน', 'ยอมรับทั้งหมด', 'สถานที่เกิดเหตุจำลอง', '2019-12-19'),
(5, '001/63', 'todaytest11/01', '10:00:00', '2', '001.11/63', '100', 'จำลองสถานที่', '2020-01-07', '2020-01-07', 'สถานที่จับจำลอง', 'จำลองตำแหล่งที่พบ', 'ฆ่าผู้อื่นโดยเจตนา', 'จงใจสังหาร', 'ยอมรับทั้งหมด', 'สถานที่เกิดเหตุจำลอง', '2020-01-05'),
(7, '221/01', 'กก44', '16:15:00', '2', '221/12', '90', 'จำลองสถานที่', '2020-01-08', '2020-01-08', ' 47/8 หมู่ 5 บ้าน จับจอง ต.ป่าไม้งาม อ.ดอยเมิง จ.เชียงใจ 140200 ', 'ข้างทาง ถนน เส้นนอกเมือง ', 'ขมขืนกระทำชำเราและทำร้ายร่างกาย', 'วางยาสลบและลักพาตัวไปขมขื่น', 'ยอมรับทุกข้อกล่าวหา', ' 47/8 หมู่ 5 บ้าน จับจอง ต.ป่าไม้งาม อ.ดอยเมิง จ.เชียงใจ 140200 ', '0000-00-00'),
(13, '13b', '123b', '09:00:00', '2', '13/13', '15', 'จำลองสถานที่', '2020-02-29', '2020-02-29', 'สถานที่จับจำลอง', 'เทส', 'เทส', 'เทส', 'เทส', 'เทส', '2020-02-29'),
(14, '13b2', '123b', '11:22:00', '2', '132/63', '45', 'จำลองสถานที่', '2020-03-01', '2020-03-01', 'สถานที่จับจำลอง', 'ตำแหน่ง', 'กล่าวหา', 'พฤติกรรม', 'จับกุม', 'เหตุเกิด', '2020-03-01'),
(15, 'ถถ3/62.กฮ', '111/63', '05:05:00', '2', '132/63', '15', 'จำลองสถานที่', '2020-03-07', '2020-03-07', 'สถานที่จับจำลอง', 'เทส', 'เทส', 'เทส', 'เทส', 'เทส', '2020-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `case_name`
--

CREATE TABLE `case_name` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `case_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `case_type` tinyint(2) NOT NULL,
  `case_savetime` datetime NOT NULL DEFAULT current_timestamp(),
  `case_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `case_name`
--

INSERT INTO `case_name` (`case_id`, `case_name`, `case_type`, `case_savetime`, `case_status`) VALUES
('111/63', 'เห้อ', 2, '2020-03-05 18:16:51', 0),
('1234', 'ทดสอบใหม่ตอนนี้', 2, '2020-03-04 10:33:04', 0),
('123a', 'a123', 1, '2019-07-29 13:32:20', 0),
('123b', '123b', 2, '2019-07-29 13:32:30', 0),
('ad234', 'ggggggg', 1, '2019-08-08 12:05:58', 0),
('test/667.62', 'ทดแอตสอบใหม่', 1, '2019-12-03 15:39:37', 0),
('test123456', 'test123456', 2, '2020-01-03 13:35:25', 0),
('testnow1', 'testnow1', 2, '2020-01-06 08:03:42', 0),
('todaytest11/01', 'ทดลองแอตใหม่', 2, '2020-01-07 10:59:08', 0),
('ก', 'ก', 2, '2019-01-01 14:29:55', 0),
('กก44', 'คืนหนึ่ง', 2, '2020-01-08 00:05:44', 0),
('กบ/24.33', 'ไผ่สีทอง', 2, '2019-07-01 15:33:48', 0),
('ข', 'ข', 2, '2019-01-02 14:36:27', 0),
('ค', 'ค', 2, '2019-01-03 14:36:27', 0),
('ค.001', 'แมวดำ', 1, '2019-07-01 15:32:23', 0),
('ง', 'ggggggg', 1, '2019-02-08 12:05:58', 0),
('ง.12/52', 'ตีโปร่ง', 2, '2019-07-01 15:32:23', 0),
('จ', 'ค', 2, '2019-03-03 14:36:27', 0),
('ฉ', 'ทดแอตสอบใหม่', 1, '2019-03-03 15:39:37', 0),
('ช', 'test123456', 2, '2020-04-03 13:35:25', 0),
('ซ', 'testnow1', 2, '2020-04-06 08:03:42', 0),
('ฌ', 'ทดลองแอตใหม่', 2, '2020-05-07 10:59:08', 0),
('ญ', 'ก', 2, '2019-05-01 14:29:55', 0),
('ฎ', 'ค', 2, '2019-06-03 14:36:27', 0),
('ฏ', 'ทดแอตสอบใหม่', 1, '2019-06-03 15:39:37', 0),
('ฐ', 'test123456', 2, '2020-07-03 13:35:25', 0),
('ฑ', 'testnow1', 2, '2020-07-06 08:03:42', 0),
('ฒ', 'ทดลองแอตใหม่', 2, '2020-08-07 10:59:08', 0),
('ณ', 'ก', 2, '2019-08-01 14:29:55', 0),
('ด', 'ว่าฉันคิดอะไร', 1, '2019-09-08 12:07:03', 0),
('ต', 'ทดแอตสอบ', 2, '2019-09-29 12:39:26', 0),
('ถ', 'ค', 2, '2019-10-03 14:36:27', 0),
('ท', 'ทดแอตสอบใหม่', 1, '2019-10-03 15:39:37', 0),
('ทท.45/62', 'ว่าฉันคิดอะไร', 1, '2019-08-08 12:07:03', 0),
('ธ', 'test123456', 2, '2020-11-03 13:35:25', 0),
('น', 'testnow1', 2, '2020-11-06 08:03:42', 0),
('บ', 'ทดลองแอตใหม่', 2, '2020-12-07 10:59:08', 0),
('ป', 'ก', 2, '2019-12-01 14:29:55', 0),
('ฮ.0324', 'ทดแอตสอบ', 2, '2019-07-29 12:39:26', 0);

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
-- Table structure for table `inquiry_official`
--

CREATE TABLE `inquiry_official` (
  `in_of_id` int(11) NOT NULL,
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_id` char(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inquiry_official`
--

INSERT INTO `inquiry_official` (`in_of_id`, `case_id`, `card_id`) VALUES
(2, 'ค.001', '1568867987693'),
(3, 'ค.001', '1509908798090');

-- --------------------------------------------------------

--
-- Table structure for table `investigation_report`
--

CREATE TABLE `investigation_report` (
  `no_ir` int(11) NOT NULL,
  `ir_case` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ir_casetype` tinyint(2) NOT NULL,
  `ir_order` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ir_policestation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ir_date_station` date NOT NULL,
  `ir_offer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vic_ir` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `vil_ir` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `ir_charge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ir_date` date NOT NULL,
  `ir_district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ir_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ir_wound` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ir_complaint` date NOT NULL,
  `ir_control` date NOT NULL,
  `ir_fact` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `investigation_report`
--

INSERT INTO `investigation_report` (`no_ir`, `ir_case`, `ir_casetype`, `ir_order`, `ir_policestation`, `ir_date_station`, `ir_offer`, `vic_ir`, `vil_ir`, `ir_charge`, `ir_date`, `ir_district`, `ir_price`, `ir_wound`, `ir_complaint`, `ir_control`, `ir_fact`) VALUES
(1, 'ค.001', 2, '85/98', 'สถานีตำรวจทดสอบ', '2020-03-06', 'test2', '1486648521352', '1248846257625', 'test9', '2020-01-04', 'test9', 'test10', 'test11', '2020-01-05', '2020-01-06', 'test122'),
(2, 'testnow1', 2, '6666', 'test1', '0000-00-00', 'test2', '', '', 'test9', '2020-01-06', 'test10', 'test11', 'test12', '2020-01-05', '2020-01-15', 'test13'),
(3, 'todaytest11/01', 2, '01/63', 'สถานีทดลอง1', '2019-12-19', 'เสนอทดลอง', '1408809625186', '124884612389', 'ข้อหาทดลอง', '2020-01-07', 'ตำบลทดลอง', 'ราคาทรัพย์ทดลอง', 'บาดแผลทดลอง', '2020-01-07', '2020-01-07', 'ข้อเท็จจริงทดลอง'),
(4, 'กก44', 2, '85/98', 'สถานีตำรวจภูธรเชียงใหญ่', '0000-00-00', 'ให้การสอบสวน', '1234567114247', '124145251938', 'ขมขื่นกระทำชำเราและทำร้ายผุ้อื่นโดยเจตนา    ', '2020-01-08', '47/8 หมู่ 5 บ้าน จับจอง ต.ป่าไม้งาม อ.ดอยเมิง จ.เชียงใจ 140200 ', 'ไม่สามารถระบุได้', 'ทางจิตใจ', '2020-01-08', '2020-01-09', 'ได้กระทำการจริง');

-- --------------------------------------------------------

--
-- Table structure for table `object_case`
--

CREATE TABLE `object_case` (
  `ob_no` int(11) NOT NULL,
  `id_object` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `object_status` tinyint(2) NOT NULL,
  `object_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `object_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `object_look` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `object_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ob_arya_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ob_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `object_case`
--

INSERT INTO `object_case` (`ob_no`, `id_object`, `case_id`, `object_status`, `object_name`, `object_size`, `object_look`, `object_image`, `ob_arya_no`, `ob_location`) VALUES
(1, '0022', 'ค.001', 2, 'test2', 'test2', 'test22222', 'LC0K02S002.jpeg', '781/113', 'สถานที่เก็บทดลอง2'),
(2, '0011', 'ค.001', 2, 'test11', 'test11', 'test111111111', '0F0KA2V222.jpeg', '781/113', 'สถานที่เก็บทดลอง'),
(8, '001', 'todaytest11/01', 3, 'มีดดาบ', '12นิ้ว', 'ใบมีดยาวมีความคมสูง', 'CZDF21L0A0.jpeg', '001.11/63', 'สถานที่เก็บทดลอง'),
(9, '002', 'todaytest11/01', 1, 'ปืน', '6*6', 'ปืนก็อกสั้นกระสุน9มม', 'X0S0NL0D60.jpeg', '001.11/63', 'สถานที่เก็บทดลอง'),
(10, '001', 'กก44', 1, 'มีดดาบ', '14นิ้ว', 'ใบมีดเป็นเคียวงอ', '2K070LXS7J.jpeg', '221/12', 'สถานที่เก็บทดลอง'),
(14, '001', '123b', 1, 'เทสของกลาง', 'เทสของกลาง', 'เทสของกลาง', '', '13/13', 'สถานที่เก็บทดลอง'),
(15, '002', '123b', 2, 'เทสของกลางสอง', 'เทสของกลางสอง', 'เทสของกลางสอง', '', '13/13', 'สถานที่เก็บทดลอง'),
(16, '115', '123b', 1, 'ของกลาง', 'ของกลาง', 'ของกลาง', '0XGJN20AK0.jpeg', '132/63', 'สถานที่เก็บทดลอง'),
(17, '0011', '111/63', 1, 'กลาง', 'กลาง', 'กลาง', '2A0LHG7303.jpeg', '132/63', 'สถานที่เก็บทดลอง');

-- --------------------------------------------------------

--
-- Table structure for table `pin_case`
--

CREATE TABLE `pin_case` (
  `pin_no` int(11) NOT NULL,
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pin_case`
--

INSERT INTO `pin_case` (`pin_no`, `case_id`, `user_id`) VALUES
(1, 'todaytest11/01', 'user01'),
(3, 'todaytest11/01', 'user03'),
(4, '1234', 'user03'),
(7, 'ค.001', 'user03');

-- --------------------------------------------------------

--
-- Table structure for table `police_catch_arrest`
--

CREATE TABLE `police_catch_arrest` (
  `id_po_ca_ar` int(11) NOT NULL,
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_po_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rank_po_ar` tinyint(2) NOT NULL,
  `police_arya_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `police_catch_arrest`
--

INSERT INTO `police_catch_arrest` (`id_po_ca_ar`, `case_id`, `name_po_ar`, `rank_po_ar`, `police_arya_no`) VALUES
(1, 'ค.001', 'ดำดำ', 3, '781/113'),
(2, 'ค.001', 'แดงแดง', 5, '781/113'),
(3, 'testnow1', 'test11', 1, 'test2'),
(4, 'testnow1', 'test22', 4, 'test2'),
(11, 'todaytest11/01', 'แคนดี้', 1, '001.11/63'),
(12, 'todaytest11/01', 'ลูกอม', 4, '001.11/63'),
(13, 'กก44', 'นิบุญเลิศ องอาจกิจ', 1, '221/12'),
(14, 'กก44', 'แสงสิริ เกรียงทองดี', 3, '221/12'),
(21, '123b', 'รวจหนึ่ง', 3, '13/13'),
(22, '123b', 'รวจสอง', 6, '13/13'),
(23, '123b', 'รวจหนึ่ง', 3, '132/63'),
(24, '123b', 'รวจสอง', 4, '132/63'),
(25, '123b', 'รวจสาม', 5, '132/63'),
(26, '123b', 'รวจสี่', 5, '132/63'),
(27, '111/63', 'ตำหนึ่ง', 4, '132/63'),
(28, '111/63', 'ตำสอง', 5, '132/63');

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
  `ps_num` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `police_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sta_per_police` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `police_person`
--

INSERT INTO `police_person` (`card_id`, `rank_id`, `ps_name`, `ps_lastname`, `sex`, `address`, `ps_num`, `police_pic`, `sta_per_police`) VALUES
('1458867563768', 6, 'test', 'รักษ์ยม', 0, '12/534 หมู่ 78 บ้าน สันป่าไผ่ อ.ไผ่งาม จ.เชียงราย 50448', '0924563321', '', 2),
('1509901485761', 2, 'เทสใหม่', 'อำนาจเจริญ', 0, '5/99 หมู่ 10 บ้าน หยังฮู้ ต.ไหน อ.มอก จ.ห๊ะ 11001', '0845541234', '', 1),
('1509901623453', 4, 'ytest', 'testy', 0, '667/3 หมู่บ้าน เจริญละ', '0954434234', '', 2),
('1509908798090', 8, 'ลูกจ๊อก', 'อ่อนด๊อย', 1, 'หมู่ 8 บ้าน 78', '0977865786', '', 1),
('1568867987693', 9, 'คนที่สอง', 'ลองดู', 2, '77/5 หมู 8 บ้าน ค่ำ', '085786553', '', 1),
('1569789090974', 9, 'แอดดี้', 'แอตตี้กัส', 1, 'บ้านโคก หมู่ 9 ต.เฮือก อ.อะเจียง จ.พิษณุโลก 40570', '0828894625', '0020D0B30N.png', 1);

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
-- Table structure for table `request_warrant`
--

CREATE TABLE `request_warrant` (
  `no_rw` int(11) NOT NULL,
  `rw_case` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_court` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_cell` date NOT NULL,
  `rw_judge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_type` tinyint(2) NOT NULL,
  `rw_Petitioner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_policename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_age` int(1) NOT NULL,
  `rw_career` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_Workplace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_phone` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `rw_dos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_cherk1` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `rw_cherk2` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `rw_incident` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_circumstances` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_Documentary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_Arrest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_warrant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_petition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_position2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_ornot` tinyint(1) NOT NULL,
  `rw_Request` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_warrant2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_Court2` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `request_warrant`
--

INSERT INTO `request_warrant` (`no_rw`, `rw_case`, `rw_no`, `rw_court`, `rw_cell`, `rw_judge`, `rw_type`, `rw_Petitioner`, `rw_policename`, `rw_position`, `rw_age`, `rw_career`, `rw_Workplace`, `rw_phone`, `rw_dos`, `rw_cherk1`, `rw_cherk2`, `rw_incident`, `rw_circumstances`, `rw_action`, `rw_Documentary`, `rw_Arrest`, `rw_warrant`, `rw_petition`, `rw_position2`, `rw_ornot`, `rw_Request`, `rw_warrant2`, `rw_Court2`) VALUES
(3, 'ค.001', 'test1', 'ศาลทดลอง1', '2020-01-04', 'ผู้พิพากษาทดลอง', 2, 'test4', 'test5', 'test6', 20, 'test8', 'test9', 'test10', 'test11', 'true1', 'true2', 'test12', 'test13', 'test14', 'test15', 'test16', 'test17', 'test18', 'test19', 1, 'test20', 'test21', 'test22'),
(4, 'testnow1', 'test1', 'test2', '2020-01-06', 'test3', 2, 'test4', 'test5', 'test6', 0, 'test8', 'test9', 'test10', 'test11', 'true1', 'true2', 'test12', 'test13', 'test14', 'test15', 'test16', 'test17', 'test18', 'test19', 1, 'test20', 'test21', 'test22'),
(5, 'todaytest11/01', '001.1/63', 'ศาลทดลอง1', '2020-01-08', 'ผู้พิพากษาทดลอง', 2, 'ผู้ร้องทดลอง', 'ชื่อทดลอง', 'ตำแหน่งทดลอง', 34, 'รับราชการ', 'สถานที่ทำงานทดลอง', '0867681543', 'คำกล่าวทดลอง', 'true1', 'true2', 'สถานที่ทดลอง', 'พฤติกรรมทดลอง', 'การกระทำทดลอง', 'พยานเอกสารและวัตถุทดลอง', 'จับกุมทดลอง', 'หมายจับทดลอง', 'มอบหมายให้ทดลอง', 'ตำแหน่งทดลอง', 2, 'ร้องขอทดลอง', 'เหตุอื่น ๆ ทดลอง', 'คำสั่งศาลทดลอง'),
(6, 'กก44', '01/63', ' ศาลจังหวัดเชียงใหญ่', '2020-01-11', ' นาย อัศนี คุณมานะ', 2, 'นิบุญเลิศ องอาจกิจ ', 'นิบุญเลิศ องอาจกิจ ', ' ผู้บังคับบํญชา', 35, 'รับราชกาล', '55/2 ต.บางที อ.บางอยู่ จ.เชียงใหญ่ 140860', '0909901594', 'ขมขืนกระทำชำเราและทำร้ายร่างกาย    ', 'true1', 'true2', ' 47/8 หมู่ 5 บ้าน จับจอง ต.ป่าไม้งาม อ.ดอยเมิง จ.เชียงใจ 140200 ', 'ขมขื่นกระทำชำเรา   ', 'ขมขื่นกระทำชำเราและทำร้ายผุ้อื่นโดยเจตนา  ', '1 ชิ้น', 'จิตจำนง สีดำ ', 'จิตจำนง สีดำ ', ' แสงสิริ เกรียงทองดี ', 'เจ้าหน้าที่ประสานงาน', 1, 'ออกหมายจับ', 'ขมขืนกระทำชำเราและทำร้ายร่างกาย  ', 'ให้จับกุมตัว'),
(7, 'test/667.62', 'test1', 'test2', '2020-02-15', 'test3', 2, 'test4', 'test5', 'test6', 0, 'test8', 'test9', 'test10', 'test11', 'false', 'false', 'test12', 'test13', 'test14', 'test15', 'test16', 'test17', 'test18', 'test19', 2, '', 'test20', 'test21');

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
('ค.001', '1509908798090');

-- --------------------------------------------------------

--
-- Table structure for table `search_warrant`
--

CREATE TABLE `search_warrant` (
  `sw_no` int(11) NOT NULL,
  `sw_case` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_searchwarrant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_court` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_date` date NOT NULL,
  `sw_petitioner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_send` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_adderss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_map` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `sw_seize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_check1` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `sw_check2` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `sw_check3` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `sw_check4` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `sw_find` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_law` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `sw_warrant` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `sw_warrant2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_date2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_issued` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_sw_issued2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_location2` date NOT NULL,
  `sw_time` time NOT NULL,
  `sw_check5` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `sw_time_to` time NOT NULL,
  `sw_check6` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `sw_search` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_save` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sw_judge` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `search_warrant`
--

INSERT INTO `search_warrant` (`sw_no`, `sw_case`, `sw_searchwarrant`, `sw_court`, `sw_date`, `sw_petitioner`, `sw_send`, `sw_adderss`, `sw_map`, `sw_seize`, `sw_check1`, `sw_check2`, `sw_check3`, `sw_check4`, `sw_find`, `sw_law`, `sw_warrant`, `sw_warrant2`, `sw_date2`, `sw_issued`, `sw_sw_issued2`, `sw_position`, `sw_location2`, `sw_time`, `sw_check5`, `sw_time_to`, `sw_check6`, `sw_search`, `sw_save`, `sw_judge`) VALUES
(1, 'ค.001', '559/255', 'ศาลทดลอง', '2020-01-05', 'test2', 'test3', '66/7', 'true', 'ยึดสิ่งของ', 'true', 'true', 'true', 'true', 'test12', 'true', 'true', 'test13', 'test14', 'test15', 'test16', 'test17', '2020-01-14', '08:00:00', 'true', '14:00:00', 'f', 'test20', 'test21', 'test22'),
(2, 'testnow1', '559/256666', 'test1', '2020-01-06', 'test2', 'test3', 'test4', 'true', 'test11', 'false', 'false', 'false', 'true', 'test12', 'false', 'true', 'test13', 'test14', 'test15', 'test16', 'test17', '0000-00-00', '07:00:00', 'true', '10:00:00', 'true', 'test20', 'test21', 'test22'),
(3, 'todaytest11/01', '001/63', 'ศาลทดลอง1', '2020-01-07', 'ผู้ร้องทดลอง', 'หมายถึงทดลอง', 'ที่อยู่ทดลอง', 'true', 'สิ่งของทดลอง', 'true', 'true', 'true', 'true', 'เพื่อพบทดลอง', 'true', 'true', 'ตามหมายจับทดลอง', '2020-01-07', 'อกกโดยทดลอง', 'หมายค้นทดลอง', 'ตำแหน่งทดลอง', '2020-01-08', '09:00:00', 'true', '12:00:00', 'f', 'ส่งให้ทดลอง', 'ไปยังทดลอง', 'ผู่้พิพากษาทดลอง'),
(4, 'กก44', '001/63.1', 'ศาลจังหวัดเชียงใหญ่', '2020-01-08', 'นิบุญเลิศ องอาจกิจ ', 'จิตจำนง สีดำ ', '47/8 หมู่ 5 บ้าน จับจอง ต.ป่าไม้งาม อ.ดอยเมิง จ.เชียงใจ 140200   ชื่อผู้ใหญ่บ้าน : แก้วมา อามาจุด  กำนัน : มาโลด โน้นแล้ว', 'false', '', 'true', 'false', 'false', 'false', '', 'false', 'true', '001/63', '2020-01-08', ' ศาลจังหวัดเชียงใหญ่  ', 'นิบุญเลิศ องอาจกิจ', ' ผู้บังคับบํญชา ', '2020-01-11', '09:00:00', 'true', '16:00:00', 'true', ' สถานีตำรวจภูธรเชียงใหญ่', 'ศาลจังหวัดเชียงใหญ่', 'นาย อัศนี คุณมาน');

-- --------------------------------------------------------

--
-- Table structure for table `status_case`
--

CREATE TABLE `status_case` (
  `num_status` int(11) NOT NULL,
  `sta_case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_status` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status_case`
--

INSERT INTO `status_case` (`num_status`, `sta_case_id`, `text_status`, `date_status`) VALUES
(1, 'ค.001', 'ส่งฟ้องศาลชั้นต้น', '2020-01-24'),
(2, 'ค.001', 'ส่งฟ้องศาลชั้นกลาง', '2020-01-25'),
(3, 'ค.001', 'ส่งฟ้องศาลชั้นสูง ', '2020-01-26'),
(4, 'todaytest11/01', 'ส่งฟ้องศาลชั้นต้น', '2020-03-04'),
(5, '1234', 'สอบตอนนี้', '2020-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `subpoena`
--

CREATE TABLE `subpoena` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_black` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_red` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arrest_warrant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `search warrant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_num_red` date NOT NULL,
  `date_sue` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subpoena`
--

INSERT INTO `subpoena` (`case_id`, `subject`, `num_black`, `num_red`, `arrest_warrant`, `search warrant`, `date_num_red`, `date_sue`) VALUES
('ค.001', 'ทำร้ายร่างกาย', 'พบ/1234', 'พบ/ค.1234', 'จ.16/7/2562', 'ค.16/7/2562', '2019-07-16', '2019-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `summon_villain`
--

CREATE TABLE `summon_villain` (
  `no_sv` int(11) NOT NULL,
  `sv_case` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_suspect` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_warrant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_date` date NOT NULL,
  `sv_accused` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_villain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_refer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_headman` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_village` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `sv_hey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_goto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_staff` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_datetime` datetime NOT NULL,
  `sv_staff2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_datetime2` datetime NOT NULL,
  `sv_policename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_set` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_datetime3` datetime NOT NULL,
  `sv_recipient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_sender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_policename4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_position2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_policename5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_address2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_status_sent` tinyint(2) NOT NULL,
  `sv_sign` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sv_position3` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `summon_villain`
--

INSERT INTO `summon_villain` (`no_sv`, `sv_case`, `sv_suspect`, `sv_warrant`, `sv_date`, `sv_accused`, `sv_villain`, `sv_refer`, `sv_address`, `sv_headman`, `sv_village`, `sv_hey`, `sv_text`, `sv_goto`, `sv_staff`, `sv_datetime`, `sv_staff2`, `sv_position`, `sv_datetime2`, `sv_policename`, `sv_set`, `sv_datetime3`, `sv_recipient`, `sv_sender`, `sv_policename4`, `sv_position2`, `sv_policename5`, `sv_address2`, `sv_status_sent`, `sv_sign`, `sv_position3`) VALUES
(1, 'ค.001', '85/98', 'สถานที่ออกหมายจับทดลอง', '2020-01-05', 'test2', '1248846251938', 'test3', 'test4', 'test5', 'test6', 'test7', 'test8', 'test9', 'test10', '0000-00-00 00:00:00', 'test11', 'test12', '0000-00-00 00:00:00', 'test13', 'testnow', '2020-01-30 09:00:00', 'test15', 'test16', 'test17', 'test18', 'test19', 'test20', 2, 'test21', 'test22'),
(2, 'testnow1', '777', 'test1', '2020-01-06', 'test2', '1448846661938', 'test3', 'test4', 'test5', 'test6', 'test7', 'test8', 'test9', 'test10', '2020-01-06 08:00:00', 'test11', 'test12', '2020-01-06 08:00:00', 'test13', 'test14', '2020-01-06 08:00:00', 'test15', 'test16', 'test17', 'test18', 'test19', 'test20', 1, 'test21', 'test22'),
(3, 'todaytest11/01', '001/62', 'สถานที่ออกหมายทดลอง1', '2020-01-07', 'ผู้กล่าวหาทดลอง', '124884612389', 'หมายมายังทดลอง', 'ที่อยู่ทดลอง', 'ผู้ใหญ่บ้านทดลอง', 'กำนัดทดลอง', 'ด้วยเหตุทดลอง', 'ฉะนั้นทดลอง', 'ณทดลอง', 'พบทดลอง', '2020-01-07 11:00:00', 'ลงชื่อทดลอง', 'ผู้ออกหมายทดลอง', '2020-01-12 09:00:00', 'ชื่อทดลอง', 'ยังทดลอง', '2020-01-10 10:00:00', 'ชื่อทดลอง', 'ผู้รับทดลอง', 'ชื่อทดลอง', 'ตำแหน่งทดลอง', 'ดำเนินการทดลอง', 'ที่อยู่ทดลอง', 1, 'ชื่อทดลอง', 'ผู้ส่งทดลอง'),
(4, 'กก44', '001/63', 'ศาลจังหวัดเชียงใหญ่', '2020-01-08', ' นิบุญเลิศ องอาจกิจ ', '124145251938', ' จิตจำนง สีดำ', '47/8 หมู่ 5 บ้าน จับจอง ต.ป่าไม้งาม อ.ดอยเมิง จ.เชียงใจ 140200 ', 'ขวัญยืน', 'ภูเกรียงศัก', ' ขมขื่นกระทำชำเราและทำร้ายผุ้อื่นโดยเจตนา  ', 'รายงานตัวต่อเจ้าหน้าที่', 'สถานีตำรวจภูธรเชียงใหญ่', 'แสงสิริ เกรียงทองดี ', '2020-01-10 10:20:00', 'นิบุญเลิศ องอาจกิจ', 'ผู้บังคับบํญชา', '2020-01-07 10:00:00', ' จิตจำนง สีดำ', 'สถานีตำรวจภูธรเชียงใหญ่', '2020-01-10 10:20:00', 'จิตจำนง สีดำ', 'นิบุญเลิศ องอาจกิ', 'นิบุญเลิศ องอาจกิ', 'ผู้บังคับบัญชา', 'จิตจำนง สีดำ', '47/8 หมู่ 5 บ้าน จับจอง ต.ป่าไม้งาม อ.ดอยเมิง จ.เชียงใจ 140200 ', 1, 'นิบุญเลิศ องอาจกิ', 'ผู้บังคับบัญชา');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `permiss_id` tinyint(2) NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_id` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verification_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verification_type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`permiss_id`, `user_id`, `pass_id`, `card_id`, `user_email`, `verification_user`, `verification_type`) VALUES
(0, 'user009', 'b5b73fae0d87d8b4e2573105f8fbe7bc', '1458867563768', 'nickqbe@gmail.com', '529GDC9M1Z', 1),
(1, 'test01', '16d7a4fca7442dda3ad93c9a726597e4', '1509901485761', 'nickqbe@gmail.com', '3V0A3029C2', 1),
(2, 'ggtest', 'e19d5cd5af0378da05f63f891c7467af', '1509901623453', 'been267@gmail.com', 'AZ102160L5', 1),
(1, 'user03', 'b5b73fae0d87d8b4e2573105f8fbe7bc', '1509908457111', 'nickqbe@gmail.com', '0367021ZMX', 1),
(2, 'user01', '2c9341ca4cf3d87b9e4eb905d6a3ec45', '1509908798090', 'nickqbe@gmail.com', '0M19G919JF', 1),
(3, 'user02', 'b5b73fae0d87d8b4e2573105f8fbe7bc', '1568867987693', 'nickqbe@gmail.com', '07XHB95Z1N', 1),
(4, 'admin01', 'c93ccd78b2076528346216b3b2f701e6', '1569789090974', 'nickqbe@gmail.com', '1469026SVJ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `vic_no` int(11) NOT NULL,
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_sex` tinyint(2) NOT NULL,
  `victim_idcard` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `victim_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `victim_education` tinyint(2) NOT NULL,
  `victim_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `victim_race` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_career` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `victim`
--

INSERT INTO `victim` (`vic_no`, `case_id`, `title_name`, `victim_name`, `victim_lastname`, `victim_sex`, `victim_idcard`, `victim_address`, `victim_education`, `victim_image`, `victim_race`, `victim_nationality`, `victim_career`) VALUES
(1, 'กก44', 'นางสาว', 'วงการ', 'วงลอง', 2, '1234567114247', '123/2 หมู่ 1 ต.ป่าไผ่ อ.ดอกจัน จ.เชียงใหม่ 50089', 6, 'GHF027D072.jpeg', 'ไทย', 'ไทย', 'รับจ้างทั่วไป'),
(2, 'test123456', 'นาย', 'กกกกก', 'ขขขขขข', 1, '1234567237654', '123/2 หมู่ 6 ต.ป่าไผ่ อ.ดอกจัน จ.เชียงใหม่ 50089', 6, '3V20K02J02.jpeg', 'ไทย', 'ไทย', 'พ่อค้า'),
(3, 'ฮ.0324', 'นาย', 'กี้', 'แปปนึง', 1, '1306607845367', '123/2 หมู่ 6 ต.ป่าไผ่ อ.ดอกจัน จ.เชียงใหม่ 50089', 6, 'BV99D7SL9M.jpeg', 'ไทย', 'ไทย', 'พ่อค้าเร่'),
(4, 'todaytest11/01', 'นาย', 'ทดสอบใหม่1', 'นะครับ', 1, '1408809625186', '123/2 หมู่ 6 บ้านทดสอบใหม่', 5, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'ค้าขาย'),
(5, 'ค.001', 'นางสาว', 'รีน่าจังงับ', 'อุยอ้ายจัง', 2, '1486648521352', '25/185 หมู่ 6 ต.ป่าไผ่ อ.ดอกจัน จ.เชียงใหม่ 50089', 5, 'icon_data_userfemale.png', 'ไทย', 'ไทย', 'รับจ้างทั่วไป'),
(6, 'ง.12/52', 'นาย', 'จันทร์ดี', 'โอโออา', 1, '1508890723431', '23 หมู่ 4 บ้าน ดง ต.ก่อไผ่ อ.ดอกไม้ จ.เชียงใหม่ 54334', 5, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'ธุรกิจส่วนตัว'),
(7, 'ค.001', 'นางสาว', 'พะยองจ้าเอ่ย', 'จังเลยงาว', 2, '1509643456712', '25 หมู่ 7 ต.ดอกไม้ อ.ต้นไม้ จ.เชียงใหม่ 54334', 7, 'icon_data_userfemale.png', 'ไทย', 'ไทย/ญีปุ่น', 'ธรุกิจส่วนตัว'),
(8, 'ค.001', 'นาย', 'ช้าง', 'โตที่สุด', 1, '1509901658485', '68 หมู่ 8 บ้าน นอก ต.ใน อ.นอก จ.ใน 45667', 7, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'ธรุกิจส่วนตัว'),
(9, 'กบ/24.33', 'นาย', 'เศรษฐศิลป์', 'เพ็ญสิทธิ์', 1, '1509908675432', '34/5 หมู่ 6 ต.ป่าไผ่ อ.ดอกจัน จ.เชียงใหม่ 50089', 4, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'นักศึกษา'),
(10, 'ฮ.0324', 'นางสาว', 'ยู', 'ไอ', 2, '1569908977456', '123/2 หมู่ 6 ต.ป่าไผ่ อ.ดอกจัน จ.เชียงใหม่ 50089', 6, '00LB7NVDKS.jpeg', 'ไทย', 'ไทย', 'นักแสดง'),
(11, 'ค.001', 'นาย', 'ทด', 'ลอง', 1, '1586677898675', '123/2 หมู่ 6 ต.ป่าไผ่ อ.ดอกจัน จ.เชียงใหม่ 50089', 6, 'icon_data_usermale.png', 'ไทย', 'ไทย ', 'การค้า'),
(12, 'ง.12/52', 'นาย', 'ลึงลง', 'ใต้น้ำใหญ่', 1, '1607782455677', '123 หมู่ 9 ต.เชิงบน อ.เชิงล่าง จ.เชียงใหม่ 49668', 6, 'icon_data_usermale.png', 'ไทย', 'อังกฤษ', 'นักศึกษา'),
(13, '123a', 'นางสาว', 'อุอะ', 'รารา', 2, '1748869532121', '123/2 หมู่ 6 บ้านดงใหญ่ 8888', 4, 'icon_data_userfemale.png', 'ไทย', 'ไทย', 'ฟหกด'),
(14, '123a', 'นาย', 'ฟฟกหดฟหกดฟก', 'dsafadsfasdg', 1, '1754486255132', '123/2 หมู่ 855', 5, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'ttt'),
(15, 'testnow1', 'นาย', 'test1', 'test2', 1, 'test6', 'test6', 4, 'G2VMHL0060.jpeg', 'test3', 'test4', 'test5'),
(16, '123b', 'นางสาว', 'เห้อ', 'เห้อหนัก', 2, '1111111111444', '123/2 หมู่ 6 ต.ป่าไผ่ อ.ดอกจัน จ.เชียงใหม่ 50089', 6, 'icon_data_userfemale.png', 'ไทย', 'ไทย', 'รับจ้างทั่วไป'),
(17, '1234', 'นาย', 'เศรษฐศิลป์', 'เพ็ญสิทธิ์', 1, '1509901623891', '123/2 หมู่ 6 ต.ป่าไผ่ อ.ดอกจัน จ.เชียงใหม่ 50089', 6, '4KG02023XA.jpeg', 'ไทย', 'ไทย/ญีปุ่น', 'รับจ้างทั่วไป'),
(18, '1234', 'นาย', 'ทด', 'ทส', 0, '1234567890123', '123/2 หมู่ 6', 4, 'icon_data_userfemale.png', 'ไทย', 'ไทย', 'รับจ้างทั่วไป');

-- --------------------------------------------------------

--
-- Table structure for table `villain`
--

CREATE TABLE `villain` (
  `vil_no` int(11) NOT NULL,
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villain_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villain_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villain_sex` tinyint(2) NOT NULL,
  `villain_idcard` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `villain_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `villain_education` tinyint(2) DEFAULT NULL,
  `villain_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `villain_race` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villain_nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villain_career` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villain_arya_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `villain`
--

INSERT INTO `villain` (`vil_no`, `case_id`, `title_name`, `villain_name`, `villain_lastname`, `villain_sex`, `villain_idcard`, `villain_address`, `villain_education`, `villain_image`, `villain_race`, `villain_nationality`, `villain_career`, `villain_arya_no`) VALUES
(1, 'ค.001', 'นาย', 'ลองอีก', 'เกิดไรขึ้นครับ', 1, '1158497684857', '1/1/64 บ้านจัดไป หมู่ 8 ', 4, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'นักร้อง', ''),
(2, 'ค.001', 'นาย', 'ทดสอบ', 'ทดลอง', 1, '1158497685123', '154/552 บ้านจัดไป หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงตุง 70550', 5, 'icon_data_usermale.png', 'ไทย', 'ไทย/ลาว', 'นักพากษ์', ''),
(3, 'กบ/24.33', 'นาง', 'อทัย', 'สุกล', 2, '1234895674536', '154/552 บ้านจัดไป หมู่ 8 ต.เอือก อ.สักรำ จ.เชียงราย 56776', 7, '0XA0301J22.jpeg', 'ไทย', 'ไทย', 'ผู้รับเหมา', ''),
(4, 'กก44', 'นาย', 'จิตจำนง', 'สีดำ', 1, '124145251938', '715/8  หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงตุง 70550', 4, 'icon_data_usermale.png', 'ไทย', 'ไทย/ลาว', 'นักแสดง', '221/12'),
(5, 'กก44', 'นางสาว', ' บุญดี', 'ใจใหญ่', 2, '1248846123456', '154/552 บ้านจัดไป หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงคอง 70550', 6, 'icon_data_userfemale.png', 'ไทย', 'ไทย', 'นักแสดง', '221/12'),
(6, 'todaytest11/01', 'นาย', 'ฐานรอง1', 'ไตรรัต', 1, '124884612389', '5/8 บ้านจัดไป หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงตุง 70550', 5, 'icon_data_usermale.png', 'ไทย', 'ไทย/ลาว', 'นักแสดง', '001.11/63'),
(7, 'ค.001', 'นางสาว', 'ภูมิลอง', 'ลองพูม', 2, '1248846251938', '75/8 บ้านจัดไป หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงตุง 70550', 6, 'L2B02C0Z2K.jpeg', 'ไทย', 'ไทย/ลาว', 'นักแสดง', '781/113'),
(8, 'todaytest11/01', 'นาย', 'ภูมิลอง2', 'ลองพูม', 1, '1248846256851', '154/5 บ้านจัดไป หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงตุง 70550', 6, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'นักแสดง', '001.11/63'),
(9, 'ค.001', 'นาย', 'ลองเชิง', 'เชิงกราน', 1, '1248846257625', '154/552 บ้านจัดไป หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงตุง 70550', 7, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'หมอ', '781/113'),
(10, 'testnow1', 'test1', 'test2', 'test3', 1, '1248854621938', 'test7', 5, '1ZL00000XN.jpeg', 'test4', 'test5', 'test6', 'test3'),
(11, 'testnow1', 'test1', 'test2', 'test3', 1, '1448846661938', 'test7', 3, 'G606HD2N1K.jpeg', 'test4', 'test5', 'test6', 'test3'),
(12, 'ง.12/52', 'นาย', 'แดง', 'สีแดง', 1, '1508509823421', NULL, 1, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'พ่อค้า', ''),
(28, '123b', 'นาย', 'เทส', 'เทส', 1, '1111111111222', '154/552 บ้านจัดไป หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงตุง 70550', 6, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'นักศึกษา', '13/13'),
(29, '123b', 'นางสาว', 'เทสหญิง', 'เทสหญิง', 2, '1111111111333', '154/552 บ้านจัดไป หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงตุง 70550', 5, 'icon_data_userfemale.png', 'ไทย', 'ไทย', 'นักศึกษา', '13/13'),
(30, '123b', 'นาย', 'โดนจับ', 'ครั้งที่หนึ่ง', 1, '1111111111444', '154/552 บ้านจัดไป หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงตุง 70550', 5, '0MDL22S0ZA.jpeg', 'ไทย', 'ไทย', 'นักธุรกิจ', '132/63'),
(33, '111/63', 'นาย', 'โจ', 'โจ้', 1, '1111111111555', '154/552 บ้านจัดไป หมู่ 8 ต.จันจ๋า อ.ดอยจัน จ.เชียงตุง 70550', 6, 'icon_data_usermale.png', 'ไทย', 'ไทย', 'นักแสดง', '132/63');

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
  `vil_iden_no` int(11) NOT NULL,
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

INSERT INTO `villain_identities` (`vil_iden_no`, `villain_idcard`, `face_villain`, `hair_style_villain`, `ears_villain`, `forehead_villain`, `eyes_villain`, `nose_villain`, `mouth_villain`, `chin_villain`, `body_villain`) VALUES
(1, '1158497684857', 3, 3, 5, 4, 6, 8, 5, 3, 1),
(2, '1158497685123', 3, 7, 5, 3, 1, 6, 5, 2, 1),
(3, '1234895674536', 4, 8, 6, 5, 5, 7, 6, 4, 3),
(4, '124145251938', 4, 4, 6, 3, 7, 8, 7, 5, 2),
(5, '1248846123456', 1, 2, 5, 5, 7, 8, 6, 4, 2),
(6, '124884612389', 6, 6, 3, 3, 5, 4, 5, 3, 2),
(7, '1248846251938', 1, 8, 6, 3, 3, 10, 2, 4, 3),
(8, '1248846256851', 6, 8, 4, 5, 4, 5, 4, 3, 1),
(9, '1248846257625', 7, 8, 5, 1, 2, 10, 5, 3, 2),
(10, '1248854621938', 1, 5, 5, 3, 7, 8, 6, 3, 2),
(11, '1448846661938', 6, 8, 6, 4, 5, 8, 7, 4, 3),
(22, '1111111111222', 3, 3, 6, 5, 6, 9, 7, 3, 2),
(23, '1111111111333', 6, 9, 7, 3, 7, 7, 2, 4, 2),
(24, '1111111111444', 5, 7, 5, 3, 6, 7, 5, 5, 2),
(25, '1111111111555', 4, 6, 5, 4, 6, 9, 6, 4, 2),
(26, '1111111111555', 5, 8, 7, 4, 8, 6, 6, 4, 2),
(27, '1111111111555', 5, 8, 7, 4, 8, 6, 6, 4, 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `witness_request_warr`
--

CREATE TABLE `witness_request_warr` (
  `no_witness` int(11) NOT NULL,
  `witness_case` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rw_witness` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `witness_request_warr`
--

INSERT INTO `witness_request_warr` (`no_witness`, `witness_case`, `rw_witness`) VALUES
(3, 'ค.001', 'mm1'),
(4, 'ค.001', 'mm2'),
(5, 'testnow1', 'test11'),
(6, 'testnow1', 'test22'),
(7, 'testnow1', 'test33'),
(8, 'testnow1', 'test44'),
(9, 'todaytest11/01', 'การสอบสวนทดลอง1'),
(10, 'todaytest11/01', 'การสอบสวนทดลอง2'),
(11, 'todaytest11/01', 'การสอบสวนทดลอง3'),
(12, 'todaytest11/01', 'การสอบสวนทดลอง4'),
(13, 'กก44', 'นาย ชอบมุง ทุกที่เลย'),
(14, 'กก44', ' นาง เหมือนจะช่วย แต่ไม่ช่วย'),
(15, 'test/667.62', 'mm1');

-- --------------------------------------------------------

--
-- Table structure for table `words_villain`
--

CREATE TABLE `words_villain` (
  `wv_no` int(11) NOT NULL,
  `wv_case` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_testimony` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_are` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_card` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `wv_output1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_output2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_last` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_police` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_station` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_date` date NOT NULL,
  `wv_accused` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_suspect` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_before` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_investigate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_race` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_careen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_headman` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_villageheadmane` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_farthername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_mothername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wv_official` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `words_villain`
--

INSERT INTO `words_villain` (`wv_no`, `wv_case`, `wv_testimony`, `wv_are`, `wv_phone`, `wv_card`, `wv_output1`, `wv_output2`, `wv_last`, `wv_police`, `wv_station`, `wv_date`, `wv_accused`, `wv_suspect`, `wv_before`, `wv_investigate`, `wv_name`, `wv_age`, `wv_race`, `wv_nationality`, `wv_religion`, `wv_careen`, `wv_address`, `wv_headman`, `wv_villageheadmane`, `wv_farthername`, `wv_mothername`, `wv_birthday`, `wv_official`) VALUES
(1, 'ค.001', '1158497684857', 'เป็นทดลอง', '0956675647', '1158497684857', 'test5', '', '', 'test8', 'test9999', '2020-01-05', 'test10', 'test11', 'test12', 'test13', 'test14', 'test15', 'test16', 'test17', 'test18', '', 'test19', 'test20', 'test21', 'test22', 'test23', 'test24', 'test25'),
(2, 'testnow1', '1248854621938', 'test2', 'test3', '1248854621938', 'test5', 'test6', 'test7', 'test8', 'test9', '2020-01-06', 'test10', 'test11', 'test12', 'test13', 'test14', 'test15', 'test16', 'test17', 'test18', '', 'test19', 'test20', 'test21', 'test22', 'test23', 'test24', 'test25'),
(3, 'todaytest11/01', '1248846256851', 'เป็นทดลอง1', '0826478596', '1248846256851', 'ณทดลอง', '2020-01-07', '2020-01-17', 'ชื่อทดลอง', 'สถานีทดลอง', '2020-01-07', 'ผู้กล่าวหาทดลอง', 'ผู้ต้องหาทดลอง', 'ต่อหน้าทดลอง', 'สอบสวนที่ทดลอง', 'ชื่อทดลอง', '25', 'เชื้อชาติทดลอง', 'สัญชาติทดลอง', 'ศาสนาทดลอง', 'อาชีพทดลอง', 'ที่อยู่ทดลอง', 'ผู้ใหญ่บ้านทดลอง', 'กำนันทดลอง', 'บิดาทดลอง', 'มารดาทดลอง', 'เกิดที่ทดลอง', 'ต้องหาว่าทดลอง'),
(4, 'กก44', '124145251938', 'ผู้ต้องหา', '0829079659', '124145251938', 'สถานีตำรวจภูธรเชียงใหญ่', '2020-01-10', '2020-01-31', ' แสงสิริ เกรียงทองดี', 'สถานีตำรวจภูธรเชียงใหญ่', '2020-01-10', 'นิบุญเลิศ องอาจกิจ', 'จิตจำนง สีดำ', 'แสงสิริ เกรียงทองดี ', 'สถานีตำรวจภูธรเชียงใหญ่', ' จิตจำนง สีดำ', '25', 'ไทย', 'ไทย', 'พุทธ', '', ' 47/8 หมู่ 5 บ้าน จับจอง ต.ป่าไม้งาม อ.ดอยเมิง จ.เชียงใจ 140200', ' แก้วมา อามาจุด', 'มาโลด โน้นแล้ว', 'พิเสก สีดำ', 'พิสมาน สีดำ', 'โรงพยาบาลราชวิน', 'ขมขื่นกระทำชำเราและทำร้ายผุ้อื่นโดยเจตนา  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrestor`
--
ALTER TABLE `arrestor`
  ADD PRIMARY KEY (`arrt_id`),
  ADD KEY `case_id` (`case_id`),
  ADD KEY `card_id` (`card_id`);

--
-- Indexes for table `arrest_info`
--
ALTER TABLE `arrest_info`
  ADD PRIMARY KEY (`case_id_arr_info`);

--
-- Indexes for table `arrest_record`
--
ALTER TABLE `arrest_record`
  ADD PRIMARY KEY (`arrest_no`),
  ADD KEY `case_id` (`case_id`);

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
-- Indexes for table `inquiry_official`
--
ALTER TABLE `inquiry_official`
  ADD PRIMARY KEY (`in_of_id`),
  ADD KEY `case_id` (`case_id`),
  ADD KEY `card_id` (`card_id`);

--
-- Indexes for table `investigation_report`
--
ALTER TABLE `investigation_report`
  ADD PRIMARY KEY (`no_ir`),
  ADD KEY `ir_case` (`ir_case`);

--
-- Indexes for table `object_case`
--
ALTER TABLE `object_case`
  ADD PRIMARY KEY (`ob_no`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `pin_case`
--
ALTER TABLE `pin_case`
  ADD PRIMARY KEY (`pin_no`),
  ADD KEY `case_id` (`case_id`) USING BTREE;

--
-- Indexes for table `police_catch_arrest`
--
ALTER TABLE `police_catch_arrest`
  ADD PRIMARY KEY (`id_po_ca_ar`);

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
-- Indexes for table `request_warrant`
--
ALTER TABLE `request_warrant`
  ADD PRIMARY KEY (`no_rw`);

--
-- Indexes for table `responsible_person`
--
ALTER TABLE `responsible_person`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `card_id` (`card_id`);

--
-- Indexes for table `search_warrant`
--
ALTER TABLE `search_warrant`
  ADD PRIMARY KEY (`sw_no`);

--
-- Indexes for table `status_case`
--
ALTER TABLE `status_case`
  ADD PRIMARY KEY (`num_status`);

--
-- Indexes for table `subpoena`
--
ALTER TABLE `subpoena`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `summon_villain`
--
ALTER TABLE `summon_villain`
  ADD PRIMARY KEY (`no_sv`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`vic_no`),
  ADD KEY `victim_education` (`victim_education`),
  ADD KEY `case_id` (`case_id`),
  ADD KEY `victim_idcard` (`victim_idcard`) USING BTREE;

--
-- Indexes for table `villain`
--
ALTER TABLE `villain`
  ADD PRIMARY KEY (`vil_no`) USING BTREE,
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
  ADD PRIMARY KEY (`vil_iden_no`);

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
-- Indexes for table `witness_request_warr`
--
ALTER TABLE `witness_request_warr`
  ADD PRIMARY KEY (`no_witness`);

--
-- Indexes for table `words_villain`
--
ALTER TABLE `words_villain`
  ADD PRIMARY KEY (`wv_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arrestor`
--
ALTER TABLE `arrestor`
  MODIFY `arrt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `arrest_record`
--
ALTER TABLE `arrest_record`
  MODIFY `arrest_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `edu_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inquiry_official`
--
ALTER TABLE `inquiry_official`
  MODIFY `in_of_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `investigation_report`
--
ALTER TABLE `investigation_report`
  MODIFY `no_ir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `object_case`
--
ALTER TABLE `object_case`
  MODIFY `ob_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pin_case`
--
ALTER TABLE `pin_case`
  MODIFY `pin_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `police_catch_arrest`
--
ALTER TABLE `police_catch_arrest`
  MODIFY `id_po_ca_ar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rank_police`
--
ALTER TABLE `rank_police`
  MODIFY `rank_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request_warrant`
--
ALTER TABLE `request_warrant`
  MODIFY `no_rw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `search_warrant`
--
ALTER TABLE `search_warrant`
  MODIFY `sw_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_case`
--
ALTER TABLE `status_case`
  MODIFY `num_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `summon_villain`
--
ALTER TABLE `summon_villain`
  MODIFY `no_sv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `victim`
--
ALTER TABLE `victim`
  MODIFY `vic_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `villain`
--
ALTER TABLE `villain`
  MODIFY `vil_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
-- AUTO_INCREMENT for table `villain_identities`
--
ALTER TABLE `villain_identities`
  MODIFY `vil_iden_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
-- AUTO_INCREMENT for table `witness_request_warr`
--
ALTER TABLE `witness_request_warr`
  MODIFY `no_witness` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `words_villain`
--
ALTER TABLE `words_villain`
  MODIFY `wv_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arrestor`
--
ALTER TABLE `arrestor`
  ADD CONSTRAINT `arrestor_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `arrestor_ibfk_2` FOREIGN KEY (`card_id`) REFERENCES `police_person` (`card_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `arrest_record`
--
ALTER TABLE `arrest_record`
  ADD CONSTRAINT `arrest_record_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inquiry_official`
--
ALTER TABLE `inquiry_official`
  ADD CONSTRAINT `inquiry_official_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inquiry_official_ibfk_3` FOREIGN KEY (`card_id`) REFERENCES `police_person` (`card_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `investigation_report`
--
ALTER TABLE `investigation_report`
  ADD CONSTRAINT `investigation_report_ibfk_1` FOREIGN KEY (`ir_case`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `object_case`
--
ALTER TABLE `object_case`
  ADD CONSTRAINT `object_case_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pin_case`
--
ALTER TABLE `pin_case`
  ADD CONSTRAINT `pin_case_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `police_person`
--
ALTER TABLE `police_person`
  ADD CONSTRAINT `police_person_ibfk_1` FOREIGN KEY (`rank_id`) REFERENCES `rank_police` (`rank_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `police_person_ibfk_2` FOREIGN KEY (`card_id`) REFERENCES `user` (`card_id`);

--
-- Constraints for table `responsible_person`
--
ALTER TABLE `responsible_person`
  ADD CONSTRAINT `responsible_person_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `responsible_person_ibfk_2` FOREIGN KEY (`card_id`) REFERENCES `police_person` (`card_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subpoena`
--
ALTER TABLE `subpoena`
  ADD CONSTRAINT `subpoena_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case_name` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `villain_ibfk_2` FOREIGN KEY (`villain_education`) REFERENCES `education` (`edu_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
