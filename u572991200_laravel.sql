-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2024 at 01:12 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u572991200_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$12$Sts6RmknX6pkMGNANircIOk5M4jiLoXpo/P7KEkjmQWUbwkcO5Cx2', 'RM3UtDU81cQjBiBu1BaUdiGawD0E4F0YqZ8yBIBad3anHrxPiVrNb4OLEReu', '2024-03-01 12:47:03', '2024-03-01 12:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `object` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `object`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', 'Ahmed@gmail.com', '0511111111', 'test', 'test message 1', '2024-03-02 08:38:05', '2024-03-02 08:38:05');

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
-- Table structure for table `image_products`
--

CREATE TABLE `image_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_products`
--

INSERT INTO `image_products` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '565e1eae10fe9fp-1.jpeg', '2024-03-01 12:49:05', '2024-03-01 12:49:05'),
(2, 1, '565e1eae111604WhatsApp Image 2024-02-29 at 9.34.45 AM (2).jpeg', '2024-03-01 12:49:05', '2024-03-01 12:49:05'),
(3, 2, '565e1eb4db3417p-2.jpeg', '2024-03-01 12:50:53', '2024-03-01 12:50:53'),
(4, 2, '565e1eb4db6234WhatsApp Image 2024-02-29 at 9.34.44 AM.jpeg', '2024-03-01 12:50:53', '2024-03-01 12:50:53'),
(5, 3, '565e1ebe928b64p-4.jpeg', '2024-03-01 12:53:29', '2024-03-01 12:53:29'),
(6, 3, '565e1ebe929ed0WhatsApp Image 2024-02-29 at 9.34.47 AM (1).jpeg', '2024-03-01 12:53:29', '2024-03-01 12:53:29'),
(7, 4, '565e1ec6abbab1p-5.jpeg', '2024-03-01 12:55:38', '2024-03-01 12:55:38'),
(8, 4, '565e1ec6abcfb5WhatsApp Image 2024-02-29 at 9.34.47 AM (1).jpeg', '2024-03-01 12:55:38', '2024-03-01 12:55:38'),
(9, 5, '565e1ec99912b1p-6.jpeg', '2024-03-01 12:56:25', '2024-03-01 12:56:25'),
(10, 6, '565e1ecc05c027p-3.jpeg', '2024-03-01 12:57:04', '2024-03-01 12:57:04'),
(11, 7, '565e322ee844a1WhatsApp Image 2024-03-02 at 2.57.57 PM.jpeg', '2024-03-02 13:00:30', '2024-03-02 13:00:30');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_03_01_125150_create_products_table', 1),
(7, '2024_03_01_125157_create_contacts_table', 1),
(8, '2024_03_01_125230_create_admins_table', 1),
(9, '2024_03_01_125253_create_orders_table', 1),
(10, '2024_03_01_125311_create_image_products_table', 1),
(11, '2024_03_01_130108_create_order_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sub_total` double(8,2) NOT NULL,
  `tax` double(8,2) DEFAULT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `phone`, `email`, `address`, `sub_total`, `tax`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 'مصطفي حسام رزق', '+201064564850', 'most@gmail.com', 'Mostafa Hossam Rizk', 80.00, 0.00, 80.00, '2024-03-01 15:34:25', '2024-03-01 15:34:25'),
