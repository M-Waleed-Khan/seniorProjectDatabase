-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 13, 2018 at 04:55 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `picture`) VALUES
(4, 'pictures/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

DROP TABLE IF EXISTS `mytable`;
CREATE TABLE IF NOT EXISTS `mytable` (
  `firstName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `nick` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`firstName`, `lastName`, `nick`, `email`, `salary`) VALUES
('[value-1]', '[waleed]', '[value-3]', '[value-4]', 1),
('[value-1]', '[waleed]', '[value-3]', '[value-4]', 1),
('[value-1]', '[waleed]', '[value-3]', '[value-4]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(300) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `nick` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `salary` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `picture`, `firstName`, `lastName`, `nick`, `email`, `salary`) VALUES
(52, 'pictures/d.jpg', 'john', 'wicks', 'jw', 'john@gmail.comwertrgreget', 99999),
(46, 'pictures/download.jpeg', 'pic', 'last', 'name', 'pic@gma', 1122112),
(50, 'pictures/b.jpg', 'ahsan', 'raza', 'asif', 'ashan@gmail.com', 1121),
(51, 'pictures/d.jpg', 'usman', 'ali', 'usmana', 'usman.ali@gmail.com', 11213);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
