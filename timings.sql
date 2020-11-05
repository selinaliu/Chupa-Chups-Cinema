-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 06:34 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f33ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `timings`
--

CREATE TABLE IF NOT EXISTS `timings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `movieID` int(40) NOT NULL,
  `dateID` int(11) NOT NULL,
  `location` varchar(40) NOT NULL,
  `timing` time NOT NULL,
  `seats` int(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`ID`, `movieID`, `dateID`, `location`, `timing`, `seats`) VALUES
(1, 1, 0, 'Woodlands', '10:00:00', 20),
(2, 1, 0, 'Woodlands', '14:00:00', 20),
(3, 1, 0, 'Woodlands', '18:00:00', 20),
(5, 1, 0, 'Orchard', '11:00:00', 20),
(6, 1, 0, 'Orchard', '15:00:00', 20),
(7, 1, 0, 'Orchard', '19:00:00', 20),
(8, 1, 0, 'Jurong East', '12:00:00', 20),
(9, 1, 0, 'Jurong East', '16:00:00', 20),
(10, 1, 0, 'Jurong East', '20:00:00', 20),
(11, 2, 0, 'Woodlands', '13:00:00', 20),
(12, 2, 0, 'Woodlands', '17:00:00', 20),
(13, 2, 0, 'Woodlands', '21:00:00', 20),
(14, 2, 0, 'Orchard', '14:00:00', 20),
(15, 2, 0, 'Orchard', '18:00:00', 20),
(16, 2, 0, 'Orchard', '22:00:00', 20),
(17, 2, 0, 'Jurong East', '15:00:00', 20),
(18, 2, 0, 'Jurong East', '19:00:00', 20),
(19, 2, 0, 'Jurong East', '23:00:00', 20),
(20, 3, 0, 'Woodlands', '16:00:00', 20),
(21, 3, 0, 'Woodlands', '20:00:00', 20),
(22, 3, 0, 'Woodlands', '24:00:00', 20),
(23, 3, 0, 'Orchard', '10:00:00', 20),
(24, 3, 0, 'Orchard', '14:00:00', 20),
(25, 3, 0, 'Orchard', '18:00:00', 20),
(26, 3, 0, 'Jurong East', '11:00:00', 20),
(27, 3, 0, 'Jurong East', '15:00:00', 20),
(28, 3, 0, 'Jurong East', '19:00:00', 20),
(29, 4, 0, 'Woodlands', '12:00:00', 20),
(30, 4, 0, 'Woodlands', '16:00:00', 20),
(31, 4, 0, 'Woodlands', '20:00:00', 20),
(32, 4, 0, 'Orchard', '13:00:00', 20),
(33, 4, 0, 'Orchard', '17:00:00', 20),
(34, 4, 0, 'Orchard', '21:00:00', 20),
(35, 4, 0, 'Jurong East', '14:00:00', 20),
(36, 4, 0, 'Jurong East', '18:00:00', 20),
(37, 4, 0, 'Jurong East', '22:00:00', 20),
(38, 5, 0, 'Woodlands', '15:00:00', 20),
(39, 5, 0, 'Woodlands', '19:00:00', 20),
(40, 5, 0, 'Woodlands', '23:00:00', 20),
(41, 5, 0, 'Orchard', '16:00:00', 20),
(42, 5, 0, 'Orchard', '20:00:00', 20),
(43, 5, 0, 'Orchard', '24:00:00', 20),
(44, 5, 0, 'Jurong East', '10:00:00', 20),
(45, 5, 0, 'Jurong East', '14:00:00', 20),
(46, 5, 0, 'Jurong East', '18:00:00', 20),
(47, 1, 1, 'Woodlands', '11:00:00', 20),
(48, 1, 1, 'Woodlands', '15:00:00', 20),
(49, 1, 1, 'Woodlands', '19:00:00', 20),
(50, 1, 1, 'Orchard', '12:00:00', 20),
(51, 1, 1, 'Orchard', '16:00:00', 20),
(52, 1, 1, 'Orchard', '20:00:00', 20),
(53, 1, 1, 'Jurong East', '13:00:00', 20),
(54, 1, 1, 'Jurong East', '17:00:00', 20),
(55, 1, 1, 'Jurong East', '21:00:00', 20),
(56, 2, 1, 'Woodlands', '12:00:00', 20),
(57, 2, 1, 'Woodlands', '16:00:00', 20),
(58, 2, 1, 'Woodlands', '20:00:00', 20),
(59, 2, 1, 'Orchard', '13:30:00', 20),
(60, 2, 1, 'Orchard', '17:30:00', 20),
(61, 2, 1, 'Orchard', '21:30:00', 20),
(62, 2, 1, 'Jurong East', '14:00:00', 20),
(63, 2, 1, 'Jurong East', '18:00:00', 20),
(64, 2, 1, 'Jurong East', '22:00:00', 20),
(65, 3, 1, 'Woodlands', '15:40:00', 20),
(66, 3, 1, 'Woodlands', '19:40:00', 20),
(67, 3, 1, 'Woodlands', '23:40:00', 20),
(68, 3, 1, 'Orchard', '16:30:00', 20),
(69, 3, 1, 'Orchard', '20:30:00', 20),
(70, 3, 1, 'Orchard', '24:30:00', 20),
(71, 3, 1, 'Jurong East', '10:20:00', 20),
(72, 3, 1, 'Jurong East', '14:20:00', 20),
(73, 3, 1, 'Jurong East', '18:20:00', 20),
(74, 4, 1, 'Woodlands', '11:00:00', 20),
(75, 4, 1, 'Woodlands', '15:00:00', 20),
(76, 4, 1, 'Woodlands', '19:00:00', 20),
(77, 4, 1, 'Orchard', '12:30:00', 20),
(78, 4, 1, 'Orchard', '16:30:00', 20),
(79, 4, 1, 'Orchard', '20:30:00', 20),
(80, 4, 1, 'Jurong East', '13:00:00', 20),
(81, 4, 1, 'Jurong East', '17:00:00', 20),
(82, 4, 1, 'Jurong East', '21:00:00', 20),
(83, 5, 1, 'Woodlands', '14:10:00', 20),
(84, 5, 1, 'Woodlands', '18:10:00', 20),
(85, 5, 1, 'Woodlands', '22:10:00', 20),
(86, 5, 1, 'Orchard', '15:00:00', 20),
(87, 5, 1, 'Orchard', '19:00:00', 20),
(88, 5, 1, 'Orchard', '23:00:00', 20),
(89, 5, 1, 'Jurong East', '16:10:00', 20),
(90, 5, 1, 'Jurong East', '20:10:00', 20),
(91, 5, 1, 'Jurong East', '24:00:00', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
