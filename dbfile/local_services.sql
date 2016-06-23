-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2016 at 04:50 PM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `local_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `contact` bigint(20) DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`contact`, `name`, `email`, `password`, `address`, `type`) VALUES
(123456789, 'ajay', 'ab@g', 'asdfg', 'qwertyuiop', 1),
(12345678, 'aja', 'adfa@ga', 'a', 'adfaf', 0),
(1, 'a b', 'asd@as', 'a d', 'asdf fg dfg ghj 123', 0),
(123456987, 'asdfgh', 'asd@sd', 'asdfghjkl', 'asdfghqweryuiobnm', 0),
(12345, 'munish', 'email@gmai', 'password', 'address', 0),
(121, 'adbasd', 'ex@gmail.c', 'password', 'address', 0),
(121, 'munish', 'gmail@gmail.com', 'password', 'address', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`) VALUES
(3, 'First', 'First'),
(4, 'Second', 'Second Category Description'),
(5, 'Deshu', 'Deshu f'),
(6, 'helo', ''),
(7, 'helo', ''),
(8, 'laundry', 'Hello world');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
`id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `sub_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `service_id`, `sub_category_name`) VALUES
(1, 3, 'SUBDESHUCAT'),
(2, 6, 'munish'),
(3, 4, 'Hello World'),
(4, 4, 'Hello World'),
(5, 4, 'Hello World'),
(6, 4, 'Hello World'),
(8, 3, ''),
(9, 3, ''),
(10, 8, 'press'),
(11, 8, 'wash'),
(12, 6, ''),
(13, 4, ''),
(14, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_child_categories`
--

CREATE TABLE IF NOT EXISTS `sub_child_categories` (
`id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `sub_child_category_name` varchar(100) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_child_categories`
--

INSERT INTO `sub_child_categories` (`id`, `sub_category_id`, `sub_child_category_name`, `rate`) VALUES
(1, 2, 'Nasdldkkd', 0),
(2, 3, 'sadsscs', 0),
(3, 3, 'Hello world', 345.34);

-- --------------------------------------------------------

--
-- Table structure for table `testtable`
--

CREATE TABLE IF NOT EXISTS `testtable` (
  `id` int(11) NOT NULL,
  `val` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtable`
--

INSERT INTO `testtable` (`id`, `val`) VALUES
(1, 3),
(12, 51),
(12, 51),
(12, 123),
(12, 33),
(12, 1234),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998),
(4, 998);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
 ADD PRIMARY KEY (`id`), ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `sub_child_categories`
--
ALTER TABLE `sub_child_categories`
 ADD PRIMARY KEY (`id`), ADD KEY `sub_category_id` (`sub_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sub_child_categories`
--
ALTER TABLE `sub_child_categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `sub_child_categories`
--
ALTER TABLE `sub_child_categories`
ADD CONSTRAINT `sub_child_categories_ibfk_1` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
