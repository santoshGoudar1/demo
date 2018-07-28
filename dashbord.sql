-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2018 at 03:19 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dashbord`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashbord`
--

CREATE TABLE IF NOT EXISTS `dashbord` (
  `shope_id` int(11) NOT NULL AUTO_INCREMENT,
  `shope_name` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  PRIMARY KEY (`shope_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dashbord`
--

INSERT INTO `dashbord` (`shope_id`, `shope_name`, `item_name`, `quantity`, `amount`) VALUES
(4, 'basava', 'roti', '', '56'),
(3, 'panipuri', 'masala', '10', '70'),
(6, 'kaveri', 'bulb', '1', '40');
