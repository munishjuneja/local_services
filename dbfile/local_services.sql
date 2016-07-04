-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2016 at 10:27 PM
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
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
  `pro_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`pro_id`, `service_id`, `name`, `contact`, `status`) VALUES
(1, 1, 'example', 123456789, 0),
(2, 2, 'example2', 789456123, 0),
(3, 3, 'example3', 124567893, 0);

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
(15, 'CLEANING', '', 'img/icons/cleaning.jpg'),
(16, 'COMPUTER REPAIRING', '', 'img/icons/comprep.png'),
(17, 'ELECTRICAL', '', 'img/icons/Electrical.png'),
(18, 'LAUNDRY', '', 'img/icons/laundry.jpg'),
(19, 'PAINTING', '', 'img/icons/Painting.png'),
(20, 'PLUMBING', '', 'img/icons/plumbing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `sub_category_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `imgurl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `service_id`, `sub_category_name`, `description`, `imgurl`) VALUES
(15, 13, 'AC INSTALLATION', 'description goes here', '/images/fr.png'),
(16, 13, 'AC UNINSTALLATION', 'description goes here', '/images/fr.png'),
(17, 13, 'AC SERVICING', 'description goes here', '/images/fr.png'),
(18, 13, 'WASHING MACHINE REPAIRING', 'description goes here', '/images/fr.png'),
(19, 13, 'OVEN REPAIR', 'description goes here', '/images/fr.png'),
(20, 13, 'FRIDGE REPAIRING', 'description goes here', '/images/fr.png'),
(21, 13, 'FRIDGE GAS CHARGING', 'description goes here', '/images/fr.png'),
(22, 14, 'first sub category', 'description goes here', '/images/fr.png'),
(23, 14, 'second sub category', 'description goes here', '/images/fr.png'),
(24, 14, 'General Carpentry', 'description goes here', '/images/fr.png'),
(25, 14, 'FURNITURE  REPAIR', 'description goes here', '/images/fr.png'),
(26, 14, 'DOOR OR  WINDOW REPAIR', 'description goes here', '/images/fr.png'),
(27, 14, 'CURTAIN ROLL FIXTURE', 'description goes here', '/images/fr.png'),
(28, 14, 'LOCK REPAIR', 'description goes here', '/images/fr.png'),
(29, 15, 'EXPRESS CLEANING', 'description goes here', '/images/fr.png'),
(30, 15, 'DEEP HOME CLEANING', 'description goes here', '/images/fr.png'),
(31, 15, 'SOFA SHAMPOOING', 'description goes here', '/images/fr.png'),
(32, 15, 'BATHROOM CLEANING ', 'description goes here', '/images/fr.png'),
(33, 15, 'KITCHEN CLEANING', 'description goes here', '/images/fr.png'),
(34, 15, 'CLEANING INSPECTION', 'description goes here', '/images/fr.png'),
(35, 16, 'COMPUTER REPAIR & SERVICES  DELL', 'description goes here', '/images/fr.png'),
(36, 16, 'COMPUTER REPAIR & SERVICES  HCL', 'description goes here', '/images/fr.png'),
(37, 16, 'COMPUTER REPAIR & SERVICES ACER', 'description goes here', '/images/fr.png'),
(38, 16, 'COMPUTER REPAIR & SERVICES SONY', 'description goes here', '/images/fr.png'),
(39, 16, 'COMPUTER REPAIR & SERVICES ASUS', 'description goes here', '/images/fr.png'),
(40, 16, 'COMPUTER REPAIR & SERVICES INTEL', 'description goes here', '/images/fr.png'),
(41, 16, 'COMPUTER REPAIR & SERVICES VAIO', 'description goes here', '/images/fr.png'),
(42, 16, 'COMPUTER REPAIR & SERVICES MAC', 'description goes here', '/images/fr.png'),
(43, 17, 'LIGHTS & FITTINGS', 'description goes here', '/images/fr.png'),
(44, 17, 'FANS', 'description goes here', '/images/fr.png'),
(45, 17, 'PLUG AND SWITCH', 'description goes here', '/images/fr.png'),
(46, 17, 'TV AND ENTERTAINMENT', 'description goes here', '/images/fr.png'),
(47, 17, '', 'description goes here', '/images/fr.png'),
(48, 17, 'UPS', 'description goes here', '/images/fr.png'),
(49, 17, 'GENERAL ELECTRICAL SERVICES', 'description goes here', '/images/fr.png'),
(50, 18, 'WASH AND FOLD', 'description goes here', '/images/fr.png'),
(51, 18, 'WASH AND IRON', 'description goes here', '/images/fr.png'),
(52, 18, 'PREMIUM LAUNDRY', 'description goes here', '/images/fr.png'),
(53, 18, 'DRY CLEAN', 'description goes here', '/images/fr.png'),
(54, 19, 'INTERIOR FRESH PAINTING', 'description goes here', '/images/fr.png'),
(55, 19, 'INTERIOR RE-PAINTING', 'description goes here', '/images/fr.png'),
(56, 19, 'EXTERIOR FRESH-PAINTING', 'description goes here', '/images/fr.png'),
(57, 19, 'EXTERIOR RE-PAINTING', 'description goes here', '/images/fr.png'),
(58, 19, 'WOOD POLISHING', 'description goes here', '/images/fr.png'),
(59, 20, 'LEAKS AND BLOCKS', 'description goes here', '/images/fr.png'),
(60, 20, 'TAPS AND SHOWERS', 'description goes here', '/images/fr.png'),
(61, 20, 'TOILET FITTINGS', 'description goes here', '/images/fr.png'),
(62, 20, 'ACCESSORIES', 'description goes here', '/images/fr.png'),
(63, 20, 'GENERAL PLUMBING SERVICES', 'description goes here', '/images/fr.png'),
(64, 15, 'MOVE ', 'description goes here', '/images/fr.png'),
(65, 15, 'MOVE IN CLEANING', 'description goes here', '/images/fr.png');

-- --------------------------------------------------------

--
-- Table structure for table `sub_child_categories`
--

CREATE TABLE `sub_child_categories` (
  `id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `sub_child_category_name` varchar(100) NOT NULL,
  `rate` double NOT NULL,
  `imgurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_child_categories`
