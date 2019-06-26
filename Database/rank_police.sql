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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rank_police`
--
ALTER TABLE `rank_police`
  ADD PRIMARY KEY (`rank_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rank_police`
--
ALTER TABLE `rank_police`
  MODIFY `rank_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
