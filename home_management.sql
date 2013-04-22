-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2013 at 05:41 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `home_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE IF NOT EXISTS `amount` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(25) NOT NULL,
  `a_amt` int(25) NOT NULL,
  `a_date` int(25) NOT NULL,
  `a_month` varchar(25) NOT NULL,
  `a_year` int(25) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`a_id`, `c_name`, `a_amt`, `a_date`, `a_month`, `a_year`) VALUES
(7, 'mobile recharge', 65, 0, '', 0),
(8, 'home', 500, 0, '', 0),
(9, 'personal', 40, 0, '', 0),
(10, 'lightbill', 230, 0, '', 0),
(13, 'fuel', 15, 0, '', 0),
(18, 'Byke Maintanance', 8, 0, '', 0),
(21, 'fuel', 50, 0, '', 0),
(22, 'mobile recharge', 10, 0, '', 0),
(23, 'fuel', 100, 0, '', 0),
(24, 'Travaling', 45, 0, '', 0),
(25, 'extra', 5, 0, '', 0),
(32, 'fuel', 50, 1, 'Jan', 2013),
(33, 'fuel', 50, 16, 'Apr', 2013),
(34, 'personal', 20, 16, 'Apr', 2013),
(35, 'mobile recharge', 20, 16, 'Apr', 2013),
(36, 'home', 600, 16, 'Apr', 2013),
(37, 'Travaling', 20, 16, 'Apr', 2013),
(38, 'fuel', 50, 17, 'Apr', 2013),
(39, 'home', 2000, 17, 'Apr', 2013),
(40, 'mobile recharge', 40, 18, 'Apr', 2013),
(41, 'fuel', 60, 19, 'Apr', 2013),
(42, 'mobile recharge', 60, 19, 'Apr', 2013),
(43, 'fuel', 50, 18, 'Apr', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(25) NOT NULL,
  `caption` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `caption`) VALUES
(1, 'mobile recharge', ''),
(2, 'fuel', ''),
(3, 'personal', ''),
(4, 'home', ''),
(5, 'lightbill', ''),
(6, 'medicine', ''),
(7, 'extra', ''),
(10, 'Byke Maintanance', 'maintanance'),
(12, 'extra', ''),
(13, 'Travaling', '45');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_amt` int(25) NOT NULL,
  `i_date` int(11) NOT NULL,
  `i_month` varchar(25) NOT NULL,
  `i_year` int(25) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`i_id`, `i_amt`, `i_date`, `i_month`, `i_year`) VALUES
(1, 4932, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(25) NOT NULL,
  `u_pass` varchar(25) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--

