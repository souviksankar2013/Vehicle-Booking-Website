-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2017 at 02:39 AM
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
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fpath` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `password`, `fpath`) VALUES
(1, 'Souvik Sankar Mitra', '8017399432', 'uploaded_IMAGES/5237410562741_1395041084076031_6103084020985098147_o.jpg'),
(2, 'Somen Das', '8420561162', 'uploaded_IMAGES/15036717_195731444211034_4670495724282079287_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `vehicleid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `seatingcap` int(20) NOT NULL,
  `fareperkm` decimal(20,0) NOT NULL,
  `fpath` varchar(80) NOT NULL,
  `driverid` int(20) NOT NULL,
  PRIMARY KEY (`vehicleid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=654448 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`vehicleid`, `name`, `type`, `regno`, `seatingcap`, `fareperkm`, `fpath`, `driverid`) VALUES
(654445, 'Ferrari', 'Suv', '735487464', 10, '35', 'uploaded_IMAGES/9698download (1).jpg', 7829),
(654446, 'LandRover', 'Sports', '7253735', 15, '21', 'uploaded_IMAGES/7842images (2).jpg', 7830),
(654447, 'Aventador', 'Sport car', '26656555', 12, '90', 'uploaded_IMAGES/9694car-pc-wallpaper.jpg', 7831);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7833 ;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverid`, `name`, `street`, `location`, `city`, `state`, `pincode`, `mob`, `lin`) VALUES
(7829, 'Kunal Roy', 'Agarapara', 'Northstation road', 'Kolkata', 'West Bengal', '700109', '9163214034', '7969756781'),
(7830, 'Rittwick Das', 'Burdwan', 'Northstation road', 'Kolkata', 'West Bengal', '51436', '8420561162', '93836782'),
(7831, 'Chandan', 'Agarapara', 'Kutir shilpa house', 'Kolkata', 'West Bengal', '700109', '921943298', '93846585');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9117 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `source`, `destination`, `km`) VALUES
(9112, 'Kolkata', 'Durgapur', '160'),
(9113, 'Durgapur', 'Burdaman', '170'),
(9114, 'Kolkata', 'Burdaman', '155'),
(9115, 'Durgapur', 'Medinipur', '190');

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
(1, 31515, 'SomenDas', '07-04-1996', 'male', 'Balai Ghosh House', 'House No-20', 'kolkata', 'west bengal', 700109, '9163214034', 'somendas1996@yahoo.in', '8420561162', ''),
(2, 53451, 'SomenDas', '07-04-1996', 'male', 'balai ghosh house', 'Gouranga Mistanna Bhanda', 'kolkata', 'west bengal', 700109, '8420561162', 'dassomen1437@gmail.com', '12345', ''),
(3, 19061, 'SomenDas', '07-04-1996', 'male', 'balai ghosh house', 'Gouranga Mistanna Bhanda', 'kolkata', 'west bengal', 700109, '8420561162', 'dassomen1438@gmail.com', '123', ''),
(4, 33493, 'Souvik SankarMitra', '27.01.1995', 'male', 'Dhakuria', '', 'Kolkata', 'West Bengal', 700031, '8017399432', 'souviksankar2013@gmail.com', '1234567890', ''),
(7, 96365, 'Souvik Sankar Mitra', '27.01.1995', 'male', 'Dhakuria', 'Taraknath Mistanna Bhandar', 'Kolkata', 'West Bengal', 700031, '8017399432', 'souviksankar1954@yahoo.com', '12', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