--

INSERT INTO `sub_child_categories` (`id`, `sub_category_id`, `sub_child_category_name`, `rate`, `imgurl`) VALUES
(1, 15, 'WINDOW AC', 650, '/images/fr.png'),
(2, 15, 'SPLIT AC', 900, '/images/fr.png'),
(3, 16, 'SPLIT AC', 900, '/images/fr.png'),
(4, 16, 'WINDOW AC', 650, '/images/fr.png'),
(5, 17, 'WINDOW AC', 500, '/images/fr.png'),
(6, 17, 'SPLIT AC', 900, '/images/fr.png'),
(7, 18, 'FULLY AUTOMATIC ', 450, '/images/fr.png'),
(8, 18, 'SEMI-AUTOMATIC', 9, '/images/fr.png'),
(9, 18, 'FRONT LOADING ', 550, '/images/fr.png'),
(10, 19, 'CONVECTION/GRILL', 450, '/images/fr.png'),
(11, 20, 'DIRECT COOL', 475, '/images/fr.png'),
(12, 20, 'FROST FREE(UPTO 400Ltrs)', 475, '/images/fr.png'),
(13, 20, 'GENERAL SERVICE', 950, '/images/fr.png'),
(14, 21, 'DIRECT COOL', 2000, '/images/fr.png'),
(15, 21, 'FROST FREE(UPTO 400Ltrs)', 2, '/images/fr.png'),
(16, 29, 'BHK', 1900, '/images/fr.png'),
(17, 30, 'BHK', 3600, '/images/fr.png'),
(18, 30, 'WATER TANK/500Ltrs', 750, '/images/fr.png'),
(19, 31, 'SEATER SOFA', 1500, '/images/fr.png'),
(20, 32, 'BATHROOM', 1000, '/images/fr.png'),
(21, 33, 'KITCHEN', 2000, '/images/fr.png'),
(22, 65, 'BHK', 3190, '/images/fr.png'),
(23, 43, 'LIGHTS REPAIR', 250, '/images/fr.png'),
(24, 43, 'LIGHTS INSTALLATION', 250, '/images/fr.png'),
(25, 43, 'FANCY LIGHT', 250, '/images/fr.png'),
(26, 43, 'CHANDLIER', 500, '/images/fr.png');

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
  `sub_child_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `service_address` text NOT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `main_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `user_id`, `sub_child_id`, `status`, `service_address`, `sub_id`, `main_id`) VALUES
(1, 2, 2, 0, '1234 qwert asdfg 12345', NULL, NULL),
(2, 2, 1, 1, '', 15, 13),
(3, 2, 1, 0, 'address', 15, 13),
(4, 2, 1, 0, 'address', 15, 13),
(5, 2, 1, 0, '7733 7766 KSL 663363', 15, 13),
(6, 2, 1, 0, '67 kjhjh jhjkhkj 676766', 15, 13);

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
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sub_child_categories`
--
ALTER TABLE `sub_child_categories`
  ADD CONSTRAINT `sub_child_categories_ibfk_1` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
