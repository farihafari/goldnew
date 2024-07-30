-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 01:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gold`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `castingmaster`
--

CREATE TABLE `castingmaster` (
  `cm_id` int(11) NOT NULL,
  `acc_id` int(11) DEFAULT NULL,
  `billno` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `gold_type` varchar(255) DEFAULT NULL,
  `gold_receive` double DEFAULT NULL,
  `rati` double DEFAULT NULL,
  `casting` double DEFAULT NULL,
  `casting_return` double DEFAULT NULL,
  `ghati` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `pure_gold` double DEFAULT NULL,
  `laboure` double DEFAULT NULL,
  `cash_receive` double DEFAULT NULL,
  `cash_return` double DEFAULT NULL,
  `gold_return` double DEFAULT NULL,
  `less_casting` double DEFAULT NULL,
  `less_casting_pure_gold` double DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `gold_report` double DEFAULT NULL,
  `cash_report` double DEFAULT NULL,
  `pay_gold` double DEFAULT NULL,
  `pay_cash` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partiesprofile`
--

CREATE TABLE `partiesprofile` (
  `acc_id` int(11) NOT NULL,
  `party_name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `datetime` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `recivable_gold` double DEFAULT NULL,
  `recivable_cash` double DEFAULT NULL,
  `recivable_Type` varchar(255) DEFAULT NULL,
  `payable_gold` double DEFAULT NULL,
  `payable_cash` double DEFAULT NULL,
  `payable_Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partiesprofile`
--

INSERT INTO `partiesprofile` (`acc_id`, `party_name`, `contact`, `datetime`, `address`, `recivable_gold`, `recivable_cash`, `recivable_Type`, `payable_gold`, `payable_cash`, `payable_Type`) VALUES
(1, 'shabbir', '03052563576', '2024-07-30', 'pidc karachi', 1.25, 100000, 'Teezabi', 1.25, 100000, 'Teezabi'),
(2, 'aptech', '2445554', '2024-07-30', 'karachi', 10, 10000, 'piece', 0, 0, 'Teezabi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `castingmaster`
--
ALTER TABLE `castingmaster`
  ADD KEY `second_key` (`acc_id`);

--
-- Indexes for table `partiesprofile`
--
ALTER TABLE `partiesprofile`
  ADD PRIMARY KEY (`acc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `castingmaster`
--
ALTER TABLE `castingmaster`
  ADD CONSTRAINT `second_key` FOREIGN KEY (`acc_id`) REFERENCES `partiesprofile` (`acc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
