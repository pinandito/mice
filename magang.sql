-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 07:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `maginf`
--

CREATE TABLE `maginf` (
  `idmag` int(11) NOT NULL,
  `mag_idp` int(11) NOT NULL,
  `magnama` varchar(45) NOT NULL,
  `maglok` varchar(255) NOT NULL,
  `magdesk` varchar(255) NOT NULL,
  `mcreated_at` timestamp NULL DEFAULT NULL,
  `mupdated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maginf`
--

INSERT INTO `maginf` (`idmag`, `mag_idp`, `magnama`, `maglok`, `magdesk`, `mcreated_at`, `mupdated_at`) VALUES
(1, 4, 'Staf Akuntansi', 'Bekasi', 'Sarjana Akuntansi', '2017-10-08 09:47:25', '2017-10-08 09:47:25'),
(2, 4, 'Staf Keuangan', 'Cawang, Jakarta', 'SMK Akuntansi', '2017-10-08 09:47:58', '2017-10-08 09:47:58'),
(3, 4, 'Staf Keuangan', 'Cawang, Jakarta', 'SMK Akuntansi', '2017-10-08 09:47:58', '2017-10-08 09:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_08_095222_add_kategori_field_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglhr` date DEFAULT NULL,
  `alamlok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telpa` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gamb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendter` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurus` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institusi` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `kategori`, `namalengkap`, `tglhr`, `alamlok`, `telp`, `telpa`, `gamb`, `foto`, `pendter`, `jurus`, `institusi`, `resume`) VALUES
(1, 'pinandito', 'i.pinandito@gmail.com', '$2y$10$JXa6abH9pRojL7tcIo5j2eaA/OmMMA5cMnfKB124ChUEjksWbWraS', 'hTvQWXdR0Y5U3EploTWuM4ZmpjxV7DR3ojD5lfht5su4F6dPYjHODg6HrSXS', '2017-10-08 03:05:09', '2017-10-08 06:06:58', 'pekerja', 'Inu Pinandito', '1985-04-04', 'Biru Laut', '087854200992', NULL, NULL, NULL, 'Doktoral', 'Ekonomi Akuntansi', 'Universitas Airlangga', NULL),
(2, 'dewi', 'dewinugr@yahoo.com', '$2y$10$y.VzNLSD7IRRf1fmf367v.7uMFcn6U8SEKrcMgILZnVsokhcdwCka', 'lqaMymBxK4r8q1XBEcgP6y6qiYHKPtK53lDu9hZZAhqalXmIXdKQl14Xqe8m', '2017-10-08 03:07:11', '2017-10-08 03:07:11', 'pekerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'danil', 'danil@yahoo.com', '$2y$10$cz9LdV.ZnsgGFdzKndED5eaijJn8gLz7uRZaPZDG0n/hFO00jL9vm', 'Eap1DHRYgYhKUg0Zwr5IoraM8lyDRJaYeXxmJiJSLg525MTQOOlaQjPH1TSi', '2017-10-08 03:14:40', '2017-10-08 03:26:07', 'pekerja', 'Rahman Danil', '1990-03-03', 'Bekasi', '08333222444', NULL, NULL, NULL, 'Pasca Sarjana', 'Teknik Sipil', 'Universitas Mercubuana', NULL),
(4, 'PT Wijaya Karya Pracetak Gedung', 'wikapracetak@gmail.com', '$2y$10$zGVEx9tm/7pkYwAVZnCBGew.yavwqjU8FmDVEzFimE99OWPySlYuO', '5nwt8LS6FJlFPtRkUzBREFmNB6TMDtcdwdpokBgBsXooq6JnM1ulAwDMPGyf', '2017-10-08 03:34:23', '2017-10-08 04:19:14', 'perusahaan', 'PT Wijaya Karya Pracetak Gedung', '2017-01-17', 'Gedung Kokar Wika Lt 2 Jl. Biru Laut', '02122892549', '02122892549', 'Bla bla bla', NULL, 'Konstruksi', 'Fabrikasi Beton Pracetak', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maginf`
--
ALTER TABLE `maginf`
  ADD PRIMARY KEY (`idmag`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `maginf`
--
ALTER TABLE `maginf`
  MODIFY `idmag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
