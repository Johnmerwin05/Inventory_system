-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 07:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yumi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', '4297f44b13955235245b2497399d7a93', 'John Merwin Cielo'),
(8, 'demo', '4297f44b13955235245b2497399d7a93', 'yumi');

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow`
--

CREATE TABLE `cash_flow` (
  `id` int(11) NOT NULL,
  `Business` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `t1` int(11) NOT NULL,
  `t2` int(11) NOT NULL,
  `t3` int(11) NOT NULL,
  `t4` int(11) NOT NULL,
  `t5` int(11) NOT NULL,
  `t6` int(11) NOT NULL,
  `t7` int(11) NOT NULL,
  `t8` int(11) NOT NULL,
  `t9` int(11) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `d1` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d3` int(11) NOT NULL,
  `d4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cash_flow`
--

INSERT INTO `cash_flow` (`id`, `Business`, `year`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `s1`, `s2`, `d1`, `d2`, `d3`, `d4`) VALUES
(5, 'Dental Clinic ', '2015 ', -463752, 1231, 2312, 123, 1231, 23123, 12312, 3123, -491413, 123, 123, 1231, 123, 12312, -11204),
(6, 'gg ', '2011 ', -5561, 123, 1231, 21, 312, 123, 123, 1231, -2931, 123, 123, 123, 123, 123, -123);

-- --------------------------------------------------------

--
-- Table structure for table `current_asset`
--

CREATE TABLE `current_asset` (
  `id` int(11) NOT NULL,
  `Business` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `input1` int(11) NOT NULL,
  `input2` int(11) NOT NULL,
  `input3` int(11) NOT NULL,
  `input4` int(11) NOT NULL,
  `input5` int(11) NOT NULL,
  `input6` int(11) NOT NULL,
  `input7` int(11) NOT NULL,
  `input8` int(11) NOT NULL,
  `input9` int(11) NOT NULL,
  `input10` int(11) NOT NULL,
  `input11` int(11) NOT NULL,
  `input12` int(11) NOT NULL,
  `g1` int(11) NOT NULL,
  `g2` int(11) NOT NULL,
  `g3` int(11) NOT NULL,
  `g4` int(11) NOT NULL,
  `g5` int(11) NOT NULL,
  `g6` int(11) NOT NULL,
  `g7` int(11) NOT NULL,
  `g8` int(11) NOT NULL,
  `g9` int(11) NOT NULL,
  `g10` int(11) NOT NULL,
  `l1` int(11) NOT NULL,
  `l2` int(11) NOT NULL,
  `l3` int(11) NOT NULL,
  `l4` int(11) NOT NULL,
  `l5` int(11) NOT NULL,
  `l6` int(11) NOT NULL,
  `l7` int(11) NOT NULL,
  `l8` int(11) NOT NULL,
  `l9` int(11) NOT NULL,
  `l10` int(11) NOT NULL,
  `l11` int(11) NOT NULL,
  `l12` int(11) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `n7` int(11) NOT NULL,
  `e1` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `e3` int(11) NOT NULL,
  `e4` int(11) NOT NULL,
  `e5` int(11) NOT NULL,
  `e6` int(11) NOT NULL,
  `e7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `current_asset`
--

INSERT INTO `current_asset` (`id`, `Business`, `year`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `input10`, `input11`, `input12`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `g9`, `g10`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `l8`, `l9`, `l10`, `l11`, `l12`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`) VALUES
(7, 'Dental Clinic', '2015', 12312, 22, 231, 123, 123, 12312, 12, 312, 312, 123, 11, 25883, 33, 1231, 2312, 123, 123, 123, 123, 12, 123, 4047, 11, 123, 123, 123, 121, 23, 1231, 123, 12312, 123, 123, 14548, 22, 1231, 2312, 231, 1231, 3123, 20440, 55, 1, 12312, 1231, 12312, 1231, 24748),
(8, 'gg', '2011', 1231, 123, 123, 1231, 21231, 1231, 1231, 2123, 123, 123, 12312, 41082, 1231, 2312, 123, 12312, 123, 1123, 1231, 1231, 123, 19563, 123, 123, 12312, 3, 1231, 12312, 1231, 2123, 12312, 123, 1231, 43124, 12312, 123, 1212312, 12312, 12312, 12312, 1261683, 1231, 21231, 21231, 1231, 1231, 1231, 44924);

-- --------------------------------------------------------

--
-- Table structure for table `revenues`
--

CREATE TABLE `revenues` (
  `id` int(11) NOT NULL,
  `Business` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `b1` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `b5` int(11) NOT NULL,
  `b6` int(11) NOT NULL,
  `f1` int(11) NOT NULL,
  `f2` int(11) NOT NULL,
  `f3` int(11) NOT NULL,
  `f4` int(11) NOT NULL,
  `f5` int(11) NOT NULL,
  `f6` int(11) NOT NULL,
  `f7` int(11) NOT NULL,
  `f8` int(11) NOT NULL,
  `f9` int(11) NOT NULL,
  `f10` int(11) NOT NULL,
  `net` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `revenues`
--

INSERT INTO `revenues` (`id`, `Business`, `year`, `a1`, `a2`, `a3`, `a4`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `net`) VALUES
(5, 'Dental Clinic ', '2015 ', 123, 123, 1231, 1231, 12312, 1231, 1231, 123123, 123, 135312, 123, 123, 1231, 12, 3123, 123, 12312, 312, 312312, 329671, -463752),
(6, 'gg ', '2011 ', 123, 1, 1, 123, 213, 2, 213, 1231, 31, 1202, 123, 123, 123, 123, 2312, 1231, 123, 12, 312, 4482, -5561);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_flow`
--
ALTER TABLE `cash_flow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_asset`
--
ALTER TABLE `current_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revenues`
--
ALTER TABLE `revenues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cash_flow`
--
ALTER TABLE `cash_flow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `current_asset`
--
ALTER TABLE `current_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `revenues`
--
ALTER TABLE `revenues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
