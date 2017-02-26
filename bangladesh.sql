-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 09:51 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangladesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `districtId` int(11) NOT NULL,
  `districtName` varchar(250) NOT NULL,
  `divisionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`districtId`, `districtName`, `divisionId`) VALUES
(1, 'Barguna', 1),
(2, 'Barisal', 1),
(3, 'Bhola', 1),
(4, 'Jhalokati', 1),
(5, 'Bandarban', 2),
(6, 'Brahmanbaria', 2),
(7, 'Faridpur', 3),
(8, 'Gazipur', 3),
(9, 'Gopalganj', 3),
(10, 'Kishoreganj', 3);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `divisionsId` int(11) NOT NULL,
  `divisionName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`divisionsId`, `divisionName`) VALUES
(1, 'Barisal'),
(2, 'Chittagong'),
(3, 'Dhaka'),
(4, 'Khulna'),
(5, 'Mymensingh'),
(6, 'Rajshahi'),
(7, 'Rangpur'),
(8, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `upazila`
--

CREATE TABLE `upazila` (
  `upazilaId` int(11) NOT NULL,
  `upazilaName` varchar(250) NOT NULL,
  `districtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upazila`
--

INSERT INTO `upazila` (`upazilaId`, `upazilaName`, `districtId`) VALUES
(1, 'Amtali ', 1),
(2, 'Bamna', 1),
(3, 'Betagi Upazila', 1),
(4, 'Barguna Sadar Upazila', 1);

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE `village` (
  `villageId` int(11) NOT NULL,
  `villageName` varchar(250) NOT NULL,
  `upazilaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`villageId`, `villageName`, `upazilaId`) VALUES
(1, 'Bamna ', 1),
(2, 'Barguna ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`districtId`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`divisionsId`);

--
-- Indexes for table `upazila`
--
ALTER TABLE `upazila`
  ADD PRIMARY KEY (`upazilaId`);

--
-- Indexes for table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`villageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `districtId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `divisionsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `upazila`
--
ALTER TABLE `upazila`
  MODIFY `upazilaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `village`
--
ALTER TABLE `village`
  MODIFY `villageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
