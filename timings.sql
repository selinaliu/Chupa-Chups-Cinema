-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2020 at 10:22 PM
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
  `location` varchar(40) NOT NULL,
  `timing` time NOT NULL,
  `seats` int(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`ID`, `movieID`, `location`, `timing`, `seats`) VALUES
(1, 1, 'Woodlands', '10:00:00', 20),
(2, 1, 'Woodlands', '14:00:00', 20),
(3, 1, 'Woodlands', '18:00:00', 20),
(5, 1, 'Orchard', '11:00:00', 20),
(6, 1, 'Orchard', '15:00:00', 20),
(7, 1, 'Orchard', '19:00:00', 20),
(8, 1, 'Jurong East', '12:00:00', 20),
(9, 1, 'Jurong East', '16:00:00', 20),
(10, 1, 'Jurong East', '20:00:00', 20),
(11, 2, 'Woodlands', '13:00:00', 20),
(12, 2, 'Woodlands', '17:00:00', 20),
(13, 2, 'Woodlands', '21:00:00', 20),
(14, 2, 'Orchard', '14:00:00', 20),
(15, 2, 'Orchard', '18:00:00', 20),
(16, 2, 'Orchard', '22:00:00', 20),
(17, 2, 'Jurong East', '15:00:00', 20),
(18, 2, 'Jurong East', '19:00:00', 20),
(19, 2, 'Jurong East', '23:00:00', 20),
(20, 3, 'Woodlands', '16:00:00', 20),
(21, 3, 'Woodlands', '20:00:00', 20),
(22, 3, 'Woodlands', '24:00:00', 20),
(23, 3, 'Orchard', '10:00:00', 20),
(24, 3, 'Orchard', '14:00:00', 20),
(25, 3, 'Orchard', '18:00:00', 20),
(26, 3, 'Jurong East', '11:00:00', 20),
(27, 3, 'Jurong East', '15:00:00', 20),
(28, 3, 'Jurong East', '19:00:00', 20),
(29, 4, 'Woodlands', '12:00:00', 20),
(30, 4, 'Woodlands', '16:00:00', 20),
(31, 4, 'Woodlands', '20:00:00', 20),
(32, 4, 'Orchard', '13:00:00', 20),
(33, 4, 'Orchard', '17:00:00', 20),
(34, 4, 'Orchard', '21:00:00', 20),
(35, 4, 'Jurong East', '14:00:00', 20),
(36, 4, 'Jurong East', '18:00:00', 20),
(37, 4, 'Jurong East', '22:00:00', 20),
(38, 5, 'Woodlands', '15:00:00', 20),
(39, 5, 'Woodlands', '19:00:00', 20),
(40, 5, 'Woodlands', '23:00:00', 20),
(41, 5, 'Orchard', '16:00:00', 20),
(42, 5, 'Orchard', '20:00:00', 20),
(43, 5, 'Orchard', '24:00:00', 20),
(44, 5, 'Jurong East', '10:00:00', 20),
(45, 5, 'Jurong East', '14:00:00', 20),
(46, 5, 'Jurong East', '18:00:00', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
