-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2018 at 11:19 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hpt`
--

-- --------------------------------------------------------

--
-- Table structure for table `apointment`
--

CREATE TABLE IF NOT EXISTS `apointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PN` varchar(30) DEFAULT NULL,
  `RD` varchar(30) DEFAULT NULL,
  `MB` int(11) DEFAULT NULL,
  `RN` varchar(10) DEFAULT NULL,
  `AD` varchar(40) DEFAULT NULL,
  `Date` varchar(30) DEFAULT NULL,
  `Time` varchar(30) DEFAULT NULL,
  `visible` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `apointment`
--

INSERT INTO `apointment` (`id`, `PN`, `RD`, `MB`, `RN`, `AD`, `Date`, `Time`, `visible`) VALUES
(1, 'prodip roy', 'prodip roy', 1796074052, 'r-5', 'riu2ryi\r\nrwiyrwi\r\n  ', '2018-02-22', '01:59', '1'),
(2, 'WERTUEW0TU9', 'gdfgjklkj', 454536346, '66', 'gfggfdgdgsd\r\n  ', '2018-03-01', '13:00', '1'),
(3, 'ratin roy ', 'prodip roy', 543509889, 'r-9', 'gekjd\r\nkhfkshf\r\n  ', '2018-02-22', '13:00', '0'),
(4, 'nogen ', 'Dr.prodip', 985975, 'r-5', 'rwerkiu\r\nwryiyu\r\n  ', '2018-02-22', '01:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DN` varchar(30) DEFAULT NULL,
  `SPC` varchar(30) DEFAULT NULL,
  `MB` int(11) DEFAULT NULL,
  `CHN` varchar(30) DEFAULT NULL,
  `Date` varchar(20) DEFAULT NULL,
  `visible` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `DN`, `SPC`, `MB`, `CHN`, `Date`, `visible`) VALUES
(1, 'prodip roy', 'all body &php', 2147483647, 'h-89', '2018-02-20', 1),
(2, 'anjali rani', 'child', 1796074052, 'ch-01', '02-03-2018', 0),
(3, 'komalakanto singha', 'medicine', 2147483647, 'c-00', '2018-02-19', 0),
(4, 'paritosh roy', 'eye', 172201722, 'm-00', '2018-02-19', 0),
(5, 'prodip roy', 'all body &php', 2147483647, 'h-89', '2018-02-20', 1),
(6, 'Ratin', 'Roy', 2147483647, 'ko', '2018-06-12', 0),
(7, 'suman gangopahhyay', 'php,mysql,js', 2147483647, 'lict-dinajpur', '2018-02-20', 0),
(8, 'dr.gobindho dada', 'html,php', 1758943985, 'u-45', '2018-02-20', 0),
(9, 'songkor sinha', 'html', 2147483647, 'g-08', '2018-02-20', 0),
(10, 'Ratin', 'Roy', 2147483647, 'ko', '2018-06-12', 1),
(11, 'dr.gobindho dada', 'html,php', 1758943985, 'u-45', '2018-02-20', 1),
(12, 'Dr.sadhon dada', 'java ,js,php', 2147483647, 'r-9', '2018-02-20', 1),
(13, 'Dr.sobuj Roy ', 'html,php,css', 2147483647, 'h-78', '2018-02-22', 1),
(14, 'dr.topon sen', 'head', 2147483647, 'nimnogor', '2018-02-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PN` varchar(30) DEFAULT NULL,
  `BN` varchar(30) DEFAULT NULL,
  `MB` int(11) DEFAULT NULL,
  `TX` varchar(60) DEFAULT NULL,
  `WRD` varchar(30) DEFAULT NULL,
  `GEN` varchar(30) DEFAULT NULL,
  `Date` varchar(30) DEFAULT NULL,
  `Time` varchar(30) DEFAULT NULL,
  `visible` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `PN`, `BN`, `MB`, `TX`, `WRD`, `GEN`, `Date`, `Time`, `visible`) VALUES
(1, 'prodip roy', 'k-8', 1796074052, 'bhatgoan', 'medicine', 'male', '2018-02-20', '02:59', '1'),
(2, 'poritosh roy', 'p-4', 1724225220, 'suihari', 'child', 'male', '2018-02-13', '14:52', '1'),
(3, 'poritosh roy', 'p-55', 1724225220, 'balubari,\r\ndinajpur.', 'child', 'male', '2018-02-20', '23:01', '0'),
(4, 'prosantto sen', 'p-09', 2147483647, 'bakpur sakoya', 'orthopadics', 'male', '2018-02-21', '13:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE IF NOT EXISTS `stuff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `N` varchar(30) DEFAULT NULL,
  `WN` varchar(30) DEFAULT NULL,
  `MB` int(11) DEFAULT NULL,
  `AD` varchar(50) DEFAULT NULL,
  `GN` varchar(20) DEFAULT NULL,
  `DT` varchar(30) DEFAULT NULL,
  `visible` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`id`, `N`, `WN`, `MB`, `AD`, `GN`, `DT`, `visible`) VALUES
(1, '', 'pharmacist', 423978, 'iewuryilyqfnkknf\r\nqwefjijjoif', 'male', '2018-02-28', '1'),
(2, '', 'labortorist', 2147483647, 'rwefhkhnkncksnckn', 'male', '2018-03-01', '1'),
(3, 'prodip kanti roy', 'nurse', 2147483647, 'erewrwerewrrweferw', 'male', '2018-03-01', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
