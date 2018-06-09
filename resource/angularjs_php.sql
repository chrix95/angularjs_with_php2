-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 06:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `angularjs_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `group`) VALUES
(1, 'Rice', 'Food'),
(2, 'Mango', 'Fruit'),
(3, 'Paw Paw', 'Fruit'),
(4, 'Cashew', 'Fruit'),
(5, 'Beans', 'Food'),
(6, 'Apple', 'Fruit'),
(7, 'Bread', 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `email`, `phone`) VALUES
(18, 'Dennis Ikpa Udoh', 'den.ikpaUdoh@ymail.com', '08135330575'),
(19, 'Ndito Uruan', 'ndito.ekpe@ndito.com', '08183780409'),
(20, 'Asuquo Williams', 'willy.as@gmail.com', '09192339459'),
(21, 'Victor Prince', 'vicPrince@tamil.com', '08182382957'),
(22, 'Maxwell Mfon', 'mfon_max@will.com', '012900012'),
(23, 'Richard Edwin', 'xwinrich@gmail.com', '01-236678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
