-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 09, 2022 at 08:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indian_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text DEFAULT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Salman', 'Ranbir', 1, '2022-04-10 15:29:21'),
(2, 'Kiara', 'Kiara', 1111, '2022-04-23 14:26:18'),
(3, 'Salman', 'Priyanka', 1111, '2022-04-23 14:29:08'),
(4, 'Salman', 'Shahrukh', 1, '2022-05-05 21:26:35'),
(5, 'Salman', 'Kiara', 1, '2022-05-05 21:28:45'),
(6, 'Salman', 'Shahrukh', 1, '2022-05-08 13:01:10'),
(7, 'Salman', 'Kiara', 1, '2022-05-08 17:09:10'),
(8, 'Salman', 'Priyanka', 1, '2022-05-08 17:12:25'),
(9, 'Salman', 'Deepika', 1, '2022-05-08 17:20:13'),
(10, 'Salman', 'Shahid', 1, '2022-05-08 17:23:48'),
(11, 'Salman', 'Nick', 9, '2022-05-08 17:24:24'),
(12, 'Salman', 'Nick', 9, '2022-05-08 17:28:37'),
(13, 'Salman', 'Nick', 9, '2022-05-08 17:30:06'),
(14, 'Salman', 'Nick', 9, '2022-05-08 17:30:12'),
(15, 'Salman', 'Nick', 9, '2022-05-08 19:17:11'),
(16, 'Salman', 'Nick', 9, '2022-05-08 19:18:12'),
(17, 'Salman', 'Nick', 9, '2022-05-08 19:19:07'),
(18, 'Salman', 'Nick', 9, '2022-05-08 19:19:29'),
(19, 'Salman', 'Nick', 9, '2022-05-08 19:19:49'),
(20, 'Salman', 'Nick', 9, '2022-05-08 19:22:11'),
(21, 'Salman', 'Nick', 9, '2022-05-08 19:22:50'),
(22, 'Salman', 'Shahrukh', 1, '2022-05-08 19:24:49'),
(23, 'Salman', 'Kiara', 1, '2022-05-08 19:28:15'),
(24, 'Salman', 'Shahid', 1, '2022-05-08 19:28:59'),
(25, 'Salman', 'Deepika', 1, '2022-05-08 19:31:25'),
(26, 'Salman', 'Kiara', 1, '2022-05-08 19:34:01'),
(27, 'Salman', 'Deepika', 1, '2022-05-08 19:34:59'),
(28, 'Salman', 'Kiara', 1, '2022-05-08 19:37:34'),
(29, 'Salman', 'Taapsee', 11, '2022-05-08 19:38:04'),
(30, 'Salman', 'Priyanka', 1, '2022-05-08 19:39:50'),
(31, 'Salman', 'Priyanka', 1, '2022-05-08 19:44:08'),
(32, 'Salman', 'Kiara', 1, '2022-05-08 19:45:04'),
(33, 'Salman', 'Kiara', 1, '2022-05-08 19:46:08'),
(34, 'Salman', 'Kiara', 1, '2022-05-08 19:46:37'),
(35, 'Salman', 'Kiara', 1, '2022-05-08 19:47:25'),
(36, 'Salman', 'Kiara', 1, '2022-05-08 19:52:24'),
(37, 'Salman', 'Ranbir', 1, '2022-05-08 21:14:29'),
(38, 'Salman', 'Ranbir', 1, '2022-05-08 21:20:02'),
(39, 'Salman', 'Ranbir', 1, '2022-05-08 21:21:55'),
(40, 'Salman', 'Ranbir', 1, '2022-05-08 21:22:10'),
(41, 'Salman', 'Ranbir', 1, '2022-05-08 21:22:41'),
(42, 'Salman', 'Ranbir', 1, '2022-05-08 21:23:18'),
(43, 'Salman', 'Ranbir', 1, '2022-05-08 21:23:55'),
(44, 'Salman', 'Ranbir', 1, '2022-05-08 21:26:48'),
(45, 'Salman', 'Ranbir', 1, '2022-05-08 21:27:17'),
(46, 'Salman', 'Ranbir', 1, '2022-05-08 21:31:08'),
(47, 'Salman', 'Ranbir', 1, '2022-05-08 21:32:00'),
(48, 'Salman', 'Ranbir', 1, '2022-05-08 21:32:23'),
(49, 'Salman', 'Ranbir', 1, '2022-05-08 21:34:21'),
(50, 'Salman', 'Ranbir', 1, '2022-05-08 21:35:54'),
(51, 'Salman', 'Ranbir', 1, '2022-05-08 21:37:01'),
(52, 'Salman', 'Ranbir', 1, '2022-05-08 21:37:47'),
(53, 'Salman', 'Ranbir', 1, '2022-05-08 21:37:59'),
(54, 'Salman', 'Ranbir', 1, '2022-05-08 21:38:12'),
(55, 'Salman', 'Ranbir', 1, '2022-05-08 21:38:45'),
(56, 'Salman', 'Ranbir', 1, '2022-05-08 21:39:38'),
(57, 'Salman', 'Ranbir', 1, '2022-05-08 21:41:47'),
(58, 'Salman', 'Ranbir', 1, '2022-05-08 21:41:57'),
(59, 'Salman', 'Ranbir', 1, '2022-05-08 21:42:14'),
(60, 'Salman', 'Ranbir', 1, '2022-05-08 21:42:30'),
(61, 'Salman', 'Ranbir', 1, '2022-05-08 21:43:11'),
(62, 'Salman', 'Ranbir', 1, '2022-05-08 21:46:06'),
(63, 'Salman', 'Ranbir', 1, '2022-05-08 21:47:02'),
(64, 'Salman', 'Ranbir', 1, '2022-05-08 21:49:06'),
(65, 'Salman', 'Ranbir', 1, '2022-05-08 21:49:33'),
(66, 'Salman', 'Ranbir', 1, '2022-05-08 21:50:01'),
(67, 'Salman', 'Ranbir', 1, '2022-05-08 21:51:15'),
(68, 'Salman', 'Ranbir', 1, '2022-05-08 21:51:41'),
(69, 'Salman', 'Ranbir', 1, '2022-05-08 21:54:31'),
(70, 'Salman', 'Ranbir', 1, '2022-05-08 21:56:16'),
(71, 'Salman', 'Ranbir', 1, '2022-05-08 21:57:23'),
(72, 'Salman', 'Ranbir', 1, '2022-05-08 21:57:58'),
(73, 'Salman', 'Ranbir', 1, '2022-05-08 21:58:32'),
(74, 'Salman', 'Ranbir', 1, '2022-05-08 21:59:04'),
(75, 'Salman', 'Priyanka', 1, '2022-05-08 22:01:09'),
(76, 'Salman', 'Priyanka', 1, '2022-05-08 22:01:24'),
(77, 'Salman', 'Priyanka', 1, '2022-05-08 22:02:12'),
(78, 'Salman', 'Kiara', 1, '2022-05-08 22:02:41'),
(79, 'Salman', 'Nick', 1, '2022-05-09 11:29:31'),
(80, 'Salman', 'Taapsee', 1, '2022-05-09 11:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL,
  `utype` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `accountno` varchar(55) NOT NULL,
  `accountstatus` varchar(55) NOT NULL,
  `branch` varchar(55) NOT NULL,
  `address` varchar(99) NOT NULL,
  `atype` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`, `utype`, `password`, `accountno`, `accountstatus`, `branch`, `address`, `atype`) VALUES
(1, 'Salman', 'khan@gmail.com', 49990, 'User', '11', '1234567890', '10', 'Pune', 'Pune', 'Savings'),
(2, 'Kiara', 'advani@gmail.com', 5000020, 'User', '22', '123', '13', 'Kondhwa', 'Camp', 'Current'),
(3, 'Shahrukh', 'shah@gmail.com', 40003, 'User', '33', '', '', '', '0', ''),
(4, 'Priyanka', 'chopra@gmail.com', 51117, 'User', '44', '', '', '', '0', ''),
(5, 'Shahid', 'kapoor@gmail.com', 40002, 'User', '55', '', '', '', '0', ''),
(6, 'Ranbir', 'singh@gmail.com', 30039, 'User', '66', '', '', '', '0', ''),
(7, 'Deepika', 'padukone@gmail.com', 50003, 'User', '77', '', '', '', '0', ''),
(8, 'Juhi', 'chawla@gmail.com', 40000, 'User', '88', '', '', '', '0', ''),
(9, 'Nick', 'jonas@gmail.com', 30100, 'User', '99', '', '', '', '0', ''),
(10, 'Taapsee', 'pannu@gmail.com', 50012, 'User', '1010', '', '', '', '0', ''),
(11, 'ADMIN', 'a@a.a', 220000, 'Admin', 'a', '', '', '', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
