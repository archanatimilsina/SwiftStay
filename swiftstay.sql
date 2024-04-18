-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 07:56 AM
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
(4, '2000', 'ac', 1800, 'booked'),
(5, '2001', 'ac', 1800, 'booked'),
(6, '2002', 'ac', 1800, 'booked'),
(7, '2003', 'ac', 1800, 'booked'),
(8, '2004', 'ac', 1800, 'booked'),
(9, '2005', 'ac', 1800, 'booked'),
(10, '2006', 'ac', 1800, 'booked'),
(11, '2007', 'ac', 1800, 'booked'),
(12, '2008', 'ac', 1800, 'booked'),
(13, '2009', 'ac', 1800, 'booked'),
(14, '2010', 'ac', 1800, 'booked'),
(15, '2011', 'ac', 1800, 'booked'),
(16, '2012', 'ac', 1800, 'booked'),
(17, '2013', 'ac', 1800, 'booked'),
(18, '2014', 'ac', 1800, 'booked'),
(19, '2015', 'ac', 1800, 'booked'),
(20, '2016', 'ac', 1800, 'booked'),
(21, '2017', 'ac', 1800, 'booked'),
(22, '2018', 'ac', 1800, 'booked'),
(23, '2019', 'ac', 1800, 'available'),
(24, '2020', 'ac', 1800, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `v_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
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
(26, '1014', 'delux', 2000, 'booked'),
(27, '1015', 'delux', 2000, 'booked'),
(28, '1016', 'delux', 2000, 'booked'),
(29, '1017', 'delux', 2000, 'booked'),
(30, '1018', 'delux', 2000, 'booked'),
(31, '1019', 'delux', 2000, 'booked'),
(32, '1020', 'delux', 2000, 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f_id` int(255) NOT NULL,
  `name` varchar(75) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`f_id`, `name`, `feedback`) VALUES
