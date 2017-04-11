-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 12:24 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dasaac`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_name`) VALUES
(1, 'FIRST CLASS'),
(2, 'STANDARD HOTEL'),
(3, 'STANDARD HOTEL');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `CONTACT_ID` int(11) NOT NULL,
  `NATURE` varchar(20) NOT NULL,
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(20) DEFAULT NULL,
  `SEX` varchar(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `MESSAGE` varchar(255) DEFAULT NULL,
  `REQUEST_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`CONTACT_ID`, `NATURE`, `FIRSTNAME`, `LASTNAME`, `SEX`, `EMAIL`, `PHONE`, `MESSAGE`, `REQUEST_DATE`) VALUES
(7, 'enquiry', 'Abiola', 'Bello', 'female', 'abiola.bello@hotmail.com', '7036264305', 'please tell me more about what you do?', '2017-04-07 03:30:20'),
(8, 'complaint', 'Bunmi', 'Afolabi', 'female', 'yao@nit.com.ng', '08065644552', 'please tell me about your company', '2017-04-09 00:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `dasaac_user`
--

CREATE TABLE `dasaac_user` (
  `USERID` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `STATUS` varchar(2) NOT NULL,
  `USERTYPE` int(1) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dasaac_user`
--

INSERT INTO `dasaac_user` (`USERID`, `USERNAME`, `PASSWORD`, `STATUS`, `USERTYPE`, `PHONE`, `EMAIL`, `CREATED_DATE`, `CREATED_BY`) VALUES
(1, 'alex', '534b44a19bf18d20b71ecc4eb77c572f', '0', 0, '', '', '2017-04-06 16:56:39', ''),
(5, 'bayl', 'f99eb9c256be44104d37aefaf7a0fc62', '1', 1, '08065644552', 'yao@nit.com.ng', '2017-04-08 14:11:52', 'alex');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Date_Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flightreservation`
--

CREATE TABLE `flightreservation` (
  `ID` int(22) NOT NULL,
  `TITLE` varchar(5) DEFAULT NULL,
  `SURNAME` varchar(20) NOT NULL,
  `OTHERNAME` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `FLIGHTTYPE` varchar(20) NOT NULL,
  `FLIGHTCLASS` varchar(20) NOT NULL,
  `DEPARTURE` varchar(20) NOT NULL,
  `DESTINATION` varchar(20) NOT NULL,
  `DEPARTURE_DATE` datetime NOT NULL,
  `ARRIVAL_DATE` datetime NOT NULL,
  `ADULT` varchar(3) NOT NULL,
  `CHILDREN` varchar(3) NOT NULL,
  `INFANT` varchar(3) NOT NULL,
  `BOOKING_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` varchar(10) NOT NULL DEFAULT 'BOOKED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightreservation`
--

INSERT INTO `flightreservation` (`ID`, `TITLE`, `SURNAME`, `OTHERNAME`, `EMAIL`, `FLIGHTTYPE`, `FLIGHTCLASS`, `DEPARTURE`, `DESTINATION`, `DEPARTURE_DATE`, `ARRIVAL_DATE`, `ADULT`, `CHILDREN`, `INFANT`, `BOOKING_DATE`, `STATUS`) VALUES
(1, 'mr', 'bello', 'abi', 'abiola.bello@hotmail.com', 'Round Trip', 'Economy', 'lagos', 'london', '2017-04-05 00:00:00', '2017-04-29 00:00:00', '1', '0', '0', '0000-00-00 00:00:00', 'BOOKED'),
(2, 'mr', '', '', '', 'Round Trip', 'Economy', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '0', '0', '0000-00-00 00:00:00', 'BOOKED'),
(3, 'mrs', 'abiola', 'Bello', 'blue@blueprint.com', 'Round Trip', 'Economy', 'lagos', 'london', '2017-04-03 00:00:00', '0000-00-00 00:00:00', '1', '0', '0', '0000-00-00 00:00:00', 'BOOKED'),
(4, 'ms', 'abiola', 'Abiola', 'bt@pr.com', 'Round Trip', 'Economy', 'usa', 'canada', '2017-04-19 00:00:00', '0000-00-00 00:00:00', '1', '0', '0', '0000-00-00 00:00:00', 'BOOKED'),
(5, 'mr', 'bello', 'Abiola', 'abiola.bello@hotmail.com', 'Round Trip', 'Economy', 'lagos', 'london', '2017-04-04 00:00:00', '0000-00-00 00:00:00', '1', '0', '0', '0000-00-00 00:00:00', 'BOOKED'),
(6, 'mr', 'bode', 'abodurin', 'yao@nit.com.ng', 'One Way', 'Business', 'lagos', 'China', '2017-04-02 00:00:00', '0000-00-00 00:00:00', '1', '2', '2', '0000-00-00 00:00:00', 'BOOKED'),
(7, 'ms', 'Ijeoma', 'Collins', 'blue@blueprint.com', 'Multi-segment', 'First', 'Portugal', 'Spain', '2017-04-09 00:00:00', '0000-00-00 00:00:00', '2', '1', '0', '2017-04-08 06:09:36', 'BOOKED'),
(8, 'mr', 'bode', 'madi', 'flash@nt.com.ng', 'Round Trip', 'Economy', 'usa', 'canada', '2017-04-02 00:00:00', '0000-00-00 00:00:00', '1', '0', '0', '2017-04-08 06:11:32', 'BOOKED'),
(9, 'mr', 'abiola', 'Bello', 'abiola.bello@hotmail.com', 'One Way', 'First', 'lagos', 'canada', '2017-04-09 00:00:00', '2017-04-29 00:00:00', '1', '0', '0', '2017-04-08 06:20:16', 'BOOKED'),
(10, 'mrs', 'Ijeoma', 'Maxiwell', 'flash@nt.com.ng', 'One Way', 'Business', 'Duubai', 'Australia', '2017-04-16 00:00:00', '2017-04-28 00:00:00', '1', '0', '0', '2017-04-08 19:12:41', 'BOOKED'),
(11, 'ms', 'Ijeoma', 'Bello', 'yao@nit.ng', 'Multi-segment', 'Business', 'Portugal', 'canada', '2017-04-09 00:00:00', '2017-04-22 00:00:00', '1', '2', '0', '2017-04-10 11:45:28', 'BOOKED');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `ID` int(11) NOT NULL,
  `SURNAME` varchar(20) NOT NULL,
  `OTHERNAME` varchar(20) NOT NULL,
  `HOTELTYPE` varchar(20) NOT NULL,
  `CHECKIN_DATE` datetime NOT NULL,
  `CHECKOUT_DATE` datetime NOT NULL,
  `OCCUPANT` varchar(20) NOT NULL,
  `LOCATION` varchar(50) NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `BOOKING_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` varchar(10) NOT NULL DEFAULT 'BOOKED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`ID`, `SURNAME`, `OTHERNAME`, `HOTELTYPE`, `CHECKIN_DATE`, `CHECKOUT_DATE`, `OCCUPANT`, `LOCATION`, `CATEGORY`, `EMAIL`, `BOOKING_DATE`, `STATUS`) VALUES
(1, 'Abiola', 'Bello', 'Apartment', '2017-04-13 00:00:00', '2017-04-14 00:00:00', '3', 'North', 'Luxury Hotel', 'abiola.bello@hotmail.com', '2017-04-24 23:00:00', 'BOOKED'),
(2, 'Bello', 'Abiola', 'Apartment', '2017-04-28 00:00:00', '2017-04-29 00:00:00', '3', 'South', 'Standard Hotel', 'abiola.bello@hotmail.com', '2017-04-21 23:00:00', 'BOOKED'),
(3, 'Bello', 'Abiola', 'Apartment', '2017-04-27 00:00:00', '2017-04-20 00:00:00', '1', 'East', 'Luxury Hotel', 'abiola.bello@hotmail.com', '2017-04-19 23:00:00', 'BOOKED'),
(4, 'Bello', 'Abiola', 'Apartment', '2017-04-11 00:00:00', '2017-04-13 00:00:00', '1', 'Down Town', 'Luxury Hotel', 'abiola.bello@hotmail.com', '2017-04-10 23:00:00', 'BOOKED'),
(5, 'Bello', 'Abiola', 'Apartment', '2017-04-03 00:00:00', '2017-04-03 00:00:00', '4', 'East', 'Luxury Hotel', 'abiola.bello@hotmail.com', '2017-04-15 23:00:00', 'BOOKED'),
(6, 'alex', 'Mmgbo', 'City/Airport', '2017-04-18 00:00:00', '2017-04-28 00:00:00', '4', 'Resort', 'Tourist Hotel', 'abiola.bello@hotmail.com', '0000-00-00 00:00:00', 'BOOKED'),
(7, 'alex', 'Mmgbo', 'City/Airport', '2017-04-18 00:00:00', '2017-04-28 00:00:00', '4', 'Resort', 'Tourist Hotel', 'abiola.bello@hotmail.com', '2017-04-13 23:00:00', 'BOOKED'),
(8, 'Abiola', 'Bello', 'Apartment', '2017-04-16 00:00:00', '2017-04-22 00:00:00', '4', 'Airport', 'Tourist Hotel', 'abiola.bello@hotmail.com', '2017-04-10 12:41:56', 'BOOKED'),
(9, 'Abiola', 'Bello', 'Apartment', '2017-04-16 00:00:00', '2017-04-22 00:00:00', '4', 'Airport', 'Tourist Hotel', 'abiola.bello@hotmail.com', '2017-04-10 12:42:11', 'BOOKED');

-- --------------------------------------------------------

--
-- Table structure for table `hotelmanager`
--

CREATE TABLE `hotelmanager` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Loc_id` int(2) DEFAULT NULL,
  `cat_id` int(2) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelmanager`
--

INSERT INTO `hotelmanager` (`ID`, `Name`, `Loc_id`, `cat_id`, `price`, `address`) VALUES
(1, 'FOURPOINT HOTEL', 1, 1, 5000, 'FOUR POINT SQUARE LEKKI ROAD'),
(2, 'SHERATON HOTEL', 1, 1, 500000, '145 Mobolaji bank Anthony way'),
(3, 'EKO HOTEL', 3, 1, 1000000, '15 ademola adetokunbo street');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` varchar(10) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_desc` varchar(255) NOT NULL,
  `loc_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `job_desc`, `loc_id`, `cat_id`, `id`, `date_posted`) VALUES
('DASAAC001', 'Accounting Manager', 'Accountant is responsible for money transactions', 2, 1, 1, '2017-04-08 06:05:18'),
('Dasaac002', 'Senior Developer', 'He/She will be responsible for app development.', 2, 2, 2, '2017-04-08 06:05:18'),
('Dasaac004', 'HTML DEVELOPER', 'he will develop html page with javascript, ajax etc.', 1, 2, 4, '2017-04-08 06:05:18'),
('Dasaac005', 'web Design', 'hthkjghhrgvsbjkfdhbgfhjkb,sdghhfbghfbjf', 1, 2, 5, '2017-04-08 14:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`cat_id`, `cat_name`) VALUES
(1, 'Accounting'),
(2, 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `loc_id` int(11) NOT NULL,
  `location_name` varchar(50) NOT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `location_name`, `state`, `country`) VALUES
(1, 'LEKKI', 'LAGOS', 'NIGERIA'),
(2, 'IKOYI', 'LAGOS', 'NIGERIA'),
(3, 'VI', 'LAGOS', 'NIGERIA');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `NEWSLETTER_ID` int(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `REQUEST_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`NEWSLETTER_ID`, `EMAIL`, `REQUEST_DATE`) VALUES
(10, 'bellab04@yahoo.com', '2017-04-08 18:58:02'),
(11, 'bellab04@yahoo.com', '2017-04-08 18:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `createdBy` varchar(50) NOT NULL,
  `createdDate` datetime NOT NULL,
  `price` int(5) NOT NULL,
  `THEMES` varchar(20) NOT NULL,
  `PRICEs` varchar(20) NOT NULL,
  `DESTINATION` varchar(20) NOT NULL,
  `BOOKING_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `createdBy`, `createdDate`, `price`, `THEMES`, `PRICEs`, `DESTINATION`, `BOOKING_DATE`) VALUES
(1, 'Nigeria', 'Dassac', '2017-04-02 03:07:07', 500, '', '', '', '2017-04-10 10:28:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`CONTACT_ID`);

--
-- Indexes for table `dasaac_user`
--
ALTER TABLE `dasaac_user`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `flightreservation`
--
ALTER TABLE `flightreservation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hotelmanager`
--
ALTER TABLE `hotelmanager`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_id` (`job_id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`NEWSLETTER_ID`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `CONTACT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dasaac_user`
--
ALTER TABLE `dasaac_user`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `flightreservation`
--
ALTER TABLE `flightreservation`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hotelmanager`
--
ALTER TABLE `hotelmanager`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `NEWSLETTER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
