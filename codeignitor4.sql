-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 02:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeignitor4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'samir', 'samir@gmail.com', '$2y$10$EyXMTrq.AxetyrcUVxIpHOHBUmOIoQPjcj8MFxSSCOkOJfhtFEyAG', NULL, NULL, NULL),
(9, 'samir', 'koladiyasamir@gmail.com', '$2y$10$7gq21/AXjSqlsKA5hp1lTuIoXtRNEQ09LXlQn40wKPHw3CKp/Qdwm', NULL, NULL, NULL),
(10, 'samir', 'samir1@gmail.com', '$2y$10$QnpEJ1/I/8Rjxow1Qes8YO0JP9bkRolx5v8rxECuVzIV29Z3rBH4O', NULL, NULL, NULL),
(11, 'samir', 'samir2@gmail.com', '$2y$10$S7rZi3J4Nmd5XeAZ6YDuZu09pFtGYWzmpL6reqSIccxE4Bh1e89US', NULL, NULL, NULL),
(12, '', '', '$2y$10$4e/YsjkGKKubyz9/F7it.uUe9ZMlSkMzdachAmPY1dWL3WXQ0g9T6', NULL, NULL, NULL),
(13, '   dddd   ', 'samir@gmail.com', '$2y$10$a.khsCbNDfNCMQh2CZq1C.bn7oaXmDzlm1Tudl/4EX9TFLnJr91A.', NULL, NULL, NULL),
(14, 'ffff', 'samir@gmail.com', '$2y$10$a2pgafkTrRC34DdV/NEXt.j0tsfVOB3CAB5UdXbdbruFIbJj7MbGy', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
