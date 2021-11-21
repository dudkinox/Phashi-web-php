-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 06:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cal`
--

CREATE TABLE `cal` (
  `ID_FR` varchar(100) NOT NULL,
  `sum` decimal(50,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `Income_D` varchar(100) NOT NULL,
  `Fee_D` varchar(100) NOT NULL,
  `Copy_D` varchar(100) NOT NULL,
  `Interest_D` varchar(100) NOT NULL,
  `Interest_D11` varchar(100) NOT NULL,
  `Interest_D12` varchar(100) NOT NULL,
  `Interest_D13` varchar(100) NOT NULL,
  `Interest_D14` varchar(100) NOT NULL,
  `Interest_D21` varchar(100) NOT NULL,
  `Interest_D22` varchar(100) NOT NULL,
  `Interest_D23` varchar(100) NOT NULL,
  `Interest_D24` varchar(100) NOT NULL,
  `Interest_D25` varchar(100) NOT NULL,
  `Pay_D` varchar(100) NOT NULL,
  `Other_D` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `give`
--

CREATE TABLE `give` (
  `ID_G` varchar(100) NOT NULL,
  `Name_G` varchar(100) NOT NULL,
  `Address_G` varchar(100) NOT NULL,
  `No_G` varchar(100) NOT NULL,
  `type_G` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `ID` varchar(100) NOT NULL,
  `No` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image` varchar(100) NOT NULL,
  `No` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `ID_FR` varchar(100) NOT NULL,
  `Interest` varchar(100) NOT NULL,
  `Interest_other` varchar(100) NOT NULL,
  `Other` varchar(100) NOT NULL,
  `Sum_pay` varchar(100) NOT NULL,
  `Sum_sent` varchar(100) NOT NULL,
  `Sum_vat` varchar(100) NOT NULL,
  `School` varchar(100) NOT NULL,
  `Social` varchar(100) NOT NULL,
  `Life` varchar(100) NOT NULL,
  `Pay` varchar(100) NOT NULL,
  `Pay_other` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `Income_P` varchar(100) NOT NULL,
  `Fee_P` varchar(100) NOT NULL,
  `Copy_P` varchar(100) NOT NULL,
  `Interest_P` varchar(100) NOT NULL,
  `Interest_P11` varchar(100) NOT NULL,
  `Interest_P12` varchar(100) NOT NULL,
  `Interest_P13` varchar(100) NOT NULL,
  `Interest_P14` varchar(100) NOT NULL,
  `Interest_P21` varchar(100) NOT NULL,
  `Interest_P22` varchar(100) NOT NULL,
  `Interest_P23` varchar(100) NOT NULL,
  `Interest_P24` varchar(100) NOT NULL,
  `Interest_P25` varchar(100) NOT NULL,
  `Pay_P` varchar(100) NOT NULL,
  `Other_P` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sent`
--

CREATE TABLE `sent` (
  `Income_S` varchar(100) NOT NULL,
  `Fee_S` varchar(100) NOT NULL,
  `Copy_S` varchar(100) NOT NULL,
  `Interest_S` varchar(100) NOT NULL,
  `Interest_S11` varchar(100) NOT NULL,
  `Interest_S12` varchar(100) NOT NULL,
  `Interest_S13` varchar(100) NOT NULL,
  `Interest_S14` varchar(100) NOT NULL,
  `Interest_S21` varchar(100) NOT NULL,
  `Interest_S22` varchar(100) NOT NULL,
  `Interest_S23` varchar(100) NOT NULL,
  `Interest_S24` varchar(100) NOT NULL,
  `Interest_S25` varchar(100) NOT NULL,
  `Pay_S` varchar(100) NOT NULL,
  `Other_S` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `take`
--

CREATE TABLE `take` (
  `ID_T` varchar(100) NOT NULL,
  `Name_T` varchar(100) NOT NULL,
  `Address_T` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cal`
--
ALTER TABLE `cal`
  ADD PRIMARY KEY (`ID_FR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
