-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table fresh.activations
CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.activations: ~1 rows (approximately)
/*!40000 ALTER TABLE `activations` DISABLE KEYS */;
INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
	(2, 3, 'UYnsGxKvlbmbZNpc8afbOk4wO8S1g7SN', 1, '2018-03-08 05:56:21', '2018-03-08 05:56:21', '2018-03-08 05:56:21');
/*!40000 ALTER TABLE `activations` ENABLE KEYS */;

-- Dumping structure for table fresh.addresses
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) unsigned NOT NULL,
  `block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.addresses: ~0 rows (approximately)
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;

-- Dumping structure for table fresh.areas
CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `district_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `areas_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.areas: ~0 rows (approximately)
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;

-- Dumping structure for table fresh.branches
CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(10) unsigned NOT NULL,
  `address_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `branches_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.branches: ~0 rows (approximately)
/*!40000 ALTER TABLE `branches` DISABLE KEYS */;
/*!40000 ALTER TABLE `branches` ENABLE KEYS */;

-- Dumping structure for table fresh.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) unsigned DEFAULT NULL,
  `department_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.categories: ~4 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `branch_id`, `department_id`, `name`, `slug`, `thumbnail`, `created_at`, `updated_at`) VALUES
	(2, NULL, 1, 'Tops, Tshirts & Shirts', 'tops,-tshirts-&-shirts', 'images/Category/1534229298.jpg', '2018-08-14 06:48:18', '2018-08-14 06:48:18'),
	(3, NULL, 1, 'Dresses', 'dresses', 'images/Category/1534229475.jpg', '2018-08-14 06:51:15', '2018-08-14 06:51:15'),
	(4, NULL, 2, 'Shirts', 'shirts', 'images/Category/1534229603.jpg', '2018-08-14 06:53:23', '2018-08-14 06:53:23'),
	(5, NULL, 2, 'Jeans', 'jeans', 'images/Category/1534229646.jpg', '2018-08-14 06:54:06', '2018-08-14 06:54:06');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table fresh.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `departments_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.departments: ~2 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`id`, `branch_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'Girls', 'girls', '2018-08-14 06:43:33', '2018-08-14 06:43:33'),
	(2, NULL, 'Boys', 'boys', '2018-08-14 06:43:43', '2018-08-14 06:43:43');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Dumping structure for table fresh.districts
CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `districts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.districts: ~2 rows (approximately)
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Dhaka', 'dhaka', '2018-03-06 09:15:50', '2018-07-25 06:22:29'),
	(3, 'Barisal', 'barisal', '2018-07-25 06:25:17', '2018-07-25 06:25:17');
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;

-- Dumping structure for table fresh.expenses
CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.expenses: ~0 rows (approximately)
/*!40000 ALTER TABLE `expenses` DISABLE KEYS */;
/*!40000 ALTER TABLE `expenses` ENABLE KEYS */;

-- Dumping structure for table fresh.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imageable_id` int(10) unsigned NOT NULL,
  `imageable_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `images_src_unique` (`src`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.images: ~6 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `imageable_id`, `imageable_type`, `type`, `status`, `src`, `created_at`, `updated_at`) VALUES
	(2, 2, 'category', 'Thumbnail', 1, 'images/Category/1534229298.jpg', '2018-08-14 06:48:18', '2018-08-14 06:48:18'),
	(3, 3, 'category', 'Thumbnail', 1, 'images/Category/1534229475.jpg', '2018-08-14 06:51:15', '2018-08-14 06:51:15'),
	(4, 4, 'category', 'Thumbnail', 1, 'images/Category/1534229603.jpg', '2018-08-14 06:53:24', '2018-08-14 06:53:24'),
	(5, 5, 'category', 'Thumbnail', 1, 'images/Category/1534229646.jpg', '2018-08-14 06:54:06', '2018-08-14 06:54:06'),
	(6, 1, 'product', 'Thumbnail', 1, 'images/products/1534230785.jpg', '2018-08-14 07:13:05', '2018-08-14 07:13:05'),
	(7, 7, 'product', 'Thumbnail', 1, 'images/products/1534231278.jpg', '2018-08-14 07:21:19', '2018-08-14 07:21:19');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping structure for table fresh.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.migrations: ~15 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_02_18_072039_create_departments_table', 1),
	(4, '2018_02_18_072233_create_categories_table', 1),
	(6, '2018_02_18_072303_create_branches_table', 1),
	(7, '2018_02_18_072321_create_products_table', 1),
	(8, '2018_02_18_083024_create_images_table', 1),
	(11, '2018_02_18_083800_create_prices_table', 1),
	(12, '2018_02_18_084850_create_purchases_table', 1),
	(13, '2018_02_18_084909_create_trets_table', 1),
	(14, '2018_02_18_084921_create_stocks_table', 1),
	(15, '2018_02_18_085022_create_expences_table', 1),
	(16, '2018_02_18_085040_create_adderesses_table', 1),
	(17, '2018_02_20_060101_create_areas_table', 1),
	(18, '2018_02_20_060425_create_districts_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table fresh.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table fresh.persistences
CREATE TABLE IF NOT EXISTS `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.persistences: ~0 rows (approximately)
/*!40000 ALTER TABLE `persistences` DISABLE KEYS */;
/*!40000 ALTER TABLE `persistences` ENABLE KEYS */;

