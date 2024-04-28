-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 04:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swiftstay`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_img`
--

CREATE TABLE `about_img` (
  `aid` int(255) NOT NULL,
  `about_img` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ac_room`
--

CREATE TABLE `ac_room` (
  `ac_id` int(100) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ac_room`
--

INSERT INTO `ac_room` (`ac_id`, `room_no`, `room_type`, `price`, `status`) VALUES
(4, '2000', 'ac', 1800, 'available'),
(5, '2001', 'ac', 1800, 'available'),
(6, '2002', 'ac', 1800, 'available'),
(7, '2003', 'ac', 1800, 'available'),
(8, '2004', 'ac', 1800, 'available'),
(9, '2005', 'ac', 1800, 'available'),
(10, '2006', 'ac', 1800, 'available'),
(11, '2007', 'ac', 1800, 'available'),
(12, '2008', 'ac', 1800, 'available'),
(13, '2009', 'ac', 1800, 'available'),
(14, '2010', 'ac', 1800, 'available'),
(15, '2011', 'ac', 1800, 'available'),
(16, '2012', 'ac', 1800, 'available'),
(17, '2013', 'ac', 1800, 'available'),
(18, '2014', 'ac', 1800, 'available'),
(19, '2015', 'ac', 1800, 'available'),
(20, '2016', 'ac', 1800, 'available'),
(21, '2017', 'ac', 1800, 'available'),
(22, '2018', 'ac', 1800, 'available'),
(23, '2019', 'ac', 1800, 'available'),
(24, '2020', 'ac', 1800, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `secret_code` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `profile`, `name`, `email`, `password`, `secret_code`, `created_at`) VALUES
(3, 'uploads/', 'hello', 'hello@gmail.com', '$2y$10$aR2ZcWvAGIUaVRL3btNilOWk4QU4mwD1dLJtbk.Jp2cdJkkdnOwBO', '$2y$10$D4oZ36vz7Q3BqOLeRQjb1ep.fFnPWHNU7KNiaYozRTCZEeN.WKwg2', '2024-04-21 15:22:54'),
(4, 'uploads/', 'bottle', 'bottle@gmail.com', '$2y$10$d9zBVF./FigYdApW/lKD8undPNXUHhQQnhWQ5lH7G8ATGCtmX7wDO', '$2y$10$52jJ1D/1zEGdKsQXeLeYk.rPdTHI19FGQIiLJcT3El2khsT9tPIx.', '2024-04-21 15:27:16'),
(5, 'uploads/50890.jpg', 'mirror', 'mirror@gmail.com', '$2y$10$rslyXngXgi5938uUWA1cne2F2KHJeK.OwuyY8a/Jgbg8PS7fDhKHW', '$2y$10$LaGdvFSYW3gvG8mACaSeZuRjcEgp30hg0WL2wLVeeJaDzmTEh6VbS', '2024-04-21 15:31:07'),
(6, 'uploads/1.jpg', 'mobile', 'mobile@gmail.com', '$2y$10$48FNs7dX.0km5W60acVzp.0zRxxWTphQJQXbzMfTgpFEp5i0YtHjS', '$2y$10$r6/It1.EAi16LLWHJ93sgOrn4SO34UFX/lBYOJBYdpNCB9XrC/4AW', '2024-04-21 20:15:45'),
(7, 'uploads/af901670bd0454810bdfb0d46d75feaf.jpg', 'mouse', 'mouse@gmail.com', '$2y$10$3Yb/zfVYQFq77d/PtNGLd.FogTex4I2loZSuh3Kh2c2N4UuS45wf6', '$2y$10$p7xwttlk7fnCRiprD5fk0uZToxye75m4C6EdOzkXDbcXd6wYBQB8q', '2024-04-23 21:43:28'),
(8, 'uploads/0b9662326c14d9e14c9a8107c8759919.jpg', 'mobile', 'mobile@gmail.com', '$2y$10$WO.qHd6kF2rLTSEz8NKhyOLKWp1ioDYCM6uezFj57Yo0HSx/16eCy', '$2y$10$CAp3ICTubusAW9u3DEij1ekKrYIHgWvH8FAa62X3643aca3batGeq', '2024-04-24 09:57:15'),
(9, 'uploads/2813e73ded1f39977c57301450d2a6fd.jpg', 'alita', 'alita@gmail.com', '$2y$10$fmlqTuBi4cVFTSkhUnVLGezZWyDLY2oCQPv9jvYMheJOmhu5MxxLu', '$2y$10$HI.cJLlsV0XNGU8htReEz.PyGH7akP1EPr8WyamwR7Id1OuNZXiba', '2024-04-24 17:37:17'),
(10, 'uploads/0a2ad6daf3c74a53cc98e2c4992a4501.jpg', 'baymax', 'baymax@gmail.com', '$2y$10$LvzXG8us.idmykwh9Q3tMe79jAcpkyRinP1dei2KuuL.Gzr7Andhq', '$2y$10$gJvphDzADO83thSZJeo4POsOzBimXDGclk8mTOdf5Sqnp84L0doHC', '2024-04-24 17:38:47'),
(11, 'uploads/40142e63434f46892a689ab30aa8e476.jpg', 'moana', 'moana@gmail.com', '$2y$10$bb.ofi0.TMw8.HUevtonG.mZ5ZTbgF9UzqBcjHJD6.fitcVLLo5ny', '$2y$10$4Qs4XM1BiIcVr2JCrIdlV.CHnss7UBHUgHOQgyzvOlxxhSXl4kQpu', '2024-04-24 20:16:05'),
(12, 'uploads/0b25471134c9c9340beab7036c61f28b.jpg', 'luffy', 'luffy@gmail.com', '$2y$10$MVMeaw2Wq6LUPynFqwmv3.d.c.jfm5GT.U3HnA318AtodwdjO74BC', '$2y$10$ELLzUjfhITTwDqZ5mXa6BumonaClOK9zhkKAQo9y7LlhmYJlYZF6q', '2024-04-24 20:18:51'),
(13, 'uploads/0fbef395920e0cf06477d971323c337c.jpg', 'yi', 'yi@gmail.com', '$2y$10$cEZfBBm26KL/BEQDJSQWWOXvyVXyrzcXMsEdk.1vbVfBePlSiOTmy', '$2y$10$FQ0bitccHKKaCqZ1MJscn.akRR2Xf4tFsLM07UJmCYHqZwnSLu/tO', '2024-04-24 20:24:15'),
(14, 'uploads/d02b9542c47342d75949369c841b80f3.jpg', 'panda', 'panda@gmail.com', '$2y$10$OA5bcwHBLyiJfuDTCoknI.eHSVcM14j1hILLCq8sgmblDnQ7hld6G', '$2y$10$EdkDbxUopUc7eJ7We9Aw1.dNewlis4cMLBjKWf1gp1Q9bqjktFdZ2', '2024-04-24 20:27:28'),
(15, 'uploads/98f71774933bf05810e0371c4d766521.jpg', 'gemfot', 'gemfot@gmail.com', '$2y$10$ae/72b4ubzrmni6pawwINuSu3c4C5VDZRr6yokHkWWsde1MWYsY/G', '$2y$10$Q1kWtoHB18N5GR.bqh90lej2O.u7RxYOOIa7r5D6L8HcgaQuGVwT2', '2024-04-24 20:30:27'),
(16, 'uploads/4c874aa23747945d184e35265f015d5c.jpg', 'raya', 'raya@gmail.com', '$2y$10$o/gepVpfzAXFK.UkZaZcMuyOgLc1pKPA8ZuBz7MqR/blWlG7RIF32', '$2y$10$v2nbpSGiiJjOxohiF7cJTOmIWAwuUKDsOq9nrH3lUYmKlKTFaXwLS', '2024-04-24 20:32:11'),
(17, 'uploads/16a3c7d5c640d043c14f36508c383085.jpg', 'naruto', 'naruto@gmail.com', '$2y$10$O870GZ2Vj0NuDXT9rtvZjuDO4OS9CzEPuy8MnWrDUeZ1sA6hROmvO', '$2y$10$1IeelaOFl3glUSD8S4bTpOMyMldPjIIgeacPRpZEut3x9/T/H3Wty', '2024-04-24 20:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `v_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`v_id`, `name`, `email`, `phone`, `address`, `message`, `created_at`) VALUES
(13, 'Archana Timilsina', 'luvyryh@mailinator.com', 0, 'Sapiente quisquam es', 'In officia esse in v', '2024-04-25 09:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `contact_img`
--

CREATE TABLE `contact_img` (
  `cid` int(255) NOT NULL,
  `contact_img` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deluxac_room`
--

CREATE TABLE `deluxac_room` (
  `deluxac_id` int(255) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deluxac_room`
--

INSERT INTO `deluxac_room` (`deluxac_id`, `room_no`, `room_type`, `price`, `status`) VALUES
(13, '1000', 'delux', 2000, 'booked'),
(14, '1001', 'delux', 2000, 'booked'),
(15, '1002', 'delux', 2000, 'booked'),
(16, '1003', 'delux', 2000, 'booked'),
(17, '1004', 'delux', 2000, 'booked'),
(18, '1005', 'delux', 2000, 'booked'),
(19, '1006', 'delux', 2000, 'booked'),
(20, '1007', 'delux', 2000, 'booked'),
(21, '1008', 'delux', 2000, 'booked'),
(22, '1010', 'delux', 2000, 'booked'),
(23, '1011', 'delux', 2000, 'booked'),
(24, '1012', 'delux', 2000, 'booked'),
(25, '1013', 'delux', 2000, 'booked'),
(26, '1014', 'delux', 2000, 'available'),
(27, '1015', 'delux', 2000, 'available'),
(28, '1016', 'delux', 2000, 'available'),
(29, '1017', 'delux', 2000, 'available'),
(30, '1018', 'delux', 2000, 'available'),
(31, '1019', 'delux', 2000, 'available'),
(32, '1020', 'delux', 2000, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f_id` int(255) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`f_id`, `name`, `email`, `feedback`, `created_at`) VALUES
(13, 'Chaim Mcbride', 'waquf@mailinator.com', 'Aperiam reiciendis n', '2024-04-25 12:21:08'),
(14, 'Faith Crane', 'xufy@mailinator.com', 'Provident molestiae', '2024-04-25 12:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_img`
--

CREATE TABLE `feedback_img` (
  `fid` int(255) NOT NULL,
  `feedback_img` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `o_id` int(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `order_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_id` int(5) NOT NULL,
  `hall_type` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hall_book`
--

CREATE TABLE `hall_book` (
  `b_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `function` varchar(50) NOT NULL,
  `members` int(10) NOT NULL,
  `book_date` datetime NOT NULL DEFAULT current_timestamp(),
  `function_date` datetime NOT NULL,
  `function_days` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `hid` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `hdate` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`hid`, `subject`, `hdate`, `created_at`) VALUES
(1, 'AEWFAWEGARWG', '2024-04-26', '2024-04-27 23:36:17'),
(2, 'Ut dolore est eaque', '1973-07-19', '2024-04-27 23:37:44'),
(3, 'Velit cupidatat imp', '1976-11-21', '2024-04-27 23:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `iac_img`
--

CREATE TABLE `iac_img` (
  `aid` int(255) NOT NULL,
  `ac_img` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iac_img`
--

INSERT INTO `iac_img` (`aid`, `ac_img`, `created_at`) VALUES
(2, '../../../uploads/2eb27d56804c9074e0371742c37d1480.jpg', '2024-04-27 18:37:37'),
(3, '../../../uploads/2e1b3ec52a7f571e36f76940cca3926d.jpg', '2024-04-27 18:37:48'),
(4, '../../../uploads/5c32fa36189e6e178a5e2468378d9742.jpg', '2024-04-27 18:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `idelux_img`
--

CREATE TABLE `idelux_img` (
  `did` int(255) NOT NULL,
  `delux_img` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `idelux_img`
--

INSERT INTO `idelux_img` (`did`, `delux_img`, `created_at`) VALUES
(2, '../../../uploads/1.jpg', '2024-04-27 15:33:16'),
(3, '../../../uploads/WhatsApp Image 2023-12-09 at 16.29.37_87a4fb6f.jpg', '2024-04-27 18:43:11'),
(4, '../../../uploads/0b9662326c14d9e14c9a8107c8759919.jpg', '2024-04-27 18:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `ihall_img`
--

CREATE TABLE `ihall_img` (
  `hid` int(255) NOT NULL,
  `hall_img` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ihall_img`
--

INSERT INTO `ihall_img` (`hid`, `hall_img`, `created_at`) VALUES
(1, '../../../uploads/1.jpg', '2024-04-27 18:43:58'),
(2, '../../../uploads/3fce353d1e0dd5899938393bc28aa784.jpg', '2024-04-27 18:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `ihome_img`
--

CREATE TABLE `ihome_img` (
  `hid` int(255) NOT NULL,
  `home_img` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ihome_img`
--

INSERT INTO `ihome_img` (`hid`, `home_img`, `created_at`) VALUES
(1, '../../../uploads/3e19995b00917110f070b64aa97d83ae.jpg', '2024-04-27 18:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `inonac_img`
--

CREATE TABLE `inonac_img` (
  `nid` int(255) NOT NULL,
  `nonac_img` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inonac_img`
--

INSERT INTO `inonac_img` (`nid`, `nonac_img`, `created_at`) VALUES
(1, '../../../uploads/03f460a720679ca85d3fd0d984881c11.jpg', '2024-04-27 18:47:32'),
(2, '../../../uploads/6ad215670d5c2e4488f736c568e2b9bc.jpg', '2024-04-27 18:47:49'),
(3, '../../../uploads/6d905f22ae1d2c19c4441f40fc0e73db.jpg', '2024-04-27 18:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `logo_img`
--

CREATE TABLE `logo_img` (
  `lid` int(255) NOT NULL,
  `logo_img` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `m_id` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `message` varchar(700) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nonac_room`
--

CREATE TABLE `nonac_room` (
  `nonac_id` int(255) NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nonac_room`
--

INSERT INTO `nonac_room` (`nonac_id`, `room_no`, `room_type`, `price`, `status`) VALUES
(2, '3000', 'non ac', 1500, 'booked'),
(3, '3001', 'non ac', 1500, 'booked'),
(4, '3002', 'non ac', 1500, 'available'),
(5, '3003', 'non ac', 1500, 'available'),
(6, '3004', 'non ac', 1500, 'available'),
(7, '3005', 'non ac', 1500, 'available'),
(8, '3006', 'non ac', 1500, 'available'),
(9, '3007', 'non ac', 1500, 'available'),
(10, '3008', 'non ac', 1500, 'available'),
(11, '3009', 'non ac', 1500, 'available'),
(12, '3010', 'non ac', 1500, 'available'),
(13, '3011', 'non ac', 1500, 'available'),
(14, '3012', 'non ac', 1500, 'available'),
(15, '3013', 'non ac', 1500, 'available'),
(16, '3014', 'non ac', 1500, 'available'),
(17, '3015', 'non ac', 1500, 'available'),
(18, '3016', 'non ac', 1500, 'available'),
(19, '3017', 'non ac', 1500, 'available'),
(20, '3018', 'non ac', 1500, 'available'),
(21, '3019', 'non ac', 1500, 'available'),
(22, '3020', 'non ac', 1500, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `nid` int(255) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `notice` varchar(400) NOT NULL,
  `pdate` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`nid`, `subject`, `notice`, `pdate`, `created_at`) VALUES
(2, '0', '../../uploads/01e52957992fd8801e9228c078be0aa0.jpg', '2024-04-28 05:49:35', '2024-04-28 05:49:35'),
(3, 'AGAWEGRG', '../../uploads/1.jpg', '2024-04-28 08:07:42', '2024-04-28 08:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `room_booking`
--

CREATE TABLE `room_booking` (
  `b_id` int(200) NOT NULL,
  `room_no` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `members` int(3) NOT NULL,
  `room_type` varchar(10) NOT NULL,
  `no_of_room` int(3) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_booking`
--

INSERT INTO `room_booking` (`b_id`, `room_no`, `name`, `address`, `city`, `phone`, `email`, `cin`, `cout`, `members`, `room_type`, `no_of_room`, `time`) VALUES
(49, 3000, 'ggkug', 'koi90i', 'o-0o', 0, 'gugi', '2024-04-23', '2024-04-25', 8, 'Non AC', 2, '2024-04-19 09:23:57'),
(50, 3001, 'ggkug', 'koi90i', 'o-0o', 0, 'gugi', '2024-04-23', '2024-04-25', 8, 'Non AC', 2, '2024-04-19 09:23:57'),
(51, 1000, 'Archana Timilsina', 'Sudal-9', 'bhaktapur', 985904854, 'sfjkshdfiou@gmail.com', '2024-04-26', '2024-04-27', 6, 'Delux AC', 2, '2024-04-24 10:08:37'),
(52, 1001, 'Archana Timilsina', 'Sudal-9', 'bhaktapur', 985904854, 'sfjkshdfiou@gmail.com', '2024-04-26', '2024-04-27', 6, 'Delux AC', 2, '2024-04-24 10:08:40'),
(53, 1002, 'dsfuf', 'fassf', 'safsaff', 97978, 'dfsdfdsg@gmail.com', '2024-04-25', '2024-04-26', 8, 'Delux AC', 1, '2024-04-24 20:49:18'),
(54, 1003, 'affwew', 'eewgeg', 'egewgewg', 0, 'ewewgge@gmail.com', '2024-04-25', '2024-04-26', 0, 'Delux AC', 1, '2024-04-24 20:50:01'),
(55, 1000, 'wefqf', 'rfwrgw', 'rgwtg3', 0, 'sf@gmail.com', '2024-05-03', '2024-05-09', 6, 'Delux AC', 1, '2024-04-26 10:00:07'),
(56, 1004, 'khloij', 'poij[', 'km', 0, 'lkj@uygho.com', '2024-04-17', '2024-04-16', 8, 'Delux AC', 1, '2024-04-26 10:01:36'),
(57, 1005, 'Ryder Barry', 'Dolor alias harum bl', 'Veniam blanditiis n', 1, 'niso@mailinator.com', '2017-12-16', '2006-03-12', 0, 'Sequi accu', 2, '2024-04-26 10:02:21'),
(58, 1006, 'Ryder Barry', 'Dolor alias harum bl', 'Veniam blanditiis n', 1, 'niso@mailinator.com', '2017-12-16', '2006-03-12', 0, 'Sequi accu', 2, '2024-04-26 10:02:21'),
(59, 1007, 'Ryder Barry', 'Dolor alias harum bl', 'Veniam blanditiis n', 1, 'niso@mailinator.com', '2017-12-16', '2006-03-12', 0, 'Sequi accu', 2, '2024-04-26 10:02:30'),
(60, 1008, 'Ryder Barry', 'Dolor alias harum bl', 'Veniam blanditiis n', 1, 'niso@mailinator.com', '2017-12-16', '2006-03-12', 0, 'Sequi accu', 2, '2024-04-26 10:02:30'),
(61, 1010, 'Ryder Barry', 'Dolor alias harum bl', 'Veniam blanditiis n', 1, 'niso@mailinator.com', '2017-12-16', '2006-03-12', 0, 'Sequi accu', 2, '2024-04-26 10:02:35'),
(62, 1011, 'Ryder Barry', 'Dolor alias harum bl', 'Veniam blanditiis n', 1, 'niso@mailinator.com', '2017-12-16', '2006-03-12', 0, 'Sequi accu', 2, '2024-04-26 10:02:35'),
(63, 1012, 'Rogan Anderson', 'Inventore consequat', 'Voluptate deserunt t', 1, 'feciduho@mailinator.com', '1992-01-13', '2005-12-12', 0, 'Cupidatat ', 2, '2024-04-26 10:03:44'),
(64, 1013, 'Rogan Anderson', 'Inventore consequat', 'Voluptate deserunt t', 1, 'feciduho@mailinator.com', '1992-01-13', '2005-12-12', 0, 'Cupidatat ', 2, '2024-04-26 10:03:44'),
(65, 1000, 'adfa', 'dadga', 'rter', 5645645, 'swiftstay@gmail.com', '2024-04-27', '2024-04-28', 2, 'Delux AC', 1, '2024-04-26 10:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `room_img`
--

CREATE TABLE `room_img` (
  `rid` int(255) NOT NULL,
  `room_img1` varchar(400) NOT NULL,
  `room_img2` varchar(400) NOT NULL,
  `room_img3` varchar(400) NOT NULL,
  `room_img4` varchar(400) NOT NULL,
  `room_img5` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `std_img`
--

CREATE TABLE `std_img` (
  `img_source` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_img`
--

INSERT INTO `std_img` (`img_source`) VALUES
('images/50888.jpg'),
('images/'),
('images/50888.jpg'),
('images/'),
('images/'),
('images/50802.jpg'),
('images/'),
('images/'),
('images/50817.jpg'),
('images/'),
('images/'),
('images/'),
('images/'),
('images/'),
('images/'),
('images/'),
('images/0fbef395920e0cf06477d971323c337c.jpg'),
('images/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `email`, `password`, `created_at`) VALUES
(2, 'hello', 'hi', 'hi@gmail.com', '$2y$10$yNX45eIal7u94zgsvtjjkObTKf05FNtxP0k0L0QWy6h', '2024-02-20 16:43:14'),
(3, 'maya jfk', 'maya', 'maya@gmail.com', '$2y$10$YMjdIwiWZKDBbu.prnLAPOoAZyE6esjdkij4zgB9yKI', '2024-02-20 16:44:59'),
(4, 'saya jakf', 'saya', 'saya@gmail.com', 'saya', '2024-02-20 16:54:02'),
(5, 'kite', 'kite', 'kite@gmail.com', '$2y$10$KdLAAVZ3p6kCqYpz62xX2es1VgIVDwJNRFo7S2tDFbQ', '2024-02-20 19:19:59'),
(6, 'swiftstay', 'archana', 'archanatimilsina88@gmail.com', '$2y$10$tth8yVH2unTHswaoMpOHzuf/nq6e9pD1HgGqV9NMIfc', '2024-02-21 04:54:17'),
(7, 'Benjamin Stephenson', 'swiftstay', 'swiftstay@gmail.com', '$2y$10$xQ2D9RZCSuhSjfA5iYqYyehnLtEzKEepeaVgYPAUnUJ', '2024-02-21 05:49:01'),
(8, 'haya', 'haya', 'haya@gmail.com', '$2y$10$JuvFoKIiaorfgB2KX7/9oezsqvgn8Bb/Kl5rxVeyKVS', '2024-03-27 09:58:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_img`
--
ALTER TABLE `about_img`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `ac_room`
--
ALTER TABLE `ac_room`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `contact_img`
--
ALTER TABLE `contact_img`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `deluxac_room`
--
ALTER TABLE `deluxac_room`
  ADD PRIMARY KEY (`deluxac_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `feedback_img`
--
ALTER TABLE `feedback_img`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `hall_book`
--
ALTER TABLE `hall_book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `iac_img`
--
ALTER TABLE `iac_img`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `idelux_img`
--
ALTER TABLE `idelux_img`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `ihall_img`
--
ALTER TABLE `ihall_img`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `ihome_img`
--
ALTER TABLE `ihome_img`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `inonac_img`
--
ALTER TABLE `inonac_img`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `logo_img`
--
ALTER TABLE `logo_img`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `nonac_room`
--
ALTER TABLE `nonac_room`
  ADD PRIMARY KEY (`nonac_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `room_img`
--
ALTER TABLE `room_img`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_img`
--
ALTER TABLE `about_img`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ac_room`
--
ALTER TABLE `ac_room`
  MODIFY `ac_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `v_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_img`
--
ALTER TABLE `contact_img`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deluxac_room`
--
ALTER TABLE `deluxac_room`
  MODIFY `deluxac_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `f_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback_img`
--
ALTER TABLE `feedback_img`
  MODIFY `fid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `o_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hall_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hall_book`
--
ALTER TABLE `hall_book`
  MODIFY `b_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `hid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `iac_img`
--
ALTER TABLE `iac_img`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `idelux_img`
--
ALTER TABLE `idelux_img`
  MODIFY `did` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ihall_img`
--
ALTER TABLE `ihall_img`
  MODIFY `hid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ihome_img`
--
ALTER TABLE `ihome_img`
  MODIFY `hid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inonac_img`
--
ALTER TABLE `inonac_img`
  MODIFY `nid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logo_img`
--
ALTER TABLE `logo_img`
  MODIFY `lid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `m_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nonac_room`
--
ALTER TABLE `nonac_room`
  MODIFY `nonac_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `nid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_booking`
--
ALTER TABLE `room_booking`
  MODIFY `b_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `room_img`
--
ALTER TABLE `room_img`
  MODIFY `rid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
