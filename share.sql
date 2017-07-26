-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 05:18 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `share`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `name`, `date`) VALUES
(1, 'Aldea Espanola', '2017-07-19 14:39:38'),
(2, 'Bella Casa', '2017-07-19 14:39:38'),
(3, 'SIT', '2017-07-19 14:40:39'),
(4, 'Shantiniketan', '2017-07-19 14:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `rideinfo`
--

CREATE TABLE `rideinfo` (
  `rideinfo_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `pdate` varchar(30) NOT NULL,
  `ptime` varchar(30) NOT NULL,
  `vechile_type` varchar(20) NOT NULL,
  `capacity` int(2) NOT NULL,
  `additional_details` varchar(120) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rideinfo`
--

INSERT INTO `rideinfo` (`rideinfo_id`, `from_id`, `to_id`, `userid`, `pdate`, `ptime`, `vechile_type`, `capacity`, `additional_details`, `post_time`) VALUES
(1, 4, 3, 4, '25 July, 2017', '05:25PM', 'Car', 2, 'MP 43 RRR', '2017-07-25 13:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `first_name`, `last_name`, `mobile`, `password`, `date_register`) VALUES
(4, 'Sammer', 'Khan', 123456, '123456', '2017-07-15 13:18:57'),
(5, 'Mohit', 'barfa', 9179686919, 'mohit', '2017-07-23 17:47:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `rideinfo`
--
ALTER TABLE `rideinfo`
  ADD PRIMARY KEY (`rideinfo_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rideinfo`
--
ALTER TABLE `rideinfo`
  MODIFY `rideinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
