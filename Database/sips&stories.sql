-- phpMyAdmin SQL Dump
-- version 5.2.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 3, 2023 at 03:51 PM
-- Server version: 10.4.27
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sips&stories`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Naruto', 'Uzumaki', 'rasengan1@gmail.com', '$2y$12$fTyjE6dqqdnUfcYqVxlu8OPXClSCW4PuOVRlvIU/vDILG2QZpt0/6'),
(2, 'Itachi', 'Uchiha', 'itachiuchiha@gmail.com', '$2y$12$pVhkyQp4svYWo.xEuL/DW.MHXC22i//EmPvwflPXy74ttZirGKMIm'),
(3, 'Alex', 'MMMMMM', 'lexizgichbuoy@gmail.com', '$2y$12$wHeV.oJawDEKd/MoFwFWHupTxGq4RFWXeQ.iufYbc7TDLC2Ch8bFy');
(4, 'alvin', 'kimani', 'alvinkimani31@gmail.com', '$2y$12$2Ryh2vAwkCljmu1G6PbH1entWpk3btvmkcZgIIGFG9GoOxPsA4UJ6');
(5, 'Alex', 'Maina', 'alpha@gmail.com', '$2y$12$wM52HONDi1IrjjsRTPC3w.1C2GWr2Zdl2Sq1WcmOQDPBoUPN4WPZa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
