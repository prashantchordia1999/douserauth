-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 06:44 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mucoehregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `mucoehcollegesignup`
--

CREATE TABLE `mucoehcollegesignup` (
  `University_Name` varchar(50) COLLATE utf8_bin NOT NULL,
  `University_Head` varchar(50) COLLATE utf8_bin NOT NULL,
  `University_Email` varchar(50) COLLATE utf8_bin NOT NULL,
  `No_of_Departments` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mucoehcollegesignup`
--

INSERT INTO `mucoehcollegesignup` (`University_Name`, `University_Head`, `University_Email`, `No_of_Departments`) VALUES
('akjffb', 'sadfn', 'akuja', '2'),
('aksnf', 'kasfcn', 'jakjv@gmail.com', '3'),
('poiuyt', 'oig', 'oiugf@gmail.com', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mucoehcollegesignup`
--
ALTER TABLE `mucoehcollegesignup`
  ADD UNIQUE KEY `University_Email` (`University_Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
