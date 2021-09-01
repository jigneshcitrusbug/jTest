-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 06:03 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrusbug_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `abda`
--

CREATE TABLE `abda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `0` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `baners`
--

CREATE TABLE `baners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baners`
--

INSERT INTO `baners` (`id`, `name`, `slug`, `description`, `images`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'home', 'home', '<span class=\"span-block main_slide\" data-slide=\"we\" data-slide-theme=\"dark\" id=\"slide-we\">We are reliable</span> <span class=\"span-block bold-line\"> <a class=\"main_slide\" data-slide=\"developement\" data-slide-theme=\"light\" href=\"#\">Developement</a> <a class=\"main_slide\" data-slide=\"partner\" data-slide-theme=\"dark\" href=\"#\">Partner</a></span> <span class=\"span-block\">since 2013</span>', '<div class=\"slide slide1\" data-slide=\"we\" data-slide-type=\"image\">\r\n        <div class=\"slide_inner\"  >\r\n            <img src=\"/assets/images/we.jpg\" alt=\"\" srcset=\"\">\r\n        </div>\r\n    </div>\r\n    <div class=\"slide slide2\" data-slide=\"developement\" data-slide-type=\"image\">\r\n        <div class=\"slide_inner\"  >\r\n            <img src=\"/assets/images/development.jpg\" alt=\"\" srcset=\"\">\r\n        </div>\r\n    </div>\r\n    <div class=\"slide slide3\" data-slide=\"partner\" data-slide-type=\"video\">\r\n        <div class=\"slide_inner\"  >\r\n            <video src=\"/assets/images/partner.mp4\" autoplay preload  loop >\r\n                <source src=\"/assets/images/partner.mp4\" type=\"video/mp4\">\r\n            </video>\r\n        </div>\r\n    </div>', '2019-12-30 06:59:46', '2019-12-30 07:20:54', NULL),
(2, 'service', 'service', '<span class=\"span-block main_slide\" data-slide=\"we\" data-slide-theme=\"dark\" id=\"slide-we\">\r\nWeb Design & Development</span> \r\n\r\n<span class=\"span-block bold-line\"> \r\n<a class=\"main_slide\" data-slide=\"developement\" data-slide-theme=\"light\" href=\"#\">DevOps services</a> \r\n<a class=\"main_slide\" data-slide=\"partner\" data-slide-theme=\"dark\" href=\"#\">Artificial Intelligence</a></span> \r\n\r\n<span class=\"span-block\">API Development</span>', '<div class=\"slide slide1\" data-slide=\"we\" data-slide-type=\"image\">\r\n        <div class=\"slide_inner\"  >\r\n            <img src=\"/assets/images/we.jpg\" alt=\"\" srcset=\"\">\r\n        </div>\r\n    </div>\r\n    <div class=\"slide slide2\" data-slide=\"developement\" data-slide-type=\"image\">\r\n        <div class=\"slide_inner\"  >\r\n            <img src=\"/assets/images/development.jpg\" alt=\"\" srcset=\"\">\r\n        </div>\r\n    </div>\r\n    <div class=\"slide slide3\" data-slide=\"partner\" data-slide-type=\"video\">\r\n        <div class=\"slide_inner\"  >\r\n            <video src=\"/assets/images/partner.mp4\" autoplay preload  loop >\r\n                <source src=\"/assets/images/partner.mp4\" type=\"video/mp4\">\r\n            </video>\r\n        </div>\r\n    </div>', '2019-12-30 07:26:08', '2019-12-30 07:42:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opportunity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` int(11) DEFAULT 0,
  `work_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `designation`, `description_title`, `description`, `opportunity`, `position`, `slug`, `ordering`, `work_type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Developer', 'Developer\'s Mission', '<p>Citrusbug is a design and experience agency that partners with modern, global brands. At Citrusbug we are on a mission to relentlessly generate smart, creative, forward-thinking solutions in the space between people and technology. As our new Senior Designer, you will be bringing not only your impeccable design skills and passion for art &amp; technology, but also expertise in client management, problem solving and strategic thinking to our Creative Department.</p>\r\n\r\n<p>You&rsquo;ll be part of an international team, comprised of some of the most talented makers, producers, and creative minds in the industry. We are people who aspire</p>\r\n\r\n<p>Citrusbug is a design and experience agency that partners with modern, global brands. At Citrusbug we are on a mission to relentlessly generate smart, creative, forward-thinking solutions in the space between people and technology. As our new Senior Designer, you will be bringing not only your impeccable design skills and passion for art &amp; technology, but also expertise in client management, problem solving and strategic thinking to our Creative Department.</p>\r\n\r\n<p>You&rsquo;ll be part of an international team, comprised of some of the most talented makers, producers, and creative minds in the industry. We are people who aspire</p>', '<ul>\r\n                                                <li>\r\n                                                    <span class=\"arrow-icons\"><i class=\"fe fe-arrow-right\"></i></span>\r\n                                                    <p>Citrusbug is a design and experience agency that partners with modern, global brands. </p>\r\n                                                </li>\r\n                                                <li>\r\n                                                    <span class=\"arrow-icons\"><i class=\"fe fe-arrow-right\"></i></span>\r\n                                                    <p>At Citrusbug we are on a mission to relentlessly generate smart, creative, forward-thinking solutions in the space between people and technology. </p>\r\n                                                </li>\r\n                                                <li>\r\n                                                    <span class=\"arrow-icons\"><i class=\"fe fe-arrow-right\"></i></span>\r\n                                                    <p>As our new Senior Designer, you will be bringing not only your impeccable design skills and passion for art & technology, but also expertise in client management, problem solving and strategic thinking to our Creative Department.</p>\r\n                                                </li>\r\n                                                <li>\r\n                                                    <span class=\"arrow-icons\"><i class=\"fe fe-arrow-right\"></i></span>\r\n                                                    <p>You’ll be part of an international team, comprised of some of the most talented makers, producers, and creative minds in the industry. We are people who aspire </p>\r\n                                                </li>\r\n                                            </ul>', 1, 'developer', 1, 'FULLTIME', 'active', '2019-12-27 01:11:21', '2019-12-27 01:22:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT 0,
  `ordering` int(11) DEFAULT 0,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2019_11_01_112016_create_settings_table', 1),
(2, '2019_11_01_112017_create_users_table', 1),
(3, '2019_11_11_112144_create_languages_table', 1),
(4, '2019_11_11_112222_create_permissions_table', 1),
(5, '2019_11_11_112254_create_roles_table', 1),
(6, '2019_11_11_112326_create_roles_permission_table', 1),
(7, '2019_11_11_112342_create_user_roles_table', 1),
(8, '2019_11_12_100000_create_password_resets_table', 1),
(9, '2019_11_14_063157_create_category_table', 1),
(10, '2019_11_14_071454_create_products_table', 1),
(11, '2019_11_14_142410_create_refe_file_table', 1),
(12, '2019_12_03_092304_create_seo_table', 1),
(13, '2019_12_03_095353_update_seo_table', 1),
(14, '2019_12_03_113946_create_cache_table', 1),
(15, '2019_12_05_071410_add_module_to_settings_table', 1),
(16, '2019_12_06_111339_create_services_table', 1),
(17, '2019_12_06_114850_add_updated_by_to_services_table', 1),
(18, '2019_12_06_115556_add_icon_to_services_table', 1),
(19, '2019_12_12_092458_add_information_field_in_settings_table', 1),
(20, '2019_12_13_100742_update_settings_add_fildtype', 1),
(21, '2019_12_24_100216_create_projects_table', 2),
(22, '2019_12_25_052116_create_servicedetails_table', 3),
(23, '2019_12_25_053017_add_service_id_to_servicedetails_table', 4),
(24, '2019_12_25_083608_change_services_id_to_servicedetails_table', 5),
(25, '2019_12_26_070221_create_table_technology', 6),
(27, '2019_12_26_084418_create_team_table', 7),
(28, '2019_12_26_083555_add_sow_to_projects_table', 8),
(32, '2019_12_26_122451_create_career_table', 9),
(33, '2019_12_27_110617_create_partner_table', 10),
(34, '2019_12_30_120621_create_baners_table', 11),
(35, '2019_12_30_121720_add_dates_to_baners_table', 12),
(36, '2020_01_08_073326_create_projects_techs', 13),
(37, '2020_01_09_103033_create_projects_services', 14),
(39, '2020_01_22_122732_students', 15);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` int(11) NOT NULL,
  `partner_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `slug`, `ordering`, `partner_url`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Amazon Pay', 'amazon-pay', 1, 'https://www.google.com/search?q=Apple Pay', 'active', '2019-12-27 05:52:57', '2019-12-27 06:01:29', NULL),
