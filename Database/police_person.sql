-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 11:05 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `police_person`
--
ALTER TABLE `police_person`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `rank_id` (`rank_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `police_person`
--
ALTER TABLE `police_person`
  ADD CONSTRAINT `police_person_ibfk_1` FOREIGN KEY (`rank_id`) REFERENCES `rank_police` (`rank_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
