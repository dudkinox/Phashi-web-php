-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 07:05 PM
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

--
-- Dumping data for table `cal`
--

INSERT INTO `cal` (`ID_FR`, `sum`) VALUES
('1-1111-11111-1-11', '3000.00');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `ID_FR` varchar(100) NOT NULL,
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

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`ID_FR`, `Income_D`, `Fee_D`, `Copy_D`, `Interest_D`, `Interest_D11`, `Interest_D12`, `Interest_D13`, `Interest_D14`, `Interest_D21`, `Interest_D22`, `Interest_D23`, `Interest_D24`, `Interest_D25`, `Pay_D`, `Other_D`) VALUES
('1-1111-11111-1-11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

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

--
-- Dumping data for table `give`
--

INSERT INTO `give` (`ID_G`, `Name_G`, `Address_G`, `No_G`, `type_G`) VALUES
('1-1111-11111-1-11', 'ชื่อ นามสกุล ที่จ่าย', '64/39', '21', 'ภ.ง.ด.53');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `ID_FR` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `No` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`ID_FR`, `ID`, `No`, `image`) VALUES
('1-1111-11111-1-11', '1', '1', '../uploads/20790c42cadda6a6f12d75a019629f0e.jpg');

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

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`ID_FR`, `Interest`, `Interest_other`, `Other`, `Sum_pay`, `Sum_sent`, `Sum_vat`, `School`, `Social`, `Life`, `Pay`, `Pay_other`, `Name`, `Date`) VALUES
('1-1111-11111-1-11', 'อัตราอื่นๆ', 'อื่นๆ', 'อื่นๆ', '200', '3000', 'รวมเงินภาษีที่หักส่ง', '12', '12', '1', 'อื่นๆ', 'อื่นๆ', 'ชื่อสกุลผู้จ่ายเงิน', '2021-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `ID_FR` varchar(100) NOT NULL,
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

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`ID_FR`, `Income_P`, `Fee_P`, `Copy_P`, `Interest_P`, `Interest_P11`, `Interest_P12`, `Interest_P13`, `Interest_P14`, `Interest_P21`, `Interest_P22`, `Interest_P23`, `Interest_P24`, `Interest_P25`, `Pay_P`, `Other_P`) VALUES
('1-1111-11111-1-11', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sent`
--

CREATE TABLE `sent` (
  `ID_FR` varchar(100) NOT NULL,
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

--
-- Dumping data for table `sent`
--

INSERT INTO `sent` (`ID_FR`, `Income_S`, `Fee_S`, `Copy_S`, `Interest_S`, `Interest_S11`, `Interest_S12`, `Interest_S13`, `Interest_S14`, `Interest_S21`, `Interest_S22`, `Interest_S23`, `Interest_S24`, `Interest_S25`, `Pay_S`, `Other_S`) VALUES
('1-1111-11111-1-11', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '1', '3', '3', '3', '3');

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
-- Dumping data for table `take`
--

INSERT INTO `take` (`ID_T`, `Name_T`, `Address_T`) VALUES
('1-1111-11111-1-11', 'ชื่อ นามสกุล', '82/52');

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
