-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2016 at 01:21 PM
-- Server version: 5.7.12-0ubuntu1.1
-- PHP Version: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `contact`, `name`, `password`, `address`, `type`, `email`) VALUES
(1, 9988223344, 'Munish Juneja', 'password', 'address', 1, 'munish@gmail.com'),
(2, 7733773377, 'newuser', 'password', 'address', 0, 'nu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` text,
  `imageurl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `imageurl`) VALUES
(13, 'APPLIANCES', '', 'img/icons/Appliance.png'),
(14, 'CARPENTRY', '', 'img/icons/Carpentry.png'),
(15, 'CLEANING', '', 'img/icons/Cleaning.jpg'),
(16, 'COMPUTER REPAIRING', '', 'img/icons/Computerrepairing.jpg'),
(17, 'ELECTRICAL', '', 'img/icons/Electrical.jpg'),
(18, 'LAUNDRY', '', 'img/icons/laundry.png'),
(19, 'PAINTING', '', 'img/icons/Painting.jpg'),
(20, 'PLUMBING', '', 'img/icons/Plumbing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `sub_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `service_id`, `sub_category_name`) VALUES
(15, 13, 'AC INSTALLATION'),
(16, 13, 'AC UNINSTALLATION'),
(17, 13, 'AC SERVICING'),
(18, 13, 'WASHING MACHINE REPAIRING'),
(19, 13, 'OVEN REPAIR'),
(20, 13, 'FRIDGE REPAIRING'),
(21, 13, 'FRIDGE GAS CHARGING'),
(22, 14, 'first sub category'),
(23, 14, 'second sub category');

-- --------------------------------------------------------

--
-- Table structure for table `sub_child_categories`
--

CREATE TABLE `sub_child_categories` (
  `id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `sub_child_category_name` varchar(100) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_child_categories`
--

INSERT INTO `sub_child_categories` (`id`, `sub_category_id`, `sub_child_category_name`, `rate`) VALUES
(1, 15, 'WINDOW AC', 650),
(2, 15, 'SPLIT AC', 900);

-- --------------------------------------------------------

--
-- Table structure for table `testtable`
--

CREATE TABLE `testtable` (
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

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `service_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `user_id`, `service_id`, `status`, `service_address`) VALUES
(1, 2, 2, 0, '531 Matur Sector 71 160161');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `sub_child_categories`
--
ALTER TABLE `sub_child_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `sub_child_categories`
--
ALTER TABLE `sub_child_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
