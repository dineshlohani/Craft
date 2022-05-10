-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 08:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(15) DEFAULT NULL,
  `product` int(15) DEFAULT NULL,
  `orders` int(15) DEFAULT NULL,
  `report` int(15) DEFAULT NULL,
  `users` int(15) DEFAULT NULL,
  `return_order` int(15) DEFAULT NULL,
  `product_review` int(15) DEFAULT NULL,
  `coupon` int(15) DEFAULT NULL,
  `newsletter` int(15) DEFAULT NULL,
  `seo_setting` int(15) DEFAULT NULL,
  `site_setting` int(15) DEFAULT NULL,
  `stock` int(15) DEFAULT NULL,
  `type` int(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `category`, `product`, `orders`, `report`, `users`, `return_order`, `product_review`, `coupon`, `newsletter`, `seo_setting`, `site_setting`, `stock`, `type`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '123456789', 'admin@nerdware.com', NULL, '$2y$10$7YJ1v4KVgZG1YaXyM7Dsu.nKD7AR7tE5COJUhk4fL9gixy2ap/Eqe', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2020-12-11 21:17:40'),
(4, 'Test Admin', '9801187428', 'craft@admin.com', NULL, '$2y$10$/hFSvEvafmh01LJEXMWPMOBtgEtSbklUSlrXmLkilGfe0mYExWg2W', NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_index` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `show_index`, `created_at`, `updated_at`) VALUES
(1, 'Felt Accessories', 'public/media/category/051220_15_05_08.jpeg', NULL, '2020-11-29 10:00:50', '2020-11-29 10:00:50'),
(3, 'Tibetan Handicraft', 'public/media/category/051220_15_16_10.webp', NULL, '2020-11-29 10:55:31', '2020-11-29 10:55:31'),
(4, 'Lokta Paper', 'public/media/category/051220_15_29_12.jpg', NULL, '2020-11-30 03:26:26', '2020-11-30 03:26:26'),
(10, 'Incense & Burner', 'public/media/category/051220_15_15_15.jpeg', NULL, '2020-11-30 07:48:51', '2020-11-30 09:06:28'),
(12, 'Hemp Products', 'public/media/category/051220_15_50_19.jpg', 1, '2020-12-03 06:26:19', '2020-12-03 06:26:19'),
(13, 'Singing Bowl', 'public/media/category/051220_15_44_24.jpeg', 1, '2020-12-03 06:29:03', '2020-12-03 06:29:03'),
(21, 'Cotton Bags', 'public/media/category/051220_14_28_54.jpg', NULL, NULL, NULL),
(22, 'Felt Dryer Balls', 'public/media/category/051220_14_17_57.jpg', NULL, NULL, NULL),
(23, 'Felt Pet Products', 'public/media/category/051220_14_01_59.jpg', NULL, NULL, NULL),
(24, 'Knitwear', 'public/media/category/051220_15_50_01.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'A567ZT22', '20', NULL, '2020-12-01 11:40:25'),
(3, 'ZZSEER432', '50', NULL, NULL),
(4, 'TEST12', '10', NULL, '2020-12-27 23:41:59');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(7, '2020_11_29_041847_create_categories_table', 2),
(8, '2020_11_29_042435_create_subcategories_table', 2),
(9, '2020_12_01_155616_create_coupons_table', 3),
(10, '2020_12_02_063509_create_newsletters_table', 4),
(14, '2020_12_02_111133_create_products_table', 4),
(15, '2020_12_09_154116_create_wishlists_table', 5),
(16, '2020_12_23_094053_create_settings_table', 6),
(17, '2016_06_01_000001_create_oauth_auth_codes_table', 7),
(18, '2016_06_01_000002_create_oauth_access_tokens_table', 7),
(19, '2016_06_01_000003_create_oauth_refresh_tokens_table', 7),
(20, '2016_06_01_000004_create_oauth_clients_table', 7),
(21, '2016_06_01_000005_create_oauth_personal_access_clients_table', 7),
(22, '2020_12_31_122712_create_orders_table', 8),
(23, '2020_12_31_122849_create_orders_details_table', 8),
(25, '2020_12_31_122910_create_shipping_table', 9),
(26, '2021_01_08_073148_create_seo_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'pragyanpkunwar@gmail.com', '2020-12-02 08:39:51', NULL),
(3, 'test@gmail.com', '2020-12-02 09:48:00', NULL),
(4, 'nerdware@gmail.com', '2020-12-12 07:05:37', NULL),
(5, 'random@gmail.com', '2020-12-28 04:49:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'asts8GA7Gu9nZNCvVDwmJpovl7kV8fFV70mM701j', 'http://localhost', 1, 0, 0, '2020-12-28 21:49:03', '2020-12-28 21:49:03'),
(2, NULL, 'Laravel Password Grant Client', '13irqufWWCo3hYTb3pvcwalZgiiQBjNhJ8Pk2wKE', 'http://localhost', 0, 1, 0, '2020-12-28 21:49:03', '2020-12-28 21:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-12-28 21:49:03', '2020-12-28 21:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blnc_trans` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_code`, `payment_type`, `payment_id`, `payment_amount`, `blnc_trans`, `stripe_order_id`, `subtotal`, `shipping`, `vat`, `total`, `status`, `status_code`, `return_order`, `month`, `date`, `year`, `created_at`, `updated_at`) VALUES
(1, '1', 'AR0T77', 'stripe', 'card_1I4hFNFOqsTuqs07TIRH2fwf', '4500', 'txn_1I4hFOFOqsTuqs07yNLTHKYk', '5feec2ea0fda4', '45.00', '0', '0', '45', '4', '12345', '0', 'January', '01-01-21', '2021', NULL, NULL),
(2, '1', '531SSR', 'stripe', 'card_1I4hLOFOqsTuqs07iJ1mZrVF', '23000', 'txn_1I4hLPFOqsTuqs073xTNmt8J', '5feec45eabeb0', '240.00', '0', '0', '230', '3', '54321', '2', 'January', '01-01-21', '2021', NULL, NULL),
(3, '1', '0SQE33', 'stripe', 'card_1I4hW0FOqsTuqs07tINeeqEO', '6600', 'txn_1I4hW1FOqsTuqs078tZf04bk', '5feec6f0c7b74', '66.00', '0', '0', '66', '2', '11111', '0', 'January', '01-01-21', '2021', NULL, NULL),
(4, '1', '973A8Q', 'stripe', 'card_1I50cAFOqsTuqs072gblh5n8', '3000', 'txn_1I50cBFOqsTuqs07uX7fhsbL', '5fefe5ba64b9f', '30.00', '0', '0', '30', '0', '22222', '0', 'January', '02-01-21', '2021', NULL, NULL),
(5, '4', 'B4666A', 'stripe', 'card_1I6vqVFOqsTuqs07rV00UMgb', '280000', 'txn_1I6vqXFOqsTuqs07U8e0YESM', '5ff6e40f6caf2', '2800.00', '0', '0', '2800', '3', 'CTybe', '0', 'January', '07-01-21', '2021', NULL, NULL),
(8, '1', 'EgWSUm', 'stripe', 'card_1IBElRFOqsTuqs075eTJnqLh', '6000', 'txn_1IBElTFOqsTuqs07RVKElBgH', '60068c0220c45', '60.00', '0', '0', '60', '0', 'FtBpv', '0', 'January', '19-01-21', '2021', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`id`, `order_id`, `product_id`, `product_name`, `color`, `size`, `quantity`, `single_price`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, '20', 'Hand Crafted Buddha', 'Teal/Gold', 'M', '3', '15', '45', NULL, NULL),
(2, 2, '16', 'Hemp & Cotton Bag - Laptop Back', 'White', 'Master', '2', '30', '60', NULL, NULL),
(3, 2, '17', 'Golden Etching Tibetan Singing Bowl', 'Bronze', 'Master', '4', '45', '180', NULL, NULL),
(4, 3, '19', 'Tibetan Singing Bowl Set', 'Red', 'Master', '2', '33', '66', NULL, NULL),
(5, 4, '20', 'Hand Crafted Buddha', 'Teal/Gold', 'S', '2', '15', '30', NULL, NULL),
(6, 5, '11', 'Compassion Mantra Prayer Wheel', 'Bronze', 'M', '4', '700', '2800', NULL, NULL),
(7, 6, '1', 'Colored Lokta Journal', 'Red', 'S', '2', '200', '400', NULL, NULL),
(8, 7, '12', 'Ohm Carving Singing Bowl', 'Bronze', 'M', '1', '60', '60', NULL, NULL),
(9, 8, '12', 'Ohm Carving Singing Bowl', 'Bronze', 'M', '1', '60', '60', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@nerdware.com', '$2y$10$mxUlBEbe/YYEnZ6LUCcbK.2niPbg2GBO3y5uV5VdgK3SZaWpKPhui', '2020-12-08 09:09:30'),
('pragyanpkunwar@gmail.com', '$2y$10$fQjrlSgRx7ln0wpr/WBykOQ00TA4vf2JtbcKaWb50ojlzD0YBmp72', '2020-12-08 09:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_dimension` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_diameter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_material` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_selling` int(11) DEFAULT NULL,
  `new_arrival` int(11) DEFAULT NULL,
  `deal_week` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `product_name`, `product_code`, `selling_price`, `product_desc`, `product_quantity`, `product_color`, `product_size`, `product_weight`, `product_dimension`, `product_diameter`, `product_material`, `image_one`, `image_two`, `image_three`, `video_link`, `audio_link`, `discount_price`, `best_selling`, `new_arrival`, `deal_week`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 8, 'Colored Lokta Journal', 'AA231', '200', '<blockquote style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; line-height: 1.4; color: rgb(51, 51, 51); font-size: 13px;\"><font face=\"Comic Sans MS\">Write in style and in comfort in a beautiful handcrafted notebook. Both the interior and exterior are made of lokta paper, which is soft and thick, and will withstand daily use. Lokta Paper is a traditional Nepali handicraft, made from the inner bark of lokta bushes. Historically, this handmade paper has been used for religious and government texts, because it is very durable; the paper is resistant to mildew, humidity, insect damage, tearing and other destruction. Once the pulp is made, the paper is set, and dried in the sun. After the Lokta is harvested, the plant regenerates within 3-5 years making this a very renewable resource.</font></blockquote>', '1', 'Red,Green,Purple', 'S,M,L', '0.3kg', '255 × 115 cm', '5cm', 'Lokta Paper', 'public/media/product/061220_12_46_10.jpg', 'public/media/product/061220_12_29_32.jpg', 'public/media/product/061220_15_13_08.jpg', 'https://www.youtube.com/watch?v=cgxWcxUVjIY', 'https://www.salamisound.com/3013791-old-door-wardrobe-door', NULL, 1, 1, NULL, 1, NULL, NULL),
(2, 1, 11, 'Small Round Rose Felt Purse', 'AA232', '800', '<p><span style=\"color: rgb(51, 51, 51); font-family: Roboto, &quot;PT Sans&quot;, &quot;Open Sans&quot;, Raleway, sans-serif; font-size: 13px;\">There\'s always change floating around in you purse, car, or pockets, until you need it the most. Keep yourself more organized, solve those parking dilemmas, and lighten your wallet with a beautiful handcrafted change purse. Place within an everyday bag, in the center&nbsp;console&nbsp;of your car, or anywhere else you may need some coins.</span><br></p>', '1', 'Rose Red', 'S', '0.1kg', NULL, '5cm', 'Wool', 'public/media/product/1685059702550570.jpg', 'public/media/product/1685059702872129.jpg', 'public/media/product/1685059703090824.jpg', 'https://www.youtube.com/watch?v=cgxWcxUVjIY', 'https://www.salamisound.com/3013791-old-door-wardrobe-door', NULL, 0, 1, NULL, 1, NULL, NULL),
(7, 12, 10, 'Organic Hemp Backpack', 'BHP10', '100', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsumm?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><br></p>', '1', 'White,Red,Lime', 'S,M,L', '0.2kg', '250 × 115 cm', NULL, 'Hemp,Cotton', 'public/media/product/061220_12_32_04.jpg', 'public/media/product/061220_12_44_32.jpg', 'public/media/product/061220_15_56_09.jpg', 'https://www.youtube.com/watch?v=cgxWcxUVjIY', 'https://www.salamisound.com/3013791-old-door-wardrobe-door', NULL, 1, 1, NULL, 1, NULL, NULL),
(11, 3, 16, 'Compassion Mantra Prayer Wheel', 'SKA9P', '1000', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p>', '1', 'Bronze', 'S,M', NULL, NULL, NULL, NULL, 'public/media/product/1685254601821593.jpg', 'public/media/product/1685254602003924.jpg', 'public/media/product/1685254602178122.jpg', NULL, NULL, '700', 1, 1, 1, 1, NULL, NULL),
(12, 13, 12, 'Ohm Carving Singing Bowl', 'KHHAA', '60', '<h3 style=\"box-sizing: border-box; font-family: &quot;PT Serif&quot;, Arial, Helvetica, sans-serif; line-height: 1.1em; color: rgb(21, 21, 21); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 25px; padding: 0px; text-transform: capitalize;\">Ohm Carved Tibetan Singing Bowl</h3><hr style=\"margin-top: 20px; margin-bottom: 20px; border-width: 2px; border-color: rgb(65, 115, 164); color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\">With simplicity and purity in mind, this bowl has been handcrafted by artisans from Nepal. There are Tibetan mantras etched on the outside and simple petal-like designs on the inside.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\">The 4-inch&nbsp;<a href=\"https://www.besthimalaya.com/products/tibetan-special-handmade-singing-bowl-for-chakra-healing-and-sound-therapy\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; background-image: none; background-position: 0px 0px; background-size: initial; background-repeat: repeat; background-attachment: scroll; background-origin: initial; background-clip: initial; color: rgb(20, 64, 130); transition-duration: 0.3s; transition-timing-function: ease; outline: none;\">special chakra healing bowl</a>&nbsp;comes in a set of 3 with a white wood and leather mallet along with a gorgeous yellow and golden Tibetan silk flat mat cushion. The cushion is perfect for placing or storing or bowl. You can also use it while playing your bowls for ease and comfort.</p>', '1', 'Bronze', 'M', '330 gram', NULL, '4 inch', NULL, 'public/media/product/1685342548271481.jpeg', 'public/media/product/1685342548494186.jpeg', 'public/media/product/1685342548746113.jpeg', NULL, NULL, NULL, 1, 1, NULL, 1, NULL, NULL),
(13, 12, 9, 'Pure Hemp Hippie Style Backpack', '7ATTA', '30', '<p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\">With our pure hemp bags, you will be taking another step towards becoming more environmentally cautious and friendly. Made in Nepal, our bags are unisex, and we have choices ranging from coin purses and backpacks to laptop bags and fanny packs. From colors to designs we’ve got it all.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\">Bright and vibrant this hemp backpack is made with strong and durable natural hemp yarns. The blue and&nbsp;red color of the hemp blends together beautifully. This unique piece has a fancy strap. It has adjustable straps along with one small pouch in the front and two water bottle holders at each side. The bag is spacious and versatile. You can carry it daily or accessorize it to make your outfit pop with its color.</p>', '1', 'Blue,Red', 'M', NULL, NULL, NULL, NULL, 'public/media/product/1685405798764099.webp', 'public/media/product/1685405799133872.jpg', 'public/media/product/1685405799283868.jpg', NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL),
(14, 12, 9, 'Owl Printed Hemp Backpack', 'WRACZ', '20', '<p style=\"box-sizing: border-box; margin-bottom: 1.3em; font-family: Lato, sans-serif; font-size: medium;\"><span style=\"box-sizing: border-box;\">Owl Printed Hemp Bag is made up of a mixture of organic hemp and cotton. The special feature of this backpack is the print of a bird named owl and the Gheri cotton material used outside of the pockets.&nbsp;</span></p><ul style=\"box-sizing: border-box; list-style-position: initial; list-style-image: initial; padding: 0px; margin-bottom: 1.3em; font-family: Lato, sans-serif; font-size: medium;\"><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Size:</span>&nbsp;17 x 11 x 5 inch (Height x Length x Width)</span></li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Weight:</span>&nbsp;700gm</li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Material:</span>&nbsp;50% Hemp and 50% Cotton</li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Inside Backpack:</span>&nbsp;Single Zipper which has a separate compartment for 14” laptop&nbsp;</span></li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Outside Backpack:</span>&nbsp;Two water holder side pocket and one small compartment&nbsp;</span></li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\">Best quality zipper</li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\">Comfortable and adjustable strap</li></ul>', '1', 'White,Grey', 'S,M', NULL, NULL, NULL, NULL, 'public/media/product/071220_11_05_02.jpg', 'public/media/product/071220_11_16_02.jpg', 'public/media/product/1685416909059359.jpg', NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL),
(15, 12, 9, 'Buddha Printed Hemp Backpack', 'SF70E', '45', '<p style=\"box-sizing: border-box; margin-bottom: 1.3em; font-family: Lato, sans-serif; font-size: medium;\"><span style=\"box-sizing: border-box;\">Buddha Printed Hemp Bag is made up of a mixture of organic hemp and cotton. The special feature of this backpack is the print of a bird named owl and the Gheri cotton material used outside of the pockets.&nbsp;</span></p><ul style=\"box-sizing: border-box; list-style-position: initial; list-style-image: initial; padding: 0px; margin-bottom: 1.3em; font-family: Lato, sans-serif; font-size: medium;\"><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Size:</span>&nbsp;17 x 11 x 5 inch (Height x Length x Width)</span></li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Weight:</span>&nbsp;700gm</li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Material:</span>&nbsp;50% Hemp and 50% Cotton</li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Inside Backpack:</span>&nbsp;Single Zipper which has a separate compartment for 14” laptop&nbsp;</span></li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Outside Backpack:</span>&nbsp;Two water holder side pocket and one small compartment&nbsp;</span></li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\">Best quality zipper</li><li style=\"box-sizing: border-box; margin-bottom: 0.6em; margin-left: 1.3em;\">Comfortable and adjustable strap</li></ul>', '1', 'Grey,White', 'S,M', NULL, NULL, NULL, NULL, 'public/media/product/1685417787715262.jpg', 'public/media/product/1685417788562806.jpg', 'public/media/product/1685417788690950.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(16, 12, 9, 'Hemp & Cotton Bag - Laptop Back', 'UFTFC', '35', '<p data-mce-fragment=\"1\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Avenir Next Rounded&quot;, sans-serif; font-size: 15px; font-weight: 600;\"><span style=\"box-sizing: border-box; text-decoration-line: underline;\"><strong style=\"box-sizing: border-box; font-weight: bold;\">Hemp &amp; Cotton Bag - Laptop Backpack</strong></span></p><p data-mce-fragment=\"1\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Avenir Next Rounded&quot;, sans-serif; font-size: 15px; font-weight: 600;\">Sourced from a small family business in Kathmandu, Nepal, this range of bags are made with a mixture of Cotton and Pure Hemp, these bags are on very well designed, durable, fashionable, &amp; on trend.</p><p data-mce-fragment=\"1\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Avenir Next Rounded&quot;, sans-serif; font-size: 15px; font-weight: 600;\">They are available in 12 different styles and a variety of sizes.&nbsp; All the bags have lots of pouches and pockets. They are practical, and have been designed for real life, you will love the quality and feel.&nbsp;</p><p data-mce-fragment=\"1\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Avenir Next Rounded&quot;, sans-serif; font-size: 15px; font-weight: 600;\">The laptop bag in this range has polyester lining.</p><p data-mce-fragment=\"1\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Avenir Next Rounded&quot;, sans-serif; font-size: 15px; font-weight: 600;\">Dimensions - Length - 30cm - Width - 10cm - Height - 40cm</p><p data-mce-fragment=\"1\" style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Avenir Next Rounded&quot;, sans-serif; font-size: 15px; font-weight: 600;\">Volume - 12 ltr</p>', '1', 'White,Green', 'Master', NULL, NULL, NULL, NULL, 'public/media/product/1685418113550453.jpg', 'public/media/product/1685418113635827.jpg', 'public/media/product/1685418113714691.jpg', NULL, NULL, '30', NULL, NULL, 1, 1, NULL, NULL),
(17, 13, 13, 'Golden Etching Tibetan Singing Bowl', 'IXX4Y', '45', '<p></p><div id=\"related_item\" class=\"home-carousel\" style=\"box-sizing: border-box; margin: 50px auto 0px; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"></div><p></p><div class=\"product-simple-tab\" style=\"box-sizing: border-box; overflow: hidden; margin: 35px auto 0px; padding-top: 65px; border-top: 1px solid rgb(238, 238, 238); color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div role=\"tabpanel\" style=\"box-sizing: border-box;\"><div class=\"tab-content\" style=\"box-sizing: border-box; padding: 0px 20px; border: 0px solid rgb(225, 225, 225); margin: 0px; overflow: hidden;\"><div role=\"tabpanel\" class=\"tab-pane active\" id=\"tabs-2\" style=\"box-sizing: border-box; display: block;\"><h3 style=\"box-sizing: border-box; font-family: &quot;PT Serif&quot;, Arial, Helvetica, sans-serif; font-weight: 300; line-height: 1.1em; color: rgb(21, 21, 21); margin: 0px; font-size: 25px; padding: 0px; text-transform: capitalize;\">Tibetan Singing Bowl - Handmade Nepal Singing Bowl</h3><hr style=\"box-sizing: content-box; height: 0px; margin-top: 20px; margin-bottom: 20px; border-width: 2px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-color: rgb(65, 115, 164); border-image: initial; border-top-style: solid; display: block;\"><p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.4em;\">A Sankha or a conch is one of the eight auspicious symbols of the Asthamangala. It has multiple interpretations and meanings. Among them the two most common ones are that it’s a symbol of lord Vishnu and another is that the sound produced from it is said to be the sound of dharma which awakens people from ignorance and blesses them with enlightenment.</p><p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.4em;\">This special 4-inch brass bowl has a Sankha etched on the inside and is beautifully decorated with various designs at the sides. It is surrounded with Tibetan mantras on the outside and has simple patterns too. The bowl comes along with a red leather rosewood mallet and a red Tibetan silk round flat mat cushion.</p><p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.4em;\"><strong style=\"box-sizing: border-box; font-weight: 700;\">Types/Material :</strong><span>&nbsp;</span>Brass</p><p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.4em;\"><strong style=\"box-sizing: border-box; font-weight: 700;\">Singing Bowl Size</strong></p><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 20px 25px; list-style: disc;\"><li style=\"box-sizing: border-box; padding: 1px 0px;\">Diameter : 4 inch</li></ul><p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.4em;\"><strong style=\"box-sizing: border-box; font-weight: 700;\">Weight(approx)</strong><span style=\"box-sizing: border-box;\"></span></p><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 20px 25px; list-style: disc;\"><li style=\"box-sizing: border-box; padding: 1px 0px;\">330 gram</li></ul><strong style=\"box-sizing: border-box; font-weight: 700;\">Striker size(inch)</strong><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 20px 25px; list-style: disc;\"><li style=\"box-sizing: border-box; padding: 1px 0px;\">Diameter:&nbsp;2.3 cm</li><li style=\"box-sizing: border-box; padding: 1px 0px;\"><span style=\"box-sizing: border-box;\">Length&nbsp;</span>: 5 inch</li></ul><p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.4em;\"><strong style=\"box-sizing: border-box; font-weight: 700;\">Cushion size(inch) :</strong><span>&nbsp;</span>4 inch</p></div></div></div></div>', '1', 'Bronze', 'Master', NULL, NULL, NULL, NULL, 'public/media/product/1685421962404672.jpg', 'public/media/product/1685421962578989.jpg', 'public/media/product/1685421962664075.jpg', NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL),
(18, 13, 12, 'High Quality Tibetan Singing Bowl', 'DDA3S', '39', '<h3 style=\"box-sizing: border-box; font-family: &quot;PT Serif&quot;, Arial, Helvetica, sans-serif; line-height: 1.1em; color: rgb(21, 21, 21); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 25px; padding: 0px; text-transform: capitalize;\">Handmade Nepal Singing Bowl Set</h3><hr style=\"margin-top: 20px; margin-bottom: 20px; border-width: 2px; border-color: rgb(65, 115, 164); color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\">People believe that mantras are auspicious and chanting it wards off evil and also brings good to those who chant it. Different culture and religion has different mantras of their own.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\">This 4-inch&nbsp;<a href=\"https://www.besthimalaya.com/collections/antique-singing-bowls\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; background-image: none; background-position: 0px 0px; background-size: initial; background-repeat: repeat; background-attachment: scroll; background-origin: initial; background-clip: initial; color: rgb(20, 64, 130); transition-duration: 0.3s; transition-timing-function: ease; outline: none;\">Antique singing bowl</a>&nbsp;is simple and clean with Tibetan mantras and a bajra on the outside along with a Tibetan ohm on the inside. It comes in a set of three with a vivacious red ring cushion and a wooden lotus mallet.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-weight: 700;\">Types/Material :</span>&nbsp;Brass</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-weight: 700;\">Singing Bowl Size</span></p><ul style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 20px 25px; list-style-position: initial; list-style-image: initial; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><li style=\"box-sizing: border-box; padding: 1px 0px;\">Diameter : 4 inch</li></ul><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-weight: 700;\">Weight(approx)</span><span style=\"box-sizing: border-box;\"></span></p><ul style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 20px 25px; list-style-position: initial; list-style-image: initial; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><li style=\"box-sizing: border-box; padding: 1px 0px;\">330 gram</li></ul><p><span style=\"box-sizing: border-box; font-weight: 700; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\">Striker size(inch)</span><span style=\"color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"></span></p><ul style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 20px 25px; list-style-position: initial; list-style-image: initial; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><li style=\"box-sizing: border-box; padding: 1px 0px;\">Diameter:&nbsp;2.3 cm</li><li style=\"box-sizing: border-box; padding: 1px 0px;\"><span style=\"box-sizing: border-box;\">Length&nbsp;</span>: 5 inch</li></ul><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-weight: 700;\">Cushion size(inch) :</span>&nbsp;4 inch</p>', '1', NULL, 'Master', NULL, NULL, NULL, NULL, 'public/media/product/1685422237802887.jpg', 'public/media/product/1685422237929171.jpg', 'public/media/product/1685422238006904.jpg', NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL),
(19, 13, 12, 'Tibetan Singing Bowl Set', 'BAWVJ', '43', '<h3 style=\"box-sizing: border-box; font-family: &quot;PT Serif&quot;, Arial, Helvetica, sans-serif; line-height: 1.1em; color: rgb(21, 21, 21); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 25px; padding: 0px; text-transform: capitalize;\">Yoga And Meditation Singing Bowl Detail</h3><hr style=\"margin-top: 20px; margin-bottom: 20px; border-width: 2px; border-color: rgb(65, 115, 164); color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\">Flowers have always been considered special, auspicious and holy. They ‘re linked with natural beauty and positivity. This 4-inch Antique Tibetan meditation and yoga singing bowl has beautifully etched Tibetan mantras inside and out. The mantras inside are encircles with floral petal like designs and other patterns. This brass singing bowl for meditation comes in a set of 3 with a wooden mallet and a red brocade ring cushion.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-weight: 700;\">Types/Material of Handmade Yoga Singing Bowl :</span>&nbsp;Brass</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-weight: 700;\">Singing Bowl Size</span></p><ul style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 20px 25px; list-style-position: initial; list-style-image: initial; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><li style=\"box-sizing: border-box; padding: 1px 0px;\">Diameter : 4 inch</li></ul><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-weight: 700;\">Weight(approx)</span><span style=\"box-sizing: border-box;\"></span></p><ul style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 20px 25px; list-style-position: initial; list-style-image: initial; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><li style=\"box-sizing: border-box; padding: 1px 0px;\">330 gram</li></ul><p><span style=\"box-sizing: border-box; font-weight: 700; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\">Striker size(inch)</span><span style=\"color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"></span></p><ul style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 20px 25px; list-style-position: initial; list-style-image: initial; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><li style=\"box-sizing: border-box; padding: 1px 0px;\">Diameter:&nbsp;2.3 cm</li><li style=\"box-sizing: border-box; padding: 1px 0px;\"><span style=\"box-sizing: border-box;\">Length&nbsp;</span>: 5 inch</li></ul><p style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; line-height: 1.4em; color: rgb(106, 106, 106); font-family: arial, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-weight: 700;\">Cushion size(inch) :</span>&nbsp;4 inch</p>', '9', 'Red,Bronze', 'Master', NULL, NULL, NULL, NULL, 'public/media/product/1685422502409812.jpg', 'public/media/product/1685422502491128.jpg', 'public/media/product/1685422502616350.jpg', NULL, NULL, '33', NULL, NULL, 1, 1, NULL, NULL),
(20, 3, 17, 'Hand Crafted Buddha', 'AQMKG', '25', '<p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 15px; text-align: justify;\"><font face=\"Comic Sans MS\"><span style=\"box-sizing: border-box;\">Hand Crafted Buddha - Teal &amp; Gold - Large</span><br></font></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 15px; text-align: justify;\"><font face=\"Comic Sans MS\">Mudras are used within yoga and meditation practice as a means of moving, controlling and sealing prana (life force) within the body.<em style=\"box-sizing: border-box;\">Bhumispara mudra</em><span style=\"box-sizing: border-box;\">&nbsp;</span>is a hand gesture, thought to be adopted by Siddhartha Gautama (Buddha) in the moment of his enlightenment. As such, this mudra is commonly depicted in statues and carvings of Buddha in meditation. Translated from Sanskrit as the \"earth touching gesture,\"<span style=\"box-sizing: border-box;\">&nbsp;</span><em style=\"box-sizing: border-box;\">b</em><em style=\"box-sizing: border-box;\">humispara mudra<span style=\"box-sizing: border-box;\">&nbsp;</span></em>is symbolic of Buddha\'s triumph over temptation by the demon king Mara.</font></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 15px; text-align: justify;\"><font face=\"Comic Sans MS\">It is believed that the earth bore witness to this event as a result of Buddha lowering his right hand, and so statues of Buddha in<span style=\"box-sizing: border-box;\">&nbsp;</span><em style=\"box-sizing: border-box;\">b</em><em style=\"box-sizing: border-box;\">humispara mudra<span style=\"box-sizing: border-box;\">&nbsp;</span></em>are known as the \"earth witness\".&nbsp;This<span style=\"box-sizing: border-box;\">&nbsp;</span><em style=\"box-sizing: border-box;\">mudra</em><span style=\"box-sizing: border-box;\">&nbsp;</span>is practiced in lotus pose, with the right hand lowered over the right knee, fingertips pointing toward the ground and palm facing inwards. The left hand remains in the lap, with the palm open toward the sky. This suggests that Buddha had previously been in<span style=\"box-sizing: border-box;\">&nbsp;</span><em style=\"box-sizing: border-box;\">dhyana mudra,<span style=\"box-sizing: border-box;\">&nbsp;</span></em>before moving his right hand to touch the earth.</font></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 15px; text-align: justify;\"><font face=\"Comic Sans MS\">It is believed that Buddha used<span style=\"box-sizing: border-box;\">&nbsp;</span><em style=\"box-sizing: border-box;\">bhumispara mudra</em><span style=\"box-sizing: border-box;\">&nbsp;</span>in order to claim the earth as a witness to the moment of his enlightenment. The demon king Mara was trying to claim enlightenment for himself, and tried to tempt Buddha out of meditation with an army of demons and monsters. When Mara challenged Buddha to determine who would be the witness to his enlightenment, Buddha lowered his right hand and the earth roared \"I bear you the witness\".</font></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 15px; text-align: justify;\"><font face=\"Comic Sans MS\">The roar from the earth scared Mara and his army away, allowing Buddha to triumph over temptation and achieve enlightenment.<span style=\"box-sizing: border-box;\">&nbsp;</span><em style=\"box-sizing: border-box;\">B</em><em style=\"box-sizing: border-box;\">humispara mudra<span style=\"box-sizing: border-box;\">&nbsp;</span></em>is therefore symbolic of Buddha\'s unwavering dedication to meditation, and his firmness in the pursuit of enlightenment. It also signifies the union of<span style=\"box-sizing: border-box;\">&nbsp;</span><em style=\"box-sizing: border-box;\">Upaya</em><span style=\"box-sizing: border-box;\">&nbsp;</span>(skillful means) and<span style=\"box-sizing: border-box;\">&nbsp;</span><em style=\"box-sizing: border-box;\">Prajna</em><span style=\"box-sizing: border-box;\">&nbsp;</span>(wisdom) as represented by the right and left hands respectively.</font></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 15px; text-align: justify;\"><font face=\"Comic Sans MS\">Dimensions :</font></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 15px; text-align: justify;\"><font face=\"Comic Sans MS\">Length - 17cm</font></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 15px; text-align: justify;\"><font face=\"Comic Sans MS\">Width - 11cm&nbsp;</font></p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-size: 15px; text-align: justify;\"><font face=\"Comic Sans MS\"> Height - 27cm</font></p>', '10', 'Teal/Gold', 'S,M,L', '0.3kg', NULL, NULL, 'Resin', 'public/media/product/1685485018960935.webp', 'public/media/product/1685485019283642.webp', 'public/media/product/1685485019398038.webp', 'https://www.youtube.com/watch?v=cgxWcxUVjIY', NULL, '15', NULL, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bing_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `meta_title`, `meta_author`, `meta_tag`, `meta_description`, `google_analytics`, `bing_analytics`, `created_at`, `updated_at`) VALUES
(1, 'CraftsMan Updated', 'Test', 'test_tag edited', 'test_desc edited', 'test_google edited', 'test_bing edited', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ytube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `vat`, `shipping_charge`, `email`, `phone`, `phone1`, `address`, `logo`, `fb_link`, `insta_link`, `ytube_link`, `twitter_link`, `created_at`, `updated_at`) VALUES
(1, '0', '0', 'craftsmannepal@gmail.com', '9841456628', '9860560133', 'Thamel, Nepal', NULL, 'https://www.facebook.com/nerdwareinnov', 'https://www.instagram.com/craftsmannepal/', 'https://www.youtube.com/watch?v=8SbUC-UaAxE&ab_channel=GunsNRosesVEVO', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_apartment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_note` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `order_id`, `ship_name`, `ship_country`, `ship_address`, `ship_apartment`, `ship_city`, `zip_code`, `ship_email`, `ship_phone`, `order_note`, `created_at`, `updated_at`) VALUES
(1, '1', 'Kunwar Pragyan', 'Nepal', 'Kalanki', 'Star Apartment, Test, 12', 'Kathmandu', '44600', 'pragyanpkunwar@gmail.com', '+977 9861489217', 'Test Note', NULL, NULL),
(2, '2', 'Daniell Hunter', 'United States', '627 W Tarrant Rd', 'Star Apartment, Test, 12', 'Grand Prairie', '75050', 'nerdwareinnov@gmail.com', '+977 9861489217', NULL, NULL, NULL),
(3, '3', 'Daniell Hunter', 'United States', '627 W Tarrant Rd', 'Star Apartment, Test, 12', 'Grand Prairie', '75050', 'nerdwareinnov@gmail.com', '+977 9861489217', NULL, NULL, NULL),
(4, '4', 'Nerdware User', 'United States', '627 W Tarrant Rd', 'Star Apartment, Test, 12', 'Grand Prairie', '75050', 'user@nerdware.com', '+977 9861489217', 'I love your store and products you have. Hope you will deliver it soon. Thank You!', NULL, NULL),
(5, '5', 'Anuj Khadka', 'Nepal', 'Setopul', NULL, 'Kathmandu', '44600', 'anuj@nerdware.com.np', '9801187428', 'This order should display in today order.', NULL, NULL),
(6, '6', 'Anuj Khadka', 'Nepal', 'Setopul', NULL, 'Kathmandu', '44600', 'user@nerdware.com', '9801187428', NULL, NULL, NULL),
(7, '7', 'Daniell Hunter', 'United States', '627 W Tarrant Rd', 'Star Apartment, Test, 12', 'Grand Prairie', '75050', 'nerdwareinnov@gmail.com', '9861489217', NULL, NULL, NULL),
(8, '8', 'Daniell Hunter', 'United States', '627 W Tarrant Rd', 'Star Apartment, Test, 12', 'Grand Prairie', '75050', 'nerdwareinnov@gmail.com', '9861489217', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(7, 4, 'Lokta Greeting Cards', NULL, NULL),
(8, 4, 'Lokta Journal', NULL, NULL),
(9, 12, 'Hemp Backpack', NULL, NULL),
(10, 12, 'Hemp Waist Pouch', NULL, NULL),
(11, 1, 'Felt Bag & Purse', NULL, NULL),
(12, 13, 'Hand Hammered Brass', NULL, NULL),
(13, 13, 'Singing Bowl Mallet', NULL, NULL),
(15, 3, 'Bell', NULL, NULL),
(16, 3, 'Prayer Wheel', NULL, NULL),
(17, 3, 'Statue', NULL, NULL),
(18, 10, 'Incense Burner', NULL, NULL),
(19, 10, 'Incense Sticks', NULL, NULL),
(20, 10, 'Rope Incense', NULL, NULL),
(21, 21, 'Boho Bags', NULL, NULL),
(22, 21, 'Cotton Tote Bag', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `avatar`, `provider`, `provider_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nerdware User', '+977 9861489217', 'user@nerdware.com', NULL, NULL, NULL, NULL, '$2y$10$qfClAEj6V.m0fJGbAIr7le0acd/L0bOeNMOlzmfUonuUiNx4M.pwS', NULL, '2020-11-28 22:44:45', '2020-12-09 05:03:26'),
(4, 'Test Nerdware', '9841456628', 'test@nerdware.com', NULL, NULL, NULL, NULL, '$2y$10$/LKlDl3AdxVjWVgV3.hqRO0Ww50xN97b9hmlqseqRO3.4lkNY4YW6', NULL, '2020-12-28 01:28:33', '2021-01-18 05:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(14, 1, 20, NULL, NULL),
(15, 1, 19, NULL, NULL),
(16, 1, 14, NULL, NULL),
(17, 1, 13, NULL, NULL),
(18, 1, 11, NULL, NULL),
(19, 1, 12, NULL, NULL),
(20, 1, 18, NULL, NULL);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `product_code` (`product_code`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
