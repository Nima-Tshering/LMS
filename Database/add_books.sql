-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2018 at 11:04 AM
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
-- Table structure for table `add_books`
--

DROP TABLE IF EXISTS `add_books`;
CREATE TABLE IF NOT EXISTS `add_books` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `books_name` varchar(50) NOT NULL,
  `books_image` varchar(500) NOT NULL,
  `books_author_name` varchar(50) NOT NULL,
  `books_publication_name` varchar(50) NOT NULL,
  `books_purchase_date` varchar(50) NOT NULL,
  `books_price` varchar(50) NOT NULL,
  `books_qty` varchar(50) NOT NULL,
  `avialable_qty` varchar(50) NOT NULL,
  `librarian_name` varchar(50) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`bid`, `books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_qty`, `avialable_qty`, `librarian_name`) VALUES
(22, 'Computer Graphics', 'books_image/9781439852798.jpg', 'Saurav Gupta', 'Gupta Publication', '600', '15 December 2014', '20', '20', 'nima'),
(21, 'Info Tech ', 'books_image/English4Computer-Book-Cover.jpg', 'Pradeep Singh', 'JPH Publication', '2999', '14 April 2015', '5', '5', 'nima'),
(20, 'Magical Click ', 'books_image/Cover-Page1.jpg', 'Nitish Kumar', 'Mgrw Hills', '599', '17 October 2016', '30', '20', 'nima'),
(19, 'Computer Graphics', 'books_image/9781439867303.jpg', 'Ritik Bhatia', 'Bhatia Publication', '999', '08 December 2017', '10', '9', 'nima'),
(23, 'Computer Networks', 'books_image/th5UEPE6L0.jpg', 'Nima Tshering', 'Bhatia Publication', '799', '14 January 2018', '20', '10', 'nima'),
(25, 'Commodore Grammar', 'books_image/Commodore_Graphics_Sound_585.jpg', 'Anu Poudyal', 'JPH Publication', '2500', '12 March 207', '13', '12', 'nima'),
(26, 'Commodore', 'books_image/Commodore64_585.jpg', 'Dawa Norbu', 'Gupta Pulication', '999', '15 September 2017', '16', '19', 'nima'),
(27, 'C++', 'books_image/computer-science-book-250x250.jpg', 'Yaswant Kanitkar', 'Yaswant Publication', '550', '12 March 2018', '23', '20', 'nima'),
(28, 'GATE Papers', 'books_image/gate-paper-computer-science-information-technology-700x700-imad7wz3scx6uzvs.jpg', 'Nitish Kumar', 'JPH Publication', '899', '12 April 2016', '20', '18', 'nima'),
(30, 'Java', 'books_image/main-qimg-01d0259596dca3cc9062e4d78bccfbfd-c.jpg', 'Hilbert', 'Mgrw Hills', '600', '25 September 2018', '1', '0', 'nima');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
