-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2020 at 04:39 PM
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
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `movie` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(40) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `qty` int(20) NOT NULL,
  `price` float(6,2) NOT NULL,
  `user` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=160 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `movie`, `date`, `time`, `location`, `seat`, `qty`, `price`, `user`, `email`, `num`) VALUES
(156, 'Mulan', '2020-11-02', '14:00:00', 'Woodlands', 'A-4', 1, 13.50, 'Selina Liu', 'selinaliu1997.sl@gmail.com', 92998459),
(157, 'Mulan', '2020-11-03', '10:00:00', 'Woodlands', 'G-4,G-5', 2, 27.00, 'Selina Liu', 'selinaliu1997.sl@gmail.com', 92998459),
(158, 'Tenet', '2020-11-03', '13:00:00', 'Woodlands', 'G-4', 1, 13.50, 'Selina Liu', 'selinaliu1997.sl@gmail.com', 92998459),
(159, 'Mulan', '2020-11-03', '10:00:00', 'Woodlands', 'F-1', 1, 13.50, 'Selina Liu', 'selinaliu1997.sl@gmail.com', 92998459);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