(2, 'Visa', 'visa', 2, 'https://www.google.com//search?q=visa', 'active', '2019-12-27 05:56:51', '2019-12-27 05:56:51', NULL),
(3, 'Paypal', 'paypal', 3, 'https://www.google.com/search?q=paypal', 'active', '2019-12-27 05:57:25', '2019-12-27 05:57:25', NULL),
(4, 'Apple Pay', 'apple-pay', 4, 'https://www.google.com/search?q=Apple Pay', 'active', '2019-12-27 05:58:04', '2019-12-27 05:58:04', NULL),
(5, 'Transfer Wise', 'transfer-wise', 5, 'https://www.google.com/search?q=Transfer Wise', 'active', '2019-12-27 05:58:57', '2019-12-27 05:58:57', NULL),
(6, 'Payoneer', 'payoneer', 6, 'https://www.google.com/search?q=Payoneer', 'active', '2019-12-27 05:59:41', '2019-12-27 05:59:41', NULL),
(7, 'Skrill', 'skrill', 7, 'https://www.google.com/search?q=Skrill', 'active', '2019-12-27 06:00:21', '2019-12-27 06:00:21', NULL),
(8, 'Stripe', 'stripe', 8, 'https://stripe.com/', 'active', '2019-12-27 06:01:08', '2019-12-27 06:01:08', NULL);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'View', '2019-12-19 09:16:21', '2019-12-19 09:16:21'),
(2, 'Add', '2019-12-19 09:16:21', '2019-12-19 09:16:21'),
(3, 'Edit', '2019-12-19 09:16:21', '2019-12-19 09:16:21'),
(4, 'Delete', '2019-12-19 09:16:21', '2019-12-19 09:16:21'),
(5, 'Access', '2019-12-19 09:16:21', '2019-12-19 09:16:21'),
(6, 'Permission', '2019-12-19 09:16:21', '2019-12-19 09:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL DEFAULT 0.00,
  `price_currency` enum('USD','EUR') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USD',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `sow` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `slug`, `desc`, `description`, `created_at`, `updated_at`, `deleted_at`, `sow`) VALUES
(1, 'World\'s Largest | Wine Community', 'worlds-largest-wine-community-1', 'The perfectionism makes some sense, but seems at odds with the current infatuation with Jobs. Jobs couldn\'t find the right beige from a set of 200 and had to design a new beige. He seemed like the ultimate perfectionist – sometimes.', '<h2>Our&nbsp;<a href=\"#\">challenges</a>and&nbsp;<a href=\"#\">solutions</a></h2>\r\n\r\n<p>We are a digital agency that specializes in User Experience Design</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id luctus molestie, urna est cursus massa, molestie tempus urna ante sit amet dolor. Nunc vestibulum nisi vitae purus venenatis pulvinar. Nunc magna tortor, tempor ut quam at, luctus blandit magna.</p>', '2019-12-23 23:30:46', '2020-01-23 08:02:37', NULL, 'User Module\r\nUser Module\r\nUser Module\r\nUser Module\r\nUser Module\r\nUser Module\r\nUser Module\r\nUser Module\r\nUser Module'),
(2, 'The | Best Coffee | You\'ve Ever Made', 'the-best-coffee-youve-ever-made-1', 'The perfectionism makes some sense, but seems at odds with the current infatuation with Jobs. Jobs couldn\'t find the right beige from a set of 200 and had to design a new beige. He seemed like the ultimate perfectionist – sometimes.', '<p>a</p>', '2019-12-23 23:31:36', '2020-01-17 03:51:13', NULL, 'a'),
(3, 'Dummy Project', 'dummy-project', 'Dummy Project Dummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy ProjectDummy Project', NULL, '2019-12-24 00:57:22', '2020-01-23 07:54:59', '2020-01-23 07:54:59', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects_services`
--

CREATE TABLE `projects_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects_services`
--

INSERT INTO `projects_services` (`id`, `created_at`, `updated_at`, `project_id`, `service_id`, `deleted_at`) VALUES
(49, NULL, NULL, 1, 2, NULL),
(50, NULL, NULL, 1, 3, NULL),
(51, NULL, NULL, 1, 4, NULL),
(52, NULL, NULL, 1, 1, NULL),
(53, NULL, NULL, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects_tech`
--

CREATE TABLE `projects_tech` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `tech_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects_tech`
--

INSERT INTO `projects_tech` (`id`, `created_at`, `updated_at`, `project_id`, `tech_id`, `deleted_at`) VALUES
(82, NULL, NULL, 1, 2, NULL),
(83, NULL, NULL, 2, 2, NULL),
(84, NULL, NULL, 1, 3, NULL),
(85, NULL, NULL, 2, 3, NULL),
(88, NULL, NULL, 1, 6, NULL),
(89, NULL, NULL, 2, 6, NULL),
(90, NULL, NULL, 1, 7, NULL),
(91, NULL, NULL, 2, 7, NULL),
(92, NULL, NULL, 1, 8, NULL),
(93, NULL, NULL, 2, 8, NULL),
(94, NULL, NULL, 1, 1, NULL),
(95, NULL, NULL, 2, 1, NULL),
(96, NULL, NULL, 1, 4, NULL),
(97, NULL, NULL, 2, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `refe_file`
--

CREATE TABLE `refe_file` (
  `id` int(10) UNSIGNED NOT NULL,
  `refe_table_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refe_field_id` int(11) NOT NULL DEFAULT 0,
  `refe_file_path` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refe_file_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_real_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_code` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refe_file`
--

INSERT INTO `refe_file` (`id`, `refe_table_name`, `refe_field_id`, `refe_file_path`, `refe_file_name`, `file_real_name`, `file_code`, `file_type`, `priority`, `created_at`, `updated_at`) VALUES
(5, 'projects', 3, 'uploads/projects/3', '5e0206bccdd81_3.png', 'image-slide.png', NULL, 'projects_single_image', 0, '2019-12-24 01:38:21', '2019-12-24 01:38:21'),
(6, 'servicedetails', 1, 'uploads/servicedetails/1', '5e031d3e1a442_1.jpg', 'service1.jpg', NULL, 'servicedetails_single_image', 0, '2019-12-24 21:26:38', '2019-12-24 21:26:38'),
(7, 'servicedetails', 2, 'uploads/servicedetails/2', '5e031d75404d3_2.jpg', 'service1.jpg', NULL, 'servicedetails_single_image', 0, '2019-12-24 21:27:33', '2019-12-24 21:27:33'),
(8, 'servicedetails', 3, 'uploads/servicedetails/3', '5e031db2c39bf_3.jpg', 'service1.jpg', NULL, 'servicedetails_single_image', 0, '2019-12-24 21:28:34', '2019-12-24 21:28:34'),
(11, 'team', 1, 'uploads/team/1', '5e04a0e5e7947_1.png', 'download (1).png', NULL, 'teams_single_image', 0, '2019-12-26 01:00:38', '2019-12-26 01:00:38'),
(12, 'partners', 1, 'uploads/partners/1', '5e05e991781f6_1.svg', 'amazonpay.svg', NULL, 'partners_single_image', 0, '2019-12-27 05:52:57', '2019-12-27 05:52:57'),
(13, 'partners', 2, 'uploads/partners/2', '5e05ea7b5e1c0_2.svg', 'visa.svg', NULL, 'partners_single_image', 0, '2019-12-27 05:56:51', '2019-12-27 05:56:51'),
(14, 'partners', 3, 'uploads/partners/3', '5e05ea9d259da_3.svg', 'paypal.svg', NULL, 'partners_single_image', 0, '2019-12-27 05:57:25', '2019-12-27 05:57:25'),
(15, 'partners', 4, 'uploads/partners/4', '5e05eac41eac7_4.svg', 'applepay.svg', NULL, 'partners_single_image', 0, '2019-12-27 05:58:04', '2019-12-27 05:58:04'),
(16, 'partners', 5, 'uploads/partners/5', '5e05eaf946892_5.svg', 'transferwise.svg', NULL, 'partners_single_image', 0, '2019-12-27 05:58:57', '2019-12-27 05:58:57'),
(17, 'partners', 6, 'uploads/partners/6', '5e05eb257f909_6.svg', 'payoneer.svg', NULL, 'partners_single_image', 0, '2019-12-27 05:59:41', '2019-12-27 05:59:41'),
(18, 'partners', 7, 'uploads/partners/7', '5e05eb4ddb64f_7.svg', 'skrill.svg', NULL, 'partners_single_image', 0, '2019-12-27 06:00:21', '2019-12-27 06:00:21'),
(19, 'partners', 8, 'uploads/partners/8', '5e05eb7c75559_8.svg', 'stripe.svg', NULL, 'partners_single_image', 0, '2019-12-27 06:01:08', '2019-12-27 06:01:08'),
(22, 'projects', 1, 'uploads/projects/1', '5e10283c80932_1.jpg', 'vivino.jpg', NULL, 'projects_single_image', 0, '2020-01-04 00:23:00', '2020-01-04 00:23:00'),
(23, 'projects', 2, 'uploads/projects/2', '5e10298fcf0cb_2.jpg', 'coffee.jpg', NULL, 'projects_single_image', 0, '2020-01-04 00:28:40', '2020-01-04 00:28:40'),
(24, 'projects', 4, 'uploads/projects/4', '5e1427bac94c3_4.png', 'Screenshot_1.png', NULL, 'projects_single_image', 0, '2020-01-07 01:09:55', '2020-01-07 01:09:55'),
(25, 'projects', 5, 'uploads/projects/5', '5e142838583c5_5.png', 'Screenshot_2.png', NULL, 'projects_single_image', 0, '2020-01-07 01:12:00', '2020-01-07 01:12:00'),
(28, 'projects', 1, 'uploads/projects/1', '5e2698b816de1_1.png', '56A5C62C.png', NULL, 'projects_projects_single_main', 0, '2020-01-21 00:52:49', '2020-01-21 00:52:49'),
(30, 'projects', 1, 'uploads/projects/1', '5e269fdbef1d9_1.png', '56A5C62C.png', NULL, 'projects_single_cart', 0, '2020-01-21 01:23:17', '2020-01-21 01:23:17'),
(31, 'projects', 1, 'uploads/projects/1', '5e26a0107b92d_1.png', '5AE7696A.png', NULL, 'projects_multiple_color_images', 0, '2020-01-21 01:24:08', '2020-01-21 01:24:08'),
(32, 'projects', 1, 'uploads/projects/1', '5e26a010a5c42_1.png', '5AE76962.png', NULL, 'projects_multiple_color_images', 0, '2020-01-21 01:24:08', '2020-01-21 01:24:08'),
(33, 'projects', 1, 'uploads/projects/1', '5e26a010ce452_1.png', '5AE76964.png', NULL, 'projects_multiple_color_images', 0, '2020-01-21 01:24:08', '2020-01-21 01:24:08'),
(35, 'projects', 1, 'uploads/projects/1', '5e26a052a1f75_1.png', '56A5C62C.png', NULL, 'projects_multiple_color_images', 0, '2020-01-21 01:25:16', '2020-01-21 01:25:16'),
(36, 'projects', 1, 'uploads/projects/1', '5e26a0540d2a5_1.png', 'B38015AD.png', NULL, 'projects_multiple_color_images', 0, '2020-01-21 01:25:17', '2020-01-21 01:25:17'),
(37, 'projects', 1, 'uploads/projects/1', '5e26a0558f4c4_1.png', 'B38015AE.png', NULL, 'projects_multiple_color_images', 0, '2020-01-21 01:25:19', '2020-01-21 01:25:19'),
(38, 'projects', 1, 'uploads/projects/1', '5e26a0571df02_1.png', '56A5C62D.png', NULL, 'projects_multiple_size_images', 0, '2020-01-21 01:25:19', '2020-01-21 01:25:19'),
(39, 'projects', 1, 'uploads/projects/1', '5e26a057ddfc2_1.png', 'B38015A9.png', NULL, 'projects_multiple_size_images', 0, '2020-01-21 01:25:21', '2020-01-21 01:25:21'),
(40, 'projects', 1, 'uploads/projects/1', '5e26a0590eb85_1.png', 'B38015AF.png', NULL, 'projects_multiple_size_images', 0, '2020-01-21 01:25:21', '2020-01-21 01:25:21'),
(41, 'technology', 1, 'uploads/technology/1', '5e27ee5c8efcb_1.png', 'bg-technology.png', NULL, 'technologies_single_main', 0, '2020-01-22 01:10:30', '2020-01-22 01:10:30'),
(42, 'technology', 2, 'uploads/technology/2', '5e27f1e022a7e_2.jpg', 'python_code.jpg', NULL, 'technologies_single_main', 0, '2020-01-22 01:25:30', '2020-01-22 01:25:30'),
(43, 'technology', 3, 'uploads/technology/3', '5e27f7ba51f4f_3.jpg', 'php_code.jpg', NULL, 'technologies_single_main', 0, '2020-01-22 01:50:26', '2020-01-22 01:50:26'),
(44, 'technology', 4, 'uploads/technology/4', '5e27f811b6993_4.jpg', 'Angular.jpg', NULL, 'technologies_single_main', 0, '2020-01-22 01:51:53', '2020-01-22 01:51:53'),
(45, 'technology', 5, 'uploads/technology/5', '5e27fa1b5c445_5.png', 'bg-technology.png', NULL, 'technologies_single_main', 0, '2020-01-22 02:00:41', '2020-01-22 02:00:41'),
(47, 'technology', 7, 'uploads/technology/7', '5e2925f6b344a_7.png', 'career-detail-img.png', NULL, 'technologies_single_main', 0, '2020-01-22 23:19:59', '2020-01-22 23:19:59'),
(48, 'technology', 8, 'uploads/technology/8', '5e29263caf979_8.png', 'technology-banner-one.png', NULL, 'technologies_single_main', 0, '2020-01-22 23:21:10', '2020-01-22 23:21:10'),
(49, 'projects', 1, 'uploads/projects/1', '5e29a07570f69_1.png', 'project-2.png', NULL, 'projects_single_main', 0, '2020-01-23 08:02:37', '2020-01-23 08:02:37'),
(50, 'projects', 1, 'uploads/projects/1', '5e29a075cd9d3_1.png', 'project-2.png', NULL, 'projects_single_cover', 0, '2020-01-23 08:02:38', '2020-01-23 08:02:38'),
(51, 'projects', 1, 'uploads/projects/1', '5e29a0762a0cf_1.png', 'LFK.png', NULL, 'projects_single_scroll', 0, '2020-01-23 08:02:42', '2020-01-23 08:02:42'),
(52, 'projects', 1, 'uploads/projects/1', '5e29a07a55a13_1.png', 'project.png', NULL, 'projects_multiple_images', 0, '2020-01-23 08:02:42', '2020-01-23 08:02:42'),
(53, 'projects', 1, 'uploads/projects/1', '5e29a07aa65a5_1.png', 'project-2.png', NULL, 'projects_multiple_images', 0, '2020-01-23 08:02:42', '2020-01-23 08:02:42'),
(54, 'projects', 1, 'uploads/projects/1', '5e29a07aed0d3_1.png', 'project-3.png', NULL, 'projects_multiple_images', 0, '2020-01-23 08:02:43', '2020-01-23 08:02:43'),
(55, 'projects', 1, 'uploads/projects/1', '5e29a07b25f2f_1.png', 'project-4.png', NULL, 'projects_multiple_images', 0, '2020-01-23 08:02:43', '2020-01-23 08:02:43'),
(56, 'technology', 1, 'uploads/technology/1', '5e2a84644ac4a_1.png', 'career-img.png', NULL, 'technologies_single_cover', 0, '2020-01-24 00:15:08', '2020-01-24 00:15:08'),
(57, 'technology', 2, 'uploads/technology/2', '5e2a85d4eee20_2.png', 'blog-item-2.png', NULL, 'technologies_single_cover', 0, '2020-01-24 00:21:17', '2020-01-24 00:21:17'),
(58, 'technology', 4, 'uploads/technology/4', '5e2a861c414b0_4.jpg', 'coffee.jpg', NULL, 'technologies_single_cover', 0, '2020-01-24 00:22:28', '2020-01-24 00:22:28'),
(59, 'technology', 5, 'uploads/technology/5', '5e2a863498535_5.png', 'Mask Group 4.png', NULL, 'technologies_single_cover', 0, '2020-01-24 00:22:53', '2020-01-24 00:22:53'),
(60, 'technology', 6, 'uploads/technology/6', '5e2a8659345cc_6.png', 'career-detail-img.png', NULL, 'technologies_single_main', 0, '2020-01-24 00:23:29', '2020-01-24 00:23:29'),
(61, 'technology', 6, 'uploads/technology/6', '5e2a8659b9748_6.png', 'our-team-img.png', NULL, 'technologies_single_cover', 0, '2020-01-24 00:23:30', '2020-01-24 00:23:30'),
(62, 'technology', 7, 'uploads/technology/7', '5e2a8680cdd0b_7.png', 'service-banner.png', NULL, 'technologies_single_cover', 0, '2020-01-24 00:24:10', '2020-01-24 00:24:10'),
(63, 'technology', 8, 'uploads/technology/8', '5e2a873190ba4_8.png', 'project-4.png', NULL, 'technologies_single_cover', 0, '2020-01-24 00:27:05', '2020-01-24 00:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `rolls`
--

CREATE TABLE `rolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rolls`
--

INSERT INTO `rolls` (`id`, `title`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, '2019-12-19 09:16:21', '2019-12-19 09:16:21'),
(2, 'Admin', 0, '2019-12-19 09:16:21', '2019-12-19 09:16:21'),
(3, 'Manager', 0, '2019-12-19 09:16:21', '2019-12-19 09:16:21'),
(4, 'Programmer', 0, '2019-12-19 09:16:21', '2019-12-19 09:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `roll_permissions`
--

CREATE TABLE `roll_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roll_permissions`
--

INSERT INTO `roll_permissions` (`id`, `roll_id`, `permission_id`, `module`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'global', 1, '2019-12-19 10:07:50', '2019-12-19 10:07:50'),
(2, 1, 2, 'global', 1, '2019-12-19 10:07:53', '2019-12-19 10:07:53'),
(3, 1, 3, 'global', 1, '2019-12-19 10:07:53', '2019-12-19 10:07:53'),
(4, 1, 4, 'global', 1, '2019-12-19 10:07:54', '2019-12-19 10:07:54'),
(5, 1, 5, 'global', 1, '2019-12-19 10:07:55', '2019-12-19 10:07:55'),
(6, 1, 6, 'global', 1, '2019-12-19 10:07:56', '2019-12-19 10:07:56'),
(7, 1, 1, 'projects', 1, '2019-12-23 23:28:48', '2019-12-23 23:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `url`, `title`, `description`, `og_type`, `og_image`, `twitter_card`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '/', NULL, NULL, NULL, NULL, NULL, '2019-12-19 08:11:58', '2019-12-19 08:11:58', NULL),
(2, '/ad', NULL, NULL, NULL, NULL, NULL, '2019-12-19 08:20:36', '2019-12-19 08:20:36', NULL),
(3, '/admin', NULL, NULL, NULL, NULL, NULL, '2019-12-19 08:20:39', '2019-12-19 08:20:39', NULL),
(4, '/about', NULL, NULL, NULL, NULL, NULL, '2019-12-22 23:54:29', '2019-12-22 23:54:29', NULL),
(5, '/index.html', NULL, NULL, NULL, NULL, NULL, '2019-12-23 00:53:58', '2019-12-23 00:53:58', NULL),
(6, '/services', NULL, NULL, NULL, NULL, NULL, '2019-12-23 01:28:27', '2019-12-23 01:28:27', NULL),
(7, '/team', NULL, NULL, NULL, NULL, NULL, '2019-12-23 01:33:25', '2019-12-23 01:33:25', NULL),
(8, '/technology', NULL, NULL, NULL, NULL, NULL, '2019-12-23 17:21:03', '2019-12-23 17:21:03', NULL),
(9, '/technology/uiux', NULL, NULL, NULL, NULL, NULL, '2019-12-23 17:27:34', '2019-12-23 17:27:34', NULL),
(10, '/work', NULL, NULL, NULL, NULL, NULL, '2019-12-23 17:33:15', '2019-12-23 17:33:15', NULL),
(11, '/work/work1', NULL, NULL, NULL, NULL, NULL, '2019-12-23 17:35:32', '2019-12-23 17:35:32', NULL),
(12, '/career', NULL, NULL, NULL, NULL, NULL, '2019-12-23 17:47:55', '2019-12-23 17:47:55', NULL),
(13, '/career/php', NULL, NULL, NULL, NULL, NULL, '2019-12-23 17:52:41', '2019-12-23 17:52:41', NULL),
(14, '/career/index.html', NULL, NULL, NULL, NULL, NULL, '2019-12-23 18:15:46', '2019-12-23 18:15:46', NULL),
(15, '/case-study2', NULL, NULL, NULL, NULL, NULL, '2019-12-24 00:59:05', '2019-12-24 00:59:05', NULL),
(16, '/services/dedicated-development', 'Dedicated Development', 'Dedicated DevelopmentDedicated DevelopmentDedicated DevelopmentDedicated DevelopmentDedicated DevelopmentDedicated DevelopmentDedicated DevelopmentDedicated DevelopmentDedicated DevelopmentDedicated DevelopmentDedicated DevelopmentDedicated Development', NULL, NULL, NULL, '2019-12-24 17:38:51', '2019-12-27 04:31:53', NULL),
(17, '/work/worlds-largest-wine-community-1', NULL, NULL, NULL, NULL, NULL, '2019-12-24 21:56:42', '2019-12-24 21:56:42', NULL),
(18, '/technology/frontend', NULL, NULL, NULL, NULL, NULL, '2019-12-25 21:31:20', '2019-12-25 21:31:20', NULL),
(19, '/technology/php', NULL, NULL, NULL, NULL, NULL, '2019-12-25 21:31:35', '2019-12-25 21:31:35', NULL),
(20, '/career/developer', NULL, NULL, NULL, NULL, NULL, '2019-12-27 00:30:13', '2019-12-27 00:30:13', NULL),
(21, '/work/dummy-project', NULL, NULL, NULL, NULL, NULL, '2019-12-27 02:45:21', '2019-12-27 02:45:21', NULL),
(22, '/work/the-best-coffee-youve-ever-made-1', NULL, NULL, NULL, NULL, NULL, '2019-12-27 03:26:04', '2019-12-27 03:26:04', NULL),
(23, '/services/custom-software-development', NULL, NULL, NULL, NULL, NULL, '2019-12-27 04:02:19', '2019-12-27 04:02:19', NULL),
(24, '/work/dedicated-development', NULL, NULL, NULL, NULL, NULL, '2019-12-27 04:29:00', '2019-12-27 04:29:00', NULL),
(25, '/work/uxui-design', NULL, NULL, NULL, NULL, NULL, '2019-12-27 04:30:00', '2019-12-27 04:30:00', NULL),
(26, '/technology/mobile-app', NULL, NULL, NULL, NULL, NULL, '2019-12-27 06:42:15', '2019-12-27 06:42:15', NULL),
(27, '/public/', NULL, NULL, NULL, NULL, NULL, '2020-01-02 03:59:43', '2020-01-02 03:59:43', NULL),
(28, '/public', NULL, NULL, NULL, NULL, NULL, '2020-01-02 04:00:59', '2020-01-02 04:00:59', NULL),
(29, '/services/uxui-design', NULL, NULL, NULL, NULL, NULL, '2020-01-02 07:48:37', '2020-01-02 07:48:37', NULL),
(30, '/services/mobile-app-developement', NULL, NULL, NULL, NULL, NULL, '2020-01-02 07:48:39', '2020-01-02 07:48:39', NULL),
(31, '/services/node', NULL, NULL, NULL, NULL, NULL, '2020-01-07 01:23:50', '2020-01-07 01:23:50', NULL),
(32, '/technology?slug=node', NULL, NULL, NULL, NULL, NULL, '2020-01-07 01:24:29', '2020-01-07 01:24:29', NULL),
(33, '/technology/node', NULL, NULL, NULL, NULL, NULL, '2020-01-07 01:25:10', '2020-01-07 01:25:10', NULL),
(34, '/services/frontend-development', NULL, NULL, NULL, NULL, NULL, '2020-01-07 01:27:06', '2020-01-07 01:27:06', NULL),
(35, '/services/cloud-dev-ops', NULL, NULL, NULL, NULL, NULL, '2020-01-07 03:27:34', '2020-01-07 03:27:34', NULL),
(36, '/services?slug=frontend-development', NULL, NULL, NULL, NULL, NULL, '2020-01-07 04:38:34', '2020-01-07 04:38:34', NULL),
(37, '/work/react', NULL, NULL, NULL, NULL, NULL, '2020-01-07 04:50:31', '2020-01-07 04:50:31', NULL),
(38, '/technology/react', NULL, NULL, NULL, NULL, NULL, '2020-01-07 04:53:20', '2020-01-07 04:53:20', NULL),
(39, '/technology/angular', NULL, NULL, NULL, NULL, NULL, '2020-01-07 04:53:46', '2020-01-07 04:53:46', NULL),
(40, '/approach', NULL, NULL, NULL, NULL, NULL, '2020-01-09 03:25:48', '2020-01-09 03:25:48', NULL),
(41, '/technology/react-native', NULL, NULL, NULL, NULL, NULL, '2020-01-09 05:24:58', '2020-01-09 05:24:58', NULL),
(42, '/adminprojectsrecover', NULL, NULL, NULL, NULL, NULL, '2020-01-17 02:27:19', '2020-01-17 02:27:19', NULL),
(43, '/app-assets/vendors/js/datatable/buttons.print.min', NULL, NULL, NULL, NULL, NULL, '2020-01-18 03:05:09', '2020-01-18 03:05:09', NULL),
(44, '/app-assets/vendors/js/datatable/buttons.html5.min', NULL, NULL, NULL, NULL, NULL, '2020-01-18 03:05:09', '2020-01-18 03:05:09', NULL),
(45, '/services/web-application-development', NULL, NULL, NULL, NULL, NULL, '2020-01-27 01:00:16', '2020-01-27 01:00:16', NULL),
(46, '/services/mobile-app-development', NULL, NULL, NULL, NULL, NULL, '2020-01-27 01:27:32', '2020-01-27 01:27:32', NULL),
(47, '/services/dedicated-digital-teams', NULL, NULL, NULL, NULL, NULL, '2020-01-27 01:28:13', '2020-01-27 01:28:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicedetails`
--

CREATE TABLE `servicedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `services_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicedetails`
--

INSERT INTO `servicedetails` (`id`, `title`, `slug`, `desc`, `description`, `created_at`, `updated_at`, `deleted_at`, `services_id`) VALUES
(1, 'Approach', 'understand-the-project-1', 'Understand the project', '<p>The perfectionism makes some sense, but seems at odds with the current infatuation with Jobs. Jobs couldn&#39;t find the right beige from a set of 200 and had to design a new beige. He seemed like the ultimate perfectionist &ndash; sometimes.</p>', '2019-12-24 21:26:38', '2019-12-24 21:50:16', NULL, 1),
(2, 'APPROACH', 'site-architecture-and-wireframes-1', 'Site architecture and wireframes', '<p>The perfectionism makes some sense, but seems at odds with the current infatuation with Jobs. Jobs couldn&#39;t find the right beige from a set of 200 and had to design a new beige. He seemed like the ultimate perfectionist &ndash; sometimes.</p>', '2019-12-24 21:27:33', '2019-12-24 21:50:37', NULL, 1),
(3, 'Approach', 'visual-design-1', 'Visual\r\ndesign', '<p>After the wireframes are perfected, we start work on the look of each webpage. We keep the best UI practices at the center and incorporate your businesses&rsquo; creative guidelines to design a website that is a seamless extension of your brand in the digital world.</p>', '2019-12-24 21:28:34', '2019-12-24 21:50:56', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `icon`, `intro`, `description`, `created_at`, `updated_at`, `deleted_at`, `updated_by`, `image`, `ordering`) VALUES
(1, 'Web Application Development', 'web-application-development', '/storage/uploads/service_icon/front-end.svg', '<p>We enable businesses to deliver transformational services for their customers and employees via the internet by building seamless internet powered applications.</p>', '<h2>Citrusbug partners enterprises to build and grow their presence on the internet through rich customer facing web apps and powerful enterprise cloud applications.</h2>\r\n\r\n<p><strong>Build for the web, billed for the success</strong></p>\r\n\r\n<p><em>At Citrusbug, our services go beyond building what customers demand alone. We partner in their journey to building new experiences on the web for their customers and operations and use our experience to help them discover new revenue opportunities, digital channels and scalable business models powered by the internet</em>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our areas of expertise include:</p>\r\n\r\n<ul>\r\n	<li>Enterprise Web Application Development</li>\r\n	<li>Custom Web portal development</li>\r\n	<li>e-Commerce website development</li>\r\n	<li>Customizable Content Management Systems</li>\r\n</ul>', '2019-12-23 18:41:01', '2020-01-27 01:20:28', NULL, 1, NULL, 0),
(2, 'Mobile App Development', 'mobile-app-development', '/storage/uploads/service_icon/ui-ux.svg', '<p>Build more connected experiences for your customers on their favorite devices with our mobile app development services</p>', '<p>We empower businesses to build a connected customer experience with mobile-ready business apps across a range of smart devices and platforms.</p>\r\n\r\n<p><strong>Built for the next generation of mobility</strong></p>\r\n\r\n<p><em>Our mobile app development services focus on building apps to meet the end-to-end needs of today&rsquo;s smartphone driven business and operational landscape. From deeper functionality integration to intelligent automation, our mobility practice thrives to deliver apps that are profitable and future proof.</em></p>\r\n\r\n<p>Our areas of expertise include:</p>\r\n\r\n<ul>\r\n	<li>Native mobile application development</li>\r\n	<li>Hybrid mobile application development</li>\r\n	<li>Smart device application development</li>\r\n</ul>', '2019-12-23 18:41:22', '2020-01-27 00:50:46', NULL, 1, NULL, 3),
(3, 'Custom Software Development', 'custom-software-development', '/storage/uploads/service_icon/custom-software-developememnt.svg', '<p>Enhance your digital competitiveness with unique software solutions tailored to suit your unique business models</p>', '<p>To embrace success in a future governed by digital, Citrusbug partners businesses to strategically identify and build custom software for digital success.</p>\r\n\r\n<p><strong>Software designed for customer delight</strong></p>\r\n\r\n<p><em>Businesses small and big partner us to drive their digital ambitions forward by leveraging our expertise in custom software development. From on-boarding and customizing innovative cloud-based business systems to building innovative solutions from the ground up, we help businesses realize better value for their software by using the right technology and following best practices.</em></p>\r\n\r\n<p>Our areas of expertise include:</p>\r\n\r\n<ul>\r\n	<li>Enterprise Application Development</li>\r\n	<li>UI/UX Services</li>\r\n	<li>Systems Integration</li>\r\n	<li>Cloud Platform services</li>\r\n	<li>Product Engineering</li>\r\n</ul>', '2019-12-23 18:41:43', '2020-01-27 00:51:37', NULL, 1, NULL, 2),
(4, 'Dedicated Digital Teams', 'dedicated-digital-teams', '/storage/uploads/service_icon/app-development.svg', '<p>Enable faster digital success with a dedicated world-class technology team available exclusively for you</p>', '<p>Assemble your own team for driving the future of your digital success with less overhead, unlimited flexibility and unparalleled cost efficiency.</p>\r\n\r\n<p><br />\r\n<strong>A loyal team to build your global ambitions</strong></p>\r\n\r\n<p><em>Elevate your digital ambitions by setting up your own remote team of experts from a large talent pool having rare skills that can augment your in-house workforce. From recruitment to managing contracts transparently, Citrusbug manages your overheads while you strategize your development goals utilizing our state-of-the-art infrastructure and niche talents in technology and management. </em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our areas of expertise include:</p>\r\n\r\n<ul>\r\n	<li>Managed Application Development Services</li>\r\n	<li>UI/UX Services</li>\r\n	<li>Quality Assurance</li>\r\n	<li>Application Maintenance &amp; Support Services</li>\r\n</ul>', '2019-12-23 18:42:07', '2020-01-27 00:52:41', NULL, 1, NULL, 3),
(5, 'Cloud & Dev Ops', 'cloud-dev-ops', '/storage/uploads/service_icon/cloud-and-developement.svg', '<p>Cloud Solution</p>', '<p>Cloud Solution</p>', '2020-01-04 00:42:08', '2020-01-27 00:53:46', '2020-01-27 00:53:46', 1, NULL, 6),
(6, 'ML & AI', 'ml-ai', '/storage/uploads/service_icon/ml-ai.svg', '<p>ML &amp; AI</p>', '<p>ML &amp; AI</p>', '2020-01-07 00:44:11', '2020-01-27 00:53:46', '2020-01-27 00:53:46', 1, NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fkey` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fvalue` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finformation` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `fkey`, `fvalue`, `created_at`, `updated_at`, `module`, `finformation`, `ftype`) VALUES
(1, 'bg-color', 'primary', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'global', NULL, NULL),
(2, 'sidebar-background', 'http://localhost:8000/app-assets/img/sidebar-bg/03.jpg', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'global', NULL, NULL),
(3, 'sidebar-width', 'sidebar-lg', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'global', NULL, NULL),
(4, 'theme-layout', 'light', '2019-12-19 09:16:21', '2019-12-27 03:15:02', 'global', NULL, NULL),
(5, 'theme-transparent-bg', 'bg-glass-1', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'global', NULL, NULL),
(6, 'compact-menu', '0', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'global', NULL, NULL),
(7, 'active_lang', 'en', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'global', NULL, NULL),
(8, 'admin-menu-json', '[{\"text\":\"Baners\",\"icon\":\"fa fa-align-center\",\"href\":\"/admin/baners\",\"target\":\"_self\",\"title\":\"\",\"rolls\":[\"1\",\"2\",\"3\"]},{\"text\":\"Services\",\"href\":\"/admin/services\",\"icon\":\"fa fa-user-plus\",\"target\":\"_self\",\"title\":\"Services\",\"rolls\":[\"1\",\"3\",\"6\",\"7\"]},{\"text\":\"Service Details\",\"href\":\"/admin/servicedetails\",\"icon\":\"fa fa-adn\",\"target\":\"_self\",\"title\":\"\",\"rolls\":[\"1\",\"2\",\"3\"]},{\"text\":\"Projects\",\"href\":\"/admin/projects\",\"icon\":\"fa fa-american-sign-language-interpreting\",\"target\":\"_self\",\"title\":\"\",\"rolls\":[\"1\",\"2\",\"3\"]},{\"text\":\"Seo\",\"href\":\"/admin/seos\",\"icon\":\"fa fa-buysellads\",\"target\":\"_self\",\"title\":\"SEO\",\"rolls\":[\"1\",\"3\",\"6\"]},{\"text\":\"Users\",\"href\":\"/admin/users\",\"icon\":\"fa fa-user\",\"target\":\"_self\",\"title\":\"\",\"rolls\":[\"1\",\"3\",\"6\",\"7\"]},{\"text\":\"Roll Permissions\",\"href\":\"/admin/rollpermissions/global\",\"icon\":\"fa fa-arrows\",\"target\":\"_self\",\"title\":\"Roll Permissions\",\"rolls\":[\"1\",\"3\"]},{\"text\":\"Rolls\",\"href\":\"/admin/rolls\",\"icon\":\"fa fa-address-book\",\"target\":\"_self\",\"title\":\"Rolls\",\"rolls\":[\"1\",\"3\"]},{\"text\":\"Setting\",\"href\":\"/admin/settings/module/global\",\"icon\":\"fa fa-database\",\"target\":\"_self\",\"title\":\"Settings\",\"rolls\":[\"1\",\"3\",\"6\"]},{\"text\":\"Technolgy\",\"href\":\"/admin/technologies\",\"icon\":\"fa fa-briefcase\",\"target\":\"_self\",\"title\":\"Technologies\",\"rolls\":[\"1\",\"2\"]},{\"text\":\"Team\",\"href\":\"/admin/teams\",\"icon\":\"fa fa-users\",\"target\":\"_self\",\"title\":\"\",\"rolls\":[\"1\"]},{\"text\":\"Career\",\"href\":\"/admin/career\",\"icon\":\"fa fa-graduation-cap\",\"target\":\"_self\",\"title\":\"\",\"rolls\":[\"1\"]},{\"text\":\"Partners\",\"href\":\"/admin/partners\",\"icon\":\"fa fa-handshake-o\",\"target\":\"_self\",\"title\":\"Partners\",\"rolls\":[\"1\"]}]', '2019-12-19 09:16:21', '2019-12-30 06:45:49', 'global', NULL, NULL),
(9, 'default_title', 'Default Site Title', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'seos', NULL, NULL),
(10, 'default_description', 'Description Description Description Description Description Description Description DescriptionDescription Description Description', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'seos', NULL, NULL),
(11, 'default_og_type', 'website', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'seos', NULL, NULL),
(12, 'default_twitter_card', 'summary', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'seos', NULL, NULL),
(13, 'fb_admins', '888777555555', '2019-12-19 09:16:21', '2019-12-19 09:16:21', 'seos', NULL, NULL),
(14, 'ADMIN_LOGO', '/storage/uploads/logo.png', '2019-12-19 09:16:21', '2019-12-23 22:34:10', 'global', NULL, 'image'),
(15, 'footer_button_text', '<div class=\"messages-text-heading\">\r\n                                <h3> Want To Say <span class=\"font-italic\">Hello?</span> </h3>\r\n                            </div>\r\n                            <div class=\"button-row\"> \r\n                                <a href=\"#\" class=\"btn btn-messages\">SEND US A MESSAGE</a>\r\n                            </div>', '2019-12-19 10:11:09', '2019-12-19 10:11:09', 'global', NULL, NULL),
(16, 'footer_development_center', '<h5>Development Center</h5>\r\n                                    <p>\r\n                                        <span class=\"span-block\">A 411, Shivalik Corporate Park </span>\r\n                                        <span class=\"span-block\">Satellite, Ahmedabad - 380015 India.</span>\r\n                                    </p>', '2019-12-19 10:11:53', '2020-01-23 00:17:30', 'global', NULL, 'text'),
(17, 'footer_phone', '<h5>Phone: </h5>\r\n                                    <p> <a href=\"tel:19739476185\" class=\"co-link\">19739476185</a> </p>', '2019-12-19 22:56:54', '2019-12-19 22:56:54', 'global', NULL, NULL),
(18, 'footer_email', '<div class=\"contact-info-row\">\r\n                                    <h5>Email: </h5>\r\n                                    <p> <a href=\"mailto:hello@company.com\" class=\"co-link\">hello@company.com</a> </p>\r\n                                </div>', '2019-12-19 22:57:11', '2019-12-19 22:57:11', 'global', NULL, NULL),
(19, 'footer_send_message', '<p class=\"font-italic\">Send message</p>\r\n                                <p ><a href=\"mailto:info@citrusbug.com\" class=\"link font-italic\" >info@citrusbug.com</a></p>', '2019-12-19 22:57:49', '2019-12-19 22:57:49', 'global', NULL, NULL),
(20, 'site_home_service_title', 'Helping brands solve real problems with technology', '2019-12-23 18:45:45', '2020-01-27 00:54:56', 'global', NULL, 'editor'),
(21, 'site_home_service_desc', '<p>We make technology simple for businesses across industries and geographies and accelerate their digital journey cost-effectively.</p>', '2019-12-23 18:46:17', '2020-01-27 00:55:31', 'global', NULL, 'editor'),
(22, 'site_home_project_title', '<span class=\"span-block\">A small selection</span>\r\n                                    <span class=\"span-block\">of <a href=\"#\" class=\"link1\">My work</a>, enjoy.</span>', '2019-12-23 23:26:37', '2019-12-23 23:27:51', 'projects', NULL, 'textarea'),
(23, 'site_home_project_desc', '<p>We are a digital agency that specializes in User Experience Design</p>', '2019-12-23 23:28:23', '2019-12-23 23:28:23', 'projects', NULL, 'textarea'),
(24, 'site_service_service_title', 'Get to know a bit more about Our skills or feel free to look around <a href=\"#\" class=\"heading-link\">Our</a> <a href=\"#\" class=\"heading-link\">coding</a>and <a href=\"#\" class=\"heading-link\">design</a> <a href=\"#\" class=\"heading-link\">works. </a>', '2019-12-24 17:20:19', '2019-12-24 17:20:19', 'services', NULL, 'textarea'),
(25, 'site_service_service_desc', 'We are a digital agency that specializes in User Experience Design', '2019-12-24 17:20:45', '2019-12-24 17:20:45', 'services', NULL, 'textarea'),
(26, 'site_technology_technology_title', '<span class=\"span-block\">Customer-first technology </span><span class=\"span-block\"><a href=\"#\" class=\"link link5\">crafted <span class=\"line-5span\">specifically</span></a> for the <span class=\"span-block\">IT industry.</span></span>', '2019-12-25 19:55:28', '2019-12-25 19:55:28', 'global', NULL, 'textarea'),
(27, 'site_technology_technology_description', 'We are a digital agency that specializes in User Experience Design', '2019-12-25 19:58:03', '2019-12-25 19:58:03', 'global', NULL, 'text'),
(28, 'site_team_title', '<span class=\"span-block\">The </span><span class=\"span-block\">Team </span>', '2019-12-25 21:37:16', '2019-12-25 21:37:16', 'global', NULL, 'text'),
(29, 'site_team_description', 'The perfectionism makes some sense, but seems at odds with the current infatuation with Jobs. Jobs couldn\'t find the right beige from a set of 200 and had to design a new beige. He seemed like the ultimate perfectionist – sometimes.', '2019-12-25 21:38:05', '2019-12-25 21:38:05', 'global', NULL, 'text'),
(30, 'site_career_title', 'Career', '2019-12-26 01:11:32', '2019-12-26 01:11:32', 'global', NULL, 'text'),
(31, 'site_career_description', 'We are growing, and we are looking for skilled individuals to grow with us.', '2019-12-26 01:11:55', '2019-12-26 01:11:55', 'global', NULL, 'textarea'),
(32, 'site_career_single_opportunity_title', 'The Real Opportunity!', '2019-12-26 01:32:58', '2019-12-26 01:32:58', 'global', NULL, 'text'),
(33, 'site_careers_tagline_below_career_list', '<span class=\"span-block\"> Want to work in a beautiful office? Check. In a great city? </span> <span class=\"span-block\">Have a look on our jobs openings.</span>', '2019-12-27 00:18:08', '2019-12-27 00:19:42', 'global', NULL, 'textarea'),
(34, 'site_careers_middle_banner_title', '<h2>Bringing your A <span class=\"line link7\">game</span> to an interview.</h2>', '2019-12-27 00:22:24', '2019-12-27 00:24:20', 'global', NULL, 'editor'),
(35, 'site_careers_middle_banner_desc', 'We are a digital agency that specializes in User Experience Design', '2019-12-27 00:24:04', '2019-12-27 00:24:04', 'global', NULL, 'textarea'),
(36, 'site_work_title', '<h2>\r\n                                    <span class=\"span-block\">All Work </span>\r\n                                    <span class=\"span-block\">made with <a href=\"#\" class=\"heading-link\">passion.</a></span>\r\n                                </h2>', '2019-12-27 02:51:02', '2019-12-27 02:51:02', 'global', NULL, 'textarea'),
(37, 'site_work_description', 'We are a digital agency that specializes in User Experience Design', '2019-12-27 02:54:44', '2019-12-27 02:54:44', 'global', NULL, 'text'),
(41, 'site_work_below_banner_description', 'Whatever the challenge, we always deliver a solution.', '2019-12-27 03:21:57', '2019-12-27 03:21:57', 'global', NULL, 'text'),
(42, 'site_work_below_banner_titles', '<ul>\r\n                                        <li><a><span>01</span>Strategy</a></li>\r\n                                        <li><a><span>02</span>Design</a></li>\r\n                                        <li><a><span>03</span>Development</a></li>\r\n                                    </ul>', '2019-12-27 03:35:50', '2019-12-27 03:35:50', 'global', NULL, 'editor'),
(43, 'site_work_below_banner_background_image', '/storage/uploads/solution-img.png', '2019-12-27 03:43:41', '2019-12-27 03:47:53', 'global', NULL, 'image'),
(44, 'site_work_below_banner_image', '/storage/uploads/user.png', '2019-12-27 03:44:30', '2019-12-27 03:48:29', 'global', NULL, 'image'),
(45, 'site_about_title', '<h2>\r\n                                    <span class=\"span-block\">We <span class=\"link-hr link-hr-a1\">Work</span> <span class=\"link-hr link-hr-a2\">With</span> <span class=\"link-hr link-hr-a3\">Big</span> and <span class=\"link-hr link-hr-a4\">Small</span> a like</span>\r\n                                </h2>', '2019-12-27 05:16:29', '2019-12-27 05:16:49', 'global', NULL, 'editor'),
(46, 'site_about_description', '<div class=\"prag-content-center\">\r\n                                    <p class=\"mb-40\">At Wibe, we design mobile apps and digital products that focus on enhancing usability, accessibility and delight for your users. We work from the very start of the product development cycle and create the complete UX/UI design. We can alternatively work to create a comprehensive UI along with the complete design system. </p>\r\n                                    <p>We are a team of creative engineers, and all our UX/UI work is rooted in user research, best practices and a lot of common sense.</p>\r\n                                </div>', '2019-12-27 05:33:28', '2019-12-27 05:33:28', 'global', NULL, 'editor'),
(47, 'site_about_excellence_title', 'Committed to excellence', '2019-12-27 06:24:21', '2019-12-27 06:24:21', 'global', NULL, 'text'),
(48, 'site_about_excellence_description', '<ul>\r\n                                                <li>\r\n                                                    <span class=\"arrow-icons\"><i class=\"fe fe-arrow-right\"></i></span>\r\n                                                    <p>Citrusbug is a design and experience agency that partners with modern, global brands. </p>\r\n                                                </li>\r\n                                                <li>\r\n                                                    <span class=\"arrow-icons\"><i class=\"fe fe-arrow-right\"></i></span>\r\n                                                    <p>At Citrusbug we are on a mission to relentlessly generate smart, creative, forward-thinking solutions in the space between people and technology. </p>\r\n                                                </li>\r\n                                                <li>\r\n                                                    <span class=\"arrow-icons\"><i class=\"fe fe-arrow-right\"></i></span>\r\n                                                    <p>As our new Senior Designer, you will be bringing not only your impeccable design skills and passion for art &amp; technology, but also expertise in client management, problem solving and strategic thinking to our Creative Department.</p>\r\n                                                </li>\r\n                                                <li>\r\n                                                    <span class=\"arrow-icons\"><i class=\"fe fe-arrow-right\"></i></span>\r\n                                                    <p>You’ll be part of an international team, comprised of some of the most talented makers, producers, and creative minds in the industry. We are people who aspire </p>\r\n                                                </li>\r\n                                            </ul>', '2019-12-27 06:25:04', '2019-12-27 06:25:04', 'global', NULL, 'editor'),
(49, 'site_about_core_values_title', '<h2 class=\"primary-color2 mb-0\">\r\n                                    <span class=\"span-block\">Our core</span>\r\n                                    <span class=\"span-block\"> Values ! </span>\r\n                                </h2>', '2019-12-27 06:25:48', '2019-12-27 06:25:48', 'global', NULL, 'editor'),
(50, 'site_about_core_values_description', 'The perfectionism makes some sense, but seems at odds with the current infatuation with Jobs. Jobs couldn\'t find the right beige from a set of 200 and had to design a new beige. He seemed like the ultimate perfectionist – sometimes.', '2019-12-27 06:26:29', '2019-12-27 06:26:29', 'global', NULL, 'textarea'),
(51, 'site_about_creative_agencies_title', '<h2>One of Wales\' oldest<a href=\"#\" class=\"heading-link\"> creative agencies.</a>\r\n                                        </h2>', '2019-12-27 06:27:52', '2019-12-27 06:27:52', 'global', NULL, 'editor'),
(52, 'site_about_creative_agencies_description', '<h4>Recently, Sequence has merged with the Inspiretec Group, adding a new dimension to Inspiretec\'s robust and technical product offering. From understanding and defining a strategy for your digital platform through to design and development, Sequence help travel organisations speak to their customers wherever they are.</h4>', '2019-12-27 06:28:46', '2019-12-27 06:28:46', 'global', NULL, 'editor'),
(53, 'site_social_links', '<h3>Social links</h3>\r\n                    <ul>\r\n                        <li><a href=\"#\">Facebook</a></li>\r\n                        <li><a href=\"#\">Dribble</a></li>\r\n                        <li><a href=\"#\">Dribble</a></li>\r\n                    </ul>', '2019-12-30 02:28:55', '2019-12-30 02:28:55', 'global', 'Social Links', 'textarea'),
(54, 'site_careers_baner_image', '/storage/uploads/Hero_Careers-4.jpg', '2019-12-30 08:03:18', '2019-12-30 08:26:10', 'global', 'Careers Page baner image', 'image'),
(55, 'site_home_technology_title', 'Technology we Expert', '2020-01-07 01:02:49', '2020-01-07 01:02:49', 'global', NULL, 'text'),
(56, 'site_home_technology_desc', 'since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', '2020-01-07 01:03:25', '2020-01-07 01:03:25', 'global', NULL, 'text'),
(57, 'footer_contact_info', '<ul>\r\n                                       <li><a href=\"skype:19739476185\" class=\"contact-icon\">\r\n                                           <span class=\"icon-svg\"><img src=\"assets/images/icons/skype.svg\" alt=\"\"></span>\r\n                                            <span class=\"contact-icon-slide\"><p>thecitrubug.info</p></span></a>\r\n                                        </li>\r\n                                        <li><a href=\"mailto:hello@company.com\" class=\"contact-icon\">\r\n                                            <span class=\"icon-svg\"><img src=\"assets/images/icons/email.svg\" alt=\"\"></span>\r\n                                             <span class=\"contact-icon-slide\"><p>thecitrubug.info</p></span></a>\r\n                                         </li>\r\n                                    </ul>', '2020-01-23 00:19:14', '2020-01-23 00:19:14', 'global', NULL, 'textarea'),
(58, 'footer_copy_info', '<p><span>© 2020 CITRUSBUG.</span> All rights reserved</p>', '2020-01-23 00:20:34', '2020-01-23 00:20:34', 'global', '<p><span>© 2020 CITRUSBUG.</span> All rights reserved</p>', 'textarea'),
(59, 'footer_social_links', '<ul>\r\n                                    <li><a href=\"#\"><span class=\"icon-svg icon-facebook\"></span></a></li>\r\n                                    <li><a href=\"#\"><span class=\"icon-svg icon-instagram\"></span></a></li>\r\n                                    <li><a href=\"#\"><span class=\"icon-svg icon-twitter\"></span></a></li>\r\n                                    <li><a href=\"#\"><span class=\"icon-svg icon-linkedin\"></span></a></li>\r\n                                    <li><a href=\"#\"><span class=\"icon-svg icon-behance\"></span></a></li>\r\n                                </ul>', '2020-01-23 00:21:22', '2020-01-23 00:21:22', 'global', '<ul>\r\n                                    <li><a href=\"#\"><span class=\"icon-svg icon-facebook\"></span></a></li>\r\n                                    <li><a href=\"#\"><span class=\"icon-svg icon-instagram\"></span></a></li>\r\n                                    <li><a href=\"#\"><span class=\"icon-svg icon-twitter\"></span></a></li>\r\n                                    <li><a href=\"#\"><span class=\"icon-svg icon-linkedin\"></span></a></li>\r\n                                    <li><a href=\"#\"><span class=\"icon-svg icon-behance\"></span></a></li>\r\n                                </ul>', 'textarea');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `ordering`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cp', 'Developer\r\nDesigner', 1, '2019-12-25 22:04:02', '2019-12-25 22:09:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`id`, `title`, `slug`, `icon`, `desc`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Node', 'node', '/storage/uploads/icons/technologies/angular.svg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo.</p>', '<h2><a href=\"#\">Node</a></h2>\r\n\r\n<p>We are a digital agency that specializes in User Experience Design</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id luctus molestie, urna est cursus massa, molestie tempus urna ante sit amet dolor. Nunc vestibulum nisi vitae purus venenatis pulvinar. Nunc magna tortor, tempor ut quam at, luctus blandit magna.</p>', '2019-12-25 20:19:47', '2020-01-24 01:29:43', NULL),
(2, 'Python', 'python', '/storage/uploads/icons/technologies/php.svg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id lu</p>', '<h2><a href=\"#\">Python</a></h2>\r\n\r\n<p>We are a digital agency that specializes in User Experience Design</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id luctus molestie, urna est cursus massa, molestie tempus urna ante sit amet dolor. Nunc vestibulum nisi vitae purus venenatis pulvinar. Nunc magna tortor, tempor ut quam at, luctus blandit magna.</p>', '2019-12-25 20:21:07', '2020-01-24 00:31:13', NULL),
(3, 'PHP', 'php', '/storage/uploads/icons/technologies/ios.svg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commo</p>', '<h2><a href=\"#\">PHP</a></h2>\r\n\r\n<p>We are a digital agency that specializes in User Experience Design</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id luctus molestie, urna est cursus massa, molestie tempus urna ante sit amet dolor. Nunc vestibulum nisi vitae purus venenatis pulvinar. Nunc magna tortor, tempor ut quam at, luctus blandit magna.</p>', '2019-12-25 20:21:38', '2020-01-24 00:31:40', NULL),
(4, 'Angular', 'angular', '/storage/uploads/icons/technologies/ios.svg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, n</p>', '<h2><a href=\"#\">Angular</a></h2>\r\n\r\n<p>We are a digital agency that specializes in User Experience Design</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id luctus molestie, urna est cursus massa, molestie tempus urna ante sit amet dolor. Nunc vestibulum nisi vitae purus venenatis pulvinar. Nunc magna tortor, tempor ut quam at, luctus blandit magna.</p>', '2020-01-04 01:01:16', '2020-01-24 01:30:14', NULL),
(5, 'React Native', 'react-native', '/storage/uploads/icons/technologies/ios.svg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvi</p>', '<h2><a href=\"#\">React Native</a></h2>\r\n\r\n<p>We are a digital agency that specializes in User Experience Design</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id luctus molestie, urna est cursus massa, molestie tempus urna ante sit amet dolor. Nunc vestibulum nisi vitae purus venenatis pulvinar. Nunc magna tortor, tempor ut quam at, luctus blandit magna.</p>', '2020-01-07 00:56:58', '2020-01-24 00:32:33', NULL),
(6, 'React', 'react', '/storage/uploads/icons/technologies/php.svg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tem</p>', '<h2><a href=\"#\">React</a></h2>\r\n\r\n<p>We are a digital agency that specializes in User Experience Design</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id luctus molestie, urna est cursus massa, molestie tempus urna ante sit amet dolor. Nunc vestibulum nisi vitae purus venenatis pulvinar. Nunc magna tortor, tempor ut quam at, luctus blandit magna.</p>', '2020-01-07 00:59:12', '2020-01-24 00:32:54', NULL),
(7, 'ML & AI', 'ml-ai', '/storage/uploads/icons/technologies/angular.svg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id luctus molestie, urna est cursus massa, molestie tempus urna ante sit amet dolor. Nunc</p>', '<h2><a href=\"#\">ML &amp; AI</a></h2>\r\n\r\n<p>We are a digital agency that specializes in User Experience Design</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id luctus molestie, urna est cursus massa, molestie tempus urna ante sit amet dolor. Nunc vestibulum nisi vitae purus venenatis pulvinar. Nunc magna tortor, tempor ut quam at, luctus blandit magna.</p>', '2020-01-22 23:19:58', '2020-01-24 00:33:21', NULL),
(8, 'Cloud & DevOps', 'cloud-devops', '/storage/uploads/icons/technologies/ios.svg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis c</p>', '<h2><a href=\"#\">Cloud &amp; DevOps</a></h2>\r\n\r\n<p>We are a digital agency that specializes in User Experience Design</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at lacinia lacus, at malesuada magna. Nam vitae urna in nisi pellentesque tempor. Praesent consequat augue non nunc volutpat ullamcorper. Suspendisse ultricies quam in mauris tincidunt, ac pulvinar felis commodo. Donec varius, nibh id luctus molestie, urna est cursus massa, molestie tempus urna ante sit amet dolor. Nunc vestibulum nisi vitae purus venenatis pulvinar. Nunc magna tortor, tempor ut quam at, luctus blandit magna.</p>', '2020-01-22 23:21:08', '2020-01-24 00:33:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `slug` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', '2019-12-19 09:16:21', '$2y$10$yH9Y56rBpvz3YNQ1S5aTC.xk18rv6nQgBH.Q1tY4HDcxm0VjuX0Qe', NULL, NULL, '2019-12-19 09:16:21', '2019-12-19 09:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_rolls`
--

CREATE TABLE `user_rolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_rolls`
--

INSERT INTO `user_rolls` (`id`, `roll_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-12-19 09:16:21', '2019-12-19 09:16:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abda`
--
ALTER TABLE `abda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baners`
--
ALTER TABLE `baners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `career_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_index` (`category_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_slug_unique` (`slug`);

--
-- Indexes for table `projects_services`
--
ALTER TABLE `projects_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_tech`
--
ALTER TABLE `projects_tech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refe_file`
--
ALTER TABLE `refe_file`
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
  ADD KEY `roll_permissions_roll_id_permission_id_index` (`roll_id`,`permission_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicedetails`
--
ALTER TABLE `servicedetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `servicedetails_slug_unique` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `technology_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_rolls`
--
ALTER TABLE `user_rolls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_rolls_roll_id_user_id_index` (`roll_id`,`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abda`
--
ALTER TABLE `abda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baners`
--
ALTER TABLE `baners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `projects_services`
--
ALTER TABLE `projects_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `projects_tech`
--
ALTER TABLE `projects_tech`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `refe_file`
--
ALTER TABLE `refe_file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `rolls`
--
ALTER TABLE `rolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roll_permissions`
--
ALTER TABLE `roll_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `servicedetails`
--
ALTER TABLE `servicedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_rolls`
--
ALTER TABLE `user_rolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
