-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 01:55 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel6`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`, `code`, `img`, `updated_at`, `created_at`) VALUES
(1, 'English', 'en', 'us', '2019-10-24 06:00:33', '2019-10-24 01:07:42'),
(2, 'Spanish', 'es', 'es', '2019-10-24 06:09:43', '2019-10-24 01:14:50'),
(3, 'Portuguese', 'pt', 'br', '2019-10-24 05:47:33', '2019-10-24 01:15:06'),
(4, 'French', 'fr', 'de', '2019-10-24 06:13:28', '2019-10-24 01:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `updated_at`, `created_at`) VALUES
(1, 'View', '2019-10-30 10:17:48', NULL),
(2, 'Add', '2019-10-30 10:17:48', NULL),
(3, 'Edit', '2019-10-30 10:17:58', NULL),
(4, 'Delete', '2019-10-30 10:17:58', NULL),
(5, 'Access', '2019-11-01 06:59:59', '2019-11-01 06:59:59'),
(6, 'Permission', '2019-11-01 07:03:09', '2019-11-01 07:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `rolls`
--

CREATE TABLE `rolls` (
  `id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rolls`
--

INSERT INTO `rolls` (`id`, `title`, `updated_at`, `created_at`) VALUES
(1, 'Super Admin', '2019-10-30 10:01:26', NULL),
(3, 'Admin', '2019-11-01 07:04:47', NULL),
(6, 'Manager', '2019-11-01 07:04:27', '2019-10-31 07:52:57'),
(7, 'Programmer', '2019-10-31 08:09:37', '2019-10-31 08:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `roll_permissions`
--

CREATE TABLE `roll_permissions` (
  `id` int(11) NOT NULL,
  `roll_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `module` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(1) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roll_permissions`
--

INSERT INTO `roll_permissions` (`id`, `roll_id`, `permission_id`, `module`, `value`, `updated_at`, `created_at`) VALUES
(57, 1, 1, 'global', 1, '2019-11-05 06:19:43', '2019-11-01 07:13:59'),
(58, 3, 1, 'global', 1, '2019-11-01 07:17:42', '2019-11-01 07:14:01'),
(59, 6, 1, 'global', 1, '2019-11-01 07:14:03', '2019-11-01 07:14:03'),
(60, 7, 1, 'global', 1, '2019-11-01 07:14:04', '2019-11-01 07:14:04'),
(61, 3, 1, 'roll', 1, '2019-11-01 07:16:41', '2019-11-01 07:16:41'),
(62, 1, 1, 'roll', 0, '2019-11-05 06:00:48', '2019-11-01 07:16:42'),
(63, 6, 1, 'roll', 0, '2019-11-01 07:16:43', '2019-11-01 07:16:43'),
(64, 7, 1, 'roll', 0, '2019-11-01 07:16:44', '2019-11-01 07:16:44'),
(65, 1, 2, 'global', 1, '2019-11-01 07:17:35', '2019-11-01 07:17:35'),
(66, 1, 3, 'global', 1, '2019-11-01 07:17:37', '2019-11-01 07:17:36'),
(67, 1, 4, 'global', 1, '2019-11-01 07:17:37', '2019-11-01 07:17:37'),
(68, 1, 5, 'global', 1, '2019-11-01 07:17:38', '2019-11-01 07:17:38'),
(69, 1, 6, 'global', 1, '2019-11-01 07:17:39', '2019-11-01 07:17:39'),
(70, 3, 2, 'global', 1, '2019-11-01 07:17:43', '2019-11-01 07:17:43'),
(71, 3, 3, 'global', 1, '2019-11-01 07:17:44', '2019-11-01 07:17:44'),
(72, 3, 4, 'global', 1, '2019-11-01 07:17:46', '2019-11-01 07:17:46'),
(73, 3, 5, 'global', 1, '2019-11-01 07:17:48', '2019-11-01 07:17:48'),
(74, 3, 6, 'global', 1, '2019-11-01 07:17:51', '2019-11-01 07:17:51'),
(75, 6, 2, 'global', 1, '2019-11-01 07:17:54', '2019-11-01 07:17:54'),
(76, 6, 3, 'global', 1, '2019-11-01 07:17:55', '2019-11-01 07:17:55'),
(77, 6, 5, 'global', 1, '2019-11-01 07:17:59', '2019-11-01 07:17:59'),
(78, 7, 5, 'global', 0, '2019-11-01 07:18:09', '2019-11-01 07:18:01'),
(79, 7, 2, 'global', 1, '2019-11-01 07:18:21', '2019-11-01 07:18:21'),
(80, 7, 3, 'global', 1, '2019-11-01 07:18:26', '2019-11-01 07:18:26'),
(81, 6, 5, 'roll', 0, '2019-11-01 07:19:14', '2019-11-01 07:19:14'),
(82, 6, 3, 'roll', 0, '2019-11-01 07:19:22', '2019-11-01 07:19:22'),
(83, 6, 2, 'roll', 0, '2019-11-01 07:19:24', '2019-11-01 07:19:24'),
(84, 7, 2, 'roll', 0, '2019-11-01 07:19:24', '2019-11-01 07:19:24'),
(85, 7, 3, 'roll', 0, '2019-11-01 07:19:25', '2019-11-01 07:19:25'),
(86, 3, 1, 'permission', 0, '2019-11-01 07:20:37', '2019-11-01 07:20:37'),
(87, 6, 1, 'permission', 0, '2019-11-01 07:20:39', '2019-11-01 07:20:39'),
(88, 7, 1, 'permission', 0, '2019-11-01 07:20:39', '2019-11-01 07:20:39'),
(89, 7, 2, 'permission', 0, '2019-11-01 07:20:40', '2019-11-01 07:20:40'),
(90, 6, 2, 'permission', 0, '2019-11-01 07:20:41', '2019-11-01 07:20:41'),
(91, 3, 2, 'permission', 0, '2019-11-01 07:20:42', '2019-11-01 07:20:42'),
(92, 3, 3, 'permission', 0, '2019-11-01 07:20:42', '2019-11-01 07:20:42'),
(93, 6, 3, 'permission', 0, '2019-11-01 07:20:43', '2019-11-01 07:20:43'),
(94, 7, 3, 'permission', 0, '2019-11-01 07:20:44', '2019-11-01 07:20:44'),
(95, 3, 4, 'permission', 0, '2019-11-01 07:20:44', '2019-11-01 07:20:44'),
(96, 3, 5, 'permission', 0, '2019-11-01 07:20:46', '2019-11-01 07:20:46'),
(97, 6, 5, 'permission', 0, '2019-11-01 07:20:47', '2019-11-01 07:20:47'),
(98, 3, 6, 'permission', 0, '2019-11-01 07:20:51', '2019-11-01 07:20:51'),
(99, 7, 1, 'user', 0, '2019-11-01 08:05:13', '2019-11-01 08:05:13'),
(100, 7, 2, 'user', 0, '2019-11-01 08:05:15', '2019-11-01 08:05:14'),
(101, 7, 3, 'user', 0, '2019-11-01 08:05:15', '2019-11-01 08:05:15'),
(102, 6, 1, 'user', 1, '2019-11-01 08:05:40', '2019-11-01 08:05:39'),
(103, 1, 2, 'roll', 1, '2019-11-05 06:03:19', '2019-11-05 06:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `fkey` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fvalue` longtext COLLATE utf8mb4_unicode_ci,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `fkey`, `fvalue`, `updated_at`, `created_at`) VALUES
(1, 'bg-color', 'ibiza-sunset', '2019-10-25 03:14:18', '2019-10-24 01:07:42'),
(2, 'sidebar-background', 'http://localhost:8000/app-assets/img/sidebar-bg/02.jpg', '2019-11-01 06:59:24', '2019-10-24 01:14:50'),
(3, 'sidebar-width', 'sidebar-lg', '2019-10-24 05:47:33', '2019-10-24 01:15:06'),
(4, 'theme-layout', 'transparent', '2019-11-05 06:52:02', '2019-10-24 01:15:32'),
(5, 'theme-transparent-bg', 'bg-glass-4', '2019-11-05 06:52:05', '2019-10-24 05:26:56'),
(6, 'compact-menu', '0', '2019-10-25 03:14:41', '2019-10-24 05:41:57'),
(7, 'active_lang', 'en', '2019-11-05 06:54:17', '2019-10-24 06:37:05'),
(8, 'admin-menu-json', '[{\"text\":\"Rolls\",\"href\":\"/admin/rolls\",\"icon\":\"fa fa-address-book\",\"target\":\"_self\",\"title\":\"Rolls\",\"rolls\":[\"1\",\"3\"]},{\"text\":\"Permissions\",\"href\":\"/admin/permissions\",\"icon\":\"fa fa-black-tie\",\"target\":\"_self\",\"title\":\"Permissions\",\"rolls\":[\"1\"]},{\"text\":\"Roll Permissions\",\"href\":\"/admin/rollpermissions/global\",\"icon\":\"fa fa-arrows\",\"target\":\"_self\",\"title\":\"Roll Permissions\",\"rolls\":[\"1\",\"3\"]},{\"text\":\"Users\",\"icon\":\"\",\"href\":\"/admin/users\",\"target\":\"_self\",\"title\":\"\",\"rolls\":[\"1\",\"3\",\"6\",\"7\"]}]', '2019-11-05 06:26:27', '2019-10-25 06:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `deleted_at`) VALUES
(26, 'Malkesh', 'themalkesh@gmail.com', NULL, '$2y$10$cWfrRpwttKRXtkf9yigDseiHy7/3pj390/6umiBMjzc.6tL4PLlNK', NULL, '2019-10-30 07:23:09', '2019-11-01 08:04:49', 0, NULL),
(29, 'Ishan', 'ishan@citrusbug.com', NULL, 'citrusbug', NULL, '2019-11-01 08:01:00', '2019-11-01 08:01:00', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_rolls`
--

CREATE TABLE `user_rolls` (
  `id` int(11) NOT NULL,
  `roll_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_rolls`
--

INSERT INTO `user_rolls` (`id`, `roll_id`, `user_id`, `updated_at`, `created_at`) VALUES
(1, 1, 29, '2019-11-01 08:37:14', '2019-11-01 08:37:14'),
(2, 3, 29, '2019-11-01 08:37:14', '2019-11-01 08:37:14'),
(8, 1, 26, '2019-11-05 06:49:56', '2019-11-05 06:49:56'),
(9, 3, 26, '2019-11-05 06:49:56', '2019-11-05 06:49:56'),
(10, 6, 26, '2019-11-05 06:49:56', '2019-11-05 06:49:56'),
(11, 7, 26, '2019-11-05 06:49:56', '2019-11-05 06:49:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rolls`
--
ALTER TABLE `rolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roll_permissions`
--
ALTER TABLE `roll_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`permission_id`),
  ADD KEY `roll_id` (`roll_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `status` (`status`),
  ADD KEY `deleted_at` (`deleted_at`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `user_rolls`
--
ALTER TABLE `user_rolls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `roll_id` (`roll_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rolls`
--
ALTER TABLE `rolls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roll_permissions`
--
ALTER TABLE `roll_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_rolls`
--
ALTER TABLE `user_rolls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
