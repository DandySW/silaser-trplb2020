-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 05:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silaser_trpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `users_id`, `products_id`, `quantity`, `session_id`, `created_at`, `updated_at`) VALUES
(60, 6, 34, 2, 'xUyTOgFKZ9SVUjGtWoJP0UJioDVpcqfLajXQyfJh', '2020-11-18 07:10:47', '2020-11-18 07:10:47'),
(59, 4, 32, 1, 'Vvyqs9HFisOP2LS1m5s9wyfnK5LlGIQGLiGrVs1b', '2020-11-18 03:06:23', '2020-11-18 03:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(12, 'Car', '2018-10-22 21:32:33', '2018-11-16 02:00:00'),
(10, 'House', '2018-10-22 21:31:29', '2018-11-16 02:05:53'),
(11, 'Shoes', '2018-10-22 21:32:14', '2018-11-16 02:07:15'),
(13, 'Computer', '2018-10-22 21:33:26', '2018-11-16 02:05:43'),
(14, 'Cloths', '2018-10-22 21:34:31', '2018-11-16 02:05:18'),
(15, 'Toyota', '2018-10-22 21:35:08', '2018-11-16 01:54:49'),
(16, 'Link House', '2018-10-22 21:56:56', '2018-11-16 02:07:05'),
(17, 'Man Shoes', '2018-10-22 21:58:13', '2018-11-16 01:53:44'),
(25, 'nasi ayam', '2020-11-09 07:06:20', '2020-11-09 07:06:41'),
(26, 'jamur tiram', '2020-11-09 07:38:44', '2020-11-09 07:38:56'),
(27, 'bebek a', '2020-11-18 19:51:34', '2020-11-18 20:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `amount`, `amount_type`, `expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Coupon001', 10, 'Persentase', '2021-12-06', 1, '2018-12-05 20:19:15', '2018-12-05 20:19:15'),
(7, '50persen', 50, 'Persentase', '2020-12-31', 1, '2020-11-18 21:06:41', '2020-11-18 21:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `expeditions`
--

CREATE TABLE `expeditions` (
  `id` int(11) NOT NULL,
  `expedition_name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `estimation` varchar(30) NOT NULL,
  `base_charge` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expeditions`
--

INSERT INTO `expeditions` (`id`, `expedition_name`, `type`, `estimation`, `base_charge`, `created_at`, `updated_at`) VALUES
(1, 'Pos Indonesia', 'Express Next Day', '1-2 hari', 10, '2020-11-15 06:39:23', NULL),
(2, 'J&T Express', 'EZ', '2-3 hari', 7, '2020-11-15 06:39:28', NULL),
(3, 'JNE Express', 'CTC', '2-3 hari', 6, '2020-11-15 06:39:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 2),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_10_20_040609_create_categories_table', 3),
(9, '2018_10_24_075802_create_products_table', 4),
(10, '2018_11_08_024109_create_product_att_table', 5),
(11, '2018_11_20_055123_create_tblgallery_table', 6),
(12, '2018_11_26_070031_create_cart_table', 7),
(13, '2018_11_28_072535_create_coupons_table', 8),
(15, '2018_12_01_042342_create_countries_table', 10),
(19, '2018_12_03_043804_add_more_fields_to_users_table', 14),
(17, '2018_12_03_093548_create_delivery_address_table', 12),
(18, '2018_12_05_024718_create_orders_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `expedition` int(11) NOT NULL,
  `shipping_charge` int(11) NOT NULL,
  `coupon_id` int(11) DEFAULT 0,
  `coupon_amount` int(11) DEFAULT 0,
  `grand_total` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `checkout_status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'belum dibayar',
  `struk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_status` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'belum dikirim',
  `shipping_date` date DEFAULT NULL,
  `receipt_status` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'belum diterima',
  `receipt_date` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `users_id`, `expedition`, `shipping_charge`, `coupon_id`, `coupon_amount`, `grand_total`, `order_date`, `checkout_status`, `struk`, `resi`, `shipping_status`, `shipping_date`, `receipt_status`, `receipt_date`, `address`, `kelurahan`, `kecamatan`, `postcode`, `mobile`, `created_at`, `updated_at`) VALUES
(23, 1, 2, 7, 0, NULL, 42, '2020-11-19', 'belum dibayar', NULL, NULL, 'belum dikirim', NULL, 'belum diterima', NULL, '', '', '', '', '', '2020-11-19 09:36:33', '2020-11-19 09:36:33'),
(15, 4, 2, 0, 0, 0, 12, '2020-11-17', 'sudah dibayar', NULL, NULL, 'belum dikirim', NULL, 'belum diterima', NULL, '', '', '', '', '', '2020-11-17 12:46:28', '2020-11-20 11:36:33'),
(16, 4, 1, 0, 0, 0, 17, '2020-11-17', 'belum dibayar', NULL, NULL, 'belum dikirim', NULL, 'belum diterima', NULL, '', '', '', '', '', '2020-11-17 12:56:22', '2020-11-17 12:56:22'),
(17, 4, 3, 0, 0, 0, 12, '2020-11-17', 'belum dibayar', NULL, NULL, 'belum dikirim', NULL, 'belum diterima', NULL, '', '', '', '', '', '2020-11-17 13:00:18', '2020-11-17 13:00:18'),
(18, 4, 2, 0, 0, 0, 29, '2020-11-17', 'belum dibayar', NULL, NULL, 'belum dikirim', NULL, 'belum diterima', NULL, '', '', '', '', '', '2020-11-17 13:02:49', '2020-11-17 13:02:49'),
(19, 4, 2, 0, 7, 0, 29, '2020-11-17', 'belum dibayar', NULL, NULL, 'belum dikirim', NULL, 'belum diterima', NULL, '', '', '', '', '', '2020-11-17 13:03:24', '2020-11-17 13:03:24'),
(20, 1, 3, 0, 6, 1, 15, '2020-11-18', 'sudah dibayar', 'Screenshot (92).png', '1234567890', 'sudah dikirim', '2020-11-19', 'belum diterima', NULL, '', '', '', '', '', '2020-11-18 11:39:35', '2020-11-20 11:35:00'),
(21, 1, 1, 10, 0, NULL, 30, '2020-11-18', 'belum dibayar', NULL, NULL, 'belum dikirim', NULL, 'belum diterima', NULL, '', '', '', '', '', '2020-11-18 11:49:23', '2020-11-18 11:49:23'),
(22, 1, 1, 10, 0, NULL, 30, '2020-11-18', 'belum dibayar', NULL, NULL, 'belum dikirim', NULL, 'belum diterima', NULL, '', '', '', '', '', '2020-11-18 11:59:08', '2020-11-18 11:59:08'),
(24, 1, 2, 7, 0, NULL, 43, '2020-11-19', 'belum dibayar', NULL, NULL, 'belum dikirim', NULL, 'sudah diterima', NULL, 'Perumahan Gunung Batu B28', 'sumbersari', 'ajung', '22222', '082234795673', '2020-11-19 09:58:12', '2020-11-19 09:58:12'),
(25, 1, 2, 7, 6, NULL, 43, '2020-11-19', 'sudah dibayar', NULL, NULL, 'belum dikirim', NULL, 'belum diterima', NULL, 'Perumahan Gunung Batu B28', 'sumbersari', 'ajung', '22222', '082234795673', '2020-11-19 09:58:12', '2020-11-19 15:24:33'),
(26, 1, 2, 7, 0, NULL, 43, '2020-11-19', 'sudah dibayar', NULL, '0987654321', 'sudah dikirim', '2020-11-20', 'belum diterima', NULL, 'Perumahan Gunung Batu B28', 'sumbersari', 'ajung', '22222', '082234795673', '2020-11-19 09:59:43', '2020-11-20 11:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `orders_id`, `products_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 15, 32, 1, '2020-11-17 12:46:28', '2020-11-17 12:46:28'),
(2, 16, 33, 1, '2020-11-17 12:56:22', '2020-11-17 12:56:22'),
(3, 17, 34, 1, '2020-11-17 13:00:18', '2020-11-17 13:00:18'),
(4, 19, 34, 1, '2020-11-17 13:03:24', '2020-11-17 13:03:24'),
(5, 19, 33, 1, '2020-11-17 13:03:24', '2020-11-17 13:03:24'),
(6, 19, 32, 1, '2020-11-17 13:03:24', '2020-11-17 13:03:24'),
(7, 19, 31, 1, '2020-11-17 13:03:24', '2020-11-17 13:03:24'),
(8, 20, 33, 1, '2020-11-18 11:39:35', '2020-11-18 11:39:35'),
(9, 21, 31, 2, '2020-11-18 11:49:23', '2020-11-18 11:49:23'),
(10, 22, 31, 2, '2020-11-18 11:59:08', '2020-11-18 11:59:08'),
(11, 26, 32, 1, '2020-11-19 09:59:43', '2020-11-19 09:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(11) NOT NULL,
  `p_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories_id`, `p_name`, `description`, `stock`, `price`, `weight`, `image`, `created_at`, `updated_at`) VALUES
(39, 14, 'wdwdwd', 'ddddddddddsasd', 0, 3000, 50, '1604937712-wdwdwd.png', '2020-11-09 09:01:52', '2020-11-18 20:13:52'),
(31, 10, 'House', 'House For Sale', 10, 10, 50, '1544064430-house.jpg', '2018-12-05 19:47:10', '2020-11-18 11:59:08'),
(32, 11, 'Vionic Shoes Brand', 'Women Shoes', 11, 12, 50, '1544064607-vionic-shoes-brand.jpg', '2018-12-05 19:50:07', '2020-11-19 09:59:43'),
(33, 17, 'Cole Haan', 'Men\'s Original Grand Wingtip Oxfords', 12, 5, 50, '1544064903-cole-haan.jpg', '2018-12-05 19:55:03', '2018-12-05 19:55:03'),
(34, 13, 'Lenovo ThinkPad', 'Lenovo Thinkpad From China', 12, 2, 50, '1544065331-lenovo-thinkpad.jpg', '2018-12-05 20:02:12', '2018-12-05 20:02:12'),
(41, 27, 'bebek', 'adsdaaddaasadddas', 11, 1111111, 11, '1605732280-bebek.png', '2020-11-18 20:44:41', '2020-11-18 20:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE `tblgallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`id`, `products_id`, `image`, `created_at`, `updated_at`) VALUES
(8, 27, '7664271544063472.jpg', '2018-12-05 19:31:12', '2018-12-05 19:31:12'),
(9, 27, '6768551544063472.jpg', '2018-12-05 19:31:13', '2018-12-05 19:31:13'),
(10, 27, '4131281544063473.jpg', '2018-12-05 19:31:13', '2018-12-05 19:31:13'),
(11, 28, '6720891544063734.jpg', '2018-12-05 19:35:34', '2018-12-05 19:35:34'),
(12, 28, '4686631544063734.jpg', '2018-12-05 19:35:34', '2018-12-05 19:35:34'),
(13, 28, '5960611544063759.jpeg', '2018-12-05 19:35:59', '2018-12-05 19:35:59'),
(14, 29, '5146071544063935.JPG', '2018-12-05 19:38:55', '2018-12-05 19:38:55'),
(15, 29, '762811544063935.jpg', '2018-12-05 19:38:55', '2018-12-05 19:38:55'),
(16, 29, '3716041544063935.jpg', '2018-12-05 19:38:56', '2018-12-05 19:38:56'),
(17, 30, '6832831544064156.jpg', '2018-12-05 19:42:37', '2018-12-05 19:42:37'),
(18, 30, '1655391544064157.jpg', '2018-12-05 19:42:37', '2018-12-05 19:42:37'),
(19, 30, '4693601544064157.jpg', '2018-12-05 19:42:37', '2018-12-05 19:42:37'),
(20, 31, '9233341544064441.jpg', '2018-12-05 19:47:21', '2018-12-05 19:47:21'),
(21, 31, '8167501544064441.jpg', '2018-12-05 19:47:22', '2018-12-05 19:47:22'),
(22, 31, '3887071544064442.jpg', '2018-12-05 19:47:22', '2018-12-05 19:47:22'),
(23, 32, '3998691544064618.jpg', '2018-12-05 19:50:18', '2018-12-05 19:50:18'),
(24, 32, '1159141544064618.jpg', '2018-12-05 19:50:18', '2018-12-05 19:50:18'),
(25, 32, '2035101544064618.jpg', '2018-12-05 19:50:18', '2018-12-05 19:50:18'),
(26, 33, '2128501544064917.jpg', '2018-12-05 19:55:17', '2018-12-05 19:55:17'),
(27, 33, '5649911544064917.jpg', '2018-12-05 19:55:17', '2018-12-05 19:55:17'),
(28, 33, '3704141544064917.jpg', '2018-12-05 19:55:17', '2018-12-05 19:55:17'),
(29, 34, '3899431544065346.JPG', '2018-12-05 20:02:26', '2018-12-05 20:02:26'),
(30, 34, '119131544065346.jpg', '2018-12-05 20:02:27', '2018-12-05 20:02:27'),
(31, 34, '6905491544065347.jpg', '2018-12-05 20:02:27', '2018-12-05 20:02:27'),
(32, 35, '981591544065510.jpeg', '2018-12-05 20:05:10', '2018-12-05 20:05:10'),
(33, 35, '5320811544065510.jpg', '2018-12-05 20:05:11', '2018-12-05 20:05:11'),
(34, 35, '1153181544065511.jpg', '2018-12-05 20:05:11', '2018-12-05 20:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `kelurahan`, `kecamatan`, `postcode`, `mobile`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'WeShare', 'demo@gmail.com', '$2y$10$m9fNpTgwyBVqqVfsJ9bXUensvx5iqlYhzqmL3khhSpKpgqNQnW0t2', 'Perumahan Gunung Batu B28', 'sumbersari', 'ajung', '22222', '082234795673', 1, 'Y3PF1WJQcXi6ogVaO85bqoqxoGEU3tD3KJQNXyGhnWF7iryk9TJPVLjHq4SD', '2018-10-15 02:32:54', '2018-12-05 01:39:52'),
(4, 'Dandy Satrio Wibowo', 'dandy@a.com', '$2y$10$m9fNpTgwyBVqqVfsJ9bXUensvx5iqlYhzqmL3khhSpKpgqNQnW0t2', 'Perumahan Gunung Batu B28', '', '', '22222', '1234567890123', 1, 'bbfpMp0yb2YrKlTAkeTdFQzyuxSLTHps02ZTt9pmd9KQRMGS4wuZHk1cpvPg', '2018-12-06 01:40:27', '2018-12-06 01:40:27'),
(5, 'tes', 'tes@a.in', '$2y$10$m9fNpTgwyBVqqVfsJ9bXUensvx5iqlYhzqmL3khhSpKpgqNQnW0t2', '', '', '', '', '', NULL, 'IxQbHz5QyGjCvhN6a8aOhTAhPW93u8xcjtDWlkWmxkkqHxwZo0jcF7SFfuk6', NULL, NULL),
(6, 'riki tiki', 'rikitiki@da.com', '$2y$10$WbWM5R5Zmw0J939pmnHGTefqMV9pkK07lNULgzZsiSYOqQ4KyOGoC', 'Perumahan Gunung Batu B28', '', '', '22222', '082234795673', NULL, '4cJpiWcMYG1B2SRg0zuEimG4KkAnHs6B6SELC6CKUYpuboMyDSIHJI3TBVTp', '2020-11-17 14:16:25', '2020-11-17 14:16:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `products_id` (`products_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`name`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupon_code` (`coupon_code`);

--
-- Indexes for table `expeditions`
--
ALTER TABLE `expeditions`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `resi` (`resi`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `coupon_code` (`coupon_id`),
  ADD KEY `expedition` (`expedition`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `products_is` (`products_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`),
  ADD KEY `categories_id_2` (`categories_id`);

--
-- Indexes for table `tblgallery`
--
ALTER TABLE `tblgallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id` (`products_id`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expeditions`
--
ALTER TABLE `expeditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
