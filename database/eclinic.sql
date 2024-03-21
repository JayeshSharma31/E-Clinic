-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 09:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `upass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `rctno` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `toc` varchar(20) NOT NULL,
  `ramark` varchar(100) NOT NULL,
  `fee` varchar(5) NOT NULL,
  `date_of_consult` varchar(20) NOT NULL,
  `tno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`rctno`, `pid`, `pname`, `dname`, `toc`, `ramark`, `fee`, `date_of_consult`, `tno`) VALUES
(1, 1, 'abcd', 'Dr. Ram', '01:00', 'testing purpose', '200', '', 0),
(2, 1, 'abcd', 'Mr Dr.', '01:00', 'testing purpose', '250', '24/06/21', 0),
(3, 6, 'test data', 'Mr Dr.', '01:00', ' ASDJKA SHDFKJAL SDHFJKALS HDFKJALS DHFJAKL SDHFKJAL HSDF', '250', '24/06/21', 0),
(4, 6, 'test data', 'Mr Dr.', '01:00', ' ASDJKA SHDFKJAL SDHFJKALS HDFKJALS DHFJAKL SDHFKJAL HSDF', '250', '24/06/21', 0),
(5, 6, 'test data', 'Mr Dr.', '01:00', ' ASDJKA SHDFKJAL SDHFJKALS HDFKJALS DHFJAKL SDHFKJAL HSDF', '250', '24/06/21', 0),
(6, 6, 'test data', 'Mr Dr.', '01:00', 'teuyg fghj kfgdkh kfgdhjf gdhf g', '250', '24/06/21', 0),
(7, 6, 'test data', 'Mr Dr.', '01:00', 'teuyg fghj kfgdkh kfgdhjf gdhf g', '250', '24/06/21', 0),
(8, 6, 'test data', 'Mr Dr.', '1pm', 'testing purpose', '250', '24/06/21', 0),
(9, 6, 'test data', 'abcd', '1pm', 'testing purpose', '250', '24/06/21', 0),
(10, 6, 'test data', 'abcd', '1pm', 'testing purpose', '250', '24/06/21', 0),
(11, 8, 'abcde', 'Mr Dr.', '2pm', ' ASDJKA SHDFKJAL SDHFJKALS HDFKJALS DHFJAKL SDHFKJAL HSDF', '300', '25/06/21', 0),
(12, 8, 'abcde', 'Mr Dr.', '5pm', 'kjjsdh fjkd hfkk dhfkjh dsfkj lahdsdjkf h', '300', '25/06/21', 0),
(13, 8, 'abcde', 'Mr Dr.', '4pm', 'general check up', '200', '22/06/21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `ctno` varchar(12) NOT NULL,
  `speciality` varchar(40) NOT NULL,
  `doj` varchar(30) NOT NULL,
  `dt` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `gen`, `ctno`, `speciality`, `doj`, `dt`, `status`) VALUES
(1, 'Mr Dr.', 'Male', '9876543210', 'Medicine', '2021-01-01', '2 to 5 pm', 'Available'),
(2, 'Dr. Ram', 'Male', '8765432112', 'Obstetrics', '2021-12-31', '4 to 7', 'Available'),
(3, 'Dr. Seema', 'FeMale', '876543212', 'Gynecology', '2020-01-01', '1 to 7', 'Available'),
(4, 'Dr. Seema', 'FeMale', '876543212', 'Gynecology', '2020-01-01', '1 to 7', 'Not Available'),
(5, 'abcd', 'pqrs', 'Male', '9876543210', '2021-01-01', '', 'Not Available'),
(6, 'abcd', 'pqrs', 'Male', '9876543210', '2021-01-01', '', 'Not Available'),
(7, 'abcd', 'pqrs', 'Male', '9876543210', '2021-01-01', '', 'Not Available'),
(8, 'abcd', 'pqrs', 'Male', '9876543210', '2021-01-01', '', 'Not Available'),
(9, 'abcd', 'pqrs', 'Male', '9876543210', '2021-01-01', '', 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `logiin`
--

CREATE TABLE `logiin` (
  `uid` varchar(50) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `ugen` varchar(10) NOT NULL,
  `uctno` varchar(15) NOT NULL,
  `upic` varchar(100) NOT NULL,
  `udoj` varchar(100) NOT NULL,
  `uaddr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logiin`
--

INSERT INTO `logiin` (`uid`, `upass`, `uname`, `ugen`, `uctno`, `upic`, `udoj`, `uaddr`) VALUES
('abc@gmail.com', 'abc', 'Ram kumar', 'Male', '9876543211', 'user.png', '2021-06-22', 'sect -4 udaipur'),
('pqr@gmail.com', '123', 'Suraj Kumarr', 'Male', '1234567890', '220px-User_icon_2.svg.png', '2021-06-02', 'abcd, udaipur');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `pgen` varchar(20) NOT NULL,
  `pctno` varchar(15) NOT NULL,
  `dor` varchar(15) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `pname`, `fname`, `pgen`, `pctno`, `dor`, `age`) VALUES
(1, 'abcd', 'test', 'Male', '9876543210', '2021-01-01', 88),
(2, 'testing', 'test', 'Male', '123456789', '2021-01-01', 88),
(3, 'testing', 'test', 'Male', '123456789', '2021-01-01', 88),
(4, 'testing', 'test', 'Male', '123456789', '2021-01-01', 88),
(5, 'test data', 'testing', 'Male', '9876543211', '2021-01-01', 89),
(6, 'test data', 'testing', 'Male', '9876543211', '2021-01-01', 89),
(7, 'test data', 'testing', 'Male', '9876543211', '2021-01-01', 89),
(8, 'abcde', 'test', 'Male', '90000000000', '2021-01-01', 88),
(9, 'demo', 'test data', 'Male', '9876543210', '2021-01-01', 80);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `dname` varchar(50) NOT NULL,
  `dte` varchar(50) NOT NULL,
  `tme` varchar(20) NOT NULL,
  `tno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`dname`, `dte`, `tme`, `tno`) VALUES
('Dr. Seema', '25/06/21', '2', 3),
('Mr Dr.', '25/06/21', '1', 2),
('Dr. Ram', '25/06/21', '4pm', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`rctno`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `logiin`
--
ALTER TABLE `logiin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `rctno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