(1, 'Hillary Burt', 'Temporibus vitae pro'),
(2, 'Ria Sampson', 'Minim ut rem accusam'),
(3, 'Felicia Chavez', 'Unde sit voluptate f');

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
(4, '3002', 'non ac', 1500, 'booked'),
(5, '3003', 'non ac', 1500, 'booked'),
(6, '3004', 'non ac', 1500, 'booked'),
(7, '3005', 'non ac', 1500, 'booked'),
(8, '3006', 'non ac', 1500, 'booked'),
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
(1, 1003, 'Chhabilal Timilsina', 'Sudal -9', 'Bhaktapur', 2147483647, 'Chhabilal@gmail.com', '2024-04-17', '2024-04-18', 8, 'Delux AC', 4, '2024-04-15 11:32:56'),
(2, 1004, 'Chhabilal Timilsina', 'Sudal -9', 'Bhaktapur', 2147483647, 'Chhabilal@gmail.com', '2024-04-17', '2024-04-18', 8, 'Delux AC', 4, '2024-04-15 11:32:57'),
(3, 1005, 'Chhabilal Timilsina', 'Sudal -9', 'Bhaktapur', 2147483647, 'Chhabilal@gmail.com', '2024-04-17', '2024-04-18', 8, 'Delux AC', 4, '2024-04-15 11:32:57'),
(4, 1006, 'Chhabilal Timilsina', 'Sudal -9', 'Bhaktapur', 2147483647, 'Chhabilal@gmail.com', '2024-04-17', '2024-04-18', 8, 'Delux AC', 4, '2024-04-15 11:32:57'),
(5, 2000, 'Parbati Timilsina', 'Sudal -9', 'Bhaktapur', 28237634, 'parbati@gmail.com', '2024-04-17', '2024-04-18', 8, 'A.C. Room', 4, '2024-04-15 11:34:30'),
(6, 2001, 'Parbati Timilsina', 'Sudal -9', 'Bhaktapur', 28237634, 'parbati@gmail.com', '2024-04-17', '2024-04-18', 8, 'A.C. Room', 4, '2024-04-15 11:34:30'),
(7, 2002, 'Parbati Timilsina', 'Sudal -9', 'Bhaktapur', 28237634, 'parbati@gmail.com', '2024-04-17', '2024-04-18', 8, 'A.C. Room', 4, '2024-04-15 11:34:30'),
(8, 2003, 'Parbati Timilsina', 'Sudal -9', 'Bhaktapur', 28237634, 'parbati@gmail.com', '2024-04-17', '2024-04-18', 8, 'A.C. Room', 4, '2024-04-15 11:34:30'),
(9, 3000, 'Ganesh Kumar Timilsina', 'Sudal-9', 'Bhaktapur', 2147483647, 'ganesh@gmail.com', '2024-04-17', '2024-04-18', 6, 'Non AC', 4, '2024-04-15 11:35:17'),
(10, 3001, 'Ganesh Kumar Timilsina', 'Sudal-9', 'Bhaktapur', 2147483647, 'ganesh@gmail.com', '2024-04-17', '2024-04-18', 6, 'Non AC', 4, '2024-04-15 11:35:18'),
(11, 3002, 'Ganesh Kumar Timilsina', 'Sudal-9', 'Bhaktapur', 2147483647, 'ganesh@gmail.com', '2024-04-17', '2024-04-18', 6, 'Non AC', 4, '2024-04-15 11:35:18'),
(12, 3003, 'Ganesh Kumar Timilsina', 'Sudal-9', 'Bhaktapur', 2147483647, 'ganesh@gmail.com', '2024-04-17', '2024-04-18', 6, 'Non AC', 4, '2024-04-15 11:35:18'),
(13, 1007, 'apshara', 'sudal-9', 'bhaktapur', 2147483647, 'apsara@gmail.com', '2024-04-18', '2024-04-19', 6, 'Delux AC', 3, '2024-04-15 11:37:28'),
(14, 1008, 'apshara', 'sudal-9', 'bhaktapur', 2147483647, 'apsara@gmail.com', '2024-04-18', '2024-04-19', 6, 'Delux AC', 3, '2024-04-15 11:37:29'),
(15, 1010, 'apshara', 'sudal-9', 'bhaktapur', 2147483647, 'apsara@gmail.com', '2024-04-18', '2024-04-19', 6, 'Delux AC', 3, '2024-04-15 11:37:29'),
(16, 3004, 'hello', 'hello-9', 'bhak', 2147483647, 'hello@gmail.com', '2024-04-18', '2024-04-19', 3, 'Non AC', 3, '2024-04-15 11:38:23'),
(17, 3005, 'hello', 'hello-9', 'bhak', 2147483647, 'hello@gmail.com', '2024-04-18', '2024-04-19', 3, 'Non AC', 3, '2024-04-15 11:38:24'),
(18, 3006, 'hello', 'hello-9', 'bhak', 2147483647, 'hello@gmail.com', '2024-04-18', '2024-04-19', 3, 'Non AC', 3, '2024-04-15 11:38:24'),
(19, 1011, 'agae', 'aeeart', 'awtaet', 0, 'aertret@gmail.com', '2024-04-19', '2024-04-20', 9, 'Delux AC', 1, '2024-04-15 16:05:23'),
(20, 1012, 'agae', 'aeeart', 'awtaet', 0, 'aertret@gmail.com', '2024-04-19', '2024-04-20', 9, 'Delux AC', 1, '2024-04-15 16:06:04'),
(21, 1013, 'agae', 'aeeart', 'awtaet', 0, 'aertret@gmail.com', '2024-04-19', '2024-04-20', 9, 'Delux AC', 1, '2024-04-15 16:07:40'),
(22, 1014, 'Heather Osborn', 'Rerum magna molestia', 'Itaque velit est iu', 1, 'wihixypumu@mailinator.com', '1972-11-25', '1992-03-24', 0, 'delux ac', 3, '2024-04-15 16:08:01'),
(23, 1015, 'Heather Osborn', 'Rerum magna molestia', 'Itaque velit est iu', 1, 'wihixypumu@mailinator.com', '1972-11-25', '1992-03-24', 0, 'delux ac', 3, '2024-04-15 16:08:03'),
(24, 1016, 'Heather Osborn', 'Rerum magna molestia', 'Itaque velit est iu', 1, 'wihixypumu@mailinator.com', '1972-11-25', '1992-03-24', 0, 'delux ac', 3, '2024-04-15 16:08:05'),
(25, 1017, 'Heather Osborn', 'Rerum magna molestia', 'Itaque velit est iu', 1, 'wihixypumu@mailinator.com', '1972-11-25', '1992-03-24', 0, 'delux ac', 3, '2024-04-15 16:08:34'),
(26, 1018, 'Heather Osborn', 'Rerum magna molestia', 'Itaque velit est iu', 1, 'wihixypumu@mailinator.com', '1972-11-25', '1992-03-24', 0, 'delux ac', 3, '2024-04-15 16:08:34'),
(27, 1019, 'Heather Osborn', 'Rerum magna molestia', 'Itaque velit est iu', 1, 'wihixypumu@mailinator.com', '1972-11-25', '1992-03-24', 0, 'delux ac', 3, '2024-04-15 16:08:34'),
(28, 1020, 'Heather Osborn', 'Rerum magna molestia', 'Itaque velit est iu', 1, 'wihixypumu@mailinator.com', '1972-11-25', '1992-03-24', 0, 'delux ac', 3, '2024-04-15 16:10:06'),
(29, 0, 'Heather Osborn', 'Rerum magna molestia', 'Itaque velit est iu', 1, 'wihixypumu@mailinator.com', '1972-11-25', '1992-03-24', 0, 'delux ac', 3, '2024-04-15 16:10:06'),
(30, 0, 'Heather Osborn', 'Rerum magna molestia', 'Itaque velit est iu', 1, 'wihixypumu@mailinator.com', '1972-11-25', '1992-03-24', 0, 'delux ac', 3, '2024-04-15 16:10:06'),
(31, 2004, 'sdhfsfe', 'sdg', 'grearga', 0, 'aeferg', '2024-04-09', '2024-04-12', 0, 'A.C. Room', 1, '2024-04-16 06:31:11'),
(32, 2005, 'Archana timilsina', 'erfwf', 'werw', 0, 'wregwrg', '2024-04-12', '2024-04-13', 0, 'A.C. Room', 2, '2024-04-16 11:44:01'),
(33, 2006, 'Archana timilsina', 'erfwf', 'werw', 0, 'wregwrg', '2024-04-12', '2024-04-13', 0, 'A.C. Room', 2, '2024-04-16 11:44:01'),
(34, 2007, 'yash', 'india', 'paka', 9876565, 'atrcca@gmail.com', '2024-04-18', '2024-04-19', 5, 'A.C. Room', 2, '2024-04-17 13:14:56'),
(35, 2008, 'yash', 'india', 'paka', 9876565, 'atrcca@gmail.com', '2024-04-18', '2024-04-19', 5, 'A.C. Room', 2, '2024-04-17 13:14:56'),
(36, 2009, 'yash', 'india', 'paka', 9876565, 'atrcca@gmail.com', '2024-04-18', '2024-04-19', 5, 'A.C. Room', 2, '2024-04-17 13:15:06'),
(37, 2010, 'yash', 'india', 'paka', 9876565, 'atrcca@gmail.com', '2024-04-18', '2024-04-19', 5, 'A.C. Room', 2, '2024-04-17 13:15:06'),
(38, 2011, 'yash', 'india', 'paka', 9876565, 'atrcca@gmail.com', '2024-04-18', '2024-04-19', 5, 'A.C. Room', 2, '2024-04-17 13:16:26'),
(39, 2012, 'yash', 'india', 'paka', 9876565, 'atrcca@gmail.com', '2024-04-18', '2024-04-19', 5, 'A.C. Room', 2, '2024-04-17 13:16:27'),
(40, 2013, 'yash', 'india', 'paka', 9876565, 'atrcca@gmail.com', '2024-04-18', '2024-04-19', 5, 'A.C. Room', 2, '2024-04-17 13:16:35'),
(41, 2014, 'yash', 'india', 'paka', 9876565, 'atrcca@gmail.com', '2024-04-18', '2024-04-19', 5, 'A.C. Room', 2, '2024-04-17 13:16:35'),
(42, 2015, 'yash', 'india', 'paka', 9876565, 'atrcca@gmail.com', '2024-04-18', '2024-04-19', 5, 'A.C. Room', 2, '2024-04-17 13:19:04'),
(43, 2016, 'yash', 'india', 'paka', 9876565, 'atrcca@gmail.com', '2024-04-18', '2024-04-19', 5, 'A.C. Room', 2, '2024-04-17 13:19:04'),
(44, 2017, 'yryryu', 'jhyiuyi', 'kjhuiyi', 2147483647, 'gdd@gmail.com', '2024-04-19', '2024-04-20', 3, 'A.C. Room', 1, '2024-04-18 11:26:24'),
(45, 2018, 'adasdas', 'aslksajfid', 'safsd', 0, 'agadg@gmail.com', '2024-04-19', '2024-04-20', 6, 'A.C. Room', 1, '2024-04-18 11:35:15');

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
-- Indexes for table `nonac_room`
--
ALTER TABLE `nonac_room`
  ADD PRIMARY KEY (`nonac_id`);

--
-- Indexes for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_room`
--
ALTER TABLE `ac_room`
  MODIFY `ac_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `v_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deluxac_room`
--
ALTER TABLE `deluxac_room`
  MODIFY `deluxac_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `f_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `nonac_room`
--
ALTER TABLE `nonac_room`
  MODIFY `nonac_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `room_booking`
--
ALTER TABLE `room_booking`
  MODIFY `b_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
