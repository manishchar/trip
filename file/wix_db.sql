-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 08:56 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wix_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `mailing_address` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalzip` varchar(255) NOT NULL,
  `country_crovince` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trip_table`
--

CREATE TABLE `trip_table` (
  `id` int(11) NOT NULL,
  `trip_title` varchar(255) NOT NULL,
  `trip_description` varchar(255) NOT NULL,
  `trip_start_date` varchar(255) NOT NULL,
  `trip_end_date` varchar(255) NOT NULL,
  `trip_Extra_date` varchar(255) NOT NULL,
  `person_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `hohel_price` varchar(255) NOT NULL,
  `day_count` varchar(255) NOT NULL,
  `picup_price` varchar(255) NOT NULL,
  `drop_off_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_booking`
--

CREATE TABLE `user_booking` (
  `user_id` int(255) NOT NULL,
  `trip_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`) VALUES
(1, 'aasadd', 'xcvcxvcx', '4535456', 'r@gmail.com', '96ab819014b7811509905fe9dff460e9'),
(2, 'aasadd', 'xcvcxvcx', '4535456', 'r@gmail.com', '96ab819014b7811509905fe9dff460e9'),
(3, 'aasadd', 'xcvcxvcx', '4535456', 'r@gmail.com', '96ab819014b7811509905fe9dff460e9'),
(4, 'aasadd', 'xcvcxvcx', '4535456', 'r@gmail.com', '96ab819014b7811509905fe9dff460e9'),
(5, 'aasadd', 'xcvcxvcx', '4535456', 'r@gmail.com', '96ab819014b7811509905fe9dff460e9'),
(6, 'name', 'sdfdgd', '4535456', 'ram@gmail.com', '81499bcca963c76a4a7e2107fc18fc57'),
(7, 'name', 'sdfdgd', '4535456', 'ram@gmail.com', '81499bcca963c76a4a7e2107fc18fc57'),
(8, 'name', 'sdfdgd', '4535456', 'ram@gmail.com', '81499bcca963c76a4a7e2107fc18fc57'),
(9, 'afvvv', 'hgj', '15313513', 'm@gmail.com2', 'b34da9685b61d3561d60d33f4c8c2d08'),
(10, 'arvind', 'lodhi', '54564645', 'ad10@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `user_payment_history`
--

CREATE TABLE `user_payment_history` (
  `payment_id` int(11) NOT NULL,
  `trip_name` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_table`
--
ALTER TABLE `trip_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_booking`
--
ALTER TABLE `user_booking`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payment_history`
--
ALTER TABLE `user_payment_history`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trip_table`
--
ALTER TABLE `trip_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_booking`
--
ALTER TABLE `user_booking`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_payment_history`
--
ALTER TABLE `user_payment_history`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
