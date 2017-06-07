-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 09:57 AM
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
-- Table structure for table `brochure`
--

CREATE TABLE `brochure` (
  `ID` int(11) NOT NULL,
  `brochureid` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL,
  `createdby` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `publishedby` varchar(100) NOT NULL,
  `publish_date` datetime NOT NULL,
  `description` varchar(255) NOT NULL,
  `pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brochure`
--

INSERT INTO `brochure` (`ID`, `brochureid`, `Name`, `path`, `createdby`, `created_date`, `status`, `publishedby`, `publish_date`, `description`, `pdf`) VALUES
(2, 'Singapore001', 'Singapore Tour', 'broch1.jpg', 'alex', '2017-06-04 01:09:35', 'published', 'alex', '2017-06-04 01:09:44', 'Tour of Singapore for best of enjoyments', ''),
(3, 'Honeymooner', 'Honeymoon Vacation', 'broch5.jpg', 'alex', '2017-06-04 01:46:13', 'published', 'alex', '2017-06-04 01:49:39', 'together forever', ''),
(4, 'Honeymooner001', 'Honeymoon Vacation', 'Test_Invitation_08-Dec-2016.pdf', 'alex', '2017-06-04 03:10:29', 'published', 'alex', '2017-06-04 03:46:58', '', ''),
(5, 'Safari001', 'ddddd', 'broch3.jpg', 'alex', '2017-06-04 03:44:29', 'published', 'alex', '2017-06-04 03:46:55', '', 'Implementing_a_Simple_Web_Service.pdf');

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
  `OTHERNAME` varchar(50) DEFAULT NULL,
  `SEX` varchar(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `MESSAGE` varchar(255) DEFAULT NULL,
  `REQUEST_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`CONTACT_ID`, `NATURE`, `FIRSTNAME`, `LASTNAME`, `OTHERNAME`, `SEX`, `EMAIL`, `PHONE`, `MESSAGE`, `REQUEST_DATE`) VALUES
(7, 'enquiry', 'Abiola', 'Bello', NULL, 'female', 'abiola.bello@hotmail.com', '7036264305', 'please tell me more about what you do?', '2017-04-07 03:30:20'),
(9, 'enquiry', 'Zainab', 'Adebayo', NULL, 'female', 'abiola.bello@hotmail.com', '07036317484', 'I want to book a flight to mecca', '2017-04-17 02:23:28'),
(10, 'complaint', 'Abiola', 'Bello', NULL, 'Male', 'abiola.bello@hotmail.com', '+2347036264305', 'wwwwwwwwwwwwwwww', '2017-06-03 09:00:01');

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
  `deal_id` varchar(60) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) NOT NULL,
  `path` varchar(200) CHARACTER SET utf8 NOT NULL,
  `Date_Created` datetime NOT NULL,
  `createdby` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `publishedby` varchar(50) NOT NULL,
  `Date_published` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`ID`, `deal_id`, `Name`, `description`, `path`, `Date_Created`, `createdby`, `status`, `publishedby`, `Date_published`) VALUES
(5, 'dasaac001', 'Deal for dubai', 'you''ll enjoy it', 'islamic-Ninja-Underscarf-Bonnet-Undercap-Hijab-Cap-muslim-Headwear-modal-hotsell-underscarf_jpg_220x220.jpg', '2017-06-04 01:03:16', 'alex', 'published', 'alex', '2017-06-04 06:30:44'),
(6, 'dasaac002', 'Singapore tour', 'welcome to Singapore for a lifetime experience', 'Mer1.jpg', '2017-06-04 06:05:40', 'alex', 'published', 'alex', '2017-06-04 06:36:11');

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
  `STATUS` varchar(10) NOT NULL DEFAULT 'BOOKED',
  `PHONE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightreservation`
--

INSERT INTO `flightreservation` (`ID`, `TITLE`, `SURNAME`, `OTHERNAME`, `EMAIL`, `FLIGHTTYPE`, `FLIGHTCLASS`, `DEPARTURE`, `DESTINATION`, `DEPARTURE_DATE`, `ARRIVAL_DATE`, `ADULT`, `CHILDREN`, `INFANT`, `BOOKING_DATE`, `STATUS`, `PHONE`) VALUES
(1, 'mr', 'bello', 'abi', 'abiola.bello@hotmail.com', 'Round Trip', 'Economy', 'lagos', 'london', '2017-04-05 00:00:00', '2017-04-29 00:00:00', '1', '0', '0', '0000-00-00 00:00:00', 'BOOKED', NULL),
(2, 'mr', '', '', '', 'Round Trip', 'Economy', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '0', '0', '0000-00-00 00:00:00', 'BOOKED', NULL),
(3, 'mrs', 'abiola', 'Bello', 'blue@blueprint.com', 'Round Trip', 'Economy', 'lagos', 'london', '2017-04-03 00:00:00', '0000-00-00 00:00:00', '1', '0', '0', '0000-00-00 00:00:00', 'BOOKED', NULL),
(4, 'ms', 'abiola', 'Abiola', 'bt@pr.com', 'Round Trip', 'Economy', 'usa', 'canada', '2017-04-19 00:00:00', '0000-00-00 00:00:00', '1', '0', '0', '0000-00-00 00:00:00', 'BOOKED', NULL),
(5, 'mr', 'bello', 'Abiola', 'abiola.bello@hotmail.com', 'Round Trip', 'Economy', 'lagos', 'london', '2017-04-04 00:00:00', '0000-00-00 00:00:00', '1', '0', '0', '0000-00-00 00:00:00', 'BOOKED', NULL),
(6, 'mr', 'bode', 'abodurin', 'yao@nit.com.ng', 'One Way', 'Business', 'lagos', 'China', '2017-04-02 00:00:00', '0000-00-00 00:00:00', '1', '2', '2', '0000-00-00 00:00:00', 'BOOKED', NULL),
(7, 'ms', 'Ijeoma', 'Collins', 'blue@blueprint.com', 'Multi-segment', 'First', 'Portugal', 'Spain', '2017-04-09 00:00:00', '0000-00-00 00:00:00', '2', '1', '0', '2017-04-08 06:09:36', 'BOOKED', NULL),
(8, 'mr', 'bode', 'madi', 'flash@nt.com.ng', 'Round Trip', 'Economy', 'usa', 'canada', '2017-04-02 00:00:00', '0000-00-00 00:00:00', '1', '0', '0', '2017-04-08 06:11:32', 'BOOKED', NULL),
(9, 'mr', 'abiola', 'Bello', 'abiola.bello@hotmail.com', 'One Way', 'First', 'lagos', 'canada', '2017-04-09 00:00:00', '2017-04-29 00:00:00', '1', '0', '0', '2017-04-08 06:20:16', 'BOOKED', NULL),
(10, 'mrs', 'Ijeoma', 'Maxiwell', 'flash@nt.com.ng', 'One Way', 'Business', 'Duubai', 'Australia', '2017-04-16 00:00:00', '2017-04-28 00:00:00', '1', '0', '0', '2017-04-08 19:12:41', 'BOOKED', NULL),
(11, 'ms', 'Ijeoma', 'Bello', 'yao@nit.ng', 'Multi-segment', 'Business', 'Portugal', 'canada', '2017-04-09 00:00:00', '2017-04-22 00:00:00', '1', '2', '0', '2017-04-10 11:45:28', 'BOOKED', NULL),
(12, 'mrs', 'Bello', 'Zainab', 'ade.zainab@outlook.com', 'One Way', 'First', 'lagos', 'canada', '2017-04-18 00:00:00', '2017-05-12 00:00:00', '1', '0', '0', '2017-04-17 13:21:19', 'BOOKED', NULL),
(13, 'mr', 'Ijeoma', 'Bello', 'abiola.bello@hotmail.com', 'One Way', 'Economy', 'lagos', 'canada', '2017-04-02 00:00:00', '2017-04-02 00:00:00', '1', '0', '0', '2017-04-19 09:28:53', 'BOOKED', NULL),
(14, 'mr', 'bello', 'Zainab', 'abiola.bello@hotmail.com', 'Round Trip', 'First', 'Portugal', 'london', '2017-06-04 00:00:00', '2017-06-15 00:00:00', '1', '0', '0', '2017-06-03 07:06:39', 'BOOKED', NULL),
(15, 'mrs', 'bode', 'Bello', 'abiola.bello@hotmail.com', 'Round Trip', 'Economy', 'Surulere', 'london', '2017-06-05 00:00:00', '2017-06-15 00:00:00', '1', '0', '0', '2017-06-04 17:50:53', 'BOOKED', '7036264305');

-- --------------------------------------------------------

--
-- Table structure for table `hotdeals`
--

CREATE TABLE `hotdeals` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `Date_Created` datetime NOT NULL,
  `Date_published` datetime NOT NULL,
  `status` enum('not published','published') NOT NULL DEFAULT 'not published',
  `publishedby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotdeals`
--

INSERT INTO `hotdeals` (`ID`, `Name`, `description`, `path`, `createdby`, `Date_Created`, `Date_published`, `status`, `publishedby`) VALUES
(5, 'hotdeal', 'newest deal', 'broch5.jpg', 'alex', '2017-06-06 08:23:25', '2017-06-06 08:23:32', 'published', 'alex');

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
  `PHONE` varchar(15) NOT NULL,
  `BOOKING_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` varchar(10) NOT NULL DEFAULT 'BOOKED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`ID`, `SURNAME`, `OTHERNAME`, `HOTELTYPE`, `CHECKIN_DATE`, `CHECKOUT_DATE`, `OCCUPANT`, `LOCATION`, `CATEGORY`, `EMAIL`, `PHONE`, `BOOKING_DATE`, `STATUS`) VALUES
(1, 'Abiola', 'Bello', 'Apartment', '2017-04-13 00:00:00', '2017-04-14 00:00:00', '3', 'North', 'Luxury Hotel', 'abiola.bello@hotmail.com', '', '2017-04-24 23:00:00', 'BOOKED'),
(2, 'Bello', 'Abiola', 'Apartment', '2017-04-28 00:00:00', '2017-04-29 00:00:00', '3', 'South', 'Standard Hotel', 'abiola.bello@hotmail.com', '', '2017-04-21 23:00:00', 'BOOKED'),
(3, 'Bello', 'Abiola', 'Apartment', '2017-04-27 00:00:00', '2017-04-20 00:00:00', '1', 'East', 'Luxury Hotel', 'abiola.bello@hotmail.com', '', '2017-04-19 23:00:00', 'BOOKED'),
(4, 'Bello', 'Abiola', 'Apartment', '2017-04-11 00:00:00', '2017-04-13 00:00:00', '1', 'Down Town', 'Luxury Hotel', 'abiola.bello@hotmail.com', '', '2017-04-10 23:00:00', 'BOOKED'),
(5, 'Bello', 'Abiola', 'Apartment', '2017-04-03 00:00:00', '2017-04-03 00:00:00', '4', 'East', 'Luxury Hotel', 'abiola.bello@hotmail.com', '', '2017-04-15 23:00:00', 'BOOKED'),
(6, 'alex', 'Mmgbo', 'City/Airport', '2017-04-18 00:00:00', '2017-04-28 00:00:00', '4', 'Resort', 'Tourist Hotel', 'abiola.bello@hotmail.com', '', '0000-00-00 00:00:00', 'BOOKED'),
(7, 'alex', 'Mmgbo', 'City/Airport', '2017-04-18 00:00:00', '2017-04-28 00:00:00', '4', 'Resort', 'Tourist Hotel', 'abiola.bello@hotmail.com', '', '2017-04-13 23:00:00', 'BOOKED'),
(8, 'Abiola', 'Bello', 'Apartment', '2017-04-16 00:00:00', '2017-04-22 00:00:00', '4', 'Airport', 'Tourist Hotel', 'abiola.bello@hotmail.com', '', '2017-04-10 12:41:56', 'BOOKED'),
(9, 'Abiola', 'Bello', 'Apartment', '2017-04-16 00:00:00', '2017-04-22 00:00:00', '4', 'Airport', 'Tourist Hotel', 'abiola.bello@hotmail.com', '', '2017-04-10 12:42:11', 'BOOKED'),
(10, 'Abiola', 'Zainab', 'City/Airport', '2017-06-07 00:00:00', '2017-06-15 00:00:00', '1', 'Airport', 'First Class', 'abiola.bello@hotmail.com', '', '2017-06-03 07:17:46', 'BOOKED');

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
(11, 'bellab04@yahoo.com', '2017-04-08 18:58:16'),
(12, '', '2017-06-04 14:26:33');

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

-- --------------------------------------------------------

--
-- Table structure for table `ts_log`
--

CREATE TABLE `ts_log` (
  `LOGID` int(11) NOT NULL,
  `PROCESS` varchar(255) NOT NULL,
  `PROCESS_USER` varchar(50) NOT NULL,
  `URLACCESSED` varchar(20) NOT NULL,
  `logged_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_log`
--

INSERT INTO `ts_log` (`LOGID`, `PROCESS`, `PROCESS_USER`, `URLACCESSED`, `logged_date`) VALUES
(67, ' SAFARI TOUR, published sucessfully', 'alex', '::1', '2017-06-04 12:50:43'),
(68, ' SAFARI TOUR, published sucessfully', 'alex', '::1', '2017-06-04 12:53:11'),
(69, ' SAFARI TOUR, published sucessfully', 'alex', '::1', '2017-06-04 12:56:21'),
(70, ' SAFARI TOUR, published sucessfully', 'alex', '::1', '2017-06-04 12:57:21'),
(71, ' SAFARI TOUR, published sucessfully', 'alex', '::1', '2017-06-04 12:57:25'),
(72, ' SAFARI TOUR, published sucessfully', 'alex', '::1', '2017-06-04 12:59:10'),
(73, ' Singapore Tour, published sucessfully', 'alex', '::1', '2017-06-04 01:09:44'),
(74, ' Honeymoon Vacation, published sucessfully', 'alex', '::1', '2017-06-04 01:49:39'),
(75, ' ddddd, published sucessfully', 'alex', '::1', '2017-06-04 03:46:55'),
(76, ' Honeymoon Vacation, published sucessfully', 'alex', '::1', '2017-06-04 03:46:58'),
(77, 'home page view', '', '::1', '2017-06-04 07:12:11'),
(78, 'contactus page view', '', '::1', '2017-06-04 07:12:54'),
(79, 'home page view', 'alex', '::1', '2017-06-04 07:24:36'),
(80, 'aboutus page view', 'alex', '::1', '2017-06-04 07:43:21'),
(81, 'home page view', 'alex', '::1', '2017-06-04 07:43:50'),
(82, 'home page view', 'alex', '::1', '2017-06-04 07:43:51'),
(83, 'home page view', 'alex', '::1', '2017-06-04 07:45:26'),
(84, 'aboutus page view', 'alex', '::1', '2017-06-04 07:49:27'),
(85, '<div class="alert alert-success"><i class="fa fa-warning"></i>thank you for doing business with us! we will get back to you shortly</div>', 'alex', '::1', '2017-06-04 07:50:53'),
(86, 'home page view', 'alex', '::1', '2017-06-04 08:05:18'),
(87, 'career page view', 'alex', '::1', '2017-06-04 09:10:22'),
(88, 'career page view', 'alex', '::1', '2017-06-04 09:58:20'),
(89, 'home page view', 'alex', '::1', '2017-06-04 10:02:35'),
(90, 'aboutus page view', 'alex', '::1', '2017-06-04 10:15:03'),
(91, 'career page view', 'alex', '::1', '2017-06-04 10:15:07'),
(92, 'contactus page view', 'alex', '::1', '2017-06-04 10:15:10'),
(93, 'home page view', 'alex', '::1', '2017-06-04 11:00:50'),
(94, 'home page view', 'alex', '::1', '2017-06-04 11:02:47'),
(95, 'home page view', 'alex', '::1', '2017-06-04 11:10:19'),
(96, 'aboutus page view', 'alex', '::1', '2017-06-04 11:10:22'),
(97, 'career page view', 'alex', '::1', '2017-06-04 11:10:32'),
(98, 'contactus page view', 'alex', '::1', '2017-06-04 11:10:42'),
(99, 'contactus page view', 'alex', '::1', '2017-06-04 11:11:38'),
(100, 'contactus page view', 'alex', '::1', '2017-06-04 11:12:03'),
(101, 'contactus page view', 'alex', '::1', '2017-06-04 11:13:33'),
(102, 'career page view', 'alex', '::1', '2017-06-04 11:24:40'),
(103, 'career page view', 'alex', '::1', '2017-06-04 11:25:04'),
(104, 'career page view', 'alex', '::1', '2017-06-04 11:28:17'),
(105, 'career page view', 'alex', '::1', '2017-06-04 11:29:26'),
(106, 'career page view', 'alex', '::1', '2017-06-04 11:30:07'),
(107, 'career page view', 'alex', '::1', '2017-06-04 11:30:13'),
(108, 'career page view', 'alex', '::1', '2017-06-04 11:31:07'),
(109, 'career page view', 'alex', '::1', '2017-06-04 11:31:16'),
(110, 'career page view', 'alex', '::1', '2017-06-04 11:31:26'),
(111, 'contactus page view', 'alex', '::1', '2017-06-04 11:33:07'),
(112, 'career page view', 'alex', '::1', '2017-06-04 11:33:13'),
(113, 'career page view', 'alex', '::1', '2017-06-04 11:33:43'),
(114, 'career page view', 'alex', '::1', '2017-06-04 11:34:01'),
(115, 'career page view', 'alex', '::1', '2017-06-04 11:36:07'),
(116, 'career page view', 'alex', '::1', '2017-06-04 11:41:35'),
(117, 'career page view', 'alex', '::1', '2017-06-04 11:41:47'),
(118, 'home page view', 'alex', '::1', '2017-06-04 11:41:50'),
(119, 'home page view', 'alex', '::1', '2017-06-04 11:42:17'),
(120, 'home page view', 'alex', '::1', '2017-06-04 11:42:22'),
(121, 'home page view', 'alex', '::1', '2017-06-05 12:03:40'),
(122, 'contactus page view', 'alex', '::1', '2017-06-05 12:04:18'),
(123, 'contactus page view', 'alex', '::1', '2017-06-05 12:04:59'),
(124, 'aboutus page view', 'alex', '::1', '2017-06-05 12:05:11'),
(125, 'home page view', 'alex', '::1', '2017-06-05 12:05:22'),
(126, 'contactus page view', 'alex', '::1', '2017-06-05 12:06:00'),
(127, 'contactus page view', 'alex', '::1', '2017-06-05 12:10:04'),
(128, 'aboutus page view', 'alex', '::1', '2017-06-05 12:11:27'),
(129, 'home page view', 'alex', '::1', '2017-06-05 12:11:46'),
(130, 'aboutus page view', 'alex', '::1', '2017-06-05 12:11:49'),
(131, 'contactus page view', 'alex', '::1', '2017-06-05 12:12:20'),
(132, 'home page view', '', '::1', '2017-06-05 09:49:05'),
(133, 'aboutus page view', '', '::1', '2017-06-05 09:49:22'),
(134, 'home page view', '', '::1', '2017-06-05 10:19:49'),
(135, 'aboutus page view', '', '::1', '2017-06-05 01:54:23'),
(136, 'home page view', '', '::1', '2017-06-05 01:54:23'),
(137, 'contactus page view', '', '::1', '2017-06-05 03:58:15'),
(138, 'contactus page view', '', '::1', '2017-06-06 10:14:00'),
(139, 'contactus page view', '', '::1', '2017-06-06 10:14:01'),
(140, 'aboutus page view', '', '::1', '2017-06-06 12:49:15'),
(141, 'home page view', '', '::1', '2017-06-06 12:49:45'),
(142, 'home page view', 'alex', '::1', '2017-06-06 12:56:08'),
(143, 'home page view', 'alex', '::1', '2017-06-06 06:22:46'),
(144, 'home page view', 'alex', '::1', '2017-06-06 06:54:57'),
(145, ' hotdeal, published sucessfully', 'alex', '::1', '2017-06-06 07:03:24'),
(146, 'home page view', 'alex', '::1', '2017-06-06 07:03:25'),
(147, ' hotdeal, published sucessfully', 'alex', '::1', '2017-06-06 07:05:08'),
(148, ' hotdeal, published sucessfully', 'alex', '::1', '2017-06-06 07:06:46'),
(149, ' hotdeal, deleted sucessfully', 'alex', '::1', '2017-06-06 07:07:03'),
(150, ' , deleted sucessfully', 'alex', '::1', '2017-06-06 07:10:55'),
(151, ' hotdeal, deleted sucessfully', 'alex', '::1', '2017-06-06 07:19:34'),
(152, ' hotdeal, deleted sucessfully', 'alex', '::1', '2017-06-06 07:21:29'),
(153, ' hotdeal, deleted sucessfully', 'alex', '::1', '2017-06-06 08:22:56'),
(154, ' hotdeal, published sucessfully', 'alex', '::1', '2017-06-06 08:23:33'),
(155, 'home page view', '', '::1', '2017-06-06 08:24:24'),
(156, 'home page view', '', '::1', '2017-06-06 08:30:25'),
(157, 'home page view', '', '::1', '2017-06-06 08:31:08'),
(158, 'home page view', '', '::1', '2017-06-06 08:32:28'),
(159, 'home page view', '', '::1', '2017-06-06 08:32:35'),
(160, 'home page view', '', '::1', '2017-06-06 08:33:50'),
(161, 'home page view', '', '::1', '2017-06-06 08:36:26'),
(162, 'aboutus page view', '', '::1', '2017-06-06 08:36:34'),
(163, 'aboutus page view', '', '::1', '2017-06-06 08:40:20'),
(164, 'aboutus page view', '', '::1', '2017-06-06 08:40:27'),
(165, 'aboutus page view', '', '::1', '2017-06-06 08:41:13'),
(166, 'aboutus page view', '', '::1', '2017-06-06 08:41:24'),
(167, 'aboutus page view', '', '::1', '2017-06-06 08:42:08'),
(168, 'home page view', '', '::1', '2017-06-06 08:44:14'),
(169, 'home page view', '', '::1', '2017-06-07 09:53:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `hotdeals`
--
ALTER TABLE `hotdeals`
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
-- Indexes for table `ts_log`
--
ALTER TABLE `ts_log`
  ADD PRIMARY KEY (`LOGID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `CONTACT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dasaac_user`
--
ALTER TABLE `dasaac_user`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `flightreservation`
--
ALTER TABLE `flightreservation`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `hotdeals`
--
ALTER TABLE `hotdeals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `NEWSLETTER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ts_log`
--
ALTER TABLE `ts_log`
  MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
