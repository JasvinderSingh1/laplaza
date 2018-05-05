-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2017 at 01:08 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorwpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `check_in_date` date DEFAULT NULL,
  `check_out_date` date DEFAULT NULL,
  `room_id` int(150) DEFAULT NULL,
  `adults` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`book_id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `check_in_date`, `check_out_date`, `room_id`, `adults`, `children`, `name`, `email`, `phone`, `product_id`) VALUES
(1, '2017-10-12', '2017-10-13', 30, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2017-10-13', '2017-10-14', 31, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2017-10-14', '2017-10-15', 35, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `txn_id` varchar(225) DEFAULT NULL,
  `payment_gross` float(102,0) DEFAULT NULL,
  `currency_code` varchar(5) DEFAULT NULL,
  `payer_email` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `user_id`, `product_id`, `txn_id`, `payment_gross`, `currency_code`, `payer_email`, `payment_status`) VALUES
(1, 1, 31, '9DG12644LD465984T', 2, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(2, 1, 31, '41R52257644845337', 1, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(3, 1, 31, '1AB106423C213590G', 1, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(4, 1, 31, '98V083649F6158908', 5, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(5, 1, 31, '3SE23133C97878635', 10, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(6, 1, 31, '7DT732794A690163K', 25, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(7, 1, 31, '9K221798SE980430X', 17, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(8, 1, 31, '6VD21118303001124', 12, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(9, 1, 31, '2SC297221K869371K', 7, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(10, 1, 31, '4V446830545002107', 3, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(11, 1, 31, '1LF54296XT8142946', 5, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(12, 1, 31, '4BC87805DU571723U', 100, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(13, 1, 31, '9V205464MB067994H', 100, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(14, 1, 36, '3P482059TN935953U', 32, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(15, 1, 35, '5FY42775FF9838908', 25, 'USD', 'anujtest1234wct@gmail.com', 'Completed'),
(16, 1, 38, '6LE076404C669560A', 30, 'USD', 'anujtest1234wct@gmail.com', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL,
  `room_no` int(115) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `room_no`, `check_in`, `check_out`) VALUES
(1, 310, '2017-10-13', '2017-10-14'),
(2, 310, '2017-10-14', '2017-10-15'),
(3, 410, '2017-10-15', '2017-10-16'),
(4, 510, '2017-10-16', '2017-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `room_no` int(150) DEFAULT NULL,
  `r_name` varchar(255) DEFAULT NULL,
  `price` varchar(225) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `featured` varchar(255) DEFAULT NULL,
  `gallery0` varchar(255) DEFAULT NULL,
  `gallery1` varchar(255) DEFAULT NULL,
  `gallery2` varchar(255) DEFAULT NULL,
  `gallery3` varchar(255) DEFAULT NULL,
  `gallery4` varchar(255) DEFAULT NULL,
  `gallery5` varchar(255) DEFAULT NULL,
  `gallery6` varchar(255) DEFAULT NULL,
  `gallery7` varchar(255) DEFAULT NULL,
  `gallery8` varchar(255) DEFAULT NULL,
  `gallery9` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_no`, `r_name`, `price`, `description`, `image`, `featured`, `gallery0`, `gallery1`, `gallery2`, `gallery3`, `gallery4`, `gallery5`, `gallery6`, `gallery7`, `gallery8`, `gallery9`) VALUES
(30, 310, 'Delux', '35', 'lorem ipsum delux', '5.jpg', 'yes', 'g1.jpg', 'g2.jpg', 'g3.jpg', 'g4.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 410, 'Super Delux', '50', 'lorem ipsum super delux', '6.jpg', 'yes', 'g5.jpg', 'g6.jpg', 'g7.jpg', 'g8.jpg', '', '', '', '', '', ''),
(35, 510, 'Regular', '25', 'lorem ipsum reular room', '7.jpg', 'yes', 'g11.jpg', 'g31.jpg', 'g61.jpg', 'g81.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 610, 'Super Delux Queen Bed', '32', 'lorem ipsum super delux queen bed', '8.jpg', 'no', '', '', '', '', '', '', '', '', '', ''),
(37, 710, 'Delux Double Bed', '30', 'lorem ipsum delux double bed', '51.jpg', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 910, 'Regular Twin Bed', '30', 'lorem ipsum dollar regular twin bed', '61.jpg', 'no', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'test', 'test@mail.com', 'test'),
(2, 'test2', 'tes2@mail.com', 'test2'),
(3, 'test3', 'test3@mail.com', 'test3'),
(5, 'admin', 'mciittech@gmail.com', 'mcit@321!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
