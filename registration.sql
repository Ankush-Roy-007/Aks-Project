-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 01:25 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `year` varchar(30) DEFAULT NULL,
  `feedback` varchar(30) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `regn` int(10) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`name`, `lastname`, `email`, `phone`, `year`, `feedback`, `branch`, `regn`, `password`) VALUES
('Ankush', 'Roy', 'ankushroy44@yahoo.com', 9660485934, 'TE', 'Male', 'etc', 18634, 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `teacher 1`
--

CREATE TABLE IF NOT EXISTS `teacher 1` (
  `Regn no` int(5) NOT NULL,
  `Confidance` varchar(2) NOT NULL,
  `Behavior` varchar(2) NOT NULL,
  `Nature` varchar(2) NOT NULL,
  `Knowledge` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher 2`
--

CREATE TABLE IF NOT EXISTS `teacher 2` (
  `Regn no` int(5) NOT NULL,
  `Confidance` int(2) NOT NULL,
  `Behavior` int(2) NOT NULL,
  `Nature` int(2) NOT NULL,
  `Knowledge` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher 3`
--

CREATE TABLE IF NOT EXISTS `teacher 3` (
  `Regn no` int(5) NOT NULL,
  `Confidance` varchar(2) NOT NULL,
  `Behavior` varchar(2) NOT NULL,
  `Nature` varchar(2) NOT NULL,
  `Knowledge` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher 3`
--

INSERT INTO `teacher 3` (`Regn no`, `Confidance`, `Behavior`, `Nature`, `Knowledge`) VALUES
(1, '2', '3', '4', '5'),
(18634, '6', '6', '6', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
 ADD UNIQUE KEY `regn` (`regn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