-- Dumping structure for table fresh.prices
CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `priceable_id` int(10) unsigned NOT NULL,
  `priceable_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.prices: ~0 rows (approximately)
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;

-- Dumping structure for table fresh.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `branch_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for_sale` tinyint(1) NOT NULL,
  `thumbnail` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit_count` decimal(10,0) DEFAULT 0,
  `price` decimal(10,2) NOT NULL,
  `old_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.products: ~10 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `category_id`, `branch_id`, `name`, `slug`, `unit`, `for_sale`, `thumbnail`, `hit_count`, `price`, `old_price`, `created_at`, `updated_at`) VALUES
	(1, 3, NULL, 'Cotton Women\'s Maxi Long Dress Jaipuri', 'cotton-women\'s-maxi-long-dress-jaipuri', 'PCS', 1, 'images/products/1534230785.jpg', 10, 1000.00, 1200.00, '2018-08-14 07:13:05', '2018-08-14 07:13:05'),
	(2, 3, NULL, 'Cotton Women\'s Maxi Long Dress Jaipuri1', 'cotton-women\'s-maxi-long-dress-jaipuri', 'PCS', 1, 'images/products/1534230785.jpg', 1, 1200.00, NULL, '2018-08-14 07:13:05', '2018-08-14 07:13:05'),
	(4, 3, NULL, 'Cotton Women\'s Maxi Long Dress Jaipuri2', 'cotton-women\'s-maxi-long-dress-jaipuri', 'PCS', 1, 'images/products/1534230785.jpg', 0, 1250.00, NULL, '2018-08-14 07:13:05', '2018-08-14 07:13:05'),
	(5, 3, NULL, 'Cotton Women\'s Maxi Long Dress Jaipuri3', 'cotton-women\'s-maxi-long-dress-jaipuri', 'PCS', 1, 'images/products/1534230785.jpg', 0, 1250.00, NULL, '2018-08-14 07:13:05', '2018-08-14 07:13:05'),
	(6, 3, NULL, 'Cotton Women\'s Maxi Long Dress Jaipuri4', 'cotton-women\'s-maxi-long-dress-jaipuri', 'PCS', 1, 'images/products/1534230785.jpg', 0, 1400.00, NULL, '2018-08-14 07:13:05', '2018-08-14 07:13:05'),
	(7, 5, NULL, 'Levi\'s Men\'s (65504) Skinny Fit Jeans', 'levi\'s-men\'s-(65504)-skinny-fit-jeans', 'PCS', 1, 'images/products/1534231278.jpg', 0, 1450.00, NULL, '2018-08-14 07:21:18', '2018-08-14 07:21:18'),
	(8, 5, NULL, 'Levi\'s Men\'s (65504) Skinny Fit Jeans1', 'levi\'s-men\'s-(65504)-skinny-fit-jeans', 'PCS', 1, 'images/products/1534231278.jpg', 0, 1500.00, NULL, '2018-08-14 07:21:18', '2018-08-14 07:21:18'),
	(9, 5, NULL, 'Levi\'s Men\'s (65504) Skinny Fit Jeans2', 'levi\'s-men\'s-(65504)-skinny-fit-jeans', 'PCS', 1, 'images/products/1534231278.jpg', 0, 1520.00, NULL, '2018-08-14 07:21:18', '2018-08-14 07:21:18'),
	(10, 5, NULL, 'Levi\'s Men\'s (65504) Skinny Fit Jeans3', 'levi\'s-men\'s-(65504)-skinny-fit-jeans', 'PCS', 1, 'images/products/1534231278.jpg', 0, 1700.00, NULL, '2018-08-14 07:21:18', '2018-08-14 07:21:18'),
	(11, 5, NULL, 'Levi\'s Men\'s (65504) Skinny Fit Jeans4', 'levi\'s-men\'s-(65504)-skinny-fit-jeans', 'PCS', 1, 'images/products/1534231278.jpg', 9, 1820.00, NULL, '2018-08-14 07:21:18', '2018-08-14 07:21:18');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table fresh.purchases
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buyer_id` int(10) unsigned NOT NULL,
  `merchant_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `branch_id` int(10) unsigned NOT NULL,
  `quantity` decimal(8,0) NOT NULL,
  `deposit` decimal(8,0) DEFAULT 0,
  `tret` decimal(8,0) DEFAULT 0,
  `price` decimal(8,0) NOT NULL,
  `update_stock` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.purchases: ~0 rows (approximately)
/*!40000 ALTER TABLE `purchases` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchases` ENABLE KEYS */;

