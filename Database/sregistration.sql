-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2018 at 11:05 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `sregistration`
--

DROP TABLE IF EXISTS `sregistration`;
CREATE TABLE IF NOT EXISTS `sregistration` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `enroll` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sregistration`
--

INSERT INTO `sregistration` (`sid`, `fname`, `lname`, `uname`, `pass`, `email`, `contact`, `sem`, `enroll`, `status`) VALUES
(1, 'Nima', 'Tshering', 'gyarongNT', 'nima', 'nimatshering@gmail.com', '9734833314', '5', '16MI537', 'yes'),
(6, 'Ritik', 'Bhatia', 'ritik', 'ritik', 'ritik@gmail.com', '8351970098', '7', '17MI456', 'no'),
(3, 'Somsher', 'Lepcah', 'soms', 'soms', 'soms@gmail.com', '7018051388', '3', '17MI534', 'yes'),
(4, 'Jeet ', 'Kumar', 'jeet', 'jeet', 'jeet@gmail.com', '8768268446', '2', '18MI343', 'yes'),
(5, 'Sahadeo', 'Limboo', 'Sado', 'Sado', 'sao@gmail.com', '9873424243', '7', '15MI344', 'yes'),
(7, 'Ankit', 'Sherpa', 'ankit', 'ankit', 'ankit@gmail.com', '8978455612', '8', '18MI345', 'no'),
(8, 'Pema', 'Chultim', 'pema', 'pema', 'pema@gmail.com', '9887655432', '6', '16MI456', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
