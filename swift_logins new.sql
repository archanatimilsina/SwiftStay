-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 09:07 PM
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
-- Database: `swift_logins`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `profile`, `name`, `username`, `email`, `password`, `created_at`) VALUES
(3, 'uploads/0a2ad6daf3c74a53cc98e2c4992a4501.jpg', 'Archana Timilsina', 'archu', 'archu@gmail.com', '$2y$10$mbzUDxBIUjrxdeEDkQmOberYfkWHPfSL5PhhE1hHqLAkcCLj5SYHa', '2024-04-22 18:22:05'),
(4, 'uploads/1.jpg', 'house', 'house', 'house@gmail.com', '$2y$10$3XPcEemMAgr5EQ9xtiKsNuDnaqhMiJIq0gmfGOoq.tmeoWYRWFPYa', '2024-04-22 18:26:15'),
(5, 'uploads/6ad215670d5c2e4488f736c568e2b9bc.jpg', 'hello', 'hello', 'hello@gmail.com', '$2y$10$tgbFHodRjnaCnhveE0vFAOzYTU5XHC3fjAX4BrTbtNqExYGjenW.e', '2024-04-24 05:20:38'),
(6, 'uploads/0fbef395920e0cf06477d971323c337c.jpg', 'Arpana Khanal', 'kalu', 'kalu@gmail.com', '$2y$10$RgHs8CnueKG2E1mEGporq.eRzITfXZIP53w1gmUi5fRdBAAC2qi4K', '2024-04-28 12:00:36'),
(7, 'uploads/0fbef395920e0cf06477d971323c337c.jpg', 'Arpana Khanal', 'zoro', 'zoro@gmail.com', '$2y$10$X3XBWtUYgfeCz/PyCzS7SuT0M1tnyvB5TXj0qM6RzMpXnhvy2.vZG', '2024-04-28 12:01:51'),
(8, 'uploads/1c40868058da07244c72bada565fe137.jpg', 'pen', 'pen', 'pen@gmail.com', '$2y$10$3D/.mKxC35EC0wpvij1HSuuRRffxcQjDUxjdIoHQ3tdZ7FWsWmYdu', '2024-04-28 12:02:44'),
(9, 'uploads/01e52957992fd8801e9228c078be0aa0.jpg', '1223243424', 'dsadfaadadfaffffffd', 'afddga@gmail.com', '$2y$10$oXbqdDw88VQZxvPoKtuxwuQqNb0LTwleHVIGLM39uYE1gcsVXG/ki', '2024-04-28 23:29:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
