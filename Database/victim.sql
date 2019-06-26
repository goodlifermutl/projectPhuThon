-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 11:06 AM
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
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `victim_education` (`victim_education`);

--
-- Constraints for dumped tables
--

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
