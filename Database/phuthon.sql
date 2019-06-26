-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 11:04 AM
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
-- Table structure for table `case_name`
--

CREATE TABLE `case_name` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `case_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `case_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `case_name`
--

INSERT INTO `case_name` (`case_id`, `case_name`, `case_type`) VALUES
('ค.001', 'แมวดำ', '1'),
('ง.12/52', 'ตีโปร่ง', '2');

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
('1234567890123', 1, 'เจริญใจ', 'บำรุงอยู่', 1, NULL, NULL);

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
('ค.001', '1234567890123');

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
(3, 'admin01', 'c93ccd78b2076528346216b3b2f701e6', '1234567890123');

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `case_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_id` tinyint(2) NOT NULL,
  `victim_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `victim_sex` tinyint(2) NOT NULL,
  `victim_idcard` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `victim_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `victim_education` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `victim`
--

INSERT INTO `victim` (`case_id`, `title_id`, `victim_name`, `victim_lastname`, `victim_sex`, `victim_idcard`, `victim_address`, `victim_education`) VALUES
('ค.001', 1, 'ทองคำดี', 'เคยมีสุข', 1, '1509901658485', NULL, 4);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `victim_education` (`victim_education`);

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
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
