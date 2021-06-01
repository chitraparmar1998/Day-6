-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 06:42 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_webinar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `std_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_name` varchar(50) NOT NULL,
  `std_gender` varchar(6) NOT NULL,
  `std_dob` int(10) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `std_mobile` bigint(10) NOT NULL,
  `std_address` varchar(100) NOT NULL,
  `std_password` varchar(8) NOT NULL,
  `std_pincode` int(6) NOT NULL,
  `std_bloodgroup` varchar(20) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`std_id`, `std_name`, `std_gender`, `std_dob`, `std_email`, `std_mobile`, `std_address`, `std_password`, `std_pincode`, `std_bloodgroup`) VALUES
(1, 'chitra', '', 16, 'chitra@gmail.com', 987654321, '20,saurabh park', '5689', 600078, 'o+'),
(2, 'vyoma', 'Female', 13, 'vyoma@gmail.com', 8765430921, '120,balaji', '8765', 98345, 'B+'),
(3, 'meet', 'Female', 17, 'meet@gmail.com', 7654098123, '87,rudra complex', '9834', 98765, 'AB-');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