-- Dumping structure for table fresh.reminders
CREATE TABLE IF NOT EXISTS `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.reminders: ~0 rows (approximately)
/*!40000 ALTER TABLE `reminders` DISABLE KEYS */;
/*!40000 ALTER TABLE `reminders` ENABLE KEYS */;

-- Dumping structure for table fresh.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double(3,0) DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.roles: ~6 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `slug`, `name`, `weight`, `permissions`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'Admin', 100, NULL, '2018-03-06 10:17:22', '2018-04-18 15:10:52'),
	(3, 'buyer', 'Buyer', 50, NULL, '2018-03-08 06:31:53', '2018-05-15 06:07:35'),
	(4, 'customer', 'Customer', 999, NULL, '2018-03-09 05:49:31', '2018-04-20 06:33:20'),
	(5, 'managing_director', 'Managing Director', 150, NULL, '2018-03-09 05:49:44', '2018-05-15 06:01:20'),
	(6, 'delevery_boy', 'Delevery boy', 55, NULL, '2018-03-09 05:49:59', '2018-05-15 06:09:44'),
	(8, 'manager', 'Manager', 80, NULL, '2018-05-15 06:02:37', '2018-05-15 06:02:37');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table fresh.role_users
CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.role_users: ~1 rows (approximately)
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
	(3, 1, '2018-03-08 05:56:22', '2018-03-08 05:56:22');
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;

-- Dumping structure for table fresh.stocks
CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `deposit` decimal(8,0) NOT NULL,
  `withdraw` decimal(8,0) NOT NULL DEFAULT 0,
  `balance` decimal(8,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.stocks: ~0 rows (approximately)
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;
/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;

-- Dumping structure for table fresh.throttle
CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.throttle: ~0 rows (approximately)
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;

-- Dumping structure for table fresh.trets
CREATE TABLE IF NOT EXISTS `trets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stock_id` int(10) unsigned NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` decimal(8,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.trets: ~0 rows (approximately)
/*!40000 ALTER TABLE `trets` DISABLE KEYS */;
/*!40000 ALTER TABLE `trets` ENABLE KEYS */;

-- Dumping structure for table fresh.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) unsigned DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` decimal(6,0) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_mobile_unique` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fresh.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `branch_id`, `mobile`, `name`, `points`, `password`, `permissions`, `last_login`, `created_at`, `updated_at`) VALUES
	(3, 1, '01784255196', 'Admin', 100, '$2y$10$ooXlQwxjbZVVqoO5ncmTU.Q0TTpl8Kt69U4qSZLWArLyEsPldk.y6', NULL, '2018-08-14 07:08:38', '2018-03-08 05:56:21', '2018-08-14 07:08:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;