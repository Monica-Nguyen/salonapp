-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 10:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salondatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `idservice` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `idstylist` int(11) DEFAULT NULL,
  `idreceptionist` int(11) DEFAULT NULL,
  `startdatetime` datetime NOT NULL,
  `enddatetime` datetime NOT NULL,
  `previousapt` date DEFAULT NULL,
  `previousservice` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`idservice`, `idclient`, `idstylist`, `idreceptionist`, `startdatetime`, `enddatetime`, `previousapt`, `previousservice`) VALUES
(1, 1, 1, 1, '2021-04-28 16:00:00', '2021-04-28 17:00:00', '2021-03-27', 'haircut'),
(2, 2, 2, 2, '2021-04-29 16:00:00', '2021-04-29 17:00:00', '2021-03-28', 'color'),
(3, 1, 1, 1, '2021-03-27 15:00:00', '2021-03-27 16:00:00', NULL, NULL),
(4, 2, 2, 2, '2021-03-28 08:00:00', '2021-03-28 10:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(11) NOT NULL,
  `salonno` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `postalcode` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `stateorprovince` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `salonno`, `phone`, `firstname`, `lastname`, `email`, `address`, `postalcode`, `city`, `stateorprovince`, `country`, `discount`) VALUES
(1, 1, '(403)234-2383', 'Karen', 'Johnson', 'karen@gmail.com', '124 Centre North Ave NE', 'T2L 5H7', 'Calgary', 'Alberta', 'Canada', '10%'),
(2, 2, '(702)809-2872', 'Sara', 'Evans', 'sara@gmail.com', '432 North Crescent NW', '88910', 'Las Vegas', 'Nevada', 'USA', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` int(11) NOT NULL,
  `idsalon` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `stateorprovince` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `idsalon`, `firstname`, `lastname`, `phone`, `email`, `address`, `postalcode`, `city`, `stateorprovince`, `country`) VALUES
(1, 1, 'Sam', 'Brown', '(403)444-2422', 'sam@gmail.com', '555 Circle Ave NE', 'T0P L3M', 'Calgary', 'Alberta', 'Canada'),
(2, 1, 'Crystal', 'Johnson', '(403)999-1234', 'crystal@hotmail.com', '3213 West Ave SW', 'T6M 4LM', 'Calgary', 'Alberta', 'Canada'),
(3, 2, 'Max', 'White', '(702)222-2314', 'max@yahoo.com', '48 Avenue SE', '88910', 'Las Vegas', 'Nevada', 'USA'),
(4, 2, 'Melissa', 'Brown', '(702)555-5555', 'melissa@gmail.com', '2039 Circle Centre SW', '89125', 'Las Vegas', 'Nevada', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipmentid` int(11) NOT NULL,
  `employeeno` int(11) DEFAULT NULL,
  `name` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipmentid`, `employeeno`, `name`) VALUES
(1, NULL, 'Schwarzkopf 1N Permanent Color'),
(2, NULL, 'Schwarzkopf 2N Permanent Color'),
(3, NULL, 'Schwarzkopf 3N Permanent Color'),
(4, NULL, 'Schwarzkopf 4N Permanent Color'),
(5, NULL, 'Schwarzkopf 5N Permanent Color'),
(6, NULL, 'Schwarzkopf 6N Permanent Color'),
(7, NULL, 'Schwarzkopf 7N Permanent Color'),
(8, NULL, 'Schwarzkopf 8N Permanent Color'),
(9, NULL, 'Schwarzkopf 9N Permanent Color'),
(10, NULL, 'Schwarzkopf 10N Permanent Color'),
(11, 2, 'CHI Straightener'),
(12, 2, 'CHI 1\'\' Curling Iron');

-- --------------------------------------------------------

--
-- Table structure for table `haircharacteristics`
--

CREATE TABLE `haircharacteristics` (
  `clientno` int(11) NOT NULL,
  `colorformula` varchar(2000) DEFAULT NULL,
  `length` varchar(2000) DEFAULT NULL,
  `texture` varchar(2000) DEFAULT NULL,
  `style` varchar(2000) DEFAULT NULL,
  `notes` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `haircharacteristics`
--

INSERT INTO `haircharacteristics` (`clientno`, `colorformula`, `length`, `texture`, `style`, `notes`) VALUES
(1, NULL, NULL, NULL, 'pixie', NULL),
(2, 'Schwarzkopf 4N Permanent Color', NULL, 'curly', 'long bob', 'Went to Mexico in January!');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `receptionistid` int(11) NOT NULL,
  `employeeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`receptionistid`, `employeeid`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `salon`
--

CREATE TABLE `salon` (
  `salonid` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `stateorprovince` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salon`
--

INSERT INTO `salon` (`salonid`, `phone`, `email`, `name`, `address`, `postalcode`, `city`, `stateorprovince`, `country`) VALUES
(1, '(403)111-1111', 'info@calgarysalon.com', 'CalgarySalon', '123 Address NW', 'T2L2L5', 'Calgary', 'Alberta', 'Canada'),
(2, '(702)222-2222', 'info@lasvegassalon.com', 'LasVegasSalon', '321 North Street NW', '88901', 'Las Vegas', 'Nevada', 'USA'),
(8, '403 189 1023', 'info@SimpleSalon.com', 'SimpleSalon', '2309 Circle Ave SE', 'TP0 1H9', 'Calgary', 'Alberta', 'Canada'),
(9, '403 190 1020', 'info@BarberShop.com', 'Barber Shop', '1230 Ave Centre St', 'T2N 2M2', 'Calgary', 'Alberta', 'Canada'),
(10, '403 199 1000', 'info@SalonWorld.com', 'SalonWorld', '2423 Downtown Ave', 'T2L 4M2', 'Calgary', 'Alberta', 'Canada'),
(11, '403 124 1391', 'info@APlace.com', 'APlace', '2323 Somewhere Ave', 'T2L 2M1', 'Calgary', 'Alberta', 'Canada'),
(15, '403 241 2828', 'sdfsd@g.com', 'dfg', 'sadfdsf', 'jkhjkh', 'hjkhj', 'hjkhjh', 'hkjhkj');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceid` int(11) NOT NULL,
  `haircut` char(1) DEFAULT NULL,
  `updo` char(1) DEFAULT NULL,
  `perm` char(1) DEFAULT NULL,
  `shampoo` char(1) DEFAULT NULL,
  `styling` char(1) DEFAULT NULL,
  `color` char(1) DEFAULT NULL,
  `cost` varchar(50) DEFAULT NULL,
  `equipmentno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceid`, `haircut`, `updo`, `perm`, `shampoo`, `styling`, `color`, `cost`, `equipmentno`) VALUES
(1, 'y', 'y', NULL, 'y', NULL, NULL, '$150', NULL),
(2, NULL, NULL, NULL, 'y', 'y', NULL, '$80', NULL),
(3, 'y', NULL, NULL, NULL, NULL, NULL, '$50', NULL),
(4, NULL, NULL, NULL, NULL, NULL, 'y', '$250', 4);

-- --------------------------------------------------------

--
-- Table structure for table `stylist`
--

CREATE TABLE `stylist` (
  `employeenumber` int(11) NOT NULL,
  `idhairstylist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stylist`
--

INSERT INTO `stylist` (`employeenumber`, `idhairstylist`) VALUES
(2, 1),
(4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD UNIQUE KEY `serviceid` (`idservice`),
  ADD KEY `idclient` (`idclient`),
  ADD KEY `idreceptionist` (`idreceptionist`),
  ADD KEY `idstylist` (`idstylist`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`),
  ADD UNIQUE KEY `clientid` (`clientid`),
  ADD KEY `salonno` (`salonno`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`),
  ADD UNIQUE KEY `employeeid` (`employeeid`),
  ADD KEY `idsalon` (`idsalon`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipmentid`),
  ADD UNIQUE KEY `equipmentid` (`equipmentid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `employeeno` (`employeeno`);

--
-- Indexes for table `haircharacteristics`
--
ALTER TABLE `haircharacteristics`
  ADD UNIQUE KEY `clientid` (`clientno`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`receptionistid`),
  ADD UNIQUE KEY `receptionistid` (`receptionistid`),
  ADD UNIQUE KEY `employeeid` (`employeeid`);

--
-- Indexes for table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`salonid`),
  ADD UNIQUE KEY `salonid` (`salonid`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceid`),
  ADD UNIQUE KEY `serviceid` (`serviceid`),
  ADD KEY `equipmentno` (`equipmentno`);

--
-- Indexes for table `stylist`
--
ALTER TABLE `stylist`
  ADD PRIMARY KEY (`idhairstylist`),
  ADD UNIQUE KEY `employeeid` (`employeenumber`),
  ADD UNIQUE KEY `hairstylistid` (`idhairstylist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `receptionistid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salon`
--
ALTER TABLE `salon`
  MODIFY `salonid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stylist`
--
ALTER TABLE `stylist`
  MODIFY `idhairstylist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `idclient` FOREIGN KEY (`idclient`) REFERENCES `client` (`clientid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idreceptionist` FOREIGN KEY (`idreceptionist`) REFERENCES `receptionist` (`receptionistid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idservice` FOREIGN KEY (`idservice`) REFERENCES `service` (`serviceid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idstylist` FOREIGN KEY (`idstylist`) REFERENCES `stylist` (`idhairstylist`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `salonno` FOREIGN KEY (`salonno`) REFERENCES `salon` (`salonid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `idsalon` FOREIGN KEY (`idsalon`) REFERENCES `salon` (`salonid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `employeeno` FOREIGN KEY (`employeeno`) REFERENCES `employee` (`employeeid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `haircharacteristics`
--
ALTER TABLE `haircharacteristics`
  ADD CONSTRAINT `clientno` FOREIGN KEY (`clientno`) REFERENCES `client` (`clientid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD CONSTRAINT `employeeid` FOREIGN KEY (`employeeid`) REFERENCES `employee` (`employeeid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `equipmentno` FOREIGN KEY (`equipmentno`) REFERENCES `equipment` (`equipmentid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stylist`
--
ALTER TABLE `stylist`
  ADD CONSTRAINT `employeenumber` FOREIGN KEY (`employeenumber`) REFERENCES `employee` (`employeeid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
