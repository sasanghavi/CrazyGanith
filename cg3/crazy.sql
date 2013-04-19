-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2013 at 05:35 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crazy`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `qid` int(100) NOT NULL,
  `question` varchar(5000) NOT NULL,
  `opt1` varchar(1000) NOT NULL,
  `opt2` varchar(1000) NOT NULL,
  `opt3` varchar(1000) NOT NULL,
  `opt4` varchar(1000) NOT NULL,
  `ans` varchar(1000) NOT NULL,
  `binary` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`qid`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `binary`) VALUES
(1, 'Are u a male ?', 'Yes', 'No', 'May be', 'doubtful', 'Yes', 0),
(2, 'What is your name ?', 'a', 'b', 'b', 'd', 'a', 0),
(3, 'How old r u', '18', '19', '20', '21', '19', 0),
(4, 'DAFAQ', '!', '3', '2', '1', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `point` int(100) NOT NULL,
  `attempted` int(100) NOT NULL,
  `taken` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `contact` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`, `id`, `point`, `attempted`, `taken`, `email`, `college`, `contact`) VALUES
('sas', 'sas', 'sas', 1, 13, 4, 1, 'sasanghavi@gmail.com', 'da-iict', 2147483647),
('aaa', 'aaa', 'aaa', 11, 0, 0, 0, 'asd3@dasd.com', 'asd', 93),
('aagam', 'aagam94', '12345', 12, 0, 0, 0, 'aagam94@gmail.com', 'daiict', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