(2, 3, 'Ahmed', '0543478937', 'Ahmed@gmail.com', 'ruh SAU', 80.00, 0.00, 80.00, '2024-03-02 08:24:44', '2024-03-02 08:24:44'),
(3, 4, 'جزرا', '0502294566', 'Heodje689@gmail.com', 'حفر الباطن', 170.00, 0.00, 170.00, '2024-03-03 16:50:33', '2024-03-03 16:50:33'),
(4, 5, 'Abdalteif Aldfeire', '0500056004', 'L6if112@hotmail.com', 'الرياض النسيم الشرقي', 260.00, 0.00, 260.00, '2024-03-03 17:04:25', '2024-03-03 17:04:25'),
(5, 6, 'جابر', '0544033770', 'Jabira19@gmail.com', 'الدمام حي الشعلة', 130.00, 0.00, 130.00, '2024-03-03 17:05:58', '2024-03-03 17:05:58'),
(6, 7, 'سويلم الشمري', '0536334340', 'Swi606@hotmail.com', 'الجبيل الصناعية حي الفيحاء شارع ٣٠ منزل ١١١', 40.00, 0.00, 40.00, '2024-03-03 17:10:37', '2024-03-03 17:10:37'),
(7, 8, 'منصور', '0509588515', 'shammarimi11@gmail.com', 'الجبيل حي الدفي شارع الفيحاء ٣٠ منزل ١١١', 120.00, 0.00, 120.00, '2024-03-03 17:19:13', '2024-03-03 17:19:13'),
(8, 8, 'منصور', '0509588515', 'shammarimi11@gmail.com', 'الجبيل الصناعية حي الدفي شارع الفيحاء 30 منزل 111', 120.00, 0.00, 120.00, '2024-03-03 17:21:47', '2024-03-03 17:21:47'),
(9, 8, 'منصور', '0509588515', 'shammarimi11@gmail.com', 'الجبيل الصناعية حي الدفي شارع الفيحاء 30 منزل 111', 120.00, 0.00, 120.00, '2024-03-03 17:25:39', '2024-03-03 17:25:39'),
(10, 7, 'سويلم الشمري', '0536334340', 'Swi606@hotmail.com', 'الجبيل الصناعية الفيحاء ٣٠ منزل ١١١', 325.00, 0.00, 353.00, '2024-03-03 18:43:51', '2024-03-03 18:43:51'),
(11, 9, 'احمد الظفيري', '0539493205', 'aal822764@gmail.com', 'الرياض', 105.00, 0.00, 133.00, '2024-03-03 18:48:25', '2024-03-03 18:48:25'),
(12, 8, 'منصور', '0509588515', 'shammarimi11@gmail.com', 'الجبيل الصناعية حي الدفي شارع الفيحاء ٣٠', 120.00, 0.00, 148.00, '2024-03-03 22:38:59', '2024-03-03 22:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, '40', NULL, NULL),
(2, 2, 1, 2, '40', NULL, NULL),
(3, 3, 2, 1, '40', NULL, NULL),
(4, 3, 3, 1, '90', NULL, NULL),
(5, 3, 1, 1, '40', NULL, NULL),
(6, 4, 1, 2, '40', NULL, NULL),
(7, 4, 3, 2, '90', NULL, NULL),
(8, 5, 2, 1, '40', NULL, NULL),
(9, 5, 3, 1, '90', NULL, NULL),
(10, 6, 1, 1, '40', NULL, NULL),
(11, 7, 4, 1, '105', NULL, NULL),
(12, 7, 7, 1, '15', NULL, NULL),
(13, 8, 4, 1, '105', NULL, NULL),
(14, 8, 7, 1, '15', NULL, NULL),
(15, 9, 4, 1, '105', NULL, NULL),
(16, 9, 7, 1, '15', NULL, NULL),
(17, 10, 2, 1, '40', NULL, NULL),
(18, 10, 3, 2, '90', NULL, NULL),
(19, 10, 4, 1, '105', NULL, NULL),
(20, 11, 4, 1, '105', NULL, NULL),
(21, 12, 4, 1, '105', NULL, NULL),
(22, 12, 7, 1, '15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `main_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `active`, `main_image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'كرتون سكري مفتل وزنه 3 كيلو', 40.00, 1, '565e1eae108bc9p-1.jpeg', 'طعم غني ومميز: يتميز كرتون سكري جلكسي بطعمه الغني والمميز الذي يجمع بين الشوكولاتة اللذيذة وقطع الجلكسي الكريمية، مما يخلق تجربة لا تُنسى لمحبي الحلويات. قيمة كبيرة: بوزن 3 كيلوغرام، يوفر كرتون سكري جلكسي كمية كبيرة من اللذة واللون لمنزلك أو للمناسبات الخاصة. إنه الخيار المثالي لتلبية الرغبات الحلوة لك ولعائلتك. مناسب لجميع الأوقات: يمكنك الاستمتاع بكرتون سكري جلكسي في أي وقت من اليوم، سواء كانت لديك احتفالية خاصة أو مجرد رغبة في تناول الشوكولاتة. إنه خيار مثالي لإضافة الحلاوة إلى حياتك اليومية. هدية مثالية: بفضل تعبئته الجذابة وطعمه الرائع، يعتبر كرتون سكري جلكسي هدية مثالية لأحبائك في المناسبات الخاصة، مثل الأعياد، الأعياد الوطنية، أو أي مناسبة تحبون الاحتفال بها.', '2024-03-01 12:49:05', '2024-03-01 12:49:05'),
(2, 'كرتون سكري مفتل جلكسي وزنه 3 كيلو ', 40.00, 1, '565e1eb4db00f9p-2.jpeg', 'طعم غني ومميز: يتميز كرتون سكري جلكسي بطعمه الغني والمميز الذي يجمع بين الشوكولاتة اللذيذة وقطع الجلكسي الكريمية، مما يخلق تجربة لا تُنسى لمحبي الحلويات. قيمة كبيرة: بوزن 3 كيلوغرام، يوفر كرتون سكري جلكسي كمية كبيرة من اللذة واللون لمنزلك أو للمناسبات الخاصة. إنه الخيار المثالي لتلبية الرغبات الحلوة لك ولعائلتك. مناسب لجميع الأوقات: يمكنك الاستمتاع بكرتون سكري جلكسي في أي وقت من اليوم، سواء كانت لديك احتفالية خاصة أو مجرد رغبة في تناول الشوكولاتة. إنه خيار مثالي لإضافة الحلاوة إلى حياتك اليومية. هدية مثالية: بفضل تعبئته الجذابة وطعمه الرائع، يعتبر كرتون سكري جلكسي هدية مثالية لأحبائك في المناسبات الخاصة، مثل الأعياد، الأعياد الوطنية، أو أي مناسبة تحبون الاحتفال بها.', '2024-03-01 12:50:53', '2024-03-01 12:50:53'),
(3, 'خلاص القصيم 8 كيلو', 90.00, 1, '565e1ebe9251c0p-4.jpeg', '......', '2024-03-01 12:53:29', '2024-03-01 12:53:29'),
(4, 'خلاص القصيم مجروش 8 كيلو', 105.00, 1, '565e1ec6ab8178p-5.jpeg', '......', '2024-03-01 12:55:38', '2024-03-01 12:55:38'),
(5, 'فنخاء القصيم 8 كيلو', 100.00, 1, '565e1ec998c731p-6.jpeg', '..........', '2024-03-01 12:56:25', '2024-03-01 12:56:25'),
(6, 'سكري 4اكياس وزن الكيس 2 كيلو', 90.00, 1, '565e1ecc058b65p-3.jpeg', '7', '2024-03-01 12:57:04', '2024-03-01 12:57:04'),
(7, 'طحينية سائلة', 15.00, 1, '565e322ee8b0a9WhatsApp Image 2024-03-02 at 2.57.57 PM.jpeg', 'طحينية سائلة', '2024-03-02 13:00:30', '2024-03-02 13:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'خالد', 'user@gmail.com', '01064564850', NULL, '$2y$12$.0gpeTZQQkaJiIqHDre7Gu0vscLtMePVp6LMdu4b.2y0JAOqQ2aRK', 1, NULL, '2024-03-01 12:47:04', '2024-03-01 17:38:48'),
(3, 'ahmed', 'ahmed@gmail.com', '0511111111', NULL, '$2y$12$xCDtDCCivoA.kBLBOUv5peTXZzlj8DLypKisZeLzinqVISylqJV2a', 1, NULL, '2024-03-02 08:24:01', '2024-03-02 08:24:01'),
(4, 'جزرا', 'jeodb678@gmail.com', '0502294566', NULL, '$2y$12$M4kNiGK5YfdbZRt/jOfFG.BeViNS.p2RjSa.YauO9nC/WZ1qhhuRa', 1, NULL, '2024-03-03 16:48:13', '2024-03-03 16:48:13'),
(5, 'Abdalteif Aldfeire', 'L6if112@hotmail.com', '0500056004', NULL, '$2y$12$u.jZeGDAQ93yrnqrc78e4uNwE9kDojK6TYEfBCNiFKqdfgfjIDfZS', 1, NULL, '2024-03-03 17:02:54', '2024-03-03 17:02:54'),
(6, 'جابر', 'jabira19@gmail.com', '0544033770', NULL, '$2y$12$l24oBumsl9tFg9g.4XyjmeTB.Lcb2HsVNeUEoWQ79ezTdjWzVGIra', 1, NULL, '2024-03-03 17:04:10', '2024-03-03 17:04:10'),
(7, 'سويلم الشمري', 'swi606@hotmail.com', '0536334340', NULL, '$2y$12$5KkMm49dSG9xXJNCMhnVq.YDBwpQctlUjw5ALbi5zgaSg/Ec17mFW', 1, NULL, '2024-03-03 17:09:53', '2024-03-03 17:09:53'),
(8, 'منصور', 'shammarimi11@gmail.com', '0509588515', NULL, '$2y$12$8suPsG5KDtI.ooQOed4MVOXykO9EjL67/RcLl5rYthaMx4/Tb7yHS', 1, NULL, '2024-03-03 17:16:11', '2024-03-03 17:16:11'),
(9, 'احمد الظفيري', 'aal822764@gmail.com', '0539493205', NULL, '$2y$12$YWYnRlm4njLqs/l95uDIN.L0J3urs3.Z3ZO1k74SCuFa8jBDAGBUC', 1, NULL, '2024-03-03 18:46:57', '2024-03-03 18:46:57'),
(10, 'عبدالله', 'al3meed131@hotmail.com', '0555942221', NULL, '$2y$12$FIh/ToZySBeam.2uHjJa/Ot3bfQT7f6EIcwshwBlIrznBNcu7QrB6', 1, NULL, '2024-03-03 19:12:05', '2024-03-03 19:12:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `image_products`
--
ALTER TABLE `image_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_products`
--
ALTER TABLE `image_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_products`
--
ALTER TABLE `image_products`
  ADD CONSTRAINT `image_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
