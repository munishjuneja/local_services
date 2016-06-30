-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2016 at 04:32 PM
-- Server version: 5.7.12-0ubuntu1
-- PHP Version: 7.0.7-4+deb.sury.org~xenial+

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
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
  `pro_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(14, 'CARPENTRY', '', 'img/icons/Carpentry.jpeg'),
(15, 'CLEANING', '', 'img/icons/Cleaning.jpg'),
(16, 'COMPUTER REPAIRING', '', 'img/icons/Computerrepairing.png'),
(17, 'ELECTRICAL', '', 'img/icons/Electrical.png'),
(18, 'LAUNDRY', '', 'img/icons/laundry.png'),
(19, 'PAINTING', '', 'img/icons/Painting.png'),
(20, 'PLUMBING', '', 'img/icons/Plumbing.jpeg');

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
(23, 14, 'second sub category'),
(24, 14, 'General Carpentry'),
(25, 14, 'FURNITURE  REPAIR'),
(26, 14, 'DOOR OR  WINDOW REPAIR'),
(27, 14, 'CURTAIN ROLL FIXTURE'),
(28, 14, 'LOCK REPAIR'),
(29, 15, 'EXPRESS CLEANING'),
(30, 15, 'DEEP HOME CLEANING'),
(31, 15, 'SOFA SHAMPOOING'),
(32, 15, 'BATHROOM CLEANING '),
(33, 15, 'KITCHEN CLEANING'),
(34, 15, 'CLEANING INSPECTION'),
(35, 16, 'COMPUTER REPAIR & SERVICES  DELL'),
(36, 16, 'COMPUTER REPAIR & SERVICES  HCL'),
(37, 16, 'COMPUTER REPAIR & SERVICES ACER'),
(38, 16, 'COMPUTER REPAIR & SERVICES SONY'),
(39, 16, 'COMPUTER REPAIR & SERVICES ASUS'),
(40, 16, 'COMPUTER REPAIR & SERVICES INTEL'),
(41, 16, 'COMPUTER REPAIR & SERVICES VAIO'),
(42, 16, 'COMPUTER REPAIR & SERVICES MAC'),
(43, 17, 'LIGHTS & FITTINGS'),
(44, 17, 'FANS'),
(45, 17, 'PLUG AND SWITCH'),
(46, 17, 'TV AND ENTERTAINMENT'),
(47, 17, ''),
(48, 17, 'UPS'),
(49, 17, 'GENERAL ELECTRICAL SERVICES'),
(50, 18, 'WASH AND FOLD'),
(51, 18, 'WASH AND IRON'),
(52, 18, 'PREMIUM LAUNDRY'),
(53, 18, 'DRY CLEAN'),
(54, 19, 'INTERIOR FRESH PAINTING'),
(55, 19, 'INTERIOR RE-PAINTING'),
(56, 19, 'EXTERIOR FRESH-PAINTING'),
(57, 19, 'EXTERIOR RE-PAINTING'),
(58, 19, 'WOOD POLISHING'),
(59, 20, 'LEAKS AND BLOCKS'),
(60, 20, 'TAPS AND SHOWERS'),
(61, 20, 'TOILET FITTINGS'),
(62, 20, 'ACCESSORIES'),
(63, 20, 'GENERAL PLUMBING SERVICES'),
(64, 15, 'MOVE '),
(65, 15, 'MOVE IN CLEANING');

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
(2, 15, 'SPLIT AC', 900),
(3, 16, 'SPLIT AC', 900),
(4, 16, 'WINDOW AC', 650),
(5, 17, 'WINDOW AC', 500),
(6, 17, 'SPLIT AC', 900),
(7, 18, 'FULLY AUTOMATIC ', 450),
(8, 18, 'SEMI-AUTOMATIC', 9),
(9, 18, 'FRONT LOADING ', 550),
(10, 19, 'CONVECTION/GRILL', 450),
(11, 20, 'DIRECT COOL', 475),
(12, 20, 'FROST FREE(UPTO 400Ltrs)', 475),
(13, 20, 'GENERAL SERVICE', 950),
(14, 21, 'DIRECT COOL', 2000),
(15, 21, 'FROST FREE(UPTO 400Ltrs)', 2),
(16, 29, 'BHK', 1900),
(17, 30, 'BHK', 3600),
(18, 30, 'WATER TANK/500Ltrs', 750),
(19, 31, 'SEATER SOFA', 1500),
(20, 32, 'BATHROOM', 1000),
(21, 33, 'KITCHEN', 2000),
(22, 65, 'BHK', 3190),
(23, 43, 'LIGHTS REPAIR', 250),
(24, 43, 'LIGHTS INSTALLATION', 250),
(25, 43, 'FANCY LIGHT', 250),
(26, 43, 'CHANDLIER', 500);

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
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professionals`
--
ALTER TABLE `professionals`
  ADD PRIMARY KEY (`pro_id`);

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
-- AUTO_INCREMENT for table `professionals`
--
ALTER TABLE `professionals`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `sub_child_categories`
--
ALTER TABLE `sub_child_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
