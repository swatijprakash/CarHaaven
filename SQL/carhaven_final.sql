-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 04:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carhaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `a_pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_pass`) VALUES
(1, 'admin2', 'admin123'),
(2, 'admin3', 'admin123'),
(3, 'admin4', 'admin123'),
(4, 'admin1', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(5) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `first_name`, `email`, `subject`, `message`) VALUES
(1, 'test', 'test@gmail.com', 'testmsg', 'this is a test msg.'),
(14, 'abc', 'abc@gmail.com', 'qwerty', 'asdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_mob` bigint(11) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_uname` varchar(50) NOT NULL,
  `cust_pass` varchar(25) NOT NULL,
  `car_model` varchar(50) NOT NULL,
  `car_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_mob`, `cust_email`, `cust_uname`, `cust_pass`, `car_model`, `car_no`) VALUES
(123, 9809107986, 'swati@gmail.com', 'swati', 'swa123', 'Hyundai Verna', 'KL52L3979'),
(124, 9876543210, 'lincy@gmail.com', 'lincy', 'lincy123', 'maruti', 'kl12d987'),
(125, 9376219032, 'sagar@gmail.com', 'sagar', 'sagar789', 'fortuner', 'kl2368'),
(126, 9876543210, 'arun@gmail.com', 'arun', 'arun333', 'i20', 'kl35f4321'),
(127, 6724531489, 'jomon@gmail.com', 'jomon', 'jomon', 'kwid', 'kl564'),
(128, 5465432198, 'ranjith@gmail.com', 'ranjith', 'ranjith234', 'benz', 'kl56564'),
(129, 7189365490, 'rincy@gmail.com', 'rincy', 'rincy456', 'audi', 'kl482745'),
(130, 9287345893, 'jisa@gmail.com', 'jisa', 'jisa123', 'benz', 'kl4753'),
(131, 7261589034, 'unni@gmail.com', 'unnimaya', 'unnimaya673', 'xuv', 'kl78653'),
(132, 7536254189, 'binu@gmail.com', 'binu', 'binu123', 'wagnr', 'kl3422'),
(133, 8365289012, 'anu@gmail.com', 'anu', 'anu345', 'i10', 'kl25368'),
(134, 9287345893, 'sajin@gmaiil.com', 'sajin', 'sajin34576', 'lambhourgini', 'kl23234'),
(135, 8954132895, 'sini@gmail.com', 'sini', 'sini456', 'swift', 'kl25642'),
(136, 9087364521, 'athira@gmail.com', 'athira', 'athira234', 'nano', 'kl234'),
(137, 8736524131, 'jeena@gmail.com', 'jeena', 'jeena452', 'alto', 'kl345'),
(138, 6534267812, 'mincy@gmail.com', 'mincy', 'mincy123', 'lambhourgini', 'kl564'),
(139, 6754329876, 'jeeshma@gmail.com', 'jeeshma', 'jeeshma456', 'ferrari', 'kl345'),
(140, 8745632541, 'soniya@gmail.com', 'soniya', 'soniya234', 'innovo', 'kl23452'),
(141, 5790876432, 'anik@gmail.com', 'anik', 'anik234', 'benz', 'kl234'),
(142, 8765432198, 'nikhil@gmail.com', 'nikhil', 'nikhil123', 'nano', 'kl652'),
(143, 6543128987, 'adarsh@gmail.com', 'adarsh', 'adarsh23476', 'chevrolet', 'kl764'),
(144, 2431567498, 'abc@gmail.com', 'abc', 'abc', 'maruthi', 'rl118');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `odr_id` int(11) NOT NULL,
  `odr_cust_name` varchar(50) NOT NULL,
  `odr_car_no` varchar(20) NOT NULL,
  `odr_part_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`odr_id`, `odr_cust_name`, `odr_car_no`, `odr_part_name`) VALUES
(466, 'swati', 'KL52L3979', 'Radiator ,Clutch '),
(467, 'swati', 'KL52L3979', 'A/C Comprossor ,Breaks ,Fual injuctor '),
(468, 'swati', 'KL52L3979', 'Air Filter ,Alternator '),
(469, 'abc', 'rl118', 'Clutch ,Car Jack ,A/C Comprossor '),
(470, 'swati', 'KL52L3979', 'Radiator ,Car Jack ');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `part_id` int(11) NOT NULL,
  `part_name` varchar(50) NOT NULL,
  `part_cost` int(10) NOT NULL,
  `serve_charge` int(10) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `availability` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`part_id`, `part_name`, `part_cost`, `serve_charge`, `stock`, `availability`) VALUES
(201, 'Radiator', 2000, 400, 'In-Stock', 'Yes'),
(202, 'Engine Fan', 580, 200, 'Out-Of-Stock', ''),
(203, 'Clutch', 2800, 700, 'In-Stock', 'Yes'),
(204, 'Car Jack', 200, 80, 'In-Stock', 'Yes'),
(205, 'Battery', 3000, 800, 'In-Stock', 'Yes'),
(206, 'Piston', 300, 120, 'Out-Of-Stock', ''),
(207, 'A/C Comprossor', 800, 260, 'In-Stock', 'Yes'),
(208, 'Breaks', 400, 160, 'In-Stock', 'Yes'),
(209, 'Fuel injuctor', 3500, 1200, 'In-Stock', 'Yes'),
(210, 'Shock Abscrbars', 200, 80, 'Out-Of-Stock', ''),
(211, 'Transmission', 800, 200, 'In-Stock', 'Yes'),
(212, 'Spare Tire', 2740, 1300, 'In-Stock', 'Yes'),
(213, 'Spark Plug', 685, 260, 'In-Stock', 'Yes'),
(214, 'Catalytic Convertor', 3900, 1670, 'Out-Of-Stock', ''),
(215, 'Mottor', 2050, 680, 'In-Stock', 'Yes'),
(216, 'Air Filter', 170, 80, 'In-Stock', 'Yes'),
(217, 'Spark Plug', 685, 360, 'In-Stock', 'Yes'),
(218, 'Alternator', 2800, 1690, 'In-Stock', 'yes'),
(219, 'Power Storing Fluid', 340, 90, 'In-Stock', 'Yes'),
(220, 'Tire Pressure Gauge', 650, 260, 'Out-Of-Stock', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_cust_name` varchar(50) NOT NULL,
  `service_car_no` varchar(20) NOT NULL,
  `problems_reported` varchar(200) NOT NULL,
  `parts` varchar(30) NOT NULL,
  `service_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_cust_name`, `service_car_no`, `problems_reported`, `parts`, `service_type`) VALUES
(301, 'swati', 'KL52L3979', 'oil change', 'tyre', 'general'),
(302, 'swati', 'KL52L3979', 'engine tuning\r\ncleaning\r\nac', 'break pads', 'special'),
(303, 'swati', 'KL52L3979', 'break pads\r\nac', 'battery', 'general'),
(304, 'abc', 'rl118', 'a/c', '', 'general'),
(305, 'swati', 'KL52L3979', 'a/c', 'evaporater', 'general');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `cust_email` (`cust_email`),
  ADD UNIQUE KEY `cust_uname` (`cust_uname`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`odr_id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`part_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `odr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=471;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
