-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 07:09 AM
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
(1, '2001', 'double bed', 3000, ''),
(2, '2001', 'single bed', 7000, ''),
(3, '2001', 'single bed', 7000, '');

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
(1, '2000', 'delux', 7000, 'Available'),
(2, '2001', 'delux', 7000, 'Available'),
(3, '2001', 'delux', 7000, 'Available'),
(4, '2001', 'delux', 7000, 'Available'),
(5, '4000', 'double bed', 5000, '');

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
(2, 'Ria Sampson', 'Minim ut rem accusam');

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
(1, '3000', 'double bed', 8000, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `room_booking`
--

CREATE TABLE `room_booking` (
  `b_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cin` datetime NOT NULL,
  `cout` datetime NOT NULL,
  `members` int(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `no_of_room` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `ac_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `deluxac_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `f_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `nonac_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_booking`
--
ALTER TABLE `room_booking`
  MODIFY `b_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
