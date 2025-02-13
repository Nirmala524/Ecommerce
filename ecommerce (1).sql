-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2025 at 09:18 AM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `heading`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'About Cake shop', 'Cakes and bakes from the house of Queens!', 'The \"Cake Shop\" is a Jordanian Brand that started as a small family business. The owners are Dr. Iyad Sultan and Dr. Sereen Sharabati, supported by a staff of 80 employees.', NULL, '2024-12-04 03:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 1, '2024-12-16 03:18:56', '2024-12-16 03:18:56'),
(2, 2, 9, 2, '2024-12-16 03:19:19', '2024-12-16 03:19:19'),
(3, 2, 10, 2, '2024-12-16 03:20:44', '2024-12-16 03:20:44'),
(4, 2, 7, 2, '2024-12-16 23:57:54', '2024-12-16 23:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'Cupcake', '2024-10-05 03:09:39', '2024-10-26 00:13:58', 'flaticon-029-cupcake-3'),
(2, 'Red Velvat', '2024-10-06 23:31:35', '2024-10-26 00:14:58', 'flaticon-005-pancake'),
(3, 'Chocolate', '2024-10-07 02:46:45', '2024-10-26 00:15:36', 'flaticon-030-cupcake-2'),
(4, 'strawberry Cake', '2024-10-07 02:47:44', '2024-10-26 00:16:14', 'flaticon-006-macarons'),
(5, 'Butter Cake', '2024-10-25 00:16:27', '2024-10-26 00:15:14', 'flaticon-034-chocolate-roll');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `star` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `place`, `image`, `desc`, `star`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kerry D.Silva', 'New york', '1729242299.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', '5', 1, '2024-10-18 03:14:10', '2024-10-18 03:34:59'),
(2, 'Ophelia Nunez', 'London', '1729241086.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', '5', 1, '2024-10-18 03:14:46', '2024-10-18 03:14:46'),
(3, 'Kerry D.Silva', 'New york', '1729241302.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', '5', 1, '2024-10-18 03:18:22', '2024-10-18 03:18:22'),
(5, 'Ophelia Nunez', 'London', '1729241857.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', '5', 1, '2024-10-18 03:27:37', '2024-10-18 03:27:37'),
(6, 'Kerry D.Silva', 'New york', '1729242576.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', '5', 0, '2024-10-18 03:38:21', '2024-10-18 03:39:36'),
(7, 'Ophelia Nunez', 'London', '1729242602.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', '5', 1, '2024-10-18 03:40:02', '2024-10-18 03:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `custom_logins`
--

CREATE TABLE `custom_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_logins`
--

INSERT INTO `custom_logins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'pooja', 'pooja@gmail.com', '$2y$12$I2ZCCA0oSs/en0aEx9kvb.P8TPkvwkC4XbJN3VLj4fgjzJsww.H8G', '2024-12-12 01:37:33', '2024-12-12 01:37:33'),
(2, 'Rohit Mali', 'rohitmali@gmail.com', '$2y$12$Z6KpW4cXF75VIUoso1/zRun5Tdc9pFQ27nXm.CTU6y4GAj7wbBp5W', '2024-12-12 02:09:02', '2024-12-12 02:09:02');

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
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `title`, `heading`, `created_at`, `updated_at`) VALUES
(1, 'Follow us on instagram', 'Sweet moments are saved as memories.', NULL, '2024-12-05 00:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(27, '0001_01_01_000000_create_users_table', 1),
(28, '0001_01_01_000001_create_cache_table', 1),
(29, '0001_01_01_000002_create_jobs_table', 1),
(30, '2024_09_27_071620_create_sliders_table', 1),
(31, '2024_10_01_074951_create_skills_table', 1),
(33, '2024_10_05_080108_create_categories_table', 1),
(34, '2024_10_07_061816_create_tags_table', 2),
(37, '2024_10_09_072752_create_teams_table', 3),
(38, '2024_10_18_080500_create_clients_table', 4),
(39, '2024_10_05_055651_create_products_table', 5),
(40, '2024_10_25_064337_add_column', 6),
(41, '2024_10_25_072807_add_forign', 7),
(42, '2024_11_09_070849_forign_add', 8),
(43, '2024_11_09_072130_change_data', 9),
(44, '2024_11_11_050452_datatype', 10),
(45, '2024_11_11_051306_stringname', 11),
(46, '2024_12_03_075920_create_settings_table', 12),
(47, '2024_12_04_084702_create_abouts_table', 13),
(48, '2024_12_05_052234_create_ourteams_table', 14),
(49, '2024_12_05_053441_create_ourclients_table', 15),
(50, '2024_12_05_060854_create_follows_table', 16),
(53, '2024_12_05_062154_create_multiimages_table', 17),
(55, '2024_12_12_055158_create_custom_logins_table', 19),
(56, '2024_12_09_060935_create_carts_table', 20),
(57, '2024_12_18_075215_create_personal_access_tokens_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `multiimages`
--

CREATE TABLE `multiimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multiimages`
--

INSERT INTO `multiimages` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1733814866.jpg', 1, '2024-12-10 01:44:27', '2024-12-10 01:44:27'),
(2, '1733814875.jpg', 1, '2024-12-10 01:44:35', '2024-12-10 01:44:35'),
(3, '1733814883.jpg', 1, '2024-12-10 01:44:43', '2024-12-10 01:44:43'),
(4, '1733814894.jpg', 1, '2024-12-10 01:44:54', '2024-12-10 01:44:54'),
(5, '1733814905.jpg', 1, '2024-12-10 01:45:05', '2024-12-10 01:45:05'),
(6, '1733814916.jpg', 1, '2024-12-10 01:45:16', '2024-12-10 01:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `ourclients`
--

CREATE TABLE `ourclients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourclients`
--

INSERT INTO `ourclients` (`id`, `title`, `heading`, `created_at`, `updated_at`) VALUES
(1, 'Testimonial', 'Our client say', NULL, '2024-12-05 00:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `ourteams`
--

CREATE TABLE `ourteams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourteams`
--

INSERT INTO `ourteams` (`id`, `title`, `heading`, `created_at`, `updated_at`) VALUES
(1, 'Our team', 'Sweet Baker', NULL, '2024-12-05 00:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('pooja@gmail.com', '$2y$12$PLN2KtaQrWm.gmxG3fYwa.0iSwOTyCM962.Yg4liPbj9Knym/xOMi', '2024-11-21 02:42:28'),
('rohit11@gmail.com', '$2y$12$2FlgrMUUuX01Pogh8/7bMOo5uGTsH78bp4i3/rkL7wQe2idYRkttK', '2024-11-25 01:45:17'),
('vicky12@gmail.com', '$2y$12$DKBSBJoFy.CH90aaNA3WMOmD0D3sRZ14t8MZAZWSK/9W0bkbFAH66', '2024-11-21 02:28:36');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `category` bigint(20) UNSIGNED DEFAULT NULL,
  `tag` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `price`, `thumbnail`, `image`, `desc`, `category`, `tag`, `status`, `created_at`, `updated_at`) VALUES
(2, 'CupCake', 'Dozen Cupcakes', 3200, '1729834067.jpg', '[\"dofpd1731302126.jpg\",\"Yr6BG1731302126.jpg\",\"s01181731302126.jpg\",\"d4zFa1731302126.webp\",\"oUTaA1731302126.jpg\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', 1, '[\"2\",\"3\",\"4\"]', 1, '2024-10-19 01:34:10', '2024-11-10 23:45:26'),
(3, 'Chocolate', 'Cookies and Cream', 1000, '1729923486.jpg', '[\"SdPiv1731302338.jpg\",\"UqnK01731302338.avif\",\"DuDzh1731302338.avif\",\"nJBsN1731302338.jpg\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', 3, '[\"3\",\"4\"]', 1, '2024-10-19 02:00:56', '2024-11-10 23:48:58'),
(4, 'Red Velvat', 'Gluten Free Mini Dozen', 1500, '1731142545.avif', '[\"ccJSR1731142545.avif\",\"GRlfo1731142545.jpg\",\"jecqX1731142545.jpg\",\"AQpBk1731142545.png\",\"C2VLf1731142545.jpg\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', 2, '[\"3\",\"2\"]', 1, '2024-10-19 02:02:02', '2024-11-09 03:25:45'),
(5, 'Butter Cake', 'Cookie Dough', 3000, '1729923628.jpg', '[\"gUflu1731302369.jpg\",\"yNo031731302369.webp\",\"xTZv21731302369.jpg\",\"Cd7pq1731302369.webp\",\"Emc7z1731302369.webp\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', 5, '[\"3\",\"4\"]', 1, '2024-10-19 02:02:52', '2024-11-10 23:49:29'),
(6, 'Strawberry Cake', 'Vanilla Salted Caramel', 2500, '1729833675.jpeg', '[\"h6SEx1729833675.jpeg\",\"gGoZq1729833675.jpg\",\"GxdS71729833675.webp\",\"qoOmX1729833675.avif\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', 4, '[\"2\",\"4\"]', 1, '2024-10-19 03:06:33', '2024-10-24 23:51:15'),
(7, 'Chocolate', 'German Chocolate', 1000, '1729930116.jpg', '[\"Z71R91731302409.jpg\",\"ltrlA1731302409.jpg\",\"X2MMN1731302409.jpg\",\"3Chbb1731302409.jpg\",\"pMhji1731302409.jpg\",\"yMvRS1731302409.jpg\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', 3, '[\"2\",\"3\"]', 1, '2024-10-19 03:07:30', '2024-11-10 23:50:09'),
(9, 'Red Velvat', 'Mississippi Mud', 2200, '1731139980.jpg', '[\"feQ8S1731302453.jpg\",\"sN07t1731302453.jpg\",\"ZJcc71731302453.jpg\",\"g1IYz1731302453.jpg\",\"5Yrws1731302453.jpg\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', 2, '[\"2\",\"3\",\"4\"]', 1, '2024-10-19 03:08:42', '2024-11-10 23:50:53'),
(10, 'Chocolate', 'Cookies and Cream', 2100, '1733553361.jpg', '[\"xqU4H1733553361.jpg\",\"DfDWa1733553361.jpg\",\"fhB3C1733553361.jpg\",\"CtRs61733553361.jpg\",\"VVR7W1733553361.jpg\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', 3, '[\"2\",\"3\"]', 1, '2024-12-07 01:06:01', '2024-12-07 01:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CxWDTqyq9enQMbbUBgWZJEEiCgofQE6b0DRIbNK1', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo2OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IjFoOElTNFJMajJxUndxMkRtOVRXVTJ0bktyaDV0YnZpUG9ONzV5V3UiO3M6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O3M6NjoibG9jYWxlIjtzOjI6ImVuIjt9', 1734589155),
('Fdb3waSPfpXAOAJxhSydOyeVejhZH0FyXnmBcmzY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUlJzQmtYNExFUGxiZTRGUGQ3cUxxM1JsNWZ0MERZdUpBd1k5YXo1RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734500525);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `desc` longtext NOT NULL,
  `work` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `darkimage` varchar(255) NOT NULL,
  `lightimage` varchar(255) NOT NULL,
  `map` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `contact`, `desc`, `work`, `facebook`, `youtube`, `twitter`, `instagram`, `darkimage`, `lightimage`, `map`, `created_at`, `updated_at`) VALUES
(1, 'pooja@gmail.com', 9562365897, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida', '<ul><li>Monday - Friday: 08:00 am – 08:30 pm</li><li>Saturday: 10:00 am – 16:30 pm</li><li>Sunday: 10:00 am – 16:30 pm</li></ul>', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://x.com/?lang=en', 'https://www.instagram.com/', '1733549385.png', '1733297451.png', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304', NULL, '2024-12-06 23:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `per` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `per`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cake design', '90', 1, '2024-10-07 02:42:13', '2024-11-11 03:34:35'),
(2, 'Cake Class', '85', 1, '2024-10-07 02:42:27', '2024-10-07 02:42:27'),
(3, 'Cake Recipes', '90', 1, '2024-10-18 01:43:07', '2024-10-18 01:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Making your life sweeter one bite at a time!', '1729228055.jpg', 1, '2024-10-17 23:37:37', '2024-10-17 23:37:37'),
(2, 'Making your life sweeter one bite at a time!', '1729228067.jpg', 1, '2024-10-17 23:37:47', '2024-11-25 02:30:41'),
(3, 'Making your life sweeter one bite at a time!   ', '1729925006.jpg', 0, '2024-10-17 23:38:01', '2024-10-26 01:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(2, 'Gadgets', '2024-10-07 01:01:21', '2024-10-07 01:43:19'),
(3, 'minimalisstic', '2024-10-07 01:13:08', '2024-10-07 01:43:27'),
(4, 'Gadgets', '2024-10-07 01:13:14', '2024-10-07 01:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `post`, `image`, `facebook`, `twitter`, `instagram`, `youtube`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Randy Butler', 'Decorater', '1729150922.jpg', 'Facebook', 'twitter', 'instagram', 'youtube', 1, '2024-10-17 01:18:14', '2024-11-09 03:00:58'),
(2, 'Randy Butler', 'Decorater', '1729147705.jpg', 'Facebook', 'twitter', 'instagram', 'youtube', 1, '2024-10-17 01:18:25', '2024-10-17 01:18:25'),
(3, 'Randy Butler', 'Decorater', '1729147716.jpg', 'Facebook', 'twitter', 'instagram', 'youtube', 1, '2024-10-17 01:18:36', '2024-10-17 01:18:36'),
(4, 'Randy Butler', 'Decorater', '1729147732.jpg', 'Facebook', 'twitter', 'instagram', 'youtube', 1, '2024-10-17 01:18:52', '2024-10-17 01:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'test', 'testuser@gmail.com', NULL, '$2y$12$8CgtuevO1PKMI/N33wNzg.doRi6BSCygOAZu8z99SUhuuDllr9LoS', NULL, '2024-11-25 02:03:23', '2024-11-25 02:03:23'),
(8, 'pooja', 'pooja@gmail.com', NULL, '$2y$12$EUDjx9LXQlOu1YCdZZRWd.KkqsJHEdEU74VL8o2/doKYn9JCXL5fS', NULL, '2024-12-11 00:17:23', '2024-12-11 00:17:23'),
(9, 'Rohit Mali', 'rohitmali@gmail.com', NULL, '$2y$12$zff04t97BCA9s66yGPPJbeOOys2pIdvXHAYIxwKu8QFtb1n4DyJtu', NULL, '2024-12-11 23:59:39', '2024-12-11 23:59:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_logins`
--
ALTER TABLE `custom_logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custom_logins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiimages`
--
ALTER TABLE `multiimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourclients`
--
ALTER TABLE `ourclients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteams`
--
ALTER TABLE `ourteams`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_foreign` (`category`),
  ADD KEY `products_tag_foreign` (`tag`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `custom_logins`
--
ALTER TABLE `custom_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `multiimages`
--
ALTER TABLE `multiimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ourclients`
--
ALTER TABLE `ourclients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourteams`
--
ALTER TABLE `ourteams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `custom_logins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
