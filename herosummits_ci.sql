-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 07:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin', '7047936671', 'admin12@gmail.com', '123456', '');

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

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `email`, `phone`, `passport`, `mailing_address`, `dob`, `city`, `postalzip`, `country_crovince`, `state`) VALUES
(1, 'aa@gmai.com', '446464646', 'fg4544 bhopal', 'saa@yahoo.com', '14/05/1998', 'bhopal', 'hbd456', '*91', 'mp');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `ckeck_id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `pob` varchar(255) NOT NULL,
  `passport_number` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `expiration` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`ckeck_id`, `firstName`, `lastName`, `email`, `phone`, `title`, `fName`, `middlename`, `lName`, `dob`, `pob`, `passport_number`, `nationality`, `expiration`, `address`, `address2`, `country`, `state`, `zip`) VALUES
(1, 'rahul', 'rahul', 'r@gmail.com', '9827205908', 'Mrs', 'rahul', 'rahul', 'rahul', '0000-00-00', '123456', '123456', 'United States', '123456', 'rahul', 'rahul', 'United States', 'California', '123'),
(3, 'rahul', 'rahul', 'r@gmail.com', '8959169077', 'Mr', 'rahul', 'rahul', 'rahul', '0000-00-00', '123456', '123456', 'United States', '123456', 'rahul', 'rahul', 'United States', 'California', '123456'),
(4, 'rahul', 'rahul', 'r@gmail.com', '8959169077', 'Mr', 'rahul', 'rahul', 'rahul', '0000-00-00', '123456', '123456', 'United States', '123456', 'rahul', 'rahul', 'United States', 'California', '123456'),
(5, 'rahul', 'rahul', 'r@gmail.com', '9827205908', 'Mrs', 'rahul', 'rahul', 'rahul', '0000-00-00', '123456', '123456', 'United States', '123456', 'rahul', 'rahul', 'United States', 'California', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'rahul', 'rahulharode01@gmail.com', 'goto bhopal', 'the html bhopal'),
(25, 'arvind', 'krishna@gmail.com', 'local', 'hello');

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
  `trip_extra_date` varchar(255) NOT NULL,
  `person_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `hotel_price` varchar(255) NOT NULL,
  `day_count` varchar(255) NOT NULL,
  `picup_price` varchar(255) NOT NULL,
  `drop_off_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip_table`
--

INSERT INTO `trip_table` (`id`, `trip_title`, `trip_description`, `trip_start_date`, `trip_end_date`, `trip_extra_date`, `person_price`, `image`, `hotel_price`, `day_count`, `picup_price`, `drop_off_price`) VALUES
(2, 'fdgdfggd', '                       ', '', '', '', '', '55.jpg', '  ', '', '', ''),
(4, 'fdgdfggd', '                       ', '', '', '', '', '55.jpg', '  ', '', '', ''),
(5, 'fdgdfggd', '                       gff', '', '', '', '', '56.jpg', '   ', '', '', ''),
(6, 'fdgdfggd', '                       ', '', '', '', '', '55.jpg', '  ', '', '', ''),
(7, 'fdgdfggd', '                       ', '', '', '', '', '55.jpg', '  ', '', '', ''),
(8, 'fdgdfggd', '                       ', '', '', '', '', '55.jpg', '  ', '', '', ''),
(9, 'fdgdfggd', '                       ', '', '', '', '', '55.jpg', '  ', '', '', '');

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
(1, 'arvind', 'lodhi', '9993967305', 'adlodhi10061995@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

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
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`ckeck_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `trip_table`
--
ALTER TABLE `trip_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `ckeck_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `trip_table`
--
ALTER TABLE `trip_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
