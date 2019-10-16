-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 09:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expdb`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `budgetsum`
--
CREATE TABLE `budgetsum` (
`SUM(budgetToday)` decimal(41,0)
,`month` int(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `budgettable`
--

CREATE TABLE `budgettable` (
  `id` int(25) NOT NULL,
  `budgetToday` int(20) NOT NULL,
  `date` date NOT NULL,
  `month` int(20) NOT NULL,
  `year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budgettable`
--

INSERT INTO `budgettable` (`id`, `budgetToday`, `date`, `month`, `year`) VALUES
(1, 500, '2019-08-12', 8, 2019),
(3, 1000, '2019-08-08', 8, 2019),
(4, 1000, '2019-07-06', 7, 2019),
(5, 500, '2019-08-06', 8, 2019),
(6, 500, '2019-08-07', 8, 2019),
(7, 600, '2019-08-17', 8, 2019),
(9, 2300, '2019-09-06', 9, 2019),
(10, 400, '2019-10-01', 10, 2019),
(11, 170, '2019-10-05', 10, 2019),
(12, 180, '2019-10-05', 10, 2019),
(15, 160, '2019-10-08', 10, 2019);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dailyexp`
--
CREATE TABLE `dailyexp` (
`SUM(exptable.amount)` decimal(41,0)
,`date` date
,`budgetToday` int(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `expsum`
--
CREATE TABLE `expsum` (
`SUM(amount)` decimal(41,0)
,`month` int(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `exptable`
--

CREATE TABLE `exptable` (
  `id` int(20) NOT NULL,
  `exptype` varchar(255) NOT NULL,
  `expdescp` varchar(255) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` date NOT NULL,
  `month` int(20) NOT NULL,
  `year` int(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exptable`
--

INSERT INTO `exptable` (`id`, `exptype`, `expdescp`, `amount`, `date`, `month`, `year`, `time`) VALUES
(1, 'food', 'taco bell', 200, '2019-07-06', 7, 2019, '22:10'),
(4, 'travel', 'volvo', 50, '2019-08-06', 8, 2019, '10:34'),
(5, 'Stationery', 'volvo', 20, '2019-08-07', 8, 2019, '12:29'),
(6, 'travel', 'volvo', 30, '2019-08-07', 8, 2019, '12:36'),
(8, 'Stationery', 'saab', 100, '2019-08-07', 8, 2019, '12:39'),
(10, 'travel', 'volvo', 1, '2019-08-07', 8, 2019, '12:39'),
(11, 'Miscellaneous', 'opel', 500, '2019-08-07', 8, 2019, '09:04'),
(12, 'travel', 'audi', 300, '2019-08-08', 8, 2019, '12:34'),
(20, 'Stationery', 'kko', 50, '2019-08-12', 8, 2019, '03:37'),
(21, 'Miscellaneous', 'jjq', 50, '2019-08-12', 8, 2019, '03:38'),
(22, 'Travel', 'trasin', 150, '2019-08-14', 8, 2019, '08:13'),
(23, 'Food', 'KFC', 150, '2019-08-17', 8, 2019, '03:16'),
(24, 'Travel', 'Buvuv', 500, '2019-08-22', 8, 2019, '11:11'),
(25, 'Travel', 'wewe', 223, '2019-09-06', 9, 2019, '10:46'),
(26, 'Travel', 'train', 100, '2019-10-01', 10, 2019, '09:04'),
(27, 'Food', 'KFC', 40, '2019-10-05', 10, 2019, '08:53'),
(28, 'Travel', 'IND', 30, '2019-10-05', 10, 2019, '08:56'),
(29, 'Stationery', 'PEN', 10, '2019-10-05', 10, 2019, '08:58'),
(30, 'Food', 'McD', 40, '2019-10-08', 10, 2019, '12:21'),
(31, 'Travel', 'Train', 20, '2019-10-08', 10, 2019, '12:21');

-- --------------------------------------------------------

--
-- Stand-in structure for view `newsaved`
--
CREATE TABLE `newsaved` (
`expense` decimal(41,0)
,`budget` decimal(41,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `saved`
--
CREATE TABLE `saved` (
`expense` decimal(41,0)
,`budget` decimal(41,0)
);

-- --------------------------------------------------------

--
-- Structure for view `budgetsum`
--
DROP TABLE IF EXISTS `budgetsum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `budgetsum`  AS  select sum(`budgettable`.`budgetToday`) AS `SUM(budgetToday)`,`budgettable`.`month` AS `month` from `budgettable` group by month(`budgettable`.`date`) ;

-- --------------------------------------------------------

--
-- Structure for view `dailyexp`
--
DROP TABLE IF EXISTS `dailyexp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dailyexp`  AS  select sum(`exptable`.`amount`) AS `SUM(exptable.amount)`,`exptable`.`date` AS `date`,`budgettable`.`budgetToday` AS `budgetToday` from (`exptable` join `budgettable`) where (`exptable`.`date` = `budgettable`.`date`) group by `exptable`.`date` ;

-- --------------------------------------------------------

--
-- Structure for view `expsum`
--
DROP TABLE IF EXISTS `expsum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `expsum`  AS  select sum(`exptable`.`amount`) AS `SUM(amount)`,`exptable`.`month` AS `month` from `exptable` group by month(`exptable`.`date`) ;

-- --------------------------------------------------------

--
-- Structure for view `newsaved`
--
DROP TABLE IF EXISTS `newsaved`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `newsaved`  AS  select `expsum`.`SUM(amount)` AS `expense`,`budgetsum`.`SUM(budgetToday)` AS `budget` from (`expsum` join `budgetsum`) group by month(`expsum`.`month`) ;

-- --------------------------------------------------------

--
-- Structure for view `saved`
--
DROP TABLE IF EXISTS `saved`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `saved`  AS  select `expsum`.`SUM(amount)` AS `expense`,`budgetsum`.`SUM(budgetToday)` AS `budget` from (`expsum` join `budgetsum`) group by month(`expsum`.`month`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgettable`
--
ALTER TABLE `budgettable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exptable`
--
ALTER TABLE `exptable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budgettable`
--
ALTER TABLE `budgettable`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `exptable`
--
ALTER TABLE `exptable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
