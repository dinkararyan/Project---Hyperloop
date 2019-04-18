-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 18, 2019 at 07:13 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(1000) CHARACTER SET macroman COLLATE macroman_bin NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `Contact` (`Contact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Contact`, `Email`) VALUES
('Admin123', 'Admin123', '7412589634', 'Admin@admin.co.in');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `username` varchar(30) NOT NULL,
  `busno` varchar(30) NOT NULL,
  `bookid` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`bookid`),
  KEY `username` (`username`),
  KEY `busno` (`busno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`username`, `busno`, `bookid`, `name`, `phone`, `email`) VALUES
('User123', 'AC-101', '1123234', 'Jon Snow', '7412546893', 'Jonsnow@nighwatch.com'),
('User123', 'AC-112', '81027360', 'Tyrion', '7412587988', 'Tyrion@feb.com');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

DROP TABLE IF EXISTS `buses`;
CREATE TABLE IF NOT EXISTS `buses` (
  `busno` varchar(20) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `arrival_time` time NOT NULL,
  `departure_time` time NOT NULL,
  `fare` decimal(10,0) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '65',
  PRIMARY KEY (`busno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`busno`, `source`, `destination`, `arrival_time`, `departure_time`, `fare`, `rating`) VALUES
('AC-101', 'Delhi', 'Bhopal', '07:30:00', '08:00:00', '2500', 80),
('AC-102', 'Delhi', 'Bhopal', '10:00:00', '10:15:00', '2000', 92),
('AC-103', 'Delhi', 'Bhopal', '12:00:00', '12:15:00', '2200', 50),
('NAC-901', 'Delhi', 'Bhopal', '14:00:00', '14:15:00', '1500', 30),
('NAC-902', 'Delhi', 'Bhopal', '16:30:00', '16:45:00', '1200', 66),
('AC-104', 'Delhi', 'Pune', '00:00:00', '00:10:00', '3000', 39),
('AC-105', 'Delhi', 'Pune', '07:00:00', '07:15:00', '3200', 63),
('AC-106', 'Delhi', 'Pune', '13:15:00', '13:30:00', '2800', 80),
('NAC-904', 'Delhi', 'Pune', '20:00:00', '20:20:00', '2200', 55),
('AC-107', 'Delhi', 'Mumbai', '04:00:00', '04:15:00', '3500', 79),
('AC-108', 'Delhi', 'Mumbai', '07:00:00', '07:20:00', '4000', 47),
('AC-201', 'Mumbai', 'Pune', '10:00:00', '10:10:00', '1000', 74),
('AC-202', 'Mumbai', 'Pune', '12:00:00', '12:15:00', '800', 47),
('NAC-801', 'Mumbai', 'Pune', '07:00:00', '07:10:00', '400', 71),
('NAC-802', 'Mumbai', 'Pune', '09:30:00', '09:45:00', '400', 48),
('NAC-803', 'Mumbai', 'Pune', '11:50:00', '12:00:00', '400', 77),
('NAC-804', 'Mumbai', 'Pune', '16:35:00', '16:45:00', '500', 15),
('AC-203', 'Mumbai', 'Hyderabad', '11:25:00', '11:35:00', '1500', 55),
('AC-204', 'Mumbai', 'Hyderabad', '13:15:00', '13:30:00', '1700', 83),
('AC-205', 'Mumbai', 'Bhopal', '20:00:00', '20:10:00', '1250', 19),
('AC-206', 'Mumbai', 'Bhopal', '13:00:00', '13:10:00', '1000', 82),
('AC-301', 'Bangalore', 'Chennai', '05:05:00', '05:15:00', '1175', 91),
('AC-302', 'Bangalore', 'Chennai', '15:15:00', '15:25:00', '1250', 27),
('NAC-701', 'Bangalore', 'Chennai', '12:35:00', '12:50:00', '800', 58),
('NAC-702', 'Bangalore', 'Chennai', '06:00:00', '06:15:00', '600', 75),
('NAC-703', 'Bangalore', 'Chennai', '20:20:00', '20:35:00', '500', 77),
('AC-303', 'Bangalore', 'Hyderabad', '18:00:00', '18:10:00', '1400', 37),
('AC-304', 'Bangalore', 'Hyderabad', '00:00:00', '00:15:00', '1699', 67),
('AC-305', 'Bangalore', 'Bhopal', '12:10:00', '12:30:00', '2500', 69),
('AC-306', 'Bangalore', 'Pune', '11:15:00', '11:30:00', '2500', 14),
('AC-307', 'Bangalore', 'Pune', '14:15:00', '14:30:00', '2425', 75),
('AC-109', 'Delhi', 'Hyderabad', '07:00:00', '07:15:00', '3250', 85),
('AC-110', 'Delhi', 'Hyderabad', '09:25:00', '09:40:00', '3300', 65),
('AC-111', 'Delhi', 'Hyderabad', '13:50:00', '14:00:00', '2899', 45),
('NAC-905', 'Delhi', 'Hyderabad', '11:00:00', '11:20:00', '1600', 95),
('NAC-906', 'Delhi', 'Hyderabad', '01:00:00', '01:20:00', '1400', 45),
('NAC-907', 'Delhi', 'Mumbai', '05:00:00', '05:15:00', '1100', 82),
('NAC-908', 'Delhi', 'Mumbai', '12:35:00', '12:45:00', '1550', 88),
('NAC-909', 'Delhi', 'Mumbai', '13:00:00', '13:15:00', '1425', 75),
('AC-112', 'Delhi', 'Bangalore', '02:15:00', '02:25:00', '3599', 80),
('AC-113', 'Delhi', 'Bangalore', '05:00:00', '05:15:00', '3399', 65),
('AC-114', 'Delhi', 'Bangalore', '18:24:00', '18:40:00', '3799', 94),
('NAC-910', 'Delhi', 'Bangalore', '17:30:00', '17:45:00', '2500', 65),
('NAC-112', 'Delhi', 'Bangalore', '20:30:00', '20:45:00', '2399', 65),
('AC-207', 'Mumbai', 'Bhopal', '10:30:00', '10:45:00', '1100', 65),
('AC-208', 'Mumbai', 'Bhopal', '16:50:00', '17:00:00', '1200', 55),
('NAC-805', 'Mumbai', 'Bhopal', '07:20:00', '07:35:00', '800', 45),
('NAC-806', 'Mumbai', 'Bhopal', '12:00:00', '12:20:00', '900', 85),
('AC-209', 'Mumbai', 'Hyderabad', '16:00:00', '16:10:00', '1250', 77),
('AC-210', 'Mumbai', 'Hyderabad', '18:10:00', '18:30:00', '1200', 70),
('NAC-807', 'Mumbai', 'Hyderabad', '20:00:00', '20:15:00', '800', 88),
('NAC-808', 'Mumbai', 'Hyderabad', '18:25:00', '18:35:00', '900', 60),
('AC-211', 'Mumbai', 'Delhi', '08:00:00', '08:20:00', '1655', 87),
('AC-212', 'Mumbai', 'Delhi', '03:00:00', '03:25:00', '1700', 81),
('AC-213', 'Mumbai', 'Delhi', '04:20:00', '04:35:00', '1480', 72),
('NAC-809', 'Mumbai', 'Delhi', '16:00:00', '16:15:00', '1325', 65),
('NAC-810', 'Mumbai', 'Delhi', '10:15:00', '10:30:00', '1100', 85),
('AC-214', 'Mumbai', 'Bangalore', '04:30:00', '04:40:00', '1155', 80),
('AC-215', 'Mumbai', 'Bangalore', '15:00:00', '15:15:00', '1400', 65),
('AC-216', 'Mumbai', 'Bangalore', '01:10:00', '01:20:00', '1600', 87),
('NAC-811', 'Mumbai', 'Bangalore', '20:30:00', '20:45:00', '900', 92),
('AC-217', 'Mumbai', 'Chennai', '17:00:00', '17:20:00', '1900', 78),
('AC-218', 'Mumbai', 'Chennai', '14:00:00', '14:20:00', '2050', 65),
('NAC-812', 'Mumbai', 'Chennai', '16:50:00', '17:10:00', '2000', 83),
('NAC-813', 'Mumbai', 'Chennai', '06:21:00', '06:30:00', '1200', 76),
('AC-308', 'Bangalore', 'Hyderabad', '02:12:00', '02:30:00', '1250', 85),
('AC-309', 'Bangalore', 'Hyderabad', '09:15:00', '09:30:00', '1300', 43),
('NAC-704', 'Bangalore', 'Hyderabad', '13:00:00', '13:25:00', '900', 88),
('NAC-705', 'Bangalore', 'Hyderabad', '16:00:00', '16:15:00', '850', 72),
('AC-310', 'Bangalore', 'Bhopal', '04:00:00', '04:10:00', '3300', 65),
('AC-311', 'Bangalore', 'Bhopal', '14:00:00', '14:15:00', '3100', 65),
('NAC-706', 'Bangalore', 'Bhopal', '09:00:00', '09:20:00', '2250', 93),
('NAC-708', 'Bangalore', 'Bhopal', '14:35:00', '14:45:00', '2000', 65),
('AC-312', 'Bangalore', 'Pune', '18:00:00', '18:20:00', '1900', 65),
('NAC-709', 'Bangalore', 'Pune', '15:10:00', '15:25:00', '1200', 45),
('NAC-710', 'Bangalore', 'Pune', '19:00:00', '19:20:00', '1000', 67),
('AC-313', 'Bangalore', 'Delhi', '18:20:00', '18:30:00', '4000', 75),
('AC-314', 'Bangalore', 'Delhi', '11:20:00', '11:30:00', '3800', 83),
('AC-315', 'Bangalore', 'Delhi', '07:50:00', '08:05:00', '3750', 55),
('NAC-711', 'Bangalore', 'Delhi', '05:20:00', '05:35:00', '2425', 88),
('AC-316', 'Bangalore', 'Mumbai', '07:20:00', '07:35:00', '1700', 78),
('AC-317', 'Bangalore', 'Mumbai', '10:50:00', '11:15:00', '1600', 50),
('AC-318', 'Bangalore', 'Mumbai', '15:00:00', '15:15:00', '1500', 68),
('NAC-712', 'Bangalore', 'Mumbai', '06:10:00', '06:25:00', '1100', 70),
('NAC-713', 'Bangalore', 'Mumbai', '20:00:00', '20:15:00', '980', 78),
('AC-401', 'Bhopal', 'Bangalore', '06:15:00', '06:30:00', '3200', 78),
('AC-402', 'Bhopal', 'Bangalore', '11:35:00', '11:50:00', '3150', 87),
('NAC-1001', 'Bhopal', 'Bangalore', '20:00:00', '20:20:00', '1900', 45),
('AC-404', 'Bhopal', 'Mumbai', '10:10:00', '10:30:00', '1400', 94),
('AC-405', 'Bhopal', 'Mumbai', '02:00:00', '02:15:00', '1800', 88),
('NAC-1002', 'Bhopal', 'Mumbai', '18:30:00', '18:45:00', '880', 78),
('NAC-1003', 'Bhopal', 'Mumbai', '14:25:00', '14:35:00', '970', 62),
('AC-406', 'Bhopal', 'Pune', '13:25:00', '13:40:00', '750', 84),
('AC-407', 'Bhopal', 'Pune', '04:10:00', '04:25:00', '685', 81),
('NAC-1004', 'Bhopal', 'Pune', '07:10:00', '07:25:00', '550', 75),
('AC-408', 'Bhopal', 'Delhi', '06:43:00', '06:53:00', '1200', 55),
('AC-409', 'Bhopal', 'Delhi', '20:10:00', '20:25:00', '1195', 85),
('AC-410', 'Bhopal', 'Delhi', '01:10:00', '01:25:00', '1145', 92),
('AC-501', 'Pune', 'Mumbai', '08:15:00', '08:30:00', '770', 87),
('AC-502', 'Pune', 'Mumbai', '11:30:00', '12:10:00', '600', 70),
('NAC-1101', 'Pune', 'Mumbai', '15:15:00', '15:35:00', '300', 85),
('AC-503', 'Pune', 'Bhopal', '11:11:00', '11:22:00', '1100', 75),
('NAC-1103', 'Pune', 'Bhopal', '14:15:00', '14:30:00', '600', 80),
('AC-504', 'Pune', 'Delhi', '09:15:00', '09:25:00', '1400', 88),
('AC-505', 'Pune', 'Delhi', '12:10:00', '12:30:00', '1200', 59),
('AC-506', 'Pune', 'Delhi', '18:30:00', '18:50:00', '1100', 77),
('NAC-1104', 'Pune', 'Delhi', '20:20:00', '20:35:00', '700', 52),
('NAC-1105', 'Pune', 'Delhi', '13:15:00', '13:25:00', '600', 68),
('AC-601', 'Chennai', 'Bangalore', '01:05:00', '01:20:00', '750', 84);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Country` varchar(15) NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `Username` (`Username`,`Phone`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Email`, `Phone`, `Country`) VALUES
('User123', 'User123', 'user@user.com', '7894563578', 'India');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
