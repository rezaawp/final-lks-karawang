-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 11:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `choises`
--

CREATE TABLE `choises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `choise` varchar(255) NOT NULL,
  `poll_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `choises`
--

INSERT INTO `choises` (`id`, `choise`, `poll_id`, `created_at`, `updated_at`) VALUES
(1, 'Nulla.', 3, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(2, 'Facilis.', 2, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(3, 'Nam.', 5, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(4, 'Ea qui.', 1, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(5, 'Ratione.', 5, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(6, 'Ut nobis.', 4, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(7, 'A.', 4, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(8, 'Id autem.', 1, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(9, 'Natus.', 3, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(10, 'Quod ut.', 3, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(11, 'In.', 5, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(12, 'Aut cum.', 5, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(13, 'Rem.', 2, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(14, 'Sit quas.', 3, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(15, 'Aut.', 2, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(16, 'Reza', 6, '2023-04-11 08:13:43', '2023-04-11 08:13:43'),
(17, 'Redi', 6, '2023-04-11 08:13:43', '2023-04-11 08:13:43'),
(18, 'WFO', 7, '2023-04-11 08:26:10', '2023-04-11 08:26:10'),
(19, 'WFH', 7, '2023-04-11 08:26:10', '2023-04-11 08:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Payment', '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(2, 'Procurement', '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(3, 'IT', '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(4, 'Finance', '2023-04-11 08:00:14', '2023-04-11 08:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_04_10_033532_create_divisions_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_10_031924_create_polls_table', 1),
(7, '2023_04_10_031934_create_choises_table', 1),
(8, '2023_04_10_032214_create_votes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `deadline` datetime NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `title`, `description`, `deadline`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Assumenda.', 'Dolor neque perferendis non sit.', '2023-04-11 15:00:14', 11, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(2, 'Neque.', 'Praesentium numquam ut dolores qui quis.', '2023-04-11 15:00:14', 11, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(3, 'Quo.', 'Et quis est minima hic.', '2023-04-11 15:00:14', 11, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(4, 'Pariatur.', 'Animi illo nam quia quibusdam facere.', '2023-04-11 15:00:14', 11, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(5, 'Fuga.', 'Quia est ut ex rerum.', '2023-04-11 15:00:14', 11, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(6, 'Siapa orang paling ganteng?', 'Silahkan pilih orang paling ganteng di bawah ini', '2023-04-12 15:13:00', 11, NULL, '2023-04-11 08:13:43', '2023-04-11 08:13:43'),
(7, 'WFO WFH', 'Lebih produktif WFO / WFH', '2023-04-12 15:25:00', 11, NULL, '2023-04-11 08:26:10', '2023-04-11 08:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `division_id` bigint(20) UNSIGNED DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `change_password` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email_verified_at`, `role`, `division_id`, `password`, `change_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tess Abernathy', 'boyer.karl', NULL, 'user', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(2, 'Sebastian Reinger V', 'bertrand07', NULL, 'user', 3, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(3, 'Russell Nitzsche', 'calista89', NULL, 'user', 4, '$2y$10$MLiI2v4CDaDlyKT16SzXWeXEaHLcsi8wQcG6Kk6ZtE99bgoJ/amM2', 1, NULL, '2023-04-11 08:00:14', '2023-04-11 08:14:45'),
(4, 'Ms. Marcia Bogan', 'frederic.schaden', NULL, 'user', 3, '$2y$10$6.hJeyFdViiTjEQApwxqROzG6eME1XxX3MM1xps8P8XWjHWto3Whm', 1, NULL, '2023-04-11 08:00:14', '2023-04-11 08:21:28'),
(5, 'Dianna Maggio', 'lura.carter', NULL, 'user', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(6, 'Oleta Wilderman', 'zoe83', NULL, 'user', 4, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(7, 'Abbie Lockman', 'yshields', NULL, 'user', 3, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(8, 'Ms. Celia Buckridge', 'heaven04', NULL, 'user', 3, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(9, 'Nola Fay', 'walsh.princess', NULL, 'user', 1, '$2y$10$MB5JP/M/4gvR2PuWZZWb4upaLUKQ5B8FtZgI770nZk1JV0wrN7HI2', 1, NULL, '2023-04-11 08:00:14', '2023-04-11 08:28:29'),
(10, 'Prof. Maybelle Rau MD', 'ottis87', NULL, 'user', 3, '$2y$10$dl4uW5NpzuwxPxvOQdNNuuU67NFoLmVyr1Jz8TxHkp4YSQXpoML6a', 1, NULL, '2023-04-11 08:00:14', '2023-04-11 08:29:29'),
(11, 'Admin', 'admin_123', NULL, 'admin', NULL, '$2y$10$K5UKJptLLDhET8mEOg.YU.JVwBe3j31PkrboPDNX1xDy9ytqhROHm', 1, NULL, '2023-04-11 08:00:14', '2023-04-11 08:11:59'),
(12, 'User', 'user_123', NULL, 'user', NULL, '$2y$10$Aua0EtTqHcK9x1HnCnDRxOmK60ciZm0AFFaCkdZAdOO56hzgL8lVa', 0, NULL, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(13, 'Ryan', 'ryan', NULL, 'user', 1, '$2y$10$hlOiQmlMeLlH.Jb5Rv0cIekH3TyB7LVYu6nUW6nFpHPoCqvN7RD5u', 1, NULL, '2023-04-11 08:00:14', '2023-04-11 08:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `choise_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `poll_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `choise_id`, `user_id`, `poll_id`, `division_id`, `created_at`, `updated_at`) VALUES
(1, 6, 12, 4, 1, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(2, 14, 3, 3, 4, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(3, 8, 1, 1, 1, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(4, 7, 1, 4, 1, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(5, 9, 8, 3, 4, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(6, 2, 3, 2, 2, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(7, 7, 11, 4, 2, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(8, 13, 6, 2, 4, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(9, 8, 2, 1, 3, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(10, 6, 1, 4, 1, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(11, 6, 10, 4, 1, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(12, 15, 11, 2, 4, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(13, 6, 7, 4, 2, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(14, 6, 9, 4, 1, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(15, 15, 6, 2, 1, '2023-04-11 08:00:14', '2023-04-11 08:00:14'),
(16, 16, 3, 6, 4, '2023-04-11 08:17:45', '2023-04-11 08:17:45'),
(17, 17, 4, 6, 3, '2023-04-11 08:21:55', '2023-04-11 08:21:55'),
(18, 18, 13, 7, 1, '2023-04-11 08:27:54', '2023-04-11 08:27:54'),
(19, 18, 9, 7, 1, '2023-04-11 08:28:50', '2023-04-11 08:28:50'),
(20, 19, 10, 7, 3, '2023-04-11 08:29:42', '2023-04-11 08:29:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choises`
--
ALTER TABLE `choises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `choises_poll_id_foreign` (`poll_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `polls_created_by_foreign` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `votes_choise_id_foreign` (`choise_id`),
  ADD KEY `votes_user_id_foreign` (`user_id`),
  ADD KEY `votes_poll_id_foreign` (`poll_id`),
  ADD KEY `votes_division_id_foreign` (`division_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choises`
--
ALTER TABLE `choises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choises`
--
ALTER TABLE `choises`
  ADD CONSTRAINT `choises_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`);

--
-- Constraints for table `polls`
--
ALTER TABLE `polls`
  ADD CONSTRAINT `polls_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_choise_id_foreign` FOREIGN KEY (`choise_id`) REFERENCES `choises` (`id`),
  ADD CONSTRAINT `votes_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`),
  ADD CONSTRAINT `votes_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`),
  ADD CONSTRAINT `votes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
