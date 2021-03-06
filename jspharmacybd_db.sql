-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2020 at 04:37 PM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jspharmacybd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `remarks`, `added_by`, `created_at`, `updated_at`) VALUES
(6, 'Capsule', 'Capsule', 1, '2020-03-12 20:48:07', '2020-03-13 22:12:03'),
(7, 'Tablet', 'Tablet', 1, '2020-03-12 20:49:02', '2020-03-13 22:11:44'),
(8, 'Oral Suspension', 'Oral Suspension', 1, '2020-03-12 20:50:04', '2020-03-13 22:11:22'),
(9, 'Syrup', 'Syrup', 1, '2020-03-12 20:51:00', '2020-03-13 22:10:50'),
(10, 'Pediatric Drop', 'Pediatric Drop', 1, '2020-03-12 20:52:09', '2020-03-13 22:10:21'),
(11, 'Powder', 'Powder', 1, '2020-03-12 20:52:46', '2020-03-12 20:52:46'),
(12, 'Eye / Eyre  Drop', 'Eye / Eyre  Drop', 1, '2020-03-12 20:53:39', '2020-03-13 22:10:01'),
(13, 'Injection', 'Injection', 1, '2020-03-12 20:55:24', '2020-03-13 22:09:17'),
(14, 'Gel', 'Gel', 1, '2020-03-12 20:56:03', '2020-03-12 20:56:03'),
(15, 'Oral Past / Gel', 'Oral Past / Gel', 1, '2020-03-12 20:56:42', '2020-03-12 20:56:42'),
(16, 'Solution', 'Solution', 1, '2020-03-12 20:57:14', '2020-03-12 20:57:14'),
(17, 'Nasal Spray', 'Nasal Spray', 1, '2020-03-12 20:57:51', '2020-03-12 20:57:51'),
(18, 'Nasal Drop', 'Nasal Drop', 1, '2020-03-12 20:58:21', '2020-03-12 20:58:21'),
(19, 'Inhaler', 'Inhaler', 1, '2020-03-12 20:58:53', '2020-03-12 20:58:53'),
(20, 'Inhalation Powder', 'Inhalation Powder', 1, '2020-03-12 20:59:23', '2020-03-12 20:59:23'),
(21, 'Oral Solution', 'Oral Solution', 1, '2020-03-12 20:59:55', '2020-03-12 20:59:55'),
(22, 'Hand Rub', 'Hand Rub', 1, '2020-03-12 21:00:27', '2020-03-12 21:00:27'),
(23, 'Cream', 'Cream', 1, '2020-03-12 21:01:09', '2020-03-12 21:01:09'),
(24, 'Ointment', 'Ointment', 1, '2020-03-12 21:01:59', '2020-03-13 22:08:24'),
(25, 'Scalp Solution / Lotion', 'Scalp Solution / Lotion', 1, '2020-03-12 21:02:29', '2020-03-12 21:02:29'),
(26, 'Vaginal Tablet', 'Vaginal Tablet', 1, '2020-03-12 21:04:15', '2020-03-13 22:07:57'),
(27, 'Topical Gel', 'Topical Gel', 1, '2020-03-12 21:04:39', '2020-03-12 21:04:39'),
(28, 'Mouth Wash', 'Mouth Wash', 1, '2020-03-12 21:05:11', '2020-03-12 21:05:11'),
(30, 'Infusion', 'Infusion', 1, '2020-03-12 21:06:33', '2020-03-17 15:12:16'),
(31, 'Suppository', 'Suppository', 1, '2020-03-12 21:08:11', '2020-03-13 22:07:10'),
(32, 'Contraceptive pill', 'Contraceptive pill', 1, '2020-03-12 21:09:24', '2020-03-13 22:06:51'),
(33, 'Condom', 'Condom', 1, '2020-03-12 21:09:57', '2020-03-12 21:09:57'),
(34, 'Sanitary Napkin / Tishu', 'Sanitary Napkin / Tishu', 1, '2020-03-12 21:13:37', '2020-03-12 21:13:37'),
(35, 'Oral Powder', 'Oral Powder', 1, '2020-03-12 21:14:05', '2020-03-12 21:14:05'),
(36, 'Effervescent Tablet', 'Effervescent Tablet', 1, '2020-03-12 22:36:10', '2020-03-13 22:06:11'),
(38, 'Powder for Suspension', 'Powder for Suspension', 1, '2020-03-13 13:34:59', '2020-03-13 22:05:34'),
(41, 'Soft Gelatin Capsule', 'Soft Gelatin Capsule', 1, '2020-03-13 21:18:31', '2020-03-13 21:18:31'),
(42, 'Tablet & Capsul', 'Tablet & Capsule', 1, '2020-03-13 21:19:10', '2020-03-14 21:43:59'),
(44, 'Chewable Tablet', NULL, 1, '2020-03-15 10:04:19', '2020-03-15 10:05:08'),
(45, 'SC Injection', 'SC Injection', 1, '2020-03-15 10:16:10', '2020-03-15 22:34:26'),
(46, 'IM Injection', 'IM Injection', 1, '2020-03-15 10:19:26', '2020-03-15 10:19:26'),
(47, 'IV Injection', 'IV Injection', 1, '2020-03-15 10:22:56', '2020-03-15 10:22:56'),
(48, 'IV Injection or Infusion', 'IV Injection or Infusion', 1, '2020-03-15 22:34:17', '2020-03-15 22:34:17'),
(49, 'IM/IV Injection', 'IM/IV Injection', 1, '2020-03-15 22:51:24', '2020-03-15 22:51:24'),
(50, 'Respirator Solution', 'Respirator Solution', 1, '2020-03-15 23:16:01', '2020-03-15 23:16:01'),
(51, 'Dry Powder for Inhalation', 'Dry Powder for Inhalation', 1, '2020-03-15 23:17:16', '2020-03-15 23:17:16'),
(52, 'Fast Dissolving Tablet', 'Fast Dissolving Tablet', 1, '2020-03-16 12:01:26', '2020-03-16 12:01:26'),
(53, 'Granules for Suspension', 'Granules for Suspension', 1, '2020-03-16 12:14:15', '2020-03-16 12:14:15'),
(54, 'Solution for Inhalation', 'Solution for Inhalation', 1, '2020-03-16 17:32:22', '2020-03-16 17:32:22'),
(55, 'Mouthwash', 'Mouthwash', 1, '2020-03-16 22:03:22', '2020-03-16 22:03:22'),
(56, 'Cozycap', 'Cozycap', 1, '2020-03-16 22:49:30', '2020-03-16 22:49:30'),
(57, 'Spray', 'Spray', 1, '2020-03-16 23:01:49', '2020-03-16 23:01:49'),
(58, 'Orodispersible Tablet', 'Orodispersible Tablet', 1, '2020-03-16 23:20:43', '2020-03-16 23:20:43'),
(59, 'IV/SC Injection', 'IV/SC Injection', 1, '2020-03-16 23:29:28', '2020-03-16 23:29:28'),
(60, 'Rectal Saline', 'Rectal Saline', 1, '2020-03-17 21:54:32', '2020-03-17 21:54:32'),
(61, 'Acucap', 'Acucap', 1, '2020-03-17 22:19:04', '2020-03-17 22:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mobile`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'test', '01718324886', 'test1', NULL, '2020-03-15 01:00:15', '2020-03-15 01:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicine_orders`
--

CREATE TABLE `medicine_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accepted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accepted_at` datetime DEFAULT NULL,
  `shipped_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_at` datetime DEFAULT NULL,
  `delivery_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canceled_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canceled_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine_orders`
--

INSERT INTO `medicine_orders` (`id`, `order_code`, `customer_id`, `note`, `status`, `accepted_by`, `accepted_at`, `shipped_by`, `shipped_at`, `delivery_media`, `canceled_by`, `canceled_at`, `created_at`, `updated_at`) VALUES
(1, 'JSP-074-D45DF2', 1, 'tt', 'accepted', '4', '2020-03-14 21:01:59', NULL, NULL, NULL, NULL, NULL, '2020-03-15 01:00:15', '2020-03-15 01:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_order_items`
--

CREATE TABLE `medicine_order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `rate` double UNSIGNED NOT NULL,
  `mrp` double UNSIGNED NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine_order_items`
--

INSERT INTO `medicine_order_items` (`id`, `order_id`, `product_id`, `quantity`, `rate`, `mrp`, `unit`, `batch`, `expired`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 108, 10, 4.03, 40.3, 'pcs', NULL, '2020-03-15 00:00:00', NULL, '2020-03-15 07:01:59', NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_02_182728_create_categories_table', 1),
(5, '2020_03_05_090131_create_products_table', 1),
(6, '2020_03_05_235049_create_pos_table', 1),
(7, '2020_03_07_151506_create_medicine_orders_table', 1),
(8, '2020_03_07_151534_create_customers_table', 1),
(9, '2020_03_07_151959_create_medicine_order_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) NOT NULL,
  `rate` double NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category`, `rate`, `unit`, `detail`, `added_by`, `created_at`, `updated_at`) VALUES
(5, '5X (30mg)', 32, 195.9, 'file', 'Renata Limited', 1, '2020-03-12 21:18:49', '2020-03-12 21:19:16'),
(6, 'AB Kit (200 mg+200 mcg )', 32, 300, 'file', 'Renata Limited', 1, '2020-03-12 21:21:00', '2020-03-12 21:21:00'),
(7, 'Adovir 10 mg', 7, 10, 'pcs', 'Renata Limited', 1, '2020-03-12 21:23:19', '2020-03-12 21:23:19'),
(8, 'Agrippal S1 Inactivated Influenza Vaccine 0.5 ml', 13, 650, 'file', 'Renata Limited', 1, '2020-03-12 21:25:22', '2020-03-12 21:25:22'),
(9, 'Alentin DS 400 mg', 7, 3.35, 'pcs', 'Renata Limited', 1, '2020-03-12 21:27:03', '2020-03-12 21:27:03'),
(10, 'Algin 50 mg', 7, 7, 'pcs', 'Renata Limited', 1, '2020-03-12 21:41:13', '2020-03-12 21:41:13'),
(11, 'Algin 10 mg/5 ml (100 ml bottle)', 9, 89.96, 'file', 'Renata Limited', 1, '2020-03-12 21:43:20', '2020-03-12 21:43:20'),
(12, 'Algin 10 mg/5 ml (50 ml bottle)', 9, 55, 'file', 'Renata Limited', 1, '2020-03-12 21:44:42', '2020-03-12 21:44:42'),
(13, 'Algin IM/IV 5 mg/2 ml', 13, 27.74, 'pcs', 'Renata Limited', 1, '2020-03-12 21:46:07', '2020-03-12 21:46:07'),
(14, 'Allermine 2 mg/5 ml (100 ml bottle)', 9, 14.14, 'file', 'Renata Limited', 1, '2020-03-12 21:48:27', '2020-03-12 21:48:27'),
(15, 'Alphapress 1 mg', 7, 4.01, 'pcs', 'Renata Limited', 1, '2020-03-12 21:50:26', '2020-03-12 21:50:26'),
(16, 'Alphapress 2 mg', 7, 6.02, 'pcs', 'Renata Limited', 1, '2020-03-12 22:00:12', '2020-03-12 22:00:12'),
(17, 'Androcap 40 mg', 6, 20, 'pcs', 'Renata Limited', 1, '2020-03-12 22:01:05', '2020-03-12 22:01:05'),
(18, 'Arbecin 100 mcg/ml', 13, 149.99, 'file', 'Renata Limited', 1, '2020-03-12 22:02:54', '2020-03-12 22:02:54'),
(19, 'Azisan 40 mg', 7, 12, 'pcs', 'Renata Limited', 1, '2020-03-12 22:04:05', '2020-03-12 22:04:05'),
(20, 'Azisan 80 mg', 7, 22, 'pcs', 'Renata Limited', 1, '2020-03-12 22:05:24', '2020-03-12 22:05:24'),
(21, 'Becnox M', 7, 1.09, 'pcs', 'Renata Limited', 1, '2020-03-12 22:07:02', '2020-03-12 22:07:02'),
(22, 'Beconex 100 ml bottle', 9, 35.1, 'file', 'Renata Limited', 1, '2020-03-12 22:08:56', '2020-03-12 22:08:56'),
(23, 'Beconex 200 ml bottle', 9, 62.17, 'file', 'Renata Limited', 1, '2020-03-12 22:09:35', '2020-03-12 22:09:35'),
(24, 'Beconex ZI 100 ml bottle', 9, 50.33, 'file', 'Renata Limited', 1, '2020-03-12 22:11:19', '2020-03-12 22:11:19'),
(25, 'Becosules', 6, 2.51, 'pcs', 'Renata Limited', 1, '2020-03-12 22:12:40', '2020-03-12 22:12:40'),
(26, 'Becosules Gold', 6, 3.03, 'pcs', 'Renata Limited', 1, '2020-03-12 22:14:05', '2020-03-12 22:14:05'),
(27, 'Bigmet 500mg', 7, 4, 'pcs', 'Renata Limited', 1, '2020-03-12 22:15:59', '2020-03-12 22:15:59'),
(28, 'Bigmet 850mg', 7, 6, 'pcs', 'Renata Limited', 1, '2020-03-12 22:17:14', '2020-03-12 22:17:14'),
(29, 'Bisoren 2.5 mg', 7, 6.02, 'pcs', 'Renata Limited', 1, '2020-03-12 22:19:13', '2020-03-12 22:19:13'),
(30, 'Bisoren 5 mg', 7, 10.03, 'pcs', 'Renata Limited', 1, '2020-03-12 22:20:40', '2020-03-12 22:20:40'),
(31, 'Bisoren Plus 2.5 mg+6.25 mg', 7, 6, 'pcs', 'Renata Limited', 1, '2020-03-12 22:22:25', '2020-03-12 22:22:25'),
(32, 'Bisoren Plus 5 mg+6.25 mg', 7, 10.01, 'pcs', 'Renata Limited', 1, '2020-03-12 22:23:41', '2020-03-12 22:23:41'),
(33, 'Bredicon 75 mcg', 32, 59.18, 'file', 'Renata Limited', 1, '2020-03-12 22:25:30', '2020-03-12 22:25:30'),
(34, 'Cabolin 0.5 mg', 7, 80.21, 'pcs', 'Renata Limited', 1, '2020-03-12 22:29:59', '2020-03-12 22:29:59'),
(35, 'Calcefer EFF', 36, 60, 'file', 'Renata Limited', 1, '2020-03-12 22:35:11', '2020-03-12 22:36:51'),
(36, 'Calciferol IM 200000 IU/ml', 13, 120.31, 'file', 'Renata Limited', 1, '2020-03-12 22:39:21', '2020-03-12 22:39:21'),
(37, 'Calcin 500 mg', 7, 5, 'pcs', 'Renata Limited', 1, '2020-03-12 22:43:47', '2020-03-12 22:43:47'),
(38, 'Calcin-D 500 mg+200 IU', 7, 7, 'pcs', 'Renata Limited', 1, '2020-03-12 22:46:02', '2020-03-12 22:46:02'),
(39, 'Calcin-M', 7, 5.5, 'pcs', 'Renata Limited', 1, '2020-03-12 22:47:41', '2020-03-12 22:47:41'),
(40, 'Calcin-O 400 mg', 7, 8, 'pcs', 'Renata Limited', 1, '2020-03-12 22:49:17', '2020-03-12 22:49:17'),
(41, 'Calcin-O DS 740 mg', 7, 12.01, 'pcs', 'Renata Limited', 1, '2020-03-12 22:50:58', '2020-03-12 22:50:58'),
(42, 'Cardipin 5 mg', 7, 5.01, 'pcs', 'Renata Limited', 1, '2020-03-12 22:53:22', '2020-03-12 22:54:27'),
(43, 'Cardipin Plus 5 mg+50 mg', 7, 6.02, 'pcs', 'Renata Limited', 1, '2020-03-13 13:05:38', '2020-03-13 13:06:03'),
(44, 'Caress 2.5% (15 gm tube)', 23, 43.65, 'file', 'Renata Limited', 1, '2020-03-13 13:08:40', '2020-03-13 13:08:40'),
(45, 'Caress 5% (15 gm tube)', 23, 45, 'file', 'Renata Limited', 1, '2020-03-13 13:10:48', '2020-03-13 13:10:48'),
(46, 'Cartilage Plus 250 mg+200 mg', 7, 8.05, 'pcs', 'Renata Limited', 1, '2020-03-13 13:12:32', '2020-03-13 13:12:32'),
(47, 'Cebuten 400 mg', 6, 120, 'pcs', 'Renata Limited', 1, '2020-03-13 13:16:25', '2020-03-13 13:16:25'),
(48, 'Ceclofen 100 mg', 7, 4.01, 'pcs', 'Renata Limited', 1, '2020-03-13 13:17:49', '2020-03-13 13:17:49'),
(49, 'Cefazid 250 mg IM/IV', 13, 85.22, 'file', 'Renata Limited', 1, '2020-03-13 13:19:42', '2020-03-13 13:19:42'),
(50, 'Cefazid 500 mg IM/IV', 13, 130.33, 'file', 'Renata Limited', 1, '2020-03-13 13:22:13', '2020-03-13 13:22:13'),
(51, 'Cefazid 1 gm IM/IV', 13, 240.62, 'file', 'Renata Limited', 1, '2020-03-13 13:23:35', '2020-03-13 13:23:35'),
(52, 'Cefotax 250 mg IM/IV', 13, 75.19, 'pcs', 'Renata Limited', 1, '2020-03-13 13:25:27', '2020-03-13 13:25:27'),
(53, 'Cefotax 500 mg IM/IV', 13, 100.25, 'file', 'Renata Limited', 1, '2020-03-13 13:27:31', '2020-03-13 13:27:31'),
(54, 'Cefotax 1 gm IM/IV', 13, 180.46, 'file', 'Renata Limited', 1, '2020-03-13 13:29:10', '2020-03-13 13:29:10'),
(55, 'Cefticlor 250 mg', 6, 21.08, 'pcs', 'Renata Limited', 1, '2020-03-13 13:30:40', '2020-03-13 13:30:40'),
(56, 'Cefticlor 500 mg', 6, 38.14, 'pcs', 'Renata Limited', 1, '2020-03-13 13:32:00', '2020-03-13 13:32:00'),
(57, 'Cefticlor 125 mg/5 ml (100 ml bottle)', 38, 190.72, 'pcs', 'Renata Limited', 1, '2020-03-13 13:37:57', '2020-03-13 13:41:05'),
(58, 'Cefticlor 125 mg/1.25 ml (15 ml bottle)', 10, 125.47, 'file', 'Renata Limited', 1, '2020-03-13 13:40:48', '2020-03-13 13:40:48'),
(59, 'Cefticlor ER 375 mg', 7, 30.11, 'pcs', 'Renata Limited', 1, '2020-03-13 14:06:23', '2020-03-13 14:06:23'),
(60, 'Ceftipime 500 mg IM/IV', 13, 301.9, 'file', 'Renata Limited', 1, '2020-03-13 14:07:46', '2020-03-13 14:07:46'),
(61, 'Ceftipime 1 gm IM/IV', 13, 553.5, 'file', 'Renata Limited', 1, '2020-03-13 14:09:29', '2020-03-13 14:09:29'),
(62, 'Ceftipime 2 gm IM/IV', 13, 1107.57, 'file', 'Renata Limited', 1, '2020-03-13 14:11:43', '2020-03-13 14:11:43'),
(63, 'Ceftizone 250 mg IM', 13, 100.63, 'file', 'Renata Limited', 1, '2020-03-13 14:14:51', '2020-03-13 14:14:51'),
(64, 'Ceftizone 250 mg IV', 13, 100.63, 'file', 'Renata Limited', 1, '2020-03-13 14:17:09', '2020-03-13 14:17:09'),
(65, 'Ceftizone 500 mg IM', 13, 140.89, 'file', 'Renata Limited', 1, '2020-03-13 14:19:10', '2020-03-13 14:19:10'),
(66, 'Ceftizone 500 mg IV', 13, 140.89, 'file', 'Renata Limited', 1, '2020-03-13 14:20:29', '2020-03-13 14:20:29'),
(67, 'Ceftizone 1 gm IM', 13, 201.27, 'file', 'Renata Limited', 1, '2020-03-13 14:21:54', '2020-03-13 14:21:54'),
(68, 'Ceftizone 1 gm IV', 13, 201.27, 'file', 'Renata Limited', 1, '2020-03-13 14:23:27', '2020-03-13 14:23:27'),
(69, 'Ceftizone 2 gm IV', 13, 342.15, 'file', 'Renata Limited', 1, '2020-03-13 14:24:52', '2020-03-13 14:24:52'),
(70, 'Chewrol', 7, 3, 'pcs', 'Renata Limited', 1, '2020-03-13 14:33:09', '2020-03-13 14:33:09'),
(71, 'Chloramex 0.5% (10 ml drop)', 12, 25.26, 'file', 'Renata Limited', 1, '2020-03-13 20:22:48', '2020-03-13 20:22:48'),
(72, 'Clarox 250 mg', 7, 25, 'pcs', 'Renata Limited', 1, '2020-03-13 20:24:11', '2020-03-13 20:24:11'),
(73, 'Clarox 500 mg', 7, 40, 'pcs', 'Renata Limited', 1, '2020-03-13 20:25:14', '2020-03-13 20:25:14'),
(74, 'Clavoxil 250 mg+125 mg', 7, 20, 'pcs', 'Renata Limited', 1, '2020-03-13 20:27:11', '2020-03-13 20:27:11'),
(75, 'Clavoxil 500 mg+125 mg', 7, 25, 'pcs', 'Renata Limited', 1, '2020-03-13 20:28:32', '2020-03-13 20:28:32'),
(76, 'Conasyd 1%', 23, 63.17, 'file', 'Renata Limited', 1, '2020-03-13 20:30:19', '2020-03-13 20:30:19'),
(77, 'Conrena-R', 7, 42, 'file', 'Renata Limited', 1, '2020-03-13 20:32:07', '2020-03-13 20:32:07'),
(78, 'Constilac 3.35 gm/5 ml (100 ml bottle)', 21, 100, 'file', 'Renata Limited', 1, '2020-03-13 20:33:58', '2020-03-13 20:33:58'),
(79, 'Covan 500 mg IV', 30, 250, 'file', 'Renata Limited', 1, '2020-03-13 20:35:55', '2020-03-13 20:35:55'),
(80, 'Covan 1 gm IV', 30, 480, 'file', 'Renata Limited', 1, '2020-03-13 20:37:14', '2020-03-13 20:37:14'),
(81, 'Criptine 2.5 mg', 7, 12.03, 'pcs', 'Renata Limited', 1, '2020-03-13 20:38:29', '2020-03-13 20:38:29'),
(82, 'Danzol 100 mg', 6, 20.05, 'pcs', 'Renata Limited', 1, '2020-03-13 20:39:32', '2020-03-13 20:39:32'),
(83, 'Danzol 200 mg', 6, 38.1, 'pcs', 'Renata Limited', 1, '2020-03-13 20:40:34', '2020-03-13 20:40:34'),
(84, 'Delentin 50 mg/ml (10 ml bottle)', 8, 16.04, 'file', 'Renata Limited', 1, '2020-03-13 20:42:28', '2020-03-13 20:42:28'),
(85, 'Delentin 125 mg', 7, 1.66, 'pcs', 'Renata Limited', 1, '2020-03-13 20:43:57', '2020-03-13 20:43:57'),
(86, 'Deltasone 1 mg', 7, 0.33, 'pcs', 'Renata Limited', 1, '2020-03-13 20:45:05', '2020-03-13 20:45:05'),
(87, 'Deltasone 5 mg', 7, 1.73, 'pcs', 'Renata Limited', 1, '2020-03-13 20:46:06', '2020-03-13 20:46:06'),
(88, 'Deltasone 10 mg', 7, 3.24, 'pcs', 'Renata Limited', 1, '2020-03-13 20:47:04', '2020-03-13 20:47:04'),
(89, 'Deltasone 20 mg', 7, 6.28, 'pcs', 'Renata Limited', 1, '2020-03-13 20:48:48', '2020-03-13 20:48:48'),
(90, 'Deltasone 5 mg/5 ml (50 ml bottle)', 21, 60.2, 'file', 'Renata Limited', 1, '2020-03-13 20:50:36', '2020-03-13 20:50:36'),
(91, 'Deltasone 5 mg/5 ml (100 ml bottle)', 21, 94.99, 'file', 'Renata Limited', 1, '2020-03-13 20:55:28', '2020-03-13 20:55:28'),
(92, 'Deltasone-N 5 ml drop', 12, 39.95, 'file', 'Renata Limited', 1, '2020-03-13 20:56:43', '2020-03-13 20:56:43'),
(93, 'Denixil 0.5 mg', 7, 4.01, 'pcs', 'Renata Limited', 1, '2020-03-13 20:57:40', '2020-03-13 20:57:40'),
(94, 'Denixil 2 mg', 7, 6, 'pcs', 'Renata Limited', 1, '2020-03-13 20:58:49', '2020-03-13 20:58:49'),
(95, 'Desolon', 32, 107.4, 'file', 'Renata Limited', 1, '2020-03-13 20:59:54', '2020-03-13 20:59:54'),
(96, 'Dexa 0.5 mg', 7, 1, 'pcs', 'Renata Limited', 1, '2020-03-13 21:02:56', '2020-03-13 21:02:56'),
(97, 'Dexa IM/IV 5 mg/ml', 13, 24.99, 'pcs', 'Renata Limited', 1, '2020-03-13 21:04:12', '2020-03-13 21:04:12'),
(98, 'Dexatab 0.5 mg', 7, 0.6, 'pcs', 'Renata Limited', 1, '2020-03-13 21:05:30', '2020-03-13 21:05:30'),
(99, 'Diamine 12 lac units', 13, 24.21, 'file', 'Renata Limited', 1, '2020-03-13 21:07:18', '2020-03-13 21:07:18'),
(100, 'Domiren 10 mg', 7, 2.01, 'pcs', 'Renata Limited', 1, '2020-03-13 21:08:19', '2020-03-13 21:08:19'),
(101, 'Domiren 5 mg/5 ml (60 ml bottle)', 8, 35, 'file', 'Renata Limited', 1, '2020-03-13 21:09:39', '2020-03-13 21:09:39'),
(102, 'Domiren 5 mg/5 ml (100 ml bottle)', 8, 38, 'file', 'Renata Limited', 1, '2020-03-13 21:10:38', '2020-03-13 21:11:00'),
(103, 'Domiren 5 mg/ ml (15 ml bottle)', 10, 25, 'file', 'Renata Limited', 1, '2020-03-13 21:12:47', '2020-03-13 21:12:47'),
(104, 'Doxicap 50 mg', 6, 1.43, 'pcs', 'Renata Limited', 1, '2020-03-13 21:13:47', '2020-03-13 21:13:47'),
(105, 'Doxicap 100 mg', 6, 2.2, 'pcs', 'Renata Limited', 1, '2020-03-13 21:14:49', '2020-03-13 21:14:49'),
(106, 'Dysmen 250 mg', 7, 2.81, 'pcs', 'Renata Limited', 1, '2020-03-13 21:16:02', '2020-03-13 21:16:02'),
(107, 'Dysmen 500 mg', 7, 5.01, 'pcs', 'Renata Limited', 1, '2020-03-13 21:17:12', '2020-03-13 21:17:12'),
(108, 'E-Gel 200 IU', 41, 4.03, 'pcs', 'Renata Limited', 1, '2020-03-13 21:20:35', '2020-03-13 21:20:35'),
(109, 'E-Gel DS 400 IU', 41, 6.04, 'pcs', 'Renata Limited', 1, '2020-03-13 21:22:16', '2020-03-13 21:22:16'),
(110, 'Emcon 1', 32, 71.76, 'file', 'Renata Limited', 1, '2020-03-13 21:24:16', '2020-03-13 21:24:16'),
(111, 'Emeren 4 mg', 7, 6, 'pcs', 'Renata Limited', 1, '2020-03-13 21:25:25', '2020-03-13 21:25:25'),
(112, 'Emeren 8 mg', 7, 10.03, 'pcs', 'Renata Limited', 1, '2020-03-13 21:26:28', '2020-03-13 21:26:28'),
(113, 'Emeren 8 mg/4 ml', 13, 30.08, 'pcs', 'Renata Limited', 1, '2020-03-13 21:28:03', '2020-03-13 21:28:03'),
(114, 'Emeren 50 mg/5 ml (50 ml bottle)', 9, 30, 'pcs', 'Renata Limited', 1, '2020-03-13 21:30:02', '2020-03-13 21:30:02'),
(115, 'Enteca 0.5 mg', 7, 48, 'pcs', 'Renata Limited', 1, '2020-03-13 21:41:56', '2020-03-13 21:41:56'),
(116, 'Epidron 25 mg/5 ml', 13, 12.05, 'pcs', 'Renata Limited', 1, '2020-03-13 21:43:04', '2020-03-13 21:43:04'),
(117, 'Erecta 50 mg', 7, 30, 'pcs', 'Renata Limited', 1, '2020-03-13 21:45:00', '2020-03-13 21:45:00'),
(118, 'Erecta 100 mg', 7, 50, 'pcs', 'Renata Limited', 1, '2020-03-13 21:45:58', '2020-03-13 21:45:58'),
(119, 'Erythrox 250 mg', 7, 5.15, 'pcs', 'Renata Limited', 1, '2020-03-13 21:47:32', '2020-03-13 21:47:32'),
(120, 'Erythrox 500 mg', 7, 10.3, 'pcs', 'Renata Limited', 1, '2020-03-13 21:48:21', '2020-03-13 21:48:21'),
(121, 'Erythrox 125 mg/5 ml (100 ml bottle)', 8, 69.5, 'pcs', 'Renata Limited', 1, '2020-03-13 21:49:53', '2020-03-13 21:49:53'),
(122, 'Estracon 0.625 mg', 7, 20.05, 'pcs', 'Renata Limited', 1, '2020-03-13 21:51:07', '2020-03-13 21:51:07'),
(123, 'Evascon 30 mg', 7, 2.02, 'pcs', 'Renata Limited', 1, '2020-03-13 21:53:05', '2020-03-13 21:53:05'),
(124, 'Evascon 60 mg', 7, 3.85, 'pcs', 'Renata Limited', 1, '2020-03-13 21:54:02', '2020-03-13 21:54:02'),
(125, 'Feburen 40 mg', 7, 12.03, 'pcs', 'Renata Limited', 1, '2020-03-13 21:55:24', '2020-03-13 21:55:24'),
(126, 'Feburen 80 mg', 7, 22.06, 'pcs', 'Renata Limited', 1, '2020-03-13 21:56:23', '2020-03-13 21:56:23'),
(127, 'Fenadin 30 mg', 7, 2.52, 'pcs', 'Renata Limited', 1, '2020-03-13 21:58:13', '2020-03-13 21:58:13'),
(128, 'Fenadin 60 mg', 7, 3.52, 'pcs', 'Renata Limited', 1, '2020-03-13 21:59:07', '2020-03-13 21:59:07'),
(129, 'Fenadin 120 mg', 7, 8, 'pcs', 'Renata Limited', 1, '2020-03-13 22:00:04', '2020-03-13 22:00:04'),
(130, 'Fenadin 180 mg', 7, 10.01, 'pcs', 'Renata Limited', 1, '2020-03-13 22:01:15', '2020-03-13 22:01:15'),
(131, 'Fenadin 30 mg/5 ml (30 ml bottle)', 8, 35.1, 'file', 'Renata Limited', 1, '2020-03-13 22:03:35', '2020-03-13 22:03:35'),
(132, 'Fenadin 30 mg/5 ml (50 ml bottle)', 8, 48.31, 'file', 'Renata Limited', 1, '2020-03-13 22:04:45', '2020-03-13 22:04:45'),
(133, 'Fenobate 200 mg', 6, 7.02, 'pcs', 'Renata Limited', 1, '2020-03-14 14:08:47', '2020-03-14 14:08:47'),
(134, 'Fentanyl 100 mcg/2 ml', 13, 40.15, 'pcs', 'Renata Limited', 1, '2020-03-14 14:10:36', '2020-03-14 14:10:36'),
(135, 'Feristar 100 mg/5 ml', 13, 325.83, 'pcs', 'Renata Limited', 1, '2020-03-14 14:12:06', '2020-03-14 14:12:06'),
(136, 'Ferix', 6, 4, 'pcs', 'Renata Limited', 1, '2020-03-14 14:13:26', '2020-03-14 14:13:26'),
(137, 'Flexicam 10 mg', 6, 1.67, 'pcs', 'Renata Limited', 1, '2020-03-14 14:15:07', '2020-03-14 14:15:07'),
(138, 'Flexicam IM 40 mg/2 ml', 13, 14.67, 'pcs', 'Renata Limited', 1, '2020-03-14 14:16:39', '2020-03-14 14:16:39'),
(139, 'Flontin 250 mg', 7, 8.55, 'pcs', 'Renata Limited', 1, '2020-03-14 14:17:57', '2020-03-14 14:17:57'),
(140, 'Flontin 500 mg', 7, 15.04, 'pcs', 'Renata Limited', 1, '2020-03-14 14:19:13', '2020-03-14 14:19:13'),
(141, 'Flontin 750 mg', 7, 18.11, 'pcs', 'Renata Limited', 1, '2020-03-14 14:20:15', '2020-03-14 14:20:15'),
(142, 'Flontin 250 mg/5 ml (60 ml bottle)', 8, 100.25, 'file', 'Renata Limited', 1, '2020-03-14 14:22:51', '2020-03-14 14:22:51'),
(143, 'Flontin 200 mg/100 ml', 30, 145.91, 'file', 'Renata Limited', 1, '2020-03-14 14:24:42', '2020-03-14 14:24:42'),
(144, 'Flontin 0.3%', 12, 25.49, 'file', 'Renata Limited', 1, '2020-03-14 14:25:59', '2020-03-14 14:25:59'),
(145, 'Flustar 125 mg/5 ml (100 ml bottle)', 38, 60.01, 'file', 'Renata Limited', 1, '2020-03-14 14:27:59', '2020-03-14 14:27:59'),
(146, 'Flustar 250 mg', 6, 5.51, 'pcs', 'Renata Limited', 1, '2020-03-14 14:29:24', '2020-03-14 14:29:24'),
(147, 'Flustar 500 mg', 6, 10.03, 'pcs', 'Renata Limited', 1, '2020-03-14 14:30:56', '2020-03-14 14:30:56'),
(148, 'Furocef 125 mg', 7, 15.1, 'pcs', 'Renata Limited', 1, '2020-03-14 14:32:27', '2020-03-14 14:32:27'),
(149, 'Furocef 250 mg', 7, 25.14, 'pcs', 'Renata Limited', 1, '2020-03-14 14:33:46', '2020-03-14 14:33:46'),
(150, 'Furocef 500 mg', 7, 45.25, 'pcs', 'Renata Limited', 1, '2020-03-14 14:35:12', '2020-03-14 14:35:12'),
(151, 'Furocef 125 mg/5 ml', 38, 198.75, 'file', 'Renata Limited', 1, '2020-03-14 14:37:35', '2020-03-14 14:37:35'),
(152, 'Furocef 250 mg IM/IV', 13, 55.35, 'file', 'Renata Limited', 1, '2020-03-14 19:51:04', '2020-03-14 19:51:04'),
(153, 'Furocef 750 mg IM/IV', 13, 125.8, 'file', 'Renata Limited', 1, '2020-03-14 19:52:41', '2020-03-14 19:52:41'),
(154, 'Furocef 1.5 gm IV', 13, 201.27, 'file', 'Renata Limited', 1, '2020-03-14 19:56:04', '2020-03-14 19:56:04'),
(155, 'Furocef 1 gm IM/IV', 13, 160.41, 'file', 'Renata Limited', 1, '2020-03-14 19:58:58', '2020-03-14 19:58:58'),
(156, 'Furoclav 125 mg+31.25 mg', 7, 18, 'pcs', 'Renata Limited', 1, '2020-03-14 20:01:18', '2020-03-14 20:01:18'),
(157, 'Furoclav 250 mg+62.50 mg', 7, 29.95, 'pcs', 'Renata Limited', 1, '2020-03-14 20:03:10', '2020-03-14 20:03:10'),
(158, 'Furoclav 500 mg+125 mg', 7, 50, 'pcs', 'Renata Limited', 1, '2020-03-14 20:04:26', '2020-03-14 20:04:26'),
(159, 'Gaba 300 mg', 7, 16.11, 'pcs', 'Renata Limited', 1, '2020-03-14 20:05:37', '2020-03-14 20:05:37'),
(160, 'Gaba 600 mg', 7, 30.11, 'pcs', 'Renata Limited', 1, '2020-03-14 20:06:41', '2020-03-14 20:06:41'),
(161, 'GABA-P 25 mg', 6, 8, 'pcs', 'Renata Limited', 1, '2020-03-14 20:08:56', '2020-03-14 20:08:56'),
(162, 'GABA-P 50 mg', 6, 12.03, 'pcs', 'Renata Limited', 1, '2020-03-14 20:10:20', '2020-03-14 20:10:20'),
(163, 'GABA-P 75 mg', 6, 16.11, 'pcs', 'Renata Limited', 1, '2020-03-14 20:11:32', '2020-03-14 20:11:32'),
(164, 'Genta 0.3 %', 12, 31.93, 'pcs', 'Renata Limited', 1, '2020-03-14 20:12:56', '2020-03-14 20:12:56'),
(165, 'Gestrenol 5 mg', 7, 8.03, 'pcs', 'Renata Limited', 1, '2020-03-14 20:21:40', '2020-03-14 20:21:40'),
(166, 'Giane 2 mg+35 mcg', 7, 200, 'file', 'Renata Limited', 1, '2020-03-14 20:23:07', '2020-03-14 20:23:07'),
(167, 'Glicron 80 mg', 7, 7.02, 'pcs', 'Renata Limited', 1, '2020-03-14 20:24:24', '2020-03-14 20:24:24'),
(168, 'Glicron CR 30 mg', 7, 6.04, 'pcs', 'Renata Limited', 1, '2020-03-14 20:25:33', '2020-03-14 20:25:33'),
(169, 'Glinta 5 mg', 7, 20, 'pcs', 'Renata Limited', 1, '2020-03-14 20:26:36', '2020-03-14 20:26:36'),
(170, 'Gynova', 7, 10.03, 'pcs', 'Renata Limited', 1, '2020-03-14 20:27:29', '2020-03-14 20:27:29'),
(171, 'Honycol 100 ml bottle', 9, 40.11, 'file', 'Renata Limited', 1, '2020-03-14 20:28:48', '2020-03-14 20:28:48'),
(172, 'Honycol 200 ml bottle', 9, 55.19, 'file', 'Renata Limited', 1, '2020-03-14 20:29:51', '2020-03-14 20:29:51'),
(173, 'Indula 200 mcg', 7, 15.04, 'pcs', 'Renata Limited', 1, '2020-03-14 20:30:51', '2020-03-14 20:30:51'),
(174, 'Ipide SR 1.5 mg', 7, 5, 'pcs', 'Renata Limited', 1, '2020-03-14 20:31:52', '2020-03-14 20:31:52'),
(175, 'Iropen 1 gm IV', 13, 1295, 'file', 'Renata Limited', 1, '2020-03-14 20:34:16', '2020-03-14 20:34:16'),
(176, 'Ivana 150 mg', 7, 994.59, 'file', 'Renata Limited', 1, '2020-03-14 20:35:37', '2020-03-14 20:35:37'),
(177, 'Kain 50 mg/ml', 13, 110, 'pcs', 'Renata Limited', 1, '2020-03-14 20:36:50', '2020-03-14 20:36:50'),
(178, 'Kiddi 100 ml bottle', 9, 80.51, 'pcs', 'Renata Limited', 1, '2020-03-14 20:37:51', '2020-03-14 20:37:51'),
(179, 'Kiddi 200 ml bottle', 9, 140.89, 'pcs', 'Renata Limited', 1, '2020-03-14 20:38:35', '2020-03-14 20:38:35'),
(180, 'Letrol 2.5 mg', 7, 40.25, 'pcs', 'Renata Limited', 1, '2020-03-14 20:39:40', '2020-03-14 20:39:40'),
(181, 'Levoking 100 ml bottle', 21, 80.21, 'file', 'Renata Limited', 1, '2020-03-14 20:40:59', '2020-03-14 20:40:59'),
(182, 'Levoking 250 mg', 7, 8.05, 'pcs', 'Renata Limited', 1, '2020-03-14 20:41:58', '2020-03-14 20:41:58'),
(183, 'Levoking 500 mg', 7, 15.1, 'pcs', 'Renata Limited', 1, '2020-03-14 20:43:06', '2020-03-14 20:43:06'),
(184, 'Levoking 750 mg', 7, 20.12, 'pcs', 'Renata Limited', 1, '2020-03-14 20:44:10', '2020-03-14 20:44:10'),
(185, 'Linez 400 mg', 7, 60, 'pcs', 'Renata Limited', 1, '2020-03-14 20:45:20', '2020-03-14 20:45:20'),
(186, 'Linez 600 mg', 7, 85, 'pcs', 'Renata Limited', 1, '2020-03-14 20:46:26', '2020-03-14 20:46:26'),
(187, 'Linez 60 ml bottle', 38, 175, 'file', 'Renata Limited', 1, '2020-03-14 20:47:52', '2020-03-14 20:47:52'),
(188, 'Linez 100 ml bottle', 38, 280, 'file', 'Renata Limited', 1, '2020-03-14 20:49:28', '2020-03-14 20:49:28'),
(189, 'Linez 150 ml bottle', 38, 420, 'file', 'Renata Limited', 1, '2020-03-14 20:50:21', '2020-03-14 20:50:21'),
(190, 'Lucan-R 200 mg', 6, 25.06, 'pcs', 'Renata Limited', 1, '2020-03-14 20:51:29', '2020-03-14 20:51:29'),
(191, 'Lucan-R 50 mg', 6, 8.05, 'pcs', 'Renata Limited', 1, '2020-03-14 20:52:31', '2020-03-14 20:52:31'),
(192, 'Lucan-R 150 mg', 6, 22.14, 'pcs', 'Renata Limited', 1, '2020-03-14 20:53:28', '2020-03-14 20:53:28'),
(193, 'Lucan-R 35 ml bottle', 8, 78.49, 'file', 'Renata Limited', 1, '2020-03-14 20:55:22', '2020-03-14 20:55:22'),
(194, 'Lucent 0.25 mcg', 41, 10.03, 'pcs', 'Renata Limited', 1, '2020-03-14 21:27:50', '2020-03-14 21:27:50'),
(195, 'Magsum2.5 gm', 13, 18.06, 'pcs', 'Renata Limited', 1, '2020-03-14 21:29:09', '2020-03-14 21:29:09'),
(196, 'Maxolax 5 mg', 7, 5.01, 'pcs', 'Renata Limited', 1, '2020-03-14 21:30:10', '2020-03-14 21:30:10'),
(197, 'Maxolax 10 mg', 7, 8.02, 'pcs', 'Renata Limited', 1, '2020-03-14 21:31:02', '2020-03-14 21:31:02'),
(198, 'Maxpro 20 mg', 7, 5.44, 'pcs', 'Renata Limited', 1, '2020-03-14 21:33:00', '2020-03-14 21:33:00'),
(199, 'Maxpro 40 mg', 7, 8.3, 'pcs', 'Renata Limited', 1, '2020-03-14 21:33:45', '2020-03-14 21:33:45'),
(200, 'Maxpro Capsule 20 mg', 6, 7, 'pcs', 'Renata Limited', 1, '2020-03-14 21:37:21', '2020-03-14 21:37:21'),
(201, 'Maxpro Capsule 40 mg', 6, 10.01, 'pcs', 'Renata Limited', 1, '2020-03-14 21:38:34', '2020-03-14 21:38:34'),
(202, 'Maxpro IV 40 mg', 13, 90.23, 'pcs', 'Renata Limited', 1, '2020-03-14 21:39:56', '2020-03-14 21:39:56'),
(203, 'Maxpro Hp', 42, 54.98, 'leaf', 'Renata Limited', 1, '2020-03-14 21:45:06', '2020-03-14 21:45:06'),
(204, 'Mazic 20 mg', 7, 1.51, 'pcs', 'Renata Limited', 1, '2020-03-14 21:46:13', '2020-03-14 21:46:13'),
(205, 'Mazic 100 ml bottle', 9, 35.1, 'file', 'Renata Limited', 1, '2020-03-14 21:47:40', '2020-03-14 21:47:40'),
(206, 'Mazic DS 100 ml bottle', 9, 55.13, 'pcs', 'Renata Limited', 1, '2020-03-14 21:48:36', '2020-03-14 21:50:48'),
(207, 'Mazic Jr 100 ml bottle', 9, 38.1, 'file', 'Renata Limited', 1, '2020-03-14 21:49:46', '2020-03-14 21:49:46'),
(208, 'Medrogest 5 mg', 7, 5.4, 'pcs', 'Renata Limited', 1, '2020-03-14 21:52:42', '2020-03-14 21:52:42'),
(209, 'Medrogest 10 mg', 7, 10.03, 'pcs', 'Renata Limited', 1, '2020-03-14 21:54:00', '2020-03-14 21:54:00'),
(210, 'Mef-Q 250 mg', 7, 32, 'pcs', 'Renata Limited', 1, '2020-03-14 21:55:27', '2020-03-14 21:55:27'),
(211, 'Menorest 2.5 mg', 32, 563.38, 'file', 'Renata Limited', 1, '2020-03-14 21:56:48', '2020-03-14 21:56:48'),
(212, 'Menveo (Diphtheria Conjugate Vaccine)', 13, 2650, 'file', 'Renata Limited', 1, '2020-03-14 22:00:28', '2020-03-14 22:00:28'),
(213, 'Abaclor 500 mg', 6, 40.27, 'pcs', 'ACI Limited', 1, '2020-03-15 09:22:07', '2020-03-15 09:22:07'),
(214, 'Abaclor 100 ml bottle', 38, 201.35, 'pcs', 'ACI Limited', 1, '2020-03-15 09:27:38', '2020-03-15 09:29:14'),
(215, 'Abaclor 15 ml bottle', 10, 125.85, 'file', 'ACI Limited', 1, '2020-03-15 09:29:02', '2020-03-15 09:29:02'),
(216, 'Abecab 5 mg+40 mg', 7, 18, 'pcs', 'ACI Limited', 1, '2020-03-15 09:31:03', '2020-03-15 09:31:03'),
(217, 'Abecab  5 mg+20 mg', 7, 11, 'pcs', 'ACI Limited', 1, '2020-03-15 09:33:49', '2020-03-15 09:33:49'),
(218, 'Abetis 10 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-15 09:36:35', '2020-03-15 09:36:35'),
(219, 'Abetis 20 mg', 7, 9, 'pcs', 'ACI Limited', 1, '2020-03-15 09:37:13', '2020-03-15 09:37:13'),
(220, 'Abetis 40mg', 7, 18, 'pcs', 'ACI Limited', 1, '2020-03-15 09:37:47', '2020-03-15 09:37:47'),
(221, 'Abetis Plus 20 mg+12.5 mg', 7, 9.5, 'pcs', 'ACI Limited', 1, '2020-03-15 09:38:26', '2020-03-15 09:38:26'),
(222, 'Abetis Plus 40 mg+12.5 mg', 7, 15, 'pcs', 'ACI Limited', 1, '2020-03-15 09:39:07', '2020-03-15 09:39:07'),
(223, 'Abixa 10 mg', 7, 8, 'pcs', 'ACI Limited', 1, '2020-03-15 09:58:27', '2020-03-15 09:58:27'),
(224, 'ACI ORS 10.5 gm/sachet', 11, 4.6, 'pcs', 'ACI Limited', 1, '2020-03-15 09:59:08', '2020-03-15 09:59:08'),
(225, 'ACI ORS Fruity', 11, 5, 'pcs', 'ACI Limited', 1, '2020-03-15 10:01:42', '2020-03-15 10:01:42'),
(226, 'Acicaft 0.25%', 12, 400, 'pcs', 'ACI Limited', 1, '2020-03-15 10:02:48', '2020-03-15 10:02:48'),
(227, 'Acical 250mg', 7, 4.01, 'pcs', 'ACI Limited', 1, '2020-03-15 10:03:20', '2020-03-15 10:08:52'),
(228, 'Acical JR 500mg', 44, 3.01, 'pcs', 'ACI Limited', 1, '2020-03-15 10:06:53', '2020-03-15 10:06:53'),
(229, 'Acical-C  1000 mg+327 mg+500 mg', 36, 11.03, 'pcs', 'ACI Limited', 1, '2020-03-15 10:09:51', '2020-03-15 10:09:51'),
(230, 'Acical-D 500 mg+200 IU', 7, 7, 'pcs', 'ACI Limited', 1, '2020-03-15 10:10:29', '2020-03-15 10:10:29'),
(231, 'Acical-DX 600 mg+400 mg', 36, 15, 'pcs', 'ACI Limited', 1, '2020-03-15 10:11:02', '2020-03-15 10:11:02'),
(232, 'Acical-M', 7, 7, 'pcs', 'ACI Limited', 1, '2020-03-15 10:11:40', '2020-03-15 10:11:40'),
(233, 'Acical-MX', 36, 20, 'pcs', 'ACI Limited', 1, '2020-03-15 10:12:08', '2020-03-15 10:12:08'),
(234, 'Acicot  0.1%', 12, 65, 'pcs', 'ACI Limited', 1, '2020-03-15 10:12:55', '2020-03-15 10:12:55'),
(235, 'Aciflox 200 mg', 7, 12, 'pcs', 'ACI Limited', 1, '2020-03-15 10:14:09', '2020-03-15 10:14:09'),
(236, 'Acilog 100 IU/ml', 45, 450, 'pcs', 'ACI Limited', 1, '2020-03-15 10:16:39', '2020-03-15 10:16:39'),
(237, 'Acilog Biopen 100 IU/ml', 45, 825, 'pcs', 'ACI Limited', 1, '2020-03-15 10:17:05', '2020-03-15 10:17:05'),
(238, 'Acilog Mix 30%+70%', 45, 450, 'pcs', 'ACI Limited', 1, '2020-03-15 10:17:46', '2020-03-15 10:17:46'),
(239, 'Acilog Mix Biopen 30%+70%', 45, 825, 'pcs', 'ACI Limited', 1, '2020-03-15 10:18:39', '2020-03-15 10:18:39'),
(240, 'Aciphin 250 mg/vial', 46, 100.3, 'pcs', 'ACI Limited', 1, '2020-03-15 10:19:53', '2020-03-15 10:19:53'),
(241, 'Aciphin 500 mg/vial', 46, 130.39, 'pcs', 'ACI Limited', 1, '2020-03-15 10:20:32', '2020-03-15 10:20:32'),
(242, 'Aciphin 1 gm/vial', 46, 191.29, 'file', 'ACI Limited', 1, '2020-03-15 10:21:48', '2020-03-15 10:21:48'),
(243, 'Aciphin  250 mg/vial', 47, 100.3, 'pcs', 'ACI Limited', 1, '2020-03-15 10:24:30', '2020-03-15 10:24:30'),
(244, 'Aciphin  500 mg/vial', 47, 130.39, 'pcs', 'ACI Limited', 1, '2020-03-15 10:25:25', '2020-03-15 10:25:25'),
(245, 'Aciphin  1 gm/vial', 47, 191.29, 'pcs', 'ACI Limited', 1, '2020-03-15 10:25:52', '2020-03-15 10:25:52'),
(246, 'Aciphin  2 gm/vial', 47, 302.04, 'pcs', 'ACI Limited', 1, '2020-03-15 10:26:22', '2020-03-15 10:26:22'),
(247, 'Acitrin  10 mg', 7, 3.01, 'pcs', 'ACI Limited', 1, '2020-03-15 10:27:02', '2020-03-15 10:27:02'),
(248, 'Acitrin 5 mg/5 ml', 9, 30.09, 'file', 'ACI Limited', 1, '2020-03-15 10:29:05', '2020-03-15 10:29:05'),
(249, 'Acitrin 2.5 mg/ml', 10, 25.08, 'file', 'ACI Limited', 1, '2020-03-15 10:29:43', '2020-03-15 10:29:43'),
(250, 'Acitrin-L 5 mg', 7, 3.01, 'pcs', 'ACI Limited', 1, '2020-03-15 10:30:15', '2020-03-15 10:30:15'),
(251, 'Acitrin-L 2.5 mg/5 ml', 9, 55, 'pcs', 'ACI Limited', 1, '2020-03-15 10:30:44', '2020-03-15 10:30:44'),
(252, 'Acora 90 mg', 7, 75, 'pcs', 'ACI Limited', 1, '2020-03-15 10:31:20', '2020-03-15 10:31:20'),
(253, 'Adair 500 mcg', 7, 15, 'pcs', 'ACI Limited', 1, '2020-03-15 10:38:11', '2020-03-15 10:38:11'),
(254, 'Adegra', 7, 20.06, 'pcs', 'ACI Limited', 1, '2020-03-15 10:38:41', '2020-03-15 10:38:41'),
(255, 'Adegra  50 mg', 7, 30.09, 'pcs', 'ACI Limited', 1, '2020-03-15 10:39:09', '2020-03-15 10:39:09'),
(256, 'Adegra 100mg', 7, 50.15, 'pcs', 'ACI Limited', 1, '2020-03-15 10:39:45', '2020-03-15 10:40:07'),
(257, 'Adelax  0.5 mg+10 mg', 7, 5.02, 'pcs', 'ACI Limited', 1, '2020-03-15 10:40:48', '2020-03-15 10:40:48'),
(258, 'Adgar  0.1%', 14, 60.18, 'pcs', 'ACI Limited', 1, '2020-03-15 10:41:46', '2020-03-15 10:41:46'),
(259, 'Alaclov 500 mg', 7, 40.27, 'pcs', 'ACI Limited', 1, '2020-03-15 10:42:17', '2020-03-15 10:42:17'),
(260, 'Alaron 10 mg', 7, 2.5, 'pcs', 'ACI Limited', 1, '2020-03-15 10:42:50', '2020-03-15 10:42:50'),
(261, 'Amantril  100 mg', 6, 10, 'pcs', 'ACI Limited', 1, '2020-03-15 10:43:26', '2020-03-15 10:43:26'),
(262, 'Amlex  5%', 15, 75.23, 'pcs', 'ACI Limited', 1, '2020-03-15 10:44:05', '2020-03-15 10:44:05'),
(263, 'Amotrex  500 mg/100 ml', 47, 85.26, 'file', 'ACI Limited', 1, '2020-03-15 10:44:53', '2020-03-15 10:44:53'),
(264, 'Amotrex 200 mg', 7, 0.69, 'pcs', 'ACI Limited', 1, '2020-03-15 10:45:22', '2020-03-15 10:45:22'),
(265, 'Amotrex  400mg', 7, 1.27, 'pcs', 'ACI Limited', 1, '2020-03-15 10:45:50', '2020-03-15 10:45:50'),
(266, 'Amotrex 200 mg/5 ml', 9, 29.3, 'pcs', 'ACI Limited', 1, '2020-03-15 10:46:25', '2020-03-15 10:46:25'),
(267, 'Anaflex  250mg', 7, 5.04, 'pcs', 'ACI Limited', 1, '2020-03-15 10:46:58', '2020-03-15 10:46:58'),
(268, 'Anaflex 500 mg', 7, 9.06, 'pcs', 'ACI Limited', 1, '2020-03-15 10:47:41', '2020-03-15 10:47:41'),
(269, 'Anaflex 10% w/w 15gm', 14, 62.42, 'pcs', 'ACI Limited', 1, '2020-03-15 10:48:39', '2020-03-15 10:49:29'),
(270, 'Anaflex 10% w/w 30 gm', 14, 116.35, 'file', 'ACI Limited', 1, '2020-03-15 10:49:19', '2020-03-15 10:49:19'),
(271, 'Anaflex Max 375 mg+20 mg', 7, 8.02, 'pcs', 'ACI Limited', 1, '2020-03-15 10:50:20', '2020-03-15 10:50:20'),
(272, 'Anaflex Max  500 mg+20 mg', 7, 10.03, 'pcs', 'ACI Limited', 1, '2020-03-15 10:51:00', '2020-03-15 10:51:00'),
(273, 'Anaflex SR  500 mg', 7, 14.09, 'pcs', 'ACI Limited', 1, '2020-03-15 10:51:29', '2020-03-15 10:51:29'),
(274, 'Aptin M 50 mg+850 mg', 7, 23, 'pcs', 'ACI Limited', 1, '2020-03-15 22:28:42', '2020-03-15 22:28:42'),
(275, 'Arbitel  20 mg', 7, 7, 'pcs', 'ACI Limited', 1, '2020-03-15 22:29:13', '2020-03-15 22:29:13'),
(276, 'Arbitel  40 mg', 7, 12.5, 'pcs', 'ACI Limited', 1, '2020-03-15 22:29:37', '2020-03-15 22:29:37'),
(277, 'Arbitel  80 mg', 47, 20, 'pcs', 'ACI Limited', 1, '2020-03-15 22:30:00', '2020-03-15 22:30:00'),
(278, 'Arbitel AM 5 mg+80 mg', 7, 18, 'pcs', 'ACI Limited', 1, '2020-03-15 22:30:27', '2020-03-15 22:30:27'),
(279, 'Arbitel AM 5 mg+40 mg', 7, 12.5, 'pcs', 'ACI Limited', 1, '2020-03-15 22:31:14', '2020-03-15 22:31:14'),
(280, 'Arbitel Plus 40 mg+12.5 mg', 7, 12.5, 'pcs', 'ACI Limited', 1, '2020-03-15 22:31:37', '2020-03-15 22:31:37'),
(281, 'Arbitel Plus 80 mg+12.5 mg', 7, 20, 'pcs', 'ACI Limited', 1, '2020-03-15 22:32:02', '2020-03-15 22:32:02'),
(282, 'Armoda 150 mg', 7, 15, 'pcs', 'ACI Limited', 1, '2020-03-15 22:32:32', '2020-03-15 22:32:32'),
(283, 'Armoda  250 mg', 7, 25, 'pcs', 'ACI Limited', 1, '2020-03-15 22:33:02', '2020-03-15 22:33:02'),
(284, 'Aronem 500 mg/vial', 48, 654.41, 'file', 'ACI Limited', 1, '2020-03-15 22:35:12', '2020-03-15 22:35:12'),
(285, 'Aronem 1 gm/vial', 48, 1208.14, 'file', 'ACI Limited', 1, '2020-03-15 22:35:55', '2020-03-15 22:35:55'),
(286, 'Artica 10 mg', 7, 1.25, 'pcs', 'ACI Limited', 1, '2020-03-15 22:36:25', '2020-03-15 22:36:25'),
(287, 'Artica 25 mg', 7, 2.01, 'pcs', 'ACI Limited', 1, '2020-03-15 22:36:46', '2020-03-15 22:36:46'),
(288, 'Artica 10 mg/5 ml', 9, 40.27, 'file', 'ACI Limited', 1, '2020-03-15 22:37:22', '2020-03-15 22:37:22'),
(289, 'Artigo 20 mg+40 mg', 7, 2.01, 'pcs', 'ACI Limited', 1, '2020-03-15 22:39:11', '2020-03-15 22:39:11'),
(290, 'Atasin 10 mg', 7, 10.07, 'pcs', 'ACI Limited', 1, '2020-03-15 22:39:50', '2020-03-15 22:39:50'),
(291, 'Atasin 20 mg', 7, 18.12, 'pcs', 'ACI Limited', 1, '2020-03-15 22:40:12', '2020-03-15 22:40:12'),
(292, 'Atasin 40 mg', 7, 24.16, 'pcs', 'ACI Limited', 1, '2020-03-15 22:40:37', '2020-03-15 22:40:37'),
(293, 'Atier 0.3%', 12, 70, 'file', 'ACI Limited', 1, '2020-03-15 22:41:04', '2020-03-15 22:41:04'),
(294, 'Avintol 5 mg', 7, 3, 'pcs', 'ACI Limited', 1, '2020-03-15 22:41:50', '2020-03-15 22:41:50'),
(295, 'Avlocid MS (480 mg+20 mg)/5 ml', 8, 100.3, 'file', 'ACI Limited', 1, '2020-03-15 22:42:20', '2020-03-15 22:42:20'),
(296, 'Avlocid Plus 400 mg+400 mg+30 mg', 7, 2.01, 'pcs', 'ACI Limited', 1, '2020-03-15 22:42:52', '2020-03-15 22:42:52'),
(297, 'Avlocid Plus (400 mg+400 mg+30 mg)/5 ml', 8, 75.23, 'file', 'ACI Limited', 1, '2020-03-15 22:43:34', '2020-03-15 22:43:34'),
(298, 'Avloclav (500 mg+100 mg)/10 ml', 47, 150, 'file', 'ACI Limited', 1, '2020-03-15 22:43:57', '2020-03-15 22:43:57'),
(299, 'Avloclav (1 gm+200 mg)/20 ml', 47, 300, 'file', 'ACI Limited', 1, '2020-03-15 22:44:21', '2020-03-15 22:44:21'),
(300, 'Avloclav 250 mg+125 mg', 7, 25, 'pcs', 'ACI Limited', 1, '2020-03-15 22:45:58', '2020-03-15 22:45:58'),
(301, 'Avloclav 500 mg+125 mg', 7, 32, 'pcs', 'ACI Limited', 1, '2020-03-15 22:46:20', '2020-03-15 22:46:20'),
(302, 'Avloclav 875 mg+125 mg', 7, 45, 'pcs', 'ACI Limited', 1, '2020-03-15 22:46:45', '2020-03-15 22:46:45'),
(303, 'Avloclav (125 mg+31.25 mg)/5 ml', 38, 220, 'file', 'ACI Limited', 1, '2020-03-15 22:47:14', '2020-03-15 22:47:14'),
(304, 'Avloclav BID (400 mg+57.50 mg)/5 ml', 38, 195, 'file', 'ACI Limited', 1, '2020-03-15 22:47:36', '2020-03-15 22:47:36'),
(305, 'Avlomox 125 mg/1.25 ml', 10, 30.29, 'file', 'ACI Limited', 1, '2020-03-15 22:48:24', '2020-03-15 22:48:24'),
(306, 'Avlomox 500 mg', 6, 6.12, 'pcs', 'ACI Limited', 1, '2020-03-15 22:48:54', '2020-03-15 22:48:54'),
(307, 'Avlomox 250 mg', 6, 3.45, 'pcs', 'ACI Limited', 1, '2020-03-15 22:49:41', '2020-03-15 22:49:41'),
(308, 'Avlomox 500 mg/vial', 49, 32.1, 'file', 'ACI Limited', 1, '2020-03-15 22:52:03', '2020-03-15 22:52:03'),
(309, 'Avlomox 125 mg/5 ml', 38, 46.32, 'file', 'ACI Limited', 1, '2020-03-15 22:52:29', '2020-03-15 22:52:29'),
(310, 'Avlomox DS 250 mg/5 ml', 38, 65.45, 'file', 'ACI Limited', 1, '2020-03-15 22:53:02', '2020-03-15 22:53:02'),
(311, 'Avloquin 250 mg', 7, 1.22, 'pcs', 'ACI Limited', 1, '2020-03-15 22:53:31', '2020-03-15 22:53:31'),
(312, 'Avloquin 125 mg/5 ml', 9, 14.91, 'pcs', 'ACI Limited', 1, '2020-03-15 22:53:54', '2020-03-15 22:53:54'),
(313, 'Avlosef 250 mg', 6, 8.02, 'pcs', 'ACI Limited', 1, '2020-03-15 22:54:16', '2020-03-15 22:54:16'),
(314, 'Avlosef 500 mg', 49, 15.05, 'pcs', 'ACI Limited', 1, '2020-03-15 22:54:34', '2020-03-15 22:54:34'),
(315, 'Avlosef', 10, 65.2, 'file', 'ACI Limited', 1, '2020-03-15 22:55:22', '2020-03-15 22:55:22'),
(316, 'Avlosef 500 mg/vial', 49, 65.2, 'file', 'ACI Limited', 1, '2020-03-15 22:55:56', '2020-03-15 22:55:56'),
(317, 'Avlosef 1 gm/vial', 49, 95.29, 'pcs', 'ACI Limited', 1, '2020-03-15 22:56:15', '2020-03-15 22:56:15'),
(318, 'Avlosef 125 mg/5 ml', 38, 90.27, 'file', 'ACI Limited', 1, '2020-03-15 22:57:10', '2020-03-15 22:57:10'),
(319, 'Avlosef DS 250 mg/5 ml', 38, 135.41, 'file', 'ACI Limited', 1, '2020-03-15 22:57:48', '2020-03-15 22:57:48'),
(320, 'Avlotrin (200 mg+40 mg)/5 ml', 8, 22.21, 'file', 'ACI Limited', 1, '2020-03-15 22:58:29', '2020-03-15 22:58:29'),
(321, 'Avlotrin DS 800 mg+160 mg', 7, 2.01, 'pcs', 'ACI Limited', 1, '2020-03-15 22:58:53', '2020-03-15 22:58:53'),
(322, 'Bepost 1.5%', 12, 300, 'file', 'ACI Limited', 1, '2020-03-15 23:04:57', '2020-03-15 23:04:57'),
(323, 'Bilicir 150 mg', 7, 11, 'pcs', 'ACI Limited', 1, '2020-03-15 23:05:34', '2020-03-15 23:05:34'),
(324, 'Bilicir 300 mg', 7, 20, 'pcs', 'ACI Limited', 1, '2020-03-15 23:05:52', '2020-03-15 23:05:52'),
(325, 'Bipinor 2.5 mg', 7, 5.04, 'pcs', 'ACI Limited', 1, '2020-03-15 23:06:11', '2020-03-15 23:06:11'),
(326, 'Bipinor 5 mg', 7, 8.05, 'pcs', 'ACI Limited', 1, '2020-03-15 23:06:30', '2020-03-15 23:06:30'),
(327, 'Blocid (500 mg+100 mg)/5 ml', 8, 125, 'file', 'ACI Limited', 1, '2020-03-15 23:06:54', '2020-03-15 23:06:54'),
(328, 'Brodil HFA', 19, 240, 'file', 'ACI Limited', 1, '2020-03-15 23:07:24', '2020-03-15 23:07:24'),
(329, 'Brodil Levo 1 mg', 7, 1.1, 'pcs', 'ACI Limited', 1, '2020-03-15 23:07:44', '2020-03-15 23:07:44'),
(330, 'Brodil Levo 2 mg', 7, 1.91, 'pcs', 'ACI Limited', 1, '2020-03-15 23:08:14', '2020-03-15 23:08:14'),
(331, 'Brodil Levo 1 mg/5 ml (50ml)', 9, 30.09, 'pcs', 'ACI Limited', 1, '2020-03-15 23:08:52', '2020-03-15 23:09:43'),
(332, 'Brodil Levo 1 mg/5 ml (100ml)', 9, 45.14, 'file', 'ACI Limited', 1, '2020-03-15 23:09:30', '2020-03-15 23:09:30'),
(333, 'Brodil Levo HFA 50 mcg/puff', 19, 250, 'file', 'ACI Limited', 1, '2020-03-15 23:10:18', '2020-03-15 23:10:18'),
(334, 'Brodil  2 mg', 7, 0.26, 'pcs', 'ACI Limited', 1, '2020-03-15 23:13:39', '2020-03-15 23:13:39'),
(335, 'Brodil 4 mg', 7, 0.46, 'pcs', 'ACI Limited', 1, '2020-03-15 23:14:04', '2020-03-15 23:14:04'),
(336, 'Brodil 2 mg/5 ml (100ml)', 9, 23, 'pcs', 'ACI Limited', 1, '2020-03-15 23:14:42', '2020-03-15 23:14:53'),
(337, 'Brodil 2 mg/5 ml (60ml)', 9, 14.53, 'file', 'ACI Limited', 1, '2020-03-15 23:15:33', '2020-03-15 23:15:33'),
(338, 'Brodil 5 mg/ml (20ml)', 50, 120.36, 'file', 'ACI Limited', 1, '2020-03-15 23:16:23', '2020-03-15 23:16:46'),
(339, 'Brodil (DPI) 200 mcg/acucap', 51, 2.51, 'pcs', 'ACI Limited', 1, '2020-03-15 23:17:57', '2020-03-15 23:17:57'),
(340, 'Brodil HFA 100 mcg/puff', 19, 198, 'file', 'ACI Limited', 1, '2020-03-15 23:18:40', '2020-03-15 23:18:40'),
(341, 'Cab', 7, 5.02, 'pcs', 'ACI Limited', 1, '2020-03-15 23:22:03', '2020-03-15 23:22:03'),
(342, 'Caber 0.5 mg', 7, 80, 'pcs', 'ACI Limited', 1, '2020-03-15 23:22:26', '2020-03-15 23:22:26'),
(343, 'Canazole 50 mg', 7, 8.05, 'pcs', 'ACI Limited', 1, '2020-03-15 23:22:58', '2020-03-15 23:22:58'),
(344, 'Canazole 150 mg', 7, 22.15, 'pcs', 'ACI Limited', 1, '2020-03-15 23:23:22', '2020-03-15 23:23:22'),
(345, 'Canazole 200 mg', 7, 25.08, 'pcs', 'ACI Limited', 1, '2020-03-15 23:23:52', '2020-03-15 23:23:52'),
(346, 'Canazole 50 mg/5 ml', 8, 78.53, 'file', 'ACI Limited', 1, '2020-03-15 23:24:51', '2020-03-15 23:24:51'),
(347, 'Cardopa 200 mg/5 ml', 47, 45.31, 'file', 'ACI Limited', 1, '2020-03-15 23:25:20', '2020-03-15 23:25:20'),
(348, 'Cartilex 250 mg+200 mg', 7, 8.05, 'pcs', 'ACI Limited', 1, '2020-03-15 23:25:41', '2020-03-15 23:25:41'),
(349, 'Cartilex D 750 mg+50 mg', 7, 12, 'pcs', 'ACI Limited', 1, '2020-03-15 23:26:11', '2020-03-15 23:26:11'),
(350, 'Cartilex Plus 750 mg+600 mg', 7, 16, 'pcs', 'ACI Limited', 1, '2020-03-15 23:26:47', '2020-03-15 23:26:47'),
(351, 'Cefdox 40 mg/5 ml (50ml)', 38, 98.67, 'file', 'ACI Limited', 1, '2020-03-15 23:27:44', '2020-03-15 23:27:44'),
(352, 'Cefdox 200 mg', 7, 37, 'pcs', 'ACI Limited', 1, '2020-03-15 23:28:24', '2020-03-15 23:28:24'),
(353, 'Cefim-3 25 mg/ml (21ml)', 10, 100, 'file', 'ACI Limited', 1, '2020-03-15 23:29:04', '2020-03-15 23:29:17'),
(354, 'Cefim-3 200 mg', 6, 35.11, 'pcs', 'ACI Limited', 1, '2020-03-15 23:29:50', '2020-03-15 23:30:10'),
(355, 'Cefim-3  100 mg/5 ml (30ml)', 38, 130.39, 'pcs', 'ACI Limited', 1, '2020-03-15 23:31:45', '2020-03-15 23:33:01'),
(356, 'Cefim-3  100 mg/5 ml (50ml)', 38, 210.63, 'file', 'ACI Limited', 1, '2020-03-15 23:32:14', '2020-03-15 23:32:14'),
(357, 'Cefim-3  100 mg/5 ml (75ml)', 38, 241.62, 'file', 'ACI Limited', 1, '2020-03-15 23:32:45', '2020-03-15 23:32:45'),
(358, 'Cefim-3  200 mg', 7, 30.09, 'pcs', 'ACI Limited', 1, '2020-03-15 23:33:54', '2020-03-15 23:33:54'),
(359, 'Cefim-3 DS 400 mg', 6, 50.34, 'pcs', 'ACI Limited', 1, '2020-03-15 23:34:35', '2020-03-15 23:34:35'),
(360, 'Cefim-3 DS 200 mg/5 ml (50ml)', 38, 300.9, 'file', 'ACI Limited', 1, '2020-03-15 23:35:23', '2020-03-15 23:35:23'),
(361, 'Cefim-3 DS  400 mg', 7, 50.15, 'pcs', 'ACI Limited', 1, '2020-03-15 23:35:55', '2020-03-15 23:35:55'),
(362, 'Cefot 250 mg/vial', 49, 50.15, 'file', 'ACI Limited', 1, '2020-03-15 23:36:43', '2020-03-15 23:36:43'),
(363, 'Cefot 500 mg/vial', 49, 76.23, 'file', 'ACI Limited', 1, '2020-03-15 23:37:28', '2020-03-15 23:37:28'),
(364, 'Cefot 1 gm/vial (1gm)', 49, 132.4, 'file', 'ACI Limited', 1, '2020-03-15 23:38:03', '2020-03-15 23:38:03'),
(365, 'Cefteria 400 mg', 6, 120, 'pcs', 'ACI Limited', 1, '2020-03-15 23:38:32', '2020-03-15 23:38:32'),
(366, 'Cefteria 90 mg/5 ml', 38, 481, 'pcs', 'ACI Limited', 1, '2020-03-15 23:39:05', '2020-03-15 23:39:05'),
(367, 'Ceftoren 200 mg', 7, 150, 'pcs', 'ACI Limited', 1, '2020-03-15 23:39:31', '2020-03-15 23:39:31'),
(368, 'Ceftoren 400 mg', 7, 250, 'pcs', 'ACI Limited', 1, '2020-03-15 23:40:11', '2020-03-15 23:40:11'),
(369, 'Celofen 100 mg', 7, 4.01, 'pcs', 'ACI Limited', 1, '2020-03-15 23:40:47', '2020-03-15 23:40:47'),
(370, 'Ceptiva 30 mcg+150 mcg', 7, 5, 'pcs', 'ACI Limited', 1, '2020-03-15 23:41:16', '2020-03-15 23:41:16'),
(371, 'Cerox CV (125 mg+31.25 mg)/5 ml (70ml)', 38, 250.75, 'file', 'ACI Limited', 1, '2020-03-15 23:41:48', '2020-03-15 23:41:48'),
(372, 'Cerox CV 125 mg+31.25 mg', 7, 21.06, 'pcs', 'ACI Limited', 1, '2020-03-15 23:42:13', '2020-03-15 23:42:13'),
(373, 'Cerox CV 250 mg+62.50 mg', 7, 32, 'pcs', 'ACI Limited', 1, '2020-03-15 23:45:44', '2020-03-15 23:45:44'),
(374, 'Cerox CV 500 mg+125 mg', 7, 55, 'pcs', 'ACI Limited', 1, '2020-03-15 23:47:31', '2020-03-15 23:47:31'),
(375, 'Cerox-A 250 mg', 7, 25.17, 'pcs', 'ACI Limited', 1, '2020-03-15 23:47:56', '2020-03-15 23:47:56'),
(376, 'Cerox-A 500 mg', 7, 45.31, 'pcs', 'ACI Limited', 1, '2020-03-15 23:48:22', '2020-03-15 23:48:22'),
(377, 'Cerox-A 125 mg/5 ml (70ml)', 38, 199.35, 'file', 'ACI Limited', 1, '2020-03-15 23:49:03', '2020-03-15 23:49:03'),
(378, 'Cerox-A 250 mg/vial (250mg)', 49, 55.38, 'pcs', 'ACI Limited', 1, '2020-03-15 23:50:03', '2020-03-15 23:50:03'),
(379, 'Cerox-A 750 mg/vial', 49, 126.12, 'pcs', 'ACI Limited', 1, '2020-03-15 23:50:31', '2020-03-15 23:50:31'),
(380, 'Cerox-A 1.5 gm/vial', 47, 201.35, 'file', 'ACI Limited', 1, '2020-03-15 23:51:25', '2020-03-15 23:51:25'),
(381, 'Chear 25 mg', 7, 3.02, 'pcs', 'ACI Limited', 1, '2020-03-15 23:51:47', '2020-03-15 23:51:47'),
(382, 'Chear  50 mg', 7, 6.04, 'pcs', 'ACI Limited', 1, '2020-03-15 23:52:11', '2020-03-15 23:52:11'),
(383, 'Chear  100 mg', 7, 10.07, 'pcs', 'ACI Limited', 1, '2020-03-15 23:52:43', '2020-03-15 23:52:43'),
(384, 'Chrocee  200 mg', 6, 35, 'pcs', 'ACI Limited', 1, '2020-03-15 23:53:06', '2020-03-15 23:53:06'),
(385, 'Ciaton  5 mg', 7, 18.05, 'pcs', 'ACI Limited', 1, '2020-03-15 23:53:26', '2020-03-15 23:53:26'),
(386, 'Ciaton  10 mg', 7, 35.11, 'pcs', 'ACI Limited', 1, '2020-03-15 23:53:51', '2020-03-15 23:53:51'),
(387, 'Ciaton  20 mg', 7, 60.18, 'pcs', 'ACI Limited', 1, '2020-03-15 23:54:16', '2020-03-15 23:54:16'),
(388, 'Cilocab  10 mg', 7, 9, 'pcs', 'ACI Limited', 1, '2020-03-15 23:54:46', '2020-03-15 23:54:46'),
(389, 'Cilocab  5 mg', 7, 7, 'pcs', 'ACI Limited', 1, '2020-03-15 23:55:08', '2020-03-15 23:55:08'),
(390, 'Cinemet CR 200 mg+50 mg', 7, 12.5, 'pcs', 'ACI Limited', 1, '2020-03-15 23:55:33', '2020-03-15 23:55:33'),
(391, 'Citalam  5 mg', 7, 7, 'pcs', 'ACI Limited', 1, '2020-03-15 23:55:57', '2020-03-15 23:55:57'),
(392, 'Citalam 10 mg', 7, 12, 'pcs', 'ACI Limited', 1, '2020-03-15 23:56:25', '2020-03-15 23:56:25'),
(393, 'Citazar 250 mg', 7, 15.11, 'pcs', 'ACI Limited', 1, '2020-03-15 23:56:54', '2020-03-15 23:56:54'),
(394, 'Citazar 500 mg', 7, 25.17, 'pcs', 'ACI Limited', 1, '2020-03-15 23:57:16', '2020-03-15 23:57:16'),
(395, 'Clean gel 66% + 3.5% (10 ml)', 22, 75, 'file', 'ACI Limited', 1, '2020-03-15 23:58:06', '2020-03-15 23:58:06'),
(396, 'Clean gel 66% + 3.5% (50ml)', 22, 100, 'file', 'ACI Limited', 1, '2020-03-15 23:58:52', '2020-03-15 23:58:52'),
(397, 'Clonium  0.5 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-15 23:59:16', '2020-03-15 23:59:16'),
(398, 'Clonium 1 mg', 7, 8, 'pcs', 'ACI Limited', 1, '2020-03-15 23:59:37', '2020-03-15 23:59:37'),
(399, 'Clonium  2 mg', 7, 10, 'pcs', 'ACI Limited', 1, '2020-03-16 00:00:10', '2020-03-16 00:00:10'),
(400, 'Clorel  75 mg', 7, 12.04, 'pcs', 'ACI Limited', 1, '2020-03-16 00:00:31', '2020-03-16 00:00:31'),
(401, 'Clorel-A 75 mg+75 mg', 7, 12.04, 'pcs', 'ACI Limited', 1, '2020-03-16 00:00:54', '2020-03-16 00:00:54'),
(402, 'Clovate  0.05% (10gm)', 23, 58.17, 'pcs', 'ACI Limited', 1, '2020-03-16 00:01:50', '2020-03-16 00:02:52'),
(403, 'Clovate  0.05%  (10gm)', 24, 68.2, 'file', 'ACI Limited', 1, '2020-03-16 00:02:38', '2020-03-16 00:02:38'),
(404, 'Clovate  0.05%', 25, 200.6, 'file', 'ACI Limited', 1, '2020-03-16 00:12:17', '2020-03-16 00:12:17'),
(405, 'Clovate-N 0.05% + 0.5% + 2%', 23, 65.2, 'file', 'ACI Limited', 1, '2020-03-16 00:12:48', '2020-03-16 00:12:48'),
(406, 'Clovate-N 0.05% + 0.5% + 2% (15gm)', 24, 70.21, 'file', 'ACI Limited', 1, '2020-03-16 00:13:36', '2020-03-16 00:13:36'),
(407, 'Combair HFA 100 mcg+20 mcg', 19, 250.75, 'file', 'ACI Limited', 1, '2020-03-16 00:14:14', '2020-03-16 00:14:14'),
(408, 'Combair HFA 100 mcg+20 mcg (200 metered doses)', 19, 230.69, 'pcs', 'ACI Limited', 1, '2020-03-16 00:15:17', '2020-03-16 00:15:17'),
(409, 'Combocef 200 mg+125 mg', 7, 50.15, 'pcs', 'ACI Limited', 1, '2020-03-16 00:23:06', '2020-03-16 00:23:06'),
(410, 'Combocef 100 mg+62.5 mg', 7, 30.09, 'pcs', 'ACI Limited', 1, '2020-03-16 00:23:34', '2020-03-16 00:23:34'),
(411, 'Conart 1 mg', 7, 5.02, 'pcs', 'ACI Limited', 1, '2020-03-16 00:23:54', '2020-03-16 00:23:54'),
(412, 'Contova  0.1%', 12, 107, 'file', 'ACI Limited', 1, '2020-03-16 00:24:27', '2020-03-16 00:24:27'),
(413, 'Contova DS 0.2%', 12, 150, 'file', 'ACI Limited', 1, '2020-03-16 00:24:50', '2020-03-16 00:25:58'),
(414, 'Cora-D 500 mg+200 IU', 7, 10.5, 'pcs', 'ACI Limited', 1, '2020-03-16 00:26:39', '2020-03-16 00:26:39'),
(415, 'Cora-DX 600 mg+400 IU', 7, 15, 'pcs', 'ACI Limited', 1, '2020-03-16 00:27:04', '2020-03-16 00:27:04'),
(416, 'Cora-DX Vita 1050 mg+600 mg+400 IU ACI Limited', 36, 17, 'pcs', 'ACI Limited', 1, '2020-03-16 00:27:57', '2020-03-16 00:27:57'),
(417, 'Cortefin 0.1% 10 gm', 24, 25.08, 'pcs', 'ACI Limited', 1, '2020-03-16 00:28:30', '2020-03-16 00:28:30'),
(418, 'Cortefin  0.1% 10 gm', 23, 25.12, 'file', 'ACI Limited', 1, '2020-03-16 00:29:13', '2020-03-16 00:29:13'),
(419, 'Cortefin 55 mcg/spray', 17, 200, 'file', 'ACI Limited', 1, '2020-03-16 00:30:57', '2020-03-16 00:30:57'),
(420, 'Corzil  40 mg', 7, 12, 'pcs', 'ACI Limited', 1, '2020-03-16 00:31:20', '2020-03-16 00:31:20'),
(421, 'Corzil   80 mg', 7, 22, 'pcs', 'ACI Limited', 1, '2020-03-16 00:31:57', '2020-03-16 00:31:57'),
(422, 'Coufix 200 mg+15 mg+15 mg', 9, 85, 'file', 'ACI Limited', 1, '2020-03-16 00:32:24', '2020-03-16 00:32:24'),
(423, 'Coxia  60 mg', 7, 7.05, 'pcs', 'ACI Limited', 1, '2020-03-16 00:32:51', '2020-03-16 00:32:51'),
(424, 'Coxia  90 mg', 7, 12.09, 'pcs', 'ACI Limited', 1, '2020-03-16 00:33:19', '2020-03-16 00:33:19'),
(425, 'Coxia  120 mg', 7, 14.09, 'pcs', 'ACI Limited', 1, '2020-03-16 00:33:39', '2020-03-16 00:33:39'),
(426, 'D3 200 IU/ml', 21, 75, 'file', 'ACI Limited', 1, '2020-03-16 11:36:40', '2020-03-16 11:36:40'),
(427, 'D3 200000 IU/ml', 46, 120, 'file', 'ACI Limited', 1, '2020-03-16 11:37:11', '2020-03-16 11:37:11'),
(428, 'D3 2000 IU', 7, 2.5, 'pcs', 'ACI Limited', 1, '2020-03-16 11:37:34', '2020-03-16 11:37:34'),
(429, 'D3 20000 IU', 41, 20, 'pcs', 'ACI Limited', 1, '2020-03-16 11:38:12', '2020-03-16 11:38:12'),
(430, 'D3  40000 IU', 41, 35, 'pcs', 'ACI Limited', 1, '2020-03-16 11:38:34', '2020-03-16 11:38:34'),
(431, 'Daclin 150 mg', 6, 8.02, 'pcs', 'ACI Limited', 1, '2020-03-16 11:38:56', '2020-03-16 11:38:56'),
(432, 'Daclin 300 mg', 6, 15.05, 'pcs', 'ACI Limited', 1, '2020-03-16 11:39:19', '2020-03-16 11:39:19'),
(433, 'Daclin 1%', 25, 125.38, 'file', 'ACI Limited', 1, '2020-03-16 11:40:12', '2020-03-16 11:40:12'),
(434, 'Daxetin 30 mg', 7, 30, 'pcs', 'ACI Limited', 1, '2020-03-16 11:40:34', '2020-03-16 11:40:34'),
(435, 'Daxetin 60 mg', 7, 50, 'pcs', 'ACI Limited', 1, '2020-03-16 11:40:51', '2020-03-16 11:40:51'),
(436, 'Defzort 6 mg', 51, 8, 'pcs', 'ACI Limited', 1, '2020-03-16 11:41:13', '2020-03-16 11:41:13'),
(437, 'Defzort 24 mg', 7, 30, 'pcs', 'ACI Limited', 1, '2020-03-16 11:41:31', '2020-03-16 11:41:31'),
(438, 'Denicol 0.1%+0.5%', 12, 70, 'file', 'ACI Limited', 1, '2020-03-16 11:42:44', '2020-03-16 11:42:44'),
(439, 'Dermasim 1%', 16, 68.2, 'file', 'ACI Limited', 1, '2020-03-16 11:43:12', '2020-03-16 11:43:12'),
(440, 'Dermasim  1%', 23, 40.12, 'file', 'ACI Limited', 1, '2020-03-16 11:44:03', '2020-03-16 11:44:03'),
(441, 'Dermasim VT 200 mg', 26, 20.08, 'pcs', 'ACI Limited', 1, '2020-03-16 11:44:25', '2020-03-16 11:44:25'),
(442, 'Dermasim VT 500 mg', 26, 60.41, 'pcs', 'ACI Limited', 1, '2020-03-16 11:44:50', '2020-03-16 11:44:50'),
(443, 'Deslorin 5 mg', 7, 2.51, 'pcs', 'ACI Limited', 1, '2020-03-16 11:45:14', '2020-03-16 11:45:14'),
(444, 'Deslorin 2.5 mg/5 ml', 9, 25.17, 'file', 'ACI Limited', 1, '2020-03-16 11:45:33', '2020-03-16 11:45:33'),
(445, 'Desotop 0.05%', 14, 50.34, 'file', 'ACI Limited', 1, '2020-03-16 11:46:15', '2020-03-16 11:46:15'),
(446, 'Dexcor 5 mg/ml', 49, 22, 'file', 'ACI Limited', 1, '2020-03-16 11:46:57', '2020-03-16 11:46:57'),
(447, 'Dexcor 0.5 mg', 7, 1.1, 'pcs', 'ACI Limited', 1, '2020-03-16 11:47:13', '2020-03-16 11:47:13'),
(448, 'Diar 500 mg', 7, 10.07, 'pcs', 'ACI Limited', 1, '2020-03-16 11:48:03', '2020-03-16 11:48:03'),
(449, 'Diar 100 mg/5 ml (30ml)', 38, 35.24, 'pcs', 'ACI Limited', 1, '2020-03-16 11:48:45', '2020-03-16 11:48:45'),
(450, 'Diaset 25 mg', 7, 10.07, 'pcs', 'ACI Limited', 1, '2020-03-16 11:49:12', '2020-03-16 11:49:12'),
(451, 'Diaset 50 mg', 7, 15.11, 'pcs', 'ACI Limited', 1, '2020-03-16 11:49:42', '2020-03-16 11:49:42'),
(452, 'Diasulin 30%+70% in 40 IU/ml', 45, 195, 'file', 'ACI Limited', 1, '2020-03-16 11:50:01', '2020-03-16 11:50:01'),
(453, 'Diasulin 30%+70% in 100 IU/ml', 45, 415, 'file', 'ACI Limited', 1, '2020-03-16 11:50:37', '2020-03-16 11:50:37'),
(454, 'Diasulin 50%+50% in 40 IU/ml', 45, 195, 'file', 'ACI Limited', 1, '2020-03-16 11:50:59', '2020-03-16 11:50:59'),
(455, 'Diasulin 50%+50% in 100 IU/ml', 45, 415, 'pcs', 'ACI Limited', 1, '2020-03-16 11:51:14', '2020-03-16 11:51:14'),
(456, 'Diasulin N 40 IU/ml', 45, 195, 'pcs', 'ACI Limited', 1, '2020-03-16 11:53:43', '2020-03-16 11:53:43'),
(457, 'Diasulin N 100 IU/ml', 45, 415, 'pcs', 'ACI Limited', 1, '2020-03-16 11:53:44', '2020-03-16 11:53:44'),
(458, 'Diasulin R 40 IU/ml', 45, 195, 'file', 'ACI Limited', 1, '2020-03-16 11:54:11', '2020-03-16 11:54:11'),
(459, 'Diasulin R 100 IU/ml', 45, 415, 'file', 'ACI Limited', 1, '2020-03-16 11:54:40', '2020-03-16 11:54:40'),
(460, 'Dilup 40 mg+50 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 11:55:14', '2020-03-16 11:55:14'),
(461, 'Diverin 10 mg', 7, 2.02, 'pcs', 'ACI Limited', 1, '2020-03-16 11:55:46', '2020-03-16 11:55:46'),
(462, 'Diverin 20 mg', 7, 3.52, 'pcs', 'ACI Limited', 1, '2020-03-16 11:56:06', '2020-03-16 11:56:06'),
(463, 'Diverin 10 mg/5 ml', 9, 30.2, 'file', 'ACI Limited', 1, '2020-03-16 11:56:22', '2020-03-16 11:56:22');
INSERT INTO `products` (`id`, `product_name`, `category`, `rate`, `unit`, `detail`, `added_by`, `created_at`, `updated_at`) VALUES
(464, 'Dixar 10 mg/5 ml', 9, 40, 'file', 'ACI Limited', 1, '2020-03-16 11:56:43', '2020-03-16 11:56:43'),
(465, 'Dixar Plus  (20 mg+10 mg+2.5 mg)/5 ml', 9, 100, 'file', 'ACI Limited', 1, '2020-03-16 11:57:16', '2020-03-16 11:57:16'),
(466, 'Dobumin 12.5 mg/ml', 47, 251.69, 'pcs', 'ACI Limited', 1, '2020-03-16 11:57:48', '2020-03-16 11:57:48'),
(467, 'Dorinem 500 mg/vial', 47, 2006.02, 'file', 'ACI Limited', 1, '2020-03-16 11:58:11', '2020-03-16 11:58:11'),
(468, 'Doximar 400 mg', 7, 8, 'pcs', 'ACI Limited', 1, '2020-03-16 11:58:32', '2020-03-16 11:58:32'),
(469, 'Doximar 200 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 11:58:51', '2020-03-16 11:58:51'),
(470, 'Doximar 100 mg/5 ml', 9, 100, 'file', 'ACI Limited', 1, '2020-03-16 11:59:10', '2020-03-16 11:59:10'),
(471, 'Ebasten 10 mg', 7, 8, 'pcs', 'ACI Limited', 1, '2020-03-16 12:00:28', '2020-03-16 12:00:28'),
(472, 'Ebasten 5 mg/5 ml', 9, 80, 'pcs', 'ACI Limited', 1, '2020-03-16 12:00:51', '2020-03-16 12:00:51'),
(473, 'Fast Dissolving Tablet Ebasten FT 10 mg', 52, 10, 'pcs', 'ACI Limited', 1, '2020-03-16 12:01:49', '2020-03-16 12:01:49'),
(474, 'Ecoren  1%', 23, 30.2, 'file', 'ACI Limited', 1, '2020-03-16 12:02:14', '2020-03-16 12:02:14'),
(475, 'Ecoren T 1% + 0.1%', 23, 41.27, 'file', 'ACI Limited', 1, '2020-03-16 12:02:35', '2020-03-16 12:02:35'),
(476, 'Erythin 125 mg/5 ml', 8, 61.47, 'file', 'ACI Limited', 1, '2020-03-16 12:03:12', '2020-03-16 12:03:12'),
(477, 'Esomep 20 mg', 7, 5.02, 'pcs', 'ACI Limited', 1, '2020-03-16 12:03:29', '2020-03-16 12:03:29'),
(478, 'Esomep 40 mg', 7, 8.02, 'pcs', 'ACI Limited', 1, '2020-03-16 12:04:00', '2020-03-16 12:04:00'),
(480, 'Esomep   20 mg', 6, 7.02, 'pcs', 'ACI Limited', 1, '2020-03-16 12:04:36', '2020-03-16 12:04:36'),
(481, 'Esomep  40 mg', 6, 9.03, 'pcs', 'ACI Limited', 1, '2020-03-16 12:04:59', '2020-03-16 12:04:59'),
(482, 'Esomep 40 mg/vial', 47, 90.27, 'file', 'ACI Limited', 1, '2020-03-16 12:05:42', '2020-03-16 12:05:42'),
(483, 'Etrax 40 mg', 7, 1, 'pcs', 'ACI Limited', 1, '2020-03-16 12:05:59', '2020-03-16 12:05:59'),
(484, 'Etrax 40 mg/5 ml', 9, 24.07, 'file', 'ACI Limited', 1, '2020-03-16 12:06:22', '2020-03-16 12:06:22'),
(485, 'Ezolid 400 mg', 7, 60, 'pcs', 'ACI Limited', 1, '2020-03-16 12:07:03', '2020-03-16 12:07:03'),
(486, 'Ezolid 600 mg', 7, 85, 'pcs', 'ACI Limited', 1, '2020-03-16 12:07:26', '2020-03-16 12:07:26'),
(487, 'Febus 40 mg', 7, 12.04, 'pcs', 'ACI Limited', 1, '2020-03-16 12:09:19', '2020-03-16 12:09:19'),
(488, 'Febus 80 mg', 7, 22.07, 'pcs', 'ACI Limited', 1, '2020-03-16 12:09:37', '2020-03-16 12:09:37'),
(489, 'Flamex 200 mg', 7, 0.88, 'pcs', 'ACI Limited', 1, '2020-03-16 12:10:00', '2020-03-16 12:10:00'),
(490, 'Flamex 400 mg', 7, 1.43, 'pcs', 'ACI Limited', 1, '2020-03-16 12:10:17', '2020-03-16 12:10:17'),
(491, 'Flamex 100 mg/5 ml', 8, 33.81, 'file', 'ACI Limited', 1, '2020-03-16 12:10:42', '2020-03-16 12:10:42'),
(492, 'Floxabid 250 mg', 7, 8.56, 'pcs', 'ACI Limited', 1, '2020-03-16 12:11:28', '2020-03-16 12:11:28'),
(493, 'Floxabid 500 mg', 7, 15.05, 'pcs', 'ACI Limited', 1, '2020-03-16 12:11:48', '2020-03-16 12:11:48'),
(494, 'Floxabid 750 mg', 7, 18.12, 'pcs', 'ACI Limited', 1, '2020-03-16 12:12:03', '2020-03-16 12:12:03'),
(495, 'Floxabid 0.3%', 12, 40.12, 'pcs', 'ACI Limited', 1, '2020-03-16 12:12:52', '2020-03-16 12:12:52'),
(496, 'Floxabid 200 mg/100 ml', 47, 146.44, 'file', 'ACI Limited', 1, '2020-03-16 12:13:13', '2020-03-16 12:13:13'),
(497, 'Floxabid DS 250 mg/5 ml', 53, 100.3, 'file', 'ACI Limited', 1, '2020-03-16 12:15:18', '2020-03-16 12:15:18'),
(498, 'Fluclox 250 mg', 6, 5.8, 'pcs', 'ACI Limited', 1, '2020-03-16 12:15:40', '2020-03-16 12:15:40'),
(499, 'Fluclox 500 mg', 6, 10.6, 'pcs', 'ACI Limited', 1, '2020-03-16 12:15:58', '2020-03-16 12:15:58'),
(500, 'Fluclox 125 mg/5 ml', 38, 61.5, 'file', 'ACI Limited', 1, '2020-03-16 12:16:19', '2020-03-16 12:16:19'),
(501, 'Fluclox 250 mg/vial', 49, 35.24, 'file', 'ACI Limited', 1, '2020-03-16 12:16:37', '2020-03-16 12:16:37'),
(502, 'Fluclox 500 mg/vial', 49, 45.28, 'file', 'ACI Limited', 1, '2020-03-16 12:17:13', '2020-03-16 12:17:13'),
(503, 'Fluclox DS 250 mg/5 ml', 38, 110.74, 'file', 'ACI Limited', 1, '2020-03-16 12:17:32', '2020-03-16 12:17:32'),
(504, 'Fluvent 50 mcg/spray', 17, 250.75, 'file', 'ACI Limited', 1, '2020-03-16 12:18:01', '2020-03-16 12:18:01'),
(505, 'Fluver 5 mg', 7, 3.51, 'pcs', 'ACI Limited', 1, '2020-03-16 12:18:17', '2020-03-16 12:18:17'),
(506, 'Fluver 10 mg', 7, 5.02, 'pcs', 'ACI Limited', 1, '2020-03-16 12:18:38', '2020-03-16 12:18:38'),
(507, 'Fosfocin 3 gm/sachet', 53, 350, 'pcs', 'ACI Limited', 1, '2020-03-16 12:19:24', '2020-03-16 12:19:24'),
(508, 'Foviral 300 mg', 7, 85.26, 'pcs', 'ACI Limited', 1, '2020-03-16 12:19:45', '2020-03-16 12:19:45'),
(509, 'Gabarol 25 mg', 6, 8.02, 'pcs', 'ACI Limited', 1, '2020-03-16 17:20:43', '2020-03-16 17:20:43'),
(510, 'Gabarol 75 mg', 6, 16.11, 'pcs', 'ACI Limited', 1, '2020-03-16 17:21:23', '2020-03-16 17:21:23'),
(511, 'Gabarol 50 mg', 6, 12.04, 'pcs', 'ACI Limited', 1, '2020-03-16 17:22:10', '2020-03-16 17:22:10'),
(512, 'Gabarol 100 mg', 6, 22.15, 'pcs', 'ACI Limited', 1, '2020-03-16 17:22:30', '2020-03-16 17:22:30'),
(513, 'Gabarol 150 mg', 6, 30.2, 'pcs', 'ACI Limited', 1, '2020-03-16 17:22:51', '2020-03-16 17:22:51'),
(514, 'Glarine 100 IU/ml', 45, 950, 'pcs', 'ACI Limited', 1, '2020-03-16 17:23:20', '2020-03-16 17:23:20'),
(515, 'Glarine  100 IU/ml', 45, 600, 'pcs', 'ACI Limited', 1, '2020-03-16 17:23:58', '2020-03-16 17:23:58'),
(516, 'Glimirid 1 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 17:24:45', '2020-03-16 17:24:45'),
(517, 'Glimirid 2 mg', 7, 9, 'pcs', 'ACI Limited', 1, '2020-03-16 17:25:13', '2020-03-16 17:25:13'),
(518, 'Glimirid 3 mg', 7, 12, 'pcs', 'ACI Limited', 1, '2020-03-16 17:25:35', '2020-03-16 17:25:35'),
(519, 'Glimirid 4 mg', 7, 15, 'pcs', 'ACI Limited', 1, '2020-03-16 17:26:16', '2020-03-16 17:26:16'),
(520, 'Glitin 5 mg', 7, 18, 'pcs', 'ACI Limited', 1, '2020-03-16 17:26:53', '2020-03-16 17:26:53'),
(521, 'Glitin M 2.5 mg+1000 mg', 7, 16, 'pcs', 'ACI Limited', 1, '2020-03-16 17:27:14', '2020-03-16 17:27:14'),
(522, 'Glitin M 2.5 mg+500 mg', 7, 12, 'pcs', 'ACI Limited', 1, '2020-03-16 17:27:38', '2020-03-16 17:27:38'),
(523, 'Glitin M  2.5 mg+850 mg', 7, 14, 'pcs', 'ACI Limited', 1, '2020-03-16 17:28:03', '2020-03-16 17:28:03'),
(524, 'Glycema 5 mg', 7, 16, 'pcs', 'ACI Limited', 1, '2020-03-16 17:28:28', '2020-03-16 17:28:28'),
(525, 'Glycema 10 mg', 7, 30, 'pcs', 'ACI Limited', 1, '2020-03-16 17:28:51', '2020-03-16 17:28:51'),
(526, 'Glycolate 0.2 mg/ml', 49, 100, 'pcs', 'ACI Limited', 1, '2020-03-16 17:29:11', '2020-03-16 17:29:11'),
(527, 'Halocort 0.05%', 23, 90.27, 'file', 'ACI Limited', 1, '2020-03-16 17:30:09', '2020-03-16 17:30:09'),
(529, 'Halosin 1.87 gm/ml', 54, 1504, 'file', 'ACI Limited', 1, '2020-03-16 17:33:50', '2020-03-16 17:33:50'),
(530, 'Henlix 200 mg', 7, 25, 'pcs', 'ACI Limited', 1, '2020-03-16 17:34:15', '2020-03-16 17:34:15'),
(531, 'Henlix  550 mg', 7, 45, 'pcs', 'ACI Limited', 1, '2020-03-16 17:34:34', '2020-03-16 17:34:34'),
(532, 'Hepta Seas (100ml)', 9, 85, 'file', 'ACI Limited', 1, '2020-03-16 17:35:40', '2020-03-16 17:35:40'),
(533, 'Hepta Seas (200ml)', 9, 150, 'file', 'ACI Limited', 1, '2020-03-16 17:35:43', '2020-03-16 17:35:43'),
(534, 'Hexiscrub 4%', 22, 300, 'file', 'ACI Limited', 1, '2020-03-16 17:36:06', '2020-03-16 17:36:06'),
(535, 'Hexisol 0.5% + 70% (250ml)', 22, 130.39, 'file', 'ACI Limited', 1, '2020-03-16 17:37:10', '2020-03-16 17:37:10'),
(536, 'Hexisol 0.5% + 70% (500ml)', 22, 215.65, 'file', 'ACI Limited', 1, '2020-03-16 17:37:50', '2020-03-16 17:37:50'),
(537, 'Hexisol 0.5% + 70% (5ml)', 22, 40.12, 'file', 'ACI Limited', 1, '2020-03-16 17:37:51', '2020-03-16 17:37:51'),
(538, 'Hexitane 1%', 23, 90, 'file', 'ACI Limited', 1, '2020-03-16 17:38:23', '2020-03-16 17:38:23'),
(539, 'Hison 100 mg/2 ml', 49, 50.34, 'file', 'ACI Limited', 1, '2020-03-16 17:38:54', '2020-03-16 17:38:54'),
(540, 'Hypnoclone 7.5 mg', 7, 4.01, 'pcs', 'ACI Limited', 1, '2020-03-16 17:40:30', '2020-03-16 17:40:30'),
(541, 'Icol 0.5%', 12, 34.5, 'file', 'ACI Limited', 1, '2020-03-16 21:53:28', '2020-03-16 21:53:28'),
(542, 'Iminem (500 mg+500 mg)/vial', 47, 1203.12, 'file', 'ACI Limited', 1, '2020-03-16 21:54:02', '2020-03-16 21:54:02'),
(543, 'Iminem (250 mg+250 mg)/vial', 47, 650, 'pcs', 'ACI Limited', 1, '2020-03-16 21:54:33', '2020-03-16 21:54:33'),
(544, 'Impedox 100 mg', 6, 2.17, 'pcs', 'ACI Limited', 1, '2020-03-16 21:54:51', '2020-03-16 21:54:51'),
(545, 'Inclaud 100 mg', 7, 10, 'pcs', 'ACI Limited', 1, '2020-03-16 21:55:04', '2020-03-16 21:55:04'),
(546, 'Indever 10 mg', 7, 0.51, 'pcs', 'ACI Limited', 1, '2020-03-16 21:55:38', '2020-03-16 21:55:38'),
(547, 'Indever 40 mg', 7, 1.5, 'pcs', 'ACI Limited', 1, '2020-03-16 21:55:56', '2020-03-16 21:55:56'),
(548, 'Insaid 25 mg', 6, 1, 'pcs', 'ACI Limited', 1, '2020-03-16 21:56:13', '2020-03-16 21:56:13'),
(549, 'Irosuc 100 mg/5 ml', 48, 350, 'file', 'ACI Limited', 1, '2020-03-16 21:56:33', '2020-03-16 21:56:33'),
(550, 'Kacin 100 mg/2 ml', 49, 16.11, 'pcs', 'ACI Limited', 1, '2020-03-16 21:57:27', '2020-03-16 21:57:27'),
(551, 'Kacin 500 mg/2 ml', 49, 48.32, 'pcs', 'ACI Limited', 1, '2020-03-16 21:57:48', '2020-03-16 21:57:48'),
(552, 'Kofnix 7.5 mg/5 ml', 9, 80, 'pcs', 'ACI Limited', 1, '2020-03-16 21:58:10', '2020-03-16 21:58:10'),
(553, 'Kofnix 5 mg/ml', 10, 50, 'file', 'ACI Limited', 1, '2020-03-16 21:58:30', '2020-03-16 21:58:30'),
(554, 'Kofnix SR 50 mg', 7, 10.03, 'pcs', 'ACI Limited', 1, '2020-03-16 21:58:50', '2020-03-16 21:58:50'),
(555, 'Lacticon 10 gm/sachet', 11, 25, 'file', 'ACI Limited', 1, '2020-03-16 21:59:43', '2020-03-16 21:59:43'),
(556, 'Lamitrin 25 mg', 7, 10.03, 'pcs', 'ACI Limited', 1, '2020-03-16 22:00:01', '2020-03-16 22:00:01'),
(557, 'Lamitrin50 mg', 7, 18.05, 'pcs', 'ACI Limited', 1, '2020-03-16 22:00:16', '2020-03-16 22:00:16'),
(558, 'Largix 10 mg', 7, 10, 'pcs', 'ACI Limited', 1, '2020-03-16 22:00:32', '2020-03-16 22:00:32'),
(559, 'Largix 5 mg/5 ml', 21, 75, 'pcs', 'ACI Limited', 1, '2020-03-16 22:00:56', '2020-03-16 22:00:56'),
(560, 'Leflox 0.5%', 12, 87, 'file', 'ACI Limited', 1, '2020-03-16 22:01:36', '2020-03-16 22:01:36'),
(561, 'Leflox 500 mg', 7, 15.11, 'pcs', 'ACI Limited', 1, '2020-03-16 22:01:52', '2020-03-16 22:01:52'),
(562, 'Leflox 750 mg', 7, 20.13, 'pcs', 'ACI Limited', 1, '2020-03-16 22:02:09', '2020-03-16 22:02:09'),
(563, 'Liorel 5 mg', 7, 4.53, 'pcs', 'ACI Limited', 1, '2020-03-16 22:02:30', '2020-03-16 22:02:30'),
(564, 'Liorel 10 mg', 7, 8.05, 'pcs', 'ACI Limited', 1, '2020-03-16 22:02:45', '2020-03-16 22:02:45'),
(565, 'Listoral Coolmint (120ml)', 55, 75.51, 'file', 'ACI Limited', 1, '2020-03-16 22:04:00', '2020-03-16 22:04:00'),
(566, 'Listoral Coolmint 250 ml', 55, 140.95, 'file', 'ACI Limited', 1, '2020-03-16 22:04:29', '2020-03-16 22:04:29'),
(567, 'Litiam ER 400 mg', 7, 5.02, 'pcs', 'ACI Limited', 1, '2020-03-16 22:05:12', '2020-03-16 22:05:12'),
(568, 'Livita  (100ml)', 9, 50.34, 'file', 'ACI Limited', 1, '2020-03-16 22:05:35', '2020-03-16 22:05:35'),
(569, 'Lomosec 2 mg', 6, 0.58, 'pcs', 'ACI Limited', 1, '2020-03-16 22:05:53', '2020-03-16 22:05:53'),
(570, 'Lopenta 50 mg', 7, 14, 'pcs', 'ACI Limited', 1, '2020-03-16 22:06:27', '2020-03-16 22:06:27'),
(571, 'Lopenta 75 mg', 7, 20, 'pcs', 'ACI Limited', 1, '2020-03-16 22:06:48', '2020-03-16 22:06:48'),
(572, 'Lopenta 100 mg', 7, 25, 'pcs', 'ACI Limited', 1, '2020-03-16 22:07:08', '2020-03-16 22:07:08'),
(573, 'Loxetine 20 mg', 7, 7, 'pcs', 'ACI Limited', 1, '2020-03-16 22:07:23', '2020-03-16 22:07:23'),
(574, 'Loxetine 30 mg', 7, 10, 'pcs', 'ACI Limited', 1, '2020-03-16 22:07:38', '2020-03-16 22:07:38'),
(575, 'Lozide 80 mg', 7, 7.02, 'pcs', 'ACI Limited', 1, '2020-03-16 22:07:59', '2020-03-16 22:07:59'),
(576, 'Lubrimax 1%', 12, 275, 'file', 'ACI Limited', 1, '2020-03-16 22:08:25', '2020-03-16 22:08:25'),
(577, 'Lynotril 5 mg', 7, 12, 'pcs', 'ACI Limited', 1, '2020-03-16 22:08:42', '2020-03-16 22:08:42'),
(578, 'Mastel 10 mg', 7, 6.52, 'pcs', 'ACI Limited', 1, '2020-03-16 22:10:00', '2020-03-16 22:10:00'),
(579, 'Maxiflox 400 mg', 7, 50, 'pcs', 'ACI Limited', 1, '2020-03-16 22:10:20', '2020-03-16 22:10:20'),
(580, 'Maxiflox 0.5%', 12, 100.68, 'pcs', 'ACI Limited', 1, '2020-03-16 22:10:44', '2020-03-16 22:11:42'),
(581, 'Meloderm 0.1%', 23, 100.3, 'file', 'ACI Limited', 1, '2020-03-16 22:11:01', '2020-03-16 22:11:01'),
(582, 'Memopil  800 mg', 7, 6.04, 'pcs', 'ACI Limited', 1, '2020-03-16 22:11:21', '2020-03-16 22:11:21'),
(583, 'Memopil 500 mg/5 ml', 9, 151.02, 'pcs', 'ACI Limited', 1, '2020-03-16 22:12:16', '2020-03-16 22:12:16'),
(584, 'Menogia 5 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 22:12:35', '2020-03-16 22:12:35'),
(585, 'Metform 500 mg', 7, 4, 'pcs', 'ACI Limited', 1, '2020-03-16 22:12:49', '2020-03-16 22:12:49'),
(586, 'Metform 850 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 22:13:04', '2020-03-16 22:13:04'),
(587, 'Metform ER 500 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 22:13:27', '2020-03-16 22:13:27'),
(588, 'Metform ER 1000 mg', 7, 9, 'pcs', 'ACI Limited', 1, '2020-03-16 22:13:54', '2020-03-16 22:13:54'),
(589, 'Miconex 2%', 23, 39, 'file', 'ACI Limited', 1, '2020-03-16 22:14:14', '2020-03-16 22:14:14'),
(590, 'Micoral 2% w/w (15gm)', 15, 60.18, 'file', 'ACI Limited', 1, '2020-03-16 22:15:00', '2020-03-16 22:15:00'),
(591, 'Micoral 2% w/w (30gm)', 15, 100.3, 'file', 'ACI Limited', 1, '2020-03-16 22:15:18', '2020-03-16 22:15:18'),
(592, 'Micosone 2%+1%', 23, 40.27, 'pcs', 'ACI Limited', 1, '2020-03-16 22:15:39', '2020-03-16 22:15:39'),
(593, 'Micosone 2%+1% (10gm0', 24, 40.27, 'file', 'ACI Limited', 1, '2020-03-16 22:16:27', '2020-03-16 22:16:27'),
(594, 'Milk Aid 300 mg', 44, 15, 'pcs', 'ACI Limited', 1, '2020-03-16 22:17:18', '2020-03-16 22:17:18'),
(595, 'Minolac 60 mg/2 ml', 49, 95.65, 'file', 'ACI Limited', 1, '2020-03-16 22:17:38', '2020-03-16 22:17:38'),
(596, 'Minolac 10 mg', 7, 10.07, 'pcs', 'ACI Limited', 1, '2020-03-16 22:17:53', '2020-03-16 22:17:53'),
(597, 'Minolac 30 mg/ml', 49, 55.38, 'pcs', 'ACI Limited', 1, '2020-03-16 22:18:24', '2020-03-16 22:18:24'),
(598, 'Miragon PR 25 mg', 7, 30, 'pcs', 'ACI Limited', 1, '2020-03-16 22:18:46', '2020-03-16 22:18:46'),
(599, 'Mobifen 50 mg', 31, 15, 'pcs', 'ACI Limited', 1, '2020-03-16 22:20:18', '2020-03-16 22:20:18'),
(600, 'Mobifen  50 mg', 7, 0.88, 'pcs', 'ACI Limited', 1, '2020-03-16 22:20:44', '2020-03-16 22:20:44'),
(601, 'Mobifen 12.5 mg', 31, 9, 'pcs', 'ACI Limited', 1, '2020-03-16 22:21:03', '2020-03-16 22:21:03'),
(602, 'Mobifen  25 mg', 31, 12, 'pcs', 'ACI Limited', 1, '2020-03-16 22:21:25', '2020-03-16 22:21:25'),
(603, 'Mobifen Plus (75 mg+20 mg)/2 ml', 46, 9.57, 'file', 'ACI Limited', 1, '2020-03-16 22:21:47', '2020-03-16 22:21:47'),
(604, 'Mylovit-Z', 6, 3.52, 'pcs', 'ACI Limited', 1, '2020-03-16 22:22:11', '2020-03-16 22:22:11'),
(605, 'Myrox 15 mg/5 m', 9, 40.12, 'file', 'ACI Limited', 1, '2020-03-16 22:22:30', '2020-03-16 22:22:30'),
(606, 'Myrox 6 mg/ml', 10, 30.09, 'pcs', 'ACI Limited', 1, '2020-03-16 22:22:53', '2020-03-16 22:22:53'),
(607, 'Myrox SR 75 mg', 6, 5, 'pcs', 'ACI Limited', 1, '2020-03-16 22:23:24', '2020-03-16 22:23:24'),
(608, 'Nalbutin 10 mg/ml', 49, 100.3, 'pcs', 'ACI Limited', 1, '2020-03-16 22:24:49', '2020-03-16 22:24:49'),
(609, 'Namitol 200 mg', 7, 10, 'pcs', 'ACI Limited', 1, '2020-03-16 22:25:11', '2020-03-16 22:25:11'),
(610, 'Napcon 0.025% + 0.3%', 12, 70, 'file', 'ACI Limited', 1, '2020-03-16 22:25:31', '2020-03-16 22:25:31'),
(611, 'Neocitrin 0.05% + 0.45%', 11, 20.14, 'file', 'ACI Limited', 1, '2020-03-16 22:26:01', '2020-03-16 22:26:01'),
(612, 'Nitrofur 25 mg/5 ml', 8, 80, 'file', 'ACI Limited', 1, '2020-03-16 22:26:22', '2020-03-16 22:26:22'),
(613, 'Nitrofur SR 100 mg', 6, 20, 'pcs', 'ACI Limited', 1, '2020-03-16 22:26:58', '2020-03-16 22:26:58'),
(614, 'Nitrofur SR 50 mg', 6, 4, 'pcs', 'ACI Limited', 1, '2020-03-16 22:27:20', '2020-03-16 22:27:20'),
(615, 'Nutrivit-B', 7, 0.62, 'pcs', 'ACI Limited', 1, '2020-03-16 22:27:37', '2020-03-16 22:27:37'),
(616, 'Nutrivit-B  (200ml)', 9, 62.19, 'file', 'ACI Limited', 1, '2020-03-16 22:28:17', '2020-03-16 22:28:17'),
(617, 'Nutrivit-C 125 mg/1.25 ml (15ml)', 10, 30.21, 'file', 'ACI Limited', 1, '2020-03-16 22:28:56', '2020-03-16 22:28:56'),
(618, 'Nutrivit-C 250 mg', 44, 1.9, 'pcs', 'ACI Limited', 1, '2020-03-16 22:29:30', '2020-03-16 22:29:30'),
(619, 'Nutrivit-C 1000 mg', 36, 12.04, 'pcs', 'ACI Limited', 1, '2020-03-16 22:30:03', '2020-03-16 22:30:03'),
(620, 'Nutrivit-C 100 mg/5 ml', 9, 33.45, 'file', 'ACI Limited', 1, '2020-03-16 22:30:23', '2020-03-16 22:30:23'),
(621, 'Nutrivit-MV  (15ml)', 10, 16.06, 'pcs', 'ACI Limited', 1, '2020-03-16 22:30:48', '2020-03-16 22:31:02'),
(622, 'Oclube 0.4%+0.3%', 12, 150, 'file', 'ACI Limited', 1, '2020-03-16 22:33:00', '2020-03-16 22:33:00'),
(623, 'Oculax 0.2%+0.36%+1%', 12, 250, 'file', 'ACI Limited', 1, '2020-03-16 22:40:49', '2020-03-16 22:40:49'),
(624, 'Odazyth 500 mg', 7, 35.11, 'pcs', 'ACI Limited', 1, '2020-03-16 22:41:10', '2020-03-16 22:41:10'),
(625, 'Odazyth 200 mg/5 ml (15ml)', 38, 85.58, 'file', 'ACI Limited', 1, '2020-03-16 22:41:53', '2020-03-16 22:41:53'),
(626, 'Odazyth 200 mg/5 ml (30ml)', 38, 130.88, 'file', 'ACI Limited', 1, '2020-03-16 22:42:26', '2020-03-16 22:42:26'),
(627, 'Odazyth 200 mg/5 ml (50ml)', 38, 186.26, 'file', 'ACI Limited', 1, '2020-03-16 22:43:09', '2020-03-16 22:43:09'),
(628, 'Odazyth 250 mg', 6, 25.08, 'pcs', 'ACI Limited', 1, '2020-03-16 22:44:00', '2020-03-16 22:44:00'),
(629, 'Oral ZB  (100ml)', 9, 55, 'file', 'ACI Limited', 1, '2020-03-16 22:44:39', '2020-03-16 22:44:39'),
(630, 'Oral-Z 10 mg/5 ml', 55, 26.18, 'file', 'ACI Limited', 1, '2020-03-16 22:44:58', '2020-03-16 22:44:58'),
(631, 'Oral-Z 20 mg', 7, 1.51, 'pcs', 'ACI Limited', 1, '2020-03-16 22:45:16', '2020-03-16 22:45:16'),
(632, 'Oralon 0.2% (100ml)', 55, 60, 'file', 'ACI Limited', 1, '2020-03-16 22:45:44', '2020-03-16 22:45:44'),
(633, 'Oralon 1% (30gm)', 15, 55.17, 'file', 'ACI Limited', 1, '2020-03-16 22:46:17', '2020-03-16 22:46:17'),
(634, 'Ornical 120 mg', 6, 55, 'pcs', 'ACI Limited', 1, '2020-03-16 22:46:44', '2020-03-16 22:46:44'),
(635, 'Osetron 8 mg', 7, 10.07, 'pcs', 'ACI Limited', 1, '2020-03-16 22:47:04', '2020-03-16 22:47:04'),
(636, 'Osetron 4 mg/5 ml (50ml)', 9, 30.2, 'file', 'ACI Limited', 1, '2020-03-16 22:47:26', '2020-03-16 22:47:26'),
(637, 'Osetron 8 mg/4 ml', 49, 25.17, 'file', 'ACI Limited', 1, '2020-03-16 22:47:47', '2020-03-16 22:47:47'),
(638, 'Ovazol 2.5 mg', 7, 40, 'pcs', 'ACI Limited', 1, '2020-03-16 22:48:00', '2020-03-16 22:48:00'),
(639, 'Oxicam 20 mg', 7, 8.05, 'pcs', 'ACI Limited', 1, '2020-03-16 22:48:27', '2020-03-16 22:48:27'),
(640, 'Oxima 150 mcg', 6, 35, 'pcs', 'ACI Limited', 1, '2020-03-16 22:48:45', '2020-03-16 22:48:45'),
(641, 'Oxima 300 mcg', 6, 65, 'pcs', 'ACI Limited', 1, '2020-03-16 22:49:01', '2020-03-16 22:49:01'),
(642, 'Oxima 75 mg', 6, 18, 'pcs', 'ACI Limited', 1, '2020-03-16 22:49:16', '2020-03-16 22:49:16'),
(643, 'Oxycort 100 mcg+6 mcg', 56, 7.02, 'pcs', 'ACI Limited', 1, '2020-03-16 22:49:48', '2020-03-16 22:49:48'),
(644, 'Oxycort 200 mcg+6 mcg', 56, 9.03, 'pcs', 'ACI Limited', 1, '2020-03-16 22:50:12', '2020-03-16 22:50:12'),
(645, 'Oxycort 400 mcg+12 mcg', 56, 13.85, 'pcs', 'ACI Limited', 1, '2020-03-16 22:50:37', '2020-03-16 22:50:37'),
(646, 'Pactorin 400 mcg/spray', 57, 250, 'file', 'ACI Limited', 1, '2020-03-16 23:02:14', '2020-03-16 23:02:14'),
(647, 'Pactorin Retard 2.6 mg', 7, 5, 'pcs', 'ACI Limited', 1, '2020-03-16 23:02:37', '2020-03-16 23:02:37'),
(648, 'Palimax ER 6 mg', 7, 10, 'pcs', 'ACI Limited', 1, '2020-03-16 23:02:52', '2020-03-16 23:02:52'),
(649, 'Palimax ER  1.5 mg', 7, 4, 'pcs', 'ACI Limited', 1, '2020-03-16 23:03:15', '2020-03-16 23:03:15'),
(650, 'Palimax ER 3 mg', 7, 7, 'pcs', 'ACI Limited', 1, '2020-03-16 23:03:37', '2020-03-16 23:03:37'),
(651, 'Pantex 20 mg', 7, 5.02, 'pcs', 'ACI Limited', 1, '2020-03-16 23:04:05', '2020-03-16 23:04:05'),
(652, 'Pantex 40 mg/vial IV', 13, 70.47, 'file', 'ACI Limited', 1, '2020-03-16 23:04:22', '2020-03-17 13:32:28'),
(653, 'Pantex 40 mg', 7, 7.02, 'pcs', 'ACI Limited', 1, '2020-03-16 23:04:37', '2020-03-16 23:04:37'),
(654, 'Paricel 20 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 23:05:00', '2020-03-16 23:05:00'),
(655, 'Paricel  10 mg', 7, 3.51, 'pcs', 'ACI Limited', 1, '2020-03-16 23:05:26', '2020-03-16 23:05:26'),
(656, 'Paricel  20 mg', 6, 8, 'pcs', 'ACI Limited', 1, '2020-03-16 23:06:00', '2020-03-16 23:06:00'),
(657, 'Parixol 88 mcg', 7, 3.01, 'pcs', 'ACI Limited', 1, '2020-03-16 23:06:20', '2020-03-16 23:06:20'),
(658, 'Parixol 180 mcg', 7, 6.04, 'pcs', 'ACI Limited', 1, '2020-03-16 23:06:34', '2020-03-16 23:06:34'),
(659, 'Parotin 10 mg', 7, 6.04, 'pcs', 'ACI Limited', 1, '2020-03-16 23:06:49', '2020-03-16 23:06:49'),
(660, 'Parotin 20 mg', 7, 10.07, 'pcs', 'ACI Limited', 1, '2020-03-16 23:07:01', '2020-03-16 23:07:01'),
(661, 'Permisol 5% w/w (15gm)', 23, 30.09, 'file', 'ACI Limited', 1, '2020-03-16 23:07:47', '2020-03-16 23:07:47'),
(662, 'Permisol 5% w/w (30gm)', 23, 45.14, 'file', 'ACI Limited', 1, '2020-03-16 23:08:03', '2020-03-16 23:08:03'),
(663, 'Permisol Max 5%+10%', 25, 100, 'pcs', 'ACI Limited', 1, '2020-03-16 23:08:40', '2020-03-16 23:08:40'),
(664, 'Pime-4 500 mg/vial IM/IV', 13, 302.04, 'file', 'ACI Limited', 1, '2020-03-16 23:09:12', '2020-03-17 13:23:19'),
(665, 'Pime-4 1 gm/vial IV/IM', 13, 553.73, 'file', 'ACI Limited', 1, '2020-03-16 23:09:28', '2020-03-17 13:21:19'),
(666, 'Polyron 200 mg/5 ml', 9, 40.12, 'file', 'ACI Limited', 1, '2020-03-16 23:09:48', '2020-03-16 23:09:48'),
(667, 'Povital 100 mg+200 mg+200 mcg', 7, 8, 'pcs', 'ACI Limited', 1, '2020-03-16 23:10:21', '2020-03-16 23:10:21'),
(668, 'Povital (100 mg+100 mg+1 mg)/3 ml IM', 13, 25.17, 'file', 'ACI Limited', 1, '2020-03-16 23:10:39', '2020-03-17 13:19:02'),
(669, 'Preg-CI  50 mg+0.50 mg+61.80 mg', 6, 4, 'pcs', 'ACI Limited', 1, '2020-03-16 23:11:00', '2020-03-16 23:11:00'),
(670, 'Prelab 5 mg', 7, 8.02, 'pcs', 'ACI Limited', 1, '2020-03-16 23:11:13', '2020-03-16 23:11:13'),
(671, 'Probis 2.5 mg', 7, 6.02, 'pcs', 'ACI Limited', 1, '2020-03-16 23:11:26', '2020-03-16 23:11:26'),
(672, 'Probis 5 mg', 7, 10.03, 'pcs', 'ACI Limited', 1, '2020-03-16 23:11:54', '2020-03-16 23:11:54'),
(673, 'Probis Plus', 7, 6.02, 'pcs', 'ACI Limited', 1, '2020-03-16 23:12:08', '2020-03-16 23:12:08'),
(674, 'Probis Plus  5 mg+6.25 mg', 7, 10.03, 'pcs', 'ACI Limited', 1, '2020-03-16 23:12:28', '2020-03-16 23:12:28'),
(675, 'Prosma 0.025%', 12, 100, 'pcs', 'ACI Limited', 1, '2020-03-16 23:12:46', '2020-03-16 23:12:46'),
(676, 'Prosma 1 mg', 7, 3, 'pcs', 'ACI Limited', 1, '2020-03-16 23:12:58', '2020-03-16 23:12:58'),
(677, 'Prosma 1 mg/5 ml', 9, 60, 'file', 'ACI Limited', 1, '2020-03-16 23:14:24', '2020-03-16 23:14:24'),
(678, 'Pyrimac 25 mg+50 mg', 7, 2.5, 'pcs', 'ACI Limited', 1, '2020-03-16 23:14:40', '2020-03-16 23:14:40'),
(679, 'Qmax 25 mg', 7, 3.01, 'pcs', 'ACI Limited', 1, '2020-03-16 23:15:06', '2020-03-16 23:15:06'),
(680, 'Qmax 100 mg', 7, 10.03, 'pcs', 'ACI Limited', 1, '2020-03-16 23:15:20', '2020-03-16 23:15:20'),
(681, 'Radola 100 mg', 6, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 23:16:03', '2020-03-16 23:16:03'),
(682, 'Rapine 15 mg', 7, 8, 'pcs', 'ACI Limited', 1, '2020-03-16 23:16:16', '2020-03-16 23:16:16'),
(683, 'Rapine 30 mg', 7, 15, 'pcs', 'ACI Limited', 1, '2020-03-16 23:16:28', '2020-03-16 23:16:28'),
(684, 'Rapine 7.5 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 23:16:45', '2020-03-16 23:16:45'),
(685, 'Recogen 2000 IU/0.5 ml', 13, 1000, 'pcs', 'ACI Limited', 1, '2020-03-16 23:17:16', '2020-03-16 23:17:16'),
(686, 'Recogen 3000 IU/0.75 ml', 13, 1300, 'pcs', 'ACI Limited', 1, '2020-03-16 23:17:44', '2020-03-16 23:18:19'),
(687, 'Recogen 5000 IU/0.5 ml', 13, 2000, 'pcs', 'ACI Limited', 1, '2020-03-16 23:18:27', '2020-03-16 23:18:27'),
(688, 'Recogen 10000 IU/ml', 13, 3900, 'pcs', 'ACI Limited', 1, '2020-03-16 23:18:47', '2020-03-16 23:18:47'),
(689, 'Remophos 667 mg', 7, 6.02, 'pcs', 'ACI Limited', 1, '2020-03-16 23:19:00', '2020-03-16 23:19:00'),
(690, 'Repotyn 5% 500 ml bottle', 30, 352.38, 'file', 'ACI Limited', 1, '2020-03-16 23:19:25', '2020-03-17 13:16:23'),
(691, 'Repotyn Max 7%+10% 500 ml bottle', 30, 401.2, 'file', 'ACI Limited', 1, '2020-03-16 23:20:22', '2020-03-17 13:15:25'),
(692, 'Reversair 4 mg', 58, 7.05, 'pcs', 'ACI Limited', 1, '2020-03-16 23:21:08', '2020-03-16 23:21:08'),
(693, 'Reversair 5 mg', 58, 8.05, 'pcs', 'ACI Limited', 1, '2020-03-16 23:21:29', '2020-03-16 23:21:29'),
(694, 'Reversair 10 mg', 7, 15.11, 'pcs', 'ACI Limited', 1, '2020-03-16 23:21:45', '2020-03-16 23:21:45'),
(695, 'Revital  (100ml)', 9, 90, 'pcs', 'ACI Limited', 1, '2020-03-16 23:22:13', '2020-03-16 23:22:13'),
(696, 'Revital  (200ml)', 9, 175, 'pcs', 'ACI Limited', 1, '2020-03-16 23:22:30', '2020-03-16 23:22:30'),
(697, 'Revital 30', 7, 9, 'pcs', 'ACI Limited', 1, '2020-03-16 23:23:04', '2020-03-16 23:23:04'),
(698, 'Revital 32', 7, 9.5, 'pcs', 'ACI Limited', 1, '2020-03-16 23:23:22', '2020-03-16 23:23:22'),
(699, 'Revital Teen B', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 23:23:33', '2020-03-16 23:23:33'),
(700, 'Revital Teen G', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-16 23:23:47', '2020-03-16 23:23:47'),
(701, 'Rinase 250 mcg/ml', 50, 130.39, 'file', 'ACI Limited', 1, '2020-03-16 23:24:18', '2020-03-16 23:24:18'),
(702, 'Risomax 1 mg', 7, 3, 'pcs', 'ACI Limited', 1, '2020-03-16 23:24:48', '2020-03-16 23:24:48'),
(703, 'Risomax 2 mg', 7, 5, 'pcs', 'ACI Limited', 1, '2020-03-16 23:25:06', '2020-03-16 23:25:06'),
(704, 'Risomax 4 mg', 7, 9, 'pcs', 'ACI Limited', 1, '2020-03-16 23:25:20', '2020-03-16 23:25:20'),
(705, 'Ritch 30 mg', 58, 3, 'pcs', 'ACI Limited', 1, '2020-03-16 23:25:37', '2020-03-16 23:25:37'),
(706, 'Ritch 60 mg', 7, 5.04, 'pcs', 'ACI Limited', 1, '2020-03-16 23:25:52', '2020-03-16 23:25:52'),
(707, 'Ritch 120 mg', 7, 8, 'pcs', 'ACI Limited', 1, '2020-03-16 23:26:16', '2020-03-16 23:26:16'),
(708, 'Ritch 180 mg', 7, 10, 'pcs', 'ACI Limited', 1, '2020-03-16 23:26:31', '2020-03-16 23:26:31'),
(709, 'Ritch 30 mg/5 ml 50 ml bottle', 8, 48.14, 'file', 'ACI Limited', 1, '2020-03-16 23:26:48', '2020-03-17 13:04:55'),
(710, 'Ritopar 10 mg', 7, 8.02, 'pcs', 'ACI Limited', 1, '2020-03-16 23:27:08', '2020-03-16 23:27:08'),
(711, 'Ritopar IV/IM 50 mg/5 ml', 13, 70, 'pcs', 'ACI Limited', 1, '2020-03-16 23:27:33', '2020-03-17 13:02:18'),
(712, 'Rivaban 10 mg', 7, 22.5, 'pcs', 'ACI Limited', 1, '2020-03-16 23:28:03', '2020-03-16 23:28:03'),
(713, 'Rivaban 20 mg', 7, 45, 'pcs', 'ACI Limited', 1, '2020-03-16 23:28:17', '2020-03-16 23:28:17'),
(714, 'Rivaban 2.5 mg', 7, 8, 'pcs', 'ACI Limited', 1, '2020-03-16 23:28:36', '2020-03-16 23:28:36'),
(715, 'Ropenia 30 MU/0.5 ml IV/SC', 13, 3400, 'pcs', 'ACI Limited', 1, '2020-03-16 23:30:11', '2020-03-17 12:58:21'),
(716, 'Rosatan 25 mg', 7, 3.52, 'pcs', 'ACI Limited', 1, '2020-03-16 23:30:32', '2020-03-16 23:30:32'),
(717, 'Rosatan 50 mg', 7, 6.04, 'pcs', 'ACI Limited', 1, '2020-03-16 23:30:56', '2020-03-16 23:30:56'),
(718, 'Rosatan H 50 mg+12.5 mg', 7, 5, 'pcs', 'ACI Limited', 1, '2020-03-16 23:31:18', '2020-03-16 23:31:18'),
(719, 'Rosetor 5 mg', 7, 10.03, 'pcs', 'ACI Limited', 1, '2020-03-16 23:31:30', '2020-03-16 23:31:30'),
(720, 'Rosetor 10 mg', 7, 18.05, 'pcs', 'ACI Limited', 1, '2020-03-16 23:31:46', '2020-03-16 23:31:46'),
(721, 'Rosetor 20 mg', 7, 30, 'pcs', 'ACI Limited', 1, '2020-03-16 23:32:05', '2020-03-16 23:32:05'),
(722, 'Rotacal 400 mg', 7, 8, 'pcs', 'ACI Limited', 1, '2020-03-16 23:32:29', '2020-03-16 23:32:29'),
(723, 'Rotacal Max 740 mg', 7, 12, 'pcs', 'ACI Limited', 1, '2020-03-16 23:32:52', '2020-03-16 23:32:52'),
(724, 'Rotarac 0.09%', 12, 110, 'file', 'ACI Limited', 1, '2020-03-16 23:33:12', '2020-03-16 23:33:12'),
(725, 'Rotarac LS 0.07%', 12, 90, 'file', 'ACI Limited', 1, '2020-03-16 23:33:29', '2020-03-16 23:33:29'),
(726, 'Rovidone 5%', 12, 82.17, 'pcs', 'ACI Limited', 1, '2020-03-16 23:33:46', '2020-03-17 12:51:47'),
(727, 'Sapotor 1.15 gm', 31, 3, 'pcs', 'ACI Limited', 1, '2020-03-17 14:41:25', '2020-03-17 14:41:25'),
(728, 'Sasolin MR 0.4 mg', 6, 10.07, 'pcs', 'ACI Limited', 1, '2020-03-17 14:41:49', '2020-03-17 14:41:49'),
(729, 'Savlon 0.3% + 3% (56ml)', 16, 15, 'file', 'ACI Limited', 1, '2020-03-17 14:43:06', '2020-03-17 14:43:06'),
(730, 'Savlon 0.3% + 3% (112ml)', 16, 23, 'file', 'ACI Limited', 1, '2020-03-17 14:43:19', '2020-03-17 14:43:19'),
(731, 'Savlon 0.3% + 3% (1liter)', 16, 110, 'file', 'ACI Limited', 1, '2020-03-17 14:43:46', '2020-03-17 14:43:46'),
(732, 'Savlon 0.3% + 3% (5liter)', 16, 402.71, 'file', 'ACI Limited', 1, '2020-03-17 14:44:20', '2020-03-17 14:44:20'),
(733, 'Savlon 0.1% + 0.5%(30 gm)', 23, 22, 'file', 'ACI Limited', 1, '2020-03-17 14:45:22', '2020-03-17 14:45:22'),
(734, 'Savlon 0.1% + 0.5%(60 gm)', 23, 30, 'file', 'ACI Limited', 1, '2020-03-17 14:45:41', '2020-03-17 14:45:41'),
(735, 'Savlon 1.5% + 15% (5liter)', 16, 1415, 'file', '1415.00', 1, '2020-03-17 14:46:28', '2020-03-17 14:46:28'),
(736, 'Serontin 250 mg/5 ml', 9, 130.39, 'file', 'ACI Limited', 1, '2020-03-17 14:48:07', '2020-03-17 14:48:07'),
(737, 'Seroxyn (25 mcg+125 mcg)/puff', 19, 596.79, 'file', 'ACI Limited', 1, '2020-03-17 14:48:29', '2020-03-17 14:48:29'),
(738, 'Seroxyn (25 mcg+250 mcg)/puff', 19, 797.39, 'file', 'ACI Limited', 1, '2020-03-17 14:48:50', '2020-03-17 14:48:50'),
(739, 'Seroxyn (25 mcg+250 mcg)/puff (refill)', 19, 700, 'file', 'ACI Limited', 1, '2020-03-17 14:49:39', '2020-03-17 14:50:49'),
(740, 'Seroxyn (25 mcg+125 mcg)/puff  (refill)', 19, 500, 'file', 'ACI Limited', 1, '2020-03-17 14:50:25', '2020-03-17 14:50:25'),
(741, 'Seroxyn (DPI) 50 mcg+100 mcg', 61, 4.86, 'pcs', 'ACI Limited', 1, '2020-03-17 14:51:24', '2020-03-17 22:21:49'),
(742, 'Seroxyn (DPI)  50 mcg+250 mcg', 61, 9.23, 'pcs', 'ACI Limited', 1, '2020-03-17 14:51:46', '2020-03-17 22:21:09'),
(743, 'Seroxyn (DPI) 50 mcg+500 mcg', 61, 15.05, 'pcs', 'ACI Limited', 1, '2020-03-17 14:52:11', '2020-03-17 22:20:31'),
(744, 'Seroxyn HFA (25 mcg+50 mcg)/puff', 19, 520, 'pcs', 'ACI Limited', 1, '2020-03-17 14:52:36', '2020-03-17 14:52:51'),
(745, 'Seroxyn HFA (25 mcg+250 mcg)/puff', 19, 797.39, 'file', 'ACI Limited', 1, '2020-03-17 14:53:16', '2020-03-17 14:53:16'),
(746, 'Sezol DS 1 gm', 7, 17.05, 'pcs', 'ACI Limited', 1, '2020-03-17 14:54:03', '2020-03-17 14:54:03'),
(747, 'Sibalyn 1% (25gm)', 23, 40.12, 'file', 'ACI Limited', 1, '2020-03-17 14:54:35', '2020-03-17 14:54:35'),
(748, 'Simet 67 mg/ml (15ml)', 10, 30.2, 'file', 'ACI Limited', 1, '2020-03-17 14:55:05', '2020-03-17 14:55:05'),
(749, 'Sintel 200 mg/5 ml 10 ml bottle', 8, 20.06, 'file', 'ACI Limited', 1, '2020-03-17 14:55:27', '2020-03-17 22:10:31'),
(750, 'Sintel 400 mg', 44, 5.02, 'pcs', 'ACI Limited', 1, '2020-03-17 14:55:49', '2020-03-17 14:55:49'),
(751, 'Sitap 50 mg', 7, 15.05, 'pcs', 'ACI Limited', 1, '2020-03-17 14:56:20', '2020-03-17 14:56:20'),
(752, 'Sitap 100 mg', 7, 28.08, 'pcs', 'ACI Limited', 1, '2020-03-17 14:56:37', '2020-03-17 14:56:37'),
(753, 'Sitomet 50 mg+1000 mg', 7, 18.05, 'pcs', 'ACI Limited', 1, '2020-03-17 14:56:59', '2020-03-17 14:56:59'),
(754, 'Sitomet 50 mg+500 mg', 7, 16.05, 'pcs', 'ACI Limited', 1, '2020-03-17 14:57:17', '2020-03-17 14:57:17'),
(755, 'Skinabin250 mg', 7, 40, 'pcs', 'ACI Limited', 1, '2020-03-17 14:57:33', '2020-03-17 14:57:33'),
(756, 'Skinabin 1% (5gm)', 23, 35, 'file', 'ACI Limited', 1, '2020-03-17 14:58:16', '2020-03-17 14:58:16'),
(757, 'Skinabin 1% (15gm)', 23, 65, 'file', 'ACI Limited', 1, '2020-03-17 14:58:37', '2020-03-17 14:58:37'),
(758, 'Skinalar 0.025% (5gm)', 23, 38.12, 'file', 'ACI Limited', 1, '2020-03-17 14:59:05', '2020-03-17 14:59:05'),
(759, 'Skinalar  0.025% (5gm)', 24, 38.12, 'file', 'ACI Limited', 1, '2020-03-17 14:59:53', '2020-03-17 14:59:53'),
(760, 'Skinalar-N 0.025% + 0.5% (5gm)', 23, 40.12, 'file', 'ACI Limited', 1, '2020-03-17 15:00:24', '2020-03-17 15:00:24'),
(761, 'Skinalar-N 0.025% + 0.5%  (5gm)', 24, 40.12, 'file', 'ACI Limited', 1, '2020-03-17 15:01:10', '2020-03-17 15:01:10'),
(762, 'Sodival CR 133.2 mg+58 mg', 7, 4, 'pcs', 'ACI Limited', 1, '2020-03-17 15:02:19', '2020-03-17 15:02:19'),
(763, 'Sodival CR 199.8 mg+87 mg', 7, 6, 'pcs', 'ACI Limited', 1, '2020-03-17 15:02:48', '2020-03-17 15:02:48'),
(764, 'Sodival CR 333 mg+500 mg', 7, 10, 'pcs', 'ACI Limited', 1, '2020-03-17 15:03:07', '2020-03-17 15:03:07'),
(765, 'Sofomax 400 mg', 7, 700, 'pcs', 'ACI Limited', 1, '2020-03-17 15:03:27', '2020-03-17 15:03:27'),
(766, 'Sofomax Duo 90 mg+400 mg', 7, 1000, 'pcs', 'ACI Limited', 1, '2020-03-17 15:03:53', '2020-03-17 15:03:53'),
(767, 'Solone  10 mg', 7, 3.23, 'pcs', 'ACI Limited', 1, '2020-03-17 15:04:31', '2020-03-17 15:04:31'),
(768, 'Solone 20 mg', 7, 6.27, 'pcs', 'ACI Limited', 1, '2020-03-17 15:04:57', '2020-03-17 15:04:57'),
(769, 'Solone 5 mg', 7, 1.72, 'pcs', 'ACI Limited', 1, '2020-03-17 15:05:19', '2020-03-17 15:05:19'),
(770, 'Solone 5 mg/5 ml (50ml)', 21, 65, 'file', 'ACI Limited', 1, '2020-03-17 15:05:55', '2020-03-17 15:05:55'),
(771, 'Solone 5 mg/5 ml (100ml)', 21, 95, 'file', 'ACI Limited', 1, '2020-03-17 15:06:16', '2020-03-17 15:06:16'),
(772, 'Soritec 10 mg', 6, 45.14, 'pcs', 'ACI Limited', 1, '2020-03-17 15:06:36', '2020-03-17 15:06:36'),
(773, 'Soritec 25 mg', 6, 85.26, 'pcs', 'ACI Limited', 1, '2020-03-17 15:07:02', '2020-03-17 15:07:02'),
(774, 'Steradin HFA 100 mcg/puff', 19, 271.84, 'file', 'ACI Limited', 1, '2020-03-17 15:07:40', '2020-03-17 15:07:40'),
(775, 'Steradin HFA 250 mcg/puff', 19, 352.38, 'file', 'ACI Limited', 1, '2020-03-17 15:07:59', '2020-03-17 15:07:59'),
(776, 'Suvorest 10 mg', 7, 35, 'pcs', 'ACI Limited', 1, '2020-03-17 15:08:15', '2020-03-17 15:08:15'),
(777, 'Systop 2% w/w (10gm)', 24, 140.42, 'file', 'ACI Limited', 1, '2020-03-17 15:08:54', '2020-03-17 15:08:54'),
(778, 'Tasti 6 mg+200 mg+50 mg', 7, 2.5, 'pcs', 'ACI Limited', 1, '2020-03-17 15:10:54', '2020-03-17 15:10:54'),
(779, 'Tazosyn IV 2 gm+0.25 gm', 30, 601.8, 'file', 'ACI Limited', 1, '2020-03-17 15:13:10', '2020-03-17 15:13:10'),
(780, 'Tazosyn IV 4 gm+0.5 gm', 30, 1003.01, 'file', 'ACI Limited', 1, '2020-03-17 15:14:31', '2020-03-17 15:14:31'),
(781, 'Tenocab 5 mg+25 mg', 7, 5.27, 'pcs', 'ACI Limited', 1, '2020-03-17 15:14:47', '2020-03-17 15:14:47'),
(782, 'Tenocab 5 mg+50 mg', 7, 6.02, 'pcs', 'ACI Limited', 1, '2020-03-17 15:15:08', '2020-03-17 15:15:08'),
(783, 'Tenoren 50 mg', 7, 0.77, 'pcs', 'ACI Limited', 1, '2020-03-17 15:15:39', '2020-03-17 15:15:39'),
(784, 'Tenoren 100 mg', 7, 1.38, 'pcs', 'ACI Limited', 1, '2020-03-17 15:16:01', '2020-03-17 15:16:01'),
(785, 'Tenoren 25 mg', 7, 0.45, 'pcs', 'ACI Limited', 1, '2020-03-17 15:16:16', '2020-03-17 15:16:16'),
(786, 'Tenoren Plus 50 mg+25 mg', 7, 3.02, 'pcs', 'ACI Limited', 1, '2020-03-17 15:16:35', '2020-03-17 15:16:35'),
(787, 'Teolex SR 200 mg', 7, 1.5, 'pcs', 'ACI Limited', 1, '2020-03-17 15:16:55', '2020-03-17 15:16:55'),
(788, 'Testoren IM 250 mg/ml', 13, 174, 'file', 'ACI Limited', 1, '2020-03-17 15:17:41', '2020-03-17 15:17:41'),
(789, 'Tetrasol', 16, 68.2, 'file', 'ACI Limited', 1, '2020-03-17 15:18:07', '2020-03-17 15:18:07'),
(790, 'Teviral 0.5 mg', 7, 48.32, 'pcs', 'ACI Limited', 1, '2020-03-17 15:18:23', '2020-03-17 15:18:23'),
(791, 'Teviral 1 mg', 7, 100.3, 'pcs', 'ACI Limited', 1, '2020-03-17 15:18:40', '2020-03-17 15:18:40'),
(792, 'Thiopen IV 1 gm/vial', 13, 100.68, 'file', 'ACI Limited', 1, '2020-03-17 15:19:21', '2020-03-17 15:19:21'),
(793, 'Thiopen IV 500 mg/vial', 13, 70.05, 'file', 'ACI Limited', 1, '2020-03-17 15:20:11', '2020-03-17 15:20:11'),
(794, 'Tiotrop 18 mcg', 6, 8, 'pcs', 'ACI Limited', 1, '2020-03-17 15:20:29', '2020-03-17 15:20:29'),
(795, 'Tioxil  Eye', 6, 10, 'pcs', 'ACI Limited', 1, '2020-03-17 15:21:18', '2020-03-17 15:21:18'),
(796, 'Tivion 2.5 mg', 7, 20.06, 'pcs', 'ACI Limited', 1, '2020-03-17 15:21:34', '2020-03-17 15:21:34'),
(797, 'Tizadin 2 mg', 7, 5.04, 'pcs', 'ACI Limited', 1, '2020-03-17 15:21:55', '2020-03-17 15:21:55'),
(798, 'Trena 0.025% (10gm)', 14, 44.95, 'pcs', 'ACI Limited', 1, '2020-03-17 15:22:30', '2020-03-17 15:22:30'),
(799, 'Tricalm 2 mg', 7, 5, 'pcs', 'ACI Limited', 1, '2020-03-17 15:22:52', '2020-03-17 15:22:52'),
(800, 'Tricalm 5 mg', 7, 10, 'pcs', 'ACI Limited', 1, '2020-03-17 15:23:10', '2020-03-17 15:23:10'),
(801, 'Tridopa 50 mg+12.5 mg +200 mg', 7, 15.05, 'pcs', 'ACI Limited', 1, '2020-03-17 15:23:29', '2020-03-17 15:23:29'),
(802, 'Tridopa 100 mg+25 mg+200 mg', 7, 25.08, 'pcs', 'ACI Limited', 1, '2020-03-17 15:23:44', '2020-03-17 15:23:44'),
(803, 'Tridopa 150 mg+37.5 mg+200 mg', 7, 30.09, 'pcs', 'ACI Limited', 1, '2020-03-17 15:24:11', '2020-03-17 15:24:11'),
(804, 'Tridopa 200 mg+50 mg+200 mg', 7, 40.12, 'pcs', 'ACI Limited', 1, '2020-03-17 15:24:29', '2020-03-17 15:24:29'),
(805, 'Tynium 50 mg', 7, 8, 'pcs', 'ACI Limited', 1, '2020-03-17 15:24:50', '2020-03-17 15:24:50'),
(806, 'Tynium 10 mg/5 ml 100 ml bottle', 9, 88, 'pcs', 'ACI Limited', 1, '2020-03-17 15:25:10', '2020-03-17 21:56:13'),
(807, 'Tynium IM/IV 5 mg/2 ml', 13, 17.6, 'file', 'ACI Limited', 1, '2020-03-17 15:26:32', '2020-03-17 15:26:32'),
(808, 'Tyroid 50 mcg', 7, 1.35, 'pcs', 'ACI Limited', 1, '2020-03-17 15:26:52', '2020-03-17 15:26:52'),
(809, 'Vave 10 mg', 7, 2.5, 'pcs', 'ACI Limited', 1, '2020-03-17 15:27:27', '2020-03-17 15:27:27'),
(810, 'Vave 5 mg/5 ml (60ml)', 8, 35.11, 'file', 'ACI Limited', 1, '2020-03-17 15:27:59', '2020-03-17 15:27:59'),
(811, 'Vave 5 mg/5 ml (100ml)', 8, 40.12, 'file', 'ACI Limited', 1, '2020-03-17 15:28:17', '2020-03-17 15:28:17'),
(812, 'Vave 5 mg/ml (15ml)', 10, 25.08, 'file', 'ACI Limited', 1, '2020-03-17 15:28:45', '2020-03-17 15:28:45'),
(813, 'Viscon 15%+10% 20 gm', 23, 40.27, 'pcs', 'ACI Limited', 1, '2020-03-17 15:29:05', '2020-03-17 21:53:40'),
(814, 'Viscon 30%+8% (20gm)', 23, 60.41, 'file', 'ACI Limited', 1, '2020-03-17 15:29:33', '2020-03-17 15:29:33'),
(815, 'Xantid 150 mg', 7, 2.51, 'pcs', 'ACI Limited', 1, '2020-03-17 15:34:09', '2020-03-17 15:34:09'),
(816, 'Xantid 50 mg/2 ml', 13, 7.55, 'file', 'ACI Limited', 1, '2020-03-17 15:34:50', '2020-03-17 15:34:50'),
(817, 'Xcel 500 mg', 7, 0.8, 'pcs', 'ACI Limited', 1, '2020-03-17 15:37:52', '2020-03-17 15:37:52'),
(818, 'Xcel 120 mg/5 ml (60ml)', 8, 20.7, 'file', 'ACI Limited', 1, '2020-03-17 15:38:18', '2020-03-17 15:38:18'),
(819, 'Xcel  120 mg/5 ml (60ml)', 59, 20.7, 'file', 'ACI Limited', 1, '2020-03-17 15:39:14', '2020-03-17 15:39:14'),
(820, 'Xcel  120 mg/5 ml (100ml)', 9, 31.87, 'file', 'ACI Limited', 1, '2020-03-17 15:39:32', '2020-03-17 15:39:32'),
(821, 'Xcel 80 mg/ml (15ml)', 10, 12.35, 'file', 'ACI Limited', 1, '2020-03-17 15:40:05', '2020-03-17 15:40:05'),
(822, 'Xcel 250 mg', 31, 5, 'pcs', 'ACI Limited', 1, '2020-03-17 15:40:44', '2020-03-17 15:40:44'),
(823, 'Xcel 125 mg', 31, 4, 'pcs', 'ACI Limited', 1, '2020-03-17 15:41:27', '2020-03-17 15:41:27'),
(824, 'Xcel  500 mg', 31, 8, 'pcs', 'ACI Limited', 1, '2020-03-17 15:42:00', '2020-03-17 15:42:00'),
(825, 'Xcel ER 665 mg', 7, 1.5, 'pcs', 'ACI Limited', 1, '2020-03-17 15:42:23', '2020-03-17 15:42:23'),
(826, 'Xcel Max 325 mg+37.5 mg', 7, 8.02, 'pcs', 'ACI Limited', 1, '2020-03-17 15:42:54', '2020-03-17 15:42:54'),
(827, 'Xcel Plus 500 mg+65 mg', 7, 2.35, 'pcs', 'ACI Limited', 1, '2020-03-17 15:43:12', '2020-03-17 15:43:12'),
(828, 'Xeldrin 10 mg', 6, 2.02, 'pcs', 'ACI Limited', 1, '2020-03-17 15:43:33', '2020-03-17 15:43:33'),
(829, 'Xeldrin 20 mg', 6, 5.02, 'pcs', 'ACI Limited', 1, '2020-03-17 15:43:54', '2020-03-17 15:43:54'),
(830, 'Xeldrin 40 mg', 6, 8.02, 'pcs', 'ACI Limited', 1, '2020-03-17 15:44:10', '2020-03-17 15:44:10'),
(831, 'Xeldrin IV 40 mg', 13, 80.24, 'pcs', 'ACI Limited', 1, '2020-03-17 15:44:53', '2020-03-17 21:50:44'),
(832, 'Xytrex 5 mg', 7, 2.52, 'pcs', 'ACI Limited', 1, '2020-03-17 15:45:14', '2020-03-17 15:45:14'),
(833, 'Xytrex 10 mg', 7, 4.53, 'pcs', 'ACI Limited', 1, '2020-03-17 15:45:30', '2020-03-17 15:45:30'),
(834, 'Zepam 3 mg', 7, 5.02, 'pcs', 'ACI Limited', 1, '2020-03-17 15:46:02', '2020-03-17 15:46:02'),
(835, 'Zitum IM/IV 250 mg', 13, 70.47, 'pcs', 'ACI Limited', 1, '2020-03-17 15:46:54', '2020-03-17 21:48:46'),
(836, 'Zitum IM/IV 500mg', 13, 115.78, 'file', 'ACI Limited', 1, '2020-03-17 15:47:27', '2020-03-17 21:48:05'),
(837, 'Zitum IM/IV 1 gm', 13, 226.53, 'file', 'ACI Limited', 1, '2020-03-17 15:47:51', '2020-03-17 21:47:12'),
(838, 'Zocort 1% (15gm)', 23, 38.25, 'file', 'ACI Limited', 1, '2020-03-17 15:48:17', '2020-03-17 15:48:17'),
(839, 'Ace 500 mg', 7, 0.8, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:21:56', '2020-03-17 21:21:56'),
(840, 'Ace 120 mg/5 ml (100ml)', 9, 31.88, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:23:05', '2020-03-17 21:23:05'),
(841, 'Ace 80 mg/ml', 10, 20.7, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:23:27', '2020-03-17 21:23:27'),
(842, 'Ace 125 mg', 31, 4.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:24:31', '2020-03-17 21:24:31'),
(843, 'Ace 250 mg', 31, 5.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:25:11', '2020-03-17 21:25:11'),
(844, 'Ace 120 mg/5 ml (60 ml)', 59, 20.7, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:27:04', '2020-03-17 21:27:04'),
(845, 'Ace  500 mg', 31, 8.06, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:28:45', '2020-03-17 21:28:45'),
(846, 'Ace Plus 500 mg+65 mg', 7, 2.51, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:29:39', '2020-03-17 21:29:39'),
(847, 'Ace XR 665 mg', 7, 1.51, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:30:04', '2020-03-17 21:30:20'),
(848, 'Acetram 325 mg+37.5 mg', 7, 8.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:31:31', '2020-03-17 21:31:31'),
(849, 'Adiva 600 mg', 7, 200.75, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:32:07', '2020-03-17 21:32:07'),
(850, 'Adryl 10 mg/5 ml', 9, 40.13, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:32:34', '2020-03-17 21:32:34'),
(851, 'Afun 1%', 23, 35.11, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:32:52', '2020-03-17 21:32:52'),
(852, 'Afun VT 200 mg', 7, 20.06, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:33:24', '2020-03-17 21:33:24'),
(853, 'Alacot 0.1%', 12, 110.34, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:34:16', '2020-03-17 21:35:07'),
(854, 'Alacot DS 0.2%', 12, 175, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:35:22', '2020-03-17 21:35:22'),
(855, 'Alacot Max 0.7%', 12, 230, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:35:49', '2020-03-17 21:35:49'),
(856, 'Alarid 0.025%', 12, 100.3, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:36:13', '2020-03-17 21:36:13'),
(857, 'Alarid 1 mg', 7, 2.5, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:37:08', '2020-03-17 21:37:08'),
(858, 'Alarid 1 mg/5 ml', 9, 55, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:37:30', '2020-03-17 21:37:30'),
(859, 'Alatrol 10 mg', 59, 3.01, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:38:15', '2020-03-17 21:38:15'),
(860, 'Alatrol 5 mg/5 ml', 9, 30.1, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:43:41', '2020-03-17 21:44:12'),
(861, 'Alatrol 2.5 mg/ml', 10, 25.08, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:44:03', '2020-03-17 21:44:03'),
(862, 'Alice 0.5%', 25, 130, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:45:47', '2020-03-17 21:45:47'),
(863, 'Almex 200 mg/5 ml', 8, 20, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:46:08', '2020-03-17 21:46:08'),
(864, 'Almex 400 mg', 7, 5.02, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:46:28', '2020-03-17 21:46:28'),
(865, 'Ambrisan 5 mg', 7, 40.13, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:46:57', '2020-03-17 21:46:57'),
(866, 'Ambrox 15 mg/5 ml', 9, 50, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:47:14', '2020-03-17 21:47:14'),
(867, 'Ambrox 6 mg/ml', 10, 35, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:47:40', '2020-03-17 21:47:40'),
(868, 'Ambrox SR 75 mg', 6, 5.5, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:48:02', '2020-03-17 21:48:02'),
(869, 'Amistar 100 mg/2 ml', 13, 16.05, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:48:24', '2020-03-17 21:48:24'),
(870, 'Amistar 500 mg/2 ml', 13, 48.14, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:49:01', '2020-03-17 21:49:01'),
(871, 'Amodis 400 mg', 7, 1.27, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:49:19', '2020-03-17 21:49:19'),
(872, 'Amodis 500 mg', 7, 1.91, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:49:35', '2020-03-17 21:49:35'),
(873, 'Amodis 200 mg/5 ml', 8, 29.89, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:49:52', '2020-03-17 21:49:52'),
(874, 'Amodis IV 500 mg/100 ml', 30, 53.56, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:50:27', '2020-03-17 21:50:27'),
(875, 'Amodis 200 mg', 7, 1.01, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:51:02', '2020-03-17 21:51:02'),
(876, 'Anadol 50 mg', 6, 8.07, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:51:58', '2020-03-17 21:51:58'),
(877, 'Anadol IM/IV 100 mg/2 ml', 13, 20.14, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:52:28', '2020-03-17 21:52:28'),
(878, 'Anadol', 31, 15.1, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:52:56', '2020-03-17 21:52:56'),
(879, 'Anadol SR 100 mg', 6, 12.09, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:53:19', '2020-03-17 21:53:19'),
(880, 'Anclog 75 mg', 7, 12.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:53:44', '2020-03-17 21:53:44'),
(881, 'Anclog Plus 75 mg+75 mg', 7, 12.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:54:05', '2020-03-17 21:54:05'),
(882, 'Anema (7 gm+19 gm)/118 ml', 60, 250, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:54:52', '2020-03-17 21:54:52'),
(883, 'Anespine Intraspinal 0.5% + 8%', 13, 30.2, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:55:18', '2020-03-17 21:55:18'),
(884, 'Angilock 25 mg', 7, 4.51, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:55:35', '2020-03-17 21:55:35'),
(885, 'Angilock 50 mg', 7, 8.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:56:01', '2020-03-17 21:56:01'),
(886, 'Angilock 100 mg', 7, 12.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:56:22', '2020-03-17 21:56:22'),
(887, 'Angilock Plus 50 mg+12.5 mg', 7, 8.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:56:42', '2020-03-17 21:56:42'),
(888, 'Angilock Plus 100 mg+12.5 mg', 9, 12, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:58:09', '2020-03-17 21:58:09'),
(889, 'Angilock Plus 100 mg+25 mg', 7, 12.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:58:27', '2020-03-17 21:58:27'),
(890, 'Angivent MR 35 mg', 7, 8, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:59:02', '2020-03-17 21:59:02'),
(891, 'Anleptic 100 mg/5 ml', 9, 300.9, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:59:20', '2020-03-17 21:59:54'),
(892, 'Anleptic CR 200 mg', 7, 6.02, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 21:59:40', '2020-03-17 21:59:40'),
(893, 'Anril Sublingual 0.50 mg', 7, 3.01, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:00:30', '2020-03-17 22:00:30'),
(894, 'Anril 400 mcg/spray', 57, 216.45, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:00:51', '2020-03-17 22:00:51'),
(895, 'Anril 5 mg/ml', 60, 75.5, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:02:04', '2020-03-17 22:02:04'),
(896, 'Anril SR 2.6 mg', 7, 5, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:02:32', '2020-03-17 22:02:32'),
(897, 'Ansulin SC 30%+70% in 40 IU/ml', 13, 195, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:02:58', '2020-03-17 22:02:58'),
(898, 'Ansulin SC 30%+70% in 100 IU/ml', 13, 415, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:03:18', '2020-03-17 22:03:18'),
(899, 'Ansulin SC  30%+70% in 100 IU/ml', 13, 222, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:03:52', '2020-03-17 22:03:52'),
(900, 'Ansulin SC 50%+50% in 100 IU/ml', 13, 415, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:04:17', '2020-03-17 22:04:17'),
(901, 'Ansulin SC  50%+50% in 100 IU/ml', 13, 222, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:04:40', '2020-03-17 22:04:40'),
(902, 'Ansulin N SC 100 IU/ml', 13, 415, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:05:04', '2020-03-17 22:05:04'),
(903, 'Ansulin R SC 40 IU/ml', 13, 195, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:05:25', '2020-03-17 22:05:25'),
(904, 'Ansulin R SC 100 IU/ml', 13, 415, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:05:41', '2020-03-17 22:05:41'),
(905, 'Ansulin R SC  100 IU/ml', 13, 220, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:06:14', '2020-03-17 22:06:14'),
(906, 'AnsuPen 3 ml', 7, 700, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:06:31', '2020-03-17 22:06:31'),
(907, 'Antazol 0.05%', 18, 11.04, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:07:10', '2020-03-17 22:07:10'),
(908, 'Antazol 0.1%', 18, 11.55, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:07:35', '2020-03-17 22:07:35'),
(909, 'Antazol Plus (2.6 mg+0.0325 mg)/spray', 17, 110.5, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:07:59', '2020-03-17 22:07:59'),
(911, 'Antista 2 mg/5 ml', 9, 21.85, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:08:25', '2020-03-17 22:08:25'),
(912, 'Antiva 10 mg', 7, 35.24, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:08:43', '2020-03-17 22:08:43'),
(913, 'Anzitor 10 mg', 7, 12, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:09:04', '2020-03-17 22:09:04'),
(914, 'Anzitor 40 mg', 7, 28, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:09:20', '2020-03-17 22:09:20'),
(915, 'Anzitor 20 mg', 60, 20, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:09:35', '2020-03-17 22:09:35'),
(916, 'Apsol 5%', 15, 75.5, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:10:07', '2020-03-17 22:10:07'),
(917, 'Ariprex 2 mg', 7, 2, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:10:26', '2020-03-17 22:10:26'),
(918, 'Ariprex 10 mg', 7, 5, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:10:43', '2020-03-17 22:10:43'),
(919, 'Ariprex 5 mg/5 ml', 21, 75, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:11:09', '2020-03-17 22:11:09'),
(920, 'Ariprex 15 mg', 7, 7, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:11:27', '2020-03-17 22:11:27'),
(921, 'Asynta 500 mg+100 mg', 44, 3.5, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:12:12', '2020-03-17 22:12:12');
INSERT INTO `products` (`id`, `product_name`, `category`, `rate`, `unit`, `detail`, `added_by`, `created_at`, `updated_at`) VALUES
(922, 'Asynta (500 mg+100 mg)/5 ml', 8, 150, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:12:38', '2020-03-17 22:12:38'),
(923, 'Avaspray 27.5 mcg/spray', 17, 275, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:12:59', '2020-03-17 22:12:59'),
(924, 'Avudin 150 mg+300 mg', 7, 45.17, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:13:16', '2020-03-17 22:13:16'),
(925, 'B-50 Forte', 6, 1.25, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:16:25', '2020-03-17 22:16:25'),
(926, 'B-50 Forte IM/IV', 13, 10.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:17:20', '2020-03-17 22:17:20'),
(927, 'B-50 Forte (200ml)', 9, 62.19, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:17:58', '2020-03-17 22:17:58'),
(928, 'Bactrocin 2% w/w', 24, 140.42, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:18:23', '2020-03-17 22:18:23'),
(929, 'Barif 40 mg', 7, 12.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:18:47', '2020-03-17 22:18:47'),
(930, 'Barif 80 mg', 60, 22.06, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:20:00', '2020-03-17 22:20:00'),
(931, 'Beclomin 50 mcg/puff', 19, 220.28, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:20:19', '2020-03-17 22:20:19'),
(932, 'Beclomin  100 mcg/puff', 19, 270.82, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:20:38', '2020-03-17 22:20:38'),
(933, 'Beclomin 250 mcg/puff', 19, 320.96, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:21:09', '2020-03-17 22:21:09'),
(934, 'Becospray 50 mcg/spray', 17, 146, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:21:28', '2020-03-17 22:21:28'),
(935, 'Benostar 0.15%', 55, 150, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:21:55', '2020-03-17 22:21:55'),
(936, 'Benzapen 12 lac units/vial', 13, 28.04, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:22:13', '2020-03-17 22:22:13'),
(937, 'Beovit 100 mg', 7, 0.85, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:22:29', '2020-03-17 22:22:29'),
(938, 'Betameson 0.05%', 23, 45, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:22:44', '2020-03-17 22:22:44'),
(939, 'Betameson 0.05% (20gm)', 24, 48, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:23:27', '2020-03-17 22:23:27'),
(940, 'Betameson-CL 0.05%+1%', 23, 45, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:23:55', '2020-03-17 22:23:55'),
(941, 'Betameson-N 0.1% + 0.5%', 23, 35, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:24:15', '2020-03-17 22:24:15'),
(942, 'Bicozin', 7, 3, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:24:28', '2020-03-17 22:24:28'),
(943, 'Bicozin 100 ml', 9, 55, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:25:06', '2020-03-17 22:25:06'),
(944, 'Bicozin 200 ml', 9, 95, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:25:19', '2020-03-17 22:25:19'),
(945, 'Bicozin-I', 9, 50.35, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:25:38', '2020-03-17 22:25:38'),
(946, 'Bimator 0.03%+0.5%', 12, 500, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:26:09', '2020-03-17 22:26:09'),
(947, 'Bisocam 2.5 mg + 5 mg', 7, 6, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:26:23', '2020-03-17 22:26:23'),
(948, 'Bisocor 5 mg', 7, 10.07, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:26:39', '2020-03-17 22:26:39'),
(949, 'Bisocor 2.5 mg', 7, 6.04, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:26:57', '2020-03-17 22:26:57'),
(950, 'Bisocor Plus 2.5 mg+6.25 mg', 7, 6.02, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:27:11', '2020-03-17 22:27:11'),
(951, 'Bisocor Plus 5 mg+6.25 mg', 7, 10.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:27:41', '2020-03-17 22:27:41'),
(952, 'Bonizol IV 5 mg/100 ml', 30, 6000, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:28:26', '2020-03-17 22:28:26'),
(953, 'Brofex 10 mg/5 ml', 9, 40.13, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:28:42', '2020-03-17 22:29:06'),
(954, 'Bromolac 2.5 mg', 7, 12.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:29:01', '2020-03-17 22:29:01'),
(955, 'Bufocort 200 mcg+6 mcg', 56, 9.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:29:59', '2020-03-17 22:29:59'),
(956, 'Bufocort 400 mcg+12 mcg', 56, 14.05, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:30:25', '2020-03-17 22:30:25'),
(957, 'Burna 1%', 23, 60, 'file', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:30:43', '2020-03-17 22:30:43'),
(958, 'Caberol 0.5 mg', 7, 80, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:33:43', '2020-03-17 22:33:43'),
(959, 'Calbo 500 mg', 7, 5, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:34:01', '2020-03-17 22:34:01'),
(960, 'Calbo Forte Effervescent', 7, 8.06, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:34:24', '2020-03-17 22:34:24'),
(961, 'Calbo Jr 250 mg', 44, 3.01, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:34:47', '2020-03-17 22:34:47'),
(962, 'Calbo-C Effervescent 1000 mg+327 mg+500 mg', 7, 7.88, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:35:16', '2020-03-17 22:35:16'),
(963, 'Calbo-D 500 mg+200 IU', 7, 7, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:35:46', '2020-03-17 22:35:46'),
(964, 'Calbo-D Vita 1050 mg+600 mg+400 IU', 7, 15, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:36:07', '2020-03-17 22:36:07'),
(965, 'Calboplex', 7, 5.02, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:36:25', '2020-03-17 22:36:25'),
(966, 'Calboral-D  500 mg+200 IU', 7, 10.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:36:43', '2020-03-17 22:36:43'),
(967, 'Calboral-DX 600 mg + 400 IU', 7, 15, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:37:00', '2020-03-17 22:37:00'),
(968, 'Calborate 400 mg', 7, 8.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:37:31', '2020-03-17 22:37:31'),
(969, 'Calborate 740 mg', 7, 12.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:37:50', '2020-03-17 22:37:50'),
(970, 'Calcitrol 0.25 mcg', 6, 10.03, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:38:04', '2020-03-17 22:38:04'),
(971, 'Camlodin 10 mg', 7, 6.04, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:38:18', '2020-03-17 22:38:18'),
(972, 'Camlodin 5 mg', 7, 5.02, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:38:34', '2020-03-17 22:38:34'),
(973, 'Camlodin Plus 5 mg+25 mg', 7, 5.02, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:39:01', '2020-03-17 22:39:01'),
(974, 'Camlodin Plus 5 mg+50 mg', 7, 6.02, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:39:22', '2020-03-17 22:39:22'),
(975, 'Camlopril 5 mg+10 mg', 6, 6.04, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:39:37', '2020-03-17 22:39:37'),
(976, 'Camlopril 5 mg+20 mg', 6, 7.99, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:39:52', '2020-03-17 22:39:52'),
(977, 'Camlopril 2.5 mg+10 mg', 6, 4, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:40:08', '2020-03-17 22:40:08'),
(978, 'Camlopril 10 mg+20 mg', 6, 9.99, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:40:33', '2020-03-17 22:40:33'),
(979, 'Camlosart 5 mg+20 mg', 7, 12, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:40:52', '2020-03-17 22:40:52'),
(980, 'Camlosart 5 mg+40 mg', 7, 20, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:41:38', '2020-03-17 22:41:38'),
(981, 'Camoval 5 mg+80 mg', 7, 9.06, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:41:52', '2020-03-17 22:41:52'),
(982, 'Camoval 5 mg+160 mg', 7, 16.11, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:42:05', '2020-03-17 22:42:05'),
(983, 'Canaglif 100 mg', 7, 40, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:42:35', '2020-03-17 22:42:35'),
(984, 'Candex 100000 Unit/ml', 8, 46.84, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:42:55', '2020-03-17 22:42:55'),
(985, 'Carbizol 5 mg', 7, 3.01, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:43:17', '2020-03-17 22:43:17'),
(986, 'Carva 75 mg', 7, 0.57, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:43:33', '2020-03-17 22:43:33'),
(987, 'Cavir 0.5 mg', 7, 48.14, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:43:47', '2020-03-17 22:43:47'),
(988, 'Cavir 1 mg', 61, 90.27, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:58:40', '2020-03-17 22:58:40'),
(989, 'Ceevit 250 mg', 44, 1.9, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:58:56', '2020-03-17 22:58:56'),
(990, 'Ceevit DS 500 mg', 44, 3.5, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:59:14', '2020-03-17 22:59:14'),
(991, 'Ceevit Forte 1000 mg', 7, 10.34, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 22:59:41', '2020-03-17 22:59:41'),
(992, 'Cef-3 200 mg', 6, 35.11, 'pcs', 'Square Pharmaceuticals Ltd.', 1, '2020-03-17 23:00:00', '2020-03-17 23:00:00');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'test@admin.com', NULL, '$2y$10$HS0xsjdjZN.BVsF9GuNRqO9RWXid7xHSbXVbHKdwXhbMS7LmHzA3e', 'MLvciOkbCBsdxYaJ3MAXJw03o28DfsU6g9P65P6gsVWqtbQLdWmNNWEgyfS3', '2020-03-09 06:07:23', '2020-03-09 06:07:23'),
(2, 'Raseduz Zaman Rasel', 'rasel06@gmail.com', NULL, '$2y$10$Y6.D0hIQJiiFNC7nrLoTa.vktMzwMS7nKwh/d18WmPa3Nu/F2L70y', NULL, '2020-03-09 17:27:20', '2020-03-09 17:27:20'),
(3, 'Md.Minhaj Hossain', 'js.ph.litu@gmail.com', NULL, '$2y$10$CzS6mGnkDOhyPG7f5XrMReJJ4QHE07MoE8fONLLzOCqNv0DVzjsHO', NULL, '2020-03-09 20:27:26', '2020-03-09 20:27:26'),
(4, 'zaman', 'zstechbd2015@gmail.com', NULL, '$2y$10$QIe0bxKuMivtKwfLkPQ2.eQ4IXKPsO2qoW7awNsq3AyWcy3pCRRrW', NULL, '2020-03-13 16:03:25', '2020-03-13 16:03:25'),
(5, 'A S M NAJMUL ALAM', 'fahimnajmul63@gmail.com', NULL, '$2y$10$eJoXsqTyIzPUsogP0csxkOpa3csM0ps7Nti4AEx8ixSuwN6wCGMIO', NULL, '2020-03-14 09:24:01', '2020-03-14 09:24:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_orders`
--
ALTER TABLE `medicine_orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medicine_orders_order_code_unique` (`order_code`);

--
-- Indexes for table `medicine_order_items`
--
ALTER TABLE `medicine_order_items`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicine_orders`
--
ALTER TABLE `medicine_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine_order_items`
--
ALTER TABLE `medicine_order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=993;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
