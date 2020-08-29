-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2020 at 04:56 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voca_beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `role` int(11) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`, `created_by`, `updated_by`, `photo`) VALUES
(1, 'jenny', 'HQrJx4AGGyjCFOxc67OsznuwtfyLOkRy', '$2y$13$K.eeO.jjCO6S3mO405TtKe0EwXN6.jc812kCmaROUxTcsV3rla712', NULL, 'tan.ardi94@gmail.com', 10, '2020-07-08 11:00:00', '2020-07-08 11:00:00', 11, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `unique_id`, `name`, `price`, `photo`, `description`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, '563912202395f47472c06aa10.00671102', 'vocas', 12000, 'vocas-227-563912202395f47472c06aa10.00671102.jpg', 'percobaan produk vocas', 1, 1, '2020-08-27 12:39:56', 1, '2020-08-27 13:09:20'),
(2, '155919202395f47ae23efa026.39864077', 'voca ginseng', 150000, 'voca ginseng-812-155919202395f47ae23efa026.39864077.jpg', 'ini adalah voca ginseng produk terbaru', 1, 1, '2020-08-27 19:59:16', 1, '2020-08-27 19:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review` text DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `unique_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `encrypted_password` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salt` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_password` int(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT -1,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT -1,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Male',
  `token` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT '1970-01-01'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `unique_id`, `username`, `name`, `email`, `photo`, `encrypted_password`, `salt`, `auth_key`, `updated_password`, `created_at`, `created_by`, `updated_at`, `updated_by`, `gender`, `token`, `password_reset_token`, `phone`, `address`, `birth_date`) VALUES
(10001, 0, '291008191845d1db475e58c86.31984671', 'tanardi', 'ardi tan', 'valouriee22@yopmail.com', NULL, 'mb6NE7G9Wzk4ghwhRQDB4V5J1EkzNjU4YjkzNmNk', '3658b936cd', NULL, 0, '2019-07-04 15:10:30', -1, '2020-08-27 13:14:09', 1, 'Male', NULL, NULL, NULL, NULL, '1970-01-01'),
(10002, 0, '320413202395f474cf07ea063.42341573', 'tanardi', 'ardi tan', 'tanardi@yopmail.com', 'ardi tan-332-320413202395f474cf07ea063.42341573.jpg', 'pKPtsFEOQcowr1/lZsA/pcHZg+xiMjQ4YzQwNjJm', 'b248c4062f', NULL, 0, '2020-08-27 13:04:32', 1, '2020-08-27 13:09:48', 1, 'Male', NULL, NULL, '082237567095', 'darmo permai utara', '1995-02-15'),
(10003, 0, '590413202395f474d0b9dde20.49371186', 'tanardi', 'ardi tan', 'tanardi@yopmail.com', 'ardi tan-472-590413202395f474d0b9dde20.49371186.jpg', 'dSuyXPqxd2IDOwPUUiRw3q1FtbJjYjZhMTI1ODk2', 'cb6a125896', NULL, 0, '2020-08-27 13:04:59', 1, '2020-08-27 13:09:52', 1, 'Male', NULL, NULL, '082237567095', 'darmo permai utara', '1995-02-15'),
(10004, 0, '451013202395f474e6595e792.50560915', 'stevens', 'steven wijaya', 'stevens@yomail.com', 'steven wijaya-736-451013202395f474e6595e792.50560915.jpg', '0U+w0lIwuX2FFj6T/Zfo8//rDfs4YjFiMDdjNmI1', '8b1b07c6b5', NULL, 0, '2020-08-27 13:10:45', 1, '2020-08-27 13:14:12', 1, 'Male', NULL, NULL, '08123456789', 'dps', '2008-06-03'),
(10005, 1, '481413202395f474f58f21dd4.52361709', 'stevens', 'steven wij', 'stevens@abc.com', 'steven wij-545-481413202395f474f58f21dd4.52361709.jpg', 'h1+IIvVOtBifHxUtl2ejaxV7fRhmNDYwNGI2Mjgw', 'f4604b6280', NULL, 0, '2020-08-27 13:14:48', 1, '2020-08-27 20:56:07', 1, 'Female', NULL, NULL, '08221325468', 'dpu', '2009-02-17'),
(10006, 1, '', 'sieger', '', 'sieger@example.com', NULL, '1FHwLHLDM6nLblnfBseb7usk4sUyYTgyNTY2MjM3', '2a82566237', 'R4ifCttjeyqcLYl4riUZaopSSS16Zxf8', 0, '2020-08-27 20:23:41', -1, '2020-08-27 20:23:41', -1, 'Male', NULL, NULL, NULL, NULL, '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users_points`
--

CREATE TABLE `users_points` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Product_un` (`unique_id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_review_FK` (`user_id`),
  ADD KEY `product_review_FK_1` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users_points`
--
ALTER TABLE `users_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_points_FK` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;

--
-- AUTO_INCREMENT for table `users_points`
--
ALTER TABLE `users_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `product_review_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `product_review_FK_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `users_points`
--
ALTER TABLE `users_points`
  ADD CONSTRAINT `users_points_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
