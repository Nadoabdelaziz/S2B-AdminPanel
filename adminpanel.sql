-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 08:29 PM
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
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

DROP TABLE IF EXISTS `dealers`;
CREATE TABLE `dealers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `bank_ifsc` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `distributor_id` varchar(255) DEFAULT NULL,
  `cheque_number` varchar(255) DEFAULT NULL,
  `neft_number` varchar(255) DEFAULT NULL,
  `neft_details` varchar(255) DEFAULT NULL,
  `approval_status` varchar(255) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

DROP TABLE IF EXISTS `distributors`;
CREATE TABLE `distributors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `mobile_number` longtext DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `bank_ifsc` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `cheque_number` varchar(255) DEFAULT NULL,
  `neft_number` varchar(255) DEFAULT NULL,
  `neft_details` varchar(255) DEFAULT NULL,
  `approval_status` varchar(255) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `name`, `email`, `mobile_number`, `country`, `city`, `state`, `bank_ifsc`, `bank_name`, `payment_type`, `cheque_number`, `neft_number`, `neft_details`, `approval_status`, `role_id`) VALUES
(6, 'Muhammed', 'newdist@email.com', '123456789', 'Egypt', 'Cairo', NULL, 'ajshdvaj', 'amshdvajs', 'product1', '5646456', NULL, NULL, '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `role` varchar(255) NOT NULL,
  `users` int(11) NOT NULL DEFAULT 0,
  `users_edit` int(11) DEFAULT NULL,
  `dist_add` int(11) NOT NULL,
  `deal_add` int(11) NOT NULL,
  `roles_edit` int(11) DEFAULT NULL,
  `dist` int(11) NOT NULL DEFAULT 0,
  `deal` int(11) NOT NULL DEFAULT 0,
  `roles` int(11) NOT NULL DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role`, `users`, `users_edit`, `dist_add`, `deal_add`, `roles_edit`, `dist`, `deal`, `roles`, `id`) VALUES
('1', 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2', 0, 0, 1, 1, 0, 1, 1, 0, 2),
('3', 0, 0, 0, 0, 0, 0, 1, 0, 3),
('4', 0, 0, 1, 1, 0, 1, 1, 0, 4),
('5', 1, 1, 1, 1, 1, 1, 1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` datetime(6) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_user` varchar(255) NOT NULL DEFAULT '1',
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_user`, `country`, `city`, `state`, `mobile_number`) VALUES
(1, 'nada', 'admin@admin.com', NULL, '123', '1', '', '', '', ''),
(2, 'SuperAdmin', 'super@email.com', NULL, '123', '1', '', '', '', ''),
(3, 'Distributor', 'dist@email.com', NULL, '123', '2', '', '', '', ''),
(4, 'Dealer', 'dealer@email.com', NULL, '123', '3', '', '', '', ''),
(5, 'SO', 'so@email.com', NULL, '123', '4', '', '', '', ''),
(6, 'Support', 'sup@email.com', NULL, '123', '5', '', '', '', ''),
(11, 'Muhammed', 'newdist@email.com', NULL, '123', '2', 'Egypt', 'Cairo', NULL, '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
