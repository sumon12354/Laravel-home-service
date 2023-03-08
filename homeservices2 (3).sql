-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 06:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservices2`
--

-- --------------------------------------------------------

--
-- Table structure for table `addto_carts`
--

CREATE TABLE `addto_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_quantity` int(11) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addto_carts`
--

INSERT INTO `addto_carts` (`id`, `service_id`, `user_id`, `service_quantity`, `price`, `created_at`, `updated_at`) VALUES
(14, 5, 56, 1, 270, NULL, NULL),
(15, 8, 56, 1, 470, NULL, NULL),
(18, 5, 57, 3, 810, NULL, NULL),
(19, 2, 1, 1, 500, NULL, NULL),
(20, 2, 61, 1, 500, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `area_zones`
--

CREATE TABLE `area_zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area_zones`
--

INSERT INTO `area_zones` (`id`, `district_name`, `area_name`, `area_code`, `created_at`, `updated_at`) VALUES
(3, 'Dhaka', 'Mirpur', 'M-1001', NULL, '2023-01-22 11:40:21'),
(4, 'Dhaka', 'Gulshan', 'G-1001', NULL, NULL),
(5, 'Dhaka', 'Dhanmondi', 'D-1001', NULL, NULL),
(6, 'Dhaka', 'Ramna', 'R-1001', NULL, NULL),
(7, 'Dhaka', 'Bonani', 'B-1001', NULL, NULL),
(8, 'Dhaka', 'Paltan', 'P-1001', NULL, NULL),
(9, 'Dhaka', 'Tejgaon', 'T-1001', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categroy_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `categroy_image`, `slug`, `services_count`, `created_at`, `updated_at`) VALUES
(2, 'Beauty', 'upload/1754703080831727.png', 'beauty', '2', NULL, '2023-01-19 00:08:50'),
(3, 'AC', 'upload/1754703314214906.png', 'ac', '4', NULL, '2023-01-22 12:13:55'),
(4, 'Plumbing', 'upload/1754703432250342.png', 'plumbing', '2', NULL, '2023-01-22 12:09:50'),
(5, 'Electrical', 'upload/1754703466042350.png', 'electrical', '4', NULL, '2023-01-22 12:03:51'),
(6, 'Shower Filter', 'upload/1754703516414984.png', 'shower-filter', '0', NULL, NULL),
(7, 'Home Cleaning', 'upload/1754703545390783.png', 'home-cleaning', '1', NULL, '2023-01-22 12:17:38'),
(8, 'Carpentry', 'upload/1754703582005604.png', 'carpentry', '0', NULL, NULL),
(9, 'Pest Control', 'upload/1754703604688077.png', 'pest-control', '0', NULL, NULL),
(10, 'Chimney Hob', 'upload/1754703699250076.png', 'chimney-hob', '0', NULL, NULL),
(11, 'Water Puriffer', 'upload/1754703727719424.png', 'water-puriffer', '0', NULL, NULL),
(12, 'Computer Repair', 'upload/1754703746824785.png', 'computer-repair', '0', NULL, NULL),
(13, 'TV', 'upload/1754703762337213.png', 'tv', '1', NULL, '2023-01-22 11:55:37'),
(14, 'Refrigeration', 'upload/1754703778818304.png', 'refrigeration', '0', NULL, NULL),
(15, 'Geyser', 'upload/1754703822533440.png', 'geyser', '0', NULL, NULL),
(16, 'Car', 'upload/1754703836321980.png', 'car', '0', NULL, NULL),
(17, 'Document', 'upload/1754703851125026.png', 'document', '0', NULL, NULL),
(21, 'Home Automations', 'upload/1755366709890453.png', 'home-automations', '0', NULL, '2023-01-18 07:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collect_amount` int(11) NOT NULL,
  `collect_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `customer_name`, `service_name`, `collect_amount`, `collect_date`, `created_at`, `updated_at`) VALUES
(1, 'saidislam', 'Beauty Combo Offer', 500, '2023-01-21', NULL, '2023-01-22 08:28:36'),
(2, 'Customer', 'Ac Repr', 360, '2023-01-21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `name`, `email`, `phone`, `location`, `message`, `created_at`, `updated_at`) VALUES
(1, 'abusaid', 'abusaidislam7208@gmail.com', '0175588347', 'mirpur', 'please contact as', NULL, NULL),
(2, 'sumon', 'customer@gmail.com', '0178402515', 'mirpur', 'sdfdsafasd', '2023-01-22 21:58:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `COUPON` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DISCOUNT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `START_DATE` date NOT NULL,
  `DESCRIPTION` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SERVICE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DISCOUNT_TYPE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EXPIRE_DATE` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `COUPON`, `DISCOUNT`, `START_DATE`, `DESCRIPTION`, `SERVICE`, `DISCOUNT_TYPE`, `EXPIRE_DATE`, `created_at`, `updated_at`) VALUES
(1, '123123', '20', '2023-01-20', 'sdfsd', 'Beauty Combo Offer', 'PERCENTAGE', '2023-01-20', '2023-01-19 04:00:52', '2023-01-19 04:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `districtzones`
--

CREATE TABLE `districtzones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districtzones`
--

INSERT INTO `districtzones` (`id`, `district_name`, `district_code`, `created_at`, `updated_at`) VALUES
(4, 'Dhaka', 'Dh-1212', NULL, NULL);

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Booking_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_id`, `Booking_id`, `created_at`, `updated_at`) VALUES
(1, '124562', 5985126, '2023-01-21 13:17:27', '2023-01-22 13:17:27'),
(2, '124563', 7534538, '2023-01-21 13:17:27', '2023-01-22 13:17:27');

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
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2023_01_11_043011_create_categories_table', 1),
(21, '2023_01_14_035736_create_sliders_table', 4),
(22, '2023_01_15_055106_create_registrations_table', 5),
(23, '2023_01_16_052437_create_addto_carts_table', 6),
(30, '2023_01_16_135001_create_orders_table', 7),
(32, '2023_01_18_143418_create_districtzones_table', 9),
(35, '2023_01_19_040106_create_area_zones_table', 10),
(37, '2023_01_19_054850_create_services_table', 11),
(38, '2023_01_18_041805_create_coupons_table', 12),
(39, '2023_01_19_160417_add_phone_to_users_table', 13),
(42, '2023_01_21_131212_create_invoices_table', 15),
(43, '2023_01_21_145209_create_collections_table', 16),
(44, '2023_01_22_160527_create_payments_table', 17),
(45, '2023_01_22_165944_create_sproviders_table', 18),
(46, '2023_01_23_031914_create_contactuses_table', 18),
(47, '2023_01_23_151002_create_service__users_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `city_village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `booking_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `booking_id`, `user_id`, `city_village`, `house`, `phone`, `email`, `postal_code`, `service_name`, `service_quantity`, `price`, `booking_status`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 5985126, 1, 'puranapaltan', '1212', 213123, 'nomanabdullah58@yahoo.com', '2423', 'Ac Repr', 1, 360, 'complete', 'complete', '2023-01-18 00:18:36', '2023-01-20 06:55:58'),
(2, 7534538, 1, 'puranapaltan', '1212', 213123, 'nomanabdullah58@yahoo.com', '2423', 'Ac Repr', 1, 270, 'pending', 'pending', '2023-01-18 00:18:36', NULL),
(3, 9375795, 57, 'dhaka', '1212', 123123, 'saidislam7208@gmail.com', '2423', 'Ac Repr', 3, 810, 'pending', 'pending', '2023-01-18 00:22:46', NULL),
(4, 4088757, 61, 'mirpur', '1234', 1755883471, 'said@gmail.com', '1212', 'Beauty Combo Offer', 1, 500, 'complete', 'complete', '2023-01-21 08:03:04', '2023-01-21 08:03:52');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` bigint(20) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `provider_name`, `payment_amount`, `payment_date`, `payment_note`, `created_at`, `updated_at`) VALUES
(2, 'sumon', 290, '2023-01-22', 'bkash', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `image`, `email`, `phone`, `Location`, `service`, `created_at`, `updated_at`) VALUES
(1, 'abusaid', 'upload/1755074163596339.png', 'saidislam7208@gmail.com', '123445464356456', 'dhaka', 'AC', '2023-01-15 01:52:33', '2023-01-15 01:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tage_line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount_price` decimal(8,2) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `inclusion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `category_name`, `service_name`, `slug`, `tage_line`, `price`, `discount_price`, `description`, `inclusion`, `status`, `image`, `thumbnail_image`, `created_at`, `updated_at`) VALUES
(1, 3, 'AC', 'Winter AC Servicingdsf', 'winter-ac-servicingdsf', 'AC ex.sd', '500.00', '30.00', 'asdfasd', 'We are well-equipped and we', 1, 'upload/1755431994450184.jpg', 'upload/1755431994450820.jpg', NULL, '2023-01-19 00:40:07'),
(2, 2, 'Beauty', 'Beauty Combo Offer', 'beauty-combo-offer', 'be', '600.00', '100.00', 'afdasdfasdfadsf', 'asdfas', 1, 'upload/1755430026639162.jpg', 'upload/1755430026639627.jpg', NULL, NULL),
(3, 13, 'TV', 'TV services', 'tv-services', 'tv-se', '500.00', NULL, 'TV services from installation/uninstallation to any sorts of repairing that needed. Our expert technicians will diagnose your TV’s problem and fix it at a reasonable price.', 'TV’s problem and fix it at a reasonable price.', 1, 'upload/1755745339097722.png', 'upload/1755745339100166.png', NULL, NULL),
(4, 5, 'Electrical', 'Ceiling fans installation/uninstallation', 'ceiling-fans-installation/uninstallation', 'fan-in', '400.00', '40.00', 'Ceiling fans are a great way to keep your home comfortable year-round. Nine out of 10 customers wants to fits their needs. At ThatQuick, we work to make fan installation, upgrades, and repairs. Get the best deals on ceiling fan replacement parts.', 'Ceiling fans are a great way to keep your home comfortable year-round.', 1, 'upload/1755745608021601.jpg', 'upload/1755745608022372.jpg', NULL, NULL),
(5, 5, 'Electrical', 'Switch Replacement', 'switch-replacement', 's-r', '300.00', NULL, 'Switch is networking hardware that connects devices on a computer. ThatQuick switches are cost-efficient and meet the need for any size of business.ThatQuick network switches deliver performance and security.', 'Switch is networking hardware that connects devices on a computer.', 1, 'upload/1755745858554712.jpg', 'upload/1755745858603183.jpg', NULL, NULL),
(6, 4, 'Plumbing', 'PLUMBING SERVICE', 'plumbing-service', 'plumbing-s', '400.00', '30.00', 'ThatQuick provides experienced plumbers for any kind of plumbing needs. .', 'Finding the right plumber can be a lot of work but you are just one click away fro', 1, 'upload/1755746235066339.jpg', 'upload/1755746235067280.jpg', NULL, NULL),
(7, 3, 'AC', 'Ac Installtion', 'ac-installtion', 'ac', '300.00', '30.00', 'AC installation/uninstallations, repairing, gas charging and other basic and master AC services.', 'AC installation/uninstallations, repairing, gas charging and other basic and master AC services.', 1, 'upload/1755746492058100.jpg', 'upload/1755746492058814.jpg', NULL, NULL),
(8, 7, 'Home Cleaning', 'home cleaning', 'home-cleaning', 'hc', '400.00', '40.00', 'Cleaning the house can be a tedious task because it requires a lot of time, energy and attention.', 'Cleaning the house can be a tedious task because it requires a lot of time, energy and attention.', 1, 'upload/1755746725354215.jpg', 'upload/1755746725355309.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service__users`
--

CREATE TABLE `service__users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `userid_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'First Slide', 'upload/1755062599215056.jpg', 1, NULL, NULL),
(2, 'Second Slide', 'upload/1755062644353581.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sproviders`
--

CREATE TABLE `sproviders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'CST',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`, `phone`, `area`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$JIxUP08J3UmLRapKL8GZPeYG.eqQDRM3NZ9dBXd0nVYN12Hf2WwAa', 'ADM', NULL, '2023-01-10 23:11:51', '2023-01-10 23:11:51', '', ''),
(59, 'sumon', 'sumon@gmail.com', NULL, '$2y$10$tWQZCRbn9rHs3SHze78ND.z.P8cqMj/as4eSSZEn5/1urJIpuKuRy', 'SVP', NULL, '2023-01-19 10:49:36', '2023-01-19 10:49:36', '0175588347', 'new market'),
(61, 'saidislam', 'said@gmail.com', NULL, '$2y$10$Pedn.DUOQ5zUG8WelQq2e.mbdnqvseSCVgYxKRm4S3BMDe.YDWQJy', 'CST', NULL, '2023-01-21 08:01:49', '2023-01-21 08:01:49', '0175588347', 'new market');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addto_carts`
--
ALTER TABLE `addto_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_zones`
--
ALTER TABLE `area_zones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districtzones`
--
ALTER TABLE `districtzones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registrations_email_unique` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service__users`
--
ALTER TABLE `service__users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sproviders`
--
ALTER TABLE `sproviders`
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
-- AUTO_INCREMENT for table `addto_carts`
--
ALTER TABLE `addto_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `area_zones`
--
ALTER TABLE `area_zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districtzones`
--
ALTER TABLE `districtzones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service__users`
--
ALTER TABLE `service__users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sproviders`
--
ALTER TABLE `sproviders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
