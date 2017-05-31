-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2016 at 10:12 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qualitycarwash`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Email` varchar(30) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('Navneet', 30301127),
('nav1668@yahoo.com', 30301127);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `BookingID` int(11) NOT NULL AUTO_INCREMENT,
  `ContactPerson` int(11) NOT NULL,
  `ContactEmail` varchar(20) NOT NULL,
  `Time` time NOT NULL,
  `ServiceName` varchar(18) NOT NULL,
  `Date` date NOT NULL,
  `status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`BookingID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `ContactPerson`, `ContactEmail`, `Time`, `ServiceName`, `Date`, `status`) VALUES
(8, 0, 'tim.user@com', '17:00:00', 'Deluxe', '2016-08-19', 'confirmed'),
(9, 0, 'tim@user.com', '16:00:00', 'Deluxe', '2016-09-30', 'confirmed'),
(10, 0, 'tim@user.com', '16:00:00', 'Deluxe', '2016-09-30', 'confirmed'),
(11, 0, 'tim@user.com', '13:30:00', 'Deluxe', '2016-09-22', 'confirmed'),
(12, 0, 'tom@user.com', '16:30:00', 'Inside Out', '2016-09-21', 'confirmed'),
(13, 0, 'tim@user.com', '14:30:00', 'Full Detail', '2016-09-23', 'confirmed'),
(14, 0, 'tim.user@com', '17:00:00', 'Inside Out', '2016-09-29', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `Subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `ContactNumber`, `Subject`) VALUES
('Navneet', 'nav1668@yahoo.com', 7437364, 'enquiry about special offer'),
('hasan', 'hasanejaz9@gmail.com', 54676778, 'good service'),
('hasan', 'hasanejaz9@gmail.com', 65657867, 'good service'),
('kjkj', 'jagdeepsinghjhinjer.1@gmail.co', 0, 'jkkj'),
('hasan', 'hasanejaz9@gmail.com', 436657, 'good service'),
('greg', 'greg11@yahoo.com', 457788, 'good service');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `sid` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` int(12) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sid`, `name`, `description`, `price`) VALUES
(0, 'Full Detail', '\r\nIncludes  \r\n•	Deluxe\r\n•	Engine wash\r\n•	Clay bar treatment\r\n\r\n Sedan                                                          - from $249\r\n SUV / Wagons                                           -  from $299\r\n 7-seater / 4WDS                                       -  from $349\r\n\r\n', 249),
(1, 'Hand Wash', '  •	Outside wash and dry\r\n•	Outside windows cleaned\r\n•	Door seals\r\n•	Wheels cleaned and glossed\r\n\r\nSedan                                                            - from $20\r\nSUV / Wagons                                             - from $25\r\n7-seater / 4WDS                                         - from $30\r\n\r\n $5 Upgrade-Protective wax water roll off and beading to minimise water marks\r\n \r\n', 20),
(2, 'QUALITY WASH', 'Includes\r\n•	Hand Wash \r\n•	Inside Window Cleaned\r\n•	Door Seal\r\n•	Wheels cleaned and glossed\r\n•	Vacuum\r\n•	Inside Dusted\r\n\r\n Sedan                                                            - from $40\r\n SUV / Wagons                                             -  from $50\r\n 7-seater / 4WDS                                         -  from $60\r\n\r\n  $10 Upgrade-interior conditioning- A more thorough clean on the dash, console and trims\r\nWith a damp chamois and micro fibre\r\n\r\n', 40),
(3, 'QUALITY INSIDE OUT', 'Includes\r\n•	Inside Outside\r\n•	Interior conditioning (dash, console and trims)\r\n•	Hand wax and polishing(lasting protection with improved reflectivity)\r\n\r\n\r\n Sedan                                                          - from $40\r\n SUV / Wagons                                           -  from $50\r\n 7-seater / 4WDS                                       -  from $60\r\n\r\n\r\n$20 Upgrade- Exterior Conditioning Remove embedded impurities to clean, soothe and restore the paint\r\n', 60),
(4, 'QUALITY INTERIOR DET', 'Includes\r\n•	Quality Deluxe\r\n•	Seats shampooed / leather conditioned\r\n•	Floor and mats shampooed\r\n•	Detailed cleaning of all upholster, Door trims and dash console\r\n\r\n\r\n Sedan                                                          - from $199\r\n SUV / Wagons                                           -  from $249\r\n 7-seater / 4WDS                                       -  from $299\r\n', 199),
(5, 'Full Detail', 'Includes  \r\n•	Deluxe\r\n•	Engine wash\r\n•	Clay bar treatment\r\n\r\n Sedan                                                          - from $249\r\n SUV / Wagons                                           -  from $299\r\n 7-seater / 4WDS                                       -  from $349\r\n', 249),
(6, 'Extras', 'Hand Wax & Polish                                                                              $25\r\nFloors Shampoo                                                                                   $75\r\nMats Shampoo                                                                                     $25\r\nEngine Wash                                                                                         $25\r\nClay Bar                                                                                                  $25\r\nSeats Shampoo                                                                                     $75\r\nLeather Clean and Condition                                                             $75\r\nProtective Wax                                                                                     $5\r\nRoof Clean                                                                                             $35\r\nMetal Polish                                                                                          $35\r\nCut and Polish                                                                                       $199\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `ServiceName` varchar(30) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `ServicesID` int(11) NOT NULL,
  `RegoNo` int(11) NOT NULL,
  PRIMARY KEY (`ServicesID`),
  UNIQUE KEY `CustomerID` (`CustomerID`),
  KEY `RegoNo` (`RegoNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE IF NOT EXISTS `tblcustomer` (
  `Name` varchar(40) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `TelephoneNumber` varchar(16) NOT NULL,
  `PostCode` int(11) NOT NULL,
  `CustID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`CustID`),
  UNIQUE KEY `CustID` (`CustID`),
  UNIQUE KEY `key` (`CustID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`Name`, `Password`, `Email`, `TelephoneNumber`, `PostCode`, `CustID`) VALUES
('Tim', 'b15d47e99831ee63e3f47cf3d4478e9a', 'tim@user.com', '3123412', 5000, 12),
('Navneet ', '5f4dcc3b5aa765d61d8327deb882cf99', 'nav1668@yahoo.com', '12345', 5085, 13),
('hasan', '5f4dcc3b5aa765d61d8327deb882cf99', 'hasanejaz9.gmail.com', '12345', 789, 14),
('mohit', 'd8052f9e09a17e6907629e76bbd261cc', 'mohit123.gmail.com', '123456', 98, 15),
('nav', 'e2a1715ac00b5e872a2191fb13f69a69', 'nav1668@yahoo.com', '876', 223, 16),
('tom', '34b7da764b21d298ef307d04d8152dc5', 'tom@user.com', '355647568', 677, 17);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `CustName` varchar(30) NOT NULL,
  `CustID` int(11) NOT NULL,
  `RegoNum` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `YearOfManufacturing` year(4) NOT NULL,
  PRIMARY KEY (`RegoNum`),
  KEY `CustID` (`CustID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `tblcustomer` (`CustID`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`RegoNum`) REFERENCES `services` (`RegoNo`),
  ADD CONSTRAINT `vehicle_ibfk_2` FOREIGN KEY (`CustID`) REFERENCES `tblcustomer` (`CustID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
