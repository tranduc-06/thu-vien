-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 06:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_Danhmuc` int(50) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL,
  `slugdanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_Danhmuc`, `tendanhmuc`, `slugdanhmuc`) VALUES
(9, 'Sách khoa học', 'sach-khoa-hoc'),
(10, 'Sách lập trình', 'sach-lap-trinh'),
(12, 'Sách ngữ văn', 'sach-ngu-van'),
(14, 'Sách tiếng anh', 'sach-tieng-anh');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `muontra`
--

CREATE TABLE `muontra` (
  `id_Muontra` int(11) NOT NULL,
  `id_Sach` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ngay_Muon` date NOT NULL,
  `ngay_Hentra` date NOT NULL,
  `ngay_Tra` date DEFAULT NULL,
  `tinhtrang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muontra`
--

INSERT INTO `muontra` (`id_Muontra`, `id_Sach`, `id`, `ngay_Muon`, `ngay_Hentra`, `ngay_Tra`, `tinhtrang`) VALUES
(1, 2, 3, '2021-08-01', '2022-07-31', NULL, 'Đồng ý'),
(2, 8, 2, '2021-08-01', '2022-08-01', NULL, 'Đang chờ'),
(3, 8, 3, '2021-08-01', '2022-08-01', '2021-08-01', 'Đã trả');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tranmanhduc0964875742@gmail.com', '$2y$10$WuAz6eib6y8Skoe4AMvNHOZ4UiNnG9tuSMfxYEKmQ4JIhHr.n91Rm', '2021-07-31 19:23:36'),
('ductm00@gmail.com', '$2y$10$qbhqhmpeStgZ.w4sngLaMOtZ9CwStE/qaeUIiUS8.HcHbohp.wnP2', '2021-07-31 19:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `id_Sach` int(50) NOT NULL,
  `tensach` varchar(50) NOT NULL,
  `slugsach` varchar(100) NOT NULL,
  `tentacgia` varchar(50) NOT NULL,
  `id_Danhmuc` varchar(50) NOT NULL,
  `nhaxuatban` varchar(50) NOT NULL,
  `namxuatban` int(10) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `tomtat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`id_Sach`, `tensach`, `slugsach`, `tentacgia`, `id_Danhmuc`, `nhaxuatban`, `namxuatban`, `hinhanh`, `tomtat`) VALUES
(2, 'Tiếng anh cơ sở 6', 'tieng-anh-co-so-6', 'Trần Mạnh Đức', '14', 'Đại Học Quốc Gia Hà Nội', 2001, 'tienganh39.jpg', 'fffffffffffffffff'),
(7, 'Phát triển ứng dụng web', 'phat-trien-ung-dung-web', 'Lê Đình Thanh', '10', 'Đại Học Quốc Gia Hà Nội', 2000, 'web70.jpg', 'fffffffffffffffffffffffffff'),
(8, 'phát triển ứng dụng web 11', 'phat-trien-ung-dung-web-11', 'Trần Mạnh Đức', '10', 'Đại Học Quốc Gia Hà Nội', 1111, 'web72.jpg', '111111111111');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `address`) VALUES
(1, 'Đức', 'tranmanhduc0964875742@gmail.com', NULL, '$2y$10$tdz1mqzztnWRQcX8D2/2a.xsalyVCcpkZd/Pyb8xDqNNS1huya0uC', 'KiVPjApueuDSrZHTZN3t3DxvaPQgZKqE7LAFi4bMRT9HzGaW2SJPpXrV6I0M', '2021-07-14 03:55:51', '2021-07-14 03:55:51', '', ''),
(2, 'Đứcc', 'ductm00@gmail.com', NULL, '$2y$10$Em4irEIqP9nb98KtS7mjFuTefmtwqa9blLHI/qQrWsZxA.6d5mRAO', NULL, '2021-07-28 00:53:29', '2021-07-28 00:53:29', '', ''),
(3, 'Đứccc', '18020341@vun.edu.vn', NULL, '$2y$10$c05djjCsjpTGaq4MIJWVhOAwXRQX9E5C1ZvkFrZUz1cFwWXlsDUo2', NULL, '2021-07-28 01:44:06', '2021-07-28 01:44:06', '', ''),
(4, 'Đức', 'fffff@gmail.com', NULL, '$2y$10$x3vFxcubdSTFf2HZzIMb2.61b08NnAw3Zhcfqkbc1Q.ob.upXoUtG', NULL, '2021-07-31 02:18:57', '2021-07-31 02:18:57', '0964875742', 'trung hoà cầu giấy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_Danhmuc`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muontra`
--
ALTER TABLE `muontra`
  ADD PRIMARY KEY (`id_Muontra`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id_Sach`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_Danhmuc` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `muontra`
--
ALTER TABLE `muontra`
  MODIFY `id_Muontra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `id_Sach` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
