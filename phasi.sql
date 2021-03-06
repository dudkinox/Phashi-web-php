-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 05:46 PM
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
  `No` int(11) NOT NULL,
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

INSERT INTO `date` (`No`, `ID_FR`, `Income_D`, `Fee_D`, `Copy_D`, `Interest_D`, `Interest_D11`, `Interest_D12`, `Interest_D13`, `Interest_D14`, `Interest_D21`, `Interest_D22`, `Interest_D23`, `Interest_D24`, `Interest_D25`, `Pay_D`, `Other_D`) VALUES
(1, '1-1111-11111-1-11', 'วัน/เดือน หรือปีภาษี ที่จ่าย', '', '', '', '', '', '', '', '', '', '', '', '', '', 'วัน/เดือน หรือปีภาษี ที่จ่าย'),
(2, '1-1111-11111-1-11', 'วัน/เดือน หรือปีภาษี ที่จ่าย', '', '', '', '', '', '', '', '', '', '', '', '', '', 'วัน/เดือน หรือปีภาษี ที่จ่าย');

-- --------------------------------------------------------

--
-- Table structure for table `give`
--

CREATE TABLE `give` (
  `No` int(11) NOT NULL,
  `ID_G` varchar(100) NOT NULL,
  `Name_G` varchar(100) NOT NULL,
  `Address_G` varchar(100) NOT NULL,
  `No_G` varchar(100) NOT NULL,
  `type_G` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `give`
--

INSERT INTO `give` (`No`, `ID_G`, `Name_G`, `Address_G`, `No_G`, `type_G`) VALUES
(1, '1-1111-11111-1-11', 'ชื่อ นามสกุล ที่จ่าย', '64/39', '1', 'ภ.ง.ด.1ก'),
(2, '1-1111-11111-1-11', 'ชื่อ นามสกุล ที่จ่าย', '64/39', '1', 'ภ.ง.ด.1ก');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `Number` int(11) NOT NULL,
  `ID_FR` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `No` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`Number`, `ID_FR`, `ID`, `No`, `image`) VALUES
(1, '1-1111-11111-1-11', '1', '1', '../uploads/IMG20181017112338 copy.jpg'),
(2, '1-1111-11111-1-11', '2', '2', '../uploads/IMG20181017112339 copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `No` int(11) NOT NULL,
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

INSERT INTO `other` (`No`, `ID_FR`, `Interest`, `Interest_other`, `Other`, `Sum_pay`, `Sum_sent`, `Sum_vat`, `School`, `Social`, `Life`, `Pay`, `Pay_other`, `Name`, `Date`) VALUES
(1, '1-1111-11111-1-11', '', '', '', '100', '1000', '', '', '', '', 'อื่นๆ', 'อื่นๆ', 'ชื่อสกุลผู้จ่ายเงิน', '2021-12-03'),
(2, '1-1111-11111-1-11', '', '', '', '1', '2000', 'รวมเงินภาษีที่หักส่ง', '12', '', '', 'อื่นๆ', 'อื่นๆ', 'ชื่อสกุลผู้จ่ายเงิน', '2021-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `No` int(11) NOT NULL,
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

INSERT INTO `pay` (`No`, `ID_FR`, `Income_P`, `Fee_P`, `Copy_P`, `Interest_P`, `Interest_P11`, `Interest_P12`, `Interest_P13`, `Interest_P14`, `Interest_P21`, `Interest_P22`, `Interest_P23`, `Interest_P24`, `Interest_P25`, `Pay_P`, `Other_P`) VALUES
(1, '1-1111-11111-1-11', 'จำนวนเงินที่จ่าย', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(2, '1-1111-11111-1-11', 'จำนวนเงินที่จ่าย', '', '', '', '', '', '', '', '', '', '', '', '', '', 'จำนวนเงินที่จ่าย');

-- --------------------------------------------------------

--
-- Table structure for table `sent`
--

CREATE TABLE `sent` (
  `No` int(11) NOT NULL,
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

INSERT INTO `sent` (`No`, `ID_FR`, `Income_S`, `Fee_S`, `Copy_S`, `Interest_S`, `Interest_S11`, `Interest_S12`, `Interest_S13`, `Interest_S14`, `Interest_S21`, `Interest_S22`, `Interest_S23`, `Interest_S24`, `Interest_S25`, `Pay_S`, `Other_S`) VALUES
(1, '1-1111-11111-1-11', 'ภาษีที่หักและนำส่งไว้', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ภาษีที่หักและนำส่งไว้'),
(2, '1-1111-11111-1-11', 'ภาษีที่หักและนำส่งไว้', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ภาษีที่หักและนำส่งไว้');

-- --------------------------------------------------------

--
-- Table structure for table `take`
--

CREATE TABLE `take` (
  `No` int(11) NOT NULL,
  `ID_T` varchar(100) NOT NULL,
  `Name_T` varchar(100) NOT NULL,
  `Address_T` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `take`
--

INSERT INTO `take` (`No`, `ID_T`, `Name_T`, `Address_T`) VALUES
(1, '1-1111-11111-1-11', 'ชื่อ นามสกุล', '82/52'),
(2, '1-1111-11111-1-11', 'ชื่อ นามสกุล', '82/52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cal`
--
ALTER TABLE `cal`
  ADD PRIMARY KEY (`ID_FR`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `give`
--
ALTER TABLE `give`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `head`
--
ALTER TABLE `head`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `sent`
--
ALTER TABLE `sent`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `take`
--
ALTER TABLE `take`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `give`
--
ALTER TABLE `give`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `head`
--
ALTER TABLE `head`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sent`
--
ALTER TABLE `sent`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `take`
--
ALTER TABLE `take`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
