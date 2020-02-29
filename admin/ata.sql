-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2017 at 05:58 PM
-- Server version: 5.5.50
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ata`
--
CREATE DATABASE IF NOT EXISTS `ata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ata`;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `driverid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `street` varchar(80) NOT NULL,
  `location` varchar(80) NOT NULL,
  `city` varchar(80) NOT NULL,
  `state` varchar(80) NOT NULL,
  `pincode` varchar(80) NOT NULL,
  `mob` varchar(80) NOT NULL,
  `lin` varchar(80) NOT NULL,
  PRIMARY KEY (`driverid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7827 ;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverid`, `name`, `street`, `location`, `city`, `state`, `pincode`, `mob`, `lin`) VALUES
(7826, 'Arjun Raothey', 'Agarpara', 'Kutir shilpa house', 'Kolkata', 'West Bengal', '700109', '9163214034', '8420561162'),
(1385, 'Kunal Sen', 'North Station Road', 'House no-20', 'Calcatta', 'West Bengal', '700109', '9163214034', '9163214034'),
(115, 'Sourav Roy', 'Agarapara', 'Kutir shilpa house', 'Kolkata', 'West Bengal', '700109', '9163214034', '452626');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(80) NOT NULL,
  `destination` varchar(80) NOT NULL,
  `km` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9111 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `source`, `destination`, `km`) VALUES
(3808, 'Kolkata', 'Durgapur', '500'),
(9110, 'Calcatta', 'Burdhaman', '455');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regno` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birth` varchar(50) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `address` varchar(80) NOT NULL,
  `landmark` varchar(80) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(50) NOT NULL,
  `mob` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fpath` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `regno`, `name`, `birth`, `gen`, `address`, `landmark`, `city`, `state`, `pin`, `mob`, `email`, `password`, `fpath`) VALUES
(1, 31515, 'Somen Das', '07-04-1996', 'male', 'Balai Ghosh House', 'kutir Shilpa house', 'Kolkata', 'West Bengal', 700109, '8420561162', 'somendas1996@yahoo.in', '8420561162', ''),
(2, 53451, 'Somen ', '07-04-1996', 'male', '', '', 'Agarpara', 'West Bengal', 700109, '8420561162', 'dassomen1437@gmail.com', '12345', ''),
(3, 19061, 'Somen Das', '07-04-1996', 'male', 'Balai ghosh house', 'Gouranga Mistanna Bhanda', 'Kolkata', 'West Bengal', 700109, '8420561162', 'dassomen1438@gmail.com', '123', ''),
(4, 33493, 'Souvik Sankar  Mitra', '27.01.1995', 'male', 'Dhakuria', '', 'Kolkata', 'West Bengal', 700031, '8017399432', 'souviksankar2013@gmail.com', '1234567890', ''),
(7, 96365, 'Souvik Sankar Mitra', '27.01.1995', 'male', 'Dhakuria', 'Taraknath Mistanna Bhandar', 'Kolkata', 'West Bengal', 700031, '8017399432', 'souviksankar1954@yahoo.com', '12', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
